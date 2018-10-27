-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 09:14 AM
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
-- Database: `techieproduct2`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `ID` int(25) NOT NULL,
  `userID` int(25) NOT NULL,
  `productID` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`ID`, `userID`, `productID`, `action`, `time`) VALUES
(7, 80, 0, 'added', '2018-10-22 00:00:00'),
(8, 80, 0, 'added', '2018-10-22 08:36:26'),
(9, 80, 0, 'updated', '2018-10-22 08:44:48'),
(10, 80, 0, 'deleted', '2018-10-22 08:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productCat` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `productprice` int(255) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `ProductImage` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `userID`, `productname`, `productCat`, `Description`, `productprice`, `CompanyName`, `ProductImage`) VALUES
(6, 80, 'Tinapa', '1', 'asdasdasd', 22, '', 'asdasd'),
(7, 80, 'asdasd', '2', 'asdasdasd', 22, '', 'asdasd'),
(8, 80, 'asdasd', '2', 'asdasd', 22, '', 'asdasd'),
(9, 80, 'sssssssssss', '2', 'asdasdasd', 22, '', 'asdasd'),
(10, 80, 'bbbbbbbb', '3', 'asdasd', 33, '', 'asdasd'),
(11, 80, 'nnnnnnnnn', '2', 'asdasd', 22, '', 'asdasd'),
(12, 80, 'asdasdasd', '4', 'asdasd', 55, '', 'asdasdsad'),
(13, 80, 'asdasd', '2', 'asdasdasd', 22, '', 'asdasd'),
(14, 80, 'bbbbbbbbb', '3', 'asdasd', 55, '', 'asasd'),
(15, 80, 'asdasd', '3', 'asdasd', 22, '', 'asdasd'),
(16, 80, '55555555', '2', 'asdasdasd', 22, '', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactno` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `CompanyName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `usertype`, `firstname`, `lastname`, `address`, `contactno`, `email`, `CompanyName`) VALUES
(1, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'El John', 'Rimando', 'naguilian', 32322230, 'darwinsese@gmail.com', ''),
(71, 'sample', '5e8ff9bf55ba3508199d22e984129be6', 2, 'qwer', 'qwer', 'qwer', 23442, 'qwer@asdasd.com', 'qwer'),
(72, 'eljohn', '3a8d40fc425a308b6df4f5c9fefefd8c', 2, 'el john', 'rimando', 'naguilian', 9232323, 'eljohn@yahoo.com', 'Asus'),
(73, 'asd', '7815696ecbf1c96e6894b779456d330e', 2, 'asd', 'asd', 'asd', 3434, 'asd@afaf.com', 'asd'),
(77, 'ligaya', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'Ligaya', 'Rimando', 'naguilian', 9323222, 'ligaya@ya.com', 'a4tech'),
(79, 'dmmmsu', '2abdcc44bd5dac2db4dba59f6d77aba9', 2, 'mabangis', 'free tuition', 'sfc', 34242423, 'sfsfsdfs@afad.com', 'dmmmsu'),
(80, 'idol', '416c15561452672c813fa844504d7ae6', 2, 'Idol', 'idol', 'adasd', 43343434, 'idol@asdas.com', 'samsung'),
(81, 'justin', '53dd9c6005f3cdfc5a69c5c07388016d', 2, 'justin', 'domingo', 'caba', 44343, 'justin@aa.com', 'Gotomme');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
