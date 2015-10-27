-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2015 a las 11:15:11
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_botiga_animals`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_anunci`
--

CREATE TABLE IF NOT EXISTS `tbl_anunci` (
`anu_id` int(11) NOT NULL,
  `anu_contingut` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `anu_nom` varchar(25) NOT NULL,
  `anu_data` date NOT NULL,
  `anu_foto` varchar(50) NOT NULL,
  `raca_id` int(11) NOT NULL,
  `mun_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `anu_tipus` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_anunci`
--

INSERT INTO `tbl_anunci` (`anu_id`, `anu_contingut`, `anu_nom`, `anu_data`, `anu_foto`, `raca_id`, `mun_id`, `contact_id`, `anu_tipus`) VALUES
(1, 'Perdut gos de raça beagle a la platja de El Prat de Llobregat (zona aeroport) l''11 d''octubre al matí. Respon al nom de Tacat.', 'Perdut beagle a El Prat', '2015-10-11', '', 14, 4, 2, 'Perdut'),
(2, 'Desaparegut gat amb collar i placa amb el nom de Ratlletes. És de tipus comú, ratllat de colors taronges. Rambla Badal, Barcelona.', 'Perdut gat', '2015-10-15', '', 17, 1, 6, 'Perdut'),
(3, 'Pastor Alemany trobat a Rubí. ', 'Gos Trobat', '2015-10-15', '', 9, 13, 4, 'Trobat'),
(4, 'Gat siamés trobat a L''Hospitalet de Llobregat. ', 'Gos Trobat', '2015-10-20', '', 16, 5, 5, 'Trobat'),
(5, 'Perdut gos de raça Husky a la rambla de Sant Cugat del Vallès, el 18 d''octubre a la tarda.', 'Gos Perdut', '2015-10-18', '', 11, 14, 7, 'Perdut'),
(6, 'Hamster trobat a Begues', 'Hamster Trobat', '2015-08-01', '', 24, 10, 1, 'Trobat'),
(7, 'Bóxer perdut a Barcelona', 'Boxer Perdut', '2015-08-02', '', 8, 1, 2, 'Perdut'),
(8, 'Pastor Alemany trobat a Sant Feliu de Llobregat', 'Pastor Alemany Trobat', '2015-08-03', '', 9, 2, 3, 'Trobat'),
(9, 'Golden retriever perdut a Sant Joan Espí', 'Golden Perdut', '2015-08-04', '', 10, 3, 4, 'Perdut'),
(10, 'Husky trobat a El Prat de Llobregat', 'Husky Trobat', '2015-08-05', '', 11, 4, 5, 'Trobat'),
(11, 'Border Collie perdut a Hospitalet de LL.', 'Border Collie Perdut', '2015-08-06', '', 12, 5, 6, 'Perdut'),
(12, 'Creuat trobat a Martorell', 'Creuat Trobat', '2015-08-07', '', 13, 6, 7, 'Trobat'),
(13, 'Beagle perdut a Cornellà de Llobregat', 'Beagle Perdut', '2015-08-08', '', 14, 7, 1, 'Perdut'),
(14, 'Gat persa trobat a Castelldefels', 'Gat Persa Trobal', '2015-08-09', '', 15, 8, 2, 'Trobat'),
(15, 'Gat Siamés perdut a Viladecans', 'Gat Siamés Perdut', '2015-08-10', '', 16, 9, 3, 'Perdut'),
(16, 'Gat comú trobat a Begues', 'Gat Comú Trobat', '2015-08-11', '', 17, 10, 4, 'Trobat'),
(17, 'Gat Abisini perdut a Castellbisbal', 'Gat Abisini Perdut', '2015-08-12', '', 18, 11, 5, 'Perdut'),
(18, 'Gat Bobtail trobat a Sant Sadurní Anoia', 'Gat Bobtail Trobat', '2015-08-15', '', 19, 12, 6, 'Trobat'),
(19, 'Canari perdut a Rubí', 'Canari perdut', '2015-08-16', '', 20, 13, 7, 'Perdut'),
(20, 'Periquito trobat a Sant Cugat de Vallès', 'Periquito Trobat', '2015-08-17', '', 21, 14, 1, 'Trobat'),
(21, 'Fura perduda a Sitges', 'Fura Perduda', '2015-08-17', '', 22, 15, 2, 'Perdut'),
(22, 'Conill trobat a Barcelona', 'Conill Trobat', '2015-08-18', '', 23, 1, 3, 'Trobat'),
(23, 'Hámster perdut a Sant Feliu de Llobregat', 'Hamster Perdut', '2015-08-19', '', 24, 2, 4, 'Perdut'),
(24, 'Tejón trobat a Sant Joan Espí', 'Tejon Trobat', '2015-08-20', '', 25, 3, 5, 'Trobat'),
(25, 'Ànec perdut a El Prat de Llobregat', 'Anec Perdut', '2015-08-21', '', 26, 4, 6, 'Perdut'),
(26, 'Bóxer trobat a Hospitalet de Llobregat', 'Boxer Trobat', '2015-08-22', '', 8, 5, 7, 'Trobat'),
(27, 'Pastor Alemany perdut a Martorell', 'Pastor Alemany Perdut', '2015-08-23', '', 9, 6, 1, 'Perdut'),
(28, 'Golden Retriever trobat a Cornella de Ll.', 'Golden Trobat', '2015-08-24', '', 10, 7, 2, 'Trobat'),
(29, 'Husky perdut a Castelldefels', 'Husky Perdut', '2015-08-25', '', 11, 8, 3, 'Perdut'),
(30, 'Border Collie trobat a Viladecans', 'Border Collie Trobat', '2015-08-26', '', 12, 9, 4, 'Trobat');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contacte`
--

CREATE TABLE IF NOT EXISTS `tbl_contacte` (
`contact_id` int(11) NOT NULL,
  `contact_nom` varchar(25) NOT NULL,
  `contact_telf` varchar(9) NOT NULL,
  `contact_adre` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_contacte`
--

INSERT INTO `tbl_contacte` (`contact_id`, `contact_nom`, `contact_telf`, `contact_adre`) VALUES
(1, 'Carles Martín', '934534236', ''),
(2, 'Antonio Gámez', '667542343', 'Carrer del Mig, 76 3r 1a'),
(3, 'Carlos Martínez', '654583454', ''),
(4, 'Isabel Vázquez', '698722284', ''),
(5, 'Pedro Santiesteban', '656989931', 'Avinguda Carrilet, 54 3r'),
(6, 'Sònia Gómez', '688341009', 'Gran Via de les Corts Catalanes, 12 Esc. A 3r 2a'),
(7, 'Patricia Martín', '932124654', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_municipi`
--

CREATE TABLE IF NOT EXISTS `tbl_municipi` (
`municipi_id` int(11) NOT NULL,
  `municipi_nom` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_municipi`
--

INSERT INTO `tbl_municipi` (`municipi_id`, `municipi_nom`) VALUES
(1, 'Barcelona'),
(2, 'Sant Feliu de Llobregat'),
(3, 'Sant Joan d''Espí'),
(4, 'El Prat de Llobregat'),
(5, 'L''Hospitalet de Llobregat'),
(6, 'Martorell'),
(7, 'Cornellà de Llobregat'),
(8, 'Castelldefels'),
(9, 'Viladecans'),
(10, 'Begues'),
(11, 'Castellbisbal'),
(12, 'Sant Sadurní d''Anoia'),
(13, 'Rubí'),
(14, 'Sant Cugat del Vallès'),
(15, 'Sitges');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_raca`
--

CREATE TABLE IF NOT EXISTS `tbl_raca` (
`raca_id` int(11) NOT NULL,
  `raca_nom` varchar(25) NOT NULL,
  `tipus_anim_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_raca`
--

INSERT INTO `tbl_raca` (`raca_id`, `raca_nom`, `tipus_anim_id`) VALUES
(8, 'Bòxer', 1),
(9, 'Pastor alemany', 1),
(10, 'Golden retriever', 1),
(11, 'Husky', 1),
(12, 'Border collie', 1),
(13, 'Creuat', 1),
(14, 'Beagle', 1),
(15, 'Persa', 2),
(16, 'Siamés', 2),
(17, 'Comú', 2),
(18, 'Abisini', 2),
(19, 'Bobtail', 2),
(20, 'Canari', 3),
(21, 'Periquito', 3),
(22, 'Fura', 4),
(23, 'Conill', 4),
(24, 'Hàmster', 4),
(25, 'Teixó', 4),
(26, 'Ànec', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipus_animal`
--

CREATE TABLE IF NOT EXISTS `tbl_tipus_animal` (
`tipus_anim_id` int(11) NOT NULL,
  `tipus_anim_nom` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_tipus_animal`
--

INSERT INTO `tbl_tipus_animal` (`tipus_anim_id`, `tipus_anim_nom`) VALUES
(1, 'Gos'),
(2, 'Gat'),
(3, 'Ocell'),
(4, 'Altres');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_anunci`
--
ALTER TABLE `tbl_anunci`
 ADD PRIMARY KEY (`anu_id`), ADD KEY `FK_ANU_RACA` (`raca_id`), ADD KEY `FK_MUN_ANU` (`mun_id`), ADD KEY `FK_CONTACT_ANU` (`contact_id`);

--
-- Indices de la tabla `tbl_contacte`
--
ALTER TABLE `tbl_contacte`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indices de la tabla `tbl_municipi`
--
ALTER TABLE `tbl_municipi`
 ADD PRIMARY KEY (`municipi_id`);

--
-- Indices de la tabla `tbl_raca`
--
ALTER TABLE `tbl_raca`
 ADD PRIMARY KEY (`raca_id`), ADD KEY `FK_RACA_TIPUS_A` (`tipus_anim_id`);

--
-- Indices de la tabla `tbl_tipus_animal`
--
ALTER TABLE `tbl_tipus_animal`
 ADD PRIMARY KEY (`tipus_anim_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_anunci`
--
ALTER TABLE `tbl_anunci`
MODIFY `anu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT de la tabla `tbl_contacte`
--
ALTER TABLE `tbl_contacte`
MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tbl_municipi`
--
ALTER TABLE `tbl_municipi`
MODIFY `municipi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `tbl_raca`
--
ALTER TABLE `tbl_raca`
MODIFY `raca_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `tbl_tipus_animal`
--
ALTER TABLE `tbl_tipus_animal`
MODIFY `tipus_anim_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_anunci`
--
ALTER TABLE `tbl_anunci`
ADD CONSTRAINT `RELACIO_ANU_CONTACT` FOREIGN KEY (`contact_id`) REFERENCES `tbl_contacte` (`contact_id`),
ADD CONSTRAINT `RELACIO_ANU_MUN` FOREIGN KEY (`mun_id`) REFERENCES `tbl_municipi` (`municipi_id`),
ADD CONSTRAINT `RELACIO_ANU_RACA` FOREIGN KEY (`raca_id`) REFERENCES `tbl_raca` (`raca_id`);

--
-- Filtros para la tabla `tbl_raca`
--
ALTER TABLE `tbl_raca`
ADD CONSTRAINT `tbl_raca_ibfk_1` FOREIGN KEY (`tipus_anim_id`) REFERENCES `tbl_tipus_animal` (`tipus_anim_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
