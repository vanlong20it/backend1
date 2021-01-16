-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 16, 2021 at 05:43 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yamifood_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `food_id` int(11) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_price` decimal(19,0) NOT NULL,
  `food_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`food_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `food_category`, `food_description`, `food_price`, `food_image`) VALUES
(1, 'Trà đào', 'drink', 'Thanh nhiệt, vị chua thanh mát và thanh đạm', '25000', 'img-01.jpg'),
(2, 'Dâu tây', 'drink', 'Thơm ngon, bổ dưỡng, đẹp da', '50000', 'img-02.jpg'),
(3, 'Vang nho', 'drink', 'Được ủ 5 năm, vị ngon không đâu sánh bằng', '460000', 'img-03.jpg'),
(4, 'Hamburger', 'lunch', 'Đầy đủ nguyên liệu, cung cấp đủ dinh dưỡng cần thiết', '30000', 'img-04.jpg'),
(5, 'Bò xào rau', 'lunch', 'Thịt bò được nhập từ Nhật Bản, tươi ngon, thích hợp dùng cho mọi cách nấu nướng.', '120000', 'img-05.jpg'),
(6, 'Cá hồi Bắc Mỹ', 'lunch', 'Không những ngon, mà còn cực bổ dưỡng nữa nhé!', '230000', 'img-06.jpg'),
(7, 'Thịt bò hun khói', 'lunch', 'Không có vị đắng, mà là vị của hun khói', '130000', 'img-07.jpg'),
(8, 'Lẩu chay', 'dinner', 'Một bữa tối nhẹ nhàng bình yên', '100000', 'img-08.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
