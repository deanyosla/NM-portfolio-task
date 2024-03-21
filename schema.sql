-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 04:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `subject`, `message`) VALUES
(1, 'andrey', 'volskis', 'andrey@mail.com', 'subject', 'mesjghashldja;shdl;kashdlakshdjlaksdjhla\'khdsl\'akhdlaskhdalskdha\'lsdkh'),
(2, 'Andrey', 'Volsky', 'deanyosla@gmail.com', 'Subject Name', 'Hi, this is a test message. Hopefully over forty symbols.'),
(3, 'Andrey', 'Last Name', 'deanyosla@gmail.com', 'subject', 'mesasgshasjdaklsjd k;jahskjdhak kjh;ljk hljk;h'),
(4, 'testNrHundred', 'somenamehere', 'test@test.co.uk', 'subject', 'iasoidaoisdoiasdoijasdoihasdoiasdoiasoiasoiasiojasiopasp[odfjkasp]ofjdap]osfjaposfjapoisdja]psdojspodifjospaijdfpa]dosjfmsk\'lfasoijfpaso[jfpajsofm\''),
(5, 'name', 'surname', 'man@man.com', 'asudih', 'asdasdfafdgffdgfdgfdgfdgdfgertwreg3ergegegdfgbdfbdgdfgsdgdsg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
