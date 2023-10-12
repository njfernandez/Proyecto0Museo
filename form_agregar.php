
<!DOCTYPE html>
<html lang="es">
<?php
     
     include('head.php');

   ?>
<body>
 
 
   <?php
     
     include('header.php');

   ?>
      
            
    
   <!-- Index.php contiene un Formulario para Agregar Socios--> 

   
   
  <section>
   
  
  <div class="container mt-2 mb-5">
  <div class="text-center mt-5 mb-2 text-primary"><h2>Agregar Productos</h2></div>	
  <div class="text-secondary"><p><small>* Dato Obligatorio</small></p></div>
  	
  <form class="row g-3" action="insertar_datos.php" method="post" method="post" enctype="multipart/form-data">
  
  <div class="col-sm-6 mb-3">
 
    <label for="nombre" class="form-label">* Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu Nombre" required>
  </div>

  

  
  <div class="col-sm-6 mb-3">
    <label for="fecha" class="form-label">* fecha ingreso</label>
    <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso" placeholder="Ingresa  fecha de alta" required>
  </div>

  <div  class="col-sm-6 mb-3">
  <label for="idCategoria" class="form-label"> *clasificasion</label>
 <select name="idCategoria" class="form-control" >
 
 
 <option>Arqueologia</option>
 <option>Historia</option>
 <option>Arte</option>
 <option>Ciencia y Tecnologia</option>
 <option>animales</option>
 </select>
</div>

<div  class="col-sm-6 mb-3">
  <label for="idCategoria" class="form-label"> *tipo de entrega</label>
 <select name="idCategoria" class="form-control" >

 <option>donado</option>
 <option>adquirido</option>

 </select>
</div>

<div  class="col-sm-6 mb-3">
  <label for="idCategoria" class="form-label"> *Estado</label>
 <select name="idCategoria" class="form-control" >

 <option>nuevo</option>
 <option>usado</option>

 </select>
</div>


  <div class="col-sm-6 mb-3">
    <label for="existencia" class="form-label"> *cantidad</label>
    <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Ingresa existencia (cantidad)" required>
  </div>

 <div class="col-sm-6 mb-3">
 
    <label for="nombre" class="form-label">*observacion</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu Nombre" required>
  </div>

  <div class="col-sm-6 mb-3">
 
    <label for="nombre" class="form-label">*descripsion</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu Nombre" required>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="imagen">incertar imagen </label>
  <input type="file" name="archivoimagen" id="archivoimagen" class="btn btn-primary btn-sm">
  </div>
    
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