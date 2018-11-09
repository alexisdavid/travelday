<?php

class ControladorBarcos{



	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function ctrMostrarBarcos($item, $valor){

		$tabla = "barcos";

		$respuesta = ModeloBarcos::mdlMostrarBarcos($tabla, $item, $valor);

		return $respuesta;

	}



	static public function ctrCrearBarco(){

		

		if(isset($_POST["nuevoNombreBarco"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombreBarco"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCompania"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaDescripcion"])){

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/

			   	$ruta = "vistas/img/productos/default/anonymous.png";

			   
				if(isset($_FILES["nuevaImagenBarco"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["nuevaImagenBarco"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "vistas/img/productos/".$_POST["nuevoNombreBarco"];

					mkdir($directorio, 0755);

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["nuevaImagenBarco"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/productos/".$_POST["nuevoNombreBarco"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevaImagenBarco"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["nuevaImagenBarco"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/productos/".$_POST["nuevoNombreBarco"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["nuevaImagenBarco"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

			

				$tabla = "barcos";

				$datos = array("idCategoria" => $_POST["nuevaCategoria"],
							   "nombre" => $_POST["nuevoNombreBarco"],
							   "compania" => $_POST["nuevaCompania"],
							   "pasajeros" => $_POST["nuevosPasajeros"],
							   "construccion" => $_POST["nuevaConstruccion"],
							   "tonelaje" => $_POST["nuevoTonelaje"],
							   "tripulacion" => $_POST["nuevaTripulacion"],
							   "descripcion" => $_POST["nuevaDescripcion"],
							   "velocidad" => $_POST["nuevaVelocidad"],
							   "cubiertas" => $_POST["nuevaCubiertas"],
							   "largo" => $_POST["nuevoLargo"],
							   "ancho" => $_POST["nuevoAncho"],
							   "imagen" => $ruta);

				$respuesta = ModeloBarcos::mdlIngresarBarco($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "El Barco ha sido guardado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "barcos";

										}
									})

						</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El Barco no puede ir con los campos vacíos o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "barcos";

							}
						})

			  	</script>';
			}
		}

	}

}