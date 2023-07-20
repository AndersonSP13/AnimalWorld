<?php
$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contraseña'];
session_start();
$_SESSION['Correo'] = $Correo;

include 'conexion_be.php';

// Validaciones para saber si el correo existe en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo = '$Correo'");

if (mysqli_num_rows($verificar_correo) == 0) {
    echo '
    <script>
        alert("El correo ingresado no está registrado");
        window.location = "inicio-registro.php";
    </script>
    ';
    exit();
}

// Consulta para seleccionar el tipo de rol 
$consulta = "SELECT * FROM usuarios where Correo = '$Correo' and Contraseña = '$Contraseña' ";
$resultado = mysqli_query($conexion,$consulta);

//validacion para saber si la contraseña esta asociada al correo
if (mysqli_num_rows($resultado) == 0) {
    echo '
    <script>
        alert("La contraseña ingresada no coincide con el correo");
        window.location = "inicio-registro.php";
    </script>
    ';
    exit();
}

$filas = mysqli_fetch_array($resultado);

// Almacenar el nombre del usuario en una variable de sesión
$_SESSION['Nombre'] = $filas['Nombre'];

if($filas['Id_rol']==1){ //Administrador
    header("location: ../php/administrador/admin.php");

}else
if($filas['Id_rol']==2){ //Cliente
    header("location: ../php/clientes/cliente.php");
}

else {
    ?>
    <?php
    include('inicio-registro.php');
    ?>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);


?>





