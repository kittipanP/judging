-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 06, 2017 at 05:44 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `com_id` int(11) NOT NULL,
  `com_name` varchar(45) DEFAULT NULL,
  `com_evai` int(11) DEFAULT NULL,
  `com_evaii` int(11) DEFAULT NULL,
  `com_evaiii` int(11) DEFAULT NULL,
  `com_evaiv` int(11) DEFAULT NULL,
  `com_comment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `committee_has_contestant`
--

CREATE TABLE `committee_has_contestant` (
  `committee_com_id` int(11) NOT NULL,
  `contestant_con_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contestant`
--

CREATE TABLE `contestant` (
  `con_id` int(11) NOT NULL,
  `con_name` varchar(45) DEFAULT NULL,
  `con_project` varchar(45) DEFAULT NULL,
  `con_detail` varchar(45) DEFAULT NULL,
  `con_poster` varchar(45) DEFAULT NULL,
  `con_site` varchar(45) DEFAULT NULL,
  `type_contest_typ_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contestant`
--

INSERT INTO `contestant` (`con_id`, `con_name`, `con_project`, `con_detail`, `con_poster`, `con_site`, `type_contest_typ_id`) VALUES
(1, 'team HDD 1', 'project team HDD 1', 'team HDD 1team HDD 1team HDD 1', 'example-posteri.jpg', 'HDD', 1),
(2, 'team HDD 2', 'pj team HDD 2', 'team HDD 2team HDD 2team HDD 2', 'example-posteri.jpg', 'HDD', 1),
(3, 'team THO 1', 'pj team THO 1', 'team THO 1team THO 1team THO 1', 'example-posterii.jpg', 'THO', 1),
(4, 'team THO 2', 'pj team THO 2', 'team THO 2team THO 2team THO 2', 'example-posterii.jpg', 'THO', 1),
(5, 'team PRB 1', 'pj team PRB 1', 'team PRB 1team PRB 1team PRB 1', 'example-posteriii.png', 'PRB', 1),
(6, 'team PRB 2', 'pj team PRB 2', 'team PRB 2team PRB 2team PRB 2', 'example-posteriii.png', 'PRB', 1),
(7, 'Quality [Eng] HDD', 'pj Quality [Eng] HDD', 'Quality [Eng] HDDHDDHDD', 'example-posteri.jpg', 'HDD', 2),
(8, 'Quality [Eng] THO', 'pjQuality [Eng] THO', 'Quality [Eng] THO', 'example-posterii.jpg', 'THO', 2),
(9, 'Quality [Eng] PRB', 'pjQuality [Eng] PRB', 'Quality [Eng] PRB', 'example-posteriii.png', 'PRB', 2),
(10, 'Quality [DL/Tech] HDD', 'pjQuality [DL/Tech]HDD', 'Quality [DL/Tech]HDDHDDHDD', 'example-posteri.jpg', 'HDD', 3),
(11, 'Quality [DL/Tech]THO', 'pjQuality [DL/Tech]THO', 'Quality [DL/Tech]THOTHO', 'example-posterii.jpg', 'THO', 3),
(12, 'Quality [DL/Tech]PRB', 'pjQuality [DL/Tech]PRB', 'Quality [DL/Tech]PRB', 'example-posteriii.png', 'PRB', 3),
(13, 'Ops [Eng] HDD', 'pjOps [Eng]HDD', 'Ops [Eng]HDD', 'example-posteri.jpg', 'HDD', 4),
(14, 'Ops [Eng] THO', 'pjOps [Eng]THO', 'Ops [Eng]THOTHOTHO', 'example-posterii.jpg', 'THO', 4),
(15, 'Ops [Eng]PRB', 'pjOps [Eng]PRB', 'Ops [Eng]PRBPRBPRB', 'example-posteriii.png', 'PRB', 4),
(16, 'Ops [DL/Tech]HDD', 'pjOps [DL/Tech]HDD', 'Ops [DL/Tech]HDDHDDHDD', 'example-posteri.jpg', 'HDD', 5),
(17, 'Ops [DL/Tech]THO', 'pjOps [DL/Tech]THO', 'Ops [DL/Tech]THOTHOTHO', 'example-posterii.jpg', 'THO', 5),
(18, 'Ops [DL/Tech]PRB', 'pjOps [DL/Tech]PRB', 'Ops [DL/Tech] PRBPRBPRB', 'example-posteriii.png', 'PRB', 5);

-- --------------------------------------------------------

--
-- Table structure for table `type_contest`
--

CREATE TABLE `type_contest` (
  `typ_id` int(11) NOT NULL,
  `typ_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_contest`
--

INSERT INTO `type_contest` (`typ_id`, `typ_name`) VALUES
(1, 'Adv. Tech [Eng]'),
(2, 'Quality [Eng]'),
(3, 'Quality [DL/Tech]'),
(4, 'Ops [Eng]'),
(5, 'Ops [DL/Tech]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `committee_has_contestant`
--
ALTER TABLE `committee_has_contestant`
  ADD PRIMARY KEY (`committee_com_id`,`contestant_con_id`),
  ADD KEY `fk_committee_has_contestant_contestant1_idx` (`contestant_con_id`),
  ADD KEY `fk_committee_has_contestant_committee1_idx` (`committee_com_id`);

--
-- Indexes for table `contestant`
--
ALTER TABLE `contestant`
  ADD PRIMARY KEY (`con_id`),
  ADD KEY `fk_contestant_type_contest_idx` (`type_contest_typ_id`);

--
-- Indexes for table `type_contest`
--
ALTER TABLE `type_contest`
  ADD PRIMARY KEY (`typ_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contestant`
--
ALTER TABLE `contestant`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `type_contest`
--
ALTER TABLE `type_contest`
  MODIFY `typ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `committee_has_contestant`
--
ALTER TABLE `committee_has_contestant`
  ADD CONSTRAINT `fk_committee_has_contestant_committee1` FOREIGN KEY (`committee_com_id`) REFERENCES `committee` (`com_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_committee_has_contestant_contestant1` FOREIGN KEY (`contestant_con_id`) REFERENCES `contestant` (`con_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `contestant`
--
ALTER TABLE `contestant`
  ADD CONSTRAINT `fk_contestant_type_contest` FOREIGN KEY (`type_contest_typ_id`) REFERENCES `type_contest` (`typ_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
