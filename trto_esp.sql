-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-05-2018 a las 00:09:44
-- Versión del servidor: 5.7.21-0ubuntu0.17.10.1
-- Versión de PHP: 7.1.11-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trto_esp`
--
CREATE DATABASE IF NOT EXISTS `trto_esp` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `trto_esp`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `cedula` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(11) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `observacion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `constancia_notas` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `apellido`, `cedula`, `telefono`, `email`, `observacion`, `constancia_notas`) VALUES
(45, 'jose', 'lopez', '25887272', '123213123', '1321@123', '', 'oop_in_php_tutorial2.pdf'),
(46, 'Gibert', 'Carreta', '23795320', '123123', '131@qw', 'wqewqewqeqweqe', 'Postgres-Tutorial.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_trat_piv`
--

CREATE TABLE `est_trat_piv` (
  `id` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_tratamiento` int(11) NOT NULL,
  `aprobado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `est_trat_piv`
--

INSERT INTO `est_trat_piv` (`id`, `id_estudiante`, `id_tratamiento`, `aprobado`) VALUES
(50, 45, 1, 0),
(51, 45, 4, 0),
(52, 45, 5, 0),
(54, 46, 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `materia` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `materia`) VALUES
(1, 'ARTE Y CULTURA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

CREATE TABLE `tratamiento` (
  `id` int(11) NOT NULL,
  `tratamiento_esp` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tratamiento`
--

INSERT INTO `tratamiento` (`id`, `tratamiento_esp`) VALUES
(1, 'Extra crédito'),
(2, 'Examen Extraordinario'),
(3, 'Paralelo'),
(4, 'Proyecto de Grado I'),
(5, 'Último Semestre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades_credito`
--

CREATE TABLE `unidades_credito` (
  `id` int(11) NOT NULL,
  `id_est_trat_piv` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `unidades` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `unidades_credito`
--

INSERT INTO `unidades_credito` (`id`, `id_est_trat_piv`, `id_materia`, `unidades`) VALUES
(1, 50, 4, 12),
(2, 50, 6, 12),
(3, 50, 7, 12),
(4, 52, 1, 12),
(5, 52, 2, 12),
(6, 52, 3, 12),
(9, 54, 4, 0),
(10, 54, 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `user` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user`, `pass`) VALUES
('admin', 'admin'),
('secretaria', 'secretaria');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD UNIQUE KEY `cedula_2` (`cedula`);

--
-- Indices de la tabla `est_trat_piv`
--
ALTER TABLE `est_trat_piv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estudiante` (`id_estudiante`),
  ADD KEY `id_tratamiento` (`id_tratamiento`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidades_credito`
--
ALTER TABLE `unidades_credito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_est_trat_piv` (`id_est_trat_piv`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `est_trat_piv`
--
ALTER TABLE `est_trat_piv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `unidades_credito`
--
ALTER TABLE `unidades_credito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `est_trat_piv`
--
ALTER TABLE `est_trat_piv`
  ADD CONSTRAINT `est_trat_piv_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `est_trat_piv_ibfk_2` FOREIGN KEY (`id_tratamiento`) REFERENCES `tratamiento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `unidades_credito`
--
ALTER TABLE `unidades_credito`
  ADD CONSTRAINT `unidades_credito_ibfk_1` FOREIGN KEY (`id_est_trat_piv`) REFERENCES `est_trat_piv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
