<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id_subcriterio = $_POST['id'];
		$nombre_subcriterio = $_POST['nombre_subcriterio'];
        $id_criterio = $_POST['edit_cri_nombre'];	

		$sql = "UPDATE subcriterios SET nombre_subcriterio = '$nombre_subcriterio', id_criterio = '$id_criterio' WHERE id = '$id_subcriterio'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Subcriterio actualizado satisfactoriamente';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Rellene el formulario de edición primero';
	}

	header('location:subcriterios.php');

?>