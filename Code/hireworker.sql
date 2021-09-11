-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 12:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
('sajin', 'sajin', 'sajin', 'ahmed', 'SA8098@GMAIL.COM', '0172255'),
('Sam07', '1234', 'Siam', 'Ahmed', 'bzs.siam', '01625');

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
('1356RB', 'Plumber', 'uploads/5cb389c9535c55.72320574.jpg', ''),
('147', 'Event manager', 'uploads/5cb42ffc7d4462.08950841.jpg', 'Organized'),
('1475', 'Electrician', 'uploads/5cb43c4eaf2c06.92489985.jpg', '...aaa'),
('1478', 'Cleaner', 'uploads/5cb4249ea47967.55293772.jpg', 'none'),
('14789', 'Cleaner', 'uploads/5cb38969716013.83938452.jpg', 'Neat,Hard working,Trustable'),
('1610861', 'Electrician', 'uploads/5cb388022c4ea8.15164219.jpg', 'Professional Electracian'),
('161221', 'Painter', 'uploads/5cb3c4e964e3f0.60151196.jpg', 'artist'),
('16345', 'Caters', 'uploads/5cb38b55be4e61.52809293.jpg', ''),
('1745a', 'Security', 'uploads/5cb3892cdde2a8.12017191.jpg', ''),
('1754', 'Mechanic', 'uploads/5cb388a3877005.74052306.jpg', ''),
('189', 'Labor', 'uploads/5cb3887ba50451.25139630.jpg', 'hardworking'),
('bron07', 'Carpenter', 'uploads/5cb38a0004bf16.66792361.jpg', '');

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
('1356RB', 'rob', 'Robert', 'Bratheon', 'rob@gmail.com', '018874', 'Male', 'Plumber'),
('147', 'son', 'Sonali', 'Akter', 'sonali@gmail.com', '0164', 'Female', 'Event manager'),
('1475', 'siam', 'Siam', 'Ahmed', 'bzs.siam@gmail.com', '0147', 'Male', 'Electrician'),
('1478', '1236', 'Rebecca', 'Tow', 'sam@gmail.com', '0164', 'Female', 'Cleaner'),
('14789', '123', 'Julia', 'Karpa', 'julia@hotmailcom', '01963', 'Female', 'Cleaner'),
('1610861', 'sam', 'Siam', 'Ahmed', 'bzs.siam@gmail.com', '0162501640', 'Male', 'Electrician'),
('161221', 'haba', 'Habiba', 'Nawshin', 'habiba@gmail.com', '0167', 'Female', 'Painter'),
('16345', 'lance', 'Paul', 'Lancer', 'lance@hotmail.com', '01456', 'Male', 'Caters'),
('1745a', 'pol', 'Paul', 'king', 'PAUL@YAHOO.COM', '0175', 'Male', 'Security'),
('1754', '123', 'Daniel', 'Johnson', 'dan@gmail.com', '0148', 'Male', 'Mechanic'),
('189', 'sajn', 'sajin', 'Ahmed', 'SA8098@gmail.com', '0167', 'Male', 'Labor'),
('bron07', 'polar', 'Bron', 'Stew', 'Bron@gmail.com', '01654', 'Male', 'Carpenter');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
