/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : demo

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 30/04/2019 18:26:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin_access_infos
-- ----------------------------
DROP TABLE IF EXISTS `admin_access_infos`;
CREATE TABLE `admin_access_infos`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `device` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `browser` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `admin_access_infos_admin_id_foreign`(`admin_id`) USING BTREE,
  CONSTRAINT `admin_access_infos_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin_access_infos
-- ----------------------------
INSERT INTO `admin_access_infos` VALUES (1, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-14 03:23:58', '2019-04-14 03:23:58');
INSERT INTO `admin_access_infos` VALUES (2, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-14 03:32:58', '2019-04-14 03:32:58');
INSERT INTO `admin_access_infos` VALUES (3, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 15:54:11', '2019-04-13 15:54:11');
INSERT INTO `admin_access_infos` VALUES (4, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 15:54:28', '2019-04-13 15:54:28');
INSERT INTO `admin_access_infos` VALUES (5, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 17:15:57', '2019-04-13 17:15:57');
INSERT INTO `admin_access_infos` VALUES (6, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-14 13:02:21', '2019-04-14 13:02:21');
INSERT INTO `admin_access_infos` VALUES (7, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-15 18:30:22', '2019-04-15 18:30:22');
INSERT INTO `admin_access_infos` VALUES (8, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-16 18:40:57', '2019-04-16 18:40:57');
INSERT INTO `admin_access_infos` VALUES (9, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-18 18:56:28', '2019-04-18 18:56:28');
INSERT INTO `admin_access_infos` VALUES (10, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-19 15:40:46', '2019-04-19 15:40:46');
INSERT INTO `admin_access_infos` VALUES (11, 1, '127.0.0.1', NULL, 'PC', 'Firefox', 1, '2019-04-19 15:52:12', '2019-04-19 15:52:12');
INSERT INTO `admin_access_infos` VALUES (12, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-19 15:52:53', '2019-04-19 15:52:53');
INSERT INTO `admin_access_infos` VALUES (13, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-19 16:10:57', '2019-04-19 16:10:57');
INSERT INTO `admin_access_infos` VALUES (14, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-21 19:35:26', '2019-04-21 19:35:26');
INSERT INTO `admin_access_infos` VALUES (15, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-23 17:19:55', '2019-04-23 17:19:55');
INSERT INTO `admin_access_infos` VALUES (16, 2, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-23 18:18:56', '2019-04-23 18:18:56');
INSERT INTO `admin_access_infos` VALUES (17, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-23 18:19:59', '2019-04-23 18:19:59');
INSERT INTO `admin_access_infos` VALUES (18, 1, '::1', NULL, 'PC', 'Firefox', 1, '2019-04-25 15:33:47', '2019-04-25 15:33:47');
INSERT INTO `admin_access_infos` VALUES (19, 1, '::1', NULL, 'PC', 'Firefox', 1, '2019-04-25 17:28:26', '2019-04-25 17:28:26');
INSERT INTO `admin_access_infos` VALUES (20, 1, '::1', NULL, 'PC', 'Firefox', 1, '2019-04-26 04:14:32', '2019-04-26 04:14:32');
INSERT INTO `admin_access_infos` VALUES (21, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-30 11:41:04', '2019-04-30 11:41:04');

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_role` tinyint(4) NULL DEFAULT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admins_email_unique`(`email`) USING BTREE,
  UNIQUE INDEX `admins_username_unique`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (1, 'Super Admin', 'super@gmail.com', 'superadmin', 1, 'public/images/admins/1556265063.png', '$2y$10$cW9KVqhUuLOearR9Uhr9yeiUBnxRPJvY3KsjttKr77tKMNZab7Ncm', 1, 'd6OPS5bVirEvKreL58LDqijh13Rm1c6Ea1CymFC8oI5KMxTjbJzCpTkEf5gH', '2019-03-25 07:00:00', '2019-04-26 07:51:05');
INSERT INTO `admins` VALUES (2, 'Admin', 'admin@gmail.com', 'admin', 2, NULL, '$2y$10$3eUb3dspSaecGyAWo0jOp.r2N83ZUQRYaJMh/058e3apUV5XSmlQq', 1, 'sZE0KVFsqcRuovw6Eu0YQ5VywZRgduSp3CXwxauqRtiDsrVYRl7z8dZWYhxK', '2019-03-25 07:00:00', '2019-04-26 08:15:22');
INSERT INTO `admins` VALUES (3, 'aaaaaa', 'afzalsabbir.bd@gmail.com', 'aaaaaa', 3, NULL, '$2y$10$P1rFOIiR1hB4IdUDBw/KKenlpz9LK80jAw/IWulwNUXF6hnc90lzu', 1, NULL, '2019-04-25 19:46:07', '2019-04-25 19:46:07');
INSERT INTO `admins` VALUES (4, 'bbbbbb', 'afzalbd1@gmail.comk', 'bbbbbb', 3, NULL, '$2y$10$wpvJp1iVMxNM6Tkzn9IRwe6CftljT2xXkj13euFuV.mJorisuC17y', 1, NULL, '2019-04-25 19:47:19', '2019-04-25 19:47:19');

-- ----------------------------
-- Table structure for brands
-- ----------------------------
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `sub_category_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `brands_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `categories_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_bn` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `menu_position` int(10) UNSIGNED NULL DEFAULT NULL COMMENT '0 - Left | 1 - Left In | 2 - Right Top',
  `icon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `route` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES (1, 'Dashboard', 'ড্যাশবোর্ড', NULL, 0, 'fa fa-dashboard', '/admin', 'admin.home', 1, 1, '2019-03-25 05:02:05', '2019-03-25 05:02:05');
INSERT INTO `menus` VALUES (2, 'Menu Permission', 'মেনু পারমিশন', NULL, 0, 'fa fa-cogs', '/admin/role', 'admin.role.index', 997, 1, '2019-03-25 04:44:32', '2019-04-23 11:29:07');
INSERT INTO `menus` VALUES (3, 'Action', 'একশন', 2, 0, 'fa fa-home', '/admin/role', 'admin.role.index', 1, 1, '2019-04-23 11:27:09', '2019-04-23 11:27:09');
INSERT INTO `menus` VALUES (4, 'Assign', 'অনুমতি প্রদান', 3, 1, 'fa fa-pencil', '/admin/role/assign', 'admin.role.assign', 1, 1, '2019-03-25 04:48:50', '2019-04-23 11:27:39');
INSERT INTO `menus` VALUES (5, 'Site Settings', 'সাইট সেটিংস', NULL, 0, 'fa fa-sliders', '/admin/setting', 'admin.setting.index', 450, 1, '2019-04-10 22:30:44', '2019-04-11 02:33:10');
INSERT INTO `menus` VALUES (6, 'Change Password', 'পাসওয়ার্ড পরিবর্তন', NULL, 2, 'fa fa-cog', '/admin/change-password', 'admin.password.form', 2, 1, '2019-03-25 04:42:35', '2019-04-23 12:20:29');
INSERT INTO `menus` VALUES (7, 'Log Activity', 'লগ এক্টিভিটি', NULL, 0, 'fa fa-cog', '/admin/log', 'admin.log.index', 998, 1, '2019-03-25 04:46:37', '2019-04-23 11:28:41');
INSERT INTO `menus` VALUES (8, 'Category', 'ক্যাটাগরি', NULL, 0, 'fa fa-pie-chart', NULL, NULL, 90, 1, '2019-03-29 21:51:15', '2019-03-30 00:11:55');
INSERT INTO `menus` VALUES (9, 'Category List', 'ক্যাটাগরি তালিকা', 8, 0, 'fa fa-list-ul', '/admin/category', 'admin.category.index', 1, 1, '2019-03-29 21:51:59', '2019-03-29 21:51:59');
INSERT INTO `menus` VALUES (10, 'Add New', 'নতুন যোগ করুন', 8, 0, 'fa fa-plus', '/admin/category/add', 'admin.category.create', 2, 1, '2019-03-29 21:52:31', '2019-03-29 21:52:31');
INSERT INTO `menus` VALUES (11, 'Edit', 'এডিট', 9, 1, 'fa fa-pencil', NULL, 'admin.category.edit', 1, 1, '2019-03-29 21:53:02', '2019-03-29 22:55:28');
INSERT INTO `menus` VALUES (12, 'Delete', 'ডিলিট', 9, 1, 'fa fa-trash', NULL, 'admin.category.delete', 2, 1, '2019-03-29 21:53:33', '2019-03-29 23:01:25');
INSERT INTO `menus` VALUES (13, 'Subcategory', 'সাবক্যাটাগরি', NULL, 0, 'fa fa-yelp', NULL, NULL, 91, 1, '2019-03-29 21:55:21', '2019-03-29 23:15:18');
INSERT INTO `menus` VALUES (14, 'Subcategory List', 'সাবক্যাটাগরি তালিকা', 13, 0, 'fa fa-list-ul', '/admin/subcategory', 'admin.subcategory.index', 1, 1, '2019-03-29 21:56:04', '2019-03-29 21:56:04');
INSERT INTO `menus` VALUES (15, 'Add New', 'নতুন যোগ করুন', 13, 0, 'fa fa-plus', '/admin/subcategory/add', 'admin.subcategory.create', 2, 1, '2019-03-29 21:56:42', '2019-03-29 21:56:42');
INSERT INTO `menus` VALUES (16, 'Edit', 'এডিট', 14, 1, 'fa fa-pencil', NULL, 'admin.subcategory.edit', 1, 1, '2019-03-29 21:58:08', '2019-03-29 21:58:08');
INSERT INTO `menus` VALUES (17, 'Delete', 'ডিলিট', 14, 1, 'fa fa-trash', NULL, 'admin.subcategory.delete', 2, 1, '2019-03-29 21:58:53', '2019-03-29 21:58:53');
INSERT INTO `menus` VALUES (18, 'Brand', 'ব্রান্ড', NULL, 0, 'fa fa-briefcase', NULL, NULL, 51, 1, '2019-04-03 03:29:14', '2019-04-06 00:20:18');
INSERT INTO `menus` VALUES (19, 'Brand List', 'ব্রান্ড তালিকা', 18, 0, 'fa fa-list-ul', '/admin/brand', 'admin.brand.index', 1, 1, '2019-04-03 23:00:57', '2019-04-03 23:03:50');
INSERT INTO `menus` VALUES (20, 'Add Brand', 'নতুন যোগ করুন', 18, 0, 'fa fa-plus', '/admin/brand/add', 'admin.brand.create', 2, 1, '2019-04-03 23:03:10', '2019-04-03 23:03:18');
INSERT INTO `menus` VALUES (21, 'Edit', 'এডিট', 19, 1, 'fa fa-pencil', NULL, 'admin.brand.edit', 1, 1, '2019-04-03 23:06:54', '2019-04-03 23:10:28');
INSERT INTO `menus` VALUES (22, 'Delete', 'ডিলিট', 19, 1, 'fa fa-trash', NULL, 'admin.brand.delete', 2, 1, '2019-04-03 23:07:45', '2019-04-03 23:10:35');
INSERT INTO `menus` VALUES (23, 'All Admin', 'সকল এডমিন', NULL, 2, 'fa fa-users', '/admin/all-admin', 'admin.all_admin.index', 1, 1, '2019-04-11 02:37:34', '2019-04-23 11:43:40');
INSERT INTO `menus` VALUES (24, 'Add Admin', 'এডমিন যোগ করুন', 23, 0, 'fa fa-plus', '/admin/all-admin/add', 'admin.all_admin.add', 2, 1, '2019-04-11 02:39:51', '2019-04-11 02:39:51');
INSERT INTO `menus` VALUES (25, 'Action', 'একশন', 23, 0, 'fa fa-home', '/admin/all-admin', 'admin.all_admin.index', 1, 1, '2019-04-23 12:27:34', '2019-04-23 12:27:34');
INSERT INTO `menus` VALUES (26, 'Edit', 'এডিট', 25, 1, 'fa fa-pencil', NULL, 'admin.all_admin.edit', 1, 1, '2019-04-11 02:40:57', '2019-04-23 12:28:07');
INSERT INTO `menus` VALUES (27, 'Delete', 'ডিলিট', 25, 1, 'fa fa-trash', NULL, 'admin.all_admin.delete', 2, 1, '2019-04-11 02:42:59', '2019-04-23 12:28:13');
INSERT INTO `menus` VALUES (28, 'Backup', 'ব্যাকআপ', NULL, 0, 'fa fa-cog', '/admin/backup', 'admin.backup.index', 999, 1, '2019-04-19 03:49:55', '2019-04-19 03:55:47');
INSERT INTO `menus` VALUES (29, 'Action', 'কার্যক্রম', 28, 0, 'fa fa-home', '/admin/backup', 'admin.backup.index', 1, 0, '2019-04-19 03:51:23', '2019-04-19 03:54:34');
INSERT INTO `menus` VALUES (30, 'Download', 'ডাউনলোড', 29, 1, 'fa fa-download', NULL, 'admin.backup.index', 1, 1, '2019-04-19 03:52:24', '2019-04-19 03:52:24');
INSERT INTO `menus` VALUES (31, 'Delete', 'ডিলিট', 29, 1, 'fa fa-trash', NULL, 'admin.backup.index', 2, 1, '2019-04-19 03:52:58', '2019-04-19 03:52:58');
INSERT INTO `menus` VALUES (32, 'SMS', 'এসএমএস', NULL, 0, 'fa fa-envelope', NULL, NULL, 1, 1, NULL, NULL);
INSERT INTO `menus` VALUES (33, 'Send', 'প্রেরন', 32, 0, 'fa fa-envelope', 'admin/sms/send', 'admin.sms.send', 999, 1, NULL, NULL);
INSERT INTO `menus` VALUES (34, 'Custom', 'কাস্টম', 32, 0, 'fa fa-envelope', 'admin/sms/custom', 'admin.sms.custom', 2, 1, NULL, NULL);
INSERT INTO `menus` VALUES (35, 'Report', 'প্রতিবেদন', 32, 0, 'fa fa-envelope', 'admin/sms/report', 'admin.sms.report', 3, 1, NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2018_03_26_200821_create_admins_table', 1);
INSERT INTO `migrations` VALUES (2, '2019_03_04_084037_create_menus_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_03_05_074453_create_roles_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_03_06_090310_create_admin_access_infos_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_03_25_140240_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (6, '2019_03_25_140240_create_users_table', 1);
INSERT INTO `migrations` VALUES (7, '2019_03_25_140140_create_units_table', 2);
INSERT INTO `migrations` VALUES (8, '2019_03_25_140157_create_categories_table', 2);
INSERT INTO `migrations` VALUES (9, '2019_03_25_140207_create_sub_categories_table', 2);
INSERT INTO `migrations` VALUES (10, '2019_03_25_140231_create_brands_table', 2);
INSERT INTO `migrations` VALUES (11, '2019_04_10_152516_create_settings_table', 2);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `sub_menu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `in_body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `admin_id` int(10) NULL DEFAULT NULL,
  `role` tinyint(3) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (9, '[\"32\",\"1\",\"28\",\"2\",\"7\",\"23\",\"13\",\"5\",\"8\",\"18\",\"6\"]', '[\"3\",\"9\",\"10\",\"33\",\"35\",\"14\",\"34\",\"19\",\"24\",\"25\",\"20\",\"29\",\"15\"]', '[\"30\",\"4\",\"31\",\"11\",\"27\",\"16\",\"22\",\"21\",\"17\",\"26\",\"12\"]', 1, 1, 1, '2019-04-26 04:41:31', '2019-04-30 12:09:54');
INSERT INTO `roles` VALUES (10, '[\"2\",\"7\",\"28\"]', '[\"29\",\"3\"]', '[\"30\",\"4\",\"31\"]', 4, 3, 1, '2019-04-26 06:33:57', '2019-04-26 07:42:30');
INSERT INTO `roles` VALUES (12, '[\"23\",\"1\",\"6\",\"18\",\"8\",\"13\",\"5\",\"2\",\"28\",\"7\"]', '[\"29\",\"3\",\"14\",\"25\",\"15\",\"19\",\"10\",\"9\",\"20\",\"24\"]', '[\"30\",\"26\",\"31\",\"4\",\"21\",\"17\",\"11\",\"12\",\"16\",\"22\",\"27\"]', 2, 2, 1, '2019-04-26 07:33:19', '2019-04-26 07:34:01');

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `logo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `title_en` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES (1, 'public/images/settings/logo-1556222447.png', 'public/images/settings/favicon-1556222459.png', 'Demo', 'ডেমো', 'superadmin@Restaurent-Bill.com', '01234567890', 'https://fb.com/Demo', 'twitter', 'youtube', 'linkedin', 'City: Mymensingh\r\nCountry: Bangladesh\r\nState: Mymensingh Division\r\nZipcode: 2200', '1', '2019-04-10 18:00:00', '2019-04-25 20:01:41');

-- ----------------------------
-- Table structure for sms_records
-- ----------------------------
DROP TABLE IF EXISTS `sms_records`;
CREATE TABLE `sms_records`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sms` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `sending_date` date NULL DEFAULT NULL,
  `sms_count` tinyint(3) NULL DEFAULT 1,
  `send_by` int(11) NULL DEFAULT NULL,
  `is_send` tinyint(1) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sms_records
-- ----------------------------
INSERT INTO `sms_records` VALUES (1, '01624390079', 'Hi Khairul vai', '2019-04-30', NULL, 1, 1);
INSERT INTO `sms_records` VALUES (2, '01515255819', 'sgfhgfhg', '2019-04-30', 1, 1, 1);
INSERT INTO `sms_records` VALUES (3, '01624390079', 'sgfhgfhg', '2019-04-30', 1, 1, 1);
INSERT INTO `sms_records` VALUES (4, '01969481541', 'sgfhgfhg', '2019-04-30', 1, 1, 1);
INSERT INTO `sms_records` VALUES (5, '01515255819', 'hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you', '2019-04-30', 2, 1, 1);
INSERT INTO `sms_records` VALUES (6, '01624390079', 'hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you', '2019-04-30', 2, 1, 1);
INSERT INTO `sms_records` VALUES (7, '01515255819', 'ssds', '2019-04-30', 1, 1, 1);
INSERT INTO `sms_records` VALUES (8, '01624390079', 'ssds', '2019-04-30', 1, 1, 1);
INSERT INTO `sms_records` VALUES (9, '01969481541', 'ssds', '2019-04-30', 1, 1, 1);
INSERT INTO `sms_records` VALUES (10, '01515255819', 'd', '2019-04-30', 1, 1, 1);
INSERT INTO `sms_records` VALUES (11, '01515255819', 'd', '2019-04-30', 1, 1, 1);
INSERT INTO `sms_records` VALUES (12, '01624390079', 'd', '2019-04-30', 1, 1, 1);
INSERT INTO `sms_records` VALUES (13, '01713576627', 'hey', '2019-04-30', 1, 1, 1);
INSERT INTO `sms_records` VALUES (14, '01969481541', 'hey', '2019-04-30', 1, 1, 1);
INSERT INTO `sms_records` VALUES (15, '01515255819', 'h', '2019-04-30', 1, 1, 1);
INSERT INTO `sms_records` VALUES (16, '01969481541', 'h', '2019-04-30', 1, 1, 1);
INSERT INTO `sms_records` VALUES (17, '01515255819', 'd', '2019-04-30', 1, 1, 1);
INSERT INTO `sms_records` VALUES (18, '01515255819', 'd', '2019-04-30', 1, 1, 1);
INSERT INTO `sms_records` VALUES (19, '01515255819', 's', '2019-04-30', 1, 1, 1);

-- ----------------------------
-- Table structure for sub_categories
-- ----------------------------
DROP TABLE IF EXISTS `sub_categories`;
CREATE TABLE `sub_categories`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `sub_categories_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for units
-- ----------------------------
DROP TABLE IF EXISTS `units`;
CREATE TABLE `units`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_role` tinyint(4) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `district_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `upazilla_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE,
  UNIQUE INDEX `users_mobile_unique`(`mobile`) USING BTREE,
  UNIQUE INDEX `users_username_unique`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Demo', 'demo@gmail.com', '01515255819', 'demo', NULL, 1, '$2y$10$tQVwD5VequDrZsgg5NUaHexmp3fGf.XI7zylpDEqSxf9WJITYiRWO', NULL, NULL, NULL, '', '1', NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
