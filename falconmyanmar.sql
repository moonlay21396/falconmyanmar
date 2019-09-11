-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2019 at 09:07 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

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
(1, '<div style=\"text-align: left;\"><div style=\"text-align: justify;\"><span style=\"font-size: 18px;\">﻿</span><span style=\"font-size: 24px;\">Founded in year 2015, Falcon Engineering Company is based in Yangon,</span><span style=\"font-size: 24px;\">Myanmar.</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 24px;\"><br></span></div><div style=\"text-align: justify;\"><span style=\"font-size: 0.875rem;\"><br></span></div><div><div style=\"text-align: justify;\"><span style=\"font-size: 24px;\">It is an engineering and trading company, distributing fire fighting&nbsp;</span><span style=\"font-size: 24px;\">equipment and related products to local market from CHINA, INDIA and&nbsp;</span><span style=\"font-size: 24px;\">SINGAPORE.</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 24px;\"><br></span></div><div style=\"text-align: justify;\"><span style=\"font-size: 0.875rem;\"><br></span></div><div><div style=\"text-align: justify;\"><span style=\"font-size: 24px;\">Company main business is distributing Fire Fighting and protection&nbsp;</span><span style=\"font-size: 24px;\">equipments to construction, oil &amp; gas and ship building industry.</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 24px;\"><br></span></div><div style=\"text-align: justify;\"><span style=\"font-size: 0.875rem;\"><br></span></div><div><div style=\"text-align: justify;\"><span style=\"font-size: 24px;\">We also specialize in designing, installation &amp; maintenance of complete fire&nbsp;</span><span style=\"font-size: 24px;\">protection system.</span></div></div></div></div></div>', '<div style=\"text-align: justify;\"><div><span style=\"font-size: 18px;\">To introduce and supply quality fire fighting products and to establish&nbsp;</span><span style=\"font-size: 18px;\">a high level of ethical practise and working with our clients to meet their&nbsp;</span><span style=\"font-size: 18px;\">safety objectives.</span></div></div>', '<div style=\"text-align: justify;\"><div><span style=\"font-size: 18px;\">To provide quality fire safety engineering equipments and services to&nbsp;</span><span style=\"font-size: 18px;\">support our client•s loss control objectives and/or assist in their&nbsp;</span><span style=\"font-size: 18px;\">understanding of technical issues related to fire fighting and preventing.</span></div></div>', '<div style=\"text-align: justify;\"><div><span style=\"font-size: 18px;\">We values and respect.</span></div><div><span style=\"font-size: 18px;\">-Quality and after sales support</span></div><div><span style=\"font-size: 18px;\">- Listening to our client\'s needs and priorities</span></div><div><span style=\"font-size: 18px;\">-The appropriate technical solutions to meet client objectives</span></div><div><span style=\"font-size: 18px;\">-Long term solution for our clients</span></div><div><span style=\"font-size: 18px;\">-The environment</span></div><div><span style=\"font-size: 18px;\">-Strict adherence to the code of ethics of our professional&nbsp;</span><span style=\"font-size: 18px;\">associations</span></div></div>', '<div style=\"text-align: center;\"><span style=\"font-size: 18px; font-family: &quot;Courier New&quot;;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!</span></div>', '<div style=\"text-align: center;\"><span style=\"font-size: 18px; font-family: &quot;Courier New&quot;;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!</span></div>', '<div style=\"text-align: center;\"><span style=\"font-family: &quot;Courier New&quot;; font-size: 18px;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!</span></div>', NULL, '2019-09-07 10:43:43');

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
(1, 'Fire Extinguishers', NULL, NULL),
(2, 'Filling Series for Fire', NULL, NULL),
(3, 'Extinguisher', NULL, NULL),
(4, 'Fire Hose Reel', NULL, NULL),
(5, 'Fire Hydrant System', NULL, NULL);

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
(10, '2019_09_07_175258_create_slidephotos_table', 9);

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
  `model_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `part_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_extinguishant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pressurised_agent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_pressure` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_pressure` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_range` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discharge_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overall_height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cylinder_diameter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_material` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finishing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_of_fire` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufactured_and_approved` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `throw_range_discharge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `photo`, `title`, `model_no`, `part_no`, `capacity`, `type_of_extinguishant`, `type`, `pressurised_agent`, `working_pressure`, `test_pressure`, `temperature_range`, `discharge_time`, `overall_height`, `cylinder_diameter`, `full_weight`, `body_material`, `finishing`, `class_of_fire`, `fire_rating`, `manufactured_and_approved`, `throw_range_discharge`, `detail`, `created_at`, `updated_at`) VALUES
(1, '5d714e4a8a7e2_extinguisher.png', '2 kg Fire Extinguisher', 'UF – 1', 'FEU – 1D', '1.0 kg', 'ABC Dry Powder', 'Stored Pressure', 'Nitrogen', '12 bar (174psi)', '25 bar (362.5psi)', '-20°C to 60°C', '7s', '330mm', '79 mm', '1.9 kg', 'Cold Rolled Steel', 'Red (RAL 3000)', 'A, B, C, E', '5A 21B', 'MS 1539 PART 1 : 2002', '3-4 m (approx.)', '<p style=\"text-align: center;\"><font color=\"#333333\" face=\"Roboto, sans-serif\"><span style=\"font-size: 14px;\"><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!</i></span></font><br></p>', '2019-09-04 23:28:16', '2019-09-05 11:34:58'),
(2, '5d714d7011ea4_extinguisher.png', '1 kg Fire Extinguisher', 'UF – 1', 'FEU – 1D', '1.0 kg', 'ABC Dry Powder', 'Stored Pressure', 'Nitrogen', '12 bar (174psi)', '25 bar (362.5psi)', '-20°C to 60°C', '7s', '330mm', '79 mm', '1.9 kg', 'Cold Rolled Steel', 'Red (RAL 3000)', 'A, B, C, E', '5A 21B', 'MS 1539 PART 1 : 2002', '3-4 m (approx.)', '<p style=\"text-align: center; \"><span style=\"font-family: &quot;Courier New&quot;;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!</span><br></p>', '2019-09-05 00:28:00', '2019-09-06 00:05:18');

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
(1, '5d71ea6663b5d_cns-2.jpg', 'Legoland Malaysia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!', '2019-09-05 22:13:01', '2019-09-06 09:40:54'),
(2, '5d71ea4442c7e_cns-1.jpg', 'Genting Highland', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!', '2019-09-05 22:25:10', '2019-09-06 09:40:49'),
(4, '5d71eb30d41e0_cns-3.jpg', 'Fire Pump', '<div style=\"text-align: center;\"><span style=\"font-size: 1rem;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!</span></div>', '2019-09-05 22:44:24', '2019-09-06 09:39:16'),
(5, '5d71eb4f7c79d_cns-2.jpg', 'Mid Valley', '<p><span style=\"font-family: Impact;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!</span><span style=\"font-family: Impact; font-size: 24px;\">﻿</span><span style=\"font-size: 24px; font-family: Impact;\">﻿</span></p>', '2019-09-05 22:44:55', '2019-09-06 09:38:59'),
(6, '5d72815aef675_construction.jpg', 'Condo building', '<p style=\"text-align: center; \">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-06 09:25:06', '2019-09-06 09:35:05');

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$VSPMDf2CvAbhBJs18oSDqe1GMV8VAgsEOlu2XH./l/0XEYvuHERsm', NULL, '2019-09-02 22:23:18', '2019-09-02 22:23:18');

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
(2, 'fa fa-rocket', 'QUALIFIED EXPERTS', '<p style=\"text-align: center;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-07 09:23:14', '2019-09-07 10:26:08'),
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_products`
--
ALTER TABLE `category_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ourteams`
--
ALTER TABLE `ourteams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
