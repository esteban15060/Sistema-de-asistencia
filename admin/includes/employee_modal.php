<!-- Add -->
<?php include 'includes/scripts.php'; ?>
<div class="modal" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title text-center"><b>Agregar Practicante</b></h4>
          	</div>
          	<div class="modal-body modal-tamanio">
            	<form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">
              <div class="form-group">
                    <label for="photo" class="col-sm-5 control-label">Foto del practicante</label>

                    <div class="col-sm-7">
                      <input type="file" name="photo" id="photo">
                    </div>
                </div>
              
                <div class="form-group">
                  <label for="date_in" class="col-sm-1 control-label">Fecha Ingreso</label>
                    <div class="col-sm-3">
                      <input type="date" class="form-control" id="date_in" name="date_in" required>
                    </div>                  
                  
                    <label for="date_out" class="col-sm-1 control-label">Fecha Salida</label>
                    <div class="col-sm-3">
                      <input type="date" class="form-control" id="date_out" name="date_out" required>
                    </div>  
                    <label for="time_practice" class="col-sm-1 control-label">Tiempo </label>

                    <div class="col-sm-3"> 
                      <select class="form-control" name="time_practice" id="time_practice" required>
                        <option value="" selected>- Seleccionar -</option>
                        <option value="3">3 meses</option>
                        <option value="5">5 meses</option>
                      </select>
                    </div>  
                    
                </div>
                <div class="form-group">
                    
                    <label for="type_practice" class="col-sm-1 control-label">Tipo </label>

                    <div class="col-sm-3"> 
                      <select class="form-control" name="type_practice" id="type_practice" required>
                        <option value="" selected>- Seleccionar -</option>
                        <option value="PREPROFESIONALES">PREPROFESIONALES</option>
                        <option value="PROFESIONALES">PROFESIONALES</option>
                      </select>
                    </div>
                    <label for="dni" class="col-sm-1 control-label">DNI</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="dni" name="dni" required>
                    </div>  
                    <label for="contact" class="col-sm-1 control-label">Celular</label>

                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>  
                <div class="form-group">                  
                    <label for="firstname" class="col-sm-1 control-label">Nombre</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>                  
                  
                    <label for="lastname" class="col-sm-1 control-label">Apellido</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div> 
                    <label for="gender" class="col-sm-1 control-label">Género</label>
                      <div class="col-sm-3"> 
                        <select class="form-control" name="gender" id="gender" required>
                          <option value="" selected>- Seleccionar -</option>
                          <option value="Male">Hombre</option>
                          <option value="Female">Mujer</option>
                        </select>
                      </div>    
                </div>
                <div class="form-group">
                <label for="birthday" class="col-sm-2 control-label">Cumpleaños</label>
                    <div class="col-sm-3">
                      <input type="date" class="form-control" id="birthday" name="birthday" required>
                    </div>               
                    <label for="address" class="col-sm-2 control-label">Dirección</label>

                <div class="col-sm-5">
                  <textarea class="form-control" name="address" id="address"></textarea>
                </div>
                  
                   
                </div>
                <div class="form-group">
                  <label for="personal_email" class="col-sm-2 control-label">Correo Personal</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control" id="personal_email" name="personal_email" required>
                    </div>                  
                  
                    <label for="institutional_email" class="col-sm-2 control-label">Correo Institucional</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control" id="institutional_email" name="institutional_email" required>
                    </div>  
                </div>
                <div class="form-group">
                  <label for="university" class="col-sm-2 control-label">Universidad</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="university" name="university" required>
                    </div>                  
                  
                    <label for="career" class="col-sm-2 control-label">Carrera</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="career" name="career" required>
                    </div>  
                </div>              
                
                <div class="form-group">
                    <label for="negocio" class="col-sm-2 control-label">Unidad de Negocio</label>

                    <div class="col-sm-4">
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
                    <label for="position" class="col-sm-2 control-label">Cargo</label>

                    <div class="col-sm-4">
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
          <label for="schedule" class="col-sm-3 control-label">Horario semanal</label>
          <div class="col-sm-9">
            <div class="row" style="margin-bottom: 10px;">
              <div class="col-sm-3">&nbsp;</div>
              <div class="col-sm-4">Entrada</div>
              <div class="col-sm-4">Salida</div>
            </div>
              <div class="row" style="margin-bottom: 10px;">
                <div class="col-sm-3"><?= $day ?></div>
                <div class="col-sm-4">
                  <select class="form-control" name="schedule[<?= strtolower($day) ?>_in]" id="schedule_<?= strtolower($day) ?>_in" onchange="updateScheduleOut(this)">
                    <option value="" selected>- Seleccionar -</option>
                    <?php
                    $sql = "SELECT * FROM schedules";
                    $query = $conn->query($sql);
                    while ($srow = $query->fetch_assoc()): ?>
                      <option value="<?= $srow['id'] ?>"><?= $srow['time_in'] ?></option>
                    <?php endwhile; ?>
                  </select>
                </div>
                <div class="col-sm-4">
                  <select class="form-control" name="schedule[<?= strtolower($day) ?>_out]" id="schedule_<?= strtolower($day) ?>_out">
                    <option value="" selected>- Seleccionar -</option>
                    <option value="Personalizado">Personalizado</option>
                  </select>
                </div>
              </div>
          </div>
        </div>
          	</div>
          	<div class="modal-footer">
              <a href="#secondmodal" class="z-0 position-absolute p-5 rounded-3" class="btn btn-primary btn-flat" data-toggle="modal" >Personalizar</a>
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<div class="modal" id="secondmodal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center"><b>Personalizar horario</b></h4>
      </div>
      <div class="modal-body modal-tamanio">
        <form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="schedule" class="col-sm-3 control-label">Horario semanal</label>
            <div class="col-sm-9">
              <div class="row" style="margin-bottom: 10px;">
                <div class="col-sm-3">&nbsp;</div>
                <div class="col-sm-4">Entrada</div>
                <div class="col-sm-4">Salida</div>
              </div>
              <?php
              $days = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];

              foreach ($days as $index => $day) {
                $day_lower = strtolower($day);
                ?>

                <div class="row" style="margin-bottom: 10px;">
                  <div class="col-sm-3"><?php echo $day; ?></div>
                  <div class="col-sm-4">
                    <select class="form-control" name="schedule[<?php echo $day_lower; ?>_in]" id="schedule_<?php echo $day_lower; ?>_in" onchange="updateScheduleOut(this)">
                      <option value="" selected>- Seleccionar -</option>
                      <?php
                      $sql = "SELECT * FROM schedules";
                      $query = $conn->query($sql);
                      while ($srow = $query->fetch_assoc()) {
                        echo '<option value="' . $srow['id'] . '">' . $srow['time_in'] . '</option>';
                      }
                      ?>
                      <option value="Personalizado">Personalizado</option>
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <select class="form-control" name="schedule[<?php echo $day_lower; ?>_out]" id="schedule_<?php echo $day_lower; ?>_out">
                      <option value="" selected>- Seleccionar -</option>
                      <?php
                      $query->data_seek(0);
                      while ($srow = $query->fetch_assoc()) {
                        echo '<option value="' . $srow['id'] . '">' . $srow['time_out'] . '</option>';
                      }
                      ?>
                      <option value="Personalizado">Personalizado</option>
                    </select>
                  </div>
                </div>

              <?php
              }
              ?>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  
  function updateScheduleOut(selectElement) {
    var selectedValue = selectElement.value;
    var selectId = selectElement.id;
    var day = selectId.split('_')[1];

    var scheduleOutSelect = document.getElementById('schedule_' + day + '_out');
    var scheduleOutOptions = scheduleOutSelect.options;

    for (var i = 0; i < scheduleOutOptions.length; i++) {
      var option = scheduleOutOptions[i];
      if (option.value === selectedValue) {
        option.selected = true;
        break;
      }
    }
  }
</script>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title text-center"><b><span class="employee_id"></span></b></h4>
          	</div>
          	<div class="modal-body modal-tamanio">
            	<form class="form-horizontal" method="POST" action="employee_edit.php">
            		<input type="hidden" class="empid" name="id">
                <div class="form-group">
                    <label for="edit_photo" class="col-sm-5 control-label">Foto del practicante</label>

                    <div class="col-sm-7">
                      <input type="file" name="photo" id="edit_photo">
                    </div>
                </div>
                <div class="form-group">
                  <label for="edit_date_in" class="col-sm-1 control-label">Fecha Ingreso</label>
                    <div class="col-sm-3">
                      <input type="date" class="form-control" id="edit_date_in" name="date_in" required>
                    </div>                  
                  
                    <label for="edit_date_out" class="col-sm-1 control-label">Fecha Salida</label>
                    <div class="col-sm-3">
                      <input type="date" class="form-control" id="edit_date_out" name="date_out" required>
                    </div>  
                    <label for="edit_time_practice" class="col-sm-1 control-label">Tiempo</label>

                    <div class="col-sm-3"> 
                      <select class="form-control" name="time_practice" id="edit_time_practice" required>
                        <option value="" selected>- Seleccionar -</option>
                        <option value="3">3 meses</option>
                        <option value="5">5 meses</option>
                      </select>
                    </div>  
                </div>
                <div class="form-group">
                   
                    <label for="edit_type_practice" class="col-sm-1 control-label">Tipo</label>

                    <div class="col-sm-3"> 
                      <select class="form-control" name="type_practice" id="edit_type_practice" required>
                        <option value="" selected>- Seleccionar -</option>
                        <option value="PREPROFESIONALES">PREPROFESIONALES</option>
                        <option value="PROFESIONALES">PROFESIONALES</option>
                      </select>
                    </div>
                    <label for="edit_dni" class="col-sm-1 control-label">DNI</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="edit_dni" name="dni" required>
                    </div>  
                    <label for="edit_contact" class="col-sm-1 control-label">Celular</label>

                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="edit_contact" name="contact">
                    </div>
                </div>  
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-1 control-label">Nombre</label>

                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                    <label for="edit_lastname" class="col-sm-1 control-label">Apellido</label>

                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                    <label for="edit_gender" class="col-sm-1 control-label">Género</label>

                    <div class="col-sm-3"> 
                      <select class="form-control" name="gender" id="edit_gender">
                        <option selected id="gender_val"></option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                      </select>
                    </div>

                </div>
                <div class="form-group">
                    <label for="edit_birthday" class="col-sm-2 control-label">Cumpleaños</label>
                    <div class="col-sm-3">
                      <input type="date" class="form-control" id="edit_birthday" name="birthday" required>
                    </div>                  
                    <label for="edit_address" class="col-sm-2 control-label">Dirección</label>

                    <div class="col-sm-5">
                      <textarea class="form-control" name="address" id="edit_address"></textarea>
                    </div>
                    
                </div>
                <div class="form-group">
                  <label for="edit_personal_email" class="col-sm-2 control-label">Correo Personal</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control" id="edit_personal_email" name="personal_email" required>
                    </div>                  
                  
                    <label for="edit_institutional_email" class="col-sm-2 control-label">Correo Institucional</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control" id="edit_institutional_email" name="institutional_email" required>
                    </div>  
                </div>
                <div class="form-group">
                  <label for="edit_university" class="col-sm-2 control-label">Universidad</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_university" name="university" required>
                    </div>                  
                  
                    <label for="edit_career" class="col-sm-2 control-label">Carrera</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="edit_career" name="career" required>
                    </div>  
                </div>                              
                
                <div class="form-group">
                    <label for="edit_negocio" class="col-sm-2 control-label">Unidad de Negocio</label>

                    <div class="col-sm-4">
                      <select class="form-control" name="negocio" id="edit_negocio" required>
                        <option selected id="negocio_val"></option>
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
                    <label for="edit_position" class="col-sm-2 control-label">Cargo</label>

                    <div class="col-sm-4">
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
                    <label for="edit_schedule" class="col-sm-2 control-label">Horario</label>

                    <div class="col-sm-10">
                      <select class="form-control" id="edit_schedule" name="schedule">
                        <option selected id="schedule_val"></option>
                        <?php
                          $sql = "SELECT * FROM schedules";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['id']."'>".$srow['time_in'].' - '.$srow['time_out']."</option>;
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
                  <label for="criterio12" class="col-sm-5 control-label">Nota Final: </label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control text-center" name="total" id="total" readonly>
                  </div>
            </div>
          </div>
          <h4 class="text-center"><b>1. Aspectos Personales</b></h4>
          <div style="display: flex; justify-content: center;">
            <div class="col-xs-8 text-center">
              <div class="form-group">
                <label for="criterio1" class="col-sm-7 control-label" style="text-align: left;">Asistencia y puntualidad:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio1" id="criterio1">
                </div>
              </div>
              <div class="form-group">
                <label for="criterio2" class="col-sm-7 control-label" style="text-align: left;">Cumplimiento de metas:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio2" id="criterio2">
                </div>
              </div>
              <div class="form-group">
                <label for="criterio3" class="col-sm-7 control-label" style="text-align: left;">Responsabilidad y compromiso:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio3" id="criterio3">
                </div>
              </div>
              <div class="form-group">
                <label for="criterio4" class="col-sm-7 control-label" style="text-align: left;">Creatividad e iniciativa:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio4" id="criterio4">
                </div>
              </div>
              <div class="form-group">
                <label for="criterio5" class="col-sm-7 control-label" style="text-align: left;">Cumplimiento reglamento:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio5" id="criterio5">
                </div>
              </div>
            </div>
            <div class="col-sm-3" style="margin-top: 80px;">
              <input type="text" class="form-control text-center" value="SubTotal" readonly>
              <input type="text" class="form-control text-center" name="subtotal" id="subtotal" readonly style="background-color: white;">
            </div>
          </div>


          <h4 class="text-center"><b>2. Aspectos Académicos</b></h4>
          <div style="display: flex; justify-content: center;">
            <div class="col-xs-8 text-center">
              <div class="form-group">
                <label for="criterio6" class="col-sm-7 control-label" style="text-align: left;">Planeación y organización:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio6" id="criterio6"></input>
                </div>
              </div>
              <div class="form-group">
                <label for="criterio7" class="col-sm-7 control-label" style="text-align: left;">Calidad del trabajo:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio7" id="criterio7"></input>
                </div>
              </div>
              <div class="form-group">
                <label for="criterio8" class="col-sm-7 control-label" style="text-align: left;">Conocimiento del trabajo:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio8" id="criterio8"></input>
                </div>
              </div>    
              <div class="form-group">
                <label for="criterio9" class="col-sm-7 control-label" style="text-align: left;">Trabajo en equipo:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio9" id="criterio9"></input>
                </div>
              </div>  
              <div class="form-group">
                <label for="criterio10" class="col-sm-7 control-label" style="text-align: left;">Capacidad de liderazgo:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio10" id="criterio10"></input>
                </div>
              </div>             
            </div>
            <div class="col-sm-3" style="margin-top: 80px;">
              <input type="text" class="form-control text-center" value="SubTotal" readonly>
              <input type="text" class="form-control text-center" name="subtotal" id="subtotal" readonly style="background-color: white;">
            </div>           
          </div>

          <h4 class="text-center"><b>3. Aspecto Profesional</b></h4>
          <div style="display: flex; justify-content: center;">
            <div class="col-xs-8 text-center">
              <div class="form-group">
                <label for="criterio11" class="col-sm-7 control-label" style="text-align: left;">Comunicación y relaciones interpersonales:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio11" id="criterio11"></input>
                </div>
              </div>
              <div class="form-group">
                <label for="criterio12" class="col-sm-7 control-label" style="text-align: left;">Adaptación al cambio:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio12" id="criterio12"></input>
                </div>
              </div>
              <div class="form-group">
                <label for="criterio13" class="col-sm-7 control-label" style="text-align: left;">Solución de problemas:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio13" id="criterio13"></input>
                </div>
              </div>   
              <div class="form-group">
                <label for="criterio14" class="col-sm-7 control-label" style="text-align: left;">Trabajo bajo presión:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio14" id="criterio14"></input>
                </div>
              </div> 
              <div class="form-group">
                <label for="criterio15" class="col-sm-7 control-label" style="text-align: left;">Capacidad innovadora:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control text-center" name="criterio15" id="criterio15"></input>
                </div>
              </div>               
            </div>
            <div class="col-sm-3" style="margin-top: 80px;">
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