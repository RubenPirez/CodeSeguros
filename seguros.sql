-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-08-2021 a las 15:52:55
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seguros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `company_ID` int(10) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(80) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  PRIMARY KEY (`company_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `companies`
--

INSERT INTO `companies` (`company_ID`, `company_name`, `contact_person`, `contact_phone`) VALUES
(1, 'Mapfre', 'Alfredo López Aguado', '+34 915552229'),
(2, 'Mutua Madrileña de Seguros', 'Marta Sánchez Arrieta', '+34 936665423');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_ID` int(10) DEFAULT NULL,
  `customer_name` varchar(40) NOT NULL,
  `customer_first_name` varchar(100) DEFAULT NULL,
  `customer_DNI` varchar(9) NOT NULL,
  `customer_email` varchar(40) NOT NULL,
  `customer_phone_number` varchar(15) NOT NULL,
  `customer_address` varchar(100) DEFAULT NULL,
  `customer_city` varchar(50) DEFAULT NULL,
  `customer_country` varchar(40) DEFAULT NULL,
  `customer_CP` int(7) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customer_ID`),
  UNIQUE KEY `customer_DNI` (`customer_DNI`),
  KEY `user_ID` (`user_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`customer_ID`, `user_ID`, `customer_name`, `customer_first_name`, `customer_DNI`, `customer_email`, `customer_phone_number`, `customer_address`, `customer_city`, `customer_country`, `customer_CP`, `created`) VALUES
(1, 1, 'Alan', 'Sanz Sarmiento', '45251235K', 'alan@sanz.es', '77777777', 'Prueba 58', 'Madrid', 'EspaÃ±a', 28001, '2021-08-10 19:26:16'),
(2, 1, 'Roger', 'Smith Pantano', '12345678L', 'roger@smith.com', '666666666', 'Calle Pantano 30', 'Vascongadas', 'EspaÃ±a', 50505, '2021-08-10 21:28:47'),
(8, 7, 'Martha', 'Riera Caro', '25462126L', 'martha@riera.es', '+34964578236', 'Calle de arriba 28', 'Granada', 'España', 46587, '2021-08-26 20:53:53'),
(9, 4, 'Eli', 'FernÃ¡ndez Escudero', '32458796M', 'eli@escudero.com', '+34685999784', 'Principal 58', 'Salamanca', 'EspaÃ±a', 32685, '2021-08-26 20:59:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insurances`
--

DROP TABLE IF EXISTS `insurances`;
CREATE TABLE IF NOT EXISTS `insurances` (
  `insurance_ID` int(10) NOT NULL AUTO_INCREMENT,
  `customer_ID` int(10) DEFAULT NULL,
  `product_ID` int(10) DEFAULT NULL,
  `hiring_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `price` float DEFAULT NULL,
  `commission` float DEFAULT NULL,
  PRIMARY KEY (`insurance_ID`),
  KEY `customer_ID` (`customer_ID`),
  KEY `product_ID` (`product_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `insurances`
--

INSERT INTO `insurances` (`insurance_ID`, `customer_ID`, `product_ID`, `hiring_date`, `price`, `commission`) VALUES
(1, 1, 1, '2021-08-12 20:04:16', 55, 5.5),
(2, 2, 3, '2021-08-12 20:05:15', 999, 99.9),
(3, 2, 3, '2021-08-15 18:37:59', 250, 37.5),
(4, 2, 2, '2021-08-15 18:38:12', 390, 39),
(5, 2, 3, '2021-08-16 10:38:14', 500, 150),
(7, 8, 3, '2021-08-27 13:42:31', 680, 204);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_ID` int(10) NOT NULL AUTO_INCREMENT,
  `company_ID` int(10) DEFAULT NULL,
  `product_name` varchar(80) NOT NULL,
  `type` enum('auto','moto','hogar','vida') DEFAULT NULL,
  PRIMARY KEY (`product_ID`),
  KEY `company_ID` (`company_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`product_ID`, `company_ID`, `product_name`, `type`) VALUES
(1, 1, 'Seguro Coche Mapfre', 'auto'),
(2, 1, 'Seguro Casa Mapfre', 'hogar'),
(3, 2, 'Seguro Coche Mutua', 'auto'),
(7, 2, 'Seguro Casa Mutua', 'hogar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_ID` int(10) NOT NULL AUTO_INCREMENT,
  `mail` varchar(40) NOT NULL,
  `pass` char(40) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `first_name` varchar(60) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `user_DNI` char(9) NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_ID`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `user_DNI` (`user_DNI`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_ID`, `mail`, `pass`, `user_name`, `first_name`, `edad`, `user_DNI`, `created`) VALUES
(1, 'rubenpadelone@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'Rubén', 'Pírez Fernández', 42, '47021682E', '2021-08-24 21:27:34'),
(10, 'pepe@gamil.com', 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a', 'Pepe', 'Botella', 46, '47085268K', '2021-08-26 19:05:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
