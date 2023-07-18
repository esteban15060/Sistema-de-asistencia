<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-purple-light sidebar-mini">
  <div class="wrapper">

    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/menubar.php';?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Gestionar acciones por rango
        </h1>
        <ol class="breadcrumb">
          <li><a href="../admin/home.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header with-border">
                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
                <a href="#addnew" data-toggle="modal" class="btn btn-warning btn-sm btn-flat">Administrar rangos</a>
              </div>
              
            </div>
          </div>
        </div>
      </section>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/usuario_modal.php'; ?>
  </div>
  <?php include 'includes/scripts.php'; ?>
  <script>
    $('.edit').click(function(e) {
      e.preventDefault();
      $('#edit').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $('.delete').click(function(e) {
      e.preventDefault();
      $('#delete').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    function getRow(id) {
      $.ajax({
        type: 'POST',
        url: 'usuario_row.php',
        data: {
          id: id
        },
        dataType: 'json',
        success: function(response) {
          $('.id').val(response.id);
          $('#edit_username').val(response.username);
          $('#edit_password').val(response.password);
          $('#edit_firstname').val(response.firstname);
          $('#edit_lastname').val(response.lastname);
          $('#edit_rango').val(response.rango);
        }
      });
    }
  </script>
</body>
</html>