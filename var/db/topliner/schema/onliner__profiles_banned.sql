CREATE TABLE `onliner__profiles_banned` (
  `onl_user_id` int(10) unsigned NOT NULL,
  `onl_username` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`onl_user_id`),
  KEY `created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8