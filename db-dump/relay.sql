-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql_db
-- Generation Time: May 01, 2023 at 10:13 AM
-- Server version: 8.0.33
-- PHP Version: 8.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eleccare`
--

-- --------------------------------------------------------

--
-- Table structure for table `relay`
--

CREATE TABLE `relay` (
  `Relay_ID` int NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Relay_Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `relay`
--

INSERT INTO `relay` (`Relay_ID`, `Status`, `Relay_Type`) VALUES
(1, 0, 'BULB(10W)'),
(2, 1, 'BULB(10W)'),
(3, 0, 'BULB(10W)'),
(4, 1, 'BULB(10W)'),
(5, 1, 'BULB(10W)'),
(6, 1, 'BULB(10W)'),
(7, 0, 'BULB(10W)'),
(8, 1, 'BULB(10W)'),
(9, 0, 'BULB(10W)'),
(10, 0, 'BULB(10W)'),
(11, 0, 'BULB(10W)'),
(12, 0, 'BULB(10W)'),
(13, 1, 'BULB(10W)'),
(14, 1, 'BULB(10W)'),
(15, 1, 'BULB(10W)'),
(16, 0, 'BULB(10W)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `relay`
--
ALTER TABLE `relay`
  ADD PRIMARY KEY (`Relay_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `relay`
--
ALTER TABLE `relay`
  MODIFY `Relay_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
