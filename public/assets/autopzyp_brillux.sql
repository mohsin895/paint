-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 08, 2022 at 05:36 AM
-- Server version: 10.3.35-MariaDB-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autopzyp_brillux`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `module_id`, `category_name`, `slug`, `category_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Filler', 'filler', '69870.png', '1', '2022-06-21 01:59:08', '2022-06-23 03:10:44'),
(2, 1, 'Paints and plasters', 'paints-and-plasters', '22289.png', '1', '2022-06-21 02:12:17', '2022-06-23 03:10:21'),
(3, 1, 'Enamel paints, varnishes and woodstains', 'enamel-paints-varnishes-and-woodstains', NULL, '1', '2022-06-23 03:09:44', '2022-06-23 03:09:44'),
(4, 1, 'Interior design', 'interior-design', NULL, '1', '2022-06-23 03:11:08', '2022-06-23 03:11:08'),
(5, 1, 'Thermal insulation and renders', 'thermal-insulation-and-renders', NULL, '1', '2022-06-23 03:11:34', '2022-06-23 03:11:34'),
(6, 2, 'Color shades', 'color-shades', NULL, '1', '2022-06-23 03:43:44', '2022-06-23 03:43:44'),
(7, 2, 'Wall', 'wall', NULL, '1', '2022-06-23 03:53:42', '2022-06-23 03:53:42'),
(8, 2, 'Floor', 'floor', NULL, '1', '2022-06-23 03:54:04', '2022-06-23 03:54:04'),
(9, 1, 'Concreate Production', 'concreate-production', NULL, '1', '2022-07-03 21:04:40', '2022-07-03 21:04:40'),
(10, 1, 'Tools', 'tools', NULL, '1', '2022-07-03 21:05:00', '2022-07-03 21:05:00'),
(12, 1, 'Tools', 'tools', NULL, '1', '2022-08-08 08:26:47', '2022-08-08 08:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `datasheets`
--

CREATE TABLE `datasheets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `data_sheets_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_sheets` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datasheets`
--

INSERT INTO `datasheets` (`id`, `product_id`, `data_sheets_image`, `data_sheets`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, '1736960472763939.pdf', '2022-06-29 03:23:11', '2022-06-29 03:23:11'),
(2, 3, NULL, '1736960472873583.pdf', '2022-06-29 03:23:11', '2022-06-29 03:23:11'),
(3, 3, NULL, '1736960472953182.pdf', '2022-06-29 03:23:11', '2022-06-29 03:23:11');

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
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twiter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privecy_policy` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_notice` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `site_logo`, `admin_logo`, `favicon`, `website_name`, `year`, `site_title`, `email`, `mobile`, `fb`, `lin`, `insta`, `youtube`, `twiter`, `privecy_policy`, `legal_notice`, `created_at`, `updated_at`) VALUES
(1, '51643.jpg', '67604.png', '45649.jpg', 'BD Paint', NULL, 'BD Paint', 'bdpl.scp@gmail.com', '+8801631999222, +8809678772345', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://twitter.com/', 'edewd', 'werwe', NULL, '2022-07-04 09:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `image_galleries`
--

CREATE TABLE `image_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_galleries`
--

INSERT INTO `image_galleries` (`id`, `product_id`, `gallery`, `created_at`, `updated_at`) VALUES
(1, 3, '189471656487215.png', '2022-06-29 01:20:15', '2022-06-29 01:20:15'),
(2, 3, '509231656487215.png', '2022-06-29 01:20:15', '2022-06-29 01:20:15'),
(3, 3, '449531656487215.png', '2022-06-29 01:20:16', '2022-06-29 01:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `category_id`, `link_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '76321.jpg', '1', '2022-06-27 03:34:29', '2022-06-27 22:53:10'),
(2, 3, '12880.jpg', '1', '2022-06-27 22:35:41', '2022-06-27 22:54:10'),
(3, 4, '81003.jpg', '1', '2022-07-03 20:33:47', '2022-07-03 20:33:47'),
(4, 3, '36196.jpg', '1', '2022-07-03 20:34:21', '2022-07-03 20:34:21'),
(5, 2, '26169.jpg', '1', '2022-07-03 20:34:53', '2022-07-03 20:34:53'),
(6, 4, '66258.jpg', '1', '2022-07-03 20:35:24', '2022-07-03 20:35:24'),
(7, 3, '19273.jpg', '1', '2022-07-03 20:36:01', '2022-07-03 20:36:01'),
(8, 5, '58555.jpg', '1', '2022-07-03 20:36:31', '2022-07-03 20:36:31');

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
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2022_06_16_081003_create_sessions_table', 1),
(10, '2022_06_16_091350_create_general_settings_table', 2),
(12, '2022_06_20_050019_create_modules_table', 3),
(14, '2022_06_20_062512_create_categories_table', 4),
(15, '2022_06_20_075346_create_subcategories_table', 5),
(16, '2022_06_20_090545_create_sliders_table', 6),
(17, '2022_06_21_050202_create_products_table', 7),
(18, '2022_06_21_060148_create_image_galleries_table', 7),
(19, '2022_06_23_104235_create_links_table', 8),
(20, '2022_06_29_073913_create_datasheets_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `module_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Products', '1', '2022-06-21 01:47:56', '2022-06-21 01:52:08'),
(2, 'Color shade', '1', '2022-06-23 01:46:45', '2022-06-23 01:50:44'),
(3, 'Applications', '1', '2022-06-23 01:51:06', '2022-06-23 01:51:06'),
(4, 'Service', '1', '2022-06-23 01:51:26', '2022-06-23 01:51:26'),
(5, 'Media library', '1', '2022-06-23 01:51:53', '2022-06-23 01:51:53'),
(6, 'Company', '1', '2022-06-23 01:52:06', '2022-06-23 01:52:06');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `module_id`, `category_id`, `subcategory_id`, `product_name`, `product_image`, `slug`, `short_description`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, NULL, 3, 1, 'Dettol Ph-balanced Original Handwash Packet Of 1500 Ml', '66773.jpeg', 'dettol-ph-balanced-original-handwash-packet-of-1500-ml', 'Facade paint based on silicone-resin for water-resistant and water-vapor-permeable facade coatings on all load-bearing substrates.', NULL, '1', '2022-06-21 03:11:21', '2022-07-05 09:39:06'),
(8, NULL, 3, 2, 'styles shirt', '73120.jpeg', 'styles-shirt', NULL, NULL, '1', '2022-06-28 00:52:06', '2022-07-05 09:31:54'),
(9, NULL, 3, 3, 'Floortec 2K-EP Thick Coat 894', '30853.jpeg', 'floortec-2k-ep-thick-coat-894', 'Floortec 2K-EP Thick Coat 894Floortec 2K-EP Thick Coat 894Floortec 2K-EP Thick Coat 894Floortec 2K-EP Thick Coat 894Floortec 2K-EP Thick Coat 894', NULL, '1', '2022-07-03 20:40:18', '2022-07-05 09:32:39'),
(10, NULL, 2, 5, 'Floortec 2K-EP Thick Coat 894', '40116.jpeg', 'floortec-2k-ep-thick-coat-894', 'Floortec 2K-EP Thick Coat 894Floortec 2K-EP Thick Coat 894Floortec 2K-EP Thick Coat 894Floortec 2K-EP Thick Coat 894', NULL, '1', '2022-07-03 20:40:59', '2022-07-05 09:33:04'),
(11, NULL, 2, 6, 'Floortec 2K-EP Thick Coat 894', '43185.jpeg', 'floortec-2k-ep-thick-coat-894', 'Floortec 2K-EP Thick Coat 894 Floortec 2K-EP Thick Coat 894 Floortec 2K-EP Thick Coat 894', NULL, '1', '2022-07-03 20:41:47', '2022-07-05 09:33:29'),
(12, NULL, 2, 5, 'Floortec 2K-EP Thick Coat 894', '25988.jpeg', 'floortec-2k-ep-thick-coat-894', 'Floortec 2K-EP Thick Coat 894 Floortec 2K-EP Thick Coat 894   Floortec 2K-EP Thick Coat 894', NULL, '1', '2022-07-03 20:48:40', '2022-07-05 09:35:26'),
(13, NULL, 3, 1, 'Floortec 2K-EP Thick Coat 894', '58264.jpeg', 'floortec-2k-ep-thick-coat-894', 'Floortec 2K-EP Thick Coat 894   Floortec 2K-EP Thick Coat 894', NULL, '1', '2022-07-03 20:51:10', '2022-07-05 09:35:45'),
(14, NULL, 3, 2, 'Floortec 2K-EP Thick Coat 894', '63229.jpeg', 'floortec-2k-ep-thick-coat-894', 'Floortec 2K-EP Thick Coat 894  Floortec 2K-EP Thick Coat 894  Floortec 2K-EP Thick Coat 894', NULL, '1', '2022-07-03 20:52:04', '2022-07-05 09:36:15'),
(15, NULL, 1, 7, 'Floortec 2K-EP Thick Coat 894', '91781.jpeg', 'floortec-2k-ep-thick-coat-894', 'Floortec 2K-EP Thick Coat 894  Floortec 2K-EP Thick Coat 894', NULL, '1', '2022-07-03 20:58:35', '2022-07-05 09:37:31'),
(17, NULL, 5, 8, 'Render Floortec 2K-EP Thick Coat 894', '19320.jpeg', 'render-floortec-2k-ep-thick-coat-894', 'Floortec 2K-EP Thick Coat 894   Floortec 2K-EP Thick Coat 894   Floortec 2K-EP Thick Coat 894', NULL, '1', '2022-07-03 21:00:23', '2022-07-05 09:38:27'),
(18, NULL, 2, 5, 'Floortec 2K-EP Thick Coat 894', '4043.jpeg', 'floortec-2k-ep-thick-coat-894', 'Floortec 2K-EP Thick Coat 894   v   Floortec 2K-EP Thick Coat 894', NULL, '1', '2022-07-03 21:01:33', '2022-07-05 09:35:03'),
(19, NULL, 4, 9, 'Floortec 2K-EP Thick Coat 894', '74125.jpeg', 'floortec-2k-ep-thick-coat-894', 'Floortec 2K-EP Thick Coat 894  Floortec 2K-EP Thick Coat 894  Floortec 2K-EP Thick Coat 894', NULL, '1', '2022-07-03 21:02:58', '2022-07-05 09:34:35'),
(20, NULL, 1, 7, 'Floortec 2K-EP Thick Coat 894', '44884.jpeg', 'floortec-2k-ep-thick-coat-894', 'Floortec 2K-EP Thick Coat 894  Floortec 2K-EP Thick Coat 894  Floortec 2K-EP Thick Coat 894', NULL, '1', '2022-07-03 21:03:27', '2022-07-05 09:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('aNkZwrHU3pajh73LwVnxrQvqQrrjVPgFOFyKH5NK', NULL, '103.130.175.32', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSjJ0bDRJOUN4QXM0R1UxM1R3TTlPUGlPOG5GOWZ1R3Q4WWlKVzgxTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjQ6Imh0dHBzOi8vcm9ib3RpY3NhYmNzaG9wLmF1dG92aXNhYm9va2luZy54eXovYWRtaW4vcHJvZHVjdC9pbnNlcnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1659932888),
('FkxqmUTBUgF4sYFXVKFvC9r20bWCQwT26EgtCWt5', NULL, '103.130.175.34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYUtERUtwdVE5UGE1V0JzUmp0QjVSMGNkdGlCTXNCeWw5OUNJMWRreSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vcm9ib3RpY3NhYmNzaG9wLmF1dG92aXNhYm9va2luZy54eXoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1659944834);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `slider_image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Familiar BD Paint quality in a new design', '22197.jpg', '1', '2022-06-23 04:17:41', '2022-07-04 10:32:02'),
(4, 'Quality in wooden coatings has a name: Lignodur', '53497.jpg', '1', '2022-06-23 04:21:50', '2022-06-23 04:21:50'),
(5, 'Renovation with character', '69800.jpg', '1', '2022-06-23 04:22:43', '2022-06-23 04:22:43'),
(6, 'New premium water-based woodstain', '82367.jpg', '1', '2022-06-23 04:23:42', '2022-06-23 04:23:42');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcat_name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Primers', 'primers', '1', '2022-06-21 02:13:27', '2022-06-23 03:17:01'),
(2, 3, 'Impregnations', 'impregnations', '1', '2022-06-23 03:12:56', '2022-06-23 03:17:16'),
(3, 3, 'Special Products', 'special-products', '1', '2022-06-23 03:15:46', '2022-06-23 03:17:23'),
(4, 2, 'Interior paints', 'interior-paints', '1', '2022-06-23 03:18:15', '2022-06-23 03:18:15'),
(5, 2, 'Primers and impregnating materials', 'primers-and-impregnating-materials', '1', '2022-06-23 03:18:45', '2022-06-23 03:18:45'),
(6, 2, 'Facade paints', 'facade-paints', '1', '2022-06-23 03:19:10', '2022-06-23 03:19:10'),
(7, 1, 'Sparey filter', 'sparey-filter', '1', '2022-07-03 20:55:49', '2022-07-03 20:55:49'),
(8, 5, 'Renders', 'renders', '1', '2022-07-03 20:56:24', '2022-07-03 20:56:24'),
(9, 4, 'Creative', 'creative', '1', '2022-07-03 20:57:59', '2022-07-03 20:57:59'),
(11, 12, 'Creative Design', 'creative-design', '1', '2022-08-08 08:27:43', '2022-08-08 08:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin\'s Team', 1, '2022-06-16 02:54:25', '2022-06-16 02:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$uSgyJ1zW.h3dnVJmhg3xouKIhkKnDnLPCk83tYtWrLN9NqkRzoQOm', NULL, NULL, NULL, NULL, 1, NULL, '2022-06-16 02:54:25', '2022-06-21 05:42:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datasheets`
--
ALTER TABLE `datasheets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_galleries`
--
ALTER TABLE `image_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `datasheets`
--
ALTER TABLE `datasheets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image_galleries`
--
ALTER TABLE `image_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
