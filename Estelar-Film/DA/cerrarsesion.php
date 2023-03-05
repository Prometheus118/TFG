<?php
    session_start();
    session_destroy();
    header('Location: ../UI/PHP/Login/loginDefinitivo.php');
?>