$('.tablaRutas').DataTable( {
    "ajax": "ajax/datatable-rutas.ajax.php",
    "deferRender": true,
	"retrieve": true,
	"processing": true,
	 "language": {

			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
			"sFirst":    "Primero",
			"sLast":     "Último",
			"sNext":     "Siguiente",
			"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}

	}

} );

/*=============================================
CAPTURANDO LA CATEGORIA PARA ASIGNAR CÓDIGO
=============================================*/
$("#nuevaCategoria").change(function(){

	var idCategoria = $(this).val();

	var datos = new FormData();
  	datos.append("idCategoria", idCategoria);

  	$.ajax({

      url:"ajax/rutas.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      	// console.log(respuesta);

      	if(!respuesta){

      		var nuevoCodigoRuta = idCategoria+"01";
      		$("#nuevoCodigoRuta").val(nuevoCodigoRuta);

      	}else{

      		var nuevoCodigoRuta = Number(respuesta["codigo"]) + 1;
          	$("#nuevoCodigoRuta").val(nuevoCodigoRuta);

      	}
                
      }

  	})

})



/*=============================================
SUBIENDO LA FOTO DEL CRUCERO
=============================================*/
$(".nuevaImagenRuta").change(function(){

  var imagen = this.files[0];
  // var imagen = this.files
  // console.log(imagen);
  
  /*=============================================
    VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
    =============================================*/

    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

      $(".nuevaImagenRuta").val("");

       swal({
          title: "Error al subir la imagen",
          text: "¡La imagen debe estar en formato JPG o PNG!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });

    }else if(imagen["size"] > 2000000){

      $(".nuevaImagenRuta").val("");

       swal({
          title: "Error al subir la imagen",
          text: "¡La imagen no debe pesar más de 2MB!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });

    }else{

      var datosImagen = new FileReader;
      datosImagen.readAsDataURL(imagen);

      $(datosImagen).on("load", function(event){

        var rutaImagen = event.target.result;

        $(".previsualizar").attr("src", rutaImagen);

      })

    }
})

/*=============================================
IMPRIMIR DATOS EMPLEADOS
=============================================*/

$(".tablaRutas").on("click", ".btnDetallesRuta", function(){

  var idRuta = $(this).attr("idRuta");
   console.log(idRuta);

  window.open("extensiones/tcpdf/pdf/ruta.php?idRuta="+idRuta, "_blank");

})

/*=============================================
EDITAR BARCO
=============================================*/

$(".tablaRutas tbody").on("click", "button.btnEditarRuta", function(){

  var idRuta = $(this).attr("idRuta");
  // console.log(idRuta);
  
  var datos = new FormData();
    datos.append("idRuta", idRuta);

     $.ajax({

      url:"ajax/rutas.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
          console.log(respuesta);

          var datosCategoria = new FormData();
          datosCategoria.append("idCategoria",respuesta["idCategoria"]);

           $.ajax({

              url:"ajax/categorias.ajax.php",
              method: "POST",
              data: datosCategoria,
              cache: false,
              contentType: false,
              processData: false,
              dataType:"json",
              success:function(respuesta){
                console.log(respuesta);
                  
                  $("#editarCategoriaRuta").val(respuesta["id"]);
                  $("#editarCategoriaRuta").html(respuesta["categoria"]);

              }

          })

         
            $('#editarCodigoRuta').val(respuesta["codigo"]);
            $("#editarDescripcion").val(respuesta["descripcion"]);
            $('#editarNoches').val(respuesta["noches"]);
           $('#editarPuertos').val(respuesta["puertos"]);
           $('#editarEmbarque').val(respuesta["embarque"]);
           $('#editarDesembaque').val(respuesta["desembarque"]);
          $('#editarHtml').val(respuesta["html"]);
         

           if(respuesta["imagen"] != ""){

            $("#imagenActual").val(respuesta["imagen"]);

            $(".previsualizar").attr("src",  respuesta["imagen"]);

           }
          
        

      }

  })

})

/*=============================================
ELIMINAR RUTA
=============================================*/

$(".tablaRutas tbody").on("click", "button.btnEliminarRuta", function(){

  var idRuta = $(this).attr("idRuta");
  var codigo = $(this).attr("codigo");
  var imagen = $(this).attr("imagen");
  
  swal({

    title: '¿Está seguro de borrar la ruta?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar ruta!'
        }).then(function(result){
        if (result.value) {

          window.location = "index.php?ruta=rutas&idRuta="+idRuta+"&imagen="+imagen+"&codigo="+codigo;

        }


  })

})

