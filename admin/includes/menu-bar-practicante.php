<?php
   $meses = array(
      1 => 'enero',
      2 => 'febrero',
      3 => 'marzo',
      4 => 'abril',
      5 => 'mayo',
      6 => 'junio',
      7 => 'julio',
      8 => 'agosto',
      9 => 'septiembre',
      10 => 'octubre',
      11 => 'noviembre',
      12 => 'diciembre'
   );

   $diaActual = date("d");
   $mesActual = $meses[date("n")];

?>
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
      <a class="enlaces" href="home-practicante.php" onclick="toggleButtonColor(event, 'button1')" id="button1" >
         <img class="icono-centrar" src="../img/icono-home.webp" height="40" width="40">
         <h6 class="text-center text-light letraNavBar">INICIO</h6>
      </a>
      <br>
      <a class="enlaces clicked" href="perfil-practicante.php" onclick="toggleButtonColor(event, 'button2')" id="button2">
         <img class="icono-centrar" src="../img/icono-perfil.webp" height="40" width="40">
         <h6 class="text-center text-light letraNavBar">MI PERFIL</h6>
      </a>
      <br>
      <a class="enlaces" href="home-practicante.php" onclick="toggleButtonColor(event, 'button3')" id="button3">
         <img class="icono-centrar" src="../img/icono-estadistica.webp" height="40" width="40">
         <h6 class="text-center text-light letraNavBar" style="width: 120px; margin-left: 15px;">ESTADISTICAS Y LOGROS</h6>
      </a>
      <br>
      <a class="enlaces" href="home-practicante.php" onclick="toggleButtonColor(event, 'button4')" id="button4">
         <img class="icono-centrar" src="../img/icono-calendario.webp" height="40" width="40">
         <h6 class="text-center text-light letraNavBar" style="width: 110px; margin-left: 20px;">CALENDARIO O AGENDA</h6>
      </a>
   </div>
   <div class="mb-3 salir">
      <a class="enlaces" href="#">
         <img class="icono-centrar" src="../img/icono-salir.webp" height="40" width="40">
         <h6 class="text-center text-light letraNavBar">SALIR</h6>
      </a>
   </div>
</aside>

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
