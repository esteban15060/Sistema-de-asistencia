<?php
include 'includes/session.php';

if (isset($_POST['add'])) {
    $nombre_subcriterio = $_POST['nombre_subcriterio'];
    $id_criterio = $_POST['id_criterio'];

    // Verificar si los campos están vacíos
    if (empty($nombre_subcriterio) || empty($id_criterio)) {
        $_SESSION['error'] = 'Por favor, completa todos los campos';
    } else {
        $sql = "INSERT INTO subcriterios (nombre_subcriterio, id_criterio) VALUES ('$nombre_subcriterio', '$id_criterio')";
        if ($conn->query($sql)) {
            $_SESSION['success'] = 'Subcriterio agregado correctamente';
        } else {
            $_SESSION['error'] = $conn->error;
        }
    }
} else {
    $_SESSION['error'] = 'Completa primero el formulario de agregar';
}

header('location: subcriterios.php');
?>
