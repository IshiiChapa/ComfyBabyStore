-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 03:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Nike'),
(2, 'addidas'),
(3, 'Modano'),
(4, 'Moose'),
(5, 'Elegant Smokers');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(6, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Socks'),
(2, 'hats'),
(3, 'Comfy Baby'),
(4, 'Bodysuits'),
(5, 'Short');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(1, 30, 1288531409, 6, 1, 'pending'),
(2, 30, 357836252, 7, 1, 'pending'),
(3, 30, 285304598, 1, 1, 'pending'),
(4, 30, 228444497, 5, 1, 'pending'),
(5, 30, 762215867, 3, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(1, 'Floral Long Sleeve Top and Bloomer Shorts Set for Baby', 'Smocked bodice and bloomers have elasticized waist and leg openings', 'Dress,Floral', 3, 2, 'Floral Long-Sleeve Top and Bloomer Shorts Set for Baby.webp', '', '', '3500', '2023-12-17 17:53:51', 'true'),
(2, 'Microfleece Button Front Color-Block One-Piece for Baby', 'Long sleeves with snap button placket at front', 'long sleeves,snap', 3, 1, 'Microfleece Button-Front Color-Block One-Piece for Baby.webp', '', '', '2500', '2023-12-17 17:55:51', 'true'),
(3, 'Long-Sleeve Rib-Knit Metallic Bodysuit Tutu Dress for Baby', 'Long-Sleeve  Rib-Knit Metallic Bodysuit Tutu Dress for Baby Long-Sleeve Rib-Knit Metall Long-Sleeve Rib-Knit Metallic Bodysuit Tutu Dress for Babyic Bodysuit Tutu Dress for Baby', 'Long-Sleeve, Bodysuit, Dress', 1, 2, 'Long-Sleeve Rib-Knit Metallic Bodysuit Tutu Dress for Baby.webp', 'Long-Sleeve Rib-Knit Metallic Bodysuit Tutu Dress for Baby_3.webp', 'Printed Long-Sleeve Jersey One-Piece Romper for Baby_3.webp', '4500', '2024-01-03 14:36:41', 'true'),
(4, 'Long-Sleeve Rib-Knit Metallic Bodysuit Tutu Dress for Baby', 'Long-Sleeve  Rib-Knit Metallic Bodysuit Tutu Dress for Baby Long-Sleeve Rib-Knit Metall Long-Sleeve Rib-Knit Metallic Bodysuit Tutu Dress for Babyic Bodysuit Tutu Dress for Baby', 'Long-Sleeve, Bodysuit, Dress', 1, 2, 'Long-Sleeve Rib-Knit Metallic Bodysuit Tutu Dress for Baby.webp', 'Long-Sleeve Rib-Knit Metallic Bodysuit Tutu Dress for Baby_3.webp', 'Printed Long-Sleeve Jersey One-Piece Romper for Baby_3.webp', '4500', '2024-01-06 13:33:25', 'true'),
(5, 'Unisex Long-Sleeve Printed Bodysuit for Baby', 'Printed colorful bodysuit for newborn babies', 'bodysuits, long sleeve, unisex', 3, 2, 'Unisex Long-Sleeve Printed Bodysuit for Baby_3.webp', 'Unisex Long-Sleeve Printed Bodysuit for Baby_2.webp', 'Unisex Long-Sleeve Printed Bodysuit for Baby.webp', '5500', '2024-01-31 11:48:35', 'true'),
(6, 'Unisex 6 Piece Printed Pajama Set for Toddler & Baby', 'Pajama set for unisex babies', 'Pajama, Unisex', 2, 3, 'Unisex 6-Piece Printed Pajama Set for Toddler & Baby.webp', 'Unisex Hoode Critter One-Piece Romper for Baby.webp', 'Unisex Bodysuit 3-Pack for Baby.webp', '3000', '2024-01-31 19:53:15', 'true'),
(7, 'Unisex Thermal-Knit Buttoned Jogger Pants for Baby_2', 'Pants for babies', 'pants', 3, 3, 'Unisex Loose Jeans for Baby.webp', 'Unisex Thermal-Knit Buttoned Jogger Pants for Baby_2.webp', 'Unisex Thermal-Knit Buttoned Jogger Pants for Baby_4.webp', '4000', '2024-01-31 20:14:37', 'true'),
(8, 'Unisex utility zip pocket hooded jacket for baby front', 'Jacket for babies', 'Jacket, Zip', 3, 5, 'Unisex utility zip pocket hooded jacket for baby front.jpg', 'Unisex Sleeveless Henley Romper for Baby.webp', '14.webp', '3000', '2024-02-03 10:56:06', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
(1, 30, 3500, 285304598, 1, '2024-02-03 07:05:53', 'pending'),
(2, 30, 9000, 228444497, 2, '2024-02-03 10:32:56', 'pending'),
(3, 30, 4500, 762215867, 1, '2024-02-03 10:37:54', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `user_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(30, 'kittya', 'kit@gmail.com', '$2y$10$tRnafSDs8LzxoCEW165VG.oRoCuzQMmxMS3TBuCDtuFQmE4DfRca.', 'banner2.jpg', '::1', '113, Galkanda Lane Kandy', '0711525404'),
(32, 'Dilshana', 'Dilshana@gmail.com', '$2y$10$0oxL2/hzEyJgNCPaJuvtMu6XX/ztJjhlbZ5ZQWCVX/OBz4GM.VrN.', 'Corduroy Ruffle-Trim Embroidered Hearts Top and Joggers for Baby.webp', '::1', '109/12 Aniwatta Kandy', '076878725');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
