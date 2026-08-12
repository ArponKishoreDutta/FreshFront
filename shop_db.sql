-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2026 at 11:38 PM
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
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `details`, `price`, `image`) VALUES
(24, 'Organic Red Apples', 'fruits', 'Fresh, crisp, and sweet organic red apples sourced directly from local orchards.', 3, 'Apple.jpeg'),
(25, 'Fresh Yellow Bananas', 'fruits', 'Rich in potassium and naturally sweet, perfect for breakfast and daily snacking.', 2, 'Banana.jpeg'),
(26, 'Sweet Red Grapes', 'fruits', 'Juicy and vibrant red seedless grapes, perfect for desserts and fresh salads.', 4, 'Grapes.jpeg'),
(27, 'Ripe Organic Mangoes', 'fruits', 'Sweet, aromatic tropical mangoes packed with rich flavor and vitamins.', 5, 'Mango.jpeg'),
(28, 'Juicy Golden Pineapple', 'fruits', 'Naturally sweet and tangy golden pineapple, rich in vitamin C.', 4, 'Pineapple.jpeg'),
(29, 'Fresh Red Strawberries', 'fruits', 'Sweet, fragrant red strawberries packed with antioxidants.', 6, 'Strawberry.jpeg'),
(30, 'Organic Farm Carrots', 'vegitables', 'Crunchy, sweet organic carrots packed with Vitamin A and essential nutrients.', 2, 'Carrot.jpeg'),
(31, 'Fresh Cauliflower', 'vegitables', 'Farm fresh white cauliflower heads, perfect for roasting, stir-fry, or curries.', 3, 'Cauliflower.jpeg'),
(32, 'Crisp Green Cucumber', 'vegitables', 'Hydrating and fresh green cucumbers, ideal for salads and refreshing snacks.', 2, 'Cucumber.jpeg'),
(33, 'Fresh Red Onions', 'vegitables', 'Essential kitchen staple, crisp and pungent red onions for everyday cooking.', 2, 'Onion.jpeg'),
(34, 'Fresh Red Amaranth', 'vegitables', 'Nutrient-dense fresh red amaranth greens, rich in iron and calcium.', 2, 'Red Amaranth.jpeg'),
(35, 'Organic Green Spinach', 'vegitables', 'Hand-picked tender spinach leaves, perfect for green smoothies and cooking.', 2, 'Spinach.jpeg'),
(36, 'Organic Green Zucchini', 'vegitables', 'Tender organic green zucchini, excellent for grilling, roasting, or pasta.', 3, 'Zucchini.jpeg'),
(37, 'Premium Lean Beef', 'meat', 'High quality, fresh lean cut beef ideal for roasting, grilling, or curries.', 12, 'Beef.jpeg'),
(38, 'Farm Raised Whole Chicken', 'meat', 'Fresh, tender whole chicken sourced from local organic poultry farms.', 8, 'Chicken.jpeg'),
(39, 'Fresh Tender Mutton', 'meat', 'Premium quality mutton chops, lean and flavorful for gourmet curries.', 15, 'Mutton.jpeg'),
(40, 'Premium Hilsa Fish', 'fish', 'Authentic fresh Hilsa fish, renowned for its rich flavor and delicate texture.', 14, 'Hilsa.jpeg'),
(41, 'Fresh Katla Fish', 'fish', 'Sustainably sourced fresh Katla fish cut into clean curry steaks.', 10, 'Katla.jpeg'),
(42, 'Fresh Rohu Fish', 'fish', 'Freshwater Rohu fish steaks, versatile for traditional fish curry recipes.', 9, 'Rohu.jpeg'),
(43, 'Wild Atlantic Salmon', 'fish', 'Rich in Omega-3 fatty acids, fresh Atlantic salmon fillet cut.', 16, 'Salmon.jpeg'),
(44, 'Fresh Tangra Fish', 'fish', 'Fresh small Tangra river fish, popular for light and spicy fish broth.', 11, 'Tangra.jpeg'),
(45, 'Fresh Tilapia Fillet', 'fish', 'Clean, mild-flavored fresh Tilapia fish, great for baking or frying.', 8, 'Tilapia.jpeg'),
(46, 'Yellowfin Tuna Steak', 'fish', 'Wild caught ocean fresh Yellowfin tuna steaks, dense and flavorful.', 15, 'Tuna.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `image`) VALUES
(31, 'Arpon ', 'arpondutta50@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user', 'me.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
