<?php
     
     include('head.php');

   ?>
<body>
      


  <section>
   
  
   <div class="container mt-2 mb-5">
   <div class="text-center mt-5 mb-2"><h2>Registro de usuarios</h2></div>	
   <div class="text-secondary"><p><small>* Dato Obligatorio</small></p></div>
       
   <form class="row g-3" action="registro.php" method="post">
   
   <div class="col-sm-6 mb-3">
     <label for="dni" class="form-label">* DNI</label>
     <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingresa DNI de 8 dígitos">
   </div>
   
   <div class="col-sm-6 mb-3">
     <label for="nombre" class="form-label">* Nombre</label>
     <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu Nombre">
   </div>
   <div class="col-sm-6 mb-3">
     <label for="apellido" class="form-label">* Apellido</label>
     <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingresa tu Apellido">
   </div>
   <div class="col-sm-6 mb-3">
     <label for="telefono" class="form-label">* Telefono</label>
     <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingresa tu telefono">
   </div>
  
   <div class="col-sm-6 mb-3">
     <label for="email" class="form-label">* Email</label>
     <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu Correo Electrónico">
   </div>
   <div class="col-sm-6 mb-3">
     <label for="clave" class="form-label">* Contraseña</label>
     <input type="password" class="form-control" name="clave" id="clave" placeholder="Ingresa una contraseña de 8 caracteres como mínimo">
   </div>    
   <div class="col-12 text-center">
   <button type="submit" class="btn btn-primary" name="btn_registrar" id="btn_registrar">Registrar</button>
   
   </div>
   
   </form>
    
     
   <?php
     
     /* Evalúa si existe mensaje, enviado mediante el método GET, desde el archivo validarDatosSocio.php 
     Si existe mensaje, entonces evalúa si es un mensaje de error o de OK*/
 
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