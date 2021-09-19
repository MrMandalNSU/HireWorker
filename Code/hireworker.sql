-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 12:15 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hireworker`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresss`
--

CREATE TABLE `adresss` (
  `UserID` varchar(20) NOT NULL,
  `Division` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Block` varchar(20) NOT NULL,
  `Road` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `UserID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `First Name` varchar(20) NOT NULL,
  `Last Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`UserID`, `Password`, `First Name`, `Last Name`, `Email`, `Phone`) VALUES
('MrMandal', '123456', 'Sudipta', 'Mandal', 'mr.mandal16@gmail.co', '01724144320'),
('Mr_Mandal', '123456', 'Sudipta', 'Dipta', 'mr.mandal16@gmail.co', '01724144320');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `UserID` varchar(20) NOT NULL,
  `WorkingCatagory` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`UserID`, `WorkingCatagory`, `image`, `text`) VALUES
('carpenter', 'Carpenter', 'uploads/5cb38a0004bf16.66792361.jpg', ''),
('carters', 'Caters', 'uploads/5cb38b55be4e61.52809293.jpg', ''),
('cleaner1', 'Cleaner', 'uploads/5cb4249ea47967.55293772.jpg', 'none'),
('cleaner2', 'Cleaner', 'uploads/5cb38969716013.83938452.jpg', 'Neat,Hard working,Trustable'),
('electrician1', 'Electrician', 'uploads/5cb43c4eaf2c06.92489985.jpg', '...aaa'),
('electrician2', 'Electrician', 'uploads/5cb388022c4ea8.15164219.jpg', 'Professional Electracian'),
('event', 'Event manager', 'uploads/5cb42ffc7d4462.08950841.jpg', 'Organized'),
('labor', 'Labor', 'uploads/5cb3887ba50451.25139630.jpg', 'hardworking'),
('mechanic', 'Mechanic', 'uploads/5cb388a3877005.74052306.jpg', ''),
('painter', 'Painter', 'uploads/5cb3c4e964e3f0.60151196.jpg', 'artist'),
('plumber', 'Plumber', 'uploads/5cb389c9535c55.72320574.jpg', ''),
('security', 'Security', 'uploads/5cb3892cdde2a8.12017191.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE `payment_history` (
  `PaymentID` int(20) NOT NULL,
  `CustomerID` varchar(20) NOT NULL,
  `WorkerID` varchar(20) NOT NULL,
  `PaymentMethod` varchar(20) NOT NULL,
  `Amount` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `UserID` varchar(20) NOT NULL,
  `text` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `UserID` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `First Name` varchar(25) NOT NULL,
  `Last Name` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(25) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `WorkingCatagory` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`UserID`, `Password`, `First Name`, `Last Name`, `Email`, `Phone`, `Gender`, `WorkingCatagory`) VALUES
('carpenter', '123456', 'Ahmed', 'Kabir', 'email1@gmail.com', '01654', 'Male', 'Carpenter'),
('caters', '123456', 'Kabir', 'Hossain', 'email2@gmail.com', '01456', 'Male', 'Caters'),
('cleaner1', '123456', 'Hasna', 'Haq', 'email3@gmail.com', '01963', 'Female', 'Cleaner'),
('cleaner2', '123456', 'Rabeya', 'Begum', 'email4@gmail.com', '0164', 'Female', 'Cleaner'),
('electrician1', '123456', 'Siam', 'Ahmed', 'email5@gmail.com', '0162501640', 'Male', 'Electrician'),
('electrician2', '123456', 'Monir', 'Khan', 'email6@gmail.com', '0147', 'Male', 'Electrician'),
('event', '123456', 'Sonali', 'Akter', 'email7@gmail.com', '0164', 'Female', 'Event manager'),
('labor', '123456', 'sajin', 'Ahmed', 'email8@gmail.com', '0167', 'Male', 'Labor'),
('mechanic', '123456', 'Ashik', 'Islam', 'email9@gmail.com', '0148', 'Male', 'Mechanic'),
('painter', '123456', 'Habiba', 'Nawshin', 'email10@gmail.com', '0167', 'Female', 'Painter'),
('plumber', '123456', 'Rubel', 'Majhi', 'email11@gmail.com', '018874', 'Male', 'Plumber'),
('security', '123456', 'John', 'Cina', 'email12@gmail.com', '0175', 'Male', 'Security');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresss`
--
ALTER TABLE `adresss`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD PRIMARY KEY (`PaymentID`,`CustomerID`,`WorkerID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_history`
--
ALTER TABLE `payment_history`
  MODIFY `PaymentID` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
