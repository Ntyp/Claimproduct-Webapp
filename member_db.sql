-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 02:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nameuser` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `addressuser` varchar(255) NOT NULL,
  `contract_number` varchar(15) NOT NULL,
  `emailuser` varchar(255) NOT NULL,
  `serialx` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `type_generation` varchar(255) NOT NULL,
  `issue_description` varchar(255) NOT NULL,
  `createdate` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nameuser`, `username`, `addressuser`, `contract_number`, `emailuser`, `serialx`, `product_type`, `type_generation`, `issue_description`, `createdate`, `status`) VALUES
(8, 'MAX', 'aaa', 'Zongkaree', '191', 'aaa@email.com', '5555', 'ASUS', 'TUF', 'BOOM', '2020-03-18', 'Finish repair'),
(10, 'user', 'user', 'user', '1150', 'user@hotmail.com', '11501112', 'asus', 'TUF', 'Broken', '2020-03-19', 'Processing'),
(14, 'user', 'user', 'user', '191', 'user@hotmail.com', '1108', 'asus', 'TUF-55', 'BOOM', '2020-03-19', 'Finish repair'),
(15, 'user', 'user', 'user', 'user', 'user@hotmail.com', '131313', 'asus', 'TUF', 'Boom', '2020-03-21', 'Get into the product');

-- --------------------------------------------------------

--
-- Table structure for table `serialproduct`
--

CREATE TABLE `serialproduct` (
  `id` int(11) NOT NULL,
  `serialx` varchar(15) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `type_genration` varchar(255) NOT NULL,
  `warranty` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `serialproduct`
--

INSERT INTO `serialproduct` (`id`, `serialx`, `product_type`, `type_genration`, `warranty`) VALUES
(6, '11501112', 'ASUS', 'TUF', '2020-12-30'),
(7, '5555', 'ASUS', 'TUF', '2020-09-18'),
(9, '5656', 'HP', 'HP', '2019-01-30'),
(10, '1108', 'ASUS', 'TUF-55', '2023-06-21'),
(11, '110801', 'ASUS', 'KUY', '2019-01-30'),
(12, '131313', 'Asus', 'TUF', '2021-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `status`) VALUES
(5, 'user', '81dc9bdb52d04dc20036dbd8313ed055', 'user@hotmail.com', 'user', 'user', 'member'),
(6, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@hotmail.com', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serialproduct`
--
ALTER TABLE `serialproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `serialproduct`
--
ALTER TABLE `serialproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
