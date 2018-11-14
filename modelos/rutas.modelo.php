<?php


require_once "conexion.php";

class ModeloRutas{


	/*=============================================
	MOSTRAR RUTAS
	=============================================*/

	static public function mdlMostrarRutas($tabla, $item, $valor){

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
	CREAR RUTAS
	=============================================*/

	static public function mdlIngresarRuta($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(idCategoria, codigo, descripcion, noches, puertos, embarque, desembarque, html, imagen) VALUES (:idCategoria, :codigo, :descripcion, :noches, :puertos, :embarque, :desembarque,:html, :imagen)");

		$stmt->bindParam(":idCategoria", $datos["idCategoria"], PDO::PARAM_INT);
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":noches", $datos["noches"], PDO::PARAM_INT);
		$stmt->bindParam(":puertos", $datos["puertos"], PDO::PARAM_INT);
		$stmt->bindParam(":embarque", $datos["embarque"], PDO::PARAM_STR);
		$stmt->bindParam(":desembarque", $datos["desembarque"], PDO::PARAM_STR);
		$stmt->bindParam(":html", $datos["html"], PDO::PARAM_STR);
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