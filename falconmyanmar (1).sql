-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 05:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `falconmyanmar`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `our_feature` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_choose_us_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `our_accreditation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_us`, `vision`, `mission`, `value`, `our_feature`, `why_choose_us_text`, `our_accreditation`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align: left;\"></p><p style=\"text-align: left;\"></p><ol></ol><p></p><p style=\"text-align: justify;\"><span style=\"font-family: &quot;Times New Roman&quot;;\">﻿</span><span style=\"font-size: 18px;\">﻿</span><span style=\"font-size: 36px;\">﻿</span><span style=\"font-size: 36px;\">﻿</span><span style=\"font-size: 18px;\">﻿</span><span style=\"font-size: 12px;\">﻿</span><span style=\"font-size: 18px;\">﻿</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">Founded in the year 2015, Falcon Engineering Company is based in Yangon,&nbsp;</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">Myanmar.</span></p><p></p><ol></ol><p></p><p style=\"text-align: justify;\"><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">It is an engineering and trading company, distributing fire fighting&nbsp;</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">equipment and related products to the local market from CHINA, INDIA, and&nbsp;</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">SINGAPORE.</span></p><p style=\"text-align: justify;\"><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">Company main business is distributing Fire Fighting and protection types of equipment</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">&nbsp;to construction, oil &amp; gas and shipbuilding industry.</span></p><p></p><ol></ol><p></p><p style=\"text-align: justify;\"><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">We also specialize in designing, installation &amp; maintenance of a complete fire&nbsp;</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">protection system.</span></p>', '<div style=\"text-align: justify;\"><div><span style=\"font-family: &quot;Times New Roman&quot;;\">﻿</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">﻿</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">To introduce and supply quality fire fighting products and to establish&nbsp;</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">a high level of ethical practice and working with our clients to meet their&nbsp;</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">safety objectives.</span></div></div>', '<div style=\"text-align: justify;\"><div><span style=\"font-family: &quot;Times New Roman&quot;;\">﻿</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">﻿</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">To provide quality fire safety engineering types of equipment and services to&nbsp;</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">support our clients\' loss control objectives and/or assist in their&nbsp;</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">understanding of technical issues related to fire fighting and preventing.</span></div></div>', '<div style=\"text-align: justify;\"><div><span style=\"font-family: &quot;Times New Roman&quot;;\">﻿</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">﻿</span><span style=\"font-size: 24px; font-family: &quot;Times New Roman&quot;;\">﻿</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">We value and respect.</span></div><ul><li><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">Quality and after-sales support</span></li><li><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">Listening to our client\'s needs and priorities</span></li><li><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">The appropriate technical solutions to meet client objectives</span></li><li><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">Long term solution for our clients</span></li></ul><div><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">-The environment</span></div><div><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">-Strict adherence to the code of ethics of our professional&nbsp;</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">associations</span></div></div>', '<div style=\"text-align: center;\"><span style=\"font-family: &quot;Times New Roman&quot;; font-size: 18px;\">﻿</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">﻿</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: 18px;\">﻿</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!</span></div>', '<div style=\"text-align: center;\"><span style=\"font-family: &quot;Times New Roman&quot;; font-size: 18px;\">﻿</span><span style=\"font-size: 18px; font-family: &quot;Times New Roman&quot;;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!</span></div>', '<div style=\"text-align: center;\"><span style=\"font-family: &quot;Times New Roman&quot;; font-size: 18px;\">﻿</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: 18px;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!</span></div>', NULL, '2019-11-13 20:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `photos`, `description`, `created_at`, `updated_at`) VALUES
(4, '5dccbf654a028_slider-1.jpg', 'OUR TEAM OF PROFESSIONALS WILL HELP YOU TURN YOUR DREAM HOME OR FLAT INTO A REALITY FAST. THE LOVE BOAT PROMISES SOMETHING FOR EVERYONE. NOW THE WORLD DON\'T MOVE TO THE BEAT OF JUST ONE', NULL, '2019-11-13 20:13:49'),
(5, '5dcbdfd5706b9_slider-2.jpg', 'WE DO NOT JUST REST ON OUR LAURELS. WE CONSTANTLY HAVE OUR FINGER ON THE PULSE OF THE LATEST FIRE PROTECTION TECHNOLOGY WHICH WE CAN ADOPT FOR FURTHER IMPROVEMENTS ON OUR PRODUCTS.', NULL, '2019-11-13 04:19:57'),
(6, '5dcbec488e757_slider-3.jpg', 'WE DO NOT JUST REST ON OUR LAURELS. WE CONSTANTLY HAVE OUR FINGER ON THE PULSE OF THE LATEST FIRE PROTECTION TECHNOLOGY WHICH WE CAN ADOPT FOR FURTHER IMPROVEMENTS ON OUR PRODUCTS.', NULL, '2019-11-13 05:13:04');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(3, 'On-Time Delivery', '<div style=\"line-height: 19px;\">We spare no effort in meticulously maintaining our inventory at optimum levels.  This is to ensure timely delivery to our customers, all the time.  Our after-sales service personnel also constantly seek for feedback from our customers so that we can address any areas which we are lacking.</div>', '2019-11-13 01:23:51', '2019-11-13 02:04:17'),
(8, 'Strict Compliance', '<p><span style=\"text-align: center;\">All our products fulfil the most stringent international standards and carry the requisite approvals from BOMBA, Malaysia.</span><br></p>', '2019-11-13 01:53:41', '2019-11-13 02:06:12'),
(9, 'Quality Control', '<p><span style=\"text-align: center;\">Even though our products are certified to have complied with the strictest international quality standards, constant in-house quality control is practised to give our customers 100% assurance of quality.</span><br></p>', '2019-11-13 01:54:23', '2019-11-13 01:54:23'),
(10, 'Proactive', '<p><span style=\"text-align: center;\">We do not just rest on our laurels. We constantly have our finger on the pulse of the latest fire protection technology which we can adopt for further improvements on our products.</span><br></p>', '2019-11-13 01:54:48', '2019-11-13 01:54:48'),
(11, 'One-Stop-Shop', '<p><span style=\"text-align: center;\">Not many fire protection equipment suppliers carry a comprehensive product range at competitive prices. We do. Just one call to us solves all your fire safety needs.</span><br></p>', '2019-11-13 01:55:14', '2019-11-13 20:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(7, 'Fire Extinguisher', '2019-11-13 20:01:01', '2019-11-15 02:14:38'),
(8, 'Filling series for fire', '2019-11-13 20:01:25', '2019-11-13 20:01:25'),
(9, 'Extinguisher', '2019-11-13 20:01:39', '2019-11-13 20:01:39'),
(10, 'Fire Hose Reel', '2019-11-13 20:01:58', '2019-11-13 20:01:58'),
(11, 'Fire Hydrant System', '2019-11-13 20:02:19', '2019-11-13 20:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `category_products`
--

CREATE TABLE `category_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_products`
--

INSERT INTO `category_products` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-09-04 23:28:16', '2019-09-04 23:28:16'),
(2, 1, 2, '2019-09-04 23:28:16', '2019-09-04 23:28:16'),
(3, 1, 3, '2019-09-04 23:28:16', '2019-09-04 23:28:16'),
(4, 1, 4, '2019-09-04 23:28:16', '2019-09-04 23:28:16'),
(5, 2, 3, '2019-09-05 00:28:00', '2019-09-05 00:28:00'),
(6, 2, 4, '2019-09-05 00:28:01', '2019-09-05 00:28:01'),
(7, 2, 5, '2019-09-05 00:28:01', '2019-09-05 00:28:01');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `photo`, `name`, `description`, `pdf`, `created_at`, `updated_at`) VALUES
(3, '5d85b8e760def_fire2.jpg', 'Fire Education and News', '<p style=\"text-align: justify; \"><span style=\"background-color: rgb(255, 255, 255);\"><span style=\"font-family: &quot;Times New Roman&quot;;\">The \"Fire Education and the News\" program is being conducted under a grant from FEMA to the Illinois Fire Inspector\'s Association. Participating fire departments receive on-site technical assistance from a professional media consultant, as well as ongoing telephone and written consultation until the production is complete. Fees for consulting personnel are absorbed through the Illinois Fire Inspector\'s grant.&nbsp;</span><span style=\"font-size: 14px;\">﻿</span></span><br></p>', '5d85b8e7616c0_Fire_Education_and_the_News.pdf', '2019-09-20 09:25:47', '2019-09-20 23:15:11'),
(4, '5d885acfd1c22_fire1.jpg', 'Fire Education', '<p style=\"text-align: justify; \"><span style=\"font-size: 14px; font-family: &quot;Times New Roman&quot;;\">The U.S. Fire Administration’s (USFA) Office of Fire Preven</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: 14px;\">tion and Arson Control has prepared this short guide in evaluating&nbsp;</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: 14px;\">local public fire education programs to offer the fire service tools&nbsp;</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: 14px;\">to evaluate public fire education programs. USFA also has pre</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: 14px;\">pared individual evaluation guidelines for use with specific USFA</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: 14px;\">campaigns, such as Check Your Hot Spots!, Curious Kids Set</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: 14px;\">Fires, This is Fire and Let’s Retire Fire.</span></p>', '5d885acfd1d51_Short_Guide_to_Evaluating_Local_Public_F.pdf', '2019-09-20 21:43:23', '2019-09-23 09:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `homepages`
--

CREATE TABLE `homepages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_04_044317_create_categories_table', 2),
(4, '2019_09_04_050848_create_products_table', 3),
(5, '2019_09_05_052117_create_category_products_table', 4),
(6, '2019_09_06_042327_create_projects_table', 5),
(7, '2019_09_06_052121_create_abouts_table', 6),
(8, '2019_09_07_135419_create_ourteams_table', 7),
(9, '2019_09_07_145723_create_whychooseuses_table', 8),
(10, '2019_09_07_175258_create_slidephotos_table', 9),
(11, '2019_09_20_132839_create_downloads_table', 10),
(12, '2019_11_13_052125_create_homepages_table', 11),
(13, '2019_11_13_070248_create_cards_table', 12),
(14, '2019_11_13_090907_create_banners_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `ourteams`
--

CREATE TABLE `ourteams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourteams`
--

INSERT INTO `ourteams` (`id`, `photo`, `name`, `position`, `fb_link`, `created_at`, `updated_at`) VALUES
(1, '5d73bb73c6e26_our-teachers_02.jpg', 'Prodip Ghosh', 'Founder & CEO', 'https://www.facebook.com', '2019-09-07 07:45:15', '2019-09-07 07:45:15'),
(2, '5d73bb9670fc8_our-teachers_04.jpg', 'Emran Khan', 'Web-Developer', 'https://www.facebook.com', '2019-09-07 07:45:50', '2019-09-07 07:45:50'),
(3, '5d73bbc3df00f_teacher_1.jpg', 'Prodip Ghosh', 'Founder & CEO', 'https://www.facebook.com', '2019-09-07 07:46:35', '2019-09-07 07:46:35'),
(4, '5d73bbdc84abb_teacher_2.jpg', 'Jakaria Khan', 'Founder & CEO', 'https://www.facebook.com', '2019-09-07 07:47:00', '2019-09-07 07:47:00');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `summertable` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `download_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `photo`, `title`, `category_id`, `detail`, `summertable`, `download_link`, `created_at`, `updated_at`) VALUES
(13, '5dccc16fe0dee_extinguisher.png', '1 kg Fire Extinguisher', 7, '<div style=\"line-height: 19px;\"><br><div style=\"\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iure nesciunt ex tenetur eligendi quae dignissimos minus esse, consectetur vel repellendus architecto debitis, ad accusamus natus minima ducimus amet dolor?</div></div>', '<p><br></p><table class=\"table table-bordered\"><tbody><tr><td>erwrwetret</td><td>etertert</td><td>ertertrt</td></tr><tr><td>tertertre</td><td>etert</td><td>ertert</td></tr></tbody></table><p><br></p>', '5dccbefe2d8ac_Short_Guide_to_Evaluating_Local_Public_F.pdf', '2019-11-13 20:09:23', '2019-11-13 20:22:31'),
(14, '5dccc1e5869c7_extinguisher.png', '2 kg Fire Extinguisher', 7, '<div style=\"line-height: 19px;\"><div style=\"\">ssfssfdfs.</div></div>', '<p><br></p><table class=\"table table-bordered\"><tbody><tr><td>dsfsf</td><td>jono</td></tr><tr><td>ojoj</td><td>jpjpoj</td></tr><tr><td>pjpjo</td><td>pjpjpjp</td></tr></tbody></table><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>', '5dccfac2c23fb_ER_diagram.pdf', '2019-11-13 20:24:29', '2019-11-15 02:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `photo`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, '5d7b3e33316ba_banner-bg.jpg', 'Genting Highland', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!', '2019-09-05 22:25:10', '2019-09-13 00:28:59'),
(4, '5d7a184cc4b65_cns-3.jpg', 'Fire Pump', '<div style=\"text-align: center;\"><span style=\"font-size: 1rem;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!</span></div>', '2019-09-05 22:44:24', '2019-09-12 03:35:00'),
(5, '5d7a183bb749f_achievments.jpg', 'Mid Valley', '<p><span style=\"font-family: Impact;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!</span><span style=\"font-family: Impact; font-size: 24px;\">﻿</span><span style=\"font-size: 24px; font-family: Impact;\">﻿</span></p>', '2019-09-05 22:44:55', '2019-09-12 03:34:43'),
(6, '5d7a182675ea4_banner-bg.jpg', 'Condo building', '<p style=\"text-align: center; \">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-06 09:25:06', '2019-09-12 03:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `slidephotos`
--

CREATE TABLE `slidephotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slidephotos`
--

INSERT INTO `slidephotos` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(1, '5d746c1c910e2_client_logo-2.png', '2019-09-07 11:45:29', '2019-09-07 20:19:00'),
(3, '5d746c222f63f_client_logo-3.png', '2019-09-07 12:07:04', '2019-09-07 20:19:06'),
(4, '5d746c278919c_client_logo-4.png', '2019-09-07 20:14:56', '2019-09-07 20:19:11'),
(5, '5d746c3032ad1_client_logo-5.png', '2019-09-07 20:18:14', '2019-09-07 20:19:20'),
(6, '5d746c149c77b_client_logo-1.png', '2019-09-07 20:18:52', '2019-09-07 20:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$One6bd1o.tkPWmwPjT9ktuXDZrdAITW/iWKS8g6HGkIrXw9KPAsNy', NULL, '2019-09-02 22:23:18', '2019-11-17 02:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `whychooseuses`
--

CREATE TABLE `whychooseuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fontawesome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whychooseuses`
--

INSERT INTO `whychooseuses` (`id`, `fontawesome`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 'fa fa-users', 'Best Customer Services', '<p style=\"text-align: center; \">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-07 09:18:46', '2019-09-07 10:26:29'),
(2, 'fa fa-rocket', 'QUALIFIED EXPERTS', '<p style=\"text-align: center;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-07 09:23:14', '2019-11-13 20:19:06'),
(4, 'fa fa-wrench', '30+ YEARS OF EXPERIENCE', '<p style=\"text-align: center; \">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-07 10:02:12', '2019-09-07 10:25:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_products`
--
ALTER TABLE `category_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepages`
--
ALTER TABLE `homepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourteams`
--
ALTER TABLE `ourteams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slidephotos`
--
ALTER TABLE `slidephotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whychooseuses`
--
ALTER TABLE `whychooseuses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category_products`
--
ALTER TABLE `category_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `homepages`
--
ALTER TABLE `homepages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ourteams`
--
ALTER TABLE `ourteams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slidephotos`
--
ALTER TABLE `slidephotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whychooseuses`
--
ALTER TABLE `whychooseuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
