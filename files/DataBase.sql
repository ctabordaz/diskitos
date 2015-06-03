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
  `titulo` varchar(50) NOT NULL
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
`consecutivo` int(4) NOT NULL,
  `compositor` varchar(60) NOT NULL,
  `duracion` varchar(10) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `album` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
  `correo` varchar(50) NOT NULL
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
-- Estructura de tabla para la tabla `edicion`
--

CREATE TABLE IF NOT EXISTS `edicion` (
  `codigo_de_barras` varchar(60) NOT NULL DEFAULT '',
  `formato` varchar(10) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `precio` bigint(10) NOT NULL,
  `album` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `edicion`
--

INSERT INTO `edicion` (`codigo_de_barras`, `formato`, `cantidad`, `precio`, `album`) VALUES
('1234', 'cd', 11, 39000, 23432),
('9876', 'lp', 4, 80000, 4345446);

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
  `tipo` varchar(1) NOT NULL
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
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE IF NOT EXISTS `envio` (
  `fecha` date NOT NULL,
  `pedido` int(10) NOT NULL,
  `edicion_barras` varchar(60) NOT NULL,
  `edicion_alb` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `envio`
--

INSERT INTO `envio` (`fecha`, `pedido`, `edicion_barras`, `edicion_alb`) VALUES
('2015-06-03', 34, '1234', 23432),
('2015-06-03', 34, '9876', 4345446);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
`codigo` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `precio` int(10) NOT NULL,
  `proveedor` varchar(30) NOT NULL,
  `empleado` bigint(14) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`codigo`, `fecha`, `precio`, `proveedor`, `empleado`) VALUES
(34, '2015-06-03', 316800, 'ACME - LACOSTE', 24);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
 ADD PRIMARY KEY (`nro_catalogo`);

--
-- Indices de la tabla `cancion`
--
ALTER TABLE `cancion`
 ADD PRIMARY KEY (`consecutivo`,`album`), ADD KEY `a_c` (`album`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `edicion`
--
ALTER TABLE `edicion`
 ADD PRIMARY KEY (`codigo_de_barras`,`album`), ADD KEY `a_e` (`album`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
 ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
 ADD PRIMARY KEY (`pedido`,`edicion_barras`,`edicion_alb`), ADD KEY `e_ea` (`edicion_alb`), ADD KEY `e_eb` (`edicion_barras`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
 ADD PRIMARY KEY (`codigo`), ADD KEY `a_em` (`empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cancion`
--
ALTER TABLE `cancion`
MODIFY `consecutivo` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cancion`
--
ALTER TABLE `cancion`
ADD CONSTRAINT `a_c` FOREIGN KEY (`album`) REFERENCES `album` (`nro_catalogo`);

--
-- Filtros para la tabla `edicion`
--
ALTER TABLE `edicion`
ADD CONSTRAINT `a_e` FOREIGN KEY (`album`) REFERENCES `album` (`nro_catalogo`);

--
-- Filtros para la tabla `envio`
--
ALTER TABLE `envio`
ADD CONSTRAINT `e_ea` FOREIGN KEY (`edicion_alb`) REFERENCES `edicion` (`album`),
ADD CONSTRAINT `e_eb` FOREIGN KEY (`edicion_barras`) REFERENCES `edicion` (`codigo_de_barras`),
ADD CONSTRAINT `p_en` FOREIGN KEY (`pedido`) REFERENCES `pedido` (`codigo`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
ADD CONSTRAINT `a_em` FOREIGN KEY (`empleado`) REFERENCES `empleado` (`cedula`);


CREATE TABLE empresa(
	nit VARCHAR(30) PRIMARY KEY,
	nombre VARCHAR(20) NOT NULL,
	telefono INT(7) NOT NULL,
	direccion VARCHAR(20) NOT NULL,
	correo VARCHAR(20) NOT NULL	

);

INSERT INTO empresa VALUES('A1','Diskitos',4913174,'cll 48 a #21','dikitos@dkt.com')

CREATE TABLE factura(
	codigo INT(30) PRIMARY KEY AUTO_INCREMENT,
	cajero INT(10) NOT NULL,
	CONSTRAINT c_f FOREIGN KEY(cajero) REFERENCES empleado(cedula)

);



CREATE TABLE encabezado(
	factura INT(30) PRIMARY KEY,
	fecha TIMESTAMP NOT NULL,
	cliente INT(10) NOT NULL,
	CONSTRAINT e_f FOREIGN KEY(factura) REFERENCES factura(codigo),
	CONSTRAINT c_e FOREIGN KEY(cliente) REFERENCES cliente(cedula)


);


CREATE TABLE detalle(
	factura INT(30) ,
	edicion INT(19) NOT NULL,
	cantidad INT(10) NOT NULL,
	PRIMARY KEY (factura, edicion);
	CONSTRAINT d_e FOREIGN KEY(edicion) REFERENCES edicion(codigo_de_barras),
	CONSTRAINT d_f FOREIGN KEY(factura) REFERENCES factura(codigo)
);



CREATE TABLE encargo (
	codigo BIGINT(20) PRIMARY KEY,
	fecha DATE NOT NULL,
	titulo_enc VARCHAR(30) NOT NULL,
	interprete_enc VARCHAR(30) NOT NULL,
	formato_enc VARCHAR(30) NOT NULL,
	cliente INT(15) NOT NULL,
	CONSTRAINT c_e FOREIGN KEY(cliente) REFERENCES cliente(cedula)


);