-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 11-02-2022 a las 23:01:27
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php-database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` bigint(20) UNSIGNED NOT NULL,
  `Nombres` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Edad` tinyint(4) NOT NULL,
  `Correo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla que almacena los usuarios registrados';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `Nombres`, `Apellidos`, `Edad`, `Correo`) VALUES
(1, 'Carlos Daniel', 'Medina Sahagun', 18, 'carlos.medina1311@alumnos.udg.mx'),
(2, 'Diego Alejandro', 'Medina Sahagun', 16, 'diego03ale02@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`),
  ADD UNIQUE KEY `Id_usuario` (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
