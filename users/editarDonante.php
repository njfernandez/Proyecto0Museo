<?php 
require_once '../conexion.php';
$id = $_POST['idDonante'];
if(isset($_POST['nombre']) || isset($_POST['apellidos']) || isset($_POST['fecha'])){
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $fecha = $_POST['fecha'];
  $sql="UPDATE `donante` SET `nombre` = '$nombre', `apellido` = '$apellidos', 'fecha' = '$fecha' WHERE `donante`.`idDonante` = $id";
  $result=mysqli_query($conex,$sql);
}
 
?>