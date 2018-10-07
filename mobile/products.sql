-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 12:50 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eljohn`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductCategory` varchar(50) NOT NULL,
  `ProductDescription` text NOT NULL,
  `ProductPrice` int(5) NOT NULL,
  `ProductImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `ProductName`, `ProductCategory`, `ProductDescription`, `ProductPrice`, `ProductImage`) VALUES
(10, 'asdasd', 'asdasdasd', 'asdasdasd', 0, 'asdasd'),
(11, 'asdasd', 'asdasd', 'asdasdasd				', 0, 'asdasd'),
(12, 'asdasd', 'asdasd', 'asdasd	', 1, 'sadasd'),
(13, 'Jsjxjx', 'Jdjdjs', 'Kedjdjd				', 2, 'Jdksjs'),
(14, 'Sdss', 'Jdjdjs', 'Kedjdjd				', 2, 'Jdksjs'),
(15, 'Drjdjsnd', 'Hahdhs', 'Kedjdjd	', 2, 'Jdksjs'),
(16, 'Drjdjsnd', 'Hahdhs', 'Kedjdjd	', 555, 'Jdksjs'),
(17, '', '', '				', 0, ''),
(18, 'hhhgh', 'hhhh', 'gghhhh				', 5555, 'hhhh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
