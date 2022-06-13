-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2022 at 10:32 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `janjigacovid`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftars`
--

CREATE TABLE `daftars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lahir` date NOT NULL,
  `jeniskelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisvaksin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftars`
--

INSERT INTO `daftars` (`id`, `nama`, `nik`, `lahir`, `jeniskelamin`, `email`, `alamat`, `provinsi`, `kota`, `lokasi`, `jenisvaksin`, `created_at`, `updated_at`) VALUES
(2, 'Puteri Ananditya Maheswari', '510300000000', '2022-06-01', 'Perempuan', 'puteriamh@gmail.com', 'Penanggungan', 'Jawa Timur', 'Kota Malang', 'Puskesmas Arjowinangun', 'Vaksin-1', '2022-06-12 07:24:52', '2022-06-12 07:24:52'),
(3, 'DInda', '510300000001', '2022-06-01', 'Perempuan', 'dinda@gmail.com', 'Malang', 'Jawa Timur', 'Kota Malang', 'Puskesmas Arjowinangun', 'Vaksin-1', '2022-06-13 02:47:45', '2022-06-13 02:47:45'),
(4, 'Akbar', '510300000002', '2022-06-01', 'Laki-laki', 'luki@gmail.com', 'malang', 'Jawa Timur', 'Kota Malang', 'Puskesmas Arjowinangun', 'Vaksin-1', '2022-06-13 03:22:50', '2022-06-13 03:22:50'),
(5, 'Amalia', '510300000004', '2022-06-02', 'Perempuan', 'amalia@gmail.com', 'malang', 'Jawa Timur', 'Kota Malang', 'Puskesmas Arjowinangun', 'Vaksin-1', '2022-06-13 03:23:42', '2022-06-13 03:23:42');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `l_kesehatans`
--

CREATE TABLE `l_kesehatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `layanan_kesehatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `l_kesehatans`
--

INSERT INTO `l_kesehatans` (`id`, `layanan_kesehatan`, `kecamatan`, `kelurahan`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Sakit', 'Lorem ipsum', 'lorem ipsum', 'Lorem ipsum dolor', '2022-06-04 12:08:08', '2022-06-05 05:26:59'),
(3, 'Puskesmas Arjowinangun', 'Kedungkandang', '-', 'Jl. Raya Arjowinangun No.2', '2022-06-10 21:31:59', '2022-06-10 21:31:59'),
(4, 'Puskesmas Arjuno', 'Klojen', 'Kauman', 'Jl. Simpang Arjuno No.17', '2022-06-10 21:32:21', '2022-06-10 21:32:21'),
(5, 'Puskesmas Bareng', 'Klojen', 'Bareng', 'Jl. Bareng Tenes IV A No.639', '2022-06-10 21:32:59', '2022-06-10 21:32:59'),
(6, 'Puskesmas Ciptomulyo', 'Sukun', 'Ciptomulyo', 'Jl. Kol. Sugiyono VIII No.54', '2022-06-10 21:33:30', '2022-06-10 21:33:30'),
(7, 'Puskesmas Cisadea', 'Blimbing', 'Purwantoro', 'Jl. Cisadea No.19', '2022-06-10 21:33:53', '2022-06-10 21:33:53'),
(8, 'Puskesmas Dinoyo', 'Kedungkandang', '-', 'Jl. Ki Ageng Gribig No. 97', '2022-06-10 21:34:09', '2022-06-10 21:34:09'),
(9, 'Puskesmas Gribig', 'Kedungkandang', '-', 'Jl. Ki Ageng Gribig No. 97', '2022-06-10 21:34:43', '2022-06-10 21:34:43'),
(10, 'Puskesmas Janti', 'Sukun', 'Bandungrejosari', 'Jl. Janti Barat No.88', '2022-06-10 21:35:05', '2022-06-10 21:35:05'),
(11, 'Puskesmas Kedungkandang', 'Kedungkandang', '-', 'Jl. Ki Ageng Gribig No. 142/242', '2022-06-10 21:35:25', '2022-06-10 21:35:25'),
(12, 'Puskesmas Kendalkerep', 'Blimbing', 'Bunulrejo', 'Jl. Sulfat No.100', '2022-06-10 21:35:50', '2022-06-10 21:35:50'),
(13, 'Puskesmas Kendalsari', 'Lowokwaru', '-', 'Jl. Cengger Ayam I No.8', '2022-06-10 21:36:12', '2022-06-10 21:36:12'),
(14, 'Puskesmas Mojolangu', 'Lowokwaru', '-', 'Jl. Sudimoro No. 17a', '2022-06-10 21:36:38', '2022-06-10 21:36:38'),
(15, 'Puskesmas Mulyorejo', 'Sukun', '-', 'Jl. Budi Utomo No.11-A', '2022-06-10 21:37:08', '2022-06-10 21:37:08');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_05_26_060835_create_sessions_table', 1),
(7, '2022_06_04_044135_create_vaccines_table', 2),
(8, '2022_06_04_044959_create_vaksins_table', 3),
(9, '2022_06_04_050732_create_vaksins_table', 4),
(10, '2022_06_04_051010_create_vaksins_table', 5),
(11, '2022_06_04_164508_create_l_kesehatans_table', 6),
(12, '2022_06_02_090451_create_daftars_table', 7),
(13, '2022_06_11_105930_create_profiles_table', 8);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `nama`, `umur`, `nik`, `jeniskelamin`, `nohp`, `alamat`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Puteri A', '19', '510300000000', 'Perempuan', '082145375528', 'Penanggungan', NULL, '2022-06-13 03:07:53', '2022-06-13 03:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('FQ3RyEvjagq0wdRISuLyZdGi9Sv74YEIH2J00AWY', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiazFUcVVqT2E5d3BpTFZxTk85RmF1WFFuc0U3bWlVSm1YSVphY0lXNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9qYW5qaWdhY292aWQudGVzdC9ob21lIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1655115980);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, '1', 'admin', 'admin@gmail.com', NULL, '$2y$10$M8NmRibGcMRzZf9DTJkPdOoAw9VPBK8aurOf/Ia1VOQ00K9xdbhhC', NULL, NULL, NULL, 'ccAnAVsBF9HRErwfw8tym2OaAJrlb2ELNwhkPQON3252LxBZjJFuLuFu89t9', NULL, NULL, '2022-05-26 00:42:54', '2022-05-26 00:42:54'),
(2, '0', 'user', 'user@gmail.com', NULL, '$2y$10$ljrLzu1BelDqMwqQ79Nb9ue3YSKiGIds.Zr3A5Ag9HriwN3OPZigO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-26 00:45:03', '2022-05-26 00:45:03'),
(3, '2', 'Puskesmas Arjowinangun', 'faskes@gmail.com', NULL, '$2y$10$oH7mnB7spccCVGNRAOw9iuqbTUvlFkdzGSiL0ZiGMSdquibx/eXLi', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-12 07:34:48', '2022-06-12 07:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `vaksins`
--

CREATE TABLE `vaksins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_vaksin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_vaksin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaksins`
--

INSERT INTO `vaksins` (`id`, `nama_vaksin`, `deskripsi_vaksin`, `image`, `created_at`, `updated_at`) VALUES
(16, 'Vaksin Sinovac', 'Vaksin pertama yang dipakai di Indonesia. Berdasarkan uji klinis di Bandung, efikasinya mencapai 63,5 persen.', '1655034408.png', '2022-06-10 06:22:39', '2022-06-12 04:46:48'),
(17, 'Vaksin Sinopharm', 'Vaksin Sinopharm dibuat dengan metode virus yang dimatikan, serupa dengan vaksin Sinovac. Efikasi vaksin sinopharm mencapai 78,02 persen dan dapat digunakan untuk usia 18 tahun ke atas', '1655034426.png', '2022-06-10 06:25:21', '2022-06-12 04:47:06'),
(18, 'Vaksin AstraZeneca', 'Vaksin ini dibuat dengan metode vektor virus diklaim memiliki efikasi sebesar 82,3 persen dengan interval pemberian dosis 1 dan 2 selama 12 minggu.', '1655034442.png', '2022-06-10 06:26:42', '2022-06-12 04:47:22'),
(19, 'Vaksin Moderna', 'Vaksin Moderna dibuat dengan metode mRNA memiliki efikasi sebesar 94,1 persen dan mendapat izin dari BPOM untuk usia 18 tahun ke atas.', '1655034453.png', '2022-06-10 06:27:51', '2022-06-12 04:47:33'),
(20, 'Vaksin Pfizer', 'Vaksin Pfizer dibuat dengan metode mRNA memiliki efikasi sebesar 95,5 persen dan mendapat izin dari BPOM untuk usia 12 tahun ke atas.', '1655034461.png', '2022-06-10 06:29:11', '2022-06-12 04:47:42'),
(21, 'Vaksin Johnson & Johnson', 'Vaksin Johnson & Johnson dibuat dengan metode vektor virus diklaim memiliki efikasi sebesar 67,2 persen dan boleh dipakai untuk masyarakat yang berusia 18 tahun ke atas.', '1655034472.png', '2022-06-10 06:30:19', '2022-06-12 04:47:52'),
(22, 'Vaksin  Cansino (Convidecia)', 'Vaksin Convidecia dibuat dengan metode vektor virus memiliki efikasi secara umum sebesar 65,3 persen dan untuk kasus Covid-19 berat sebesar 90,1 persen.', '1655034484.png', '2022-06-10 06:31:49', '2022-06-12 04:48:04'),
(23, 'Vaksin Sputnik V', 'Vaksin Sputnik-V dibuat dengan metode vektor virus memiliki efikasi sebesar 92,6 persen dan boleh dipakai untuk masyarakat yang berusia 18 tahun.', '1655034493.png', '2022-06-10 06:33:43', '2022-06-12 04:48:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftars`
--
ALTER TABLE `daftars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `l_kesehatans`
--
ALTER TABLE `l_kesehatans`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vaksins`
--
ALTER TABLE `vaksins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftars`
--
ALTER TABLE `daftars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `l_kesehatans`
--
ALTER TABLE `l_kesehatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vaksins`
--
ALTER TABLE `vaksins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
