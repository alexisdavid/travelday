<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar ventas
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar ventas</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <a href="reservas-crucero">

          <button class="btn btn-primary">
            
            Agregar venta

          </button>

        </a>
        

         <button type="button" class="btn btn-default pull-right" id="daterange-btn">
           
            <span>
              <i class="fa fa-calendar"></i> Rango de fecha
            </span>

            <i class="fa fa-caret-down"></i>

         </button>


      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           
           <th>Folio</th>
           <th>cliente</th>
           <th>barco</th>
           <th>ruta</th>
           <th>fechaInicio</th>
           <th>fechaFinal</th> 
           <th>MetodoPago</th>
            <th>comentarios</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        
        <?php

          if(isset($_GET["fechaInicial"])){

            $fechaInicial = $_GET["fechaInicial"];
            $fechaFinal = $_GET["fechaFinal"];

          }else{

            $fechaInicial = null;
            $fechaFinal = null;

          }

          $respuesta = ControladorReservas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);




          foreach ($respuesta as $key => $value) {

            
            if ($value['estatus'] == " activo"){
                echo '<tr>

               
                  <td>'.$value["folio"].'</td>';

                  $itemCliente = "id";
                  $valorCliente = $value["idCliente"];

                  $respuestaCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

                  echo '<td>'.$respuestaCliente["nombre"].'</td>';

                  $itemUsuario = "id";
                  $valorUsuario = $value["barco"];

                  $respuestaUsuario = ControladorBarcos::ctrMostrarBarcos($itemUsuario, $valorUsuario);

                  echo '<td>'.$respuestaUsuario["nombre"].'</td>';

                  $itemUsuario = "id";
                  $valorUsuario = $value["idRuta"];

                  $respuestaUsuario = ControladorRutas::ctrMostrarRutas($itemUsuario, $valorUsuario);
                

                  echo '<td>'.$respuestaUsuario["descripcion"].'</td>';

                  echo '<td>'.$value["fechaInicio"].'</td>';
                  echo '<td>'.$value["fechaFinal"].'</td>';

               
                    echo '<td>'.$value['metodoPago'].'-'.$value['codigo'].'</td>';


                  
                  echo '<td>'.$value["comentarios"].'</td>';

                   echo '
                        <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-info fa-1x imprimirReserva" idReserva="'.$value["id"].'"><i class="fas fa-print"></i></button>';
                       if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial" ){
                          echo'

                      <button class="btn btn-warning btnEditarReserva" idReserva="'.$value["id"].'"><i class="fas fa-edit"></i></button>';}


                    echo '</div>  

                  </td>

                </tr> ';

      

            }




         
            }

        ?>
               
        </tbody>

       </table>
       <?php
       if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial" ){
                          echo'
       <div class="box-header with-border">
  
        <a href="historial-reservas">

          <button class="btn btn-danger">
            
            Historial de reservas

          </button>

        </a>

      </div>';
    }
      ?>

    
      </div>

    </div>

  </section>

</div>




