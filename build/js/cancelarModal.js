const openModalButton = document.getElementById('openModalButton');
const modal = document.getElementById('modal');
const cancelButton = document.getElementById('cancelButton');
const registrarButton = document.getElementById('registrarButton');
const modalForm = document.getElementById('modalForm');

openModalButton.addEventListener('click', function() {
  modal.style.display = 'flex';
  centerModal();
});

cancelButton.addEventListener('click', function(event) {
  event.preventDefault();
  modal.style.display = 'none';
});

// Opcionalmente, puedes agregar también un evento para cerrar el modal si se hace clic fuera del formulario
window.addEventListener('click', function(event) {
  if (event.target === modal) {
    modal.style.display = 'none';
  }
});

function centerModal() {
  const modalContent = modal.querySelector('.modal-form');
  const modalHeight = modalContent.offsetHeight;
  const windowHeight = window.innerHeight;

  modalContent.style.marginTop = Math.max((windowHeight - modalHeight) / 2, 0) + 'px';
}

// Vuelve a centrar el modal al cambiar el tamaño de la ventana
window.addEventListener('resize', centerModal);



// Enviar datos
modalForm.addEventListener('submit', function(event) {
    event.preventDefault();
    // Obtener los valores del formulario
    const Nombre = document.getElementById('Nombre').value;
    const Correo = document.getElementById('Correo').value;
    const Contraseña = document.getElementById('Contraseña').value;
    const Confirmar_contraseña = document.getElementById('Confirmar_contraseña').value;
    const Id_rol = document.getElementById('Id_rol').value;
  
    // Enviar los datos al servidor utilizando AJAX
  const xhr = new XMLHttpRequest();
  xhr.open('POST', '../php/administrador/modals/guardar-modal.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText); // Manejar la respuesta del servidor
      // Aquí puedes agregar lógica adicional según la respuesta del servidor
      // Por ejemplo, mostrar un mensaje de éxito, actualizar la lista de clientes, etc.
      modal.style.display = 'none'; // Cerrar el formulario modal después de registrar el cliente
    }
  };
  xhr.send('Nombre=' + encodeURIComponent(Nombre) + '&email=' + encodeURIComponent(email) + '&Correo=' + encodeURIComponent(Correo) + '&Contraseña=' 
  + encodeURIComponent(Contraseña) + '&Confirmar_contraseña=' + encodeURIComponent(Confirmar_contraseña) + '&Id_rol=' + encodeURIComponent(Id_rol));
});

