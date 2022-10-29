-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 05:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_stokdarah`
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
(5, '2022_04_17_090201_stoks', 2),
(6, '2022_04_17_090911_transaction', 2);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sisas`
--

CREATE TABLE `sisas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pouch_number` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` enum('A','B','O','AB') COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `date_of_entry` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sisas`
--

INSERT INTO `sisas` (`id`, `code`, `pouch_number`, `donor`, `blood`, `total`, `date_of_entry`, `created_at`, `updated_at`) VALUES
(73, 'DRH1000001', 'P0752355', 'Sudirman', 'A', 350, '2022-05-02', '2022-06-29 15:02:37', '2022-08-14 07:25:08'),
(74, 'DRH1000002', 'P07758406', 'MUGIONO', 'O', 350, '2022-05-02', '2022-06-29 15:38:52', '2022-06-29 15:38:52'),
(75, 'DRH1000003', 'P0759783', 'SYARIFUDDIN', 'A', 344, '2022-05-02', '2022-06-29 15:38:53', '2022-08-13 20:31:32'),
(76, 'DRH1000004', 'P0759960', 'USMAN', 'O', 350, '2022-05-02', '2022-06-29 15:38:53', '2022-06-29 15:38:53'),
(77, 'DRH1000005', 'P0701276', 'ABD ASIS', 'A', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-08-13 20:17:02'),
(78, 'DRH1000006', 'P0759919', 'SULKIPLI', 'B', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(79, 'DRH1000007', 'P0758705', 'PURJOHARI', 'B', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(80, 'DRH1000008', 'P0701716', 'MUH ISRA', 'O', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(81, 'DRH1000009', 'P0759982', 'FERY HARJONO', 'O', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(82, 'DRH1000010', 'P0700120', 'ANDI MUH ADI', 'O', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(83, 'DRH1000011', 'P0799929', 'H.M.AGUS', 'O', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(84, 'DRH1000012', 'P0758847', 'AGNA GAMDIA H', 'B', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(85, 'DRH1000013', 'P0759902', 'SUDIRMAN', 'A', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-08-13 20:11:44'),
(86, 'DRH1000014', 'P0754698', 'AGUS SALIM SAPE', 'O', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(87, 'DRH1000015', 'P0702106', 'HERWADI', 'B', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(88, 'DRH1000016', 'P0759387', 'LIKI', 'A', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-08-13 20:18:04'),
(89, 'DRH1000017', 'P0702393', 'EDI SUDIATNO', 'B', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(90, 'DRH1000018', 'P0759911', 'HERMAN', 'O', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(91, 'DRH1000019', 'P0759389', 'AGUSTANEPENDI', 'B', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(92, 'DRH1000020', 'P0758908', 'AMRAN', 'O', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(93, 'DRH1000021', 'P0759296', 'M.SJANTO', 'O', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(94, 'DRH1000022', 'P0759650', 'IMRAN', 'A', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-08-13 20:11:44'),
(95, 'DRH1000023', 'P0740681', 'BULSARNAIN', 'A', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-08-13 20:20:00'),
(96, 'DRH1000024', 'P0758917', 'SAHARUASTI', 'O', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(97, 'DRH1000025', 'P0702092', 'UYATRIR', 'B', 350, '2022-05-02', '2022-06-29 15:38:54', '2022-06-29 15:38:54'),
(98, 'DRH1000026', 'P0700127', 'MARSONI', 'B', 350, '2022-05-02', '2022-06-29 15:38:55', '2022-06-29 15:38:55'),
(99, 'DRH1000027', 'P0758899', 'ASWARMUAS', 'B', 350, '2022-05-02', '2022-06-29 15:38:55', '2022-06-29 15:38:55'),
(100, 'DRH1000028', 'P0759982', 'KIRUL', 'B', 350, '2022-05-02', '2022-06-29 15:38:55', '2022-06-29 15:38:55'),
(101, 'DRH1000029', 'P0700189', 'IBASBI', 'O', 350, '2022-05-02', '2022-06-29 15:38:55', '2022-06-29 15:38:55'),
(102, 'DRH1000030', 'P0901736', 'A.SAHWAL A.SH', 'B', 350, '2022-05-02', '2022-06-29 15:38:55', '2022-06-29 15:38:55'),
(103, 'DRH1000031', 'P0799862', 'NUR ANDI', 'O', 350, '2022-05-02', '2022-06-29 15:38:55', '2022-06-29 15:38:55'),
(104, 'DRH1000032', 'P0758768', 'ABD ROHIM ROY', 'AB', 350, '2022-05-02', '2022-06-29 15:38:55', '2022-06-29 15:38:55'),
(105, 'DRH1000033', 'P0759719', 'A. AKRAR CPD', 'A', 350, '2022-05-02', '2022-06-29 15:38:55', '2022-08-13 20:11:45'),
(106, 'DRH1000034', 'P0758520', 'ROY DIMA', 'B', 350, '2022-05-02', '2022-06-29 15:38:55', '2022-06-29 15:38:55'),
(107, 'DRH1000035', 'P0701544', 'HAMUKLIS .S', 'B', 350, '2022-05-02', '2022-06-29 15:38:55', '2022-06-29 15:38:55'),
(108, 'DRH1000036', 'U93P9876', 'MUH YUKANSYAH', 'O', 350, '2022-05-27', '2022-06-29 16:44:35', '2022-06-29 16:44:35'),
(109, 'DRH1000037', 'U930194', 'A. WARDIMAN', 'O', 350, '2022-05-27', '2022-06-29 16:44:35', '2022-06-29 16:44:35'),
(110, 'DRH1000038', 'U93U0456', 'MUH IDRIS', 'B', 350, '2022-05-27', '2022-06-29 16:44:35', '2022-06-29 16:44:35'),
(111, 'DRH1000039', 'U93U0471', 'NY JUNAEDI', 'B', 350, '2022-05-27', '2022-06-29 16:44:35', '2022-06-29 16:44:35'),
(112, 'DRH1000040', 'U9351984', 'MIFTA', 'AB', 350, '2022-05-27', '2022-06-29 16:44:35', '2022-06-29 16:44:35'),
(113, 'DRH1000041', 'U9350371', 'AGUNG RACHONAN', 'O', 350, '2022-05-27', '2022-06-29 16:44:35', '2022-06-29 16:44:35'),
(114, 'DRH1000042', 'U93U1084', 'DM ILHAM', 'A', 350, '2022-05-27', '2022-06-29 16:44:35', '2022-08-13 20:11:45'),
(115, 'DRH1000043', 'U93U1197', 'AYULIANA', 'B', 350, '2022-05-27', '2022-06-29 16:44:35', '2022-06-29 16:44:35'),
(116, 'DRH1000044', 'U93U7019', 'Meli Rahmi S', 'B', 350, '2022-05-27', '2022-06-29 16:44:35', '2022-06-29 16:44:35'),
(117, 'DRH1000045', 'U93U1109', 'A. DEWI RATNASARI', 'O', 350, '2022-05-27', '2022-06-29 16:44:35', '2022-06-29 16:44:35'),
(118, 'DRH1000046', 'U93U1356', 'HAERDIAN', 'AB', 350, '2022-05-27', '2022-06-29 16:44:36', '2022-06-29 16:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pouch_number` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` enum('A','B','O','AB') COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `date_of_entry` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `code`, `pouch_number`, `donor`, `blood`, `total`, `date_of_entry`, `created_at`, `updated_at`) VALUES
(73, 'DRH1000001', 'P0752355', 'Sudirman', 'A', 350, '2022-05-02', '2022-06-29 23:02:37', '2022-06-29 23:02:37'),
(74, 'DRH1000002', 'P07758406', 'MUGIONO', 'O', 350, '2022-05-02', '2022-06-29 23:38:52', '2022-06-29 23:38:52'),
(75, 'DRH1000003', 'P0759783', 'SYARIFUDDIN', 'A', 350, '2022-05-02', '2022-06-29 23:38:53', '2022-06-29 23:38:53'),
(76, 'DRH1000004', 'P0759960', 'USMAN', 'O', 350, '2022-05-02', '2022-06-29 23:38:53', '2022-06-29 23:38:53'),
(77, 'DRH1000005', 'P0701276', 'ABD ASIS', 'A', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(78, 'DRH1000006', 'P0759919', 'SULKIPLI', 'B', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(79, 'DRH1000007', 'P0758705', 'PURJOHARI', 'B', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(80, 'DRH1000008', 'P0701716', 'MUH ISRA', 'O', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(81, 'DRH1000009', 'P0759982', 'FERY HARJONO', 'O', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(82, 'DRH1000010', 'P0700120', 'ANDI MUH ADI', 'O', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(83, 'DRH1000011', 'P0799929', 'H.M.AGUS', 'O', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(84, 'DRH1000012', 'P0758847', 'AGNA GAMDIA H', 'B', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(85, 'DRH1000013', 'P0759902', 'SUDIRMAN', 'A', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(86, 'DRH1000014', 'P0754698', 'AGUS SALIM SAPE', 'O', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(87, 'DRH1000015', 'P0702106', 'HERWADI', 'B', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(88, 'DRH1000016', 'P0759387', 'LIKI', 'A', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(89, 'DRH1000017', 'P0702393', 'EDI SUDIATNO', 'B', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(90, 'DRH1000018', 'P0759911', 'HERMAN', 'O', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(91, 'DRH1000019', 'P0759389', 'AGUSTANEPENDI', 'B', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(92, 'DRH1000020', 'P0758908', 'AMRAN', 'O', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(93, 'DRH1000021', 'P0759296', 'M.SJANTO', 'O', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(94, 'DRH1000022', 'P0759650', 'IMRAN', 'A', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(95, 'DRH1000023', 'P0740681', 'BULSARNAIN', 'A', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(96, 'DRH1000024', 'P0758917', 'SAHARUASTI', 'O', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(97, 'DRH1000025', 'P0702092', 'UYATRIR', 'B', 350, '2022-05-02', '2022-06-29 23:38:54', '2022-06-29 23:38:54'),
(98, 'DRH1000026', 'P0700127', 'MARSONI', 'B', 350, '2022-05-02', '2022-06-29 23:38:55', '2022-06-29 23:38:55'),
(99, 'DRH1000027', 'P0758899', 'ASWARMUAS', 'B', 350, '2022-05-02', '2022-06-29 23:38:55', '2022-06-29 23:38:55'),
(100, 'DRH1000028', 'P0759982', 'KIRUL', 'B', 350, '2022-05-02', '2022-06-29 23:38:55', '2022-06-29 23:38:55'),
(101, 'DRH1000029', 'P0700189', 'IBASBI', 'O', 350, '2022-05-02', '2022-06-29 23:38:55', '2022-06-29 23:38:55'),
(102, 'DRH1000030', 'P0901736', 'A.SAHWAL A.SH', 'B', 350, '2022-05-02', '2022-06-29 23:38:55', '2022-06-29 23:38:55'),
(103, 'DRH1000031', 'P0799862', 'NUR ANDI', 'O', 350, '2022-05-02', '2022-06-29 23:38:55', '2022-06-29 23:38:55'),
(104, 'DRH1000032', 'P0758768', 'ABD ROHIM ROY', 'AB', 350, '2022-05-02', '2022-06-29 23:38:55', '2022-06-29 23:38:55'),
(105, 'DRH1000033', 'P0759719', 'A. AKRAR CPD', 'A', 350, '2022-05-02', '2022-06-29 23:38:55', '2022-06-29 23:38:55'),
(106, 'DRH1000034', 'P0758520', 'ROY DIMA', 'B', 350, '2022-05-02', '2022-06-29 23:38:55', '2022-06-29 23:38:55'),
(107, 'DRH1000035', 'P0701544', 'HAMUKLIS .S', 'B', 350, '2022-05-02', '2022-06-29 23:38:55', '2022-06-29 23:38:55'),
(108, 'DRH1000036', 'U93P9876', 'MUH YUKANSYAH', 'O', 350, '2022-05-27', '2022-06-30 00:44:35', '2022-06-30 00:44:35'),
(109, 'DRH1000037', 'U930194', 'A. WARDIMAN', 'O', 350, '2022-05-27', '2022-06-30 00:44:35', '2022-06-30 00:44:35'),
(110, 'DRH1000038', 'U93U0456', 'MUH IDRIS', 'B', 350, '2022-05-27', '2022-06-30 00:44:35', '2022-06-30 00:44:35'),
(111, 'DRH1000039', 'U93U0471', 'NY JUNAEDI', 'B', 350, '2022-05-27', '2022-06-30 00:44:35', '2022-06-30 00:44:35'),
(112, 'DRH1000040', 'U9351984', 'MIFTA', 'AB', 350, '2022-05-27', '2022-06-30 00:44:35', '2022-06-30 00:44:35'),
(113, 'DRH1000041', 'U9350371', 'AGUNG RACHONAN', 'O', 350, '2022-05-27', '2022-06-30 00:44:35', '2022-06-30 00:44:35'),
(114, 'DRH1000042', 'U93U1084', 'DM ILHAM', 'A', 350, '2022-05-27', '2022-06-30 00:44:35', '2022-06-30 00:44:35'),
(115, 'DRH1000043', 'U93U1197', 'AYULIANA', 'B', 350, '2022-05-27', '2022-06-30 00:44:35', '2022-06-30 00:44:35'),
(116, 'DRH1000044', 'U93U7019', 'Meli Rahmi S', 'B', 350, '2022-05-27', '2022-06-30 00:44:35', '2022-06-30 00:44:35'),
(117, 'DRH1000045', 'U93U1109', 'A. DEWI RATNASARI', 'O', 350, '2022-05-27', '2022-06-30 00:44:35', '2022-06-30 00:44:35'),
(118, 'DRH1000046', 'U93U1356', 'HAERDIAN', 'AB', 350, '2022-05-27', '2022-06-30 00:44:36', '2022-06-30 00:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sisa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blood` enum('A','B','AB','O') COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `request_date` date NOT NULL,
  `out_date` date DEFAULT NULL,
  `status` enum('accepted','rejected','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `medis` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id_approve` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `sisa_id`, `blood`, `total`, `request_date`, `out_date`, `status`, `medis`, `user_id_approve`, `created_at`, `updated_at`) VALUES
(54, 1, 73, 'A', 350, '2022-08-14', '2022-08-14', 'rejected', '20220814_62f87aa48340b.pdf', 1, '2022-08-13 20:31:32', '2022-08-14 07:25:08'),
(55, 1, 75, 'A', 6, '2022-08-14', NULL, 'pending', '20220814_62f87aa48340b.pdf', NULL, '2022-08-13 20:31:32', '2022-08-13 20:31:32');

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
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `phone` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$2HJG/RnRNmJgW.V7IcD4xe.jpTl/OFO2z4k3voz7khQFJAGVw4.Ge', 'admin', '081234567890', NULL, NULL, '2022-06-18 20:27:54'),
(2, 'adminss', 'admins@gmail.com', NULL, '$2y$10$4Zozwxy/ElZiarrJjWH65.wV6gSEkGEePxnnKujugZ1j1QwT5PeQe', 'admin', NULL, NULL, '2022-05-15 08:33:19', '2022-05-27 02:48:21'),
(3, 'userbaru', 'userbaru@gmail.com', NULL, '$2y$10$CWzEtQ.AOZ4JYXZ/2/4MNu/ivuGbno7GKxepqaoBjeyhDHC7oNEq2', 'user', NULL, NULL, '2022-06-07 22:28:05', '2022-06-07 22:28:05');

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
-- Indexes for table `sisas`
--
ALTER TABLE `sisas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_approve` (`user_id_approve`),
  ADD KEY `stock_id` (`sisa_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sisas`
--
ALTER TABLE `sisas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`user_id_approve`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`sisa_id`) REFERENCES `stocks` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
