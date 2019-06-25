<?php

session_start();
include 'consultas.php';
include 'utils/generaPasswd.php';
include 'utils/mailComposer.php';
include 'utils/sendMail.php';

$consultar = new consultas();
$existeMail = $consultar->consultaCorreo($_POST['email']);
extract($_POST);
if (isset($email) && $existeMail == 'false') {
    $newConexion = new Conexion();
    $conexion = $newConexion->getConnection();
    $newPasswd = new GeneraPasswd();
    $passwd = $newPasswd->getPasswd(6);
    if ($consultar->restableceContrasena($email, $passwd) == 'true') {
        $newCuerpo = new MailComposer();
        $newMail = new Mailing();
        $mensaje = $newCuerpo->composerRestablecePasswd($email, $passwd);
        $newMail->sendMail("CORE Congress 2019. Restablecimiento de contraseña", $email, $email, $mensaje);
    }
}
$consultar->redirecciona('../mensajePassword.php?r=' . base64_encode($email));
?>

