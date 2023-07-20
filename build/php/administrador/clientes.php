<?php 

include '../conexion_be.php';
$query = mysqli_query($conexion, "SELECT * FROM usuarios "); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimalWorld</title>

    <!--Estilos-->
    <link rel="stylesheet" href="../../css/admin.css?v=3" />
    <link rel="stylesheet" href="../../css/crud.css?v=2">
    <link rel="stylesheet" href="../../css/modal-registro.css?v=1">
 
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
            
        </div>
    
    <!-- Fin Barra Superior (Topbar) -->

    <!-- Tabla clientes -->
    <div class="table">
        <div class="table_header">
            <p>Clientes</p>
            <div>
                <input type="search"  id="search" placeholder="Buscar...">
                <button class="crear_nuevo" id="openModalButton"><ion-icon name="person-add-outline"></ion-icon> Crear Nuevo</button>
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
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Confirmar Contraseña</th>
                        <th>Id Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($filas=mysqli_fetch_assoc($query)) {
                
                    ?>
                    <tr>
                        <td><?php echo $filas['Id'] ?></td>
                        <td><?php echo $filas['Nombre'] ?></td>
                        <td><?php echo $filas['Correo'] ?></td>
                        <td><?php echo $filas['Contraseña'] ?></td>
                        <td><?php echo $filas['Confirmar_contraseña'] ?></td>
                        <td><?php echo $filas['Id_rol'] ?></td>
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
        <div class="pagination" id="pagination">
            <!-- <div><i class="fa-solid fa-angles-left"></i></div>
            <div><i class="fa-solid fa-angle-left"></i></div>
            <div>1</div>
            <div>2</div>
            <div><i class="fa-solid fa-angle-right"></i></div>
            <div><i class="fa-solid fa-angles-right"></i></div> -->
        </div>
    </div>
    <!-- Ventana modal  -->
    <!-- Registrar nuevos usuarios -->
    <?php include '../administrador/modals/modal-registro.php' ?>

    <!-- Modificar Datos -->

    <!-- Fin ventana modal -->

    <!-- Fin De Dashboard -->
    </section>

    

    

   
    
    <!-- Scripts Libreria Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Scripts admin.js -->
    <script type="text/javascript" src="../../js/admin.js?v=1"></script>
    <!-- Scripts cancelarModal.js -->
    <script type="text/javascript" src="../../js/cancelarModal.js?v=2"></script> 
    <!-- Scripts modificar-clientes.js -->
    <script type="text/javascript" src="../../js/modificar-usuarios.js?v=1"></script> 
    <!-- Scripts alertas -->
    <script type="text/javascript" src="../../js/alertas.js?v=1"></script> 
    <!-- Scripts sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript" src="../../js/pluginsJS/code.jquery.com_jquery-3.7.0.min.js"></script> 
</body>
</html>

