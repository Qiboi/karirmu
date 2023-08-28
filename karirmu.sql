-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2023 pada 11.12
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karirmu`
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
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Rekayasa Perangkat Lunak', '2023-06-26 07:23:57', '2023-06-26 07:23:57'),
(2, 'Teknik Komputer dan Jaringan', '2023-06-26 10:27:27', '2023-06-26 10:27:27'),
(3, 'Administrasi Perkantoran', '2023-06-26 10:28:02', '2023-06-26 10:28:02'),
(4, 'Akutansi', '2023-06-26 10:28:27', '2023-06-26 10:28:27'),
(5, 'Akomodasi Perhotelan', '2023-06-26 10:28:51', '2023-06-26 10:28:51'),
(6, 'Tata Boga', '2023-06-26 10:29:07', '2023-06-26 10:29:07'),
(7, 'Teknik Sepeda Motor Otomotif', '2023-06-26 10:29:56', '2023-06-26 10:29:56'),
(8, 'Teknik Kendaraan Ringan', '2023-06-26 10:30:32', '2023-06-26 10:30:32'),
(9, 'Multimedia', '2023-06-26 10:30:58', '2023-06-26 10:30:58'),
(10, 'Farmasi', '2023-06-26 10:31:34', '2023-06-26 10:31:34'),
(11, 'Pariwisata', '2023-06-26 10:33:38', '2023-06-26 10:33:38'),
(12, 'Keperawatan', '2023-06-26 10:34:41', '2023-06-26 10:34:41'),
(13, 'Bisnis dan Pemasaran', '2023-06-26 10:35:09', '2023-06-26 10:35:09'),
(14, 'Tata Busana', '2023-06-26 10:35:53', '2023-06-26 10:35:53'),
(15, 'Tata Rias', '2023-06-26 10:36:07', '2023-06-26 10:36:07'),
(16, 'Pelayaran', '2023-06-26 10:37:29', '2023-06-26 10:37:29'),
(17, 'Perbankan', '2023-06-26 10:38:23', '2023-06-26 10:38:23'),
(18, 'Teknik Elektronika Industri', '2023-06-26 10:39:09', '2023-06-26 10:39:09'),
(19, 'Teknik Gambar Bangunan', '2023-06-26 10:39:26', '2023-06-26 10:39:26'),
(20, 'Teknik Pengelasan', '2023-06-26 10:48:11', '2023-06-26 10:48:11'),
(21, 'Teknik Logistik', '2023-06-26 10:52:08', '2023-06-26 10:52:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE `lowongan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `id_skill` varchar(255) NOT NULL,
  `id_jurusan` varchar(255) NOT NULL,
  `gaji` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `kuota` int(11) NOT NULL,
  `tutup` date NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id`, `id_perusahaan`, `posisi`, `lokasi`, `id_skill`, `id_jurusan`, `gaji`, `kontak`, `kuota`, `tutup`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Staff IT', 'Bandung', '[\"7\",\"8\",\"9\",\"10\",\"11\"]', '1', '3500000', 'staffid@gmail.com', 2, '2023-06-27', 1, '2023-07-17 01:34:20', '2023-07-17 01:34:20'),
(2, 1, 'Staff IT', 'Bandung', '[\"7\",\"2\",\"3\",\"1\",\"11\"]', '1', '3500000', 'staffid@gmail.com', 2, '2023-06-27', 1, '2023-07-17 01:34:20', '2023-07-17 01:34:20'),
(3, 1, 'Staff IT', 'Bandung', '[\"7\",\"2\",\"3\",\"1\",\"11\"]', '2', '3500000', 'staffid@gmail.com', 2, '2023-06-27', 1, '2023-07-17 01:34:20', '2023-07-17 01:34:20'),
(9, 1, 'Staff IT', 'Jakarta', '[\"9\",\"10\",\"12\",\"13\",\"11\"]', '1', '3500000', 'staffid@gmail.com', 2, '2023-06-27', 1, '2023-07-17 01:34:20', '2023-07-17 01:34:20');

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
(12, '2023_05_22_134340_create_perusahaan_table', 2),
(20, '2023_06_26_123746_create_skills', 6),
(21, '2023_06_26_140206_create_jurusan', 7),
(23, '2023_05_22_135045_create_lowongan_table', 8),
(24, '2023_05_31_153807_create_profile_table', 9);

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
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `name`, `deskripsi`, `alamat`, `kontak`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Djarum', 'Ut potenti interdum senectus dictum posuere tellus magna aptent est rhoncus in erat fringilla torquent semper ac id etiam mollis quisque porttitor duis', 'Jl. Cikutra', 'djarum@gmail.com', '/storage/image/logo/logo-1685361802.png', '2023-05-29 05:03:23', '2023-05-29 05:03:23'),
(2, 'Dji Sam Soe', 'Conubia fames fringilla letius cursus ac euismod proin tristique cubilia augue habitant et pharetra nisl posuere hac lacinia vehicula penatibus nulla senectus dapibus', 'Jl. Cikutra', 'djisamsoe@gmail.com', '/storage/image/logo/logo-1685361961.png', '2023-05-29 05:06:01', '2023-05-29 05:06:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `jurusan_siswa` varchar(255) NOT NULL,
  `skill_siswa` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `nama`, `nis`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `email`, `nomor_telepon`, `jurusan_siswa`, `skill_siswa`, `foto`, `created_at`, `updated_at`) VALUES
(2, 4, 'Muhammad Rifqi`', '0619101058', 'Bandung', '2023-06-26', 'Laki-laki', 'Jl. Cikutra no.210', 'boi@gmail.com', '082211446655', '14', '[\"8\",\"9\",\"10\",\"11\",\"12\"]', '/storage/image/foto/foto-1689718330.jpg', '2023-07-18 15:12:10', '2023-07-18 15:12:10'),
(3, 7, 'Rizka Putera', '0619101058', 'Bandung', '2023-06-25', 'Laki-laki', 'Universitas Widyatama', 'ikok@gmail.com', '082211446655', '1', '[\"10\",\"11\",\"12\",\"13\",\"9\"]', '/storage/image/foto/foto-1689857837.jpg', '2023-07-20 05:57:17', '2023-07-20 05:57:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `skills`
--

INSERT INTO `skills` (`id`, `skill`, `created_at`, `updated_at`) VALUES
(3, 'Membaca dan memahami gambar teknik', '2023-06-26 06:45:12', '2023-06-26 06:45:12'),
(4, 'Pemahaman dasar tentang mesin dan peralatan teknik', '2023-06-26 06:45:12', '2023-06-26 06:45:12'),
(5, 'Keterampilan praktis dalam pengelasan, permesinan, atau perakitan', '2023-06-26 06:45:12', '2023-06-26 06:45:12'),
(6, 'Pemeliharaan dan perbaikan peralatan teknik', '2023-06-26 06:45:12', '2023-06-26 06:45:12'),
(7, 'Python', '2023-06-26 06:45:12', '2023-06-26 06:45:12'),
(8, 'Java', '2023-06-26 06:45:12', '2023-06-26 06:45:12'),
(9, 'C++', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(10, 'HTML', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(11, 'CSS', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(12, 'Javascript', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(13, 'PHP', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(14, 'Administrasi jaringan dan keamanan komputer', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(15, 'Pemecahan masalah perangkat keras dan perangkat lunak komputer', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(16, 'Keterampilan administrasi perkantoran', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(17, 'Keahlian komunikasi dan negosiasi', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(18, 'Pengelolaan proyek kecil atau tugas bisnis', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(19, 'Pemahaman dasar tentang manajemen keuangan', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(20, 'Keterampilan memasak dasar dan teknik kuliner', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(21, 'Kreativitas dalam penyajian makanan', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(22, 'Pemahaman tentang kebersihan dan sanitasi makanan', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(23, 'Pemahaman tentang manajemen dapur dan persediaan', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(24, 'Pemahaman dasar tentang sistem otomotif dan komponennya', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(25, 'Keterampilan dalam perawatan dan perbaikan kendaraan', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(26, 'Pemecahan masalah pada mesin kendaraan', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(27, 'Penggunaan peralatan dan alat otomotif', '2023-06-26 06:45:13', '2023-06-26 06:45:13'),
(28, 'Perawatan dan perbaikan kendaraan bermotor', '2023-06-26 10:58:52', '2023-06-26 10:58:52'),
(29, 'Pemahaman tentang sistem mesin kendaraan, sistem kelistrikan, dan sistem rem', '2023-06-26 10:59:17', '2023-06-26 10:59:17'),
(30, 'Keterampilan dalam membaca dan memahami diagram dan buku manual kendaraan', '2023-06-26 11:03:15', '2023-06-26 11:03:15'),
(31, 'Pemecahan masalah pada kendaraan dan melakukan diagnosa kerusakan', '2023-06-26 11:03:34', '2023-06-26 11:03:34'),
(32, 'Pengetahuan tentang keselamatan berkendara dan aturan lalu lintas', '2023-06-26 11:03:54', '2023-06-26 11:03:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@tutsmake.com', NULL, '$2y$10$CvEZsoh2PKkwBIIF7p/urOMkn1UlYsAY0P2oDYRgSKN7mKEj6KTfy', 1, NULL, '2023-05-18 09:52:35', '2023-05-18 09:52:35'),
(2, 'Manager User', 'manager@tutsmake.com', NULL, '$2y$10$DPt.WHO.5MoFhHf/UkL0yuIsmfJNnZQmQV.bV9HH8Vap4yeFyV1XG', 2, NULL, '2023-05-18 09:52:35', '2023-05-18 09:52:35'),
(3, 'User', 'user@tutsmake.com', NULL, '$2y$10$wKYkj/NTXus7IHobCnc23un3MmpvbWxuvJHB3yloleSg5ILeYXaXO', 0, NULL, '2023-05-18 09:52:35', '2023-05-18 09:52:35'),
(4, 'Boi', 'boi@gmail.com', NULL, '$2y$10$cGqMNHofQIOZ1wiESb97DO75tcrAI66rVIhrq6yAJrhySfx96q.fu', 0, NULL, '2023-05-22 03:16:21', '2023-05-22 03:16:21'),
(5, 'qiboi', 'qiboi@gmail.com', NULL, '$2y$10$RuNtEbTvN.qkZZmyDsL.Yu1ybLwB8.gWfq.r5LZYoemVeir.4cEdC', 0, NULL, '2023-05-22 03:22:16', '2023-05-22 03:22:16'),
(6, 'Rifqi', 'rifqi@gmail.com', NULL, '$2y$10$5Ws0tneiYtSEj17LvMlu3uR0LQFLDtAUed2M56Dc8MDfnVAB0qKRC', 0, NULL, '2023-05-22 03:43:47', '2023-05-22 03:43:47'),
(7, 'ikok', 'ikok@gmail.com', NULL, '$2y$10$RT39QeRVDfHdehZVcNVFzuUinigJbAfryi1X3RyHFhOHp/CCkVq3q', 0, NULL, '2023-07-20 05:52:49', '2023-07-20 05:52:49');

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
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lowongan_id_perusahaan_foreign` (`id_perusahaan`);

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
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `lowongan_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
