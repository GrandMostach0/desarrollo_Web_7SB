-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2023 a las 02:59:23
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
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `curp` varchar(16) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `anio` int(11) DEFAULT NULL,
  `mes` varchar(20) DEFAULT NULL,
  `dia` int(11) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `hermanos` varchar(3) DEFAULT NULL,
  `cantidad_hermanos` int(11) NOT NULL,
  `tipo_sangre` varchar(20) DEFAULT NULL,
  `discapacidad` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `nombre`, `curp`, `correo`, `anio`, `mes`, `dia`, `edad`, `hermanos`, `cantidad_hermanos`, `tipo_sangre`, `discapacidad`) VALUES
(1, 'Victor Chan', 'CAVV001108HYNHRC', 'LE20080421@merida.tecnm.mx', 2000, 'noviembre', 8, 22, 'si', 1, 'o-positivo', 0),
(2, 'victor bernardo', 'CAVV04234232', 'LE20080421@merida.tecnm.mx', 2000, '', 0, 46, 'si', 1, 'o-positivo', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
