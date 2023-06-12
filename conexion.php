<?php
session_start();
$servername = "db4free.net:3306"; // Nombre del servidor
$username = "guille"; // Nombre de usuario de la base de datos
$password = "ManzaGuille789"; // Contraseña de la base de datos
$dbname = "energieelevate"; // Nombre de la base de datos

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}
?>
