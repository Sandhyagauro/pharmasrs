-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 11:42 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meropharmaceutical`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_departments`
--

CREATE TABLE `category_departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_departments`
--

INSERT INTO `category_departments` (`id`, `title`, `content`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'General Consultation', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard</p>', 'uploads/851332.jpg', 'general-consultation', '2018-11-21 21:34:14', '2018-12-04 04:38:33'),
(2, 'Child Health Consultation', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'uploads/830021.jpg', 'child-health-consultation', '2018-11-21 22:50:28', '2018-11-21 23:54:09'),
(3, 'Sugar,Thyroid,Heart Consultation', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'uploads/433003.jpg', 'sugar-thyroid-heart-consultation', '2018-11-21 23:50:59', '2018-11-21 23:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `name`, `address`, `mobile`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sandhya', 'satdobato', '9478523', 'sandhya@view9.com.np', 'hellooo!!!!!!!', '2018-11-21 22:46:24', '2018-11-21 22:46:24'),
(2, 'fsdf', 'sdf', '84512', 'sandhya@view9.com.np', 'dsfsdg', '2018-12-25 02:12:15', '2018-12-25 02:12:15'),
(3, 'fsdf', 'sdf', '84512', 'sandhya@view9.com.np', 'dsfsdg', '2018-12-25 02:13:02', '2018-12-25 02:13:02'),
(4, 'sandhya', 'satdobato', '1234567898', 'sandhya@view9.com.np', 'sa', '2018-12-25 02:15:10', '2018-12-25 02:15:10'),
(5, 'sandhya', 'satdobato', '84512', 'sandhya@view9.com.np', 'sd', '2018-12-25 02:16:52', '2018-12-25 02:16:52'),
(6, 'sandhya', 'satdobato', '84512', 'sandhya@view9.com.np', 'sd', '2018-12-25 02:19:06', '2018-12-25 02:19:06'),
(7, 'xz', 'xz', '410', 'sandhya@view9.com.np', 'asdfsd', '2018-12-25 02:19:57', '2018-12-25 02:19:57'),
(8, 'xz', 'zx', '410', 'sandhya@view9.com.np', 'xcxv', '2018-12-25 02:22:08', '2018-12-25 02:22:08'),
(9, 'sandhya', 'satdobato', '3234', 'sandhya@view9.com.np', 'sa', '2018-12-25 02:24:21', '2018-12-25 02:24:21'),
(10, 'sssssss', 'satdobato', '3434', 'sandhya@view9.com.np', 'sa', '2018-12-25 02:27:00', '2018-12-25 02:27:00'),
(11, 'sssssss', 'satdobato', '3434', 'sandhya@view9.com.np', 'sa', '2018-12-25 02:27:26', '2018-12-25 02:27:26'),
(12, 'sssssss', 'satdobato', '3434', 'sandhya@view9.com.np', 'sa', '2018-12-25 02:27:55', '2018-12-25 02:27:55'),
(13, 'sandhya', 'satdobato', '344', 'sandhya@view9.com.np', 'test', '2019-01-03 06:01:35', '2019-01-03 06:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `counseling_infos`
--

CREATE TABLE `counseling_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_department_id` int(10) UNSIGNED NOT NULL,
  `pharmacist_id` int(10) UNSIGNED DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `package_amount` int(11) DEFAULT NULL,
  `package_duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `patient` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `patient_age` int(11) DEFAULT NULL,
  `patient_gender` enum('male','female','others') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_relation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `current_symptoms` longtext COLLATE utf8mb4_unicode_ci,
  `medical_history` longtext COLLATE utf8mb4_unicode_ci,
  `patient_query` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counseling_infos`
--

INSERT INTO `counseling_infos` (`id`, `user_id`, `category_department_id`, `pharmacist_id`, `package_id`, `package_amount`, `package_duration`, `patient`, `patient_name`, `patient_age`, `patient_gender`, `patient_relation`, `current_symptoms`, `medical_history`, `patient_query`, `created_at`, `updated_at`) VALUES
(1, 16, 2, 1, 1, 33, '1 week', 'others', NULL, NULL, NULL, NULL, 'test', 'test', 'test', '2018-11-22 05:23:01', '2018-11-22 05:23:01'),
(2, 16, 2, 1, 1, 33, '1 week', 'others', NULL, NULL, NULL, NULL, 'test', 'test', 'test', '2018-11-22 05:25:22', '2018-11-22 05:25:22'),
(3, 16, 2, 1, 1, 33, '1 week', 'others', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-22 06:08:28', '2018-11-22 06:08:28'),
(4, 15, 1, NULL, NULL, NULL, '', 'others', 'test sandhya', 33, 'female', 'brother', NULL, NULL, 'test', '2018-12-04 02:33:47', '2018-12-04 02:33:47'),
(33, 15, 2, NULL, NULL, NULL, '', 'others', NULL, NULL, NULL, NULL, NULL, NULL, 'test', '2018-12-04 02:57:56', '2018-12-04 02:57:56'),
(34, 1, 3, NULL, NULL, NULL, '', 'others', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-02 05:56:54', '2019-01-02 05:56:54'),
(35, 1, 3, NULL, NULL, NULL, '', 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-02 05:57:17', '2019-01-02 05:57:17'),
(36, 1, 3, NULL, NULL, NULL, '', 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-02 06:25:20', '2019-01-02 06:25:20'),
(37, 87, 3, NULL, NULL, NULL, '', 'self', NULL, NULL, NULL, NULL, NULL, NULL, 'fadfads', '2019-01-02 23:57:07', '2019-01-02 23:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `counseling_info_has_images`
--

CREATE TABLE `counseling_info_has_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `counseling_info_id` int(10) UNSIGNED NOT NULL,
  `file_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counseling_info_has_images`
--

INSERT INTO `counseling_info_has_images` (`id`, `counseling_info_id`, `file_id`, `created_at`, `updated_at`) VALUES
(1, 33, 37, '2018-12-04 02:57:56', '2018-12-04 02:57:56'),
(2, 33, 38, '2018-12-04 02:57:56', '2018-12-04 02:57:56'),
(3, 37, 64, '2019-01-02 23:57:07', '2019-01-02 23:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_data`, `created_at`, `updated_at`) VALUES
(1, 'uploads/282965.jpg', '2018-11-21 21:34:00', '2018-11-21 23:49:28'),
(2, 'uploads/716756.jpg', '2018-11-21 21:34:34', '2018-11-21 21:34:34'),
(3, 'uploads/556420.jpg', '2018-11-21 21:34:48', '2018-11-21 23:52:40'),
(4, 'uploads/506003.jpg', '2018-11-21 21:42:12', '2018-11-21 21:42:12'),
(5, 'uploads/542844.jpg', '2018-11-21 21:42:40', '2018-11-21 21:42:40'),
(6, 'uploads/322017.jpg', '2018-11-21 23:48:56', '2018-11-21 23:48:56'),
(7, 'uploads/875720.jpeg', '2018-11-21 23:50:17', '2018-11-28 04:24:22'),
(8, 'uploads/394789.jpg', '2018-11-21 23:52:51', '2018-11-21 23:52:51'),
(9, 'uploads/877902.jpg', '2018-11-21 23:53:03', '2018-11-21 23:53:03'),
(10, 'uploads/468846.png', '2018-11-24 01:34:26', '2018-11-24 01:34:26'),
(11, 'uploads/694554.jpg', '2018-11-24 22:26:00', '2018-11-24 22:26:00'),
(12, 'uploads/820618.jpg', '2018-12-04 02:00:01', '2018-12-04 02:00:01'),
(13, 'uploads/907030.jpg', '2018-12-04 02:07:15', '2018-12-04 02:07:15'),
(14, 'uploads/667688.jpg', '2018-12-04 02:07:48', '2018-12-04 02:07:48'),
(15, 'uploads/637847.jpg', '2018-12-04 02:11:05', '2018-12-04 02:11:05'),
(16, 'uploads/699767.jpg', '2018-12-04 02:12:06', '2018-12-04 02:12:06'),
(17, 'uploads/89452.jpg', '2018-12-04 02:12:10', '2018-12-04 02:12:10'),
(18, 'uploads/286547.jpg', '2018-12-04 02:13:19', '2018-12-04 02:13:19'),
(19, 'uploads/175626.jpg', '2018-12-04 02:13:45', '2018-12-04 02:13:45'),
(20, 'uploads/702765.jpg', '2018-12-04 02:14:20', '2018-12-04 02:14:20'),
(21, 'uploads/748295.jpg', '2018-12-04 02:14:38', '2018-12-04 02:14:38'),
(22, 'uploads/298909.jpg', '2018-12-04 02:14:55', '2018-12-04 02:14:55'),
(23, 'uploads/424819.jpg', '2018-12-04 02:15:22', '2018-12-04 02:15:22'),
(24, 'uploads/488106.jpg', '2018-12-04 02:15:28', '2018-12-04 02:15:28'),
(25, 'uploads/721011.jpg', '2018-12-04 02:15:43', '2018-12-04 02:15:43'),
(26, 'uploads/437741.jpg', '2018-12-04 02:21:41', '2018-12-04 02:21:41'),
(27, 'uploads/623749.jpg', '2018-12-04 02:34:39', '2018-12-04 02:34:39'),
(28, 'uploads/186610.jpg', '2018-12-04 02:34:41', '2018-12-04 02:34:41'),
(29, 'uploads/392094.jpg', '2018-12-04 02:34:46', '2018-12-04 02:34:46'),
(30, 'uploads/2965.jpg', '2018-12-04 02:34:58', '2018-12-04 02:34:58'),
(31, 'uploads/45515.jpg', '2018-12-04 02:35:56', '2018-12-04 02:35:56'),
(32, 'uploads/663421.jpg', '2018-12-04 02:35:57', '2018-12-04 02:35:57'),
(33, 'uploads/861726.jpg', '2018-12-04 02:40:33', '2018-12-04 02:40:33'),
(34, 'uploads/438179.jpg', '2018-12-04 02:40:35', '2018-12-04 02:40:35'),
(35, 'uploads/43719.jpg', '2018-12-04 02:47:38', '2018-12-04 02:47:38'),
(36, 'uploads/988806.jpg', '2018-12-04 02:47:42', '2018-12-04 02:47:42'),
(37, 'uploads/570273.jpg', '2018-12-04 02:49:59', '2018-12-04 02:49:59'),
(38, 'uploads/222130.jpg', '2018-12-04 02:50:01', '2018-12-04 02:50:01'),
(39, 'uploads/302294.jpg', '2018-12-04 04:18:54', '2018-12-04 04:18:54'),
(40, 'uploads/865814.jpg', '2018-12-04 06:09:14', '2018-12-04 06:09:14'),
(41, 'uploads/946268.jpg', '2018-12-04 06:09:18', '2018-12-04 06:09:18'),
(42, 'uploads/122912.jpg', '2018-12-04 06:09:23', '2018-12-04 06:09:23'),
(43, 'uploads/772844.jpg', '2018-12-04 06:09:31', '2018-12-04 06:09:31'),
(44, 'uploads/613957.jpg', '2018-12-04 06:09:33', '2018-12-04 06:09:33'),
(45, 'uploads/760759.jpg', '2018-12-04 06:09:38', '2018-12-04 06:09:38'),
(46, 'uploads/472612.jpg', '2018-12-04 06:09:51', '2018-12-04 06:09:51'),
(47, 'uploads/703409.jpg', '2018-12-04 06:09:54', '2018-12-04 06:09:54'),
(48, 'uploads/788287.jpg', '2018-12-11 05:44:53', '2018-12-11 05:44:53'),
(49, 'uploads/329369.jpg', '2018-12-11 05:54:54', '2018-12-23 23:30:49'),
(50, 'uploads/376596.jpg', '2018-12-12 22:54:08', '2018-12-12 22:54:08'),
(51, 'uploads/33487.jpg', '2018-12-12 22:56:15', '2018-12-12 22:56:15'),
(52, 'uploads/52969.jpg', '2018-12-23 23:25:06', '2018-12-23 23:25:06'),
(53, 'uploads/292573.jpg', '2018-12-23 23:25:38', '2018-12-30 04:27:31'),
(54, 'uploads/982086.jpg', '2018-12-30 03:20:34', '2018-12-30 03:20:34'),
(55, 'uploads/721253.jpg', '2018-12-30 03:20:35', '2018-12-30 03:20:35'),
(56, 'uploads/120464.jpg', '2018-12-30 06:15:03', '2018-12-30 06:15:03'),
(57, 'uploads/284250.jpeg', '2019-01-02 23:22:35', '2019-01-02 23:22:35'),
(58, 'uploads/35531.jpg', '2019-01-02 23:36:56', '2019-01-02 23:36:56'),
(59, 'uploads/215167.jpg', '2019-01-02 23:40:45', '2019-01-02 23:40:45'),
(60, 'uploads/784018.jpg', '2019-01-02 23:51:42', '2019-01-02 23:51:42'),
(61, 'uploads/670570.jpg', '2019-01-02 23:52:02', '2019-01-02 23:52:02'),
(62, 'uploads/289781.jpg', '2019-01-02 23:54:07', '2019-01-02 23:54:07'),
(63, 'uploads/840629.jpg', '2019-01-02 23:54:30', '2019-01-02 23:54:30'),
(64, 'uploads/532089.jpg', '2019-01-02 23:56:38', '2019-01-02 23:56:38');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `url`, `order`, `parent_id`, `type`, `is_published`, `created_at`, `updated_at`) VALUES
(2, 'about us', 'aboutus', 1, 0, NULL, 1, '2018-11-21 21:13:47', '2018-11-27 03:50:59'),
(3, 'CONTACT US', 'contactus', 3, 0, NULL, 1, '2018-11-21 21:38:19', '2018-11-21 22:46:49'),
(4, 'NEWS AND ARTICLES', 'news-and-articles', 2, 0, NULL, 1, '2018-11-21 21:38:47', '2018-11-21 22:45:43'),
(5, 'Prescriptions', 'prescription-option', 4, 0, NULL, 1, '2018-11-21 21:39:03', '2019-01-02 05:50:10');

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
(3, '2018_10_11_053201_create_cms_table', 2),
(13, '2018_10_24_092150_create_permission_tables', 9),
(20, '2014_10_12_000000_create_users_table', 10),
(21, '2014_10_12_100000_create_password_resets_table', 10),
(22, '2018_10_11_080611_create_menus_table', 11),
(23, '2018_10_28_094723_create_posts_table', 11),
(24, '2018_10_29_043202_create_images_table', 11),
(25, '2018_10_29_043502_create_post_has_images_table', 11),
(26, '2018_11_14_111558_create_contact_details_table', 11),
(27, '2018_11_18_081525_create_permission_tables', 11),
(28, '2018_11_19_083546_create_package_lists_table', 11),
(29, '2018_11_20_043930_create_patient_users_table', 11),
(30, '2018_11_20_083542_add_phone_to_users', 11),
(31, '2018_11_21_045239_create_category_departments_table', 11),
(34, '2018_11_22_024428_create_pharmacist_users_table', 12),
(35, '2018_11_22_090437_create_counseling_infos_table', 13),
(36, '2018_11_23_143306_create_site_settings_table', 14),
(39, '2018_12_04_045834_create_counseling_info_has_images_table', 15),
(43, '2018_12_06_101006_create_prescription_replies_table', 16),
(44, '2018_12_12_045153_create_seo_tools_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `package_lists`
--

CREATE TABLE `package_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_lists`
--

INSERT INTO `package_lists` (`id`, `amount`, `duration`, `created_at`, `updated_at`) VALUES
(1, 33, '1 week', '2018-11-21 21:35:03', '2018-11-21 21:35:03'),
(2, 500, '1 month', '2018-11-22 03:06:05', '2018-11-22 03:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_users`
--

CREATE TABLE `patient_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` double(10,2) DEFAULT NULL,
  `feet` int(11) DEFAULT NULL,
  `inches` int(11) DEFAULT NULL,
  `blood_group` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_users`
--

INSERT INTO `patient_users` (`id`, `user_id`, `name`, `email`, `country`, `phone`, `address`, `dob`, `gender`, `weight`, `feet`, `inches`, `blood_group`, `image`, `created_at`, `updated_at`) VALUES
(2, 15, 'hvbn', 'samipstha114@yahoo.com', 'Nepal', '34235', 'asdfd', '2018-11-28', 'female', 34533.00, 434534, 45435345, 'O+', 'uploads/592902.jpg', '2018-11-21 23:32:21', '2019-01-03 04:25:54'),
(9, 46, 'View Rawal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-12 04:52:51', '2018-12-12 04:52:51'),
(10, 47, 'sfsfd', 'adasdfasdfmin@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-12 04:53:14', '2018-12-12 04:53:14'),
(11, 80, 'asdf', 'samipstha114@yahoo.comsdfd', NULL, '342354', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-30 04:12:45', '2018-12-30 04:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist_users`
--

CREATE TABLE `pharmacist_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_department_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nmc_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `speciality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `shop_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `shop_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `shop_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `specialization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `journals` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `awards` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `memberships` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_front` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizenship_front` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pharmacist_users`
--

INSERT INTO `pharmacist_users` (`id`, `user_id`, `category_department_id`, `name`, `nmc_number`, `qualification`, `speciality`, `website`, `shop_name`, `shop_address`, `shop_number`, `specialization`, `experience`, `education`, `journals`, `awards`, `memberships`, `image`, `license_front`, `citizenship_front`, `created_at`, `updated_at`) VALUES
(1, 16, 1, 'Riyasdsd', '78545', 'bachelor', 'neurologist', 'http://mailsnepal.com/', 'sandhya', 'satdobato', '44', 'hbansdf', '512', 'TU', 'nm', 'sdgf', 'm', 'uploads/pharmacist/profileimage/original/img-event3.png', 'uploads/pharmacist/licenseimage/original/cargo.jpg', 'uploads/pharmacist/citizenshipimage/original/cargo-bg.jpg', '2018-11-22 04:22:55', '2019-01-02 05:14:20'),
(2, 20, 3, 'test', '11', 'bachelor', 'Pediatrics', 'http://mailsnepal.com/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-25 02:21:58', '2018-11-25 02:21:58'),
(3, 21, 3, 'resr', '33', 'bachelor', 'neurologist', 'http://mailsnepal.com/', 'dfg', 'sdfg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-26 23:06:10', '2018-11-26 23:06:10'),
(4, 22, 3, 'sdfsdg', '32232', NULL, '234wr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-26 23:12:47', '2018-11-26 23:12:47'),
(7, 26, 3, 'sdfsdg', '3332232', NULL, '234wr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-26 23:15:23', '2018-11-26 23:15:23'),
(9, 28, 3, 'sdfsdg', '333223255', NULL, '234wr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-26 23:16:12', '2018-11-26 23:16:12'),
(10, 30, 3, 'sdfsdg', '66', NULL, '234wr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/900980.jpg', NULL, NULL, '2018-11-26 23:18:01', '2018-11-26 23:18:01'),
(11, 31, 3, 's', '55', NULL, 'sgsdg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/219938.jpg', NULL, NULL, '2018-11-26 23:20:41', '2018-11-26 23:20:41'),
(12, 32, 3, 'surre', '44', NULL, 'sda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/427340.jpg', NULL, NULL, '2018-11-26 23:29:32', '2018-11-26 23:29:32'),
(13, 51, NULL, 'dfsd', '43', 'bachelor', '', '', 'df', 'fds', '', '', '', '', '', '', '', 'uploads/59448.jpg', NULL, NULL, '2018-12-12 05:15:44', '2018-12-12 05:16:44'),
(14, 52, NULL, 'hi', '3434', 'bachelor', '', '', NULL, NULL, '', '', '', 'Pokhara', '', '', '', 'uploads/213074.jpg', NULL, NULL, '2018-12-18 23:39:55', '2018-12-18 23:42:41'),
(15, 54, NULL, 'd', '2222222', 'dsddf', '', '', 'dsf', 'dsfdsf', '', '', '', 'fsdf', '', '', '', 'uploads/717736.jpg', 'uploads/688822.jpg', 'uploads/330244.jpg', '2018-12-19 06:02:17', '2018-12-19 06:02:17'),
(20, 60, NULL, 'sandhya', '11112222', 'bachelor', '', '', NULL, NULL, '', '', '', 'sdfsf', '', '', '', NULL, NULL, NULL, '2018-12-19 23:21:25', '2018-12-19 23:21:25'),
(22, 68, NULL, 'asdfdasf', '323', 'bachelor', '', '', 'fasdf', 'bnttt', '', '', '', 'm', '', '', '', '', '', '', '2018-12-19 23:43:14', '2018-12-19 23:43:14'),
(23, 71, NULL, 'sas', '3', 'bachelor', '', '', NULL, NULL, '', '', '', 'tu', '', '', '', 'uploads/pharmacist/profileimage/original/banner1.jpg', '', '', '2018-12-19 23:50:09', '2018-12-19 23:50:09'),
(24, 72, NULL, 'dsd', '2', 'bachelor', '', '', NULL, NULL, '', '', '', 'tu', '', '', '', 'uploads/pharmacist/profileimage/original/author.jpg', '', '', '2018-12-19 23:51:05', '2018-12-19 23:51:05'),
(25, 77, NULL, 'a', '5', 'bachelor', '', '', NULL, NULL, '', '', '', 'tu', '', '', '', 'uploads/pharmacist/profileimage/original/aboutusbanner.jpg', 'uploads/pharmacist/licenseimage/original/banner1.jpg', 'uploads/pharmacist/citizenshipimage/original/banner2.jpg', '2018-12-19 23:58:31', '2018-12-19 23:58:31'),
(26, 82, NULL, 'dsf', '324234', NULL, '', '', NULL, 'samipstha114@yahoo.com', '', '', '', 'ds', '', '', '', '', '', '', '2018-12-30 04:39:37', '2018-12-30 04:39:37'),
(27, 83, NULL, 'dfdf', '3258790000867534567890', NULL, '', '', NULL, 'samipstha114@yahoo.com', '', '', '', 'dfgfd', '', '', '', '', '', '', '2018-12-30 04:40:33', '2018-12-30 04:42:40'),
(28, 84, NULL, 'saa', '234567890345678', NULL, '', '', NULL, 'samipstha114@yahoo.com', '', '', '', 'rs', '', '', '', '', '', '', '2018-12-30 04:43:22', '2018-12-30 04:43:22'),
(29, 85, NULL, 'asdf', '324324', 'bachelor', '', '', NULL, 'admin@admin.com', '', '', '', 'sd', '', '', '', '', '', '', '2019-01-02 02:35:29', '2019-01-02 02:35:29'),
(30, 86, NULL, 'asdfsd', '345345', NULL, '', '', NULL, 'admin@admin.com', '', '', '', 'sdfd', '', '', '', '', '', '', '2019-01-02 03:13:53', '2019-01-02 03:13:53'),
(31, 87, NULL, 'sd', 'dff345345', 'bachelor', '', '', NULL, 'admin@admin.com', '', '', '', 'tu', '', '', '', '', '', '', '2019-01-02 23:02:54', '2019-01-02 23:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `excerpt` longtext COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `excerpt`, `type`, `slug`, `created_at`, `updated_at`) VALUES
(29, 'General Consultation', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa...</p>', '', 'department', 'general-consultation', '2018-11-18 05:03:23', '2018-11-18 05:03:23'),
(30, 'Mental Health Consultation', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa...</p>', '', 'department', 'mental-health-consultation', '2018-11-18 05:04:29', '2018-11-18 05:04:29'),
(31, 'Child Health Consultation', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa...</p>', '', 'department', 'child-health-consultation', '2018-11-18 05:06:56', '2018-11-18 05:06:56'),
(32, 'test team', '<p>test</p>', NULL, 'team', 'test-team', '2018-11-21 21:34:00', '2018-11-21 21:34:00'),
(33, 'PHARMA SRS', '<p>YOU CAN TRUST</p>', 'Quality Health care', 'banner', 'rer', '2018-11-21 21:34:34', '2018-11-21 23:48:17'),
(34, 'Test news', 'test news content', NULL, 'news', 'fsdfdf', '2018-11-21 21:34:48', '2018-11-21 23:52:40'),
(35, 'clinic departments', '<p>asas</p>', NULL, 'post', 'clinic-departments', '2018-11-21 21:37:03', '2018-11-21 21:37:03'),
(36, 'About PHARMA SRS', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised</p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley o', 'post', 'about-pharma-srs', '2018-11-21 21:37:28', '2018-11-21 23:51:48'),
(37, 'about us', '<p>asas</p>', NULL, 'post', 'about-us', '2018-11-21 21:40:13', '2018-11-21 21:40:13'),
(38, 'about apharma srs', '<p>dssdsd</p>\r\n\r\n<p>&nbsp;</p>', NULL, 'post', 'about-apharma-srs', '2018-11-21 21:40:33', '2018-11-21 21:40:33'),
(39, 'Happy Customers', NULL, '500', 'post', 'happy-customers', '2018-11-21 21:40:49', '2018-11-24 22:28:11'),
(40, 'Available Pharmacist', '<p>xcxc</p>', '50', 'post', 'available-pharmacist', '2018-11-21 21:41:09', '2018-11-24 22:28:32'),
(41, 'Available Pharmacist', '<p>77</p>', NULL, 'post', 'available-pharmacist-1', '2018-11-21 21:41:26', '2018-11-21 21:41:26'),
(42, 'Development Hours', '<p>44</p>', '400', 'post', 'development-hours', '2018-11-21 21:41:37', '2018-11-24 22:28:43'),
(43, 'Answered Tickets', '<p>uhj</p>', '200', 'post', 'answered-tickets', '2018-11-21 21:41:49', '2018-11-24 22:28:50'),
(44, 'News And Articles', '<p>sdsd</p>', NULL, 'post', 'news-and-articles', '2018-11-21 21:42:12', '2018-11-21 21:42:12'),
(45, 'Contact Us', '<p>cxfs</p>', NULL, 'post', 'contact-us', '2018-11-21 21:42:40', '2018-11-21 21:42:40'),
(46, 'Consult Online', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,', NULL, 'post', 'consult-online', '2018-11-21 21:42:59', '2018-12-04 04:28:52'),
(47, 'PHARMA SRS', '<p>FULL SERVICE</p>', 'Health care', 'banner', 'pharma-srs', '2018-11-21 23:48:56', '2018-11-21 23:48:56'),
(48, 'test55', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s</p>', '2323', 'team', 'test55', '2018-11-21 23:50:01', '2018-12-30 06:03:44'),
(49, 'test', 'test', NULL, 'news', 'test', '2018-11-21 23:52:51', '2018-11-21 23:52:51'),
(50, 'News And Articles', 'tetaset', NULL, 'news', 'news-and-articles-1', '2018-11-21 23:53:03', '2018-11-21 23:53:03'),
(51, 'Footer 1', 'Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc.', NULL, 'post', 'footer-1', '2018-11-24 01:34:26', '2018-11-24 01:34:26'),
(52, 'An amazing team is able to do amazing things, adipiscing elit lorem ipsum.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>', NULL, 'post', 'an-amazing-team', '2018-11-24 09:23:16', '2018-11-24 09:25:26'),
(53, 'yr', '<p>dfgsdfg</p>', 'sdfg', 'news', 'yr', '2018-12-11 05:44:52', '2018-12-11 05:44:52'),
(54, 'hello', '<p>nteger id metus sit amet turpis facilisis ullamcorper. Sed&nbsp;<a href=\"http://localhost:8000/news-and-articles/hello#\">tellus tellus</a>, elementum ac mauris in, venenatis consectetur est. Praesent condimentum ut erat sit amet bibendum. Morbi sit amet commodo est. Donec arcu nulla, pellentesque at mi in, fringilla tincidunt risus. Nunc finibus pellentesque diam in tincidunt. Nulla cursus fermentum neque quis consequat. Maecenas non augue id dui placerat tempor. Duis maximus commodo dui a viverra. Fusce nunc augue, pharetra in sem sed, maximus commodo nisl. Vivamus molestie nisl eu gravida dapibus. Integer ac lacus laoreet, dictum sem sit amet, volutpat turpis. Nulla molestie metus nec nibh vestibulum, vitae porta felis vehicula. Curabitur volutpat, libero eget fermentum ultricies, velit purus luctus arcu, sit amet vulputate dui magna nec nulla.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>nteger id metus sit amet turpis facilisis ullamcorper. Sed&nbsp;<a href=\"http://localhost:8000/news-and-articles/hello#\">tellus tellus</a>, elementum ac mauris in, venenatis consectetur est. Praesent condimentum ut erat sit amet bibendum. Morbi sit amet commodo est. Donec arcu nulla, pellentesque at mi in, fringilla tincidunt risus. Nunc finibus pellentesque diam in tincidunt. Nulla cursus fermentum neque quis consequat. Maecenas non augue id dui placerat tempor. Duis maximus commodo dui a viverra. Fusce nunc augue, pharetra in sem sed, maximus commodo nisl. Vivamus molestie nisl eu gravida dapibus. Integer ac lacus laoreet, dictum sem sit amet, volutpat turpis. Nulla molestie metus nec nibh vestibulum, vitae porta felis vehicula. Curabitur volutpat, libero eget fermentum ultricies, velit purus luctus arcu, sit amet vulputate dui magna nec nulla.</p>\r\n\r\n<p>&nbsp;</p>', 'sandhya', 'news', 'hello', '2018-12-11 05:54:54', '2018-12-12 05:44:17'),
(55, 'about apharma srs', NULL, NULL, 'post', 'about-apharma-srs-1', '2018-12-12 22:56:08', '2018-12-12 22:56:08'),
(56, 'asfd', '<p>sadf</p>', 'asdf', 'news', 'asfd', '2018-12-23 23:25:06', '2018-12-23 23:25:06'),
(57, 'fdg', '<p>ghvbn</p>\r\n\r\n<figure class=\"easyimage easyimage-side\"><img alt=\"\" src=\"blob:http://localhost:8000/86ddd661-7f47-435a-a8a5-9a4abb2f0517\" width=\"345\" />\r\n<figcaption></figcaption>\r\n</figure>', 'sdfg', 'news', 'fdg', '2018-12-23 23:25:38', '2018-12-30 04:29:02'),
(58, 's', '<p>s</p>', 's', 'news', 's', '2018-12-30 05:46:45', '2018-12-30 05:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `post_has_images`
--

CREATE TABLE `post_has_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `file_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_has_images`
--

INSERT INTO `post_has_images` (`id`, `post_id`, `file_id`, `created_at`, `updated_at`) VALUES
(1, 32, 1, '2018-11-21 21:34:00', '2018-11-21 21:34:00'),
(2, 33, 2, '2018-11-21 21:34:34', '2018-11-21 21:34:34'),
(3, 34, 3, '2018-11-21 21:34:48', '2018-11-21 21:34:48'),
(4, 44, 4, '2018-11-21 21:42:13', '2018-11-21 21:42:13'),
(5, 45, 5, '2018-11-21 21:42:40', '2018-11-21 21:42:40'),
(6, 47, 6, '2018-11-21 23:48:56', '2018-11-21 23:48:56'),
(7, 48, 7, '2018-11-21 23:50:17', '2018-11-21 23:50:17'),
(8, 49, 8, '2018-11-21 23:52:51', '2018-11-21 23:52:51'),
(9, 50, 9, '2018-11-21 23:53:03', '2018-11-21 23:53:03'),
(10, 51, 10, '2018-11-24 01:34:26', '2018-11-24 01:34:26'),
(11, 37, 11, '2018-11-24 22:26:00', '2018-11-24 22:26:00'),
(12, 46, 39, '2018-12-04 04:18:54', '2018-12-04 04:18:54'),
(13, 53, 48, '2018-12-11 05:44:53', '2018-12-11 05:44:53'),
(14, 54, 49, '2018-12-11 05:54:54', '2018-12-11 05:54:54'),
(15, 36, 50, '2018-12-12 22:54:08', '2018-12-12 22:54:08'),
(16, 55, 51, '2018-12-12 22:56:15', '2018-12-12 22:56:15'),
(17, 56, 52, '2018-12-23 23:25:06', '2018-12-23 23:25:06'),
(18, 57, 53, '2018-12-23 23:25:38', '2018-12-23 23:25:38'),
(19, 58, 56, '2018-12-30 06:15:03', '2018-12-30 06:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `prescription_replies`
--

CREATE TABLE `prescription_replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `replied_by` int(11) NOT NULL,
  `reply_to` int(11) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `counseling_info_id` int(10) UNSIGNED NOT NULL,
  `medicine_name` longtext COLLATE utf8mb4_unicode_ci,
  `medicine_cause` longtext COLLATE utf8mb4_unicode_ci,
  `medicine_routine` longtext COLLATE utf8mb4_unicode_ci,
  `precaution` longtext COLLATE utf8mb4_unicode_ci,
  `diet` longtext COLLATE utf8mb4_unicode_ci,
  `if_dose_missed` longtext COLLATE utf8mb4_unicode_ci,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescription_replies`
--

INSERT INTO `prescription_replies` (`id`, `replied_by`, `reply_to`, `category_id`, `counseling_info_id`, `medicine_name`, `medicine_cause`, `medicine_routine`, `precaution`, `diet`, `if_dose_missed`, `keyword`, `created_at`, `updated_at`) VALUES
(1, 1, 15, 2, 4, 'sfg', 'sdf', 'sfg', 'sfdg', 'sfdg', 'sfdg', 'try', '2018-12-10 04:30:08', '2018-12-10 04:30:08'),
(2, 1, 15, 1, 4, 's', 'df', 'gfdg', 'dfg', 'dfg', 'dfg', 'try', '2018-12-10 22:36:02', '2018-12-10 22:36:02'),
(3, 1, 15, 1, 4, 'asda', 'sadsa', 'sadsa', 'sad', 'sadsa', 'asdas', 'try', '2018-12-30 03:21:28', '2018-12-30 03:21:28'),
(4, 1, 16, 2, 1, 'adfsf', 'fsdfsdf', 'sdf', 'sdf', 'sdf', 'sdf', 'try', '2019-01-03 00:50:11', '2019-01-03 00:50:11'),
(5, 1, 16, 2, 1, 'adfsf', 'fsdfsdf', 'sdf', 'sdf', 'sdf', 'sdf', 'try', '2019-01-03 00:50:27', '2019-01-03 00:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-11-21 21:35:17', '2018-11-21 21:35:17'),
(2, 'patient', '2018-11-21 21:35:26', '2018-11-21 21:35:26'),
(3, 'pharmacist', '2018-11-21 21:35:33', '2018-11-21 21:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_tools`
--

CREATE TABLE `seo_tools` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_tools`
--

INSERT INTO `seo_tools` (`id`, `title`, `description`, `keyword`, `url`, `created_at`, `updated_at`) VALUES
(2, 'News and Articles', 'Pharma srs home desc', 'try', 'news-and-articles', '2018-12-11 23:28:40', '2018-12-12 00:19:15'),
(3, 'Index', 'desc home', 'test', 'index', '2018-12-12 00:16:56', '2018-12-12 00:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `address`, `phone`, `email`, `facebook_link`, `twitter_link`, `instagram_link`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'address', '7777', 'sandhya@view9.com.np', 'www.facebook.com', 'www.twitter.com', 'ssds', 'uploads/111122.jpeg', NULL, '2019-01-02 05:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `is_active`, `remember_token`, `provider`, `provider_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$fdDICJZzUZjE5XFmrSVf5.WgFkFozbDkOKPx5MdSkT.RrhDIZxxNG', 1, 'oMjfNIuh0OhT5IbJf0UNzHIw8ENeGmuoE21j2sVGzqYYqetLG84qCZp91sfC', NULL, NULL, '2018-11-21 21:03:03', '2018-11-21 21:03:03'),
(15, 'hvbn', 'samipstha114@yahoo.com', '34235', '$2y$10$.ZcEWg0C/LuRHEOU5IC.Z.o3YP0UVKbXKHAuuZQwMyy/TXP141ac6', 1, 'AUL0fw5c44HQEQpTb8mE83RMvYTuZfxmx2aIWM9ccVAWL653Jhw0125a4iCF', NULL, NULL, '2018-11-21 23:32:21', '2019-01-03 04:13:50'),
(16, 'Riyasdsd', 'sandhya@view9.com.np', NULL, '$2y$10$2x.c9jtKh1dXHWWnFjN2sODUbBZCJOP6NN0eeum.AQI50MuQbIFA6', 1, 'dH70BzY7P18sbmX3DpmkRRDyTkk61uyxPwjtXDDPVbZ6oZEnjBgxYp9LF0k2', NULL, NULL, '2018-11-22 04:22:55', '2018-12-30 03:54:13'),
(20, 'test', 'ashish1104@yahoo.com', NULL, '$2y$10$cNUw2KkFT4nDZTU6IH/gHOmelsS3Y86njSfYB0Kls6L8/XjZ5oyQS', 1, 'o56VHfgcFiMIDCvmXlk1aoP9AC9vsjt34b9zKu39wlHzIkZaVoe6QQZ5bfRo', NULL, NULL, '2018-11-25 02:21:58', '2018-11-25 02:21:58'),
(21, 'resr', 'pimasstha@gmail.com', NULL, '$2y$10$hV.5FVE6gN5BNZWwGD5WCOpQD508P/561.tD.BWmGkbykaj.pdp3G', 1, NULL, NULL, NULL, '2018-11-26 23:06:10', '2018-11-26 23:06:10'),
(22, 'sdfsdg', 'info@banquetsquad.com', NULL, '$2y$10$7w6tpLeNxUJPPEzPw2qwhO7r9bEM8ShxDnQ3wdDnOA2hXN4UqccF.', 1, NULL, NULL, NULL, '2018-11-26 23:12:47', '2018-11-26 23:12:47'),
(26, 'sdfsdg', 'ryanchenkie@gmail.com', NULL, '$2y$10$h/bWq5x3uaqWtZBYbUOBa.E23MpclgZb7NtcSdZHTP5tVBPWMrkjq', 1, NULL, NULL, NULL, '2018-11-26 23:15:23', '2018-11-26 23:15:23'),
(28, 'sdfsdg', 'ryancs@fdg.com', NULL, '$2y$10$OYuDtrAOhPCyWRNiS8M4zuuM7yeioQy2Lj3SgSwLTz8/3h0RZ5sEm', 1, NULL, NULL, NULL, '2018-11-26 23:16:12', '2018-11-26 23:16:12'),
(30, 'sdfsdg', 'ryancs@fdg.coms', NULL, '$2y$10$tzju2StvPETdNExyawDuYumpk0fOgsRPfNQeKVLaWSy3j3h.p6n/W', 1, NULL, NULL, NULL, '2018-11-26 23:18:01', '2018-11-26 23:18:01'),
(31, 's', 'ryanchessnkie@gmail.com', NULL, '$2y$10$nL/W1SPvQekLS8dImtjme.WgWucSVvcI63uUH3y4K.1fkQiyNYTbu', 1, NULL, NULL, NULL, '2018-11-26 23:20:41', '2018-11-26 23:20:41'),
(32, 'surre', 'res@gmail.com', NULL, '$2y$10$mpb3hZHnRb4/aSOJ/Tsj5um/nTZ0T3/Wk0zuVgrigfqSzTst/ThxS', 1, NULL, NULL, NULL, '2018-11-26 23:29:32', '2018-11-26 23:29:32'),
(46, 'View Rawal', NULL, NULL, NULL, 1, 'RHXoux8VAKtqyiTngYz1S74sv4gwzos8rXi1LOo23uZXhG0IHogWBJMu8eN0', 'facebook', '123472615339333', '2018-12-12 04:52:51', '2018-12-12 04:52:51'),
(47, 'sfsfd', 'adasdfasdfmin@admin.com', NULL, '$2y$10$FMhGwafQVdHPfOnJgV2EpewpXTe0OF/1D6y5ibrA/AVM3rbTQ8QrW', 1, '3m87wepaPnUWMd77lpQj8z36UcMurXZgKAbyahW7G1GRSvRjDXaVAvtqC4ev', NULL, NULL, '2018-12-12 04:53:14', '2018-12-12 04:53:14'),
(51, 'dfsd', 'ddsandhya@view9.com.np', '343', '$2y$10$ggD4Yjq915DXLjD5fettyudqC3QkmhTX6cYSGlRqi8NdVuWc1qGO2', 1, 'yjXcEFs0jhroiZAAmPeW9D33rdj8rEZEhRjJzaPSkSbQImWcDN3bflfULBcD', NULL, NULL, '2018-12-12 05:15:44', '2018-12-12 05:15:44'),
(52, 'hi', 'sdadmin@admin.com', '9843821207', '$2y$10$MXWf5OunmVHCrZmmMREp/umWoYXE4cti4.TuhJYvwS.cDuPRcOHsC', 1, 'awWTpqWJqFFInwa61MzvUmTs3SnczOcO3Kcr8ldMGapwCLD5CJulp4vlro1B', NULL, NULL, '2018-12-18 23:39:55', '2018-12-18 23:39:55'),
(54, 'd', 'addddmin@admin.com', '333', '$2y$10$rhALJiEAZnzPAIOulGlfAe8Ju/051TOd3Y66IpUMyITrfR9YK9QMG', 1, 'tlhr5hVw2JktnOk4J2tmSzb7fApgWRQI51DNH6mtFlI3ucfsDYfjkBNRTWex', NULL, NULL, '2018-12-19 06:02:16', '2018-12-19 06:02:16'),
(60, 'sandhya', 'sf@admin.com', '332321212', '$2y$10$7VaQz30MfZLNovQPvKav1uGIkRkCzDcVwMm.k850E6YP/BUPOO/A2', 1, 'u9PWBpRTwE9pIdLHXYLO8Guby6vWl1yG9zYzd3Zo2dbqxwM5zfAGlxEFCCbm', NULL, NULL, '2018-12-19 23:21:25', '2018-12-19 23:21:25'),
(68, 'asdfdasf', 'adminfdsafd@admin.com', '43434', '$2y$10$eewHBmViPsqY.Y.0wz8q8OmaqWns9EXit08k2SHsBGY8wBzGn34nC', 1, 'oHzD4qo4MG8t6vCbhctsEmWFpZDWJmyWrPhlN2Gp3accJk3oD4Wq8ai3RnFu', NULL, NULL, '2018-12-19 23:43:14', '2018-12-19 23:43:14'),
(71, 'sas', 'sfsdfsdf@admin.com', '3', '$2y$10$cR1BSkfQWspabSMMysdRfeOeN4tJAy9PQiMJVzGLr8pQ2kExKSwWC', 1, 'nQgp3dAxv0zqTwdEE54fAqtG3VGZuFS8vEw9T6viwwhKePxz3VusbjnDsfeY', NULL, NULL, '2018-12-19 23:50:09', '2018-12-19 23:50:09'),
(72, 'dsd', 'ssssss@admin.s', '2', '$2y$10$bJHTCluIUnmVfwp0po5PweuYMD7ePOhbp0A94fp8fYROmXHpVwVnW', 1, 'XnlLlhsKTurYUNWzg4yGoSDNE7PEIgzTHafiKBjvRdHScGvgsVBBJdk5Ve9G', NULL, NULL, '2018-12-19 23:51:05', '2018-12-19 23:51:05'),
(77, 'a', 'a@admin.com', '5', '$2y$10$ZvPnH0SOoSPkasWgzLOJd.y4dexSdDmYI5C9YKnjzGb.bVQI4/.DO', 1, 'GlxHWLJs5yC7HMK6GHqumjGl9AGyonbFGzVnYmdoXpuSZsSH0HLCFNM9LiPP', NULL, NULL, '2018-12-19 23:58:31', '2018-12-19 23:58:31'),
(78, 'sandhya', 'admin1@admin.com', NULL, '$2y$10$YyG30jkoRrHdXY9/f92Pwu6VoknVeCxNyxqGYCcuUyddba/g4hN5W', 1, '0rCbMtFnUcWnUIGVYopUlaeFggVJoGwn9rZV1wPpR847hrLoxMjaRlhKn7M8', NULL, NULL, '2018-12-20 00:01:33', '2018-12-20 00:01:33'),
(80, 'asdf', 'samipstha114@yahoo.comsdfd', '342354', '$2y$10$ZLP0oJjSpWMq0xkWCIMxjO94shPZX6bDbwi.gOR.JHp8Usz3Hz7BG', 1, 'dOA6LbQHE0fHuz24WnGVuH91HatxbyUJdumZSerKw50Z8g9YlHTD7aimJ6up', NULL, NULL, '2018-12-30 04:12:45', '2018-12-30 04:12:45'),
(82, 'dsf', 'sandhyasdf@sdfview9.com.npwer', 'sdf', '$2y$10$EPgXumTH/CQuTmuYm0L2m.3c/XZxmTZeT2xmH.pwzfu4d6Wkzqxpi', 1, 'glppkmzIyRrXzZ37MMlpJw00nIvm4T8qBMe8b8VJQXuB3bUTlULuHswvXnTh', NULL, NULL, '2018-12-30 04:39:37', '2018-12-30 04:39:37'),
(83, 'dfdf', 'dfdfdfdf@fdgdfg', 'dfgdg', '$2y$10$296H6ALtXrg/k.7jwbX67OYPAd9Oi9TL916na1NguGOibRSfiL6pq', 1, 'Z3RppNZJ1IIkHG0Gx1kQMjY63z1zkUUvjnOKuwtu5Q7HUWSk5LufDnhmHBJU', NULL, NULL, '2018-12-30 04:40:33', '2018-12-30 04:40:33'),
(84, 'saa', 'sadf@yahoo.comdfs', '23432', '$2y$10$mYXHwDBGOnvBgnUv9j9lluP6YhMQBYjvAJQtTh5T7bdcLzyU/k5e2', 1, 'PaHQBnda4fNRgl4WQoxQrxmI1xPzwWzI8uMFdZrQ9D9vVH5OAK5YgHvyTi0p', NULL, NULL, '2018-12-30 04:43:22', '2018-12-30 04:43:22'),
(85, 'asdf', 'sandhya@view9.com.npdf', '3234', '$2y$10$zc0RXpbCCv.kWzni9MCm1.Gt3pOPPz6PBdqMeFJzcEIl/cjU/REG.', 1, 'QTwrMKyneQCcY4O7j5e5uDOCtvRDvecagwkKvri8Kof7SVox4wQd45dGp6n5', NULL, NULL, '2019-01-02 02:35:29', '2019-01-02 02:35:29'),
(86, 'asdfsd', 'fsadf@dfdf', 'df3435', '$2y$10$OpLW9VfVEXOflAi.toJ3zODwsv5UHACGhUOwW6JrEWdZ.5dLkYb4a', 1, 'c7dUYEoNjDkfneTqdnYIPyxBRjUtopCSb5kTqpkL8lspXzbo7nfZn2a184vP', NULL, NULL, '2019-01-02 03:13:53', '2019-01-02 03:13:53'),
(87, 'sd', 'sandhya@view9.com.np44', '345345345', '$2y$10$skT3GEhZSacvD6pD8oL9Quq/vKXuxmN0KXTZ7fmhdEv7YzL.h0Aim', 1, 'aahHilV3xxiXtEnnrCxcELxcQ8uowQvgM0zC3WSHDiPWw3OPaC9t7XtRtiPq', NULL, NULL, '2019-01-02 23:02:54', '2019-01-02 23:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_permissions`
--

CREATE TABLE `user_has_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_has_roles`
--

CREATE TABLE `user_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_has_roles`
--

INSERT INTO `user_has_roles` (`role_id`, `user_id`) VALUES
(1, 1),
(2, 15),
(2, 46),
(2, 47),
(2, 80),
(3, 16),
(3, 20),
(3, 21),
(3, 22),
(3, 26),
(3, 28),
(3, 30),
(3, 31),
(3, 32),
(3, 51),
(3, 52),
(3, 54),
(3, 60),
(3, 68),
(3, 71),
(3, 72),
(3, 77),
(3, 82),
(3, 83),
(3, 84),
(3, 85),
(3, 86),
(3, 87);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_departments`
--
ALTER TABLE `category_departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_departments_slug_unique` (`slug`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counseling_infos`
--
ALTER TABLE `counseling_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `counseling_infos_user_id_foreign` (`user_id`),
  ADD KEY `counseling_infos_category_department_id_foreign` (`category_department_id`),
  ADD KEY `counseling_infos_pharmacist_id_foreign` (`pharmacist_id`);

--
-- Indexes for table `counseling_info_has_images`
--
ALTER TABLE `counseling_info_has_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `counseling_info_has_images_counseling_info_id_foreign` (`counseling_info_id`),
  ADD KEY `counseling_info_has_images_file_id_foreign` (`file_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_lists`
--
ALTER TABLE `package_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patient_users`
--
ALTER TABLE `patient_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `pharmacist_users`
--
ALTER TABLE `pharmacist_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pharmacist_users_nmc_number_unique` (`nmc_number`),
  ADD KEY `pharmacist_users_user_id_foreign` (`user_id`),
  ADD KEY `pharmacist_users_category_department_id_foreign` (`category_department_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `post_has_images`
--
ALTER TABLE `post_has_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_has_images_post_id_foreign` (`post_id`),
  ADD KEY `post_has_images_file_id_foreign` (`file_id`);

--
-- Indexes for table `prescription_replies`
--
ALTER TABLE `prescription_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prescription_replies_category_id_foreign` (`category_id`),
  ADD KEY `prescription_replies_counseling_info_id_foreign` (`counseling_info_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `seo_tools`
--
ALTER TABLE `seo_tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `user_has_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `user_has_roles_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_departments`
--
ALTER TABLE `category_departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `counseling_infos`
--
ALTER TABLE `counseling_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `counseling_info_has_images`
--
ALTER TABLE `counseling_info_has_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `package_lists`
--
ALTER TABLE `package_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient_users`
--
ALTER TABLE `patient_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pharmacist_users`
--
ALTER TABLE `pharmacist_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `post_has_images`
--
ALTER TABLE `post_has_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `prescription_replies`
--
ALTER TABLE `prescription_replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `seo_tools`
--
ALTER TABLE `seo_tools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `counseling_infos`
--
ALTER TABLE `counseling_infos`
  ADD CONSTRAINT `counseling_infos_category_department_id_foreign` FOREIGN KEY (`category_department_id`) REFERENCES `category_departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `counseling_infos_pharmacist_id_foreign` FOREIGN KEY (`pharmacist_id`) REFERENCES `pharmacist_users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `counseling_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `counseling_info_has_images`
--
ALTER TABLE `counseling_info_has_images`
  ADD CONSTRAINT `counseling_info_has_images_counseling_info_id_foreign` FOREIGN KEY (`counseling_info_id`) REFERENCES `counseling_infos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `counseling_info_has_images_file_id_foreign` FOREIGN KEY (`file_id`) REFERENCES `images` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patient_users`
--
ALTER TABLE `patient_users`
  ADD CONSTRAINT `patient_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pharmacist_users`
--
ALTER TABLE `pharmacist_users`
  ADD CONSTRAINT `pharmacist_users_category_department_id_foreign` FOREIGN KEY (`category_department_id`) REFERENCES `category_departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pharmacist_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_has_images`
--
ALTER TABLE `post_has_images`
  ADD CONSTRAINT `post_has_images_file_id_foreign` FOREIGN KEY (`file_id`) REFERENCES `images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_has_images_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prescription_replies`
--
ALTER TABLE `prescription_replies`
  ADD CONSTRAINT `prescription_replies_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `prescription_replies_counseling_info_id_foreign` FOREIGN KEY (`counseling_info_id`) REFERENCES `counseling_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD CONSTRAINT `user_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD CONSTRAINT `user_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
