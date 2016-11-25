-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2016 a las 05:16:58
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `Password` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`Id`, `Nombre`, `Apellido`, `Usuario`, `Password`) VALUES
(1, 'rico', 'ledezma', 'rico', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `Id` int(11) NOT NULL,
  `numeroventa` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` text COLLATE utf8_spanish_ci NOT NULL,
  `subtotal` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`Id`, `numeroventa`, `nombre`, `precio`, `imagen`, `cantidad`, `subtotal`) VALUES
(2, '1', 'Avena Quaker', '16.00', 'avena.jpeg', '1', '16'),
(3, '1', 'Avena Quaker', '16.00', 'avena.jpeg', '1', '16'),
(4, '1', 'Avena Quaker', '16.00', 'avena.jpeg', '1', '16'),
(5, '1', 'Avena Quaker', '16.00', 'avena.jpeg', '1', '16'),
(6, '1', 'Avena Quaker', '16.00', 'avena.jpeg', '1', '16'),
(7, '1', 'Avena Quaker', '16.00', 'avena.jpeg', '1', '16'),
(8, '1', 'Avena Quaker', '16.00', 'avena.jpeg', '1', '16'),
(9, '1', 'Avena Quaker', '16.00', 'avena.jpeg', '1', '16'),
(10, '1', 'Avena Quaker', '16.00', 'avena.jpeg', '1', '16'),
(11, '1', 'Avena Quaker', '16.00', 'avena.jpeg', '1', '16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(11) NOT NULL,
  `Pais` text COLLATE utf8_spanish_ci NOT NULL,
  `Estado` text COLLATE utf8_spanish_ci NOT NULL,
  `Municipio` text COLLATE utf8_spanish_ci NOT NULL,
  `Colonia` text COLLATE utf8_spanish_ci NOT NULL,
  `Calle` text COLLATE utf8_spanish_ci NOT NULL,
  `Numero` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES
(1, 'Avena Quaker', 'Quaker Oats 510 gr. Nutritiva', 'avena.jpeg', '16.00'),
(2, 'Azucar', '1 Kg. El trece', 'azucar.jpg', '15.00'),
(3, 'Frijoles la sierra', '260 gr. Frijoles negros enteros', 'beans.jpg', '$14.00'),
(4, 'Gelatina', '40 gr. Gelatina el trece', 'gelatina.jpg', '7.00'),
(5, 'Cacahuates', 'Sabritas', 'cacahuates.jpg', '7.50'),
(6, 'Pelon Pelo Rico', 'Tamarindo original', 'tam.jpg', '4.50'),
(7, 'Lucas', 'Gusano 38 gr.', 'lucas.jpg', '3.50'),
(8, 'Mazapán', 'Mazapán la rosa, 28 gr.', 'mazapan.jpg', '1.00'),
(9, 'Carlberg', 'Cerveza de malta premium', 'carlsberg.jpg', '30.00'),
(10, 'WDK', 'Bebida alcoholica', 'wdk.png', '27.00'),
(11, 'Sprite', 'Refresco 1.5 L', 'refresco.jpg', '17.00'),
(12, 'Pepsi', 'pepsi refresco 2.5 L.', 'pepsi.jpg', '18.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_compras`
--

CREATE TABLE `productos_compras` (
  `id_productosComras` int(11) NOT NULL,
  `id_productos` int(11) NOT NULL,
  `id_compras` int(11) NOT NULL,
  `id_Usuario` int(11) NOT NULL,
  `id_direccion` int(11) NOT NULL,
  `id_tarjeta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `id_tarjeta` int(11) NOT NULL,
  `num_tarjeta` text COLLATE utf8_spanish_ci NOT NULL,
  `num_seguridad` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_Usuario` int(11) NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Correo` text COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `Password` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_Usuario`, `Nombre`, `Correo`, `Usuario`, `Password`) VALUES
(1, 'Ricardo', 'tuzorls23@gmail.com', 'Ricardo', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_compras`
--
ALTER TABLE `productos_compras`
  ADD PRIMARY KEY (`id_productosComras`),
  ADD KEY `id_productos` (`id_productos`),
  ADD KEY `id_compras` (`id_compras`),
  ADD KEY `id_Usuario` (`id_Usuario`),
  ADD KEY `id_direccion` (`id_direccion`),
  ADD KEY `id_tarjeta` (`id_tarjeta`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`id_tarjeta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `id_tarjeta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos_compras`
--
ALTER TABLE `productos_compras`
  ADD CONSTRAINT `productos_compras_ibfk_1` FOREIGN KEY (`id_compras`) REFERENCES `compras` (`Id`),
  ADD CONSTRAINT `productos_compras_ibfk_2` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `productos_compras_ibfk_3` FOREIGN KEY (`id_tarjeta`) REFERENCES `tarjeta` (`id_tarjeta`),
  ADD CONSTRAINT `productos_compras_ibfk_4` FOREIGN KEY (`id_Usuario`) REFERENCES `usuario` (`id_Usuario`),
  ADD CONSTRAINT `productos_compras_ibfk_5` FOREIGN KEY (`id_direccion`) REFERENCES `direccion` (`id_direccion`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
