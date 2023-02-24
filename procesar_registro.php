<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Confirmación de Registro</title>
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
  <?php
    // Recuperamos los datos del formulario
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $documento_del_menor = isset($_POST["documento_del_menor"]) ? $_POST["documento_del_menor"] : "";
    $numero_de_telefono = isset($_POST["numero de teléfono"]) ? $_POST["numero de teléfono"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $programa = isset($_POST["programa"]) ? $_POST["programa"] : "";

    if (isset($_POST['documento_del_menor'])) {
      $documento_del_menor = $_POST['documento_del_menor'];
    } else {
      $documento_del_menor = "";
    }


    // Mostramos un mensaje de confirmación al usuario
    echo "<h2>Gracias por registrarte en nuestros programas, $nombre</h2>";
    echo "<p>A continuación se muestran los datos que nos has proporcionado:</p>";
    echo "<ul>";
    echo "Nombre: " . $_POST["nombre"] . "<br>";
    echo "Documento del menor: " . $_POST["documento_del_menor"] . "<br>";
    echo "Numero de teléfono: " . $_POST["numero_de_telefono"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Programa: " . $_POST["programa"] . "<br>";
    echo "</ul>";
  ?>
</body>
</html>
