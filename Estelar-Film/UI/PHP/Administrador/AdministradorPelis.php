<!DOCTYPE html>
<html lang="en">
<?php
       include "../../../DA/comprobarSesion.php";
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdministradorPelis</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/Administrador/AdministradorPelis.css">
    <link rel="icon" type="image/x-icon" href="../../Imagenes/Logo/Logo.png">
</head>

<body>
    <!-- Barra de navegación -->
    <div class="bg-light fixed-top">
        <div class="container text-black">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="Administrador.php"><img src="../../Imagenes/Logo/Logo + Letras.png" height="70px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="../../../DA/cerrarsesion.php">Cerrar Sesion</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <!-- Contenedor de Peliculas -->
    <div class="container">
        <div class="peliculas">
            <form method="post">
                <u><h2>PELÍCULAS</h2></u>
                <br>
                <h4>Actualizar</h4>
                <br>
                <!-- A traves de este select llamo con el include al PHP "actualizarPeliculas.php" para crear los desplegables y el botón para actualizar  -->
                <select name="peliculas" onchange="submit()">
                    <option value="Error">Selecciona una opción:</option>
                    <?php
            include "../../../BS/Administrador/Peliculas/actualizarPeliculas.php";
            ?>
                </select>
                <br>
                <br>
                <hr>
                <h4>Borrar</h4>
                <br>
                <!-- A traves de este form llamo con el include al PHP "cargarPeliculas.php" para crear el desplegable y el botón para borrar -->
                <form method="POST" action="">
                    <?php
            include "../../../DA/Administrador/cargarPeliculas.php";
            ?>
                </form>
            </form>
        </div>
    </div>

</body>

</html>