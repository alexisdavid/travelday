/*=============================================
IMPRIMIR DATOS RESERVA
=============================================*/

$(".tablas").on("click", ".imprimirReserva", function(){

  var idReserva = $(this).attr("idReserva");


  window.open("extensiones/tcpdf/pdf/reservas.php?id="+idReserva, "_blank");

})
