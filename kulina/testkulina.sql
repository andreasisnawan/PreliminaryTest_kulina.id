-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2016 at 04:33 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testkulina`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_review`
--

CREATE TABLE IF NOT EXISTS `user_review` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` float NOT NULL,
  `review` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=1452 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_review`
--

INSERT INTO `user_review` (`id`, `order_id`, `product_id`, `user_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 15, 15, 15, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et ornare nunc. Aenean molestie ex lacus, quis scelerisque lectus dapibus non. ', '2016-12-16 16:01:27', NULL),
(3, 124, 12, 2, 4, 'a;shf;lksdhfklasndmsnavaunv', '2016-12-16 16:02:49', NULL),
(4, 12, 2, 2, 5, 'wewgg', '2016-12-17 05:31:02', NULL),
(5, 12, 2, 2, 5, 'edited', '2016-12-17 05:31:02', '2016-12-17 06:35:50'),
(1451, 5, 5, 23, 1, 'hahahaha', '2016-12-17 06:37:06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_review`
--
ALTER TABLE `user_review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_review`
--
ALTER TABLE `user_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1452;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
