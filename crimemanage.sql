-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 04:30 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crimemanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_reg`
--

CREATE TABLE `complaint_reg` (
  `cmp_id` int(11) NOT NULL,
  `user_adhar` bigint(255) NOT NULL,
  `cmp_title` varchar(255) NOT NULL,
  `cmp_desc` varchar(255) NOT NULL,
  `cmp_type` varchar(255) NOT NULL,
  `crime_location` varchar(20) NOT NULL,
  `person` varchar(255) NOT NULL,
  `cmp_date` date NOT NULL,
  `cmp_time` time NOT NULL,
  `priority` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `assignto` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_reg`
--

INSERT INTO `complaint_reg` (`cmp_id`, `user_adhar`, `cmp_title`, `cmp_desc`, `cmp_type`, `crime_location`, `person`, `cmp_date`, `cmp_time`, `priority`, `image_name`, `assignto`, `status`) VALUES
(19, 2345645, 'sas', 'ssd', '', 'sdas', '', '2018-02-14', '00:00:00', 'Low', '', ' ', 'unprocessed'),
(20, 2345645, 'sas', 'ssd', '', 'sdas', '', '2018-02-14', '00:00:00', 'Low', '', ' ', 'unprocessed'),
(22, 2345645, 'A', 'sA', 'SSSSS', 'SSAs', 'unknown', '2018-02-10', '00:00:00', 'Low', 'upload/', ' ', 'unprocessed'),
(23, 2345645, 'A', 'sA', 'SSSSS', 'SSAs', 'unknown', '2018-02-10', '00:00:00', 'Low', '', ' ', 'unprocessed'),
(24, 2345645, 'A', 'sA', 'SSSSS', 'SSAs', 'unknown', '2018-02-10', '00:00:00', 'Low', '', ' ', 'unprocessed'),
(25, 2345645, 'A', 'sA', 'SSSSS', 'SSAs', 'unknown', '2018-02-10', '00:00:00', 'Low', '', ' ', 'unprocessed'),
(26, 2345645, 'A', 'sA', 'SSSSS', 'SSAs', 'unknown', '2018-02-10', '00:00:00', 'Low', '', ' ', 'unprocessed'),
(27, 987654321982, 'child abuse', 'ddd', 'child abuse', 'bgm', 'known', '2018-03-07', '01:00:00', 'Medium', 'upload/2.jpg', '893123', 'processed');

-- --------------------------------------------------------

--
-- Table structure for table `highofficer_reg`
--

CREATE TABLE `highofficer_reg` (
  `h_id` int(10) NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `adhar_no` bigint(255) NOT NULL,
  `h_batchno` bigint(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `contactno` bigint(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `highofficer_reg`
--

INSERT INTO `highofficer_reg` (`h_id`, `h_name`, `adhar_no`, `h_batchno`, `designation`, `contactno`, `address`, `area`, `username`, `password`) VALUES
(4, 'xyz', 123456789123, 8904534, 'bba', 8904534045, 'bgm', 'bgm', 'Xyz12345', 'Xyz12345');

-- --------------------------------------------------------

--
-- Table structure for table `police_reg`
--

CREATE TABLE `police_reg` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` bigint(255) NOT NULL,
  `batch_no` bigint(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `station_area` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_reg`
--

INSERT INTO `police_reg` (`id`, `name`, `address`, `contact_no`, `batch_no`, `designation`, `email_id`, `station_area`, `username`, `password`) VALUES
(2, 'dgg', 'vbb', 5866623456, 777, 'bbbbbccc', 'vc@gmail.com', 'vxcv', 'sneha', ''),
(3, 'dgg', 'vbb', 5866623456, 893123, 'bbbbbccc', 'vc@gmail.com', 'vxcv', 'Police12', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `u_id` int(20) NOT NULL,
  `adharno` bigint(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`u_id`, `adharno`, `u_name`, `address`, `contact_no`, `email_id`, `area`, `password`) VALUES
(3, 987654321982, 'abcd', 'bgm1', 8904534045, 'g@gmail.com1', 'bgmg', 'Abcd1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint_reg`
--
ALTER TABLE `complaint_reg`
  ADD PRIMARY KEY (`cmp_id`);

--
-- Indexes for table `highofficer_reg`
--
ALTER TABLE `highofficer_reg`
  ADD PRIMARY KEY (`h_id`),
  ADD UNIQUE KEY `h_batchno` (`h_batchno`);

--
-- Indexes for table `police_reg`
--
ALTER TABLE `police_reg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `batch_no` (`batch_no`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `adharno` (`adharno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `complaint_reg`
--
ALTER TABLE `complaint_reg`
  MODIFY `cmp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `highofficer_reg`
--
ALTER TABLE `highofficer_reg`
  MODIFY `h_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `police_reg`
--
ALTER TABLE `police_reg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
