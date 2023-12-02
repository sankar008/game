-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 02, 2023 at 09:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jodinumbers`
--

CREATE TABLE `jodinumbers` (
  `id` int(11) NOT NULL,
  `jodi_id` int(11) NOT NULL,
  `result` varchar(200) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jodinumbers`
--

INSERT INTO `jodinumbers` (`id`, `jodi_id`, `result`, `start_time`, `end_time`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, '928-9', '2023-12-02 13:00:00', '2023-12-02 15:30:00', '2023-12-02', '2023-12-02 23:52:20', '2023-12-02 13:02:59'),
(2, 1, '345-3', '2023-12-03 20:30:00', '2023-12-03 23:00:00', '2023-12-03', '2023-12-03 00:06:06', '2023-12-02 18:36:06'),
(4, 1, '930-7', '2023-12-03 14:00:00', '2023-12-03 18:30:00', '2023-11-15', '2023-12-03 00:35:58', '2023-12-02 19:07:18'),
(5, 2, '930-7', '2023-12-03 14:00:00', '2023-12-03 18:30:00', '2023-12-03', '2023-12-03 01:14:46', '2023-12-02 19:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `jodis`
--

CREATE TABLE `jodis` (
  `id` int(11) NOT NULL,
  `name` varchar(230) NOT NULL,
  `slug_name` text NOT NULL,
  `result` varchar(250) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `after_time` int(11) DEFAULT NULL,
  `before_time` int(11) DEFAULT NULL,
  `is_monday` varchar(10) NOT NULL DEFAULT 'No',
  `is_tuesday` varchar(10) NOT NULL DEFAULT 'No',
  `is_wednesday` varchar(10) NOT NULL DEFAULT 'No',
  `is_thusday` varchar(10) NOT NULL DEFAULT 'No',
  `is_friday` varchar(10) NOT NULL DEFAULT 'No',
  `is_saturday` varchar(10) NOT NULL DEFAULT 'No',
  `is_sunday` varchar(10) NOT NULL DEFAULT 'NO',
  `background_color` varchar(250) NOT NULL,
  `start_time_color` varchar(250) NOT NULL,
  `end_time_color` varchar(250) NOT NULL,
  `name_color` varchar(250) NOT NULL,
  `result_color` varchar(250) NOT NULL,
  `details` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jodis`
--

INSERT INTO `jodis` (`id`, `name`, `slug_name`, `result`, `start_time`, `end_time`, `after_time`, `before_time`, `is_monday`, `is_tuesday`, `is_wednesday`, `is_thusday`, `is_friday`, `is_saturday`, `is_sunday`, `background_color`, `start_time_color`, `end_time_color`, `name_color`, `result_color`, `details`, `created_at`, `updated_at`) VALUES
(1, 'New Market 1', 'new-market-1', '345-3', '2023-12-03 20:30:00', '2023-12-03 23:00:00', 0, 0, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', 'Test', '2023-12-02 23:52:20', '2023-12-02 18:36:06'),
(2, 'New Market 2', 'new-market-2', '930-7', '2023-12-03 14:00:00', '2023-12-03 18:30:00', 0, 0, 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', 'Test', '2023-12-03 00:35:58', '2023-12-02 19:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `marketserials`
--

CREATE TABLE `marketserials` (
  `id` int(11) NOT NULL,
  `market_id` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marketserials`
--

INSERT INTO `marketserials` (`id`, `market_id`, `created_at`, `updated_at`) VALUES
(1, '1', '2023-11-30 17:27:22', '2023-12-02 12:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sankar Bera', 'admin@gmail.com', NULL, '$2y$12$zLYvR7vk.C.eHGQTuUAQsOvvJ9.MoiHdcdskAmk2iwERb73160Qsu', NULL, '2023-11-23 12:00:16', '2023-11-23 12:00:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jodinumbers`
--
ALTER TABLE `jodinumbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jodis`
--
ALTER TABLE `jodis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug_name` (`slug_name`(768)) USING BTREE;

--
-- Indexes for table `marketserials`
--
ALTER TABLE `marketserials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jodinumbers`
--
ALTER TABLE `jodinumbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jodis`
--
ALTER TABLE `jodis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marketserials`
--
ALTER TABLE `marketserials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
