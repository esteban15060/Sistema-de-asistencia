<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id_criterio = $_POST['id'];
		$nombre_criterio = $_POST['nombre_criterio'];	

		$sql = "UPDATE criterios SET nombre_criterio = '$nombre_criterio' WHERE id = '$id_criterio'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Criterio actualizado satisfactoriamente';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Rellene el formulario de edición primero';
	}

	header('location:criterios.php');

?>