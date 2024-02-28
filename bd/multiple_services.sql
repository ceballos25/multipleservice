-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2024 a las 02:50:05
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `multiple_services`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleos`
--

CREATE TABLE `empleos` (
  `id` int(11) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `salario` varchar(50) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `horario` varchar(10) NOT NULL,
  `creado_por` varchar(100) NOT NULL,
  `estado` enum('PENDIENTE','RECHAZADO','APROBADO') NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleos`
--

INSERT INTO `empleos` (`id`, `cargo`, `descripcion`, `salario`, `lugar`, `horario`, `creado_por`, `estado`, `fecha_creacion`) VALUES
(1, 'AYUDANTE CONSTRUCCION', 'Empresa lider del sector blabla bla', 'SMLV + PRESTACIONES DE LEY', 'MEDELLIN', 'L-V 8-5', 'CRISTIAN CAMILO CEBALLOS MARIN', 'PENDIENTE', '2024-02-25 05:25:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirmar_password` varchar(10) NOT NULL,
  `fecha_nacimiento` varchar(11) NOT NULL,
  `genero` enum('MASCULINO','FEMENINO','PREFIERO NO DECIRLO') NOT NULL,
  `tipo_usuario` enum('ESTANDAR','ADMIN','','') NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `email`, `password`, `confirmar_password`, `fecha_nacimiento`, `genero`, `tipo_usuario`, `fecha_registro`) VALUES
(29, 'administrador', 'admin@gmail.com', '12', '12', '2024-03-01', 'MASCULINO', 'ADMIN', '2024-02-25 03:26:59'),
(31, 'Cristian Camilo Ceballos Marin', 'usuario@gmail.com', '12', '12', '2024-03-01', 'MASCULINO', 'ESTANDAR', '2024-02-25 03:28:47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleos`
--
ALTER TABLE `empleos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleos`
--
ALTER TABLE `empleos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
