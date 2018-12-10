<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
     Editar Reserva
      
    
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a></li>
      
      <li class="active">Tablero</li>
    
    </ol>

  </section>


  <section class="content">

    <!-- Default box -->
    <div class="box">

      
      <div class="box-body">

        <div class="panel panel-danger">

          <div class="panel-heading">

            <h2 style="text-align: center;">Editar reservacion</h2>
            
          </div>

          <div class="panel-body">



        <form role="form" method="post" class="formularioReserva">

          <div class="row">


                <?php

                    $item = "id";
                    $valor = $_GET["idVenta"];

                    $venta = ControladorReservas::ctrMostrarReserva($item, $valor);
                    // var_dump($venta);
                     $listaPasajeros = json_decode($venta["nombrePasajeros"], true);

                  

                   $itemUsuario = "id";
                    $valorUsuario = $venta["id_vendedor"];

                    $vendedor = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                    $itemCliente = "id";
                    $valorCliente = $venta["idCliente"];

                    $cliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

                    $itemCategoria = "id";
                    $valorCategoria = $venta["categoria"];

                    $categoria = ControladorCategorias::ctrMostrarCategorias($itemCategoria, $valorCategoria);


                    $itemBarco = "id";
                    $valorBarco = $venta["barco"];

                    $barcos = ControladorBarcos::ctrMostrarBarcos($itemBarco, $valorBarco);


                    $itemRuta = "id";
                    $valorRuta = $venta["idRuta"];

                    $ruta = ControladorRutas::ctrMostrarRutas($itemRuta, $valorRuta);
                    // var_dump($ruta);


                ?>



                       <!-- ENTRADA PARA CONFIRMACION DE PROVEEDOR -->
                      <div class="col-md-4">

                        <div class="form-group">
                            <label for="">confirmacion Proveedor</label>
                              <div class="input-group">
                  
                                <span class="input-group-addon"><i class="fa fa-code "></i></span> 

                                 <input type="text" class="form-control" name="editarConfirmacion" value="<?php echo $venta["cProveedor"]; ?>" placeholder="# Confirmacion" >

                               </div>

                        </div>

                      </div>


                       <!-- ENTRADA PARA CATEGORIA -->
                
                      <div class="col-md-4">

                        <div class="form-group">
                             <label for="">Categoria Servicio</label>
                          <div class="input-group">
                  
                          <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                           <select class="form-control categoriaServico " id="categoriaServico" name="editarCategoriaServicio" readonly required>
                      
                           <option value="<?php echo $categoria["id"]; ?>"><?php echo $categoria["categoria"]; ?></option>

                      
      
                           </select>

                          </div>

                        </div>

                      </div>

                      <!--=====================================
                    ENTRADA DEL CÓDIGO
                    ======================================--> 
                    <div class="col-md-2">
                        <div class="form-group">
                           <label for="">Folio</label>
                             <div class="input-group">
                        
                                 <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                 <input type="number" class="form-control" id="nuevoFolio" class="nuevoFolio" name="EditarnuevoFolio" value="<?php echo $venta["folio"]; ?>" readonly required>

                              </div>
                    
                         </div>

                    </div>
                             <!--=====================================
                    ENTRADA DEL VENDEDOR
                ======================================-->
               <div class="col-md-2">
                    <div class="form-group">
                    <label for="">Vendedor:</label>
                      <div class="input-group">
                        
                        <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                        <input type="text" class="form-control" id="nuevoVendedor" value="<?php echo $vendedor["nombre"]; ?>" readonly>

                    <input type="hidden" name="idVendedor" value="<?php echo $vendedor["id"]; ?>">

                      </div>

                    </div> 
                  
                </div>


                     <!-- ENTRADA PARA BARCO -->
                
                      <div class="col-md-6">

                        <div class="form-group">
                             <label for="">Crucero</label>
                          <div class="input-group">
                  
                          <span class="input-group-addon"><i class="fa fa-ship"></i></span> 

                           <select class="form-control nombreCrucero" id="nombreCrucero" name="editarNombreCrucero" required>
                      
                          <option value="<?php echo $barcos["id"]; ?>"><?php echo $barcos["nombre"]; ?></option>

                          <?php

                          $item = null;
                          $valor = null;

                          $categorias = ControladorBarcos::ctrMostrarBarcos($item, $valor);

                          foreach ($categorias as $key => $value) {
                            
                            echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';

                          }
                          echo ' <input type="hidden" id="imgBarco" name="imgBarco" value="'.$barcos["imagen"].'">';


                        

                          ?>


                           </select>

                          </div>

                        </div>

                      </div>


                           <!-- ENTRADA PARA RUTA -->
                
                      <div class="col-md-6">

                        <div class="form-group">
                             <label for="">Ruta.</label>
                          <div class="input-group">
                  
                          <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                           <select class="form-control ruta " id="ruta" name="editarRuta" required>
                      
                          <option value="<?php echo $ruta["id"]; ?>"><?php echo $ruta["descripcion"]; ?></option>

                          <?php

                          $item = null;
                          $valor = null;

                          $categorias = ControladorRutas::ctrMostrarRutas($item, $valor);

                          foreach ($categorias as $key => $value) {
                            
                            echo '<option value="'.$value["id"].'">'.$value["descripcion"].'</option>';

                          }
                          

                          ?>

      
                           </select>


                          </div>
                          <input type="hidden" id="htmlRuta" name="editarDatos" value='<?php echo $ruta["html"]; ?>'>
                          <input type="hidden" id="imgRuta"  name="imgRuta" value='<?php echo $ruta["imagen"]; ?>'>

                        </div>

                      </div>


                    <!--=====================================
                    ENTRADA DEL CLIENTE
                    ======================================--> 

                      <div class="col-md-8">


                        <div class="form-group">
                          <label for="">Cliente</label>
                          <div class="input-group">
                            
                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
                            
                            <select class="form-control" id="seleccionarCliente" name="editarCliente" required>

                            <option value="<?php echo $cliente["id"]; ?>"><?php echo $cliente["email"]; ?></option>

                            <?php

                              $item = null;
                              $valor = null;

                              $categorias = ControladorClientes::ctrMostrarClientes($item, $valor);

                               foreach ($categorias as $key => $value) {

                                 echo '<option value="'.$value["id"].'">'.$value["email"].'</option>';

                               }

                            ?>

                            </select>
                            
                            <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal">Agregar cliente</button></span>
                          
                          </div>
                        
                        </div>

                      </div>

                       <!--=====================================
                    ENTRADA ADULTOS
                    ======================================--> 

                     <div class="col-md-2">

                        <div class="form-group">

                            <label for="">Adultos</label>

                              <div class="input-group">
                        
                                 <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                 

                                 <select name="cantidadAdultos" class="form-control input-md cantidadAdultos" id="cantidadAdultos" required>

                                   <option value="<?php echo $venta["adultos"]; ?>"><?php echo $venta["adultos"]; ?></option>
                                    <option value=1>1</option>
                                    <option value=2>2</option>
                                    <option value=3>3</option>
                                    <option value=4>4</option>
                                    <option value=5>5</option>
                       

                                 </select>
                        
                               
                              </div>
                    
                        </div>

                    </div>


                       <!--=====================================
                    ENTRADA Menores
                    ======================================--> 

                     <div class="col-md-2">

                        <div class="form-group">

                            <label for="">Menores</label>

                              <div class="input-group">
                        
                                 <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                 

                                 <select name="cantidadMenores" class="form-control input-md cantidadMenores" id="cantidadMenores">

                                     <option value="<?php echo $venta["menores"]; ?>"><?php echo $venta["menores"]; ?></option>

                                    <option value=1>1</option>
                                    <option value=2>2</option>
                                    <option value=3>3</option>
                                    <option value=4>4</option>
                                    <option value=5>5</option>
                       

                                 </select>
                        
                               
                              </div>
                    
                        </div>

                    </div>

                
                    <!--=====================================
                    ENTRADA NOMBRES
                    ======================================--> 
             <div id="mostrar" class="mostrar">
                     <div class="col-md-5">

                        <div class="form-group">

                          <label for="">Nombre pasajeros:</label>

                             <div class="input-group nombrePasajeros ">
                        
                                <span class="input-group-addon "><i class="fas fa-user-alt"></i></i></span>
 

                                    <div id="pasajeros">

                                      <?php foreach ($listaPasajeros as $key => $item)
                                      {
                                      
                                      echo '<input type="text" class="form-control pasajero" name="nombre" value="'.$item["nombre"].'" >';

                                      echo "<br>";
                                       

                                      }

                                      ?>
                                   
                                   </div>
                                    <input type="hidden" id="listaPasajeros" name="listaPasajeros">

                             </div>
                    
                       </div>

                    </div>


                     <!--=====================================
                    ENTRADA FECHAS DE NACIMIENTO
                    ======================================--> 
                      <div class="col-md-3">

                        <div class="form-group">

                          <label for="">Fecha de nacimiento:</label>

                             <div class="input-group nacimientoPasajeros ">
                        
                                <span class="input-group-addon "><i class="fas fa-birthday-cake"></i></span>

                                    <div id="nacimiento">
                                       <?php foreach ($listaPasajeros as $key => $item)
                                      {
                                      
                                      echo '<input type="text" class="form-control nacimiento"  value="'.$item["nacimiento"].'" >';
                                      echo "<br>";
                                       

                                      }

                                      ?>
                                   
                                        

                                      
                         
                                   </div>

                             </div>
                    
                       </div>

                    </div>
                     <!--=====================================
                    ENTRADA GENERO
                    ======================================--> 
                      <div class="col-md-3">

                        <div class="form-group">

                          <label for="">Genero:</label>

                             <div class="input-group generoPasajeros ">
                        
                                <span class="input-group-addon "><i class="fas fa-transgender"></i></span>

                                    <div id="generosPasajeros">

                                        <?php foreach ($listaPasajeros as $key => $item)
                                      {
                                      
                                      echo '<input type="text" class="form-control genero "  value="'.$item["genero"].'" >';
                                      echo "<br>";
                                       

                                      }

                                      ?>
                                   
                                      
                                       
                                   </div>

                             </div>
                    
                       </div>

                    </div>
                     <!--=====================================
                    ENTRADA NOMBRES
                    ======================================--> 
                   
                     <div class="col-md-5" >

                        <div class="form-group" >

                          <label for="">Nombre pasajeros Menores de edad:</label>

                             <div class="input-group nombrePasajeros ">
                        
                                <span class="input-group-addon "><i class="fas fa-user-alt"></i></i></span>

                                    <div id="pasajerosMenores">
                                        

                                      
                         
                                   </div>

                             </div>
                    
                       </div>

                    </div>
                     <!--=====================================
                    ENTRADA FECHAS DE NACIMIENTO
                    ======================================--> 
                      <div class="col-md-3">

                        <div class="form-group">

                          <label for="">Fecha de nacimiento:</label>

                             <div class="input-group nacimientoPasajeros ">
                        
                                <span class="input-group-addon "><i class="fas fa-birthday-cake"></i></span>

                                    <div id="nacimientoMenores">
                                        

                                      
                         
                                   </div>

                             </div>
                    
                       </div>

                    </div>

                     <!--=====================================
                    ENTRADA GENERO
                    ======================================--> 
                      <div class="col-md-3">

                        <div class="form-group">

                          <label for="">Genero:</label>

                             <div class="input-group generoPasajeros ">
                        
                                <span class="input-group-addon "><i class="fas fa-transgender"></i></span>

                                    <div id="generosPasajerosMenores">

                                      
                                       
                                   </div>

                             </div>
                    
                       </div>

                    </div>
           


                        <!--=====================================
                    ENTRADA FECHAS DE INICIO
                    ======================================--> 
                      <div class="col-md-6">

                        <div class="form-group">

                          <label for="">Fecha de inicio:</label>

                             <div class="input-group nacimientoPasajeros ">
                        
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                                
                                <input type="text" class="form-control input-md inicio" name="editarFechaInicio" placeholder="Fecha de incio " data-inputmask="'alias': 'yyyy/mm/dd'" data-mask value="<?php echo $venta["fechaInicio"]; ?>"required>

                             </div>
                    
                       </div>

                    </div>

                        <!--=====================================
                    ENTRADA FECHAS DE Terminacion
                    ======================================--> 
                      <div class="col-md-6">

                        <div class="form-group">

                          <label for="">Fecha de terminacion:</label>

                             <div class="input-group nacimientoPasajeros ">
                        
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                                <input type="text" class="form-control input-md" name="editarFechaFinal" placeholder="Fecha de terminacion " data-inputmask="'alias': 'yyyy/mm/dd'" data-mask value="<?php echo $venta["fechaFinal"]; ?>" required>

                             </div>
                    
                       </div>

                    </div>

                        <!--=====================================
                    ENTRADA HABITACION
                    ======================================--> 
                      <div class="col-md-6">

                        <div class="form-group">

                          <label for="">Habitacion:</label>

                             <div class="input-group nacimientoPasajeros ">
                        
                                <span class="input-group-addon"><i class="fas fa-person-booth"></i></span> 

                                <input type="text" class="form-control input-md" name="editarHabitacion" value="<?php echo $venta["habitacion"]; ?>" required>

                             </div>
                    
                       </div>

                    </div>


                      <!--=====================================
                    ENTRADA NUMERO HABITACION
                    ======================================--> 
                      <div class="col-md-6">

                        <div class="form-group">

                          <label for="">Numero de Habitacion:</label>

                             <div class="input-group nacimientoPasajeros ">
                        
                                <span class="input-group-addon"><i class="fas fa-sort-numeric-up"></i></span> 

                                <input type="text" class="form-control input-md" name="editarNumeroHabitacion" value="<?php echo $venta["numHabitacion"]; ?>" required>

                             </div>
                    
                       </div>

                    </div>

                          <!--=====================================
                    ENTRADA COMIDAS
                    ======================================--> 
                      <div class="col-md-6">

                        <div class="form-group">

                          <label for="">Comidas</label>

                             <div class="input-group nacimientoPasajeros ">
                        
                                <span class="input-group-addon"><i class="fas fa-utensils"></i></span> 

                                <input type="text" class="form-control input-md" name="editarComida" value="<?php echo $venta["mealPlan"]; ?>"required>

                             </div>
                    
                       </div>

                    </div>

                             <!--=====================================
                    ENTRADA ESTATUS
                    ======================================--> 
                      <div class="col-md-6">

                        <div class="form-group">

                          <label for="">estatus de reserva</label>

                             <div class="input-group nacimientoPasajeros ">
                        
                                <span class="input-group-addon"><i class="fas fa-spinner"></i></span> 

                                <select name="editarEstatus" id="estatus" class="form-control input-md estatus" >
                                   <option value="<?php echo $venta["estatus"]; ?>"><?php echo $venta["estatus"]; ?></option>
                                    <option value=" activo">activo</option>
                                    <option value="inactivo">inactivo</option>
                                </select>

                             </div>
                    
                       </div>

                    </div>


                             <!--=====================================
                    ENTRADA VENCIMIENTO
                    ======================================--> 
                      <div class="col-md-12">

                        <div class="form-group">

                          <label for="">Vencimiento:</label>

                             <div class="input-group nacimientoPasajeros ">
                        
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                                <input type="text" class="form-control input-md" name="editarVencimiento" value="<?php echo $venta["vencimiento"]; ?>" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

                             </div>
                    
                       </div>

                    </div>

                     <hr>
                     <!--=====================================
                  ENTRADA IMPUESTOS Y TOTAL
                  ======================================-->
                  
                  <div class="col-xs-12 pull-right">
                    
                    <table class="table">

                      <thead>

                        <tr>
                        
                          <th>Costo</th>      
                        </tr>

                      </thead>

                      <tbody>
                      
                        <tr>
                          
                        

                           <td style="width: 50%">
                            
                            <div class="input-group">
                           
                              <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                              <input type="number" min="1" class="form-control" id="nuevoTotalVenta" name="editarTotalReserva" value="<?php echo $venta["costo"]; ?>"  required>
                              
                        
                            </div>

                          </td>

                        </tr>

                      </tbody>

                    </table>

                  </div>

                <!--=====================================
                ENTRADA MÉTODO DE PAGO
                ======================================-->

                <div class="form-group ">
                  
                  <div class="col-xs-6" style="padding-right:0px">
                    
                     <div class="input-group">
                  
                      <select class="form-control" id="nuevoMetodoPago" name="editarMetodoPago" required>
                       <option value="<?php echo $venta["metodoPago"]; ?>"><?php echo $venta["metodoPago"]; ?></option>
                        <option value="oxxo">Oxxo</option>
                        <option value="Paypal">paypal</option>
                        <option value="tarjetaCredito">Tarjeta Crédito</option>
                        <option value="tarjetaDebito">Tarjeta Débito</option>                  
                      </select>    

                    </div>

                  </div>

                  <div class="col-xs-6" style="padding-left:0px">
                        
                    <div class="input-group ">
                         
                      <input type="text" class="form-control " id="nuevoCodigoTransaccion" name="editarCodigoTransaccion" value="<?php echo $venta["codigo"]; ?>"  required>
                           
                      <span class="input-group-addon "><i class="fa fa-lock"></i></span>

                      <input type="hidden" name="metodoPago">
                      
                    </div>

                  </div>

                </div>

                         <!--=====================================
                    ENTRADA PARA COMENTARIOS
                    ======================================--> 
                      <div class="col-md-12">

                        <div class="form-group">

                          <label for="">Comentarios:</label>

                             <div class="input-group nacimientoPasajeros ">
                        
                                <span class="input-group-addon"><i class="fas fa-comments"></i></span> 

                                
                              <textarea class="form-control" id="comentarios" name="comentarios"  rows="3"><?php echo $venta["comentarios"]; ?></textarea>
                             </div>
                    
                       </div>

                    </div>

             </div>

             <div class="box-footer col-md-5">

                <button  class="btn btn-primary pull-right boton" onclick="listarPasajeros()" id="boton">Guardar reserva</button>

              </div>

  
            </div>
                
              </form>
                  <?php
                  $editarReserva = new ControladorReservas();
                  $editarReserva -> ctrEditarReserva();
               ?>


         </div>

        </div>

      </div>

    
    </div>
  
  </section>
 
</div>