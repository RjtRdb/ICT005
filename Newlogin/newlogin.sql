-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2013 at 09:04 AM
-- Server version: 5.1.53
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `b_code` varchar(20) NOT NULL,
  `b_name` varchar(30) NOT NULL,
  `b_address` varchar(40) NOT NULL,
  PRIMARY KEY (`b_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_code`, `b_name`, `b_address`) VALUES
('G003', 'Galkulama', 'xxxxxxxxxxx'),
('H001', 'HeadOfiice', 'Anuradhapura'),
('K004', 'kahata', 'kkkkkkk'),
('M001', 'Mihintale', 'Mihintale,Anuradhapura'),
('T001', 'Thalawa', 'Thalawa,Anuradhapura');

-- --------------------------------------------------------

--
-- Table structure for table `distribute`
--

CREATE TABLE `distribute` (
  `branch_code` varchar(20) NOT NULL,
  `branch_name` varchar(20) NOT NULL,
  `item_code` varchar(20) NOT NULL,
  `item_category` varchar(20) NOT NULL,
  `dis_date` date NOT NULL,
  `dis_by` varchar(20) NOT NULL,
  PRIMARY KEY (`item_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribute`
--

INSERT INTO `distribute` (`branch_code`, `branch_name`, `item_code`, `item_category`, `dis_date`, `dis_by`) VALUES
('H001', 'HeadOfiice', '345', 'Monitor', '2013-10-11', 'dfd'),
('G003', 'Galkulama', 'aaa1', 'CPU', '2013-05-08', 'dfd'),
('K004', 'Kahata', 'bbb1', 'CPU', '2013-05-29', 'ro'),
('G003', 'Galkulama', 'ccc1', 'CPU', '2013-05-29', 'df'),
('002', 'Thalawa', 'd678', 'monitor', '2013-09-08', 'df45'),
('G003', 'Galkulama', 'ddd1', 'Monitor', '2012-07-08', 'asd'),
('001', 'Mihintale', 'dwq45', 'cpu', '2013-07-05', 'it67'),
('f56', '', 'fg6', '', '2013-07-08', 'f567'),
('v67', '', 'fgb7', '', '2013-07-08', 'ht78'),
('qwe', 'gg', 'rwq', 'mn', '2013-07-08', 'dster'),
('c008', '', 'vb67', '', '2013-07-08', 'fgh7');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `fullname` varchar(30) NOT NULL,
  `employnumber` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `con_password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`employnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`fullname`, `employnumber`, `phone`, `email`, `username`, `password`, `con_password`, `level`) VALUES
('asdfg', 'asdfg12', 1234567890, 'df', 'asdfg', '*F3F4529D309AA630625EE86FDC7A5A04979293D7', '*F3F4529D309AA630625EE86FDC7A5A04979293D7', 'manager'),
('Dilani famalka Dehipe', 'ITOF001', 713653255, 'dfdfama@gmail.com', 'admin', '*01A6717B58FF5C7EAFFF6CB7C96F7428EA65FE4C', '*01A6717B58FF5C7EAFFF6CB7C96F7428EA65FE4C', 'admin'),
('Roshan Piyadigama', 'ITOF002', 715960860, 'roshanpiyadigama@gmail.com', 'roshan', 'binga', 'binga', 'admin'),
('Isanka Jayathilake', 'ITOF003', 773609453, 'isanka0@gmail.com', 'isanka', 'isanka123', 'isanka123', 'admin'),
('udeni abeywansha', 'ITOF101', 718903310, 'udeni.ab@gmail.com', 'udeni', '*2DA491B92FC498F6181A20136663EF400D6403B4', 'udeni', 'manager'),
(',.fhgfkg;;/', 'ITOFFICER002', 1234567890, 'd@gmail.com', 'ddd', '*8FF4CC6C7D147E68A6AE7E58B4352733B6515988', '*8FF4CC6C7D147E68A6AE7E58B4352733B6515988', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `uempID` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `login_date` date NOT NULL DEFAULT '0000-00-00',
  `login_time` time NOT NULL DEFAULT '00:00:00',
  `logout_date` date NOT NULL DEFAULT '0000-00-00',
  `logout_time` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`uempID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`uempID`, `username`, `login_date`, `login_time`, `logout_date`, `logout_time`) VALUES
(1, 'dfd', '2013-08-07', '00:00:00', '0000-00-00', '00:00:00'),
(5, 'admin', '2013-08-04', '00:00:00', '0000-00-00', '00:00:00'),
(7, 'roshan', '2013-08-04', '00:00:00', '0000-00-00', '00:00:00'),
(9, 'udeni', '2013-08-04', '00:00:00', '2013-08-04', '00:00:00'),
(10, 'admin', '2013-08-04', '00:00:00', '2013-08-04', '00:00:00'),
(11, 'roshan', '2013-08-04', '00:00:00', '0000-00-00', '00:00:00'),
(12, 'admin', '2013-08-04', '00:00:00', '2013-08-04', '00:00:00'),
(13, 'udeni', '2013-08-04', '00:00:00', '2013-08-04', '00:00:00'),
(19, 'admin', '2013-08-07', '04:59:15', '2013-08-07', '00:00:00'),
(20, 'udeni', '2013-08-07', '05:00:32', '0000-00-00', '00:00:00'),
(21, 'udeni', '2013-08-07', '05:05:48', '2013-08-07', '05:08:11'),
(22, 'admin', '2013-08-07', '05:12:49', '2013-08-07', '05:14:21'),
(23, 'udeni', '2013-08-07', '05:16:04', '2013-08-07', '05:18:32'),
(24, 'admin', '2013-08-07', '05:18:39', '2013-08-07', '05:49:11'),
(25, 'admin', '2013-08-09', '08:38:13', '0000-00-00', '00:00:00'),
(26, 'admin', '2013-08-09', '09:45:18', '0000-00-00', '00:00:00'),
(27, 'admin', '2013-08-09', '20:08:46', '0000-00-00', '00:00:00'),
(28, 'admin', '2013-08-09', '20:21:43', '2013-08-09', '20:22:34');
