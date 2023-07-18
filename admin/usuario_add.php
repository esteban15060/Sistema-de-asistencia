<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		// Verificar si se proporcionó una contraseña válida
		if(empty($password)){
			$_SESSION['error'] = 'Debe ingresar una contraseña válida';
			header('location: usuario.php');
			exit();
		}

		$hash = password_hash($password, PASSWORD_DEFAULT);
		$nombre = $_POST['firstname'];
		$last = $_POST['lastname'];
		$rango = $_POST['rango'];

		$sql = "INSERT INTO admin (username, password, firstname, lastname, id_rango) VALUES ('$username', '$hash', '$nombre', '$last', '$rango')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Usuario añadido satisfactoriamente';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: usuario.php');
?>