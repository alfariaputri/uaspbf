-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2021 pada 16.50
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisebil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakembali`
--

CREATE TABLE `datakembali` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_sewa` int(11) DEFAULT NULL,
  `tanggal_kembali` date NOT NULL,
  `durasi_terlambat` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `denda` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status` enum('belum bayar','sudah bayar') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `datakembali`
--

INSERT INTO `datakembali` (`id`, `id_sewa`, `tanggal_kembali`, `durasi_terlambat`, `denda`, `total_bayar`, `status`, `created_at`, `updated_at`) VALUES
(6, 5, '2021-01-08', '1', 2000, 102000, 'belum bayar', '2021-01-03 15:20:07', '2021-01-03 15:20:07'),
(7, 6, '2021-01-13', '2', 2000, 154000, 'belum bayar', '2021-01-03 16:17:06', '2021-01-03 16:17:06'),
(8, 7, '2021-01-26', '0', 0, 120000, 'sudah bayar', '2021-01-03 16:20:32', '2021-01-03 16:20:32'),
(9, 8, '2021-01-20', '6', 2000, 57000, 'sudah bayar', '2021-01-03 16:23:02', '2021-01-03 16:23:02'),
(10, 9, '2021-01-16', '3', 2000, 506000, 'belum bayar', '2021-01-03 16:32:17', '2021-01-03 16:32:17'),
(11, 11, '2021-01-11', '0', 0, 500000, 'belum bayar', '2021-01-04 06:34:22', '2021-01-04 06:34:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamobil`
--

CREATE TABLE `datamobil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_keluaran` year(4) NOT NULL,
  `harga_sewa` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `datamobil`
--

INSERT INTO `datamobil` (`id`, `plat`, `jenis`, `merek`, `warna`, `tahun_keluaran`, `harga_sewa`, `status`, `created_at`, `updated_at`) VALUES
(1, 'P2020AG', 'Honda', 'Honda City', 'Abu-abu', 2017, 100000, 'Tidak Tersedia', NULL, '2021-01-04 07:09:53'),
(3, 'P2021AG', 'Toyota', 'Tooyota FT 8', 'Merah', 2012, 150000, 'Tidak Tersedia', NULL, '2020-12-30 15:31:17'),
(7, 'P2423AG', 'Honda', 'Honda R5', 'biru', 2019, 45000, 'Tidak Tersedia', '2020-12-30 15:30:56', '2021-01-04 07:10:49'),
(8, 'P2423445', 'Daihatsu', 'Tooyota FT 8', 'biru', 2019, 45000, 'Tidak Tersedia', '2020-12-31 10:08:53', '2020-12-31 10:08:53'),
(9, 'P2423445', 'Honda', 'Honda R5', 'biru', 2019, 45000, 'Tersedia', '2021-01-01 14:33:38', '2021-01-01 14:33:38'),
(10, 'P2423441', 'Nissan', 'Nissan15', 'Merah', 2020, 500000, 'Tersedia', '2021-01-03 16:31:13', '2021-01-03 16:31:13'),
(11, 'AG6814', 'Daihatsu', 'Yo Honda', 'Abang', 2021, 500000, 'Tidak Tersedia', '2021-01-04 06:10:08', '2021-01-04 06:10:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasewa`
--

CREATE TABLE `datasewa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `id_mobil` int(11) DEFAULT NULL,
  `jaminan` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `datasewa`
--

INSERT INTO `datasewa` (`id`, `tanggal_sewa`, `tanggal_kembali`, `durasi`, `id_mobil`, `jaminan`, `id_user`, `created_at`, `updated_at`) VALUES
(5, '2021-01-02', '2021-01-07', 7, 1, 'SIM', 4, NULL, NULL),
(6, '2021-01-05', '2021-01-11', 7, 3, 'KTP', 3, NULL, NULL),
(7, '2021-01-20', '2021-01-26', 7, 5, 'KK', 8, NULL, NULL),
(9, '2021-01-07', '2021-01-13', 7, 10, 'SIM', 10, NULL, NULL),
(10, '2021-01-02', '2021-01-07', 7, 11, 'KTP', 11, NULL, NULL),
(11, '2021-01-04', '2021-01-11', 7, 11, 'KTP', 4, NULL, NULL),
(12, '2021-01-04', '2021-01-07', 7, 7, 'KTP', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datauser`
--

CREATE TABLE `datauser` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `datauser`
--

INSERT INTO `datauser` (`id`, `nama`, `alamat`, `no_hp`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(3, 'hadak', 'tingal', '082345678908', 'L', '2020-12-29 18:14:30', '2020-12-29 18:14:30'),
(4, 'ega', 'jeblog talun', '081231566890', 'P', '2020-12-29 18:17:38', '2020-12-29 18:17:52'),
(6, 'Afrilia', 'hj', '081231566890', 'P', '2020-12-31 01:25:45', '2020-12-31 01:25:45'),
(8, 'Febriansyah', 'Garum', '081217113440', 'L', '2021-01-03 16:18:58', '2021-01-03 16:18:58'),
(9, 'Ria', 'Suroboyo', '082314567876', 'P', '2021-01-03 16:21:27', '2021-01-03 16:21:27'),
(11, 'lia', 'jemblong', '67754787674464', 'P', '2021-01-04 06:08:32', '2021-01-04 06:08:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_12_26_123204_create_datauser_table', 1),
(4, '2020_12_27_144949_create-datamobil-table', 1),
(5, '2020_12_30_031713_create_datasewa_table', 2),
(6, '2020_12_31_163050_create_datakembali_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Febri', 'Admin', 'admin@gmail.com', NULL, '$2y$10$AVkpYhyebWfBEoUlYkaXwOZBwwDHHtzwIoghV4uSvdCeoEj0bTDp2', '0LILBrW5fxdlnf2UG9DNo0GZFWosvojB7qKpyuf66Qwqm8RXPGmowZy5NoBG', '2020-12-29 17:44:11', '2020-12-29 17:44:11'),
(3, 'Rian', 'User', 'user@gmail.com', NULL, '$2y$10$7Ae4CKKNZ4p8.zD6dnxDdemfwYfRqxzHRvItJRSHE/aaSlVf5i/UW', 'Rf9zyyhkkF42eLiKDQfnzSY8s7lLLDSuASHAIvPAZV3WMricHcyuqcABeolo', '2020-12-29 18:09:16', '2020-12-29 18:09:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datakembali`
--
ALTER TABLE `datakembali`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `datamobil`
--
ALTER TABLE `datamobil`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `datasewa`
--
ALTER TABLE `datasewa`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `datauser`
--
ALTER TABLE `datauser`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datakembali`
--
ALTER TABLE `datakembali`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `datamobil`
--
ALTER TABLE `datamobil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `datasewa`
--
ALTER TABLE `datasewa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `datauser`
--
ALTER TABLE `datauser`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
