<?php

include '../classes/consultas.php';

try {
    $newConexion = new Conexion();
    $conexion = $newConexion->getConnection();
    $query = "SELECT DISTINCT UPPER(procedencia) FROM usuario ORDER BY procedencia ASC";
    if ($result = $conexion->query($query)) {
        while ($row = $result->fetch_row()) {
            $arr[] = $row[0];
        }
        $result->close();
    }

    if (empty($var)) {
        printf(json_encode($arr));
        //var_dump(http_response_code(200));
    } else {
        //var_dump(http_response_code(400));
    }
} catch (Exception $e) {
//    echo 'Message: ' . $e->getMessage();
    //var_dump(http_response_code(400));
}
?>



