-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 08:00 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlttnn`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `STT` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pq` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`STT`, `username`, `pass`, `pq`) VALUES
(1, 'abc', '123', b'1'),
(2, 'xyz', '456', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id_class` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name_class` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_course` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_teacher` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_kind` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id_class`, `name_class`, `id_course`, `id_teacher`, `id_kind`) VALUES
('lop_ta_b1_tn', 'Lớp tiếng anh b1 cho thanh niên', 'ta_b1', 'gv02', 'tn'),
('lop_taa1_te', 'Lớp tiếng anh a1 cho trẻ em', 'ta_a1', 'gv01', 'te'),
('lop_tn_n1_tn', 'Lớp tiếng nhật N1', 'tn_n1', 'gv04', 'tn');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_course` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name_course` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LANGUAGE_nn` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `name_course`, `LANGUAGE_nn`, `date_start`, `date_end`) VALUES
('ielts', 'tiếng anh ielts_1', 'Anh', '2019-09-01', '2019-11-01'),
('ta_a1', 'Tiếng anh A1', 'Anh', '2019-07-03', '2019-10-03'),
('ta_a2', 'Tiếng anh A2qưdd', 'Anh', '2019-10-16', '2019-12-16'),
('ta_b1', 'Tiếng anh B1', 'Anh', '2019-04-08', '2019-08-08'),
('tn_n1', 'Tiếng nhật N1', 'Nhật', '2019-04-01', '2019-06-01'),
('tn_nn1', 'tiếng nhật nn1', 'nhật nè', '2019-10-25', '2019-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `course_kind`
--

CREATE TABLE `course_kind` (
  `id_course` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_kind` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fee` float DEFAULT NULL,
  `salary` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course_kind`
--

INSERT INTO `course_kind` (`id_course`, `id_kind`, `fee`, `salary`) VALUES
('ta_a1', 'te', 2500000, 5000000),
('ta_b1', 'tn', 3000000, 6000000);

-- --------------------------------------------------------

--
-- Table structure for table `kind`
--

CREATE TABLE `kind` (
  `id_kind` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name_kind` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kind`
--

INSERT INTO `kind` (`id_kind`, `name_kind`) VALUES
('nl', 'Người lớn'),
('te', 'Trẻ em'),
('tn', 'Thanh niên'),
('tnien', 'Trung niên');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id_room` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_room`) VALUES
('1.1'),
('1.2'),
('1.3'),
('2.1'),
('2.2'),
('2.3'),
('3.1'),
('3.2'),
('3.3');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id_schedule` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_kind` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_course` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_room` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `monday` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tuesday` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wednesday` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thursday` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `friday` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saturday` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id_schedule`, `id_kind`, `id_course`, `id_room`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`) VALUES
('tkb01', 'te', 'ta_a1', '1.1', '', '7:00 - 8:30', '', '7:00 - 8:30', '', '7:00 - 8:30'),
('tkb02', 'tn', 'ta_b1', '2.1', '8:00 - 9:30', '', '8:00 - 9:30', '', '8:00 - 9:30', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_student` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `sex` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_st` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level_st` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_student`, `last_name`, `first_name`, `date_of_birth`, `sex`, `email`, `address_st`, `level_st`) VALUES
('hv01', 'Nguyễn', 'A', '1998-06-25', 'Nam', 'a@gmail.com', 'Vĩnh Hải', 'tiếng anh a1'),
('hv02', 'Nguyễn Thị', 'Duyên', '2014-02-14', 'Nữ', 'duyen@gmail.com', 'Vĩnh Phước', 'chưa có cơ bản'),
('hv03', 'Nguyễn', 'Nam', '1995-04-16', 'Nam', 'nam@gmail.com', 'Vĩnh Hải', 'tiếng anh b1'),
('hv04', 'Trần Cao', 'Văn', '1995-03-03', 'Nam', 'Van@gmail.com', 'Vĩnh Hòa', 'tiếng anh b1'),
('hv05', 'Trần Thị', 'Kim Anh', '1998-09-06', 'Nữ', 'Anh@gmail.com', 'Vĩnh Hải', 'tiếng anh a2'),
('hv07', 'Nguyễn Thị', 'Oanh', '1998-03-03', 'Nữ', 'Oanh98@gmail.com', 'Vĩnh Hải - Nha Trang', 'Tiếng Anh B1');

-- --------------------------------------------------------

--
-- Table structure for table `student_class`
--

CREATE TABLE `student_class` (
  `id_student` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_class` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status_n` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_class`
--

INSERT INTO `student_class` (`id_student`, `id_class`, `status_n`) VALUES
('hv05', 'lop_ta_b1_tn', 1),
('hv01', 'lop_taa1_te', 1),
('hv02', 'lop_tn_n1_tn', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id_teacher` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `sex` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `date_start_working` date DEFAULT NULL,
  `address_tc` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level_tc` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id_teacher`, `last_name`, `first_name`, `date_of_birth`, `sex`, `email`, `phone`, `date_start_working`, `address_tc`, `level_tc`) VALUES
('gv01', 'nguyễn a', 'ba', '1992-02-01', 'nam', 'ab@gmail.com', 16363734, '2019-09-18', 'vh', 'anh'),
('gv02', 'Nguyễn Thị', 'Tuyết Minh', '1991-09-04', 'Nữ', 'minh@gmail.com', 123143454, '2018-09-19', 'Vĩnh Phước', 'Tiếng nhật'),
('gv03', 'Nguyễn', 'Nam', '1983-10-02', 'Nam', 'nam@gmail.com', 1323343, '2019-01-12', 'Vĩnh Hải', 'tiếng anh ielts'),
('gv04', 'Trần', 'kim Thư', '1987-11-03', 'Nữ', 'Thu@gmail.com', 132323436, '2019-01-12', 'Vĩnh Hòa', 'tiếng nhật'),
('gv05', 'Trần', 'Anh', '1992-02-01', 'Nam', 'Anh@gmail.com', 37598745, '2019-03-23', 'Vĩnh Nguyên', 'tiếng anh ielts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`STT`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_class`),
  ADD KEY `fk6` (`id_course`),
  ADD KEY `fk7` (`id_kind`),
  ADD KEY `fk8` (`id_teacher`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `course_kind`
--
ALTER TABLE `course_kind`
  ADD PRIMARY KEY (`id_course`,`id_kind`),
  ADD KEY `fk2` (`id_kind`);

--
-- Indexes for table `kind`
--
ALTER TABLE `kind`
  ADD PRIMARY KEY (`id_kind`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`),
  ADD KEY `fk3` (`id_kind`),
  ADD KEY `fk4` (`id_course`),
  ADD KEY `fk5` (`id_room`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`);

--
-- Indexes for table `student_class`
--
ALTER TABLE `student_class`
  ADD PRIMARY KEY (`id_class`,`id_student`),
  ADD KEY `fk9` (`id_student`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_teacher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `fk6` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`),
  ADD CONSTRAINT `fk7` FOREIGN KEY (`id_kind`) REFERENCES `kind` (`id_kind`),
  ADD CONSTRAINT `fk8` FOREIGN KEY (`id_teacher`) REFERENCES `teacher` (`id_teacher`);

--
-- Constraints for table `course_kind`
--
ALTER TABLE `course_kind`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`id_kind`) REFERENCES `kind` (`id_kind`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`id_kind`) REFERENCES `kind` (`id_kind`),
  ADD CONSTRAINT `fk4` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`),
  ADD CONSTRAINT `fk5` FOREIGN KEY (`id_room`) REFERENCES `room` (`id_room`);

--
-- Constraints for table `student_class`
--
ALTER TABLE `student_class`
  ADD CONSTRAINT `fk10` FOREIGN KEY (`id_class`) REFERENCES `class` (`id_class`),
  ADD CONSTRAINT `fk9` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_student`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
