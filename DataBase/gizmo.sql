-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 08:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gizmo`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_maneger`
--

CREATE TABLE `order_maneger` (
  `Order_Id` int(100) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile_No` bigint(100) NOT NULL,
  `Pay_Mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_maneger`
--

-- INSERT INTO `order_maneger` (`Order_Id`, `Full_Name`, `Address`, `Mobile_No`, `Pay_Mode`) VALUES
-- (4, 'Sneha Pathak', 'Chalisgaon, Jalgaon,424108', 7776087318, 'Pay On Delivery'),
-- (5, 'Yogesh Yadav', 'Talegaon, Chalisgaon, Jalgaon,424108', 5415445455, 'Pay Online'),
-- (6, 'Chetan Patil', 'Laxmi,Nagar Chalisgaon', 9566648448, 'Pay On Delivery'),
-- (7, 'Kunal Nikumbh', 'Hirapur Wala', 78965656565, 'Pay Online'),
-- (8, 'TulsiDas Khan', 'Mumbai', 9566648448, 'Pay On Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_Id` int(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

-- INSERT INTO `user_orders` (`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES
-- (6, 'GizmoPhone', 21999, 1),
-- (6, 'GizmoWatch2', 19999, 1),
-- (7, 'GizmoEarebuds', 1499, 2),
-- (7, 'Gizmo Headphoes', 3999, 1),
-- (8, 'Gizmo Headphoes', 3999, 1),
-- (8, 'GizmoSpeker', 7999, 1),
-- (8, 'GizmoSmartTv', 39999, 1),
-- (8, 'GizmoEarebuds', 1499, 1),
-- (8, 'GizmoWatch2', 19999, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_maneger`
--
ALTER TABLE `order_maneger`
  ADD PRIMARY KEY (`Order_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_maneger`
--
ALTER TABLE `order_maneger`
  MODIFY `Order_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
