<?php
require_once '../conexion.php';
$id = $_POST['idDonante'];
$sql = "SELECT * FROM donante WHERE `donante`.`idDonante` = $id";
$result=mysqli_query($conex,$sql);
$fila=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Edición</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h2 class="mb-4">Editar Información</h2>
      <form action="donanteEdit.php" method="post">
      <div class="form-group">
          <label for="nombre">ID:</label>
          <input type="text" class="form-control" id="idDonante" name="idDonante" value="<?=$fila['idDonante']; ?>" required>
        </div>
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="<?=$fila['nombre']; ?>" required>
        </div>
        <div class="form-group">
          <label for="apellidos">Apellidos:</label>
          <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?=$fila['apellido']; ?>"  required>
        </div>
        <div class="form-group">
          <label for="fecha">Fecha:</label>
          <input type="date" class="form-control" id="fecha" name="fecha" value="<?=$fila['fecha']; ?>"  required>
        </div>
        <input type="hidden" name="idDonante" value="<? echo $id?>">
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </form>


    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
