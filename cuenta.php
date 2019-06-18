
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" sizes="16x16 32x32" href="favicon.ico">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
        <link href="css/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
        <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
        <link href="css/styleButtonTable.css" rel="stylesheet">
        <title>Factiva | Talleres</title>
    </head>
    <body>
        <?php
            session_start();
            if(!($_SESSION['logged_in'])) {
                header('Location: login.php');
            }
        ?>
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element"> <span>
                                    <img alt="image" class="img-circle" src="img/landing/68_68/default-avatar.png" />
                                </span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">
                                        <?php echo "Hola, ".$_SESSION['usuario']['nombre']." ".$_SESSION['usuario']['apellido'];?>
                                    </strong>
                                        </span> </span> </a>
                            </div>
                            <div class="logo-element">
                                <span class="fa-stack color-logo-element">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <span class="fa-stack">TS</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="cuenta.php"><i class="fa fa-user"></i> <span class="nav-label">Mi cuenta</span>  </a>
                        </li>
                        <!--
                        <li>
                            <a href="<%=durl%>"><i class="fa fa-users"></i> <span class="nav-label">Asistentes</span>  </a>
                        </li>
                        <li>
                            <a href="<%=burl%>"><i class="fa fa-bullhorn"></i> <span class="nav-label">Ponentes</span>  </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-flask" ></i> <span class="nav-label">Talleres</span>  </a>
                        </li>-->
                        <li>
                            <a href="classes/logout.php"><i class="fa fa-sign-out"></i> <span class="nav-label">Cerrar sesión</span>  </a>
                        </li>
                    </ul>

                </div>
            </nav>
            <div id="page-wrapper" class="gray-bg">

                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2><i class="fa fa-flask"></i> &nbsp;Cuenta</h2>
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
                <div class="row wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <h1>Bienvenido al Core Congress</h1>
                                    <h2>¡Gracias por registrarte!</h2><br>
                                    <h3>Nombre</h3>
                                    <?php echo "<p>".$_SESSION['usuario']['nombre']." ".$_SESSION['usuario']['apellido']."<br><br><br></p>";?>
                                    <h3>Correo electrónico</h3>
                                    <?php echo "<p>".$_SESSION['usuario']['usuario']."<br><br><br></p>";?>
                                    <h3>Escuela de procedencia</h3>
                                    <?php echo "<p>".$_SESSION['usuario']['procedencia']."<br><br><br></p>";?>
                                    <h3>Teléfono</h3>
                                    <?php echo "<p>".$_SESSION['usuario']['telefono']."<br><br><br></p>";?>
                                    <!--<p>En breve tendremos información para la inscripción de talleres, revisa la pagina mas tarde :)</p>-->
                                </div>
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
        <script src="js/plugins/toastr/toastr.min.js"></script>
        <script src="js/js-form.js"></script>
        <script src="js/plugins/dataTables/datatables.min.js"></script>
        <script src="js/plugins/dataTables/date-eu.js"></script>
        <script src="js/plugins/fullcalendar/moment.min.js"></script>
        <script src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.dataTables-view').DataTable({
                    //columnDefs: [{targets: [4], orderable: false, searchable: false}, {type: "date-eu", targets: [2]}],
                    pageLength: 25,
                    responsive: true,
                    dom: '<"html5buttons"B>lTfgtp',
                    buttons: [
                        {
                            text: '<i class="fa fa-plus"></i> Registrar taller',
                            action: function (e, dt, node, config) {
                                $('#modalAdd').modal('show');
                            }
                        }]
                });

                /* $.base64.utf8decode = true;
                 $('#modalEstatus').on('show.bs.modal', function (e) {
                 var c = ($.base64.atob($(e.relatedTarget).data('id'))).split('|')[0];
                 var l = ($.base64.atob($(e.relatedTarget).data('id'))).split('|')[1].replace('&nbsp;', '');
                 $('#pLabel').css({'color': '#ed5565'});
                 if (l == 'Habilitar') {
                 $('#pLabel').css({'color': '#1ab394'});
                 }
                 $('#modalEstatus #pLabel').text(l);
                 $('#modalEstatus #rfc').text(c);
                 $('#modalEstatus #hidden').val(c);
                 }); */

            });
        </script>
        <script>
            $(document).ready(function () {
                $('input[name="datetimes"]').daterangepicker({
                    singleDatePicker: true,
                    timePicker: true,
                    timePicker24Hour: true,
                    timePickerIncrement: 30,
                    minDate: moment(),
                    maxDate: '12/31/2019',
                    locale: {
                        format: 'MM/DD hh:mm'
                    }
                });

                $(".touchspin").TouchSpin({
                    min: 1,
                    step: 1,
                    max: 1000,
                    initval: 25,
                    buttondown_class: 'btn btn-white',
                    buttonup_class: 'btn btn-white',
                    postfix_extraclass: "btn btn-default",
                    prefix: "Cupo: ",
                    verticalbuttons: true,
                    verticalupclass: 'glyphicon glyphicon-plus',
                    verticaldownclass: 'glyphicon glyphicon-minus'
                });
            });
        </script>

    </body>
</html>
