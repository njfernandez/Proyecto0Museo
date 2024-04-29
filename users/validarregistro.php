<?php
function validarDNI($dni) {
    // Validación 1: Verificar que el DNI tenga 8 dígitos
    if (strlen($dni) !== 8) {
        return false;
    }
    
    // Validación 2: Verificar que sea un número válido
    if (!ctype_digit($dni)) {
        return false;
    }
    
    return true;
}

function validarNombreApellido($nombreApellido) {
    // Validación 1: Verificar que no estén vacíos y que solo contengan letras y espacios
    if (empty($nombreApellido) || !preg_match("/^[a-zA-Z\s]+$/", $nombreApellido)) {
        return false;
    }

    return true;
}

function validarEmail($email) {
    // Validación 1: Verificar que tenga un formato válido
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    return true;
}

function validarClave($clave) {
    // Validación 1: Verificar que tenga al menos 8 caracteres
    // Validación 2: Verificar que contenga al menos una letra mayúscula y un número
    if (strlen($clave) < 8 || !preg_match("/[A-Z]/", $clave) || !preg_match("/\d/", $clave)) {
        return false;
    }

    return true;
}

function validarFechaAlta($fechaAlta) {
    // Puedes implementar la validación de acuerdo al formato de fecha requerido
    // Por ejemplo, si es una fecha en formato 'YYYY-MM-DD':
    // if (!DateTime::createFromFormat('Y-m-d', $fechaAlta)) {
    //     return false;
    // }

    // En este ejemplo, no se ha especificado el formato de fecha, así que no se realiza la validación aquí.
    return true;
}

function validarTipoUsuario($tipoUsuario) {
    // Validación 1: Verificar que no esté vacío
    // Validación 2: Verificar que sea un valor válido según tus requisitos
    if (empty($tipoUsuario) || !in_array($tipoUsuario, ['admin', 'usuario'])) {
        return false;
    }

    return true;
}

// Ejemplo de uso:
$dni = "12345678";
if (validarDNI($dni)) {
    echo "DNI válido.";
} else {
    echo "DNI inválido.";
}
?>
