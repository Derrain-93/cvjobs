-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2017 at 05:50 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvjobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `companyEmail` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `openDate` varchar(255) NOT NULL,
  `closeDate` varchar(255) NOT NULL,
  `JobType` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `companyName`, `companyEmail`, `title`, `description`, `location`, `salary`, `openDate`, `closeDate`, `JobType`) VALUES
(1, 'asdasdasd', 'abc@admin.com', 'asas', 'a', 'asd', '1', '2016-08-04', '2016-08-26', 'IT & Network'),
(2, 'asdasdasd', 'abc@admin.com', 'asd', 'a', 'asd', '123', '2016-08-17', '2016-08-25', 'IT & Network'),
(3, 'asdasdasd', 'asd@asd.com', 'asas', 'asd', 'asd', '1223', '2016-08-09', '2016-08-16', 'IT & Network'),
(4, 'aaa', 'aaa@ggg.com', 'aaa', 'aaa', 'aaa', '123', '2016-08-05', '2016-08-18', 'IT & Network'),
(5, 'ddddd', 'aaa@ggg.com', 'ddddd', 'ddddd', 'ddddddd', '11', '2016-08-25', '2016-08-17', 'IT & Network'),
(6, 'dhf', 'aaa@ggg.com', 'drgsdg', 'zdva', 'Sfa', '123', '2016-08-23', '2016-08-18', 'IT & Network'),
(7, 'aa', 'c@gmail.coma', 'aaa', 'aaa', 'aaa', '213', '23123', '12312', 'IT & Network'),
(8, 'Derrain', 'd@gmail.com', 'Derrain', 'Derrain', 'katunayake', '25000', '2015-12-12', '2015-12-13', ''),
(9, 'Chinthana', 'C@gmail.com', 'CHinthana', 'Chinthana', 'Chinthana', '10000', '2016-16-16', '2016-16-16', ''),
(10, '2', 'c@hml.com', '2', '2', '2', '2', '2016-16-162', '2015-12-13', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobtypes`
--

CREATE TABLE `jobtypes` (
  `JobId` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobtypes`
--

INSERT INTO `jobtypes` (`JobId`, `Type`) VALUES
(1, 'IT & Network'),
(2, 'Accounts'),
(3, 'Hospitality'),
(4, 'Engineering'),
(5, 'Office Admin'),
(6, 'Manufacturing'),
(7, 'Legal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `CompanyLocation` varchar(255) NOT NULL,
  `Tp` varchar(255) NOT NULL,
  `WebSite` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pw`, `role`, `CompanyName`, `CompanyLocation`, `Tp`, `WebSite`) VALUES
(1, 'chinthana@asd.com', '123', 'admin', '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobtypes`
--
ALTER TABLE `jobtypes`
  ADD PRIMARY KEY (`JobId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jobtypes`
--
ALTER TABLE `jobtypes`
  MODIFY `JobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
