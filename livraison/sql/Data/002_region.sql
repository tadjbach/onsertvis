-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Client :  serviceegmseroot.mysql.db
-- Généré le :  Mar 16 Mai 2017 à 17:03
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
-- Structure de la table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label_normal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `region`
--

INSERT INTO `region` (`id`, `country_id`, `slug`, `label_normal`, `position`) VALUES
(1, 75, 'auvergne-rhone-alpes', 'Auvergne-Rhône-Alpes', 1),
(2, 75, 'bourgogne-franche-comte', 'Bourgogne-Franche-Comté', 2),
(3, 75, 'bretagne', 'Bretagne', 3),
(4, 75, 'centre-val-de-loire', 'Centre-Val-de-Loire', 4),
(5, 75, 'corse', 'Corse', 5),
(6, 75, 'grand-est', 'Grand-Est', 6),
(7, 75, 'hauts-de-france', 'Hauts-de-France', 7),
(8, 75, 'ile-de-france', 'Île-de-France', 8),
(9, 75, 'normandie', 'Normandie', 9),
(10, 75, 'nouvelle-aquitaine', 'Nouvelle-Aquitaine', 10),
(11, 75, 'occitanie', 'Occitanie', 11),
(12, 75, 'pays-de-la-loire', 'Pays de la Loire', 12),
(13, 75, 'provence-alpes-cote-dazur', 'Provence-Alpes-Côte d''Azur', 13),
(14, 75, 'dom', 'DOM', 14);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F62F176F92F3E70` (`country_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `FK_F62F176F92F3E70` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
