-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 10:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotkeyhero`
--

-- --------------------------------------------------------

--
-- Table structure for table `difficulty`
--

CREATE TABLE `difficulty` (
  `ID` int(11) NOT NULL,
  `Difficulty_name` varchar(20) COLLATE utf8_hungarian_ci NOT NULL COMMENT 'nehézség megnevezése'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `difficulty`
--

INSERT INTO `difficulty` (`ID`, `Difficulty_name`) VALUES
(1, 'közepes');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `username` int(11) NOT NULL,
  `Count` int(11) NOT NULL,
  `Difficulty_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text DEFAULT NULL,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) NOT NULL,
  `response_code` smallint(3) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `ID` int(255) NOT NULL,
  `map_name` varchar(30) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`ID`, `map_name`) VALUES
(1, 'level1'),
(2, 'level2'),
(3, 'level3');

-- --------------------------------------------------------

--
-- Table structure for table `rang`
--

CREATE TABLE `rang` (
  `ID` int(255) NOT NULL,
  `username_id` int(30) NOT NULL,
  `difficulty_id` int(255) NOT NULL,
  `map_id` int(255) NOT NULL,
  `Points` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `rang`
--

INSERT INTO `rang` (`ID`, `username_id`, `difficulty_id`, `map_id`, `Points`) VALUES
(1, 5, 1, 1, 100),
(2, 1, 1, 3, 400);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(255) NOT NULL,
  `username` varchar(18) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_hungarian_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `profile_pic` varchar(32) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `email`, `password`, `admin`, `profile_pic`) VALUES
(1, 'test@test.hu', 'test@test.hu', '$2y$10$73iM9jJeci3pSf0jOdS4ver0aRaRIBUG.SIaaudd0wXDaw4pQGA62', 0, ''),
(2, 'valami@test.hu', 'valami@test.hu', '$2y$10$QJslUs6EhS5AiAxNPjR/M.8PGHp12041fsCpQth23ZLKtkyvcxp1G', 0, ''),
(3, 'rokusgang', 'rokus@rokusgang.hu', '$2y$10$QfGo5vevzht8SrWPo3czoOFpQySvyewCr540EpJ./hT29DdcDmYAW', 0, ''),
(4, '0413', '0413@teszt.hu', '$2y$10$kUHkN75aqrfKMKb2VIop3uTx6EMvK/Gmc8rE.2OgrDLNwkV9l7Ghy', 0, ''),
(5, 'Alma', 'alma200@alma.hu', '$2y$10$iW3osWCjKm5bznwj07DZlOe77b4IwlDuIjLJLrM/DpDXUXv7QvzI.', 0, ''),
(6, 'tesztelek', 'elek@teszt.hu', '$2y$10$SsvCTRiOyGpeWPyd.Z/pFec7Zk6rI.NpTStX/rY8a5/465t9MhCTi', 0, ''),
(7, 'kedves', 'kedves@kedves.com', '$2y$10$SmnH0rovNOncaqJI7RzLbOfNMrGok2EZYuvFTM/rT/n/NOOCccgry', 0, ''),
(8, 'User', 'user@teszt.hu', '$2y$10$SimA.zLvjEXVdvqfaQP3TOO38AyyhQ785MaJImk28WxXZ4IOCaaEW', 0, ''),
(9, 'User1', 'user1@teszt.hu', '$2y$10$FVxwDxPMy/.uSkBNYuJZM.32VBOuVK.zcE6a9LYwi6rs4yKl/xSna', 0, ''),
(10, 'Alma2', 'alma2@teszt.hu', '$2y$10$GosGAunCda8dKaOKMzh76OyDk4euuNSQ8BiBg2ng8O41dvK3Ni/ze', 0, ''),
(11, 'user0514', 'user0514@test.hu', '$2y$10$OGP5MTNE5sme/FIA4OVgwOue/Tq9stDJVK8jFhzZdkMi/lDSS2E7C', 0, ''),
(12, '09.06', 'email@email.hu', '$2y$10$9mmI1C0YdB9oSuwxG2Bq2ux6JQN6CPlszd3h1c8.oKBlJI3YkS3We', 0, ''),
(13, 'i_love_manu', 'i_love_manu@manuellove.com', '$2y$10$XXZJsMukALrt8NqvlT7O7.ComIRNR9fVjEeK7QL.7vVUch3cPamG6', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `difficulty`
--
ALTER TABLE `difficulty`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`Count`),
  ADD UNIQUE KEY `FOREIGN KEY` (`username`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rang`
--
ALTER TABLE `rang`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `FOREIGN KEY` (`username_id`),
  ADD KEY `username_id` (`username_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `difficulty`
--
ALTER TABLE `difficulty`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `Count` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rang`
--
ALTER TABLE `rang`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
