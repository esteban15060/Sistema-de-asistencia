<?php
include 'vista-coneccion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


  $imagen = $_FILES['imagen'];

  // Obtener información de la imagen
  $nombreImagen = $imagen['name'];
  $tipoImagen = $imagen['type'];
  $tamañoImagen = $imagen['size'];
  $rutaImagen = 'fondo/' . $nombreImagen;

  // Verificar si el archivo es una imagen válida
  $extensionesPermitidas = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
  $extension = pathinfo($rutaImagen, PATHINFO_EXTENSION);

  if (!in_array(strtolower($extension), $extensionesPermitidas)) {
    die("Error: Solo se permiten archivos de imagen JPG, JPEG, PNG o GIF.");
  }

  // Mover la imagen a la carpeta destino
  if (move_uploaded_file($imagen['tmp_name'], $rutaImagen)) {
    // Insertar la imagen en la base de datos
    $stmt = $pdo->prepare("INSERT INTO fondo (nombre) VALUES (?)");
    $stmt->execute([$nombreImagen]);

    header("Location: vista-asistencia.php");
    exit();
  } else {
    echo "Error al cargar la imagen.";
  }
}
?>