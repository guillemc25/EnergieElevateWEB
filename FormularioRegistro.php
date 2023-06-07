<!DOCTYPE html>
<html>
<head>
  <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
  <title>EnergieElevate</title>
  <link rel="stylesheet" href="EstilosInicio.css"> <!-- Agrega este enlace al archivo CSS -->

  <style>
    .btnInicioSesion {
      margin-right: 200px;
      

    }

    .btnRegistro {
      margin-right: 200px;
    
    }

    .user {
      margin-top: 10px;
      font-size: 14px;
    }
    </style>
</head>
<body>

  <!-- Agrega el logo y los botones antes del menú -->
  <header>
    <div>
      <a><img src="logo.png" alt="Logo de Mi Sitio Web"></a>
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


<form action="Registro.php" method="POST">
  <h2>Registrarte</h2>
  <input name="nombre" type="text" placeholder="Nombre" value="">
  <input name="nusuario" type="text" placeholder="Nombre de usuario" value="">
  <input name="apellidos" type="text" placeholder="Apellidos" value="">
  <input name="Celectronico" type="text" placeholder="Correo Electronico" value="">
  <input name="contra" type="password" placeholder="Contraseña" value="">
  <button type="submit">Registrarte</button>
  <span class="user">¿Ya eres usuario?, <a href="FormularioInicioSesion.php">Iniciar Sesión</a></span>
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
