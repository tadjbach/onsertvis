-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 17 Octobre 2017 à 08:23
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
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auctionState` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `commentState` int(11) NOT NULL,
  `budget_type_id` int(11) DEFAULT NULL,
  `postal_code_id` int(11) DEFAULT NULL,
  `cpCity` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_valide_id` int(11) NOT NULL,
  `isNewMessage` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `advert_state`
--

CREATE TABLE `advert_state` (
  `id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `labelNormal` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `advert_state`
--

INSERT INTO `advert_state` (`id`, `value`, `labelNormal`) VALUES
(1, 'en_cours', 'Validation en cours'),
(2, 'en_ligne', 'En cours'),
(3, 'hors_ligne', 'Terminée');

-- --------------------------------------------------------

--
-- Structure de la table `auction`
--

CREATE TABLE `auction` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `advert_id` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `value` float NOT NULL,
  `dateCreation` datetime NOT NULL,
  `isCanceled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `auction_state`
--

CREATE TABLE `auction_state` (
  `id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `labelNormal` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `auction_state`
--

INSERT INTO `auction_state` (`id`, `value`, `labelNormal`) VALUES
(1, 'en_cours', 'En cours'),
(2, 'accept', 'Acceptée'),
(3, 'decline', 'Déclinée');

-- --------------------------------------------------------

--
-- Structure de la table `budget_type`
--

CREATE TABLE `budget_type` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `labelNormal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `budget_type`
--

INSERT INTO `budget_type` (`id`, `slug`, `labelNormal`, `position`) VALUES
(1, 'Prestation', 'Toute la Prestation', 1),
(2, 'Jour', 'Un jour', 2),
(3, 'Heure', 'Une heure', 3);

-- --------------------------------------------------------

--
-- Structure de la table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `day` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `day_fr` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `day_fr_abbr` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `calendar`
--

INSERT INTO `calendar` (`id`, `day`, `day_fr`, `day_fr_abbr`) VALUES
(1, 'Monday', 'Lundi', 'L'),
(2, 'Tuesday', 'Mardi', 'M'),
(3, 'Wednesday', 'Mercredi', 'M'),
(4, 'Thursday', 'Jeudi', 'J'),
(5, 'Friday', 'Vendredi', 'V'),
(6, 'Saturday', 'Samedi', 'S'),
(7, 'Sunday', 'Dimanche', 'D');

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

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_sender` int(11) NOT NULL,
  `user_receiver` int(11) NOT NULL,
  `advert_id` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `dateCreation` datetime NOT NULL,
  `rate` int(11) NOT NULL,
  `dateUpdate` datetime DEFAULT NULL,
  `isPublished` tinyint(1) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comment_state`
--

CREATE TABLE `comment_state` (
  `id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `labelNormal` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `comment_state`
--

INSERT INTO `comment_state` (`id`, `value`, `labelNormal`) VALUES
(1, 'avis_laisses', 'Avis laissés '),
(2, 'avis_recus', 'Avis reçus');

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
  `advert_id` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `isPublished` tinyint(1) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL,
  `dateCreation` datetime NOT NULL,
  `user_receiver` int(11) NOT NULL,
  `isNew` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message_state`
--

CREATE TABLE `message_state` (
  `id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `labelNormal` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `message_state`
--

INSERT INTO `message_state` (`id`, `value`, `labelNormal`) VALUES
(1, 'send', 'Envoyés'),
(2, 'receive', 'Reçus');

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `labelNormal` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `payment`
--

INSERT INTO `payment` (`id`, `labelNormal`) VALUES
(1, 'Espèces'),
(2, 'Chèque'),
(3, 'CB'),
(4, 'Cesu'),
(5, 'Virement');

-- --------------------------------------------------------

--
-- Structure de la table `society_type`
--

CREATE TABLE `society_type` (
  `id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `labelNormal` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
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
  `rate` int(11) NOT NULL,
  `society_type_id` int(11) DEFAULT NULL,
  `cpCity` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code_id` int(11) DEFAULT NULL,
  `siret` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip_address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isDetailVisible` tinyint(1) NOT NULL,
  `isNewMessage` tinyint(1) NOT NULL,
  `isNewAuction` tinyint(1) NOT NULL,
  `isValideAuction` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user_calendar`
--

CREATE TABLE `user_calendar` (
  `user_id` int(11) NOT NULL,
  `calendar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user_category`
--

CREATE TABLE `user_category` (
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user_payment`
--

CREATE TABLE `user_payment` (
  `user_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL
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
  ADD UNIQUE KEY `UNIQ_54F1F40B3DA5256D` (`image_id`),
  ADD KEY `IDX_54F1F40BA76ED395` (`user_id`),
  ADD KEY `IDX_54F1F40B12469DE2` (`category_id`),
  ADD KEY `IDX_54F1F40B7CFC672` (`budget_type_id`),
  ADD KEY `IDX_54F1F40BBDBA6A61` (`postal_code_id`),
  ADD KEY `IDX_54F1F40BE3B631AD` (`user_valide_id`);

--
-- Index pour la table `advert_state`
--
ALTER TABLE `advert_state`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DEE4F593A76ED395` (`user_id`),
  ADD KEY `IDX_DEE4F593D07ECCB6` (`advert_id`);

--
-- Index pour la table `auction_state`
--
ALTER TABLE `auction_state`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `budget_type`
--
ALTER TABLE `budget_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9474526C3A5251F2` (`user_sender`),
  ADD KEY `IDX_9474526CDD356896` (`user_receiver`),
  ADD KEY `IDX_9474526CD07ECCB6` (`advert_id`);

--
-- Index pour la table `comment_state`
--
ALTER TABLE `comment_state`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `IDX_B6BD307FD07ECCB6` (`advert_id`),
  ADD KEY `IDX_B6BD307FDD356896` (`user_receiver`);

--
-- Index pour la table `message_state`
--
ALTER TABLE `message_state`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `society_type`
--
ALTER TABLE `society_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`),
  ADD KEY `IDX_8D93D6494A7EB075` (`society_type_id`),
  ADD KEY `IDX_8D93D649BDBA6A61` (`postal_code_id`);

--
-- Index pour la table `user_calendar`
--
ALTER TABLE `user_calendar`
  ADD PRIMARY KEY (`user_id`,`calendar_id`),
  ADD KEY `IDX_8E244546A76ED395` (`user_id`),
  ADD KEY `IDX_8E244546A40A2C8` (`calendar_id`);

--
-- Index pour la table `user_category`
--
ALTER TABLE `user_category`
  ADD PRIMARY KEY (`user_id`,`category_id`),
  ADD KEY `IDX_E6C1FDC1A76ED395` (`user_id`),
  ADD KEY `IDX_E6C1FDC112469DE2` (`category_id`);

--
-- Index pour la table `user_payment`
--
ALTER TABLE `user_payment`
  ADD PRIMARY KEY (`user_id`,`payment_id`),
  ADD KEY `IDX_35259A07A76ED395` (`user_id`),
  ADD KEY `IDX_35259A074C3A3BB` (`payment_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT pour la table `advert_state`
--
ALTER TABLE `advert_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT pour la table `auction_state`
--
ALTER TABLE `auction_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `budget_type`
--
ALTER TABLE `budget_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `comment_state`
--
ALTER TABLE `comment_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT pour la table `message_state`
--
ALTER TABLE `message_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `society_type`
--
ALTER TABLE `society_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `advert`
--
ALTER TABLE `advert`
  ADD CONSTRAINT `FK_54F1F40B12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_54F1F40B3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `FK_54F1F40B7CFC672` FOREIGN KEY (`budget_type_id`) REFERENCES `budget_type` (`id`),
  ADD CONSTRAINT `FK_54F1F40BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_54F1F40BBDBA6A61` FOREIGN KEY (`postal_code_id`) REFERENCES `postal_code` (`id`),
  ADD CONSTRAINT `FK_54F1F40BE3B631AD` FOREIGN KEY (`user_valide_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `auction`
--
ALTER TABLE `auction`
  ADD CONSTRAINT `FK_DEE4F593A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_DEE4F593D07ECCB6` FOREIGN KEY (`advert_id`) REFERENCES `advert` (`id`);

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526C3A5251F2` FOREIGN KEY (`user_sender`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_9474526CD07ECCB6` FOREIGN KEY (`advert_id`) REFERENCES `advert` (`id`),
  ADD CONSTRAINT `FK_9474526CDD356896` FOREIGN KEY (`user_receiver`) REFERENCES `user` (`id`);

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
  ADD CONSTRAINT `FK_8D93D6494A7EB075` FOREIGN KEY (`society_type_id`) REFERENCES `society_type` (`id`),
  ADD CONSTRAINT `FK_8D93D649BDBA6A61` FOREIGN KEY (`postal_code_id`) REFERENCES `postal_code` (`id`);

--
-- Contraintes pour la table `user_calendar`
--
ALTER TABLE `user_calendar`
  ADD CONSTRAINT `FK_8E244546A40A2C8` FOREIGN KEY (`calendar_id`) REFERENCES `calendar` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8E244546A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user_category`
--
ALTER TABLE `user_category`
  ADD CONSTRAINT `FK_E6C1FDC112469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E6C1FDC1A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user_payment`
--
ALTER TABLE `user_payment`
  ADD CONSTRAINT `FK_35259A074C3A3BB` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_35259A07A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
