<?php
  session_start();
  /* echo $filas['usuario']; */
  $varsesion = $_SESSION['correo'];
  
  if($varsesion == null || $varsesion == '') {
    echo 'Usted no tiene autorización';
    die();
  }
  ?>

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
    <link rel="stylesheet" href="index/index.css" />
  </head>
  <body>
    <header class="container">
      <div class="row">
        <div class="col-auto me-auto">
          <h1><i class="fas fa-volleyball-ball"></i> SGTV</h1>
        </div>
        <div class="col-auto">
          <!-- <a href="index/login/login.html">
            <button class="btn button1" type="button">
              <b>Iniciar Sesión</b>
            </button>
          </a> -->
          <a href="cerrar_sesion.php">
            <button class="btn button2" type="button">
              <b>Cerrar Sesión</b>
            </button>
          </a>
        </div>
      </div>
    </header>

    <main class="row">
      <article class="col-xs-12 col-sm-6">
        <a href="nuevoTorneo/nuevoTorneo.html">
          <center>
            <img
              src="img/icon trophy.png"
              class="img-fluid"
              alt="trophy icon"
            />
            <br />
            <h3><i class="fas fa-plus-circle"></i> Nuevo Torneo</h3>
          </center>
        </a>
      </article>
      <article class="col-xs-12 col-sm-6">
        <a href="torneo/verificarEquipos.php">
          <center>
            <img
              src="img/icon trophy.png"
              class="img-fluid"
              alt="trophy icon"
            />
            <br />
            <h3><i class="fas fa-arrow-circle-right"></i> Continuar Torneo</h3>
          </center>
        </a>
      </article>
      <!--<article class="col-xs-12 col-sm-4">
        <a href="nuevoTorneo/nuevoTorneo.html">
          <center>
            <img
              src="img/rating.svg"
              class="img-fluid"
              alt="trophy icon"
            />
            <br />
            <h3><i class="fas fa-arrow-circle-right"></i> Estadísticas Torneo</h3>
          </center>
        </a>
      </article>-->
    </main>
    <!-- Scripts de boostrap-->
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
