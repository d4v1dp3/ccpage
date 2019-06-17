<?php
ob_start();
session_start();
//print_r($_SESSION);
$message = "";
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    header('Location: talleres.php');
} elseif (isset($_SESSION['logged_fail']) && $_SESSION['logged_fail']) {
    $message = "<p class='text-danger text-center'><strong>Usuario y/o contraseña incorrectos</strong></p>";
} else {
    $message = "";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CORE 2019 | Iniciar sesión</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="gray-bg">
        <div class="loginColumns animated fadeInDown">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive" src="img/landing/logo_core_back.png">
                </div>
                <div class="col-md-6">
                    <div class="ibox-content">
                        <br><br><br>
                        <form class="m-t" role="form" method="post" action="classes/iniciarSesion.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" maxlength="64" placeholder="Usuario" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Contraseña" required="">
                            </div>
                            <button type="submit" class="btn btn-primary block full-width m-b">Iniciar sesión</button>
                            <?php echo $message; ?>
                            <a href="ResetPassword.jsp">Olvidé mi contraseña</a>
                            <p class="text-muted text-center">
                            </p>
                            <a class="btn btn-sm btn-white btn-block" href="index.php">Ir a inicio</a>
                        </form>
                        <br><br><br>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6 text-right">
                    <small>© 2019</small>
                </div>
            </div>
        </div>
    </body>
</html>