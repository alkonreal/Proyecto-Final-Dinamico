-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2020 a las 18:31:13
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
  `categoria` enum('Cursos','Montaje','Administración Sistemas','Administración Redes','Administración de Servidores') NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `img`, `nombre`, `categoria`, `descripcion`, `precio`) VALUES
(1, 'java.jpg', 'Formacion Java', 'Cursos', 'Bienvenido a Java desde Cero. En este curso online y gratis aprenderás del lenguaje más popular del mundo hasta convertirte en experto. Empieza a aprender desde ya! a programar en Java con este curso ', 50),
(2, 'html.jpg', 'Formacion html', 'Cursos', 'Curso online y gratis de www.Technicum.com. Entra y aprende paso a paso con nuestro tutorial y manual HTML para principiantes.', 75),
(3, 'servidor.png', 'Instalaciones de Servidores', 'Administración de Servidores', 'Instalación y Configuración de Servicios Intranet / Extranet / Internet. Instalación, configuración y administración de servidores DNS.', 50),
(4, 'tecnico.jpg', 'Soporte técnico a domicilio', 'Montaje', 'Técnico en Sistemas Microinformáticos y Redes. Soporte Técnico y Configuración Remota. Mantenimiento de Sistemas Informáticos.', 25),
(5, 'sistema.jpg', 'instalacion de sistemas operativos', 'Administración Sistemas', 'Procedimiento de instalación del sistema operativo.\r\n\r\n- Windows\r\n- Linux \r\n- Solaris\r\n', 25),
(6, 'montaje.jpg', 'Formación de montaje y sistema de redes', 'Montaje', 'Este curso gratuito es útil y está pensado para cualquier persona que desee montar y mantener ordenadores y sistemas de redes.', 25),
(7, 'json.jpg', 'Formacion JSON', 'Cursos', 'Curso de JSON Online.Sin coste. Sin registro. Siempre disponible. Contenidos de calidad.', 75),
(8, 'javascript.jpg', 'Formación JavaScript', 'Cursos', 'En este curso aprenderemos el lenguaje JavaScript desde cero, de forma sencilla y dinámica, y paso a paso.', 75),
(9, 'docker.png', 'Formacion Docker', 'Administración Sistemas', 'El Curso de Docker está dirigido a estudiantes y profesionales de ingeniería, diseño gráfico, administración de empresa', 50),
(10, 'terraform.png', 'Formación de terraform', 'Cursos', 'Con Terraform podrás crear, cambiar, destruir y administrar entornos cloud de forma ágil y efectiva. Terraform trabaja bajo multitud de proveedores como AWS, Azure, OpenStack y otros.', 100);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
