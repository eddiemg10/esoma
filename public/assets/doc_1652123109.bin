-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 06:57 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ussdsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `aid` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `agentNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`aid`, `name`, `agentNumber`) VALUES
(4, 'Fourth Profile', 456),
(3, 'Skills Day', 123);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subid` int(11) NOT NULL,
  `phoneNumber` varchar(15) DEFAULT NULL,
  `shortcode` varchar(6) DEFAULT NULL,
  `keyword` varchar(10) DEFAULT NULL,
  `isActive` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tid` int(11) NOT NULL,
  `amount` double NOT NULL,
  `uid` int(11) NOT NULL,
  `aid` int(11) DEFAULT NULL,
  `ttype` varchar(10) NOT NULL,
  `completedOn` datetime DEFAULT current_timestamp(),
  `ruid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `pin` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `balance` double NOT NULL,
  `registeredOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `pin`, `phone`, `balance`, `registeredOn`) VALUES
(33, 'Derdus', '$2y$10$pM/Gk0MgBZ65wz/yaRRi1uZq3eOyQclBC8AiFCGCnxSGbU.2fm8oK', '+254723222333', 4000, '2021-01-10 13:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `ussdnotifications`
--

CREATE TABLE `ussdnotifications` (
  `id` int(11) NOT NULL,
  `date_` date DEFAULT NULL,
  `sessionId` varchar(255) DEFAULT NULL,
  `serviceCode` varchar(32) DEFAULT NULL,
  `networkCode` varchar(32) DEFAULT NULL,
  `phoneNumber` varchar(15) DEFAULT NULL,
  `status` varchar(32) DEFAULT NULL,
  `cost` double(7,2) DEFAULT NULL,
  `durationInMillis` varchar(32) DEFAULT NULL,
  `input` varchar(255) DEFAULT NULL,
  `lastAppResponse` varchar(32) DEFAULT NULL,
  `errorMessage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ussdsession`
--

CREATE TABLE `ussdsession` (
  `sid` int(11) NOT NULL,
  `sessionId` varchar(255) NOT NULL,
  `ussdLevel` tinyint(4) NOT NULL,
  `completed` tinyint(4) NOT NULL DEFAULT 0,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `name` (`name`,`agentNumber`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subid`),
  ADD UNIQUE KEY `unique_phone_shortcode_keyword` (`phoneNumber`,`keyword`,`shortcode`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `aid` (`aid`),
  ADD KEY `ruid` (`ruid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `ussdnotifications`
--
ALTER TABLE `ussdnotifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ussdsession`
--
ALTER TABLE `ussdsession`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `ussdnotifications`
--
ALTER TABLE `ussdnotifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ussdsession`
--
ALTER TABLE `ussdsession`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`aid`) REFERENCES `agent` (`aid`),
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`ruid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `ussdsession`
--
ALTER TABLE `ussdsession`
  ADD CONSTRAINT `ussdsession_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
