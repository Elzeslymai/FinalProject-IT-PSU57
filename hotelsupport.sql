-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2017 at 11:14 PM
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

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`order_id`, `U_id`, `date`, `status`, `Supply_name`, `invoiceNo`) VALUES
(2, '15', '11-21-17', 'Complete', 'SupplySupport', '0000051'),
(3, '15', '11-21-17', 'Complete', 'Elzeslymai', '0000050'),
(4, '15', '11-21-17', 'Order Preparation', 'PhuketOrganic', '0000049'),
(5, '15', '11-21-17', 'Cancle', 'Elzeslymai', '0000054'),
(6, '15', '11-21-17', 'Shipment', 'PhuketOrganic', '0000053'),
(7, '15', '11-21-17', 'Accept', 'SupplySupport', '0000052'),
(8, '13', '11-21-17', 'Wait for Accept', 'PhuketOrganic', '0000057'),
(9, '13', '11-21-17', 'Complete', 'Elzeslymai', '0000056'),
(10, '13', '11-21-17', 'Wait for Accept', 'SupplySupport', '0000055'),
(11, '15', '12-10-17', 'Wait for Accept', 'PhuketOrganic', '0000058'),
(12, '15', '12-10-17', 'Wait for Accept', 'SupplySupport', '0000060'),
(13, '15', '12-10-17', 'Order Preparation', 'Elzeslymai11', '0000059'),
(14, '15', '12-10-17', 'Accept', 'Elzeslymai11', '0000061'),
(15, '13', '12-10-17', 'Complete', 'Elzeslymai11', '0000062'),
(16, '13', '12-10-17', 'Cancle', 'Elzeslymai11', '0000063'),
(17, '13', '12-10-17', 'Wait for Accept', 'Elzeslymai11', '0000064');

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
(6, '14', 'SupplySupport', 'Fish meà¸Ÿt', 'meat', 'C', '250', 'à¹€à¸™à¸·à¹‰à¸­à¸›à¸¥à¸²à¸ªà¸”à¸ˆà¸²à¸à¹‚à¸£à¸‡à¸‡à¸²à¸™ à¸„à¸¸à¸“à¸ à¸²à¸žà¸”à¸µ', '3', '2%', '17-08-26', '14banner1.jpg'),
(5, '14', 'SupplySupport', 'Salmon meat', 'meat', 'A', '250', 'à¹€à¸™à¸·à¹‰à¸­à¸›à¸¥à¸²à¹à¸‹à¸¥à¸¡à¹ˆà¸­à¸™à¸„à¸¸à¸“à¸ à¸²à¸ž à¹€à¸à¸£à¸” A ', '3', '2%', '17-08-26', '14banner2.jpg'),
(7, '14', 'SupplySupport', 'canned Fish', 'canned food', 'other', '20', 'à¹€à¸™à¸·à¹‰à¸­à¸›à¸¥à¸²à¹à¸‹à¸¥à¸¡à¹ˆà¸­à¸™à¸„à¸¸à¸“à¸ à¸²à¸ž à¹€à¸à¸£à¸” à¹€à¸­', '3', '2%', '17-08-26', '14banner1.jpg'),
(12, '16', 'PhuketOrganic', 'à¸›à¸¥à¸²à¸à¸£à¸°à¸›à¹‹à¸­à¸‡', 'canned food', 'other', '15', 'à¹€à¸™à¸·à¹‰à¸­à¸›à¸¥à¸²à¸šà¸£à¸£à¸ˆà¸¸à¸à¸£à¸°à¸›à¹‹à¸­à¸‡', '2', '2%', '17-08-26', '16banner1.jpg'),
(14, '14', 'SupplySupport', 'Salmon meat', 'meat', 'A', '250', 'à¹€à¸™à¸·à¹‰à¸­à¸›à¸¥à¸²à¹à¸‹à¸¥à¸¡à¹ˆà¸­à¸™à¸„à¸¸à¸“à¸ à¸²à¸ž à¹€à¸à¸£à¸” A ', '3', '2%', '17-08-26', '14banner2.jpg'),
(15, '16', 'PhuketOrganic', 'à¸›à¸¥à¸²à¸à¸£à¸°à¸›à¹‹à¸­à¸‡', 'canned food', 'other', '15', 'à¹€à¸™à¸·à¹‰à¸­à¸›à¸¥à¸²à¸šà¸£à¸£à¸ˆà¸¸à¸à¸£à¸°à¸›à¹‹à¸­à¸‡', '2', '2%', '17-08-26', '16banner2.jpg'),
(16, '14', 'SupplySupport', 'Fish meà¸Ÿt', 'meat', 'C', '250', 'à¹€à¸™à¸·à¹‰à¸­à¸›à¸¥à¸²à¸ªà¸”à¸ˆà¸²à¸à¹‚à¸£à¸‡à¸‡à¸²à¸™ à¸„à¸¸à¸“à¸ à¸²à¸žà¸”à¸µ', '3', '2%', '17-08-26', '14banner1.jpg'),
(17, '14', 'SupplySupport', 'Salmon meat', 'meat', 'A', '250', 'à¹€à¸™à¸·à¹‰à¸­à¸›à¸¥à¸²à¹à¸‹à¸¥à¸¡à¹ˆà¸­à¸™à¸„à¸¸à¸“à¸ à¸²à¸ž à¹€à¸à¸£à¸” A ', '3', '2%', '17-08-26', '14banner2.jpg'),
(18, '14', 'SupplySupport', 'canned Fish', 'canned food', 'other', '20', 'à¹€à¸™à¸·à¹‰à¸­à¸›à¸¥à¸²à¹à¸‹à¸¥à¸¡à¹ˆà¸­à¸™à¸„à¸¸à¸“à¸ à¸²à¸ž à¹€à¸à¸£à¸” à¹€à¸­', '3', '2%', '17-08-26', '14banner1.jpg'),
(19, '16', 'Phuketorganic', 'à¸›à¸¥à¸²à¸à¸£à¸°à¸›à¹‹à¸­à¸‡', 'canned food', 'other', '15', 'à¹€à¸™à¸·à¹‰à¸­à¸›à¸¥à¸²à¸šà¸£à¸£à¸ˆà¸¸à¸à¸£à¸°à¸›à¹‹à¸­à¸‡', '2', '2%', '17-08-26', '16banner1.jpg'),
(20, '14', 'SupplySupport', 'Salmon meat', 'meat', 'A', '250', 'à¹€à¸™à¸·à¹‰à¸­à¸›à¸¥à¸²à¹à¸‹à¸¥à¸¡à¹ˆà¸­à¸™à¸„à¸¸à¸“à¸ à¸²à¸ž à¹€à¸à¸£à¸” A ', '3', '2%', '17-08-26', '14banner2.jpg'),
(21, '16', 'PhuketOrganic', 'à¸›à¸¥à¸²à¸à¸£à¸°à¸›à¹‹à¸­à¸‡', 'canned food', 'other', '15', 'à¹€à¸™à¸·à¹‰à¸­à¸›à¸¥à¸²à¸šà¸£à¸£à¸ˆà¸¸à¸à¸£à¸°à¸›à¹‹à¸­à¸‡', '2', '2%', '17-08-26', '16banner2.jpg'),
(24, '17', 'Elzeslymai11', 'testtesttest', 'fruit', 'A', '1111', 'testtesttest', '2', '2', '17-12-10', '17123.png'),
(25, '17', 'Elzeslymai11', 'beef', 'meat', 'B', '500', 'à¹€à¸™à¸·à¹‰à¸­à¹‚à¸„à¸‚à¸¸à¸™', '1', '2', '17-12-10', '17rib-eye.jpg'),
(26, '17', 'Elzeslymai11', 'Dolly Fish', 'meat', 'B', '50', 'à¹€à¸™à¸·à¹‰à¸­à¸›à¸¥à¸²à¸”à¸­à¸¥à¸¥à¸µà¹ˆ', '2', '2', '17-12-10', '17maxresdefault.jpg');

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
  `Date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_id`, `U_company_name`, `U_username`, `U_password`, `U_type`, `U_email`, `U_address`, `U_tell`, `Date`) VALUES
(17, 'Elzeslymai11', '111', '111', 'Supply', 'champ_psu@outlook.co.th', '142/56 à¸žà¸¤à¸©à¸²à¸§à¸´à¸§ à¸à¸°à¸—à¸¹à¹‰ à¸›à¹ˆà¸²à¸•à¸­à¸‡ à¸ à¸¹à¹€à¸à¹‡à¸•1', '0945966225', '17-11-19'),
(16, 'PhuketOrganic', '1234', '1234', 'Supply', 'test@test.com', 'test', '0945966225', '25/10/2560'),
(15, 'TestView1', '123', '123', 'Hotel', 'champ_psu@outlook.co.th', '142/56 à¸žà¸¤à¸©à¸²à¸§à¸´à¸§ à¸à¸°à¸—à¸¹à¹‰ à¸›à¹ˆà¸²à¸•à¸­à¸‡ à¸ à¸¹à¹€à¸à¹‡à¸•', '0945966225', '17-10-01'),
(13, 'HotelSupport', 'Hotel', '123', 'Hotel', 'test@test.com', '9/4 M.3 T.songprag A.muang Phuket 82000', '0945966225', '17-08-17'),
(14, 'SupplySupport', 'Supply', '123', 'Supply', 'supply@sypply.com', '9/4 M.3 T.songprag A.muang Phuket 82000', '0945966225', '17-08-17'),
(12, 'AdminSupport', 'Admin', 'Elzeslyma1', 'Admin', 'champ_psu@outlook.co.th', '142/56 à¸žà¸¤à¸©à¸²à¸§à¸´à¸§ à¸à¸°à¸—à¸¹à¹‰ à¸›à¹ˆà¸²à¸•à¸­à¸‡ à¸ à¸¹à¹€à¸à¹‡à¸• 83000', '0945966225', '17-08-17');

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
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `P_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `U_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
