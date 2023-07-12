<?php
include "includes/conn.php";

// Ejecutar la consulta SELECT con la suma de num_hr sin decimales
$sql = "SELECT ROUND(SUM(num_hr)) AS total_num_hr FROM attendance WHERE employee_id = ".$row['id'];
$result = $conn->query($sql);

// Verificar si se encontraron registros
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_num_hr = $row["total_num_hr"];
} else {
    echo "No se encontraron registros para employee_id = ".$row['id'];
}

// Cerrar la conexión
$conn->close();

$percentage= $total_num_hr;
$total = 300;

$totalDeg = $total/100;
$CircularDeg = $percentage/$totalDeg;
$percentageDeg= 100-$CircularDeg;
?>