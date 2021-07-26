-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 06:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `community_platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `christian`
--

CREATE TABLE `christian` (
  `id` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hindu`
--

CREATE TABLE `hindu` (
  `id` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jain`
--

CREATE TABLE `jain` (
  `id` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `muslim`
--

CREATE TABLE `muslim` (
  `id` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sikh`
--

CREATE TABLE `sikh` (
  `id` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `community` varchar(255) NOT NULL,
  `referral` varchar(255) NOT NULL,
  `success` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `password`, `email`, `name`, `dob`, `city`, `district`, `state`, `community`, `referral`, `success`) VALUES
(14, 'sourav299', '123456', 'abcd@gmail.com', 'Sourav Deb', '2021-07-09', 'rhsfb', 'sdvgsrg', 'thsrsf', 'Hindu', '', 1),
(15, 'Messi10', '123456', 'nabanita454@gmail.com', 'Messi Leo', '2021-06-30', 'gchc', 'gchgch', 'gcgg', 'Christian', '', 1),
(16, 'rohit55', '123456', 'abcd@gmail.com', 'Rohit Roy', '2021-06-30', 'Delhi', 'New Delhi', 'New Delhi', 'Hindu', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `christian`
--
ALTER TABLE `christian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hindu`
--
ALTER TABLE `hindu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jain`
--
ALTER TABLE `jain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muslim`
--
ALTER TABLE `muslim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sikh`
--
ALTER TABLE `sikh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `christian`
--
ALTER TABLE `christian`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hindu`
--
ALTER TABLE `hindu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jain`
--
ALTER TABLE `jain`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `muslim`
--
ALTER TABLE `muslim`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sikh`
--
ALTER TABLE `sikh`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
