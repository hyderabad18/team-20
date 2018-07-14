-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2018 at 07:03 PM
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
  `corpcutoff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate`
--

INSERT INTO `corporate` (`corpid`, `corpname`, `corppass`, `smail`, `corpmobile`, `corpreqskill`, `corpsector`, `corpdisability`, `corpcutoff`) VALUES
(1002, 'dfs', '1d8d5e912302108b5e88c3e77fcad378', 'dfs@gmail.com', '6', 'dsf', NULL, 'gsd', 0),
(1003, 'vz', '4ec503be252d765ea37621a629afdaa6', 'cd@gmail.com', '6', 'ds', NULL, 'dfs', 0),
(1004, 'a', '838ece1033bf7c7468e873e79ba2a3ec', 'ds@gmail.com', '56', 'd', NULL, 'dfs', 0),
(1005, 'ds', '838ece1033bf7c7468e873e79ba2a3ec', 'dj@gmail.com', '4531', 'dsf', NULL, 'dfs', 0),
(1006, 'cghash', '9f7924fe1ba24a0df6e9f700acb6c443', 'bfsk1@gmail.com', '7896', 'dbkjbk', NULL, 'dvhjh', 0);

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
(1002, 'dsf', '60d31eb37595dd44584be5ef363283e3', 'dfs@gmail.com', 'dfs', 'dfs', NULL, 'dfs'),
(1003, 'sdk', '8fe5013760615e31ca8622e0377c27d8', 'vjd@gmail.com', '646', 'ebk', NULL, 'vjds'),
(1004, 'fs', 'dfccfc63f86ded406799fe52a988831b', 'gfkfsl@gmail.com', '46', 'sfl', NULL, 'sfj'),
(1005, 'sdf', '522748524ad010358705b6852b81be4c', 'df@gmail.com', '464', 'f', NULL, 'dfs'),
(1006, 'dsf', '4ec503be252d765ea37621a629afdaa6', 'fd@gmail.com', '46', 'dsf', NULL, 'dfs'),
(1007, 'ds', 'd4b2758da0205c1e0aa9512cd188002a', 'dsfbkj@gmail.com', '56554', 'ds', NULL, 'fd'),
(1008, 'dgkz', '5dae429688af1c521ad87ac394192c6d', 'gfdk@gmail.com', '56', 'dfgka', NULL, 'sgd'),
(1009, 'zdvhzd', '522748524ad010358705b6852b81be4c', 'sf@gmail.com', '6546', 'sfd', NULL, 'dfs');

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
(1, 'dsbk', '51c41831f1d1cf5cffeb40e0520fad9b', 'hus@gmail.com', '465', 'dbskfb', 'vjds'),
(2, 'vjes', 'd4b2758da0205c1e0aa9512cd188002a', 'djhg@gmail.com', '5654', 'afkg', 'dfs');

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
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corporate`
--
ALTER TABLE `corporate`
  MODIFY `corpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `unid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
