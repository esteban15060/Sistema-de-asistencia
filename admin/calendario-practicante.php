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
            <?php include 'includes/fotoperfil.php';?>
            <h6 class="ps-3 letraNavBar posicion-fecha"><?php echo $row['firstname'] ;?></h6>
         </div>
      </div>
   </nav>
   <aside class="main-sidebar color-menubar-practicante aside-modelo">
      <div class="siderbar-practicantes">
         <?php include 'includes/cambio_logo.php'?>
      </div>
      <br>
      <div class="nav-items">
         <div class="enlaces" href="home-practicante.php" id="button1" >
            <form method="post" action="home-practicante.php" class="form__ver-perfil">
               <input id="idPracticante" type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ;?>">
               <button type="submit" class="enlaces__btn" id="button1">
                  <a class="enlaces" href="#" id="button1" >
                     <img class="icono-centrar" src="../img/icono-home.webp">
                     <h6 class="text-center text-light letraNavBar">INICIO</h6>
                  </a>
               </button>
            </form>
         </div>
         <br>
         <div class="enlaces" href="perfil-practicante.php" id="button1" >
            <form method="post" action="perfil-practicante.php" class="form__ver-perfil">
               <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ;?>">
               <button type="submit" class="enlaces__btn" id="button1">
                  <a class="enlaces" href="#" id="button1" >
                     <img class="icono-centrar" src="../img/icono-perfil.webp">
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
                     <img class="icono-centrar" src="../img/icono-estadistica.webp" >
                     <h6 class="text-center text-light letraNavBar" style="width: 120px; margin-left: 15px;">ESTADISTICAS Y LOGROS</h6>
                  </a>
               </button>
            </form>
         </div>
         <br>
         <div class="enlaces clicked" href="calendario-practicante.php" id="button1" >
            <form method="post" action="calendario-practicante.php" class="form__ver-perfil">
               <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ;?>">
               <button type="submit" class="enlaces__btn" id="button1">
                  <a class="enlaces" href="#" id="button1" >
                     <img class="icono-centrar" src="../img/icono-calendario.webp" >
                     <h6 class="text-center text-light letraNavBar" style="width: 110px; margin-left: 20px;">CALENDARIO O AGENDA</h6>
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
                     <img class="icono-centrar" src="../img/icono-buzon-sugerencia.webp">
                     <h6 class="text-center text-light letraNavBar" style="width: 110px; margin-left: 20px;">BUZON DE SUGERENCIAS</h6>
                  </a>
               </button>
            </form>
         </div>
      </div>
      <br>
      <div class="mb-3 salir">
         <a class="enlaces" onclick="salirMiPerfil()">
            <img class="icono-centrar" src="../img/icono-salir.webp" >
            <h6 class="text-center text-light letraNavBar">SALIR</h6>
         </a>
      </div>
   </aside>
   <div class="container-fluid" id="calendario-agenda">
   <div class="buttons">

      <form method="post" action="calendario-practicante.php" class="form__calendar">
         <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ;?>">
         <input type="submit" value="MIS TAREAS" class="btn__calendar--active letraNavBar">
      </form>
      <form method="post" action="calendario-eventos-practicante.php" class="form__calendar">
         <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ;?>">
         <input type="submit" value="EVENTOS" class="btn__calendar letraNavBar">
      </form>
      <form method="post" action="calendario-general-practicante.php" class="form__calendar">
         <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ;?>">
         <input type="submit" value="GENERAL" class="btn__calendar letraNavBar">
      </form>

   </div>
    <div class="card" id="calendar">
        <div class="calendar_info">
            <div class="calendar_prev" id="prev-month"><img src="../img/flecha-izquierda.webp" style="width: 10px; height=10px;"></div>
            <div class="letraNavBar colorletraperfil calendar_month" id="month"></div>
            <div class="calendar_next" id="next-month"><img src="../img/flecha-derecha.webp" style="width: 10px; height=10px;"></div> 
        </div>
        <div>
            <div class="letraNavBar calendar_date" id="dates"></div>
        </div>
    </div>
    <br>
   <!--<script>
      let idPracticante = document.getElementById("idPracticante");
      if (idPracticante.value.length > 15) {
         window.location.href = "../index.php";
      }
   </script>-->
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
   <script src="../js/calendario.js"></script>
</body>