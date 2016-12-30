CREATE TABLE `onliner__comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `onl_comment_id` int(10) unsigned NOT NULL,
  `onl_user_id` int(10) unsigned NOT NULL,
  `onl_published_at` timestamp NULL DEFAULT NULL,
  `onl_censored` tinyint(1) unsigned DEFAULT '0',
  `onl_removed` tinyint(1) unsigned DEFAULT '0',
  `onl_likes_count` int(10) unsigned DEFAULT '0',
  `onl_comment` text,
  `onl_comment_censored` text,
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_id_onl_comment_id` (`post_id`,`onl_comment_id`),
  KEY `onl_user_id` (`onl_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8