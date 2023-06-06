<!DOCTYPE html>
<html>
<head>
  <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
  <title>EnergieElevate</title>
  <link rel="stylesheet" href="EstilosInicio.css"> <!-- Agrega el enlace al archivo CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    /* Estilos adicionales */
    .image-container {
      display: flex;
      justify-content: space-between;
      margin: 20px 0;
      margin-left: 20px;
      margin-top: 100px;
      max-width: 100%;
    }

    .image-container img {
      width: 30%;
      margin-right: 20px; /* Ajusta el margen derecho según tus preferencias */
    }

    .text-container {
      display: flex;
      justify-content: space-between;
      margin: 20px;
      margin-top:100px;
      
    }

    .text-container div{
      width: 30px;
      
      
    }
   


    .text-image-container {
      
      font-family: "Arial", sans-serif;
      font-size: 25px;
      text-align: inherit;
   
    margin-right: unset;
    max-width: 421px;
    margin-top: 100px;
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="col">
          <a><img src="logo.png" alt="Logo de Mi Sitio Web"></a>
        </div>
        <div class="col text-right">
          <button class="btn btn-primary" onclick="redirectToForm()" type="button">Inicio de Sesión</button>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="text-image-container">
      <h1><strong>La plataforma fitness Española que viene a cambiar tu estilo de vida.</strong></h1>
      <img src="imagenAcercade.jpg" alt="Imagen">
    </div>

    <div class="image-container">
      <img src="imagen_inicio_1.jpg" alt="Imagen 1">
      <img src="imagenInicioSesion.jpg" alt="Imagen 2">
      <img src="imagenInicioSesion2.jpg" alt="Imagen 3">
    </div>

    <div class="text-container">
      <h5><strong>Gestiona tu plan de entrenamiento</strong></h5>
      <h5><strong>Gestiona la tabla de ejercicios</strong></h5>
      <h5><strong>Guarda tus comidas</strong></h5>
      <h5><strong>Guarda tus ejercicios</strong></h5>
    </div>
  </div>

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
