-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3308
-- Thời gian đã tạo: Th7 29, 2020 lúc 01:56 AM
-- Phiên bản máy phục vụ: 8.0.18
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `mhd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_user` varchar(1555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `date_order` time NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mhd`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`mhd`, `id_user`, `product_id`, `email`, `name_user`, `phone`, `address`, `qty`, `date_order`, `total`, `created_at`, `updated_at`) VALUES
(1, 0, 2, 'hadv62@wru.vn', 'Dang Van Ha', '0397368768', 'Ha Noi', 1, '09:17:31', 23990000, '2020-06-24 16:17:31', '2020-06-24 16:17:31'),
(2, 0, 2, 'hadv62@wru.vn', 'Hà', '0397368768', 'Ha Noi', 2, '09:21:39', 47980000, '2020-06-24 16:21:39', '2020-06-24 16:21:39'),
(3, 0, 2, 'bapyeu9x@gmail.com', 'Hà', '0397368768', 'Ha Noi', 2, '09:21:59', 47980000, '2020-06-24 16:21:59', '2020-06-24 16:21:59'),
(4, 0, 2, 'bapyeu9x@gmail.com', 'Hà', '0397368768', 'Ha Noi', 2, '09:22:23', 47980000, '2020-06-24 16:22:23', '2020-06-24 16:22:23'),
(5, 0, 2, 'bapyeu9x@gmail.com', 'Hà', '0397368768', 'Ha Noi', 2, '09:25:16', 47980000, '2020-06-24 16:25:16', '2020-06-24 16:25:16'),
(6, 0, 2, 'bapyeu9x@gmail.com', 'Hà', '0397368768', 'Ha Noi', 2, '09:26:17', 47980000, '2020-06-24 16:26:17', '2020-06-24 16:26:17'),
(7, 0, 2, 'bapyeu9x@gmail.com', 'Hà', '12345', 'Ha Noi', 2, '09:28:26', 47980000, '2020-06-24 16:28:26', '2020-06-24 16:28:26'),
(8, 0, 2, 'hadv62@wru.vn', 'Dang Ha', '0397368768', 'Ha Noi', 2, '16:01:08', 47980000, '2020-06-27 09:01:08', '2020-06-27 09:01:08'),
(9, 0, 3, 'dangha@gmail.com', 'Dang Ha', '0397368768', 'Ha Noi', 1, '07:33:32', 29990000, '2020-06-30 00:33:32', '2020-06-30 00:33:32'),
(10, 0, 12, 'hadv62@wru.vn', 'Dang Ha', '0000000', 'Ha Noi', 1, '04:44:21', 1990000, '2020-07-01 21:44:21', '2020-07-01 21:44:21'),
(11, 0, 12, 'hadv62@wru.vn', 'Dang Ha', '00000000', 'Ha Noi', 1, '04:44:44', 1990000, '2020-07-01 21:44:44', '2020-07-01 21:44:44'),
(12, 0, 11, 'bapyeu9x@gmail.com', 'Dang Ha', '0397368768', 'Ha Noi', 1, '04:30:29', 1490000, '2020-07-02 21:30:29', '2020-07-02 21:30:29'),
(13, 0, 12, 'ad@gmail.com', 'ad', '12345678', 'za', 1, '03:47:40', 1990000, '2020-07-19 20:47:40', '2020-07-19 20:47:40'),
(14, 0, 11, 't@gmail.com', 'abc', '019182828', 'Ha Noi', 3, '15:48:42', 4470000, '2020-07-20 08:48:42', '2020-07-20 08:48:42'),
(15, 13, 1, 'huyenltt62@wru.vn', 'Lê Thị Thu Huyền', '021', '1194 đường Láng, Láng Thượng, Đống Đa, Hà Nội', 1, '07:58:03', 11490000, '2020-07-25 00:58:03', '2020-07-25 00:58:03'),
(16, 16, 11, 'hadv@wru.vn', 'Dang Van Ha', '215236346346', 'Ha Noi', 2, '12:07:50', 2980000, '2020-07-28 05:07:50', '2020-07-28 05:07:50'),
(17, 17, 5, 'phuongdung050399@gmail.com', 'Phùng phương dung', '0327484478', '121 trần phú hà đông hà nội', 1, '12:10:44', 11590000, '2020-07-28 05:10:44', '2020-07-28 05:10:44'),
(18, 17, 5, 'phuongdung050399@gmail.com', 'Phung phương dung', '0327484478', '121 trần phú ha đông hà nội', 1, '12:13:50', 11590000, '2020-07-28 05:13:50', '2020-07-28 05:13:50'),
(19, 19, 12, 'vanntb62@wru.vn', 'Nguyễn Thị Bích Vân', '0336997001', '354/137/21 số 31 trường trinh', 1, '12:32:39', 1990000, '2020-07-28 05:32:39', '2020-07-28 05:32:39'),
(20, 20, 11, 'trinhhuyentrang524@gmail.com', 'Trang', '0332883672', 'Hà Nội', 1, '12:38:23', 1490000, '2020-07-28 05:38:23', '2020-07-28 05:38:23'),
(21, 21, 11, 'minhhanh020828@gmail.com', 'Hạnh', '0163435678', 'Hà đông', 1, '12:45:57', 1490000, '2020-07-28 05:45:57', '2020-07-28 05:45:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `id_category`, `name`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Điện Thoại Iphone', NULL, 1, '2020-06-24 15:49:30', NULL),
(2, 1, 'Điện Thoại Sam Sung', NULL, 1, '2020-06-24 15:49:49', NULL),
(3, 1, 'Điện Thoại Xiaomi', NULL, 1, '2020-06-24 15:50:00', NULL),
(4, 1, 'Điện Thoại VSmacth', NULL, 1, '2020-06-24 15:51:10', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Điện Thoại', NULL, 1, '2020-06-24 15:45:10', NULL),
(2, 'Tableb', NULL, 1, '2020-06-24 15:45:59', NULL),
(3, 'Đồng Hồ Thông Minh', NULL, 1, '2020-06-24 15:46:20', NULL),
(4, 'Phụ Kiện', NULL, 1, '2020-06-24 15:46:43', NULL),
(5, 'Sim Thẻ', NULL, 1, '2020-06-24 15:47:31', NULL),
(6, 'Âm Thanh', NULL, 1, '2020-06-24 15:47:51', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chip_cpu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camera_before` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camera_after` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `info`
--

INSERT INTO `info` (`id`, `product_id`, `weight`, `size`, `sim`, `screen`, `chip_cpu`, `pin`, `camera_before`, `camera_after`, `video`, `created_at`, `updated_at`) VALUES
(1, 1, 194, '150.9mm - 75.7mm - 8.3mm', 'Nano-SIM + eSIM', 'IPS LCD 6.1 inches', 'IOS A13 Bionic', '3110 mAh', '12 MP, ƒ/2.2 aperture', '	Camera kép 12MP:\r\n                                - Camera góc rộng: ƒ/1.8 aperture\r\n                                - Camera siêu rộng: ƒ/2.4 aperture', 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps', '2020-06-28 00:02:49', '2020-06-28 00:02:49'),
(2, 2, 194, '150.9mm - 75.7mm - 8.3mm', 'Nano-SIM + eSIM', 'IPS LCD 6.1 inches', 'IOS A13 Bionic', '3110 mAh', '12 MP, ƒ/2.2 aperture', '	Camera kép 12MP:\r\n                                - Camera góc rộng: ƒ/1.8 aperture\r\n                                - Camera siêu rộng: ƒ/2.4 aperture', 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps', '2020-06-28 00:02:49', '2020-06-28 00:02:49'),
(3, 3, 194, '150.9mm - 75.7mm - 8.3mm', 'Nano-SIM + eSIM', 'IPS LCD 6.1 inches', 'IOS A13 Bionic', '3110 mAh', '12 MP, ƒ/2.2 aperture', '	Camera kép 12MP:\r\n                                - Camera góc rộng: ƒ/1.8 aperture\r\n                                - Camera siêu rộng: ƒ/2.4 aperture', 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps', '2020-06-28 00:02:49', '2020-06-28 00:02:49'),
(4, 4, 194, '150.9mm - 75.7mm - 8.3mm', 'Nano-SIM + eSIM', 'IPS LCD 6.1 inches', 'IOS A13 Bionic', '3110 mAh', '12 MP, ƒ/2.2 aperture', '	Camera kép 12MP:\r\n                                - Camera góc rộng: ƒ/1.8 aperture\r\n                                - Camera siêu rộng: ƒ/2.4 aperture', 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps', '2020-06-28 00:02:49', '2020-06-28 00:02:49'),
(5, 5, 194, '150.9mm - 75.7mm - 8.3mm', 'Nano-SIM + eSIM', 'IPS LCD 6.1 inches', 'IOS A13 Bionic', '3110 mAh', '12 MP, ƒ/2.2 aperture', '	Camera kép 12MP:\r\n                                - Camera góc rộng: ƒ/1.8 aperture\r\n                                - Camera siêu rộng: ƒ/2.4 aperture', 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps', '2020-06-27 17:02:49', '2020-06-27 17:02:49'),
(6, 6, 194, '150.9mm - 75.7mm - 8.3mm', 'Nano-SIM + eSIM', 'IPS LCD 6.1 inches', 'IOS A13 Bionic', '3110 mAh', '12 MP, ƒ/2.2 aperture', '	Camera kép 12MP:\r\n                                - Camera góc rộng: ƒ/1.8 aperture\r\n                                - Camera siêu rộng: ƒ/2.4 aperture', 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps', '2020-06-27 17:02:49', '2020-06-27 17:02:49'),
(7, 7, 194, '150.9mm - 75.7mm - 8.3mm', 'Nano-SIM + eSIM', 'IPS LCD 6.1 inches', 'IOS A13 Bionic', '3110 mAh', '12 MP, ƒ/2.2 aperture', '	Camera kép 12MP:\r\n                                - Camera góc rộng: ƒ/1.8 aperture\r\n                                - Camera siêu rộng: ƒ/2.4 aperture', 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps', '2020-06-27 17:02:49', '2020-06-27 17:02:49'),
(8, 8, 194, '150.9mm - 75.7mm - 8.3mm', 'Nano-SIM + eSIM', 'IPS LCD 6.1 inches', 'IOS A13 Bionic', '3110 mAh', '12 MP, ƒ/2.2 aperture', '	Camera kép 12MP:\r\n                                - Camera góc rộng: ƒ/1.8 aperture\r\n                                - Camera siêu rộng: ƒ/2.4 aperture', 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps', '2020-06-27 17:02:49', '2020-06-27 17:02:49'),
(9, 9, 194, '150.9mm - 75.7mm - 8.3mm', 'Nano-SIM + eSIM', 'IPS LCD 6.1 inches', 'IOS A13 Bionic', '3110 mAh', '12 MP, ƒ/2.2 aperture', '	Camera kép 12MP:\r\n                                - Camera góc rộng: ƒ/1.8 aperture\r\n                                - Camera siêu rộng: ƒ/2.4 aperture', 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps', '2020-06-27 17:02:49', '2020-06-27 17:02:49'),
(10, 10, 194, '150.9mm - 75.7mm - 8.3mm', 'Nano-SIM + eSIM', 'IPS LCD 6.1 inches', 'IOS A13 Bionic', '3110 mAh', '12 MP, ƒ/2.2 aperture', '	Camera kép 12MP:\r\n                                - Camera góc rộng: ƒ/1.8 aperture\r\n                                - Camera siêu rộng: ƒ/2.4 aperture', 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps', '2020-06-27 17:02:49', '2020-06-27 17:02:49'),
(11, 11, 194, '150.9mm - 75.7mm - 8.3mm', 'Nano-SIM + eSIM', 'IPS LCD 6.1 inches', 'IOS A13 Bionic', '3110 mAh', '12 MP, ƒ/2.2 aperture', '	Camera kép 12MP:\r\n                                - Camera góc rộng: ƒ/1.8 aperture\r\n                                - Camera siêu rộng: ƒ/2.4 aperture', 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps', '2020-06-27 17:02:49', '2020-06-27 17:02:49'),
(12, 12, 194, '150.9mm - 75.7mm - 8.3mm', 'Nano-SIM + eSIM', 'IPS LCD 6.1 inches', 'IOS A13 Bionic', '3110 mAh', '12 MP, ƒ/2.2 aperture', '	Camera kép 12MP:\r\n                                - Camera góc rộng: ƒ/1.8 aperture\r\n                                - Camera siêu rộng: ƒ/2.4 aperture', 'Quay video 4K ở tốc độ 24 fps, 30 fps hoặc 60 fps', '2020-06-27 17:02:49', '2020-06-27 17:02:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2020_06_10_085716_create_product_table', 2),
(3, '2020_06_10_090053_create_category_table', 2),
(4, '2020_06_10_090123_create_bill_table', 2),
(5, '2020_06_10_090150_create_bill_details_table', 2),
(6, '2020_06_10_090326_create_brand_table', 2),
(7, '2020_06_10_090400_create_user_role_table', 2),
(8, '2020_06_10_091837_create_customer_table', 2),
(9, '2020_06_10_093737_create_info_table', 2),
(10, '2020_06_10_094805_create_size_table', 2),
(11, '2020_06_10_100120_create_color_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(10) NOT NULL,
  `price_unit` int(11) NOT NULL,
  `price_promotion` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `views` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `size_id` (`size_id`),
  KEY `brand_id` (`brand_id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image1`, `image2`, `image3`, `size_id`, `brand_id`, `category_id`, `price_unit`, `price_promotion`, `status`, `total_quantity`, `views`, `created_at`, `updated_at`) VALUES
(1, 'Samsung Galaxy Note 10 Lite', '1592989176_3005700_d6a3ca79b4c0d51166dea30786bbc6d6.webp', '1592989176_7069318.webp', '1999323_91be4ea3e3b4f2de9534e88354e74b62.webp', 7, 2, 1, 11490000, 10, 1, 100, 8, '2020-06-24 15:59:36', '2020-07-25 00:43:57'),
(2, 'Samsung Galaxy S20+ (Plus)', '1592989330_8602682_ea7772b3dc4044f153e42d0a9024f579.png', '1592989330_8881243.png', '61206_b733531ce6afbbd16243181c795515e0.webp', 5, 2, 1, 23990000, 15, 1, 200, 21, '2020-06-24 16:02:10', '2020-07-20 08:44:24'),
(3, 'Samsung Galaxy S20 Ultra', '1592989418_400635_7e1bf54c6ace1971e4a8a43d65ba1335.png', '1592989418_5049680.png', '8656156_d7fb950b1acc9232cad9f2a2809a4823.webp', 7, 2, 1, 29990000, 5, 1, 40, 2, '2020-06-24 16:03:38', '2020-06-30 00:33:10'),
(4, 'iPhone 11 Chính hãng', '1592989527_320932_6c33f3f3839c77af7d2fbddc2be5c2f8.webp', '1592989527_2446032.webp', '8411698_e6148785552d859ea686d80e535b0632.webp', 8, 1, 1, 21990000, 6, 1, 4, 6, '2020-06-24 16:05:27', '2020-07-01 18:57:12'),
(5, 'Apple Watch 5 40mm (GPS) Viền Nhôm Vàng - Dây Hồng Chính hãng (MWV72)', '1593577977_6210299_5a05580b330fd2a30037ec8a8a8256cc.jpg', '1593577977_258777.jpg', '5082273_a1943111b727882fcc7b265eca928cc8.jpg', 3, 1, 3, 11590000, 18, 1, 70, 12, '2020-06-30 21:32:57', '2020-07-28 05:10:05'),
(6, 'Tai nghe không dây chống ồn Sony WF-1000XM3', '1593578127_9797655_c0300036165c48dd00819ddc5ec47127.jpg', '1593578127_7135487.jpg', '9678573_d6f86963a66fa1a75a876d8bbe2dbae8.jpg', 2, 2, 6, 5215000, 5, 1, 90, 9, '2020-06-30 21:35:27', NULL),
(7, 'Samsung Galaxy Watch Active 2', '1593578223_3068445_13c3ba3e2decb2256b0ef1aedae6b1d3.jpg', '1593578223_7239053.jpg', '161266_a3fbffdfc5fa2a9625992ce5c0cf83a1.jpg', 2, 2, 3, 7490000, 20, 1, 82, 11, '2020-06-30 21:37:03', NULL),
(8, 'Tai nghe không dây Samsung Galaxy Buds+', '1593578439_3154052_a485182439db78d44d2034706a47c26d.jpg', '1593578439_1334381.jpeg', '200459_b307fb8aac252827ec5dcb7b1a4dd73e.jpg', 3, 2, 6, 4490000, 40, 1, 69, 80, '2020-06-30 21:40:39', '2020-07-28 05:12:20'),
(9, 'Apple Watch 3 38mm (GPS) Viền Nhôm Xám - Dây đen (MTF02) Chính hãng', '1593578528_7290523_01c645613a13555c7c01a02e32e3001e.jpg', '1593578528_8953839.jpg', '9699205_1c39cb0c2e5e735c04805c6463b13a80.jpg', 2, 1, 3, 6190000, 5, 1, 43, 34, '2020-06-30 21:42:08', NULL),
(10, 'Vòng đeo tay thông minh Xiaomi Mi Band 4', '1593578635_4477987_75b7f094a05f37608993b9a46df385ca.jpg', '1593578635_1046162.jpg', '2549812_c1905a23ab7f96bacb287098e27f1f9f.webp', 3, 3, 3, 850000, 5, 1, 23, 13, '2020-06-30 21:43:55', '2020-07-01 18:56:32'),
(11, 'Tai nghe không dây Defunc True Go Tự hào Việt Nam', '1593578716_2920795_7566f0a4039abfddd3841afc69f9b787.webp', '1593578716_8514135.webp', '3032733_bfa5cb1af27854f6fbd50a420d524f7b.webp', 2, 4, 6, 1490000, 50, 1, 68, 38, '2020-06-30 21:45:16', '2020-07-28 05:44:01'),
(12, 'Tai nghe không dây Xiaomi Airdots Pro chính hãng', '1593578851_8923824_f041dcf2476eb68cfbcd63588b681567.jpg', '1593578851_3997898.jpg', '2336350_8c7441496eeb7ca899efa3a1dd714cb9.webp', 2, 3, 6, 1990000, 50, 1, 29, 31, '2020-06-30 21:47:31', '2020-07-28 05:31:12'),
(13, 'Apple Watch 5 40mm (GPS) Viền Nhôm Vàng - Dây Hồng Chính hãng (MWV72)', '1593750902_9103369_7e44e61e5c62d6f5d3adda87934ea084.jpg', '1593750902_3885862.jpg', '6934520_a02bef1d86c7141385cc194b3ebe3dbe.jpg', 10, 4, 1, 11590000, 5, 1, 4, 1, '2020-07-02 21:35:02', '2020-07-20 08:44:07'),
(23, 'Apple iPhone XR 64GB Chính hãng', '1593936152_936574_a22bccdf1cc5fad7bd1c5df233c407dd.jpg', '1593936152_6788118.jpg', '8657732_163a875afaf7ff23c0a171b569a12259.jpg', 8, 2, 1, 121321564, 4, 1, 4, 2, '2020-07-05 01:02:32', '2020-07-28 05:13:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

DROP TABLE IF EXISTS `size`;
CREATE TABLE IF NOT EXISTS `size` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, '8G', '2020-06-24 15:38:05', NULL),
(2, '4G', '2020-06-24 15:36:59', NULL),
(4, '16G', '2020-06-24 15:38:16', NULL),
(5, '32G', '2020-06-24 15:38:22', NULL),
(7, '64G', '2020-06-24 15:38:48', NULL),
(8, '128G', '2020-06-24 15:39:06', NULL),
(9, '256G', '2020-06-24 15:39:18', NULL),
(10, '516G', '2020-06-24 15:39:27', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `posts` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`id`, `product_id`, `posts`, `created_at`, `updated_at`) VALUES
(2, 1, '<h2>Samsung Note 10 Lite - Phi&ecirc;n bản nhỏ gọn, đa năng của si&ecirc;u ph&acirc;̉m Note 10</h2>\r\n\r\n<p><em><em><strong>Galaxy Note 10 Lite</strong>&nbsp;(ra mắt c&ugrave;ng với Galaxy S10 Lite) l&agrave; phi&ecirc;n bản nhỏ gọn hơn, gi&aacute; rẻ hơn bộ đ&ocirc;i si&ecirc;u phẩm&nbsp;Note 10&nbsp;/&nbsp;<em>Note 10+&nbsp;</em>nhưng v&acirc;̃n giữ nguy&ecirc;n những tinh hoa của người ti&ecirc;̀n nhi&ecirc;̣m. Smartphone dự kiến sẽ được Samsung ra mắt v&agrave;o đầu năm sau, hứa hẹn sẽ mang đến những trải nghiệm tuyệt vời cho người d&ugrave;ng với mức gi&aacute; dễ tiếp cận hơn.</em></em></p>\r\n\r\n<h3>Samsung Note 10 Lite c&oacute; cấu h&igrave;nh như thế n&agrave;o</h3>\r\n\r\n<p>Trong thu&acirc;̣t ngữ c&ocirc;ng ngh&ecirc;̣, chữ &quot;lite&quot; đại di&ecirc;̣n cho &quot;light&quot;, nghĩa l&agrave; phi&ecirc;n bản nhẹ hơn, được thu nhỏ đ&ecirc;̉ v&acirc;̣n h&agrave;nh &ocirc;̉n định m&agrave; kh&ocirc;ng bị gi&acirc;̣t. V&ecirc;̀ cơ bản, b&acirc;́t kỳ thi&ecirc;́t bị n&agrave;o c&oacute; chữ &quot;<strong>Lite</strong>&quot; trong t&ecirc;n sản ph&acirc;̉m đ&ecirc;̀u l&agrave; phi&ecirc;n bản nhỏ hơn, v&acirc;̣n h&agrave;nh nhẹ hơn so với thi&ecirc;́t bị g&ocirc;́c được ra mắt trước đ&oacute;.</p>\r\n\r\n<p><strong>Samsung Note 10 Lite</strong>&nbsp;ch&iacute;nh l&agrave; phi&ecirc;n bản được r&uacute;t gọn v&ecirc;̀ ngoại h&igrave;nh (chi&ecirc;̀u d&agrave;i, r&ocirc;̣ng) l&acirc;̃n c&acirc;́u h&igrave;nh (m&agrave;n h&igrave;nh, dung lượng lưu trữ, dung lượng pin,...). Ngo&agrave;i ra th&igrave; thi&ecirc;́t k&ecirc;́ đặc trưng của d&ograve;ng Note l&acirc;̃n c&aacute;c t&iacute;nh năng như b&uacute;t S-Pen hay bảo m&acirc;̣t sinh trắc học sẽ được giữ nguy&ecirc;n như tr&ecirc;n bản Note 10 g&ocirc;́c. Do đ&oacute; với những ai ưa th&iacute;ch thi&ecirc;́t k&ecirc;́ v&agrave; t&iacute;nh năng của Note 10 nhưng kh&ocirc;ng mu&ocirc;́n smartphone của m&igrave;nh trở n&ecirc;n to lớn v&agrave; c&ocirc;̀ng k&ecirc;̀nh th&igrave; đ&acirc;y sẽ l&agrave; lựa chọn ph&ugrave; hợp nh&acirc;́t.</p>\r\n\r\n<h3>Galaxy Note 10 Lite c&oacute; thi&ecirc;́t k&ecirc;́ vu&ocirc;ng vức đặc trưng của d&ograve;ng Note</h3>\r\n\r\n<p>Nh&igrave;n chung, phi&ecirc;n bản&nbsp;<strong>Galaxy Note 10 Lite</strong>&nbsp;sẽ c&oacute; sự thay đ&ocirc;̉i v&ecirc;̀ ngoại h&igrave;nh. K&iacute;ch thước t&ocirc;̉ng th&ecirc;̉ của thi&ecirc;́t bị sẽ được giảm xu&ocirc;́ng đ&ecirc;̉ tạo cảm gi&aacute;c nhẹ hơn, vừa tay c&acirc;̀m hơn. Ngo&agrave;i ra th&igrave;&nbsp;<a href=\"https://cellphones.com.vn/mobile/samsung/galaxy-note.html\">Samsung Galaxy Note</a>&nbsp;v&acirc;̃n sẽ được k&ecirc;́ thừa thi&ecirc;́t k&ecirc;́ nguy&ecirc;n kh&ocirc;́i sang trọng với k&iacute;nh cường lực&nbsp;Gorilla Glass 6&nbsp;phủ hai mặt v&agrave; mang d&aacute;ng vẻ quy&ecirc;̉n s&ocirc;̉ đặc trưng m&agrave; &quot;người anh&quot; Galaxy Note 10 c&oacute; trước đ&oacute;.</p>', '2020-06-30 03:05:11', NULL),
(3, 2, '<h2>Samsung Note 10 Lite - Phi&ecirc;n bản nhỏ gọn, đa năng của si&ecirc;u ph&acirc;̉m Note 10</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd2-3.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><em><strong>Galaxy Note 10 Lite</strong>&nbsp;(ra mắt c&ugrave;ng với Galaxy S10 Lite) l&agrave; phi&ecirc;n bản nhỏ gọn hơn, gi&aacute; rẻ hơn bộ đ&ocirc;i si&ecirc;u phẩm&nbsp;Note 10&nbsp;/&nbsp;<em>Note 10+&nbsp;</em>nhưng v&acirc;̃n giữ nguy&ecirc;n những tinh hoa của người ti&ecirc;̀n nhi&ecirc;̣m. Smartphone dự kiến sẽ được Samsung ra mắt v&agrave;o đầu năm sau, hứa hẹn sẽ mang đến những trải nghiệm tuyệt vời cho người d&ugrave;ng với mức gi&aacute; dễ tiếp cận hơn.</em></em></p>\r\n\r\n<h3>Samsung Note 10 Lite c&oacute; cấu h&igrave;nh như thế n&agrave;o</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd12-1.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Trong thu&acirc;̣t ngữ c&ocirc;ng ngh&ecirc;̣, chữ &quot;lite&quot; đại di&ecirc;̣n cho &quot;light&quot;, nghĩa l&agrave; phi&ecirc;n bản nhẹ hơn, được thu nhỏ đ&ecirc;̉ v&acirc;̣n h&agrave;nh &ocirc;̉n định m&agrave; kh&ocirc;ng bị gi&acirc;̣t. V&ecirc;̀ cơ bản, b&acirc;́t kỳ thi&ecirc;́t bị n&agrave;o c&oacute; chữ &quot;<strong>Lite</strong>&quot; trong t&ecirc;n sản ph&acirc;̉m đ&ecirc;̀u l&agrave; phi&ecirc;n bản nhỏ hơn, v&acirc;̣n h&agrave;nh nhẹ hơn so với thi&ecirc;́t bị g&ocirc;́c được ra mắt trước đ&oacute;.</p>\r\n\r\n<p><strong>Samsung Note 10 Lite</strong>&nbsp;ch&iacute;nh l&agrave; phi&ecirc;n bản được r&uacute;t gọn v&ecirc;̀ ngoại h&igrave;nh (chi&ecirc;̀u d&agrave;i, r&ocirc;̣ng) l&acirc;̃n c&acirc;́u h&igrave;nh (m&agrave;n h&igrave;nh, dung lượng lưu trữ, dung lượng pin,...). Ngo&agrave;i ra th&igrave; thi&ecirc;́t k&ecirc;́ đặc trưng của d&ograve;ng Note l&acirc;̃n c&aacute;c t&iacute;nh năng như b&uacute;t S-Pen hay bảo m&acirc;̣t sinh trắc học sẽ được giữ nguy&ecirc;n như tr&ecirc;n bản Note 10 g&ocirc;́c. Do đ&oacute; với những ai ưa th&iacute;ch thi&ecirc;́t k&ecirc;́ v&agrave; t&iacute;nh năng của Note 10 nhưng kh&ocirc;ng mu&ocirc;́n smartphone của m&igrave;nh trở n&ecirc;n to lớn v&agrave; c&ocirc;̀ng k&ecirc;̀nh th&igrave; đ&acirc;y sẽ l&agrave; lựa chọn ph&ugrave; hợp nh&acirc;́t.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>Galaxy Note 10 Lite c&oacute; thi&ecirc;́t k&ecirc;́ vu&ocirc;ng vức đặc trưng của d&ograve;ng Note</h3>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd9-1(1).jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Nh&igrave;n chung, phi&ecirc;n bản&nbsp;<strong>Galaxy Note 10 Lite</strong>&nbsp;sẽ c&oacute; sự thay đ&ocirc;̉i v&ecirc;̀ ngoại h&igrave;nh. K&iacute;ch thước t&ocirc;̉ng th&ecirc;̉ của thi&ecirc;́t bị sẽ được giảm xu&ocirc;́ng đ&ecirc;̉ tạo cảm gi&aacute;c nhẹ hơn, vừa tay c&acirc;̀m hơn. Ngo&agrave;i ra th&igrave;&nbsp;<a href=\"https://cellphones.com.vn/mobile/samsung/galaxy-note.html\">Samsung Galaxy Note</a>&nbsp;v&acirc;̃n sẽ được k&ecirc;́ thừa thi&ecirc;́t k&ecirc;́ nguy&ecirc;n kh&ocirc;́i sang trọng với k&iacute;nh cường lực&nbsp;Gorilla Glass 6&nbsp;phủ hai mặt v&agrave; mang d&aacute;ng vẻ quy&ecirc;̉n s&ocirc;̉ đặc trưng m&agrave; &quot;người anh&quot; Galaxy Note 10 c&oacute; trước đ&oacute;.</p>', '2020-06-30 08:52:11', NULL),
(4, 3, '<h2>Samsung Note 10 Lite - Phi&ecirc;n bản nhỏ gọn, đa năng của si&ecirc;u ph&acirc;̉m Note 10</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd2-3.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><em><strong>Galaxy Note 10 Lite</strong>&nbsp;(ra mắt c&ugrave;ng với Galaxy S10 Lite) l&agrave; phi&ecirc;n bản nhỏ gọn hơn, gi&aacute; rẻ hơn bộ đ&ocirc;i si&ecirc;u phẩm&nbsp;Note 10&nbsp;/&nbsp;<em>Note 10+&nbsp;</em>nhưng v&acirc;̃n giữ nguy&ecirc;n những tinh hoa của người ti&ecirc;̀n nhi&ecirc;̣m. Smartphone dự kiến sẽ được Samsung ra mắt v&agrave;o đầu năm sau, hứa hẹn sẽ mang đến những trải nghiệm tuyệt vời cho người d&ugrave;ng với mức gi&aacute; dễ tiếp cận hơn.</em></em></p>\r\n\r\n<h3>Samsung Note 10 Lite c&oacute; cấu h&igrave;nh như thế n&agrave;o</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd12-1.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Trong thu&acirc;̣t ngữ c&ocirc;ng ngh&ecirc;̣, chữ &quot;lite&quot; đại di&ecirc;̣n cho &quot;light&quot;, nghĩa l&agrave; phi&ecirc;n bản nhẹ hơn, được thu nhỏ đ&ecirc;̉ v&acirc;̣n h&agrave;nh &ocirc;̉n định m&agrave; kh&ocirc;ng bị gi&acirc;̣t. V&ecirc;̀ cơ bản, b&acirc;́t kỳ thi&ecirc;́t bị n&agrave;o c&oacute; chữ &quot;<strong>Lite</strong>&quot; trong t&ecirc;n sản ph&acirc;̉m đ&ecirc;̀u l&agrave; phi&ecirc;n bản nhỏ hơn, v&acirc;̣n h&agrave;nh nhẹ hơn so với thi&ecirc;́t bị g&ocirc;́c được ra mắt trước đ&oacute;.</p>\r\n\r\n<p><strong>Samsung Note 10 Lite</strong>&nbsp;ch&iacute;nh l&agrave; phi&ecirc;n bản được r&uacute;t gọn v&ecirc;̀ ngoại h&igrave;nh (chi&ecirc;̀u d&agrave;i, r&ocirc;̣ng) l&acirc;̃n c&acirc;́u h&igrave;nh (m&agrave;n h&igrave;nh, dung lượng lưu trữ, dung lượng pin,...). Ngo&agrave;i ra th&igrave; thi&ecirc;́t k&ecirc;́ đặc trưng của d&ograve;ng Note l&acirc;̃n c&aacute;c t&iacute;nh năng như b&uacute;t S-Pen hay bảo m&acirc;̣t sinh trắc học sẽ được giữ nguy&ecirc;n như tr&ecirc;n bản Note 10 g&ocirc;́c. Do đ&oacute; với những ai ưa th&iacute;ch thi&ecirc;́t k&ecirc;́ v&agrave; t&iacute;nh năng của Note 10 nhưng kh&ocirc;ng mu&ocirc;́n smartphone của m&igrave;nh trở n&ecirc;n to lớn v&agrave; c&ocirc;̀ng k&ecirc;̀nh th&igrave; đ&acirc;y sẽ l&agrave; lựa chọn ph&ugrave; hợp nh&acirc;́t.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>Galaxy Note 10 Lite c&oacute; thi&ecirc;́t k&ecirc;́ vu&ocirc;ng vức đặc trưng của d&ograve;ng Note</h3>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd9-1(1).jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Nh&igrave;n chung, phi&ecirc;n bản&nbsp;<strong>Galaxy Note 10 Lite</strong>&nbsp;sẽ c&oacute; sự thay đ&ocirc;̉i v&ecirc;̀ ngoại h&igrave;nh. K&iacute;ch thước t&ocirc;̉ng th&ecirc;̉ của thi&ecirc;́t bị sẽ được giảm xu&ocirc;́ng đ&ecirc;̉ tạo cảm gi&aacute;c nhẹ hơn, vừa tay c&acirc;̀m hơn. Ngo&agrave;i ra th&igrave;&nbsp;<a href=\"https://cellphones.com.vn/mobile/samsung/galaxy-note.html\">Samsung Galaxy Note</a>&nbsp;v&acirc;̃n sẽ được k&ecirc;́ thừa thi&ecirc;́t k&ecirc;́ nguy&ecirc;n kh&ocirc;́i sang trọng với k&iacute;nh cường lực&nbsp;Gorilla Glass 6&nbsp;phủ hai mặt v&agrave; mang d&aacute;ng vẻ quy&ecirc;̉n s&ocirc;̉ đặc trưng m&agrave; &quot;người anh&quot; Galaxy Note 10 c&oacute; trước đ&oacute;.</p>', '2020-07-01 17:00:00', '2020-07-01 17:00:00'),
(5, 4, '<h2>Samsung Note 10 Lite - Phi&ecirc;n bản nhỏ gọn, đa năng của si&ecirc;u ph&acirc;̉m Note 10</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd2-3.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><em><strong>Galaxy Note 10 Lite</strong>&nbsp;(ra mắt c&ugrave;ng với Galaxy S10 Lite) l&agrave; phi&ecirc;n bản nhỏ gọn hơn, gi&aacute; rẻ hơn bộ đ&ocirc;i si&ecirc;u phẩm&nbsp;Note 10&nbsp;/&nbsp;<em>Note 10+&nbsp;</em>nhưng v&acirc;̃n giữ nguy&ecirc;n những tinh hoa của người ti&ecirc;̀n nhi&ecirc;̣m. Smartphone dự kiến sẽ được Samsung ra mắt v&agrave;o đầu năm sau, hứa hẹn sẽ mang đến những trải nghiệm tuyệt vời cho người d&ugrave;ng với mức gi&aacute; dễ tiếp cận hơn.</em></em></p>\r\n\r\n<h3>Samsung Note 10 Lite c&oacute; cấu h&igrave;nh như thế n&agrave;o</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd12-1.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Trong thu&acirc;̣t ngữ c&ocirc;ng ngh&ecirc;̣, chữ &quot;lite&quot; đại di&ecirc;̣n cho &quot;light&quot;, nghĩa l&agrave; phi&ecirc;n bản nhẹ hơn, được thu nhỏ đ&ecirc;̉ v&acirc;̣n h&agrave;nh &ocirc;̉n định m&agrave; kh&ocirc;ng bị gi&acirc;̣t. V&ecirc;̀ cơ bản, b&acirc;́t kỳ thi&ecirc;́t bị n&agrave;o c&oacute; chữ &quot;<strong>Lite</strong>&quot; trong t&ecirc;n sản ph&acirc;̉m đ&ecirc;̀u l&agrave; phi&ecirc;n bản nhỏ hơn, v&acirc;̣n h&agrave;nh nhẹ hơn so với thi&ecirc;́t bị g&ocirc;́c được ra mắt trước đ&oacute;.</p>\r\n\r\n<p><strong>Samsung Note 10 Lite</strong>&nbsp;ch&iacute;nh l&agrave; phi&ecirc;n bản được r&uacute;t gọn v&ecirc;̀ ngoại h&igrave;nh (chi&ecirc;̀u d&agrave;i, r&ocirc;̣ng) l&acirc;̃n c&acirc;́u h&igrave;nh (m&agrave;n h&igrave;nh, dung lượng lưu trữ, dung lượng pin,...). Ngo&agrave;i ra th&igrave; thi&ecirc;́t k&ecirc;́ đặc trưng của d&ograve;ng Note l&acirc;̃n c&aacute;c t&iacute;nh năng như b&uacute;t S-Pen hay bảo m&acirc;̣t sinh trắc học sẽ được giữ nguy&ecirc;n như tr&ecirc;n bản Note 10 g&ocirc;́c. Do đ&oacute; với những ai ưa th&iacute;ch thi&ecirc;́t k&ecirc;́ v&agrave; t&iacute;nh năng của Note 10 nhưng kh&ocirc;ng mu&ocirc;́n smartphone của m&igrave;nh trở n&ecirc;n to lớn v&agrave; c&ocirc;̀ng k&ecirc;̀nh th&igrave; đ&acirc;y sẽ l&agrave; lựa chọn ph&ugrave; hợp nh&acirc;́t.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>Galaxy Note 10 Lite c&oacute; thi&ecirc;́t k&ecirc;́ vu&ocirc;ng vức đặc trưng của d&ograve;ng Note</h3>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd9-1(1).jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Nh&igrave;n chung, phi&ecirc;n bản&nbsp;<strong>Galaxy Note 10 Lite</strong>&nbsp;sẽ c&oacute; sự thay đ&ocirc;̉i v&ecirc;̀ ngoại h&igrave;nh. K&iacute;ch thước t&ocirc;̉ng th&ecirc;̉ của thi&ecirc;́t bị sẽ được giảm xu&ocirc;́ng đ&ecirc;̉ tạo cảm gi&aacute;c nhẹ hơn, vừa tay c&acirc;̀m hơn. Ngo&agrave;i ra th&igrave;&nbsp;<a href=\"https://cellphones.com.vn/mobile/samsung/galaxy-note.html\">Samsung Galaxy Note</a>&nbsp;v&acirc;̃n sẽ được k&ecirc;́ thừa thi&ecirc;́t k&ecirc;́ nguy&ecirc;n kh&ocirc;́i sang trọng với k&iacute;nh cường lực&nbsp;Gorilla Glass 6&nbsp;phủ hai mặt v&agrave; mang d&aacute;ng vẻ quy&ecirc;̉n s&ocirc;̉ đặc trưng m&agrave; &quot;người anh&quot; Galaxy Note 10 c&oacute; trước đ&oacute;.</p>', NULL, NULL),
(6, 5, '<h2>Samsung Note 10 Lite - Phi&ecirc;n bản nhỏ gọn, đa năng của si&ecirc;u ph&acirc;̉m Note 10</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd2-3.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><em><strong>Galaxy Note 10 Lite</strong>&nbsp;(ra mắt c&ugrave;ng với Galaxy S10 Lite) l&agrave; phi&ecirc;n bản nhỏ gọn hơn, gi&aacute; rẻ hơn bộ đ&ocirc;i si&ecirc;u phẩm&nbsp;Note 10&nbsp;/&nbsp;<em>Note 10+&nbsp;</em>nhưng v&acirc;̃n giữ nguy&ecirc;n những tinh hoa của người ti&ecirc;̀n nhi&ecirc;̣m. Smartphone dự kiến sẽ được Samsung ra mắt v&agrave;o đầu năm sau, hứa hẹn sẽ mang đến những trải nghiệm tuyệt vời cho người d&ugrave;ng với mức gi&aacute; dễ tiếp cận hơn.</em></em></p>\r\n\r\n<h3>Samsung Note 10 Lite c&oacute; cấu h&igrave;nh như thế n&agrave;o</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd12-1.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Trong thu&acirc;̣t ngữ c&ocirc;ng ngh&ecirc;̣, chữ &quot;lite&quot; đại di&ecirc;̣n cho &quot;light&quot;, nghĩa l&agrave; phi&ecirc;n bản nhẹ hơn, được thu nhỏ đ&ecirc;̉ v&acirc;̣n h&agrave;nh &ocirc;̉n định m&agrave; kh&ocirc;ng bị gi&acirc;̣t. V&ecirc;̀ cơ bản, b&acirc;́t kỳ thi&ecirc;́t bị n&agrave;o c&oacute; chữ &quot;<strong>Lite</strong>&quot; trong t&ecirc;n sản ph&acirc;̉m đ&ecirc;̀u l&agrave; phi&ecirc;n bản nhỏ hơn, v&acirc;̣n h&agrave;nh nhẹ hơn so với thi&ecirc;́t bị g&ocirc;́c được ra mắt trước đ&oacute;.</p>\r\n\r\n<p><strong>Samsung Note 10 Lite</strong>&nbsp;ch&iacute;nh l&agrave; phi&ecirc;n bản được r&uacute;t gọn v&ecirc;̀ ngoại h&igrave;nh (chi&ecirc;̀u d&agrave;i, r&ocirc;̣ng) l&acirc;̃n c&acirc;́u h&igrave;nh (m&agrave;n h&igrave;nh, dung lượng lưu trữ, dung lượng pin,...). Ngo&agrave;i ra th&igrave; thi&ecirc;́t k&ecirc;́ đặc trưng của d&ograve;ng Note l&acirc;̃n c&aacute;c t&iacute;nh năng như b&uacute;t S-Pen hay bảo m&acirc;̣t sinh trắc học sẽ được giữ nguy&ecirc;n như tr&ecirc;n bản Note 10 g&ocirc;́c. Do đ&oacute; với những ai ưa th&iacute;ch thi&ecirc;́t k&ecirc;́ v&agrave; t&iacute;nh năng của Note 10 nhưng kh&ocirc;ng mu&ocirc;́n smartphone của m&igrave;nh trở n&ecirc;n to lớn v&agrave; c&ocirc;̀ng k&ecirc;̀nh th&igrave; đ&acirc;y sẽ l&agrave; lựa chọn ph&ugrave; hợp nh&acirc;́t.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>Galaxy Note 10 Lite c&oacute; thi&ecirc;́t k&ecirc;́ vu&ocirc;ng vức đặc trưng của d&ograve;ng Note</h3>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd9-1(1).jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Nh&igrave;n chung, phi&ecirc;n bản&nbsp;<strong>Galaxy Note 10 Lite</strong>&nbsp;sẽ c&oacute; sự thay đ&ocirc;̉i v&ecirc;̀ ngoại h&igrave;nh. K&iacute;ch thước t&ocirc;̉ng th&ecirc;̉ của thi&ecirc;́t bị sẽ được giảm xu&ocirc;́ng đ&ecirc;̉ tạo cảm gi&aacute;c nhẹ hơn, vừa tay c&acirc;̀m hơn. Ngo&agrave;i ra th&igrave;&nbsp;<a href=\"https://cellphones.com.vn/mobile/samsung/galaxy-note.html\">Samsung Galaxy Note</a>&nbsp;v&acirc;̃n sẽ được k&ecirc;́ thừa thi&ecirc;́t k&ecirc;́ nguy&ecirc;n kh&ocirc;́i sang trọng với k&iacute;nh cường lực&nbsp;Gorilla Glass 6&nbsp;phủ hai mặt v&agrave; mang d&aacute;ng vẻ quy&ecirc;̉n s&ocirc;̉ đặc trưng m&agrave; &quot;người anh&quot; Galaxy Note 10 c&oacute; trước đ&oacute;.</p>', NULL, NULL),
(7, 6, '<h2>Samsung Note 10 Lite - Phi&ecirc;n bản nhỏ gọn, đa năng của si&ecirc;u ph&acirc;̉m Note 10</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd2-3.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><em><strong>Galaxy Note 10 Lite</strong>&nbsp;(ra mắt c&ugrave;ng với Galaxy S10 Lite) l&agrave; phi&ecirc;n bản nhỏ gọn hơn, gi&aacute; rẻ hơn bộ đ&ocirc;i si&ecirc;u phẩm&nbsp;Note 10&nbsp;/&nbsp;<em>Note 10+&nbsp;</em>nhưng v&acirc;̃n giữ nguy&ecirc;n những tinh hoa của người ti&ecirc;̀n nhi&ecirc;̣m. Smartphone dự kiến sẽ được Samsung ra mắt v&agrave;o đầu năm sau, hứa hẹn sẽ mang đến những trải nghiệm tuyệt vời cho người d&ugrave;ng với mức gi&aacute; dễ tiếp cận hơn.</em></em></p>\r\n\r\n<h3>Samsung Note 10 Lite c&oacute; cấu h&igrave;nh như thế n&agrave;o</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd12-1.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Trong thu&acirc;̣t ngữ c&ocirc;ng ngh&ecirc;̣, chữ &quot;lite&quot; đại di&ecirc;̣n cho &quot;light&quot;, nghĩa l&agrave; phi&ecirc;n bản nhẹ hơn, được thu nhỏ đ&ecirc;̉ v&acirc;̣n h&agrave;nh &ocirc;̉n định m&agrave; kh&ocirc;ng bị gi&acirc;̣t. V&ecirc;̀ cơ bản, b&acirc;́t kỳ thi&ecirc;́t bị n&agrave;o c&oacute; chữ &quot;<strong>Lite</strong>&quot; trong t&ecirc;n sản ph&acirc;̉m đ&ecirc;̀u l&agrave; phi&ecirc;n bản nhỏ hơn, v&acirc;̣n h&agrave;nh nhẹ hơn so với thi&ecirc;́t bị g&ocirc;́c được ra mắt trước đ&oacute;.</p>\r\n\r\n<p><strong>Samsung Note 10 Lite</strong>&nbsp;ch&iacute;nh l&agrave; phi&ecirc;n bản được r&uacute;t gọn v&ecirc;̀ ngoại h&igrave;nh (chi&ecirc;̀u d&agrave;i, r&ocirc;̣ng) l&acirc;̃n c&acirc;́u h&igrave;nh (m&agrave;n h&igrave;nh, dung lượng lưu trữ, dung lượng pin,...). Ngo&agrave;i ra th&igrave; thi&ecirc;́t k&ecirc;́ đặc trưng của d&ograve;ng Note l&acirc;̃n c&aacute;c t&iacute;nh năng như b&uacute;t S-Pen hay bảo m&acirc;̣t sinh trắc học sẽ được giữ nguy&ecirc;n như tr&ecirc;n bản Note 10 g&ocirc;́c. Do đ&oacute; với những ai ưa th&iacute;ch thi&ecirc;́t k&ecirc;́ v&agrave; t&iacute;nh năng của Note 10 nhưng kh&ocirc;ng mu&ocirc;́n smartphone của m&igrave;nh trở n&ecirc;n to lớn v&agrave; c&ocirc;̀ng k&ecirc;̀nh th&igrave; đ&acirc;y sẽ l&agrave; lựa chọn ph&ugrave; hợp nh&acirc;́t.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>Galaxy Note 10 Lite c&oacute; thi&ecirc;́t k&ecirc;́ vu&ocirc;ng vức đặc trưng của d&ograve;ng Note</h3>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd9-1(1).jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Nh&igrave;n chung, phi&ecirc;n bản&nbsp;<strong>Galaxy Note 10 Lite</strong>&nbsp;sẽ c&oacute; sự thay đ&ocirc;̉i v&ecirc;̀ ngoại h&igrave;nh. K&iacute;ch thước t&ocirc;̉ng th&ecirc;̉ của thi&ecirc;́t bị sẽ được giảm xu&ocirc;́ng đ&ecirc;̉ tạo cảm gi&aacute;c nhẹ hơn, vừa tay c&acirc;̀m hơn. Ngo&agrave;i ra th&igrave;&nbsp;<a href=\"https://cellphones.com.vn/mobile/samsung/galaxy-note.html\">Samsung Galaxy Note</a>&nbsp;v&acirc;̃n sẽ được k&ecirc;́ thừa thi&ecirc;́t k&ecirc;́ nguy&ecirc;n kh&ocirc;́i sang trọng với k&iacute;nh cường lực&nbsp;Gorilla Glass 6&nbsp;phủ hai mặt v&agrave; mang d&aacute;ng vẻ quy&ecirc;̉n s&ocirc;̉ đặc trưng m&agrave; &quot;người anh&quot; Galaxy Note 10 c&oacute; trước đ&oacute;.</p>', NULL, NULL),
(8, 8, '<h2>Samsung Note 10 Lite - Phi&ecirc;n bản nhỏ gọn, đa năng của si&ecirc;u ph&acirc;̉m Note 10</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd2-3.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><em><strong>Galaxy Note 10 Lite</strong>&nbsp;(ra mắt c&ugrave;ng với Galaxy S10 Lite) l&agrave; phi&ecirc;n bản nhỏ gọn hơn, gi&aacute; rẻ hơn bộ đ&ocirc;i si&ecirc;u phẩm&nbsp;Note 10&nbsp;/&nbsp;<em>Note 10+&nbsp;</em>nhưng v&acirc;̃n giữ nguy&ecirc;n những tinh hoa của người ti&ecirc;̀n nhi&ecirc;̣m. Smartphone dự kiến sẽ được Samsung ra mắt v&agrave;o đầu năm sau, hứa hẹn sẽ mang đến những trải nghiệm tuyệt vời cho người d&ugrave;ng với mức gi&aacute; dễ tiếp cận hơn.</em></em></p>\r\n\r\n<h3>Samsung Note 10 Lite c&oacute; cấu h&igrave;nh như thế n&agrave;o</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd12-1.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Trong thu&acirc;̣t ngữ c&ocirc;ng ngh&ecirc;̣, chữ &quot;lite&quot; đại di&ecirc;̣n cho &quot;light&quot;, nghĩa l&agrave; phi&ecirc;n bản nhẹ hơn, được thu nhỏ đ&ecirc;̉ v&acirc;̣n h&agrave;nh &ocirc;̉n định m&agrave; kh&ocirc;ng bị gi&acirc;̣t. V&ecirc;̀ cơ bản, b&acirc;́t kỳ thi&ecirc;́t bị n&agrave;o c&oacute; chữ &quot;<strong>Lite</strong>&quot; trong t&ecirc;n sản ph&acirc;̉m đ&ecirc;̀u l&agrave; phi&ecirc;n bản nhỏ hơn, v&acirc;̣n h&agrave;nh nhẹ hơn so với thi&ecirc;́t bị g&ocirc;́c được ra mắt trước đ&oacute;.</p>\r\n\r\n<p><strong>Samsung Note 10 Lite</strong>&nbsp;ch&iacute;nh l&agrave; phi&ecirc;n bản được r&uacute;t gọn v&ecirc;̀ ngoại h&igrave;nh (chi&ecirc;̀u d&agrave;i, r&ocirc;̣ng) l&acirc;̃n c&acirc;́u h&igrave;nh (m&agrave;n h&igrave;nh, dung lượng lưu trữ, dung lượng pin,...). Ngo&agrave;i ra th&igrave; thi&ecirc;́t k&ecirc;́ đặc trưng của d&ograve;ng Note l&acirc;̃n c&aacute;c t&iacute;nh năng như b&uacute;t S-Pen hay bảo m&acirc;̣t sinh trắc học sẽ được giữ nguy&ecirc;n như tr&ecirc;n bản Note 10 g&ocirc;́c. Do đ&oacute; với những ai ưa th&iacute;ch thi&ecirc;́t k&ecirc;́ v&agrave; t&iacute;nh năng của Note 10 nhưng kh&ocirc;ng mu&ocirc;́n smartphone của m&igrave;nh trở n&ecirc;n to lớn v&agrave; c&ocirc;̀ng k&ecirc;̀nh th&igrave; đ&acirc;y sẽ l&agrave; lựa chọn ph&ugrave; hợp nh&acirc;́t.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>Galaxy Note 10 Lite c&oacute; thi&ecirc;́t k&ecirc;́ vu&ocirc;ng vức đặc trưng của d&ograve;ng Note</h3>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd9-1(1).jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Nh&igrave;n chung, phi&ecirc;n bản&nbsp;<strong>Galaxy Note 10 Lite</strong>&nbsp;sẽ c&oacute; sự thay đ&ocirc;̉i v&ecirc;̀ ngoại h&igrave;nh. K&iacute;ch thước t&ocirc;̉ng th&ecirc;̉ của thi&ecirc;́t bị sẽ được giảm xu&ocirc;́ng đ&ecirc;̉ tạo cảm gi&aacute;c nhẹ hơn, vừa tay c&acirc;̀m hơn. Ngo&agrave;i ra th&igrave;&nbsp;<a href=\"https://cellphones.com.vn/mobile/samsung/galaxy-note.html\">Samsung Galaxy Note</a>&nbsp;v&acirc;̃n sẽ được k&ecirc;́ thừa thi&ecirc;́t k&ecirc;́ nguy&ecirc;n kh&ocirc;́i sang trọng với k&iacute;nh cường lực&nbsp;Gorilla Glass 6&nbsp;phủ hai mặt v&agrave; mang d&aacute;ng vẻ quy&ecirc;̉n s&ocirc;̉ đặc trưng m&agrave; &quot;người anh&quot; Galaxy Note 10 c&oacute; trước đ&oacute;.</p>', NULL, NULL),
(9, 9, '<h2>Samsung Note 10 Lite - Phi&ecirc;n bản nhỏ gọn, đa năng của si&ecirc;u ph&acirc;̉m Note 10</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd2-3.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><em><strong>Galaxy Note 10 Lite</strong>&nbsp;(ra mắt c&ugrave;ng với Galaxy S10 Lite) l&agrave; phi&ecirc;n bản nhỏ gọn hơn, gi&aacute; rẻ hơn bộ đ&ocirc;i si&ecirc;u phẩm&nbsp;Note 10&nbsp;/&nbsp;<em>Note 10+&nbsp;</em>nhưng v&acirc;̃n giữ nguy&ecirc;n những tinh hoa của người ti&ecirc;̀n nhi&ecirc;̣m. Smartphone dự kiến sẽ được Samsung ra mắt v&agrave;o đầu năm sau, hứa hẹn sẽ mang đến những trải nghiệm tuyệt vời cho người d&ugrave;ng với mức gi&aacute; dễ tiếp cận hơn.</em></em></p>\r\n\r\n<h3>Samsung Note 10 Lite c&oacute; cấu h&igrave;nh như thế n&agrave;o</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd12-1.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Trong thu&acirc;̣t ngữ c&ocirc;ng ngh&ecirc;̣, chữ &quot;lite&quot; đại di&ecirc;̣n cho &quot;light&quot;, nghĩa l&agrave; phi&ecirc;n bản nhẹ hơn, được thu nhỏ đ&ecirc;̉ v&acirc;̣n h&agrave;nh &ocirc;̉n định m&agrave; kh&ocirc;ng bị gi&acirc;̣t. V&ecirc;̀ cơ bản, b&acirc;́t kỳ thi&ecirc;́t bị n&agrave;o c&oacute; chữ &quot;<strong>Lite</strong>&quot; trong t&ecirc;n sản ph&acirc;̉m đ&ecirc;̀u l&agrave; phi&ecirc;n bản nhỏ hơn, v&acirc;̣n h&agrave;nh nhẹ hơn so với thi&ecirc;́t bị g&ocirc;́c được ra mắt trước đ&oacute;.</p>\r\n\r\n<p><strong>Samsung Note 10 Lite</strong>&nbsp;ch&iacute;nh l&agrave; phi&ecirc;n bản được r&uacute;t gọn v&ecirc;̀ ngoại h&igrave;nh (chi&ecirc;̀u d&agrave;i, r&ocirc;̣ng) l&acirc;̃n c&acirc;́u h&igrave;nh (m&agrave;n h&igrave;nh, dung lượng lưu trữ, dung lượng pin,...). Ngo&agrave;i ra th&igrave; thi&ecirc;́t k&ecirc;́ đặc trưng của d&ograve;ng Note l&acirc;̃n c&aacute;c t&iacute;nh năng như b&uacute;t S-Pen hay bảo m&acirc;̣t sinh trắc học sẽ được giữ nguy&ecirc;n như tr&ecirc;n bản Note 10 g&ocirc;́c. Do đ&oacute; với những ai ưa th&iacute;ch thi&ecirc;́t k&ecirc;́ v&agrave; t&iacute;nh năng của Note 10 nhưng kh&ocirc;ng mu&ocirc;́n smartphone của m&igrave;nh trở n&ecirc;n to lớn v&agrave; c&ocirc;̀ng k&ecirc;̀nh th&igrave; đ&acirc;y sẽ l&agrave; lựa chọn ph&ugrave; hợp nh&acirc;́t.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>Galaxy Note 10 Lite c&oacute; thi&ecirc;́t k&ecirc;́ vu&ocirc;ng vức đặc trưng của d&ograve;ng Note</h3>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd9-1(1).jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Nh&igrave;n chung, phi&ecirc;n bản&nbsp;<strong>Galaxy Note 10 Lite</strong>&nbsp;sẽ c&oacute; sự thay đ&ocirc;̉i v&ecirc;̀ ngoại h&igrave;nh. K&iacute;ch thước t&ocirc;̉ng th&ecirc;̉ của thi&ecirc;́t bị sẽ được giảm xu&ocirc;́ng đ&ecirc;̉ tạo cảm gi&aacute;c nhẹ hơn, vừa tay c&acirc;̀m hơn. Ngo&agrave;i ra th&igrave;&nbsp;<a href=\"https://cellphones.com.vn/mobile/samsung/galaxy-note.html\">Samsung Galaxy Note</a>&nbsp;v&acirc;̃n sẽ được k&ecirc;́ thừa thi&ecirc;́t k&ecirc;́ nguy&ecirc;n kh&ocirc;́i sang trọng với k&iacute;nh cường lực&nbsp;Gorilla Glass 6&nbsp;phủ hai mặt v&agrave; mang d&aacute;ng vẻ quy&ecirc;̉n s&ocirc;̉ đặc trưng m&agrave; &quot;người anh&quot; Galaxy Note 10 c&oacute; trước đ&oacute;.</p>', NULL, NULL),
(10, 10, '<h2>Samsung Note 10 Lite - Phi&ecirc;n bản nhỏ gọn, đa năng của si&ecirc;u ph&acirc;̉m Note 10</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd2-3.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><em><strong>Galaxy Note 10 Lite</strong>&nbsp;(ra mắt c&ugrave;ng với Galaxy S10 Lite) l&agrave; phi&ecirc;n bản nhỏ gọn hơn, gi&aacute; rẻ hơn bộ đ&ocirc;i si&ecirc;u phẩm&nbsp;Note 10&nbsp;/&nbsp;<em>Note 10+&nbsp;</em>nhưng v&acirc;̃n giữ nguy&ecirc;n những tinh hoa của người ti&ecirc;̀n nhi&ecirc;̣m. Smartphone dự kiến sẽ được Samsung ra mắt v&agrave;o đầu năm sau, hứa hẹn sẽ mang đến những trải nghiệm tuyệt vời cho người d&ugrave;ng với mức gi&aacute; dễ tiếp cận hơn.</em></em></p>\r\n\r\n<h3>Samsung Note 10 Lite c&oacute; cấu h&igrave;nh như thế n&agrave;o</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd12-1.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Trong thu&acirc;̣t ngữ c&ocirc;ng ngh&ecirc;̣, chữ &quot;lite&quot; đại di&ecirc;̣n cho &quot;light&quot;, nghĩa l&agrave; phi&ecirc;n bản nhẹ hơn, được thu nhỏ đ&ecirc;̉ v&acirc;̣n h&agrave;nh &ocirc;̉n định m&agrave; kh&ocirc;ng bị gi&acirc;̣t. V&ecirc;̀ cơ bản, b&acirc;́t kỳ thi&ecirc;́t bị n&agrave;o c&oacute; chữ &quot;<strong>Lite</strong>&quot; trong t&ecirc;n sản ph&acirc;̉m đ&ecirc;̀u l&agrave; phi&ecirc;n bản nhỏ hơn, v&acirc;̣n h&agrave;nh nhẹ hơn so với thi&ecirc;́t bị g&ocirc;́c được ra mắt trước đ&oacute;.</p>\r\n\r\n<p><strong>Samsung Note 10 Lite</strong>&nbsp;ch&iacute;nh l&agrave; phi&ecirc;n bản được r&uacute;t gọn v&ecirc;̀ ngoại h&igrave;nh (chi&ecirc;̀u d&agrave;i, r&ocirc;̣ng) l&acirc;̃n c&acirc;́u h&igrave;nh (m&agrave;n h&igrave;nh, dung lượng lưu trữ, dung lượng pin,...). Ngo&agrave;i ra th&igrave; thi&ecirc;́t k&ecirc;́ đặc trưng của d&ograve;ng Note l&acirc;̃n c&aacute;c t&iacute;nh năng như b&uacute;t S-Pen hay bảo m&acirc;̣t sinh trắc học sẽ được giữ nguy&ecirc;n như tr&ecirc;n bản Note 10 g&ocirc;́c. Do đ&oacute; với những ai ưa th&iacute;ch thi&ecirc;́t k&ecirc;́ v&agrave; t&iacute;nh năng của Note 10 nhưng kh&ocirc;ng mu&ocirc;́n smartphone của m&igrave;nh trở n&ecirc;n to lớn v&agrave; c&ocirc;̀ng k&ecirc;̀nh th&igrave; đ&acirc;y sẽ l&agrave; lựa chọn ph&ugrave; hợp nh&acirc;́t.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>Galaxy Note 10 Lite c&oacute; thi&ecirc;́t k&ecirc;́ vu&ocirc;ng vức đặc trưng của d&ograve;ng Note</h3>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd9-1(1).jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Nh&igrave;n chung, phi&ecirc;n bản&nbsp;<strong>Galaxy Note 10 Lite</strong>&nbsp;sẽ c&oacute; sự thay đ&ocirc;̉i v&ecirc;̀ ngoại h&igrave;nh. K&iacute;ch thước t&ocirc;̉ng th&ecirc;̉ của thi&ecirc;́t bị sẽ được giảm xu&ocirc;́ng đ&ecirc;̉ tạo cảm gi&aacute;c nhẹ hơn, vừa tay c&acirc;̀m hơn. Ngo&agrave;i ra th&igrave;&nbsp;<a href=\"https://cellphones.com.vn/mobile/samsung/galaxy-note.html\">Samsung Galaxy Note</a>&nbsp;v&acirc;̃n sẽ được k&ecirc;́ thừa thi&ecirc;́t k&ecirc;́ nguy&ecirc;n kh&ocirc;́i sang trọng với k&iacute;nh cường lực&nbsp;Gorilla Glass 6&nbsp;phủ hai mặt v&agrave; mang d&aacute;ng vẻ quy&ecirc;̉n s&ocirc;̉ đặc trưng m&agrave; &quot;người anh&quot; Galaxy Note 10 c&oacute; trước đ&oacute;.</p>', NULL, NULL),
(11, 11, '<h2>Samsung Note 10 Lite - Phi&ecirc;n bản nhỏ gọn, đa năng của si&ecirc;u ph&acirc;̉m Note 10</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd2-3.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><em><strong>Galaxy Note 10 Lite</strong>&nbsp;(ra mắt c&ugrave;ng với Galaxy S10 Lite) l&agrave; phi&ecirc;n bản nhỏ gọn hơn, gi&aacute; rẻ hơn bộ đ&ocirc;i si&ecirc;u phẩm&nbsp;Note 10&nbsp;/&nbsp;<em>Note 10+&nbsp;</em>nhưng v&acirc;̃n giữ nguy&ecirc;n những tinh hoa của người ti&ecirc;̀n nhi&ecirc;̣m. Smartphone dự kiến sẽ được Samsung ra mắt v&agrave;o đầu năm sau, hứa hẹn sẽ mang đến những trải nghiệm tuyệt vời cho người d&ugrave;ng với mức gi&aacute; dễ tiếp cận hơn.</em></em></p>\r\n\r\n<h3>Samsung Note 10 Lite c&oacute; cấu h&igrave;nh như thế n&agrave;o</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd12-1.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Trong thu&acirc;̣t ngữ c&ocirc;ng ngh&ecirc;̣, chữ &quot;lite&quot; đại di&ecirc;̣n cho &quot;light&quot;, nghĩa l&agrave; phi&ecirc;n bản nhẹ hơn, được thu nhỏ đ&ecirc;̉ v&acirc;̣n h&agrave;nh &ocirc;̉n định m&agrave; kh&ocirc;ng bị gi&acirc;̣t. V&ecirc;̀ cơ bản, b&acirc;́t kỳ thi&ecirc;́t bị n&agrave;o c&oacute; chữ &quot;<strong>Lite</strong>&quot; trong t&ecirc;n sản ph&acirc;̉m đ&ecirc;̀u l&agrave; phi&ecirc;n bản nhỏ hơn, v&acirc;̣n h&agrave;nh nhẹ hơn so với thi&ecirc;́t bị g&ocirc;́c được ra mắt trước đ&oacute;.</p>\r\n\r\n<p><strong>Samsung Note 10 Lite</strong>&nbsp;ch&iacute;nh l&agrave; phi&ecirc;n bản được r&uacute;t gọn v&ecirc;̀ ngoại h&igrave;nh (chi&ecirc;̀u d&agrave;i, r&ocirc;̣ng) l&acirc;̃n c&acirc;́u h&igrave;nh (m&agrave;n h&igrave;nh, dung lượng lưu trữ, dung lượng pin,...). Ngo&agrave;i ra th&igrave; thi&ecirc;́t k&ecirc;́ đặc trưng của d&ograve;ng Note l&acirc;̃n c&aacute;c t&iacute;nh năng như b&uacute;t S-Pen hay bảo m&acirc;̣t sinh trắc học sẽ được giữ nguy&ecirc;n như tr&ecirc;n bản Note 10 g&ocirc;́c. Do đ&oacute; với những ai ưa th&iacute;ch thi&ecirc;́t k&ecirc;́ v&agrave; t&iacute;nh năng của Note 10 nhưng kh&ocirc;ng mu&ocirc;́n smartphone của m&igrave;nh trở n&ecirc;n to lớn v&agrave; c&ocirc;̀ng k&ecirc;̀nh th&igrave; đ&acirc;y sẽ l&agrave; lựa chọn ph&ugrave; hợp nh&acirc;́t.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>Galaxy Note 10 Lite c&oacute; thi&ecirc;́t k&ecirc;́ vu&ocirc;ng vức đặc trưng của d&ograve;ng Note</h3>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd9-1(1).jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Nh&igrave;n chung, phi&ecirc;n bản&nbsp;<strong>Galaxy Note 10 Lite</strong>&nbsp;sẽ c&oacute; sự thay đ&ocirc;̉i v&ecirc;̀ ngoại h&igrave;nh. K&iacute;ch thước t&ocirc;̉ng th&ecirc;̉ của thi&ecirc;́t bị sẽ được giảm xu&ocirc;́ng đ&ecirc;̉ tạo cảm gi&aacute;c nhẹ hơn, vừa tay c&acirc;̀m hơn. Ngo&agrave;i ra th&igrave;&nbsp;<a href=\"https://cellphones.com.vn/mobile/samsung/galaxy-note.html\">Samsung Galaxy Note</a>&nbsp;v&acirc;̃n sẽ được k&ecirc;́ thừa thi&ecirc;́t k&ecirc;́ nguy&ecirc;n kh&ocirc;́i sang trọng với k&iacute;nh cường lực&nbsp;Gorilla Glass 6&nbsp;phủ hai mặt v&agrave; mang d&aacute;ng vẻ quy&ecirc;̉n s&ocirc;̉ đặc trưng m&agrave; &quot;người anh&quot; Galaxy Note 10 c&oacute; trước đ&oacute;.</p>', NULL, NULL),
(12, 12, '<h2>Samsung Note 10 Lite - Phi&ecirc;n bản nhỏ gọn, đa năng của si&ecirc;u ph&acirc;̉m Note 10</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd2-3.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><em><strong>Galaxy Note 10 Lite</strong>&nbsp;(ra mắt c&ugrave;ng với Galaxy S10 Lite) l&agrave; phi&ecirc;n bản nhỏ gọn hơn, gi&aacute; rẻ hơn bộ đ&ocirc;i si&ecirc;u phẩm&nbsp;Note 10&nbsp;/&nbsp;<em>Note 10+&nbsp;</em>nhưng v&acirc;̃n giữ nguy&ecirc;n những tinh hoa của người ti&ecirc;̀n nhi&ecirc;̣m. Smartphone dự kiến sẽ được Samsung ra mắt v&agrave;o đầu năm sau, hứa hẹn sẽ mang đến những trải nghiệm tuyệt vời cho người d&ugrave;ng với mức gi&aacute; dễ tiếp cận hơn.</em></em></p>\r\n\r\n<h3>Samsung Note 10 Lite c&oacute; cấu h&igrave;nh như thế n&agrave;o</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd12-1.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Trong thu&acirc;̣t ngữ c&ocirc;ng ngh&ecirc;̣, chữ &quot;lite&quot; đại di&ecirc;̣n cho &quot;light&quot;, nghĩa l&agrave; phi&ecirc;n bản nhẹ hơn, được thu nhỏ đ&ecirc;̉ v&acirc;̣n h&agrave;nh &ocirc;̉n định m&agrave; kh&ocirc;ng bị gi&acirc;̣t. V&ecirc;̀ cơ bản, b&acirc;́t kỳ thi&ecirc;́t bị n&agrave;o c&oacute; chữ &quot;<strong>Lite</strong>&quot; trong t&ecirc;n sản ph&acirc;̉m đ&ecirc;̀u l&agrave; phi&ecirc;n bản nhỏ hơn, v&acirc;̣n h&agrave;nh nhẹ hơn so với thi&ecirc;́t bị g&ocirc;́c được ra mắt trước đ&oacute;.</p>\r\n\r\n<p><strong>Samsung Note 10 Lite</strong>&nbsp;ch&iacute;nh l&agrave; phi&ecirc;n bản được r&uacute;t gọn v&ecirc;̀ ngoại h&igrave;nh (chi&ecirc;̀u d&agrave;i, r&ocirc;̣ng) l&acirc;̃n c&acirc;́u h&igrave;nh (m&agrave;n h&igrave;nh, dung lượng lưu trữ, dung lượng pin,...). Ngo&agrave;i ra th&igrave; thi&ecirc;́t k&ecirc;́ đặc trưng của d&ograve;ng Note l&acirc;̃n c&aacute;c t&iacute;nh năng như b&uacute;t S-Pen hay bảo m&acirc;̣t sinh trắc học sẽ được giữ nguy&ecirc;n như tr&ecirc;n bản Note 10 g&ocirc;́c. Do đ&oacute; với những ai ưa th&iacute;ch thi&ecirc;́t k&ecirc;́ v&agrave; t&iacute;nh năng của Note 10 nhưng kh&ocirc;ng mu&ocirc;́n smartphone của m&igrave;nh trở n&ecirc;n to lớn v&agrave; c&ocirc;̀ng k&ecirc;̀nh th&igrave; đ&acirc;y sẽ l&agrave; lựa chọn ph&ugrave; hợp nh&acirc;́t.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>Galaxy Note 10 Lite c&oacute; thi&ecirc;́t k&ecirc;́ vu&ocirc;ng vức đặc trưng của d&ograve;ng Note</h3>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/blog/public/upload/images/samsung-galaxy-note-10-lite-tgdd9-1(1).jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Nh&igrave;n chung, phi&ecirc;n bản&nbsp;<strong>Galaxy Note 10 Lite</strong>&nbsp;sẽ c&oacute; sự thay đ&ocirc;̉i v&ecirc;̀ ngoại h&igrave;nh. K&iacute;ch thước t&ocirc;̉ng th&ecirc;̉ của thi&ecirc;́t bị sẽ được giảm xu&ocirc;́ng đ&ecirc;̉ tạo cảm gi&aacute;c nhẹ hơn, vừa tay c&acirc;̀m hơn. Ngo&agrave;i ra th&igrave;&nbsp;<a href=\"https://cellphones.com.vn/mobile/samsung/galaxy-note.html\">Samsung Galaxy Note</a>&nbsp;v&acirc;̃n sẽ được k&ecirc;́ thừa thi&ecirc;́t k&ecirc;́ nguy&ecirc;n kh&ocirc;́i sang trọng với k&iacute;nh cường lực&nbsp;Gorilla Glass 6&nbsp;phủ hai mặt v&agrave; mang d&aacute;ng vẻ quy&ecirc;̉n s&ocirc;̉ đặc trưng m&agrave; &quot;người anh&quot; Galaxy Note 10 c&oacute; trước đ&oacute;.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, 'Dang Van Ha', 'hadv@wru.vn', 0, '$2y$10$3tl5OX.QIYTYt7z9tX5I1OwOiYTKaMKzCLZ4h014zZiVgTuP4cr3S', 'IByb4HcHYcnxyC5gtfTXmLCKBUfcgiPIj7CECObM2dqQej4UWfDp3Hi4CwEO', NULL, NULL),
(14, 'Dang Van Ha', 'bapyeu9x@gmail.com', 1, '$2y$10$jt6/CG.lg7Dn2.vXf6wAb.VHdE79Pri69iyITeNleLV8wkNnSzhlK', 'uAP9soh3CWzOulaxUF18Ye8Xx3JfZuApTDJbR7whOQWU1TpaMGGLbwLONMlf', NULL, NULL),
(15, 'Phuong', 'Phuongbtt62@wru.vn', 0, '$2y$10$/EGYvfVQX.E9Rlb0NWeKjOCP6byhLlII8DkpNP.cC0g4g.ohyXBXe', NULL, NULL, NULL),
(4, 'Dang Ha', 'dvha1998@gmail.com', 1, '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL),
(7, 'Dang Ha', 'hadv62@wru.vn', 1, '$2y$10$iuFZ2gY060e79ZRvaPz3uejwelEQBaJQeecvCSrZyYpjR9W3CN/WG', 'YFM4dr4Z1yTnTDOgQ47vkMkpvwWiuhFBOHOSDoLRR5G5wtjid627QVMiQnyB', NULL, NULL),
(9, 'Dang Ha', 'bapcai@gmail.com', 0, '$2y$10$v.gunDchrQfz2E5cRbBntudEWh5oGnjTIEzuhA524Sl1fQFp45See', 'eRJqjBDzSe3NQb216vzB9qA7joy4VoIs7t37K3vUrPn6b6jcElROrkK1xl9O', NULL, NULL),
(10, 'abc', 't@gmail.com', 0, '$2y$10$8VThgZ2rCzNK27d9hrv7we1.eWG9UqlvZdQDfieDWzeO3boo4.JV2', 'CyBJa0WI7UwmQ8sQjdh9MevLIZqKvU03tRwR9n63whBCgdtRqLPURcg2cppP', NULL, NULL),
(11, 'ha', 'bapcai@98.com', 1, '12343462352', NULL, NULL, NULL),
(13, 'Lê Thị Thu Huyền', 'huyenltt62@wru.vn', 0, '$2y$10$0/L2nIhmlPkgzDft39qWf.1K57bfjQEqPMwTNkeylxHJwd0aXqN6e', 'aO2sAr9sx3uzs99cjMnTEwg0sMiUYNlBVOGKu6GDiUQgH1weMU8VRPtOGHvy', NULL, NULL),
(17, 'Phuongdung', 'phuongdung050399@gmail.com', 0, '$2y$10$LlxsE4qunLEZxgcxeLOJ/OP9WBoZKs4tL.a7jxCn8pruuXeJ.ixK2', NULL, NULL, NULL),
(18, 'Vân Nguyễn', 'Nguyenvan12n98@gmail.com', 0, '$2y$10$PsAL4YB.6jRxZz6AX48We.yBCQqA3F/Ovy207LxDCOjconEShCvoa', NULL, NULL, NULL),
(19, 'Bích Vân', 'Vanntb62@wru.vn', 0, '$2y$10$Lgl2CcDEdUm1mfhYVJ/ID.oVOXPmXpnegjVpZCp5JAMOVGCyA7TS.', NULL, NULL, NULL),
(20, 'trinhhuyentrang524@gmail.com', 'trinhhuyentrang524@gmail.com', 0, '$2y$10$Sw903kRdI/6UoyBJBxbU/eTpr5UlBrLj8PPsa3266cMcqr378Scx.', NULL, NULL, NULL),
(21, 'Hạnh', 'minhhanh020828@gmail.com', 0, '$2y$10$guHRCGkatYIvtdw8hHYPJOxKC9JXqhsuWsyA1ZGDm8jCP9itzXH6e', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
