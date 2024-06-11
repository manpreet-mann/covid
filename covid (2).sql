-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 11:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
(57, 1, '', 'fuhsdc', '2022-08-19', '19:46', '2022-08-19 14:16:51', 'nrsidjjs', 'PENDING', ''),
(58, 0, '', 'dddddesdnf isjf', '2022-08-28', '12:39', '2022-08-26 07:05:59', 'afuhfsduj gui', 'PENDING', ''),
(59, 0, '', 'mannseiueas', '2022-08-27', '16:45', '2022-08-27 11:15:59', 'jieudshd', 'PENDING', ''),
(60, 0, '', 'address', '', '', '2022-08-27 17:29:08', '', 'PENDING', ''),
(61, 0, '', 'adress', '2022-08-27', '', '2022-08-27 17:29:26', '', 'PENDING', ''),
(62, 0, '', 'asdfg', '2022-08-27', '22:59', '2022-08-27 17:29:42', 'dsfg', 'PENDING', ''),
(63, 0, '', 'asdfghmannnnnn', '2022-09-02', '15:13', '2022-09-02 09:43:54', 'descriptionmannnnn', 'PENDING', ''),
(64, 0, '', 'checkingggg', '2022-09-07', '10:07', '2022-09-07 04:37:10', 'checkinggg', 'PENDING', ''),
(65, 0, '', 'address check', '2022-09-09', '15:59', '2022-09-09 10:30:04', 'descriptuinnnnnnn', 'PENDING', ''),
(66, 4, '', 'abc', '2022-09-09', '18:05', '2022-09-09 10:33:41', 'abc desc', 'PENDING', '');

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
(16, 'manpreet', 'manpreet@m.com', '2345678901', 'subject', 'message'),
(21, 'contacting', 'emailcontactm@m.com', '93942345234', 'subjector contact', 'messafe fotr contact');

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
(1, 'mannnn', 'mannnn@mmm.com', 'amnajcnis', '234567654', 'f', '23', 'jyfyrdtstf uyuft ', 'hjguyfuy', 'ewrgetryte'),
(2, 'logincheck', 'liginnn@nc.com', 'passworddsss', '57684415428', 'm', '45', 'adrress of thw5588', '98676066do.png', '612708544case.png'),
(3, 'name', 'email@ms.com', 'pakjdus', '3947930838', 'f', '22', 'address', '981140864cases3.png', '1688668385do.png'),
(4, 'Navneesh', 'n@n.com', '202cb962ac59075b964b07152d234b70', '9874563210', 'f', '22', 'asddff', '1871272974about.png', '1537816201about.png'),
(5, 'manpreet', 'manpreetm@m.com', '1a1dc91c907325c69271ddf0c944bc72', '1478523695', 'f', '22', 'address', '1567045110cases3.png', '165589153cases1.png'),
(6, 'mann', 'man@man.co', '827ccb0eea8a706c4c34a16891f84e7b', '2589631478', 'm', '22', 'adresssss', '915567761cases2.png', '1699422680do.png'),
(7, 'majdsiu', 'kdha@b.coj', 'sdiua', '478512693', 'm', '77', 'jsdniy', '2066504593corona.png', '421065332banner.png'),
(8, 'manpreet', 'manpreetm@am.com', 'jando', '1478523695', 'f', '33', 'address', '2119013189corona.png', '899382864cases1.png'),
(9, 'mann', 'man@man.cox', 'dfsd', '2589631478', 'm', '22', 'adresssss', '1099247799cases2.png', '780723658about.png'),
(10, 'manpreet mann', 'manpreetmann1@m.com', '733d7be2196ff70efaf6913fc8bdcabf', '1478523698', 'f', '20', 'address of manpreet', '2020312451about.png', '732753472case.png'),
(11, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', ''),
(12, 'naina', 'naina@n.com', '202cb962ac59075b964b07152d234b70', '7896541232', 'f', '19', 'address 22', '418356869cases3.png', '1555022744pro1.png');

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
(34, 'raj', 'raj@z.co', 'rajj', '88292673892', '25', 'm', 'address of raj', '1274828207sky.jpg', '2054359994rock.jpg'),
(36, 'Navneesh', 'n@n.com', '123', '8194848070', 'test', '', 'test address', '1876128417case.png', '448177097cases2.png'),
(37, 'abc', 'abc@m.com', 'abc', '9874563218', '22', 'f', 'asddff', '1810663729cases1.png', '199937659corona.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
