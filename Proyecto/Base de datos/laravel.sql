-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2019 a las 11:38:55
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `franchises`
--

CREATE TABLE `franchises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordinates` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `franchises`
--

INSERT INTO `franchises` (`id`, `name`, `address`, `phone`, `email`, `coordinates`, `created_at`, `updated_at`) VALUES
(1, 'Majovi\'s Pizza Girona', 'C/ Migdia 37', '972 585 858', 'majovispizza_girona@majovispizza.com', '444444', NULL, NULL),
(2, 'Majovi\'s Pizza Platja d\'Aro', 'Avenida S\'Agaró, 1', '972 585 858', 'm', '4444444', NULL, NULL),
(3, 'Majovi\'s Pizza Sant Feliu de Guixols', 'Ctra. de Girona, Cami de Mas Trempat, 3', '972 585 858', 'm', '4444444', NULL, NULL),
(4, 'Majovi\'s Pizza - Palamós', 'C/ de Rafael Savall, 22', '972 585 858', 'm', '4444444', NULL, NULL),
(5, 'Majovi\'s Pizza Barcelona', 'Travessera de les Corts, 25', '972 585 858', 'm', '4444444', NULL, NULL),
(6, 'Majovi\'s Pizza Tarragona', 'Rambla Nova, 50', '972 585 858', 'm', '4444444', NULL, NULL),
(7, 'Majovi\'s Pizza Vidreres', 'C/ Pau Casals 23', '', '', '', NULL, NULL),
(8, 'Majovi\'s Pizza Palafrugell', 'C/ Daró 57A', '', '', '', NULL, NULL),
(9, 'Majovi\'s Pizza Arenys de Mar', 'Passeig de Ronda 1', '', '', '', NULL, NULL),
(10, 'Majovi\'s Pizza Mataró', 'C/ Aribau 8', '', '', '', NULL, NULL),
(11, 'Majovi\'s Pizza Tordera', 'C/ Joan Maragall 23', '', '', '', NULL, NULL),
(12, 'Majovi\'s Pizza Sant Celoni', 'C/ Major 240', '', '', '', NULL, NULL),
(13, 'Majovi\'s Pizza Premià de Mar', 'C/ Joan Prim 83', '', '', '', NULL, NULL),
(14, 'Majovi\'s Pizza Girona Centre', 'Carrer Migdia 16', '972 809 902', 'gironacentre@majovis.com', '41.9770666,2.8202097', NULL, NULL),
(15, 'Majovi\'s Pizza Figueres', 'Carrer Nou 29, Figueres', '972 809 902', 'figuerescentre@majovis.com', '42.2652818,2.9614636', NULL, NULL),
(16, 'Majovi\'s Pizza la Bisbal', 'Ctra. de Girona a Palamós, Km 23', '', '', '', NULL, NULL),
(17, 'Majovi\'s Pizza Lleida', 'Carrer Major, 47', '', '', '', NULL, NULL),
(18, 'Franquicia', '1', '123456789', 'qqq@aaa', '1,1', '2019-08-02 06:25:26', '2019-08-02 06:25:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historic_states`
--

CREATE TABLE `historic_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_state_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `historic_states`
--

INSERT INTO `historic_states` (`id`, `order_id`, `order_state_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-08-01 07:08:12', '2019-08-01 07:08:12'),
(2, 2, 1, '2019-08-01 07:49:18', '2019-08-01 07:49:18'),
(3, 3, 1, '2019-08-01 07:49:36', '2019-08-01 07:49:36'),
(4, 4, 1, '2019-08-01 07:51:45', '2019-08-01 07:51:45'),
(5, 5, 1, '2019-08-01 07:53:38', '2019-08-01 07:53:38'),
(6, 6, 1, '2019-08-01 08:06:28', '2019-08-01 08:06:28'),
(7, 7, 1, '2019-08-01 08:14:26', '2019-08-01 08:14:26'),
(8, 7, 2, '2019-08-01 08:16:26', '2019-08-01 08:16:26'),
(9, 6, 2, '2019-08-01 08:16:27', '2019-08-01 08:16:27'),
(10, 7, 3, '2019-08-01 08:16:28', '2019-08-01 08:16:28'),
(11, 6, 3, '2019-08-01 08:16:29', '2019-08-01 08:16:29'),
(12, 7, 4, '2019-08-01 08:16:30', '2019-08-01 08:16:30'),
(13, 6, 4, '2019-08-01 08:16:31', '2019-08-01 08:16:31'),
(14, 5, 2, '2019-08-01 08:16:59', '2019-08-01 08:16:59'),
(15, 4, 2, '2019-08-01 08:17:00', '2019-08-01 08:17:00'),
(16, 3, 2, '2019-08-01 08:17:01', '2019-08-01 08:17:01'),
(17, 1, 2, '2019-08-01 08:17:02', '2019-08-01 08:17:02'),
(18, 2, 2, '2019-08-01 08:17:02', '2019-08-01 08:17:02'),
(19, 1, 3, '2019-08-01 08:17:04', '2019-08-01 08:17:04'),
(20, 2, 3, '2019-08-01 08:17:04', '2019-08-01 08:17:04'),
(21, 1, 4, '2019-08-01 08:17:05', '2019-08-01 08:17:05'),
(22, 2, 4, '2019-08-01 08:17:08', '2019-08-01 08:17:08'),
(23, 5, 3, '2019-08-01 08:17:23', '2019-08-01 08:17:23'),
(24, 5, 4, '2019-08-01 08:17:25', '2019-08-01 08:17:25'),
(25, 8, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(26, 9, 1, '2019-08-01 08:29:24', '2019-08-01 08:29:24'),
(27, 8, 2, '2019-08-01 08:29:45', '2019-08-01 08:29:45'),
(28, 8, 3, '2019-08-01 08:29:46', '2019-08-01 08:29:46'),
(29, 8, 4, '2019-08-01 08:29:47', '2019-08-01 08:29:47'),
(30, 10, 1, '2019-08-01 08:31:05', '2019-08-01 08:31:05'),
(31, 4, 3, '2019-08-01 08:32:38', '2019-08-01 08:32:38'),
(32, 4, 4, '2019-08-01 08:32:40', '2019-08-01 08:32:40'),
(33, 3, 3, '2019-08-01 08:32:41', '2019-08-01 08:32:41'),
(34, 3, 4, '2019-08-01 08:32:43', '2019-08-01 08:32:43'),
(35, 9, 2, '2019-08-01 08:32:44', '2019-08-01 08:32:44'),
(36, 9, 3, '2019-08-01 08:32:45', '2019-08-01 08:32:45'),
(37, 9, 4, '2019-08-01 08:32:46', '2019-08-01 08:32:46'),
(38, 11, 1, '2019-08-01 08:34:27', '2019-08-01 08:34:27'),
(39, 11, 2, '2019-08-01 08:35:11', '2019-08-01 08:35:11'),
(40, 11, 3, '2019-08-01 08:35:12', '2019-08-01 08:35:12'),
(41, 11, 4, '2019-08-01 08:35:12', '2019-08-01 08:35:12'),
(42, 12, 1, '2019-08-01 08:36:58', '2019-08-01 08:36:58'),
(43, 10, 2, '2019-08-01 09:06:18', '2019-08-01 09:06:18'),
(44, 12, 2, '2019-08-01 09:06:23', '2019-08-01 09:06:23'),
(45, 10, 3, '2019-08-01 09:06:25', '2019-08-01 09:06:25'),
(46, 12, 3, '2019-08-01 09:06:34', '2019-08-01 09:06:34'),
(47, 12, 4, '2019-08-01 09:06:38', '2019-08-01 09:06:38'),
(48, 10, 4, '2019-08-01 09:06:41', '2019-08-01 09:06:41'),
(49, 13, 1, '2019-08-01 09:10:50', '2019-08-01 09:10:50'),
(50, 14, 1, '2019-08-01 11:39:43', '2019-08-01 11:39:43'),
(51, 15, 1, '2019-08-01 12:07:10', '2019-08-01 12:07:10'),
(52, 16, 1, '2019-08-01 12:21:56', '2019-08-01 12:21:56'),
(53, 17, 1, '2019-08-01 12:22:14', '2019-08-01 12:22:14'),
(54, 18, 1, '2019-08-01 13:35:32', '2019-08-01 13:35:32'),
(55, 13, 2, '2019-08-01 13:36:18', '2019-08-01 13:36:18'),
(56, 13, 3, '2019-08-01 13:36:21', '2019-08-01 13:36:21'),
(57, 13, 4, '2019-08-01 13:36:23', '2019-08-01 13:36:23'),
(58, 14, 2, '2019-08-01 13:36:25', '2019-08-01 13:36:25'),
(59, 17, 2, '2019-08-01 13:36:26', '2019-08-01 13:36:26'),
(60, 17, 3, '2019-08-01 13:36:27', '2019-08-01 13:36:27'),
(61, 17, 4, '2019-08-01 13:36:30', '2019-08-01 13:36:30'),
(62, 16, 2, '2019-08-01 13:36:33', '2019-08-01 13:36:33'),
(63, 16, 3, '2019-08-01 13:36:34', '2019-08-01 13:36:34'),
(64, 16, 4, '2019-08-01 13:36:34', '2019-08-01 13:36:34'),
(65, 19, 1, '2019-08-01 13:38:46', '2019-08-01 13:38:46'),
(66, 14, 3, '2019-08-01 13:39:55', '2019-08-01 13:39:55'),
(67, 14, 4, '2019-08-01 13:39:56', '2019-08-01 13:39:56'),
(68, 15, 2, '2019-08-01 13:46:09', '2019-08-01 13:46:09'),
(69, 15, 3, '2019-08-01 13:46:10', '2019-08-01 13:46:10'),
(70, 15, 4, '2019-08-01 13:46:11', '2019-08-01 13:46:11'),
(71, 18, 2, '2019-08-01 13:46:15', '2019-08-01 13:46:15'),
(72, 18, 3, '2019-08-01 13:46:16', '2019-08-01 13:46:16'),
(73, 18, 4, '2019-08-01 13:46:16', '2019-08-01 13:46:16'),
(74, 19, 2, '2019-08-01 13:46:18', '2019-08-01 13:46:18'),
(75, 19, 3, '2019-08-01 13:46:19', '2019-08-01 13:46:19'),
(76, 19, 4, '2019-08-01 13:46:20', '2019-08-01 13:46:20'),
(77, 20, 1, '2019-08-01 14:03:29', '2019-08-01 14:03:29'),
(78, 21, 1, '2019-08-01 14:03:39', '2019-08-01 14:03:39'),
(79, 22, 1, '2019-08-01 14:03:48', '2019-08-01 14:03:48'),
(80, 23, 1, '2019-08-01 15:06:33', '2019-08-01 15:06:33'),
(81, 24, 1, '2019-08-01 15:07:31', '2019-08-01 15:07:31'),
(82, 25, 1, '2019-08-01 15:53:25', '2019-08-01 15:53:25'),
(83, 26, 1, '2019-08-02 04:54:52', '2019-08-02 04:54:52'),
(84, 27, 1, '2019-08-02 04:58:54', '2019-08-02 04:58:54'),
(85, 28, 1, '2019-08-02 06:24:08', '2019-08-02 06:24:08'),
(86, 28, 2, '2019-08-02 06:26:45', '2019-08-02 06:26:45'),
(87, 28, 3, '2019-08-02 06:26:49', '2019-08-02 06:26:49'),
(88, 28, 4, '2019-08-02 06:26:50', '2019-08-02 06:26:50'),
(89, 27, 2, '2019-08-02 06:27:03', '2019-08-02 06:27:03'),
(90, 22, 2, '2019-08-02 06:27:04', '2019-08-02 06:27:04'),
(91, 25, 2, '2019-08-02 06:27:06', '2019-08-02 06:27:06'),
(92, 29, 1, '2019-08-02 06:36:10', '2019-08-02 06:36:10'),
(93, 27, 3, '2019-08-31 09:25:48', '2019-08-31 09:25:48'),
(94, 27, 4, '2019-08-31 09:25:50', '2019-08-31 09:25:50'),
(95, 26, 2, '2019-09-01 07:10:47', '2019-09-01 07:10:47'),
(96, 25, 3, '2019-09-01 07:10:48', '2019-09-01 07:10:48'),
(97, 24, 2, '2019-09-01 07:10:51', '2019-09-01 07:10:51'),
(98, 24, 3, '2019-09-01 07:10:52', '2019-09-01 07:10:52'),
(99, 24, 4, '2019-09-01 07:10:53', '2019-09-01 07:10:53'),
(100, 26, 3, '2019-09-01 07:11:53', '2019-09-01 07:11:53'),
(101, 26, 4, '2019-09-01 07:11:57', '2019-09-01 07:11:57'),
(102, 21, 2, '2019-09-01 07:11:59', '2019-09-01 07:11:59'),
(103, 21, 3, '2019-09-01 07:12:00', '2019-09-01 07:12:00'),
(104, 21, 4, '2019-09-01 07:12:00', '2019-09-01 07:12:00'),
(105, 22, 3, '2019-09-01 07:12:02', '2019-09-01 07:12:02'),
(106, 22, 4, '2019-09-01 07:12:02', '2019-09-01 07:12:02'),
(107, 20, 2, '2019-09-01 07:12:05', '2019-09-01 07:12:05'),
(108, 20, 3, '2019-09-01 07:12:06', '2019-09-01 07:12:06'),
(109, 20, 4, '2019-09-01 07:12:07', '2019-09-01 07:12:07'),
(110, 23, 2, '2019-09-01 07:12:11', '2019-09-01 07:12:11'),
(111, 30, 1, '2019-09-01 07:14:24', '2019-09-01 07:14:24'),
(112, 31, 1, '2019-09-01 07:14:34', '2019-09-01 07:14:34'),
(113, 30, 2, '2019-09-01 07:14:55', '2019-09-01 07:14:55'),
(114, 29, 2, '2019-09-01 07:14:57', '2019-09-01 07:14:57'),
(115, 29, 3, '2019-09-01 07:14:58', '2019-09-01 07:14:58'),
(116, 23, 3, '2019-09-01 07:15:01', '2019-09-01 07:15:01'),
(117, 23, 4, '2019-09-01 07:15:02', '2019-09-01 07:15:02'),
(118, 32, 1, '2019-09-01 07:23:33', '2019-09-01 07:23:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredients`
--

CREATE TABLE `ingredients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredient_category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredient_categories`
--

CREATE TABLE `ingredient_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_24_101342_create_promotions_table', 1),
(4, '2019_07_24_101429_create_menus_table', 1),
(5, '2019_07_24_101542_create_ingredients_table', 1),
(6, '2019_07_24_101816_create_product_categories_table', 1),
(7, '2019_07_24_101845_create_ingredient_categories_table', 1),
(8, '2019_07_24_101936_create_franchises_table', 1),
(9, '2019_07_24_101953_create_orders_table', 1),
(10, '2019_07_24_104359_create_historic_states_table', 1),
(11, '2019_07_24_104555_create_order_states_table', 1),
(12, '2019_07_24_104809_create_order_lines_table', 1),
(13, '2019_07_24_104833_create_products_table', 1),
(14, '2019_07_24_105112_create_product_sizes_table', 1),
(15, '2019_07_24_105435_create_type_masses_table', 1),
(16, '2019_07_24_105625_create_type_users_table', 1),
(17, '2019_07_26_114135_add_type_user_to_users_table', 1),
(18, '2019_08_05_140059_create', 2),
(19, '2019_08_05_140217_create_articulos', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `franchise_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `order_state_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `franchise_id`, `user_id`, `price`, `order_state_id`, `created_at`, `updated_at`) VALUES
(1, 15, 2, NULL, 4, '2019-08-01 07:08:12', '2019-08-01 08:17:05'),
(2, 15, 2, NULL, 4, '2019-08-01 07:49:18', '2019-08-01 08:17:08'),
(3, 15, 2, NULL, 4, '2019-08-01 07:49:36', '2019-08-01 08:32:43'),
(4, 1, 4, NULL, 4, '2019-08-01 07:51:45', '2019-08-01 08:32:40'),
(5, 1, 4, NULL, 4, '2019-08-01 07:53:38', '2019-08-01 08:17:25'),
(6, 1, 1, NULL, 4, '2019-08-01 08:06:28', '2019-08-01 08:16:31'),
(7, 1, 1, NULL, 4, '2019-08-01 08:14:26', '2019-08-01 08:16:30'),
(8, 3, 1, NULL, 4, '2019-08-01 08:19:04', '2019-08-01 08:29:47'),
(9, 1, 6, NULL, 4, '2019-08-01 08:29:24', '2019-08-01 08:32:46'),
(10, 1, 7, NULL, 4, '2019-08-01 08:31:05', '2019-08-01 09:06:41'),
(11, 1, 5, NULL, 4, '2019-08-01 08:34:27', '2019-08-01 08:35:12'),
(12, 5, 1, NULL, 4, '2019-08-01 08:36:58', '2019-08-01 09:06:38'),
(13, 15, 1, NULL, 4, '2019-08-01 09:10:50', '2019-08-01 13:36:23'),
(14, 1, 8, NULL, 4, '2019-08-01 11:39:43', '2019-08-01 13:39:56'),
(15, 5, 9, NULL, 4, '2019-08-01 12:07:10', '2019-08-01 13:46:11'),
(16, 1, 5, NULL, 4, '2019-08-01 12:21:56', '2019-08-01 13:36:34'),
(17, 1, 5, NULL, 4, '2019-08-01 12:22:14', '2019-08-01 13:36:30'),
(18, 1, 10, NULL, 4, '2019-08-01 13:35:32', '2019-08-01 13:46:16'),
(19, 1, 10, NULL, 4, '2019-08-01 13:38:46', '2019-08-01 13:46:20'),
(20, 1, 10, NULL, 4, '2019-08-01 14:03:29', '2019-09-01 07:12:07'),
(21, 1, 10, NULL, 4, '2019-08-01 14:03:39', '2019-09-01 07:12:00'),
(22, 1, 10, NULL, 4, '2019-08-01 14:03:48', '2019-09-01 07:12:02'),
(23, 1, 7, NULL, 4, '2019-08-01 15:06:33', '2019-09-01 07:15:02'),
(24, 1, 6, NULL, 4, '2019-08-01 15:07:31', '2019-09-01 07:10:53'),
(25, 1, 6, NULL, 3, '2019-08-01 15:53:25', '2019-09-01 07:10:48'),
(26, 1, 10, NULL, 4, '2019-08-02 04:54:51', '2019-09-01 07:11:57'),
(27, 1, 10, NULL, 4, '2019-08-02 04:58:54', '2019-08-31 09:25:50'),
(28, 2, 13, NULL, 4, '2019-08-02 06:24:08', '2019-08-02 06:26:50'),
(29, 2, 13, NULL, 3, '2019-08-02 06:36:10', '2019-09-01 07:14:58'),
(30, 1, 6, NULL, 2, '2019-09-01 07:14:24', '2019-09-01 07:14:55'),
(31, 1, 6, NULL, 1, '2019-09-01 07:14:34', '2019-09-01 07:14:34'),
(32, 1, 14, NULL, 1, '2019-09-01 07:23:33', '2019-09-01 07:23:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_lines`
--

CREATE TABLE `order_lines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantify` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `order_lines`
--

INSERT INTO `order_lines` (`id`, `order_id`, `product_id`, `quantify`, `created_at`, `updated_at`) VALUES
(1, 1, 10, 1, '2019-08-01 07:08:12', '2019-08-01 07:08:12'),
(2, 1, 11, 1, '2019-08-01 07:08:12', '2019-08-01 07:08:12'),
(3, 1, 12, 2, '2019-08-01 07:08:12', '2019-08-01 07:08:12'),
(4, 1, 51, 4, '2019-08-01 07:08:12', '2019-08-01 07:08:12'),
(5, 3, 2, 3, '2019-08-01 07:49:36', '2019-08-01 07:49:36'),
(6, 6, 11, 2, '2019-08-01 08:06:28', '2019-08-01 08:06:28'),
(7, 6, 51, 1, '2019-08-01 08:06:28', '2019-08-01 08:06:28'),
(8, 7, 11, 1, '2019-08-01 08:14:26', '2019-08-01 08:14:26'),
(9, 7, 12, 1, '2019-08-01 08:14:26', '2019-08-01 08:14:26'),
(10, 8, 10, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(11, 8, 11, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(12, 8, 12, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(13, 8, 15, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(14, 8, 14, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(15, 8, 13, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(16, 8, 16, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(17, 8, 1, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(18, 8, 2, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(19, 8, 3, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(20, 8, 6, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(21, 8, 5, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(22, 8, 4, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(23, 8, 7, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(24, 8, 50, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(25, 8, 51, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(26, 8, 52, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(27, 8, 58, 1, '2019-08-01 08:19:04', '2019-08-01 08:19:04'),
(28, 9, 2, 1, '2019-08-01 08:29:24', '2019-08-01 08:29:24'),
(29, 9, 1, 2, '2019-08-01 08:29:24', '2019-08-01 08:29:24'),
(30, 10, 11, 1, '2019-08-01 08:31:05', '2019-08-01 08:31:05'),
(31, 10, 10, 1, '2019-08-01 08:31:05', '2019-08-01 08:31:05'),
(32, 10, 12, 1, '2019-08-01 08:31:05', '2019-08-01 08:31:05'),
(33, 11, 11, 1, '2019-08-01 08:34:27', '2019-08-01 08:34:27'),
(34, 11, 12, 1, '2019-08-01 08:34:27', '2019-08-01 08:34:27'),
(35, 11, 10, 1, '2019-08-01 08:34:27', '2019-08-01 08:34:27'),
(36, 12, 47, 1, '2019-08-01 08:36:58', '2019-08-01 08:36:58'),
(37, 13, 11, 1, '2019-08-01 09:10:50', '2019-08-01 09:10:50'),
(38, 14, 10, 1, '2019-08-01 11:39:43', '2019-08-01 11:39:43'),
(39, 14, 11, 1, '2019-08-01 11:39:43', '2019-08-01 11:39:43'),
(40, 14, 2, 1, '2019-08-01 11:39:43', '2019-08-01 11:39:43'),
(41, 14, 1, 1, '2019-08-01 11:39:43', '2019-08-01 11:39:43'),
(42, 14, 51, 1, '2019-08-01 11:39:43', '2019-08-01 11:39:43'),
(43, 14, 52, 1, '2019-08-01 11:39:43', '2019-08-01 11:39:43'),
(44, 15, 51, 1, '2019-08-01 12:07:10', '2019-08-01 12:07:10'),
(45, 16, 51, 1, '2019-08-01 12:21:56', '2019-08-01 12:21:56'),
(46, 16, 50, 1, '2019-08-01 12:21:56', '2019-08-01 12:21:56'),
(47, 17, 2, 2, '2019-08-01 12:22:14', '2019-08-01 12:22:14'),
(48, 18, 11, 1, '2019-08-01 13:35:32', '2019-08-01 13:35:32'),
(49, 18, 10, 1, '2019-08-01 13:35:32', '2019-08-01 13:35:32'),
(50, 18, 12, 2, '2019-08-01 13:35:32', '2019-08-01 13:35:32'),
(51, 18, 2, 5, '2019-08-01 13:35:32', '2019-08-01 13:35:32'),
(52, 18, 47, 1, '2019-08-01 13:35:32', '2019-08-01 13:35:32'),
(53, 18, 50, 6, '2019-08-01 13:35:32', '2019-08-01 13:35:32'),
(54, 19, 2, 2, '2019-08-01 13:38:46', '2019-08-01 13:38:46'),
(55, 19, 3, 2, '2019-08-01 13:38:46', '2019-08-01 13:38:46'),
(56, 19, 1, 2, '2019-08-01 13:38:46', '2019-08-01 13:38:46'),
(57, 20, 11, 1, '2019-08-01 14:03:29', '2019-08-01 14:03:29'),
(58, 20, 10, 1, '2019-08-01 14:03:29', '2019-08-01 14:03:29'),
(59, 20, 12, 1, '2019-08-01 14:03:29', '2019-08-01 14:03:29'),
(60, 21, 2, 3, '2019-08-01 14:03:39', '2019-08-01 14:03:39'),
(61, 22, 47, 1, '2019-08-01 14:03:48', '2019-08-01 14:03:48'),
(62, 22, 46, 1, '2019-08-01 14:03:48', '2019-08-01 14:03:48'),
(63, 22, 48, 1, '2019-08-01 14:03:48', '2019-08-01 14:03:48'),
(64, 23, 11, 2, '2019-08-01 15:06:33', '2019-08-01 15:06:33'),
(65, 24, 2, 1, '2019-08-01 15:07:31', '2019-08-01 15:07:31'),
(66, 24, 1, 1, '2019-08-01 15:07:31', '2019-08-01 15:07:31'),
(67, 24, 3, 1, '2019-08-01 15:07:31', '2019-08-01 15:07:31'),
(68, 24, 6, 1, '2019-08-01 15:07:31', '2019-08-01 15:07:31'),
(69, 24, 5, 1, '2019-08-01 15:07:31', '2019-08-01 15:07:31'),
(70, 25, 1, 1, '2019-08-01 15:53:25', '2019-08-01 15:53:25'),
(71, 25, 10, 1, '2019-08-01 15:53:25', '2019-08-01 15:53:25'),
(72, 25, 11, 1, '2019-08-01 15:53:25', '2019-08-01 15:53:25'),
(73, 26, 11, 1, '2019-08-02 04:54:51', '2019-08-02 04:54:51'),
(74, 26, 10, 1, '2019-08-02 04:54:52', '2019-08-02 04:54:52'),
(75, 27, 51, 1, '2019-08-02 04:58:54', '2019-08-02 04:58:54'),
(76, 27, 47, 1, '2019-08-02 04:58:54', '2019-08-02 04:58:54'),
(77, 27, 46, 1, '2019-08-02 04:58:54', '2019-08-02 04:58:54'),
(78, 27, 48, 1, '2019-08-02 04:58:54', '2019-08-02 04:58:54'),
(79, 28, 10, 1, '2019-08-02 06:24:08', '2019-08-02 06:24:08'),
(80, 28, 4, 1, '2019-08-02 06:24:08', '2019-08-02 06:24:08'),
(81, 28, 53, 1, '2019-08-02 06:24:08', '2019-08-02 06:24:08'),
(82, 29, 10, 1, '2019-08-02 06:36:10', '2019-08-02 06:36:10'),
(83, 30, 2, 1, '2019-09-01 07:14:24', '2019-09-01 07:14:24'),
(84, 30, 11, 1, '2019-09-01 07:14:24', '2019-09-01 07:14:24'),
(85, 31, 51, 1, '2019-09-01 07:14:34', '2019-09-01 07:14:34'),
(86, 32, 10, 1, '2019-09-01 07:23:33', '2019-09-01 07:23:33'),
(87, 32, 11, 1, '2019-09-01 07:23:33', '2019-09-01 07:23:33'),
(88, 32, 1, 1, '2019-09-01 07:23:33', '2019-09-01 07:23:33'),
(89, 32, 2, 1, '2019-09-01 07:23:33', '2019-09-01 07:23:33'),
(90, 32, 47, 1, '2019-09-01 07:23:33', '2019-09-01 07:23:33'),
(91, 32, 51, 2, '2019-09-01 07:23:33', '2019-09-01 07:23:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_states`
--

CREATE TABLE `order_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `order_states`
--

INSERT INTO `order_states` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Preparacion', 'Preparación', NULL, NULL),
(2, 'Horno', 'Horon', NULL, NULL),
(3, 'Reparto', 'Reparto', NULL, NULL),
(4, 'finished', 'finished', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_size_id` int(11) NOT NULL,
  `type_mass_id` int(11) NOT NULL,
  `imatge` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `product_category_id`, `product_size_id`, `type_mass_id`, `imatge`, `created_at`, `updated_at`) VALUES
(1, 'Agua (1L)', 'Botella de agua Liviana', '1.55', 1, 1, 1, 'https://images.pizzahut.services/vol/phes/images/content/productos/ag_c.png', NULL, NULL),
(2, 'Kas de naranja (350 ml)', 'Lata de kas de naranja', '2.15', 1, 1, 1, 'https://images.pizzahut.services/vol/phes/images/content/productos/kana_c.png', NULL, NULL),
(3, 'Kas de limón (350 ml)', 'Lata de kas de limón', '2.15', 1, 1, 0, 'https://images.pizzahut.services/vol/phes/images/content/productos/kali_c.png', NULL, NULL),
(4, 'Pepsi (350 ml)', 'Lata de Pepsi', '2.15', 1, 1, 0, 'https://images.pizzahut.services/vol/phes/images/content/productos/lape_c.png', NULL, NULL),
(5, 'Pepsi Light (350 ml)', 'Lata de Pepsi light', '2.15', 1, 1, 0, 'https://images.pizzahut.services/vol/phes/images/content/productos/peli_c.png', NULL, NULL),
(6, 'Pepsi Max (350 ml)', 'Lata de Pepsi Max', '2.15', 1, 1, 0, 'https://images.pizzahut.services/vol/phes/images/content/productos/pemz_c.png', NULL, NULL),
(7, 'Cerveza Heineken (350 ml)', 'Lata de cerveza Heineken', '2.15', 1, 1, 0, 'https://images.pizzahut.services/vol/phes/images/content/productos/cehe_c.png', NULL, NULL),
(8, 'Cerveza Mahou Sin (350 ml)', 'Lata de cerveza Mahou Sin', '2.15', 1, 1, 0, 'https://images.pizzahut.services/vol/phes/images/content/productos/lala_c.png', NULL, NULL),
(9, 'Seven Up (350 ml)', 'Lata de Seven Up', '2.15', 1, 1, 0, 'https://images.pizzahut.services/vol/phes/images/content/productos/seup_c.png', NULL, NULL),
(10, 'Tándem Gourmet', 'Salsa Carbonara\r\nTopping a base de mozzarella\r\nBacon\r\nChampiñón\r\nCebolla\r\nFina masa\r\nSalsa Barbacoa\r\nCarne de vacuno\r\nPollo marinado', '11.99', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/tang_c.png', NULL, NULL),
(11, 'Barbacoa Gourmet', '5 quesos Gourmet\r\nSalsa barbacoa\r\nTopping a base de mozzarella\r\nBacon\r\nPollo marinado\r\nDoble carne de vacuno', '11.55', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/53bq_c.png', NULL, NULL),
(12, 'Carbonara Gourmet Queso', 'Deliciosa salsa carbonara acompañada de los mejores ingredientes y nuestra mezcla de 5 quesos (gouda, emmental, cheddar, mozzarela y havarti).', '11.55', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/tkgq_c.png', NULL, NULL),
(13, 'Carnívora Gourmet', 'La ideal para los amantes de la carne. Vacuno, pollo marinado, jamón york y pepperoni acompañados de nuestra mezcla de 5 quesos (gouda, emmental, cheddar, mozzarela y havarti).', '11.25', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/krni_c.png', NULL, NULL),
(14, 'Bacon Crispy Gourmet', 'El bacon ahumado y el crujiente se unen a nuestra mezcla de 5 quesos (gouda, emmental, cheddar, mozarella y havarti) y al resto de ingredientes.', '10.15', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/bkrg_c.png', NULL, NULL),
(15, 'Barbacoa con Cuarto de Libra', 'Para los más carnívoros: cuarto de libra de carne de vacuno (125 gr.), combinada con salsa barbacoa al bourbon y los mejores ingredientes.', '10.55', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/bqlb_c.png', NULL, NULL),
(16, 'Barbacoa Meat & Grill', 'Nuestra deliciosa salsa barbacoa acompañada con la mejor carne de vacuno y pulled pork, una sabrosa carne de cerdo cocinada a baja temperatura.', '12.55', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/pule_c.png', NULL, NULL),
(17, 'Carbonara Gourmet Cebolla', 'La inconfundible Carbonara de Telepizza con cebolla, champiñones, doble masa y una deliciosa mezcla de cinco quesos (gouda, emmental, cheddar, mozzarella y havarti).', '10.25', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/tkgo_c.png', NULL, NULL),
(18, 'Vulcano Nachos', 'Una forma diferente de disfrutar la pizza. Dipea los nachos en la fuente de queso cheddar del centro y termina a lo clásico con tus 2 ingredientes favoritos.', '12.35', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/pdip_c.png', NULL, NULL),
(19, 'La Ibérica', 'Jamón ibérico, tomate natural y aceite de oliva. Incorporamos los mejores ingredientes de la gastronomía española para crear la Telepizza más nuestra.', '12.55', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/iber_c.png', NULL, NULL),
(20, 'Burger', 'Telepizza Burger\r\nver +x\r\nPizza y hamburguesa se unen en una combinación deliciosa: carne de vacuno, pepinillo y salsa Burger acompañadas del mejor queso cheddar y tomate natural.', '11.55', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/p3pb_c.png', NULL, NULL),
(21, 'Sweet con Caja Roja', 'Nuestra masa de siempre cubierta de crujiente chocolate y avellana, con un toque de cacahuete y el auténtico y delicioso chocolate Nestlé.', '12.55', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/tskr_c.png', NULL, NULL),
(22, 'Pizza Bacon Hot Dog', 'Bacon, Salchicha laminada, salsa burger y topping a base de mozzarella.', '12.15', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/piba_c.png', NULL, NULL),
(23, 'Boloñesa', 'Boloñesa\r\nver +x\r\nDoble ración de carne de vacuno, topping a base de mozzarella y extra de salsa de tomate confitado.', '12.75', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/bolo_c.png', NULL, NULL),
(24, 'Pepe Peperoni', 'Prueba la nueva Telepizza del mes Pepe Peperoni: doble ración de pepperoni y topping a base de mozzarella. ¿Podrás resistirte?', '10.15', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/pepe_c.png', NULL, NULL),
(25, 'Barbacoa', 'Masa fresca, bacon, pollo, topping a base de mozzarella, salsa barbacoa y doble de carne de vacuno.', '10.55', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/pbbq_c.png', NULL, NULL),
(26, 'Carbonara', 'Masa fresca, doble de bacon, champiñón, salsa carbonara, topping a base de mozzarella y extra detopping a base de mozzarella', '10.15', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/pcaq_c.png', NULL, NULL),
(27, 'Carbonara Cebolla', 'Masa fresca, doble de bacon, champiñón, salsa carbonara, topping a base de mozzarella y cebolla .', '9.55', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/pcar_c.png', NULL, NULL),
(28, 'Hawaiana', 'Masa fresca, doble de york, piña, topping a base de mozzarella, tomate y extra de topping a base de mozzarella.', '11.75', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/phw_c.png', NULL, NULL),
(29, 'Steak House', 'Base clásica, salsa tomate & orégano, topping a base de mozzarella steak, carne de vacuno, cerdo nueva Orleans, bacon crispy y salsa steak & grill.', '10.75', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/psh_c.png', NULL, NULL),
(30, 'Bacon Cheeseburger', 'Masa fresca, bacon, mini hamburguesitas, queso cheddar, topping a base de mozzarella, salsa burger y tomate natural.', '10.15', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/pzbc_c.png', NULL, NULL),
(31, 'Bacon Crispy', 'Masa fresca, bacon, bacon crispy (crujiente), topping a base de mozzarella y salsa barbacoa.', '11.15', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/pzby_c.png', NULL, NULL),
(32, 'Barbacoa Crème Queso', 'Masa fresca, bacon, champiñón, pollo, topping a base de mozzarella, mezcla de salsa barbacoa y carbonara y extra de topping a base de mozzarella.', '12.15', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/pbcq_c.png', NULL, NULL),
(33, 'Barbacoa Crème Tomate', 'Masa fresca, bacon, champiñón, pollo, topping a base de mozzarella, mezcla de salsa barbacoa y carbonara y tomate natural.', '12.15', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/pbct_c.png', NULL, NULL),
(34, 'Especial de la casa cebolla', 'Masa fresca, bacon, cebolla fresca, pimiento morrón, pimiento verde, topping a base de mozzarella, carne de vacuno y tomate.', '11.55', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/esce_c.png', NULL, NULL),
(35, 'Especial de la casa champiñón', 'Masa fresca, bacon, pimiento morrón, pimiento verde, topping a base de mozzarella, carne de vacuno, tomate y champiñón.', '11.25', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/esch_c.png', NULL, NULL),
(36, 'Jalisco', 'Masa fresca, Aceitunas negras, Cebolla, Pimiento morrón, carne de vacuno', '11.75', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/jali_c.png', NULL, NULL),
(37, 'Supreme', 'Masa fresca, salsa carbonara, bacon, jamón, champiñón y extra de salsa barbacoa.', '10.25', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/pbcs_c.png', NULL, NULL),
(38, 'Delicheese', 'Telepizza Delicheese\r\nver +x\r\nMasa fresca, mezcla cinco quesos: Emmenthal, edam, mozzarella, provolone, cheddar, tomate confitado y orégano.', '10.75', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/p5qu_c.png', NULL, NULL),
(39, '4 Quesos', 'Masa fresca, mezcla cuatro quesos y tomate.', '9.75', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/p4qu_c.png', NULL, NULL),
(40, 'Formaggio', 'Masa fresca, salsa carbonara, queso de rulo, topping a base de mozzarella, queso provolone y queso suizo curado.', '11.55', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/pfor_c.png', NULL, NULL),
(41, 'Lasaña', 'Masa fresca, cebolla, topping a base de mozzarella, queso rallado, salsa bechamel, carne de vacuno, tomate, tomate confitado y tortilla de trigo.', '10.25', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/plne_c.png', NULL, NULL),
(42, 'Florentina', 'Florentina\r\nver +x\r\nMasa fresca, salsa de nata, rúcula, queso de rulo, topping a base de mozzarella y tomate natural.', '9.15', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/pfio_c.png', NULL, NULL),
(43, 'De la Huerta', 'Masa fresca, pimiento rojo asado, pimiento verde, cebolla, champiñón, aceitunas negras, topping a base de mozzarella y tomate.', '9.15', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/phue_c.png', NULL, NULL),
(44, 'César Deluxe', 'Base fina, topping a base de mozzarella deluxe, rúcula, pops de pollo, bacon crispy y salsa césar después del horno.', '10.75', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/pcdx_c.png', NULL, NULL),
(45, 'Infantil', 'Masa fresca, york, topping a base de mozzarella y tomate.', '7.99', 2, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/pinn_c.png', NULL, NULL),
(46, 'Menú Individual Pizza', 'Menú Individual Pizza.\r\nPonte las botas con una pizza individual al gusto (2 ing.), elige un entrante entre: dos fingers, tres panes de ajo o una ración de patatas gajo y a esto añádal', '12.15', 3, 1, 0, 'https://images.telepizza.com/vol/es/images/content/promociones/mi116_c.png', NULL, NULL),
(47, 'Menú Individual Pizza Especialidad', 'Tu pizza favorita, tu acompañamiento preferido y tu bebida más refrescante, ¿hace falta decir algo más? Pizza especialidad pequeña, dos fingers, tres panes de ajo o una ración de patatas gajo', '13.15', 3, 1, 0, 'https://images.telepizza.com/vol/es/images/content/promociones/nm003_c.png', NULL, NULL),
(48, 'Menú infantil', '1º pizza infantil (1ing), hamburguesa de pollo o pops de pollo. 2º Palitos La vaca que ríe o patatas sonrisa, bebida y de postre helado Haribo, Frigo pie, Yogur Kit Kat y un regalo sorpresa.', '6.15', 3, 1, 0, 'https://images.telepizza.com/vol/es/images/content/promociones/mif15_c.png', NULL, NULL),
(50, 'Helado Cornetto', 'Helado Cornetto Clásico 90ml', '1.15', 4, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/ccrs_c.png', NULL, NULL),
(51, 'Solero Frutos Rojos', '', '1.25', 4, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/sfro_c.png', NULL, NULL),
(52, 'Helado Cornetto Clásico 90ml', '', '1.15', 4, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/hcc9_c.png', NULL, NULL),
(53, 'B&J Wich Cookie', '', '3.25', 4, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/wcoo_c.png', NULL, NULL),
(54, 'Trufas Chocolate (4 unds.)', '', '2.25', 4, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/trf_c.png', NULL, NULL),
(55, 'Helado Magnum Caramel & Nut', '', '1.15', 4, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/hmcn_c.png', NULL, NULL),
(56, 'Multipack Mágnum Mini(6 unds.)', '', '5.99', 4, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/hmm6_c.png', NULL, NULL),
(57, 'Tarrina Magnum Classic (440ml)', '', '5.99', 4, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/tmcl_c.png', NULL, NULL),
(58, 'Tarrina Magnum Almond (440ml)', '', '5.99', 4, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/tmal_c.png', NULL, NULL),
(59, 'Tarrina Magnum White (440ml)', '', '5.99', 4, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/tmbl_c.png', NULL, NULL),
(60, 'Tarrina Magnum Blanco y Cookie', '', '5.99', 4, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/mwco_c.png', NULL, NULL),
(61, 'Tarrina Magnum Double Salted C', '', '5.99', 4, 1, 0, 'https://images.telepizza.com/vol/es/images/content/productos/masc_c.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Drinks', '', NULL, NULL),
(2, 'Pizza', 'sss', '2019-08-01 06:33:12', '2019-08-01 06:34:19'),
(3, 'Desserts', 'dddd', '2019-08-01 06:33:27', '2019-08-01 06:33:27'),
(4, 'Postres', 'ddd', '2019-08-01 06:33:36', '2019-08-01 06:34:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mod_preu` decimal(11,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `name`, `description`, `mod_preu`, `created_at`, `updated_at`) VALUES
(0, 'Placeholder', '', '0.00', NULL, NULL),
(1, 'Gran', '', '3.00', NULL, NULL),
(2, 'Petita', '', '1.00', NULL, NULL),
(3, 'Mitjana', '', '2.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_masses`
--

CREATE TABLE `type_masses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_users`
--

CREATE TABLE `type_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `type_users`
--

INSERT INTO `type_users` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', NULL, NULL),
(2, 'franchise', '', NULL, NULL),
(3, 'client', '', NULL, NULL),
(4, 'admin', NULL, NULL, NULL),
(5, 'franchise', NULL, NULL, NULL),
(6, 'client', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `franchise_id` bigint(20) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `franchise_id`, `remember_token`, `created_at`, `updated_at`, `type_user_id`) VALUES
(1, 'Marc', 'marcvifi10@outlook.es', NULL, '$2y$10$gI.JNiRop603yYC/DS5vueEdZMp0cW3dNKge8ZV7/cQjQSrVKDiw2', 'ffff', 15, NULL, '2019-07-31 07:14:17', '2019-08-01 09:10:50', 5),
(2, 'Admin', 'aa@aa.com', NULL, '$2y$10$NWrYATV88R5FmnuNKZ76tuCyM4mtTgvhMI3.YGRp7lxoeQ6zQtbAK', NULL, 15, NULL, '2019-08-01 05:01:51', '2019-08-01 07:07:44', 1),
(3, 'F', 'f@f.com', NULL, '123456789', NULL, 2, NULL, NULL, '2019-08-01 06:26:14', 2),
(4, 'F', 'a@a.com', NULL, '$2y$10$ZdU4oNPbCHXIk3OCboY/w.bYKZAlZS5TtH/iJY2K1XpF1ZeWCVkmO', NULL, 2, NULL, '2019-08-01 06:24:34', '2019-08-01 06:24:34', 2),
(5, 'aa', 'marcvifi10@gmail.com', NULL, '$2y$10$ywi6JlffhJngVsGMktrg7upMhrz6SZqLBuXf0dqkMLrNZLjyQUtG.', NULL, 1, NULL, '2019-08-01 08:27:58', '2019-08-01 08:27:58', 3),
(6, 'd', 'd@d.com', NULL, '$2y$10$MVj2vK6l.jYNX473JrUGn.mckM8Vb.KhHh0rXDTB6VDsyo1PH2T0K', NULL, 1, NULL, '2019-08-01 08:29:15', '2019-08-01 08:29:15', 3),
(7, 'ee', 'ee@ee.com', NULL, '$2y$10$OHp3ul.rKgY2zLauMlr5pu.QxorCYdcpU3lZgvIv5bfEVrzgXCF8u', 'Calle dccc', 1, NULL, '2019-08-01 08:30:56', '2019-08-01 08:30:56', 3),
(8, 'Compra', 'compra@compra.com', NULL, '$2y$10$mc8s8eANINyHIhTMm760WOg/bONJPFTjliAxrfUegZScgPcCZMIzy', 'Carrer del Sol', 1, NULL, '2019-08-01 11:39:23', '2019-08-01 11:39:23', 3),
(9, 'Fran', 'fran@fran.com', NULL, '$2y$10$/.twGpBmixjBuBAMtNYH4u53fzPd1rvgIuZ1m5156vvhoH6jzca72', 'ssss', 5, NULL, '2019-08-01 11:46:00', '2019-08-01 11:46:00', 3),
(10, 'Alex', 'alex@gmail.com', NULL, '$2y$10$y/CmHXCpNLTGv0HnLCXS/.VaDRyZnC.CgWm25ljKX74ooTx9ES/XK', 'Carrer del Sol 21', 1, NULL, '2019-08-01 13:34:52', '2019-08-01 13:34:52', 3),
(11, 'Admin', 'admin@admin.com', NULL, '$2y$10$givoSamGjAS0mcssrrGXdedC2wWGUpD5NLRvgK8V3O8DeXIXbedSO', 'Carrer del ......', 1, NULL, '2019-08-02 05:12:52', '2019-08-02 05:12:52', 1),
(12, 'Franquicia', 'franquicia@franquicia.com', NULL, '$2y$10$fIuRWAkl1zW0Eo2rMj28ZewdtyS1Vni3szfNVOYAcpYYsLu1DXwlm', 'Carrer del ....', 1, NULL, '2019-08-02 05:14:28', '2019-08-02 05:14:28', 2),
(13, 'Marc', 'marc@gmail.com', NULL, '$2y$10$exRzGiX/NPtBcbIdh6neOu4nUkeHM4Bi3lE73EdZw1ajpJ3IPmvdK', 'Carrer ....', 2, NULL, '2019-08-02 06:23:37', '2019-08-02 06:24:08', 3),
(14, 'Cliente', 'cliente@gmail.com', NULL, '$2y$10$O8ilf95nROOnJ4Hgwq5EdeK7qNNnNTvJGhLn5dNz3rbmY5NOZs7aq', 'Calle ....', 1, NULL, '2019-09-01 07:22:28', '2019-09-01 07:22:28', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `franchises`
--
ALTER TABLE `franchises`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historic_states`
--
ALTER TABLE `historic_states`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingredient_categories`
--
ALTER TABLE `ingredient_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `order_lines`
--
ALTER TABLE `order_lines`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `order_states`
--
ALTER TABLE `order_states`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `type_masses`
--
ALTER TABLE `type_masses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `type_users`
--
ALTER TABLE `type_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `franchises`
--
ALTER TABLE `franchises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `historic_states`
--
ALTER TABLE `historic_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT de la tabla `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingredient_categories`
--
ALTER TABLE `ingredient_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `order_lines`
--
ALTER TABLE `order_lines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `order_states`
--
ALTER TABLE `order_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `type_masses`
--
ALTER TABLE `type_masses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `type_users`
--
ALTER TABLE `type_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
