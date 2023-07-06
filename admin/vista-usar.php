<?php
include 'vista-coneccion.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $stmt = $pdo->prepare("SELECT * FROM imagen_frase WHERE id = ?");
  $stmt->execute([$id]);
  $imagen = $stmt->fetch();

  if (!$imagen) {
    die("Imagen no encontrada.");
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];
  $fraseMotivacional = $_POST['frase_motivacional'];

  $imagenActual = $_POST['imagen_actual']; // Ruta de la imagen actual

  // Procesar la imagen si se ha seleccionado un nuevo archivo
  if ($_FILES['imagen']['tmp_name']) {
    $nombreImagen = $_FILES['imagen']['name'];
    $rutaImagen =  $nombreImagen;

    // Mover la imagen cargada a la carpeta de destino
    move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaImagen);

    // Eliminar la imagen anterior si existe
    if ($imagenActual && file_exists($imagenActual)) {
      unlink($imagenActual);
    }
  } else {
    // Si no se ha seleccionado un nuevo archivo, conservar la imagen actual
    $rutaImagen = $imagenActual;
  }

  // Actualizar la información de la imagen en la base de datos
  $stmt = $pdo->prepare("UPDATE imagen_frase SET frase_motivacional = ?, nombre = ? WHERE id = ?");
  $stmt->execute([$fraseMotivacional, $rutaImagen, $id]);

  // Redirigir a la página de ver_imagenes.php después de editar
  header("Location: vista-asistencia.php");
  exit();
}
?>
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
              <h2>Usar esta plantilla</h2>
              <form method="POST" enctype="multipart/form-data">
                <!--<input type="text" name="id" value="1">-->
                <input type="hidden" name="id" value="1">
                <div class="form-group">
                  
                  <?php if ($imagen['nombre']): ?>
                    <input type="hidden" name="imagen_actual" value="<?= $imagen['nombre'] ?>">
                    <p>Imagen actual:</p>
                    <img src="<?='img/'. $imagen['nombre'] ?>" alt="Imagen actual" style="max-width: 300px;">
                  <?php endif; ?><br><br>
                    <input type="file" class="form-control-file container__file3" id="imagen" name="imagen">
                </div>
                <div class="form-group">
                  <label for="frase_motivacional">Frase motivacional:</label><br>
                  <input type="text" class="container__frase" id="frase_motivacional" name="frase_motivacional" value="<?= $imagen['frase_motivacional'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Usar plantilla</button>
                <a href="vista-asistencia.php" class="btn btn-danger">Cancelar</a>
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
