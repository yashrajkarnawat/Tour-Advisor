-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 04:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Hotel name` varchar(20) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `telephone` varchar(11) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `City` varchar(10) NOT NULL,
  `Rating` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Hotel name`, `mobile`, `telephone`, `Address`, `City`, `Rating`) VALUES
('chaska', '2147483647', '2147483647', 'sitapura industrial area', 'jaipur', '5'),
('chaska', '7418529630', '7894561230', 'sitapura industrial area', 'jaipur', '5'),
('', '', '', '', '', ''),
('the taj', '789526341', '0123456789', 'sitapura industrial area', 'kota', '3'),
('the lalit', '8529499637', '07442472992', 'jagatpura', 'udaipur', '7'),
('amar punjabi', '8529637410', '2581473690', 'keshav pura', 'kota', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
