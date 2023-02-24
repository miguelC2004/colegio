<?php
	// Obtener valores del formulario
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Verificar si el nombre de usuario y la contraseña son válidos
	// Por simplicidad, aquí estamos usando valores hardcoded, pero en una implementación real, estos deberían ser comparados con una base de datos de usuarios registrados
	if ($username == 'docente' && $password == 'password') {
		// Inicio de sesión exitoso
		// Redirigir al usuario a la página de docente
		header('Location: dashboard-docente.php');
		exit;
	} else {
		// Inicio de sesión fallido
		// Redirigir al usuario a la página de inicio de sesión con un mensaje de error
		header('Location: login-docente.html?error=1');
		exit;
	}
?>
