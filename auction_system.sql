-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 07:25 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(200) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Name`) VALUES
(1, 'Cloths'),
(2, 'Electicals'),
(3, 'Footwear'),
(4, 'Utensils'),
(5, 'Mobiles');

-- --------------------------------------------------------

--
-- Table structure for table `newbid`
--

CREATE TABLE `newbid` (
  `ID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `bid_amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newbid`
--

INSERT INTO `newbid` (`ID`, `PID`, `SID`, `UID`, `bid_amt`) VALUES
(1, 1, 1, 4, 21000),
(2, 1, 1, 3, 20100),
(3, 1, 1, 2, 22000);

-- --------------------------------------------------------

--
-- Table structure for table `new_product`
--

CREATE TABLE `new_product` (
  `ID` int(11) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `PPrice` int(11) NOT NULL,
  `No_of_days` varchar(200) NOT NULL,
  `SID` int(11) NOT NULL,
  `scat_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_product`
--

INSERT INTO `new_product` (`ID`, `category_id`, `Name`, `PPrice`, `No_of_days`, `SID`, `scat_id`, `image`) VALUES
(1, '2', 'LG', 20000, '2022-03-25 00:00:00', 1, 8, 'upload/1_Newproduct.png'),
(2, '1', 'Shirt', 500, '2022-03-03 00:00:00', 1, 11, 'upload/2_Newproduct.png'),
(3, '3', 'Shooes', 600, '2022-02-08 03:34:00', 1, 2, 'upload/3_Newproduct.png'),
(4, '1', 'Suit', 500, '2022-06-06 08:45:00', 1, 10, 'upload/4_Newproduct.png'),
(6, '5', 'M32', 30000, '05-03-2022 06:10 pm', 2, 9, 'upload/5_Newproduct.png'),
(7, '3', 'Sports shooes', 600, '27-05-2022 06:24 pm', 2, 2, 'upload/7_Newproduct.png'),
(8, '1', 'Punjabi suit', 1200, '20-04-2022 06:29 pm', 2, 10, 'upload/8_Newproduct.png'),
(9, '2', 'Apple', 50000, '06-07-2022 06:30 pm', 2, 5, 'upload/9_Newproduct.png'),
(10, '3', 'Fancy-Ladies-footwear ', 1500, '20-04-2022 06:36 pm', 2, 4, 'upload/10_Newproduct.png');

-- --------------------------------------------------------

--
-- Table structure for table `oldbid`
--

CREATE TABLE `oldbid` (
  `ID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `bid_amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oldbid`
--

INSERT INTO `oldbid` (`ID`, `PID`, `SID`, `UID`, `bid_amt`) VALUES
(1, 1, 2, 1, 21500),
(2, 3, 1, 3, 13000),
(3, 6, 1, 4, 500),
(4, 8, 2, 2, 600);

-- --------------------------------------------------------

--
-- Table structure for table `old_product`
--

CREATE TABLE `old_product` (
  `ID` int(11) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `OPrice` int(11) NOT NULL,
  `SPrice` int(11) NOT NULL,
  `No_of_days` varchar(200) NOT NULL,
  `SID` int(11) NOT NULL,
  `scat_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `old_product`
--

INSERT INTO `old_product` (`ID`, `category_id`, `Name`, `OPrice`, `SPrice`, `No_of_days`, `SID`, `scat_id`, `image`) VALUES
(1, '2', 'Airtel', 20000, 20500, '2022-02-01 00:00:00', 2, 8, 'upload/1_Oldproduct.png'),
(2, '3', 'Sandle', 500, 600, '2022-03-25 00:00:00', 2, 4, 'upload/2_Oldproduct.png'),
(3, '5', 'Tab', 10000, 13000, '2022-02-21 00:00:00', 1, 3, 'upload/3_Oldproduct.png'),
(4, '1', 'Frock', 600, 670, '2022-03-02 00:00:00', 1, 10, 'upload/4_Oldproduct.png'),
(5, '1', 'T-shirt', 700, 800, '2022-04-12 05:09:00', 1, 11, 'upload/5_Oldproduct.png'),
(6, '1', 'Saree', 400, 500, '2022-8-25 07:05:00', 1, 1, 'upload/6_Oldproduct.png'),
(7, '3', 'shooes', 700, 780, '2022-05-20 2:05:00', 2, 2, 'upload/7_Oldproduct.png'),
(8, '1', 'ladies suit', 500, 570, '2022-01-01 6:41 PM', 2, 10, 'upload/8_Oldproduct.png');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `MOBILE` bigint(20) NOT NULL,
  `EMAIL` varchar(70) NOT NULL,
  `ADDRESS` varchar(200) NOT NULL,
  `AADHARNO` bigint(20) NOT NULL,
  `USERNAME` varchar(200) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`ID`, `NAME`, `MOBILE`, `EMAIL`, `ADDRESS`, `AADHARNO`, `USERNAME`, `PASSWORD`, `status`, `image`) VALUES
(1, 'Vaishnavi', 7410747549, 'v@gmail.com', 'Latur\r\n                        ', 356864654875, 'vaishnavi', 'vaishnavi', 'appr', 'upload/1_seller.png'),
(2, 'Chetana', 7774001442, 'c@gmail.com', 'latur', 123456789120, 'chetana ', 'chetana ', 'appr', 'upload/2_seller.png'),
(3, 'Ganesh ', 9689171618, 'g@gmail.com', 'Pune', 165368633556, 'ganesh', 'ganesh', 'dis', 'upload/3_seller.png'),
(4, 'qq', 33333333, 'qq2@gmail.com', 'ppp', 6666666, 'qq', 'qq', 'dis', 'upload/4_seller.png');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `ID` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory` varchar(200) NOT NULL,
  `SID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`ID`, `category_id`, `subcategory`, `SID`) VALUES
(1, 1, 'Sari', 2),
(2, 3, 'Shooes', 1),
(3, 5, 'Oppo', 1),
(4, 3, 'Sandle', 1),
(5, 2, 'laptop', 1),
(6, 2, 'Tabs', 1),
(7, 2, 'Fan', 1),
(8, 2, 'TV', 1),
(9, 5, 'Samsung', 2),
(10, 1, 'Dress', 1),
(11, 1, 'Mens wear', 1),
(12, 1, 'childrens wear', 1),
(13, 5, 'Redmi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`ID`, `Name`, `Email`, `Mobile`, `Username`, `Password`, `image`) VALUES
(1, 'Rohini Biradar', 'rohini@gmail.com', 9856147232, 'r@123', '123', 'upload/1_user.png'),
(2, 'Prachi Patil', 'patil@gmail.com', 7458321058, 'p@234', '234', 'upload/2_user.png'),
(3, 'Rahul Jadhav ', 'rj@gmail.com', 8851472310, 'rj@345', '345', 'upload/3_user.png'),
(4, 'Rakesh Sharma', 'rk@gmail.com', 9231657844, 'rk@456', '456', 'upload/4_user.png'),
(5, 'Gauri Gaikawad', 'gg@gmail.com', 8452631047, 'gg', 'gg', 'upload/5_user.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `newbid`
--
ALTER TABLE `newbid`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `new_product`
--
ALTER TABLE `new_product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `oldbid`
--
ALTER TABLE `oldbid`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `old_product`
--
ALTER TABLE `old_product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `newbid`
--
ALTER TABLE `newbid`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `new_product`
--
ALTER TABLE `new_product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `oldbid`
--
ALTER TABLE `oldbid`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `old_product`
--
ALTER TABLE `old_product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
