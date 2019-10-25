-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 09:31 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hajurlainamaste`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `content` mediumtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT US', 'Hajurlai Namaste Trade Link is a leading trade company of Nepal since its establishment in 1994 AD. We\'re situated in Baafal, Kathmandu. We\'re the sole authorized distributors of GP lubricants (Malaysia), ITR Spare Parts for Heavy equipment and ITR Lubricants (Dubai) and USB Rock Breaker (S. Korea). Our sub outlets are MAW Enterprise, Sipradi Earthmovers and Continental Trading. After 30 successful years of trading in Nepal, now we\'re gradually expanding our business in the global village. We\'ve been awarded with RAMAN EXCELLENCY AWARD by FCAN and appreciation award for LONG AND CHERISHED ASSOCIATION by SIPRADI EARTH MOVERS PVT LTD.', '2019-07-02 00:00:00', '2019-10-25 07:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(70) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`id`, `topic`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Hajurlai Namaste', 'Our ultimate motto is to provide high quality products in the most reliable and cheapest price yet the best quality.', 'uploads/background/8x10B.jpg', '2019-10-25 07:29:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(5, 'GP Lubricant\'s', 'uploads/clients/gp_logo.png', '2019-07-18 10:07:00', '0000-00-00 00:00:00'),
(6, 'ITR', 'uploads/clients/itr_logo.png', '2019-07-18 08:34:45', '0000-00-00 00:00:00'),
(7, 'KTVB', 'uploads/clients/ktvb_logo.png', '2019-07-18 09:31:39', '0000-00-00 00:00:00'),
(9, 'KUMARIKA', 'uploads/clients/kumarika.png', '2019-07-18 09:38:21', '0000-00-00 00:00:00'),
(10, 'HEMAS', 'uploads/clients/HEMAS.png', '2019-07-18 09:42:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Service` varchar(20) NOT NULL,
  `Message` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `FirstName`, `LastName`, `Email`, `Phone`, `Service`, `Message`, `created_at`) VALUES
(1, 'Sarbaja', 'Adhikari', 'sabu@gmail.com', '9840562003', 'Tover Design', 'rdtgyjkl;', '2019-10-25 07:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(60) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Project 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.', 'uploads/p1.png', '2019-10-25 07:07:47', '0000-00-00 00:00:00'),
(2, 'Project 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'uploads/p2.jpg', '2019-10-25 07:08:39', '0000-00-00 00:00:00'),
(3, 'Project 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'uploads/p3.jpg', '2019-10-25 07:08:52', '0000-00-00 00:00:00'),
(4, 'Project 4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'uploads/p4.jpg', '2019-10-25 07:11:43', '0000-00-00 00:00:00'),
(5, 'Project 5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'uploads/p5.png', '2019-10-25 07:11:58', '0000-00-00 00:00:00'),
(6, 'Project 6', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'uploads/p6.png', '2019-10-25 07:12:15', '0000-00-00 00:00:00'),
(7, 'Project 7', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.', 'uploads/p7.png', '2019-10-25 07:12:57', '0000-00-00 00:00:00'),
(8, 'Project 8', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.', 'uploads/p8.png', '2019-10-25 07:13:14', '0000-00-00 00:00:00'),
(9, 'Project 9', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.', 'uploads/p9.png', '2019-10-25 07:13:30', '0000-00-00 00:00:00'),
(10, 'Project 10', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.', 'uploads/p10.png', '2019-10-25 07:13:48', '0000-00-00 00:00:00'),
(11, 'Project 11', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.', 'uploads/p11.png', '2019-10-25 07:14:03', '0000-00-00 00:00:00'),
(12, 'Project 12', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.', 'uploads/p12.png', '2019-10-25 07:14:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` mediumtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SPARE PARTS', 'We provide ITR Spare Parts for Heavy equipment and ITR Lubricants (Dubai)', 'uploads/services/s1.png', '2019-10-25 07:15:48', '0000-00-00 00:00:00'),
(2, 'LUBRICANTS', 'We\'re the sole authorized distributors of GP lubricants (Malaysia)', 'uploads/services/s2.png', '2019-10-25 07:17:09', '0000-00-00 00:00:00'),
(3, 'RENTAL SERVICE', 'We provide machinery and heavy equiments on hire', 'uploads/services/s3.png', '2019-10-25 07:17:37', '0000-00-00 00:00:00'),
(4, 'CONSUMERS', 'Hema\'s consumer brands products available', 'uploads/services/s4.png', '2019-10-25 07:18:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(60) NOT NULL,
  `image` varchar(60) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `position`, `image`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Bikram Pandey', 'Hon. Former Minister And Chairperson Kalika Gr', 'uploads/testimonial/1.png', 'Wonderful Support!', 'Mr. Tara Bahadur Kunwar is very successful in his professional life. He has played a very crucial role in the Nepalese Heavy Equipment sector. He is the Founder Chairperson of Nepal Heavy Equipment Federation. He started from nowhere and today he stands as one of the most successful people in the Heavy Equipment Sector. He  is running well with imported GP Lubricants, USB Breakers, ITR Lubricants and Spare Parts as well as other business transactions. Itâ€™s a reflection of the struggle and dedication you have shown. Congratulations and wish you luck for future.', '2019-07-20 05:43:53', '0000-00-00 00:00:00'),
(2, 'Jayaram Lamichhane', 'Chairperson Swachhanda Nirman Sewa Pvt. Ltd.', 'uploads/testimonial/3.png', 'Awesome Services!', 'GP Lubricant from Malaysia available at Hajurlai Namaste maintains the number one brand in the Nepalese Market.  Also, the Dubai Imported ITR Parts satisfies me really well. After using the GP Lubricants my machines consume less fuel, the hydraulic system of the engine lasts really long and our machines have become very strong and secured. For all the lasting equipments and reliable spare parts, request all of my friends to use authorised parts and lubricants from Hajurlai Namaste TradeLink. Also, my wishes to the Hajurlai Namaste TradeLink family !', '2019-07-20 05:43:30', '0000-00-00 00:00:00'),
(3, 'Gelje Sherpa', 'MD Golden Goods Sherpa Construction Pvt. Ltd.', 'uploads/testimonial/2.png', 'Great & Talented Team!', 'SInce long Iâ€™ve been using the ITR original parts and Lubricants from Hajurlai Namaste. The ITR Parts from Hajurlai Namaste makes sure that I donâ€™t have to pour money down the drain. ITR Parts as well as the USB TIger Brand Korean Breaker works really well in the rural places of Bhojpur. I am really satisfied. I assure you that we shall have a good business relations in the future. Best Wishes!', '2019-07-20 05:44:50', '0000-00-00 00:00:00'),
(4, 'Ramesh Sharma', 'Chairperson Sharma and Company Pvt. Ltd.', 'uploads/testimonial/4.png', 'Awesome Services!', 'Out of all Lubricants available in the Market, my only choice and the most qualitative Lubricant is GP Lubricants available in the Hajurlai Namaste TradeLink. Iâ€™ve been using GP Lubricants for four years and it hasnâ€™t disappointed me at all. My machines are blessed! I owe Hajurlai Namaste for the excellent services it has been providing and I wish to collaborate in the future. Good Luck!', '2019-07-20 05:46:41', '0000-00-00 00:00:00'),
(5, 'Suraj Shrestha', 'MD  Special Heavy Equipment Works', 'uploads/testimonial/5.png', 'Great & Talented Team!', 'Hajurlai Namste is the only shop where we can find authenic and qualitative items. Iâ€™ve been buying and selling the genuine ITR Parts and American Technology implemented with MAS Formula GP Lubricant. GP Lubricant is the best Lubricant available in the Nepalese market. I am very satisfied with the product.', '2019-07-20 05:45:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `isadmin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `isadmin`, `created_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 1, '2019-07-21 06:22:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
