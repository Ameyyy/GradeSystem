-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2016 at 09:04 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grade_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `NAME` varchar(45) NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  `PASSWORD` varchar(45) NOT NULL,
  `DEPARTMENT` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`NAME`, `EMAIL`, `PASSWORD`, `DEPARTMENT`) VALUES
('Akash Khiani', 'akash.khiani@ves.ac.in', 'akash', 'ETRX'),
('Amey Parab', 'amey.parab@ves.ac.in', '12345', 'INFT'),
('Arpan Gularajani', 'arpan.gulrajani@ves.ac.in', 'arpan', 'CMPN'),
('Jeetiksha Chandiramani', 'jeetiksha.chandiramani@ves.ac.in', 'jeejc', 'FE'),
('Nihar Karle', 'nihar.karle@ves.ac.in', 'nihar', 'INST'),
('Ram Motwani', 'ram.motwani@ves.ac.in', 'rammot', 'EXTC');

-- --------------------------------------------------------

--
-- Table structure for table `web_programming`
--

CREATE TABLE `web_programming` (
  `ROLL_NO` int(11) NOT NULL,
  `NAME` varchar(45) NOT NULL,
  `CLASS` varchar(45) NOT NULL,
  `E1` int(11) NOT NULL,
  `E2` int(11) NOT NULL,
  `E3` int(11) NOT NULL,
  `E4` int(11) NOT NULL,
  `E5` int(11) NOT NULL,
  `E6` int(11) NOT NULL,
  `E7` int(11) NOT NULL,
  `E8` int(11) NOT NULL,
  `EXP_AVG` int(11) NOT NULL,
  `MP` int(11) NOT NULL,
  `VIVA` int(11) NOT NULL,
  `ATTENDANCE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `GRADE` varchar(5) NOT NULL,
  `UT1` int(11) NOT NULL,
  `UT2` int(11) NOT NULL,
  `UT_AVG` int(11) NOT NULL,
  `UT_GRADE` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_programming`
--

INSERT INTO `web_programming` (`ROLL_NO`, `NAME`, `CLASS`, `E1`, `E2`, `E3`, `E4`, `E5`, `E6`, `E7`, `E8`, `EXP_AVG`, `MP`, `VIVA`, `ATTENDANCE`, `TOTAL`, `GRADE`, `UT1`, `UT2`, `UT_AVG`, `UT_GRADE`) VALUES
(1, 'Agarwal Chayan Dilip Jyoti', 'D10', 7, 7, 6, 7, 8, 7, 8, 7, 7, 4, 3, 4, 18, 'A', 14, 12, 13, 'B'),
(2, 'Ahuja Jitesh Hareshlal Rachna', 'D10', 9, 9, 8, 9, 8, 8, 9, 9, 9, 4, 5, 5, 23, 'O', 18, 14, 16, 'O'),
(3, 'Ahuja Pratik Deepak Vinitha', 'D10', 7, 6, 7, 6, 6, 7, 7, 7, 7, 4, 2, 2, 15, 'C', 8, 5, 7, 'F'),
(22, 'Hindalekar Siddhesh Deepak Vanita', 'D10', 9, 9, 8, 9, 8, 9, 9, 8, 9, 5, 5, 4, 23, 'O', 19, 17, 18, 'O'),
(25, 'Jagiasi Rohan Mahesh Ritu', 'D10', 10, 9, 10, 10, 10, 9, 9, 10, 10, 5, 5, 5, 25, 'O', 19, 17, 18, 'O'),
(33, 'Karle Nihar Girish Dipali', 'D10', 7, 8, 7, 7, 7, 7, 8, 8, 7, 4, 3, 4, 18, 'A', 14, 17, 16, 'A'),
(42, 'Lilani Akshaykumar Jagdish Vinita', 'D10', 9, 9, 9, 9, 8, 10, 9, 10, 9, 5, 5, 4, 23, 'O', 18, 16, 17, 'O'),
(44, 'Mirjankar Siddhesh Nitin Anita', 'D10', 8, 9, 7, 8, 7, 8, 9, 8, 8, 5, 4, 3, 20, 'O', 16, 10, 13, 'B'),
(47, 'Murpana Karan Vijay Mala', 'D10', 7, 7, 7, 8, 7, 7, 7, 7, 7, 4, 3, 3, 17, 'B', 17, 16, 17, 'O'),
(48, 'Nagpal Jayesh Harish Reshma', 'D10', 8, 8, 9, 8, 9, 8, 8, 7, 8, 5, 3, 4, 20, 'O', 16, 13, 15, 'A'),
(70, 'Tripathi Saurabh Rameshkumar Dipti', 'D10', 8, 9, 8, 7, 8, 9, 8, 9, 8, 4, 4, 4, 20, 'O', 15, 14, 15, 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD PRIMARY KEY (`EMAIL`);

--
-- Indexes for table `web_programming`
--
ALTER TABLE `web_programming`
  ADD PRIMARY KEY (`ROLL_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `web_programming`
--
ALTER TABLE `web_programming`
  MODIFY `ROLL_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
