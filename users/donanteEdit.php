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
      <form action="./editarDonante.php" method="post">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
        </div>
        <div class="form-group">
          <label for="apellidos">Apellidos:</label>
          <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese sus apellidos" required>
        </div>
        <div class="form-group">
          <label for="fecha">Fecha:</label>
          <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
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
