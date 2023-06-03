<?php
// Función para obtener el nombre de usuario desde la base de datos
function obtenerNombreUsuario() {
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

    // Verificar si el usuario ha iniciado sesión
    if (isset($_SESSION['nusuario'])) {
        $username = $_SESSION['nusuario'];

        // Consulta para obtener el nombre de usuario desde la base de datos
        $sql = "SELECT Nombre FROM Usuario WHERE Usuario = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nombreUsuario = $row['Nombre'];
        } else {
            $nombreUsuario = 'Usuario desconocido';
        }
    } else {
        $nombreUsuario = 'Invitado';
    }

    // Cerrar la conexión
    $conn->close();

    return $nombreUsuario;
}
?>
