<?php

class ControladorRutas{

	/*=============================================
	MOSTRAR RUTAS
	=============================================*/

	static public function ctrMostrarRutas($item, $valor){

		$tabla = "rutas";

		$respuesta = ModeloRutas::mdlMostrarRutas($tabla, $item, $valor);

		return $respuesta;

	}






	/*=============================================
	CREAR PRODUCTO
	=============================================*/

	static public function ctrCrearRuta(){

		if(isset($_POST["nuevaDescripcion"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaDescripcion"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevasNoches"]) &&
			   preg_match('/^[0-9]+$/', $_POST["nuevoCodigoRuta"]) &&	
			   preg_match('/^[0-9.]+$/', $_POST["nuevosPuertos"])){

		   	
				/*=============================================
				VALIDAR IMAGEN
				=============================================*/

			   	$ruta = "vistas/img/productos/default/anonymous.png";

			   
				if(isset($_FILES["nuevaImagen"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["nuevaImagen"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "vistas/img/rutas/".$_POST["nuevoCodigoRuta"];

					mkdir($directorio, 0755);

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["nuevaImagen"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/rutas/".$_POST["nuevoCodigoRuta"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevaImagen"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["nuevaImagen"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/rutas/".$_POST["nuevoCodigoRuta"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["nuevaImagen"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}


				$tabla = "rutas";

				$datos = array("idCategoria" => $_POST["nuevaCategoria"],
							   "codigo" => $_POST["nuevoCodigoRuta"],
							   "descripcion" => $_POST["nuevaDescripcion"],
							   "noches" => $_POST["nuevasNoches"],
							   "puertos" => $_POST["nuevosPuertos"],
							   "embarque" => $_POST["nuevoEmbarque"],
							   "desembarque" => $_POST["nuevoDesembaque"],
							   "html" => $_POST["nuevoHtml"],
							   "imagen" => $ruta);

				$respuesta = ModeloRutas::mdlIngresarRuta($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "La ruta ha sido guardado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "rutas";

										}
									})

						</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La ruta no puede ir con los campos vacíos o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "rutas";

							}
						})

			  	</script>';
			}
		}

	}


}