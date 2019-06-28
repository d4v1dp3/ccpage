<?php
session_start();
include_once '../classes/consultas.php';

if (!($_SESSION['logged_in'])) {
    header('Location: ../login.php');
} elseif ($_SESSION['tipo'] !== '1') {
    header('Location: ../login.php');
} else {
    $consultas = new consultas();
    $data = $consultas->consultaTalleresInscritos($_SESSION['id']);
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
        <title>CORE 2019 | Inicio</title>
    </head>
    <body>
        <div id="wrapper">
            <?php include_once '../templates/navigator-users.php' ?>
            <div id="page-wrapper" class="gray-bg">
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2><i class="fa fa-home"></i> &nbsp;Inicio</h2>
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
                                    <br>
                                    <?php
                                    if (isset($data)) {
                                        if (count($data) == 0) {
                                            ?>
                                            <span style="font-size: 16px; font-weight: 300;">Aún no te has inscrito en algún taller. Usa la opción <strong><i class="fa fa-flask"> Talleres</i></strong> para encontrar uno de tu interés.</span>
                                            <hr>
                                        <?php } else {
                                            ?>
                                            <span style="font-size: 16px; font-weight: 300;">Estás inscrito en los siguientes talles. </span><p><strong>** No olvides enviar tu ficha de depósito para asegurar tu lugar. Pronto tendremos la información de los pagos.</strong></p>
                                            <hr>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover dataTables-view" >
                                                    <thead>
                                                        <tr>
                                                            <th>Taller | Ponente</th>
                                                            <th>Detalles</th>
                                                            <th>Cupo</th>
                                                            <th>Estatus</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($data as $col) {
                                                            ?>
                                                            <tr>
                                                                <td><strong><?= $col['nombre_taller'] ?></strong><br><span class="minimal"><i class="fa fa-user"></i> <?= $col['nombre_ponente'] ?></span></td>
                                                                <td><span class="minimal"><i class="fa fa-calendar minimal-calendar"></i> <?= $col['dia'] ?>&emsp;<i class="fa fa-clock-o minimal-clock"></i> <?= $col['hora'] ?> hrs.&emsp;<i class="fa fa-map-marker minimal-map"></i> <?= $col['lugar'] ?></span><small><br><?= $col['descripcion'] ?></small></td>
                                                                <td><span class="badge <?= $col['badge_color'] ?>"><?= $col['cupo'] ?></span></td>
                                                                <td><span class="badge <?= $col['badge_estatus'] ?>"><i class="fa <?= $col['icon_estatus'] ?>"></i> <?= $col['estatus_inscripcion'] ?></span></td>
                                                                <td class="text-right">
                                                                    <div class="btn-group">
                                                                        <?php if ($col['estatus_inscripcion'] == "Pendiente") { ?>
                                                                            <button class="btn-white btn btn-xs open-Modal" data-toggle="modal" data-id="<?= base64_encode($col['id']) ?>|<?= $col['nombre_taller'] ?>" data-target="#modalAbandonar"><i class="fa fa-sign-out"></i> Abandonar</button>
                                                                        <?php } ?>
                                                                    <!--    <button class="btn-white btn btn-xs open-Modal" data-toggle="modal" data-id="<?= base64_encode($col['id']) ?>|<?= $col['nombre_taller'] ?>" data-target="#modalConfirmar"><i class="fa fa-check"></i> Confirmar</button> -->
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalAbandonar" role="dialog">
                    <div class="modal-dialog modal-md">
                        <form method="post" data-toggle="validator" action="../classes/abandonarTaller.php">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Abandonar el taller</h4>
                                </div>
                                <div class="modal-body">
                                    <p>¿Deseas cancelar la inscripción al taller <strong><label id="nombre"></label></strong>?</p>
                                    <input type="hidden" id="hidden" name="hidden" value="">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-sign-out"></i> &nbsp;Si, abandonarlo</button>
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/jquery-3.1.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="../js/inspinia.js"></script>
        <script src="../js/plugins/validator/validator-0.9.0.js"></script>
        <script src="../js/plugins/toastr/toastr.min.js"></script>
        <script src="../js/plugins/dataTables/datatables.min.js"></script>
        <script src="../js/plugins/dataTables/date-eu.js"></script>
        <script>
            $(document).ready(function () {
                $('.dataTables-view').DataTable({
                    columnDefs: [{targets: [4], orderable: false, searchable: false}],
                    pageLength: 25,
                    responsive: true,
                    dom: 'lTfgtp',
                });

                $('#modalAbandonar').on('show.bs.modal', function (e) {
                    $('#modalAbandonar #nombre').text($(e.relatedTarget).data('id').split('|')[1]);
                    $('#modalAbandonar #hidden').val($(e.relatedTarget).data('id'));
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
