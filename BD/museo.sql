-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2023 a las 01:17:39
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `museo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriasgenerales`
--

CREATE TABLE `categoriasgenerales` (
  `idCategorias` int(11) NOT NULL,
  `NombreCategoria` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoriasgenerales`
--

INSERT INTO `categoriasgenerales` (`idCategorias`, `NombreCategoria`, `Descripcion`) VALUES
(0, 'Historia Natural.', 'El término \"historia natural\" por sí solo, o '),
(1, 'Arte', 'El arte (del latín ars, artis, y este calco d'),
(2, 'Arqueológico', 'La arqueología es la ciencia que estudia, des'),
(3, 'Monográfico', 'Una monografía (del griego mono, \'único\' y gr'),
(4, 'Histórico', NULL),
(5, 'Ciencia y Técnica', NULL),
(6, 'Agricultura y productos del suelo', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donantes`
--

CREATE TABLE `donantes` (
  `idDonante` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `dni` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `donantes`
--

INSERT INTO `donantes` (`idDonante`, `nombre`, `apellido`, `telefono`, `dni`) VALUES
(1, 'nestor', 'fernandez', '3408468510', '41365987');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piezas`
--

CREATE TABLE `piezas` (
  `idpiezas` int(11) NOT NULL,
  `nombreDePiezas` varchar(45) DEFAULT NULL,
  `cantidad` double DEFAULT NULL,
  `FechaDeIngreso` date DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `CategoriasGenerales_idCategorias` int(11) NOT NULL,
  `SubCategorias_idSubCategorias` int(11) NOT NULL,
  `usuarios_idusuario` int(11) NOT NULL,
  `idDonante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `piezas`
--

INSERT INTO `piezas` (`idpiezas`, `nombreDePiezas`, `cantidad`, `FechaDeIngreso`, `Descripcion`, `CategoriasGenerales_idCategorias`, `SubCategorias_idSubCategorias`, `usuarios_idusuario`, `idDonante`) VALUES
(2, 'root', 1, '2023-10-09', 'Cuernos de minotauro', 4, 1, 1, 1),
(3, 'cuerno de unicornio', 2, '2023-10-01', 'grandes guampas', 5, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `idSubCategorias` int(11) NOT NULL,
  `NombreSubCategoria` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`idSubCategorias`, `NombreSubCategoria`, `Descripcion`) VALUES
(1, 'root', 'rooteado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `fechaAlta` date DEFAULT NULL,
  `tipoDeUsuario` varchar(45) DEFAULT NULL,
  `clave` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `dni`, `nombre`, `apellido`, `correo`, `fechaAlta`, `tipoDeUsuario`, `clave`) VALUES
(1, '43766375', 'tiago', 'raminelli', 'tiagoraminelli@gmail.com', '2023-10-01', 'administrador', 'pepito123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoriasgenerales`
--
ALTER TABLE `categoriasgenerales`
  ADD PRIMARY KEY (`idCategorias`);

--
-- Indices de la tabla `donantes`
--
ALTER TABLE `donantes`
  ADD PRIMARY KEY (`idDonante`);

--
-- Indices de la tabla `piezas`
--
ALTER TABLE `piezas`
  ADD PRIMARY KEY (`idpiezas`),
  ADD KEY `fk_piezas_CategoriasGenerales_idx` (`CategoriasGenerales_idCategorias`),
  ADD KEY `fk_piezas_SubCategorias1_idx` (`SubCategorias_idSubCategorias`),
  ADD KEY `fk_piezas_usuarios1_idx` (`usuarios_idusuario`),
  ADD KEY `idDonante` (`idDonante`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`idSubCategorias`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `donantes`
--
ALTER TABLE `donantes`
  MODIFY `idDonante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `piezas`
--
ALTER TABLE `piezas`
  MODIFY `idpiezas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `idSubCategorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `piezas`
--
ALTER TABLE `piezas`
  ADD CONSTRAINT `fk_piezas_CategoriasGenerales` FOREIGN KEY (`CategoriasGenerales_idCategorias`) REFERENCES `categoriasgenerales` (`idCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_piezas_SubCategorias1` FOREIGN KEY (`SubCategorias_idSubCategorias`) REFERENCES `subcategorias` (`idSubCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_piezas_usuarios1` FOREIGN KEY (`usuarios_idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `piezas_ibfk_1` FOREIGN KEY (`idDonante`) REFERENCES `donantes` (`idDonante`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
