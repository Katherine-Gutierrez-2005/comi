-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2022 a las 04:34:44
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jhv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `created`, `modified`, `status`) VALUES
(12, 'asd', 'asd', 'karolnataliacobos24@gmail.com', 'e213213', 'yo', '2022-09-27 13:31:04', '2022-09-27 13:31:04', 1),
(13, 'asd', 'asd', 'karolnataliacobos24@gmail.com', 'e213213', 'yo123', '2022-09-27 14:16:25', '2022-09-27 14:16:25', 1),
(14, 'asd', 'asd', 'karolnataliacobos24@gmail.com', 'e213213', 'yo123', '2022-09-27 16:49:12', '2022-09-27 16:49:12', 1),
(15, 'A', 'D', 'karolnataliacobos24@gmail.com', 'e213213', 'yo123', '2022-09-29 16:04:53', '2022-09-29 16:04:53', 1),
(16, 'asd', 'asd', 'karolnataliacobos24@gmail.com', 'e213213', 'yo123', '2022-09-29 16:06:56', '2022-09-29 16:06:56', 1),
(17, 'ana', 'gamboa', 'anavictoria010aguilar@gmail.com', '3102102121', 'asdfgg', '2022-10-16 17:53:25', '2022-10-16 17:53:25', 1),
(18, 'ana', 'gamboa', 'anavictoria010aguilar@gmail.com', '3102102121', 'asdfgg', '2022-10-16 17:57:36', '2022-10-16 17:57:36', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `grand_total` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `status` enum('Pending','Completed','Cancelled') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `grand_total`, `created`, `status`) VALUES
(12, 12, 1361700.00, '2022-09-27 13:31:04', 'Pending'),
(13, 13, 453900.00, '2022-09-27 14:16:25', 'Pending'),
(14, 14, 2479960.00, '2022-09-27 16:49:12', 'Pending'),
(15, 15, 453900.00, '2022-09-29 16:04:53', 'Pending'),
(16, 16, 453900.00, '2022-09-29 16:06:56', 'Pending'),
(17, 17, 19000.00, '2022-10-16 17:53:25', 'Pending'),
(18, 18, 6000.00, '2022-10-16 17:57:36', 'Pending');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(18, 12, 1, 3),
(19, 13, 1, 1),
(20, 14, 3, 4),
(21, 15, 1, 1),
(22, 16, 1, 1),
(23, 17, 3, 1),
(24, 17, 2, 1),
(25, 17, 1, 3),
(26, 18, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `description`, `price`, `created`, `modified`, `status`) VALUES
(1, 'lechuga.jpg', 'Lechuga', 'verdura', 3000, '2022-09-22 16:00:28', '2022-09-22 16:00:28', '20 kg'),
(2, 'papa.jpg', 'Papa pastusa', 'Tuberculo', 6000, '2022-09-22 16:12:34', '2022-09-22 16:12:34', '20 kg'),
(3, 'cebolla.jpg', 'cebolla cabezona', 'verdura', 4000, '2022-09-27 23:35:36', '2022-09-27 23:35:36', '30 kg'),
(4, 'cilantro.jpg', 'cilantro', 'Apiaceae', 1100, '2022-09-29 22:48:23', '2022-09-29 22:48:23', '60 kg'),
(5, 'fresas.jpg\r\n', 'fresa', 'fruta', 3000, '2022-09-29 23:02:12', '2022-09-29 23:02:12', '20 kg'),
(11, 'cereza.jpg', 'cereza', 'fruta', 2000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '20 kg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario1`
--

CREATE TABLE `usuario1` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario1`
--

INSERT INTO `usuario1` (`id`, `nombre`, `email`, `usuario`, `password`, `imagen`) VALUES
(1, 'Ana', 'anavictoria010aguilar@gmail.com', 'anita', 'abcdefg', 'Marvel2.jpg'),
(23, 'hdf', 'dfh@adda', 'hfggg', 'sdfssgfdd', '1_3081.jpg\r\n'),
(24, 'anaaaaaa', 'a@a', 'sad', 'asdfghj', ''),
(25, 'd', 'fd@ad', 'dsa', 'fghgfg', ''),
(26, 'd', 'fd@ad', 'jhg', 'fghgfg', ''),
(27, 'anaaaaaa', 'x@c', 'asdfg', 'asdfd', ''),
(28, 'anaaaaaa', 'a@a', 'dfsfdsdfsdf', 'dfsfssfdssddsf', ''),
(29, 'banana', 'banan@ana', 'jajanose', 'aleluya', ''),
(33, 'anaaaaaa', 'dsggds@adsa', 'sad', 'sdadssdasas', ''),
(34, 'jesus', 'diosmio@aaa', 'PORFAVORRR', 'ok', ''),
(35, 'Felipe', 'maria.velandia340@educacionbogota.edu.co', 'anita', 'abcdefg', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indices de la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario1`
--
ALTER TABLE `usuario1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuario1`
--
ALTER TABLE `usuario1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
