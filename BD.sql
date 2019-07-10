-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2019 a las 16:22:46
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `creadorgrupodesarrollo`
--
CREATE DATABASE IF NOT EXISTS `creadorgrupodesarrollo` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `creadorgrupodesarrollo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desarrollador`
--

CREATE TABLE `desarrollador` (
  `id_desarrollador` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `caracteristica` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `desarrollador`
--

INSERT INTO `desarrollador` (`id_desarrollador`, `nombre`, `caracteristica`) VALUES
(1, 'jorge', 'HTML5/CSS3'),
(2, 'toni', 'HTML5/CSS3'),
(3, 'julia', 'HTML5/CSS3'),
(4, 'jose', 'Javascript'),
(5, 'mateo', 'Javascript'),
(6, 'jaume', 'PHP'),
(7, 'cristian', 'PHP'),
(8, 'lolo', 'Json/XML'),
(9, 'adrian', 'Python'),
(10, 'alejandro', 'Python'),
(11, 'fran', 'Java'),
(12, 'petro', 'Java'),
(13, 'luis', 'Laravel'),
(14, 'alexis', 'Json/XML'),
(15, 'jordi', 'Laravel'),
(16, 'david', 'Laravel');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `desarrollador`
--
ALTER TABLE `desarrollador`
  ADD PRIMARY KEY (`id_desarrollador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `desarrollador`
--
ALTER TABLE `desarrollador`
  MODIFY `id_desarrollador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
