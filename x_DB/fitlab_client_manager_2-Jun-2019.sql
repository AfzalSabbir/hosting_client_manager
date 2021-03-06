-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2019 at 08:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitlab_client_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_role` tinyint(4) DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `admin_role`, `photo`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super@gmail.com', 'superadmin', 1, 'public/images/admins/1556265063.png', '$2y$10$cW9KVqhUuLOearR9Uhr9yeiUBnxRPJvY3KsjttKr77tKMNZab7Ncm', 1, 'd6OPS5bVirEvKreL58LDqijh13Rm1c6Ea1CymFC8oI5KMxTjbJzCpTkEf5gH', '2019-03-25 01:00:00', '2019-04-26 01:51:05'),
(2, 'Admin', 'admin@gmail.com', 'admin', 2, NULL, '$2y$10$3eUb3dspSaecGyAWo0jOp.r2N83ZUQRYaJMh/058e3apUV5XSmlQq', 1, 'sZE0KVFsqcRuovw6Eu0YQ5VywZRgduSp3CXwxauqRtiDsrVYRl7z8dZWYhxK', '2019-03-25 01:00:00', '2019-04-26 02:15:22'),
(3, 'aaaaaa', 'afzalsabbir.bd@gmail.com', 'aaaaaa', 3, NULL, '$2y$10$P1rFOIiR1hB4IdUDBw/KKenlpz9LK80jAw/IWulwNUXF6hnc90lzu', 1, NULL, '2019-04-25 13:46:07', '2019-04-25 13:46:07'),
(4, 'bbbbbb', 'afzalbd1@gmail.comk', 'bbbbbb', 3, NULL, '$2y$10$wpvJp1iVMxNM6Tkzn9IRwe6CftljT2xXkj13euFuV.mJorisuC17y', 1, NULL, '2019-04-25 13:47:19', '2019-04-25 13:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `admin_access_infos`
--

CREATE TABLE `admin_access_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin_access_infos`
--

INSERT INTO `admin_access_infos` (`id`, `admin_id`, `ip`, `country`, `device`, `browser`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 21:23:58', '2019-04-13 21:23:58'),
(2, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 21:32:58', '2019-04-13 21:32:58'),
(3, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 09:54:11', '2019-04-13 09:54:11'),
(4, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 09:54:28', '2019-04-13 09:54:28'),
(5, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 11:15:57', '2019-04-13 11:15:57'),
(6, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-14 07:02:21', '2019-04-14 07:02:21'),
(7, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-15 12:30:22', '2019-04-15 12:30:22'),
(8, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-16 12:40:57', '2019-04-16 12:40:57'),
(9, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-18 12:56:28', '2019-04-18 12:56:28'),
(10, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-19 09:40:46', '2019-04-19 09:40:46'),
(11, 1, '127.0.0.1', NULL, 'PC', 'Firefox', 1, '2019-04-19 09:52:12', '2019-04-19 09:52:12'),
(12, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-19 09:52:53', '2019-04-19 09:52:53'),
(13, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-19 10:10:57', '2019-04-19 10:10:57'),
(14, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-21 13:35:26', '2019-04-21 13:35:26'),
(15, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-23 11:19:55', '2019-04-23 11:19:55'),
(16, 2, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-23 12:18:56', '2019-04-23 12:18:56'),
(17, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-23 12:19:59', '2019-04-23 12:19:59'),
(18, 1, '::1', NULL, 'PC', 'Firefox', 1, '2019-04-25 09:33:47', '2019-04-25 09:33:47'),
(19, 1, '::1', NULL, 'PC', 'Firefox', 1, '2019-04-25 11:28:26', '2019-04-25 11:28:26'),
(20, 1, '::1', NULL, 'PC', 'Firefox', 1, '2019-04-25 22:14:32', '2019-04-25 22:14:32'),
(21, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-30 05:41:04', '2019-04-30 05:41:04'),
(22, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-06-01 23:34:55', '2019-06-01 23:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `sub_category_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` int(10) UNSIGNED DEFAULT NULL,
  `upazila_id` int(10) UNSIGNED DEFAULT NULL,
  `domain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hosting` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `renewal_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_charge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `contact_person`, `mobile`, `email`, `address`, `district_id`, `upazila_id`, `domain`, `hosting`, `project_price`, `renewal_price`, `service_charge`, `expiration_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Beck Mckinney', 'Eaque est aut quidem', 'Non et explicabo Do', 'cituryny@mailinator.com', 'Voluptatem Aut fugi', 48, 374, 'https://www.natir.co.uk', 'Eligendi qui amet e', '826', '536', '70', '2018-12-05', 1, '2019-06-01 23:45:36', '2019-06-01 23:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_cost` double(8,2) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `country`, `shipping_cost`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(2, 'Faridpur', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(3, 'Gazipur', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(4, 'Gopalganj', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(5, 'Jamalpur', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(6, 'Kishoreganj', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(7, 'Madaripur', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(8, 'Manikganj', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(9, 'Munshiganj', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(10, 'Mymensingh', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(11, 'Narayanganj', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(12, 'Narsingdi', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(13, 'Netrokona', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(14, 'Rajbari', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(15, 'Shariatpur', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(16, 'Sherpur', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(17, 'Tangail', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(18, 'Bogra', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(19, 'Joypurhat', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(20, 'Naogaon', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(21, 'Natore', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(22, 'Nawabganj', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(23, 'Pabna', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(24, 'Rajshahi', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(25, 'Sirajgonj', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(26, 'Dinajpur', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(27, 'Gaibandha', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(28, 'Kurigram', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(29, 'Lalmonirhat', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(30, 'Nilphamari', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(31, 'Panchagarh', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(32, 'Rangpur', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(33, 'Thakurgaon', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(34, 'Barguna', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(35, 'Barisal', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(36, 'Bhola', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(37, 'Jhalokati', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(38, 'Patuakhali', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(39, 'Pirojpur', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(40, 'Bandarban', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(41, 'Brahmanbaria', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(42, 'Chandpur', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(43, 'Chittagong', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(44, 'Comilla', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(45, 'Coxs Bazar', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(46, 'Feni', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(47, 'Khagrachari', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(48, 'Lakshmipur', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(49, 'Noakhali', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(50, 'Rangamati', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(51, 'Habiganj', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(52, 'Maulvibazar', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(53, 'Sunamganj', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(54, 'Sylhet', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(55, 'Bagerhat', 'Bangladesh', 22.00, 1, '2019-04-05 16:00:00', '2019-04-10 08:30:00'),
(56, 'Chuadanga', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(57, 'Jessore', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(58, 'Jhenaidah', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(59, 'Khulna', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(60, 'Kushtia', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(61, 'Magura', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(62, 'Meherpur', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(63, 'Narail', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-05 16:00:00'),
(64, 'Satkhira', 'Bangladesh', 0.00, 1, '2019-04-05 16:00:00', '2019-04-09 20:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `menu_position` int(10) UNSIGNED DEFAULT NULL COMMENT '0 - Left | 1 - Left In | 2 - Right Top',
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu`, `menu_bn`, `parent_id`, `menu_position`, `icon`, `url`, `route`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'ড্যাশবোর্ড', NULL, 0, 'fa fa-dashboard', '/admin', 'admin.home', 1, 1, '2019-03-24 23:02:05', '2019-03-24 23:02:05'),
(2, 'Menu Permission', 'মেনু পারমিশন', NULL, 0, 'fa fa-cogs', '/admin/role', 'admin.role.index', 997, 1, '2019-03-24 22:44:32', '2019-04-23 05:29:07'),
(3, 'Action', 'একশন', 2, 0, 'fa fa-home', '/admin/role', 'admin.role.index', 1, 1, '2019-04-23 05:27:09', '2019-04-23 05:27:09'),
(4, 'Assign', 'অনুমতি প্রদান', 3, 1, 'fa fa-pencil', '/admin/role/assign', 'admin.role.assign', 1, 1, '2019-03-24 22:48:50', '2019-04-23 05:27:39'),
(5, 'Site Settings', 'সাইট সেটিংস', NULL, 0, 'fa fa-sliders', '/admin/setting', 'admin.setting.index', 450, 1, '2019-04-10 16:30:44', '2019-04-10 20:33:10'),
(6, 'Change Password', 'পাসওয়ার্ড পরিবর্তন', NULL, 2, 'fa fa-cog', '/admin/change-password', 'admin.password.form', 2, 1, '2019-03-24 22:42:35', '2019-04-23 06:20:29'),
(7, 'Log Activity', 'লগ এক্টিভিটি', NULL, 0, 'fa fa-cog', '/admin/log', 'admin.log.index', 998, 1, '2019-03-24 22:46:37', '2019-04-23 05:28:41'),
(8, 'Category', 'ক্যাটাগরি', NULL, 0, 'fa fa-pie-chart', NULL, NULL, 90, 1, '2019-03-29 15:51:15', '2019-03-29 18:11:55'),
(9, 'Category List', 'ক্যাটাগরি তালিকা', 8, 0, 'fa fa-list-ul', '/admin/category', 'admin.category.index', 1, 1, '2019-03-29 15:51:59', '2019-03-29 15:51:59'),
(10, 'Add New', 'নতুন যোগ করুন', 8, 0, 'fa fa-plus', '/admin/category/add', 'admin.category.create', 2, 1, '2019-03-29 15:52:31', '2019-03-29 15:52:31'),
(11, 'Edit', 'এডিট', 9, 1, 'fa fa-pencil', NULL, 'admin.category.edit', 1, 1, '2019-03-29 15:53:02', '2019-03-29 16:55:28'),
(12, 'Delete', 'ডিলিট', 9, 1, 'fa fa-trash', NULL, 'admin.category.delete', 2, 1, '2019-03-29 15:53:33', '2019-03-29 17:01:25'),
(13, 'Subcategory', 'সাবক্যাটাগরি', NULL, 0, 'fa fa-yelp', NULL, NULL, 91, 1, '2019-03-29 15:55:21', '2019-03-29 17:15:18'),
(14, 'Subcategory List', 'সাবক্যাটাগরি তালিকা', 13, 0, 'fa fa-list-ul', '/admin/subcategory', 'admin.subcategory.index', 1, 1, '2019-03-29 15:56:04', '2019-03-29 15:56:04'),
(15, 'Add New', 'নতুন যোগ করুন', 13, 0, 'fa fa-plus', '/admin/subcategory/add', 'admin.subcategory.create', 2, 1, '2019-03-29 15:56:42', '2019-03-29 15:56:42'),
(16, 'Edit', 'এডিট', 14, 1, 'fa fa-pencil', NULL, 'admin.subcategory.edit', 1, 1, '2019-03-29 15:58:08', '2019-03-29 15:58:08'),
(17, 'Delete', 'ডিলিট', 14, 1, 'fa fa-trash', NULL, 'admin.subcategory.delete', 2, 1, '2019-03-29 15:58:53', '2019-03-29 15:58:53'),
(18, 'Brand', 'ব্রান্ড', NULL, 0, 'fa fa-briefcase', NULL, NULL, 51, 1, '2019-04-02 21:29:14', '2019-04-05 18:20:18'),
(19, 'Brand List', 'ব্রান্ড তালিকা', 18, 0, 'fa fa-list-ul', '/admin/brand', 'admin.brand.index', 1, 1, '2019-04-03 17:00:57', '2019-04-03 17:03:50'),
(20, 'Add Brand', 'নতুন যোগ করুন', 18, 0, 'fa fa-plus', '/admin/brand/add', 'admin.brand.create', 2, 1, '2019-04-03 17:03:10', '2019-04-03 17:03:18'),
(21, 'Edit', 'এডিট', 19, 1, 'fa fa-pencil', NULL, 'admin.brand.edit', 1, 1, '2019-04-03 17:06:54', '2019-04-03 17:10:28'),
(22, 'Delete', 'ডিলিট', 19, 1, 'fa fa-trash', NULL, 'admin.brand.delete', 2, 1, '2019-04-03 17:07:45', '2019-04-03 17:10:35'),
(23, 'All Admin', 'সকল এডমিন', NULL, 2, 'fa fa-users', '/admin/all-admin', 'admin.all_admin.index', 1, 1, '2019-04-10 20:37:34', '2019-04-23 05:43:40'),
(24, 'Add Admin', 'এডমিন যোগ করুন', 23, 0, 'fa fa-plus', '/admin/all-admin/add', 'admin.all_admin.add', 2, 1, '2019-04-10 20:39:51', '2019-04-10 20:39:51'),
(25, 'Action', 'একশন', 23, 0, 'fa fa-home', '/admin/all-admin', 'admin.all_admin.index', 1, 1, '2019-04-23 06:27:34', '2019-04-23 06:27:34'),
(26, 'Edit', 'এডিট', 25, 1, 'fa fa-pencil', NULL, 'admin.all_admin.edit', 1, 1, '2019-04-10 20:40:57', '2019-04-23 06:28:07'),
(27, 'Delete', 'ডিলিট', 25, 1, 'fa fa-trash', NULL, 'admin.all_admin.delete', 2, 1, '2019-04-10 20:42:59', '2019-04-23 06:28:13'),
(28, 'Backup', 'ব্যাকআপ', NULL, 0, 'fa fa-cog', '/admin/backup', 'admin.backup.index', 999, 1, '2019-04-18 21:49:55', '2019-04-18 21:55:47'),
(29, 'Action', 'কার্যক্রম', 28, 0, 'fa fa-home', '/admin/backup', 'admin.backup.index', 1, 0, '2019-04-18 21:51:23', '2019-04-18 21:54:34'),
(30, 'Download', 'ডাউনলোড', 29, 1, 'fa fa-download', NULL, 'admin.backup.index', 1, 1, '2019-04-18 21:52:24', '2019-04-18 21:52:24'),
(31, 'Delete', 'ডিলিট', 29, 1, 'fa fa-trash', NULL, 'admin.backup.index', 2, 1, '2019-04-18 21:52:58', '2019-04-18 21:52:58'),
(32, 'SMS', 'এসএমএস', NULL, 0, 'fa fa-envelope', NULL, NULL, 1, 1, NULL, NULL),
(33, 'Send', 'প্রেরন', 32, 0, 'fa fa-envelope', 'admin/sms/send', 'admin.sms.send', 999, 1, NULL, NULL),
(34, 'Custom', 'কাস্টম', 32, 0, 'fa fa-envelope', 'admin/sms/custom', 'admin.sms.custom', 2, 1, NULL, NULL),
(35, 'Report', 'প্রতিবেদন', 32, 0, 'fa fa-envelope', 'admin/sms/report', 'admin.sms.report', 3, 1, NULL, NULL),
(36, 'Client', 'ক্লায়েন্ট', NULL, 0, 'fa fa-id-card', NULL, NULL, 10, 1, '2019-06-01 05:02:41', '2019-06-01 05:04:45'),
(37, 'Add New', 'নতুন যোগ করুন', 36, 0, 'fa fa-plus', 'admin/client/add', 'admin.client.add', 1, 1, '2019-06-01 05:02:41', '2019-06-01 05:02:41'),
(38, 'Client List', 'ক্লায়েন্ট তালিকা', 36, 0, 'fa fa-list-ul', 'admin/client', 'admin.client.index', 2, 1, '2019-06-01 05:02:41', '2019-06-01 05:02:41'),
(39, 'View', 'দেখা', 38, 1, 'fa fa-eye', '', 'admin.client.view', 1, 1, '2019-06-01 05:02:41', '2019-06-01 05:02:41'),
(40, 'Edit', 'এডিট', 38, 1, 'fa fa-pencil', '', 'admin.client.edit', 2, 1, '2019-06-01 05:02:41', '2019-06-01 05:02:41'),
(41, 'Delete', 'ডিলিট', 38, 1, 'fa fa-trash', '', 'admin.client.delete', 3, 1, '2019-06-01 05:02:41', '2019-06-01 05:02:41'),
(42, 'Payment', 'পারিশ্রমিক', NULL, 0, 'fa fa-money', NULL, NULL, 20, 1, '2019-06-01 05:06:23', '2019-06-01 05:06:23'),
(43, 'Add New', 'নতুন যোগ করুন', 42, 0, 'fa fa-plus', 'admin/payment/add', 'admin.payment.add', 1, 1, '2019-06-01 05:06:23', '2019-06-01 05:06:23'),
(44, 'Payment List', 'পারিশ্রমিক তালিকা', 42, 0, 'fa fa-list-ul', 'admin/payment', 'admin.payment.index', 2, 1, '2019-06-01 05:06:23', '2019-06-01 05:06:23'),
(45, 'View', 'দেখা', 44, 1, 'fa fa-eye', '', 'admin.payment.view', 1, 1, '2019-06-01 05:06:23', '2019-06-01 05:06:23'),
(46, 'Edit', 'এডিট', 44, 1, 'fa fa-pencil', '', 'admin.payment.edit', 2, 1, '2019-06-01 05:06:23', '2019-06-01 05:06:23'),
(47, 'Delete', 'ডিলিট', 44, 1, 'fa fa-trash', '', 'admin.payment.delete', 3, 1, '2019-06-01 05:06:23', '2019-06-01 05:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_03_26_200821_create_admins_table', 1),
(2, '2019_03_04_084037_create_menus_table', 1),
(3, '2019_03_05_074453_create_roles_table', 1),
(4, '2019_03_06_090310_create_admin_access_infos_table', 1),
(5, '2019_03_25_140240_create_password_resets_table', 1),
(6, '2019_03_25_140240_create_users_table', 1),
(7, '2019_03_25_140140_create_units_table', 2),
(8, '2019_03_25_140157_create_categories_table', 2),
(9, '2019_03_25_140207_create_sub_categories_table', 2),
(10, '2019_03_25_140231_create_brands_table', 2),
(11, '2019_04_10_152516_create_settings_table', 2),
(12, '2019_06_01_101657_create_payments_table', 3),
(13, '2019_06_01_102120_create_clients_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu` text COLLATE utf8mb4_unicode_ci,
  `sub_menu` text COLLATE utf8mb4_unicode_ci,
  `in_body` text COLLATE utf8mb4_unicode_ci,
  `admin_id` int(10) DEFAULT NULL,
  `role` tinyint(3) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `menu`, `sub_menu`, `in_body`, `admin_id`, `role`, `status`, `created_at`, `updated_at`) VALUES
(9, '[\"1\",\"6\",\"42\",\"23\",\"28\",\"2\",\"7\",\"36\",\"13\",\"5\",\"8\",\"18\",\"32\"]', '[\"43\",\"3\",\"44\",\"9\",\"14\",\"19\",\"10\",\"33\",\"35\",\"25\",\"34\",\"29\",\"24\",\"37\",\"20\",\"38\",\"15\"]', '[\"45\",\"4\",\"11\",\"47\",\"12\",\"17\",\"41\",\"16\",\"46\",\"21\",\"40\",\"26\",\"31\",\"30\",\"27\",\"39\",\"22\"]', 1, 1, 1, '2019-04-25 22:41:31', '2019-06-01 05:06:41'),
(10, '[\"2\",\"7\",\"28\"]', '[\"29\",\"3\"]', '[\"30\",\"4\",\"31\"]', 4, 3, 1, '2019-04-26 00:33:57', '2019-04-26 01:42:30'),
(12, '[\"23\",\"1\",\"6\",\"18\",\"8\",\"13\",\"5\",\"2\",\"28\",\"7\"]', '[\"29\",\"3\",\"14\",\"25\",\"15\",\"19\",\"10\",\"9\",\"20\",\"24\"]', '[\"30\",\"26\",\"31\",\"4\",\"21\",\"17\",\"11\",\"12\",\"16\",\"22\",\"27\"]', 2, 2, 1, '2019-04-26 01:33:19', '2019-04-26 01:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `title_en`, `title_bn`, `email`, `mobile`, `facebook`, `twitter`, `youtube`, `linkedin`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'public/images/settings/logo-1556222447.png', 'public/images/settings/favicon-1556222459.png', 'Demo', 'ডেমো', 'superadmin@Restaurent-Bill.com', '01234567890', 'https://fb.com/Demo', 'twitter', 'youtube', 'linkedin', 'City: Mymensingh\r\nCountry: Bangladesh\r\nState: Mymensingh Division\r\nZipcode: 2200', '1', '2019-04-10 12:00:00', '2019-04-25 14:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `sms_records`
--

CREATE TABLE `sms_records` (
  `id` int(11) NOT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `sms` longtext COLLATE utf8_unicode_ci,
  `sending_date` date DEFAULT NULL,
  `sms_count` tinyint(3) DEFAULT '1',
  `send_by` int(11) DEFAULT NULL,
  `is_send` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sms_records`
--

INSERT INTO `sms_records` (`id`, `mobile`, `sms`, `sending_date`, `sms_count`, `send_by`, `is_send`) VALUES
(1, '01624390079', 'Hi Khairul vai', '2019-04-30', NULL, 1, 1),
(2, '01515255819', 'sgfhgfhg', '2019-04-30', 1, 1, 1),
(3, '01624390079', 'sgfhgfhg', '2019-04-30', 1, 1, 1),
(4, '01969481541', 'sgfhgfhg', '2019-04-30', 1, 1, 1),
(5, '01515255819', 'hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you', '2019-04-30', 2, 1, 1),
(6, '01624390079', 'hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you', '2019-04-30', 2, 1, 1),
(7, '01515255819', 'ssds', '2019-04-30', 1, 1, 1),
(8, '01624390079', 'ssds', '2019-04-30', 1, 1, 1),
(9, '01969481541', 'ssds', '2019-04-30', 1, 1, 1),
(10, '01515255819', 'd', '2019-04-30', 1, 1, 1),
(11, '01515255819', 'd', '2019-04-30', 1, 1, 1),
(12, '01624390079', 'd', '2019-04-30', 1, 1, 1),
(13, '01713576627', 'hey', '2019-04-30', 1, 1, 1),
(14, '01969481541', 'hey', '2019-04-30', 1, 1, 1),
(15, '01515255819', 'h', '2019-04-30', 1, 1, 1),
(16, '01969481541', 'h', '2019-04-30', 1, 1, 1),
(17, '01515255819', 'd', '2019-04-30', 1, 1, 1),
(18, '01515255819', 'd', '2019-04-30', 1, 1, 1),
(19, '01515255819', 's', '2019-04-30', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(10) UNSIGNED DEFAULT NULL,
  `shipping_cost` double(8,2) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `name`, `country`, `district_id`, `shipping_cost`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dhamrai', 'Bangladesh', 1, 20.00, 1, '2019-04-09 10:24:28', '2019-04-25 20:41:43'),
(2, 'Dohar', 'Bangladesh', 1, 0.00, 1, '2019-04-09 10:24:28', '2019-04-25 20:42:00'),
(3, 'Keraniganj', 'Bangladesh', 1, 50.00, 1, '2019-04-09 10:24:28', '2019-04-25 20:42:20'),
(4, 'Nawabganj ', 'Bangladesh', 1, 0.00, 0, '2019-04-09 10:24:28', '2019-04-25 20:37:42'),
(5, 'Savar ', 'Bangladesh', 1, 0.00, 1, '2019-04-09 10:24:28', '2019-04-09 10:24:28'),
(6, 'Faridpur Sodar ', 'Bangladesh', 2, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(7, 'Boalmari ', 'Bangladesh', 2, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(8, 'Alfadanga ', 'Bangladesh', 2, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(9, 'Madhukhali ', 'Bangladesh', 2, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(10, 'Bhanga ', 'Bangladesh', 2, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(11, 'Nagarkanda ', 'Bangladesh', 2, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(12, 'Charbhadrasan ', 'Bangladesh', 2, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(13, 'Sodarpur ', 'Bangladesh', 2, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(14, 'Shaltha ', 'Bangladesh', 2, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(15, 'Gazipur Sodar-Joydebpur', 'Bangladesh', 3, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(16, 'Kaliakior', 'Bangladesh', 3, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(17, 'Kapasia', 'Bangladesh', 3, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(18, 'Sripur', 'Bangladesh', 3, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(19, 'Kaliganj', 'Bangladesh', 3, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(20, 'Tongi', 'Bangladesh', 3, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(21, 'Gopalganj Sodar ', 'Bangladesh', 4, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(22, 'Kashiani ', 'Bangladesh', 4, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(23, 'Kotalipara ', 'Bangladesh', 4, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(24, 'Muksudpur ', 'Bangladesh', 4, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(25, 'Tungipara ', 'Bangladesh', 4, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(26, 'Dewanganj ', 'Bangladesh', 5, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(27, 'Baksiganj ', 'Bangladesh', 5, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(28, 'Islampur ', 'Bangladesh', 5, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(29, 'Jamalpur Sodar ', 'Bangladesh', 5, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(30, 'Madarganj ', 'Bangladesh', 5, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(31, 'Melandaha ', 'Bangladesh', 5, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(32, 'Sarishabari ', 'Bangladesh', 5, 0.00, 1, '2019-04-09 10:24:29', '2019-04-09 10:24:29'),
(33, 'Narundi Police I.C', 'Bangladesh', 5, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(34, 'Astagram ', 'Bangladesh', 6, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(35, 'Bajitpur ', 'Bangladesh', 6, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(36, 'Bhairab ', 'Bangladesh', 6, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(37, 'Hossainpur ', 'Bangladesh', 6, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(38, 'Itna ', 'Bangladesh', 6, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(39, 'Karimganj ', 'Bangladesh', 6, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(40, 'Katiadi ', 'Bangladesh', 6, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(41, 'Kishoreganj Sodar ', 'Bangladesh', 6, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(42, 'Kuliarchar ', 'Bangladesh', 6, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(43, 'Mithamain ', 'Bangladesh', 6, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(44, 'Nikli ', 'Bangladesh', 6, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(45, 'Pakundia ', 'Bangladesh', 6, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(46, 'Tarail ', 'Bangladesh', 6, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(47, 'Madaripur Sodar', 'Bangladesh', 7, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(48, 'Kalkini', 'Bangladesh', 7, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(49, 'Rajoir', 'Bangladesh', 7, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(50, 'Shibchar', 'Bangladesh', 7, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(51, 'Manikganj Sodar ', 'Bangladesh', 8, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(52, 'Singair ', 'Bangladesh', 8, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(53, 'Shibalaya ', 'Bangladesh', 8, 0.00, 1, '2019-04-09 10:24:30', '2019-04-09 10:24:30'),
(54, 'Saturia ', 'Bangladesh', 8, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(55, 'Harirampur ', 'Bangladesh', 8, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(56, 'Ghior ', 'Bangladesh', 8, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(57, 'Daulatpur ', 'Bangladesh', 8, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(58, 'Lohajang ', 'Bangladesh', 9, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(59, 'Sreenagar ', 'Bangladesh', 9, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(60, 'Munshiganj Sodar ', 'Bangladesh', 9, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(61, 'Sirajdikhan ', 'Bangladesh', 9, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(62, 'Tongibari ', 'Bangladesh', 9, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(63, 'Gazaria ', 'Bangladesh', 9, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(64, 'Bhaluka', 'Bangladesh', 10, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(65, 'Trishal', 'Bangladesh', 10, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(66, 'Tarakanda', 'Bangladesh', 10, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(67, 'Haluaghat', 'Bangladesh', 10, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(68, 'Muktagachha', 'Bangladesh', 10, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(69, 'Dhobaura', 'Bangladesh', 10, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(70, 'Fulbaria', 'Bangladesh', 10, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(71, 'Gaffargaon', 'Bangladesh', 10, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(72, 'Gauripur', 'Bangladesh', 10, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(73, 'Ishwarganj', 'Bangladesh', 10, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(74, 'Mymensingh Sodar', 'Bangladesh', 10, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(75, 'Nandail', 'Bangladesh', 10, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(76, 'Phulpur', 'Bangladesh', 10, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(77, 'Araihazar ', 'Bangladesh', 11, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(78, 'Sonargaon ', 'Bangladesh', 11, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(79, 'Bandar', 'Bangladesh', 11, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(80, 'Naryanganj Sodar ', 'Bangladesh', 11, 0.00, 1, '2019-04-09 10:24:31', '2019-04-09 10:24:31'),
(81, 'Rupganj ', 'Bangladesh', 11, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(82, 'Siddirgonj ', 'Bangladesh', 11, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(83, 'Belabo ', 'Bangladesh', 12, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(84, 'Monohardi ', 'Bangladesh', 12, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(85, 'Narsingdi Sodar ', 'Bangladesh', 12, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(86, 'Palash ', 'Bangladesh', 12, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(87, 'Raipura , Narsingdi', 'Bangladesh', 12, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(88, 'Shibpur ', 'Bangladesh', 12, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(89, 'Kendua', 'Bangladesh', 13, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(90, 'Atpara', 'Bangladesh', 13, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(91, 'Barhatta', 'Bangladesh', 13, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(92, 'Durgapur', 'Bangladesh', 13, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(93, 'Kalmakanda', 'Bangladesh', 13, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(94, 'Madan', 'Bangladesh', 13, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(95, 'Mohanganj', 'Bangladesh', 13, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(96, 'Netrakona-S', 'Bangladesh', 13, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(97, 'Purbadhala', 'Bangladesh', 13, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(98, 'Khaliajuri', 'Bangladesh', 13, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(99, 'Baliakandi ', 'Bangladesh', 14, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(100, 'Goalandaghat ', 'Bangladesh', 14, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(101, 'Pangsha ', 'Bangladesh', 14, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(102, 'Kalukhali ', 'Bangladesh', 14, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(103, 'Rajbari Sodar ', 'Bangladesh', 14, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(104, 'Shariatpur Sodar -Palong', 'Bangladesh', 15, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(105, 'Damudya ', 'Bangladesh', 15, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(106, 'Naria ', 'Bangladesh', 15, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(107, 'Jajira ', 'Bangladesh', 15, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(108, 'Bhedarganj ', 'Bangladesh', 15, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(109, 'Gosairhat ', 'Bangladesh', 15, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(110, 'Jhenaigati ', 'Bangladesh', 16, 0.00, 1, '2019-04-09 10:24:32', '2019-04-09 10:24:32'),
(111, 'Nakla ', 'Bangladesh', 16, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(112, 'Nalitabari ', 'Bangladesh', 16, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(113, 'Sherpur Sodar ', 'Bangladesh', 16, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(114, 'Sreebardi ', 'Bangladesh', 16, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(115, 'Tangail Sodar ', 'Bangladesh', 17, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(116, 'Sakhipur ', 'Bangladesh', 17, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(117, 'Basail ', 'Bangladesh', 17, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(118, 'Madhupur ', 'Bangladesh', 17, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(119, 'Ghatail ', 'Bangladesh', 17, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(120, 'Kalihati ', 'Bangladesh', 17, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(121, 'Nagarpur ', 'Bangladesh', 17, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(122, 'Mirzapur ', 'Bangladesh', 17, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(123, 'Gopalpur ', 'Bangladesh', 17, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(124, 'Delduar ', 'Bangladesh', 17, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(125, 'Bhuapur ', 'Bangladesh', 17, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(126, 'Dhanbari ', 'Bangladesh', 17, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(127, 'Adamdighi', 'Bangladesh', 18, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(128, 'Bogra Sodar', 'Bangladesh', 18, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(129, 'Sherpur', 'Bangladesh', 18, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(130, 'Dhunat', 'Bangladesh', 18, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(131, 'Dhupchanchia', 'Bangladesh', 18, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(132, 'Gabtali', 'Bangladesh', 18, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(133, 'Kahaloo', 'Bangladesh', 18, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(134, 'Nandigram', 'Bangladesh', 18, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(135, 'Sahajanpur', 'Bangladesh', 18, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(136, 'Sariakandi', 'Bangladesh', 18, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(137, 'Shibganj', 'Bangladesh', 18, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(138, 'Sonatala', 'Bangladesh', 18, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(139, 'Joypurhat S', 'Bangladesh', 19, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(140, 'Akkelpur', 'Bangladesh', 19, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(141, 'Kalai', 'Bangladesh', 19, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(142, 'Khetlal', 'Bangladesh', 19, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(143, 'Panchbibi', 'Bangladesh', 19, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(144, 'Naogaon Sodar ', 'Bangladesh', 20, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(145, 'Mohadevpur ', 'Bangladesh', 20, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(146, 'Manda ', 'Bangladesh', 20, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(147, 'Niamatpur ', 'Bangladesh', 20, 0.00, 1, '2019-04-09 10:24:33', '2019-04-09 10:24:33'),
(148, 'Atrai ', 'Bangladesh', 20, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(149, 'Raninagar ', 'Bangladesh', 20, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(150, 'Patnitala ', 'Bangladesh', 20, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(151, 'Dhamoirhat ', 'Bangladesh', 20, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(152, 'Sapahar ', 'Bangladesh', 20, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(153, 'Porsha ', 'Bangladesh', 20, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(154, 'Badalgachhi ', 'Bangladesh', 20, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(155, 'Natore Sodar ', 'Bangladesh', 21, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(156, 'Baraigram ', 'Bangladesh', 21, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(157, 'Bagatipara ', 'Bangladesh', 21, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(158, 'Lalpur ', 'Bangladesh', 21, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(159, 'Natore Sodar ', 'Bangladesh', 21, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(160, 'Baraigram ', 'Bangladesh', 21, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(161, 'Bholahat ', 'Bangladesh', 22, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(162, 'Gomastapur ', 'Bangladesh', 22, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(163, 'Nachole ', 'Bangladesh', 22, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(164, 'Nawabganj Sodar ', 'Bangladesh', 22, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(165, 'Shibganj ', 'Bangladesh', 22, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(166, 'Atgharia ', 'Bangladesh', 23, 0.00, 1, '2019-04-09 10:24:34', '2019-04-09 10:24:34'),
(167, 'Bera ', 'Bangladesh', 23, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(168, 'Bhangura ', 'Bangladesh', 23, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(169, 'Chatmohar ', 'Bangladesh', 23, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(170, 'Faridpur ', 'Bangladesh', 23, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(171, 'Ishwardi ', 'Bangladesh', 23, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(172, 'Pabna Sodar ', 'Bangladesh', 23, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(173, 'Santhia ', 'Bangladesh', 23, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(174, 'Sujanagar ', 'Bangladesh', 23, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(175, 'Bagha', 'Bangladesh', 24, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(176, 'Bagmara', 'Bangladesh', 24, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(177, 'Charghat', 'Bangladesh', 24, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(178, 'Durgapur', 'Bangladesh', 24, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(179, 'Godagari', 'Bangladesh', 24, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(180, 'Mohanpur', 'Bangladesh', 24, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(181, 'Paba', 'Bangladesh', 24, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(182, 'Puthia', 'Bangladesh', 24, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(183, 'Tanore', 'Bangladesh', 24, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(184, 'Sirajganj Sodar ', 'Bangladesh', 25, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(185, 'Belkuchi ', 'Bangladesh', 25, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(186, 'Chauhali ', 'Bangladesh', 25, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(187, 'Kamarkhanda ', 'Bangladesh', 25, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(188, 'Kazipur ', 'Bangladesh', 25, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(189, 'Raiganj ', 'Bangladesh', 25, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(190, 'Shahjadpur ', 'Bangladesh', 25, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(191, 'Tarash ', 'Bangladesh', 25, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(192, 'Ullahpara ', 'Bangladesh', 25, 0.00, 1, '2019-04-09 10:24:35', '2019-04-09 10:24:35'),
(193, 'Birampur ', 'Bangladesh', 26, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(194, 'Birganj', 'Bangladesh', 26, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(195, 'Biral ', 'Bangladesh', 26, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(196, 'Bochaganj ', 'Bangladesh', 26, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(197, 'Chirirbandar ', 'Bangladesh', 26, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(198, 'Phulbari ', 'Bangladesh', 26, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(199, 'Ghoraghat ', 'Bangladesh', 26, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(200, 'Hakimpur ', 'Bangladesh', 26, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(201, 'Kaharole ', 'Bangladesh', 26, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(202, 'Khansama ', 'Bangladesh', 26, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(203, 'Dinajpur Sodar ', 'Bangladesh', 26, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(204, 'Nawabganj', 'Bangladesh', 26, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(205, 'Parbatipur ', 'Bangladesh', 26, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(206, 'Fulchhari', 'Bangladesh', 27, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(207, 'Gaibandha Sodar', 'Bangladesh', 27, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(208, 'Gobindaganj', 'Bangladesh', 27, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(209, 'Palashbari', 'Bangladesh', 27, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(210, 'Sadullapur', 'Bangladesh', 27, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(211, 'Saghata', 'Bangladesh', 27, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(212, 'Sundarganj', 'Bangladesh', 27, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(213, 'Kurigram Sodar', 'Bangladesh', 28, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(214, 'Nageshwari', 'Bangladesh', 28, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(215, 'Bhurungamari', 'Bangladesh', 28, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(216, 'Phulbari', 'Bangladesh', 28, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(217, 'Rajarhat', 'Bangladesh', 28, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(218, 'Ulipur', 'Bangladesh', 28, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(219, 'Chilmari', 'Bangladesh', 28, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(220, 'Rowmari', 'Bangladesh', 28, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(221, 'Char Rajibpur', 'Bangladesh', 28, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(222, 'Lalmanirhat Sodar', 'Bangladesh', 29, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(223, 'Aditmari', 'Bangladesh', 29, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(224, 'Kaliganj', 'Bangladesh', 29, 0.00, 1, '2019-04-09 10:24:36', '2019-04-09 10:24:36'),
(225, 'Hatibandha', 'Bangladesh', 29, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(226, 'Patgram', 'Bangladesh', 29, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(227, 'Nilphamari Sodar', 'Bangladesh', 30, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(228, 'Saidpur', 'Bangladesh', 30, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(229, 'Jaldhaka', 'Bangladesh', 30, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(230, 'Kishoreganj', 'Bangladesh', 30, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(231, 'Domar', 'Bangladesh', 30, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(232, 'Dimla', 'Bangladesh', 30, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(233, 'Panchagarh Sodar', 'Bangladesh', 31, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(234, 'Debiganj', 'Bangladesh', 31, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(235, 'Boda', 'Bangladesh', 31, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(236, 'Atwari', 'Bangladesh', 31, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(237, 'Tetulia', 'Bangladesh', 31, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(238, 'Badarganj', 'Bangladesh', 32, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(239, 'Mithapukur', 'Bangladesh', 32, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(240, 'Gangachara', 'Bangladesh', 32, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(241, 'Kaunia', 'Bangladesh', 32, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(242, 'Rangpur Sodar', 'Bangladesh', 32, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(243, 'Pirgachha', 'Bangladesh', 32, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(244, 'Pirganj', 'Bangladesh', 32, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(245, 'Taraganj', 'Bangladesh', 32, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(246, 'Thakurgaon Sodar ', 'Bangladesh', 33, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(247, 'Pirganj ', 'Bangladesh', 33, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(248, 'Baliadangi ', 'Bangladesh', 33, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(249, 'Haripur ', 'Bangladesh', 33, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(250, 'Ranisankail ', 'Bangladesh', 33, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(251, 'Amtali ', 'Bangladesh', 34, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(252, 'Bamna ', 'Bangladesh', 34, 0.00, 1, '2019-04-09 10:24:37', '2019-04-09 10:24:37'),
(253, 'Barguna Sodar ', 'Bangladesh', 34, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(254, 'Betagi ', 'Bangladesh', 34, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(255, 'Patharghata ', 'Bangladesh', 34, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(256, 'Taltali ', 'Bangladesh', 34, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(257, 'Muladi ', 'Bangladesh', 35, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(258, 'Babuganj ', 'Bangladesh', 35, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(259, 'Agailjhara ', 'Bangladesh', 35, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(260, 'Barisal Sodar ', 'Bangladesh', 35, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(261, 'Bakerganj ', 'Bangladesh', 35, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(262, 'Banaripara ', 'Bangladesh', 35, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(263, 'Gaurnadi ', 'Bangladesh', 35, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(264, 'Hizla ', 'Bangladesh', 35, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(265, 'Mehendiganj ', 'Bangladesh', 35, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(266, 'Wazirpur ', 'Bangladesh', 35, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(267, 'Bhola Sodar ', 'Bangladesh', 36, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(268, 'Burhanuddin ', 'Bangladesh', 36, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(269, 'Char Fasson ', 'Bangladesh', 36, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(270, 'Daulatkhan ', 'Bangladesh', 36, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(271, 'Lalmohan ', 'Bangladesh', 36, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(272, 'Manpura ', 'Bangladesh', 36, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(273, 'Tazumuddin ', 'Bangladesh', 36, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(274, 'Jhalokati Sodar ', 'Bangladesh', 37, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(275, 'Kathalia ', 'Bangladesh', 37, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(276, 'Nalchity ', 'Bangladesh', 37, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(277, 'Rajapur ', 'Bangladesh', 37, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(278, 'Bauphal ', 'Bangladesh', 38, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(279, 'Dashmina ', 'Bangladesh', 38, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(280, 'Galachipa ', 'Bangladesh', 38, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(281, 'Kalapara ', 'Bangladesh', 38, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(282, 'Mirzaganj ', 'Bangladesh', 38, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(283, 'Patuakhali Sodar ', 'Bangladesh', 38, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(284, 'Dumki ', 'Bangladesh', 38, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(285, 'Rangabali ', 'Bangladesh', 38, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(286, 'Bhandaria', 'Bangladesh', 39, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(287, 'Kaukhali', 'Bangladesh', 39, 0.00, 1, '2019-04-09 10:24:38', '2019-04-09 10:24:38'),
(288, 'Mathbaria', 'Bangladesh', 39, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(289, 'Nazirpur', 'Bangladesh', 39, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(290, 'Nesarabad', 'Bangladesh', 39, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(291, 'Pirojpur Sodar', 'Bangladesh', 39, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(292, 'Zianagar', 'Bangladesh', 39, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(293, 'Bandarban Sodar', 'Bangladesh', 40, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(294, 'Thanchi', 'Bangladesh', 40, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(295, 'Lama', 'Bangladesh', 40, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(296, 'Naikhongchhari', 'Bangladesh', 40, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(297, 'Ali kadam', 'Bangladesh', 40, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(298, 'Rowangchhari', 'Bangladesh', 40, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(299, 'Ruma', 'Bangladesh', 40, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(300, 'Brahmanbaria Sodar ', 'Bangladesh', 41, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(301, 'Ashuganj ', 'Bangladesh', 41, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(302, 'Nasirnagar ', 'Bangladesh', 41, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(303, 'Nabinagar ', 'Bangladesh', 41, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(304, 'Sarail ', 'Bangladesh', 41, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(305, 'Shahbazpur Town', 'Bangladesh', 41, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(306, 'Kasba ', 'Bangladesh', 41, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(307, 'Akhaura ', 'Bangladesh', 41, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(308, 'Bancharampur ', 'Bangladesh', 41, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(309, 'Bijoynagar ', 'Bangladesh', 41, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(310, 'Chandpur Sodar', 'Bangladesh', 42, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(311, 'Faridganj', 'Bangladesh', 42, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(312, 'Haimchar', 'Bangladesh', 42, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(313, 'Haziganj', 'Bangladesh', 42, 0.00, 1, '2019-04-09 10:24:39', '2019-04-09 10:24:39'),
(314, 'Kachua', 'Bangladesh', 42, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(315, 'Matlab Uttar', 'Bangladesh', 42, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(316, 'Matlab Dakkhin', 'Bangladesh', 42, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(317, 'Shahrasti', 'Bangladesh', 42, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(318, 'Anwara ', 'Bangladesh', 43, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(319, 'Banshkhali ', 'Bangladesh', 43, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(320, 'Boalkhali ', 'Bangladesh', 43, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(321, 'Chandanaish ', 'Bangladesh', 43, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(322, 'Fatikchhari ', 'Bangladesh', 43, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(323, 'Hathazari ', 'Bangladesh', 43, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(324, 'Lohagara ', 'Bangladesh', 43, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(325, 'Mirsharai ', 'Bangladesh', 43, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(326, 'Patiya ', 'Bangladesh', 43, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(327, 'Rangunia ', 'Bangladesh', 43, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(328, 'Raozan ', 'Bangladesh', 43, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(329, 'Sandwip ', 'Bangladesh', 43, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(330, 'Satkania ', 'Bangladesh', 43, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(331, 'Sitakunda ', 'Bangladesh', 43, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(332, 'Barura ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(333, 'Brahmanpara ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(334, 'Burichong ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(335, 'Chandina ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(336, 'Chauddagram ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(337, 'Daudkandi ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(338, 'Debidwar ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(339, 'Homna ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(340, 'Comilla Sodar ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(341, 'Laksam ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(342, 'Monohorgonj ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(343, 'Meghna ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(344, 'Muradnagar ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(345, 'Nangalkot ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(346, 'Comilla Sodar South ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(347, 'Titas ', 'Bangladesh', 44, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(348, 'Chakaria', 'Bangladesh', 45, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(349, 'Coxs Bazar Sodar', 'Bangladesh', 45, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(350, 'Kutubdia', 'Bangladesh', 45, 0.00, 1, '2019-04-09 10:24:40', '2019-04-09 10:24:40'),
(351, 'Maheshkhali', 'Bangladesh', 45, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(352, 'Ramu', 'Bangladesh', 45, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(353, 'Teknaf', 'Bangladesh', 45, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(354, 'Ukhia', 'Bangladesh', 45, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(355, 'Pekua', 'Bangladesh', 45, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(356, 'Feni Sodar', 'Bangladesh', 46, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(357, 'Chagalnaiya', 'Bangladesh', 46, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(358, 'Daganbhyan', 'Bangladesh', 46, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(359, 'Parshuram', 'Bangladesh', 46, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(360, 'Fhulgazi', 'Bangladesh', 46, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(361, 'Sonagazi', 'Bangladesh', 46, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(362, 'Dighinala', 'Bangladesh', 47, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(363, 'Khagrachhari', 'Bangladesh', 47, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(364, 'Lakshmichhari', 'Bangladesh', 47, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(365, 'Mahalchhari', 'Bangladesh', 47, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(366, 'Manikchhari', 'Bangladesh', 47, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(367, 'Matiranga', 'Bangladesh', 47, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(368, 'Panchhari', 'Bangladesh', 47, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(369, 'Ramgarh', 'Bangladesh', 47, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(370, 'Lakshmipur Sodar', 'Bangladesh', 48, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(371, 'Raipur', 'Bangladesh', 48, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(372, 'Ramganj', 'Bangladesh', 48, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(373, 'Ramgati', 'Bangladesh', 48, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(374, 'Komol Nagar', 'Bangladesh', 48, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(375, 'Noakhali Sodar', 'Bangladesh', 49, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(376, 'Begumganj', 'Bangladesh', 49, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(377, 'Chatkhil', 'Bangladesh', 49, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(378, 'Companyganj', 'Bangladesh', 49, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(379, 'Shenbag', 'Bangladesh', 49, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(380, 'Hatia', 'Bangladesh', 49, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(381, 'Kobirhat', 'Bangladesh', 49, 0.00, 1, '2019-04-09 10:24:41', '2019-04-09 10:24:41'),
(382, 'Sonaimuri', 'Bangladesh', 49, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(383, 'Suborno Char', 'Bangladesh', 49, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(384, 'Rangamati Sodar', 'Bangladesh', 50, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(385, 'Belaichhari', 'Bangladesh', 50, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(386, 'Bagaichhari', 'Bangladesh', 50, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(387, 'Barkal', 'Bangladesh', 50, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(388, 'Juraichhari', 'Bangladesh', 50, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(389, 'Rajasthali', 'Bangladesh', 50, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(390, 'Kaptai', 'Bangladesh', 50, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(391, 'Langadu', 'Bangladesh', 50, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(392, 'Nannerchar', 'Bangladesh', 50, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(393, 'Kaukhali', 'Bangladesh', 50, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(394, 'Ajmiriganj', 'Bangladesh', 51, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(395, 'Baniachang', 'Bangladesh', 51, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(396, 'Bahubal', 'Bangladesh', 51, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(397, 'Chunarughat', 'Bangladesh', 51, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(398, 'Habiganj Sodar', 'Bangladesh', 51, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(399, 'Lakhai', 'Bangladesh', 51, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(400, 'Madhabpur', 'Bangladesh', 51, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(401, 'Nabiganj', 'Bangladesh', 51, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(402, 'Shaistagonj Upazila', 'Bangladesh', 51, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(403, 'Moulvibazar Sodar', 'Bangladesh', 52, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(404, 'Barlekha', 'Bangladesh', 52, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(405, 'Juri', 'Bangladesh', 52, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(406, 'Kamalganj', 'Bangladesh', 52, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(407, 'Kulaura', 'Bangladesh', 52, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(408, 'Rajnagar', 'Bangladesh', 52, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(409, 'Sreemangal', 'Bangladesh', 52, 0.00, 1, '2019-04-09 10:24:42', '2019-04-09 10:24:42'),
(410, 'Bishwamvarpur', 'Bangladesh', 53, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(411, 'Chhatak', 'Bangladesh', 53, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(412, 'Derai', 'Bangladesh', 53, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(413, 'Dharampasha', 'Bangladesh', 53, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(414, 'Dowarabazar', 'Bangladesh', 53, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(415, 'Jagannathpur', 'Bangladesh', 53, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(416, 'Jamalganj', 'Bangladesh', 53, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(417, 'Sulla', 'Bangladesh', 53, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(418, 'Sunamganj Sodar', 'Bangladesh', 53, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(419, 'Shanthiganj', 'Bangladesh', 53, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(420, 'Tahirpur', 'Bangladesh', 53, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(421, 'Sylhet Sodar', 'Bangladesh', 54, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(422, 'Beanibazar', 'Bangladesh', 54, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(423, 'Bishwanath', 'Bangladesh', 54, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(424, 'Dakshin Surma Upazila', 'Bangladesh', 54, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(425, 'Balaganj', 'Bangladesh', 54, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(426, 'Companiganj', 'Bangladesh', 54, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(427, 'Fenchuganj', 'Bangladesh', 54, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(428, 'Golapganj', 'Bangladesh', 54, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(429, 'Gowainghat', 'Bangladesh', 54, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(430, 'Jaintiapur', 'Bangladesh', 54, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(431, 'Kanaighat', 'Bangladesh', 54, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(432, 'Zakiganj', 'Bangladesh', 54, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(433, 'Nobigonj', 'Bangladesh', 54, 0.00, 1, '2019-04-09 10:24:43', '2019-04-09 10:24:43'),
(434, 'Bagerhat Sodar', 'Bangladesh', 55, 0.00, 1, '2019-04-09 10:24:43', '2019-04-24 06:58:07'),
(435, 'Chitalmari', 'Bangladesh', 55, 0.00, 1, '2019-04-09 10:24:43', '2019-04-24 06:58:19'),
(436, 'Fakirhat', 'Bangladesh', 55, 0.00, 1, '2019-04-09 10:24:43', '2019-04-24 06:58:31'),
(437, 'Kachua', 'Bangladesh', 55, 0.00, 0, '2019-04-09 10:24:43', '2019-04-10 02:21:24'),
(438, 'Mollahat', 'Bangladesh', 55, 0.00, 1, '2019-04-09 10:24:43', '2019-04-24 06:59:26'),
(439, 'Mongla', 'Bangladesh', 55, 0.00, 1, '2019-04-09 10:24:43', '2019-04-24 06:59:38'),
(440, 'Morrelganj', 'Bangladesh', 55, 0.00, 1, '2019-04-09 10:24:43', '2019-04-24 07:00:34'),
(441, 'Rampal', 'Bangladesh', 55, 0.00, 1, '2019-04-09 10:24:44', '2019-04-24 06:59:52'),
(442, 'Sarankhola', 'Bangladesh', 55, 0.00, 1, '2019-04-09 10:24:44', '2019-04-24 07:00:44'),
(443, 'Damurhuda', 'Bangladesh', 56, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(444, 'Chuadanga-S', 'Bangladesh', 56, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(445, 'Jibannagar', 'Bangladesh', 56, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(446, 'Alamdanga', 'Bangladesh', 56, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(447, 'Abhaynagar', 'Bangladesh', 57, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(448, 'Keshabpur', 'Bangladesh', 57, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(449, 'Bagherpara', 'Bangladesh', 57, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(450, 'Jessore Sodar', 'Bangladesh', 57, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(451, 'Chaugachha', 'Bangladesh', 57, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(452, 'Manirampur', 'Bangladesh', 57, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(453, 'Jhikargachha', 'Bangladesh', 57, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(454, 'Sharsha', 'Bangladesh', 57, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(455, 'Jhenaidah Sodar', 'Bangladesh', 58, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(456, 'Maheshpur', 'Bangladesh', 58, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(457, 'Kaliganj', 'Bangladesh', 58, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(458, 'Kotchandpur', 'Bangladesh', 58, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(459, 'Shailkupa', 'Bangladesh', 58, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(460, 'Harinakunda', 'Bangladesh', 58, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(461, 'Terokhada', 'Bangladesh', 59, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(462, 'Batiaghata', 'Bangladesh', 59, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(463, 'Dacope', 'Bangladesh', 59, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(464, 'Dumuria', 'Bangladesh', 59, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(465, 'Dighalia', 'Bangladesh', 59, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(466, 'Koyra', 'Bangladesh', 59, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(467, 'Paikgachha', 'Bangladesh', 59, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(468, 'Phultala', 'Bangladesh', 59, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(469, 'Rupsa', 'Bangladesh', 59, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(470, 'Kushtia Sodar', 'Bangladesh', 60, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(471, 'Kumarkhali', 'Bangladesh', 60, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(472, 'Daulatpur', 'Bangladesh', 60, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(473, 'Mirpur', 'Bangladesh', 60, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(474, 'Bheramara', 'Bangladesh', 60, 0.00, 1, '2019-04-09 10:24:44', '2019-04-09 10:24:44'),
(475, 'Khoksa', 'Bangladesh', 60, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 10:24:45'),
(476, 'Magura Sodar', 'Bangladesh', 61, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 10:24:45'),
(477, 'Mohammadpur', 'Bangladesh', 61, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 10:24:45'),
(478, 'Shalikha', 'Bangladesh', 61, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 10:24:45'),
(479, 'Sreepur', 'Bangladesh', 61, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 10:24:45'),
(480, 'angni', 'Bangladesh', 62, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 10:24:45'),
(481, 'Mujib Nagar', 'Bangladesh', 62, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 10:24:45'),
(482, 'Meherpur-S', 'Bangladesh', 62, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 10:24:45'),
(483, 'Narail-S', 'Bangladesh', 63, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 10:24:45'),
(484, 'Lohagara', 'Bangladesh', 63, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 10:24:45'),
(485, 'Kalia', 'Bangladesh', 63, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 10:24:45'),
(486, 'Satkhira Sodar', 'Bangladesh', 64, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 14:16:13'),
(487, 'Assasuni', 'Bangladesh', 64, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 14:16:13'),
(488, 'Debhata', 'Bangladesh', 64, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 14:16:13'),
(489, 'Tala', 'Bangladesh', 64, 50.00, 1, '2019-04-09 10:24:45', '2019-04-10 01:40:56'),
(490, 'Kalaroa', 'Bangladesh', 64, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 14:16:13'),
(491, 'Kaliganj', 'Bangladesh', 64, 0.00, 1, '2019-04-09 10:24:45', '2019-04-09 14:16:13'),
(492, 'Shyamnagar', 'Bangladesh', 64, 1.00, 1, '2019-04-09 10:24:45', '2019-04-09 15:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` tinyint(4) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(10) UNSIGNED DEFAULT NULL,
  `upazilla_id` int(10) UNSIGNED DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `username`, `image`, `user_role`, `password`, `country`, `district_id`, `upazilla_id`, `address`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Demo', 'demo@gmail.com', '01515255819', 'demo', NULL, 1, '$2y$10$tQVwD5VequDrZsgg5NUaHexmp3fGf.XI7zylpDEqSxf9WJITYiRWO', NULL, NULL, NULL, '', '1', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `admins_email_unique` (`email`) USING BTREE,
  ADD UNIQUE KEY `admins_username_unique` (`username`) USING BTREE;

--
-- Indexes for table `admin_access_infos`
--
ALTER TABLE `admin_access_infos`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `admin_access_infos_admin_id_foreign` (`admin_id`) USING BTREE;

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `brands_slug_unique` (`slug`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `categories_slug_unique` (`slug`) USING BTREE;

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `sms_records`
--
ALTER TABLE `sms_records`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `sub_categories_slug_unique` (`slug`) USING BTREE;

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE,
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`) USING BTREE,
  ADD UNIQUE KEY `users_username_unique` (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_access_infos`
--
ALTER TABLE `admin_access_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sms_records`
--
ALTER TABLE `sms_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=493;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_access_infos`
--
ALTER TABLE `admin_access_infos`
  ADD CONSTRAINT `admin_access_infos_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
