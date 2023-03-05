<?php
session_start();
$uri = explode("?", $_SERVER['REQUEST_URI']);
if(!isset($_SESSION["autenticado"])){
    if($uri[0]!= '/Estelar-Film/UI/PHP/Login/loginDefinitivo.php'){
        header('Location: /Estelar-Film/UI/PHP/Login/loginDefinitivo.php');
    }
}

?>