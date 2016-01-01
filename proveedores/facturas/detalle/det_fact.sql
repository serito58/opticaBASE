-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-08-2013 a las 11:35:40
-- Versión del servidor: 5.5.32-0ubuntu0.13.04.1
-- Versión de PHP: 5.4.9-4ubuntu2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `optica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `det_fact`
--

CREATE TABLE IF NOT EXISTS `det_fact` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `flia` int(11) NOT NULL,
  `cant` int(11) NOT NULL,
  `producto` varchar(255) NOT NULL,
  `multi` float NOT NULL,
  `id_factura` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `itemlista` varchar(11) NOT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `det_fact`
--

INSERT INTO `det_fact` (`id_item`, `flia`, `cant`, `producto`, `multi`, `id_factura`, `id_proveedor`, `itemlista`) VALUES
(24, 1, 2, 'URBAN', 1.11111, 12, 2, '361'),
(23, 6, 2, 'MARILYN', 2.125, 12, 2, '244');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
