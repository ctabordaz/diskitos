-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2015 a las 18:16:23
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `work`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `nro_catalogo` int(5) NOT NULL DEFAULT '0',
  `ano_publicacion` int(4) NOT NULL,
  `caratula` varchar(120) NOT NULL,
  `disquera` varchar(60) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `interprete` varchar(50) NOT NULL,
  `pais_origen` varchar(50) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  PRIMARY KEY (`nro_catalogo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `album`
--

INSERT INTO `album` (`nro_catalogo`, `ano_publicacion`, `caratula`, `disquera`, `genero`, `interprete`, `pais_origen`, `titulo`) VALUES
(23432, 2015, './images/caratulas/Rebel.png', 'Universal', 'Pop', 'Madonna', 'Colombia', 'Rebel Heart'),
(4345446, 2012, './images/caratulas/sin_caratula.gif', 'Universal', 'Rock', 'The Killers', 'USA', 'Battleborn');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE IF NOT EXISTS `cancion` (
  `consecutivo` int(4) NOT NULL AUTO_INCREMENT,
  `compositor` varchar(60) NOT NULL,
  `duracion` varchar(10) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `album` int(5) NOT NULL,
  PRIMARY KEY (`consecutivo`,`album`),
  KEY `a_c` (`album`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cancion`
--

INSERT INTO `cancion` (`consecutivo`, `compositor`, `duracion`, `nombre`, `album`) VALUES
(4, 'Madonna', '4:23', 'Living for Love', 23432),
(5, 'Madonna', '3:25', 'Bitch Im Madonna', 23432),
(6, 'Madonna', '3:25', 'Ghosttown', 23432),
(7, 'Brandon Flowers', '4:22', 'Battleborn', 4345446),
(8, 'Ronnie V', '3:10', 'Just Another Girl', 4345446);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cedula` int(15) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `telefono` int(15) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cedula`, `nombre`, `telefono`, `direccion`, `correo`) VALUES
(12, 'Ayrton', 7631, 'D1-B6', 'ayrton@unal.edu.co'),
(66, 'Gloria Giraldo', 23456, 'Call 49b ', 'gl@unal.edu.co'),
(99, 'Juan', 879, 'jashs698', 'jhs@jahk.asj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE IF NOT EXISTS `detalle` (
  `factura` int(30) NOT NULL DEFAULT '0',
  `edicion` varchar(60) NOT NULL,
  `cantidad` int(10) NOT NULL,
  PRIMARY KEY (`factura`,`edicion`),
  KEY `d_e` (`edicion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edicion`
--

CREATE TABLE IF NOT EXISTS `edicion` (
  `codigo_de_barras` varchar(60) NOT NULL DEFAULT '',
  `formato` varchar(10) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `precio` bigint(10) NOT NULL,
  `album` int(5) NOT NULL,
  PRIMARY KEY (`codigo_de_barras`,`album`),
  KEY `a_e` (`album`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `edicion`
--

INSERT INTO `edicion` (`codigo_de_barras`, `formato`, `cantidad`, `precio`, `album`) VALUES
('1234', 'cd', 11, 39000, 23432),
('9876', 'lp', 7, 80000, 4345446);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `cedula` bigint(14) NOT NULL DEFAULT '0',
  `contraseña` varchar(200) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `salario` bigint(10) NOT NULL,
  `telefono` bigint(12) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`cedula`, `contraseña`, `correo`, `nombre`, `salario`, `telefono`, `tipo`) VALUES
(24, '$2y$10$WSX1NWrW3nCBFCCO05DLuuNM1dvQaFB/vSqjiJPsbisqP0mrOfTii', 'a@unal', 'Alex', 892398, 86, 'A'),
(42, '$2y$10$WSX1NWrW3nCBFCCO05DLuuNM1dvQaFB/vSqjiJPsbisqP0mrOfTii', 'hhja@jsdks', 'Luka', 7489, 7889, 'C'),
(67, '$2a$08$GHWTIE40rwuNfvmZD60GW.z/fBPXVL3Uz01de2j0FoxRmxqC4.Dkq', 'cr@unal.edu.co', 'Cristian', 3000, 3454, 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `nit` varchar(30) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `telefono` int(7) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  PRIMARY KEY (`nit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encabezado`
--

CREATE TABLE IF NOT EXISTS `encabezado` (
  `factura` int(30) NOT NULL,
  `fecha` timestamp NOT NULL,
  `cliente` int(15) NOT NULL,
  PRIMARY KEY (`factura`),
  KEY `c_e` (`cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargo`
--

CREATE TABLE IF NOT EXISTS `encargo` (
  `codigo` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `titulo_enc` varchar(30) NOT NULL,
  `interprete_enc` varchar(30) NOT NULL,
  `formato_enc` varchar(30) NOT NULL,
  `cliente` int(15) NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `cc_e` (`cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE IF NOT EXISTS `envio` (
  `fecha` date NOT NULL,
  `pedido` int(10) NOT NULL,
  `edicion_barras` varchar(60) NOT NULL,
  `edicion_alb` int(5) NOT NULL,
  PRIMARY KEY (`pedido`,`edicion_barras`,`edicion_alb`),
  KEY `e_ea` (`edicion_alb`),
  KEY `e_eb` (`edicion_barras`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `envio`
--

INSERT INTO `envio` (`fecha`, `pedido`, `edicion_barras`, `edicion_alb`) VALUES
('2015-06-03', 34, '1234', 23432),
('2015-06-03', 34, '9876', 4345446),
('2015-06-03', 35, '1234', 23432),
('2015-06-03', 35, '9876', 4345446);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `codigo` int(30) NOT NULL AUTO_INCREMENT,
  `cajero` bigint(14) NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `c_f` (`cajero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `codigo` int(10) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `precio` int(10) NOT NULL,
  `proveedor` varchar(30) NOT NULL,
  `empleado` bigint(14) NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `a_em` (`empleado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`codigo`, `fecha`, `precio`, `proveedor`, `empleado`) VALUES
(34, '2015-06-03', 316800, 'ACME - LACOSTE', 24),
(35, '2015-06-03', 412000, 'Universal - Universal', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `user` varchar(10) NOT NULL,
  `password` varchar(72) NOT NULL,
  `type` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `user`, `password`, `type`, `email`) VALUES
(1, 'Admin', 'admin', '$2a$08$JXN.kcP2K0nkK2Ke0QrXZOgcYd75O74JvXaJKdwKq8LMAMYuNTB8W', 'admin', 'zzzexample@example.com'),
(2, 'Jorge', 'jorge', '$2a$08$tt9Nr5DyMUdyWMbD2M0/k.MYUie3TYekrvbtPNQH1cuvMyTjhOxv.', 'user', 'zzzexample2@example.com');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD CONSTRAINT `a_c` FOREIGN KEY (`album`) REFERENCES `album` (`nro_catalogo`);

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `d_e` FOREIGN KEY (`edicion`) REFERENCES `edicion` (`codigo_de_barras`),
  ADD CONSTRAINT `d_f` FOREIGN KEY (`factura`) REFERENCES `factura` (`codigo`);

--
-- Filtros para la tabla `edicion`
--
ALTER TABLE `edicion`
  ADD CONSTRAINT `a_e` FOREIGN KEY (`album`) REFERENCES `album` (`nro_catalogo`);

--
-- Filtros para la tabla `encabezado`
--
ALTER TABLE `encabezado`
  ADD CONSTRAINT `e_f` FOREIGN KEY (`factura`) REFERENCES `factura` (`codigo`),
  ADD CONSTRAINT `c_e` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`cedula`);

--
-- Filtros para la tabla `encargo`
--
ALTER TABLE `encargo`
  ADD CONSTRAINT `cc_e` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`cedula`);

--
-- Filtros para la tabla `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `e_ea` FOREIGN KEY (`edicion_alb`) REFERENCES `edicion` (`album`),
  ADD CONSTRAINT `e_eb` FOREIGN KEY (`edicion_barras`) REFERENCES `edicion` (`codigo_de_barras`),
  ADD CONSTRAINT `p_en` FOREIGN KEY (`pedido`) REFERENCES `pedido` (`codigo`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `c_f` FOREIGN KEY (`cajero`) REFERENCES `empleado` (`cedula`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `a_em` FOREIGN KEY (`empleado`) REFERENCES `empleado` (`cedula`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
