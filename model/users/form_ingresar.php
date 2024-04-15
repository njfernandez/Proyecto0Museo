<!DOCTYPE html>
<html lang="en">

     
<body>



  <section  class="page-section">
   <div class="container mt-2 mb-5">
   <div class="text-center mt-5 mb-2"><h2>Ingresar de usuarios</h2></div>	
   <div class="text-secondary"><p><small>* Dato Obligatorio</small></p></div>
    
   <form class="row g-3" action="/model/ingresar.php" method="post">
   
   <div class="col-sm-6 mb-3">
     <label for="dni" class="form-label">DNI</label>
     <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingresa DNI de 8 dígitos">
   </div>
   <div class="col-sm-6 mb-3">
     <label for="clave" class="form-label">* Contraseña</label>
     <input type="password" class="form-control" name="clave" id="clave" placeholder="Ingresa una contraseña de 8 caracteres como mínimo">
   </div>    
   
   <div class="col-sm-6 mb-3">
       <label for="perfil" class="form-label">*Perfil</label>
       <select name="perfil" class="form-control">
       <option disabled selected>seleccione su perfil</option>
       <option value = 1>cliente</option>
       <option value = 2>administrador</option>
       </select>
       
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