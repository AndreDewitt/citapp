CREATE TABLE `t_bitacora` (
  `tabla` varchar(255),
  `asunto` varchar(255),
  `descripcion` varchar(255),
  `fecha` date
);

CREATE TABLE `t_usuarios` (
  `id` int(16) PRIMARY KEY AUTO_INCREMENT,
  `usuario` varchar(255),
  `contrasenia` varchar(255),
  `id_duenio` int(16)
);

CREATE TABLE `t_duenios` (
  `id` int(16) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255),
  `aPaterno` varchar(255),
  `aMaterno` varchar(255),
  `edad` varchar(255)
);

CREATE TABLE `t_negocio` (
  `id` int(16) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255),
  `descripcion` varchar(700),
  `fotografia` longblob,
  `id_duenio` int(16),
  `id_categoria` int(16)
);

CREATE TABLE `t_contacto` (
  `id` int(16) PRIMARY KEY AUTO_INCREMENT,
  `tel_local` varchar(255),
  `tel_cel` varchar(255),
  `correo` varchar(255),
  `id_negocio` int(16)
);

CREATE TABLE `t_ubicacion` (
  `id` int(16) PRIMARY KEY AUTO_INCREMENT,
  `calle` varchar(255),
  `num_int` varchar(255),
  `num_ext` varchar(255),
  `colonia` varchar(255),
  `cp` varchar(255),
  `alcaldia` varchar(255),
  `ciudad` varchar(255),
  `id_negocio` int(16)
);

CREATE TABLE `t_categoria` (
  `id` int(16) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255)
);

CREATE TABLE `t_citas` (
  `id` int(16) PRIMARY KEY AUTO_INCREMENT,
  `fecha` date,
  `hora` varchar(255),
  `descripcion` varchar(255),
  `id_negocio` int(16)
);

CREATE TABLE `t_atencion` (
  `id` int(16) PRIMARY KEY AUTO_INCREMENT,
  `hora_apertura` varchar(255),
  `hora_cierre` varchar(255),
  `id_negocio` int(16)
);

CREATE TABLE `t_horario` (
  `id` int(16) PRIMARY KEY AUTO_INCREMENT,
  `dia` varchar(255),
  `mes` varchar(255),
  `anio` varchar(255),
  `hora` varchar(255),
  `id_servicio` int(16)
);

CREATE TABLE `t_servicio` (
  `id` int(16) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255),
  `descripcion` varchar(255),
  `capacidad` varchar(255),
  `id_negocio` int(16)
);

ALTER TABLE `t_usuarios` ADD FOREIGN KEY (`id_duenio`) REFERENCES `t_duenios` (`id`);

ALTER TABLE `t_negocio` ADD FOREIGN KEY (`id_duenio`) REFERENCES `t_duenios` (`id`);

ALTER TABLE `t_negocio` ADD FOREIGN KEY (`id_categoria`) REFERENCES `t_categoria` (`id`);

ALTER TABLE `t_contacto` ADD FOREIGN KEY (`id_negocio`) REFERENCES `t_negocio` (`id`);

ALTER TABLE `t_ubicacion` ADD FOREIGN KEY (`id_negocio`) REFERENCES `t_negocio` (`id`);

ALTER TABLE `t_citas` ADD FOREIGN KEY (`id_negocio`) REFERENCES `t_negocio` (`id`);

ALTER TABLE `t_atencion` ADD FOREIGN KEY (`id_negocio`) REFERENCES `t_negocio` (`id`);

ALTER TABLE `t_horario` ADD FOREIGN KEY (`id_servicio`) REFERENCES `t_servicio` (`id`);

ALTER TABLE `t_servicio` ADD FOREIGN KEY (`id_negocio`) REFERENCES `t_negocio` (`id`);
