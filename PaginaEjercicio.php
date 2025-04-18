<?php
session_start();

// Resto del código de tu archivo PaginaAlimentacion.php
?>
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
  background-color: #007bff;
    border-color: #007bff;
  color: #fff;
  text-decoration: none;
  margin-right: 250px;
  margin-left: 10px;
}

.logout-button:hover {
  background-color: #3498db;
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
  margin: 0 auto;
  width: 80%; /* Puedes ajustar el ancho según tus necesidades */
}

.resumen-diario-container {
  background-color: #E0E0E0;
  padding: 100px;
  margin-top: 20px;
  margin-right: 50px;
  margin-left: 100px;
}

.resumen-encuadro {
  display: flex;
}

.tu-resumen-diario {
  background-color: #0a5282;
  font-family: "Inter", Helvetica, Arial, -apple-system, sans-serif;
  color: white;
  margin-top: 10px;
  margin-right: 500px;
  margin-left: 100px;
  padding: 1px;
  padding-left: 20px;
  flex: 1;
}

.resumen-diario {
  display: flex;
  background-color: #E0E0E0;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  margin-right: 500px;
  margin-left: 100px;
  margin-bottom: 50px;
  padding: 40px;
}

.calorias-consumidas-info {
  flex: 1;
  margin-left: 20px;
  margin-top: 0px;
  margin-right: 50px;
}

.calorias-consumidas {
  border-bottom: 2px solid #ccc;
  margin-left: 25px;
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
  margin-right: 10px;
  margin-top: 0px;
}

.info-alimentos-ejercicio p {
  display: inline-block;
  margin: 0 10px;
  font-size: 24px;
  font-weight: bold;
  color: #333;
  margin-top: 50px;
  margin-left: 30px;
}

.NumEjercicios {
  margin-left: 60px;
}

.btn-ejercicio,
.btn-alimentos {
  display: inline-flex;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  position: relative;
  box-sizing: border-box;
  -webkit-tap-highlight-color: transparent;
  outline: 0px;
  margin: 0px;
  cursor: pointer;
  user-select: none;
  vertical-align: middle;
  appearance: none;
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

.table0 {
  border-collapse: collapse;
  width: 60%; /* Ajusta el ancho de la tabla según tus necesidades */
  margin: 0 auto; /* Centra la tabla horizontalmente */
}

.table0 th,
.table0 td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

.table0 .first .delete {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
  
  border-top: none;
  border-left: none;
  border-right: none;
}

.table0 .alt {
  background: #00548F;
  color: #fff;
  padding: 5px 10px 5px 10px;
  border: 1px solid #fff;
  font-size: 16px;
  font-weight: normal;
  text-align: center;
  text-transform: capitalize;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}



.content {
  border: none;
}

.EjerciciosCardiovasculares{
  margin-top: 100px;
}

.EjerciciosFuerza{
  margin-top: 100px;
}

.table0 .bottom td {
      font-size: 16px;
    }

.add_exercise {
     
  color: #0072BF;
      padding: 5px 10px;
      border-radius: 4px;
      text-decoration: none;
    }

    tr.Ejercicio-existente {
    background-color: #ffeecc;
    color: #333;
  }

  tr.Ejercicio-existente:hover {
    background-color: #ffcc99;
  }

  tr.Ejercicio-existente td {
    border: 1px solid #ccc;
    padding: 8px;

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
      <li><a href="PaginaAlimentacion.php">ALIMENTOS</a></li>
      <li><a href="PaginaEjercicio.php">EJERCICIO</a></li>
    </ul>
  </nav>
  <div class="EjerciciosCardiovasculares">
    <table class="table0" id="cardio-diary">
  
      <thead>
        <tr>
          <td class="first">Cardiovascular</td>
          <td class="alt">Minutos</td>
          <td class="alt">Calorías quemadas</td>
        </tr>
      </thead>

      <tbody>
        <tr class="bottom">
          <td class="first">
            <a class="add_exercise" href="RegistroEjerciciosCardio.php">Añadir</a>
            <div class="quick_tools"></div>
          </td>
          <td class="content"></td>
          <td class="content"></td>
          <td class="delete"></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="EjerciciosFuerza">
    <table class="table0" id="stregth-diary">
      <thead>
        <tr>
          <td class="first">Ejercicios de fuerza</td>
          <td class="alt">Series</td>
          <td class="alt">Repeticiones/Serie</td>
          <td class="alt">Peso/Serie</td>
        </tr>
      </thead>

      <tbody>
        <tr class="Fuerza">
          <td class="first">
            <a class="add_exercise" href="RegistroEjerciciosFuerza.php">Añadir</a>
          </td>
          <td class="content"></td>
          <td class="content"></td>
          <td class="delete"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>

<script>
  
  var TotalCaloriasQuemadas=0;
  var tbody = document.querySelector('#cardio-diary tbody');
var filaBottom = document.querySelector('#cardio-diary .bottom');

// Obtener el array de alimentos seleccionados del localStorage
var ejerciciosSeleccionados = JSON.parse(localStorage.getItem('ejerciciosSeleccionados')) || [];

if (ejerciciosSeleccionados.length === 0) {
  // No hay alimentos seleccionados, no se crea ninguna fila en la tabla
  localStorage.removeItem('ejerciciosSeleccionados');
} else {

  // Recorrer el array de alimentos seleccionados y crear una fila por cada alimento
  for (var i = 0; i < ejerciciosSeleccionados.length; i++) {

   
    var ejercicio =  ejerciciosSeleccionados[i];
    
    // Crear una nueva fila con los datos del alimento seleccionado
    var nuevaFila = document.createElement('tr');
    nuevaFila.classList.add('Ejercicio-existente');
    
    var celdaNombre = document.createElement('td');
    celdaNombre.innerHTML = ejercicio.nombre;
    var celdaMinutos = document.createElement('td');
    celdaMinutos.innerHTML = ejercicio.minutos;
    var celdaCalorias = document.createElement('td');
    celdaCalorias.innerHTML = ejercicio.calorias;
    var celdaEliminar = document.createElement('td');


    var botonEliminar = document.createElement('button');
    botonEliminar.textContent = 'Eliminar';
  
    // Obtener el índice del alimento en el array
    var indice = i; 

    botonEliminar.setAttribute('data-indice', indice);

    celdaEliminar.appendChild(botonEliminar);

    // Agregar las celdas a la nueva fila
    nuevaFila.appendChild(celdaNombre);
    nuevaFila.appendChild(celdaMinutos);
    nuevaFila.appendChild(celdaCalorias);
    nuevaFila.appendChild(celdaEliminar);
   
    
    // Insertar la nueva fila antes de la fila "bottom"
    tbody.insertBefore(nuevaFila, filaBottom);

    botonEliminar.addEventListener('click', function() {
      // Obtener la fila a la que pertenece el botón eliminar
  var filaEliminar = this.closest('tr');
  
  // Obtener el índice del alimento a eliminar desde el atributo personalizado
  var indice = parseInt(this.getAttribute('data-indice'));
  
  // Obtener el ejercicio a eliminar
  var ejerciciosEliminar = ejerciciosSeleccionados[indice];
  
   // Restar las calorías del ejercicio eliminado de la variable totalCaloriasQuemadas
   TotalCaloriasQuemadas -= ejerciciosEliminar.calorias;

// Actualizar el valor de totalCaloriasQuemadas en el localStorage
localStorage.setItem('totalCaloriasQuemadas', TotalCaloriasQuemadas.toString());
  
  // Eliminar el alimento del array de alimentos seleccionados
  ejerciciosSeleccionados.splice(indice, 1);
  
  // Actualizar el array en el localStorage
  localStorage.setItem('ejerciciosSeleccionados', JSON.stringify(ejerciciosSeleccionados));

  // Eliminar la fila de la tabla
  filaEliminar.remove();

  // Verificar si es el último alimento y eliminarlo del localStorage
  if (ejerciciosSeleccionados.length === 0) {
    localStorage.removeItem('ejerciciosSeleccionados');
  }
    });

  }

}

var TotalCaloriasQuemadas=0;
  var tbody = document.querySelector('#stregth-diary tbody');
var filaBottom = document.querySelector('#stregth-diary .Fuerza');

// Obtener el array de alimentos seleccionados del localStorage
var ejerciciosSeleccionadosFuerza = JSON.parse(localStorage.getItem('ejerciciosSeleccionadosFuerza')) || [];

if (ejerciciosSeleccionados.length === 0) {
  // No hay alimentos seleccionados, no se crea ninguna fila en la tabla
  localStorage.removeItem('ejerciciosSeleccionadosFuerza');
} else {

  // Recorrer el array de alimentos seleccionados y crear una fila por cada alimento
  for (var i = 0; i < ejerciciosSeleccionadosFuerza.length; i++) {

   
    var ejercicio =  ejerciciosSeleccionadosFuerza[i];
    
    // Crear una nueva fila con los datos del alimento seleccionado
    var nuevaFila = document.createElement('tr');
    nuevaFila.classList.add('Ejercicio-existente');
    
    var celdaNombre = document.createElement('td');
    celdaNombre.innerHTML = ejercicio.nombre;
    var celdaSeries = document.createElement('td');
    celdaSeries.innerHTML = ejercicio.series;
    var celdaRepeticiones= document.createElement('td');
    celdaRepeticiones.innerHTML = ejercicio.repeticiones;
    var celdaPeso= document.createElement('td');
    celdaPeso.innerHTML = ejercicio.peso;
    var celdaEliminar = document.createElement('td');


    var botonEliminar = document.createElement('button');
    botonEliminar.textContent = 'Eliminar';
  
    // Obtener el índice del alimento en el array
    var indice = i; 

    botonEliminar.setAttribute('data-indice', indice);

    celdaEliminar.appendChild(botonEliminar);

    // Agregar las celdas a la nueva fila
    nuevaFila.appendChild(celdaNombre);
    nuevaFila.appendChild(celdaSeries);
    nuevaFila.appendChild(celdaRepeticiones);
    nuevaFila.appendChild(celdaPeso);
    nuevaFila.appendChild(celdaEliminar);
   
    
    // Insertar la nueva fila antes de la fila "bottom"
    tbody.insertBefore(nuevaFila, filaBottom);

    botonEliminar.addEventListener('click', function() {
      // Obtener la fila a la que pertenece el botón eliminar
  var filaEliminar = this.closest('tr');
  
  // Obtener el índice del alimento a eliminar desde el atributo personalizado
  var indice = parseInt(this.getAttribute('data-indice'));
  
  // Obtener el ejercicio a eliminar
  var ejerciciosEliminar = ejerciciosSeleccionadosFuerza[indice];
  
  
  // Eliminar el alimento del array de ejercicios seleccionados
  ejerciciosSeleccionadosFuerza.splice(indice, 1);
  
  // Actualizar el array en el localStorage
  localStorage.setItem('ejerciciosSeleccionadosFuerza', JSON.stringify(ejerciciosSeleccionadosFuerza));

  // Eliminar la fila de la tabla
  filaEliminar.remove();

  // Verificar si es el último alimento y eliminarlo del localStorage
  if (ejerciciosSeleccionadosFuerza.length === 0) {
    localStorage.removeItem('ejerciciosSeleccionadosFuerza');
  }
    });

  }

}


function sumarCaloriasQuemadas(ejercicios) {
  for (var i = 0; i < ejercicios.length; i++) {
    TotalCaloriasQuemadas += ejercicios[i].calorias;
  }
}

function contarEjerciciosSeleccionados() {
  var totalEjercicios = 0;

  // Obtener el array de ejercicios seleccionados de cardio del localStorage
  var ejerciciosSeleccionados = JSON.parse(localStorage.getItem('ejerciciosSeleccionados')) || [];

  // Sumar la cantidad de ejercicios cardio
  totalEjercicios += ejerciciosSeleccionados.length;

  // Obtener el array de ejercicios seleccionados de fuerza del localStorage
  var ejerciciosSeleccionadosFuerza = JSON.parse(localStorage.getItem('ejerciciosSeleccionadosFuerza')) || [];

  // Sumar la cantidad de ejercicios de fuerza
  totalEjercicios += ejerciciosSeleccionadosFuerza.length;

  // Mostrar la cantidad total de ejercicios
  console.log('Total de ejercicios: ' + totalEjercicios);

  // Guardar el total de ejercicios en el localStorage
  localStorage.setItem('totalEjercicios', totalEjercicios.toString());

  // Retornar la cantidad total de ejercicios
  return totalEjercicios;
}

contarEjerciciosSeleccionados()


sumarCaloriasQuemadas(ejerciciosSeleccionados)

// Guardar el total de calorías en el localStorage
localStorage.setItem("totalCaloriasQuemadas", TotalCaloriasQuemadas.toString());


</script>
</body>
</html>
