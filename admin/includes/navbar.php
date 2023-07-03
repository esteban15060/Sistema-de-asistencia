<header class="main-header">
<?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conexión a la base de datos
        $conn = mysqli_connect('localhost', 'root', '', 'asistencia');

        // Verificar conexión
        if (!$conn) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }

        // Obtener el código del practicante
        $codigo = $_POST['employee_id'];

        // Consultar los datos del practicante
        $query = "SELECT * FROM employees WHERE employee_id='$codigo'";
        $result = mysqli_query($conn, $query);

        // Verificar si se encontraron resultados
        if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        } else {
        echo "<div class='alert alert-danger'>No se encontró ningún practicante con el código ingresado.</div>";
        }

        // Cerrar la conexión a la base de datos
         mysqli_close($conn);
    }
?>
    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>NHL</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Asistencia</b> - NHL</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $user['firstname'].' '.$user['lastname']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $user['firstname'].' '.$user['lastname']; ?>
                  <small>Administrador</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Actualizar</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <?php include 'includes/profile_modal.php'; ?>