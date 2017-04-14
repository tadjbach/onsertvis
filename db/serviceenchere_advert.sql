-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 14 Avril 2017 à 17:45
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
-- Structure de la table `advert`
--

CREATE TABLE IF NOT EXISTS `advert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `dateCreation` datetime NOT NULL,
  `dateUpdate` datetime DEFAULT NULL,
  `detail` longtext COLLATE utf8_unicode_ci NOT NULL,
  `isEnabled` tinyint(1) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL,
  `isPublished` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_54F1F40B989D9B62` (`slug`),
  KEY `IDX_54F1F40B3DA5256D` (`image_id`),
  KEY `IDX_54F1F40BA76ED395` (`user_id`),
  KEY `IDX_54F1F40B12469DE2` (`category_id`),
  KEY `IDX_54F1F40B8BAC62AF` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Contenu de la table `advert`
--

INSERT INTO `advert` (`id`, `title`, `dateCreation`, `dateUpdate`, `detail`, `isEnabled`, `isDeleted`, `isPublished`, `slug`, `image_id`, `user_id`, `category_id`, `city_id`, `address`) VALUES
(8, 'Jardinnage', '2017-04-02 14:39:17', '2017-04-14 16:33:18', 'test avec un user', 1, 0, 1, 'jardinnage', 1, 35, 4, 12679, '79 Bd Jean Jacques BOSC'),
(9, 'Cherche maçon', '2017-04-07 19:56:06', NULL, 'Nous cherchons un maçon pour refaire la toiture de notre maison', 1, 0, 1, 'cherche-macon', 3, 35, 2, 12679, '8 cours barbey'),
(10, 'Cherche un mécanicien', '2017-04-07 20:44:02', NULL, 'Cherche un mécanicien', 1, 0, 1, 'cherche-un-mecanicien', 5, 35, 1, 12679, '79 BD JJ Bosc'),
(12, 'Cherche Nounou', '2017-04-07 21:52:11', NULL, 'Je cherche une Nounou pour garder ma fille Lina, une moyenne de 30h / Semaine.', 1, 0, 1, 'cherche-nounou', 4, 36, 9, 30438, '79 BD JJ Bosc'),
(13, 'Cherche prof', '2017-04-14 15:56:45', '2017-04-14 15:59:19', 'Bonjour,\r\n\r\nJe suis en Terminal S et je cherche des cours de math, MERCI', 1, 0, 1, 'cherche-prof', 6, 35, 3, 30438, '03 Square des Angalises'),
(14, 'Cherche assitante', '2017-04-14 16:03:42', NULL, 'Bonjour,\r\n\r\nJe cherche une personne qui peut aider ma grand mère âgée de 75 ans.', 1, 0, 1, 'cherche-assitante', 7, 35, 5, 30438, '2 Cours du buisson'),
(15, 'Cherche Coiffeuse', '2017-04-14 16:06:22', NULL, 'Bonjour\r\n\r\nJe cherche une coiffeur à domicile.\r\n\r\nMerci', 1, 0, 1, 'cherche-coiffeuse', 8, 35, 6, 30438, '8 cours barbey'),
(16, 'Cherche Coach', '2017-04-14 16:08:21', NULL, 'Bonjour,\r\n\r\nJe cherche un Coach sportif dans la région de Lyon', 1, 0, 1, 'cherche-coach', 9, 35, 7, 28153, '140 rue de la marne'),
(17, 'Cherche transporteur', '2017-04-14 16:10:37', NULL, 'Bonjour\r\n\r\nJe Cherche transporteur dans la région de Blois', 1, 0, 1, 'cherche-transporteur', 10, 35, 8, 15869, '41 Rue Présidant Wilson'),
(19, 'Cherche Ibiniste', '2017-04-14 16:14:17', NULL, 'Cherche Ibiniste', 1, 0, 1, 'cherche-ibiniste', NULL, 35, 9, 30438, '03 Square des Angalises');

-- --------------------------------------------------------

--
-- Structure de la table `auction`
--

CREATE TABLE IF NOT EXISTS `auction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` int(11) NOT NULL,
  `value` double NOT NULL,
  `dateCreation` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `advert_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DEE4F593A76ED395` (`user_id`),
  KEY `IDX_DEE4F593D07ECCB6` (`advert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `auction`
--

INSERT INTO `auction` (`id`, `state`, `value`, `dateCreation`, `user_id`, `advert_id`) VALUES
(1, 0, 350, '2017-04-08 18:05:33', 35, 12),
(2, 0, 110, '2017-04-08 18:07:10', 35, 12),
(3, 0, 400, '2017-04-08 18:07:23', 35, 12),
(4, 0, 0, '2017-04-08 18:10:16', 35, 12),
(5, 0, 10000, '2017-04-08 20:53:27', 36, 12),
(6, 0, 350, '2017-04-08 20:53:58', 36, 10),
(7, 0, 50, '2017-04-08 21:23:23', 36, 12),
(8, 0, 550, '2017-04-08 21:24:24', 36, 9),
(9, 0, 110, '2017-04-14 15:33:59', 35, 12);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `url`, `alt`) VALUES
(1, 'jpeg', 'jardinage.jpg'),
(3, 'jpeg', 'maçon.jpg'),
(4, 'jpeg', 'realiser-fiche-paye-nounou.jpg'),
(5, 'jpeg', 'mecanicien.jpg'),
(6, 'jpeg', 'soutien-domicile.jpg'),
(7, 'jpeg', 'aide_personne.jpg'),
(8, 'jpeg', 'soins.jpg'),
(9, 'jpeg', 'coach-sportif.jpg'),
(10, 'jpeg', 'transport.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `isPublished` tinyint(1) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL,
  `dateCreation` datetime NOT NULL,
  `user_sender` int(11) NOT NULL,
  `user_receiver` int(11) NOT NULL,
  `advert_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B6BD307F3A5251F2` (`user_sender`),
  KEY `IDX_B6BD307FDD356896` (`user_receiver`),
  KEY `IDX_B6BD307FD07ECCB6` (`advert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `content`, `state`, `isPublished`, `isDeleted`, `dateCreation`, `user_sender`, `user_receiver`, `advert_id`) VALUES
(1, 'tu vas bien', 0, 1, 0, '2017-04-14 16:34:22', 35, 35, 17);

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
  `dateUpdate` datetime DEFAULT NULL,
  `detail` longtext COLLATE utf8_unicode_ci,
  `isNewsLetter` tinyint(1) NOT NULL,
  `isAcountComplete` tinyint(1) NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accountType` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `phone_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`),
  KEY `IDX_8D93D6498BAC62AF` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `civility`, `name`, `firstName`, `dateCreation`, `dateUpdate`, `detail`, `isNewsLetter`, `isAcountComplete`, `address`, `accountType`, `city_id`, `phone_number`) VALUES
(1, 'BachirTadjer', 'bachirtadjer', 'tadjer.bachir@gmail.com', 'tadjer.bachir@gmail.com', 1, 'X6HN63dxaBIFOEKtCndH3FRa8yEQ.Elkjx.dTuRRDOs', '3xHL4QbIl8bZrj8l+H8RT2NcPqnsbn93/B+f793NURtzcnpIN7U/5afXvYg5wAVapepYs0p3A5qlay5E2wkKLA==', '2017-03-26 11:44:54', 'IYxRV3891jiRIlHxk8WUOpaFSjk2kZ5RTNy-9BjFqHY', '2017-03-25 20:42:24', 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 'M', 'TADJER', 'Bachir', '2017-03-01 00:00:00', NULL, 'Ingénieur', 1, 1, '79 Bd J J Bosc', 'Part', 12679, NULL),
(35, 'TADJER Bachir', 'tadjer bachir', 'bachir.tadjer@gmail.com', 'bachir.tadjer@gmail.com', 1, 'cEvjepApd7VGVpK6tHl/3I7hznX2g3A9CqWkZFkxgtQ', 'SDdpkha3F9/LwU/PNtUl7XHFzrGvS8+htBWMVL02/0oPglot/8LGswsRBOoeAuNCyeGYO04b1Q783CxrDjnTuA==', '2017-04-14 15:55:23', NULL, NULL, 'a:1:{i:0;s:11:"ROLE_AUTEUR";}', 'm', 'TADJER', 'Bachir', '2017-04-01 13:29:07', '2017-04-01 14:42:26', '79 bd Jean Jacques BOSC', 1, 1, '79 bd Jean Jacques BOSC', 'Particulie', 12679, '0761147778'),
(36, 'BARBEY AUTOMBILES', 'barbey autombiles', 'drapeau.estelle@gmail.com', 'drapeau.estelle@gmail.com', 1, 'aEBnVR8sc89u3BlF6qSRu0waKsbwFr8B6qw55wUz8AU', 'eqJFhy/te6VcW/qSAarbeuNUJxQcritbST/Rg5TWfCQA5SH+MKVn9zFQSIfUHJ5KsR8boxVIOgwRBQ1j4/edIQ==', '2017-04-11 19:37:57', '-p8ICybkRxuJlL28WCHMP_CLFme0l3XgI-ZeIzNV6Es', NULL, 'a:1:{i:0;s:11:"ROLE_AUTEUR";}', 'mme', 'TADJER', 'Nadjat', '2017-04-07 21:45:31', '2017-04-08 15:37:39', 'Société spécialisé dans la mécanique auto', 1, 1, '8 cours Barbey', 'Society', 1243, '0621001432');

-- --------------------------------------------------------

--
-- Structure de la table `user_category`
--

CREATE TABLE IF NOT EXISTS `user_category` (
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`category_id`),
  KEY `IDX_E6C1FDC1A76ED395` (`user_id`),
  KEY `IDX_E6C1FDC112469DE2` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user_category`
--

INSERT INTO `user_category` (`user_id`, `category_id`) VALUES
(35, 1),
(35, 2),
(35, 3),
(35, 4),
(35, 5),
(35, 6),
(35, 7),
(35, 8),
(35, 9),
(36, 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `advert`
--
ALTER TABLE `advert`
  ADD CONSTRAINT `FK_54F1F40B12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_54F1F40B3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `FK_54F1F40B8BAC62AF` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `FK_54F1F40BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `auction`
--
ALTER TABLE `auction`
  ADD CONSTRAINT `FK_DEE4F593A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_DEE4F593D07ECCB6` FOREIGN KEY (`advert_id`) REFERENCES `advert` (`id`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `FK_B6BD307F3A5251F2` FOREIGN KEY (`user_sender`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_B6BD307FD07ECCB6` FOREIGN KEY (`advert_id`) REFERENCES `advert` (`id`),
  ADD CONSTRAINT `FK_B6BD307FDD356896` FOREIGN KEY (`user_receiver`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D6498BAC62AF` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

--
-- Contraintes pour la table `user_category`
--
ALTER TABLE `user_category`
  ADD CONSTRAINT `FK_E6C1FDC112469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E6C1FDC1A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
