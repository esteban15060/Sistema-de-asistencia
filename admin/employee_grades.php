<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-purple-light sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="col-xs-7 text-center">
      <div class="box">
        <h2 class="text-center" style="margin-top: 10px; margin-bottom:10px ;color: #605CA8">
          <?php echo $_GET['codigo_practicante']; ?>
        </h2>
      </div>
    </div>
      <ol class="breadcrumb">
        <li><a href="../admin/home.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Practicantes</li>
        <li class="active">Lista de Practicantes</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-7">
          <div class="box">
           
            <div class="box-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th rowspan="2" class=" text-center" style="font-size: 20px; overflow-wrap: break-word; width: 250px;">EVALUACIÓN DE DESEMPEÑO</th>
                  <th class="text-center">INGRESO</th>
                  <td colspan="2" class="text-center" style="font-size: 15px"><?php echo $_GET['fecha_inicio']; ?></td>
                </tr>
                <tr>
                  <th class="text-center">SALIDA</th>
                  <td colspan="2" class="text-center" style="font-size: 15px"><?php echo $_GET['fecha_fin']; ?></td>
                </tr>
                <tr>
                  <th class="text-center">PRACTICANTE</th>
                  <td colspan="3" class="text-center" style="font-size: 18px"><?php echo $_GET['nombre']; ?></td>
                </tr>
                <tr>
                  <th class="text-center">PUESTO</th>
                  <td colspan="3" class="text-center" style="font-size: 15px"><?php echo $_GET['position']; ?></td>
                </tr>
                <tr>
                  <th class="text-center">ÁREA</th>
                  <td colspan="3" class="text-center" style="font-size: 15px"><?php echo $_GET['negocio']; ?></td>
                </tr>
              </thead>
              <tbody>
              
              </tbody>
            </table>

            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">           
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                <tr>
                  <th rowspan="3" class=" text-center" style="font-size: 20px; overflow-wrap: break-word; width: 250px;">1. ASPECTOS PERSONALES</th>
                  <th colspan="4" class="text-center">MES 1</th>
                  <th colspan="4"  class="text-center">MES 2</th>
                  <th colspan="5"  class="text-center">MES 3</th>
                       
                </tr>
                <tr>
                  <th class="text-center">SEM 1</th>
                  <th class="text-center">SEM 2</th>
                  <th class="text-center">SEM 3</th>
                  <th class="text-center">SEM 4</th>
                  <th class="text-center">SEM 5</th>
                  <th class="text-center">SEM 6</th>
                  <th class="text-center">SEM 7</th>
                  <th class="text-center">SEM 8</th>
                  <th class="text-center">SEM 9</th>
                  <th class="text-center">SEM 10</th>
                  <th class="text-center">SEM 11</th>
                  <th class="text-center">SEM 12</th>
                  <th class="text-center">SEM 13</th>
                </tr>
                <tr>
                <?php
                    $fechaInicio = $_GET['fecha_inicio'];
                    $fechaFin = $_GET['fecha_fin'];

                    // Convertir las fechas en objetos DateTime
                    $inicio = new DateTime($fechaInicio);
                    $fin = new DateTime($fechaFin);

                    // Obtener la diferencia en días entre las fechas de inicio y fin
                    $diferencia = $inicio->diff($fin);
                    $numSemanas = ceil($diferencia->days / 7);

                    // Generar las fechas de cada semana
                    $fechasSemanas = array();
                    for ($i = 0; $i < $numSemanas; $i++) {
                        $inicioSemana = clone $inicio;
                        $inicioSemana->modify('+' . ($i * 7) . ' days');
                        $finSemana = clone $inicioSemana;
                        $finSemana->modify('+7 days');
                        $fechasSemanas[] = $finSemana->format('d/m/Y');
                    }
                ?>
                 <?php foreach ($fechasSemanas as $fechaSemana) : ?>
                    <td class="text-center"><?php echo $fechaSemana; ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <td class="text-center">Asistencia y puntualidad</td>                  
                </tr>
                <tr>
                  <td class="text-center">Cumplimiento de metas</td>                  
                </tr>
                <tr>
                  <td class="text-center">Responsabilidad y compromiso </td>                  
                </tr>
                <tr>
                  <td class="text-center">Creatividad e iniciativa</td>                  
                </tr>
                <tr>
                  <td class="text-center">Cumplimiento reglamento</td>
                </tr>
                <tr>
                  <th class="text-center">TOTAL DE SEMANAS</th>
                </tr>
                <tr>
                  <th class="text-center">TOTAL</th>
                </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">           
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                <tr>
                  <th rowspan="3" class=" text-center" style="font-size: 20px; overflow-wrap: break-word; width: 250px;">2. ASPECTOS ACADÉMICOS</th>
                  <th colspan="4" class="text-center">MES 1</th>
                  <th colspan="4"  class="text-center">MES 2</th>
                  <th colspan="5"  class="text-center">MES 3</th>     
                </tr>
                <tr>
                  <th class="text-center">SEM 1</th>
                  <th class="text-center">SEM 2</th>
                  <th class="text-center">SEM 3</th>
                  <th class="text-center">SEM 4</th>
                  <th class="text-center">SEM 5</th>
                  <th class="text-center">SEM 6</th>
                  <th class="text-center">SEM 7</th>
                  <th class="text-center">SEM 8</th>
                  <th class="text-center">SEM 9</th>
                  <th class="text-center">SEM 10</th>
                  <th class="text-center">SEM 11</th>
                  <th class="text-center">SEM 12</th>
                  <th class="text-center">SEM 13</th>
                </tr>
                <tr>
                <?php
                    $fechaInicio = $_GET['fecha_inicio'];
                    $fechaFin = $_GET['fecha_fin'];

                    // Convertir las fechas en objetos DateTime
                    $inicio = new DateTime($fechaInicio);
                    $fin = new DateTime($fechaFin);

                    // Obtener la diferencia en días entre las fechas de inicio y fin
                    $diferencia = $inicio->diff($fin);
                    $numSemanas = ceil($diferencia->days / 7);

                    // Generar las fechas de cada semana
                    $fechasSemanas = array();
                    for ($i = 0; $i < $numSemanas; $i++) {
                        $inicioSemana = clone $inicio;
                        $inicioSemana->modify('+' . ($i * 7) . ' days');
                        $finSemana = clone $inicioSemana;
                        $finSemana->modify('+7 days');
                        $fechasSemanas[] = $finSemana->format('d/m/Y');
                    }
                ?>
                 <?php foreach ($fechasSemanas as $fechaSemana) : ?>
                    <td class="text-center"><?php echo $fechaSemana; ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <td class="text-center">Planeación y organización</td>                  
                </tr>
                <tr>
                  <td class="text-center">Calidad del trabajo</td>                  
                </tr>
                <tr>
                  <td class="text-center">Conocimiento del trabajo</td>                  
                </tr>
                <tr>
                  <td class="text-center">Trabajo en equipo</td>                  
                </tr>
                <tr>
                  <td class="text-center">Capacidad de liderazgo </td>
                </tr>
                <tr>
                  <th class="text-center">TOTAL DE SEMANAS</th>
                </tr>
                <tr>
                  <th class="text-center">TOTAL</th>
                </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">           
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                <tr>
                  <th rowspan="3" class=" text-center" style="font-size: 20px; overflow-wrap: break-word; width: 250px;">3. ASPECTOS PROFESIONALES</th>
                  <th colspan="4" class="text-center">MES 1</th>
                  <th colspan="4"  class="text-center">MES 2</th>
                  <th colspan="5"  class="text-center">MES 3</th>     
                </tr>
                <tr>
                  <th class="text-center">SEM 1</th>
                  <th class="text-center">SEM 2</th>
                  <th class="text-center">SEM 3</th>
                  <th class="text-center">SEM 4</th>
                  <th class="text-center">SEM 5</th>
                  <th class="text-center">SEM 6</th>
                  <th class="text-center">SEM 7</th>
                  <th class="text-center">SEM 8</th>
                  <th class="text-center">SEM 9</th>
                  <th class="text-center">SEM 10</th>
                  <th class="text-center">SEM 11</th>
                  <th class="text-center">SEM 12</th>
                  <th class="text-center">SEM 13</th>
                </tr>
                <tr>
                <?php
                    $fechaInicio = $_GET['fecha_inicio'];
                    $fechaFin = $_GET['fecha_fin'];

                    // Convertir las fechas en objetos DateTime
                    $inicio = new DateTime($fechaInicio);
                    $fin = new DateTime($fechaFin);

                    // Obtener la diferencia en días entre las fechas de inicio y fin
                    $diferencia = $inicio->diff($fin);
                    $numSemanas = ceil($diferencia->days / 7);

                    // Generar las fechas de cada semana
                    $fechasSemanas = array();
                    for ($i = 0; $i < $numSemanas; $i++) {
                        $inicioSemana = clone $inicio;
                        $inicioSemana->modify('+' . ($i * 7) . ' days');
                        $finSemana = clone $inicioSemana;
                        $finSemana->modify('+7 days');
                        $fechasSemanas[] = $finSemana->format('d/m/Y');
                    }
                ?>
                 <?php foreach ($fechasSemanas as $fechaSemana) : ?>
                    <td class="text-center"><?php echo $fechaSemana; ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <td class="text-center">Comunicación y relaciones interpersonales</td>                  
                </tr>
                <tr>
                  <td class="text-center">Adaptación al cambio</td>                  
                </tr>
                <tr>
                  <td class="text-center">Solución de problemas</td>                  
                </tr>
                <tr>
                  <td class="text-center">Trabajo bajo presión</td>                  
                </tr>
                <tr>
                  <td class="text-center">Capacidad innovadora</td>
                </tr>
                <tr>
                  <th class="text-center">TOTAL DE SEMANAS</th>
                </tr>
                <tr>
                  <th class="text-center">TOTAL</th>
                </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/employee_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>

  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.add_grades').click(function(e){
    e.preventDefault();
    $('#add_grades').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.photo').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });


function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'employee_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.empid').val(response.empid);
      $('.employee_id').html(response.employee_id);
      $('.del_employee_name').html(response.firstname+' '+response.lastname);
      $('#employee_name').html(response.firstname+' '+response.lastname);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      $('#edit_address').val(response.address);
      $('#datepicker_edit').val(response.birthdate);
      $('#edit_contact').val(response.contact_info);
      $('#gender_val').val(response.gender).html(response.gender);
      $('#position_val').val(response.position_id).html(response.description);
      $('#negocio_val').val(response.negocio_id).html(response.nombre_negocio);
      $('#schedule_val').val(response.schedule_id).html(response.time_in+' - '+response.time_out);
      $('#edit_date_in').val(response.date_in).html(response.date_in);
      $('#edit_date_out').val(response.date_out).html(response.date_out);
      $('#edit_birthday').val(response.birthday).html(response.birthday);
      $('#type_practice_val').val(response.type_practice).html(response.type_practice);
      $('#time_practice_val').val(response.time_practice).html(response.time_practice);    
      $('#edit_dni').val(response.dni);
      $('#edit_personal_email').val(response.personal_email);
      $('#edit_institutional_email').val(response.institutional_email);
      $('#edit_university').val(response.university);
      $('#edit_career').val(response.career);
    }
  });
}
</script>

</body>
</html>
