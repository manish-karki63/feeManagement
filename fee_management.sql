-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 02:45 PM
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
  `exam_roll` varchar(10) DEFAULT NULL,
  `faculty` varchar(5) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `image` varchar(30) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_payment`
--

INSERT INTO `fee_payment` (`exam_roll`, `faculty`, `semester`, `image`, `payment_id`) VALUES
('7907/17', 'BIM', 'four', 'logo.png', 1),
('7921/17', 'BIM', 'four', 'story.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `exam_roll` varchar(10) DEFAULT NULL,
  `paid_fee` varchar(20) DEFAULT NULL,
  `exam_fee` varchar(20) DEFAULT NULL,
  `full_fee` varchar(20) DEFAULT NULL,
  `scholarship` varchar(20) DEFAULT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`exam_roll`, `paid_fee`, `exam_fee`, `full_fee`, `scholarship`, `pid`) VALUES
('7921/17', '90', '60', '600', '10', 1),
('7907/17', '60', '30', '600', '10', 2);

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
('Astha Paudel', '7907/17', '9867678250', 'asthapaudel07@gmail.com', 'BIM', 'astha', '2017'),
('Manish Karki', '7921/17', '9843645188', 'manish.karki33@gmail.com', 'BIM', 'karki', '2017');

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
  ADD UNIQUE KEY `exam_roll` (`exam_roll`);

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
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fee_payment`
--
ALTER TABLE `fee_payment`
  ADD CONSTRAINT `fee_payment_ibfk_1` FOREIGN KEY (`exam_roll`) REFERENCES `register` (`exam_roll`);

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `payment_details_ibfk_1` FOREIGN KEY (`exam_roll`) REFERENCES `register` (`exam_roll`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
