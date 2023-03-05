<?php
    $host='localhost';
    $dbname='estelar-film';
    $user='root';
    $pass='';
    $con = "mysql:dbname=$dbname; host=$host";

    function recogerPeliculas(){

        global $con;
        global $pass;
        global $user;

        $seleccion = "";
        if(isset($_POST["peliculas"]))
        $seleccion = $_POST["peliculas"];

        try{
            $bd = new PDO($con,$user,$pass);
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $preparada = $bd->prepare("call recogerPeliculas()");
            $preparada->execute();
            while ($row = $preparada->fetch(PDO::FETCH_ASSOC)){
                if($seleccion == $row["id_pelicula"]){
                    echo "<option selected value=" . $row["id_pelicula"] . ">" . $row["nombre_pelicula"] . "</option>";
                }else{
                    echo "<option onclick='this.form.submit()' value=" . $row["id_pelicula"] . ">" . $row["nombre_pelicula"] . "</option>";
                }
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    function borrarPeliculas(){

        global $con;
        global $pass;
        global $user;

        $idp = "";
        if(isset($_POST["id_peliculas"]))
        $idp = $_POST["id_peliculas"];
        try{
            $bd = new PDO($con,$user,$pass);
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $preparada = $bd->prepare("call borrarPeliculas(?)");
            $preparada->bindParam(1,$idp, PDO::PARAM_STR, 100);
            $resultado = $preparada->execute();
                if($idp == TRUE){
                    echo'<script type="text/javascript">
                    alert("La Pelicula ha sido borrada");
                     window.location.href="../../../UI/PHP/Administrador/AdministradorPelis.php";
                    </script>';
                }else{
                    echo '<script type="text/javascript">
                    alert("La Pelicula NO ha sido borrada");
                     window.location.href="../../../UI/PHP/Administrador/AdministradorPelis.php";
                    </script>';
                }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

?>