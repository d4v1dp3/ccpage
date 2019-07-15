<?php

include '../classes/consultas.php';

try {
    $correo = trim($_GET['email']);
    if ($correo) {
        $consultas = new consultas();
        $val = $consultas->consultaCorreo($correo);
        if ($val == 'true') {
            var_dump(http_response_code(200));
        } else {
            var_dump(http_response_code(400));
        }
    } else {
        var_dump(http_response_code(400));
    }
} catch (Exception $e) {
//    echo 'Message: ' . $e->getMessage();
    var_dump(http_response_code(400));
}
?>