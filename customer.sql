-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2022 at 05:57 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `gujaratgas`
--

DROP TABLE IF EXISTS `gujaratgas`;
CREATE TABLE IF NOT EXISTS `gujaratgas` (
  `CustomerID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `PhoneNumber` varchar(10) NOT NULL,
  `AmountDue` int NOT NULL,
  `AmountPaid` int NOT NULL,
  PRIMARY KEY (`CustomerID`),
  UNIQUE KEY `PhoneNumber` (`PhoneNumber`)
) ENGINE=MyISAM AUTO_INCREMENT=1122470 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gujaratgas`
--

INSERT INTO `gujaratgas` (`CustomerID`, `Name`, `PhoneNumber`, `AmountDue`, `AmountPaid`) VALUES
(1122345, 'Manas Srivastava', '8292232122', 0, 800),
(1122346, 'Shuchit Pant', '8989321871', 500, 0),
(1122347, 'Devika Sapra', '8233123298', 200, 0),
(1122468, 'Tushar Toteja', '9876543213', 300, 0),
(1122348, 'Thomas Shelby', '9876543212', 500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'manas', 'contact2manas24@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'shuchit', 'contact2manas24@gmail.com', '56707216ba62aebdf871b556ff5c8715');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
