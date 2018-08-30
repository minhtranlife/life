-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 10:22 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `life_local`
--

-- --------------------------------------------------------

--
-- Table structure for table `dmsanpham`
--

CREATE TABLE `dmsanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `nhomsp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioithieusp` text COLLATE utf8_unicode_ci,
  `tinhnangsp` text COLLATE utf8_unicode_ci,
  `capnhatsp` text COLLATE utf8_unicode_ci,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmsanpham`
--

INSERT INTO `dmsanpham` (`id`, `nhomsp`, `tensp`, `gioithieusp`, `tinhnangsp`, `capnhatsp`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Phần mềm quản lý', 'Quản lý bán trú', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Phần mềm quản lý', 'Quản lý trường học', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Phần mềm kế toán', 'Kế toán xã phường', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Phần mềm kế toán', 'Kế toán hành chính sự nghiệp', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Phần mềm quản lý', 'Quản lý tư pháp hộ tịch', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Phần mềm quản lý', 'Quản lý khiếu nại tố cáo', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Phần mềm quản lý', 'Quản lý nhân sự', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Phần mềm quản lý', 'Quản lý dinh dưỡng', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Phần mềm quản lý', 'Quản lý bảo trợ xã hội', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Phần mềm quản lý', 'Quản lý tài sản', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Phần mềm quản lý', 'Quản lý người có công', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Phần mềm quản lý', 'Quản lý CSDL về giá', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_08_29_100645_create_dmsanpham_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dmsanpham`
--
ALTER TABLE `dmsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dmsanpham`
--
ALTER TABLE `dmsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
