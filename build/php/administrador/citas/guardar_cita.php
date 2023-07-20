<?php
// Obtener los datos del formulario
$Nombre = $_POST['Nombre'];
$nombreMascota = $_POST['NMascota'];
$TipoDeMascota = $_POST['TMascota'];
$servicio = $_POST['Servicio'];
$fechaInicio = $_POST['FechaInicio'];
$Estado = $_POST['Estado'];

// Conectar a la base de datos (reemplaza los valores con los de tu propia configuración)
$servername = 'localhost:3307';
$username = 'root';
$password = 'Animalworld6';
$dbname = 'animalworld';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Error al conectar con la base de datos: ' . $conn->connect_error);
}

// Insertar los datos en la base de datos
$sql = "INSERT INTO agendarcita(Nombre, NMascota, TMascota, Servicio, FechaInicio, Estado)
        VALUES ('$Nombre', '$nombreMascota', '$TipoDeMascota', '$servicio', '$fechaInicio', '$Estado')";

if ($conn->query($sql) === TRUE) {
    header("location: calendario.php");
} else {
    echo 'Error al guardar los datos: ' . $conn->error;
}


$conn->close();


?>





























