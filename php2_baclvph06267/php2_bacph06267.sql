-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 21, 2019 lúc 04:01 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php2_bacph06267`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `logo` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cveated_year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `schools`
--

INSERT INTO `schools` (`id`, `name`, `logo`, `slogan`, `address`, `cveated_year`) VALUES
(3, 'Carolanne Metz IV update', 'images/products/5c832a3ad8333-', '7', 'fsdaf', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `avatar` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `birth_date` date NOT NULL,
  `school_id` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`id`, `full_name`, `avatar`, `birth_date`, `school_id`, `address`, `class_name`, `status`) VALUES
(1, 'bac udate', 'images/products/5c8331b8be97b-19260220_223631671478799_4070231078850174594_n.jpg', '2019-03-16', 4, '1', '1', 0),
(2, 'bac udat', '', '0000-00-00', 0, '', '', 0),
(3, '', '', '0000-00-00', 0, '', '', 0),
(4, '', '', '0000-00-00', 0, '', '', 0),
(5, '', 'images/products/5c83352ebd339-ao1.png', '2019-03-10', 4, 'fsdaf', 'ádsadas', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
