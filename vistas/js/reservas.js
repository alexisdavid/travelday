
/*=============================================
MODIFICAR LA CANTIDAD
=============================================*/

$(".formularioReserva").on("change", "select.cantidadPasajeros", function(){

 var Pasajeros = $(this).val();
 		
	clean();

	if(Number($(this).val()) > 5){

		//=============================================
		//SI LA CANTIDAD ES SUPERIOR AL STOCK REGRESAR VALORES INICIALES
		//=============================================


		swal({
	      title: "Cantidad de pasajeros permitidos superada",
	      text: "¡no pueden ser mas de 5! ",
	      type: "error",
	      confirmButtonText: "¡Cerrar!"
	    });

	    return;

	}

	
 		for(var i = 1; i <= Pasajeros; i++){

 			var elem = list.appendChild(document.createElement('input'));
 			elem.setAttribute('type','text');
 			elem.name = 'pasajero' + i;
 			elem.className = 'form-control';
 			var s = list.appendChild(document.createElement('br'));

 }
		

})

/*=============================================
AÑADIR FECHA DE NACIMIENTO
=============================================*/

$(".formularioReserva").on("change", "select.cantidadPasajeros", function(){

 var Pasajeros = $(this).val();
 		
	fechas();

 		for(var i = 1; i <= Pasajeros; i++){

 			var elem = fecha.appendChild(document.createElement('input'));
 			elem.setAttribute('type','date');
 			elem.name = 'nacPasajero' + i;
 			elem.className = 'form-control';
 			var s = fecha.appendChild(document.createElement('br'));

 }		
})

/*=============================================
AÑADIR FECHA DE NACIMIENTO
=============================================*/

$(".formularioReserva").on("change", "select.cantidadPasajeros", function(){

 var Pasajeros = $(this).val();
 		
	fechas();

	

	
 		for(var i = 1; i <= Pasajeros; i++){

 			var elem = fecha.appendChild(document.createElement('input'));
 			elem.setAttribute('type','date');
 			elem.name = 'nacPasajero' + i;
 			elem.className = 'form-control';
 			var s = fecha.appendChild(document.createElement('br'));

 }
		

})
/*=============================================
AÑADIR GENERO
=============================================*/

$(".formularioReserva").on("change", "select.cantidadPasajeros", function(){

 var Pasajeros = $(this).val();
 		
	generos();

		for(var i = 1; i <= Pasajeros; i++){

 			var elem = genero.appendChild(document.createElement('input'));
 			elem.setAttribute('type','text');
 			elem.name = 'genero' + i;
 			elem.className = 'form-control';
 			var s = genero.appendChild(document.createElement('br'));

 }		
		

})

function clean(){
list = document.getElementById('pasajeros');
 while(list.childNodes.length){
 list.removeChild(list.childNodes[list.childNodes.length - 1]);
 }
 }


 function fechas(){
fecha = document.getElementById('nacimiento');
 while(fecha.childNodes.length){
 fecha.removeChild(fecha.childNodes[fecha.childNodes.length - 1]);
 }
 }

 function generos(){
genero = document.getElementById('generosPasajeros');
 while(genero.childNodes.length){
 genero.removeChild(genero.childNodes[genero.childNodes.length - 1]);
 }
 }