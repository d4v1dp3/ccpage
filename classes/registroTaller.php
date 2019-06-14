<?php

session_start();
include 'conexion.php';

if (!empty($_POST)) {
    extract($_POST);
    if (!isset($nombre)) {
        $_SESSION['toastr'] = "toastr.error('', 'El campo nombre de taller no puede quedar vacio');";
    } elseif (!isset($descripcion)) {
        $_SESSION['toastr'] = "toastr.error('', 'El campo descripción no puede quedar vacio');";
    } elseif (!isset($ponente)) {
        $_SESSION['toastr'] = "toastr.error('', 'El campo ponente no puede quedar vacio');";
    } elseif (!isset($cupo)) {
        $_SESSION['toastr'] = "toastr.error('', 'El campo cupo no puede quedar vacio');";
    } elseif (!isset($fecha)) {
        $_SESSION['toastr'] = "toastr.error('', 'El campo fecha no puede quedar vacio');";
    } elseif (!isset($lugar)) {
        $_SESSION['toastr'] = "toastr.error('', 'El campo lugar no puede quedar vacio');";
    } else {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $registro = 'false';
        try {
            $statement = $conexion->prepare("INSERT INTO taller VALUES(DEFAULT,?,?,?,?,?,'Abierto','1',?)");
            $statement->bind_param("ssssss", $nombre, $descripcion, $ponente, $cupo, $fecha, $lugar);
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
            $_SESSION['toastr'] = 'toastr.success("", "Registro generado con éxito.");';
        } else {
            $_SESSION['toastr'] = 'toastr.error("", "El registro no pudo ser completado, intente nuevamente");';
        }
    }
    header('Location: ../talleres.php');
}
?>

