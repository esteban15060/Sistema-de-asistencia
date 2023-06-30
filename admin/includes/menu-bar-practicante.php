<nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-left: 150px;">
   <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Dropdown
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
               </ul>
            </li>
            <li class="nav-item">
               <a class="nav-link disabled">Disabled</a>
            </li>
         </ul>
         <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
         </form>
      </div>
   </div>
</nav>
<aside class="main-sidebar color-menubar-practicante" style="position: fixed; top: 0; left: 0; height: 100vh; width: 150px; display: flex; flex-direction: column; justify-content: space-between;">
   <div class="siderbar-practicantes">
      <img class="logo" src="../images/neon-house-led-logo.png" alt="logo" height="80">
   </div>
   <div class="nav-items">
      <a class="enlaces" href="home-practicante.php" onclick="toggleButtonColor(event, 'button1')" id="button1" >
         <img class="icono-centrar" src="../../iconos/icono-home.webp" height="40" width="40">
         <h6 class="text-center text-light letraNavBar">INICIO</h6>
      </a>
      <br>
      <a class="enlaces" href="home-practicante.php" onclick="toggleButtonColor(event, 'button2')" id="button2">
         <img class="icono-centrar" src="../../iconos/icono-perfil.webp" height="40" width="40">
         <h6 class="text-center text-light letraNavBar">MI PERFIL</h6>
      </a>
      <br>
      <a class="enlaces" href="home-practicante.php" onclick="toggleButtonColor(event, 'button3')" id="button3">
         <img class="icono-centrar" src="../../iconos/icono-estadistica.webp" height="40" width="40">
         <h6 class="text-center text-light letraNavBar" style="width: 120px; margin-left: 15px;">ESTADISTICAS Y LOGROS</h6>
      </a>
      <br>
      <a class="enlaces" href="home-practicante.php" onclick="toggleButtonColor(event, 'button4')" id="button4">
         <img class="icono-centrar" src="../../iconos/icono-calendario.webp" height="40" width="40">
         <h6 class="text-center text-light letraNavBar" style="width: 110px; margin-left: 20px;">CALENDARIO O AGENDA</h6>
      </a>
   </div>
   <div class="mb-3">
      <a class="enlaces" href="#">
         <img class="icono-centrar" src="../../iconos/icono-salir.webp" height="40" width="40">
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
