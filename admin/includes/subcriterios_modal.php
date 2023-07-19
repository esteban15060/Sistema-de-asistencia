<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Agregar Subcriterios</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="subcriterio_add.php">
          		  <div class="form-group">
                  	<label for="nombre_subcriterio" class="col-sm-3 control-label">Nombre de Subcriterio</label>

                  	<div class="col-sm-8">
                    	<input type="text" class="form-control" id="nombre_subcriterio" name="nombre_subcriterio" required>
                  	</div>
                  </div>
                  <div class="form-group">
                  	<label for="id_criterio" class="col-sm-3 control-label">Criterio</label>

                  	<div class="col-sm-8">
                      <select class="form-control" name="id_criterio" id="id_criterio" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM criterios";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['nombre_criterio']."</option>
                            ";
                          }
                        ?>
                      </select>
                  	</div>
                  </div>
                
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Actualizar Nombre de Criterio</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="subcriterios_edit.php">

            		<input type="hidden" class="id" name="id">
                    <div class="form-group">
                        <label for="edit_nombre_subcriterio" class="col-sm-3 control-label">Nombre de subcriterio</label>

                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="edit_nombre_subcriterio" name="nombre_subcriterio">
                        </div>
                    </div>
                    <div class="form-group">
                  	<label for="edit_id_criterio" class="col-sm-3 control-label">Criterio</label>

                  	<div class="col-sm-8">
                    	<select class="form-control" name="edit_cri_nombre" id="edit_cri_nombre" required>
                        	<option selected id="criterio_val"></option>
                        	<?php
							$sql = "SELECT * FROM criterios";
							$query = $conn->query($sql);
							while($prow = $query->fetch_assoc()){
								echo "
								<option value='".$prow['id']."'>".$prow['nombre_criterio']."</option>
								";
							}
							?>
                      	</select>
                  	</div>
                  </div>

                
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Actualizar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Eliminando...</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="subcriterios_delete.php">
            		<input type="hidden" class="id" name="id">
            		<div class="text-center">
	                	<p>Eliminar Subcriterio</p>
	                	<h2 id="del_nombre" class="bold"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Eliminar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


     