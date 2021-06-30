-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 10, 2020 at 01:48 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookspurchased`
--

CREATE TABLE `bookspurchased` (
  `id` int(10) NOT NULL,
  `book_id` text NOT NULL,
  `subtotal` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` text NOT NULL,
  `pin_code` int(10) NOT NULL,
  `dop` date NOT NULL DEFAULT current_timestamp(),
  `address` text NOT NULL,
  `landmark` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookspurchased`
--

INSERT INTO `bookspurchased` (`id`, `book_id`, `subtotal`, `user_id`, `user_name`, `pin_code`, `dop`, `address`, `landmark`, `city`, `state`, `status`) VALUES
(1, '2', 10, 2, 'ashish', 400703, '2020-09-10', 'Vashi', 'near Abott Hotel', 'Navi Mumbai', 'Maharashtra', 'sucess'),
(2, '6', 10, 2, 'ashish', 400703, '2020-09-10', 'Vashi', 'near Abott Hotel', 'Navi Mumbai', 'Maharashtra', 'sucess'),
(3, '4', 90, 2, 'ashish', 0, '0000-00-00', 'vashi', 'near abott hotel', 'navi mumbai', 'maharashtra', 'sucess'),
(5, '16', 5, 2, 'ashish', 400703, '2020-09-10', 'vashi', 'near Abott Hotel', 'Navi mumbai', 'maharashtra', 'pend'),
(6, '17', 15, 2, 'ashish', 400703, '2020-09-10', 'vashi', 'near Abott Hotel', 'Navi mumbai', 'maharashtra', 'pend'),
(7, '11', 20, 2, 'ashish', 400703, '2020-09-10', 'vashi', 'near Abott Hotel', 'Navi mumbai', 'maharashtra', 'pend'),
(8, '19', 15, 2, 'ashish', 400703, '2020-09-10', 'vashi', 'near Abott Hotel', 'Navi mumbai', 'maharashtra', 'pend'),
(9, '2', 15, 2, '3132', 400703, '2020-09-10', 'nerul', 'rait', 'navi mumbai', 'maharashtra', 'pend'),
(10, '2', 15, 2, '3132', 400703, '2020-09-10', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend'),
(11, '2', 15, 2, '3132', 400703, '2020-09-10', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend'),
(12, '2', 15, 2, 'ashish', 400703, '2020-09-10', 'nerul', ' dsa ', 'navi mumbai', 'maharashtra', 'pend'),
(13, '2', 55, 2, 'ashish', 400703, '2020-09-10', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend'),
(14, '3', 55, 2, 'ashish', 400703, '2020-09-10', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend'),
(15, '9', 55, 2, 'ashish', 400703, '2020-09-10', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend'),
(16, '2', 55, 2, 'lasdjld', 400703, '2020-09-10', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend'),
(17, '3', 55, 2, 'lasdjld', 400703, '2020-09-10', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend'),
(18, '9', 55, 2, 'lasdjld', 400703, '2020-09-10', 'nerul', ' rait ', 'navi mumbai', 'maharashtra', 'pend');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `book_id`) VALUES
(42, 1, 10),
(59, 2, 2),
(60, 2, 3),
(61, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `book_id` int(11) NOT NULL,
  `publication` text NOT NULL,
  `genres` text NOT NULL,
  `book_name` text NOT NULL,
  `Author` text NOT NULL,
  `book_price` text NOT NULL,
  `book_img` text NOT NULL,
  `entry_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`book_id`, `publication`, `genres`, `book_name`, `Author`, `book_price`, `book_img`, `entry_date`) VALUES
(1, 'King Comics Hong Kong', 'comic', 'One Piece', 'Eiichiro Oda', '10', './Assets/products/comic1.png', '2020-06-01'),
(2, 'King Comics Hong Kong', 'comic', 'Record of Ragnarok', 'Takumi Fukui', '15', './Assets/products/comic2.png', '2020-07-06'),
(3, 'King Comics Hong Kong', 'comic', 'Dragon Ball Super', 'Akira Toriyama', '20', './Assets/products/comic3.png', '2020-08-11'),
(4, 'King Comics Hong Kong', 'comic', 'Bleach', 'Tike Kubo', '20', './Assets/products/comic4.png', '2020-08-11'),
(5, 'King Comics Hong Kong', 'comic', 'Naruto', 'Masashi Kishimoto', '30', './Assets/products/comic5.png', '2020-08-19'),
(6, 'Penguin Random House', 'crime', 'Mind Hunter', 'John Douglas', '17', './Assets/products/crime1.png', '2020-09-18'),
(7, 'Penguin Random House', 'crime', 'You', 'Caroline Kepnes', '15', './Assets/products/crime2.png', '2020-09-24'),
(8, 'Penguin Random House', 'crime', 'English Crimes', 'Roger Harrington', '20', './Assets/products/crime3.png', '2020-09-17'),
(9, 'Penguin Random House', 'crime', 'Helter Sketier', 'Vincent Buglosi', '20', './Assets/products/crime4.png', '2020-09-24'),
(10, 'Penguin Random House', 'crime', 'In Cold Blood', 'Turam Capote', '10', './Assets/products/crime5.png', '2020-09-23'),
(11, 'Macmillan Publishers', 'sci-fi', 'Games Of Thrones', 'George R R Martin', '20', './Assets/products/fic1.png', '2020-09-17'),
(12, 'Macmillan Publishers', 'sci-fi', 'Harry Potter', 'J K Rowling', '13', './Assets/products/fic2.png', '2020-09-24'),
(13, 'Macmillan Publishers', 'sci-fi', 'Hobbit', 'J R R Tolkieh', '20', './Assets/products/fic3.png', '2020-09-24'),
(14, 'Macmillan Publishers', 'sci-fi', 'Dracula', 'Bram Stoker', '15', './Assets/products/fic4.png', '2020-09-16'),
(15, 'Macmillan Publishers', 'sci-fi', 'Life Of Pi\r\n', 'Yann Martel', '10', './Assets/products/fic5.png', '2020-09-20'),
(16, 'Hachettle livre', 'pop', 'Tale Of Two Cities', 'Charles Dickes', '30', './Assets/products/pop1.png', '2020-09-02'),
(17, 'Hachettle livre', 'pop', 'Four Tragedies', 'William Shakespeare', '10', './Assets/products/pop2.png', '2020-09-01'),
(18, 'Hachettle livre', 'pop', 'Graveyard Book', 'Neil Gaiman', '26', './Assets/products/pop3.png', '2020-09-16'),
(19, 'Hachettle livre', 'pop', 'Great Expectations', 'Charles Dickens', '12', './Assets/products/pop4.png', '2020-08-04'),
(20, 'Hachettle livre', 'pop', 'Romeo and Juliet', 'William Shakespeare', '16', './Assets/products/pop5.png', '2020-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `number` int(10) NOT NULL,
  `delivery_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `number`, `delivery_address`) VALUES
(1, 'ricky', 'rait123', 973812732, 'nerul'),
(2, 'ashish', '1234asd', 938128319, 'vashi'),
(3, 'Bhuran', '1234qwe', 712438132, 'Kalyan'),
(4, 'AshishRait', '12345', 123456789, 'Nerul'),
(5, 'RickyRait', '12345bgh', 923456789, 'Nerul'),
(6, 'BhuranRait', 'Rait', 123456789, 'Nerul'),
(7, 'prashant', '1234', 12938278, 'Nerul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookspurchased`
--
ALTER TABLE `bookspurchased`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookspurchased`
--
ALTER TABLE `bookspurchased`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
