-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 11:24 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `admin_logindate` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='contains details of the administrators of the site';

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `bill_amount` float NOT NULL,
  `bill_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `bill_amount`, `bill_name`) VALUES
(1, 10000, 'Security Bill'),
(2, 12000, 'Refuse Disposal'),
(3, 25000, 'End of the Year Party'),
(4, 10000, 'Road Repairs');

-- --------------------------------------------------------

--
-- Table structure for table `bills_payment`
--

CREATE TABLE `bills_payment` (
  `pay_id` int(11) NOT NULL,
  `pay_bill` int(11) NOT NULL COMMENT 'links to bills table',
  `pay_amt` float NOT NULL,
  `pay_date` timestamp NOT NULL,
  `pay_status` enum('Pending','Paid','Failed') NOT NULL,
  `pay_residentid` int(11) NOT NULL COMMENT 'links to residents table',
  `pay_others` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `content_title` varchar(100) NOT NULL,
  `content_text` text NOT NULL,
  `content_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content_addedby` int(11) NOT NULL COMMENT 'links to admin table, to know which admin added the announcement'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table contains all announcements';

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `resident_id` int(11) NOT NULL,
  `resident_fname` varchar(50) NOT NULL,
  `resident_lname` varchar(50) NOT NULL,
  `resident_email` varchar(50) NOT NULL,
  `resident_userid` varchar(50) NOT NULL,
  `resident_phone` varchar(50) NOT NULL,
  `resident_pwd` varchar(100) NOT NULL,
  `resident_address` varchar(200) NOT NULL,
  `resident_picture` varchar(50) NOT NULL,
  `resident_bio` varchar(500) NOT NULL,
  `resident_datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table contains the details of all residents in the estate';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `bills_payment`
--
ALTER TABLE `bills_payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`resident_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bills_payment`
--
ALTER TABLE `bills_payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `resident_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
