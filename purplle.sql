-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2014 at 05:16 PM
-- Server version: 5.5.34-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `purplle`
--

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `name` varchar(50) DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `type` varchar(1) DEFAULT NULL,
  `location_lat` double NOT NULL,
  `location_lon` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`name`, `city`, `type`, `location_lat`, `location_lon`) VALUES
('store1', 'kanpur', 'A', 10.234, 12.35),
('store2', 'kanpur', 'B', 10.204, 11.35),
('store3', 'delhi', 'B', 11.24, 10.35),
('IIT_gate', 'kanpur', 'A', 26.514704, 80.241909),
('Hall2', 'kanpur', 'B', 26.511014, 80.246871),
('Health_center', 'kanpur', 'C', 26.505296, 80.233691),
('Panki', 'kanpur', 'C', 26.45986, 80.238383),
('Lucknow', 'lucknow', 'A', 26.668814, 80.596656);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
