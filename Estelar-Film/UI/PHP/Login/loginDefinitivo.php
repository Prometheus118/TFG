<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="../../CSS/Login/Login.css">
</link>
<script src="../../JS/Login/Login.js"></script>
<link rel="icon" type="image/x-icon" href="../../Imagenes/Logo/Logo.png">
</head>

<body>
  <!-- Contenedor Log In -->
  <div class="mobile-screen">
    <!-- Contenedor de la parte superior del Log In -->
    <div class="header">
      <h1>LOG IN</h1>
    </div>
    <!-- Contenedor del logo -->
    <div class="logo"></div>
    <!-- Contenedor de la introducción del usario y contraseña -->
    <form id="login-form" method="post" action="../../../DA/accessDA.php">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" placeholder="Password" name="password" required>
      <p><input class="login-btn" type="submit" value="Log in"></p>
    </form>
    <!-- Contenedor de la parte inferior para ir a crear un nuevo usuario y si el usario se le ha olvidado la contraseña -->
    <div class="other-options">
      <a href="NewUser.php" class="option-text option" id="newUser">New User </a>
      <a href="ForPasswd.php" class="option-text option" id="fPass">Forgotten password </a>

    </div>
    <?php
        include "../../../DA/comprobarSesion.php";
      ?>
</body>

</html>