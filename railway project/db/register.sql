-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 09:57 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `UserId` int(11) NOT NULL,
  `fnamead` varchar(250) NOT NULL,
  `lnamead` varchar(250) NOT NULL,
  `emailad` varchar(250) NOT NULL,
  `pwdad` varchar(250) NOT NULL,
  `genderad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`UserId`, `fnamead`, `lnamead`, `emailad`, `pwdad`, `genderad`) VALUES
(1, 'aravind', 'jingade', 'aravindjingade@gmail.com', '12345', 'male'),
(2, 'admin', '1', 'admin@gmail.com', 'admin', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `booktkts`
--

CREATE TABLE `booktkts` (
  `id` int(11) NOT NULL,
  `train_no` int(50) NOT NULL,
  `from_ad` varchar(250) NOT NULL,
  `to_ad` varchar(250) NOT NULL,
  `be_date` varchar(250) NOT NULL,
  `time_ab` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booktkts`
--

INSERT INTO `booktkts` (`id`, `train_no`, `from_ad`, `to_ad`, `be_date`, `time_ab`) VALUES
(4, 54321, 'davangere', 'bangalore', '2019-12-01', '12:50'),
(5, 56789, 'davangere', 'bangalore', '2019-01-29', '00:59'),
(6, 98765, 'davangere', 'bangalore', '2019-11-12', '02:59'),
(12, 56789, 'hubli', 'mumbai', '2019-11-13', '02:03'),
(19, 56624, 'davangere', 'bangalore', '2019-12-20', '19:07'),
(20, 566009, 'davangere', 'bangalore', '2019-12-20', '12:59');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `UserId` int(50) NOT NULL,
  `firstname_p` varchar(250) NOT NULL,
  `email_p` varchar(250) NOT NULL,
  `address_p` varchar(250) NOT NULL,
  `city_p` varchar(250) NOT NULL,
  `state_p` varchar(250) NOT NULL,
  `zip_p` varchar(20) NOT NULL,
  `cardname_p` varchar(30) NOT NULL,
  `cardnumber_p` varchar(30) NOT NULL,
  `expmonth_p` varchar(30) NOT NULL,
  `expyear_p` varchar(50) NOT NULL,
  `cvv_p` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`UserId`, `firstname_p`, `email_p`, `address_p`, `city_p`, `state_p`, `zip_p`, `cardname_p`, `cardnumber_p`, `expmonth_p`, `expyear_p`, `cvv_p`) VALUES
(1, 'aravind', 'aravindjingade@gmail.com', '3321/17E Davangere', 'Davangere', 'Karnataka', '080', 'aravind', '1111-2222-3333-4444', 'september', '2019', '352');

-- --------------------------------------------------------

--
-- Table structure for table `train_details`
--

CREATE TABLE `train_details` (
  `id` int(11) NOT NULL,
  `train_no` int(50) NOT NULL,
  `train_name` varchar(250) NOT NULL,
  `from_ab` varchar(250) NOT NULL,
  `to_cd` varchar(250) NOT NULL,
  `date_cd` varchar(250) NOT NULL,
  `time_cd` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train_details`
--

INSERT INTO `train_details` (`id`, `train_no`, `train_name`, `from_ab`, `to_cd`, `date_cd`, `time_cd`) VALUES
(17, 500924, 'Janshatabdi', 'HUBLI', 'BANGALORE', '2019-12-25', '16:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `fname` varchar(28) CHARACTER SET utf8 NOT NULL,
  `lname` varchar(28) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `pwd` varchar(30) CHARACTER SET utf8 NOT NULL,
  `pwdrpt` varchar(30) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `fname`, `lname`, `email`, `pwd`, `pwdrpt`, `gender`) VALUES
(103, 'aravind', 'jingade', 'aravindjingade@gmail.com', '12345', '12345', 'male'),
(104, 'user', '1', 'user@gmail.com', 'user', 'user', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `booktkts`
--
ALTER TABLE `booktkts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `train_details`
--
ALTER TABLE `train_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booktkts`
--
ALTER TABLE `booktkts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `UserId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `train_details`
--
ALTER TABLE `train_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
