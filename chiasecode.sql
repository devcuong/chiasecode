-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 07, 2020 lúc 08:19 AM
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
  `tieudecode` varchar(100) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `luottai` int(11) NOT NULL,
  `luaChonPhiTai` varchar(100) NOT NULL,
  `phitai` int(11) NOT NULL,
  `anhdaidien` varchar(200) NOT NULL,
  `danhmuc` int(11) NOT NULL,
  `theloai` int(11) NOT NULL,
  `motangan` text NOT NULL,
  `linkcode` varchar(200) NOT NULL,
  `linkdemo` varchar(100) NOT NULL,
  `camkethotro` int(2) NOT NULL,
  `hinhanhcode` text NOT NULL,
  `motachitiet` text NOT NULL,
  `huongdancaidat` text NOT NULL,
  `tukhoa` text NOT NULL,
  `dadocdieukhoan` int(2) NOT NULL,
  `thanhvienupload` int(11) NOT NULL,
  `duocduyet` int(1) NOT NULL,
  `ngayupdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `code`
--

INSERT INTO `code` (`id`, `tieudecode`, `luotxem`, `luottai`, `luaChonPhiTai`, `phitai`, `anhdaidien`, `danhmuc`, `theloai`, `motangan`, `linkcode`, `linkdemo`, `camkethotro`, `hinhanhcode`, `motachitiet`, `huongdancaidat`, `tukhoa`, `dadocdieukhoan`, `thanhvienupload`, `duocduyet`, `ngayupdate`) VALUES
(1, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, '', 300, 'https://sharecode.vn/FilesUpload/Code/source-code-bao-cao-xay-dung-phan-mem-quan-ly-luong-nhan-vien-172918.jpg', 16, 1, '', '', '', 0, '', '', '', '', 0, 0, 0, '2019-12-20 19:00:00'),
(2, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, '', 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 16, 2, '', '', '', 0, '', '', '', '', 0, 0, 0, '2019-12-20 20:00:00'),
(3, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, '', 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 16, 2, '', '', '', 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(4, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, '', 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 18, 2, '', '', '', 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(5, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, '', 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 19, 1, '', '', '', 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(6, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, '', 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 20, 1, '', '', '', 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(7, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, '', 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 21, 1, '', '', '', 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(8, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, '', 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 22, 1, '', '', '', 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(9, 'Mã nguồn code game tôm cua bầu 2019', 77, 0, '', 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 23, 3, '', '', '', 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(10, 'Mã nguồn code game tôm cua bầu 2019', 486, 0, '', 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 24, 3, '', '', '', 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(11, 'Mã nguồn code game tôm cua bầu 2019', 35, 0, '', 300, 'https://topcode.vn/FilesUpload/CodeLarge/ma-nguon-code-game-tom-cua-bau-2019-105759.jpg', 25, 3, '', '', '', 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(12, 'Mã nguồn code game tôm cua bầu 2019', 411, 0, '', 300, 'https://sharecode.vn/FilesUpload/Code/source-code-bao-cao-xay-dung-phan-mem-quan-ly-luong-nhan-vien-172918.jpg', 26, 1, '', '', '', 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(25, 'How do I get the current date and time in PHP?', 0, 0, 'CodeOK', 100, '1580879087.png', 23, 0, 'How do I get the current date and time in PHP?How do I get the current date and time in PHP?', 'https://stackoverflow.com/questions/5632662/saving-timestamp-in-mysql-table-using-php', 'https://stackoverflow.com/questions/5632662/saving-timestamp-in-mysql-table-using-php', 1, ',1580220083.png,1580221537.png,1580226804.png,sample-image.jpg', '&lt;p&gt;How do I get the current date and time in PHP?How do I get the current date and time in PHP?&lt;/p&gt;', '', 'jkkl,kjh,oi[', 1, 22, 0, '2020-02-04 23:04:47'),
(26, 'Source code website thương mại điện tử giao diện Ecome', 0, 0, 'CodeOK', 150, '1580897539.png', 23, 0, 'Source code website thương mại điện tử giao diện EcomeSource code website thương mại điện tử giao diện Ecome', 'https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm', 'https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm', 1, ',1580220083.png,1580221537.png,1580226804.png', '&lt;p&gt;&lt;a href=\"https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm\"&gt;https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm&lt;/a&gt;&lt;/p&gt;', '&lt;p&gt;&lt;a href=\"https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm\"&gt;https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm&lt;/a&gt;&lt;/p&gt;', 'abc,cba,ccc', 1, 56, 0, '2020-02-05 04:12:19'),
(27, 'Source code website thương mại điện tử giao diện Ecome', 0, 0, 'Free', 0, '1580898391.png', 15, 0, 'Source code website thương mại điện tử giao diện EcomeSource code website thương mại điện tử giao diện Ecome', 'https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm', 'https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm', 0, ',1580221537.png,1580226804.png,sample-image.jpg', '&lt;p&gt;&lt;a href=\"https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm\"&gt;https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm&lt;/a&gt;&lt;/p&gt;', '&lt;p&gt;&lt;a href=\"https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm\"&gt;https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm&lt;/a&gt;&lt;/p&gt;', 'abc,cba,gg', 1, 56, 0, '2020-02-05 04:26:31'),
(28, 'Source code website thương mại điện tử giao diện Ecome', 0, 0, 'CodeOK', 100, '1580898793.png', 15, 0, 'Source code website thương mại điện tử giao diện Source code website thương mại điện tử giao diện Ecome', 'https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm', 'https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm', 1, ',1580221537.png,1580226804.png,sample-image.jpg', '&lt;p&gt;&lt;a href=\"https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm\"&gt;https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm&lt;/a&gt;&lt;/p&gt;', '&lt;p&gt;&lt;a href=\"https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm\"&gt;https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm&lt;/a&gt;&lt;/p&gt;', 'yy,gj,kh', 1, 56, 0, '2020-02-05 04:33:13'),
(29, 'Source code website thương mại điện tử giao diện Ecome', 0, 0, 'Free', 0, '1580899090.png', 23, 0, 'Source code website thương mại điện tử giao diện Ecome Source code website thương mại điện tử giao diện Ecome', 'https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm', 'https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm', 0, ',1580221537.png,1580226804.png,sample-image.jpg', '&lt;p&gt;&lt;a href=\"https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm\"&gt;https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm&lt;/a&gt;&lt;/p&gt;', '&lt;p&gt;&lt;a href=\"https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm\"&gt;https://sharecode.vn/source-code/source-code-website-thuong-mai-dien-tu-giao-dien-ecome-25513.htm&lt;/a&gt;&lt;/p&gt;', 'aaa,bbb,ccc', 1, 56, 0, '2020-02-05 04:38:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `danhmuc` varchar(100) NOT NULL,
  `slugdanhmuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `danhmuc`, `slugdanhmuc`) VALUES
(15, 'Android', 'android'),
(16, 'Asp-Asp.net', 'aspaspnet'),
(17, 'Visual C#', 'visual-c'),
(18, 'Visual C++', 'visual-c'),
(19, 'Visual Basic', 'visual-basic'),
(20, 'Java-Jsp', 'javajsp'),
(21, 'PHP Mysql', 'php-mysql'),
(22, 'Khác', 'khac'),
(23, 'iOs', 'ios'),
(24, 'Cocos2d', 'cocos2d'),
(25, 'HTML & Template', 'html-template'),
(26, 'Window Phone', 'window-phone'),
(27, 'Unity', 'unity'),
(28, 'Joomla', 'joomla'),
(29, 'Wordpress', 'wordpress');

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `sdt` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `password`, `email`, `hoten`, `username`, `sdt`) VALUES
(52, '$2y$10$Y7SL6NnaBCF5trOWawj/juu80oVhCzmNFzpV9czkjO35jT6FHbpGS', 'abcdef@gmail.com', 'Tran Tam', 'TranTam15035', '0337085567'),
(53, '$2y$10$oQPqYKEGqz0c3MbWQ3j1AuBxm07OK7ThV6jGTq3GOy4jdbMWGu0ve', 'abcdef@gmail.com', 'Tran Tam', 'TranTam150366', '0337085585'),
(54, '$2y$10$7BTTqX5e1YJBaLkSsX/g9eB9LVdJZm0jNKC2S5VSFbx70lYMrvaai', 'abcdef@gmail.com', 'Tran Tam', 'TranTam1503', '0337085569'),
(55, '$2y$10$BeLpNik60BA7qVbu0h.6QOHTdhmvOmfwhVQJKgj7hg6E6MBdmtXry', 'teoem@gmail.com', 'Trần Tâm', 'TranTam1555', '0337085654'),
(56, '$2y$10$BQ9sSUT9kyOWjb.bD6/9/OAI9y161O/enLDhY2Bcv058zHm9BLRRi', 'viettxt@gmail.com', 'Tran Tam', 'TranTam15555', '0337085578');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(11) NOT NULL,
  `theloai` varchar(100) NOT NULL,
  `slugtheloai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `theloai`, `slugtheloai`) VALUES
(1, 'Website', 'website'),
(2, 'Phần mềm ứng dụng', 'phan-mem-ung-dung'),
(3, 'Game', 'game'),
(4, 'Khác', 'khac');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
