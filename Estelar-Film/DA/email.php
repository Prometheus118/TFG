<?php

$host='localhost';
$dbname='estelar-film';
$user='root';
$pass='';

$con = "mysql:dbname=$dbname;host=$host";
        $username = $_POST["username"];
        $email = $_POST["email"];
        $asnto = $_POST["asnto"];
        $incid = $_POST["incid"];
        try{
            $bd = new PDO($con,$user,$pass);

            $preparada = $bd->prepare("call InsertarEmail(?, ?, ?, ?)");
            $preparada->bindParam(1,$username, PDO::PARAM_STR, 155);
            $preparada->bindParam(2,$email, PDO::PARAM_STR, 155);
            $preparada->bindParam(3,$asnto, PDO::PARAM_STR, 155);
            $preparada->bindParam(4,$incid, PDO::PARAM_STR, 155);
            $preparada->execute();
            $lastInsertId = $bd->lastInsertId();
            if ($lastInsertId>0){
                echo "Correo no enviado";
            }else{
                echo '<script type="text/javascript>alert("Correo Enviado");</script>';
                header("location: ../UI/PHP/Peliculas/Contacto.php");
            }

        }catch(PDOException $e){
                echo $e->getMessage();
            }

?>