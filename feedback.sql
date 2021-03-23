-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 03:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`user_name`, `password`, `email`, `mobile`) VALUES
('jaya', '123', 'jaya@gmail.com', '9876543210'),
('prasanna', '', '', ''),
('sai', '12345', 'sairisha77@gmail.com', '09500003058'),
('syed', '12345', 'syed@gmail.com', '9887456123');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `user_name` varchar(255) NOT NULL,
  `slotno` int(11) NOT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`user_name`, `slotno`, `status`) VALUES
('', 1, 'false'),
('', 2, 'false'),
('', 3, 'false'),
('', 4, 'false'),
('', 5, 'false'),
('', 6, 'false'),
('', 7, 'false'),
('', 8, 'false'),
('', 9, 'false'),
('', 10, 'false'),
('', 11, 'false'),
('', 12, 'false'),
('', 13, 'false'),
('', 14, 'false'),
('', 15, 'false'),
('', 16, 'false'),
('', 17, 'false'),
('', 18, 'false'),
('', 19, 'false'),
('', 20, 'false'),
('', 21, 'false'),
('syed', 22, 'true'),
('', 23, 'false'),
('', 24, 'false'),
('', 25, 'false'),
('', 26, 'false'),
('', 27, 'false'),
('', 28, 'false'),
('syed', 29, 'true'),
('', 30, 'false'),
('', 31, 'false'),
('', 32, 'false'),
('', 33, 'false'),
('', 34, 'false'),
('', 35, 'false'),
('', 36, 'false'),
('', 37, 'false'),
('', 38, 'false'),
('', 39, 'false'),
('', 40, 'false'),
('', 41, 'false'),
('', 42, 'false'),
('', 43, 'false'),
('', 44, 'false'),
('', 45, 'false'),
('', 46, 'false'),
('', 47, 'false'),
('', 48, 'false'),
('', 49, 'false'),
('', 50, 'false'),
('', 51, 'false'),
('', 52, 'false'),
('', 53, 'false'),
('', 54, 'false'),
('', 55, 'false'),
('', 56, 'false'),
('', 57, 'false'),
('', 58, 'false'),
('', 59, 'false'),
('', 60, 'false'),
('', 61, 'false'),
('', 62, 'false'),
('', 63, 'false'),
('', 64, 'false'),
('', 65, 'false'),
('', 66, 'false'),
('', 67, 'false'),
('', 68, 'false'),
('', 69, 'false'),
('', 70, 'false'),
('', 71, 'false'),
('', 72, 'false'),
('', 73, 'false'),
('', 74, 'false'),
('', 75, 'false'),
('', 76, 'false'),
('', 77, 'false'),
('', 78, 'false'),
('', 79, 'false'),
('', 80, 'false'),
('', 81, 'false'),
('', 82, 'false'),
('', 83, 'false'),
('', 84, 'false'),
('', 85, 'false'),
('', 86, 'false'),
('', 87, 'false'),
('', 88, 'false'),
('', 89, 'false'),
('', 90, 'false'),
('', 91, 'false'),
('', 92, 'false'),
('', 93, 'false'),
('', 94, 'false'),
('', 95, 'false'),
('', 96, 'false'),
('', 97, 'false'),
('', 98, 'false'),
('', 99, 'false'),
('', 100, 'false'),
('', 101, 'false'),
('', 102, 'false'),
('', 103, 'false'),
('', 104, 'false'),
('', 105, 'false'),
('', 106, 'false'),
('', 107, 'false'),
('', 108, 'false'),
('', 109, 'false'),
('', 110, 'false'),
('', 111, 'false'),
('', 112, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`slotno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
