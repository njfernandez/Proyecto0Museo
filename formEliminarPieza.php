
<?php
require_once "conexion.php";
$id = $_POST["id"];
$sql="SELECT * FROM `pieza` WHERE pieza.id = $id";
//die($sql);  
$result=mysqli_query($conex,$sql);
$fila=mysqli_fetch_array($result);
?>

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
  <div class="text-center mt-5 mb-2 text-primary"><h2>Eliminar Pieza del Museo de Ciencias Naturales</h2></div>	
  <div class="text-secondary"><p><small>* Datos Obligatorios</small></p></div>
  	
  <form class="row g-3" action="eliminarPieza.php" method="post" method="post" enctype="multipart/form-data">
  
  <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $fila['id'];?>">
  <div class="col-sm-6 mb-3">
 
    <label for="nombre" class="form-label">* Nombre de la pieza</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa de la pieza" value="<?php echo $fila["nombre"];?>" required>
  </div>

  
  <div class="col-sm-6 mb-3">
    <label for="fecha" class="form-label">* fecha ingreso</label>
    <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso" placeholder="Ingresa fecha de alta de pieza" value="<?php echo $fila["fecha_ingreso"];?>" required>
  </div>

  <div  class="col-sm-6 mb-3">
  <label for="clasificación" class="form-label"> *clasificación</label>
 <select name="clasificación" class="form-control" value="<?php echo $fila['clasificacion'];?>" >
 <option>Arqueologia</option>
 <option>Historia</option>
 <option>Arte</option>
 <option>Ciencia y Tecnologia</option>
 <option>animales</option>
 </select>
</div>

<div  class="col-sm-6 mb-3">
  <label for="entrega" class="form-label"> *tipo de entrega</label>
 <select name="entrega" class="form-control" value="<?php echo $fila['tipo_de_entrega'];?>" >
 <option>donado</option>
 <option>adquirido</option>
 </select>
</div>

<div  class="col-sm-6 mb-3">
  <label for="Estado" class="form-label"> *Estado</label>
 <select name="Estado" class="form-control" value="<?php echo $fila['estado'];?>">

 <option>Nuevo</option>
 <option>Algo Desgastado</option>
 <option>Desgastado</option>
 <option>Muy Desgastado</option>
 <option>Roto</option>
 </select>
</div>


  <div class="col-sm-6 mb-3">
    <label for="existencia" class="form-label"> *cantidad</label>
    <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Ingresa cantidad" value="<?php echo $fila['cantidad'];?>">
  </div>

  
 <div class="col-sm-6 mb-3">
 
    <label for="nombre" class="form-label">*Observacion de los detalles</label>
    <input type="text" class="form-control" name="Observacion" id="Observacion" placeholder="Imperfecciones o particularidades de la pieza" value="<?php echo $fila['descripcion'];?>" required>
  </div>

  <div class="col-sm-6 mb-3">
 
    <label for="nombre" class="form-label">*Descripción</label>
    <input type="text" class="form-control" name="Descripción" id="Descripción" placeholder="Descripción destinada a muestreo" value="<?php echo $fila['observacion'];?>" required>
  </div>
  <!--

  <div class="col-sm-6 mb-3">
    <label for="imagen">insertar imagen </label>
  <input type="file" name="archivoimagen" id="archivoimagen" class="btn btn-primary btn-sm">
  </div>s
  -->

    
  <div class="col-12 text-center">
  <button type="submit" class="btn btn-danger btn-sm" name="btn_agregar" id="btn_agregar">eliminar</button>
  <a class="btn btn-primary btn-sm ms-2" href="listado.php" role="button">Cancelar</a>
  </div>
  
  </form>
   

  

  </section>

   
   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
