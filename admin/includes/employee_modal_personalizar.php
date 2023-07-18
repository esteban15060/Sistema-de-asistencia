<div class="modal fade" id="secondmodal">
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