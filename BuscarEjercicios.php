<?php
// Función para buscar el ejercicio en la base de datos
function BuscarEjercicio($searchTerm) {
  global $conn;

  // Preparar la consulta SQL utilizando una sentencia preparada para evitar inyecciones SQL
  $sql = "SELECT NombreEjercicio, GrupoMuscular, Categoria, Calorias_Minuto
  FROM Ejercicios WHERE NombreEjercicio LIKE ? and Categoria= 'Cardiovascular'";

  // Preparar la sentencia
  $stmt = $conn->prepare($sql);

  // Agregar el carácter comodín "%" al término de búsqueda
  $searchTerm = $searchTerm . "%";

  // Asignar el valor al parámetro de la sentencia preparada
  $stmt->bind_param("s", $searchTerm);

  // Ejecutar la consulta
  $stmt->execute();

  // Obtener los resultados de la consulta
  $result = $stmt->get_result();

  // Obtener los datos de los ejercicios coincidentes en un array asociativo
  $resultados = array();
  while ($row = $result->fetch_assoc()) {
    $resultados[] = $row;
  }

  // Devolver el array de resultados
  return $resultados;
}

// Obtener el término de búsqueda enviado desde el formulario
if (isset($_GET['searchTerm'])) {
  $searchTerm = $_GET['searchTerm'];

  // Realizar la búsqueda del ejercicio en la base de datos
  $resultados = BuscarEjercicio($searchTerm);

  // Devolver los resultados como JSON
  header('Content-Type: application/json');
  echo json_encode($resultados);
  exit; // Terminar la ejecución del script después de enviar la respuesta JSON
}
?>
