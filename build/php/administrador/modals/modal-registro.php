<!-- Ventana modal  -->
    <input type="checkbox" id="btn-modal">
    <div class="container-modal" id="modal">
        <div class="content-modal">
            <h1>Agregar cliente</h1>
            <form action="../php/registro_usuario_be.php" method="POST" onsubmit="return validar();" id="modalForm">
                <input type="text" id="Nombre" placeholder="Nombre" name="Nombre">
                <input type="email" id="Correo" placeholder="Correo" name="Correo">
                <input type="password" id="Contraseña" placeholder="Contraseña" name="Contraseña">
                <input type="password" id="Confirmar_contraseña" placeholder="Confirmar Contraseña" name="Confirmar_contraseña">
                <input type="text" id="Id_rol" placeholder="Rol" name="Id-rol" >
            </form>
        
            <div class="botones">
                <div class="btn-cerrar">
                    <button id="cancelButton">Cancelar</button>
                </div>
                <div class="btn-agregar">
                    <button type="submit" class="registrarButton" id="registrarButton">Registrar</button>
                </div>
            </div>

        </div>
    </div>
<!-- Fin ventana modal -->
