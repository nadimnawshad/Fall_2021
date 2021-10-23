-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 12:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `userName` text NOT NULL,
  `password` text NOT NULL,
  `fullName` text NOT NULL,
  `MobileNo` text NOT NULL,
  `dob` date NOT NULL,
  `university` text NOT NULL,
  `degree` text NOT NULL,
  `major` text NOT NULL,
  `result` float NOT NULL,
  `passingYear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`userName`, `password`, `fullName`, `MobileNo`, `dob`, `university`, `degree`, `major`, `result`, `passingYear`) VALUES
('', '', '', '', '0000-00-00', 'AIUB', 'BSC', 'CSE', 3.95, 2021),
('', '', '', '', '0000-00-00', 'AIUB', 'BSC', 'EEE', 3.95, 2021),
('admin', '!@Mashuk2017.', 'Nadim Nawshad', '01712345678', '2021-10-08', 'AIUB', 'BSC', 'EEE', 3.95, 2021),
('admin', '!@Mashuk2017.', 'Nadim Nawshad', '01712345678', '2021-10-01', 'AIUB', 'BSC', 'CSE', 3.33, 2021),
('', '', '', '', '0000-00-00', 'AIUB', 'BSC', 'CSE', 3.96, 2021),
('admin', '!@Mashuk2017.', 'Nadim Nawshad', '01712345678', '2021-10-01', 'AIUB', 'BSC', 'EEE', 3.96, 2021),
('', '', '', '', '0000-00-00', 'AIUB', 'BSC', 'CSE', 3.96, 2021);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
