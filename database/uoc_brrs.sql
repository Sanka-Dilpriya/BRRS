-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 05:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uoc/brrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_model_2s`
--

CREATE TABLE `booking_model_2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_broom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_members` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purpose` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Refreshments` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pickup_Date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hour_start_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_start_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `am_pm_start_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hour_end_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_end_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `am_pm_end_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hour_serve_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_serve_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `am_pm_serve_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_model_2s`
--

INSERT INTO `booking_model_2s` (`id`, `created_at`, `updated_at`, `user_name`, `select_broom`, `department`, `no_of_members`, `purpose`, `Refreshments`, `Pickup_Date`, `hour_start_time`, `min_start_time`, `am_pm_start_time`, `hour_end_time`, `min_end_time`, `am_pm_end_time`, `hour_serve_time`, `min_serve_time`, `am_pm_serve_time`) VALUES
(57, '2021-05-01 07:34:28', '2021-05-01 07:34:28', 'Sanka', 'Board Room 01 - (33 Members)', 'NAE', '05', 'general meeting', 'Cake and Tea', '2021-05-01', '1', '00', 'pm', '4', '00', 'pm', '2', '30', 'pm'),
(58, '2021-05-01 07:36:26', '2021-05-01 07:36:26', 'Dilpriya', 'Board Room 02 - (30 Members)', 'AE', '03', 'Board Meeting', 'Cake and Tea', '2021-05-28', '3', '20', 'pm', '4', '00', 'pm', '3', '45', 'pm'),
(59, '2021-05-01 07:39:42', '2021-05-01 07:39:42', 'Dr. Vishwa Perera', 'Board Room 02 - (30 Members)', 'Sinhala', '15', 'general meeting', 'Cutlet and Plane tea', '2021-06-16', '2', '30', 'pm', '4', '00', 'pm', '3', '15', 'pm'),
(60, '2021-05-01 07:46:29', '2021-05-01 07:46:29', 'Dr. Kamal Weerasinghe', 'Senate Hall - (85 Members)', 'NAE', '70', 'Conference', 'Cake, Chinese Rolls and Milk Packet', '2021-06-23', '9', '30', 'am', '1', '30', 'pm', '11', '30', 'am'),
(61, '2021-05-01 23:14:18', '2021-05-01 23:14:18', 'Prof. Surendra Jayalath', 'Auditorium - (350 Members)', 'Information and Communication Technology', '200', 'Lecture - ICT', 'Cake and Tea', '2021-07-21', '9', '00', 'am', '3', '00', 'pm', '10', '30', 'am');

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
(4, '2021_04_29_081825_create_booking_model_2s_table', 2);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_model_2s`
--
ALTER TABLE `booking_model_2s`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_model_2s`
--
ALTER TABLE `booking_model_2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
