-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2015 at 11:39 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `core-soft`
--

-- --------------------------------------------------------

--
-- Table structure for table `gs_admin_users`
--

CREATE TABLE IF NOT EXISTS `gs_admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(123) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gs_admin_users`
--

INSERT INTO `gs_admin_users` (`id`, `username`, `email`, `name`, `password`) VALUES
(1, 'admin', 'arthur.khlghatyan@gmail.com', 'Arthur', '$2y$10$YTRjY2IyNWJlYjc5ZWU2ZeDzduC0Mj.nwBWGh6tNvrH45s0NAkJWy');

-- --------------------------------------------------------

--
-- Table structure for table `gs_categories`
--

CREATE TABLE IF NOT EXISTS `gs_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gs_categories`
--

INSERT INTO `gs_categories` (`id`, `title`, `alias`, `create_date`) VALUES
(1, 'Apple', 'apple', '2015-09-21 06:42:07'),
(2, 'Samsung', 'samsung', '2015-09-21 06:42:18'),
(3, 'Sony', 'sony', '2015-09-21 06:42:18'),
(4, 'Microsoft', 'microsoft', '2015-09-21 06:43:06'),
(5, 'HTC', 'htc', '2015-09-21 06:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `gs_products`
--

CREATE TABLE IF NOT EXISTS `gs_products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sale_price` int(11) DEFAULT NULL,
  `regular_price` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  `extension` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gs_products`
--

INSERT INTO `gs_products` (`id`, `category_id`, `title`, `sale_price`, `regular_price`, `create_date`, `extension`) VALUES
(1, 1, 'Iphone 6', 519, 549, 2147483647, 'jpg'),
(2, 2, 'Samsung Galaxy S6', 520, 560, 2147483647, 'jpg'),
(3, 5, 'Htc One', 0, 550, 2147483647, 'jpg'),
(4, 2, 'Samsung Galaxy Note 4', 0, 570, 2147483647, 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gs_product_analytics`
--

CREATE TABLE IF NOT EXISTS `gs_product_analytics` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sale_count` int(11) NOT NULL,
  `view_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gs_product_info`
--

CREATE TABLE IF NOT EXISTS `gs_product_info` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gs_sessions`
--

CREATE TABLE IF NOT EXISTS `gs_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gs_sessions`
--

INSERT INTO `gs_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('71b423d9310ce14a476b2c51dd46c0d3dc5c2a1d', '127.0.0.1', 1442828254, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323832383037323b637372662d6c6f67696e7c733a34303a2261656632373435303266656136353835323039333464643830663731303361363861613639626365223b);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_admin_users`
--
ALTER TABLE `gs_admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_categories`
--
ALTER TABLE `gs_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_products`
--
ALTER TABLE `gs_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_product_analytics`
--
ALTER TABLE `gs_product_analytics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_product_info`
--
ALTER TABLE `gs_product_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_sessions`
--
ALTER TABLE `gs_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_admin_users`
--
ALTER TABLE `gs_admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gs_categories`
--
ALTER TABLE `gs_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gs_products`
--
ALTER TABLE `gs_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gs_product_analytics`
--
ALTER TABLE `gs_product_analytics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gs_product_info`
--
ALTER TABLE `gs_product_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
