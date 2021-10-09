-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 11:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizscout`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_campaigns`
--

CREATE TABLE `email_campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_campaigns`
--

INSERT INTO `email_campaigns` (`id`, `name`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Hardware Email Template', 'Promotion', 'test email 123', '2020-03-06 07:00:42', '2020-03-06 07:01:42'),
(2, 'IT Email Template', 'Promotion', 'hello guys', '2020-03-06 19:40:58', '2020-03-06 19:41:13'),
(3, 'Coffee email template', 'Promotion', 'test email', '2020-03-06 20:07:37', '2020-03-06 20:07:54'),
(4, 'Frogkaffee', 'WCM', 'sarap', '2020-03-07 01:23:44', '2020-03-07 01:23:56'),
(5, 'Soap', 'Promotion', 'Promotion 123', '2020-03-08 21:59:26', '2020-03-08 21:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_17_130055_create_places_table', 1),
(5, '2020_03_05_160630_create_email_campaigns_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `address`, `contact`, `photo`, `status`, `type`, `keyword`, `created_at`, `updated_at`) VALUES
(1, 'Farron Cafe', 'Gaisano Building, Calinan, Davao City', 'ChIJnZIjT0IW-TIRdd56YFXzY_U', 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=250&photoreference=&key=AIzaSyBK2CqoZPWfpLOHcVrjFWb6cOxPqK6x-Mo', 1, NULL, NULL, '2020-03-06 06:58:44', '2020-03-06 06:58:59'),
(2, 'Hazel Coffee Shop', 'BMP Building, Bajada, Davao City', 'ChIJecZqvEIW-TIRQcTbjioXnhc', 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=250&photoreference=&key=AIzaSyBK2CqoZPWfpLOHcVrjFWb6cOxPqK6x-Mo', 1, NULL, NULL, '2020-03-06 10:43:09', '2020-03-06 19:43:57'),
(3, 'The Coffee Spot & Lounge', 'Riverside, Calinan, Davao City', 'ChIJcWfjf4gW-TIRfWYtsUl0ZOk', 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=250&photoreference=CmRaAAAAb3pz5ns-1NzqrcDxMXoj_OO8npL8sGx_wSHbDzoqQO5sNGzFImEswSUUcY1ba9uV1qH6w6jEKR-cwRfaZ751z8PRWr3OICW2KBbiXHWZM0KZ1zXeiGYUfVQViOpfOT38EhB3XQJb7sEk4m6L8ZTJKrl8GhR3cQik0CQXP-UGeU1Pgl_SXwT9cQ&key=AIzaSyBK2CqoZPWfpLOHcVrjFWb6cOxPqK6x-Mo', 1, NULL, NULL, '2020-03-06 20:05:58', '2020-03-06 20:06:25'),
(4, 'CVR Hardware & Construction Supply', 'E Rodriguez, Calinan District, Davao City', 'ChIJecZqvEIW-TIRqH4_oyK9_E0', 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=250&photoreference=&key=AIzaSyBK2CqoZPWfpLOHcVrjFWb6cOxPqK6x-Mo', NULL, NULL, NULL, '2020-03-09 01:05:20', '2020-03-09 01:05:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test123', 'test123@gmail.com', NULL, '$2y$10$c83x/7AFF3drm8qBEP4XUeCHxkzI8o8vYcWTk3t1BhCrySllq8ELO', NULL, '2020-03-06 06:58:30', '2020-03-06 06:58:30'),
(2, 'test1234', 'test1234@gmail.com', NULL, '$2y$10$v2AOKWs/1ZirK2mFphfHyeIcnmyGz4X0wuMoZBfoPXbL/dHydwSRi', NULL, '2020-03-06 19:57:50', '2020-03-06 19:57:50'),
(3, 'biz', 'biz@gmail.com', NULL, '$2y$10$9YlVfcarZD5JfddPeekofeBVjLza2Nt0dEuH97wKN4pPyhFTHEIzm', NULL, '2020-03-08 21:59:11', '2020-03-08 21:59:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_campaigns`
--
ALTER TABLE `email_campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `email_campaigns`
--
ALTER TABLE `email_campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
