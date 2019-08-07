<?php
include_once '../classes/consultas.php';
session_start();
if (!($_SESSION['logged_in'])) {
    header('Location: ../login.php');
} elseif ($_SESSION['tipo'] !== '3') {
    header('Location: ../login.php');
} else {
    $consultas = new consultas();
    $data = $consultas->consultaConferencias();
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
        <link href="../css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
        <link href="../css/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
        <link href="../css/plugins/dataTables/datatables.min.css" rel="stylesheet">
        <link href="../css/styleButtonTable.css" rel="stylesheet">
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <title>CORE 2019 | Conferencias</title>
    </head>
    <body>
        <div id="wrapper">
            <?php include_once '../templates/navigator-admin.php' ?>
            <div id="page-wrapper" class="gray-bg">
                <?php include_once '../templates/navbar.php' ?>
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2><i class="fa fa-slideshare"></i> &nbsp;Conferencias</h2>
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
                <div class="row wrapper wrapper-content animated fadeInRight">
                    <div class="">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover dataTables-view" >
                                            <thead>
                                                <tr>
                                                    <th>Conferencia</th>
                                                    <th>Ponente</th>
                                                    <th>Detalles</th>
                                                    <th>Cupo</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (isset($data) && $data != NULL) {
                                                    foreach ($data as $col) {
                                                        if ($col['dia_inicio'] === $col['dia_termino']) {
                                                            $fecha = "{$col['dia_inicio']}, 2019";
                                                        } else {
                                                            $fecha = "{$col['dia_inicio']} al {$col['dia_termino']}, 2019";
                                                        }
                                                        ?>
                                                        <tr>
                                                            <td><strong><?= $col['nombre_conferencia'] ?></strong></td>
                                                            <td><?= $col['nombre_ponente'] ?></td>
                                                            <td><span class="minimal"><i class="fa fa-calendar minimal-calendar"></i> <?= $fecha ?> &emsp;<i class="fa fa-clock-o minimal-clock"></i> <?= $col['hora_inicio'] ?> hrs. - <?= $col['hora_termino'] ?> hrs.&emsp;<i class="fa fa-map-marker minimal-map"></i> <?= $col['lugar'] ?></span><small><br><?= $col['descripcion'] ?></small></td>
                                                            <td><span class="badge <?= $col['badge_color'] ?>"><?= $col['cupo'] ?></span></td>
                                                            <td class="text-right">
                                                                <div class="btn-group">
                                                                    <button class="btn-white btn btn-xs click-btn" data-id="<?= base64_encode($col['id']) ?>" data-nombre="<?= $col['nombre_conferencia'] ?>"><i class="fa fa-users"></i> Asistentes</button>
                                                                    <button class="btn-white btn btn-xs open-Modal" data-toggle="modal" data-id="<?= base64_encode($col['id']) ?>|<?= $col['nombre_conferencia'] ?>|<?= ($col['descripcion']) ?>|<?= $col['nombre_ponente'] ?>|<?= $col['lugar'] ?>|<?= $col['fecha'] ?>|<?= $col['fecha_termino'] ?>|<?= $col['cupo_maximo'] ?>" data-target="#modalEditar"><i class="fa fa-pencil"></i> Editar</button>
                                                                    <button class="btn-white btn btn-xs open-Modal" data-toggle="modal" data-id="<?= base64_encode($col['id']) ?>|<?= $col['nombre_conferencia'] ?>" data-target="#modalEliminar"><i class="fa fa-trash"></i> Eliminar</button>
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
                        <form method="post" data-toggle="validator" action="../classes/registroConferencia.php">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Registrar nueva conferencia</h4>
                                    <small> * Todos los campos son obligatorios</small>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control capitalize-text" id="inputNombre" name="nombre" maxlength="99" placeholder="Nombre de conferencia" required="">
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
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <input type="text" id="inputFecha" class="form-control fecha-evento" name="fecha_evento" placeholder="Fecha y hora" required=""/>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
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

                <!-- ModalEditar -->
                <div class="modal fade" id="modalEditar" role="dialog">
                    <div class="modal-dialog modal-md">
                        <form method="post" data-toggle="validator" action="../classes/editarConferencia.php">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Editar información sobre confencia</h4>
                                    <small> * Todos los campos son obligatorios</small>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="hidden" name="hidden" value="">
                                    <div class="form-group">
                                        <input type="text" class="form-control capitalize-text" id="nombreE" name="nombre" value="" maxlength="99" placeholder="Nombre de conferencia" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control capitalize-text" id="descripcionE" name="descripcion" value="" maxlength="1024" placeholder="Descripción" required="">
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control capitalize-text" id="ponenteE" name="ponente" value="" placeholder="Nombre de ponente/expositor" required="">
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" id="cupoE" class="touchspin" name="cupo" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <input type="text" id="fechaE" class="form-control fecha-evento" name="fecha_evento" value="" placeholder="Fecha y hora" required=""/>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" id="lugarE" class="form-control capitalize-text" name="lugar" value="" placeholder="Ubicación" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> &nbsp;Guardar cambios</button>
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- fin modal -->

                <!-- ModalEliminar -->
                <div class="modal fade" id="modalEliminar" role="dialog">
                    <div class="modal-dialog modal-md">
                        <form method="post" data-toggle="validator" action="../classes/eliminarConferencia.php">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Eliminar registro de conferencia</h4>
                                </div>
                                <div class="modal-body">
                                    <p>¿Está seguro de eliminar la confencia <strong><label id="nombre"></label></strong>? Todos los asistentes inscritos serán removidos de la conferencia.</p>
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
        <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/plugins/toastr/toastr.min.js"></script>
        <script src="../js/inspinia.js"></script>
        <script src="../js/plugins/validator/validator-0.9.0.js"></script>
        <script src="../js/js-form.js"></script>
        <script src="../js/plugins/dataTables/datatables.min.js"></script>
        <script src="../js/plugins/dataTables/date-eu.js"></script>
        <script src="../js/plugins/fullcalendar/moment.min.js"></script>
        <script src="../js/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="../js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.dataTables-view').DataTable({
                    columnDefs: [{targets: [4], orderable: false, searchable: false}],
                    pageLength: 25,
                    responsive: true,
                    dom: '<"html5buttons"B>lTfgtp',
                    buttons: [
                        {
                            text: '<i class="fa fa-plus"></i> &nbsp;Registrar confencia',
                            action: function (e, dt, node, config) {
                                $('#modalAdd').modal('show');
                            }
                        }]
                });
                
                $(".click-btn").on("click", function () {
                    $(location).attr('href','asistenciaConferencia.php?id=' + $(this).data('id') + "&nombre=" + $(this).data('nombre'));
                });
                
                $('#modalEliminar').on('show.bs.modal', function (e) {
                    $('#modalEliminar #nombre').text($(e.relatedTarget).data('id').split('|')[1]);
                    $('#modalEliminar #hidden').val($(e.relatedTarget).data('id'));
                });

                $('#modalEditar').on('show.bs.modal', function (e) {
                    $('#modalEditar #nombreE').val($(e.relatedTarget).data('id').split('|')[1]);
                    $('#modalEditar #descripcionE').val($(e.relatedTarget).data('id').split('|')[2]);
                    $('#modalEditar #ponenteE').val($(e.relatedTarget).data('id').split('|')[3]);
                    $('#modalEditar #lugarE').val($(e.relatedTarget).data('id').split('|')[4]);
                    $('#modalEditar #fechaE').val($(e.relatedTarget).data('id').split('|')[5] + ' - ' + $(e.relatedTarget).data('id').split('|')[6]);
                    $('#modalEditar #cupoE').val($(e.relatedTarget).data('id').split('|')[7]);
                    $('#modalEditar #cupoE').trigger("touchspin.updatesettings", {initval: $(e.relatedTarget).data('id').split('|')[8]});
                    $('#modalEditar #hidden').val($(e.relatedTarget).data('id'));
                });

                $('.fecha-evento').daterangepicker({
                    timePicker: true,
                    timePicker24Hour: true,
                    timePickerIncrement: 30,
                    minDate: moment(),
                    maxDate: '31/12/2019',
                    locale: {
                        format: 'DD/MM/YYYY HH:mm'
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