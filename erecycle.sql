-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 05:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erecycle`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `postal` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`name`, `number`, `location`, `postal`, `password`, `id`) VALUES
('Akib Hasan', '01621292989', '7/12 Block-B, Lalmatia, Dhaka', 1207, 'f3487412faca20f1af461f047c6181a6', 2),
('Fahim', '01812345678', 'Iqbal Road, Mohammadpur', 1207, 'dcbb9006afaee1296ff36eabe1cddb28', 5),
('Alif Khan', '01621292989', 'Iqbal Road, Mohammadpur', 1207, '099a147c0c6bcd34009896b2cc88633c', 6);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `item` varchar(254) NOT NULL,
  `weight` int(11) NOT NULL,
  `details` varchar(254) NOT NULL,
  `contact` varchar(254) NOT NULL,
  `author` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `item`, `weight`, `details`, `contact`, `author`) VALUES
(6, 'Mobile', 1, 'Nokia 1200', '01621292989', 'Saiful Islam'),
(7, 'Newspaper', 10, '', '01621292989', 'Saiful Islam'),
(8, 'Book', 2, 'This is custom ice cream, you can order any type of ice cream from us.', '01621292989', 'Saiful Islam'),
(9, 'Newspaper', 5, 'Only newspapers no other metatrails. ', '01621292989', 'Saiful Islam'),
(10, 'Plastic Bags', 1, 'I have few plastic bags, they are old and not useful.', '01621292989', 'Nafiul'),
(11, 'Plastic bottles ', 2, 'I have 22 plastic bottle for sell, few of them are 1 littler and most of them are 2 litter bottle.', '0181111111', 'Saiful Islam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `job` varchar(254) DEFAULT NULL,
  `password` varchar(254) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `location` varchar(254) NOT NULL,
  `postal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `job`, `password`, `created`, `location`, `postal`) VALUES
(9, 'Saiful Islam', 'saiful@gmail.com', 'Business ', '4eeccab0e8c08e16a1d08296265e38fa', '2022-01-02 20:05:02', '7/12 Block-B, Lalmatia, Dhaka', 1207),
(15, 'Nafiul', 'nafiul@gmail.com', 'Student', '37876b0daefc27a84ca70a48f68a1d8d', '2022-02-07 18:50:34', '7/12 Block-B, Lalmatia, Dhaka', 1207),
(16, 'Alid Hasan', 'alid@gmail.com', 'Student', '5ac38d054b5c8072c18a1ede9d12fb54', '2022-02-12 21:43:49', 'Badda, Notun Bazar', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
