<?php
require_once "../../../controladores/reservas.controlador.php";
require_once "../../../modelos/reservas.modelo.php";

class imprimirReserva{


	public $codigo;
	public function traerImpresionReserva(){

		//TRAEMOS LA INFORMACIÓN DE LA RESERVA

date_default_timezone_set('America/Bogota');

$itemEmpleado = "id";
$valorEmpleado =  $this->codigo;

$time = time();
$hoy = date("F j, Y");  
$fecha =  $hoy;

$itemReserva = "id";
$valorReserva =  $this->codigo;
$respuesta = ControladorReservas::ctrMostrarReserva($itemReserva, $valorReserva);
$reserva = json_decode($respuesta["nombrePasajeros"], true);


		// var_dump($reserva);
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
			
			<td style="width:200px">

			<div style="font-size:10px; text-align:right; ">

			<h5 style="color:blue">CONFIRMACION DE ITINERARIO: </h5>
			<p style="color:red;font-size: 12px">booking: $respuesta[cProveedor]</p>
			


			</div>


			</td>
			
		</tr>
	</table>
EOF;
$pdf->writeHTML($bloque1, false, false, false, false, '');
// ---------------------------------------------------------

// ---------------------------------------------------------
$bloque2 = <<<EOF
	<table>
		
		
		<tr>
		<td style="width:540px">

			<div style="font-size:9px; text-align:left; line-height:5px;">

			<h3 style="color: #668cff">Nombre de los pasajeros: </h3>
			
			


			</div>


			</td>

			
			
		
		</tr>
	</table>
	 
	
EOF;
$pdf->writeHTML($bloque2, false, false, false, false, '');


// ---------------------------------------------------------
$numero=0;
foreach ($reserva as $key => $item) {
$numero = $numero +1;
$bloque3 = <<<EOF


<table>
		
		
		<tr>
		<td style="width:540px">

			<div style="font-size:9px; text-align:left; line-height:10px;">

			
			$numero.$item[nombre]

			


			</div>


			</td>

			
			
		
		</tr>
	</table>


	 
	
EOF;
$pdf->writeHTML($bloque3, false, false, false, false, '');

	
}



//SALIDA DEL ARCHIVO 
$pdf->Output('crucero.pdf','I');
}
}
$reserva = new imprimirReserva();
$reserva -> codigo = $_GET["id"];
$reserva -> traerImpresionReserva();
?>