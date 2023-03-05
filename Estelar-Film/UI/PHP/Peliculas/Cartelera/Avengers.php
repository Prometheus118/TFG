<!DOCTYPE html>
<html lang="en">
<?php
        include "../../../../DA/comprobarSesion.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avengers</title>
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
    <link rel="stylesheet" href="../../../CSS/Peliculas/Cartelera/Cartelera.css">
    <link rel="stylesheet" type="text/css" href="../../../Bootstrap/fontawesome/css/all.css">
    <script src="../../../JS/Peliculas/Cookies.js"></script>
    <link rel="icon" type="image/x-icon" href="../../../Imagenes/Logo/Logo.png">
</head>

<body>
    <!-- Barra de navegación -->
    <div class="bg-light fixed-top">
        <div class="container text-black">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="../../Eleccion/Eleccion.php"><img src="../../../Imagenes/Logo/Logo + Letras.png"
                        height="70px"></a>
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
                                <a class="nav-link" href="../Peliculas.php">Home</a>
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
                                <a class="nav-link" href="../Noticias.php">Noticias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../Equipo.php">Equipo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../Contacto.php">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../PowerBI.php">Power BI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../../../DA/cerrarsesion.php">Cerrar Sesion</a>
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
    <br>
    <!-- Contenedor de toda la información de la pelicula -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <!-- Contenedor de las noticias -->
                <div class="list-group">
                    <img src="https://images.justwatch.com/poster/99741292/s592/los-vengadores-infinity-war.webp">
                    <a href="#" class="list-group-item list-group-item-action">
                        <h3 class="info">Calificación</h3>
                        <img class="img1"
                            src="https://www.justwatch.com/appassets/img/jw-icon.png">&nbsp;<span>93%</span>
                        <img class="img2"
                            src="https://www.justwatch.com/appassets/img/imdb-logo.png">&nbsp;<span>8.4</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <h3 class="info">Géneros</h3>
                        <span>Ciencia ficción , Acción & Aventura , Fantasía</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <h3 class="info">Duración</h3>
                        <span>2h 29min</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <h3 class="info">Clasificación por edades</h3>
                        <span>12</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <h3 class="info">Director</h3>
                        <span>Anthony Russo , Joe Russo</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <!--Titulo -->
                <div id="accordion">
                    <h1 class="vengadoresinf">VENGADORES INFINITY WAR</h1>
                </div>
                <br>
                <!-- Streaming -->
                <p class="p2">VER AHORA</p>
                <div class="card">
                    <div class="card-header bg-info" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-white " data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                STREAM
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div data-v-7a769b02="" class="price-comparison__grid__row__holder">
                                <div data-v-7a769b02="" class="price-comparison__grid__row__element">
                                    <div data-v-7a769b02=""
                                        class="presentation-type price-comparison__grid__row__element__icon"><a
                                            data-v-7a769b02=""
                                            href="https://click.justwatch.com/a?r=https%3A%2F%2Fdisneyplus.bn5x.net%2Fc%2F1206980%2F705874%2F9358%3Fu%3Dhttps%253A%252F%252Fwww.disneyplus.com%252Fmovies%252Favengers-infinity-war-de-marvel-studios%252F1WEuZ7H6y39v%26subId3%3Djustappsvod&amp;cx=eyJzY2hlbWEiOiJpZ2x1OmNvbS5zbm93cGxvd2FuYWx5dGljcy5zbm93cGxvdy9jb250ZXh0cy9qc29uc2NoZW1hLzEtMC0wIiwiZGF0YSI6W3sic2NoZW1hIjoiaWdsdTpjb20uanVzdHdhdGNoL3RpdGxlX2NvbnRleHQvanNvbnNjaGVtYS8xLTAtMCIsImRhdGEiOnsidGl0bGVJZCI6NTkxLCJvYmplY3RUeXBlIjoibW92aWUiLCJqd0VudGl0eUlkIjoidG01OTEifX0seyJzY2hlbWEiOiJpZ2x1OmNvbS5qdXN0d2F0Y2gvY2xpY2tvdXRfY29udGV4dC9qc29uc2NoZW1hLzEtMi0wIiwiZGF0YSI6eyJwcm92aWRlciI6IkRpc25leSBQbHVzIiwicHJvdmlkZXJJZCI6MzM3LCJtb25ldGl6YXRpb25UeXBlIjoiZmxhdHJhdGUiLCJwcmVzZW50YXRpb25UeXBlIjoiNGsiLCJjdXJyZW5jeSI6IkVVUiIsInBhcnRuZXJJZCI6MX19XX0&amp;uct_country=ES&amp;uct_buybox=normal&amp;sid="
                                            rel="sponsored" target="_blank">
                                            <picture data-v-7a769b02="" class="provider-icon">
                                                <source data-v-7a769b02="" type="image/webp" media="(min-width: 0px)"
                                                    srcset="https://www.justwatch.com/images/icon/147638351/s100/icon.webp"
                                                    data-srcset=""><img data-v-7a769b02="" alt="Disney Plus"
                                                    title="Disney Plus"
                                                    src="https://www.justwatch.com/images/icon/147638351/s100"
                                                    class="  price-comparison__grid__row__icon"></picture>
                                            <div data-v-7a769b02="" class="price-comparison__grid__row__price"> Fijo
                                                <span data-v-7a769b02=""
                                                    class="price-comparison__badge price-comparison__badge--hd price-comparison__badge--hd">
                                                    4K </span></div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Alquilar -->
                <div class="card">
                    <div class="card-header bg-info" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ALQUILAR
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <div data-v-7a769b02="" class="price-comparison__grid__row__holder">
                                <div data-v-7a769b02="" class="price-comparison__grid__row__element">
                                    <div data-v-7a769b02=""
                                        class="presentation-type price-comparison__grid__row__element__icon"><a
                                            data-v-7a769b02=""
                                            href="https://click.justwatch.com/a?r=https%3A%2F%2Frakuten.tv%2Fes%2Fmovies%2Fvengadores-infinity-war&amp;cx=eyJzY2hlbWEiOiJpZ2x1OmNvbS5zbm93cGxvd2FuYWx5dGljcy5zbm93cGxvdy9jb250ZXh0cy9qc29uc2NoZW1hLzEtMC0wIiwiZGF0YSI6W3sic2NoZW1hIjoiaWdsdTpjb20uanVzdHdhdGNoL3RpdGxlX2NvbnRleHQvanNvbnNjaGVtYS8xLTAtMCIsImRhdGEiOnsidGl0bGVJZCI6NTkxLCJvYmplY3RUeXBlIjoibW92aWUiLCJqd0VudGl0eUlkIjoidG01OTEifX0seyJzY2hlbWEiOiJpZ2x1OmNvbS5qdXN0d2F0Y2gvY2xpY2tvdXRfY29udGV4dC9qc29uc2NoZW1hLzEtMi0wIiwiZGF0YSI6eyJwcm92aWRlciI6IlJha3V0ZW4gVFYiLCJwcm92aWRlcklkIjozNSwibW9uZXRpemF0aW9uVHlwZSI6InJlbnQiLCJwcmVzZW50YXRpb25UeXBlIjoic2QiLCJjdXJyZW5jeSI6IkVVUiIsInByaWNlIjoyLjk5LCJwYXJ0bmVySWQiOjF9fV19&amp;uct_country=ES&amp;uct_buybox=normal&amp;sid="
                                            target="_blank">
                                            <picture data-v-7a769b02="" class="provider-icon">
                                                <source data-v-7a769b02="" type="image/webp" media="(min-width: 0px)"
                                                    srcset="https://images.justwatch.com/icon/128599720/s100/icon.webp"
                                                    data-srcset="https://images.justwatch.com/icon/128599720/s100/icon.webp"
                                                    sizes="50px"><img data-v-7a769b02="" alt="Rakuten TV"
                                                    title="Rakuten TV" data-sizes="auto"
                                                    src="https://images.justwatch.com/icon/128599720/s100"
                                                    data-src="https://images.justwatch.com/icon/128599720/s100"
                                                    class="price-comparison__grid__row__icon lazyautosizes ls-is-cached lazyloaded"
                                                    sizes="50px"></picture>
                                            <div data-v-7a769b02="" class="price-comparison__grid__row__price">
                                                2,99€
                                            </div>
                                        </a></div>
                                </div>
                                <div data-v-7a769b02="" class="price-comparison__grid__row__element">
                                    <div data-v-7a769b02=""
                                        class="presentation-type price-comparison__grid__row__element__icon"><a
                                            data-v-7a769b02=""
                                            href="https://click.justwatch.com/a?r=https%3A%2F%2Fwww.microsoft.com%2Fes-es%2Fp%2Fvengadores-infinity-war%2F8d6kgwxm9fc4&amp;cx=eyJzY2hlbWEiOiJpZ2x1OmNvbS5zbm93cGxvd2FuYWx5dGljcy5zbm93cGxvdy9jb250ZXh0cy9qc29uc2NoZW1hLzEtMC0wIiwiZGF0YSI6W3sic2NoZW1hIjoiaWdsdTpjb20uanVzdHdhdGNoL3RpdGxlX2NvbnRleHQvanNvbnNjaGVtYS8xLTAtMCIsImRhdGEiOnsidGl0bGVJZCI6NTkxLCJvYmplY3RUeXBlIjoibW92aWUiLCJqd0VudGl0eUlkIjoidG01OTEifX0seyJzY2hlbWEiOiJpZ2x1OmNvbS5qdXN0d2F0Y2gvY2xpY2tvdXRfY29udGV4dC9qc29uc2NoZW1hLzEtMi0wIiwiZGF0YSI6eyJwcm92aWRlciI6Ik1pY3Jvc29mdCBTdG9yZSIsInByb3ZpZGVySWQiOjY4LCJtb25ldGl6YXRpb25UeXBlIjoicmVudCIsInByZXNlbnRhdGlvblR5cGUiOiJzZCIsImN1cnJlbmN5IjoiRVVSIiwicHJpY2UiOjIuOTksInBhcnRuZXJJZCI6MX19XX0&amp;uct_country=ES&amp;uct_buybox=normal&amp;sid="
                                            rel="sponsored" target="_blank">
                                            <picture data-v-7a769b02="" class="provider-icon">
                                                <source data-v-7a769b02="" type="image/webp" media="(min-width: 0px)"
                                                    srcset="https://images.justwatch.com/icon/820542/s100/icon.webp"
                                                    data-srcset="https://images.justwatch.com/icon/820542/s100/icon.webp"
                                                    sizes="50px"><img data-v-7a769b02="" alt="Microsoft Store"
                                                    title="Microsoft Store" data-sizes="auto"
                                                    src="https://images.justwatch.com/icon/820542/s100"
                                                    data-src="https://images.justwatch.com/icon/820542/s100"
                                                    class="price-comparison__grid__row__icon lazyautosizes ls-is-cached lazyloaded"
                                                    sizes="50px"></picture>
                                            <div data-v-7a769b02="" class="price-comparison__grid__row__price">
                                                2,99€
                                            </div>
                                        </a></div>
                                </div>
                                <div data-v-7a769b02="" class="price-comparison__grid__row__element">
                                    <div data-v-7a769b02=""
                                        class="presentation-type price-comparison__grid__row__element__icon"><a
                                            data-v-7a769b02=""
                                            href="https://click.justwatch.com/a?r=https%3A%2F%2Ftv.apple.com%2Fes%2Fmovie%2Fvengadores-infinity-war%2Fumc.cmc.2do0xuo1u4tjmqbfz1p42a0p9%3FplayableId%3Dtvs.sbd.9001%253A1370714709&amp;cx=eyJzY2hlbWEiOiJpZ2x1OmNvbS5zbm93cGxvd2FuYWx5dGljcy5zbm93cGxvdy9jb250ZXh0cy9qc29uc2NoZW1hLzEtMC0wIiwiZGF0YSI6W3sic2NoZW1hIjoiaWdsdTpjb20uanVzdHdhdGNoL3RpdGxlX2NvbnRleHQvanNvbnNjaGVtYS8xLTAtMCIsImRhdGEiOnsidGl0bGVJZCI6NTkxLCJvYmplY3RUeXBlIjoibW92aWUiLCJqd0VudGl0eUlkIjoidG01OTEifX0seyJzY2hlbWEiOiJpZ2x1OmNvbS5qdXN0d2F0Y2gvY2xpY2tvdXRfY29udGV4dC9qc29uc2NoZW1hLzEtMi0wIiwiZGF0YSI6eyJwcm92aWRlciI6IkFwcGxlIGlUdW5lcyIsInByb3ZpZGVySWQiOjIsIm1vbmV0aXphdGlvblR5cGUiOiJyZW50IiwicHJlc2VudGF0aW9uVHlwZSI6IjRrIiwiY3VycmVuY3kiOiJFVVIiLCJwcmljZSI6My45OSwicGFydG5lcklkIjoxfX1dfQ&amp;uct_country=ES&amp;uct_buybox=normal&amp;sid="
                                            rel="sponsored" target="_blank">
                                            <picture data-v-7a769b02="" class="provider-icon">
                                                <source data-v-7a769b02="" type="image/webp" media="(min-width: 0px)"
                                                    srcset="https://images.justwatch.com/icon/190848813/s100/icon.webp"
                                                    data-srcset="https://images.justwatch.com/icon/190848813/s100/icon.webp"
                                                    sizes="50px"><img data-v-7a769b02="" alt="Apple iTunes"
                                                    title="Apple iTunes" data-sizes="auto"
                                                    src="https://images.justwatch.com/icon/190848813/s100"
                                                    data-src="https://images.justwatch.com/icon/190848813/s100"
                                                    class="price-comparison__grid__row__icon lazyautosizes ls-is-cached lazyloaded"
                                                    sizes="50px"></picture>
                                            <div data-v-7a769b02="" class="price-comparison__grid__row__price">
                                                3,99€
                                                <span data-v-7a769b02=""
                                                    class="price-comparison__badge price-comparison__badge--hd price-comparison__badge--hd">
                                                    4K </span></div>
                                        </a></div>
                                </div>
                                <div data-v-7a769b02="" class="price-comparison__grid__row__element">
                                    <div data-v-7a769b02=""
                                        class="presentation-type price-comparison__grid__row__element__icon"><a
                                            data-v-7a769b02=""
                                            href="https://click.justwatch.com/a?r=https%3A%2F%2Fapp.primevideo.com%2Fdetail%3Fgti%3Damzn1.dv.gti.4eb68101-2b5a-bd28-b375-e926f4b5a8be&amp;cx=eyJzY2hlbWEiOiJpZ2x1OmNvbS5zbm93cGxvd2FuYWx5dGljcy5zbm93cGxvdy9jb250ZXh0cy9qc29uc2NoZW1hLzEtMC0wIiwiZGF0YSI6W3sic2NoZW1hIjoiaWdsdTpjb20uanVzdHdhdGNoL3RpdGxlX2NvbnRleHQvanNvbnNjaGVtYS8xLTAtMCIsImRhdGEiOnsidGl0bGVJZCI6NTkxLCJvYmplY3RUeXBlIjoibW92aWUiLCJqd0VudGl0eUlkIjoidG01OTEifX0seyJzY2hlbWEiOiJpZ2x1OmNvbS5qdXN0d2F0Y2gvY2xpY2tvdXRfY29udGV4dC9qc29uc2NoZW1hLzEtMi0wIiwiZGF0YSI6eyJwcm92aWRlciI6IkFtYXpvbiBWaWRlbyIsInByb3ZpZGVySWQiOjEwLCJtb25ldGl6YXRpb25UeXBlIjoicmVudCIsInByZXNlbnRhdGlvblR5cGUiOiI0ayIsImN1cnJlbmN5IjoiRVVSIiwicHJpY2UiOjMuOTksInBhcnRuZXJJZCI6MX19XX0&amp;uct_country=ES&amp;uct_buybox=normal&amp;sid="
                                            rel="sponsored" target="_blank">
                                            <picture data-v-7a769b02="" class="provider-icon">
                                                <source data-v-7a769b02="" type="image/webp" media="(min-width: 0px)"
                                                    srcset="https://images.justwatch.com/icon/430993/s100/icon.webp"
                                                    data-srcset="https://images.justwatch.com/icon/430993/s100/icon.webp"
                                                    sizes="50px"><img data-v-7a769b02="" alt="Amazon Video"
                                                    title="Amazon Video" data-sizes="auto"
                                                    src="https://images.justwatch.com/icon/430993/s100"
                                                    data-src="https://images.justwatch.com/icon/430993/s100"
                                                    class="price-comparison__grid__row__icon lazyautosizes ls-is-cached lazyloaded"
                                                    sizes="50px"></picture>
                                            <div data-v-7a769b02="" class="price-comparison__grid__row__price">
                                                3,99€
                                                <span data-v-7a769b02=""
                                                    class="price-comparison__badge price-comparison__badge--hd price-comparison__badge--hd">
                                                    4K </span></div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comprar -->
                <div class="card">
                    <div class="card-header bg-info" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                COMPRAR
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <div data-v-7a769b02="" class="price-comparison__grid__row__holder">
                                <div data-v-7a769b02="" class="price-comparison__grid__row__element">
                                    <div data-v-7a769b02=""
                                        class="presentation-type price-comparison__grid__row__element__icon"><a
                                            data-v-7a769b02=""
                                            href="https://click.justwatch.com/a?r=https%3A%2F%2Ftv.apple.com%2Fes%2Fmovie%2Fvengadores-infinity-war%2Fumc.cmc.2do0xuo1u4tjmqbfz1p42a0p9%3FplayableId%3Dtvs.sbd.9001%253A1370714709&amp;cx=eyJzY2hlbWEiOiJpZ2x1OmNvbS5zbm93cGxvd2FuYWx5dGljcy5zbm93cGxvdy9jb250ZXh0cy9qc29uc2NoZW1hLzEtMC0wIiwiZGF0YSI6W3sic2NoZW1hIjoiaWdsdTpjb20uanVzdHdhdGNoL3RpdGxlX2NvbnRleHQvanNvbnNjaGVtYS8xLTAtMCIsImRhdGEiOnsidGl0bGVJZCI6NTkxLCJvYmplY3RUeXBlIjoibW92aWUiLCJqd0VudGl0eUlkIjoidG01OTEifX0seyJzY2hlbWEiOiJpZ2x1OmNvbS5qdXN0d2F0Y2gvY2xpY2tvdXRfY29udGV4dC9qc29uc2NoZW1hLzEtMi0wIiwiZGF0YSI6eyJwcm92aWRlciI6IkFwcGxlIGlUdW5lcyIsInByb3ZpZGVySWQiOjIsIm1vbmV0aXphdGlvblR5cGUiOiJidXkiLCJwcmVzZW50YXRpb25UeXBlIjoic2QiLCJjdXJyZW5jeSI6IkVVUiIsInByaWNlIjoxMS45OSwicGFydG5lcklkIjoxfX1dfQ&amp;uct_country=ES&amp;uct_buybox=normal&amp;sid="
                                            rel="sponsored" target="_blank">
                                            <picture data-v-7a769b02="" class="provider-icon">
                                                <source data-v-7a769b02="" type="image/webp" media="(min-width: 0px)"
                                                    srcset="https://images.justwatch.com/icon/190848813/s100/icon.webp"
                                                    data-srcset="https://images.justwatch.com/icon/190848813/s100/icon.webp"
                                                    sizes="50px"><img data-v-7a769b02="" alt="Apple iTunes"
                                                    title="Apple iTunes" data-sizes="auto"
                                                    src="https://images.justwatch.com/icon/190848813/s100"
                                                    data-src="https://images.justwatch.com/icon/190848813/s100"
                                                    class="price-comparison__grid__row__icon lazyautosizes ls-is-cached lazyloaded"
                                                    sizes="50px"></picture>
                                            <div data-v-7a769b02="" class="price-comparison__grid__row__price"> 11,99€
                                            </div>
                                        </a></div>
                                </div>
                                <div data-v-7a769b02="" class="price-comparison__grid__row__element">
                                    <div data-v-7a769b02=""
                                        class="presentation-type price-comparison__grid__row__element__icon"><a
                                            data-v-7a769b02=""
                                            href="https://click.justwatch.com/a?r=https%3A%2F%2Frakuten.tv%2Fes%2Fmovies%2Fvengadores-infinity-war&amp;cx=eyJzY2hlbWEiOiJpZ2x1OmNvbS5zbm93cGxvd2FuYWx5dGljcy5zbm93cGxvdy9jb250ZXh0cy9qc29uc2NoZW1hLzEtMC0wIiwiZGF0YSI6W3sic2NoZW1hIjoiaWdsdTpjb20uanVzdHdhdGNoL3RpdGxlX2NvbnRleHQvanNvbnNjaGVtYS8xLTAtMCIsImRhdGEiOnsidGl0bGVJZCI6NTkxLCJvYmplY3RUeXBlIjoibW92aWUiLCJqd0VudGl0eUlkIjoidG01OTEifX0seyJzY2hlbWEiOiJpZ2x1OmNvbS5qdXN0d2F0Y2gvY2xpY2tvdXRfY29udGV4dC9qc29uc2NoZW1hLzEtMi0wIiwiZGF0YSI6eyJwcm92aWRlciI6IlJha3V0ZW4gVFYiLCJwcm92aWRlcklkIjozNSwibW9uZXRpemF0aW9uVHlwZSI6ImJ1eSIsInByZXNlbnRhdGlvblR5cGUiOiJzZCIsImN1cnJlbmN5IjoiRVVSIiwicHJpY2UiOjExLjk5LCJvcmlnaW5hbFByaWNlIjo0Ljk5LCJwYXJ0bmVySWQiOjF9fV19&amp;uct_country=ES&amp;uct_buybox=normal&amp;sid="
                                            target="_blank">
                                            <picture data-v-7a769b02="" class="provider-icon">
                                                <source data-v-7a769b02="" type="image/webp" media="(min-width: 0px)"
                                                    srcset="https://images.justwatch.com/icon/128599720/s100/icon.webp"
                                                    data-srcset="https://images.justwatch.com/icon/128599720/s100/icon.webp"
                                                    sizes="50px"><img data-v-7a769b02="" alt="Rakuten TV"
                                                    title="Rakuten TV" data-sizes="auto"
                                                    src="https://images.justwatch.com/icon/128599720/s100"
                                                    data-src="https://images.justwatch.com/icon/128599720/s100"
                                                    class="price-comparison__grid__row__icon lazyautosizes ls-is-cached lazyloaded"
                                                    sizes="50px"></picture>
                                            <div data-v-7a769b02="" class="price-comparison__grid__row__price"> 11,99€
                                            </div>
                                        </a></div>
                                </div>
                                <div data-v-7a769b02="" class="price-comparison__grid__row__element">
                                    <div data-v-7a769b02=""
                                        class="presentation-type price-comparison__grid__row__element__icon"><a
                                            data-v-7a769b02=""
                                            href="https://click.justwatch.com/a?r=https%3A%2F%2Fwww.microsoft.com%2Fes-es%2Fp%2Fvengadores-infinity-war-bonus%2F8d6kgwxn2fw2&amp;cx=eyJzY2hlbWEiOiJpZ2x1OmNvbS5zbm93cGxvd2FuYWx5dGljcy5zbm93cGxvdy9jb250ZXh0cy9qc29uc2NoZW1hLzEtMC0wIiwiZGF0YSI6W3sic2NoZW1hIjoiaWdsdTpjb20uanVzdHdhdGNoL3RpdGxlX2NvbnRleHQvanNvbnNjaGVtYS8xLTAtMCIsImRhdGEiOnsidGl0bGVJZCI6NTkxLCJvYmplY3RUeXBlIjoibW92aWUiLCJqd0VudGl0eUlkIjoidG01OTEifX0seyJzY2hlbWEiOiJpZ2x1OmNvbS5qdXN0d2F0Y2gvY2xpY2tvdXRfY29udGV4dC9qc29uc2NoZW1hLzEtMi0wIiwiZGF0YSI6eyJwcm92aWRlciI6Ik1pY3Jvc29mdCBTdG9yZSIsInByb3ZpZGVySWQiOjY4LCJtb25ldGl6YXRpb25UeXBlIjoiYnV5IiwicHJlc2VudGF0aW9uVHlwZSI6InNkIiwiY3VycmVuY3kiOiJFVVIiLCJwcmljZSI6MTEuOTksInBhcnRuZXJJZCI6MX19XX0&amp;uct_country=ES&amp;uct_buybox=normal&amp;sid="
                                            rel="sponsored" target="_blank">
                                            <picture data-v-7a769b02="" class="provider-icon">
                                                <source data-v-7a769b02="" type="image/webp" media="(min-width: 0px)"
                                                    srcset="https://images.justwatch.com/icon/820542/s100/icon.webp"
                                                    data-srcset="https://images.justwatch.com/icon/820542/s100/icon.webp"
                                                    sizes="50px"><img data-v-7a769b02="" alt="Microsoft Store"
                                                    title="Microsoft Store" data-sizes="auto"
                                                    src="https://images.justwatch.com/icon/820542/s100"
                                                    data-src="https://images.justwatch.com/icon/820542/s100"
                                                    class="price-comparison__grid__row__icon lazyautosizes ls-is-cached lazyloaded"
                                                    sizes="50px"></picture>
                                            <div data-v-7a769b02="" class="price-comparison__grid__row__price"> 11,99€
                                            </div>
                                        </a></div>
                                </div>
                                <div data-v-7a769b02="" class="price-comparison__grid__row__element">
                                    <div data-v-7a769b02=""
                                        class="presentation-type price-comparison__grid__row__element__icon"><a
                                            data-v-7a769b02=""
                                            href="https://click.justwatch.com/a?r=https%3A%2F%2Fapp.primevideo.com%2Fdetail%3Fgti%3Damzn1.dv.gti.4eb68101-2b5a-bd28-b375-e926f4b5a8be&amp;cx=eyJzY2hlbWEiOiJpZ2x1OmNvbS5zbm93cGxvd2FuYWx5dGljcy5zbm93cGxvdy9jb250ZXh0cy9qc29uc2NoZW1hLzEtMC0wIiwiZGF0YSI6W3sic2NoZW1hIjoiaWdsdTpjb20uanVzdHdhdGNoL3RpdGxlX2NvbnRleHQvanNvbnNjaGVtYS8xLTAtMCIsImRhdGEiOnsidGl0bGVJZCI6NTkxLCJvYmplY3RUeXBlIjoibW92aWUiLCJqd0VudGl0eUlkIjoidG01OTEifX0seyJzY2hlbWEiOiJpZ2x1OmNvbS5qdXN0d2F0Y2gvY2xpY2tvdXRfY29udGV4dC9qc29uc2NoZW1hLzEtMi0wIiwiZGF0YSI6eyJwcm92aWRlciI6IkFtYXpvbiBWaWRlbyIsInByb3ZpZGVySWQiOjEwLCJtb25ldGl6YXRpb25UeXBlIjoiYnV5IiwicHJlc2VudGF0aW9uVHlwZSI6InNkIiwiY3VycmVuY3kiOiJFVVIiLCJwcmljZSI6MTEuOTksIm9yaWdpbmFsUHJpY2UiOjEwLjk5LCJwYXJ0bmVySWQiOjF9fV19&amp;uct_country=ES&amp;uct_buybox=normal&amp;sid="
                                            rel="sponsored" target="_blank">
                                            <picture data-v-7a769b02="" class="provider-icon">
                                                <source data-v-7a769b02="" type="image/webp" media="(min-width: 0px)"
                                                    srcset="https://images.justwatch.com/icon/430993/s100/icon.webp"
                                                    data-srcset="https://images.justwatch.com/icon/430993/s100/icon.webp"
                                                    sizes="50px"><img data-v-7a769b02="" alt="Amazon Video"
                                                    title="Amazon Video" data-sizes="auto"
                                                    src="https://images.justwatch.com/icon/430993/s100"
                                                    data-src="https://images.justwatch.com/icon/430993/s100"
                                                    class="price-comparison__grid__row__icon lazyautosizes ls-is-cached lazyloaded"
                                                    sizes="50px"></picture>
                                            <div data-v-7a769b02="" class="price-comparison__grid__row__price"> 11,99€
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Trailers de la pelicula -->
                <p class="p2">TRAILERS</p>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <iframe width="353,33" height="198,73" src="https://www.youtube.com/embed/wJbudwIF0cE"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <iframe width="353,33" height="198,73" src="https://www.youtube.com/embed/-f5PwE_Q8Fs"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <iframe width="353,33" height="198,73" src="https://www.youtube.com/embed/jp8AyRmGWbI"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <iframe width="353,33" height="198,73" src="https://www.youtube.com/embed/4pW4ltwV0jY"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <br>
                <!-- Casting -->
                <p class="p2">CASTING</p>
                <p>Robert Downey Jr., Chris Hemsworth, Benedict Cumberbatch, Chris Evans, Mark Ruffalo, Scarlett
                    Johansson, Chris Pratt, Tom Holland, Josh Brolin, Elizabeth Olsen, Chadwick Boseman, Pom
                    Klementieff, Terry Notary, Dave Bautista, Karen Gillan, Zoe Saldana, Gwyneth Paltrow, Tom
                    Hiddleston, Cobie Smulders, Paul Bettany, Sebastian Stan, Peter Dinklage, Samuel L. Jackson, Benicio
                    del Toro, Danai Gurira, Benedict Wong, Anthony Mackie, Don Cheadle, Idris Elba, Vin Diesel, Bradley
                    Cooper, William Hurt, Stan Lee, Ross Marquand, Jacob Batalon, Zola Williams, Ariana Greenblatt,
                    Winston Duke, Marija Juliette Abney, Janeshia Adams-Ginyard, Florence Kasumba</p>
                <br>
                <!-- Sinapsis -->
                <p class="p2">SINOPSIS</p>
                <p>El todopoderoso Thanos ha despertado con la promesa de arrasar con todo a su paso, portando el
                    Guantelete del Infinito, que le confiere un poder incalculable. Los únicos capaces de pararle los
                    pies son los Vengadores y el resto de superhéroes de la galaxia, que deberán estar dispuestos a
                    sacrificarlo todo por un bien mayor. Capitán América e Ironman deberán limar sus diferencias, Black
                    Panther apoyará con sus tropas desde Wakanda, Thor y los Guardianes de la Galaxia e incluso
                    Spider-Man se unirán antes de que los planes de devastación y ruina pongan fin al universo. ¿Serán
                    capaces de frenar el avance del titán del caos?</p>
                <br>
                <!-- Información de Streaming, compra y alquiler -->
                <p class="p2">VENGADORES: INFINITY WAR - VERLO POR STREMMING, COMPRARLO O ALQUILARLO</p>
                <p>Actualmente, usted es capaz de ver "Vengadores: Infinity War" streaming en Disney Plus. Por lo tanto,
                    es posible alquilar "Vengadores: Infinity War" en Rakuten TV, Microsoft Store, Apple iTunes, Amazon
                    Video como descarga online y para comprarlo en Apple iTunes, Rakuten TV, Microsoft Store, Amazon
                    Video.</p>
                <br>
                <!-- Premios -->
                <p class="p2">PREMIOS</p>
                <p>2018: Premios Oscar: Nominada a mejores efectos visuales<br>
                    2018: Premios BAFTA: Nominada a Mejores efectos especiales visuales<br>
                    2018: Critics Choice Awards: Nominada a mejor film de acción y efectos visuales<br>
                    2018: Premios Annie: Nom. mejor animación de personajes en película no animadabr<br>
                    2018: Satellite Awards: Nominada a mejor efectos visuales<br>
                    2018: Sindicato de Actores (SAG): Nominada a Mejores especialistas de acción</p>
            </div>
        </div>
    </div>
    </div>
    <br>
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