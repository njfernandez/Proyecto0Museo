<?php
session_start();
//echo $_SESSION['dnicli'];
//die();
 if(!isset($_SESSION['dniadmin'])){
     header("location:index.php");
    }

?>
<!DOCTYPE html>
<html lang="es">
<?php
     
     include('head.php');

   ?>
<body>
 

<?php
     
     include('header.php');

   ?>

  

<section class="container text-center">
    
        <div class="border border-secondary ">
        <h1> acceso exclusivo para ADMINISTRADOR</h1>
        <h2> BIENVENIDO/A SR/A ADMIN !!!!</h2>
    </div>
   
    

    

    
</section>






<footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - Company Name</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>