<?php

$host = 'localhost';  // Cambia esto si tu servidor MySQL está en otro lugar
$user = 'roost';  // Cambia esto al usuario de tu base de datos MySQL
$database = 'colegio';  // Cambia esto al nombre de tu base de datos MySQL

// Realiza la conexión a la base de datos MySQL
$conexion = mysqli_connect($host, $user, $password, $database);

// Verifica si la conexión a la base de datos fue exitosa
if (mysqli_connect_errno()) {
    echo "Error al conectar a la base de datos MySQL: " . mysqli_connect_error();
    exit();
}

?>
