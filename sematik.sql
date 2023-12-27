-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2023 pada 13.08
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sematik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `semester` int(11) NOT NULL,
  `jumlahsks` int(11) NOT NULL,
  `ipk` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`id`, `nim`, `nama`, `tahun`, `semester`, `jumlahsks`, `ipk`, `created_at`, `updated_at`) VALUES
(2, 'E1E120083', 'ABDI', 2021, 5, 114, 3.22, '2023-10-23 19:35:39', '2023-10-23 19:35:39'),
(3, 'E1E120082', 'IKSAN', 2020, 7, 70, 1.78, '2023-10-23 19:35:39', '2023-11-26 07:31:11'),
(4, 'E1E120081', 'YAMIN', 2020, 7, 129, 3.45, '2023-10-23 19:35:39', '2023-10-23 19:35:39'),
(5, 'E1E120080', 'AGUS', 2020, 7, 70, 3.12, '2023-10-23 19:35:39', '2023-11-24 07:37:04'),
(7, 'E1E120078', 'AFDHALUL', 2020, 7, 70, 1.87, '2023-10-23 19:35:39', '2023-11-26 07:18:48'),
(8, 'E1E120077', 'BAYU', 2022, 3, 29, 1.88, '2023-10-23 19:35:39', '2023-11-24 07:28:13'),
(9, 'E1E120076', 'HADIJAH', 2020, 7, 129, 2.23, '2023-10-23 19:35:39', '2023-10-23 19:35:39'),
(10, 'E1E120075', 'NURFAUZIA', 2020, 7, 129, 3.28, '2023-10-23 19:35:39', '2023-10-23 19:35:39'),
(11, 'E1E120074', 'RAYA', 2020, 7, 129, 2.11, '2023-10-23 19:35:39', '2023-10-23 19:35:39'),
(12, 'E1E120073', 'FATIMA', 2021, 5, 98, 3.87, '2023-10-23 19:35:39', '2023-10-23 19:35:39'),
(13, 'E1E120072', 'ALFRIYANTI', 2023, 1, 20, 2.12, '2023-10-23 19:35:39', '2023-10-23 19:35:39'),
(14, 'E1E120071', 'ABBY', 2020, 7, 120, 2.34, '2023-10-23 19:35:39', '2023-10-23 19:35:39'),
(15, 'E1E120084', 'RAHMAT', 2020, 7, 129, 3.67, '2023-10-23 22:25:46', '2023-10-23 22:25:46'),
(16, 'E1E120082', 'IKSAN', 2020, 7, 129, 3.12, '2023-10-23 22:25:46', '2023-10-23 22:25:46'),
(17, 'E1E120081', 'YAMIN', 2020, 7, 129, 3.45, '2023-10-23 22:25:46', '2023-10-23 22:25:46'),
(18, 'E1E120080', 'AGUS', 2020, 7, 71, 1.22, '2023-10-23 22:25:46', '2023-11-26 07:20:47'),
(20, 'E1E120078', 'AFDHALUL', 2020, 7, 69, 1.87, '2023-10-23 22:25:46', '2023-11-26 07:22:26'),
(21, 'E1E120076', 'HADIJAH', 2020, 7, 129, 2.23, '2023-10-23 22:25:46', '2023-10-23 22:25:46'),
(22, 'E1E120075', 'NURFAUZIA', 2020, 7, 129, 3.28, '2023-10-23 22:25:46', '2023-10-23 22:25:46'),
(23, 'E1E120074', 'RAYA', 2020, 7, 129, 2.11, '2023-10-23 22:25:46', '2023-10-23 22:25:46'),
(24, 'E1E120071', 'ABBY', 2020, 7, 120, 2.34, '2023-10-23 22:25:46', '2023-10-23 22:25:46'),
(25, 'E1E120083', 'ABDI', 2021, 5, 114, 3.22, '2023-10-23 22:25:46', '2023-10-23 22:25:46'),
(26, 'E1E120073', 'FATIMA', 2021, 5, 98, 3.87, '2023-10-23 22:25:46', '2023-10-23 22:25:46'),
(28, 'E1E120072', 'ALFRIYANTI', 2023, 1, 20, 2.12, '2023-10-23 22:25:46', '2023-10-23 22:25:46'),
(29, 'E1E120001', 'IKA', 2020, 4, 70, 2.78, '2023-11-23 19:34:55', '2023-11-23 19:34:55'),
(30, 'E1E120011', 'ETOO', 2019, 14, 140, 2.33, '2023-11-24 07:41:44', '2023-11-30 03:51:11'),
(31, 'E1E122012', 'JOHN', 2022, 3, 27, 1.23, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(32, 'E1E122013', 'DOE', 2022, 3, 25, 1.22, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(33, 'E1E122014', 'JOHN', 2022, 3, 38, 2.11, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(34, 'E1E122015', 'DOE', 2022, 3, 34, 1.99, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(35, 'E1E122016', 'JOHN', 2022, 3, 33, 2.11, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(36, 'E1E122017', 'DOE', 2022, 3, 31, 1.23, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(37, 'E1E122018', 'JOHN', 2022, 3, 40, 3.11, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(38, 'E1E122019', 'DOE', 2022, 3, 33, 2.22, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(39, 'E1E122020', 'JOHN', 2022, 3, 48, 3.56, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(40, 'E1E122021', 'DOE', 2022, 3, 59, 3.45, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(41, 'E1E122022', 'JOHN', 2022, 3, 40, 3.12, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(42, 'E1E122023', 'DOE', 2022, 3, 41, 3.12, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(43, 'E1E122024', 'JOHN', 2022, 3, 42, 3.12, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(44, 'E1E122025', 'DOE', 2022, 3, 43, 3.12, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(45, 'E1E122026', 'JOHN', 2022, 3, 44, 3.12, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(46, 'E1E122027', 'DOE', 2022, 3, 45, 3.12, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(47, 'E1E122028', 'JOHN', 2022, 3, 46, 3.12, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(48, 'E1E122029', 'DOE', 2022, 3, 47, 3.12, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(49, 'E1E122030', 'JOHN', 2022, 3, 48, 3.12, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(50, 'E1E122031', 'DOE', 2022, 3, 49, 3.12, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(51, 'E1E122032', 'JOHN', 2022, 3, 50, 3.12, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(52, 'E1E122033', 'DOE', 2022, 3, 51, 3.12, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(53, 'E1E122034', 'JOHN', 2022, 3, 52, 3.12, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(54, 'E1E122035', 'DOE', 2022, 3, 53, 3.12, '2023-11-26 07:27:38', '2023-11-26 07:27:38'),
(55, 'E1E122036', 'JOHN', 2022, 3, 54, 3.12, '2023-11-26 07:27:38', '2023-11-26 07:27:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_14_152303_create_mhs_table', 1),
(6, '2023_07_28_163349_crate_table__tahun', 1),
(7, '2023_10_16_050858_tambah_kolom_jumlahsks_to_mhs', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL DEFAULT 'Dosen',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$O/luWk5Me5mgMlZgFGdrXu4/Kn/d53pwn6BX.h4pfP4PN.YHb0Lhe', 'admin', NULL, '2023-10-23 19:24:22', '2023-10-23 19:24:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
