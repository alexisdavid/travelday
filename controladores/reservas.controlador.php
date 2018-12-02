<?php

class ControladorReservas{



	/*=============================================
	MOSTRAR RESERVAS
	=============================================*/

	static public function ctrMostrarReserva($item, $valor){

		$tabla = "reservas";

		$respuesta = ModeloReservas::mdlMostrarReservas($tabla, $item, $valor);

		return $respuesta;

	}

	static public function ctrCrearReserva(){

		if(isset($_POST["nuevoFolio"])){

			// $adultos = (int)$_POST["cantidadAdultos"];

			if ($_POST["cantidadMenores"]  == "") {

				// $_POST["cantidadMenores"] = 0;
			}

			if(preg_match('/^[0-9]+$/', $_POST["categoriaServicio"]) &&
				preg_match('/^[0-9]+$/', $_POST["nuevoFolio"])){

				$tabla = "reservas";

			   	$datos = array("cProveedor"=>$_POST["nuevaConfirmacion"],
							   "categoria"=>$_POST["categoriaServicio"],
							   "folio"=>$_POST["nuevoFolio"],
					           "id_vendedor"=>$_POST["idVendedor"],
							   "barco"=>$_POST["nombreCrucero"],
							   "imgBarco"=>$_POST["imgBarco"],
								"idRuta"=>$_POST["ruta"],
							   "imgRuta"=>$_POST["imgRuta"],
					           "htmlRuta"=>$_POST["htmlRuta"],
							   "idCliente"=>$_POST["cliente"],
								"adultos"=>$_POST["cantidadAdultos"],
								"menores"=>$_POST["cantidadMenores"],
					           "nombrePasajeros"=>$_POST["listaPasajeros"],
							   "fechaInicio"=>$_POST["fechaInicio"],
							   "fechaFinal"=>$_POST["fechaFinal"],
								"habitacion"=>$_POST["nuevaHabitacion"],
							   "numHabitacion"=>$_POST["nuevoNumeroHabitacion"],
							   "mealPlan"=>$_POST["nuevaComida"],
					           "estatus"=>$_POST["estatus"],
							   "vencimiento"=>$_POST["nuevoVencimiento"],
							   "comentarios"=>$_POST["comentarios"]);
			  
			   	// foreach ($datos as $key => $value) {
			   	// 	var_dump($value);

			   	// }
			   	$respuesta = ModeloReservas::mdlIngresarReserva($tabla, $datos);
			   	// var_dump($respuesta);

			   	if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "La reserva ha sido guardado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "reservas-crucero";

										}
									})

						</script>';

				}
					}else{

							echo'<script>

						  swal({
						  type: "error",
						  title: "¡La reserva no puede ir con los campos vacíos o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "reservas-crucero";

							}
						})

			  	</script>';
			}
			

		}


	}




}