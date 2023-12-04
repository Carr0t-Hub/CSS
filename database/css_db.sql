-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 08:12 AM
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
  `cc3` tinyint(4) DEFAULT NULL,
  `sqd0` tinyint(4) NOT NULL,
  `sqd1` tinyint(4) NOT NULL,
  `sqd2` tinyint(4) NOT NULL,
  `sqd3` tinyint(4) NOT NULL,
  `sqd4` tinyint(4) NOT NULL,
  `sqd5` tinyint(4) NOT NULL,
  `sqd6` tinyint(4) NOT NULL,
  `sqd7` tinyint(4) NOT NULL,
  `sqd8` tinyint(4) NOT NULL,
  `cc3_explanation` text NOT NULL,
  `remarks` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `dateSurvey`, `clientType`, `gender`, `age`, `residence`, `service`, `cc1`, `cc2`, `cc3`, `sqd0`, `sqd1`, `sqd2`, `sqd3`, `sqd4`, `sqd5`, `sqd6`, `sqd7`, `sqd8`, `cc3_explanation`, `remarks`, `type`, `createdAt`) VALUES
(1, '2023-10-15 16:00:00', 'Citizen', 'Male', 18, 'NCR - National Capital Region', 'DATA', 1, 1, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', '', '', '2023-11-08 05:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `cs_answers`
--

CREATE TABLE `cs_answers` (
  `id` int(11) NOT NULL,
  `info_id` int(11) NOT NULL,
  `cc1` int(11) NOT NULL,
  `cc2` int(11) DEFAULT NULL,
  `cc3` int(11) DEFAULT NULL,
  `sqd0` int(11) DEFAULT NULL,
  `sqd1` int(11) NOT NULL,
  `sqd2` int(11) NOT NULL,
  `sqd3` int(11) NOT NULL,
  `sqd4` int(11) NOT NULL,
  `sqd5` int(11) NOT NULL,
  `sqd6` int(11) NOT NULL,
  `sqd7` int(11) NOT NULL,
  `sqd8` int(11) NOT NULL,
  `cc3_explanation` text DEFAULT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cs_answers`
--

INSERT INTO `cs_answers` (`id`, `info_id`, `cc1`, `cc2`, `cc3`, `sqd0`, `sqd1`, `sqd2`, `sqd3`, `sqd4`, `sqd5`, `sqd6`, `sqd7`, `sqd8`, `cc3_explanation`, `remarks`) VALUES
(2, 4, 2, 1, 1, NULL, 5, 3, 5, 4, 3, 3, 4, 3, NULL, ''),
(3, 5, 2, 1, 1, NULL, 3, 4, 4, 4, 3, 5, 5, 5, NULL, ''),
(4, 6, 2, 1, 1, NULL, 4, 5, 3, 4, 5, 4, 5, 5, NULL, ''),
(5, 7, 2, 1, 1, NULL, 5, 3, 5, 5, 5, 5, 5, 5, NULL, ''),
(6, 9, 2, 2, 1, NULL, 5, 5, 4, 5, 5, 5, 4, 5, NULL, ''),
(7, 15, 1, 2, 1, NULL, 3, 4, 4, 5, 4, 4, 5, 5, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `cs_basicinfo`
--

CREATE TABLE `cs_basicinfo` (
  `id` int(11) NOT NULL,
  `clientType` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `region` varchar(255) NOT NULL,
  `service` varchar(50) NOT NULL,
  `division` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cs_basicinfo`
--

INSERT INTO `cs_basicinfo` (`id`, `clientType`, `gender`, `age`, `region`, `service`, `division`, `section`, `type`, `createdAt`) VALUES
(4, 'Citizen', 'Male', 18, 'CAR', 'DATA', 1, 1, 'online', '2023-11-24 03:11:50'),
(5, 'Citizen', 'Male', 18, 'CAR', 'DATA', 1, 1, 'online', '2023-11-24 03:14:29'),
(6, 'Citizen', 'Male', 18, 'CAR', 'DATA', 1, 1, 'online', '2023-11-24 03:27:31'),
(7, 'Citizen', 'Male', 18, 'CAR', 'DATA', 1, 1, 'online', '2023-11-24 03:28:28'),
(9, 'Citizen', 'Male', 25, 'Region II', 'DATA', 1, 1, 'online', '2023-11-24 03:33:27'),
(15, 'Business', 'Male', 25, 'Region IV-A', 'DATA', 1, 1, 'online', '2023-11-24 03:39:59');

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
(1, 1, 0, '2'),
(2, 1, 4, '4'),
(3, 1, 5, 'I think the topic should be given more emphasis is the first topic'),
(4, 1, 6, 'I find every information helpful to my work'),
(5, 2, 0, '2'),
(6, 2, 4, '5'),
(7, 2, 5, 'The topic really emphasize the emphasis'),
(8, 2, 6, 'The information is very helpful to my work Leszxgo');

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
(2, 1, 'No'),
(3, 4, 'Choice 1'),
(4, 4, 'Choice 2'),
(5, 4, 'Choice 3');

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
(3, 1, 'Do you believe in Paragraph?', 'paragraph'),
(4, 2, 'This is a multiple choice question', 'multiple'),
(5, 3, 'Which topic should have been given more emphasis?', 'paragraph'),
(6, 3, 'What information did you find most helpful in your work?', 'paragraph');

-- --------------------------------------------------------

--
-- Table structure for table `ss_responses`
--

CREATE TABLE `ss_responses` (
  `id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ss_responses`
--

INSERT INTO `ss_responses` (`id`, `survey_id`, `fullName`, `emailAddress`, `createdAt`) VALUES
(1, 2, 'Juan Dela Cruz', 'juandel@gmail.com', '2023-11-07 01:31:32'),
(2, 2, 'John Doe', 'johndoe@gmail.com', '2023-11-07 01:32:46');

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
(1, 1, 'Section Survey'),
(2, 2, 'Mutiple Choice'),
(3, 2, 'Paragraph Section');

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
(1, 'New Survey Title', 'open', '2023-11-07 06:50:59'),
(2, 'Example Survey', 'close', '2023-11-07 08:08:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs_answers`
--
ALTER TABLE `cs_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs_basicinfo`
--
ALTER TABLE `cs_basicinfo`
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
-- Indexes for table `ss_responses`
--
ALTER TABLE `ss_responses`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cs_answers`
--
ALTER TABLE `cs_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cs_basicinfo`
--
ALTER TABLE `cs_basicinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ss_answers`
--
ALTER TABLE `ss_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ss_choices`
--
ALTER TABLE `ss_choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ss_questions`
--
ALTER TABLE `ss_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ss_responses`
--
ALTER TABLE `ss_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ss_sections`
--
ALTER TABLE `ss_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ss_surveys`
--
ALTER TABLE `ss_surveys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
