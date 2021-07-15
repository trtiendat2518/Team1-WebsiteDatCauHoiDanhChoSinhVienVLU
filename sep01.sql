-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 02:28 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sep01`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_info_id` int(11) DEFAULT NULL,
  `admin_avatar` varchar(255) DEFAULT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_role` int(11) NOT NULL,
  `admin_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_info_id`, `admin_avatar`, `admin_name`, `admin_email`, `admin_password`, `admin_role`, `admin_status`) VALUES
(1, NULL, NULL, 'Dang Dinh Hoa', 'hoa.dd@vlu.edu.vn', 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
(2, NULL, NULL, 'BCN Khoa', 'khoa@vlu.edu.vn', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(3, NULL, NULL, 'Trợ lý', 'troly@vlu.edu.vn', 'e10adc3949ba59abbe56e057f20f883e', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_info`
--

CREATE TABLE `tbl_admin_info` (
  `admin_info_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `admin_info_avatar` varchar(255) NOT NULL,
  `admin_info_gender` int(11) NOT NULL,
  `admin_info_date` varchar(255) NOT NULL,
  `admin_info_phone` int(10) NOT NULL,
  `admin_info_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_status`) VALUES
(1, 'Giảng viên', 0),
(2, 'Nhà trường', 0),
(3, 'Môn học', 0),
(4, 'Lịch học', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `comment_code` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `post_id`, `student_id`, `comment_code`, `comment_content`, `created_at`) VALUES
(2, 25, 4, 'COMMENT8b60644ce7620b34bab06b7fff4e0ba1', 'Xin choa ban', '2021-07-14 11:35:04'),
(3, 24, 4, 'COMMENT8a4251b89c05617c13c10f6161dbac3c', 'Hello ban Quang', '2021-07-14 11:35:33'),
(4, 2, 6, 'COMMENT578ec26f421c36979cc5ef9e72a80ef0', 'Xin chao ban', '2021-07-14 11:51:02'),
(5, 27, 4, 'COMMENT84d08ac7da1594173e315bd3f40780ad', 'fdfds', '2021-07-14 16:16:51'),
(6, 27, 4, 'COMMENT30c5b14f21025f31adfe4e1d4c1ebbe8', 'ádasd', '2021-07-14 16:21:47'),
(7, 27, 6, 'COMMENT8d7e2b5bdcacca895df3e1978922e073', 'dfsd', '2021-07-14 16:22:26'),
(8, 25, 6, 'COMMENTc919f77453d69e9afcf7049b80c85fd5', 'sfsđs', '2021-07-14 16:22:30'),
(9, 26, 4, 'COMMENT7cd212b4ba748ceab8749b5fbcd77097', 'sdfds', '2021-07-15 00:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_name`, `course_status`) VALUES
(1, 'K24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_code` varchar(10) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `faculty_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`faculty_id`, `faculty_code`, `faculty_name`, `faculty_status`) VALUES
(1, 'CNTT', 'Công nghệ thông tin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_like`
--

CREATE TABLE `tbl_like` (
  `like_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `like_code` varchar(255) NOT NULL,
  `like_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_like`
--

INSERT INTO `tbl_like` (`like_id`, `post_id`, `student_id`, `like_code`, `like_quantity`) VALUES
(13, 24, 4, 'LIKE376496d69eb22b527367525d576e8c3f', 1),
(14, 25, 4, 'LIKE792893b456b2c1abafc7223c3f2414ef', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nofication`
--

CREATE TABLE `tbl_nofication` (
  `nofication_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `nofication_mine` varchar(255) NOT NULL,
  `nofication_kind` varchar(100) NOT NULL,
  `nofication_code` varchar(255) NOT NULL,
  `nofication_status` int(11) NOT NULL,
  `nofication_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nofication`
--

INSERT INTO `tbl_nofication` (`nofication_id`, `post_id`, `student_id`, `nofication_mine`, `nofication_kind`, `nofication_code`, `nofication_status`, `nofication_created`) VALUES
(4, 2, 6, 'a87ff679a2f3e71d9181a67b7542122c', 'Comment', 'COMMENT578ec26f421c36979cc5ef9e72a80ef0', 0, '2021-07-14 11:51:02'),
(5, 24, 4, '1679091c5a880faf6fb5e6087eb1b2dc', 'Like', 'LIKE376496d69eb22b527367525d576e8c3f', 0, '2021-07-14 12:06:23'),
(6, 25, 4, '8f14e45fceea167a5a36dedd4bea2543', 'Like', 'LIKE792893b456b2c1abafc7223c3f2414ef', 0, '2021-07-14 12:06:25'),
(7, 27, 6, 'a87ff679a2f3e71d9181a67b7542122c', 'Comment', 'COMMENT8d7e2b5bdcacca895df3e1978922e073', 0, '2021-07-14 16:22:26'),
(8, 25, 6, '8f14e45fceea167a5a36dedd4bea2543', 'Comment', 'COMMENTc919f77453d69e9afcf7049b80c85fd5', 0, '2021-07-14 16:22:31'),
(9, 26, 4, 'c9f0f895fb98ab9159f51fd0297e236d', 'Comment', 'COMMENT7cd212b4ba748ceab8749b5fbcd77097', 0, '2021-07-15 00:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `post_like` int(100) NOT NULL DEFAULT 0,
  `post_pin` int(11) NOT NULL DEFAULT 0,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `student_id`, `post_title`, `category_id`, `post_content`, `post_like`, `post_pin`, `created_at`) VALUES
(2, 4, 'Tiêu đề 1', 1, 'Nội dung sinh viên muốn hỏi 1', 0, 0, '2021-07-14 18:50:52'),
(3, 5, 'Tiêu đề 2', 2, 'Nội dung sinh viên muốn hỏi 2', 0, 0, '2021-06-21 17:25:19'),
(4, 6, 'Tiêu đề 3', 3, 'Nội dung sinh viên muốn hỏi 3', 0, 0, '2021-06-22 17:25:20'),
(5, 7, 'Tiêu đề 4', 4, 'Nội dung sinh viên muốn hỏi 4', 0, 0, '2021-07-10 17:25:21'),
(6, 8, 'Tiêu đề 5', 4, 'Nội dung sinh viên muốn hỏi 5', 0, 0, '2021-07-11 17:25:22'),
(7, 8, 'Tiêu đề 6', 3, 'Nội dung sinh viên muốn hỏi 6', 0, 0, '2021-07-12 17:25:23'),
(8, 7, 'Tiêu đề 7', 2, 'Nội dung sinh viên muốn hỏi 7', 0, 0, '2021-07-13 17:25:24'),
(9, 6, 'Tiêu đề 8', 1, 'Nội dung sinh viên muốn hỏi 8', 0, 0, '2021-07-14 17:25:25'),
(10, 5, 'Tiêu đề 9', 1, 'Nội dung sinh viên muốn hỏi 9', 0, 0, '2021-07-14 17:25:26'),
(11, 4, 'Tiêu đề 10', 2, 'Nội dung sinh viên muốn hỏi 10', 0, 0, '2021-07-14 17:25:27'),
(12, 4, 'Tiêu đề 11', 3, 'Nội dung sinh viên muốn hỏi 11', 0, 0, '2021-07-14 17:25:28'),
(13, 5, 'Tiêu đề 12', 4, 'Nội dung sinh viên muốn hỏi 12', 0, 0, '2021-07-14 17:25:29'),
(14, 6, 'Tiêu đề 13', 4, 'Nội dung sinh viên muốn hỏi 13', 0, 0, '2021-07-14 17:25:30'),
(15, 7, 'Tiêu đề 14', 3, 'Nội dung sinh viên muốn hỏi 14', 0, 0, '2021-07-14 17:25:31'),
(16, 8, 'Tiêu đề 15', 2, 'Nội dung sinh viên muốn hỏi 15', 0, 0, '2021-07-14 17:25:32'),
(17, 8, 'Tiêu đề 16', 1, 'Nội dung sinh viên muốn hỏi 16', 0, 0, '2021-07-14 17:25:33'),
(18, 7, 'Tiêu đề 17', 1, 'Nội dung sinh viên muốn hỏi 17', 0, 0, '2021-07-14 17:25:34'),
(19, 6, 'Tiêu đề 18', 2, 'Nội dung sinh viên muốn hỏi 18', 0, 0, '2021-07-14 17:25:35'),
(20, 5, 'Tiêu đề 19', 3, 'Nội dung sinh viên muốn hỏi 19', 0, 0, '2021-07-14 17:25:36'),
(21, 4, 'Tiêu đề 20', 4, 'Nội dung sinh viên muốn hỏi 20', 0, 0, '2021-07-14 17:25:37'),
(22, 4, 'Tiêu đề 21', 4, 'Nội dung sinh viên muốn hỏi 21', 0, 0, '2021-07-14 17:25:38'),
(23, 5, 'Tiêu đề 22', 3, 'Nội dung sinh viên muốn hỏi 22', 0, 0, '2021-07-14 17:25:39'),
(24, 6, 'Tiêu đề 23', 2, 'Nội dung sinh viên muốn hỏi 23', 1, 0, '2021-07-14 19:06:24'),
(25, 7, 'Tiêu đề 24', 1, 'Nội dung sinh viên muốn hỏi 24', 800, 0, '2021-07-14 19:06:25'),
(26, 8, 'Tiêu đề 25', 4, 'Nội dung sinh viên muốn hỏi 25', 200, 1, '2021-07-14 17:25:42'),
(27, 4, 'ègdg', 3, 'dfgdfg', 0, 0, '2021-07-14 23:16:25'),
(28, 4, 'sdfsd', 1, 'fsdfsd', 0, 0, '2021-07-14 23:28:43'),
(29, 4, 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 3, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 0, 0, '2021-07-15 06:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reply`
--

CREATE TABLE `tbl_reply` (
  `reply_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `reply_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_specialized`
--

CREATE TABLE `tbl_specialized` (
  `specialized_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `specialized_name` varchar(50) NOT NULL,
  `specialized_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_specialized`
--

INSERT INTO `tbl_specialized` (`specialized_id`, `faculty_id`, `specialized_name`, `specialized_status`) VALUES
(1, 1, 'Kỹ thuật phần mềm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statistic`
--

CREATE TABLE `tbl_statistic` (
  `statistic_id` int(11) NOT NULL,
  `statistic_date` varchar(50) NOT NULL,
  `statistic_post` int(255) NOT NULL,
  `statistic_like` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_statistic`
--

INSERT INTO `tbl_statistic` (`statistic_id`, `statistic_date`, `statistic_post`, `statistic_like`) VALUES
(1, 'adasdad', 502, 508),
(2, '2021-05-01', 458, 60),
(3, '2021-05-02', 426, 452),
(4, '2021-05-03', 479, 42),
(5, '2021-05-04', 273, 239),
(6, '2021-05-05', 378, 174),
(7, '2021-05-06', 237, 163),
(8, '2021-05-07', 103, 28),
(9, '2021-05-08', 329, 64),
(10, '2021-05-09', 332, 467),
(11, '2021-05-10', 342, 310),
(12, '2021-05-11', 23, 185),
(13, '2021-05-12', 357, 230),
(14, '2021-05-13', 80, 209),
(15, '2021-05-14', 308, 411),
(16, '2021-05-15', 133, 434),
(17, '2021-05-16', 270, 50),
(18, '2021-05-17', 438, 41),
(19, '2021-05-18', 394, 344),
(20, '2021-05-19', 41, 174),
(21, '2021-05-20', 248, 219),
(22, '2021-05-21', 350, 94),
(23, '2021-05-22', 421, 321),
(24, '2021-05-23', 344, 257),
(25, '2021-05-24', 255, 2),
(26, '2021-05-25', 247, 228),
(27, '2021-05-26', 400, 319),
(28, '2021-05-27', 393, 7),
(29, '2021-05-28', 358, 271),
(30, '2021-05-29', 282, 98),
(31, '2021-05-30', 144, 425),
(32, '2021-05-31', 193, 193),
(33, '2021-06-01', 385, 345),
(34, '2021-06-02', 71, 319),
(35, '2021-06-03', 384, 464),
(36, '2021-06-04', 166, 440),
(37, '2021-06-05', 201, 189),
(38, '2021-06-06', 339, 128),
(39, '2021-06-07', 127, 248),
(40, '2021-06-08', 363, 69),
(41, '2021-06-09', 257, 78),
(42, '2021-06-10', 120, 365),
(43, '2021-06-11', 467, 239),
(44, '2021-06-12', 296, 262),
(45, '2021-06-13', 425, 339),
(46, '2021-06-14', 420, 84),
(47, '2021-06-15', 162, 58),
(48, '2021-06-16', 302, 337),
(49, '2021-06-17', 282, 398),
(50, '2021-06-18', 144, 29),
(51, '2021-06-19', 212, 473),
(52, '2021-06-20', 228, 225),
(53, '2021-06-21', 440, 24),
(54, '2021-06-22', 303, 445),
(55, '2021-06-23', 313, 231),
(56, '2021-06-24', 216, 387),
(57, '2021-06-25', 290, 290),
(58, '2021-06-26', 78, 20),
(59, '2021-06-27', 366, 272),
(60, '2021-06-28', 260, 487),
(61, '2021-06-29', 156, 318),
(62, '2021-06-30', 122, 159),
(63, '2021-07-01', 429, 167),
(64, '2021-07-02', 47, 237),
(65, '2021-07-03', 46, 17),
(66, '2021-07-04', 450, 198),
(67, '2021-07-05', 141, 113),
(68, '2021-07-06', 140, 364),
(69, '2021-07-07', 401, 413),
(70, '2021-07-08', 362, 71),
(71, '2021-07-09', 269, 132),
(72, '2021-07-10', 353, 371),
(73, '2021-07-11', 297, 372),
(74, '2021-07-12', 471, 236),
(75, '2021-07-13', 271, 146),
(76, '2021-07-14', 421, 2),
(77, '2021-07-15', 22, 0),
(78, '2021-07-16', 144, 297),
(79, '2021-07-17', 51, 364),
(80, '2021-07-18', 171, 260),
(81, '2021-07-19', 290, 168),
(82, '2021-07-20', 470, 348),
(83, '2021-07-21', 330, 106),
(84, '2021-07-22', 42, 392),
(85, '2021-07-23', 334, 497),
(86, '2021-07-24', 480, 412),
(87, '2021-07-25', 119, 361),
(88, '2021-07-26', 446, 149),
(89, '2021-07-27', 406, 85),
(90, '2021-07-28', 206, 278),
(91, '2021-07-29', 270, 16),
(92, '2021-07-30', 271, 309),
(93, '2021-07-31', 230, 226),
(94, '2021-08-01', 440, 21),
(95, '2021-08-02', 286, 367),
(96, '2021-08-03', 477, 287),
(97, '2021-08-04', 3, 155),
(98, '2021-08-05', 265, 361),
(99, '2021-08-06', 10, 470),
(100, '2021-08-07', 318, 181),
(101, '2021-08-08', 452, 217),
(102, '2021-08-09', 228, 489),
(103, '2021-08-10', 264, 351),
(104, '2021-08-11', 463, 264),
(105, '2021-08-12', 430, 359),
(106, '2021-08-13', 6, 453),
(107, '2021-08-14', 246, 373),
(108, '2021-08-15', 126, 10),
(109, '2021-08-16', 176, 350),
(110, '2021-08-17', 221, 54),
(111, '2021-08-18', 111, 393),
(112, '2021-08-19', 131, 476),
(113, '2021-08-20', 489, 17),
(114, '2021-08-21', 120, 46),
(115, '2021-08-22', 374, 232),
(116, '2021-08-23', 38, 495),
(117, '2021-08-24', 363, 328),
(118, '2021-08-25', 52, 278),
(119, '2021-08-26', 233, 333),
(120, '2021-08-27', 467, 334),
(121, '2021-08-28', 269, 344),
(122, '2021-08-29', 412, 31),
(123, '2021-08-30', 420, 5),
(124, '2021-08-31', 265, 312);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(11) NOT NULL,
  `student_info_id` int(11) DEFAULT NULL,
  `student_avatar` varchar(255) DEFAULT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `student_info_id`, `student_avatar`, `student_name`, `student_email`, `student_password`, `student_status`) VALUES
(4, 3, 'pexels-photo-213195276281626262426.jpeg', 'Phan Phụng Võ Tín', 'tin.187pm14021@vanlanguni.vn', '576f8fe632b89bc7e7940dafe25296e6', 'Verified'),
(5, NULL, NULL, 'Võ Minh Hưng', 'hung.187pm06604@vanlanguni.vn', '3ee191508a19a6836d5737986b4e8912', 'Verified'),
(6, NULL, NULL, 'Nguyễn Duy Quang', 'quang.187pm20551@vanlanguni.vn', 'ca03ab54085818ea3b922c5772e603ce', 'Verified'),
(7, NULL, NULL, 'Nguyễn Tuấn Kiệt', 'kiet.187pm13947@vanlanguni.vn', 'a23daaa2bd194dddb0b9a42f0b268a1e', 'Verified'),
(8, NULL, NULL, 'Mai Duy Luân', 'luan.187pm13964@vanlanguni.vn', 'f159f0cb472845b114313d3b0b9aa731', 'Verified'),
(10, NULL, NULL, 'dat', 'dat.187pm06566@vanlanguni.vn', '4297f44b13955235245b2497399d7a93', 'Verified');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_info`
--

CREATE TABLE `tbl_student_info` (
  `student_info_id` int(11) NOT NULL,
  `student_info_avatar` varchar(255) NOT NULL,
  `student_info_gender` int(11) NOT NULL,
  `student_info_date` varchar(50) NOT NULL,
  `student_info_address` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `specialized_id` int(11) NOT NULL,
  `student_info_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student_info`
--

INSERT INTO `tbl_student_info` (`student_info_id`, `student_info_avatar`, `student_info_gender`, `student_info_date`, `student_info_address`, `course_id`, `faculty_id`, `specialized_id`, `student_info_note`) VALUES
(3, 'pexels-photo-213195276281626262426.jpeg', 1, '2021-07-17', 'ABC Tan Binh', 1, 1, 1, 'IT Music BOI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitor`
--

CREATE TABLE `tbl_visitor` (
  `visitor_id` int(11) NOT NULL,
  `visitor_ipaddress` varchar(100) NOT NULL,
  `visitor_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visitor`
--

INSERT INTO `tbl_visitor` (`visitor_id`, `visitor_ipaddress`, `visitor_date`) VALUES
(2, '101.221.221.189', '2021-05-01'),
(3, '102.221.221.189', '2021-05-02'),
(4, '103.221.221.189', '2021-05-03'),
(5, '111.221.221.189', '2021-05-04'),
(6, '113.221.221.189', '2021-05-05'),
(7, '114.221.221.189', '2021-05-06'),
(8, '115.221.221.189', '2021-05-07'),
(9, '117.221.221.189', '2021-05-08'),
(10, '121.221.221.189', '2021-05-09'),
(11, '123.221.221.189', '2021-05-10'),
(12, '122.221.221.189', '2021-05-11'),
(13, '126.221.221.189', '2021-05-12'),
(14, '128.221.221.189', '2021-05-13'),
(15, '129.221.221.189', '2021-05-14'),
(16, '130.221.221.189', '2021-05-15'),
(17, '131.221.221.189', '2021-05-16'),
(18, '133.221.221.189', '2021-05-17'),
(19, '132.221.221.189', '2021-05-18'),
(20, '135.221.221.189', '2021-05-19'),
(21, '136.221.221.189', '2021-05-20'),
(22, '137.221.221.189', '2021-05-21'),
(23, '138.221.221.189', '2021-05-22'),
(24, '139.221.221.189', '2021-05-23'),
(25, '140.221.221.189', '2021-05-24'),
(26, '141.221.221.189', '2021-05-25'),
(27, '145.221.221.189', '2021-05-26'),
(28, '142.221.221.189', '2021-05-27'),
(29, '143.221.221.189', '2021-05-28'),
(30, '144.221.221.189', '2021-05-29'),
(31, '148.221.221.189', '2021-05-30'),
(32, '149.221.221.189', '2021-05-31'),
(33, '151.221.221.189', '2021-06-01'),
(34, '150.221.221.189', '2021-06-02'),
(35, '153.221.221.189', '2021-06-03'),
(36, '152.221.221.189', '2021-06-04'),
(37, '155.221.221.189', '2021-06-05'),
(38, '154.221.221.189', '2021-06-06'),
(39, '156.221.221.189', '2021-06-07'),
(40, '158.221.221.189', '2021-06-08'),
(41, '160.221.221.189', '2021-06-09'),
(42, '159.221.221.189', '2021-06-10'),
(43, '161.221.221.189', '2021-06-11'),
(44, '163.221.221.189', '2021-06-12'),
(45, '164.221.221.189', '2021-06-13'),
(46, '169.221.221.189', '2021-06-14'),
(47, '162.221.221.189', '2021-06-15'),
(48, '166.221.221.189', '2021-06-16'),
(49, '170.221.221.189', '2021-06-17'),
(50, '171.221.221.189', '2021-06-18'),
(51, '172.221.221.189', '2021-06-19'),
(52, '173.221.221.189', '2021-06-20'),
(53, '174.221.221.189', '2021-06-21'),
(54, '175.221.221.189', '2021-06-22'),
(55, '176.221.221.189', '2021-06-23'),
(56, '177.221.221.189', '2021-06-24'),
(57, '178.221.221.189', '2021-06-25'),
(58, '179.221.221.189', '2021-06-26'),
(59, '180.221.221.189', '2021-06-27'),
(60, '181.221.221.189', '2021-06-28'),
(61, '182.221.221.189', '2021-06-29'),
(62, '183.221.221.189', '2021-06-30'),
(63, '184.221.221.189', '2021-07-01'),
(64, '185.221.221.189', '2021-07-02'),
(65, '186.221.221.189', '2021-07-03'),
(66, '187.221.221.189', '2021-07-04'),
(67, '188.221.221.189', '2021-07-05'),
(68, '188.221.221.189', '2021-07-06'),
(69, '189.221.221.189', '2021-07-07'),
(70, '190.221.221.189', '2021-07-08'),
(71, '191.221.221.189', '2021-07-09'),
(72, '192.221.221.189', '2021-07-10'),
(73, '193.221.221.189', '2021-07-11'),
(74, '194.221.221.189', '2021-07-12'),
(75, '195.221.221.189', '2021-07-13'),
(77, '200.221.221.189', '2021-07-15'),
(78, '201.221.221.189', '2021-07-16'),
(79, '202.221.221.189', '2021-07-17'),
(80, '203.221.221.189', '2021-07-18'),
(81, '204.221.221.189', '2021-07-19'),
(82, '205.221.221.189', '2021-07-20'),
(83, '206.221.221.189', '2021-07-21'),
(84, '207.221.221.189', '2021-07-22'),
(85, '208.221.221.189', '2021-07-23'),
(86, '209.221.221.189', '2021-07-24'),
(87, '210.221.221.189', '2021-07-25'),
(88, '212.221.221.189', '2021-07-26'),
(89, '213.221.221.189', '2021-07-27'),
(90, '214.221.221.189', '2021-07-28'),
(91, '215.221.221.189', '2021-07-29'),
(92, '216.221.221.189', '2021-07-30'),
(93, '217.221.221.189', '2021-07-31'),
(94, '218.221.221.189', '2021-08-01'),
(95, '219.221.221.189', '2021-08-02'),
(96, '220.221.221.189', '2021-08-03'),
(97, '221.221.221.189', '2021-08-04'),
(98, '223.221.221.189', '2021-08-05'),
(99, '224.221.221.189', '2021-08-06'),
(100, '225.221.221.189', '2021-08-07'),
(101, '226.221.221.189', '2021-08-08'),
(102, '227.221.221.189', '2021-08-09'),
(103, '228.221.221.189', '2021-08-10'),
(104, '229.221.221.189', '2021-08-11'),
(105, '230.221.221.189', '2021-08-12'),
(106, '231.221.221.189', '2021-08-13'),
(107, '232.221.221.189', '2021-08-14'),
(108, '233.221.221.189', '2021-08-15'),
(109, '234.221.221.189', '2021-08-16'),
(110, '235.221.221.189', '2021-08-17'),
(111, '236.221.221.189', '2021-08-18'),
(112, '237.221.221.189', '2021-08-19'),
(113, '238.221.221.189', '2021-08-20'),
(114, '239.221.221.189', '2021-08-21'),
(115, '240.221.221.189', '2021-08-22'),
(116, '241.221.221.189', '2021-08-23'),
(117, '242.221.221.189', '2021-08-24'),
(118, '243.221.221.189', '2021-08-25'),
(119, '244.221.221.189', '2021-08-26'),
(120, '245.221.221.189', '2021-08-27'),
(121, '246.221.221.189', '2021-08-28'),
(122, '247.221.221.189', '2021-08-29'),
(123, '248.221.221.189', '2021-08-30'),
(124, '249.221.221.189', '2021-08-31'),
(125, '127.0.0.1', '2021-07-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_admin_info`
--
ALTER TABLE `tbl_admin_info`
  ADD PRIMARY KEY (`admin_info_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `tbl_like`
--
ALTER TABLE `tbl_like`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `tbl_nofication`
--
ALTER TABLE `tbl_nofication`
  ADD PRIMARY KEY (`nofication_id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_reply`
--
ALTER TABLE `tbl_reply`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `tbl_specialized`
--
ALTER TABLE `tbl_specialized`
  ADD PRIMARY KEY (`specialized_id`);

--
-- Indexes for table `tbl_statistic`
--
ALTER TABLE `tbl_statistic`
  ADD PRIMARY KEY (`statistic_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_student_info`
--
ALTER TABLE `tbl_student_info`
  ADD PRIMARY KEY (`student_info_id`);

--
-- Indexes for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin_info`
--
ALTER TABLE `tbl_admin_info`
  MODIFY `admin_info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_like`
--
ALTER TABLE `tbl_like`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_nofication`
--
ALTER TABLE `tbl_nofication`
  MODIFY `nofication_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_reply`
--
ALTER TABLE `tbl_reply`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_specialized`
--
ALTER TABLE `tbl_specialized`
  MODIFY `specialized_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_statistic`
--
ALTER TABLE `tbl_statistic`
  MODIFY `statistic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_student_info`
--
ALTER TABLE `tbl_student_info`
  MODIFY `student_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
