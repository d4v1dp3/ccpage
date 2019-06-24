<?php
session_start();
include 'conexion.php';

if (!empty($_POST)) {
    extract($_POST);
    if (!isset($hidden)) {
        $_SESSION['toastr'] = "toastr.error('', 'Imposible eliminar sin parametros');";
    } else {
        $newConexion = new Conexion();
        $conexion = $newConexion->getConnection();
        $registro = 'false';
        try {
            $statement = $conexion->prepare("INSERT INTO taller VALUES(DEFAULT,?,?,?,?,STR_TO_DATE(?,'%d/%m/%Y %H:%i'),'Abierto','1',?,NOW())");
            $statement->bind_param("ssssss", $nombre, $descripcion, $ponente, $cupo, $fecha_evento, $lugar);
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
} else {
    $_SESSION['toastr'] = 'toastr.error("", "El registro no pudo ser completado, intente nuevamente");';
}
header('Location: ../admin/talleres.php');
?>

