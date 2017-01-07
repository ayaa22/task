-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2017 at 08:33 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurants`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`, `email`, `password`) VALUES
(1, 'ahmed', 'ahmedalaa@hotmail.com', 'ahmedalaa');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `details` varchar(150) NOT NULL,
  `cuisine` text NOT NULL,
  `menu` text NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`ID`, `name`, `phone`, `address`, `details`, `cuisine`, `menu`, `active`) VALUES
(1, 'MAC', '10009009', 'Maadi', 'shar3 9', 'fast food', 'grand chicken<br />bic mac<br />little tasty', 1),
(2, 'Hardes', '119876', 'Giza', 'el haram', 'sandwiches', 'burger', 0),
(3, 'flafel', '2519890', 'Maadi', 'elZahraa', 'Egyptian-Food', 'fool\r\nta3mya\r\nbetngan', 1),
(4, 'tom and basal', '3546789', 'faisal', 'el dor el rab3', 'koshry', 'koshry\r\npizza\r\nfteer', 1),
(5, 'abo shakra', '3456781', '6th of october', 'el motmyz', 'Egyptian-Food', 'ma7shy\r\nmombar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `userName`, `password`) VALUES
('aya', 'aya@hotmail.com', 'aya', 'aya'),
('lina', 'lina@hotmail.com', 'lina', 'lina'),
('Mai', 'mai@hotmail.com', 'mai', 'mai');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
