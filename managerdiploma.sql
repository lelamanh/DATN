-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2021 lúc 12:59 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `managerdiploma`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diploma`
--

CREATE TABLE `diploma` (
  `id` int(11) NOT NULL,
  `type` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `field` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `created_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `updated_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `diploma`
--

INSERT INTO `diploma` (`id`, `type`, `field`, `created_at`, `updated_at`) VALUES
(1, 'Đại học', 'Công nghệ thông tin', '2021-11-11 19:22:31', '2021-11-11 19:22:31'),
(6, 'Đại học', 'Quản trị kinh doanh', '2021-11-19 05:24:10', '2021-11-19 05:24:10'),
(10, 'Chứng chỉ ngoại ngữ', 'TOEIC', '2021-11-26 14:58:56', '2021-11-26 14:58:56'),
(11, 'Chứng chỉ ngoại ngữ', 'VStep', '2021-11-28 14:47:45', '2021-11-28 14:47:45'),
(15, 'Cao Học', 'Công Nghệ Thông Tin', '2021-12-04 03:27:47', '2021-12-04 03:27:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diploma_of_user`
--

CREATE TABLE `diploma_of_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_diploma` int(11) NOT NULL,
  `time_start` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `level_unit` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `updated_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `time_end` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `rating` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `date_issue` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_accept` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `diploma_of_user`
--

INSERT INTO `diploma_of_user` (`id`, `id_user`, `id_diploma`, `time_start`, `level_unit`, `updated_at`, `created_at`, `time_end`, `rating`, `date_issue`, `user_accept`) VALUES
(33, 34, 1, NULL, 'ĐHCN', '2021-12-01 03:55:35', '2021-12-01 03:51:56', NULL, 'Khá', '2021-12-12', 'DH199'),
(35, 36, 10, '2020-05-20', 'DHNN', '2021-12-01 04:52:02', '2021-12-01 04:52:02', '2022-05-20', 'TOEIC 650', '2020-05-20', 'TO01'),
(36, 37, 11, '2020-06-12', 'DHNN', '2021-12-01 09:42:27', '2021-12-01 09:42:27', '2021-06-12', 'B1', '2021-06-12', 'VS01'),
(37, 35, 6, NULL, 'ĐHQGHN', '2021-12-01 09:44:08', '2021-12-01 09:44:08', NULL, 'Giỏi', '2021-07-26', '21_QTKD78'),
(38, 36, 6, NULL, 'ĐHQGHN', '2021-12-01 13:31:10', '2021-12-01 13:31:10', NULL, 'Giỏi', '2021-06-21', 'QTKD26'),
(39, 39, 10, NULL, 'ĐHQGHN', '2021-12-04 03:22:20', '2021-12-04 03:22:20', NULL, 'Khá', '2021-06-12', 'NNB9');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_28_150041_add_image_column_to_users_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_of_birth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `address`, `day_of_birth`, `level`, `image`) VALUES
(21, 'admin', 'admin@gmail.com', NULL, '$2y$10$b9tia/sTMsNImxLJ9xMPy.gYkfsVGNLG5kwoO5EZfHZZ/tWGXq0RS', NULL, NULL, NULL, NULL, NULL, 1, ''),
(34, 'Lâm Anh Lê Thị', '17020570@gmail.com', NULL, '$2y$10$e6SP1KqvKQ76NWkNzjuO4uJKYDqM674n9J1luvUjoaLzqlOk6kKPa', NULL, '2021-11-30 20:44:17', '2021-11-30 20:49:31', 'Thanh Hóa', '1999-05-24', 2, '/storage/images/users/260379990_565854627983938_4665122921428478902_n.jpg'),
(35, 'Triệu Thị Thương', '17020202@gmail.com', NULL, '$2y$10$v/Pz/Yzk7eiE4MvWGr54E.UZOV3gXNZLnxfLhlXjjsgdSQseLSOYO', NULL, '2021-11-30 20:47:28', '2021-12-03 20:24:56', 'Hà Nam', '1999-04-04', 2, '/storage/images/users/61103071_2361422507447925_6222318223514140672_n_1.jpg'),
(36, 'Hà Thị Nội', 'hanoi123@gmail.com', NULL, '$2y$10$n3SMtbihZyz24P9LjT1IIuLR/AeAws1cD6C6pnYElduOn2ZfDILNW', NULL, '2021-11-30 20:57:15', '2021-11-30 21:49:57', 'Ninh Bình', '1999-09-02', 2, '/storage/images/users/cach chup anh the dep 1.jpg'),
(37, 'Trương Công Thức', 'truongcongthuc123@gmail.com', NULL, '$2y$10$WBGnq9kyBb6DepMPsdALu.96LSnsz4Ia.oWLJDux21q.zlWGkdafy', NULL, '2021-12-01 02:41:38', '2021-12-01 02:41:38', 'Quảng Ninh', '1999-10-20', 2, '/storage/images/users/chup-anh-the-dep-quang-ngai-7.jpg'),
(38, 'Nguyễn Thanh Thương', 'nguyenthanhthuong123@gmail.com', NULL, '$2y$10$kXDu5Gh6X/vF/P2aAayZMeE9Z/EqOgzMgu240W72QL1/OcEfjeDvG', NULL, '2021-12-01 02:48:47', '2021-12-01 02:48:47', 'Hải Dương', '1999-12-10', 2, '/storage/images/users/jhjh-1-768x1024.jpg'),
(39, 'Lê Lâm Anh', '17020571@gmail.com', NULL, '$2y$10$wEOfQRogN45SNsSYyiJGMuQHSHME3fwhdnor22NT6N0Dt6rLENWFi', NULL, '2021-12-03 20:21:18', '2021-12-03 20:21:18', 'Hà Nội', '1999-05-24', 2, '/storage/images/users/cach chup anh the dep 1.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diploma`
--
ALTER TABLE `diploma`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `diploma_of_user`
--
ALTER TABLE `diploma_of_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `diploma`
--
ALTER TABLE `diploma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `diploma_of_user`
--
ALTER TABLE `diploma_of_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
