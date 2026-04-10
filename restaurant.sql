-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Apr 10, 2026 at 09:46 PM
-- Server version: 8.4.8
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `menu_title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_title`, `description`, `price`, `image`) VALUES
(1, 'Pepperoni', 'Tomatensaus, mozzarella, pepperoni.', 12, 'assets/img/pepperoni.jpg'),
(2, 'Margherita', 'Tomatensaus, mozzarella, basilicum.', 9.5, 'assets/img/margherita.jpg'),
(3, 'Tonno e Cipolla', 'Tonijn, rode ui, kappertjes, mozzarella.', 12.5, 'assets/img/tonno.jpg'),
(4, 'Verdura', 'Courgette, paprika, champignon, rode ui, mozzarella.', 11.5, 'assets/img/verdura.jpg'),
(5, 'Quattro Formaggi', 'Mozzarella, gorgonzola, parmezaan, pecorino.', 13, 'assets/img/quattro-formaggi.jpg'),
(6, 'Diavola', 'Spicy salami, chili, mozzarella, tomatensaus.', 13.5, 'assets/img/diavola.jpg'),
(7, 'Capricciosa', 'Ham, champignon, artisjok, olijven, mozzarella.', 12.75, 'assets/img/capricciosa.jpg'),
(8, 'Prosciutto e Funghi', 'Ham, champignon, mozzarella, tomatensaus.', 12.5, 'assets/img/prosciutto-funghi.jpg'),
(9, 'Hawaii', 'Ham, ananas, mozzarella, tomatensaus.', 12.25, 'assets/img/hawai.jpg'),
(10, 'BBQ Chicken', 'BBQ-saus, kip, rode ui, mozzarella.', 13.75, 'assets/img/bbq-chicken.jpg'),
(11, 'Truffle Mushroom', 'Truffelcrème, champignon, mozzarella, rucola.', 14.5, 'assets/img/truffle-mushroom.jpg'),
(12, 'Vegan Pesto', 'Pesto, tomaat, paprika, olijven, vegan kaas.', 13.25, 'assets/img/vegan-pesto.jpg'),
(42, 'A', '12', 12, 'assets/img/margherita.jpg'),
(43, '37kg of cheese', 'cheese', 9.99, 'assets/img/vegan-pesto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `role` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `voornaam`, `achternaam`, `email`, `role`, `password`) VALUES
(1, 'admin', 'Bert', 'Verhof', 'bert@gmail.com', 'admin', 'password'),
(2, 'user', 'Hendrik', 'de Groot', 'hendrik@gmail.com', 'user', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
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
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
