-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2017 at 05:17 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'pubudu', '123');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_address`
--

CREATE TABLE `checkout_address` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `contactno` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout_address`
--

INSERT INTO `checkout_address` (`id`, `firstname`, `lastname`, `email`, `address`, `city`, `pincode`, `contactno`) VALUES
(1, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(2, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', 'dad', 'afafafaf', '123456', '2222222222'),
(3, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '1122345678'),
(4, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '1122345678'),
(5, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '123456', '2222222222'),
(6, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', 'dad', 'sfsgsg', '123456', '1443453245'),
(7, 'pppp', 'ppp', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '2222222222'),
(8, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '234567', '2222222222'),
(9, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', 'dad', 'afafafaf', '343443', '2222222222'),
(10, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'sfsgsg', '343443', '2222222222'),
(11, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '2222222222'),
(12, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '123456', '2222222222'),
(13, 'pubudu', 'wwr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '343443', '2222222222'),
(14, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '2222222222'),
(15, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '1443453245'),
(16, 'Ppppp', 'bbbbbbb', 'pubuduboteju95@gmail.com', 'njgjh', 'afafafaf', '343443', '2222222222'),
(17, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '1443453245'),
(18, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '1122345678'),
(19, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '343443', '1122345678'),
(39, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '1443453245'),
(38, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111'),
(36, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '343443', '2222222222'),
(37, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '1443453245'),
(31, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', 'jsgfgaaiyraiur', 'afafafaf', '123456', '1443453245'),
(32, 'pppp', 'ppp', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '1443453245'),
(33, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '2222222222'),
(34, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '2222222222'),
(35, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '2222222222');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_order_address`
--

CREATE TABLE `confirm_order_address` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `contactno` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirm_order_address`
--

INSERT INTO `confirm_order_address` (`id`, `firstname`, `lastname`, `email`, `address`, `city`, `pincode`, `contactno`) VALUES
(1, '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', ''),
(5, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(6, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(7, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(8, '', '', '', '', '', '', ''),
(9, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(10, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(11, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(12, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(13, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(14, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(15, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(16, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(17, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(18, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(19, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(42, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '1443453245'),
(43, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111'),
(44, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111'),
(45, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111'),
(46, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111'),
(47, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111'),
(48, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111'),
(49, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111'),
(50, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111'),
(30, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(31, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(32, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(33, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(34, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(35, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(36, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'sfsgsg', '123456', '2222222222'),
(37, '', '', '', '', '', '', ''),
(38, '', '', '', '', '', '', ''),
(39, '', '', '', '', '', '', ''),
(40, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '2222222222'),
(41, 'pubudu', 'ppp', 'pubuduboteju95@gmail.com', 'wrwsvsvf34gsgsg', 'afafafaf', '343443', '2222222222'),
(51, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111'),
(52, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111'),
(53, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111'),
(54, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111'),
(55, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111'),
(56, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111'),
(57, 'pubudu', 'wewr', 'pubuduboteju95@gmail.com', '234r32fefgfsvgs', 'afafafaf', '223344', '1111111111');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_order_product`
--

CREATE TABLE `confirm_order_product` (
  `id` int(11) NOT NULL,
  `order_id` varchar(10) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_total` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `brand` varchar(255) NOT NULL,
  `catgry` varchar(255) NOT NULL,
  `qty` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `image`, `price`, `brand`, `catgry`, `qty`) VALUES
(1, 'Mercedes-Benz A-Class', '../../img/Mercedes-benz/a1.jpg', 150, 'merc', 'a', -7),
(2, 'Mercedes-Benz A-Class', '../../img/Mercedes-benz/a2.jpg', 200, 'merc', 'a', -9),
(3, 'Mercedes-Benz A-Class', '../../img/Mercedes-benz/a3.jpg', 90, 'merc', 'a', -6),
(4, 'Mercedes-Benz A-Class', '../../img/Mercedes-benz/a4.jpg', 135, 'merc', 'a', -2),
(5, 'Mercedes-Benz A-Class', '../../img/Mercedes-benz/a5.jpg', 99, 'merc', 'a', -3),
(6, 'Mercedes-Benz A-Class', '../../img/Mercedes-benz/a6.jpg', 145, 'merc', 'a', -1),
(7, 'Mercedes-Benz B-Class', '../../img/Mercedes-benz/b1.jpg', 200, 'merc', 'b', 30),
(8, 'Mercedes-Benz B-Class\r\n', '../../img/Mercedes-benz/b2.jpg', 110, 'merc', 'b', 30),
(9, 'Mini Cooper-Classic', '../../img/Mini/c1.jpg', 50, 'mini', 'classic', -2),
(10, 'Mini Cooper-Classic', '../../img/Mini/c2.jpg', 77, 'mini', 'classic', 0),
(11, 'Mini Cooper-Classic\n', '../../img/Mini/c3.jpg', 68, 'mini', 'classic', 0),
(12, 'Mini Cooper-Classic\n', '../../img/Mini/c4.jpg', 57, 'mini', 'classic', 0),
(13, 'Mini Cooper-Classic', '../../img/Mini/c5.jpg', 62, 'mini', 'classic', 0),
(14, 'Mini Cooper-S\r\n', '../../img/Mini/s1.jpg', 155, 'mini', 'cooper-s', 0),
(15, 'Mini Cooper-S\r\n', '../../img/Mini/s2.jpg', 147, 'mini', 'cooper-s', 0),
(16, 'Mini Cooper-S\r\n', '../../img/Mini/s3.jpg', 167, 'mini', 'cooper-s', 0),
(17, 'Mini Cooper-S', '../../img/Mini/s4.jpg', 120, 'mini', 'cooper-s', 0),
(50, 'mmmmm', '../../img/admin/e28de726fc843b49665f750726ca1789', 11111, 'merc', 'a', 2),
(49, 'mmmmm', '../../img/admin/fac589d4352b6e6fb446857ca1d8bc89', 11111, 'merc', 'a', 2),
(48, 'Mercedes-Benz', '../../img/admin/89c714ef605b51d66cc6a7a3b33675f520170711_121952.jpg', 222, 'merc', 'a', 6),
(47, 'Mercedes-Benz', '../../img/admin/f89ed79268c9271df403d48a1e3bf1bc20170711_120944.jpg', 222, 'merc', 'a', 6),
(46, 'Mercedes-Benz', '../../img/admin/0c80514d8eca20afad011bea73ff343a19225782_434540300259238_3711084332668667290_n.jpg', 222, 'merc', 'a', 6),
(45, 'jtytyvg', '../../img/admin/9d975e5dc2b6d5114b1c5cc30c45f91c', 7868, 'merc', 'a', 55),
(34, 'this is testing', '../../img/admin/99554b88033466f33d6aee19de63ac69', 50, '', '', 5),
(35, 'this is testing', '../../img/admin/c6d8a9816052a35d1fb24bfbe690592f', 50, '', '', 5),
(36, 'this is testing', '../../img/admin/71ddbbb523b128b24353fa1240cdd479', 50, '', '', 5),
(37, 'this is testing', '../../img/admin/6ea927f27e230ec4fd33ede859257b19', 50, '', '', 5),
(38, 'this is testing', '../../img/admin/8b4cdb0588ad97e233a26b70ffdceeaa', 50, '', '', 5),
(39, 'this is testing', '../../img/admin/6074b4f64b20d58e0524b40caaa0e6f5', 50, '', '', 5),
(40, 'this is testing', '../../img/admin/ca7f3363e44b65a56643c34381170ff2', 50, '', '', 5),
(41, 'this is testing', '../../img/admin/1761c5a34dd88896a6dc702b0110dd46', 50, '', '', 5),
(42, 'this is testing', '../../img/admin/4df6b018c7cd07c554408d14f42ac9fd', 50, '', '', 5),
(43, 'this is testing', '../../img/admin/21854c4065d40493801bd76dc90f277c', 50, '', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES
(1, 'Pubudu', 'Boteju', 'pubudu@gmail.com', '$2y$10$VCawY6drajCcgAH4thTtGOHl5ufzWhMs2ebLy6oUZf/BU8ljycEgK', '045117b0e0a11a242b9765e79cbf113f', 0),
(2, 'Raveen', 'Prabodh', 'raveen@gmail.com', '$2y$10$0fd4QXjMAm7B.RWXBhhfG..K.puXHJspEgrg1g5oYLUtBF6c8VDYK', 'cfee398643cbc3dc5eefc89334cacdc1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout_address`
--
ALTER TABLE `checkout_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_order_address`
--
ALTER TABLE `confirm_order_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_order_product`
--
ALTER TABLE `confirm_order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `checkout_address`
--
ALTER TABLE `checkout_address`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `confirm_order_address`
--
ALTER TABLE `confirm_order_address`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `confirm_order_product`
--
ALTER TABLE `confirm_order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
