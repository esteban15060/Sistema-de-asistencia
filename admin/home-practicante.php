<?php include 'includes/header-practicante.php'; ?>

<body class="bg-white">
   <?php include 'includes/menu-bar-practicante.php' ?>

   <div style="margin-left: 280px; margin-top: 30px; padding: 0 20px;" id="home-practicante">
      <div class="festividades">
         <div class="home-head">FESTIVIDADES</div>
         <h4 class="home-title">¡Feliz día del padre!</h4>
         <div class="festividades-image">

         </div>
         <p class="festividades-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec eros
            orci. Nunc varius eros at feugiat
            aliquet. Fusce faucibus nec velit sed tristique. Praesent eleifend ipsum a ante vehicula ornare.
         </p>
         <div class="festividades-btns">
            <div></div>
            <div></div>
            <div></div>
         </div>
      </div>

      <div class="calendario">
         <div>
            <p class="calendario-mes">JUNIO</p>
         </div>
         <a href="#">Ver más >></a>
      </div>

      <div class="anuncios">
         <div class="home-head">
            ANUNCIOS
         </div>
         <h4 class="home-title">Nueva Actualización del manual del trabajador</h4>
         <div class="anuncios-download">Archivo Adjunto</div>
      </div>

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