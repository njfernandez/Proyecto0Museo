<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Ingreso</title>
  <!-- Agregar los enlaces a los archivos de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="form-container">
          <h2 class="text-center mb-4">Iniciar Sesión</h2>
          <form action="ingreso.php" method="post">
            <div class="mb-3">
              <label for="dni" class="form-label">DNI:</label>
              <input type="text" class="form-control" id="dni" name="dni" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña:</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
     if (isset($_GET["mensaje"])){
          if($_GET["mensaje"]!="ok"){
          echo "<div class='text-center mt-4 mb-5'><div class='alert alert-danger' role='alert'><strong>".$_GET["mensaje"]."</strong></div></div>";   
        }else{    
         echo "<div class='text-center mt-4 mb-5'><div class='alert alert-success' role='alert'><strong>Datos agregados exitosamente!</strong></div></div>";  
        }  
   } 
   ?> 
   
</body>
</html>


     

 
 
 
