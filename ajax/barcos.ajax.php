
<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class AjaxBarco{

	 /*=============================================
  GENERAR CÓDIGO A PARTIR DE ID CATEGORIA
  =============================================*/
  public $idCategoria;

  public function ajaxCrearCodigoBarco(){

  	$item = "id_categoria";
  	$valor = $this->idCategoria;

  	$respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);

  	echo json_encode($respuesta);

  }

}








/*=============================================
GENERAR CÓDIGO A PARTIR DE ID CATEGORIA
=============================================*/	

if(isset($_POST["idCategoria"])){

	$codigoBarco = new AjaxBarco();
	$codigoBarco -> idCategoria = $_POST["idCategoria"];
	$codigoBarco -> ajaxCrearCodigoBarco();

}