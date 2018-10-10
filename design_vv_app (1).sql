-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3309
-- Gegenereerd op: 10 okt 2018 om 05:34
-- Serverversie: 5.7.23
-- PHP-versie: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `design_vv_app`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `make_year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `car_member`
--

CREATE TABLE `car_member` (
  `id` int(11) NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `club`
--

CREATE TABLE `club` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  `path` varchar(45) DEFAULT NULL,
  `creation_date` date DEFAULT NULL,
  `share_status` varchar(45) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `member1`
--

CREATE TABLE `member1` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `membercol` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `year_driving_licence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `member1`
--

INSERT INTO `member1` (`id`, `username`, `email`, `password`, `name`, `gender`, `membercol`, `type`, `year_driving_licence`) VALUES
(1, 'ttt', 'tt@tt', 'accc9105df5383111407fd5b41255e23', '', '', '', '', 0),
(2, 'yy', 'yy@yy', '2fb1c5cf58867b5bbc9a1b145a86f3a0', '', '', '', '', 0),
(3, 't', 'test@gmail.com', 'e358efa489f58062f10dd7316b65649e', 't', '', '', '', 0),
(4, '1', '11@11', '6512bd43d9caa6e02c990b0a82652dca', '11', '', '', '', 0),
(5, 'g', 'g@g', 'b2f5ff47436671b6e533d8dc3614845d', 'g', 'Male', '', '', 0),
(6, 'last', 'lat@s', '03c7c0ace395d80182db07ae2c30f034', 'last', 'Other', 's', 's', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `member_player`
--

CREATE TABLE `member_player` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `player_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `member_preferences`
--

CREATE TABLE `member_preferences` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `is_pets_allowed` varchar(4) DEFAULT NULL,
  `is_smoking_allowed` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `player_team`
--

CREATE TABLE `player_team` (
  `id` int(11) NOT NULL,
  `player_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `program`
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
-- Tabelstructuur voor tabel `request_status`
--

CREATE TABLE `request_status` (
  `id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ride`
--

CREATE TABLE `ride` (
  `id` int(11) NOT NULL,
  `seats_offered` int(11) DEFAULT NULL,
  `contribution_amount` varchar(45) DEFAULT NULL,
  `member_car_id` int(11) DEFAULT NULL,
  `pogram_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ride_request`
--

CREATE TABLE `ride_request` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `ride_id` int(11) DEFAULT NULL,
  `request_status_id` int(11) DEFAULT NULL,
  `seats_requested` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL,
  `coach_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'aaaa', 'aaaa@aaaa', '74b87337454200d4d33f80c4663dc5e5'),
(2, 'aaaa', 'aaaa@aaaa', '74b87337454200d4d33f80c4663dc5e5');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `car_member`
--
ALTER TABLE `car_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `member1`
--
ALTER TABLE `member1`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `member_player`
--
ALTER TABLE `member_player`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `member_preferences`
--
ALTER TABLE `member_preferences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexen voor tabel `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `player_team`
--
ALTER TABLE `player_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `request_status`
--
ALTER TABLE `request_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `ride`
--
ALTER TABLE `ride`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `member1`
--
ALTER TABLE `member1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `member_preferences`
--
ALTER TABLE `member_preferences`
  ADD CONSTRAINT `member_id` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
