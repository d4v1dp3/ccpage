<?php

session_start();
include 'consultas.php';
include 'utils/generaPasswd.php';
include 'utils/mailComposer.php';
include 'utils/sendMail.php';

$consultar = new consultas();
if (isset($_POST['ponente'])) {
    $es_ponente = "1";
} else {
    $es_ponente = "0";
}

extract($_POST);
if (!isset($email)) {
    $_SESSION['toastr'] = "toastr.error('', 'El campo correo no puede quedar vacio');";
} elseif (!($email === $confirmEmail)) {
    $_SESSION['toastr'] = "toastr.error('', 'Los campos de correo no coinciden');";
} elseif ($consultar->consultaCorreo($_POST['email']) == 'false') {
    $_SESSION['toastr'] = "toastr.error('', 'El correo ya ha sido registrado anteriormente');";
} elseif (!isset($nombre)) {
    $_SESSION['toastr'] = "toastr.error('', 'El campo nombre no puede quedar vacio');";
} elseif (!isset($apellido)) {
    $_SESSION['toastr'] = "toastr.error('', 'El campo apellido no puede quedar vacio');";
} elseif (!isset($telefono)) {
    $_SESSION['toastr'] = "toastr.error('', 'El campo telefono no puede quedar vacio');";
} elseif (!isset($procedencia)) {
    $_SESSION['toastr'] = "toastr.error('', 'El campo procedencia no puede quedar vacio');";
} elseif ($es_ponente == "1" and empty($paper)) {
    $_SESSION['toastr'] = "toastr.error('', 'Indica el nombre del Paper al registrarte como ponente');";
} else {

    /** mandar a llamar desde una clase * */
    $newConexion = new Conexion();
    $conexion = $newConexion->getConnection();
    $registro = 'false';
    try {
        //La version de MariaDb no soporta commit/rollback
        //$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $conexion->prepare("INSERT INTO usuario VALUES(DEFAULT,?,?,?,?,?,?,?,?,NOW(),'1')");
        $statement->bind_param("ssssssss", $nombre, $apellido, $email, $procedencia[0], $es_ponente, $paper, $telefono, $email);
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

    /**     * */
    if ($registro == 'true') {
        $newPasswd = new GeneraPasswd();
        $passwd = $newPasswd->getPasswd(6);
        if ($consultar->registraUsuario($email, $passwd, $es_ponente, "1") == 'true') {
            $_SESSION['toastr'] = 'toastr.success("", "Registro generado con éxito. Recibiras en tu correo el usuario y contraseña de acceso");';
            //enviar correo
            $newCuerpo = new MailComposer();
            $newMail = new Mailing();
            $mensaje = $newCuerpo->composerNuevoUsuario($email, $passwd);
            $newMail->sendMail("Registro en CORE 2019", $email, $nombre, $mensaje);
        } else {
            $_SESSION['toastr'] = 'toastr.error("", "El registro no pudo ser completado, intente nuevamente");';
        }
    } else {
        $_SESSION['toastr'] = 'toastr.error("", "El registro no pudo ser completado, intente nuevamente");';
    }
}

header('Location: ../registro.php');
?>

