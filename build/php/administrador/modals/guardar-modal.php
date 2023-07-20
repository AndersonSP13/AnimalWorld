<?php
// Obtener los valores del formulario
$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contraseña'];
$Confirmar_contraseña = $_POST['Confirmar_contraseña'];
$Id_rol = $_POST['Id_rol'];

// Establecer conexión a la base de datos MySQL
$servername = 'localhost:3307';
$username = 'root';
$password = 'Animalworld6';
$dbname = 'animalworld';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die('Error de conexión a la base de datos: ' . $conn->connect_error);
}

// Escapar los valores para evitar inyección de SQL
$nombre = $conn->real_escape_string($nombre);
$email = $conn->real_escape_string($email);

// Preparar la consulta SQL de inserción
$sql = "INSERT INTO usuarios (Nombre, Correo, Contraseña, Confirmar_contraseña, Id_rol) VALUES ('$Nombre', '$Correo', '$Contraseña', '$Confirmar_contraseña', '$Id_rol')";

if ($conn->query($sql) === TRUE) {
  echo 'Cliente registrado exitosamente.';
} else {
  echo 'Error al registrar el cliente: ' . $conn->error;
}

$conn->close();
?>
