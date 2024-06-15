-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 15, 2024 lúc 04:27 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `khachhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin`
--

CREATE TABLE `thongtin` (
  `MaKhachhang` int(11) NOT NULL,
  `TenKhachhang` varchar(100) NOT NULL,
  `Diachi` varchar(200) NOT NULL,
  `Dienthoai` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtin`
--

INSERT INTO `thongtin` (`MaKhachhang`, `TenKhachhang`, `Diachi`, `Dienthoai`) VALUES
(1, 'Nguyễn Văn An', 'Số 123, Phố lò đúc, Quận Hai bà trưng', '0123456789'),
(2, 'Trần Thị Biên', 'Số 456, Phố Huế, Quận HBT', '0987654321'),
(3, 'tran hoang quy ', 'hướng đạo -tam dương - vĩnh phúc', '0325957707'),
(4, 'tran hoang quy ', 'hướng đạo -tam dương - vĩnh phúc', '0325957707'),
(5, 'tran hoang quy ', 'hướng đạo -tam dương - vĩnh phúc', '0325957708'),
(6, 'tran hoang quy ', 'hội hợp , vĩnh yên , vĩnh phúc', '0983157320'),
(7, 'tran hoang quy ', 'Hội Hợp , vĩnh yên , vĩnh phúc', '0983157323'),
(8, 'tran hoang quy ', 'hội      hợp , vĩnh yên , vĩnh phúc', '0325957706'),
(9, 'tran hoang quy ', 'hội hợp , vĩnh yên , vĩnh phúc', '0325957700');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD PRIMARY KEY (`MaKhachhang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  MODIFY `MaKhachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
