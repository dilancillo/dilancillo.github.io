<?php
$host = "localhost"; $dbname = "navidad_santa"; $username = "root"; $password = "";
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password, [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
  ]);
} catch (PDOException $e) {
  http_response_code(500);
  die("<main style='font-family:Arial;padding:30px'><h2>No se pudo conectar con MySQL</h2><p>Enciende MySQL en XAMPP e importa el archivo database.sql desde phpMyAdmin.</p></main>");
}