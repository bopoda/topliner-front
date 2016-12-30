CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `onl_username` varchar(32) DEFAULT NULL,
  `password_hash` char(40) DEFAULT NULL,
  `twitter_token` varchar(100) DEFAULT NULL,
  `facebook_token` varchar(100) DEFAULT NULL,
  `google_token` varchar(100) DEFAULT NULL,
  `notifications` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `latest_activity` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `twitter_token` (`twitter_token`),
  UNIQUE KEY `facebook_token` (`facebook_token`),
  UNIQUE KEY `google_token` (`google_token`),
  UNIQUE KEY `onl_username` (`onl_username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8