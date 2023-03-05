<!DOCTYPE html>
<html lang="en">
<?php
        include "../../../DA/comprobarSesion.php";
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peliculas</title>
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
    <link rel="stylesheet" href="../../CSS/Peliculas/Peliculas.css">
    <link rel="stylesheet" type="text/css" href="../../Bootstrap/fontawesome/css/all.css">
    <link rel="icon" type="image/x-icon" href="../../Imagenes/Logo/Logo.png">
    <script src="../../JS/Peliculas/Cookies.js"></script>
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
    <br>
    <br>
    <br>
    <!--Carrusel -->
    <div class="Imagen">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../../Imagenes/Peliculas/Home/Carrusel/Furious6.jpg" alt="First slide" width="auto"
                        height="auto">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../Imagenes/Peliculas/Home/Carrusel/IronMan3.jpg" alt="Second slide" width="auto"
                        height="auto">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../Imagenes/Peliculas/Home/Carrusel/ReyArturo.jpg" alt="Third slide" width="auto"
                        height="auto">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../Imagenes/Peliculas/Home/Carrusel/Frozen.jpg" alt="Four slide" width="auto" height="auto">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../Imagenes/Peliculas/Home/Carrusel/PiratasdelCaribe.jpg" alt="Five slide" width="auto"
                        height="auto">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../Imagenes/Peliculas/Home/Carrusel/Titanic.jpg" alt="Six slide" width="auto" height="auto">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../Imagenes/Peliculas/Home/Carrusel/Cars.jpg" alt="Seven slide" width="auto" height="auto">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../Imagenes/Peliculas/Home/Carrusel/RobinHood.jpg" alt="Eight slide" width="auto"
                        height="auto">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../Imagenes/Peliculas/Home/Carrusel/Shrek.jpg" alt="Nine slide" width="auto" height="auto">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../Imagenes/Peliculas/Home/Carrusel/TombRaider.jpg" alt="Ten slide" width="auto"
                        height="auto">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <br>
    <!-- Welcome a Estelar-Film -->
    <div class="container">
        <div id="content">
            <div id="slogan">
                <div class="image png"></div>
                <div class="inside">
                    <h2>We are breaking<span> All Limitations</span></h2>
                    <p class="p2">“Me he subido a mi mesa para recordar que hay que mirar las cosas de un modo
                        diferente. El mundo se ve distinto desde aquí arriba.” John Keating (Robin Williams)
                        <br>“Sólo al soñar tenemos libertad, siempre fue así y siempre así será.”John Keating (Robin
                        Williams)
                    </p>
                    <div class="wrapper"><a href="#" class="link1"><span><span>Más información</span></span></a></div>
                </div>
            </div>
            <div class="box">
                <div class="border-right">
                    <div class="border-left">
                        <div class="inner">
                            <h3>Bienvenido a <span>ESTELAR-FILM</span></h3>
                            <p class="p1">Estelar-Film es una guia de streaming gratis para todo el mundo aficionado al
                                mundo cinematografico.</p>
                            <div class="img-box1"><img src="../../Imagenes/Peliculas/Home/images/Foto.jpg" alt="" />
                                <p class="p2">“Ni tú ni yo ni nadie golpea más fuerte que la vida.” (Rocky Balboa)<br>
                                    “ Mueres como un héroe o vives lo suficiente para verte convertido en un villano.”
                                    (El caballero oscuro)<br>
                                    “¡Pueden que nos quiten la vida, pero jamás nos quitarán la
                                    libertad!”(Braveheart)<br>
                                    “Un hombre tiene que hacer lo que tiene que hacer, hasta que su destino sea
                                    revelado.” (El Último Samurái)<br>
                                    “¡Aquí es donde les contendremos! ¡Aquí es donde nosotros lucharemos! ¡Y aquí es
                                    donde ellos morirán!” (300)
                                </p>
                            </div>
                            <p class="p1">El principal objetivo de esta guía es que nuestros usuarios puedan buscar su
                                película preferida para saber directamente en que plataforma streaming se encuentra y
                                poder ahorrarles el tiempo de busqueda por todas las plataformas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!-- Card de peliculas + info -->
        <div class="container">
            <u class="titulo">
                <h1 class="text-center display-4">PELÍCULAS</h1>
            </u>
            <br>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="../../Imagenes/Peliculas/Home/Cartelera/Avengers.jpg" alt="Card image cap" height="189.98px">
                    <div class="card-body">
                        <u>
                            <h5 class="card-title">AVENGERS: INFINITY WAR</h5>
                        </u>
                        <p class="card-text"><b>Director:</b> Antonio Russo, Joe Russo</p>
                        <p class="card-text"><b>Género:</b> Acción/Ciencia ficción</p>
                        <p class="card-text"><b>Nacionalidad:</b> Americana</p>
                        <p class="card-text"><b>Clasificación:</b> PG-13</p>
                        <button type="button" class="btn btn-info" OnClick="location.href='Cartelera/Avengers.php'">Más información</button>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../../Imagenes/Peliculas/Home/Cartelera/RogueOne.jpg" alt="Card image cap" height="189.98px">
                    <div class="card-body">
                        <u>
                            <h5 class="card-title">ROGUE ONE: A STAR WARS STORY</h5>
                        </u>
                        <p class="card-text"><b>Director:</b> Gareth Edwards</p>
                        <p class="card-text"><b>Género:</b> Ciencia ficción</p>
                        <p class="card-text"><b>Nacionalidad:</b> Americana</p>
                        <p class="card-text"><b>Clasificación:</b> PG-12</p>
                        <button type="button" class="btn btn-info" OnClick="location.href=''">Más información</button>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../../Imagenes/Peliculas/Home/Cartelera/Dawn of the Planet of the Apes.jpg" alt="Card image cap"
                        height="189.98px">
                    <div class="card-body">
                        <u>
                            <h5 class="card-title">DAWN OF THE PLANET OF THE APES</h5>
                        </u>
                        <p class="card-text"><b>Director:</b> Matt Reeves</p>
                        <p class="card-text"><b>Género:</b> Ciencia ficción/Acción</p>
                        <p class="card-text"><b>Nacionalidad:</b> Americana</p>
                        <p class="card-text"><b>Clasificación:</b> PG-12</p>
                        <button type="button" class="btn btn-info" OnClick="location.href=''">Más información</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="../../Imagenes/Peliculas/Home/Cartelera/TheWolverine.jpg" alt="Card image cap" height="189.98px">
                    <div class="card-body">
                        <u>
                            <h5 class="card-title">THE WOLVERINE</h5>
                        </u>
                        <p class="card-text"><b>Director:</b> James Mangold</p>
                        <p class="card-text"><b>Género:</b> Acción</p>
                        <p class="card-text"><b>Nacionalidad:</b> Americana</p>
                        <p class="card-text"><b>Clasificación:</b> PG-16</p>
                        <button type="button" class="btn btn-info" OnClick="location.href=''">Más información</button>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../../Imagenes/Peliculas/Home/Cartelera/NowYouSeeMe.jpg" alt="Card image cap" height="189.98px">
                    <div class="card-body">
                        <u>
                            <h5 class="card-title">NOW YOU SEE ME</h5>
                        </u>
                        <p class="card-text"><b>Director:</b> Louis Leterrier</p>
                        <p class="card-text"><b>Género:</b> Thriller</p>
                        <p class="card-text"><b>Nacionalidad:</b> Americana</p>
                        <p class="card-text"><b>Clasificación:</b> PG-13</p>
                        <button type="button" class="btn btn-info" OnClick="location.href=''">Más información</button>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../../Imagenes/Peliculas/Home/Cartelera/TheDarkKnightRises.jpg" alt="Card image cap"
                        height="189.98px">
                    <div class="card-body">
                        <u>
                            <h5 class="card-title">THE DARK KNIGHT RISES</h5>
                        </u>
                        <p class="card-text"><b>Director:</b> Christopher Nolan</p>
                        <p class="card-text"><b>Género:</b> Acción/Thriller</p>
                        <p class="card-text"><b>Nacionalidad:</b> Americana</p>
                        <p class="card-text"><b>Clasificación:</b> PG-12</p>
                        <button type="button" class="btn btn-info" OnClick="location.href=''">Más información</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="../../Imagenes/Peliculas/Home/Cartelera/X-Men.jpg" alt="Card image cap" height="189.98px">
                    <div class="card-body">
                        <u>
                            <h5 class="card-title">X-MEN: FIRST CLASS</h5>
                        </u>
                        <p class="card-text"><b>Director:</b> Matthew Vaughn</p>
                        <p class="card-text"><b>Género:</b> Acción/Aventuras</p>
                        <p class="card-text"><b>Nacionalidad:</b> Americana</p>
                        <p class="card-text"><b>Clasificación:</b> PG-7</p>
                        <button type="button" class="btn btn-info" OnClick="location.href=''">Más información</button>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../../Imagenes/Peliculas/Home/Cartelera/NationalTreasure.jpg" alt="Card image cap"
                        height="189.98px">
                    <div class="card-body">
                        <u>
                            <h5 class="card-title">NATIONAL TREASURE: BOOK OF SECRETS</h5>
                        </u>
                        <p class="card-text"><b>Director:</b> Jon Turteltaub</p>
                        <p class="card-text"><b>Género:</b> Aventuras</p>
                        <p class="card-text"><b>Nacionalidad:</b> Americana</p>
                        <p class="card-text"><b>Clasificación:</b> PG-7</p>
                        <button type="button" class="btn btn-info" OnClick="location.href=''">Más información</button>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../../Imagenes/Peliculas/Home/Cartelera/JurassicWorld.jpg" alt="Card image cap"
                        height="189.98px">
                    <div class="card-body">
                        <u>
                            <h5 class="card-title">JURASSIC WORLD</h5>
                        </u>
                        <p class="card-text"><b>Director:</b> Colin Trevorrow</p>
                        <p class="card-text"><b>Género:</b> Acción/Aventuras</p>
                        <p class="card-text"><b>Nacionalidad:</b> Americana</p>
                        <p class="card-text"><b>Clasificación:</b> PG-12</p>
                        <button type="button" class="btn btn-info" OnClick="location.href=''">Más información</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
    <!-- Footer -->
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