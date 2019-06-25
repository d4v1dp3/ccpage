
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

SET FOREIGN_KEY_CHECKS=0;
INSERT INTO `usuario`(`id`,`nombre`,`apellido`,`correo`,`telefono`,`usuario`,`fecha_alta`,`tipo`) VALUES('1','Administrador','','','','administrador','2000/01/01 00:00.00','3');
INSERT INTO `login` VALUES('1','administrador','1',AES_ENCRYPT('Core.2019','sUp3r?M4rI0'),'2000/01/01 00:00.00',DEFAULT);
SET FOREIGN_KEY_CHECKS=1;


