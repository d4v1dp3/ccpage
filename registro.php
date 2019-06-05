<!DOCTYPE html>
<?php
$lang = "es";
if ($_GET["lang"]) {
    if ($_GET["lang"] == "en") {
        $lang = "en";
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CIC | CORE 2019</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
        <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="gray-bg">
        <div class="register-box text-center loginscreen animated fadeInDown">
            <div>
                <br>
                <h2>Registro de asistencia</h2>
                <br>
                <form class="m-t" data-toggle="validator" role="form" method="post" action="registro/proveedor">
                    <p><strong>Información de contacto</strong></p>
                    <div class="form-group">
                        <input type="email" class="form-control" id="mailInput" name="email" maxlength="99" data-remote-error="Este correo ya fue registrado" data-remote="api/emailProveedor.jsp" placeholder="Correo" style="text-transform: lowercase;" required="">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="mailInputConfirm" name="confirmEmail" data-match="#mailInput" data-match-error="El correo debe coincidir" maxlength="99" placeholder="Confirme correo" style="text-transform: lowercase;" required="">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control only-text capitalize-text" name="nombre" maxlength="64" placeholder="Nombre" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control only-text capitalize-text" name="apellido" maxlength="64" placeholder="Apellido" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control only-digit" name="telefono" maxlength="10" placeholder="Teléfono" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="procedencia" maxlength="256" placeholder="Escuela o lugar de procedencia" required="">
                    </div>
                    <div class="form-group">
                        <div class="checkbox i-checks"><label class="check-btn"> <input type="checkbox" name="ponente" id="ponente" value="1"><i></i> &nbsp;<strong>Registrarse como ponente</strong></label></div>
                    </div>
                    <div class="form-group" id="divPaper" style="display: none">
                        <input type="text" class="form-control" id="inputPaper" name="paper" maxlength="256" placeholder="Nombre de paper">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary register-btn m-b">Registrarse</button>
                    <p class="text-muted text-center"><small>¿Ya tienes una cuenta?</small></p>
                    <a class="btn btn-sm btn-white register-btn" href="#">Iniciar sesión</a>
                    <a class="btn btn-sm btn-white register-btn m-t-sm" href="index.php#pricing">Regresar</a>
                </form>
            </div>
        </div>
        <br>
        <br>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/js-form.js"></script>
        <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script src="js/plugins/validator/validator.js"></script>
        <script src="js/plugins/toastr/toastr.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
                function activePaper(){
                    if($(".check-btn").find(':checkbox').is(":checked")){
                        $("#divPaper").css("display", "block");
                        $("#inputPaper").prop("required", true);
                    } else {
                        $("#divPaper").css("display", "none");
                        $("#inputPaper").prop("required", false);
                    }
                }
                $(".check-btn").on("click", function () {
                    activePaper();
                });   
                
                $(".iCheck-helper").on("click",function() {
                    activePaper();
                });
            });
        </script>
    </body>
</html>