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
          <?php
            include 'vista-coneccion.php';
            $stmt3 = $pdo->query("SELECT * FROM fondo WHERE id > 1");
            $imagenes3 = $stmt3->fetchAll();

            $stmt4 = $pdo->query("SELECT * FROM fondo LIMIT 1");
            $imagen4 = $stmt4->fetch();

            $stmt1 = $pdo->query("SELECT * FROM imagen_frase LIMIT 1");
            $imagen1 = $stmt1->fetch();

            $stmt = $pdo->query("SELECT * FROM imagen_frase WHERE id > 1");
            $imagenes = $stmt->fetchAll();
          ?>
            <div class="modal-fondo">
              <div class="modal-fondo__conted">
                <div class="nontaine__nuevo"> 
                  <span class="container__tittle">Imagenes de fondo</span>
                  <div>
                    <a href="vista-nuevo-fondo.php" class="btn btn-primary">Agregar fondo</a>
                    <a href="#" class="btn btn-danger" onclick="closseModalFondo()">Cerrar</a>
                  </div>
                </div>
                <div class="modal-fondo__fondos">
                  <?php foreach ($imagenes3 as $imagen): ?>
                    <div class="modal-fondo__fondo-contend">
                      <div>
                        <img src="fondo/<?= $imagen['nombre'] ?>" alt="Imagen" class="modal-fondo__img">
                      </div>
                      <div class="modal-fondo__fondo-cacciones">
                        <a href="vista-usar-fondo.php?id=<?= $imagen['id'] ?>" class="btn btn-success container__bt1-a">Usar</a>
                        <a href="vista-elimina-fondo.php?id=<?= $imagen['id'] ?>" class="btn btn-danger container__bt1-a">Eliminar</a>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
            <div class="plantilla__center" style="background-image: url(<?='fondo/'. $imagen4['nombre'] ?>);">
              <a href="#" class="btn btn-primary cambiar__fondo" onclick="openModalFondo()">Cambiar fondo</a>
              <div class="plantilla">
                  <p class="plantilla__titulo">¡Hola, Desiree Jasmin Meregildo Palomino!</p>
                  <p class="plantilla__sub">Se ha registrado tu ingreso</p>
                  <div class="plantilla__div">
                    <div class="plantilla__time">
                      <p class="plantilla__fecha">LUNES-Enero 1,2023</p>
                      <p class="plantilla__hora">5:58:10 PM</p>
                      <div class="plantilla__btn-contend">
                        <span class="plantilla__btn">VISITAR MI PERFIL</span><br>
                        <span class="plantilla__btn">VER MIS ESTADÍSTICAS</span>
                      </div>
                    </div>
                    <img src="<?='img/'. $imagen1['nombre'] ?>" alt="imagen" class="plantilla__img">
                  </div>
                  <p class="plantilla__frase"><?= $imagen1['frase_motivacional'] ?></p>
              </div>
            </div>
            <div class="container__1">
              <div class="nontaine__nuevo"> 
                <span class="container__tittle">Plantillas</span>
                <a href="vista-nuevo.php" class="btn btn-primary">Agregar plantilla</a>
              </div>
              <div class="center__contend">
              <?php foreach ($imagenes as $imagen): ?>
                    <div class="opcion">
                      <div>
                        <br>
                        <img src="<?='img/'.$imagen['nombre'] ?>" alt="img" class="opcion__img"><br>
                        <p class="opcion__frase"><?= $imagen['frase_motivacional'] ?></p>
                      </div><br>
                      <a href="vista-usar.php?id=<?= $imagen['id'] ?>" class="btn btn-success container__bt1-a">Usar</a>
                      <a href="vista-editar.php?id=<?= $imagen['id'] ?>" class="btn btn-primary container__bt1-a">Editar</a>
                      <a href="vista-elimina.php?id=<?= $imagen['id'] ?>" class="btn btn-danger container__bt1-a">Eliminar</a>
                    </div>
                  <?php endforeach; ?>
              </div>
              <br><br>  
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div> 
  <?php include 'includes/footer.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
  let abrirModalFondo = document.querySelector(".modal-fondo");
  function openModalFondo() {
    abrirModalFondo.classList.add("modal-fondo__active")
  }
  function closseModalFondo() {
    abrirModalFondo.classList.remove("modal-fondo__active")
  }
</script>
</body>
</html>