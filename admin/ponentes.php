<?php
include_once '../classes/consultas.php';
session_start();
if (!($_SESSION['logged_in'])) {
    header('Location: ../login.php');
} elseif ($_SESSION['tipo'] !== '3') {
    header('Location: ../login.php');
} else {
    $consultas = new consultas();
    $data = $consultas->consultaAsistentes("1");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="../css/plugins/toastr/toastr.min.css" rel="stylesheet">
        <link href="../css/plugins/dataTables/datatables.min.css" rel="stylesheet">
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <style>.minimal{color: #808080;}</style>
        <title>CORE 2019 | Ponentes</title>
    </head>
    <body>
        <div id="wrapper">
            <?php include_once '../templates/navigator-admin.php' ?>
            <div id="page-wrapper" class="gray-bg">
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2><i class="fa fa-bullhorn"></i> &nbsp;Ponentes</h2>
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
                                                    <th>Usuario</th>
                                                    <th>Contacto</th>
                                                    <th>Procedencia</th>
                                                    <th>Registro</th>
                                                    <th>Paper</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (isset($data) && $data != NULL) {
                                                    foreach ($data as $col) {
                                                        ?>
                                                        <tr>
                                                            <td><?= utf8_encode($col['usuario']) ?></td>
                                                            <td><strong><?= $col['contacto'] ?></strong><br><small class="minimal"><i class="fa fa-envelope"></i>&emsp;<?= $col['correo'] ?><br><i class="fa fa-phone"></i>&emsp;<?= $col['telefono'] ?></small></td>
                                                            <td><?= $col['procedencia'] ?></td>
                                                            <td><?= $col['alta'] ?></td>
                                                            <td><?= utf8_encode($col['paper']) ?></td>
                                                            <td class="text-right">
                                                                <div class="btn-group">
                                                                    <button class="btn-white btn btn-xs open-Modal" data-toggle="modal" data-id="undatobase64" data-target="#modalEditar"><i class="fa fa-pencil"></i> Editar</button>
                                                                    <button class="btn-white btn btn-xs open-Modal" data-toggle="modal" data-id="<undatobase64" data-target="#modalEstatus"><i class="fa fa-trash"></i> Eliminar</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                ?>
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
                        <form method="post" data-toggle="validator" action="../classes/registroTaller.php">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Registrar nuevo taller</h4>
                                    <small> * Todos los campos son obligatorios</small>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control capitalize-text" id="inputNombre" name="nombre" maxlength="99" placeholder="Nombre del taller" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control capitalize-text" name="descripcion" maxlength="1024" placeholder="Descripción" required="">
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control capitalize-text" name="ponente" placeholder="Nombre de ponente/expositor" required="">
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" id="inputCupo" class="touchspin" name="cupo" placeholder="Cupo máximo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <input type="text" id="inputFecha" class="form-control" name="fecha_evento" placeholder="Fecha y hora" required=""/>
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
                                    <h4 class="modal-title">Eliminar un taller</h4>
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
        <script src="../js/jquery-3.1.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="../js/plugins/toastr/toastr.min.js"></script>
        <script src="../js/inspinia.js"></script>
        <script src="../js/plugins/validator/validator-0.9.0.js"></script>
        <script src="../js/js-form.js"></script>
        <script src="../js/plugins/dataTables/datatables.min.js"></script>
        <script src="../js/plugins/dataTables/date-eu.js"></script>
        <script>
            $(document).ready(function () {
                $('.dataTables-view').DataTable({
                    columnDefs: [{targets: [5], orderable: false, searchable: false}],
                    pageLength: 25,
                    responsive: true,
                    dom: 'lTfgtp'
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