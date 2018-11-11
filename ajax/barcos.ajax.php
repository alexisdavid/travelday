<?php
require_once "../controladores/barcos.controlador.php";
require_once "../modelos/barcos.modelo.php";
require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";
class AjaxBarco{




   /*=============================================
  GENERAR CÓDIGO A PARTIR DE ID CATEGORIA
  =============================================*/
  public $idCategoria;

  public function ajaxCrearCodigoBarco(){

    $item = "idCategoria";

    $valor = $this->idCategoria;

    $respuesta = ControladorBarcos::ctrMostrarBarcos($item, $valor);
    echo json_encode($respuesta);
  }


    /*=============================================
  EDITAR PRODUCTO
  =============================================*/ 

  public $idBarco;

  public function ajaxEditarBarcos(){

    $item = "id";
    $valor = $this->idBarco;

    $respuesta = ControladorBarcos::ctrMostrarBarcos($item, $valor);

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


/*=============================================
EDITAR BARCO
=============================================*/ 

if(isset($_POST["idBarco"])){

  $editarBarco = new AjaxBarco();
  $editarBarco -> idBarco = $_POST["idBarco"];
  $editarBarco -> ajaxEditarBarcos();

}