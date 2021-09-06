-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 07:30 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tyit`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `billid` int(45) NOT NULL,
  `date` date NOT NULL,
  `total` varchar(45) NOT NULL,
  `worker_userid` int(45) NOT NULL,
  `orderid` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_name` varchar(45) NOT NULL,
  `subcategory` varchar(45) NOT NULL,
  `categoryid` int(45) NOT NULL,
  `admin_userid` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_name`, `subcategory`, `categoryid`, `admin_userid`) VALUES
('pppppppppppppppp', '4tt', 12, ''),
('rupam', '899y', 13, ''),
('sneha', 'ss33', 15, '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `name` varchar(45) NOT NULL,
  `companyid` int(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `mobile_no` varchar(45) NOT NULL,
  `email_id` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`name`, `companyid`, `address`, `mobile_no`, `email_id`) VALUES
('prachii', 24, 'kudal', '942156', 'rrr4@gmail.com'),
('prachii', 25, 'narur', '942156789', 'ttt3@gmail.com'),
('vrusham', 26, 'sawantvadiiiiiiii', '90821099', 'abc30@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(45) NOT NULL,
  `mobile_no` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_type` text NOT NULL,
  `orderid` int(11) NOT NULL,
  `date` date NOT NULL,
  `payment` int(11) NOT NULL,
  `productid` int(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `customer_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_type`, `orderid`, `date`, `payment`, `productid`, `quantity`, `customer_name`) VALUES
('$order->order_type', 1, '0000-00-00', 1, 1, 2, ''),
('supplier', 28, '0000-00-00', 2000, 1, 11, ''),
('supplier', 29, '2019-11-07', 2452, 32, 33, ''),
('customer', 32, '2019-11-13', 20000, 32, 9, ''),
('supplier', 33, '2019-10-30', 20000, 32, 1834, ''),
('customer', 38, '2019-10-30', 45656, 37, 11, 'prachi sarnobat'),
('supplier', 39, '2019-11-05', 5000, 0, 31, 'vrushali parulekar'),
('supplier', 40, '2019-11-07', 5000, 36, 11, 'vrushali parulekar'),
('customer', 41, '2019-11-07', 2000, 37, 4, 'rupali kanade'),
('customer', 42, '2019-11-13', 40000, 37, 11, 'suraj salavi'),
('customer', 43, '2019-11-03', 2452, 33, 1, 'prachi sarnobat'),
('customer', 46, '2019-11-12', 0, 41, 1, 'suraj salavi'),
('customer', 47, '2019-11-05', 0, 41, 2, 'tejuu'),
('customer', 48, '2019-11-19', 0, 41, 1, 'prachi sarnobat');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `orderid` int(45) NOT NULL,
  `productid` int(45) NOT NULL,
  `quantity` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presenty`
--

CREATE TABLE `presenty` (
  `id` int(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `worker_userid` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presenty`
--

INSERT INTO `presenty` (`id`, `name`, `date`, `status`, `worker_userid`) VALUES
(24, '', '2019-11-06', 'full', 0),
(35, '', '2019-01-02', 'half', 74),
(36, '', '2019-01-02', 'full', 74),
(37, '', '2019-11-04', 'half', 72);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_name` varchar(45) NOT NULL,
  `productid` int(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `shape` varchar(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `prize` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_name`, `productid`, `size`, `shape`, `quantity`, `prize`) VALUES
('light', 41, '44ll', '33ll', 5, 100),
('hanging lights', 42, '88uu', '99yy', 10, 300),
('wall', 43, '8u', '8u', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `name` text NOT NULL,
  `month` varchar(45) NOT NULL,
  `total` int(45) NOT NULL,
  `worker_userid` int(45) NOT NULL,
  `admin_userid` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`name`, `month`, `total`, `worker_userid`, `admin_userid`) VALUES
('', 'april', 3000, 0, 0),
('', 'april', 3000, 0, 0),
('', 'june', 4000, 0, 0),
('', 'april', 66, 123, 0),
('', 'april', 66, 123, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `phone_no` varchar(45) NOT NULL,
  `email_id` varchar(45) NOT NULL,
  `user_type` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `address`, `phone_no`, `email_id`, `user_type`, `password`) VALUES
(2, 'vvv', 'kudal', '9876543678', 'sss45@gmail.com', '', ''),
(15, 'vvv', 'kudal', '9876543678', 'ttt3@gmail.com', '', ''),
(16, 'vvv', 'kudal', '9876543678', 'ttt3@gmail.com', '', ''),
(33, 'vvv', 'kudal', '9876543678', 'pqr30@gmail.com', 'customer', ''),
(34, 'pracham', '', '9876543678', 'sss45@gmail.com', '', ''),
(35, 'pracham', '', '8698832444', 'sss45@gmail.com', '', ''),
(36, 'teju', '', '7689765434', 'abc30@gmail.com', '', ''),
(37, 'tejuuuu', '', '9876543678', 'ttt45@gmail.com', '', ''),
(38, 'vvvfdgd', '', '8695576888', 'abc30@gmail.com', '', ''),
(39, 'pracham', 'kudal', '9876543678', 'ttt45@gmail.com', 'Array', ''),
(40, 'vvv', 'kudal', '8698832444', 'ttt3@gmail.com', 'Array', ''),
(41, 'pracham', 'kudal', '8698832444', 'ttt45@gmail.com', 'Array', ''),
(42, 'pracham', 'kudal', '8698832444', 'ttt3@gmail.com', 'Array', ''),
(43, 'pracham', 'kudal', '8698832444', 'sss45@gmail.com', 'Array', ''),
(44, 'vvv', 'kudal', '9876543678', 'pqr30@gmail.com', 'Array', '1234ppp'),
(45, 'pracham', 'kudal', '8698832444', 'pqr30@gmail.com', 'Array', ''),
(46, 'vvv', 'kudal', '9876543678', 'ttt3@gmail.com', 'Array', ''),
(47, 'prachi', '', '8698832444', 'ppp@gmail.com', '', ''),
(48, 'teju', 'kudal', '8695576888', 'rrr4@gmail.com', 'Array', ''),
(49, 'pracham', 'kudal', '8698832444', 'ttt45@gmail.com', 'Array', ''),
(50, 'pracham', 'kudal', '8698832444', 'sss45@gmail.com', 'Array', ''),
(51, 'pracham', 'kudal', '8698832444', 'ttt45@gmail.com', 'Array', ''),
(52, 'prachamkk', 'kudal', '8698832444', 'sss45@gmail.com', 'customer', ''),
(63, 'vvv', 'kudal', '8695576888', 'abc30@gmail.com', '', ''),
(66, 'pracham', '', '8698832444', 'abc30@gmail.co', '', ''),
(67, 'pracham', 'sawantvadi', '869883244', 'pqr30@gmail.com', 'worker', ''),
(72, 'sneha', 'at post kudal', '8698832777', 'pqr30@gmail.com', 'worker', ''),
(73, 'rupam', 'humaras', '5678976545', 'ttt3@gmail.com', 'worker', ''),
(74, 'riya', 'satara', '8767543267', 'rrr4@gmail.com', 'worker', ''),
(75, 'neha', 'pandur', '56766879876', 'abc30@gmail.com', 'worker', '');

-- --------------------------------------------------------

--
-- Table structure for table `worker_unitsalary`
--

CREATE TABLE `worker_unitsalary` (
  `worker_userid` int(11) NOT NULL,
  `unitsalary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker_unitsalary`
--

INSERT INTO `worker_unitsalary` (`worker_userid`, `unitsalary`) VALUES
(73, 5000),
(74, 5000),
(67, 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`billid`),
  ADD KEY `user_id_worker_id` (`worker_userid`),
  ADD KEY `order_id` (`orderid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD KEY `order_id` (`orderid`),
  ADD KEY `product_id` (`productid`);

--
-- Indexes for table `presenty`
--
ALTER TABLE `presenty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_admin_id` (`worker_userid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD KEY `user_id_admin_id` (`worker_userid`),
  ADD KEY `adminuser_id` (`admin_userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyid` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `presenty`
--
ALTER TABLE `presenty`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
