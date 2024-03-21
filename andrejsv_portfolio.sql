-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2024 at 05:10 PM
-- Server version: 8.0.30
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andrejsv_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `first_name`, `last_name`, `email`, `subject`, `message`) VALUES
(1, 'andrey', 'volskis', 'test@test.co.uk', 'subject', 'Amidst the mists and fiercest frosts, With barest wrists, and stoutest boasts, He thrusts his fists against the posts, And still insists he sees the ghosts.Amidst the mists and fiercest frosts, With barest wrists, and stoutest boasts, He thrusts his fists against the posts, And still insists he sees the ghosts.'),
(2, 'a', 'a', 'a@a.com', 'a', 'sidhfl;kjsahflk;sajlkfj&#039;asl;fjas&#039;plkfjasl;kjflaskjfl&#039;sakjflsa&#039;kjfslkajf;&#039;jda;klj&#039;a;&#039;lsjkdf;jafsdjkfasdjk&#039;'),
(3, 'asd', 'asd', 'asd@asd.asd', 'asd', 'asd'),
(4, 'Esmee', 'Fulcher', 'Esmee.Fulcher@netmatters-scs.com', 'Hello', 'rgtfhujnl,;mjnihuvbygfthjn khjntfrguyhmokjnhvbgytf'),
(5, 'asd', 'asd', 'asd@asd.asd', 'asd', 'asd'),
(6, 'asd', 'asd', 'asd@asdasd.com', 'asd.com', 'asd'),
(7, 'd', 'd', 'test@test.test', 's', 'hehe'),
(8, 'Violeta', 'Last', 'viklast@outlook.com', 'ethe', 'regrgge'),
(9, 'Osman', 'Mahmood', 'oo@d.co', 'Testing...', 'asdfafssfaasdfafssfaasdfafssfaasdfafssfaasdfafssfa'),
(10, 'asdfa', 'asfafas', 'asd@asfasf.co', 'asfasfas', 'afasfsafasfa'),
(11, 'test', 'clockwork', 'php@mail.com', 'subject', 'akljsdnaljsdlakjsd'),
(12, 'andrey', 'asdads', 'aasd@aasdad.com', 'asdasd', 'asdadadasdfsdfdsfgdfgdfgfdgfgh'),
(13, 'Esmee', 'Fulcher', 'Esmee.Fulcher@netmatters-scs.com', 'Hello', 'test'),
(14, 'asd', 'dasdadad', 'sdfsf@ASDsadsa.com', 'asda', 'asdsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
