<?php

require_once "conexion.php";

class ModeloReservas{

	/*=============================================
	MOSTRAR RESERVAS
	=============================================*/

	static public function mdlMostrarReservas($tabla, $item, $valor){

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
	REGISTRO DE RESERVA
	=============================================*/
	static public function mdlIngresarReserva($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(cProveedor, categoria, folio, id_vendedor, barco, imgBarco, idRuta, imgRuta, htmlRuta, idCliente, adultos, menores, nombrePasajeros, fechaInicio, fechaFinal, habitacion, numHabitacion, mealPlan, estatus, vencimiento, comentarios) VALUES (:cProveedor, :categoria, :folio, :id_vendedor, :barco, :imgBarco, :idRuta, :imgRuta, :htmlRuta, :idCliente, :adultos,:menores, :nombrePasajeros, :fechaInicio, :fechaFinal, :habitacion, :numHabitacion,:mealPlan, :estatus, :vencimiento, :comentarios)");

		$stmt->bindParam(":cProveedor",$datos["cProveedor"], PDO::PARAM_STR);
		$stmt->bindParam(":categoria",$datos["categoria"], PDO::PARAM_INT);
		$stmt->bindParam(":folio",$datos["folio"], PDO::PARAM_INT);
		$stmt->bindParam(":id_vendedor",$datos["id_vendedor"], PDO::PARAM_INT);
		$stmt->bindParam(":barco",$datos["barco"], PDO::PARAM_INT);
		$stmt->bindParam(":imgBarco",$datos["imgBarco"], PDO::PARAM_STR);
		$stmt->bindParam(":idRuta",$datos["idRuta"], PDO::PARAM_INT);
		$stmt->bindParam(":imgRuta",$datos["imgRuta"], PDO::PARAM_STR);
		$stmt->bindParam(":htmlRuta",$datos["htmlRuta"], PDO::PARAM_STR);
		$stmt->bindParam(":idCliente",$datos["idCliente"], PDO::PARAM_INT);
		$stmt->bindParam(":adultos",$datos["adultos"], PDO::PARAM_INT);
		$stmt->bindParam(":menores",$datos["menores"], PDO::PARAM_INT);
		$stmt->bindParam(":nombrePasajeros", $datos["nombrePasajeros"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaInicio",$datos["fechaInicio"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaFinal",$datos["fechaFinal"], PDO::PARAM_STR);
		$stmt->bindParam(":habitacion",$datos["habitacion"], PDO::PARAM_STR);
		$stmt->bindParam(":numHabitacion",$datos["numHabitacion"], PDO::PARAM_STR);
		$stmt->bindParam(":mealPlan",$datos["mealPlan"], PDO::PARAM_STR);
		$stmt->bindParam(":estatus",$datos["estatus"], PDO::PARAM_STR);
		$stmt->bindParam(":vencimiento",$datos["vencimiento"], PDO::PARAM_STR);
		$stmt->bindParam(":comentarios",$datos["comentarios"], PDO::PARAM_STR);



	if($stmt->execute()){

			return "ok";

		}else{

			return $stmt->errorInfo();
		
		}

		$stmt->close();
		$stmt = null;

	}

}