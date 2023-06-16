-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-06-2023 a las 14:02:07
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
-- Base de datos: `cursoSQL`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `nombre` varchar(20) NOT NULL,
  `1apellido` varchar(20) NOT NULL,
  `2apellido` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `contraseña` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`nombre`, `1apellido`, `2apellido`, `email`, `login`, `contraseña`) VALUES
('a', 'a', 'a', 'a@a.com', 'a', 'aaaa'),
('a', 'a', 'a', 'a@a.com', 'a', 'a'),
('A', 'a', 'a', 'ag@gmail.com', 'a', '123'),
('A', 'a', 'a', 'ag1@gmail.com', 'a', '123'),
('ANA', 'GARCIA', 'GARCIA', 'e@g.com', 'AGG', '123'),
('Pepe', 'Garcia', 'Garcia', 'pepe@gmail.com', 'Pepe', '123'),
('Pepa', 'Pepa', 'Pepa', 'pepa@gmail.com', 'pepa', '123456'),
('Hola', 'Hola', 'Hola', 'hola@gmial.com', 'hola', '123456'),
('Maria', 'Maria', 'Maria', 'maria@gmail.com', 'maria', '123456'),
('Carmen', 'carmen', 'carmen', 'ca@gmail.com', 'carmen', '123456'),
('Manolo', 'manolo', 'manolo', 'manolo@gmail.com', 'manolo', '12346'),
('Manolo', 'manolo', 'manolo', 'm@gmail.com', 'mmmm', '12345'),
('pedro', 'pedro', 'pedro', 'pedro@gmail.com', 'pedro', 'pedro'),
('q', 'q', 'q', 'q@gmial.com', 'l', '12345'),
('w', 'w', 'w', 'w@gmail.com', 'w', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
