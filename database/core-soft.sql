-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2015 at 04:28 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

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
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gs_products`
--

CREATE TABLE IF NOT EXISTS `gs_products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `regular_price` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
('04fea0b47fb5bc8dfe461075edaafeb3955b0b9a', '127.0.0.1', 1442742473, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323734323239383b637372662d6c6f67696e7c733a34303a2235306139346438323635343835316464656336306430343533366439393665383463323264656262223b6c6f67696e2d63726564656e7469616c737c613a323a7b733a323a226964223b733a313a2231223b733a343a226e616d65223b733a363a22417274687572223b7d),
('6822d3f34105da817f19fbca8a7f98b23a355143', '127.0.0.1', 1442734825, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323733343634373b637372662d6c6f67696e7c733a34303a2237316236353536386663313433663935393931623332356634626161663064616265626630663736223b6c6f67696e2d63726564656e7469616c737c613a323a7b733a323a226964223b733a313a2231223b733a343a226e616d65223b733a363a22417274687572223b7d),
('6de01707d2231b554dc16a05bbd378251af8546b', '127.0.0.1', 1442755591, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323735353438313b637372662d6c6f67696e7c733a34303a2262376336356366653864316336663161633731616362623632623236636466376436626131333436223b6c6f67696e2d63726564656e7469616c737c613a323a7b733a323a226964223b733a313a2231223b733a343a226e616d65223b733a363a22417274687572223b7d),
('74dd431f820e7f2f1df23533301e6eacbb73d766', '127.0.0.1', 1442745414, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323734353338383b);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_admin_users`
--
ALTER TABLE `gs_admin_users`
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
