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
        Vista de asistencia
      </h1>
      <ol class="breadcrumb">
        <li><a href="../admin/home.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Vista de asistencia</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="container container__sd">
                <h2>Agregar Plantilla</h2>
                <form action="vista-guarda.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="imagen">Imagen:</label>
                    <div class="container__sds">
                      <span class="form-control-file container__file2">selecionar archivo</span>
                      <input class="form-control-file container__file" type="file" name="imagen" id="imagen" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="frase">Frase motivacional:</label><br>
                    <input type="text" name="frase" id="frase" class="container__frase" required>
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div> 
  <?php include 'includes/footer.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>

<?php include 'vista-editaFraseModal.php'; ?>
</body>
</html>
