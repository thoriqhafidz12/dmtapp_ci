-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2023 pada 04.52
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
(2, 17),
(2, 18);

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
(92, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-23 18:21:58', 1),
(93, '::1', 'admin123@gmail.com', 10, '2023-03-28 15:00:33', 1),
(94, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-28 22:08:05', 1),
(95, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-29 16:52:43', 1),
(96, '::1', 'admin123@gmail.com', 10, '2023-03-29 21:40:27', 1),
(97, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-30 21:37:37', 1),
(98, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-03-31 15:39:28', 1),
(99, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-04-01 00:04:31', 1),
(100, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-04-02 00:59:21', 1),
(101, '::1', 'abidomar28@yahoo.com', 17, '2023-04-02 01:16:52', 1),
(102, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-04-02 03:00:17', 1),
(103, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-04-02 23:35:37', 1),
(104, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-04-04 23:02:31', 1),
(105, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-04-06 22:23:10', 1),
(106, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-04-09 18:50:58', 1),
(107, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-04-12 17:15:13', 1),
(108, '::1', 'bprdhanamitratama12', NULL, '2023-04-17 21:57:41', 0),
(109, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-04-17 21:58:00', 1),
(110, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-04-18 19:43:35', 1),
(111, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-04-19 04:16:46', 1),
(112, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-04-19 15:27:42', 1),
(113, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-04-20 15:23:10', 1),
(114, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-04-29 11:49:02', 1),
(115, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-02 10:43:45', 1),
(116, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-03 10:20:29', 1),
(117, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-05 11:00:19', 1),
(118, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-08 13:07:03', 1),
(119, '::1', 'thoriqhafidz12@gmail.com', NULL, '2023-05-08 14:50:40', 0),
(120, '::1', 'user', NULL, '2023-05-08 14:50:48', 0),
(121, '::1', 'thoriqhafidz12', NULL, '2023-05-08 14:51:08', 0),
(122, '::1', 'thoriqhafidz12', NULL, '2023-05-08 14:51:43', 0),
(123, '::1', 'thoriqhafidz12', NULL, '2023-05-08 14:51:51', 0),
(124, '::1', 'thoriqhafidz12', NULL, '2023-05-08 14:51:59', 0),
(125, '::1', 'user', NULL, '2023-05-08 14:52:21', 0),
(126, '::1', 'user', NULL, '2023-05-08 14:52:28', 0),
(127, '::1', 'user', NULL, '2023-05-08 14:52:39', 0),
(128, '::1', 'admin123@gmail.com', 10, '2023-05-08 14:52:46', 1),
(129, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-09 10:47:13', 1),
(130, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-10 13:49:13', 1),
(131, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-11 20:26:06', 1),
(132, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-12 10:39:37', 1),
(133, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-12 14:30:17', 1),
(134, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-14 19:16:02', 1),
(135, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-14 20:20:15', 1),
(136, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-15 18:11:18', 1),
(137, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-16 19:40:30', 1),
(138, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-17 18:18:55', 1),
(139, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-18 19:24:11', 1),
(140, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-19 10:10:32', 1),
(141, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-23 09:36:41', 1),
(142, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-26 12:46:33', 1),
(143, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-26 20:02:13', 1),
(144, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-28 00:55:21', 1),
(145, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-28 09:17:23', 1),
(146, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-28 23:18:57', 1),
(147, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-30 12:44:09', 1),
(148, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-30 15:52:40', 1),
(149, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-30 18:19:54', 1),
(150, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-30 21:16:57', 1),
(151, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-05-31 11:09:24', 1),
(152, '::1', 'bprdhanamitratama12', NULL, '2023-06-02 12:30:12', 0),
(153, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-06-02 12:30:17', 1),
(154, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-06-12 21:25:48', 1),
(155, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-06-13 23:14:44', 1),
(156, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-06-14 15:46:38', 1),
(157, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-06-14 18:39:08', 1),
(158, '::1', 'admin123@gmail.com', 10, '2023-06-14 18:39:17', 1),
(159, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-06-14 18:40:49', 1),
(160, '::1', 'user', NULL, '2023-06-14 18:41:28', 0),
(161, '::1', 'user', NULL, '2023-06-14 18:41:34', 0),
(162, '::1', 'user', NULL, '2023-06-14 18:41:43', 0),
(163, '::1', 'user', NULL, '2023-06-14 18:42:04', 0),
(164, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-06-14 18:42:15', 1),
(165, '::1', 'abidomar28@yahoo.com', NULL, '2023-06-14 18:42:43', 0),
(166, '::1', 'user', NULL, '2023-06-14 18:42:51', 0),
(167, '::1', 'user', NULL, '2023-06-14 18:43:01', 0),
(168, '::1', 'user', NULL, '2023-06-14 18:43:19', 0),
(169, '::1', 'thoriqhafidz12@gmail.com', 18, '2023-06-14 18:44:15', 1),
(170, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-06-14 18:48:53', 1),
(171, '::1', 'thoriqhafidz12@gmail.com', 18, '2023-06-14 18:49:23', 1),
(172, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-06-14 18:55:39', 1),
(173, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-06-15 10:51:00', 1),
(174, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-06-19 13:15:14', 1),
(175, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-06-19 19:13:47', 1),
(176, '::1', 'bprdhanamitratama12', NULL, '2023-06-19 22:10:51', 0),
(177, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-06-19 22:12:51', 1),
(178, '::1', 'admin123@gmail.com', 10, '2023-06-19 22:13:00', 1),
(179, '::1', 'thoriqhafidz12@yahoo.com', 9, '2023-08-15 09:51:03', 1);

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
-- Struktur dari tabel `kredit`
--

CREATE TABLE `kredit` (
  `id` int(11) NOT NULL,
  `stts_pnd` varchar(255) NOT NULL,
  `produk` varchar(30) NOT NULL,
  `plafon` bigint(255) NOT NULL,
  `jangka` bigint(25) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT current_timestamp(),
  `tgl_survey` date DEFAULT NULL,
  `tgl_komite` date DEFAULT NULL,
  `tgl_realisasi` date DEFAULT NULL,
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `proses` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `nama_pem` varchar(255) NOT NULL,
  `jenis_pem` varchar(255) NOT NULL,
  `nama_pang` varchar(255) NOT NULL,
  `ttl1` text NOT NULL,
  `no_ktp` bigint(255) DEFAULT NULL,
  `foto_ktp` varchar(255) DEFAULT NULL,
  `mas_ber` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `pend_ter` varchar(255) NOT NULL,
  `profesi` varchar(255) NOT NULL,
  `usaha` varchar(255) NOT NULL,
  `status_kaw` varchar(255) NOT NULL,
  `jumlah_tang` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) NOT NULL,
  `nama_pas` varchar(255) DEFAULT NULL,
  `status_pas` varchar(255) DEFAULT NULL,
  `ttl_pas` varchar(255) DEFAULT NULL,
  `no_ktp2` bigint(255) DEFAULT NULL,
  `jenis_pas` varchar(255) DEFAULT NULL,
  `masa_ber2` varchar(255) DEFAULT NULL,
  `pend_ter2` varchar(255) DEFAULT NULL,
  `profesi2` varchar(255) DEFAULT NULL,
  `usaha2` varchar(255) DEFAULT NULL,
  `no_telp2` varchar(255) DEFAULT NULL,
  `jl` text NOT NULL,
  `rtrw` text NOT NULL,
  `kec` varchar(255) NOT NULL,
  `kab` varchar(255) NOT NULL,
  `no_telp3` bigint(255) NOT NULL,
  `kopos` bigint(255) NOT NULL,
  `hp` bigint(255) NOT NULL,
  `status_ting` varchar(255) NOT NULL,
  `lama` bigint(255) NOT NULL,
  `jl2` text NOT NULL,
  `rtrw2` text NOT NULL,
  `kec2` varchar(255) NOT NULL,
  `kab2` varchar(255) NOT NULL,
  `no_telp4` bigint(255) NOT NULL,
  `kopos2` bigint(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `nama_badan` varchar(255) NOT NULL,
  `jenis_keg` varchar(255) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kel` varchar(255) NOT NULL,
  `rtrw3` text NOT NULL,
  `kec3` varchar(255) NOT NULL,
  `kab3` varchar(255) NOT NULL,
  `no_telp5` bigint(255) NOT NULL,
  `npwp` text DEFAULT NULL,
  `siup` text DEFAULT NULL,
  `lama2` bigint(255) NOT NULL,
  `omset` bigint(255) NOT NULL,
  `laba` bigint(255) DEFAULT NULL,
  `informasi` varchar(255) NOT NULL,
  `foto_agunan` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) NOT NULL,
  `angsuran` bigint(255) NOT NULL,
  `takover` varchar(255) NOT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `ttd_daftar` varchar(255) DEFAULT NULL,
  `ttd_petugas` varchar(255) DEFAULT NULL,
  `ttd_slick` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kredit`
--

INSERT INTO `kredit` (`id`, `stts_pnd`, `produk`, `plafon`, `jangka`, `tgl_daftar`, `tgl_survey`, `tgl_komite`, `tgl_realisasi`, `id_petugas`, `nama_petugas`, `proses`, `status`, `nama_pem`, `jenis_pem`, `nama_pang`, `ttl1`, `no_ktp`, `foto_ktp`, `mas_ber`, `nama_ibu`, `pend_ter`, `profesi`, `usaha`, `status_kaw`, `jumlah_tang`, `no_telp`, `nama_pas`, `status_pas`, `ttl_pas`, `no_ktp2`, `jenis_pas`, `masa_ber2`, `pend_ter2`, `profesi2`, `usaha2`, `no_telp2`, `jl`, `rtrw`, `kec`, `kab`, `no_telp3`, `kopos`, `hp`, `status_ting`, `lama`, `jl2`, `rtrw2`, `kec2`, `kab2`, `no_telp4`, `kopos2`, `tipe`, `nama_badan`, `jenis_keg`, `bidang`, `alamat`, `kel`, `rtrw3`, `kec3`, `kab3`, `no_telp5`, `npwp`, `siup`, `lama2`, `omset`, `laba`, `informasi`, `foto_agunan`, `tujuan`, `angsuran`, `takover`, `bank`, `ttd_daftar`, `ttd_petugas`, `ttd_slick`) VALUES
(34, 'Realisasi', 'Mingguan', 10000000, 12, '2023-06-19 07:58:45', '2023-06-20', '2023-06-23', '2023-06-26', 9, 'ADMIN BPR', 'Sedang diproses', 'Kunjungan Petugas', 'Thoriq Hafidzuzumar', 'Laki-laki', 'Thoriq', 'Blora, 05-09-01', 3316090509010001, '1687161705_f709ce5839fa887ddc35.jpg', NULL, 'Sri', 'S1', 'Mahasiswa', '', 'Belum Menikah', '', '085156796874', '', '', '', 0, '', NULL, '', '', '', '', 'Jl. Sinto No 64B', '09 / 01', 'Blora', 'Blora', 85156796874, 58219, 85642394328, 'Ditempati', 4, 'Tegalgunung', '08 / 01', 'Blora ', 'Blora', 85156796874, 58219, 'PNS', 'BAPEDDA', 'Pegawai', 'Sekertaris', 'Jl.Sinto No 64B', 'Karangjati', '09 / 01', 'Blora', 'Blora', 85156796874, '08.178.554.2-123.321', '', 2, 1000000, 0, 'BPKP Motor Scoopy tahun 2018', '1687161705_e73bdf78e232f66ad53a.jpeg', 'Membuka Usaha Makanan', 1000000, 'TIDAK', '', '1687161705_d7d0c9afb74d649267ad.png', '1687161705_7e3f57015c36d7dfd188.png', '1687161705_ffab5b74cdbaae220739.png');

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
(32, 10, '2023-03-19 17:54:57', 'USER 1', 'Thoriq Hafidzuzumar', 'Jl.Sinto No 64B, Blora', 'Prospek', 'adadeh', '1679223322_e1ffde38d31fccd569a2.jpg'),
(33, 9, '2023-04-01 00:07:22', 'ADMIN BPR', 'Thoriq Hafidzuzumar', 'Jl.Sinto No 64B, Blora', 'Prospek', 'adadeh', '1680282470_ce61373f41fcbd2fe782.jpg'),
(34, 9, '2023-04-01 00:09:19', 'ADMIN BPR', 'Thoriq Hafidzuzumar', 'Jl.Sinto No 64B, Blora', 'Prospek', 'adadeh', '1680282576_57e645ffac2c719e172e.jpg'),
(35, 9, '2023-04-01 00:16:12', 'ADMIN BPR', 'Thoriq Hafidzuzumar', 'Jl.Sinto No 64B, Blora', 'Survey', 'adadeh', '1680282993_e95e2a7e9bb5f767c919.jpg'),
(36, 9, '2023-04-01 00:25:00', 'ADMIN BPR', 'Thoriq Hafidzuzumar', 'Jl.Sinto No 64B, Blora', 'Survey', 'adadeh', '1680283513_ce08ecaab0d26a15a5b6.jpg'),
(37, 9, '2023-04-01 00:29:18', 'ADMIN BPR', 'Thoriq Hafidzuzumar', 'Jl.Sinto No 64B, Blora', 'Survey', 'adadeh', '1680283769_a1f37c0fd3ea5ca57bf9.jpg'),
(38, 9, '2023-04-01 00:30:38', 'ADMIN BPR', 'Thoriq Hafidzuzumar', 'Jl.Sinto No 64B, Blora', 'Survey', 'adadeh', '1680283849_25fb16f21cbebb204864.jpg'),
(41, 9, '2023-04-01 00:35:31', 'ADMIN BPR', 'Thoriq Hafidzuzumar', 'Jl.Sinto No 64B, Blora', 'Survey', 'adadeh', '1680284151_899ec4afb287ec229f33.jpg'),
(42, 9, '2023-04-01 00:36:34', 'ADMIN BPR', 'Thoriq Hafidzuzumar', 'Jl.Sinto No 64B, Blora', 'Survey', 'adadeh', '1680284205_414f89ef9939d3cc7d77.jpg'),
(112, 10, '2023-05-08 14:56:56', 'USER 1', 'HIHIHI', 'adadapkdpa40324asldalkdmaklmdl2kklal', 'Prospek', 'Janji dari ibu vivi tidak di tepati karena  beliau tidak menyetujui perjanjian dari yang sudah di tetapkan sebelumnya. maka dari itu harus di lakukan persidangan di peradilan blora kota.', '1683532632_807348677a4adc90dd23.jpg');

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
(17, 'abidomar28@yahoo.com', 'Petugas 1', 'default.svg', 'user', '$2y$10$H/DUZXqUoWyrbHcDDAScUuRkf2v90etRHLhXI6MAGzAGVlROG4VLC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-03-20 18:52:52', '2023-03-20 18:52:52', NULL),
(18, 'thoriqhafidz12@gmail.com', 'Petugas2', 'default.svg', 'thoriqhafidz11', '$2y$10$p1EgyztauVbGyVvfR5A1IunopbYD1MyG.eaFYtwVUbGXYwF6lhv3G', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-06-14 18:44:05', '2023-06-14 18:44:05', NULL);

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
-- Indeks untuk tabel `kredit`
--
ALTER TABLE `kredit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_petugas` (`id_petugas`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

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
-- AUTO_INCREMENT untuk tabel `kredit`
--
ALTER TABLE `kredit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `kunker`
--
ALTER TABLE `kunker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
