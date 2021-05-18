<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link de boostrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <!-- Link de font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
    />
    <title>SGTV</title>
    <link rel="stylesheet" href="set.css" />
  </head>
  <body>
  <?php
  include "contadorPuntos.php";
  include "../../conexion/conexionServer.php";
  $codigoEncuentro = $_GET["Cod_Encuentro"];
  $sql = "SELECT Nombre_Equipo FROM equipos WHERE Cod_Equipo = (  SELECT Cod_Equipo1
                                                                        FROM encuentro
                                                                        WHERE Cod_Encuentro = $codigoEncuentro )";
  $consulta = mysqli_query($conexion, $sql);
  $mostrar = mysqli_fetch_assoc($consulta);
  $nombreEquipo1 = $mostrar["Nombre_Equipo"];
  
  $sql = "SELECT Nombre_Equipo FROM equipos WHERE Cod_Equipo = (  SELECT Cod_Equipo2
                                                                        FROM encuentro
                                                                        WHERE Cod_Encuentro = $codigoEncuentro )";
  $consulta = mysqli_query($conexion, $sql);
  $mostrar = mysqli_fetch_assoc($consulta);
  $nombreEquipo2 = $mostrar["Nombre_Equipo"];

  ?>
    <header class="container">
      <div class="row">
        <div class="col-auto">
          <a href="encuentrosDiarios.php">
            <h1><i class="fas fa-arrow-alt-circle-left"></i></h1>
          </a>
        </div>
        <div class="col-auto me-auto">
          <a href="">
            <h1><i class="fas fa-volleyball-ball"></i> SGTV</h1>
          </a>
        </div>
        <div class="col-auto">
          <button class="btn button" name="enviarPuntos" type="submit">
            <b>Guardar</b>
          </button>
        </div>
        <center>
          <ul>
            <a href="#">
              <button class="btn button" type="button">
                <b>Puntos</b>
              </button>
            </a>
            <a href="amonestacionesSet.php?Cod_Encuentro=<?php echo $codigoEncuentro ?>">
              <button class="btn button" type="button">
                <b>Amonestaciones</b>
              </button>
            </a>
          </ul>
        </center>
      </div>
    </header>
    <main class="container">
      <center>
        <img
          src="../../img/mallaVolleyball.svg"
          alt="icono malla voleibol"
          width="130px"
        />
        <h2>Puntos Set 1</h2>
      </center>
      <br />
      <div class="row">
        <section class="col-xs-12 col-sm-6">
          <table class="table table-hover">
            <thead>
              <tr>
                <td class="columnaCabecera">
                  <b>
                    <center><?php echo $nombreEquipo1; ?></center>
                  </b>
                </td>
                <td>
                  <b>
                    <center>Contador</center>
                  </b>
                </td>
              </tr>
            </thead>
            <?php
            include "contadorPuntos.php";
            include "../../conexion/conexionServer.php";
            $codigoEncuentro = $_GET["Cod_Encuentro"];
            $sql = "SELECT Id_Jugadora, Nombre FROM jugadoras WHERE Cod_equipo = (  SELECT Cod_Equipo1
                                                                                FROM encuentro
                                                                                WHERE Cod_Encuentro = $codigoEncuentro )";
            $consulta = mysqli_query($conexion,$sql);
            while ($mostrar = mysqli_fetch_assoc($consulta)) {
            ?>
            <tbody>
              <tr>
                <td><?php $mostrar['Id_Jugadora']; echo $mostrar['Nombre'] ?></td>
                <td>
                  <center>
                    <button onclick="deductClicks('<?php echo $mostrar['Id_Jugadora'] ?>')">
                      <i class="fas fa-minus"></i>
                    </button>
                    <text id="<?php echo $mostrar['Id_Jugadora'] ?>" class="contador">0</text>
                    <button onclick="countingClicks('<?php echo $mostrar['Id_Jugadora'] ?>')">
                      <i class="fas fa-plus"></i>
                    </button>
                  </center>
                </td>
              </tr>
            </tbody>
            <?php
            }
            ?>
          </table>
        </section>
        <section class="col-xs-12 col-sm-6">
          <table class="table table-hover">
            <thead>
              <tr>
                <td class="columnaCabecera">
                  <b>
                    <center><?php echo $nombreEquipo2; ?></center>
                  </b>
                </td>
                <td>
                  <b>
                    <center>Contador</center>
                  </b>
                </td>
              </tr>
            </thead>
            <?php
            $sql = "SELECT Id_Jugadora, Nombre FROM jugadoras WHERE Cod_equipo = (  SELECT Cod_Equipo2
                                                                                FROM encuentro
                                                                                WHERE Cod_Encuentro = $codigoEncuentro )";
            $consulta = mysqli_query($conexion,$sql);
            while ($mostrar = mysqli_fetch_assoc($consulta)) {
            ?>
            <tbody>
              <tr>
                <td><?php $mostrar['Id_Jugadora']; echo $mostrar['Nombre'] ?></td>
                <td>
                  <center>
                    <button onclick="deductClicksb('<?php echo $mostrar['Id_Jugadora'] ?>')">
                      <i class="fas fa-minus"></i>
                    </button>
                    <text id="<?php echo $mostrar['Id_Jugadora'] ?>" class="contador">0</text>
                    <button onclick="countingClicksb('<?php echo $mostrar['Id_Jugadora'] ?>')">
                      <i class="fas fa-plus"></i>
                    </button>
                  </center>
                </td>
              </tr>
            </tbody>
            <?php
            }
            ?>
          </table>
        </section>
      </div>
    </main>

    <!-- Scripts de bootstrap-->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
    <!--Scripts cdn de font awesome-->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"
      integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw=="
      crossorigin="anonymous"
    ></script>
  </body>
</html>