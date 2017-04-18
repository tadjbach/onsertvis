-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 18 Avril 2017 à 14:44
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `se_dev`
--

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

CREATE TABLE `advert` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `dateCreation` datetime NOT NULL,
  `dateUpdate` datetime DEFAULT NULL,
  `detail` longtext COLLATE utf8_unicode_ci NOT NULL,
  `isEnabled` tinyint(1) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL,
  `isPublished` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `auction`
--

CREATE TABLE `auction` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `advert_id` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `value` double NOT NULL,
  `dateCreation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label_normal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `color` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `departement_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label_normal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `postalCode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `postalCodes` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `alpha_2` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `alpha_3` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `label_FR` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `label_GB` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label_normal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label_Uppercase` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label_Soundex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `user_sender` int(11) NOT NULL,
  `user_receiver` int(11) NOT NULL,
  `advert_id` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `isPublished` tinyint(1) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL,
  `dateCreation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `postal_code`
--

CREATE TABLE `postal_code` (
  `id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label_normal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user_category`
--

CREATE TABLE `user_category` (
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_54F1F40B989D9B62` (`slug`),
  ADD KEY `IDX_54F1F40BA76ED395` (`user_id`),
  ADD KEY `IDX_54F1F40B12469DE2` (`category_id`);

--
-- Index pour la table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DEE4F593A76ED395` (`user_id`),
  ADD KEY `IDX_DEE4F593D07ECCB6` (`advert_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2D5B0234CCF9E01E` (`departement_id`);

--
-- Index pour la table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C1765B6398260155` (`region_id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B6BD307F3A5251F2` (`user_sender`),
  ADD KEY `IDX_B6BD307FDD356896` (`user_receiver`),
  ADD KEY `IDX_B6BD307FD07ECCB6` (`advert_id`);

--
-- Index pour la table `postal_code`
--
ALTER TABLE `postal_code`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_EA98E3768BAC62AF` (`city_id`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F62F176F92F3E70` (`country_id`);

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
-- Index pour la table `user_category`
--
ALTER TABLE `user_category`
  ADD PRIMARY KEY (`user_id`,`category_id`),
  ADD KEY `IDX_E6C1FDC1A76ED395` (`user_id`),
  ADD KEY `IDX_E6C1FDC112469DE2` (`category_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36831;
--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;
--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `postal_code`
--
ALTER TABLE `postal_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65665;
--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `advert`
--
ALTER TABLE `advert`
  ADD CONSTRAINT `FK_54F1F40B12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_54F1F40BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `auction`
--
ALTER TABLE `auction`
  ADD CONSTRAINT `FK_DEE4F593A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_DEE4F593D07ECCB6` FOREIGN KEY (`advert_id`) REFERENCES `advert` (`id`);

--
-- Contraintes pour la table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `FK_2D5B0234CCF9E01E` FOREIGN KEY (`departement_id`) REFERENCES `departement` (`id`);

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `FK_C1765B6398260155` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `FK_B6BD307F3A5251F2` FOREIGN KEY (`user_sender`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_B6BD307FD07ECCB6` FOREIGN KEY (`advert_id`) REFERENCES `advert` (`id`),
  ADD CONSTRAINT `FK_B6BD307FDD356896` FOREIGN KEY (`user_receiver`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `postal_code`
--
ALTER TABLE `postal_code`
  ADD CONSTRAINT `FK_EA98E3768BAC62AF` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

--
-- Contraintes pour la table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `FK_F62F176F92F3E70` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D649BDBA6A61` FOREIGN KEY (`postal_code_id`) REFERENCES `postal_code` (`id`);

--
-- Contraintes pour la table `user_category`
--
ALTER TABLE `user_category`
  ADD CONSTRAINT `FK_E6C1FDC112469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E6C1FDC1A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
