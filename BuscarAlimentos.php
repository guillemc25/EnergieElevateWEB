<?php
// Función para buscar el alimento en la base de datos
function buscarAlimento($searchTerm) {
  global $conn;

  // Preparar la consulta SQL utilizando una sentencia preparada para evitar inyecciones SQL
  $sql = "SELECT NombreAlimento, Calorias_100g, Proteinas_100g, Grasas_100g, Carbohidratos_100g 
  FROM Alimentos WHERE NombreAlimento LIKE ?";

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

  // Obtener los datos de los alimentos coincidentes en un array asociativo
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

  // Realizar la búsqueda del alimento en la base de datos
  $resultados = buscarAlimento($searchTerm);

  // Devolver los resultados como JSON
  header('Content-Type: application/json');
  echo json_encode($resultados);
  exit; // Terminar la ejecución del script después de enviar la respuesta JSON
}

?>