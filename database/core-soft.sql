-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2015 at 04:38 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gs_contacts`
--

CREATE TABLE IF NOT EXISTS `gs_contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `url` text,
  `phone` varchar(255) NOT NULL,
  `message_text` text NOT NULL,
  `seen` tinyint(4) NOT NULL DEFAULT '0',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gs_products`
--

CREATE TABLE IF NOT EXISTS `gs_products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sale_price` int(11) DEFAULT '0',
  `regular_price` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gs_product_analytics`
--

CREATE TABLE IF NOT EXISTS `gs_product_analytics` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sale_count` int(11) NOT NULL DEFAULT '0',
  `view_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gs_product_info`
--

CREATE TABLE IF NOT EXISTS `gs_product_info` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1'
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
('26f22514132bd0bf1cb7529c97c2a5d2768559cb', '127.0.0.1', 1443363765, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333336333634343b637372662d6c6f67696e7c733a34303a2233366632663939343433626562333865626466646562323032323536373538316637633864353463223b6c6f67696e2d63726564656e7469616c737c613a323a7b733a323a226964223b733a313a2231223b733a343a226e616d65223b733a363a22417274687572223b7d),
('8fbfb6838633c6219d7e643419cda4d368f73a47', '127.0.0.1', 1443364672, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333336343437353b637372662d6c6f67696e7c733a34303a2265346263636438376430306532613366363035323137373435613233316537643530306530633761223b6c6f67696e2d63726564656e7469616c737c613a323a7b733a323a226964223b733a313a2231223b733a343a226e616d65223b733a363a22417274687572223b7d);

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
-- Indexes for table `gs_contacts`
--
ALTER TABLE `gs_contacts`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gs_contacts`
--
ALTER TABLE `gs_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gs_products`
--
ALTER TABLE `gs_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
