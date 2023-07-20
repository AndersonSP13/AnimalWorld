<?php 

    include 'conexion_be.php';

    $Nombre = $_POST['Nombre'];
    $Correo = $_POST['Correo'];
    $Contraseña = $_POST['Contraseña'];
    $Confirmar_contraseña = $_POST['Confirmar_contraseña'];

    //Encriptar Contraseña
    // $Contraseña = hash('sha512', $Contraseña);
    // $Confirmar_contraseña = hash('sha512', $Confirmar_contraseña);

    $Id_rol = 2;

    $query = "INSERT INTO usuarios(Nombre, Correo, Contraseña, Confirmar_contraseña, Id_rol) 
              VALUES('$Nombre', '$Correo', '$Contraseña', '$Confirmar_contraseña', '$Id_rol')";

    
    
    //Verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$Correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
            alert("Este correo ya esta registrado, intenta con otro diferente");
            window.location = "inicio-registro.php";
        </script>
        ';
        exit();
    }

    //validacion de caracteres de las contraseñas


     //Verificar que la contraseña y confirmar contraseña sean iguales
     if($Contraseña != $Confirmar_contraseña){
        echo '
        <script>
            alert("Las contraseñas no coinciden, intentalo nuevamente");
            window.location = "inicio-registro.php";
        </script>
        ';
        exit();
    }

    //Validacion del Registro de Usuarios
    $ejecutar = mysqli_query($conexion, $query);
    
    if($ejecutar){
        echo '
            <script>
                alert("Usuario Registrado Exitosamente");
                window.location = "inicio-registro.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentalo Nuevamente, usuario no registrado");
                window.location = "inicio-registro.php";
            </script>
        ';
        mysqli_close($conexion);
    }
    


?>

    