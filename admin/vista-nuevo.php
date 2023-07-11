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
    <section class="content py-5">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="container container__sd">
                <h3 class="letraAgregarNuevaPlantilla">Agregar Nueva Plantilla</h3>
                <form action="vista-guarda.php" method="post" enctype="multipart/form-data" class="py-5">
                <div class="form-group">
                 
                  <div class="container__sds ">
                    <span class="form-control-file container__file2 "><i class="fa fa-file"></i>    Seleccionar archivo/imagen</span>
                    <input class="form-control-file container__file" type="file" name="imagen" id="imagen" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="mb-3 row group-frase">
                    <label for="frase" class="col-sm-2 col-form- label-frase">Frase motivacional</label>
                    <div class="col-sm-1">
                      <textarea class="container__frase" name="frase" id="frase" ></textarea>
                    </div>
                  </div>   
                </div>
                <div>
                  <button type="submit" class="btn btn-primary px-5 btn-lg"><i class="fa fa-plus"></i> Agregar</button>
                </div>
                              
                             
                
                
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
</body>
</html>
