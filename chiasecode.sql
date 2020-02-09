-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 09, 2020 lúc 11:10 AM
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
  `yeuthich` int(11) NOT NULL,
  `luachonphitai` varchar(100) NOT NULL,
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
  `hienthi` int(1) NOT NULL,
  `loaifile` varchar(100) NOT NULL,
  `dungluong` varchar(100) NOT NULL,
  `ngayupdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `code`
--

INSERT INTO `code` (`id`, `tieudecode`, `luotxem`, `luottai`, `yeuthich`, `luachonphitai`, `phitai`, `anhdaidien`, `danhmuc`, `theloai`, `motangan`, `linkcode`, `linkdemo`, `camkethotro`, `hinhanhcode`, `motachitiet`, `huongdancaidat`, `tukhoa`, `dadocdieukhoan`, `thanhvienupload`, `duocduyet`, `hienthi`, `loaifile`, `dungluong`, `ngayupdate`) VALUES
(57, 'Souce code quản lý cửa hàng máy lạnh + Database (C#, devexpres)', 0, 0, 0, 'Free', 0, '1581075141.png', 15, 2, 'Souce code quản lý cửa hàng máy lạnh + Database (C#, devexpres) Souce code quản lý cửa hàng máy lạnh + Database (C#, devexpres)', 'https://sharecode.vn/source-code/souce-code-quan-ly-cua-hang-may-lanh-database-c-devexpres-25509.htm', 'https://sharecode.vn/source-code/souce-code-quan-ly-cua-hang-may-lanh-database-c-devexpres-25509.htm', 0, '1581075141-TranTam1555576765581_151682822881437_436085359755919360_n.jpg,1581075141-TranTam1555576779511_151682799548106_2485182985020637184_n.jpg,1581075141-TranTam1555576902983_151682632881456_2364455873851424768_n.jpg', '&lt;p&gt;&lt;a href=\"https://sharecode.vn/source-code/souce-code-quan-ly-cua-hang-may-lanh-database-c-devexpres-25509.htm\"&gt;https://sharecode.vn/source-code/souce-code-quan-ly-cua-hang-may-lanh-database-c-devexpres-25509.htm&lt;/a&gt;&lt;/p&gt;', '&lt;p&gt;&lt;a href=\"https://sharecode.vn/source-code/souce-code-quan-ly-cua-hang-may-lanh-database-c-devexpres-25509.htm\"&gt;https://sharecode.vn/source-code/souce-code-quan-ly-cua-hang-may-lanh-database-c-devexpres-25509.htm&lt;/a&gt;&lt;/p&gt;', 'aaa,bbb,ccc', 1, 56, 0, 1, '', '', '2020-02-07 05:32:21'),
(58, 'Đề tài quản lý thư viện full code c# + báo cáo', 0, 0, 15, 'CodeOK', 100, '1581085309.png', 17, 2, 'Đề tài quản lý thư viện full code c# + báo cáoĐề tài quản lý thư viện full code c# + báo cáoĐề tài quản lý thư viện full code c# + báo cáo', 'https://sharecode.vn/source-code/de-tai-quan-ly-thu-vien-full-code-c-bao-cao-165.htm', 'https://sharecode.vn/source-code/de-tai-quan-ly-thu-vien-full-code-c-bao-cao-165.htm', 1, '1581085309-TranTam15555DSC00092.jpg', '&lt;p&gt;Đề t&amp;agrave;i quản l&amp;yacute; thư viện full code c# + b&amp;aacute;o c&amp;aacute;oĐề t&amp;agrave;i quản l&amp;yacute; thư viện full code c# + b&amp;aacute;o c&amp;aacute;oĐề t&amp;agrave;i quản l&amp;yacute; thư viện full code c# + b&amp;aacute;o c&amp;aacute;o&lt;/p&gt;', '&lt;p&gt;Đề t&amp;agrave;i quản l&amp;yacute; thư viện full code c# + b&amp;aacute;o c&amp;aacute;oĐề t&amp;agrave;i quản l&amp;yacute; thư viện full code c# + b&amp;aacute;o c&amp;aacute;oĐề t&amp;agrave;i quản l&amp;yacute; thư viện full code c# + b&amp;aacute;o c&amp;aacute;o&lt;/p&gt;', 'aaa,bbb,ccc', 1, 56, 1, 1, '', '', '2020-02-07 08:21:49');

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
(56, '$2y$10$BQ9sSUT9kyOWjb.bD6/9/OAI9y161O/enLDhY2Bcv058zHm9BLRRi', 'viettxt@gmail.com', 'Tran Tam', 'TranTam15555', '0337085578'),
(57, '$2y$10$gXuigZF5EQQhndb7r5p9rOadDj0Ql8rW143bFYqNrzn6XQJtKWPs2', 'cuong.dh8c@gmail.com', 'tran teo', 'admin', '0337085555');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
