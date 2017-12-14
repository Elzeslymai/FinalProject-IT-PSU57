-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 08:03 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelsupport`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `U_id` varchar(10) NOT NULL,
  `Supply_name` varchar(100) NOT NULL,
  `P_id` varchar(10) NOT NULL,
  `P_name` varchar(100) NOT NULL,
  `P_grad` varchar(10) NOT NULL,
  `P_price` varchar(50) NOT NULL,
  `P_fee` varchar(10) NOT NULL,
  `C_qty` varchar(20) NOT NULL,
  `Pick_up_date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(20) NOT NULL,
  `U_id` varchar(20) NOT NULL,
  `Supply_name` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `Pick_up_date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(20) NOT NULL,
  `invoice_id` varchar(20) NOT NULL,
  `U_id` varchar(20) NOT NULL,
  `P_id` varchar(20) NOT NULL,
  `P_name` varchar(100) NOT NULL,
  `P_grade` varchar(10) NOT NULL,
  `P_price` varchar(20) NOT NULL,
  `Quantity` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `order_id` int(10) NOT NULL,
  `U_id` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `Supply_name` varchar(50) NOT NULL,
  `invoiceNo` varchar(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `P_id` int(20) NOT NULL,
  `U_id` varchar(10) NOT NULL,
  `U_company_name` varchar(100) NOT NULL,
  `P_name` varchar(200) NOT NULL,
  `P_catagories` varchar(20) NOT NULL,
  `P_grade` varchar(5) NOT NULL,
  `P_price` varchar(20) NOT NULL,
  `P_detail` varchar(200) NOT NULL,
  `P_time_to_shipment` varchar(5) NOT NULL,
  `P_fee` varchar(10) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `P_filename` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`P_id`, `U_id`, `U_company_name`, `P_name`, `P_catagories`, `P_grade`, `P_price`, `P_detail`, `P_time_to_shipment`, `P_fee`, `Date`, `P_filename`) VALUES
(28, '29', 'PhuketOrganic', 'Pork Meat', 'meat', 'A', '120', 'à¹€à¸™à¸·à¹‰à¸­à¸«à¸¡à¸¹à¸ªà¸±à¸™à¸™à¸­à¸ à¹€à¸à¸£à¸” A', '2', '2', '17-12-14', '296.jpg'),
(29, '29', 'PhuketOrganic', 'streaky pork', 'meat', 'A', '150', 'à¸«à¸¡à¸¹à¸ªà¸²à¸¡à¸Šà¸±à¹‰à¸™ à¸„à¸¸à¸“à¸ à¸²à¸žà¸”à¸µ', '2', '2', '17-12-14', '297.jpg'),
(30, '29', 'PhuketOrganic', 'Hock Leg Pork', 'meat', 'C', '250', 'à¸‚à¸²à¸«à¸¥à¸±à¸‡à¸«à¸¡à¸¹', '2', '2', '17-12-14', '298.jpg'),
(31, '31', 'FarangFoodPhuket', 'Broccoli', 'vegetable', 'C', '50', 'Broccoli', '1', '2', '17-12-14', '316106.png'),
(32, '31', 'FarangFoodPhuket', 'Lettuce', 'vegetable', 'A', '45', 'Lettuce', '1', '1', '17-12-14', '311461754024.png'),
(33, '31', 'FarangFoodPhuket', 'Carottes', 'vegetable', 'A', '70', 'Carottes', '1', '1', '17-12-14', '31carottes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_id` int(10) NOT NULL,
  `U_company_name` varchar(40) NOT NULL,
  `U_username` varchar(20) NOT NULL,
  `U_password` varchar(20) NOT NULL,
  `U_type` varchar(20) NOT NULL,
  `U_email` varchar(40) NOT NULL,
  `U_address` varchar(150) NOT NULL,
  `U_tell` varchar(10) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `U_filename` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_id`, `U_company_name`, `U_username`, `U_password`, `U_type`, `U_email`, `U_address`, `U_tell`, `Date`, `U_filename`) VALUES
(29, 'PhuketOrganic', '111', '111', 'Supply', 'champ_psu@outlook.co.th', '89/7 Moo 3 Sisoonthorn Road, Sisoonthorn, Thalang, 83110', '0945966225', '17-12-14', '12organic-phuket.jpg'),
(12, 'AdminSupport', 'Admin', 'admin', 'Admin', 'champ_psu@outlook.co.th', '142/56 à¸žà¸¤à¸©à¸²à¸§à¸´à¸§ à¸à¸°à¸—à¸¹à¹‰ à¸›à¹ˆà¸²à¸•à¸­à¸‡ à¸ à¸¹à¹€à¸à¹‡à¸• 83000', '0945966225', '17-08-17', ''),
(31, 'FarangFoodPhuket', '222', '222', 'Supply', 'champ_psu@outlook.co.th', '99/33-34 Moo 1, Billion Plaza, T Kathu, A. Kathu Phuket 83120 THAILAND', '0945966225', '17-12-14', '30Farangr.jpg'),
(30, 'NW Phuket', '000', '000', 'Admin', 'champ_psu@outlook.co.th', 'DCondo Kathu Phuket', '0945966225', '17-12-14', '12nw.jpg'),
(28, 'GoldenBeach', '333', '333', 'Hotel', 'champ_psu@outlook.co.th', '254 Moo2, T.Ao-Nang, Muang, Krabi, 81000 Thailand', '0945966225', '17-12-14', '12logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `P_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `U_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
