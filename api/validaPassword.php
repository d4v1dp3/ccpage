<?php

include '../classes/consultas.php';
session_start();

try {
    $pass = trim($_GET['actualPass']);
    
    if ($pass && isset($_SESSION["usuario"])) {
        $consultas = new consultas();
        $val = $consultas->validaContrasena($_SESSION["usuario"], $pass);
        if ($val == 'true') {
            var_dump(http_response_code(200));
        } else {
            var_dump(http_response_code(400));
        }
    } else {
        var_dump(http_response_code(400));
    }
} catch (Exception $e) {
    var_dump(http_response_code(400));
}
?>