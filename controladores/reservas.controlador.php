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
	/*=============================================
	CREAR RESERVAS
	=============================================*/

	static public function ctrCrearReserva(){

		if(isset($_POST["nuevoFolio"])){

			

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
							   "costo"=>$_POST["nuevoTotalReserva"],
							   "metodoPago"=>$_POST["nuevoMetodoPago"],
							   "codigo"=>$_POST["nuevoCodigoTransaccion"],
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

										window.location = "administrarReservas";

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

							window.location = "administrarReservas";

							}
						})

			  	</script>';
			}
			

		}


	}

	/*=============================================
	EDITAR RESERVAS
	=============================================*/
	static public function ctrEditarReserva(){

		if(isset($_POST["EditarnuevoFolio"])){

			

			if(preg_match('/^[0-9]+$/', $_POST["editarCategoriaServicio"]) &&
				preg_match('/^[0-9]+$/', $_POST["EditarnuevoFolio"])){

				$tabla = "reservas";

			   	$datos = array("cProveedor"=>$_POST["editarConfirmacion"],
							   "categoria"=>$_POST["editarCategoriaServicio"],
							   "folio"=>$_POST["EditarnuevoFolio"],
					           "id_vendedor"=>$_POST["idVendedor"],
							   "barco"=>$_POST["editarNombreCrucero"],
							   "imgBarco"=>$_POST["imgBarco"],
								"idRuta"=>$_POST["editarRuta"],
							   "imgRuta"=>$_POST["imgRuta"],
					           "htmlRuta"=>$_POST["editarDatos"],
							   "idCliente"=>$_POST["editarCliente"],
								"adultos"=>$_POST["cantidadAdultos"],
								"menores"=>$_POST["cantidadMenores"],
					           "nombrePasajeros"=>$_POST["listaPasajeros"],
							   "fechaInicio"=>$_POST["editarFechaInicio"],
							   "fechaFinal"=>$_POST["editarFechaFinal"],
								"habitacion"=>$_POST["editarHabitacion"],
							   "numHabitacion"=>$_POST["editarNumeroHabitacion"],
							   "mealPlan"=>$_POST["editarComida"],
					           "estatus"=>$_POST["editarEstatus"],
							   "vencimiento"=>$_POST["editarVencimiento"],
							   "costo"=>$_POST["editarTotalReserva"],
							   "metodoPago"=>$_POST["editarMetodoPago"],
							   "codigo"=>$_POST["editarCodigoTransaccion"],
							   "comentarios"=>$_POST["comentarios"]);

			   	
			  
			    	
			   	$respuesta = ModeloReservas::mdlEditarReserva($tabla, $datos);
			   	// var_dump($respuesta);

			   	if($respuesta == "ok"){

					echo'<script>

						swal({
							  type: "success",
							  title: "La reserva ha sido editada correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "administrarReservas";

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

							window.location = "administrarReservas";

							}
						})

			  	</script>';
			 }
			

		}



	}



}