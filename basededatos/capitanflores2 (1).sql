-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2022 a las 03:10:38
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `capitanflores2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Calle` text NOT NULL,
  `Cruzamientos` text NOT NULL,
  `Numero` text NOT NULL,
  `Telefono` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID`, `Nombre`, `Calle`, `Cruzamientos`, `Numero`, `Telefono`) VALUES
(1, 'p', 'p', 'p', 'p', '55656'),
(2, 'Angel', 'Calle 20', '23 x 25', '56', '9999584215'),
(3, 'Koko', '14', '41', '41', '6466312'),
(5, 'Prueba', '23', '2', '23 y 21', '666'),
(0, 'juan', '72', 'entre la calle fea yla calle mala', '1|78', '38484858493');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `email`
--

CREATE TABLE `email` (
  `ID` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Codigo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `email`
--

INSERT INTO `email` (`ID`, `Email`, `Codigo`) VALUES
(20, 'ivanalfonsoperezfigueroa59@gmail.com', '161a84a8a3bd72'),
(21, 'ivanalfonsoperezfigueroa59@gmail.com', '161abcc813f22d'),
(22, 'ivanalfonsoperezfigueroa59@gmail.com', '161abcf1c38350'),
(23, 'ivanalfonsoperezfigueroa59@gmail.com', '161abcf33e54fb'),
(24, 'ivanalfonsoperezfigueroa59@gmail.com', '161abcfb898a17'),
(25, 'ivanalfonsoperezfigueroa59@gmail.com', '161abcfb9099eb'),
(26, 'ivanalfonsoperezfigueroa59@gmail.com', '161abd2d2ab093'),
(27, 'ivanalfonsoperezfigueroa59@gmail.com', '161abf97cbde18'),
(28, 'ivanalfonsoperezfigueroa59@gmail.com', '161ad7d9fa7e28'),
(29, 'ivanalfonsoperezfigueroa59@gmail.com', '161ad7e756ec7b'),
(30, 'ivanalfonsoperezfigueroa59@gmail.com', '161aea0685b5ef'),
(0, 'email@gmail.com', '1634869cfb1901');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `ID_Factura` int(11) NOT NULL,
  `ID_Venta` int(11) NOT NULL,
  `Ticket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`ID_Factura`, `ID_Venta`, `Ticket`) VALUES
(1, 1, 18283821);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad_ventas`
--

CREATE TABLE `modalidad_ventas` (
  `ID_MV` int(11) NOT NULL,
  `MODALIDAD_VENTAS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modalidad_ventas`
--

INSERT INTO `modalidad_ventas` (`ID_MV`, `MODALIDAD_VENTAS`) VALUES
(1, 'Domicilio '),
(2, 'Comedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `ID_TRABAJO` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `APELLIDO_PATERNO` varchar(30) NOT NULL,
  `APELLIDO_MATERNO` varchar(30) NOT NULL,
  `TELEFONO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`ID_TRABAJO`, `NOMBRE`, `APELLIDO_PATERNO`, `APELLIDO_MATERNO`, `TELEFONO`) VALUES
(1, 'U', 'U', 'U', 85578578),
(3, 't', 't', 't', 6969),
(4, 'v', 'v', 'v', 66),
(5, 'KM', 'M', 'M', 4),
(8, 'Jose', 'Perez', 'Diaz', 5555988),
(9, 'Angel', 'Concha', 'Valdez', 9995558);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillos`
--

CREATE TABLE `platillos` (
  `ID_PLATILLO` int(11) NOT NULL,
  `PLATILLO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `platillos`
--

INSERT INTO `platillos` (`ID_PLATILLO`, `PLATILLO`) VALUES
(1, 'Ceviche de camaron'),
(2, 'Ceviche de pulpo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precio`
--

CREATE TABLE `precio` (
  `ID_PRECIO` int(11) NOT NULL,
  `PRECIO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `precio`
--

INSERT INTO `precio` (`ID_PRECIO`, `PRECIO`) VALUES
(1, '165'),
(2, '185');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ID_REGISTRO` int(11) NOT NULL,
  `ID_Venta` int(11) NOT NULL,
  `ID_TRABAJO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`ID_REGISTRO`, `ID_Venta`, `ID_TRABAJO`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `ID_Rol` int(11) NOT NULL,
  `Rol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`ID_Rol`, `Rol`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpago`
--

CREATE TABLE `tpago` (
  `ID_TP` int(11) NOT NULL,
  `TPAGO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tpago`
--

INSERT INTO `tpago` (`ID_TP`, `TPAGO`) VALUES
(1, 'Tarjeta'),
(2, 'Efectivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `password` text NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `ID_Rol` int(11) NOT NULL,
  `email` text NOT NULL,
  `nombreimg` text NOT NULL,
  `profilepicture` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `usuario`, `password`, `firstName`, `lastName`, `ID_Rol`, `email`, `nombreimg`, `profilepicture`) VALUES
(1, 'admin', '12345', 'juan', 'pedro', 1, '117@superrito.com', 'ewe', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
