-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 12:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(30) NOT NULL,
  `U_type` enum('Admin','Customer') NOT NULL DEFAULT 'Customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `username`, `fullname`, `address`, `email`, `contact`, `dob`, `password`, `U_type`) VALUES
(24, 'yeme', 'Md. Yemen Ahmed', 'Sirajganj', 'yemen@gmail.com', 1890372954, '1997-09-03', '23514', 'Customer'),
(25, 'anika', 'Anika Tahseen Meem', 'Tangail,Bangladesh', 'anika@admin.com', 1954768935, '1997-06-01', '2121', 'Admin'),
(26, 'sams', 'Md Raitul Islam Sams', 'Munshiganj', 'raitul@admin.com', 1982618304, '1998-07-01', '1212', 'Admin'),
(27, 'rahim21', 'Rahim ahmed', 'Narayanganj', 'rahim@gmail.com', 1789978633, '1991-10-06', '3214', 'Customer'),
(28, 'karim12', 'Karim Ahmed', 'Rangpur', 'karin@gmail.com', 1789294387, '1998-10-10', '13124', 'Customer'),
(29, 'aslam322', 'Aslam khan', 'Barishal', 'aslam@gmail.com', 1999999997, '1997-11-23', '21341', 'Customer'),
(30, 'sams234', 'Md. Raitul Islam Sams', 'Idrakpur', 'aslam1@gmail.com', 1932618304, '2020-11-23', '1111', 'Customer'),
(31, 'admin', 'Md. Raitul Islam Sams', 'Idrakpur', 'asl11am@gmail.com', 1991299999, '2020-11-23', '3434', 'Customer'),
(38, 'raituli', 'raitul sams ', 'manikpur', 'rai@gmail.com', 1788267345, '2020-11-30', '1212', 'Customer'),
(39, 'samsa21', 'md diraj uddin', 'sirajganj', 'DIRAJ@gmail.com', 1459999999, '2020-11-30', '1212', 'Customer'),
(40, 'alishah', 'md ali shah', 'Idrakpur', 'ali@gmail.com', 1943999999, '2020-11-30', '1212', 'Customer'),
(41, 'raitul', 'sams', 'sdfasdfas', 'dd@gmail.com', 1566523765, '2020-12-03', '123123', 'Customer'),
(42, 'raitulsams', 'Md. Raitul Islam Sams', 'sdfasdfas', 'raitulsams202@gmail.com', 1999999999, '2020-12-03', 'awevcawe', 'Customer'),
(43, 'sams1', 'Raitul Sams', 'Idrakpur', 'sa@gmail.com', 1982618204, '1998-07-01', 'sams', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `joining_date` date NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `name`, `email`, `phone`, `gender`, `dob`, `age`, `address`, `joining_date`, `password`) VALUES
(2, 'Rahat ali', 'rahat@gmail.com', 1987654354, 'Male', '2020-11-04', '20y', 'Sirajdikhan', '2020-11-27', '1111'),
(3, 'Naeem Hasan Khan', 'naeem@emp.com', 1987649587, 'Male', '1998-05-01', '22y', 'Manikpur', '2020-11-20', '1234'),
(6, 'Md. Raitul Islam Sams', 'raitulsams202@gmail.com', 1789093183, 'Male', '2020-11-21', '22y', 'sdfasdfas', '2020-11-21', '1212'),
(7, 'Rahat Khan', 'naeem@emp.com', 1982618204, 'Male', '2020-11-21', '15y6m', 'Narayanganj', '2020-11-21', '1212'),
(9, 'Md. Raitul Islam Sams', 'raitulsams202@gmail.com', 1789193183, 'Male', '2020-12-31', '22y', 'sdfasdfas', '2020-12-08', '123123'),
(10, 'Md. Raitul Islam Sams', 'raitulsams202@gmail.com', 1789193183, 'Male', '2020-12-31', '22y', 'sdfasdfas', '2020-12-08', '123123'),
(11, 'Md. Raitul Islam Sams', 'raitulsams202@gmail.com', 1982618304, 'Male', '2020-12-31', '22y', 'sdfasdfas', '2020-12-31', '1212'),
(12, 'Md. Raitul Islam Sams', 'raitulsams202@gmail.com', 1982618304, 'Male', '2020-12-31', '22y', 'sdfasdfas', '2020-12-31', '1212');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`) VALUES
(1, 'Red Printed T-shirt', 50.00, 'product-1.jpg'),
(2, 'Sprint Men\'s Sneakers', 90.00, 'product-2.jpg'),
(3, 'Slim Fit Chino Pants', 90.00, 'product-3.jpg'),
(4, 'Puma Navy Blue T-shirt', 60.00, 'product-4.jpg'),
(5, 'SPRINT Men\'s Slip On Shoe', 190.00, 'product-5.jpg'),
(6, 'Black T-shirt', 40.00, 'product-6.jpg'),
(7, 'Linear 3 Pairs Socks', 70.00, 'product-7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
