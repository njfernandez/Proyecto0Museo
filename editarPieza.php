<?php
require_once "conexion.php";
$error = "";

 // Recibe el id oculto desde el form_editar

 $id=$_POST["id"];
 
 // Crea una variable de sesión llamada ids para guardar el id del socio recibido 

 //$_SESSION['ids']=$id;


 if(!empty(trim($_POST['nombre'])) && 
 !empty(trim($_POST['fecha_ingreso'])) && 
 !empty(trim($_POST['clasificación'])) && 
 !empty(trim($_POST['entrega'])) && 
 !empty(trim($_POST['Estado']))  && 
 !empty(trim($_POST['cantidad']))  && 
 !empty(trim($_POST['Observacion']))  && 
 !empty(trim($_POST['Descripción'])) 
){
	
 
         
    $nombre = preg_replace('/\s+/',' ',$_POST['nombre']);
    $fecha_ingreso=$_POST['fecha_ingreso'];
    $clasificación = $_POST['clasificación'];
    $entrega=$_POST['entrega'];
    $Estado=$_POST['Estado'];
    $cantidad=$_POST['cantidad'];
    $Observacion=$_POST['Observacion'];
    $Descripción=$_POST['Descripción'];
       
        // Se arma la sentencia SQL de Actualización
            
        $sql="UPDATE `pieza` SET `nombre` = '$nombre', `fecha_ingreso` = '$fecha_ingreso', `clasificacion` = '$clasificación',`tipo_de_entrega` = '$entrega' ,`estado` = '$Estado', `cantidad` = '$cantidad', `descripcion` = '$Descripción', `observacion` = '$Observacion' WHERE `pieza`.`id` = $id";    

     
        
        // Ejecuta la sentencia

        mysqli_query($conex,$sql);

        //die($sql);
		//echo $sql;

        // Evalúa si se realizó la actualización de algun dato

        if (mysqli_affected_rows($conex)==1){
 	

           header("Location:listado.php");

        }else{

        
				
	            $error.="No se realizó Actualización! ";
	            header("Location:formEditarPieza.php?msje=".$error);
            } 
	
	}else{
		header("Location:formEditarPieza.php?msje=".$error);
	}


 

?>

