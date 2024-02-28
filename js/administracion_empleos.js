//inicializacion del tootip
 //inicialización del tootip, se debe incluir popper o boostrap bundle que ya lo tiene
 var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
 var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
 return new bootstrap.Tooltip(tooltipTriggerEl)
 })

$(document).ready(function () {
   // Agrega un evento clic a todas las filas de la tabla
   $(".btnAprobar").on('click', function(){
       // Obtiene los datos de la fila clicada
       var fila = $(this).closest('tr');
       var idEmpleo = fila.find('td:eq(0)').text();
       var nombreEmpleo = fila.find('td:eq(1)').text();
 
       // Configura el contenido del modal con los datos de la fila
       $('#idEmpleo').val(idEmpleo);
       $('#nombreEmpleo').val(nombreEmpleo);

       // Abre el modal
       $('#modalAprobar').modal('show');
   });
});

$(document).ready(function () {
   // Agrega un evento clic a todas las filas de la tabla
   $(".btnRechazar").on('click', function(){
       // Obtiene los datos de la fila clicada
       var fila = $(this).closest('tr');
       var idEmpleoRechazar = fila.find('td:eq(0)').text();
       var nombreEmpleoRechazar = fila.find('td:eq(1)').text();
 
       // Configura el contenido del modal con los datos de la fila
       $('#idEmpleoRechazar').val(idEmpleoRechazar);
       $('#nombreEmpleoRechazar').val(nombreEmpleoRechazar);

       // Abre el modal
       $('#modalRechazar').modal('show');
   });
});