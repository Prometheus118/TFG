<?php
 $host='localhost';
 $dbname='estelar-film';
 $user='root';
 $pass='';
 $con = "mysql:dbname=$dbname; host=$host";



 $seleccion = "";
 if(isset($_POST["peliculas"])) //isset compurebas que le has señalado el desplegable
     $seleccion = $_POST["peliculas"];
 try{
     $bd = new PDO($con,$user,$pass);
     $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $preparada = $bd->prepare("call recogerPeliculas()");
     $preparada->execute();
     while ($row = $preparada->fetch(PDO::FETCH_ASSOC)){
     if($seleccion == $row["id_pelicula"]){ // cada vuelta que de el bucle $row guarda las filas, cada vuelta el $row es distinto
         echo "<option selected value=" . $row["id_pelicula"] . ">" . $row["nombre_pelicula"] . "</option>";
     }else{
         echo "<option  value=" . $row["id_pelicula"] . ">" . $row["nombre_pelicula"] . "</option>";
     }
  }
  echo "</select>";
 } catch(PDOException $e){
     echo $e->getMessage();
 }
 $fech="";
 $idp="";
 if(array_key_exists('actualizar', $_POST)) {
try{
    if(isset($_POST["fecha_estreno"],$_POST["peliculas"] )){
        $fech=$_POST["fecha_estreno"];
        $idp=$_POST["peliculas"];
    }
    $bd = new PDO($con,$user,$pass);
    $preparada = $bd->prepare("call actualizarFecha_estreno(?,?)");
    $preparada->bindParam(1,$fech, PDO::PARAM_STR, 100);
    $preparada->bindParam(2,$idp, PDO::PARAM_STR, 100);
    $preparada->execute();
}catch(PDOException $e){
    echo $e->getMessage();
}
}
if(isset($_POST["peliculas"]) && $_POST["peliculas"] != "Error"){
    try{
    if(isset($_POST["peliculas"])){ //isset compruebas que le has seleñalado el desplegable
    $fech1 = $_POST["peliculas"]; //$_POST guardo el valor del parametro
    $bd = new PDO($con,$user,$pass);
    $preparada = $bd->prepare("call mostrarFecha_estreno(?)");
    $preparada->bindParam(1,$fech1, PDO::PARAM_STR, 100);
    $preparada->execute();
    $fech2 = $preparada->fetch();
    echo "<input type=text name=fecha_estreno selected value=" . $fech2["fecha_estreno"] . ">" . "</input>";

    }
}catch(PDOException $e){
    echo $e->getMessage();
}
}
 

echo "<input type=submit value=actualizar name=actualizar>";
   

if($fech==TRUE){
    echo "Se han actualizado la fecha de estreno ";
}else{
    echo "No se han actualizado la fecha de estreno";
}



?>