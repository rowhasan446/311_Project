-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2024 at 09:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kghs_cultural_carnival`
--

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `Name` varchar(20) NOT NULL,
  `Co_ID` int(10) NOT NULL,
  `Event_ID` int(10) NOT NULL,
  `Phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`Name`, `Co_ID`, `Event_ID`, `Phone`) VALUES
('Hasan Ahmed', 101, 201, 1711123456),
('Sharmin Akter', 102, 202, 1712345678),
('Abdul Malek', 103, 203, 1713456789),
('Rumana Parveen', 104, 204, 1714567890),
('Zahid Hasan', 105, 205, 1715678901),
('Sonia Islam', 106, 206, 1716789012),
('Mofizul Islam', 107, 207, 1717890123),
('Tania Rahman', 108, 208, 1718901234),
('Nusrat Jahan', 109, 209, 1719012345),
('Mohammad Ali', 110, 210, 1720123456);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_ID` int(10) NOT NULL,
  `Event_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_ID`, `Event_Name`) VALUES
(201, 'Music Performance'),
(202, 'Dance Performance'),
(203, 'Poetry Recitation'),
(204, 'Drawing Competition'),
(205, 'Drama Performance'),
(206, 'Quiz Competition'),
(207, 'Speech Competition'),
(208, 'Fashion Show'),
(209, 'Science Exhibition'),
(210, 'Photoshop Competitio');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `Name` varchar(15) NOT NULL,
  `Guest_ID` int(10) NOT NULL,
  `Event_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`Name`, `Guest_ID`, `Event_ID`) VALUES
('Munirul Islam', 301, 201),
('Sabina Yasmin', 302, 202),
('Selina Akter', 303, 203),
('Ariful Haque', 304, 204),
('Tamim Hossain', 305, 205),
('Ali Rahman', 306, 206),
('Mehrun Nesa', 307, 207),
('Zainal Abedin', 308, 208),
('Mushfiqur Rahma', 309, 209),
('Imran Hossain', 310, 210);

-- --------------------------------------------------------

--
-- Table structure for table `judge`
--

CREATE TABLE `judge` (
  `Name` varchar(15) NOT NULL,
  `Judge_ID` int(10) NOT NULL,
  `Seg_ID` int(10) NOT NULL,
  `Phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `judge`
--

INSERT INTO `judge` (`Name`, `Judge_ID`, `Seg_ID`, `Phone`) VALUES
('Mohammad Rashed', 401, 501, 1721234567),
('Nasreen Akter', 402, 502, 1722345678),
('Saiful Islam', 403, 503, 1723456789),
('Tasnim Rashid', 404, 504, 1724567890),
('Iftikhar Ahmed', 405, 505, 1725678901),
('Tanveer Shawkat', 406, 506, 1726789012),
('Rezaul Karim', 407, 507, 1727890123),
('Sharmin Fatima', 408, 508, 1728901234),
('Ali Hasan', 409, 509, 1729012345),
('Lutfar Sultana', 410, 510, 1730123456);

-- --------------------------------------------------------

--
-- Table structure for table `judge_assignemnt`
--

CREATE TABLE `judge_assignemnt` (
  `Assign_ID` int(10) NOT NULL,
  `Judge_ID` int(10) NOT NULL,
  `Seg_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `judge_assignemnt`
--

INSERT INTO `judge_assignemnt` (`Assign_ID`, `Judge_ID`, `Seg_ID`) VALUES
(1, 401, 501),
(2, 402, 502),
(3, 403, 503),
(4, 404, 504),
(5, 405, 505),
(6, 406, 506),
(7, 407, 507),
(8, 408, 508),
(9, 409, 509),
(10, 410, 510);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `P_ID` int(11) NOT NULL,
  `P_Name` text NOT NULL,
  `Institution` text NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`P_ID`, `P_Name`, `Institution`, `Phone`) VALUES
(601, 'Sohel Rana', 'Khilgaon Government High School', 1731456789),
(602, 'Ruhi Akter', 'Khilgaon Government High School', 1732567890),
(603, 'Sumi Rahman', 'Mirpur Girls High School', 1733678901),
(604, 'Ahmed Siddique', 'Dhanmondi High School', 1734789012),
(605, 'Hasina Akter', 'Nayapara Government School', 1735890123),
(606, 'Tanveer Hasan', 'Mugdha Government School', 1736901234),
(607, 'Afsana Afruz', 'Banani High School', 1737012345),
(608, 'Imran Hossain', 'Khilgaon Government High School', 1738123456),
(609, 'Sumaiya Rahman', 'Gulshan School', 1739234567),
(610, 'Nazmul Hasan', 'Mirpur School', 1740345678);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `Position_ID` int(5) DEFAULT NULL,
  `P_ID` int(10) NOT NULL,
  `Seg_ID` int(10) NOT NULL,
  `Position` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`Position_ID`, `P_ID`, `Seg_ID`, `Position`) VALUES
(701, 601, 501, '1st'),
(702, 602, 502, '2nd'),
(703, 603, 503, '3rd'),
(704, 604, 504, '1st'),
(705, 605, 505, '2nd'),
(706, 606, 506, '3rd'),
(707, 607, 507, '1st'),
(708, 608, 508, '2nd'),
(709, 609, 509, '3rd'),
(710, 610, 510, '1st');

-- --------------------------------------------------------

--
-- Table structure for table `prizes`
--

CREATE TABLE `prizes` (
  `Name` varchar(15) NOT NULL,
  `Prize_ID` int(10) NOT NULL,
  `Position_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prizes`
--

INSERT INTO `prizes` (`Name`, `Prize_ID`, `Position_ID`) VALUES
('Gold Medal', 1001, 701),
('Silver Medal', 1002, 702),
('Bronze Medal', 1003, 703),
('Gold Medal', 1004, 704),
('Silver Medal', 1005, 705),
('Bronze Medal', 1006, 706),
('Gold Medal', 1007, 707),
('Silver Medal', 1008, 708),
('Bronze Medal', 1009, 709),
('Gold Medal', 1010, 710);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `R_ID` int(11) NOT NULL,
  `P_ID` int(11) NOT NULL,
  `Seg_ID` int(11) NOT NULL,
  `No_Of_Seg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`R_ID`, `P_ID`, `Seg_ID`, `No_Of_Seg`) VALUES
(901, 601, 501, 1),
(902, 602, 502, 1),
(903, 603, 503, 1),
(904, 604, 504, 1),
(905, 605, 505, 1),
(906, 606, 506, 1),
(907, 607, 507, 1),
(908, 608, 508, 1),
(909, 609, 509, 1),
(910, 610, 510, 1);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `P_ID` int(10) NOT NULL,
  `P_Name` varchar(20) NOT NULL,
  `Result_ID` int(10) NOT NULL,
  `Position_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`P_ID`, `P_Name`, `Result_ID`, `Position_ID`) VALUES
(601, 'Sohel Rana', 10001, 701),
(602, 'Ruhi Akter', 10002, 702),
(603, 'Sumi Rahman', 10003, 703),
(604, 'Ahmed Siddique', 10004, 704),
(605, 'Hasina Akter', 10005, 705),
(606, 'Tanveer Hasan', 10006, 706),
(607, 'Afsana Afruz', 10007, 707),
(608, 'Imran Hossain', 10008, 708),
(609, 'Sumaiya Rahman', 10009, 709),
(610, 'Nazmul Hasan', 10010, 710);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Schedule_ID` int(10) NOT NULL,
  `Venue_ID` int(10) NOT NULL,
  `Event_ID` int(10) NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Schedule_ID`, `Venue_ID`, `Event_ID`, `Time`) VALUES
(1001, 1101, 201, '10:00:00'),
(1002, 1102, 202, '11:00:00'),
(1003, 1103, 203, '12:00:00'),
(1004, 1104, 204, '01:00:00'),
(1005, 1105, 205, '02:00:00'),
(1006, 1106, 206, '03:00:00'),
(1007, 1107, 207, '04:00:00'),
(1008, 1108, 208, '05:00:00'),
(1009, 1109, 209, '06:00:00'),
(1010, 1110, 210, '07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `School_Name` varchar(50) DEFAULT NULL,
  `School_ID` int(10) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`School_Name`, `School_ID`, `Address`) VALUES
('Khilgaon Government High School', 1201, 'Khilgaon, Dhaka'),
('Mirpur Girls High School', 1202, 'Mirpur, Dhaka'),
('Dhanmondi High School', 1203, 'Dhanmondi, Dhaka'),
('Nayapara Government School', 1204, 'Nayapara, Dhaka'),
('Mugdha Government School', 1205, 'Mugdha, Dhaka'),
('Banani High School', 1206, 'Banani, Dhaka'),
('Gulshan School', 1207, 'Gulshan, Dhaka'),
('Mirpur School', 1208, 'Mirpur, Dhaka'),
('Kurmitola School', 1209, 'Kurmitola, Dhaka'),
('Rampura Government School', 1210, 'Rampura, Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `segment`
--

CREATE TABLE `segment` (
  `Segment_Name` varchar(20) NOT NULL,
  `Seg_ID` int(10) NOT NULL,
  `Event_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `segment`
--

INSERT INTO `segment` (`Segment_Name`, `Seg_ID`, `Event_ID`) VALUES
('Music Performance', 501, 201),
('Dance Performance', 502, 202),
('Poetry Recitation', 503, 203),
('Drawing Competition', 504, 204),
('Drama Performance', 505, 205),
('Quiz Competition', 506, 206),
('Speech Competition', 507, 207),
('Fashion Show', 508, 208),
('Science Exhibition', 509, 209),
('Photoshop Competitio', 510, 210);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `Name` varchar(20) NOT NULL,
  `Venue_ID` int(10) NOT NULL,
  `Location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`Name`, `Venue_ID`, `Location`) VALUES
('Khilgaon Auditorium', 1101, 'Khilgaon, Dhaka'),
('Banani Hall', 1102, 'Banani, Dhaka'),
('Gulshan Stage', 1103, 'Gulshan, Dhaka'),
('Dhanmondi Field', 1104, 'Dhanmondi, Dhaka'),
('Mugdha Stage', 1105, 'Mugdha, Dhaka'),
('Mirpur Stadium', 1106, 'Mirpur, Dhaka'),
('Kurmitola Venue', 1107, 'Kurmitola, Dhaka'),
('Rampura Auditorium', 1108, 'Rampura, Dhaka'),
('Mirpur Field', 1109, 'Mirpur, Dhaka'),
('Khilgaon Field', 1110, 'Khilgaon, Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `winner`
--

CREATE TABLE `winner` (
  `Name` varchar(15) NOT NULL,
  `Winner_ID` int(10) NOT NULL,
  `P_ID` int(10) NOT NULL,
  `Segment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winner`
--

INSERT INTO `winner` (`Name`, `Winner_ID`, `P_ID`, `Segment`) VALUES
('Sohel Rana', 1201, 601, 'Music Performance'),
('Ruhi Akter', 1202, 602, 'Dance Performance'),
('Sumi Rahman', 1203, 603, 'Poetry Recitation'),
('Ahmed Siddique', 1204, 604, 'Drawing Competition'),
('Hasina Akter', 1205, 605, 'Drama Performance'),
('Tanveer Hasan', 1206, 606, 'Quiz Competition'),
('Afsana Afruz', 1207, 607, 'Speech Competition'),
('Imran Hossain', 1208, 608, 'Fashion Show'),
('Sumaiya Rahman', 1209, 609, 'Science Exhibition'),
('Nazmul Hasan', 1210, 610, 'Photoshop Competitio');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
