-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 12:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `pin` varchar(14) NOT NULL,
  `name` varchar(25) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `address` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`pin`, `name`, `nik`, `contact`, `address`) VALUES
('123456', 'Robertus Dwi Ari Utomo', 3514111709980001, '082254923023', 'Jl. Watugong II no 36');

-- --------------------------------------------------------

--
-- Table structure for table `hotelroom`
--

CREATE TABLE `hotelroom` (
  `room_number` int(3) NOT NULL,
  `room_type` varchar(10) NOT NULL,
  `room_price` int(7) NOT NULL,
  `room_desc` mediumtext NOT NULL,
  `room_status` tinyint(1) NOT NULL,
  `room_quota` int(1) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelroom`
--

INSERT INTO `hotelroom` (`room_number`, `room_type`, `room_price`, `room_desc`, `room_status`, `room_quota`, `image`) VALUES
(1, 'Super', 500000, 'AC, WiFi, Sofa, Kasur 2x2', 1, 3, '../Hotel/assets/kamar1.jpg'),
(2, 'Super', 500000, 'AC, WiFi, Sofa, Kasur 2x2', 0, 3, '../Hotel/assets/kamar2.jpg'),
(3, 'Super', 500000, 'AC, WiFi, Sofa, Kasur 2x2', 0, 3, '../Hotel/assets/kamar3.jpg'),
(4, 'Hyper', 700000, 'AC, WiFi, Sofa, 2 Kasur 3x3, TV', 0, 5, '../Hotel/assets/kamar4.jpg'),
(5, 'Hyper', 700000, 'AC, WiFi, Sofa, 2 Kasur 3x3, TV', 0, 5, '../Hotel/assets/kamar5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(5) NOT NULL,
  `order_price` int(7) NOT NULL,
  `order_date` varchar(10) NOT NULL,
  `order_staydays` int(2) NOT NULL,
  `order_status` tinyint(1) NOT NULL,
  `room_number` int(3) NOT NULL,
  `order_quota` int(2) NOT NULL,
  `nik` bigint(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_price`, `order_date`, `order_staydays`, `order_status`, `room_number`, `order_quota`, `nik`) VALUES
(31, 500000, '02-05-2019', 2, 0, 1, 2, 3514111709980001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `hotelroom`
--
ALTER TABLE `hotelroom`
  ADD PRIMARY KEY (`room_number`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `room_number` (`room_number`),
  ADD KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotelroom`
--
ALTER TABLE `hotelroom`
  MODIFY `room_number` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `nik` FOREIGN KEY (`nik`) REFERENCES `guest` (`nik`),
  ADD CONSTRAINT `room_number` FOREIGN KEY (`room_number`) REFERENCES `hotelroom` (`room_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
