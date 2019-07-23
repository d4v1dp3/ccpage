<?php

session_start();
include 'consultas.php';

$consultar = new consultas();
$datos = explode("|", $_POST['hidden']);

if (!empty($_POST)) {
    extract($_POST);
    if (!isset($hidden)) {
        $_SESSION['toastr'] = "toastr.error('', 'No se han recibido parámetros');";
    } elseif (!isset($datos[0])) {
        $_SESSION['toastr'] = "toastr.error('', 'No se han recibido parámetros');";
    } elseif (!isset($datos[1])) {
        $_SESSION['toastr'] = "toastr.error('', 'No se han recibido parámetros');";
    } elseif (!isset($_SESSION['id'])) {
        $_SESSION['toastr'] = "toastr.error('', 'No se han recibido parámetros');";
    } elseif (!isset($_FILES["comprobante"]) && $_FILES["comprobante"]["error"] == 1) {
        $_SESSION['toastr'] = "toastr.error('', 'Error al cargar el archivo');";
    } else {
        $allowed = array("pdf" => "application/pdf");
        $filename = $_FILES["comprobante"]["name"];
        $filetype = $_FILES["comprobante"]["type"];
        $filesize = $_FILES["comprobante"]["size"];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $allowed)) {
            die("Error: Please select a valid file format.");
            $_SESSION['toastr'] = "toastr.error('', 'Error al cargar el archivo. El formato no es válido');";
        } else {
            $maxsize = 5 * 1024 * 1024;
            if ($filesize > $maxsize) {
                die("Error: File size is larger than the allowed limit.");
                $_SESSION['toastr'] = "toastr.error('', 'El archivo es mayor al tamaño aceptado');";
            } else {
                if (in_array($filetype, $allowed)) {
                    if (is_uploaded_file($_FILES['comprobante']['tmp_name'])) {
                        //Es una mala practica, pero solo hace el execute cuando le envio el b64 desde el parametro
                        if ($consultar->cargarComprobante($_SESSION['id'], base64_decode($datos[0]), base64_encode(file_get_contents($_FILES["comprobante"]["tmp_name"])), $datos[2])) {
                            $_SESSION['toastr'] = "toastr.success('', 'El archivo se ha cargado correctamente. Se validará la información para aprobar tu inscripción al taller " . $datos[1] . "');";
                        } else {
                            $_SESSION['toastr'] = "toastr.error('', 'Tuvimos un problema cargando el archivo, intente nuevamente');";
                        }
                    } else {
                        $_SESSION['toastr'] = "toastr.error('', 'Tuvimos un problema cargando el archivo, intente nuevamente');";
                    }
                } else {
                    $_SESSION['toastr'] = "toastr.error('', 'Tuvimos un problema cargando el archivo, intente nuevamente');";
                }
            }
        }
    }
} else {
    $_SESSION['toastr'] = 'toastr.error("", "El registro no pudo ser completado, intente nuevamente");';
}

header('Location: ../users/inicio.php');
?>