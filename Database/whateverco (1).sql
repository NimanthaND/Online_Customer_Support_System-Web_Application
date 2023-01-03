-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 07:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whateverco`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `Acc_ID` int(11) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Date` int(11) NOT NULL,
  `Month` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Phone_number` int(11) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`Acc_ID`, `Title`, `First_Name`, `Last_Name`, `Date`, `Month`, `Year`, `Phone_number`, `Address`, `Country`, `Password`, `Image`) VALUES
(2, 'Mr', 'aaaaaaaaaaa', 'aaaaaaaaaaaaaaa', 15, 11, 2012, 2222222, 'aaaaaaaaaaaaaaaaaaa', 'Aland Island', 'Asd123', 'businessuser1.png');

-- --------------------------------------------------------

--
-- Table structure for table `advertiestment`
--

CREATE TABLE `advertiestment` (
  `adID` int(11) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `webadd` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `video` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blogID` int(11) NOT NULL,
  `blogName` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `file` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blogID`, `blogName`, `author`, `description`, `picture`, `file`) VALUES
(1, 'Ella Sri Lanka', 'Fazid Samoon', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam praesentium distinctio tempora numquam in atque pariatur optio. Maiores sunt doloribus ullam culpa soluta at cumque dolorem quas minus ipsa!', 'FB_IMG_1507715282189.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam praesentium distinctio tempora numquam in atque pariatur optio. Maiores sunt doloribus ullam culpa soluta at cumque dolorem quas minus ipsa!Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam praesentium distinctio tempora numquam in atque pariatur optio. Maiores sunt doloribus ullam culpa soluta at cumque dolorem quas minus ipsa!Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam praesentium distinctio tempora numquam in atque pariatur optio. Maiores sunt doloribus ullam culpa soluta at cumque dolorem quas minus ipsa!'),
(2, 'Colombo Sri lanka', 'Fazid Samoon', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam praesentium distinctio tempora numquam in atque pariatur optio. Maiores sunt doloribus ullam culpa soluta at cumque dolorem quas minus ipsa!', '2d390a0f4bb77cfc87851e25aa5a81e.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam praesentium distinctio tempora numquam in atque pariatur optio. Maiores sunt doloribus ullam culpa soluta at cumque dolorem quas minus ipsa!Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam praesentium distinctio tempora numquam in atque pariatur optio. Maiores sunt doloribus ullam culpa soluta at cumque dolorem quas minus ipsa!'),
(3, 'Nuwaraeliya ', 'Fazid Samoon', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam praesentium distinctio tempora numquam in atque pariatur optio. Maiores sunt doloribus ullam culpa soluta at cumque dolorem quas minus ipsa!Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam praesentium distinctio tempora numquam in atque pariatur optio. Maiores sunt doloribus ullam culpa soluta at cumque dolorem quas minus ipsa!', 'images-1.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam praesentium distinctio tempora numquam in atque pariatur optio. Maiores sunt doloribus ullam culpa soluta at cumque dolorem quas minus ipsa!Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam praesentium distinctio tempora numquam in atque pariatur optio. Maiores sunt doloribus ullam culpa soluta at cumque dolorem quas minus ipsa!'),
(8, 'Ella Sri Lanka', 'Fazid Samoon', 'sssssssssssssssssssssssssssssssssssssssssssssssss', 'acounttypebg.png', 'Sri Lanka Institute of Information Technology.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `b_account_details`
--

CREATE TABLE `b_account_details` (
  `BAcc_ID` int(11) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `C_Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CAddress1` varchar(200) NOT NULL,
  `CAddress2` varchar(200) NOT NULL,
  `CAddress3` varchar(200) NOT NULL,
  `CPhone1` int(11) NOT NULL,
  `CPhone2` int(11) NOT NULL,
  `A_name1` varchar(50) NOT NULL,
  `A_name2` varchar(50) NOT NULL,
  `A_Phone` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_account_details`
--

INSERT INTO `b_account_details` (`BAcc_ID`, `Title`, `C_Name`, `email`, `CAddress1`, `CAddress2`, `CAddress3`, `CPhone1`, `CPhone2`, `A_name1`, `A_name2`, `A_Phone`, `Password`, `Image`) VALUES
(1, 'Mr', 'fazidco', 'admin', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaa', 123456789, 123456789, 'fazi', 'faz', 123456789, 'admin', ''),
(11, 'Mr', 'vinura', 'vinura', 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaa', 1111111, 111111, 'dddddddddd', 'dddddddddd', 222222, 'Asd1234', 'businessuser1.png'),
(13, 'Mr', 'fazid', 'fazid', 'aaaaaaaaaaaa', '', '', 1111111, 111111, 'fazid', 'samoon', 111111, 'Asd123', 'DSC_3611.JPG'),
(14, 'Mr', 'fazid & co', 'fazid&co@gmail.com', 'aaaaaaaaaa', 'aaaaaaaaaa', 'aaaaaaa', 1111111, 11111111, 'fazid', 'samoon', 9876543, 'Asd1234', 'DSC_3611.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `register_service`
--

CREATE TABLE `register_service` (
  `RID` int(11) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `hotelName` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `discription` varchar(500) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `videos` varchar(50) NOT NULL,
  `blog` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `arrivalDate` date NOT NULL,
  `Departure date` date NOT NULL,
  `roomType` varchar(20) NOT NULL,
  `payType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservationID`, `name`, `NIC`, `email`, `phone`, `arrivalDate`, `Departure date`, `roomType`, `payType`) VALUES
(0, 'fazid', '200091', 'tuan.fazid@outlook.com', 775061961, '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `pic` varchar(50) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(1000) NOT NULL,
  `video` varchar(50) NOT NULL,
  `blogs` varchar(50) NOT NULL,
  `serviceID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`pic`, `companyName`, `category`, `location`, `price`, `description`, `video`, `blogs`, `serviceID`) VALUES
('marshmello.jpg', 'hotel 1', 'Airport Hotels', 'Australia', 10000, '', '', '', 1),
('IMG_4695 (2).jpg', 'fazid', 'Business Hotels', 'Brazil', 4677, '', '', '', 2),
('blog5.jpg', 'Fazid@co', 'Business Hotels', 'Austria', 50000, 'qqqqqqqqqqqqq', '', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`Acc_ID`);

--
-- Indexes for table `advertiestment`
--
ALTER TABLE `advertiestment`
  ADD PRIMARY KEY (`adID`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blogID`);

--
-- Indexes for table `b_account_details`
--
ALTER TABLE `b_account_details`
  ADD PRIMARY KEY (`BAcc_ID`);

--
-- Indexes for table `register_service`
--
ALTER TABLE `register_service`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_details`
--
ALTER TABLE `account_details`
  MODIFY `Acc_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `advertiestment`
--
ALTER TABLE `advertiestment`
  MODIFY `adID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `b_account_details`
--
ALTER TABLE `b_account_details`
  MODIFY `BAcc_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `register_service`
--
ALTER TABLE `register_service`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
