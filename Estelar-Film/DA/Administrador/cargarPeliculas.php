<?php
include "../../../BS/Administrador/Peliculas/borrarPeliculas.php";

cargarPeliculas();
echo '<input class="btn btn-primary btn-lg" type="submit" value ="Borrar" name="borrar">';
function cargarPeliculas(){
    echo '<select class="form-control" name="id_peliculas">';
    echo '<option value="error">Selecciona una Pelicula:</option>';
    $resultado = recogerPeliculas();
}
if(array_key_exists("borrar",$_POST)){
    $resultado = borrarPeliculas();
}
?>