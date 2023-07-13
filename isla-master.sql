-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 07:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isla-master`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `about` text DEFAULT NULL,
  `industry` varchar(255) NOT NULL,
  `headquarters` varchar(255) NOT NULL,
  `founded_year` int(11) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `img_profile` varchar(255) DEFAULT 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaFqZETyia_OGRMi21eSTZENOZRYGzGmHqrA&usqp=CAU',
  `img_cover` varchar(255) DEFAULT 'https://i.pinimg.com/originals/d4/4a/c3/d44ac3f9bb60e771b9c77fd47b123365.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `password_confirmation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `company_name`, `email`, `about`, `industry`, `headquarters`, `founded_year`, `website`, `description`, `role_id`, `img_profile`, `img_cover`, `created_at`, `updated_at`, `password`, `password_confirmation`) VALUES
(2, 'black horse', 'omar.s.alshafee@gmail.com', 'black horse', 'black horse', 'Jordan', 2000, NULL, NULL, 3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaFqZETyia_OGRMi21eSTZENOZRYGzGmHqrA&usqp=CAU', 'https://i.pinimg.com/originals/d4/4a/c3/d44ac3f9bb60e771b9c77fd47b123365.jpg', '2023-07-12 21:56:15', '2023-07-13 01:57:31', '$2y$10$Iro.KX1M6dgGyb80EJqYw.fkH/9t1XzJFgPdDhgRYxqlZwTjC2aCy', 'Omar1234'),
(3, 'Electro', 'sal12eh@gmail.com', 'gfsdgs', 'Electro', 'United States', 2000, NULL, NULL, 3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaFqZETyia_OGRMi21eSTZENOZRYGzGmHqrA&usqp=CAU', 'https://i.pinimg.com/originals/d4/4a/c3/d44ac3f9bb60e771b9c77fd47b123365.jpg', '2023-07-13 01:56:03', '2023-07-13 01:56:03', '$2y$10$5FizaEofm0oRc4mpaIElXOqld.rY0YrOed0BiVv2Zw5hHFdIUS.uS', 'Omar1234');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `about_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_img` varchar(255) DEFAULT NULL,
  `cover_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `connections`
--

CREATE TABLE `connections` (
  `connection_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `connected_user_id` bigint(20) UNSIGNED NOT NULL,
  `connection_type` varchar(255) NOT NULL,
  `date_connected` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `university_id` bigint(20) UNSIGNED NOT NULL,
  `degree` varchar(255) NOT NULL,
  `field_of_study` varchar(255) NOT NULL,
  `graduation_year` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pdf_cv` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jops_listings`
--

CREATE TABLE `jops_listings` (
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `job_description` text NOT NULL,
  `salary` varchar(255) NOT NULL,
  `joptype` varchar(255) NOT NULL,
  `experiense` varchar(255) NOT NULL,
  `onsite/remote` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `application_deadline` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jops_listings`
--

INSERT INTO `jops_listings` (`job_id`, `job_title`, `location`, `job_description`, `salary`, `joptype`, `experiense`, `onsite/remote`, `image`, `application_deadline`, `created_at`) VALUES
(1, 'jop', 'aaa', 'aaaa', 'aaa', 'aaa', 'aaa', 'aaa', NULL, '2023-07-13', '2023-07-10 16:37:23'),
(2, 'osss', 'ssss', 'ssss', 'ssss', 'ssss', 'ssss', 'ssss', 'sssss', '2023-07-13', '2023-07-26 16:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `language` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `liked_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `university_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `name`, `university_id`, `image`, `created_at`, `updated_at`) VALUES
(2, 'programer123', 1, 'majors/MvjQjSFMIUTLlsd7t4feuZ17WsEX9ht3fExVFjmi.jpg', '2023-07-13 00:19:21', '2023-07-13 00:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `recipient_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_07_01_131027_create_role_table', 1),
(4, '2023_07_01_133507_create_users_table', 1),
(5, '2023_07_01_133844_create_company_table', 1),
(6, '2023_07_01_134044_create_connection_table', 1),
(7, '2023_07_01_134159_create_post_table', 1),
(8, '2023_07_01_134300_create_comments_table', 1),
(9, '2023_07_01_134412_create_likes_table', 1),
(10, '2023_07_01_134616_create_skills_table', 1),
(11, '2023_07_01_134710_create_messages_table', 1),
(12, '2023_07_01_134810_create_user_skills_table', 1),
(13, '2023_07_01_134946_create_experiences_table', 1),
(14, '2023_07_01_135102_create_abouts_table', 1),
(15, '2023_07_01_135149_create_languages_table', 1),
(16, '2023_07_01_135350_create_universities_table', 1),
(17, '2023_07_01_135526_create_educations_table', 1),
(18, '2023_07_01_135610_create_majors_table', 1),
(19, '2023_07_01_141211_create_jops_table', 1),
(20, '2023_07_01_200841_create_feedback_table', 1),
(21, '2023_07_03_093218_add_about_id__to_users_table', 1),
(22, '2023_07_03_100754_add_major_id__to_company_table', 1),
(23, '2023_07_03_101630_add_about_id__to_company_table', 1),
(24, '2023_07_03_101907_add_columns_to_company_table', 1),
(25, '2023_07_07_143733_add_comment_id__to_post_table', 2),
(26, '2023_07_07_143733_alter_post_table_add_comment_id', 3),
(27, '2023_07_10_200801_drop_user_id_from_universities_table', 4),
(28, '2023_07_10_201129_remove_foreign_key_from_universities_table', 5),
(29, '2023_07_10_201224_drop_user_id_from_universities_table', 5),
(30, '2023_07_11_152027_create_job_applications_table', 6),
(31, '2023_07_11_152752_add_password_fields_to_company_table', 7),
(32, '2023_07_13_004423_add_email_to_companies', 8),
(33, '2023_07_13_004806_add_about_to_companies', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `likes_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `comments_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `comment_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `content`, `image`, `created_at`, `likes_count`, `comments_count`, `comment_id`) VALUES
(1, 1, '1234567890', 'https://i.pinimg.com/originals/c1/87/98/c18798c46dcd148f66b9781db0e43a1d.png', '2023-07-07 14:26:19', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL),
(3, 'company', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` bigint(20) UNSIGNED NOT NULL,
  `skill_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `location`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Technische Universität Wien', 'Campus Karlsplatz, Vienna Austria', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2F3%2F36%2FUniversity_of_Jordan_Logo.svg%2F1616px-University_of_Jordan_Logo.svg.png&tbnid=5OfgQYrX78tguM&vet=12ahUKEwiOirPJ-oSAAxXVnCcCHcolCpcQMygAegUIAR', NULL, '2023-07-13 01:51:37'),
(3, 'University of Vienna', 'Universitätsring 1, Vienna, AT, Vienna Austria', 'images/universities/', '2023-07-13 01:35:44', '2023-07-13 01:35:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `img_profile` varchar(255) DEFAULT 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaFqZETyia_OGRMi21eSTZENOZRYGzGmHqrA&usqp=CAU',
  `img_cover` varchar(255) DEFAULT 'https://i.pinimg.com/originals/d4/4a/c3/d44ac3f9bb60e771b9c77fd47b123365.jpg',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `about_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `confirm_password`, `role_id`, `img_profile`, `img_cover`, `remember_token`, `created_at`, `updated_at`, `about_id`) VALUES
(1, 'Omar AL-Shafee', 'omar@gmail.com', NULL, '$2y$10$rmjwrbBl8uicarI98fe1MOmMDpVk3IrXqtVPBmxQnjX29SqYF0PIy', '12345678', 2, 'profile/cbcnPHbot1sQsFKV8GsBWFuaIbommmUDnsc6bt6i.jpg', 'https://i.pinimg.com/originals/c1/87/98/c18798c46dcd148f66b9781db0e43a1d.png', NULL, NULL, '2023-07-08 08:31:42', NULL),
(4, 'laith', 'laith@email.com', NULL, '$2y$10$.I3sqibiCZh84wzAhr8CGu9JZSmY/C7pFJW2Tl5gdze3O8U0t3QXe', '$2y$10$.I3sqibiCZh84wzAhr8CGu9JZSmY/C7pFJW2Tl5gdze3O8U0t3QXe', 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaFqZETyia_OGRMi21eSTZENOZRYGzGmHqrA&usqp=CAU', 'https://i.pinimg.com/originals/d4/4a/c3/d44ac3f9bb60e771b9c77fd47b123365.jpg', NULL, NULL, NULL, NULL),
(7, 'saleh', 'saleh@gmail.com', NULL, '$2y$10$rmjwrbBl8uicarI98fe1MOmMDpVk3IrXqtVPBmxQnjX29SqYF0PIy', '$2y$10$rmjwrbBl8uicarI98fe1MOmMDpVk3IrXqtVPBmxQnjX29SqYF0PIy', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaFqZETyia_OGRMi21eSTZENOZRYGzGmHqrA&usqp=CAU', 'https://i.pinimg.com/originals/d4/4a/c3/d44ac3f9bb60e771b9c77fd47b123365.jpg', NULL, NULL, NULL, NULL),
(8, 'saleh12', 'sal12eh@gmail.com', NULL, '$2y$10$rmjwrbBl8uicarI98fe1MOmMDpVk3IrXqtVPBmxQnjX29SqYF0PIy', '$2y$10$rmjwrbBl8uicarI98fe1MOmMDpVk3IrXqtVPBmxQnjX29SqYF0PIy', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaFqZETyia_OGRMi21eSTZENOZRYGzGmHqrA&usqp=CAU', 'https://i.pinimg.com/originals/d4/4a/c3/d44ac3f9bb60e771b9c77fd47b123365.jpg', NULL, NULL, NULL, NULL),
(9, 'Rand', 'rand@gmail.com', NULL, '$2y$10$8/Uk9lmmLrfct5uhKOKByuAKh3VUfjQ3iVRHfkqd.VvlP6UTEq3xu', 'rand1234', 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaFqZETyia_OGRMi21eSTZENOZRYGzGmHqrA&usqp=CAU', 'https://i.pinimg.com/originals/d4/4a/c3/d44ac3f9bb60e771b9c77fd47b123365.jpg', NULL, '2023-07-12 09:53:32', '2023-07-12 09:53:32', NULL),
(10, 'islam', 'islam@gmail.com', NULL, '$2y$10$d1SbEEJ0/9jpZe0gLLEk.ueo3it6/UsS3aPxs00bj/I8YUZRwLn1i', 'Omar1234', 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaFqZETyia_OGRMi21eSTZENOZRYGzGmHqrA&usqp=CAU', 'https://i.pinimg.com/originals/d4/4a/c3/d44ac3f9bb60e771b9c77fd47b123365.jpg', NULL, '2023-07-12 09:59:11', '2023-07-12 09:59:11', NULL),
(11, 'Omar AL-Shafee', 'alshafeeomar125@gmail.com', NULL, '$2y$10$7MXL7t2tx1UmCwbniv6zYOJXQRNYXy9MxGBUz1JyzQwmS0KeIKv/i', '', 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaFqZETyia_OGRMi21eSTZENOZRYGzGmHqrA&usqp=CAU', 'https://i.pinimg.com/originals/d4/4a/c3/d44ac3f9bb60e771b9c77fd47b123365.jpg', NULL, '2023-07-12 10:03:29', '2023-07-12 21:29:15', NULL),
(14, 'Omar AL-Shafee', 'asss@gmail.com', NULL, '$2y$10$OYAq0FbuxEQ74ypsci33GOoif9KQSfOwyEIfjbks1fQGmIo7EMcZu', '', 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaFqZETyia_OGRMi21eSTZENOZRYGzGmHqrA&usqp=CAU', 'https://i.pinimg.com/originals/d4/4a/c3/d44ac3f9bb60e771b9c77fd47b123365.jpg', NULL, '2023-07-12 10:05:08', '2023-07-12 10:05:08', NULL),
(16, 'black', 'fghh42769@gmail.com', NULL, '$2y$10$dRsJZyfyT9irN6sW02hGoeyLVevw0NIAXBIiHzeBKRIIGmZjvt.um', 'Omar1234', 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaFqZETyia_OGRMi21eSTZENOZRYGzGmHqrA&usqp=CAU', 'https://i.pinimg.com/originals/d4/4a/c3/d44ac3f9bb60e771b9c77fd47b123365.jpg', NULL, '2023-07-12 21:14:41', '2023-07-12 21:14:41', NULL),
(18, 'Omar Al-shafee', 'alshafeeomar513@gmail.com', NULL, '$2y$10$BOW53vgXopAfo.NDj2w.Z.s1AFKzzNcw/U92pVmM2nMYN2.W5NEge', 'Omar1234', 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaFqZETyia_OGRMi21eSTZENOZRYGzGmHqrA&usqp=CAU', 'https://i.pinimg.com/originals/d4/4a/c3/d44ac3f9bb60e771b9c77fd47b123365.jpg', NULL, '2023-07-12 21:23:47', '2023-07-12 21:29:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_skills`
--

CREATE TABLE `user_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `skill_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abouts_user_id_foreign` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`),
  ADD KEY `companies_role_id_foreign` (`role_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_major_id_foreign` (`major_id`),
  ADD KEY `company_about_id_foreign` (`about_id`);

--
-- Indexes for table `connections`
--
ALTER TABLE `connections`
  ADD PRIMARY KEY (`connection_id`),
  ADD KEY `connections_user_id_foreign` (`user_id`),
  ADD KEY `connections_connected_user_id_foreign` (`connected_user_id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `educations_user_id_foreign` (`user_id`),
  ADD KEY `educations_university_id_foreign` (`university_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_user_id_foreign` (`user_id`),
  ADD KEY `experiences_company_id_foreign` (`company_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_user_id_foreign` (`user_id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_applications_company_id_foreign` (`company_id`),
  ADD KEY `job_applications_user_id_foreign` (`user_id`),
  ADD KEY `job_applications_job_id_foreign` (`job_id`);

--
-- Indexes for table `jops_listings`
--
ALTER TABLE `jops_listings`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `languages_user_id_foreign` (`user_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `likes_post_id_foreign` (`post_id`),
  ADD KEY `likes_user_id_foreign` (`user_id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `majors_university_id_foreign` (`university_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`),
  ADD KEY `messages_recipient_id_foreign` (`recipient_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_about_id_foreign` (`about_id`);

--
-- Indexes for table `user_skills`
--
ALTER TABLE `user_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_skills_user_id_foreign` (`user_id`),
  ADD KEY `user_skills_skill_id_foreign` (`skill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `connections`
--
ALTER TABLE `connections`
  MODIFY `connection_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jops_listings`
--
ALTER TABLE `jops_listings`
  MODIFY `job_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_skills`
--
ALTER TABLE `user_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abouts`
--
ALTER TABLE `abouts`
  ADD CONSTRAINT `abouts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_about_id_foreign` FOREIGN KEY (`about_id`) REFERENCES `abouts` (`id`),
  ADD CONSTRAINT `company_major_id_foreign` FOREIGN KEY (`major_id`) REFERENCES `majors` (`id`);

--
-- Constraints for table `connections`
--
ALTER TABLE `connections`
  ADD CONSTRAINT `connections_connected_user_id_foreign` FOREIGN KEY (`connected_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `connections_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `educations_university_id_foreign` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `educations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`company_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD CONSTRAINT `job_applications_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`company_id`),
  ADD CONSTRAINT `job_applications_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jops_listings` (`job_id`),
  ADD CONSTRAINT `job_applications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `languages`
--
ALTER TABLE `languages`
  ADD CONSTRAINT `languages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `majors`
--
ALTER TABLE `majors`
  ADD CONSTRAINT `majors_university_id_foreign` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_recipient_id_foreign` FOREIGN KEY (`recipient_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_about_id_foreign` FOREIGN KEY (`about_id`) REFERENCES `abouts` (`id`),
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_skills`
--
ALTER TABLE `user_skills`
  ADD CONSTRAINT `user_skills_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`skill_id`),
  ADD CONSTRAINT `user_skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
