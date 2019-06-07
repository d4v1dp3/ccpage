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
        <div class="taller-box text-center loginscreen animated fadeInDown">
            <div>
                <br>
                <h2>Inscribir Taller</h2>
                <br>
                <button type="button" class="btn btn-primary inscribir-taller-btn m-b" data-toggle="modal" data-target="#inscribirTaller">Inscribir un taller</button>
                <br>
                <br>
                <br>
                <br>
                <div id="sinTaller">
                  <h3>Aún no te has inscrito a ningún taller</h3>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="modal fade" id="inscribirTaller" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form class="m-t" role="form" method="post" action="taller">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <?php
                    $talleres = array("Microarquitectura del procesador lagarto", "Introducción al desarrollo de explots", "Introducción al desarrollo de apps móviles con realidad aumentada", "Detectando personas en imágenes usando deep learning", "Entrega de aplicaciones con Docker", "Big Data en la ciencia de datos");
                    for ($i=0;$i < count($talleres); $i++) {
                      echo "<div class="."form-group".">";
                      echo "<div class="."'checkbox i-checks'".">"."<label class="."check-btn".">"."<input type="."checkbox"." name="."taller"." id=".$i." value="."1"."><i></i>";
                      echo "&nbsp;&nbsp;&nbsp;".$talleres[$i]."</label></div>";
                      echo "</div>";
                    }
                  ?>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Inscribirme</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/js-form.js"></script>
        <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script src="js/plugins/toastr/toastr.min.js"></script>
        <script>
            $('#inscribirTaller').on('show.bs.modal', function() {
              $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
              });
              console.log('Ya se abrió');
            });
        </script>
    </body>
</html>