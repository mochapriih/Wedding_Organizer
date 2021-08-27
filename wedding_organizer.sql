-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 05:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding_organizer`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `image`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Katering', 'assets/gallery/F2iJYOIpG4902D0S3iUMJXy3qUqrJAaoe6dhB7El.jpg', 'Tersedia katering dengan berbagai macam masakan pilihanmu', NULL, '2021-08-19 03:02:29', '2021-08-20 03:20:35'),
(2, 'Dekorasi', 'assets/gallery/DQPjinOqAOc29WBliH8pvhb0yamz52VHlfq5tR67.jpg', 'Pilihan dekorasi yang banyak dengan warna sesuai keinginan', NULL, '2021-08-19 03:03:51', '2021-08-20 03:21:22'),
(3, 'Rias dan Busana', 'assets/gallery/IqGYt5LjsjtXN5woxLJ5uTHv7x5OHpgcvp5BqhOz.jpg', 'Pilihan busana yang sangat menarik dan make up professional', NULL, '2021-08-19 03:04:06', '2021-08-20 03:22:21'),
(4, 'Dokumentasi', 'assets/gallery/9WyGb1XrSc37GBC4KjIRLJPAGxuBVVCToaPLgnZm.jpg', 'Dokumentasi mulai dari foto dan video dengan potografer profesional', NULL, '2021-08-19 03:04:28', '2021-08-20 03:26:47'),
(5, 'Hiburan', 'assets/gallery/OYW9nCGnou592HXGAD8HYScV3qmMm6DUexWALIGi.jpg', 'Berbagai macam hiburan mulai dari band dengan pilihan lagu-lagu pop', NULL, '2021-08-19 03:04:39', '2021-08-20 03:23:37'),
(6, 'Venue dan Tenda', 'assets/gallery/7wjX9jZiIpc2U5zbh8KJJ5fB2npX6Z5ZD8fkH4nA.jpg', 'Tersedia venue dan tenda ukuran besar maupun sedang dengan lokasi yang strategis', NULL, '2021-08-19 03:04:55', '2021-08-20 03:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'assets/gallery/z3Ow32gUw0WmvPfEZEo0XCJp2tvimadK5qcYtjdP.jpg', NULL, '2021-08-20 02:57:56', '2021-08-20 03:19:06'),
(3, 'assets/gallery/4ayevhMGwo2uDP3wEdxeUQDlKARItKubNMly6V5D.jpg', NULL, '2021-08-20 02:58:02', '2021-08-20 03:19:19'),
(4, 'assets/gallery/YRyi9aGfrCmurnk0E1bVy4jovVgGI8YxTKQiGDSb.jpg', NULL, '2021-08-20 02:58:12', '2021-08-20 03:19:28'),
(5, 'assets/gallery/sWHBJg4LOyDwE322qpK4TVcTvU5be5TipH7P1DWw.jpg', NULL, '2021-08-20 02:58:20', '2021-08-20 03:19:36'),
(6, 'assets/gallery/ob5HT4PJjVDc9UxwfK8aKvXQJ2W3cS7WWXWhClk7.jpg', NULL, '2021-08-20 02:58:29', '2021-08-20 03:19:46'),
(7, 'assets/gallery/7HIug00PeGZAFxOJ5bI7BOhLGLopwxhysmKUeThZ.jpg', NULL, '2021-08-20 03:31:49', '2021-08-20 03:31:49'),
(8, 'assets/gallery/RIpf4eYXie7TOibyo7HZhoAGSET6oLyDxIiK4Q4J.jpg', NULL, '2021-08-20 03:32:01', '2021-08-20 03:32:01'),
(9, 'assets/gallery/HIo9cEs74uGUSWR9xocoQeQiTnugZxpDUeTGdJSJ.jpg', NULL, '2021-08-20 03:32:08', '2021-08-20 03:32:08'),
(10, 'assets/gallery/eoxRI1vnbjSAndTBWp2Tzl05YZ0iYU7Pr5cnEieD.jpg', NULL, '2021-08-20 03:33:49', '2021-08-20 03:33:49');

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
(4, '2021_07_27_034222_create_wedding_packages_table', 1),
(5, '2021_07_28_022617_create_galleries_table', 1),
(6, '2021_07_28_023547_create_abouts_table', 1),
(8, '2021_07_28_024611_add_roles_field_to_users_table', 1),
(9, '2021_07_28_025114_add_roles_field_to_users_table', 2);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1, 'apri', 'mochapriih@gmail.com', '2021-07-31 20:49:48', '$2y$10$WCumas7VXMAZhjQcv8phWuejZ0KuYmPPKbtwU99F03o4VXPiQQBXq', 'qc9GBxszR0f7Dd6K4GIiMUbMnwCVqMxlDQddy6PrUnTOFIU2VybfHakD7vdh', '2021-07-31 20:33:20', '2021-07-31 20:49:48', 'ADMIN'),
(3, 'rizal', 'muhrizaldii27@gmail.com', '2021-07-31 22:12:16', '$2y$10$Lmem00jBnSMRnKOqXHDMGu3cW7pSgsGC1Xavl.I5msSF7vuh.V71y', NULL, '2021-07-31 22:11:41', '2021-07-31 22:12:16', 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_packages`
--

CREATE TABLE `wedding_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wedding_packages`
--

INSERT INTO `wedding_packages` (`id`, `title`, `slug`, `image`, `description`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(129, 'Paket Akad', 'paket-akad', 'assets/gallery/QiLoeDaann7vNBd31X5ij9eNQZ1Jv0SfymvPm57M.jpg', 'Akad, Dekorasi, Dokumentasi, Konsumsi 100 pax', 10000000, NULL, '2021-08-17 03:11:25', '2021-08-20 03:31:22'),
(130, 'Paket Siraman', 'paket-siraman', 'assets/gallery/ZaMAgG516AnfjRXcvZlNdRzhnAzgxyXUnefNd4fL.jpg', 'Siraman, Dokumentasi, konsumsi 100 pax', 10000000, NULL, '2021-08-17 03:44:19', '2021-08-20 03:27:36'),
(131, 'Paket Resepsi 1', 'paket-resepsi-1', 'assets/gallery/lM27Rl9VnakBxmsdUMNflqBLbOcCYrHm0XIXeqhJ.jpg', 'Akad, Dekorasi, Hiburan, Resepsi, Dokumentasi, konsumsi 100 pax', 20000000, NULL, '2021-08-18 02:43:20', '2021-08-20 03:30:13'),
(132, 'Paket Resepsi 2', 'paket-resepsi-2', 'assets/gallery/Bo4g6PyR59ykGuHdmY65KCVVf1GXTp90Tbqsv4ze.jpg', 'Venue, Akad, Dekorasi, Hiburan, Resepsi, Dokumentasi, konsumsi 200 pax', 30000000, NULL, '2021-08-18 02:43:59', '2021-08-20 03:30:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `wedding_packages`
--
ALTER TABLE `wedding_packages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wedding_packages`
--
ALTER TABLE `wedding_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
