<?php
// Incluimos el archivo que contiene la conexión a la base de datos
include("conexion.php");

// Definimos las variables para almacenar los datos del usuario
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

// Verificamos si el usuario ya existe en la base de datos
$query = "SELECT * FROM usuarios WHERE username='$username'";
$result = mysqli_query($conexion, $query);

if(mysqli_num_rows($result) > 0) {
    // Si el usuario ya existe, redirigimos de vuelta a la página de registro con un mensaje de error
    header("Location: registro-docente.php?error=El%20nombre%20de%20usuario%20ya%20est%C3%A1%20en%20uso");
    exit();
}

// Si el usuario no existe, insertamos los datos en la base de datos
$query = "INSERT INTO usuarios (username, password, email) VALUES ('$username', '$password', '$email')";
$result = mysqli_query($conexion, $query);

// Verificamos si la inserción de datos fue exitosa
if($result) {
    // Si la inserción fue exitosa, redirigimos a la página de inicio de sesión con un mensaje de éxito
    header("Location: index.php?success=Registro%20exitoso.%20Por%20favor,%20inicie%20sesi%C3%B3n.");
} else {
    // Si la inserción no fue exitosa, redirigimos de vuelta a la página de registro con un mensaje de error
    header("Location: registro-docente.php?error=Ha%20ocurrido%20un%20error.%20Por%20favor,%20intente%20de%20nuevo.");
}

// Cerramos la conexión a la base de datos
mysqli_close($conexion);
?>
