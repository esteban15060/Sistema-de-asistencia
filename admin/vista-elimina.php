<?php
include 'vista-coneccion.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $stmt = $pdo->prepare("SELECT * FROM imagen_frase WHERE id = ?");
  $stmt->execute([$id]);
  $imagen = $stmt->fetch();

  if (!$imagen) {
    die("Imagen no encontrada.");
  }

  $stmt = $pdo->prepare("DELETE FROM imagen_frase WHERE id = ?");
  $stmt->execute([$id]);

  unlink('img/' . $imagen['nombre']); // Eliminar la imagen del servidor

  header("Location: vista-asistencia.php");
  exit();
} else {
  die("ID de imagen no proporcionado.");
}
?>