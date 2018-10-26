<?php

require_once "../../../controladores/empleados.controlador.php";
require_once "../../../modelos/empleados.modelo.php";


class imprimirEmpleado{

public $codigo;

public function traerImpresionEmpleado(){

//TRAEMOS LA INFORMACIÓN DE LA VENTA

$itemEmpleado = "id";
$valorEmpleado =  $this->codigo;

$time = time();

$fecha = date("d-m-Y", $time);


$respuesta = ControladorEmpleado::ctrMostrarEmpleado($itemEmpleado, $valorEmpleado);


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

			<td style="background-color:white; width:140px">
				
				<div style="font-size:8.5px; text-align:right; line-height:15px;">
				
					<br>
					<br>
					
					 SM 515 M 7 L1 Calle 54 con 127 Leonardo Rodriguez Local 2, 513, 77535 Cancún, Q.R.

				</div>

			</td>

			<td style="background-color:white; width:140px">

				<div style="font-size:8.5px; text-align:right; line-height:15px;">

				<br>
					<br>
					Teléfono:  01 998 882 9330
					
					<br>
					info@travelday.com.mx
				</div>
				
			</td>

			<td style="background-color:white; width:80px; text-align:center;"><br><br>Fecha:<br>$fecha</td>

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

		<td style="width:220px">Nombre: $respuesta[nombre]</td>
	
		
		<td style="width:220px">fecha de nacimiento: $respuesta[dob]</td>
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