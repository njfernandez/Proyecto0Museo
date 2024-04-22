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
            <input type="text" class="form-control" name="fecha" id="mensaje" placeholder="Fecha">
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
            <label for="mensaje">Donante:</label>
            <input type="text" class="form-control" name="donante" id="mensaje" placeholder="Donante">
          </div>
          <!---->
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Scripts de Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
