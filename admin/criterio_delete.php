<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id_criterio = $_POST['id'];
		$sql = "DELETE FROM criterios WHERE id = '$id_criterio'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Criterio eliminado con éxito';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Seleccione el elemento para eliminar primero';
	}

	header('location: criterios.php');
	
?>