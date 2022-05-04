-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 11:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `sender` int(11) NOT NULL,
  `reciever` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `seen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nutrition`
--

CREATE TABLE `nutrition` (
  `nutritionID` int(11) NOT NULL,
  `breakfast` text NOT NULL,
  `lunch` text NOT NULL,
  `dinner` text NOT NULL,
  `bd` text NOT NULL,
  `ld` text NOT NULL,
  `dd` text NOT NULL,
  `date` date NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nutrition`
--

INSERT INTO `nutrition` (`nutritionID`, `breakfast`, `lunch`, `dinner`, `bd`, `ld`, `dd`, `date`, `userID`) VALUES
(7, 'fool', 'makrona + paneh', 'bread + cheese', '300 calories + 20 fats', '500 calories', '200 calories', '2022-05-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `trainingID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reps` int(11) NOT NULL,
  `sets` int(11) NOT NULL,
  `resttime` int(11) NOT NULL,
  `date` date NOT NULL,
  `weights` varchar(255) NOT NULL,
  `traininguserid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`trainingID`, `name`, `reps`, `sets`, `resttime`, `date`, `weights`, `traininguserid`) VALUES
(2, 'shoulder press', 3, 4, 2, '2022-05-20', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `social` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `social`, `role`) VALUES
(1, 'nada', 'nada@gmail.com', '$2y$10$SOczWWeqF1phV/k0jxldRuFNMCyoHpOpTGDdZ8iXyZ2.nSl0wk6Hi', '', ''),
(2, 'abdo', 'abdo@g', '$2y$10$fDb.TXREyqF5LDPCPkto0eTdndtmBUtirDf.MJD8PhubzRQGIqXA2', 'abdo', 'client'),
(3, 'Abdo', 'a@a', '$2y$10$b83IEbeWIoG42E/3NxgCp.ND6ilJXignsQNJzaLdSW6OO0r7u5m1K', 'abdo', 'client'),
(4, 'maryam', 'm@m.com', '1234', 'aaa', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD KEY `senderid` (`sender`),
  ADD KEY `recieverid` (`reciever`);

--
-- Indexes for table `nutrition`
--
ALTER TABLE `nutrition`
  ADD PRIMARY KEY (`nutritionID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`trainingID`),
  ADD KEY `trainid` (`traininguserid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nutrition`
--
ALTER TABLE `nutrition`
  MODIFY `nutritionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `trainingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `recieverid` FOREIGN KEY (`reciever`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `senderid` FOREIGN KEY (`sender`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nutrition`
--
ALTER TABLE `nutrition`
  ADD CONSTRAINT `UserNutrition` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `trainid` FOREIGN KEY (`traininguserid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
