-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 07:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appt_id` int(11) NOT NULL,
  `pet_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `pet_type` tinytext NOT NULL,
  `pet_name` tinytext NOT NULL,
  `age` int(2) NOT NULL,
  `reason` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `owner_name` tinytext NOT NULL,
  `contact_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appt_id`, `pet_id`, `user_id`, `pet_type`, `pet_name`, `age`, `reason`, `date`, `time`, `owner_name`, `contact_no`) VALUES
(1, 0, 0, 'cat', 'sxsx', 23, 'dsdsds', '2022-05-13', '18:46:00', 'wswsw', 23232),
(2, 0, 0, 'cat', 'sxsx', 23, 'dsdsds', '2022-05-13', '18:46:00', 'wswsw', 23232),
(3, 0, 0, 'cat', 'sxsx', 23, 'dsdsds', '2022-05-13', '18:46:00', 'wswsw', 23232),
(4, 0, 0, 'cat', 'sxsx', 23, 'dsdsds', '2022-05-13', '18:46:00', 'wswsw', 23232),
(5, 0, 0, 'cat', 'balla', 12, 'ballta bade amaruva', '2022-05-06', '08:52:00', 'SHanuka', 12345123),
(6, 0, 0, 'cat', 'hjhj', 12, 'cdcdcdcdc', '2022-05-05', '20:55:00', 'cdcdcdcd', 7755456),
(7, 0, 0, 'cat', 'hjhj', 12, 'cdcdcdcdc', '2022-05-05', '20:55:00', 'cdcdcdcd', 7755456),
(8, 0, 0, 'cat', 'ffdf', 12, 'fdfdf', '2022-05-06', '20:57:00', 'dffd', 778),
(9, 0, 0, 'cat', 'ffdf', 12, 'fdfdf', '2022-05-06', '20:57:00', 'dffd', 778),
(10, 0, 0, 'cat', 'ffdf', 12, 'fdfdf', '2022-05-06', '20:57:00', 'dffd', 778),
(11, 0, 0, 'cat', 'cdc', 0, 'gfdg', '0000-00-00', '00:00:00', '', 0),
(12, 0, 0, 'cat', 'gtgdg', 45, 'dgt', '0000-00-00', '00:00:00', '', 0),
(13, 0, 0, 'cat', '', 0, '', '0000-00-00', '00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactusdetails`
--

CREATE TABLE `contactusdetails` (
  `name` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactusdetails`
--

INSERT INTO `contactusdetails` (`name`, `email`, `message`) VALUES
('tharuka', 'tharukalg@gmail.com', 'wsefgvvwsedfsdfsdsdf'),
('jijfvofv', 'vfvdfjui@gmail.com', 'vfbvifdygvidfzbujtbhdtunfgbihbuid'),
('jijfvofv', 'vfvdfjui@gmail.com', 'vfbvifdygvidfzbujtbhdtunfgbihbuid'),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `petdetails`
--

CREATE TABLE `petdetails` (
  `pet_id` int(11) NOT NULL,
  `pet_name` varchar(400) NOT NULL,
  `pet_type` varchar(400) NOT NULL,
  `pet_breed` varchar(400) NOT NULL,
  `age` int(11) NOT NULL,
  `pet_gender` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petdetails`
--

INSERT INTO `petdetails` (`pet_id`, `pet_name`, `pet_type`, `pet_breed`, `age`, `pet_gender`) VALUES
(1, 'epi', 'cat', 'asddfasddf', 2, 'male'),
(2, 'balla', 'dog', 'dsdsd', 23, 'male'),
(3, 'balla', 'dog', 'dsdsd', 23, 'male'),
(4, 'gtgt', 'dog', 'gtgt', 45, 'male'),
(5, 'gtgt', 'dog', 'gtgt', 45, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `petstore`
--

CREATE TABLE `petstore` (
  `photo` varchar(400) NOT NULL,
  `name` varchar(400) NOT NULL,
  `price` varchar(400) NOT NULL,
  `description` varchar(400) NOT NULL,
  `type` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petstore`
--

INSERT INTO `petstore` (`photo`, `name`, `price`, `description`, `type`) VALUES
('../images/shop/21.jpg', ' Dry Cat Food', '$22.39', 'Friskies Seafood Sensations Dry Cat Food, 3.15-lb bag - Chewy.com cats will really like it', 'catFood'),
('../images/shop/13.jpg.png', '9lives', '$15.49', 'Lean and tasty dry cat food', 'catFood'),
('../images/shop/37.jpg', 'Alpo', '$22.88', 'good for the dogs health', 'dogFood'),
('../images/shop/31.jpg', 'Benfull', '$11.99', 'good for the dogs health', 'dogFood'),
('../images/shop/27.jpg', 'chicken  vegitable entree', '$66.99', 'senior vitality ', 'catFood'),
('../images/shop/2.jpg.png', 'Dental Stiks', '$16.00', 'Clenz-A-Dent Dental Chews for Dogs Over 44.1 Lbs, 14 Chews', 'Medical'),
('../images/shop/3.jpg.png', 'FLEA DEFENDER', '$32.99', 'Natural Flea & Tick Repellent Chews - Dogs', 'Medical'),
('../images/shop/12.jpg.png', 'Friskies', '$22.99', 'perfect for cats', 'catFood'),
('../images/shop/30.jpg', 'Holistic', '$33.99', 'Good for the dogs health ', 'dogFood'),
('../images/shop/33.jpg', 'Holistic select', '$32.88', 'tottaly body health design with diagestive health', 'dogFood'),
('../images/shop/26.jpg', 'iamso', '$33.99', 'Test 1234', ''),
('../images/shop/36.jpg', 'islam', '$55.77', 'number 1 ingrediant is real chicken', 'dogFood'),
('../images/shop/22.jpg', 'kit&kaboodle', '$33.99', '4 tasty flavourse\r\nchicken\r\nliver\r\nturkey', ''),
('../images/shop/7.jpg.png', 'Nutramax Denamarin', '$90.99', 'Nutramax Denamarin Liver Supplement for Dogs of All Sizes, 225 mg, Chewable Tablets', 'Medical'),
('../images/shop/38.jpg', 'Nutrish', '$66.66', 'real chicken and veggy recipie', ''),
('../images/shop/14.jpg.png', 'ocean whitefish ', '$31.99', 'Good for cats health', 'Medical'),
('../images/shop/6.jpg.png', 'PawFriction', '$34.99', 'PawFriction, Paw Pad Traction Coating Granule System, 2.0 Oz', 'Medical'),
('../images/shop/16.jpg.png', 'Pedigree dog food', '$13.99', 'Pedigree Adult Lamb & Vegetables Dog Dry Food ', ''),
('../images/shop/32.jpg', 'perfect kibble', '$44.88', 'soft&chuwwy artifitial dog food', ''),
('../images/shop/4.jpg.png', 'Pet Pill Dispenser', '$2.99', 'Pet Pill Dispenser - Dogs & Cats', 'Medical'),
('../images/shop/34.jpg', 'petdog', '$77.99', 'pedigree dog food for the puppies', 'digFood'),
('../images/shop/5.jpg.png', 'Probiotic Capsules ', '$22.95', 'Probiotic Capsules - Dogs & Cats', 'Medical'),
('../images/shop/14.jpg.png', 'Purina friskies', '$14.95', 'Friskies dry cat food ', 'Medical'),
('../images/shop/28.jpg', 'Royal canin', '$55.99', 'veterinary care nutrition specially for cats', 'catFood'),
('../images/shop/23.jpeg', 'Salmon pate', '$44.99', 'really good food for the cats', 'catFood'),
('../images/shop/2.jpg.png', 'shampoo', '$21.60', 'Proviable Capsules - Dogs & Cats', ''),
('../images/shop/35.jpg', 'Small breed', '$66.99', 'natural ingrediants plus super nutrietiants for the small puppies', 'dogFood'),
('../images/shop/39.jpg', 'solid gold', '$33.99', 'fit and fabulous', 'dogFood'),
('../images/shop/24.jpg', 'Tasty shreds', '$33.99', 'Felix Tasty Shreds Cat Food | VioVet.co.uk | FREE delivery available', 'catFood'),
('../images/shop/29.jpg', 'TopBreed', '$44.99', 'puppy dog meal ', 'dogFood'),
('../images/shop/20.jpg', 'welachchi cat food', '$55.99', 'cats will enjoy this', ''),
('../images/shop/25.jpg', 'whiskas', '$22.58', 'high level proteign FRISKIES Indoor Delights Dry Cat Food, 6.3-lb bag - Chewy.com \r\n', 'catFood');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(400) NOT NULL,
  `last_name` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `gender` varchar(400) NOT NULL,
  `contact_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `password`, `gender`, `contact_no`) VALUES
(1, 'tharuka', 'lakshan', 'tharuka@gmail.com', 'tharuka', 'male', 3322222),
(5, 'lakshan', 'gamage', 'tharuka@gmail.com', '7777', 'male', 34234345),
(6, 'fff', 'ddd', 'ddf@gmail.com', 'abcd', 'male', 775588669),
(7, 'admin', 'nande', 'admin@bawbaw.lk', 'bawbaw', 'male', 778854545),
(8, 'balla', 'uura', 'balla@balla.com', 'abc', 'male', 11245612),
(9, 'pawan', 'senpura', 'pawan.sen@gmail.com', '123456', 'male', 778856223);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appt_id`);

--
-- Indexes for table `petdetails`
--
ALTER TABLE `petdetails`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `petstore`
--
ALTER TABLE `petstore`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `petdetails`
--
ALTER TABLE `petdetails`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
