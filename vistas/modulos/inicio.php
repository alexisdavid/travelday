<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Tablero
      
      <small>Panel de Control</small>
    
    </h1>

    <ol class="breadcrumb">
      
       <li><a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a></li>
      
      <li class="active">Tablero</li>
    
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">
    
    <div class="row">
 <?php

    if($_SESSION["perfil"] =="Administrador"){

      include "inicio/cajas-superiores.php";

    }

    ?>
      
    </div>

         <div class="col-lg-12">
           
          <?php

          if($_SESSION["perfil"] =="Vendedor"){

             echo '<div class="box box-success">

             <div class="box-header">

             <h1>Bienvenid@ ' .$_SESSION["nombre"].'</h1>

             </div>

             </div>';

          }

          ?>

         </div>


         <div class="col-lg-12">
           
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

          if($_SESSION["perfil"] =="Especial" ){

             echo '



             <div class="box box-success">
             

             <div class="box-header">
               <div class="col-lg-3 col-xs-6 pull-right">

  <div class="small-box bg-yellow">
    
    <div class="inner">
    
    <h3>'.$numero.'</h3>

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

              <h1>Bienvenid@ ' .$_SESSION["nombre"].'</h1>


             </div>

           





             </div>';

          }

          ?>

         </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->