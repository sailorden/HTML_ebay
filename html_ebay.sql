-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2015 a las 12:35:58
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
  `title_footer_1` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_footer_2` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_footer_1` text COLLATE utf8_unicode_ci,
  `text_footer_2` text COLLATE utf8_unicode_ci,
  `state` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id_html`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `html`
--

INSERT INTO `html` (`id_html`, `id_template`, `name_html`, `name_product`, `price`, `old_price`, `description_product`, `img_top_1_html`, `img_top_2_html`, `img_top_3_html`, `name_menu`, `banner_1`, `banner_2`, `shipping_image_1`, `shipping_image_2`, `shipping_image_3`, `title_footer_1`, `title_footer_2`, `text_footer_1`, `text_footer_2`, `state`) VALUES
(1, 1, 'mobile_blue_primary', 'Producto de prueba', '80.99', '99.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut mattis dolor. Pellentesque ultricies turpis eget tellus hendrerit volutpat. Sed sit amet erat sit amet magna feugiat lacinia eget in ligula. Phasellus sem nibh, viverra at elementum nec, feugiat ac magna.\r\n\r\nPellentesque pellentesque malesuada magna sed condimentum. ', 'top1.jpg', 'top2.jpg', 'top3.jpg', 'Menú', 'promo.jpg', 'garantia.jpg', 'image.jpg', 'image.jpg', 'image.jpg', 'Atención al cliente', 'Contacto', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut mattis dolor. Pellentesque ultricies turpis eget tellus hendrerit volutpat. Sed sit amet erat sit amet magna feugiat lacinia eget in ligula. Phasellus sem nibh, viverra at elementum nec, feugiat ac magna. Pellentesque pellentesque malesuada magna sed condimentum. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut mattis dolor. Pellentesque ultricies turpis eget tellus hendrerit volutpat. Sed sit amet erat sit amet magna feugiat lacinia eget in ligula. Phasellus sem nibh, viverra at elementum nec, feugiat ac magna. Pellentesque pellentesque malesuada magna sed condimentum. ', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `id_html` int(11) NOT NULL,
  `name_menu` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `icono_menu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_menu` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id_menu`, `id_html`, `name_menu`, `icono_menu`, `link_menu`) VALUES
(1, 1, 'Link 1', NULL, '#'),
(2, 1, 'Link 2', NULL, '#'),
(3, 1, 'Link 3', NULL, '#'),
(4, 1, 'Link 4', NULL, '#');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social`
--

CREATE TABLE IF NOT EXISTS `social` (
  `id_social` int(11) NOT NULL AUTO_INCREMENT,
  `id_html` int(11) NOT NULL,
  `social_facebook` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_twitter` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_rss` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_plus` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_linkedin` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_youtube` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_skype` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_pinterest` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_instagram` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_social`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `social`
--

INSERT INTO `social` (`id_social`, `id_html`, `social_facebook`, `social_twitter`, `social_rss`, `social_plus`, `social_linkedin`, `social_youtube`, `social_skype`, `social_pinterest`, `social_instagram`) VALUES
(1, 1, 'www.facebook.com/', 'www.twitter.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `style`
--

INSERT INTO `style` (`id_style`, `id_html`, `background_color`, `background_image`, `primary_color`, `secondary_color`) VALUES
(1, 1, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tabs`
--

INSERT INTO `tabs` (`id_tab`, `id_html`, `name_tab`, `text_tab`) VALUES
(1, 1, 'DESCRIPCIÓN', '\r\n\r\n    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat\r\n    augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione\r\n    claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica\r\n    Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.\r\n'),
(2, 1, 'CONDICIONES', '\r\n\r\n    augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione\r\n    claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica\r\n    Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.\r\n'),
(3, 1, 'DEVOLUCIONES', '\r\n\r\n    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat\r\n    augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione\r\n    claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores leg\r\n    Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.\r\n'),
(4, 1, 'VÍDEOS', 'video');

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
