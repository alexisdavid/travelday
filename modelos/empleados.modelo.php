<?php

require_once "conexion.php";

class ModeloEmpleados{


		static public function mdlIngresarEmpleado($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, dob, nacionalidad, email, emailpersonal, telefono, telefono2, extencion, area, puesto, dni, folio_dni, pais, direccion, cp) VALUES (:nombre, :dob, :nacionalidad, :email, :emailpersonal, :telefono, :telefono2, :extencion, :area, :puesto, :dni, :folio_dni, :pais, :direccion, :cp)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":dob", $datos["dob"], PDO::PARAM_STR);
		$stmt->bindParam(":nacionalidad", $datos["nacionalidad"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":emailpersonal", $datos["emailpersonal"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono2", $datos["telefono2"], PDO::PARAM_STR);
		$stmt->bindParam(":extencion", $datos["extencion"], PDO::PARAM_INT);
		$stmt->bindParam(":area", $datos["area"], PDO::PARAM_STR);
		$stmt->bindParam(":puesto", $datos["puesto"], PDO::PARAM_STR);
		$stmt->bindParam(":dni", $datos["dni"], PDO::PARAM_STR);
		$stmt->bindParam(":folio_dni", $datos["folio_dni"], PDO::PARAM_STR);
		$stmt->bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":cp", $datos["cp"], PDO::PARAM_INT);
	
	

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR EMPLEADOS
	=============================================*/

	static public function mdlMostrarEmpleados($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

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
	EDITAR PRODUCTO
	=============================================*/
	static public function mdlEditarEmpleado($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, dob = :dob, nacionalidad = :nacionalidad, email = :email, emailpersonal = :emailpersonal, telefono = :telefono, telefono2 =:telefono2, extencion = :extencion, area = :area, puesto = :puesto, dni= :dni, folio_dni = :folio_dni, pais = :pais, direccion =:direccion, cp = :cp, estatus = :estatus WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":dob", $datos["dob"], PDO::PARAM_STR);
			$stmt->bindParam(":nacionalidad", $datos["nacionalidad"], PDO::PARAM_STR);
			$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
			$stmt->bindParam(":emailpersonal", $datos["emailpersonal"], PDO::PARAM_STR);
			$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
			$stmt->bindParam(":telefono2", $datos["telefono2"], PDO::PARAM_STR);
			$stmt->bindParam(":extencion", $datos["extencion"], PDO::PARAM_INT);
			$stmt->bindParam(":area", $datos["area"], PDO::PARAM_STR);
			$stmt->bindParam(":puesto", $datos["puesto"], PDO::PARAM_STR);
			$stmt->bindParam(":dni", $datos["dni"], PDO::PARAM_STR);
			$stmt->bindParam(":folio_dni", $datos["folio_dni"], PDO::PARAM_STR);
			$stmt->bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
			$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
			$stmt->bindParam(":cp", $datos["cp"], PDO::PARAM_INT);
			$stmt->bindParam(":estatus", $datos["estatus"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	


}
