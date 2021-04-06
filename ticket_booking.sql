-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 06, 2021 at 03:12 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_05_174044_create_theaters_table', 1),
(5, '2021_04_05_174134_create_movies_table', 1),
(6, '2021_04_05_174438_create_theater_movies_table', 1),
(7, '2021_04_05_174511_create_theater_times_table', 1),
(8, '2021_04_05_235758_create_ticket_bookings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theater_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `img`, `theater_id`, `start_date`, `end_date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Movie 1', '1617668384.jpg', 1, '2021-04-06', '2021-04-30', NULL, '2021-04-05 18:49:44', '2021-04-05 18:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theaters`
--

DROP TABLE IF EXISTS `theaters`;
CREATE TABLE IF NOT EXISTS `theaters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_seats` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theaters`
--

INSERT INTO `theaters` (`id`, `name`, `no_seats`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'theater 1', 20, NULL, '2021-04-05 18:49:20', '2021-04-05 18:49:20'),
(2, 'theater 3', 20, NULL, '2021-04-05 21:10:59', '2021-04-05 21:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `theater_movies`
--

DROP TABLE IF EXISTS `theater_movies`;
CREATE TABLE IF NOT EXISTS `theater_movies` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `theater_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theater_times`
--

DROP TABLE IF EXISTS `theater_times`;
CREATE TABLE IF NOT EXISTS `theater_times` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `theater_id` int(11) NOT NULL,
  `show_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theater_times`
--

INSERT INTO `theater_times` (`id`, `theater_id`, `show_time`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '12:00 AM', NULL, '2021-04-05 18:49:20', '2021-04-05 18:49:20'),
(2, 1, '12:30 AM', NULL, '2021-04-05 18:49:20', '2021-04-05 18:49:20'),
(3, 2, '01:00 AM', NULL, '2021-04-05 21:10:59', '2021-04-05 21:10:59'),
(4, 2, '01:30 AM', NULL, '2021-04-05 21:10:59', '2021-04-05 21:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_bookings`
--

DROP TABLE IF EXISTS `ticket_bookings`;
CREATE TABLE IF NOT EXISTS `ticket_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_bookings`
--

INSERT INTO `ticket_bookings` (`id`, `name`, `email`, `movie_id`, `time_id`, `booking_date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:04:27', '2021-04-05 19:04:27'),
(2, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:25:51', '2021-04-05 19:25:51'),
(3, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:28:00', '2021-04-05 19:28:00'),
(4, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:33:42', '2021-04-05 19:33:42'),
(5, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:36:58', '2021-04-05 19:36:58'),
(6, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:37:43', '2021-04-05 19:37:43'),
(7, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:37:47', '2021-04-05 19:37:47'),
(8, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:40:43', '2021-04-05 19:40:43'),
(9, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:41:14', '2021-04-05 19:41:14'),
(10, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:41:41', '2021-04-05 19:41:41'),
(11, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:42:24', '2021-04-05 19:42:24'),
(12, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:43:02', '2021-04-05 19:43:02'),
(13, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:43:57', '2021-04-05 19:43:57'),
(14, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:45:39', '2021-04-05 19:45:39'),
(15, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:46:00', '2021-04-05 19:46:00'),
(16, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:46:34', '2021-04-05 19:46:34'),
(17, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:46:49', '2021-04-05 19:46:49'),
(18, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:49:52', '2021-04-05 19:49:52'),
(19, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:51:48', '2021-04-05 19:51:48'),
(20, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:53:55', '2021-04-05 19:53:55'),
(21, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:54:18', '2021-04-05 19:54:18'),
(22, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:56:14', '2021-04-05 19:56:14'),
(23, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 19:59:30', '2021-04-05 19:59:30'),
(24, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 20:01:15', '2021-04-05 20:01:15'),
(25, 'shamna', 'shamnajunaid@gmail.com', 1, 1, '2021-12-12', NULL, '2021-04-05 20:04:35', '2021-04-05 20:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.comk', NULL, '$2y$10$tVAs0RzJd959tNaqZOAj3.KFpTwXopKmkXO9uiP0dV.Et7NwjeUgO', NULL, NULL, NULL),
(2, 'Admin', 'admin@admin.com', NULL, '$2y$10$bk3PqhjN1ukcpTYowQQMIuiVfwaQubL7gcn4/1FrHHu9Q8y5LC5FW', NULL, '2021-04-05 21:13:05', '2021-04-05 21:13:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
