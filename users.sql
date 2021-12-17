-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 05:20 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `email`, `phone`) VALUES
(1, 'qwe', '$2y$10$Dzun0QZ1ANQNwUFyIq8A9exhZzMoztx4JpYPLDOCCGjIESBHYxeZi', '2021-12-16 12:15:31', '', '0'),
(2, 'ghjvbnvbn', '$2y$10$5L.XuVr62DkN5Q42DXsan.uno3ZHtbM6CsX6ZcutZWiRYiCifGd/S', '2021-12-17 21:29:38', 'zxc@gmail.com', '01377779866'),
(3, 'zxczxczxc', '$2y$10$PYRQTRGjNTIky9wBazU99e/J4wcxY3mTimb7AUAb9oEmA9qnAvAS6', '2021-12-17 21:29:46', 'zxc@gmail.com', '01377779866'),
(4, 'asdasdsad', '$2y$10$Apk3EAttK2ElJkVLxuKvZ.k6nNZytJLTTuzWkEuxqgzSm/irffSx6', '2021-12-17 21:30:18', 'zxc@gmail.com', '01377779866'),
(5, 'zzz', '$2y$10$Audc8ZhMdGKd3gplhgUfU..FC1ff6eBoSre/IbxE9Xksx34kXDUM6', '2021-12-17 21:31:19', 'zxc@gmail.com', '01'),
(6, 'dfsdfsdffdsff', '$2y$10$gSi5t7/XClfMjQzOyzSynu6FrrSGg8rviPnNtD3hVKfCefeB379mO', '2021-12-17 21:32:04', 'zxc@gmail.com', '01377'),
(7, 'bbbbbb', '$2y$10$eNKusaX1yfMOXAnA1awMTePFmWmBm6OW3Dt7xzKcIajrNhyA8bw5e', '2021-12-17 21:32:21', 'bbb@gmail.com', '212'),
(8, 'asdzxczxc', '$2y$10$mSmO8tQJhoLUMmrtgTs.JO9FnmRzH8i5SnkXLJ/QxZ5k7aIBpd.BG', '2021-12-17 21:33:16', 'zxc@gmail.com', '0137'),
(9, 'fffff', '$2y$10$EZS5NoVM3oPePFTqw/hhwu.caEDpfH1p.ChwRJm0BfSC/NmEx/DNi', '2021-12-17 21:36:07', 'zxc@gmail.com', '12312312312312'),
(10, 'qweasdasd', '$2y$10$CZjI37Y0FHatGbnUDQW0..FquRpG231ebiUo6UKO98fpr/chgyefC', '2021-12-17 21:49:10', 'dsf@gmail.com', '01377779866'),
(11, 'hfghfghfhgfh', '$2y$10$35O7SEmhSJN/k4rroXKyGOXEKjEdaAYFrXZm6Pcvp0VGHFuwigSZO', '2021-12-17 22:33:14', 'zxc@gmail.com', '01377779866'),
(12, 'aaaaa', '$2y$10$ojYRx.Uu5OrSn6vJcKoBz.i14VGTOljLb434P8EBl/YW//3cS256.', '2021-12-17 22:34:08', 'zxc@gmail.com', '01377779866'),
(13, 'ggg', '$2y$10$.SCJFUFxhylJIL6AK7uZvOpWZT8lSB8hEsIXJaZEygsL9V/qsY1PG', '2021-12-17 23:01:08', 'greatfoodprefer@gmail.com', '01377779866'),
(14, 'hhh', '$2y$10$4V6v968Icu/vTpe7q/oom.YlAwNoqiV2BKLwYFLdm5B7WgTHpRSB.', '2021-12-18 00:13:25', 'zxc@gmail.com', '01377779866');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
