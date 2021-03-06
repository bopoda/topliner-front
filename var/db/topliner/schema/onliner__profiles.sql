CREATE TABLE `onliner__profiles` (
  `onl_user_id` int(10) unsigned NOT NULL,
  `onl_username` varchar(32) DEFAULT NULL,
  `onl_banned` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onl_registered_at` date DEFAULT NULL,
  `onl_city` varchar(100) DEFAULT NULL,
  `onl_occupation` varchar(255) DEFAULT NULL,
  `onl_interests` varchar(100) DEFAULT NULL,
  `onl_birthday` varchar(100) DEFAULT NULL,
  `onl_email` varchar(100) DEFAULT NULL,
  `onl_jabber` varchar(255) DEFAULT NULL,
  `onl_icq` varchar(32) DEFAULT NULL,
  `onl_skype` varchar(255) DEFAULT NULL,
  `onl_aim` varchar(255) DEFAULT NULL,
  `onl_site` varchar(100) DEFAULT NULL,
  `onl_blog` varchar(255) DEFAULT NULL,
  `onl_devices` varchar(255) DEFAULT NULL,
  `onl_commentators_rating` int(10) unsigned DEFAULT NULL,
  `onl_cards` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `enqueued_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`onl_user_id`),
  KEY `onl_username` (`onl_username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8