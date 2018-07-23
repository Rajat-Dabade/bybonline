-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 10:01 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bake`
--

-- --------------------------------------------------------

--
-- Table structure for table `bread`
--

CREATE TABLE `bread` (
  `product_Id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `image` varchar(45) NOT NULL,
  `shape` varchar(45) NOT NULL,
  `price` decimal(40,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `product_Id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `image` blob NOT NULL,
  `weight` decimal(40,0) NOT NULL,
  `price` decimal(40,0) NOT NULL,
  `shape` varchar(45) NOT NULL,
  `sugarFree` varchar(45) NOT NULL,
  `veg` varchar(45) NOT NULL,
  `ingredients` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `category_description` varchar(100) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `image`, `category_name`, `category_description`, `active`) VALUES
(12, 'http://dummyimage.com/141x151.png/dddddd/000000', 'Maserati', 'Quattroporte', 0),
(14, 'http://dummyimage.com/137x234.jpg/ff4444/ffffff', 'Suzuki', 'Reno', 0),
(15, 'http://dummyimage.com/204x203.png/cc0000/ffffff', 'Mazda', 'Mazda6', 0),
(17, 'http://dummyimage.com/134x169.jpg/cc0000/ffffff', 'Suzuki', 'SJ', 0),
(18, 'http://dummyimage.com/162x220.bmp/cc0000/ffffff', 'Ferrari', 'Petrol', 0),
(19, 'http://dummyimage.com/187x171.png/cc0000/ffffff', 'Chevrolet', 'Camaro', 0),
(20, 'http://dummyimage.com/123x135.jpg/5fa2dd/ffffff', 'Mazda', 'B-Series Plus', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `co_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `about_us` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`co_id`, `address`, `contact`, `about_us`) VALUES
(1, 'Jayanagar 9<sup>th</sup> BLock,Bangalore', '9724320153', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.');

-- --------------------------------------------------------

--
-- Table structure for table `cookies`
--

CREATE TABLE `cookies` (
  `product_Id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `image` blob NOT NULL,
  `ingredients` varchar(45) NOT NULL,
  `price` decimal(40,0) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offer_id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderd_item`
--

CREATE TABLE `orderd_item` (
  `item_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_Id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `purchase_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `purchase_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `customer_name` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `pincode` int(11) NOT NULL,
  `mobile_number` decimal(10,0) NOT NULL,
  `cake_message` varchar(30) NOT NULL,
  `google_maps` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pastries`
--

CREATE TABLE `pastries` (
  `product_Id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `image` varchar(45) NOT NULL,
  `ingredients` varchar(45) NOT NULL,
  `veg` varchar(45) NOT NULL,
  `price` decimal(40,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pastries`
--

INSERT INTO `pastries` (`product_Id`, `name`, `image`, `ingredients`, `veg`, `price`) VALUES
(1, 'First pastry', 'images/pastrie/pastry1.jpg', 'value', 'No', '300'),
(2, 'Second pastry', 'images/pastrie/pastry2.jpg', 'value', 'Yes', '500'),
(3, 'Third Pastry', 'images/pastrie/pastry3.jpg', 'value', 'No', '400'),
(4, 'Forth Pastry', 'images/pastrie/pastry1.jpg', 'value', 'Yes', '350');

-- --------------------------------------------------------

--
-- Table structure for table `special_cake`
--

CREATE TABLE `special_cake` (
  `treat_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `veg` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `entity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bread`
--
ALTER TABLE `bread`
  ADD PRIMARY KEY (`product_Id`);

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`product_Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `cookies`
--
ALTER TABLE `cookies`
  ADD PRIMARY KEY (`product_Id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `orderd_item`
--
ALTER TABLE `orderd_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`purchase_id`,`user_id`);

--
-- Indexes for table `pastries`
--
ALTER TABLE `pastries`
  ADD PRIMARY KEY (`product_Id`);

--
-- Indexes for table `special_cake`
--
ALTER TABLE `special_cake`
  ADD PRIMARY KEY (`treat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bread`
--
ALTER TABLE `bread`
  MODIFY `product_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `product_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cookies`
--
ALTER TABLE `cookies`
  MODIFY `product_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pastries`
--
ALTER TABLE `pastries`
  MODIFY `product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
