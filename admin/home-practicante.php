<?php include 'includes/header-practicante.php'; ?>

<body class="bg-white">
<?php include 'includes/fecha-practicante.php' ?>
<nav class="navbar navbar-expand-lg bg-nav nav-modelo">
   <div class="container-fluid">
      <div class="input-group mb-3 diseño-escribir-aqui">
        <input type="text" class="form-control" placeholder="Escribe aqui...">
        <span class="ps-5"></span>
      </div>
      <div class="d-flex posicion">
        <h6 class="pe-3 letraNavBar posicion-fecha"><?php echo $diaActual . " de ".  $mesActual; ?></h6>
        <img src="../img/notificacion.webp" alt="notificacion" height="40" width="40">
      </div>
      <div class="circle-container d-flex me-5 posicion-perfil">
        <img class="rounded-circle" src="../images/fondo-prueba.png" alt="perfil" height="40" width="40">
        <h6 class="ps-3 letraNavBar posicion-fecha"><?php echo $row['firstname'] ;?></h6>
      </div>
   </div>
</nav>
<aside class="main-sidebar color-menubar-practicante aside-modelo">
   <div class="siderbar-practicantes">
      <img class="logo" src="../images/neon-house-led-logo.png" alt="logo" height="80">
   </div>
   <div class="nav-items">
      <div class="enlaces clicked" href="home-practicante.php" id="button1" >
         <form method="post" action="home-practicante.php" class="form__ver-perfil">
            <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ;?>">
            <button type="submit" class="enlaces__btn" id="button1">
               <a class="enlaces" href="#" id="button1" >
                  <img class="icono-centrar" src="../img/icono-home.webp" height="40" width="40">
                  <h6 class="text-center text-light letraNavBar">INICIO</h6>
               </a>
            </button>
         </form>
      </div>
      <br>
      <div class="enlaces" href="home-practicante.php" id="button1" >
         <form method="post" action="perfil-practicante.php" class="form__ver-perfil">
            <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ;?>">
            <button type="submit" class="enlaces__btn" id="button1">
               <a class="enlaces" href="#" id="button1" >
                  <img class="icono-centrar" src="../img/icono-perfil.webp" height="40" width="40">
                  <h6 class="text-center text-light letraNavBar">MI PERFIL</h6>
               </a>
            </button>
         </form>
      </div>
      <br>
      <div class="enlaces" id="button1" >
         <form method="post" action="home-practicante.php" class="form__ver-perfil">
            <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ;?>">
            <button type="submit" class="enlaces__btn" id="button1">
               <a class="enlaces" href="#" id="button1" >
                  <img class="icono-centrar" src="../img/icono-estadistica.webp" height="40" width="40">
                  <h6 class="text-center text-light letraNavBar" style="width: 120px; margin-left: 15px;">ESTADISTICAS Y LOGROS</h6>
               </a>
            </button>
         </form>
      </div>
      <br>
      <div class="enlaces" id="button1" >
         <form method="post" action="home-practicante.php" class="form__ver-perfil">
            <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ;?>">
            <button type="submit" class="enlaces__btn" id="button1">
               <a class="enlaces" href="#" id="button1" >
                  <img class="icono-centrar" src="../img/icono-calendario.webp" height="40" width="40">
                  <h6 class="text-center text-light letraNavBar" style="width: 110px; margin-left: 20px;">CALENDARIO O AGENDA</h6>
               </a>
            </button>
         </form>
      </div>
   </div>
   <div class="mb-3 salir">
      <a class="enlaces" onclick="salirMiPerfil()">
         <img class="icono-centrar" src="../img/icono-salir.webp" height="40" width="40">
         <h6 class="text-center text-light letraNavBar">SALIR</h6>
      </a>
   </div>
</aside>


    <div style="margin-left: 280px; margin-top: 30px; padding: 0 20px;">
        
    </div>
    </div>

    <script>
   function salirMiPerfil() {
      Swal.fire({
      title: '¿Estás seguro de que quieres salir de tu perfil?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Salir de perfil'
      }).then((result) => {
      if (result.isConfirmed) {
         window.location.href = "../index.php";
      }
      })
   }
</script>
<script>
    function toggleButtonColor(event, buttonId) {
        event.preventDefault();
        const buttons = document.getElementsByClassName("enlaces");
        for (let i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove("clicked");
        }
        const button = document.getElementById(buttonId);
        button.classList.add("clicked");
    }
</script>
</body>



