<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Empleados y/o colaboradores
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a></li>
      
      <li class="active">Administrar Empleados</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">
          
          Agregar empleado/colaborador

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th style="width:10px">Nombre</th>
           <th style="width:10px">nacionalidad</th>
           <th style="width:10px">email</th>
           <th style="width:10px">Teléfono</th>
           <th style="width:10px">Ext</th>
           <th style="width:10px">pais</th>
           <th style="width:10px">Area</th> 
           <th style="width:10px">Puesto</th>
           <th style="width:10px">status</th>
           <th style="width:10px">Acciones</th>

         </tr> 

        </thead>

        <tbody>
          
           <?php

          $item = null;
          $valor = null;

          $empleados = ControladorEmpleado::ctrMostrarEmpleado($item, $valor);

          // var_dump($empleados);

          foreach ($empleados as $key => $value) {
           
            echo ' <tr>

                    <td>'.($key+1).'</td>

                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["nacionalidad"].'</td>
                    <td>'.$value["email"].'</td>
                    <td>'.$value["telefono"].'</td>
                     <td>'.$value["extencion"].'</td>
                     <td>'.$value["pais"].'</td>
                     <td>'.$value["area"].'</td>
                     <td>'.$value["puesto"].'</td>';

                     if($value["estatus"] === "activo"){

                    echo '<td><button class="btn btn-success">Activo</button></td>';

                  }else{

                    echo '<td><button class="btn btn-danger">Inactivo</button></td>';

                  }             
                     
                     echo '
                    <td>

                      <div class="btn-group">

                       <button class="btn btn-info btnDetalles" idEmpleado="'.$value["id"].'" data-toggle="modal" data-target="#mostarDetalles"><i class="fa fa-user-plus"></i></button>
                          
                        <button class="btn btn-warning btnEditarEmpleado" idEmpleado="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarEmpleado"><i class="far fa-edit"></i></button>

                      </div>  

                    </td>

                  </tr>';
          }

        ?>

         
          
        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR EMPLEADO
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

          <h4 class="modal-title">Crear Empleado</h4>

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

                <input type="text" class="form-control input-lg" name="nuevoEmpleado" placeholder="Ingresar nombre" required>

              </div>

            </div>

             <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoDob" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

              </div>

            </div>

             <!-- ENTRADA PARA NACIONALIDAD -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-globe"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaNacionalidad" placeholder="Nacionalidad" required>

              </div>

            </div>


             <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email corporativo" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL PERSONAL-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmailPersonal" placeholder="Ingresar email personal" required>

              </div>

            </div>



            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono corporativo" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>


            <!-- ENTRADA PARA EL TELÉFONO PERSONAL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-mobile"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefonoPersonal" placeholder="Ingresar teléfono personal" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>



            <!-- ENTRADA PARA EXTENCION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="nuevaExtencion" placeholder="Ingresar extencion" required>

              </div>

            </div>


             <!-- ENTRADA PARA LA AREA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-sitemap"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaArea" placeholder="Ingresar area" required>

              </div>

            </div>

             <!-- ENTRADA PARA PUESTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-sitemap"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoPuesto" placeholder="Ingresar puesto" required>

              </div>

            </div>

             <!-- ENTRADA PARA DNI -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-address-card"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoDni" placeholder="Ingresar DNI" required>

              </div>

            </div>

            <!-- ENTRADA PARA folio -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoFolioDni" placeholder="Folio DNI" required>

              </div>

            </div>


            <!-- ENTRADA PARA PAIS -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-globe"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoPais" placeholder="Ingresar pais de residencia" required>

              </div>

            </div>

              <!-- ENTRADA PARA DIRECCION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>

              </div>

            </div>

              <!-- ENTRADA PARA CODIGO POSTAL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar codigo postal" required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Empleado</button>

        </div>

      </form>


      <?php

        $crearEmpleado = new ControladorEmpleado();
        $crearEmpleado -> ctrCrearEmpleado();

      ?>

    </div>

  </div>

</div>


<!--=====================================
MODAL EDITAR EMPLEADO
======================================-->

<div id="modalEditarEmpleado" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Empleado</h4>

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

                <input type="text" class="form-control input-lg" name="editarEmpleado"  id="editarEmpleado"  required>
                <input type="hidden" id="idEmpleado" name="idEmpleado">

              </div>

            </div>

             <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="text" class="form-control input-lg" name="editarDob"  id="editarDob" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

              </div>

            </div>

             <!-- ENTRADA PARA NACIONALIDAD -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-globe"></i></span> 

                <input type="text" class="form-control input-lg" name="editarNacionalidad" id="editarNacionalidad" required>

              </div>

            </div>


             <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="editarEmail" id="editarEmail"  required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL PERSONAL-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="editarEmailPersonal" id="editarEmailPersonal" required>

              </div>

            </div>



            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>


            <!-- ENTRADA PARA EL TELÉFONO PERSONAL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-mobile"></i></span> 

                <input type="text" class="form-control input-lg" name="editarTelefonoPersonal" id="editarTelefonoPersonal"data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>



            <!-- ENTRADA PARA EXTENCION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="editarExtencion" id="editarExtencion"  required>

              </div>

            </div>


             <!-- ENTRADA PARA LA AREA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-sitemap"></i></span> 

                <input type="text" class="form-control input-lg" name="editarArea" id="editarArea"  required>

              </div>

            </div>

             <!-- ENTRADA PARA PUESTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-sitemap"></i></span> 

                <input type="text" class="form-control input-lg" name="editarPuesto" id="editarPuesto"  required>

              </div>

            </div>

             <!-- ENTRADA PARA DNI -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-address-card"></i></span> 

                <input type="text" class="form-control input-lg" name="editarDni" id="editarDni"  required>

              </div>

            </div>

            <!-- ENTRADA PARA folio -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="text" class="form-control input-lg" name="editarFolioDni" id="editarFolioDni"  required>

              </div>

            </div>


            <!-- ENTRADA PARA PAIS -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-globe"></i></span> 

                <input type="text" class="form-control input-lg" name="editarPais" id="editarPais" required>

              </div>

            </div>

              <!-- ENTRADA PARA DIRECCION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="editarDireccion" id="editarDireccion" required>

              </div>

            </div>

              <!-- ENTRADA PARA CODIGO POSTAL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="number" class="form-control input-lg" name="editarCodigo" id="editarCodigo" required>

              </div>

            </div>

             <!-- ENTRADA PARA CAMBIO DE STATUS -->
            
             <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-code-fork"></i></span> 
              
                <input type="text" class="form-control input-lg" name="editarEstado" id="editarEstado" required>

              </div>

            </div>
            
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

    </div>

  </div>

</div>


<?php

$editarEmpleado = new ControladorEmpleado();
$editarEmpleado -> ctrEditarEmpleado();

?> 



