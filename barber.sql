-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2020 at 07:54 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barber`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'Aman');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_contact` varchar(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_gender` varchar(20) NOT NULL,
  `user_address` varchar(30) NOT NULL,
  `user_service_type` varchar(20) NOT NULL,
  `user_time` time(6) NOT NULL,
  `user_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`user_id`, `user_name`, `user_contact`, `user_email`, `user_gender`, `user_address`, `user_service_type`, `user_time`, `user_date`) VALUES
(7, 'aman', '7', 'dineshyewarkar1974@g', 'male', 'PLOT NO. 10, SASANLY OUT, EKAT', 'home', '10:02:00.000000', '2020-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `career_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `salary` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`career_id`, `name`, `contact`, `email`, `experience`, `salary`, `address`, `gender`, `date`) VALUES
(8, 'Aman Yerwarkar', '7758840493', 'aman@gmail.com', '10 pass', '5000', 'ekatmata nager', 'male', '2020-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(20) NOT NULL,
  `image` text NOT NULL,
  `i_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `i_date`) VALUES
(1, 'dream.png', '2020-06-02 20:30:41'),
(2, 'ikonic-removebg-preview.png', '2020-06-02 20:31:06'),
(3, 'face.jpg', '2020-06-02 00:15:00'),
(4, 'dream.png', '0000-00-00 00:00:00'),
(5, 'galler_images/gat.jpg', '2020-06-03 14:24:02'),
(6, 'offer_images/ga2.jpg', '2020-06-03 14:39:43'),
(7, 'offer_images/face.jpg', '2020-06-03 15:06:53'),
(8, 'offer_images/dream.png', '2020-06-03 15:07:29'),
(9, 'offer_images/ga2.jpg', '2020-06-03 15:08:20'),
(10, 'offer_images/ga1.png', '2020-06-03 15:08:27'),
(11, 'offer_images/slide1.jpg', '2020-08-27 23:51:09'),
(12, 'offer_images/slide2.jpg', '2020-08-27 23:51:25'),
(13, 'offer_images/slide3.jpg', '2020-08-27 23:51:33'),
(14, 'offer_images/slider4.jpg', '2020-08-27 23:52:03'),
(15, 'offer_images/slider5.jpg', '2020-08-27 23:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `o_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `image`, `o_date`) VALUES
(2, 'offer_images/gat.jpg', '2020-06-03 15:00:43'),
(3, 'offer_images/ga2.jpg', '2020-06-03 15:01:00'),
(4, 'offer_images/ga1.png', '2020-06-03 15:01:58'),
(8, 'offer_images/slider4.jpg', '2020-08-27 23:03:21'),
(9, 'offer_images/slide1.jpg', '2020-08-27 23:03:42'),
(10, 'offer_images/slider5.jpg', '2020-08-27 23:03:56'),
(11, 'offer_images/slide3.jpg', '2020-08-27 23:04:06'),
(12, 'offer_images/slide2.jpg', '2020-08-27 23:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(20) NOT NULL,
  `post_author` varchar(20) NOT NULL,
  `post_title` varchar(20) NOT NULL,
  `post_status` varchar(20) NOT NULL,
  `post_image` text NOT NULL,
  `post_content` varchar(200) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_author`, `post_title`, `post_status`, `post_image`, `post_content`, `post_date`) VALUES
(1, 'Aman', 'demo', 'published', 'face.jpg', '<p>demo content</p>', '2020-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `query` text NOT NULL,
  `query_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `contact`, `email`, `query`, `query_on`) VALUES
(1, 'aman', '7845961236', 'amanyervarkar85@gmai', '192.168.3.4', '2020-08-25'),
(2, 'mayur', '7845961236', 'mayur@gmail.com', 'mayur ka bacha', '2020-08-25'),
(3, 'ritik', '7845961236', 'ramagashe@gmail.com', 'rand', '2020-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(20) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(22, 'slider_image/slide1.jpg'),
(23, 'slider_image/slide2.jpg'),
(24, 'slider_image/slide3.jpg'),
(25, 'slider_image/slider4.jpg'),
(26, 'slider_image/slider5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `career_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
