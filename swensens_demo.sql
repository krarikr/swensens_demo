-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 12:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swensens_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sws_id` int(10) NOT NULL COMMENT 'ไอดี',
  `sws_fname` varchar(50) NOT NULL COMMENT 'ชื่อ',
  `sws_lname` varchar(50) NOT NULL COMMENT 'นามสกุล',
  `sws_email` text NOT NULL COMMENT 'อีเมลล์',
  `sws_pass` varchar(50) NOT NULL COMMENT 'รหัสผ่าน',
  `sws_tel` int(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `sws_gender` varchar(1) NOT NULL COMMENT 'เพศ { a=ชาย, b=หญิง, c=ไม่ระบุ }',
  `sws_date` text NOT NULL COMMENT 'ที่อยู่',
  `sws_news` varchar(1) DEFAULT NULL COMMENT 'การรับข่าวสาร { y=รับข้อมูล, null=ไม่รับข้อมูล }'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sws_id`, `sws_fname`, `sws_lname`, `sws_email`, `sws_pass`, `sws_tel`, `sws_gender`, `sws_date`, `sws_news`) VALUES
(1, 'ข้อมูลชื่อ', 'ข้อมูลนามสกุล', 'test@test.com', 'test', 99999999, 'a', '2023-01-01', 'y'),
(2, 'ข้อมูลชื่อ2', 'ข้อมูลนามสกุล2', 'test2@test.com', 'test2', 123456789, 'b', '2023-01-01', 'y'),
(3, 'krit', 'nohgmon', 'krit@gmail.com', '12345678', 9874589, 'a', '2023-01-01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sws_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sws_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ไอดี', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
