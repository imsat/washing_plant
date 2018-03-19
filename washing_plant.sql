-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 11:36 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `washing_plant`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Satyajit', 'vigi@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `id` int(12) NOT NULL,
  `sl_no` int(12) DEFAULT NULL,
  `title` int(12) DEFAULT NULL,
  `name_eng` varchar(100) DEFAULT NULL,
  `name_bng` varchar(255) DEFAULT NULL,
  `f_name_eng` varchar(255) DEFAULT NULL,
  `f_name_bng` varchar(255) DEFAULT NULL,
  `m_name_eng` varchar(255) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `village_eng` varchar(255) DEFAULT NULL,
  `village_bng` varchar(255) DEFAULT NULL,
  `post_o_eng` varchar(255) DEFAULT NULL,
  `post_o_bng` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `mobile` int(100) DEFAULT NULL,
  `nid_no` int(200) DEFAULT NULL,
  `education` int(12) DEFAULT NULL,
  `married` int(12) DEFAULT NULL,
  `religion` int(12) DEFAULT NULL,
  `blood_g` int(12) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `doa_eng` varchar(255) DEFAULT NULL,
  `doa_cal` varchar(255) DEFAULT NULL,
  `doj_eng` varchar(255) DEFAULT NULL,
  `doj_cal` varchar(255) DEFAULT NULL,
  `salary_eng` varchar(255) DEFAULT NULL,
  `salary_bng` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `emp_id` varchar(255) DEFAULT NULL,
  `management` int(12) DEFAULT NULL,
  `assign_cat` int(12) DEFAULT NULL,
  `identity_assign` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`id`, `sl_no`, `title`, `name_eng`, `name_bng`, `f_name_eng`, `f_name_bng`, `m_name_eng`, `gender`, `village_eng`, `village_bng`, `post_o_eng`, `post_o_bng`, `district`, `mobile`, `nid_no`, `education`, `married`, `religion`, `blood_g`, `weight`, `height`, `country`, `other`, `doa_eng`, `doa_cal`, `doj_eng`, `doj_cal`, `salary_eng`, `salary_bng`, `grade`, `designation`, `section`, `department`, `emp_id`, `management`, `assign_cat`, `identity_assign`) VALUES
(11, 6546456, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 0, 0, 'sfdsf', 'fsdfsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 0, 0, 'fsfsdf', 'sfdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 324234324, 0, '', '', '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 343435, 2, 'fsdfsd', '', '', 'fsdfsd', '', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 23242, 0, '', '', '', '', '', 0, 'gffdgd', 'dfgfdg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 42434, 0, '', '', '', '', '', 0, '', '', 'fsfsdfs', 'sdfsdfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 45334, 0, 'fsdf', '', '', '', '', 0, '', '', '', '', 'dfsdfd', 4353453, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 324234, 0, '', '', '', '', '', 0, '', '', 'dfdfdfg', 'gfdgdfg', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 434535, 0, '', '', '', '', '', 0, '', '', 'tretretret', 'retertrtet', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 434535, 0, '', '', '', '', '', 0, '', '', 'tretretret', 'retertrtet', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 2424, 0, 'ere', '', '', '', '', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(23, 651561615, 2, 'Oishi', 'ঐশী', 'Biswajit', 'বিস্বাজিত', 'Shipra Rani ', 1, 'Nazirpur', 'নাযিরপুর', 'Nazirpur', 'নাযিরপুর', 'Pirojpur', 1751651994, 789524613, 1, 1, 2, 2, '35kg', '5.6\"', '0', 'English', 'any', 'just', 'any just', 'any just', '20.000', '২০,০০০', 'manager', 'Student', 'Uc-b', 'CSE', '151-15-396', NULL, NULL, NULL),
(24, 0, 0, '', '', '', '', '', 2, '', '', '', '', '', 0, 0, 1, 1, 2, 1, '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', 1, 2, 'identity_assign'),
(25, 423423432, 2, '', '', '', '', '', 1, '', '', '', '', '', 0, 0, 1, 1, 1, 2, 'fdfdg', 'dgdfg', 'Bangladesh', '', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 'identity_assign');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
