-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 05:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brillux`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `history` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `history_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `philosophy` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `philosophy_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `research_development` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `research_development_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `history`, `history_image`, `philosophy`, `philosophy_image`, `research_development`, `research_development_image`, `created_at`, `updated_at`) VALUES
(1, '<h1>BDPAINTS direct &ndash; uncompromising quality</h1>\r\n\r\n<p>As a successful, independent family-run company in the fourth generation, our key principles are consistent outstanding product quality, an ecological and economical approach and, above all, lasting customer relationships. We see our customers as partners. This makes many things easier &ndash; and creates a sense of closeness.</p>\r\n\r\n<p>And it&#39;s this closeness that makes the difference. We know the challenges you face in your business. And we like to think ahead with you. For us, &quot;..more than paint&quot; means having foresight for the requirements of the sector and supporting our customers as a partner now and in the future with innovative and economical ideas.</p>\r\n\r\n<p>We see ourselves as a service provider and problem solver with a range of services that go above and beyond the norm. As a direct seller, we are not only a manufacturer and retailer, but also an innovation driver and mouthpiece for the interests of the trade, retail, planners, the housing sector and industry. The Brillux direct philosophy is everyday practice for us.</p>\r\n\r\n<p>With us as a partner, you benefit from a sales network with over 180 branches in Germany, Italy, the Netherlands, Austria, Poland and Switzerland. This means that we are always close by &ndash; exactly where you need us.</p>', '14734.jpg', '<h2>Brillux direct &ndash; uncompromising quality</h2>\r\n\r\n<p>As a successful, independent family-run company in the fourth generation, our key principles are consistent outstanding product quality, an ecological and economical approach and, above all, lasting customer relationships. We see our customers as partners. This makes many things easier &ndash; and creates a sense of closeness.</p>\r\n\r\n<p>And it&#39;s this closeness that makes the difference. We know the challenges you face in your business. And we like to think ahead with you. For us, &quot;..more than paint&quot; means having foresight for the requirements of the sector and supporting our customers as a partner now and in the future with innovative and economical ideas.</p>\r\n\r\n<p>We see ourselves as a service provider and problem solver with a range of services that go above and beyond the norm. As a direct seller, we are not only a manufacturer and retailer, but also an innovation driver and mouthpiece for the interests of the trade, retail, planners, the housing sector and industry. The Brillux direct philosophy is everyday practice for us.</p>\r\n\r\n<p>With us as a partner, you benefit from a sales network with over 180 branches in Germany, Italy, the Netherlands, Austria, Poland and Switzerland. This means that we are always close by &ndash; exactly where you need us.</p>', '48709.jpg', '<h2>Brillux direct &ndash; uncompromising quality</h2>\r\n\r\n<p>As a successful, independent family-run company in the fourth generation, our key principles are consistent outstanding product quality, an ecological and economical approach and, above all, lasting customer relationships. We see our customers as partners. This makes many things easier &ndash; and creates a sense of closeness.</p>\r\n\r\n<p>And it&#39;s this closeness that makes the difference. We know the challenges you face in your business. And we like to think ahead with you. For us, &quot;..more than paint&quot; means having foresight for the requirements of the sector and supporting our customers as a partner now and in the future with innovative and economical ideas.</p>\r\n\r\n<p>We see ourselves as a service provider and problem solver with a range of services that go above and beyond the norm. As a direct seller, we are not only a manufacturer and retailer, but also an innovation driver and mouthpiece for the interests of the trade, retail, planners, the housing sector and industry. The Brillux direct philosophy is everyday practice for us.</p>\r\n\r\n<p>With us as a partner, you benefit from a sales network with over 180 branches in Germany, Italy, the Netherlands, Austria, Poland and Switzerland. This means that we are always close by &ndash; exactly where you need us.</p>', '40966.jpg', NULL, '2022-08-30 04:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `main_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_header` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_header` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_image5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_image6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_image7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_image8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `category_id`, `main_description`, `main_header`, `long_header`, `application_image1`, `application_image2`, `application_image3`, `application_image4`, `application_image5`, `application_image6`, `application_image7`, `application_image8`, `long_description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 12, 'We differentiate between three systems depending on the substrate and ambient conditions: The organically bound system offers long-term protection in urban areas and industrial areas with maximum color shade variety and resistance. With the silicone system, the highly water repellent properties and extremely good water-vapor permeability keep facades dry permanently. The silicate system, on the other hand, convinces with highly weather-resistant, water-vapor-permeable coatings on mineral, silicificating substrates.', 'How this will help The Customer', 'How this will help The Customer', '85556.jpeg', '95344.jpeg', '53101.jpeg', '49766.jpeg', '96499.jpeg', '89204.jpeg', '63450.jpeg', '23877.jpg', '<p>We differentiate between three systems depending on the substrate and ambient conditions: The organically bound system offers long-term protection in urban areas and industrial areas with maximum color shade variety and resistance. With the silicone system, the highly water repellent properties and extremely good water-vapor permeability keep facades dry permanently. The silicate system, on the other hand, convinces with highly weather-resistant, water-vapor-permeable coatings on mineral, silicificating substrates.</p>', 'how-this-will-help-the-customer', '2022-08-30 03:48:00', '2022-09-05 04:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `location`, `shop_owner`, `phone`, `created_at`, `updated_at`) VALUES
(2, 'Banglades', 'dfesf', '8801994573073', '2022-08-27 23:33:30', '2022-08-27 23:35:59'),
(3, 'Gopalgonj color shop', 'rahat', '12356789', '2022-08-28 00:29:49', '2022-08-28 00:29:49'),
(4, 'DHaka Shop', 'yeamin', '01994573073', '2022-08-28 00:30:25', '2022-08-28 00:30:25'),
(5, 'savaer,dhaka', 'rahat', '01706125400', '2022-08-28 00:30:46', '2022-08-28 00:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buying_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` int(11) DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `session_id`, `product_id`, `product_name`, `buying_price`, `selling_price`, `color`, `color_code`, `size`, `quantity`, `user_email`, `created_at`, `updated_at`) VALUES
(34, NULL, 'Mqbh0LZqt7YdUyVRme7wJDCzRNnVtqXL0LgQJiiu', 16, 'Floortec 2K-EP Thick Coat 894 sm dbpaints', NULL, 1000, 'black', '#00FFFF', '500gm', 200, '', NULL, NULL);

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
(2, 1, 'Paints and plasters', 'paints-and-plasters', '6142.jpeg', '1', '2022-06-21 02:12:17', '2022-07-05 00:12:48'),
(3, 1, 'Enamel paints, varnishes and woodstains', 'enamel-paints-varnishes-and-woodstains', NULL, '1', '2022-06-23 03:09:44', '2022-06-23 03:09:44'),
(4, 1, 'Interior design', 'interior-design', NULL, '1', '2022-06-23 03:11:08', '2022-06-23 03:11:08'),
(5, 1, 'Thermal insulation and renders', 'thermal-insulation-and-renders', NULL, '1', '2022-06-23 03:11:34', '2022-06-23 03:11:34'),
(6, 2, 'Color shades', 'color-shades', '44645.jpeg', '1', '2022-06-23 03:43:44', '2022-07-05 03:55:34'),
(7, 2, 'Wall', 'wall', '39827.jpeg', '1', '2022-06-23 03:53:42', '2022-07-05 03:53:54'),
(8, 2, 'Floor', 'floor', '98414.jpeg', '1', '2022-06-23 03:54:04', '2022-07-05 03:54:16'),
(10, 3, 'Facade  protection', 'facade-protection', '42172.jpg', '1', '2022-08-28 22:46:31', '2022-08-28 22:46:31'),
(12, 3, 'High-quality paints', 'high-quality-paints', '44813.jpg', '1', '2022-08-28 22:47:53', '2022-08-28 22:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `color_categories`
--

CREATE TABLE `color_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_categories`
--

INSERT INTO `color_categories` (`id`, `name`, `color_code`, `slug`, `created_at`, `updated_at`) VALUES
(11, 'Mohsin Sikder', '#40E0D0', 'mohsin-sikder', '2022-08-18 00:28:30', '2022-08-18 00:38:18'),
(12, 'sdwefd fg', '#CD5C5C', 'sdwefd-fg', '2022-08-18 00:31:29', '2022-08-18 00:31:29'),
(13, 'fcgthgy', '#DE3163', 'fcgthgy', '2022-08-18 00:32:03', '2022-08-18 00:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `color_shades`
--

CREATE TABLE `color_shades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rgb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cmyk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hbw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_shades`
--

INSERT INTO `color_shades` (`id`, `category_id`, `name`, `color_code`, `rgb`, `cmyk`, `hbw`, `slug`, `created_at`, `updated_at`) VALUES
(1, 11, 'Mohsin', '#FF0000', '255,0,0', 'dmm', 'ddn', 'mohsin', '2022-08-18 01:10:42', '2022-08-18 01:10:42'),
(2, 12, 'Mohsin Sikder', '#FFFF00', '255,255,0', 'rahat', 'ddn', 'mohsin-sikder', '2022-08-18 01:11:46', '2022-08-18 01:11:46'),
(3, 11, 'Mohsin', '#FFFFFF', '255,140,0', 'yeamin', 'ddn', 'mohsin', '2022-08-28 09:40:33', '2022-08-28 09:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `color_shade_images`
--

CREATE TABLE `color_shade_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_shade_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_shade_images`
--

INSERT INTO `color_shade_images` (`id`, `color_shade_image`, `created_at`, `updated_at`) VALUES
(1, '10292.png', '2022-08-31 22:24:33', '2022-08-31 22:24:33'),
(2, '21474.png', '2022-08-31 22:24:46', '2022-08-31 22:24:46'),
(3, '22857.png', '2022-08-31 22:24:59', '2022-08-31 22:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `company_galleries`
--

CREATE TABLE `company_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_galleries`
--

INSERT INTO `company_galleries` (`id`, `slug`, `company_image`, `created_at`, `updated_at`) VALUES
(1, 'bd-paintcom-12432', 'bd-paintcom-20674.png', '2022-08-28 03:28:19', '2022-08-28 03:31:33'),
(2, 'bd-paintcom-78743', 'bd-paintcom-19029.jpeg', '2022-08-28 03:32:50', '2022-08-28 03:32:50'),
(3, 'bd-paintcom-33421', 'bd-paintcom-73501.jpeg', '2022-08-28 05:01:21', '2022-08-28 05:01:21'),
(4, 'bd-paintcom-77194', 'bd-paintcom-33617.jpeg', '2022-08-28 05:01:35', '2022-08-30 05:17:19');

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
-- Table structure for table `floors`
--

CREATE TABLE `floors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luxury_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`id`, `category_id`, `name`, `slug`, `image`, `luxury_image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Mohsin', 'mohsin', '27827.jpg', NULL, '2022-08-17 06:45:23', '2022-08-17 06:45:23'),
(2, 2, 'Mohsin Sikder', 'mohsin-sikder', '16205.jpg', NULL, '2022-08-17 06:45:45', '2022-08-17 06:45:45'),
(3, 1, 'Mohsin Sikder', 'mohsin-sikder', '25466.jpg', '32618.jpg', '2022-08-17 08:42:03', '2022-09-05 06:28:34'),
(4, 1, 'Sikder', 'sikder', '48313.jpg', '63586.jpg', '2022-08-17 08:45:15', '2022-09-05 06:27:40');

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
  `company_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factory_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'TK',
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` int(11) DEFAULT 7,
  `shipping_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twiter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privecy_policy` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_notice` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `site_logo`, `admin_logo`, `favicon`, `website_name`, `year`, `site_title`, `email`, `company_address`, `factory_address`, `mobile`, `currency`, `fb`, `lin`, `insta`, `youtube`, `vat`, `shipping_charge`, `twiter`, `privecy_policy`, `legal_notice`, `created_at`, `updated_at`) VALUES
(1, '20540.jpeg', '4689.jpeg', '77471.jpeg', 'BD Paint.com', NULL, 'BD Paint', 'bdpaint@gmail.com', 'House#480, Road#8,  Baridhara DOHS, Dhaka Cantonment Dhaka-1206', 'Unit # 1:A-17, 22 BSCIC Industrial Estate, Barisal          Unit # 2:117/3, Nayabari Road, Sataish, Tongi, Gazipur', '01715486265', 'TK', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.youtube.com/', 7, '200', 'https://twitter.com/', '<p>edewd</p>', '<p>werwe</p>', NULL, '2022-08-15 21:43:48');

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
(3, 3, '449531656487215.png', '2022-06-29 01:20:16', '2022-06-29 01:20:16'),
(4, 3, '417641659934116.jpeg', '2022-08-07 22:48:36', '2022-08-07 22:48:36'),
(5, 3, '297661659934117.jpeg', '2022-08-07 22:48:37', '2022-08-07 22:48:37'),
(6, 3, '253351659934443.jpeg', '2022-08-07 22:54:03', '2022-08-07 22:54:03'),
(7, 3, '412061659934443.jpeg', '2022-08-07 22:54:03', '2022-08-07 22:54:03'),
(8, 10, '318771659942562.jpeg', '2022-08-08 01:09:22', '2022-08-08 01:09:22'),
(9, 10, '833921659942563.jpeg', '2022-08-08 01:09:23', '2022-08-08 01:09:23'),
(10, 3, '703221659944225.jpeg', '2022-08-08 01:37:05', '2022-08-08 01:37:05'),
(11, 3, '303411659944226.jpeg', '2022-08-08 01:37:06', '2022-08-08 01:37:06'),
(12, 3, '110911659944226.jpeg', '2022-08-08 01:37:06', '2022-08-08 01:37:06'),
(13, 15, '407821660712607.jpeg', '2022-08-16 23:03:27', '2022-08-16 23:03:27'),
(14, 15, '490911660712608.jpeg', '2022-08-16 23:03:28', '2022-08-16 23:03:28'),
(15, 15, '110011660712608.jpeg', '2022-08-16 23:03:28', '2022-08-16 23:03:28'),
(16, 16, '807361661767491.jpeg', '2022-08-29 04:04:51', '2022-08-29 04:04:51'),
(17, 16, '787991661767491.jpeg', '2022-08-29 04:04:51', '2022-08-29 04:04:51'),
(18, 16, '783521661767492.jpeg', '2022-08-29 04:04:52', '2022-08-29 04:04:52');

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
(1, 2, '76321.jpg', '1', '2022-06-27 03:34:29', '2022-06-27 22:53:10'),
(2, 3, '12880.jpg', '1', '2022-06-27 22:35:41', '2022-06-27 22:54:10'),
(3, 5, '52933.jpg', '1', '2022-07-05 00:38:38', '2022-07-05 00:38:38'),
(4, 2, '8745.jpg', '1', '2022-07-05 00:38:57', '2022-07-05 00:38:57'),
(5, 2, '82316.jpg', '1', '2022-07-05 00:39:17', '2022-07-05 00:39:17'),
(6, 4, '38960.jpg', '1', '2022-07-05 00:39:50', '2022-07-05 00:39:50'),
(7, 3, '12659.jpg', '1', '2022-07-05 00:40:19', '2022-07-05 00:40:19');

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
(20, '2022_06_29_073913_create_datasheets_table', 9),
(21, '2022_08_10_100820_create_orders_table', 10),
(22, '2022_08_10_100948_create_carts_table', 10),
(23, '2022_08_10_101004_create_order_products_table', 10),
(24, '2022_08_14_083035_create_order_statuses_table', 11),
(25, '2022_08_14_103033_create_product_attributes_table', 12),
(26, '2022_08_17_114553_create_walls_table', 13),
(27, '2022_08_17_122552_create_floors_table', 14),
(28, '2022_08_18_041616_create_color_categories_table', 15),
(30, '2022_08_18_041634_create_color_shades_table', 16),
(31, '2022_08_28_052721_create_branches_table', 17),
(32, '2022_08_28_063947_create_news_table', 18),
(34, '2022_08_28_075153_create_company_galleries_table', 19),
(35, '2022_08_28_075040_create_videos_table', 20),
(36, '2022_08_29_033342_create_aboutuses_table', 21),
(37, '2022_08_30_062034_create_applications_table', 22),
(38, '2022_09_01_040732_create_color_shade_images_table', 23);

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
(5, 'Media library', '1', '2022-06-23 01:51:53', '2022-06-23 01:51:53'),
(6, 'Company', '1', '2022-06-23 01:52:06', '2022-06-23 01:52:06');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_image`, `slug`, `news_heading`, `description`, `created_at`, `updated_at`) VALUES
(1, '34539.jpg', 'quality-in-wooden-coatings-has-a-name-lignodur', 'Quality in wooden coatings has a name: Lignodur.', '<p>L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,</p>\r\n\r\n<p>L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,</p>\r\n\r\n<p>L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,</p>', '2022-08-28 01:06:56', '2022-09-05 04:20:09'),
(2, '64432.jpg', 'quality-in-wooden-coatings-has-a-name-lignodur', 'Quality in wooden coatings has a name: Lignodur.', '<p>L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,</p>\r\n\r\n<p>L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,</p>\r\n\r\n<p>L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,</p>', '2022-08-28 01:26:59', '2022-09-05 04:19:56'),
(3, 'banmglasdijdeiu-mdxnldekf-97663.jpg', 'quality-in-wooden-coatings-has-a-name-lignodur', 'Quality in wooden coatings has a name: Lignodur.', '<p>L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,</p>\r\n\r\n<p>L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,</p>\r\n\r\n<p>L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,L&ouml;rem ipsum hybridkrig primatos sanade sengen. Hartad realigt med tilogi, till anterade kuliga rev och pregon influerare. Vanas megamins trision, fal. Krolingar pseudod flipperf&ouml;r&auml;lder, vyl&aring;rtad par, inte prevyling vasamma reb&aring;p&aring;r. Antigon odade. Intrasm ded. Exossade ultraprevis i l&auml;shund til&auml;t&aring;kose prel stenossade.&nbsp;<br />\r\nAstror &aring;ling. Okod k&ouml;l&auml;s. Lisade sassa. Koktiga incel s&aring;som epira: h&ouml;rat, ok&ouml;v i b&aring;ning hypodes f&ouml;r att eurov. Sing pseudobuvis d&aring; krom&ouml;ng i anal&auml;s t&ouml;ling trel&ouml;ska p&aring; n&auml;tl&auml;kare. Pregt nena gest att od&auml;lingar, inte homovis krovyll. Esk miprende. Rysa k&aring;r, drevkultur,</p>', '2022-09-04 04:13:17', '2022-09-05 04:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `random_order_id` int(11) NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paybale_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `admin_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_update_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `random_order_id`, `user_name`, `user_email`, `phone`, `user_city`, `user_district`, `pincode`, `address`, `billing_address`, `shipping_address`, `subtotal`, `vat`, `shipping_charge`, `paybale_total`, `status`, `order_status`, `delivery_date`, `admin_comment`, `user_comment`, `last_update_date`, `created_at`, `updated_at`) VALUES
(1, 6, 17981, 'Sikder', 'mohsinsikder895@gmail.com', '01706125400', NULL, NULL, NULL, 'dhaka', NULL, NULL, '1200000', '84000', '200', '1200000', 'New', 'New', NULL, NULL, NULL, NULL, '2022-08-15 22:00:01', '2022-08-15 22:00:01'),
(2, 6, 11851, 'Sikder', 'mohsinsikder895@gmail.com', '01706125400', NULL, NULL, NULL, 'dhaka', NULL, NULL, '1200000', '84000', '200', '1200000', 'New', 'New', NULL, NULL, NULL, NULL, '2022-08-15 22:07:10', '2022-08-15 22:07:10'),
(3, 6, 10310, 'Sikder', 'mohsinsikder895@gmail.com', '01715486265', NULL, NULL, NULL, 'plashbari bazar', NULL, NULL, '1200000', '84000', '200', '1284200', 'New', 'New', NULL, NULL, NULL, NULL, '2022-08-16 00:23:41', '2022-08-16 00:23:41'),
(4, 6, 16082, 'Sikder', 'mohsinsikder895@gmail.com', '01715486265', NULL, NULL, NULL, 'gopalginj', NULL, NULL, '240000', '16800', '200', '257000', 'Packaging', 'New', '2022-09-08', 'aSWADERT', NULL, '2022-08-31', '2022-08-16 23:26:31', '2022-08-31 01:01:44'),
(5, 6, 18685, 'Sikder', 'mohsinsikder895@gmail.com', '01706125400', NULL, NULL, NULL, 'urfi charpara,Manikhar ,Gopalgonj', NULL, NULL, '24600', '1722', '200', '26522', 'New', 'New', NULL, NULL, NULL, NULL, '2022-08-31 09:37:36', '2022-08-31 09:37:36'),
(6, 6, 17107, 'Sikder', 'mohsinsikder895@gmail.com', '01706125400', NULL, NULL, NULL, NULL, NULL, NULL, '1476', '103.32', '200', '1779.32', 'New', 'New', NULL, NULL, NULL, NULL, '2022-08-31 09:45:07', '2022-08-31 09:45:07'),
(7, 6, 17257, 'Sikder', 'mohsinsikder895@gmail.com', '+880171548696', NULL, NULL, NULL, 'plashbari bazar', NULL, NULL, '24600', '1722', '200', '26522', 'New', 'New', NULL, NULL, NULL, NULL, '2022-08-31 09:47:08', '2022-08-31 09:47:08'),
(8, 6, 19365, 'Sikder', 'mohsinsikder895@gmail.com', '+880171548696', NULL, NULL, NULL, NULL, NULL, NULL, '1476', '103.32', '200', '1779.32', 'New', 'New', NULL, NULL, NULL, NULL, '2022-08-31 09:49:21', '2022-08-31 09:49:21'),
(9, 6, 15141, 'Sikder', 'mohsinsikder895@gmail.com', '+880171548696', NULL, NULL, NULL, NULL, NULL, NULL, '1476', '103.32', '200', '1779.32', 'New', 'New', NULL, NULL, NULL, NULL, '2022-08-31 09:50:21', '2022-08-31 09:50:21'),
(10, 6, 19614, 'Sikder', 'mohsinsikder895@gmail.com', '+880171548696', NULL, NULL, NULL, NULL, NULL, NULL, '100000', '7000', '200', '107200', 'New', 'New', NULL, NULL, NULL, NULL, '2022-08-31 09:52:28', '2022-08-31 09:52:28'),
(11, 6, 11585, 'Sikder', 'mohsinsikder895@gmail.com', '+880171548696', NULL, NULL, NULL, NULL, NULL, NULL, '24600', '1722', '200', '26522', 'New', 'New', NULL, NULL, NULL, NULL, '2022-08-31 09:54:51', '2022-08-31 09:54:51'),
(12, 6, 12972, 'Sikder', 'mohsinsikder895@gmail.com', '+880171548696', NULL, NULL, NULL, NULL, NULL, NULL, '24600', '1722', '200', '26522', 'New', 'New', NULL, NULL, NULL, NULL, '2022-08-31 09:56:40', '2022-08-31 09:56:40'),
(13, 6, 13138, 'Sikder', 'mohsinsikder895@gmail.com', '+880171548696', NULL, NULL, NULL, NULL, NULL, NULL, '24600', '1722', '200', '26522', 'New', 'New', NULL, NULL, NULL, NULL, '2022-08-31 10:40:04', '2022-08-31 10:40:04'),
(14, 6, 19336, 'Sikder', 'mohsinsikder895@gmail.com', '+880171548696', NULL, NULL, NULL, NULL, NULL, NULL, '24600', '1722', '200', '26522', 'New', 'New', NULL, NULL, NULL, NULL, '2022-08-31 10:44:07', '2022-08-31 10:44:07'),
(15, 6, 14202, 'Sikder', 'mohsinsikder895@gmail.com', '01706125401', NULL, NULL, NULL, 'urfi charpara,Manikhar ,Gopalgonj', NULL, NULL, '24600', '1722', '200', '26522', 'New', 'New', NULL, NULL, NULL, NULL, '2022-09-01 00:24:11', '2022-09-01 00:24:11'),
(16, 6, 10947, 'Sikder', 'mohsinsikder895@gmail.com', '01706125401', NULL, NULL, NULL, 'urfi charpara,Manikhar ,Gopalgonj', NULL, NULL, '24600', '1722', '200', '26522', 'New', 'New', NULL, NULL, NULL, NULL, '2022-09-01 05:46:21', '2022-09-01 05:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buying_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `user_id`, `product_id`, `order_id`, `product_name`, `buying_price`, `selling_price`, `quantity`, `total`, `color`, `color_code`, `created_at`, `updated_at`) VALUES
(1, 6, 13, 1, 'Floortec 2K-EP Thick Coat 89998', NULL, '1200', 1000, NULL, NULL, NULL, '2022-08-15 22:00:01', '2022-08-15 22:00:01'),
(2, 6, 13, 2, 'Floortec 2K-EP Thick Coat 89998', NULL, '1200', 1000, NULL, NULL, NULL, '2022-08-15 22:07:11', '2022-08-15 22:07:11'),
(3, 6, 13, 3, 'Floortec 2K-EP Thick Coat 89998', NULL, '1200', 1000, NULL, NULL, NULL, '2022-08-16 00:23:41', '2022-08-16 00:23:41'),
(4, 6, 15, 4, 'Floortec 2K-EP Thick Coat 894mohsin', NULL, '1200', 200, NULL, NULL, NULL, '2022-08-16 23:26:31', '2022-08-16 23:26:31'),
(5, 6, 16, 5, 'Floortec 2K-EP Thick Coat 894 sm dbpaints', NULL, '123', 200, NULL, NULL, NULL, '2022-08-31 09:37:36', '2022-08-31 09:37:36'),
(6, 6, 16, 6, 'Floortec 2K-EP Thick Coat 894 sm dbpaints', NULL, '123', 12, NULL, NULL, NULL, '2022-08-31 09:45:07', '2022-08-31 09:45:07'),
(7, 6, 16, 7, 'Floortec 2K-EP Thick Coat 894 sm dbpaints', NULL, '123', 200, NULL, NULL, NULL, '2022-08-31 09:47:08', '2022-08-31 09:47:08'),
(8, 6, 16, 8, 'Floortec 2K-EP Thick Coat 894 sm dbpaints', NULL, '123', 12, NULL, NULL, NULL, '2022-08-31 09:49:21', '2022-08-31 09:49:21'),
(9, 6, 16, 9, 'Floortec 2K-EP Thick Coat 894 sm dbpaints', NULL, '123', 12, NULL, NULL, NULL, '2022-08-31 09:50:21', '2022-08-31 09:50:21'),
(10, 6, 16, 10, 'Floortec 2K-EP Thick Coat 894 sm dbpaints', NULL, '500', 200, NULL, NULL, NULL, '2022-08-31 09:52:28', '2022-08-31 09:52:28'),
(11, 6, 16, 11, 'Floortec 2K-EP Thick Coat 894 sm dbpaints', NULL, '123', 200, NULL, NULL, NULL, '2022-08-31 09:54:51', '2022-08-31 09:54:51'),
(12, 6, 16, 12, 'Floortec 2K-EP Thick Coat 894 sm dbpaints', NULL, '123', 200, NULL, NULL, NULL, '2022-08-31 09:56:40', '2022-08-31 09:56:40'),
(13, 6, 16, 13, 'Floortec 2K-EP Thick Coat 894 sm dbpaints', NULL, '123', 200, NULL, NULL, NULL, '2022-08-31 10:40:05', '2022-08-31 10:40:05'),
(14, 6, 16, 14, 'Floortec 2K-EP Thick Coat 894 sm dbpaints', NULL, '123', 200, NULL, 'black', '#ffffff', '2022-08-31 10:44:07', '2022-08-31 10:44:07'),
(15, 6, 16, 15, 'Floortec 2K-EP Thick Coat 894 sm dbpaints', NULL, '123', 200, NULL, 'black', '#ffffff', '2022-09-01 00:24:11', '2022-09-01 00:24:11'),
(16, 6, 16, 16, 'Floortec 2K-EP Thick Coat 894 sm dbpaints', NULL, '123', 200, NULL, 'black', '#ffffff', '2022-09-01 05:46:21', '2022-09-01 05:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `order_id`, `status`, `order_date`, `delivery_date`, `comment`, `user_comment`, `created_at`, `updated_at`) VALUES
(1, 3, 'New', '2022-08-11', '2022-08-10', 'sdsarfe', 'mohser8@gmail.com', '2022-08-14 03:57:36', '2022-08-14 03:57:36'),
(2, 3, 'New', '2022-08-11', '2022-08-10', 'sdsarfe', 'mohser8@gmail.com', '2022-08-14 03:57:56', '2022-08-14 03:57:56'),
(3, 3, 'New', '2022-08-11', '2022-08-10', 'sdsarfe', 'mohser8@gmail.com', '2022-08-14 03:59:00', '2022-08-14 03:59:00'),
(4, 3, 'New', '2022-08-11', '2022-08-10', 'sdsarfe', 'mohser8@gmail.com', '2022-08-14 03:59:23', '2022-08-14 03:59:23'),
(5, 7, 'New', '2022-08-11', '2022-08-11', 'aSWADERT', 'mohsinsikder8@gmail.com', '2022-08-14 04:00:26', '2022-08-14 04:00:26'),
(6, 7, 'New', '2022-08-11', '2022-08-11', 'aSWADERT', 'mohsinsikder8@gmail.com', '2022-08-14 04:00:49', '2022-08-14 04:00:49'),
(7, 7, 'New', '2022-08-11', '2022-08-17', 'aSWADERT', 'mohsinsikder8@gmail.com', '2022-08-14 04:01:05', '2022-08-14 04:01:05'),
(8, 4, 'Packaging', '2022-08-17', '2022-09-08', 'aSWADERT', NULL, '2022-08-31 01:01:44', '2022-08-31 01:01:44');

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
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `products` (`id`, `module_id`, `category_id`, `subcategory_id`, `product_name`, `color`, `color_code`, `selling_price`, `product_image`, `slug`, `short_description`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, NULL, 3, 2, 'Dettol Ph-balanced Original Handwash Packet Of 1500 Ml', 'black', '#7FFFD4', '1200', '74184.jpeg', 'dettol-ph-balanced-original-handwash-packet-of-1500-ml', 'Facade paint based on silicone-resin for water-resistant and water-vapor-permeable facade coatings on all load-bearing substrates.', NULL, '1', '2022-06-21 03:11:21', '2022-08-16 21:07:46'),
(8, NULL, 3, 2, 'styles shirt', NULL, '#7FFFD4', '1000', '28510.jpg', 'styles-shirt', NULL, NULL, '1', '2022-06-28 00:52:06', '2022-08-14 04:17:26'),
(9, NULL, 2, 5, 'Floortec 2K-EP Thick Coat 898', '0, 191, 255', '#7FFFD4', '1500', '94938.jpeg', 'floortec-2k-ep-thick-coat-898', 'banhdf mnmdfje lwre  fgfthy', '<ul>\r\n	<li>banglades&nbsp;</li>\r\n	<li>Dhaka</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '1', '2022-08-08 01:06:13', '2022-08-14 04:17:45'),
(10, NULL, 2, 5, 'Floortec 2K-EP Thick Coat 899', NULL, '#7FFFD4', '1000', '40955.jpeg', 'floortec-2k-ep-thick-coat-899', 'najsdjbqw c  ke3ij2  ewfdjk 4h  jryhgu3yrh483', '<ul>\r\n	<li>dsd&nbsp; gbhb</li>\r\n	<li>fgtrhuy</li>\r\n</ul>', '1', '2022-08-08 01:09:22', '2022-08-14 04:18:05'),
(11, NULL, 2, 5, 'Floortec 2K-EP Thick Coat 8999', NULL, '#7FFFD4', '1000', '7938.jpeg', 'floortec-2k-ep-thick-coat-8999', 'wedwsrfedgt', NULL, '1', '2022-08-14 04:43:07', '2022-08-14 04:43:07'),
(12, NULL, 2, 5, 'Floortec 2K-EP Thick Coat 8999', NULL, '#7FFFD4', '1000', '43959.jpeg', 'floortec-2k-ep-thick-coat-8999', 'wedwsrfedgt', NULL, '1', '2022-08-14 04:43:43', '2022-08-14 04:43:43'),
(13, NULL, 2, 5, 'Floortec 2K-EP Thick Coat 89998', 'Red', '#7FFFD4', '1000', '72761.jpeg', 'floortec-2k-ep-thick-coat-89998', 'wedwsrfedgt', NULL, '1', '2022-08-14 04:45:20', '2022-08-14 04:45:20'),
(14, NULL, 2, 5, 'Floortec 2K-EP Thick Coat 894msndfbe', NULL, '#7FFFD4', '1200', '1288.jpeg', 'floortec-2k-ep-thick-coat-894msndfbe', 'ewrfehy', NULL, '1', '2022-08-14 06:58:00', '2022-08-14 06:58:00'),
(15, NULL, 3, 2, 'Floortec 2K-EP Thick Coat 894mohsin', 'black', '#FFFFFF', '1000', '32240.jpeg', 'floortec-2k-ep-thick-coat-894mohsin', 'gfrtg b ok', '<ol>\r\n	<li>mohsin</li>\r\n	<li>sikder</li>\r\n</ol>', '1', '2022-08-16 23:03:27', '2022-08-16 23:24:17'),
(16, NULL, 2, 4, 'Floortec 2K-EP Thick Coat 894 sm dbpaints', 'black', '#00FFFF', '1000', '93947.jpeg', 'floortec-2k-ep-thick-coat-894-sm-dbpaints', 'dwesdfer', '<p><a href=\"https://www.brillux.com/produkte/kat1/prodimages/en/600px/BX_3814-9999-0000.jpg\"><img alt=\"PUR Insulation Board 3881\" src=\"https://www.brillux.com/produkte/kat1/prodimages/en/450px/BX_3814-9999-0000.jpg\" /></a></p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<ul>\r\n	<li>facade insulation board made from polyurethane hard foam in accordance with DIN EN 13165</li>\r\n	<li>groove and tongue + special recessed milling for accommodating the Qju Fixing Bracket 3701</li>\r\n	<li>thermal conductivity (depending on the insulation board thickness): 0.026 W / (m &deg; K) &lt; 8 cm, 0.025 W / (m &deg; K) 8 cm + 10 cm, 0.024 W / (m &deg; K) from 12 cm</li>\r\n	<li>WAP application type</li>\r\n	<li>aging-resistant</li>\r\n	<li>non-woven-free</li>\r\n	<li>acid and formaldehyde-free</li>\r\n</ul>\r\n\r\n<p>- length x width (overall): 100 x 50 cm</p>\r\n\r\n<ul>\r\n	<li>effective dimensions: 98.8 x 48.8 cm</li>\r\n</ul>', '1', '2022-08-29 04:04:51', '2022-08-29 04:04:51'),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'kASJQJKWSJK2 MXNVCBJ RE', '<p>ekwfijr4&nbsp; oleri4t45r</p>', '1', '2022-08-30 03:45:24', '2022-08-30 03:45:24'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'kASJQJKWSJK2 MXNVCBJ RE', '<p>ekwfijr4&nbsp; oleri4t45r</p>', '1', '2022-08-30 03:45:24', '2022-08-30 03:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `product_slug`, `product_id`, `sku`, `size`, `stock`, `price`, `created_at`, `updated_at`) VALUES
(1, 'floortec-2k-ep-thick-coat-8999', 13, 'b23-svq', '500gm', '12', 1200, '2022-08-14 04:45:20', '2022-08-14 04:45:20'),
(2, 'floortec-2k-ep-thick-coat-8999', 13, 'b23-svq', '1000gm', '500', 2000, '2022-08-14 04:45:20', '2022-08-14 05:06:02'),
(3, NULL, 14, 'b23-s', '500gm', '10', 2000, '2022-08-14 06:58:01', '2022-08-14 06:58:01'),
(4, NULL, 14, 'b23-svq', '1000gm', '100', 4000, '2022-08-14 06:58:01', '2022-08-14 06:58:01'),
(5, NULL, 15, 'b24-s', '500gm', '1200', 1200, '2022-08-16 23:03:28', '2022-08-16 23:03:28'),
(6, NULL, 15, 'b23-ss', '1000gm', '100', 2400, '2022-08-16 23:03:28', '2022-08-16 23:03:28'),
(7, NULL, 16, 'b24-s', '500gm', '121', 123, '2022-08-29 04:04:52', '2022-08-29 04:04:52'),
(8, NULL, 16, 'b25-s12', '1000gm', '1121', 500, '2022-08-29 04:04:52', '2022-08-29 04:04:52');

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
('v8GRVMhZJSe2NtcG2LAGbSE95rzzm8GRLE0yqy6R', 6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSTh2Q3dsVjNhWmlmcVF1MGlVamRYa3o4OW1JTGpqVnlmM0NTejFWaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjU6Imh0dHA6Ly9sb2NhbGhvc3QvYnJpbGx1eDIvcHJvZHVjdHMvdGhlcm1hbC1pbnN1bGF0aW9uLWFuZC1yZW5kZXJzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NToiY29sb3IiO3M6NToiYmxhY2siO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY7fQ==', 1662392516);

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
(3, 'Familiar BD Paint quality in a new design', '53752.jpg', '1', '2022-06-23 04:17:41', '2022-07-04 05:13:07'),
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
  `subcategory_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcat_name`, `slug`, `subcategory_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Primers', 'primers', '81527.jpeg', '1', '2022-06-21 02:13:27', '2022-07-05 00:21:44'),
(2, 3, 'Impregnations', 'impregnations', '5466.jpeg', '1', '2022-06-23 03:12:56', '2022-07-05 00:23:44'),
(3, 3, 'Special Products', 'special-products', NULL, '1', '2022-06-23 03:15:46', '2022-06-23 03:17:23'),
(4, 2, 'Interior paints', 'interior-paints', NULL, '1', '2022-06-23 03:18:15', '2022-06-23 03:18:15'),
(5, 2, 'Primers and impregnating materials', 'primers-and-impregnating-materials', NULL, '1', '2022-06-23 03:18:45', '2022-06-23 03:18:45'),
(6, 2, 'Facade paints', 'facade-paints', NULL, '1', '2022-06-23 03:19:10', '2022-06-23 03:19:10');

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
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_c` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `slug`, `t_c`, `status`, `email_verified_at`, `password`, `last_login`, `ip`, `address`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, NULL, NULL, '0', NULL, '$2y$10$q3fwQszg/dYWNJXwsTG6seYx1ajBUUILJuIqvX42hn/Swk1WmRd6W', NULL, NULL, 'dhaka', NULL, NULL, NULL, NULL, 1, NULL, '54703.jpg', '2022-06-16 02:54:25', '2022-09-04 23:48:56'),
(6, 'Sikder', 'mohsinsikder895@gmail.com', '01706125401', '53Sikder', NULL, '1', NULL, '$2y$10$RQd26CrM9iv0nZB2CL6J9OCUSFF.PBJ2vu69dUSjPhPplAujNWzU6', '2022-09-05 14:27:13', '::1', 'urfi charpara,Manikhar ,Gopalgonj', 'dhaka', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-10 08:15:51', '2022-09-05 08:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `slug`, `url`, `created_at`, `updated_at`) VALUES
(2, 'bd-paintcom-1886', 'https://www.youtube.com/watch?v=h3h035Eyz5A&list=RDJQz1RKVkE7c&index=2', '2022-08-28 03:36:09', '2022-08-28 03:36:09'),
(3, 'bd-paintcom-77606', 'https://www.youtube.com/watch?v=ZAfAud_M_mg&list=RDJQz1RKVkE7c&index=14', '2022-08-28 04:48:07', '2022-08-28 04:48:07'),
(4, 'bd-paintcom-27711', 'https://www.youtube.com/watch?v=4zXziXwPzPU&list=RDJQz1RKVkE7c&index=16', '2022-08-28 05:00:35', '2022-08-28 05:00:35'),
(5, 'bd-paintcom-43088', 'https://www.youtube.com/watch?v=RgKAFK5djSk&list=RDJQz1RKVkE7c&index=17', '2022-08-28 05:00:56', '2022-08-28 05:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `walls`
--

CREATE TABLE `walls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `walls`
--

INSERT INTO `walls` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'NR-3', 'nr-3', '8867.jpg', '2022-08-17 06:02:53', '2022-08-17 06:08:32'),
(2, 'Sikder', 'sikder', '63247.jpg', '2022-08-17 06:03:58', '2022-08-17 06:08:15'),
(3, 'Mohsin Sikder', 'mohsin-sikder', '14127.jpg', '2022-08-17 06:06:32', '2022-08-17 06:07:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_id` (`category_id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_categories`
--
ALTER TABLE `color_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_shades`
--
ALTER TABLE `color_shades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_shade_images`
--
ALTER TABLE `color_shade_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_galleries`
--
ALTER TABLE `company_galleries`
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
-- Indexes for table `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
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
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
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
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `walls`
--
ALTER TABLE `walls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `color_categories`
--
ALTER TABLE `color_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `color_shades`
--
ALTER TABLE `color_shades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `color_shade_images`
--
ALTER TABLE `color_shade_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_galleries`
--
ALTER TABLE `company_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `floors`
--
ALTER TABLE `floors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image_galleries`
--
ALTER TABLE `image_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `walls`
--
ALTER TABLE `walls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
