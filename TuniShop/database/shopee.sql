-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
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
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Maestro', 'Chocolat Maestro Noir', 4.00, './assets/products/1.png', '2020-03-28 11:08:57'), -- NOW()
(2, 'Stil', 'STIL 1L Jus Cocktail', 2.80 , './assets/products/2.png', '2020-03-28 11:08:57'),
(3, 'Vitalait', 'Yaourt VITALAIT Noix de coco', 0.50, './assets/products/3.png', '2020-03-28 11:08:57'),
(4, 'Nejma', 'Huile NEJMA 5L', 21.00, './assets/products/4.png', '2020-03-28 11:08:57'),
(5, 'Vitalait', '4 Yaourts VIT UP Fraise', 3.90, './assets/products/5.png', '2020-03-28 11:08:57'),
(6, 'Nejma', 'Huile NEJMA 1.8L', 9.10, './assets/products/6.png', '2020-03-28 11:08:57'),
(7, 'Maestro', 'MAESTRO Lait Noisette', 4.20, './assets/products/8.png', '2020-03-28 11:08:57'),
(8, 'Stil', 'BNINO STIL 25CL Fraise banane', 0.78, './assets/products/10.png', '2020-03-28 11:08:57'),
(9, 'Randa', 'Spaghetti RANDA N°2', 0.50, './assets/products/11.png', '2020-03-28 11:08:57'),
(10, 'Sicam', 'tomate SICAM 800GR', 4.00, './assets/products/12.png', '2020-03-28 11:08:57'),
(11, 'Sicam', 'Harissa SICAM 380GR', 3.30, './assets/products/13.png', '2020-03-28 11:08:57'),
(12, 'Vitalait', 'DOLCE VITALAIT Zgougou', 0.75, './assets/products/14.png', '2020-03-28 11:08:57'),
(13, 'Randa', 'Couscous RANDA 500GR', 0.50, './assets/products/15.png', '2020-03-28 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

CREATE TABLE 'users' (
    'id' INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    'username' VARCHAR(50) NOT NULL UNIQUE,
    `first_name` varchar(100) NOT NULL,
    `last_name` varchar(100) NOT NULL,
    'password' VARCHAR(255) NOT NULL,
    'created_at' DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `user` (`user_id`, `first_name`, `last_name`,`password`, `register_date`) VALUES
(1, 'Bilel', 'Taboubi','123' ,'2020-03-28 13:07:17'),
(2, 'Aymen', 'Gabbouj','123' ,'2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
