<?php
$servername = "localhost";
$username = "root"; // Nombre de usuario por defecto
$password = ""; // Contraseña por defecto (déjala en blanco si no has establecido una)
$dbname = "tech_innovators";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
