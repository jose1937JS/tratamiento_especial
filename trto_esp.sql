-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-05-2018 a las 23:29:33
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
(1, 'Jose Fernando', 'Lopez', '25887282', '04244444444', 'jflo1988@dominio.com', 'esdasda dadasd sd asdas dasda dsad asdasda asd asd as das dasdasdasdas das sa dsa dadsa dsa s mjjkjjk', 'nodejs_express_framework.pdf'),
(2, 'Julio Cesar', 'Yanez Gon', '26026083', '', 'juliocesar@yanez.com', 'sdadadasdasdasds adadadasdas dsda dasd sadasdasdasd sad sad asdasdasd sada sdas dasd asda sdas dasdasdas dsadasdsadas dasdadas dasdasd asd asd asd qsadasdasd as dsa asdasdasda', 'nodejs_express_framework1.pdf'),
(3, 'Gibert', 'Carrera M', '23795320', '04144376667', 'gibert.c@servidor.com', 'eo es un observcackin alksdlkasdlksadas jklasjdlkasjdlkjaslj askaslkjdlkasjdlkasjdlkasjdas jdalksj las jalskdjlaskjdlaskjdlaskjdlsakjdlasj laskj laksjdlaskjdlasjd lasjld ajsl jasldjasldjlasj', 'nodejs_express_framework2.pdf'),
(4, 'Iraida ', 'Loepz', '10669419', '213123213', '2312w@xn--sdasd-rra', 'asdasdas d asdasd asdsa dasdad', 'nodejs_express_framework3.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_trat_piv`
--

CREATE TABLE `est_trat_piv` (
  `id` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_tratamiento` int(11) NOT NULL,
  `aprobado` varchar(5) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `est_trat_piv`
--

INSERT INTO `est_trat_piv` (`id`, `id_estudiante`, `id_tratamiento`, `aprobado`) VALUES
(1, 1, 1, 'false'),
(2, 1, 2, 'true'),
(3, 2, 2, 'false'),
(4, 2, 3, 'false'),
(5, 3, 2, ''),
(6, 3, 5, ''),
(7, 4, 5, 'false');

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
(1, 'ARTE Y CULTURA'),
(2, 'INGLES II'),
(3, 'PROBLEMATICA CIENTIFICA TECNOLOGICA'),
(4, 'ELECTIVA I (CONDUCTA HUMANA)'),
(5, 'FISICA I'),
(6, 'MATEMATICA II'),
(7, 'ALGORITMOS I'),
(8, 'METODOLOGIA Y TECNICAS DE INVESTIGACION'),
(9, 'ELECTIVA II (LEGISLACION INFORMATICA)'),
(10, 'PROGRAMACION I'),
(11, 'MATEMATICA III'),
(12, 'FISICA I'),
(13, 'ALGORITMOS II'),
(14, 'ESTRUCTURAS DISCRETAS I'),
(15, 'BASE DE DATOS'),
(16, 'PROGRAMACION II'),
(17, 'PROBABILIDAD Y ESTADISTICA'),
(18, 'MATEMATICA IV'),
(19, 'ELECTIVA III'),
(20, 'ORGANIZACION DEL COMPUTADOR'),
(21, 'ALGEBRA BOOLEANA'),
(22, 'ESTRUCTURAS DISCRETAS II'),
(23, 'PROGRAMACION III'),
(24, 'ELECTIVA IV (TELEINFORMATICA)'),
(25, 'TEORIA DE SISTEMAS'),
(26, 'INVESTIGACION DE OPERACIONES'),
(27, 'ARQUITECTURA DEL COMPUTADOR'),
(28, 'SISTEMAS DE INFOMACION I'),
(29, 'METODOS NUMERICOS'),
(30, 'INGENIERIA ECONOMICA'),
(31, 'ELECTIVA V (INTELIGENCIA ARTIFICIAL)'),
(32, 'CONTROL DE PROYECTOS'),
(33, 'ORGANIZACION Y GESTION EMPRESARIAL'),
(34, 'SISTEMAS OPERATIVOS'),
(35, 'TRADUCTORES E INTERPRETES'),
(36, 'SISTEMAS DE INFORMACION II'),
(37, 'REDES'),
(38, 'ELECTIVA DE AREA I'),
(39, 'PASANTIA'),
(40, 'LENGUAJE DE PROGRAMACION'),
(41, 'SISTEMAS DE INFORMACION III'),
(42, 'ELECTIVA DE AREA II'),
(43, 'SISTEMAS DISTRIBUIDOS'),
(44, 'ETICA PROFESIONAL'),
(45, 'ELECTIVA LIBRE I'),
(46, 'PROYECTO DE GRADO I'),
(47, 'ELECTIVA DE AREA III'),
(48, 'ELECTIVA LIBRE II'),
(49, 'INFORMATICA EDUCATIVA'),
(50, 'PROYECTO DE GRADO II'),
(51, 'GERENCIA DE PROYECTO');

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
(1, 1, 11, 12),
(2, 1, 13, 12),
(3, 1, 14, 12),
(4, 2, 40, 0),
(5, 2, 41, 0),
(6, 3, 2, 0),
(7, 3, 3, 0),
(8, 4, 6, 0),
(9, 4, 11, 0),
(10, 5, 8, 0),
(11, 5, 9, 0),
(12, 6, 9, 12),
(13, 6, 10, 12),
(14, 6, 11, 12),
(15, 7, 5, 12),
(16, 7, 14, 12),
(17, 7, 21, 12);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `est_trat_piv`
--
ALTER TABLE `est_trat_piv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `unidades_credito`
--
ALTER TABLE `unidades_credito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
