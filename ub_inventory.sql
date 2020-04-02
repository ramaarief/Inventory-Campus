-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Apr 2020 pada 17.40
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ub_inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Meja', '2020-04-02 07:58:30', '2020-04-02 07:58:30'),
(2, 'Papan_Tulis', '2020-04-02 07:58:30', '2020-04-02 07:58:30'),
(3, 'Spidol', '2020-04-02 07:58:30', '2020-04-02 07:58:30'),
(4, 'Proyektor', '2020-04-02 07:58:30', '2020-04-02 07:58:30'),
(5, 'LCD', '2020-04-02 07:58:30', '2020-04-02 07:58:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Fakultas Ilmu Komputer', '2020-04-02 03:47:04', '2020-04-02 03:47:04'),
(2, 'Fakultas Ekonomi dan Bisnis', '2020-04-02 03:47:04', '2020-04-02 03:47:04'),
(3, 'Fakultas Hukum', '2020-04-02 03:47:04', '2020-04-02 03:47:04'),
(4, 'Fakultas Ilmu Administrasi', '2020-04-02 03:55:14', '2020-04-02 03:55:14'),
(5, 'Fakultas Pertanian', '2020-04-02 03:55:32', '2020-04-02 03:55:32'),
(6, 'Fakultas Peternakan', '2020-04-02 03:55:43', '2020-04-02 03:55:43'),
(7, 'Fakultas Teknik', '2020-04-02 03:55:54', '2020-04-02 03:55:54'),
(8, 'Fakultas Kedokteran', '2020-04-02 03:56:04', '2020-04-02 03:56:04'),
(9, 'Fakultas Perikanan dan Ilmu Kelautan', '2020-04-02 03:56:14', '2020-04-02 03:56:14'),
(10, 'Fakultas Matematika dan Ilmu Pengetahuan Alam', '2020-04-02 03:56:24', '2020-04-02 03:56:24'),
(11, 'Fakultas Teknologi Pertanian', '2020-04-02 03:56:35', '2020-04-02 03:56:35'),
(12, 'Fakultas Ilmu Sosial dan Ilmu Politik', '2020-04-02 03:56:46', '2020-04-02 03:56:46'),
(13, 'Fakultas Ilmu Budaya', '2020-04-02 03:56:55', '2020-04-02 03:56:55'),
(14, 'Fakultas Kedokteran Hewan', '2020-04-02 03:57:05', '2020-04-02 03:57:05'),
(15, 'Fakultas Kedokteran Gigi', '2020-04-02 03:57:15', '2020-04-02 03:57:15'),
(16, 'Program Pendidikan Vokasi', '2020-04-02 04:00:54', '2020-04-02 07:29:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fakultas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_jurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `fakultas_id`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Teknik Informatika', '2020-04-02 06:00:57', '2020-04-02 06:00:57'),
(2, 1, 'Sistem Informasi', '2020-04-02 06:01:33', '2020-04-02 06:01:33'),
(3, 8, 'Pendidikan Dokter', '2020-04-02 06:01:40', '2020-04-02 06:01:40'),
(4, 3, 'Ilmu Hukum', '2020-04-02 06:02:02', '2020-04-02 07:19:08'),
(5, 12, 'Hubungan Internasional', '2020-04-02 06:02:15', '2020-04-02 06:02:15'),
(6, 13, 'Pendidikan Bahasa Inggris', '2020-04-02 06:02:22', '2020-04-02 06:54:44'),
(7, 1, 'Teknologi Informasi', '2020-04-02 07:04:00', '2020-04-02 07:04:00'),
(8, 12, 'Ilmu Komunikasi', '2020-04-02 07:04:15', '2020-04-02 07:04:15'),
(9, 8, 'Farmasi', '2020-04-02 07:04:40', '2020-04-02 07:04:40'),
(10, 4, 'Ilmu Administrasi Publik', '2020-04-02 07:20:55', '2020-04-02 07:20:55'),
(11, 4, 'Ilmu Administrasi Bisnis', '2020-04-02 07:21:08', '2020-04-02 07:21:08'),
(12, 5, 'Agroekoteknologi', '2020-04-02 07:21:22', '2020-04-02 07:21:22'),
(13, 7, 'Teknik Sipil', '2020-04-02 08:22:49', '2020-04-02 08:22:49'),
(14, 7, 'Teknik Industri', '2020-04-02 08:23:06', '2020-04-02 08:23:06'),
(15, 7, 'Arsitektur', '2020-04-02 08:23:20', '2020-04-02 08:24:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_03_30_092217_create_fakultas', 1),
(4, '2020_04_02_111750_create_jurusan', 2),
(5, '2020_04_02_144941_create_ruangan', 3),
(6, '2020_04_02_145032_create_barang', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'R_001', '2020-04-02 07:58:12', '2020-04-02 07:58:12'),
(2, 'R_002', '2020-04-02 07:58:12', '2020-04-02 07:58:12'),
(3, 'R_003', '2020-04-02 07:58:12', '2020-04-02 07:58:12'),
(4, 'R_004', '2020-04-02 07:58:12', '2020-04-02 07:58:12'),
(5, 'R_005', '2020-04-02 07:58:12', '2020-04-02 07:58:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jurusan_fakultas_id_foreign` (`fakultas_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_fakultas_id_foreign` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
