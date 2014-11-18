-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 18 Novembre 2014 à 16:22
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `restorallye`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `commentary` text COLLATE utf8_unicode_ci NOT NULL,
  `user_ID` int(11) NOT NULL,
  `event_ID` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `commentary`, `user_ID`, `event_ID`, `created_at`, `updated_at`) VALUES
(1, 'Bonjour, je suis Anonyme. We are Anonymous. We are legion. We do not forgive. We do not forget. Expect us.', 1, 1, '2014-11-18 14:18:57', '2014-11-18 14:18:57'),
(2, 'Reported.', 2, 1, '2014-11-18 14:18:57', '2014-11-18 14:18:57'),
(3, 'Maieuh...', 1, 1, '2014-11-18 14:18:57', '2014-11-18 14:18:57');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `places-remaining` int(11) NOT NULL,
  `places-total` int(11) NOT NULL,
  `resto1_ID` int(11) NOT NULL,
  `resto2_ID` int(11) NOT NULL,
  `resto3_ID` int(11) NOT NULL,
  `done` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `location`, `date`, `places-remaining`, `places-total`, `resto1_ID`, `resto2_ID`, `resto3_ID`, `done`, `created_at`, `updated_at`) VALUES
(1, 'Liège', '2014-11-18', 7, 50, 1, 2, 4, 'false', '2014-11-18 14:18:57', '2014-11-18 14:18:57');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_11_18_081424_create_users_table', 1),
('2014_11_18_090506_create_restos_table', 1),
('2014_11_18_090507_create_events_table', 1),
('2014_11_18_090535_create_registrations_table', 1),
('2014_11_18_090554_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `registrations`
--

CREATE TABLE IF NOT EXISTS `registrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_ID` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_ID` int(11) NOT NULL,
  `groupname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peopleNumber` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `registrations`
--

INSERT INTO `registrations` (`id`, `user_ID`, `user_name`, `user_firstname`, `user_mail`, `event_ID`, `groupname`, `peopleNumber`, `created_at`, `updated_at`) VALUES
(1, 1, 'Anonyme', 'Utilisateur', 'anonyme@restorallye.com', 1, 'Anonymous', 42, '2014-11-18 14:18:57', '2014-11-18 14:18:57'),
(2, 2, 'Administrateur', 'Admin', 'info@restorallye.com', 1, 'AdminBook', 1, '2014-11-18 14:18:57', '2014-11-18 14:18:57');

-- --------------------------------------------------------

--
-- Structure de la table `restos`
--

CREATE TABLE IF NOT EXISTS `restos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address-street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address-number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address-postalCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address-town` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `restos`
--

INSERT INTO `restos` (`id`, `name`, `address-street`, `address-number`, `address-postalCode`, `address-town`, `url`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Quick', 'Rue Cockerill', '30', '4100', 'Seraing', 'http://www.quick.be/', 'img/quick.png', '2014-11-18 14:18:57', '2014-11-18 14:18:57'),
(2, 'McDonald', 'Rue Renkin Sualem', '0', '4101', 'Jemeppe', 'http://mcdonalds.be/fr', 'img/mcdonalds.png', '2014-11-18 14:18:57', '2014-11-18 14:18:57'),
(3, 'Cafeteria du Parc des Marais', 'Parc des Marais', '0', '4100', 'Seraing', '', 'img/cafeteria.png', '2014-11-18 14:18:57', '2014-11-18 14:18:57'),
(4, 'Le France 2', 'Rue Nihar', '47', '4101', 'Jemeppe', 'http://lefrance2restaurantljemeppe.be/fr', 'img/france2.png', '2014-11-18 14:18:57', '2014-11-18 14:18:57');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address-street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address-number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address-postalCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address-town` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `newsletter` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `company`, `address-street`, `address-number`, `address-postalCode`, `address-town`, `phone`, `fax`, `email`, `password`, `newsletter`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anonyme', 'Utilisateur', '', 'Rue des gourmands', '1', '0001', 'RestoLand', '04 000 00 00', '', 'anonyme@restorallye.com', '$2y$10$ni.cB7cYr6s9.KPA1LaGyOS8Nqxp5SpCy4tyy.zh9.74Jkbzu1tve', 0, NULL, '2014-11-18 14:18:57', '2014-11-18 14:18:57'),
(2, 'Administrateur', 'Admin', 'RestoRallye ASBL', 'Rue des gourmands', '1', '0001', 'RestoLand', '0471 38 06 38', '', 'info@restorallye.com', '$2y$10$G8MSz4jOPz0lmMXK95Esiuq/l7L/xF79wtSyb6JmJjNCNfs2gI42i', 0, NULL, '2014-11-18 14:18:57', '2014-11-18 14:18:57');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
