<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Empleados y/o colaboradores
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
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
           <th>Nombre</th>
           <th>nacionalidad</th>
           <th>email</th>
           <th>Teléfono</th>
           <th>Ext</th>
           <th style="width:10px">pais</th>
           <th>Area</th> 
           <th>Puesto</th>
           <th>Ingreso al sistema</th>
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

                    <td class="text-uppercase">'.$value["nombre"].'</td>
                    <td>'.$value["nacionalidad"].'</td>
                    <td>'.$value["email"].'</td>
                    <td>'.$value["telefono"].'</td>
                     <td>'.$value["extencion"].'</td>
                     <td>'.$value["pais"].'</td>
                     <td>'.$value["area"].'</td>
                     <td>'.$value["puesto"].'</td>
                     <td>'.$value["fecha_alta"].'</td>

                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarCategoria" idCategoria="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarCategoria"><i class="fa fa-pencil"></i></button>

                        <button class="btn btn-danger btnEliminarCategoria" idCategoria="'.$value["id"].'"><i class="fa fa-times"></i></button>

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
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

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
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefonoPersonal" placeholder="Ingresar teléfono personal" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>



            <!-- ENTRADA PARA EXTENCION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="nuevaExtencion" placeholder="Ingresar extencion" required>

              </div>

            </div>


             <!-- ENTRADA PARA LA AREA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaArea" placeholder="Ingresar area" required>

              </div>

            </div>

             <!-- ENTRADA PARA PUESTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoPuesto" placeholder="Ingresar puesto" required>

              </div>

            </div>

             <!-- ENTRADA PARA DNI -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoDni" placeholder="Ingresar DNI" required>

              </div>

            </div>

            <!-- ENTRADA PARA folio -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoFolioDni" placeholder="Ingresar DNI" required>

              </div>

            </div>


            <!-- ENTRADA PARA PAIS -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoPais" placeholder="Ingresar pais" required>

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
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

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

          <button type="submit" class="btn btn-primary">Guardar cliente</button>

        </div>

      </form>


      <?php

        $crearEmpleado = new ControladorEmpleado();
        $crearEmpleado -> ctrCrearEmpleado();

      ?>

    </div>

  </div>

</div>


<!--  <tr>

            <td>1</td>

            <td>Juan Villegas</td>

            <td>mexicano</td>

            <td>juan@hotmail.com</td>

            <td>555 57 67</td>

            <td>54</td>

            <td>calle 27 # 40 - 36</td>

            <td>ventas</td>

            <td>vendedor</td>

            <td>2017-12-11 12:05:32</td>

            <td>

              <div class="btn-group">

                 <button class="btn btn-info"><i class="fa fa-address-card"> detalles</i></button>
                  
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>  

            </td>

          </tr>
 -->