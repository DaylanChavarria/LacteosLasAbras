create database bdlasabras;
use bdlasabras;

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarEmpresa`(IN `atId_` INT(11), IN `atCorreo_` TEXT, IN `atDenominacion_` TEXT, IN `atDescripcionContactos_` TEXT, IN `atDescripcionGaleria_` TEXT, IN `atDescripcionProductoA_` TEXT, IN `atDireccion_` TEXT, IN `atElaboracion_` TEXT, IN `atElaboracionProductoB_` TEXT, IN `atEncargadoA_` TEXT, IN `atEncargadoB_` TEXT, IN `atHistoria_` TEXT, IN `atVision_` TEXT, IN `atMision_` TEXT, IN `atQuinesSomos_` TEXT, IN `atTelefonoA_` INT(11), IN `atTelefonoB_` INT(11), IN `atIdioma_` INT(11))
    NO SQL
Update la_empresa Set 
atCorreo = atCorreo_,
atDenominacion = atDenominacion_,
atDescripcionContactos = atDescripcionContactos_,
atDescripcionGaleria = atDescripcionGaleria_,
atDescripcionProductoA = atDescripcionProductoA_,
atDireccion = atDireccion_,
atElaboracion = atElaboracion_,
atElaboracionProductoB = atElaboracionProductoB_,
atEncargadoA = atEncargadoA_,
atEncargadoB = atEncargadoB_,
atHistoria = atHistoria_,
atVision = atVision_,
atMision = atMision_,
atQuinesSomos = atQuinesSomos_,
atTelefonoA = atTelefonoA_,
atTelefonoB = atTelefonoB_ 

WHERE atIdioma = atIdioma_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarProducto`(IN `atNombre_` TEXT, IN `atPrecio_` INT, IN `atDescripcion_` TEXT, IN `atIdioma_` INT, IN `atcodigoProducto_` INT)
    NO SQL
Update la_productos Set 
atNombre = atNombre_, atPrecio = atPrecio_, atDescripcion = atDescripcion_ where atIdioma = atIdioma_ AND atcodigoProducto = atCodigoProducto_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarProducto`(IN `atId_` INT, IN `atNombre_` TEXT, IN `atPrecio_` INT, IN `atDescripcion_` TEXT, IN `atIdioma_` INT, IN `codigoProducto_` INT)
    NO SQL
INSERT INTO la_productos VALUES (null, atNombre_, atPrecio_, atDescripcion_, atIdioma_,codigoProducto_)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerTodosProductos`(IN `atIdioma_` INT)
    NO SQL
select * from la_productos where atIdioma = atIdioma_$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `la_empresa`
--

CREATE TABLE IF NOT EXISTS `la_empresa` (
`atId` int(11) NOT NULL,
  `atHistoria` text NOT NULL,
  `atQuinesSomos` text,
  `atDescripcionGaleria` text NOT NULL,
  `atElaboracion` text NOT NULL,
  `atDescripcionProductoA` text NOT NULL,
  `atElaboracionProductoB` text NOT NULL,
  `atDenominacion` text NOT NULL,
  `atDescripcionContactos` text NOT NULL,
  `atDireccion` text NOT NULL,
  `atCorreo` text NOT NULL,
  `atTelefonoA` int(11) NOT NULL,
  `atTelefonoB` int(11) NOT NULL,
  `atEncargadoA` text NOT NULL,
  `atEncargadoB` text NOT NULL,
  `atMision` text NOT NULL,
  `atVision` text NOT NULL,
  `atIdioma` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `la_empresa`
--

INSERT INTO `la_empresa` (`atId`, `atHistoria`, `atQuinesSomos`, `atDescripcionGaleria`, `atElaboracion`, `atDescripcionProductoA`, `atElaboracionProductoB`, `atDenominacion`, `atDescripcionContactos`, `atDireccion`, `atCorreo`, `atTelefonoA`, `atTelefonoB`, `atEncargadoA`, `atEncargadoB`, `atMision`, `atVision`, `atIdioma`) VALUES
(1, 'es', 'es', 'es', 'es', 'es', 'es', 'es', 'es', 'es', 'es', 123, 123, 'es', 'es', 'es', 'es', 0),
(3, 'in', 'in2', 'in', 'in', 'in', 'es', 'es', 'in', 'es', 'es', 1234, 1236, 'es', 'es', 'es', 'es', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `la_galeria`
--

CREATE TABLE IF NOT EXISTS `la_galeria` (
  `atId` int(11) NOT NULL,
  `atNombre` text NOT NULL,
  `atDescripcion` text NOT NULL,
  `atIdioma` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `la_galeria`
--

INSERT INTO `la_galeria` (`atId`, `atNombre`, `atDescripcion`, `atIdioma`) VALUES
(1, 'imagen1', 'hermosa', 0),
(2, 'image1', 'beatiful', 1),
(3, 'imagen2', 'hermosa', 0),
(4, 'image2', 'beatiful', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `la_imagen`
--

CREATE TABLE IF NOT EXISTS `la_imagen` (
  `atId` int(11) NOT NULL,
  `atNombre` text NOT NULL,
  `atTipo` int(11) NOT NULL -- PRODUCTOS
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `la_imagen`
--

INSERT INTO `la_imagen` (`atId`, `atNombre`, `atTipo`) VALUES
(1, 'imagen1', 0),
(2, 'image2', 1),
(3, 'imagen3', 0),
(4, 'image4', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `la_productos`
--

CREATE TABLE IF NOT EXISTS `la_productos` (
  `atId` int(11) NOT NULL,
  `atNombre` text NOT NULL,
  `atPrecio` int(11) NOT NULL,
  `atDescripcion` text NOT NULL,
  `atIdioma` int(11) NOT NULL,
  `atcodigoProducto` int(11) NOT NULL,
  `atNombreImagen` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `la_productos`
--

INSERT INTO `la_productos` (`atId`, `atNombre`, `atPrecio`, `atDescripcion`, `atIdioma`, `atcodigoProducto`,  `atNombreImagen`) VALUES
(1, 'Producto 1', 500, 'Calidad', 0, 0,'abc'),
(2, 'Product 1', 500, 'Quality', 1, 0,'abc'),
(13, 'nombre español', 1250, 'descripcion español', 0, 1,'abc'),
(14, 'nombre en ingles', 1250, 'descri ingles', 1, 1,'sd'),
(15, 'hjgfd', 1111, 'nomen', 0, 2,'ds'),
(16, 'nomin', 1111, 'descri in', 1, 2,'ds');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `la_titulos`
--

CREATE TABLE IF NOT EXISTS `la_titulos` (
`atId` int(11) NOT NULL,
  `atNombre` text NOT NULL,
  `atDescripcion` text NOT NULL,
  `atIdioma` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `la_titulos`
--

INSERT INTO `la_titulos` (`atId`, `atNombre`, `atDescripcion`, `atIdioma`) VALUES
(1, 'boton de inicio', 'inicio', 0),
(2, 'boton de inicio', 'home', 1),
(3, 'boton de contacto', 'contactenos', 0),
(4, 'boton de contacto', 'call me', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `la_empresa`
--
ALTER TABLE `la_empresa`
 ADD PRIMARY KEY (`atId`);

--
-- Indices de la tabla `la_galeria`
--
ALTER TABLE `la_galeria`
 ADD PRIMARY KEY (`atId`);

--
-- Indices de la tabla `la_imagen`
--
ALTER TABLE `la_imagen`
 ADD PRIMARY KEY (`atId`);

--
-- Indices de la tabla `la_productos`
--
ALTER TABLE `la_productos`
 ADD PRIMARY KEY (`atId`);

--
-- Indices de la tabla `la_titulos`
--
ALTER TABLE `la_titulos`
 ADD PRIMARY KEY (`atId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `la_empresa`
--
ALTER TABLE `la_empresa`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `la_galeria`
--
ALTER TABLE `la_galeria`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `la_imagen`
--
ALTER TABLE `la_imagen`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `la_productos`
--
ALTER TABLE `la_productos`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `la_titulos`
--
ALTER TABLE `la_titulos`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;