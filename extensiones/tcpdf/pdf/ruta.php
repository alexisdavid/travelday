<?php
require_once "../../../controladores/rutas.controlador.php";
require_once "../../../modelos/rutas.modelo.php";
class imprimirRuta{
	public $codigo;
	public function traerImpresionRuta(){
		//TRAEMOS LA INFORMACIÓN DE LA VENTA
date_default_timezone_set('America/Bogota');
$itemEmpleado = "id";
$valorEmpleado =  $this->codigo;
$time = time();
$hoy = date("F j, Y");  
$fecha =  $hoy;


$itemRuta = "id";
$valorRuta =  $this->codigo;
$respuesta = ControladorRutas::ctrMostrarRutas($itemRuta, $valorRuta);
		// var_dump($respuesta);
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
			
			<td style="width:540px"><img src="images/back.jpg">Detalles de crucero</td>
		
		</tr>
	</table>
	 
	
EOF;
$pdf->writeHTML($bloque2, false, false, false, false, '');
// ---------------------------------------------------------
$bloque3 = <<<EOF
	<table>
		
		<tr>
			
			<td style="width:250px">$respuesta[html]</td>
			
		
		</tr>
	</table>
	 
	
EOF;
$pdf->writeHTML($bloque3, false, false, false, false, '');
// ---------------------------------------------------------
$bloque4 = <<<EOF
	<table>
		
		<tr>
			
			<td style="width:150px"><img src="../../../$respuesta[imagen]"></td>
			
		
		</tr>
	</table>
	 
	 
	
EOF;
$pdf->writeHTML($bloque4, false, false, false, false, '');
// ---------------------------------------------------------
//SALIDA DEL ARCHIVO 
$pdf->Output('ruta.pdf','I');
}
}
$ruta = new imprimirRuta();
$ruta -> codigo = $_GET["idRuta"];
$ruta -> traerImpresionRuta();
?>