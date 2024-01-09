-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 09:10 PM
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
-- Database: `amazon`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cameras', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(2, 'Tvs', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(3, 'Mobilephones', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(4, 'Others', '2023-12-19 18:01:07', '2023-12-19 18:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cairo', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(2, 'Alex', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(3, 'Giza', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(4, 'Fayoum', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(5, 'Sinai', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(6, 'Matrouh', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(7, 'Sahel', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(8, 'Hurghada', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(9, 'Sharm', '2023-12-19 18:01:07', '2023-12-19 18:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'avatar.jpg',
  `name` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `b_date` date NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `name`, `phone`, `address`, `b_date`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'avatar.jpg', 'Dr. Vance Hettinger III', '(772) 542-8369', '331 Kertzmann Brooks Suite 440\nLake Rebekabury, ME 57345', '1970-04-27', 1, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(2, 'avatar.jpg', 'Winfield Yost', '480.952.6966', '359 Rippin Ramp\nWest Dollyburgh, IN 58680', '2021-09-12', 5, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(3, 'avatar.jpg', 'Emely Jaskolski', '(989) 480-1882', '4100 Dach Lock Suite 021\nGutmannport, AL 35869-5929', '2015-08-19', 2, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(4, 'avatar.jpg', 'Jasmin Adams', '802-479-7611', '369 Auer Brooks Suite 296\nAdamsview, MI 23008-3904', '1970-12-18', 6, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(5, 'avatar.jpg', 'Abelardo Ritchie', '+1-540-809-3456', '8383 Yundt Corner Apt. 346\nPort Ledaburgh, IA 97118-8369', '1975-10-30', 7, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(6, 'avatar.jpg', 'Brice Jacobi', '872.957.5591', '9382 Brandyn Court\nWest Kaiabury, CO 13237-1890', '1976-02-02', 4, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(7, 'avatar.jpg', 'Geovanni Tillman', '680.684.7925', '157 Teagan Via Suite 539\nLake Enochside, TX 41270-5895', '1985-10-13', 6, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(8, 'avatar.jpg', 'Mr. Joey Swaniawski', '+1-520-845-1541', '770 Name Lights Suite 739\nSouth Marciaton, NC 38945', '1997-07-19', 5, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(9, 'avatar.jpg', 'Ahmad Fritsch', '1-575-516-2587', '44304 Madie Estates Suite 753\nJosephburgh, WA 80116-4534', '2010-07-31', 6, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(10, 'avatar.jpg', 'Caleigh Moen', '+1 (458) 507-0778', '8612 Angus Lane Suite 444\nPort Micheleshire, VT 66177', '1999-07-31', 4, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(11, 'avatar.jpg', 'Jazmyne Farrell', '(740) 349-9800', '3225 Eli Port Apt. 416\nGleichnerbury, CA 29837-4799', '2004-07-29', 6, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(12, 'avatar.jpg', 'Mr. Gregory Daugherty Jr.', '+1-862-396-1924', '55844 Leffler Skyway Apt. 279\nLake Rosalynview, AR 72479', '2006-10-17', 6, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(13, 'avatar.jpg', 'Justyn Gulgowski', '201.792.7463', '161 Johnson Ridges\nNew Daryl, FL 11418', '2002-08-22', 3, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(14, 'avatar.jpg', 'Prof. Meaghan Leuschke', '762-245-3451', '8072 Wisozk Brook Apt. 655\nLeslyton, NY 81410-5587', '1990-10-06', 3, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(15, 'avatar.jpg', 'Mr. Arne Lowe PhD', '315-260-4388', '49360 Little Road Suite 967\nJazmynefurt, WI 56510', '1989-05-10', 6, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(16, 'avatar.jpg', 'Mylene Kautzer', '+1 (847) 338-1014', '1251 Pollich Prairie Suite 272\nWest Adelle, SD 77387-2878', '2002-08-13', 3, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(17, 'avatar.jpg', 'Buck Kuphal', '989.677.0161', '99372 Feeney Mountain Suite 375\nIzabellabury, VT 90044', '2021-07-18', 7, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(18, 'avatar.jpg', 'Ms. Elza Kunde', '+15613927314', '5187 Gleason Plains Apt. 259\nVioletfort, WA 38641', '2009-10-05', 1, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(19, 'avatar.jpg', 'Prof. Robyn Kozey', '516-527-2931', '439 Joe Valleys Suite 842\nWest Junior, HI 36516-1719', '1976-11-11', 5, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(20, 'avatar.jpg', 'Lionel Friesen', '341.845.2462', '63202 Hirthe Trafficway\nNorth Marcusland, UT 57377', '1982-07-16', 8, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(21, 'avatar.jpg', 'Hertha Howell', '1-417-868-7933', '5139 Kessler Inlet Apt. 423\nWest Burleyville, MA 69722', '2014-05-25', 1, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(22, 'avatar.jpg', 'Kennedy Lesch', '+1-484-933-1292', '8256 Jailyn Freeway\nLake Kale, WY 61372-6700', '1990-06-08', 3, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(23, 'avatar.jpg', 'Greta Boehm', '+14099337327', '75996 Miller Plains Suite 232\nEast Miloburgh, AR 02714-2616', '1980-05-01', 2, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(24, 'avatar.jpg', 'Blake Schoen DVM', '+1 (662) 709-5390', '87683 Elaina Pass\nDarleneside, VA 01705', '2014-01-15', 3, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(25, 'avatar.jpg', 'Dr. German Weber', '1-734-659-0864', '9848 Tremblay Cliffs Suite 742\nPort Jean, GA 14648-9824', '2014-06-05', 7, '2023-12-19 18:01:07', '2023-12-19 18:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(200) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(200) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_14_181035_create_cities_table', 1),
(6, '2023_12_14_181607_create_products_table', 1),
(7, '2023_12_14_182027_create_clients_table', 1),
(8, '2023_12_14_183748_create_categories_table', 1),
(9, '2023_12_14_184429_alter_products_table', 1),
(10, '2023_12_17_183442_alter_clients_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(200) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `cost` double(8,2) NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock` double(8,2) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `cost`, `price`, `stock`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'LG OLED B3 77 inch 4K Smart TV 2023', 'A smarter viewing experience with the a7 AI Processor 4K Gen6', 10000.00, 13500.00, 5.00, 1, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(2, 'iPhone 15 Pro', 'Titanium.So strong. So light. So Pro.Enter A17 Pro.Game-changing chip. Groundbreaking performance.', 90000.00, 95000.00, 15.00, 1, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(3, 'Foldable Solar Panel', 'Foldable solar panels are gaining traction as people look for an easy, sustainable way to juice up their devices when off the grid. Although compact solar panels have been around for a while, the new foldable variety offers more convenience and flexibility.', 15000.00, 20000.00, 10.00, 2, '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(4, 'D70', 'The Brand New Camera ', 5000.00, 9000.00, 5.00, 3, '2023-12-19 18:01:07', '2023-12-19 18:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Brent Kling', 'earline.simonis@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'vzh4MKulhv', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(2, 'Elliott Cummerata', 'runolfsdottir.jacey@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'tTFSTqbNrn', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(3, 'Jaqueline D\'Amore III', 'tony.barrows@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'NTVNt7TgOk', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(4, 'Dr. Rhett Steuber DDS', 'blindgren@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'sTezTLEeMm', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(5, 'Marcus Bernhard', 'xvolkman@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '5D8uoSV2nv', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(6, 'Tavares Gulgowski', 'qschroeder@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'FXI8LdZR7Z', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(7, 'Lexi Balistreri', 'sonny22@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'jzrIxFTz1z', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(8, 'Mattie Bahringer', 'upowlowski@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'fmFiRxPdG4', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(9, 'Hilbert Bauch', 'wendell54@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'BTgqBtLuoV', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(10, 'Dr. Einar Maggio MD', 'lera.gislason@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'qkA3VFzlpz', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(11, 'Wallace Koelpin', 'sydney04@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'p0VAYLyshD', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(12, 'Ryan Murazik V', 'swift.desiree@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'S5N3SpYp0g', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(13, 'Elise Stark', 'creynolds@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'gLenROPjQi', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(14, 'Glen Greenholt PhD', 'ellis.rosenbaum@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'Fa8E0xv32F', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(15, 'Isabella Muller', 'florian11@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'ynlHdu1kCr', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(16, 'Miss Annetta Murray', 'rau.peggie@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'RTyHO1G4DL', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(17, 'Dr. Blaise Johnson DDS', 'tressie.labadie@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '0kiaAhXMl3', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(18, 'Mr. Dino Hartmann', 'riley26@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'FBrY5fwY9y', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(19, 'Oral Bernhard', 'sofia69@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'u7EtC2gzO0', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(20, 'Prof. Juliet Kuhic', 'kamron20@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'Co3c1ktqMc', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(21, 'Adam Brown', 'wlowe@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'r1mGKqQbK5', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(22, 'Jeanie Rogahn', 'owisozk@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'V21gz1Cz9f', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(23, 'Patience Thompson', 'nolan73@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'peirIcE2bR', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(24, 'Maye Heaney', 'heber55@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'omK0E9Cchf', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(25, 'Mrs. Nikki Kassulke DVM', 'yruecker@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '0QsXWOZLrA', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(26, 'Scarlett Aufderhar', 'marisol.satterfield@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'Qj3Bo8KBcV', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(27, 'Dr. Gunnar Gorczany Jr.', 'carlo10@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'X4xIktnRYQ', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(28, 'Prof. Pattie Mante Jr.', 'lakin.grant@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '7dDcR2DKna', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(29, 'Ethyl Bergstrom', 'uoconnell@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '8kqnx0Dd3c', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(30, 'Kenya Grant IV', 'carroll.bosco@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '5gXToibdmQ', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(31, 'Melba Metz', 'gislason.aaliyah@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'Uv7GGFylD7', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(32, 'Ms. Gudrun Hegmann II', 'vcartwright@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'CaDKToEhzz', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(33, 'Raven Stracke', 'kwuckert@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'YWSpDdCG8t', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(34, 'Krista Hayes', 'guadalupe.deckow@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'BKkGmLiv2v', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(35, 'Maximillian Gutmann', 'emaggio@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'uaZe3JCPdi', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(36, 'Oda Pfeffer', 'clementina12@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'j94U9jwWkB', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(37, 'Miss Eunice Kertzmann', 'utillman@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'ZUYeQ22M7u', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(38, 'Nathaniel Kub II', 'ondricka.melody@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'rGkmQurl6X', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(39, 'Rocio Marks', 'nprice@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'QwSSYDSZ2t', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(40, 'Lonzo Aufderhar', 'herminio.jones@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '0a7RmHjLOx', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(41, 'Minerva Bartell', 'fmedhurst@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'fspCrS96u0', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(42, 'Jaleel D\'Amore', 'wrau@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'Ghe1bkZW8B', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(43, 'Sophia Johns PhD', 'hilario88@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'xyyGjcaNLU', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(44, 'Prof. Orland Kihn', 'cornelius.schimmel@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '4xOYuf8eND', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(45, 'Syble Huel', 'feest.dedrick@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'RQM0df0S8A', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(46, 'Archibald Carroll', 'qboyer@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'tsWzL2UxlL', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(47, 'Aurelie Kunze PhD', 'khuels@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'vro9kMzGzd', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(48, 'Clint Gutmann', 'milton.powlowski@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'fDWLIVwgr3', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(49, 'Bertha Mueller', 'zella.schaden@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '1Sa5GpDvqg', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(50, 'Mariela Mante', 'cordie48@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'NcS2iBXpUJ', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(51, 'Dr. Sienna Luettgen', 'ansley49@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'XrOLxwVdDM', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(52, 'Hanna Heller', 'gislason.jamie@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'Fj9gDQXrxI', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(53, 'Delmer Franecki', 'gilda39@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'vS3KaVYSgP', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(54, 'Mrs. Vilma Tillman MD', 'cronin.wellington@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'yYG1dU6IMc', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(55, 'Mr. Ross Huel', 'stefanie48@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'PmzcEOpcMU', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(56, 'Stefanie Trantow', 'kbuckridge@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'kExSmkyiDW', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(57, 'Mr. Everett Witting', 'nikki.kassulke@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'nawegZSVpa', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(58, 'Dr. Jovanny Koepp', 'noe.glover@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'WuAVR3UpCJ', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(59, 'Prof. Adan Bogisich DVM', 'francesca.kris@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'xPNTAA0GLp', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(60, 'Mr. Pierre Bergnaum MD', 'joshua66@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'Sin6iPo41O', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(61, 'Trycia Runolfsdottir MD', 'zrippin@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'UQcU27k1bj', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(62, 'Dr. Dawn Okuneva PhD', 'zrogahn@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'e30vKttpRG', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(63, 'Ms. Otilia Kling I', 'bernadine29@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'V2t84WrXtl', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(64, 'Ms. Cindy Stiedemann', 'dimitri.bayer@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'Y7Uu2282F5', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(65, 'Mr. Orion Lockman', 'schultz.effie@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'PH1I1cWALI', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(66, 'Cali Kerluke', 'jayme23@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '1piJJYLKV0', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(67, 'Vita Yost', 'lgibson@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'QxE9tn7F16', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(68, 'Breanna Ullrich', 'turcotte.dusty@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'B5NPKmZpk9', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(69, 'Johan Fahey', 'kfunk@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'pEw1OqiiqF', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(70, 'Johann Mayert', 'herdman@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'NU4nnuE1jx', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(71, 'Eudora Hammes II', 'bjacobi@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'rTry5WNXwl', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(72, 'Dr. Jonatan Carter Jr.', 'barton77@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'yhxIkq9ti2', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(73, 'Sylvan Carter', 'njenkins@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'QxQBbsnVtq', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(74, 'Albert Kassulke', 'qkautzer@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'luZtbZhpFZ', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(75, 'Prof. Elwyn Torphy', 'obrekke@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'xU89D4U7b3', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(76, 'Imani Hoeger', 'treutel.nyasia@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'lUhwEaHDt3', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(77, 'Prof. Marcelino Bednar PhD', 'nikolas00@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'ajLcKQUZ6e', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(78, 'Mrs. Molly Greenfelder', 'rebeka40@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '3ypvM079C0', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(79, 'Josefina King', 'spencer.cruickshank@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'oI4BSxlhno', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(80, 'Dolores Wiegand', 'sauer.blair@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '8eUZXpVavL', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(81, 'Elissa Schmidt', 'golda.schoen@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '5tXaVKTg7i', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(82, 'Dr. Dee Anderson Sr.', 'ernest.mayert@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'VLRMOMuCnj', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(83, 'Dr. Marcellus Ziemann', 'mason19@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'pZetP8rA9V', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(84, 'Adella Collins Sr.', 'dion.hagenes@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'YQOtlgYkka', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(85, 'Ms. Katharina Towne', 'qzemlak@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '03XSf9BQ74', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(86, 'Miss Aliza Thompson III', 'ernser.lilly@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'idVaK7qb8i', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(87, 'Leland Stracke MD', 'tremblay.dolly@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'j1xbB8LqEz', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(88, 'Madge Runolfsson PhD', 'stephen.adams@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'l6eiD2qs7W', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(89, 'Joey Kris', 'ygottlieb@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'EnoI1GHinO', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(90, 'Dr. Gayle Gaylord IV', 'ksimonis@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '6BjKgWqkgY', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(91, 'Mr. Jarod Keebler Sr.', 'jalon.schoen@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'a2XZkvBJJx', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(92, 'Hellen Koelpin', 'stark.dorothy@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'IH44UbJStc', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(93, 'Larue Armstrong', 'lynn.schuster@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'HkEAnqn2Z3', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(94, 'Nakia Howe', 'xgaylord@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'PKj3EI5kHk', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(95, 'Dr. Juliana Cremin', 'kyle.greenholt@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'u7GOcCLK8c', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(96, 'Miss Lilliana Prohaska DDS', 'phamill@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'l9kgn2GCuE', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(97, 'Rozella Predovic', 'zulauf.reece@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'GZtaDG6jgy', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(98, 'Jameson Torp', 'green.elbert@example.com', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'DUuHczEbYW', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(99, 'Lauretta Brakus DVM', 'mark.bauch@example.org', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', '5oRC5NOXKN', '2023-12-19 18:01:07', '2023-12-19 18:01:07'),
(100, 'Amely Huels', 'rodriguez.randi@example.net', '2023-12-19 18:01:07', '$2y$12$rarm2zamSvUIHUXt/rDZXO9p6AQgzPFLEMPmYJcVNkAYL5G/cPele', 'v7Hl6MW6AF', '2023-12-19 18:01:07', '2023-12-19 18:01:07');

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
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_city_id_index` (`city_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_index` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
