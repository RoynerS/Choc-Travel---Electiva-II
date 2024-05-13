-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2024 a las 14:42:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `edad` int(10) NOT NULL,
  `pais` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `edad`, `pais`, `email`, `password`, `role`) VALUES
(18, 'Royner', 'Simon', 19, 'Argentina', 'roynersimon45@gmail.com', '$2y$10$SjetNazgPHdCClwY7cxcle.IWQdJ9R6tA72Q3frH/v.1khWMmP0ai', 'admin'),
(20, 'roro ', 'pirororo', 15, 'Colombia', 'royner45@gmail.com', '$2y$10$hNpZ9rrFHKbwMrk9rFjDNu7VyvNWRgrU/T.rCHrxyLDbDdiEK70nm', ''),
(21, '111', '333', 15, 'Colombia', '45@gmail.com', '$2y$10$0k.rsBcPnQq8pm6h66ZqwuBVI1c/KY7TbFMIhWDkrox68kn8bweAK', ''),
(22, '1', '2', 14, 'España', '5@gmail.com', '$2y$10$UBTYnRnWY7j.4weJQ4bCg..ZE3lAikspU27HRWBm6lHupAzne4Imq', ''),
(23, '1111', '22222', 65, 'España', '111@gmail.com', '$2y$10$xLtZBbuABSTXXjvHymhr1OLzC5E7m1y6SSmCQluZIXI74.xZW2wO.', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
