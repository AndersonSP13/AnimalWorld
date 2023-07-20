<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Animal World || Contacto</title>

    <!--Estilos-->
    
    <link rel="stylesheet" href="../css/contactar.css?v=2"/>
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
            <form action="../php/contacto.php" method="POST">
                <h1>PQR</h1>
                <span>Enviar con:</span>
                <input type="text" id="Nombre" placeholder="Nombre" name="Nombre" required>
                <input type="email" id="Correo" placeholder="Correo" name="Correo" required >
                <textarea name="textarea" rows="10" cols="50" placeholder="  Mensaje..." required></textarea>
                <button id="btn-enviar" name="btn-enviar">Enviar</button>
            </form>
        </div>
    <div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>