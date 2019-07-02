<?php
include_once '../classes/consultas.php';
session_start();
if (!($_SESSION['logged_in'])) {
    header('Location: ../login.php');
} elseif ($_SESSION['tipo'] !== '1') {
    header('Location: ../login.php');
} else {
    $consultas = new consultas();
    $data = $consultas->consultaTalleresDisponibles($_SESSION['id']);
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
        <link href="../css/plugins/toastr/toastr.min.css" rel="stylesheet">
        <link href="../css/plugins/dataTables/datatables.min.css" rel="stylesheet">
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <title>CORE 2019 | Talleres</title>
    </head>
    <body>
        <div id="wrapper">
            <?php include_once '../templates/navigator-users.php' ?>
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
                                    <h2>Puedes pre-registrarte en los siguientes talleres:</h2>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover dataTables-view" >
                                            <thead>
                                                <tr>
                                                    <th>Taller</th>
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
                                                        ?>
                                                        <tr>
                                                            <td><strong><?= $col['nombre_taller'] ?></strong></td>
                                                            <td><?= $col['nombre_ponente'] ?></td>
                                                            <td><span class="minimal"><i class="fa fa-calendar minimal-calendar"></i> <?= $col['dia'] ?>&emsp;<i class="fa fa-clock-o minimal-clock"></i> <?= $col['hora'] ?> hrs.&emsp;<i class="fa fa-map-marker minimal-map"></i> <?= $col['lugar'] ?></span><small><br><?= $col['descripcion'] ?></small></td>
                                                            <td><span class="badge <?= $col['badge_color'] ?>"><?= $col['cupo'] ?></span></td>
                                                            <td class="text-right">
                                                                <div class="btn-group">
                                                                    <button class="btn-white btn btn-xs open-Modal" data-toggle="modal" data-id="<?= base64_encode($col['id']) ?>|<?= $col['nombre_taller'] ?>" data-target="#modalInscribir"><i class="fa fa-plug"></i> Inscribirse</button>
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

                <!-- ModalInscribir -->
                <div class="modal fade" id="modalInscribir" role="dialog">
                    <div class="modal-dialog modal-md">
                        <form method="post" data-toggle="validator" action="../classes/inscribirTaller.php">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Inscribir al taller</h4>
                                </div>
                                <div class="modal-body">
                                    <p>¿Desea inscribirse en el taller <strong><label id="nombre"></label></strong>?</p>
                                    <input type="hidden" id="hidden" name="hidden" value="">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-plug"></i> &nbsp;Si, inscribirme</button>
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
                $('#modalInscribir').on('show.bs.modal', function (e) {
                    $('#modalInscribir #nombre').text($(e.relatedTarget).data('id').split('|')[1]);
                    $('#modalInscribir #hidden').val($(e.relatedTarget).data('id'));
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

                $('.dataTables-view').DataTable({
                    columnDefs: [{targets: [4], orderable: false, searchable: false}],
                    pageLength: 25,
                    responsive: true,
                    dom: 'lTfgtp',
                });

            });
        </script>
    </body>
</html>