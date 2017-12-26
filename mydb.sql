-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2017 a las 05:30:05
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat_mensajes`
--

CREATE TABLE `chat_mensajes` (
  `id` int(11) NOT NULL,
  `id_tarea` int(11) NOT NULL,
  `id_remitente` int(11) NOT NULL,
  `tipo` varchar(11) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` datetime NOT NULL,
  `extra` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `chat_mensajes`
--

INSERT INTO `chat_mensajes` (`id`, `id_tarea`, `id_remitente`, `tipo`, `mensaje`, `fecha`, `extra`) VALUES
(10, 1, 1, '1', 'hola', '2017-08-10 07:44:24', ''),
(11, 1, 1, '1', 'hola 2', '2017-08-10 07:44:29', ''),
(12, 1, 1, '1', '3', '2017-08-10 07:44:45', ''),
(13, 1, 1, '1', '4', '2017-08-10 07:44:46', ''),
(14, 1, 1, '1', '5', '2017-08-10 07:44:47', ''),
(15, 1, 1, '1', '6', '2017-08-10 07:44:47', ''),
(16, 1, 1, '1', '7', '2017-08-10 07:44:49', ''),
(17, 1, 1, '1', '8', '2017-08-10 07:44:49', ''),
(18, 1, 1, '1', '9', '2017-08-10 07:44:51', ''),
(19, 1, 1, '1', '10', '2017-08-10 07:45:05', ''),
(20, 1, 1, '1', '0', '2017-08-10 07:50:52', ''),
(21, 1, 1, '1', '11', '2017-08-10 07:50:56', ''),
(22, 1, 1, '1', '12', '2017-08-10 07:55:27', ''),
(23, 1, 1, '1', '13', '2017-08-10 07:55:28', ''),
(24, 1, 1, '1', '14', '2017-08-10 07:55:29', ''),
(25, 1, 1, '1', '15', '2017-08-10 07:55:31', ''),
(26, 1, 1, '1', '16', '2017-08-10 07:55:38', ''),
(27, 1, 1, '1', '17', '2017-08-10 07:55:40', ''),
(28, 1, 1, '1', '18', '2017-08-10 07:55:41', ''),
(29, 1, 1, '1', '19', '2017-08-10 07:55:42', ''),
(30, 1, 1, '1', '20', '2017-08-10 07:55:43', ''),
(31, 1, 1, '1', '21', '2017-08-10 07:55:45', ''),
(32, 1, 1, '1', '20', '2017-08-10 07:55:47', ''),
(33, 1, 1, '1', '23', '2017-08-10 07:55:48', ''),
(34, 1, 1, '1', '24', '2017-08-10 07:55:49', ''),
(35, 1, 1, '1', '25', '2017-08-10 07:55:50', ''),
(36, 1, 1, '1', '26', '2017-08-10 07:55:52', ''),
(37, 1, 1, '1', '27', '2017-08-10 07:55:53', ''),
(38, 1, 1, '1', '28', '2017-08-10 07:55:54', ''),
(39, 1, 1, '1', '29', '2017-08-10 07:55:55', ''),
(40, 1, 1, '1', '30', '2017-08-10 07:55:56', ''),
(41, 1, 1, 'png', 'descarga (1).png', '2017-08-14 21:19:06', 'uploads/2017-08-14_21-19-06-.png'),
(42, 1, 1, '1', 'ihola', '2017-08-17 06:05:00', ''),
(43, 1, 1, 'png', 'Banner-acerca.png', '2017-08-17 06:05:37', 'uploads/2017-08-17_06-05-37-.png'),
(44, 1, 6, 'docx', 'FR-G-ITCM-7.5.1-13 REGISTRO DE ASESORÍA R 2.docx', '2017-08-17 06:16:21', 'uploads/2017-08-17_06-16-21-.docx'),
(45, 1, 1, '1', 'hola', '2017-08-17 07:28:11', ''),
(46, 1, 1, '1', 'hola perros', '2017-08-17 07:59:12', ''),
(47, 1, 1, '1', 'esto es una prueba', '2017-08-17 07:59:26', ''),
(48, 1, 1, '1', 'hola', '2017-08-17 08:27:11', ''),
(49, 1, 1, '1', 'hghghg', '2017-08-17 08:30:47', ''),
(50, 1, 1, '1', 'jajaj', '2017-08-17 08:32:30', ''),
(51, 1, 1, '1', 'ya funciona', '2017-08-17 08:32:33', ''),
(52, 1, 1, '1', 'jeje', '2017-08-17 08:34:11', ''),
(53, 4, 1, '1', 'hola soy joel', '2017-08-17 08:41:41', ''),
(54, 4, 1, '1', 'quien mas esta en esta tarea?', '2017-08-17 08:41:48', ''),
(55, 2, 1, '1', 'hola soy joel quien mas esta en esta tareade priogramas toimaties?', '2017-08-17 08:42:31', ''),
(56, 2, 3, '1', 'hola joel soy karla y yo estoy en esta tarea', '2017-08-17 08:45:36', ''),
(57, 2, 1, '1', 'hola karla como estas?', '2017-08-17 08:47:22', ''),
(58, 1, 1, '1', 'hola', '2017-08-17 16:33:30', ''),
(59, 2, 1, '1', 'estas bien?', '2017-08-17 17:11:29', ''),
(60, 2, 1, '1', 'kurly?', '2017-08-17 17:22:06', ''),
(61, 4, 1, '1', 'eei?', '2017-08-17 17:22:24', ''),
(62, 4, 1, '1', 'quiien mas!!???', '2017-08-17 17:22:31', ''),
(63, 1, 1, '1', 'aver si esta tarea funciona', '2017-08-17 17:23:06', ''),
(64, 2, 3, '1', 'hola', '2017-08-17 18:26:38', ''),
(65, 1, 3, '1', 'hola soy kurly', '2017-08-17 18:27:43', ''),
(66, 1, 3, '1', 'voy a mandarte un archivito sale?', '2017-08-17 18:28:13', ''),
(67, 1, 3, '1', 'ai va xD', '2017-08-17 18:28:19', ''),
(68, 2, 3, '1', 'te voy a mandar un archivo orlando', '2017-08-17 18:28:57', ''),
(69, 2, 3, '1', 'va', '2017-08-17 18:29:02', ''),
(70, 2, 3, '1', 'gdgd', '2017-08-17 18:32:20', ''),
(71, 2, 3, '1', 'jiji', '2017-08-17 18:34:11', ''),
(72, 2, 1, '1', 'no se envio itui archivito kurly', '2017-08-17 18:35:43', ''),
(73, 1, 1, '1', 'no se enviio kurly aqui en esta tarea tampoco se envio tu archivo', '2017-08-17 18:43:27', ''),
(74, 1, 5, '1', 'aver aver que escandalo kurly y orlando!', '2017-08-17 18:45:39', ''),
(75, 1, 1, 'docx', '2017-08-17_06-16-21- (1).docx', '2017-08-17 18:53:11', 'uploads/2017-08-17_18-53-11-.docx'),
(76, 1, 1, '1', 'hola', '2017-08-17 19:06:47', ''),
(77, 1, 1, '1', 'holaaa crayola', '2017-08-18 04:05:27', ''),
(78, 1, 1, '1', 'holaaaaalolo', '2017-08-18 04:23:31', ''),
(79, 1, 1, '1', 'hola', '2017-08-18 04:28:04', ''),
(80, 2, 1, '1', 'hola', '2017-08-18 04:55:13', ''),
(81, 2, 1, '1', 'ojoojo', '2017-08-18 04:57:53', ''),
(82, 2, 1, '1', 'hol', '2017-08-18 05:09:36', ''),
(83, 1, 1, '1', 'ya borre las tablas', '2017-08-18 05:15:31', ''),
(84, 1, 1, '1', 'como ves?', '2017-08-18 05:15:58', ''),
(85, 1, 1, '1', 'esta bien?', '2017-08-18 05:16:02', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conexiones`
--

CREATE TABLE `conexiones` (
  `id_conexion` int(11) NOT NULL,
  `nombre_conexion` varchar(100) DEFAULT NULL,
  `descripcion_conexion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `conexiones`
--

INSERT INTO `conexiones` (`id_conexion`, `nombre_conexion`, `descripcion_conexion`) VALUES
(1, 'Chocolate Publicidad', 'Conexion para los empleados de la agencia de chocolatepublicidad'),
(2, 'Grupo Jaktur', 'Conexion para los empleados de grupo jaktur'),
(3, 'Grupo Fransun', 'Conexion para los empleados de grupo fransun'),
(4, 'Anglo', 'Conexion para los empleados del anglo'),
(5, 'El Surco', 'Conexion para los empleados del surco'),
(6, 'Geoteco', 'Conexion para los empleados de geoteco'),
(7, 'R3', 'Conexion para los empleados de R3'),
(8, 'Lux', 'Conexion para los empleados de lux'),
(10, 'Miselania', 'conexion de la tiendita de la esquina'),
(11, 'test', 'test prueba de iinsercion de una conexion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conexiones_has_usuarios`
--

CREATE TABLE `conexiones_has_usuarios` (
  `conexiones_id_conexion` int(11) NOT NULL,
  `usuarios_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `conexiones_has_usuarios`
--

INSERT INTO `conexiones_has_usuarios` (`conexiones_id_conexion`, `usuarios_id_usuario`) VALUES
(1, 1),
(1, 3),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 16),
(1, 18),
(2, 7),
(2, 8),
(2, 10),
(2, 19),
(3, 7),
(4, 7),
(4, 8),
(5, 7),
(5, 11),
(6, 7),
(8, 7),
(11, 1),
(11, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos`
--

CREATE TABLE `correos` (
  `id_correo` int(11) NOT NULL,
  `nombre_correo` varchar(45) DEFAULT NULL,
  `usuarios_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `correos`
--

INSERT INTO `correos` (`id_correo`, `nombre_correo`, `usuarios_id_usuario`) VALUES
(4, 'lourdes_1967@gmail.com', 2),
(5, 'maria123@outlook.com', 2),
(12, 'joelorlandom@gmail.com', 1),
(13, 'oscarin@chocolate.com', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `labels`
--

CREATE TABLE `labels` (
  `id_label` int(100) NOT NULL,
  `nombre_label` varchar(100) NOT NULL,
  `color_label` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `labels`
--

INSERT INTO `labels` (`id_label`, `nombre_label`, `color_label`) VALUES
(1, 'Diseno', 'rojo'),
(2, 'Desarrollo', 'verde'),
(3, 'Produccion', 'gris'),
(4, 'Revision', 'naranja'),
(5, 'Detenido', 'proyectos detenidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id` int(11) NOT NULL,
  `fecha_creada` date NOT NULL,
  `hora_creada` time NOT NULL,
  `descripciones` text NOT NULL,
  `enlace` text NOT NULL,
  `id_remitente` varchar(255) NOT NULL,
  `id_destinatario` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyectos` int(11) NOT NULL,
  `nombre_proyecto` varchar(50) DEFAULT NULL,
  `descripcion_proyecto` varchar(500) DEFAULT NULL,
  `conexiones_id_conexion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyectos`, `nombre_proyecto`, `descripcion_proyecto`, `conexiones_id_conexion`) VALUES
(1, 'Anglo', 'tareas relacionadas al colegio anglo de tampico', 1),
(2, 'Chocolate', 'Tareas relacionadas con la publicidad de nuestra empresa', 1),
(3, 'Church chiken', 'Tareas relacionadas a  church chiken', 1),
(4, 'Coffe Time', 'Tareas relacionadas a la cafeteria de altamira cooffe time', 1),
(5, 'Daytona Carwash', 'Tareas del autolavado Daytona del grupo jaktur', 1),
(6, 'DriveMe', 'Tareas de driveme', 1),
(7, 'EcoClean', 'Tareas relacionadas a la tienda de lavado ecoclean', 1),
(8, 'El Huateque', 'Tareas relacionadas al restaurante de comida mexicana el huateque de la unidad ampliacion ', 1),
(9, 'El Surco', 'Tareas relacionadas con la empresa el surco y todas sus derivantes ', 1),
(10, 'Ener', 'Tareas relacionadas con Ener', 1),
(11, 'Escargo', 'Tareas relacionadas a la empresa escargo de renta de maquinaria', 1),
(12, 'Geoteco', 'Tareas relacionadas a la publicidad de la empresa geoteco oil and gas services', 1),
(13, 'soludrip', 'producto soludrip es un fertilizante', 5),
(14, 'Promociones', 'Promociones del mes de Agosto', 5),
(15, 'test', 'este es un test', 5),
(16, 'other test', 'this is an other test for me and i love it', 5),
(17, 'other test test', 'testtt', 5),
(18, 'Grupo tampico', 'cliiente el grupo tampico', 1),
(19, 'chevrolet', 'CampaÃ±a publicitaria a la agencia de autos chevrolet', 1),
(20, 'Transmision en vivo', 'transmision en vivo en facebook', 8),
(21, 'Detenido', 'proyecto pausado', 1),
(23, 'Sesion de pesaje', 'SesiÃ³n de pesaje de los peleadores', 8),
(24, 'Grupo Bimbo', 'grupo bimbo', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remitentes_predeterminados`
--

CREATE TABLE `remitentes_predeterminados` (
  `id` int(11) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `remitentes_predeterminados`
--

INSERT INTO `remitentes_predeterminados` (`id`, `clave`, `titulo`, `imagen`) VALUES
(1, 'perro', 'Perrito', 'pug.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id_tarea` int(11) NOT NULL,
  `nombre_tarea` varchar(100) DEFAULT NULL,
  `asignados` text,
  `seguidores` text,
  `labels` text,
  `conversacion` varchar(10000) DEFAULT NULL,
  `proyectos_id_proyectos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id_tarea`, `nombre_tarea`, `asignados`, `seguidores`, `labels`, `conversacion`, `proyectos_id_proyectos`) VALUES
(1, 'Cierre de ciclo escolar', 'Antonio', 'Rita', 'Cambios', NULL, 1),
(2, 'Programas tomaties', 'Marcos', 'rita', 'Revision', NULL, 1),
(3, 'Julio publicaciones', 'Kurly', 'Oscar', 'Cambios', NULL, 1),
(4, 'Cuadros decorativos victoria', 'Anton', 'Rita', 'Diseno', NULL, 3),
(5, 'Campanas Julion-Agosto', 'Jonathan', 'oscar , rita', 'Revision', NULL, 3),
(6, 'Promociones Aereas', 'Orlando', 'Anton', 'Diseno', NULL, 3),
(7, 'Promociones cumpleanos', 'Anton', 'Orlando', 'Diseno', NULL, 4),
(8, 'Marca Fertilizante', 'Orlando', 'Anton', 'Diseno', NULL, 5),
(9, 'XS-Materiales David Lored', 'Orlando', 'Anton', 'Diseno', NULL, 3),
(17, 'Tarea de prueba', NULL, NULL, 'Diseno', NULL, 2),
(18, 'Tarea de prueba2', NULL, NULL, 'Desarrollo', NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ultiva_vista`
--

CREATE TABLE `ultiva_vista` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_lnoti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ultiva_vista`
--

INSERT INTO `ultiva_vista` (`id`, `id_usuario`, `id_lnoti`) VALUES
(1, 1, 1),
(2, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` tinytext,
  `apellido_p` tinytext,
  `apellido_m` tinytext,
  `privilegios` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellido_p`, `apellido_m`, `privilegios`, `cargo`, `correo`, `contrasena`, `foto`) VALUES
(1, 'Joel Orlando', 'Malibran', 'Escamilla', '1', 'Programador', 'orlando@chocolatepublicidad.com', '123', 'img/img_usuarios/yo.jpg'),
(2, 'Maria', 'Escamilla', 'Gonzalez', '2', 'Disenadora grafica', 'ma_lourdes@hotmail.com', 'mis3jjj', 'img/img_usuarios/noheli.jpg'),
(3, 'Kurly', 'Bailleres', 'Acosta', '2', 'comunity manager', 'karla@chocolatepublicidad.com', 'chiquitín', 'img/img_usuarios/kurli.jpg'),
(4, 'Anton', 'Serrano', 'Vallejo', '2', 'Disenador grafico', 'anton@chocolatepublicidad.com', 'elbuenanton123', 'img/img_usuarios/antonio.jpg'),
(5, 'Jonathan', 'Montenegro', 'Rivera', '2', 'Director de arte', 'jonathan@chocolatepublicidad.com', 'bailasoque', 'img/img_usuarios/jonathan.jpg'),
(6, 'Marco', 'Zavaleta', 'sanchez', '2', 'Animador', 'marco@chocolatepublicidad.com', 'marquitos1234', 'img/img_usuarios/marco.jpg'),
(7, 'Oscar', 'Ramos', 'Guerra', '1', 'Director de marca', 'oscar@chocolatepublicidad.com', 'oscar123456', 'img/img_usuarios/oscar.jpg'),
(8, 'Rita', 'Ramos', 'Guerra1', '1', 'Directora de marca', 'rita@chocolatepublicidad.com', 'riragu', 'img/img_usuarios/rita.jpg'),
(9, 'Marisol', 'Lara', 'Martinez', '1', 'Diseñadora grafica', 'marisol@chocolatepublicidad.com', 'marisol123', 'img/img_usuarios/marisol.jpg'),
(10, 'Paulet', 'Sanchez', 'Hernandez', '2', 'Mercadotecnia', 'paulet@grupojaktur.com', 'paulet123', 'img/img_usuarios/rita.jpg'),
(11, 'Ricardo', 'Dimas', 'Gonzalez', '2', 'Contador', 'ricardo@elsurco.com', '123ricardo', 'img/img_usuarios/yo.jpg'),
(12, 'javier', 'black', 'Gomez', '2', 'presidente', 'joelorlandom@ut.com', 'cacadepato', NULL),
(13, 'manuel', 'gonzalez', 'herrera', '1', 'disenador', 'manuel@fsfss.com', '4815162342', NULL),
(14, 'Hector', 'Martinez', 'Hernandez', '1', 'fotografo', 'hector@martinez.com', 'cacadepato', NULL),
(15, 'Hector', 'Martinez', 'Hernandez', '1', 'fotografo', 'hector@martinez.com', 'cacadepato', NULL),
(16, 'simon', 'Martinez', 'Hernandez', '1', 'fotografo', 'hector@simon.com', 'cacadepato', NULL),
(18, 'Gabriel', 'Sanchez', 'Melo', '1', 'director', 'melo@gmail.com', 'loquesea', NULL),
(19, 'Jaime ', 'Turrubiates', 'Gonzalez', '2', 'director', 'jaime@grupojaktur.com', 'xsgym', NULL),
(20, 'miguel', 'gonzalez', 'gonzalez', '1', 'director', 'miguel123@chocolatepublicidad.com', '123', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_has_tareas`
--

CREATE TABLE `usuarios_has_tareas` (
  `usuarios_id_usuario` int(11) NOT NULL,
  `tareas_id_tarea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios_has_tareas`
--

INSERT INTO `usuarios_has_tareas` (`usuarios_id_usuario`, `tareas_id_tarea`) VALUES
(1, 1),
(1, 2),
(1, 4),
(3, 1),
(3, 2),
(5, 1),
(6, 1),
(9, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat_mensajes`
--
ALTER TABLE `chat_mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `conexiones`
--
ALTER TABLE `conexiones`
  ADD PRIMARY KEY (`id_conexion`);

--
-- Indices de la tabla `conexiones_has_usuarios`
--
ALTER TABLE `conexiones_has_usuarios`
  ADD PRIMARY KEY (`conexiones_id_conexion`,`usuarios_id_usuario`),
  ADD KEY `fk_conexiones_has_usuarios_usuarios1_idx` (`usuarios_id_usuario`),
  ADD KEY `fk_conexiones_has_usuarios_conexiones1_idx` (`conexiones_id_conexion`);

--
-- Indices de la tabla `correos`
--
ALTER TABLE `correos`
  ADD PRIMARY KEY (`id_correo`),
  ADD KEY `fk_correos_usuarios1_idx` (`usuarios_id_usuario`);

--
-- Indices de la tabla `labels`
--
ALTER TABLE `labels`
  ADD PRIMARY KEY (`id_label`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyectos`,`conexiones_id_conexion`),
  ADD KEY `fk_proyectos_conexiones_idx` (`conexiones_id_conexion`);

--
-- Indices de la tabla `remitentes_predeterminados`
--
ALTER TABLE `remitentes_predeterminados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id_tarea`,`proyectos_id_proyectos`),
  ADD KEY `fk_tareas_proyectos1_idx` (`proyectos_id_proyectos`);

--
-- Indices de la tabla `ultiva_vista`
--
ALTER TABLE `ultiva_vista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuarios_has_tareas`
--
ALTER TABLE `usuarios_has_tareas`
  ADD PRIMARY KEY (`usuarios_id_usuario`,`tareas_id_tarea`),
  ADD KEY `fk_usuarios_has_tareas_tareas1_idx` (`tareas_id_tarea`),
  ADD KEY `fk_usuarios_has_tareas_usuarios1_idx` (`usuarios_id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat_mensajes`
--
ALTER TABLE `chat_mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT de la tabla `conexiones`
--
ALTER TABLE `conexiones`
  MODIFY `id_conexion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `correos`
--
ALTER TABLE `correos`
  MODIFY `id_correo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `labels`
--
ALTER TABLE `labels`
  MODIFY `id_label` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyectos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `remitentes_predeterminados`
--
ALTER TABLE `remitentes_predeterminados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `ultiva_vista`
--
ALTER TABLE `ultiva_vista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `conexiones_has_usuarios`
--
ALTER TABLE `conexiones_has_usuarios`
  ADD CONSTRAINT `fk_conexiones_has_usuarios_conexiones1` FOREIGN KEY (`conexiones_id_conexion`) REFERENCES `conexiones` (`id_conexion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_conexiones_has_usuarios_usuarios1` FOREIGN KEY (`usuarios_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `correos`
--
ALTER TABLE `correos`
  ADD CONSTRAINT `fk_correos_usuarios1` FOREIGN KEY (`usuarios_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `fk_proyectos_conexiones` FOREIGN KEY (`conexiones_id_conexion`) REFERENCES `conexiones` (`id_conexion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD CONSTRAINT `fk_tareas_proyectos1` FOREIGN KEY (`proyectos_id_proyectos`) REFERENCES `proyectos` (`id_proyectos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios_has_tareas`
--
ALTER TABLE `usuarios_has_tareas`
  ADD CONSTRAINT `fk_usuarios_has_tareas_tareas1` FOREIGN KEY (`tareas_id_tarea`) REFERENCES `tareas` (`id_tarea`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_has_tareas_usuarios1` FOREIGN KEY (`usuarios_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
