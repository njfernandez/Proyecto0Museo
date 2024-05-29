<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si se ha enviado el campo select
    if (isset($_POST["opcion"])) {
        // Obtiene el valor seleccionado del campo select
        $opcion = $_POST["opcion"];

        // Ejecuta un switch para cada opción
        switch ($opcion) {
            case "arqueologia":
                // Hacer algo para la opción 1
                $sql="SELECT * FROM arqueologia";
                
                break;
            case "botanica":
                // Hacer algo para la opción 2
                 $sql="SELECT * FROM botanica";
                break;
            case "geologia":
                // Hacer algo para la opción 3
                 $sql="SELECT * FROM geologia";
                break;
            // Agrega más casos según sea necesario
            case "ictiologia":
                // Hacer algo para la opción 4
                 $sql="SELECT * FROM ictiologia";
                break;
            // Agrega más casos según sea necesario
            case "octologia":
                // Hacer algo para la opción 5
                 $sql="SELECT * FROM octologia";
                break;
            // Agrega más casos según sea necesario
            case "osteologia":
                // Hacer algo para la opción 6
                 $sql="SELECT * FROM osteologia";
                break;
            // Agrega más casos según sea necesario
            case "paleontologia":
                // Hacer algo para la opción 7
                 $sql="SELECT * FROM paleontologia";
                break;
            // Agrega más casos según sea necesario
            case "zoologia":
                // Hacer algo para la opción 8
                 $sql="SELECT * FROM zoologia";
                break;
            // Agrega más casos según sea necesario

            default:
                // Opción por defecto si no coincide con ninguna de las anteriores
                echo "Opción no válida";
        }
    } else {
        // Si no se ha enviado el campo select
        echo "Por favor, selecciona una opción";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
 

  

