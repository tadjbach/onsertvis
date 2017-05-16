-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Client :  serviceegmseroot.mysql.db
-- Généré le :  Mar 16 Mai 2017 à 16:57
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
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label_normal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `color` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `slug`, `label_normal`, `position`, `color`, `image`) VALUES
(1, 'automobile', 'Automobile', 1, '', ''),
(2, 'batiment', 'Bâtiment', 2, '', ''),
(3, 'enseignement', 'Enseignement', 3, '', ''),
(4, 'formation', 'Formation', 4, '', ''),
(5, 'environnement', 'Environnement', 5, '', ''),
(6, 'nettoyage', 'Nettoyage', 6, '', ''),
(7, 'services-a-la-personne', 'Services à la personne', 7, '', ''),
(8, 'soins-esthetique-coiffure', 'Soins - Esthétique - Coiffure', 8, '', ''),
(9, 'sport', 'Sport', 9, '', ''),
(10, 'animation', 'Animation', 10, '', ''),
(11, 'transport', 'Transport', 11, '', ''),
(12, 'logistique', 'Logistique', 12, '', ''),
(13, 'autres', 'Autres', 13, '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
