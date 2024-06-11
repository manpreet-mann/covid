-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 10:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(24, 'admin', 'admin@me.com', 'c93ccd78b2076528346216b3b2f701e6'),
(25, 'Navneesh', 'n@n.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `employee_id` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `book_date` varchar(10) DEFAULT NULL,
  `book_time` varchar(10) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'PENDING',
  `report` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `user_id`, `employee_id`, `address`, `book_date`, `book_time`, `createdat`, `description`, `status`, `report`) VALUES
(56, 1, '35', 'address for appointment', '2022-08-30', '20:54', '2022-08-19 11:20:51', 'description for appointment', 'PENDING', ''),
(57, 1, '', 'fuhsdc', '2022-08-19', '19:46', '2022-08-19 14:16:51', 'nrsidjjs', 'PENDING', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(2, 'mannn', 'man@gmail.com', '1234578906', 'subject', 'message'),
(16, 'manpreet', 'manpreet@m.com', '2345678901', 'subject', 'message');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `age` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `addressproof` varchar(255) NOT NULL,
  `id_proof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `phone`, `gender`, `age`, `address`, `addressproof`, `id_proof`) VALUES
(1, 'mannnn', 'mannnn@mmm.com', 'amnajcnis', '234567654', 'f', '23', 'jyfyrdtstf uyuft ', 'hjguyfuy', 'ewrgetryte');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `addressproof` varchar(255) NOT NULL,
  `id_proof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `password`, `phone`, `age`, `gender`, `address`, `addressproof`, `id_proof`) VALUES
(10, 'addingit', 'adding@co.in', 'add', '3457765433', '11', 'm', 'adding', '1555807029sky.jpg', '2035743917Screenshot 2021-07-12 163235.png'),
(33, 'final', 'dscoiej@co.in', 'dsdidjnw', '35655893378', '33', 'f', 'ewrkjdfufiorn', '129527610flower.jpg', '1284646273cosmos.jpg'),
(34, 'raj', 'raj@z.co', 'rajj', '88292673892', '25', 'm', 'address of raj', '1274828207sky.jpg', '2054359994rock.jpg'),
(35, 'abc', 'abc@m.co', 'abc', '4365789809765', '45', 'm', 'erdtfy', '2003831143sky.jpg', '1532304543Screenshot 2021-07-12 163235.png'),
(36, 'Navneesh', 'n@n.com', '123', '8194848070', 'test', '', 'test address', '1516159979', '1545314919');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
