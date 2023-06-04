<?php
// Inicia la sesión
session_start();

// Destruye todas las variables de sesión
session_destroy();

// Redirecciona al archivo de inicio de sesión u otra página deseada
header("Location: Inicio.php");
exit;
?>
