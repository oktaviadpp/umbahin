-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 09:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umbahin`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `bab`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'informasiqq', 'umbahin', 'sebuah tempat laundry yang hasil cucinya bersih banget, wangi bgt', NULL, '2021-11-24 05:36:41'),
(3, 'visi', 'Visi', 'foya', '2021-11-27 05:24:34', '2021-11-27 05:24:34'),
(4, 'Misi', 'Misi', '<ul>\r\n	<li>foya</li>\r\n	<li>foya</li>\r\n	<li>hura hura</li>\r\n</ul>', '2021-11-27 05:26:35', '2021-11-27 05:26:35'),
(5, 'Alasan', 'Mengapa Umbahin ?', '<p>haha</p>', '2021-11-27 05:37:11', '2021-11-27 05:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `laundrykats`
--

CREATE TABLE `laundrykats` (
  `id` bigint(7) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `durasi` int(3) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `cuplikan` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laundrykats`
--

INSERT INTO `laundrykats` (`id`, `nama_kategori`, `harga`, `durasi`, `gambar`, `cuplikan`, `deskripsi`, `updated_at`, `created_at`) VALUES
(11, 'kiloan', 4000, 5, '1638022213-admin.jpg', 'eee', '<ul>\r\n	<li>ww</li>\r\n	<li>jasag</li>\r\n	<li>AIHSOHS</li>\r\n	<li>ojsi</li>\r\n</ul>', '2021-11-27 07:10:13', '2021-11-25 05:38:16'),
(12, 'express', 5000, 1, '1637937897-city-wallpaper-20072516253821.jpg', 'laundry cepet banget', '<p>qqqq</p>', '2021-11-26 07:44:57', '2021-11-25 06:37:45'),
(13, 'boneka', 10000, 4, '1637937966-efd541fb-5082-4b3b-b25d-80efc668b25b.jpg', 'laundry boneka mulus', '<p>qqq</p>', '2021-11-26 07:46:06', '2021-11-26 14:46:06'),
(14, 'selimut & seprei', 7000, 4, '1637938051-hello.jpeg', 'laundry selimut dan seprei wangi bgt', '<p>qqq</p>', '2021-11-26 07:47:31', '2021-11-26 14:47:31');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2021_11_24_012031_create_about_us_models_table', 2),
(10, '2021_11_24_090326_create_pelanggan_models_table', 3),
(11, '2021_11_24_161204_create_pickup_models_table', 4),
(12, '2021_11_25_050707_create_transaksi_models_table', 5),
(13, '2021_11_27_020515_create_rekap_models_table', 6),
(14, '2021_11_27_132448_create_testimoni_models_table', 7);

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
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` int(11) NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `username`, `nama`, `email`, `no_hp`, `alamat`, `jk`, `password`, `created_at`, `updated_at`) VALUES
(4, 'oktavia', 'Oktavia Dwi Putri P', 'oktavia@gmail.com', 12, 'mana', 'perempuan', '$2y$10$pc.Wp6bs2oCT/MY/CuKlC.lh4CTN.utiS5w5hfAKaXYxihcvKgRPW', '2021-11-24 09:07:03', '2021-11-24 09:07:03'),
(7, 'oktaviadpp', 'Oktavia', 'oktaviaa@gmail.com', 321, 'png', 'perempuan', '$2y$10$Dki9iukpvfWigXyaLhfFkeoNfot6r.ItlmB.8kFg9JUDRPBmjmdCK', '2021-11-26 18:47:46', '2021-11-26 18:47:46'),
(8, 'troyesivan', 'Troye Sivan', 'troyesivan@gmail.com', 234, 'unknown', 'laki-laki', '$2y$10$lHyD4JQQmRDS6jbWA4CXMeJU1HVbwfeVrz.WrWyHNkcI64I3hK41e', '2021-11-26 18:49:14', '2021-11-26 18:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pickups`
--

CREATE TABLE `pickups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pickups`
--

INSERT INTO `pickups` (`id`, `nama`, `harga`, `created_at`, `updated_at`) VALUES
(2, 'grab', 4000, '2021-11-24 22:00:37', '2021-11-24 22:00:37'),
(3, 'no', 0, '2021-11-25 02:10:15', '2021-11-25 02:32:02');

-- --------------------------------------------------------

--
-- Table structure for table `rekaps`
--

CREATE TABLE `rekaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemasukan` int(11) NOT NULL,
  `pengeluaran` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekaps`
--

INSERT INTO `rekaps` (`id`, `bulan`, `pemasukan`, `pengeluaran`, `total`, `created_at`, `updated_at`) VALUES
(1, 'November', 1, 1, 116000, '2021-11-26 21:05:10', '2021-11-26 21:05:10'),
(2, 'Oktober', 1, 1, 116000, '2021-11-26 21:51:11', '2021-11-26 21:51:11'),
(3, 'Oktober', 1, 1, 14000, '2021-11-26 21:51:42', '2021-11-26 21:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `id_kategori`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 11, '1638020929-hi.png', '2021-11-27 06:48:49', '2021-11-27 06:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `id_pickup` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` varchar(7) CHARACTER SET utf8mb4 DEFAULT NULL,
  `jarak` double NOT NULL,
  `berat` double NOT NULL,
  `total` int(11) DEFAULT NULL,
  `uang_dp` int(11) NOT NULL,
  `sisa` int(11) DEFAULT NULL,
  `tgl_msk` date NOT NULL DEFAULT current_timestamp(),
  `tgl_selesai` date DEFAULT NULL,
  `tgl_pelunasan` timestamp NULL DEFAULT NULL,
  `status` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `id_pelanggan`, `id_kategori`, `id_pickup`, `kode_transaksi`, `jarak`, `berat`, `total`, `uang_dp`, `sisa`, `tgl_msk`, `tgl_selesai`, `tgl_pelunasan`, `status`, `created_at`, `updated_at`) VALUES
(3, 4, 11, 2, 'TRNcffe', 2, 2, 18000, 2000, 16000, '2021-11-27', NULL, '2021-10-31 17:00:00', 'selesai', '2021-11-26 18:46:00', '2021-11-26 18:46:00'),
(4, 7, 13, 3, 'TRN5316', 0, 2, 8000, 5000, 3000, '2021-11-27', NULL, '2021-10-31 17:00:00', 'selesai', '2021-11-26 18:50:04', '2021-11-26 18:50:04'),
(5, 8, 12, 3, 'TRN4722', 0, 1, 10000, 4000, 6000, '2021-11-27', NULL, '2021-11-01 17:00:00', 'selesai', '2021-11-26 18:51:00', '2021-11-26 18:51:00'),
(6, 4, 14, 2, 'TRN29ba', 4, 3, 15000, 10000, 5000, '2021-11-27', NULL, '2021-11-02 17:00:00', 'selesai', '2021-11-26 18:51:26', '2021-11-26 18:51:26'),
(7, 7, 14, 3, 'TRNcba1', 0, 2, 14000, 0, 14000, '2021-11-27', NULL, '2021-11-05 17:00:00', 'selesai', '2021-11-26 18:51:59', '2021-11-26 18:51:59'),
(8, 8, 11, 2, 'TRN9e32', 2, 5, 35000, 10000, 25000, '2021-11-27', NULL, '2021-11-06 17:00:00', 'selesai', '2021-11-26 18:52:33', '2021-11-26 18:52:33'),
(9, 4, 11, 3, 'TRN5f70', 0, 2, 8000, 0, 8000, '2021-11-27', NULL, '2021-11-03 17:00:00', 'selesai', '2021-11-26 18:53:00', '2021-11-26 18:53:00'),
(10, 8, 14, 3, 'TRNef3c', 0, 2, 8000, 1000, 7000, '2021-11-27', NULL, '2021-11-04 17:00:00', 'selesai', '2021-11-26 18:53:25', '2021-11-26 18:53:25'),
(11, 4, 11, 3, 'TRNdbfd', 0, 2, 14000, 0, 14000, '2021-11-27', NULL, '2021-10-30 17:00:00', 'selesai', '2021-11-26 18:54:41', '2021-11-26 18:54:41');

--
-- Triggers `transaksis`
--
DELIMITER $$
CREATE TRIGGER `randKode_transaksi` BEFORE INSERT ON `transaksis` FOR EACH ROW BEGIN 
    declare ready int default 0; 
    declare randomKode text; 
    while not ready do 
      set randomKode := concat('TRN', LEFT(MD5(RAND()), 7)); 

      if NOT exists (select * from transaksis where kode_transaksi = randomKode) then 
        set new.kode_transaksi = randomKode;
        set ready := 1;
      end if; 

    end while; 

  END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `laundrykats`
--
ALTER TABLE `laundrykats`
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
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pelanggans_email_unique` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pickups`
--
ALTER TABLE `pickups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekaps`
--
ALTER TABLE `rekaps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laundrykats`
--
ALTER TABLE `laundrykats`
  MODIFY `id` bigint(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pickups`
--
ALTER TABLE `pickups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rekaps`
--
ALTER TABLE `rekaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
