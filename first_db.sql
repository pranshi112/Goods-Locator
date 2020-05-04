-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 10:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `first_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `type` varchar(20) NOT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `name`, `address`, `type`, `lat`, `lng`) VALUES
(1, 'Komal Health Care Pvt Ltd', '103, Leena Heights, Mira Bhayander Rd, Phase 2, Geeta Nagar, Mira Road, Mira Bhayandar,MAHARASHTRA', 'Producer', 19.289690, 72.862770),
(2, 'Komal Health Care Pvt Ltd', '103, Leena Heights, Mira Bhayander Rd, Phase 2, Geeta Nagar, Mira Road, Mira Bhayandar,MAHARASHTRA', 'Producer', 19.289690, 72.862770),
(3, 'MedOne Surgicals (a unit of unidad int.)', 'Muncipal complex Court Road opp Dist Hospital, Santhi Nagar, Sultanpet, Palakkad, Kerala', 'Producer', 10.769863, 76.657326);

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`pwdResetId`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES
(3, 'viditaagrawal77@gmail.com', '21f3ba5236f68257', '$2y$10$Qv0HsCNqqZFNlILuYd4RDej5wrZt0WF3T6JE7Nu8r9LH3DsjLWvce', '1588364818');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_address` varchar(1000) NOT NULL,
  `city` varchar(50) NOT NULL,
  `user_state` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_stock` varchar(1000) NOT NULL,
  `user_contact` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(10000) NOT NULL,
  `user_address` varchar(1000) NOT NULL,
  `city` varchar(100) NOT NULL,
  `user_state` varchar(100) NOT NULL,
  `user_service` varchar(20) NOT NULL,
  `user_item` varchar(100) NOT NULL,
  `user_contact` int(100) NOT NULL,
  `user_stock` varchar(1000) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `user_address`, `city`, `user_state`, `user_service`, `user_item`, `user_contact`, `user_stock`, `username`, `email`, `password`) VALUES
(14, 'Komal Health Care Pvt Ltd', '102,103, Leena Hights, Mira Bhayander Rd, Phase 2, Geeta Nagar, Mira Road, Mira Bhayandar, 401107', '', 'MAHARASHTRA', 'Producer', 'Medical Kit', 804278124, 'Stock available for medical kits is currently 500\r\n\r\nLink will give you all the details\r\nhttp://www.komalhealth.com/', '', '', ''),
(15, 'Suretech Medical Inc', '333, Khurana Compound, IB Patel Rd, Sonawala Industry Estate, Goregaon, Mumbai, Maharashtra 400063', '', 'MAHARASHTRA', 'Retailer', 'Medical Kit', 976991439, 'Stock available for medical kits is currently 45\r\n\r\nLink will give you all the details\r\n\r\nwww.suretechmedical.com', '', '', ''),
(16, 'Healthfirst Medicorp', 'Flat No-02, Gurudev Apartment, behind Ishwar Petrol Pump, Lullanagar, Pune, Maharashtra 411040', '', 'MAHARASHTRA', 'Producer', 'Medical Kit', 738708644, 'Stock available for medical kits is currently 500\r\n\r\nLink will give you all the details\r\nhttp://www.healthfirstmedicorp.in/', '', '', ''),
(17, 'Ashtami Polychem Equipment Manufacturing Company', 'Plot No. D-125, Five Star M.I.D.C., Shendra, Aurangabad 431201,, Shendra MIDC, Industrial Area, Bhandup West, Mumbai, Maharashtra 431007', '', 'MAHARASHTRA', 'Retailer', 'Medical Kit', 942273646, 'Stock available for medical kits is currently 32\r\n\r\n\r\n', '', '', ''),
(18, 'Victory medical stores (Wholesale distribution)', 'Kripa Nagar, Kizhakkekara , Kottarakara, near Marthoma Church, Kottarakkara, Kerala 691506', '', 'KERALA', 'Producer', 'Medical Kit', 980900786, 'stocks are 200.\r\n\r\n\r\nGet The details here\r\nhttp://www.victoryavicot.com/', '', '', ''),
(19, 'MedOne Surgicals (a unit of unidad int.)', 'Muncipal complex Court Road opp Dist Hospital, Santhi Nagar, Sultanpet, Palakkad, Kerala 678001\r\n', '', 'KERALA', 'Retailer', 'Medical Kit', 989591689, 'stocks are 200.\r\n\r\n\r\nGet The details here\r\nmedone-surgicals.business.site', '', '', ''),
(20, 'J.S. Pharma Line', 'Near N.S.S.College, SH 1, Changanassery, Perunna, Kottayam, Kerala 686102\r\n', '', 'KERALA', 'Producer', 'Medical Kit', 944676674, 'Stocks are 312.', '', '', ''),
(21, 'LIMAS Medical Devices & Diagnostics Pvt. Ltd', 'Little Flower Auditorium Complex,Near Assisi Junction, SH 16, Periyar Nagar, Aluva, Kerala 683101', '', 'KERALA', 'Retailer', 'Medical Kit', 484263226, 'Stocks are 35.\r\n\r\nDetails are here\r\nhttp://www.limasindia.com/', '', '', ''),
(22, 'Desco Medical India', '387, Desco House, Chaudhary Charan Singh Marg, Patparganj Industrial Area, Patparganj, New Delhi, Delhi 110092', '', 'DELHI', 'Producer', 'Medical Kit', 989907795, 'Stocks available of specified product are 96.\r\n\r\nAll the details given here\r\nwww.descomedicalindia.com', '', '', ''),
(23, 'Pollen Healthcare', '7/46, Second Floor, Shankar Rd, Block 7, Old Rajinder Nagar, Rajinder Nagar, New Delhi, Delhi 110060', '', 'DELHI', 'Retailer', 'Medical Kit', 971676553, 'Stocks available of specified product are 45\r\n\r\n', '', '', ''),
(24, 'MultiCare Surgical Products Corporation', 'Tower No. 944 Basment, Arjun Nagar, Nehru Road, Opp, South Extension, Arjun Nagar, Kotla Mubarakpur, Defence Colony, New Delhi, Delhi 110003\r\n', '', 'DELHI', 'Producer', 'Medical Kit', 963248199, 'Stocks available of specified product are 430.\r\n\r\nAll the details given here\r\nhttp://www.multicaresurgical.com/', '', '', ''),
(25, 'Original Medical Equipment Company Pvt. Ltd.', '579/C , Ground Floor, Laxmi Nagar, Block S1, Nanakpura, Shakarpur, New Delhi, Delhi 110092', '', 'DELHI', 'Retailer', 'Medical Kit', 881058276, 'Stocks available of specified product are 72.\r\n\r\nAll the details given here\r\nhttp://omlsurgicalproducts.com/', '', '', ''),
(26, 'Oxytech Surgical', '41/3161, St Vincent Rd, Ernakulam North, Kacheripady, Kochi, Kerala 682018', '', 'KERALA', 'Producer', 'Mask', 484239223, 'Stocks are 480\r\n\r\nRest of the details given here\r\nhttp://www.oxytechsurgical.com/', '', '', ''),
(27, 'HLL Lifecare Ltd.', 'Mahilamandiram Road, near Chengalloor Junction, Cherukara Gardens, Poojapura, Thiruvananthapuram, Kerala 695012', '', 'KERALA', 'Retailer', 'Mask', 471235494, 'Stocks are 94\r\n\r\nRest of the details given here\r\nhttp://www.lifecarehll.com/', '', '', ''),
(28, 'Nuclear Surgicals', '6/696, Behind Hotel Paragon, Bank, Cross Road, Kozhikode, Kerala 673001', '', 'KERALA', 'Producer', 'Mask', 903700600, 'Stocks are 367.\r\n\r\nRest of the details given here\r\nhttp://www.nuclearsurgicals.com/', '', '', ''),
(29, 'FACE MASK MANUFACTURER', 'YOUNG STAR MITRA MANDAL ,Near HANUMAN MANDIR,VISHNU NAGAR SOCIETY L U, Laxman Omaji Gadkari Marg, Vishnu Nagar, Chembur, Mumbai, Maharashtra 400074', '', 'MAHARASHTRA', 'Retailer', 'Mask', 965565576, 'Stocks for now are 50\r\n\r\nDetails here:\r\nhttps://ommanufacturingworks.business.site/', '', '', ''),
(30, 'VENUS Safety & Health Pvt. Ltd.', 'L-75/76, Tondre Village, MIDC, Taloja, Navi Mumbai, Maharashtra 410208', '', 'MAHARASHTRA', 'Producer', 'Mask', 180022264, 'Stocks for now are 3000.\r\n\r\nDetails here:\r\nhttp://venusohs.com/', '', '', ''),
(31, 'PCI Analytics Factory Mankoli\r\n', '\r\nMankoli Rd, Dhamankar Naka, Dapode, Bhiwandi, Maharashtra 421302\r\n', '', 'MAHARASHTRA', 'Retailer', 'Mask', 252266188, 'Stocks for now are 50\r\n\r\nDetails here:\r\nwww.pcianalytics.in', '', '', ''),
(32, 'Kwalitex Healthcare Pvt. Ltd. -Disposable Bouffant, Surgeon, Surgical Cap, Face Mask Manufacturer', 'Krishna Estate, A Wing, 1st Floor, near Khandelwal Bus Stop, Upvan, Thane West, Thane, Maharashtra 400606', '', 'MAHARASHTRA', 'Producer', 'Mask', 874764784, 'Stocks for now are 50\r\n\r\nDetails here:\r\nhttps://www.kwalitexohs.com/', '', '', ''),
(33, 'Kay & Company', 'Netaji Subhash Marg, Daryaganj, New Delhi, Delhi 110002', '', 'DELHI', 'Producer', 'Mask', 114319560, 'Stocks: 700\r\n\r\nGet the details here:\r\nhttp://www.kaycoindia.com/', '', '', ''),
(34, 'Shashi India Private Limited - Safety Masks Manufacturer & Supplier & Glitter Power Manufacturer', 'E-208, Flatted Factory Complex, Okhla Phase III, Okhla Industrial Area, New Delhi, Delhi 110020', '', 'DELHI', 'Retailer', 'Mask', 804876248, 'Stocks: 68\r\n\r\nGet the details here:\r\nhttp://www.shashiindia.co.in/', '', '', ''),
(35, 'JSR Amenities Private Limited', 'A-2/22,first Floor, Pocket 2, Sector 11, Rohini, New Delhi, Delhi 110085\r\n', '', 'DELHI', 'Producer', 'Mask', 999691217, 'Stocks: 5000\r\n\r\nGet the details here:\r\nhttps://www.jsramenities.com/', '', '', ''),
(36, 'Florance Surgical Masks Industries', '1892/13,1st floor, Hari Ram Market, Bhagirath Palace, Chhippy Wada, Chandni Chowk, New Delhi, Delhi 110006', '', 'DELHI', 'Retailer', 'Mask', 981109698, 'Stocks are 40 for now.', '', '', ''),
(37, 'NashikGrocery', 'Shanti Nagar, Lekha Nagar, Nashik, Maharashtra 422009', '', 'MAHARASHTRA', 'Producer', 'Groceries', 967537659, 'Stock details are available here:\r\nhttp://nashikgrocery.com/', '', '', ''),
(38, 'Nagrik Super Market', 'Hanuman Chowk, Airoli, Central Road N, Vishanu Nagar, Subhash Nagar, Dighe, Pandhari Nagar, Vishanu Nagar, Subhash Nagar, Dighe, Navi Mumbai, Maharashtra 400708', '', 'MAHARASHTRA', 'Retailer', 'Groceries', 976972234, 'Details of stock given here:\r\nhttp://www.dmart.in/', '', '', ''),
(39, 'Dorabjee\'s Camp', '1-B, Moledina Rd, Camp, Pune, Maharashtra 411001', '', 'MAHARASHTRA', 'Producer', 'Groceries', 204011000, 'Stock details are given here:\r\n\r\nhttp://dorabjee.com/', '', '', ''),
(40, 'Pariwar Super Market', 'Nagar, Old, near Gopi-Kishan nagar, Gopikishan Nagar, Mondha, Jalna, Maharashtra 431203', '', 'MAHARASHTRA', 'Retailer', 'Groceries', 248223176, 'Stock details are given here:\r\n\r\nhttp://www.pariwarsupermarket.in/', '', '', ''),
(41, 'Kiryana World', 'Basement, Amba Tower, DC Chowk, Rajapur, Sector 9, Rohini, New Delhi, Delhi 110085', '', 'DELHI', 'Producer', 'Groceries', 114588458, 'Stock details are available here:\r\nhttp://www.kiryanaworld.com/', '', '', ''),
(42, 'Needs Basket Super Market', 'NB Mall, Mukundpur Extn-II, Metro Stn, Outer Ring Rd, Block A, Majlis Park, Mukundpur, Delhi, 110042', '', 'DELHI', 'Retailer', 'Groceries', 974878763, 'Stock details are given here:\r\nhttp://www.needsbasket.com/', '', '', ''),
(43, 'Daily Delite', 'Lower Ground Floor, Pinnacle Mall, Sector 10, Dwarka, Sector 10 Dwarka, Dwarka, Delhi, 110075', '', 'DELHI', 'Producer', 'Groceries', 813059241, 'Stock details are available here:\r\nhttps://brownbag.in/store/delhi-DailyDelite', '', '', ''),
(44, 'More Supermarket', 'J-E-12, behind Main Mkt, Gupta Colony, Panchsheel Extension, Malviya Nagar, New Delhi, Delhi 110017', '', 'DELHI', 'Retailer', 'Groceries', 954005551, 'Stock details are available here:\r\nhttp://www.morestore.com/', '', '', ''),
(45, 'Maxfresh Supermarket Palarivattom Kochi', 'Ground Floor, Near Palarivattom Flyover, Alichuvadu Palarivattom Kakkanad, Route, Kochi, Palarivattom, Kochi, Kerala 682024', '', 'KERALA', 'Producer', 'Groceries', 484485233, 'Stock details available here:\r\nhttps://maxfresh-supermarket-palarivattom-cochin.business.site/?utm_source=gmb&utm_medium=referral', '', '', ''),
(46, 'Kada.in Online Supermarket, Thiruvananthpuram', 'Peroorkada-Mannammoola Road Near Devi Nagar Entrance Peroorkada, Mannammoola, Thiruvananthapuram, Kerala 695005', '', 'KERALA', 'Retailer', 'Groceries', 904862888, 'Stock details are available here:\r\nhttp://www.kada.in/', '', '', ''),
(47, 'Worth2Deal', '7/330 A,Shanti Nagar,Kokkur,Valayamkulam,, Malappuram, Kerala 679591', '', 'KERALA', 'Producer', 'Groceries', 984629424, 'Stock details are available here:\r\nhttps://www.amazon.in/gp/aw/s/ref=nb_sb_noss?k=Worth2Deal', '', '', ''),
(48, 'Disney\'s Grocery Shop', 'SH50, Erumapetty, Kerala 680584', '', 'KERALA', 'Retailer', 'Groceries', 488526326, 'Stock details are available here:\r\n\r\nhttp://www.disneygrocery.in/', '', '', ''),
(54, 'cs stores', 'avas vikas', 'aligarh', 'UTTAR PRADESH', 'retailer', 'medical kit', 2147483647, '300', 'vidita-bit', 'viditaagrawal77@gmail.com', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
