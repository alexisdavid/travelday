
/*=============================================
MODIFICAR LA CANTIDAD
=============================================*/

$(".formularioReserva").on("change", "select.cantidadAdultos", function(){

	var menores =  document.getElementById('cantidadMenores');

	 var Pasajeros = $(this).val();

	 var total = (parseInt(menores.value) + parseInt(Pasajeros))
 		console.log(total);
 		
	clean();

	if(Number($(this).val()) > 5 || total > 5){

		//=============================================
		//SI LA CANTIDAD ES SUPERIOR AL STOCK REGRESAR VALORES INICIALES
		//=============================================


		swal({
	      title: "Cantidad de pasajeros permitidos superada",
	      text: "¡no pueden ser mas de 5! ",
	      type: "error",
	      confirmButtonText: "¡Cerrar!"
	    });
	    $('#cantidadAdultos').prop('selected', function() {
        $(".cantidadAdultos").val("");
    });

	    return;

	}
	if (Pasajeros< 5) {
		$('#cantidadMenores').removeAttr('disabled');
	}
	
 		for(var i = 1; i <= Pasajeros; i++){

 			var elem = list.appendChild(document.createElement('input'));
 			elem.setAttribute('type','text');
 			elem.name = 'pasajero' + i;
 			elem.className = 'form-control';
 			var s = list.appendChild(document.createElement('br'));
 			var s = list.appendChild(document.createElement('br'));

 }
		

})


/*=============================================
AÑADIR FECHA DE NACIMIENTO
=============================================*/

$(".formularioReserva").on("change", "select.cantidadAdultos", function(){

 var Pasajeros = $(this).val();
 		
	fechas();

	

	
 		for(var i = 1; i <= Pasajeros; i++){

 			var elem = fecha.appendChild(document.createElement('input'));
 			elem.setAttribute('type','date');
 			elem.name = 'nacPasajero' + i;
 			elem.className = 'form-control';
 			var s = fecha.appendChild(document.createElement('br'));
 			var s = fecha.appendChild(document.createElement('br'));

 }
		

})
/*=============================================
AÑADIR GENERO
=============================================*/

$(".formularioReserva").on("change", "select.cantidadAdultos", function(){

 var Pasajeros = $(this).val();
 		
	generos();

		for(var i = 1; i <= Pasajeros; i++){

 			var elem = genero.appendChild(document.createElement('input'));
 			elem.setAttribute('type','text');
 			elem.name = 'genero' + i;
 			elem.className = 'form-control';
 			var s = genero.appendChild(document.createElement('br'));
 			var s = genero.appendChild(document.createElement('br'));


 }		
		

})

/*=============================================
MODIFICAR LA CANTIDAD MENORES
=============================================*/

$(".formularioReserva").on("change", "select.cantidadMenores", function(){

var adultos =  document.getElementById('cantidadAdultos');
console.log(adultos.value);


 var PasajerosMenores = $(this).val();

 var total = (parseInt(adultos.value) + parseInt(PasajerosMenores))
 		console.log(total);
	inicio();

	if(Number($(this).val()) > 5 || total > 5){

		//=============================================
		//SI LA CANTIDAD ES SUPERIOR AL STOCK REGRESAR VALORES INICIALES
		//=============================================


		swal({
	      title: "Cantidad de pasajeros permitidos superada",
	      text: "¡no pueden ser mas de 5! ",
	      type: "error",
	      confirmButtonText: "¡Cerrar!"
	    });

	    $('#cantidadMenores').prop('selected', function() {
        $(".cantidadMenores").val("");
    });

	    return;

	}

	
 		for(var i = 1; i <= PasajerosMenores; i++){

 			var elem = listMenores.appendChild(document.createElement('input'));
 			elem.setAttribute('type','text');
 			elem.name = 'pasajeroMenores' + i;
 			elem.className = 'form-control';
 			var s = listMenores.appendChild(document.createElement('br'));
 			var s = listMenores.appendChild(document.createElement('br'));

 }
		

})


/*=============================================
AÑADIR FECHA DE NACIMIENTO MENORES
=============================================*/

$(".formularioReserva").on("change", "select.cantidadMenores", function(){

 var PasajerosMenores = $(this).val();
 		
	fechasMenores();

	

	
 		for(var i = 1; i <= PasajerosMenores; i++){

 			var elem = fechaMenores.appendChild(document.createElement('input'));
 			elem.setAttribute('type','date');
 			elem.name = 'nacPasajeroMenores' + i;
 			elem.className = 'form-control';
 			var s = fechaMenores.appendChild(document.createElement('br'));
 			var s = fechaMenores.appendChild(document.createElement('br'));

 }
		

})
/*=============================================
AÑADIR GENERO MENORES
=============================================*/

$(".formularioReserva").on("change", "select.cantidadMenores", function(){

 var PasajerosMenores = $(this).val();
 		
	generosMenores();

		for(var i = 1; i <= PasajerosMenores; i++){

 			var elem = generoMenores.appendChild(document.createElement('input'));
 			elem.setAttribute('type','text');
 			elem.name = 'generoMenores' + i;
 			elem.className = 'form-control';
 			var s = generoMenores.appendChild(document.createElement('br'));
 			var s = generoMenores.appendChild(document.createElement('br'));


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


 // menores

 function inicio(){
listMenores = document.getElementById('pasajerosMenores');
 while(listMenores.childNodes.length){
 listMenores.removeChild(listMenores.childNodes[listMenores.childNodes.length - 1]);
 }
 }


 function fechasMenores(){
fechaMenores = document.getElementById('nacimientoMenores');
 while(fechaMenores.childNodes.length){
 fechaMenores.removeChild(fechaMenores.childNodes[fechaMenores.childNodes.length - 1]);
 }
 }

 function generosMenores(){
generoMenores = document.getElementById('generosPasajerosMenores');
 while(generoMenores.childNodes.length){
 generoMenores.removeChild(generoMenores.childNodes[generoMenores.childNodes.length - 1]);
 }
 }