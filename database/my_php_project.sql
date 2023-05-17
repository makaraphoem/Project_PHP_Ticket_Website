-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 03:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit_cards`
--

CREATE TABLE `credit_cards` (
  `id` int(11) NOT NULL ,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `card_numbers` varchar(100) NOT NULL,
  `expire_date` varchar(6) NOT NULL,
  `cvv` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `date_time`
--

CREATE TABLE `date_time` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `date_time`
--

INSERT INTO `date_time` (`id`, `date`, `time`) VALUES
(1, '2023-02-14', '04:50:00'),
(2, '2023-02-10', '09:24:00'),
(3, '2023-02-08', '01:24:00'),
(4, '2023-02-17', '10:24:00'),
(5, '2023-02-24', '08:00:00'),
(6, '2023-02-22', '10:18:00'),
(7, '2023-02-14', '04:50:00'),
(8, '2023-03-10', '17:18:00'),
(9, '2023-03-01', '12:19:00'),
(10, '2023-03-01', '12:19:00'),
(11, '2023-03-03', '23:20:00'),
(12, '2023-03-01', '23:26:00'),
(13, '2023-02-10', '00:28:00'),
(14, '2023-03-02', '09:33:00'),
(15, '2023-03-02', '09:33:00'),
(16, '2023-03-02', '09:33:00'),
(17, '2023-03-02', '09:33:00'),
(18, '2023-03-02', '09:33:00'),
(19, '2023-03-02', '09:33:00'),
(20, '2023-03-02', '09:33:00'),
(21, '2023-03-02', '09:33:00'),
(22, '2023-03-02', '09:33:00'),
(23, '2023-03-02', '09:33:00'),
(24, '2023-02-10', '00:28:00'),
(25, '2023-03-02', '09:33:00'),
(26, '2023-03-02', '09:33:00'),
(27, '2023-03-02', '09:33:00'),
(28, '2023-02-23', '13:29:00'),
(29, '2023-03-02', '13:32:00'),
(30, '2023-01-19', '13:48:00'),
(31, '2023-02-22', '14:03:00'),
(32, '2023-02-15', '14:09:00'),
(33, '2023-02-23', '16:11:00'),
(34, '2023-02-23', '13:47:00'),
(35, '2023-02-01', '17:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `show_id`, `venue_id`) VALUES
(12, 125, 1),
(13, 126, 2),
(14, 128, 2),
(25, 145, 2),
(26, 146, 1),
(33, 158, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin '),
(2, 'seller'),
(3, 'customer ');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `running_time` int(11) NOT NULL,
  `trailer` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `created_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `title`, `description`, `type_id`, `img`, `running_time`, `trailer`, `language`, `subtitle`, `created_id`) VALUES
(125, 'The Gray Man ', '                                                When the CIA\\ s most skilled operative, whose true identity is known to none, accidentally uncovers dark agency secrets, a psychopathic former colleague', 1, 'images.jfif', 120, 'https://www.youtube.com/embed/BmllggGO4pM', 'English', 'Khmer', 8),
(126, 'Suicide Squad', 'In the film, a secret government agency led by Amanda Waller recruits imprisoned supervillains to execute dangerous black ops missions and save the world from a powerful threat in exchange for reduced', 1, 'suicide.squad(8).jfif', 160, 'https://www.youtube.com/embed/CmRih_VtVAs', 'English ', 'Khmer', 8),
(128, '6 Uncharted', 'It follows a group of people that fake their deaths and decide to form a vigilante team in order to stage a coup d\\ état against a ruthless dictator. 6 Underground premiered at The Shed in New York Ci', 1, 'uncharted(10).jfif', 140, 'https://www.youtube.com/embed/eHp3MbsCbMg', 'English ', 'Khmer', 8),
(145, 'Spider Man', 'Superhuman strength, agility, endurance, ability to stick to and climb walls and other surfaces, uses self-designed web-shooters allowing him to fire and swing from sticky webs, special \\\"Spider-Sense', 1, 'spider.man(4).jfif', 180, 'https://www.youtube.com/embed/t06RUxPbp_c', 'English ', 'English', 8),
(146, 'Divergent', 'moving or extending in different directions from a common point : diverging from each other. divergent paths. see also divergent evolution. : differing from each other or from a standard.', 1, 'divergent(5).jfif', 130, 'https://www.youtube.com/embed/Aw7Eln_xuWc', 'English ', 'English', 8),
(155, 'dgdfgdgf', '                          sfasdfassafasfsafas                              ', 1, 'images.jfif', 132, 'https://www.youtube.com/embed/LgO3O5zokOw', 'Hello', 'hello', 8),
(157, 'lkjhgf', '                    afasf                safdsaf                    ', 2, 'images.jfif', 2341, 'sfasf', 'hgf', 'gfd', 8),
(158, 'asdkjakfj', '                                                                        werwrw                                        ', 2, 'Phumimovie.jpg', 24, 'https://www.youtube.com/embed/LgO3O5zokOw', 'Hello', 'wqwr', 8);

-- --------------------------------------------------------

--
-- Table structure for table `show_datetime`
--

CREATE TABLE `show_datetime` (
  `id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `datetime_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `show_datetime`
--

INSERT INTO `show_datetime` (`id`, `show_id`, `datetime_id`) VALUES
(23, 125, 4),
(24, 126, 1),
(26, 128, 1),
(52, 125, 2),
(53, 126, 13),
(54, 128, 8),
(60, 145, 5),
(61, 146, 20),
(70, 155, 32),
(72, 157, 34),
(73, 158, 35);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `seat` varchar(100) NOT NULL,
  `show_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `type_shows`
--

CREATE TABLE `type_shows` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_shows`
--

INSERT INTO `type_shows` (`id`, `name`) VALUES
(1, 'movie '),
(2, 'concert ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `credit_card` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `password`, `role_id`, `date_of_birth`, `credit_card`) VALUES
(7, 'Admin', NULL, 'Admin@gmail.com', '$2y$10$FR.Ph8gJIDJzERkE26I8nO6WorV0fiuO0XYxu.L0ieJYAqofP9CX.', 1, '2023-01-12', 0),
(8, 'Makara', NULL, 'makara@gmail.com', '$2y$10$5nSOBAkeAX.7u1lGtZwUQ.FkcrEwxqL/vT0CfM/7pie3RnJ68.53O', 2, '2023-03-23', 0),
(9, 'Navin ', NULL, 'navin@student.passerellesnumeriques.org', '$2y$10$Xs45oPPJEvBFH3qvBzGM.u3dudb52n.lvrVe5KtLQMoJDvL1Vnl2q', 2, '2023-02-23', 0),
(10, 'Navin', NULL, 'navin.chhorn@student.passerellesnumeriques.org', '$2y$10$5nn3M0Km9W0TWKgZz9qiX.q9smhyZvgW7H0yP9xBk/ELvS2kY/GrO', 2, '2023-03-03', 0),
(11, 'radyNavin', NULL, 'rady123@gmail.com', '$2y$10$2SokcgpOnbHeY1d9T2m9euJ/0D2hyGJRWgU4cu1VOVSFl1qG8Jce2', 3, '2022-01-02', 0),
(13, 'navincA', NULL, 'nav@student.passerellesnumeriques.org', '$2y$10$3z6k0CjUjAdXSqPQcgZDtO1zYjbeRGzrDCHhOW.skxn6fpm8kfdse', 3, '2023-02-02', 0),
(14, 'radysdS', NULL, 'ma@gmail.com', '$2y$10$o8l.mx7Dg1UuROhTXeKCceVc4fh8dzT3Unxn7j9C4v/vvW0VKi5q.', 3, '2023-02-16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `name`, `address`) VALUES
(1, 'MAJOR ', 'SR'),
(2, 'LEGEND ', 'PHNOM PEN '),
(3, 'Hard Rock Cafe', 'PHNOM PEN ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit_cards`
--
ALTER TABLE `credit_cards`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `date_time`
--
ALTER TABLE `date_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_ibfk_1` (`show_id`),
  ADD KEY `detail_ibfk_2` (`venue_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shows_ibfk_1` (`type_id`),
  ADD KEY `created_id` (`created_id`);

--
-- Indexes for table `show_datetime`
--
ALTER TABLE `show_datetime`
  ADD PRIMARY KEY (`id`),
  ADD KEY `show_datetime_ibfk_1` (`datetime_id`),
  ADD KEY `show_datetime_ibfk_2` (`show_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_ibfk_1` (`show_id`),
  ADD KEY `ticket_ibfk_2` (`user_id`);

--
-- Indexes for table `type_shows`
--
ALTER TABLE `type_shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_ibfk_1` (`role_id`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `date_time`
--
ALTER TABLE `date_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `show_datetime`
--
ALTER TABLE `show_datetime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_shows`
--
ALTER TABLE `type_shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `credit_cards`
--
ALTER TABLE `credit_cards`
  ADD CONSTRAINT `credit_cards_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `shows` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_ibfk_2` FOREIGN KEY (`venue_id`) REFERENCES `venues` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type_shows` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shows_ibfk_2` FOREIGN KEY (`created_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `show_datetime`
--
ALTER TABLE `show_datetime`
  ADD CONSTRAINT `show_datetime_ibfk_1` FOREIGN KEY (`datetime_id`) REFERENCES `date_time` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `show_datetime_ibfk_2` FOREIGN KEY (`show_id`) REFERENCES `shows` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `shows` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
