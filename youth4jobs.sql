-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2018 at 10:33 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youth4jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `aduname` varchar(50) NOT NULL,
  `adpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `aduname`, `adpass`) VALUES
(4001, 'admin1', 'admin1'),
(4002, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `corporate`
--

CREATE TABLE `corporate` (
  `corpid` int(11) NOT NULL,
  `corpname` varchar(100) NOT NULL,
  `corppass` varchar(50) NOT NULL,
  `smail` varchar(200) NOT NULL,
  `corpmobile` varchar(13) NOT NULL,
  `corpreqskill` varchar(200) DEFAULT NULL,
  `corpsector` varchar(100) DEFAULT NULL,
  `corpdisability` varchar(200) DEFAULT NULL,
  `corpcutoff` int(11) NOT NULL,
  `corpvac` int(11) DEFAULT NULL,
  `corppos` varchar(200) DEFAULT NULL,
  `corploc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate`
--

INSERT INTO `corporate` (`corpid`, `corpname`, `corppass`, `smail`, `corpmobile`, `corpreqskill`, `corpsector`, `corpdisability`, `corpcutoff`, `corpvac`, `corppos`, `corploc`) VALUES
(1, 'tcs', 'tcs', 'tcs@gmail.com', '1234565', 'kuyg,', 'swafcAS', 'fil7', 75, 4, 'hil', 'duk6yfil'),
(3001, 'JPMC', 'jpmc', 'jpmc@gmail.com', '986543217', 'technical', 'banking', 'any', 75, 4, 'dev', 'hyderabad'),
(3002, 'xyz', 'xyz', 'xyz@gmail.com', '9865432190', 'technical', 'blah', 'any', 55, 6, 'dev', 'chennai');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `spass` varchar(50) NOT NULL,
  `smail` varchar(100) NOT NULL,
  `smobile` varchar(13) NOT NULL,
  `sskill` varchar(100) DEFAULT NULL,
  `ssector` varchar(100) DEFAULT NULL,
  `sdisability` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `spass`, `smail`, `smobile`, `sskill`, `ssector`, `sdisability`) VALUES
(1001, 'abcd', 'abcd', 'abcd@gmail.com', '123456', 'finance', 'banking', 'dumb'),
(1002, 'efgh', 'efgh', 'efgh@gmail.com', '9826810621', 'technical', 'banking', 'blind');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `unid` int(11) NOT NULL,
  `unname` varchar(100) NOT NULL,
  `unpass` varchar(50) NOT NULL,
  `smail` varchar(100) NOT NULL,
  `unmobile` varchar(13) NOT NULL,
  `unskillset` varchar(200) DEFAULT NULL,
  `undisability` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`unid`, `unname`, `unpass`, `smail`, `unmobile`, `unskillset`, `undisability`) VALUES
(5001, 'univ1', 'univ1', 'univ1@gmail.com', '9812793820', 'technical, analytical', 'deaf- 2\r\nvisually impaired-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `corporate`
--
ALTER TABLE `corporate`
  ADD PRIMARY KEY (`corpid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`unid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4003;

--
-- AUTO_INCREMENT for table `corporate`
--
ALTER TABLE `corporate`
  MODIFY `corpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3003;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `unid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
