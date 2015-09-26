-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2015 at 11:54 AM
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
-- Table structure for table `gs_contacts`
--

CREATE TABLE IF NOT EXISTS `gs_contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `url` text,
  `message_text` text NOT NULL,
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
('2a21b42507823d6277ec60bbb6ea14bb9bb68210', '127.0.0.1', 1443261195, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333236313038393b637372662d6c6f67696e7c733a34303a2264343636376330323833363964373831663232663363323232616337333466383966393334616233223b6c6f67696e2d63726564656e7469616c737c613a323a7b733a323a226964223b733a313a2231223b733a343a226e616d65223b733a363a22417274687572223b7d),
('33fd3e19bb909f0c4de7ae52b92a5bd922b31d84', '127.0.0.1', 1443197084, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333139373038343b637372662d6c6f67696e7c733a34303a2231383330303561323766346162306136376438663038373136303936356339656431393866376162223b6c6f67696e2d63726564656e7469616c737c613a323a7b733a323a226964223b733a313a2231223b733a343a226e616d65223b733a363a22417274687572223b7d),
('4ec70dadbdd0c01e640a0a236ef20062bf87704b', '127.0.0.1', 1442844408, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323834343336303b636172747c613a303a7b7d),
('bbe855fd72a9456a1afe7a64625ffd967b5f41d3', '127.0.0.1', 1442843115, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323834333131353b637372662d6c6f67696e7c733a34303a2231333231666637396537326136663730663832326232323336656330633937623364616461613362223b636172747c613a303a7b7d),
('bced16ccd77f2e3f580a583f8e603ce34a8c14a8', '127.0.0.1', 1443251060, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333235303835303b637372662d6c6f67696e7c733a34303a2236626436333862636439383461333164336461663166663264623530383038633837653563313539223b6c6f67696e2d63726564656e7469616c737c613a323a7b733a323a226964223b733a313a2231223b733a343a226e616d65223b733a363a22417274687572223b7d),
('e5b7d6d05455ce8133e48e4f832dee5721bac002', '127.0.0.1', 1442941193, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434323934313030333b636172747c613a313a7b733a353a226974656d73223b733a363a22617274687572223b7d);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
