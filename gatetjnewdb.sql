-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 01:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gatetjnewdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sno` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `logintype` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `username`, `password`, `logintype`) VALUES
(3, 'security', 'security', 'security'),
(8, 'advisor@1', '5678', 'advisor'),
(9, '950320104027', '950320104027', 'student'),
(10, '950320104028', '950320104028', 'student'),
(11, '950320104025', '950320104025', 'student'),
(12, '950320104007', '950320104007', 'student'),
(13, 'hod1@1', '5678', 'hod'),
(15, 'Monkey King', '12312', 'student'),
(16, '128731', '5678', 'student'),
(17, '12312', '2343', 'student'),
(22, '950320104303', '5678', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `permission_details`
--

CREATE TABLE `permission_details` (
  `sno` int(11) NOT NULL,
  `rollnumber` varchar(225) NOT NULL,
  `permissiontype` varchar(225) NOT NULL,
  `leavingdatetime` varchar(225) NOT NULL,
  `place` varchar(225) NOT NULL,
  `reason` varchar(225) NOT NULL,
  `contactnumber` varchar(220) NOT NULL,
  `status` varchar(225) NOT NULL,
  `outtime` varchar(225) NOT NULL,
  `datm` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permission_details`
--

INSERT INTO `permission_details` (`sno`, `rollnumber`, `permissiontype`, `leavingdatetime`, `place`, `reason`, `contactnumber`, `status`, `outtime`, `datm`) VALUES
(11, '950320104028', 'homepermission', '2024-02-20T22:36', 'Tuty', 'Fever', '9122832323', 'ACCEPTED', '', '2024-02-20 17:09:40'),
(16, '950320104025', 'homepermission', '2024-03-14T12:35', 'asda', 'adas', '1234123', 'ACCEPTED', '', '2024-03-25 07:10:07'),
(18, '950320104303', 'Home Permission', '2024-03-25T18:08', 'Tenkasi', 'Visiting Tea Shop with Boys', '76987978978', '1', '', '2024-03-25 12:38:40');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `sno` int(11) NOT NULL,
  `studentname` varchar(225) NOT NULL,
  `rollnumber` varchar(225) NOT NULL,
  `dateofbirth` varchar(225) NOT NULL,
  `stream` varchar(225) NOT NULL,
  `branch` varchar(225) NOT NULL,
  `father/guardianname` varchar(225) NOT NULL,
  `father/guardiannumber` int(11) NOT NULL,
  `address` varchar(225) NOT NULL,
  `datm` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `classadvisor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`sno`, `studentname`, `rollnumber`, `dateofbirth`, `stream`, `branch`, `father/guardianname`, `father/guardiannumber`, `address`, `datm`, `classadvisor`) VALUES
(1, 'SriRam', '91111', '2001-05-16', 'b-e', 'ece', 'G V Naga raju', 2147483647, 'Arumuganeri', '2024-02-20 17:03:54', ''),
(4, 'Thomas Abraham', '950320104028', '2002-05-26', 'b-e', 'cse', 'ThomasDAD', 2147483647, 'mullakadu,thoothukudi.', '2024-02-20 17:02:24', ''),
(5, 'Sudhan', '950320104025', '2003-03-15', 'b-e', 'cse', 'Sudhandad', 2147483647, '2/3 east street, tuty', '2024-03-23 02:08:42', ''),
(6, 'Gowtham', '950320104007', '2002-03-16', 'B.E', 'cse', 'Gowthamdad', 2147483647, 'muthaiyaburam,tuty', '2024-03-23 02:52:45', ''),
(10, 'Monkey King', '212312', '2024-03-19', 'B.Tech', 'CSE', 'Thanthai', 12312, 'asdasd', '2024-03-25 10:48:48', 'advisor@1'),
(11, 'monkey', '128731', '2024-03-20', 'B.Tech', 'CSE', 'JinderMahal', 1231, 'asdas', '2024-03-25 10:51:08', 'advisor@1'),
(12, 'asdas', '12312', '2024-03-20', 'B.Tech', 'CSE', 'asdas', 12312, 'asdas', '2024-03-25 10:51:42', 'advisor@1'),
(22, 'Muthu Raman', '950320104303', '1995-07-19', 'B.Tech', 'CSE', 'MuthuVel', 2147483647, 'Tenkasi, Tenkasi', '2024-03-25 12:31:10', 'advisor@1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `permission_details`
--
ALTER TABLE `permission_details`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `rollnumber` (`rollnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `permission_details`
--
ALTER TABLE `permission_details`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
