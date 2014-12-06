-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2014 a las 16:24:04
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `storytelling`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `web_groups`
--

CREATE TABLE IF NOT EXISTS `web_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `web_groups`
--

INSERT INTO `web_groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(4, 'Admins', '{"admin":1,"users":1,"sponsors":1}', '2014-10-08 07:17:33', '2014-10-08 07:17:33'),
(5, 'Users', '{"users":1}', '2014-10-08 07:17:34', '2014-10-08 07:17:34'),
(6, 'Sponsors', '{"sponsors":1}', '2014-10-08 07:17:34', '2014-10-08 07:17:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `web_throttle`
--

CREATE TABLE IF NOT EXISTS `web_throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `web_throttle`
--

INSERT INTO `web_throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(13, 45, NULL, 0, 0, 0, NULL, NULL, NULL),
(14, 46, NULL, 0, 0, 0, NULL, NULL, NULL),
(15, 2, NULL, 0, 0, 0, NULL, NULL, NULL),
(16, 3, NULL, 0, 0, 0, NULL, NULL, NULL),
(17, 4, NULL, 0, 0, 0, NULL, NULL, NULL),
(18, 5, NULL, 0, 0, 0, NULL, NULL, NULL),
(19, 9, NULL, 0, 0, 0, NULL, NULL, NULL),
(20, 10, NULL, 0, 0, 0, NULL, NULL, NULL),
(21, 11, NULL, 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `web_users`
--

CREATE TABLE IF NOT EXISTS `web_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` tinyint(1) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `custom_status` int(1) NOT NULL DEFAULT '0',
  `login_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_valid_until` timestamp NULL DEFAULT NULL,
  `lang` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comunity_size` int(11) NOT NULL DEFAULT '0',
  `location` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `location_reference` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `web_users`
--

INSERT INTO `web_users` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `company`, `created_at`, `updated_at`, `name`, `sex`, `age`, `custom_status`, `login_code`, `login_valid_until`, `lang`, `image`, `description`, `comunity_size`, `location`, `location_reference`) VALUES
(9, 'seagomezar@gmail.com', '$2y$10$U9DaIer6eI/HrN4eIYLnCeUSfx3SIta5EihVy83z5fFs9Mg568e62', NULL, 1, NULL, '2014-10-15 01:15:15', '2014-12-06 19:23:42', '$2y$10$8iasj4KGYTYQQiR7cYMuieI9Qc..UoLt6iTnAIaeA2ko44rlej6tu', NULL, 'SponzorMe', '2014-10-15 00:37:45', '2014-12-06 19:23:42', 'Sebastian Alonso Gomez Arias', 1, 23, 2, '84ec6fd901db1295a6d50b1f82da1baf', '2014-12-07 19:23:42', '', '', 'Backend Developer', 0, 'Antwerpen, België', 'CoQBdAAAAGEodQYQCbM5U6hhXJNQ5DtZJPod1aJpW_IbQ1dtE8J734QvzMLQfJisRotrd_CLJqkEEpOJqjwpYvN5KmoISTiG1P6LyT3txw9AvjJ-GQ4A-sXeFdHv895LqA28wVNFDSxfI4lC5yf3tZ8m8cMJ7ZZY4Dt9_YEE2WKp84JyNe8nEhAPN_NI5yxAXyUGD3LF7sgnGhSNSM3ZmSZkA4qwO1kfIGn5LaXP2w'),
(16, 'seagomezar@outlook1.com', '$2y$10$u.r8dn9TV9H24vil5lNuwuyJU95YpSrFeB1k9ZgYPF42T7o/kTnTC', NULL, 0, '9Sr1ieUSt55fybCdB7zNdj28p1rlgVpxj8hkn65adh', NULL, NULL, NULL, NULL, '', '2014-12-06 20:16:26', '2014-12-06 20:16:26', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', 0, '', ''),
(18, 'seagomezar@outlook.com', '$2y$10$5fUPklJGEI85dhLqxqNrJOE1HLlPlqz.VmAzMETKJj5h8PI43WjDW', NULL, 1, NULL, '2014-12-06 20:23:53', NULL, NULL, NULL, '', '2014-12-06 20:23:34', '2014-12-06 20:23:53', NULL, NULL, NULL, 0, NULL, NULL, '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `web_users_groups`
--

CREATE TABLE IF NOT EXISTS `web_users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `web_users_groups`
--

INSERT INTO `web_users_groups` (`user_id`, `group_id`, `updated_at`, `created_at`) VALUES
(9, 5, '2014-10-15 00:37:50', '2014-10-15 00:37:50'),
(11, 6, '2014-10-15 01:46:55', '2014-10-15 01:46:55'),
(12, 5, '2014-12-03 03:49:12', '2014-12-03 03:49:12'),
(13, 5, '2014-12-05 07:59:24', '2014-12-05 07:59:24'),
(14, 5, '2014-12-06 03:24:34', '2014-12-06 03:24:34');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
