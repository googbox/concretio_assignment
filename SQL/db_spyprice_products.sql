-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2017 at 07:02 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spyprice_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_description` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_brand` varchar(50) NOT NULL,
  `product_image` text NOT NULL,
  `product_rating` tinyint(4) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `price_currency` varchar(10) NOT NULL DEFAULT '£'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `product_description`, `product_price`, `product_category`, `product_brand`, `product_image`, `product_rating`, `created_on`, `updated_on`, `status`, `price_currency`) VALUES
(1, 'Canon EOS 100D', 'The Apple Watch is the most personal product offered by Apple to date, and it is designed to be worn during all your daily activities, from morning workouts to nights out. It boasts a mirror...', 694, 'Digital Cameras', 'Canon', 'https://www.spyprice.co.uk/cache/Canon-EOS-100D-175x175.jpg', 5, '2017-03-26 08:21:03', '2017-03-26 08:21:03', 1, '£'),
(2, 'Blackmagic Cinema Camera EF Fit', 'The Blackmagic Cinema Camera for film makers provides a timeless beauty of feature film quality to your production work. At the heart of the camera is a 2.5K image sensor with 13 stops of dynamic range and it supports recording for 12-bit RAW DNG files, as well as ProRes and DNxHD formats to built-in removable SSD drives (2.5" Solid State Disk not included). The camera is compatible with a wide range of Canon EF lenses and features LCD touchscreen monitoring, plus metadata entry.', 198, 'Digital Cameras', 'Blackmagic', 'http://images.productserve.com/preview/9/6249/09/55/3720635509.jpg', 3, '2017-03-26 08:21:03', '2017-03-26 08:21:03', 1, '£'),
(3, 'ACTIVEON CX Gold GCA10W Action Camcorder Gold Gold', 'Top features: - Record movies in Full HD 1080p quality at 60 fps - Make movies anywhere with a waterproof and dustproof housing - Capture high quality 16-megapixel photos - Connect to a variety of accessories using a universal screw - Record video from your phone with the ACTIVEON app Record movies in Full HD 1080p quality at 60 fps Make action videos in stunning Full HD quality at 60 frames per second for the smoothest possible footage. The camcorder\'s ultra-portable size means you can record wherever the action takes you. Waterproof and dustproof for versatile recording A dustproof and waterproof...', 128, 'Camcorders', 'Activeon', 'https://www.spyprice.co.uk/cache/Panasonic-HCW580-175x175.jpg', 5, '2017-03-26 08:24:52', '2017-03-26 08:24:52', 1, ' £'),
(4, 'Drift Ghost S Action Camcorder Black Black', 'Two times as effective as its precursor, the Drift Ghost-S Action Camcorder is not compound yet spontaneous and features extended and an effective CMOS sensor -lasting battery life to fully capture films in Fullhd that is excellent. High-spec Wherever you\'re, catch 12-megapixel still pictures along with unbelievable Fullhd movies. The decision is separately variable and will be expanded up-to 1080p having a 60fps frame-rate, for crystal Full-HD video that is clear. You may also blend movie and photography methods and get fantastic large-decision photos whilst saving. Obvious watch all of your photographs', 250, 'Camcorders', 'Drift Innovation', 'https://www.spyprice.co.uk/cache/Drift-Ghost-S-Action-Camcorder-Black-Black-175x175.jpg', 4, '2017-03-26 08:24:52', '2017-03-26 08:24:52', 1, '£'),
(5, 'Samsung 55UH770V', 'Access a wide variety of streaming content with the 4th generation 64GB Apple TV.With on-board', 179, 'Televisions', 'Samsung', 'https://www.spyprice.co.uk/cache/LG-55UH770V-175x175.jpg', 4, '2017-03-26 08:27:49', '2017-03-26 08:27:49', 1, '£'),
(6, 'Samsung UE55KU6000', '', 139, 'Televisions', 'Samsung', 'https://www.spyprice.co.uk/cache/Samsung-UE55KU6000-175x175.jpg', 5, '2017-03-26 08:27:49', '2017-03-26 08:27:49', 1, '£'),
(7, 'Panasonic DMRBWT850EB', 'This Freeview Player Compatible BD Recorder will let you enjoy a wide range of content. With TV anywhere, you will be able to watch and record programmes at home or whilst your away. In addition a host of image enhancing functions will include 4k Upscaling and 4k Networking. This Blu-ray/DVD Recorder will allow you to scroll back through the TV guide for a whole 7 day catch up. It also has an easy setting feature for all your favourite series', 439, 'Set Top Boxes', 'Panasonic', 'https://www.spyprice.co.uk/cache/Panasonic-DMRBWT850EB-175x175.jpg', 3, '2017-03-26 08:31:12', '2017-03-26 08:31:12', 1, '£'),
(8, 'Tomtom Start 25 5 Sat Nav with UK ROI Western Europe Maps', 'Navigation With the 5” touchscreen of the Start 25 present it really is no problem finding your path to N From The. Because of Sophisticated Street Assistance you could obviously see-the street that is appropriate while practical 3D photos make certain you to get at junctions that are hard \'ll never miss your turning. Offering Lifetime Maps of Western Europe, ROI and the UK you will often be after the newest guide - without fretting about highways or new enhancements. You\'re able to get at the least four road changes annually, which means you\'ll never eliminate the right path. What\'re Lifetime', 90, 'GPS Sat Navs', 'TomTom', 'https://www.spyprice.co.uk/cache/Tomtom-Start-25-5-Sat-Nav-with-UK-ROI-Western-Europe-Maps-175x175.jpg', 5, '2017-03-26 08:31:12', '2017-03-26 08:31:12', 1, '£'),
(9, 'Panasonic HTB690EBK', 'Bring incredible sound quality into your living room with the Panasonic SC-HTB690EBK 3.1 Wireless Sound Bar including a wireless subwoofer. Powerful speakers The SC-HTB690EBK is engineered with three built-in speakers delivering multi-directional audio across the left, right and centre channels, for cinema-style surround sound. With a down-firing wireless subwoofer, you can further enhance the surround sound effect by placing the subwoofer anywhere in the room. Without the need for messy cables, the wireless subwoofer seamlessly blends in. Wireless audio streaming Thanks to wireless connection.', 229, 'SoundBars', 'Panasonic', 'https://www.spyprice.co.uk/cache/Panasonic-HTB690EBK-175x175.jpg', 2, '2017-03-26 08:35:07', '2017-03-26 08:35:07', 1, '£'),
(10, 'Apple iPad Mini With Retina Display A7 chip 32GB Flash 1GB RAM 79quot Retina Touch WI Fi ', 'Apple’s iPad mini with Retina display offers the iPad expertise that is total right into a deal that is smaller, brighter. With amazing requirements that produce a liquid and fast expertise with looks that are unbelievable and an all-morning battery life, one single hand is nonetheless fit simply in by iPad mini with Retina display. Little Question iPad mini with Retina display is not thick, light and correctly measured to match inside one\'s hand\'s palm. It weighs an incredible 331g and steps merely 7.5mm thorough, creating it put on a case when you’re not deploying it or completely healthy', 220, 'Tablets', 'Apple', 'https://www.spyprice.co.uk/cache/Apple-iPad-Mini-With-Retina-Display-A7-chip-32GB-Flash-1GB-RAM-79quot-Retina-Touch-WI-Fi-Bluetooth-Apple-iOS-7-Silver-175x175.jpg', 3, '2017-03-26 08:35:07', '2017-03-26 08:35:07', 1, '£'),
(11, 'Canon 22mm f2 STM Pancake M Mount Lens', 'The Apple Watch is the most personal product offered by Apple to date, and it is designed to be worn during all your daily activities, from morning workouts to nights out. It boasts a mirror...', 794, 'Digital Cameras', 'Canon', 'https://www.spyprice.co.uk/cache/Canon-22mm-f2-STM-Pancake-M-Mount-Lens-175x175.jpg', 5, '2017-03-26 08:21:03', '2017-03-26 10:57:04', 1, '£'),
(12, 'Basic Cinema Camera EF Fit', 'The Blackmagic Cinema Camera for film makers provides a timeless beauty of feature film quality to your production work. At the heart of the camera is a 2.5K image sensor with 13 stops of dynamic range and it supports recording for 12-bit RAW DNG files, as well as ProRes and DNxHD formats to built-in removable SSD drives (2.5" Solid State Disk not included). The camera is compatible with a wide range of Canon EF lenses and features LCD touchscreen monitoring, plus metadata entry.', 121, 'Digital Cameras', 'Blackmagic', 'https://www.spyprice.co.uk/cache/Canon-750D-175x175.jpg', 3, '2017-03-26 08:21:03', '2017-03-26 10:57:56', 1, '£'),
(13, 'New Version Blackmagic Cinema Camera EF Fit ', 'The Blackmagic Cinema Camera for film makers provides a timeless beauty of feature film quality to your production work. At the heart of the camera is a 2.5K image sensor with 13 stops of dynamic range and it supports recording for 12-bit RAW DNG files, as well as ProRes and DNxHD formats to built-in removable SSD drives (2.5" Solid State Disk not included). The camera is compatible with a wide range of Canon EF lenses and features LCD touchscreen monitoring, plus metadata entry.', 221, 'Digital Cameras', 'Blackmagic', 'https://www.spyprice.co.uk/cache/Nikon-Coolpix-A900-Digital-Camera-Silver-175x175.jpg', 3, '2017-03-26 08:21:03', '2017-03-26 10:58:57', 1, '£');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spec_type`
--

CREATE TABLE `tbl_spec_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_spec_type`
--

INSERT INTO `tbl_spec_type` (`type_id`, `type_name`, `created_on`, `updated_on`) VALUES
(1, 'Features', '2017-03-27 09:11:49', '2017-03-27 09:11:49'),
(2, 'Stores', '2017-03-27 09:11:57', '2017-03-27 09:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spec_type_values`
--

CREATE TABLE `tbl_spec_type_values` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `speci_type` int(11) NOT NULL,
  `speci_value` varchar(300) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_spec_type_values`
--

INSERT INTO `tbl_spec_type_values` (`id`, `product_id`, `speci_type`, `speci_value`, `created_on`, `updated_on`) VALUES
(1, 1, 1, '3D', '2017-03-27 09:12:48', '2017-03-27 09:12:48'),
(2, 1, 1, 'COMPACT', '2017-03-27 09:12:48', '2017-03-27 09:12:48'),
(3, 1, 2, 'Amazon', '2017-03-27 09:13:24', '2017-03-27 09:13:24'),
(4, 2, 1, '3D', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(5, 2, 1, 'COMPACT', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(6, 2, 1, 'DSLR', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(7, 2, 1, 'GPS', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(8, 2, 2, 'Amazon', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(9, 2, 2, 'Amazon MarketPlace', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(10, 2, 2, 'Beyond Television', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(11, 3, 1, '3D', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(12, 3, 1, 'DSLR', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(13, 3, 1, 'GPS', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(14, 3, 1, 'WATERPROOF', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(15, 3, 2, 'eGlobal Central', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(16, 3, 2, 'Amazon MarketPlace', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(17, 3, 2, 'BT Shop', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(18, 4, 1, '3D', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(19, 4, 1, 'DSLR', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(20, 4, 1, 'WATERPROOF', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(21, 4, 2, 'Amazon', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(22, 4, 2, 'Amazon MarketPlace', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(23, 4, 2, 'Beyond Television', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(24, 4, 2, 'eGlobal Central', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(25, 5, 1, '3D', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(26, 5, 1, 'DSLR', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(27, 5, 1, 'GPS', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(28, 5, 1, 'WATERPROOF', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(29, 5, 2, 'eGlobal Central', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(30, 5, 2, 'Amazon MarketPlace', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(31, 5, 2, 'Beyond Television', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(32, 6, 1, 'COMPACT', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(33, 6, 1, 'GPS', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(34, 6, 2, 'Amazon MarketPlace', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(35, 6, 2, 'Electrical Experience', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(36, 6, 2, 'eGlobal Central', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(37, 7, 1, 'COMPACT', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(38, 7, 1, 'DSLR', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(39, 7, 1, 'WATERPROOF', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(40, 7, 2, 'Amazon MarketPlace', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(41, 7, 2, 'Beyond Television', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(42, 7, 2, 'BT Shop', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(43, 7, 2, 'Electrical Experience', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(44, 8, 1, 'COMPACT', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(45, 8, 1, 'WATERPROOF', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(46, 8, 2, 'Amazon', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(47, 8, 2, 'Amazon MarketPlace', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(48, 8, 2, 'Electrical Experience', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(49, 8, 2, 'eGlobal Central', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(50, 9, 1, '3D', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(51, 9, 1, 'COMPACT', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(52, 9, 1, 'DSLR', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(53, 9, 1, 'GPS', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(54, 9, 2, 'Amazon', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(55, 9, 2, 'Amazon MarketPlace', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(56, 9, 2, 'Beyond Television', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(57, 10, 1, 'COMPACT', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(58, 10, 1, 'DSLR', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(59, 10, 1, 'GPS', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(60, 10, 1, 'WATERPROOF', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(61, 10, 1, '3D', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(62, 10, 2, 'Amazon MarketPlace', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(63, 10, 2, 'eGlobal Central', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(64, 11, 1, '3D', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(65, 11, 1, 'COMPACT', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(66, 11, 1, 'DSLR', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(67, 11, 1, 'GPS', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(68, 11, 2, 'Amazon MarketPlace', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(69, 11, 2, 'BT Shop', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(70, 12, 1, '3D', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(71, 12, 1, 'COMPACT', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(72, 12, 1, 'DSLR', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(73, 12, 1, 'GPS', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(74, 12, 2, 'eGlobal Central', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(75, 12, 2, 'Amazon MarketPlace', '2017-03-27 09:30:46', '2017-03-27 09:30:46'),
(76, 12, 2, 'Beyond Television', '2017-03-27 09:30:46', '2017-03-27 09:30:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);
ALTER TABLE `tbl_products` ADD FULLTEXT KEY `searchindex` (`product_name`);
ALTER TABLE `tbl_products` ADD FULLTEXT KEY `searchindex1` (`product_name`);
ALTER TABLE `tbl_products` ADD FULLTEXT KEY `searchindex2` (`product_description`);
ALTER TABLE `tbl_products` ADD FULLTEXT KEY `searchindex3` (`product_category`);
ALTER TABLE `tbl_products` ADD FULLTEXT KEY `searchindex4` (`product_brand`);

--
-- Indexes for table `tbl_spec_type`
--
ALTER TABLE `tbl_spec_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tbl_spec_type_values`
--
ALTER TABLE `tbl_spec_type_values`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `tbl_spec_type_values` ADD FULLTEXT KEY `searchindex5` (`speci_value`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_spec_type`
--
ALTER TABLE `tbl_spec_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_spec_type_values`
--
ALTER TABLE `tbl_spec_type_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
