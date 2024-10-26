-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2024 at 12:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `fullname` varchar(30) NOT NULL COMMENT 'kjhvkjhv',
  `phone` varchar(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email_address` varchar(50) DEFAULT NULL,
  `tertiary_education` varchar(40) DEFAULT NULL,
  `tertiary_address` varchar(40) DEFAULT NULL,
  `tertiary_year` varchar(40) DEFAULT NULL,
  `secondary_education` varchar(40) DEFAULT NULL,
  `secondary_address` varchar(40) DEFAULT NULL,
  `secondary_year` varchar(40) DEFAULT NULL,
  `junior_education` varchar(40) DEFAULT NULL,
  `junior_address` varchar(40) DEFAULT NULL,
  `junior_year` varchar(40) DEFAULT NULL,
  `primary_education` varchar(40) DEFAULT NULL,
  `primary_address` varchar(40) DEFAULT NULL,
  `primary_year` varchar(40) DEFAULT NULL,
  `age` varchar(40) DEFAULT NULL,
  `birth_date` varchar(40) DEFAULT NULL,
  `birth_place` varchar(40) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `civil_status` varchar(40) DEFAULT NULL,
  `father_name` varchar(40) DEFAULT NULL,
  `mother_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`fullname`, `phone`, `address`, `email_address`, `tertiary_education`, `tertiary_address`, `tertiary_year`, `secondary_education`, `secondary_address`, `secondary_year`, `junior_education`, `junior_address`, `junior_year`, `primary_education`, `primary_address`, `primary_year`, `age`, `birth_date`, `birth_place`, `gender`, `civil_status`, `father_name`, `mother_name`) VALUES
('Luis Miguel P. Burzon', '0946-695-83', '0261 nia road makinabang baliwag bulacan', 'Miguelburzon06@gmail.com', '\r\nBALIWAG POLYTECHNIC COLLEGE', 'Poblacion, Baliwag, Bulacan', '2021-Present', 'NEXT GENERATION TECHNOLOGICAL COLLEGE', 'Plaza Naning Poblacion Baliwag, Bulacan', '2019-2021', 'BAJET CASTILLO HIGH SCHOOL', 'Longos, Pulilan, Bulacan', '2015-2019', 'MAKINABANG ELEMENTARY SCHOOL', 'Makinabang, Baliwag, Bulacan', '2009-2015', '22', 'November 6, 2002', ' Makinabang Baliwag, Bulacan', ' Male', 'Single', 'Luis B. Burzon', 'Shirly P. Burzon');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
