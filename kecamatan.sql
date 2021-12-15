-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2021 pada 15.00
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kecamatan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id`, `agama`, `jumlah`, `slug`) VALUES
(1, 'Islam', '575', 'islam'),
(2, 'Kristen Protestan', '200', 'kristen-protestan'),
(3, 'Kristen Katholik', '200', 'kristen-katholik'),
(5, 'Buddha', '270', 'buddha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'bintanbh@gmail.com', 4, '2021-12-05 10:36:24', 1),
(2, '::1', 'bintangawan900@gmail.com', 5, '2021-12-05 10:39:06', 1),
(3, '::1', 'bintangawan900@gmail.com', NULL, '2021-12-05 10:53:12', 0),
(4, '::1', 'bintangawan900@gmail.com', NULL, '2021-12-05 10:53:23', 0),
(5, '::1', 'bintangawan900@gmail.com', NULL, '2021-12-05 10:53:39', 0),
(6, '::1', 'bintangawan900@gmail.com', 5, '2021-12-05 10:53:57', 1),
(7, '::1', 'bintangawan900@gmail.com', 5, '2021-12-05 10:59:33', 1),
(8, '::1', 'bintangawan900@gmail.com', 5, '2021-12-05 18:33:15', 1),
(9, '::1', 'bintangawan900@gmail.com', NULL, '2021-12-06 09:24:27', 0),
(10, '::1', 'bintangawan900@gmail.com', 5, '2021-12-06 09:24:42', 1),
(11, '::1', 'bintangawan900@gmail.com', 5, '2021-12-06 19:44:21', 1),
(12, '::1', 'bintangawan900@gmail.com', 5, '2021-12-06 21:51:47', 1),
(13, '::1', 'bintangawan900@gmail.com', NULL, '2021-12-06 21:57:02', 0),
(14, '::1', 'bintangawan900@gmail.com', 5, '2021-12-06 21:57:22', 1),
(15, '::1', 'bintangawan900@gmail.com', 5, '2021-12-06 22:18:02', 1),
(16, '::1', 'bintangawan900@gmail.com', 5, '2021-12-06 22:54:28', 1),
(17, '::1', 'bintangawan900@gmail.com', 5, '2021-12-06 23:34:22', 1),
(18, '::1', 'bintangawan900@gmail.com', 5, '2021-12-07 22:42:16', 1),
(19, '::1', 'bintangawan900@gmail.com', 5, '2021-12-08 21:16:37', 1),
(20, '::1', 'bintangawan900@gmail.com', 5, '2021-12-09 08:19:58', 1),
(21, '::1', 'bintangawan900@gmail.com', 5, '2021-12-09 10:11:18', 1),
(22, '::1', 'bintangawan900@gmail.com', 5, '2021-12-09 10:20:26', 1),
(23, '::1', 'bintangawan900@gmail.com', 5, '2021-12-09 20:13:57', 1),
(24, '::1', 'bintangawan900@gmail.com', 5, '2021-12-09 21:29:37', 1),
(25, '::1', 'bintangawan900@gmail.com', 5, '2021-12-09 21:33:14', 1),
(26, '::1', 'bintangawan900@gmail.com', 5, '2021-12-11 23:29:48', 1),
(27, '::1', 'bintangawan900@gmail.com', 5, '2021-12-12 06:24:54', 1),
(28, '::1', 'bintangawan900@gmail.com', 5, '2021-12-12 08:01:25', 1),
(29, '::1', 'bintangawan900@gmail.com', 5, '2021-12-12 09:35:43', 1),
(30, '::1', 'bintangawan900@gmail.com', 5, '2021-12-12 23:04:30', 1),
(31, '::1', 'bintangawan900@gmail.com', 5, '2021-12-13 01:32:57', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kepala` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id`, `nama`, `jumlah`, `kepala`, `slug`) VALUES
(2, 'Tarik', 600, 'Candra Kurniawan', 'tarik'),
(3, 'Kalimati', 533, 'Zakaria', 'kalimati'),
(5, 'Janti', 541, 'Bintang', 'janti'),
(14, 'Mergosari', 300, 'Ikki ', 'mergosari'),
(16, 'Banjarwungu ', 356, 'Nina', 'banjarwungu'),
(18, 'Klanting Sari', 459, 'Bima', 'klanting-sari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lyn_kia`
--

CREATE TABLE `lyn_kia` (
  `id` int(11) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `nama_orangtua` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lyn_kia`
--

INSERT INTO `lyn_kia` (`id`, `nama_anak`, `nama_orangtua`, `alamat`, `tanggal`, `slug`) VALUES
(1, 'John Doe', 'Mike Doe', 'Jl. Raya Masjid, Sawahan gang 4', '2021-12-11', 'john-doe'),
(2, 'bnk', 'bkjb', 'jhvj', '2021-12-15', 'bnk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lyn_kk`
--

CREATE TABLE `lyn_kk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lyn_kk`
--

INSERT INTO `lyn_kk` (`id`, `nama`, `alamat`, `tanggal`, `slug`) VALUES
(1, 'John Doe', 'Jl. ABC, No.123, Desa CDE', '2021-12-08', 'john-doe'),
(3, 'knknk', 'kkjbk', '2021-12-09', 'knknk'),
(5, 'abc', 'anc', '2021-12-14', 'abc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lyn_ktp`
--

CREATE TABLE `lyn_ktp` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lyn_ktp`
--

INSERT INTO `lyn_ktp` (`id`, `nama`, `alamat`, `tanggal`, `slug`) VALUES
(1, 'John Doe', 'Jl. Mangga, Desa ABC', '2021-12-10', 'john-doe'),
(2, 'adcac', 'dvsdc', '2021-12-10', 'adcac'),
(3, 'Andi Firmansyah', 'Jl. Raya Masjid, Sawahan gang 4', '2021-12-11', 'andi-firmansyah'),
(4, 'kjbk', 'kbkj', '2021-12-14', 'kjbk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lyn_legalisir`
--

CREATE TABLE `lyn_legalisir` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lyn_legalisir`
--

INSERT INTO `lyn_legalisir` (`id`, `nama`, `alamat`, `tanggal`, `slug`) VALUES
(1, 'John Doe ', 'Jl. ABC, No. 123, Desa ABC', '2021-12-11', 'john-doe'),
(2, 'Sigit Prasetyo', 'sdvdcw', '2021-12-11', 'sigit-prasetyo'),
(4, 'kjk', 'fdh', '2021-12-14', 'kjk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lyn_sktm`
--

CREATE TABLE `lyn_sktm` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lyn_sktm`
--

INSERT INTO `lyn_sktm` (`id`, `nama`, `alamat`, `tanggal`, `slug`) VALUES
(1, 'John Doe', 'Jl.ABC, No.123, Desa ABC', '2021-12-11', 'john-doe'),
(2, 'adc', 'aeavw', '2021-12-11', 'adc'),
(3, 'Candra Kurniawan', 'sdvdcw', '2021-12-12', 'candra-kurniawan'),
(4, 'uhj', 'lkjn', '2021-12-14', 'uhj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1638715019, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `jenis`, `jumlah`, `slug`) VALUES
(1, 'Petani', 512, 'petani'),
(6, 'Pegawai Negeri Sipil', 253, 'pegawai-negeri-sipil'),
(7, 'POLRI', 194, 'polri'),
(8, 'TNI', 201, 'tni'),
(13, 'Dokter', 92, 'dokter');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `jenjang` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `jenjang`, `jumlah`, `slug`) VALUES
(1, 'PAUD', '260', 'paud'),
(2, 'TK/RA', '346', 'tk-ra'),
(11, 'SD', '561', 'sd'),
(12, 'SMP', '496', 'smp'),
(13, 'SMA', '476', 'sma'),
(14, 'Perguruan Tinggi ', '348', 'perguruan-tinggi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'example@example.com', 'marcellbintang', '$2y$10$fM9mfDFFhxdQDxfx2hfHdO4tlzg1Y3V10DIR5UCiXcwEvSLS63iiK', NULL, NULL, NULL, '2f2ffa82cc1a8c977e02ed09eb05dc9c', NULL, NULL, 0, 0, '2021-12-05 10:17:51', '2021-12-05 10:17:51', NULL),
(2, 'bintangsetiawan900@gmail.com', 'marcell bintang 13', '$2y$10$NNTLgtxYtMav62hF1h.u4O8kkJvRpSQPA1oPRmpy81HMzqIn15KqW', NULL, NULL, NULL, '47a2a07554633e8c7d1be3ab95164a32', NULL, NULL, 0, 0, '2021-12-05 10:26:42', '2021-12-05 10:26:42', NULL),
(3, 'hjnk@example.com', 'marcellbintang 12', '$2y$10$43jEkMdyEx90r.6DtXo5KObF7gGOYjCZvQZQYoDy/Hw7qpYgb.Zh2', NULL, NULL, NULL, 'bf991fae69129fb7126b3cb65454a254', NULL, NULL, 0, 0, '2021-12-05 10:31:47', '2021-12-05 10:31:47', NULL),
(4, 'bintanbh@gmail.com', 'marcell bintang 12', '$2y$10$uHhUN/ItcHYtpE1ecHKh9OaclBQ46VnNNsfScSScNUhBadHjg2f3q', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-05 10:36:10', '2021-12-05 10:36:10', NULL),
(5, 'bintangawan900@gmail.com', 'MarcellBintangSetiawan', '$2y$10$kVQdsKSJusiel/94lv9w/ODd.Hm874QQ/ZgG2IpgKX.yD1LMQAj9q', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-05 10:38:55', '2021-12-05 10:38:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lyn_kia`
--
ALTER TABLE `lyn_kia`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lyn_kk`
--
ALTER TABLE `lyn_kk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lyn_ktp`
--
ALTER TABLE `lyn_ktp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lyn_legalisir`
--
ALTER TABLE `lyn_legalisir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lyn_sktm`
--
ALTER TABLE `lyn_sktm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `lyn_kia`
--
ALTER TABLE `lyn_kia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lyn_kk`
--
ALTER TABLE `lyn_kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `lyn_ktp`
--
ALTER TABLE `lyn_ktp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `lyn_legalisir`
--
ALTER TABLE `lyn_legalisir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `lyn_sktm`
--
ALTER TABLE `lyn_sktm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
