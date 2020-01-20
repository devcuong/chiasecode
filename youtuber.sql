-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 20, 2020 lúc 02:02 AM
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
-- Cơ sở dữ liệu: `youtuber`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `theloai` varchar(100) NOT NULL,
  `slugtheloai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `theloai`, `slugtheloai`) VALUES
(1, 'Review Sản phẩm', 'review-san-pham'),
(2, 'Vlog', 'vlog'),
(3, 'Ẩm thực', 'am-thuc'),
(4, 'Cover', 'cover'),
(15, 'Gym', 'gym'),
(16, 'Hài-parody', 'hai-parody'),
(17, 'Người Nổi Tiếng', 'nguoi-noi-tieng'),
(18, 'Động vật hài hước', 'dong-vat-hai-huoc'),
(19, 'Trò đùa - troll', 'tro-dua-troll'),
(20, 'Đập hộp', 'dap-hop'),
(21, 'Hướng dẫn Tutorials', 'huong-dan-tutorials'),
(22, 'Gaming', 'gaming'),
(23, 'Đánh Giá - Reaction', 'danh-gia-reaction'),
(24, 'Phim ảnh', 'phim-anh'),
(25, 'Du lịch', 'du-lich'),
(26, 'Tin học', 'tin-hoc'),
(27, 'Kinh doanh', 'kinh-doanh'),
(28, 'Âm nhạc', 'am-nhac'),
(29, 'Trang điểm, làm đẹp', 'trang-diem-lam-dep');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kenhyoutube`
--

CREATE TABLE `kenhyoutube` (
  `id` int(11) NOT NULL,
  `tencode` varchar(100) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `luotsub` int(11) NOT NULL,
  `phitai` int(11) NOT NULL,
  `anhdemo` varchar(200) NOT NULL,
  `danhmuc` int(11) NOT NULL,
  `loaiungdung` int(11) NOT NULL,
  `ngayupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `kenhyoutube`
--

INSERT INTO `kenhyoutube` (`id`, `tencode`, `luotxem`, `luotsub`, `phitai`, `anhdemo`, `danhmuc`, `loaiungdung`, `ngayupdate`) VALUES
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
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
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
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
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
