// Función para realizar la búsqueda y mostrar los resultados en el HTML
function buscarAlimento() {
  // Obtener el término de búsqueda del input
  var searchTerm = document.querySelector('.search-input').value;

  // Mostrar el mensaje emergente de búsqueda en progreso
  var loadingPopup = document.getElementById('loading-popup');
  loadingPopup.style.display = 'block';

  // Realizar la petición al archivo PHP utilizando AJAX
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'RegistroDesayuno.php?searchTerm=' + searchTerm, true);
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
          
            var listItem = document.createElement('li');

            var nombreAlimento = document.createElement('span');
            nombreAlimento.textContent = resultados[i].NombreAlimento;
            listItem.appendChild(nombreAlimento);
            nombreAlimento.classList.add('nombre-alimento');

            nombreAlimento.addEventListener('click', function() {
              // Realizar alguna acción cuando se hace clic en el nombre del alimento
              console.log('Alimento clickeado:', this.textContent);
              // Aquí puedes agregar tu propia lógica, como abrir una ventana modal con más información del alimento, etc.
            });


            var detallesAlimento = document.createElement('div');
            detallesAlimento.classList.add('detalles-alimento');

            var calorias = document.createElement('span');
            calorias.textContent = 'Calorías: ' + resultados[i].Calorias_100g;
            detallesAlimento.appendChild(calorias);

            var proteinas = document.createElement('span');
            proteinas.textContent = 'Proteínas: ' + resultados[i].Proteinas_100g;
            detallesAlimento.appendChild(proteinas);

            var grasas = document.createElement('span');
            grasas.textContent = 'Grasas: ' + resultados[i].Grasas_100g;
            detallesAlimento.appendChild(grasas);

            var carbohidratos = document.createElement('span');
            carbohidratos.textContent = 'Carbohidratos: ' + resultados[i].Carbohidratos_100g;
            detallesAlimento.appendChild(carbohidratos);

            listItem.appendChild(detallesAlimento);
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

function actualizarTabla(alimento) {
  console.log('actualizarTabla:', alimento);
  // Obtener la tabla donde se mostrarán los resultados
  var tablaAlimentacion = document.querySelector('.tablaAlimentacion');

  // Obtener el tbody de la tabla
  var tbody = tablaAlimentacion.querySelector('Body');

  // Crear una nueva fila
  var nuevaFila = document.createElement('tr');

  // Crear las celdas con los datos del alimento seleccionado
  var celdaNombre = document.createElement('td');
  celdaNombre.innerHTML = alimento.NombreAlimento;
  var celdaCalorias = document.createElement('td');
  celdaCalorias.innerHTML = alimento.Calorias_100g;
  var celdaCarbohidratos = document.createElement('td');
  celdaCarbohidratos.innerHTML = alimento.Carbohidratos_100g;
  var celdaGrasas = document.createElement('td');
  celdaGrasas.innerHTML = alimento.Grasas_100g;
  var celdaProteinas = document.createElement('td');
  celdaProteinas.innerHTML = alimento.Proteinas_100g;

  // Agregar las celdas a la nueva fila
  nuevaFila.appendChild(celdaNombre);
  nuevaFila.appendChild(celdaCalorias);
  nuevaFila.appendChild(celdaCarbohidratos);
  nuevaFila.appendChild(celdaGrasas);
  nuevaFila.appendChild(celdaProteinas);

  // Encontrar el tr con la clase "bottom" y su elemento padre
  var trBottom = tablaAlimentacion.querySelector('tr.bottom');
  var padreBottom = trBottom.parentNode;

  // Insertar la nueva fila antes de la fila con la clase "bottom"
  padreBottom.insertBefore(nuevaFila, trBottom);

  window.location.href = 'PaginaAlimentacion.php';
}
