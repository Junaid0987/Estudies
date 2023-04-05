-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 05:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estudiez`
--

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `cnic` varchar(222) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`id`, `user_id`, `name`, `cnic`, `phone`, `profession`, `email`) VALUES
(1, NULL, 'moshin', '42453-6588765-5', '03236578654', 'butcher', 'butcher@gmail.com'),
(2, NULL, 'ali ', '43245-1344567-8', '03236578658', 'doctor', 'ali @gmail.com'),
(3, NULL, 'saqib', '45678-9877564-3', '03235467544', 'IT ', 'saqib@gmail.com'),
(37, NULL, 'yasir', '45678-9377564-3', '0847375722', 'ITp', 'yasirr@gmail.com'),
(39, NULL, 'junaid2', '45678-9878564-3', '8948458458485', 'ITb', 'v@gmail.com'),
(40, NULL, 'rajaammar2', '45678-93477564-3', '2525266266', 'IT ', 'junaid5@gmail.com'),
(44, NULL, 'rajaammar', '45678-987e7564-3', '5623663636', 'IT ', 'rajaam4mar@gmail.com'),
(45, NULL, 's', 'a', '3', '3', '3@gmail.com'),
(46, NULL, 'rajaammar', '2', '2', '2', '2@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cnic` (`cnic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
