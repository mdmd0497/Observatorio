-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2021 a las 19:19:59
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `observatorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idAdministrador` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idAdministrador`, `nombre`, `apellido`, `correo`, `clave`, `foto`, `telefono`, `celular`, `estado`) VALUES
(1, 'Admin', 'Admin', 'admin@udistrital.edu.co', '202cb962ac59075b964b07152d234b70', NULL, '123', '123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultura_investigativa`
--

CREATE TABLE `cultura_investigativa` (
  `idCultura_investigativa` int(11) NOT NULL,
  `variable` text DEFAULT NULL,
  `calificacion` double DEFAULT NULL,
  `grupo_de_investigacion_idGrupo_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cultura_investigativa`
--

INSERT INTO `cultura_investigativa` (`idCultura_investigativa`, `variable`, `calificacion`, `grupo_de_investigacion_idGrupo_de_investigacion`) VALUES
(1, '<p><span data-sheets-value=\"{\"1\":2,\"2\":\"El manejo de Herramientas para I+D es\"}\" data-sheets-userformat=\"{\"2\":9149,\"3\":{\"1\":0},\"5\":{\"1\":[{\"1\":2,\"2\":0,\"5\":{\"1\":2,\"2\":0}},{\"1\":0,\"2\":0,\"3\":3},{\"1\":1,\"2\":0,\"4\":1}]},\"6\":{\"1\":[{\"1\":2,\"2\":0,\"5\":{\"1\":2,\"2\":0}},{\"1\":0,\"2\":0,\"3\":3},{\"1\":1,\"2\":0,\"4\":1}]},\"7\":{\"1\":[{\"1\":2,\"2\":0,\"5\":{\"1\":2,\"2\":0}},{\"1\":0,\"2\":0,\"3\":3},{\"1\":1,\"2\":0,\"4\":1}]},\"8\":{\"1\":[{\"1\":2,\"2\":0,\"5\":{\"1\":2,\"2\":0}},{\"1\":0,\"2\":0,\"3\":3},{\"1\":1,\"2\":0,\"4\":1}]},\"10\":1,\"11\":4,\"12\":0,\"16\":11}\" style=\"font-size: 11pt; font-family: Arial;\">El manejo de Herramientas para I+D es</span><br></p>', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas_centros_investigacion`
--

CREATE TABLE `empresas_centros_investigacion` (
  `idEmpresas_centros_investigacion` int(11) NOT NULL,
  `variable` text DEFAULT NULL,
  `calificacion` double DEFAULT NULL,
  `grupo_de_investigacion_idGrupo_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `explotacion_base_tecnologica`
--

CREATE TABLE `explotacion_base_tecnologica` (
  `idExplotacion_base_tecnologica` int(11) NOT NULL,
  `variable` text DEFAULT NULL,
  `calificacion` double DEFAULT NULL,
  `grupo_de_investigacion_idGrupo_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `financiacion`
--

CREATE TABLE `financiacion` (
  `idFinanciacion` int(11) NOT NULL,
  `variable` text DEFAULT NULL,
  `calificacion` double DEFAULT NULL,
  `grupo_de_investigacion_idGrupo_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_del_conocimiento`
--

CREATE TABLE `gestion_del_conocimiento` (
  `idGestion_del_conocimiento` int(11) NOT NULL,
  `variable` text DEFAULT NULL,
  `calificacion` double DEFAULT NULL,
  `grupo_de_investigacion_idGrupo_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_de_investigacion`
--

CREATE TABLE `grupo_de_investigacion` (
  `idGrupo_de_investigacion` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `Clasificacion` text DEFAULT NULL,
  `Lider` text DEFAULT NULL,
  `Area` text DEFAULT NULL,
  `Pagina_web` varchar(200) DEFAULT NULL,
  `state` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupo_de_investigacion`
--

INSERT INTO `grupo_de_investigacion` (`idGrupo_de_investigacion`, `nombre`, `apellido`, `correo`, `clave`, `foto`, `Clasificacion`, `Lider`, `Area`, `Pagina_web`, `state`) VALUES
(1, 'metis', 'a', '1@g.com', 'c4ca4238a0b923820dcc509a6f75849b', '', '<p>A</p>', '<p>juan guevara</p>', '<p>educación</p>', 'http://www1.udistrital.edu.co:8080/web/unidad-de-investigaciones-de-la-facultad-tecnologica/metis', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inversion`
--

CREATE TABLE `inversion` (
  `idInversion` int(11) NOT NULL,
  `variable` text DEFAULT NULL,
  `calificacion` double DEFAULT NULL,
  `grupo_de_investigacion_idGrupo_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logadministrador`
--

CREATE TABLE `logadministrador` (
  `idLogAdministrador` int(11) NOT NULL,
  `accion` varchar(45) NOT NULL,
  `informacion` text NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `ip` varchar(45) NOT NULL,
  `so` varchar(45) NOT NULL,
  `explorador` varchar(45) NOT NULL,
  `administrador_idAdministrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `logadministrador`
--

INSERT INTO `logadministrador` (`idLogAdministrador`, `accion`, `informacion`, `fecha`, `hora`, `ip`, `so`, `explorador`, `administrador_idAdministrador`) VALUES
(1, 'Log In', '', '2021-02-15', '17:49:31', '::1', 'WINNT', 'Chrome', 1),
(2, 'Log In', '', '2021-02-15', '18:26:11', '::1', 'WINNT', 'Chrome', 1),
(5, 'Log In', '', '2021-02-15', '18:40:32', '::1', 'WINNT', 'Chrome', 1),
(6, 'Log In', '', '2021-02-16', '12:19:36', '::1', 'WINNT', 'Chrome', 1),
(7, 'Crear Grupo_de_investigacion', 'Nombre: metis; Apellido: a; Correo: 1@g.com; Clave: 1; Clasificacion: <p>A</p>; Lider: <p>juan guevara</p>; Area: <p>educación</p>; Pagina_web: http://www1.udistrital.edu.co:8080/web/unidad-de-investigaciones-de-la-facultad-tecnologica/metis; State: 1', '2021-02-16', '12:20:59', '::1', 'WINNT', 'Chrome', 1),
(8, 'Crear Pc', 'Indicador: <p>coohesion</p>; Abreviatura: <p>CH</p>; Valor_maximo: 3.2; Valor_indicador: 3.2; Grupo_de_investigacion: metis a <p>A</p> <p>juan guevara</p> <p>educación</p> http://www1.udistrital.edu.co:8080/web/unidad-de-investigaciones-de-la-facultad-tecnologica/metis', '2021-02-16', '12:21:29', '::1', 'WINNT', 'Chrome', 1),
(9, 'Log In', '', '2021-02-16', '12:31:52', '::1', 'WINNT', 'Chrome', 1),
(10, 'Log In', '', '2021-02-18', '13:10:38', '::1', 'WINNT', 'Chrome', 1),
(11, 'Crear Pc', 'Indicador: <p><span style=\"color: rgb(77, 77, 77); font-family: &quot;Trebuchet MS&quot;; font-size: 14px; text-align: center;\">Artículos de investigación A</span><br></p>; Abreviatura: <p><span style=\"color: rgb(77, 77, 77); font-family: &quot;Trebuchet MS&quot;; font-size: 14px; text-align: center;\">ART_A</span><br></p>; Valor_maximo: 58.29; Valor_indicador: 0.27; Grupo_de_investigacion: metis a <p>A</p> <p>juan guevara</p> <p>educación</p> http://www1.udistrital.edu.co:8080/web/unidad-de-investigaciones-de-la-facultad-tecnologica/metis', '2021-02-18', '13:12:14', '::1', 'WINNT', 'Chrome', 1),
(12, 'Delete Pc', 'Indicador: <p>coohesion</p>;; Abreviatura: <p>CH</p>;; Valor_maximo: 3;; Valor_indicador: 3;; Grupo_de_investigacion: metis a <p>A</p> <p>juan guevara</p> <p>educación</p> http://www1.udistrital.edu.co:8080/web/unidad-de-investigaciones-de-la-facultad-tecnologica/metis', '2021-02-18', '13:12:44', '::1', 'WINNT', 'Chrome', 1),
(13, 'Log In', '', '2021-02-18', '13:16:07', '::1', 'WINNT', 'Chrome', 1),
(14, 'Crear Cultura_investigativa', 'Variable: <p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;El manejo de Herramientas para I+D es&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:9149,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;10&quot;:1,&quot;11&quot;:4,&quot;12&quot;:0,&quot;16&quot;:11}\" style=\"font-size: 11pt; font-family: Arial;\">El manejo de Herramientas para I+D es</span><br></p>; Calificacion: ; Grupo_de_investigacion: metis a <p>A</p> <p>juan guevara</p> <p>educación</p> http://www1.udistrital.edu.co:8080/web/unidad-de-investigaciones-de-la-facultad-tecnologica/metis', '2021-02-18', '13:16:31', '::1', 'WINNT', 'Chrome', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loggrupo_de_investigacion`
--

CREATE TABLE `loggrupo_de_investigacion` (
  `idLogGrupo_de_investigacion` int(11) NOT NULL,
  `accion` varchar(45) NOT NULL,
  `informacion` text NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `ip` varchar(45) NOT NULL,
  `so` varchar(45) NOT NULL,
  `explorador` varchar(45) NOT NULL,
  `grupo_de_investigacion_idGrupo_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `loggrupo_de_investigacion`
--

INSERT INTO `loggrupo_de_investigacion` (`idLogGrupo_de_investigacion`, `accion`, `informacion`, `fecha`, `hora`, `ip`, `so`, `explorador`, `grupo_de_investigacion_idGrupo_de_investigacion`) VALUES
(1, 'Log In', '', '2021-02-18', '13:18:09', '::1', 'WINNT', 'Chrome', 1),
(2, 'Editar Cultura_investigativa', 'Variable: <p><span data-sheets-value=\"{\"1\":2,\"2\":\"El manejo de Herramientas para I+D es\"}\" data-sheets-userformat=\"{\"2\":9149,\"3\":{\"1\":0},\"5\":{\"1\":[{\"1\":2,\"2\":0,\"5\":{\"1\":2,\"2\":0}},{\"1\":0,\"2\":0,\"3\":3},{\"1\":1,\"2\":0,\"4\":1}]},\"6\":{\"1\":[{\"1\":2,\"2\":0,\"5\":{\"1\":2,\"2\":0}},{\"1\":0,\"2\":0,\"3\":3},{\"1\":1,\"2\":0,\"4\":1}]},\"7\":{\"1\":[{\"1\":2,\"2\":0,\"5\":{\"1\":2,\"2\":0}},{\"1\":0,\"2\":0,\"3\":3},{\"1\":1,\"2\":0,\"4\":1}]},\"8\":{\"1\":[{\"1\":2,\"2\":0,\"5\":{\"1\":2,\"2\":0}},{\"1\":0,\"2\":0,\"3\":3},{\"1\":1,\"2\":0,\"4\":1}]},\"10\":1,\"11\":4,\"12\":0,\"16\":11}\" style=\"font-size: 11pt; font-family: Arial;\">El manejo de Herramientas para I+D es</span><br></p>; Calificacion: 5; Grupo_de_investigacion: metis a <p>A</p> <p>juan guevara</p> <p>educación</p> http://www1.udistrital.edu.co:8080/web/unidad-de-investigaciones-de-la-facultad-tecnologica/metis', '2021-02-18', '13:18:21', '::1', 'WINNT', 'Chrome', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logusuario_ud`
--

CREATE TABLE `logusuario_ud` (
  `idLogUsuario_ud` int(11) NOT NULL,
  `accion` varchar(45) NOT NULL,
  `informacion` text NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `ip` varchar(45) NOT NULL,
  `so` varchar(45) NOT NULL,
  `explorador` varchar(45) NOT NULL,
  `usuario_ud_idUsuario_ud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `logusuario_ud`
--

INSERT INTO `logusuario_ud` (`idLogUsuario_ud`, `accion`, `informacion`, `fecha`, `hora`, `ip`, `so`, `explorador`, `usuario_ud_idUsuario_ud`) VALUES
(1, 'Log In', '', '2021-02-15', '18:48:02', '::1', 'WINNT', 'Chrome', 1),
(2, 'Log In', '', '2021-02-16', '13:12:17', '::1', 'WINNT', 'Chrome', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitoreo_ai`
--

CREATE TABLE `monitoreo_ai` (
  `idMonitoreo_ai` int(11) NOT NULL,
  `variable` text DEFAULT NULL,
  `calificacion` double DEFAULT NULL,
  `grupo_de_investigacion_idGrupo_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitoreo_ei`
--

CREATE TABLE `monitoreo_ei` (
  `idMonitoreo_ei` int(11) NOT NULL,
  `variable` text DEFAULT NULL,
  `calificacion` double DEFAULT NULL,
  `grupo_de_investigacion_idGrupo_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc`
--

CREATE TABLE `pc` (
  `idPc` int(11) NOT NULL,
  `indicador` text DEFAULT NULL,
  `abreviatura` text DEFAULT NULL,
  `valor_maximo` double DEFAULT NULL,
  `valor_indicador` double DEFAULT NULL,
  `grupo_de_investigacion_idGrupo_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pc`
--

INSERT INTO `pc` (`idPc`, `indicador`, `abreviatura`, `valor_maximo`, `valor_indicador`, `grupo_de_investigacion_idGrupo_de_investigacion`) VALUES
(2, '<p><span style=\"color: rgb(77, 77, 77); font-family: &quot;Trebuchet MS&quot;; font-size: 14px; text-align: center;\">Artículos de investigación A</span><br></p>', '<p><span style=\"color: rgb(77, 77, 77); font-family: &quot;Trebuchet MS&quot;; font-size: 14px; text-align: center;\">ART_A</span><br></p>', 58.29, 0.27, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ppaidi`
--

CREATE TABLE `ppaidi` (
  `idPpaidi` int(11) NOT NULL,
  `subtipo_de_producto` text DEFAULT NULL,
  `abreviatura` text DEFAULT NULL,
  `valor_maximo` double DEFAULT NULL,
  `valor_indicador` double DEFAULT NULL,
  `grupo_de_investigacion_idGrupo_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ppfr`
--

CREATE TABLE `ppfr` (
  `idPpfr` int(11) NOT NULL,
  `subtipo_de_producto` text DEFAULT NULL,
  `abreviatura` text DEFAULT NULL,
  `valor_maximo` double DEFAULT NULL,
  `valor_indicador` double DEFAULT NULL,
  `grupo_de_investigacion_idGrupo_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ppnc`
--

CREATE TABLE `ppnc` (
  `idPpnc` int(11) NOT NULL,
  `subtipo_de_producto` text DEFAULT NULL,
  `abreviatura` text DEFAULT NULL,
  `valor_maximo` double DEFAULT NULL,
  `valor_indicador` double DEFAULT NULL,
  `grupo_de_investigacion_idGrupo_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProductos` int(11) NOT NULL,
  `variable` text DEFAULT NULL,
  `calificacion` double DEFAULT NULL,
  `grupo_de_investigacion_idGrupo_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_ud`
--

CREATE TABLE `usuario_ud` (
  `idUsuario_ud` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `state` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_ud`
--

INSERT INTO `usuario_ud` (`idUsuario_ud`, `nombre`, `apellido`, `correo`, `clave`, `foto`, `state`) VALUES
(1, 'Michael Daniel', 'Moreno Diaz', '3@u.com', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vigilancia_tecnologica`
--

CREATE TABLE `vigilancia_tecnologica` (
  `idVigilancia_tecnologica` int(11) NOT NULL,
  `variable` text DEFAULT NULL,
  `calificacion` double DEFAULT NULL,
  `grupo_de_investigacion_idGrupo_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdministrador`);

--
-- Indices de la tabla `cultura_investigativa`
--
ALTER TABLE `cultura_investigativa`
  ADD PRIMARY KEY (`idCultura_investigativa`),
  ADD KEY `grupo_de_investigacion_idGrupo_de_investigacion` (`grupo_de_investigacion_idGrupo_de_investigacion`);

--
-- Indices de la tabla `empresas_centros_investigacion`
--
ALTER TABLE `empresas_centros_investigacion`
  ADD PRIMARY KEY (`idEmpresas_centros_investigacion`),
  ADD KEY `grupo_de_investigacion_idGrupo_de_investigacion` (`grupo_de_investigacion_idGrupo_de_investigacion`);

--
-- Indices de la tabla `explotacion_base_tecnologica`
--
ALTER TABLE `explotacion_base_tecnologica`
  ADD PRIMARY KEY (`idExplotacion_base_tecnologica`),
  ADD KEY `grupo_de_investigacion_idGrupo_de_investigacion` (`grupo_de_investigacion_idGrupo_de_investigacion`);

--
-- Indices de la tabla `financiacion`
--
ALTER TABLE `financiacion`
  ADD PRIMARY KEY (`idFinanciacion`),
  ADD KEY `grupo_de_investigacion_idGrupo_de_investigacion` (`grupo_de_investigacion_idGrupo_de_investigacion`);

--
-- Indices de la tabla `gestion_del_conocimiento`
--
ALTER TABLE `gestion_del_conocimiento`
  ADD PRIMARY KEY (`idGestion_del_conocimiento`),
  ADD KEY `grupo_de_investigacion_idGrupo_de_investigacion` (`grupo_de_investigacion_idGrupo_de_investigacion`);

--
-- Indices de la tabla `grupo_de_investigacion`
--
ALTER TABLE `grupo_de_investigacion`
  ADD PRIMARY KEY (`idGrupo_de_investigacion`);

--
-- Indices de la tabla `inversion`
--
ALTER TABLE `inversion`
  ADD PRIMARY KEY (`idInversion`),
  ADD KEY `grupo_de_investigacion_idGrupo_de_investigacion` (`grupo_de_investigacion_idGrupo_de_investigacion`);

--
-- Indices de la tabla `logadministrador`
--
ALTER TABLE `logadministrador`
  ADD PRIMARY KEY (`idLogAdministrador`),
  ADD KEY `administrador_idAdministrador` (`administrador_idAdministrador`);

--
-- Indices de la tabla `loggrupo_de_investigacion`
--
ALTER TABLE `loggrupo_de_investigacion`
  ADD PRIMARY KEY (`idLogGrupo_de_investigacion`),
  ADD KEY `grupo_de_investigacion_idGrupo_de_investigacion` (`grupo_de_investigacion_idGrupo_de_investigacion`);

--
-- Indices de la tabla `logusuario_ud`
--
ALTER TABLE `logusuario_ud`
  ADD PRIMARY KEY (`idLogUsuario_ud`),
  ADD KEY `usuario_ud_idUsuario_ud` (`usuario_ud_idUsuario_ud`);

--
-- Indices de la tabla `monitoreo_ai`
--
ALTER TABLE `monitoreo_ai`
  ADD PRIMARY KEY (`idMonitoreo_ai`),
  ADD KEY `grupo_de_investigacion_idGrupo_de_investigacion` (`grupo_de_investigacion_idGrupo_de_investigacion`);

--
-- Indices de la tabla `monitoreo_ei`
--
ALTER TABLE `monitoreo_ei`
  ADD PRIMARY KEY (`idMonitoreo_ei`),
  ADD KEY `grupo_de_investigacion_idGrupo_de_investigacion` (`grupo_de_investigacion_idGrupo_de_investigacion`);

--
-- Indices de la tabla `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`idPc`),
  ADD KEY `grupo_de_investigacion_idGrupo_de_investigacion` (`grupo_de_investigacion_idGrupo_de_investigacion`);

--
-- Indices de la tabla `ppaidi`
--
ALTER TABLE `ppaidi`
  ADD PRIMARY KEY (`idPpaidi`),
  ADD KEY `grupo_de_investigacion_idGrupo_de_investigacion` (`grupo_de_investigacion_idGrupo_de_investigacion`);

--
-- Indices de la tabla `ppfr`
--
ALTER TABLE `ppfr`
  ADD PRIMARY KEY (`idPpfr`),
  ADD KEY `grupo_de_investigacion_idGrupo_de_investigacion` (`grupo_de_investigacion_idGrupo_de_investigacion`);

--
-- Indices de la tabla `ppnc`
--
ALTER TABLE `ppnc`
  ADD PRIMARY KEY (`idPpnc`),
  ADD KEY `grupo_de_investigacion_idGrupo_de_investigacion` (`grupo_de_investigacion_idGrupo_de_investigacion`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProductos`),
  ADD KEY `grupo_de_investigacion_idGrupo_de_investigacion` (`grupo_de_investigacion_idGrupo_de_investigacion`);

--
-- Indices de la tabla `usuario_ud`
--
ALTER TABLE `usuario_ud`
  ADD PRIMARY KEY (`idUsuario_ud`);

--
-- Indices de la tabla `vigilancia_tecnologica`
--
ALTER TABLE `vigilancia_tecnologica`
  ADD PRIMARY KEY (`idVigilancia_tecnologica`),
  ADD KEY `grupo_de_investigacion_idGrupo_de_investigacion` (`grupo_de_investigacion_idGrupo_de_investigacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cultura_investigativa`
--
ALTER TABLE `cultura_investigativa`
  MODIFY `idCultura_investigativa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empresas_centros_investigacion`
--
ALTER TABLE `empresas_centros_investigacion`
  MODIFY `idEmpresas_centros_investigacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `explotacion_base_tecnologica`
--
ALTER TABLE `explotacion_base_tecnologica`
  MODIFY `idExplotacion_base_tecnologica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `financiacion`
--
ALTER TABLE `financiacion`
  MODIFY `idFinanciacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gestion_del_conocimiento`
--
ALTER TABLE `gestion_del_conocimiento`
  MODIFY `idGestion_del_conocimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupo_de_investigacion`
--
ALTER TABLE `grupo_de_investigacion`
  MODIFY `idGrupo_de_investigacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `inversion`
--
ALTER TABLE `inversion`
  MODIFY `idInversion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `logadministrador`
--
ALTER TABLE `logadministrador`
  MODIFY `idLogAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `loggrupo_de_investigacion`
--
ALTER TABLE `loggrupo_de_investigacion`
  MODIFY `idLogGrupo_de_investigacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `logusuario_ud`
--
ALTER TABLE `logusuario_ud`
  MODIFY `idLogUsuario_ud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `monitoreo_ai`
--
ALTER TABLE `monitoreo_ai`
  MODIFY `idMonitoreo_ai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `monitoreo_ei`
--
ALTER TABLE `monitoreo_ei`
  MODIFY `idMonitoreo_ei` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pc`
--
ALTER TABLE `pc`
  MODIFY `idPc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ppaidi`
--
ALTER TABLE `ppaidi`
  MODIFY `idPpaidi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ppfr`
--
ALTER TABLE `ppfr`
  MODIFY `idPpfr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ppnc`
--
ALTER TABLE `ppnc`
  MODIFY `idPpnc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProductos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario_ud`
--
ALTER TABLE `usuario_ud`
  MODIFY `idUsuario_ud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vigilancia_tecnologica`
--
ALTER TABLE `vigilancia_tecnologica`
  MODIFY `idVigilancia_tecnologica` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cultura_investigativa`
--
ALTER TABLE `cultura_investigativa`
  ADD CONSTRAINT `cultura_investigativa_ibfk_1` FOREIGN KEY (`grupo_de_investigacion_idGrupo_de_investigacion`) REFERENCES `grupo_de_investigacion` (`idGrupo_de_investigacion`);

--
-- Filtros para la tabla `empresas_centros_investigacion`
--
ALTER TABLE `empresas_centros_investigacion`
  ADD CONSTRAINT `empresas_centros_investigacion_ibfk_1` FOREIGN KEY (`grupo_de_investigacion_idGrupo_de_investigacion`) REFERENCES `grupo_de_investigacion` (`idGrupo_de_investigacion`);

--
-- Filtros para la tabla `explotacion_base_tecnologica`
--
ALTER TABLE `explotacion_base_tecnologica`
  ADD CONSTRAINT `explotacion_base_tecnologica_ibfk_1` FOREIGN KEY (`grupo_de_investigacion_idGrupo_de_investigacion`) REFERENCES `grupo_de_investigacion` (`idGrupo_de_investigacion`);

--
-- Filtros para la tabla `financiacion`
--
ALTER TABLE `financiacion`
  ADD CONSTRAINT `financiacion_ibfk_1` FOREIGN KEY (`grupo_de_investigacion_idGrupo_de_investigacion`) REFERENCES `grupo_de_investigacion` (`idGrupo_de_investigacion`);

--
-- Filtros para la tabla `gestion_del_conocimiento`
--
ALTER TABLE `gestion_del_conocimiento`
  ADD CONSTRAINT `gestion_del_conocimiento_ibfk_1` FOREIGN KEY (`grupo_de_investigacion_idGrupo_de_investigacion`) REFERENCES `grupo_de_investigacion` (`idGrupo_de_investigacion`);

--
-- Filtros para la tabla `inversion`
--
ALTER TABLE `inversion`
  ADD CONSTRAINT `inversion_ibfk_1` FOREIGN KEY (`grupo_de_investigacion_idGrupo_de_investigacion`) REFERENCES `grupo_de_investigacion` (`idGrupo_de_investigacion`);

--
-- Filtros para la tabla `logadministrador`
--
ALTER TABLE `logadministrador`
  ADD CONSTRAINT `logadministrador_ibfk_1` FOREIGN KEY (`administrador_idAdministrador`) REFERENCES `administrador` (`idAdministrador`);

--
-- Filtros para la tabla `loggrupo_de_investigacion`
--
ALTER TABLE `loggrupo_de_investigacion`
  ADD CONSTRAINT `loggrupo_de_investigacion_ibfk_1` FOREIGN KEY (`grupo_de_investigacion_idGrupo_de_investigacion`) REFERENCES `grupo_de_investigacion` (`idGrupo_de_investigacion`);

--
-- Filtros para la tabla `logusuario_ud`
--
ALTER TABLE `logusuario_ud`
  ADD CONSTRAINT `logusuario_ud_ibfk_1` FOREIGN KEY (`usuario_ud_idUsuario_ud`) REFERENCES `usuario_ud` (`idUsuario_ud`);

--
-- Filtros para la tabla `monitoreo_ai`
--
ALTER TABLE `monitoreo_ai`
  ADD CONSTRAINT `monitoreo_ai_ibfk_1` FOREIGN KEY (`grupo_de_investigacion_idGrupo_de_investigacion`) REFERENCES `grupo_de_investigacion` (`idGrupo_de_investigacion`);

--
-- Filtros para la tabla `monitoreo_ei`
--
ALTER TABLE `monitoreo_ei`
  ADD CONSTRAINT `monitoreo_ei_ibfk_1` FOREIGN KEY (`grupo_de_investigacion_idGrupo_de_investigacion`) REFERENCES `grupo_de_investigacion` (`idGrupo_de_investigacion`);

--
-- Filtros para la tabla `pc`
--
ALTER TABLE `pc`
  ADD CONSTRAINT `pc_ibfk_1` FOREIGN KEY (`grupo_de_investigacion_idGrupo_de_investigacion`) REFERENCES `grupo_de_investigacion` (`idGrupo_de_investigacion`);

--
-- Filtros para la tabla `ppaidi`
--
ALTER TABLE `ppaidi`
  ADD CONSTRAINT `ppaidi_ibfk_1` FOREIGN KEY (`grupo_de_investigacion_idGrupo_de_investigacion`) REFERENCES `grupo_de_investigacion` (`idGrupo_de_investigacion`);

--
-- Filtros para la tabla `ppfr`
--
ALTER TABLE `ppfr`
  ADD CONSTRAINT `ppfr_ibfk_1` FOREIGN KEY (`grupo_de_investigacion_idGrupo_de_investigacion`) REFERENCES `grupo_de_investigacion` (`idGrupo_de_investigacion`);

--
-- Filtros para la tabla `ppnc`
--
ALTER TABLE `ppnc`
  ADD CONSTRAINT `ppnc_ibfk_1` FOREIGN KEY (`grupo_de_investigacion_idGrupo_de_investigacion`) REFERENCES `grupo_de_investigacion` (`idGrupo_de_investigacion`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`grupo_de_investigacion_idGrupo_de_investigacion`) REFERENCES `grupo_de_investigacion` (`idGrupo_de_investigacion`);

--
-- Filtros para la tabla `vigilancia_tecnologica`
--
ALTER TABLE `vigilancia_tecnologica`
  ADD CONSTRAINT `vigilancia_tecnologica_ibfk_1` FOREIGN KEY (`grupo_de_investigacion_idGrupo_de_investigacion`) REFERENCES `grupo_de_investigacion` (`idGrupo_de_investigacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
