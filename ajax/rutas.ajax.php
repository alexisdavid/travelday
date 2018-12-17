<?php
require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";
require_once "../controladores/rutas.controlador.php";
require_once "../modelos/rutas.modelo.php";
class AjaxRuta{


  public $idCategoria;

  public function ajaxCrearCodigoRuta(){

    $item = "idCategoria";

    $valor = $this->idCategoria;

    $respuesta = ControladorRutas::ctrMostrarRutas($item, $valor);
    echo json_encode($respuesta);
  }


  public $idRuta;

  public function ajaxEditarRuta(){

    $item = "id";
    $valor = $this->idRuta;

    $respuesta = ControladorRutas::ctrMostrarRutas($item, $valor);

    echo json_encode($respuesta);

  }


} if(isset($_POST["idCategoria"])){
  $codigoRuta = new AjaxRuta();
  $codigoRuta -> idCategoria = $_POST["idCategoria"];
  $codigoRuta -> ajaxCrearCodigoRuta();
}
if(isset($_POST["idRuta"])){

  $editarRuta = new AjaxRuta();
  $editarRuta -> idRuta = $_POST["idRuta"];
  $editarRuta -> ajaxEditarRuta();

}
