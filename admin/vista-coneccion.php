<?php
$host = 'localhost';
$db   = 'asistencia';
$user = 'root';
$pass = '';

try {
  $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
  $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
  ];
  $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
  die("Error de conexión: " . $e->getMessage());
}
?>