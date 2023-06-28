<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Agregar Practicante</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="firstname" class="col-sm-3 control-label">Nombre</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="firstname" name="firstname" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="lastname" class="col-sm-3 control-label">Apellido</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="lastname" name="lastname" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="address" class="col-sm-3 control-label">Dirección</label>

                  	<div class="col-sm-9">
                      <textarea class="form-control" name="address" id="address"></textarea>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Información de Contacto</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Género</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="gender" id="gender" required>
                        <option value="" selected>- Seleccionar -</option>
                        <option value="Male">Hombre</option>
                        <option value="Female">Mujer</option>
                      </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="negocio" class="col-sm-3 control-label">Unidad de Negocio</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="negocio" id="negocio" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM negocio";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['nombre_negocio']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="position" class="col-sm-3 control-label">Cargo</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="position" id="position" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM position";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="schedule" class="col-sm-3 control-label">Horario</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="schedule" name="schedule" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM schedules";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['id']."'>".$srow['time_in'].' - '.$srow['time_out']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Foto</label>

                    <div class="col-sm-9">
                      <input type="file" name="photo" id="photo">
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
            	<h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_edit.php">
            		<input type="hidden" class="empid" name="id">
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Nombre</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Apellido</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_address" class="col-sm-3 control-label">Dirección</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="address" id="edit_address"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_contact" class="col-sm-3 control-label">Información de Contacto</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_contact" name="contact">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_gender" class="col-sm-3 control-label">Género</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="gender" id="edit_gender">
                        <option selected id="gender_val"></option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="negocio" class="col-sm-3 control-label">Unidad de Negocio</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="negocio" id="negocio" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM negocio";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['nombre_negocio']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_position" class="col-sm-3 control-label">Cargo</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="position" id="edit_position">
                        <option selected id="position_val"></option>
                        <?php
                          $sql = "SELECT * FROM position";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_schedule" class="col-sm-3 control-label">Horario</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="edit_schedule" name="schedule">
                        <option selected id="schedule_val"></option>
                        <?php
                          $sql = "SELECT * FROM schedules";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['id']."'>".$srow['time_in'].' - '.$srow['time_out']."</option>
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
            	<h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_delete.php">
            		<input type="hidden" class="empid" name="id">
            		<div class="text-center">
	                	<p>ELIMINAR PRACTICANTE</p>
	                	<h2 class="bold del_employee_name"></h2>
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

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="del_employee_name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="employee_edit_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Foto</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Actualizar</button>
              </form>
            </div>
        </div>
    </div>
</div>    

<!-- ADD GRADES -->
<div class="modal fade" id="add_grades">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center" style="margin-left: 10px;"><b>AGREGAR NOTAS</b></h4>
        <p class="text-center"><span class="del_employee_name"></span></p>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="employee_add_grades.php">
          <input type="hidden" class="empid" name="id">
          
          <div class="text-center">
            <div class="row" style="display: inline-block;">
              <div class="col-xs-5 text-center">
                <input type="date" class="form-control" id="fecha1" name="fecha1">
                <label for="fecha1">Fecha Inicio</label>
              </div>
              <div class="col-xs-5 text-center">
                <input type="date" class="form-control" id="fecha2" name="fecha2">
                <label for="fecha2">Fecha Final</label>
              </div>
              <div class="col-xs-2 text-center">
                <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Guardar</button>
              </div>
            </div>
          </div>
          <div style="display: flex; justify-content: center;">
            <div class="form-group" style= "padding-top: 20px; padding-bottom: 20px;">
              <label for="cantidad" class="col-sm-8 control-label">Cantidad de criterios a evaluar: </label>
              <div class="col-sm-3">
                <input type="text" class="form-control text-center" name="cantidad" id="cantidad"></input>
              </div>
            </div>
            <div class="form-group" style= "padding-top: 20px; padding-bottom: 20px;">
                  <label for="criterio12" class="col-sm-5 control-label">Nota Final: </label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control text-center" name="total" id="total" readonly>
                  </div>
            </div>
          </div>
          <h4 class="text-center"><b>1. Calidad y Productividad</b></h4>
          <div style="display: flex; justify-content: center;">
            <div class="col-xs-8 text-center">
              <div class="form-group">
                <label class="col-sm-7 control-label" style="text-align: left;">Presión y calidad de trabajo:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio1" id="criterio1">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-7 control-label" style="text-align: left;">Cantidad de trabajo realizados:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio2" id="criterio2">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-7 control-label" style="text-align: left;">Creatividad e innovación en sus propuestas:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio3" id="criterio3">
                </div>
              </div>
            </div>
            <div class="col-sm-3" style="margin-top: 20px;">
              <input type="text" class="form-control text-center" value="SubTotal" readonly>
              <input type="text" class="form-control text-center" name="subtotal" id="subtotal" readonly style="background-color: white;">
            </div>
          </div>


          <h4 class="text-center"><b>2. Compromiso</b></h4>
          <div style="display: flex; justify-content: center;">
            <div class="col-xs-8 text-center">
              <div class="form-group">
                <label for="criterio4" class="col-sm-7 control-label" style="text-align: left;">Trabaja sin necesidad de supervisión:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio4" id="criterio4"></input>
                </div>
              </div>
              <div class="form-group">
                <label for="criterio5" class="col-sm-7 control-label" style="text-align: left;">Esfuerzo: </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio5" id="criterio5"></input>
                </div>
              </div>
              <div class="form-group">
                <label for="criterio6" class="col-sm-7 control-label" style="text-align: left;">Puntualidad: </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio6" id="criterio6"></input>
                </div>
              </div>               
            </div>
            <div class="col-sm-3" style="margin-top: 20px;">
              <input type="text" class="form-control text-center" value="SubTotal" readonly>
              <input type="text" class="form-control text-center" name="subtotal" id="subtotal" readonly style="background-color: white;">
            </div>           
          </div>

          <h4 class="text-center"><b>3. Iniciativa / Liderazgo</b></h4>
          <div style="display: flex; justify-content: center;">
            <div class="col-xs-8 text-center">
              <div class="form-group">
                <label for="criterio7" class="col-sm-7 control-label" style="text-align: left;">Completa sus actividades: </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio7" id="criterio7"></input>
                </div>
              </div>
              <div class="form-group">
                <label for="criterio8" class="col-sm-7 control-label" style="text-align: left;">Sugiere mejoras: </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio8" id="criterio8"></input>
                </div>
              </div>
              <div class="form-group">
                <label for="criterio9" class="col-sm-7 control-label" style="text-align: left;">Identifica sus errores: </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio9" id="criterio9"></input>
                </div>
              </div>               
            </div>
            <div class="col-sm-3" style="margin-top: 20px;">
              <input type="text" class="form-control text-center" value="SubTotal" readonly>
              <input type="text" class="form-control text-center" name="subtotal" id="subtotal" readonly style="background-color: white;">
            </div>           
          </div>

          <h4 class="text-center"><b>4. Trabajo en equipo</b></h4>
          <div style="display: flex; justify-content: center;">
            <div class="col-xs-8 text-center">
              <div class="form-group">
                <label for="criterio10" class="col-sm-7 control-label" style="text-align: left;">Trabaja fluidamente: </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio10" id="criterio10"></input>
                </div>
              </div>
              <div class="form-group">
                <label for="criterio11" class="col-sm-7 control-label" style="text-align: left;">Actitud positiva y proactiva: </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio11" id="criterio11"></input>
                </div>
              </div>
              <div class="form-group">
                <label for="criterio12" class="col-sm-7 control-label" style="text-align: left;">Promueve el trabajo en equipo: </label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio12" id="criterio12"></input>
                </div>
              </div>               
            </div>
            <div class="col-sm-3" style="margin-top: 20px;">
              <input type="text" class="form-control text-center" value="SubTotal" readonly>
              <input type="text" class="form-control text-center" name="subtotal" id="subtotal" readonly style="background-color: white;">
            </div>           
          </div>
        
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
      </div>
    </div>
  </div>
</div>


