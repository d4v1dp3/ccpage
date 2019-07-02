set names 'utf8';
DROP DATABASE IF EXISTS core2019;
CREATE DATABASE core2019;
USE core2019;

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
`id` int unsigned not null auto_increment,
`nombre` varchar(128) not null,
`apellido` varchar(128) not null,
`correo` varchar(64) not null,
`procedencia` text,
`es_ponente` boolean default false,
`paper` text,
`telefono` varchar(32) not null,
`usuario` varchar(64) not null,
`fecha_alta` datetime default null,
`tipo` varchar(2) default 1,
UNIQUE KEY `correo`(`correo`),
PRIMARY KEY (`id`,`correo`),
KEY `id`(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
`id` int unsigned not null auto_increment,
`usuario` varchar(64) not null,
`es_activo` boolean default false,
`contrasena` blob not null,
`ultima_sesion` datetime default null,
`es_ponente` boolean default false,
UNIQUE KEY `usuario`(`usuario`),
KEY `id`(`id`),
FOREIGN KEY (`usuario`) REFERENCES `usuario` (`correo`)
ON DELETE CASCADE
ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `taller`;
CREATE TABLE `taller` (
`id` int unsigned not null auto_increment,
`nombre_taller` varchar(128) not null,
`descripcion` text,
`nombre_ponente` varchar(128) not null,
`cupo_maximo` int not null,
`fecha_curso` datetime default null,
`estatus` varchar(32) default '',
`es_activo` boolean default false,
`lugar` text,
`fecha_alta` datetime default null,
UNIQUE KEY `nombre_taller`(`nombre_taller`),
KEY `id`(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `usuario_taller`;
CREATE TABLE `usuario_taller` (
`id_usuario` int unsigned not null,
`id_taller` int unsigned not null,
`fecha_inscripcion` datetime default null,
`estatus_inscripcion`  varchar(32) default '',
`es_activo` boolean default false,
`nota` text,
KEY `pkey`(`id_taller`),
FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
ON DELETE CASCADE
ON UPDATE CASCADE,
FOREIGN KEY (`id_taller`) REFERENCES `taller` (`id`)
ON DELETE CASCADE
ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP VIEW IF EXISTS lista_asistentes;
CREATE VIEW lista_asistentes AS
SELECT id, UPPER(CONCAT(nombre, ' ', apellido)) contacto, correo, procedencia, telefono, usuario, DATE_FORMAT(fecha_alta, '%d/%m/%Y %H:%i') alta,
es_ponente, paper,
CASE WHEN COUNT(id_taller) = 1 THEN CONCAT(CAST(COUNT(id_taller) AS CHAR(6)), ' taller')
WHEN COUNT(id_taller) > 1 THEN CONCAT(CAST(COUNT(id_taller) AS CHAR(6)) , ' talleres')
ELSE CONCAT(CAST(COUNT(id_taller) AS CHAR(6)) , ' talleres') END talleres
FROM usuario u
LEFT JOIN usuario_taller r ON r.id_usuario = u.id
WHERE tipo = '1'
GROUP BY id, nombre, apellido, correo, procedencia, tipo, telefono, usuario, fecha_alta, id_usuario, es_ponente, paper;

DROP VIEW IF EXISTS lista_talleres;
CREATE VIEW lista_talleres AS
SELECT id, nombre_taller, descripcion, nombre_ponente, cupo_maximo, DATE_FORMAT(fecha_curso, '%W %d de %M, %Y') dia,
DATE_FORMAT(fecha_curso, '%H:%i') hora, DATE_FORMAT(fecha_curso, '%d/%m/%Y %H:%i') fecha, estatus, lugar,
CONCAT(CAST(COUNT(id_taller) AS CHAR(6)), ' de ',cupo_maximo) cupo,
CASE WHEN (COUNT(id_taller)/cupo_maximo) <0.01 THEN 'badge'
WHEN (COUNT(id_taller)/cupo_maximo) < 0.4 THEN 'badge-info'
WHEN (COUNT(id_taller)/cupo_maximo) < 0.7 THEN 'badge-success'
WHEN (COUNT(id_taller)/cupo_maximo) < 1 THEN 'badge-primary'
WHEN (COUNT(id_taller)/cupo_maximo) = 1 THEN 'badge-confirm'
ELSE 'badge-danger'  END badge_color
FROM taller t
LEFT JOIN usuario_taller r ON r.id_taller = t.id
GROUP BY id, nombre_taller, descripcion, nombre_ponente, cupo_maximo, fecha_curso, estatus, lugar;

DROP VIEW IF EXISTS lista_talleres_disponibles;
CREATE VIEW lista_talleres_disponibles AS
SELECT id, nombre_taller, descripcion, nombre_ponente, cupo_maximo, DATE_FORMAT(fecha_curso, '%W %d de %M, %Y') dia,
DATE_FORMAT(fecha_curso, '%H:%i') hora, estatus, lugar, CONCAT(CAST(COUNT(id_taller) AS CHAR(6)), ' de ',cupo_maximo) cupo,
CASE WHEN (COUNT(id_taller)/cupo_maximo) <0.01 THEN 'badge'
WHEN (COUNT(id_taller)/cupo_maximo) < 0.4 THEN 'badge-info'
WHEN (COUNT(id_taller)/cupo_maximo) < 0.7 THEN 'badge-success'
WHEN (COUNT(id_taller)/cupo_maximo) < 1 THEN 'badge-primary'
WHEN (COUNT(id_taller)/cupo_maximo) = 1 THEN 'badge-confirm'
ELSE 'badge-danger'  END badge_color,
IF(estatus_inscripcion = 'Confirmado', 'badge-confirm', 'badge') badge_estatus,
IF(estatus_inscripcion = 'Confirmado', 'fa-check', 'fa-exclamation') icon_estatus,
id_usuario, estatus_inscripcion, r.es_activo
FROM taller t
LEFT JOIN usuario_taller r ON r.id_taller = t.id
GROUP BY id, nombre_taller, descripcion, nombre_ponente, cupo_maximo, fecha_curso, estatus, lugar, id_usuario, estatus_inscripcion, es_activo;


DROP PROCEDURE IF EXISTS lista_taller_disponible;

DELIMITER //
CREATE PROCEDURE lista_taller_disponible(IN user int unsigned)
BEGIN
     select id, nombre_taller, descripcion, nombre_ponente, cupo_maximo,
     DATE_FORMAT(fecha_curso, '%W %d de %M, %Y') dia, DATE_FORMAT(fecha_curso, '%H:%i') hora,
      estatus, lugar, CONCAT(CAST(COUNT(id_taller) AS CHAR(6)), ' de ',cupo_maximo) cupo,
       CASE WHEN (COUNT(id_taller)/cupo_maximo) <0.01 THEN 'badge'
       WHEN (COUNT(id_taller)/cupo_maximo) < 0.4 THEN 'badge-info'
       WHEN (COUNT(id_taller)/cupo_maximo) < 0.7 THEN 'badge-success'
       WHEN (COUNT(id_taller)/cupo_maximo) < 1 THEN 'badge-primary'
       WHEN (COUNT(id_taller)/cupo_maximo) = 1 THEN 'badge-confirm'
       ELSE 'badge-danger'  END badge_color
       from taller t LEFT JOIN usuario_taller r ON r.id_taller = t.id  where t.id NOT IN (select id_taller from usuario_taller where id_usuario = user)
       GROUP BY id, nombre_taller;
END //
DELIMITER ;

DROP PROCEDURE IF EXISTS inscribe_taller;

DELIMITER //
CREATE PROCEDURE inscribe_taller(IN iuser int unsigned, IN italler int unsigned)
BEGIN

IF (select count(*) as cupo from usuario_taller where id_taller = italler) < (select cupo_maximo from taller where id = italler) THEN
    IF (select count(id_usuario) from usuario_taller where id_usuario = iuser and id_taller = italler) > 0 THEN
        select 0 as result;
    ELSEIF (select count(id) from usuario where id = iuser) < 0 THEN
        select 0 as result;
    ELSEIF (select count(id) from taller where id = italler) < 0 THEN
        select 0 as result;
    ELSE
        INSERT INTO usuario_taller VALUES(iuser,italler,NOW(),'Pendiente','1','');
        select 1 as result;
    END IF;
ELSE
    select 0 as result;
END IF;

END //
DELIMITER ;

INSERT INTO `usuario`(`id`,`nombre`,`apellido`,`correo`,`telefono`,`usuario`,`fecha_alta`,`tipo`) VALUES('1','Administrador','','administrador','','administrador','2000-01-01','3');
INSERT INTO `login` VALUES('1','administrador','1',AES_ENCRYPT('Core.2019','sUp3r?M4rI0'),'2000/01/01 00:00.00',DEFAULT);

INSERT INTO `usuario`(`id`,`nombre`,`apellido`,`correo`,`telefono`,`usuario`,`fecha_alta`,`tipo`) VALUES('2','test','','test','','test','2000-01-01','1');
INSERT INTO `login` VALUES('2','user','2',AES_ENCRYPT('test','sUp3r?M4rI0'),'2000/01/01 00:00.00',DEFAULT);

INSERT INTO `usuario`(`id`,`nombre`,`apellido`,`correo`,`telefono`,`usuario`,`fecha_alta`,`tipo`) VALUES('3','test2','','test2','','test2','2000-01-01','1');
INSERT INTO `login` VALUES('3','test2','3',AES_ENCRYPT('test','sUp3r?M4rI0'),'2000/01/01 00:00.00',DEFAULT);

INSERT INTO `usuario`(`id`,`nombre`,`apellido`,`correo`,`telefono`,`usuario`,`fecha_alta`,`tipo`) VALUES('4','test3','','test3','','test3','2000-01-01','1');
INSERT INTO `login` VALUES('4','test3','4',AES_ENCRYPT('test','sUp3r?M4rI0'),'2000/01/01 00:00.00',DEFAULT);

INSERT INTO `taller`(`id`,`nombre_taller`,`descripcion`,`nombre_ponente`,`cupo_maximo`,`fecha_curso`,`estatus`,`es_activo`,`lugar`,`fecha_alta`) VALUES('1','Detectando personas en imágenes usando deep learning','En este taller de 4 horas, tu vas re-entrenar el modelo neuronal YOLO (You only look once) para localizar personas, vehículos u otro objeto en imágenes usando Colab. Te explicaremos la arquitectura neuronal YOLO la cual es una de las mejores para detectar objetos, conocerás las métricas para evaluar el desempeño del detector, usarás una herramienta para etiquetar tus propias imágenes y entendederas a groso modo como debe hacer el entrenamiento de los modelos neuronales profundos.','Dr. Erik Zamora','29','2019-08-01','Abierto','1','CIC',CURDATE());
INSERT INTO `taller`(`id`,`nombre_taller`,`descripcion`,`nombre_ponente`,`cupo_maximo`,`fecha_curso`,`estatus`,`es_activo`,`lugar`,`fecha_alta`) VALUES('2','Introducción al desarrollo de aplicaciones móviles con realidad aumentada','Proporcionar los conocimientos básicos en el manejo de Unity y Vuforia para el desarrollo de aplicaciones móviles en Android implementando realidad aumentada.','Dr. Amadeo José Argüelles Cruz','15','2019-07-31','Abierto','1','CIC',CURDATE());
INSERT INTO `taller`(`id`,`nombre_taller`,`descripcion`,`nombre_ponente`,`cupo_maximo`,`fecha_curso`,`estatus`,`es_activo`,`lugar`,`fecha_alta`) VALUES('3','Introducción al desarrollo de exploits','El objetivo principal es que el alumno adquiera los conocimientos y las habilidades necesarias para ser capaz de identificar y explotar vulnerabilidades básicas en la programación de software. Provenientes de malas prácticas de programación, provocando que un software sea vulnerable a ataques de tipo Buffer overflow, Heap overflow y Format string.','M. en C. Florencio Javier González Rodríguez','15','2019-07-30','Abierto','1','CIC',CURDATE());
INSERT INTO `taller`(`id`,`nombre_taller`,`descripcion`,`nombre_ponente`,`cupo_maximo`,`fecha_curso`,`estatus`,`es_activo`,`lugar`,`fecha_alta`) VALUES('4','Big Data en la Ciencia de datos','Los participantes adquirirán las bases para continuar su estudio de la Ciencia de Datos y tengan oportunidad de desarrollar proyectos en esta área que actualmente tiene ofertas de ingresos para quienes conozcan cómo resolver problemas en este campo.','Dr. Jesús Manuel Olivares Ceja','15','2019-07-31','Abierto','1','CIC',CURDATE());
INSERT INTO `taller`(`id`,`nombre_taller`,`descripcion`,`nombre_ponente`,`cupo_maximo`,`fecha_curso`,`estatus`,`es_activo`,`lugar`,`fecha_alta`) VALUES('5','Diseño de la arquitectura del procesador lagarto RISC-V','El curso esta orientado para el desarrollo y compresión de la arquitectura Lagarto I desarrollada por el CIC IPN. El participante aplicara sus conocimientos en arquitectura de computadoras, Verilog entre otros.','Dr. Marco Antonio Ramírez Salinas','15','2019-07-31','Abierto','1','CIC',CURDATE());
INSERT INTO `taller`(`id`,`nombre_taller`,`descripcion`,`nombre_ponente`,`cupo_maximo`,`fecha_curso`,`estatus`,`es_activo`,`lugar`,`fecha_alta`) VALUES('6','Entrega de aplicaciónes con Docker','En este curso introductorio a Docker aprenderás como crear, desplegar y administrar imágenes y contenedores de Docker. Al término del curso sabrás cómo utilizar Docker para construir aplicaciones de forma rápida y ejecutarlas donde sea.','Ing. Alejandro López Hernández','100','2019-08-02','Abierto','1','CIC',CURDATE());
INSERT INTO `taller`(`id`,`nombre_taller`,`descripcion`,`nombre_ponente`,`cupo_maximo`,`fecha_curso`,`estatus`,`es_activo`,`lugar`,`fecha_alta`) VALUES('7','Primeros pasos en R.O.S','Que los participantes se familiaricen con R.O.S. y al final del taller puedan crear sus propios nodos. El beneficio para los participantes es aprender a utilizar una herramienta que facilita el desarrollo de prototipos en el área de la robótica la cual es utilizada por los centros de investigación mas importantes en esta área y que se esta perfilando para convertirse en un estándar de la industria.','M. en C. José Ángel Martínez Navarro','20','2019-07-31','Abierto','1','CIC',CURDATE());
INSERT INTO `taller`(`id`,`nombre_taller`,`descripcion`,`nombre_ponente`,`cupo_maximo`,`fecha_curso`,`estatus`,`es_activo`,`lugar`,`fecha_alta`) VALUES('8','Exploración para el descubrimiento de conocimiento en datos abiertos','Proporcionar a los participantes una metodología dentro de la Ciencia de Datos para el análisis de información y realizar el descubrimiento de conocimiento por medio de herramientas ETL y de visualización, haciendo uso de bases de datos abiertas, las cuales pueden ser del dominio público o privado.','Dr. Gilberto L. Martínez Luna','20','2019-07-31','Abierto','1','CIC',CURDATE());
INSERT INTO `taller`(`id`,`nombre_taller`,`descripcion`,`nombre_ponente`,`cupo_maximo`,`fecha_curso`,`estatus`,`es_activo`,`lugar`,`fecha_alta`) VALUES('9','Análisis profundo de Documentos digitales 2.0','El lenguaje humano es el medio de comunicación existente más eficaz, y a su vez el más complejo. Uno de los retos a resolver en esta era de la información y del conocimiento es el tratamiento automático del lenguaje. El objetivo general de este taller es proporcionar a los asistentes una introducción, intensiva y accesible, a la Inteligencia Artificial, a la Lingüística Computacional y a las herramientas relacionadas existentes actualmente. Usar de forma apropiada estos conceptos representan un nicho de oportunidad para el desarrollo de trabajos multidisciplinarios de alto impacto.','Dr. Hiram Calvo','30','2019-07-31','Abierto','1','CIC',CURDATE());
INSERT INTO `taller`(`id`,`nombre_taller`,`descripcion`,`nombre_ponente`,`cupo_maximo`,`fecha_curso`,`estatus`,`es_activo`,`lugar`,`fecha_alta`) VALUES('10','IoT - Inteligencia Artificial en Sistemas Embebidos','Existe un gran interés en la convergencia entre el internet de las cosas (IoT) y la inteligencia artificial (AI) en el sector industrial. En este taller desarrollarás una solución con machine learning en plataformas de hardware dedicadas al IoT (Raspberry PI).','M. en C. Joel García Velasco','9','2019-07-30','Abierto','1','CIC',CURDATE());

