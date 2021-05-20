<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--   CONTADOR DE LA INTERFAZ DE PUNTOS     -->
    <script type="text/javascript">
        //  VARIABLES DEL FRONTEND
        let guardarPuntos = new Array();
        //  VARIABLES DEL BACKEND
        let contadorEquipo1 = 0;
        let contadorEquipo2 = 0;

        function countingClicks(id){
            puntos = parseInt(document.getElementById(id).textContent);
            document.getElementById(id).innerHTML = ++puntos;
            contadorEquipo1++;
            console.log("equipo1 -"+contadorEquipo1);
            guardarPuntos[id]=puntos;
            console.log(guardarPuntos);
            document.getElementById("puntosEquipo1").setAttribute('value', contadorEquipo1);
            document.getElementById("puntosEquipo2").setAttribute('value', contadorEquipo2);
        }

        function deductClicks(id){
            puntos = parseInt(document.getElementById(id).textContent);
            if (puntos >= 1) {
                document.getElementById(id).innerHTML= --puntos;
                contadorEquipo1--;
                console.log("equipo1 -"+contadorEquipo1);
            }
            if (puntos >= 0){
                guardarPuntos[id]=puntos;//arreglo que guarda el puntaje de cada jugadora
                console.log(guardarPuntos);
            }
            document.getElementById("puntosEquipo1").setAttribute('value', contadorEquipo1);
            document.getElementById("puntosEquipo2").setAttribute('value', contadorEquipo2);
        }

        function countingClicksb(id){
            puntos = parseInt(document.getElementById(id).textContent);
            document.getElementById(id).innerHTML = ++puntos;
            contadorEquipo2++;
            console.log("equipo2 -"+contadorEquipo2);
            guardarPuntos[id]=puntos;//arreglo que guarda el puntaje de cada jugadora del equipo 2
            console.log(guardarPuntos);
            document.getElementById("puntosEquipo1").setAttribute('value', contadorEquipo1);
            document.getElementById("puntosEquipo2").setAttribute('value', contadorEquipo2);
        }

        function deductClicksb(id){
            puntos = parseInt(document.getElementById(id).textContent);
            if (puntos >= 1) {
                document.getElementById(id).innerHTML= --puntos;
                contadorEquipo2--;
                console.log("equipo2 -"+contadorEquipo2);
            }
            if (puntos >= 0){
                guardarPuntos[id]=puntos;//arreglo que guarda el puntaje de cada jugadora
                console.log(guardarPuntos);
            }
            document.getElementById("puntosEquipo1").setAttribute('value', contadorEquipo1);
            document.getElementById("puntosEquipo2").setAttribute('value', contadorEquipo2);
        }
        
    </script>

</body>
</html>