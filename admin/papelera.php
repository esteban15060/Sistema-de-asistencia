<?php include 'includes/session.php'; 
/*
$filas=mysqli_fetch_array($query);
if($filas['cargo']==1){//admin
  header("location:usuario.php");
}else{
  if($filas['cargo']==2){
    header("location:home.php");
  }
}*/

?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-purple-light sidebar-mini">
  <div class="wrapper">

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
      <h1>
        Lista de Practicantes Eliminados
      </h1>
      <ol class="breadcrumb">
        <li><a href="../admin/home.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Papelera</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i>¡Proceso Exitoso!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>                 
                  <th>Código de Asistencia</th>
                  <th>Foto</th>
                  <th>Nombre</th>
                  <th>Unidad de Negocio</th>
                  <th>Área</th>
                  <th>Horarios</th>
       
                  <th>Acción</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, papelera.id AS paid
                            FROM papelera
                            LEFT JOIN position
                            ON position.id = papelera.position_id
                            LEFT JOIN schedules
                            ON schedules.id = papelera.schedule_id
                            LEFT JOIN negocio
                            ON negocio.id = papelera.negocio_id";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                        <tr>    
                          <td><?php echo $row['employee_id']; ?></td>
                          <td><img src="<?php echo (!empty($row['photo']))? '../images/'.$row['photo']:'../images/profile.jpg'; ?>" width="30px" height="30px"> <a href="#edit_photo" data-toggle="modal" class="pull-right photo" data-id="<?php echo $row['paid']; ?>"><span class="fa fa-edit"></span></a></td>
                          <td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
                          <td><?php echo $row['nombre_negocio']; ?></td>
                          <td><?php echo $row['description']; ?></td>
                          <td><?php echo date('h:i A', strtotime($row['time_in'])).' - '.date('h:i A', strtotime($row['time_out'])); ?></td>
                       
                          <td>
                            <button class="btn btn-success btn-sm restaurar btn-flat" data-id="<?php echo $row['paid']; ?>"><i class="fa fa-save"></i> Restaurar</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['paid']; ?>"><i class="fa fa-trash"></i> Eliminar</button>
                          </td>
                        </tr>
                      <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/papelera_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>

  $('.restaurar').click(function(e){
    e.preventDefault();
    $('#restaurar').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
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
    url: 'papelera_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.paid').val(response.paid);
      $('.employee_id').html(response.employee_id);
      $('.del_employee_name').html(response.firstname+' '+response.lastname);
      $('#employee_name').html(response.firstname+' '+response.lastname);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      //$('#edit_address').val(response.address);
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
