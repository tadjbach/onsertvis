-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Client :  serviceegmseroot.mysql.db
-- Généré le :  Mar 16 Mai 2017 à 16:58
-- Version du serveur :  5.6.34-log
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `serviceegmseroot`
--

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE IF NOT EXISTS `departement` (
  `id` int(11) NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label_normal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label_Uppercase` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label_Soundex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `departement`
--

INSERT INTO `departement` (`id`, `region_id`, `slug`, `label_normal`, `label_Uppercase`, `label_Soundex`, `code`) VALUES
(1, 1, 'ain', 'Ain', 'AIN', 'A500', '01'),
(2, 7, 'aisne', 'Aisne', 'AISNE', 'A250', '02'),
(3, 1, 'allier', 'Allier', 'ALLIER', 'A460', '03'),
(4, 13, 'alpes-de-haute-provence', 'Alpes-de-Haute-Provence', 'ALPES-DE-HAUTE-PROVENCE', 'A412316152', '04'),
(5, 13, 'hautes-alpes', 'Hautes-Alpes', 'HAUTES-ALPES', 'H32412', '05'),
(6, 13, 'alpes-maritimes', 'Alpes-Maritimes', 'ALPES-MARITIMES', 'A41256352', '06'),
(7, 1, 'ardeche', 'Ardèche', 'ARDÈCHE', 'A632', '07'),
(8, 6, 'ardennes', 'Ardennes', 'ARDENNES', 'A6352', '08'),
(9, 11, 'ariege', 'Ariège', 'ARIÈGE', 'A620', '09'),
(10, 6, 'aube', 'Aube', 'AUBE', 'A100', '10'),
(11, 11, 'aude', 'Aude', 'AUDE', 'A300', '11'),
(12, 11, 'aveyron', 'Aveyron', 'AVEYRON', 'A165', '12'),
(13, 13, 'bouches-du-rhone', 'Bouches-du-Rhône', 'BOUCHES-DU-RHÔNE', 'B2365', '13'),
(14, 9, 'calvados', 'Calvados', 'CALVADOS', 'C4132', '14'),
(15, 1, 'cantal', 'Cantal', 'CANTAL', 'C534', '15'),
(16, 10, 'charente', 'Charente', 'CHARENTE', 'C653', '16'),
(17, 10, 'charente-maritime', 'Charente-Maritime', 'CHARENTE-MARITIME', 'C6535635', '17'),
(18, 4, 'cher', 'Cher', 'CHER', 'C600', '18'),
(19, 10, 'correze', 'Corrèze', 'CORRÈZE', 'C620', '19'),
(20, 5, 'corse-du-sud', 'Corse-du-sud', 'CORSE-DU-SUD', 'C62323', '2a'),
(21, 5, 'haute-corse', 'Haute-corse', 'HAUTE-CORSE', 'H3262', '2b'),
(22, 2, 'cote-dor', 'Côte-d''or', 'CÔTE-D''OR', 'C360', '21'),
(23, 3, 'cotes-darmor', 'Côtes-d''armor', 'CÔTES-D''ARMOR', 'C323656', '22'),
(24, 10, 'creuse', 'Creuse', 'CREUSE', 'C620', '23'),
(25, 10, 'dordogne', 'Dordogne', 'DORDOGNE', 'D6325', '24'),
(26, 2, 'doubs', 'Doubs', 'DOUBS', 'D120', '25'),
(27, 1, 'drome', 'Drôme', 'DRÔME', 'D650', '26'),
(28, 9, 'eure', 'Eure', 'EURE', 'E600', '27'),
(29, 4, 'eure-et-loir', 'Eure-et-Loir', 'EURE-ET-LOIR', 'E6346', '28'),
(30, 3, 'finistere', 'Finistère', 'FINISTÈRE', 'F5236', '29'),
(31, 11, 'gard', 'Gard', 'GARD', 'G630', '30'),
(32, 11, 'haute-garonne', 'Haute-Garonne', 'HAUTE-GARONNE', 'H3265', '31'),
(33, 11, 'gers', 'Gers', 'GERS', 'G620', '32'),
(34, 10, 'gironde', 'Gironde', 'GIRONDE', 'G653', '33'),
(35, 11, 'herault', 'Hérault', 'HÉRAULT', 'H643', '34'),
(36, 3, 'ile-et-vilaine', 'Ile-et-Vilaine', 'ILE-ET-VILAINE', 'I43145', '35'),
(37, 4, 'indre', 'Indre', 'INDRE', 'I536', '36'),
(38, 4, 'indre-et-loire', 'Indre-et-Loire', 'INDRE-ET-LOIRE', 'I536346', '37'),
(39, 1, 'isere', 'Isère', 'ISÈRE', 'I260', '38'),
(40, 2, 'jura', 'Jura', 'JURA', 'J600', '39'),
(41, 10, 'landes', 'Landes', 'LANDES', 'L532', '40'),
(42, 4, 'loir-et-cher', 'Loir-et-Cher', 'LOIR-ET-CHER', 'L6326', '41'),
(43, 1, 'loire', 'Loire', 'LOIRE', 'L600', '42'),
(44, 1, 'haute-loire', 'Haute-Loire', 'HAUTE-LOIRE', 'H346', '43'),
(45, 12, 'loire-atlantique', 'Loire-Atlantique', 'LOIRE-ATLANTIQUE', 'L634532', '44'),
(46, 4, 'loiret', 'Loiret', 'LOIRET', 'L630', '45'),
(47, 11, 'lot', 'Lot', 'LOT', 'L300', '46'),
(48, 10, 'lot-et-garonne', 'Lot-et-Garonne', 'LOT-ET-GARONNE', 'L3265', '47'),
(49, 11, 'lozere', 'Lozère', 'LOZÈRE', 'L260', '48'),
(50, 12, 'maine-et-loire', 'Maine-et-Loire', 'MAINE-ET-LOIRE', 'M346', '49'),
(51, 9, 'manche', 'Manche', 'MANCHE', 'M200', '50'),
(52, 6, 'marne', 'Marne', 'MARNE', 'M650', '51'),
(53, 6, 'haute-marne', 'Haute-Marne', 'HAUTE-MARNE', 'H3565', '52'),
(54, 12, 'mayenne', 'Mayenne', 'MAYENNE', 'M000', '53'),
(55, 6, 'meurthe-et-moselle', 'Meurthe-et-Moselle', 'MEURTHE-ET-MOSELLE', 'M63524', '54'),
(56, 6, 'meuse', 'Meuse', 'MEUSE', 'M200', '55'),
(57, 3, 'morbihan', 'Morbihan', 'MORBIHAN', 'M615', '56'),
(58, 6, 'moselle', 'Moselle', 'MOSELLE', 'M240', '57'),
(59, 2, 'nievre', 'Nièvre', 'NIÈVRE', 'N160', '58'),
(60, 7, 'nord', 'Nord', 'NORD', 'N630', '59'),
(61, 7, 'oise', 'Oise', 'OISE', 'O200', '60'),
(62, 9, 'orne', 'Orne', 'ORNE', 'O650', '61'),
(63, 7, 'pas-de-calais', 'Pas-de-Calais', 'PAS-DE-CALAIS', 'P23242', '62'),
(64, 1, 'puy-de-dome', 'Puy-de-Dôme', 'PUY-DE-DÔME', 'P350', '63'),
(65, 10, 'pyrenees-atlantiques', 'Pyrénées-Atlantiques', 'PYRÉNÉES-ATLANTIQUES', 'P65234532', '64'),
(66, 11, 'hautes-pyrenees', 'Hautes-Pyrénées', 'HAUTES-PYRÉNÉES', 'H321652', '65'),
(67, 11, 'pyrenees-orientales', 'Pyrénées-Orientales', 'PYRÉNÉES-ORIENTALES', 'P65265342', '66'),
(68, 6, 'bas-rhin', 'Bas-Rhin', 'BAS-RHIN', 'B265', '67'),
(69, 6, 'haut-rhin', 'Haut-Rhin', 'HAUT-RHIN', 'H365', '68'),
(70, 1, 'rhone', 'Rhône', 'RHÔNE', 'R500', '69'),
(71, 2, 'haute-saone', 'Haute-Saône', 'HAUTE-SAÔNE', 'H325', '70'),
(72, 2, 'saone-et-loire', 'Saône-et-Loire', 'SAÔNE-ET-LOIRE', 'S5346', '71'),
(73, 12, 'sarthe', 'Sarthe', 'SARTHE', 'S630', '72'),
(74, 1, 'savoie', 'Savoie', 'SAVOIE', 'S100', '73'),
(75, 1, 'haute-savoie', 'Haute-Savoie', 'HAUTE-SAVOIE', 'H321', '74'),
(76, 8, 'paris', 'Paris', 'PARIS', 'P620', '75'),
(77, 9, 'seine-maritime', 'Seine-Maritime', 'SEINE-MARITIME', 'S5635', '76'),
(78, 8, 'seine-et-marne', 'Seine-et-Marne', 'SEINE-ET-MARNE', 'S53565', '77'),
(79, 8, 'yvelines', 'Yvelines', 'YVELINES', 'Y1452', '78'),
(80, 10, 'deux-sevres', 'Deux-Sèvres', 'DEUX-SÈVRES', 'D2162', '79'),
(81, 7, 'somme', 'Somme', 'SOMME', 'S500', '80'),
(82, 11, 'tarn', 'Tarn', 'TARN', 'T650', '81'),
(83, 11, 'tarn-et-garonne', 'Tarn-et-Garonne', 'TARN-ET-GARONNE', 'T653265', '82'),
(84, 13, 'var', 'Var', 'VAR', 'V600', '83'),
(85, 13, 'vaucluse', 'Vaucluse', 'VAUCLUSE', 'V242', '84'),
(86, 12, 'vendee', 'Vendée', 'VENDÉE', 'V530', '85'),
(87, 10, 'vienne', 'Vienne', 'VIENNE', 'V500', '86'),
(88, 10, 'haute-vienne', 'Haute-Vienne', 'HAUTE-VIENNE', 'H315', '87'),
(89, 6, 'vosges', 'Vosges', 'VOSGES', 'V200', '88'),
(90, 2, 'yonne', 'Yonne', 'YONNE', 'Y500', '89'),
(91, 2, 'territoire-de-belfort', 'Territoire de Belfort', 'TERRITOIRE DE BELFORT', 'T636314163', '90'),
(92, 8, 'essonne', 'Essonne', 'ESSONNE', 'E250', '91'),
(93, 8, 'hauts-de-seine', 'Hauts-de-Seine', 'HAUTS-DE-SEINE', 'H32325', '92'),
(94, 8, 'seine-saint-denis', 'Seine-Saint-Denis', 'SEINE-SAINT-DENIS', 'S525352', '93'),
(95, 8, 'val-de-marne', 'Val-de-Marne', 'VAL-DE-MARNE', 'V43565', '94'),
(96, 8, 'val-doise', 'Val-d''oise', 'VAL-D''OISE', 'V432', '95'),
(97, 14, 'mayotte', 'Mayotte', 'MAYOTTE', 'M300', '976'),
(98, 14, 'guadeloupe', 'Guadeloupe', 'GUADELOUPE', 'G341', '971'),
(99, 14, 'guyane', 'Guyane', 'GUYANE', 'G500', '973'),
(100, 14, 'martinique', 'Martinique', 'MARTINIQUE', 'M6352', '972'),
(101, 14, 'reunion', 'Réunion', 'RÉUNION', 'R500', '974');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C1765B6398260155` (`region_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `FK_C1765B6398260155` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
