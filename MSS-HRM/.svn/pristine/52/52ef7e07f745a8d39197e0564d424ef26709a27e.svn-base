-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2013 at 07:18 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newhrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE IF NOT EXISTS `attendances` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `Employee_ID` int(200) NOT NULL,
  `InTime` datetime NOT NULL,
  `OutTime` datetime NOT NULL,
  `IsLate` varchar(200) NOT NULL,
  `Hours_Worked` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `ID_2` (`ID`),
  UNIQUE KEY `Employee_ID` (`Employee_ID`),
  UNIQUE KEY `Employee_ID_2` (`Employee_ID`),
  UNIQUE KEY `Employee_ID_3` (`Employee_ID`),
  UNIQUE KEY `ID_3` (`ID`),
  UNIQUE KEY `Employee_ID_4` (`Employee_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`ID`, `Employee_ID`, `InTime`, `OutTime`, `IsLate`, `Hours_Worked`) VALUES
(72, 8, '2013-12-31 06:43:44', '2013-12-31 00:00:00', 'hello', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `Employee_ID` int(200) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Join_in_date` datetime NOT NULL,
  `Type` int(50) NOT NULL,
  `Active` int(50) NOT NULL,
  `Designation` varchar(200) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `Contact_Number` bigint(50) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Facebook_ID` varchar(400) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `City` varchar(200) NOT NULL,
  `State` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Employee_ID` (`Employee_ID`),
  UNIQUE KEY `Employee_ID_2` (`Employee_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ID`, `Employee_ID`, `Username`, `Password`, `Join_in_date`, `Type`, `Active`, `Designation`, `FullName`, `DOB`, `Contact_Number`, `Email`, `Facebook_ID`, `Address`, `City`, `State`) VALUES
(1, 1, 'admin', 'admin', '2013-12-26 13:02:38', 0, 1, 'programmer', 'sachin jariyal', '07/02/88', 7589331531, 'mss.sachinjariyal@mss.local', 'facebook.com/sachin.jariyal', '#599,sec8', 'panchkula', 'Haryana'),
(7, 99, 'admin', 'admin', '2013-12-26 13:02:00', 0, 1, 'manager', 'admin', '07/02/88', 7589331531, 'mss.admin@mss.local', 'facebook.com/admin', 'palm heights', 'panchkula', 'Haryana'),
(3, 7, 'sachinjariyal', 'sachinjariyal', '2013-08-12 11:16:43', 0, 1, 'programmer', 'sachin jariyal', '07/02/88', 7589331531, 'mss.sachinjariyal@mss.local', 'facebook.com/sachin.jariyal', '#599,sec8', 'panchkula', 'Haryana'),
(4, 8, 'rajatgoel', 'rajat', '2013-12-27 07:16:00', 1, 0, 'programmer', 'rajat goel', '08/02/1988', 758935254, 'rajat@gmail.com', 'http://facebook.com/rajat.goel', '856 sec-7', 'panchkula', 'haryana'),
(5, 9, 'karan', 'karan', '2013-12-27 07:31:00', 0, 0, 'programmer', 'karan patiyal', '08/02/1988', 758935254, 'karan@gmail.com', 'http://facebook.com/rajat.goel', '856 sec-7', 'panchkula', 'haryana'),
(6, 10, 'rakesh', 'rakesh', '2013-12-27 07:37:00', 1, 1, 'designer', 'rakesh kumar', '08/02/1988', 758935254, 'rakesh@gmail.com', 'http://facebook.com/rajat.goel', '856 sec-7', 'panchkula', 'haryana');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
