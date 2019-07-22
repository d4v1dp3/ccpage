<?php
session_start();
if (!($_SESSION['logged_in'])) {
    header('Location: ../login.php');
} elseif ($_SESSION['tipo'] !== '1') {
    header('Location: ../login.php');
} else {
    ;
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
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <title>CORE 2019 | Ayuda</title>
    </head>
    <body>
        <div id="wrapper">
            <?php include_once '../templates/navigator-users.php' ?>
            <div id="page-wrapper" class="gray-bg">
                <?php include_once '../templates/navbar.php' ?>
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2><i class="fa fa-question-circle-o"></i> &nbsp;Ayuda</h2>
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
                <div class="row wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <span style="font-size: 16px; font-weight: 300;">Ponemos nuestros datos de contacto para proporcionarte más información.
                                        <br/>
                                        <i class="fa fa-envelope"></i> corecongresscs@gmail.com <br/>
                                        <i class="fa fa-user-o"></i>Ing. David Pérez Martínez<br/>
                                        Asunto: PAGINA CORE
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/inspinia.js"></script>
        <script src="../js/plugins/toastr/toastr.min.js"></script>
    </body>
</html>
