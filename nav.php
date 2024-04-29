<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú de Navegación</title>
  <!-- Agregar los enlaces a los archivos de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario está autenticado (puedes adaptar esta verificación según tu sistema de autenticación)
$autenticado = isset($_SESSION['tipo']);

// Si el usuario no está autenticado, redirigirlo a la página de inicio de sesión
if (!$autenticado) {
    //header('Location: ./form_ingresar.php');
    //exit;
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Panel de Control</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="./listado.php">Listado</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./administrador.php">Usuarios</a>
        </li>
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i> <?php echo $_SESSION['nombreAdmin']; ?>
          </a>

        </li>
        <li class="nav-item">
        <a class="nav-link" href="./users/salir.php">Salir</a>
        </li>

        
      </ul>


      
    </div>
  </div>
</nav>

<!-- Tu contenido aquí -->

<!-- Agregar los enlaces a los archivos de Bootstrap JS y jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
