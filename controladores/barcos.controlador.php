<?php

class ControladorBarcos{



	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function ctrMostrarBarcos($item, $valor){

		$tabla = "productos";

		$respuesta = ModeloBarcos::mdlMostrarBarcos($tabla, $item, $valor);

		return $respuesta;

	}



	static public function ctrCrearBarco(){

		if(isset($_POST["nuevoNombreBarco"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombreBarco"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCompania"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaDescripcion"])){

					$ruta = "vistas/img/productos/default/anonymous.png";

				$tabla = "barcos";

				$datos = array("idCategoria" => $_POST["nuevaCategoria"],
							   "codigo" => $_POST["nuevoCodigoBarco"],
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
							  title: "El producto ha sido guardado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "productos";

										}
									})

						</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El producto no puede ir con los campos vacíos o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "productos";

							}
						})

			  	</script>';
			}
		}

	}

}