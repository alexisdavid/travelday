<?php


require_once "conexion.php";

class ModeloBarcos{


	
	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function mdlMostrarBarcos($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	CREAR BARCO
	=============================================*/

	static public function mdlIngresarBarco($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(idCategoria, nombre, compania, pasajeros, construccion, tonelaje, tripulacion, descripcion, velocidad, cubiertas, largo, ancho, imagen) VALUES (:idCategoria, :nombre, :compania, :pasajeros, :construccion, :tonelaje, :tripulacion, :descripcion, :velocidad, :cubiertas, :largo, :ancho, :imagen)");

		$stmt->bindParam(":idCategoria", $datos["idCategoria"], PDO::PARAM_INT);
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
		/*=============================================
	CREAR BARCO
	=============================================*/

	static public function mdlEditarBarco($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET idCategoria = :idCategoria, nombre= :nombre, compania= :compania, pasajeros= :pasajeros, construccion = :construccion, tonelaje = :tonelaje, tripulacion =  :tripulacion, descripcion = :descripcion, velocidad = :velocidad, cubiertas=  :cubiertas, largo = :largo, ancho =  :ancho, imagen = :imagen  WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":idCategoria", $datos["idCategoria"], PDO::PARAM_INT);
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