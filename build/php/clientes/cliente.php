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
    <link rel="stylesheet" href="../../css/cliente.css?v=2">
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
        <a href="#" class="logo">Animal<span class="logo-titulo">World</span></a>

        <ul class="navlist">
            <li><a href="#">Inicio</a></li>
            <li><a href="../clientes/servicios-cliente.php">Servicios</a></li>
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

    <section class="hero">
        <div class="hero-text">
            <h4>Del Mundo Para Los</h4>
            <h1>ANIM<span class="titulo">ALES</span></h1>
           
            <a href="../clientes/agendar-cita.php"><i class="ri-calendar-line"></i> Agendar Cita</a>
            
        </div>
    </section>

    <div class="icons">
        <a href="#"><i class="ri-instagram-line"></i></a>
        <a href="#"><i class="ri-facebook-line"></i></a>
        <a href="#"><i class="ri-twitter-line"></i></a>
        <a href="#"><i class="ri-youtube-line"></i></a>
    </div>

     <!-- Informacion sobre la veterinaria -->
     <div class="contenedor-informacion">
        <div class="info">
            <h2>Sobre Nosotros</h2>
            <p> En nuestra Veterinaria, nos comprometemos a proporcionar servicios de calidad para satisfacer las necesidades de las mascotas y sus dueños.
                Nuestro objetivo es brindar un entorno acogedor y amigable donde tanto las mascotas como sus familias se sientan bienvenidas y cuidadas. Nos esforzamos por promover el bienestar animal, 
                fomentar la responsabilidad de los dueños de mascotas y ofrecer soluciones integrales para mantener a las mascotas felices y saludables.</p>
        </div>
        <div class="info-img">
            <img src="../../img/banner6.jpg" alt="imagen de info">
        </div>
    </div>
    <br><br>
    <!-- Banner de publicidad -->
    <div class="banner-container">
        <div class="banner">
            <div class="row">
                <img src="../../img/row.png" alt="banner-row">
            </div>
            <div class="contentenido">
                <span>Los Mejores</span>
                <h3>Servicios</h3>
                <p>Disponibles Ahora!</p>
                <a href="../clientes/agendar-cita.php" class="btn-reserva">Reservar Cita</a>
            </div>
            <div class="row2">
                <img src="../../img/row2.png" alt="banner-row2">
            </div>
        </div>
    </div>
    <br>
    <br>
   <!-- Informacion de ubicación -->
   <div class="contenedor-ubicacion">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d988.5933316883277!2d-72.79850107153527!3d7.6429419995213275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMzgnMzQuNiJOIDcywrA0Nyc1Mi4zIlc!5e0!3m2!1ses-419!2sco!4v1688422782460!5m2!1ses-419!2sco"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="info-ubicacion">
            <h2>UBICACIÓN</h2>
            <p>"¡Visítanos en la Veterinaria Animal World, en el Municipio de arboledas, asumimos el compromiso de estar todos los días del año disponibles, para atender cualquier emergencia.
                Cuidaremos de tus mascotas con amor y profesionalismo. ¡Te esperamos con los brazos abiertos!</p>
            <div class="contact-ubicacion">
                <span><ion-icon name="phone-portrait-outline"></ion-icon> 322 9824011</span>
                <span><ion-icon name="mail-outline"></ion-icon> AnimalWorld@gmail.com</span>
                <span><ion-icon name="location-outline"></ion-icon> Cl. 2, Arboledas, Norte de Santander</span>
            </div>
        </div>
        
   </div>
 
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
            <li><a href="#">Inicio</a></li>
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


