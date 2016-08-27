-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2016 at 09:01 PM
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
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `adminID` int(11) NOT NULL,
  `adminUsername` text NOT NULL,
  `adminPassword` text NOT NULL,
  `adminfname` text NOT NULL,
  `adminmname` text NOT NULL,
  `adminlname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`adminID`, `adminUsername`, `adminPassword`, `adminfname`, `adminmname`, `adminlname`) VALUES
(1, 'admin', 'sample', 'Kyle', 'Harley', 'Nilo');

-- --------------------------------------------------------

--
-- Table structure for table `tblbidding`
--

CREATE TABLE `tblbidding` (
  `bidID` int(11) NOT NULL,
  `postID` text NOT NULL,
  `lawyerID` text NOT NULL,
  `bidMessage` text NOT NULL,
  `bidTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbidding`
--

INSERT INTO `tblbidding` (`bidID`, `postID`, `lawyerID`, `bidMessage`, `bidTime`) VALUES
(1, '11', '5', 'test', '2016-08-27 17:52:00'),
(2, '11', '5', 'bid ko lang ah', '2016-08-27 17:53:41'),
(3, '11', '5', 'test', '2016-08-27 17:53:44'),
(4, '11', '5', 'BID KO PA', '2016-08-27 18:09:55');

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

-- --------------------------------------------------------

--
-- Table structure for table `tblpost`
--

CREATE TABLE `tblpost` (
  `postID` int(11) NOT NULL,
  `userID` text NOT NULL,
  `postDescription` text NOT NULL,
  `postTimeStamp` text NOT NULL,
  `postSpecialization` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpost`
--

INSERT INTO `tblpost` (`postID`, `userID`, `postDescription`, `postTimeStamp`, `postSpecialization`) VALUES
(11, '3', 'test lang to', '2016-08-28 00:46:23', 'Administrative'),
(12, '3', 'test lang ulet', '2016-08-28 00:46:28', 'Administrative'),
(13, '3', 'test last test', '2016-08-28 00:46:33', 'Administrative');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `userID` int(11) NOT NULL,
  `userUsername` varchar(1000) NOT NULL,
  `userPassword` varchar(1000) NOT NULL,
  `lastName` varchar(1000) NOT NULL,
  `firstName` varchar(1000) NOT NULL,
  `middleName` varchar(1000) NOT NULL,
  `nickName` varchar(1000) NOT NULL,
  `locationUsers` varchar(10000) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`userID`, `userUsername`, `userPassword`, `lastName`, `firstName`, `middleName`, `nickName`, `locationUsers`, `status`) VALUES
(3, 'client', 'sample', 'Gaisler', 'Baron', 'Secret', '4', '5', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `tblbidding`
--
ALTER TABLE `tblbidding`
  ADD PRIMARY KEY (`bidID`);

--
-- Indexes for table `tbllawyer`
--
ALTER TABLE `tbllawyer`
  ADD PRIMARY KEY (`lawyerID`);

--
-- Indexes for table `tblpost`
--
ALTER TABLE `tblpost`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblbidding`
--
ALTER TABLE `tblbidding`
  MODIFY `bidID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbllawyer`
--
ALTER TABLE `tbllawyer`
  MODIFY `lawyerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblpost`
--
ALTER TABLE `tblpost`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
