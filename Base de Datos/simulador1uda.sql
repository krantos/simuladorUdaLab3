-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2016 a las 03:29:22
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simulador1uda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_calidadesprod`
--

CREATE TABLE `udasim_calidadesprod` (
  `calidad_id` bigint(20) NOT NULL,
  `calidad_nombre` varchar(30) NOT NULL,
  `calidad_descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `udasim_calidadesprod`
--

INSERT INTO `udasim_calidadesprod` (`calidad_id`, `calidad_nombre`, `calidad_descripcion`) VALUES
(1, 'Artesanal Estandar', ''),
(2, 'Artesanal Especial', ''),
(3, 'Artesanal Premium', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_calidadprod_ronda`
--

CREATE TABLE `udasim_calidadprod_ronda` (
  `calxron_id` bigint(20) NOT NULL,
  `calxron_incr_costo_prodx` float NOT NULL,
  `fk_calidadprod_id` bigint(20) NOT NULL,
  `fk_ronda_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_ciclos`
--

CREATE TABLE `udasim_ciclos` (
  `ciclo_id` bigint(20) NOT NULL,
  `ciclo_descripcion` varchar(200) DEFAULT NULL,
  `ciclo_fecha_inicio` datetime DEFAULT NULL,
  `ciclo_fecha_fin` datetime DEFAULT NULL,
  `ciclo_max_cant_empr` int(11) NOT NULL,
  `ciclo_max_alum_empr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `udasim_ciclos`
--

INSERT INTO `udasim_ciclos` (`ciclo_id`, `ciclo_descripcion`, `ciclo_fecha_inicio`, `ciclo_fecha_fin`, `ciclo_max_cant_empr`, `ciclo_max_alum_empr`) VALUES
(1, 'Inicio', '2016-06-24 00:00:00', '2016-08-24 00:00:00', 8, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_costosprod`
--

CREATE TABLE `udasim_costosprod` (
  `costosprod_id` bigint(20) NOT NULL,
  `costosprod_nombre` varchar(30) NOT NULL,
  `costosprod_descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `udasim_costosprod`
--

INSERT INTO `udasim_costosprod` (`costosprod_id`, `costosprod_nombre`, `costosprod_descripcion`) VALUES
(1, 'Amargo - $60', ''),
(2, 'Dulce - $90', ''),
(3, 'Chocolate Blanco - $120', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_costosprod_ronda`
--

CREATE TABLE `udasim_costosprod_ronda` (
  `cosxron_id` bigint(20) NOT NULL,
  `cosxron_costoxkg` float NOT NULL,
  `cosxron_porc_mix_comercial` float DEFAULT NULL,
  `fk_costosprod_id` bigint(20) NOT NULL,
  `fk_ronda_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_decisionesxronda`
--

CREATE TABLE `udasim_decisionesxronda` (
  `decision_id` bigint(20) NOT NULL,
  `fk_empresa_id` bigint(20) NOT NULL,
  `fk_decoracionxron_id` bigint(20) NOT NULL,
  `fk_publicidadxron_id` bigint(20) NOT NULL,
  `fk_horariosxron_id` bigint(20) NOT NULL,
  `fk_metodospagoxron_id` bigint(20) NOT NULL,
  `fk_lineasxron_id` bigint(20) NOT NULL,
  `fk_calidadxron_id` bigint(20) NOT NULL,
  `decision_precio_venta` float NOT NULL,
  `decision_volumen_proy` float NOT NULL,
  `decision_fecha_envio` datetime DEFAULT NULL,
  `decision_estado` varchar(12) NOT NULL DEFAULT 'Borrador' COMMENT 'Borrador, Enviada'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_decoracion`
--

CREATE TABLE `udasim_decoracion` (
  `decoracion_id` bigint(20) NOT NULL,
  `decoracion_nombre` varchar(30) NOT NULL,
  `decoracion_descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `udasim_decoracion`
--

INSERT INTO `udasim_decoracion` (`decoracion_id`, `decoracion_nombre`, `decoracion_descripcion`) VALUES
(4, 'Lujo', '3000'),
(5, 'Top', '2500'),
(6, 'Medio', '1500'),
(7, 'Estandar', '750');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_decoracion_ronda`
--

CREATE TABLE `udasim_decoracion_ronda` (
  `decxron_id` bigint(20) NOT NULL,
  `decxron_costo_mes` float NOT NULL,
  `fk_decoracion_id` bigint(20) NOT NULL,
  `fk_ronda_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_empresas`
--

CREATE TABLE `udasim_empresas` (
  `empresa_id` bigint(20) NOT NULL,
  `empresa_nombre` varchar(30) NOT NULL,
  `empresa_estado` varchar(12) NOT NULL DEFAULT 'Inicial' COMMENT 'Inicial, Confirmada, Suspendida',
  `fk_zona_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `udasim_empresas`
--

INSERT INTO `udasim_empresas` (`empresa_id`, `empresa_nombre`, `empresa_estado`, `fk_zona_id`) VALUES
(1, 'Pepitos', 'Confirmada', 1),
(2, 'Las Tortas ORG', 'Inicial', 1),
(3, 'Jana', 'Confirmada', 1),
(4, 'Perito', 'Suspendida', 1),
(5, 'NHA Dulces Tentaciones', 'Confirmada', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_encuestasconsum`
--

CREATE TABLE `udasim_encuestasconsum` (
  `encuestaconsum_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_horarios`
--

CREATE TABLE `udasim_horarios` (
  `horario_id` bigint(20) NOT NULL,
  `horario_nombre` varchar(30) NOT NULL,
  `horario_descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `udasim_horarios`
--

INSERT INTO `udasim_horarios` (`horario_id`, `horario_nombre`, `horario_descripcion`) VALUES
(5, 'Horario Regular', 'Lunes a Viernes de 9 a 13 y 17 a 21, sabados de 9 a 13'),
(6, 'Horario Corrido', 'Lunes a viernes de 9 a 21 y sabado 9 a 13'),
(7, 'Horario Extendido', 'lunes a sabados de 9 a 21 y sabados de 9 a 13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_horarios_ronda`
--

CREATE TABLE `udasim_horarios_ronda` (
  `horxron_id` bigint(20) NOT NULL,
  `horxron_hs_normales` int(11) NOT NULL COMMENT 'cantidad de horas',
  `horxron_hs_extras` int(11) NOT NULL COMMENT 'cantidad de horas',
  `fk_horario_id` bigint(20) NOT NULL,
  `fk_ronda_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_lineasprod`
--

CREATE TABLE `udasim_lineasprod` (
  `linea_id` bigint(20) NOT NULL,
  `linea_nombre` varchar(30) NOT NULL,
  `linea_descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `udasim_lineasprod`
--

INSERT INTO `udasim_lineasprod` (`linea_id`, `linea_nombre`, `linea_descripcion`) VALUES
(1, 'Variadad Baja', '5 lineas de produccion'),
(2, 'Variedad Media', '10 Lineas - 15% mas de produccion'),
(3, 'Variedad Alta', '15 Lineas - 30% mas de costos de produccion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_lineasprod_ronda`
--

CREATE TABLE `udasim_lineasprod_ronda` (
  `linxron_id` bigint(20) NOT NULL,
  `linxron_incr_costo_prodx` float NOT NULL,
  `fk_lineasprod_id` bigint(20) NOT NULL,
  `fk_ronda_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_metodospago`
--

CREATE TABLE `udasim_metodospago` (
  `metpago_id` bigint(20) NOT NULL,
  `metpago_nombre` varchar(30) NOT NULL,
  `metpago_descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `udasim_metodospago`
--

INSERT INTO `udasim_metodospago` (`metpago_id`, `metpago_nombre`, `metpago_descripcion`) VALUES
(1, 'Pago con Debito', 'Sin costos adicionales'),
(2, 'Pago con Credito', 'costo 7% mas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_metodospago_ronda`
--

CREATE TABLE `udasim_metodospago_ronda` (
  `metxron_id` bigint(20) NOT NULL,
  `metxron_porc_costo_financ` float NOT NULL,
  `metxron_tiempo_acredita` int(11) DEFAULT NULL COMMENT 'cantidad de dias',
  `fk_metodospago_id` bigint(20) NOT NULL,
  `fk_ronda_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_miembros`
--

CREATE TABLE `udasim_miembros` (
  `miembro_id` bigint(20) NOT NULL,
  `miembro_nombre` varchar(50) NOT NULL,
  `miembro_apellido` varchar(50) NOT NULL,
  `miembro_email` varchar(50) NOT NULL,
  `fk_empresa_id` bigint(20) NOT NULL,
  `fk_sisacad_legajo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `udasim_miembros`
--

INSERT INTO `udasim_miembros` (`miembro_id`, `miembro_nombre`, `miembro_apellido`, `miembro_email`, `fk_empresa_id`, `fk_sisacad_legajo`) VALUES
(1, 'Loro', 'Roto', 'lororoto@roto.com.ar', 2, '1119283'),
(2, 'Loro', 'Roto', 'lororoto@roto.com.ar', 3, '1119283'),
(3, 'Pepito', 'El Maestro', 'elmaestro@lolo.com.ar', 5, '11726353543');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_profesores`
--

CREATE TABLE `udasim_profesores` (
  `profesor_id` bigint(20) NOT NULL,
  `profesor_nombre` varchar(50) NOT NULL,
  `profesor_apellido` varchar(50) NOT NULL,
  `profesor_email` varchar(50) NOT NULL,
  `fk_materia_id` bigint(20) DEFAULT NULL COMMENT 'previsto. No usado en esta version',
  `fk_sisacad_legajo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `udasim_profesores`
--

INSERT INTO `udasim_profesores` (`profesor_id`, `profesor_nombre`, `profesor_apellido`, `profesor_email`, `fk_materia_id`, `fk_sisacad_legajo`) VALUES
(2, 'Pepe', 'Lopez', 'pepelopez@gmail.com', 3, '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_publicidad`
--

CREATE TABLE `udasim_publicidad` (
  `publicidad_id` bigint(20) NOT NULL,
  `publicidad_nombre` varchar(30) NOT NULL,
  `publicidad_descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `udasim_publicidad`
--

INSERT INTO `udasim_publicidad` (`publicidad_id`, `publicidad_nombre`, `publicidad_descripcion`) VALUES
(1, 'Opcion Baja', 'Costo mensual $2000'),
(2, 'Opcion Media', 'Cosot mensual $4000'),
(3, 'Opcion Alta', 'Costo mensual $8000'),
(4, 'Opcion Muy Alta', 'Costo mensual $ 12000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_publicidad_ronda`
--

CREATE TABLE `udasim_publicidad_ronda` (
  `pubxron_id` bigint(20) NOT NULL,
  `pubxron_costo_mes` float NOT NULL,
  `fk_publicidad_id` bigint(20) NOT NULL,
  `fk_ronda_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_rangoprecios`
--

CREATE TABLE `udasim_rangoprecios` (
  `rangop_id` bigint(20) NOT NULL,
  `rangop_nombre` varchar(30) NOT NULL,
  `rangop_descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_rangoprecios_ronda`
--

CREATE TABLE `udasim_rangoprecios_ronda` (
  `ranxron_id` bigint(20) NOT NULL,
  `ranxron_precio_min` float NOT NULL,
  `ranxron_precio_max` float DEFAULT NULL,
  `fk_rangoprecio_id` bigint(20) NOT NULL,
  `fk_ronda_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_rondasxciclo`
--

CREATE TABLE `udasim_rondasxciclo` (
  `ronxsim_id` bigint(20) NOT NULL,
  `ronxsim_fecha` datetime NOT NULL,
  `ronxsim_demanda` float NOT NULL,
  `fk_profesor_id` bigint(20) NOT NULL,
  `fk_ciclo_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `udasim_rondasxciclo`
--

INSERT INTO `udasim_rondasxciclo` (`ronxsim_id`, `ronxsim_fecha`, `ronxsim_demanda`, `fk_profesor_id`, `fk_ciclo_id`) VALUES
(1, '2016-06-24 00:00:00', 925, 2, 1),
(2, '2016-07-08 00:00:00', 1050, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_salarios`
--

CREATE TABLE `udasim_salarios` (
  `salario_id` bigint(20) NOT NULL,
  `salario_nombre` varchar(30) NOT NULL,
  `salario_descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_salarios_ronda`
--

CREATE TABLE `udasim_salarios_ronda` (
  `salxron_id` bigint(20) NOT NULL,
  `salxron_valor` float NOT NULL,
  `salxron_hs_extras_max` int(11) DEFAULT NULL COMMENT 'cantidad de horas',
  `fk_salarios_id` bigint(20) NOT NULL,
  `fk_ronda_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_usuarios`
--

CREATE TABLE `udasim_usuarios` (
  `usuario_id` bigint(20) NOT NULL,
  `usuario_nombre` varchar(20) NOT NULL,
  `usuario_clave` varchar(130) NOT NULL,
  `usuario_tipo` varchar(10) NOT NULL COMMENT 'Alumno, Profesor',
  `fk_participante_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `udasim_usuarios`
--

INSERT INTO `udasim_usuarios` (`usuario_id`, `usuario_nombre`, `usuario_clave`, `usuario_tipo`, `fk_participante_id`) VALUES
(1, 'marcos', '123', '1', 1),
(2, 'gabi', '123', '1', 2),
(3, 'pepe', '123', '2', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_zonas`
--

CREATE TABLE `udasim_zonas` (
  `zona_id` bigint(20) NOT NULL,
  `zona_nombre` varchar(30) NOT NULL,
  `zona_descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `udasim_zonas`
--

INSERT INTO `udasim_zonas` (`zona_id`, `zona_nombre`, `zona_descripcion`) VALUES
(1, 'City', 'Todo bien'),
(2, 'Boulevard UDASIM', ''),
(3, 'Mega Shopping', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `udasim_zonas_ronda`
--

CREATE TABLE `udasim_zonas_ronda` (
  `zonxron_id` bigint(20) NOT NULL,
  `zonxron_alquiler_mes` float NOT NULL,
  `fk_zona_id` bigint(20) NOT NULL,
  `fk_ronda_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `udasim_calidadesprod`
--
ALTER TABLE `udasim_calidadesprod`
  ADD PRIMARY KEY (`calidad_id`);

--
-- Indices de la tabla `udasim_calidadprod_ronda`
--
ALTER TABLE `udasim_calidadprod_ronda`
  ADD PRIMARY KEY (`calxron_id`),
  ADD KEY `FK_udasim_calidadprod_ronda_ron` (`fk_ronda_id`),
  ADD KEY `FK_udasim_calidadprod_ronda_cal` (`fk_calidadprod_id`);

--
-- Indices de la tabla `udasim_ciclos`
--
ALTER TABLE `udasim_ciclos`
  ADD PRIMARY KEY (`ciclo_id`);

--
-- Indices de la tabla `udasim_costosprod`
--
ALTER TABLE `udasim_costosprod`
  ADD PRIMARY KEY (`costosprod_id`);

--
-- Indices de la tabla `udasim_costosprod_ronda`
--
ALTER TABLE `udasim_costosprod_ronda`
  ADD PRIMARY KEY (`cosxron_id`),
  ADD KEY `FK_udasim_costosprod_ronda_ron` (`fk_ronda_id`),
  ADD KEY `FK_udasim_costosprod_ronda_cos` (`fk_costosprod_id`);

--
-- Indices de la tabla `udasim_decisionesxronda`
--
ALTER TABLE `udasim_decisionesxronda`
  ADD PRIMARY KEY (`decision_id`),
  ADD KEY `FK_udasim_decisionesxronda_emp` (`fk_empresa_id`),
  ADD KEY `FK_udasim_decisionesxronda_dec` (`fk_decoracionxron_id`),
  ADD KEY `FK_udasim_decisionesxronda_pub` (`fk_publicidadxron_id`),
  ADD KEY `FK_udasim_decisionesxronda_hor` (`fk_horariosxron_id`),
  ADD KEY `FK_udasim_decisionesxronda_cal` (`fk_calidadxron_id`),
  ADD KEY `FK_udasim_decisionesxronda_met` (`fk_metodospagoxron_id`),
  ADD KEY `FK_udasim_decisionesxronda_lin` (`fk_lineasxron_id`);

--
-- Indices de la tabla `udasim_decoracion`
--
ALTER TABLE `udasim_decoracion`
  ADD PRIMARY KEY (`decoracion_id`);

--
-- Indices de la tabla `udasim_decoracion_ronda`
--
ALTER TABLE `udasim_decoracion_ronda`
  ADD PRIMARY KEY (`decxron_id`),
  ADD KEY `FK_udasim_decoracion_ronda_ron` (`fk_ronda_id`),
  ADD KEY `FK_udasim_decoracion_ronda_dec` (`fk_decoracion_id`);

--
-- Indices de la tabla `udasim_empresas`
--
ALTER TABLE `udasim_empresas`
  ADD PRIMARY KEY (`empresa_id`),
  ADD KEY `FK_udasim_empresas_zon` (`fk_zona_id`);

--
-- Indices de la tabla `udasim_encuestasconsum`
--
ALTER TABLE `udasim_encuestasconsum`
  ADD PRIMARY KEY (`encuestaconsum_id`);

--
-- Indices de la tabla `udasim_horarios`
--
ALTER TABLE `udasim_horarios`
  ADD PRIMARY KEY (`horario_id`);

--
-- Indices de la tabla `udasim_horarios_ronda`
--
ALTER TABLE `udasim_horarios_ronda`
  ADD PRIMARY KEY (`horxron_id`),
  ADD KEY `FK_udasim_horarios_ronda_ron` (`fk_ronda_id`),
  ADD KEY `FK_udasim_horarios_ronda_hor` (`fk_horario_id`);

--
-- Indices de la tabla `udasim_lineasprod`
--
ALTER TABLE `udasim_lineasprod`
  ADD PRIMARY KEY (`linea_id`);

--
-- Indices de la tabla `udasim_lineasprod_ronda`
--
ALTER TABLE `udasim_lineasprod_ronda`
  ADD PRIMARY KEY (`linxron_id`),
  ADD KEY `FK_udasim_lineasprod_ronda_ron` (`fk_ronda_id`),
  ADD KEY `FK_udasim_lineasprod_ronda_lin` (`fk_lineasprod_id`);

--
-- Indices de la tabla `udasim_metodospago`
--
ALTER TABLE `udasim_metodospago`
  ADD PRIMARY KEY (`metpago_id`);

--
-- Indices de la tabla `udasim_metodospago_ronda`
--
ALTER TABLE `udasim_metodospago_ronda`
  ADD PRIMARY KEY (`metxron_id`),
  ADD KEY `FK_udasim_metodospago_ronda_ron` (`fk_ronda_id`),
  ADD KEY `FK_udasim_metodospago_ronda_met` (`fk_metodospago_id`);

--
-- Indices de la tabla `udasim_miembros`
--
ALTER TABLE `udasim_miembros`
  ADD PRIMARY KEY (`miembro_id`),
  ADD KEY `FK_udasim_miembros_emp` (`fk_empresa_id`);

--
-- Indices de la tabla `udasim_profesores`
--
ALTER TABLE `udasim_profesores`
  ADD PRIMARY KEY (`profesor_id`);

--
-- Indices de la tabla `udasim_publicidad`
--
ALTER TABLE `udasim_publicidad`
  ADD PRIMARY KEY (`publicidad_id`);

--
-- Indices de la tabla `udasim_publicidad_ronda`
--
ALTER TABLE `udasim_publicidad_ronda`
  ADD PRIMARY KEY (`pubxron_id`),
  ADD KEY `FK_udasim_publicidad_ronda_ron` (`fk_ronda_id`),
  ADD KEY `FK_udasim_publicidad_ronda_pub` (`fk_publicidad_id`);

--
-- Indices de la tabla `udasim_rangoprecios`
--
ALTER TABLE `udasim_rangoprecios`
  ADD PRIMARY KEY (`rangop_id`);

--
-- Indices de la tabla `udasim_rangoprecios_ronda`
--
ALTER TABLE `udasim_rangoprecios_ronda`
  ADD PRIMARY KEY (`ranxron_id`),
  ADD KEY `FK_udasim_rangoprecios_ronda_ron` (`fk_ronda_id`),
  ADD KEY `FK_udasim_rangoprecios_ronda_ran` (`fk_rangoprecio_id`);

--
-- Indices de la tabla `udasim_rondasxciclo`
--
ALTER TABLE `udasim_rondasxciclo`
  ADD PRIMARY KEY (`ronxsim_id`),
  ADD KEY `FK_udasim_rondasxciclo_cic` (`fk_ciclo_id`),
  ADD KEY `FK_udasim_rondasxciclo_prof` (`fk_profesor_id`);

--
-- Indices de la tabla `udasim_salarios`
--
ALTER TABLE `udasim_salarios`
  ADD PRIMARY KEY (`salario_id`);

--
-- Indices de la tabla `udasim_salarios_ronda`
--
ALTER TABLE `udasim_salarios_ronda`
  ADD PRIMARY KEY (`salxron_id`),
  ADD KEY `FK_udasim_salarios_ronda_ron` (`fk_ronda_id`),
  ADD KEY `FK_udasim_salarios_ronda_sal` (`fk_salarios_id`);

--
-- Indices de la tabla `udasim_usuarios`
--
ALTER TABLE `udasim_usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indices de la tabla `udasim_zonas`
--
ALTER TABLE `udasim_zonas`
  ADD PRIMARY KEY (`zona_id`);

--
-- Indices de la tabla `udasim_zonas_ronda`
--
ALTER TABLE `udasim_zonas_ronda`
  ADD PRIMARY KEY (`zonxron_id`),
  ADD KEY `FK_udasim_zonas_ronda_zon` (`fk_zona_id`),
  ADD KEY `FK_udasim_zonas_ronda_ron` (`fk_ronda_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `udasim_calidadesprod`
--
ALTER TABLE `udasim_calidadesprod`
  MODIFY `calidad_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `udasim_calidadprod_ronda`
--
ALTER TABLE `udasim_calidadprod_ronda`
  MODIFY `calxron_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `udasim_ciclos`
--
ALTER TABLE `udasim_ciclos`
  MODIFY `ciclo_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `udasim_costosprod`
--
ALTER TABLE `udasim_costosprod`
  MODIFY `costosprod_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `udasim_costosprod_ronda`
--
ALTER TABLE `udasim_costosprod_ronda`
  MODIFY `cosxron_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `udasim_decisionesxronda`
--
ALTER TABLE `udasim_decisionesxronda`
  MODIFY `decision_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `udasim_decoracion`
--
ALTER TABLE `udasim_decoracion`
  MODIFY `decoracion_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `udasim_decoracion_ronda`
--
ALTER TABLE `udasim_decoracion_ronda`
  MODIFY `decxron_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `udasim_empresas`
--
ALTER TABLE `udasim_empresas`
  MODIFY `empresa_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `udasim_encuestasconsum`
--
ALTER TABLE `udasim_encuestasconsum`
  MODIFY `encuestaconsum_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `udasim_horarios`
--
ALTER TABLE `udasim_horarios`
  MODIFY `horario_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `udasim_horarios_ronda`
--
ALTER TABLE `udasim_horarios_ronda`
  MODIFY `horxron_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `udasim_lineasprod`
--
ALTER TABLE `udasim_lineasprod`
  MODIFY `linea_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `udasim_lineasprod_ronda`
--
ALTER TABLE `udasim_lineasprod_ronda`
  MODIFY `linxron_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `udasim_metodospago`
--
ALTER TABLE `udasim_metodospago`
  MODIFY `metpago_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `udasim_metodospago_ronda`
--
ALTER TABLE `udasim_metodospago_ronda`
  MODIFY `metxron_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `udasim_miembros`
--
ALTER TABLE `udasim_miembros`
  MODIFY `miembro_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `udasim_profesores`
--
ALTER TABLE `udasim_profesores`
  MODIFY `profesor_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `udasim_publicidad`
--
ALTER TABLE `udasim_publicidad`
  MODIFY `publicidad_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `udasim_publicidad_ronda`
--
ALTER TABLE `udasim_publicidad_ronda`
  MODIFY `pubxron_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `udasim_rangoprecios`
--
ALTER TABLE `udasim_rangoprecios`
  MODIFY `rangop_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `udasim_rangoprecios_ronda`
--
ALTER TABLE `udasim_rangoprecios_ronda`
  MODIFY `ranxron_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `udasim_rondasxciclo`
--
ALTER TABLE `udasim_rondasxciclo`
  MODIFY `ronxsim_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `udasim_salarios`
--
ALTER TABLE `udasim_salarios`
  MODIFY `salario_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `udasim_salarios_ronda`
--
ALTER TABLE `udasim_salarios_ronda`
  MODIFY `salxron_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `udasim_usuarios`
--
ALTER TABLE `udasim_usuarios`
  MODIFY `usuario_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `udasim_zonas`
--
ALTER TABLE `udasim_zonas`
  MODIFY `zona_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `udasim_zonas_ronda`
--
ALTER TABLE `udasim_zonas_ronda`
  MODIFY `zonxron_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `udasim_calidadprod_ronda`
--
ALTER TABLE `udasim_calidadprod_ronda`
  ADD CONSTRAINT `FK_udasim_calidadprod_ronda_cal` FOREIGN KEY (`fk_calidadprod_id`) REFERENCES `udasim_calidadesprod` (`calidad_id`),
  ADD CONSTRAINT `FK_udasim_calidadprod_ronda_ron` FOREIGN KEY (`fk_ronda_id`) REFERENCES `udasim_rondasxciclo` (`ronxsim_id`);

--
-- Filtros para la tabla `udasim_costosprod_ronda`
--
ALTER TABLE `udasim_costosprod_ronda`
  ADD CONSTRAINT `FK_udasim_costosprod_ronda_cos` FOREIGN KEY (`fk_costosprod_id`) REFERENCES `udasim_costosprod` (`costosprod_id`),
  ADD CONSTRAINT `FK_udasim_costosprod_ronda_ron` FOREIGN KEY (`fk_ronda_id`) REFERENCES `udasim_rondasxciclo` (`ronxsim_id`);

--
-- Filtros para la tabla `udasim_decisionesxronda`
--
ALTER TABLE `udasim_decisionesxronda`
  ADD CONSTRAINT `FK_udasim_decisionesxronda_cal` FOREIGN KEY (`fk_calidadxron_id`) REFERENCES `udasim_calidadprod_ronda` (`calxron_id`),
  ADD CONSTRAINT `FK_udasim_decisionesxronda_dec` FOREIGN KEY (`fk_decoracionxron_id`) REFERENCES `udasim_decoracion_ronda` (`decxron_id`),
  ADD CONSTRAINT `FK_udasim_decisionesxronda_emp` FOREIGN KEY (`fk_empresa_id`) REFERENCES `udasim_empresas` (`empresa_id`),
  ADD CONSTRAINT `FK_udasim_decisionesxronda_hor` FOREIGN KEY (`fk_horariosxron_id`) REFERENCES `udasim_horarios_ronda` (`horxron_id`),
  ADD CONSTRAINT `FK_udasim_decisionesxronda_lin` FOREIGN KEY (`fk_lineasxron_id`) REFERENCES `udasim_lineasprod_ronda` (`linxron_id`),
  ADD CONSTRAINT `FK_udasim_decisionesxronda_met` FOREIGN KEY (`fk_metodospagoxron_id`) REFERENCES `udasim_metodospago_ronda` (`metxron_id`),
  ADD CONSTRAINT `FK_udasim_decisionesxronda_pub` FOREIGN KEY (`fk_publicidadxron_id`) REFERENCES `udasim_publicidad_ronda` (`pubxron_id`);

--
-- Filtros para la tabla `udasim_decoracion_ronda`
--
ALTER TABLE `udasim_decoracion_ronda`
  ADD CONSTRAINT `FK_udasim_decoracion_ronda_dec` FOREIGN KEY (`fk_decoracion_id`) REFERENCES `udasim_decoracion` (`decoracion_id`),
  ADD CONSTRAINT `FK_udasim_decoracion_ronda_ron` FOREIGN KEY (`fk_ronda_id`) REFERENCES `udasim_rondasxciclo` (`ronxsim_id`);

--
-- Filtros para la tabla `udasim_empresas`
--
ALTER TABLE `udasim_empresas`
  ADD CONSTRAINT `FK_udasim_empresas_zon` FOREIGN KEY (`fk_zona_id`) REFERENCES `udasim_zonas` (`zona_id`);

--
-- Filtros para la tabla `udasim_horarios_ronda`
--
ALTER TABLE `udasim_horarios_ronda`
  ADD CONSTRAINT `FK_udasim_horarios_ronda_hor` FOREIGN KEY (`fk_horario_id`) REFERENCES `udasim_horarios` (`horario_id`),
  ADD CONSTRAINT `FK_udasim_horarios_ronda_ron` FOREIGN KEY (`fk_ronda_id`) REFERENCES `udasim_rondasxciclo` (`ronxsim_id`);

--
-- Filtros para la tabla `udasim_lineasprod_ronda`
--
ALTER TABLE `udasim_lineasprod_ronda`
  ADD CONSTRAINT `FK_udasim_lineasprod_ronda_lin` FOREIGN KEY (`fk_lineasprod_id`) REFERENCES `udasim_lineasprod` (`linea_id`),
  ADD CONSTRAINT `FK_udasim_lineasprod_ronda_ron` FOREIGN KEY (`fk_ronda_id`) REFERENCES `udasim_rondasxciclo` (`ronxsim_id`);

--
-- Filtros para la tabla `udasim_metodospago_ronda`
--
ALTER TABLE `udasim_metodospago_ronda`
  ADD CONSTRAINT `FK_udasim_metodospago_ronda_met` FOREIGN KEY (`fk_metodospago_id`) REFERENCES `udasim_metodospago` (`metpago_id`),
  ADD CONSTRAINT `FK_udasim_metodospago_ronda_ron` FOREIGN KEY (`fk_ronda_id`) REFERENCES `udasim_rondasxciclo` (`ronxsim_id`);

--
-- Filtros para la tabla `udasim_miembros`
--
ALTER TABLE `udasim_miembros`
  ADD CONSTRAINT `FK_udasim_miembros_emp` FOREIGN KEY (`fk_empresa_id`) REFERENCES `udasim_empresas` (`empresa_id`);

--
-- Filtros para la tabla `udasim_publicidad_ronda`
--
ALTER TABLE `udasim_publicidad_ronda`
  ADD CONSTRAINT `FK_udasim_publicidad_ronda_pub` FOREIGN KEY (`fk_publicidad_id`) REFERENCES `udasim_publicidad` (`publicidad_id`),
  ADD CONSTRAINT `FK_udasim_publicidad_ronda_ron` FOREIGN KEY (`fk_ronda_id`) REFERENCES `udasim_rondasxciclo` (`ronxsim_id`);

--
-- Filtros para la tabla `udasim_rangoprecios_ronda`
--
ALTER TABLE `udasim_rangoprecios_ronda`
  ADD CONSTRAINT `FK_udasim_rangoprecios_ronda_ran` FOREIGN KEY (`fk_rangoprecio_id`) REFERENCES `udasim_rangoprecios` (`rangop_id`),
  ADD CONSTRAINT `FK_udasim_rangoprecios_ronda_ron` FOREIGN KEY (`fk_ronda_id`) REFERENCES `udasim_rondasxciclo` (`ronxsim_id`);

--
-- Filtros para la tabla `udasim_rondasxciclo`
--
ALTER TABLE `udasim_rondasxciclo`
  ADD CONSTRAINT `FK_udasim_rondasxciclo_cic` FOREIGN KEY (`fk_ciclo_id`) REFERENCES `udasim_ciclos` (`ciclo_id`),
  ADD CONSTRAINT `FK_udasim_rondasxciclo_prof` FOREIGN KEY (`fk_profesor_id`) REFERENCES `udasim_profesores` (`profesor_id`);

--
-- Filtros para la tabla `udasim_salarios_ronda`
--
ALTER TABLE `udasim_salarios_ronda`
  ADD CONSTRAINT `FK_udasim_salarios_ronda_ron` FOREIGN KEY (`fk_ronda_id`) REFERENCES `udasim_rondasxciclo` (`ronxsim_id`),
  ADD CONSTRAINT `FK_udasim_salarios_ronda_sal` FOREIGN KEY (`fk_salarios_id`) REFERENCES `udasim_salarios` (`salario_id`);

--
-- Filtros para la tabla `udasim_zonas_ronda`
--
ALTER TABLE `udasim_zonas_ronda`
  ADD CONSTRAINT `FK_udasim_zonas_ronda_ron` FOREIGN KEY (`fk_ronda_id`) REFERENCES `udasim_rondasxciclo` (`ronxsim_id`),
  ADD CONSTRAINT `FK_udasim_zonas_ronda_zon` FOREIGN KEY (`fk_zona_id`) REFERENCES `udasim_zonas` (`zona_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
