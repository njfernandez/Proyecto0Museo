<?php

// Conexion a la Base de Datos Biblioteca 

 require_once "conexion.php";

 //Funcion de Validacion de Datos


 $error = "";



 if(!empty(trim($_POST['nombre'])) && 
 !empty(trim($_POST['fecha_ingreso'])) && 
 !empty(trim($_POST['clasificación'])) && 
 !empty(trim($_POST['entrega'])) && 
 !empty(trim($_POST['Estado']))  && 
 !empty(trim($_POST['cantidad']))  && 
 !empty(trim($_POST['Observacion']))  && 
 !empty(trim($_POST['Descripción'])) 
){
     

     if{
          
         $nombre = preg_replace('/\s+/',' ',$_POST['nombre']);
         $fecha_ingreso=$_POST['fecha_ingreso'];
         $clasificación = $_POST['clasificación'];
         $entrega=$_POST['entrega'];
         $Estado=$_POST['Estado'];
         $cantidad=$_POST['cantidad'];
         $Observacion=$_POST['Observacion'];
         $Descripción=$_POST['Descripción'];

 

 
         // $archivoimagen=$_FILES['archivoimagen']['tmp_name'];
 
       
 
          $sql="INSERT INTO `pieza` (`id`, `nombre`, `fecha_ingreso`, `clasificacion`, `tipo_de_entrega`, `estado`, `cantidad`, `descripcion`, `observacion`) VALUES (NULL, 'cuerno de unicornio', '2023-10-01', 'hueso', 'Donado', 'nuevo', '2', 'cuerpo de criatura magica del señor de los anillos', 'es rosa');";
 
          $result=mysqli_query($conex,$sql);
         // die($sql);
          if ($result){
             
 
              
          header("Location:form_agregar.php?mensaje=ok");
 
         }else{ 
             $error.="error de insercion";
            header("Location:form_agregar.php?mensaje=".$error);
      
         }
 
          }else{
             echo "no es una imagen";
          }
 
          
 
         
 
         
 
        //die($sql);
         
 
     
     }else{
         //header("Location:form_agregar.php?mensaje=".$error);
     }

 
 
     
 
 ?>
 