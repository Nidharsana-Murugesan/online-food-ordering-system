-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2016 at 08:00 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fastfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `burger`
--
create database fastfood;
use fastfood;
CREATE TABLE IF NOT EXISTS `burger` (
  `fid` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `fimage` longtext,
  `price` int(10) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `burger`
--

INSERT INTO `burger` (`fid`, `fname`, `fimage`, `price`) VALUES
(1, 'cheese burger', 'upload_image/IMG_0019-Optimized-300x200.jpg', 50);

-- --------------------------------------------------------

--
-- Table structure for table `chinese`
--

CREATE TABLE IF NOT EXISTS `chinese` (
  `fid` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `fimage` longtext,
  `price` int(10) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `chinese`
--

INSERT INTO `chinese` (`fid`, `fname`, `fimage`, `price`) VALUES
(1, 'chinese', 'upload_image/img5.jpg', 60);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedbackid` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `mobileno` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `ymsg` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`feedbackid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `name`, `mobileno`, `email`, `date`, `ymsg`) VALUES
(0, 'pankaj', '8602768216', 'pankaj@gmail.com', '12-12-2013', 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `indian`
--

CREATE TABLE IF NOT EXISTS `indian` (
  `fid` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `fimage` longtext,
  `price` int(10) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `indian`
--

INSERT INTO `indian` (`fid`, `fname`, `fimage`, `price`) VALUES
(1, 'dosa', 'upload_image/IMG_0010-Optimized-300x200.jpg', 60);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `messageid` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `receivername` varchar(30) DEFAULT NULL,
  `messagetext` text,
  `messagedate` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`messageid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `newbooking`
--

CREATE TABLE IF NOT EXISTS `newbooking` (
  `bookingid` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `foodname` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `bookingdate` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nonvegfastfood`
--

CREATE TABLE IF NOT EXISTS `nonvegfastfood` (
  `fid` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `fimage` longtext,
  `price` int(10) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nonvegfastfood`
--

INSERT INTO `nonvegfastfood` (`fid`, `fname`, `fimage`, `price`) VALUES
(1, 'noodles', 'upload_image/img4.jpg', 70);

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE IF NOT EXISTS `pizza` (
  `fid` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `fimage` longtext,
  `price` int(10) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`fid`, `fname`, `fimage`, `price`) VALUES
(1, 'pizza', 'upload_image/IMG_9959-Optimized-300x200.jpg', 400);

-- --------------------------------------------------------

--
-- Table structure for table `sandwich`
--

CREATE TABLE IF NOT EXISTS `sandwich` (
  `fid` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `fimage` longtext,
  `price` int(10) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sandwich`
--

INSERT INTO `sandwich` (`fid`, `fname`, `fimage`, `price`) VALUES
(1, 'sandwich', 'upload_image/IMG_0145-Optimized-300x200.jpg', 60);

-- --------------------------------------------------------

--
-- Table structure for table `siteuser`
--

CREATE TABLE IF NOT EXISTS `siteuser` (
  `username` varchar(30) NOT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `hintq` varchar(255) DEFAULT NULL,
  `hinta` varchar(255) DEFAULT NULL,
  `emailadd` varchar(50) DEFAULT NULL,
  `smsno` varchar(15) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siteuser`
--

INSERT INTO `siteuser` (`username`, `pwd`, `dob`, `gender`, `hintq`, `hinta`, `emailadd`, `smsno`, `role`) VALUES
('ajay', 'ajay', '1989-12-04', 'male', 'Be', 'php', 'ajay@gmail.com', '3', 'admin'),
('pankaj', 'pankaj', '1990-12-05', 'male', 'Be', 'php', 'pankaj@gmail.com', '4', 'admin'),
('shubham', 'shubham', '1990-12-05', 'male', 'Be', 'php', 'shubham@gmail.com', '4', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `soup`
--

CREATE TABLE IF NOT EXISTS `soup` (
  `fid` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `fimage` longtext,
  `price` int(10) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `soup`
--

INSERT INTO `soup` (`fid`, `fname`, `fimage`, `price`) VALUES
(1, 'soup', 'upload_image/IMG_0024-Optimized-300x200.jpg', 30);

-- --------------------------------------------------------

--
-- Table structure for table `thai`
--

CREATE TABLE IF NOT EXISTS `thai` (
  `fid` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `fimage` longtext,
  `price` int(10) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `thai`
--

INSERT INTO `thai` (`fid`, `fname`, `fimage`, `price`) VALUES
(1, 'pizza', 'upload_image/img11.jpg', 200);

-- --------------------------------------------------------

--
-- Table structure for table `vegfastfood`
--

CREATE TABLE IF NOT EXISTS `vegfastfood` (
  `fid` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `fimage` longtext,
  `price` int(10) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vegfastfood`
--

INSERT INTO `vegfastfood` (`fid`, `fname`, `fimage`, `price`) VALUES
(3, 'burger', 'upload_image/IMG_0019-Optimized-300x200.jpg', 35),
(4, 'pizza', 'upload_image/IMG_9959-Optimized-300x200.jpg', 400);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
