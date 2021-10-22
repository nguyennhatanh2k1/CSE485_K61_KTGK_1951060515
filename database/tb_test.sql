-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2021 lúc 05:23 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_test`
--

CREATE TABLE `tb_test` (
  `id` varchar(15) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `exam_title` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `exam_datetime` datetime NOT NULL,
  `duration` varchar(15) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `total_question` int(11) NOT NULL,
  `marks_per_right_answer` float NOT NULL,
  `created_on` date NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `exam_code` varchar(15) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_test`
--

INSERT INTO `tb_test` (`id`, `exam_title`, `exam_datetime`, `duration`, `total_question`, `marks_per_right_answer`, `created_on`, `status`, `exam_code`) VALUES
('b1', 'bài thi số 1', '2021-10-22 10:16:08', '120 phút', 2, 5, '2021-10-22', 'completed', 'bt1'),
('b2', 'bài thi số 2', '2021-10-21 08:28:20', '120 phút', 4, 2.5, '2021-10-20', 'started', 'bt2'),
('b3', 'bài thi số 3', '2021-10-22 06:32:23', '120 phút', 2, 5, '2021-10-22', 'pending', 'bt3'),
('b4', 'bài thi số 4', '2021-10-21 10:20:41', '120 phút', 5, 2, '2021-10-19', 'created', 'bt4');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_test`
--
ALTER TABLE `tb_test`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
