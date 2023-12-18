-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 02:55 AM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getBasicInfoChartDetails` (IN `type` VARCHAR(50), IN `division` DOUBLE, IN `section` DOUBLE, IN `service` INT(11), IN `year` INT)   BEGIN
	SELECT
        COUNT(*) AS total,
        SUM(CASE WHEN age = 1 THEN 1 ELSE 0 END) AS '18-24',
        SUM(CASE WHEN age = 2 THEN 1 ELSE 0 END) AS '25-39',
        SUM(CASE WHEN age = 3 THEN 1 ELSE 0 END) AS '40-60',
        SUM(CASE WHEN age = 4 THEN 1 ELSE 0 END) AS '61+',
        SUM(CASE WHEN gender = 'Male' THEN 1 ELSE 0 END) AS 'Male',
        SUM(CASE WHEN gender = 'Female' THEN 1 ELSE 0 END) AS 'Female',
        SUM(CASE WHEN clientType = 'Citizen' THEN 1 ELSE 0 END) AS 'Citizen',
        SUM(CASE WHEN clientType = 'Business' THEN 1 ELSE 0 END) AS 'Business',
        SUM(CASE WHEN clientType = 'Government' THEN 1 ELSE 0 END) AS 'Government',
        SUM(CASE WHEN region = 'NCR' THEN 1 ELSE 0 END) AS 'NCR',
        SUM(CASE WHEN region = 'CAR' THEN 1 ELSE 0 END) AS 'CAR',
        SUM(CASE WHEN region = 'Region I' THEN 1 ELSE 0 END) AS 'Region I',
        SUM(CASE WHEN region = 'Region II' THEN 1 ELSE 0 END) AS 'Region II',
        SUM(CASE WHEN region = 'Region III' THEN 1 ELSE 0 END) AS 'Region III',
        SUM(CASE WHEN region = 'Region IV-A' THEN 1 ELSE 0 END) AS 'Region IV-A',
        SUM(CASE WHEN region = 'Region IV-B' THEN 1 ELSE 0 END) AS 'Region IV-B',
        SUM(CASE WHEN region = 'Region V' THEN 1 ELSE 0 END) AS 'Region V',
        SUM(CASE WHEN region = 'Region VI' THEN 1 ELSE 0 END) AS 'Region VI',
        SUM(CASE WHEN region = 'Region VII' THEN 1 ELSE 0 END) AS 'Region VII',
        SUM(CASE WHEN region = 'Region VIII' THEN 1 ELSE 0 END) AS 'Region VIII',
        SUM(CASE WHEN region = 'Region IX' THEN 1 ELSE 0 END) AS 'Region IX',
        SUM(CASE WHEN region = 'Region X' THEN 1 ELSE 0 END) AS 'Region X',
        SUM(CASE WHEN region = 'Region XI' THEN 1 ELSE 0 END) AS 'Region XI',
        SUM(CASE WHEN region = 'Region XII' THEN 1 ELSE 0 END) AS 'Region XII',
        SUM(CASE WHEN region = 'Region XIII' THEN 1 ELSE 0 END) AS 'Region XIII',
        SUM(CASE WHEN region = 'BARMM' THEN 1 ELSE 0 END) AS 'BARMM'
    FROM cs_basicinfo
    WHERE 
            type = type 
            AND division = division 
            AND section = section 
            AND service = service 
            AND YEAR(createdAt) = year;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getCSSResults` (IN `type` VARCHAR(50), IN `division` DOUBLE, IN `section` DOUBLE, IN `service` INT(11), IN `year` INT(11))   BEGIN
SELECT
                    SUM(CASE WHEN csa.cc1 = 1 THEN 1 ELSE 0 END) AS cc1_ans1,
                    SUM(CASE WHEN csa.cc1 = 2 THEN 1 ELSE 0 END) AS cc1_ans2,
                    SUM(CASE WHEN csa.cc1 = 3 THEN 1 ELSE 0 END) AS cc1_ans3,
                    SUM(CASE WHEN csa.cc1 = 4 THEN 1 ELSE 0 END) AS cc1_ans4,
                
                    SUM(CASE WHEN csa.cc2 = 1 THEN 1 ELSE 0 END) AS cc2_ans1,
                    SUM(CASE WHEN csa.cc2 = 2 THEN 1 ELSE 0 END) AS cc2_ans2,
                    SUM(CASE WHEN csa.cc2 = 3 THEN 1 ELSE 0 END) AS cc2_ans3,
                    SUM(CASE WHEN csa.cc2 = 4 THEN 1 ELSE 0 END) AS cc2_ans4,
                    SUM(CASE WHEN csa.cc2 = 5 THEN 1 ELSE 0 END) AS cc2_ans5,
                
                    SUM(CASE WHEN csa.cc3 = 1 THEN 1 ELSE 0 END) AS cc3_ans1,
                    SUM(CASE WHEN csa.cc3 = 2 THEN 1 ELSE 0 END) AS cc3_ans2,
                    SUM(CASE WHEN csa.cc3 = 3 THEN 1 ELSE 0 END) AS cc3_ans3,
                    SUM(CASE WHEN csa.cc3 = 4 THEN 1 ELSE 0 END) AS cc3_ans4,
                
                    SUM(CASE WHEN csa.sqd0 = 1 THEN 1 ELSE 0 END) AS sqd0_ans1,
                    SUM(CASE WHEN csa.sqd0 = 2 THEN 1 ELSE 0 END) AS sqd0_ans2,
                    SUM(CASE WHEN csa.sqd0 = 3 THEN 1 ELSE 0 END) AS sqd0_ans3,
                    SUM(CASE WHEN csa.sqd0 = 4 THEN 1 ELSE 0 END) AS sqd0_ans4,
                    SUM(CASE WHEN csa.sqd0 = 5 THEN 1 ELSE 0 END) AS sqd0_ans5,
                    SUM(CASE WHEN csa.sqd0 = 6 THEN 1 ELSE 0 END) AS sqd0_ans6,
                
                    SUM(CASE WHEN csa.sqd1 = 1 THEN 1 ELSE 0 END) AS sqd1_ans1,
                    SUM(CASE WHEN csa.sqd1 = 2 THEN 1 ELSE 0 END) AS sqd1_ans2,
                    SUM(CASE WHEN csa.sqd1 = 3 THEN 1 ELSE 0 END) AS sqd1_ans3,
                    SUM(CASE WHEN csa.sqd1 = 4 THEN 1 ELSE 0 END) AS sqd1_ans4,
                    SUM(CASE WHEN csa.sqd1 = 5 THEN 1 ELSE 0 END) AS sqd1_ans5,
                    SUM(CASE WHEN csa.sqd1 = 6 THEN 1 ELSE 0 END) AS sqd1_ans6,
                
                    SUM(CASE WHEN csa.sqd2 = 1 THEN 1 ELSE 0 END) AS sqd2_ans1,
                    SUM(CASE WHEN csa.sqd2 = 2 THEN 1 ELSE 0 END) AS sqd2_ans2,
                    SUM(CASE WHEN csa.sqd2 = 3 THEN 1 ELSE 0 END) AS sqd2_ans3,
                    SUM(CASE WHEN csa.sqd2 = 4 THEN 1 ELSE 0 END) AS sqd2_ans4,
                    SUM(CASE WHEN csa.sqd2 = 5 THEN 1 ELSE 0 END) AS sqd2_ans5,
                    SUM(CASE WHEN csa.sqd2 = 6 THEN 1 ELSE 0 END) AS sqd2_ans6,
                
                    SUM(CASE WHEN csa.sqd3 = 1 THEN 1 ELSE 0 END) AS sqd3_ans1,
                    SUM(CASE WHEN csa.sqd3 = 2 THEN 1 ELSE 0 END) AS sqd3_ans2,
                    SUM(CASE WHEN csa.sqd3 = 3 THEN 1 ELSE 0 END) AS sqd3_ans3,
                    SUM(CASE WHEN csa.sqd3 = 4 THEN 1 ELSE 0 END) AS sqd3_ans4,
                    SUM(CASE WHEN csa.sqd3 = 5 THEN 1 ELSE 0 END) AS sqd3_ans5,
                    SUM(CASE WHEN csa.sqd3 = 6 THEN 1 ELSE 0 END) AS sqd3_ans6,
                
                    SUM(CASE WHEN csa.sqd4 = 1 THEN 1 ELSE 0 END) AS sqd4_ans1,
                    SUM(CASE WHEN csa.sqd4 = 2 THEN 1 ELSE 0 END) AS sqd4_ans2,
                    SUM(CASE WHEN csa.sqd4 = 3 THEN 1 ELSE 0 END) AS sqd4_ans3,
                    SUM(CASE WHEN csa.sqd4 = 4 THEN 1 ELSE 0 END) AS sqd4_ans4,
                    SUM(CASE WHEN csa.sqd4 = 5 THEN 1 ELSE 0 END) AS sqd4_ans5,
                    SUM(CASE WHEN csa.sqd4 = 6 THEN 1 ELSE 0 END) AS sqd4_ans6,
                
                    SUM(CASE WHEN csa.sqd5 = 1 THEN 1 ELSE 0 END) AS sqd5_ans1,
                    SUM(CASE WHEN csa.sqd5 = 2 THEN 1 ELSE 0 END) AS sqd5_ans2,
                    SUM(CASE WHEN csa.sqd5 = 3 THEN 1 ELSE 0 END) AS sqd5_ans3,
                    SUM(CASE WHEN csa.sqd5 = 4 THEN 1 ELSE 0 END) AS sqd5_ans4,
                    SUM(CASE WHEN csa.sqd5 = 5 THEN 1 ELSE 0 END) AS sqd5_ans5,
                    SUM(CASE WHEN csa.sqd5 = 6 THEN 1 ELSE 0 END) AS sqd5_ans6,
                
                    SUM(CASE WHEN csa.sqd6 = 1 THEN 1 ELSE 0 END) AS sqd6_ans1,
                    SUM(CASE WHEN csa.sqd6 = 2 THEN 1 ELSE 0 END) AS sqd6_ans2,
                    SUM(CASE WHEN csa.sqd6 = 3 THEN 1 ELSE 0 END) AS sqd6_ans3,
                    SUM(CASE WHEN csa.sqd6 = 4 THEN 1 ELSE 0 END) AS sqd6_ans4,
                    SUM(CASE WHEN csa.sqd6 = 5 THEN 1 ELSE 0 END) AS sqd6_ans5,
                    SUM(CASE WHEN csa.sqd6 = 6 THEN 1 ELSE 0 END) AS sqd6_ans6,
                
                    SUM(CASE WHEN csa.sqd7 = 1 THEN 1 ELSE 0 END) AS sqd7_ans1,
                    SUM(CASE WHEN csa.sqd7 = 2 THEN 1 ELSE 0 END) AS sqd7_ans2,
                    SUM(CASE WHEN csa.sqd7 = 3 THEN 1 ELSE 0 END) AS sqd7_ans3,
                    SUM(CASE WHEN csa.sqd7 = 4 THEN 1 ELSE 0 END) AS sqd7_ans4,
                    SUM(CASE WHEN csa.sqd7 = 5 THEN 1 ELSE 0 END) AS sqd7_ans5,
                    SUM(CASE WHEN csa.sqd7 = 6 THEN 1 ELSE 0 END) AS sqd7_ans6,
                
                    SUM(CASE WHEN csa.sqd8 = 1 THEN 1 ELSE 0 END) AS sqd8_ans1,
                    SUM(CASE WHEN csa.sqd8 = 2 THEN 1 ELSE 0 END) AS sqd8_ans2,
                    SUM(CASE WHEN csa.sqd8 = 3 THEN 1 ELSE 0 END) AS sqd8_ans3,
                    SUM(CASE WHEN csa.sqd8 = 4 THEN 1 ELSE 0 END) AS sqd8_ans4,
                    SUM(CASE WHEN csa.sqd8 = 5 THEN 1 ELSE 0 END) AS sqd8_ans5,
                    SUM(CASE WHEN csa.sqd8 = 6 THEN 1 ELSE 0 END) AS sqd8_ans6
                
                
                
                
            FROM cs_basicinfo as csb
            LEFT JOIN cs_answers as csa
            ON csb.id = csa.info_id
            WHERE 
            csb.type = type 
            AND csb.division = division 
            AND csb.section = section 
            AND csb.service = service 
            AND YEAR(csb.createdAt) = year;
END$$

DELIMITER ;

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
(8, 16, 3, NULL, NULL, NULL, 3, 3, 3, 4, 2, 3, 3, 3, NULL, ''),
(9, 17, 2, 1, 1, NULL, 3, 4, 4, 3, 4, 4, 5, 5, NULL, ''),
(10, 18, 2, 1, 1, NULL, 4, 4, 4, 4, 4, 5, 4, 4, NULL, ''),
(11, 19, 2, 1, 1, NULL, 4, 3, 4, 4, 5, 4, 4, 4, NULL, ''),
(12, 20, 3, NULL, NULL, NULL, 4, 3, 3, 5, 4, 4, 4, 3, NULL, ''),
(13, 21, 1, 1, 1, NULL, 2, 3, 4, 5, 4, 4, 4, 5, NULL, ''),
(14, 22, 1, 1, 1, NULL, 4, 4, 5, 4, 3, 3, 4, 4, NULL, ''),
(15, 23, 1, 3, NULL, NULL, 1, 2, 3, 4, 5, 4, 3, 2, NULL, ''),
(16, 24, 1, 3, NULL, NULL, 5, 4, 3, 4, 5, 4, 3, 4, NULL, ''),
(17, 25, 1, 1, 1, NULL, 3, 3, 3, 4, 4, 4, 5, 5, NULL, ''),
(18, 26, 1, 2, 1, NULL, 4, 4, 5, 4, 4, 3, 4, 4, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `cs_basicinfo`
--

CREATE TABLE `cs_basicinfo` (
  `id` int(11) NOT NULL,
  `clientType` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` tinyint(4) NOT NULL COMMENT '1 - 18 to 24\r\n2 - 25 to 39\r\n3 - 40 to 60\r\n4 - 61 and above',
  `region` varchar(255) NOT NULL,
  `service` int(11) NOT NULL,
  `division` double NOT NULL,
  `section` double NOT NULL,
  `type` varchar(50) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cs_basicinfo`
--

INSERT INTO `cs_basicinfo` (`id`, `clientType`, `gender`, `age`, `region`, `service`, `division`, `section`, `type`, `createdAt`) VALUES
(16, 'Citizen', 'Male', 1, 'NCR', 3, 6, 6.1, 'online', '2023-12-04 06:16:46'),
(17, 'Business', 'Male', 2, 'Region I', 3, 6, 6.1, 'online', '2023-12-11 03:09:08'),
(18, 'Citizen', 'Male', 1, 'Region IX', 3, 6, 6.1, 'online', '2023-12-11 03:17:47'),
(19, 'Government', 'Male', 2, 'Region VIII', 3, 6, 6.1, 'online', '2023-12-11 03:19:05'),
(20, 'Government', 'Male', 1, 'Region X', 3, 6, 6.1, 'online', '2023-12-11 03:19:46'),
(21, 'Citizen', 'Female', 2, 'NCR', 3, 6, 6.1, 'online', '2023-12-11 03:20:40'),
(22, 'Citizen', 'Female', 1, 'NCR', 3, 6, 6.1, 'online', '2023-12-11 03:21:41'),
(23, 'Citizen', 'Female', 3, 'Region VII', 3, 6, 6.1, 'online', '2023-12-11 03:22:29'),
(24, 'Citizen', 'Male', 3, 'NCR', 3, 6, 6.1, 'online', '2023-12-11 03:23:05'),
(25, 'Citizen', 'Male', 1, 'Region IV-A', 3, 6, 6.1, 'online', '2023-12-11 03:23:48'),
(26, 'Citizen', 'Male', 2, 'Region II', 3, 6, 6.1, 'online', '2023-12-13 03:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `cs_services`
--

CREATE TABLE `cs_services` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `division` double NOT NULL,
  `section` double DEFAULT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'active',
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cs_services`
--

INSERT INTO `cs_services` (`id`, `name`, `type`, `division`, `section`, `status`, `createdAt`) VALUES
(1, 'Example Service', 'online', 1, 1, 'active', '2023-12-01 01:18:55'),
(2, 'New Service', 'online', 6, 6, 'active', '2023-12-01 05:32:50'),
(3, 'Services New', 'online', 6, 6.1, 'active', '2023-12-01 05:35:36'),
(4, 'Testing Service', 'online', 6, 6.1, 'active', '2023-12-01 06:34:55'),
(5, 'Physical Service', 'physical', 1, 1.2, 'active', '2023-12-04 05:36:30'),
(6, 'Services New', 'physical', 1, 1.2, 'active', '2023-12-04 05:36:59');

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
-- Indexes for table `cs_services`
--
ALTER TABLE `cs_services`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cs_basicinfo`
--
ALTER TABLE `cs_basicinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `cs_services`
--
ALTER TABLE `cs_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
