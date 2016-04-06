-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2015 a las 15:53:01
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `adminserviweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arreglo`
--

CREATE TABLE IF NOT EXISTS `arreglo` (
  `idArreglo` int(11) NOT NULL,
  `nombreArreglo` varchar(45) DEFAULT NULL,
  `categoriaArreglo` varchar(45) DEFAULT NULL,
  `floresArreglo` varchar(45) DEFAULT NULL,
  `cantidadFlores` varchar(45) DEFAULT NULL,
  `formaArreglo` varchar(45) DEFAULT NULL,
  `adornoArreglo` varchar(45) DEFAULT NULL,
  `precioArreglo` varchar(45) DEFAULT NULL,
  `existenciaArreglo` int(11) DEFAULT NULL,
  `rutaImagen` varchar(45) DEFAULT NULL,
  `activo` varchar(2) DEFAULT NULL,
  `top` varchar(2) DEFAULT NULL,
  `existencia` int(11) DEFAULT NULL,
  PRIMARY KEY (`idArreglo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `arreglo`
--

INSERT INTO `arreglo` (`idArreglo`, `nombreArreglo`, `categoriaArreglo`, `floresArreglo`, `cantidadFlores`, `formaArreglo`, `adornoArreglo`, `precioArreglo`, `existenciaArreglo`, `rutaImagen`, `activo`, `top`, `existencia`) VALUES
(1001, 'Primavera', 'Dia de las madres', 'rosas', '20', 'corazon', 'moño rosa', '1500', 10, 'FloreriaVentas/inicio/Arreglos/10.jpg', 'si', 'si', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `idArreglo` int(11) NOT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `precio` varchar(45) DEFAULT NULL,
  `nombreArreglo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idArreglo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datocliente`
--

CREATE TABLE IF NOT EXISTS `datocliente` (
  `folio` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCliente` varchar(45) DEFAULT NULL,
  `apellidoCliente` varchar(45) DEFAULT NULL,
  `direccionCliente` varchar(45) DEFAULT NULL,
  `telefonoCliente` varchar(45) DEFAULT NULL,
  `emailCliente` varchar(45) DEFAULT NULL,
  `nombreTarjeta` varchar(45) DEFAULT NULL,
  `tipoTarjeta` varchar(45) DEFAULT NULL,
  `numeroTarjeta` varchar(45) DEFAULT NULL,
  `vigencia` varchar(45) DEFAULT NULL,
  `numVerificacionTarjeta` varchar(45) DEFAULT NULL,
  `nombreDestino` varchar(45) DEFAULT NULL,
  `apellidoDestino` varchar(45) DEFAULT NULL,
  `direccionDestino` varchar(45) DEFAULT NULL,
  `telefonoDestino` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`folio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `datocliente`
--

INSERT INTO `datocliente` (`folio`, `nombreCliente`, `apellidoCliente`, `direccionCliente`, `telefonoCliente`, `emailCliente`, `nombreTarjeta`, `tipoTarjeta`, `numeroTarjeta`, `vigencia`, `numVerificacionTarjeta`, `nombreDestino`, `apellidoDestino`, `direccionDestino`, `telefonoDestino`) VALUES
(1, '', '', NULL, '', '', '', 'Credito', '', '', '', '', '', '', ''),
(2, '', '', NULL, '', '', '', 'Credito', '', '', '', '', '', '', ''),
(3, '', '', NULL, '', '', '', 'Credito', '', '', '', '', '', '', ''),
(4, '', '', NULL, '', '', '', 'Credito', '', '', '', '', '', '', ''),
(5, '', '', NULL, '', '', '', 'Credito', '', '', '', '', '', '', ''),
(6, '', '', NULL, '', '', '', 'Credito', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoventa`
--

CREATE TABLE IF NOT EXISTS `datoventa` (
  `folio` int(11) NOT NULL AUTO_INCREMENT,
  `nombreArreglo` varchar(45) DEFAULT NULL,
  `costoUnit` varchar(45) DEFAULT NULL,
  `cantidadArreglo` varchar(45) DEFAULT NULL,
  `precioTotal` varchar(45) DEFAULT NULL,
  `fechaEntrega` varchar(45) DEFAULT NULL,
  `datoCliente_folio` int(11) NOT NULL,
  `repartidor_idRepartidor` int(11) NOT NULL,
  PRIMARY KEY (`folio`),
  KEY `fk_datoVenta_datoCliente1_idx` (`datoCliente_folio`),
  KEY `fk_datoVenta_repartidor1_idx` (`repartidor_idRepartidor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` varchar(15) NOT NULL,
  `nombreProducto` varchar(45) DEFAULT NULL,
  `tipoProducto` varchar(45) DEFAULT NULL,
  `costoCompraProducto` varchar(45) DEFAULT NULL,
  `existenciaProducto` int(11) DEFAULT NULL,
  `detalleProducto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `idProveedor` varchar(15) NOT NULL,
  `nombreEmpresa` varchar(45) DEFAULT NULL,
  `nombreProveedor` varchar(45) DEFAULT NULL,
  `apPaProveedor` varchar(45) DEFAULT NULL,
  `apMaProveedor` varchar(45) DEFAULT NULL,
  `telefonoProveedor` varchar(45) DEFAULT NULL,
  `correoProveedor` varchar(45) DEFAULT NULL,
  `direccionFiscal` varchar(45) DEFAULT NULL,
  `rfcProveedor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repartidor`
--

CREATE TABLE IF NOT EXISTS `repartidor` (
  `idRepartidor` int(11) NOT NULL,
  `nombreCompleto` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`idRepartidor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` varchar(10) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apPaterno` varchar(45) NOT NULL,
  `apMaterno` varchar(45) DEFAULT NULL,
  `tipoUsuario` varchar(45) NOT NULL,
  `nombreUsuario` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datoventa`
--
ALTER TABLE `datoventa`
  ADD CONSTRAINT `fk_datoVenta_datoCliente1` FOREIGN KEY (`datoCliente_folio`) REFERENCES `datocliente` (`folio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_datoVenta_repartidor1` FOREIGN KEY (`repartidor_idRepartidor`) REFERENCES `repartidor` (`idRepartidor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
