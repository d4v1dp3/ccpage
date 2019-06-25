<?php

session_start();
include 'conexion.php';

$datos = explode("|", $_POST['hidden']);
if (!empty($_POST)) {
    extract($_POST);
    if (!isset($hidden)) {
        $_SESSION['toastr'] = "toastr.error('', 'No se han recibido parametros');";
    } elseif (!isset($datos[0])) {
        $_SESSION['toastr'] = "toastr.error('', 'No se han recibido parametros');";
    } elseif (!isset($nombre)) {
        $_SESSION['toastr'] = "toastr.error('', 'El campo nombre de taller no puede quedar vacio');";
    } elseif (!isset($descripcion)) {
        $_SESSION['toastr'] = "toastr.error('', 'El campo descripción no puede quedar vacio');";
    } elseif (!isset($ponente)) {
        $_SESSION['toastr'] = "toastr.error('', 'El campo ponente no puede quedar vacio');";
    } elseif (!isset($cupo)) {
        $_SESSION['toastr'] = "toastr.error('', 'El campo cupo no puede quedar vacio');";
    } elseif (!isset($fecha_evento)) {
        $_SESSION['toastr'] = "toastr.error('', 'El campo fecha no puede quedar vacio');";
    } elseif (!isset($lugar)) {
        $_SESSION['toastr'] = "toastr.error('', 'El campo lugar no puede quedar vacio');";
    } else {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $registro = 'false';
        try {
            $statement = $conexion->prepare("UPDATE taller SET nombre_taller=?,descripcion=?,nombre_ponente=?,cupo_maximo=?,fecha_curso=STR_TO_DATE(?,'%d/%m/%Y %H:%i'),lugar=? WHERE id=?");
            $statement->bind_param("sssssss", $nombre, $descripcion, $ponente, $cupo, $fecha_evento, $lugar, base64_decode($datos[0]));
            $statement->execute();
            if ($statement->affected_rows === 0) {
                $registro = 'false';
            } else {
                $registro = 'true';
            }
            $statement->close();
        } catch (PDOException $e) {
            $registro = 'false';
            echo $sql . "<br>" . $e->getMessage();
        }
        if ($registro == 'true') {
            $_SESSION['toastr'] = 'toastr.success("", "Se guardaron los cambios con éxito.");';
        } else {
            $_SESSION['toastr'] = 'toastr.error("", "El registro no pudo ser completado, intente nuevamente");';
        }
    }
} else {
    $_SESSION['toastr'] = 'toastr.error("", "El registro no pudo ser completado, intente nuevamente");';
}
header('Location: ../admin/talleres.php');
?>

