-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Mar 2023 pada 14.30
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmt_apps`
--

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

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Aministrator'),
(2, 'User', 'Petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 9),
(2, 10),
(2, 17);

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
(1, '::1', 'thoriqhafidz12', NULL, '2023-03-02 11:33:00', 0),
(2, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-02 11:35:01', 1),
(3, '::1', 'dhanamitratama12', NULL, '2023-03-02 11:53:45', 0),
(4, '::1', 'dhanamitratama12', NULL, '2023-03-02 11:54:02', 0),
(5, '::1', 'dhanamitratama12', NULL, '2023-03-02 11:56:09', 0),
(6, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-02 12:02:26', 1),
(7, '::1', 'dhanamitratama12', NULL, '2023-03-02 12:14:16', 0),
(8, '::1', 'bprdhanamitratama', NULL, '2023-03-02 12:21:55', 0),
(9, '::1', 'dhanamitratama12', NULL, '2023-03-02 12:22:11', 0),
(10, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-02 12:23:30', 1),
(11, '::1', 'admin123@gmail.com', 10, '2023-03-02 12:23:50', 1),
(12, '::1', 'thoriqhafidz12', NULL, '2023-03-02 12:24:29', 0),
(13, '::1', 'admin123@gmail.com', 10, '2023-03-02 12:24:37', 1),
(14, '::1', 'admin123@gmail.com', 10, '2023-03-02 12:27:17', 1),
(15, '::1', 'thoriqhafidz11@gmail.com', 11, '2023-03-02 12:37:15', 1),
(16, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-02 12:43:52', 1),
(17, '::1', 'thoriqhafidz11@gmail.com', 11, '2023-03-02 12:44:06', 1),
(18, '::1', 'admin123@gmail.com', 10, '2023-03-03 08:23:04', 1),
(19, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-03 08:25:36', 1),
(20, '::1', 'admin12345', NULL, '2023-03-03 10:09:09', 0),
(21, '::1', 'thoriqhafidz11@gmail.com', 11, '2023-03-03 10:09:28', 1),
(22, '::1', 'admin123@gmail.com', 10, '2023-03-03 12:01:37', 1),
(23, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-03 12:02:27', 1),
(24, '::1', 'admin123@gmail.com', 10, '2023-03-03 12:04:28', 1),
(25, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-03 12:34:31', 1),
(26, '::1', 'admin123@gmail.com', 10, '2023-03-03 12:35:56', 1),
(27, '::1', 'admin123@gmail.com', 10, '2023-03-03 12:36:23', 1),
(28, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-03 12:39:01', 1),
(29, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-03 13:18:35', 1),
(30, '::1', 'admin123@gmail.com', 10, '2023-03-03 13:45:36', 1),
(31, '::1', 'admin123@gmail.com', 10, '2023-03-03 19:38:29', 1),
(32, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-03 19:39:13', 1),
(33, '::1', 'admin123@gmail.com', 10, '2023-03-03 19:40:48', 1),
(34, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-03 19:41:12', 1),
(35, '::1', 'admin123@gmail.com', 10, '2023-03-03 21:07:21', 1),
(36, '::1', 'thoriqhafidz11@gmail.com', 11, '2023-03-03 21:07:50', 1),
(37, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-03 21:08:02', 1),
(38, '::1', 'asdadas@gmail.com', 12, '2023-03-03 21:09:19', 1),
(39, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-03 21:09:33', 1),
(40, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-03 21:10:41', 1),
(41, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-04 11:57:04', 1),
(42, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-05 08:40:53', 1),
(43, '::1', 'sadsdadasd@gmail.com', 15, '2023-03-05 08:53:26', 1),
(44, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-05 08:53:47', 1),
(45, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-05 08:59:27', 1),
(46, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-05 16:34:19', 1),
(47, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-07 07:07:40', 1),
(48, '::1', 'admin123@gmail.com', 10, '2023-03-07 07:08:08', 1),
(49, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-07 09:05:07', 1),
(50, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-07 12:24:20', 1),
(51, '::1', 'thoriqhafidz12', NULL, '2023-03-07 20:27:08', 0),
(52, '::1', 'admin123@gmail.com', 10, '2023-03-07 20:27:14', 1),
(53, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-07 20:34:34', 1),
(54, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-08 21:02:56', 1),
(55, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-08 21:08:22', 1),
(56, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-08 21:35:37', 1),
(57, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-08 21:37:18', 1),
(58, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-08 22:14:53', 1),
(59, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-08 22:19:20', 1),
(60, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-08 22:26:54', 1),
(61, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-08 22:27:18', 1),
(62, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-08 22:28:04', 1),
(63, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-08 22:32:12', 1),
(64, '::1', 'thoriqhafidz12@gmail.com', NULL, '2023-03-09 13:34:42', 0),
(65, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-09 14:24:22', 1),
(66, '::1', 'admin123@gmail.com', 10, '2023-03-09 14:37:28', 1),
(67, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-10 13:44:43', 1),
(68, '::1', 'admin123@gmail.com', 10, '2023-03-10 15:54:57', 1),
(69, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-10 15:57:01', 1),
(70, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-10 19:49:39', 1),
(71, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-10 19:52:12', 1),
(72, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-11 20:23:42', 1),
(73, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-12 21:30:17', 1),
(74, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-13 13:28:05', 1),
(75, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-14 19:01:27', 1),
(76, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-18 23:52:46', 1),
(77, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-19 00:38:19', 1),
(78, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-19 14:24:51', 1),
(79, '::1', 'admin123@gmail.com', 10, '2023-03-19 17:29:39', 1),
(80, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-19 18:03:21', 1),
(81, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-20 18:25:30', 1),
(82, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-20 18:39:21', 1),
(83, '::1', 'abidomar28@yahoo.com', 17, '2023-03-20 18:53:01', 1),
(84, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-20 19:55:00', 1),
(85, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-20 23:31:13', 1),
(86, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-20 23:36:23', 1),
(87, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-20 23:38:11', 1),
(88, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-20 23:51:51', 1),
(89, '::1', 'bprdhanamitratama12', NULL, '2023-03-21 21:16:01', 0),
(90, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-21 21:16:09', 1),
(91, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-21 21:27:39', 1),
(92, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-23 18:21:58', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-user', 'Manage All User'),
(2, 'manage-profile', 'Manage User Profile');

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
-- Struktur dari tabel `info_agunan`
--

CREATE TABLE `info_agunan` (
  `id_agunan` int(11) NOT NULL,
  `id_pinjaman` int(11) NOT NULL,
  `informasi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info_agunan`
--

INSERT INTO `info_agunan` (`id_agunan`, `id_pinjaman`, `informasi`) VALUES
(1, 1, 'Rumah seluas 2000 meter'),
(2, 2, 'HAhahahaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_keuangan`
--

CREATE TABLE `info_keuangan` (
  `id_keuangan` int(11) NOT NULL,
  `id_pinjaman` int(11) NOT NULL,
  `tipe` varchar(25) NOT NULL,
  `nama_badan` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kel` varchar(255) NOT NULL,
  `rtrw` varchar(25) NOT NULL,
  `kec` varchar(255) NOT NULL,
  `kab` varchar(255) NOT NULL,
  `telp` bigint(25) NOT NULL,
  `npwp` bigint(25) DEFAULT NULL,
  `siup` bigint(25) DEFAULT NULL,
  `lama` int(25) NOT NULL,
  `omset` bigint(255) NOT NULL,
  `laba` bigint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info_keuangan`
--

INSERT INTO `info_keuangan` (`id_keuangan`, `id_pinjaman`, `tipe`, `nama_badan`, `jenis`, `bidang`, `alamat`, `kel`, `rtrw`, `kec`, `kab`, `telp`, `npwp`, `siup`, `lama`, `omset`, `laba`) VALUES
(1, 1, 'SWASTA', 'BPR Dhanamitratama', 'Bank', 'AO', 'Jl nusantara no 209 ', 'Blora', '12/20', 'Blora', 'Blora', 89384930312, 3242041394193084, 10283928901481, 25, 3000000, NULL),
(2, 2, 'PNS', 'asd', 'asd', 'da', 'asd', 'ads', '08/20', 'afd', 'sdf', 3424, NULL, NULL, 15, 6000000, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_lain`
--

CREATE TABLE `info_lain` (
  `id_info` int(11) NOT NULL,
  `id_pinjaman` int(11) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `angsuran` int(255) NOT NULL,
  `takover` varchar(25) NOT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `ttd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info_lain`
--

INSERT INTO `info_lain` (`id_info`, `id_pinjaman`, `tujuan`, `angsuran`, `takover`, `bank`, `ttd`) VALUES
(1, 1, 'Membeli Mobil', 200000, 'Tidak', '', 'img.jpg'),
(2, 2, 'dfs', 5600000, 'Tidak', NULL, 'sdf.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ktt_pemohon`
--

CREATE TABLE `ktt_pemohon` (
  `id_ktt` int(11) NOT NULL,
  `id_pinjaman` int(11) NOT NULL,
  `jl1` varchar(255) NOT NULL,
  `rtrw1` varchar(50) NOT NULL,
  `kec1` varchar(30) NOT NULL,
  `kab1` varchar(255) NOT NULL,
  `telp1` bigint(30) NOT NULL,
  `kopos1` bigint(11) NOT NULL,
  `hp` bigint(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `lama` int(50) NOT NULL,
  `jl2` varchar(255) NOT NULL,
  `rtrw2` varchar(25) NOT NULL,
  `kec2` varchar(255) NOT NULL,
  `kab2` varchar(255) NOT NULL,
  `telp2` bigint(25) NOT NULL,
  `kopos2` bigint(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ktt_pemohon`
--

INSERT INTO `ktt_pemohon` (`id_ktt`, `id_pinjaman`, `jl1`, `rtrw1`, `kec1`, `kab1`, `telp1`, `kopos1`, `hp`, `status`, `lama`, `jl2`, `rtrw2`, `kec2`, `kab2`, `telp2`, `kopos2`) VALUES
(1, 1, 'JL. Sinto No 64B', '06/01', 'Blora', 'Blora', 85641227028, 5816782, 85641227027, 'Ditempati', 15, 'JL. Sinto No 64B', '06/01', 'Blora', 'Blora', 87362873923, 523019),
(2, 2, 'sd', '06/01', 'Blora', 'asd', 85641227028, 5816782, 85641227027, 'Lama', 15, 'afd', '06/01', 'wqe', 'wqe', 87362873923, 523019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunker`
--

CREATE TABLE `kunker` (
  `id` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tanggal_bertamu` datetime DEFAULT current_timestamp(),
  `nama_petugas` varchar(255) DEFAULT NULL,
  `nama_debitur` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `hasil` text DEFAULT NULL,
  `gamlap` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kunker`
--

INSERT INTO `kunker` (`id`, `id_petugas`, `tanggal_bertamu`, `nama_petugas`, `nama_debitur`, `alamat`, `tujuan`, `hasil`, `gamlap`) VALUES
(22, 9, '2023-03-10 16:53:22', 'ADMIN BPR', 'm', 'adadapkdpa40324asldalkdmaklmdl2kklal', 'Survey', 'd', '1678442012_047e009381746d0c9513.jpg'),
(30, 10, '2023-03-19 17:46:47', 'USER 1', 'Thoriq Hafidzuzumar', 'Jl.Sinto No 64B, Blora', 'Prospek', 'adadeh', '1679222817_b738a91124890f1e9935.png'),
(31, 10, '2023-03-19 17:47:23', 'USER 1', 'Thoriq Hafidzuzumar', 'Jl.Sinto No 64B, Blora', 'Prospek', 'adadeh', '1679222871_3e766dc92fa0219da9fb.jpg'),
(32, 10, '2023-03-19 17:54:57', 'USER 1', 'Thoriq Hafidzuzumar', 'Jl.Sinto No 64B, Blora', 'Prospek', 'adadeh', '1679223322_e1ffde38d31fccd569a2.jpg');

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
(2, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1677737646, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemohon`
--

CREATE TABLE `pemohon` (
  `id_pemohon` int(11) NOT NULL,
  `id_pinjaman` int(11) NOT NULL,
  `nama_ktp` varchar(255) NOT NULL,
  `jenis1` varchar(50) NOT NULL,
  `nama_panggil` varchar(25) NOT NULL,
  `ttl1` varchar(25) NOT NULL,
  `no_ktp1` bigint(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `pend_ter1` varchar(255) NOT NULL,
  `profesi1` varchar(255) NOT NULL,
  `usaha1` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `jumlah_tangg` int(11) DEFAULT NULL,
  `no_telp1` bigint(255) NOT NULL,
  `nama_pas` varchar(255) DEFAULT NULL,
  `jenis2` varchar(50) NOT NULL,
  `status_pas` varchar(255) DEFAULT NULL,
  `ttl2` varchar(255) DEFAULT NULL,
  `no_ktp2` bigint(255) DEFAULT NULL,
  `pend_ter2` varchar(255) DEFAULT NULL,
  `profesi2` varchar(255) DEFAULT NULL,
  `usaha2` varchar(255) DEFAULT NULL,
  `no_telp2` bigint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemohon`
--

INSERT INTO `pemohon` (`id_pemohon`, `id_pinjaman`, `nama_ktp`, `jenis1`, `nama_panggil`, `ttl1`, `no_ktp1`, `nama_ibu`, `pend_ter1`, `profesi1`, `usaha1`, `status`, `jumlah_tangg`, `no_telp1`, `nama_pas`, `jenis2`, `status_pas`, `ttl2`, `no_ktp2`, `pend_ter2`, `profesi2`, `usaha2`, `no_telp2`) VALUES
(1, 1, 'Umar Sodig', 'Laki-laki', 'Sodig', 'Blora, 05-09-2001', 331090509010001, 'Siti Sundari', 'SMA Sederajat', 'Karyawan Swasta', 'Ternak Ayam', 'Kawin', 4, 85641227028, 'Sri Rejeki', 'Perempuan', 'Kawin', 'Blora, 06-09-001', 331090905010001, 'Diploma 3', 'Ibu Rumah Tangga', NULL, 87623748390),
(2, 2, 'das', 'Perempuan', 'asd', 'ad', 331090509010001, 'asd', 'ad', 'asd', 'asd', 'ads', 4, 85641227028, 'asd', 'Laki-laki', 'ads', 'asd', 331090905010001, 'asd', 'ad', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `plafon` int(255) NOT NULL,
  `jangka` int(50) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `proses` text NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `produk`, `plafon`, `jangka`, `id_petugas`, `nama_petugas`, `proses`, `status`) VALUES
(1, 'Bulanan', 10000000, 5, 10, 'Thoriq Hafidzuzumar', 'Sedang dalam tinjauan petugas', 'BARU'),
(2, 'Mingguan', 2500000, 40, 9, 'Admin BPR', 'ads', 'Lama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `email`, `fullname`, `user_image`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'thoriqhafidz12@yahoo.com', 'ADMIN BPR', 'default.svg', 'bprdhanamitratama12', '$2y$10$vpsE48NIY0vtkuHsLOGHEOq2iAiyjMTTXtEfQGOoCDPN.XJ.nXuee', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-03-02 11:34:49', '2023-03-02 11:34:49', NULL),
(10, 'admin123@gmail.com', 'USER 1', 'default.svg', 'thoriqhafidz12', '$2y$10$s38gESkOlHZ5UJNIuDe09.5PRkeAMmsHvXOgA3oHJEwWBXMWTUwNW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-03-02 12:06:11', '2023-03-02 12:06:11', NULL),
(17, 'abidomar28@yahoo.com', '', '', 'user', '$2y$10$H/DUZXqUoWyrbHcDDAScUuRkf2v90etRHLhXI6MAGzAGVlROG4VLC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-03-20 18:52:52', '2023-03-20 18:52:52', NULL);

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `info_agunan`
--
ALTER TABLE `info_agunan`
  ADD PRIMARY KEY (`id_agunan`),
  ADD KEY `id_pemohon` (`id_pinjaman`);

--
-- Indeks untuk tabel `info_keuangan`
--
ALTER TABLE `info_keuangan`
  ADD PRIMARY KEY (`id_keuangan`),
  ADD KEY `id_pemohon` (`id_pinjaman`);

--
-- Indeks untuk tabel `info_lain`
--
ALTER TABLE `info_lain`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `id_pemohon` (`id_pinjaman`);

--
-- Indeks untuk tabel `ktt_pemohon`
--
ALTER TABLE `ktt_pemohon`
  ADD PRIMARY KEY (`id_ktt`),
  ADD KEY `id_pemohon` (`id_pinjaman`);

--
-- Indeks untuk tabel `kunker`
--
ALTER TABLE `kunker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`id_pemohon`),
  ADD KEY `id_pinjaman` (`id_pinjaman`);

--
-- Indeks untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`),
  ADD KEY `id_petugas` (`id_petugas`);

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
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT untuk tabel `info_agunan`
--
ALTER TABLE `info_agunan`
  MODIFY `id_agunan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `info_keuangan`
--
ALTER TABLE `info_keuangan`
  MODIFY `id_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `info_lain`
--
ALTER TABLE `info_lain`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ktt_pemohon`
--
ALTER TABLE `ktt_pemohon`
  MODIFY `id_ktt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kunker`
--
ALTER TABLE `kunker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemohon`
--
ALTER TABLE `pemohon`
  MODIFY `id_pemohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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

--
-- Ketidakleluasaan untuk tabel `info_agunan`
--
ALTER TABLE `info_agunan`
  ADD CONSTRAINT `info_agunan_ibfk_1` FOREIGN KEY (`id_pinjaman`) REFERENCES `pinjaman` (`id_pinjaman`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `info_keuangan`
--
ALTER TABLE `info_keuangan`
  ADD CONSTRAINT `info_keuangan_ibfk_1` FOREIGN KEY (`id_pinjaman`) REFERENCES `pinjaman` (`id_pinjaman`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `info_lain`
--
ALTER TABLE `info_lain`
  ADD CONSTRAINT `info_lain_ibfk_1` FOREIGN KEY (`id_pinjaman`) REFERENCES `pinjaman` (`id_pinjaman`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ktt_pemohon`
--
ALTER TABLE `ktt_pemohon`
  ADD CONSTRAINT `ktt_pemohon_ibfk_1` FOREIGN KEY (`id_pinjaman`) REFERENCES `pinjaman` (`id_pinjaman`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemohon`
--
ALTER TABLE `pemohon`
  ADD CONSTRAINT `pemohon_ibfk_1` FOREIGN KEY (`id_pinjaman`) REFERENCES `pinjaman` (`id_pinjaman`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
