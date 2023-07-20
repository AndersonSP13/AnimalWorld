<?php
$servername = "localhost:3307";
$username = "root";
$password = "Animalworld6";
$dbname = "animalworld";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Error al conectar a la base de datos: " . $conn->connect_error);
}


// Obtener los eventos desde la base de datos
$sql = "SELECT * FROM agendarcita";
$result = $conn->query($sql);

$eventos = array();

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $evento = array(
      'title' => $row['Nombre']. ' - ' . $row['TMascota']. ' - ' . $row['NMascota']. ' - ' . $row['Servicio'],
      'start' => $row['FechaInicio'],
      'color' => $row['Estado']
    );
    array_push($eventos, $evento);
  }
}


$conn->close();

header('Content-Type: application/json');
echo json_encode($eventos);
?>
