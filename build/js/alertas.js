function eliminarRegistro(codigo) {
    Swal.fire({
        title: '<h6>¿Estás seguro de eliminar este usuario?</h6>',
        text: 'Esta acción no se puede deshacer',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Eliminar'
      }).then((result) => {
        if (result.isConfirmed) {
          mandar_php(codigo)
        }
      })
}

function mandar_php(codigo) {
    parametros = { id: codigo};
    $.ajax({
        data: parametros,
        url: "../administrador/eliminar.php",
        type: "POST",
        beforeSend: function () {},
        success: function () {
            Swal.fire('Eliminado!', 'Este usuario ha sido eliminado correctamente', 'success').then((result) =>{
                window.location.href = "../administrador/clientes.php"
            });
        },
    });
}



