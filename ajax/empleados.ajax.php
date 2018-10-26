<?php

require_once "../controladores/empleados.controlador.php";
require_once "../modelos/empleados.modelo.php";

class AjaxEmpleados{

	/*=============================================
	EDITAR EMPLEADO
	=============================================*/	

	public $idEmpleado;

	public function ajaxEditarEmpleado(){

		$item = "id";
		$valor = $this->idEmpleado;

		$respuesta = ControladorEmpleado::ctrMostrarEmpleado($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EDITAR EMPLEADO
=============================================*/	

if(isset($_POST["idEmpleado"])){

	$cliente = new AjaxEmpleados();
	$cliente -> idEmpleado = $_POST["idEmpleado"];
	$cliente -> ajaxEditarEmpleado();

}