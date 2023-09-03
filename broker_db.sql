-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2023 at 05:14 PM
-- Server version: 10.3.37-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bingxfor_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `password` varchar(25) NOT NULL DEFAULT '1234',
  `notes` varchar(255) DEFAULT NULL,
  `STATUS` int(1) NOT NULL DEFAULT 0,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `phone`, `password`, `notes`, `STATUS`, `DATE`, `ID`) VALUES
('2gbeh', 'webmaster@hwplabs.com', '08169960927', '4444', NULL, 5, '2022-06-06 16:00:00', 1),
('admin', 'admin@binxforum.com', '', 'Strong@2023_', 'bc1qr4fepe6zk6559wp4akw0t7a6x0gxp687a83r4d', 4, '2022-09-17 11:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `ip` varchar(64) NOT NULL,
  `message` varchar(160) NOT NULL,
  `STATUS` int(1) NOT NULL DEFAULT 0,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`ip`, `message`, `STATUS`, `DATE`, `ID`) VALUES
('127.0.0.1', 'Testing Live Chat', 0, '2022-01-24 23:51:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `names` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(160) NOT NULL,
  `message` longtext NOT NULL,
  `STATUS` int(1) NOT NULL DEFAULT 0,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`names`, `email`, `subject`, `message`, `STATUS`, `DATE`, `ID`) VALUES
('john', 'john@email.com', 'Testing contact us', 'Testing contact us', 2, '2022-01-24 23:44:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE `ledger` (
  `user_id` int(11) NOT NULL,
  `wal` varchar(64) DEFAULT NULL,
  `type` enum('CR','DR') NOT NULL,
  `plan` int(3) DEFAULT NULL,
  `amt` int(11) NOT NULL,
  `bal` int(11) NOT NULL DEFAULT 0,
  `why` varchar(160) DEFAULT NULL,
  `STATUS` int(1) NOT NULL DEFAULT 0,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ledger`
--

INSERT INTO `ledger` (`user_id`, `wal`, `type`, `plan`, `amt`, `bal`, `why`, `STATUS`, `DATE`, `ID`) VALUES
(2, '', 'CR', 3, 20000, 20000, 'GOLD PLAN - $1000 ROI', 1, '2023-02-02 13:23:44', 31);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `user_id` int(11) NOT NULL,
  `message` varchar(750) NOT NULL,
  `STATUS` int(1) NOT NULL DEFAULT 0,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `names` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `address` varchar(160) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `wal` varchar(64) DEFAULT NULL,
  `bal` int(11) NOT NULL DEFAULT 0,
  `bonus` int(11) NOT NULL DEFAULT 0,
  `spx` int(11) NOT NULL DEFAULT 0,
  `tix` int(11) NOT NULL DEFAULT 0,
  `tdx` int(11) NOT NULL DEFAULT 0,
  `idx` int(11) NOT NULL DEFAULT 0,
  `adx` int(11) NOT NULL DEFAULT 0,
  `STATUS` int(11) NOT NULL DEFAULT 0,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`names`, `email`, `password`, `phone`, `address`, `country`, `wal`, `bal`, `bonus`, `spx`, `tix`, `tdx`, `idx`, `adx`, `STATUS`, `DATE`, `ID`) VALUES
('Forextitian', 'jdamntrading@gmail.com', 'Trouble4$', NULL, NULL, NULL, 'bc1qt5etvmp73uuak5fsfxjne64w2pa33wrnslr6za', 0, 0, 0, 0, 0, 0, 0, 0, '2023-02-02 16:44:25', 31),
('David lee', 'shemxzzy9@gmail.com', 'vanana1m', NULL, NULL, NULL, '0xd4F8DfD1cDBa76e9ac6b3b31Ef3C6C6c3', 10000, 20000, 30000, 50000, 60000, 50000, 50, 0, '2023-01-31 18:35:54', 27),
('stribe', 'kristian4.dk@outlook.dk', 'Kristian43', NULL, NULL, NULL, 'binance', 0, 0, 0, 0, 0, 0, 0, 0, '2023-02-01 20:23:54', 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ledger`
--
ALTER TABLE `ledger`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `message` (`message`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ledger`
--
ALTER TABLE `ledger`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
