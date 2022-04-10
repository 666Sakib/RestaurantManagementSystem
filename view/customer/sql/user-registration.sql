-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 01:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user-registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `disc` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `disc`, `img`, `price`) VALUES
(1, 'Oakey Smokey Pizza', 'Tomato sauce, mozzarella, anchovies, oregano, basil', '\"img/1.jpg\"', '100'),
(2, 'White Rocotta Pizza', 'Tomato sauce, mozzarella, anchovies, oregano, basil', 'img2.jpg', '150'),
(3, 'FANTASTIC IRON SHOES', 'Pizza, Uncategorized', 'img/3.jpg', '33'),
(4, 'GORGEOUS GRANITE CHAIR', 'Kebab, Uncategorized', 'img/4.jpg', '14'),
(5, 'LIGHTWEIGHT WOOL CAR', 'Flatbread with tomatoes, cheese, oil,\r\ngarlic, basil and sliced mozzarella.', 'img/5.jpg', '25'),
(6, 'CHICKEN BURGERS', 'Water spinach arugula pea tatsoi aubergine spring onion.', 'img/6.jpg', '50'),
(7, 'BEEF BURGERS', 'Beetroot water spinach okra water chestnut ricebean pea.', 'img/7.jpg', '70'),
(8, 'Beatifull pasta', 'Dandelion zucchini burdock yarrow chickpea dandelion.', 'img/8.jpg', '140'),
(9, 'Gluten free meals', 'Chickweed okra pea winter purslane coriander yarrow.', 'img/9.jpg', '130'),
(10, 'FRENCH FRIES', 'Tomato sauce, mozzarella, anchovies, oregano, basil', 'img10.jpg', '90'),
(11, 'SPINACH ALFREDO', 'Tomato sauce, mozzarella, anchovies, oregano, basil', 'img/11.jpg', '200'),
(12, 'NEAPOLITANA', 'Neapolitan the original pizza that has a history from 18h century Naples.', 'img/12.jpg', '160'),
(13, 'Gorgeous appetizers', 'Dandelion zucchini burdock yarrow chickpea dandelion sorrel.', 'img/13.jpg', '210'),
(14, 'SALADS & WRAPS', 'Beetroot water spinach okra water chestnut ricebean pea.', 'img/14.jpg', '40'),
(15, 'Oakey Smokey Pizza', 'This pizza got its start back in the late 1970’s in the classic Italian restaurant., oregano, basil', 'img15.jpg', '45'),
(16, 'HAWAIIAN', 'Despite its name, Hawaiian pizza has nothing to do with famous toppings.', 'img/16.jpg', '75');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `username`, `password`, `email`, `create_at`) VALUES
(2, 'sakib', '$2y$10$U58CHf.vYu0mO0SXAC1lCewsE37BUFLQmSGKUsf7B9F2HeF9rDnyG', 'asdsds@gmail.com', '2021-12-11 12:05:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
