<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
        $nombre_criterio = $_POST['nombre_criterio'];
		
		
		$sql = "INSERT INTO criterios (nombre_criterio) VALUES ('$nombre_criterio')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Criterio added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: criterios.php');

?>