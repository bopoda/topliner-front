CREATE TABLE `onliner__moderators` (
  `onl_user_id` int(10) unsigned NOT NULL,
  `onl_username` varchar(32) NOT NULL,
  `moderated_onl_user_ids` varchar(100) DEFAULT NULL,
  `first_activity_at` timestamp NULL DEFAULT NULL,
  `latest_activity_at` timestamp NULL DEFAULT NULL,
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`onl_user_id`),
  UNIQUE KEY `onl_username` (`onl_username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8