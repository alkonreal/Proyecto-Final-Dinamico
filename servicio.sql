-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2020 a las 12:47:06
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nombre` varchar(39) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `img`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'seguridad.jpg', 'Formacion Java', 'Cursos sobre formacion de java', 300),
(2, '', 'Formacion html', 'Cursos sobre formacion de html', 200),
(3, '', 'administracion de servidores', 'nuestros profesionales estan pueden administrar cualquier servidor', 1000),
(4, '', 'ayuda a domicilio', 'nuestros profesionales pueden ir a domicilio para ayudarte en cualquier tarea informatica', 500),
(5, '', 'instalacion de sistemas operativos', 'podemos instalarte cualquier sistema operativo existente ', 100),
(6, '', 'Formación Empresarial', 'Nuestros tecnicos son capaces de enseñar lo que es hoy conocido como empresariales', 20000),
(7, '', 'Formacion JSON', 'uuffff', 200),
(8, '', 'Curso con Benji', 'Un buen curso!!!!', 2000),
(9, '', 'Formacion Con Giovanni', '', 3000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
