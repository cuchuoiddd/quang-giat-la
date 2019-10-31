-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 07:34 PM
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
(121, '2019_10_28_100951_create_services_table', 2),
(123, '2019_10_30_140313_alter_table_settings_add_columns', 3),
(124, '2019_10_31_153155_alter_settings_add_column', 4),
(125, '2019_10_31_165119_alter_settings_add_column', 5);

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
(4, NULL, 'Áo khoác da cao cấp 2016', 'ao-khoac-da-cao-cap-2016', 1000000, 20, NULL, NULL, NULL, '[{\"position\":0,\"url\":\"\\/images\\/product\\/PUwaYnh7TLgTc9kFniH0rzxgLMRNKuvKDZRyi0o7.jpeg\",\"alt\":\"\"}]', NULL, NULL, 1, 1, '2019-10-29 06:06:30', '2019-10-29 06:06:30'),
(5, NULL, 'Áo khoác da cao cấp 2016', 'ao-khoac-da-cao-cap-2016', 1000000, 10, NULL, NULL, NULL, '[{\"position\":0,\"url\":\"\\/images\\/product\\/vgDmn898GKfrow0uqDUaNhtSpj1nGn3SvvuAyfXV.jpeg\",\"alt\":\"\"}]', NULL, NULL, 1, 1, '2019-10-29 06:04:53', '2019-10-29 06:04:53'),
(6, NULL, 'Áo khoác da cao cấp 2016', 'ao-khoac-da-cao-cap-2016', 1000000, 20, NULL, NULL, NULL, '[{\"position\":0,\"url\":\"\\/images\\/product\\/gsX6i9e3HqEg09TBUMSZLGamOCUBE0CKgZczuKRs.jpeg\",\"alt\":\"\"}]', NULL, NULL, 1, 1, '2019-10-29 06:05:29', '2019-10-29 06:05:37'),
(7, NULL, 'Áo khoác da cao cấp 2016', 'ao-khoac-da-cao-cap-2016', 1000000, 30, NULL, NULL, NULL, '[{\"position\":0,\"url\":\"\\/images\\/product\\/FpdrTW3Ll5DL9phDN8igMPIpPoTKI3mjIZ7mk8mx.jpeg\",\"alt\":\"\"}]', NULL, NULL, 1, 1, '2019-10-29 06:06:09', '2019-10-29 06:06:57'),
(8, NULL, 'Áo khoác da cao cấp 2016', 'ao-khoac-da-cao-cap-2016', 1000000, 20, NULL, NULL, NULL, '[{\"position\":0,\"url\":\"\\/images\\/product\\/PUwaYnh7TLgTc9kFniH0rzxgLMRNKuvKDZRyi0o7.jpeg\",\"alt\":\"\"}]', NULL, NULL, 1, 1, '2019-10-29 06:06:30', '2019-10-29 06:06:30');

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
  `limit_block_products` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy_right` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_js` text COLLATE utf8mb4_unicode_ci,
  `android_link` text COLLATE utf8mb4_unicode_ci,
  `ios_link` text COLLATE utf8mb4_unicode_ci,
  `zalo_link` text COLLATE utf8mb4_unicode_ci,
  `tawk_to_widget_code` text COLLATE utf8mb4_unicode_ci,
  `fb_widget_code` text COLLATE utf8mb4_unicode_ci,
  `feature1_heading` text COLLATE utf8mb4_unicode_ci,
  `feature1_subheading` text COLLATE utf8mb4_unicode_ci,
  `feature2_heading` text COLLATE utf8mb4_unicode_ci,
  `feature2_subheading` text COLLATE utf8mb4_unicode_ci,
  `feature3_heading` text COLLATE utf8mb4_unicode_ci,
  `feature3_subheading` text COLLATE utf8mb4_unicode_ci,
  `feature4_heading` text COLLATE utf8mb4_unicode_ci,
  `feature4_subheading` text COLLATE utf8mb4_unicode_ci,
  `banner_image` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `new_product_heading` text COLLATE utf8mb4_unicode_ci,
  `new_product_subheading` text COLLATE utf8mb4_unicode_ci,
  `sale_product_heading` text COLLATE utf8mb4_unicode_ci,
  `sale_product_subheading` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `logo`, `alt_logo`, `main_text`, `phone`, `footer_logo`, `alt_footer_logo`, `limit_block_products`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, `copy_right`, `custom_js`, `android_link`, `ios_link`, `zalo_link`, `tawk_to_widget_code`, `fb_widget_code`, `feature1_heading`, `feature1_subheading`, `feature2_heading`, `feature2_subheading`, `feature3_heading`, `feature3_subheading`, `feature4_heading`, `feature4_subheading`, `banner_image`, `meta_keyword`, `meta_description`, `meta_title`, `new_product_heading`, `new_product_subheading`, `sale_product_heading`, `sale_product_subheading`, `created_at`, `updated_at`) VALUES
(1, 'Giặt là', '/images/logo/2019-10-28_5db76b976ef9f.png', 'Giặt là 2019', '<h2>D&agrave;nh cho ph&aacute;i đẹp</h2>\r\n\r\n<h1><big><strong>THỜI TRANG Đ&Ocirc;NG XU&Acirc;N</strong></big></h1>\r\n\r\n<h3>CHỈ TỪ 200.000Đ</h3>', '01679077796', '/images/footer_logo/2019-10-31_5dbb1f5ad15f9.jpg', 'Giặt là mới nhất', '6', 'HN', 'https://laravel.com/docs/5.8/migrations', 'https://laravel.com/docs/5.8/migrations', 'Duc Anh Tran', 'https://laravel.com/docs/5.8/migrations', '©2017 Bản quyền của Masan Consumer', NULL, 'https://play.google.com/store', 'https://developer.apple.com/support/app-store/', 'https://zalo.me/0972542111', '<!--Start of Tawk.to Script-->\r\n<script type=\"text/javascript\">\r\nvar Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n(function(){\r\nvar s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\ns1.async=true;\r\ns1.src=\'https://embed.tawk.to/5dbaff01e4c2fa4b6bd95f0d/default\';\r\ns1.charset=\'UTF-8\';\r\ns1.setAttribute(\'crossorigin\',\'*\');\r\ns0.parentNode.insertBefore(s1,s0);\r\n})();\r\n</script>\r\n<!--End of Tawk.to Script-->', '<!-- Load Facebook SDK for JavaScript -->\r\n                        <div id=\"fb-root\" class=\" fb_reset\"><div style=\"position: absolute; top: -10000px; width: 0px; height: 0px;\"><div><iframe name=\"fb_xdm_frame_https\" id=\"fb_xdm_frame_https\" aria-hidden=\"true\" title=\"Facebook Cross Domain Communication Frame\" tabindex=\"-1\" frameborder=\"0\" allowtransparency=\"true\" allowfullscreen=\"true\" scrolling=\"no\" allow=\"encrypted-media\" src=\"https://staticxx.facebook.com/connect/xd_arbiter.php?version=44#channel=f270616512ede2c&amp;origin=https%3A%2F%2Fgiupviec88.yez.vn\" style=\"border: none;\"></iframe></div><div></div></div><div class=\"fb-customerchat fb_invisible_flow fb_iframe_widget\" attribution=\"setup_tool\" page_id=\"1434986156636938\" fb-xfbml-state=\"rendered\" fb-iframe-plugin-query=\"app_id=&amp;attribution=setup_tool&amp;container_width=0&amp;locale=vi_VN&amp;page_id=1434986156636938&amp;sdk=joey\"><span style=\"vertical-align: bottom; width: 1000px; height: 0px;\"><iframe name=\"f2af14306e5813\" width=\"1000px\" height=\"1000px\" title=\"\" frameborder=\"0\" allowtransparency=\"true\" allowfullscreen=\"true\" scrolling=\"no\" allow=\"encrypted-media\" src=\"https://www.facebook.com/v4.0/plugins/customerchat.php?app_id=&amp;attribution=setup_tool&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df9ccd9d6eaea68%26domain%3Dgiupviec88.yez.vn%26origin%3Dhttps%253A%252F%252Fgiupviec88.yez.vn%252Ff270616512ede2c%26relation%3Dparent.parent&amp;container_width=0&amp;locale=vi_VN&amp;page_id=1434986156636938&amp;sdk=joey\" style=\"border: none; visibility: visible; width: 288pt; height: 211px; border-radius: 9pt; bottom: 63pt; padding: 0px; position: fixed; right: 9pt; top: auto; z-index: 2147483647; max-height: 0px;\" class=\"\" data-testid=\"dialog_iframe\"></iframe></span></div><div class=\"fb-customerchat fb_invisible_flow fb_iframe_widget\" attribution=\"setup_tool\" page_id=\"1434986156636938\" fb-xfbml-state=\"rendered\" fb-iframe-plugin-query=\"app_id=&amp;attribution=setup_tool&amp;container_width=0&amp;locale=vi_VN&amp;page_id=1434986156636938&amp;sdk=joey\"><span style=\"vertical-align: bottom; width: 1000px; height: 0px;\"><iframe name=\"f51d250d54009c\" width=\"1000px\" height=\"1000px\" title=\"\" frameborder=\"0\" allowtransparency=\"true\" allowfullscreen=\"true\" scrolling=\"no\" allow=\"encrypted-media\" src=\"https://www.facebook.com/v4.0/plugins/customerchat.php?app_id=&amp;attribution=setup_tool&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df29466794f7d9a%26domain%3Dgiupviec88.yez.vn%26origin%3Dhttps%253A%252F%252Fgiupviec88.yez.vn%252Ff270616512ede2c%26relation%3Dparent.parent&amp;container_width=0&amp;locale=vi_VN&amp;page_id=1434986156636938&amp;sdk=joey\" style=\"border: none; visibility: visible; width: 288pt; height: 211px; border-radius: 9pt; bottom: 63pt; padding: 0px; position: fixed; right: 9pt; top: auto; z-index: 2147483647; max-height: 0px;\" class=\" fb_customer_chat_bounce_out_v2\" data-testid=\"dialog_iframe\"></iframe></span></div><div class=\"fb_dialog  fb_dialog_advanced fb_customer_chat_bubble_animated_no_badge\" style=\"background: none; border-radius: 50%; bottom: 18pt; display: none; height: 45pt; padding: 0px; position: fixed; right: 18pt; top: auto; width: 45pt; z-index: 2147483646;\"><div class=\"fb_dialog_content\" style=\"background: none;\"><iframe name=\"blank_f2af14306e5813\" width=\"60px\" tabindex=\"-1\" data-testid=\"bubble_iframe\" frameborder=\"0\" allowtransparency=\"true\" allowfullscreen=\"true\" scrolling=\"no\" allow=\"encrypted-media\" src=\"https://www.facebook.com/v4.0/plugins/customer_chat/bubble\" style=\"border: none;\"></iframe></div></div><div class=\"fb_dialog  fb_dialog_advanced fb_customer_chat_bubble_animated_no_badge fb_customer_chat_bubble_pop_in\" style=\"background: none; border-radius: 50%; bottom: 18pt; display: inline; height: 45pt; padding: 0px; position: fixed; right: 18pt; top: auto; width: 45pt; z-index: 2147483646;\"><div class=\"fb_dialog_content\" style=\"background: none;\"><iframe name=\"blank_f51d250d54009c\" width=\"60px\" tabindex=\"-1\" data-testid=\"bubble_iframe\" frameborder=\"0\" allowtransparency=\"true\" allowfullscreen=\"true\" scrolling=\"no\" allow=\"encrypted-media\" src=\"https://www.facebook.com/v4.0/plugins/customer_chat/bubble\" style=\"border: none;\"></iframe></div></div></div>\r\n                        <script>\r\n                            window.fbAsyncInit = function() {\r\n                            FB.init({\r\n                                xfbml            : true,\r\n                                version          : \'v4.0\'\r\n                            });\r\n                            };\r\n\r\n                            (function(d, s, id) {\r\n                            var js, fjs = d.getElementsByTagName(s)[0];\r\n                            if (d.getElementById(id)) return;\r\n                            js = d.createElement(s); js.id = id;\r\n                            js.src = \'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js\';\r\n                            fjs.parentNode.insertBefore(js, fjs);\r\n                        }(document, \'script\', \'facebook-jssdk\'));</script>', 'THẾ MẠNH 1', 'Bạn có gì đặc biệt?', 'THẾ MẠNH 2', 'Bạn có gì đặc biệt?', 'THẾ MẠNH 3', 'Bạn có gì đặc biệt?', 'THẾ MẠNH 4', 'Bạn có gì đặc biệt?', '/images/banner/2019-10-31_5dbb1fcedce07.jpg', 'Giặt là 2019', 'Giặt là toàn quốc , Giặt là 2019 , giat la, giatla', 'Giặt là toàn quốc', 'SẢN PHẨM MỚI', 'Các mẫu sản phẩm mới nhất trong bộ sưu tập thu - đông năm nay', 'KHUYẾN MÃI', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '2019-10-29 05:28:17', '2019-11-01 01:26:11');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
