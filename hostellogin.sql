-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 07:36 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostellogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `roomdetails`
--

CREATE TABLE `roomdetails` (
  `REGISTRATION` int(6) NOT NULL,
  `ROOM` int(11) DEFAULT NULL,
  `SEATER` int(10) DEFAULT NULL,
  `STAYDATE` date DEFAULT NULL,
  `AMOUNT` varchar(80) DEFAULT NULL,
  `COURSE` varchar(20) DEFAULT NULL,
  `CADDRESS` varchar(100) DEFAULT NULL,
  `PADDRESS` varchar(100) DEFAULT NULL,
  `CCITY` varchar(50) DEFAULT NULL,
  `PCITY` varchar(50) DEFAULT NULL,
  `CSTATE` varchar(50) DEFAULT NULL,
  `PSTATE` varchar(50) DEFAULT NULL,
  `CCODE` int(6) DEFAULT NULL,
  `PCODE` int(6) DEFAULT NULL,
  `FOOD` varchar(5) DEFAULT NULL,
  `DURATION` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomdetails`
--

INSERT INTO `roomdetails` (`REGISTRATION`, `ROOM`, `SEATER`, `STAYDATE`, `AMOUNT`, `COURSE`, `CADDRESS`, `PADDRESS`, `CCITY`, `PCITY`, `CSTATE`, `PSTATE`, `CCODE`, `PCODE`, `FOOD`, `DURATION`) VALUES
(123454, 4, 1, '2021-07-08', '21000', 'CSE', 'gggggggg', 'hhhhhhh', 'chennai', 'bangalore', 'TN', 'maharastra', 600002, 600044, '1', 3),
(345678, 2, 1, '2021-07-31', '20000', 'IT', 'sssssss', 'kkkkkkk', 'chennai', 'coimbatore', 'TN', 'TN', 600002, 600033, '0', 4),
(445511, 3, 2, '2021-09-03', '50000', 'ECE', 'kkkkkk', 'nnnnnnn', 'ooty', 'ooty', 'kerala', 'tamil nadu', 500002, 600005, '0', 5),
(567890, 1, 2, '2021-07-28', '40000', 'EEE', 'Address', 'Address', 'chennai', 'chennai', 'TN', 'TN', 600002, 600001, '0', 4),
(876544, 3, 2, '2021-08-26', '40000', 'CSE', 'sss', 'fff', 'chennai', 'cchennai', 'Tn', 'Tn', 600044, 600044, '0', 4),
(987641, 5, 1, '2021-07-19', '28000', 'EEE', 'xxxxxxxx', 'zzzzzzzzzz', 'chennai', 'ooty', 'TN', 'TN', 600000, 600001, '1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `REGISTRATION` int(6) NOT NULL,
  `FIRSTNAME` varchar(50) DEFAULT NULL,
  `LASTNAME` varchar(40) DEFAULT NULL,
  `GENDER` varchar(10) DEFAULT NULL,
  `CONTACT` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `REGISTRATION`, `FIRSTNAME`, `LASTNAME`, `GENDER`, `CONTACT`, `EMAIL`, `PASSWORD`) VALUES
(1, 123454, 'prasath', 'G', 'male', '9977665533', 'prasathkarthiban1999@gamil.com', '88888'),
(21, 987641, 'Santhosh', 'L', 'male', '9988776644', 'santhosh@gmail.com', '11111'),
(23, 567890, 'nivetha', 'k', 'female', '9988334422', 'nivethakarthiban@gmail.com', '22222'),
(24, 445511, 'Seenu', 'S', 'male', '1122334455', 'seenu@mail.com', '44444'),
(25, 909090, 'sam', 'c', 'male', '8877665544', 'sam@gmail.com', '66666'),
(26, 876544, 'Kishore', 'k', 'male', '9988773222', 'abc@gmail.com', '11111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roomdetails`
--
ALTER TABLE `roomdetails`
  ADD PRIMARY KEY (`REGISTRATION`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
