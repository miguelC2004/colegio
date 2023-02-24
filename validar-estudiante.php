<?php
// Iniciamos la sesión
session_start();

// Verificamos si la sesión está activa
if(!isset($_SESSION["username"])) {
  // Si la sesión no está activa, redirigimos a la página de inicio de sesión
  header("Location: login.php");
  exit();
}

// Si la sesión está activa, mostramos la página de sesión iniciada
echo "¡Bienvenido, " . $_SESSION["username"] . "!";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Página de sesión iniciada</title>
</head>
<body>
  <h1>Página de sesión iniciada</h1>
  <p>Este es el contenido protegido de la página.</p>
  <a href="logout.php">Cerrar sesión</a>
</body>
</html>
