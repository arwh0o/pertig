CREATE TABLE IF NOT EXISTS `gallery_links` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo_date` date NOT NULL,
  `drive_url` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gallery_links_photo_date_unique` (`photo_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
mysqlpertig_db