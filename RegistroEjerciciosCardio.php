<?php
session_start();

// Resto del código de tu archivo PaginaAlimentacion.php
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
  <title>EnergieElevate</title>
  <link rel="stylesheet" href="EstilosInicio.css"> <!-- Agrega el enlace al archivo CSS -->
  <!-- Agrega el enlace al archivo de Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/css/bootstrap.min.css">
  <style>
    /* Mantén tus estilos personalizados aquí */

    .user-container {
      display: flex;
      align-items: center;
    }

    .username {
      font-size: 18px;
      margin-right: 10px;
    }

    .logout-button {
      padding: 5px 10px;
      border: none;
      border-radius: 4px;
      color: #fff;
      background-color: #007bff;
      border-color: #007bff;
      text-decoration: none;
      margin-right: 10px;
    }

    .logout-button:hover {
      background-color: #2980b9;
    }

    .separator {
      display: inline-block;
      width: 2px;
      height: 20px;
      background-color: #ccc;
      margin: 0 10px;
    }

    .already-user {
      margin-top: 10px;
      font-size: 14px;
    }

    .search-bar {
      display: flex;
      justify-content: center;
      margin-top: 50px;
    }

    .search-input {
      width: 300px;
      border-radius: 5px 0 0 5px;
      padding: 10px;
      border: 1px solid #ccc;
      font-size: 16px;
    }

    .search-button {
      
      padding: 10px 20px;
      font-size: 16px;
      margin-left: 10px;
      font-size: 13px;
      width: auto;
      display: inline-block;
      border: 1px solid #408140;
      border-radius: 5px;
      padding: 8px 25px;
      text-align: center;
      cursor: pointer;
      color: #FFFFFF;
      text-transform: capitalize;
      background-color: #51a351;
    }

   
    .main-title {
      margin-top: 10px;
      font-size: 24px;
      color: #0a5282;
      font-size: 22px;
      margin: 17px 0 20px;
      padding: 20px;
      border-bottom: 1px solid #e6e6e6;
    }

    .secondary-title {
      color: #0a5282;
      font-size: 18px;
      font-weight: bold;
      margin-top: 20px;
      
      outline: 0;
      padding: 0;
      vertical-align: baseline;
    }

    .block-4 {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    #sort-block {
      margin-right: 20px;
    }

    #matching {
      padding-left: 0;
      list-style-type: none;
      border: 1px solid #ccc; /* Agrega el borde deseado */
      height: 200px;
    }

    #matching li {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <div>
        <a href="MiPaginaInicio.php" class="logo"><img src="logo.png" alt="Logo de Mi Sitio Web"></a>
      </div>
      <div class="user-container">
        <?php
          if (isset($_SESSION['NombreUsuario'])) {
            $username = $_SESSION['NombreUsuario'];
            echo "<span class='username'>Hola, $username</span>";
          }
        ?>
        <span class='separator'></span>
        <a href='CerrarSesion.php' class='logout-button'>Cerrar Sesión</a>
      </div>
    </header>

    <nav>
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="MiPaginaInicio.php">MI PAGINA DE INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="PaginaAlimentacion.php">ALIMENTOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="PaginaEjercicio.php">EJERCICIO</a>
        </li>
      </ul>
    </nav>

    <div class="Busqueda-ejercicios" style="  max-width: 600px; padding: 5px; border: 2px solid #ccc;  margin: 0 auto;">

    <div class="Busqueda" style="text-align: center; margin-top: 20px;">
      <h1 class="main-title" style="max-width: 600px; margin: 0 auto;">Añadir Ejercicio de Cardio</h1>
      <h1 class="secondary-title">Busca en nuestra base de datos de ejercicios por nombre:</h1>
    </div>

    <div class="search-bar" style="margin-top: 50px; text-align: center;">
      <input type="text" class="form-control search-input" placeholder="Buscar">
      <button class="btn btn-primary search-button">Búsqueda</button>
    </div>

    <div class="block-4">
      <div id="sort-block">
        <h1 class="secondary-title search_">Ejercicios que coinciden:</h1>
      </div>
      
    </div>
    <div class="resultado" style="max-width: 600px;  margin: 0 auto;">
        <ul id="matching" style="padding: 10px; border: 1px solid #ccc;">
          <li  style="border-bottom: 1px solid #ccc;"><p>No se encontraron resultados.</p></li>
        </ul>
      </div>

    </div>

  </div>

  <script>
    function redirectToForm() {
      window.location.href = "FormularioInicioSesion.php";
    }

    function redirectToRegistration() {
      window.location.href = "FormularioRegistro.php";
    }
    function redirectToAlimentacion() {
      window.location.href = "PaginaAlimentacion.php";
    }
    function redirectToEjercicio() {
      window.location.href = "PaginaEjercicio.php";
    }
  </script>
</body>
</html>
