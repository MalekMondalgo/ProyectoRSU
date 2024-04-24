-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2024 a las 06:32:14
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdrsu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `dni_admin` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apoyo_social`
--

CREATE TABLE `apoyo_social` (
  `id_as` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_car` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `nomcorto` varchar(45) DEFAULT NULL,
  `id_facu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id_doce` int(11) NOT NULL,
  `dni_doce` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_beneficiado`
--

CREATE TABLE `encuesta_beneficiado` (
  `id_encubeneficiado` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `edad` char(3) DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL COMMENT 'Item:\n1: bueno\n2: regular\n3: malo',
  `id_proyecto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_r_asesor`
--

CREATE TABLE `encuesta_r_asesor` (
  `id_encurespuesta` int(11) NOT NULL,
  `p1` char(1) DEFAULT NULL,
  `p2` char(1) DEFAULT NULL,
  `p3` char(1) DEFAULT NULL,
  `p4` char(1) DEFAULT NULL,
  `p5` char(1) DEFAULT NULL,
  `promedio` int(11) DEFAULT NULL,
  `id_proyecto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estu` int(11) NOT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `dni_estu` varchar(10) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `fecnac` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id_facu` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `nomcorto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicador_proyecto`
--

CREATE TABLE `indicador_proyecto` (
  `id_indicador` int(11) NOT NULL,
  `bueno` int(11) DEFAULT NULL,
  `regular` int(11) DEFAULT NULL,
  `malo` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `id_encubeneficiado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineasrsu`
--

CREATE TABLE `lineasrsu` (
  `id_linea` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL COMMENT 'Se establecen las líneas de proyecto.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ods`
--

CREATE TABLE `ods` (
  `id_ods` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL COMMENT 'Tabla donde se establece los objetivos de desarrollo sostenible del proyecto.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_constancia_rsu`
--

CREATE TABLE `pagos_constancia_rsu` (
  `id_pago` int(11) NOT NULL,
  `monto_abonado` int(11) DEFAULT NULL COMMENT 'Según TUPA UNDC\n14.00 soles',
  `numero_operacion` varchar(45) DEFAULT NULL,
  `nombre_banco` varchar(100) DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `url_vaucher` varchar(145) DEFAULT NULL,
  `estado_pago` char(1) DEFAULT NULL,
  `id_pp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes_as`
--

CREATE TABLE `participantes_as` (
  `id_pas` int(11) NOT NULL,
  `hora_ingreso` time DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `id_volu` int(11) DEFAULT NULL,
  `id_as` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes_proyecto`
--

CREATE TABLE `participantes_proyecto` (
  `id_pp` int(11) NOT NULL,
  `rol` char(1) DEFAULT NULL COMMENT 'Rol del equipo:\nL: lider\nC: colaboradores',
  `ciclo` varchar(45) DEFAULT NULL COMMENT 'V,VI,VII,VIII,XI,X,EGRESADO',
  `url_dj` varchar(145) DEFAULT NULL COMMENT 'Declaración jurada de autorización de imagen.',
  `url_constancia` varchar(145) DEFAULT NULL,
  `encuesta_asesor` char(1) DEFAULT NULL COMMENT 'Estado encuesta: 1: activo, 2: realizado.',
  `estado_constancia` char(1) DEFAULT NULL COMMENT 'Estado del proceso de la contancia:\n1: solicitado\n2: confirmado\n3: observado',
  `correlativo_contancia` int(11) DEFAULT NULL,
  `id_estu` int(11) DEFAULT NULL,
  `id_car` int(11) DEFAULT NULL,
  `id_proyecto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id_proyecto` int(11) NOT NULL,
  `nombre` varchar(145) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `nbeneficiado` char(3) DEFAULT NULL COMMENT 'Hace referencia al total de personas beneficiado.',
  `sbeneficiado` varchar(100) DEFAULT NULL COMMENT 'Hace referencia al sector beneficiado.',
  `url_proyecto` varchar(145) DEFAULT NULL,
  `url_1avance` varchar(145) DEFAULT NULL,
  `url_2avance` varchar(145) DEFAULT NULL,
  `url_3avance` varchar(145) DEFAULT NULL,
  `url_informe` varchar(145) DEFAULT NULL,
  `url_resolucion` varchar(145) DEFAULT NULL,
  `horas_1avance` int(11) DEFAULT NULL,
  `horas_2avance` int(11) DEFAULT NULL,
  `horas_3avance` int(11) DEFAULT NULL,
  `observacion_proyecto` varchar(145) DEFAULT NULL,
  `observacion_informe` varchar(145) DEFAULT NULL,
  `estado_proyecto` char(1) DEFAULT NULL,
  `estado_informe` char(1) DEFAULT NULL,
  `fecha_proyecto` date DEFAULT NULL,
  `fecha_informe` date DEFAULT NULL,
  `id_doce` int(11) DEFAULT NULL,
  `id_semestre` int(11) DEFAULT NULL,
  `id_tipo` int(11) DEFAULT NULL,
  `id_ods` int(11) DEFAULT NULL,
  `id_linea` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `id_semestre` int(11) NOT NULL,
  `semestre` varchar(10) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipologia`
--

CREATE TABLE `tipologia` (
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntariado`
--

CREATE TABLE `voluntariado` (
  `id_vol` int(11) NOT NULL,
  `id_estu` int(11) DEFAULT NULL,
  `id_car` int(11) DEFAULT NULL,
  `id_semestre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `apoyo_social`
--
ALTER TABLE `apoyo_social`
  ADD PRIMARY KEY (`id_as`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_car`),
  ADD KEY `id_facu_idx` (`id_facu`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_doce`);

--
-- Indices de la tabla `encuesta_beneficiado`
--
ALTER TABLE `encuesta_beneficiado`
  ADD PRIMARY KEY (`id_encubeneficiado`),
  ADD KEY `id_proyecto_idx` (`id_proyecto`);

--
-- Indices de la tabla `encuesta_r_asesor`
--
ALTER TABLE `encuesta_r_asesor`
  ADD PRIMARY KEY (`id_encurespuesta`),
  ADD KEY `id_proyecto_idx` (`id_proyecto`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estu`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id_facu`);

--
-- Indices de la tabla `indicador_proyecto`
--
ALTER TABLE `indicador_proyecto`
  ADD PRIMARY KEY (`id_indicador`),
  ADD KEY `id_encubeneficiado_idx` (`id_encubeneficiado`);

--
-- Indices de la tabla `lineasrsu`
--
ALTER TABLE `lineasrsu`
  ADD PRIMARY KEY (`id_linea`);

--
-- Indices de la tabla `ods`
--
ALTER TABLE `ods`
  ADD PRIMARY KEY (`id_ods`);

--
-- Indices de la tabla `pagos_constancia_rsu`
--
ALTER TABLE `pagos_constancia_rsu`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `id_pp_idx` (`id_pp`);

--
-- Indices de la tabla `participantes_as`
--
ALTER TABLE `participantes_as`
  ADD PRIMARY KEY (`id_pas`),
  ADD KEY `id_volu_idx` (`id_volu`),
  ADD KEY `id_as_idx` (`id_as`);

--
-- Indices de la tabla `participantes_proyecto`
--
ALTER TABLE `participantes_proyecto`
  ADD PRIMARY KEY (`id_pp`),
  ADD KEY `id_estu_idx` (`id_estu`),
  ADD KEY `id_proyecto_idx` (`id_proyecto`),
  ADD KEY `id_car_idx` (`id_car`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD KEY `id_doce_idx` (`id_doce`),
  ADD KEY `id_semestre_idx` (`id_semestre`),
  ADD KEY `id_tipo_idx` (`id_tipo`),
  ADD KEY `id_ods_idx` (`id_ods`),
  ADD KEY `id_linea_idx` (`id_linea`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id_semestre`);

--
-- Indices de la tabla `tipologia`
--
ALTER TABLE `tipologia`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `voluntariado`
--
ALTER TABLE `voluntariado`
  ADD PRIMARY KEY (`id_vol`),
  ADD KEY `id_estu_idx` (`id_estu`),
  ADD KEY `id_car_idx` (`id_car`),
  ADD KEY `id_smestre_idx` (`id_semestre`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `id_facu` FOREIGN KEY (`id_facu`) REFERENCES `facultad` (`id_facu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `encuesta_beneficiado`
--
ALTER TABLE `encuesta_beneficiado`
  ADD CONSTRAINT `id_proyecto_encuesta_beneficiado` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `encuesta_r_asesor`
--
ALTER TABLE `encuesta_r_asesor`
  ADD CONSTRAINT `id_proyecto_encuesta` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `indicador_proyecto`
--
ALTER TABLE `indicador_proyecto`
  ADD CONSTRAINT `id_encubeneficiado_indicador_proyecto` FOREIGN KEY (`id_encubeneficiado`) REFERENCES `encuesta_beneficiado` (`id_encubeneficiado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pagos_constancia_rsu`
--
ALTER TABLE `pagos_constancia_rsu`
  ADD CONSTRAINT `id_pp_pago_constancia` FOREIGN KEY (`id_pp`) REFERENCES `participantes_proyecto` (`id_pp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `participantes_as`
--
ALTER TABLE `participantes_as`
  ADD CONSTRAINT `id_as_participantes` FOREIGN KEY (`id_as`) REFERENCES `apoyo_social` (`id_as`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_volu_participantes` FOREIGN KEY (`id_volu`) REFERENCES `voluntariado` (`id_vol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `participantes_proyecto`
--
ALTER TABLE `participantes_proyecto`
  ADD CONSTRAINT `id_car` FOREIGN KEY (`id_car`) REFERENCES `carrera` (`id_car`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_estu` FOREIGN KEY (`id_estu`) REFERENCES `estudiantes` (`id_estu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_proyecto` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `id_doce` FOREIGN KEY (`id_doce`) REFERENCES `docentes` (`id_doce`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_linea` FOREIGN KEY (`id_linea`) REFERENCES `lineasrsu` (`id_linea`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_ods` FOREIGN KEY (`id_ods`) REFERENCES `ods` (`id_ods`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_semestre` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id_semestre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_tipo` FOREIGN KEY (`id_tipo`) REFERENCES `tipologia` (`id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `voluntariado`
--
ALTER TABLE `voluntariado`
  ADD CONSTRAINT `id_car_voluntariado` FOREIGN KEY (`id_car`) REFERENCES `carrera` (`id_car`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_estu_voluntariado` FOREIGN KEY (`id_estu`) REFERENCES `estudiantes` (`id_estu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_smestre_voluntariado` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id_semestre`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
