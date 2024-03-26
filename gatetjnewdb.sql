-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 09:39 AM
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
(8, 'advisor@1', '5678', 'advisor'),
(15, 'Monkey King', '12312', 'student'),
(23, '950320104028', '5678', 'student'),
(24, '950320104025', '5678', 'student'),
(27, '950320104303', '5678', 'student'),
(30, '123', '5678', 'student'),
(31, 'advisor2@1', '5678', 'advisor'),
(32, 'advisor3@1', '5678', 'advisor'),
(33, 'advisor4@1', '5678', 'advisor'),
(34, 'advisor5@1', '5678', 'advisor'),
(35, 'advisor6@1', '5678', 'advisor'),
(36, '950320104007', '5678', 'student'),
(38, '950320104014', '5678', 'student'),
(39, '950320104015', '5678', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `permission_details`
--

CREATE TABLE `permission_details` (
  `permissiondetailsid` int(11) NOT NULL,
  `sno` int(11) NOT NULL,
  `rollnumber` varchar(225) NOT NULL,
  `permissiontype` varchar(225) NOT NULL,
  `leavingdatetime` varchar(225) NOT NULL,
  `place` varchar(225) NOT NULL,
  `reason` varchar(225) NOT NULL,
  `contactnumber` varchar(220) NOT NULL,
  `status` varchar(225) NOT NULL,
  `outtime` varchar(225) NOT NULL,
  `datm` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `acceptedby` varchar(200) NOT NULL,
  `rejectedby` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permission_details`
--

INSERT INTO `permission_details` (`permissiondetailsid`, `sno`, `rollnumber`, `permissiontype`, `leavingdatetime`, `place`, `reason`, `contactnumber`, `status`, `outtime`, `datm`, `acceptedby`, `rejectedby`) VALUES
(1, 23, '950320104028', 'Home Permission', '2024-03-20T18:31', 'Super market', 'Going shopping', '982392834', '0', '', '2024-03-25 18:29:59', '', 'advisor@1 - advisor'),
(2, 24, '950320104025', 'Home Permission', '2024-03-25T18:32', 'Temple', 'Have fun in Kovil Thiruvila', '21830985', '0', '', '2024-03-25 18:29:53', '', 'advisor@1 - advisor'),
(3, 27, '950320104303', 'Home Permission', '2024-03-25T19:09', 'Tenkasi', 'Tea shop with area boys', '90812342342', '2', '', '2024-03-25 18:29:30', 'advisor@1 - advisor', ''),
(6, 36, '950320104007', 'Home Permission', '2024-03-26T13:44', 'DSF Plaza', 'Shopping with family', '824987483', '0', '', '2024-03-26 08:34:03', '', 'advisor2@1 - advisor'),
(7, 38, '950320104014', 'Home Permission', '2024-03-26T13:56', 'Nagercoil', 'Granderfather\'s burial', '94434343', '2', '', '2024-03-26 08:34:06', 'advisor2@1 - advisor', ''),
(8, 39, '950320104015', 'Home Permission', '2024-03-26T13:59', 'Kerala', 'Going to relative\'s place', '98498349', '0', '', '2024-03-26 08:34:10', '', 'advisor2@1 - advisor'),
(9, 39, '950320104015', 'Home Permission', '2024-03-27T14:06', 'Home', 'Leaving after exam', '7898778987', '0', '', '2024-03-26 08:37:02', '', 'advisor2@1 - advisor');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `studentdetailsid` int(11) NOT NULL,
  `sno` int(10) NOT NULL,
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

INSERT INTO `student_details` (`studentdetailsid`, `sno`, `studentname`, `rollnumber`, `dateofbirth`, `stream`, `branch`, `father/guardianname`, `father/guardiannumber`, `address`, `datm`, `classadvisor`) VALUES
(1, 24, 'Sudhan', '950320104025', '2005-10-20', 'B.E', 'CSE', 'Swami Raman', 2147483647, 'Adaikalapuram, Adaikalapuram', '2024-03-25 14:32:24', 'advisor@1'),
(2, 23, 'Thesai Jebas', '950320104028', '2003-06-19', 'B.E', 'CSE', 'ThesaiFath', 2147483647, 'Adaikalapuram, Adaikalapuram', '2024-03-25 14:32:09', 'advisor@1'),
(3, 27, 'Muthu Raman', '950320104303', '2024-03-20', 'B.Tech', 'CSE', 'MuthuVel', 2147483647, 'Tenkasi, Tenkasi', '2024-03-25 14:32:24', 'advisor@1'),
(4, 30, 'KingKong', '123', '2024-03-19', 'B.Tech', 'CSE', 'asdas', 12312, 'asdas', '2024-03-25 14:30:43', 'advisor@1'),
(5, 36, 'Gowtham', '950320104007', '2002-10-08', 'B.E', 'CSE', 'Paul', 83948348, 'Sudhar Nagar, Thoothukudi', '2024-03-26 08:08:23', 'advisor2@1'),
(6, 38, 'John Newton', '950320104014', '2002-07-23', 'B.E', 'CSE', 'Jaaniman', 83948348, 'Nazareth, Nazareth', '2024-03-26 08:10:28', 'advisor2@1'),
(7, 39, 'Subramani', '950320104015', '2002-02-19', 'B.E', 'CSE', 'Maarimari', 879537567, 'Camp Zone, Zonal Drickslaw', '2024-03-26 08:12:14', 'advisor2@1');

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
  ADD PRIMARY KEY (`permissiondetailsid`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`studentdetailsid`),
  ADD UNIQUE KEY `rollnumber` (`rollnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `permission_details`
--
ALTER TABLE `permission_details`
  MODIFY `permissiondetailsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `studentdetailsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
