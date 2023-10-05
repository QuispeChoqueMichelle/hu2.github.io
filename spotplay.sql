-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2023 a las 05:04:17
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spotplay`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `musica`
--

CREATE TABLE `musica` (
  `idMusic` int(11) NOT NULL,
  `portMusic` varchar(100) NOT NULL,
  `nomMusic` varchar(50) NOT NULL,
  `artMusic` varchar(50) NOT NULL,
  `audMusic` varchar(50) NOT NULL,
  `genMusic` varchar(30) NOT NULL,
  `fecMusic` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `musica`
--

INSERT INTO `musica` (`idMusic`, `portMusic`, `nomMusic`, `artMusic`, `audMusic`, `genMusic`, `fecMusic`) VALUES
(7, 'imagenes/binomio de oro.jpg', 'Quiero que seas mi estrella ', 'Binomio de oro', 'imagenes/Binomio de Oro - Quiero que seas mi estre', 'Vallenato', '2023-10-04 20:31:05'),
(8, 'imagenes/delacey dream it possible.jpg', 'Dream It possible', 'Delacey', 'imagenes/delacey dream it possible.jpg', 'Romantico', '2023-10-04 20:34:13'),
(9, 'imagenes/locura automatica.jpg', 'La locura automatica', 'La secta', 'imagenes/La Secta - La Locura Automática.m4a', 'Romantico', '2023-10-04 20:35:33'),
(10, 'imagenes/los vazquez.jpg', 'Enamorado', 'Los Vasquez', 'imagenes/Los Vasquez - Enamorado.m4a', '', '2023-10-04 20:44:34'),
(11, 'imagenes/rebujitoss.jpg', 'Volar', 'Rebujitos', 'imagenes/Rebujitos -Volar (Con letra)-mc.m4a', 'Romantico', '2023-10-04 20:45:31'),
(12, 'imagenes/zacarias ferreira.jpg', 'Siento que te quiero', 'Zacarias Ferreira', 'imagenes/Siento que te quiero -  Zacarias Ferreira', 'Bachata', '2023-10-04 20:46:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`idMusic`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `musica`
--
ALTER TABLE `musica`
  MODIFY `idMusic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
