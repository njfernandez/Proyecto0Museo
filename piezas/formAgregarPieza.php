<?php
require_once '../conexion.php';
$sql = "SELECT idDonante , nombre FROM donante";
$result=mysqli_query($conex,$sql);
// Formatea los resultados como un array JSON
$donantes = array();
$fila = $result->fetch_assoc();
if ($result->num_rows > 0) {
    while($fila = $result->fetch_assoc()) {
        $donantes[] = $fila;
    }
}
// Devuelve los datos como JSON
if ($result->num_rows > 0) {
  // Comienza el select
  echo '<select class="form-control" id="donante" name="donante">';
  echo '<option value="">Selecciona un donante</option>';
  
  // Genera las opciones con un bucle foreach
  while($fila = $result->fetch_assoc()) {
      echo '<option value="' . $fila["id"] . '">' . $fila["nombre"] . '</option>';
  }
  
  // Cierra el select
  echo '</select>';
} else {
  echo "No se encontraron donantes.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Estético</title>
  <!-- Enlace a Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos personalizados -->

</head>
<body>
<style>

  
body {
      background: #fc4a1a;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #f7b733, #fc4a1a);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #f7b733, #fc4a1a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    .form-container {
      background-color: #3C3B3F; /* Negro */
      color: #FFFFFF; /* Blanco */
      padding: 20px;
      border-radius: 10px;
    }
    .form-container input[type="text"] {
      background-color: transparent;
      border: none;
      border-bottom: 2px solid #FFFFFF; /* Blanco */
      color: #FFFFFF; /* Blanco */
    }
    .form-container input[type="text"]::placeholder {
      color: #FFFFFF; /* Blanco */
    }
    .form-container input[type="text"]:focus {
      outline: none;
      border-bottom-color: #FEC601; /* Naranja */
    }
    .form-container input[type="submit"] {
      background-color: #FEC601; /* Naranja */
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      color: #FFFFFF; /* Negro */
      cursor: pointer;
    }
    .form-container input[type="submit"]:hover {
      background-color: #FFA500; /* Naranja oscuro */
    }
    

</style>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-sm-6 col-6 mb-3">
      <div class="form-container">
        <form>
          <!---->
          <div class="form-group">
            <label for="nombre">Numero de inventario:</label>
            <input type="text" class="form-control" name="numero_inventario" id="numero_inventario" placeholder="#">
          </div>
          <!---->
          <div class="form-group">
            <label for="email">Especie:</label>
            <input type="text" class="form-control" name="especie" id="especie" placeholder="especie">
          </div>
          <!---->
          <div class="form-group">
            <label for="mensaje">Estado de conservacion:</label>
            <input type="text" class="form-control" name="estado" id="mensaje" placeholder="estado">
          </div>
          <!---->
          <div class="form-group">
            <label for="mensaje">Fecha de ingreso:</label>
            <input type="date" class="form-control" name="fecha" id="mensaje" placeholder="Fecha">
          </div>
          <!---->
          <div class="form-group">
            <label for="mensaje">Cantidad de piezas:</label>
            <input type="text" class="form-control" name="cantidad" id="mensaje" placeholder="Cantidad">
          </div>
          <!---->
          <div class="form-group">
            <label for="mensaje">Clasificación:</label>
            <input type="text" class="form-control" name="clasificacion" id="mensaje" placeholder="Clasificación">
          </div>
          <!---->
          <div class="form-group">
            <label for="mensaje">Observación:</label>
            <input type="text" class="form-control" name="observacion" id="mensaje" placeholder="Observación">
          </div>
          <!---->
          <div class="form-group">
            <label for="donante">Donante:</label>
            <select class="form-control" id="donante" name="donante">
              <option value="">Selecciona un donante</option>
            </select>
          </div>
          <!---->
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
// Hacer una solicitud AJAX para obtener los donantes
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {

    var donantes = JSON.parse(this.responseText);
    var selectDonantes = document.getElementById("donante");
    // Agregar las opciones al select
    donantes.forEach(function(donante) {
      var option = document.createElement("option");
      option.value = donante.id;
      option.text = donante.nombre;
      selectDonantes.appendChild(option);
    });

};
xhttp.open("GET", "obtener_donantes.php", true);
xhttp.send();
</script>
<script>
  document.getElementById('btnAgregar').addEventListener('click', function() {
    var select = document.getElementById('formularioSelect');
    var option = document.createElement('option');
    option.value = 'crear';
    option.textContent = 'Crear Formulario';
    select.appendChild(option);
  });
  
  document.getElementById('formularioSelect').addEventListener('change', function() {
    var selectValue = this.value;
    var formularioContainer = document.getElementById('formularioContainer');
  
    if (selectValue === 'crear') {
      formularioContainer.innerHTML = `
        <form id="miFormulario">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre"><br><br>
          
          <label for="apellido">Apellido:</label>
          <input type="text" id="apellido" name="apellido"><br><br>
          
          <label for="fecha">Fecha de hoy:</label>
          <input type="text" id="fecha" name="fecha" value="${obtenerFechaHoy()}" readonly><br><br>
          
          <button type="submit">Enviar</button>
        </form>
      `;
    } else {
      formularioContainer.innerHTML = '';
    }
  });
  
  function obtenerFechaHoy() {
    var hoy = new Date();
    var dd = String(hoy.getDate()).padStart(2, '0');
    var mm = String(hoy.getMonth() + 1).padStart(2, '0');
    var yyyy = hoy.getFullYear();
    return dd + '/' + mm + '/' + yyyy;
  }
  </script>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
