-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2022 at 05:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pubs_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `pubs`
--

CREATE TABLE `pubs` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `street` varchar(50) NOT NULL,
  `manager name` varchar(30) NOT NULL,
  `phone number` varchar(12) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pubs`
--

INSERT INTO `pubs` (`id`, `name`, `street`, `manager_name`, `phone_number`) VALUES
(1, 'Raise a Glass', 'Olive Avenue', 'Alan Madden', '020 919 2730'),
(2, 'Cheers and Beers', 'Plaza Street', 'Kitty Sears', '020 911 5318'),
(3, 'The Secret Saloon', 'Willow Way', 'Burnaby Rocha', '020 911 2516'),
(4, 'Languid Lounge', 'Blossom Street', 'Lianne Hendrix', '020 911 9533'),
(5, 'A Place to Toast', 'Ironwood Passage', 'Tre Wheatlry', '020 917 9126'),
(6, 'Neon Nights', 'Station Lane', 'Macey Hawkins', '020 916 1486'),
(7, 'The Meeting Place', 'Sunshine Way', 'Maisha McCartney', '020 914 1323'),
(8, 'Beer Garden', 'Broom Row', 'Ioana Kenny', '020 912 0376');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pubs`
--
ALTER TABLE `pubs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pubs`
--
ALTER TABLE `pubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
