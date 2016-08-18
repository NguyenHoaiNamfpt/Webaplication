-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2015 at 12:52 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asiment1`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `id` int(11) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `mau` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(1, 'Thời Trang Bé Gái'),
(2, 'Thời Trang Bé Trai');

-- --------------------------------------------------------

--
-- Table structure for table `quanlikhachhang`
--

CREATE TABLE `quanlikhachhang` (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `namsinh` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `quanlikhachhang`
--

INSERT INTO `quanlikhachhang` (`id`, `hoten`, `email`, `matkhau`, `gioitinh`, `namsinh`) VALUES
(1, 'Nguyễn Hoài Nam', 'admin@gmail.com', '12345678', 1, 1995),
(2, 'Mac Hong Quan', 'banhmi@gmail.com', '123456', 2, 1995);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensanpham` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gia` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensanpham`, `hinhanh`, `gia`) VALUES
(1, 'Váy đỏ cổ trắng nơ eo', 'vay1.jpg', '50000'),
(2, 'Váy hồng nơ ngực cho bé gái', 'vay2.jpg', '47500'),
(3, 'Bộ nỉ bông bé trai Sunbibi (1-8 tuổi)', 'ao1.jpg', '75500'),
(4, 'Áo nhí tay dài in hình sư tử Anakids (9-24M)', 'ao4.jpg', '47700'),
(5, 'Áo khoác xe đua 45 Anakids (size 2-5Y)', 'ao2.jpg', '77000'),
(6, 'Quần đùi bé trai TA', 'quan3.jpg', '25500'),
(7, 'Quần cộc bé trai màu đỏ', 'quan5.png', '79800'),
(8, 'Quần bò zara bé trai', 'quan1.jpg', '36500'),
(9, 'Quần đùi dệt kim Hà Nội cho bé', 'quan2.jpg', '89000'),
(10, 'Áo dài hình gấu xinh xắn cho bé', 'ao3.jpg', '50000'),
(11, 'Quần jean tuyệt vời cho bé', 'quan4.jpg', '79500'),
(12, 'váy đỏ xinh xinh cho be', 'vay3.jpg', '75890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quanlikhachhang`
--
ALTER TABLE `quanlikhachhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quanlikhachhang`
--
ALTER TABLE `quanlikhachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
