-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 11:07 AM
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
-- Cơ sở dữ liệu: `blood_donor`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_blood_donor`
--

CREATE TABLE `tb_blood_donor` (
  `bd_id` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `bd_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `bd_sex` tinyint(1) NOT NULL,
  `bd_age` int(11) NOT NULL,
  `bd_bgroup` varchar(2) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `bd_reg_date` date NOT NULL,
  `bd_phno` varchar(15) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_blood_donor`
--

INSERT INTO `tb_blood_donor` (`bd_id`, `bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_reg_date`, `bd_phno`) VALUES
('bd001', 'Nguyễn Nhật Anh', 1, 20, 'a', '2001-01-06', '0123456789'),
('bd002', 'Đinh Thị Nga', 0, 20, 'ab', '2001-01-18', '0987654321');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
