CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` int(12) unsigned NOT NULL,
  `valid_until` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8