-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2017 at 03:35 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `imageID` int(32) NOT NULL,
  `imagename` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `uploadedBy` varchar(32) COLLATE latin1_spanish_ci NOT NULL,
  `userPic` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `category` varchar(32) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`imageID`, `imagename`, `uploadedBy`, `userPic`, `category`) VALUES
(21, 'nth', 'uwjol', '786743.png', 'festivals'),
(22, 'Bisket Jatra', 'prabish', '530804.jpg', 'panoroma'),
(23, 'potraits', 'uwjol', '221391.jpg', 'potraits'),
(24, 'lklaksdf', 'uwjol', '595681.png', 'potraits');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE latin1_general_cs NOT NULL,
  `password` varchar(32) COLLATE latin1_general_cs NOT NULL,
  `email` varchar(32) COLLATE latin1_general_cs NOT NULL,
  `hash` varchar(32) COLLATE latin1_general_cs NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `hash`, `active`) VALUES
(2, 'bikal', 'ee11cbb19052e40b07aac0ca060c23ee', 'ujwal13.ul@gmail.com', 'a4a042cf4fd6bfb47701cbc8a1653ada', 1),
(3, 'prabish', '2df8c7e2cb17ecb3eeaf2282d3fea4cd', 'prabishkayastha67@gmail.com', '9b698eb3105bd82528f23d0c92dedfc0', 1),
(4, 'Binaya', '25d55ad283aa400af464c76d713c07ad', 'binayachaudari@icloud.com', '59c33016884a62116be975a9bb8257e3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `imageID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
