<?php
require_once "../conexion.php";
$error = "";




if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($fecha = $_POST['fecha'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha = $_POST['fecha'];   

    $sql="INSERT INTO `donante` (`idDonante`, `nombre`, `apellido`, `fecha`) VALUES (NULL, '$nombre','$apellido' ,  '$fecha')";
    $result=mysqli_query($conex,$sql);

    if($result){
        header("Location:administrador.php?");
    }
 

}else{
    $error.="error en la insercion de datos del donante ";
    header("Location:donanteAdd.php?mensaje=".$error);
}



?>