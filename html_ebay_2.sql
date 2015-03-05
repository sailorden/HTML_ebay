-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-03-2015 a las 16:12:04
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `carrusel`
--

CREATE TABLE IF NOT EXISTS `carrusel` (
  `id_carrusel` int(11) NOT NULL,
  `id_html` int(11) NOT NULL,
  `image_carrusel` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `html`
--

CREATE TABLE IF NOT EXISTS `html` (
  `id_html` int(11) NOT NULL AUTO_INCREMENT,
  `id_template` int(11) NOT NULL,
  `name_html` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_product` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `old_price` decimal(10,2) DEFAULT NULL,
  `description_product` text COLLATE utf8_unicode_ci,
  `img_top_1_html` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_top_2_html` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_top_3_html` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_menu` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_2` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_image_1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_image_2` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_image_3` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_footer_1` text COLLATE utf8_unicode_ci,
  `text_footer_2` text COLLATE utf8_unicode_ci,
  `state` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id_html`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `id_html` int(11) NOT NULL,
  `name_menu` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `icono_menu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social`
--

CREATE TABLE IF NOT EXISTS `social` (
  `id_social` int(11) NOT NULL AUTO_INCREMENT,
  `id_html` int(11) NOT NULL,
  `social_1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'facebook',
  `social_2` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'twitter',
  `social_3` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'rss',
  `social_4` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'plus',
  `social_5` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'linkedin',
  `social_6` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'pinterest',
  `social_7` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'youtube',
  `social_8` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'skype',
  PRIMARY KEY (`id_social`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `style`
--

CREATE TABLE IF NOT EXISTS `style` (
  `id_style` int(11) NOT NULL AUTO_INCREMENT,
  `id_html` int(11) NOT NULL,
  `background_color` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `background_image` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primary_color` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `secondary_color` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_style`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabs`
--

CREATE TABLE IF NOT EXISTS `tabs` (
  `id_tab` int(11) NOT NULL AUTO_INCREMENT,
  `id_html` int(11) NOT NULL,
  `name_tab` varchar(20) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `text_tab` text CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`id_tab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `id_template` int(11) NOT NULL AUTO_INCREMENT,
  `name_template` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_template`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `templates`
--

INSERT INTO `templates` (`id_template`, `name_template`) VALUES
(1, 'Mobile Blue');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_back`
--

CREATE TABLE IF NOT EXISTS `user_back` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `sure_id` varchar(250) NOT NULL,
  `user_back_email` varchar(250) NOT NULL,
  `user_back_pass` varchar(100) NOT NULL,
  `user_back_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `user_back`
--

INSERT INTO `user_back` (`id`, `sure_id`, `user_back_email`, `user_back_pass`, `user_back_date`) VALUES
(1, '$2y$12$1049cdd411184a5df8a84uJgYe/ZLR6jJ7LvQVa46urieix3.y..6', 'NgLihXEwVI0aeIFf39pdliBQqcEepPJtAE6XZ/oTukooNnWHORLPqRAS+1dFc8Ad45WcORG7YATVpBRrWv7+sQ==', '$2y$12$1049cdd411184a5df8a84usqHKXsYg4jBocwTAcL5rhJ9oPzwxJM6', '2015-02-26 15:07:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
