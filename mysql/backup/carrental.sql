-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 03:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'Toyota', '2023-08-28 08:17:39', '2023-08-28 16:17:39'),
(2, 'Nissan', '2023-08-28 08:17:39', '2023-08-28 16:17:39'),
(3, 'Tesla', '2023-08-28 08:17:39', '2023-08-28 16:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `machine` varchar(50) NOT NULL,
  `seats` int(11) NOT NULL,
  `body` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `brand_id`, `model`, `year`, `price`, `transmission`, `fuel`, `machine`, `seats`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 'Corolla', '2021', 6000, 'Automatic', 'Gas', 'BWD', 4, 'Sedan', '2023-08-28 08:32:15', '2023-08-28 16:32:15'),
(2, 1, 'Avalon', '2019', 5000, 'Automatic', 'Gas', 'BWD', 4, 'Sedan', '2023-08-28 08:32:15', '2023-08-28 16:32:15'),
(3, 1, '86', '2020', 8000, 'Automatic', 'Gas', 'BWD', 4, 'Sedan', '2023-08-28 08:32:15', '2023-08-28 16:32:15'),
(4, 2, 'Altima', '2020', 4000, 'Automatic', 'Gas', 'FWD', 4, 'Sedan', '2023-08-28 08:32:15', '2023-08-28 16:32:15'),
(5, 2, 'Rogue', '2021', 7000, 'Manual', 'Gas', '4x4', 6, 'SUV', '2023-08-28 08:32:15', '2023-08-28 16:32:15'),
(6, 2, 'Terra', '2018', 5000, 'Manual', 'Gas', 'BWD', 6, 'SUV', '2023-08-28 08:32:15', '2023-08-28 16:32:15'),
(7, 3, 'S', '2019', 15000, 'Automatic', 'Electric', 'BWD', 4, 'Sedan', '2023-08-28 08:32:15', '2023-08-28 17:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `start_date_time` datetime NOT NULL,
  `end_date_time` datetime NOT NULL,
  `delivery_location` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `user_id`, `car_id`, `start_date_time`, `end_date_time`, `delivery_location`, `created_at`, `updated_at`) VALUES
(1, 10, 1, '2023-08-28 20:11:00', '2023-08-29 20:11:00', 'asd', '2023-08-28 12:11:49', '2023-08-28 20:11:49'),
(2, 10, 1, '2023-08-28 20:11:00', '2023-08-29 20:11:00', 'asd', '2023-08-28 12:12:25', '2023-08-28 20:12:25'),
(3, 10, 1, '2023-08-28 20:11:00', '2023-08-29 20:11:00', 'asd', '2023-08-28 12:12:29', '2023-08-28 20:12:29'),
(4, 10, 1, '2023-08-28 20:11:00', '2023-08-29 20:11:00', 'asd', '2023-08-28 12:12:43', '2023-08-28 20:12:43'),
(5, 10, 1, '2023-08-28 20:11:00', '2023-08-29 20:11:00', 'asd', '2023-08-28 12:15:35', '2023-08-28 20:15:35'),
(6, 10, 1, '2023-08-28 20:11:00', '2023-08-29 20:11:00', 'asd', '2023-08-28 12:16:23', '2023-08-28 20:16:23'),
(7, 10, 1, '2023-08-28 20:11:00', '2023-08-29 20:11:00', 'asd', '2023-08-28 12:29:13', '2023-08-28 20:29:13'),
(8, 10, 1, '2023-08-11 20:31:00', '2023-09-01 20:31:00', 'asd', '2023-08-28 12:31:33', '2023-08-28 20:31:33'),
(9, 10, 1, '2023-08-28 20:31:00', '2023-08-29 20:31:00', 'asd', '2023-08-28 12:31:57', '2023-08-28 20:31:57'),
(10, 10, 2, '2023-08-28 20:34:00', '2023-08-28 20:34:00', 'asd', '2023-08-28 12:34:13', '2023-08-28 20:34:13'),
(11, 10, 2, '2023-08-28 20:34:00', '2023-08-28 20:34:00', 'asd', '2023-08-28 12:34:26', '2023-08-28 20:34:26'),
(12, 10, 2, '2023-08-28 20:34:00', '2023-08-29 20:34:00', 'asd', '2023-08-28 12:34:55', '2023-08-28 20:34:55'),
(13, 10, 5, '2023-08-28 20:36:00', '2023-08-29 20:36:00', 'asdasd', '2023-08-28 12:36:12', '2023-08-28 20:36:12'),
(14, 10, 5, '2023-08-02 20:41:00', '2023-08-04 20:41:00', 'test', '2023-08-28 12:41:22', '2023-08-28 20:41:22'),
(15, 10, 2, '2023-08-28 22:24:00', '2023-08-28 13:24:00', 'asdasd', '2023-08-28 13:24:26', '2023-08-28 21:24:26'),
(16, 10, 1, '2023-08-28 21:26:00', '2023-08-29 21:26:00', 'asdasd', '2023-08-28 13:26:46', '2023-08-28 21:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(10, 'Raphael Enciso', 'psyruz18@gmail.com', '09266594717', 'asd', '2023-08-28 05:48:09', '2023-08-28 13:48:09'),
(11, 'Raphael Encisoo', 'psyruz181@gmail.com', '09266594716', 'asd', '2023-08-28 05:48:40', '2023-08-28 13:48:40'),
(12, 'Raphael Encisoa', 'psyruz18@gmail.coma', '09266594717a', '123', '2023-08-28 05:49:06', '2023-08-28 13:49:06'),
(13, 'Raphael Encisoaa', 'psyruz18@gmail.comaa', '09266594717aa', '123', '2023-08-28 05:50:28', '2023-08-28 13:50:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fullname` (`fullname`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `tel` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
