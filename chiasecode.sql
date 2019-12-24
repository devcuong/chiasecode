-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 24, 2019 lúc 08:28 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chiasecode`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `code`
--

CREATE TABLE `code` (
  `id` int(11) NOT NULL,
  `tencode` varchar(100) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `luottai` int(11) NOT NULL,
  `phitai` int(11) NOT NULL,
  `anhdemo` varchar(200) NOT NULL,
  `loaicode` int(11) NOT NULL,
  `loaiungdung` int(11) NOT NULL,
  `ngayupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `code`
--

INSERT INTO `code` (`id`, `tencode`, `luotxem`, `luottai`, `phitai`, `anhdemo`, `loaicode`, `loaiungdung`, `ngayupdate`) VALUES
(1, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, 300, 'https://sharecode.vn/FilesUpload/Code/source-code-bao-cao-xay-dung-phan-mem-quan-ly-luong-nhan-vien-172918.jpg', 16, 1, '2019-12-21 02:00:00'),
(2, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 16, 2, '2019-12-21 03:00:00'),
(3, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 16, 2, '0000-00-00 00:00:00'),
(4, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 18, 2, '0000-00-00 00:00:00'),
(5, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 19, 1, '0000-00-00 00:00:00'),
(6, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 20, 1, '0000-00-00 00:00:00'),
(7, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 21, 1, '0000-00-00 00:00:00'),
(8, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 22, 1, '0000-00-00 00:00:00'),
(9, 'Mã nguồn code game tôm cua bầu 2019', 77, 0, 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 23, 3, '0000-00-00 00:00:00'),
(10, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 24, 3, '0000-00-00 00:00:00'),
(11, 'Mã nguồn code game tôm cua bầu 2019', 35, 0, 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 25, 3, '0000-00-00 00:00:00'),
(12, 'Mã nguồn code game tôm cua bầu 2019', 411, 0, 300, 'https://sharecode.vn/FilesUpload/Code/source-code-bao-cao-xay-dung-phan-mem-quan-ly-luong-nhan-vien-172918.jpg', 26, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaicode`
--

CREATE TABLE `loaicode` (
  `id` int(11) NOT NULL,
  `theloai` varchar(100) NOT NULL,
  `slugtheloai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaicode`
--

INSERT INTO `loaicode` (`id`, `theloai`, `slugtheloai`) VALUES
(1, 'Website', 'website'),
(2, 'Phần mềm - Ứng dụng', 'phan-mem-ung-dung'),
(3, 'Game', 'game'),
(4, 'Khác', 'khac'),
(15, 'Android', 'android'),
(16, 'Asp/Asp.Net', 'aspaspnet'),
(17, 'Visual C#', 'visual-c'),
(18, 'Visual C++', 'visual-c'),
(19, 'Visual Basic', 'visual-basic'),
(20, 'Java/JSP', 'javajsp'),
(21, 'PHP & MySQL', 'php-mysql'),
(22, 'Khác', 'khac'),
(23, 'iOS', 'ios'),
(24, 'Cocos2D', 'cocos2d'),
(25, 'Html & Template', 'html-template'),
(26, 'Windows phone', 'windows-phone'),
(27, 'Unity', 'unity'),
(28, 'Joomla', 'joomla'),
(29, 'WordPress', 'wordpress');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `namsinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `hoten`, `namsinh`) VALUES
(1, 'Trần Văn Tí', 2002),
(2, 'Nguyễn Văn Tèo', 2001);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaicode`
--
ALTER TABLE `loaicode`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `loaicode`
--
ALTER TABLE `loaicode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
