<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      Administrar Barcos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a></li>
      
      <li class="active">Administrar Barcos</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarBarco">
          
          Agregar Barco
        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th> 
           <th>Imagen</th>
           <th>Nombre</th>
           <th>Compañia</th>
           <th>Tripulacion</th>
           <th>Categoria</th>
           <th>Velocidad</th>
           <th>Cubiertas</th> 
           <th>Largo</th>
           <th>Ancho</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
          
          <tr>

            <td>1</td>

            <td>Juan Villegas</td>

            <td>8161123</td>

            <td>juan@hotmail.com</td>

            <td>555 57 67</td>

            <td>calle 27 # 40 - 36</td>

            <td>1982-15-11</td>

            <td>2017-12-11 12:05:32</td>

            <td>35</td>

            <td>2017-12-11 12:05:32</td>

            <td>

              <div class="btn-group">
                  
                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>  

            </td>

          </tr>

          
        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR BARCO
======================================-->

<div id="modalAgregarBarco" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Barco</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-ship"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Nombre del barco" required>

              </div>

            </div>

            <!-- ENTRADA PARA COMPAÑIA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-industry"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="nuevaCompania" placeholder="Compañia" required>

              </div>

            </div>

            <!-- ENTRADA PARA PASAJEROS -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-list-ol"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevosPasajeros" min="1" placeholder="Pasajeros" required>

              </div>

            </div>
            <!-- ENTRADA PARA LA CONSTRUCCION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-cubes"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevaConstruccion" min="1" placeholder="Construccion" required>

              </div>

            </div>


            <!-- ENTRADA PARA TONELAJE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-weight-hanging"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoTonelaje" min="1" placeholder="Tonelaje" required>

              </div>

            </div>


            <!-- ENTRADA PARA LA TRIPULACION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-users"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevaTripulacion"  placeholder="Tripulacion" required>

              </div>

            </div>

 <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg" id="nuevaCategoria" name="nuevaCategoria" required>
                  
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

            <!-- ENTRADA PARA DESCRIPCION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-file-prescription"></i></span> 

                <textarea class="form-control" id="message-text" name="nuevaDescripcion"></textarea>

              </div>

            </div>


             <!-- ENTRADA PARA VELOCIDAD -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-tachometer-alt"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaVelocidad" placeholder="velocidad" required>

              </div>

            </div>

             <!-- ENTRADA PARA EL CUBIERTAS -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-ship"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevaCubiertas" placeholder="Cubiertas" required>

              </div>

            </div>

             <!-- ENTRADA PARA LARGO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                
                <span class="input-group-addon"><i class="fas fa-arrows-alt-h"></i></span>

                <input type="number" class="form-control input-lg" name="nuevoLargo" placeholder="Largo" required>

              </div>

            </div>

             <!-- ENTRADA PARA ANCHO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                 <span class="input-group-addon"><i class="fas fa-arrows-alt"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoAncho" placeholder="Ancho" required>

              </div>

            </div>

             <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR IMAGEN</div>

              <input type="file" id="nuevaImagen" name="nuevaImagen">

              <p class="help-block">Peso máximo de la imagen 2MB</p>

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="100px">

            </div>

  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Barco</button>

        </div>

      </form>




    </div>

  </div>

</div>


