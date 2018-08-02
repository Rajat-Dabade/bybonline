-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 03:42 PM
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

--
-- Dumping data for table `bread`
--

INSERT INTO `bread` (`product_Id`, `name`, `image`, `shape`, `price`) VALUES
(1, 'First Bread Nice', 'images/bread/bread1.jpg', 'rectangle', '300'),
(2, 'Second Bread nice', 'images/bread/bread2.jpg', 'circle', '200'),
(3, 'Third Bread', 'images/bread/bread3.jpg', 'square', '200'),
(4, 'Fourth Bread', 'images/bread/bread1.jpg', 'heart', '100'),
(5, 'Fifty Bread', 'images/bread/bread3.jpg', 'circle', '300'),
(6, 'final', 'images/bread/3.jpg', 'round', '300'),
(8, 'bhushan', 'images/bread/6.jpg', 'circle', '400');

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `product_Id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `image` varchar(500) NOT NULL,
  `weight` decimal(40,0) NOT NULL,
  `price` decimal(40,0) NOT NULL,
  `shape` varchar(45) NOT NULL,
  `sugarFree` varchar(45) NOT NULL,
  `veg` varchar(45) NOT NULL,
  `ingredients` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`product_Id`, `name`, `image`, `weight`, `price`, `shape`, `sugarFree`, `veg`, `ingredients`) VALUES
(3, 'Third Cake Nice', 'images/cake/cake1.png', '1', '550', 'circle', 'yes', 'yes', 'value'),
(4, 'First Cake', 'images/cake/cake2.jpg', '2', '650', 'heart', 'Yes', 'No', 'value'),
(5, 'First Cake', 'images/cake/cake5.jpg', '3', '750', 'circle', 'No', 'Yes', 'value'),
(6, 'Second Cake', 'images/cake/cake3.jpg', '2', '450', 'square', 'No', 'No', 'value'),
(7, 'Fifty Cake', 'images/cake/cake1.png', '3', '300', 'circle', 'Yes', 'Yes', 'value'),
(8, 'Sixth Cake', 'images/cake/cake1.png', '2', '500', 'circle', 'Yes', 'Yes', 'value');

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
(20, 'http://dummyimage.com/123x135.jpg/5fa2dd/ffffff', 'Mazda', 'B-Series Plus', 0),
(21, 'http://dummyimage.com/134x169.jpg/cc0000/ffffff', 'cake', 'Cake is all about sweet and the creativity', 1),
(22, 'http://dummyimage.com/162x220.bmp/cc0000/ffffff', 'bread', 'bread is the most fjaskdlfjaksljf jfkasd fjkals fjasklf askjldf asjdf asdjfksa fjksa fdjas', 1),
(23, 'http://dummyimage.com/162x220.bmp/cc0000/ffffff', 'cookie', 'jafkdsjfkalsjfkasl;j fasjf askl dfjas dfjkas fjkas fjksa fjsa fjask fjklas f', 1),
(24, 'http://dummyimage.com/162x220.bmp/cc0000/ffffff', 'pastry', 'afjdkalsfjk afjas dfjas fjkas fdjaskl fjaskf asjf asjkf asjf asjf asfja sfas ', 1);

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
(1, 'Location on the earth', '9168732292', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.');

-- --------------------------------------------------------

--
-- Table structure for table `cookies`
--

CREATE TABLE `cookies` (
  `product_Id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ingredients` varchar(45) NOT NULL,
  `price` decimal(40,0) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cookies`
--

INSERT INTO `cookies` (`product_Id`, `name`, `image`, `ingredients`, `price`, `weight`) VALUES
(1, 'First Cookie Nice', 'images/cookie/cookies.jpg', 'value', '300', 2),
(2, 'Second Cookies', 'images/cookie/cookies2.jpg', 'value', '200', 1),
(3, 'Third Cookie', 'images/cookie/cookies3.jpg', 'value', '100', 2),
(4, 'Forth Cookie', 'images/cookie/cookies4.jpg', 'value', '250', 3),
(5, 'Fifty Cookie', 'images/cookie/cookies5.jpg', 'value', '450', 4),
(6, 'Sixty Cookie', 'images/cookie/cookies6.jpg', 'value', '300', 2),
(7, 'final cookies', 'images/cookie/77.jpg', 'value', '400', 0);

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

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offer_id`, `heading`, `description`, `image`) VALUES
(1, 'Chicken Jumbo pack lorem', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'images/offers/p1.jpg'),
(2, 'Crab Combo pack lorem', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'images/offers/p2.jpg'),
(3, 'Olister Combo pack lorem', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'images/offers/p1.jpg'),
(4, 'Crab Combo pack lorem', 'This is the description of this product. This is ', 'images/offers/p2.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `orderd_item`
--

CREATE TABLE `orderd_item` (
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_Id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderd_item`
--

INSERT INTO `orderd_item` (`item_id`, `user_id`, `purchase_id`, `category_id`, `product_Id`, `quantity`, `total_price`) VALUES
(17, 28, 85, 23, 2, 1, 0),
(16, 28, 18, 21, 3, 1, 550),
(6, 26, 100, 21, 5, 1, 0),
(10, 21, 53, 21, 4, 1, 0),
(9, 27, 51, 21, 4, 1, 0),
(13, 21, 64, 21, 6, 1, 450);

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

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`purchase_id`, `user_id`, `purchase_time`, `customer_name`, `address`, `pincode`, `mobile_number`, `cake_message`, `google_maps`) VALUES
(55, 21, '2018-08-01 19:04:38', 'rajat', 'Deoli Rood, Samta Nagara', 442001, '9168732292', 'Happy Birthday Shahrukh', ' '),
(20, 21, '2018-08-01 19:08:20', 'rajat', 'Deoli Rood, Samta Nagara', 442001, '9168732292', 'Happy Birthday Shahrukh', ' '),
(65, 21, '2018-08-01 19:08:45', 'rajat', 'Deoli Rood, Samta Nagara', 442001, '9168732292', 'Happy Birthday Shahrukh', ' '),
(35, 21, '2018-08-01 19:09:01', 'rajat', 'Deoli Rood, Samta Nagara', 442001, '9168732292', 'Happy Birthday Shahrukh', ' '),
(66, 21, '2018-08-01 19:23:25', 'rajat', 'Deoli Rood, Samta Nagara', 442001, '9168732292', 'this is pastry', ' '),
(81, 21, '2018-08-01 19:23:40', 'rajat', 'Deoli Rood, Samta Nagara', 442001, '9168732292', 'rajat', ' '),
(24, 28, '2018-08-01 19:30:13', 'bhus', 'va', 123123, '9999999999', 'safsg', ' '),
(68, 28, '2018-08-01 19:35:03', 'bhus', 'Deoli Rood, Samta Nagara', 442001, '9168732292', 'this is pastry', ' ');

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
(1, 'First pastry Nice', 'images/pastrie/pastry1.jpg', 'value', 'no', '300'),
(2, 'Second pastry', 'images/pastrie/pastry2.jpg', 'value', 'yes', '500'),
(5, 'final pasrty', 'images/pastrie/3.jpg', 'vlaue', 'Yes', '400');

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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `password`, `entity`) VALUES
(21, 'rajat', 'rajat@live.com', '8788805097', 'd2ff3b88d34705e01d150c21fa7bde07', 100),
(22, 'Bhushan ', 'bhushan@live.com', '87888', 'd2ff3b88d34705e01d150c21fa7bde07', 100),
(23, 'Rajat Dabade', 'rajatdabade1997@gmail.com', '9168732292', 'b2e8753021af463f656916bef82664e6', 200),
(25, 'Samiksha', 'samiksha@live.com', '9148248484', 'd2ff3b88d34705e01d150c21fa7bde07', 200),
(26, 'Rohan ', 'rohan@live.com', '5389205892', 'd2ff3b88d34705e01d150c21fa7bde07', 100),
(27, 'shubham', 'shubham@live.com', '6598030585', 'd2ff3b88d34705e01d150c21fa7bde07', 100),
(28, 'bhus', 'bhushan@gmail.com', '2334344343', 'e10adc3949ba59abbe56e057f20f883e', 100),
(29, 'Aniket Baad', 'aniket@live.com', '9168732292', 'd2ff3b88d34705e01d150c21fa7bde07', 300);

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
  MODIFY `product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cookies`
--
ALTER TABLE `cookies`
  MODIFY `product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orderd_item`
--
ALTER TABLE `orderd_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pastries`
--
ALTER TABLE `pastries`
  MODIFY `product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
