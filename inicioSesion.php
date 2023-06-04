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
if (isset($_POST['NombreUsuario']) && isset($_POST['contra'])) {
    $NombreUsuario = $_POST['NombreUsuario']; // Reemplaza 'NombreUsuario' con el nombre del campo del formulario
    $password = $_POST['contra']; // Reemplaza 'contra' con el nombre del campo del formulario

    // Consulta para verificar las credenciales del usuario
    $sql = "SELECT * FROM Usuario WHERE Usuario = '$NombreUsuario' AND Contraseña = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso
        $_SESSION['NombreUsuario'] = $NombreUsuario;
        header("Location: MiPaginaInicio.php"); //redirige a la págian principal
     
        exit;
    } else {
        // Credenciales inválidas
        
        header("Location: FormularioInicioSesion.php"); // Redirige al formulario de inicio de sesión
        exit;
    }
}

// Cerrar la conexión
$conn->close();
?>

