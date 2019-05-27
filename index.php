<!DOCTYPE html>
<?php
$lang = "es";
if( $_GET["lang"]){
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
                    <li><a class="page-scroll" data-i18n="nav.ponencias" href="#conference">Ponencias</a></li>
                    <li><a class="page-scroll" data-i18n="nav.calls" href="#calls">Calls</a></li>
                    <li><a class="page-scroll" data-i18n="nav.precios" href="#pricing">Costos</a></li>
                    <li><a class="page-scroll" data-i18n="nav.talleres" href="#challenges">Talleres</a></li>
                    <li><a class="page-scroll" data-i18n="nav.ubicacion" href="#map">Ubicación</a></li>
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
                        <h1><img class="minilogo minilogo-left" src="img/landing/logo_mini_ipn.png" alt="mini-ipn"> Core
                            2019 <img class="minilogo minilogo-right" src="img/landing/logo_mini_cic.png"
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
                        <a class="btn btn-lg btn-primary" href="#pricing" role="button">Más información</a>
                    </p>
                </div>
            </div>
            <div class="header-back ponente"></div>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <h1 data-i18n="carousel.taller_interes">¿Interesado en impartir un taller?</h1>
                    <p data-i18n="carousel.calls">Consulta las fechas para la recepción de propuestas de talleres</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#calls" role="button" data-i18n="carousel.callw">Convocatoria para workshops</a>
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
                            <p data-i18n="date.fecha_2">31 de Mayo del 2019</p>
                            <h2 data-i18n="date.tl_3">Resultados</h2>
                            <p data-i18n="date.fecha_3">2 de Julio del 2019</p>
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
                            <p data-i18n="date.fecha_4">17 de Abril del 2019</p>
                            <h2 data-i18n="date.tl_2a">Fin de recepción</h2>
                            <p data-i18n="date.fecha_5">5 de Junio del 2019</p>
                            <h2 data-i18n="date.tl_3">Resultados</h2>
                            <p data-i18n="date.fecha_6">20 de Junio del 2019</p>
                            <span class="vertical-date"><span data-i18n="date.fecha_10"> Abril 17 </span>| <strong
                                    data-i18n="date.evento_2">Recepción de propuestas de talleres</strong></span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-flag"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2 data-i18n="date.tl_4">Talleres</h2>
                            <p data-i18n="date.fecha_7">30 de Junio al 5 Agosto del 2019</p>
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
                    <li data-i18n="calls.articulos_fechas_2">Fin de recepción : 31 de Mayo del 2019</li>
                    <li data-i18n="calls.articulos_fechas_3">Resultados : 02 de Julio del 2019</li>
                    <li data-i18n="calls.articulos_fechas_4">Conferencias : 6 - 9 Agosto del 2019</li>
                </ul>
                <h3 data-i18n="calls.articulos_titulo_2">Presentación de artículos</h3>
                <p data-i18n="calls.articulos_texto_2"> Los artículos aceptados serán publicados en la revista indexada
                    <b><i>Research in Computer Science
                        (ISSN 1870-4069)</i></b></p>
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
                <h2 data-i18n="calls.workshop_titulo">Convocatoria de talleres</h2>
                <p data-i18n="calls.workshop_texto_1"> El taller deberá incluir el formato de inscripción, duración del taller, costos, material (si es que llega a requerirlo) y presentación. El taller sera considerando dependiendo de las aulas disponibles y el tema a desarrollar por el comité de este congreso. Los interesados pueden enviar sus propuestas según el calendario que se presenta a continuación.
                <h3 data-i18n="calls.workshop_fechas">Fechas Importantes</h3>
                <ul>
                    <li data-i18n="calls.workshop_li_1">Inicio de recepción: 17 de Abril del 2019</li>
                    <li data-i18n="calls.workshop_li_2">Fin de recepción : 5 de Junio del 2019</li>
                    <li data-i18n="calls.workshop_li_3">Resultados : 20 de Junio del 2019</li>
                    <li data-i18n="calls.workshop_li_4">Conferencias : 30 de Junio al 5 Agosto del 2019</li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2 m-t-lg m-b-lg">
                <h4><a href="files/ficha%20de%20registro%20para%20workshops.docx"><i class="fa fa-download fa-lg"></i>
                    <span data-i18n="calls.workshop_descarga">Descargar ficha para el Taller</span></a></h4>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <!--<a href="#" class="btn btn-primary">Inscribir workshop</a>-->
                <p><span data-i18n="calls.workshop_comentario_1">Enviar al correo </span><strong>corecongresscs@gmail.com</strong>
                    <span data-i18n="calls.workshop_comentario_2">adjuntando la ficha.</span></p>
            </div>


        </div>
    </div>
</section>

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

<!-- <section id="pricing" class="pricing">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Costos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 wow zoomIn">
                <ul class="pricing-plan list-unstyled">
                    <li class="pricing-title">
                        Comunidad Politécnica
                    </li>
                    <li class="pricing-desc">
                    </li>
                    <li class="pricing-price">
                        Participante / <span>$118.00 MXN</span>
                    </li>
                    <li class="pricing-price">
                        Ponente / <span>$2,006.00 MXN</span>
                    </li>
                    <li class="pricing-price">
                        Taller / <span>$236.00 MXN</span>
                    </li>
                    <li>
                        Acceso a conferencias magistrales
                    </li>
                    <li>
                        Acceso a ponencias
                    </li>
                    <li>
                        Café del oxxo y galletas Emperador
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="#">Registrarse</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 wow zoomIn">
                <ul class="pricing-plan list-unstyled selected">
                    <li class="pricing-title">
                        Público en General
                    </li>
                    <li class="pricing-desc">
                    </li>
                    <li class="pricing-price">
                        Congreso / <span>$235.00 MXN</span>
                    </li>
                    <li class="pricing-price">
                        Taller / <span>$235.00 MXN</span>
                    </li>
                    <li class="pricing-price">
                        Ponente / <span>$2,115.00 MXN</span>
                    </li>
                    <li>
                        Acceso a conferencias magistrales
                    </li>
                    <li>
                        Acceso a ponencias
                    </li>
                    <li>
                        <strong>Néscafe y dos Gansito</strong>
                    </li>
                    <li class="plan-action">
                        <a class="btn btn-primary btn-xs" href="#">Registrarse</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 wow zoomIn">
                <ul class="pricing-plan list-unstyled">
                    <li class="pricing-title">
                        Souvenirs
                    </li>
                    <li class="pricing-desc">
                    </li>
                    <li class="pricing-price">
                        Taza /<span>$118.00 MXN</span>
                    </li>
                    <li class="pricing-price">
                        Playera conmemorativa /<span>$235.00 MXN</span>
                    </li>
                    <li class="pricing-price">
                        Club sandwich / <span>$50.00 MXN</span>
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="#">Solicitar</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row m-t-lg">
            <div class="col-lg-12 text-center m-t-lg">
                <p><strong><span class="navy">Público general</span></strong> presentar comprobante de pago para ser
                    canjeado por recibo simple del IPN. Si requiere factura debe incluir datos fiscales: RFC, razón
                    social y domicilio fiscal.<br />
                    <strong><span class="navy">Comunidad politécnica</span></strong> presentar copia de credencial
                    IPN vigente y comprobante de pago para ser canjeado por recibo simple del IPN.<br />
                    <strong><span class="navy">Souvenirs</span></strong> Los pagos se pueden realizar directamente
                    en las mesas de registro el durante el evento.Sólo efectivo.
                </p>
            </div>
        </div>
    </div>
</section> -->


<section id="challenges" class="features gray-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 data-i18n="challenges.title">Talleres anteriores</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 features-text">
                <small data-i18n="challenges.subtitle">Taller</small>
                <h2 data-i18n="challenges.subtitle_1">Micro-arquitectura del procesador Lagarto I</h2>
                <i class="fa fa-flag big-icon pull-right"></i>
                <p data-i18n="challenges.parrafo_1">El curso esta orientado para el desarrollo y compresión de la
                    arquitectura Lagarto I desarrollada por
                    el CIC IPN. El participante aplicara sus conocimientos en arquitectura de computadoras, Verilog
                    entre otros.</p>
            </div>
            <div class="col-lg-5 features-text">
                <small data-i18n="challenges.subtitle">Taller</small>
                <h2 data-i18n="challenges.subtitle_2">Big Data (2017)</h2>
                <i class="fa fa-bolt big-icon pull-right"></i>
                <p data-i18n="challenges.parrafo_2">El participante aplicará los conceptos del área de Ciencia de
                    Datos cuando estos son de volúmenes
                    que requieren el uso de un grupo de computadoras «cluster» y procesamiento en paralelo. Asimismo
                    construirá un cluster y elaborará programas siguiendo el paradigma Map–Reduce.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 features-text">
                <small data-i18n="challenges.subtitle">Taller</small>
                <h2 data-i18n="challenges.subtitle_3">Hacking ético (2017)</h2>
                <i class="fa fa-cubes big-icon pull-right"></i>
                <p data-i18n="challenges.parrafo_3">El curso está basado en la preparación Laboratorios Prácticos de
                    Seguridad, Técnicas de Black Box
                    y White Box, Contramedidas en Seguridad, Procesos de Hardening, White Papers y Buenas prácticas
                    de Seguridad.</p>
            </div>
            <div class="col-lg-5"></div>
        </div>
        <!--
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <a href="#" class="btn btn-primary">Ver todos</a>
            </div>
        </div>
        -->
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
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_lopez_lozada_elizabeth.png">
                    <div class="media-body">
                        <div class="commens-name">Elizabeth López Lozada</div>
                        <small class="text-muted"></small>
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
                        <small class="text-muted"></small>
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
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_maldonado_romo_alberto.png">
                    <div class="media-body">
                        <div class="commens-name">Alberto Maldonado Romo</div>
                        <small class="text-muted"></small>
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
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_mendoza_lopez_alberto.png">
                    <div class="media-body">
                        <div class="commens-name">Alberto López Mendoza</div>
                        <small class="text-muted"></small>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-xs-6">
                <div class="comments-avatar">
                    <img class="pull-left" alt="image" src="img/landing/comite/comite_abdiel_reyes_vera.png">
                    <div class="media-body">
                        <div class="commens-name">Abdiel Reyes Vera</div>
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