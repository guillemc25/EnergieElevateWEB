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
            nombreAlimento.classList.add('nombre-alimento'); // Agrega la clase CSS "nombre-alimento" al elemento
  
            var detallesAlimento = document.createElement('div');
            detallesAlimento.classList.add('detalles-alimento'); // Agrega la clase CSS "detalles-alimento" al elemento
  
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
  