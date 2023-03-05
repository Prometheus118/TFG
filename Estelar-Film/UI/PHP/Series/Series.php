<!DOCTYPE html>
<html lang="en">
<?php
        include "../../../DA/comprobarSesion.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/Series/Series.css" />
    <script src="../../JS/Series/animateprogress.js"></script>
    <title>Series</title>
    <link rel="icon" type="image/x-icon" href="../../Imagenes/Logo/Logo.png">
</head>

<body>
    <!-- Contenedor del titulo -->
    <div class="titulo">
        <h1>EN CONSTRUCCIÓN</h1>
        <h3>EL SITIO ESTARÁ LISTO PRONTO</h3>
    </div>
    <br>
    <!-- Contenedor del boton que te manda a la página de elección -->
    <div class="middle">
        <a href="../Eleccion/Eleccion.php" class="btn btn3">Home</a>
    </div>
    <!-- Contenedor de la barra de progreso para finalizar la página de series -->
    <div class="center">
        <div class="progress">
            <progress id="html5" max="100" value="70"></progress>
            <span></span>
        </div>
        <div class="button">
            <input type="button" id="boton" value="Recargar" />
        </div>
    </div>
    <!-- Script para que cuando se de al botón de recargar se recarge solo la barra y no la página entera-->
    <script type="text/javascript">
        window.onload = function () {
            animateprogress("#html5", 70);
        }
        document.querySelector("#boton").addEventListener("click", function () {
            animateprogress("#html5", 70);
        });
    </script>
</body>

</html>