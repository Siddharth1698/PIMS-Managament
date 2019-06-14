-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 09:40 PM
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
-- Table structure for table `savedvisit`
--

CREATE TABLE `savedvisit` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `complaints` varchar(255) NOT NULL,
  `bp1` varchar(255) NOT NULL,
  `bp2` varchar(255) NOT NULL,
  `pulse` varchar(255) NOT NULL,
  `ge` varchar(255) NOT NULL,
  `se` varchar(255) NOT NULL,
  `fd` varchar(255) NOT NULL,
  `fcheck` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `next_appointment` date NOT NULL,
  `current_appointment` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `savedvisit`
--

INSERT INTO `savedvisit` (`post_id`, `user_id`, `complaints`, `bp1`, `bp2`, `pulse`, `ge`, `se`, `fd`, `fcheck`, `comments`, `next_appointment`, `current_appointment`) VALUES
(27, 3, 'dcxzc', '', '', '', '', '', '', '0', 'zxcxzcxzc', '0000-00-00', '2019-06-12'),
(28, 3, 'dcxzc', '', '', '', '', '', '', '0', 'zxcxzcxzc', '0000-00-00', '2019-06-12'),
(29, 3, 'dcxzc', '', '', '', '', '', '', '0', 'zxcxzcxzc', '0000-00-00', '2019-06-12'),
(30, 3, '', '', '', '', 'sac', '', '', '1', '', '0000-00-00', '2019-06-12'),
(31, 3, 'zxczxzxcxzc', '', '', '', 'xzc', '', '', '0', 'zxc', '0000-00-00', '2019-06-12'),
(32, 3, 'zxczxzxcxzc', '', '', '', 'xzc', '', '', '0', 'zxc', '0000-00-00', '2019-06-12'),
(33, 3, '', '', '', '', '', '', '', '0', '', '0000-00-00', '2019-06-12'),
(34, 3, 'xccxv', '', '', '', '', '', '', '0', '', '0000-00-00', '2019-06-12'),
(35, 3, '', '', '', '', '', '', '', '0', '', '0000-00-00', '2019-06-12'),
(36, 3, 'zxcxz', '', '', '', 'zxcxz', 'zxccxz', '', '1', 'zxcxccx', '0000-00-00', '2019-06-12'),
(37, 3, 'asdsacsdcvxvxcvxc', '', '', '33', 'xcvcx', '', '', '0', '', '0000-00-00', '2019-06-12'),
(38, 3, 'bla', '', '', '33', '', '', 'zxcxzcxz', '0', 'zxczxc', '0000-00-00', '2019-06-12'),
(39, 3, 'bla', '2', '23432', '33', 'cxvxcv', 'xcvcxvc', 'xcvcx', '0', 'xcvxc', '0000-00-00', '2019-06-12'),
(40, 3, 'bla', '2', '23432', '33', 'zxcxzc', 'zxcxzc', 'zxcxz', '0', 'zxcxz', '1998-12-22', '2019-06-12'),
(41, 3, 'zxcxzc', '2232', '32', '3232', 'xxccxdc', '', '', '0', '', '0000-00-00', '2019-06-12'),
(43, 3, '', '', '', '', '', 'ZXCXZC', '', '0', '', '0000-00-00', '2019-06-12'),
(44, 3, 'assacx', '', '', '', '', '', '', '0', '', '0000-00-00', '2019-06-12'),
(45, 3, '', '', '', '', '', '', '', '0', 'sx', '0000-00-00', '2019-06-12'),
(46, 3, '', '', '', '', '', '', '', '0', 'sxsx', '0000-00-00', '2019-06-12'),
(47, 3, '', '', '', '', '', 'asdasx', '', '0', '', '0000-00-00', '2019-06-12'),
(48, 3, '', '', '', '', '', 'asdasx', '', '0', 'sxxss', '0000-00-00', '2019-06-12'),
(49, 3, 'sdfsdf', '', '', '', '', '', '', '0', '', '0000-00-00', '2019-06-12'),
(50, 3, '', '', '', '', '', '', '', '0', '', '0000-00-00', '2019-06-12'),
(51, 3, 'zxc xzczxcxzc', '', '', '', 'zxczxc', '', '', '0', '', '0000-00-00', '2019-06-12'),
(52, 2, 'asxsax', '', '', '', 'axsc', '', '', '0', '', '0000-00-00', '2019-06-12'),
(53, 3, '', '', '', '', '', '', '', '0', 'xcvcx', '0000-00-00', '2019-06-12'),
(54, 3, 'xvc', '', '', '', 'cxvxc', '', '', '0', 'cxv', '0000-00-00', '2019-06-12'),
(55, 17, '', '', '', '', '', '', '', '0', '', '0000-00-00', '2019-06-12'),
(56, 3, 'mnb mn \r\nzxc\r\n\r\nzxcxzc\r\nzxcxz\r\n\r\nxzc\r\nxz\r\ncxz\r\nc\r\nxc\r\n', '23', '33', '33', 'cxvcxcxv', 'xcvcx', 'xvcvx', '0', 'cxv', '2011-02-03', '2019-06-12'),
(57, 3, '', '', '', '', '', '', '', '0', '', '0000-00-00', '2019-06-12');

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
(45, 2, 'ChickenPox', 'in 2017'),
(53, 2, 'Fever :', 'past 2 wee'),
(59, 19, 'ChickenPox', '2014'),
(60, 19, 'Fever', 'sxbjb'),
(82, 3, 'Fever', 'edsdfsd');

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
  `user_weight` varchar(255) NOT NULL,
  `current_appointment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_uniqueid`, `user_fname`, `user_lname`, `user_dob`, `user_phone`, `user_gender`, `user_occupation`, `user_referredby`, `user_height`, `user_weight`, `current_appointment`) VALUES
(1, '200207021', 'Thor', 'Odin', '2002-07-02', '846464163', 'Male', 'God of Thunder', 'Odin', '193', '80', '13-06-2019 20:38'),
(2, '200406262', 'Tony', 'stark', '2004-05-26', '9496408159', 'Male', 'Tech', 'stark', '175', '80', '12-06-2019 04:42'),
(3, '200106123', 'Natasha', 'RomanoF', '1998-06-12', '546543135', 'Female', 'Assasin', 'Banner', '175', '75', '13-06-2019 20:36'),
(17, '017', 'Siddharthz', 'Mz', '1223-02-12', '', 's', 's', ' s', '', '', ''),
(19, '3232012319', 'Bruce', 'Banner', '3232-01-23', '9496408159', 'Male', 'student', 'Andre Ng', '3223', '34', ''),
(20, '3232020320', 'odin', 'sa', '3232-02-03', '232', 'Male', 'Assasin', 'NoOne ', '2332', '3223', ''),
(21, '1997121321', 'Hello', 'World', '1997-12-13', '98765443', 'Male', 'Prog', 'none ', '121', '45', '13-06-2019 15:05');

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

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `visit_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `complaints` text NOT NULL,
  `bp1` text NOT NULL,
  `bp2` text NOT NULL,
  `pulse` text NOT NULL,
  `ge` text NOT NULL,
  `se` text NOT NULL,
  `fd` text NOT NULL,
  `fcheck` text NOT NULL,
  `comments` text NOT NULL,
  `next_appointment` date NOT NULL,
  `current_appointment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`visit_id`, `user_id`, `complaints`, `bp1`, `bp2`, `pulse`, `ge`, `se`, `fd`, `fcheck`, `comments`, `next_appointment`, `current_appointment`) VALUES
(22, 3, '', '', '', '', '', 'asdasxasx', 'ascxascsad', '0', 'sxxssasdsad', '0000-00-00', '12-06-2019 03:13'),
(23, 3, 'sdfsdf', '', '', '', '', '', '', '0', '', '0000-00-00', '12-06-2019 03:16'),
(24, 3, '', '', '', '', '', '', '', '0', '', '0000-00-00', '12-06-2019 03:19'),
(25, 3, 'axs', '', '', '', '', '', 'asc', '0', '', '0000-00-00', '12-06-2019 03:21'),
(26, 3, 'csacsac', '', '', '', '', 'saccasc', 'ascsacscasc', '0', 'asxcsacsac', '0000-00-00', '12-06-2019 03:31'),
(27, 3, '', '', '', '', '', '', '', '0', '', '0000-00-00', '12-06-2019 03:36'),
(28, 2, 'asxsax', '', '', '', 'axsc', '', '', '0', '', '0000-00-00', '12-06-2019 04:09'),
(29, 2, 'ads', '', '', '', '', '', '', '0', '', '0000-00-00', '12-06-2019 04:41'),
(30, 2, '', '', '', '', '', '', '', '0', '', '0000-00-00', '12-06-2019 04:42'),
(31, 3, '', '', '', '', '', '', '', '0', 'xcvcx', '0000-00-00', '12-06-2019 12:23'),
(32, 3, 'mnb mn \r\nzxc\r\n\r\nzxcxzc\r\nzxcxz\r\n\r\nxzc\r\nxz\r\ncxz\r\nc\r\nxc\r\n', '23', '33', '33', 'cxvcxcxv', 'xcvcx', 'xvcvx', '0', 'cxv', '2011-02-03', '13-06-2019 13:08'),
(33, 21, 'hvhjvb', '', '', '', '', '', '', '0', '', '0000-00-00', '13-06-2019 15:05'),
(34, 3, 'asfdasd', '234', '234', '2', 'xcvcxv', 'xcvcxvcxxcv', 'xcvxcv', '0', 'xcvxcv', '2019-12-05', '13-06-2019 18:31'),
(35, 3, 'lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '121', '231', '123', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one ', '1', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', '2020-12-12', '13-06-2019 20:23'),
(36, 3, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '232', '3232', '232', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', '1', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', '2029-12-23', '13-06-2019 20:25'),
(37, 3, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '121', '132', '123', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2020-03-12', '13-06-2019 20:36'),
(38, 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '122', '122', '123', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '0', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1221-12-12', '13-06-2019 20:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `savedvisit`
--
ALTER TABLE `savedvisit`
  ADD PRIMARY KEY (`post_id`);

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
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`visit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `savedvisit`
--
ALTER TABLE `savedvisit`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_sample`
--
ALTER TABLE `tbl_sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10880;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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

--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
