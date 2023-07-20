<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Inicio || Registro</title>

    <!--Estilos-->
    
    <link rel="stylesheet" href="../css/inicio-registro.css?v=1" />
    <!--Iconos boxicons-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!--Iconos Fontawesome-->
    <script src="https://kit.fontawesome.com/97bad563d2.js" crossorigin="anonymous"></script>
    <!--Iconos remixicons-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--Alertas Sweetalert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="volver">
        <a href="../../index.php"><i class="ri-arrow-left-line"></i></a>
    </div>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="../php/registro_usuario_be.php" method="POST" onsubmit="return validar();">
                <h1>Crear Cuenta</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-google-plus-g"></i></a>
                </div>
                <span>Registrarse con</span>
                <input type="text" id="Nombre" placeholder="Nombre" name="Nombre" required>
                <input type="email" id="Correo" placeholder="Correo" name="Correo" required>
                <input type="password" id="Contraseña" placeholder="Contraseña" name="Contraseña" required>
                <input type="password" id="Confirmar_contraseña" placeholder="Confirmar Contraseña" name="Confirmar_contraseña" required>
                <button id="btn-registrarse" name="btn_registrarse">Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="inicio_usuario_be.php" class="formulario" id="formulario" method="POST">
                <h1>Iniciar Sesión</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-google-plus-g"></i></a>
                </div>
                <span>Iniciar Sesión con</span>
                <input type="email" placeholder="Correo" name="Correo" class="formulario_input-vali" id="Correo"  required oninvalid="this.setCustomValidity('El campo correo esta vacio')" oninput="this.setCustomValidity('')">
                <input type="password" placeholder="Contraseña" name="Contraseña" class="formulario_input-vali" id="Contraseña"  required oninvalid="this.setCustomValidity('El campo contraseña esta vacio ')" oninput="this.setCustomValidity('')">
                   
                
                
                
                <a href="recuperar_contra.php">Olvidaste tu contraseña?</a>
                <button id="btn-iniciar-sesion">Ingresar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="h1-t">¿Ya tienes una cuenta?</h1>
                    <p>para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                    <button class="ghost" id="signIn">Iniciar Sesión</button>
                </div>
            </div>
                <div class="overlay-panel overlay-right">
                    <h1 class="h1-t">¿Aún no tienes una cuenta?</h1>
                    <p class="p-text">Registrese y comience un viaje con nosotros a un mundo animal</p>
                    <button class="ghost" id="signUp">Registrarse</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/inicio-registro.js"></script>
</body>
</html>