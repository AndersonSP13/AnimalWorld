<?php
    // PHP code to retrieve user's name and start the session
    session_start();
    $Nombre = isset($_SESSION['Nombre']) ? $_SESSION['Nombre'] : '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal World</title>

    <!--Estilos-->
    <link rel="stylesheet" href="../../css/cliente-bano.css?v=2">
    <link rel="stylesheet" href="../../css/footer.css">
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
            <li><a href="../clientes/servicios-cliente.php">Servicios</a></li>
            <li><a href="../pqr.php">PQR</a></li>
            <li><a href="../../pdf/Horarios.pdf">Horarios de Atención</a></li>
            <li><a href="../../pdf/manual de usuario del Animal World.pdf">Manual de usuario</a></li>

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

    <section class="hero">
        <div class="hero-text">
            <h4>Servicio de</h4>
            <h1>Ba<span class="titulo">ño</span></h1>
        </div>
    </section>

    <div class="contenedor-informacion">
        <div class="info">
            <h2>El mejor baño para tu mascota</h2>
            <p> En ANIMAL WORLD, convertimos un baño aburrido en una gran experiencia para tu mascota. 
                Nuestro equipo veterinario está presto a brindar un tratamiento completo con 
                productos de primera calidad, para que tu mascota se sienta cómoda y relajada.</p>
        </div>
        <div class="info-img">
            <img src="../../img/servicioBano.jpg" alt="imagen de info">
        </div>
    </div>

    <div class="icons">
        <a href="#"><i class="ri-instagram-line"></i></a>
        <a href="#"><i class="ri-facebook-line"></i></a>
        <a href="#"><i class="ri-twitter-line"></i></a>
        <a href="#"><i class="ri-youtube-line"></i></a>
    </div>

    <br><br><br><br><br>
 
   <br><br><br><br><br>
    
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
            <li><a href="../clientes/servicios-cliente.php">Servicios</a></li>
            <li><a href="../pqr.php">PQR</a></li>
            <li><a href="../../pdf/Horarios.pdf">Horarios de Atención</a></li>
            <li><a href="../../pdf/manual de usuario del Animal World.pdf">Manual de usuario</a></li>
        <br>
        <span class="copyright">&copy;2023, Animal World. Reserva todos los derechos</span>
      </footer>
       

    <!--Link Js-->
    <script src="../../js/index.js"></script>

    <script type="text/javascript" src="../../js/nombre-perfil.js"></script>
</body>
</html>