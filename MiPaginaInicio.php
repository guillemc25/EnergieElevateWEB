<!DOCTYPE html>
<html>
<head>
  <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
  <title>EnergieElevate</title>
  <link rel="stylesheet" href="EstilosInicio.css"> <!-- Agrega el enlace al archivo CSS -->
  <style>

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
  margin-right: 250px;
  margin-left: 10px;
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

    
    </style>
</head>
<body>

  <!-- Agrega el logo y los botones antes del menú -->
  <header >
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
    <ul>
      <li><a href="MiPaginaInicio.php">MI PAGINA DE INICIO</a></li>
      <li><a href="#">ALIMENTOS</a></li>
      <li><a href="#">EJERCICIO</a></li>
    </ul>
  </nav>



  <script>
    function redirectToForm() {
      window.location.href = "FormularioInicioSesion.php";
    }

    function redirectToRegistration() {
      window.location.href = "FormularioRegistro.php";
    }
  </script>
</body>
</html>
