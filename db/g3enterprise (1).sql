-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 06:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g3enterprise`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` double(12,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `item_name`, `item_price`, `quantity`) VALUES
(8, 3, 'Earphone', 20.00, 1),
(9, 5, 'Charger', 30.00, 1),
(10, 4, 'Memory card', 50.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(12,2) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `item_name`, `quantity`, `price`, `date`) VALUES
(1, 'Earphone', 3, 60.00, '2023-09-12 12:54:09'),
(2, 'Earphone', 1, 20.00, '2023-09-12 15:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `description`, `price`) VALUES
(1, 'iphone14.jpg', 'iphone 14', 'The iPhone 14 is a good value if you\'re looking for a solid flagship phone, even though the new iPhone 15 is on the way. You get an improved camera system that delivers better low-light performance, an Action mode for super steady video and handy safety features like crash detection and Emergency SOS via satellite.\r\n\r\nSome may prefer the bigger iPhone 14 Plus if you want a larger screen and longer battery life. And the iPhone 14 Pro or iPhone 14 Pro Max offer more exciting features like an always-on display, Dynamic Island, 120Hz refresh rate and telephoto zoom. \r\n\r\nThe iPhone 14 is certainly among the best iPhones and belongs on our best phone list. My iPhone 14 review breaks down all the pros and cons so you can decide if this is the right handset for your needs.', 1200000.00),
(2, 'iphonex.jpg', 'Iphone x', 'The iPhone X, pronounced \"iPhone 10,\" was introduced at Apple\'s September 2017 event as a classic \"One more thing...\" addition to the iPhone 8 and 8 Plus product lineup. The iPhone X has since been replaced by the iPhone XR, iPhone XS, and iPhone XS Max, and Apple has discontinued the device to focus on the newer iPhones.\r\n\r\nApple\'s aim with the iPhone X was to create an iPhone that\'s all display, blurring the line between physical object and experience. The 5.8-inch front screen melts into a highly polished curved-edge stainless steel band encircling a durable all-glass body available in two pearlescent finishes: Space Gray and Silver. Both feature a black front panel.', 220000.00),
(3, 'earphone.jpg', 'Earphone', 'earphone, small loudspeaker held or worn close to the listener’s ear or within the outer ear. Common forms include the hand-held telephone receiver; the headphone, in which one or two earphones are held in place by a band worn over the head; and the plug earphone, which is inserted in the outer opening of the ear. The conversion of electrical to acoustical signals is effected by any of the devices used in larger loudspeakers; the highest fidelity is provided by the so-called dynamic earphone, which ordinarily is made part of a headphone and equipped with a cushion to isolate the ears from other sound sources.', 20.00),
(4, 'memorycard.jpg', 'Memory card', 'The Sandisk 8GB Class 4 microSD card is suitable for phones, tablets, and other devices. Easy, affordable way to expand your mobile device’s onboard memory. High storage capacity for storing digital content such as photos, music, videos (even in HD), and more. Shockproof, x-ray proof, temperature proof and waterproof. The SanDisk microSD / microSDHC Memory Card is backed by the manufacturer’s warranty. SanDisk microSD / microSDHC mobile memory cards directly plug into a microSDHC card slot, providing immediate performance and expansion up to 8GB storage capacity. Do not compromise on quality when it comes to protecting your precious data. Down to every component, SanDisk SD and SDHC memory cards are designed, built and proven to come with all life’s little bumps and turns – so you can enjoy life on the go.', 50.00),
(5, 'charger.jpg', 'Charger', 'The g3 charger kit 2A fast charger  offers 2A high-speed and stable charging. The included cable charges your phones and tablets at full speed. The true family charger – Consolidate all your USB wall charging needs. Supports all phones. tablets including iPad and iPhones, MP3 players, other USB chargeable devices. Perhaps this is a common charger for your entire family.', 30.00),
(6, 'powerbank.jpg', 'Power bank', 'Power banks are commonplace and with our increasing use of battery powered equipment: everything from mobile phones to battery powered headphones, portable speakers, MP3 players can be charged via a power bank. They are effectively a portable charger. All they need is a USB charging interface.\r\n\r\nPower banks come in a variety of shapes and sizes and to suit many different people and their needs.In recent years, the use of power banks has risen significantly as they provide a very convenient and easy method of charging smartphones and other devices when away from mains power. Wireless charging power banks have also been introduced for those devices that can be charged wirelessly.', 50.00),
(7, 'infinix.jpg', 'Infinix', 'Infinix is a Hong Kong-based smartphone maker. The company claims to have R&D centres sprawling between France and Korea, with manufacturing centres in China. The company makes smartphones that run the Android operating system. It was founded in 2013. The firm claims to have local subsidiaries in over 60 countries. Infinix\'s latest mobile launch is the Zero 30 5G. The mobile was launched in 2nd September 2023. The phone comes with a 6.78-inch touchscreen display with a resolution of 1080 pixels by 2400 pixels. The Infinix Zero 30 5G is powered by octa-core MediaTek Dimensity 8020 processor and it comes with 8GB, 12GB of RAM. The phone packs 256GB of internal storage. As far as the cameras are concerned, the Infinix Zero 30 5G packs a 108-megapixel + 13-megapixel primary camera on the rear and a 50-megapixel front shooter for selfies. The Infinix Zero 30 5G runs Android 13 and is powered by a 5000mAh. It measures 75.03 x 164.51 x 7.90 (height x width x thickness) .', 300000.00),
(8, 'earpod.jpg', 'Earpod', 'You can use EarPods (sold separately) to listen to music and videos and to make calls on iPhone. EarPods feature a microphone, volume buttons, and the center button. Use the center button to answer and end calls, control audio and video playback, and use Siri, even when iPhone is locked.', 20.00),
(9, 'phone1.jpg', 'Samsung', 'Samsung Electronics inspires the world and shapes the future with transformative ideas and technologies. The company is redefining the worlds of TVs, smartphones, wearable devices, tablets, digital appliances, network systems, and memory, system LSI, foundry and LED solutions.\r\n\r\nTo strengthen synergies among the diverse businesses and create differentiated products and services, Samsung operates under two core divisions: DX (Device eXperience), which includes businesses for Visual Display, Digital Appliances, Mobile eXperience, Networks, and Health & Medical Equipment; and DS (Device Solutions), which consists of Memory, System LSI, and Foundry businesses.', 1200000.00),
(10, 'phone pouch.jpg', 'Phone pouch', 'A cell phone case is a highly advantageous protective cover that is specifically engineered to provide optimal safeguarding against any potential damage incurred by mobile devices that may result from a multitude of factors such as accidents or the natural course of wear and tear.', 20.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
