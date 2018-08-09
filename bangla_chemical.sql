-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 09:07 AM
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
-- Database: `bangla_chemical`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`, `user_role`) VALUES
(1, 'banglachemical@gmail.com', '$2y$10$5ZwWrfMPVlIHqUFfU6NsC.8ThLyX.4vlTlVpOnnydr0f8NP4l64Ky', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_affiliated_companies`
--

CREATE TABLE `tbl_affiliated_companies` (
  `affiliated_companies_id` int(4) NOT NULL,
  `affiliated_companies_name` varchar(255) NOT NULL,
  `affiliated_companies_logo` varchar(255) NOT NULL,
  `affiliated_companies_short_desc` text NOT NULL,
  `affiliated_companies_url` text NOT NULL,
  `affiliated_companies_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_associations`
--

CREATE TABLE `tbl_associations` (
  `associations_id` int(5) NOT NULL,
  `associations_name` text NOT NULL,
  `associations_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_associations`
--

INSERT INTO `tbl_associations` (`associations_id`, `associations_name`, `associations_url`) VALUES
(1, 'gbvchbefhv', 'http://localhost/banglachemicel/memberships.php');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_key_personnel`
--

CREATE TABLE `tbl_key_personnel` (
  `key_personnel_id` int(3) NOT NULL,
  `key_personnel_name` varchar(100) NOT NULL,
  `key_personnel_designation` text NOT NULL,
  `key_personnel_email` varchar(100) NOT NULL,
  `key_personnel_contact_one` text NOT NULL,
  `key_personnel_contact_two` text NOT NULL,
  `key_personnel_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_key_personnel`
--

INSERT INTO `tbl_key_personnel` (`key_personnel_id`, `key_personnel_name`, `key_personnel_designation`, `key_personnel_email`, `key_personnel_contact_one`, `key_personnel_contact_two`, `key_personnel_image`) VALUES
(2, 'Mehedi hasan', 'Manager', 'mehedi@gmail.com', '45756785', '4575686745675647', 'key_personnel/aff1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partner`
--

CREATE TABLE `tbl_partner` (
  `partner_id` int(5) NOT NULL,
  `partner_name` varchar(100) NOT NULL,
  `partner_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_partner`
--

INSERT INTO `tbl_partner` (`partner_id`, `partner_name`, `partner_image`) VALUES
(3, 'AllNex', 'partner_folder/ptnr-1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_affiliated_companies`
--
ALTER TABLE `tbl_affiliated_companies`
  ADD PRIMARY KEY (`affiliated_companies_id`);

--
-- Indexes for table `tbl_associations`
--
ALTER TABLE `tbl_associations`
  ADD PRIMARY KEY (`associations_id`);

--
-- Indexes for table `tbl_key_personnel`
--
ALTER TABLE `tbl_key_personnel`
  ADD PRIMARY KEY (`key_personnel_id`);

--
-- Indexes for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  ADD PRIMARY KEY (`partner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_affiliated_companies`
--
ALTER TABLE `tbl_affiliated_companies`
  MODIFY `affiliated_companies_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_associations`
--
ALTER TABLE `tbl_associations`
  MODIFY `associations_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_key_personnel`
--
ALTER TABLE `tbl_key_personnel`
  MODIFY `key_personnel_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  MODIFY `partner_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
