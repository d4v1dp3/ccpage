<?php

session_start();
include 'consultas.php';

$consultar = new consultas();
$validaPasswd = $consultar->validaContrasena($_SESSION['usuario'], $_POST['actualPass']);

extract($_POST);
if ($validaPasswd == 'false') {
    $_SESSION['toastr'] = "toastr.error('', 'La contraseña actual no coincide');";
} elseif (!isset($nuevaPass)) {
    $_SESSION['toastr'] = "toastr.error('', 'El campo contraseña no puede quedar vacio');";
} elseif (!isset($confirmPass)) {
    $_SESSION['toastr'] = "toastr.error('', 'El campo confirmar contraseña no puede quedar vacio');";
} elseif (!($nuevaPass === $confirmPass)) {
    $_SESSION['toastr'] = "toastr.error('', 'Las contraseñas no coinciden');";
} else {
    $registro = $consultar->actualizaContrasena($_SESSION['usuario'], $nuevaPass);
    if ($registro == 'true') {
        $_SESSION['toastr'] = 'toastr.success("", "Datos actualizados correctamente");';
    } else {
        $_SESSION['toastr'] = 'toastr.error("", "El registro no pudo ser completado, intente nuevamente");';
    }
}
header('Location: ../users/cuenta.php');
?>

