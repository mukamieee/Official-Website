-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 08:33 AM
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
-- Database: `database_1`
--
DROP DATABASE IF EXISTS `database_1`;
CREATE DATABASE IF NOT EXISTS `database_1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `database_1`;

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

DROP TABLE IF EXISTS `genders`;
CREATE TABLE IF NOT EXISTS `genders` (
  `gendrId` tinyint(1) NOT NULL AUTO_INCREMENT,
  `gender` varchar(30) DEFAULT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`gendrId`),
  UNIQUE KEY `gender` (`gender`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`gendrId`, `gender`, `datecreated`, `dateupdated`) VALUES
(1, 'Female', '2024-07-12 03:47:55', '2024-07-12 03:47:55'),
(2, 'Male', '2024-07-12 03:47:55', '2024-07-12 03:47:55'),
(3, 'Rather not say', '2024-07-12 03:47:55', '2024-07-12 03:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productId` int(10) NOT NULL AUTO_INCREMENT,
  `productName` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Price` bigint(20) NOT NULL,
  `Material` varchar(50) NOT NULL,
  `Stock` bigint(20) NOT NULL DEFAULT 0,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `Description`, `Price`, `Material`, `Stock`, `createdAt`) VALUES
(1, 'Necklace', 'Simple With diamonds ', 3000, 'Diamonds and Gold', 100, '2024-07-12 09:25:07'),
(2, 'Rings', 'Simple and Gothic', 1239, 'Alloy', 28, '2024-07-12 09:25:07'),
(3, 'Earrings', 'Pure glimmering gold', 4000, 'Gold', 99, '2024-07-12 09:25:07'),
(4, 'Bracelets', 'Charm silver bracelets', 150, 'Silver Metal', 2000, '2024-07-12 09:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `roleId` tinyint(1) NOT NULL AUTO_INCREMENT,
  `role` varchar(30) DEFAULT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`roleId`),
  UNIQUE KEY `role` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleId`, `role`, `datecreated`, `dateupdated`) VALUES
(1, 'Customer', '2024-07-12 03:45:00', '2024-07-12 03:45:00'),
(2, 'Jeweler', '2024-07-12 03:45:00', '2024-07-12 03:45:00'),
(3, 'Gemologist', '2024-07-12 03:45:00', '2024-07-12 03:45:00'),
(4, 'Management', '2024-07-12 03:45:00', '2024-07-12 03:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` bigint(10) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT 'email',
  `password` varchar(60) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `roleId` tinyint(1) NOT NULL DEFAULT 0,
  `genderId` tinyint(1) NOT NULL DEFAULT 0,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`userID`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fullname`, `email`, `password`, `username`, `roleId`, `genderId`, `datecreated`, `dateupdated`) VALUES
(1, 'Lewa Kadzo', 'kadzo@example.com', 'abc123', 'klewa', 1, 1, '2024-07-12 09:30:11', '2024-07-12 09:30:11'),
(2, 'Nicole Ndila', 'ndila@example.com', 'efg123', 'nndila', 2, 1, '2024-07-12 09:30:11', '2024-07-12 09:31:39'),
(3, 'Joy Njeru', 'joy@example.com', 'hij123', 'jnjeru', 3, 1, '2024-07-12 09:30:11', '2024-07-12 09:31:39'),
(4, 'Jahleel Mollel', 'jahleel@example.com', 'lmnop1234', 'mjahleel', 4, 2, '2024-07-12 09:30:11', '2024-07-12 09:31:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
