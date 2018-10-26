<?php

class ControladorEmpleado{

	static public function ctrCrearEmpleado(){

		if(isset($_POST["nuevoEmpleado"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoEmpleado"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmail"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmailPersonal"])){

			   	$tabla = "empleados";

			   $datos = array("nombre"=>$_POST["nuevoEmpleado"],
					           "dob"=>$_POST["nuevoDob"],
					           "nacionalidad"=>$_POST["nuevaNacionalidad"],
					           "email"=>$_POST["nuevoEmail"],
					           "emailpersonal"=>$_POST["nuevoEmailPersonal"],
					           "telefono"=>$_POST["nuevoTelefono"],
					           "telefono2"=>$_POST["nuevoTelefonoPersonal"],
					           "extencion"=>$_POST["nuevaExtencion"],
					           "area"=>$_POST["nuevaArea"],
					           "puesto"=>$_POST["nuevoPuesto"],
					           "dni"=>$_POST["nuevoDni"],
					            "folio_dni"=>$_POST["nuevoFolioDni"],
					            "pais"=>$_POST["nuevoPais"],
					           "direccion"=>$_POST["nuevaDireccion"],
					           "cp"=>$_POST["nuevoCodigo"]);


			   	$respuesta = ModeloEmpleados::mdlIngresarEmpleado($tabla, $datos);
			   	

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El cliente ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "empleados";

									}
								})

					</script>';

				}else{
					echo'<script>

					swal({
						  type: "error",
						  title: "Error interno favor de reportar al administrador.",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "empleados";

									}
								})

					</script>';
				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El cliente no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "empleados";

							}
						})

			  	</script>';



			}




		}


	}

	/*=============================================
	MOSTRAR EMPLEADOS
	=============================================*/

	static public function ctrMostrarEmpleado($item, $valor){

		$tabla = "empleados";

		$respuesta = ModeloEmpleados::mdlMostrarEmpleados($tabla, $item, $valor);

		return $respuesta;
	
	}
	/*=============================================
	EDITAR MPLEADOS
	=============================================*/

	static public function ctrEditarEmpleado(){

		if(isset($_POST["editarEmpleado"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarEmpleado"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["editarEmail"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["editarEmailPersonal"])){

			   	$tabla = "empleados";
			   

			   $datos = array("id"=>$_POST["idEmpleado"],
			   				  "nombre"=>$_POST["editarEmpleado"],
					           "dob"=>$_POST["editarDob"],
					           "nacionalidad"=>$_POST["editarNacionalidad"],
					           "email"=>$_POST["editarEmail"],
					           "emailpersonal"=>$_POST["editarEmailPersonal"],
					           "telefono"=>$_POST["editarTelefono"],
					           "telefono2"=>$_POST["editarTelefonoPersonal"],
					           "extencion"=>$_POST["editarExtencion"],
					           "area"=>$_POST["editarArea"],
					           "puesto"=>$_POST["editarPuesto"],
					           "dni"=>$_POST["editarDni"],
					            "folio_dni"=>$_POST["editarFolioDni"],
					            "pais"=>$_POST["editarPais"],
					           "direccion"=>$_POST["editarDireccion"],
					           "cp"=>$_POST["editarCodigo"]);


			   	$respuesta = ModeloEmpleados::mdlEditarEmpleado($tabla, $datos);
			 

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El cliente ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "empleados";

									}
								})

					</script>';

				}else{
					echo'<script>

					swal({
						  type: "error",
						  title: "Error interno favor de reportar al administrador.",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "empleados";

									}
								})

					</script>';
				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El cliente no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "empleados";

							}
						})

			  	</script>';



			}




		}


	}
	



}