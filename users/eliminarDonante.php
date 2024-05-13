<?php
require_once '../conexion.php';
$id = $_POST['idDonante'];
$sql = "DELETE FROM donante WHERE `donante`.`idDonante` = $id";
$result=mysqli_query($conex,$sql);
header("Location:./donantes.php");
?>


