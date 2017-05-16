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
-- Structure de la table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `alpha_2` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `alpha_3` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `label_FR` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `label_GB` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=242 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `country`
--

INSERT INTO `country` (`id`, `code`, `alpha_2`, `alpha_3`, `label_FR`, `label_GB`) VALUES
(1, 4, 'AF', 'AFG', 'Afghanistan', 'Afghanistan'),
(2, 8, 'AL', 'ALB', 'Albanie', 'Albania'),
(3, 10, 'AQ', 'ATA', 'Antarctique', 'Antarctica'),
(4, 12, 'DZ', 'DZA', 'Algérie', 'Algeria'),
(5, 16, 'AS', 'ASM', 'Samoa Américaines', 'American Samoa'),
(6, 20, 'AD', 'AND', 'Andorre', 'Andorra'),
(7, 24, 'AO', 'AGO', 'Angola', 'Angola'),
(8, 28, 'AG', 'ATG', 'Antigua-et-Barbuda', 'Antigua and Barbuda'),
(9, 31, 'AZ', 'AZE', 'Azerbaïdjan', 'Azerbaijan'),
(10, 32, 'AR', 'ARG', 'Argentine', 'Argentina'),
(11, 36, 'AU', 'AUS', 'Australie', 'Australia'),
(12, 40, 'AT', 'AUT', 'Autriche', 'Austria'),
(13, 44, 'BS', 'BHS', 'Bahamas', 'Bahamas'),
(14, 48, 'BH', 'BHR', 'Bahreïn', 'Bahrain'),
(15, 50, 'BD', 'BGD', 'Bangladesh', 'Bangladesh'),
(16, 51, 'AM', 'ARM', 'Arménie', 'Armenia'),
(17, 52, 'BB', 'BRB', 'Barbade', 'Barbados'),
(18, 56, 'BE', 'BEL', 'Belgique', 'Belgium'),
(19, 60, 'BM', 'BMU', 'Bermudes', 'Bermuda'),
(20, 64, 'BT', 'BTN', 'Bhoutan', 'Bhutan'),
(21, 68, 'BO', 'BOL', 'Bolivie', 'Bolivia'),
(22, 70, 'BA', 'BIH', 'Bosnie-Herzégovine', 'Bosnia and Herzegovina'),
(23, 72, 'BW', 'BWA', 'Botswana', 'Botswana'),
(24, 74, 'BV', 'BVT', 'Île Bouvet', 'Bouvet Island'),
(25, 76, 'BR', 'BRA', 'Brésil', 'Brazil'),
(26, 84, 'BZ', 'BLZ', 'Belize', 'Belize'),
(27, 86, 'IO', 'IOT', 'Territoire Britannique de l''Océan Indien', 'British Indian Ocean Territory'),
(28, 90, 'SB', 'SLB', 'Îles Salomon', 'Solomon Islands'),
(29, 92, 'VG', 'VGB', 'Îles Vierges Britanniques', 'British Virgin Islands'),
(30, 96, 'BN', 'BRN', 'Brunéi Darussalam', 'Brunei Darussalam'),
(31, 100, 'BG', 'BGR', 'Bulgarie', 'Bulgaria'),
(32, 104, 'MM', 'MMR', 'Myanmar', 'Myanmar'),
(33, 108, 'BI', 'BDI', 'Burundi', 'Burundi'),
(34, 112, 'BY', 'BLR', 'Bélarus', 'Belarus'),
(35, 116, 'KH', 'KHM', 'Cambodge', 'Cambodia'),
(36, 120, 'CM', 'CMR', 'Cameroun', 'Cameroon'),
(37, 124, 'CA', 'CAN', 'Canada', 'Canada'),
(38, 132, 'CV', 'CPV', 'Cap-vert', 'Cape Verde'),
(39, 136, 'KY', 'CYM', 'Îles Caïmanes', 'Cayman Islands'),
(40, 140, 'CF', 'CAF', 'République Centrafricaine', 'Central African'),
(41, 144, 'LK', 'LKA', 'Sri Lanka', 'Sri Lanka'),
(42, 148, 'TD', 'TCD', 'Tchad', 'Chad'),
(43, 152, 'CL', 'CHL', 'Chili', 'Chile'),
(44, 156, 'CN', 'CHN', 'Chine', 'China'),
(45, 158, 'TW', 'TWN', 'Taïwan', 'Taiwan'),
(46, 162, 'CX', 'CXR', 'Île Christmas', 'Christmas Island'),
(47, 166, 'CC', 'CCK', 'Îles Cocos (Keeling)', 'Cocos (Keeling) Islands'),
(48, 170, 'CO', 'COL', 'Colombie', 'Colombia'),
(49, 174, 'KM', 'COM', 'Comores', 'Comoros'),
(50, 175, 'YT', 'MYT', 'Mayotte', 'Mayotte'),
(51, 178, 'CG', 'COG', 'République du Congo', 'Republic of the Congo'),
(52, 180, 'CD', 'COD', 'République Démocratique du Congo', 'The Democratic Republic Of The Congo'),
(53, 184, 'CK', 'COK', 'Îles Cook', 'Cook Islands'),
(54, 188, 'CR', 'CRI', 'Costa Rica', 'Costa Rica'),
(55, 191, 'HR', 'HRV', 'Croatie', 'Croatia'),
(56, 192, 'CU', 'CUB', 'Cuba', 'Cuba'),
(57, 196, 'CY', 'CYP', 'Chypre', 'Cyprus'),
(58, 203, 'CZ', 'CZE', 'République Tchèque', 'Czech Republic'),
(59, 204, 'BJ', 'BEN', 'Bénin', 'Benin'),
(60, 208, 'DK', 'DNK', 'Danemark', 'Denmark'),
(61, 212, 'DM', 'DMA', 'Dominique', 'Dominica'),
(62, 214, 'DO', 'DOM', 'République Dominicaine', 'Dominican Republic'),
(63, 218, 'EC', 'ECU', 'Équateur', 'Ecuador'),
(64, 222, 'SV', 'SLV', 'El Salvador', 'El Salvador'),
(65, 226, 'GQ', 'GNQ', 'Guinée Équatoriale', 'Equatorial Guinea'),
(66, 231, 'ET', 'ETH', 'Éthiopie', 'Ethiopia'),
(67, 232, 'ER', 'ERI', 'Érythrée', 'Eritrea'),
(68, 233, 'EE', 'EST', 'Estonie', 'Estonia'),
(69, 234, 'FO', 'FRO', 'Îles Féroé', 'Faroe Islands'),
(70, 238, 'FK', 'FLK', 'Îles (malvinas) Falkland', 'Falkland Islands'),
(71, 239, 'GS', 'SGS', 'Géorgie du Sud et les Îles Sandwich du Sud', 'South Georgia and the South Sandwich Islands'),
(72, 242, 'FJ', 'FJI', 'Fidji', 'Fiji'),
(73, 246, 'FI', 'FIN', 'Finlande', 'Finland'),
(74, 248, 'AX', 'ALA', 'Îles Åland', 'Åland Islands'),
(75, 250, 'FR', 'FRA', 'France', 'France'),
(76, 254, 'GF', 'GUF', 'Guyane Française', 'French Guiana'),
(77, 258, 'PF', 'PYF', 'Polynésie Française', 'French Polynesia'),
(78, 260, 'TF', 'ATF', 'Terres Australes Françaises', 'French Southern Territories'),
(79, 262, 'DJ', 'DJI', 'Djibouti', 'Djibouti'),
(80, 266, 'GA', 'GAB', 'Gabon', 'Gabon'),
(81, 268, 'GE', 'GEO', 'Géorgie', 'Georgia'),
(82, 270, 'GM', 'GMB', 'Gambie', 'Gambia'),
(83, 275, 'PS', 'PSE', 'Territoire Palestinien Occupé', 'Occupied Palestinian Territory'),
(84, 276, 'DE', 'DEU', 'Allemagne', 'Germany'),
(85, 288, 'GH', 'GHA', 'Ghana', 'Ghana'),
(86, 292, 'GI', 'GIB', 'Gibraltar', 'Gibraltar'),
(87, 296, 'KI', 'KIR', 'Kiribati', 'Kiribati'),
(88, 300, 'GR', 'GRC', 'Grèce', 'Greece'),
(89, 304, 'GL', 'GRL', 'Groenland', 'Greenland'),
(90, 308, 'GD', 'GRD', 'Grenade', 'Grenada'),
(91, 312, 'GP', 'GLP', 'Guadeloupe', 'Guadeloupe'),
(92, 316, 'GU', 'GUM', 'Guam', 'Guam'),
(93, 320, 'GT', 'GTM', 'Guatemala', 'Guatemala'),
(94, 324, 'GN', 'GIN', 'Guinée', 'Guinea'),
(95, 328, 'GY', 'GUY', 'Guyana', 'Guyana'),
(96, 332, 'HT', 'HTI', 'Haïti', 'Haiti'),
(97, 334, 'HM', 'HMD', 'Îles Heard et Mcdonald', 'Heard Island and McDonald Islands'),
(98, 336, 'VA', 'VAT', 'Saint-Siège (état de la Cité du Vatican)', 'Vatican City State'),
(99, 340, 'HN', 'HND', 'Honduras', 'Honduras'),
(100, 344, 'HK', 'HKG', 'Hong-Kong', 'Hong Kong'),
(101, 348, 'HU', 'HUN', 'Hongrie', 'Hungary'),
(102, 352, 'IS', 'ISL', 'Islande', 'Iceland'),
(103, 356, 'IN', 'IND', 'Inde', 'India'),
(104, 360, 'ID', 'IDN', 'Indonésie', 'Indonesia'),
(105, 364, 'IR', 'IRN', 'République Islamique d''Iran', 'Islamic Republic of Iran'),
(106, 368, 'IQ', 'IRQ', 'Iraq', 'Iraq'),
(107, 372, 'IE', 'IRL', 'Irlande', 'Ireland'),
(108, 376, 'IL', 'ISR', 'Israël', 'Israel'),
(109, 380, 'IT', 'ITA', 'Italie', 'Italy'),
(110, 384, 'CI', 'CIV', 'Côte d''Ivoire', 'Côte d''Ivoire'),
(111, 388, 'JM', 'JAM', 'Jamaïque', 'Jamaica'),
(112, 392, 'JP', 'JPN', 'Japon', 'Japan'),
(113, 398, 'KZ', 'KAZ', 'Kazakhstan', 'Kazakhstan'),
(114, 400, 'JO', 'JOR', 'Jordanie', 'Jordan'),
(115, 404, 'KE', 'KEN', 'Kenya', 'Kenya'),
(116, 408, 'KP', 'PRK', 'République Populaire Démocratique de Corée', 'Democratic People''s Republic of Korea'),
(117, 410, 'KR', 'KOR', 'République de Corée', 'Republic of Korea'),
(118, 414, 'KW', 'KWT', 'Koweït', 'Kuwait'),
(119, 417, 'KG', 'KGZ', 'Kirghizistan', 'Kyrgyzstan'),
(120, 418, 'LA', 'LAO', 'République Démocratique Populaire Lao', 'Lao People''s Democratic Republic'),
(121, 422, 'LB', 'LBN', 'Liban', 'Lebanon'),
(122, 426, 'LS', 'LSO', 'Lesotho', 'Lesotho'),
(123, 428, 'LV', 'LVA', 'Lettonie', 'Latvia'),
(124, 430, 'LR', 'LBR', 'Libéria', 'Liberia'),
(125, 434, 'LY', 'LBY', 'Jamahiriya Arabe Libyenne', 'Libyan Arab Jamahiriya'),
(126, 438, 'LI', 'LIE', 'Liechtenstein', 'Liechtenstein'),
(127, 440, 'LT', 'LTU', 'Lituanie', 'Lithuania'),
(128, 442, 'LU', 'LUX', 'Luxembourg', 'Luxembourg'),
(129, 446, 'MO', 'MAC', 'Macao', 'Macao'),
(130, 450, 'MG', 'MDG', 'Madagascar', 'Madagascar'),
(131, 454, 'MW', 'MWI', 'Malawi', 'Malawi'),
(132, 458, 'MY', 'MYS', 'Malaisie', 'Malaysia'),
(133, 462, 'MV', 'MDV', 'Maldives', 'Maldives'),
(134, 466, 'ML', 'MLI', 'Mali', 'Mali'),
(135, 470, 'MT', 'MLT', 'Malte', 'Malta'),
(136, 474, 'MQ', 'MTQ', 'Martinique', 'Martinique'),
(137, 478, 'MR', 'MRT', 'Mauritanie', 'Mauritania'),
(138, 480, 'MU', 'MUS', 'Maurice', 'Mauritius'),
(139, 484, 'MX', 'MEX', 'Mexique', 'Mexico'),
(140, 492, 'MC', 'MCO', 'Monaco', 'Monaco'),
(141, 496, 'MN', 'MNG', 'Mongolie', 'Mongolia'),
(142, 498, 'MD', 'MDA', 'République de Moldova', 'Republic of Moldova'),
(143, 500, 'MS', 'MSR', 'Montserrat', 'Montserrat'),
(144, 504, 'MA', 'MAR', 'Maroc', 'Morocco'),
(145, 508, 'MZ', 'MOZ', 'Mozambique', 'Mozambique'),
(146, 512, 'OM', 'OMN', 'Oman', 'Oman'),
(147, 516, 'NA', 'NAM', 'Namibie', 'Namibia'),
(148, 520, 'NR', 'NRU', 'Nauru', 'Nauru'),
(149, 524, 'NP', 'NPL', 'Népal', 'Nepal'),
(150, 528, 'NL', 'NLD', 'Pays-Bas', 'Netherlands'),
(151, 530, 'AN', 'ANT', 'Antilles Néerlandaises', 'Netherlands Antilles'),
(152, 533, 'AW', 'ABW', 'Aruba', 'Aruba'),
(153, 540, 'NC', 'NCL', 'Nouvelle-Calédonie', 'New Caledonia'),
(154, 548, 'VU', 'VUT', 'Vanuatu', 'Vanuatu'),
(155, 554, 'NZ', 'NZL', 'Nouvelle-Zélande', 'New Zealand'),
(156, 558, 'NI', 'NIC', 'Nicaragua', 'Nicaragua'),
(157, 562, 'NE', 'NER', 'Niger', 'Niger'),
(158, 566, 'NG', 'NGA', 'Nigéria', 'Nigeria'),
(159, 570, 'NU', 'NIU', 'Niué', 'Niue'),
(160, 574, 'NF', 'NFK', 'Île Norfolk', 'Norfolk Island'),
(161, 578, 'NO', 'NOR', 'Norvège', 'Norway'),
(162, 580, 'MP', 'MNP', 'Îles Mariannes du Nord', 'Northern Mariana Islands'),
(163, 581, 'UM', 'UMI', 'Îles Mineures Éloignées des États-Unis', 'United States Minor Outlying Islands'),
(164, 583, 'FM', 'FSM', 'États Fédérés de Micronésie', 'Federated States of Micronesia'),
(165, 584, 'MH', 'MHL', 'Îles Marshall', 'Marshall Islands'),
(166, 585, 'PW', 'PLW', 'Palaos', 'Palau'),
(167, 586, 'PK', 'PAK', 'Pakistan', 'Pakistan'),
(168, 591, 'PA', 'PAN', 'Panama', 'Panama'),
(169, 598, 'PG', 'PNG', 'Papouasie-Nouvelle-Guinée', 'Papua New Guinea'),
(170, 600, 'PY', 'PRY', 'Paraguay', 'Paraguay'),
(171, 604, 'PE', 'PER', 'Pérou', 'Peru'),
(172, 608, 'PH', 'PHL', 'Philippines', 'Philippines'),
(173, 612, 'PN', 'PCN', 'Pitcairn', 'Pitcairn'),
(174, 616, 'PL', 'POL', 'Pologne', 'Poland'),
(175, 620, 'PT', 'PRT', 'Portugal', 'Portugal'),
(176, 624, 'GW', 'GNB', 'Guinée-Bissau', 'Guinea-Bissau'),
(177, 626, 'TL', 'TLS', 'Timor-Leste', 'Timor-Leste'),
(178, 630, 'PR', 'PRI', 'Porto Rico', 'Puerto Rico'),
(179, 634, 'QA', 'QAT', 'Qatar', 'Qatar'),
(180, 638, 'RE', 'REU', 'Réunion', 'Réunion'),
(181, 642, 'RO', 'ROU', 'Roumanie', 'Romania'),
(182, 643, 'RU', 'RUS', 'Fédération de Russie', 'Russian Federation'),
(183, 646, 'RW', 'RWA', 'Rwanda', 'Rwanda'),
(184, 654, 'SH', 'SHN', 'Sainte-Hélène', 'Saint Helena'),
(185, 659, 'KN', 'KNA', 'Saint-Kitts-et-Nevis', 'Saint Kitts and Nevis'),
(186, 660, 'AI', 'AIA', 'Anguilla', 'Anguilla'),
(187, 662, 'LC', 'LCA', 'Sainte-Lucie', 'Saint Lucia'),
(188, 666, 'PM', 'SPM', 'Saint-Pierre-et-Miquelon', 'Saint-Pierre and Miquelon'),
(189, 670, 'VC', 'VCT', 'Saint-Vincent-et-les Grenadines', 'Saint Vincent and the Grenadines'),
(190, 674, 'SM', 'SMR', 'Saint-Marin', 'San Marino'),
(191, 678, 'ST', 'STP', 'Sao Tomé-et-Principe', 'Sao Tome and Principe'),
(192, 682, 'SA', 'SAU', 'Arabie Saoudite', 'Saudi Arabia'),
(193, 686, 'SN', 'SEN', 'Sénégal', 'Senegal'),
(194, 690, 'SC', 'SYC', 'Seychelles', 'Seychelles'),
(195, 694, 'SL', 'SLE', 'Sierra Leone', 'Sierra Leone'),
(196, 702, 'SG', 'SGP', 'Singapour', 'Singapore'),
(197, 703, 'SK', 'SVK', 'Slovaquie', 'Slovakia'),
(198, 704, 'VN', 'VNM', 'Viet Nam', 'Vietnam'),
(199, 705, 'SI', 'SVN', 'Slovénie', 'Slovenia'),
(200, 706, 'SO', 'SOM', 'Somalie', 'Somalia'),
(201, 710, 'ZA', 'ZAF', 'Afrique du Sud', 'South Africa'),
(202, 716, 'ZW', 'ZWE', 'Zimbabwe', 'Zimbabwe'),
(203, 724, 'ES', 'ESP', 'Espagne', 'Spain'),
(204, 732, 'EH', 'ESH', 'Sahara Occidental', 'Western Sahara'),
(205, 736, 'SD', 'SDN', 'Soudan', 'Sudan'),
(206, 740, 'SR', 'SUR', 'Suriname', 'Suriname'),
(207, 744, 'SJ', 'SJM', 'Svalbard etÎle Jan Mayen', 'Svalbard and Jan Mayen'),
(208, 748, 'SZ', 'SWZ', 'Swaziland', 'Swaziland'),
(209, 752, 'SE', 'SWE', 'Suède', 'Sweden'),
(210, 756, 'CH', 'CHE', 'Suisse', 'Switzerland'),
(211, 760, 'SY', 'SYR', 'République Arabe Syrienne', 'Syrian Arab Republic'),
(212, 762, 'TJ', 'TJK', 'Tadjikistan', 'Tajikistan'),
(213, 764, 'TH', 'THA', 'Thaïlande', 'Thailand'),
(214, 768, 'TG', 'TGO', 'Togo', 'Togo'),
(215, 772, 'TK', 'TKL', 'Tokelau', 'Tokelau'),
(216, 776, 'TO', 'TON', 'Tonga', 'Tonga'),
(217, 780, 'TT', 'TTO', 'Trinité-et-Tobago', 'Trinidad and Tobago'),
(218, 784, 'AE', 'ARE', 'Émirats Arabes Unis', 'United Arab Emirates'),
(219, 788, 'TN', 'TUN', 'Tunisie', 'Tunisia'),
(220, 792, 'TR', 'TUR', 'Turquie', 'Turkey'),
(221, 795, 'TM', 'TKM', 'Turkménistan', 'Turkmenistan'),
(222, 796, 'TC', 'TCA', 'Îles Turks et Caïques', 'Turks and Caicos Islands'),
(223, 798, 'TV', 'TUV', 'Tuvalu', 'Tuvalu'),
(224, 800, 'UG', 'UGA', 'Ouganda', 'Uganda'),
(225, 804, 'UA', 'UKR', 'Ukraine', 'Ukraine'),
(226, 807, 'MK', 'MKD', 'L''ex-République Yougoslave de Macédoine', 'The Former Yugoslav Republic of Macedonia'),
(227, 818, 'EG', 'EGY', 'Égypte', 'Egypt'),
(228, 826, 'GB', 'GBR', 'Royaume-Uni', 'United Kingdom'),
(229, 833, 'IM', 'IMN', 'Île de Man', 'Isle of Man'),
(230, 834, 'TZ', 'TZA', 'République-Unie de Tanzanie', 'United Republic Of Tanzania'),
(231, 840, 'US', 'USA', 'États-Unis', 'United States'),
(232, 850, 'VI', 'VIR', 'Îles Vierges des États-Unis', 'U.S. Virgin Islands'),
(233, 854, 'BF', 'BFA', 'Burkina Faso', 'Burkina Faso'),
(234, 858, 'UY', 'URY', 'Uruguay', 'Uruguay'),
(235, 860, 'UZ', 'UZB', 'Ouzbékistan', 'Uzbekistan'),
(236, 862, 'VE', 'VEN', 'Venezuela', 'Venezuela'),
(237, 876, 'WF', 'WLF', 'Wallis et Futuna', 'Wallis and Futuna'),
(238, 882, 'WS', 'WSM', 'Samoa', 'Samoa'),
(239, 887, 'YE', 'YEM', 'Yémen', 'Yemen'),
(240, 891, 'CS', 'SCG', 'Serbie-et-Monténégro', 'Serbia and Montenegro'),
(241, 894, 'ZM', 'ZMB', 'Zambie', 'Zambia');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=242;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
