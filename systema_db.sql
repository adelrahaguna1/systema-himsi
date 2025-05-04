-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2025 at 04:45 AM
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
-- Database: `systema_db`
--

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
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontaks`
--

INSERT INTO `kontaks` (`id`, `nama`, `email`, `no_hp`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'rendy', 'rendy@gmail.com', '08494944990', 'bisa ga nih?', '2025-05-03 08:52:33', '2025-05-03 08:52:33'),
(2, 'aul', 'aul@gmail.com', NULL, 'halohalo', '2025-05-03 08:58:55', '2025-05-03 08:58:55');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_04_20_081452_add_is_admin_to_users_table', 2),
(6, '2025_04_20_180537_merchandise', 4),
(9, '2025_04_20_182533_create_produk_table', 5);

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
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `name`, `type`, `price`, `image`, `stock`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Lanyard HIMSI', 'Merchandise', 14000.00, 'produk/4gr3eIHOjhlz0gfUaOl37QyZgYa0nPwr94xMN7Uy.jpg', 25, 'Lanyard HIMSI bergaya elegan dengan warna identitas jurusan, logo HIMSI tercetak jelas, dan bahan kuat serta nyaman dipakai.', '2025-04-20 11:59:30', '2025-05-02 03:04:07'),
(2, 'Keychain HIMSI', 'Merchandise', 10000.00, 'produk/0ZdeHxLe1cgBAOzYpKQLsJHhfUsJkopzPwzrQvO8.png', 50, 'Keychain HIMSI stylish dan fungsional, jadi simbol kebanggaan anak Sistem Informasi.', '2025-04-20 11:59:30', '2025-05-02 01:42:47'),
(3, 'Ayam Suwir Pedas', 'Food', 15000.00, 'produk/LRk9xZnfF5rQRPpPxOnUi2VcSQ80ao9z1zA1KjYl.jpg', 30, 'Nikmati kelezatan Ayam Suwir dengan cita rasa autentik yang kaya rempah. Siap santap, higienis, dan cocok untuk semua momen spesial Anda. Praktis dan lezat dalam setiap suapan!', NULL, '2025-05-02 01:43:04'),
(4, 'Ayam Katsu Komplit', 'Food', 15000.00, 'produk/LxZBnswXw9lVnKbgUtvIaNfjSm3OLLxZCtBCyRTv.jpg', 20, 'Crispy di luar, juicy di dalam! Ayam Katsu siap jadi pilihan favorit kamu—dengan balutan tepung renyah dan cita rasa gurih yang menggoda. Cocok untuk makan siang atau bekal praktis!', NULL, '2025-05-02 01:43:33'),
(5, 'Pop Ice Aneka Rasa', 'Drink', 7000.00, 'produk/RX1ivvQtWj3a0MA7CKEFBYqHi22n3m1x1j1HDVj7.jpg', 50, 'Rasakan nikmatnya air minum menyegarkan dan menghilangkan dahaga, cocok saat panas-panas gini!', NULL, '2025-05-02 01:43:48'),
(11, 'Sticker Himsi', 'Merchandise', 5000.00, 'produk/K8qybqEPIy97HGGUkvG3iQdREPwLP72sqVdVxyjZ.png', 20, 'Stiker Himsi dengan tampilan yang kece dan menandakan kamu bergabung ke keluarga HIMSI', '2025-05-02 01:45:21', '2025-05-02 01:45:21');

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
('ha0N19eJCKTpJ4ec0ipNhQV2NC7PSKNCfOmn2Ewu', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaFhOaFJGc3BTYzdJejlKWFExWHhHaVQxNm5udmpOYjZuN0NZelZjUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rb250YWsiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O30=', 1746297931);

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
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'Alvito', 'alvitorafky44@gmail.com', NULL, '$2y$12$Ryyo59Ui92t4wBDkLDf/J..7rUTxc2pPglbgdWcyQqQqGcMN2ebCO', 'UxHtWvMa4AZxWD4ubz4Rj9ajkr8R6jRPKGTlFMSxHdzpicSV3cX2V4ICoqx8', 0, '2025-04-17 07:24:29', '2025-04-20 01:00:37'),
(3, 'Fadel JMK Super', 'fadeljomok@gmail.com', NULL, '$2y$12$u11cb20uc.MPMq/rPiriI.VhX0L7GWvzzSzhrv7T0srAvWXR4TsH6', NULL, 0, '2025-04-17 08:23:13', '2025-04-17 08:24:48'),
(4, 'Admin', 'admin@gmail.com', NULL, '$2y$12$8M8V5i3HMHzrvRCfOgxPjOQzGWNxVP.21K6Clj8b2EAuhZLgy4SCO', NULL, 1, '2025-04-20 01:12:35', '2025-04-20 01:12:35'),
(5, 'Fadel Jomok', 'fadeljomokerto@gmail.com', NULL, '$2y$12$NzftOA.bDvnI.7fly5bGKeP4TDlF4.Bh4lusvMRopj3s82qMIns0.', NULL, 0, '2025-04-20 16:42:46', '2025-04-20 16:42:46'),
(6, 'Fadel Adzandika', 'fadel123@gmail.com', NULL, '$2y$12$jtEsMSYsx/n5hTQQzhzF.Ol45DtOA7oCaplUXt79pIFQnVhVVA9hi', NULL, 0, '2025-04-30 02:51:03', '2025-04-30 02:51:03'),
(7, 'Rendy Bau', 'rendy@gmail.com', NULL, '$2y$12$BWshwK/V1HIuOmu/O.TtzOLNUSv7JxhWgx7ZvHX/SxXowfoXaWj4i', NULL, 0, '2025-05-02 00:55:42', '2025-05-02 00:55:42');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
