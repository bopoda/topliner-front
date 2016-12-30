CREATE TABLE `onliner__likes` (
  `post_id` int(10) unsigned NOT NULL,
  `onl_comment_id` int(10) unsigned NOT NULL,
  `onl_counter` int(10) unsigned NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`,`onl_comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8