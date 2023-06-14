
<?php


require_once "conexion.php";
require_once "BuscarEjercicios.php";


?>
<!DOCTYPE html>
<html>
<head>
  <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
  <title>EnergieElevate</title>
  <link rel="stylesheet" href="EstilosInicio.css"> <!-- Agrega el enlace al archivo CSS -->
  <!-- Agrega el enlace al archivo de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- CDN del archivo JavaScript de jQuery -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script> <!-- CDN del archivo JavaScript de Bootstrap -->

  
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

    hr {
      height: 1px;
      border: none;
      background-color: #ccc;
      margin-bottom: 5px;
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
      padding: 10px; 
      border: 1px solid #ccc;
       white-space: nowrap;
      margin-right: 5px;
      overflow-x: scroll;
       overflow-y: scroll;
        margin-right: 5px;
    }

    #matching li {
      display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 10px;
  margin-bottom: 10px;
  border-bottom: 1px solid #ccc;
  color: #0f73ab;
    }

    #matching  span {
      flex: 1;
  margin-right: 10px;
  
}

.nombre-alimento {
  color: blue; /* Cambia el color del nombre del alimento a azul */
  text-decoration: underline; /* Agrega subrayado al texto */
  cursor: pointer; /* Cambia el cursor al estilo de un enlace */
}

.nombre-alimento:hover {
  color: darkblue; /* Cambia el color al pasar el cursor por encima del nombre */
}
.modal-dialog.modal-dialog-centered {
    display: flex;
    justify-content: center;
    align-items: center;

    margin-bottom: 20px;
  }

   /* Estilos personalizados para la ventana modal */

  /* Estilo para el título del modal */
  .modal-title {
    font-size: 24px;
    font-weight: bold;
    color: #333;
  }

  /* Estilo para el contenido del modal */
  .modal-body {
    padding: 20px;
  }

  /* Estilo para los campos de entrada en el modal */
  .form-control {
    border-radius: 5px;
    border: 1px solid #ccc;
    padding: 10px;
  }

  /* Estilo para los botones en el modal */
  .modal-footer .btn {
    padding: 10px 20px;
    border-radius: 4px;
    font-weight: bold;
    color: #fff;
    cursor: pointer;
    margin-top:10px;
  }

  /* Estilo para el botón de cierre del modal */
  #closeButton {
    background-color: #ccc;
    border-color: #ccc;
  }

  /* Estilo para el botón de añadir ejercicio del modal */
  #addExerciseButton {
    background-color: #007bff;
    border-color: #007bff;
  }

  /* Estilo para resaltar el botón al pasar el cursor sobre él */
  .modal-footer .btn:hover {
    opacity: 0.8;
  }

 
.column {
  display: flex;
  margin-bottom: 20px;
 
}

.AlimentosBusqueda{
  flex: 1;
}
.ejercicioModal{
  flex:1;


}

  </style>
</head>
<body>


  <div class="container" style="position: relative;">
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

    <div class="column">
    <div class="AlimentosBusqueda" style="  max-width: 600px; padding: 5px; border: 2px solid #ccc;  margin: 0 auto;">

<div class="Busqueda" style="text-align: center; margin-top: 20px;">
  <h1 class="main-title" style="max-width: 600px; margin: 0 auto;">Añadir Ejercicio de cardio</h1>
  <h1 class="secondary-title">Búsqueda en nuestra base de datos de Ejercicios por nombre:</h1>
  
</div>

<div class="search-bar" style="margin-top: 50px; text-align: center;">
  <input type="text" class="search-input" placeholder="Buscar">
  <button onclick="BuscarEjercicio()" class="search-button">Búsqueda</button>
  
</div>
<div id="loading-popup" style="display: none; margin-top: 10px; text-align: center;">
<h2>Buscando ejercicios...</h2>
</div>

<div class="block-4">
  <div id="sort-block">
    <h1 class="secondary-title search_">Ejercicios coincidentes:</h1>
  </div>
  
</div>
<div class="resultado" style="max-width: 600px; margin: 0 auto;">

<ul id="matching" >
  <li style="border-bottom: 1px solid #ccc;">Resultados de la Busqueda</li>
 
     
  
</ul>

</div>

  <!-- Ventana modal -->
  <div id="ejercicioModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="ejercicioModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h1 class="modal-title" id="ejercicioModalLabel"></h1>
        
      </div>
      <div class="modal-body">
        <div id="modalContent" style="display: none;">
          <div class="form-group">
            <label for="minutesInput">Minutos:</label>
            <input type="number" class="form-control" id="minutesInput" placeholder="Introduce los minutos">
          </div>
          <div class="form-group">
            <label for="caloriesInput">Calorías:</label>
            <input type="number" class="form-control" id="caloriesInput" placeholder="Introduce las calorías">
          </div>
        </div>
        <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeButton" style="display: none;">Cerrar</button>
      <button type="button" class="btn btn-primary" id="addExerciseButton" style="display: none;">Añadir Ejercicio</button>
      </div>
     
      

      </div>
    </div>
  </div>

        </div>
    


    </div>

 
</div>


  <script>

// Variable global para almacenar las calorías por minuto del ejercicio seleccionado
var caloriesPerMinute = 0; 
   
//acciones a hacer del boton ceerar de la ventana modal
document.getElementById('closeButton').addEventListener('click', function() {

  var modalTitle = document.getElementById('ejercicioModalLabel');
    modalTitle.textContent = '';

  // Mostrar el contenido de la ventana modal
  var modalContent = document.getElementById('modalContent');
    modalContent.style.display = 'none';

     // Mostrar los botones de la ventana modal
    document.getElementById('closeButton').style.display = 'none';
    document.getElementById('addExerciseButton').style.display = 'none';
  
});

// ...

  // Usa noConflict para evitar conflictos con otras bibliotecas
  var $j = jQuery.noConflict();
  
  function BuscarEjercicio() {
  // Obtener el término de búsqueda del input
  var searchTerm = document.querySelector('.search-input').value;

  // Mostrar el mensaje emergente de búsqueda en progreso
  var loadingPopup = document.getElementById('loading-popup');
  loadingPopup.style.display = 'block';

  // Realizar la petición al archivo PHP utilizando AJAX
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'RegistroEjerciciosCardio.php?searchTerm=' + searchTerm, true);
  xhr.onload = function() {
    if (xhr.status === 200) {
      // Ocultar el mensaje emergente de búsqueda en progreso
      loadingPopup.style.display = 'none';

      // Parsear la respuesta JSON
      var resultados = JSON.parse(xhr.responseText);

      // Obtener la lista donde se mostrarán los resultados
      var matchingList = document.getElementById('matching');

      // Limpiar la lista antes de mostrar los nuevos resultados
      matchingList.innerHTML = '';

      // Mostrar los resultados en la lista
      if (resultados.length > 0) {
        // Mostrar los resultados
        for (var i = 0; i < resultados.length; i++) {
          var ejercicio = resultados[i];

          var listItem = document.createElement('li');

          var nombreEjercicio = document.createElement('span');
          nombreEjercicio.textContent = ejercicio.NombreEjercicio;
          nombreEjercicio.classList.add('nombre-ejercicio');
          nombreEjercicio.addEventListener('click', crearEventoClic(ejercicio));
          // Agregar estilos para indicar que es clickeable
          nombreEjercicio.style.cursor = 'pointer';
          nombreEjercicio.style.textDecoration = 'underline';
          nombreEjercicio.style.color = '#007BFF'; // Color azul fuerte
          listItem.appendChild(nombreEjercicio);

          var grupoMuscular = document.createElement('span');
          grupoMuscular.textContent = ejercicio.GrupoMuscular;
          listItem.appendChild(grupoMuscular);

          matchingList.appendChild(listItem);
        }
      } else {
        var listItem = document.createElement('li');
        listItem.textContent = 'No se encontraron resultados.';
        matchingList.appendChild(listItem);
      }
    }
  };
  xhr.send();
}

function crearEventoClic(ejercicio) {
  return function() {
    // Rellenar la ventana modal con los datos del ejercicio
    var modalTitle = document.getElementById('ejercicioModalLabel');
    modalTitle.textContent = ejercicio.NombreEjercicio;

    // Mostrar el contenido de la ventana modal
    var modalContent = document.getElementById('modalContent');
    modalContent.style.display = 'block';

     // Mostrar los botones de la ventana modal
    document.getElementById('closeButton').style.display = 'inline-block';
    document.getElementById('addExerciseButton').style.display = 'inline-block';

    caloriesPerMinute = ejercicio.Calorias_Minuto;

     // Actualizar las calorías al cambiar el valor de los minutos
     document.getElementById('minutesInput').addEventListener('input', function() {
      var minutes = parseInt(this.value, 10);
      var calories = minutes * caloriesPerMinute;
      document.getElementById('caloriesInput').value = calories;
    });

    //añadir ejercicio al localstorage para guardarlo en la tabla

    document.getElementById('addExerciseButton').addEventListener('click', function() {

      
  // Obtener los valores del nombre, minutos y calorías
  var nombre = document.getElementById('ejercicioModalLabel').textContent;
  var minutos = parseInt(document.getElementById('minutesInput').value, 10);
  var calorias = parseInt(document.getElementById('caloriesInput').value, 10);

  // Obtener el array de ejercicios seleccionados del localStorage
  var ejerciciosSeleccionados = JSON.parse(localStorage.getItem('ejerciciosSeleccionados')) || [];

// Crear un objeto para el ejercicio
var ejercicio = {
  nombre: nombre,
  minutos: minutos,
  calorias: calorias
};


// Agregar el objeto al array de ejercicios seleccionados
ejerciciosSeleccionados.push(ejercicio);

// Guardar el array actualizado en el localStorage
localStorage.setItem('ejerciciosSeleccionados', JSON.stringify(ejerciciosSeleccionados));


  // Restablecer los campos de entrada
  document.getElementById('minutesInput').value = '';
  document.getElementById('caloriesInput').value = '';

  window.location.href = 'PaginaEjercicio.php';
});


  };
}

  </script>
</body>
</html>
