-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 08:50 AM
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
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `beban`
--

CREATE TABLE `beban` (
  `id_beban` int(4) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `ket` text NOT NULL,
  `jum` int(9) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_trans`
--

CREATE TABLE `detail_trans` (
  `id` int(4) NOT NULL,
  `kode_trans` int(4) NOT NULL,
  `id_item` int(4) NOT NULL,
  `qty` int(3) NOT NULL,
  `harga_tot` int(9) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_trans`
--

INSERT INTO `detail_trans` (`id`, `kode_trans`, `id_item`, `qty`, `harga_tot`, `updated_at`, `created_at`) VALUES
(19, 1, 5, 1, 5000, '2021-06-07 07:39:23', '2021-06-07 07:39:23'),
(20, 1, 6, 1, 2500, '2021-06-07 07:39:23', '2021-06-07 07:39:23'),
(21, 1, 7, 1, 6000, '2021-06-07 07:39:23', '2021-06-07 07:39:23'),
(22, 1, 9, 1, 12000, '2021-06-07 07:39:23', '2021-06-07 07:39:23'),
(23, 1, 8, 1, 11000, '2021-06-07 07:39:23', '2021-06-07 07:39:23'),
(24, 2, 9, 5, 60000, '2021-06-07 07:39:49', '2021-06-07 07:39:49'),
(25, 2, 6, 3, 7500, '2021-06-07 07:39:49', '2021-06-07 07:39:49'),
(26, 2, 7, 2, 12000, '2021-06-07 07:39:49', '2021-06-07 07:39:49'),
(27, 2, 5, 1, 5000, '2021-06-07 07:39:49', '2021-06-07 07:39:49'),
(28, 2, 5, 1, 5000, '2021-06-07 07:39:49', '2021-06-07 07:39:49'),
(29, 2, 8, 5, 55000, '2021-06-07 07:39:49', '2021-06-07 07:39:49'),
(30, 3, 5, 10, 50000, '2021-06-07 07:40:05', '2021-06-07 07:40:05'),
(31, 3, 9, 2, 24000, '2021-06-07 07:40:05', '2021-06-07 07:40:05'),
(32, 3, 6, 1, 2500, '2021-06-07 07:40:05', '2021-06-07 07:40:05'),
(33, 3, 7, 1, 6000, '2021-06-07 07:40:05', '2021-06-07 07:40:05'),
(34, 4, 7, 10, 60000, '2021-06-07 07:40:24', '2021-06-07 07:40:24'),
(35, 4, 9, 10, 120000, '2021-06-07 07:40:24', '2021-06-07 07:40:24'),
(36, 4, 5, 12, 60000, '2021-06-07 07:40:24', '2021-06-07 07:40:24'),
(37, 5, 9, 30, 360000, '2021-06-07 07:40:39', '2021-06-07 07:40:39'),
(38, 5, 5, 60, 300000, '2021-06-07 07:40:39', '2021-06-07 07:40:39');

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
-- Table structure for table `jurnal-posting`
--

CREATE TABLE `jurnal-posting` (
  `id` int(4) NOT NULL,
  `id_beban` int(4) DEFAULT NULL,
  `id_trans` int(4) DEFAULT NULL,
  `tgl` date NOT NULL,
  `ket` text DEFAULT NULL,
  `ref` varchar(10) DEFAULT NULL,
  `debit` int(9) DEFAULT 0,
  `kredit` int(9) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_item` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(6) NOT NULL,
  `jenis` int(1) NOT NULL,
  `des` text NOT NULL,
  `img` varchar(60) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_item`, `nama`, `harga`, `jenis`, `des`, `img`, `updated_at`, `created_at`) VALUES
(5, 'perkedel', 5000, 0, 'perkedel enak', 'perkedelmenu_1622993944.jpg', '2021-06-06 08:39:04', '2021-06-06 08:39:04'),
(6, 'Es Teh', 2500, 1, 'Es teh Segar', 'Es Tehmenu_1622994960.jpg', '2021-06-06 08:56:00', '2021-06-06 08:56:00'),
(7, 'Es cendol', 6000, 1, 'cendol nikmat', 'Es cendolmenu_1622995559.jpg', '2021-06-06 09:05:59', '2021-06-06 09:05:59'),
(8, 'es krim coklat', 11000, 2, 'es krim', 'es krim coklatmenu_1622995633.jpg', '2021-06-06 09:07:13', '2021-06-06 09:07:13'),
(9, 'Soto', 12000, 0, 'soto', 'Sotomenu_1622995655.jpg', '2021-06-06 09:07:35', '2021-06-06 09:07:35');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(4) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `no_meja` int(2) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `id_user`, `no_meja`, `status`, `created_at`) VALUES
(1, 1, 1, 1, '2021-06-07'),
(2, 1, 5, 1, '2021-06-07'),
(3, 1, 8, 1, '2021-06-07'),
(4, 1, 9, 1, '2021-06-07'),
(5, 1, 1, 1, '2021-06-07');

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
  `role` int(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'wow', 'wow@mail.com', NULL, '$2y$10$F25gQGTTXxuLUmeQfP6Hg.0yY9l23w/lFViMMqHHt3pqwo6pCaYeu', 0, NULL, '2021-06-01 09:22:56', '2021-06-01 09:22:56'),
(3, 'admin', 'admin@mail.com', NULL, '$2y$10$IO2G49FXEZW2aufXMuNtzuh3ev85zRuSTPk9e76Puvp8gxDBOAjNy', 1, NULL, '2021-06-05 08:34:56', '2021-06-05 08:34:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beban`
--
ALTER TABLE `beban`
  ADD PRIMARY KEY (`id_beban`),
  ADD KEY `FK_id_user_beban` (`id_user`);

--
-- Indexes for table `detail_trans`
--
ALTER TABLE `detail_trans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_item` (`id_item`),
  ADD KEY `FK_id_trans` (`kode_trans`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jurnal-posting`
--
ALTER TABLE `jurnal-posting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_beban` (`id_beban`),
  ADD KEY `FK_id_transJ` (`id_trans`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_item`);

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
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `FK_id_user` (`id_user`);

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
-- AUTO_INCREMENT for table `beban`
--
ALTER TABLE `beban`
  MODIFY `id_beban` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_trans`
--
ALTER TABLE `detail_trans`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurnal-posting`
--
ALTER TABLE `jurnal-posting`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_item` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trans` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beban`
--
ALTER TABLE `beban`
  ADD CONSTRAINT `FK_id_user_beban` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_trans`
--
ALTER TABLE `detail_trans`
  ADD CONSTRAINT `FK_id_item` FOREIGN KEY (`id_item`) REFERENCES `menu` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_id_trans` FOREIGN KEY (`kode_trans`) REFERENCES `transaksi` (`id_trans`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jurnal-posting`
--
ALTER TABLE `jurnal-posting`
  ADD CONSTRAINT `FK_id_beban` FOREIGN KEY (`id_beban`) REFERENCES `beban` (`id_beban`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_id_transJ` FOREIGN KEY (`id_trans`) REFERENCES `transaksi` (`id_trans`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
