-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2017 a las 21:20:45
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdlasabras`
--

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

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarGaleria`(IN `atNombre_` TEXT, IN `atDescripcion_` TEXT, IN `atIdioma_` INT, IN `atcodigoImagen_` INT)
    NO SQL
Update la_galeria Set atNombre = atNombre_, atDescripcion = atDescripcion_ where atIdioma = atIdioma_ AND atcodigoProducto = atCodigoProducto_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarProducto`(IN `atNombre_` TEXT, IN `atPrecio_` INT, IN `atDescripcion_` TEXT, IN `atIdioma_` INT, IN `atcodigoProducto_` INT, IN `atNombreImagen_` TEXT)
    NO SQL
Update la_productos Set 
atNombre = atNombre_, atPrecio = atPrecio_, atDescripcion = atDescripcion_, atNombreImagen=atNombreImagen_ where atIdioma = atIdioma_ AND atcodigoProducto = atCodigoProducto_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarImagenDeInicio`(IN `atId_` INT)
    NO SQL
DELETE FROM `la_imagen` WHERE atId=atId_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarImagenGaleria`(IN `atId_` INT)
    NO SQL
delete from la_galeria where atcodigoImagen = atId_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarProducto`(IN `atId_` INT)
    NO SQL
delete from la_productos where atcodigoProducto=atId_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `IngresarImagenDeInicio`(IN `atNombre_` TEXT, IN `atTipo_` INT)
    NO SQL
INSERT INTO `la_imagen` VALUES(NULL, atNombre_,atTipo_)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `IngresarImagenEnGaleria`(IN `atNombre_` TEXT, IN `atDescripcion_` TEXT, IN `atTipo_` INT, IN `atCodigoImagen_` INT)
    NO SQL
INSERT INTO `la_galeria` VALUES(NULL, atNombre_,atDescripcion_,atTipo_,atCodigoImagen_)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarProducto`(IN `atId_` INT, IN `atNombre_` TEXT, IN `atPrecio_` INT, IN `atDescripcion_` TEXT, IN `atIdioma_` INT, IN `codigoProducto_` INT, IN `atNombreImagen` TEXT)
    NO SQL
INSERT INTO la_productos VALUES (0, atNombre_, atPrecio_, atDescripcion_, atIdioma_,codigoProducto_,atNombreImagen)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerImagenesInicio`(IN `atTipo_` INT)
    NO SQL
select * from la_imagen where atTipo = atTipo_$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerTodosGaleria`(IN `atIdioma_` INT)
    NO SQL
IF(atIdioma_ = -1)THEN
        select * from la_galeria ;
    ELSE
       select * from la_galeria where atIdioma = atIdioma_;
    end if$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerTodosProductos`(IN `atIdioma_` INT)
    NO SQL
IF(atIdioma_ = -1)THEN
        select * from la_productos ;


    ELSE


       select * from la_productos where atIdioma = atIdioma_;

    end if$$

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
  `atIdioma` int(11) NOT NULL,
  `atcodigoImagen` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `la_imagen`
--

CREATE TABLE IF NOT EXISTS `la_imagen` (
`atId` int(11) NOT NULL,
  `atNombre` text NOT NULL,
  `atTipo` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `la_productos`
--

INSERT INTO `la_productos` (`atId`, `atNombre`, `atPrecio`, `atDescripcion`, `atIdioma`, `atcodigoProducto`, `atNombreImagen`) VALUES
(1, 'aAaAaxsxs', 32323, 'qewewe', 0, 1, 'Penguins.jpg'),
(2, 'qwewe', 32323, 'qewew', 1, 1, 'Penguins.jpg'),
(5, 's', 1231312, 's', 0, 2, '2.jpg'),
(6, 's', 1231312, 's', 1, 2, '2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `la_titulos`
--

CREATE TABLE IF NOT EXISTS `la_titulos` (
`atId` int(11) NOT NULL,
  `atNombre` text NOT NULL,
  `atDescripcion` text NOT NULL,
  `atIdioma` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `la_titulos`
--

INSERT INTO `la_titulos` (`atId`, `atNombre`, `atDescripcion`, `atIdioma`) VALUES
(1, 'Inicio', 'Botón', 0),
(2, 'Acerca de', 'Botón', 0),
(3, 'Galería', 'Botón', 0),
(4, 'Productos', 'Botón', 0),
(5, 'Contáctenos', 'Botón', 0),
(6, 'Localización', 'Botón', 0),
(7, 'Idiomas', 'Botón', 0),
(8, 'Español', 'Botón', 0),
(9, 'Inglés', 'Botón', 0),
(10, 'Enviar Mensaje', 'Botón', 0),
(11, 'Historia', 'Título', 0),
(12, '¿Quiénes somos?', 'Título', 0),
(13, 'Galería', 'Título', 0),
(14, 'Nuestros Productos', 'Título', 0),
(15, 'Quesos y otros productos', 'Título', 0),
(16, 'Denominación de origen', 'Título', 0),
(17, 'Contáctenos', 'Título', 0),
(18, 'Para cualquier consulta', 'Título', 0),
(19, 'Ver Productos', 'Botón', 0),
(20, 'Home', 'Button', 1),
(21, 'About', 'Button', 1),
(22, 'Gallery', 'Button', 1),
(23, 'Products', 'Button', 1),
(24, 'Contact Us', 'Button', 1),
(25, 'Location', 'Button', 1),
(26, 'Languages', 'Button', 1),
(27, 'Spanish', 'Button', 1),
(28, 'English', 'Button', 1),
(29, 'Send message', 'Button', 1),
(30, 'History', 'Title', 1),
(31, 'About us?', 'Title', 1),
(32, 'Gallery', 'Title', 1),
(33, 'Our products', 'Title', 1),
(34, 'Cheeses and other products', 'Title', 1),
(35, 'Denomination of origin', 'Title', 1),
(36, 'Contact Us', 'Title', 1),
(37, 'For any query', 'Title', 1),
(38, 'See products', 'Button', 1);

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
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `la_imagen`
--
ALTER TABLE `la_imagen`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `la_productos`
--
ALTER TABLE `la_productos`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `la_titulos`
--
ALTER TABLE `la_titulos`
MODIFY `atId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
