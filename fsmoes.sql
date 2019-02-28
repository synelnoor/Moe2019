-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2019 at 09:24 PM
-- Server version: 10.0.38-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.2.13-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsmoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas_id` int(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `judul`, `file`, `isi`, `fakultas_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Artikelfriw', 'http://localhost/fisipmoes/public/storage/Banner/slide1.jpg', '<p><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">Fakultas Ilmu Sosial dan Ilmu Politik Universitas Indonesia atau disingkat&nbsp;</span><b style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">FISIP</b><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">&nbsp;UI adalah Kelompok Fakultas Rumpun Ilmu Sosial dan Humaniora yang merupakan bagian dari Universitas Indonesia.</span><b style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">FISIP</b><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">&nbsp;UI mengelola program pendidikan berjenjang dengan gelar sarjana (S1), magister (S2), dan doktor (S3).</span></p><p><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">Fakultas Ilmu Sosial dan Ilmu Politik Universitas Indonesia atau disingkat&nbsp;</span><span style="font-weight: 700; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">FISIP</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">&nbsp;UI adalah Kelompok Fakultas Rumpun Ilmu Sosial dan Humaniora yang merupakan bagian dari Universitas Indonesia.</span><span style="font-weight: 700; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">FISIP</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">&nbsp;UI mengelola program pendidikan berjenjang dengan gelar sarjana (S1), magister (S2), dan doktor (S3).</span></p><hr><p><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">Fakultas Ilmu Sosial dan Ilmu Politik Universitas Indonesia atau disingkat&nbsp;</span><span style="font-weight: 700; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">FISIP</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">&nbsp;UI adalah Kelompok Fakultas Rumpun Ilmu Sosial dan Humaniora yang merupakan bagian dari Universitas Indonesia.</span><span style="font-weight: 700; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">FISIP</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">&nbsp;UI mengelola program pendidikan berjenjang dengan gelar sarjana (S1), magister (S2), dan doktor (S3).</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;"><br></span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;"><br></span><img src="http://localhost/fisipmoes/public/storage/Banner/slide1.jpg" style="width: 960px;" data-filename="slide1.jpg"><br></p>', 1, '2019-01-07 02:37:46', '2019-02-10 06:05:17', NULL),
(2, 'ArtikelTES', 'http://localhost/fisipmoes/public/storage/Banner/slide1.jpg', '<p style="margin-bottom: 16px; color: rgb(36, 41, 46); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; font-size: 16px;"><br class="Apple-interchange-newline">A Laravel base controller class and a trait that will enable to add filtering, sorting, eager loading and pagination to your resource URLs.</p><p style="margin-bottom: 16px; color: rgb(36, 41, 46); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; font-size: 16px;"><span style="font-weight: 600;">Dedicated to Giordano Bruno</span></p><p style="margin-bottom: 16px; color: rgb(36, 41, 46); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; font-size: 16px;">This package is named after my hero Giordano Bruno. A true visionary who dared to dream beyond what was thought possible. For his ideas and his refusal to renounce them he was burned to the stake in 1600. <a href="https://vimeo.com/89241669" rel="nofollow" style="color: rgb(3, 102, 214);">I highly recommend this short cartoon on his life narrated by Neil deGrasse Tyson</a>.</p>', 2, '2019-01-07 03:13:20', '2019-02-10 06:32:16', NULL),
(3, 'Artikel !II', 'http://localhost/fisipmoes/public/storage/Banner/slide3.jpg', '<p><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">Fakultas Ilmu Sosial dan Ilmu Politik Universitas Indonesia atau disingkat&nbsp;</span><span style="font-weight: 700; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">FISIP</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">&nbsp;UI adalah Kelompok Fakultas Rumpun Ilmu Sosial dan Humaniora yang merupakan bagian dari Universitas Indonesia.</span><span style="font-weight: 700; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">FISIP</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">&nbsp;UI mengelola program pendidikan berjenjang dengan gelar sarjana (S1), magister (S2), dan doktor (S3).</span></p><p><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">Fakultas Ilmu Sosial dan Ilmu Politik Universitas Indonesia atau disingkat&nbsp;</span><span style="font-weight: 700; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">FISIP</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">&nbsp;UI adalah Kelompok Fakultas Rumpun Ilmu Sosial dan Humaniora yang merupakan bagian dari Universitas Indonesia.</span><span style="font-weight: 700; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">FISIP</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">&nbsp;UI mengelola program pendidikan berjenjang dengan gelar sarjana (S1), magister (S2), dan doktor (S3).</span></p><p><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">Fakultas Ilmu Sosial dan Ilmu Politik Universitas Indonesia atau disingkat&nbsp;</span><span style="font-weight: 700; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">FISIP</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">&nbsp;UI adalah Kelompok Fakultas Rumpun Ilmu Sosial dan Humaniora yang merupakan bagian dari Universitas Indonesia.</span><span style="font-weight: 700; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">FISIP</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">&nbsp;UI mengelola program pendidikan berjenjang dengan gelar sarjana (S1), magister (S2), dan doktor (S3).</span></p><p><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">Fakultas Ilmu Sosial dan Ilmu Politik Universitas Indonesia atau disingkat&nbsp;</span><span style="font-weight: 700; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">FISIP</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">&nbsp;UI adalah Kelompok Fakultas Rumpun Ilmu Sosial dan Humaniora yang merupakan bagian dari Universitas Indonesia.</span><span style="font-weight: 700; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">FISIP</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;">&nbsp;UI mengelola program pendidikan berjenjang dengan gelar sarjana (S1), magister (S2), dan doktor (S3).</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;"><br></span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;"><br></span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;"><br></span></p><p><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;"><br></span><br></p>', 2, '2019-01-28 05:58:32', '2019-02-10 06:22:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `image`, `desc`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Moes', 'http://localhost/fisipmoes/public/storage/Banner/slide1.jpg', 'vv', '2', 1, NULL, '2018-12-24 04:17:06', '2018-12-24 04:17:06', NULL),
(2, 'Home', 'http://localhost/fisipmoes/public/storage/Banner/slide2.jpg', 'dd', '2', 1, NULL, '2018-12-24 04:42:22', '2018-12-24 04:42:22', NULL),
(3, 'TTT', 'http://localhost/fisipmoes/public/storage/Banner/slide3.jpg', '<p>dd</p>', '2', 1, NULL, '2019-02-10 06:36:11', '2019-02-10 06:36:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tumb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `judul`, `file`, `link`, `tumb`, `desc`, `dosen_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'buku1', 'http://localhost/fisipmoes/public/storage/thumb/40041-carousel2.jpg', 'https://www.dropbox.com/s/torvwr9qmjtnub0/0%20Design%20Patterns%20in%20PHP%20and%20Laravel.pdf?dl=0', NULL, 'dddd', 1, '2019-02-01 15:51:50', '2019-02-01 15:51:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dosens`
--

CREATE TABLE `dosens` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas_id` int(11) UNSIGNED DEFAULT NULL,
  `line` int(11) NOT NULL,
  `col` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosens`
--

INSERT INTO `dosens` (`id`, `nama`, `jabatan`, `file`, `desc`, `fakultas_id`, `line`, `col`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dosen!', 'DEKAN', 'http://localhost/fisipmoes/public/storage/Dosen/profile-picture-placeholder.png', 'dekan', 2, 1, 1, '2019-01-30 02:54:59', '2019-02-10 06:08:16', NULL),
(2, 'Dosen 2', 'WADEK 1', 'http://localhost/fisipmoes/public/storage/Dosen/profile-picture-placeholder.png', 'wadek1', 1, 2, 1, '2019-02-01 15:37:36', '2019-02-10 06:47:33', NULL),
(3, 'Dosen3', 'WADEK II', 'http://localhost/fisipmoes/public/storage/Dosen/profile-picture-placeholder.png', 'ddd', 1, 2, 2, '2019-02-10 06:37:38', '2019-02-10 06:37:38', NULL),
(4, 'Dosen4', 'WADEK III', 'http://localhost/fisipmoes/public/storage/Dosen/profile-picture-placeholder.png', 'dddd', 2, 2, 3, '2019-02-10 06:43:35', '2019-02-10 06:43:35', NULL),
(5, 'namadosen', 'UNIT PENJAMINAN MUTU', 'http://localhost/fisipmoes/public/storage/Dosen/profile-picture-placeholder.png', 'dd', 1, 3, 1, '2019-02-10 07:11:12', '2019-02-10 07:11:12', NULL),
(6, 'namadosen', 'KAPUSLITDIANMAS', 'http://localhost/fisipmoes/public/storage/Dosen/profile-picture-placeholder.png', 'dd', 2, 3, 2, '2019-02-10 07:11:46', '2019-02-10 07:11:46', NULL),
(7, 'namadosen', 'KAPRODI AP', 'http://localhost/fisipmoes/public/storage/Dosen/profile-picture-placeholder.png', 'ddd', 1, 3, 3, '2019-02-10 07:12:31', '2019-02-10 07:13:14', NULL),
(8, 'namadosen', 'KAPRODI HI', 'http://localhost/fisipmoes/public/storage/Dosen/profile-picture-placeholder.png', 'ddd', 2, 3, 4, '2019-02-10 07:13:46', '2019-02-10 07:13:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `nama`, `tgl`, `desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'event1', '2019-02-23', 'test event', '2019-02-16 02:28:29', '2019-02-16 02:28:29', NULL),
(2, 'EVENT@', '2019-02-27', 'Sebuah foto tak hanya bisa menjadi alat dokumentasi peristiwa, tetapi juga sebagai media dalam berekspresi', '2019-02-16 03:31:20', '2019-02-16 03:31:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama`, `desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrasi Publik', 'Administrasi Publik', '2019-02-10 05:50:55', '2019-02-10 05:50:55', NULL),
(2, 'Hubungan Internasional', 'Hubungan Internasional', '2019-02-10 05:51:20', '2019-02-10 05:51:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jurnals`
--

CREATE TABLE `jurnals` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tumb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurnals`
--

INSERT INTO `jurnals` (`id`, `judul`, `file`, `link`, `tumb`, `desc`, `dosen_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'jurnal1', 'http://localhost/fisipmoes/public/storage/thumb/40041-carousel2.jpg', 'https://www.dropbox.com/s/torvwr9qmjtnub0/0%20Design%20Patterns%20in%20PHP%20and%20Laravel.pdf?dl=0', NULL, 'ddd', 2, '2019-02-01 15:47:41', '2019-02-01 15:47:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kalenders`
--

CREATE TABLE `kalenders` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kalenders`
--

INSERT INTO `kalenders` (`id`, `judul`, `file`, `desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'kalenderAK', 'http://localhost/fisipmoes/public/storage/Kalender/kalender-akademik-tes.jpg', 'kalender', '2019-02-01 15:54:34', '2019-02-01 15:54:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2017_06_10_154131_create_settings_table', 1),
(9, '2017_09_30_061025_laratrust_setup_tables', 1),
(10, '2018_02_24_120828_create_profiles_table', 1),
(11, '2018_12_24_081150_create_pages_table', 2),
(12, '2018_12_24_081210_create_posts_table', 3),
(13, '2018_12_24_094952_create_banners_table', 4),
(14, '2019_01_05_133852_create_artikels_table', 5),
(15, '2019_01_07_073738_create_beritas_table', 6),
(16, '2019_01_07_083947_create_articles_table', 7),
(17, '2019_01_07_102457_create_visi_misis_table', 8),
(18, '2019_01_19_123649_create_dosens_table', 9),
(19, '2019_01_19_134023_create_sambutans_table', 10),
(20, '2019_01_19_134317_create_jurnals_table', 11),
(21, '2019_01_19_134712_create_bukus_table', 12),
(22, '2019_01_19_135540_create_kalenders_table', 13),
(23, '2019_02_10_123005_create_fakultas_table', 14),
(24, '2019_02_16_092528_create_events_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `version` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `title`, `slug`, `summary`, `description`, `tag`, `version`, `language`, `template`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Home', 'Home', 'home', 'home', '<p>home</p>', 'home', '1', 'bahasa', 'home', 'publish', 1, NULL, '2018-12-24 01:35:06', '2018-12-24 01:35:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('superadministrator@app.com', '$2y$10$YJzf4.wH3/TMBgVTYZ.Ne.6mi9Mamzw8gXiPZK3hz0Y3wJPQSFDzu', '2019-02-02 10:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-users', 'Create Users', 'Create Users', '2018-12-21 12:21:35', '2018-12-21 12:21:35'),
(2, 'read-users', 'Read Users', 'Read Users', '2018-12-21 12:21:35', '2018-12-21 12:21:35'),
(3, 'update-users', 'Update Users', 'Update Users', '2018-12-21 12:21:35', '2018-12-21 12:21:35'),
(4, 'delete-users', 'Delete Users', 'Delete Users', '2018-12-21 12:21:35', '2018-12-21 12:21:35'),
(5, 'create-acl', 'Create Acl', 'Create Acl', '2018-12-21 12:21:36', '2018-12-21 12:21:36'),
(6, 'read-acl', 'Read Acl', 'Read Acl', '2018-12-21 12:21:36', '2018-12-21 12:21:36'),
(7, 'update-acl', 'Update Acl', 'Update Acl', '2018-12-21 12:21:36', '2018-12-21 12:21:36'),
(8, 'delete-acl', 'Delete Acl', 'Delete Acl', '2018-12-21 12:21:36', '2018-12-21 12:21:36'),
(9, 'read-profile', 'Read Profile', 'Read Profile', '2018-12-21 12:21:36', '2018-12-21 12:21:36'),
(10, 'update-profile', 'Update Profile', 'Update Profile', '2018-12-21 12:21:36', '2018-12-21 12:21:36'),
(11, 'publish-post', 'Publish Post', 'Publish Post', '2018-12-21 12:21:36', '2018-12-21 12:21:36'),
(12, 'create-profile', 'Create Profile', 'Create Profile', '2018-12-21 12:21:38', '2018-12-21 12:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 1),
(11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`permission_id`, `user_id`, `user_type`) VALUES
(9, 4, 'App\\User'),
(10, 4, 'App\\User'),
(12, 4, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `version` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `title`, `slug`, `summary`, `description`, `tag`, `category`, `cover`, `version`, `language`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Home', 'Home', 'home', 'home', '<p>home</p>', 'home', 1, NULL, '1', 'bahasa', 'publish', 1, NULL, '2018-12-24 01:27:08', '2018-12-24 01:27:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2018-12-21 12:21:35', '2018-12-21 12:21:35'),
(2, 'administrator', 'Administrator', 'Administrator', '2018-12-21 12:21:37', '2018-12-21 12:21:37'),
(3, 'user', 'User', 'User', '2018-12-21 12:21:37', '2018-12-21 12:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User'),
(3, 3, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `sambutans`
--

CREATE TABLE `sambutans` (
  `id` int(10) UNSIGNED NOT NULL,
  `dosen` int(11) NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sambutan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sambutans`
--

INSERT INTO `sambutans` (`id`, `dosen`, `judul`, `sambutan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'SAMBUTAN PIMPINAN', 'Puji Syukur dan rasa terimakasih kita panjatkan ke-Hadirat Tuhan Yang Maha Esa atas segala berkat dan rahmat-Nya kepada kita semua sehingga penyusunan Website Fakultas Ilmu Sosial dan Ilmu Politik Universitas Prof. Dr. Moestopo (Beragama) inidapat terwujud dengan baik.\r\n\r\nWebsite FISIP UPDM (B) ini dimaksudkan sebagai media informasi tentang profil FISIP UPDM(B) yang dapat diakses oleh Para dosen, mahasiswa dan para user lainnya termasuk proses perkuliahannya.\r\n\r\nPerlu di informasikan bahwa Fakultas Ilmu Sosial dan Ilmu Politik Universitas Prof. Dr. Moestopo (Beragama) mempunyai Program Studi Administrasi Negara dengan status Terakreditasi dengan nilai A berdasarkan pada Surat Keputusan Badan Akreditasi Nasional Perguruan Tinggi, Kementerian Pendidikan dan Kebudayaan Republik Indonesia Nomor: 257/BAN-PT/Ak-XVI/S/XII/2013 tanggal 26 Desember 2013 dan Program Studi Hubungan Internasional secara bertutut-turut tiga kali dapat mempertahankan Akreditasi dengan nilai A dan Akreditasi Yang Ke 3 dalam Surat Keputusan Badan Akreditasi Nasional Perguruan Tinggi, Kementerian Pendidikan dan Kebudayaan Republik Indonesia Nomor: 1011/SK/BAN-PT/Akred/S/IX/2015 tanggal 19 September 2015.\r\n\r\nSelain dari pada itu bahwa sejak semester ganjil tahun Akademik 2016/2017 bahwa FISIP UPDM(B) baik Program Studi Administrasi Negara Maupun Program Studi Hubungan Internasional Telah Menerapkan Kurikilum Baru Berbasis Kerangka Kualifikasi Nasional Indonesia (KKNI) dan Proses Pembelajaran Sebagian Besar Mata Kuliah Inti telah diajarkan dengan menggunakan Bahasa Pengantar Bahasa Inggris.\r\n\r\nBeberapa Informasi Lain Seperti Tenaga Pengajar,sebagian Besar Telah bergelar Strata 3 (S3) danProfesor (Guru Besar).\r\n\r\nDemikian Sekilas Informasi dalam Website ini, dan kami menyadari masih Perlu Penyempurnaan secara berkelanjutan (sustainable) agar datanya tetap akurat dan Up to date.Dan harapan kita kehadiran Website ini benar-benar bermanfaat bagi para user.\r\n\r\nSekian dan terima kasih.', '2019-01-30 03:12:18', '2019-01-30 03:12:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `description`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'app-name', 'Webcore', 'Your application name', 'app', '2018-12-21 12:21:33', '2018-12-21 12:21:33', NULL),
(2, 'site-title', 'Webcore Platform', 'Your site title', 'app', '2018-12-21 12:21:33', '2018-12-21 12:21:33', NULL),
(3, 'site-slogan', 'Built according to your needs', 'Your site slogan', 'app', '2018-12-21 12:21:33', '2018-12-21 12:21:33', NULL),
(4, 'site-description', 'Single Platform can be used for Admin Panel or Web CMS (built according to your needs)', 'Your site description', 'app', '2018-12-21 12:21:33', '2018-12-21 12:21:33', NULL),
(5, 'site-logo', 'https://dummyimage.com/600x100/f5f5f5/999999&text=Webcore', 'Your site logo. Note : upload your logo using assets manager, and copy your uploded logo link to Value field in here', 'app', '2018-12-21 12:21:33', '2018-12-21 12:21:33', NULL),
(6, 'google-analytics', 'google_analytics_code', 'Your google analytics key', 'app', '2018-12-21 12:21:33', '2018-12-21 12:21:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadministrator', 'superadministrator@app.com', '$2y$10$qWSXcVqA8sd9GX7haKWyYu3mj/62kuJC4JS8WIrO7JnzaUbWOoPai', 'MPem36yGPGDF3Tm1bUOfcrkeEG9GDsNASlZMbPtjjcXWamQsNTP3KYkd7W6p', '2018-12-21 12:21:36', '2018-12-21 12:21:36'),
(2, 'Administrator', 'administrator@app.com', '$2y$10$WWra1foqhbScaQLb/iozFOsuKB5eBO2muNjM5KiTnPSM3Pb.AaD7.', NULL, '2018-12-21 12:21:37', '2018-12-21 12:21:37'),
(3, 'User', 'user@app.com', '$2y$10$a9TfUWp2iq0Izok4XNC/kO26eUaKVgcekQdWdy0Y3CGtkyX3CODMS', NULL, '2018-12-21 12:21:38', '2018-12-21 12:21:38'),
(4, 'Cru User', 'cru_user@app.com', '$2y$10$gdku9bPnHDfaNQ.it1j9F.5LOoQVib8KJFtZdA8hxbDFOXbN2ljc6', '1koMf5mf7L', '2018-12-21 12:21:38', '2018-12-21 12:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misis`
--

CREATE TABLE `visi_misis` (
  `id` int(10) UNSIGNED NOT NULL,
  `Visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tujuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `halaman` enum('moes','an','hi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visi_misis`
--

INSERT INTO `visi_misis` (`id`, `Visi`, `Misi`, `Tujuan`, `halaman`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '<ul><li><span style="color: rgb(51, 51, 51); font-size: 24px;" lucida="" grande",="" "lucida="" sans",="" sans="" unicode",="" verdana,="" sans-serif;="" font-size:="" x-large;"="">Terwujudnya Fakultas Ilmu Sosial dan Ilmu Politik yang unggul dan profesional dalam membangun masyarakat Indonesia yang maju pada tahun 2019</span><br></li></ul>', '<ul style="color: rgb(51, 51, 51); font-family: " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;"=""><li><p style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal; font-family: " lucida="" grande",="" "lucida="" sans",="" sans="" unicode",="" verdana,="" sans-serif;"=""><font size="5"><span style="font-size: 24px;">Menghasilkan lulusan yang memiliki kompetensi di bidang Administrasi Publik dan Hubungan Internasional</span></font></p></li><li><p style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal; font-family: " lucida="" grande",="" "lucida="" sans",="" sans="" unicode",="" verdana,="" sans-serif;"=""><font size="5"><span style="font-size: 24px;">Menghasilkan penelitian dan pengabdian kepada masyarakat yang unggul, berdaya guna dan tepat guna</span></font></p></li><li><p style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal; font-family: " lucida="" grande",="" "lucida="" sans",="" sans="" unicode",="" verdana,="" sans-serif;"=""><font size="5"><span style="font-size: 24px;">Tercapainya sumber daya baik kualitas maupun kuantitas dalam penyelenggaraan pendidikan, penelitian, dan pengabdian masyarakat</span></font></p></li></ul>', '<ul style="color: rgb(51, 51, 51); font-family: " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;"=""><li><p style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal; font-family: " lucida="" grande",="" "lucida="" sans",="" sans="" unicode",="" verdana,="" sans-serif;"=""><font size="5"><span style="font-size: 24px;">Menghasilkan lulusan yang memiliki kompetensi di bidang Administrasi Publik dan Hubungan Internasional</span></font></p></li><li><p style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal; font-family: " lucida="" grande",="" "lucida="" sans",="" sans="" unicode",="" verdana,="" sans-serif;"=""><font size="5"><span style="font-size: 24px;">Menghasilkan penelitian dan pengabdian kepada masyarakat yang unggul, berdaya guna dan tepat guna</span></font></p></li><li><p style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal; font-family: " lucida="" grande",="" "lucida="" sans",="" sans="" unicode",="" verdana,="" sans-serif;"=""><font size="5"><span style="font-size: 24px;">Tercapainya sumber daya baik kualitas maupun kuantitas dalam penyelenggaraan pendidikan, penelitian, dan pengabdian masyarakat</span></font></p></li></ul>', 'moes', '2019-01-07 03:38:37', '2019-01-30 07:30:21', NULL),
(2, '<p></p><ul>\r\n            <li><p><font size="5"> <span style="font-size: 18px;">Terwujudnya Program studi  Administrasi Publik yang unggul dan profesional dalam membangun masyarakat Indonesia yang maju pada tahun 2018</span></font></p></li>\r\n          </ul>\r\n        <p></p>', '<p></p><ul>\r\n            <li><p><font size="5"><span style="font-size: 18px;">Menyelenggarakan pendidikan yang unggul dalam pengembangan ilmu administrasi publik</span></font></p></li><span style="font-size: 18px;">\r\n            </span><li><p><font size="5"><span style="font-size: 18px;">Mengembangkan Penelitian dan Pengabdian kepada masyarakat yang berhasil guna dan berdaya guna dalam meningkatkan kesejahteraan masyarakat </span></font></p></li><span style="font-size: 18px;">\r\n            </span><li><p><font size="5"><span style="font-size: 18px;">Meningkatkan kualitas dan kuantitas sumber daya bagi penyelenggaraan pendidikan, penelitian, dan pengabdian masyarakat</span></font></p></li>\r\n        </ul><p></p>', '<p></p><ul>\r\n            <li><p><font size="5"><span style="font-size: 18px;">Menyelenggarakan pendidikan yang unggul dalam pengembangan ilmu administrasi publik</span></font></p></li><span style="font-size: 18px;">\r\n            </span><li><p><font size="5"><span style="font-size: 18px;">Mengembangkan Penelitian dan Pengabdian kepada masyarakat yang berhasil guna dan berdaya guna dalam meningkatkan kesejahteraan masyarakat </span></font></p></li><span style="font-size: 18px;">\r\n            </span><li><p><font size="5"><span style="font-size: 18px;">Meningkatkan kualitas dan kuantitas sumber daya bagi penyelenggaraan pendidikan, penelitian, dan pengabdian masyarakat</span></font></p></li>\r\n        </ul><p></p>', 'an', '2019-02-01 12:46:09', '2019-02-01 12:55:23', NULL),
(3, '<p></p><ul>\r\n            <li><p><font size="5"> <span style="font-size: 18px;">Terwujudnya Program Studi Hubungan Internasional yang unggul dan profesional dalam membangun masyarakat Indonesia yang maju pada tahun 2018</span></font></p></li>\r\n          </ul><p></p>', '<p></p><ul>\r\n            <li><p><font size="5"><span style="font-size: 18px;">Menyelenggarakan pendidikan yang unggul dalam pengembangan ilmu Hubungan Internasional</span></font></p></li><br><li><p><font size="5"><span style="font-size: 18px;">Mengembangkan Penelitian dan Pengabdian kepada masyarakat yang berhasil guna dan berdaya guna dalam meningkatkan kesejahteraan masyarakat </span></font></p></li><span style="font-size: 18px;">\r\n            </span><li><p><font size="5"><span style="font-size: 18px;">Meningkatkan kualitas dan kuantitas sumber daya bagi penyelenggaraan pendidikan, penelitian, dan pengabdian masyarakat</span></font></p></li>\r\n        </ul><p></p>', '<p>  </p><ul>\r\n            <li><p><font size="5"><span style="font-size: 18px;">Menghasilkan lulusan yang memiliki kompetensi di bidang Hubungan Internasional</span></font></p></li><span style="font-size: 18px;">\r\n            </span><li><p><font size="5"><span style="font-size: 18px;">Menghasilkan penelitian dan pengabdian kepada masyarakat yang unggul, berdaya guna dan tepat guna</span></font></p></li><span style="font-size: 18px;">\r\n            </span><li><p><font size="5"><span style="font-size: 18px;">Tercapainya sumber daya baik kualitas maupun kuantitas dalam penyelenggaraan pendidikan, penelitian, dan pengabdian masyarakat</span> </font></p></li>\r\n            <p></p>\r\n        </ul><p></p>', 'hi', '2019-02-01 12:48:49', '2019-02-01 12:56:01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnals`
--
ALTER TABLE `jurnals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalenders`
--
ALTER TABLE `kalenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sambutans`
--
ALTER TABLE `sambutans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visi_misis`
--
ALTER TABLE `visi_misis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jurnals`
--
ALTER TABLE `jurnals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kalenders`
--
ALTER TABLE `kalenders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sambutans`
--
ALTER TABLE `sambutans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `visi_misis`
--
ALTER TABLE `visi_misis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
