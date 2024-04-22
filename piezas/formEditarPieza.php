
<?php
require_once "conexion.php";
$id = $_POST["id"];
$sql="SELECT * 
FROM piezas
INNER JOIN categoriasgenerales CG on CG.idCategorias = piezas.CategoriasGenerales_idCategorias
INNER JOIN subcategorias SC on SC.idSubCategorias = piezas.SubCategorias_idSubCategorias
INNER JOIN usuarios US on US.idusuario = piezas.usuarios_idusuario
INNER JOIN donantes DN on DN.idDonante =piezas.idDonante
WHERE piezas.idpiezas = $id";
//die($sql);  
$result=mysqli_query($conex,$sql);
$fila=mysqli_fetch_array($result);

/*
SELECT * 
FROM piezas
INNER JOIN categoriasgenerales CG on CG.idCategorias = piezas.CategoriasGenerales_idCategorias
INNER JOIN subcategorias SC on SC.idSubCategorias = piezas.SubCategorias_idSubCategorias
INNER JOIN usuarios US on US.idusuario = piezas.usuarios_idusuario
INNER JOIN donantes DN on DN.idDonante =piezas.idDonante
*/
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
                <a class="navbar-brand" href="./index.php">Museo</a>
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
   <!-- Index.php contiene un Formulario para Agregar pieza--> 

   
 
  <section class="page-section" >
   
  <div class="container mt-2 mb-5" >
  <div class="text-center mt-5 mb-2 text-success"><h2>Editar Pieza del Museo de Ciencias Naturales</h2></div>	
  <div class="text-secondary"><p><small>* Datos Obligatorios</small></p></div>
  	
  <form class="row g-3" action="editarPieza.php" method="post" method="post" enctype="multipart/form-data">
  
  <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $fila['idpieza'];?>">
  <div class="col-sm-6 mb-3">
 
    <label for="nombre" class="form-label">* Nombre de la pieza</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa de la pieza" value="<?php echo $fila["nombreDePiezas"];?>" >
  </div>

  
  <div class="col-sm-6 mb-3">
    <label for="existencia" class="form-label"> *cantidad</label>
    <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Ingresa cantidad" value="<?php echo $fila['cantidad'];?>">
  </div>


  
  <div class="col-sm-6 mb-3">
    <label for="fecha" class="form-label">* fecha ingreso</label>
    <input type="date" class="form-control" name="FechaDeIngreso" id="FechaDeIngreso" placeholder="Ingresa fecha de alta de pieza" value="<?php echo $fila["FechaDeIngreso"];?>" >
  </div>

<div class="col-sm-6 mb-3">
 <label for="nombre" class="form-label">*Observacion de los detalles</label>
 <input type="text" class="form-control" name="Descripcion" id="Descripcion" placeholder="Imperfecciones o particularidades de la pieza" value="<?php echo $fila['Descripcion'];?>" >
</div>


<!-- Index.php contiene un Formulario para las claves foraneas--> 

<div  class="col-sm-6 mb-3">
  <label for="entrega" class="form-label"> *Categoria General</label>
 <input type="text" class="form-control" name="subcategoria" id="subcategoria" placeholder="subcategoria" value="<?php echo $fila["CategoriasGenerales_idCategorias"];?>" >
 </select>
</div>

<div class="col-sm-6 mb-3">
    <label for="fecha" class="form-label">* Subcategoria</label>
    <input type="text" class="form-control" name="subcategoria" id="subcategoria" placeholder="subcategoria" value="<?php echo $fila["SubCategorias_idSubCategorias"];?>" >
</div>
 
  
<div class="col-sm-6 mb-3">
    <label for="fecha" class="form-label">* Usuario</label>
    <input type="text" class="form-control" name="subcategoria" id="subcategoria" placeholder="subcategoria" value="<?php echo $fila["usuarios_idusuario"];?>" >
</div>

<div class="col-sm-6 mb-3">
    <label for="fecha" class="form-label">* Donante</label>
    <input type="text" class="form-control" name="subcategoria" id="subcategoria" placeholder="subcategoria" value="<?php echo $fila["idDonante"];?>" >
</div>



    
  <div class="col-12 text-center">
  <button type="submit" class="btn btn-success btn-sm" name="btn_agregar" id="btn_agregar">Guardar Cambios</button>
  <a class="btn btn-danger btn-sm ms-2" href="listado.php" role="button">Cancelar</a>
  </div>
  
  </form>
   

  

  </section>

   
   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
