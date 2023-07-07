<?php
	$conn = new mysqli('127.0.0.1:3310', 'root', '', 'asistencia');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>