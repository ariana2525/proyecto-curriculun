-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-02-2016 a las 12:53:32
-- Versión del servidor: 5.5.46-0ubuntu0.14.04.2
-- Versión de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `app_ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE IF NOT EXISTS `juegos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `año_creacion` year(4) NOT NULL,
  `creador` varchar(150) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `nombre`, `descripcion`, `año_creacion`, `creador`, `add_date`, `estado`) VALUES
(1, 'Singularity', 'Es un nombre que ha sonado con fuerza estos últimos días. El trabajo de Raven Software, lleno de secretismo durante meses y meses, por fin ha visto la luz al final del túnel. El resultado es el de un juego de acción en primera persona que intenta diferenciarse de los reyes del género. Y también de t', 2010, 'Activision', '2016-02-03 16:09:58', 1),
(2, 'Fallout 1 ', 'Tiene lugar en el año 2161 en el sur de California en unos Estados Unidos que se han visto envueltos en una guerra nuclear mundial, lo que ha degenerado en un mundo post-apocalíptico al mejor estilo Mad Max. El protagonista es un habitante de uno de los bunkers anti-nucleares (conocidos como Vaults)', 1997, 'Interplay Productions', '2016-02-03 16:11:04', 1),
(3, 'The Last Of Us', 'Videojuego de acción con tintes de survival horror que nos presenta un escenario en el que la población ha sido diezmada por una terrible plaga. Los supervivientes se están matando entre sí por la comida y las armas. Joel, y Ellie un valiente adolescente, deberán colaborar si quieren sobrevivir en u', 2013, 'Naughty Dog', '2016-02-03 16:11:04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE IF NOT EXISTS `platos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`id`, `nombre`, `descripcion`, `precio`, `stock`, `fecha`, `estado`) VALUES
(1, 'lomo saltado', '', 15, 5, '2016-02-03 17:28:17', 1),
(2, 'causa rellena', '', 5, 15, '2016-02-03 17:28:17', 1),
(3, 'ceviche', '', 20, 10, '2016-02-03 17:33:25', 1),
(4, 'tacu tacu', '', 10, 4, '2016-02-03 17:33:25', 1),
(5, 'estofado de pollo', '', 7, 15, '2016-02-03 17:33:25', 1),
(6, 'picarones', '', 5, 20, '2016-02-03 17:33:25', 1),
(7, 'anticuchos', '', 5, 25, '2016-02-03 17:33:25', 1),
(8, 'cuy chactado', '', 30, 5, '2016-02-03 17:36:02', 1),
(9, 'mazomorra morada', '', 3, 20, '2016-02-03 17:36:02', 1),
(10, 'arroz con leche', '', 3, 20, '2016-02-03 17:36:02', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
