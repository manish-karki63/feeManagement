-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2019 at 07:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fee_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `fee_payment`
--

CREATE TABLE `fee_payment` (
  `exam_roll` varchar(10) NOT NULL,
  `faculty` varchar(5) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `image` varchar(30) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `fee_paid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_payment`
--

INSERT INTO `fee_payment` (`exam_roll`, `faculty`, `semester`, `image`, `payment_id`, `fee_paid`) VALUES
('7921/17', 'BIM', 'one', 'bankslip.jpg', 1, '45000'),
('7907/17', 'BIM', 'one', 'bankslip1.jpg', 2, '59000'),
('7934/17', 'BIM', 'one', 'bankslip2.jpg', 3, '59000'),
('7903/17', 'BIM', 'one', 'bankslip3.jpg', 4, '59000'),
('7943/17', 'BIM', 'one', 'bankslip4.jpg', 5, '59000'),
('7946/17', 'BIM', 'one', 'bankslip5.jpg', 6, '59000'),
('7908/17', 'BIM', 'one', 'bankslip6.jpg', 7, '59000'),
('7917/17', 'BIM', 'one', 'bankslip7.jpg', 8, '59000');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `exam_roll` varchar(10) NOT NULL,
  `paid_fee` varchar(20) NOT NULL,
  `exam_fee` varchar(20) NOT NULL,
  `full_fee` varchar(20) NOT NULL,
  `scholarship` varchar(20) DEFAULT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`exam_roll`, `paid_fee`, `exam_fee`, `full_fee`, `scholarship`, `pid`) VALUES
('7921/17', '119000', '59000', '533000', '0', 1),
('7907/17', '60000', '59000', '533000', '0', 2),
('7934/17', '0', '59000', '533000', '0', 3),
('7903/17', '0', '59000', '533000', '0', 4),
('7943/17', '0', '59000', '533000', '0', 9),
('7946/17', '0', '59000', '533000', '0', 10),
('7908/17', '0', '59000', '533000', '0', 11),
('7917/17', '0', '59000', '533000', '0', 12);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(30) NOT NULL,
  `exam_roll` varchar(10) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `faculty` varchar(5) NOT NULL,
  `password` varchar(30) NOT NULL,
  `batch` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `exam_roll`, `contact`, `email`, `faculty`, `password`, `batch`) VALUES
('anish suwal', '7903/17', '9860017503', 'anishsuwal3@gmail.com', 'BIM', 'anish', '2017'),
('Astha Paudel', '7907/17', '9867678250', 'asthapaudel07@gmail.com', 'BIM', 'astha', '2017'),
('Avishek Bhandari', '7908/17', '9841234569', 'abha@gmail.com', 'BIM', 'avi', '2017'),
('Dipa Khadka', '7917/17', '9841234560', 'dipa@gmail.com', 'BIM', 'dipa', '2017'),
('Manish Karki', '7921/17', '9843645188', 'manish.karki33@gmail.com', 'BIM', 'manish', '2017'),
('Rushma Lohola', '7934/17', '9803695955', 'rushmalohola8@gmail.com', 'BIM', 'rushma', '2017'),
('Suman Chaulagai', '7943/17', '9841234567', 'suman@gmail.com', 'BIM', 'suman', '2017'),
('Suvukshya Gautam', '7946/17', '9841234568', 'suvu@gmail.com', 'BIM', 'suvu', '2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fee_payment`
--
ALTER TABLE `fee_payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `exam_roll` (`exam_roll`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `exam_roll` (`exam_roll`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`exam_roll`),
  ADD UNIQUE KEY `contact` (`contact`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fee_payment`
--
ALTER TABLE `fee_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fee_payment`
--
ALTER TABLE `fee_payment`
  ADD CONSTRAINT `fee_payment_ibfk_1` FOREIGN KEY (`exam_roll`) REFERENCES `register` (`exam_roll`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `payment_details_ibfk_1` FOREIGN KEY (`exam_roll`) REFERENCES `register` (`exam_roll`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
