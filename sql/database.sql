-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 03:52 PM
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
-- Database: `thriveschool`
--
DROP DATABASE IF EXISTS `thriveschool`;
CREATE DATABASE IF NOT EXISTS `thriveschool` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `thriveschool`;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `courseId` bigint(11) NOT NULL AUTO_INCREMENT,
  `courseName` varchar(50) NOT NULL DEFAULT '',
  `unitName` varchar(50) NOT NULL DEFAULT '',
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`courseId`)
) ENGINE=InnoDB AUTO_INCREMENT=4332 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseId`, `courseName`, `unitName`, `datecreated`, `dateupdated`) VALUES
(1101, 'Software Engineering', 'Computer Programming', '2024-06-17 16:10:55', '2024-06-17 16:10:55'),
(2302, 'Mobile App Development', 'Introduction to Mobile App Development', '2024-06-17 16:10:55', '2024-06-17 16:10:55'),
(3301, 'CyberSecurity', 'Network Security', '2024-06-17 16:10:55', '2024-06-17 16:10:55'),
(4331, 'DataScience', 'Data Collection and Management', '2024-06-17 16:14:06', '2024-06-17 16:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

DROP TABLE IF EXISTS `gender`;
CREATE TABLE IF NOT EXISTS `gender` (
  `genderId` int(1) NOT NULL AUTO_INCREMENT,
  `gender` varchar(20) NOT NULL DEFAULT '',
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`genderId`),
  UNIQUE KEY `gender` (`gender`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`genderId`, `gender`, `datecreated`, `dateupdated`) VALUES
(101, 'Male', '2024-06-17 15:22:48', '2024-06-17 16:43:24'),
(102, 'Female', '2024-06-17 15:22:48', '2024-06-17 16:43:33'),
(103, 'Rather not say', '2024-06-17 15:22:48', '2024-06-17 16:43:48');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

DROP TABLE IF EXISTS `instructors`;
CREATE TABLE IF NOT EXISTS `instructors` (
  `instructorId` int(1) NOT NULL AUTO_INCREMENT,
  `instructorName` varchar(50) NOT NULL DEFAULT '',
  `emailAddress` varchar(50) NOT NULL DEFAULT '',
  `unitName` varchar(50) NOT NULL DEFAULT '',
  `officeLoc` varchar(30) NOT NULL DEFAULT '',
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`instructorId`),
  UNIQUE KEY `emailAddress` (`emailAddress`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`instructorId`, `instructorName`, `emailAddress`, `unitName`, `officeLoc`, `datecreated`, `dateupdated`) VALUES
(1, 'Franklin Mutisya', 'franklinM0365@thriveschool.com', 'Computer Programming', 'Shupavu', '2024-06-17 16:29:51', '2024-06-17 16:32:07'),
(2, 'Jane Wanjiru', 'janeW0365@thriveschool.com', 'Introduction to Mobile App Development', 'Maridadi', '2024-06-17 16:29:51', '2024-06-17 16:29:51'),
(3, 'Hazel Mima', 'hMima0365@thriveschool.com', 'Network Security', 'Waridi', '2024-06-17 16:29:51', '2024-06-17 16:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `studentId` int(1) NOT NULL AUTO_INCREMENT,
  `studentName` varchar(50) NOT NULL DEFAULT '',
  `courseName` varchar(50) NOT NULL DEFAULT '',
  `emailAddress` varchar(50) NOT NULL DEFAULT '',
  `instructorId` int(1) NOT NULL DEFAULT 0,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`studentId`),
  UNIQUE KEY `emailAddress` (`emailAddress`)
) ENGINE=InnoDB AUTO_INCREMENT=169389 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentId`, `studentName`, `courseName`, `emailAddress`, `instructorId`, `datecreated`, `dateupdated`) VALUES
(17214, 'Grace Achieng', 'Mobile App Development', 'grace.Achieng@thriveschool.com', 2, '2024-06-17 16:42:02', '2024-06-17 16:51:57'),
(167753, 'Virginia Karima', 'DataScience', 'virginaKarima@thriveschool.com', 4, '2024-06-17 16:42:02', '2024-06-17 16:42:02'),
(168051, 'Fredrick Omondi', 'CyberSecurity', 'fredrick.Omondi@thriveschool.com', 3, '2024-06-17 16:42:02', '2024-06-17 16:42:02'),
(169388, 'James Mwangi', 'Graphic Design', 'jamesMwangi@thriveschool.com', 5, '2024-06-17 16:42:02', '2024-06-17 16:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` bigint(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(50) NOT NULL DEFAULT '',
  `userName` varchar(50) NOT NULL DEFAULT '',
  `emailAddress` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `roleId` int(1) NOT NULL DEFAULT 0,
  `genderId` int(1) NOT NULL DEFAULT 0,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`userId`),
  UNIQUE KEY `emailAddress` (`emailAddress`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `fullName`, `userName`, `emailAddress`, `password`, `roleId`, `genderId`, `datecreated`, `dateupdated`) VALUES
(1, '', '', '', '', 0, 0, '2024-06-17 15:27:31', '2024-06-17 15:27:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

DROP TABLE IF EXISTS `responses`;
CREATE TABLE IF NOT EXISTS `responses` (
  `responseId` int(1) NOT NULL AUTO_INCREMENT,
  `sender_firstname` varchar(60) NOT NULL DEFAULT '',
  `sender_lastname` varchar(60) NOT NULL DEFAULT '',
  `sender_email` varchar(60) NOT NULL DEFAULT '',
  `sender_phonenumber` varchar(30) NOT NULL DEFAULT '',
  `sender_DOB` varchar(60) NOT NULL DEFAULT '',
  `sender_Gender` varchar(20) NOT NULL DEFAULT '',
  `sender_Course` text,
  `sender_Intake`text,
  `sender_Review`text,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`responseId`)
  
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




DROP TABLE IF EXISTS `Role`;
CREATE TABLE IF NOT EXISTS `Role` (
  `roleId` int(1) NOT NULL AUTO_INCREMENT,
  `role` varchar(20) NOT NULL DEFAULT '',
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateupdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`roleId`),
  UNIQUE KEY (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

