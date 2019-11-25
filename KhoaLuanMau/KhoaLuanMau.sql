-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 25, 2019 at 11:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `KhoaLuanMau`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_post` int(11) DEFAULT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `id_user`, `id_post`, `comment`, `created_at`, `updated_at`) VALUES
(1, 7, 9, 'Phòng đẹp, chủ nhà cũng dễ tính', '2019-05-14 21:46:09', '2019-05-14 21:46:09'),
(2, 6, 9, 'Đi từ phòng trọ đến trường cũng k lâu lắm :)), view đẹp', '2019-05-14 21:47:11', '2019-05-14 21:47:11'),
(3, 5, 9, 'Giá cả hợp lý, đầy đủ tiện nghi nha :))', '2019-05-14 21:47:50', '2019-05-14 21:47:50'),
(4, 3, 9, 'Nhà đẹp', '2019-05-14 21:48:32', '2019-05-14 21:48:32'),
(5, 4, 9, 'Phòng đẹp mức giá này là phải chăng rồi :v', '2019-05-14 21:49:01', '2019-05-14 21:49:01'),
(6, 1, 2, 'Phòng này đẹp', '2019-05-25 02:16:36', '2019-05-25 02:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `start_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `content`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 'Phòng hot', 'Các bài viết thuộc sư kiện đều được áp dụng trong số ngày quy định', '2019-05-13 17:16:09', '2019-05-13 17:16:09', '2019-05-13 10:16:09', '2019-05-13 10:26:11'),
(2, 'Sale 20%', 'Các bài viết thuộc sư kiện đều được áp dụng trong số ngày quy định', '2019-05-13 17:16:09', '2019-05-13 17:16:09', '2019-05-11 10:16:09', '2019-05-11 10:16:09'),
(3, 'Phòng mới', 'Các bài viết thuộc sư kiện đều được áp dụng trong số ngày quy định', '2019-05-13 17:16:09', '2019-05-13 17:16:09', '2019-05-09 10:16:09', '2019-05-13 10:26:29'),
(4, 'Phòng giá rẻ', 'Các bài viết thuộc sư kiện đều được áp dụng trong số ngày quy định', '2019-05-13 17:16:09', '2019-05-13 17:16:09', '2019-05-07 10:16:09', '2019-05-13 10:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `event_post`
--

CREATE TABLE `event_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_post`
--

INSERT INTO `event_post` (`id`, `post_id`, `event_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 5, 1, NULL, NULL),
(6, 1, 2, NULL, NULL),
(7, 3, 2, NULL, NULL),
(8, 4, 2, NULL, NULL),
(9, 6, 2, NULL, NULL),
(10, 7, 2, NULL, NULL),
(11, 10, 2, NULL, NULL),
(12, 15, 3, NULL, NULL),
(13, 17, 3, NULL, NULL),
(14, 18, 3, NULL, NULL),
(15, 19, 3, NULL, NULL),
(16, 20, 3, NULL, NULL),
(17, 11, 4, NULL, NULL),
(18, 12, 4, NULL, NULL),
(19, 13, 4, NULL, NULL),
(20, 14, 4, NULL, NULL),
(21, 15, 4, NULL, NULL),
(22, 24, 4, NULL, NULL),
(23, 27, 4, NULL, NULL),
(24, 28, 4, NULL, NULL),
(25, 33, 4, NULL, NULL),
(26, 36, 4, NULL, NULL),
(27, 39, 4, NULL, NULL),
(28, 40, 4, NULL, NULL),
(29, 1, 1, NULL, NULL),
(30, 3, 1, NULL, NULL),
(31, 4, 1, NULL, NULL),
(32, 1, 5, NULL, NULL),
(33, 2, 5, NULL, NULL),
(34, 31, 5, NULL, NULL),
(35, 32, 5, NULL, NULL),
(36, 33, 5, NULL, NULL),
(37, 34, 5, NULL, NULL),
(38, 35, 5, NULL, NULL),
(39, 36, 5, NULL, NULL),
(40, 37, 5, NULL, NULL),
(41, 38, 5, NULL, NULL),
(42, 39, 5, NULL, NULL),
(43, 41, 5, NULL, NULL),
(44, 6, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item`, `created_at`, `updated_at`) VALUES
(2, 'Giường ngủ', '2019-05-14 01:00:00', '2019-05-14 01:00:00'),
(3, 'Tủ quần áo', '2019-05-14 01:00:12', '2019-05-14 01:00:12'),
(4, 'Vòi hoa sen', '2019-05-14 01:00:18', '2019-05-14 01:00:18'),
(5, 'Bồn rửa mặt', '2019-05-14 01:00:25', '2019-05-14 01:00:25'),
(6, 'Bồn cầu', '2019-05-14 01:00:33', '2019-05-14 01:00:33'),
(7, 'Điều hòa', '2019-05-14 01:00:40', '2019-05-14 01:00:40'),
(8, 'Bình nóng lạnh', '2019-05-14 01:00:51', '2019-05-14 01:00:51'),
(9, 'Internet', '2019-05-14 01:00:58', '2019-05-14 01:00:58'),
(10, 'Máy giặt', '2019-05-14 01:01:08', '2019-05-14 01:01:08'),
(11, 'Bếp gas/điện', '2019-05-14 01:01:16', '2019-05-14 01:01:16'),
(12, 'Máy phát điện', '2019-05-14 01:01:30', '2019-05-14 01:01:30'),
(13, 'Hệ thống chống trộm', '2019-05-14 01:01:50', '2019-05-14 01:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `item_post`
--

CREATE TABLE `item_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_post`
--

INSERT INTO `item_post` (`id`, `post_id`, `room_id`, `item_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 2, NULL, NULL),
(2, 1, NULL, 3, NULL, NULL),
(3, 1, NULL, 5, NULL, NULL),
(4, 1, NULL, 6, NULL, NULL),
(5, 1, NULL, 9, NULL, NULL),
(6, 1, NULL, 11, NULL, NULL),
(7, 2, NULL, 2, NULL, NULL),
(8, 2, NULL, 3, NULL, NULL),
(9, 2, NULL, 4, NULL, NULL),
(10, 2, NULL, 5, NULL, NULL),
(11, 2, NULL, 6, NULL, NULL),
(12, 2, NULL, 9, NULL, NULL),
(13, 2, NULL, 10, NULL, NULL),
(14, 2, NULL, 11, NULL, NULL),
(15, 2, NULL, 13, NULL, NULL),
(16, 3, NULL, 2, NULL, NULL),
(17, 3, NULL, 3, NULL, NULL),
(18, 3, NULL, 4, NULL, NULL),
(19, 3, NULL, 5, NULL, NULL),
(20, 3, NULL, 6, NULL, NULL),
(21, 3, NULL, 9, NULL, NULL),
(22, 3, NULL, 11, NULL, NULL),
(23, 4, NULL, 2, NULL, NULL),
(24, 4, NULL, 3, NULL, NULL),
(25, 4, NULL, 4, NULL, NULL),
(26, 4, NULL, 5, NULL, NULL),
(27, 4, NULL, 6, NULL, NULL),
(28, 4, NULL, 8, NULL, NULL),
(29, 4, NULL, 9, NULL, NULL),
(30, 4, NULL, 11, NULL, NULL),
(31, 4, NULL, 12, NULL, NULL),
(32, 5, NULL, 2, NULL, NULL),
(33, 5, NULL, 3, NULL, NULL),
(34, 5, NULL, 4, NULL, NULL),
(35, 5, NULL, 5, NULL, NULL),
(36, 5, NULL, 6, NULL, NULL),
(37, 5, NULL, 7, NULL, NULL),
(38, 5, NULL, 9, NULL, NULL),
(39, 5, NULL, 11, NULL, NULL),
(40, 5, NULL, 12, NULL, NULL),
(41, 6, NULL, 2, NULL, NULL),
(42, 6, NULL, 3, NULL, NULL),
(43, 6, NULL, 4, NULL, NULL),
(44, 6, NULL, 5, NULL, NULL),
(45, 6, NULL, 6, NULL, NULL),
(46, 6, NULL, 9, NULL, NULL),
(47, 6, NULL, 11, NULL, NULL),
(48, 7, NULL, 2, NULL, NULL),
(49, 7, NULL, 3, NULL, NULL),
(50, 7, NULL, 4, NULL, NULL),
(51, 7, NULL, 5, NULL, NULL),
(52, 7, NULL, 6, NULL, NULL),
(53, 7, NULL, 8, NULL, NULL),
(54, 7, NULL, 9, NULL, NULL),
(55, 7, NULL, 11, NULL, NULL),
(56, 8, NULL, 2, NULL, NULL),
(57, 8, NULL, 3, NULL, NULL),
(58, 8, NULL, 4, NULL, NULL),
(59, 8, NULL, 5, NULL, NULL),
(60, 8, NULL, 6, NULL, NULL),
(61, 8, NULL, 9, NULL, NULL),
(62, 8, NULL, 11, NULL, NULL),
(63, 8, NULL, 12, NULL, NULL),
(64, 9, NULL, 2, NULL, NULL),
(65, 9, NULL, 3, NULL, NULL),
(66, 9, NULL, 4, NULL, NULL),
(67, 9, NULL, 5, NULL, NULL),
(68, 9, NULL, 6, NULL, NULL),
(69, 9, NULL, 8, NULL, NULL),
(70, 9, NULL, 9, NULL, NULL),
(71, 9, NULL, 12, NULL, NULL),
(72, 10, NULL, 2, NULL, NULL),
(73, 10, NULL, 3, NULL, NULL),
(74, 10, NULL, 4, NULL, NULL),
(75, 10, NULL, 5, NULL, NULL),
(76, 10, NULL, 6, NULL, NULL),
(77, 10, NULL, 9, NULL, NULL),
(78, 10, NULL, 11, NULL, NULL),
(79, 11, NULL, 2, NULL, NULL),
(80, 11, NULL, 3, NULL, NULL),
(81, 11, NULL, 4, NULL, NULL),
(82, 11, NULL, 5, NULL, NULL),
(83, 11, NULL, 6, NULL, NULL),
(84, 11, NULL, 8, NULL, NULL),
(85, 11, NULL, 9, NULL, NULL),
(86, 11, NULL, 11, NULL, NULL),
(87, 11, NULL, 12, NULL, NULL),
(88, 12, NULL, 2, NULL, NULL),
(89, 12, NULL, 3, NULL, NULL),
(90, 12, NULL, 4, NULL, NULL),
(91, 12, NULL, 5, NULL, NULL),
(92, 12, NULL, 6, NULL, NULL),
(93, 12, NULL, 8, NULL, NULL),
(94, 12, NULL, 9, NULL, NULL),
(95, 12, NULL, 11, NULL, NULL),
(96, 12, NULL, 12, NULL, NULL),
(97, 12, NULL, 13, NULL, NULL),
(98, 13, NULL, 2, NULL, NULL),
(99, 13, NULL, 3, NULL, NULL),
(100, 13, NULL, 4, NULL, NULL),
(101, 13, NULL, 5, NULL, NULL),
(102, 13, NULL, 6, NULL, NULL),
(103, 13, NULL, 7, NULL, NULL),
(104, 13, NULL, 9, NULL, NULL),
(105, 13, NULL, 10, NULL, NULL),
(106, 13, NULL, 11, NULL, NULL),
(107, 13, NULL, 12, NULL, NULL),
(108, 13, NULL, 13, NULL, NULL),
(109, 14, NULL, 2, NULL, NULL),
(110, 14, NULL, 3, NULL, NULL),
(111, 14, NULL, 4, NULL, NULL),
(112, 14, NULL, 5, NULL, NULL),
(113, 14, NULL, 6, NULL, NULL),
(114, 14, NULL, 9, NULL, NULL),
(115, 14, NULL, 10, NULL, NULL),
(116, 14, NULL, 13, NULL, NULL),
(117, 15, NULL, 2, NULL, NULL),
(118, 15, NULL, 3, NULL, NULL),
(119, 15, NULL, 4, NULL, NULL),
(120, 15, NULL, 5, NULL, NULL),
(121, 15, NULL, 6, NULL, NULL),
(122, 15, NULL, 9, NULL, NULL),
(123, 15, NULL, 10, NULL, NULL),
(124, 15, NULL, 11, NULL, NULL),
(125, 15, NULL, 12, NULL, NULL),
(126, 16, NULL, 2, NULL, NULL),
(127, 16, NULL, 3, NULL, NULL),
(128, 16, NULL, 4, NULL, NULL),
(129, 16, NULL, 5, NULL, NULL),
(130, 16, NULL, 6, NULL, NULL),
(131, 16, NULL, 9, NULL, NULL),
(132, 17, NULL, 2, NULL, NULL),
(133, 17, NULL, 3, NULL, NULL),
(134, 17, NULL, 4, NULL, NULL),
(135, 17, NULL, 5, NULL, NULL),
(136, 17, NULL, 6, NULL, NULL),
(137, 17, NULL, 7, NULL, NULL),
(138, 17, NULL, 9, NULL, NULL),
(139, 17, NULL, 11, NULL, NULL),
(140, 17, NULL, 12, NULL, NULL),
(141, 18, NULL, 2, NULL, NULL),
(142, 18, NULL, 3, NULL, NULL),
(143, 18, NULL, 4, NULL, NULL),
(144, 18, NULL, 5, NULL, NULL),
(145, 18, NULL, 6, NULL, NULL),
(146, 18, NULL, 9, NULL, NULL),
(147, 18, NULL, 10, NULL, NULL),
(148, 18, NULL, 11, NULL, NULL),
(149, 18, NULL, 12, NULL, NULL),
(150, 19, NULL, 2, NULL, NULL),
(151, 19, NULL, 3, NULL, NULL),
(152, 19, NULL, 4, NULL, NULL),
(153, 19, NULL, 5, NULL, NULL),
(154, 19, NULL, 6, NULL, NULL),
(155, 19, NULL, 8, NULL, NULL),
(156, 19, NULL, 9, NULL, NULL),
(157, 19, NULL, 11, NULL, NULL),
(158, 20, NULL, 2, NULL, NULL),
(159, 20, NULL, 3, NULL, NULL),
(160, 20, NULL, 4, NULL, NULL),
(161, 20, NULL, 5, NULL, NULL),
(162, 20, NULL, 6, NULL, NULL),
(163, 20, NULL, 9, NULL, NULL),
(164, 20, NULL, 10, NULL, NULL),
(165, 20, NULL, 11, NULL, NULL),
(166, 20, NULL, 13, NULL, NULL),
(167, 21, NULL, 2, NULL, NULL),
(168, 21, NULL, 3, NULL, NULL),
(169, 21, NULL, 4, NULL, NULL),
(170, 21, NULL, 5, NULL, NULL),
(171, 21, NULL, 6, NULL, NULL),
(172, 21, NULL, 9, NULL, NULL),
(173, 21, NULL, 10, NULL, NULL),
(174, 21, NULL, 11, NULL, NULL),
(175, 21, NULL, 13, NULL, NULL),
(176, 22, NULL, 2, NULL, NULL),
(177, 22, NULL, 3, NULL, NULL),
(178, 22, NULL, 4, NULL, NULL),
(179, 22, NULL, 5, NULL, NULL),
(180, 22, NULL, 6, NULL, NULL),
(181, 22, NULL, 9, NULL, NULL),
(182, 22, NULL, 10, NULL, NULL),
(183, 22, NULL, 12, NULL, NULL),
(184, 22, NULL, 13, NULL, NULL),
(185, 23, NULL, 2, NULL, NULL),
(186, 23, NULL, 3, NULL, NULL),
(187, 23, NULL, 4, NULL, NULL),
(188, 23, NULL, 6, NULL, NULL),
(189, 23, NULL, 7, NULL, NULL),
(190, 23, NULL, 9, NULL, NULL),
(191, 23, NULL, 10, NULL, NULL),
(192, 23, NULL, 11, NULL, NULL),
(193, 23, NULL, 12, NULL, NULL),
(194, 23, NULL, 13, NULL, NULL),
(195, NULL, 31, 2, NULL, NULL),
(196, NULL, 31, 3, NULL, NULL),
(197, NULL, 31, 4, NULL, NULL),
(198, NULL, 31, 5, NULL, NULL),
(199, NULL, 31, 6, NULL, NULL),
(200, NULL, 31, 9, NULL, NULL),
(201, NULL, 31, 11, NULL, NULL),
(202, NULL, 31, 12, NULL, NULL),
(203, NULL, 31, 13, NULL, NULL),
(204, NULL, 32, 2, NULL, NULL),
(205, NULL, 32, 3, NULL, NULL),
(206, NULL, 32, 4, NULL, NULL),
(207, NULL, 32, 5, NULL, NULL),
(208, NULL, 32, 6, NULL, NULL),
(209, NULL, 32, 9, NULL, NULL),
(210, NULL, 32, 11, NULL, NULL),
(211, NULL, 33, 2, NULL, NULL),
(212, NULL, 33, 3, NULL, NULL),
(213, NULL, 33, 4, NULL, NULL),
(214, NULL, 33, 5, NULL, NULL),
(215, NULL, 33, 6, NULL, NULL),
(216, NULL, 33, 7, NULL, NULL),
(217, NULL, 33, 9, NULL, NULL),
(218, NULL, 33, 11, NULL, NULL),
(219, 41, NULL, 2, NULL, NULL),
(220, 41, NULL, 3, NULL, NULL),
(221, 41, NULL, 4, NULL, NULL),
(222, 41, NULL, 5, NULL, NULL),
(223, 41, NULL, 6, NULL, NULL),
(224, 41, NULL, 9, NULL, NULL),
(225, 41, NULL, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `describe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_post` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `username`, `phone`, `time`, `title`, `describe`, `id_post`, `created_at`, `updated_at`) VALUES
(2, 'Nguyen Manh Cuong', '0932611866', '15h', 'Phòng trọ giá rẻ chiến thắng', '550000', 1, '2019-05-11 10:16:10', '2019-05-14 22:56:45'),
(3, 'Bùi Thế Sơn', '0932523652', '15h', 'Phòng trọ giá rẻ Tân Xuân', '650000', 1, '2019-05-09 10:16:10', '2019-05-14 22:55:46'),
(4, 'Nguyen Trung Tuyen', '0932902431', '15h', 'Phòng trọ giá rẻ Tân Xuân', '550000', 1, '2019-05-07 10:16:10', '2019-05-14 22:56:06'),
(5, 'Trần Đức Long', '0166324806', '15h', 'Phòng trọ giá rẻ chiến thắng', '750000', 1, '2019-05-05 10:16:10', '2019-05-14 22:56:54'),
(6, 'Nguyễn Mạnh Hùng', '0611667715', '16h', 'Phòng trọ giá rẻ Chương Mỹ', '750000', 1, '2019-05-03 10:16:10', '2019-05-14 22:57:31'),
(8, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-29 10:16:10', '2019-04-29 10:16:10'),
(9, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-27 10:16:10', '2019-04-27 10:16:10'),
(10, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-25 10:16:10', '2019-04-25 10:16:10'),
(11, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-23 10:16:10', '2019-04-23 10:16:10'),
(12, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-21 10:16:10', '2019-04-21 10:16:10'),
(13, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-19 10:16:10', '2019-04-19 10:16:10'),
(14, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-17 10:16:10', '2019-04-17 10:16:10'),
(15, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-15 10:16:10', '2019-04-15 10:16:10'),
(16, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-13 10:16:10', '2019-04-13 10:16:10'),
(17, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-11 10:16:10', '2019-04-11 10:16:10'),
(18, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-09 10:16:11', '2019-04-09 10:16:11'),
(19, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-07 10:16:11', '2019-04-07 10:16:11'),
(20, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-05 10:16:11', '2019-04-05 10:16:11'),
(21, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-03 10:16:11', '2019-04-03 10:16:11'),
(22, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-01 10:16:11', '2019-04-01 10:16:11'),
(23, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-30 10:16:11', '2019-03-30 10:16:11'),
(24, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-28 10:16:11', '2019-03-28 10:16:11'),
(25, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-26 10:16:11', '2019-03-26 10:16:11'),
(26, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-24 10:16:11', '2019-03-24 10:16:11'),
(27, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-22 10:16:11', '2019-03-22 10:16:11'),
(28, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-20 10:16:11', '2019-03-20 10:16:11'),
(29, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-18 10:16:11', '2019-03-18 10:16:11'),
(30, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-16 10:16:11', '2019-03-16 10:16:11'),
(31, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-13 10:35:26', '2019-05-13 10:35:26'),
(32, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-11 10:35:27', '2019-05-11 10:35:27'),
(33, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-09 10:35:27', '2019-05-09 10:35:27'),
(34, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-07 10:35:27', '2019-05-07 10:35:27'),
(35, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-05 10:35:27', '2019-05-05 10:35:27'),
(36, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-03 10:35:27', '2019-05-03 10:35:27'),
(37, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-01 10:35:27', '2019-05-01 10:35:27'),
(38, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-29 10:35:27', '2019-04-29 10:35:27'),
(39, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-27 10:35:27', '2019-04-27 10:35:27'),
(40, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-25 10:35:27', '2019-04-25 10:35:27'),
(41, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-23 10:35:27', '2019-04-23 10:35:27'),
(42, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-21 10:35:27', '2019-04-21 10:35:27'),
(43, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-19 10:35:27', '2019-04-19 10:35:27'),
(44, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-17 10:35:27', '2019-04-17 10:35:27'),
(45, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-15 10:35:27', '2019-04-15 10:35:27'),
(46, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-13 10:35:27', '2019-04-13 10:35:27'),
(47, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-11 10:35:27', '2019-04-11 10:35:27'),
(48, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-09 10:35:27', '2019-04-09 10:35:27'),
(49, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-07 10:35:27', '2019-04-07 10:35:27'),
(50, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-05 10:35:27', '2019-04-05 10:35:27'),
(51, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-03 10:35:27', '2019-04-03 10:35:27'),
(52, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-01 10:35:27', '2019-04-01 10:35:27'),
(53, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-30 10:35:27', '2019-03-30 10:35:27'),
(54, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-28 10:35:27', '2019-03-28 10:35:27'),
(55, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-26 10:35:27', '2019-03-26 10:35:27'),
(56, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-24 10:35:28', '2019-03-24 10:35:28'),
(57, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-22 10:35:28', '2019-03-22 10:35:28'),
(58, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-20 10:35:28', '2019-03-20 10:35:28'),
(59, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-18 10:35:28', '2019-03-18 10:35:28'),
(60, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-16 10:35:28', '2019-03-16 10:35:28'),
(61, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-13 10:35:58', '2019-05-13 10:35:58'),
(62, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-11 10:35:58', '2019-05-11 10:35:58'),
(63, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-09 10:35:58', '2019-05-09 10:35:58'),
(64, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-07 10:35:58', '2019-05-07 10:35:58'),
(65, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-05 10:35:58', '2019-05-05 10:35:58'),
(66, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-03 10:35:58', '2019-05-03 10:35:58'),
(67, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-05-01 10:35:58', '2019-05-01 10:35:58'),
(68, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-29 10:35:58', '2019-04-29 10:35:58'),
(69, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-27 10:35:58', '2019-04-27 10:35:58'),
(70, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-25 10:35:59', '2019-04-25 10:35:59'),
(71, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-23 10:35:59', '2019-04-23 10:35:59'),
(72, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-21 10:35:59', '2019-04-21 10:35:59'),
(73, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-19 10:35:59', '2019-04-19 10:35:59'),
(74, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-17 10:35:59', '2019-04-17 10:35:59'),
(75, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-15 10:35:59', '2019-04-15 10:35:59'),
(76, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-13 10:35:59', '2019-04-13 10:35:59'),
(77, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-11 10:35:59', '2019-04-11 10:35:59'),
(78, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-09 10:35:59', '2019-04-09 10:35:59'),
(79, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-07 10:35:59', '2019-04-07 10:35:59'),
(80, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-05 10:35:59', '2019-04-05 10:35:59'),
(81, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-03 10:35:59', '2019-04-03 10:35:59'),
(82, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-04-01 10:35:59', '2019-04-01 10:35:59'),
(83, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-30 10:35:59', '2019-03-30 10:35:59'),
(84, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-28 10:35:59', '2019-03-28 10:35:59'),
(85, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-26 10:35:59', '2019-03-26 10:35:59'),
(86, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-24 10:35:59', '2019-03-24 10:35:59'),
(87, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-22 10:35:59', '2019-03-22 10:35:59'),
(88, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-20 10:36:00', '2019-03-20 10:36:00'),
(89, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-18 10:36:00', '2019-03-18 10:36:00'),
(90, 'Nguyen Trung Thanh', '0932806908', '15h', 'Phòng trọ giá rẻ Tân Xuân', '400000', 1, '2019-03-16 10:36:00', '2019-03-16 10:36:00'),
(91, 'Nguyen Thanh 2', '0961186043', '17h', 'Phòng trọ giá rẻ Tân Xuân', '350000', NULL, '2019-05-24 09:53:56', '2019-05-24 09:53:56'),
(92, 'Nguyen Thanh 2', '0932611866', '17h', 'Phòng trọ giá rẻ Tân Xuân', '350000', NULL, '2019-05-24 09:54:57', '2019-05-24 09:54:57'),
(93, 'Nguyen Thanh 2', '0932902431', '16h', 'Phòng trọ giá rẻ Tân Xuân', '350000', NULL, '2019-05-24 09:56:25', '2019-05-24 09:56:25'),
(94, 'Nguyen Thanh 2', '0166324806', '16h', 'Phòng trọ giá rẻ Tân Xuân', '350000', NULL, '2019-05-24 09:59:14', '2019-05-24 09:59:14'),
(95, 'Nguyen Thanh 2', '0961186043', '13h', 'Phòng trọ giá rẻ Tân Xuân', '350000', NULL, '2019-05-24 10:00:09', '2019-05-24 10:00:09'),
(96, 'Nguyen Thanh 2', '0961186043', '13h', 'Phòng trọ có sân chơi rộng', '350000', NULL, '2019-05-24 10:04:23', '2019-05-24 10:04:23'),
(97, 'Nguyen Thanh 2', '0932611866', '17h', 'Phòng trọ 3 tầng view đẹp.', '650000', NULL, '2019-05-24 10:17:33', '2019-05-24 10:17:33'),
(98, 'Nguyen Thanh 2', '0166324806', '17h', 'Phòng trọ 3 tầng view đẹp.', '650000', NULL, '2019-05-24 10:18:19', '2019-05-24 10:18:19'),
(99, 'Nguyen Thanh 2', '0961186043', '11', 'Phòng trọ 3 tầng view đẹp.', '650000', NULL, '2019-05-24 10:24:58', '2019-05-24 10:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_04_020251_create_posts_table', 1),
(4, '2019_04_06_012315_create_rooms_table', 1),
(5, '2019_04_24_024222_create_meetings_table', 1),
(6, '2019_04_25_022001_create_events_table', 1),
(7, '2019_04_25_024341_create_event_post_table', 1),
(8, '2019_04_26_032402_create_comments_table', 1),
(9, '2019_05_06_065005_create_items_table', 1),
(10, '2019_05_06_074930_create_item_post_table', 1),
(11, '2019_05_06_123133_create_temps_table', 1),
(12, '2019_05_06_123304_create_temp_room_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('Admin@gmail.com', '$2y$10$jnTkX0zg97ZE.iqWq0kn8ubvDGdp9A79aVnld017n2aOE.ZLZLPW6', '2019-05-14 20:26:57'),
('trungthanh248y@gmail.com', '$2y$10$NXSKxU17RGwQV1Xh3sI63ererTAfB4aPOHqhiY3WULKH3Kcr2ghCu', '2019-05-24 23:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acreage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `describe` longtext COLLATE utf8mb4_unicode_ci,
  `item` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `user_id`, `address`, `acreage`, `describe`, `item`, `comment_id`, `sale`, `created_at`, `updated_at`) VALUES
(1, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'download.jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '18', '550000', NULL, NULL, '350000', '2019-05-13 10:16:11', '2019-05-14 01:02:46'),
(2, 'Phòng trọ có sân chơi rộng', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'download (1).jpeg', 1, 'Số 02 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '20', '750000', NULL, NULL, '350000', '2019-05-11 10:16:11', '2019-05-14 19:18:48'),
(3, 'Phòng trọ giá rẻ gần sông', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images.jpeg', 1, 'Số 18 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '17', '5500000', NULL, NULL, NULL, '2019-05-09 10:16:11', '2019-05-14 01:04:01'),
(4, 'Phòng trọ giá rẻ chiến thắng', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (1).jpeg', 1, 'Số 10 Chiến thắng, Xuân Mai, Chương Mỹ, Hà Nội', '26', '750000', NULL, NULL, NULL, '2019-05-07 10:16:11', '2019-05-14 01:05:10'),
(5, 'Phòng trọ 3 tầng view đẹp.', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (4).jpeg', 1, 'Số 30 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '18', '750000', NULL, NULL, '650000', '2019-05-05 10:16:11', '2019-05-14 01:05:58'),
(6, 'Phòng trọ có internet tốc độ cao', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (2).jpeg', 1, 'Số 28 Chiến Thắng, Xuân Mai, Chương Mỹ, Hà Nội', '15', '550000', NULL, NULL, '550000', '2019-05-03 10:16:11', '2019-05-14 01:06:36'),
(7, 'Phòng trọ giá rẻ gần trường', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (3).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '17', '550000', NULL, NULL, '450000', '2019-05-01 10:16:11', '2019-05-14 00:57:26'),
(8, 'Phòng trọ gần chợ', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (5).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '18', '650000', NULL, NULL, '450000', '2019-05-29 10:16:11', '2019-05-14 00:58:20'),
(9, 'Phòng trọ 2 tầng gần trường', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (6).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '18', '650000', NULL, NULL, '450000', '2019-05-27 10:16:11', '2019-05-14 00:59:13'),
(10, 'Phòng trọ giá rẻ gần cổng chào', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (7).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '17', '550000', NULL, NULL, '450000', '2019-04-25 10:16:12', '2019-05-14 01:10:07'),
(11, 'Phòng trọ giá gần chợ', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (8).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '19', '650000', NULL, NULL, '550000', '2019-05-23 10:16:12', '2019-05-14 01:11:09'),
(12, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (9).jpeg', 1, 'Số 03 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '25', '750000', NULL, NULL, NULL, '2019-05-21 10:16:12', '2019-05-14 01:12:02'),
(13, 'Phòng trọ giá rẻ, cổng chào', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (10).jpeg', 1, 'Số 05 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '20', '750000', NULL, NULL, NULL, '2019-05-19 10:16:12', '2019-05-14 19:20:28'),
(14, 'Phòng trọ giá rẻ gần chợ', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (11).jpeg', 1, 'Số 09 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '18', '650000', NULL, NULL, '550000', '2019-05-17 10:16:12', '2019-05-14 01:16:15'),
(15, 'Phòng trọ giá rẻ gần trường', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (12).jpeg', 1, 'Số 07 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '18', '750000', NULL, NULL, '550000', '2019-04-15 10:16:12', '2019-05-14 01:15:52'),
(16, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (13).jpeg', 1, 'Số 13 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '15', '350000', NULL, NULL, NULL, '2019-05-13 10:16:12', '2019-05-14 01:17:15'),
(17, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (14).jpeg', 1, 'Số 15 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '19', '750000', NULL, NULL, NULL, '2019-04-11 10:16:12', '2019-05-14 01:18:00'),
(18, 'Phòng trọ giá rẻ chiến thắng', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (15).jpeg', 1, 'Số 01 Chiến thằng, Xuân Mai, Chương Mỹ, Hà Nội', '20', '750000', NULL, NULL, NULL, '2019-05-09 10:16:12', '2019-05-14 01:19:47'),
(19, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (16).jpeg', 1, 'Số 03 Chiến thắng, Xuân Mai, Chương Mỹ, Hà Nội', '17', '650000', NULL, NULL, '450000', '2019-04-07 10:16:12', '2019-05-14 01:20:51'),
(20, 'Phòng trọ giá rẻ gần trường', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (17).jpeg', 1, 'Số 05 Chiến thắng, Xuân Mai, Chương Mỹ, Hà Nội', '17', '750000', NULL, NULL, '550000', '2019-04-05 10:16:12', '2019-05-14 01:23:18'),
(21, 'Phòng trọ giá rẻ gần trường', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (18).jpeg', 1, 'Số 07 Chiến thắng, Xuân Mai, Chương Mỹ, Hà Nội', '36', '250000', NULL, NULL, '250000', '2019-04-03 10:16:12', '2019-05-14 01:22:49'),
(22, 'Phòng trọ giá rẻ gần cổng chào', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (19).jpeg', 1, 'Số 09 Chiến thắng, Xuân Mai, Chương Mỹ, Hà Nội', '16', '750000', NULL, NULL, '650000', '2019-05-01 10:16:12', '2019-05-14 01:24:35'),
(23, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (20).jpeg', 1, 'Số 11 Chiến thắng, Xuân Mai, Chương Mỹ, Hà Nội', '20', '750000', NULL, NULL, NULL, '2019-05-30 10:16:12', '2019-05-14 01:25:22'),
(24, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (21).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '39', '250000', NULL, NULL, '250000', '2019-03-28 10:16:12', '2019-05-13 10:21:59'),
(25, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (22).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '30', '250000', NULL, NULL, '250000', '2019-03-26 10:16:12', '2019-05-13 10:22:08'),
(26, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (23).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '23', '250000', NULL, NULL, '250000', '2019-03-24 10:16:12', '2019-05-13 10:22:18'),
(27, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (24).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '22', '250000', NULL, NULL, '250000', '2019-03-22 10:16:12', '2019-05-13 10:22:28'),
(28, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (25).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '35', '250000', NULL, NULL, '250000', '2019-03-20 10:16:12', '2019-05-13 10:22:41'),
(29, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (26).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '33', '250000', NULL, NULL, '250000', '2019-03-18 10:16:12', '2019-05-13 10:22:54'),
(30, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (27).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '27', '250000', NULL, NULL, '250000', '2019-03-16 10:16:12', '2019-05-13 10:23:04'),
(31, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (28).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '23', '250000', NULL, NULL, '250000', '2019-03-14 10:16:13', '2019-05-13 10:23:20'),
(32, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (29).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '29', '250000', NULL, NULL, '250000', '2019-03-12 10:16:13', '2019-05-13 10:23:41'),
(33, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (30).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '30', '250000', NULL, NULL, '250000', '2019-03-10 10:16:13', '2019-05-13 10:23:51'),
(34, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'download.jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '31', '250000', NULL, NULL, '250000', '2019-03-08 10:16:13', '2019-05-13 10:24:04'),
(35, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'download (1).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '18', '250000', NULL, NULL, '250000', '2019-03-06 10:16:13', '2019-05-13 10:24:24'),
(36, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images.jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '27', '250000', NULL, NULL, '250000', '2019-03-04 10:16:13', '2019-05-13 10:24:33'),
(37, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (5).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '24', '250000', NULL, NULL, '250000', '2019-03-02 10:16:13', '2019-05-13 10:24:44'),
(38, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (7).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '21', '250000', NULL, NULL, '250000', '2019-02-28 10:16:13', '2019-05-13 10:24:53'),
(39, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.\r\n                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe\r\n                            . Điện 3,5k 1 số\r\n                            , nước 70K 1 tháng\r\n                            , internet 70k 1 tháng\r\n                            .Thanh toán hàng tháng\r\n                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'images (13).jpeg', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '18', '250000', NULL, NULL, '250000', '2019-02-26 10:16:13', '2019-05-13 10:25:01'),
(41, 'Phòng trọ giá rẻ gần trường', 'nhà 5 tầng đang còn 3 phòng trống giá 2tr -3tr và 3,5tr\r\nphòng to có điều hòa, nóng lạnh, giường, tủ. đi lại thoải mái. an ninh tốt\r\nnhà ở Khâm Thiên, gần Tôn đức Thắng, xã Đàn, Lê Duẩn\r\nđiện nước cáp nét đầy đủ. \r\nthanh toán tiền nhà tháng 1\r\nLH: xem phòng gọi điện ban ngày\r\ncám ơn các bạn đã đọc tin', 'images (29).jpeg', NULL, 'Số 27 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '20', '650000', NULL, NULL, '550000', '2019-05-14 22:43:32', '2019-05-14 22:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acreage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `describe` longtext COLLATE utf8mb4_unicode_ci,
  `item` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `title`, `content`, `image`, `admin_id`, `address`, `acreage`, `describe`, `item`, `comment_id`, `created_at`, `updated_at`) VALUES
(2, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '25', '369307', NULL, NULL, '2019-05-11 10:16:13', '2019-05-11 10:16:13'),
(3, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '16', '879112', NULL, NULL, '2019-05-09 10:16:13', '2019-05-09 10:16:13'),
(4, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '35', '860852', NULL, NULL, '2019-05-07 10:16:13', '2019-05-07 10:16:13'),
(5, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '22', '535737', NULL, NULL, '2019-05-05 10:16:13', '2019-05-05 10:16:13'),
(6, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '25', '661603', NULL, NULL, '2019-05-03 10:16:13', '2019-05-03 10:16:13'),
(7, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '29', '990797', NULL, NULL, '2019-05-01 10:16:13', '2019-05-01 10:16:13'),
(8, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '37', '630962', NULL, NULL, '2019-04-29 10:16:13', '2019-04-29 10:16:13'),
(9, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '36', '498279', NULL, NULL, '2019-04-27 10:16:14', '2019-04-27 10:16:14'),
(10, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '33', '834802', NULL, NULL, '2019-04-25 10:16:14', '2019-04-25 10:16:14'),
(11, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '23', '776916', NULL, NULL, '2019-04-23 10:16:14', '2019-04-23 10:16:14'),
(12, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '17', '882889', NULL, NULL, '2019-04-21 10:16:14', '2019-04-21 10:16:14'),
(13, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '25', '956466', NULL, NULL, '2019-04-19 10:16:14', '2019-04-19 10:16:14'),
(14, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '15', '562261', NULL, NULL, '2019-04-17 10:16:14', '2019-04-17 10:16:14'),
(15, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '19', '603872', NULL, NULL, '2019-04-15 10:16:14', '2019-04-15 10:16:14'),
(16, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '22', '556807', NULL, NULL, '2019-04-13 10:16:14', '2019-04-13 10:16:14'),
(17, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '22', '803545', NULL, NULL, '2019-04-11 10:16:14', '2019-04-11 10:16:14'),
(18, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '23', '388533', NULL, NULL, '2019-04-09 10:16:14', '2019-04-09 10:16:14'),
(19, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '22', '456148', NULL, NULL, '2019-04-07 10:16:14', '2019-04-07 10:16:14'),
(20, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '27', '381341', NULL, NULL, '2019-04-05 10:16:14', '2019-04-05 10:16:14'),
(21, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '21', '630421', NULL, NULL, '2019-04-03 10:16:14', '2019-04-03 10:16:14'),
(22, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '37', '533054', NULL, NULL, '2019-04-01 10:16:14', '2019-04-01 10:16:14'),
(23, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '30', '990902', NULL, NULL, '2019-03-30 10:16:14', '2019-03-30 10:16:14'),
(24, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '18', '503846', NULL, NULL, '2019-03-28 10:16:14', '2019-03-28 10:16:14'),
(25, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '30', '963532', NULL, NULL, '2019-03-26 10:16:14', '2019-03-26 10:16:14'),
(26, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '18', '485990', NULL, NULL, '2019-03-24 10:16:14', '2019-03-24 10:16:14'),
(27, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '28', '682529', NULL, NULL, '2019-03-22 10:16:14', '2019-03-22 10:16:14'),
(28, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '17', '907897', NULL, NULL, '2019-03-20 10:16:14', '2019-03-20 10:16:14'),
(29, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '26', '876742', NULL, NULL, '2019-03-18 10:16:14', '2019-03-18 10:16:14'),
(30, 'Phòng trọ giá rẻ Tân Xuân', 'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo\n                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe\n                            điện 3,5k 1 số\n                            nước 70K 1 tháng\n                            internet 70k 1 tháng\n                            Thanh toán hàng tháng\n                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.', 'Screenshot from 2019-03-31 19-29-04.png', 1, 'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội', '29', '704163', NULL, NULL, '2019-03-16 10:16:14', '2019-03-16 10:16:14'),
(33, 'Phòng trọ giá rẻ gần trường', 'Hiện tại mình còn trống 2 slot nữa cho các bạn nào nhanh tay nhé.\r\n- Phòng đẹp, có ban công thoáng mát, phòng nhiều cửa sổ, DT: 25m2 - 30m2 ở được 3 đến 4 người một phòng, có chỗ nấu ăn, tầng 1 để xe free có camera an ninh 24/24, và an toàn và đặc biệt là không chung chủ, giờ giấc thoải mái...\r\n- Phòng có đủ giường, tủ, nóng lạnh, điều hòa, máy giặt, rèm cửa quạt trần...\r\n- Điện 3,5k , nước 80k/ người, wiffi 100k/phòng\r\n- Cọc 1 tháng đóng tiền 1 tháng.\r\n- Vị trí: Ngõ 73 Nguyễn Trãi (đối diện chợ Ngã Tư Sở).\r\n- Giá chỉ từ 3,5 tr/tháng (giới hạn ở từ 3- 4 người).\r\n- Nhà đang đi vào hoạt động, ở được luôn\r\nMn quan tâm xin LH: (Nga).', 'images (19).jpeg', 2, 'Số 35 Chiến thắng, Xuân Mai, Chương Mỹ, Hà Nội', '20', '750000', NULL, NULL, '2019-05-14 22:21:07', '2019-05-14 22:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `temps`
--

CREATE TABLE `temps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_room`
--

CREATE TABLE `temp_room` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `temp_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'users',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin@gmail.com', NULL, '$2y$10$E4lQkUo98tZJ91XXPD/8WOGkjsN0BDaELDOO1L8waROXXmnBm4CNe', 'admin', NULL, '2019-05-13 10:16:56', '2019-05-13 10:16:56'),
(2, 'Nguyen Thanh', 'nguyen@gmail.com', NULL, '$2y$10$VTrhOKjsFlG4/mNvshehpOK3ZrSwd8gYG4bYvwP1jSvnzkKt73k26', 'host', NULL, '2019-05-14 20:27:20', '2019-05-14 20:27:20'),
(3, 'Nguyen Thanh 2', 'trungthanh248y@gmail.com', NULL, '$2y$10$c9bMuLuazUi/ilq3hWYuQuvDiqiWT0dTQfroPETZjeOXKkTUxx8JW', 'users', 'yfAea3irklDDXPnfjGXlvWDmO3fqAZHNIBP0LioCJ5fNAOgEo58Vv54LHl6X', '2019-05-14 21:40:50', '2019-05-24 23:09:23'),
(4, 'Manh Cuong', 'ChoiLon123@gmail.com', NULL, '$2y$10$.XTwTUc9mOV4oxMAB2sbsulw61eUgEc7cGOY5rP9rXhsl1FqGhFsK', 'users', NULL, '2019-05-14 21:43:32', '2019-05-14 21:43:32'),
(5, 'Trung Tuyen', 'trungtuyen@gmail.com', NULL, '$2y$10$B.fo3xuqKBxt6yaorCeHquGtNwJeOXxrHYLzb.Kp/uamKRc/ZErJ6', 'users', NULL, '2019-05-14 21:44:16', '2019-05-14 21:44:16'),
(6, 'Van Hai', 'vanhai@gmail.com', NULL, '$2y$10$8OxflTbuIEqTcl96aTqgOuBXa8IBUahu8zHrq3MsliBZb6OsfPul2', 'host', NULL, '2019-05-14 21:44:48', '2019-05-14 21:44:48'),
(7, 'The Son', 'theson@gmail.com', NULL, '$2y$10$Z.hWxd1VyroHmN9ObtbrgenKrWWfGkEUyjuLteOdzfWCkymXu0nQa', 'users', NULL, '2019-05-14 21:45:33', '2019-05-14 21:45:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_post`
--
ALTER TABLE `event_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_post`
--
ALTER TABLE `item_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temps`
--
ALTER TABLE `temps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_room`
--
ALTER TABLE `temp_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_post`
--
ALTER TABLE `event_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `item_post`
--
ALTER TABLE `item_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `temps`
--
ALTER TABLE `temps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_room`
--
ALTER TABLE `temp_room`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
