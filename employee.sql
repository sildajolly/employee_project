-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 12:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `code` varchar(6) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `department` varchar(60) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`code`, `name`, `department`, `dob`, `join_date`, `id`) VALUES
('EMP102', 'Arya Prakash', 'Accounting', '1998-05-02', '2010-08-08', 1),
('EMP103', 'Akash P', 'Accounting', '1998-05-02', '2010-08-08', 2),
('EMP104', 'Anu Michael', 'Purchasing', '1993-03-02', '2020-09-09', 3),
('EMP105', 'Anju Tom', 'Personnel', '1991-03-02', '2006-02-09', 4),
('EMP106', 'Anoop R', 'Navigation', '1994-03-02', '2020-09-09', 5),
('EMP107', 'Kaimal T', 'Marketing', '1991-03-02', '2010-08-08', 6),
('EMP108', 'Milan James', 'Marketing', '1992-03-02', '2017-05-04', 7),
('EMP109', 'Minu Mathew', 'Sales', '1998-05-02', '2020-09-09', 8),
('EMP110', 'Sana PK', 'Purchasing', '1994-03-02', '2017-05-04', 9),
('EMP111', 'Sonu M', 'Accounting', '1998-05-02', '2010-08-08', 10),
('EMP112', 'Miya Tom', 'Personnel', '1991-03-02', '2020-09-09', 11),
('EMP113', 'Aliya Issac', 'Accounting', '1998-03-02', '2006-02-09', 12),
('EMP114', 'Irene Tom', 'Purchasing', '1994-03-02', '2010-08-08', 13),
('EMP115', 'Antony Varghese', 'Personnel', '1995-02-01', '2020-09-09', 14),
('EMP116', 'Aiswarya P', 'Management', '1998-05-02', '2006-02-09', 15),
('EMP117', 'Jobin James', 'Sales', '1999-03-02', '2010-08-08', 16),
('EMP118', 'Jithin Jose', 'Sales', '1994-03-02', '2020-09-09', 17),
('EMP119', 'Abhijith', 'Marketing', '1995-02-01', '2006-02-09', 18),
('EMP120', 'Mevin Jacob', 'Navigation', '1990-03-02', '2010-08-08', 19),
('EMP401', 'Lakshmi', 'Accounting', '1990-07-02', '2021-05-31', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
