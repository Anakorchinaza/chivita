-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2024 at 08:19 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chivita`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question_id` int NOT NULL,
  `answers` varchar(255) NOT NULL,
  `variant` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answers`, `variant`, `created_at`, `updated_at`) VALUES
(1, 1, 'Exploring a new hiking trail', 'Orange Fruit Juice', '2024-05-24 14:52:02', '0000-00-00 00:00:00'),
(2, 1, 'Hosting a party with friends', 'Pineapple Fruit Juice', '2024-05-24 14:52:02', '0000-00-00 00:00:00'),
(3, 1, 'Relaxing on a beach', 'Apple Fruit Juice', '2024-05-24 14:52:02', '0000-00-00 00:00:00'),
(4, 1, 'Trying a new adventure sport', 'Red Grape Fruit Juice', '2024-05-24 14:52:02', '0000-00-00 00:00:00'),
(5, 2, 'Active and outdoors', 'Power of 6 - Mixed Citrus Juice', '2024-05-24 14:54:36', '2024-05-26 01:34:38'),
(6, 2, 'Social and lively', 'Active Zest - Mixed Fruit Drink', '2024-05-24 14:54:36', '2024-05-26 01:34:44'),
(7, 2, 'Relaxed and rejuvenating', 'Power of Vegetable + Fruit Drink', '2024-05-24 14:54:36', '2024-05-24 14:57:37'),
(8, 2, 'Cultural and exploratory', 'Pineapple & Coconut Nectar', '2024-05-24 14:54:36', '0000-00-00 00:00:00'),
(9, 3, 'Sweet and tangy', 'Multifruita Nectar', '2024-05-24 14:57:19', '0000-00-00 00:00:00'),
(10, 3, 'Fruity and tropical', 'Happy Hour Orange Safari', '2024-05-24 14:57:19', '0000-00-00 00:00:00'),
(11, 3, 'Crisp and refreshing', 'Happy Hour Tasty Tango', '2024-05-24 14:57:19', '0000-00-00 00:00:00'),
(12, 3, 'Bold and zesty', 'Power of Vegetable + Fruit Drink', '2024-05-24 14:57:19', '0000-00-00 00:00:00'),
(13, 4, 'With excitement and enthusiasm', 'Active Zest - Mixed Fruit Drink', '2024-05-24 15:00:08', '2024-05-26 01:35:51'),
(14, 4, 'With caution and consideration', 'Pineapple Fruit Juice', '2024-05-24 15:00:08', '0000-00-00 00:00:00'),
(15, 4, 'With curiosity and openness', 'Apple Fruit Juice', '2024-05-24 15:00:08', '0000-00-00 00:00:00'),
(16, 4, 'With skepticism and analysis', 'Red Grape Fruit Juice', '2024-05-24 15:00:08', '0000-00-00 00:00:00'),
(17, 5, 'Trying new things', 'Happy Hour Orange Safari', '2024-05-24 15:02:35', '0000-00-00 00:00:00'),
(18, 5, 'Spending time with friends and family', 'Power of Vegetable + Fruit (Carrot + Orange)', '2024-05-24 15:02:35', '0000-00-00 00:00:00'),
(19, 5, 'Achieving personal goals', 'Happy Hour Tasty Tango', '2024-05-24 15:02:35', '0000-00-00 00:00:00'),
(20, 5, 'Relaxing and unwinding', 'Ice Tea Lemon', '2024-05-24 15:02:35', '0000-00-00 00:00:00'),
(21, 6, 'Adventurous and spontaneous', 'Pineapple & Coconut Nectar', '2024-05-24 15:04:45', '0000-00-00 00:00:00'),
(22, 6, 'Social and outgoing', 'Active Zest - Mixed Fruit Drink', '2024-05-24 15:04:45', '2024-05-26 01:36:14'),
(23, 6, 'Calm and reflective', 'Apple Fruit Juice', '2024-05-24 15:04:45', '0000-00-00 00:00:00'),
(24, 6, 'Confident and assertive', 'Power of 6 - Mixed Citrus Juice', '2024-05-24 15:04:45', '2024-05-26 01:35:02'),
(25, 7, 'Dive right in and figure it out as I go', 'Active Zest - Mixed Fruit \nDrink', '2024-05-24 15:08:09', '2024-05-26 01:35:06'),
(26, 7, 'Take a step back, plan, and prioritize tasks', 'Power of 6 - Mixed \nCitrus Juice', '2024-05-24 15:08:09', '2024-05-26 01:37:07'),
(27, 7, 'Collaborate with others to get multiple perspectives', 'Multifruita Nectar', '2024-05-24 15:08:09', '0000-00-00 00:00:00'),
(28, 7, 'Break it down into smaller, manageable tasks', 'Happy Hour Orange Safari', '2024-05-24 15:08:09', '0000-00-00 00:00:00'),
(29, 7, 'Research and gather information before starting', 'Power of Vegetable + Fruit (Carrot + Orange)', '2024-05-24 15:08:09', '0000-00-00 00:00:00'),
(30, 7, 'Seek guidance and feedback from experts', 'Red Grape Fruit Juice', '2024-05-24 15:08:09', '0000-00-00 00:00:00'),
(31, 8, 'Trying new adventures and taking risks', 'Pineapple & Coconut Nectar', '2024-05-24 15:11:30', '0000-00-00 00:00:00'),
(32, 8, 'Relaxing and unwinding with a good book', 'Apple Fruit Juice', '2024-05-24 15:11:30', '0000-00-00 00:00:00'),
(33, 8, 'Creating art or expressing myself creatively', 'Ice Tea Lemon', '2024-05-24 15:11:30', '2024-05-26 08:56:08'),
(34, 8, 'Exploring new places and experiencing different cultures', 'Orange Fruit Juice', '2024-05-24 15:11:30', '0000-00-00 00:00:00'),
(35, 8, 'Solving puzzles and playing strategic game', 'Power of 6 - Mixed Citrus Juice', '2024-05-24 15:11:30', '2024-05-26 01:36:43'),
(36, 8, 'Hosting gatherings and bringing people together', 'Pineapple Fruit Juice', '2024-05-24 15:11:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `questions` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questions`, `created_at`, `updated_at`) VALUES
(1, 'Which activity sounds most appealing to you?', '2024-05-24 14:39:41', '0000-00-00 00:00:00'),
(2, 'How would you describe your ideal weekend?', '2024-05-24 14:39:41', '0000-00-00 00:00:00'),
(3, 'Which flavor profile do you prefer?', '2024-05-24 14:39:41', '0000-00-00 00:00:00'),
(4, 'How do you approach new experiences?', '2024-05-24 14:39:41', '0000-00-00 00:00:00'),
(5, 'What motivates you?', '2024-05-24 14:39:41', '0000-00-00 00:00:00'),
(6, 'How would you describe your personality?', '2024-05-24 14:39:41', '0000-00-00 00:00:00'),
(7, 'When working on a project, I usually', '2024-05-24 14:39:41', '0000-00-00 00:00:00'),
(8, 'In my free time, I enjoy?', '2024-05-24 14:39:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `id` int NOT NULL AUTO_INCREMENT,
  `variant` varchar(255) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `variant`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Orange Fruit Juice', 'Orange Fruit Juice is made from real natural fruits. It\'s an excellent source of Vitamin C and Magnesium you need for normal function of immune and nervous system respectively. Get transported into the luscious world of 100% natural fruits with no added sugar or preservatives served in a convenient pack to enrich your health. Make your breakfast complete with Chivita 100%', '/assets/Chivita_variant_pictures/chivita-orange-juice.png', '2024-05-25 23:40:52', '2024-05-30 07:18:36'),
(2, 'Pineapple Fruit Juice', 'Pineapple Fruit Juice is made from real natural fruits. It\'s an excellent source of Calcium and Magnesium you need for normal function of digestive and nervous system respectively. Get transported into the luscious world of 100% natural fruits with no added sugar or preservatives served in a convenient pack to enrich your health. Make your breakfast complete with Chivita 100%.', '/assets/Chivita_variant_pictures/chivita-pinapple-juice.png', '2024-05-25 23:43:04', '2024-05-30 07:18:57'),
(3, 'Apple Fruit Juice', 'Apple Fruit Juice is made from real natural fruits. It\'s an excellent source of Calcium and Magnesium you need for normal function of digestive and nervous system respectively. Get transported into the luscious world of 100% natural fruits with no added sugar or preservatives served in a convenient pack to enrich your health. Make your breakfast complete with Chivita 100%.', '/assets/Chivita_variant_pictures/chivita-apple-juice1.png', '2024-05-25 23:45:08', '2024-05-30 07:19:28'),
(4, 'Red Grape Fruit Juice', 'Red Grapefruit Juice is made from real natural fruits. It\'s an excellent source of Calcium and Magnesium you need for normal function of digestive and nervous system respectively. Get transported into the luscious world of 100% natural fruits with no added sugar or preservatives served in a convenient pack to enrich your health. Make your breakfast complete with Chivita 100%.', '/assets/Chivita_variant_pictures/chivita-red-grape-juice.png', '2024-05-25 23:46:40', '2024-05-30 07:19:46'),
(5, 'Power of 6 - Mixed Citrus Juice', 'Chivita Active is a unique blend of six citrus fruits of Tangerine, Grapefruit, Lemon, Mandarine, Lime and Orange. Chivita Active is enriched with Vitamin C to energize you all day – A perfect partner on your journey to live a healthy active. ', '/assets/Chivita_variant_pictures/chivita-citrus-mix.png', '2024-05-25 23:48:05', '2024-05-30 07:24:18'),
(6, 'Active Zest - Mixed Fruit Drink', 'Active Zest – Mixed Fruit Drink is made from the best quality fruits and vegetables, perfectly blended with the goodness of Vitamins and nutrients. Active Zest – Mixed Fruit Drink is a healthy and tasty way to get the regular dose of antioxidants and stamina for an active healthy lifestyle.', '/assets/Chivita_variant_pictures/active-zest.png', '2024-05-25 23:49:42', '2024-05-31 08:18:32'),
(7, 'Power of Vegetable + Fruit (Carrot + Orange)', 'Chivita Active Vegetable Fruit Nectar Carrot & Orange is a sparkling, lovely and refreshing juice drink. It is sweet, crisp and tasty. Produced to the highest standards of quality', '/assets/Chivita_variant_pictures/prdts_powerOfVeggie.jpg', '2024-05-25 23:51:06', '2024-05-30 07:33:00'),
(8, 'Pineapple & Coconut Nectar', 'A perfect blend of Sun-ripened Pineapple and Coconut water to give you that irresistible Taste you love. Whether its drunk alone or mixed with other drinks, what you get is a delicious pleasure of exotic indulgence and an irresistible Taste. So delicious that you cannot but enjoy every moment of life with it!', '/assets/Chivita_variant_pictures/chivita_exotic_pineapple_and_coconut.png', '2024-05-25 23:52:08', '2024-05-30 07:33:59'),
(9, 'Multifruita Nectar', 'In our quest to deliver a taste like no other, we find Chi Exotic Multifruita Nectar. Chi Exotic Multifruita is a rare and unique blend of 10 rich tropical fruits to deliver a distinctive taste that’s too good not to share.', '/assets/Chivita_variant_pictures/chivita_exotic_multifruita_nectar.png', '2024-05-25 23:53:09', '2024-05-30 07:34:41'),
(10, 'Happy Hour Orange Safari', 'Happy Hour by Chivita is a range of refreshing still drinks. Give your mood a boost with the ever-refreshing Happy Hour. Every sip burst into flavors that guarantee to keep you smiling.', '/assets/Chivita_variant_pictures/Chivita_HappyHour_Orange_Safari.png', '2024-05-25 23:54:22', '2024-05-30 07:35:17'),
(11, 'Happy Hour Tasty Tango', 'Happy Hour by Chivita is a range of refreshing still drinks. Give your mood a boost with the ever-refreshing Happy Hour. Every sip burst into flavours that guarantee to keep you smiling.', '/assets/Chivita_variant_pictures/Chivita_happy_hour_tasty_tango.png', '2024-05-26 00:00:34', '2024-05-30 07:35:50'),
(12, 'Ice Tea Lemon', 'Chivita Ice Tea is a blend of natural tea extracts with fruity flavours. Launched originally as Chi Ice Tea in 2009, its the first RTD Ice Tea to be introduced into the Nigerian market. Chivita Ice Tea is your go to drink for natural refreshment and rejuvenation. ', '/assets/Chivita_variant_pictures/Chi-Ice-Tea-1-Litre_prev_ui.png', '2024-05-26 00:01:35', '2024-05-31 08:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('m4t3yxP9DUJQW1mJkoIfMGVRoWgDluyFTUdgR7fS', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoiNGk3MDRRNFpyQTY2VURvUGF3QnRKWTVtd3JldDUzWmQ5R0JyeVREVyI7czo3OiJ1c2VyX2lkIjtpOjg7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3RoYW5rLXlvdSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjg7czo3OiJ2YXJpYW50IjtzOjE4OiJPcmFuZ2UgRnJ1aXQgSnVpY2UiO3M6NToiaW1hZ2UiO3M6NTc6Ii9hc3NldHMvQ2hpdml0YV92YXJpYW50X3BpY3R1cmVzL2NoaXZpdGEtb3JhbmdlLWp1aWNlLnBuZyI7czoxMToiZGVzY3JpcHRpb24iO3M6Mzc0OiJPcmFuZ2UgRnJ1aXQgSnVpY2UgaXMgbWFkZSBmcm9tIHJlYWwgbmF0dXJhbCBmcnVpdHMuIEl0J3MgYW4gZXhjZWxsZW50IHNvdXJjZSBvZiBWaXRhbWluIEMgYW5kIE1hZ25lc2l1bSB5b3UgbmVlZCBmb3Igbm9ybWFsIGZ1bmN0aW9uIG9mIGltbXVuZSBhbmQgbmVydm91cyBzeXN0ZW0gcmVzcGVjdGl2ZWx5LiBHZXQgdHJhbnNwb3J0ZWQgaW50byB0aGUgbHVzY2lvdXMgd29ybGQgb2YgMTAwJSBuYXR1cmFsIGZydWl0cyB3aXRoIG5vIGFkZGVkIHN1Z2FyIG9yIHByZXNlcnZhdGl2ZXMgc2VydmVkIGluIGEgY29udmVuaWVudCBwYWNrIHRvIGVucmljaCB5b3VyIGhlYWx0aC4gTWFrZSB5b3VyIGJyZWFrZmFzdCBjb21wbGV0ZSB3aXRoIENoaXZpdGEgMTAwJSI7fQ==', 1717054843);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'Test@gmail.com', NULL, NULL, '2024-05-25 17:59:03', '2024-05-25 17:59:03'),
(5, 'adminSetting', 'chi55@gmail.com', NULL, NULL, '2024-05-26 08:21:09', '2024-05-26 08:21:09'),
(3, 'Chinaza Anakor', 'ruby@gmail.com', NULL, NULL, '2024-05-25 21:26:36', '2024-05-25 21:26:36'),
(6, 'Anakor Chinaza Sylvia', 'superadmin@gmail.com', NULL, NULL, '2024-05-26 08:51:48', '2024-05-26 08:51:48'),
(7, 'Ruby Kings', 'lucy@gmail.com', NULL, NULL, '2024-05-26 08:56:58', '2024-05-26 08:56:58'),
(8, 'Test', 'Test2@gmail.com', NULL, NULL, '2024-05-30 06:40:21', '2024-05-30 06:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `users_answer`
--

DROP TABLE IF EXISTS `users_answer`;
CREATE TABLE IF NOT EXISTS `users_answer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question_id` int NOT NULL,
  `answer_id` int NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_answer`
--

INSERT INTO `users_answer` (`id`, `question_id`, `answer_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, '2024-05-26 00:41:29', '2024-05-26 00:41:29'),
(2, 2, 5, 1, '2024-05-26 00:41:29', '2024-05-26 00:41:29'),
(3, 3, 12, 1, '2024-05-26 00:41:29', '2024-05-26 00:41:29'),
(4, 4, 13, 1, '2024-05-26 00:41:29', '2024-05-26 00:41:29'),
(5, 5, 20, 1, '2024-05-26 00:41:29', '2024-05-26 00:41:29'),
(6, 6, 21, 1, '2024-05-26 00:41:29', '2024-05-26 00:41:29'),
(7, 7, 26, 1, '2024-05-26 00:41:29', '2024-05-26 00:41:29'),
(8, 8, 34, 1, '2024-05-26 00:41:29', '2024-05-26 00:41:29'),
(9, 1, 1, 5, '2024-05-26 08:21:49', '2024-05-26 08:21:49'),
(10, 2, 8, 5, '2024-05-26 08:21:49', '2024-05-26 08:21:49'),
(11, 3, 11, 5, '2024-05-26 08:21:49', '2024-05-26 08:21:49'),
(12, 4, 14, 5, '2024-05-26 08:21:49', '2024-05-26 08:21:49'),
(13, 5, 17, 5, '2024-05-26 08:21:49', '2024-05-26 08:21:49'),
(14, 6, 23, 5, '2024-05-26 08:21:49', '2024-05-26 08:21:49'),
(15, 7, 28, 5, '2024-05-26 08:21:49', '2024-05-26 08:21:49'),
(16, 8, 33, 5, '2024-05-26 08:21:49', '2024-05-26 08:21:49'),
(17, 1, 3, 6, '2024-05-26 08:52:17', '2024-05-26 08:52:17'),
(18, 2, 6, 6, '2024-05-26 08:52:17', '2024-05-26 08:52:17'),
(19, 3, 12, 6, '2024-05-26 08:52:17', '2024-05-26 08:52:17'),
(20, 4, 14, 6, '2024-05-26 08:52:17', '2024-05-26 08:52:17'),
(21, 5, 17, 6, '2024-05-26 08:52:17', '2024-05-26 08:52:17'),
(22, 6, 23, 6, '2024-05-26 08:52:17', '2024-05-26 08:52:17'),
(23, 7, 25, 6, '2024-05-26 08:52:17', '2024-05-26 08:52:17'),
(24, 8, 34, 6, '2024-05-26 08:52:17', '2024-05-26 08:52:17'),
(25, 1, 1, 7, '2024-05-26 08:57:31', '2024-05-26 08:57:31'),
(26, 2, 6, 7, '2024-05-26 08:57:31', '2024-05-26 08:57:31'),
(27, 3, 11, 7, '2024-05-26 08:57:31', '2024-05-26 08:57:31'),
(28, 4, 15, 7, '2024-05-26 08:57:31', '2024-05-26 08:57:31'),
(29, 5, 19, 7, '2024-05-26 08:57:31', '2024-05-26 08:57:31'),
(30, 6, 23, 7, '2024-05-26 08:57:31', '2024-05-26 08:57:31'),
(31, 7, 25, 7, '2024-05-26 08:57:31', '2024-05-26 08:57:31'),
(32, 8, 31, 7, '2024-05-26 08:57:31', '2024-05-26 08:57:31'),
(33, 1, 1, 8, '2024-05-30 06:40:43', '2024-05-30 06:40:43'),
(34, 2, 8, 8, '2024-05-30 06:40:43', '2024-05-30 06:40:43'),
(35, 3, 12, 8, '2024-05-30 06:40:43', '2024-05-30 06:40:43'),
(36, 4, 15, 8, '2024-05-30 06:40:43', '2024-05-30 06:40:43'),
(37, 5, 18, 8, '2024-05-30 06:40:43', '2024-05-30 06:40:43'),
(38, 6, 21, 8, '2024-05-30 06:40:43', '2024-05-30 06:40:43'),
(39, 7, 27, 8, '2024-05-30 06:40:43', '2024-05-30 06:40:43'),
(40, 8, 34, 8, '2024-05-30 06:40:43', '2024-05-30 06:40:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
