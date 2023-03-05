<?php
session_start();

if(isset($_SESSION["autenticado"]) && $_SESSION["autenticado"] != "ChristianAdmin"){
    header('Location: ../UI/HTML/Eleccion/Eleccion.php');
}

?>