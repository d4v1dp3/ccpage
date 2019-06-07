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
        <div class="login-box text-center loginscreen animated fadeInDown">
            <div>
                <br>
                <h2>Iniciar sesión</h2>
                <br>
                <form class="m-t" data-toggle="validator" role="form" method="post" action="login">
                    <div class="form-group">
                        <input type="email" class="form-control" id="mailInput" name="usuario" maxlength="99" placeholder="Usuario" required="">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" maxlength="16" placeholder="Contraseña" required="">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary login-btn m-b">Iniciar sesión</button>
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
    </body>
</html>