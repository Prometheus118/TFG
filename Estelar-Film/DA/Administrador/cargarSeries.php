<?php
include "../../../BS/Administrador/Series/borrarSeries.php";

cargarSeries();
echo '<input class="btn btn-primary btn-lg" type="submit" value ="Borrar" name="borrar">';
function cargarSeries(){
    echo '<select class="form-control" name="id_series">';
    echo '<option value="error">Selecciona una Serie:</option>';
    $resultado = recogerSeries();
}
if(array_key_exists("borrar",$_POST)){
    $resultado = borrarSeries();
}
?>