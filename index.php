<?php
    session_start();
    // Verificamos si el usuario ha iniciado sesión
    if(!isset($_SESSION['username'])) {
        // Si no ha iniciado sesión, redirigimos al usuario a la página de inicio de sesión
        header('Location: login-docente.php');
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard de Docente</title>
</head>
<body>
    <h1>Bienvenido <?php echo $_SESSION['username']; ?></h1>
    <p>Este es tu panel de control, aquí puedes ver tus clases, asignaciones y calificaciones.</p>
    <a href="logout-docente.php">Cerrar sesión</a>
</body>
</html>
