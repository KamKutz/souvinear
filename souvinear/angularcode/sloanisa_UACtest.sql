-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2018 at 11:05 AM
-- Server version: 5.6.32-78.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sloanisa_UACtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `concert_info`
--

CREATE TABLE IF NOT EXISTS `concert_info` (
  `user_id` int(11) DEFAULT NULL,
  `concert_date` varchar(50) NOT NULL,
  `concert_time` varchar(50) NOT NULL,
  `venue` varchar(80) NOT NULL,
  `headliner` varchar(80) NOT NULL,
  `supporting_act` varchar(80) NOT NULL,
  `entry` varchar(32000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concert_info`
--

INSERT INTO `concert_info` (`user_id`, `concert_date`, `concert_time`, `venue`, `headliner`, `supporting_act`, `entry`) VALUES
(1, '2017-09-13', '21:00', 'Foundry', 'BROCKHAMPTON', 'brocky', 'rip to my red vans yall was real'),
(2, '2222-12-22', '00:22', 'my kitchen', 'yo yo ma', 'snoop dog', 'alkdjflksj'),
(2, '2333-11-22', '02:12', 'dklfjas', 'kdsjf', 'dfk-=qwsdj', 'sdlkfj'),
(3, '2016-09-03', '22:30', 'joshua tree', 'childish gambino', 'donald glover', 'soul ascended'),
(4, '2017-10-18', '23:00', 'TLA', 'asdlfkja', 'adlsfja', 'lit lit lit lit lit');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE IF NOT EXISTS `user_accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `username`, `hashed_password`) VALUES
(1, 'anisa', '250b3ee2c4bad5cf35527b73f986f1f059850c33'),
(2, 'kat', '6367c48dd193d56ea7b0baad25b19455e529f5ee'),
(3, 'sloan', '250b3ee2c4bad5cf35527b73f986f1f059850c33'),
(4, 'lord-k10', '6e542c8b6fb2c45c5642ef5474d64756d7590892'),
(5, 'test100', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(6, 'test1000', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(7, 'test1997', ''),
(8, 'test101', ''),
(9, 'test103', ''),
(10, 'test105', ''),
(11, 'test106', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concert_info`
--
ALTER TABLE `concert_info`
  ADD KEY `par_ind` (`user_id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `concert_info`
--
ALTER TABLE `concert_info`
ADD CONSTRAINT `fk_user_accounts` FOREIGN KEY (`user_id`) REFERENCES `user_accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
