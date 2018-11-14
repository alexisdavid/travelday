<?php 


 require_once "../controladores/rutas.controlador.php";
require_once "../modelos/rutas.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";


class TablaRutas{

 	/*=============================================
 	 MOSTRAR LA TABLA DE BARCO
  	=============================================*/ 

	public function mostrarTablaRutas(){

		$item = null;
    	$valor = null;

  		$ruta = ControladorRutas::ctrMostrarRutas($item, $valor);	
  	
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($ruta); $i++){

		  	/*=============================================
 	 		TRAEMOS LA IMAGEN
  			=============================================*/ 

		  	$imagen = "<img src='".$ruta[$i]["imagen"]."' width='40px'>";

		  	/*=============================================
 	 		TRAEMOS LA CATEGORÍA
  			=============================================*/ 

		  	$item = "id";
		  	$valor = $ruta[$i]["idCategoria"];

		  	$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

		  

		  	/*=============================================
 	 		TRAEMOS LAS ACCIONES
  			=============================================*/ 

		  	$botones =  "<div class='btn-group'><button class='btn btn-info btnDetallesBarco' idBarco='".$ruta[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='far fa-calendar-plus'></i></button><button class='btn btn-warning btnEditarBarco' idBarco='".$ruta[$i]["id"]."' data-toggle='modal' data-target='#modalEditarBarco'><i class='far fa-edit'></i></button><button class='btn btn-danger btnEliminarBarco' idBarco='".$ruta[$i]["id"]."' codigo='".$ruta[$i]["codigo"]."' imagen='".$ruta[$i]["imagen"]."'><i class='fa fa-times'></i></button></div>"; 

		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$imagen.'",
			      "'.$ruta[$i]["codigo"].'",
			      "'.$ruta[$i]["descripcion"].'",
			      "'.$ruta[$i]["noches"].'",
			      "'.$ruta[$i]["embarque"].'",
			      "'.$ruta[$i]["desembarque"].'",
			      "'.$botones.'"
			    ],';

		  }

		  $datosJson = substr($datosJson, 0, -1);

		 $datosJson .=   '] 

		 }';
		
		echo $datosJson;


	}


}







/*=============================================
ACTIVAR TABLA DE RUTAS
=============================================*/ 
$activarRuta = new TablaRutas();
$activarRuta -> mostrarTablaRutas();
