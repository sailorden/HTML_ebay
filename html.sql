-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2015 a las 13:27:00
-- Versión del servidor: 5.6.17-log
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `html_ebay`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `html`
--

CREATE TABLE IF NOT EXISTS `html` (
  `id_html` int(11) NOT NULL AUTO_INCREMENT,
  `id_template` int(11) NOT NULL,
  `name_html` varchar(30) COLLATE utf16_unicode_ci DEFAULT NULL,
  `name_product` varchar(30) COLLATE utf16_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `old_price` decimal(10,2) DEFAULT NULL,
  `description_product` text COLLATE utf16_unicode_ci,
  `img_top_1_html` varchar(250) COLLATE utf16_unicode_ci DEFAULT NULL,
  `img_top_2_html` varchar(250) COLLATE utf16_unicode_ci DEFAULT NULL,
  `img_top_3_html` varchar(250) COLLATE utf16_unicode_ci DEFAULT NULL,
  `name_menu` varchar(25) COLLATE utf16_unicode_ci DEFAULT NULL,
  `banner_1` varchar(250) COLLATE utf16_unicode_ci DEFAULT NULL,
  `banner_2` varchar(250) COLLATE utf16_unicode_ci DEFAULT NULL,
  `shipping_image_1` varchar(250) COLLATE utf16_unicode_ci DEFAULT NULL,
  `shipping_image_2` varchar(250) COLLATE utf16_unicode_ci DEFAULT NULL,
  `shipping_image_3` varchar(250) COLLATE utf16_unicode_ci DEFAULT NULL,
  `text_footer_1` text COLLATE utf16_unicode_ci,
  `text_footer_2` text COLLATE utf16_unicode_ci,
  `state` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id_html`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
