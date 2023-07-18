<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Asistencia NHL</title>
	<link rel="icon" href="images/faviconconfiguroweb.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 5.3.0 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

	<!-- Full Calendar JS -->
	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!-- daterange picker -->
	<link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<!-- Bootstrap time Picker -->
	<link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
	<!-- bootstrap datepicker -->
	<link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
		 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<link rel="stylesheet" href="../css/estilos_practicante.css">
	<!-- ESTILOS BUZON SUGERENCIAS -->
	<link rel="stylesheet" href="../css/buzon.css">
	<!-- Google Font -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Conexión a la base de datos
		include 'includes/conn.php';

		// Obtener el código del practicante
		$codigo = $_POST['employee_id'];

		// Consultar los datos del practicante
		$query = "SELECT e.*, p.description AS position, n.nombre_negocio AS negocio, s.time_in AS ingreso, s.time_out AS salida FROM employees e
              LEFT JOIN position p ON e.negocio_id = p.id
			  LEFT JOIN negocio n ON e.negocio_id = n.id
			  LEFT JOIN schedules s ON e.negocio_id = s.id
              WHERE e.employee_id='$codigo'";
		// $query = "SELECT * FROM employees WHERE employee_id='$codigo'";
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
</head>