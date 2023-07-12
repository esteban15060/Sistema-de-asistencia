<?php
include "includes/conn.php";

// Ejecutar la consulta SELECT con la suma de num_hr sin decimales
$sqlHr = "SELECT ROUND(SUM(num_hr)) AS total_num_hr FROM attendance WHERE employee_id = ".$row['id'];
$resultHr = $conn->query($sqlHr);

// Verificar si se encontraron registros
if ($resultHr->num_rows > 0) {
    $rowHr = $resultHr->fetch_assoc();
    $total_num_hr = $rowHr["total_num_hr"];
} else {
    echo "No se encontraron registros para employee_id = ".$rowHr['id'];
}

$percentage= $total_num_hr;
if ($row['time_practice'] == 3) {
    $total = 320;
} elseif ($row['time_practice'] == 5) {
    $total = 533;
}  else{
    $total = 320;
}


$totalDeg = $total/100;
$CircularDeg = $percentage/$totalDeg;
$percentageDeg= 100-$CircularDeg;

// Cerrar la conexión
$conn->close();
?>