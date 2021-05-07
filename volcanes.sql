-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2021 a las 12:33:21
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `volcanes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `mensaje` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `nombre`, `mensaje`, `fecha`) VALUES
(1, 'Ramón', 'Bienvenido', '2021-04-30 12:10:26'),
(2, 'Francisco', 'Hola, ¿Cómo estás?', '2021-04-30 12:10:26'),
(3, 'Ramón Portalanza', 'Saludos', '2021-04-30 16:56:12'),
(4, 'Din', 'hey', '2021-04-30 16:58:25'),
(5, 'Casa', 'Tengo hambre', '2021-04-30 16:59:58'),
(6, '', '', '2021-04-30 17:02:52'),
(7, 'Google', 'Zorrooooo!', '2021-05-01 17:12:13'),
(8, 'Firefox', 'Qué hay Google?', '2021-05-01 17:14:56'),
(9, 'Google', 'no funciona el sonido Zorrillo', '2021-05-01 17:16:08'),
(10, 'Firefox', 'revisa la ruta del archivo', '2021-05-01 17:18:48'),
(11, 'Google', 'la ruta está bien', '2021-05-01 17:24:58'),
(12, 'Firefox', 'vamos a morir!', '2021-05-01 17:29:29'),
(13, 'Google', 'no jodas!', '2021-05-01 17:31:53'),
(14, 'Firefox', 'nooooo', '2021-05-01 17:36:10'),
(15, 'Google', 'siiii\r\n', '2021-05-01 17:40:29'),
(16, 'Google', 'vamos', '2021-05-01 17:41:32'),
(17, 'Google', 'falla las fechas\r\n', '2021-05-01 18:08:40'),
(18, 'Firefox', 'ya lo he visto :(', '2021-05-01 18:17:15'),
(19, 'Ramón Portalanza', 'vamos, vamos', '2021-05-01 18:22:11'),
(20, 'Firefox', 'ayudaaa!', '2021-05-01 18:24:04'),
(21, 'casa', 'a descansar', '2021-05-01 18:27:19'),
(22, 'Din', 'en el zorro se ven los controles de audio, pero no suena', '2021-05-01 18:32:03'),
(23, 'Google', 'a mi me suena', '2021-05-01 18:32:47'),
(24, 'RAMÓN PORTALANZA ', 'vamos bien', '2021-05-01 18:33:30'),
(25, 'Firefox', 'yo fallo aún', '2021-05-01 18:34:34'),
(26, 'Firefox', 'he subido el tiempo , funciona?', '2021-05-01 18:35:17'),
(27, 'Google', 'no', '2021-05-01 18:35:27'),
(28, 'RAMÓN PORTALANZA ', 'no va', '2021-05-01 18:43:09'),
(29, 'Firefox', 'nooo', '2021-05-01 18:43:35'),
(30, 'Firefox', 'mal', '2021-05-01 18:44:12'),
(31, 'Google', 'muy mal', '2021-05-01 18:44:27'),
(32, 'Casa', 'descanso', '2021-05-01 18:45:37'),
(33, 'Firefox', 'sigo sin sonar', '2021-05-01 18:46:21'),
(34, 'RAMÓN PORTALANZA ', 'google si suena, pero el zorrillo no suena!', '2021-05-01 18:48:25'),
(35, 'Firefox', 'no sueno?', '2021-05-01 18:48:55'),
(36, 'Ramón Portalanza', 'hey', '2021-05-01 18:50:12'),
(37, 'Firefox', 'no suena nada', '2021-05-01 18:50:26'),
(38, 'Google', 'hey', '2021-05-03 10:47:28'),
(39, 'Firefox', 'hola', '2021-05-03 10:48:08'),
(40, 'casa', 'full', '2021-05-03 10:48:44'),
(41, 'Din', 'hey', '2021-05-03 10:49:06'),
(42, 'rus', 'hola', '2021-05-03 10:51:18'),
(43, 're', 'do', '2021-05-03 10:52:20'),
(44, 'pon', 'les', '2021-05-03 10:53:39'),
(45, 'Casa', 'si', '2021-05-03 11:00:31'),
(46, 'tr', 'hey', '2021-05-03 11:00:43'),
(47, 'edge', 'hola', '2021-05-03 11:02:16'),
(48, 'edge', 'dos', '2021-05-03 11:02:31'),
(49, 'Google', 'hola\r\n', '2021-05-03 15:04:39'),
(50, 'Google', 'hola\r\n', '2021-05-03 15:06:07'),
(51, 'Din', 'hola', '2021-05-03 15:08:40'),
(52, 'Google', 'hola', '2021-05-03 15:13:09'),
(53, 'Google', 'hol', '2021-05-03 18:54:43'),
(54, 'Ramón Portalanza', 'borré los css :(\r\n', '2021-05-03 19:15:48'),
(55, 'Casa', 'arriba', '2021-05-04 09:34:54'),
(56, 'RAMÓN PORTALANZA ', 'funciona', '2021-05-04 09:58:09'),
(57, 'Google', 'fracc', '2021-05-04 11:07:40'),
(58, 'RAMÓN PORTALANZA ', 'que raro', '2021-05-04 11:37:06'),
(59, '', 'holas', '2021-05-04 21:33:50'),
(60, '', 'amigos', '2021-05-04 21:59:53'),
(61, 'aaaa', 'hey', '2021-05-04 22:03:47'),
(62, 'llll', 'hola', '2021-05-04 23:09:29'),
(63, 'llll', 'no va la consulta\r\n', '2021-05-04 23:19:49'),
(64, 'llll', 'no va otra vez\r\n', '2021-05-04 23:23:47'),
(65, 'aaaa', 'hola', '2021-05-05 09:28:27'),
(66, 'aaaa', 'hey', '2021-05-05 09:34:55'),
(67, 'aaaa', 'Cómo?\r\n', '2021-05-05 09:47:29'),
(68, 'aaaa', '     hey          ', '2021-05-05 10:27:48'),
(69, 'aaaa', '      voy         ', '2021-05-05 10:28:57'),
(70, 'aaaa', '     ron          ', '2021-05-05 10:32:43'),
(71, 'aaaa', 'ahora va!', '2021-05-05 10:36:23'),
(72, 'aaaa', 'no funciona', '2021-05-05 10:38:22'),
(73, 'llll', 'no se que pasa', '2021-05-05 10:38:46'),
(74, 'aaaa', 'vamos a morir', '2021-05-05 10:39:09'),
(75, 'llll', 'nooooooooo', '2021-05-05 10:40:14'),
(76, 'aaaa', 'ya te vale', '2021-05-05 10:50:42'),
(77, 'aaaa', 'grrrrrrrrrr', '2021-05-05 10:53:41'),
(78, 'aaaa', 'otra vez no se ve la consulta', '2021-05-05 11:07:37'),
(79, 'llll', 'que vaina!', '2021-05-05 11:08:08'),
(80, 'aaaa', 'que', '2021-05-05 11:10:50'),
(81, 'llll', 'no', '2021-05-05 11:11:00'),
(82, 'aaaa', 'muy mal', '2021-05-05 11:14:39'),
(83, 'llll', 'vaya desastre', '2021-05-05 11:14:59'),
(84, 'aaaa', 'a ver', '2021-05-05 11:15:26'),
(85, 'llll', 'nada', '2021-05-05 11:15:34'),
(86, 'aaaa', ':(', '2021-05-05 11:16:52'),
(87, 'llll', 'vaya mmmmmmmmmmm', '2021-05-05 11:17:00'),
(88, 'aaaa', '+´-.,.+', '2021-05-05 11:17:30'),
(89, 'aaaa', 'grrrrrrrrrr', '2021-05-05 11:19:04'),
(90, 'aaaa', 'otra vez no se ve la consulta', '2021-05-05 11:26:53'),
(91, 'llll', 'dkhfkahlkdf', '2021-05-05 11:27:01'),
(92, 'llll', 'llfdjagj', '2021-05-05 11:29:43'),
(93, 'aaaa', 'yeroyuqweo', '2021-05-05 11:29:49'),
(94, 'aaaa', 'hlhhjh', '2021-05-05 11:30:26'),
(95, 'llll', 'khkhkh', '2021-05-05 11:30:30'),
(96, 'aaaa', 'grrrrrrrrrr', '2021-05-05 11:31:13'),
(97, 'llll', 'dhfhakjsdhklhjadf', '2021-05-05 11:32:05'),
(98, 'llll', 'vaya', '2021-05-05 11:34:57'),
(99, 'aaaa', 'jdhskajdhfka', '2021-05-05 11:35:18'),
(100, 'aaaa', 'ahora va!', '2021-05-05 11:39:08'),
(101, 'aaaa', 'otra vez no se ve la consulta', '2021-05-05 12:03:20'),
(102, 'aaaa', 'ya te vale', '2021-05-05 12:04:35'),
(103, 'aaaa', 'vamos a morir', '2021-05-05 12:06:11'),
(104, 'aaaa', 'ya te vale', '2021-05-05 12:07:08'),
(105, 'llll', 'erfe', '2021-05-05 12:08:52'),
(106, 'llll', 'vrvr', '2021-05-05 12:09:00'),
(107, 'aaaa', 'grrrrrrrrrr', '2021-05-05 12:10:32'),
(108, 'aaaa', 'ahora va!', '2021-05-05 12:11:22'),
(109, 'aaaa', 'otra vez no se ve la consulta', '2021-05-05 12:12:13'),
(110, 'llll', 'ya te vale', '2021-05-05 13:06:48'),
(111, 'llll', 'queeeeeee??????', '2021-05-06 10:57:18'),
(112, 'llll', 'no funciona', '2021-05-06 11:03:26'),
(113, 'llll', 'ya te vale', '2021-05-06 11:03:41'),
(114, 'bbbb', 'no se que pasa', '2021-05-06 11:04:06'),
(115, 'llll', 'grrrrrrrrrr', '2021-05-06 11:04:19'),
(116, 'llll', 'grrrrrrrrrr', '2021-05-06 11:56:07'),
(117, 'llll', 'ya te vale', '2021-05-06 11:56:15'),
(118, 'llll', 'ya te vale', '2021-05-06 11:57:10'),
(119, 'llll', 'otra vez no se ve la consulta', '2021-05-06 12:00:17'),
(120, 'llll', 'nooooo', '2021-05-06 12:16:21'),
(121, 'llll', 'no se ve', '2021-05-06 12:21:22'),
(122, 'aaaa', 'no', '2021-05-06 12:23:33'),
(123, 'llll', 'jes', '2021-05-06 12:23:41'),
(124, 'llll', 'va', '2021-05-06 12:32:19'),
(125, 'aaaa', 'ver', '2021-05-06 12:33:06'),
(126, 'llll', 'nonono', '2021-05-06 12:33:35'),
(127, 'aaaa', 'hola', '2021-05-06 12:35:29'),
(128, 'llll', 'ahora?', '2021-05-06 12:35:44'),
(129, 'aaaa', 'jkdflka', '2021-05-06 12:37:03'),
(130, 'llll', 'mmn,vz.', '2021-05-06 12:37:12'),
(131, 'llll', 'kdhnnc', '2021-05-06 12:37:34'),
(132, 'llll', 'hey', '2021-05-06 12:39:29'),
(133, 'llll', 'sol', '2021-05-06 12:39:56'),
(134, 'llll', 'ya', '2021-05-06 12:42:06'),
(135, 'aaaa', 'luna', '2021-05-06 12:42:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `estatus` int(1) NOT NULL DEFAULT 0,
  `registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `actualizacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellido`, `email`, `password`, `estatus`, `registro`, `actualizacion`) VALUES
(1, 'test1', 'test', 'uno', 'test@uno.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 0, '2021-04-07 09:57:33', '2021-04-07 09:57:33'),
(2, 'admin', 'test', 'uno', 'admin@admin.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 1, '2021-04-07 22:39:08', '2021-04-07 22:39:08'),
(3, 'aaaa', 'Annibal', 'Lecter', 'a@a.com', '61be55a8e2f6b4e172338bddf184d6dbee29c98853e0a0485ecee7f27b9af0b4', 0, '2021-04-08 13:06:14', '2021-04-10 17:13:09'),
(4, 'bbbb', 'b', 'b', 'b@b.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 1, '2021-04-08 13:31:36', '2021-04-08 13:31:36'),
(5, 'cccc', 'c', 'c', 'c@c.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 0, '2021-04-08 14:15:54', '2021-04-08 14:15:54'),
(6, 'dddd', 'Din', 'Dedín', 'd@d.com', '153c856430031f1b44a1633a8b2383717d1c96b03000f0b09872931e2565ff6c', 1, '2021-04-08 19:09:54', '2021-04-10 16:59:52'),
(7, 'eeee', 'e', 'e', 'e@e.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 1, '2021-04-09 08:41:43', '2021-04-09 08:41:43'),
(8, 'qqqq', 'Pequeña', 'Girl', 'q@q.com', 'f98204ba6963009734f0398a80f8e44f9d3ef74ebb9c49e5d4f000bd1c102d29', 0, '2021-04-10 17:33:42', '2021-04-12 10:03:53'),
(10, 'test', '', '', '', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 0, '2021-04-13 10:27:02', '2021-04-13 10:27:02'),
(21, 'ffff', 'f', 'f', 'f@f.com', 'f29a448b780745bf2e10667f46c442b102e75e76a46a1fff969641866225ab56', 1, '2021-04-13 10:57:10', '2021-04-13 10:57:10'),
(22, 'gggg', 'g', 'g', 'g@g.com', '45d25abffe8c792d74d30346429b5bc244b815eeb378a9c38395f7a466cf6894', 1, '2021-04-13 12:36:02', '2021-04-13 12:36:02'),
(25, 'h', 'h', 'h', 'h@h.com', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 1, '2021-04-13 12:48:18', '2021-04-13 12:49:45'),
(26, 'iiii', 'i', 'i', 'i@i.com', '4706484582ca019815d7824470954fa03beef340e1335c66367923bab0f2f9c5', 1, '2021-04-13 12:56:39', '2021-04-13 12:56:39'),
(27, 'jjjj', 'j', 'j', 'j@j.com', 'a84bc6c9241b686477f363c02ffd4dd8765e38c47243010ffe64425a78bcb7f2', 1, '2021-04-13 12:58:56', '2021-04-13 12:58:56'),
(28, 'kkkk', 'kiko', 'koki', 'k@k.com', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 1, '2021-04-13 13:01:58', '2021-05-03 21:08:46'),
(38, 'llll', 'l', 'l', 'l@l.com', '0626b633129acbe99b1f52a9112f3c4dd7bbd13c86763764c5a18c0b72d9cf8b', 0, '2021-05-03 21:17:06', '2021-05-03 21:17:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `volcanes`
--

CREATE TABLE `volcanes` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_entrada` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `volcanes`
--

INSERT INTO `volcanes` (`id`, `nombre_usuario`, `nombre`, `descripcion`, `fecha_entrada`) VALUES
(5, 'Ramón', 'Volcán Chimborazo', 'El Chimborazo es el volcán y la montaña más alta en el Ecuador, y el punto más alejado del centro de la Tierra con una altitud de 6263,47 metros​ sobre el nivel del mar. Su última erupción conocida se cree que se produjo alrededor de 550 d.C. \r\nEstá situado en los Andes centrales, junto a la ciudad de Riobamba, 150 km al suroeste de Quito y a 145 km de Guayaquil.\r\nDebido a la rotación terrestre, el diámetro en la zona ecuatorial es el mayor de todo el planeta. Gracias a esto, si se mide la distancia desde el centro de la Tierra, su cima es el punto más distante, superando en más de dos kilómetros la de la montaña de mayor altitud sobre el nivel del mar, el Everest.', '2021-05-07 10:32:28'),
(6, 'Ramón', 'Volcán Cayambe', 'El Cayambe es un volcán en la Cordillera Central del norte de Ecuador. Es la tercera elevación más importante del país solo por detrás del Cotopaxi y el Chimborazo. el Cayambe tiene una altitud aproximada de 5.790 m sobre el nivel del mar. Volcán Cayambe en la ruta de los volcanes, atrás el Antisana, luego el Cotopaxi y al fondo el Chimborazo. Al pie occidental del volcán se encuentra la ciudad de Cayambe, nombrada así por el volcán. El Cayambe es el secreto de muchos andinistas en Ecuador; mucho menos popular que el Cotopaxi. Ofrece una ascensión igual de hermosa, pero por una ruta mucho menos transitada.', '2021-05-06 10:48:52'),
(7, 'Francisco', 'Volcán Antisana', 'Antisana es un gran estratovolcán del arco de los Andes, potencialmente activo y cubierto por glaciares. Se sitúa ubicado en la Cordillera Real del Ecuador, entre las provincias de Napo y Pichincha, unos 50 km al sureste de la ciudad de Quito. Se encuentra situado entre los volcanes de Cotopaxi, Chacana, Cayambe, Reventador y Sumaco. Su glaciar perdió al menos 36% de su masa original en los últimos 50 años. Por su importancia estratégica, es la más estudiada de estas cumbres andinas. Se mide su longitud anualmente y su masa cada mes. El deshielo de su casco glaciar y los páramos ubicados alrededor del volcán son una de las fuentes más importantes de agua potable para la ciudad de Quito, capital de Ecuador. Su cumbre alcanza 5758 m con un edificio basal de 13 km de diámetro ligeramente elongado en sentido E-O. Se reconocen dos edificios volcánicos en el Antisana: el Antisana I, que es un edificio viejo y erosionado ubicado en la parte oriental del complejo, y el Antisana II que representa el edificio joven potencialmente activo.', '2021-05-06 10:49:02'),
(12, 'Dulcinea', 'Aguas termales de Guayllabamba en Riobamba', 'Es una fuente de agua termal de origen volcánica, ricas en sulfuro ubicada a menos de una hora de Riobamba, aproximadamente unos 23 Km, en la población de Chambo, son aguas curativas. La vegetación de ésta zona es abundante por lo que es ápta para quienes disfrutan del contácto de la Naturaleza. A un lado de la fuente termal cruza el río Timbul lo que complementa el paisaje natural del bosque primario. Otros atractivos turísticos naturales son el nevado Cubillín y la laguna de Roncón', '2021-05-07 10:32:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `volcanes`
--
ALTER TABLE `volcanes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `volcanes`
--
ALTER TABLE `volcanes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
