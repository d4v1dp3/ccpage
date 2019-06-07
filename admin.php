<!DOCTYPE html>
<?php
$lang = "es";
if ($_GET["lang"]) {
    if ($_GET["lang"] == "en") {
        $lang = "en";
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CIC | CORE 2019</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
        <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="gray-bg">
        <div class="admin-box text-center loginscreen animated fadeInDown">
            <div>
                <br>
                <h1>Administrador</h1>
                <br>
                <br>
                <br>
                <button type="button" class="btn btn-primary ver-btn m-b" data-toggle="modal" data-target="#ver-asistentes">Ver asistentes</button>
                <button type="button" class="btn btn-primary ver-btn m-b" data-toggle="modal" data-target="#ver-ponentes">Ver ponentes</button>
                <button type="button" class="btn btn-primary ver-btn m-b" data-toggle="modal" data-target="#ver-talleres">Ver talleres</button>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <br>
        <br>
        <!-- VER ASISTENTES -->
        <div class="modal fade" id="ver-asistentes" tabindex="-1" role="dialog" aria-labelledby="titulo-modal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form class="m-t" role="form" method="post" action="taller">
                <div class="modal-header">
                  <h1 class="modal-title m-l-xl" id="titulo-modal">Asistentes</h1>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-lg-6 col-lg-offset-1 features-text">
                      <small>Asistente</small>
                    </div>
                    <div class="col-lg-2 features-text">
                      <small>Editar</small>
                    </div>
                    <div class="col-lg-2 features-text">
                      <small>Eliminar</small>
                    </div>
                  </div>
                  <?php
                    $asistentes = array("Juan Pérez", "David Cruz", "Joel Romero", "Edward Ramírez", "Maggy Cruz", "Ana Paula Huerta", "Perla Covarrubias", "Alan Garduño", "Pamela Martínez");
                    for ($i=0; $i < count($asistentes); $i++) { 
                    echo "<div class="."'row'".">";
                    echo "<div class="."'col-lg-6 col-lg-offset-1 features-text'".">";
                    echo "<h4>".$asistentes[$i]."</h4></div>";
                    echo "<div class="."'col-lg-2 features-text'".">";
                    echo "<button type="."button".">";
                    echo "<i class="."'fa fa-pencil'"."></i></button></div>";
                    echo "<div class="."'col-lg-2 features-text'".">";
                    echo "<button type="."button".">";
                    echo "<i class="."'fa fa-close'"."></i></button></div>";
                    echo "</div>";
                  }
                  ?>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- VER PONENTES -->
        <div class="modal fade" id="ver-ponentes" tabindex="-1" role="dialog" aria-labelledby="titulo-modal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form class="m-t" role="form" method="post" action="taller">
                <div class="modal-header">
                  <h1 class="modal-title m-l-xl" id="titulo-modal">Ponentes</h1>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-lg-6 col-lg-offset-1 features-text">
                      <small>Ponente</small>
                    </div>
                    <div class="col-lg-2 features-text">
                      <small>Editar</small>
                    </div>
                    <div class="col-lg-2 features-text">
                      <small>Eliminar</small>
                    </div>
                  </div>
                  <?php
                    $ponentes = array("Iván Fernández", "Jacobo Cruz", "David Pérez", "Carlos Medina", "Amjad Maaz", "Karen López", "Hiram Cortes", "Oscar Bustamante", "Elizabeth López");
                    for ($i=0; $i < count($ponentes); $i++) { 
                    echo "<div class="."'row'".">";
                    echo "<div class="."'col-lg-6 col-lg-offset-1 features-text'".">";
                    echo "<h4>".$ponentes[$i]."</h4></div>";
                    echo "<div class="."'col-lg-2 features-text'".">";
                    echo "<button type="."button".">";
                    echo "<i class="."'fa fa-pencil'"."></i></button></div>";
                    echo "<div class="."'col-lg-2 features-text'".">";
                    echo "<button type="."button".">";
                    echo "<i class="."'fa fa-close'"."></i></button></div>";
                    echo "</div>";
                  }
                  ?>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- VER TALLERES -->
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/js-form.js"></script>
        <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script src="js/plugins/toastr/toastr.min.js"></script>
        <script>
            $('#inscribir-taller').on('show.bs.modal', function() {
              $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
              });
              console.log('Ya se abrió');
            });
        </script>
    </body>
</html>