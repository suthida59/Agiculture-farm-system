-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 02:59 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm_tot`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `Branch_code` int(10) NOT NULL,
  `Branch_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`Branch_code`, `Branch_name`) VALUES
(1, 'ไม่มี'),
(2, 'Admintot'),
(3, 'Adminวิสาหกิจชุมชน'),
(4, 'เจ้าของฟาร์ม');

-- --------------------------------------------------------

--
-- Table structure for table `cfquota`
--

CREATE TABLE `cfquota` (
  `cfquota_id` int(11) NOT NULL,
  `cfquota_detail_id` int(11) NOT NULL,
  `cfquota_farm_id` int(11) NOT NULL,
  `cfquota_created_at` timestamp NULL DEFAULT current_timestamp(),
  `cfquota_update_at` datetime DEFAULT NULL,
  `cfquota_date_updateone` date NOT NULL,
  `cfquota_image_updateone` varchar(1000) NOT NULL,
  `cfquota_note_updateone` varchar(1000) NOT NULL,
  `cfquota_date_updatetwo` date NOT NULL,
  `cfquota_image_updatetwo` varchar(1000) NOT NULL,
  `cfquota_note_updatetwo` varchar(2000) NOT NULL,
  `cfquota_date_updatethree` date NOT NULL,
  `cfquota_image_updatethree` varchar(1000) NOT NULL,
  `cfquota_note_updatethree` varchar(2000) NOT NULL,
  `cfquota_send` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cfquota`
--

INSERT INTO `cfquota` (`cfquota_id`, `cfquota_detail_id`, `cfquota_farm_id`, `cfquota_created_at`, `cfquota_update_at`, `cfquota_date_updateone`, `cfquota_image_updateone`, `cfquota_note_updateone`, `cfquota_date_updatetwo`, `cfquota_image_updatetwo`, `cfquota_note_updatetwo`, `cfquota_date_updatethree`, `cfquota_image_updatethree`, `cfquota_note_updatethree`, `cfquota_send`) VALUES
(1, 1, 1, '2020-03-28 17:22:58', NULL, '2020-03-29', './images/img_5e7f8810dc69a.jpg', 'เริ่มปลูกผักกาดหอม', '2020-04-21', './images/img_5e816d418f77b.jpg', 'อายุผัก 3 สัปดาห์', '2020-04-04', './images/img_5e816d6035b49.jpg', 'พร้อมส่งโควตาผัก', '2020-05-04'),
(2, 1, 2, '2020-03-28 17:29:31', NULL, '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00'),
(3, 2, 1, '2020-03-28 17:31:05', NULL, '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00'),
(4, 3, 1, '2020-03-30 07:24:18', NULL, '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(10) NOT NULL,
  `district_name` varchar(50) NOT NULL,
  `district_province` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`, `district_province`) VALUES
(1, 'TOT', 'จังหวัดขอนแก่น'),
(2, 'อำเภอกระนวน', 'จังหวัดขอนแก่น'),
(3, 'อำเภอเมือง', 'จังหวัดขอนแก่น'),
(4, 'อำเภอหนองเรือ', 'จังหวัดขอนแก่น'),
(5, 'อำเภอเขาสวนกวาง', 'จังหวัดขอนแก่น'),
(6, 'อำเภอโนนศิลา', 'จังหวัดขอนแก่น'),
(7, 'อำเภอชนบท', 'จังหวัดขอนแก่น'),
(8, 'อำเภออุบลรัตน์', 'จังหวัดขอนแก่น'),
(9, 'อำเภอน้ำพอง', 'จังหวัดขอนแก่น');

-- --------------------------------------------------------

--
-- Table structure for table `farm`
--

CREATE TABLE `farm` (
  `farm_id` int(10) NOT NULL,
  `farm_name` varchar(50) NOT NULL,
  `farmuser_id` int(10) NOT NULL,
  `farm_address` varchar(100) NOT NULL,
  `farm_phone` int(11) NOT NULL,
  `farm_image` varchar(500) NOT NULL,
  `farm_flname` varchar(50) NOT NULL,
  `farm_location` varchar(100) NOT NULL,
  `farm_lat` varchar(30) NOT NULL,
  `farm_long` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `farm`
--

INSERT INTO `farm` (`farm_id`, `farm_name`, `farmuser_id`, `farm_address`, `farm_phone`, `farm_image`, `farm_flname`, `farm_location`, `farm_lat`, `farm_long`) VALUES
(1, 'มิ้วฟาร์ม', 4, '2', 611465138, 'images/img_5e7f87cc4255f.jpg', 'สุธิดา แสนศรี', '37/1 หมู่ที่ 1 บ้านดูนสาด อำเภอกระนวน จังหวัดขอนแก่น', '16.7836037', '103.15775769999999'),
(2, 'หญิงฟาร์ม', 5, '2', 997753667, 'images/img_5e833e5420335.jpg', 'ปวีนา นาสูงชน', '323 หมู่ที่ 9 บ้านดูนสาด อำเภอกระนวน จังหวัดขอนแก่น', '16.4560586', '102.8283881');

-- --------------------------------------------------------

--
-- Table structure for table `garden`
--

CREATE TABLE `garden` (
  `garden_id` int(11) NOT NULL,
  `garden_size` varchar(50) NOT NULL,
  `garden_num` varchar(50) NOT NULL,
  `garden_farm_id` int(10) NOT NULL,
  `garden_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `garden`
--

INSERT INTO `garden` (`garden_id`, `garden_size`, `garden_num`, `garden_farm_id`, `garden_status`) VALUES
(1, '1.5x20', '2', 1, ''),
(2, '1.0x10', '1', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `gardendetail`
--

CREATE TABLE `gardendetail` (
  `gardendetail_id` int(10) NOT NULL,
  `gardendetail_garid` int(11) NOT NULL,
  `gardendetail_nameseed` varchar(50) NOT NULL,
  `gardendetail_areause` int(11) NOT NULL,
  `gardendetail_image` varchar(1000) NOT NULL,
  `gardendetail_dateplan` date NOT NULL,
  `gardendetail_idcfquota` int(10) NOT NULL,
  `gardendetail_close` int(11) NOT NULL,
  `gardendetail_numproduct` int(11) NOT NULL,
  `gardendetail_dateclose` date NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gardendetail`
--

INSERT INTO `gardendetail` (`gardendetail_id`, `gardendetail_garid`, `gardendetail_nameseed`, `gardendetail_areause`, `gardendetail_image`, `gardendetail_dateplan`, `gardendetail_idcfquota`, `gardendetail_close`, `gardendetail_numproduct`, `gardendetail_dateclose`, `number`) VALUES
(1, 2, 'กรีนโอ๊ต', 5, './images/img_5e8023d32c5d9.jpg', '2020-03-29', 0, 0, 0, '0000-00-00', 1),
(2, 2, 'คะน้า', 5, './images/img_5e8023f922405.jpg', '2020-03-29', 0, 0, 0, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gardetail`
--

CREATE TABLE `gardetail` (
  `gardetail_id` int(11) NOT NULL,
  `gardetail_iddetail` int(10) NOT NULL,
  `gardetail_nameseed` varchar(50) NOT NULL,
  `gardetail_areause` varchar(50) NOT NULL,
  `gardetail_image` varchar(500) NOT NULL,
  `gardetail_dateplan` date NOT NULL,
  `gardetail_idcfquota` int(11) NOT NULL,
  `gardetail_close` int(11) NOT NULL,
  `gardetail_numproduct` int(10) NOT NULL,
  `gardetail_dateclose` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `quota`
--

CREATE TABLE `quota` (
  `quota_id` int(10) NOT NULL,
  `quota_date` date NOT NULL,
  `quota_name` varchar(50) NOT NULL,
  `quota_need` date NOT NULL,
  `quota_customer` varchar(30) NOT NULL,
  `quota_memberid` int(11) NOT NULL,
  `quota_district` int(11) NOT NULL,
  `quota_created_at` timestamp NULL DEFAULT current_timestamp(),
  `quota_update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quota`
--

INSERT INTO `quota` (`quota_id`, `quota_date`, `quota_name`, `quota_need`, `quota_customer`, `quota_memberid`, `quota_district`, `quota_created_at`, `quota_update_at`) VALUES
(1, '2020-03-29', '01/2563', '2020-05-06', 'ลีลาวดีรีสอร์ท', 2, 2, '2020-03-28 17:09:30', NULL),
(2, '2020-03-29', '2/2563', '2020-05-07', 'โรงแรม', 2, 2, '2020-03-28 17:09:52', NULL),
(3, '2020-03-30', '01/2563', '2020-04-30', 'ลีลาวดีรีสอร์ท', 2, 2, '2020-03-30 03:56:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quotadetail`
--

CREATE TABLE `quotadetail` (
  `quotadetail_id` int(11) NOT NULL,
  `quotadetail_cycle_id` int(11) NOT NULL,
  `quotadetail_nameseed` varchar(50) NOT NULL,
  `quotadetail_dateof` date NOT NULL,
  `quotadetail_numall` int(10) NOT NULL,
  `quotadetail_numgone` int(11) DEFAULT NULL,
  `quotadetail_numremain` int(11) DEFAULT NULL,
  `quotadetail_number` int(11) NOT NULL,
  `quotadetail_check` varchar(50) DEFAULT NULL,
  `quotadetail_datesend` date DEFAULT NULL,
  `quotadetail_created_at` timestamp NULL DEFAULT current_timestamp(),
  `quotadetail_update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quotadetail`
--

INSERT INTO `quotadetail` (`quotadetail_id`, `quotadetail_cycle_id`, `quotadetail_nameseed`, `quotadetail_dateof`, `quotadetail_numall`, `quotadetail_numgone`, `quotadetail_numremain`, `quotadetail_number`, `quotadetail_check`, `quotadetail_datesend`, `quotadetail_created_at`, `quotadetail_update_at`) VALUES
(1, 1, 'ผักกาดหอม', '2020-05-06', 300, 100, 200, 50, NULL, NULL, '2020-03-28 17:11:02', NULL),
(2, 1, 'ผักคะน้า', '2020-05-06', 200, 50, 150, 50, NULL, NULL, '2020-03-28 17:21:10', NULL),
(3, 3, 'พริก', '2020-04-30', 300, 50, 250, 50, NULL, NULL, '2020-03-30 03:57:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seed`
--

CREATE TABLE `seed` (
  `seed_id` int(10) NOT NULL,
  `seed_name` varchar(50) NOT NULL,
  `seed_namesci` varchar(50) NOT NULL,
  `seed_prise` int(10) NOT NULL,
  `seed_dateof` varchar(10) NOT NULL,
  `seed_lavel` varchar(30) NOT NULL,
  `seed_image` varchar(500) NOT NULL,
  `seed_user_dis` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seed`
--

INSERT INTO `seed` (`seed_id`, `seed_name`, `seed_namesci`, `seed_prise`, `seed_dateof`, `seed_lavel`, `seed_image`, `seed_user_dis`) VALUES
(1, 'กรีนโอ๊ต', 'Lactuca sativa var.crispa L.', 120, '50 วัน', 'ผัก', './images/img_5e7f848d16518.jpg', 2),
(2, 'เรดโอ๊ต', ' Lactuca sativa var.crispa L.', 120, '50 วัน', 'ผัก', './images/img_5e7f836971df6.jpg', 2),
(3, 'กรีนคอส', 'Lactuca sativa var.crispa L.', 130, '50 วัน', 'ผัก', './images/img_5e7f8413eacad.jpg', 2),
(4, 'ฟิลเลย์ไอซ์เบิร์ก', 'Lactuca sativa.', 130, '50 วัน', 'ผัก', './images/img_5e7f8457d3d4e.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_flname` varchar(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_phone` varchar(11) NOT NULL,
  `user_lavel` varchar(30) NOT NULL,
  `district_id` int(10) NOT NULL,
  `user_farm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_flname`, `user_username`, `user_password`, `user_phone`, `user_lavel`, `district_id`, `user_farm`) VALUES
(1, 'admintot', 'AdminTOT', '12345678', '042334122', 'Admintot', 1, ''),
(2, 'เอก เงินเจริญใจ', 'เอก เงินเจริญใจ', '123456', '0623604127', 'Adminวิสาหกิจชุมชน', 2, ''),
(3, 'นุชวรา เพ็ชรกิ่ง', 'นุชวรา เพ็ชรกิ่ง', '123456', '0621052507', 'Adminวิสาหกิจชุมชน', 9, ''),
(4, 'สุธิดา แสนศรี', 'สุธิดา แสนศรี', '123456', '0611465138', 'เจ้าของฟาร์ม', 2, 'มิ้วฟาร์ม'),
(5, 'ปวีนา นาสูงชน', 'ปวีนา นาสูงชน', '123456', '0997753667', 'เจ้าของฟาร์ม', 2, 'หญิงฟาร์ม');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`Branch_code`);

--
-- Indexes for table `cfquota`
--
ALTER TABLE `cfquota`
  ADD PRIMARY KEY (`cfquota_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `farm`
--
ALTER TABLE `farm`
  ADD PRIMARY KEY (`farm_id`);

--
-- Indexes for table `garden`
--
ALTER TABLE `garden`
  ADD PRIMARY KEY (`garden_id`);

--
-- Indexes for table `gardendetail`
--
ALTER TABLE `gardendetail`
  ADD PRIMARY KEY (`gardendetail_id`);

--
-- Indexes for table `gardetail`
--
ALTER TABLE `gardetail`
  ADD PRIMARY KEY (`gardetail_id`);

--
-- Indexes for table `quota`
--
ALTER TABLE `quota`
  ADD PRIMARY KEY (`quota_id`);

--
-- Indexes for table `quotadetail`
--
ALTER TABLE `quotadetail`
  ADD PRIMARY KEY (`quotadetail_id`);

--
-- Indexes for table `seed`
--
ALTER TABLE `seed`
  ADD PRIMARY KEY (`seed_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `Branch_code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cfquota`
--
ALTER TABLE `cfquota`
  MODIFY `cfquota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `farm`
--
ALTER TABLE `farm`
  MODIFY `farm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `garden`
--
ALTER TABLE `garden`
  MODIFY `garden_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gardendetail`
--
ALTER TABLE `gardendetail`
  MODIFY `gardendetail_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gardetail`
--
ALTER TABLE `gardetail`
  MODIFY `gardetail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quota`
--
ALTER TABLE `quota`
  MODIFY `quota_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quotadetail`
--
ALTER TABLE `quotadetail`
  MODIFY `quotadetail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seed`
--
ALTER TABLE `seed`
  MODIFY `seed_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
