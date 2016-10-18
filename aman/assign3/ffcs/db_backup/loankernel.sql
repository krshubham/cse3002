-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost:8080
-- Generation Time: Oct 01, 2016 at 11:51 PM
-- Server version: 5.7.15-0ubuntu0.16.04.1
-- PHP Version: 5.6.26-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loankernel`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(255) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `mobile` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `fname`, `lname`, `email`, `mobile`) VALUES
(1, 'am', 'ams', 'aman97ram@gmail.com', '9790714125'),
(2, 'asa', 'sa', 'aman97ram@gmail.com', '9790714125'),
(3, 'asa', 'sa', 'aman97ram@gmail.com', '9790714125'),
(4, 'asa', 'sa', 'aman97ram@gmail.com', '9790714125'),
(5, 'asa', 'sa', 'aman97ram@gmail.com', '9790714125'),
(6, 'asa', 'sa', 'aman97ram@gmail.com', '9790714125'),
(7, 'asa', 'sa', 'aman97ram@gmail.com', '9790714125'),
(8, 'sad', 'aads', 'aman97ram@gmail.com', '9790714125'),
(9, 'sad', 'aads', 'aman97ram@gmail.com', '9790714125'),
(10, 'asgv', 'ghdas', 'aman97ram@gmail.com', '9790714125'),
(11, 'das', 'ads', 'aman97ram@gmail.com', '9790714125'),
(12, 'asd', 'asd', 'aman97ram@gmail.com', '9790714125'),
(13, 'adshg', 'gsad', 'aman97ram@gmail.com', '9790714125'),
(14, 'hjn', 'jn', 'aman97ram@gmail.com', '9790714125'),
(15, 'das', 'asd', 'aman.saha2015@vit.ac.in', '9790714125'),
(16, 'aman', 'as', 'aman97ram@gmail.com', '9790714125'),
(17, 'asd', 'as', 'aman97ram@gmail.com', '9790714125');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
