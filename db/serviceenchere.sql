-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 28 Mars 2017 à 17:56
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `serviceenchere`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label_normal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `slug`, `label_normal`, `position`) VALUES
(1, 'automobile', 'Automobile', 1),
(2, 'batiment', 'Bâtiment', 2),
(3, 'enseignement-formation', 'Enseignement - Formation', 3),
(4, 'environnement-nettoyage', 'Environnement - Nettoyage', 4),
(5, 'services-a-la-personne', 'Services à la personne', 5),
(6, 'soins-esthetique-coiffure', 'Soins - Esthétique - Coiffure', 6),
(7, 'sport-animation', 'Sport - Animation', 7),
(8, 'transport-logistique', 'Transport - Logistique', 8),
(9, 'autres', 'Autres', 9);

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label_normal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Contenu de la table `region`
--

INSERT INTO `region` (`id`, `slug`, `label_normal`, `position`) VALUES
(1, 'auvergne-rhone-alpes', 'Auvergne-Rhône-Alpes', 1),
(2, 'bourgogne-franche-comte', 'Bourgogne-Franche-Comté', 2),
(3, 'bretagne', 'Bretagne', 3),
(4, 'centre-val-de-loire', 'Centre-Val-de-Loire', 4),
(5, 'corse', 'Corse', 5),
(6, 'grand-est', 'Grand-Est', 6),
(7, 'hauts-de-france', 'Hauts-de-France', 7),
(8, 'ile-de-france', 'Île-de-France', 8),
(9, 'normandie', 'Normandie', 9),
(10, 'nouvelle-aquitaine', 'Nouvelle-Aquitaine', 10),
(11, 'occitanie', 'Occitanie', 11),
(12, 'pays-de-la-loire', 'Pays de la Loire', 12),
(13, 'provence-alpes-cote-dazur', 'Provence-Alpes-Côte d''Azur', 13),
(14, 'dom', 'DOM', 14),
(15, 'tom', 'TOM', 15);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `civility` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstName` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateCreation` datetime NOT NULL,
  `dateModification` datetime DEFAULT NULL,
  `detail` longtext COLLATE utf8_unicode_ci,
  `phone_1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isNewsLetter` tinyint(1) NOT NULL,
  `isAcountComplete` tinyint(1) NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accountType` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postalCode` int(11) DEFAULT NULL,
  `city` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `civility`, `name`, `firstName`, `dateCreation`, `dateModification`, `detail`, `phone_1`, `phone_2`, `isNewsLetter`, `isAcountComplete`, `address`, `accountType`, `postalCode`, `city`, `country`) VALUES
(1, 'BachirTadjer', 'bachirtadjer', 'tadjer.bachir@gmail.com', 'tadjer.bachir@gmail.com', 1, 'X6HN63dxaBIFOEKtCndH3FRa8yEQ.Elkjx.dTuRRDOs', '3xHL4QbIl8bZrj8l+H8RT2NcPqnsbn93/B+f793NURtzcnpIN7U/5afXvYg5wAVapepYs0p3A5qlay5E2wkKLA==', '2017-03-26 11:44:54', 'IYxRV3891jiRIlHxk8WUOpaFSjk2kZ5RTNy-9BjFqHY', '2017-03-25 20:42:24', 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 'M', '', '', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL),
(2, 'role_auteur', 'role_auteur', 'role_auteur@gmail.com', 'role_auteur@gmail.com', 1, '91wWEoverStUHl0SKXv//AN39oN9HG6fZd8GlUp8i60', 'CMV7GzN/GHFusUDZKlxcZE04IMBLBwtpOrZKDJAj/dqyidClqrI/onpdaY13+N6HPetiM1k1irXDnTdh+VdKww==', '2017-03-24 22:16:14', NULL, NULL, 'a:1:{i:0;s:11:"ROLE_AUTEUR";}', 'M', '', '', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL),
(3, 'role_moderateur', 'role_moderateur', 'role_moderateur@gmail.com', 'role_moderateur@gmail.com', 1, 'YvzfjEkyYgrlKSbsZXjtqmcmV53UMszT5N48gDmOgN0', 'xZuMnw5kDCcTnXmyom5UkOsAJO/0wAF2jcaM20gPxZGi0p3VZGMx5bU+KzlsqwA4uyLQfJkWTDBY8eD79cx0jQ==', NULL, NULL, NULL, 'a:1:{i:0;s:11:"ROLE_MODERATEUR";}', 'M', '', '', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL),
(16, 'tadjer-lina', 'tadjer-lina', 'tadjer.lina17@gmail.com', 'tadjer.lina17@gmail.com', 1, 'mKfVtM7.5Q6.FS87UNd9X9VkVaPCWNQe4xp7nq6MS.Q', 'n8EmmchJbOjM9V4sh+2U+DaTqgXhdnVP93AkEWqba77RQ8+kmmHHmB/5BiVQsBF7XUHuFmqrm1pts/Ykh+i1Wg==', '2017-03-27 12:30:12', NULL, NULL, 'a:1:{i:0;s:11:"ROLE_AUTEUR";}', 'mlle', 'TADJER', 'Lina', '0000-00-00 00:00:00', '2017-03-27 12:24:44', 'Rien', '0761147778', '0761147778', 0, 0, '79 Bd Jean Jacques BOSC', NULL, NULL, NULL, NULL),
(17, 'testaccount', 'testaccount', 'test@gmail.com', 'test@gmail.com', 1, 'Kaoql6jdwCyded0jRC2OfnJtHTwxLlq7CvFAS1KNO7w', 'Fp1N9h/u3yTZJklgLhA3UqzaOPeKbw/ESh3tUzgXT8IzUqYHmoSCwPhhbzMVEaKL3E1a9exY0ya7dfSTMiY/fg==', '2017-03-28 10:35:52', NULL, NULL, 'a:1:{i:0;s:11:"ROLE_AUTEUR";}', NULL, NULL, NULL, '2017-03-28 10:35:51', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 'France'),
(18, 'testaccount1', 'testaccount1', 'test1@gmail.com', 'test1@gmail.com', 1, 'MFt2UHUzmB1Cr2rG6W61sR8/GkOetigpQu.RpBAlDYc', 'Y65c5YaFpA80CXFam9EZhBkNSpZNEjLJoBrYFW77ChB5CjluQrd9mt/RD3VxiDQIhO2hkE5Iyhq8ju5so/Dv5w==', '2017-03-28 14:39:14', NULL, NULL, 'a:1:{i:0;s:11:"ROLE_AUTEUR";}', 'm', 'TEST', 'test', '2017-03-28 10:39:11', '2017-03-28 10:48:45', '0761147778', '0761147778', '0761147778', 0, 0, '79 BD JEAN JACQUES BOSC', 'Parti', NULL, NULL, 'France'),
(19, 'test3', 'test3', 'test2@gmail.com', 'test2@gmail.com', 1, 'hX7.oPuett/OGpBaihd6dnPrSJ2s5mWYvJgmqoiFwQA', 'X9iv27GXRmkq1pVD0lsGmVwDvaHkASf72iWufOxlkQS9gXib/S/fCrxBotjMD8FyROv0U7tjjOZm/wwP4iU50A==', '2017-03-28 16:48:24', NULL, NULL, 'a:1:{i:0;s:11:"ROLE_AUTEUR";}', 'm', 'TADJER', 'Bachir', '2017-03-28 14:39:02', '2017-03-28 16:51:14', 'vkjshguzhsv', '0761147778', '0761147778', 0, 1, '79 BD JEAN JACQUES BOSC', 'Parti', NULL, NULL, 'France');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
