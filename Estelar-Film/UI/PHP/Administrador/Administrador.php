<!DOCTYPE html>
<html lang="en">

<?php
       include "../../../DA/comprobarSesion.php";
       //include "../../../DA/Administrador/comprobarAdmin.php";
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
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
    <link rel="stylesheet" href="../../CSS/Administrador/Administrador.css">
    <link rel="icon" type="image/x-icon" href="../../Imagenes/Logo/Logo.png">
</head>

<body>
     <!-- Barra de navegación -->
    <div class="bg-light fixed-top">
        <div class="container text-black">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="../Administrador/Administrador.php"><img src="../../Imagenes/Logo/Logo + Letras.png" height="70px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1>BIENVENIDO ChristianAdmin</h1>
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
     <!-- Contenedor de los dos botones -->
    <div class="container">
        <div class="wrapper">
            <button class="grow_spin" OnClick="location.href='../Administrador/AdministradorPelis.php'">PELÍCULAS</button>
            <button class="grow_spin" OnClick="location.href='../Administrador/AdministradorSeries.php'">SERIES</button>
        </div>
    </div>


</body>

</html>