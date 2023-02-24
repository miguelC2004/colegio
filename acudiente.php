<?php
  $usuario = $_POST["usuario"];
  $contraseña = $_POST["contraseña"];

  // Aquí se puede incluir cualquier validación para verificar
  // si el usuario y la contraseña son correctos.
  // Por ejemplo:
  if ($usuario === "acudiente" && $contraseña === "123456") {
    // Iniciar sesión y redirigir a la página principal de acudiente
    header("Location: acudiente_principal.html");
    exit;
  } else {
    // Mostrar mensaje de error
    echo "Usuario o contraseña inválidos";
  }
?>
