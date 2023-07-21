<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal World</title>

    <!--Estilos-->
    <link rel="stylesheet" href="../AnimalWorld/build/css/index.css?v=5" />
    <link rel="stylesheet" href="../AnimalWorld/build/css/footer.css?v=1">
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
            <li><a href="#Servicios">Servicios</a></li>
            <li><a href="../AnimalWorld/build/php/contacto.php">PQR</a></li>
            <li><a href="../AnimalWorld/build/pdf/Horarios.pdf" target="_blank">Horarios de Atención</a></li>
            <li><a href="../AnimalWorld/build/pdf/manual de usuario del Animal World.pdf" target="_blank">Manual de Usuario</a></li>
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h4>Del Mundo Para Los</h4>
            <h1>ANIM<span class="titulo">ALES</span></h1>
            <P>¿Te preocupa la salud y felicidad de tus adorables compañeros peludos? En la Veterinaria Animal World entendemos tu amor incondicional por ellos 
                y estamos aquí para brindarles la mejor atención médica con mucho cariño. 
            </P>
            <a href="../AnimalWorld/build/php/inicio-registro.php"><i class="ri-user-line"></i> Iniciar Sesión</a>
            
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
            <img src="../AnimalWorld/build/img/banner6.jpg" alt="imagen de info">
        </div>
    </div>
    <br><br>
    <!-- Banner de publicidad -->
    <div class="banner-container">
        <div class="banner">
            <div class="row">
                <img src="../AnimalWorld/build/img/row.png" alt="banner-row">
            </div>
            <div class="contentenido">
                <span>Los Mejores</span>
                <h3>Servicios</h3>
                <p>Disponibles Ahora!</p>
                <a href="../AnimalWorld/build/php/inicio-registro.php" class="btn-reserva">Reservar Cita</a>
            </div>
            <div class="row2">
                <img src="../AnimalWorld/build/img/row2.png" alt="banner-row2">
            </div>
        </div>
    </div>
    <br>

    <!-- Cards de servicios -->
    <div class="container" id="Servicios">
        <div class="card">
            <div class="imgBx"><img src="../AnimalWorld/build/img/Peluqueria.jpg" alt="Peluquería"></div>
            <div class="content">
                <h2>Peluquería</h2>
                <a href="../AnimalWorld/build/php/servicio-peluqueria.php">Ver Más</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBx"><img src="../AnimalWorld/build/img/Bano.jpg" alt="Baño"></div>
            <div class="content">
                <h2>Baño</h2>
                <a href="../AnimalWorld/build/php/servicio-bano.php">Ver Más</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBx"><img src="../AnimalWorld/build/img/vacunacion.jpg" alt="Vacunación"></div>
            <div class="content">
                <h2>Vacunación</h2>
                <a href="../AnimalWorld/build/php/servicio-vacunacion.php">Ver Más</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBx"><img src="../AnimalWorld/build/img/Examen.jpg" alt="Examenes"></div>
            <div class="content">
                <h2>Examenes</h2>
                <a href="../AnimalWorld/build/php/servicio-examenes.php">Ver Más</a>
            </div>
        </div>
    </div>
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
 
   <br><br><br><br><br><br>
    
    <footer>
        
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
            <li><a href="../AnimalWorld/build/php/contacto.php">PQR</a></li>
            <li><a href="../AnimalWorld/build/pdf/Horarios.pdf" target="_blank">Horarios de Atención</a></li>
            <li><a href="../AnimalWorld/build/pdf/manual de usuario del Animal World.pdf" target="_blank">Manual de Usuario</a></li>
        </ul>
        <br>
        <span class="copyright">&copy;2023, Animal World. Reserva todos los derechos</span>
      </footer>
       

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!--Link Js-->
    <script src="../AnimalWorld/build/js/index.js"></script>

 
    
</body>
</html>
