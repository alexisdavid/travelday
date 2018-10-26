
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


	var datos = new FormData();
    datos.append("idEmpleado", idEmpleado);

    $.ajax({

      url:"ajax/empleados.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

      	console.log(respuesta);
      
      
      	   $("#idEmpleado").val(respuesta["id"]);
	       $("#editarEmpleado").val(respuesta["nombre"]);
	       $("#editarDob").val(respuesta["dob"]);
	       $("#editarNacionalidad").val(respuesta["nacionalidad"]);
	       $("#editarEmail").val(respuesta["email"]);
	       $("#editarEmailPersonal").val(respuesta["emailpersonal"]);
           $("#editarTelefono").val(respuesta["telefono"]);
           $("#editarTelefonoPersonal").val(respuesta["telefono2"]);
            $("#editarExtencion").val(respuesta["extencion"]);
	       $("#editarArea").val(respuesta["area"]);
	       $("#editarPuesto").val(respuesta["puesto"]);
	       $("#editarDni").val(respuesta["dni"]);
	       $("#editarFolioDni").val(respuesta["folio_dni"]);
	       $("#editarPais").val(respuesta["pais"]);
           $("#editarDireccion").val(respuesta["direccion"]);
           $("#editarCodigo").val(respuesta["cp"]);
           $("#editarEstado").val(respuesta["estatus"]);
           
	  }

  	})

})
