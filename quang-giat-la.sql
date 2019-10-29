-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 01:09 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quang-giat-la`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `metatitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` text COLLATE utf8mb4_unicode_ci,
  `publish` tinyint(1) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `isFeatured` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `metatitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `isFeatured`, `position`, `metatitle`, `metadescription`, `parent_id`, `type`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'MŨ LEN', 'HÀNG HOT 2016', 1, 0, NULL, NULL, NULL, 1, 'mu-len', '/images/slide/2019-10-28_5db778258d289.jpg', '2019-10-29 06:22:13', '2019-10-29 06:22:16'),
(2, 'ÁO KHOÁC', 'SALE TỚI 30%', 1, 0, NULL, NULL, NULL, 1, 'ao-khoac', '/images/slide/2019-10-28_5db7783cccb30.jpg', '2019-10-29 06:22:36', '2019-10-29 06:22:36'),
(3, 'ÁO THUN', 'SALE TỚI 30%', 1, 0, NULL, NULL, NULL, 1, 'ao-thun', '/images/slide/2019-10-28_5db7785006da2.jpg', '2019-10-29 06:22:56', '2019-10-29 06:22:56'),
(4, 'ÁO DA CAO CẤP', 'SALE TỚI 30%', 1, 0, NULL, NULL, NULL, 1, 'ao-da-cao-cap', '/images/slide/2019-10-28_5db7785f89b86.jpg', '2019-10-29 06:23:11', '2019-10-29 06:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `url`, `position`, `created_at`, `updated_at`) VALUES
(1, '/images/gallery/2019-10-28_5db77d8c39a45.png', NULL, 1, '2019-10-29 06:45:16', '2019-10-29 06:45:16'),
(2, '/images/gallery/2019-10-28_5db77d91e5b91.png', NULL, 1, '2019-10-29 06:45:21', '2019-10-29 06:45:21'),
(3, '/images/gallery/2019-10-28_5db77d99146c0.png', NULL, 1, '2019-10-29 06:45:29', '2019-10-29 06:45:29'),
(4, '/images/gallery/2019-10-28_5db77d9e7faa4.png', NULL, 1, '2019-10-29 06:45:34', '2019-10-29 06:45:34'),
(5, '/images/gallery/2019-10-28_5db77da373559.png', NULL, 1, '2019-10-29 06:45:39', '2019-10-29 06:45:39'),
(6, '/images/gallery/2019-10-28_5db77daa83108.png', NULL, 1, '2019-10-29 06:45:46', '2019-10-29 06:45:46');

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
(110, '2019_06_16_162600_create_setting_table', 1),
(114, '2014_10_12_000000_create_users_table', 2),
(115, '2014_10_12_100000_create_password_resets_table', 2),
(116, '2019_06_16_162414_create_categories_table', 2),
(117, '2019_06_16_162500_create_articles_table', 2),
(118, '2019_06_16_162522_create_products_table', 2),
(119, '2019_08_22_150746_create_table_galleries', 2),
(120, '2019_10_28_100228_create_settings_table', 2),
(121, '2019_10_28_100951_create_services_table', 2);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount_percent` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` text COLLATE utf8mb4_unicode_ci,
  `publish` tinyint(1) DEFAULT NULL,
  `isFeatured` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `title`, `slug`, `price`, `discount_percent`, `content`, `category_id`, `description`, `images`, `metatitle`, `metadescription`, `publish`, `isFeatured`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Áo khoác da cao cấp 2016', 'ao-khoac-da-cao-cap-2016', 1000000, 10, NULL, NULL, NULL, '[{\"position\":0,\"url\":\"\\/images\\/product\\/vgDmn898GKfrow0uqDUaNhtSpj1nGn3SvvuAyfXV.jpeg\",\"alt\":\"\"}]', NULL, NULL, 1, 1, '2019-10-29 06:04:53', '2019-10-29 06:04:53'),
(2, NULL, 'Áo khoác da cao cấp 2016', 'ao-khoac-da-cao-cap-2016', 1000000, 20, NULL, NULL, NULL, '[{\"position\":0,\"url\":\"\\/images\\/product\\/gsX6i9e3HqEg09TBUMSZLGamOCUBE0CKgZczuKRs.jpeg\",\"alt\":\"\"}]', NULL, NULL, 1, 1, '2019-10-29 06:05:29', '2019-10-29 06:05:37'),
(3, NULL, 'Áo khoác da cao cấp 2016', 'ao-khoac-da-cao-cap-2016', 1000000, 30, NULL, NULL, NULL, '[{\"position\":0,\"url\":\"\\/images\\/product\\/FpdrTW3Ll5DL9phDN8igMPIpPoTKI3mjIZ7mk8mx.jpeg\",\"alt\":\"\"}]', NULL, NULL, 1, 1, '2019-10-29 06:06:09', '2019-10-29 06:06:57'),
(4, NULL, 'Áo khoác da cao cấp 2016', 'ao-khoac-da-cao-cap-2016', 1000000, 20, NULL, NULL, NULL, '[{\"position\":0,\"url\":\"\\/images\\/product\\/PUwaYnh7TLgTc9kFniH0rzxgLMRNKuvKDZRyi0o7.jpeg\",\"alt\":\"\"}]', NULL, NULL, 1, 1, '2019-10-29 06:06:30', '2019-10-29 06:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` text COLLATE utf8mb4_unicode_ci,
  `publish` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy_right` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `logo`, `alt_logo`, `main_text`, `phone`, `footer_logo`, `alt_footer_logo`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, `copy_right`, `created_at`, `updated_at`) VALUES
(1, 'Giặt là', '/images/logo/2019-10-28_5db76b976ef9f.png', 'Giặt là 2019', '<p>D&agrave;nh cho ph&aacute;i đẹp</p>\r\n\r\n<h1><strong>THỜI TRANG Đ&Ocirc;NG XU&Acirc;N</strong></h1>\r\n\r\n<p>CHỈ TỪ 200.000Đ</p>', '01679077796', '/images/footer_logo/2019-10-28_5db76b976f55a.png', 'Giặt là mới nhất', 'HN', 'https://laravel.com/docs/5.8/migrations', 'https://laravel.com/docs/5.8/migrations', 'Duc Anh Tran', 'https://laravel.com/docs/5.8/migrations', '©2017 Bản quyền của Masan Consumer', '2019-10-29 05:28:17', '2019-10-29 05:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'anhtd.dev@gmail.com', NULL, '$2y$10$9QGThkmFwnyBc8UGLLBmyOxKO304hvgA9YLzST39qWGBQNzB2hUPe', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
