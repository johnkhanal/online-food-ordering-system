-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 08:00 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinefooding`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(4, 'Bevrage'),
(5, 'Breakfast'),
(7, 'Morning Special'),
(8, 'Snacks'),
(9, 'Regular Foods'),
(10, 'Newari food');

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE `editor` (
  `e_id` int(11) NOT NULL,
  `e_username` varchar(255) NOT NULL,
  `e_password` varchar(255) NOT NULL,
  `e_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`e_id`, `e_username`, `e_password`, `e_photo`) VALUES
(9, 'ram', '$2y$10$CiLUUXbtU/ZhczH7qo91k.iVCNeVfeMtKj./WIM3nn9L/5VbIU4Ke', 'man-avatar-profile-round-icon_24640-14044.jpg'),
(10, 'shyam', '$2y$10$OZ6PJOmQg4cMymNHaWCOHu9ScKQ7rF7VCQwIcECRUawhuB6gjMpZ6', 'man-avatar-profile-round-icon_24640-14044.jpg'),
(12, 'hari', '$2y$10$iH3LeaFVAtnoxaQmnpOjXue0GEnmYwdWGsGOuSjNsBIaX.zAXXvja', 'man-avatar-profile-round-icon_24640-14044.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `featuredresturants`
--

CREATE TABLE `featuredresturants` (
  `fr_id` int(11) NOT NULL,
  `fr_r_id` int(11) NOT NULL,
  `fr_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `feed_fullname` varchar(255) NOT NULL,
  `feed_email` varchar(255) NOT NULL,
  `feed_phone` varchar(255) NOT NULL,
  `feed_message` longtext NOT NULL,
  `feed_status` enum('unread','read') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `feed_fullname`, `feed_email`, `feed_phone`, `feed_message`, `feed_status`) VALUES
(12, ' John Khanal', 'john@gmail.com', '9800000000', 'I like the food of rams restaurant.', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `i_id` int(11) NOT NULL,
  `i_name` varchar(255) NOT NULL,
  `i_nickname` varchar(255) NOT NULL,
  `i_c_id` int(11) NOT NULL,
  `i_r_id` int(11) NOT NULL,
  `i_price` varchar(255) NOT NULL,
  `i_registration_date` varchar(255) NOT NULL,
  `i_availability` varchar(255) NOT NULL,
  `i_description` longtext NOT NULL,
  `i_agreement` varchar(255) NOT NULL,
  `i_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`i_id`, `i_name`, `i_nickname`, `i_c_id`, `i_r_id`, `i_price`, `i_registration_date`, `i_availability`, `i_description`, `i_agreement`, `i_image`) VALUES
(9, 'French fries', 'N/A', 8, 9, '150', '04/24/2020', 'on', 'Tasty french fries', 'on', 'frenchfries.jpg'),
(10, 'Samosa', 'N/A', 8, 9, '100', '04/24/2020', 'on', 'Comes with 2 samosa and sauce.', 'on', 'samosa.jpg'),
(11, 'Thukpa', 'N/A', 9, 10, '200', '04/24/2020', 'on', 'Thukpa for the cold weather!', 'on', 'thukpa.jpg'),
(12, 'Brown Bread', 'N/A', 5, 11, '100', '04/21/2020', 'on', 'Each plate contains 2 bread and some jam.', 'on', 'brownbread.jpg'),
(13, 'Burger', 'N/A', 7, 12, '200', '04/21/2020', 'on', 'The best food of our restaurant', 'on', 'burger.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `l_id` int(11) NOT NULL,
  `l_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`l_id`, `l_name`) VALUES
(4, 'Bhaktapur'),
(5, 'Lalitpur'),
(6, 'Pokhara'),
(7, 'Kavre'),
(8, 'Jhapa');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `o_comid` int(11) NOT NULL,
  `o_i_name` varchar(255) NOT NULL,
  `o_c_id` int(11) NOT NULL,
  `o_r_id` int(11) NOT NULL,
  `o_qty` varchar(255) NOT NULL,
  `o_total_price` float NOT NULL,
  `o_date` varchar(255) NOT NULL,
  `o_fname` varchar(255) NOT NULL,
  `o_lname` varchar(255) NOT NULL,
  `o_username` varchar(255) NOT NULL,
  `o_address1` varchar(255) NOT NULL,
  `o_address2` varchar(255) NOT NULL,
  `o_city` varchar(255) NOT NULL,
  `o_province` varchar(255) NOT NULL,
  `o_zipcode` varchar(255) NOT NULL,
  `o_t_condition` varchar(255) NOT NULL,
  `o_price` varchar(255) NOT NULL,
  `o_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `o_comid`, `o_i_name`, `o_c_id`, `o_r_id`, `o_qty`, `o_total_price`, `o_date`, `o_fname`, `o_lname`, `o_username`, `o_address1`, `o_address2`, `o_city`, `o_province`, `o_zipcode`, `o_t_condition`, `o_price`, `o_status`) VALUES
(43, 214832, 'French fries', 15, 9, '2', 600, '2020-08-21', 'User', 'One', 'user', 'Jorpati', '', 'Kathmandu', '3', '01010', 'on', 'Rs.150', 'Confirmed'),
(44, 214832, 'Samosa', 15, 9, '3', 600, '2020-08-21', 'User', 'One', 'user', 'Jorpati', '', 'Kathmandu', '3', '01010', 'on', 'Rs.100', 'Confirmed'),
(45, 201340, 'Momo', 15, 9, '1', 275, '2020-08-21', 'User', 'One', 'user', 'Jorpati', '', 'Kathmandu', '3', '01010', 'on', 'Rs.175', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `resturants`
--

CREATE TABLE `resturants` (
  `r_id` int(11) NOT NULL,
  `r_o_name` varchar(255) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_mobile` varchar(255) NOT NULL,
  `r_email` varchar(255) NOT NULL,
  `r_phone` varchar(255) NOT NULL,
  `r_address` varchar(255) NOT NULL,
  `r_city` varchar(255) NOT NULL,
  `r_state` varchar(255) NOT NULL,
  `r_zipcode` varchar(255) NOT NULL,
  `r_registration_date` varchar(255) NOT NULL,
  `r_availability` varchar(255) NOT NULL,
  `r_description` longtext NOT NULL,
  `r_logo` varchar(255) NOT NULL,
  `r_e_id` int(11) NOT NULL,
  `r_agreement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resturants`
--

INSERT INTO `resturants` (`r_id`, `r_o_name`, `r_name`, `r_mobile`, `r_email`, `r_phone`, `r_address`, `r_city`, `r_state`, `r_zipcode`, `r_registration_date`, `r_availability`, `r_description`, `r_logo`, `r_e_id`, `r_agreement`) VALUES
(9, 'Ram Thapa', 'Ram\'s', '(980) 000-0000', 'ram@gmail.com', '(980) 000-0000', 'Kapan', 'Kathmandu', '3', '01010', '04/24/2020', 'on', 'For the best daily food.', '48786db88c95237f6e0b375dc991448a.png', 9, 'on'),
(10, 'Shyam Kaji', 'Shyam\'s Restaurant', '(980) 000-0000', 'shyam@gmail.com', '(980) 000-0000', 'Chabhil', 'Kathmandu', '3', '01010', '04/24/2020', 'on', 'The best restaurant of Chabhil!', 'depositphotos_77833254-stock-illustration-restaurant-logo.jpg', 10, 'on'),
(11, 'Hari Poudel', 'Hari\'s Restaurant', '(980) 000-0000', 'hari@gmail.com', '(980) 000-0000', 'Jorpati', 'Kathmandu', '3', '10235', '04/21/2020', 'on', 'We have the best service!', 'logo1.jpg', 12, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_username` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_phone` varchar(255) NOT NULL,
  `u_fullname` varchar(255) NOT NULL,
  `u_reg_date` varchar(255) NOT NULL,
  `u_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_email`, `u_username`, `u_password`, `u_address`, `u_phone`, `u_fullname`, `u_reg_date`, `u_profile`) VALUES
(15, 'user@gmail.com', 'user', '$2y$10$bQjWiwSP6J6lDU/81pGQiOFPUw9J5QWCjfzordPwYmete6gMRxM.O', 'Thamel', '9800000000', 'User Two', '2020-08-21', 'man-avatar-profile-round-icon_24640-14044.jpg'),
(16, 'newuser@gmail.com', 'newuser', '$2y$10$7vASkkCGCiPDAJVMO2UgEeGUB.yWd6GAffjS2lthdgGiC3e.Ws3Za', 'Thamel', '9800000000', 'Old User', '2020-08-21', 'man-avatar-profile-round-icon_24640-14044.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `featuredresturants`
--
ALTER TABLE `featuredresturants`
  ADD PRIMARY KEY (`fr_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `resturants`
--
ALTER TABLE `resturants`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `editor`
--
ALTER TABLE `editor`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `featuredresturants`
--
ALTER TABLE `featuredresturants`
  MODIFY `fr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `resturants`
--
ALTER TABLE `resturants`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
