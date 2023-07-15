-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 05:10 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_efashion`
--

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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Pakaian Wanita', '2023-07-14 08:49:28', '2023-07-14 08:49:28'),
(2, 'Pakaian Pria', '2023-07-14 08:49:28', '2023-07-14 08:49:28'),
(3, 'Aksesoris', '2023-07-14 08:49:28', '2023-07-14 08:49:28'),
(4, 'Sepatu', '2023-07-14 08:49:28', '2023-07-14 08:49:28'),
(5, 'Tas', '2023-07-14 08:49:28', '2023-07-14 08:49:28');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_27_023637_create_kategori_table', 1),
(6, '2023_06_27_023646_create_produk_table', 1),
(7, '2023_06_27_023703_create_vendor_table', 1),
(8, '2023_06_27_023852_create_stokmasuk_table', 1),
(9, '2023_06_27_023913_create_pesanan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produk_id` int(10) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `user_id`, `alamat`, `telepon`, `produk_id`, `total`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '2023-07-14', 1, 'Jl. Sudirman No. 123, Jakarta', '0812345678', 1, 200000, 'Pesanan pertama', '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(2, '2023-07-14', 2, 'Jl. Gatot Subroto No. 456, Tangerang', '0823456789', 3, 150000, 'Pesanan kedua', '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(3, '2023-07-14', 1, 'Jl. Raya Bekasi No. 789, Bekasi', '0834567890', 2, 300000, 'Pesanan ketiga', '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(4, '2023-07-14', 3, 'Jl. Kemang Raya No. 10, Jakarta Selatan', '0876543210', 5, 250000, 'Pesanan keempat', '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(5, '2023-07-14', 1, 'Jl. Merdeka No. 100, Depok', '0898765432', 4, 180000, 'Pesanan kelima', '2023-07-14 08:49:29', '2023-07-14 08:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `kategori_id`, `harga`, `stok`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'PROD001', 'Blouse Wanita', 1, 150000, 10, 'Blouse wanita dengan desain modis dan nyaman dipakai.', 'blouse-wanita.jpg', '2023-07-14 08:49:28', '2023-07-14 08:49:28'),
(2, 'PROD002', 'Dress Wanita', 1, 200000, 8, 'Dress wanita dengan motif cantik dan elegan.', 'dress-wanita.jpg', '2023-07-14 08:49:28', '2023-07-14 08:49:28'),
(3, 'PROD003', 'Rok Wanita', 1, 120000, 12, 'Rok wanita dengan berbagai pilihan model.', 'rok-wanita.jpg', '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(4, 'PROD004', 'Celana Panjang Pria', 2, 180000, 15, 'Celana panjang pria dengan bahan nyaman dan berkualitas.', 'celana-panjang-pria.jpg', '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(5, 'PROD005', 'Kemeja Pria', 2, 200000, 10, 'Kemeja pria dengan desain klasik dan berkualitas tinggi.', 'kemeja-pria.jpg', '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(6, 'PROD006', 'Gelang Emas', 3, 500000, 20, 'Gelang emas dengan desain elegan dan mewah.', 'gelang-emas.jpg', '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(7, 'PROD007', 'Kalung Perak', 3, 250000, 18, 'Kalung perak dengan tampilan modern dan stylish.', 'kalung-perak.jpg', '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(8, 'PROD008', 'Sepatu Sneakers', 3, 300000, 10, 'Sepatu sneakers dengan desain trendi dan nyaman dipakai.', 'sepatu-sneakers.jpg', '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(9, 'PROD009', 'Sepatu Boots', 3, 350000, 8, 'Sepatu boots dengan desain klasik dan bahan berkualitas.', 'sepatu-boots.jpg', '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(10, 'PROD010', 'Tas Tote', 5, 200000, 15, 'Tas tote dengan ukuran yang cukup besar dan nyaman digunakan.', 'tas-tote.jpg', '2023-07-14 08:49:29', '2023-07-14 08:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `stokmasuk`
--

CREATE TABLE `stokmasuk` (
  `id` int(10) UNSIGNED NOT NULL,
  `produk_id` int(10) UNSIGNED NOT NULL,
  `vendor_id` int(10) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stokmasuk`
--

INSERT INTO `stokmasuk` (`id`, `produk_id`, `vendor_id`, `jumlah`, `harga`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 10, 10000, '2023-06-28', '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(2, 2, 2, 15, 15000, '2023-06-28', '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(3, 3, 3, 20, 20000, '2023-06-28', '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(4, 4, 2, 25, 25000, '2023-06-28', '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(5, 5, 3, 30, 30000, '2023-06-28', '2023-07-14 08:49:29', '2023-07-14 08:49:29');

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
  `role` enum('admin','user','general manager') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhamad Zein', 'admin@admin.com', NULL, '$2y$10$FMwbhJ6CXieOPcN9/YxuYeru6r8/vczbq9SCv/jpz0iGt6STtxyRi', 'admin', NULL, '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(2, 'manager', 'manager@admin.com', NULL, '$2y$10$J74Xs.gfzdhLr3gItyjMEOXEgmQk4ltmg07apFQzhWtNbV6kOEe96', 'general manager', NULL, '2023-07-14 08:49:29', '2023-07-14 08:49:29'),
(3, 'Siti Rahayu', 'sitirahayu@gmail.com', NULL, '$2y$10$.nRvrBF8z.IXp2X6LHCDp.xtXYqycCcdGVFzeXm/HJE14X2Ychv7m', 'user', NULL, '2023-07-14 08:49:29', '2023-07-14 08:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `nama`, `alamat`, `telepon`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Budi Susanto', 'Jl. Sudirman No. 123, Jakarta', '0812345678', 'budisusanto@gmail.com', '2023-07-14 08:49:28', '2023-07-14 08:49:28'),
(2, 'Siti Rahayu', 'Jl. Gatot Subroto No. 456, Tangerang', '0823456789', 'sitirahayu@gmail.com', '2023-07-14 08:49:28', '2023-07-14 08:49:28'),
(3, 'Agus Setiawan', 'Jl. Raya Bekasi No. 789, Bekasi', '0834567890', 'agussetiawan@gmail.com', '2023-07-14 08:49:28', '2023-07-14 08:49:28');

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
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesanan_user_id_foreign` (`user_id`),
  ADD KEY `pesanan_produk_id_foreign` (`produk_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produk_kode_unique` (`kode`),
  ADD KEY `produk_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `stokmasuk`
--
ALTER TABLE `stokmasuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stokmasuk_produk_id_foreign` (`produk_id`),
  ADD KEY `stokmasuk_vendor_id_foreign` (`vendor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stokmasuk`
--
ALTER TABLE `stokmasuk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `pesanan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `stokmasuk`
--
ALTER TABLE `stokmasuk`
  ADD CONSTRAINT `stokmasuk_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `stokmasuk_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
