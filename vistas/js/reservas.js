


/*=============================================
BOTON EDITAR VENTA
=============================================*/
$(".tablas").on("click", ".btnEditarReserva", function(){

	var idReserva = $(this).attr("idReserva");

	window.location = "index.php?ruta=editar-reserva&idVenta="+idReserva;


})
/*=============================================
CAPTURANDO LA CATEGORIA PARA ASIGNAR CÓDIGO
=============================================*/

$(".formularioReserva").on("change", "select.categoriaServico", function(){


  var idCategoria = $(this).val();
  // console.log(idCategoria);
  

  var datos = new FormData();
    datos.append("idCategoria", idCategoria);

    $.ajax({

      url:"ajax/reservas.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
        // console.log(respuesta);

        if(!respuesta){

          var nuevoCodigo = idCategoria+"01";
          $("#nuevoFolio").val(nuevoCodigo);

        }else{

          var nuevoCodigo = Number(respuesta["folio"]) + 1;
            $("#nuevoFolio").val(nuevoCodigo);

        }
                
      }

    })

})

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

 			var elem = genero.appendChild(document.createElement('select'));
 			var miOption=document.createElement("option");
 			miOption.setAttribute("label","Masculino");
 			miOption.setAttribute('value','Masculino');
 			elem.appendChild(miOption);
 			var miOption2=document.createElement("option");
 			miOption2.setAttribute("label","Femenino");
 			miOption2.setAttribute('value','Femenino');
 			elem.appendChild(miOption2);
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

 			var elem = generoMenores.appendChild(document.createElement('select'));
 			var miOption=document.createElement("option");
 			miOption.setAttribute("label","Masculino");
 			miOption.setAttribute('value','Masculino');
 			elem.appendChild(miOption);
 			var miOption2=document.createElement("option");
 			miOption2.setAttribute("label","femenino");
 			miOption2.setAttribute('value','Femenino');
 			elem.appendChild(miOption2);
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
 /*=============================================
RANGO DE FECHAS
=============================================*/

$('#daterange-btn').daterangepicker(
  {
    ranges   : {
      'Hoy'       : [moment(), moment()],
      'Ayer'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Últimos 7 días' : [moment().subtract(6, 'days'), moment()],
      'Últimos 30 días': [moment().subtract(29, 'days'), moment()],
      'Este mes'  : [moment().startOf('month'), moment().endOf('month')],
      'Último mes'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment(),
    endDate  : moment()
  },
  function (start, end) {
    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

    var fechaInicial = start.format('YYYY-MM-DD');

   
    var fechaFinal = end.format('YYYY-MM-DD');

    var capturarRango = $("#daterange-btn span").html();
    console.log(fechaInicial);
  
   

   	window.location = "index.php?ruta=administrarReservas&fechaInicial="+fechaInicial+"&fechaFinal="+fechaFinal;

  }

)

 /*=============================================
RANGO DE FECHAS HISTORIAL
=============================================*/

$('#daterange-btn2').daterangepicker(
  {
    ranges   : {
      'Hoy'       : [moment(), moment()],
      'Ayer'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Últimos 7 días' : [moment().subtract(6, 'days'), moment()],
      'Últimos 30 días': [moment().subtract(29, 'days'), moment()],
      'Este mes'  : [moment().startOf('month'), moment().endOf('month')],
      'Último mes'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment(),
    endDate  : moment()
  },
  function (start, end) {
    $('#daterange-btn2 span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

    var fechaInicial = start.format('YYYY-MM-DD');
   
    var fechaFinal = end.format('YYYY-MM-DD');

    var capturarRango = $("#daterange-btn2 span").html();
  
   	localStorage.setItem("capturarRango", capturarRango);
    $("#daterange-btn span").html(localStorage.getItem("capturarRango"));

   	window.location = "index.php?ruta=historial-reservas&fechaInicial="+fechaInicial+"&fechaFinal="+fechaFinal;

  }

)
/*=============================================
CANCELAR RANGO DE FECHAS
=============================================*/

$(".daterangepicker.opensleft .range_inputs .cancelBtn").on("click", function(){

	localStorage.removeItem("capturarRango");
	localStorage.clear();
	window.location = "administrarReservas";
})

/*=============================================
CAPTURAR HOY
=============================================*/

$(".daterangepicker.opensleft .ranges li").on("click", function(){

  var textoHoy = $(this).attr("data-range-key");

  if(textoHoy == "Hoy"){

    var d = new Date();
    
    var dia = d.getDate();
    var mes = d.getMonth()+1;
    var año = d.getFullYear();

    if(mes < 10){

      var fechaInicial = año+"-0"+mes+"-"+dia;
      var fechaFinal = año+"-0"+mes+"-"+dia;

    }else if(dia < 10){

      var fechaInicial = año+"-"+mes+"-0"+dia;
      var fechaFinal = año+"-"+mes+"-0"+dia;

    }else if(mes < 10 && dia < 10){

      var fechaInicial = año+"-0"+mes+"-0"+dia;
      var fechaFinal = año+"-0"+mes+"-0"+dia;

    }else{

      var fechaInicial = año+"-"+mes+"-"+dia;
        var fechaFinal = año+"-"+mes+"-"+dia;

    } 

      localStorage.setItem("capturarRango", "Hoy");

      window.location = "index.php?ruta=administrarReservas&fechaInicial="+fechaInicial+"&fechaFinal="+fechaFinal;

  }

})



