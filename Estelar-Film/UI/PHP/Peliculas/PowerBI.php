<!DOCTYPE html>
<html lang="en">
<?php
       include "../../../DA/comprobarSesion.php";
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Power BI</title>
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
    <link rel="stylesheet" href="../../CSS/Peliculas/PowerBI.css">
    <link rel="stylesheet" type="text/css" href="../../Bootstrap/fontawesome/css/all.css">
    <script src="../../JS/Peliculas/Cookies.js"></script>
    <link rel="icon" type="image/x-icon" href="../../Imagenes/Logo/Logo.png">
</head>

<body>
    <!-- Barra de navegación -->
    <div class="bg-light fixed-top">
        <div class="container text-black">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="../Eleccion/Eleccion.php"><img src="../../Imagenes/Logo/Logo + Letras.png" height="70px"></a>
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
                                <a class="nav-link" href="Peliculas.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle text-black" type="button" id="dropdownMenu2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Peliculas
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button">Coleciones</button>
                                        <button class="dropdown-item" type="button">Sagas</button>
                                        <button class="dropdown-item" type="button">Trilogias</button>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Noticias.php">Noticias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Equipo.php">Equipo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Contacto.php">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="PowerBI.php">Power BI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../../DA/cerrarsesion.php">Cerrar Sesion</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <!-- Power BI -->
    <div class="powerbi">
        <iframe title="Estelar-Film" width="1140" height="541.25"
            src="https://app.powerbi.com/reportEmbed?reportId=be4b6ff6-c144-4568-9efe-061340557e6a&autoAuth=true&ctid=16e3f57f-b4b0-4064-939a-c8360b0b7b7e&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLWV1cm9wZS1ub3J0aC1iLXJlZGlyZWN0LmFuYWx5c2lzLndpbmRvd3MubmV0LyJ9"
            frameborder="0" allowFullScreen="true"></iframe>
    </div>
    <br>
    <!--Footer -->
    <div class="Footer">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="h3">Estelar-Film | The Streaming Guide</h3>
                    <p class="p1">Copyright© 2022 Estelar-Film - All external content remains the property of the
                        rightful owner.
                        (1.1.11)
                    </p>
                </div>
                <div class="col-6 mt-5">
                    <div class="float-right">
                        <a href="https://www.instagram.com/"><i class="fab  fa-instagram fa-2x text-black"></i></a>
                        <a href="https://twitter.com/Estelar_Film14"><i
                                class="fab  fa-twitter fa-2x text-black"></i></a>
                        <a href="https://es-es.facebook.com/"><i class="fab  fa-facebook fa-2x text-black"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab  fa-youtube fa-2x text-black"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//BLOQUE COOKIES-->
    <div id="barraaceptacion" style="display: block;">
        <div class="inner2">
            Solicitamos su permiso para obtener datos estadísticos de su navegación en esta web, en cumplimiento del
            Real
            Decreto-ley 13/2012. Si continúa navegando consideramos que acepta el uso de cookies.
            <a href="javascript:void(0);" class="ok" onclick="PonerCookie();"><b>OK</b></a> |
            <a href="http://politicadecookies.com" target="_blank" class="info">Más información</a>
        </div>
    </div>
</body>

</html>