<!DOCTYPE html>
<html>
<head>
  <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
  <title>EnergieElevate</title>
  <link rel="stylesheet" href="EstilosInicio.css"> <!-- Agrega el enlace al archivo CSS -->

  <style>

    .username {
    font-size: 18px;
    
    margin-right: 20px;
    }
    .logo{
        margin-right: 50px;
    }
    .btnInicioSesion {
      margin-right: 200px;
    }

    .btnRegistro {
      margin-right: 200px;
    }

    .already-user {
      margin-top: 10px;
      font-size: 14px;
    }
   
    
    </style>
</head>
<body>

  <!-- Agrega el logo y los botones antes del menú -->
  <header>
    <div>
    <a  class="logo"><img src="logo.png" alt="Logo de Mi Sitio Web"></a>
    </div>
    <div>
    
      <button class="btnInicioSesion" onclick="redirectToForm()" type="button">Inicio de Sesión</button>
      <button class="btnRegistro" onclick="redirectToRegistration()"type="button">Registro</button>
    </div>


  </header>

  <nav>
    <ul>
      
      <li><a href="#">ALIMENTOS</a></li>
      <li><a href="#">EJERCICIO</a></li>
    </ul>
  </nav>

  <!-- Agrega el formulario aquí -->
  <form action="inicioSesion.php"  method="POST">
    <h2>Inicio de Sesión del usuario</h2>
    <input name="NombreUsuario" type="text" placeholder="Nombre de usuario">
    <input name="contra" type="password" placeholder="Contraseña">
    <button type="submit">Iniciar Sesion</button>
    <span class="already-user">¿Todavio no eres usuario?, <a href="FormularioRegistro.php">Registrarte ahora!</a></span>
 
  </form>

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
