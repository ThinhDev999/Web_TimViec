-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2022 lúc 04:13 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webproj`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhatuyendung`
--

CREATE TABLE `nhatuyendung` (
  `id` int(12) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuyennganh` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhatuyendung`
--

INSERT INTO `nhatuyendung` (`id`, `name`, `username`, `password`, `chuyennganh`) VALUES
(1, 'Conrua', 'ThinhDoLa@gmail.com', '123456', 'IT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `dob`, `sex`) VALUES
(1, 'thinh', 'thinhdola@gmail.com', '123456', '2022-12-14', 'nam'),
(2, 'thach', 'thach123@gmail.com', '123456', '2022-12-14', 'Nam'),
(3, 'ManhThinh', 'Thinh123@gmail.com', '123', '2022-12-14', 'Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vieclam`
--

CREATE TABLE `vieclam` (
  `so` int(5) NOT NULL,
  `TenViecLam` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenCongTy` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Luong` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` char(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigian` char(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vieclam`
--

INSERT INTO `vieclam` (`so`, `TenViecLam`, `TenCongTy`, `Luong`, `DiaChi`, `thoigian`) VALUES
(19, 'Junior Game Developer (C++) ', 'CÔNG TY TNHH GAMELOFT VIETNAM', 'Thoả thuận', 'Hồ Chí Minh', 'cong-ty-tnhh-gameloft-vietnam-57b803b61021a_rs.jpg'),
(20, 'Unity Developer Intern - Làm Việc Từ Thứ 2 Đến Thứ 6, Hỗ Trợ Lương Đến 6 Triệu/ Tháng', 'CÔNG TY CỔ PHẦN HIGAME', 'Tới 6 triệu', 'Hồ Chí Minh', 'EufEMSUaknRoAUf7tiqDldl5eKED6FNs_1655112746____4515a00c07830e71db4588a103bd3055.png'),
(22, 'Lập Trình Viên Unity Developer (Game Mobile)', 'CÔNG TY TNHH BEYOND STUDIO', 'Tới 1,200 USD', 'Hà Nội', 'cong-ty-tnhh-beyond-studio-63734cbc29e60.png'),
(24, 'Fresher Game Developer ', 'CÔNG TY TNHH ATHENA STUDIO', '20 - 30 triệu', 'Hà Nội', 'cong-ty-tnhh-athena-studio-62397452784d6.png'),
(26, 'Unity Developer - Up To 25M', 'AT SOFT JOINT STOCK COMPANY', '15 - 30 triệu', 'Hà Nội', 'Lo9hVJleFibwuxGt2sKn7dgW1YjJ6B1w_1647919311____7a25e9a4b6802f528823e2c3c162f79b.png'),
(28, 'Game Developer', 'CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ VGS', 'Thoả thuận', 'Hà Nội', '7c45bc0de63b487da2f32a4604e50c89-623d921c8dd96.jpg'),
(30, 'Unity Game Developer', 'CÔNG TY TNHH BACOOR VIỆT NAM', '800-1,500 USD', 'Hồ Chí Minh', 'dcb38ade712030a313a77d9d1d9f8038-629ffb4c7eaeb.jpg'),
(32, 'Lập Trình Game Unity 3D (Junior)', 'CÔNG TY CỔ PHẦN CÔNG NGHỆ MALCOM', 'Tới 1,000 USD', 'Hồ Chí Minh', 'lXRBGatj7DOYbAlgZA9qip5UM6BNgoSL_1639556340____72d337f8478836176abf6f283c8fe1ec.png'),
(35, 'Dev Unity', 'CÔNG TY TNHH GAMELOFT VIETNAM', '10- 20 triệu', 'Hà Nội', 'cong-ty-co-phan-techasians-5c3457da1ec69_rs.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vieclam`
--
ALTER TABLE `vieclam`
  ADD PRIMARY KEY (`so`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `vieclam`
--
ALTER TABLE `vieclam`
  MODIFY `so` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
