-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-05-2019 a las 12:37:13
-- Versión del servidor: 5.7.26-0ubuntu0.18.10.1
-- Versión de PHP: 7.2.17-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parqueadero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombre_tabla`
--

CREATE TABLE `nombre_tabla` (
  `identificador` int(11) NOT NULL,
  `columna_usuario` varchar(255) NOT NULL,
  `columna_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nombre_tabla`
--

INSERT INTO `nombre_tabla` (`identificador`, `columna_usuario`, `columna_password`) VALUES
(1, 'm', '$2y$10$bZb.Yyb/rKR9gz4yNxxSZeX41A9tyuORAOT7cqNSYHgKVQ9KaAoO2'),
(2, 'negro', '$2y$10$Xsk72wFxycVbAxKimWa69OH/GkBOGj4zyqL09D8Yn7hHhPqIE7LMe'),
(3, 'stiven', '$2y$10$ihnnI2E4tb0Z3jYUP9klAezRFaqe4rNPxxEPFAeysupi4BzxcgeHS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `placa_vehiculo`
--

CREATE TABLE `placa_vehiculo` (
  `id_placa_vehiculo` bigint(20) NOT NULL,
  `codigo` varchar(12) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `nregistro` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nombre_tabla`
--
ALTER TABLE `nombre_tabla`
  ADD PRIMARY KEY (`identificador`);

--
-- Indices de la tabla `placa_vehiculo`
--
ALTER TABLE `placa_vehiculo`
  ADD PRIMARY KEY (`id_placa_vehiculo`),
  ADD KEY `nregistro` (`nregistro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nombre_tabla`
--
ALTER TABLE `nombre_tabla`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `placa_vehiculo`
--
ALTER TABLE `placa_vehiculo`
  MODIFY `id_placa_vehiculo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
