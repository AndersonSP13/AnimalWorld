<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimalWorld</title>

    <!--Estilos-->
    <link rel="stylesheet" href="../../css/admin.css?v=2" />
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
    

</head>
<body>

    <section>
    <!-- Ménu -->
    <div class="nav">
        <ul>
            <li>
                <a href="#">
                    <span class="icono"><ion-icon name="paw"></ion-icon></span>
                    <span class="titulo" id="logo-titulo">AnimalWorld</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icono"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="titulo">Inicio</span>
                </a>
            </li>
            <li>
                <a href="../administrador/clientes.php">
                    <span class="icono"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="titulo">Clientes</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icono"><ion-icon name="laptop-outline"></ion-icon></span>
                    <span class="titulo">Registro</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icono"><ion-icon name="cart-outline"></ion-icon></span>
                    <span class="titulo">Ventas</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icono"><ion-icon name="help-circle-outline"></ion-icon></span>
                    <span class="titulo">Ayuda</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icono"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="titulo">Configuración</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icono"><ion-icon name="log-out-outline"></ion-icon></span>
                    <span class="titulo">Cerrar Sesión</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Fin Ménu -->

    <!-- Dashboard -->
    <div class="container">
    <!-- Barra Superior (Topbar) -->
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline" class="menu-hamburguesa"></ion-icon>
            </div>
            <div class="buscar">
                <label for="">
                    <input type="text" placeholder="Buscar..." name="" id="">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
            <div class="perfil-usuario">
                <div class="perfil-usuario-img">
                    <img src="../../img/animal-gd7845a37f_1280.png" alt="Peril Usuario">
                </div>
            </div>
        </div>
    <!-- Fin Barra Superior (Topbar) -->

    <!-- Cards -->
    <div class="cards">
        <div class="card">
            <div>
                <span class="card-nombre">Informes</span>
            </div>
            <div class="card-icono">
                <ion-icon name="folder-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <span class="card-nombre">Pacientes</span>
            </div>
            <div class="card-icono">
                <ion-icon name="paw-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <span class="card-nombre">Citas</span>
            </div>
            <div class="card-icono">
                <ion-icon name="calendar-clear-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <span class="card-nombre">Servicios</span>
            </div>
            <div class="card-icono">
                <ion-icon name="grid-outline"></ion-icon>
            </div>
        </div>
    </div>
    <!-- Fin Cards -->

    <!-- Fin Cards -->
    <div class="nuevos-clientes">
    <div class="formulario">
        <form>

            <input type="autoincrement" placeholder="Id" name="Id">
            <input type="text" placeholder="Nombre" name="Nombre">
            <input type="email" placeholder="Correo" name="Correo">
            <input type="password" placeholder="Contraseña" name="Contraseña">
            <input type="password" placeholder="Confirmar contraseña" name="Confirmar_contraseña">
            <input type="text" placeholder="Id_Rol" name="Id_Rol">

            <input type="submit" name="btn-agregar" value="Agregar">
            <br><br>
            <a href="clientes.php">Regresar</a>
        </form>
    </div>
</div>
<?php

    include '../conexion_be.php';
    $Id = $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $Correo = $_POST['Correo'];
    $Contraseña = $_POST['Contraseña'];
    $Confirmar_contraseña = $_POST['Confirmar_contraseña'];
    $Id_Rol = $_POST['Id_Rol'];

?>
    </div>
    <!-- Fin De Dashboard -->
    </section>



    
    <!-- Scripts Libreria Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Scripts admin.js -->
    <script type="text/javascript" src="../../js/admin.js?v=0"></script>

</body>
</html>










