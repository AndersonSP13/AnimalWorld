// Obtén referencias a los elementos del DOM
const btnAbrirModal = document.getElementById('btnAbrirModal');
const modalAgregarVenta = document.getElementById('modalAgregarVenta');
const btnCerrarModal = document.getElementById('btnCerrarModal');
const formularioAgregarVenta = document.getElementById('formularioAgregarVenta');

// Agrega evento clic al botón "Agregar Venta" para abrir el modal
btnAbrirModal.addEventListener('click', function() {
  modalAgregarVenta.style.display = 'block';
});

// Agrega evento clic al botón de cerrar modal para cerrar la ventana modal
btnCerrarModal.addEventListener('click', function() {
  modalAgregarVenta.style.display = 'none';
});

// Agrega evento submit al formulario de agregar venta
formularioAgregarVenta.addEventListener('submit', function(event) {
  event.preventDefault(); // Evita el envío del formulario por defecto

  // Obtén los valores del formulario
  const Servicio = formularioAgregarVenta.Servicio.value;
  const Cliente = formularioAgregarVenta.Cliente.value;
  const Mascota = formularioAgregarVenta.Mascota.value;
  const Precio = formularioAgregarVenta.Precio.value;

  // Realiza una solicitud AJAX para guardar la venta en la base de datos
  const xhr = new XMLHttpRequest();
  xhr.open('POST', '../php/administrador/registrar-ventas.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Muestra una alerta de SweetAlert2 con la respuesta del servidor
      Swal.fire({
        icon: 'success',
        title: 'Venta guardada',
        text: xhr.responseText
      }).then(() => {
        // Cierra la ventana modal y recarga la página
        modalAgregarVenta.style.display = 'none';
        location.reload();
      });
    }
  };
  xhr.send('Servicio=' + encodeURIComponent(Servicio) + '&Cliente=' + encodeURIComponent(Cliente) + '&Mascota=' + encodeURIComponent(Mascota) + '&Precio=' + encodeURIComponent(Precio));
});
