<?php

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

// Recoger los datos del formulario
$nombre = $_POST['nombre']; 
$NombreUsuario = $_POST['nusuario']; 
$Apellidos = $_POST['apellidos']; 
$correo = $_POST['Celectronico']; 
$contra = $_POST['contra']; 

// Crear la consulta INSERT
$sql = "INSERT INTO Usuario (Nombre, Apellidos, Usuario, Correo_Electronico, Contraseña) VALUES ('$nombre',  '$Apellidos', '$NombreUsuario', '$correo', '$contra')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "<script>; window.location.href = 'inicio.html'</script>";
} else {
    echo "<script>alert('Error al registrar el usuario: " . $conn->error . "');</script>";
}

// Cerrar la conexión
$conn->close();
?>


