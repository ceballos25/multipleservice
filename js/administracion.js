$(document).ready(function () {
   // Agrega un evento clic a todas las filas de la tabla
   $(".btnEditar").on('click', function(){
       // Obtiene los datos de la fila clicada
       var fila = $(this).closest('tr');
       var idUsuario = fila.find('td:eq(0)').text();
       var nombreUsuario = fila.find('td:eq(1)').text();
       var correoUsuario = fila.find('td:eq(2)').text();
       var generoUsuario = fila.find('td:eq(3)').text();
       var fechaNacimiento = fila.find('td:eq(4)').text();                   
 
       // Configura el contenido del modal con los datos de la fila
       $('#idUsuario').val(idUsuario);
       $('#nombreUsuario').val(nombreUsuario);
       $('#correoUsuario').val(correoUsuario);
       $('#generoUsuario').val(generoUsuario);
       $('#fechaNacimiento').val(fechaNacimiento);
 
       // Abre el modal
       $('#modalMiCuenta').modal('show');
   });
});

//Funcion para, mostrar el modal, y enviarle los datos para eliminar
$(document).ready(function () {
    // Agrega un evento clic a todas las filas de la tabla
    $(".btneliminar").on('click', function(){
    // Obtiene los datos de la fila clicada

    $('#tablaMiCuenta tbody tr', function () {
       var idUsuarioEliminar = $(this).find('td:eq(0)').text();                   
  
    // Configura el contenido del modal con los datos de la fila
        $('#idUsuarioEliminar').val(idUsuarioEliminar);


       // Abre el modal
       $('#modalEliminarCuenta').modal('show');
    });
 });
});