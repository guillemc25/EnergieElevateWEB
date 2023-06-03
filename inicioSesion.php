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

// Verificar si se ha enviado el formulario de inicio de sesión

    $NombreUsuario = $_POST['nusuario']; // Reemplaza 'username' con el nombre del campo del formulario
    $password = $_POST['contra']; // Reemplaza 'password' con el nombre del campo del formulario

    // Consulta para verificar las credenciales del usuario
    $sql = "SELECT * FROM Usuario WHERE Usuario = '$NombreUsuario' AND Contraseña = '$password'";
    $result = $conn->query($sql);

    if ($result->fetch_assoc()) {
        // Inicio de sesión exitoso
        $_SESSION['nusuario'] = $username;
        echo "<script>alert('Inicio de sesión exitoso'); window.location.href = 'inicio.html';</script>";
        exit;
    } else {
        // Credenciales inválidas
        echo "<script>alert('Credenciales inválidas'); window.location.href = 'FormularioInicioSesion.html';</script>";
        exit;
    }


// Cerrar la conexión
$conn->close();


?>
