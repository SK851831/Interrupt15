-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2015 at 09:29 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `connection`
--
CREATE DATABASE IF NOT EXISTS `connection` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `connection`;

-- --------------------------------------------------------

--
-- Table structure for table `conn_quesion`
--

CREATE TABLE IF NOT EXISTS `conn_quesion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(200) NOT NULL,
  `hint` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `conn_quesion`
--

INSERT INTO `conn_quesion` (`id`, `pic`, `hint`, `answer`, `level`) VALUES
(1, 'download1.jpg', 'manoj', 'manoj', 1),
(2, 'download.jpg', 'manoj', 'manoj', 1),
(3, 'download.jpg', 'manoj', 'manoj', 1),
(4, 'download.jpg', 'manoj', 'manoj', 1),
(5, 'download.jpg', 'manoj', 'manoj', 1),
(6, 'download.jpg', 'manoj', 'manoj', 2),
(7, 'download.jpg', 'manoj', 'manoj', 2),
(8, 'download.jpg', 'manoj', 'manoj', 2),
(9, 'download.jpg', 'manoj', 'manoj', 2),
(10, 'download.jpg', 'manoj', 'manoj', 2);

-- --------------------------------------------------------

--
-- Table structure for table `conn_user`
--

CREATE TABLE IF NOT EXISTS `conn_user` (
  `id` int(11) NOT NULL,
  `clevel` int(11) NOT NULL,
  `cques` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
