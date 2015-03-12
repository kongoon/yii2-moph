-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2015 at 02:59 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii2moph`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('AccessDebug', '2', 1426071729),
('admin', '1', 1426069816),
('manager', '3', 1426124570),
('user', '2', 1426072071);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/contact/*', 2, NULL, NULL, NULL, 1426070540, 1426070540),
('/contact/create', 2, NULL, NULL, NULL, 1426070540, 1426070540),
('/contact/delete', 2, NULL, NULL, NULL, 1426070540, 1426070540),
('/contact/index', 2, NULL, NULL, NULL, 1426070540, 1426070540),
('/contact/update', 2, NULL, NULL, NULL, 1426070540, 1426070540),
('/contact/view', 2, NULL, NULL, NULL, 1426070540, 1426070540),
('/debug/*', 2, NULL, NULL, NULL, 1426068341, 1426068341),
('/site/*', 2, NULL, NULL, NULL, 1426068492, 1426068492),
('/user/*', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/auth/*', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/auth/connect', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/auth/login', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/default/*', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/default/account', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/default/cancel', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/default/confirm', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/default/forgot', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/default/index', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/default/login', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/default/logout', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/default/profile', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/default/register', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/default/resend', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/default/resend-change', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('/user/default/reset', 2, NULL, NULL, NULL, 1426070910, 1426070910),
('Access User', 2, NULL, NULL, NULL, 1426070881, 1426070921),
('AccessDebug', 2, NULL, NULL, NULL, 1426069567, 1426069567),
('admin', 1, NULL, NULL, NULL, 1426069722, 1426069722),
('Contact Create', 2, NULL, NULL, NULL, 1426070562, 1426070780),
('Contact Delete', 2, NULL, NULL, NULL, 1426070807, 1426070807),
('Contact Index', 2, NULL, NULL, NULL, 1426077862, 1426077862),
('Contact Manage', 2, NULL, NULL, NULL, 1426079434, 1426079434),
('Contact Update', 2, NULL, NULL, NULL, 1426070795, 1426070822),
('Contact View', 2, NULL, NULL, NULL, 1426077983, 1426077983),
('manager', 1, NULL, NULL, NULL, 1426124522, 1426124522),
('user', 1, NULL, NULL, NULL, 1426069736, 1426069736);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Contact Manage', '/contact/*'),
('Contact Create', '/contact/create'),
('Contact Delete', '/contact/delete'),
('Contact Index', '/contact/index'),
('Contact Update', '/contact/update'),
('Contact View', '/contact/view'),
('AccessDebug', '/debug/*'),
('Access User', '/user/*'),
('Access User', '/user/auth/*'),
('Access User', '/user/default/*'),
('admin', 'Access User'),
('admin', 'AccessDebug'),
('manager', 'AccessDebug'),
('user', 'AccessDebug'),
('admin', 'Contact Create'),
('manager', 'Contact Create'),
('admin', 'Contact Delete'),
('admin', 'Contact Index'),
('manager', 'Contact Index'),
('user', 'Contact Index'),
('admin', 'Contact Manage'),
('admin', 'Contact Update'),
('manager', 'Contact Update'),
('admin', 'Contact View'),
('manager', 'Contact View'),
('user', 'Contact View');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL COMMENT 'ชื่อ',
  `lastname` varchar(100) NOT NULL COMMENT 'นามสกุล',
  `address` text NOT NULL COMMENT 'ที่อยู่',
  `email` varchar(100) NOT NULL COMMENT 'อีเมลล์',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `address`, `email`) VALUES
(1, 'มานพ', 'กองอุ่น', 'ทดสอบที่อยู่', 'kongoon@gmail.com'),
(2, 'ทดสอบ', 'ทดสอบ', 'ทดสอบ', 'aaaa@gmail.com'),
(3, 'ทดสอบ', 'ทดสอบ', 'ทดสอบ', 'aaa@aaa.com'),
(4, 'ทดสอบ', 'ทดสอบ', 'ทดสอบ', 'aaa@aaa.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(256) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1426066546),
('m140602_111327_create_menu_table', 1426067390),
('m150214_044831_init_user', 1426066556);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profile_user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `create_time`, `update_time`, `full_name`) VALUES
(1, 1, '2015-03-11 03:35:56', NULL, 'the one'),
(2, 2, '2015-03-11 04:50:36', NULL, 'Demo Demo'),
(3, 3, '2015-03-11 19:41:43', NULL, 'Bbb Bbb');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `can_admin` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `create_time`, `update_time`, `can_admin`) VALUES
(1, 'Admin', '2015-03-11 03:35:56', NULL, 1),
(2, 'User', '2015-03-11 03:35:56', NULL, 0),
(3, 'Manager', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `api_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_time` timestamp NULL DEFAULT NULL,
  `create_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `ban_time` timestamp NULL DEFAULT NULL,
  `ban_reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email` (`email`),
  UNIQUE KEY `user_username` (`username`),
  KEY `user_role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role_id`, `status`, `email`, `new_email`, `username`, `password`, `auth_key`, `api_key`, `login_ip`, `login_time`, `create_ip`, `create_time`, `update_time`, `ban_time`, `ban_reason`) VALUES
(1, 1, 1, 'neo@neo.com', NULL, 'neo', '$2y$13$dyVw4WkZGkABf2UrGWrhHO4ZmVBv.K4puhOL59Y9jQhIdj63TlV.O', 'MsOaFA7I2yczT-0Jze5rKB0lnmLcjiGP', 'eW3Maok983rb9B8JsypaaM0KMU89KLZX', '::1', '2015-03-11 19:39:31', NULL, '2015-03-11 03:35:56', NULL, NULL, NULL),
(2, 2, 1, 'aaa@aaa.com', NULL, 'demo', '$2y$13$67e0nFNWfvAxM883xFN5B.qEalNLU9Dyw8hL7VAerV1b4yZ/9WQtS', NULL, NULL, '::1', '2015-03-11 19:47:31', NULL, '2015-03-11 04:50:36', NULL, NULL, NULL),
(3, 3, 1, 'bbb@bbb.com', NULL, 'bbb', '$2y$13$1J7m99BeUvmDZXDNw3.EUe6NQoUwWKEryQIsxEeNLPv7LZf9FNTMC', NULL, NULL, '::1', '2015-03-11 19:43:23', NULL, '2015-03-11 19:41:43', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE IF NOT EXISTS `user_auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_attributes` text COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_auth_provider_id` (`provider_id`),
  KEY `user_auth_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_key`
--

CREATE TABLE IF NOT EXISTS `user_key` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` smallint(6) NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `consume_time` timestamp NULL DEFAULT NULL,
  `expire_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_key_key` (`key`),
  KEY `user_key_user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_key`
--

INSERT INTO `user_key` (`id`, `user_id`, `type`, `key`, `create_time`, `consume_time`, `expire_time`) VALUES
(1, 3, 1, 'hMsGypHMgnhvx1of0DtM-SKZvB9y_6Tc', '2015-03-11 19:43:03', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_old`
--

CREATE TABLE IF NOT EXISTS `user_old` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '1',
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_old`
--

INSERT INTO `user_old` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'gt2CJnD9PDAJD-DXRrhhF5Ylt0KSxwSi', '$2y$13$DT2eri2zO/zqMFXbDCDfU.UFaedr3uLjrgMLjwPTQwEybT4QZ2VIe', NULL, 'contact@programmerthailand.com', 10, 1, 1412172163, 1412172163),
(2, 'demo', '6Tbf6TLS3umfBZ_HWA_kyIUrVzx9G7YE', '$2y$13$u1RJqMnIH4eBhw0IU9WI9OJHBeLJwcCnxISmw0wYWzAfr4IEU6Qha', NULL, 'demo@demo.com', 5, 1, 1420214966, 1420214966),
(3, 'manop', 'hCRXcGuuKBodC5bxUbg0Np3_D5Q5etqh', '$2y$13$uEnMRURV6VuVqdJH7H02NO8QuMHiX5EYbLZbCo3bvx9omDvGacDu.', NULL, 'kongoon@gmail.com', 1, 1, 0, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Constraints for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD CONSTRAINT `user_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_key`
--
ALTER TABLE `user_key`
  ADD CONSTRAINT `user_key_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
