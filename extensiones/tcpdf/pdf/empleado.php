<?php

require_once "../../../controladores/empleados.controlador.php";
require_once "../../../modelos/empleados.modelo.php";


class imprimirEmpleado{

public $codigo;

public function traerImpresionEmpleado(){

//TRAEMOS LA INFORMACIÓN DE LA VENTA
date_default_timezone_set('America/Bogota');

$itemEmpleado = "id";
$valorEmpleado =  $this->codigo;

$time = time();
$hoy = date("F j, Y");  

$fecha =  $hoy;


$respuesta = ControladorEmpleado::ctrMostrarEmpleado($itemEmpleado, $valorEmpleado);
//var_dump($respuesta);


//REQUERIMOS LA CLASE TCPDF

require_once('tcpdf_include.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->startPageGroup();

$pdf->AddPage();

// ---------------------------------------------------------

$bloque1 = <<<EOF

	
	<table>
		
		<tr>
	

			
			<td style="width:150px"><img src="images/travelday.png"></td>

			<td style="background-color:white; width:100px">
				
				<div style="font-size:8.5px; text-align:right; line-height:15px;">
				
					<br>
					<br>
					
					 SM 515 M 7 L1 Calle 54 con 127 Leonardo Rodriguez Local 2, 513, 77535 Cancún, Q.R.

				</div>

			</td>

			<td style="background-color:white; width:120px">

				<div style="font-size:8.5px; text-align:right; line-height:15px;">

				<br>
					<br>
					Teléfono:  01 998 882 9330
					
					<br>
					info@travelday.com.mx
				</div>
				
			</td>

			<td style="background-color:white;text-align:right; width:120px;"><br><br>Fecha:<br>$fecha</td>

		</tr>

	</table>

EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');

// ---------------------------------------------------------
$bloque2 = <<<EOF

	<table>
		
		<tr>
			
			<td style="width:540px"><img src="images/back.jpg">Datos del empleado</td>
		
		</tr>

	</table>

	 

	

EOF;

$pdf->writeHTML($bloque2, false, false, false, false, '');



// ---------------------------------------------------------
$bloque3 = <<<EOF

<table style="font-size:10px; padding:5px 10px;">
		
		<tr>

		<td style="width:540px">

		<div style="font-size:10px; text-align:left; line-height:15px;">

				<br>
					<br>
					Nombre: $respuesta[nombre]
				
					<br>
					<br>
					fecha de nacimiento: $respuesta[dob]
					<br>
					<br>
				
					Nacionalidad: $respuesta[nacionalidad]
					<br>
					<br>
				
					Email empresarial: $respuesta[email]
					<br>
					<br>
				
					Email personal: $respuesta[emailpersonal]
					<br>
					<br>
				
					Telefono: $respuesta[telefono]
					<br>
					<br>
			
					Telefono personal: $respuesta[telefono2]
					<br>
					<br>
				
					Extencion:  ($respuesta[extencion])
					<br>
					<br>
					Area: $respuesta[area]
					<br>
					<br>
					Puesto: $respuesta[puesto]
					<br>
					<br>
					identificacion o DNI: $respuesta[dni]
					<br>
					<br>
					Folio:    $respuesta[folio_dni]
					<br>
					<br>
					Pais de residencia: $respuesta[pais]
					<br>
					<br>
					Direccion:    $respuesta[direccion]
					<br>
					<br>
					Codigo postal:    $respuesta[cp]
					<br>
					<br>
					Ingreso a la empresa: $respuesta[fecha_alta]
					<br>
					<br>
					Fecha de baja: $respuesta[fecha_baja]
					<br>
					<br>
					Estatus: $respuesta[estatus]
				</div>
				
		
		
		
		</td>
	
		
	
		</tr>

	</table>
	

	
EOF;

$pdf->writeHTML($bloque3, false, false, false, false, '');





// ---------------------------------------------------------
//SALIDA DEL ARCHIVO 

$pdf->Output('empleado.pdf', 'I');

}

}

$empleado = new imprimirEmpleado();
$empleado -> codigo = $_GET["id"];
$empleado -> traerImpresionEmpleado();

?>