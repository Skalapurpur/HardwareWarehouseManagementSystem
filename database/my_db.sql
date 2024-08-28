-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 01:57 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(4, 'Steel'),
(5, 'Concrete'),
(6, 'Wood'),
(7, 'Stone');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `categoryid` int(1) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `productname`, `price`, `photo`) VALUES
(1, 0, 'adaptor universal omni wua 002', 50, ''),
(2, 0, 'aircon outlet omni wide series', 160, ''),
(3, 0, 'aircon outlet royu set wh901', 160, ''),
(4, 0, 'aircon tandem outlet omni wea-', 140, ''),
(5, 0, 'aleen key wrench set (c136)v', 180, ''),
(6, 0, 'allen key wrench set carlo hex', 150, ''),
(7, 0, 'allen key wrench set ph 10pcs', 180, ''),
(8, 0, 'allen key wrench set ph 7pcs (', 100, ''),
(9, 0, 'blind rivets box  1/8 x   1/2', 250, ''),
(10, 0, 'blind rivets box  1/8 x   1/2', 250, ''),
(11, 0, 'blind rivets box  5/32 x   1/2', 250, ''),
(12, 0, 'blind rivets box  5/32 x  3/4', 300, ''),
(13, 0, 'blind rivets box 3/16 x   1/2', 300, ''),
(14, 0, 'blue plug 1/2', 10, ''),
(15, 0, 'blue tee plain   1/2', 20, ''),
(16, 0, 'blue tee reducer  3/4 x 1/2', 35, ''),
(17, 0, 'box junction cover poly', 12, ''),
(18, 0, 'box junction poly', 30, ''),
(19, 0, 'boysen clear gloss laquer lit ', 175, ''),
(20, 0, 'boysen flatwall enamel gal', 660, ''),
(21, 0, 'boysen flexibond gal BS-7760', 750, ''),
(22, 0, 'boysen glazing putty gal white', 550, ''),
(23, 0, 'boysen glazing putty lit white', 165, ''),
(24, 0, 'boysen laquer primer surfacer ', 750, ''),
(25, 0, 'boysen roofguard pail baguio g', 2, ''),
(26, 0, 'boysen roofguard pail chocolat', 2, ''),
(27, 0, 'boysen roofguard pail pacific ', 2, ''),
(28, 0, 'boysen roofguard pail spanish ', 2, ''),
(29, 0, 'boysen roofguard pail spanish ', 2, ''),
(30, 0, 'boysen roofguard pail spanish ', 2, ''),
(31, 0, 'boysen roofguard pail spanish red  (16lits)', 2, ''),
(32, 0, 'boysen roofguard pail spanish red  (16lits)', 2300, ''),
(33, 0, 'clamp  orange  1/ 2 w/ nail', 2.5, ''),
(34, 0, 'clamp  orange  3/4 w/ nail', 3, ''),
(35, 0, 'classic  outlet universal omni weu200', 50, ''),
(36, 0, 'classic  outlet universal royu rco1', 45, ''),
(37, 0, 'drill bit masonry 4m ( 4.0mm) 5/32', 50, ''),
(38, 0, 'drill bit masonry 4m ( 5.0mm) 3/16', 55, ''),
(39, 0, 'drill bit masonry irwin ( 3.0mm) 1/8', 80, ''),
(40, 0, 'drill bit masonry irwin ( 5.0mm) 3/16', 95, ''),
(41, 0, 'drill bit masonry irwin ( 5.5mm) 7/32', 100, ''),
(42, 0, 'drill bit masonry ph ( 3.0mm) 1/8', 50, ''),
(43, 0, 'drill bit masonry ph ( 4.0mm) 5/32', 50, ''),
(44, 0, 'drill bit masonry ph ( 5.0mm) 3/16', 55, ''),
(45, 0, 'dual faucet 1/2 meco 2221', 640, ''),
(46, 0, 'dual faucet 1/2 meco 2222', 680, ''),
(47, 0, 'epoxy regular   1/4 pint', 130, ''),
(48, 0, 'epoxy regular  1/2 pint', 240, ''),
(49, 0, 'epoxy regular 1 pint', 430, ''),
(50, 0, 'epoxy regular quarts', 700, '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseid` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `total` double NOT NULL,
  `date_purchase` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchaseid`, `customer`, `total`, `date_purchase`) VALUES
(15, '1', 990, '2022-12-02 20:01:09'),
(16, '2', 960, '2022-12-02 20:33:59'),
(17, '3', 6055, '2022-12-02 20:38:57'),
(18, '4', 2160, '2022-12-02 20:39:51'),
(19, '5', 700, '2022-12-02 20:40:17'),
(20, '6', 2320, '2022-12-02 20:40:32'),
(21, '7', 330, '2022-12-02 20:41:08'),
(22, '8', 250, '2022-12-02 20:41:31'),
(23, '9', 270, '2022-12-02 20:43:46'),
(24, '10', 1320, '2022-12-02 20:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `pdid` int(11) NOT NULL,
  `purchaseid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_detail`
--

INSERT INTO `purchase_detail` (`pdid`, `purchaseid`, `productid`, `quantity`) VALUES
(13, 8, 15, 2),
(14, 8, 17, 2),
(15, 8, 18, 2),
(16, 9, 15, 2),
(17, 9, 14, 2),
(18, 9, 17, 4),
(19, 9, 16, 1),
(20, 9, 20, 1),
(21, 9, 19, 1),
(22, 9, 18, 1),
(23, 10, 15, 1),
(24, 10, 14, 10),
(25, 10, 17, 1),
(26, 10, 16, 10),
(27, 10, 20, 1),
(28, 10, 19, 1),
(29, 10, 18, 1),
(30, 12, 15, 2),
(31, 12, 14, 1),
(32, 13, 23, 1),
(33, 13, 14, 1),
(34, 14, 24, 1),
(35, 14, 23, 1),
(36, 15, 1, 1),
(37, 15, 2, 2),
(38, 15, 3, 3),
(39, 15, 4, 1),
(40, 16, 14, 10),
(41, 16, 15, 10),
(42, 16, 20, 1),
(43, 17, 32, 2),
(44, 17, 40, 1),
(45, 17, 46, 2),
(46, 18, 20, 1),
(47, 18, 21, 2),
(48, 19, 50, 1),
(49, 20, 31, 10),
(50, 20, 32, 1),
(51, 21, 5, 1),
(52, 21, 6, 1),
(53, 22, 33, 100),
(54, 23, 38, 2),
(55, 23, 39, 2),
(56, 24, 45, 1),
(57, 24, 46, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseid`);

--
-- Indexes for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD PRIMARY KEY (`pdid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  MODIFY `pdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
