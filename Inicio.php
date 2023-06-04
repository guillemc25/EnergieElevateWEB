<!DOCTYPE html>
<html>
<head>
  <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
  <title>EnergieElevate</title>
  <link rel="stylesheet" href="EstilosInicio.css"> <!-- Agrega este enlace al archivo CSS -->
 <!-- Vincula el archivo JavaScript <script src="ScriptInicioSesion.js"></script> -->

 <style>
    /* Estilos para el contenedor de las imágenes */
    .image-container {
      display: flex;
      justify-content: space-between;
      margin: 20px 0;
      margin-left: 20px;
      margin-top: 100px; /* Margen superior entre el nav y el contenedor de las imágenes */
    }
  
    .image-container img {
      width: 30%;
      margin-right: 20px;
    }

    .text-container {
  display: flex;
  justify-content: space-between;
  margin: 20px;
}

.text-container div {
  width: 30%;
}

h2 {
      margin-top: 120px; /* Margen inferior del h2 con el header */
    }

    .text-image-container {
      margin-left: 90px; /* Margen izquierdo */
      font-family: "Arial", sans-serif; /* Fuente */
      font-size: 30px; /* Tamaño de texto */
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
      
    </div>
  </header>
  <div class="text-image-container">
    <div class="text">
      <h2>Somos Energie Elevate, una plataforma fitness Española que viene<br>
        a cambiar tu estilo de vida. Organiza tus comidas, crea tus rutina<br>
         diarias con tus ejercicios preferidos, obtén la mejor información<br>
         fitness de los mejores profesionales y mejora tu calidad de vida.</h2>
    </div>
    <div>
      <img src="imagenAcercade.jpg" alt="Imagen">
    </div>
  </div>

  <div class="image-container">
    <img src="imagen_inicio_1.jpg" alt="Imagen 1">
    <img src="imagenInicioSesion.jpg" alt="Imagen 2">
    <img src="imagenInicioSesion2.jpg" alt="Imagen 3">
  </div>

  <div class="text-container">
    <div>
      <h2>Gestiona tu plan 

de entrenamiento</h2>
    </div>
    <div>
      <h2><strong> Gestiona la tabla de ejercicios</strong> </h2>
    </div>
    <div>
      <h2><strong> Guarda tus comidas</strong> </h2>
    </div>
    <div>
      <h2><strong> Guarda tus ejercicios</strong>
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
