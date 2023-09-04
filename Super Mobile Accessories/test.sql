-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 04:08 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactusform`
--

CREATE TABLE `contactusform` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactusform`
--

INSERT INTO `contactusform` (`ID`, `Fname`, `Lname`, `Contact`, `Email`, `Message`) VALUES
(1, '', '', '0300-0000001', 'rasikhali@superior.edu.pk', ''),
(25, 'Rasikh', 'Ali', '0300-0000001', 'rasikhali@superior.edu.pk', 'Testing 24. with addslashes'),
(26, 'Rasikh', 'Ali', '0300-0000001', 'rasikhali@superior.edu.pk', 'Testing 25. without addslashes'),
(28, 'Rasikh', 'Ali', '0300-0000001', 'rasikhali@superior.edu.pk', 'Testing 28, with \'addslashes\'');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` varchar(11) NOT NULL,
  `Product_Name` varchar(150) NOT NULL,
  `Product_Description` varchar(400) NOT NULL,
  `Product_Price` int(11) NOT NULL,
  `Product_No` varchar(150) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Product_Name`, `Product_Description`, `Product_Price`, `Product_No`) VALUES
('GC0001', 'Glitter Mobile Case', 'First time introducing Glitter Mobile Case ', 500, 'Product2'),
('GC0002', 'Covers & Socket', 'First time introducing Covers & Socket', 550, 'Product3'),
('GC0003', '360 Rubber Case', 'First time introducing 360 Rubber Case ', 400, 'Product4'),
('GC0004', 'Glitter Girly Case', 'First time introducing Glitter Girly Case ', 520, 'Product5'),
('GC0005', '\"I <3 Paris\" Case', 'First time introducing \"I <3 Paris\" Case', 700, 'Product6'),
('GC0006', 'Glitter Smiley Case', 'First time introducing Glitter Smiley Case', 600, 'Product7'),
('GC0007', 'Guitar Barbie Case', 'First time introducing Guitar Barbie Case', 300, 'Product8'),
('P00001', 'Glowing Protector', 'First time introducing Glowing Glass protector', 710, 'Product1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Email`, `Password`, `role`) VALUES
(1, 'bsem-f19-060@superior.edu.pk', 'admin123', 1),
(4, 'bsem-f19-062@superior.edu.pk', 'user123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactusform`
--
ALTER TABLE `contactusform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactusform`
--
ALTER TABLE `contactusform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
