$('.tablaBarcos').DataTable( {
    "ajax": "ajax/datatable-barcos.ajax.php",
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
$("#nuevaCategoriaBarco").change(function(){

  var idCategoria = $(this).val();

  var datos = new FormData();
    datos.append("idCategoria", idCategoria);

    $.ajax({

      url:"ajax/barcos.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
        // console.log(respuesta);

        if(!respuesta){

          var nuevoCodigo = idCategoria+"01";
          $("#nuevoCodigoBarco").val(nuevoCodigo);

        }else{

          var nuevoCodigo = Number(respuesta["codigo"]) + 1;
            $("#nuevoCodigoBarco").val(nuevoCodigo);

        }
                
      }

    })

})

/*=============================================
SUBIENDO LA FOTO DEL CRUCERO
=============================================*/
$(".nuevaImagenBarco").change(function(){

  var imagen = this.files[0];
  // var imagen = this.files
  // console.log(imagen);
  
  /*=============================================
    VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
    =============================================*/

    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

      $(".nuevaImagenBarco").val("");

       swal({
          title: "Error al subir la imagen",
          text: "¡La imagen debe estar en formato JPG o PNG!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });

    }else if(imagen["size"] > 2000000){

      $(".nuevaImagenBarco").val("");

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

$(".tablaBarcos").on("click", ".btnDetallesBarco", function(){

  var idBarco = $(this).attr("idBarco");
   console.log(idBarco);

  window.open("extensiones/tcpdf/pdf/crucero.php?id="+idBarco, "_blank");

})


/*=============================================
EDITAR BARCO
=============================================*/

$(".tablaBarcos tbody").on("click", "button.btnEditarBarco", function(){

  var idBarco = $(this).attr("idBarco");
  // console.log(idBarco);
  
  var datos = new FormData();
    datos.append("idBarco", idBarco);

     $.ajax({

      url:"ajax/barcos.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
          // console.log(respuesta);

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
                // console.log(respuesta);
                  
                  $("#editarCategoriaBarco").val(respuesta["id"]);
                  $("#editarCategoriaBarco").html(respuesta["categoria"]);

              }

          })

           $("#editarNombreBarco").val(respuesta["nombre"]);
            $('#editarCodigoBarco').val(respuesta["codigo"]);
           $("#idBarco").val(respuesta["id"]);
           $("#editarDescripcion").val(respuesta["descripcion"]);
           $('#editarCompania').val(respuesta["compania"]);
            $('#editarPasajeros').val(respuesta["pasajeros"]);
             $('#editarConstruccion').val(respuesta["construccion"]);
              $('#editarTonelaje').val(respuesta["tonelaje"]);
               $('#editarTripulacion').val(respuesta["tripulacion"]);
                $('#editarVelocidad').val(respuesta["velocidad"]);
              $('#editarCubiertas').val(respuesta["cubiertas"]);
              $('#editarLargo').val(respuesta["largo"]);
               $('#editarAncho').val(respuesta["ancho"]);

           if(respuesta["imagen"] != ""){

            $("#imagenActual").val(respuesta["imagen"]);

            $(".previsualizar").attr("src",  respuesta["imagen"]);

           }
          
        

      }

  })

})

/*=============================================
ELIMINAR PRODUCTO
=============================================*/

$(".tablaBarcos tbody").on("click", "button.btnEliminarBarco", function(){

  var idBarco = $(this).attr("idBarco");
  var codigo = $(this).attr("codigo");
  var imagen = $(this).attr("imagen");
  
  swal({

    title: '¿Está seguro de borrar el barco?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar barco!'
        }).then(function(result){
        if (result.value) {

          window.location = "index.php?ruta=barcos&idBarco="+idBarco+"&imagen="+imagen+"&codigo="+codigo;

        }


  })

})