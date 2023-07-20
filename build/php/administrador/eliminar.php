<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="../../js/pluginsJS/code.jquery.com_jquery-3.7.0.min.js"></script> 


<?php

include '../conexion_be.php';

$eliminar = $_POST['id'];

$sentencias = $conexion -> query("DELETE FROM `usuarios` WHERE ID = $eliminar");