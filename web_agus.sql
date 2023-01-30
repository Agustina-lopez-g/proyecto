-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-01-2023 a las 13:51:01
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web_agus`
--
CREATE DATABASE IF NOT EXISTS `web_agus` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `web_agus`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `idBanner` int(11) NOT NULL,
  `tituloBanner` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `descripcionBanner` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `fotoBanner` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`idBanner`, `tituloBanner`, `descripcionBanner`, `fotoBanner`) VALUES
(1, 'Bienvenidos a Poupeé', 'Poupeé nace de la curiosidad por las texturas y formas. Es una técnica que se origina en Japón y consiste en tejer pequeños muñequitos con crochet.', 'img\\carousel\\carru11.jpg'),
(2, 'Tradición', 'Según la tradición japonesa cada Amigurumi posee un alma, el cual nos acompañará y sera nuestro confidente', 'img\\carousel\\carru13.jpg'),
(3, 'Amuleto', 'Los Amigurumis son usados como amuletos personales, representando un símbolo de apego o como un recordatorio de que estamos vivos.', 'img\\carousel\\carru14.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `idContacto` int(11) NOT NULL,
  `nombreContacto` varchar(1000) NOT NULL,
  `mailContacto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`idContacto`, `nombreContacto`, `mailContacto`) VALUES
(7, 'agus', 'aguslop@msn.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`idBanner`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`idContacto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `idBanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `idContacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
