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
  background-color: #3498db;
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
      <colgroup>
        <col class="col-1">
        <col class="col-2">
        <col class="col-2">
        <col class="col-4">
      </colgroup>

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
    <table class="table0" id="cardio-diary">
      <colgroup>
        <col class="col-1">
        <col class="col-2">
        <col class="col-2">
        <col class="col-4">
      </colgroup>

      <thead>
        <tr>
          <td class="first">Ejercicios de fuerza</td>
          <td class="alt">Series</td>
          <td class="alt">Repeticiones/Serie</td>
          <td class="alt">Peso/Serie</td>
        </tr>
      </thead>

      <tbody>
        <tr class="bottom">
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
</body>
</html>
