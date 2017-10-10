-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2016 at 06:22 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'rahul', 'orton');

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `id` int(10) NOT NULL,
  `license` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `finedate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fineamount` int(15) NOT NULL,
  `registrationdate` varchar(30) NOT NULL,
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `license`
--

INSERT INTO `license` (`id`, `license`, `name`, `finedate`, `fineamount`, `registrationdate`, `code`) VALUES
(2, '100', 'ab', '2016-08-15 16:10:33', 40023, '16/12/2079', 'a1'),
(3, '101', 'ashish', '2016-08-13 08:09:16', 12, '16/2/2069', 'a12'),
(4, '102', 'ram', '2016-08-13 08:09:22', 0, '16/2/2069', 'a13'),
(5, '103', 'suraj', '2016-08-13 08:09:27', 500, '16/2/2069', 'a14'),
(6, '104', 'sruti', '2016-08-13 08:09:31', 0, '17/01/2072', 'a15'),
(7, '105', 'asd', '2016-08-15 16:19:23', 12021, '16/2/2069', 'a16');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(20) NOT NULL,
  `vehicle` varchar(30) NOT NULL,
  `engineno` varchar(30) NOT NULL,
  `company` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `color` varchar(36) NOT NULL,
  `tax` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `regdate` varchar(20) NOT NULL,
  `code` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `vehicle`, `engineno`, `company`, `model`, `color`, `tax`, `name`, `regdate`, `code`) VALUES
(1, '500', '12512', 'audi', '3245', 'red', '4500', 'rahul karn', '12/2/2017', 'b1'),
(4, '501', '2131', 'yamaha', '332', 'green', '12345', 'ashish vai', '12/12/2116', 'b2'),
(10, '502', '20001', 'audi', '150', 'black', '1200', 'mahesh', '10/05/2016', 'b3'),
(11, '503', '2131', 'toyata', '2118', 'red', '1200', 'ab', '10/12/2016', 'b4'),
(12, '504', '232323', 'audi', '2118', 'black', '1200', 'sanjay', '10/12/2016', 'b5'),
(13, '505', '2131', 'yamaha', '221', 'black', '1200', 'ravi don', '10/05/2016', 'b6'),
(15, '506', '20001', 'audi', '2118', 'green', '0', 'saurav', '10/12/2016', 'b7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `license` (`license`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicle` (`vehicle`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `license`
--
ALTER TABLE `license`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
