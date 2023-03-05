<?php
    $host='localhost';
    $dbname='estelar-film';
    $user='root';
    $pass='';
    $con = "mysql:dbname=$dbname; host=$host";

    function recogerSeries(){

        global $con;
        global $pass;
        global $user;

        $seleccion = "";
        if(isset($_POST["series"]))
        $seleccion = $_POST["series"];

        try{
            $bd = new PDO($con,$user,$pass);
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $preparada = $bd->prepare("call recogerSeries()");
            $preparada->execute();
            while ($row = $preparada->fetch(PDO::FETCH_ASSOC)){
                if($seleccion == $row["id_serie"]){
                    echo "<option selected value=" . $row["id_serie"] . ">" . $row["nombre_serie"] . "</option>";
                }else{
                    echo "<option onclick='this.form.submit()' value=" . $row["id_serie"] . ">" . $row["nombre_serie"] . "</option>";
                }
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    function borrarSeries(){

        global $con;
        global $pass;
        global $user;

        $ids = "";
        if(isset($_POST["id_series"]))
        $ids = $_POST["id_series"];
        try{
            $bd = new PDO($con,$user,$pass);
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $preparada = $bd->prepare("call borrarSeries(?)");
            $preparada->bindParam(1,$ids, PDO::PARAM_STR, 100);
            $resultado = $preparada->execute();
                if($ids == TRUE){
                    echo'<script type="text/javascript">
                    alert("La Serie ha sido borrada");
                     window.location.href="../../../UI/PHP/Administrador/AdministradorSeries.php";
                    </script>';
                }else{
                    echo '<script type="text/javascript">
                    alert("La Serie NO ha sido borrada");
                     window.location.href="../../../UI/PHP/Administrador/AdministradorSeries.php";
                    </script>';
                }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

?>