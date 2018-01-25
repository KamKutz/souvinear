-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2018 at 09:35 AM
-- Server version: 5.6.32-78.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sloanisa_souvinear`
--

-- --------------------------------------------------------

--
-- Table structure for table `concert_info`
--

CREATE TABLE IF NOT EXISTS `concert_info` (
  `id` int(11) DEFAULT NULL,
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

INSERT INTO `concert_info` (`id`, `user_id`, `concert_date`, `concert_time`, `venue`, `headliner`, `supporting_act`, `entry`) VALUES
(NULL, 24, 'october 6', '??? what is this ', 'tower', 'paramore', 'best coast', 'hayley williams murdered me'),
(NULL, 24, '2017-11-16', '19:30', 'Fillmore', 'Bleachers', 'Amy shark', 'Jack antanoff '),
(NULL, 3, '', '00:40', '', '', '', ''),
(NULL, 25, '2017-10-25', '20:00', 'coda', 'nai palm', 'sonni shine', 'soul ascended'),
(NULL, 26, '2017-12-14', '06:34', 'Sb', 'Yo', 'Bs', 'Sjejsj'),
(NULL, 26, '', '', '', '', '', ''),
(NULL, 26, '', '', '', '', '', ''),
(NULL, 29, '2017-10-25', '20:00', 'coda', 'nai palm', 'sonni shine', 'soul ascended from my body'),
(NULL, 26, '', '', '', '', '', ''),
(NULL, 29, '2017-10-28', '12:00', 'tla', 'amin', 'towkio', ''),
(NULL, 30, '2017-10-25', '20:00', 'union transfer', 'nai palm', 'madison mcferrin', 'amazing'),
(NULL, 31, '2016-08-15', '20:00', 'tla', 'hiatus kaiyote', 'rich medina', 'Rich played that Kaytranada x Erykah Badu joint. ');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE IF NOT EXISTS `user_accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `username`, `hashed_password`) VALUES
(1, 'sloanisa', '250b3ee2c4bad5cf35527b73f986f1f059850c33'),
(2, 'kristen', '3a9610c8225af6fb2c1b1a2d0bdf4f56e5ee562d'),
(3, 'test1', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(4, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(5, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(6, 'krstnrhm', 'cf7a8321462496de66ceae5c77caeb408c89935c'),
(7, 'test2', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(8, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(9, 'Username', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(10, 'Username', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(11, 'krstnrhm', 'cf7a8321462496de66ceae5c77caeb408c89935c'),
(12, 'Username', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(13, 'Username', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(14, 'Username', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(15, 'Username', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(16, 'testing', '8cb2237d0679ca88db6464eac60da96345513964'),
(17, 'Username', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(18, 'kristen', '3a9610c8225af6fb2c1b1a2d0bdf4f56e5ee562d'),
(19, 'Username', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(20, 'Username', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(21, 'Username', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(22, 'Username', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(23, 'krstnrhm', 'cf7a8321462496de66ceae5c77caeb408c89935c'),
(24, 'vls48', 'b1432db0088f669789237117d35b0b8e14768d10'),
(25, 'anisa', '250b3ee2c4bad5cf35527b73f986f1f059850c33'),
(26, 'Kaitlyn', '6367c48dd193d56ea7b0baad25b19455e529f5ee'),
(27, 'Kaitlyn', '6367c48dd193d56ea7b0baad25b19455e529f5ee'),
(28, 'blah', '5bf1fd927dfb8679496a2e6cf00cbe50c1c87145'),
(29, 'test3', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(30, 'anisasloan', '250b3ee2c4bad5cf35527b73f986f1f059850c33'),
(31, 'oanis', '30159b28b024ace023720a0f14ce0d4c1d97fe72'),
(32, 'Username', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(33, 'Username', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(34, 'Username', 'da39a3ee5e6b4b0d3255bfef95601890afd80709');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
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
