-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2017 at 03:29 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exam_guide_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `allocated_college`
--

CREATE TABLE IF NOT EXISTS `allocated_college` (
  `id` text NOT NULL,
  `user_id` text NOT NULL,
  `college_name` text NOT NULL,
  `college_address` text NOT NULL,
  `allocated_date_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocated_college`
--

INSERT INTO `allocated_college` (`id`, `user_id`, `college_name`, `college_address`, `allocated_date_time`) VALUES
('', 'ncp778', 'A.P.C.Roy Polytechnic(govt)', 'jadavpure kolkata', '2017-04-16 08:12:78'),
('', 'v12345', 'Birla Institute of Technology', 'kolkata', '2017-04-16 08:12:00'),
('', 'bit556', 'Birla Institute of Technology', 'kolkata', '2017-04-16 08:12:78'),
('', 'kpc', 'kkkk', 'jjjjj', '2017-05-16 08:12:78');

-- --------------------------------------------------------

--
-- Table structure for table `reg2`
--

CREATE TABLE IF NOT EXISTS `reg2` (
  `name` text NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `address` text NOT NULL,
  `pin` text NOT NULL,
  `dist1` text NOT NULL,
  `dept` text NOT NULL,
  `desg` text NOT NULL,
  `phone1` text NOT NULL,
  `phone2` text NOT NULL,
  `gender` text NOT NULL,
  `clgid` text NOT NULL,
  `cclg` text NOT NULL,
  `loca` text NOT NULL,
  `space` text NOT NULL,
  `dist2` text NOT NULL,
  `roomno` int(11) NOT NULL,
  `allocated_date_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg2`
--

INSERT INTO `reg2` (`name`, `userid`, `password`, `email`, `fname`, `lname`, `address`, `pin`, `dist1`, `dept`, `desg`, `phone1`, `phone2`, `gender`, `clgid`, `cclg`, `loca`, `space`, `dist2`, `roomno`, `allocated_date_time`) VALUES
('BIT', 'bit556', '556', 'bit@gmail.com', 'Mega', 'Karmokar', 'jagatdal', '743113', 'NORTH 24 PARGANAS', 'CST', 'lacturel', '8274915123', '8013037437', 'female', 'bit332', 'BIRLA INSTITUTE OF TECHNOLOGY(GOVT. SPONSORED)', 'kolkata', 'Computer', 'SOUTH 24 PARGANAS', 0, ''),
('EPI', 'EPI123', '123', 'epi@gmail.com', 'tanweer', 'alam', 'kankinara', '743113', 'NORTH 24 PARGANAS', 'CST', 'lacturel', '8274915123', '8013418252', 'male', 'epi33', 'ELITTE INSTITUTE OF ENGINEERING & MANAGEMENT(PRIVATE)', 'mogra', 'Mecanica', 'HOOGLY', 56, '2017-04-16 08:12:78'),
('kpc', 'kpc123', '123', 'ss@gmail.com', 'sachin', 'shaw', 'jihjjj', '654321', 'NORTH 24 PARGANAS', 'CST', 'll', '8274915123', '8013037437', 'male', 'rr', 'JNAN CHANDRA GHOSH POLYTECHNIC(GOVT)', 'rrr', 'rrr', 'PURULIA', 123, '2017-04-16 08:12:00'),
('NCP', 'ncp778', '778', 'ncp@gmail.com', 'Swati ', 'shaw', 'garulia', '743133', 'NORTH 24 PARGANAS', 'CST', 'lacturel', '8274915123', '8013037437', 'female', 'ncp008', 'AMS COLLEGE OF POLYTECHNIC(PRIVATE)', 'kolkata', 'Computer', 'NORTH 24 PARGANAS', 0, ''),
('RERF', 'rerf321', '321', 'rerf@gmail.com', 'Bikram', 'Das', 'Atpure', '743194', 'NORTH 24 PARGANAS', 'CST', 'lacturel', '8274915123', '8013418252', 'male', 'rerf334', 'REGENT INSTITUTE OF SCIENCE & TECHNOLOGY(PRIVATE)', 'kolkata', 'Computer', 'SOUTH 24 PARGANAS', 0, ''),
('SMIT', 'smit1234', '1234', 'zawed71097@gmail.com', 'Zawed', 'Akhtar', 'garulia', '743133', 'SOUTH 24 PARGANAS', 'CST', 'lacturel', '8274915123', '8013418252', 'male', 'smit70839', 'SHREE RAMKRISHNA INSTITUTE OF SCIENCE & TECHNOLOGY(PRIVATE)', 'kolkata', 'Computer', 'PURULIA', 0, ''),
('TPI', 'tpi334', '334', 'tpi@gmail.com', 'satish', 'shaw', 'shyamnagar', '743133', 'NORTH 24 PARGANAS', 'CST', 'lacturel', '8274915123', '8013418252', 'male', 'tpi123', 'KINGSTONE POLYTECHNIC COLLEGE(PRIVATE)', 'Hooghly', 'Computer', 'HOOGLY', 0, ''),
('vit', 'v12345', '11', 'vit@gmail.com', 'indo', 'pole', 'dffh', '788899', 'SOUTH 24 PARGANAS', 'CST', 'lacturel', '8274915123', '8013418252', 'male', '1122', 'KINGSTONE POLYTECHNIC COLLEGE(PRIVATE)', 'kolkata', 'Computer', 'PURULIA', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg2`
--
ALTER TABLE `reg2`
 ADD PRIMARY KEY (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
