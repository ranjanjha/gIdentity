-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2012 at 08:48 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gidentity`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(45) NOT NULL COMMENT 'Name of the Person',
  `username` varchar(20) DEFAULT NULL COMMENT 'optional',
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL COMMENT 'md5 encrypted',
  `is_verified` tinyint(4) NOT NULL DEFAULT '0',
  `last_login` date DEFAULT NULL,
  `is_logged_in` tinyint(4) DEFAULT NULL,
  `verification_code` int(11) NOT NULL COMMENT 'code sent for password recovery or email-verication',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='website member table' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `id` bigint(20) NOT NULL,
  `full_name` varchar(45) NOT NULL,
  `dob` date NOT NULL,
  `father_name` varchar(45) NOT NULL,
  `mother_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `photo_url` varchar(250) DEFAULT NULL,
  `pan_no` varchar(10) DEFAULT NULL,
  `voter_id` varchar(10) DEFAULT NULL,
  `passport_no` varchar(10) DEFAULT NULL,
  `drivers_licence_no` varchar(20) DEFAULT NULL,
  `uid_no` varchar(30) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Person identity table';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
