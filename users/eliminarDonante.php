<?php
require_once '../conexion.php';
$id = $_POST['id'];
$sql = "SELECT * FROM `donante` WHERE idDonante = $id ";
$result=mysqli_query($conex,$sql);
$fila=mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario con Bootstrap Estético</title>
  <!-- Agregar los enlaces a los archivos de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos personalizados -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      margin-top: 50px;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-control:focus {
      border-color: #000;
      box-shadow: 0 0 0 0.2rem rgba(0, 0, 255, 0.25);
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="form-container">
          <h2 class="text-center mb-4">Formulario de eliminacion de donante</h2>
          <form action="./agregarDonante.php" method="post">

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre del donante:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder = "<?php $fila['nombre'] ?>" required>
            </div>
            <div class="mb-3">
              <label for="apellido" class="form-label">Apellido del donante:</label>
              <input type="text" class="form-control" id="apellido" name="apellido" placeholder = "<?php $fila['apellido']?>" required>
            </div>
            
            <div class="mb-3">
              <label for="fecha" class="form-label">Fecha de ingreso del donante:</label>
              <input type="date" class="form-control" id="fecha" name="fecha" placeholder = "<?php $fila['fecha']?>" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-danger">eliminar donante</button>
            </div>  
          </form>
      
        </div>
      </div>
    </div>
  </div>
</body>
</html>
