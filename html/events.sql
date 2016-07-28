-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2015 at 12:41 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `interrupt`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `user_id` int(11) NOT NULL,
  `online_code` tinyint(4) NOT NULL DEFAULT '0',
  `online_hunt` tinyint(4) NOT NULL DEFAULT '0',
  `coding` tinyint(4) NOT NULL DEFAULT '0',
  `myb` tinyint(4) NOT NULL DEFAULT '0',
  `db` tinyint(4) NOT NULL DEFAULT '0',
  `paper` tinyint(4) NOT NULL DEFAULT '0',
  `bombsquad` tinyint(4) NOT NULL DEFAULT '0',
  `datastructure` tinyint(4) NOT NULL DEFAULT '0',
  `dumbc` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`user_id`, `online_code`, `online_hunt`, `coding`, `myb`, `db`, `paper`, `bombsquad`, `datastructure`, `dumbc`) VALUES
(3, 1, 0, 1, 0, 0, 1, 1, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
