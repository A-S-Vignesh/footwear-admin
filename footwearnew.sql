-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 05, 2024 at 08:06 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `footwear`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `pass`) VALUES
('Starvicky', 'Vignesh@1234');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_det`
--

DROP TABLE IF EXISTS `cart_det`;
CREATE TABLE IF NOT EXISTS `cart_det` (
  `cartid` int NOT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `username` varchar(30) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `feedback` varchar(300) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`username`, `gmail`, `subject`, `feedback`) VALUES
('star', 'vicky@abc.com', 'Product is very good', 'I purchased a shoe and it was very good at low price');

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

DROP TABLE IF EXISTS `kids`;
CREATE TABLE IF NOT EXISTS `kids` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(225) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_qty` int NOT NULL DEFAULT '1',
  `product_image` varchar(100) NOT NULL,
  `product_code` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Puma SPONGEBOB Popcat 20 Slides', '599', 1, 'Images/Productimg/Puma SPONGEBOB Popcat 20 Slides.jpg', 'p3001'),
(2, 'PUMA SPONGEBOB Carina 2.0 Sneakers', '389', 1, 'Images/Productimg/PUMA SPONGEBOB Carina 2.0 Sneakers.jpg', 'p3002'),
(3, 'Puma Black Celandine Hero Blue', '4999', 1, 'Images/Productimg/Puma Black Celandine Hero Blue.jpg', 'p3003'),
(4, 'Walkaroo Kids Solid Belly Shoes', '269', 1, 'Images/Productimg/Walkaroo Kids Solid Belly Shoes.jpg', 'p3004'),
(5, 'Walkaroo Kids Cartoonic Mary Jane Shoes', '349', 1, 'Images/Productimg/Walkaroo Kids Cartoonic Mary Jane Shoes.jpg', 'p3005'),
(6, 'Walkaroo Kids Cartoonic Fisherman Sandals', '545', 1, 'Images/Productimg/Walkaroo Kids Cartoonic Fisherman Sandals.jpg', 'p3006');

-- --------------------------------------------------------

--
-- Table structure for table `login_det`
--

DROP TABLE IF EXISTS `login_det`;
CREATE TABLE IF NOT EXISTS `login_det` (
  `coustomerid` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(15) NOT NULL,
  PRIMARY KEY (`uname`),
  UNIQUE KEY `coustomerid` (`coustomerid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login_det`
--

INSERT INTO `login_det` (`coustomerid`, `uname`, `pass`) VALUES
(1, 'Vicky', 'Star@123'),
(2, 'Thangapandi', '8111032827'),
(3, 'Hari', '1234'),
(4, 'Devil', '123'),
(5, 'Surali', '123');

-- --------------------------------------------------------

--
-- Table structure for table `newarival`
--

DROP TABLE IF EXISTS `newarival`;
CREATE TABLE IF NOT EXISTS `newarival` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(225) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_qty` int NOT NULL DEFAULT '1',
  `product_image` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newarival`
--

INSERT INTO `newarival` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Puma Trinity Sneakers', '7999', 1, 'Images/Productimg/Puma Trinity Sneakers.jpg', 'p1006'),
(2, 'Puma Stride Sneakers', '6999', 1, 'Images/Productimg/Puma Stride Sneakers.jpg', '6999'),
(3, 'Zora Sneakers', '5999', 1, 'Images/Productimg/Zora Sneakers.jpg', 'p2009'),
(4, 'Walkaroo Flat Sliper', '1299', 1, 'Images/Productimg/Walkaroo Flat Sliper.jpg', 'p2003'),
(5, 'Walkaroo Melange Sock Shoes', '2899', 1, 'Images/Productimg/Walkaroo Melange Sock Shoes.jpg', 'p2002'),
(6, 'Walkaroo Pull-on Belly Shoes', '1759', 1, 'Images/Productimg/Walkaroo Pull-on Belly Shoes.jpg', 'p1005');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(13, 'Vignesh', 'asvicki2002@gmail.com', '8667429869', '5A/334A, Caldwell, colony,3rd Street, Thoothukudi', 'cod', 'Puma Stride Sneakers(2), Walkaroo Melange Sock Shoes(1)', '16897'),
(14, 'Siva', 'sivaprakashmaster@gmail.com', '9788848712', '172, Thalavaipuram, near sankarankovil, Thenkasi', 'cod', 'PUMA SPONGEBOB Carina 2.0 Sneakers(1), Walkaroo Kids Solid Belly Shoes(1), Walkaroo Solid Fisherman Sandal(1), Nike Air Force(1)', '3656'),
(15, 'Thangapandi', 'thangapandibalasubaramaniyan@gmail.com', '8111032827', '444/A, Bose vethi, Sellur, Madurai', 'cod', 'Walkaroo Melange Sock Shoes(2)', '5798'),
(22, 'Ganesh', 'ganeshravi@gmail.com', '9876543210', '5A/334A, Caldwell colony, 3rd street,\r\nThoothukudi - 628008', 'cod', 'Walkaroo Melange Sock Shoes(5), Walkaroo Pull-on Belly Shoes(1), Puma Stride Sneakers(3)', '37251');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int NOT NULL DEFAULT '1',
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code_2` (`product_code`),
  KEY `product_code` (`product_code`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Nike Air jordan 1 Mid', '3999', 1, 'Images/Productimg/Nike Air jordan 1 Mid.jpg', 'p1000'),
(2, 'Nike Air Force', '1999', 1, 'Images/Productimg/Nike Air Force.jpg', 'p1001'),
(3, 'Nike Air Max 270', '3499', 1, 'Images/Productimg/Nike Air Max 270.jpg', 'p1002'),
(4, 'Walkaroo Solid Fisherman Sandal', '999', 1, 'Images/Productimg/Walkaroo Solid Fisherman Sandal.jpg', 'p1003'),
(5, 'Walkaroo Strappy Floater Sandals', '12999', 1, 'Images/Productimg/Walkaroo Strappy Floater Sandals.jpg', 'p1004'),
(6, 'Walkaroo Pull-on Belly Shoes', '1759', 1, 'Images/Productimg/Walkaroo Pull-on Belly Shoes.jpg', 'p1005'),
(7, 'Puma Trinity Sneakers', '7999', 1, 'Images/Productimg/Puma Trinity Sneakers.jpg', 'p1006'),
(8, 'Puma Stride Sneakers', '6999', 1, 'Images/ProductImg/Puma Stride Sneakers.jpg', 'p1008'),
(9, 'Puma Anzarun Lite Slipon Sneakers', '3999', 1, 'Images/Productimg/Puma Anzarun Lite Slipon Sneakers.jpg', 'p1007'),
(10, 'Nike Air Max Sol', '1599', 1, 'Images/Productimg/Nike Air Max Sol.jpg', 'p1009'),
(11, 'Nike Blazer Mid Pro Club', '4499', 1, 'Images/Productimg/Nike Blazer Mid Pro Club.jpg', 'p1010'),
(12, 'Nike Everyday lightweight', '899', 1, 'Images/Productimg/Nike Everyday lightweight.jpg', 'p1011');

-- --------------------------------------------------------

--
-- Table structure for table `prod_det`
--

DROP TABLE IF EXISTS `prod_det`;
CREATE TABLE IF NOT EXISTS `prod_det` (
  `prodid` int NOT NULL,
  `prodname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prodprice` decimal(10,2) NOT NULL,
  `Brand` varchar(15) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`prodid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `prod_det`
--

INSERT INTO `prod_det` (`prodid`, `prodname`, `prodprice`, `Brand`, `Gender`) VALUES
(2, 'Nike Air jordan 1 Mid', '3999.00', 'Nike', 'Male'),
(1, 'Nike Air Force', '1999.00', 'Nike', 'Male'),
(3, 'Nike Air Max 270', '3499.00', 'Nike', 'Male'),
(4, 'Walkaroo Solid Fisherman Sandal', '999.00', 'Walkaroo', 'Male'),
(5, 'Walkaroo Strappy Floater Sandals', '1299.00', 'Walkaroo', 'Male'),
(6, 'Walkaroo Pull-on Belly Shoes', '1759.00', 'Walkaroo', 'Male'),
(7, 'Puma Trinity Sneakers', '7999.00', 'Puma', 'Male'),
(8, 'Puma Stride Sneakers', '6999.00', 'Puma', 'Male'),
(9, 'Puma Anzarun Lite Slipon Sneakers', '3999.00', 'Puma', 'Male'),
(10, 'Nike Air Max Sol', '1599.00', 'Nike', 'Male'),
(11, 'Nike Blazer Mid Pro Club', '4499.00', 'Nike', 'Male'),
(12, 'Nike Everyday lightweight', '899.00', 'Nike', 'Male'),
(13, 'Walkaroo Cross Strap Slide Sandles', '859.00', 'Walkaroo', 'Female'),
(14, 'Walkaroo Melange Sock Shoes', '2899.00', 'Walkaroo', 'Female'),
(15, 'Walkaroo Flat Sliper', '1299.00', 'Walkaroo', 'Female'),
(16, 'Nike Pegasus 40', '11895.00', 'Nike', 'Female'),
(17, 'Air Jordan 1 Elevate Low', '5499.00', 'Nike', 'Female'),
(18, 'Nike Air Max SYSTM', '3849.00', 'Nike', 'Female'),
(19, 'Puma Fier Nitro Pop Sneakers', '7999.00', 'Puma', 'Female'),
(22, 'Puma SPONGEBOB Popcat 20 Slides', '599.00', 'Puma', 'Kids'),
(23, 'PUMA SPONGEBOB Carina 2.0 Sneakers', '389.00', 'Puma', 'Kids'),
(24, 'Puma Black Celandine Hero Blue', '4999.00', 'Puma', 'Kids'),
(25, 'Walkaroo Kids Solid Belly Shoes', '269.00', 'Walkaroo', 'Kids'),
(26, 'Walkaroo Kids Cartoonic Mary Jane Shoes', '349.00', 'Walkaroo', 'Kids'),
(27, 'Walkaroo Kids Cartoonic Fisherman Sandals', '545.00', 'Walkaroo', 'Kids'),
(28, 'Nike Flex Plus 2', '899.00', 'Nike', 'Kids'),
(29, 'Nike Air Max 270 GO', '1099.00', 'Nike', 'Kids'),
(30, 'Nike Air Max 360', '1849.00', 'Nike', 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

DROP TABLE IF EXISTS `women`;
CREATE TABLE IF NOT EXISTS `women` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(225) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_qty` varchar(10) NOT NULL DEFAULT '1',
  `product_image` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Walkaroo Cross Strap Slide', '859', '1', 'Images/Productimg/Walkaroo Cross Strap Slide.jpg', 'p2001'),
(2, 'Walkaroo Melange Sock Shoes', '2899', '1', 'Images/Productimg/Walkaroo Melange Sock Shoes.jpg', 'p2002'),
(3, 'Walkaroo Flat Sliper', '1299', '1', 'Images/Productimg/Walkaroo Flat Sliper.jpg', 'p2003'),
(4, 'Nike Pegasus 40', '11895', '1', 'Images/Productimg/Nike Pegasus 40.jpg', 'p2004'),
(5, 'Air Jordan 1 Elevate Low', '5499', '1', 'Images/Productimg/Air Jordan 1 Elevate Low.jpg', 'p2005'),
(6, 'Nike Air Max SYSTM', '3849', '1', 'Images/Productimg/Nike Air Max SYSTM.jpg', 'p2006'),
(7, 'Agile Trip Sneakers', '2570', '1', 'Images/Productimg/Agile Trip Sneakers.jpg', 'p2007'),
(8, 'Puma Fier Nitro Pop Sneakers', '7999', '1', 'Images/Productimg/Puma Fier Nitro Pop Sneakers.jpg', 'p2008'),
(9, 'Zora Sneakers', '5999', '1', 'Images/Productimg/Zora Sneakers.jpg', 'p2009');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
