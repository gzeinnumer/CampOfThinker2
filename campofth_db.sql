-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 06:21 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `campofth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahasac_page1`
--

CREATE TABLE IF NOT EXISTS `bahasac_page1` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` int(11) NOT NULL,
  `website` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bahasac_page1`
--

INSERT INTO `bahasac_page1` (`no`, `nama`, `email`, `komentar`, `tanggal`, `website`) VALUES
(1, 'M. Fadli Zein', 'm.fadli.zein@gmail.com', 'Page1_kom1', 12112, 'qeqweqewqweqewqwe');

-- --------------------------------------------------------

--
-- Table structure for table `bahasac_page2`
--

CREATE TABLE IF NOT EXISTS `bahasac_page2` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` int(11) NOT NULL,
  `website` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bahasac_page2`
--

INSERT INTO `bahasac_page2` (`no`, `nama`, `email`, `komentar`, `tanggal`, `website`) VALUES
(1, 'asdasdasd', 'asdadasd', 'asdasdad', 1503159612, 'asdasdasda');

-- --------------------------------------------------------

--
-- Table structure for table `bahasac_page3`
--

CREATE TABLE IF NOT EXISTS `bahasac_page3` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` int(11) NOT NULL,
  `website` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bahasac_page3`
--

INSERT INTO `bahasac_page3` (`no`, `nama`, `email`, `komentar`, `tanggal`, `website`) VALUES
(1, 'test', 'as', 'asd', 1503158159, 'asdasdas'),
(2, 'asdadasd', 'asdasda', 'asdasdasd', 1503159201, 'asdasdas');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
