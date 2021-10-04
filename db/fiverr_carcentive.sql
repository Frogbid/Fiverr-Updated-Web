-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 09:39 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiverr_carcentive`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_card`
--

CREATE TABLE `home_card` (
  `id` int(11) NOT NULL,
  `card_title_1` varchar(500) NOT NULL,
  `card_description_1` varchar(1000) NOT NULL,
  `card_title_2` varchar(500) NOT NULL,
  `card_description_2` varchar(1000) NOT NULL,
  `card_title_3` varchar(500) NOT NULL,
  `card_description_3` varchar(1000) NOT NULL,
  `card_title_4` varchar(500) NOT NULL,
  `card_description_4` varchar(1000) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_card`
--

INSERT INTO `home_card` (`id`, `card_title_1`, `card_description_1`, `card_title_2`, `card_description_2`, `card_title_3`, `card_description_3`, `card_title_4`, `card_description_4`, `updated_at`) VALUES
(1, 'Access to Wholesale Pricing', 'CarCentive can help maximize your savings and get you the best price on your next new or pre-owned vehicle. Our sales and leasing services beat other new car brokers and dealer prices. We also assist with refinancing options as well!', 'PRE-PURCHASE DOCUMENTATION REVIEW', 'We know how to protect you from all the common car dealership tricks, expose hidden fees and get you your dream car at the best rates possible. At CarCentive, we can also review your pending purchase agreements to see if we can get you a better deal for your car.', 'EXTENSIVE EXPERIENCE', 'With almost 20 years of experience in the automotive industry, we are able to shield our customers from hidden costs to get you in the car you need at the price that suits your budget.\r\n', 'SERVING CUSTOMERS NATIONWIDE', 'Clients in New Jersey, New York and Pennsylvania are not the only ones who benefit from our services. Car buyers throughout the country can experience our fantastic car buying & auto leasing services. Contact us today to learn how CarCentive can save you money anywhere in the country.', '2021-10-03 10:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `home_clients`
--

CREATE TABLE `home_clients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_clients`
--

INSERT INTO `home_clients` (`id`, `name`, `image`, `updated_at`) VALUES
(1, 'landrover', 'clients/landrover.png', '2021-10-04 09:51:48'),
(2, 'mazda', 'clients/mazda.png', '2021-10-04 09:52:14'),
(3, 'ferrari', 'clients/ferrari.png', '2021-10-04 09:52:20'),
(4, 'acura', 'clients/acura.jpg', '2021-10-04 09:54:17'),
(5, 'toyota', 'clients/toyota.png', '2021-10-04 09:52:32'),
(6, 'mercedes', 'clients/mercedes.png', '2021-10-04 09:52:40'),
(7, 'chevrolet', 'clients/chevrolet.png', '2021-10-04 09:52:46'),
(8, 'nissan', 'clients/nissan.png', '2021-10-04 09:52:52'),
(9, 'audi', 'clients/audi.png', '2021-10-04 09:52:58'),
(10, 'lamborghini', 'clients/lamborghini.png', '2021-10-04 09:53:03'),
(11, 'maserati', 'clients/maserati.png', '2021-10-04 09:53:09'),
(12, 'porsche', 'clients/porsche.png', '2021-10-04 09:53:15'),
(13, 'hunda', 'clients/honda.png', '2021-10-04 18:39:26'),
(14, 'mini', 'clients/mini.png', '2021-10-04 09:53:27'),
(15, 'volkswagen', 'clients/volkswagen.png', '2021-10-04 09:53:33'),
(16, 'ford', 'clients/ford.png', '2021-10-04 09:53:38'),
(17, 'lexus', 'clients/lexus.png', '2021-10-04 18:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `home_main_heading`
--

CREATE TABLE `home_main_heading` (
  `id` int(11) NOT NULL,
  `main_title` varchar(1000) NOT NULL,
  `sub_title` varchar(2000) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `feature_card_1` varchar(500) NOT NULL,
  `feature_card_2` varchar(500) NOT NULL,
  `feature_card_3` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_main_heading`
--

INSERT INTO `home_main_heading` (`id`, `main_title`, `sub_title`, `description`, `feature_card_1`, `feature_card_2`, `feature_card_3`, `updated_at`) VALUES
(1, 'WHY CARCENTIVE? 2', 'YOU WOULDN\'T BUY A HOUSE WITHOUT AN AGENT. SO WHY WOULD YOU BUY A CAR WITHOUT AN AGENT?', 'CarCentive will help you find the right price on the vehicle you\'re looking for, by negotiating on your behalf to make the entire process as stress free and hassle-free as possible. You don\'t have to do anything except sign and drive! Car buyers and sellers hire us to get the best rates and to eliminate the typical car buying or car leasing hassle and save as much money as possible. We\'re here to help you get just what you want at a price that will save you thousands. If you\'re in the market to purchase, lease or sell a vehicle, please call us today for a consultation.', 'WE DEAL WITH ALL CAR BRANDS', 'WE HAVE 20 YEARS OF EXPERIENCE IN THE AUTO INDUSTRY', 'WE OFFER REASONABLE PRICES FOR OUR SERVICES', '2021-10-03 10:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `home_sub_heading`
--

CREATE TABLE `home_sub_heading` (
  `id` int(11) NOT NULL,
  `main_title` varchar(1000) NOT NULL,
  `sub_title` varchar(2000) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_sub_heading`
--

INSERT INTO `home_sub_heading` (`id`, `main_title`, `sub_title`, `description`, `image`, `updated_at`) VALUES
(1, 'STRESS-FREE & PERSONALIZED AUTO PURCHASING SERVICE', 'Stress-free & personalized auto leasing service', 'CarCentive will help you find the right price on the vehicle you\'re looking for, by negotiating on your behalf to make the entire process as stress free and hassle-free as possible. You don\'t have to do anything except sign and drive! Car buyers and sellers hire us to get the best rates and to eliminate the typical car buying or car leasing hassle and save as much money as possible. We\'re here to help you get just what you want at a price that will save you thousands.', 'subheading/car.png', '2021-10-03 10:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `request_consultation_form`
--

CREATE TABLE `request_consultation_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `purchase_type` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `monthly_budget` varchar(100) NOT NULL,
  `down_payment_amount` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(11) NOT NULL,
  `fb_link` varchar(200) NOT NULL,
  `insta_link` varchar(200) NOT NULL,
  `twitter_link` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `fb_link`, `insta_link`, `twitter_link`, `updated_at`) VALUES
(1, 'https://www.facebook.com/CarCentive', 'https://www.instagram.com/carcentive/', 'https://twitter.com/carcentive', '2021-10-03 11:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `client` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `year` varchar(4) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `approve` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `client`, `model`, `year`, `message`, `image`, `approve`, `updated_at`) VALUES
(1, 'Adam J', 'Honda', 'CRV', '2019', 'We purchased a vehicle and had a great experience! The staff is very friendly and answered all our questions. Hassle-free test drive and all information clearly presented.\r\n', 'testimonial/49945-z.jpg', 0, '2021-10-04 18:28:33'),
(2, 'Ralph A.', 'Toyota', 'Camry', '2018', 'Amazing Car keep up the good work.\r\n', 'testimonial/56721-38759-baa14123-724c-4413-b315-e91d69fcd5ce.png', 1, '2021-10-04 18:28:33'),
(6, 'tshst', 'sthsth', 'hsthst', 'sthh', 'hsths', 'testimonial/cash-app (1).png', 1, '2021-10-04 18:28:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_card`
--
ALTER TABLE `home_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_clients`
--
ALTER TABLE `home_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_main_heading`
--
ALTER TABLE `home_main_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sub_heading`
--
ALTER TABLE `home_sub_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_consultation_form`
--
ALTER TABLE `request_consultation_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_card`
--
ALTER TABLE `home_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_clients`
--
ALTER TABLE `home_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `home_main_heading`
--
ALTER TABLE `home_main_heading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_sub_heading`
--
ALTER TABLE `home_sub_heading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_consultation_form`
--
ALTER TABLE `request_consultation_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
