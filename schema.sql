-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 05:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `photo` blob NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`fname`, `lname`, `username`, `phone`, `photo`, `password`, `role_id`) VALUES
('admin', 'admin', 'admin@example.com', '+348063462333', 0x646f776e6c6f61642e706e67, '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `id_number` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`fname`, `lname`, `id_number`, `email`, `phone`, `address`, `town`, `password`, `role_id`) VALUES
('kashim', 'kyari', 12121212, 'kashimkyari@gmail.com', '+348063462333', 'Yola', 'Yola', '5f4dcc3b5aa765d61d8327deb882cf99', '1'),
('admin', '', 0, 'admin', '', '', '', 'admin', ''),
('kashim', 'kyari', 11111111, 'km1396@live.mdx.ac.uk', '+234806346233', 'flic', 'flic', '1a1dc91c907325c69271ddf0c944bc72', '2');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employer_feedback`
--

CREATE TABLE `employer_feedback` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `mess_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_feedback`
--

INSERT INTO `employer_feedback` (`fname`, `lname`, `message`, `status`, `mess_date`) VALUES
('kashim', 'kyari', 'Hello all', 'Inactive', NULL),
('kashim', 'kyari', 'Hello there\r\n', 'Inactive', '2020-06-30'),
('kashim', 'kyari', 'Hello\r\n', 'Inactive', '2020-06-30'),
('kashim', 'kyari', 'Test', 'Inactive', '2020-06-30'),
('kashim', 'kyari', 'Test', 'Inactive', '2020-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `title` text NOT NULL,
  `sub_message` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `status` varchar(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`title`, `sub_message`, `message`, `date`, `status`, `id`) VALUES
('HEK', 'JEWNJ', 'DJNWC', '2020-06-18', 'Active', 2),
('FANTASTIC MAIDS AND WHERE TO FIND THEM!?', 'THIS IS A TEST', 'TESTING 1,2', '2020-06-30', 'Active', 3);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `category` varchar(255) NOT NULL,
  `photo` blob NOT NULL,
  `description` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`category`, `photo`, `description`, `status`) VALUES
('medium', 0x646f776e6c6f61642e6a7067, 'Test Gallery', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `maids_registration_details`
--

CREATE TABLE `maids_registration_details` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `id_number` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `gender` text NOT NULL,
  `edu_level` text NOT NULL,
  `skills` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maids_registration_details`
--

INSERT INTO `maids_registration_details` (`fname`, `lname`, `id_number`, `email`, `phone`, `town`, `gender`, `edu_level`, `skills`) VALUES
('kashim', 'kyari', 12121212, 'kashimkyari@gmail.com', '+348063462333', 'Yola', 'male', 'secondary', 'no'),
('kashim', 'kyari', 12121212, 'kashimkyari@gmail.com', '+238063462333', 'Yola', 'female', 'primary', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `maid_profiles`
--

CREATE TABLE `maid_profiles` (
  `category` text NOT NULL,
  `training` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `sender` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `sent_date` date NOT NULL DEFAULT current_timestamp(),
  `reply_date` date NOT NULL DEFAULT current_timestamp(),
  `reply` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`sender`, `message`, `sent_date`, `reply_date`, `reply`, `id`) VALUES
('km1396@live.mdx.ac.uk', 'Hello There', '2020-06-30', '2020-06-30', 'Hey there', 1),
('km1396@live.mdx.ac.uk', 'Mr. Admin', '2020-06-30', '0000-00-00', '', 2),
('km1396@live.mdx.ac.uk', 'Hello', '2020-06-30', '2020-06-30', 'Yes', 3),
('km1396@live.mdx.ac.uk', 'Administrator', '2020-06-30', '2020-06-30', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `photo` blob NOT NULL,
  `description` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `category` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` text NOT NULL,
  `testimonials` text NOT NULL,
  `photo` blob NOT NULL,
  `status` text NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`fname`, `lname`, `category`, `age`, `gender`, `testimonials`, `photo`, `status`, `ID`) VALUES
('kashim', 'kyari', 'University', 12, 'Male', 'Hello', 0x6166726963612d323631313738385f313932302e6a7067, 'Active', 1),
('qqq', 'Ss', 'University', 12, 'Male', 'God is great', 0x646f776e6c6f61642e6a7067, 'Active', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `photo` blob NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `category`, `photo`, `description`, `date`, `status`) VALUES
(1, 'Slider1', 0x6c616e6473636170652d343737333837395f313932302e6a7067, 'landscape', '2020-06-30', 'Active'),
(2, 'Slider1', 0x6c616e6473636170652d343737333837395f313932302e6a7067, 'landscape', '2020-06-30', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mail` text NOT NULL,
  `subscription_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `fname`, `mail`, `subscription_date`) VALUES
(4, 'kashim', 'kas@gma.com', '2020-06-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
