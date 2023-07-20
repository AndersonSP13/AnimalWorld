<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- Scripts CSS -->
    <link rel="stylesheet" href="../../css/pluginsCSS/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/pluginsCSS/cdn.datatables.net_v_dt_dt-1.13.5_datatables.min.css">
    <link rel="stylesheet" href="../../css/pluginsCSS/bootstrap-clockpicker.css">

    <link rel="stylesheet" href="../../css/agendar-cita.css?v=5">
    
    <!-- Scripts JS -->
    <script src="../../js/pluginsJS/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="../../js/pluginsJS/unpkg.com_@popperjs_core@2.11.8_dist_umd_popper.min.js"></script>
    <script src="../../js/pluginsJS/bootstrap.min.js"></script>
    <script src="../../js/pluginsJS/cdn.datatables.net_v_dt_dt-1.13.5_datatables.min.js"></script>
    <script src="../../js/pluginsJS/bootstrap-clockpicker.js"></script>
    <script src="../../js/pluginsJS/momentjs.com_downloads_moment-with-locales.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script> 
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>

    <!--Iconos remixicons-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
   
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>


<div class="contenedor">
  <div class="contenedor-modal">
    <div class="volver">
        <a href="../clientes/cliente.php"><i class="ri-arrow-left-line"></i></a>
    </div> 
    <form action="guardarCita.php" method="POST" id="formularioCita">
      <div class="mb-3">
        <label for="cliente" class="form-label">Nombre De Cliente:</label>
        <input type="text" class="form-control" id="Nombre" name="Nombre" required>
      </div>
      <div class="mb-3">
        <label for="documento" class="form-label">Nombre De Mascota:</label>
        <input type="text" class="form-control" id="NMascota" name="NMascota" required>
      </div>
      <div class="mb-3">
        <label for="nombre" class="form-label">Tipo De Mascota:</label>
        <select class="form-control" id="TMascota" name="TMascota" required>
          <option value="servicio">Seleccionar...</option>
          <option value="Perro">Perro</option>
          <option value="Gato">Gato</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="nombre" class="form-label">Servicio:</label>
        <select class="form-control" id="Servicio" name="Servicio" required>
          <option value="servicio">Seleccionar...</option>
          <option value="Peluquería">Peluquería</option>
          <option value="Baño">Baño</option>
          <option value="Vacunación">Vacunación</option>
          <option value="Examenes">Examenes</option>
          <option value="Todos">Todos</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="fecha-inicio" class="form-label">Fecha de inicio:</label>
        <input type="datetime-local" class="form-control" id="FechaInicio" name="FechaInicio" required>
      </div>
      <label for="color" class="form-label">Estado:</label>
      <select class="form-control" id="Color" name="Estado" onchange="mostrarEstadoColor()" required>
        <option value="Seleccionar">Seleccionar...</option>
        <option value="#3388ff">Cita Pendiente</option>
      </select>
      <div class="modal-footer">
        <button class="btn btn-primary" onclick="agregarEvento()">Guardar</button>
      </div>
    </form>
    

  </div>
</div> 













<!-- Scripts sweetalert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    
</body>
</html>