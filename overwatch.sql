-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2016 at 07:04 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `overwatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `id` char(5) NOT NULL,
  `link` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(10) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `healPoint` int(11) NOT NULL,
  `MIN_dmgPshot` int(11) NOT NULL,
  `MAX_dmgPshot` int(11) NOT NULL,
  `rate` float NOT NULL,
  `ammo` int(11) NOT NULL,
  `reload` float NOT NULL,
  `health` int(11) NOT NULL,
  `armor` int(11) NOT NULL,
  `shield` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `link`, `name`, `class`, `origin`, `healPoint`, `MIN_dmgPshot`, `MAX_dmgPshot`, `rate`, `ammo`, `reload`, `health`, `armor`, `shield`) VALUES
('d1', 'Defense/1..png', 'Bastion', 'Defense', 'Omnic', 50, 4, 15, 30, 200, 1.5, 200, 100, 0),
('d2', 'Defense/2..png', 'Hanzo', 'Defense', 'Japan', 0, 29, 125, 2, 1, 1, 200, 0, 0),
('d3', 'Defense/3..png', 'Junkrat', 'Defense', 'Australia', 0, 120, 120, 1, 5, 1.5, 200, 0, 0),
('d4', 'Defense/4..png', 'Mei', 'Defense', 'China', 150, 45, 45, 20, 200, 1.5, 250, 0, 0),
('d5', 'Defense/5..png', 'Torbjorn', 'Defense', 'Sweden', 0, 68, 68, 1.6, 18, 2, 200, 75, 0),
('d6', 'Defense/6..png', 'Widowmaker', 'Defense', 'France', 0, 12, 120, 1, 10, 1.5, 200, 0, 0),
('o1', 'Offense/1..png', 'Tracer', 'Offense', 'United Kingdom', 0, 2, 6, 40, 40, 1, 150, 0, 0),
('o2', 'Offense/2..png', 'Soldier:76', 'Offense', 'United States of America', 35, 5, 7, 10, 25, 1, 200, 0, 0),
('o3', 'Offense/3..png', 'Reaper', 'Offense', 'United States of America', 50, 40, 140, 2, 8, 1.5, 250, 0, 0),
('o4', 'Offense/4..png', 'Pharah', 'Offense', 'Egypt', 0, 120, 120, 1, 6, 1, 200, 0, 0),
('o5', 'Offense/5..png', 'McCree', 'Offense', 'United States of America', 0, 35, 75, 2, 6, 1.5, 200, 0, 0),
('o6', 'Offense/6..png', 'Genji', 'Offense', 'Japan', 0, 28, 28, 3.42, 24, 1.5, 200, 0, 0),
('s1', 'Support/1..png', 'Zenyatta', 'Support', 'Omnic', 30, 46, 46, 2, 20, 2, 50, 0, 150),
('s2', 'Support/2..png', 'Symmetra', 'Support', 'India', 0, 30, 120, 8, 100, 1, 100, 0, 100),
('s3', 'Support/3..png', 'Mercy', 'Support', 'Switzerland', 60, 20, 20, 5, 20, 1, 200, 0, 0),
('s4', 'Support/4..png', 'Lucio', 'Support', 'Brazil', 13, 46, 46, 3, 20, 1.25, 200, 0, 0),
('s5', 'Support/5..png', 'Ana', 'Support', 'Egypt', 75, 80, 80, 1.25, 10, 1.5, 200, 0, 0),
('t1', 'Tank/1..png', 'Winston', 'Tank', 'Moon', 0, 3, 3, 20, 100, 1.5, 400, 100, 0),
('t2', 'Tank/2..png', 'D.Va', 'Tank', 'South Korea', 0, 8, 24, 7, 100, 1, 100, 400, 0),
('t3', 'Tank/3..png', 'Zarya', 'Tank', 'Russia', 0, 75, 150, 20, 100, 1.5, 200, 0, 200),
('t4', 'Tank/4..png', 'Roadhog', 'Tank', 'Austrailia', 300, 100, 225, 1, 4, 1.5, 600, 0, 0),
('t5', 'Tank/5..png', 'Reinhardt', 'Tank', 'Germany', 0, 75, 75, 1, 1, 1, 300, 200, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
