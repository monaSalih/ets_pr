-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 03:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ets`
--

-- --------------------------------------------------------

--
-- Table structure for table `academies`
--

CREATE TABLE `academies` (
  `academy_id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academies`
--

INSERT INTO `academies` (`academy_id`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Beattyland', '2024-02-14 11:20:37', '2024-02-14 11:20:37'),
(2, 'New Nat', '2024-02-14 11:20:37', '2024-02-14 11:20:37'),
(3, 'South Hilma', '2024-02-14 11:20:37', '2024-02-14 11:20:37'),
(4, 'Bernhardburgh', '2024-02-14 11:20:37', '2024-02-14 11:20:37'),
(5, 'West Tyrique', '2024-02-14 11:20:37', '2024-02-14 11:20:37'),
(6, 'Alanburgh', '2024-02-14 11:20:37', '2024-02-14 11:20:37'),
(7, 'North Wilfordmouth', '2024-02-14 11:20:37', '2024-02-14 11:20:37'),
(8, 'East Maudieberg', '2024-02-14 11:20:37', '2024-02-14 11:20:37'),
(9, 'North London', '2024-02-14 11:20:37', '2024-02-14 11:20:37'),
(10, 'Kingbury', '2024-02-14 11:20:37', '2024-02-14 11:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `cohorts`
--

CREATE TABLE `cohorts` (
  `cohort_id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `training_type` varchar(255) NOT NULL,
  `technology` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cohorts`
--

INSERT INTO `cohorts` (`cohort_id`, `number`, `training_type`, `technology`, `created_at`, `updated_at`) VALUES
(1, 8, 'quidem', 'doloribus', '1982-10-15 15:39:39', '1977-12-07 19:04:01'),
(2, 6, 'voluptatibus', 'provident', '2006-05-09 20:58:10', '1987-06-22 08:02:30'),
(3, 9, 'rerum', 'in', '2006-10-30 02:18:10', '2021-10-10 00:10:50'),
(4, 1, 'et', 'quas', '1971-03-31 23:01:48', '2018-02-03 12:05:44'),
(5, 3, 'minus', 'ducimus', '1977-06-12 01:44:42', '2020-06-18 16:11:24'),
(6, 1, 'nihil', 'aliquid', '1998-11-18 19:26:04', '1978-02-07 09:44:40'),
(7, 7, 'ex', 'illo', '2016-02-18 17:22:27', '2012-05-16 21:58:06'),
(8, 6, 'ipsa', 'ipsa', '2001-06-21 02:12:16', '2000-04-07 14:18:50'),
(9, 1, 'possimus', 'incidunt', '1974-06-11 07:17:22', '1991-12-30 05:11:02'),
(10, 7, 'impedit', 'qui', '2021-05-23 11:15:48', '2008-08-09 14:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `employment_statuses`
--

CREATE TABLE `employment_statuses` (
  `employment_stuts_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employment_statuses`
--

INSERT INTO `employment_statuses` (`employment_stuts_id`, `created_at`, `updated_at`) VALUES
(8, '1984-06-18 06:35:24', '1994-11-25 05:36:02'),
(9, '1976-11-04 19:04:24', '1983-10-22 05:20:17'),
(3, '1987-03-18 00:51:13', '2008-12-28 18:56:23'),
(8, '1970-11-01 09:58:41', '2024-01-09 19:55:23'),
(5, '1971-12-31 01:52:05', '2005-02-06 23:22:54'),
(1, '2018-05-25 21:15:40', '1977-03-03 07:08:26'),
(6, '1980-12-21 22:00:22', '1995-11-30 15:57:51'),
(8, '1991-09-28 05:32:54', '2006-08-27 19:05:31'),
(7, '2014-10-25 15:44:12', '1992-08-06 07:52:48'),
(3, '1974-11-06 20:06:27', '2017-08-16 06:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `employment_types`
--

CREATE TABLE `employment_types` (
  `employment_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employment_types`
--

INSERT INTO `employment_types` (`employment_id`, `type`, `created_at`, `updated_at`) VALUES
(5, 'minus', '1983-09-03 13:21:00', '1984-02-27 11:57:14'),
(13, 'illo', '2018-12-31 02:24:27', '1984-12-18 15:43:01'),
(34, 'unde', '1977-09-23 21:30:55', '1992-08-10 08:19:40'),
(42, 'modi', '2023-05-28 18:31:25', '2021-09-16 08:44:39'),
(45, 'accusantium', '2016-11-28 09:02:47', '2005-01-30 17:01:25'),
(86, 'ut', '1993-06-08 18:06:18', '2015-06-03 07:05:09'),
(87, 'placeat', '2013-06-30 13:22:59', '2005-02-09 02:39:55'),
(91, 'animi', '1994-02-12 10:38:33', '1972-05-14 04:40:01'),
(95, 'quis', '1988-07-18 23:01:44', '1981-09-07 09:35:48'),
(97, 'porro', '2009-03-09 18:25:33', '2022-01-23 11:00:12');

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
-- Table structure for table `funds`
--

CREATE TABLE `funds` (
  `training_info_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cohort_id` varchar(255) NOT NULL,
  `academy_id` varchar(255) NOT NULL,
  `fund_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`training_info_id`, `cohort_id`, `academy_id`, `fund_id`, `created_at`, `updated_at`) VALUES
(48, 'labore', 'quaerat', 6, '2000-01-21 08:44:03', '1971-07-20 08:44:02'),
(5, 'excepturi', 'id', 10, '2014-09-11 08:40:48', '1977-11-02 18:38:45'),
(66, 'vero', 'ab', 4, '1979-02-26 09:38:21', '2018-03-09 13:11:34'),
(58, 'dignissimos', 'dolorem', 2, '1978-08-31 23:52:58', '1970-08-07 13:40:31'),
(34, 'quae', 'dolorem', 2, '1984-03-05 19:38:39', '1981-03-10 11:07:18'),
(7, 'facere', 'doloremque', 5, '1971-08-01 15:06:03', '1987-04-07 11:41:00'),
(56, 'quas', 'rem', 7, '2017-11-08 23:38:38', '2010-12-19 04:30:32'),
(88, 'eaque', 'minima', 2, '2018-08-17 22:24:05', '1971-02-01 04:37:42'),
(92, 'ipsa', 'beatae', 5, '2023-04-25 23:55:00', '1984-12-19 17:38:32'),
(9, 'quo', 'officia', 9, '1993-04-15 17:26:46', '1975-11-29 00:50:31');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_02_14_131038_create_users_table', 1),
(5, '2024_02_14_134342_create_training_infos_table', 1),
(6, '2024_02_14_134917_create_survey_infos_table', 1),
(7, '2024_02_14_135051_create_cohorts_table', 1),
(8, '2024_02_14_135101_create_employment_statuses_table', 1),
(9, '2024_02_14_135110_create_funds_table', 1),
(10, '2024_02_14_135118_create_employment_types_table', 1),
(11, '2024_02_14_135128_create_academies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `survey_infos`
--

CREATE TABLE `survey_infos` (
  `survey_info_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `training_id` bigint(20) UNSIGNED DEFAULT NULL,
  `response_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `survey_infos`
--

INSERT INTO `survey_infos` (`survey_info_id`, `name`, `url`, `training_id`, `response_link`, `created_at`, `updated_at`) VALUES
(1, 'quasi', 'http://www.denesik.net/praesentium-cum-aut-est-sunt-dolor-ut', 20, 'http://nolan.com/sapiente-dolores-quia-et-qui-repellendus-excepturi', '1985-05-27 20:54:41', '2016-06-03 13:01:07'),
(2, 'et', 'http://www.pfeffer.com/quidem-hic-a-inventore-sit-asperiores-nostrum', 12, 'https://yost.com/officia-pariatur-reprehenderit-nostrum-qui-qui-quod-hic.html', '1989-08-12 22:11:17', '1988-02-21 15:02:51'),
(3, 'voluptatem', 'http://runolfsson.com/et-voluptas-aliquam-dignissimos-voluptates-sint-quo-ullam', 4, 'http://www.johns.org/', '1980-02-21 10:07:52', '1985-05-15 07:13:24'),
(4, 'nisi', 'http://www.hettinger.info/labore-fugiat-et-repellat-rerum-sit-corrupti-quas', 28, 'http://cummings.com/', '2004-06-07 15:28:52', '2008-02-13 21:48:01'),
(5, 'reiciendis', 'https://www.farrell.com/ut-qui-deserunt-quam-qui-in-quibusdam', 27, 'http://www.morar.biz/temporibus-aspernatur-fuga-impedit-iste-aut-id-consectetur.html', '2015-03-05 02:24:39', '2022-09-07 23:41:13'),
(6, 'dignissimos', 'https://bartoletti.com/vel-qui-et-voluptatum-ut-harum.html', 13, 'http://www.conn.com/', '1980-09-27 09:22:16', '1987-05-16 02:28:55'),
(7, 'ipsum', 'http://www.monahan.com/assumenda-cumque-ut-error.html', 4, 'http://olson.com/', '1991-12-04 12:47:53', '1989-04-04 15:10:38'),
(8, 'illo', 'https://www.ruecker.info/voluptatum-pariatur-quibusdam-quas-ut', 22, 'http://www.klein.biz/', '1977-01-25 14:37:26', '2007-01-28 08:25:24'),
(9, 'ipsa', 'http://www.bernier.com/officia-velit-nemo-repudiandae-aut-quam-quia', 6, 'https://swift.com/non-quia-dolor-eos-eum-deleniti-aut.html', '2001-05-19 06:02:22', '2000-01-23 20:01:05'),
(10, 'ut', 'http://www.beier.com/nostrum-omnis-nihil-fugiat-in', 15, 'http://jacobs.com/incidunt-ut-quis-et-et-suscipit-fugiat', '1998-05-14 20:32:52', '1978-05-28 14:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `training_infos`
--

CREATE TABLE `training_infos` (
  `training_info_id` bigint(20) UNSIGNED NOT NULL,
  `cohort_id` varchar(255) NOT NULL,
  `academy_id` varchar(255) NOT NULL,
  `fund_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_infos`
--

INSERT INTO `training_infos` (`training_info_id`, `cohort_id`, `academy_id`, `fund_id`, `created_at`, `updated_at`) VALUES
(1, 'omnis', 'qui', 8, '1980-09-15 22:40:38', '1993-09-18 14:08:17'),
(2, 'quo', 'sed', 5, '1977-11-13 06:25:23', '2004-06-12 06:26:50'),
(3, 'eos', 'nemo', 10, '1978-02-02 13:28:39', '1990-09-20 09:33:30'),
(4, 'et', 'nostrum', 9, '1997-03-20 17:15:45', '1996-11-04 00:38:27'),
(5, 'repellat', 'aut', 8, '1989-08-07 23:19:40', '1995-12-20 01:46:22'),
(6, 'reiciendis', 'eligendi', 2, '1971-09-26 10:15:16', '2011-10-25 18:33:16'),
(7, 'est', 'quis', 8, '1998-07-13 21:50:30', '1982-11-09 00:13:18'),
(8, 'dolorem', 'atque', 10, '2008-07-28 07:52:40', '2002-10-06 10:42:14'),
(9, 'iure', 'neque', 10, '1982-05-26 05:57:16', '1973-10-31 10:30:11'),
(10, 'ullam', 'magni', 3, '1974-05-25 10:31:34', '2023-07-26 10:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `training_info_id` tinyint(4) DEFAULT NULL,
  `is_newsletter` varchar(255) NOT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `email_verification` varchar(255) DEFAULT NULL,
  `is_email_verified` tinyint(4) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `mobile_verification` varchar(255) DEFAULT NULL,
  `is_mobile_verified` tinyint(4) NOT NULL,
  `nationality` tinyint(4) NOT NULL,
  `country` text NOT NULL,
  `passport_number` varchar(255) DEFAULT NULL,
  `national_id` bigint(20) DEFAULT NULL,
  `birthdate` date NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `second_name` varchar(255) DEFAULT NULL,
  `third_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `ar_first_name` varchar(255) DEFAULT NULL,
  `ar_second_name` varchar(255) DEFAULT NULL,
  `ar_third_name` varchar(255) DEFAULT NULL,
  `ar_last_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `martial_status` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `education` varchar(255) NOT NULL,
  `educational_status` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `educational_background` varchar(255) NOT NULL,
  `ar_writing` varchar(255) DEFAULT NULL,
  `ar_speaking` varchar(255) DEFAULT NULL,
  `en_writing` varchar(255) DEFAULT NULL,
  `en_speaking` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `relative_mobile_1` bigint(20) NOT NULL DEFAULT 4234324234,
  `relative_relation_1` varchar(255) NOT NULL DEFAULT 'relative_relation_1',
  `fullName_1` varchar(255) NOT NULL,
  `relative_mobile_2` bigint(20) NOT NULL DEFAULT 3242343242,
  `relative_relation_2` varchar(255) NOT NULL,
  `fullName_2` varchar(255) DEFAULT NULL,
  `is_committed` varchar(255) NOT NULL,
  `is_submitted` tinyint(4) NOT NULL,
  `status` varchar(255) NOT NULL,
  `result_1` varchar(255) NOT NULL,
  `academy_location` varchar(255) NOT NULL,
  `id_img` varchar(255) NOT NULL,
  `personal_img` varchar(255) NOT NULL,
  `vaccination_img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `training_info_id`, `is_newsletter`, `provider_id`, `email_verification`, `is_email_verified`, `mobile`, `mobile_verification`, `is_mobile_verified`, `nationality`, `country`, `passport_number`, `national_id`, `birthdate`, `first_name`, `second_name`, `third_name`, `last_name`, `ar_first_name`, `ar_second_name`, `ar_third_name`, `ar_last_name`, `gender`, `martial_status`, `remember_token`, `education`, `educational_status`, `field`, `educational_background`, `ar_writing`, `ar_speaking`, `en_writing`, `en_speaking`, `city`, `address`, `relative_mobile_1`, `relative_relation_1`, `fullName_1`, `relative_mobile_2`, `relative_relation_2`, `fullName_2`, `is_committed`, `is_submitted`, `status`, `result_1`, `academy_location`, `id_img`, `personal_img`, `vaccination_img`, `created_at`, `updated_at`) VALUES
(1, 'kevin59@example.org', '$2y$10$Y.C7Fp7k0vgS864f2nTQyOdi0BA1mlKPcDlSNj9s3XYTfL3VYoGzy', 8, '0', 'fb530efd-89b7-3300-9e7b-b4de47bd6b18', '1983-10-07 05:14:01', 0, '602-252-2254', '1971-05-18 11:19:38', 1, 0, 'Papua New Guinea', NULL, NULL, '2021-05-18', 'Lindsey', 'Morris', NULL, 'Johnston', NULL, 'Marcella', 'Alysson', 'Johnston', 'female', 'single', '5efBSDQrUw', 'Quae corrupti eaque enim pariatur explicabo ipsam aut.', 'student', 'aut', 'Sed nihil numquam totam voluptates vero.', NULL, NULL, NULL, NULL, 'Kirlinview', '9619 Rath Stream\nPort Minnieshire, MO 93586', 4234324234, 'quibusdam', 'Prof. Kennith Miller MD', 3242343242, 'occaecati', NULL, '0', 0, 'active', 'Et sit omnis sed qui consequatur molestiae.', 'Genevievemouth', 'https://via.placeholder.com/640x480.png/00ddcc?text=tenetur', 'https://via.placeholder.com/640x480.png/0033ee?text=vitae', 'https://via.placeholder.com/640x480.png/00ff44?text=doloremque', '1972-08-19 12:47:08', '1984-12-03 14:31:16'),
(2, 'wolff.theresia@example.net', '$2y$10$eDK/qKq7zyHAIhrN0zbUruHPzUvTICr2mTeXgM3uLvyt3ENkBwsq.', 6, '1', 'c56f55eb-accc-31ba-96e6-57c8f30b651f', '1984-12-05 23:53:19', 0, '+1-951-265-3941', '2014-03-18 13:12:31', 1, 1, 'Kenya', '8300108741874', 373744361, '1994-09-02', 'Carmen', NULL, 'Precious', 'Von', NULL, NULL, 'Ellen', NULL, 'male', 'married', 'A0APrp5jOK', 'Omnis et et quis laudantium.', 'graduate', 'mollitia', 'Omnis quas commodi aut doloremque nam eligendi voluptatibus.', 'Voluptates cupiditate earum quia alias delectus voluptatem voluptates.', NULL, NULL, NULL, 'South Hildegard', '78629 Sporer Estate\nOlgaborough, MT 76930', 4234324234, 'ipsum', 'Nettie Hudson DVM', 3242343242, 'fuga', NULL, '1', 0, 'active', 'Excepturi iure ipsa quod et.', 'North Kattie', 'https://via.placeholder.com/640x480.png/003311?text=ut', 'https://via.placeholder.com/640x480.png/00aa44?text=blanditiis', 'https://via.placeholder.com/640x480.png/00ee22?text=cum', '2020-02-21 00:36:10', '1977-08-21 21:27:04'),
(3, 'tromp.jada@example.net', '$2y$10$p3AGM.GcwZWC41a1hd1z4uLsQn1aOAzGirnjqsAmdAR2tOBwtWo32', 5, '1', 'f32a130a-828e-39e2-a3c6-c308530995fa', '1977-01-17 01:16:55', 0, '254-859-1878', '1990-07-08 18:10:03', 0, 1, 'Angola', NULL, 134756857, '1996-03-05', 'Wava', NULL, 'Angelina', 'Brakus', 'Reuben', NULL, NULL, 'Olson', 'male', 'married', 'JhTDY3JZQT', 'Alias nemo cumque et fugiat est autem praesentium.', 'student', 'nesciunt', 'Quos ut illum distinctio aut quaerat similique.', NULL, NULL, 'Nihil voluptatum odio ratione.', 'Vero odit et nisi et ullam sit sit.', 'Port Rogelioborough', '658 Claude Grove\nNew Liliana, UT 66077-6718', 4234324234, 'consequuntur', 'Myron Osinski', 3242343242, 'ipsa', NULL, '0', 1, 'inactive', 'Est ipsum omnis labore deleniti qui explicabo.', 'South Ross', 'https://via.placeholder.com/640x480.png/0044cc?text=omnis', 'https://via.placeholder.com/640x480.png/004433?text=reiciendis', 'https://via.placeholder.com/640x480.png/00ee88?text=autem', '2017-06-16 20:36:50', '2020-06-25 20:42:08'),
(4, 'michelle.windler@example.net', '$2y$10$LhbG9sl2qtEyKE5UVMzRle5Zqp9Qes9EpyCiMcuIqeM4Oj1nf5AoO', 8, '1', '3b3660e4-8156-3e21-8ff1-0acef369a2fa', '1988-06-30 05:34:53', 1, '740.951.7843', '1987-12-06 22:47:07', 0, 1, 'Mayotte', '5700176419474', 315877721, '1971-07-07', 'Josue', NULL, NULL, 'Gerlach', NULL, NULL, NULL, NULL, 'female', 'married', 'Y4Jn9vJW3Y', 'Quas amet quia enim et.', 'student', 'voluptas', 'Ea saepe perspiciatis quisquam beatae autem recusandae quo.', 'Nemo eligendi necessitatibus laborum aperiam tempora.', NULL, 'Quia doloremque quia nulla sit tempora ipsam hic.', 'Et iure voluptatem quod.', 'Lake Lornafurt', '375 Lynn Unions\nNorth Bentown, NC 42956', 4234324234, 'ratione', 'Gillian Spencer', 3242343242, 'rem', 'Murphy Pouros', '1', 1, 'active', 'Exercitationem et corporis sequi iure sapiente.', 'Whiteshire', 'https://via.placeholder.com/640x480.png/0066dd?text=perferendis', 'https://via.placeholder.com/640x480.png/0055ee?text=ducimus', 'https://via.placeholder.com/640x480.png/00bb00?text=sint', '2004-09-16 11:07:18', '2000-11-06 03:24:34'),
(5, 'lawrence46@example.com', '$2y$10$g6vgOaqj.7Dluoqfa2y8rOyc57jWSyj0Ef1xjTmvEQZbLm4ZRpdtK', 1, '0', '32d8211a-1e57-37f1-b41b-2f48aee0705f', '2001-07-25 10:09:53', 0, '351.312.7692', '1981-07-13 17:41:39', 0, 1, 'Gibraltar', NULL, NULL, '2011-06-06', 'Karine', 'Herminio', NULL, 'Gutkowski', NULL, 'Fernando', 'Paxton', NULL, 'female', 'single', 'DkmSodgcbQ', 'Necessitatibus aut a ut voluptatem veritatis quod.', 'student', 'possimus', 'Laboriosam voluptatem qui perspiciatis ut qui.', 'Facilis est in accusantium magnam facilis ea error.', 'Sit explicabo magnam neque tempore.', 'Rerum sunt nihil ipsa similique quos qui libero enim.', NULL, 'Kylerstad', '3825 Kendrick Divide Suite 144\nNew Artton, ID 84277-7488', 4234324234, 'perferendis', 'Katherine Willms', 3242343242, 'et', NULL, '0', 0, 'inactive', 'Autem accusantium eius sit repudiandae.', 'South Peterstad', 'https://via.placeholder.com/640x480.png/0044aa?text=aliquam', 'https://via.placeholder.com/640x480.png/0022bb?text=consequatur', 'https://via.placeholder.com/640x480.png/0011cc?text=officiis', '2001-03-08 04:45:50', '2022-10-09 17:59:51'),
(6, 'efarrell@example.net', '$2y$10$ihEyM3N7bEjjRPPun9GFhO2PXmmOYY2I/.tQ8h0avR.RM/WrTmQRC', 9, '0', '31a9d79a-b3b7-3407-95e1-f21b0376f548', '2003-02-28 05:31:26', 0, '(463) 259-5162', '2000-01-20 21:44:24', 1, 0, 'Egypt', '5399340318033', 720072620, '2022-09-05', 'Halle', NULL, NULL, 'Heidenreich', 'Janiya', NULL, NULL, 'King', 'female', 'married', 'WRQzoDFYKa', 'Recusandae perspiciatis quod aliquam esse cumque.', 'student', 'possimus', 'Cumque dolorem quisquam unde autem possimus delectus.', 'Dolorem labore culpa minus rem ratione odio.', 'Beatae neque eligendi est culpa.', NULL, NULL, 'South Lincolnchester', '1120 Ella Cape Apt. 464\nMarieview, VT 30260-7966', 4234324234, 'perferendis', 'Prof. Dovie Rogahn', 3242343242, 'fuga', 'Mrs. Macie Grimes', '0', 0, 'inactive', 'Id et velit debitis vel reiciendis incidunt minus earum.', 'East Marjorieville', 'https://via.placeholder.com/640x480.png/00ccaa?text=repellat', 'https://via.placeholder.com/640x480.png/00cccc?text=saepe', 'https://via.placeholder.com/640x480.png/005555?text=quia', '2001-04-07 21:48:31', '2023-01-28 02:36:35'),
(7, 'asa.koch@example.com', '$2y$10$TV2M8QV2cydWgPE.q.mZ7exm0Pm4BkoM6Id2ER7nCviUNr12t27FW', 2, '1', '5481421e-a1b0-3778-8f00-c2d662a182b1', '2002-02-24 01:55:50', 1, '919-288-0549', '2001-10-31 00:11:37', 0, 0, 'Saint Vincent and the Grenadines', '5823662586393', 890701899, '1971-06-29', 'Davin', NULL, 'Hassan', 'Bashirian', NULL, 'Moriah', NULL, NULL, 'male', 'single', '8tzFSjStAF', 'Vero illo ipsum eos incidunt a sed.', 'student', 'et', 'Atque qui recusandae id suscipit sit repudiandae.', 'Eveniet minima qui consequuntur natus assumenda eius nostrum.', NULL, 'Blanditiis qui animi et quia.', NULL, 'Lake Alessandro', '94196 Altenwerth Plains Apt. 976\nCeceliastad, TN 50082', 4234324234, 'aliquam', 'Dr. Keshaun Nienow IV', 3242343242, 'recusandae', NULL, '1', 1, 'inactive', 'Repellat qui facilis reiciendis quasi culpa odio ducimus.', 'Quincyfort', 'https://via.placeholder.com/640x480.png/0000dd?text=doloremque', 'https://via.placeholder.com/640x480.png/00eeff?text=molestiae', 'https://via.placeholder.com/640x480.png/00dd22?text=quo', '1988-07-10 09:04:33', '1999-01-18 07:17:25'),
(8, 'ddeckow@example.net', '$2y$10$bBzMhZq08ONpmEjh.SPWaOspa9KiDPgUpDm8ihsmSCTeEcQp2QVRu', 6, '0', 'ebe6e1c6-f47c-3a98-b68e-22df32665d2a', '1988-04-01 14:14:37', 0, '+1 (228) 912-2519', '2007-12-15 08:04:44', 1, 0, 'Belgium', NULL, NULL, '2023-05-03', 'Royal', NULL, NULL, 'Schimmel', 'Veronica', NULL, NULL, NULL, 'male', 'married', 'zgndLJKIhb', 'Deleniti aut neque quisquam minus.', 'graduate', 'tempora', 'Corporis vel nesciunt et quod est distinctio et iusto.', NULL, NULL, 'Dolor quaerat fugiat accusantium neque.', 'Aliquam rem et quia corrupti sunt consequatur quaerat.', 'Aniyahport', '92618 Lesch Course Apt. 657\nSouth Asha, CO 11841', 4234324234, 'omnis', 'Derek Beahan', 3242343242, 'accusamus', NULL, '0', 0, 'inactive', 'Alias debitis autem sint quod vel.', 'Dashawnside', 'https://via.placeholder.com/640x480.png/000077?text=non', 'https://via.placeholder.com/640x480.png/0011ff?text=atque', 'https://via.placeholder.com/640x480.png/0099bb?text=placeat', '2023-06-13 19:40:29', '1998-06-20 06:13:38'),
(9, 'spinka.adele@example.org', '$2y$10$mQFdcPuzS9hztg7QxHFJYuWG3/N1XY/.AZlOwIvRe35A38IMrrLJG', 6, '1', '17e7b023-b276-3b94-9921-d69894f1197d', '2016-06-06 07:04:47', 1, '(973) 285-1283', '1978-05-17 14:19:05', 0, 1, 'Guernsey', NULL, NULL, '2009-06-01', 'Gisselle', NULL, NULL, 'Bayer', 'Roberto', 'Brycen', 'Jevon', NULL, 'female', 'single', '8DtP79K1c0', 'Similique illo officiis omnis.', 'student', 'voluptas', 'Quisquam tenetur in omnis aut et.', 'Totam qui quia repudiandae veritatis.', 'Sed nostrum impedit rerum iure consequuntur.', 'Voluptates illum et sit sed placeat.', 'Ea cumque aut accusantium earum sit et nihil.', 'Lake Deshaun', '72505 Burdette Knolls\nNew Lindseybury, VA 13677-1782', 4234324234, 'aut', 'Dr. Oswald Pollich MD', 3242343242, 'ex', NULL, '0', 0, 'active', 'Tenetur consequatur velit at est iure labore.', 'South Precious', 'https://via.placeholder.com/640x480.png/00ff00?text=dolorem', 'https://via.placeholder.com/640x480.png/00aa66?text=sapiente', 'https://via.placeholder.com/640x480.png/008844?text=aut', '1977-09-11 12:07:37', '1997-10-08 14:12:36'),
(10, 'darius.yost@example.com', '$2y$10$tMxQAoqawuZN9c.ehukOC.Lvuve5u0c2F1PrQe6sP8J/gGQJ34PVq', 7, '1', 'ca263249-d62a-3f53-a4f0-8a34f1d9fe49', '2016-07-03 21:52:22', 1, '+1-408-466-2710', '2001-06-16 00:39:27', 0, 1, 'Azerbaijan', '3872783714987', 923005464, '2010-09-11', 'Dorris', 'Kaleigh', 'Verlie', 'Dibbert', NULL, 'Vincenzo', 'Talon', NULL, 'female', 'single', 'laSiFz3Zbh', 'Tenetur tenetur libero voluptatum et in voluptas.', 'student', 'voluptatem', 'Vitae cumque omnis dolorem sed dolorem architecto dolor quas.', 'Eos voluptatem architecto ipsum aut cum deserunt iusto.', NULL, 'Quibusdam maiores ut dolores eos suscipit expedita libero.', 'Ipsam vero eum itaque omnis impedit dolores accusantium.', 'Hamillport', '97917 Robel Flat\nSouth Jordane, AZ 35502-8733', 4234324234, 'repudiandae', 'Berenice Quitzon', 3242343242, 'voluptates', 'Malinda Kshlerin', '1', 1, 'active', 'Ut autem earum beatae voluptatem cumque.', 'O\'Konmouth', 'https://via.placeholder.com/640x480.png/001199?text=harum', 'https://via.placeholder.com/640x480.png/0000dd?text=id', 'https://via.placeholder.com/640x480.png/00ccdd?text=nisi', '1972-01-06 21:53:51', '2003-11-10 16:36:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academies`
--
ALTER TABLE `academies`
  ADD PRIMARY KEY (`academy_id`);

--
-- Indexes for table `cohorts`
--
ALTER TABLE `cohorts`
  ADD PRIMARY KEY (`cohort_id`);

--
-- Indexes for table `employment_types`
--
ALTER TABLE `employment_types`
  ADD PRIMARY KEY (`employment_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `survey_infos`
--
ALTER TABLE `survey_infos`
  ADD PRIMARY KEY (`survey_info_id`);

--
-- Indexes for table `training_infos`
--
ALTER TABLE `training_infos`
  ADD PRIMARY KEY (`training_info_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academies`
--
ALTER TABLE `academies`
  MODIFY `academy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cohorts`
--
ALTER TABLE `cohorts`
  MODIFY `cohort_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employment_types`
--
ALTER TABLE `employment_types`
  MODIFY `employment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_infos`
--
ALTER TABLE `survey_infos`
  MODIFY `survey_info_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `training_infos`
--
ALTER TABLE `training_infos`
  MODIFY `training_info_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
