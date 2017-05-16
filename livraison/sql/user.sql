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
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `postal_code_id` int(11) DEFAULT NULL,
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
  `accountType` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `civility` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstName` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateCreation` datetime NOT NULL,
  `dateUpdate` datetime DEFAULT NULL,
  `detail` longtext COLLATE utf8_unicode_ci,
  `isAcountComplete` tinyint(1) NOT NULL,
  `phone_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isNewsLetter` tinyint(1) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `postal_code_id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `accountType`, `civility`, `name`, `firstName`, `address`, `dateCreation`, `dateUpdate`, `detail`, `isAcountComplete`, `phone_number`, `isNewsLetter`, `rate`) VALUES
(1, 12679, 'Adminitsrateur', 'Adminitsrateur', 'tadjer.bachir@gmail.com', 'tadjer.bachir@gmail.com', 1, 'X6HN63dxaBIFOEKtCndH3FRa8yEQ.Elkjx.dTuRRDOs', '3xHL4QbIl8bZrj8l+H8RT2NcPqnsbn93/B+f793NURtzcnpIN7U/5afXvYg5wAVapepYs0p3A5qlay5E2wkKLA==', '2017-03-26 11:44:54', 'IYxRV3891jiRIlHxk8WUOpaFSjk2kZ5RTNy-9BjFqHY', '2017-03-25 20:42:24', 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 'Part', 'M', 'TADJER', 'Bachir', '79 Bd J J Bosc', '2017-03-01 00:00:00', NULL, 'Adminitsrateur Service Enchère.com', 1, '0761147778', 1, 5);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`),
  ADD KEY `IDX_8D93D649BDBA6A61` (`postal_code_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D649BDBA6A61` FOREIGN KEY (`postal_code_id`) REFERENCES `postal_code` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
