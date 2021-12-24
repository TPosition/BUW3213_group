-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql102.byetcluster.com
-- Generation Time: Dec 24, 2021 at 08:00 AM
-- Server version: 5.7.35-38
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_30590195_BUW3213`
--

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `id` int(64) NOT NULL,
  `meal_name` text NOT NULL,
  `price` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`id`, `meal_name`, `price`) VALUES
(1, 'No meal', 0),
(2, 'Breakfast ', 15),
(3, 'Lunch ', 15),
(4, 'Dinner ', 15),
(5, 'Half Board', 25),
(6, 'Full Board', 40);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `room_booked_id` int(6) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `grand_total` float(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `username`, `name`, `room_booked_id`, `check_in`, `check_out`, `grand_total`) VALUES
(1, 'Testuser', 'Lee Boon King', 1, '2021-12-24', '2021-12-27', 145.00);

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
(1, 'Single', 'Single', 70, 'Free', 'Null'),
(2, 'Single', 'Single', 70, 'Free', 'Null'),
(3, 'Single', 'Double', 80, 'Free', 'Null'),
(4, 'Single', 'Double', 80, 'Free', 'Null'),
(5, 'Single', 'Queen', 90, 'Free', 'Null'),
(6, 'Single', 'Queen', 90, 'Free', 'Null'),
(7, 'Single', 'King', 100, 'Free', 'Null'),
(8, 'Single', 'King', 100, 'Free', 'Null'),
(9, 'Double', 'Single', 100, 'Free', 'Null'),
(10, 'Double', 'Single', 100, 'Free', 'Null'),
(11, 'Double', 'Double', 110, 'Free', 'Null'),
(12, 'Double', 'Double', 110, 'Free', 'Null'),
(13, 'Double', 'Queen', 120, 'Free', 'Null'),
(14, 'Double', 'Queen', 120, 'Free', 'Null'),
(15, 'Double', 'King', 130, 'Not Free', 'Testuser'),
(16, 'Double', 'King', 130, 'Free', 'Null'),
(17, 'Luxury', 'Single', 140, 'Free', 'Null'),
(18, 'Luxury', 'Single', 140, 'Free', 'Null'),
(19, 'Luxury', 'Double', 150, 'Free', 'Null'),
(20, 'Luxury', 'Double', 150, 'Free', 'Null'),
(21, 'Luxury', 'Queen', 160, 'Free', 'Null'),
(22, 'Luxury', 'Queen', 160, 'Free', 'Null'),
(23, 'Luxury', 'King', 170, 'Free', 'Null'),
(24, 'Luxury', 'King', 170, 'Free', 'Null'),
(25, 'Deluxe', 'Single', 170, 'Free', 'Null'),
(26, 'Deluxe', 'Single', 170, 'Free', 'Null'),
(27, 'Deluxe', 'Double', 180, 'Free', 'Null'),
(28, 'Deluxe', 'Double', 180, 'Free', 'Null'),
(29, 'Deluxe', 'Queen', 190, 'Free', 'Null'),
(30, 'Deluxe', 'Queen', 190, 'Free', 'Null'),
(31, 'Deluxe', 'King', 200, 'Free', 'Null'),
(32, 'Deluxe', 'King', 200, 'Free', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `room_booked`
--

CREATE TABLE `room_booked` (
  `id` int(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `room_id` int(6) NOT NULL,
  `meal` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_booked`
--

INSERT INTO `room_booked` (`id`, `username`, `name`, `email`, `phone`, `room_id`, `meal`, `status`, `check_in`, `check_out`, `timestamp`) VALUES
(1, 'Testuser', 'Lee Boon King', 'leeboonking@gmail.com', '0167752939', 15, 'Lunch', 'Confirmed', '2021-12-24', '2021-12-27', '2021-12-24 12:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `role` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `created_at`, `email`, `phone`, `role`) VALUES
(1, 'admin', '$2y$10$OynDjaDnIoJyUcgQYXRKQeeXjNyKroivkOSOtZx3q/oGEtvdHwziy', '2021-12-23 21:53:48', 'admin@gmail.com', '01234567891', 'super admin'),
(2, 'Testuser', '$2y$10$/mZ1z1/iOzWUzbjMp/maiOwfYehH35bCKQaxOYg9GN9Y7csw4AAR6', '2021-12-24 06:53:19', 'testuser@gmail.com', '0167752939', 'user'),
(3, 'qq', '$2y$10$HEntUV.EimMK9abFsVugjuli5RuUDqDtOIk7XKd7hNvHoDQtCWV0S', '2021-12-24 07:12:51', 'qq@qq.qq', '0111111111', 'user'),
(4, 'jtpo', '$2y$10$6x6uUbYhBnygC2kfJB3AyOB8QE23LPXmvtlG1fRmUqnSnSWoh8enK', '2021-12-24 07:13:22', 'jtpo@gmail.com', '01377779866', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_booked`
--
ALTER TABLE `room_booked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meal`
--
ALTER TABLE `meal`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `room_booked`
--
ALTER TABLE `room_booked`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
