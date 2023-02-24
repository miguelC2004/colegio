<?php
  session_start();
  if (!isset($_SESSION['username'])) {
    header('Location: login-estudiante.php');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Perfil Estudiante</title>
  </head>
  <body>
    <h1>Bienvenido, <?php echo $_SESSION['username']; ?></h1>
    <p>Esta es tu página de perfil como estudiante.</p>
  </body>

<?php
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $dbname = "alumnos";

    // Crear conexión
    $conn = new mysqli($servername, $username, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener el ID del estudiante actual
    $id_estudiante = $_SESSION['id_estudiante'];

    // Consultar las calificaciones del estudiante
    $sql = "SELECT * FROM calificaciones WHERE id_estudiante = $id_estudiante";
    $result = $conn->query($sql);

    // Mostrar las calificaciones
    echo "<table>";
    echo "<tr><th>Asignatura</th><th>Calificación</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['asignatura'] . "</td>";
        echo "<td>" . $row['calificacion'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    // Cerrar conexión
    $conn->close();
?>
<style>table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    font-size: 14px;
    color: #333;
}

th {
    background-color: #f2f2f2;
    color: #333;
    padding: 10px;
    border: 1px solid #ccc;
}

td {
    border: 1px solid #ccc;
    padding: 10px;
}
</style>
</html>