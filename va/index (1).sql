-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 08:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `index`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `username` varchar(88) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date`) VALUES
(1, 'AbhinaySaxena', 'abhinay', '2023-05-11 08:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `Id` int(12) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(88) NOT NULL,
  `number` bigint(88) NOT NULL,
  `city` text NOT NULL,
  `resume` mediumblob NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(4) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `name`, `email`, `username`, `password`, `date`) VALUES
(1, 'aa', 'saxenaabhinay5@gmail.com', 'ak', 'aaa', '2023-05-06 16:40:06'),
(3, 'Abhinay Saxena', 'saxenaabhinay5@gmail.com', 'aaa', 'aaaaaaa', '2023-05-11 11:48:51'),
(5, 'as', 'asas', 'as', 'aaaaaa', '2023-05-13 02:48:44'),
(6, 'Abhinay Saxena', 'saxenaabhinay5@gmail.com', 'aaaaa', 'aaaaaaaa', '2023-05-14 05:08:14'),
(7, 'Abhinay Saxena', 'saxenaabhinay5@gmail.com', 'aaw', 'aaaaaaa', '2023-05-14 05:09:36'),
(11, 'Abhinay Saxena', 'saxenaabhinay5@gmail.com', 'qweqw', 'aaaaaa', '2023-05-16 09:12:15'),
(12, 'Abhinay Saxena', 'saxenaabhinay5@gmail.com', 'fhg', 'qqqqqqqqq', '2023-05-16 09:13:11'),
(15, 'Abhinay Saxena', 'saxenaabhinay5@gmail.com', 'qa', 'aaaaaaa', '2023-05-16 09:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `video9`
--

CREATE TABLE `video9` (
  `ID` int(4) NOT NULL,
  `name` longblob NOT NULL,
  `title` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video10`
--

CREATE TABLE `video10` (
  `ID` int(12) NOT NULL,
  `name` longblob NOT NULL,
  `title` varchar(88) NOT NULL,
  `subject` varchar(88) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video11`
--

CREATE TABLE `video11` (
  `ID` int(12) NOT NULL,
  `name` longblob NOT NULL,
  `title` varchar(88) NOT NULL,
  `subject` varchar(88) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video12`
--

CREATE TABLE `video12` (
  `ID` int(12) NOT NULL,
  `name` longblob NOT NULL,
  `title` varchar(88) NOT NULL,
  `subject` varchar(88) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vivek`
--

CREATE TABLE `vivek` (
  `ID` int(4) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(44) NOT NULL,
  `username` varchar(88) NOT NULL,
  `password` varchar(33) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vivek`
--

INSERT INTO `vivek` (`ID`, `name`, `email`, `username`, `password`, `date`) VALUES
(14, 'Abhinay Saxena', 'saxenaabhinay5@gmail.com', 'aa', 'aaaaaaa', '2023-05-14 05:11:58'),
(18, 'Abhinay Saxena', 'saxenaabhinay5@gmail.com', 'aaa', 'aaaaaaaaaa', '2023-05-16 10:02:37'),
(19, 'Abhinay Saxena', 'saxenaabhinay5@gmail.com', 'aaa1', 'aaaaaaa', '2023-05-16 10:04:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `video9`
--
ALTER TABLE `video9`
  ADD UNIQUE KEY `Sno.` (`ID`);

--
-- Indexes for table `video10`
--
ALTER TABLE `video10`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `video11`
--
ALTER TABLE `video11`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `video12`
--
ALTER TABLE `video12`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vivek`
--
ALTER TABLE `vivek`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `video9`
--
ALTER TABLE `video9`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `video10`
--
ALTER TABLE `video10`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video11`
--
ALTER TABLE `video11`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video12`
--
ALTER TABLE `video12`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vivek`
--
ALTER TABLE `vivek`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
