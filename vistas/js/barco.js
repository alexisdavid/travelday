/*=============================================
CAPTURANDO LA CATEGORIA PARA ASIGNAR CÓDIGO
=============================================*/
$("#nuevaCategoria").change(function(){

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

        if(!respuesta){

          var nuevoCodigo = idCategoria+"01";
          $("#nuevoCodigo").val(nuevoCodigo);

        }else{

          var nuevoCodigo = Number(respuesta["codigo"]) + 1;
            $("#nuevoCodigo").val(nuevoCodigo);

        }
                
      }

    })

})
/*=============================================
SUBIENDO LA FOTO DEL CRUCERO
=============================================*/
$(".nuevaImagenBarco").change(function(){

	var imagen = this.files[0];
	
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