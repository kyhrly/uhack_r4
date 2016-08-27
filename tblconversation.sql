-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2016 at 10:43 PM
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
(18, 'client', '3', '5', 'hehehe', '2016-08-28 04:32:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblconversation`
--
ALTER TABLE `tblconversation`
  ADD PRIMARY KEY (`convoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblconversation`
--
ALTER TABLE `tblconversation`
  MODIFY `convoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
