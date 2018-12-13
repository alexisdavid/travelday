<?php



    $item = null;
    $valor = null;
  
    $numero = 0;
    $numero2 = 0;
    $respuesta = ControladorReservas::ctrMostrarReserva($item, $valor);

    foreach ($respuesta as $key => $value) {

            if ($value['estatus'] == " activo"){
              $numero = $numero + 1;
                      
                    } 
            if ($value['estatus'] == "inactivo"){
              $numero2 = $numero2 + 1;
                      
                    }      
      }  

      $ventas = ControladorReservas::ctrSumaTotalResevas();
   


?>


<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-green">
    
    <div class="inner">
    
      <h3>categorias</h3>

      <p>Categorías</p>
    
    </div>
    
    <div class="icon">
    
      <i class="ion ion-clipboard"></i>
    
    </div>
    
    <a href="categorias" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-yellow">
    
    <div class="inner">
    
    <h3><?php echo "$numero";?></h3>

      <p>Reservas activas</p>
  
    </div>
    
    <div class="icon">
    
      <i class="ion ion-calendar"></i>
    
    </div>
    
    <a href="administrarReservas" class="small-box-footer">

      Más info <i class="fa fa-arrow-circle-right"></i>

    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-red">
  
    <div class="inner">
    <h3><?php echo "$numero2";?></h3>

      <p>Reservas inactivas</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-ios-cart"></i>
    
    </div>
    
    <a href="historial-reservas" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>


<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-aqua">
    
    <div class="inner">
      
      <h3>$<?php echo number_format($ventas["total"],2); ?></h3>

      <p>Ventas</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="ventas" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>