-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 06:34 PM
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

INSERT INTO `order_maneger` (`Order_Id`, `Full_Name`, `Address`, `Mobile_No`, `Pay_Mode`) VALUES
(9, 'Usha ManeshKar', 'odisha', 78787878787, 'Pay On Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `SrNo` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`SrNo`, `Name`, `Email`, `Password`, `Date`) VALUES
(1, 'Ayush', 'ayushpathak7776@gmail.com', '7776', '2023-10-02'),
(17, 'Harshal', 'harshal@gmail.com', '7776', '2023-10-02'),
(19, 'Pooja', 'pooja@gmail.com', '7776', '2023-10-03'),
(20, 'Kriti', 'kritisanon@gmail.com', '7776', '2023-10-03'),
(21, 'Hi', 'hi@this.com', '7776', '2023-10-03'),
(22, 'Baburao', 'babubhai@gmail.com', '7776', '2023-10-03');

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

INSERT INTO `user_orders` (`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES
(9, 'GizmoEarebuds', 1499, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_maneger`
--
ALTER TABLE `order_maneger`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`SrNo`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_maneger`
--
ALTER TABLE `order_maneger`
  MODIFY `Order_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
