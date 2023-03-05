<?php
 $host='localhost';
 $dbname='estelar-film';
 $user='root';
 $pass='';
 $con = "mysql:dbname=$dbname; host=$host";



 $seleccion = "";
 if(isset($_POST["series"])) //isset compurebas que le has señalado el desplegable
     $seleccion = $_POST["series"];
 try{
     $bd = new PDO($con,$user,$pass);
     $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $preparada = $bd->prepare("call recogerSeries()");
     $preparada->execute();
     while ($row = $preparada->fetch(PDO::FETCH_ASSOC)){
     if($seleccion == $row["id_serie"]){ // cada vuelta que de el bucle $row guarda las filas, cada vuelta el $row es distinto
         echo "<option selected value=" . $row["id_serie"] . ">" . $row["nombre_serie"] . "</option>";
     }else{
         echo "<option  value=" . $row["id_serie"] . ">" . $row["nombre_serie"] . "</option>";
     }
  }
  echo "</select>";
 } catch(PDOException $e){
     echo $e->getMessage();
 }
 $temp="";
 $ids="";
 if(array_key_exists('actualizar', $_POST)) {
try{
    if(isset($_POST["temporadas"],$_POST["series"] )){
        $temp=$_POST["temporadas"];
        $ids=$_POST["series"];
    }
    $bd = new PDO($con,$user,$pass);
    $preparada = $bd->prepare("call actualizarTemporada(?,?)");
    $preparada->bindParam(1,$temp, PDO::PARAM_STR, 100);
    $preparada->bindParam(2,$ids, PDO::PARAM_STR, 100);
    $preparada->execute();
}catch(PDOException $e){
    echo $e->getMessage();
}
}
if(isset($_POST["series"]) && $_POST["series"] != "Error"){
    try{
    if(isset($_POST["series"])){ //isset compruebas que le has seleñalado el desplegable
    $temp1 = $_POST["series"]; //$_POST guardo el valor del parametro
    $bd = new PDO($con,$user,$pass);
    $preparada = $bd->prepare("call mostrarTemporada(?)");
    $preparada->bindParam(1,$temp1, PDO::PARAM_STR, 100);
    $preparada->execute();
    $temp2 = $preparada->fetch();
    echo "<input type=number name=temporadas selected value=" . $temp2["temporadas"] . ">" . "</input>";

    }
}catch(PDOException $e){
    echo $e->getMessage();
}
}
 

echo "<input type=submit value=actualizar name=actualizar>";
   

if($temp==TRUE){
    echo "Se han actualizado las temporadas";
}else{
    echo "No se han actualizado las temporadas";
}



?>