-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 08:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(1, 'Keyboard', 1),
(2, 'Keycap', 1),
(3, 'Switches', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(1, 'Vishal', 'vishal@gmail.com', '1234567890', 'Test Query', '2020-01-14 00:00:00'),
(2, 'vishal@gmail.com', '', '1234567890', 'testing', '2020-01-19 07:59:38'),
(3, 'Vishal', 'vishal@gmail.com', '1234567890', 'testing', '2020-01-19 08:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(2000) NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `meta_title`, `meta_desc`, `meta_keyword`, `status`) VALUES
(1, 2, 'Purple', 2, 1980000, 4, '160452095_sp1.jpg', '5', '6', '7', '', '9', 1),
(2, 2, 'White', 100, 10000000, 12, '545334970_sp2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque ipsum sed pharetra pellentesque. Nulla tristique, dolor et viverra vestibulum, urna dui finibus massa, vel dapibus ligula sapien eu velit. Sed sit amet semper quam. Nam convallis nunc eget quam porta, nec sodales ligula rutrum. Maecenas volutpat scelerisque facilisis. Maecenas consequat erat vitae mauris iaculis, sit amet bibendum nisl scelerisque. Fusce pellentesque laoreet est, eu porta nunc finibus id. Fusce egestas ante ac augue facilisis, vitae volutpat nunc commodo. Proin consectetur quam at venenatis eleifend. Duis vel libero luctus, iaculis libero congue, molestie tortor.', 'test', '', 'test', 1),
(3, 2, 'Blue n White', 100, 2980000, 8, '172832439_sp3.jpg', 'test', 'test', 'test', '', 'test', 1),
(4, 7, '123', 123, 3223, 12, '606751882_578369140_1 (1).jpg', '123', '123', '123', '', '123', 1),
(5, 2, 'Blue', 123, 1890000, 12, '440493758_sp4.jpg', '123', '123', '123', '', '123', 1),
(6, 7, 'ProductX', 12, 123, 12, '261350604_119845920_2.jpg', '123', '123', '123', '', '123', 1),
(7, 7, 'ProductXyz', 123, 123, 323, '935876053_287733289_3.jpg', '123', '123', '123', '', '123', 1),
(10, 3, 'cherry1', 123, 10000, 1200, '881816371_cherry1.jpg', 'as', 'as', 'as', 'as', 'as', 1),
(11, 3, 'cherry2', 0, 9000, 1000, '863103788_cherry2.jpg', 'as', 'as', 'as', 'as', 'as', 1),
(12, 3, 'Everglide1', 0, 4000, 500, '304295789_Everglide1.jpg', 'as', 'as', 'as', 'as', 'as', 1),
(13, 3, 'Everglide2', 0, 3500, 1500, '273849285_Everglide2.jpg', 'as', 'as', 'as', 'as', 'as', 1),
(14, 1, 'keyboard 1', 0, 1300, 123, '608508406_ban_phim.jpg', 'as', 'as', 'as', 'as', 'as', 1),
(15, 1, 'keyboard 2', 0, 1323, 45, '147454625_ban_phim2.jpg', 'as', 'as', 'as', 'as', 'as', 1),
(16, 1, 'keyboard3', 0, 123, 23, '941492476_ban_phim3.jpg', 'as', 'as', 'as', 'as', 'as', 1),
(17, 1, 'keyboard4', 0, 123232, 45, '517642993_ban_phim4.jpg', 'as', 'as', 'as', 'as', 'as', 1),
(18, 3, 'cherry3', 0, 1000, 1, '457630213_cherry3.jpg', 'abc', '15x15', 'test', 'test2', 'tes3=t3', 1),
(19, 3, 'Cherry4', 0, 2000, 2, '652151762_cherry4.jpg', 'test', 'test', 'tetete', 'adadadad', 'aaaaa', 1),
(20, 3, 'Everglide3', 0, 0, 2, '799822491_Everglide3.jpg', 'adv', 'd', 'cc', 'cccc', 'wfwwf', 1),
(21, 3, 'Everglide4', 0, 3000, 4, '271303048_Everglide4.jpg', 'wef', 'wefwef', 'wef', 'wef', 'ww', 1),
(22, 3, 'Kailh1', 0, 3000, 1, '492255456_Kailh1.jpg', 'wfvd', 'dff', 'ff', 'ffff', 'ffff', 1),
(23, 0, 'Kailh2', 0, 20000, 2, '851135137_Kailh2.jpg', 'fw', 'qweqwe', 'vrv', 'jdjd', 'kewkf', 1),
(24, 3, 'Kailh3', 0, 30000, 3, '435967348_Kailh3.jpg', 'rv', 'hrhh', 'ww', '', 'ttt', 1),
(25, 3, 'switch', 0, 100000, 1, '590601181_switch.jpg', 'wef', 'wqef', 'ee', 'w', 'heh', 1),
(26, 3, 'switch2', 0, 320000, 3, '406710748_switch2.jpg', 'fq', 'ef', 'ewfw', 'ewf', 'wf', 1),
(27, 3, 'switch3', 0, 54000, 5, '324076911_switch3.jpg', 'guhiu', 'bhdhh', 'fbryc', 'hrjcn', 'hvb', 1),
(28, 0, 'switch4', 0, 60000, 10000000, '338703429_switch4.jpg', 'rfe', 'ewrg', 'werg', 'qwefhwt', 'jig', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `mobile`, `added_on`) VALUES
(1, 'Vishal Gupta', '', 'vishal@gmail.com', '1234567890', '2020-01-14 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
