-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 03:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buyezee`
--

-- --------------------------------------------------------

--
-- Table structure for table `credential`
--

CREATE TABLE `credential` (
  `email` varchar(50) NOT NULL,
  `password` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(400) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `username`) VALUES
('praveensangroula11234@gmail.com', '$2y$10$I3Tn/zR3vEuJzy9N0YIXmeSqFMBV5f0mAPgqOmrM9Mw3VPu0UEtra', 'admin'),
('praveensangroula1234@gmail.com', '$2y$10$eqCf3aHTnednB1i2K07U9uc//uSwQdvNekgQlOa9iirI/sWyq7W0a', 'praveen8954');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `id` int(100) NOT NULL,
  `username` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `item_name` varchar(400) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `img_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`id`, `username`, `item_name`, `price`, `quantity`, `order_date`, `img_url`) VALUES
(4, 'praveen8954', 'Amul Milk', 40, 1, '2023-07-05 11:40:58', '/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Milk/1.jpg'),
(4, 'praveen8954', 'Rajdhani Poha', 40, 1, '2023-07-05 11:40:58', '/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Poha , Daliya _ Other Grains/1.jpg'),
(4, 'praveen8954', 'Saffola Masala Oats', 40, 1, '2023-07-05 11:40:58', '/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Oats/1.jpg'),
(5, 'praveen8954', 'Amul Butter', 40, 1, '2023-07-05 11:42:02', '/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Butter _ More/1.jpg'),
(6, 'praveen8954', 'Amul Butter', 40, 1, '2023-07-05 18:27:41', '/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Butter _ More/1.jpg'),
(6, 'praveen8954', 'Amul Milk', 40, 1, '2023-07-05 18:27:41', '/BCA Project BUYZEE/Images/Dairy _ Breakfast _/Milk/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `username` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(300) NOT NULL,
  `id` int(11) NOT NULL,
  `pay_mode` varchar(50) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`username`, `name`, `phone`, `address`, `id`, `pay_mode`, `order_date`) VALUES
('praveen8954', 'praveen sangroula', '08954375278', 'House no.6 bacchi vihar, Bacchi vihar', 4, 'COD', '2023-07-05 11:40:58'),
('praveen8954', 'priyansuu', '35', 'House no.6 bacchi vihar, Bacchi vihar', 5, 'COD', '2023-07-05 11:42:02'),
('praveen8954', 'praveen sangroula', '08954375278', 'House no.6 bacchi vihar, Bacchi vihar', 6, 'COD', '2023-07-05 18:27:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credential`
--
ALTER TABLE `credential`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credential`
--
ALTER TABLE `credential`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
