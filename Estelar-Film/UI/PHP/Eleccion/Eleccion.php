<!DOCTYPE html>
<html lang="en">
<?php
        include "../../../DA/comprobarSesion.php";
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../../CSS/Eleccion/Eleccion.css">
    <link rel="icon" type="image/x-icon" href="../../Imagenes/Logo/Logo.png">
</head>

<body>
    <!--Imagen del Logo -->
    <img class="img-fluid" src="../../Imagenes/Logo/Logo + Letras.png">
    <!-- El contenedor que almacena el botón de las Peliculas -->
    <div class="wrap">
        <from action="Peliculas.php">
            <button class="button" OnClick="location.href='../Peliculas/Peliculas.php'">PELÍCULAS</button>
        </from>
    </div>
    <!-- El contenedor que almacena el botón de las Series -->
    <div class="wrap">
        <from action="Series.html">
            <button class="button" OnClick="location.href='../Series/Series.php'">SERIES</button>
        </from>
    </div>
</body>

</html>