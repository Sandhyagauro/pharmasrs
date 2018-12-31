-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 31, 2018 at 01:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmasrs`
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
(1, 'General Consultation', NULL, 'uploads/851332.jpg', 'a', '2018-11-21 21:34:14', '2018-12-30 10:34:37'),
(2, 'Child Health Consultation', NULL, 'uploads/830021.jpg', 'child-health-consultation', '2018-11-21 22:50:28', '2018-12-30 10:34:47'),
(3, 'Sugar,Thyroid,Heart Consultation', NULL, 'uploads/433003.jpg', 'sugar-thyroid-heart-consultation', '2018-11-21 23:50:59', '2018-12-30 10:34:56');

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
(2, 'sadf', 'sf', '4545', 'sandhya@view9.com.np', 'sadf', '2018-12-12 08:44:29', '2018-12-12 08:44:29'),
(3, 'sa', 'satdobato', '410', 'sandhya@view9.com.np', 'dsfaf', '2018-12-24 10:22:29', '2018-12-24 10:22:29'),
(4, 'sandhya', 'satdobato', '410', 'sandhya@view9.com.np', 'sadf', '2018-12-25 03:45:43', '2018-12-25 03:45:43'),
(5, 'deepak', 'balkot', '984197970', 'deepk0348@gmail.com', 'hello', '2018-12-25 03:46:30', '2018-12-25 03:46:30'),
(6, 'sandhya', 'satdobato', '345345', 'sandhya@view9.com.np', 'adfdfgdfg', '2018-12-25 05:09:41', '2018-12-25 05:09:41'),
(7, 'ram prasad devkota', 'bhaktapue', '3334', 'deepk0348@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer \r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer', '2018-12-25 05:10:20', '2018-12-25 05:10:20'),
(8, 'ram prasad devkota', 'bhaktapue', '233', 'deepk0348@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer \r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer', '2018-12-25 05:16:06', '2018-12-25 05:16:06'),
(9, 'sandhya', 'satdobato', '84512', 'sandhya@view9.com.np', 'sdfdsf', '2018-12-25 05:17:08', '2018-12-25 05:17:08'),
(10, 'deepak', 'balkot', '45563', 'deepak@view9.com.np', 'Message  with email try2amrit@yahoo.com has registered as an Applicant in', '2018-12-25 06:53:56', '2018-12-25 06:53:56'),
(11, 'xa', 'asdf', '223432', 'sandhya@view9.com.np', 'fds', '2018-12-25 07:25:05', '2018-12-25 07:25:05'),
(12, 'sandhya', 'satdobato', '9843821209', 'sandhya@view9.com.np', 'ssdf', '2018-12-25 07:27:48', '2018-12-25 07:27:48'),
(13, 'Samip Shrestha', 'kathmandu', '9845665423', 'samip@view9.com.np', 'Hello', '2018-12-30 07:33:48', '2018-12-30 07:33:48'),
(14, 'Samip Shrestha', 'Sankhamul', '9814555315', 'samipstha87465486@gmail.com', 'Hello', '2018-12-30 07:34:30', '2018-12-30 07:34:30'),
(15, 'Samip Shrestha', 'Sankhamul', '9814555315', 'samipstha87465486@gmail.com', 'Hello', '2018-12-30 07:34:30', '2018-12-30 07:34:30'),
(16, 'Samip Shrestha', 'Sankhamul', '9814555315', 'samipstha87465486@gmail.com', 'Hello', '2018-12-30 07:34:30', '2018-12-30 07:34:30'),
(17, 'Samip Shrestha', 'Sankhamul', '9814555315', 'samipstha87465486@gmail.com', 'Hello', '2018-12-30 07:34:30', '2018-12-30 07:34:30'),
(18, 'Samip Shrestha', 'Sankhamul', '9814555315', 'samipstha87465486@gmail.com', 'Hello', '2018-12-30 07:34:30', '2018-12-30 07:34:30'),
(19, 'Samip Shrestha', 'Sankhamul', '9814555315', 'samipstha87465486@gmail.com', 'Hello', '2018-12-30 07:34:31', '2018-12-30 07:34:31'),
(20, 'Samip Shrestha', 'Sankhamul', '9814555315', 'samipstha87465486@gmail.com', 'Hello', '2018-12-30 07:34:31', '2018-12-30 07:34:31'),
(21, 'Samip Shrestha', 'Sankhamul', '9814555315', 'samipstha87465486@gmail.com', 'Hello', '2018-12-30 07:34:31', '2018-12-30 07:34:31'),
(22, 'Samip Shrestha', 'Sankhamul', '9814555315', 'samipstha87465486@gmail.com', 'Hello', '2018-12-30 07:34:31', '2018-12-30 07:34:31'),
(23, 'Samip Shrestha', 'Sankhamul', '9814555315', 'samipstha87465486@gmail.com', 'Hello', '2018-12-30 07:34:31', '2018-12-30 07:34:31'),
(24, 'Samip Shrestha', 'Sankhamul', '9814555315', 'samipstha87465486@gmail.com', 'Hello', '2018-12-30 07:34:32', '2018-12-30 07:34:32'),
(25, 'Samip Shrestha', 'Sankhamul', '9814555315', 'samipstha87465486@gmail.com', 'Hello', '2018-12-30 07:34:33', '2018-12-30 07:34:33'),
(26, 'Samip Shrestha', 'Sankhamul', '9814555315', 'samipstha87465486@gmail.com', 'Hello', '2018-12-30 07:34:34', '2018-12-30 07:34:34'),
(27, 'prakriti shrestha', 'Sankhamul', '9849497542', 'prakriti.rawal@view9.com.np', 'test', '2018-12-30 09:26:23', '2018-12-30 09:26:23');

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
  `prescription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counseling_infos`
--

INSERT INTO `counseling_infos` (`id`, `user_id`, `category_department_id`, `pharmacist_id`, `package_id`, `package_amount`, `package_duration`, `patient`, `patient_name`, `patient_age`, `patient_gender`, `patient_relation`, `current_symptoms`, `medical_history`, `patient_query`, `prescription`, `created_at`, `updated_at`) VALUES
(1, 16, 2, 1, 1, 33, '1 week', 'self', NULL, NULL, NULL, NULL, 'test', 'test', 'test', NULL, '2018-11-22 05:23:01', '2018-11-22 05:23:01'),
(2, 16, 2, 1, 1, 33, '1 week', 'self', NULL, NULL, NULL, NULL, 'test', 'test', 'test', NULL, '2018-11-22 05:25:22', '2018-11-22 05:25:22'),
(3, 16, 2, 1, 1, 33, '1 week', 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-22 06:08:28', '2018-11-22 06:08:28'),
(24, 40, 3, NULL, NULL, NULL, '', 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-31 03:55:31', '2018-12-31 03:55:31'),
(25, 40, 3, NULL, NULL, NULL, '', 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-31 03:55:49', '2018-12-31 03:55:49'),
(26, 40, 3, NULL, NULL, NULL, '', 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-31 03:57:58', '2018-12-31 03:57:58'),
(27, 40, 3, NULL, NULL, NULL, '', 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-31 04:10:31', '2018-12-31 04:10:31'),
(28, 41, 3, NULL, NULL, NULL, '', 'self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-31 04:31:09', '2018-12-31 04:31:09'),
(29, 41, 3, NULL, NULL, NULL, '', 'self', NULL, NULL, NULL, NULL, NULL, NULL, 'fgkjl;gtjlkrgblk', NULL, '2018-12-31 04:41:51', '2018-12-31 04:41:51'),
(30, 41, 3, NULL, NULL, NULL, '', 'self', NULL, NULL, NULL, NULL, NULL, NULL, 'this is my query', NULL, '2018-12-31 04:50:18', '2018-12-31 04:50:18'),
(31, 41, 3, NULL, NULL, NULL, '', 'self', NULL, NULL, NULL, NULL, NULL, NULL, 'yhutdyj', NULL, '2018-12-31 04:53:38', '2018-12-31 04:53:38'),
(32, 41, 3, NULL, NULL, NULL, '', 'self', NULL, NULL, NULL, NULL, NULL, NULL, 'fgtrth', NULL, '2018-12-31 04:54:20', '2018-12-31 04:54:20'),
(33, 41, 3, NULL, NULL, NULL, '', 'self', NULL, NULL, NULL, NULL, NULL, NULL, 'hrsrthy', NULL, '2018-12-31 04:54:32', '2018-12-31 04:54:32'),
(34, 41, 3, NULL, NULL, NULL, '', 'self', NULL, NULL, NULL, NULL, NULL, NULL, 'fsghnf', NULL, '2018-12-31 04:55:02', '2018-12-31 04:55:02');

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
(1, 'uploads/218466.jpg', '2018-11-21 21:34:00', '2018-12-30 10:20:11'),
(2, 'uploads/716756.jpg', '2018-11-21 21:34:34', '2018-11-21 21:34:34'),
(3, 'uploads/674211.PNG', '2018-11-21 21:34:48', '2018-12-30 09:17:21'),
(4, 'uploads/704901.jpg', '2018-11-21 21:42:12', '2018-12-30 10:29:22'),
(5, 'uploads/204544.jpg', '2018-11-21 21:42:40', '2018-12-30 10:27:10'),
(6, 'uploads/425864.jpg', '2018-11-21 23:48:56', '2018-11-28 09:16:17'),
(7, 'uploads/280892.jpg', '2018-11-21 23:50:17', '2018-12-30 10:19:15'),
(8, 'uploads/550044.PNG', '2018-11-21 23:52:51', '2018-12-30 09:14:55'),
(9, 'uploads/745783.PNG', '2018-11-21 23:53:03', '2018-12-30 09:03:47'),
(10, 'uploads/468846.png', '2018-11-24 01:34:26', '2018-11-24 01:34:26'),
(11, 'uploads/458842.jpg', '2018-11-24 22:26:00', '2018-12-30 10:30:51'),
(12, 'uploads/24139.jpg', '2018-11-28 09:09:57', '2018-12-30 10:18:01'),
(13, 'uploads/266419.jpg', '2018-11-28 09:15:23', '2018-12-30 08:51:25'),
(14, 'uploads/904968.png', '2018-11-28 09:19:13', '2018-12-30 08:47:30'),
(15, 'uploads/267471.jpg', '2018-11-28 09:26:28', '2018-12-30 10:15:57'),
(16, 'uploads/389047.jpg', '2018-12-04 11:04:35', '2018-12-04 11:04:35'),
(17, 'uploads/55463.jpg', '2018-12-04 11:04:35', '2018-12-04 11:04:35'),
(18, 'uploads/934676.jpg', '2018-12-05 09:21:08', '2018-12-05 09:21:08'),
(19, 'uploads/29029.jpg', '2018-12-05 09:22:34', '2018-12-05 09:22:34'),
(20, 'uploads/239459.jpg', '2018-12-05 09:23:02', '2018-12-05 09:23:02'),
(21, 'uploads/25994.jpeg', '2018-12-09 05:22:03', '2018-12-09 05:22:03'),
(22, 'uploads/535786.jpg', '2018-12-09 05:22:05', '2018-12-09 05:22:05'),
(23, 'uploads/107849.jpg', '2018-12-13 03:34:37', '2018-12-30 10:25:17'),
(24, 'uploads/846972.jpg', '2018-12-13 03:43:24', '2018-12-30 10:24:59'),
(25, 'uploads/366460.jpg', '2018-12-13 04:36:39', '2018-12-13 04:36:39'),
(26, 'uploads/882549.jpg', '2018-12-13 04:36:43', '2018-12-13 04:36:43'),
(27, 'uploads/311419.jpg', '2018-12-30 08:20:13', '2018-12-30 08:20:13'),
(28, 'uploads/541453.pdf', '2018-12-30 08:20:51', '2018-12-30 08:20:51'),
(29, 'uploads/348255.JPEG', '2018-12-30 08:21:14', '2018-12-30 08:21:14'),
(30, 'uploads/345246.jpg', '2018-12-30 08:21:36', '2018-12-30 08:21:36'),
(31, 'uploads/618436.docx', '2018-12-30 08:29:31', '2018-12-30 08:29:31'),
(32, 'uploads/204312.pdf', '2018-12-30 08:29:43', '2018-12-30 08:29:43'),
(33, 'uploads/23961.docx', '2018-12-30 09:25:24', '2018-12-30 09:25:24'),
(34, 'uploads/733005.png', '2018-12-31 05:20:14', '2018-12-31 05:20:14'),
(35, 'uploads/866649.jpg', '2018-12-31 06:00:02', '2018-12-31 06:00:29');

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
(2, 'ABOUT US', 'aboutus', 2, 0, NULL, 1, '2018-11-21 21:13:47', '2018-12-18 10:36:10'),
(3, 'CONTACT US', 'contactus', 3, 0, NULL, 1, '2018-11-21 21:38:19', '2018-11-21 22:46:49'),
(4, 'NEWS AND ARTICLES', 'news-and-articles', 1, 0, NULL, 1, '2018-11-21 21:38:47', '2018-12-18 10:36:10'),
(5, 'Prescriptions', 'prescription-categories', 4, 0, NULL, 1, '2018-11-21 21:39:03', '2018-12-05 09:17:57');

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
(37, '2018_12_04_045834_create_counseling_info_has_images_table', 15),
(38, '2018_12_06_101006_create_prescription_replies_table', 16),
(39, '2018_12_12_045153_create_seo_tools_table', 17),
(40, '2018_12_31_085457_add_column_pharmacist_user_table', 18);

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
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` double(10,2) DEFAULT NULL,
  `feet` int(11) DEFAULT NULL,
  `inches` int(11) DEFAULT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_users`
--

INSERT INTO `patient_users` (`id`, `user_id`, `name`, `email`, `country`, `phone`, `address`, `dob`, `gender`, `weight`, `feet`, `inches`, `blood_group`, `image`, `created_at`, `updated_at`) VALUES
(2, 15, 'atesat', 'samipstha114@yahoo.com', 'Nepal', '34235', 'as', '2018-11-28', 'male', 33.00, 4, 4, 'b+', 'uploads/290745.jpg', '2018-11-21 23:32:21', '2018-11-28 10:28:02'),
(3, 23, 'aaa', 'sasd@view9.com.np', NULL, '3333333333', 'satdobato', NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/735637.jpg', '2018-12-12 08:47:54', '2018-12-12 08:47:54'),
(4, 24, 'prakriti shrestha', 'prakriti.rawal@view9.com.np', NULL, '9849497542', 'Sankhamul', NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/955733.jpg', '2018-12-12 08:48:48', '2018-12-12 08:50:12'),
(5, 26, 'prakriti shrestha', 'prakriti@view9.com.np', NULL, NULL, 'Sankhamul', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-30 06:36:41', '2018-12-30 06:36:41'),
(6, 28, 'Ram Stha', 'samip@view9.com.np', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-30 07:19:32', '2018-12-30 07:19:32'),
(7, 29, 'Ram Stha', 'samipstha114@gmail.com', NULL, '9803350436', 'Kathmandu', NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/43543.jpg', '2018-12-30 07:22:26', '2018-12-30 07:22:26'),
(8, 31, 'samip', 'samip@view9.com.npewq', NULL, '98454', 'sadas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-30 07:43:24', '2018-12-30 07:43:24'),
(9, 32, 'Samip Stha', 'pimasstha@gmail.com', 'Nepal', '9845665456', 'Kathmandu', '2055-11-04', NULL, NULL, NULL, NULL, NULL, 'uploads/488399.jpg', '2018-12-30 07:48:33', '2018-12-31 05:28:35'),
(10, 35, 'Ram Bahadur', 'ram.bahdu@gmail.com', NULL, '9841123321', 'ktm', NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/631573.jpg', '2018-12-30 15:04:02', '2018-12-30 15:04:02'),
(11, 40, 'admin', 'admin@user.com', NULL, '8974561132', 'nepal', NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/154288.jpg', '2018-12-31 03:49:23', '2018-12-31 03:49:23'),
(12, 41, 'Dinesh', 'admin@email.com', NULL, '987546413', 'nepal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-31 04:30:52', '2018-12-31 04:30:52'),
(13, 46, 'Samip Stha', 'ram@gmail.com', NULL, '98413365454', 'Jawalakhel', NULL, NULL, NULL, NULL, NULL, 'o+', 'uploads/714256.jpg', '2018-12-31 05:24:46', '2018-12-31 05:33:02');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `license_front` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship_front` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pharmacist_users`
--

INSERT INTO `pharmacist_users` (`id`, `user_id`, `category_department_id`, `name`, `nmc_number`, `qualification`, `speciality`, `website`, `shop_name`, `shop_address`, `shop_number`, `specialization`, `experience`, `education`, `journals`, `awards`, `memberships`, `image`, `created_at`, `updated_at`, `license_front`, `citizenship_front`) VALUES
(1, 16, 1, 'Test sandhya', '78545', 'bachelor', 'neurologist', 'http://mailsnepal.com/', 'sandhya', 'satdobato', '44', 'hbansdf', '512', 'hjknm', 'nm', 'sdgf', 'm', 'uploads/851332.jpg', '2018-11-22 04:22:55', '2018-11-22 04:22:55', '', ''),
(2, 20, 3, 'test', '11', 'bachelor', 'Pediatrics', 'http://mailsnepal.com/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-25 02:21:58', '2018-11-25 02:21:58', '', ''),
(3, 39, NULL, 'Dinesh', '124', 'bacholer', '', '', 'bir', 'nepal', '', '', '', 'nepal', '', '', '', 'uploads/pharmacist/profileimage/original/16700.jpg', '2018-12-31 03:30:15', '2018-12-31 03:30:15', 'uploads/pharmacist/licenseimage/original/16700.jpg', 'uploads/pharmacist/citizenshipimage/original/16700.jpg'),
(4, 44, NULL, 'fjgekgf', 'hjhlv54', 'jgjglk', '', '', 'bir', 'view9', '', '', '', 'tu', '', '', '', '', '2018-12-31 05:10:00', '2018-12-31 05:10:00', '', ''),
(5, 45, NULL, 'Dinesh', 'fref', 'bacholer', '', '', NULL, 'view9', '', '', '', 'rf', '', '', '', 'uploads/pharmacist/profileimage/original/585241-636338115398892064-16x9.jpg', '2018-12-31 05:14:14', '2018-12-31 05:14:14', 'uploads/pharmacist/licenseimage/original/16700.jpg', 'uploads/pharmacist/citizenshipimage/original/16700.jpg');

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
(32, 'Mr.Nishchhal Joshi', '<p>Mr.Joshi is a Co-founder of meropharmacist.com. He graduated with degree in Bachelor of Pharmacy from Kathmandu University and is registered as a pharmacist in Nepal Pharmacy Council. He has years of experience in business management and development in a reputed pharmaceutical company of Nepal. He has been continuously involved in introducing and disseminating the information on several new molecules introduced for the first time in Nepal. Besides, he also has a experience of making several documentaries on medicine related topics with the reputed doctors in the country.</p>', 'NPC regd. No :', 'team', 'test-team', '2018-11-21 21:34:00', '2018-12-30 10:20:30'),
(34, 'Hyper-uricemia also known as Uric Acid', '<p>Uric acid is not unheard off among us Nepalese, as one among our family might have been diagnosed for it. But what does the uric acid refers to? Well it defines itself, &ldquo;uric acid&rdquo; which refers to accumulation of uric acid crystals in our joints causing swelling and unbearable pain. Due to high accumulation of uric acid in our body it is also known as hyper-uricemia. Disease is prone to affect male populous than female, but female after menopause should be careful as well.</p>\r\n\r\n<p><strong>How does one suffer from uric acid?</strong></p>\r\n\r\n<p>Generally, uric acid is eliminated by kidney through urine. But high intake of purine (which is converted to uric acid by our body) rich food causes accumulation of the uric acid which then is converted to uric acid crystals. Decline of kidney function with age and kidney ailments also lead to uric acid.</p>\r\n\r\n<p>Alcohol consumption interferes with uric acid clearance from body leading to uric acid symptoms. As well as the weight is also a determinant factor, high body mass refers to high production of uric acid as bodily waste and body fat are known to amplify inflammation (swelling and pain).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What are the symptoms to look out for?</strong></p>\r\n\r\n<p>Symptoms that one should consider are;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Intense pain, redness and swelling of joint that last for 12 to 24 hour.</p>\r\n	</li>\r\n	<li>\r\n	<p>Joint pain will last for days and spread to other joints as well.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tenderness is heightened even a blanket touching the skin over the affected joint is unbearable.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What Should I do if I have above mentioned symptoms? </strong></p>\r\n\r\n<p>If you have the symptoms foremost thing to do is make an appointment with your physician. He/ She will conduct diagnostic test on you body, typically using blood samples. Once the physician has established that you are suffering from uric acid he/she will prescribe you medicine. Medicine will be to lessen the inflammation or to reduce the accumulation of uric acid in your body either by eliminating uric acid or by preventing formation of uric acid crystals.</p>\r\n\r\n<p>Additionally you can do following to prevent the uric acid attack;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Decrease intake of high purine rich food like kidney, liver, mushroom, seafood, asparagus (kurelo).</p>\r\n	</li>\r\n	<li>\r\n	<p>Maintain adequate water intake.</p>\r\n	</li>\r\n	<li>\r\n	<p>Decrease or totally prohibit alcohol consumption.</p>\r\n	</li>\r\n	<li>\r\n	<p>Reduce body weight.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>I can endure pain so can I not take the medicine and follow preventive measure?</p>\r\n\r\n<p>The answer is a big no because if uric acid is not controlled then it can lead to formation of kidney stone , kidney failure and arthritic attack known as gout. So it is advisable to reduce the uric acid which is done by consultation with your physician, locally available pharmacist and active participation from your side as well.</p>', NULL, 'news', 'fsdfdf', '2018-11-21 21:34:48', '2018-12-30 09:17:21'),
(35, 'Clinic Departments', NULL, NULL, 'post', 'clinic-departments', '2018-11-21 21:37:03', '2018-12-30 10:30:31'),
(36, 'About MeroPharmacist', '<p>Our vision is to become the nation&rsquo;s most trusted companion for getting the drug counseling by bringing about the paradigm shift in medicine counseling and create a nation where each and every patient takes their medicine after knowing the information on it.</p>\r\n\r\n<p>Meropharmacist.com is the first of its kind to provide the counseling to the patients on the medicines they are taking. Lack of awareness regarding medicine use is a serious problem in Nepal, with almost every Nepali lacking the right information about &lsquo;what and how&rsquo; on their medicines. Time and again, this has resulted on serious medicine related concerns like drug overuse, misuse , adverse drug reactions and lack of patient compliance.</p>\r\n\r\n<p>We strive to be a trusted and leading health information service provider in the nation,putting people at the heart of everything we do. With more than fifty percent of the country people already having the access to internet, meropharmacist &nbsp;provides the online and easy to understand information on topics at one needs to know about their medicines on just within few clicks or few touches on your mobile screen.</p>\r\n\r\n<p>So, if you don&rsquo;t know about your medicine, know that meropharmacist is there for you ! Snap your prescription and send it to meropharmacist.com or message to meropharmacist.com on facebook, we will respond you with most easy to understand information and counseling on the medicine you are taking.</p>\r\n\r\n<p>Taking medicine is not enough &hellip; Know your medicine first !</p>\r\n\r\n<p>9845265550</p>', 'Meropharmacist” know your medicine”', 'post', 'about-pharma-srs', '2018-11-21 21:37:28', '2018-12-30 10:25:17'),
(37, 'ABOUT US', NULL, NULL, 'post', 'about-us', '2018-11-21 21:40:13', '2018-12-30 10:52:01'),
(38, 'about apharma srs', NULL, NULL, 'post', 'about-apharma-srs', '2018-11-21 21:40:33', '2018-12-30 10:31:06'),
(39, 'Happy Customers', NULL, '500', 'post', 'happy-customers', '2018-11-21 21:40:49', '2018-11-24 22:28:11'),
(40, 'Available Pharmacist', NULL, NULL, 'post', 'available-pharmacist', '2018-11-21 21:41:09', '2018-12-30 10:30:12'),
(41, 'Available Pharmacist', NULL, NULL, 'post', 'available-pharmacist-1', '2018-11-21 21:41:26', '2018-12-30 10:29:59'),
(42, 'Development Hours', NULL, NULL, 'post', 'development-hours', '2018-11-21 21:41:37', '2018-12-30 10:29:48'),
(43, 'Answered Tickets', NULL, NULL, 'post', 'answered-tickets', '2018-11-21 21:41:49', '2018-12-30 10:29:35'),
(44, 'News & Articles', NULL, NULL, 'post', 'news-and-articles', '2018-11-21 21:42:12', '2018-12-30 10:29:22'),
(45, 'Contact Us', NULL, NULL, 'post', 'contact-us', '2018-11-21 21:42:40', '2018-12-30 10:27:10'),
(46, 'Consult Online', NULL, NULL, 'post', 'consult-online', '2018-11-21 21:42:59', '2018-12-30 10:27:35'),
(48, 'Mr. Ripesh Bhujel', '<p>Mr. Ripesh is Co-founder of meropharmacist.com. He graduated with degree in Bachelor of Pharmacy from Kathmandu University and is registered as a pharmacist in Nepal Pharmacy Council. He was a Public Relation officer for departmental club of pharmacy &ldquo;Forum for Pharmacy&rdquo;. He has years of experiences in drug counseling, and drug research &amp; formulation. Moreover he has actively participated in &ldquo;Community Education Project&rdquo; at Manthali, Ramechhap</p>', 'NPC regd. No : G2195', 'team', 'test55', '2018-11-21 23:50:01', '2018-12-30 10:19:15'),
(49, 'Loperamide and its use in diarrheal cases', '<p>Loperamide is taken as fast relief from diarrheal cases but it should not be confused as a medicine to resupply the body with the minerals and water (electrolytes) lost during diarrhea, for that one should supplement the Loperamide with water or ORS (Oral rehydration Systems; might be home made or branded Jeevan Jal).</p>\r\n\r\n<p><strong>So what is it? </strong></p>\r\n\r\n<ul>\r\n	<li>Well, it is a medicine which will slow down your Gastro Intestinal (GI) motility causing delayed defecation. Additionally drug will reduce fecal volume, increases the viscosity and reduces the further loss of electrolytes.</li>\r\n</ul>\r\n\r\n<p><strong>How much to take? </strong></p>\r\n\r\n<ul>\r\n	<li>You as an adult can take 4mg of the medicine initially, which is generally two capsules or tablets as the medicine generally is present in 2mg formulation (capsule or tablet); followed by 2mg (1 Tablet or capsule) after each loose stool for maximum upto 5 days. But you should be aware not to take more than 16mg of loperamide in a day.&nbsp;</li>\r\n	<li>Treatment in children is generally not recommended but you can administer children of 4-8 years 1mg 3 or 4 times daily for up to 3 days and for children 9-12 years: 2mg 4 times daily for up to 5 days.</li>\r\n	<li>Children below 4 years should not be given loperamide as safety and efficacy of drug has not been established for children below 4 years of age.</li>\r\n	<li>Safe use of drug during has not been established so the pregnant women should not be administered with the drug.</li>\r\n</ul>\r\n\r\n<p><strong>How to take? </strong></p>\r\n\r\n<p>Do not break the capsule or tablet; take as a whole with a glass of water before or after meal.</p>\r\n\r\n<p><strong>What to look out for? </strong></p>\r\n\r\n<p>Loperamide and its use in diarrheal cases</p>\r\n\r\n<ul>\r\n	<li>Nausea and vomiting</li>\r\n</ul>\r\n\r\n<p>But it does not necessarily mean that you may feel the above mentioned side effects.</p>\r\n\r\n<p>If you have any queries in the drug use it is best advised to contact your locally available pharmacist or other health professionals.</p>\r\n\r\n<ul>\r\n	<li>Abdominal Pain</li>\r\n	<li>Distension (abdominal discomfort)</li>\r\n	<li>Constipation</li>\r\n	<li>Dizziness</li>\r\n	<li>Dry mouth</li>\r\n</ul>', NULL, 'news', 'test', '2018-11-21 23:52:51', '2018-12-30 09:14:55'),
(50, 'MEFENAMIC ACID AND ITS USE IN DYSMENORRHOEA', '<p><strong>USES</strong></p>\r\n\r\n<p><strong>➢ </strong>Mefenamic acid is the first choice of drug for the treatment of dysmenorrhoea and menorrhagia in context of Nepal.</p>\r\n\r\n<p><strong>➢ </strong>Mefenamic acid is used for the short term treatment of mild to moderate pain from various conditions. Like rheumatoid arthritis, osteoarthritis, dental pain .</p>\r\n\r\n<p><strong>➢ </strong>Also used to decrease pain and blood loss from menstrual period.</p>\r\n\r\n<p><strong>How it works? </strong></p>\r\n\r\n<p>➢ Mefenamic acid is NSAID (Non steroidal anti inflammatory drug) that inhibits the synthesis of prostaglandins in body tissues by inhibiting at least 2 cyclooxygenase isoenzymes, COX1 and COX2.Thus contribute to its anti inflammatory activity.</p>\r\n\r\n<p><strong>How much to take?</strong></p>\r\n\r\n<p>➢ If you are an adult initially start with 500mg Tablet or capsule once then 250mg per oral q6hr PRN. You should not exceed your dose more than three days.</p>\r\n\r\n<p>➢ Treatment for children below 14 years of age is not recommended. But children above 14 years old can start with 500mg tablet once then 250mg per oral every 6 hours PRN . You should exceed the dose more than 3 days.</p>\r\n\r\n<p>➢ During pregnancy this medication should be used only needed.</p>\r\n\r\n<p>➢ It is not recommended for use during your first and last trimesters of pregnancy due to possible harm to the unborn baby and interference with normal labor delivery.</p>\r\n\r\n<p><strong>How to take?</strong></p>\r\n\r\n<p>➢ You should take with food or glass of water to avoid GI effects. For dysmenorrhoea, you should start with onset of bleeding and pain.</p>\r\n\r\n<p>Its adverse effects:</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://meropharmaceutical.view9.us/ac139416-b6e5-49e6-967d-c6ea74d8856f\" width=\"110\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>➢ Abdominal pain</p>\r\n\r\n<p>➢ Upset stomach</p>\r\n\r\n<p>➢ Nausea</p>\r\n\r\n<p>➢ Heartburn</p>\r\n\r\n<p>➢ dizziness, drowsiness</p>\r\n\r\n<p>➢Leucopenia,thrombocytopenia,agranulocytosis,pancytopenia, and</p>\r\n\r\n<p>➢ Renal failure</p>\r\n\r\n<p>If the following adverse effects occur then consult your nearby pharmacist or other health professionals</p>', NULL, 'news', 'news-and-articles-1', '2018-11-21 23:53:03', '2018-12-30 09:03:47'),
(51, 'Footer 1', 'Our vision is to become the nation&rsquo;s most trusted companion for getting the drug counseling by bringing about the paradigm shift in medicine counseling and create a nation where each and every patient takes their medicine after knowing the information on it.', NULL, 'post', 'footer-1', '2018-11-24 01:34:26', '2018-12-30 10:42:15'),
(52, 'Our Members', NULL, NULL, 'post', 'an-amazing-team', '2018-11-24 09:23:16', '2018-12-30 10:23:40'),
(54, 'Mr. Pushparaj Chaudhary', '<p>Mr.Chaudhary is Co-founder of meropharmacist.com. He is a registered pharmacist of Nepal. He is a 2015 B.Pharm graduate from Kathmandu University. He has years of experience of working as medicine promotion officer of reputed company of Nepal and was designated to Midwestern part of Nepal. &nbsp;He is owner/head pharmacist of Chitran pharmacy New Baneshwor,Kathmandu. Through exposure in community pharmacy, he has gained excellent communication and counseling skills.</p>', 'NPC regd. No: G2257', 'team', 'test-team-1', '2018-11-28 09:09:57', '2018-12-30 10:18:00'),
(55, 'Counselling', NULL, NULL, 'banner', 'health-care', '2018-11-28 09:15:23', '2018-12-30 09:51:55'),
(56, 'How to use MeroPharmaceutial', NULL, NULL, 'banner', 'health-sanitation', '2018-11-28 09:19:13', '2018-12-30 09:53:04'),
(57, 'Mr. Suman Shahukhal', '<p>Mr. Shahukhal is a Co-founder of meropharmacist.com. He is a 2015 Bachelor of Pharmacy graduate from Kathmandu University and a registered pharmacist of Nepal. He has a years of experience in drug production in pharmaceutical industry, hospital pharmacy, community pharmacy as well as worked in rural Nepal under project by NHRC(Nepal Health Research Council under MOH,Nepal). He has also actively participated in Community Education Project in Manthali,Ramechhap.</p>', 'NPC regd.No : G2194', 'team', 'board-member', '2018-11-28 09:26:28', '2018-12-30 10:14:19'),
(58, 'About MeroPharmacist', '<p>Meropharmacist&rdquo; know your medicine&rdquo;</p>\r\n\r\n<p>Our vision is to become the nation&rsquo;s most trusted companion for getting the drug counseling by bringing about the paradigm shift in medicine counseling and create a nation where each and every patient takes their medicine after knowing the information on it.</p>\r\n\r\n<p>Meropharmacist.com is the first of its kind to provide the counseling to the patients on the medicines they are taking. Lack of awareness regarding medicine use is a serious problem in Nepal, with almost every Nepali lacking the right information about &lsquo;what and how&rsquo; on their medicines. Time and again, this has resulted on serious medicine related concerns like drug overuse, misuse , adverse drug reactions and lack of patient compliance.</p>\r\n\r\n<p>We strive to be a trusted and leading health information service provider in the nation,putting people at the heart of everything we do. With more than fifty percent of the country people already having the access to internet, meropharmacist &nbsp;provides the online and easy to understand information on topics at one needs to know about their medicines on just within few clicks or few touches on your mobile screen.</p>\r\n\r\n<p>So, if you don&rsquo;t know about your medicine, know that meropharmacist is there for you ! Snap your prescription and send it to meropharmacist.com or message to meropharmacist.com on facebook, we will respond you with most easy to understand information and counseling on the medicine you are taking.</p>\r\n\r\n<p>Taking medicine is not enough &hellip; Know your medicine first!</p>\r\n\r\n<p>9845265550</p>', NULL, 'post', 'about-apharma-srs-1', '2018-12-13 03:43:24', '2018-12-30 10:23:51'),
(59, 'HYPERTENSION', '<p><strong>1.What is Hypertension(High Blood Pressure)?</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Blood pressure(BP) is defined as a pressure applied by the blood against the wall of blood vessels through which it flows. The rise in the blood pressure than the normal value(we generally consider it ; 120 mm Hg systolic and 80 mm Hg diastolic) is called high blood pressure(ie.Hypertension).</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>To understand this,following details are to be defined:</p>\r\n\r\n<p>In our body,heart is one of the important organ.It acts as a pump to circulate the blood throughout our body. When the heart contracts(systole),blood flows from the heart to the vessels &nbsp;and when it dialates(diastole),blood flows towards the heart. During this process , definite amount of pressure is applied by the flowing blood against the wall of blood vessels,this pressure is called blood pressure. It is measured in unit as mm of Hg(ie. mercury). The systolic pressure is up pressure and diastolic pressure is down pressure.thus, wriiten as systolic pressure/diastolic pressure.eg 120/80 mm Hg.</p>\r\n\r\n<p>Increase in blood pressure beyond the level of (120-129)/(80-89) mm Hg is called high blood pressure. And, the decrease in blood pressure below the level of (110-120)/(70-80) mm Hg is considered as low blood pressure(called hypotension).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2. Classification of Hypertension:</strong></p>\r\n\r\n<p>There are mainly two types of hypertension:-</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Primary hypertension</p>\r\n	</li>\r\n	<li>\r\n	<p>Secondary hypertension</p>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>a.Primary hypertension:-</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>This hypertension is seen in adults and after age of 18 years.</p>\r\n	</li>\r\n	<li>\r\n	<p>90-95% of hypertension cases are primary hypertension.</p>\r\n	</li>\r\n	<li>\r\n	<p>Dietary and lifestyle imbalance , genetic influence are considered the cause of primary hypertension.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>b.Secondary hypertension:-</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>This hypertension is seen in children below 18 years of age.</p>\r\n	</li>\r\n	<li>\r\n	<p>About 5-10% hypertension cases are secondary hypertension.</p>\r\n	</li>\r\n	<li>\r\n	<p>This case of hypertension is due to disease conditions like; kidney damage,renal artery stenosis(narrowing of blood vessel of kidney), renin producing tumor,urinary tract obstruction,etc.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>3.Classification of hypertension stages:</strong></p>\r\n\r\n<p>Based on recommendations of the Seventh Report of the Joint National Committee on Prevention, Detection, Evaluation, and Treatment of High Blood Pressure (JNC 7), the classification of BP for adults aged 18 years or older has been as follows :</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Normal: Systolic lower than 120 mm Hg, diastolic lower than 80 mm Hg</p>\r\n	</li>\r\n	<li>\r\n	<p>Prehypertension: Systolic 120-139 mm Hg, diastolic 80-89 mm Hg</p>\r\n	</li>\r\n	<li>\r\n	<p>Stage 1: Systolic 140-159 mm Hg, diastolic 90-99 mm Hg</p>\r\n	</li>\r\n	<li>\r\n	<p>Stage 2: Systolic 160 mm Hg or greater, diastolic 100 mm Hg or greater</p>\r\n	</li>\r\n</ol>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>4. What are the signs and symptoms of hypertension?</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>96-98% patients donot show any signs and symptoms in general.Thus, hypertension is also considered as a silent killer . A patient with blood pressure as high as 180/130 mm Hg might not show any symptoms and may die suddenly.</p>\r\n	</li>\r\n	<li>\r\n	<p>Only 2-4% patients present the signs and symtopms.Generally seen signs and symptoms are as follow:</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Chronic headaches that lasts for days</p>\r\n	</li>\r\n	<li>\r\n	<p>Dizziness or vertigo</p>\r\n	</li>\r\n	<li>\r\n	<p>Blurry or double vision</p>\r\n	</li>\r\n	<li>\r\n	<p>Drowsiness</p>\r\n	</li>\r\n	<li>\r\n	<p>Nausea</p>\r\n	</li>\r\n	<li>\r\n	<p>Shortness of breath,usually when this occurs people start to get a little concerned.</p>\r\n	</li>\r\n	<li>\r\n	<p>Heart Palpitation(irregular heart beats)</p>\r\n	</li>\r\n	<li>\r\n	<p>Nose bleeds(due to breakdown of blood vessels in nose)</p>\r\n	</li>\r\n	<li>\r\n	<p>Redness of eyes(due to rupture of blood vessels in eyes)</p>\r\n	</li>\r\n	<li>\r\n	<p>Tinnitus</p>\r\n	</li>\r\n	<li>\r\n	<p>A flushed face</p>\r\n	</li>\r\n	<li>\r\n	<p>Fatigue(general tiredness)</p>\r\n	</li>\r\n	<li>\r\n	<p>A strong need to urinate often(especially during the night)</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>5.What are the dietary and lifestyle modifications to be considered for hypertension patients?</strong></p>\r\n\r\n<p>Primary hypertension is mainly caused due to imbalance in diet and lifestyle.Following are the recommendations for patients of hypertension:-</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Weight management; reduction of body weight by 10 kg reduces blood pressure approximately by 10/8 mm Hg.</p>\r\n	</li>\r\n	<li>\r\n	<p>Reduction in dietary salt consumption(daily salt requirement for our body is only 6 gm,this may reduce BP by 10-12 mm Hg)</p>\r\n	</li>\r\n	<li>\r\n	<p>Increase physical exercise/activity to 30-45 minutes,4 times a week(this can lower BP by 8/4 mm Hg and helps in weight management also).</p>\r\n	</li>\r\n	<li>\r\n	<p>Increase consumption of fruits and green vegetables(at least 4 serving per day but without salt, this can lower BP by 6/3 mm Hg)</p>\r\n	</li>\r\n	<li>\r\n	<p>Limit alcohol intake to no more than 1 oz(ie .30 ml) of ethanol per day for men or 0.5 oz(ie.15 ml) for women. Because alcohol intake imediately increases blood pressure resulting in complications like coma,paralysis.</p>\r\n	</li>\r\n	<li>\r\n	<p>Avoid tobacco and cigarette smoking</p>\r\n	</li>\r\n	<li>\r\n	<p>Also reduce intake of dietary saturated fat and cholesterol for overall healthy heart.</p>\r\n	</li>\r\n	<li>\r\n	<p>Stress management</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>6. What are the health complications of high blodd pressure?</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>The most dangerous complication of hypertension is Brain stroke(ie.brain haemorrhage). Excessive increase in blood pressure causes rupture of blood vessels in brain causing brain haemorrhage which may result in paralysis and even cause sudden death.</p>\r\n	</li>\r\n	<li>\r\n	<p>Heart attack and Heart failure</p>\r\n	</li>\r\n	<li>\r\n	<p>Blindness ,ie. retinopathy(due to breakdown of blood vessels in eys and if bleeding occurs inside retina,this may lead to blindness)</p>\r\n	</li>\r\n	<li>\r\n	<p>Kidney failure</p>\r\n	</li>\r\n	<li>\r\n	<p>Artherosclerosis</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>7. is there any chance of hypertension in pregnancy?</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Yes, there is. At the third trimester(sixth to ninth months),some pregnant women shows increase in blood pressure, along with swollen feet and presence of protien in urine. This condition is called Pre-eclampsia.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>This condition needs immediate medical check up to avoid the fatal complications for both mother and foetus.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>8. Medicines causing hypertension?</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Yes, some medicines cause increase in blood pressure as a side effect. Following are few of them:</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Contraceptive pills (levonorgestrel)</p>\r\n	</li>\r\n	<li>\r\n	<p>Depot and Norplant used for temporary family planing also may cause increase in bloof pressure in some patients.</p>\r\n	</li>\r\n	<li>\r\n	<p>Steroids used in asthma (fluticasone,Beclomethasone)</p>\r\n	</li>\r\n	<li>\r\n	<p>NSAIDs/Painkillers (declofenac,Ibuprofen)</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>9.Does a hypertension patient need to take medicine for lifetime?</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Yes, if his/her blood pressure is not controlled.</p>\r\n	</li>\r\n	<li>\r\n	<p>No, if patients&rsquo; blood pressure is controlled and reduced to the normal level. If a patient followed his/her lifestyle,dietary modification and &nbsp;his/her blood pressure controlled and reduced to normal ,the dose of medicine may be reduced and even stopped .But, this must be done only under medical professionals supervision otherwise this may lead to even the worse case scenarios.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>10. Are there any side effects of medicines that are used to lower &nbsp;blood pressure?</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Yes ,there are and these side effects should be reported to the doctor.</p>\r\n	</li>\r\n	<li>\r\n	<p>Some of such side effects are as follow:</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Swollen feet in amlodipine use(20 % patients show this side effect)</p>\r\n	</li>\r\n	<li>\r\n	<p>ACE inhibitors(enalapril,captopril,lisinopril) may cause dry cough in some.</p>\r\n	</li>\r\n	<li>\r\n	<p>Beta blocker medinces(atenolol,metoprolol,prapranolol) may increase asthma attack in asthamatic patients.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>These side effects should be reported to the doctor and he/she will switch other medicine(drugs).</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>11. What is White Coat Hypertension?</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>A transient increase in blood pressure in normal individuals,when blood pressure is recorded in physician&rsquo;s room or in hospital, is called white coat hypertension.</p>\r\n	</li>\r\n	<li>\r\n	<p>This is due to anxiety toward the personnel wearing/with white coat.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'Suman Shahukhal,Pharmacist.', 'news', 'hypertension', '2018-12-30 09:23:32', '2018-12-30 09:23:32'),
(60, 'Hyper-uricemia also known as Uric Acid', '<p>Uric acid is not unheard off among us Nepalese, as one among our family might have been diagnosed for it. But what does the uric acid refers to? Well it defines itself, &ldquo;uric acid&rdquo; which refers to accumulation of uric acid crystals in our joints causing swelling and unbearable pain. Due to high accumulation of uric acid in our body it is also known as hyper-uricemia. Disease is prone to affect male populous than female, but female after menopause should be careful as well.</p>\r\n\r\n<p><strong>How does one suffer from uric acid?</strong></p>\r\n\r\n<p>Generally, uric acid is eliminated by kidney through urine. But high intake of purine (which is converted to uric acid by our body) rich food causes accumulation of the uric acid which then is converted to uric acid crystals. Decline of kidney function with age and kidney ailments also lead to uric acid.</p>\r\n\r\n<p>Alcohol consumption interferes with uric acid clearance from body leading to uric acid symptoms. As well as the weight is also a determinant factor, high body mass refers to high production of uric acid as bodily waste and body fat are known to amplify inflammation (swelling and pain).</p>\r\n\r\n<p><strong>What are the symptoms to look out for?</strong></p>\r\n\r\n<p>Symptoms that one should consider are;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Intense pain, redness and swelling of joint that last for 12 to 24 hour.</p>\r\n	</li>\r\n	<li>\r\n	<p>Joint pain will last for days and spread to other joints as well.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tenderness is heightened even a blanket touching the skin over the affected joint is unbearable.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>What Should I do if I have above mentioned symptoms? </strong></p>\r\n\r\n<p>If you have the symptoms foremost thing to do is make an appointment with your physician. He/ She will conduct diagnostic test on you body, typically using blood samples. Once the physician has established that you are suffering from uric acid he/she will prescribe you medicine. Medicine will be to lessen the inflammation or to reduce the accumulation of uric acid in your body either by eliminating uric acid or by preventing formation of uric acid crystals.</p>\r\n\r\n<p>Additionally you can do following to prevent the uric acid attack;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Decrease intake of high purine rich food like kidney, liver, mushroom, seafood, asparagus (kurelo).</p>\r\n	</li>\r\n	<li>\r\n	<p>Maintain adequate water intake.</p>\r\n	</li>\r\n	<li>\r\n	<p>Decrease or totally prohibit alcohol consumption.</p>\r\n	</li>\r\n	<li>\r\n	<p>Reduce body weight.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>I can endure pain so can I not take the medicine and follow preventive measure?</p>\r\n\r\n<p>The answer is a big no because if uric acid is not controlled then it can lead to formation of kidney stone , kidney failure and arthritic attack known as gout. So it is advisable to reduce the uric acid which is done by consultation with your physician, locally available pharmacist and active participation from your side as well.</p>', NULL, 'news', 'hyper-uricemia-also-known-as-uric-acid', '2018-12-30 09:31:48', '2018-12-30 09:31:48'),
(61, 'Diabetes Management', '<p><strong>Introduction</strong></p>\r\n\r\n<p>Diabetes mellitus affect approximately 5 to 8 % of the population. A large number of individuals are asymptomatic and do not know they have the disease.</p>\r\n\r\n<p>Diabetes mellitus is heterogeneous group of disorders characterized by abnormalities in carbohydrate, protein and lipid metabolism. The central disturbance in diabetes mellitus is an abnormality in insulin production or action or both, although others factors can be involved.</p>\r\n\r\n<p>There are mainly three types of Diabetes mellitus:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Type 1(Insulin dependent Diabetes Mellitus)</p>\r\n	</li>\r\n	<li>\r\n	<p>Type 2( Non Insulin dependent Diabetes Mellitus)</p>\r\n	</li>\r\n	<li>\r\n	<p>Gestational diabetes.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>With all three, your body can&rsquo;t make or use insulin.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Features of Type 1 and Type 2 Diabetes mellitus.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Characteristics</p>\r\n			</td>\r\n			<td>\r\n			<p>Type 1</p>\r\n			</td>\r\n			<td>\r\n			<p>Type 2</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Onset ( age)</p>\r\n			</td>\r\n			<td>\r\n			<p>Usually &lt;30</p>\r\n			</td>\r\n			<td>\r\n			<p>Usually &gt;40</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Type of onset</p>\r\n			</td>\r\n			<td>\r\n			<p>Abrubt</p>\r\n			</td>\r\n			<td>\r\n			<p>Gradual</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Nutritional status</p>\r\n			</td>\r\n			<td>\r\n			<p>Often thin</p>\r\n			</td>\r\n			<td>\r\n			<p>Often obese</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Clinical symptoms</p>\r\n			</td>\r\n			<td>\r\n			<p>Polydipsia, polyuria, polyphagia</p>\r\n			</td>\r\n			<td>\r\n			<p>often asymptomatic</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Ketosis</p>\r\n			</td>\r\n			<td>\r\n			<p>Present</p>\r\n			</td>\r\n			<td>\r\n			<p>Usually absent</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Endogeneous insulin</p>\r\n			</td>\r\n			<td>\r\n			<p>Absent</p>\r\n			</td>\r\n			<td>\r\n			<p>Variable</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Insulin therapy</p>\r\n			</td>\r\n			<td>\r\n			<p>Required</p>\r\n			</td>\r\n			<td>\r\n			<p>Sometimes</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Oral hypoglycemic</p>\r\n			</td>\r\n			<td>\r\n			<p>Usually not effective</p>\r\n			</td>\r\n			<td>\r\n			<p>Often effective</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Diet</p>\r\n			</td>\r\n			<td>\r\n			<p>Mandatory with insulin</p>\r\n			</td>\r\n			<td>\r\n			<p>Mandatory with or without drugs.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Type 1 ( Insulin dependent diabetes) </strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>The disease is characterized by absolute deficiency of insulin caused by massive B-cell necrosis.</p>\r\n	</li>\r\n	<li>\r\n	<p>Loss of B- cell function is triggered by invasion of viruses or the action of chemical toxins.</p>\r\n	</li>\r\n	<li>\r\n	<p>As a result the pancreas fails to respond to glucose and type 1 diabetes show classical symptoms of insulin deficiency ( polydipsia, polyphagia, polyuria, and weight loss.)</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Symptoms </strong></p>\r\n\r\n<p>Signs and symptoms can appear relatively suddenly and may include:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Increased thirst.</p>\r\n	</li>\r\n	<li>\r\n	<p>Frequent urination</p>\r\n	</li>\r\n	<li>\r\n	<p>Bed wetting in children who previously didn&rsquo;t wet the bed during the night.</p>\r\n	</li>\r\n	<li>\r\n	<p>Extreme hunger</p>\r\n	</li>\r\n	<li>\r\n	<p>Unintended weight loss</p>\r\n	</li>\r\n	<li>\r\n	<p>Irritability and other mood changes</p>\r\n	</li>\r\n	<li>\r\n	<p>Fatigue and weakness</p>\r\n	</li>\r\n	<li>\r\n	<p>Blurred vision.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Risk factors</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Family history: Anyone with a parent or sibling with type1 diabetes has slightly increased risk of developing the condition.</p>\r\n	</li>\r\n	<li>\r\n	<p>Genetics: The presence of certain genes indicates an increased risk of developing type1 diabetes.</p>\r\n	</li>\r\n	<li>\r\n	<p>Geography: The incidence of type1 diabetes tends to increase as you travel away from the equator.</p>\r\n	</li>\r\n	<li>\r\n	<p>Age: Although type1 diabetes can appear at any age, it appears at two noticeable peaks. The first peak occurs in children between 4 and 7 years old, and the second is in children between 10 and 14 years old.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Complications</strong></p>\r\n\r\n<p>Type1 Diabetes can affect major organs in your body, including heart, blood vessels, nerves, eyes and kidneys.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Heart and blood vessel disease.</p>\r\n	</li>\r\n	<li>\r\n	<p>Nerve damage ( neuropathy)</p>\r\n	</li>\r\n	<li>\r\n	<p>Kidney damage(Nephropathy)</p>\r\n	</li>\r\n	<li>\r\n	<p>Eye damage</p>\r\n	</li>\r\n	<li>\r\n	<p>Foot damage</p>\r\n	</li>\r\n	<li>\r\n	<p>Skin and mouth conditions</p>\r\n	</li>\r\n	<li>\r\n	<p>Pregnancy complication</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Diagnosis</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Glycolated hemoglobin(A1C) test: It measures the blood sugar attached to the oxygen carrying protein in red blood cells(hemoglobin). An A1C level of 6.5% or higher on two separate tests indicates diabetes.</p>\r\n	</li>\r\n	<li>\r\n	<p>Random blood sugar test: Random blood sugar level of 200mg/dl(11.1mMol/l) or higher suggests diabetes.</p>\r\n	</li>\r\n	<li>\r\n	<p>Fasting and blood sugar test:</p>\r\n	</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>\r\n	<p>A fasting blood sugar level less than 100mg/dl(5.6mMol/l) is normal</p>\r\n	</li>\r\n	<li>\r\n	<p>A &nbsp;fasting blood sugar level from 100 to 125mg/dl(5.6 to 6.9mMol/l)is considered pre-diabetes.</p>\r\n	</li>\r\n	<li>\r\n	<p>If it&rsquo;s 126mg/dl(7mMol/l) or higher on two separates test, indicate diabetes.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Treatment</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Taking insulin</p>\r\n	</li>\r\n	<li>\r\n	<p>Carbohydrate, fat and protein counting.</p>\r\n	</li>\r\n	<li>\r\n	<p>Frequent blood sugar monitoring</p>\r\n	</li>\r\n	<li>\r\n	<p>Eating healthy foods</p>\r\n	</li>\r\n	<li>\r\n	<p>Exercising regularly and maintaining a healthy weight.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>', NULL, 'news', 'diabetes-management', '2018-12-30 09:36:07', '2018-12-30 09:36:07'),
(62, 'Depression – The burgeoning mental disorder', '<p>The next time anyone calls you depressed when you are feeling low, give them a warm smile quoting it is not long lasting , as in cases of depression. And yes, you are right. Depression is state of low mood and aversion to activity that may last for days, months or even years. Around 350 million people worldwide are suffering from it with over 15% of sufferers commiting suicide every year. According to a research (BMC Psychiatry 2016;16:102), there is around 11.7% cases of depression in Nepal. In the context of Nepal, depression is prevalent mainly as a residue of political conflict and family with foreign country job holder.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;A child do not have any responsibity or burden in his life, how can he have depression ? Do you think so ? &nbsp;Then you are wrong at this point. Depression can happen to anyone, at any age, and to people of any race or ethnic group: A child ,an adolescent , middle age , old or an Asian a European, or an American . Depression is actually more than just falling &ldquo;down&rdquo;. It is serious illness caused by change in brain chemistry. &nbsp;Research tells us that different factors contribute to the onset of depression, including genetics, change in hormone levels as well as certain medical conditions. A relationship appears to exist between three main neurotransmitters in the brain i.e. (dopamine, norepinephrine, and serotonin) and specific symptoms of major depressive disorder. The sufferers of depression includes physicist Isaac Newton to sportsperson like Mike Tyson. Even Abraham Lincoln, the 16th U.S president suffered from depression because of death of his first love at some phase of his life.</p>\r\n\r\n<p>Although there are known effective treatments for depression, fewer than half of those affected in the world receive treatment for the depression. Anti depressants have become the safer and easier to tolerate with efficacy of nearly 75% . With SSRIs and TCAs &nbsp;forming a benchmark antidepressants, there has been advancements upto delivering anti depressants directly to the brain. A report by World Health Organisation (WHO) indicates that by 2030, depression will be the leading cause of disease burden in the world. So, can we face the challenge in the management of depression to make this world a better place ? Definitely yes. All we need is collaboration between consumers, providers, academia and health plans.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;Finally, &ldquo;What the caterpillar calls the end of the world, the master calls a butterfly&rdquo;. Lets march against depression by developing proper medication , positive attitude and a supportive environment.</p>', NULL, 'news', 'depression-the-burgeoning-mental-disorder', '2018-12-30 09:39:15', '2018-12-30 09:39:15'),
(63, 'Amitriptyline', '<p>The drug you are taking is Amitriptyline. It is used for the depression (Udasinta) and anxiety (Aatine rog). It can be also be used in neuropathic pain( Nasa Sambandhi Dukhai), as well as migraine.</p>\r\n\r\n<p>It shows its action by increasing the amount of two chemicals in your brain called &lsquo;Serotonin&rsquo; and nor-edrinaline&rdquo;. These are the chemicals produced in your body when you are in state of happiness.</p>\r\n\r\n<p>Your dose may vary from 10-150 mg depending upon the your condition.</p>\r\n\r\n<p><strong>Tips :</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>May cause drowsiness, and impaired ability to drive and walk . So, better take high doses at evening to minimize day time sedation.</p>\r\n	</li>\r\n	<li>\r\n	<p>Do not stop this medicine suddenly , as it may result into withdrawal syndrome</p>\r\n	</li>\r\n	<li>\r\n	<p>May increase the risk of sunburn, protect yourself from the sun when outdoors.</p>\r\n	</li>\r\n	<li>\r\n	<p>Consult your doctor or you can consult meropharmacist for any further information.</p>\r\n	</li>\r\n	<li>\r\n	<p>The drug may cause side effects like diarrhea, constipation(Kabjiyat) , dry mouth ( Mukh Sukkha) , or even headache. Consult doctor or pharmacist if these side effects become severe.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>In a nutshell : </strong></p>\r\n\r\n<p>Amitriptyline is effective drug for depression , anxiety and neuropathic ( Nasa) pain, but may cause drowsiness (Jhumma paarne) in the beginning , and withdrawl syndrome if stopped suddenly.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Further Information</strong></p>\r\n\r\n<p>Always consult your healthcare provider to ensure the information provided here applies to your personal &nbsp;circumstances.</p>', NULL, 'news', 'amitriptyline', '2018-12-30 09:40:29', '2018-12-30 09:40:29'),
(64, '72 hour emergency contraceptive pills (ECP)', '<p>Emergency contraceptive pill consists of Levonorgestrel (1 tablet of 1.5 mg or 2 tablets of 0.75 mg).</p>\r\n\r\n<p>Levonorgestrel is a progestin-only hormone used to prevent unintended pregnancy after unprotected intercourse or known or suspected contraceptive failure. To obtain optimal efficacy ,it should be taken as soon as possible within 120 hours of intercourse.</p>\r\n\r\n<p><strong>When does one use ECP?</strong></p>\r\n\r\n<p>ECP tablet should be taken as soon as possible with a glass of water(do not chew tablet)within 120 hours(5 days) of unprotected sex or contraceptive failure.</p>\r\n\r\n<p><strong>What are the possible side-effects of ECP?</strong></p>\r\n\r\n<p>Common side-effects: Nausea(feeling of vomiting),vomiting,headache,dizziness</p>\r\n\r\n<p>Other side effects: breast tenderness,lower abdominal pain.</p>\r\n\r\n<p>There is chances of unexpected vaginal bleeding but it is not dangerous and should be settled by the time of next period.</p>\r\n\r\n<p><strong>What are the possible drug interactions of ECP?</strong></p>\r\n\r\n<p>Such drugs are:- barbiturates, carbamazepine,felbamate, phenytoin,rifampin,st.john&rsquo;s wart,topiramate decrease the effectiveness of progestin -only hormone.</p>\r\n\r\n<p><strong>Administration:</strong></p>\r\n\r\n<p>Take EC pill orally with in 12 hrs to 120 hrs of unprotected intercourse. If vomiting occurs with in 2 hrs of taking the pill, you should take another dose immediately. To prevent vomiting,it is preferable to take the pill with food.</p>\r\n\r\n<p>Available brands and price in Nepal:</p>\r\n\r\n<p>Available brands are: I-pill, unwanted, econ,max72</p>\r\n\r\n<p>Price:-Nrs 80.00</p>', NULL, 'news', '72-hour-emergency-contraceptive-pills-ecp', '2018-12-30 09:42:32', '2018-12-30 10:55:19');

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
(3, 34, 3, '2018-11-21 21:34:48', '2018-11-21 21:34:48'),
(4, 44, 4, '2018-11-21 21:42:13', '2018-11-21 21:42:13'),
(5, 45, 5, '2018-11-21 21:42:40', '2018-11-21 21:42:40'),
(7, 48, 7, '2018-11-21 23:50:17', '2018-11-21 23:50:17'),
(8, 49, 8, '2018-11-21 23:52:51', '2018-11-21 23:52:51'),
(9, 50, 9, '2018-11-21 23:53:03', '2018-11-21 23:53:03'),
(10, 51, 10, '2018-11-24 01:34:26', '2018-11-24 01:34:26'),
(11, 37, 11, '2018-11-24 22:26:00', '2018-11-24 22:26:00'),
(12, 54, 12, '2018-11-28 09:09:57', '2018-11-28 09:09:57'),
(13, 55, 13, '2018-11-28 09:15:23', '2018-11-28 09:15:23'),
(14, 56, 14, '2018-11-28 09:19:13', '2018-11-28 09:19:13'),
(15, 57, 15, '2018-11-28 09:26:28', '2018-11-28 09:26:28'),
(16, 46, 18, '2018-12-05 09:21:08', '2018-12-05 09:21:08'),
(17, 36, 23, '2018-12-13 03:34:37', '2018-12-13 03:34:37'),
(18, 58, 24, '2018-12-13 03:43:24', '2018-12-13 03:43:24'),
(19, 64, 35, '2018-12-31 06:00:02', '2018-12-31 06:00:02');

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
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `address`, `phone`, `email`, `facebook_link`, `twitter_link`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'New Baneshwor', '9841993035,9845265550,9849248987,9841875332', 'sandhya@view9.com.np', 'https://www.facebook.com/meropharmacistNepal', 'www.twitter.com', 'uploads/963901.png', NULL, '2018-12-30 09:48:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$fdDICJZzUZjE5XFmrSVf5.WgFkFozbDkOKPx5MdSkT.RrhDIZxxNG', 1, 'MXUsmKoaDG2hgko6BvnLEY7TEDKl7UQ62uqHVVI0Iyx1KTWMiYhVcyyGg4Et', NULL, NULL, '2018-11-21 21:03:03', '2018-11-21 21:03:03'),
(15, 'atesat', 'samipstha114@yahoo.com', '34235', '$2y$10$ydP7FQezDJGkIhzeX0kEVesavCxVLw8lVginAUVsN9n2NiJeqFlk.', 1, '1SW6IPYXhj1pKvjZbsgezoHhlZmznI4ysf09uxugNudULPxVVZ2qqkkCZTC4', NULL, NULL, '2018-11-21 23:32:21', '2018-11-28 10:28:02'),
(16, 'Test sandhya', 'sandhya@view9.com.np', NULL, '$2y$10$9ir8MSynvObqNrCLvjnQxeqDVsUVcxuBbfTexvOLqLJ0rRe6PgFHO', 1, NULL, NULL, NULL, '2018-11-22 04:22:55', '2018-11-22 04:22:55'),
(20, 'test', 'ashish1104@yahoo.com', NULL, '$2y$10$cNUw2KkFT4nDZTU6IH/gHOmelsS3Y86njSfYB0Kls6L8/XjZ5oyQS', 1, NULL, NULL, NULL, '2018-11-25 02:21:58', '2018-11-25 02:21:58'),
(21, 'a', 's@d.com', NULL, '$2y$10$f7ePbUkl6CouNfy6VfhJqOZFrejc8GkP52FLpHh/RZiT9q1TtLi1S', 1, 'lgWxhmSWBNeIxUUVRAqGSHtdPdCcb7TPu3ej95dmx4Br0HInVBCMI90geHvz', NULL, NULL, '2018-12-06 11:01:59', '2018-12-06 11:01:59'),
(23, 'aaa', 'sasd@view9.com.np', '3333333333', '$2y$10$cDh.KOSgN6MCqljQ8hDYE.GEOOCq4lLLG80Vwmf8fFHhyEGuKJ472', 1, 'QC4mAiJgARZtIYO6D0JWcvxgORrPCQgHPRdw35JdL0Ek5mbw3DPdVUGDuus3', NULL, NULL, '2018-12-12 08:47:54', '2018-12-12 08:47:54'),
(24, 'prakriti shrestha', 'prakriti.rawal@view9.com.np', '9849497542', '$2y$10$2uA3JmD.aLTm6HBWkFmnsuFmv4DUJNg3W.tTnIo2HLIDWoB6Tid6S', 1, NULL, NULL, NULL, '2018-12-12 08:48:48', '2018-12-12 08:48:48'),
(26, 'prakriti shrestha', 'prakriti@view9.com.np', NULL, '$2y$10$UhkAKP8w7ejH7sHSa7pGouke2CWmMUWOqQWHr/uWHoC.fMyjpYY0m', 1, NULL, NULL, NULL, '2018-12-30 06:36:41', '2018-12-30 06:36:41'),
(28, 'Ram Stha', 'samip@view9.com.np', NULL, '$2y$10$exEl4YcsvCdgvN0mv0hcPeGyp6van3mXBYdYxXxqdDr21CmmbYnoW', 1, NULL, NULL, NULL, '2018-12-30 07:19:32', '2018-12-30 07:19:32'),
(29, 'Ram Stha', 'samipstha114@gmail.com', '9803350436', '$2y$10$Xw1uGV0/Ro8NzQTKjor8/eHowTFZ0z3Kq92Y0ZkS6hXAEIMh9oax6', 1, '3CJOaeXxSubiYBUNDiB27NO11Z0HqSqS61WmFjmM6UT6sU9rK2S13ynEJm1P', NULL, NULL, '2018-12-30 07:22:26', '2018-12-30 07:22:26'),
(31, 'samip', 'samip@view9.com.npewq', '98454', '$2y$10$C/aRGma7AFFgKsZKSI9KJe03q3uOrIBZwXGIj75LXWaCrfD/MiYIm', 1, NULL, NULL, NULL, '2018-12-30 07:43:24', '2018-12-30 07:43:24'),
(32, 'Samip Stha', 'pimasstha@gmail.com', '9845665456', '$2y$10$f8g0ROaRyuOjQ7pJaGfjGOr0w6em36urmHIUA4nHDB/g9AIr3CubO', 1, 'qsP0nKLITld8RxG6CvGZKAFJbXgYs2h6hZeFfP1fluXVbNfFmIHNFeiXaaUZ', NULL, NULL, '2018-12-30 07:48:33', '2018-12-30 08:16:32'),
(35, 'Ram Bahadur', 'ram.bahdu@gmail.com', '9841123321', '$2y$10$IVPoqI1W89w44MH4XYNJ6Oy0JNSCfs9uG1ijMouREnyOUxFoiZIs.', 1, NULL, NULL, NULL, '2018-12-30 15:04:02', '2018-12-30 15:04:02'),
(39, 'Dinesh', 'royal@gmail.com', '7894561231', '$2y$10$k5deQYd340V9wwUzdmwnFu9URIRagVkLNjekLOvry7GSpoHiIQdG6', 1, 'SN1A0HyXwuNZ8sUuiTC65eKCpj5Maz2t4ANN2cQ1EXsw4vIwvh4dWHDOvTtn', NULL, NULL, '2018-12-31 03:30:15', '2018-12-31 03:30:15'),
(40, 'admin', 'admin@user.com', '8974561132', '$2y$10$A0hB/uxCXF1dws0WC.EgFeItOGOAsHhrIBokVUvcu.kMBTels81a6', 1, 'xKLJqviqCvHGgVf4WSgMYJMmYbKgw2SbvvByAqVB8ckAKEu8dkbydLhVKn2j', NULL, NULL, '2018-12-31 03:49:23', '2018-12-31 03:49:23'),
(41, 'Dinesh', 'admin@email.com', '987546413', '$2y$10$4QC6qu2hkc6MKTr0nHDwa.q9YNu80ynPuZVeD/2e97ZeESLHnfbfW', 1, '3qgOmWrM5GrjRRWHatorkBXJKjp7PLdCwCGgeY8TRHlHglKpX80eN8kbG1hL', NULL, NULL, '2018-12-31 04:30:52', '2018-12-31 04:30:52'),
(44, 'fjgekgf', 'gmail@gmail.com', '9789451641', '$2y$10$6Bxdjp.fCtVp8XbTKaOpbeWItx6gqab7XERk0Atiwuz9wpyUNf6zi', 1, 'JnjAxo2ZF1HYkP2cdTvTJ0lN1sktLvsoQER5mn38wNsLDAgZU3wXuG9GGq1Y', NULL, NULL, '2018-12-31 05:10:00', '2018-12-31 05:10:00'),
(45, 'Dinesh', 'hgfiuyf@gmail.com', '87998564132132', '$2y$10$DLk5e/SjBOFJa7QBO0k2suou642DTzWVATBMekTb7836bFzEFmUty', 1, 'Qq5cXa4urmEKhiuOOMQjcXjlIsInIrdF8q3Yzc93UOVjIpebbcQSsEzz2gmc', NULL, NULL, '2018-12-31 05:14:14', '2018-12-31 05:14:14'),
(46, 'Samip Stha', 'ram@gmail.com', '98413365454', '$2y$10$QE0fpMTgiIgSjp2/kC4VpesyqUkL.uOh1N5hwbD1tR5zetNVhTQx.', 1, '0Ln00wb4xiswWrJeIvytgb1f8FebgdwG9IMmZ6jv7hCO7iwJh2AzD7ABY0VF', NULL, NULL, '2018-12-31 05:24:46', '2018-12-31 05:24:46');

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
(2, 23),
(2, 24),
(2, 26),
(2, 28),
(2, 29),
(2, 31),
(2, 32),
(2, 35),
(2, 40),
(2, 41),
(2, 46),
(3, 16),
(3, 20),
(3, 39),
(3, 44),
(3, 45);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `counseling_infos`
--
ALTER TABLE `counseling_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `counseling_info_has_images`
--
ALTER TABLE `counseling_info_has_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `package_lists`
--
ALTER TABLE `package_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient_users`
--
ALTER TABLE `patient_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacist_users`
--
ALTER TABLE `pharmacist_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `post_has_images`
--
ALTER TABLE `post_has_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `prescription_replies`
--
ALTER TABLE `prescription_replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seo_tools`
--
ALTER TABLE `seo_tools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
