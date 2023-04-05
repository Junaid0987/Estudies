-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 08:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `class_id`, `student_id`, `date`, `status`) VALUES
(15, 1, 2, '2022-08-12', 'Present'),
(16, 1, 4, '2022-08-12', 'Present'),
(17, 1, 2, '2022-08-25', 'Present'),
(18, 1, 4, '2022-08-12', 'Present'),
(19, 1, 2, '2022-08-25', 'Present'),
(20, 1, 4, '2022-08-12', 'Present'),
(21, 1, 2, '2022-08-25', 'Present'),
(22, 1, 4, '2022-08-12', 'Present'),
(23, 0, 0, '2022-08-16', 'Active'),
(24, 0, 0, '0000-00-00', ''),
(25, 12, 2, '2022-08-13', 'Present'),
(26, 0, 4, '2022-08-13', 'Present'),
(27, 12, 2, '2022-08-13', 'Present'),
(28, 0, 4, '2022-08-13', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`, `details`, `status`) VALUES
(1, 'KG', 'KG', 'Active'),
(2, 'kG-1', 'kinder garden', 'Active'),
(3, 'KG-2', 'kinder garden', 'Active'),
(4, '1', '1 A', 'Active'),
(6, '2', '2 A', 'Active'),
(7, '3', '3 A', 'Active'),
(8, '4', '4 A', 'Active'),
(9, '5', '5 A', 'Active'),
(10, '6', '6 A', 'Active'),
(11, '7', '7 A', 'Active'),
(12, '8', '8 A', 'Active'),
(13, '9', '9 A', 'Active'),
(14, '10', '10 A', 'Active'),
(15, '11', '11 A', 'Active'),
(16, '12', '12 A', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `class_room_subject`
--

CREATE TABLE `class_room_subject` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teachers_id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `day` varchar(111) NOT NULL,
  `status` varchar(111) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_room_subject`
--

INSERT INTO `class_room_subject` (`id`, `class_id`, `subject_id`, `teachers_id`, `time`, `day`, `status`) VALUES
(3, 1, 5, 3, '2022-08-13 19:01:00', 'saturday', 'Active'),
(4, 1, 5, 3, '2022-08-20 19:23:00', 'saturday', 'Active'),
(5, 1, 4, 3, '2022-08-26 19:27:00', 'friday', 'Active'),
(6, 1, 4, 26, '2022-08-25 11:50:00', 'monday', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `message`, `time`) VALUES
(5, 'ammar', 'naeemmehmood847@gmail.com', 2147483647, 'yhfyhcfhcfhchycghhgvchgyudt7td', '2022-08-13 14:41:01'),
(6, 'ammar', 'naeemmehmood847@gmail.com', 878998, 'gjtjhojr', '2022-08-13 14:44:28'),
(7, 'saeed', 'saeed@gmail.com', 2147483647, 'Need help in admission', '2022-08-13 14:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(250) NOT NULL,
  `start_date_time` datetime NOT NULL,
  `end_date_time` datetime NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `image`, `category`, `start_date_time`, `end_date_time`, `status`) VALUES
(2, 'event', 'hht', '1660401590166039763020170923124105.jpg', 'hthr', '2022-08-13 18:53:00', '2022-08-20 18:53:00', 'jtht');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(20) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `class`, `subject`, `type`, `status`) VALUES
(6, 'drawing test 1', 'KG', 'English', 'Online', 'Active'),
(7, 'drawing test 2', 'KG', 'English', 'Online', 'Active'),
(8, 'drawing', 'KG', 'Drawings', 'Online', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `extra-class`
--

CREATE TABLE `extra-class` (
  `id` int(11) NOT NULL,
  `school` varchar(50) NOT NULL,
  `student` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `profession` varchar(222) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `profession`, `message`) VALUES
(3, 'AMMAR ALI', 'STUDENT', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,'),
(4, 'JUNAID', 'PROGRAMMER', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.'),
(5, 'MOHSIN', 'WORKER', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum '),
(6, 'Saeed', 'Developer', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum ');

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cnic` varchar(222) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`id`, `name`, `cnic`, `phone`, `profession`, `email`) VALUES
(1, 'Ammar', '8888898999', '446565756', 'nothing', 'ammar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `category`, `time`, `status`) VALUES
(1, 'Sir saeed', 'sir saeed', '1660401814166039763020170923124105.jpg', 'sir Saeed', '2022-08-13 18:11:00', 'Inactive'),
(2, 'sir Abid', 'sir Abid', '16603979791660394293a4.jpg', 'sir Abid', '2022-08-02 18:39:00', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL DEFAULT 'A',
  `enrollment` varchar(50) NOT NULL,
  `roll-no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `class`, `section`, `enrollment`, `roll-no`, `email`, `status`) VALUES
(2, 'Mohsin Ali', '12', 'B', '89888', '3434', 'moshin555@gmail.com', 'Active'),
(4, 'abdullah', 'KG', 'A', '11', '2', 'abdullah@gmail.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student_exams`
--

CREATE TABLE `student_exams` (
  `id` int(11) NOT NULL,
  `exam_id` varchar(50) NOT NULL,
  `class_id` varchar(50) NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `marks` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_exams`
--

INSERT INTO `student_exams` (`id`, `exam_id`, `class_id`, `start_datetime`, `end_datetime`, `status`, `marks`) VALUES
(1, '0', '7', '2022-08-25 10:47:00', '2022-08-22 10:48:00', 'Active', 70),
(3, '0', '6', '2022-08-13 19:49:00', '2022-08-14 19:49:00', 'Active', 50),
(4, '0', '6', '2022-08-13 20:03:00', '2022-08-14 20:03:00', 'Active', 50),
(5, '6', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active', 0),
(6, '7', '1', '2022-08-13 20:19:00', '0000-00-00 00:00:00', 'Active', 50),
(7, 'drawing test 2', 'KG', '2022-08-13 20:25:00', '2022-08-25 20:25:00', 'Active', 50);

-- --------------------------------------------------------

--
-- Table structure for table `student_exam_marks`
--

CREATE TABLE `student_exam_marks` (
  `id` int(11) NOT NULL,
  `exam_id` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `marks` float NOT NULL,
  `Attempt` varchar(20) NOT NULL DEFAULT 'Present'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_exam_marks`
--

INSERT INTO `student_exam_marks` (`id`, `exam_id`, `student_id`, `marks`, `Attempt`) VALUES
(1, '', '', 85, 'Attempt'),
(2, '', '', 15, 'Attempt'),
(3, '', '', 10, 'Attempt');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(222) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `image`, `status`) VALUES
(14, 'ENGLISH', '1660401199english.jpg', 'yes'),
(15, 'CHEMISTRY', '1660401217chemistry.png', 'yes'),
(19, 'URDU', '1660403968urdu.jpg', 'yes'),
(20, 'SCIENCE', '1660403992science.jpg', 'yes'),
(21, 'BIOLOGY', '1660404007biology.jpg', 'yes'),
(22, 'COMPUTER', '1660404126computer.webp', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `school` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active',
  `joining_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `school`, `image`, `name`, `contact`, `email`, `status`, `joining_date`) VALUES
(3, 'rr memorial school', 'hacker-5471975_960_720.png', 'Ashir', '3445975975875', 'Ashir@gmail.com', 'No', '2022-08-30'),
(4, 'rr memorial school', 'hacker-5471975_960_720.png', 'Ashir', '3445975975875', 'Ashir@gmail.com', 'No', '2022-08-30'),
(5, 'rr memorial school', 'hacker-5471975_960_720.png', 'Ashir', '3445975975875', 'Ashir@gmail.com', 'No', '2022-08-30'),
(6, 'rr memorial school', 'hacker-5471975_960_720.png', 'Ashir', '3445975975875', 'Ashir@gmail.com', 'No', '2022-08-30'),
(7, 'rr memorial school', 'hacker-5471975_960_720.png', 'Ashir', '3445975975875', 'Ashir@gmail.com', 'No', '2022-08-30'),
(15, 'abc school', 'coding-1841550_960_720 (1).webp', 'junaid', '65675475474', 'juniad@gmail.com', 'No', '2022-08-19'),
(16, 'abc school', 'coding-1841550_960_720 (1).webp', 'junaid', '65675475474', 'juniad@gmail.com', 'No', '2022-08-19'),
(17, 'abc school', 'coding-1841550_960_720 (1).webp', 'junaid', '65675475474', 'juniad@gmail.com', 'No', '2022-08-19'),
(18, 'abc school', 'pexels-photo-2246476.jpeg', 'junaid', '7687687', 'juniad@gmail.com', 'No', '2022-08-24'),
(19, 'rr memorial school', 'pexels-photo-2246476.jpeg', 'junaid', '353554656', 'juniad@gmail.com', 'yes', '2022-08-18'),
(20, 'abc', '20170923124105.jpg', 'kjmklmd', '98987878', 'uhujh@gmail.com', 'yes', '2022-08-27'),
(21, 'mjdkjfk', 'a4.jpg', 'jjodjod', '867868586', 'hello@gmail.com', 'yes', '2022-08-08'),
(23, 'abcd', '1660221370source-code-583537_960_720.jpg', 'tariq', '787878787', 'tariq@gmail.com', 'val', '2022-09-01'),
(24, 'mohsin', '1660222500source-code-583537_960_720.jpg', 'mohsin', '030033030', 'mohsin@gmail.com', 'val', '2022-08-11'),
(25, 'mohsin1', '1660222519pexels-photo-2246476.jpeg', 'mohsin1', '0300330301', 'mohsin1@gmail.com', 'val', '2022-08-11'),
(26, 'mohsin2', '1660221134new.png', 'mohsin2', '0300330302', 'mohsin2@gmail.com', 'Active', '2022-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dat-of-birth` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `dat-of-birth`, `gender`, `religion`, `email`, `password`, `contact`, `adress`, `category`) VALUES
(1, 'mudassir4', 'cfxbvxcv', '2022-08-05', 'on', 'islam', 'mudassir@gmail.com', 'dfdsfsd', '3453465346', 'sgsdgsdgsg', 'teacher'),
(2, 'junaid', 'ashraf', '2001-08-03', 'on', 'islam', 'juniad@gmail.com', '12345', '03455876897', 'sher pao landhi', ''),
(3, 'Raja', 'ammar', '2001-08-09', 'on', 'islam', 'ammar@gmail.com', '890', '546577', 'karachi', 'student'),
(4, 'tariq', 'khan', '2022-08-05', 'on', 'islam', 'tariq@gmail.com', '000', '45465756', 'landhi,karachi', 'teacher'),
(6, 'ashir', 'irfan', '2001-08-08', 'male', 'islam', 'ashir1@gmail.com', '7777', '6786868', 'karachi', 'teacher'),
(11, 'momin', 'saeed', '1980-08-23', 'male', 'islam', 'momin@gmail.com', '12345', '0893664674', 'karachi', 'teacher'),
(12, 'uzair', 'khan', '2000-03-09', 'male', 'islam', 'uzair@gmail.com', '555', '904477487474', 'karachi', 'student'),
(13, 'uzair', 'khan', '2022-08-30', 'male', 'islam', 'uzair100@gmail.com', '10000', '5445456', 'karachi', 'student'),
(14, 'uzair', 'khan', '2022-09-08', 'male', 'islam', 'uzair22@gmail.com', '1234567', '4565765', 'karachi', 'student'),
(15, 'uzair', 'khan', '2022-09-08', 'male', 'islam', 'uzair22@gmail.com', '', '4565765', 'karachi', 'student'),
(16, 'uzair', 'khan', '2022-09-08', 'male', 'islam', 'uzair223@gmail.com', '', '4565765', 'karachi', 'student'),
(17, 'mudassir4', 'khan', '2022-09-02', 'male', 'islam', 'mudassir@gmail.com', '9999', '455656', 'karachi', 'student'),
(18, 'mudassir4', 'khan', '2022-09-02', 'male', 'islam', 'mudassir@gmail.com', '7777', '455656', 'karachi', 'student'),
(19, 'momin', 'saeed', '2022-09-02', 'male', 'islam', 'ms1234@gmail.com', '11111', '65645454545', 'karachi', 'teacher'),
(20, 'mushtaq', 'Ahmad', '2022-08-29', 'male', 'islam', 'mushtaq@gmail.com', '123', '576765865856', 'karachi', 'student'),
(21, 'admin', 'admin', '9-8-2002', 'male', 'islam', 'admin@gmail.com', '12345', '123456789', 'nothing', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_room_subject`
--
ALTER TABLE `class_room_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra-class`
--
ALTER TABLE `extra-class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cnic` (`cnic`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_exams`
--
ALTER TABLE `student_exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_exam_marks`
--
ALTER TABLE `student_exam_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `class_room_subject`
--
ALTER TABLE `class_room_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `extra-class`
--
ALTER TABLE `extra-class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_exams`
--
ALTER TABLE `student_exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_exam_marks`
--
ALTER TABLE `student_exam_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
