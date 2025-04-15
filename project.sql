-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 05:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` varchar(10) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `service_type` varchar(20) NOT NULL,
  `cloth_type` varchar(20) NOT NULL,
  `weight_combination` varchar(20) NOT NULL,
  `exact_weight` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `pickup_date` date NOT NULL,
  `delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `customer_name`, `service_type`, `cloth_type`, `weight_combination`, `exact_weight`, `price`, `discount`, `total_price`, `pickup_date`, `delivery_date`) VALUES
('BK001', 'guhan ks', 'steam_iron', 'saree', 'more_than_10', 20.00, 10.00, 40.00, 160.00, '2023-06-06', '2023-06-14'),
('BK002', 'naveen', 'steam_iron', 'suit_pant', 'less_than_10', 6.00, 10.00, 3.00, 57.00, '2023-06-07', '2023-06-15'),
('BK003', 'vinay', 'bag_toy_wash', 'woolen', 'more_than_10', 15.00, 6.00, 18.00, 72.00, '2023-06-08', '2023-06-16'),
('BK004', 'guhan', 'steam_iron', 'shirt', 'more_than_10', 15.00, 10.00, 30.00, 120.00, '2023-06-14', '2023-06-21'),
('BK006', 'guhan', 'bag_toy_wash', 'nylon', 'less_than_10', 9.00, 6.00, 2.70, 51.30, '2023-06-06', '2023-06-06'),
('BK007', 'guhan', 'steam_iron', 'tshirt', 'less_than_10', 50.00, 10.00, 25.00, 475.00, '2023-06-16', '2023-06-23'),
('BK009', 'guhan', 'steam_iron', 'tshirt', 'less_than_10', 60.00, 10.00, 30.00, 570.00, '2023-06-15', '2023-06-16'),
('BK010', 'guhan', 'steam_iron', 'chudi', 'less_than_10', 50.00, 10.00, 25.00, 475.00, '2023-06-07', '2023-06-13'),
('BK011', 'dhanraj', 'steam_iron', 'saree', 'less_than_10', 60.00, 10.00, 30.00, 570.00, '2023-06-16', '2023-06-23'),
('BK013', 'guhan', 'bag_toy_wash', 'woolen', 'less_than_10', 50.00, 6.00, 15.00, 285.00, '2023-06-15', '2023-06-23'),
('BK014', 'Naveen N', 'dry_clean', 'shirt', 'less_than_10', 8.00, 10.00, 4.00, 76.00, '2023-06-17', '2023-06-23'),
('BK015', 'Naveen N', 'shoe_wash', 'woolen', 'less_than_10', 8.00, 6.00, 2.40, 45.60, '2023-06-17', '2023-06-23'),
('BK016', 'Naveen N', 'bag_toy_wash', 'jute', 'less_than_10', 8.00, 6.00, 2.40, 45.60, '2023-06-17', '2023-06-23'),
('BK017', 'Naveen N', 'shoe_wash', 'nylon', 'less_than_10', 8.00, 6.00, 2.40, 45.60, '2023-06-17', '2023-06-23'),
('BK018', 'dhanraj', 'bag_toy_wash', 'nylon', 'less_than_10', 60.00, 6.00, 18.00, 342.00, '2023-06-20', '2023-06-20'),
('BK019', 'guhan', 'steam_iron', 'tshirt', 'less_than_10', 60.00, 10.00, 30.00, 570.00, '2023-06-16', '2023-06-22'),
('BK020', 'vinay', 'shoe_wash', 'woolen', 'less_than_10', 70.00, 6.00, 21.00, 399.00, '2023-06-22', '2023-06-28'),
('BK021', 'Naveen N', 'bag_toy_wash', 'nylon', 'less_than_10', 50.00, 6.00, 15.00, 285.00, '2023-06-18', '2023-06-21'),
('BK022', 'guhan', 'bag_toy_wash', 'woolen', 'less_than_10', 6.00, 6.00, 1.80, 34.20, '2023-06-21', '2023-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `logintime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `pass`, `logintime`) VALUES
('', '', '2023-05-28 00:00:00'),
('guhan', 'guhan', '2023-05-28 00:00:00'),
('students', 'guhan', '2023-05-28 00:00:00'),
('students', 'guhan', '2023-05-28 00:00:00'),
('root', 'guhan0206', '2023-05-28 00:00:00'),
('students', 'guhan', '2023-05-28 00:00:00'),
('kkmm', 'coursehero', '2023-05-28 00:00:00'),
('kkmm', 'coursehero', '2023-05-28 00:00:00'),
('kkmm', 'coursehero', '2023-05-28 00:00:00'),
('admin', 'naveenhawk', '2023-05-28 00:00:00'),
('admin', '123456789', '2023-05-28 00:00:00'),
('students', 'guhan', '2023-05-29 00:00:00'),
('students', 'guhan', '2023-05-29 00:00:00'),
('students', 'guhan', '2023-05-29 00:00:00'),
('students', 'guhan', '2023-05-29 00:00:00'),
('students', 'guhan', '2023-05-29 00:00:00'),
('students', 'guhan', '2023-05-29 00:00:00'),
('students', 'guhan', '2023-05-30 00:00:00'),
('ranjith', 'ranjith12', '2023-05-30 00:00:00'),
('students', 'guhan', '2023-05-30 00:00:00'),
('students', 'guhan', '2023-05-30 00:00:00'),
('students', 'guhan', '2023-05-30 00:00:00'),
('students', 'guhan', '2023-05-30 00:00:00'),
('students', 'guhan', '2023-05-31 00:00:00'),
('students', 'guhan', '2023-06-02 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-04 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-05 00:00:00'),
('students', 'guhan', '2023-06-05 00:00:00'),
('students', 'guhan', '2023-06-05 00:00:00'),
('students', 'guhan', '2023-06-05 00:00:00'),
('students', 'guhan', '2023-06-06 00:00:00'),
('students', 'guhan', '2023-06-06 00:00:00'),
('NAVEEN', 'guhan@0206', '2023-06-06 00:00:00'),
('students', 'guhan', '2023-06-06 00:00:00'),
('students', 'guhan', '2023-06-06 00:00:00'),
('rootuser', 'rootpasswo', '2023-06-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`username`, `email`, `msg`) VALUES
('students', 'guhanks006@gmail.com', 'hi'),
('NAVEEN', 'naveenhawk654@gmail.com', 'guhan'),
('ranjith', 'helibek657@glumark.com', 'superservice');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `place` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `email`, `place`, `phone`, `pass`, `user_type`) VALUES
('students', 'guhanks006@gmail.com', 'mysore', 7204454600, 'guhan', 'user'),
('rootuser', 'user@gmail.com', 'bangalore', 1234567890, 'rootpassword', ''),
('NAVEEN', 'naveenhawk654@gmail.com', 'bangalore', 7348830608, 'naveenhawk', 'subadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
