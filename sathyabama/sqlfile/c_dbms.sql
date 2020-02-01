-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 08:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c_dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_student`
--

CREATE TABLE `b_student` (
  `id` int(11) NOT NULL,
  `reg_no` int(11) DEFAULT NULL,
  `s_name` varchar(40) DEFAULT NULL,
  `s_dept` int(10) DEFAULT NULL,
  `s_sec` varchar(5) DEFAULT NULL,
  `s_phno` varchar(15) DEFAULT NULL,
  `s_eid` varchar(40) DEFAULT NULL,
  `ureg_status` int(11) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_student`
--

INSERT INTO `b_student` (`id`, `reg_no`, `s_name`, `s_dept`, `s_sec`, `s_phno`, `s_eid`, `ureg_status`, `date_created`) VALUES
(4, 38120037, 'Kamal Sharma', 12, 'A', '9566226251', 'kamaldgrt@gmail.com', 0, '2020-01-24 22:15:44'),
(5, 38120043, 'Kushal Goyal', 12, 'A', '6385132592', 'kushhalgoyal@gmail.com', 0, '2020-01-24 22:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `depts`
--

CREATE TABLE `depts` (
  `id` int(11) NOT NULL,
  `dep_code` int(11) NOT NULL,
  `sdep_name` varchar(10) NOT NULL,
  `dep_name` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `depts`
--

INSERT INTO `depts` (`id`, `dep_code`, `sdep_name`, `dep_name`, `date_created`) VALUES
(1, 11, 'CSE', 'Computer Science Engineering', '2020-01-24 16:07:21'),
(3, 12, 'IT', 'Information Technology', '2020-01-24 18:36:08'),
(5, 15, 'Mech', 'Mechanical Engineering', '2020-01-25 04:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pswd` varchar(40) DEFAULT NULL,
  `u_type` varchar(10) NOT NULL,
  `trn_date` date NOT NULL DEFAULT current_timestamp(),
  `dept` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pswd`, `u_type`, `trn_date`, `dept`) VALUES
(1, 'Kamal', 'root@sbu.com', 'aa63b0d5d950361c05012235ab520512', 'admin', '0000-00-00', 0),
(8, 'IT HOD', 'ithod@sbu.com', 'aa63b0d5d950361c05012235ab520512', 'hod', '0000-00-00', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_student`
--
ALTER TABLE `b_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`,`s_phno`,`s_eid`);

--
-- Indexes for table `depts`
--
ALTER TABLE `depts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dep_code` (`dep_code`,`sdep_name`,`dep_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_student`
--
ALTER TABLE `b_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `depts`
--
ALTER TABLE `depts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
