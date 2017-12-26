-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2017 a las 02:38:51
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
(8, 'Lux', 'Conexion para los empleados de lux');

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
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(2, 7),
(2, 8),
(2, 10),
(3, 7),
(4, 7),
(4, 8),
(5, 7),
(5, 11),
(6, 7),
(8, 7);

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
(11, 'holamundo@gmail.com', 1),
(12, 'joelorlandom@gmail.com', 1);

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
(4, 'Revision', 'naranja');

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
(13, 'soludrip', 'producto soludrip es un fertilizante', 5);

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
(1, 'cierre de ciclo escolar', 'Antonio', 'Rita', 'cambios', NULL, 1),
(2, 'Programas tomaties', 'Marcos', 'rita', 'Revision', NULL, 1),
(3, 'Julio publicaciones', 'Kurly', 'Oscar', 'cambios', NULL, 1),
(4, 'Cuadros decorativos victoria', 'Anton', 'Rita', 'diseño', NULL, 3),
(5, 'Campanas Julion-Agosto', 'Jonathan', 'oscar , rita', 'revision', NULL, 3);

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
(3, 'Karla', 'Bailleres', 'Acosta', '2', 'comunity manager', 'karla@chocolatepubliciidad.com', 'chiquitin123', 'img/img_usuarios/kurli.jpg'),
(4, 'Anton', 'Serrano', 'Vallejo', '2', 'Disenador grafico', 'anton@chocolatepublicidad.com', 'elbuenanton123', 'img/img_usuarios/antonio.jpg'),
(5, 'Jonathan', 'Montenegro', 'Rivera', '2', 'Director de arte', 'jonathan@chocolatepiublicidad.com', 'bailasoque', 'img/img_usuarios/jonathan.jpg'),
(6, 'Marco', 'Zavaleta', 'sanchez', '2', 'Animador', 'marco', 'marquitos1234', 'img/img_usuarios/marco.jpg'),
(7, 'Oscar', 'Ramos', 'Guerra', '1', 'Director de marca', 'oscar@chocolatepublicidad.com', 'oscar123456', 'img/img_usuarios/oscar.jpg'),
(8, 'Rita', 'Ramos', 'Guerra1', '1', 'Directora de marca', 'rita@chocolatepublicidad.com', 'riragu', 'img/img_usuarios/rita.jpg'),
(9, 'Marisol', 'Lara', 'Martinez', '2', 'Diseñadora grafica', 'marisol@chocolatepublicidad.com', 'marisol123', 'img/img_usuarios/marisol.jpg'),
(10, 'Paulet', 'Sanchez', 'Hernandez', '2', 'Mercadotecnia', 'paulet@grupojaktur.com', 'paulet123', 'img/img_usuarios/rita.jpg'),
(11, 'Ricardo', 'Dimas', 'Gonzalez', '2', 'Contador', 'ricardo@elsurco.com', '123ricardo', 'img/img_usuarios/yo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_has_tareas`
--

CREATE TABLE `usuarios_has_tareas` (
  `usuarios_id_usuario` int(11) NOT NULL,
  `tareas_id_tarea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyectos`,`conexiones_id_conexion`),
  ADD KEY `fk_proyectos_conexiones_idx` (`conexiones_id_conexion`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id_tarea`,`proyectos_id_proyectos`),
  ADD KEY `fk_tareas_proyectos1_idx` (`proyectos_id_proyectos`);

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
-- AUTO_INCREMENT de la tabla `conexiones`
--
ALTER TABLE `conexiones`
  MODIFY `id_conexion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `correos`
--
ALTER TABLE `correos`
  MODIFY `id_correo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `labels`
--
ALTER TABLE `labels`
  MODIFY `id_label` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyectos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
