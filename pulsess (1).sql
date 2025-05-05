-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2025 at 01:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pulsess`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhaar_form_data`
--

CREATE TABLE `aadhaar_form_data` (
  `id` int(11) NOT NULL,
  `resident_type` varchar(50) DEFAULT NULL,
  `pre_enrolment_id` varchar(100) DEFAULT NULL,
  `aadhaar_number` varchar(20) DEFAULT NULL,
  `update_fields` text DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` text DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `verification_type` varchar(50) DEFAULT NULL,
  `poi_file` varchar(255) DEFAULT NULL,
  `poa_file` varchar(255) DEFAULT NULL,
  `document_type` varchar(50) DEFAULT NULL,
  `pan_number` varchar(20) DEFAULT NULL,
  `voter_id_number` varchar(20) DEFAULT NULL,
  `declaration_confirmed` tinyint(1) DEFAULT 0,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `application_number` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aadhaar_form_data`
--

INSERT INTO `aadhaar_form_data` (`id`, `resident_type`, `pre_enrolment_id`, `aadhaar_number`, `update_fields`, `full_name`, `gender`, `dob`, `address`, `mobile`, `email`, `verification_type`, `poi_file`, `poa_file`, `document_type`, `pan_number`, `voter_id_number`, `declaration_confirmed`, `submission_date`, `application_number`) VALUES
(1, 'Resident', '', '', 'Biometric', 'Shivam Sarnath Yadav', 'Male', '0006-06-05', 'Shree Vihar, Patia Road', '8879318121', 'nandaniyadav3112@gmail.com', 'Document Based', 'Ashish_pdf.pdf', '].pdf', 'VoterID', '', '', 1, '2025-04-17 05:31:00', NULL),
(2, 'Resident', '', '', 'Biometric', 'Shivam Sarnath Yadav', 'Male', '0333-03-03', 'Shree Vihar, Patia Road', '8879318121', 'smitayadav712@gmail.com', 'Document Based', 'Ashish_pdf.pdf', '].pdf', 'PAN', '', '', 1, '2025-04-17 06:09:06', NULL),
(3, 'Resident', '', '', 'DOB', 'Shivam Sarnath Yadav', 'Male', '0003-03-03', 'Shree Vihar, Patia Road', '8879318121', 'nandaniyadav3112@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-07 071748.png', 'PAN', '', '', 1, '2025-04-17 06:11:54', NULL),
(4, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', 0, '2025-04-17 08:06:31', 'APP202504179017'),
(5, 'Resident', '', '', 'Biometric, DOB', 'Shivam Sarnath Yadav', 'Male', '0002-02-01', 'Shree Vihar, Patia Road', '8879318121', 'smitayadav712@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-11 201910.png', 'PAN', '', '0', 1, '2025-04-17 08:07:41', 'APP202504178617'),
(6, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', 0, '2025-04-17 08:08:20', 'APP202504173391'),
(7, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', 0, '2025-04-17 09:19:40', 'APP202504173877'),
(8, 'Resident', '', '', 'Biometric', 'Shivam Sarnath Yadav', 'Male', '0222-02-22', 'Shree Vihar, Patia Road', '8879318121', 'shivamyadav75555@gmail.com', 'Document Based', 'Screenshot 2025-04-16 181600.png', 'Screenshot 2025-04-11 201910.png', 'PAN', '', '0', 1, '2025-04-17 09:21:40', 'APP202504172217'),
(9, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', 0, '2025-04-17 09:23:42', 'APP202504178106'),
(10, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', 0, '2025-04-17 14:51:02', 'APP202504175932'),
(11, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', 0, '2025-04-17 14:51:11', 'APP202504173613'),
(12, 'Resident', '', '', 'Mobile', 'Shivam Sarnath Yadav', 'Male', '0055-05-04', 'Shree Vihar, Patia Road', '8879318121', 'shivamyadav76666@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-11 201910.png', 'PAN', '', '0', 1, '2025-04-17 14:52:09', 'APP202504171168'),
(13, 'Resident', '', '', 'Mobile', 'Shivam Sarnath Yadav', 'Male', '0055-05-04', 'Shree Vihar, Patia Road', '8879318121', 'shivamyadav76666@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-11 201910.png', 'PAN', '', '0', 1, '2025-04-17 14:56:47', 'APP202504173380'),
(14, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', 0, '2025-04-18 23:15:22', 'APP202504192287'),
(15, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', 0, '2025-04-18 23:16:03', 'APP202504191399'),
(16, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', 0, '2025-04-18 23:16:52', 'APP202504193214'),
(17, 'Resident', '', '', 'Biometric', 'Shivam Sarnath Yadav', 'Male', '0003-03-03', 'Shree Vihar, Patia Road', '8879318121', 'shivamyadav75555@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-11 201910.png', 'PAN', '', '0', 1, '2025-04-18 23:18:04', 'APP202504198024'),
(18, 'Resident', '', '', 'Biometric', 'Shivam Sarnath Yadav', 'Male', '0003-03-03', 'Shree Vihar, Patia Road', '8879318121', 'shivamyadav75555@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-11 201910.png', 'PAN', '', '0', 1, '2025-04-18 23:21:07', 'APP202504196428'),
(19, 'Resident', '', '', 'Biometric', 'Shivam Sarnath Yadav', 'Male', '0003-03-03', 'Shree Vihar, Patia Road', '8879318121', 'shivamyadav75555@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-11 201910.png', 'PAN', '', '0', 1, '2025-04-18 23:22:52', 'APP202504199887'),
(20, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', 0, '2025-04-18 23:39:52', 'APP202504193855'),
(21, 'Resident', '', '', 'Biometric, Name', 'Shivam Sarnath Yadav', 'Male', '0222-07-06', 'Shree Vihar, Patia Road', '8879318121', 'nandaniyadav3112@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-11 201910.png', 'PAN', '', '0', 1, '2025-04-18 23:53:29', 'APP202504196908'),
(22, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', 0, '2025-04-19 01:15:02', 'APP202504193326'),
(23, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', 0, '2025-04-19 02:00:43', 'APP202504193666'),
(24, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', 0, '2025-04-19 02:22:34', 'APP202504198962'),
(25, 'Resident', '', '', 'Biometric', 'Smita Sarnath yadav', 'Male', '0022-02-22', 'ARUNODYA NIWAS, HAJI BAPU ROAD,\r\nNR, BMC HOSPITAL, MALAD (E), MUMBAI, 400097', '7208441016', 'shivamyadav755555@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-11 201910.png', 'PAN', '', '0', 1, '2025-04-19 02:28:30', 'APP202504199186'),
(26, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', 0, '2025-04-19 02:32:29', 'APP202504194849'),
(27, 'Resident', '', '', 'Biometric', 'Shivam Sarnath Yadav', 'Male', '0078-06-05', 'Shree Vihar, Patia Road', '8879318121', 'shivamyadav755555@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-11 201910.png', 'PAN', '', '0', 1, '2025-04-19 03:12:18', 'APP202504197350'),
(28, 'Resident', '', '', 'Biometric', 'Shivam Sarnath Yadav', 'Male', '0000-00-00', 'Shree Vihar, Patia Road', '8879318121', 'shivamyadav75555@gmail.com', 'Document Based', 'Screenshot 2025-04-07 071748.png', 'Screenshot 2025-04-07 071748.png', 'PAN', '', '0', 1, '2025-04-19 06:08:35', 'APP202504193698'),
(29, 'Resident', '', '', 'Biometric', 'mandar pundalik gavande', 'Male', '2004-07-21', 'ARUNODYA NIWAS, HAJI BAPU ROAD,', '9405984816', 'nandaniyadav3112@gmail.com', 'Document Based', 'Screenshot 2025-04-16 182552.png', 'Screenshot 2025-04-17 080623.png', 'PAN', '', '0', 1, '2025-04-19 06:26:37', 'APP202504195022'),
(30, 'Resident', '', '', 'Biometric', 'Shivam Sarnath Yadav', 'Male', '0434-03-06', 'Shree Vihar, Patia Road', '8879318121', 'shivamyadav76666@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-11 201910.png', 'PAN', '', '0', 1, '2025-04-20 09:19:58', 'APP202504205109'),
(31, 'Resident', '', '', 'Biometric', 'Shiva Yadav', 'Male', '1999-05-05', 'Shree Vihar, Patia Road', '8879318121', 'shivamyadav75555@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-11 201910.png', 'PAN', '', '0', 1, '2025-04-20 17:15:55', 'APP202504202578'),
(32, 'Resident', '', '', 'Biometric', 'Shivam Sarnath Yadav', 'Male', '0678-05-05', 'Shree Vihar, Patia Road', '8879318121', 'shivamyadav75555@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-11 201910.png', 'PAN', '', '0', 1, '2025-04-21 02:23:18', 'APP202504218849'),
(33, 'Resident', '', '', 'Biometric', 'Shivam Sarnath Yadav', 'Male', '8988-07-08', 'Shree Vihar, Patia Road', '8879318121', 'nandaniyadav3112@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-17 093026.png', 'PAN', '', '0', 1, '2025-04-21 03:20:06', 'APP202504215297'),
(34, 'Resident', '', '', 'Biometric, DOB', 'Shivam Sarnath Yadav', 'Male', '7773-03-07', 'Shree Vihar, Patia Road', '8879318121', 'shivamyadav75555@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-17 092141.png', 'PAN', '', '0', 1, '2025-04-21 05:04:24', 'APP202504217281'),
(35, 'Resident', '', '', 'Biometric', 'Shivam Sarnath Yadav', 'Male', '0565-06-05', 'Shree Vihar, Patia Road', '8879318121', 'shivamyadav75555@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-17 092141.png', 'PAN', '', '0', 1, '2025-04-21 05:29:19', 'APP202504218345'),
(36, 'Resident', '', '', 'Biometric, Mobile', 'Shivam Sarnath Yadav', 'Male', '0002-02-22', 'Shree Vihar, Patia Road', '8879318121', 'shivamyadav755555@gmail.com', 'Document Based', 'Screenshot 2025-04-11 201910.png', 'Screenshot 2025-04-16 181600.png', 'PAN', '', '0', 1, '2025-04-22 04:06:58', 'APP202504221927');

-- --------------------------------------------------------

--
-- Table structure for table `pan_requests`
--

CREATE TABLE `pan_requests` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `printed_name` varchar(100) DEFAULT NULL,
  `father_last` varchar(100) DEFAULT NULL,
  `father_first` varchar(100) DEFAULT NULL,
  `father_middle` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address_type` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `country_code` varchar(10) DEFAULT NULL,
  `area_code` varchar(10) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `aadhaar` varchar(20) DEFAULT NULL,
  `pan1` varchar(20) DEFAULT NULL,
  `pan2` varchar(20) DEFAULT NULL,
  `pan3` varchar(20) DEFAULT NULL,
  `pan4` varchar(20) DEFAULT NULL,
  `applicant_name` varchar(100) DEFAULT NULL,
  `capacity` varchar(100) DEFAULT NULL,
  `documents_count` int(11) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `form_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments1`
--

CREATE TABLE `payments1` (
  `id` int(11) NOT NULL,
  `application_number` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `payment_details` varchar(255) DEFAULT NULL,
  `payment_status` varchar(20) DEFAULT NULL,
  `transaction_id` varchar(50) DEFAULT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments1`
--

INSERT INTO `payments1` (`id`, `application_number`, `amount`, `payment_method`, `payment_details`, `payment_status`, `transaction_id`, `payment_date`) VALUES
(1, 'APP202504196908', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-19 00:22:11'),
(2, '', 0.00, '', '', 'Pending', NULL, '2025-04-19 00:32:33'),
(3, '', 0.00, '', '', 'Pending', NULL, '2025-04-19 00:35:28'),
(4, '', 0.00, '', '', 'Pending', NULL, '2025-04-19 00:39:05'),
(5, '', 0.00, '', '', 'Pending', NULL, '2025-04-19 00:43:37'),
(6, '', 0.00, '', '', 'Pending', NULL, '2025-04-19 01:14:52'),
(7, 'APP202504193326', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-19 01:15:11'),
(8, '', 0.00, '', '', 'Pending', NULL, '2025-04-19 02:00:36'),
(9, 'APP202504193666', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-19 02:00:51'),
(10, '', 0.00, '', '', 'Pending', NULL, '2025-04-19 02:13:11'),
(11, 'APP123456', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-19 02:13:21'),
(12, '', 0.00, '', '', 'Pending', NULL, '2025-04-19 02:17:17'),
(13, 'APP123456', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-19 02:17:26'),
(14, '', 0.00, '', '', 'Pending', NULL, '2025-04-19 02:22:16'),
(15, 'APP202504198962', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-19 02:22:39'),
(16, 'APP202504199186', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-19 02:28:36'),
(17, '', 0.00, '', '', 'Pending', NULL, '2025-04-19 02:29:42'),
(18, 'APP202504197350', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-19 03:12:23'),
(19, 'APP123456', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-19 03:31:26'),
(20, 'APP202504193698', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-19 06:08:44'),
(21, 'APP202504195022', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-19 06:27:19'),
(22, 'APP123456', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-19 06:59:11'),
(23, 'APP202504205109', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-20 09:20:04'),
(24, 'APP202504202578', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-20 17:16:05'),
(25, 'APP202504218849', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-21 02:23:24'),
(26, 'APP202504215297', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-21 03:20:11'),
(27, 'APP123456', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-21 03:22:31'),
(28, 'APP202504217281', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-21 05:04:32'),
(29, 'APP202504217281', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-21 05:25:24'),
(30, 'APP202504218345', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-21 05:29:29'),
(31, 'APP202504221927', 50.00, 'UPI', '7208441016@paytem', 'Pending', NULL, '2025-04-22 04:07:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aadhaar_form_data`
--
ALTER TABLE `aadhaar_form_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pan_requests`
--
ALTER TABLE `pan_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments1`
--
ALTER TABLE `payments1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aadhaar_form_data`
--
ALTER TABLE `aadhaar_form_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pan_requests`
--
ALTER TABLE `pan_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments1`
--
ALTER TABLE `payments1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
