<?php 
	include 'includes/session.php';

	if(isset($_POST['id_criterio'])){
		$id_criterio = $_POST['id_criterio'];
		$sql = "SELECT * FROM criterios WHERE id_criterio = '$id_criterio'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>