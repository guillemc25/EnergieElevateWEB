<!DOCTYPE html>
<html>
<head>
  <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
  <title>EnergieElevate</title>
  <link rel="stylesheet" href="EstilosInicio.css"> <!-- Agrega el enlace al archivo CSS -->
</head>
<body>

  <!-- Agrega el logo y los botones antes del menú -->
  <header>
    <div>
      <a href="Inicio.html"><img src="logo.png" alt="Logo de Mi Sitio Web"></a>
    </div>
    <div>
    <h1><?php  ?></h1>
      <button onclick="redirectToForm()" type="button">Inicio de Sesión</button>
      <button onclick="redirectToRegistration()"type="button">Registro</button>
    </div>


  </header>

  <nav>
    <ul>
      <li><a href="Inicio.html">MI PAGINA DE INICIO</a></li>
      <li><a href="#">ALIMENTOS</a></li>
      <li><a href="#">EJERCICIO</a></li>
    </ul>
  </nav>

  <!-- Agrega el formulario aquí -->
  <form action="inicioSesion.php"  method="POST">
    <h2>Inicio de Sesión del usuario</h2>
    <input name="nusuario" type="text" placeholder="Nombre de usuario">
    <input name="contra" type="password" placeholder="Contraseña">
      <button type="submit">Iniciar Sesion</button>
 
  </form>

  <script>
    function redirectToForm() {
      window.location.href = "FormularioInicioSesion.php";
    }

    function redirectToRegistration() {
      window.location.href = "FormularioRegistro.html";
    }
  </script>
</body>
</html>
