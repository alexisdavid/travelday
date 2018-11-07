<?php

require_once "conexion.php";

class ModeloBarcos{

	/*=============================================
	CREAR CATEGORIA
	=============================================*/

	static public function mdlIngresarBarco($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(idCategoria, codigo, nombre, compania, pasajeros, construccion, tonelaje, tripulacion, descripcion, velocidad, cubiertas, largo, ancho, imagen) VALUES (:idCategoria, :codigo, :nombre, :compania, :pasajeros, :construccion, :tonelaje, :tripulacion, :descripcion, :velocidad, :cubiertas, :largo, :ancho, :imagen)");

		$stmt->bindParam(":idCategoria", $datos["idCategoria"], PDO::PARAM_INT);
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":compania", $datos["compania"], PDO::PARAM_STR);
		$stmt->bindParam(":pasajeros", $datos["pasajeros"], PDO::PARAM_INT);
		$stmt->bindParam(":construccion", $datos["construccion"], PDO::PARAM_INT);
		$stmt->bindParam(":tonelaje", $datos["tonelaje"], PDO::PARAM_INT);
		$stmt->bindParam(":tripulacion", $datos["tripulacion"], PDO::PARAM_INT);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":velocidad", $datos["velocidad"], PDO::PARAM_STR);
		$stmt->bindParam(":cubiertas", $datos["cubiertas"], PDO::PARAM_INT);
		$stmt->bindParam(":largo", $datos["largo"], PDO::PARAM_INT);
		$stmt->bindParam(":ancho", $datos["ancho"], PDO::PARAM_INT);
		$stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

}