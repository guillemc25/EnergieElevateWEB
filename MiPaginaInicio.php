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
      background-color: #3498db;
      color: #fff;
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

    .contenedor {
      
      
  justify-content: center;
    }

    .resumen-diario-container {
      background-color: #E0E0E0;
      padding: 100px;
      margin-top: 20px;
      margin-left: 100px;
    }

    .resumen-encuadro {
      display: flex;
    }

    .tu-resumen-diario {
      background-color: #0a5282;
      font-family: "Inter",Helvetica,Arial,-apple-system,sans-serif;
      color: white;
      margin-top: 10px;
      padding: 1px;
      padding-left: 20px;
      margin-right: 250px;
  margin-left: 100px;
      
    }

    .resumen-diario {
      display: flex;
      background-color: #E0E0E0;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 50px;
      margin-right: 250px;
  margin-left: 100px;
      padding: 50px;
     
    }

    .calorias-consumidas-info {
      flex: 1;
      margin-left: 5px;
      margin-top: 0px;
    }

    .calorias-consumidas {
      border-bottom: 2px solid #ccc;
      margin-right: 200px;
      
    }

    .calorias-consumidas .titulo {
      font-size: 24px;
      font-weight: bold;
      color: #333;
    }

    .calorias-consumidas .cantidad {
      color: rgb(133, 196, 0);
      font-weight: 700;
      font-size: 60px;
      line-height: 40px;
      letter-spacing: -1px;
    }

    .botones-acciones {
      display: flex;
      gap: 20px;
     
    }

    .info-alimentos-ejercicio p {
      display: inline-block;
      margin: 0 10px;
      font-size: 24px;
      font-weight: bold;
      color: #333;
      margin-top: 50px;
      
    }

    .btn-ejercicio,
    .btn-alimentos {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      box-sizing: border-box;
      outline: 0px;
      cursor: pointer;
      user-select: none;
      vertical-align: middle;
      text-decoration: none;
      font-family: Inter, Helvetica, Arial, -apple-system, sans-serif;
      font-weight: 500;
      font-size: 0.8125rem;
      line-height: 1.75;
      min-width: 64px;
      transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
      background-color: rgb(255, 255, 255);
      width: 100%;
      border-radius: 4px;
      padding: 8px 20px;
      box-shadow: none;
      letter-spacing: 0.015625rem;
      color: rgb(102, 102, 102);
      border: 1px solid rgb(210, 210, 210);
      text-transform: capitalize;
    }

    .btn-ejercicio:hover,
    .btn-alimentos:hover {
      background-color: #ccc;
    }
  </style>
</head>
<body>
  <!-- Agrega el contenedor principal de Bootstrap -->
  <div class="container">
    <header>
      <div>
        <a href="MiPaginaInicio.php" class="logo"><img src="logo.png" alt="Logo de Mi Sitio Web"></a>
      </div>
      <div class="user-container">
        <?php
          session_start();
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

    <div class="contenedor">
      <div class="resumen-diario-container"></div>

      <div class="tu-resumen-diario">
        <h2>Tu resumen diario</h2>
      </div>

      <div class="resumen-diario">
        <div class="calorias-consumidas-info">
          <div class="calorias-consumidas">
            <p class="titulo">Calorías consumidas</p>
            <p class="cantidad">0</p>
          </div>
          <div class="calorias-consumidas">
            <p class="titulo">Calorías quemadas</p>
            <p class="cantidad">0</p>
          </div>
          <div class="info-alimentos-ejercicio">
            <p class="numEjercicios">0</p>
            <p>Ejercicios</p>
            <p class="NumAlimentos">0</p>
            <p>Alimentos</p>
          </div>
        </div>
        <div class="botones-acciones">
          <button onclick="redirectToEjercicio()" class="btn btn-ejercicio">Añadir Ejercicio</button>
          <button onclick="redirectToAlimentacion()" class="btn btn-alimentos">Añadir Alimentos</button>
        </div>
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
