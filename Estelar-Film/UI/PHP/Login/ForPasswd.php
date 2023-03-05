<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ForPasswd</title>
  <link rel="stylesheet" href="../../CSS/Login/ForPasswd.css">
  <script src="../../JS/Login/Login.js"></script>
  <link rel="icon" type="image/x-icon" href="../../Imagenes/Logo/Logo.png">
</head>

<body>
  <!-- Contenedor Forgotten Password -->
  <div class="mobile-screen">
    <div class="header">
      <h1>FORGOTTEN PASSWORD</h1>
    </div>
    <!-- Contenedor del logo -->
    <div class="logo"></div>
    <!-- Contenedor de la introducción del usario y la nueva contraseña -->
    <form id="fpass-form" method="post" action="loginDefinitivo.php">
      <input type="text" name="forgotten" placeholder="Username" required>
      <input type="password" placeholder="New Password" required>
      <p><input class="login-btn" type="submit" value=" Save Password" onclick="alert('Contraseña guardada')"></p>
    </form>
  </div>
</body>

</html>