<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
        $nombre_subcriterio = $_POST['nombre_subcriterio'];
		$id_criterio = $_POST2['id_criterio'];
		
		$sql = "INSERT INTO subcriterios (nombre_subcriterio, id_criterio) VALUES ('$nombre_subcriterio', '$id_criterio')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Subcriterio added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: subcriterios.php');

?>