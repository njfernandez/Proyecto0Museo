<?php
/* 
INSERT INTO `usuario` (`idUsuario`, `dni`, `nombre`, `apellido`, `email`, `clave`, `fecha_alta`, `tipo`) VALUES (NULL, '41493477', 'Hernan', 'De Giovanna', 'hermanngiovanni@gmail.com', 'nesha', '2024-04-01', 'gerente'); */

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
          <h2 class="text-center mb-4">Formulario</h2>
          <form action="#" method="post">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
              <label for="apellido" class="form-label">Apellido:</label>
              <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="telefono" class="form-label">Teléfono:</label>
              <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
              <label for="fecha" class="form-label">Fecha de Nacimiento:</label>
              <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="mb-3">
              <label for="tipo_usuario" class="form-label">Tipo de Usuario:</label>
              <select class="form-select" id="tipo_usuario" name="tipo_usuario" required>
                <option value="">Seleccionar</option>
                <option value="administrador">Administrador</option>
                <option value="gerente">Gerente</option>
              </select>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
