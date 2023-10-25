
<!DOCTYPE html>
<html lang="es">
<?php
     
     include('head.php');

   ?>
<body>
 <header>
<nav class="navbar  bg-dark navbar-expand-lg navbar-light fixed-top py-3 shadow" style="position:absolute;" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="./index.php">proyecto</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">Acerca de</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portafolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
  <header>
   <!-- Index.php contiene un Formulario para Agregar Socios--> 

   
 
  <section class="page-section" >
   
  
  <div class="container mt-2 mb-5" >
  <div class="text-center mt-5 mb-2 text-primary"><h2>Agregar Pieza a la colección del Museo</h2></div>	
  <div class="text-secondary"><p><small>* Datos Obligatorio</small></p></div>
  	
  <form class="row g-3" action="insertarDatosPieza.php" method="post" method="post" enctype="multipart/form-data">
  
  <div class="col-sm-6 mb-3">
 
    <label for="nombre" class="form-label">* Nombre de la pieza</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa de la pieza" required>
  </div>

  
  <div class="col-sm-6 mb-3">
    <label for="fecha" class="form-label">* fecha ingreso</label>
    <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso" placeholder="Ingresa fecha de alta de pieza" required>
  </div>

  <div  class="col-sm-6 mb-3">
  <label for="clasificación" class="form-label"> *clasificación</label>
 <select name="clasificación" class="form-control" >
 <option>Arqueologia</option>
 <option>Historia</option>
 <option>Arte</option>
 <option>Ciencia y Tecnologia</option>
 <option>animales</option>
 </select>
</div>

<div  class="col-sm-6 mb-3">
  <label for="entrega" class="form-label"> *tipo de entrega</label>
 <select name="entrega" class="form-control" >
 <option>donado</option>
 <option>adquirido</option>
 </select>
</div>

<div  class="col-sm-6 mb-3">
  <label for="Estado" class="form-label"> *Estado</label>
 <select name="Estado" class="form-control" >

 <option>Nuevo</option>
 <option>Algo Desgastado</option>
 <option>Desgastado</option>
 <option>Muy Desgastado</option>
 <option>Roto</option>
 </select>
</div>


  <div class="col-sm-6 mb-3">
    <label for="existencia" class="form-label"> *cantidad</label>
    <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Ingresa cantidad" >
  </div>

 <div class="col-sm-6 mb-3">
 
    <label for="nombre" class="form-label">*Observacion de los detalles</label>
    <input type="text" class="form-control" name="Observacion" id="Observacion" placeholder="Imperfecciones o particularidades de la pieza" required>
  </div>

  <div class="col-sm-6 mb-3">
 
    <label for="nombre" class="form-label">*Descripción</label>
    <input type="text" class="form-control" name="Descripción" id="Descripción" placeholder="Descripción destinada a muestreo" required>
  </div>
  <!--

  <div class="col-sm-6 mb-3">
    <label for="imagen">insertar imagen </label>
  <input type="file" name="archivoimagen" id="archivoimagen" class="btn btn-primary btn-sm">
  </div>s
  -->

    
  <div class="col-12 text-center">
  <button type="submit" class="btn btn-primary btn-sm" name="btn_agregar" id="btn_agregar">Agregar</button>
  <a class="btn btn-primary btn-sm ms-2" href="listado.php" role="button">Cancelar</a>
  </div>
  
  </form>
   
    
  <?php
    
    // Uso de GET para mostrar Mensaje resultante 

    if (isset($_GET["mensaje"])){

    	 if($_GET["mensaje"]!="ok"){

         echo "<div class='text-center mt-4 mb-5'><div class='alert alert-danger' role='alert'><strong>".$_GET["mensaje"]."</strong></div></div>"; 
         
       }else{

                 
        echo "<div class='text-center mt-4 mb-5'><div class='alert alert-success' role='alert'><strong>Producto exitosamente agregado!</strong><a href='listado.php' class='text-primary ms-3'>Volver al Listado</a></div></div>";  
       
       }  
  } 
  ?> 
  



  </section>

   
   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>