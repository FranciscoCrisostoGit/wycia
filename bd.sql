-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2021 a las 13:07:07
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wyciacl_webinar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

DROP TABLE IF EXISTS `invitados`;
CREATE TABLE IF NOT EXISTS `invitados` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `correo_electronico` varchar(250) NOT NULL,
  `webinar` varchar(250) NOT NULL,
  `fechas_webinar` varchar(250) NOT NULL,
  `creado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `invitados`
--

INSERT INTO `invitados` (`id`, `nombre`, `correo_electronico`, `webinar`, `fechas_webinar`, `creado`) VALUES
(2, 'Francisco Crisosto', 'crisostofrancisco@gmail.com', 'Ingresado desde el fomulario', 'Ingresado desde el formulario', '2021-04-23 17:20:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
