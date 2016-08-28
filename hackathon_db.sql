-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2016 at 06:30 AM
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
(1, '11', '5', 'I could help you for a price of 2,00php', '2016-08-27 23:01:24'),
(2, '11', '5', 'If you want, you could just pm me', '2016-08-27 23:01:35'),
(3, '11', '5', 'Hey PM me', '2016-08-28 02:20:44'),
(4, '11', '5', '1000', '2016-08-28 03:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `tblconversation`
--

CREATE TABLE `tblconversation` (
  `convoID` int(11) NOT NULL,
  `sender` text NOT NULL,
  `userID` text NOT NULL,
  `lawyerID` text NOT NULL,
  `message` text NOT NULL,
  `timestamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblconversation`
--

INSERT INTO `tblconversation` (`convoID`, `sender`, `userID`, `lawyerID`, `message`, `timestamp`) VALUES
(12, 'client', '3', '5', 'oy', '2016-08-28 04:29:59'),
(13, 'client', '3', '5', 'test', '2016-08-28 04:31:33'),
(14, 'client', '3', '5', 'test', '2016-08-28 04:31:47'),
(15, 'client', '3', '5', 'test', '2016-08-28 04:31:55'),
(16, 'client', '3', '5', 'heheheh', '2016-08-28 04:32:00'),
(17, 'client', '3', '5', 'hi', '2016-08-28 04:32:07'),
(18, 'client', '3', '5', 'hehehe', '2016-08-28 04:32:10'),
(23, 'lawyer', '3', '5', '2', '2016-08-28 05:11:00'),
(24, 'client', '3', '5', 'test', '2016-08-28 05:12:28'),
(25, 'lawyer', '3', '5', 'ow', '2016-08-28 05:12:31'),
(26, 'client', '3', '5', 'baket?', '2016-08-28 05:12:37'),
(27, 'client', '3', '5', '', '2016-08-28 05:12:37'),
(28, 'lawyer', '3', '5', 'test', '2016-08-28 05:12:40'),
(29, 'client', '3', '5', 'test', '2016-08-28 07:17:24'),
(30, 'client', '3', '5', 'test', '2016-08-28 07:21:12'),
(31, 'lawyer', '3', '5', 'test', '2016-08-28 07:49:49'),
(32, 'lawyer', '3', '5', 'I can help you', '2016-08-28 07:52:57'),
(33, 'lawyer', '3', '5', 'but i need 1k', '2016-08-28 07:53:08'),
(34, 'lawyer', '3', '5', 'hey', '2016-08-28 08:09:11'),
(35, 'lawyer', '3', '5', 'answer please', '2016-08-28 08:09:15'),
(36, 'client', '3', '5', 'Hey help me here please', '2016-08-28 10:19:59');

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
(5, 'lawyer', 'sample', 'Santiago', 'Mirriam', 'Defensor', 'Senators'' Law Firm', 'Region 1, PH', 'Administrative', 'Region 1', '25', '1'),
(6, 'Tagapagtanggol01', '12345', 'Tagapagtanggol', 'Yow', 'B', 'Strong and Firm Company', '123 Makati City', 'Federal Law', 'NCR', '5', '1');

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
(11, '3', 'I killed someone but it is only to defend my self, I want someone who specializes in crime to help me here.', '2016-08-28 00:46:23', 'Administrative'),
(12, '3', 'Test case 1', '2016-08-28 00:46:28', 'Administrative'),
(13, '3', 'Test case 2', '2016-08-28 00:46:33', 'Administrative'),
(14, '5', 'My wife was accused of Drug Trafficking, She was framed up and is innocent, yet she is facing death penalty, I need help', '2016-08-28 11:11:04', 'Federal Law');

-- --------------------------------------------------------

--
-- Table structure for table `tblpublish`
--

CREATE TABLE `tblpublish` (
  `publishID` int(11) NOT NULL,
  `userID` text NOT NULL,
  `publishTitle` text NOT NULL,
  `publishDescription` text NOT NULL,
  `timestamp` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpublish`
--

INSERT INTO `tblpublish` (`publishID`, `userID`, `publishTitle`, `publishDescription`, `timestamp`, `status`) VALUES
(1, '3', 'Help me please', 'I do not have enough money for legal aid assistance, please help me to afford my very need expenses. Someone framed me up on murder they do know that I cannot afford to hire lawyers that''s why they framed me up. I need help here, PLEASE PLEASE PLEASE', '2016-08-28 05:22:02', '1');

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
(3, 'client', 'sample', 'Gaisler', 'Baron', 'Secret', '4', '5', '1'),
(4, 'JuanDelaCruz', '12345', 'Dela Cruz', 'Juan', '', 'JC', 'Makati City', '1'),
(5, 'JuanDelaCruz', '12345', 'Dela Cruz', 'Juan', '', 'JC', 'Makati City', '1');

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
-- Indexes for table `tblconversation`
--
ALTER TABLE `tblconversation`
  ADD PRIMARY KEY (`convoID`);

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
-- Indexes for table `tblpublish`
--
ALTER TABLE `tblpublish`
  ADD PRIMARY KEY (`publishID`);

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
-- AUTO_INCREMENT for table `tblconversation`
--
ALTER TABLE `tblconversation`
  MODIFY `convoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbllawyer`
--
ALTER TABLE `tbllawyer`
  MODIFY `lawyerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblpost`
--
ALTER TABLE `tblpost`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tblpublish`
--
ALTER TABLE `tblpublish`
  MODIFY `publishID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
