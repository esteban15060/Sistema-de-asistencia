<?php
	include 'includes/session.php';

	if(isset($_POST['add_grades'])){
        $empid = $_POST['id'];
		

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: employee.php');
?>