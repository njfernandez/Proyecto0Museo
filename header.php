<header>

     <!-- Encabezado -->       
<nav class="navbar  bg-dark navbar-expand-lg navbar-light fixed-top py-3"  style="position:absolute;" id="mainNav" >
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="./index.php">proyecto</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">

        <?php 
        if(!isset($_SESSION['dnicli']) && !isset($_SESSION['dniadmin']) ){ 
          ?>


                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">Acerca de</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="./form_ingresar.php">ingresar</a></li>
                        <li class="nav-item"><a class="nav-link" href="./contacto.php">Contacto</a></li>
                    </ul>
             

         <?php
         
        }else if(isset($_SESSION['dnicli']))  {
        
        ?>
         <ul class="navbar-nav">
      	<li class="nav-item">
          <a class="nav-link" href="#">CLIENTE</a>
        </li>
       
       </ul>
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
         <a href="" class="nav-link"> <?php echo  $_SESSION['nombrecli']. $_SESSION['apellidocli'] ?></a>
        </li>	
       
        <li class="nav-item">
          <a class="nav-link" href="salir.php">SALIR</a>
        </li>	
        
       </ul>

       <?php 
        }else if(isset($_SESSION['dniadmin'])) { 

       ?>

     <ul class="navbar-nav ms-auto my-2 my-lg-0">

     <li class="nav-item">
          <a class="nav-link" href="listado.php">listado</a>
        </li>
                        
        <li class="nav-item">
          <a href="" class="nav-link" style="color:white;"> <?php echo  $_SESSION['nombreadmin']." ". $_SESSION['apellidoadmin'] ?></a>
        </li>	
       <li class="nav-item">
                  <a class="nav-link" href="salir.php">SALIR</a>
          </li>	
        
        
        </ul>

        
       
        
        
      

       <?php
        }

       ?>

     
      </div>
      </div>
      </nav>       
</header>
    
    