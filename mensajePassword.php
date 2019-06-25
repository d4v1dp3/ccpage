<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CORE 2019 | Recupera contraseña</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="gray-bg">
        <div class="passwordBox animated fadeInDown">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h2 class="font-bold">Se ha restablecido la contraseña</h2>
                        <br>
                        <span style="font-size: 15px; font-weight: 200;">
                            Se esta verificando la dirección de correo <?= base64_decode($_GET['r'])?>, si es válido pronto recibirás un mensaje con tu nueva contraseña.
                        </span>
                        <div class="row m-t-lg">
                            <div class="col-lg-12">
                                    <a class="btn btn-primary block full-width m-b" href="login.php">Ir al inicio</a>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="js/inspinia.js"></script>
        <script src="js/plugins/validator/validator-0.9.0.js"></script>
    </body>
</html>
