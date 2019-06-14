
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
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element"> <span>
                                    <img alt="image" class="img-circle" src="img/landing/68_68/avatar_carlos_c.jpg" />
                                </span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Nombre usuario</strong>
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
                            <a href="inicio.jsp"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span>  </a>
                        </li>
                        <li>
                            <a href="<%=durl%>"><i class="fa fa-users"></i> <span class="nav-label">Asistentes</span>  </a>
                        </li>
                        <li>
                            <a href="<%=burl%>"><i class="fa fa-bullhorn"></i> <span class="nav-label">Ponentes</span>  </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-flask" ></i> <span class="nav-label">Talleres</span>  </a>
                        </li>
                        <li>
                            <a href="<%=curl%>"><i class="fa fa-star"></i> <span class="nav-label">Mi cuenta</span>  </a>
                        </li>
                        <li>
                            <a href="classes/logout.php"><i class="fa fa-sign-out"></i> <span class="nav-label">Cerrar sesión</span>  </a>
                        </li>
                    </ul>

                </div>
            </nav>
            <div id="page-wrapper" class="gray-bg">

                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2><i class="fa fa-flask"></i> &nbsp;Talleres</h2>
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
                <div class="row wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover dataTables-view" >
                                            <thead>
                                                <tr>
                                                    <th>Nombre del taller</th>
                                                    <th>Descripción</th>
                                                    <th>Ponente</th>
                                                    <th>Estatus</th>
                                                    <th>Cupo</th>
                                                    <th>Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Taller de ejemplo 1</td>
                                                    <td>Taller de pruebsa y ensayos para las pantallas finales de uso de usuario y administradores.</td>
                                                    <td>Marianita Alanis Bebé</td>
                                                    <td><span class="label label-success">Activo</span></td>
                                                    <td>5 de 10</td>
                                                    <td class="text-right">
                                                        <div class="btn-group">
                                                            <button class="btn-white btn btn-xs open-Modal" data-toggle="modal" data-id="undatobase64" data-target="#modalEditar"><i class="fa fa-pencil"></i> Editar</button>
                                                            <button class="btn-white btn btn-xs open-Modal" data-toggle="modal" data-id="<undatobase64" data-target="#modalEstatus"><i class="fa fa-trash"></i> Eliminar</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Taller de corte y confección</td>
                                                    <td>Le serví croquetas a mi gato y ahora ya se le subieron las hormigas y no se las puede comer.</td>
                                                    <td>Julion Alvarez ft. Pitbull</td>
                                                    <td><span class="label label-warning">Sold out</span></td>
                                                    <td>25 de 7</td>
                                                    <td class="text-right">
                                                        <div class="btn-group">
                                                            <button class="btn-white btn btn-xs open-Modal" data-toggle="modal" data-id="undatobase64" data-target="#modalEditar"><i class="fa fa-pencil"></i> Editar</button>
                                                            <button class="btn-white btn btn-xs open-Modal" data-toggle="modal" data-id="<undatobase64" data-target="#modalEstatus"><i class="fa fa-trash"></i> Eliminar</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Vista de asistentes</td>
                                                    <td>Los asistentes deberan ver la misma tabla a excepción que en la columna <strong>Acción</strong> ellos visualizaran un botón cuya leyenda se lea <label class="label label-default">Inscribirse</label></td>
                                                    <td>La gente nunca lee los manuales</td>
                                                    <td><span class="label label-danger">Cold void</span></td>
                                                    <td>-1 de 40</td>
                                                    <td class="text-right">
                                                        <div class="btn-group">
                                                            <button class="btn-white btn btn-xs open-Modal" data-toggle="modal" data-id="undatobase64" data-target="#modalEditar"><i class="fa fa-plug"></i> Inscribirse</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ModalAgregar -->
                <div class="modal fade" id="modalAdd" role="dialog">
                    <div class="modal-dialog modal-md">
                        <form method="post" data-toggle="validator" action="classes/registroTaller.php">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Registrar nuevo taller</h4>
                                    <small> * Todos los campos son obligatorios</small>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control capitalize-text" id="inputNombre" name="nombre" maxlength="99" placeholder="Nombre del taller" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control capitalize-text" name="descripcion" maxlength="1024" placeholder="Descripción" required="">
                                    </div>
                                    <div class="form-group">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control capitalize-text" name="ponente" placeholder="Nombre de ponente/expositor" required="">
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" id="inputCupo" class="touchspin" name="cupo" placeholder="Cupo máximo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="datetimes" placeholder="Fecha y hora" required=""/>
                                                <!--<input type="text" id="inputFecha" class="form-control" name="fecha" placeholder="Fecha y hora" required="">-->
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" id="inputLugar" class="form-control capitalize-text" name="lugar" placeholder="Ubicación" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> &nbsp;Registrar</button>
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- fin modal -->

                <!-- ModalEstatus -->
                <div class="modal fade" id="modalEstatus" role="dialog">
                    <div class="modal-dialog modal-md">
                        <form method="post" data-toggle="validator" action="${pageContext.servletContext.contextPath}/editar/estatus">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Eliminar taller</h4>
                                </div>
                                <div class="modal-body">
                                    <p><strong>¿Está seguro de eliminar el taller <label id="nombreTaller"></label>?</strong> Todos los asistentes inscritos serán removidos del taller.</p>
                                    <input type="hidden" id="hidden" name="hidden" value="">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> &nbsp;Si, eliminar</button>
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- fin modal -->
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