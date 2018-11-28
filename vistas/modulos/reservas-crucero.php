<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
     Reservas Crucero
      
      <small>Crear reserva</small>
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a></li>
      
      <li class="active">Tablero</li>
    
    </ol>

  </section>


  <section class="content">

    <!-- Default box -->
    <div class="box">

      <div class="box-header with-border">

        <h3 class="box-title">Reservas</h3>

      </div>

      <div class="box-body">

        <div class="panel panel-info">

          <div class="panel-heading">

            <h2 style="text-align: center;">Crear reservacion</h2>
            
          </div>

          <div class="panel-body">



           <form role="form" method="post" class="formularioReserva">

              <div class="row">


                   <!-- ENTRADA PARA CONFIRMACION DE PROVEEDOR -->
                  <div class="col-md-4">

                    <div class="form-group">
                        <label for="">confirmacion Proveedor</label>
                          <div class="input-group">
              
                            <span class="input-group-addon"><i class="fa fa-code "></i></span> 

                             <input type="text" class="form-control " name="nuevaConfirmacion" placeholder="# Confirmacion" >

                           </div>

                    </div>

                  </div>


                   <!-- ENTRADA PARA CATEGORIA -->
            
                  <div class="col-md-4">

                    <div class="form-group">
                         <label for="">Categoria Servicio</label>
                      <div class="input-group">
              
                      <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                       <select class="form-control " id="categoriaServico" name="categoriaServicio" required>
                  
                      <option value="">Selecionar categoría</option>

                      <?php

                      $item = null;
                      $valor = null;

                      $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                      foreach ($categorias as $key => $value) {
                        
                        echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                      }

                      ?>
  
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
                             <input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="10001" readonly>

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

                    <input type="text" class="form-control" id="nuevoVendedor" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

                    <input type="hidden" name="idVendedor" value="<?php echo $_SESSION["id"]; ?>">

                  </div>

                </div> 
              
            </div>


                 <!-- ENTRADA PARA BARCO -->
            
                  <div class="col-md-6">

                    <div class="form-group">
                         <label for="">Crucero</label>
                      <div class="input-group">
              
                      <span class="input-group-addon"><i class="fa fa-ship"></i></span> 

                       <select class="form-control nombreCrucero" id="nombreCrucero" name="nombreCrucero" required>
                  
                      <option value="">Selecionar Barco</option>

                      <?php

                      $item = null;
                      $valor = null;

                      $categorias = ControladorBarcos::ctrMostrarBarcos($item, $valor);

                      foreach ($categorias as $key => $value) {
                        
                        echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';

                      }
                      echo ' <input type="hidden" id="imgBarco" name="imgBarco">';

                    

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

                       <select class="form-control ruta " id="ruta" name="ruta" required>
                  
                      <option value="">Selecionar Ruta</option>

                      <?php

                      $item = null;
                      $valor = null;

                      $categorias = ControladorRutas::ctrMostrarRutas($item, $valor);

                      foreach ($categorias as $key => $value) {
                        
                        echo '<option value="'.$value["id"].'">'.$value["descripcion"].'</option>';

                      }
                       echo ' <input type="hidden" id="imgRuta" name="imgRuta">';
                        echo ' <input type="hidden" id="htmlRuta" name="htmlRuta">';


                      ?>
  
                       </select>

                      </div>

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
                        
                        <select class="form-control" id="seleccionarCliente" name="cliente" required>

                        <option value="">Seleccionar cliente</option>

                        <?php

                          $item = null;
                          $valor = null;

                          $categorias = ControladorClientes::ctrMostrarClientes($item, $valor);

                           foreach ($categorias as $key => $value) {

                             echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';

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

                                <option value="">Adultos</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                   

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
                             

                             <select name="cantidadMenores" class="form-control input-md cantidadMenores" id="cantidadMenores" disabled >

                                <option value="">Menores</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                   

                             </select>
                    
                           
                          </div>
                
                    </div>

                </div>

                  <br>
                  <br>

<br>
<br>
            
                <!--=====================================
                ENTRADA NOMBRES
                ======================================--> 
         <div id="mostrar" class="mostrar" style="display:none;">
                 <div class="col-md-5">

                    <div class="form-group">

                      <label for="">Nombre pasajeros adultos:</label>

                         <div class="input-group nombrePasajeros ">
                    
                            <span class="input-group-addon "><i class="fas fa-user-alt"></i></i></span>


                                <div id="pasajeros">
                                    


                                  
                     
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

                                  
                                   
                               </div>

                         </div>
                
                   </div>

                </div>
                 <!--=====================================
                ENTRADA NOMBRES
                ======================================--> 
               
                 <div class="col-md-5">

                    <div class="form-group">

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
       
<br>
<br>

                    <!--=====================================
                ENTRADA FECHAS DE INICIO
                ======================================--> 
                  <div class="col-md-6">

                    <div class="form-group">

                      <label for="">Fecha de inicio:</label>

                         <div class="input-group nacimientoPasajeros ">
                    
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                            <input type="text" class="form-control input-md inicio" name="fechaInicio" placeholder="Fecha de incio " data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

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

                            <input type="text" class="form-control input-md" name="fechaFinal" placeholder="Fecha de terminacion " data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

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

                            <input type="text" class="form-control input-md" name="nuevaHabitacion" placeholder="Habitacion" required>

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

                            <input type="number" class="form-control input-md" name="nuevoNumeroHabitacion" placeholder="# habitacion" required>

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

                            <input type="text" class="form-control input-md" name="nuevaComida" placeholder="comidas" required>

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

                            <select name="estatus" id="estatus" class="form-control input-md estatus" >
                               <option value="">seleccione una opcion</option>
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

                            <input type="text" class="form-control input-md" name="nuevoVencimiento" placeholder="vencimiento " data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

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

                            
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                         </div>
                
                   </div>

                </div>

         </div>

         <div class="box-footer col-md-5">

            <button  class="btn btn-primary pull-right boton" id="boton">Guardar venta</button>

          </div>



  
                </div>
                
              </form>


         
         </div>

        </div>

      </div>

    
    </div>
  
  </section>
 
</div>
<!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar cliente</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DOCUMENTO RFC -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar rfc" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

             <!-- ENTRADA PARA EL TELÉFONO2 -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono2" placeholder="Ingresar teléfono celular" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cliente</button>

        </div>

      </form>

      <?php
        $crearCliente = new ControladorClientes();
        $crearCliente -> ctrCrearCliente();
      ?>

    </div>

  </div>

</div>
