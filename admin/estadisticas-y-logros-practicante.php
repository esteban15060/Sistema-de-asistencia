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
         <div class="enlaces clicked" href="estadisticas-y-logros-practicante.php" id="button1" >
            <form method="post" action="estadisticas-y-logros-practicante.php" class="form__ver-perfil">
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
         <div class="enlaces" href="calendario-practicante.php" id="button1" >
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
    <div class="container-fluid" id="grid-estadistica-general">
        <div>
            <div class="card" id="logros-semanal">
               <div class="circle-logro-semanal-1"></div>
               <div class="line-logro-semanal-1"></div>
               <div class="circle-logro-semanal-2"><img class="insignia-logro"  src="../img/bronce-insignia.webp"></div>
               <div class="line-logro-semanal-2"></div>
               <div class="circle-logro-semanal-3"><img class="insignia-logro"  src="../img/plata-insignia_1.webp"></div>
               <div class="line-logro-semanal-3"></div>
               <div class="circle-logro-semanal-4"><img class="insignia-logro"  src="../img/oro-insignia_1.webp"></div>
               <div class="line-logro-semanal-4"></div>
               <div class="circle-logro-semanal-5"><img class="insignia-logro"  src="../img/maxima-insignia.webp"></div>
            </div>
            <div class="buttons-estadistica">
               <form method="post" action="#" class="form__calendar">
                  <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ;?>">
                  <input type="submit" value="GENERAL" class="btn__calendar--active letraNavBar text-light">
               </form>
               <form method="post" action="#" class="form__calendar calendar-button-color">
                  <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ;?>">
                  <input type="submit" value="ÚLTIMO MES" class="btn__calendar letraNavBar text-light ">
               </form>
               <form method="post" action="#" class="form__calendar calendar-button-color">
                  <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'] ;?>">
                  <input type="submit" value="ÚLTIMA SEMANA" class="btn__calendar letraNavBar text-light">
               </form>
            </div>
            <div id="estadistica-logro-practicante">
               <div class="card" id="estadistica-desempeño-1">

               </div>
               <div class="card" id="resumen-estadistica-1">

               </div>
               <div class="card" id="estadistica-desempeño-2">

               </div>
               <div class="card" id="resumen-estadistica-2">

               </div>
               <div class="card" id="estadistica-desempeño-3">

               </div>
               <div class="card" id="resumen-estadistica-3">

               </div>
            </div>
            
        </div>
        <div class="card" id="logros-obtenidos-practicante">

        </div>
    </div>
</body>








