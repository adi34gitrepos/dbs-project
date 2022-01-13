-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2022 at 08:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Userid` int(20) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Userid`, `uname`, `password`) VALUES
(0, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `Food`
--

CREATE TABLE `Food` (
  `Food_id` int(30) NOT NULL,
  `Food_name` varchar(30) NOT NULL,
  `Food_price` float NOT NULL,
  `Food_type` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Food`
--

INSERT INTO `Food` (`Food_id`, `Food_name`, `Food_price`, `Food_type`) VALUES
(6, 'bonda', 30, 'snacks'),
(7, 'masal dosa', 30, 'breakfast');

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE `Items` (
  `Item_id` int(20) NOT NULL,
  `Item_name` varchar(30) NOT NULL,
  `Used_stock` varchar(20) NOT NULL,
  `Remaining_stock` varchar(20) NOT NULL,
  `Required_stock` varchar(20) NOT NULL,
  `Userid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`Item_id`, `Item_name`, `Used_stock`, `Remaining_stock`, `Required_stock`, `Userid`) VALUES
(1, 'Rice', '150', '50', '200', 0),
(2, 'Dhal', '350', '50', '400', 0),
(3, 'Chilli Powder', '80', '20', '50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Items_Category`
--

CREATE TABLE `Items_Category` (
  `Category` varchar(30) NOT NULL,
  `Item_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `ord_id` int(100) NOT NULL,
  `Food_name` varchar(400) NOT NULL,
  `Quantity` varchar(300) NOT NULL,
  `Price` int(200) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`ord_id`, `Food_name`, `Quantity`, `Price`, `Date`) VALUES
(1, 'vada', '20', 50, '2022-01-01'),
(2, 'idli', '5', 40, '2021-12-02'),
(3, 'North indian  thali', '3', 300, '2022-01-01'),
(4, 'masal dosa', '10', 150, '2022-01-10'),
(5, 'puri', '4', 60, '2021-12-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Userid`);

--
-- Indexes for table `Food`
--
ALTER TABLE `Food`
  ADD PRIMARY KEY (`Food_id`);

--
-- Indexes for table `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`Item_id`),
  ADD KEY `Userid` (`Userid`);

--
-- Indexes for table `Items_Category`
--
ALTER TABLE `Items_Category`
  ADD PRIMARY KEY (`Item_id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`ord_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Food`
--
ALTER TABLE `Food`
  MODIFY `Food_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Items`
--
ALTER TABLE `Items`
  MODIFY `Item_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `ord_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Items`
--
ALTER TABLE `Items`
  ADD CONSTRAINT `Items_ibfk_1` FOREIGN KEY (`Userid`) REFERENCES `admin` (`Userid`);

--
-- Constraints for table `Items_Category`
--
ALTER TABLE `Items_Category`
  ADD CONSTRAINT `Items_Category_ibfk_1` FOREIGN KEY (`Item_id`) REFERENCES `Items` (`Item_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
