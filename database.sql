-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 02:54 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE `blood_donor` (
  `bd_id` int(20) UNSIGNED DEFAULT NULL,
  `bd_name` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `bd_sex` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `bd_age` int(10) NOT NULL,
  `bd_bgroup` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `bd_reg_date` date NOT NULL,
  `bd_phno` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`bd_id`, `bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_reg_date`, `bd_phno`) VALUES
(1, 'Nguyễn Văn Tùng', 'Nam', 1999, 'O', '2021-12-06', '0989456578'),
(2, 'Phạm Văn Trị', 'Nam', 2001, 'A', '2021-08-12', '096254855'),
(3, 'Hoàng Thị Uyên', 'Nữ', 2000, 'AB', '2021-12-12', '0325675866'),
(4, 'Trần Ánh Tuyết', 'Nữ', 2000, 'B', '2021-01-12', '0362340124');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
