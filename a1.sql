-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 12:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a1`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `hyperlink` varchar(255) NOT NULL,
  `meta_data` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `hyperlink`, `meta_data`, `tags`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'My blog', '<h2>&nbsp;dh&nbsp;<strong> hetd</strong>My descriptionhydtg hrt</h2>', 'My link', 'My data', 'My,tags', 0, '2023-05-12 03:38:08', '2023-05-31 02:14:50', NULL),
(2, 'new', '<h2>hello every one my name <strong>vinay and</strong></h2><p>&nbsp;</p>', 'no', 'no', '1,2,3,4,5', 0, '2023-05-12 05:04:25', '2023-05-31 04:00:09', NULL),
(3, 'md', 'md', 'md', 'md', 'md', 0, '2023-05-12 05:21:25', '2023-05-12 05:30:57', NULL),
(4, 'md', 'md', 'md', 'md', 'md', 0, '2023-05-12 05:30:53', '2023-05-12 05:30:53', NULL),
(5, 'blog 5', 'no', 'no', 'no', '1,2,3,4,5', 0, '2023-05-12 06:07:42', '2023-05-12 06:07:42', NULL),
(6, 'nto', 'g', 'nothing', 'no', '1,2,3,4,5', 0, '2023-05-12 06:08:25', '2023-05-12 06:08:25', NULL),
(7, 'q', 'q', 'q', 'q', 'q', 0, '2023-05-12 06:33:26', '2023-05-12 06:33:26', NULL),
(8, 'GGT', '<h2>dhdh&nbsp;<strong> htd</strong></h2>', 'WSDAASW', 'QWFD', 'dWD', 0, '2023-05-31 02:15:37', '2023-05-31 02:15:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_media`
--

CREATE TABLE `blog_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(50) DEFAULT NULL,
  `media_type` int(11) DEFAULT NULL,
  `url` varchar(10240) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_media`
--

INSERT INTO `blog_media` (`id`, `blog_id`, `media_type`, `url`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'uploads/16838824881.diamond.png', 0, '2023-05-12 03:38:08', '2023-05-12 07:00:39', '2023-05-12 07:00:39'),
(2, 1, 1, 'uploads/16838824882.gold.png', 0, '2023-05-12 03:38:08', '2023-05-12 07:00:41', '2023-05-12 07:00:41'),
(3, 1, 1, 'uploads/16838824883.silver.png', 0, '2023-05-12 03:38:08', '2023-05-12 07:00:43', '2023-05-12 07:00:43'),
(4, 1, 2, 'uploads/16838824881.video-1.mp4', 0, '2023-05-12 03:38:08', '2023-05-12 07:00:48', '2023-05-12 07:00:48'),
(5, 1, 2, 'uploads/16838824882.video-2.mp4', 0, '2023-05-12 03:38:08', '2023-05-12 07:00:49', '2023-05-12 07:00:49'),
(6, 1, 2, 'uploads/16838824883.video-3.mp4', 0, '2023-05-12 03:38:08', '2023-05-12 07:00:45', '2023-05-12 07:00:45'),
(7, 2, 1, 'uploads/blog16838876651.download (2).jfif', 0, '2023-05-12 05:04:25', '2023-05-12 07:01:25', '2023-05-12 07:01:25'),
(8, 2, 1, 'uploads/blog16838876652.download(4).jfif', 0, '2023-05-12 05:04:25', '2023-05-12 07:01:31', '2023-05-12 07:01:31'),
(9, 2, 2, 'uploads/blog16838876651.video-1.mp4', 0, '2023-05-12 05:04:25', '2023-05-12 07:01:28', '2023-05-12 07:01:28'),
(10, 2, 2, 'uploads/blog16838876652.video-2.mp4', 0, '2023-05-12 05:04:25', '2023-05-12 07:01:29', '2023-05-12 07:01:29'),
(11, 3, 1, 'uploads/16838886851.php.png', 0, '2023-05-12 05:21:25', '2023-05-12 05:21:25', NULL),
(12, 3, 1, 'uploads/16838886852.react.png', 0, '2023-05-12 05:21:25', '2023-05-15 00:49:59', '2023-05-15 00:49:59'),
(13, 3, 2, 'uploads/16838886851.video-1.mp4', 0, '2023-05-12 05:21:25', '2023-05-12 05:21:25', NULL),
(14, 3, 2, 'uploads/16838886852.video-2.mp4', 0, '2023-05-12 05:21:25', '2023-05-15 00:50:02', '2023-05-15 00:50:02'),
(15, 4, 1, 'uploads/16838892531.php.png', 0, '2023-05-12 05:30:53', '2023-05-12 05:30:53', NULL),
(16, 4, 1, 'uploads/16838892532.react.png', 0, '2023-05-12 05:30:53', '2023-05-12 05:31:02', '2023-05-12 05:31:02'),
(17, 4, 2, 'uploads/16838892531.video-1.mp4', 0, '2023-05-12 05:30:53', '2023-05-12 05:30:53', NULL),
(18, 4, 2, 'uploads/16838892532.video-2.mp4', 0, '2023-05-12 05:30:53', '2023-05-12 05:31:03', '2023-05-12 05:31:03'),
(19, 4, 1, 'uploads/16838892791.laravel.png', 0, '2023-05-12 05:31:19', '2023-05-15 00:50:16', '2023-05-15 00:50:16'),
(20, 4, 2, 'uploads/16838892791.video-2.mp4', 0, '2023-05-12 05:31:19', '2023-05-15 00:50:18', '2023-05-15 00:50:18'),
(21, 4, 1, 'uploads/16838892961.react.png', 0, '2023-05-12 05:31:36', '2023-05-15 00:50:19', '2023-05-15 00:50:19'),
(22, 4, 2, 'uploads/16838892971.video-3.mp4', 0, '2023-05-12 05:31:37', '2023-05-15 00:50:20', '2023-05-15 00:50:20'),
(23, 5, 1, 'uploads/16838914621.download.jfif', 0, '2023-05-12 06:07:42', '2023-05-12 06:07:42', NULL),
(24, 5, 2, 'uploads/16838914621.video-1.mp4', 0, '2023-05-12 06:07:42', '2023-05-12 06:07:42', NULL),
(25, 5, 2, 'uploads/16838914622.video-2.mp4', 0, '2023-05-12 06:07:42', '2023-05-15 00:50:27', '2023-05-15 00:50:27'),
(26, 6, 1, 'uploads/16838915051.diamond.png', 0, '2023-05-12 06:08:25', '2023-05-12 06:08:25', NULL),
(27, 6, 1, 'uploads/16838915052.gold.png', 0, '2023-05-12 06:08:25', '2023-05-12 06:08:25', NULL),
(28, 6, 2, 'uploads/16838915051.video-1.mp4', 0, '2023-05-12 06:08:25', '2023-05-12 06:08:25', NULL),
(29, 7, 1, 'uploads/16838930061.images.jfif', 0, '2023-05-12 06:33:26', '2023-05-12 06:33:26', NULL),
(30, 7, 2, 'uploads/16838930061.video-8.mp4', 0, '2023-05-12 06:33:26', '2023-05-12 06:33:26', NULL),
(31, 1, 1, 'uploads/16838946791.diamond.png', 0, '2023-05-12 07:01:19', '2023-05-15 00:47:46', '2023-05-15 00:47:46'),
(32, 1, 2, 'uploads/16838946791.video-2.mp4', 0, '2023-05-12 07:01:19', '2023-05-12 07:01:19', NULL),
(33, 2, 1, 'uploads/16838947011.download (2).jfif', 0, '2023-05-12 07:01:41', '2023-05-15 00:48:06', '2023-05-15 00:48:06'),
(34, 2, 2, 'uploads/16838947011.video-2.mp4', 0, '2023-05-12 07:01:41', '2023-05-15 00:48:11', '2023-05-15 00:48:11'),
(35, 3, 1, 'uploads/16841271041.images.jfif', 0, '2023-05-14 23:35:04', '2023-05-15 00:49:50', '2023-05-15 00:49:50'),
(36, 3, 1, 'uploads/16841271042.laravel.png', 0, '2023-05-14 23:35:04', '2023-05-15 00:49:54', '2023-05-15 00:49:54'),
(37, 3, 1, 'uploads/16841271043.php.png', 0, '2023-05-14 23:35:04', '2023-05-15 00:50:00', '2023-05-15 00:50:00'),
(38, 3, 2, 'uploads/16841271041.video-1.mp4', 0, '2023-05-14 23:35:04', '2023-05-15 00:50:04', '2023-05-15 00:50:04'),
(39, 3, 2, 'uploads/16841271042.video-2.mp4', 0, '2023-05-14 23:35:04', '2023-05-15 00:50:06', '2023-05-15 00:50:06'),
(40, 3, 2, 'uploads/16841271043.video-3.mp4', 0, '2023-05-14 23:35:04', '2023-05-15 00:50:07', '2023-05-15 00:50:07'),
(41, 1, 1, 'uploads/16841304311.laravel.png', 0, '2023-05-15 00:30:31', '2023-05-15 00:30:31', NULL),
(42, 1, 1, 'uploads/16841304312.php.png', 0, '2023-05-15 00:30:31', '2023-05-15 00:47:50', '2023-05-15 00:47:50'),
(43, 1, 1, 'uploads/16841304313.react.png', 0, '2023-05-15 00:30:31', '2023-05-15 00:47:48', '2023-05-15 00:47:48'),
(44, 1, 2, 'uploads/16841304311.video-2.mp4', 0, '2023-05-15 00:30:31', '2023-05-15 00:47:52', '2023-05-15 00:47:52'),
(45, 2, 1, 'uploads/16841314221.laravel.png', 0, '2023-05-15 00:47:02', '2023-05-15 00:48:07', '2023-05-15 00:48:07'),
(46, 2, 1, 'uploads/16841314222.php.png', 0, '2023-05-15 00:47:02', '2023-05-15 00:48:09', '2023-05-15 00:48:09'),
(47, 2, 1, 'uploads/16841314223.react.png', 0, '2023-05-15 00:47:02', '2023-05-15 00:47:02', NULL),
(48, 2, 2, 'uploads/16841314221.video-2.mp4', 0, '2023-05-15 00:47:02', '2023-05-15 00:47:02', NULL),
(49, 1, 1, 'uploads/16841317261.php.png', 0, '2023-05-15 00:52:06', '2023-05-15 00:57:11', '2023-05-15 00:57:11'),
(50, 1, 1, 'uploads/16841317262.react.png', 0, '2023-05-15 00:52:06', '2023-05-15 00:57:12', '2023-05-15 00:57:12'),
(51, 1, 2, 'uploads/16841317261.video-3.mp4', 0, '2023-05-15 00:52:06', '2023-05-15 00:57:08', '2023-05-15 00:57:08'),
(52, 1, 1, 'uploads/16841321501.php.png', 0, '2023-05-15 00:59:10', '2023-05-15 00:59:10', NULL),
(53, 1, 1, 'uploads/16841321502.react.png', 0, '2023-05-15 00:59:10', '2023-05-15 00:59:10', NULL),
(54, 1, 2, 'uploads/16841321501.video-2.mp4', 0, '2023-05-15 00:59:10', '2023-05-15 00:59:10', NULL),
(55, 8, 1, 'uploads/16855191371.diamond.png', 0, '2023-05-31 02:15:37', '2023-05-31 02:15:37', NULL),
(56, 8, 2, 'uploads/16855191371.video-8.mp4', 0, '2023-05-31 02:15:37', '2023-05-31 02:15:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Blog', 0, '2023-05-12 03:39:14', '2023-05-12 04:14:22', NULL),
(2, 'Vlog', 0, '2023-05-12 03:39:21', '2023-05-12 04:14:21', NULL),
(3, 'Content', 0, '2023-05-12 03:39:37', '2023-05-12 03:39:37', NULL),
(4, 'electronics', 0, '2023-05-12 06:04:09', '2023-05-12 06:04:09', NULL),
(5, 'mobile', 0, '2023-05-12 06:04:16', '2023-05-12 06:04:16', NULL),
(6, 'fastion', 0, '2023-05-12 06:04:28', '2023-05-12 06:04:28', NULL),
(7, 'Kitchen', 0, '2023-05-12 06:04:37', '2023-05-12 06:04:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_pages`
--

CREATE TABLE `cms_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_pages`
--

INSERT INTO `cms_pages` (`id`, `title`, `url`, `description`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'My title', 'My url', '<h2>My desrgadtfhrhgf c ngfsjhcription &nbsp;fghd a<strong> rg aehhhh dr</strong><a href=\" ehdrghd \"><strong> ehdrghd&nbsp;</strong></a></h2>', 0, '2023-05-12 04:11:32', '2023-05-31 02:11:52', NULL),
(2, 'not', 'not', '65535 charector store', 0, '2023-05-12 04:43:48', '2023-05-12 04:54:41', NULL),
(3, 'f', 'ff', 'fff', 0, '2023-05-12 06:14:43', '2023-05-12 06:14:43', NULL),
(4, 'a', 'aa', 'aa', 0, '2023-05-12 06:14:48', '2023-05-12 06:14:48', NULL),
(5, 'b', 'bb', 'bb', 0, '2023-05-12 06:14:53', '2023-05-12 06:14:53', NULL),
(6, 'c', 'c', 'cc', 0, '2023-05-12 06:15:00', '2023-05-12 06:15:00', NULL),
(7, 'For Pges', 'https://www.apple.com/in/pages', 'Information is an abstract concept that refers to that which has the power to inform. At the most fundamental level, information pertains to the interpretation (perhaps formally) of that which may be sensed, or their abstractions. Any natural process that is not completely random and any observable pattern in any medium can be said to convey some amount of information. Whereas digital signals and other data use discrete signs to convey information, other phenomena and artefacts such as analogue signals, poems, pictures, music or other sounds, and currents convey information in a more continuous form.[1] Information is not knowledge itself, but the meaning that may be derived from a representation through interpretation.[2]\r\n\r\nInformation is often processed iteratively: Data available at one step are processed into information to be interpreted and processed at the next step. For example, in written text each symbol or letter conveys information relevant to the word it is part of, each word conveys information relevant to the phrase it is part of, each phrase conveys information relevant to the sentence it is part of, and so on until at the final step information is interpreted and becomes knowledge in a given domain. In a digital signal, bits may be interpreted into the symbols, letters, numbers, or structures that convey the information available at the next level up. The key characteristic of information is that it is subject to interpretation and processing.', 0, '2023-05-13 03:33:40', '2023-05-13 03:33:40', NULL),
(8, 'not', 'no', 'no', 0, '2023-05-13 03:35:32', '2023-05-13 03:35:32', NULL),
(9, 'hello', 'lo', 'lo', 0, '2023-05-13 03:36:39', '2023-05-13 03:36:39', NULL),
(10, 'kjb', 'sze', 'wzser', 0, '2023-05-13 04:03:28', '2023-05-13 04:03:28', NULL),
(11, 'kjb', 'sze', 'wzser', 0, '2023-05-13 04:04:41', '2023-05-13 04:04:41', NULL),
(12, 'helo', 'url', 'descriptio0 n for me sir but i can', 0, '2023-05-13 04:06:15', '2023-05-13 04:06:15', NULL),
(13, 'helo', 'url', 'descriptio0 n for me sir but i can', 0, '2023-05-13 04:06:47', '2023-05-13 04:06:47', NULL),
(14, 'helo', 'url', 'descriptio0 n for me sir but i can', 0, '2023-05-13 04:07:23', '2023-05-13 04:07:23', NULL),
(15, 'helo', 'url', 'descriptio0 n for me sir but i can', 0, '2023-05-13 04:07:32', '2023-05-13 04:07:32', NULL),
(16, 'helo', 'url', 'descriptio0 n for me sir but i can', 0, '2023-05-13 04:08:09', '2023-05-13 04:08:09', NULL),
(17, 'dtgjudhfg', 'jghk', ',lkj.lkj.', 0, '2023-05-13 04:08:45', '2023-05-13 04:08:45', NULL),
(18, 'dtgjudhfg', 'jghk', ',lkj.lkj.', 0, '2023-05-13 04:09:56', '2023-05-13 04:09:56', NULL),
(19, 'dtgjudhfg', 'jghk', ',lkj.lkj.', 0, '2023-05-13 04:10:22', '2023-05-13 04:10:22', NULL),
(20, 'dtgjudhfg', 'jghk', ',lkj.lkj.', 0, '2023-05-13 04:10:45', '2023-05-13 04:10:45', NULL),
(21, 'dtgjudhfg', 'jghk', ',lkj.lkj.', 0, '2023-05-13 04:10:49', '2023-05-13 04:10:49', NULL),
(22, 'dtgjudhfg', 'jghk', ',lkj.lkj.', 0, '2023-05-13 04:11:34', '2023-05-13 04:11:34', NULL),
(23, 'wrgkjoi', 'huiuijwbhnk', 'ikjugsjubkq', 0, '2023-05-13 04:12:21', '2023-05-13 04:12:21', NULL),
(24, 'ef', 'sdfdef', 'sdf', 0, '2023-05-13 01:46:37', '2023-05-13 01:46:37', NULL),
(25, 'efetgeyght', 'sdfdef', 'sdf', 0, '2023-05-13 01:48:02', '2023-05-13 01:48:02', NULL),
(26, 'efetgeyght', 'sdfdef', 'sdfssssssssssssssssssssss', 0, '2023-05-13 01:50:37', '2023-05-13 01:50:37', NULL),
(27, 'efetgeyght', 'sdfdef', 'sdfssssssssssssssssssssss', 0, '2023-05-13 01:58:22', '2023-05-13 01:58:22', NULL),
(28, 'efetgeyght', 'sdfdef', 'sdfssssssssssssssssssssss', 0, '2023-05-13 01:59:19', '2023-05-13 01:59:19', NULL),
(29, 'efetgeyght', 'sdfdef', 'sdfssssssssssssssssssssss', 0, '2023-05-13 02:03:27', '2023-05-13 02:03:27', NULL),
(30, 'efetgeyght', 'sdfdef', 'sdfssssssyhkiyyhjk', 0, '2023-05-13 04:39:32', '2023-05-13 04:39:32', NULL),
(31, 'sg', 'rsgsf', 'gfsg', 0, '2023-05-13 04:41:17', '2023-05-13 04:41:17', NULL),
(32, 'sg', 'rsgsfwetgwr', 'gfsg', 0, '2023-05-13 04:43:41', '2023-05-13 04:44:26', NULL),
(33, '4terty', 'erhgfh', 'fghfghjjhj', 0, '2023-05-13 04:55:37', '2023-05-13 04:55:37', NULL),
(34, 'kjdshf', 'hgornkl', 'lkjhngrwoj', 0, '2023-05-13 05:01:45', '2023-05-13 05:01:45', NULL),
(35, 'kjdshf', 'hgornkl', 'lkjhngrwoj', 0, '2023-05-13 16:35:45', '2023-05-13 16:35:45', NULL),
(36, 'kjdshf', 'hgornkl', 'lkjhngrwoj', 0, '2023-05-13 16:35:45', '2023-05-13 16:35:45', NULL),
(37, 'kjdshf', 'hgornkl', 'lkjhngrwoj', 0, '2023-05-13 16:35:59', '2023-05-13 16:35:59', NULL),
(38, 'rewgde', 'thteh', 'hdh', 0, '2023-05-13 05:08:04', '2023-05-13 05:08:04', NULL),
(39, 'rewgde', 'thteh', 'hdh', 0, '2023-05-13 05:08:04', '2023-05-13 05:08:04', NULL),
(40, 'srgfds', 'gregrdegfd', 'dfgdf', 0, '2023-05-13 05:08:28', '2023-05-13 05:08:28', NULL),
(41, 'dasg', 'sgrswgrswg', 'grsw', 0, '2023-05-12 23:11:15', '2023-05-12 23:11:15', NULL),
(42, 'hvae a  india', 'pass', 'set time in india', 0, '2023-05-13 05:43:17', '2023-05-13 05:43:17', NULL),
(43, 'sgf', 'gdfg', 'sdgg', 0, '2023-05-13 00:43:57', '2023-05-13 00:43:57', NULL),
(44, 'sgf', 'gdfg', 'sdgg', 0, '2023-05-13 05:44:38', '2023-05-13 05:44:38', NULL),
(45, 'dgvf', 'dsvgfdsvg', 'vdzs', 0, '2023-05-13 05:15:17', '2023-05-13 05:16:29', NULL),
(46, 'yt', 'jutyju', 'tyjuityi', 0, '2023-05-13 05:19:38', '2023-05-13 05:19:38', NULL),
(47, '47', 'sg', 'sg', 0, '2023-05-13 05:25:29', '2023-05-13 05:25:29', NULL),
(48, 'EWF', 'GFREWG', 'GRRFG', 0, '2023-05-13 05:33:49', '2023-05-13 05:33:49', NULL),
(49, 'ASF', 'FASFC', 'FASCF', 0, '2023-05-13 05:40:24', '2023-05-13 05:40:24', NULL),
(50, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:03:40', '2023-05-13 06:03:40', NULL),
(51, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:03:42', '2023-05-13 06:03:42', NULL),
(52, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:03:45', '2023-05-13 06:03:45', NULL),
(53, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:03:46', '2023-05-13 06:03:46', NULL),
(54, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:03:50', '2023-05-13 06:03:50', NULL),
(55, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:03:52', '2023-05-13 06:03:52', NULL),
(56, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:03:54', '2023-05-13 06:03:54', NULL),
(57, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:03:55', '2023-05-13 06:03:55', NULL),
(58, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:00', '2023-05-13 06:04:00', NULL),
(59, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:02', '2023-05-13 06:04:02', NULL),
(60, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:03', '2023-05-13 06:04:03', NULL),
(61, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:04', '2023-05-13 06:04:04', NULL),
(62, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:06', '2023-05-13 06:04:06', NULL),
(63, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:07', '2023-05-13 06:04:07', NULL),
(64, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:08', '2023-05-13 06:04:08', NULL),
(65, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:10', '2023-05-13 06:04:10', NULL),
(66, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:12', '2023-05-13 06:04:12', NULL),
(67, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:13', '2023-05-13 06:04:13', NULL),
(68, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:14', '2023-05-13 06:04:14', NULL),
(69, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:15', '2023-05-13 06:04:15', NULL),
(70, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:17', '2023-05-13 06:04:17', NULL),
(71, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:18', '2023-05-13 06:04:18', NULL),
(72, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:19', '2023-05-13 06:04:19', NULL),
(73, 'g', 'gerg', 'regreg', 0, '2023-05-13 06:04:21', '2023-05-13 06:04:21', NULL),
(74, 'w', 'w', 'w', 0, '2023-05-13 07:05:34', '2023-05-13 07:05:34', NULL),
(75, 'title', 'not', 'not', 0, '2023-05-14 22:58:07', '2023-05-14 22:58:07', NULL),
(76, 'title', 'url', 'description', 0, '2023-05-14 23:04:37', '2023-05-14 23:04:37', NULL),
(77, 'd', 'dsds', 'dsd', 0, '2023-05-14 23:07:42', '2023-05-14 23:07:42', NULL),
(78, 'fugk', 'tuku', '<p>tykiutk<strong> &nbsp;</strong><i><strong>tkuyuk</strong></i></p>', 0, '2023-05-15 00:05:43', '2023-05-15 00:05:43', NULL),
(79, 'fugk', 'tuku', '<p>tykiutk<strong> &nbsp;</strong><i><strong>tkuyuk</strong></i></p>', 0, '2023-05-15 00:05:44', '2023-05-15 00:05:44', NULL),
(80, 'hello', 'https://youtu.be/ZFmMaAygGD4', '<blockquote><h4>hello hello<strong> bejbnjbju </strong><i><strong>nothing </strong></i><a href=\"vnsgu.net\"><i><strong>vnsgu.net</strong></i></a></h4><figure class=\"table\"><table><tbody><tr><td>cf</td><td>ca</td></tr><tr><td>ca</td><td>ca</td></tr><tr><td>ca</td><td>ca</td></tr></tbody></table></figure></blockquote>', 0, '2023-05-15 00:14:24', '2023-05-15 00:14:24', NULL),
(81, 'helo', 'no', '<h2>hello&nbsp;<strong> bbbbb</strong><i><strong> yy </strong></i><a href=\"laravel.com\"><i><strong>laravel.com</strong></i></a></h2>', 0, '2023-05-15 00:31:34', '2023-05-15 00:56:16', '2023-05-15 00:56:16'),
(82, 'hello', 'test', '<h2>test <strong>bvdfb &nbsp;</strong><i><strong>gsfgf &nbsp;</strong></i><a href=\"laravel.com\"><i><strong>laravel.com</strong></i></a></h2>', 0, '2023-05-15 00:53:11', '2023-05-15 00:56:21', '2023-05-15 00:56:21'),
(83, 'hello', 'test', '<p>fdsfd</p>', 0, '2023-05-15 00:53:33', '2023-05-15 00:56:35', '2023-05-15 00:56:35'),
(84, 'wdq', 'qwdw', '<p>dwqd</p>', 0, '2023-05-15 00:56:07', '2023-05-15 00:56:27', '2023-05-15 00:56:27'),
(85, 'hello', 'new', '<h2>test now<strong> hhh </strong><i><strong>hh</strong></i><a href=\" laravel.com\"><i><strong> &nbsp;laravel.com</strong></i></a></h2>', 0, '2023-05-15 01:00:34', '2023-05-15 01:00:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `link`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Menu name', 'Menu link', 0, '2023-05-12 03:35:44', '2023-05-12 04:25:43', NULL),
(2, 'menu', 'Menu link', 0, '2023-05-12 06:14:08', '2023-05-12 06:14:08', NULL),
(3, 'menu a', 'laravel.com1', 0, '2023-05-12 06:14:16', '2023-05-12 06:14:16', NULL),
(4, 'menuv', 's', 0, '2023-05-12 06:14:24', '2023-05-12 06:14:24', NULL),
(5, 'sva', 'sva', 0, '2023-05-12 06:14:28', '2023-05-12 06:25:25', NULL),
(6, 'sva', 'vsa', 0, '2023-05-12 06:14:31', '2023-05-12 06:25:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_03_052544_create_menus_table', 2),
(6, '2023_05_04_050438_create_blogs_table', 3),
(7, '2023_05_04_051058_create_blog_media_table', 3),
(8, '2023_05_08_112910_create_categories_table', 4),
(9, '2023_05_09_055520_create_portfolios_table', 5),
(10, '2023_05_11_080609_create_cms_pages_table', 6),
(11, '2023_05_11_124310_portfolio_media', 7),
(12, '2023_05_11_133445_portfolio_media', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('test@test.com', '$2y$10$ue2T5Z5YXiozOMuJcHbBZ.Rg2O0LxC9vZXe5zeNF7iNRKqrW4riDO', '2023-05-01 23:18:23'),
('Vinayvlk1234@gmail.com', '$2y$10$aWsuadSojvgTPHipiqfa0e0gZrGyi5cwPTLsWMKb0ewvJFYUuPBa6', '2023-05-13 02:22:18'),
('vivid.vinay97@gmail.com', '$2y$10$UkDyNkEHWQt.WRjfwlHNoeXUG06sk2I07tiqNnDDZ8N6xhFcM4cNy', '2023-05-13 03:05:35'),
('admin@admin.com', '$2y$10$ljeP2Niky4lXNHWNULT4zuPpkcKZZJ7qcY2lRK8Oxs65wWx8Yr.om', '2023-05-14 23:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `map_url` text NOT NULL,
  `custom_data` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `description`, `category`, `map_url`, `custom_data`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'My title', 'My description', '1', 'My map', '{\"text\":[\"1\"],\"value\":[\"2\"]}', 0, '2023-05-12 03:41:13', '2023-05-12 05:19:11', '2023-05-12 05:19:11'),
(2, 'title m', 'lo', '1', 'map', '{\"text\":[\"1\",\"3\",\"5\"],\"value\":[\"2\",\"4\",\"6\"]}', 0, '2023-05-12 05:05:40', '2023-05-12 05:09:47', '2023-05-12 05:09:47'),
(3, 'not', 'me', '1', 'map', '{\"text\":[\"1\"],\"value\":[\"2\"]}', 0, '2023-05-12 05:09:41', '2023-05-12 05:19:15', '2023-05-12 05:19:15'),
(4, 'not', 'no', '1', 'na', '{\"text\":[\"1\"],\"value\":[\"2\"]}', 0, '2023-05-12 05:12:07', '2023-05-12 05:19:23', '2023-05-12 05:19:23'),
(5, '1', '2', '3', 'w', '{\"text\":[\"w\",\"w\"],\"value\":[\"w\",\"w\"]}', 0, '2023-05-12 05:15:04', '2023-05-12 05:19:23', '2023-05-12 05:19:23'),
(6, 'md', '<h2>md</h2>', '1', 'md', '{\"text\":[\"md\"],\"value\":[\"mdg\"]}', 0, '2023-05-12 05:20:13', '2023-05-31 04:05:48', NULL),
(7, 'not', 'g', '1', 'map', '{\"text\":[\"1\",\"3\",\"dsw\",\"dws\"],\"value\":[\"2\",\"4\",\"dws\",\"dws\"]}', 0, '2023-05-12 06:11:36', '2023-05-15 00:47:26', NULL),
(8, 'php', 'pn', '1', 'na', '{\"text\":[\"2\"],\"value\":[\"3\"]}', 0, '2023-05-12 06:11:57', '2023-05-12 06:11:57', NULL),
(9, 'ny', 'e5y', '4', 're', '{\"text\":[\"r\",\"gre\"],\"value\":[\"ger\",\"er\"]}', 0, '2023-05-12 06:12:12', '2023-05-12 06:12:12', NULL),
(10, 'rge', 'ger', '1', 'erg', '{\"text\":[\"reg\"],\"value\":[\"ger\"]}', 0, '2023-05-12 06:12:24', '2023-05-14 23:35:45', NULL),
(11, 'eg', 'rge', '4', 'erg', '{\"text\":[\"re\"],\"value\":[\"r\"]}', 0, '2023-05-12 06:12:38', '2023-05-12 06:12:38', NULL),
(12, 'qq', 'qq', '3', 'map', '{\"text\":[\"1\"],\"value\":[\"1\"]}', 0, '2023-05-12 06:31:52', '2023-05-12 06:31:52', NULL),
(13, 'HELLO', '<h2>RTGRFDSG OLDF<strong>&nbsp;</strong></h2>', '1', 'NO', '{\"text\":[\"1\"],\"value\":[\"2\"]}', 0, '2023-05-31 04:04:35', '2023-05-31 04:05:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_medias`
--

CREATE TABLE `portfolio_medias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_medias`
--

INSERT INTO `portfolio_medias` (`id`, `portfolio_id`, `url`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'uploads/16838826731.laravel.png', 0, '2023-05-12 03:41:13', '2023-05-12 03:41:13', NULL),
(2, 1, 'uploads/16838826732.php.png', 0, '2023-05-12 03:41:13', '2023-05-12 04:39:00', NULL),
(3, 1, 'uploads/16838826733.react.png', 0, '2023-05-12 03:41:13', '2023-05-12 03:43:09', NULL),
(4, 2, 'uploads/portfolio16838877401.laravel.png', 0, '2023-05-12 05:05:40', '2023-05-12 05:08:04', NULL),
(5, 2, 'uploads/portfolio16838877402.php.png', 0, '2023-05-12 05:05:40', '2023-05-12 05:08:07', NULL),
(6, 2, 'uploads/portfolio16838877403.react.png', 0, '2023-05-12 05:05:40', '2023-05-12 05:08:09', NULL),
(7, 3, 'uploads/16838879811.laravel.png', 0, '2023-05-12 05:09:41', '2023-05-12 05:09:41', NULL),
(8, 3, 'uploads/16838879812.php.png', 0, '2023-05-12 05:09:41', '2023-05-12 05:09:41', NULL),
(9, 3, 'uploads/16838879813.react.png', 0, '2023-05-12 05:09:41', '2023-05-12 05:09:41', NULL),
(10, 4, 'uploads/portfolio16838881271.diamond.png', 0, '2023-05-12 05:12:07', '2023-05-12 05:12:07', NULL),
(11, 4, 'uploads/portfolio16838881272.gold.png', 0, '2023-05-12 05:12:07', '2023-05-12 05:12:07', NULL),
(12, 4, 'uploads/portfolio16838881273.silver.png', 0, '2023-05-12 05:12:07', '2023-05-12 05:12:07', NULL),
(13, 5, 'uploads/portfolio16838883041.laravel.png', 0, '2023-05-12 05:15:04', '2023-05-12 05:15:04', NULL),
(14, 5, 'uploads/portfolio16838883042.php.png', 0, '2023-05-12 05:15:04', '2023-05-12 05:15:04', NULL),
(15, 6, 'uploads/16838886131.laravel.png', 0, '2023-05-12 05:20:13', '2023-05-12 05:32:14', '2023-05-12 05:32:14'),
(16, 6, 'uploads/16838886132.php.png', 0, '2023-05-12 05:20:13', '2023-05-12 05:20:13', NULL),
(17, 6, 'uploads/16838886133.react.png', 0, '2023-05-12 05:20:13', '2023-05-15 00:50:45', '2023-05-15 00:50:45'),
(18, 6, 'uploads/16838898111.laravel.png', 0, '2023-05-12 05:40:11', '2023-05-15 00:50:46', '2023-05-15 00:50:46'),
(19, 7, 'uploads/16838916961.laravel.png', 0, '2023-05-12 06:11:36', '2023-05-12 06:11:36', NULL),
(20, 8, 'uploads/16838917171.php.png', 0, '2023-05-12 06:11:57', '2023-05-12 06:11:57', NULL),
(21, 9, 'uploads/16838917321.laravel.png', 0, '2023-05-12 06:12:12', '2023-05-12 06:12:12', NULL),
(22, 10, 'uploads/16838917441.download (2).jfif', 0, '2023-05-12 06:12:24', '2023-05-15 00:50:56', '2023-05-15 00:50:56'),
(23, 11, 'uploads/16838917581.images.jfif', 0, '2023-05-12 06:12:38', '2023-05-12 06:12:38', NULL),
(24, 12, 'uploads/16838929121.diamond.png', 0, '2023-05-12 06:31:52', '2023-05-12 06:31:52', NULL),
(25, 12, 'uploads/16838929122.gold.png', 0, '2023-05-12 06:31:52', '2023-05-12 06:31:52', NULL),
(26, 12, 'uploads/16838929123.silver.png', 0, '2023-05-12 06:31:52', '2023-05-12 06:31:52', NULL),
(27, 10, 'uploads/16841316661.php.png', 0, '2023-05-15 00:51:06', '2023-05-15 00:51:06', NULL),
(28, 6, 'uploads/16841317551.laravel.png', 0, '2023-05-15 00:52:35', '2023-05-15 00:57:23', '2023-05-15 00:57:23'),
(29, 6, 'uploads/16841317552.react.png', 0, '2023-05-15 00:52:35', '2023-05-15 00:57:26', '2023-05-15 00:57:26'),
(30, 6, 'uploads/16841321811.laravel.png', 0, '2023-05-15 00:59:41', '2023-05-15 00:59:56', '2023-05-15 00:59:56'),
(31, 6, 'uploads/16841321812.react.png', 0, '2023-05-15 00:59:41', '2023-05-15 00:59:51', '2023-05-15 00:59:51'),
(32, 13, 'uploads/16855256751.download.jpg', 0, '2023-05-31 04:04:35', '2023-05-31 04:04:51', '2023-05-31 04:04:51'),
(33, 13, 'uploads/16855257081.gold.png', 0, '2023-05-31 04:05:08', '2023-05-31 04:05:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `user_type` tinyint(255) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `is_active`, `user_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test', 'test', 'test@test.com', NULL, '$2y$10$C1wZNK.DIp5FzGLjL9BfEOFKd8Fqa6cFfbcSeFekfeynmmamKUUsG', 'M2m4GWI21fI7ugA0ShFyLPqSEQLoGJoGM7mo3fYXQ2dnqqL0wrIadAeTmwvH', 0, 1, '2023-05-01 01:06:34', '2023-05-15 00:58:42', NULL),
(2, 'admin', 'admin', 'admin@admin.com', NULL, '$2y$10$/mfHaNgil.x40v.VSoF05u58k9G/X59Fw6Y/j7sL3/dKkbfkPUfXS', NULL, 0, 2, '2023-05-01 02:06:45', '2023-05-12 03:30:22', NULL),
(3, 'hello', 'vivid_vinay', 'vivid.vinay97@gmail.com', NULL, '$2y$10$8WtopTpv9Mp3FMSJDg1HtuFCm0/iK8ffbrDqbP.zKUu.qprpRc2P.', NULL, 0, 1, '2023-05-12 06:16:31', '2023-05-12 06:16:31', NULL),
(4, 'qq', 'qq', 'qq@qq', NULL, '$2y$10$bEX.8gwjoN3d.Roo9V1UDuupztsaLDkavcsBfyJmlb6HmRgEmQiDy', NULL, 0, 1, '2023-05-12 06:18:09', '2023-05-12 06:18:09', NULL),
(5, 'aa', 'aa', 'aa@aabb', NULL, '$2y$10$E.ItAGodUw28hD/Qjywb7.tbGHkjfXlYrF2ExCBigu4gR7oJEvnle', NULL, 0, 1, '2023-05-12 06:18:49', '2023-05-12 06:18:49', NULL),
(6, 'rr', 'rr', 'rr@rr', NULL, '$2y$10$oD8h8DjQ77Kqlli9x6YorO27IGbEjlLY5ofLDW9EGaupeqTLmdJzu', NULL, 0, 1, '2023-05-12 06:19:08', '2023-05-12 06:19:08', NULL),
(7, 'Vinay Kalsariya', 'Vinay_vlk', 'Vinayvlk1234@gmail.com', NULL, '$2y$10$8NnrSvwKyj0YDbULA1E6LeG.p4Rp/Q3cPV94OrrSp5DJMj2NUEWeC', 'LifTWmwyDLOU4YSOdu7L32FCybhwYz7BlbQ8C1TBkfyAl7OK0STnZzJLusKJ', 0, 1, '2023-05-13 02:03:26', '2023-05-13 06:02:07', NULL),
(8, 'afrin nu', 'afrin', 'afrin@hk', NULL, '$2y$10$K/zYqcEwl9L2c/QVLhej6OnBRZmNavfP6UuiVwvxDLg5c3rDpaDLm', NULL, 0, 1, '2023-05-13 06:08:13', '2023-05-13 06:08:13', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_media`
--
ALTER TABLE `blog_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_pages`
--
ALTER TABLE `cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_medias`
--
ALTER TABLE `portfolio_medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_media`
--
ALTER TABLE `blog_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cms_pages`
--
ALTER TABLE `cms_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `portfolio_medias`
--
ALTER TABLE `portfolio_medias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
