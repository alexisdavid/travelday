<?php

require_once "../controladores/barcos.controlador.php";
require_once "../modelos/barcos.modelo.php";

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";


class TablaBarco{

 	/*=============================================
 	 MOSTRAR LA TABLA DE BARCO
  	=============================================*/ 

	public function mostrarTablaBarco(){

		$item = null;
    	$valor = null;

  		$barco = ControladorBarcos::ctrMostrarBarcos($item, $valor);	
  	
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($barco); $i++){

		  	$imagen = "<img src='".$barco[$i]["imagen"]."' width='40px'>";

		  	
		  	$item = "id";
		  	$valor = $barco[$i]["idCategoria"];

		  	$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

		  
  			if(isset($_GET["perfilOculto"]) && $_GET["perfilOculto"] == "Especial"){

		  	$botones =  "<div class='btn-group'><button class='btn btn-info btnDetallesBarco' idBarco='".$barco[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='far fa-calendar-plus'></i></button><button class='btn btn-warning btnEditarBarco' idBarco='".$barco[$i]["id"]."' data-toggle='modal' data-target='#modalEditarBarco'><i class='far fa-edit'></i></button>"; 


		  }else{ 

		  	$botones =  "<div class='btn-group'><button class='btn btn-info btnDetallesBarco' idBarco='".$barco[$i]["id"]."' data-toggle='modal' data-target='#modalEditarProducto'><i class='far fa-calendar-plus'></i></button><button class='btn btn-warning btnEditarBarco' idBarco='".$barco[$i]["id"]."' data-toggle='modal' data-target='#modalEditarBarco'><i class='far fa-edit'></i></button><button class='btn btn-danger btnEliminarBarco' idBarco='".$barco[$i]["id"]."' codigo='".$barco[$i]["codigo"]."' imagen='".$barco[$i]["imagen"]."'><i class='fa fa-times'></i></button></div>"; 

		  		}
		  	$datosJson .='[
			      "'.($i+1).'",
			      "'.$imagen.'",
			      "'.$barco[$i]["nombre"].'",
			      "'.$barco[$i]["compania"].'",
			      "'.$barco[$i]["tripulacion"].'",
			      "'.$barco[$i]["descripcion"].'",
			      "'.$barco[$i]["velocidad"].'",
			      "'.$barco[$i]["cubiertas"].'",
			      "'.$barco[$i]["largo"].'",
			      "'.$barco[$i]["codigo"].'",
			      "'.$botones.'"
			    ],';

		  }

		  $datosJson = substr($datosJson, 0, -1);

		 $datosJson .=   '] 

		 }';
		
		echo $datosJson;


	}


}
$activarBarco = new TablaBarco();
$activarBarco -> mostrarTablaBarco();

