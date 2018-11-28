
/*=============================================
MODIFICAR LA CANTIDAD
=============================================*/

$(".formularioReserva").on("change", "select.cantidadAdultos", function(){
	divC = document.getElementById("mostrar");
     divC.style.display = "";




	var menores =  document.getElementById('cantidadMenores');

	 var Pasajeros = $(this).val();

	 var total = (parseInt(menores.value) + parseInt(Pasajeros))
 		
 		
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
 			elem.className = 'form-control pasajero';
 			elem.setAttribute('required','required');
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
 			elem.className = 'form-control nacimiento';
 			elem.setAttribute('required','required');
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
 			elem.className = 'form-control genero';
 			elem.setAttribute('required','required');
 			var s = genero.appendChild(document.createElement('br'));
 			var s = genero.appendChild(document.createElement('br'));


 }		
		

})

/*=============================================
MODIFICAR LA CANTIDAD MENORES
=============================================*/

$(".formularioReserva").on("change", "select.cantidadMenores", function(){

var adultos =  document.getElementById('cantidadAdultos');



 var PasajerosMenores = $(this).val();

 var total = (parseInt(adultos.value) + parseInt(PasajerosMenores))
 		
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
 			elem.className = 'form-control pasajero';
 			elem.setAttribute('required','required');
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
 			elem.className = 'form-control nacimiento';
 			elem.setAttribute('required','required');
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
 			elem.className = 'form-control genero';
 			elem.setAttribute('required','required');
 			var s = generoMenores.appendChild(document.createElement('br'));
 			var s = generoMenores.appendChild(document.createElement('br'));


 }		
		

})


/*=============================================
LISTAR TODOS LOS PRODUCTOS
=============================================*/

function listarPasajeros(){

	var listaPasajero = [];

	var nombre = $(".pasajero");

	var nacimiento = $(".nacimiento");

	var genero = $(".genero");

	for(var i = 0; i < nombre.length; i++){

		listaPasajero.push({ "nombre" : $(nombre[i]).val(),
							  "nacimiento" : $(nacimiento[i]).val(),
							  "genero" : $(genero[i]).val()})

	}

	console.log(listaPasajero);

	$("#listaPasajeros").val(JSON.stringify(listaPasajero)); 

}
/*=============================================
AÑADIR pasajeros
=============================================*/

$(".formularioReserva").on("change", "select.estatus", function(){
	listarPasajeros();
})

/*=============================================
TRAER IMAGEN BARCO
=============================================*/



$(".formularioReserva").on("change", "select.nombreCrucero", function(){
	  var idBarco = $(this).val();
   console.log(idBarco);
  
  var datos = new FormData();
    datos.append("idBarco", idBarco);

     $.ajax({

      url:"ajax/barcos.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
          console.log(respuesta);


  //           

           if(respuesta["imagen"] != ""){

            $("#imgBarco").val(respuesta["imagen"]);

            

           }
          
        

      }

  })
})
/*=============================================
TRAER IMAGEN RUTA
=============================================*/



$(".formularioReserva").on("change", "select.ruta", function(){
	  var idRuta = $(this).val();
  // console.log(idRuta);
  
  var datos = new FormData();
    datos.append("idRuta", idRuta);

     $.ajax({

      url:"ajax/rutas.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
          // console.log(respuesta);
        

           if(respuesta["imagen"] != ""){

            $("#imgRuta").val(respuesta["imagen"]);
            $("#htmlRuta").val(respuesta["html"]);

            

           }
          
        

      }

  })
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