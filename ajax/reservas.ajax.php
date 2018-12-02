<?php

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";
require_once "../controladores/reservas.controlador.php";
require_once "../modelos/reservas.modelo.php";

class AjaxReserva{
	 /*=============================================
  GENERAR CÓDIGO A PARTIR DE ID CATEGORIA
  =============================================*/
  public $idCategoria;

  public function ajaxCrearCodigoReserva(){

    $item = "Categoria";

    $valor = $this->idCategoria;

    $respuesta = ControladorReservas::ctrMostrarReserva($item, $valor);
    echo json_encode($respuesta);
  }

}





/*=============================================
GENERAR CÓDIGO A PARTIR DE ID CATEGORIA
=============================================*/ 
if(isset($_POST["idCategoria"])){
  $codigoBarco = new AjaxReserva();
  $codigoBarco -> idCategoria = $_POST["idCategoria"];
  $codigoBarco -> ajaxCrearCodigoReserva();
}

