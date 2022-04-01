-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 03:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loyaty_solution`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizens`
--

CREATE TABLE `citizens` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `ward_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lga_id` varchar(255) DEFAULT NULL,
  `state_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citizens`
--

INSERT INTO `citizens` (`id`, `name`, `gender`, `address`, `phone`, `ward_id`, `created_at`, `updated_at`, `lga_id`, `state_id`) VALUES
(1, 'Bola Tinubu', 'Female', 'His House', 7088445522, 2, '2022-04-01 11:09:53', '2022-04-01 11:09:53', '1', '4'),
(2, 'Vincent Kato', 'Male', 'Abjua, North Central', 8055226699, 2, '2022-04-01 11:11:18', '2022-04-01 11:11:18', '4', '5'),
(3, 'Cecelia Chuwkma', 'Female', 'Kano', 8077552211, 4, '2022-04-01 11:12:09', '2022-04-01 11:12:09', '2', '5'),
(4, 'John Doe', 'Male', 'Playlearn, Abeokuta', 8054759632, 3, '2022-04-01 11:18:02', '2022-04-01 11:18:02', '3', '2'),
(5, 'Bola Adejobi', 'Male', 'Oko Town, Anambra', 8099547852, 1, '2022-04-01 11:19:28', '2022-04-01 11:19:28', '5', '1'),
(6, 'Yinka Razaq', 'Male', 'Illorin', 9124563285, 2, '2022-04-01 11:20:59', '2022-04-01 11:20:59', '4', '6');

-- --------------------------------------------------------

--
-- Table structure for table `lgas`
--

CREATE TABLE `lgas` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lgas`
--

INSERT INTO `lgas` (`id`, `name`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'Aba North', 1, '2022-04-01 10:53:40', '2022-04-01 10:53:40'),
(2, 'Aba South', 2, '2022-04-01 10:53:58', '2022-04-01 10:53:58'),
(3, 'Arochukwu', 3, '2022-04-01 10:54:26', '2022-04-01 10:54:26'),
(4, 'Bende', 4, '2022-04-01 10:54:44', '2022-04-01 10:54:44'),
(5, 'Ikwuano', 5, '2022-04-01 10:55:02', '2022-04-01 10:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'Abia', '2022-04-01 10:57:18', '2022-04-01 10:57:18'),
(2, 'Adamawa', '2022-04-01 10:57:31', '2022-04-01 10:57:31'),
(3, 'Akwa Ibom', '2022-04-01 10:57:43', '2022-04-01 10:57:43'),
(4, 'Anambra', '2022-04-01 10:57:55', '2022-04-01 10:57:55'),
(5, 'Bauchi', '2022-04-01 10:58:08', '2022-04-01 10:58:08'),
(6, 'Bayelsa', '2022-04-01 11:19:58', '2022-04-01 11:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$CMBni6UMqwhXhmDxTaysGOR6qQQcSb7AbT6MLYVFFCPXPjEAn/CBC', '2022-03-31 21:47:45', '2022-03-31 21:47:45'),
(2, 'Admin2', 'admin@admin1.com', '$2y$10$M4FvK5btr2nQrM7Bwn3vCe83itE3B3S0SKoDq16mKHDNsU9XWkAWK', '2022-04-01 00:08:31', '2022-04-01 00:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lga_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `name`, `lga_id`, `created_at`, `updated_at`) VALUES
(3, 'Ward 1', 1, '2022-04-01 10:51:52', '2022-04-01 10:51:52'),
(4, 'Ward 2', 2, '2022-04-01 10:52:01', '2022-04-01 10:52:01'),
(5, 'Ward 3', 3, '2022-04-01 10:52:12', '2022-04-01 10:52:12'),
(6, 'Ward 4', 4, '2022-04-01 10:52:23', '2022-04-01 10:52:23'),
(7, 'Ward 5', 5, '2022-04-01 10:52:33', '2022-04-01 10:52:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citizens`
--
ALTER TABLE `citizens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lgas`
--
ALTER TABLE `lgas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `state_id` (`state_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lga_id` (`lga_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citizens`
--
ALTER TABLE `citizens`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lgas`
--
ALTER TABLE `lgas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
