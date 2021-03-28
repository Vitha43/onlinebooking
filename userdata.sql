-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 05:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `air`
--

CREATE TABLE IF NOT EXISTS `air` (
`aid` int(11) NOT NULL,
  `afrom` varchar(100) NOT NULL,
  `ato` varchar(120) NOT NULL,
  `addate` date NOT NULL,
  `adtime` varchar(25) NOT NULL,
  `apline` varchar(50) NOT NULL,
  `apseating` varchar(50) NOT NULL,
  `aadult` int(11) NOT NULL,
  `achildren` int(11) NOT NULL,
  `ardate` date NOT NULL,
  `artime` varchar(20) NOT NULL,
  `amassage` varchar(200) NOT NULL,
  `aname` varchar(25) NOT NULL,
  `anumber` varchar(12) NOT NULL,
  `aemail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE IF NOT EXISTS `bike` (
`bid` int(11) NOT NULL,
  `bfrom` varchar(50) NOT NULL,
  `bto` varchar(50) NOT NULL,
  `bddate` date NOT NULL,
  `brdate` date NOT NULL,
  `badult` int(10) NOT NULL,
  `bchildren` int(10) NOT NULL,
  `bclass` varchar(50) NOT NULL,
  `brtime` varchar(50) NOT NULL,
  `bmassage` varchar(100) NOT NULL,
  `bname` varchar(25) NOT NULL,
  `bnumber` varchar(12) NOT NULL,
  `bemail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
`cid` int(11) NOT NULL,
  `cfrom` varchar(200) NOT NULL,
  `cto` varchar(200) NOT NULL,
  `cddate` date NOT NULL,
  `crdate` date NOT NULL,
  `cadult` int(11) NOT NULL,
  `cchildren` int(11) NOT NULL,
  `ctclass` varchar(50) NOT NULL,
  `crtime` varchar(20) NOT NULL,
  `cmessage` varchar(200) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cnumber` varchar(100) NOT NULL,
  `cemail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactdata`
--

CREATE TABLE IF NOT EXISTS `contactdata` (
`id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(55) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rail`
--

CREATE TABLE IF NOT EXISTS `rail` (
`rid` int(11) NOT NULL,
  `rfrom` varchar(50) NOT NULL,
  `rto` varchar(50) NOT NULL,
  `rddate` date NOT NULL,
  `rrdate` date NOT NULL,
  `radult` int(5) NOT NULL,
  `rchildren` int(5) NOT NULL,
  `rtclass` varchar(50) NOT NULL,
  `rrtime` varchar(20) NOT NULL,
  `rmassage` varchar(70) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `rnumber` varchar(12) NOT NULL,
  `remail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`, `date`) VALUES
(1, 'mithu', 'mhetre', 'mithu', 'mithumhetre0001@gmail.com', '$2y$04$MXpzdWPZwUfOU28/xikTFegFAdAtoPEPIQ06VbEjzKjuH6o0Wd5hq', '2021-03-28'),
(2, 'shree', 'bagadi', 'shree', 'shree@gmail.com', '$2y$04$7ctxKGoBT5sw49cBjCV.O.aNS7HzJ.F5vKszYQDgYS1WYgNBg7flm', '2021-03-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `air`
--
ALTER TABLE `air`
 ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `bike`
--
ALTER TABLE `bike`
 ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contactdata`
--
ALTER TABLE `contactdata`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rail`
--
ALTER TABLE `rail`
 ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `air`
--
ALTER TABLE `air`
MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bike`
--
ALTER TABLE `bike`
MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contactdata`
--
ALTER TABLE `contactdata`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rail`
--
ALTER TABLE `rail`
MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
