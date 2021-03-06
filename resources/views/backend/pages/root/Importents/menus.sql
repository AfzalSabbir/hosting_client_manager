INSERT INTO `menus` (`id`, `menu`, `menu_bn`, `parent_id`, `menu_position`, `icon`, `url`, `route`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'ড্যাশবোর্ড', NULL, 0, 'fa fa-dashboard', '/admin', 'admin.home', 1, 1, '2019-03-25 05:02:05', '2019-03-25 05:02:05'),
(2, 'Menu Permission', 'মেনু পারমিশন', NULL, 0, 'fa fa-cogs', '/admin/role', 'admin.role.index', 997, 1, '2019-03-25 04:44:32', '2019-04-23 11:29:07'),
(3, 'Action', 'একশন', 2, 0, 'fa fa-home', '/admin/role', 'admin.role.index', 1, 1, '2019-04-23 11:27:09', '2019-04-23 11:27:09'),
(4, 'Assign', 'অনুমতি প্রদান', 3, 1, 'fa fa-pencil', '/admin/role/assign', 'admin.role.assign', 1, 1, '2019-03-25 04:48:50', '2019-04-23 11:27:39'),
(5, 'Site Settings', 'সাইট সেটিংস', NULL, 0, 'fa fa-sliders', '/admin/setting', 'admin.setting.index', 450, 1, '2019-04-10 22:30:44', '2019-04-11 02:33:10'),
(6, 'Change Password', 'পাসওয়ার্ড পরিবর্তন', NULL, 2, 'fa fa-cog', '/admin/change-password', 'admin.password.form', 2, 1, '2019-03-25 04:42:35', '2019-04-23 12:20:29'),
(7, 'Log Activity', 'লগ এক্টিভিটি', NULL, 0, 'fa fa-cog', '/admin/log', 'admin.log.index', 998, 1, '2019-03-25 04:46:37', '2019-04-23 11:28:41'),
(8, 'Category', 'ক্যাটাগরি', NULL, 0, 'fa fa-pie-chart', NULL, NULL, 90, 1, '2019-03-29 21:51:15', '2019-03-30 00:11:55'),
(9, 'Category List', 'ক্যাটাগরি তালিকা', 8, 0, 'fa fa-list-ul', '/admin/category', 'admin.category.index', 1, 1, '2019-03-29 21:51:59', '2019-03-29 21:51:59'),
(10, 'Add New', 'নতুন যোগ করুন', 8, 0, 'fa fa-plus', '/admin/category/add', 'admin.category.create', 2, 1, '2019-03-29 21:52:31', '2019-03-29 21:52:31'),
(11, 'Edit', 'এডিট', 9, 1, 'fa fa-pencil', NULL, 'admin.category.edit', 1, 1, '2019-03-29 21:53:02', '2019-03-29 22:55:28'),
(12, 'Delete', 'ডিলিট', 9, 1, 'fa fa-trash', NULL, 'admin.category.delete', 2, 1, '2019-03-29 21:53:33', '2019-03-29 23:01:25'),
(13, 'Subcategory', 'সাবক্যাটাগরি', NULL, 0, 'fa fa-yelp', NULL, NULL, 91, 1, '2019-03-29 21:55:21', '2019-03-29 23:15:18'),
(14, 'Subcategory List', 'সাবক্যাটাগরি তালিকা', 13, 0, 'fa fa-list-ul', '/admin/subcategory', 'admin.subcategory.index', 1, 1, '2019-03-29 21:56:04', '2019-03-29 21:56:04'),
(15, 'Add New', 'নতুন যোগ করুন', 13, 0, 'fa fa-plus', '/admin/subcategory/add', 'admin.subcategory.create', 2, 1, '2019-03-29 21:56:42', '2019-03-29 21:56:42'),
(16, 'Edit', 'এডিট', 14, 1, 'fa fa-pencil', NULL, 'admin.subcategory.edit', 1, 1, '2019-03-29 21:58:08', '2019-03-29 21:58:08'),
(17, 'Delete', 'ডিলিট', 14, 1, 'fa fa-trash', NULL, 'admin.subcategory.delete', 2, 1, '2019-03-29 21:58:53', '2019-03-29 21:58:53'),
(18, 'Brand', 'ব্রান্ড', NULL, 0, 'fa fa-briefcase', NULL, NULL, 51, 1, '2019-04-03 03:29:14', '2019-04-06 00:20:18'),
(19, 'Brand List', 'ব্রান্ড তালিকা', 18, 0, 'fa fa-list-ul', '/admin/brand', 'admin.brand.index', 1, 1, '2019-04-03 23:00:57', '2019-04-03 23:03:50'),
(20, 'Add Brand', 'নতুন যোগ করুন', 18, 0, 'fa fa-plus', '/admin/brand/add', 'admin.brand.create', 2, 1, '2019-04-03 23:03:10', '2019-04-03 23:03:18'),
(21, 'Edit', 'এডিট', 19, 1, 'fa fa-pencil', NULL, 'admin.brand.edit', 1, 1, '2019-04-03 23:06:54', '2019-04-03 23:10:28'),
(22, 'Delete', 'ডিলিট', 19, 1, 'fa fa-trash', NULL, 'admin.brand.delete', 2, 1, '2019-04-03 23:07:45', '2019-04-03 23:10:35'),
(23, 'All Admin', 'সকল এডমিন', NULL, 2, 'fa fa-users', '/admin/all-admin', 'admin.all_admin.index', 1, 1, '2019-04-11 02:37:34', '2019-04-23 11:43:40'),
(24, 'Add Admin', 'এডমিন যোগ করুন', 23, 0, 'fa fa-plus', '/admin/all-admin/add', 'admin.all_admin.add', 2, 1, '2019-04-11 02:39:51', '2019-04-11 02:39:51'),
(25, 'Action', 'একশন', 23, 0, 'fa fa-home', '/admin/all-admin', 'admin.all_admin.index', 1, 1, '2019-04-23 12:27:34', '2019-04-23 12:27:34'),
(26, 'Edit', 'এডিট', 25, 1, 'fa fa-pencil', NULL, 'admin.all_admin.edit', 1, 1, '2019-04-11 02:40:57', '2019-04-23 12:28:07'),
(27, 'Delete', 'ডিলিট', 25, 1, 'fa fa-trash', NULL, 'admin.all_admin.delete', 2, 1, '2019-04-11 02:42:59', '2019-04-23 12:28:13'),
(28, 'Backup', 'ব্যাকআপ', NULL, 0, 'fa fa-cog', '/admin/backup', 'admin.backup.index', 999, 1, '2019-04-19 03:49:55', '2019-04-19 03:55:47'),
(29, 'Action', 'কার্যক্রম', 28, 0, 'fa fa-home', '/admin/backup', 'admin.backup.index', 1, 0, '2019-04-19 03:51:23', '2019-04-19 03:54:34'),
(30, 'Download', 'ডাউনলোড', 29, 1, 'fa fa-download', NULL, 'admin.backup.index', 1, 1, '2019-04-19 03:52:24', '2019-04-19 03:52:24'),
(31, 'Delete', 'ডিলিট', 29, 1, 'fa fa-trash', NULL, 'admin.backup.index', 2, 1, '2019-04-19 03:52:58', '2019-04-19 03:52:58');