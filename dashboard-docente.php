<?php
  // Incluir el archivo de conexión a la base de datos
  require_once 'conexion.php';

  // Verificar si el usuario ha iniciado sesión
  session_start();
  if (!isset($_SESSION['username'])) {
    // Si no ha iniciado sesión, redirigir al usuario a la página de inicio de sesión
    header('Location: login-docente.php');
    exit;
  }

  // Obtener los datos del docente actual de la base de datos
  $username = $_SESSION['username'];
  $query = "SELECT * FROM docentes WHERE username='$username'";
  $result = mysqli_query($conn, $query);
  $docente = mysqli_fetch_assoc($result);

  // Mostrar los datos del docente en la página
  echo "<h1>Bienvenido, " . $docente['nombre'] . "</h1>";
  echo "<p>Tu dirección de correo electrónico es: " . $docente['email'] . "</p>";
?>
