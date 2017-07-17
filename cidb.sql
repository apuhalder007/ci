-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2017 at 09:29 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `curddt`
--

CREATE TABLE IF NOT EXISTS `curddt` (
`id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `curddt`
--

INSERT INTO `curddt` (`id`, `first_name`, `last_name`, `image`, `created`) VALUES
(2, 'Nomita1', 'Ghosh', '7338.jpg', '2017-07-17 18:58:13'),
(3, 'Apu', 'Halder', '12292.jpg', '2017-07-17 19:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `username`, `password`, `image`, `created`) VALUES
(2, 'Raju', 'Halder', 'dip@gmail.com', 'raju', 'dipuhalder', 'Lighthouse1.jpg', '2017-06-14 18:47:07'),
(3, 'Apu', 'Halder', 'phalder308@gmail.com', 'admin', 'password', 'apu.jpg', '2017-06-15 18:57:42'),
(4, 'Biju', 'Halder', 'pro99@gmail.com', 'admin', 'password', 'Koala.jpg', '2017-06-15 19:02:08'),
(5, 'Suman', 'Das', 'suman96@gmail.com', 'suman961', 'admin123', 'Penguins.jpg', '2017-06-17 16:19:29'),
(6, 'Somnath1', 'Roy', 'som99@gmail.com', 'somnathroy99', 'admin123', 'Tulips.jpg', '2017-06-19 18:11:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curddt`
--
ALTER TABLE `curddt`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curddt`
--
ALTER TABLE `curddt`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
