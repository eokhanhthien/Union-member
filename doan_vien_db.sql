-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 02, 2024 lúc 10:07 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan_vien_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `activities`
--

INSERT INTO `activities` (`id`, `name`, `description`, `start_date`, `end_date`, `location`, `point`, `created_at`, `updated_at`, `status`) VALUES
(2, 'Lao động', 'lao động ở nhà hát', '2024-04-07 00:00:00', '2024-04-08 00:00:00', NULL, 10, '2024-04-06 21:06:13', '2024-04-10 05:38:35', '1'),
(3, 'Tham gia hội', 'tham gia ngày hội của trường', '2024-05-01 00:00:00', '2024-05-08 00:00:00', NULL, 20, '2024-04-07 08:41:24', '2024-04-29 02:08:15', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `background`
--

CREATE TABLE `background` (
  `id` int(10) UNSIGNED NOT NULL,
  `mssv` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `nation` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `issuance_date` datetime DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `union_member_id` int(11) DEFAULT NULL,
  `day_in` timestamp NULL DEFAULT NULL,
  `entry_place` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `background`
--

INSERT INTO `background` (`id`, `mssv`, `full_name`, `gender`, `nation`, `religion`, `address`, `issuance_date`, `class_id`, `position_id`, `created_at`, `updated_at`, `image`, `union_member_id`, `day_in`, `entry_place`, `phone_number`) VALUES
(5, 'B123123123', 'Xuân Mai', '1', 'kinh', 'Không', 'Cần Thơ', '2024-04-18 00:00:00', 2, 1, '2024-04-02 10:42:33', '2024-04-10 10:25:32', '-04-43-186855a6e7a512794e33fccfa679b5158a42.jpeg', 10, '2024-04-10 17:00:00', 'Cà Mau', '0946144333'),
(6, 'B19103412', 'Thành Nhân', '0', 'kinh', 'không', 'Cần Thơ', '2024-04-09 00:00:00', 2, 1, '2024-04-10 05:51:11', '2024-04-29 22:35:16', '-04-43-186855a6e7a512794e33fccfa679b5158a88.jpeg', 11, '2024-04-09 17:00:00', 'Cà Mau', '09461422233'),
(7, 'B1231234', 'Trung Trần', '1', 'Kinh', 'Không', 'HCMinh', '2024-04-30 00:00:00', 2, 1, '2024-04-29 22:40:15', '2024-04-29 22:59:01', 'ngam-nhung-buc-anh-the-lam-can-cuoc-cong-dan-cua-cac-co-cau-hoc-tro-than-thai-dinh-cua-chop-78e-566547816.jpeg', 12, '2024-04-29 17:00:00', 'Cà Mau', '0915365078'),
(8, 'B11111111', 'Ngọc Mai', '0', 'kinh', 'Không', 'Cần Thơ', '2024-04-30 00:00:00', 2, 3, '2024-04-29 22:43:31', '2024-04-29 22:43:31', '348.jpeg', 13, '2024-04-29 17:00:00', 'Cà Mau', '0915365078'),
(9, 'B11111112', 'Hoàng Huy', '1', 'Kinh', 'Không', 'Cần Thơ', '2024-04-30 00:00:00', 2, 4, '2024-04-29 22:45:02', '2024-04-29 22:45:02', 'chup-anh-the-dep-cho-hoc-sinh-0358.webp', 14, '2024-04-29 17:00:00', 'HCM', '012345643'),
(10, 'B33333333', 'Ngọc Vy', '0', 'Kinh', 'Không', 'Cần Thơ', '2024-04-30 00:00:00', 2, 4, '2024-04-29 22:46:32', '2024-04-29 22:46:32', 'taoanhthe-198.jpeg', 15, '2024-04-29 17:00:00', 'Đà Nẵng', '0915365078'),
(11, 'B1111111123', 'Thu Phương', '0', 'Kinh', 'không', 'HN', '2024-04-25 00:00:00', 2, 4, '2024-04-29 22:48:26', '2024-04-29 22:48:26', 'images6.jpeg', 16, '2024-04-24 17:00:00', 'Hồ Chí Minh', '0915365078'),
(12, 'B1231234', 'Minh Thư', '0', 'Kinh', 'không', 'Hải Phòng', '2024-04-30 00:00:00', 5, 4, '2024-04-29 22:52:02', '2024-04-29 22:52:02', 'ảnh-thẻ-683x10246.jpeg', 17, '2024-04-22 17:00:00', 'Hà Nội', '0915365078'),
(13, 'B123123423', 'Nhã Trúc', '0', 'Kinh', 'Không', 'Cần Thơ', '2024-05-01 00:00:00', 6, 4, '2024-04-29 22:56:24', '2024-04-29 22:56:24', 'cach_chup_hinh_the__273.jpeg', 18, '2024-04-30 17:00:00', 'Cần Thơ', '0915365078');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classes`
--

CREATE TABLE `classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `classes`
--

INSERT INTO `classes` (`id`, `name`, `department_id`, `created_at`, `updated_at`) VALUES
(2, 'IT_1', 2, '2024-03-29 06:45:32', '2024-03-29 06:45:32'),
(4, 'IT_2', 2, '2024-04-29 22:48:48', '2024-04-29 22:48:48'),
(5, 'KT_1', 4, '2024-04-29 22:49:39', '2024-04-29 22:49:39'),
(6, 'KT_2', 4, '2024-04-29 22:49:47', '2024-04-29 22:49:47'),
(7, 'NN_1', 3, '2024-04-29 22:49:56', '2024-04-29 22:49:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Khoa CNTT', 'Khoa công nghệ về máy tính, lập trình', '2024-03-29 01:51:33', '2024-03-29 01:51:33'),
(3, 'Khoa Nông Nghiệp', 'Kĩ thuật nuôi trồng', '2024-04-29 22:49:08', '2024-04-29 22:49:08'),
(4, 'Khoa Kinh Tế', 'Các khối ngành kinh tế', '2024-04-29 22:49:24', '2024-04-29 22:49:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fund`
--

CREATE TABLE `fund` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `fund`
--

INSERT INTO `fund` (`id`, `member_id`, `amount`, `date`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 10, '10000', '2024-05-01 17:00:00', 'Đóng quỹ năm 2024', '1', '2024-05-02 12:59:00', '2024-05-02 12:59:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `join`
--

CREATE TABLE `join` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `activity_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `join`
--

INSERT INTO `join` (`id`, `member_id`, `activity_id`, `created_at`, `updated_at`, `status`) VALUES
(5, 10, 2, '2024-04-07 01:54:49', '2024-04-10 05:38:33', '1'),
(6, 10, 3, '2024-04-08 09:32:49', '2024-04-29 02:26:57', '1'),
(7, 11, 3, '2024-04-29 02:09:27', '2024-04-29 02:26:58', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `point`
--

CREATE TABLE `point` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `activity_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `point` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `point`
--

INSERT INTO `point` (`id`, `member_id`, `activity_id`, `created_at`, `updated_at`, `point`) VALUES
(1, 10, 2, '2024-04-10 05:38:35', '2024-04-10 05:38:35', '10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `positions`
--

CREATE TABLE `positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `positions`
--

INSERT INTO `positions` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Chi đội trưởng', 'quản lý chi đội', '2024-04-02 10:32:03', '2024-04-02 10:34:02'),
(3, 'Thư ký', 'Thư ký của đoàn', '2024-04-10 09:16:56', '2024-04-10 09:16:56'),
(4, 'Đoàn viên', 'Đoàn viên trong đơn vị', '2024-04-29 18:21:34', '2024-04-29 18:21:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `requests`
--

CREATE TABLE `requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `requests`
--

INSERT INTO `requests` (`id`, `member_id`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 11, '2024-04-28 17:00:00', '1', '2024-04-29 02:55:13', '2024-04-29 22:25:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rules`
--

CREATE TABLE `rules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `rules`
--

INSERT INTO `rules` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Điều 1 đoàn viên', '<p>Điều 1: 1. Đo&agrave;n vi&ecirc;n Đo&agrave;n Thanh ni&ecirc;n Cộng sản Hồ Ch&iacute; Minh l&agrave; thanh ni&ecirc;n Việt Nam ti&ecirc;n tiến, phấn đấu v&igrave; mục đ&iacute;ch, l&yacute; tưởng của Đảng Cộng sản Việt Nam v&agrave; Chủ tịch Hồ Ch&iacute; Minh, c&oacute; tinh thần y&ecirc;u nước, tự cường d&acirc;n tộc; c&oacute; lối sống l&agrave;nh mạnh, cần kiệm, trung thực; t&iacute;ch cực, gương mẫu trong học tập, lao động, hoạt động x&atilde; hội v&agrave; bảo vệ Tổ quốc, gắn b&oacute; mật thiết với thanh ni&ecirc;n; chấp h&agrave;nh nghi&ecirc;m chỉnh ph&aacute;p luật của Nh&agrave; nước v&agrave; Điều lệ Đo&agrave;n. 2. Thanh ni&ecirc;n Việt Nam tuổi từ 16 đến 30, t&iacute;ch cực học tập, lao động v&agrave; bảo vệ Tổ quốc, được t&igrave;m hiểu về Đo&agrave;n v&agrave; t&aacute;n th&agrave;nh Điều lệ Đo&agrave;n, tự nguyện hoạt động trong một tổ chức cơ sở của Đo&agrave;n, c&oacute; l&yacute; lịch r&otilde; r&agrave;ng đều được x&eacute;t kết nạp v&agrave;o Đo&agrave;n. 3. Việc kết nạp thanh ni&ecirc;n v&agrave;o Đo&agrave;n được tiến h&agrave;nh theo c&aacute;c bước v&agrave; thủ tục sau: - Thanh ni&ecirc;n v&agrave;o Đo&agrave;n tự nguyện viết đơn, b&aacute;o c&aacute;o l&yacute; lịch v&agrave; được một trong c&aacute;c tập thể, c&aacute; nh&acirc;n sau đ&acirc;y giới thiệu v&agrave; bảo đảm: + Một đo&agrave;n vi&ecirc;n c&ugrave;ng c&ocirc;ng t&aacute;c, sinh hoạt &iacute;t nhất ba th&aacute;ng. + Tập thể Chi hội Li&ecirc;n hiệp Thanh ni&ecirc;n Việt Nam (nếu l&agrave; hội vi&ecirc;n Hội Li&ecirc;n hiệp Thanh ni&ecirc;n Việt Nam). + Ban Chấp h&agrave;nh Chi hội Sinh vi&ecirc;n Việt Nam (nếu l&agrave; hội vi&ecirc;n Hội Sinh vi&ecirc;n Việt Nam). + Tập thể chi đội (nếu l&agrave; đội vi&ecirc;n Đội Thiếu ni&ecirc;n Tiền phong Hồ Ch&iacute; Minh). - Được hội nghị chi đo&agrave;n x&eacute;t đồng &yacute; kết nạp với sự biểu quyết t&aacute;n th&agrave;nh của tr&ecirc;n một phần hai (1/2) tổng số đo&agrave;n vi&ecirc;n c&oacute; mặt tại hội nghị v&agrave; được Đo&agrave;n cấp tr&ecirc;n trực tiếp ra quyết định kết nạp. Trường hợp x&eacute;t kết nạp nhiều người th&igrave; phải x&eacute;t v&agrave; quyết định kết nạp từng người một. - Ở nơi chưa c&oacute; tổ chức Đo&agrave;n v&agrave; đo&agrave;n vi&ecirc;n, hoặc chưa c&oacute; tổ chức Hội Li&ecirc;n hiệp Thanh ni&ecirc;n Việt Nam, Hội Sinh vi&ecirc;n Việt Nam th&igrave; Đo&agrave;n cấp tr&ecirc;n cử c&aacute;n bộ, đo&agrave;n vi&ecirc;n về l&agrave;m c&ocirc;ng t&aacute;c ph&aacute;t triển đo&agrave;n vi&ecirc;n, hoặc do một đảng vi&ecirc;n c&ugrave;ng c&ocirc;ng t&aacute;c, sinh hoạt &iacute;t nhất ba th&aacute;ng ở nơi đ&oacute; giới thiệu v&agrave; bảo đảm; Ban Chấp h&agrave;nh Đo&agrave;n cấp tr&ecirc;n trực tiếp x&eacute;t quyết định kết nạp.</p>', '2024-04-06 20:51:49', '2024-04-06 21:01:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `union_members`
--

CREATE TABLE `union_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `union_members`
--

INSERT INTO `union_members` (`id`, `email`, `password`, `full_name`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$cEEGa4GXqC2tB3cF63V2neX5vYihZODv.FlukZn0vn1GU6A3eKvLm', 'Xuân Mai', '1', '2024-03-28 01:51:09', '2024-03-28 01:51:09'),
(10, 'mai@gmail.com', '$2y$10$qZI9hMFMk.bM/PFrHLXXMe1ns9Hb1KClcQgb.ULBuZ4LwQraLQ00S', 'Xuân Mai', '2', '2024-04-02 10:42:33', '2024-04-10 10:21:57'),
(11, 'thien@gmail.com', '$2y$10$EtV4uPt6qz.dinXrS9LC6O.SAX34LaPbad0hLZQ7PsCAHsRnGPbF2', 'Thành Nhân', '2', '2024-04-10 04:51:54', '2024-04-29 22:35:16'),
(12, 'trung@gmail.com', '$2y$10$n1FwidxcSp73IuEgiMy8VOwNhy8EOek.TYiNNKqX8zbYeUkPAfhpC', 'Trung Trần', '2', '2024-04-29 22:40:15', '2024-04-29 22:40:15'),
(13, 'ngocmai@gmail.com', '$2y$10$lUQBWev9N.S9afzz1br3f.HDuOO1o0Key42eB/Hmw.kNKCmlsO0Jm', 'Ngọc Mai', '2', '2024-04-29 22:43:31', '2024-04-29 22:43:31'),
(14, 'huy@gmail.com', '$2y$10$tT6NdgaU3yKHJRPDTQ.afOHzhBNCccDafE53dxlYOLrfQbaPIXbq2', 'Hoàng Huy', '2', '2024-04-29 22:45:02', '2024-04-29 22:45:02'),
(15, 'vy@gmail.com', '$2y$10$IB1KbuRiheYXOJGm6O/nvOGABWe0AWq4iAtqpR9U49FlhAJ8ZNCCO', 'Ngọc Vy', '2', '2024-04-29 22:46:32', '2024-04-29 22:46:32'),
(16, 'thuphuong@gmail.com', '$2y$10$ZX2PgrkidVugqJoo5retae.znLHgVaiWO/RXEM/4xSwRbB5lZy.9m', 'Thu Phương', '2', '2024-04-29 22:48:26', '2024-04-29 22:48:26'),
(17, 'minhthu@gmail.com', '$2y$10$TUDZBPaFd6JUunC38BkJKe9GCk48qJ3uGly55H0/p0L2.BD2Kf6T6', 'Minh Thư', '2', '2024-04-29 22:52:02', '2024-04-29 22:52:02'),
(18, 'nhatruc@gmail.com', '$2y$10$3ccJDa9KDAb4jK0Yqz6CVu/KzLMDaaBzD/Gi5vjMaBs4gEFq25PO2', 'Nhã Trúc', '2', '2024-04-29 22:56:24', '2024-04-29 22:56:24');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `join`
--
ALTER TABLE `join`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `union_members`
--
ALTER TABLE `union_members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `background`
--
ALTER TABLE `background`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `fund`
--
ALTER TABLE `fund`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `join`
--
ALTER TABLE `join`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `point`
--
ALTER TABLE `point`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `union_members`
--
ALTER TABLE `union_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
