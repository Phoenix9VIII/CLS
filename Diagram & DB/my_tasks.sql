-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 08:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_tasks`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'DB Structure'),
(2, 'Design');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'Greate Cairo'),
(2, 'Giza'),
(3, 'Alex'),
(4, 'Tanta'),
(5, 'المنيا'),
(6, 'بنى السويف'),
(7, 'القليوبية'),
(8, 'كفرالشيخ'),
(10, 'شرم الشيخ'),
(11, 'Sharqia'),
(12, 'Luxor');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'To Do'),
(2, 'In Progress'),
(3, 'Done'),
(4, 'Postponed');

-- --------------------------------------------------------

--
-- Table structure for table `status_task`
--

CREATE TABLE `status_task` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status_task`
--

INSERT INTO `status_task` (`id`, `task_id`, `status_id`, `date`, `user_id`) VALUES
(14, 2, 2, '2023-11-23 19:22:17', 1),
(15, 4, 2, '2023-11-23 19:22:17', 1),
(17, 6, 4, '2023-11-23 19:23:11', 2),
(18, 7, 3, '2023-11-23 19:23:45', 3),
(19, 17, 3, '2023-11-23 19:23:45', 3),
(20, 18, 1, '2023-11-23 19:24:17', 5),
(21, 21, 1, '2023-11-23 19:24:17', 5),
(22, 22, 2, '2023-11-23 19:24:47', 6),
(23, 24, 3, '2023-11-23 19:24:47', 6),
(28, 2, 3, '2023-11-26 06:43:28', 1),
(29, 25, 1, '2023-11-26 07:08:54', 2),
(30, 2, 2, '2023-11-28 05:27:17', 1),
(31, 2, 1, '2023-11-28 05:27:22', 1),
(32, 2, 1, '2023-11-28 05:27:37', 1),
(33, 2, 3, '2023-11-28 05:27:37', 1),
(34, 2, 2, '2023-11-28 05:27:43', 1),
(35, 2, 3, '2023-11-28 05:27:46', 1),
(36, 2, 4, '2023-11-28 05:27:50', 1),
(37, 26, 2, '2023-11-28 05:28:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `due_date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `description`, `date`, `due_date`, `user_id`, `category_id`, `active`) VALUES
(2, 'Choose a new html Template NOW!!', 'Search for a free html admin Templates with Charts, Tables and forms.', '2023-11-01 22:00:00', '2023-11-05', 1, 1, 2),
(4, 'Compiler project', 'Description of the Task', '2023-11-06 22:00:00', '2023-11-20', 2, 1, 1),
(6, 'CA', 'Description of the Task', '2023-11-06 22:00:00', '2023-11-20', 1, 1, 1),
(7, 'Logic programming', 'Description of the Task', '2023-11-06 22:00:00', '2023-11-20', 1, 1, 1),
(17, 'My uptade Task', 'This is the new uptade description', '2023-11-30 22:00:00', '2023-12-06', 3, 2, 1),
(18, 'Create a new Company', 'Create a Website for new client', '2023-12-08 22:00:00', '2024-01-05', 3, 1, 1),
(21, 'Algorithms', 'This is the Query description', '2023-12-06 22:00:00', '2023-12-28', 1, 2, 1),
(22, 'Create a MobileApplication', 'that contain dart', '2023-12-07 22:00:00', '2024-02-01', 1, 2, 1),
(24, 'assignment operation research', 'that contain simplemethod', '2023-09-02 22:00:00', '2024-03-21', 2, 2, 1),
(25, 'IT', 'Check Router', '2023-11-25 22:00:00', '2023-11-30', 2, 2, 2),
(26, 'IT', 'CHECK NETWORK', '2023-11-25 22:00:00', '2023-11-29', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `task_user`
--

CREATE TABLE `task_user` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT 'default.png',
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` char(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `email`, `password`, `phone`, `address`, `city_id`, `active`) VALUES
(1, 'default.png', 'Ali', 'ali@yahoo.com', '$2y$10$wOp15RgbWYbTTPWfpQQ1OeTTFkTHBWX6e7TyVnF7f8BFaj4lRpKTe', '0110', 'Doki', 1, 1),
(2, 'default.png', 'Hany', 'Hany@gmail.com', '$2y$10$wOp15RgbWYbTTPWfpQQ1OeTTFkTHBWX6e7TyVnF7f8BFaj4lRpKTe', '0110', 'el-maadi', 2, 1),
(3, 'default.png', 'Hassan', 'hassan@gmail.com', '$2y$10$wOp15RgbWYbTTPWfpQQ1OeTTFkTHBWX6e7TyVnF7f8BFaj4lRpKTe', '0110', 'malk-salah', 2, 1),
(5, 'default.png', 'Omar', 'omar@gmail.com', '$2y$10$wOp15RgbWYbTTPWfpQQ1OeTTFkTHBWX6e7TyVnF7f8BFaj4lRpKTe', '0110', 'demerdash', 3, 1),
(6, 'default.png', 'Basem', 'basem@gmail.com', '$2y$10$wOp15RgbWYbTTPWfpQQ1OeTTFkTHBWX6e7TyVnF7f8BFaj4lRpKTe', '0110', 'Ain-shams', 5, 1),
(7, 'default.png', 'Karim', 'Karim@gmail.com', '$2y$10$wOp15RgbWYbTTPWfpQQ1OeTTFkTHBWX6e7TyVnF7f8BFaj4lRpKTe', '0110', 'Alabaseya', 1, 1),
(8, 'default.png', 'Mohanad', 'mohanad@gmail.com', '$2y$10$wOp15RgbWYbTTPWfpQQ1OeTTFkTHBWX6e7TyVnF7f8BFaj4lRpKTe', '0110', 'Shobra', 1, 1),
(9, 'default.png', 'Fares', 'fares@gmail.com', '$2y$10$wOp15RgbWYbTTPWfpQQ1OeTTFkTHBWX6e7TyVnF7f8BFaj4lRpKTe', '0110', 'Zahara', 1, 1),
(10, 'default.png', 'Mahmoud', 'Mahmoud@gmail.com', '$2y$10$wOp15RgbWYbTTPWfpQQ1OeTTFkTHBWX6e7TyVnF7f8BFaj4lRpKTe', '0110', 'Ain-Helwan', 2, 1),
(11, 'default.png', 'Hossam', 'hossam@gmail.com', '$2y$10$wOp15RgbWYbTTPWfpQQ1OeTTFkTHBWX6e7TyVnF7f8BFaj4lRpKTe', '0110', 'ELagoza', 2, 1),
(12, 'default.png', 'Shahd', 'Shahd@gmail.com', '$2y$10$wOp15RgbWYbTTPWfpQQ1OeTTFkTHBWX6e7TyVnF7f8BFaj4lRpKTe', '0110', 'Helwan', 1, 1),
(13, 'default.png', 'Nour', 'Nour@outlook.com', '$2y$10$wOp15RgbWYbTTPWfpQQ1OeTTFkTHBWX6e7TyVnF7f8BFaj4lRpKTe', '0110', 'Maadi', 1, 1),
(20, 'default.png', 'Youssef', 'Youssef@hotmail.com', '$2y$10$wOp15RgbWYbTTPWfpQQ1OeTTFkTHBWX6e7TyVnF7f8BFaj4lRpKTe', '0110', 'Zayed', 4, 1),
(22, 'default.png', 'Iyad', 'Iyad@gmail.com', '$2y$10$wOp15RgbWYbTTPWfpQQ1OeTTFkTHBWX6e7TyVnF7f8BFaj4lRpKTe', '0110', 'Maadi', 1, 1),
(23, 'default.png', 'Wael', 'wael@gmail.com', '$2y$10$wOp15RgbWYbTTPWfpQQ1OeTTFkTHBWX6e7TyVnF7f8BFaj4lRpKTe', '0110', 'Maadi', 1, 1),
(24, 'default.png', 'Waled', 'waled@yahoo.com', '$2y$10$BxroZjcugSjRkU2VL01XqOqFm.xdGV50NC4f0MUq6Mk7G5gEEmrR2', '0110', 'Tahrir', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_task`
--
ALTER TABLE `status_task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `task_user`
--
ALTER TABLE `task_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status_task`
--
ALTER TABLE `status_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `task_user`
--
ALTER TABLE `task_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `status_task`
--
ALTER TABLE `status_task`
  ADD CONSTRAINT `status_task_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `status_task_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `status_task_ibfk_3` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tasks_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `task_user`
--
ALTER TABLE `task_user`
  ADD CONSTRAINT `task_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_user_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
