-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 10, 2018 at 05:17 AM
-- Server version: 5.7.23
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `design_vv`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` blob NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`) VALUES
(6, 0x323031382d31302d30312e706e67, 'j'),
(7, 0x323031382d30392d32302e706e67, 'hoi');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  `image` longblob NOT NULL,
  `image_text` text NOT NULL,
  `creation_date` date DEFAULT NULL,
  `share_status` varchar(45) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `year_driving_licence` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member_player`
--

CREATE TABLE `member_player` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `player_team`
--

CREATE TABLE `player_team` (
  `id` int(11) NOT NULL,
  `player_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `weeknumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `starting_time` varchar(45) DEFAULT NULL,
  `home_team_id` int(11) DEFAULT NULL,
  `away_team_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL,
  `coach_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'test5', 'test5@gmail.com', '098f6bcd4621d373cade4e832627b4f6'),
(2, 'test', 'test@hromao.com', '098f6bcd4621d373cade4e832627b4f6'),
(3, 'calvin', 'calvin@hitsig.nl', 'e6e66b8981c1030d5650da159e79539a'),
(4, 'hoihoi', 'hoi@gmailc', '4216455ceebbc3038bd0550c85b6a3bf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_player`
--
ALTER TABLE `member_player`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player_team`
--
ALTER TABLE `player_team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player_id` (`player_id`),
  ADD KEY `team-id` (`team_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_team_id` (`home_team_id`),
  ADD KEY `away_team_id` (`away_team_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coach_id` (`coach_id`),
  ADD KEY `club_id` (`club_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `member_player`
--
ALTER TABLE `member_player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `club`
--
ALTER TABLE `club`
  ADD CONSTRAINT `city_id` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `member_id` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `player_team`
--
ALTER TABLE `player_team`
  ADD CONSTRAINT `player_id` FOREIGN KEY (`player_id`) REFERENCES `player` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `team-id` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `away_team_id` FOREIGN KEY (`away_team_id`) REFERENCES `team` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `home_team_id` FOREIGN KEY (`home_team_id`) REFERENCES `team` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `club_id` FOREIGN KEY (`club_id`) REFERENCES `club` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `coach_id` FOREIGN KEY (`coach_id`) REFERENCES `member` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
