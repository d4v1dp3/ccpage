<?php
include_once '../classes/consultas.php';
session_start();
if (!($_SESSION['logged_in'])) {
    header('Location: ../login.php');
} elseif ($_SESSION['tipo'] !== '3') {
    header('Location: ../login.php');
} else {
    $consultas = new consultas();
    $data = $consultas->consultaAsistentes("0");
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
        <title>CORE 2019 | Asistentes</title>
    </head>
    <body>
        <div id="wrapper">
            <?php include_once '../templates/navigator-admin.php' ?>
            <div id="page-wrapper" class="gray-bg">
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2><i class="fa fa-users"></i> &nbsp;Asistentes</h2>
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
                                                    <th>Talleres</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (isset($data) && $data != NULL) {
                                                    foreach ($data as $col) {
                                                        ?>
                                                        <tr>
                                                            <td><?= $col['usuario'] ?></td>
                                                            <td><strong><?= $col['contacto'] ?></strong><br><small class="minimal"><i class="fa fa-envelope"></i>&emsp;<?= $col['correo'] ?><br><i class="fa fa-phone"></i>&emsp;<?= $col['telefono'] ?></small></td>
                                                            <td><?= $col['procedencia'] ?></td>
                                                            <td><?= $col['alta'] ?></td>
                                                            <td><span class="badge badge-primary"><?= $col['talleres'] ?> inscritos</span></td>
                                                            <td class="text-right">
                                                                <div class="btn-group">
                                                                    <button class="btn-white btn btn-xs open-Modal" data-toggle="modal" data-id="<?= base64_encode($col['id']) ?>|<?= $col['contacto'] ?>" data-target="#modalEditar"><i class="fa fa-pencil"></i> Editar</button>
                                                                    <button class="btn-white btn btn-xs open-Modal" data-toggle="modal" data-id="<?= base64_encode($col['id'])?>|<?= $col['contacto'] ?>" data-target="#modalEliminar"><i class="fa fa-trash"></i> Eliminar</button>
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

                <!-- ModalEliminar -->
                <div class="modal fade" id="modalEliminar" role="dialog">
                    <div class="modal-dialog modal-md">
                        <form method="post" data-toggle="validator" action="../classes/eliminarAsistente.php">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Eliminar asistente</h4>
                                </div>
                                <div class="modal-body">
                                    <p>¿Está seguro de eliminar a <strong><label id="nombre"></label></strong> de la lista de asistentes? Sus datos serán eliminados de los registros.</p>
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
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/plugins/toastr/toastr.min.js"></script>
        <script src="../js/inspinia.js"></script>
        <script src="../js/plugins/validator/validator-0.9.0.js"></script>
        <script src="../js/js-form.js"></script>
        <script src="../js/plugins/dataTables/datatables.min.js"></script>
        <script src="../js/plugins/dataTables/date-eu.js"></script>
        <script>
            $(document).ready(function () {
                
                $('#modalEliminar').on('show.bs.modal', function (e) {
                    $('#modalEliminar #nombre').text($(e.relatedTarget).data('id').split('|')[1]);
                    $('#modalEliminar #hidden').val($(e.relatedTarget).data('id'));
                });

                setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        showMethod: 'slideDown',
                        timeOut: 10000
                    };
                    <?php
                        if (isset($_SESSION["toastr"])) {
                            echo $_SESSION["toastr"];
                            unset($_SESSION["toastr"]);
                        }
                        ?>
                }, 400);

                $('.dataTables-view').DataTable({
                    columnDefs: [{targets: [5], orderable: false, searchable: false}],
                    pageLength: 25,
                    responsive: true,
                    dom: 'lTfgtp'
                });
            });
        </script>

    </body>
</html>