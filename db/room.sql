-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 05:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(6) NOT NULL,
  `room_type` varchar(30) NOT NULL,
  `bedding` varchar(15) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `booked_by_username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_type`, `bedding`, `price`, `status`, `booked_by_username`) VALUES
(1, 'Single', 'Single', 70, 'Free', 'KL'),
(2, 'Single', 'Single', 70, 'Free', 'testing'),
(3, 'Single', 'Double', 80, 'Not Free', 'zzz'),
(4, 'Single', 'Double', 80, 'Free', 'Null'),
(5, 'Single', 'Queen', 90, 'Free', 'kkk'),
(6, 'Single', 'Queen', 90, 'Free', 'Null'),
(7, 'Single', 'King', 100, 'Not Free', 'testing'),
(8, 'Single', 'King', 100, 'Not Free', 'Null'),
(9, 'Double', 'Single', 100, 'Free', 'Null'),
(10, 'Double', 'Single', 100, 'Free', 'Null'),
(11, 'Double', 'Double', 110, 'Free', 'Null'),
(12, 'Double', 'Double', 110, 'Free', 'Null'),
(13, 'Double', 'Queen', 120, 'Free', 'Null'),
(14, 'Double', 'Queen', 120, 'Free', 'Null'),
(15, 'Double', 'King', 130, 'Free', 'Null'),
(16, 'Double', 'King', 130, 'Free', 'Null'),
(17, 'Luxury', 'Single', 140, 'Free', 'Null'),
(18, 'Luxury', 'Single', 140, 'Free', 'Null'),
(19, 'Luxury', 'Double', 150, 'Free', 'Null'),
(20, 'Luxury', 'Double', 150, 'Free', 'Null'),
(21, 'Luxury', 'Queen', 160, 'Not Free', 'testing'),
(22, 'Luxury', 'Queen', 160, 'Free', 'Null'),
(23, 'Luxury', 'King', 170, 'Free', 'Null'),
(24, 'Luxury', 'King', 170, 'Free', 'Null'),
(25, 'Deluxe', 'Single', 170, 'Free', 'Null'),
(26, 'Deluxe', 'Single', 170, 'Free', 'Null'),
(27, 'Deluxe', 'Double', 0, 'Free', 'Null'),
(28, 'Deluxe', 'Double', 0, 'Free', 'Null'),
(29, 'Deluxe', 'Queen', 0, 'Free', 'Null'),
(30, 'Deluxe', 'Queen', 0, 'Free', 'Null'),
(31, 'Deluxeqwe', 'King', 0, 'Free', 'Null'),
(33, 'qwe', 'qwe', 0, 'Free', 'Null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
