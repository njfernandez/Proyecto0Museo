<?php
session_start();

require_once "conexion.php";

$error="";



if(!empty($_POST['dni']) && !empty($_POST['clave']) && !empty($_POST['perfil'])){
	
    

  
        
        
        $dni= $_POST['dni'];
        $clave = $_POST['clave'];
        $tipo_usuario=$_POST['perfil'];

           



            $sql="SELECT dni,clave,tipo_usuario,nombre,apellido FROM usuario where(dni='$dni') and (clave='$clave') and (tipo_usuario='$tipo_usuario')";

            $result=mysqli_query($conex,$sql);
           // die($sql);

            if (mysqli_num_rows($result)==1){

                $fila=mysqli_fetch_array($result);
                if ($fila['tipo_usuario']=="cliente"){

                  $_SESSION['dnicli']=$fila['dni'];
              //  echo $_SESSION['dnicli'];
                //die();
                $_SESSION['nombrecli']=$fila['nombre'];
                $_SESSION['apellidocli']=$fila['apellido'];
                $_SESSION['tipousu']=$fila['tipo_de_usuario'];               

                  header("Location:cliente.php");

                }else if($fila['tipo_usuario']=="administrador"){

                  $_SESSION['dniadmin']=$fila['dni'];
                  //  echo $_SESSION['dnicli'];
                    //die();
                    $_SESSION['nombreadmin']=$fila['nombre'];
                    $_SESSION['apellidoadmin']=$fila['apellido'];
                    $_SESSION['tipousu']=$fila['tipo_de_usuario'];               
    
                      header("Location:administrador.php");

                  }  } else{   
          
      $error.="error en la insercion de datos ";
      header("Location:form_ingresar.php?mensaje=".$error);

      }

  }else{


  	$error.="Faltan Datos ";
	header("Location:form_ingresar.php?mensaje=".$error);
  
}
	

?>