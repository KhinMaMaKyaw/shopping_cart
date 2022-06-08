-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 11:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`id`, `name`, `image`, `price`, `created_at`) VALUES
(1, 'Apple Juice', 'apple.jpg', 1500, '2022-06-07'),
(2, 'Orange Juice', 'orange.jpg', 1500, '2022-06-07'),
(3, 'Avocado Juice', 'avocado.jpg', 1500, '2022-06-07'),
(4, 'Strawberry Juice', 'strawberry.jpg', 1500, '2022-06-07'),
(5, 'Carrot Juice', 'carrot.jpg', 1500, '2022-06-07'),
(6, 'Lemon Juice', 'lemon.jpg', 1500, '2022-06-07'),
(7, 'Mango Juice', 'mango.jpg', 2000, '2022-06-07'),
(8, 'Mixfruit Juice', 'mixfruit.jpg', 1500, '2022-06-07'),
(9, 'Pineapple Juice', 'pineapple.jpg', 1500, '2022-06-07'),
(10, 'Watermelon Juice', 'watermelon.jpg', 1500, '2022-06-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
