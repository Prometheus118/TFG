<!DOCTYPE html>
<html lang="en">
<link>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NewUser</title>
<link rel="stylesheet" href="../../CSS/Login/NewUser.css">
<script src="../../JS/Login/Login.js"></script>
<link rel="icon" type="image/x-icon" href="../../Imagenes/Logo/Logo.png">
</head>

<body>
  <!-- Contenedor New User -->
  <div class="mobile-screen">
    <!-- Contenedor de la parte superior del New User -->
    <div class="header">
      <h1>NEW USER</h1>
    </div>
    <!-- Contenedor del logo -->
    <div class="logo"></div>
    <!-- Contenedor de la introducción del nuevo usario y la nueva contraseña -->
    <form method="post" action="../../../DA/registrar.php">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="password" name="password2" placeholder="Repeat password" required>
      <p><input class="login-btn" type="submit" value="Sign Up"></p>
    </form>
  </div>
</body>

</html>