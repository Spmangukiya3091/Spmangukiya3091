-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 05:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdmsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `blood_group`
--

CREATE TABLE `blood_group` (
  `id` int(11) NOT NULL,
  `blood_group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_group`
--

INSERT INTO `blood_group` (`id`, `blood_group`) VALUES
(1, 'A+'),
(2, 'A-'),
(7, 'AB+'),
(8, 'AB-'),
(3, 'B+'),
(4, 'B-'),
(5, 'O+'),
(6, 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `blood_inventory_data`
--

CREATE TABLE `blood_inventory_data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `blood_group_id` int(11) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `donat_date` datetime NOT NULL DEFAULT current_timestamp(),
  `volume` int(11) NOT NULL DEFAULT 0,
  `zipcode` int(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_inventory_data`
--

INSERT INTO `blood_inventory_data` (`id`, `name`, `age`, `blood_group_id`, `address`, `phone`, `email`, `donat_date`, `volume`, `zipcode`, `city`, `gender`, `file`, `login`) VALUES
(1, 'Meet Panchal', 26, 1, '142 Nimanl Apart', 216504896, 'meet@gmail.com', '2021-04-20 10:35:21', 450, 395004, 'Surat', 'male', '13471.png', 'jivanjyot@gmail.com'),
(2, 'Aaradhya Patel', 24, 2, '145 Binamal Apart', 2147483647, 'Aaradhya@gmail.com', '2021-04-20 10:37:33', 450, 395006, 'Surat', 'male', 'img_avatar2.png', 'venus@gmail.com'),
(3, 'Nirmal Singh', 25, 3, '142 Bisnoy Apart.', 2147483647, 'nirmal@gmail.com', '2021-04-20 10:38:53', 450, 395007, 'surat', 'male', 'team2.jpg', 'kiran@gmail.com'),
(4, 'Aarav Singh', 30, 4, '11 Nimak Apart.', 2147483647, 'Aarav@gmail.com', '2021-04-20 10:44:13', 450, 395006, 'surat', 'male', 'team25.jpg', 'jivanjyot@gmail.com'),
(5, 'Aarnav Goswami', 45, 5, '541 strret velly', 216451216, 'Arnav@gmail.com', '2021-04-20 10:50:17', 450, 395002, 'Surat', 'male', 'team4.jpg', 'kiran@gmail.com'),
(6, 'Aarush Patel', 28, 6, '642 Nila Co. Society', 654151421, 'Aarush@gmail.com', '2021-04-20 10:53:03', 450, 395009, 'surat', 'male', '13471.png', 'venus@gmail.com'),
(7, 'Aayush Khanna', 40, 7, '201 Minaxi Vadi', 2147483647, 'Aayush@gmail.com', '2021-04-20 11:01:07', 450, 395001, 'surat', 'male', 'team1.jpg', 'jivanjyot@gmail.com'),
(8, 'Abdul Kadir', 35, 8, '504 Hemna Apart.', 2147483647, 'Abdul@hotmail.com', '2021-04-20 11:02:17', 450, 395002, 'surat', 'male', 'team25.jpg', 'kiran@gmail.com'),
(9, 'Abhimanyu Sharma', 40, 1, '901 Limnaj Society', 632145212, 'Abhimanyusharma@outlook.com', '2021-04-20 11:03:49', 450, 395007, 'surat', 'male', 'team4.jpg', 'venus@gmail.com'),
(10, 'Drishti Patel', 35, 2, '512 Bingal Apart.', 2147483647, 'Drishti@gmail.com', '2021-04-20 11:08:23', 450, 395006, 'surat', 'female', 'team3.jpg', 'jivanjyot@gmail.com'),
(11, 'Kashvi Patel', 30, 3, '612 Binam society', 2147483647, 'Kashvi@gmail.com', '2021-04-20 11:09:23', 450, 395008, 'surat', 'female', 'img_avatar2.png', 'kiran@gmail.com'),
(12, 'Krisha Sonani', 40, 4, '103 Street Apart', 2147483647, 'Krishasonani@gmail.com', '2021-04-20 11:11:16', 450, 395003, 'surat', 'female', 'team2.jpg', 'venus@gmail.com'),
(13, 'Mayra Kothari', 31, 5, '514 Vinam Co.', 2147483647, 'mayra@gmail.com', '2021-04-20 11:28:07', 450, 395006, 'surat', 'female', 'team3.jpg', 'jivanjyot@gmail.com'),
(14, 'Navya Shah', 45, 6, '1145 binam Apart', 2147483647, 'Navya@outlook.com', '2021-04-20 11:31:39', 450, 395000, 'Surat', 'female', 'team2.jpg', 'kiran@gmail.com'),
(15, 'Naitik Singh', 29, 7, '312 Bingal Society.', 2147483647, 'naitiksingh@gmail.com', '2021-04-20 11:37:02', 450, 395007, 'surat', 'male', '13471.png', 'venus@gmail.com'),
(16, 'Nehrika Desai', 35, 8, '145 Apollo Apartmnet', 2147483647, 'Nehrika@gmail.com', '2021-04-20 15:42:17', 450, 395004, 'surat', 'female', 'img_avatar2.png', 'jivanjyot@gmail.com'),
(17, 'Jigar Patel', 30, 1, '156 Ceat Apart bulding', 651789456, 'jigar@gmail.com', '2021-04-20 15:43:26', 450, 395010, 'surat', 'male', 'team4.jpg', 'kiran@gmail.com'),
(18, 'Taara Sutariya', 35, 2, '142 Parivar Society', 2147483647, 'Taarasutariya@gmail.com', '2021-04-20 19:47:27', 450, 395006, 'surat', 'female', 'img_avatar2.png', 'venus@gmail.com'),
(19, 'Bhavin Sakariya', 33, 3, '654 Bihanm Society', 2147483647, 'Bhavin@gmail.com', '2021-04-20 19:57:27', 450, 395008, 'surat', 'male', 'ab.jpg', 'jivanjyot@gmail.com'),
(20, 'Zara Bhingradiya', 26, 4, '658 Bhinga House', 2147483647, 'Zara@gmail.com', '2021-04-20 19:58:46', 450, 395004, 'surat', 'female', 'team3.jpg', 'kiran@gmail.com'),
(21, 'Daksh Patel', 35, 5, '457 Binamal Apart', 2147483647, 'Daksh@gmail.com', '2021-04-20 20:00:08', 450, 395006, 'Surat', 'male', '13471.png', 'venus@gmail.com'),
(22, 'Anant Parekh', 25, 6, '654 bhailal Apart', 2147483647, 'Anant@gmail.com', '2021-04-20 20:01:51', 450, 395001, 'surat', 'male', 'team25.jpg', 'jivanjyot@gmail.com'),
(23, 'Kimaya Hasnnin', 26, 7, '698 Parvarish Society', 982165347, 'Kimaya@gmail.com', '2021-04-20 20:03:22', 450, 395010, 'Surat', 'female', 'team3.jpg', 'kiran@gmail.com'),
(24, 'Dhanuk Shah', 29, 8, '1456 Bhatinda Housing', 2147483647, 'Dhanuk@gmail.com', '2021-04-20 20:04:37', 450, 395006, 'Surat', 'male', 'team1.jpg', 'venus@gmail.com'),
(25, 'Divyansh Bhanushali', 30, 1, '367 Vimal Tower', 2147483647, 'Divyansh@gmail.com', '2021-04-20 20:05:46', 450, 395011, 'Surat', 'male', 'team4.jpg', 'jivanjyot@gmail.com'),
(26, 'Larisa Dsuza', 33, 2, '597 windows Houses', 2147483647, 'Larisa@gmail.com', '2021-04-20 20:07:29', 450, 395004, 'Surat', 'female', '13471.png', 'kiran@gmail.com'),
(27, 'Shrishti Kalyan', 35, 3, '31 Bhanusali Bangloz', 2147483647, 'Shrishti@gmail.com', '2021-04-20 20:08:34', 450, 395008, 'surat', 'female', 'img_avatar2.png', 'venus@gmail.com'),
(28, 'Faiyaz Binma', 36, 4, '987 Biman House', 2147483647, 'Faiyaz@gmail.com', '2021-04-20 20:10:19', 450, 395006, 'surat', 'male', '13471.png', 'jivanjyot@gmail.com'),
(29, 'Faruq Abdulhusain Salman', 40, 5, '012 Bismilla Townhall', 697854645, 'faruq@gmail.com', '2021-04-20 20:12:24', 450, 395006, 'surat', 'male', 'team25.jpg', 'kiran@gmail.com'),
(30, 'Vritee Nayar', 30, 6, '541 Krishna park', 2147483647, 'vritee@gmail.com', '2021-04-20 20:13:30', 450, 395006, 'surat', 'female', 'img_avatar2.png', 'venus@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`) VALUES
(1, 'Demo', 'demo@gmail.com', 'Hello.......');

-- --------------------------------------------------------

--
-- Table structure for table `handed_over`
--

CREATE TABLE `handed_over` (
  `id` int(11) NOT NULL,
  `ref_code` text NOT NULL,
  `patient` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` text NOT NULL,
  `blood_group_id` varchar(11) NOT NULL,
  `volume` int(11) NOT NULL,
  `recived_by` varchar(50) NOT NULL,
  `physician` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `organization` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `handed_over`
--

INSERT INTO `handed_over` (`id`, `ref_code`, `patient`, `gender`, `age`, `blood_group_id`, `volume`, `recived_by`, `physician`, `phone`, `date`, `organization`) VALUES
(1, '202104284373', 'demo', '', '24', 'O+', 450, 'gbdfb', 'akshay sonani', '1597536450', '2021-04-28 11:23:55', ' Kiran Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(30) NOT NULL,
  `ref_code` varchar(50) NOT NULL,
  `patient` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` text NOT NULL,
  `blood_group_id` varchar(10) NOT NULL,
  `volume` float NOT NULL,
  `physician_name` text NOT NULL,
  `organization` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0= pending,1= approved',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `ref_code`, `patient`, `gender`, `age`, `blood_group_id`, `volume`, `physician_name`, `organization`, `phone`, `status`, `date_created`, `login`) VALUES
(1, '202104284373', 'demo', 'male', '24', 'O+', 450, 'akshay sonani', ' Kiran Hospital', '1597536450', 1, '2021-04-28 11:22:22', 'kiran@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `requests_users`
--

CREATE TABLE `requests_users` (
  `id` int(30) NOT NULL,
  `ref_code` varchar(50) NOT NULL,
  `patient` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` text NOT NULL,
  `blood_group_id` varchar(10) NOT NULL,
  `volume` float NOT NULL,
  `physician_name` text NOT NULL,
  `organization_id` int(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0= pending,1= approved',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests_users`
--

INSERT INTO `requests_users` (`id`, `ref_code`, `patient`, `gender`, `age`, `blood_group_id`, `volume`, `physician_name`, `organization_id`, `phone`, `status`, `date_created`) VALUES
(1, '202104179465', 'Meet Panchal', 'male', '35', '1', 450, 'Shubh Patel', 1, '9784574564', 0, '2021-04-17 14:50:47'),
(2, '202104284373', 'demo', 'male', '24', '5', 450, 'akshay sonani', 2, '1597536450', 1, '2021-04-28 11:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `total_blood`
--

CREATE TABLE `total_blood` (
  `id` int(11) NOT NULL,
  `blood_group` varchar(11) NOT NULL,
  `volume` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `total_blood`
--

INSERT INTO `total_blood` (`id`, `blood_group`, `volume`) VALUES
(1, 'A+', 3150),
(2, 'A-', 3150),
(3, 'B+', 2700),
(4, 'B-', 3150),
(5, 'O+', 2250),
(6, 'O-', 2250),
(7, 'AB+', 1800),
(8, 'AB-', 1800);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `organization` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `password` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL DEFAULT '1' COMMENT 'active == 1\r\nInactive == 0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `designation`, `organization`, `email`, `phone`, `address`, `state`, `city`, `zipcode`, `password`, `active`) VALUES
(1, 'JIVAN JYOT HOSPITAL', 'BHMS', 'Jivan Jyot Hospital', 'jivanjyot@gmail.com', 26142558, 'Amroli', 'Gujarat', 'SURAT', 394105, '202cb962ac59075b964b07152d234b70', '1'),
(2, 'Kiran Hospital', 'BHMS', ' Kiran Hospital', 'kiran@gmail.com', 261200450, 'Katargam', 'Gujarat', 'SURAT', 395006, '202cb962ac59075b964b07152d234b70', '1'),
(3, 'venus hospital', 'BHMS', 'venus hospital', 'venus@gmail.com', 241, '11 milanam comp,katargam', 'Gujarat', 'Surat', 395004, '202cb962ac59075b964b07152d234b70', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `blood_group`
--
ALTER TABLE `blood_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blood_group` (`blood_group`);

--
-- Indexes for table `blood_inventory_data`
--
ALTER TABLE `blood_inventory_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blood_group_id` (`blood_group_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `handed_over`
--
ALTER TABLE `handed_over`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests_users`
--
ALTER TABLE `requests_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_blood`
--
ALTER TABLE `total_blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_group`
--
ALTER TABLE `blood_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blood_inventory_data`
--
ALTER TABLE `blood_inventory_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `handed_over`
--
ALTER TABLE `handed_over`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requests_users`
--
ALTER TABLE `requests_users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `total_blood`
--
ALTER TABLE `total_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_inventory_data`
--
ALTER TABLE `blood_inventory_data`
  ADD CONSTRAINT `blood_inventory_data_ibfk_1` FOREIGN KEY (`blood_group_id`) REFERENCES `blood_group` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
