-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2021 at 04:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hireframe1`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyjobs`
--

CREATE TABLE `applyjobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodyresult` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodyfeedback` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `header`, `bodyresult`, `bodyfeedback`, `created_at`, `updated_at`, `userid`) VALUES
(1, 'This is regarding your application for Job role \"Job role\" position', 'You have been selected', 'Here is your feedback', '2021-04-17 12:52:54', '2021-04-17 12:52:54', '2'),
(2, 'This is regarding your application for Job role \"Job role\" position', 'We have decided to move with other candidates', 'Here is your feedback', '2021-04-17 12:59:05', '2021-04-17 12:59:05', '3'),
(3, 'This is regarding your application for Job role \"Job role\" position', 'We have decided to move with other candidates', 'Here is your feedback', '2021-04-17 16:03:24', '2021-04-17 16:03:24', '4'),
(4, 'This is regarding your application for Job role', 'We have decided to move with other candidates', 'Here is your feedback \r\nFor being funny', '2021-04-19 12:19:38', '2021-04-19 12:19:38', '6'),
(5, 'This is regarding your application for Job role', 'You have been selected', 'Here is your feedback \r\nTesting', '2021-04-20 08:20:05', '2021-04-20 08:20:05', '10'),
(6, 'This is regarding your application for Job role', 'You have been selected pdf', 'Here is your feedback', '2021-04-20 10:21:05', '2021-04-20 10:21:05', '11'),
(7, 'This is regarding your application for Job role', 'You have been selected', 'Here is your feedback', '2021-04-23 17:37:34', '2021-04-23 17:37:34', '7'),
(8, 'This is for job role', 'You are selected', 'You have good skills', '2021-04-23 17:39:56', '2021-04-23 17:39:56', '5'),
(9, 'This is for job role', 'You are selected', 'You have good skills', '2021-04-27 19:35:25', '2021-04-27 19:35:25', '12');

-- --------------------------------------------------------

--
-- Table structure for table `interviewevaluations`
--

CREATE TABLE `interviewevaluations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jobrole` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interviewevaluations`
--

INSERT INTO `interviewevaluations` (`id`, `name`, `category`, `Jobrole`, `option`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Anthony', 'Communication,Gestures,Communication,Gestures', 'JobRole', 'selected', 'You are select', '2021-04-20 10:25:31', '2021-04-20 10:25:31'),
(2, 'Jack', 'Communication', 'Select Role', 'rejected', 'asdf', '2021-04-23 16:52:31', '2021-04-23 16:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobReference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobClosingDate` date NOT NULL,
  `jobDescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `jobTitle`, `jobReference`, `jobClosingDate`, `jobDescription`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 'We require programming skills', '2021-04-30', 'PHP developer with 2+ years ', 1, NULL, NULL),
(2, 'Java Developer', 'IT', '2021-04-29', 'We require 4 + years of relevant expierence', 1, NULL, NULL);

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
(36, '2014_10_12_000000_create_users_table', 1),
(37, '2014_10_12_100000_create_password_resets_table', 1),
(38, '2019_08_19_000000_create_failed_jobs_table', 1),
(39, '2021_03_24_180040_create_templates_table', 1),
(40, '2021_04_12_112003_create_interviewevaluations_table', 1),
(41, '2021_04_12_213358_create_feedback_table', 1),
(42, '2021_04_13_173223_add_isadmin_users_table', 1),
(43, '2021_04_17_132743_add_userid_feedback_table', 1),
(44, '2021_04_15_051115_create_applyjobs_table', 2),
(45, '2019_06_14_191706_create_jobs_table', 3),
(46, '2021_04_19_143325_create_applyjobs_table', 4);

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
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `templatename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section1body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section2body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section3body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `templatename`, `section1`, `section2`, `section3`, `section1body`, `section2body`, `section3body`, `created_at`, `updated_at`) VALUES
(6, 'Selected', 'Header', 'Result', 'Feedback', 'This is for job role', 'You are selected', 'You have good skills', '2021-04-20 10:18:06', '2021-04-20 10:18:06'),
(7, 'This a selenium test', 'recorded', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '2021-04-27 18:33:10', '2021-04-27 18:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isadmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `CV`, `remember_token`, `created_at`, `updated_at`, `isadmin`) VALUES
(1, 'Anthony', 'anto', 'anto@gmail.com', NULL, '$2y$10$rxX1MKPcePmQXrtcV5tQM.S4/IRrMaRCFOKh3P8t3m/Z9Be2cMslO', '08458046.pdf', NULL, '2021-04-17 12:39:02', '2021-04-17 12:39:02', 1),
(2, 'Veda', 'veda', 'veda@gmail.com', NULL, '$2y$10$I81u3HQ.A9MHE2DuFdsEy..hyNIz2I8DOof50GA/CS5VUePHAju0.', '08458046.pdf', NULL, '2021-04-17 12:43:57', '2021-04-17 12:43:57', 0),
(3, 'Suresh', 'Suresh', 'suresh@gmail.com', NULL, '$2y$10$4Ur/yzQ8hes/QJtgtcTtbu7ESGr7L9n7rZrIttpNdHya77ULibNIa', '08695303.pdf', NULL, '2021-04-17 12:57:37', '2021-04-17 12:57:37', 0),
(4, 'Jack', 'jack', 'jack@s.com', NULL, '$2y$10$KTOZOrlQQjgWWtM.30m6DuRvIjEmqfgikQyACxdNHKi7JoEwSAqPu', '08695303.pdf', NULL, '2021-04-17 15:33:39', '2021-04-17 15:33:39', 0),
(7, 'James Blunt', 'james', 'james@gmail.com', NULL, '$2y$10$ncPhulaeyNX39jkD50cWReGfRB.4e0Q2dqsVtTM8f0XkilIr1e3JS', '07842850.pdf', NULL, '2021-04-18 11:59:55', '2021-04-18 11:59:55', 0),
(8, 'Administrator', 'admin', 'admin@hireframe.com', NULL, '$2y$10$IkqEUMO6gWdxGjoGriL7Su8lj4C/q4NjDOYGCPMTrPJLLlYnIsH4a', '09200909.pdf', NULL, '2021-04-19 16:39:30', '2021-04-19 16:39:30', 1),
(9, 'User', 'user', 'user@hireframe.com', NULL, '$2y$10$bHdlQOXwm3gwpEnMp6Cbz.WPJaWgKl/8KFRxR5ePLFM9y3YoAFseu', '09200909.pdf', NULL, '2021-04-19 16:40:05', '2021-04-19 16:40:05', 0),
(11, 'User1', 'user1@gmail.com', 'user1@gmail.com', NULL, '$2y$10$Vy3vGHtoFrRuNLQ1Qdj4PeBPI2gGYkcTtMQY9A/CyIDAkyL9ngg2i', '08352645.pdf', NULL, '2021-04-20 10:13:06', '2021-04-20 10:13:06', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyjobs`
--
ALTER TABLE `applyjobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interviewevaluations`
--
ALTER TABLE `interviewevaluations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
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
-- Indexes for table `templates`
--
ALTER TABLE `templates`
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
-- AUTO_INCREMENT for table `applyjobs`
--
ALTER TABLE `applyjobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `interviewevaluations`
--
ALTER TABLE `interviewevaluations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
