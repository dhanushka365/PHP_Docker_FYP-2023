-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql_db
-- Generation Time: May 03, 2023 at 03:15 AM
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
-- Table structure for table `elec_usage`
--

CREATE TABLE `elec_usage` (
  `account_no` int DEFAULT NULL,
  `voltage` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `current` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `power` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `energy` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `frequency` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pf` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `elec_usage`
--

INSERT INTO `elec_usage` (`account_no`, `voltage`, `current`, `power`, `energy`, `frequency`, `pf`, `date`, `time`) VALUES
(144444, '246.30', '0.00', '0.00', '18.85', '50.20', '0.00', '2023-05-01', '19:43:57'),
(144444, '245.60', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:44:09'),
(144444, '242.40', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:44:22'),
(144444, '242.40', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:44:34'),
(144444, '242.40', '0.00', '0.00', '18.85', '50.20', '0.00', '2023-05-01', '19:44:47'),
(144444, '242.10', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:45:00'),
(144444, '241.70', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:45:12'),
(144444, '243.80', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:45:25'),
(144444, '243.90', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:45:38'),
(144444, '243.80', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:45:50'),
(144444, '243.10', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:46:03'),
(144444, '243.20', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:46:15'),
(144444, '243.60', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:46:28'),
(144444, '242.90', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:46:41'),
(144444, '244.80', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:46:53'),
(144444, '245.10', '0.00', '0.00', '18.85', '50.20', '0.00', '2023-05-01', '19:47:06'),
(144444, '249.00', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:47:19'),
(144444, '248.90', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:47:31'),
(144444, '246.60', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:47:44'),
(144444, '246.70', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:47:56'),
(144444, '247.60', '0.00', '0.00', '18.85', '50.20', '0.00', '2023-05-01', '19:48:09'),
(144444, '247.00', '0.00', '0.00', '18.85', '50.20', '0.00', '2023-05-01', '19:48:22'),
(144444, '248.00', '0.00', '0.00', '18.85', '50.20', '0.00', '2023-05-01', '19:48:34'),
(144444, '247.90', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:48:47'),
(144444, '247.90', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:49:00'),
(144444, '246.90', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:49:12'),
(144444, '248.60', '0.00', '0.00', '18.85', '50.20', '0.00', '2023-05-01', '19:49:25'),
(144444, '250.20', '0.00', '0.00', '18.85', '50.20', '0.00', '2023-05-01', '19:49:37'),
(144444, '251.10', '0.00', '0.00', '18.85', '50.20', '0.00', '2023-05-01', '19:49:50'),
(144444, '250.60', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:50:03'),
(144444, '250.40', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:50:15'),
(144444, '250.50', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:50:28'),
(144444, '249.70', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:50:41'),
(144444, '250.00', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:50:53'),
(144444, '248.60', '0.00', '0.00', '18.85', '49.90', '0.00', '2023-05-01', '19:51:06'),
(144444, '249.00', '0.00', '0.00', '18.85', '49.90', '0.00', '2023-05-01', '19:51:18'),
(144444, '249.50', '0.00', '0.00', '18.85', '49.90', '0.00', '2023-05-01', '19:51:31'),
(144444, '249.90', '0.00', '0.00', '18.85', '49.90', '0.00', '2023-05-01', '19:51:44'),
(144444, '249.50', '0.00', '0.00', '18.85', '49.90', '0.00', '2023-05-01', '19:51:56'),
(144444, '249.60', '0.00', '0.00', '18.85', '49.90', '0.00', '2023-05-01', '19:52:09'),
(144444, '249.60', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:52:22'),
(144444, '249.20', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:52:34'),
(144444, '248.40', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:52:47'),
(144444, '247.90', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:52:59'),
(144444, '249.30', '0.00', '0.00', '18.85', '50.20', '0.00', '2023-05-01', '19:53:12'),
(144444, '248.70', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:53:25'),
(144444, '248.80', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:53:37'),
(144444, '249.20', '0.00', '0.00', '18.85', '50.20', '0.00', '2023-05-01', '19:53:50'),
(144444, '249.00', '0.00', '0.00', '18.85', '50.20', '0.00', '2023-05-01', '19:54:03'),
(144444, '248.50', '0.00', '0.00', '18.85', '50.20', '0.00', '2023-05-01', '19:54:15'),
(144444, '248.50', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:54:28'),
(144444, '248.50', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:54:40'),
(144444, '248.50', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:54:53'),
(144444, '250.20', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:55:06'),
(144444, '250.20', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:55:18'),
(144444, '250.00', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:55:36'),
(144444, '248.80', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:55:54'),
(144444, '249.10', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:56:06'),
(144444, '247.30', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:56:19'),
(144444, '246.60', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '19:56:31'),
(144444, '246.80', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:59:38'),
(144444, '246.20', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '19:59:51'),
(144444, '246.60', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '20:00:03'),
(144444, '248.00', '0.00', '0.00', '18.85', '50.20', '0.00', '2023-05-01', '20:00:16'),
(144444, '247.40', '0.00', '0.00', '18.85', '50.20', '0.00', '2023-05-01', '20:00:29'),
(144444, '248.30', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '20:00:41'),
(144444, '248.00', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '20:00:54'),
(144444, '247.60', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '20:01:06'),
(144444, '246.70', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '20:01:24'),
(144444, '246.20', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '20:01:37'),
(144444, '246.10', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '20:01:49'),
(144444, '247.50', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '20:02:02'),
(144444, '248.20', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '20:02:14'),
(144444, '248.80', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '20:02:27'),
(144444, '249.20', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '20:02:40'),
(144444, '249.10', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '20:02:52'),
(144444, '249.50', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '20:03:05'),
(144444, '249.50', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '20:03:18'),
(144444, '249.80', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '20:03:46'),
(144444, '251.40', '0.00', '0.00', '18.85', '50.10', '0.00', '2023-05-01', '20:03:59'),
(144444, '251.90', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '20:04:19'),
(144444, '253.50', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '20:05:38'),
(144444, '253.70', '0.00', '0.00', '18.85', '49.90', '0.00', '2023-05-01', '20:05:52'),
(144444, '253.70', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '20:06:04'),
(144444, '254.40', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '20:06:22'),
(144444, '254.70', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '20:06:35'),
(144444, '253.50', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '20:06:47'),
(144444, '253.30', '0.00', '0.00', '18.85', '49.90', '0.00', '2023-05-01', '20:07:00'),
(144444, '254.20', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '20:07:13'),
(144444, '253.80', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '20:07:25'),
(144444, '253.50', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '20:07:38'),
(144444, '253.00', '0.00', '0.00', '18.85', '49.90', '0.00', '2023-05-01', '20:07:50'),
(144444, '253.90', '0.00', '0.00', '18.85', '49.90', '0.00', '2023-05-01', '20:08:03'),
(144444, '253.40', '0.00', '0.00', '18.85', '50.00', '0.00', '2023-05-01', '20:08:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;