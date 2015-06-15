-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2015 a las 18:15:42
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistemavotaciones`
--
CREATE DATABASE IF NOT EXISTS `sistemavotaciones` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistemavotaciones`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banderacoalision`
--

CREATE TABLE IF NOT EXISTS `banderacoalision` (
`idCoalision` int(11) NOT NULL,
  `Bandera` varchar(100) NOT NULL,
  `Votos` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banderacoalision`
--

INSERT INTO `banderacoalision` (`idCoalision`, `Bandera`, `Votos`) VALUES
(7, 'libertad1.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banderapartidos`
--

CREATE TABLE IF NOT EXISTS `banderapartidos` (
`idBandera` int(11) NOT NULL,
  `Bandera` varchar(100) NOT NULL,
  `Votos` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banderapartidos`
--

INSERT INTO `banderapartidos` (`idBandera`, `Bandera`, `Votos`) VALUES
(11, 'FMLN.jpg', 36),
(12, 'arena.jpg', 29),
(14, 'psp.jpg', 22),
(15, 'Unidad.jpg', 21),
(17, 'megatec.jpg', 40),
(18, 'FPS.jpg', 17),
(19, 'luz.jpg', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coalision`
--

CREATE TABLE IF NOT EXISTS `coalision` (
`idCoalision` int(11) NOT NULL,
  `Partidouno` varchar(20) NOT NULL,
  `Partidodos` varchar(20) NOT NULL,
  `Partidotres` varchar(20) DEFAULT NULL,
  `Partidocuatro` varchar(20) DEFAULT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Bandera` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `coalision`
--

INSERT INTO `coalision` (`idCoalision`, `Partidouno`, `Partidodos`, `Partidotres`, `Partidocuatro`, `Nombre`, `Tipo`, `Bandera`) VALUES
(16, 'ARENA', 'FMLN', 'PSP', 'GANA', 'Un Pais Mejor', 'Presidentes', 'libertad1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
`id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `codigo` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `nombre`, `codigo`) VALUES
(1, 'Ahuachapán', '01'),
(2, 'Santa Ana', '02'),
(3, 'Sonsonate', '03'),
(4, 'Chalatenango', '04'),
(5, 'La Libertad', '05'),
(6, 'San Salvador', '06'),
(7, 'Cuscatlán', '07'),
(8, 'La Paz', '08'),
(9, 'Cabañas', '09'),
(10, 'San Vicente', '10'),
(11, 'Usulután', '11'),
(12, 'San Miguel', '12'),
(13, 'Morazán', '13'),
(14, 'La Unión', '14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotocandidatos`
--

CREATE TABLE IF NOT EXISTS `fotocandidatos` (
`idFoto` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Votos` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fotocandidatos`
--

INSERT INTO `fotocandidatos` (`idFoto`, `Foto`, `Votos`) VALUES
(1, 'cielo.jpg', 0),
(2, 'libertad1.jpg', 0),
(3, 'AniSex.jpg', 0),
(4, 'cruz.jpg', 0),
(5, 'la_muerte1.jpg', 0),
(6, 'luz.jpg', 0),
(7, 'oscuro.jpg', 0),
(8, 'Fuego.jpg', 0),
(9, 'petra.jpg', 0),
(10, 'save_1390241617551.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciosesion`
--

CREATE TABLE IF NOT EXISTS `iniciosesion` (
`idUsuario` int(11) NOT NULL,
  `Usuario` varchar(10) NOT NULL,
  `Clave` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `iniciosesion`
--

INSERT INTO `iniciosesion` (`idUsuario`, `Usuario`, `Clave`) VALUES
(1, 'SistemaV', '1624119');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcioncandidato`
--

CREATE TABLE IF NOT EXISTS `inscripcioncandidato` (
`idCandidato` int(11) NOT NULL,
  `Nombres` varchar(35) NOT NULL,
  `Apellidos` varchar(35) NOT NULL,
  `DUICandidato` varchar(10) NOT NULL,
  `TipoCandidatura` varchar(10) NOT NULL,
  `Participacion` varchar(15) NOT NULL,
  `Departamento` varchar(35) NOT NULL,
  `Municipio` varchar(35) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Votos` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripcioncandidato`
--

INSERT INTO `inscripcioncandidato` (`idCandidato`, `Nombres`, `Apellidos`, `DUICandidato`, `TipoCandidatura`, `Participacion`, `Departamento`, `Municipio`, `Foto`, `Votos`) VALUES
(9, 'Rosmery Anabell', 'Carballo', '45937237-4', 'Alcalde', 'Partidaria', '06', '0617', 'AniSex.jpg', 3),
(10, 'Eugenio Cangrejo', 'Dollar', '49568290-4', 'Alcalde', 'Partidaria', '13', '1301', 'libertad1.jpg', 3),
(11, 'Jonas Martin', 'Zepeda de la Cruz', '49372840-5', 'Alcalde', 'Partidaria', '13', '1301', 'cruz.jpg', 2),
(12, 'Julio Eduardo', 'Barahona', '75352900-3', 'Alcalde', 'Partidaria', '07', '0701', 'la_muerte1.jpg', 3),
(13, 'Robert Adonay', 'Sanches', '68393030-3', 'Diputado', 'Partidaria', '08', '0821', 'luz.jpg', 2),
(14, 'Angel Miguel', 'Sol Ball', '79303223-4', 'Diputado', 'Partidaria', '01', '0101', 'oscuro.jpg', 0),
(15, 'Avatar An', 'Nomada', '87373737-3', 'Diputado', 'Partidaria', '09', '0902', 'Fuego.jpg', 4),
(16, 'Petra Cereza', 'Agustin', '26788393-9', 'Diputado', 'Partidaria', '02', '0202', 'petra.jpg', 6),
(17, 'Salvador Enrique', 'Lara Alvarado', '01698545-4', 'Alcalde', 'Partidaria', '08', '0817', 'save_1390241617551.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcionpartido`
--

CREATE TABLE IF NOT EXISTS `inscripcionpartido` (
`idPartidos` int(11) NOT NULL,
  `NombrePartido` varchar(35) NOT NULL,
  `Responsable` varchar(35) NOT NULL,
  `DUIRepresentante` varchar(10) NOT NULL,
  `Bandera` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripcionpartido`
--

INSERT INTO `inscripcionpartido` (`idPartidos`, `NombrePartido`, `Responsable`, `DUIRepresentante`, `Bandera`) VALUES
(9, 'FMLN', 'Mauricio Funes', '45967820-1', 'FMLN.jpg'),
(10, 'ARENA', 'Elias Antonio Saca', '48573928-6', 'arena.jpg'),
(11, 'FPS', 'Madre Teresa de Calcuta', '45967820-7', 'FPS.jpg'),
(12, 'PSP', 'Jorge Velado', '62359272-4', 'psp.jpg'),
(13, 'UNIDAD', 'Francisco Flores', '48376080-9', 'Unidad.jpg'),
(14, 'Megatec', 'Luis Mendez', '48732793-9', 'megatec.jpg'),
(15, 'la familia bionica', 'bionico 1', '18732793-5', 'luz.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `codigo_depto` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=263 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `nombre`, `codigo`, `codigo_depto`) VALUES
(1, 'Ahuachapán', '0101', '01'),
(2, 'Apaneca', '0102', '01'),
(3, 'Atiquizaya', '0103', '01'),
(4, 'Concepción de Ataco', '0104', '01'),
(5, 'El Refugio', '0105', '01'),
(6, 'Guaymango', '0106', '01'),
(7, 'Jujutla', '0107', '01'),
(8, 'San Francisco Menéndez', '0108', '01'),
(9, 'San Lorenzo', '0109', '01'),
(10, 'San Pedro Puxtla', '0110', '01'),
(11, 'Tacuba', '0111', '01'),
(12, 'Turín', '0112', '01'),
(13, 'Candelaria de la Frontera', '0201', '02'),
(14, 'Coatepeque', '0202', '02'),
(15, 'Chalchuapa', '0203', '02'),
(16, 'El Congo', '0204', '02'),
(17, 'El Porvenir', '0205', '02'),
(18, 'Masahuat', '0206', '02'),
(19, 'Metapán', '0207', '02'),
(20, 'San Antonio Pajonal', '0208', '02'),
(21, 'San Sebastián Salitrillo', '0209', '02'),
(22, 'Santa Ana', '0210', '02'),
(23, 'Santa Rosa Guachipilín', '0211', '02'),
(24, 'Santiago de la Frontera', '0212', '02'),
(25, 'Texistepeque', '0213', '02'),
(26, 'Acajutla', '0301', '03'),
(27, 'Armenia', '0302', '03'),
(28, 'Caluco', '0303', '03'),
(29, 'Cuisnahuat', '0304', '03'),
(30, 'Santa Isabel Ishuatán', '0305', '03'),
(31, 'Izalco', '0306', '03'),
(32, 'Juayúa', '0307', '03'),
(33, 'Nahuizalco', '0308', '03'),
(34, 'Nahulingo', '0309', '03'),
(35, 'Salcoatitán', '0310', '03'),
(36, 'San Antonio del Monte', '0311', '03'),
(37, 'San Julián', '0312', '03'),
(38, 'Santa Catarina Masahuat', '0313', '03'),
(39, 'Santo Domingo de Guzmán', '0314', '03'),
(40, 'Sonsonate', '0315', '03'),
(41, 'Sonzacate', '0316', '03'),
(42, 'Agua Caliente', '0401', '04'),
(43, 'Arcatao', '0402', '04'),
(44, 'Azacualpa', '0403', '04'),
(45, 'Citalá', '0404', '04'),
(46, 'Comalapa', '0405', '04'),
(47, 'Concepción Quezaltepeque', '0406', '04'),
(48, 'Chalatenango', '0407', '04'),
(49, 'Dulce Nombre de María', '0408', '04'),
(50, 'El Carrizal', '0409', '04'),
(51, 'El Paraíso', '0410', '04'),
(52, 'La Laguna', '0411', '04'),
(53, 'La Palma', '0412', '04'),
(54, 'La Reina', '0413', '04'),
(55, 'Las Vueltas', '0414', '04'),
(56, 'Nombre de Jesús', '0415', '04'),
(57, 'Nueva Concepción', '0416', '04'),
(58, 'Nueva Trinidad', '0417', '04'),
(59, 'Ojos de Agua', '0418', '04'),
(60, 'Potonico', '0419', '04'),
(61, 'San Antonio de la Cruz', '0420', '04'),
(62, 'San Antonio Los Ranchos', '0421', '04'),
(63, 'San Fernando', '0422', '04'),
(64, 'San Francisco Lempa', '0423', '04'),
(65, 'San Francisco Morazán', '0424', '04'),
(66, 'San Ignacio', '0425', '04'),
(67, 'San Isidro Labrador', '0426', '04'),
(68, 'San José Cancasque', '0427', '04'),
(69, 'San José Las Flores ', '0428', '04'),
(70, 'San Luis del Carmen', '0429', '04'),
(71, 'San Miguel de Mercedes', '0430', '04'),
(72, 'San Rafael', '0431', '04'),
(73, 'Santa Rita', '0432', '04'),
(74, 'Tejutla', '0433', '04'),
(75, 'Antiguo Cuscatlán', '0501', '05'),
(76, 'Ciudad Arce', '0502', '05'),
(77, 'Colón', '0503', '05'),
(78, 'Comasagua', '0504', '05'),
(79, 'Chiltiupán', '0505', '05'),
(80, 'Huizúcar', '0506', '05'),
(81, 'Jayaque', '0507', '05'),
(82, 'Jicalapa', '0508', '05'),
(83, 'La Libertad', '0509', '05'),
(84, 'Nuevo Cuscatlán', '0510', '05'),
(85, 'Santa Tecla', '0511', '05'),
(86, 'Quezaltepeque', '0512', '05'),
(87, 'Sacacoyo', '0513', '05'),
(88, 'San José Villanueva', '0514', '05'),
(89, 'San Juan Opico', '0515', '05'),
(90, 'San Matías', '0516', '05'),
(91, 'San Pablo Tacachico', '0517', '05'),
(92, 'Tamanique', '0518', '05'),
(93, 'Talnique', '0519', '05'),
(94, 'Teotepeque', '0520', '05'),
(95, 'Tepecoyo', '0521', '05'),
(96, 'Zaragoza', '0522', '05'),
(97, 'Aguilares', '0601', '06'),
(98, 'Apopa', '0602', '06'),
(99, 'Ayutuxtepeque', '0603', '06'),
(100, 'Cuscatancingo', '0604', '06'),
(101, 'El Paisnal', '0605', '06'),
(102, 'Guazapa', '0606', '06'),
(103, 'Ilopango', '0607', '06'),
(104, 'Mejicanos', '0608', '06'),
(105, 'Nejapa', '0609', '06'),
(106, 'Panchimalco', '0610', '06'),
(107, 'Rosario de Mora', '0611', '06'),
(108, 'San Marcos', '0612', '06'),
(109, 'San Martín', '0613', '06'),
(110, 'San Salvador', '0614', '06'),
(111, 'Santiago Texacuangos', '0615', '06'),
(112, 'Santo Tomás', '0616', '06'),
(113, 'Soyapango', '0617', '06'),
(114, 'Tonacatepeque', '0618', '06'),
(115, 'Delgado', '0619', '06'),
(116, 'Candelaria', '0701', '07'),
(117, 'Cojutepeque', '0702', '07'),
(118, 'El Carmen', '0703', '07'),
(119, 'El Rosario', '0704', '07'),
(120, 'Monte San Juan', '0705', '07'),
(121, 'Oratorio de Concepción', '0706', '07'),
(122, 'San Bartolomé Perulapía', '0707', '07'),
(123, 'San Cristóbal', '0708', '07'),
(124, 'San José Guayabal', '0709', '07'),
(125, 'San Pedro Perulapán', '0710', '07'),
(126, 'San Rafael Cedros', '0711', '07'),
(127, 'San Ramón', '0712', '07'),
(128, 'Santa Cruz Analquito', '0713', '07'),
(129, 'Santa Cruz Michapa', '0714', '07'),
(130, 'Suchitoto', '0715', '07'),
(131, 'Tenancingo', '0716', '07'),
(132, 'Cuyultitán', '0801', '08'),
(133, 'El Rosario', '0802', '08'),
(134, 'Jerusalén', '0803', '08'),
(135, 'Mercedes La Ceiba', '0804', '08'),
(136, 'Olocuilta', '0805', '08'),
(137, 'Paraíso de Osorio', '0806', '08'),
(138, 'San Antonio Masahuat', '0807', '08'),
(139, 'San Emigdio', '0808', '08'),
(140, 'San Francisco Chinameca', '0809', '08'),
(141, 'San Juan Nonualco', '0810', '08'),
(142, 'San Juan Talpa', '0811', '08'),
(143, 'San Juan Tepezontes', '0812', '08'),
(144, 'San Luis Talpa', '0813', '08'),
(145, 'San Miguel Tepezontes', '0814', '08'),
(146, 'San Pedro Masahuat', '0815', '08'),
(147, 'San Pedro Nonualco', '0816', '08'),
(148, 'San Rafael Obrajuelo', '0817', '08'),
(149, 'Santa María Ostuma', '0818', '08'),
(150, 'Santiago Nonualco', '0819', '08'),
(151, 'Tapalhuaca', '0820', '08'),
(152, 'Zacatecoluca', '0821', '08'),
(153, 'San Luis La Herradura', '0822', '08'),
(154, 'Cinquera', '0901', '09'),
(155, 'Guacotecti', '0902', '09'),
(156, 'Ilobasco', '0903', '09'),
(157, 'Jutiapa', '0904', '09'),
(158, 'San Isidro', '0905', '09'),
(159, 'Sensuntepeque', '0906', '09'),
(160, 'Tejutepeque', '0907', '09'),
(161, 'Victoria', '0908', '09'),
(162, 'Villa Dolores', '0909', '09'),
(163, 'Apastepeque', '1001', '10'),
(164, 'Guadalupe', '1002', '10'),
(165, 'San Cayetano Istepeque', '1003', '10'),
(166, 'Santa Clara', '1004', '10'),
(167, 'Santo Domingo', '1005', '10'),
(168, 'San Esteban Catarina', '1006', '10'),
(169, 'San Ildefonso', '1007', '10'),
(170, 'San Lorenzo', '1008', '10'),
(171, 'San Sebastián', '1009', '10'),
(172, 'San Vicente', '1010', '10'),
(173, 'Tecoluca', '1011', '10'),
(174, 'Tepetitán', '1012', '10'),
(175, 'Verapaz', '1013', '10'),
(176, 'Alegría', '1101', '11'),
(177, 'Berlín', '1102', '11'),
(178, 'California', '1103', '11'),
(179, 'Concepción Batres', '1104', '11'),
(180, 'El Triunfo', '1105', '11'),
(181, 'Ereguayquín', '1106', '11'),
(182, 'Estanzuelas', '1107', '11'),
(183, 'Jiquilisco', '1108', '11'),
(184, 'Jucuapa', '1109', '11'),
(185, 'Jucuarán', '1110', '11'),
(186, 'Mercedes Umaña', '1111', '11'),
(187, 'Nueva Granada', '1112', '11'),
(188, 'Ozatlán', '1113', '11'),
(189, 'Puerto El Triunfo', '1114', '11'),
(190, 'San Agustín', '1115', '11'),
(191, 'San Buenaventura', '1116', '11'),
(192, 'San Dionisio', '1117', '11'),
(193, 'Santa Elena', '1118', '11'),
(194, 'San Francisco Javier', '1119', '11'),
(195, 'Santa María', '1120', '11'),
(196, 'Santiago de María', '1121', '11'),
(197, 'Tecapán', '1122', '11'),
(198, 'Usulután', '1123', '11'),
(199, 'Carolina', '1201', '12'),
(200, 'Ciudad Barrios', '1202', '12'),
(201, 'Comacarán', '1203', '12'),
(202, 'Chapeltique', '1204', '12'),
(203, 'Chinameca', '1205', '12'),
(204, 'Chirilagua', '1206', '12'),
(205, 'El Tránsito', '1207', '12'),
(206, 'Lolotique', '1208', '12'),
(207, 'Moncagua', '1209', '12'),
(208, 'Nueva Guadalupe', '1210', '12'),
(209, 'Nuevo Edén de San Juan', '1211', '12'),
(210, 'Quelepa', '1212', '12'),
(211, 'San Antonio del Mosco', '1213', '12'),
(212, 'San Gerardo', '1214', '12'),
(213, 'San Jorge', '1215', '12'),
(214, 'San Luis de la Reina', '1216', '12'),
(215, 'San Miguel', '1217', '12'),
(216, 'San Rafael Oriente', '1218', '12'),
(217, 'Sesori', '1219', '12'),
(218, 'Uluazapa', '1220', '12'),
(219, 'Arambala', '1301', '13'),
(220, 'Cacaopera', '1302', '13'),
(221, 'Corinto', '1303', '13'),
(222, 'Chilanga', '1304', '13'),
(223, 'Delicias de Concepción', '1305', '13'),
(224, 'El Divisadero', '1306', '13'),
(225, 'El Rosario', '1307', '13'),
(226, 'Gualococti', '1308', '13'),
(227, 'Guatajiagua', '1309', '13'),
(228, 'Joateca', '1310', '13'),
(229, 'Jocoaitique', '1311', '13'),
(230, 'Jocoro', '1312', '13'),
(231, 'Lolotiquillo', '1313', '13'),
(232, 'Meanguera', '1314', '13'),
(233, 'Osicala', '1315', '13'),
(234, 'Perquín', '1316', '13'),
(235, 'San Carlos', '1317', '13'),
(236, 'San Fernando', '1318', '13'),
(237, 'San Francisco Gotera', '1319', '13'),
(238, 'San Isidro', '1320', '13'),
(239, 'San Simón', '1321', '13'),
(240, 'Sensembra', '1322', '13'),
(241, 'Sociedad', '1323', '13'),
(242, 'Torola', '1324', '13'),
(243, 'Yamabal', '1325', '13'),
(244, 'Yoloaiquín', '1326', '13'),
(245, 'Anamorós', '1401', '14'),
(246, 'Bolívar', '1402', '14'),
(247, 'Concepción de Oriente', '1403', '14'),
(248, 'Conchagua', '1404', '14'),
(249, 'El Carmen', '1405', '14'),
(250, 'El Sauce', '1406', '14'),
(251, 'Intipucá', '1407', '14'),
(252, 'La Unión', '1408', '14'),
(253, 'Lilisque', '1409', '14'),
(254, 'Meanguera del Golfo', '1410', '14'),
(255, 'Nueva Esparta', '1411', '14'),
(256, 'Pasaquina', '1412', '14'),
(257, 'Polorós', '1413', '14'),
(258, 'San Alejo', '1414', '14'),
(259, 'San José', '1415', '14'),
(260, 'Santa Rosa de Lima', '1416', '14'),
(261, 'Yayantique', '1417', '14'),
(262, 'Yucuaiquín', '1418', '14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE IF NOT EXISTS `periodo` (
`idPeriodo` int(11) NOT NULL,
  `Tipo` varchar(30) NOT NULL,
  `Periodo` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`idPeriodo`, `Tipo`, `Periodo`) VALUES
(5, 'Alcaldes y Diputados', '2016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrovotantes`
--

CREATE TABLE IF NOT EXISTS `registrovotantes` (
`idVotantes` int(11) NOT NULL,
  `Nombres` varchar(35) NOT NULL,
  `Apellidos` varchar(35) NOT NULL,
  `DUI` varchar(10) NOT NULL,
  `Genero` varchar(10) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Departamento` varchar(35) NOT NULL,
  `Municipio` varchar(35) NOT NULL,
  `Estado` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registrovotantes`
--

INSERT INTO `registrovotantes` (`idVotantes`, `Nombres`, `Apellidos`, `DUI`, `Genero`, `FechaNacimiento`, `Direccion`, `Departamento`, `Municipio`, `Estado`) VALUES
(12, 'Misael Antonio', 'Mejia Bonilla', '05046070-5', 'Masculino', '1994-09-10', 'Colonia Anabella 2, Calle principal numero 11', '08', '0821', 0),
(14, 'Miguel Antonio', 'Miranda', '97654667-6', 'Masculino', '2015-06-09', 'Las margaritas II', '12', '1201', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banderacoalision`
--
ALTER TABLE `banderacoalision`
 ADD PRIMARY KEY (`idCoalision`);

--
-- Indices de la tabla `banderapartidos`
--
ALTER TABLE `banderapartidos`
 ADD PRIMARY KEY (`idBandera`), ADD UNIQUE KEY `Bandera` (`Bandera`);

--
-- Indices de la tabla `coalision`
--
ALTER TABLE `coalision`
 ADD PRIMARY KEY (`idCoalision`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotocandidatos`
--
ALTER TABLE `fotocandidatos`
 ADD PRIMARY KEY (`idFoto`);

--
-- Indices de la tabla `iniciosesion`
--
ALTER TABLE `iniciosesion`
 ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `inscripcioncandidato`
--
ALTER TABLE `inscripcioncandidato`
 ADD PRIMARY KEY (`idCandidato`), ADD UNIQUE KEY `DUICandidato` (`DUICandidato`), ADD FULLTEXT KEY `DUICandidato_2` (`DUICandidato`);

--
-- Indices de la tabla `inscripcionpartido`
--
ALTER TABLE `inscripcionpartido`
 ADD PRIMARY KEY (`idPartidos`), ADD UNIQUE KEY `DUIRepresentante` (`DUIRepresentante`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
 ADD PRIMARY KEY (`idPeriodo`);

--
-- Indices de la tabla `registrovotantes`
--
ALTER TABLE `registrovotantes`
 ADD PRIMARY KEY (`idVotantes`), ADD UNIQUE KEY `DUI` (`DUI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banderacoalision`
--
ALTER TABLE `banderacoalision`
MODIFY `idCoalision` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `banderapartidos`
--
ALTER TABLE `banderapartidos`
MODIFY `idBandera` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `coalision`
--
ALTER TABLE `coalision`
MODIFY `idCoalision` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `fotocandidatos`
--
ALTER TABLE `fotocandidatos`
MODIFY `idFoto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `iniciosesion`
--
ALTER TABLE `iniciosesion`
MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `inscripcioncandidato`
--
ALTER TABLE `inscripcioncandidato`
MODIFY `idCandidato` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `inscripcionpartido`
--
ALTER TABLE `inscripcionpartido`
MODIFY `idPartidos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=263;
--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
MODIFY `idPeriodo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `registrovotantes`
--
ALTER TABLE `registrovotantes`
MODIFY `idVotantes` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
