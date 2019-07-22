<?php
include_once '../classes/consultas.php';
session_start();
if (!($_SESSION['logged_in'])) {
    header('Location: ../login.php');
} elseif ($_SESSION['tipo'] !== '1') {
    header('Location: ../login.php');
} else {
    $consultas = new consultas();
    $data = $consultas->consultaTalleres();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="../css/plugins/toastr/toastr.min.css" rel="stylesheet">
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <title>CORE 2019 | Mi cuenta</title>
    </head>
    <body>
        <div id="wrapper">
            <?php include_once '../templates/navigator-users.php' ?>
            <div id="page-wrapper" class="gray-bg">
                <?php include_once '../templates/navbar.php' ?>
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2><i class="fa fa-star"></i> &nbsp;Mi cuenta</h2>
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
                <div class="row wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <h3>Actualizar datos de contacto</h3>
                                    <form class="m-t" data-toggle="validator" role="form" method="post" action="../classes/actualizaUsuario.php">
                                        <div class="form-group col-sm-8">
                                            <label class="control-label">Nombre</label>
                                            <input type="text" class="form-control" value="<?= $_SESSION["nombre"] ?> <?= $_SESSION["apellido"] ?>" readonly="">
                                        </div>
                                        <div class="form-group col-sm-8">
                                            <label class="control-label">Teléfono</label>
                                            <input type="text" class="form-control" value="<?= $_SESSION["telefono"] ?>" readonly="">
                                        </div>
                                        <div class="form-group col-sm-8">
                                            <label class="control-label">Correo</label>
                                            <input type="text" class="form-control" value="<?= $_SESSION["usuario"] ?>" readonly="">
                                        </div>
                                        <div class="form-group col-sm-8">
                                            <label class="control-label">Procedencia</label>
                                            <input type="text" class="form-control" value="<?= $_SESSION["procedencia"] ?>" readonly="">
                                        </div>
                                        <div class="form-group col-sm-8">
                                            <label class="control-label">Contraseña actual</label>
                                            <input type="password" class="form-control" name="actualPass" maxlength="99" data-remote-error="La contraseña no es válida" data-remote="../api/validaPassword.php" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-sm-8">
                                            <label class="control-label">Nueva contraseña</label>
                                            <input type="password" class="form-control" id="passInput" name="nuevaPass" maxlength="99" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-sm-8">
                                            <label class="control-label">Confirme contraseña</label>
                                            <input type="password" class="form-control" id="mailInputPassConfirm" name="confirmPass" data-match="#passInput" data-match-error="La contraseña no coincide" maxlength="99" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary register-btn m-b">Guardar cambios</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/jquery-3.1.1.min.js"></script>
        <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="../js/plugins/toastr/toastr.min.js"></script>
        <script src="../js/inspinia.js"></script>
        <script src="../js/plugins/validator/validator-0.9.0.js"></script>
        <script src="../js/js-form.js"></script>
        <script>
            $(document).ready(function () {
                setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        showMethod: 'slideDown',
                        timeOut: 10000
                    };<?php
            if (isset($_SESSION["toastr"])) {
                echo $_SESSION["toastr"];
                unset($_SESSION["toastr"]);
            }
            ?>
                }, 400);
            });
        </script>
    </body>
</html>