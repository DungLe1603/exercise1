-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2019 at 06:40 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------
--
-- Create database: `exercise1`
--
create database exercise1 character set UTF8 collate utf8_unicode_ci;


--
-- Table structure for table `moon_cake`
--
DROP TABLE IF EXISTS `moon_cake`;
CREATE TABLE `moon_cake` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL COMMENT 'vnđ',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `moon_cake`
--

INSERT INTO `moon_cake` (`id`, `name`, `price`, `image`) VALUES
(1, 'Trăng vàng thanh nhã', 430000, 'image_1.jpg'),
(2, 'Trăng vàng thanh tú', 400000, 'image_2.jpg'),
(3, 'Trăng vàng hứng thú', 500000, 'image_3.jpg'),
(4, 'Trăng vàng thăng hoa', 450000, 'image_4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moon_cake`
--
ALTER TABLE `moon_cake`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moon_cake`
--
ALTER TABLE `moon_cake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
