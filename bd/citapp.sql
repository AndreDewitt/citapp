-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2021 a las 05:46:17
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_atencion`
--

CREATE TABLE `t_atencion` (
  `id` int(16) NOT NULL,
  `hora_apertura` time DEFAULT NULL,
  `hora_cierre` time DEFAULT NULL,
  `id_negocio` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_atencion`
--

INSERT INTO `t_atencion` (`id`, `hora_apertura`, `hora_cierre`, `id_negocio`) VALUES
(1, '16:20:53', '20:15:32', 1),
(2, '12:24:29', '21:22:10', 2),
(3, '22:17:25', '11:40:57', 3),
(4, '11:48:36', '23:37:20', 4),
(5, '21:54:11', '13:55:26', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_bitacora`
--

CREATE TABLE `t_bitacora` (
  `tabla` varchar(255) DEFAULT NULL,
  `asunto` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_categoria`
--

CREATE TABLE `t_categoria` (
  `id` int(16) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_categoria`
--

INSERT INTO `t_categoria` (`id`, `nombre`) VALUES
(1, 'categoria1'),
(2, 'categoria2'),
(3, 'categoria3'),
(4, 'categoria4'),
(5, 'categoria5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_citas`
--

CREATE TABLE `t_citas` (
  `id` int(16) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_servicio` int(16) DEFAULT NULL,
  `id_horario` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_citas`
--

INSERT INTO `t_citas` (`id`, `nombre`, `correo`, `tel`, `fecha`, `id_servicio`, `id_horario`) VALUES
(1, 'nombre1', '1@gmail.com', '95-75-83-76-46', '2021-06-22', 1, 1),
(2, 'nombre2', '2@gmail.com', '28-95-87-83-75', '2021-06-11', 2, 2),
(3, 'nombre3', '3@gmail.com', '74-24-30-68-44', '2021-06-14', 3, 3),
(4, 'nombre4', '4@gmail.com', '46-57-14-42-84', '2021-06-11', 4, 4),
(5, 'nombre5', '5@gmail.com', '81-47-92-51-68', '2021-06-27', 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_contacto`
--

CREATE TABLE `t_contacto` (
  `id` int(16) NOT NULL,
  `tel_local` varchar(255) DEFAULT NULL,
  `tel_cel` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `id_negocio` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_contacto`
--

INSERT INTO `t_contacto` (`id`, `tel_local`, `tel_cel`, `correo`, `id_negocio`) VALUES
(1, '51-67-51-37-99', '86-34-31-23-53', '1@gmail.com', 1),
(2, '97-56-29-25-89', '59-73-70-70-52', '2@gmail.com', 2),
(3, '73-22-96-55-78', '48-98-64-90-14', '3@gmail.com', 3),
(4, '43-20-29-87-20', '95-59-57-11-67', '4@gmail.com', 4),
(5, '25-66-24-87-28', '12-66-26-75-35', '5@gmail.com', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_duenios`
--

CREATE TABLE `t_duenios` (
  `id` int(16) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `aPaterno` varchar(255) DEFAULT NULL,
  `aMaterno` varchar(255) DEFAULT NULL,
  `edad` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_duenios`
--

INSERT INTO `t_duenios` (`id`, `nombre`, `aPaterno`, `aMaterno`, `edad`) VALUES
(1, 'duenio1', 'APduenio1', 'AMduenio1', '66'),
(2, 'duenio2', 'APduenio2', 'AMduenio2', '22'),
(3, 'duenio3', 'APduenio3', 'AMduenio3', '37'),
(4, 'duenio4', 'APduenio4', 'AMduenio4', '39'),
(5, 'duenio5', 'APduenio5', 'AMduenio5', '43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_horario`
--

CREATE TABLE `t_horario` (
  `id` int(16) NOT NULL,
  `dia` varchar(255) DEFAULT NULL,
  `d` time DEFAULT NULL,
  `a` time DEFAULT NULL,
  `disponibilidad` int(11) DEFAULT NULL,
  `id_servicio` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_horario`
--

INSERT INTO `t_horario` (`id`, `dia`, `d`, `a`, `disponibilidad`, `id_servicio`) VALUES
(1, 'Miercoles', '16:26:36', '19:40:38', 4, 1),
(2, 'Lunes', '16:43:18', '16:11:44', 6, 2),
(3, 'Jueves', '13:42:23', '17:14:58', 9, 3),
(4, 'Jueves', '17:57:18', '21:14:44', 3, 4),
(5, 'Jueves', '11:43:34', '16:47:15', 7, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_negocio`
--

CREATE TABLE `t_negocio` (
  `id` int(16) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(700) DEFAULT NULL,
  `fotografia` longblob DEFAULT NULL,
  `id_duenio` int(16) DEFAULT NULL,
  `id_categoria` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_negocio`
--

INSERT INTO `t_negocio` (`id`, `nombre`, `descripcion`, `fotografia`, `id_duenio`, `id_categoria`) VALUES
(1, 'negocio1', 'descripcion1', 0x68747470733a2f2f706c616365696d672e636f6d2f3430302f3430302f74656368, 1, 1),
(2, 'negocio2', 'descripcion2', 0x68747470733a2f2f706c616365696d672e636f6d2f3430302f3430302f74656368, 2, 2),
(3, 'negocio3', 'descripcion3', 0x68747470733a2f2f706c616365696d672e636f6d2f3430302f3430302f74656368, 3, 3),
(4, 'negocio4', 'descripcion4', 0x68747470733a2f2f706c616365696d672e636f6d2f3430302f3430302f74656368, 4, 4),
(5, 'negocio5', 'descripcion5', 0x68747470733a2f2f706c616365696d672e636f6d2f3430302f3430302f74656368, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_servicio`
--

CREATE TABLE `t_servicio` (
  `id` int(16) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `id_negocio` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_servicio`
--

INSERT INTO `t_servicio` (`id`, `nombre`, `descripcion`, `id_negocio`) VALUES
(1, 'servicio1', 'descripcion1', 1),
(2, 'servicio2', 'descripcion2', 2),
(3, 'servicio3', 'descripcion3', 3),
(4, 'servicio4', 'descripcion4', 4),
(5, 'servicio5', 'descripcion5', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_ubicacion`
--

CREATE TABLE `t_ubicacion` (
  `id` int(16) NOT NULL,
  `calle` varchar(255) DEFAULT NULL,
  `num_int` varchar(255) DEFAULT NULL,
  `num_ext` varchar(255) DEFAULT NULL,
  `colonia` varchar(255) DEFAULT NULL,
  `cp` varchar(255) DEFAULT NULL,
  `alcaldia` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `id_negocio` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_ubicacion`
--

INSERT INTO `t_ubicacion` (`id`, `calle`, `num_int`, `num_ext`, `colonia`, `cp`, `alcaldia`, `ciudad`, `id_negocio`) VALUES
(1, 'calle1', '44', '66', 'colonia1', '64219', 'alcaldia1', 'ciudad1', 1),
(2, 'calle2', '42', '82', 'colonia2', '28467', 'alcaldia2', 'ciudad2', 2),
(3, 'calle3', '45', '38', 'colonia3', '70174', 'alcaldia3', 'ciudad3', 3),
(4, 'calle4', '44', '27', 'colonia4', '80504', 'alcaldia4', 'ciudad4', 4),
(5, 'calle5', '79', '99', 'colonia5', '31685', 'alcaldia5', 'ciudad5', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id` int(16) NOT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `contrasenia` varchar(255) DEFAULT NULL,
  `id_duenio` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id`, `usuario`, `contrasenia`, `id_duenio`) VALUES
(1, 'usuario1', 'contrasenia1', 1),
(2, 'usuario2', 'contrasenia2', 2),
(3, 'usuario3', 'contrasenia3', 3),
(4, 'usuario4', 'contrasenia4', 4),
(5, 'usuario5', 'contrasenia5', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_atencion`
--
ALTER TABLE `t_atencion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_negocio` (`id_negocio`);

--
-- Indices de la tabla `t_categoria`
--
ALTER TABLE `t_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_citas`
--
ALTER TABLE `t_citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `id_horario` (`id_horario`);

--
-- Indices de la tabla `t_contacto`
--
ALTER TABLE `t_contacto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_negocio` (`id_negocio`);

--
-- Indices de la tabla `t_duenios`
--
ALTER TABLE `t_duenios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_horario`
--
ALTER TABLE `t_horario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_servicio` (`id_servicio`);

--
-- Indices de la tabla `t_negocio`
--
ALTER TABLE `t_negocio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_duenio` (`id_duenio`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `t_servicio`
--
ALTER TABLE `t_servicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_negocio` (`id_negocio`);

--
-- Indices de la tabla `t_ubicacion`
--
ALTER TABLE `t_ubicacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_negocio` (`id_negocio`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_duenio` (`id_duenio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_atencion`
--
ALTER TABLE `t_atencion`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_categoria`
--
ALTER TABLE `t_categoria`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_citas`
--
ALTER TABLE `t_citas`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_contacto`
--
ALTER TABLE `t_contacto`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_duenios`
--
ALTER TABLE `t_duenios`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_horario`
--
ALTER TABLE `t_horario`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_negocio`
--
ALTER TABLE `t_negocio`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_servicio`
--
ALTER TABLE `t_servicio`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_ubicacion`
--
ALTER TABLE `t_ubicacion`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_atencion`
--
ALTER TABLE `t_atencion`
  ADD CONSTRAINT `t_atencion_ibfk_1` FOREIGN KEY (`id_negocio`) REFERENCES `t_negocio` (`id`);

--
-- Filtros para la tabla `t_citas`
--
ALTER TABLE `t_citas`
  ADD CONSTRAINT `t_citas_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `t_servicio` (`id`),
  ADD CONSTRAINT `t_citas_ibfk_2` FOREIGN KEY (`id_horario`) REFERENCES `t_horario` (`id`);

--
-- Filtros para la tabla `t_contacto`
--
ALTER TABLE `t_contacto`
  ADD CONSTRAINT `t_contacto_ibfk_1` FOREIGN KEY (`id_negocio`) REFERENCES `t_negocio` (`id`);

--
-- Filtros para la tabla `t_horario`
--
ALTER TABLE `t_horario`
  ADD CONSTRAINT `t_horario_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `t_servicio` (`id`);

--
-- Filtros para la tabla `t_negocio`
--
ALTER TABLE `t_negocio`
  ADD CONSTRAINT `t_negocio_ibfk_1` FOREIGN KEY (`id_duenio`) REFERENCES `t_duenios` (`id`),
  ADD CONSTRAINT `t_negocio_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `t_categoria` (`id`);

--
-- Filtros para la tabla `t_servicio`
--
ALTER TABLE `t_servicio`
  ADD CONSTRAINT `t_servicio_ibfk_1` FOREIGN KEY (`id_negocio`) REFERENCES `t_negocio` (`id`);

--
-- Filtros para la tabla `t_ubicacion`
--
ALTER TABLE `t_ubicacion`
  ADD CONSTRAINT `t_ubicacion_ibfk_1` FOREIGN KEY (`id_negocio`) REFERENCES `t_negocio` (`id`);

--
-- Filtros para la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD CONSTRAINT `t_usuarios_ibfk_1` FOREIGN KEY (`id_duenio`) REFERENCES `t_duenios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
