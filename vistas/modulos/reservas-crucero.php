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
              
                            <span class="input-group-addon"><i class="fa fa-code"></i></span> 

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
                <div class="col-md-4">
                    <div class="form-group">
                       <label for="">Folio</label>
                         <div class="input-group">
                    
                             <span class="input-group-addon"><i class="fa fa-key"></i></span>
                             <input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="10001" readonly>

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
                        
                        <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" required>

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
                ENTRADA PASAJEROS
                ======================================--> 

                 <div class="col-md-4">

                    <div class="form-group">

                        <label for="">pasajeros</label>

                          <div class="input-group">
                    
                             <span class="input-group-addon"><i class="fa fa-users"></i></span>
                             

                             <select name="cantidadPasajeros" class="form-control input-md cantidadPasajeros" id="cantidadPasajeros" required>

                                <option value="">Cantidad pasajeros</option>
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
                ENTRADA NOMBRES
                ======================================--> 
               
                 <div class="col-md-5">

                    <div class="form-group">

                      <label for="">Nombre pasajeros:</label>

                         <div class="input-group nombrePasajeros ">
                    
                            <span class="input-group-addon "><i class="fas fa-user-alt"></i></i></span>

                                <div id="pasajeros">
                                    

                                  
                     
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
