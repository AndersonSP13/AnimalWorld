document.addEventListener('DOMContentLoaded', function() {
    let calendarEl = document.getElementById('calendar');
  
    let calendar = new FullCalendar.Calendar(calendarEl, {
      timeZone: 'UTC',
      initialView: 'dayGridMonth',
      events: 'cargar_eventos.php',
      locale: 'es',
      buttonText: {
        today: 'Hoy',
        month: 'Mes',
        week: 'Semana',
        day: 'Día',
        list: 'Agenda'
      },
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      editable: true,
      initialDate: '2023-06-15',
      // Evento al hacer clic en un día
      dateClick: function(info) {
        // Abre la ventana modal
        let modal = document.getElementById('myModal');
        modal.style.display = 'block';
      },
    
      eventClick: function(info) {
          // Se ejecuta al hacer clic en un evento
          Swal.fire({
              title: '¿Estás seguro?',
              text: 'Este agendamiento será eliminado.',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Sí, eliminar',
              cancelButtonText: 'Cancelar'
          }).then((result) => {
              if (result.isConfirmed) {
                  // Realizar solicitud para eliminar el evento de la base de datos
                  axios.delete('cargar_eventos.php', { data: { eventId: info.event.id } })
                      .then(response => {
                          // Eliminar el evento del calendario
                          info.event.remove();
  
                          // Mostrar mensaje de eliminación exitosa
                          Swal.fire(
                              '¡Eliminado!',
                              'El agendamiento ha sido eliminado.',
                              'success'
                          );
                      })
                      .catch(error => {
                          // Mostrar mensaje de error en caso de que falle la eliminación
                          Swal.fire(
                              'Error',
                              'Ha ocurrido un error al eliminar el agendamiento.',
                              'error'
                          );
                      });
              }
          });
      }
  });
  
     

    
    
    calendar.today(); // Mostrar el mes actual
    calendar.render();
  });
  

    // cerrar ventana modal
    var modal = document.getElementById("myModal");
    var cerrarModalBtn = document.getElementById("cerrarModal");
  
    // Agregar un evento click al botón de cerrar modal
    cerrarModalBtn.addEventListener("click", function() {
      cerrarModal();
    });
  
    // Agregar un evento click al documento
    document.addEventListener("click", function(event) {
      if (event.target === modal) {
        cerrarModal();
      }
    });
  
    // Función para cerrar la ventana modal
    function cerrarModal() {
      modal.style.display = "none";
    }



  // Mostrar Color
  function mostrarColores() {
    var input = document.getElementById('Color');
    var datalist = document.getElementById('colores');
  
    input.value = ''; // Clear the input field before showing the color picker
  
    input.addEventListener('input', function() {
      // If the user enters text, check if it matches any color option and set the value accordingly
      var enteredValue = input.value.toLowerCase();
      var options = datalist.getElementsByTagName('option');
      for (var i = 0; i < options.length; i++) {
        var optionValue = options[i].getAttribute('value').toLowerCase();
        if (enteredValue === optionValue) {
          input.value = options[i].getAttribute('value');
          return;
        }
      }
    });
  
    input.click(); // Open the color picker by simulating a click event on the input
  }
  