-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2018 at 05:12 AM
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
(1, 'Phần mềm kế toán', 'Kế toán xã phường ', '-Mô tả\r\n-Sản phẩm\r\n-dsadsadsađasadsadl l ll l l \r\n- sd ađasad', 'l -Tính Năng\r\n-Sản phẩm', 'l - hướng dẫn sử dụng ', '1005.jpg', NULL, '2018-09-04 09:27:55'),
(2, 'Phần mềm kế toán', 'Kế toán hành chính sự nghiệp', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Phần mềm quản lý', 'Quản lý bán trú', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Phần mềm quản lý', 'Quản lý trường học', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Phần mềm quản lý', 'Quản lý tư pháp hộ tịch', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Phần mềm quản lý', 'Quản lý khiếu nại tố cáo', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Phần mềm quản lý', 'Quản lý nhân sự', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Phần mềm quản lý', 'Quản lý dinh dưỡng', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Phần mềm quản lý', 'Quản lý bảo trợ xã hội', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Phần mềm quản lý', 'Quản lý tài sản', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Phần mềm quản lý', 'Quản lý người có công', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Phần mềm quản lý', 'Quản lý CSDL về giá', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Phần mềm quản lý', 'Quản lý lương và biên chế', '', '', '', NULL, '2018-09-07 04:27:47', '2018-09-07 04:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `lichtaphuan`
--

CREATE TABLE `lichtaphuan` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diadanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tungay` text COLLATE utf8_unicode_ci,
  `denngay` text COLLATE utf8_unicode_ci,
  `sldv` text COLLATE utf8_unicode_ci,
  `tensp` text COLLATE utf8_unicode_ci,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, '2018_08_29_100645_create_dmsanpham_table', 1),
(2, '2018_09_05_140357_create_user_table', 2),
(5, '2018_09_06_133045_create_lichtaphuan_table', 3),
(6, '2018_09_07_145339_create_vitrituyendung_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `per` text COLLATE utf8_unicode_ci,
  `sadmin` text COLLATE utf8_unicode_ci,
  `level` text COLLATE utf8_unicode_ci,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `per`, `sadmin`, `level`, `avatar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'minhtranlife@gmail.com', '107e8cf7f2b4531f6b2ff06dbcf94e10', 'Minh Trần', NULL, 'ssa', 'Administrator', NULL, 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vitrituyendung`
--

CREATE TABLE `vitrituyendung` (
  `id` int(10) UNSIGNED NOT NULL,
  `vitri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soluong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hannophs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  `yeucau` text COLLATE utf8_unicode_ci,
  `quyenloi` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vitrituyendung`
--

INSERT INTO `vitrituyendung` (`id`, `vitri`, `soluong`, `hannophs`, `mota`, `yeucau`, `quyenloi`, `created_at`, `updated_at`) VALUES
(1, 'Thiết kế giao diện & đồ họa', '01', '31/12/2018', '- Thiết kế logo, banner cho công ty và các sản phẩm.\r\n- Thiết kế giao diện cho các ứng dụng Web & điện thoại.\r\n- Thiết kế poster, tờ rơi,...', '- Có kinh nghiệm thiết kế logo, banner.\r\n- Có kinh nghiệm thiết kế giao diện cho ứng dụng Web & điện thoại.\r\n- Nhiệt tình, có trách nhiệm với công việc.', '- Được hưởng các chế độ lao động theo đúng luật LĐVN\r\n- Các chế độ thưởng riêng của công ty (thưởng theo dự án, theo thành tích,...)\r\n- Được xét tăng lương 2 lần/năm.\r\n- Được tham gia các hoạt động teamwork, teambuilding,... do công ty tổ chức.\r\n- Được khám sức khỏe định kỳ 1 lần/năm.\r\n- Được tham gia các hoạt động học tập, các hoạt động phong trào như thể thao, văn nghệ... của công ty.', '2018-09-08 02:33:49', '2018-09-08 03:06:36'),
(2, 'Lập trình viên', '03', '31/12/2018', 'Tham gia vào thiết kế, lập trình dự án ứng dụng trên nền web là sản phẩm của công ty hoặc đối tác nước ngoài sử dụng PHP và sử dụng Laravel, Drupal, Code Igniter hoặc Wordpress.', '- Có kinh nghiệm ít nhất 2 năm làm:  Laravel\r\n- Bắt buộc phải có kinh nghiệm JavaScript\r\n- Sử dụng thành thạo 1 trong các công cụ quản lý code và quản lý công việc như Github, Bitbuket, SVN, JIRA\r\n- Sử dụng thành thạo Linux (Centos, Ubuntu, Redhat) ví dụ như Setup LAMP stack trên Linux server, configure Virtual Host, có thể lập trình trực tiếp trên Linux\r\n- Ưu tiên nếu có thêm kinh nghiệm làm Drupal, Code Igniter hoặc Wordpress', '- Được hưởng các chế độ lao động theo đúng luật LĐVN\r\n- Các chế độ thưởng riêng của công ty (thưởng theo dự án, theo thành tích,...)\r\n- Được xét tăng lương 2 lần/năm.\r\n- Được tham gia các hoạt động teamwork, teambuilding,... do công ty tổ chức.\r\n- Được khám sức khỏe định kỳ 1 lần/năm.\r\n- Được tham gia các hoạt động học tập, các hoạt động phong trào như thể thao, văn nghệ... của công ty.', '2018-09-08 02:34:16', '2018-09-08 03:06:49'),
(3, 'Kinh doanh phần mềm', '03', '31/12/2018', '- Tìm kiếm khách hàng & bán phần mềm \r\n- Chăm sóc & hỗ trợ khách hàng sau khi bán phần mềm', '- Tốt nghiệp cao đẳng & đại học...\r\n- Có đam mê về lĩnh vực kinh doanh, yêu thích đi lại và giao tiếp trực tiếp với khách hàng\r\n- Giao tiếp tốt, ngoại hình dễ nhìn, nhanh nhạy', '- Được hưởng các chế độ lao động theo đúng luật LĐVN\r\n- Các chế độ thưởng riêng của công ty (thưởng theo dự án, theo thành tích,...)\r\n- Được xét tăng lương 2 lần/năm.\r\n- Được khám sức khỏe định kỳ 1 lần/năm.\r\n- Được tham gia các hoạt động học tập, các hoạt động phong trào như thể thao, văn nghệ... của công ty.', '2018-09-08 02:34:44', '2018-09-08 03:06:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dmsanpham`
--
ALTER TABLE `dmsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lichtaphuan`
--
ALTER TABLE `lichtaphuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitrituyendung`
--
ALTER TABLE `vitrituyendung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dmsanpham`
--
ALTER TABLE `dmsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `lichtaphuan`
--
ALTER TABLE `lichtaphuan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vitrituyendung`
--
ALTER TABLE `vitrituyendung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
