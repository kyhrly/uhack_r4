-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2016 at 09:00 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbllawyer`
--

CREATE TABLE `tbllawyer` (
  `lawyerID` int(11) NOT NULL,
  `lawyerUsername` varchar(100) NOT NULL,
  `lawyerPassword` varchar(10) NOT NULL,
  `lawyerLastName` varchar(100) NOT NULL,
  `lawyerFirstName` varchar(100) NOT NULL,
  `lawyerMiddleName` varchar(100) NOT NULL,
  `firmAssociatedTo` varchar(1000) NOT NULL,
  `firmAddress` varchar(1000) NOT NULL,
  `specialization` varchar(1000) NOT NULL,
  `locationLawyers` varchar(10000) NOT NULL,
  `casesWon` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllawyer`
--

INSERT INTO `tbllawyer` (`lawyerID`, `lawyerUsername`, `lawyerPassword`, `lawyerLastName`, `lawyerFirstName`, `lawyerMiddleName`, `firmAssociatedTo`, `firmAddress`, `specialization`, `locationLawyers`, `casesWon`, `status`) VALUES
(5, 'lawyer', 'sample', 'Santiago', 'Mirriam', 'Defensor', 'Senators'' Law Firm', 'Region 1, PH', 'Administrative', 'Region 1', '20', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbllawyer`
--
ALTER TABLE `tbllawyer`
  ADD PRIMARY KEY (`lawyerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbllawyer`
--
ALTER TABLE `tbllawyer`
  MODIFY `lawyerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
