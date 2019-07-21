<?php
session_start();
include 'consultas.php';

$consultar = new consultas();
$datos = explode("|", $_POST['hidden']);

if (!empty($_POST)) {
    extract($_POST);
    if (!isset($hidden)) {
        $_SESSION['toastr'] = "toastr.error('', 'No se han recibido parametros');";
    } elseif (!isset($datos[0])) {
        $_SESSION['toastr'] = "toastr.error('', 'No se han recibido parametros');";
    } elseif (!isset($datos[1])) {
        $_SESSION['toastr'] = "toastr.error('', 'No se han recibido parametros');";
    } elseif (!isset($_SESSION['id']) && $_SESSION['id'] != '1') {
        //valida que sea el administrador id = '1';
        $_SESSION['toastr'] = "toastr.error('', 'No se han recibido parametros');";
    } elseif ($consultar->eliminarConferencia(base64_decode($datos[0])) == 'false') {
        $_SESSION['toastr'] = 'toastr.error("", "La solicitud no pudo ser completada, intente nuevamente");';
    } else {
        $_SESSION['toastr'] = 'toastr.success("", "Se ha eliminado la conferencia <i>' . $datos[1] . '</i>");';
    }
} else {
    $_SESSION['toastr'] = 'toastr.error("", "La solicitud no pudo ser completada, intente nuevamente");';
}
header('Location: ../admin/conferencias.php');
?>