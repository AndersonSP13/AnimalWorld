<?php
// Obtén los valores del formulario de agregar venta
$Servicio = $_POST['Servicio'];
$Cliente = $_POST['Cliente'];
$Mascota = $_POST['Mascota'];
$Precio = $_POST['Precio'];

// Realiza la conexión a la base de datos
$servername = 'localhost:3307';
$username = 'root';
$password = 'Animalworld6';
$dbname = 'animalworld';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Inserta la venta en la base de datos
$sql = "INSERT INTO servicios (Servicio, Cliente, Mascota, Precio) VALUES ('$Servicio', $Cliente, '$Mascota', '$Precio')";
if ($conn->query($sql) === TRUE) {
  echo "Servicio guardado exitosamente.";
} else {
  echo "Error al guardar el servicio: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>
