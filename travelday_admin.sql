-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-12-2018 a las 06:05:28
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `travelday_admin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barcos`
--

CREATE TABLE `barcos` (
  `id` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `compania` text COLLATE utf8_spanish_ci NOT NULL,
  `pasajeros` int(11) NOT NULL,
  `construccion` bigint(11) NOT NULL,
  `tonelaje` bigint(11) NOT NULL,
  `tripulacion` bigint(11) NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `velocidad` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `cubiertas` int(11) NOT NULL,
  `largo` int(11) NOT NULL,
  `ancho` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `barcos`
--

INSERT INTO `barcos` (`id`, `idCategoria`, `nombre`, `compania`, `pasajeros`, `construccion`, `tonelaje`, `tripulacion`, `descripcion`, `velocidad`, `cubiertas`, `largo`, `ancho`, `imagen`, `codigo`) VALUES
(3, 1, 'costa concordia', '1', 1, 1, 1, 1, '1', '1', 1, 1, 1, 'vistas/img/productos/103/997.jpg', '103'),
(6, 1, 'as', '1', 1, 1, 1, 1, '1', '1', 1, 1, 1, 'vistas/img/productos/104/625.jpg', '104'),
(7, 1, 'dsvsdv', 'fwrgf', 2, 2, 2, 2, '2', '2', 2, 2, 2, 'vistas/img/productos/105/408.png', '105'),
(8, 4, 'TITANIC', '1', 1, 1, 1, 1, '1', '1', 1, 1, 1, 'vistas/img/productos/401/553.jpg', '401');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
(1, 'tours', '2018-11-06 01:42:20'),
(2, 'Renta de autos', '2018-11-06 01:42:03'),
(3, 'reservaciones', '2018-10-31 00:22:57'),
(4, 'cruceros', '2018-10-31 00:22:44'),
(5, 'hoteles', '2018-10-31 00:22:30'),
(6, 'vuelos', '2018-10-31 00:22:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `documento` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono2` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `documento`, `direccion`, `email`, `telefono`, `telefono2`, `fecha`) VALUES
(1, 'Juan Villegas', '81611239', 'ALFREDO V. BONFIL', 'duartebonfil@gmail.com', '(998) 243-2827', '(998) 263-2345', '2018-10-31 01:17:57'),
(2, 'pedro', 'ducj721121mma', 'c. leona vicario smz 308 lt 3  alfredo v. bonfil', 'alexisduarte1512@gmail.com', '(333) 333-3333', '(333) 333-3333', '2018-11-15 03:31:31'),
(3, 'papa', '223444', 'lkdkfkfl', 'correo@prueba.com', '(999) 999-9999', '(999) 999-9999', '2018-12-03 17:12:50'),
(4, 'pape', 'ducj721121mma', 'c. leona vicario smz 308 lt 3  alfredo v. bonfil', 'alexisduarte1512@gmail.com', '(999) 999-9999', '(999) 999-9999', '2018-11-21 03:49:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `dob` date NOT NULL,
  `nacionalidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `emailpersonal` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono2` text COLLATE utf8_spanish_ci NOT NULL,
  `extencion` int(10) NOT NULL,
  `area` text COLLATE utf8_spanish_ci NOT NULL,
  `puesto` text COLLATE utf8_spanish_ci NOT NULL,
  `dni` text COLLATE utf8_spanish_ci NOT NULL,
  `folio_dni` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cp` int(20) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_baja` date NOT NULL,
  `estatus` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `dob`, `nacionalidad`, `email`, `emailpersonal`, `telefono`, `telefono2`, `extencion`, `area`, `puesto`, `dni`, `folio_dni`, `pais`, `direccion`, `cp`, `fecha_alta`, `fecha_baja`, `estatus`) VALUES
(1, 'alexis', '1991-12-31', 'ducj721121mma', 'alexisduarte1512@gmail.com', 'alexisduarte1512@hotmail.com', '(998) 243-2827', '(998) 112-3987', 234, 'desarrollo', 'programador', 'visa', 'kb8766', 'mexico', 'ssf', 77560, '2018-10-25 00:43:00', '0000-00-00', 'activo'),
(2, 'juan', '2034-05-04', 'mexicano', 'alexisduarte1512@gmail.com', 'alexisduarte1512@hotmail.com', '(992) 838-9210', '(123) 049-2849', 34, 'desarrollo', 'programador', 'weerrrf', 'kdks34', 'mexico', 'c. leona vicario smz 308 lt 3  alfredo v. bonfil', 445, '2018-10-25 00:50:35', '0000-00-00', 'activo'),
(3, 'marcos antonio duarte garcia', '2022-02-22', 'eeuu', 'ajsjdjdj@sdjdj.com', 'sjddfh@jdjdj.com', '(888) 773-8499', '(727) 384-9494', 45, 'ventas', 'vendedor', 'visa', '9283847d84he83', 'colombia', 'c. leona vicario smz 308 lt 3  alfredo v. bonfil', 77560, '2018-10-25 01:38:19', '2018-10-30', 'inactivo'),
(5, 'juan', '2012-03-04', 'msjdjw', 'nwxjnxw@jdjdj.com', 'alskeksd@hotmail.com', '(999) 999-9999', '(999) 999-9999', 7766, 'desarrollo', 'hjdhjwd', 'nsb7sxh', '1882bbs', 'jjajwje', 'jwjwjwj', 18282, '2018-10-26 03:49:04', '0000-00-00', 'activo'),
(6, 'alexis', '1991-12-15', 'mexicano', 'alexisduarte1512@gmail.com', 'alexisduarte1512@hotmail.com', '(998) 243-2827', '(019) 203-8263', 76, 'desarrollo', 'programador', 'visa', '8267sjdh2283', 'mexico', 'c. leona vicario smz 308 lt 3  alfredo v. bonfil', 77560, '2018-10-31 00:19:45', '0000-00-00', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `codigo`, `descripcion`, `imagen`, `stock`, `precio_compra`, `precio_venta`, `ventas`, `fecha`) VALUES
(1, 1, '101', 'Aspiradora Industrial ', 'vistas/img/productos/101/105.png', 15, 1000, 1200, 0, '2017-12-22 16:32:49'),
(3, 1, '103', 'Compresor de Aire para pintura', 'vistas/img/productos/103/763.jpg', 20, 3000, 4200, 0, '2017-12-22 16:33:31'),
(4, 1, '104', 'Cortadora de Adobe sin Disco ', 'vistas/img/productos/104/957.jpg', 20, 4000, 5600, 0, '2017-12-22 16:33:52'),
(5, 1, '105', 'Cortadora de Piso sin Disco ', 'vistas/img/productos/105/630.jpg', 20, 1540, 2156, 0, '2017-12-22 16:34:08'),
(6, 1, '106', 'Disco Punta Diamante ', 'vistas/img/productos/106/635.jpg', 20, 1100, 1540, 0, '2017-12-22 16:34:20'),
(8, 1, '108', 'Guadañadora ', 'vistas/img/productos/108/163.jpg', 20, 1540, 2156, 0, '2017-12-22 16:34:44'),
(9, 1, '109', 'Hidrolavadora Eléctrica ', 'vistas/img/productos/109/769.jpg', 20, 2600, 3640, 0, '2017-12-22 16:35:08'),
(10, 1, '110', 'Hidrolavadora Gasolina', 'vistas/img/productos/110/582.jpg', 20, 2210, 3094, 0, '2017-12-22 16:35:19'),
(11, 1, '111', 'Motobomba a Gasolina', 'vistas/img/productos/default/anonymous.png', 20, 2860, 4004, 0, '2017-12-21 21:56:28'),
(12, 1, '112', 'Motobomba El?ctrica', 'vistas/img/productos/default/anonymous.png', 20, 2400, 3360, 0, '2017-12-21 21:56:28'),
(13, 1, '113', 'Sierra Circular ', 'vistas/img/productos/default/anonymous.png', 20, 1100, 1540, 0, '2017-12-21 21:56:28'),
(14, 1, '114', 'Disco de tugsteno para Sierra circular', 'vistas/img/productos/default/anonymous.png', 20, 4500, 6300, 0, '2017-12-21 21:56:28'),
(15, 1, '115', 'Soldador Electrico ', 'vistas/img/productos/default/anonymous.png', 20, 1980, 2772, 0, '2017-12-21 21:56:28'),
(16, 1, '116', 'Careta para Soldador', 'vistas/img/productos/default/anonymous.png', 20, 4200, 5880, 0, '2017-12-21 21:56:28'),
(17, 1, '117', 'Torre de iluminacion ', 'vistas/img/productos/default/anonymous.png', 20, 1800, 2520, 0, '2017-12-21 21:56:28'),
(18, 2, '201', 'Martillo Demoledor de Piso 110V', 'vistas/img/productos/default/anonymous.png', 20, 5600, 7840, 0, '2017-12-21 21:56:28'),
(19, 2, '202', 'Muela o cincel martillo demoledor piso', 'vistas/img/productos/default/anonymous.png', 20, 9600, 13440, 0, '2017-12-21 21:56:28'),
(20, 2, '203', 'Taladro Demoledor de muro 110V', 'vistas/img/productos/default/anonymous.png', 20, 3850, 5390, 0, '2017-12-21 21:56:28'),
(21, 2, '204', 'Muela o cincel martillo demoledor muro', 'vistas/img/productos/default/anonymous.png', 20, 9600, 13440, 0, '2017-12-21 21:56:28'),
(22, 2, '205', 'Taladro Percutor de 1/2 Madera y Metal', 'vistas/img/productos/default/anonymous.png', 20, 8000, 11200, 0, '2017-12-21 22:28:24'),
(23, 2, '206', 'Taladro Percutor SDS Plus 110V', 'vistas/img/productos/default/anonymous.png', 20, 3900, 5460, 0, '2017-12-21 21:56:28'),
(24, 2, '207', 'Taladro Percutor SDS Max 110V (Mineria)', 'vistas/img/productos/default/anonymous.png', 20, 4600, 6440, 0, '2017-12-21 21:56:28'),
(25, 3, '301', 'Andamio colgante', 'vistas/img/productos/default/anonymous.png', 20, 1440, 2016, 0, '2017-12-21 21:56:28'),
(26, 3, '302', 'Distanciador andamio colgante', 'vistas/img/productos/default/anonymous.png', 20, 1600, 2240, 0, '2017-12-21 21:56:28'),
(27, 3, '303', 'Marco andamio modular ', 'vistas/img/productos/default/anonymous.png', 20, 900, 1260, 0, '2017-12-21 21:56:28'),
(28, 3, '304', 'Marco andamio tijera', 'vistas/img/productos/default/anonymous.png', 20, 100, 140, 0, '2017-12-21 21:56:28'),
(29, 3, '305', 'Tijera para andamio', 'vistas/img/productos/default/anonymous.png', 20, 162, 226, 0, '2017-12-21 21:56:28'),
(30, 3, '306', 'Escalera interna para andamio', 'vistas/img/productos/default/anonymous.png', 20, 270, 378, 0, '2017-12-21 21:56:28'),
(31, 3, '307', 'Pasamanos de seguridad', 'vistas/img/productos/default/anonymous.png', 20, 75, 105, 0, '2017-12-21 21:56:28'),
(32, 3, '308', 'Rueda giratoria para andamio', 'vistas/img/productos/default/anonymous.png', 20, 168, 235, 0, '2017-12-21 21:56:28'),
(33, 3, '309', 'Arnes de seguridad', 'vistas/img/productos/default/anonymous.png', 20, 1750, 2450, 0, '2017-12-21 21:56:28'),
(34, 3, '310', 'Eslinga para arnes', 'vistas/img/productos/default/anonymous.png', 20, 175, 245, 0, '2017-12-21 21:56:28'),
(35, 3, '311', 'Plataforma Met?lica', 'vistas/img/productos/default/anonymous.png', 20, 420, 588, 0, '2017-12-21 21:56:28'),
(36, 4, '401', 'Planta Electrica Diesel 6 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3500, 4900, 0, '2017-12-21 21:56:28'),
(37, 4, '402', 'Planta Electrica Diesel 10 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3550, 4970, 0, '2017-12-21 21:56:28'),
(38, 4, '403', 'Planta Electrica Diesel 20 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3600, 5040, 0, '2017-12-21 21:56:28'),
(39, 4, '404', 'Planta Electrica Diesel 30 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3650, 5110, 0, '2017-12-21 21:56:28'),
(40, 4, '405', 'Planta Electrica Diesel 60 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3700, 5180, 0, '2017-12-21 21:56:28'),
(41, 4, '406', 'Planta Electrica Diesel 75 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3750, 5250, 0, '2017-12-21 21:56:28'),
(42, 4, '407', 'Planta Electrica Diesel 100 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3800, 5320, 0, '2017-12-21 21:56:28'),
(43, 4, '408', 'Planta Electrica Diesel 120 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3850, 5390, 0, '2017-12-21 21:56:28'),
(44, 5, '501', 'Escalera de Tijera Aluminio ', 'vistas/img/productos/default/anonymous.png', 20, 350, 490, 0, '2017-12-21 21:56:28'),
(45, 5, '502', 'Extension Electrica ', 'vistas/img/productos/default/anonymous.png', 20, 370, 518, 0, '2017-12-21 21:56:28'),
(46, 5, '503', 'Gato tensor', 'vistas/img/productos/default/anonymous.png', 20, 380, 532, 0, '2017-12-21 21:56:28'),
(47, 5, '504', 'Lamina Cubre Brecha ', 'vistas/img/productos/default/anonymous.png', 20, 380, 532, 0, '2017-12-21 21:56:28'),
(48, 5, '505', 'Llave de Tubo', 'vistas/img/productos/default/anonymous.png', 20, 480, 672, 0, '2017-12-21 21:56:28'),
(49, 5, '506', 'Manila por Metro', 'vistas/img/productos/default/anonymous.png', 20, 600, 840, 0, '2017-12-21 21:56:28'),
(50, 5, '507', 'Polea 2 canales', 'vistas/img/productos/default/anonymous.png', 20, 900, 1260, 0, '2017-12-21 21:56:28'),
(51, 5, '508', 'Tensor', 'vistas/img/productos/default/anonymous.png', 20, 100, 140, 0, '2017-12-21 21:56:28'),
(52, 5, '509', 'Bascula ', 'vistas/img/productos/default/anonymous.png', 20, 130, 182, 0, '2017-12-21 21:56:28'),
(53, 5, '510', 'Bomba Hidrostatica', 'vistas/img/productos/default/anonymous.png', 20, 770, 1078, 0, '2017-12-21 21:56:28'),
(54, 5, '511', 'Chapeta', 'vistas/img/productos/default/anonymous.png', 20, 660, 924, 0, '2017-12-21 21:56:28'),
(55, 5, '512', 'Cilindro muestra de concreto', 'vistas/img/productos/default/anonymous.png', 20, 400, 560, 0, '2017-12-21 21:56:28'),
(56, 5, '513', 'Cizalla de Palanca', 'vistas/img/productos/default/anonymous.png', 20, 450, 630, 0, '2017-12-21 21:56:28'),
(57, 5, '514', 'Cizalla de Tijera', 'vistas/img/productos/default/anonymous.png', 20, 580, 812, 0, '2017-12-21 21:56:28'),
(58, 5, '515', 'Coche llanta neumatica', 'vistas/img/productos/default/anonymous.png', 20, 420, 588, 0, '2017-12-21 21:56:28'),
(59, 5, '516', 'Cono slump', 'vistas/img/productos/default/anonymous.png', 20, 140, 196, 0, '2017-12-21 21:56:28'),
(60, 5, '517', 'Cortadora de Baldosin', 'vistas/img/productos/default/anonymous.png', 20, 930, 1302, 0, '2017-12-21 21:56:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `cProveedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` int(11) NOT NULL,
  `folio` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `barco` int(11) NOT NULL,
  `imgBarco` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idRuta` int(11) NOT NULL,
  `imgRuta` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `htmlRuta` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idCliente` int(11) NOT NULL,
  `adultos` int(11) DEFAULT NULL,
  `menores` int(11) DEFAULT NULL,
  `nombrePasajeros` text COLLATE utf8_spanish_ci NOT NULL,
  `fechaInicio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fechaFinal` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `habitacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `numHabitacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `mealPlan` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `vencimiento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `costo` float NOT NULL,
  `metodoPago` text COLLATE utf8_spanish_ci NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `comentarios` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `cProveedor`, `categoria`, `folio`, `id_vendedor`, `barco`, `imgBarco`, `idRuta`, `imgRuta`, `htmlRuta`, `idCliente`, `adultos`, `menores`, `nombrePasajeros`, `fechaInicio`, `fechaFinal`, `habitacion`, `numHabitacion`, `mealPlan`, `estatus`, `vencimiento`, `costo`, `metodoPago`, `codigo`, `comentarios`, `fecha`) VALUES
(10, '1734937445', 4, 401, 63, 3, 'vistas/img/productos/103/997.jpg', 2, 'vistas/img/rutas/102/980.jpg', '<table class=\"table\">\r\n  <thead class=\"thead-dark\" >\r\n    <tr>\r\n      <th scope=\"col\">#</th>\r\n      <th scope=\"col\">First</th>\r\n      <th scope=\"col\">Last</th>\r\n      <th scope=\"col\">Handle</th>\r\n    </tr>\r\n  </thead>\r\n  <tbody>\r\n    <tr>\r\n      <th scope', 1, 1, 0, '[{\"nombre\":\"juan perez gonzales\",\"nacimiento\":\"1991-12-15\",\"genero\":\"hombre\"}]', '2015/12/15', '2011/11/11', 'habitacion', 'cqefq', 'qcqe', 'inactivo', '2012/12/12', 132334, 'Paypal', '24545', 'otro comentario', '2018-12-02 23:50:35'),
(11, '12574555', 4, 402, 1, 8, 'vistas/img/productos/401/553.jpg', 2, 'vistas/img/rutas/102/980.jpg', '<table class=\"table\">\r\n  <thead class=\"thead-dark\" >\r\n    <tr>\r\n      <th scope=\"col\">#</th>\r\n      <th scope=\"col\">First</th>\r\n      <th scope=\"col\">Last</th>\r\n      <th scope=\"col\">Handle</th>\r\n    </tr>\r\n  </thead>\r\n  <tbody>\r\n    <tr>\r\n      <th scope', 4, 1, 0, '[{\"nombre\":\"juan perez gonzales\",\"nacimiento\":\"1991-12-15\",\"genero\":\"hombre\"}]', '2011/11/11', '2011/11/11', 'dbe', 'ebe', 'erve', ' activo', '2022/02/22', 34564, 'tarjetaDebito', '5245', 'ervbe', '2018-12-03 03:41:50'),
(12, '123456864322', 4, 403, 1, 8, 'vistas/img/productos/401/553.jpg', 2, 'vistas/img/rutas/102/980.jpg', '<table class=\"table\">\r\n  <thead class=\"thead-dark\" >\r\n    <tr>\r\n      <th scope=\"col\">#</th>\r\n      <th scope=\"col\">First</th>\r\n      <th scope=\"col\">Last</th>\r\n      <th scope=\"col\">Handle</th>\r\n    </tr>\r\n  </thead>\r\n  <tbody>\r\n    <tr>\r\n      <th scope', 3, 2, 3, '[{\"nombre\":\"juan perez gonzales\",\"nacimiento\":\"1991-12-15\",\"genero\":\"hombre\"}]', '2011/11/11', '2071/06/26', 'dva', 'khvkv', 'blscbl', ' activo', '2011/02/03', 234450, 'tarjetaCredito', '345636', 'comment', '2018-12-06 01:22:27'),
(13, 'pendiente', 1, 101, 1, 3, 'vistas/img/productos/103/997.jpg', 2, 'vistas/img/rutas/102/980.jpg', '<table class=\"table\">\r\n  <thead class=\"thead-dark\" >\r\n    <tr>\r\n      <th scope=\"col\">#</th>\r\n      <th scope=\"col\">First</th>\r\n      <th scope=\"col\">Last</th>\r\n      <th scope=\"col\">Handle</th>\r\n    </tr>\r\n  </thead>\r\n  <tbody>\r\n    <tr>\r\n      <th scope', 1, 1, 0, '[{\"nombre\":\"juan\",\"nacimiento\":\"1991-12-15\",\"genero\":\"Masculino\"}]', '1991/12/15', '1991/12/12', 'sfcc', 'hi f', 'ojbvb', ' activo', '2042/04/05', 0, 'tarjetaCredito', '1341', 'hget', '2018-12-06 01:48:42'),
(14, '777564264', 4, 404, 1, 6, 'vistas/img/productos/104/625.jpg', 2, 'vistas/img/rutas/102/980.jpg', '<table class=\"table\">\r\n  <thead class=\"thead-dark\" >\r\n    <tr>\r\n      <th scope=\"col\">#</th>\r\n      <th scope=\"col\">First</th>\r\n      <th scope=\"col\">Last</th>\r\n      <th scope=\"col\">Handle</th>\r\n    </tr>\r\n  </thead>\r\n  <tbody>\r\n    <tr>\r\n      <th scope', 2, 2, 3, '[{\"nombre\":\"alexis duarte\",\"nacimiento\":\"1991-11-12\",\"genero\":\"Masculino\"},{\"nombre\":\"maria juarez\",\"nacimiento\":\"1991-12-15\",\"genero\":\"Femenino\"},{\"nombre\":\"pedro\",\"nacimiento\":\"1111-11-11\",\"genero\":\"Masculino\"},{\"nombre\":\"juan\",\"nacimiento\":\"1111-11-11\",\"genero\":\"Masculino\"},{\"nombre\":\"maria\",\"nacimiento\":\"1111-11-11\",\"genero\":\"Masculino\"}]', '2011/11/11', '2011/11/11', '1111111', 'dcwc', 'qeccccc', ' activo', '2011/11/11', 230, 'tarjetaCredito', '311', 'wvc2w', '2018-12-09 03:59:29'),
(15, 'pendiente', 4, 405, 1, 8, 'vistas/img/productos/401/553.jpg', 2, 'vistas/img/rutas/102/980.jpg', '<table class=\"table\">\r\n  <thead class=\"thead-dark\" >\r\n    <tr>\r\n      <th scope=\"col\">#</th>\r\n      <th scope=\"col\">First</th>\r\n      <th scope=\"col\">Last</th>\r\n      <th scope=\"col\">Handle</th>\r\n    </tr>\r\n  </thead>\r\n  <tbody>\r\n    <tr>\r\n      <th scope', 3, 1, 1, '[{\"nombre\":\"JUAN\",\"nacimiento\":\"1991-12-15\",\"genero\":\"Masculino\"},{\"nombre\":\"PEDRO\",\"nacimiento\":\"1999-12-15\",\"genero\":\"Masculino\"}]', '2012/12/12', '2012/02/12', '111', 'QECQ11', 'ADCAC', ' activo', '2012/12/12', 2000, 'tarjetaCredito', '2345533', 'CSAS', '2018-12-10 01:36:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `noches` int(11) NOT NULL,
  `puertos` int(11) NOT NULL,
  `embarque` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `desembarque` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `html` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id`, `idCategoria`, `codigo`, `descripcion`, `noches`, `puertos`, `embarque`, `desembarque`, `html`, `imagen`, `fecha`) VALUES
(2, 1, 102, 'ruta b', 3, 3, 'sfd', 'da', '<table class=\"table\">\r\n  <thead class=\"thead-dark\" >\r\n    <tr>\r\n      <th scope=\"col\">#</th>\r\n      <th scope=\"col\">First</th>\r\n      <th scope=\"col\">Last</th>\r\n      <th scope=\"col\">Handle</th>\r\n    </tr>\r\n  </thead>\r\n  <tbody>\r\n    <tr>\r\n      <th scope=\"row\">1</th>\r\n      <td>Mark</td>\r\n      <td>Otto</td>\r\n      <td>@mdo</td>\r\n    </tr>\r\n    <tr>\r\n      <th scope=\"row\">2</th>\r\n      <td>Jacob</td>\r\n      <td>Thornton</td>\r\n      <td>@fat</td>\r\n    </tr>\r\n    <tr>\r\n      <th scope=\"row\">3</th>\r\n      <td>Larry</td>\r\n      <td>the Bird</td>\r\n      <td>@twitter</td>\r\n    </tr>\r\n  </tbody>\r\n</table>\r\n\r\n<table class=\"table\">\r\n  <thead class=\"thead-light\">\r\n    <tr>\r\n      <th scope=\"col\">#</th>\r\n      <th scope=\"col\">First</th>\r\n      <th scope=\"col\">Last</th>\r\n      <th scope=\"col\">Handle</th>\r\n    </tr>\r\n  </thead>\r\n  <tbody>\r\n    <tr>\r\n      <th scope=\"row\">1</th>\r\n      <td>Mark</td>\r\n      <td>Otto</td>\r\n      <td>@mdo</td>\r\n    </tr>\r\n    <tr>\r\n      <th scope=\"row\">2</th>\r\n      <td>Jacob</td>\r\n      <td>Thornton</td>\r\n      <td>@fat</td>\r\n    </tr>\r\n    <tr>\r\n      <th scope=\"row\">3</th>\r\n      <td>Larry</td>\r\n      <td>the Bird</td>\r\n      <td>@twitter</td>\r\n    </tr>\r\n  </tbody>\r\n</table>', 'vistas/img/rutas/102/980.jpg', '2018-12-09 18:18:01'),
(3, 4, 401, 'RUTA A', 5, 3, 'costa rica', 'panama', 'fljfkkdkñdsñk', 'vistas/img/rutas/401/226.jpg', '2018-11-28 01:47:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Administrador', 'admin', '$2a$07$asxx54ahjppf45sd87a5aunxs9bkpyGmGE/.vekdjFg83yRec789S', 'Administrador', 'vistas/img/usuarios/admin/191.jpg', 1, '2018-12-09 20:59:31', '2018-12-10 01:59:31'),
(57, 'Juan Fernando Urrego', 'juan', '$2a$07$asxx54ahjppf45sd87a5auwRi.z6UsW7kVIpm0CUEuCpmsvT2sG6O', 'Administrador', 'vistas/img/usuarios/juan/461.jpg', 1, '2018-10-22 22:25:02', '2018-10-23 03:25:02'),
(58, 'Julio Gómez', 'julio', '$2a$07$asxx54ahjppf45sd87a5auQhldmFjGsrgUipGlmQgDAcqevQZSAAC', 'Especial', 'vistas/img/usuarios/julio/100.png', 1, '2017-12-21 12:07:39', '2017-12-21 17:07:39'),
(63, 'prueba2', 'prueba', '$2a$07$asxx54ahjppf45sd87a5auBxWKi32TyN7LTmhz0ONBYdcwSQJ0lWO', 'Especial', 'vistas/img/usuarios/prueba/550.jpg', 1, '2018-12-08 10:10:14', '2018-12-08 15:10:14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barcos`
--
ALTER TABLE `barcos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `barcos`
--
ALTER TABLE `barcos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
