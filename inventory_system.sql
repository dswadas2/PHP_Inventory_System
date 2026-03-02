-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 04:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory_forecast`
--

CREATE TABLE `inventory_forecast` (
  `fid` int(5) NOT NULL,
  `productName` varchar(25) NOT NULL,
  `month` varchar(50) NOT NULL,
  `finalCount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory_forecast`
--

INSERT INTO `inventory_forecast` (`fid`, `productName`, `month`, `finalCount`) VALUES
(1, 'Mouse', 'January', 125),
(2, 'Mouse', 'February', 37),
(3, 'Mouse', 'March', 24),
(4, 'Mouse', 'April', 100),
(5, 'Mouse', 'May', 92),
(6, 'Mouse', 'June', 88),
(7, 'Mouse', 'July', 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(5) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` int(5) NOT NULL,
  `product_qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `product_name`, `product_price`, `product_qty`) VALUES
(1, 'Monitor', 5000, 11),
(4, 'Keyboard', 2500, 23),
(6, 'Webcam', 1800, 88),
(7, 'Pancit Canton', 22, 100),
(8, 'Softdrinks', 15, 10),
(9, 'Snowbear', 5, 100),
(10, 'Tsoknut', 45, 5),
(11, 'Milkita', 10, 77),
(12, 'Pisbol', 11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `level`) VALUES
(1, 'erwin', 'gwapo143', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory_forecast`
--
ALTER TABLE `inventory_forecast`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory_forecast`
--
ALTER TABLE `inventory_forecast`
  MODIFY `fid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
