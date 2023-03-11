-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 06:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wwgcqymy_nysarsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `remember_token`, `price`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$czYYArDA.2V4nqiExPDMb.j6qax5Li110GWm/EHTpoO/Icav2IrVW', '', 350, NULL, '2023-02-18 18:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `annualdetails`
--

CREATE TABLE `annualdetails` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `annual_id` int(11) NOT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `annualdetails`
--

INSERT INTO `annualdetails` (`id`, `title`, `status`, `annual_id`, `details`, `created_at`, `updated_at`) VALUES
(10, 'Conference Page', 1, 2, 'asdadasdadasdasdasd', '2023-03-04 13:59:26', '2023-03-04 15:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `annuals`
--

CREATE TABLE `annuals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `agenda` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speaker` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `downloadsoption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `annuals`
--

INSERT INTO `annuals` (`id`, `title`, `payment`, `status`, `agenda`, `speaker`, `downloadsoption`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Conference Home', 485, 1, 'New York State Service Coordinators work at over 1,000 senior housing complexes throughout New York state. Our primary responsibility is to aid residents to “age in place” in independent housing for as long as possible. We achieve this by accessing and facilitating needed services. We are required to be familiar with the current federal, state, county, community regulations and benefits so that seniors can know the availability of programs designed for them.\n\n', NULL, NULL, 1, NULL, '2023-02-13 16:06:29'),
(2, 'Conference Agenda', 50, 1, '<p>Sample Details aasdasdasddded</p>', NULL, NULL, 1, NULL, '2023-02-02 10:21:20'),
(3, 'Speaker List and Bio', 450, 1, '<h1>asdasdasdasdasdasd</h1>', NULL, NULL, 1, NULL, '2023-02-02 15:22:12'),
(4, 'Hotel and Travels', 350, 1, NULL, NULL, NULL, 1, '2023-02-02 14:23:26', '2023-02-04 15:16:59'),
(5, 'Webinar Content Download PDF', 120, 1, '<p>hhhhhhhhhhhhhhhhhhhhhhhhasdasd</p>', NULL, NULL, 2, '2023-02-02 14:23:56', '2023-02-16 19:19:53'),
(6, 'Sample Data Added', 350, 1, NULL, NULL, NULL, 1, '2023-02-08 00:18:47', '2023-02-08 00:18:47'),
(7, 'ss22', 1, 1, NULL, NULL, NULL, 1, '2023-02-08 00:23:45', '2023-02-08 00:23:54'),
(8, 'Karthikey', 1, 2, '<p>Sample Karthi Details</p>', NULL, NULL, 1, '2023-02-13 13:18:16', '2023-02-15 17:23:24'),
(9, 'Murugan', 1, 1, '<p>add some Details&nbsp;</p>', NULL, NULL, 1, '2023-02-15 15:19:50', '2023-02-15 15:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `becomemembers`
--

CREATE TABLE `becomemembers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `becomemembers`
--

INSERT INTO `becomemembers` (`id`, `data`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p>Sample Details added Details&nbsp;</p>', 1, NULL, NULL),
(2, '<ol><li>zzzzzzzzzzzzz</li><li>zzzzzzzzz</li><li>eeeeeeeeee</li><li>ttttttttttt</li><li>gggggggggg</li></ol>', 1, '2023-01-06 04:10:28', '2023-01-06 04:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `couponcodes`
--

CREATE TABLE `couponcodes` (
  `id` int(10) UNSIGNED NOT NULL,
  `couponcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_type` int(11) NOT NULL,
  `coupon_limit` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `couponcodes`
--

INSERT INTO `couponcodes` (`id`, `couponcode`, `discount_type`, `coupon_limit`, `discount`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'aaa', 2, 120, 80, '2023-02-17', '2023-03-11', 1, '2023-02-16 21:31:15', '2023-02-16 21:49:52'),
(2, 'bbb', 1, 58, 200, '2023-02-01', '2023-03-29', 1, '2023-02-16 21:32:12', '2023-02-18 15:45:02'),
(3, 'MAK', 1, 3, 150, '2023-02-01', '2023-03-31', 1, '2023-02-18 18:00:05', '2023-02-18 18:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `couponusers`
--

CREATE TABLE `couponusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `couponcode_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mem_id` int(11) DEFAULT NULL,
  `used` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `couponusers`
--

INSERT INTO `couponusers` (`id`, `couponcode_id`, `mem_id`, `used`, `created_at`, `updated_at`) VALUES
(1, 'aaa', 1, 1, '2023-03-11 05:22:46', '2023-03-11 05:22:46'),
(3, 'bbb', 2, 1, '2023-03-11 05:48:18', '2023-03-11 05:48:18'),
(4, 'bbb', 1, 2, '2023-03-11 05:48:28', '2023-03-11 09:57:49'),
(5, 'MAK', 1, 1, '2023-03-11 05:52:08', '2023-03-11 05:52:08');

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
-- Table structure for table `memberbenefits`
--

CREATE TABLE `memberbenefits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberbenefits`
--

INSERT INTO `memberbenefits` (`id`, `data`, `status`, `created_at`, `updated_at`) VALUES
(2, '<p>Second Details added</p>', 1, '2023-01-06 05:39:58', '2023-01-06 05:39:58');

-- --------------------------------------------------------

--
-- Table structure for table `membercheckouts`
--

CREATE TABLE `membercheckouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billingname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driving` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mem_id` int(11) DEFAULT NULL,
  `payment_id` int(11) NOT NULL DEFAULT 0,
  `transaction_id` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source_email` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_type` int(11) NOT NULL DEFAULT 1,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `membercheckouts`
--

INSERT INTO `membercheckouts` (`id`, `fullname`, `phone`, `email`, `billingname`, `comments`, `driving`, `street_address`, `city`, `state`, `zipcode`, `country`, `mem_id`, `payment_id`, `transaction_id`, `source_email`, `page_type`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Murugan Bose', '8056341625', 'ersaravana386@gmail.com', 'Bose', NULL, NULL, 'Test Address', 'madurai', 'Tamilnadu', '852852', 'India', 1, 1, '60211790122', 'ersaravana386@gmail.com', 2, 1, '2023-03-11 09:05:59', '2023-03-11 09:06:53'),
(2, 'Murugan', '7897897890', 'ersaravana386@gmail.com', NULL, 'HYS8957SS', 'HYS8957SS', 'Address', 'Madurai', 'Tamilnadu', '789456', 'INdia', 1, 2, '60211790917', 'ersaravana386@gmail.com', 1, 0, '2023-03-11 09:14:56', '2023-03-11 09:57:49'),
(3, 'Saravana', '7417418520', 'murugan.b@seyasoftech.com', 'Building Name', NULL, 'asdasd', 'Test Address', 'Madurai', 'TN', '456456', 'India', 1, 2, '60211790917', 'ersaravana386@gmail.com', 1, 0, '2023-03-11 09:15:37', '2023-03-11 09:57:49'),
(4, 'Murugan', '7897897890', 'ersaravana386@gmail.com', NULL, NULL, 'GDHF89566', 'asdas', 'madurai', 'TNN', '741852', 'India', 1, 3, '60211790952', 'ersaravana386@gmail.com', 1, 0, '2023-03-11 10:01:11', '2023-03-11 10:01:32'),
(5, 'Saravana Saravana', '8056341655', 'murugan.b@seyasoftech.com', 'Saravana', NULL, NULL, 'Tets Address', 'Madurai', 'Tamilnadu', '752752', 'India', 2, 4, '60211791125', 'murugan.b@seyasoftech.com', 3, 2, '2023-03-11 10:11:39', '2023-03-11 10:12:11'),
(6, 'Murugan Bose', '8056341625', 'ersaravana386@gmail.com', 'Bose', NULL, NULL, 'Test Address', 'madurai', 'Tamilnadu', '852852', 'India', 1, 5, '60211791879', 'ersaravana386@gmail.com', 3, 1, '2023-03-11 10:54:09', '2023-03-11 10:54:34'),
(7, 'Saravana Saravana', '8056341655', 'murugan.b@seyasoftech.com', 'Saravana', NULL, NULL, 'Tets Address', 'Madurai', 'Tamilnadu', '752752', 'India', 2, 0, NULL, NULL, 1, 2, '2023-03-11 10:55:50', '2023-03-11 10:55:50'),
(8, 'll', '7412589630', 'll@gmail.com', NULL, NULL, 'GDHF89566', 'Address', 'Madurai', 'tamilnadu', '852852', 'USA', 2, 0, NULL, NULL, 1, 0, '2023-03-11 11:40:58', '2023-03-11 11:40:58'),
(9, 'Muruganas', '1001001001', 'kk@gmail.com', NULL, NULL, 'sadasdasd789', 'asdasd', 'M', 'T', '741741', 'USS', 2, 0, NULL, NULL, 1, 0, '2023-03-11 11:42:02', '2023-03-11 11:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `member_status` int(11) NOT NULL DEFAULT 1,
  `payment_status` int(11) NOT NULL DEFAULT 0,
  `street_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `mobile`, `member_status`, `payment_status`, `street_address`, `city`, `state`, `zipcode`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Murugan', 'Bose', 'ersaravana386@gmail.com', 'murugan', '456456', 8056341625, 1, 1, 'Test Address', 'madurai', 'Tamilnadu', '852852', 'India', '2023-03-11 08:55:27', '2023-03-11 10:54:34'),
(2, 'Saravana', 'Saravana', 'murugan.b@seyasoftech.com', 'testuser', 'testuser', 8056341655, 1, 1, 'Tets Address', 'Madurai', 'Tamilnadu', '752752', 'India', '2023-03-11 10:10:47', '2023-03-11 10:12:11'),
(3, 'Muruganas', 'Muruganas', 'kk@gmail.com', 'kkkkkk', 'kkkkkk', 1001001001, 1, 0, 'asdasd', 'M', 'T', '741741', 'USS', '2023-03-11 11:42:02', '2023-03-11 11:42:02');

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
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_11_02_143007_create_admins_table', 1),
(11, '2022_12_23_045432_create_members_table', 1),
(12, '2022_12_27_093118_create_annuals_table', 1),
(13, '2022_12_30_083402_create_pagedetails_table', 2),
(14, '2023_01_06_092716_create_becomemembers_table', 3),
(15, '2023_01_06_092739_create_memberbenefits_table', 3),
(16, '2023_02_01_115209_create_payment_logs_table', 4),
(17, '2023_02_02_075104_create_couponcodes_table', 5),
(18, '2023_02_06_153651_create_membercheckouts_table', 6),
(19, '2023_03_11_092505_create_couponusers_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pagedetails`
--

CREATE TABLE `pagedetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `annual_title_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_type` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payment_logs`
--

CREATE TABLE `payment_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `mem_id` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `name_on_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `response_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `coupon_code` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_amount` int(11) NOT NULL DEFAULT 0,
  `discount_type` int(11) NOT NULL DEFAULT 0,
  `payment_mode` int(11) DEFAULT 1,
  `approved_status` int(11) NOT NULL DEFAULT 1,
  `cheque_document` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_logs`
--

INSERT INTO `payment_logs` (`id`, `mem_id`, `amount`, `name_on_card`, `response_code`, `transaction_id`, `auth_id`, `message_code`, `quantity`, `coupon_code`, `discount_amount`, `discount_type`, `payment_mode`, `approved_status`, `cheque_document`, `created_at`, `updated_at`) VALUES
(1, 1, 5.00, 'sasasas', '1', '60211790122', 'Y9O9XC', '1', 1, NULL, 0, 0, 1, 1, NULL, '2023-03-11 09:06:53', '2023-03-11 09:06:53'),
(2, 1, 300.00, 'dfsdf', '1', '60211790917', '2PO4HI', '1', 2, 'bbb', 200, 1, 1, 1, NULL, '2023-03-11 09:57:49', '2023-03-11 09:57:49'),
(3, 1, 250.00, 'hyh', '1', '60211790952', 'BVTGDT', '1', 1, NULL, 0, 0, 1, 1, NULL, '2023-03-11 10:01:32', '2023-03-11 10:01:32'),
(4, 2, 250.00, 'iolll', '1', '60211791125', 'CK4XG0', '1', 1, NULL, 0, 0, 1, 1, NULL, '2023-03-11 10:12:11', '2023-03-11 10:12:11'),
(5, 1, 250.00, 'asdasasass', '1', '60211791879', 'K894LL', '1', 1, NULL, 0, 0, 1, 1, NULL, '2023-03-11 10:54:34', '2023-03-11 10:54:34');

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
-- Table structure for table `webinars`
--

CREATE TABLE `webinars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `webinars`
--

INSERT INTO `webinars` (`id`, `data`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"font-family: &quot;PT Serif&quot;; font-size: 16px; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 1.625em; margin-left: 0px; color: rgb(89, 91, 97);\">You are invited to a free Zoom Presentation / Workshop !</p><p style=\"font-family: &quot;PT Serif&quot;; font-size: 16px; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 1.625em; margin-left: 0px; color: rgb(89, 91, 97);\">TOPIC: Frauds, Scams Targeting Older Adults</p><p style=\"font-family: &quot;PT Serif&quot;; font-size: 16px; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 1.625em; margin-left: 0px; color: rgb(89, 91, 97);\">Learn from experts on how to spot and avoid scams.</p><p style=\"font-family: &quot;PT Serif&quot;; font-size: 16px; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 1.625em; margin-left: 0px; color: rgb(89, 91, 97);\"><strong style=\"font-family: inherit; font-style: inherit; font-weight: bold; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-bottom: 0px;\"><u style=\"margin-bottom: 0px;\">PRESENTERS:</u></strong></p><p style=\"font-family: &quot;PT Serif&quot;; font-size: 16px; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 1.625em; margin-left: 0px; color: rgb(89, 91, 97);\"><strong style=\"font-family: inherit; font-style: inherit; font-weight: bold; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-bottom: 0px;\">Gary Brown,&nbsp;</strong>StateWide Elder Abuse Coordinator; How to Avoid Scams and Fraud During the Pandemic</p><p style=\"font-family: &quot;PT Serif&quot;; font-size: 16px; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 1.625em; margin-left: 0px; color: rgb(89, 91, 97);\"><strong style=\"font-family: inherit; font-style: inherit; font-weight: bold; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-bottom: 0px;\">Lauren Kirchmyer,&nbsp;</strong>Marketing and Outreach BBB of upstate NY; Protect Yourself from Senior Scams</p><p style=\"font-family: &quot;PT Serif&quot;; font-size: 16px; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 1.625em; margin-left: 0px; color: rgb(89, 91, 97);\"><strong style=\"font-family: inherit; font-style: inherit; font-weight: bold; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-bottom: 0px;\">Beth Nelson,&nbsp;</strong>NYS Senior Medicare Patrol Director; Protecting your Health Care Identity: Exploring the Latest Health Care Scams</p><p style=\"font-family: &quot;PT Serif&quot;; font-size: 16px; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 1.625em; margin-left: 0px; color: rgb(89, 91, 97);\"><strong style=\"font-family: inherit; font-style: inherit; font-weight: bold; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-bottom: 0px;\"><u style=\"margin-bottom: 0px;\">DATE:</u></strong>&nbsp; Wednesday Jul 21, 2021 • 10:30am – 12:30pm Eastern time</p><p style=\"font-family: &quot;PT Serif&quot;; font-size: 16px; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 1.625em; margin-left: 0px; color: rgb(89, 91, 97);\">Please click the link below to join the meeting.</p><p style=\"font-family: &quot;PT Serif&quot;; font-size: 16px; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 1.625em; margin-left: 0px; color: rgb(89, 91, 97);\"><a href=\"https://www.google.com/url?q=https%3A%2F%2Fus02web.zoom.us%2Fj%2F83522288554&amp;sa=D&amp;ust=1624285890597000&amp;usg=AOvVaw0bgdkxPSacZSW1XvCANHFi\" style=\"font-family: inherit; font-style: inherit; font-weight: inherit; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition-duration: 0.3s; transition-timing-function: ease; color: rgb(169, 209, 88); margin-bottom: 0px;\">https://us02web.zoom.us/j/83522288554</a></p><p style=\"font-family: &quot;PT Serif&quot;; font-size: 16px; line-height: inherit; border: 0px; outline: 0px; -webkit-font-smoothing: antialiased; overflow-wrap: break-word; margin-right: 0px; margin-bottom: 1.625em; margin-left: 0px; color: rgb(89, 91, 97);\">Meeting ID: 835 2228 8554</p>', 1, NULL, '2023-01-06 03:13:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annualdetails`
--
ALTER TABLE `annualdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annuals`
--
ALTER TABLE `annuals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `becomemembers`
--
ALTER TABLE `becomemembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `couponcodes`
--
ALTER TABLE `couponcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `couponusers`
--
ALTER TABLE `couponusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `memberbenefits`
--
ALTER TABLE `memberbenefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membercheckouts`
--
ALTER TABLE `membercheckouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagedetails`
--
ALTER TABLE `pagedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_logs`
--
ALTER TABLE `payment_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `webinars`
--
ALTER TABLE `webinars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `annualdetails`
--
ALTER TABLE `annualdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `annuals`
--
ALTER TABLE `annuals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `becomemembers`
--
ALTER TABLE `becomemembers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `couponcodes`
--
ALTER TABLE `couponcodes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `couponusers`
--
ALTER TABLE `couponusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memberbenefits`
--
ALTER TABLE `memberbenefits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membercheckouts`
--
ALTER TABLE `membercheckouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pagedetails`
--
ALTER TABLE `pagedetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_logs`
--
ALTER TABLE `payment_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webinars`
--
ALTER TABLE `webinars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
