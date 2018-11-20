-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-11-2018 a las 17:20:01
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id7557222_cachuelos`
--
CREATE DATABASE IF NOT EXISTS `id7557222_cachuelos` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id7557222_cachuelos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `name` varchar(56) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`catid`, `name`) VALUES
(1, 'Technology');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `pid` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` tinyblob,
  `catid` int(11) NOT NULL,
  `post_date` date DEFAULT NULL,
  `duration` int(11) DEFAULT '15',
  `title` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(64),
  `payment` int(11) DEFAULT '0',
  `tags` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`pid`, `user`, `content`, `image`, `catid`, `post_date`, `duration`, `title`, `payment`, `tags`) VALUES
(1, 2, 'Busco programador que esté especializado en lisp,python,c,c++,mathlab,haskell y debe tener conocimientos avanzados de física avanzada y cuántica. El postulante debe presentar como mínimo un iq de 130', NULL, 1, '2018-10-27', 15, 'Programador para SpaceX', 0, NULL),
(3, 2, 'Probando postear desde php, si nofunciona correctamente posiblemente sea culpa del array', NULL, 1, '2018-11-02', 15, 'Prueba de post', 200, NULL),
(4, 1, 'Probando postear desde php, si nofunciona correctamente posiblemente sea culpa del array', NULL, 1, '2018-11-02', 15, 'Prueba de post', 300, NULL),
(5, 1, 'Probando postear desde php, si nofunciona correctamente posiblemente sea culpa del array', NULL, 1, '2018-11-02', 15, 'Prueba de post', 400, NULL),
(6, 1, 'Probando postear desde php, si nofunciona correctamente posiblemente sea culpa del array', NULL, 1, '2018-11-02', 15, 'Prueba de post', 500, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulant`
--

CREATE TABLE `postulant` (
  `plid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rating`
--

CREATE TABLE `rating` (
  `rid` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `rating` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`uid`, `email`, `pass`) VALUES
(1, 'Sixto Lopez', '1234'),
(2, 'elon@musk.com', '12IbR.gJ8wcpc'),
(3, 'ejemplo@email.es', '1234'),
(5, 'galtamirano@idev.com', '$2y$10$N00kCUmT3EN3uilmPuxgPukyQ0Z0ydwOX09YUBlt5KiMAXL1xlwFy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_details`
--

CREATE TABLE `user_details` (
  `udid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tyid` int(11) DEFAULT NULL,
  `document` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user_details`
--

INSERT INTO `user_details` (`udid`, `uid`, `name`, `surname`, `phone`, `description`, `tyid`, `document`, `country`) VALUES
(1, 2, 'Elon', 'Reeve Musk', '+1 234567890', 'Físico, inversor, magnate', 1, '09876543','United States');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_type`
--

CREATE TABLE `user_type` (
  `utid` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user_type`
--

INSERT INTO `user_type` (`utid`, `name`) VALUES
(1, 'Empleador'),
(2, 'Empleado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `catid` (`catid`);

--
-- Indices de la tabla `postulant`
--
ALTER TABLE `postulant`
  ADD PRIMARY KEY (`plid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `uid` (`uid`);

--
-- Indices de la tabla `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rid`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `email` (`email`);

--
-- Indices de la tabla `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`udid`),
  ADD UNIQUE KEY `document` (`document`),
  ADD KEY `tyid` (`tyid`),
  ADD KEY `uid` (`uid`);

--
-- Indices de la tabla `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`utid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `postulant`
--
ALTER TABLE `postulant`
  MODIFY `plid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `user_details`
--
ALTER TABLE `user_details`
  MODIFY `udid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user_type`
--
ALTER TABLE `user_type`
  MODIFY `utid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`catid`) REFERENCES `category` (`catid`);

--
-- Filtros para la tabla `postulant`
--
ALTER TABLE `postulant`
  ADD CONSTRAINT `postulant_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `post` (`pid`),
  ADD CONSTRAINT `postulant_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Filtros para la tabla `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`tyid`) REFERENCES `user_type` (`utid`),
  ADD CONSTRAINT `user_details_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
