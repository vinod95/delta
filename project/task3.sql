-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2013 at 02:06 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `task3`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `userName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`userName`) VALUES
('vinod_95');

-- --------------------------------------------------------

--
-- Table structure for table `tablemovie`
--

CREATE TABLE IF NOT EXISTS `tablemovie` (
  `movie` int(11) NOT NULL,
  `showTime` text NOT NULL,
  `seat` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablemovie`
--

INSERT INTO `tablemovie` (`movie`, `showTime`, `seat`, `date`) VALUES
(1, '10.30 AM', 3, '2013-07-11'),
(1, '6.30 PM', 1, '2013-07-12'),
(1, '10.30 AM', 20, '2013-07-13'),
(3, '2.30 PM', 1, '2013-07-13'),
(1, '10.30 PM', 4, '2013-07-15'),
(2, '2.30 PM', 1, '2013-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
  `first` text NOT NULL,
  `last` text NOT NULL,
  `userName` text NOT NULL,
  `gender` text NOT NULL,
  `address` text NOT NULL,
  `mobile` int(11) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`first`, `last`, `userName`, `gender`, `address`, `mobile`, `Password`) VALUES
('Vinod', 'Kumar', 'vinod_95', 'Male', 'sri flats, 42nd avenue, chennai-20', 2147483647, '02adcec2263d2127269fcd769c33f029'),
('karthik', 'kumar', 'kk_51', 'Male', 'sriram flats,#58,4th main road,chennai', 2147483647, '1f8cc1ea49ca352b8d4c755b69a19957');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
