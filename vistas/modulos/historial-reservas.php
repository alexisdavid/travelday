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
  
        <a href="administrarReservas">

          <button class="btn btn-warning">
            
            Regresar

          </button>

        </a>
         <button type="button" class="btn btn-default pull-right" id="daterange-btn2">
           
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
           
           <th style="width:10px">#</th>
           <th>Folio</th>
           <th>cliente</th>
           <th>barco</th>
           <th>ruta</th>
           <th>fechaInicio</th>
           <th>fechaFinal</th> 
           <th>estatus</th>
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



$contador = 0;

          foreach ($respuesta as $key => $value) {
$contador = $contador +1;

            if ($value['estatus'] == 'inactivo') {

              
      
           
                echo '<tr>

                 <td>'.($contador).'</td>
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

               
                    echo '<td><button class="btn btn-danger">inactivo</button></td>';


                  
                  echo '<td>'.$value["comentarios"].'</td>';

                   echo '
                        <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-info fa-1x imprimirReserva" idReserva="'.$value["id"].'"><i class="fas fa-print"></i></button>

                      <button class="btn btn-warning btnEditarReserva" idReserva="'.$value["id"].'"><i class="fas fa-edit"></i></button>


                    </div>  

                  </td>

                </tr> ';

      

             }




         
            }

        ?>
               
        </tbody>

       </table>
       

    
      </div>

    </div>

  </section>

</div>




