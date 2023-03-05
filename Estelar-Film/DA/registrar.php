<?php

$host='localhost';
$dbname='estelar-film';
$user='root';
$pass='';

$con = "mysql:dbname=$dbname;host=$host";

        $nom = $_POST["username"];
        $passwd = $_POST["password"];


        $hass = password_hash($passwd, PASSWORD_BCRYPT);
         //a traves de PASSWORD_BCRYPT se encripta la contraseña


        try{
            $bd = new PDO($con,$user,$pass);

            $preparada = $bd->prepare("call InsertarUsuario(?, ?)");
            //llamo al procedimiento para que me guarde el nombre de usuario y la contraseña del nuevo usuario
            $preparada->bindParam(1,$nom, PDO::PARAM_STR, 50); // PDO::PARAM_STR = String 50//
            $preparada->bindParam(2,$hass, PDO::PARAM_STR, 50);
            $preparada->execute();
            $lastInsertId = $bd->lastInsertId();
            if ($lastInsertId>0){
                echo "Usuario no creado";
            }else{
                echo '<script language="javascript">alert("Usuario creado");</script>';
                header("location: ../UI/PHP/Login/loginDefinitivo.php");
            }

        }catch(PDOException $e){
                echo $e->getMessage();
            }

?>