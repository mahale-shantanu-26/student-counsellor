-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 09:44 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_advisor`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pswd` varchar(50) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `email`, `pswd`, `dob`, `gender`) VALUES
(1, 'a', 'a', 'a', '0001-01-01', 'm'),
(3, 'asd', 'maa@gmail.com', 'as', '2019-01-04', 'm'),
(4, 'asd', 'maw@gmail.com', 'asd', '2019-01-04', 'm'),
(5, 'asd', 'maq@gmail.com', 'asd', '2019-01-04', 'm'),
(6, 'asd', 'maaz@gmail.com', 'az', '2019-01-04', 'm'),
(7, 'asd', 'maazas@gmail.com', 'ad', '1997-04-13', 'f'),
(8, 'asd', 'mi@gmail.com', 'assd', '2011-04-06', 'o'),
(9, 'sdghen', 'mahale@gmail.com', 'asdfgh', '2121-12-12', 'm'),
(10, 'sdvkns', 'sdvs@gmail.com', '123', '2019-01-02', 'm'),
(13, 'asd', 'asd@as.a', 'asd', '2019-02-07', 'm'),
(14, 'asd', 'a@a.a', 'a', '2019-02-07', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
