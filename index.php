<?php session_start(); ?>
<?php include 'header.php'; ?>
<?php
  include 'admin/vista-coneccion.php';

  $stmt1 = $pdo->query("SELECT * FROM imagenes LIMIT 1");
  $imagen1 = $stmt1->fetch();

  $stmt4 = $pdo->query("SELECT * FROM fondo LIMIT 1");
  $imagen4 = $stmt4->fetch();
?>
<body style="background-image: url(<?='admin/fondo/'. $imagen4['nombre'] ?>);">
<div class="asistencia">
  <div class="asistencia__contend">
    <div class="asistencia__campos">
      <h1 class="asistencia__tittle">¡Hola, Neonhouseled SAC te da la bienvenida!</h1>
      <div class="alert alert-dismissible mt20 text-center success__alert name__lert" style="display:none;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <span class="result"><span class="message"></span></span>
      </div>
      <div class="alert alert-dismissible mt20 text-center danger__alert tittle__error" style="display:none;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <span class="result">
          <img src="img/alert.png" alt="alert" class="img_alert"><br>
          <span class="message"></span>
        </span>
      </div>
      <div class="asistencia__frace-time">
        <div class="login-logo login-time_asistencia">
          <h1 id="date" class="fecha__cambio time-asistencia3"></h1>
          <body onload="displayTime();">
            <div id="clock"></div>
          </body>
          <p style="display:none;"  id="time" class="time-asistencia time-asistencia2"></p>
          <div class="alert alert-dismissible mt20 text-center success__alert asistencia__frace-on asistencia-sep" style="display:none;">
          <span class="result ">
            <button type="submit" class=" btn_perfil-estadisticas" name="">VISITAR MI PERFIL</button><br>
            <button type="submit" class=" btn_perfil-estadisticas" name="">VER MIS ESTADÍSTICAS</button>
          </span>
        </div>
        </div>
        <div class="alert alert-dismissible text-center success__alert asistencia__frace-on " style="display:none;">
          <span class="result">
            <img class="aistencia__img-frace" src="<?='admin/img/'. $imagen1['nombre'] ?>"> <br>
          </span>
        </div>
      </div>
      
      <div class="alert alert-dismissible mt20 text-center danger__alert" style="display:none;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <span class="result"><button class=" btn_perfil-estadisticas volver-btn" onclick="location.reload()">VOLVER</button></span>
      </div>
      <form id="attendance" class="asistencia__form-in">
          <div class="form-group mx-sm-4 pt-3 asistencia__form">
            <select class="form-control asistencia-imput select__imput" placeholder="Elegir Turno" name="status">
              <option value="in">INGRESO</option>
              <option value="out">SALIDA</option>
              <!--<option>MI PERFIL</option>-->
            </select>
          </div>
          <div class="form-group mx-sm-4 pt-3 asistencia__form"> 
              <input class="form-control asistencia-imput code__imput" placeholder="CÓDIGO ID" id="employee" name="employee" required>
              <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
          </div>
          <br>
          <div class="form-group mx-sm-4 pb-2 asistencia__form"">
            <button type="submit" onclick="removeImput(); stopTime()" class="btn btn-block ingresar asistencia-imput login-btn__asistencia" name="signin">ENTRAR</button>
          </div>
      </form>
      <div class="alert alert-dismissible text-center success__alert asistencia__frace-on frase__down" style="display:none;">
      <span class="result">
        <div class="asistencia__frace">
            <span class="frase"><?= $imagen1['frase_motivacional'] ?></span>
        </div>
      </span>
    </div>
    <title>Reloj Funcional en PHP con Botón de Pausa</title>
    <script type="text/javascript">
        var timer;
        function displayTime() {
            var time = new Date();
            var hours = time.getHours();
            var minutes = time.getMinutes();
            var seconds = time.getSeconds();
            var ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12;
            minutes = minutes < 10 ? '0'+minutes : minutes;
            seconds = seconds < 10 ? '0'+seconds : seconds;
            var currentTime = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
            document.getElementById('clock').innerHTML = currentTime;
            timer = setTimeout(displayTime, 1000);
        }
        function stopTime() {
          let caracter = document.querySelector(".code__imput").value;
          if (caracter.length > 0) {
            clearTimeout(timer);
          }
        }
    </script>
    </div>
  </div>
</div>


<?php include 'scripts.php' ?>
<script type="text/javascript">
$(function() {
  var interval = setInterval(function() {
    var momentNow = moment();

moment.lang('es', {
  months: 'Enero_Febrero_Marzo_Abril_Mayo_Junio_Julio_Agosto_Septiembre_Octubre_Noviembre_Diciembre'.split('_'),
  monthsShort: 'Enero._Feb._Mar_Abr._May_Jun_Jul._Ago_Sept._Oct._Nov._Dec.'.split('_'),
  weekdays: 'Domingo_Lunes_Martes_Miercoles_Jueves_Viernes_Sabado'.split('_'),
  weekdaysShort: 'Dom._Lun._Mar._Mier._Jue._Vier._Sab.'.split('_'),
  weekdaysMin: 'Do_Lu_Ma_Mi_Ju_Vi_Sa'.split('_')
})


    $('#date').html(momentNow.format('dddd').substring(0,10).toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY'));  
    $('#time').html(momentNow.format('hh:mm:ss A'));
  }, 100);

  $('#attendance').submit(function(e){
    e.preventDefault();
    var attendance = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'attendance.php',
      data: attendance,
      dataType: 'json',
      success: function(response){
        if(response.error){
          $('.alert').hide();
          $('.danger__alert').show();
          $('.message').html(response.message);
        }
        else{
          $('.alert').hide();
          $('.success__alert').show();
          $('.message').html(response.message);
          $('#employee').val('');
        }
      }
    });
  });
    
});
</script>
<script type="text/javascript">
  let ocultarImput = document.querySelector(".asistencia__form-in");
  let title = document.querySelector(".asistencia__tittle");
  let caracter = document.querySelector(".code__imput");
  let cambioTime = document.querySelector(".time-asistencia");
  let cambioFecha = document.querySelector(".fecha__cambio");
  function removeImput() {
    if (caracter.value.length > 0) {
      ocultarImput.classList.add("remove__imput");
      title.classList.add("remove__imput");
      cambioTime.classList.add("time-asistencia2");
      cambioFecha.classList.add("time-asistencia3");
    }
  }
</script>
</body>
</html>


<?php 
  include('admin/includes/conn.php');
  $query = "select * from imagenes";
  $resultado = mysqli_query($conn,$query);
?>