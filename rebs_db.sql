-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 09:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rebs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `user_Profile` text NOT NULL,
  `user_Username` varchar(100) NOT NULL,
  `user_Password` varchar(100) NOT NULL,
  `user_FirstName` varchar(100) NOT NULL,
  `user_MiddleName` varchar(100) NOT NULL,
  `user_LastName` varchar(100) NOT NULL,
  `user_Email` varchar(100) NOT NULL,
  `user_Status` int(11) NOT NULL,
  `user_Role` int(11) NOT NULL,
  `user_Registered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `user_Profile`, `user_Username`, `user_Password`, `user_FirstName`, `user_MiddleName`, `user_LastName`, `user_Email`, `user_Status`, `user_Role`, `user_Registered`) VALUES
(1, 'default.png', 'Admin', 'e3afed0047b08059d0fada10f400c1e5', 'Juan', 'Dela', 'Cruz', 'juandelacruz@gmail.com', 1, 1, '2024-02-29'),
(2, 'default.png', 'A', '588369ffeafb870dfead8786f57cdd72', 'A', 'A', 'A', 'a@gmail.com', 0, 1, '2024-02-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
