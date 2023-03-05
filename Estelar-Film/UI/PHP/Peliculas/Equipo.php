<!DOCTYPE html>
<html lang="en">
<?php
        include "../../../DA/comprobarSesion.php";
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Equipo</title>
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
    <link rel="stylesheet" href="../../CSS/Peliculas/Equipo.css">
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
    <!-- Información del equipo del Proyecto -->
    <div class="container">
        <div id="content">
            <div class="box">
                <div class="border-right">
                    <div class="border-left">
                        <div class="inner">
                            <h3><span>EQUIPO</span></h3>
                            <p class="p1 text-center">CONECTANDO A LOS FANÁTICOS DEL CINE CON SU CONTENIDO FAVORITO EN
                                TODO EL MUNDO</p>
                            <div class="img-box1"><img src="../../Imagenes/Peliculas/Equipo/images/Equipo.jpg" alt="" />
                                <p class="p2">
                                    Te mostramos dónde puedes ver películas y programas de TV que te encantan de manera
                                    legal. Se le mantiene actualizado con las novedades de Netflix, Amazon Prime, Apple
                                    TV y muchas otras plataformas de transmisión. Nuestro sencillo sistema de filtro le
                                    permite ver solo lo que es importante para usted. También permitimos a los usuarios
                                    realizar un seguimiento de sus programas y películas favoritos, y podemos
                                    notificarle cuando un título esté disponible en uno de sus servicios.
                                </p>
                            </div>
                            <p class="p2">Recopilamos perfiles de usuario de millones de asistentes al cine y aprendemos
                                sus gustos cinematográficos individuales. Estelar-Film utiliza estos datos para ejecutar
                                campañas de avances altamente eficientes para estudios de cine, distribuidores y
                                servicios de VOD. Reorientamos a las personas en YouTube, Facebook y otras plataformas
                                donde pasan su tiempo descubriendo contenido nuevo. Nuestras campañas son dos veces más
                                efectivas que los puntos de referencia de la industria.
                            </p>
                            <h3>Nuentro <span>EQUIPO</span></h3>
                            <ul class="list">
                                <li><img src="../../Imagenes/Peliculas/Equipo/images/Foto Christian Atienza Masa.jpg" alt="" class="fotoChristian"/><a href="#">CHRISTIÁN ATIENZA
                                        MASA</a><br />
                                    Jefe de proyecto, diseñador del Front End y del Back End. También es el responsable de la
                                    estrategia general y el desarrollo comercial. Trabajó como CMO en Bonial.com (y en
                                    la empresa estadounidense Retale.com) hasta el verano de 2014, cuando decidió crear
                                    su propia empresa. En el transcurso de cinco años, creó un equipo internacional de
                                    alrededor de 50 personas y ayudó a Bonial.com a llegar a millones de usuarios
                                    mensuales en todo el mundo.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!-- Row de todos los clientes -->
            <h3 class="text-center">Algunos de nuestros<span> CLIENTES</span></h3>
            <div class="row">
                <div class="col-xl-3">
                    <img class="img-fluid" src="../../Imagenes/Peliculas/Equipo/Logos/Logo-Netflix.png" alt="netflix">
                </div>
                <div class="col-xl-3">
                    <img class="img-fluid" src="../../Imagenes/Peliculas/Equipo/Logos/Amazon-Prime-Video-Logo.png" alt="amazon">
                </div>
                <div class="col-xl-3">
                    <img class="img-fluid" src="../../Imagenes/Peliculas/Equipo/Logos/HBO-Max-Logo.png" alt="hbo">
                </div>
                <div class="col-xl-3">
                    <img class="img-fluid" src="../../Imagenes/Peliculas/Equipo/Logos/Disney+_logo.svg.png" alt="disney">
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
    <!-- Contenedor para enviar un correo al administrador -->
    <div class="container">
        <div class="col-12">
            <h3 class="text-center">Queremos <span>ESCUCHARTE </span></h3>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <h4 class="text-center">Trabajamos incansablemente para que la experiencia de usar nuestras aplicaciones
                    sea la mejor posible y nos encanta cualquier comentario o sugerencia que pueda tener para que
                    podamos mejorar aún más.</h4>
            </div>
            <div class="col-sm-4 text-center">
                <h4 class="text-center">Si desea obtener más información sobre las oportunidades de trabajar con
                    nosotros, visite nuestra página de talentos, siempre estamos buscando incorporar personas más
                    capacitadas e inspiradas en nuestro equipo.</h4>
            </div>
            <div class="col-sm-4 text-center">
                <h4 class="text-center">Si estás interesado en realizar campañas con nosotros para su próxima película,
                    lanzamiento de entretenimiento en el hogar o servicio VOD, estaremos encantados de saber de usted.
                </h4>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!-- Contenedor del botón para escribir al administrador -->
    <!-- A través del atributo 'href' del tag <a> la sentencia 'mailto' se utiliza para que al clickar se envíe pueda enviar un email a un destinatario concreto -->
    <div class="row-centered">
        <a class="btn page__about-us--button col-centered btn-primary" href="mailto:estelar.film.info@gmail.com">Escribe a
        estelar.film.info@gmail.com</a>
    </div>
    <br>
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
                        <a href="https://twitter.com/Estelar_Film14"><i class="fab  fa-twitter fa-2x text-black"></i></a>
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