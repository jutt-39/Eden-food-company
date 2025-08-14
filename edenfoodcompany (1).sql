-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2025 at 08:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edenfoodcompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) NOT NULL,
  `accountName` varchar(255) NOT NULL,
  `accountTitle` varchar(255) NOT NULL,
  `accountNumber` varchar(255) NOT NULL,
  `qrCode` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accountsdepartments`
--

CREATE TABLE `accountsdepartments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `passport_number` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applybiometrics`
--

CREATE TABLE `applybiometrics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `passport_number` varchar(20) NOT NULL,
  `whatsapp_number` varchar(25) NOT NULL,
  `livingcountry` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `feestatus`
--

CREATE TABLE `feestatus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `letter` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passport_number` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hicccards`
--

CREATE TABLE `hicccards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `letter` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passport_number` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobapplications`
--

CREATE TABLE `jobapplications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `whatsapp_number` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passport_number` varchar(20) NOT NULL,
  `passport_image` varchar(255) NOT NULL,
  `jobname` varchar(25) NOT NULL,
  `livingcountry` varchar(25) NOT NULL,
  `jobcountry` varchar(25) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lmiaapprovals`
--

CREATE TABLE `lmiaapprovals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `letter` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passport_number` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(14, '0001_01_01_000000_create_users_table', 1),
(15, '0001_01_01_000001_create_cache_table', 1),
(16, '0001_01_01_000002_create_jobs_table', 1),
(17, '2025_02_17_065621_create_feeStatus_table', 1),
(18, '2025_02_17_065622_create_applyBiometrics_table', 1),
(19, '2025_02_17_065623_create_accountsDepartments_table', 1),
(20, '2025_02_17_065623_create_lmiaApprovals_table', 1),
(21, '2025_02_17_065623_create_offerLetters_table', 1),
(22, '2025_02_17_065624_create_visaStatus_table', 1),
(23, '2025_02_17_065624_create_workPermits_table', 1),
(24, '2025_02_17_065625_create_hiccCards_table', 1),
(25, '2025_02_17_065625_create_ticketStatus_table', 1),
(26, '2025_02_17_184804_create_jobapplications_table', 1),
(27, '2025_03_04_062209_create_accounts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `offerletters`
--

CREATE TABLE `offerletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `letter` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passport_number` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ACgvk3oLmCWI1UajnOPtRGz9Vo0qXa97yQENkqrw', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiY1U3aW5DQkNkajVnWEVGc1pIZ0VLOWxKeGR3WWpReTJ5ZlRJN2JvNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hY2NvdW50LWRlcGFydG1lbnQtdGFibGUiO31zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjM2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvQWRtaW4vcmVnaXN0ZXIiO31zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjk7fQ==', 1741111957);

-- --------------------------------------------------------

--
-- Table structure for table `ticketstatus`
--

CREATE TABLE `ticketstatus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `letter` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passport_number` varchar(20) NOT NULL,
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
(8, 'info.edenfoodcompany@gmai.lcom', 'info.edenfoodcompany@gmail.com', NULL, '$2y$12$S0qft1TkAbpswDsTqUNQ0OYimrXoHIniokxXntCLEBtgOPeQmzb1S', NULL, '2025-02-21 00:33:23', '2025-02-21 00:33:23'),
(9, 'edenfoodcompany@gmail.com', 'edenfoodcompany@gmail.com', NULL, '$2y$12$ad34sJqXua57zypJxM.3ze9Sl24HuUfPRgtJ94KMuPzxyu9FztIim', NULL, '2025-02-21 00:35:42', '2025-02-21 00:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `visastatus`
--

CREATE TABLE `visastatus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `letter` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passport_number` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workpermits`
--

CREATE TABLE `workpermits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `letter` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passport_number` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountsdepartments`
--
ALTER TABLE `accountsdepartments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accountsdepartments_passport_number_unique` (`passport_number`);

--
-- Indexes for table `applybiometrics`
--
ALTER TABLE `applybiometrics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applybiometrics_passport_number_unique` (`passport_number`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feestatus`
--
ALTER TABLE `feestatus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `feestatus_email_unique` (`email`),
  ADD UNIQUE KEY `feestatus_passport_number_unique` (`passport_number`);

--
-- Indexes for table `hicccards`
--
ALTER TABLE `hicccards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hicccards_email_unique` (`email`),
  ADD UNIQUE KEY `hicccards_passport_number_unique` (`passport_number`);

--
-- Indexes for table `jobapplications`
--
ALTER TABLE `jobapplications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jobapplications_email_unique` (`email`),
  ADD UNIQUE KEY `jobapplications_passport_number_unique` (`passport_number`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lmiaapprovals`
--
ALTER TABLE `lmiaapprovals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lmiaapprovals_email_unique` (`email`),
  ADD UNIQUE KEY `lmiaapprovals_passport_number_unique` (`passport_number`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offerletters`
--
ALTER TABLE `offerletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `offerletters_email_unique` (`email`),
  ADD UNIQUE KEY `offerletters_passport_number_unique` (`passport_number`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `ticketstatus`
--
ALTER TABLE `ticketstatus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ticketstatus_email_unique` (`email`),
  ADD UNIQUE KEY `ticketstatus_passport_number_unique` (`passport_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visastatus`
--
ALTER TABLE `visastatus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `visastatus_email_unique` (`email`),
  ADD UNIQUE KEY `visastatus_passport_number_unique` (`passport_number`);

--
-- Indexes for table `workpermits`
--
ALTER TABLE `workpermits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `workpermits_email_unique` (`email`),
  ADD UNIQUE KEY `workpermits_passport_number_unique` (`passport_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `accountsdepartments`
--
ALTER TABLE `accountsdepartments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applybiometrics`
--
ALTER TABLE `applybiometrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feestatus`
--
ALTER TABLE `feestatus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hicccards`
--
ALTER TABLE `hicccards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobapplications`
--
ALTER TABLE `jobapplications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lmiaapprovals`
--
ALTER TABLE `lmiaapprovals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `offerletters`
--
ALTER TABLE `offerletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticketstatus`
--
ALTER TABLE `ticketstatus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `visastatus`
--
ALTER TABLE `visastatus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workpermits`
--
ALTER TABLE `workpermits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
