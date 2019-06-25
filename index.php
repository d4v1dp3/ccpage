<!DOCTYPE html>
<?php
$lang = "es";
if(isset($_GET["lang"])){
    if($_GET["lang"] == "en"){
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
    <link href="css/animate.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="font-awesome/css/fontcustom.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top" class="landing-page no-skin-config">
<div class="navbar-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-toggle navbar-right" href="#"><img src="img/flags/24/Mexico.png" class="set_es" alt="ES">&nbsp;&nbsp;<img class="set_en" src="img/flags/24/United-States.png" alt="EN"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="navi18n" class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" data-i18n="nav.inicio" href="#page-top">Inicio</a></li>
                    <li><a class="page-scroll" data-i18n="nav.fechas" href="#date">Fechas</a></li>
                    <li><a class="page-scroll" data-i18n="nav.acerca" href="#about">Acerca de</a></li>
                    <li><a class="page-scroll" data-i18n="nav.talleres" href="#challenges">Talleres</a></li>
                    <li><a class="page-scroll" data-i18n="nav.ponencias" href="#conference">Ponencias</a></li>
                    <li><a class="page-scroll" data-i18n="nav.calls" href="#calls">Calls</a></li>
                    <li><a class="page-scroll" data-i18n="nav.precios" href="#pricing">Costos</a></li>
                    <li><a class="page-scroll" data-i18n="nav.ubicacion" href="#map">Ubicación</a></li>
                    <li><a class="page-scroll" data-i18n="nav.comite" href="#comite">Comité</a></li>
                    <li><a class="page-scroll" data-i18n="nav.contacto" href="#contact">Contacto</a></li>
                    <li><a class="page-scroll visible-md-*" href="#"><img src="img/flags/24/Mexico.png" class="set_es" alt="ES">&nbsp;&nbsp;<img class="set_en" src="img/flags/24/United-States.png" alt="EN"></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
        <li data-target="#inSlider" data-slide-to="2"></li>
        <li data-target="#inSlider" data-slide-to="3"></li>
        <li data-target="#inSlider" data-slide-to="4"></li>
        <li data-target="#inSlider" data-slide-to="5"></li>
        <li data-target="#inSlider" data-slide-to="6"></li>
        <li data-target="#inSlider" data-slide-to="7"></li>
    </ol>
    <div id="carousel" class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <div class="header-box">
                        <h1 data-i18n="carousel.titulo">Congreso Internacional</h1>
                        <h1><img class="minilogo minilogo-left" src="img/landing/logo_mini_ipn.png" alt="mini-ipn"> Core 2019 <img class="minilogo minilogo-right" src="img/landing/logo_mini_cic.png"
                                      alt="mini-cic"></h1>
                        <div class="separador"></div>
                        <h1 data-i18n="carousel.dates" class="color-orange">Agosto 6 - 9, 2019</h1>
                        <h1 data-i18n="carousel.place">Ciudad de México</h1>
                    </div>

                </div>
                <div class="carousel-image wow zoomIn">
                    <img src="img/landing/logo_core.png" alt="laptop"/>
                </div>
            </div>
            <div class="header-back core"></div>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <h1 data-i18n="carousel.asistep" >Asiste como ponente</h1>
                    <p data-i18n="carousel.recep" >Recepción de artículos. Convocatoria abierta</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#pricing" data-i18n="carousel.more" role="button">Más información</a>
                    </p>
                </div>
            </div>
            <div class="header-back ponente"></div>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <h1 data-i18n="carousel.taller_interes">¿Interesado en impartir un taller?</h1>
                    <p data-i18n="carousel.calls">Consulta las fechas para la recepción de propuestas de talleres (finalizado)</p>
                    <p>
                        <!--<a class="btn btn-lg btn-primary" href="#calls" role="button" data-i18n="carousel.callw">Convocatoria para workshops</a>-->
                    </p>
                </div>
            </div>
            <div class="header-back workshop"></div>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <h1 data-i18n="carousel.attend">Asiste a las conferencias</h1>
                    <p></p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button" data-i18n="carousel.coming">Proximamente</a>
                    </p>
                </div>
            </div>
            <div class="header-back conferencias"></div>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <h1 data-i18n="carousel.algoritmo">Competencia de algoritmia</h1>
                    <p></p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#challenges" data-i18n="carousel.enroll" role="button">Inscribete</a>
                    </p>
                </div>
            </div>
            <div class="header-back algoritmia"></div>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <h1 data-i18n="carousel.smart">Ciudades inteligentes</h1>
                </div>
            </div>
            <div class="header-back ciudadInteligente"></div>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <h1 data-i18n="carousel.big">Big Data</h1>
                </div>
            </div>
            <div class="header-back bigdata"></div>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <h1 data-i18n="carousel.robo">Robótica</h1>
                </div>
            </div>
            <div class="header-back robotica"></div>
        </div>
        <!--
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Intercambio de <br />información <br />sobre la ciberseguridad</h1>
                    <p>Mejorar la ciberseguridad mediante un mayor intercambio <br />de información sobre amenazas
                        de ciberseguridad y para otros fines</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">Saber más</a>
                        <a class="caption-link" href="#" role="button">Imparte Dra. Feinstein</a>
                    </p>
                </div>
            </div>
            <div class="header-back two"></div>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Competencia <br /> desarrollo de<br />videojuegos</h1>
                    <p>Elige el género de juego que más te guste,<br />
                        y elige en el desplegable el torneo en el que quieres participar.<br />
                        Iremos actualizando en los próximos días.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">Saber más</a>
                        <a class="btn btn-lg btn-primary" href="#pricing" role="button">Registrate</a>
                    </p>
                </div>
            </div>
            <div class="header-back three"></div>
        </div> -->
    </div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section id="date" class="timeline gray-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 data-i18n="date.titulo">Fechas</h1>
                <p data-i18n="date.fecha_titulo">Del 24 al 26 de Junio de 2019</p>
            </div>
        </div>
        <div class="row features-block">

            <div class="col-lg-12">
                <div id="vertical-timeline" class="vertical-container light-timeline center-orientation">
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-file"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2 data-i18n="date.tl_1">Inicio de recepción</h2>
                            <p data-i18n="date.fecha_1">1 de Mayo del 2019</p>
                            <h2 data-i18n="date.tl_2">Fin de recepción</h2>
                            <p class="cross-text" data-i18n="date.fecha_2">31 de Mayo del 2019</p>
                            <p data-i18n="date.fecha_2a">30 de Junio del 2019</p>
                            <h2 data-i18n="date.tl_3">Resultados a partir del</h2>
                            <p data-i18n="date.fecha_3">12 de Julio del 2019</p>
                            <span class="vertical-date"><span data-i18n="date.fecha_9">Abril 17 </span> | <strong
                                    data-i18n="date.evento_1">Recepción de artículos</strong></span>
                        </div>
                    </div>
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-code"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2 data-i18n="date.tl_1a">Inicio de recepción</h2>
                            <p class="cross-text" data-i18n="date.fecha_4">17 de Abril del 2019</p>
                            <h2 data-i18n="date.tl_2a">Fin de recepción</h2>
                            <p class="cross-text" data-i18n="date.fecha_5">5 de Junio del 2019</p>
                            <h2 data-i18n="date.tl_3">Resultados a partir del</h2>
                            <p data-i18n="date.fecha_6">20 de Junio del 2019</p>
                            <span class="vertical-date"><span data-i18n="date.fecha_10"> Abril 17 </span>| <strong
                                    data-i18n="date.evento_2">Recepción de propuestas de talleres (finalizada)</strong></span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-flag"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2 data-i18n="date.tl_4">Talleres</h2>
                            <p data-i18n="date.fecha_7">30 de Julio al 5 Agosto del 2019</p>
                            <h2 data-i18n="date.tl_5">Conferencias</h2>
                            <p data-i18n="date.fecha_8">6 al 9 de Agosto del 2019</p>
                            <span class="vertical-date"> <span data-i18n="date.fecha_11">Junio 30</span> | <strong
                                    data-i18n="date.evento_3">Congreso</strong></span>
                        </div>
                    </div>
                    <!-- backup
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-trophy"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Ciclo de conferencias</h2>
                            <p>Valerio Pascucci, Dr. Carlos Jaime Barrios, Dr. Sergio Nesmachnow</p>
                            <h2>Talleres</h2>
                            <p>Test bearings for remote condition monitoring system validation<br />Computational
                                methods for the design</p>
                            <p>Programación de videojuegos<br />Ciberseguridad</p>
                            <h2>Clausura</h2>
                            <p>Presenta Dr. Moisés Torres Martínez, Presidente del Comité Nacional del ISUM</p>
                            <a href="#" class="btn btn-xs btn-primary"> Más información</a>
                            <span class="vertical-date"> Junio 26 | <strong>Día 3</strong><br /><small>9:00 hrs. -
                                    18:00 hrs. </small></span>
                        </div>
                    </div>-->

                </div>
            </div>

        </div>
    </div>

</section>


<!--

<section id="date" class="timeline gray-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Fechas</h1>
                <p>Del 24 al 26 de Junio de 2019</p>
            </div>
        </div>
        <div class="row features-block">

            <div class="col-lg-12">
                <div id="vertical-timeline" class="vertical-container light-timeline center-orientation">
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-cut"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Inauguración</h2>
                            <p>Presenta Dr. Moisés Torres Martínez, Presidente del Comité Nacional del ISUM<br />
                                Dra. Salma Jalife Villalón, Subsecretario de Tecnologías de la Información,
                                SCT<br />
                                Dra. Abril Alcalá Padilla, Diputada de la Legislatura LXIV
                            </p>
                            <h2>Ciclo de conferencias</h2>
                            <p>Dr. Charlie Catlett, Dr. Mateo Valero</p>
                            <h2>Talleres</h2>
                            <p>Infrastructure Advances Session 2 b<br />Signals Automation Session 2 d</p>
                            <a href="#" class="btn btn-xs btn-primary"> Más información</a>
                            <span class="vertical-date"> Junio 24 | <strong>Día 1</strong><br /><small>10:30 hrs. -
                                    19:00 hrs.</small></span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-code"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Ciclo de conferencias</h2>
                            <p>Valerio Pascucci, Dr. Carlos Jaime Barrios, Dr. Sergio Nesmachnow</p>
                            <h2>Talleres</h2>
                            <p>Test bearings for remote condition monitoring system validation<br />Computational
                                methods for the design</p>
                            <p>Programación de videojuegos<br />Hacking ético</p>
                            <a href="#" class="btn btn-xs btn-primary"> Más información</a>
                            <span class="vertical-date"> Junio 25 | <strong>Día 2</strong><br /><small>9:00 hrs. -
                                    19:00 hrs. </small></span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-trophy"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Ciclo de conferencias</h2>
                            <p>Valerio Pascucci, Dr. Carlos Jaime Barrios, Dr. Sergio Nesmachnow</p>
                            <h2>Talleres</h2>
                            <p>Test bearings for remote condition monitoring system validation<br />Computational
                                methods for the design</p>
                            <p>Programación de videojuegos<br />Ciberseguridad</p>
                            <h2>Clausura</h2>
                            <p>Presenta Dr. Moisés Torres Martínez, Presidente del Comité Nacional del ISUM</p>
                            <a href="#" class="btn btn-xs btn-primary"> Más información</a>
                            <span class="vertical-date"> Junio 26 | <strong>Día 3</strong><br /><small>9:00 hrs. -
                                    18:00 hrs. </small></span>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

</section>

-->

<section id="about">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 data-i18n="about.titulo">Acerca de CORE</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <p data-i18n="about.texto_1">El CORE inicia su larga tradición hace 18 años con la idea de ser un
                    congreso de corte científico
                    dirigido por estudiantes del Centro de Investigación en Computación. Cada edición presentando
                    una personalidad propia al cambiar los miembros del comité organizador quienes imprimen su
                    propio sello a este ahora reconocido evento.</p><br/>
                <p data-i18n="about.texto_2">A lo largo de la historia de este congreso se han presentado decenas
                    conferencistas de talla
                    internacional quienes conviven con los noveles y experimentados investigadores que presentan sus
                    trabajos a la comunidad científica a través de este lugar de encuentro.</p></br>
                <p data-i18n="about.texto_3">Como sabemos el mundo académico requiere de espacios para presentar los
                    avances en las distintas
                    áreas del conocimiento; ya sean investigaciones que mejoran métodos previos, que presenten
                    nuevos problemas donde aplicar conocimientos existentes, nuevas formas de resolver problemas o
                    bien áreas nuevas a explorar.</p><br/>
                <p data-i18n="about.texto_4">Es precisamente esta necesidad la que ha cubierto exitosamente, año con
                    año, este reconocido
                    congreso y la cual en la presente edición se busca llenar a cabalidad a través de un congreso de
                    alto nivel que vincule conferencistas magistrales de talla internacional, investigadores
                    jóvenes, industria, y asistentes de nivel universitario y posgrado. Así como la publicación de
                    los artículos que pasen el escrutinio científico y editorial en la revista indexada Research in
                    Computing Science ISSN 1870-4069.</p>
                <br/>
            </div>
        </div>
    </div>
</section>

<section id="general" class="features">
    <div class="container">
        <div class="row features-block">
            <div class="col-sm-3 features-text wow text-center">
                <div>
                    <i class="fa fa-bullhorn big-icon"></i>
                    <h2 data-i18n="general.titulo_1">49 Ponencias</h2>
                </div>
                <div class="m-t-lg">
                    <i class="fa fa-clock-o big-icon"></i>
                    <h2 data-i18n="general.titulo_2">150 Horas de contenido</h2>
                </div>
                <div class="m-t-lg">
                    <i class="fa fa-id-badge big-icon"></i>
                    <h2 data-i18n="general.titulo_3">+500 asistentes</h2>
                </div>
            </div>
            <div class="col-sm-6 text-right m-t-n-lg wow zoomIn">
                <img src="img/landing/idea.png" class="img-responsive" alt="dashboard">
            </div>
            <div class="col-sm-3 features-text text-right wow text-center">
                <div>
                    <i class="fa fa-flag-checkered big-icon"></i>
                    <h2 data-i18n="general.titulo_4">7 Competencias y retos</h2>
                </div>
                <div class="m-t-lg">
                    <i class="fa fa-puzzle-piece big-icon"></i>
                    <h2 data-i18n="general.titulo_5">12 Talleres</h2>
                </div>
                <div class="m-t-lg">
                    <i class="fa fa-graduation-cap big-icon"></i>
                    <h2 data-i18n="general.titulo_6">80 Trabajos de investigación</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="challenges" class="features gray-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 data-i18n="challenges.title">Talleres 2019</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 features-text">
                <small data-i18n="challenges.subtitle">Taller</small>
                <h2 data-i18n="challenges.subtitle_4">Detectando personas en imágenes usando deep learning</h2>
                <i class="fa fa-drivers-license-o  big-icon pull-right"></i>
                <p data-i18n="challenges.parrafo_4">En este taller de 4 horas, tu vas re-entrenar el modelo neuronal YOLO (You only look once) para localizar personas, vehículos u otro objeto en imágenes usando Colab. Te explicaremos la arquitectura neuronal YOLO la cual es una de las mejores para detectar objetos, conocerás las métricas para evaluar el desempeño del detector, usarás una herramienta para etiquetar tus propias imágenes y entendederas a groso modo como debe hacer el entrenamiento de los modelos neuronales profundos. </p>
                <div class="row">
                    <div class="col-lg-7">
                        <small>Dr. Erik Zamora</small>
                    </div>
                    <div class="col-lg-3 col-lg-offset-2">
                        <a data-toggle="modal" data-target="#deep-learning" href="#deep-learning"><small>Ver más</small></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 features-text">
                <small data-i18n="challenges.subtitle">Taller</small>
                <h2 data-i18n="challenges.subtitle_3">Introducción al desarrollo de aplicaciones móviles con realidad aumentada</h2>
                <i class="fa fa-mobile-phone  big-icon pull-right"></i>
                <p data-i18n="challenges.parrafo_3">Proporcionar los conocimientos básicos en el manejo de Unity y Vuforia para el desarrollo de aplicaciones móviles en Android implementando realidad aumentada.</p>
                <div class="row">
                <div class="col-lg-7">
                    <small>Dr. Amadeo José Argüelles Cruz</small>
                </div>
                <div class="col-lg-3 col-lg-offset-2">
                    <a data-toggle="modal" data-target="#augmented-reality" href="#augmented-reality"><small>Ver más</small></a>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 features-text">
                <small data-i18n="challenges.subtitle">Taller</small>
                <h2 data-i18n="challenges.subtitle_2">Introducción al desarrollo de exploits</h2>
                <i class="fa fa-bug big-icon pull-right"></i>
                <p data-i18n="challenges.parrafo_2">El objetivo principal es que el alumno adquiera los conocimientos y las habilidades necesarias para ser capaz de identificar y explotar vulnerabilidades básicas en la programación de software. Provenientes de malas prácticas de programación, provocando que un software sea vulnerable a ataques de tipo Buffer overflow, Heap overflow y Format string.</p>
                <div class="row">
                <div class="col-lg-7">
                    <small>M. en C. Florencio Javier González Rodríguez</small>
                </div>
                <div class="col-lg-3 col-lg-offset-2">
                    <a data-toggle="modal" data-target="#exploits" href="#exploits"><small>Ver más</small></a>
                </div>
            </div>
            </div>
            <div class="col-lg-5 features-text">
                <small data-i18n="challenges.subtitle">Taller</small>
                <h2 data-i18n="challenges.subtitle_6">Big Data en la Ciencia de datos</h2>
                <i class="fa fa-signal big-icon pull-right"></i>
                <p data-i18n="challenges.parrafo_6">Los participantes adquirirán las bases para continuar su estudio de la Ciencia de Datos y tengan oportunidad de desarrollar proyectos en esta área que actualmente tiene ofertas de ingresos para quienes conozcan cómo resolver problemas en este campo.</p>
                <div class="row">
                <div class="col-lg-7">
                    <small>Dr. Jesús Manuel Olivares Ceja</small>
                </div>
                <div class="col-lg-3 col-lg-offset-2">
                    <a data-toggle="modal" data-target="#big-data" href="#big-data"><small>Ver más</small></a>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 features-text">
                <small data-i18n="challenges.subtitle">Taller</small>
                <h2 data-i18n="challenges.subtitle_1"> Diseño de la arquitectura del procesador lagarto RISC-V</h2>
                <i class="fa fa-microchip big-icon pull-right"></i>
                <p data-i18n="challenges.parrafo_1">El curso esta orientado para el desarrollo y compresión de la
                    arquitectura Lagarto I desarrollada por
                    el CIC IPN. El participante aplicara sus conocimientos en arquitectura de computadoras, Verilog
                    entre otros.</p>
                <div class="row">
                    <div class="col-lg-7">
                        <small>Dr. Marco Antonio Ramírez Salinas</small>
                    </div>
                    <div class="col-lg-3 col-lg-offset-2">
                        <a data-toggle="modal" data-target="#lagarto" href="#lagarto"><small>Ver más</small></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 features-text">
                <small data-i18n="challenges.subtitle">Taller</small>
                <h2 data-i18n="challenges.subtitle_5">Entrega de aplicaciónes con Docker</h2>
                <i class="fa fa-docker big-icon pull-right"></i>
                <p data-i18n="challenges.parrafo_5">En este curso introductorio a Docker aprenderás como crear, desplegar y administrar imágenes y contenedores de Docker. Al término del curso sabrás cómo utilizar Docker para construir aplicaciones de forma rápida y ejecutarlas donde sea.</p>
                <div class="row">
                <div class="col-lg-7">
                    <small>Ing. Alejandro López Hernández</small>
                </div>
                <div class="col-lg-3 col-lg-offset-2">
                    <a data-toggle="modal" data-target="#docker" href="#docker"><small>Ver más</small></a>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 features-text">
                <small data-i18n="challenges.subtitle">Taller</small>
                <h2 data-i18n="challenges.subtitle_7">Primeros pasos en R.O.S</h2>
                <i class="fa fa-cogs big-icon pull-right"></i>
                <p data-i18n="challenges.parrafo_7">Que los participantes se familiaricen con R.O.S. y al final del taller puedan crear sus propios nodos. El beneficio para los participantes es aprender a utilizar una herramienta que facilita el desarrollo de prototipos en el área de la robótica la cual es utilizada por los centros de investigación mas importantes en esta área y que se esta perfilando para convertirse en un estándar de la industria.</p>
                <div class="row">
                    <div class="col-lg-7">
                        <small>M. en C. José Ángel Martínez Navarro</small>
                    </div>
                    <div class="col-lg-3 col-lg-offset-2">
                        <a data-toggle="modal" data-target="#ros-first-steps" href="#ros-first-steps"><small>Ver más</small></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 features-text">
                <small data-i18n="challenges.subtitle">Taller</small>
                <h2 data-i18n="challenges.subtitle_8">Exploración para el descubrimiento de conocimiento en datos abiertos</h2>
                <i class="fa fa-database big-icon pull-right"></i>
                <p data-i18n="challenges.parrafo_8">Proporcionar a los participantes una metodología dentro de la Ciencia de Datos para el análisis de información y realizar el descubrimiento de conocimiento por medio de herramientas ETL y de visualización, haciendo uso de bases de datos abiertas, las cuales pueden ser del dominio público o privado.</p>
                <div class="row">
                <div class="col-lg-7">
                    <small>Dr. Gilberto L. Martínez Luna</small>
                </div>
                <div class="col-lg-3 col-lg-offset-2">
                    <a data-toggle="modal" data-target="#open-data" href="#open-data"><small>Ver más</small></a>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<section id="conference" class="container services">
    <div class="row">
        <div class="col-sm-3">
            <h2 data-i18n="conference.titulo_1">Magistral - Modelado y Control basado en Quaterniones (2017)</h2>
            <p data-i18n="conference.descripcion_1">Dr Pedro Castillo de la Universidad de Tecnología de Compiègne,
                Francia presento sus mas recientes
                investigaciones en control sobre cuadricópteros.
            </p>
            <!--<p><a class="navy-link" href="#" role="button">Detalles &raquo;</a></p>-->
        </div>
        <div class="col-sm-3">
            <h2 data-i18n="conference.titulo_2">Primera competencia de programación (2014)</h2>
            <p data-i18n="conference.descripcion_2">Se escoge un conjunto de problemas para desafiar y desarrollar las
                habilidades de los concursantes.</p>
            <!--<p><a class="navy-link" href="#" role="button">Detalles &raquo;</a></p>-->
        </div>
        <div class="col-sm-3">
            <h2 data-i18n="conference.titulo_3">Microarquitectura del procesador Lagarto I (2018)</h2>
            <p data-i18n="conference.descripcion_3">Taller impartido por el laboratorio de MICROSE con el propósito de
                dar una introducción al procesador
                Lagarto, desarrollado por el CIC IPN.</p>
            <!--<p><a class="navy-link" href="#" role="button">Detalles &raquo;</a></p>-->
        </div>
        <div class="col-sm-3">
            <h2 data-i18n="conference.titulo_4">Ciberseguridad: Captura la bandera (2016)</h2>
            <p data-i18n="conference.descripcion_4">Torneo que pone a prueba las habilidades de hacking mediante
                diferentes pruebas o retos.</p>
            <!--<p><a class="navy-link" href="#" role="button">Detalles &raquo;</a></p>-->
        </div>
    </div>
</section>

<section id="presentations" class="team">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 data-i18n="presentations.titulo">Ponencias anteriores</h1>
                <p></p>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-sm-4">
                <div class="team-member wow zoomIn">
                    <img src="img/landing/avatar_andrei_g.jpg" class="img-responsive img-circle" alt="">
                    <h4><span class="navy">Dr. Andrei Gheata</span></h4>
                    <p>Challenges in high-energy physics computing (2018)</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member wow zoomIn">
                    <img src="img/landing/avatar_karinne_r.jpg" class="img-responsive img-circle" alt="">
                    <h4><span class="navy">Dra. Karinne Ramírez Amaro</span></h4>
                    <p>A Novel Method for Inferring Human Activities from Observation via Semantic Reasoning (2016)</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member wow zoomIn">
                    <img src="img/landing/avatar_carlos_c.jpg" class="img-responsive img-circle" alt="">
                    <h4><span class="navy">Dr. Carlos A. Coello Coello</span></h4>
                    <p>Multi-Objective Particle Swarm optimizers: Past, Present and Future (2016)</p>
                </div>
            </div>
        </div>
        <br/>
        <div class="row m-b-lg">
            <div class="col-sm-6">
                <div class="team-member wow zoomIn">
                    <img src="img/landing/avatar_vladimir_k.jpg" class="img-responsive img-circle" alt="">
                    <h4><span class="navy">Dr. Vladimir Kreinovich</span></h4>
                    <p>Bounded rationality in decision making under uncertainty: <br/>towards optimal granularity (2017)
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="team-member wow zoomIn">
                    <img src="img/landing/avatar_victor_l.jpg" class="img-responsive img-circle" alt="">
                    <h4><span class="navy">Dr. Víctor Manuel Landassuri Moreno</span></h4>
                    <p data-i18n="presentations.investigacion">Modularidad en cerebros biológicos artificiales
                        (2015)</p>
                </div>
            </div>
        </div>
        <!--
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <a href="#" class="btn btn-primary">Ver programación</a>
            </div>
        </div> -->
    </div>
</section>

<section class="navy-section testimonials" style="margin-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center wow zoomIn">
                <i class="fa fa-flask big-icon"></i>
                <h1 id="frase">
                    <strong data-i18n="frase.frase">La ciencia de hoy es la tecnología del mañana.</strong>
                </h1>
                <h3><i>- Edward Teller</i></h3>
            </div>
        </div>
    </div>
</section>
<section id="calls" style="margin-top: 0">
    <div class="container">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1 data-i18n="calls.titulo">Convocatorias</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="col-lg-8 col-lg-offset-2 features-text">
                <h2 data-i18n="calls.articulos_titulo">Convocatoria de artículos</h2>
                <p data-i18n="calls.articulos_texto_1"> Todos los artículos enviados serán revisados por expertos en
                    cada área evaluando originalidad,
                    significancia, calidad y claridad. Los participantes son invitados a enviar sus artículos según el
                    calendario que se presenta a continuación.</p>
                <h3 data-i18n="calls.articulos_fechas">Fechas Importantes</h3>
                <ul>
                    <li data-i18n="calls.articulos_fechas_1">Inicio de recepción: 01 de Mayo del 2019</li>
                    <li class="cross-text" data-i18n="calls.articulos_fechas_2">Fin de recepción: 31 de Mayo del 2019</li>
                    <li data-i18n="calls.articulos_fechas_2a">Fin de recepción: 30 de Junio del 2019</li>
                    <li data-i18n="calls.articulos_fechas_3">Resultados: 12 de Julio del 2019</li>
                    <li data-i18n="calls.articulos_fechas_4">Conferencias: 6 - 9 Agosto del 2019</li>
                </ul>
                <h3 data-i18n="calls.articulos_titulo_2">Presentación de artículos</h3>
                <p data-i18n="calls.articulos_texto_2"> Los artículos aceptados serán publicados en la revista indexada
                    <b><i>Research in Computer Science (ISSN 1870-4069)</i></b></p>
                <p data-i18n="calls.articulos_texto_3"> Los artículos deben ser preparados según las pautas de <b><i>Springer
                    LNCS</i></b></p>
                <h3 data-i18n="calls.articulos_titulo_3">Temas de interés</h3>
                <ul>
                    <li data-i18n="calls.articulos_li_1">Ingeniería de software y calidad</li>
                    <li data-i18n="calls.articulos_li_2">Seguridad Informática</li>
                    <li data-i18n="calls.articulos_li_3">Sistemas de información geográfica</li>
                    <li data-i18n="calls.articulos_li_4">Sistemas embebidos y cómputo de alto desempeño</li>
                    <li data-i18n="calls.articulos_li_5">Simulación por computadora</li>
                    <li data-i18n="calls.articulos_li_6">Procesamiento de lenguaje natural</li>
                    <li data-i18n="calls.articulos_li_7">Automatización y sistemas inteligentes</li>
                    <li data-i18n="calls.articulos_li_8">Cómputo cuántico</li>
                    <li data-i18n="calls.articulos_li_9">Inteligencia artificial</li>
                    <li data-i18n="calls.articulos_li_10">Lógica difusa y redes neuronales</li>
                    <li data-i18n="calls.articulos_li_11">Procesamiento de imágenes y visión artificial</li>
                    <li data-i18n="calls.articulos_li_12">Interacción humano-computadora</li>
                    <li data-i18n="calls.articulos_li_13">Big Data</li>
                    <li data-i18n="calls.articulos_li_14">Cómputo en la nube</li>
                    <li data-i18n="calls.articulos_li_15">Ciudades inteligentes</li>
                    <li data-i18n="calls.articulos_li_16">Internet de las cosas</li>
                </ul>
                <p data-i18n="calls.articulos_comentario"><i>* Los temas no están limitados</i></p>
            </div>
            <div class="col-lg-8 col-lg-offset-2 m-t-lg m-b-lg">
                <h4><a href="files/LNCS.zip"><i class="fa fa-download fa-lg"></i> <span
                        data-i18n="calls.articulos_descarga">Descargar formato para Paper</span></a></h4>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <a href="https://easychair.org/cfp/core2019" class="btn btn-primary" data-i18n="calls.articulos_boton">Inscribir
                    paper</a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="col-lg-8 col-lg-offset-2 features-text">
                <h2 data-i18n="calls.workshop_titulo">Convocatoria de talleres (finalizado)</h2>
                <p class="cross-text" data-i18n="calls.workshop_texto_1"> El taller deberá incluir el formato de inscripción, duración del taller, costos, material (si es que llega a requerirlo) y presentación. El taller sera considerando dependiendo de las aulas disponibles y el tema a desarrollar por el comité de este congreso. Los interesados pueden enviar sus propuestas según el calendario que se presenta a continuación.
                <h3 data-i18n="calls.workshop_fechas">Fechas Importantes</h3>
                <ul>
                    <li class="cross-text" data-i18n="calls.workshop_li_1">Inicio de recepción: 17 de Abril del 2019</li>
                    <li class="cross-text"  data-i18n="calls.workshop_li_2">Fin de recepción : 5 de Junio del 2019</li>
                    <li data-i18n="calls.workshop_li_3">Resultados : 20 de Junio del 2019</li>
                    <li data-i18n="calls.workshop_li_4">Conferencias : 30 de Julio al 5 Agosto del 2019</li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2 m-t-lg m-b-lg">
                <h4><i class="fa fa-download fa-lg"></i>
                    <span data-i18n="calls.workshop_descarga">Descargar ficha para el Taller</span></h4>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <!--<a href="#" class="btn btn-primary">Inscribir workshop</a>-->
                <p><span data-i18n="calls.workshop_comentario_1">Enviar al correo </span><strong>corecongresscs@gmail.com</strong>
                    <span data-i18n="calls.workshop_comentario_2">adjuntando la ficha.</span></p>
            </div>


        </div>
    </div>
</section>

<!--
<section id="pricing" class="pricing">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 data-i18n="pricing.title">Costos</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center wow zoomIn">
                <i class="fa fa-bitcoin big-icon"></i>
                <h1>
                    <strong data-i18n="pricing.estatus">Proximamente</strong>
                </h1>
            </div>
        </div>
    </div>
</section>
-->
<section id="pricing" class="pricing">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 data-i18n="pricing.title">Costos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 wow zoomIn">
                <ul class="pricing-plan list-unstyled">
                    <li data-i18n="pricing.publico" class="pricing-title">Público en General</li>
                    <li class="pricing-desc"></li>
                    <li class="pricing-price"><text data-i18n="pricing.ponente">Ponente / </text> <span>$2,800.00 MXN</span></li>
                    <li class="pricing-price"> <text data-i18n="pricing.ptaller"> Taller (cada uno) / </text><span>$250.00 MXN</span></li>
                    <li class="pricing-price"><text data-i18n="pricing.rec">Reconocimiento de asistencia a conferencias externos / </text> <span>$200.00 MXN</span></li>
                    <li class="plan-action">
                        <a data-i18n="pricing.sign" class="btn btn-primary btn-xs" href="registro.php">Registrarse</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 wow zoomIn">
                <ul class="pricing-plan list-unstyled selected">
                    <li data-i18n="pricing.comun" class="pricing-title">Comunidad Politécnica</li>
                    <li class="pricing-desc"></li>
                    <li  class="pricing-price"><text data-i18n="pricing.eponente"> Ponente / </text><span>$2,500.00 MXN</span></li>
                    <li  class="pricing-price"><text data-i18n="pricing.ework">Taller (cada uno) / </text><span>$250.00 MXN</span></li>
                    <li class="pricing-price"><text data-i18n="pricing.erec">Reconocimiento de asistencia a conferencias comunidad Politécnica / </text><span>$150.00 MXN</span></li>
                    <li>
                        <a data-i18n="pricing.sign" class="btn btn-primary btn-xs" href="registro.php">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row m-t-lg">
            <div class="col-lg-12 text-center m-t-lg">
                <p>
                    <strong><span data-i18n="pricing.publico" class="navy">Público general</span></strong> <span data-i18n="pricing.mesg1">Si requiere factura debe incluir datos fiscales: RFC, razón social y domicilio fiscal.</span><br />
                    <strong><span data-i18n="pricing.comun" class="navy">Comunidad politécnica</span></strong><span data-i18n="pricing.mesg2"> Presentar copia de credencial IPN vigente.</span><br />
                    <strong><span data-i18n="pricing.mesg3" class="navy">Los pagos</span></strong><span data-i18n="pricing.mesg4"> deberán realizarse directamente en el banco con el número de cuenta y referencias correspondientes.</span> <strong data-i18n="pricing.mesg5">No se aceptarán pagos en efectivo los días del evento.</strong>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="map" class="features cic-map">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 data-i18n="nav.ubicacion">Ubicación</h1>
            </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.894158508486!2d-99.14978378558799!3d19.503188943474598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f84a9cf3183d%3A0x78efe76dd0d5bbe1!2sIPN+-+Computing+Research+Center!5e0!3m2!1sen!2smx!4v1554066507456!5m2!1sen!2smx"
            width="100%" height="400" frameborder="0" style="border:0"></iframe>
    </div>
</section>

<section id="comite" class="comite" style="margin-top: 0">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 data-i18n="contacto.comiteo">Comité Local</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/chimal.png">
                    <div class="media-body">
                        <div class="commens-name">Dr. Juan Carlos Chimal</div>
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_lopez_lozada_elizabeth.png">
                    <div class="media-body">
                        <div class="commens-name">Elizabeth López Lozada</div>
                        <small class="text-muted">I have a T.V. as monitor</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_fernandez_cid_ivan.png">
                    <div class="media-body">
                        <div class="commens-name">Ivan Fernández Cid</div>
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_cruz_silva_jacobo_emanuel.png">
                    <div class="media-body">
                        <div class="commens-name">Jacobo Emanuel Cruz Silva</div>
                        <small class="text-muted">I have a Nao</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_perez_martinez_david.png">
                    <div class="media-body">
                        <div class="commens-name">David Pérez Martínez</div>
                        <small class="text-muted">I have a iMac</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_segura_cristino_david_jesus.png">
                    <div class="media-body">
                        <div class="commens-name">David Jesús Segura Cristino</div>
                        <small class="text-muted">I have a Powerwheels</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_maldonado_romo_alberto.png">
                    <div class="media-body">
                        <div class="commens-name">Alberto Maldonado Romo</div>
                        <small class="text-muted">Quantum Assistant</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_karen_pamela_lopez_medina.png">
                    <div class="media-body">
                        <div class="commens-name">Karen Pamela López Medina</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_medina_cortes_carlos_alonso.png">
                    <div class="media-body">
                        <div class="commens-name">Carlos Alonso Medina Cortés</div>
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
   <!-- <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_mendoza_lopez_alberto.png">
                    <div class="media-body">
                        <div class="commens-name">Alberto López Mendoza</div>
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div> -->
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_abdiel_reyes_vera.png">
                    <div class="media-body">
                        <div class="commens-name">Abdiel Reyes Vera</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <h3 style="color:darkgray;">Staff</h3>
            </div>

            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/staff_bustamante_campos_oscar_alfredo.png">
                    <div class="media-body">
                        <div class="commens-name">Oscar Alfredo Bustamante Campos</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_cortes_diaz_hiram_david.png">
                    <div class="media-body">
                        <div class="commens-name">Hiram David Cortes Díaz</div>
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/staff_caballero_ramirez_michelle.png">
                    <div class="media-body">
                        <div class="commens-name">Michelle Caballero Ramírez</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/staff_diana_yosenia_campos_tenorio.png">
                    <div class="media-body">
                        <div class="commens-name">Diana Yosenia Campos Tenorio</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/staff_pinal_ramirez_octavio_elias.png">
                    <div class="media-body">
                        <div class="commens-name">Octavio Elías Piñal Ramírez</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_maaz_amjad.png">
                    <div class="media-body">
                        <div class="commens-name">Amjad Maaz</div>
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section id="contact" class="contact" style="margin-top: 0">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1 data-i18n="contacto.titulo">Contacto</h1>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="mailto:core@cic.ipn.mx" class="btn btn-primary">
                    <i class="fa fa-envelope"></i><span data-i18n="contacto.boton"> core@cic.ipn.mx</span>
                </a>
                <p class="m-t-sm" data-i18n="contacto.redes">
                    Siguenos en
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="https://twitter.com/core_congress" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="https://www.facebook.com/CORECIC" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/corecongress19/" target="_blank"><i
                            class="fa fa-instagram"></i></a>
                    </li>
                    <li><a href="https://www.youtube.com/channel/UCDxkP-E13ugi-O_fSNBWqiQ" target="_blank"><i
                            class="fa fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <a href="http://www.ipn.mx/" target="_blank"><img src="img/landing/ipn.png" class="pull-left"></a>
                <a href="http://www.cic.ipn.mx/" target="_blank"><img src="img/landing/CIC.png"
                                                                      class="pull-left"></a>
                <p><strong>Centro de Investigación en Computación - IPN</strong><br/>Av. Juan de Dios Bátiz, Esq.
                    Miguel Othón de Mendizábal |
                    Col. Nueva Industrial Vallejo, C.P. 07738 |
                    Alcaldía Gustavo A. Madero |
                    Ciudad de México</p>
            </div>

        </div>
    </div>
</section>


<!-- DETECTANDO PERSONAS -->
<div class="modal fade" id="deep-learning" tabindex="-1" role="dialog" aria-labelledby="titulo-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title m-l-xl" id="titulo-modal" data-i18n="challenges.subtitle_4">Detectando personas en imágenes usando deep learning</h1>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-10">
              <h3>Dr. Erik Zamora</h3><br>
            </div>
            <div class="col-lg-12">
              <p data-i18n="challenges.ponente_4">Es docente, investigador, científico y un entusiasta por propagar el conocimiento útil. Graduado por el CINVESTAV-IPN como doctor (2015) y maestro en ciencias (2007). Tiene  11 años de experiencia en la docencia a nivel superior, 4 años en la investigación: ha publicado 22 artículos científicos en conferencias y revistas internacionales; ha dirigido a más 20 estudiantes de licenciatura, 6 de maestría y 7 de doctorado. Sus líneas de investigación son sobre redes neuronales artificiales y navegación autónoma de robot móviles.</p><br>
            </div>
            <div class="col-lg-12 col-lg-offset-7">
              <p>Contacto: ezamora1981@gmail.com</p><br>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="words.requirements">Requisitos: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.requerimientos_4">Saber programar, en particular en python, y haber cursado matemáticas básicas de la ingeniería (primeros 2 semestres).</p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="challenges.duration">Duración del taller: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.duracion_4">1 día, 4 horas</p>
                </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>


<!-- REALIDAD AUMENTADA -->
<div class="modal fade" id="augmented-reality" tabindex="-1" role="dialog" aria-labelledby="titulo-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title m-l-xl" id="titulo-modal" data-i18n="challenges.subtitle_3">Introducción al desarrollo de aplicaciones móviles con realidad aumentada</h1>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-10">
              <h3>Dr. Amadeo José Argüelles Cruz</h3><br>
            </div>
            <div class="col-lg-12">
              <p data-i18n="challenges.ponente_3">Recibió el título de Ingeniero en Comunicaciones y Electrónica de la Escuela Superior de Ingeniería Mecánica y Eléctrica (ESIME) del Instituto Politécnico Nacional (IPN), en 1992, el grado de Maestro en Ciencias en Ingeniería de Cómputo y Doctor en Ciencias de la Computación en el Centro de Investigación en Computación (CIC), en 1997 y 2007, respectivamente. Actualmente, se desempeña como Profesor Investigador, Coordinador de Programa y Jefe del Departamento de Investigación en Ciencias de la Computación en el Centro de Investigación en Computación (CIC-IPN), desde marzo del 2010.</p><br>
            </div>
            <div class="col-lg-12 col-lg-offset-7">
              <p>Contacto: jamadeo@cic.ipn.mx</p><br>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="words.requirements">Requisitos: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.requerimientos_3">Programación básica, de preferencia C#, Programación orientada a objetos.</p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="challenges.duration">Duración del taller: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.duracion_3">3 días, 3 horas cada uno</p>
                </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>


<!-- EXPLOITS -->
<div class="modal fade" id="exploits" tabindex="-1" role="dialog" aria-labelledby="titulo-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title m-l-xl" id="titulo-modal" data-i18n="challenges.subtitle_2">Introducción al desarrollo de exploits</h1>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-10">
              <h3>M. en C. Florencio Javier González Rodríguez</h3><br>
            </div>
            <div class="col-lg-12">
              <p data-i18n="challenges.ponente_2"> Estudiante de doctorado en Ciberseguridad en el CIC del IPN. Cuenta con una Maestría en Ciencias de la Computación con especialidad en Ciberseguridad y ha realizado una estancia de investigación de seguridad en redes en la universidad de Osaka en Japón. Durante varios años ha sido consultor en seguridad informática para empresas privadas, así como para organizaciones gubernamentales, del lado ofensivo y defensivo. Formación en donde ha adquirió certificaciones de empresas como IBM y Microsoft. También ha impartido diversas conferencias, cursos y talleres relacionados con la seguridad Informática.</p><br>
            </div>
            <div class="col-lg-12 col-lg-offset-6">
              <p>Contacto: fjgonzalezr@newbiegeek.com</p><br>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="words.requirements">Requisitos: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.requerimientos_2">Conocimientos básicos de programación en lenguaje C.</p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="challenges.duration">Duración del taller: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.duracion_2">1 día, 6 horas</p>
                </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>


<!-- BIG DATA -->
<div class="modal fade" id="big-data" tabindex="-1" role="dialog" aria-labelledby="titulo-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title m-l-xl" id="titulo-modal" data-i18n="challenges.subtitle_6">Big Data en la Ciencia de datos</h1>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-10">
              <h3>Dr. Jesús Manuel Olivares Ceja</h3><br>
            </div>
            <div class="col-lg-12">
              <p data-i18n="challenges.ponente_6">El Dr. Jesús Manuel Olivares Ceja obtuvo su doctorado en Ciencias de la Computación  en el CIC–IPN en 2002. En 1996 concluyó la Maestría en Ciencias de la Computación en el CINVESTAV, México. En 1991 obtuvo el título de Licenciado en Ciencias de la Computación en la UPIICSA–IPN. Ha publicado en revistas y memorias de congresos nacionales e internacionales en sus líneas de investigación; presentando algunos de estos trabajos en foros nacionales e internacionales. Además de su actividad en investigación y docencia, se desempeñó como consultor independiente entre 1985 y 2005.</p><br>
            </div>
            <div class="col-lg-12 col-lg-offset-7">
              <p>Contacto: jesusoc@hotmail.com</p><br>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="words.requirements">Requisitos: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.requerimientos_6">Conocimientos básicos de programación, Linux y base de datos Interés por conocer el área de Ciencia de Datos</p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="challenges.duration">Duración del taller: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.duracion_6">5 días, 3 horas cada uno</p>
                </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>


<!-- LAGARTO -->
<div class="modal fade" id="lagarto" tabindex="-1" role="dialog" aria-labelledby="titulo-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title m-l-xl" id="titulo-modal" data-i18n="challenges.subtitle_1">Diseño de la arquitectura del procesador lagarto RISC-V</h1>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-10">
              <h3>Dr. Marco Antonio Ramírez Salinas</h3><br>
            </div>
            <div class="col-lg-12">
              <p data-i18n="challenges.ponente_1">Marco Antonio Ramirez Salinas, Doctor en ciencias de la computacion (Tecnologia Arquitectura de las computadoras). Profesor a tiempo completo en el centro de Investigación en computación y colabora en el laboratorio de Microtecnologia y sistemas embebidos. Interesado en el desarrollo de sistemas embebidos, diseño de arquitectura de computadoras y computo paralelo para HPC.</p><br>
            </div>
            <div class="col-lg-12 col-lg-offset-7">
              <p>Contacto: hdzces@gmail.com</p><br>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="words.requirements">Requisitos: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.requerimientos_1">Conocimiento de circuitos digitales.</p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="challenges.duration">Duración del taller: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.duracion_1">5 días, 4 horas cada uno</p>
                </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>


<!-- DOCKER -->
<div class="modal fade" id="docker" tabindex="-1" role="dialog" aria-labelledby="titulo-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title m-l-xl" id="titulo-modal" data-i18n="challenges.subtitle_5">Entrega de aplicaciones con Docker</h1>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-10">
              <h3>Ing. Alejandro López Hernández</h3><br>
            </div>
            <div class="col-lg-12">
              <p data-i18n="challenges.ponente_5">Maestria en ciberseguridad en la Universidad Autonoma de Barcelona, Licenciatura en Ciencias de la computacion en el Insituto Politecnico Nacional.</p><br>
            </div>
            <div class="col-lg-12 col-lg-offset-7">
              <p>Contacto: alejandro@ulfix.com</p><br>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="words.requirements">Requisitos: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.requerimientos_5">Alguna experiencia en la entrega de software. Familiaridad con el uso de la línea de comandos en Linux.</p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="challenges.duration">Duración del taller: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.duracion_5">2 días, 2.5 horas cada uno</p>
                </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>


<!-- PRIMEROS PASOS EN R.O.S -->
<div class="modal fade" id="ros-first-steps" tabindex="-1" role="dialog" aria-labelledby="titulo-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title m-l-xl" id="titulo-modal" data-i18n="challenges.subtitle_7">Primeros pasos en R.O.S</h1>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-10">
              <h3>M. en C. José Ángel Martínez Navarro</h3><br>
            </div>
            <div class="col-lg-12">
              <p data-i18n="challenges.ponente_7">Maestría en ciencias en el CIC con la tesis “Desarrollo de un robot de dos ruedas dinámicamente estable”. Graduado en la Ingenieria en comuniacaciones y electronica en el Instituto Politecnico Nacional en Mexico.</p><br>
            </div>
            <div class="col-lg-12 col-lg-offset-7">
              <p>Contacto: josekun13@gmail.com</p><br>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="words.requirements">Requisitos: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.requerimientos_7">Una computadora con S.O. Ubuntu por estudiante, la cual tiene que tener instalado ROS Melodic Morenia, el ide geany y Jupyter notebook.</p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="challenges.duration">Duración del taller: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.duracion_7">2 días, 4 horas cada uno</p>
                </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>


<!-- DATOS ABIERTOS -->
<div class="modal fade" id="open-data" tabindex="-1" role="dialog" aria-labelledby="titulo-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title m-l-xl" id="titulo-modal" data-i18n="challenges.subtitle_8">Exploración para el descubrimiento de conocimiento en datos abiertos</h1>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-10">
              <h3>Dr. Gilberto L. Martínez Luna</h3><br>
            </div>
            <div class="col-lg-12">
              <p data-i18n="challenges.ponente_8"> Estudió en la Escuela Superior de Física y Matemáticas, el grado de Maestría lo obtuvo en la Sección de Computación (hoy Departamento) del CINVESTAV-IPN y el grado de Doctor en Ciencias de la Computación lo obtuvo en el Centro de Investigación en Computación del I.P.N. (CIC-IPN) con el trabajo titulado “Latices y otras estructuras para acelerar las búsquedas en Minería de Datos” Desde 1996 trabaja en el CIC-IPN, y actualmente en el, es el jefe del Laboratorio de Bases de Datos y Tecnología de Software.</p><br>
            </div>
            <div class="col-lg-12 col-lg-offset-6">
              <p>Contacto: yyadira.hhernandez@gmail.com</p><br>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="words.requirements">Requisitos: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.requerimientos_8">Equipo de cómputo con al menos 8GB de RAM, espacio en disco de al menos medio terabyte y monitores de 32 pulgadas (deseable 2 monitores por persona). Internet con ancho de banda o una velocidad aceptable para descarga de archivos mayores a 1GB. Dispositivos de almacenamiento para el respaldo de datos. Editores de texto: Notepad++ o Sublime Text. XAMMP, MySQLFront, WEKA, Tableau, Knime, Hoja de cálculo, Apache Tomcat.</p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1">
                    <h4 data-i18n="challenges.duration">Duración del taller: </h4>
                </div>
                <div class="col-lg-8">
                    <p data-i18n="challenges.duracion_8">5 días, 4 horas cada uno</p>
                </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>


<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.js"></script>
<script src="js/inspinia.js"></script>
<script src="js/plugins/i18next/i18next.min.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/plugins/wow/wow.min.js"></script>
<script>
    $(function() {

    });

    $(document).ready(function () {
        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });
        $('a.page-scroll').bind('click', function (event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });

        $.i18n.init({
            resGetPath: 'locales/__lng__.json',
            load: 'unspecific',
            fallbackLng: false,
            lng: 'es',
        }, function (t) {
            $('#navi18n').i18n();
            $('#carousel').i18n();
            $('#date').i18n();
            $('#conference').i18n();
            $('#general').i18n();
            $('#presentations').i18n();
            $('#calls').i18n();
            $('#frase').i18n();
            $('#pricing').i18n();
            $('#comite').i18n();
            $('#challenges').i18n();
            $('#about').i18n();
            $('#map').i18n();
        });

        $('.set_en').on('click', function () {
            i18n.setLng('en', function () {
                $('#navi18n').i18n();
                $('#carousel').i18n();
                $('#date').i18n();
                $('#conference').i18n();
                $('#general').i18n();
                $('#presentations').i18n();
                $('#calls').i18n();
                $('#frase').i18n();
                $('#pricing').i18n();
                $('#comite').i18n();
                $('#challenges').i18n();
                $('#about').i18n();
                $('#map').i18n();
                $('#contact').i18n();
                $('.set_en').addClass('active');
                $('.set_es').removeClass('active');
            });
        });
        $('.set_es').on('click', function () {
            $(location).attr('href', "index.php");
        });

        <?php
            if($lang == "en"){?>
                $('.set_en').click();

                <?php } else {?>

                <?php }

        ?>

    });

    var cbpAnimatedHeader = (function () {
        var docElem = document.documentElement,
            header = document.querySelector('.navbar-default'),
            didScroll = false,
            changeHeaderOn = 200;

        function init() {
            window.addEventListener('scroll', function (event) {
                if (!didScroll) {
                    didScroll = true;
                    setTimeout(scrollPage, 250);
                }
            }, false);
        }

        function scrollPage() {
            var sy = scrollY();
            if (sy >= changeHeaderOn) {
                $(header).addClass('navbar-scroll')
            } else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }

        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }

        init();
    })();
    new WOW().init();
</script>
</body>
</html>
