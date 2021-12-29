-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 08:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `Age` varchar(20) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Phone` int(20) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `Licensenumber` int(30) DEFAULT NULL,
  `Issuedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`firstname`, `lastname`, `Age`, `Address`, `Phone`, `Email`, `username`, `Password`, `Licensenumber`, `Issuedate`) VALUES
('adam', 'hasan', '33', '470-B Uttara', 182093746, 'adam@gmail.com', 'adam', '1234', 2147483647, '2021-11-23'),
('md', 'alam', '55', '470-B Uttara', 182093746, 'alam@gmail.com', 'alam', '123', 2147483647, '2021-11-08'),
('md', 'jamal', '45', 'uttara,Dhaka', 19820182, 'jamal@gmail.com', 'jamal', '123456', 283645551, '2011-10-12'),
('md', 'karim', '50', '4/B/3 west MIrpur', 182093746, 'karim@gmail.com', 'karim', '11223', 2147483647, '2018-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `indata`
--

CREATE TABLE `indata` (
  `Number` int(20) NOT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `stock` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indata`
--

INSERT INTO `indata` (`Number`, `Medicine`, `date`, `price`, `stock`) VALUES
(1, 'Napa', '2021-12-01', '10 taka', 200),
(2, 'Ciprofloxacin (Cipro).', '2021-07-07', '356 taka', 400),
(3, 'Amdocal Plus 50', '2021-12-13', '150taka', 300),
(4, 'Sergel 20', '2021-12-28', '20taka', 300),
(5, 'Moxaclav 625', '2021-11-29', '356 taka', 400),
(6, 'ace', '2021-11-09', '50 taka', 300);

-- --------------------------------------------------------

--
-- Table structure for table `med_data`
--

CREATE TABLE `med_data` (
  `id` int(20) NOT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `price` int(50) DEFAULT NULL,
  `stock` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `med_data`
--

INSERT INTO `med_data` (`id`, `Medicine`, `description`, `price`, `stock`) VALUES
(101, 'Napa', 'for pain and fever', 20, 400),
(102, 'ace', 'for pain and fever', 15, 400),
(103, 'Moxaclav 625', 'hypertension and angina pectoris', 356, 150),
(104, 'Ciprofloxacin (Cipro).', 'antibiotic for Infections', 150, 250);

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `id` int(11) NOT NULL,
  `Customer` text DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Generics` varchar(50) DEFAULT NULL,
  `Quantity` int(50) DEFAULT NULL,
  `Price` int(50) DEFAULT NULL,
  `Payment` text DEFAULT NULL,
  `OrderTime` date DEFAULT NULL,
  `OrderStatus` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_data`
--

INSERT INTO `order_data` (`id`, `Customer`, `Medicine`, `Generics`, `Quantity`, `Price`, `Payment`, `OrderTime`, `OrderStatus`) VALUES
(10212333, 'Zayn Arian', 'ace', 'paracetamol', 2, 20, 'true', '2021-12-09', 'waiting'),
(12322245, 'adety sarkar', 'Fenadin 120', 'Fexofenadine Hydrochoride', 20, 300, 'true', '2021-12-14', 'On the way'),
(12345344, 'md karim', 'Ciprofloxacin (Cipro).', 'Amlodipine 5mg +Atenolol 50mg', 28, 182, 'true', '2021-12-07', 'On the way'),
(123453400, 'zahid ali', 'Sergel 20', 'Esomeprazole 20mg', 2, 182, 'true', '2021-12-14', 'canceled'),
(2147483647, 'Kabir, Md', 'Moxaclav 625', 'Amoxicillin 500mg + Clavulanic Acid 125mg', 12, 372, 'true', '2021-12-14', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- Indexes for table `indata`
--
ALTER TABLE `indata`
  ADD PRIMARY KEY (`Number`),
  ADD KEY `Medicine` (`Medicine`);

--
-- Indexes for table `med_data`
--
ALTER TABLE `med_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_data`
--
ALTER TABLE `order_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `indata`
--
ALTER TABLE `indata`
  MODIFY `Number` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `med_data`
--
ALTER TABLE `med_data`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `order_data`
--
ALTER TABLE `order_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
