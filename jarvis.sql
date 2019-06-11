-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 09:24 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jarvis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'sidd', 'iamgroot');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(5) NOT NULL,
  `user_id` int(255) NOT NULL,
  `name` varchar(10) NOT NULL,
  `detail` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `user_id`, `name`, `detail`) VALUES
(57, 3, 'Diabetis', 'type 2'),
(45, 2, 'ChickenPox', 'in 2013'),
(53, 2, 'Fever :', 'past 2 wee'),
(58, 3, 'Headache', '2 days'),
(59, 19, 'ChickenPox', '2014');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sample`
--

CREATE TABLE `tbl_sample` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sample`
--

INSERT INTO `tbl_sample` (`id`, `first_name`, `last_name`) VALUES
(10878, '\n\n                \n\n  Volvo\n  Saab\n  Mercedes\n  Audi\n\n\n               ', 'cas'),
(10875, 'c', 'xx'),
(10879, '\n\n               \n\n  Volvo\n  Saab\n  Mercedes\n  Audi\n\n\n               ', 'xs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_uniqueid` varchar(255) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_dob` date NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_occupation` varchar(255) NOT NULL,
  `user_referredby` varchar(255) NOT NULL,
  `user_height` varchar(255) NOT NULL,
  `user_weight` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_uniqueid`, `user_fname`, `user_lname`, `user_dob`, `user_phone`, `user_gender`, `user_occupation`, `user_referredby`, `user_height`, `user_weight`) VALUES
(1, '200207021', 'Thor', 'Odin', '2002-07-02', '846464163', 'Male', 'God of Thunder', 'Odin', '193', '80'),
(2, '200406262', 'Tony', 'stark', '2004-05-26', '9496408159', 'Male', 'Tech', 'stark', '175', '80'),
(3, '200106123', 'Natasha', 'RomanoF', '2003-06-12', '546543135', 'Female', 'Assasin', 'Banner', '163', '55'),
(17, '017', 'Siddharthz', 'Mz', '0000-00-02', 'sa', 's', 's', ' s', 's', 's'),
(19, '3232012319', 'Bruce', 'Banner', '3232-01-23', '9496408159', 'Male', 'student', ' Stark ', '3223', '23');

-- --------------------------------------------------------

--
-- Table structure for table `usersailment`
--

CREATE TABLE `usersailment` (
  `id` int(3) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersailment`
--

INSERT INTO `usersailment` (`id`, `user_id`, `fullname`, `email`) VALUES
(16, 22, 'Siddharth', 'M'),
(24, 0, 'Saab', 'sddsg'),
(30, 0, 'Saab', 'sxxs');

-- --------------------------------------------------------

--
-- Table structure for table `usersvisitupdate`
--

CREATE TABLE `usersvisitupdate` (
  `user_id` int(3) NOT NULL,
  `user_comlaint` varchar(255) NOT NULL,
  `user_bp1` varchar(255) NOT NULL,
  `user_bp2` varchar(255) NOT NULL,
  `user_pulserate` varchar(255) NOT NULL,
  `user_general_exam` varchar(255) NOT NULL,
  `user_system_exam` varchar(255) NOT NULL,
  `user_provisional_dignanosis` varchar(255) NOT NULL,
  `user_final_diganosis` varchar(255) NOT NULL,
  `user_comments` varchar(255) NOT NULL,
  `user_visit_id` int(3) NOT NULL,
  `user_next_appointment` date NOT NULL,
  `user_current_appointment` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sample`
--
ALTER TABLE `tbl_sample`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `usersailment`
--
ALTER TABLE `usersailment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersvisitupdate`
--
ALTER TABLE `usersvisitupdate`
  ADD PRIMARY KEY (`user_visit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbl_sample`
--
ALTER TABLE `tbl_sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10880;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `usersailment`
--
ALTER TABLE `usersailment`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `usersvisitupdate`
--
ALTER TABLE `usersvisitupdate`
  MODIFY `user_visit_id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
