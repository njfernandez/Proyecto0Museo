<!DOCTYPE html>
<html lang="en">
<?php
     
     include('head.php');

   ?>
<body>
<header>
<nav class="navbar  bg-dark navbar-expand-lg navbar-light fixed-top py-3" style="position:absolute;" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="./index.php">proyecto</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">Acerca de</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="./form_ingresar.php">ingresar</a></li>
                        <li class="nav-item"><a class="nav-link" href="./contacto.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</header>


  <section  class="page-section">
   
  
   <div class="container mt-2 mb-5">
   <div class="text-center mt-5 mb-2"><h2>Ingresar de usuarios</h2></div>	
   <div class="text-secondary"><p><small>* Dato Obligatorio</small></p></div>
    
   <form class="row g-3" action="ingresar.php" method="post">
   
   <div class="col-sm-6 mb-3">
     <label for="dni" class="form-label">* DNI USURIO</label>
     <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingresa DNI de 8 dígitos">
   </div>
   <div class="col-sm-6 mb-3">
     <label for="clave" class="form-label">* Contraseña</label>
     <input type="password" class="form-control" name="clave" id="clave" placeholder="Ingresa una contraseña de 8 caracteres como mínimo">
   </div>    

  

   <div class="col-12 text-center">
   <button type="submit" class="btn btn-primary" name="btn_ingresar" id="btn_ingresar">ingresar</button>
   
   </div>
   
   </form>
    
     
   <?php
     

 
     if (isset($_GET["mensaje"])){
 
          if($_GET["mensaje"]!="ok"){
 
          echo "<div class='text-center mt-4 mb-5'><div class='alert alert-danger' role='alert'><strong>".$_GET["mensaje"]."</strong></div></div>"; 
          
        }else{
 
                  
         echo "<div class='text-center mt-4 mb-5'><div class='alert alert-success' role='alert'><strong>Datos agregados exitosamente!</strong></div></div>";  
        
        }  
   } 
   ?> 
   
 
 
 
   </section>
</body>
</html>