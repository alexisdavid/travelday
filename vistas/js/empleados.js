
/*=============================================
IMPRIMIR DATOS EMPLEADOS
=============================================*/

$(".tablas").on("click", ".btnDetalles", function(){

  var idEmpleado = $(this).attr("idEmpleado");

  window.open("extensiones/tcpdf/pdf/empleado.php?id="+idEmpleado, "_blank");

})

/*=============================================
EDITAR CLIENTE
=============================================*/
$(".tablas").on("click", ".btnEditarEmpleado", function(){

	var idEmpleado = $(this).attr("idEmpleado");
	console.log(idEmpleado);


	// var datos = new FormData();
 //    datos.append("idCliente", idCliente);

 //    $.ajax({

 //      url:"ajax/clientes.ajax.php",
 //      method: "POST",
 //      data: datos,
 //      cache: false,
 //      contentType: false,
 //      processData: false,
 //      dataType:"json",
 //      success:function(respuesta){
      
 //      	   $("#idCliente").val(respuesta["id"]);
	//        $("#editarCliente").val(respuesta["nombre"]);
	//        $("#editarDocumentoId").val(respuesta["documento"]);
	//        $("#editarEmail").val(respuesta["email"]);
	//        $("#editarTelefono").val(respuesta["telefono"]);
	//        $("#editarDireccion").val(respuesta["direccion"]);
 //           $("#editarFechaNacimiento").val(respuesta["fecha_nacimiento"]);
	//   }

 //  	})

})