<?php

require_once "conexion.php";

class ModeloReservas{
	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function mdlMostrarReservasActivas($tabla, $item, $valor, $orden){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $orden DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	MOSTRAR RESERVAS
	=============================================*/

	static public function mdlMostrarReservas($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id ASC");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla  ORDER BY id ASC");

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

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(cProveedor, categoria, folio, id_vendedor, barco, imgBarco, idRuta, imgRuta, htmlRuta, idCliente, adultos, menores, nombrePasajeros, fechaInicio, fechaFinal, habitacion, numHabitacion, mealPlan, estatus, vencimiento, costo, metodoPago, codigo, comentarios) VALUES (:cProveedor, :categoria, :folio, :id_vendedor, :barco, :imgBarco, :idRuta, :imgRuta, :htmlRuta, :idCliente, :adultos,:menores, :nombrePasajeros, :fechaInicio, :fechaFinal, :habitacion, :numHabitacion,:mealPlan, :estatus, :vencimiento, :costo, :metodoPago, :codigo, :comentarios)");

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
		$stmt->bindParam(":costo",$datos["costo"], PDO::PARAM_INT);
		$stmt->bindParam(":metodoPago",$datos["metodoPago"], PDO::PARAM_STR);
		$stmt->bindParam(":codigo",$datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":comentarios",$datos["comentarios"], PDO::PARAM_STR);



	if($stmt->execute()){

			return "ok";

		}else{

			return $stmt->errorInfo();
		
		}

		$stmt->close();
		$stmt = null;

	}


		/*=============================================
	EDITAR DE RESERVA
	=============================================*/
	static public function mdlEditarReserva($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET cProveedor = :cProveedor, categoria = :categoria, id_vendedor = :id_vendedor, barco = :barco, imgBarco = :imgBarco, idRuta = :idRuta, imgRuta = :imgRuta, htmlRuta = :htmlRuta, idCliente = :idCliente, adultos = :adultos, menores = :menores, nombrePasajeros = :nombrePasajeros, fechaInicio = :fechaInicio, fechaFinal = :fechaFinal, habitacion = :habitacion, numHabitacion = :numHabitacion, mealPlan = :mealPlan, estatus = :estatus, vencimiento = :vencimiento, costo = :costo, metodoPago = :metodoPago, codigo = :codigo, comentarios = :comentarios WHERE folio = :folio");

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
		$stmt->bindParam(":costo",$datos["costo"], PDO::PARAM_INT);
		$stmt->bindParam(":metodoPago",$datos["metodoPago"], PDO::PARAM_STR);
		$stmt->bindParam(":codigo",$datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":comentarios",$datos["comentarios"], PDO::PARAM_STR);



	if($stmt->execute()){

			return "ok";

		}else{

			return $stmt->errorInfo();
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR SUMA VENTAS
	=============================================*/	

	static public function mdlMostrarSumaReservas($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT SUM(costo) as total FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;
	}
	
	/*=============================================
	RANGO FECHAS
	=============================================*/	

	static public function mdlRangoFechasVentas($tabla, $fechaInicial, $fechaFinal){

		if($fechaInicial == null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id ASC");

			$stmt -> execute();

			return $stmt -> fetchAll();	


		}else if($fechaInicial == $fechaFinal){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha like '%$fechaFinal%'");

			$stmt -> bindParam(":fecha", $fechaFinal, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$fechaActual = new DateTime();
			$fechaActual ->add(new DateInterval("P1D"));
			$fechaActualMasUno = $fechaActual->format("Y-m-d");

			$fechaFinal2 = new DateTime($fechaFinal);
			$fechaFinal2 ->add(new DateInterval("P1D"));
			$fechaFinalMasUno = $fechaFinal2->format("Y-m-d");

			if($fechaFinalMasUno == $fechaActualMasUno){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha BETWEEN '$fechaInicial' AND '$fechaFinalMasUno'");

			}else{


				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecha BETWEEN '$fechaInicial' AND '$fechaFinal'");

			}
		
			$stmt -> execute();

			return $stmt -> fetchAll();

		}

	}


	
	
	
	

}