
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'gt2CJnD9PDAJD-DXRrhhF5Ylt0KSxwSi', '$2y$13$DT2eri2zO/zqMFXbDCDfU.UFaedr3uLjrgMLjwPTQwEybT4QZ2VIe', NULL, 'contact@programmerthailand.com', 10, 1, 1412172163, 1412172163),
(2, 'demo', '6Tbf6TLS3umfBZ_HWA_kyIUrVzx9G7YE', '$2y$13$u1RJqMnIH4eBhw0IU9WI9OJHBeLJwcCnxISmw0wYWzAfr4IEU6Qha', NULL, 'demo@demo.com', 5, 1, 1420214966, 1420214966),
(3, 'manop', 'hCRXcGuuKBodC5bxUbg0Np3_D5Q5etqh', '$2y$13$uEnMRURV6VuVqdJH7H02NO8QuMHiX5EYbLZbCo3bvx9omDvGacDu.', NULL, 'kongoon@gmail.com', 1, 1, 0, 0);


