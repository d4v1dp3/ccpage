
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
`fecha_alta` datetime default null,
`estatus` varchar(32) default '',
`es_activo` boolean default false,
`lugar` text,
UNIQUE KEY `nombre_taller`(`nombre_taller`),
KEY `id`(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `usuario_taller`;
CREATE TABLE `usuario_taller` (
`id_usuario` int unsigned not null,
`id_taller` int unsigned not null,
`fecha_inscripcion` datetime default null,
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





