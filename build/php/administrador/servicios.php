<?php 

include '../conexion_be.php';
$query = mysqli_query($conexion, "SELECT * FROM servicios "); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimalWorld</title>

    <!--Estilos-->
    <link rel="stylesheet" href="../../css/admin.css?v=2" />
    <link rel="stylesheet" href="../../css/servicios.css?v=2" />
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
                <a href="../administrador/admin.php">
                    <span class="icono"><ion-icon name="paw"></ion-icon></span>
                    <span class="titulo" id="logo-titulo"> AnimalWorld</span>
                </a>
            </li>
            <li>
                <a href="../administrador/admin.php">
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
        </div>
    
    <!-- Fin Barra Superior (Topbar) -->


    <!-- Formulario de ventas -->

    <!-- Ventana modal para agregar venta -->
    <div id="modalAgregarVenta" class="modal">
      <div class="modal-contenido">
        <h2>Agregar Servicio</h2>
        <form id="formularioAgregarVenta" method="POST">
          <input type="text" name="Servicio" placeholder="Servicio" required>
          <input type="text" name="Cliente" placeholder="Cliente" required>
          <input type="text" name="Mascota" placeholder="Mascota" required>
          <input type="text" name="Precio" placeholder="Precio" required>
          <button type="submit" id="btnGuardarVenta">Guardar</button>
          <button type="button" id="btnCerrarModal">Cerrar</button>
        </form>
      </div>
    </div>



    <!-- Tabla clientes -->
    <div class="table">
        <div class="table_header">
            <p>Servicios</p>
            <div>
                <input type="search"  id="search" placeholder="Buscar...">
                <button class="crear_nuevo" id="btnAbrirModal"><i class="ri-add-circle-line"></i> Agregar Servicio</button>
            </div>
        </div>
        <div class="errors-container" style="display: none;">
            <p></p>
        </div>
        <div class="table_id" id="resultsContainer">
            <table id="results">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cliente</th>
                        <th>Mascota</th>
                        <th>Servicio</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($filas=mysqli_fetch_assoc($query)) {
                
                    ?>
                    <tr>
                        <td><?php echo $filas['Id'] ?></td>
                        <td><?php echo $filas['Cliente'] ?></td>
                        <td><?php echo $filas['Mascota'] ?></td>
                        <td><?php echo $filas['Servicio'] ?></td>
                        <td><?php echo $filas['Precio'] ?></td>
                        <td>

                        <button class="editarButton" data-id="<?php echo $filas['Id']; ?>" 
                        onclick="abrirModalEditar(<?php echo $filas['Id']; ?>)">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                            <!-- <button><i class="fa-solid fa-pen-to-square"></i></button> -->
                            <button class="eliminarButton" data-id="' . $filas['Id'] . '" 
                            onclick="eliminarRegistro(<?php echo $filas['Id']?>)"><i class="fa-solid fa-trash-can"></i></button>
                            

                        </td>
                    </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    

    

   
    
    <!-- Scripts Libreria Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Scripts admin.js -->
    <script type="text/javascript" src="../../js/admin.js?v=1"></script>
    <script type="text/javascript" src="../../js/ventas.js?v=1"></script>
    <!-- Scripts sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript" src="../../js/code.jquery.com_jquery-3.7.0.min.js"></script> 
</body>
</html>







