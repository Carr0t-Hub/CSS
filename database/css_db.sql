-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 09:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `css_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `dateSurvey` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `clientType` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `residence` varchar(255) NOT NULL,
  `service` varchar(50) NOT NULL,
  `cc1` tinyint(4) NOT NULL,
  `cc2` tinyint(4) NOT NULL,
  `cc3` tinyint(4) NOT NULL,
  `sqd0` tinyint(4) NOT NULL,
  `sqd1` tinyint(4) NOT NULL,
  `sqd2` tinyint(4) NOT NULL,
  `sqd3` tinyint(4) NOT NULL,
  `sqd4` tinyint(4) NOT NULL,
  `sqd5` tinyint(4) NOT NULL,
  `sqd6` tinyint(4) NOT NULL,
  `sqd7` tinyint(4) NOT NULL,
  `sqd8` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `dateSurvey`, `clientType`, `gender`, `age`, `residence`, `service`, `cc1`, `cc2`, `cc3`, `sqd0`, `sqd1`, `sqd2`, `sqd3`, `sqd4`, `sqd5`, `sqd6`, `sqd7`, `sqd8`) VALUES
(1, '2023-10-15 16:00:00', 'Citizen', 'Male', 18, 'NCR - National Capital Region', 'DATA', 1, 1, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `ss_answers`
--

CREATE TABLE `ss_answers` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ss_answers`
--

INSERT INTO `ss_answers` (`id`, `users_id`, `question_id`, `answer`) VALUES
(1, 1, 1, '2'),
(2, 1, 2, 'This is a paragraph'),
(3, 1, 3, 'This is also a paragraph');

-- --------------------------------------------------------

--
-- Table structure for table `ss_choices`
--

CREATE TABLE `ss_choices` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `choice_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ss_choices`
--

INSERT INTO `ss_choices` (`id`, `question_id`, `choice_content`) VALUES
(1, 1, 'Yes'),
(2, 1, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `ss_questions`
--

CREATE TABLE `ss_questions` (
  `id` int(11) NOT NULL,
  `sections_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ss_questions`
--

INSERT INTO `ss_questions` (`id`, `sections_id`, `question`, `type`) VALUES
(1, 1, 'This is a multiple choice question ', 'multiple'),
(2, 1, 'What is a paragraph?', 'paragraph'),
(3, 1, 'Do you believe in Paragraph?', 'paragraph');

-- --------------------------------------------------------

--
-- Table structure for table `ss_sections`
--

CREATE TABLE `ss_sections` (
  `id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ss_sections`
--

INSERT INTO `ss_sections` (`id`, `survey_id`, `title`) VALUES
(1, 1, 'Section Survey');

-- --------------------------------------------------------

--
-- Table structure for table `ss_surveys`
--

CREATE TABLE `ss_surveys` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL COMMENT 'open\r\nclosed\r\ndraft\r\n',
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ss_surveys`
--

INSERT INTO `ss_surveys` (`id`, `title`, `status`, `dateCreated`) VALUES
(1, 'New Survey Title', 'active', '2023-11-03 05:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `ss_users`
--

CREATE TABLE `ss_users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ss_users`
--

INSERT INTO `ss_users` (`id`, `fullName`, `emailAddress`, `createdAt`) VALUES
(1, 'Juan Dela Cruz', 'juandel@gmail.com', '2023-11-03 08:07:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ss_answers`
--
ALTER TABLE `ss_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ss_choices`
--
ALTER TABLE `ss_choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ss_questions`
--
ALTER TABLE `ss_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ss_sections`
--
ALTER TABLE `ss_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ss_surveys`
--
ALTER TABLE `ss_surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ss_users`
--
ALTER TABLE `ss_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ss_answers`
--
ALTER TABLE `ss_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ss_choices`
--
ALTER TABLE `ss_choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ss_questions`
--
ALTER TABLE `ss_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ss_sections`
--
ALTER TABLE `ss_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ss_surveys`
--
ALTER TABLE `ss_surveys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ss_users`
--
ALTER TABLE `ss_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
