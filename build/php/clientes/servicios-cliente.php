<?php
    // PHP code to retrieve user's name and start the session
    session_start();
    $Nombre = isset($_SESSION['Nombre']) ? $_SESSION['Nombre'] : '';

    include '../conexion_be.php';
    $query = mysqli_query($conexion, "SELECT * FROM agendarcita"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal World</title>

    <!--Estilos-->
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/servicios-cliente.css?v=1">
    <!--Iconos boxicons-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!--Iconos remixicons-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

<header>
        <a href="../clientes/cliente.php" class="logo">Animal<span class="logo-titulo">World</span></a>

        <ul class="navlist">
            <li><a href="../clientes/cliente.php">Inicio</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="../pqr.php">PQR</a></li>
            <li><a href="../../pdf/Horarios.pdf" target="_blank">Horarios de Atención</a></li>
            <li><a href="../../pdf/manual de usuario del Animal World.pdf" target="_blank">Manual de Usuario</a></li>

            <li>
                <div class="dropdown">
                    <a href="#" class="user-info"><i class="ri-user-fill"></i> <?php echo $Nombre; ?> <i class="ri-arrow-drop-down-line"></i></a>
                    <div class="dropdown-content">
                        <a href="../cerrar_sesion.php">Cerrar sesión</a>
                    </div>
                </div>
            </li>   
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>


<!-- Banner de presentacion de servicios -->
  <div class="banner"></div>

<!-- Aquí iría el contenido de lo servicios -->

<div class="titular">
    <h1>Los mejores servicios los encuentras aqui!</h1>
</div>



<!-- Cards de servicios -->
<div class="container" id="Servicios">
        <div class="card">
            <div class="imgBx"><img src="../../img/Peluqueria.jpg" alt=""></div>
            <div class="content">
                <h2>Peluquería</h2>
                <a href="cliente-peluqueria.php">Ver Más</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBx"><img src="../../img/bano.jpg" alt=""></div>
            <div class="content">
                <h2>Baño</h2>
                <a href="cliente-bano.php">Ver Más</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBx"><img src="../../img/vacunacion.jpg" alt=""></div>
            <div class="content">
                <h2>Vacunación</h2>
                <a href="cliente-vacunacion.php">Ver Más</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBx"><img src="../../img/Examen.jpg" alt=""></div>
            <div class="content">
                <h2>Examenes</h2>
                <a href="cliente-examenes.php">Ver Más</a>
            </div>
        </div>
    </div>


    <footer class="footer-servicios">
        
        <div class="waves">
          <div class="wave" id="wave1"></div>
          <div class="wave" id="wave2"></div>
          <div class="wave" id="wave3"></div>
          <div class="wave" id="wave4"></div>
        </div>
        <ul class="social_icon">
          <li><a href="#"><i class="ri-instagram-fill"></i></a></li>
          <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
          <li><a href="#"><i class="ri-twitter-fill"></i></a></li>
          <li><a href="#"><i class="ri-youtube-fill"></i></a></li>
          
        </ul>
        <ul class="menu-footer">
            <li><a href="../clientes/cliente.php">Inicio</a></li>
            <li><a href="#Servicios">Servicios</a></li>
            <li><a href="../pqr.php">PQR</a></li>
            <li><a href="../../pdf/Horarios.pdf" target="_blank">Horarios de Atención</a></li>
            <li><a href="../../pdf/manual de usuario del Animal World.pdf" target="_blank">Manual de Usuario</a></li>
        </ul>
        <br>
        <span class="copyright">&copy;2023, Animal World. Reserva todos los derechos</span>
      </footer>




  <!--Link Js-->
  <script src="../../js/index.js"></script>

  <script type="text/javascript" src="../../js/nombre-perfil.js"></script>

</body>
</html>