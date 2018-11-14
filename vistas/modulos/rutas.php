<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Rutas
    
    </h1>

    <ol class="breadcrumb">
      
      
      <li><a href="inicio"><i class="fas fa-tachometer-alt"></i> Inicio</a></li>
      
      <li class="active">Administrar Rutas</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarRuta">
          
          Agregar Ruta

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaRutas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Imagen</th>
           <th>Código</th>
           <th>Descripción</th>
           <th>noches</th>
           <th>embarque</th>
           <th>desembarque</th>
           <th>Acciones</th>
           
         </tr> 

        </thead>

       

       </table>

      </div>

    </div>

  </section>

</div>


<!--=====================================
MODAL AGREGAR RUTA
======================================-->

<div id="modalAgregarRuta" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

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

            <!-- ENTRADA PARA EL CÓDIGO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoCodigoRuta" name="nuevoCodigoRuta" placeholder="Ingresar código" readonly required>

              </div>

            </div>


         

            <!-- ENTRADA PARA EL DESCRIPCION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-clipboard"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Descripcion" required>
                

              </div>

            </div>

           

            <!-- ENTRADA PARA NOCHES -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-moon"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevasNoches" min="1" placeholder="Noches" required>

              </div>

            </div>
            <!-- ENTRADA PARA LA PUERTOS -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-anchor"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevosPuertos" min="1" placeholder="Puertos" required>

              </div>

            </div>


            <!-- ENTRADA PARA EMBARQUE-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-ship"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoEmbarque"  placeholder="Embarque" required>

              </div>

            </div>


           

            <!-- ENTRADA PARA DESEMBARQUE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-ship"></i></span> 

                 <input type="text" class="form-control input-lg" id="nuevoDesembaque" name="nuevoDesembaque" placeholder="Desembarque" required>

               

              </div>

            </div>


             <!-- ENTRADA PARA TABLAHTML -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-code"></i></span> 

                <textarea class="form-control" id="nuevoHtml" name="nuevoHtml" placeholder="html"></textarea>

              </div>

            </div>

           
            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR IMAGEN</div>

              <input type="file" class="nuevaImagenRuta" id="nuevaImagenRuta" name="nuevaImagen">

              <p class="help-block">Peso máximo de la imagen 2MB</p>

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

            </div>

  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Ruta</button>

        </div>

      </form>


    
      <?php

          $crearRuta = new ControladorRutas();
          $crearRuta -> ctrCrearRuta();

        ?>  
     


    </div>

  </div>

</div>



<!--=====================================
MODAL EDITAR RUTA
======================================-->

<div id="modalEditarRuta" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Barco</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg" class="editarCategoriaRuta" readonly name="editarCategoriaRuta" required>
                  
                 
                  <option id="editarCategoriaRuta"></option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL CÓDIGO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="text" class="form-control input-lg" id="editarCodigoRuta" name="editarCodigoRuta"  readonly required>

              </div>

            </div>


         

            <!-- ENTRADA PARA EL DESCRIPCION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-clipboard"></i></span> 

                <input type="text" class="form-control input-lg" name="editarDescripcion" id="editarDescripcion" required>
                

              </div>

            </div>

           

            <!-- ENTRADA PARA NOCHES -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-moon"></i></span> 

                <input type="number" class="form-control input-lg" name="editarNoches" id="editarNoches" min="1"  required>

              </div>

            </div>
            <!-- ENTRADA PARA LA PUERTOS -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-anchor"></i></span> 

                <input type="number" class="form-control input-lg" name="editarPuertos" id="editarPuertos" min="1"  required>

              </div>

            </div>


            <!-- ENTRADA PARA EMBARQUE-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-ship"></i></span> 

                <input type="text" class="form-control input-lg" name="editarEmbarque"  id="editarEmbarque"  required>

              </div>

            </div>


           

            <!-- ENTRADA PARA DESEMBARQUE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-ship"></i></span> 

                 <input type="text" class="form-control input-lg" id="editarDesembaque" name="editarDesembaque"  required>

               

              </div>

            </div>


             <!-- ENTRADA PARA TABLAHTML -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-code"></i></span> 

                <textarea class="form-control" id="editarHtml" name="editarHtml" ></textarea>

              </div>

            </div>

           
            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR IMAGEN</div>

              <input type="file" class="nuevaImagenRuta" id="nuevaImagenRuta" name="nuevaImagenRuta">

              <p class="help-block">Peso máximo de la imagen 2MB</p>

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
               <input type="hidden" name="imagenActual" id="imagenActual">


            </div>

  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Cambios</button>

        </div>

      </form>


    
      <?php

          $editarRuta = new ControladorRutas();
          $editarRuta -> ctrEditarRuta();

        ?>  
     


    </div>

  </div>

</div>

<?php

  $eliminarRuta = new ControladorRutas();
  $eliminarRuta -> ctrEliminarRuta();

?>  




