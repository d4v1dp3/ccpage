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
                    <div class="ibox-content">
                        <h2 class="font-bold">Olvide mi contraseña</h2>
                        <p>
                            Ingresa el correo con el que te diste de alta para enviarte una nueva contraseña.
                        </p>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="m-t" method="post" data-toggle="validator" role="form" action="classes/resetPassword.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Dirección de correo" required="">
                                    </div>
                                    <button type="submit" class="btn btn-primary block full-width m-b">Restablecer contraseña</button>
                                    <a class="btn btn-default block full-width m-b" href="login.php">Ir al inicio</a>
                                </form>
                            </div>
                        </div>
                    </div>
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
