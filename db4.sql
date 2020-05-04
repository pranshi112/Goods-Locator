-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 12:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `strength` varchar(256) NOT NULL,
  `organization` varchar(1000) NOT NULL,
  `registered` varchar(100) NOT NULL,
  `user_address` varchar(1000) NOT NULL,
  `user_city` varchar(100) NOT NULL,
  `user_state` varchar(100) NOT NULL,
  `user_contact` int(100) NOT NULL,
  `people` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `strength`, `organization`, `registered`, `user_address`, `user_city`, `user_state`, `user_contact`, `people`) VALUES
(7, 'Group', 'Uday Foundation', 'registered', '113a/1, Sri Aurobindo Marg, Adchini, Adhchini Village, Adchini, New Delhi, Delhi 110017\r\n\r\n', 'Delhi', 'DELHI', 112656333, 'number of peoplle currently volunteering:20'),
(8, 'Organisation', 'Lakshyam NGO Delhi (Head Office)', 'registered', 'B 1/27 Ground Floor, Hauz Khaz, Hauz Khas Market, Block G, Hauz Khas, New Delhi, Delhi 110016', 'Delhi', 'DELHI', 954079002, 'number of people currently volunteering:40'),
(9, 'Group', 'United Delhi People (NGO)', 'not registered', 'West Kailash Puri, Kailashpuri West, Manglapuri, New Delhi, Delhi 110045', 'Delhi', 'DELHI', 987569403, 'number of people who are volunteering: 10'),
(10, 'Organisation', 'Those In Need', 'registered', '3rd Floor 3391, Arya Pura, Subzi Mandi, Delhi, 110007', 'Delhi', 'DELHI', 971115834, 'number of people who are volunteering:25'),
(11, 'Organisation', 'Indian Council Of Social Welfare', 'registered', '535, Shivaji Road, Shukrawar Peth, Shukrawar Peth, Pisal Path, Shukrawar Peth, Pune, Maharashtra 411002', 'Pune', 'MAHARASHTRA', 224433046, 'number of people who are volunteering:40'),
(12, 'Group', 'Madat Foundation', 'mot registered', 'Office no. 4, Radiant Spot, 174, MG Road, Agarwal Colony, Camp, Pune, Maharashtra 411001', 'Pune', 'MAHARASHTRA', 976494722, 'number of people who are volunteering:15'),
(13, 'Organisation', 'PARIVARTAN SAMUH BAHU-UDDESHIY SANSTHA', 'not registered', 'MADHAV SMRUTI ,287, SOUTH KASBA, DATTA CHOWK, SOLAPUR, Shinde Wada, Budhavar Peth, Solapur, Maharashtra 413007', 'Solapur', 'MAHARASHTRA', 988973345, 'number of people who are volunteering:60'),
(14, 'Group', 'Indira Mahila Jivan Vikas Grihnirman Shan', 'registered', 'ndira Shabagrih Indira Nagar, Bijapur Road, Bijapur Road, Sundram nagar, Ashok Nagar, Solapur, Maharashtra 413004', 'Solapur', 'MAHARASHTRA', 996734234, 'number of people who are volunteering:15'),
(15, 'Group', 'The People Welfare Cooperative Society', 'not registered', 'T. 1510, Puthan Rd, Pettah, Thiruvananthapuram, Kerala 695024', 'Thiruvananthapuram', 'KERELA', 887693200, 'number of people who are volunteering:25'),
(16, 'Organisation', 'Vivekananda Nagar Welfare Assosiation', 'registered', 'VN20, Vivekanand Nagar, Kesavadasapuram, Thiruvananthapuram, Kerala 695004\r\n', 'Thiruvananthapuram', 'KERELA', 787965321, 'number of people who are volunteering:50'),
(17, 'Group', 'Ernakulam Karayogam', 'not registered', 'T D M Hall Complex, Durbar Hall Road, Pallimukku, Kochi, Kerala 682016', 'Kochi', 'KERELA', 889799270, 'number of people volunteering:20'),
(18, 'Organisation', 'Kerala NGO Association', 'registered', 'Banerji Rd, Deshabhimani Junction, Kaloor, Kochi, Kerala 682017', 'Kochi', 'KERELA', 778767900, 'number of people who are volunteering:100+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
