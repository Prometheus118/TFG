<?php

    $host='localhost';
    $dbname='estelar-film';
    $user='root';
    $pass='';


    $con = "mysql:dbname=$dbname;host=$host";

        $nom = $_POST["username"];
        $passwd = $_POST["password"];


    try{
        $bd = new PDO($con,$user,$pass);

        $preparada = $bd->prepare("call mostrarUsuarioporNombre(?)"); //llamar a un procedimiento almacenado (rutina)
        $preparada->bindParam(1,$nom, PDO::PARAM_STR, 50);
        $preparada->execute();
        $usuario1 = $preparada->fetch();
        if ($usuario1) {
            if(password_verify($passwd, $usuario1["contrasena"])){
                $ruta = "Location: ../UI/PHP/Eleccion/Eleccion.php";
                if($_POST["username"] == "ChristianAdmin")
                    $ruta = ('Location: ../UI/PHP/Administrador/Administrador.php');
                session_start();
                $_SESSION['autenticado'] = $_POST["username"];
                header($ruta);
            }else{
                echo'<script type="text/javascript">
                alert("USUARIO ENCONTRADO \n CONTRASEÑA INCORRECTA \n ACCESO DENEGADO");
                 window.location.href="../UI/PHP/Login/loginDefinitivo.php";
                </script>';
            }
        }else{
            echo'<script type="text/javascript">
            alert("NO HAY NINGUN USUARIO CON ESE NOMBRE \n ACCESO DENEGADO");
             window.location.href="../UI/PHP/Login/loginDefinitivo.php";
            </script>';
        }

        }catch(PDOException $e){
            echo $e->getMessage();
        }
?>