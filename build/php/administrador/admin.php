<?php
    // PHP code to retrieve user's name and start the session
    session_start();
    $Nombre = isset($_SESSION['Nombre']) ? $_SESSION['Nombre'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimalWorld</title>

    <!--Estilos-->
    <link rel="stylesheet" href="../../css/admin.css?v=4" />
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
                <a href="../administrador/servicios.php">
                    <span class="icono"><ion-icon name="medkit-outline"></ion-icon></span>
                    <span class="titulo">Servicios</span>
                </a>
            </li>
            <li>
                <a href="../cerrar_sesion.php">
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
            <div class="dropdown">
                    <a href="#" class="user-info"><span style="color: #3388ff;">Administrador:</span> <?php echo $Nombre; ?> <i class="ri-arrow-drop-down-line"></i></a>
                    <div class="dropdown-content">
                        <a href="../cerrar_sesion.php">Cerrar sesión</a>
                    </div>
                </div>
        </div>
    <!-- Fin Barra Superior (Topbar) -->

    <!-- Imagen de administracion -->
    <div class="panel-admin"></div>

    <!-- Cards -->
    <div class="cards">
        <div class="card">
            <div>
                <a href="" class="card-nombre"> Informes</a> 
            </div>
            <div class="card-icono">
                <ion-icon name="folder-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <a href="" class="card-nombre"> Pacientes</a>
            </div>
            <div class="card-icono">
                <ion-icon name="paw-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <a href="../administrador/citas/calendario.php" class="card-nombre"> Citas</a>
            </div>
            <div class="card-icono">
                <ion-icon name="calendar-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <a href="servicios-admin.php" class="card-nombre">Mensajes</a>
            </div>
            <div class="card-icono">
                <ion-icon name="mail-outline"></ion-icon>
            </div>
        </div>
    </div>
    <!-- Fin Cards -->

    <!-- Fin Cards -->
    <div class="detalles">
        <!-- Ordenes Recientes -->

        <!-- Fin De Ordenes Recientes -->

        <!-- Nuevos Clientes -->

        <!-- Fin De Nuevos Clientes -->
    </div>
    <!-- Fin De Detalles -->
    </div>
    <!-- Fin De Dashboard -->
    </section>



    
    <!-- Scripts Libreria Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Scripts admin.js -->
    <script type="text/javascript" src="../../js/admin.js?v=0"></script>

    <script type="text/javascript" src="../../js/nombre-perfil.js"></script>

</body>
</html>