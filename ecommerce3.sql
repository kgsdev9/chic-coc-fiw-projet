-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 20 jan. 2023 à 18:24
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecommerce3`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Comment Publier un article sur CHIC COQ', 'Comment Publier un article sur DSTORE POULET', 'Copyright © 2023 Ganic All Rights ReservedCopyright', '1673699666.jpg', '2022-12-23 17:20:26', '2023-01-14 12:34:26'),
(2, 'Comment Publier un article sur CHIC COQ', 'Comment Publier un article sur DSTORE POULET', 'Copyright © 2023 Ganic All Rights ReservedCopyright', '1673699643.jpg', '2022-12-23 17:20:26', '2023-01-14 12:34:41');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'POULET DE CHAIR', NULL, 'Un Poulet de chair, appelé aussi poulet à frire ou Poulet à griller est une poule domestique', '1673699283.jpg', NULL, '2023-01-14 12:28:03'),
(2, 'PONDEUSE', NULL, 'POULET PONDEUSE', '1673699329.png', NULL, '2023-01-14 12:28:49'),
(3, 'POULET CRIKA', NULL, 'POULET CRIKA', '1673699403.jpg', NULL, '2023-01-14 12:30:03'),
(4, 'PLAQUETTES D\'OEUFS', NULL, 'PLAQUETTE D\'OEUF', '1673699427.jpg', NULL, '2023-01-14 12:30:27'),
(5, 'DEMI PLAQUETTE D\'OEUF', NULL, 'DEMI PLAQUETTE D\'OEUF', '1673699458.jpg', NULL, '2023-01-14 12:30:58'),
(6, 'POUSSIN', NULL, 'POUSSIN', '1673699480.jpg', '2022-12-23 19:38:40', '2023-01-14 12:31:20');

-- --------------------------------------------------------

--
-- Structure de la table `coeurs`
--

CREATE TABLE `coeurs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `coeurs`
--

INSERT INTO `coeurs` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2022-12-23 18:29:21', '2022-12-23 18:29:21'),
(2, 3, 1, '2022-12-23 19:34:21', '2022-12-23 19:34:21');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `rating` int DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `rating`, `content`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'uuu', 1, 34, '2022-12-23 12:17:49', '2022-12-23 12:17:49');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_16_191108_create_roles_table', 1),
(6, '2022_12_18_221114_add_role_id_to_users', 1),
(7, '2022_12_18_225807_create_categories_table', 1),
(8, '2022_12_18_225829_create_products_table', 1),
(9, '2022_12_18_231027_create_orders_table', 1),
(10, '2022_12_19_101511_create_comments_table', 1),
(11, '2022_12_19_120628_create_articles_table', 1),
(12, '2022_12_19_162535_create_orders_produtcs_table', 1),
(13, '2022_12_19_212203_add_description_to_products', 1),
(14, '2022_12_20_183730_add_code_to_orders', 1),
(15, '2022_12_20_222423_create_coeurs_table', 1),
(16, '2022_12_20_115326_create_images_table', 2),
(17, '2022_12_23_204934_add_phone_to_users', 2),
(18, '2023_01_19_133204_add_commune_to_orders_table', 3),
(19, '2023_01_19_133510_add_commune_to_orders_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_delivry` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `fullname`, `adresse_delivry`, `phone`, `quantity`, `user_id`, `created_at`, `updated_at`, `code`, `commune`) VALUES
(1, 'stephane', 'FGHGHGHGHGHG', '045956566', '15', 1, '2022-12-23 12:05:09', '2022-12-23 12:05:09', 'ECOMMERCE402147872', ''),
(2, 'stephane', 'FFGLKLHHJHJKK', '48566778', '10', 1, '2022-12-23 12:13:04', '2022-12-23 12:13:04', 'ECOMMERCE322334646', ''),
(3, 'KAHOUO GUY STEPHANE', 'je suis dans la ville de koumassi', '0768365866', '14', 1, '2022-12-23 20:42:45', '2022-12-23 20:42:45', 'ECOMMERCE120308859', ''),
(4, 'stephane guy', 'FFDFGFGHGHGHGH', '09854966776', '1', 1, '2022-12-23 20:55:08', '2022-12-23 20:55:08', 'ECOMMERCE123745228', ''),
(5, 'papa de guy', 'DFGHHJHJHJJH', '856969796776', '5', 1, '2022-12-23 20:57:03', '2022-12-23 20:57:03', 'ECOMMERCE124778827', ''),
(6, 'Manasse', 'yopougon', '0708375478', '1', 102, '2022-12-24 13:51:01', '2022-12-24 13:51:01', 'ECOMMERCE316880186', ''),
(7, 'oyewumo', 'abobo', '010203541', '1', 102, '2022-12-24 13:54:52', '2022-12-24 13:54:52', 'ECOMMERCE262574154', ''),
(8, 'mana', 'liberte', '0708375478', '1', 102, '2023-01-15 12:16:39', '2023-01-15 12:16:39', 'ECOMMERCE101863756', ''),
(9, 'stephane', 'FDFGHJHHJHJ', '65768787', '3', 2, '2023-01-15 12:20:35', '2023-01-15 12:20:35', 'ECOMMERCE33820562', ''),
(10, 'stephane guy', 'STEPHANE GUY', '05676888', '3', 3, '2023-01-20 17:01:40', '2023-01-20 17:01:40', 'ECOMMERCE391950308', 'Yopougon'),
(11, 'dfghhhh', 'ghjkk', '4567788887878', '3', 3, '2023-01-20 17:08:29', '2023-01-20 17:08:29', 'ECOMMERCE308288870', 'Bingerville'),
(12, 'fjjjkklll', 'ghghghghghghgh', '0768365866', '3', 3, '2023-01-20 17:09:36', '2023-01-20 17:09:36', 'ECOMMERCE377199116', 'Koumassi');

-- --------------------------------------------------------

--
-- Structure de la table `orders_produtcs`
--

CREATE TABLE `orders_produtcs` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `payement_status` tinyint NOT NULL DEFAULT '0',
  `amount` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `orders_produtcs`
--

INSERT INTO `orders_produtcs` (`id`, `product_id`, `order_id`, `quantity`, `payement_status`, `amount`, `created_at`, `updated_at`) VALUES
(1, 11, 1, 1, 0, 113, '2022-12-23 12:05:09', '2022-12-23 12:05:09'),
(2, 12, 1, 1, 0, 110, '2022-12-23 12:05:09', '2022-12-23 12:05:09'),
(3, 19, 1, 1, 0, 189, '2022-12-23 12:05:09', '2022-12-23 12:05:09'),
(4, 18, 1, 1, 0, 106, '2022-12-23 12:05:09', '2022-12-23 12:05:09'),
(5, 17, 1, 1, 0, 119, '2022-12-23 12:05:09', '2022-12-23 12:05:09'),
(6, 28, 1, 7, 0, 973, '2022-12-23 12:05:09', '2022-12-23 12:05:09'),
(7, 27, 1, 1, 0, 131, '2022-12-23 12:05:09', '2022-12-23 12:05:09'),
(8, 29, 1, 1, 0, 141, '2022-12-23 12:05:09', '2022-12-23 12:05:09'),
(9, 30, 1, 1, 0, 195, '2022-12-23 12:05:09', '2022-12-23 12:05:09'),
(10, 20, 2, 10, 0, 1570, '2022-12-23 12:13:04', '2022-12-23 12:13:04'),
(11, 13, 3, 5, 0, 615, '2022-12-23 20:42:45', '2022-12-23 20:42:45'),
(12, 3, 3, 2, 0, 200, '2022-12-23 20:42:45', '2022-12-23 20:42:45'),
(13, 5, 3, 1, 0, 174, '2022-12-23 20:42:45', '2022-12-23 20:42:45'),
(14, 6, 3, 1, 0, 176, '2022-12-23 20:42:45', '2022-12-23 20:42:45'),
(15, 2, 3, 1, 0, 191, '2022-12-23 20:42:45', '2022-12-23 20:42:45'),
(16, 4, 3, 1, 0, 151, '2022-12-23 20:42:45', '2022-12-23 20:42:45'),
(17, 1, 3, 2, 0, 208, '2022-12-23 20:42:45', '2022-12-23 20:42:45'),
(18, 51, 3, 1, 0, 45, '2022-12-23 20:42:45', '2022-12-23 20:42:45'),
(19, 13, 4, 1, 0, 123, '2022-12-23 20:55:08', '2022-12-23 20:55:08'),
(20, 2, 5, 2, 0, 382, '2022-12-23 20:57:03', '2022-12-23 20:57:03'),
(21, 4, 5, 1, 0, 151, '2022-12-23 20:57:03', '2022-12-23 20:57:03'),
(22, 3, 5, 2, 0, 200, '2022-12-23 20:57:04', '2022-12-23 20:57:04'),
(23, 4, 6, 1, 0, 151, '2022-12-24 13:51:02', '2022-12-24 13:51:02'),
(24, 5, 7, 1, 0, 174, '2022-12-24 13:54:52', '2022-12-24 13:54:52'),
(25, 5, 8, 1, 0, 3000, '2023-01-15 12:16:40', '2023-01-15 12:16:40'),
(26, 15, 9, 1, 0, 700, '2023-01-15 12:20:35', '2023-01-15 12:20:35'),
(27, 3, 9, 2, 0, 7000, '2023-01-15 12:20:35', '2023-01-15 12:20:35'),
(28, 2, 10, 1, 0, 3500, '2023-01-20 17:01:40', '2023-01-20 17:01:40'),
(29, 3, 10, 1, 0, 3500, '2023-01-20 17:01:40', '2023-01-20 17:01:40'),
(30, 4, 10, 1, 0, 1500, '2023-01-20 17:01:40', '2023-01-20 17:01:40'),
(31, 2, 11, 1, 0, 3500, '2023-01-20 17:08:29', '2023-01-20 17:08:29'),
(32, 3, 11, 1, 0, 3500, '2023-01-20 17:08:29', '2023-01-20 17:08:29'),
(33, 4, 11, 1, 0, 1500, '2023-01-20 17:08:29', '2023-01-20 17:08:29'),
(34, 2, 12, 1, 0, 3500, '2023-01-20 17:09:36', '2023-01-20 17:09:36'),
(35, 3, 12, 1, 0, 3500, '2023-01-20 17:09:36', '2023-01-20 17:09:36'),
(36, 4, 12, 1, 0, 1500, '2023-01-20 17:09:36', '2023-01-20 17:09:36');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `img_one` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_three` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tendance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `populaire` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `quantity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `descritpion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `statut`, `price`, `img_one`, `img_two`, `img_three`, `tendance`, `populaire`, `quantity`, `category_id`, `created_at`, `updated_at`, `descritpion`) VALUES
(1, 'POULET DE CHAIR 1,7 - 2 KG', 'POULET DE CHAIR 1,7 - 2 KG', NULL, 3300, '1672246252.jpg', '1671818744.png', '1671818744.png', '0', '1', '100', 1, '2022-12-23 10:36:31', '2022-12-28 16:57:17', 'Veritatis est accusamus et. Et optio nesciunt voluptatem perspiciatis fugiat rerum. Nam et deserunt commodi et dolore. Eligendi delectus eveniet rem cupiditate.'),
(2, 'POULET DE CHAIR 2 - 3 KG', 'POULET DE CHAIR 2 - 3 KG', NULL, 3500, '1672246442.jpg', '1671819429.png', '1671819429.png', '1', '0', '100', 1, '2022-12-23 10:36:31', '2022-12-28 16:58:01', 'Qui non saepe fugit eligendi ab aliquam nihil in. Alias aut natus maxime sed saepe cumque sit. Quas suscipit ratione officiis exercitationem. Est saepe inventore odio cupiditate aut.'),
(3, 'POULET FUME', 'POULET FUME', NULL, 3500, '1672247226.jpg', '1671819516.png', '1671819516.png', '1', '0', '1000', 1, '2022-12-23 10:36:31', '2022-12-28 17:07:06', 'Pariatur eligendi quas tempore facilis. Similique at enim commodi mollitia et. Ratione nostrum est qui quod illo sit. Aspernatur soluta consequatur quia optio est enim dignissimos dolores. Aut et voluptatem eaque rem optio voluptatibus.'),
(4, 'MORCEAU DE POULET 1,5 KG', 'MORCEAU DE POULET 1,5 KG', NULL, 1500, '1672246849.jpg', '1671822364.png', '1671822364.jpg', '1', '1', '500', 3, '2022-12-23 10:36:31', '2022-12-28 17:05:13', 'Et optio sit neque excepturi omnis. Dolore et alias recusandae dolorem. Eius et accusamus veritatis consequatur temporibus. Voluptas velit sit libero magnam. Sunt ut deleniti sit et dolores.'),
(5, 'POULET DE CHAIR 1,1 - 1,3 KG', 'POULET DE CHAIR 1,1 - 1,3 KG', NULL, 3000, '1672246956.jpg', '1671822414.png', '1671822414.png', '1', '1', '200', 1, '2022-12-23 10:36:31', '2022-12-28 17:05:42', 'Nemo hic omnis eos recusandae. Quia ut sit deserunt possimus at. Quis sint doloribus omnis suscipit aliquam necessitatibus autem tempore. Eum molestiae sed provident rem commodi qui quae eos. Cumque adipisci eos fugit illum quo voluptatibus. Quod quo error dolores quidem.'),
(6, 'POULET DE CHAIR 1,5 - 1,8 KG', 'POULET DE CHAIR 1,5 - 1,8 KG', NULL, 3200, '1672247527.jpg', '1671822634.jpg', '1671822634.png', '0', '0', '126', 1, '2022-12-23 10:36:31', '2022-12-28 17:12:07', 'POULET AVEC UN ATOUT CAPITAL'),
(7, 'POULET DE CHAIR 1 - 1,2 KG', 'POULET DE CHAIR 1 - 1,2 KG', NULL, 2800, '1672247623.jpg', '1671837127.png', '1671837127.png', '0', '1', '125', 1, '2022-12-23 10:36:31', '2022-12-28 17:13:43', 'Non molestiae laborum alias velit non ut. Et dolores consequatur possimus tenetur rerum. Voluptas vel explicabo mollitia eius animi modi et. Enim quas harum facilis ex quia sunt.'),
(8, 'POULET CHAIR DECOUPE', 'POULET CHAIR DECOUPE', NULL, 7300, '1672247694.jpg', 'https://via.placeholder.com/640x480.png/00cccc?text=qui', 'https://via.placeholder.com/640x480.png/00aa22?text=praesentium', '0', '0', '198', 3, '2022-12-23 10:36:31', '2022-12-28 17:14:54', 'Quasi perspiciatis non quasi possimus. Voluptatem vel voluptas delectus enim. Provident nemo itaque doloremque qui modi non.'),
(9, 'POULET DE CHAIR 1,5 - 1,8 KG', 'POULET DE CHAIR 1,5 - 1,8 KG', NULL, 3200, '1672247796.jpg', 'https://via.placeholder.com/640x480.png/00cc55?text=eos', 'https://via.placeholder.com/640x480.png/003322?text=velit', '0', '1', '134', 4, '2022-12-23 10:36:31', '2022-12-28 17:16:36', 'Totam aspernatur quidem ipsa quia et. Unde et voluptatibus eos laborum veniam. Officiis quo ducimus odio voluptates. Omnis est facere mollitia eos necessitatibus sint tenetur voluptatem. Ut quia in amet dignissimos labore beatae similique. Dolor maxime eos eum et et similique esse.'),
(10, 'PLAQUETTE D\'OEUF', 'PLAQUETTE D\'OEUF', NULL, 2500, '1672248311.jpg', 'https://via.placeholder.com/640x480.png/00ddee?text=repudiandae', 'https://via.placeholder.com/640x480.png/0055aa?text=fuga', '0', '0', '100', 4, '2022-12-23 10:36:31', '2022-12-28 17:25:11', 'Libero nihil occaecati consectetur voluptate qui deleniti. Repellendus a velit rerum saepe doloremque. Neque non voluptas doloribus eum. Necessitatibus eveniet molestiae sunt molestias ut.'),
(11, 'POULET DE CHAIR 1 ,4- 1,6 KG', 'POULET DE CHAIR 1 ,4- 1,6 KG', NULL, 2400, '1672248387.jpg', 'https://via.placeholder.com/640x480.png/002266?text=consequatur', 'https://via.placeholder.com/640x480.png/000044?text=dolores', '1', '1', '134', 1, '2022-12-23 10:36:31', '2022-12-28 17:26:48', 'Vel sed qui qui accusamus tempora. Qui officiis sapiente dolorem non et voluptatem ullam. Voluptates libero delectus quam veniam sed non vel. Tenetur non sit vel est ex. Fugiat qui ut non explicabo cum non laudantium ut. Iure quibusdam molestiae rerum eum.'),
(12, 'POULET CHAIR DECOUPE 1,3-15 KG', 'POULET CHAIR DECOUPE 1,3-15 KG', NULL, 4300, '1672248480.jpg', 'https://via.placeholder.com/640x480.png/002200?text=asperiores', 'https://via.placeholder.com/640x480.png/0044cc?text=possimus', '0', '0', '139', 3, '2022-12-23 10:36:31', '2022-12-28 17:28:00', 'Atque provident quam non praesentium nostrum et nesciunt. Voluptatem sit ab numquam tempora saepe. Dolor sint molestias ipsam eveniet quisquam. Autem omnis et voluptate et aut voluptate omnis.'),
(13, 'POULET CHAIR DECOUPE 2G', 'POULET CHAIR DECOUPE 2G', NULL, 3800, '1672248840.jpg', '1671823061.png', '1671823061.png', '1', '1', '187', 3, '2022-12-23 10:36:31', '2022-12-28 17:34:00', 'Aspernatur aliquam perspiciatis ipsum incidunt eos. Rerum minus ipsam dolore dicta fuga molestiae. Totam molestiae alias delectus cum est. Aut culpa qui voluptas et ipsam hic.'),
(14, 'POUSSIN', 'POUSSIN', NULL, 500, '1672248660.jpg', 'https://via.placeholder.com/640x480.png/00ccff?text=ab', 'https://via.placeholder.com/640x480.png/00bb88?text=vel', '0', '0', '197', 6, '2022-12-23 10:36:31', '2022-12-28 17:31:00', 'Reprehenderit tenetur dolorem delectus similique quam ipsum et. Voluptas laudantium ducimus ex fugit provident aspernatur similique. Magni itaque impedit culpa nemo.'),
(15, 'POUSSIN', 'POUSSIN', NULL, 700, '1672248702.jpg', 'https://via.placeholder.com/640x480.png/006688?text=molestiae', 'https://via.placeholder.com/640x480.png/004499?text=rem', '0', '1', '169', 6, '2022-12-23 10:36:31', '2022-12-28 17:31:42', 'Unde ut culpa consequatur reprehenderit dicta. Porro quae facilis vel consequatur consectetur et. Recusandae quibusdam excepturi incidunt quis fuga soluta. Sed suscipit et reprehenderit labore quidem vel.'),
(16, 'PLAQUETTE D\'OEUF', 'PLAQUETTE D\'OEUF', NULL, 2200, '1672248616.jpg', 'https://via.placeholder.com/640x480.png/000000?text=voluptates', 'https://via.placeholder.com/640x480.png/003322?text=non', '0', '0', '185', 4, '2022-12-23 10:36:31', '2022-12-28 17:30:16', 'Sint animi labore maxime possimus ducimus quaerat. Praesentium dolorem ea sint. Et voluptatem magnam eveniet. Aliquid suscipit esse est distinctio dicta unde nisi ratione.'),
(17, 'DEMI PLAQUETTE D\'OEUF', 'DEMI PLAQUETTE D\'OEUF', NULL, 1300, '1672248752.jpg', 'https://via.placeholder.com/640x480.png/0011ff?text=nesciunt', 'https://via.placeholder.com/640x480.png/0022dd?text=quos', '1', '1', '145', 5, '2022-12-23 10:36:31', '2022-12-28 17:32:32', 'Illo iusto quia illo veniam. Sit esse voluptatem quisquam cupiditate ullam et. Unde non officia pariatur consequuntur animi est ut voluptatem.'),
(18, 'POULET DE CHAIR 1 ,4- 1,6 KG', 'POULET DE CHAIR 1 ,4- 1,6 KG', NULL, 2600, '1672248904.jpg', 'https://via.placeholder.com/640x480.png/004422?text=eius', 'https://via.placeholder.com/640x480.png/0088cc?text=ut', '1', '1', '159', 1, '2022-12-23 10:36:31', '2022-12-28 17:35:04', 'Saepe corporis sequi consectetur neque in. Veniam amet ea dolores reprehenderit et perferendis corporis. Quae culpa nisi quia. Nostrum praesentium quam officiis saepe.'),
(19, 'PONDEUSE - 2KG', 'PONDEUSE - 2KG', NULL, 4300, '1672248973.jpg', 'https://via.placeholder.com/640x480.png/00ffee?text=commodi', 'https://via.placeholder.com/640x480.png/003355?text=et', '0', '0', '1800', 2, '2022-12-23 10:36:31', '2022-12-28 17:36:13', 'Consequatur adipisci magni aut quis unde labore. Odit praesentium dolorem nihil est non. Modi esse pariatur distinctio distinctio voluptatem ea facere. Dignissimos autem placeat neque sed quis error. Sapiente vel voluptates autem et. Qui alias sapiente hic velit nulla sapiente est aut.'),
(20, 'POULET CHAIR DECOUPE - 2KG', 'POULET CHAIR DECOUPE - 2KG', NULL, 2600, '1672249136.jpg', 'https://via.placeholder.com/640x480.png/005577?text=et', 'https://via.placeholder.com/640x480.png/000033?text=et', '0', '1', '1120', 3, '2022-12-23 10:36:31', '2022-12-28 18:10:02', 'Placeat a minima laborum doloremque id neque. Facilis vel aut harum eum consequatur. Vel quas explicabo aut et et aspernatur. Similique id veritatis pariatur et velit. Et magni culpa aperiam est in minima ullam.'),
(21, 'POULET CHAIR DECOUPE 2,5KG', 'POULET CHAIR DECOUPE 2,5KG', NULL, 4600, '1672249244.jpg', 'https://via.placeholder.com/640x480.png/00ffdd?text=adipisci', 'https://via.placeholder.com/640x480.png/0044dd?text=architecto', '0', '1', '173', 1, '2022-12-23 10:36:31', '2022-12-28 17:40:44', 'Neque ut voluptatum aut ut ipsum rerum. Ratione sed rem molestias cum reprehenderit. Consequuntur incidunt et optio ex nulla impedit impedit. Blanditiis doloribus nihil dolor illo.'),
(22, 'PONDEUSE - 2,5KG', 'PONDEUSE - 2,5KG', NULL, 5000, '1672249303.jpg', 'https://via.placeholder.com/640x480.png/00aa44?text=debitis', 'https://via.placeholder.com/640x480.png/00bb33?text=et', '0', '1', '300', 2, '2022-12-23 10:36:31', '2022-12-28 17:41:43', 'Vero quos accusamus facilis tempora sint doloribus est. Dolorem sint ex minima cum quasi voluptates. Aut doloremque quo adipisci autem. Ab et et dolorum ullam culpa. Reiciendis tempora sit totam aut libero nostrum. Autem sit nobis veniam est.'),
(23, 'PONDEUSE DECOUPEE - 2KG', 'PONDEUSE DECOUPEE - 2KG', NULL, 8300, '1672249482.jpg', 'https://via.placeholder.com/640x480.png/0055ff?text=et', 'https://via.placeholder.com/640x480.png/002299?text=asperiores', '1', '0', '150', 2, '2022-12-23 10:36:31', '2022-12-28 17:44:42', 'Inventore assumenda enim pariatur et. Similique quod iste molestias maiores qui aliquid hic. Sit voluptates et temporibus rerum culpa velit dolor dolores. Voluptas corporis eum sunt excepturi rerum hic deserunt.'),
(24, 'POULET DE CHAIR 1 ,4- 1,6 KG', 'POULET DE CHAIR 1 ,4- 1,6 KG', NULL, 2800, '1672249523.jpg', 'https://via.placeholder.com/640x480.png/0044ff?text=fugiat', 'https://via.placeholder.com/640x480.png/0066aa?text=hic', '0', '0', '158', 2, '2022-12-23 10:36:31', '2022-12-28 17:45:23', 'Molestiae a dignissimos velit animi minima suscipit nihil. Libero consequatur quia accusantium aut dolor aut sunt blanditiis. Eum quaerat at velit id. Inventore rem reiciendis aut temporibus praesentium. Consequatur delectus et iusto repellendus qui cumque enim.'),
(25, 'PONDEUSE DECOUPEE - 2KG', 'PONDEUSE DECOUPEE - 2KG', NULL, 3100, '1672249621.jpg', 'https://via.placeholder.com/640x480.png/002244?text=est', 'https://via.placeholder.com/640x480.png/0044ff?text=praesentium', '0', '1', '108', 2, '2022-12-23 10:36:31', '2022-12-28 17:48:03', 'Corrupti sint eligendi impedit error ut consectetur vero. Exercitationem quae vero reiciendis nostrum. Aut culpa omnis debitis ducimus voluptate. Possimus et facere non assumenda et. Saepe iure molestiae reprehenderit excepturi distinctio est. Debitis iure incidunt voluptas est.'),
(26, 'PLAQUETTE D\'OEUF', 'PLAQUETTE D\'OEUF', NULL, 3200, '1672249655.jpg', 'https://via.placeholder.com/640x480.png/00bb77?text=distinctio', 'https://via.placeholder.com/640x480.png/006600?text=eius', '0', '0', '111', 4, '2022-12-23 10:36:31', '2022-12-28 17:49:20', 'Rerum aut nisi non. Vero quae maxime deserunt velit nisi qui. Aspernatur reiciendis ex qui culpa laudantium molestiae. Cumque fugit sed ad qui atque. Voluptates ea qui consectetur id vero. Exercitationem velit unde qui aliquam.'),
(27, 'POULET CHAIR DECOUPE 1,3-15 KG', 'POULET CHAIR DECOUPE 1,3-15 KG', NULL, 2700, '1672249738.jpg', 'https://via.placeholder.com/640x480.png/00bb44?text=qui', 'https://via.placeholder.com/640x480.png/009977?text=cumque', '0', '1', '132', 3, '2022-12-23 10:36:31', '2022-12-28 17:48:58', 'Suscipit suscipit consectetur blanditiis ducimus recusandae. Nostrum est facilis deserunt minima vero et. Rerum cumque et rerum aut perferendis qui. Qui quisquam autem pariatur veniam. Beatae iste vel sed. Inventore dolore dolorem error qui et quia accusamus.'),
(28, 'PPULET FUME - 1,8KG', 'PPULET FUME - 1,8KG', NULL, 3500, '1672249821.jpg', 'https://via.placeholder.com/640x480.png/0099aa?text=nisi', 'https://via.placeholder.com/640x480.png/00aacc?text=rem', '1', '1', '130', 2, '2022-12-23 10:36:31', '2022-12-28 17:50:21', 'Quasi voluptatum repellat distinctio sequi repellendus sapiente mollitia. Sapiente nam expedita quod in in. Aut alias eveniet et. Nam velit quisquam similique voluptatem. Voluptatem dolore corrupti tenetur ut. Molestias sint in quae ut cupiditate vel.'),
(29, 'POULET CHAIR DECOUPE 2,5KG', 'POULET CHAIR DECOUPE 2,5KG', NULL, 3500, '1672250254.jpg', 'https://via.placeholder.com/640x480.png/008822?text=in', 'https://via.placeholder.com/640x480.png/000011?text=id', '1', '0', '1340', 1, '2022-12-23 10:36:31', '2022-12-28 17:57:34', 'Quo rerum possimus maxime esse molestiae dicta vitae quidem. Odio eos incidunt illum voluptatem dolores aut natus. Repudiandae voluptas fugit rem occaecati et voluptas. Occaecati voluptatem placeat est id voluptatem quo. Fugiat cum eos rerum hic rerum ut. Natus quam magni illo sequi debitis quod.'),
(30, 'POULET CHAIR DECOUPE 2,5KG', 'POULET CHAIR DECOUPE 2,5KG', NULL, 1950, '1672250311.jpg', 'https://via.placeholder.com/640x480.png/00ffbb?text=sit', 'https://via.placeholder.com/640x480.png/00ff33?text=nobis', '1', '0', '153', 1, '2022-12-23 10:36:31', '2022-12-28 17:58:31', 'Expedita eius enim aliquam sed laudantium. Quidem quo quia libero voluptates voluptatem optio. Voluptas quidem unde suscipit nostrum. Sapiente nobis sunt et et. Odit aliquid a voluptatem error non sed.'),
(31, 'POULET CHAIR DECOUPE 2KG', 'POULET CHAIR DECOUPE 2KG', NULL, 2000, '1672250407.jpg', 'https://via.placeholder.com/640x480.png/003366?text=sed', 'https://via.placeholder.com/640x480.png/0066bb?text=est', '0', '0', '188', 3, '2022-12-23 10:36:31', '2022-12-28 18:00:07', 'Ut quis aliquam tempore. Sit consectetur et libero facere animi atque similique. Aliquid unde ut sunt aut sequi. Maxime ut nesciunt quaerat rerum consequatur. Odit ab rerum enim veniam. Voluptas qui maiores et qui praesentium eveniet. Atque quae eius beatae autem amet iure.'),
(32, 'POULET CHAIR DECOUPE 2,5KG', 'POULET CHAIR DECOUPE 2,5KG', NULL, 2400, '1672250446.jpg', 'https://via.placeholder.com/640x480.png/00bb99?text=aliquid', 'https://via.placeholder.com/640x480.png/0088aa?text=voluptas', '1', '1', '155', 2, '2022-12-23 10:36:31', '2022-12-28 18:00:47', 'Quasi tenetur inventore enim eos qui facilis aut. Dolores possimus corrupti sed quia. Aspernatur est voluptas corporis aut aut est esse. Ea laudantium maxime sit autem voluptatem.'),
(33, 'POULET DE CHAIR 1 - 1,2 KG', 'POULET DE CHAIR 1 - 1,2 KG', NULL, 8900, '1672250483.jpg', 'https://via.placeholder.com/640x480.png/006600?text=autem', 'https://via.placeholder.com/640x480.png/0099aa?text=voluptatem', '0', '1', '123', 1, '2022-12-23 10:36:31', '2022-12-28 18:01:23', 'Est ducimus nobis sapiente sed at iure sint quisquam. Non adipisci tempora vero. Animi cum quia consequatur culpa. Et optio repudiandae corporis aspernatur sed minima repellendus. Suscipit cum eos nobis. Et voluptatem ea nam odit consectetur. Numquam et voluptatum dolores quis quas adipisci et.'),
(34, 'DEMI PLAQUETTE D\'OEUF', 'DEMI PLAQUETTE D\'OEUF', NULL, 2400, '1672250654.jpg', 'https://via.placeholder.com/640x480.png/00cc66?text=ratione', 'https://via.placeholder.com/640x480.png/00ddff?text=praesentium', '0', '1', '197', 5, '2022-12-23 10:36:31', '2022-12-28 18:09:30', 'Facilis nam rerum ab itaque. Possimus neque voluptas eum dignissimos voluptas. Dolorum alias autem deleniti natus ad distinctio. Quidem eaque molestiae soluta quas voluptates ipsam.'),
(35, 'POULET DE CHAIR 2KG', 'POULET DE CHAIR 2KG', NULL, 3300, '1672250702.jpg', 'https://via.placeholder.com/640x480.png/003366?text=voluptatibus', 'https://via.placeholder.com/640x480.png/005522?text=officia', '1', '0', '182', 1, '2022-12-23 10:36:31', '2022-12-28 18:05:02', 'Rerum aliquid nostrum non et. Consequatur non iure officiis in nulla velit. Qui sit aliquid eligendi dolorem dolores aspernatur. Minima vitae sit fugit.'),
(36, 'PLAQUETTE D\'OEUF', 'PLAQUETTE D\'OEUF', NULL, 2500, '1672250757.jpg', 'https://via.placeholder.com/640x480.png/0088ee?text=tenetur', 'https://via.placeholder.com/640x480.png/007799?text=ratione', '0', '0', '150', 4, '2022-12-23 10:36:31', '2022-12-28 18:05:57', 'Quia labore voluptas labore occaecati mollitia unde. Voluptatem et et cupiditate qui sit explicabo. Dolores ut recusandae culpa officia et. Suscipit adipisci hic sit necessitatibus eligendi.'),
(37, 'POULET CHAIR DECOUPE 1,3KG', 'POULET CHAIR DECOUPE 1,3KG', NULL, 2200, '1672250847.jpg', 'https://via.placeholder.com/640x480.png/0066ff?text=voluptatem', 'https://via.placeholder.com/640x480.png/0055aa?text=laudantium', '1', '0', '171', 3, '2022-12-23 10:36:31', '2022-12-28 18:07:27', 'Qui cum mollitia in quis in in autem. Fugit occaecati iste veniam reiciendis et. Accusamus veniam est asperiores commodi aut.'),
(38, 'PONDEUSE - 2,5KG', 'PONDEUSE - 2,5KG', NULL, 4800, '1672250896.jpg', 'https://via.placeholder.com/640x480.png/009999?text=quis', 'https://via.placeholder.com/640x480.png/00ffbb?text=et', '1', '1', '140', 2, '2022-12-23 10:36:31', '2022-12-28 18:08:16', 'Et nesciunt odio aperiam voluptates. Ipsum voluptas aut ex a unde numquam assumenda at. Ipsam aperiam sit corrupti tenetur libero. Id distinctio quia laboriosam quibusdam fugiat libero.'),
(39, 'DEMI PLAQUETTE D\'OEUF', 'DEMI PLAQUETTE D\'OEUF', NULL, 1750, '1672250946.jpg', 'https://via.placeholder.com/640x480.png/007788?text=labore', 'https://via.placeholder.com/640x480.png/00aa44?text=dolores', '1', '0', '105', 5, '2022-12-23 10:36:31', '2022-12-28 18:09:06', 'Pariatur consequatur quo dolores porro voluptatem et aliquid. Saepe non a consequatur quis. Aliquid omnis voluptate quo deleniti. Nam dolore recusandae est dicta.'),
(40, 'POULET DE CHAIR 2KG', 'POULET DE CHAIR 2KG', NULL, 3200, '1672251175.jpg', '1672251175.jpg', '1672251135.jpg', '0', '0', '177', 1, '2022-12-23 10:36:31', '2022-12-28 18:12:55', 'Est dolorem aut distinctio iste qui. Modi repudiandae eaque nesciunt ratione omnis modi. Officia tenetur est dicta. Veniam eaque fugit aperiam incidunt eos cum numquam. Sit a eligendi sed.'),
(41, 'PONDEUSE DECOUPEE - 2KG', 'PONDEUSE DECOUPEE - 2KG', NULL, 3750, '1672251101.jpg', 'https://via.placeholder.com/640x480.png/006611?text=reiciendis', 'https://via.placeholder.com/640x480.png/001111?text=inventore', '0', '1', '109', 2, '2022-12-23 10:36:31', '2022-12-28 18:11:41', 'Modi alias voluptate iure dolor maiores ut voluptatem necessitatibus. Ex repellendus aut quod. Sit explicabo animi et nihil eos. Rem totam nobis sed voluptatem. Atque eos officia nemo officia culpa voluptates. Excepturi tempora quia libero sunt qui est. Temporibus non nihil totam rerum ad.'),
(42, 'PONDEUSE - 2,5KG', 'PONDEUSE - 2,5KG', NULL, 3500, '1672251057.jpg', 'https://via.placeholder.com/640x480.png/00bb33?text=eos', 'https://via.placeholder.com/640x480.png/0033aa?text=aspernatur', '1', '1', '250', 2, '2022-12-23 10:36:31', '2022-12-28 18:10:57', 'Corrupti aliquam saepe dicta quisquam quia sunt dolorem. Porro corporis excepturi voluptatibus quis. Amet et et aut molestiae adipisci vero eveniet. Ut est officiis est consequatur earum.'),
(43, 'POULET CHAIR DECOUPE 1,3KG', 'POULET CHAIR DECOUPE 1,3KG', NULL, 1950, '1672250812.jpg', 'https://via.placeholder.com/640x480.png/007755?text=nisi', 'https://via.placeholder.com/640x480.png/0011ee?text=amet', '0', '1', '169', 3, '2022-12-23 10:36:31', '2022-12-28 18:06:52', 'Veritatis repellendus ut alias facere est consequatur error qui. Quia doloribus libero veritatis dolorum velit quis. Molestiae perferendis deserunt quibusdam praesentium. Ut eveniet quod veniam amet dolor officiis explicabo.'),
(44, 'POULET CHAIR DECOUPE 1,5KG', 'POULET CHAIR DECOUPE 1,5KG', NULL, 1600, '1672250595.jpg', 'https://via.placeholder.com/640x480.png/00dd99?text=maiores', 'https://via.placeholder.com/640x480.png/001133?text=fugiat', '0', '0', '113', 3, '2022-12-23 10:36:31', '2022-12-28 18:03:15', 'Et ratione numquam omnis dolorem sit quas maiores. Quia nulla eum molestias neque quaerat ut aperiam. Aut iusto explicabo aut. Est sint ipsam sint nostrum commodi molestiae.'),
(45, 'POULET CHAIR -10KG', 'POULET CHAIR -10KG', NULL, 7000, '1672250552.jpg', 'https://via.placeholder.com/640x480.png/0011bb?text=quia', 'https://via.placeholder.com/640x480.png/0044cc?text=neque', '0', '0', '142', 1, '2022-12-23 10:36:31', '2022-12-28 18:02:32', 'Ut est quas voluptate. Quia esse illo hic quam. Repudiandae enim aperiam consequuntur velit. Ut quisquam quia harum autem quia repudiandae reiciendis.'),
(46, 'PONDEUSE-2,1KG', 'PONDEUSE-2,1KG', NULL, 2900, '1672250364.jpg', 'https://via.placeholder.com/640x480.png/00aa33?text=sit', 'https://via.placeholder.com/640x480.png/00ff00?text=quo', '1', '1', '116', 2, '2022-12-23 10:36:31', '2022-12-28 17:59:24', 'Quia sit et sed dolorum quasi commodi. Nam velit rerum quia minima. Harum recusandae expedita nihil voluptatem sequi quas voluptas. Consequuntur omnis vero consequatur dolores repellendus. Numquam deleniti odit ea neque omnis deleniti voluptate. Ut amet ea libero temporibus magnam non.'),
(47, 'DEMI PLAQUETTE D\'OEUF', 'DEMI PLAQUETTE D\'OEUF', 'disponible', 1750, '1672249901.jpg', 'https://via.placeholder.com/640x480.png/00ddaa?text=eos', 'https://via.placeholder.com/640x480.png/00aabb?text=corporis', '1', '0', '168', 5, '2022-12-23 10:36:31', '2023-01-14 12:40:33', 'Necessitatibus deserunt ab quisquam occaecati ut dolorum ullam. Perferendis accusamus animi reiciendis eos est. Qui quo incidunt rem veritatis ut voluptatem iure quibusdam. Aut voluptatem a voluptas doloribus corporis ut blanditiis.'),
(48, 'PLAQUETTE D\'OEUF', 'PLAQUETTE D\'OEUF', NULL, 2300, '1672249860.jpg', 'https://via.placeholder.com/640x480.png/0044ff?text=omnis', 'https://via.placeholder.com/640x480.png/008833?text=esse', '0', '1', '130', 4, '2022-12-23 10:36:32', '2022-12-28 17:51:00', 'Qui et et eum reprehenderit vero. Fuga sit nostrum consequatur enim. Sapiente aut sequi non laudantium asperiores. Necessitatibus molestiae fuga eos ab earum. Quisquam ullam explicabo aut nobis. Voluptatem nesciunt corrupti laudantium quae. Et ut id dolorem quasi.'),
(49, 'DEMI PLAQUETTE D\'OEUF', 'DEMI PLAQUETTE D\'OEUF', NULL, 1850, '1672249345.jpg', 'https://via.placeholder.com/640x480.png/0088dd?text=non', 'https://via.placeholder.com/640x480.png/0044ee?text=asperiores', '1', '0', '170', 4, '2022-12-23 10:36:32', '2022-12-28 17:42:25', 'Ducimus repellendus distinctio nesciunt odio quas quia. Et et repellendus ullam. Possimus quae cupiditate vitae. Ea officiis atque adipisci voluptatum quibusdam asperiores.'),
(50, 'POULET CHAIR DECOUPE 2KG', 'POULET CHAIR DECOUPE 2KG', NULL, 3800, '1672249187.jpg', 'https://via.placeholder.com/640x480.png/00eedd?text=sunt', 'https://via.placeholder.com/640x480.png/00cc44?text=accusamus', '1', '0', '100', 3, '2022-12-23 10:36:32', '2022-12-28 17:39:47', 'Minima consequatur nostrum dolores excepturi quos. Placeat voluptas quia fuga error culpa autem. Quo aut sint ipsa saepe eveniet. Ducimus aut sit eius. Et assumenda ratione et error omnis quo.'),
(51, 'POULET DE CHAIR 1,5 - 1,8 KG', 'POULET DE CHAIR 1,5 - 1,8 KG', '51', 3500, '1672247900.jpg', '1671800141.png', '1671800141.png', '0', '0', '50', 2, '2022-12-23 11:55:41', '2022-12-28 17:18:20', 'POULET PRET POUR CONSOMMER'),
(52, 'DEMI PLAQUETTE D\'OEUF', 'DEMI PLAQUETTE D\'OEUF', 'disponible', 1950, '1673702430.jpg', '1673702430.jpg', '1673702430.jpg', '0', '0', '210', 5, '2023-01-14 13:20:30', '2023-01-14 13:20:30', 'DEMI PLAQUETTE D\'OEUF'),
(53, 'STEPJANE', 'STEPJANE', 'disponible', 555, '1673790058.jpg', '1673790058.jpg', '1673790058.jpg', '0', '0', '34', 2, '2023-01-15 13:40:58', '2023-01-15 13:40:58', 'DSFDFGGGGHHGHGHGHG');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'utilisateur', NULL, NULL),
(2, 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '+2250759905919'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `phone`) VALUES
(1, 'Oma Willms', 'drake39@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bhruBS8ofHYHFcUSW2orWyFp9mIfJn55MhEQpmPd1CS576a93pCmybHe9l5L', '2022-12-23 10:36:27', '2022-12-23 10:36:27', 2, '+22568365866'),
(2, 'Dr. Wilber Kovacek II', 'weber.davion@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2ea6ecaPaH7ZS418SoF2wCOyahop71KxaqU6e5cY8HMVjbDe3lqh5jLrIwkU', '2022-12-23 10:36:27', '2022-12-23 10:36:27', 2, '+2250759905919'),
(3, 'Damien Brown IV', 'nwalsh@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IdlZAXZK7D8XE8YKbUFfIoLU4HQhh02D5ZSbMU7tIeAa8K9Mpke9ArFq2RZD', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 1, '+2250759905919'),
(4, 'Kyra Orn', 'beryl16@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RgzIWen4IH', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 1, '+2250759905919'),
(5, 'Layne Rohan', 'nstanton@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1KzGFCsJwR', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(6, 'Baron Wiegand', 'abbigail.sporer@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'REsvxWyjEs', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(7, 'Adolfo Schimmel', 'eldred.parker@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'O2fnpgO7MD', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 1, '+2250759905919'),
(8, 'Mr. Steve Feeney', 'wokuneva@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '54J9Fy0bm0', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(9, 'Pearline Kohler', 'kenny.yundt@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'EWialI087P', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(10, 'Torrey Schmeler', 'shanna.rodriguez@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Mn9HyvrtDP', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 1, '+2250759905919'),
(11, 'Dr. Gordon Carter IV', 'vonrueden.rubye@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MUYNrLWERO', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(12, 'Dr. Eladio Yundt II', 'schaefer.paxton@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'APFDgUkFK4', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 1, '+2250759905919'),
(13, 'Prof. Elroy Gorczany Sr.', 'alec.keebler@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MwrZojhHew', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(14, 'Nikki Stehr', 'kassulke.cicero@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '13pAr0RpO1', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 1, '+2250759905919'),
(15, 'Amy Toy', 'gbogisich@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'EDuj4xlnqL', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(16, 'Jaylin Metz', 'prohaska.jeremie@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rbweyykZx5', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(17, 'Camylle Fisher', 'harris.nathan@example.org', '2022-12-23 10:36:27', '$2y$10$Th2/wZkZ49PSy4RrgEe48eebuxiO0Q3zMn43BeVAmZr6kzfnPpUPC', 'pnZJ7WTrrc', '2022-12-23 10:36:27', '2022-12-23 21:13:13', 1, '+2250759905919'),
(18, 'Hillard Treutel', 'effertz.hope@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1cn4uOo3SN', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(19, 'Mrs. Rosina Wehner', 'edwardo31@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Bski0UXfIl', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(20, 'Prof. Newton Ullrich MD', 'tressa35@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YjFF2eBSe8', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 1, '+2250759905919'),
(21, 'Lenore Wyman', 'braun.tyreek@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Z1BmqZ9X12', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(22, 'Mr. Matteo Kerluke', 'reece.doyle@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xYjaPsT6rY', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(23, 'Mossie Thompson', 'kuhic.iliana@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'a1UgX9IwOs', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 1, '+2250759905919'),
(24, 'Elyse Mosciski', 'eohara@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'B4TLwVKvbE', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(25, 'Rubye Weber', 'bjohnson@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gMELvnA0iZ', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 1, '+2250759905919'),
(26, 'Shana Wolff', 'timothy95@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LXa1tA30sR', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 1, '+2250759905919'),
(27, 'Mr. Hunter Zulauf Sr.', 'imacejkovic@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Uy9r32XC8C', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(28, 'Connor Bode', 'dbahringer@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7rBZbDZ9V7', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 1, '+2250759905919'),
(29, 'Hans Beier', 'branson13@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CtLiVvGT3h', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(30, 'Mrs. Effie Muller Sr.', 'bins.eladio@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lmzyRK9PnP', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 2, '+2250759905919'),
(31, 'Angelica Emmerich', 'xfriesen@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'k5Rgu6Z2g7', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 1, '+2250759905919'),
(32, 'Larue Friesen V', 'jerde.rachelle@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tnr5WxY3s0', '2022-12-23 10:36:27', '2022-12-23 10:36:28', 1, '+2250759905919'),
(33, 'Miss Lucie Pagac', 'brody14@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8cgQDLXeh6', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 2, '+2250759905919'),
(34, 'Prof. Pablo Wisoky I', 'dixie.kirlin@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IxdpqVyUWG', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 2, '+2250759905919'),
(35, 'Adele Kessler', 'kattie.rutherford@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TyXlSDh8et', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 2, '+2250759905919'),
(36, 'Dimitri Oberbrunner', 'tbeier@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3ejsgemB1R', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 1, '+2250759905919'),
(37, 'Emely Dooley', 'ubaumbach@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FfKQPpE6hC', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 2, '+2250759905919'),
(38, 'Mrs. Patsy Torphy', 'keeling.lue@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cxegdZRj16', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 1, '+2250759905919'),
(39, 'Ronaldo Schulist', 'mozell.leuschke@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4b1lJ8dxbA', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 1, '+2250759905919'),
(40, 'Lillian Pfeffer', 'ernestine.bashirian@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'd76UeLIxk7', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 2, '+2250759905919'),
(41, 'Kari Huel', 'wuckert.vilma@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mccRAazPX0', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 2, '+2250759905919'),
(42, 'Ally Wiegand', 'regan.gleason@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Dly43DaxkR', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 1, '+2250759905919'),
(43, 'Marlene Prosacco', 'sking@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QBCeo4LLYM', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 1, '+2250759905919'),
(44, 'Moshe Treutel', 'purdy.carli@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LknlFR6U4o', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 1, '+2250759905919'),
(45, 'Domenico Wolff', 'skiles.kaitlyn@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0PYu9SZ2sY', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 2, '+2250759905919'),
(46, 'Sigmund Douglas', 'williamson.armand@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3howuSQILX', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 2, '+2250759905919'),
(47, 'Alvera Murazik', 'jleuschke@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9KdlxYUxw3', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 2, '+2250759905919'),
(48, 'Jarret Wisoky', 'uchristiansen@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lJHNgKygFo', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 1, '+2250759905919'),
(49, 'Nels Gislason', 'bkulas@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5ugMxFHlIZ', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 1, '+2250759905919'),
(50, 'Miss Dora Bednar I', 'egraham@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'I7Nv3N3r8w', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 2, '+2250759905919'),
(51, 'Tania Ledner', 'scottie.reichert@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3oaoSSvU9b', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 1, '+2250759905919'),
(52, 'Jannie Beatty', 'leif75@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'D9NRLqf42w', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 2, '+2250759905919'),
(53, 'Paula Zieme', 'florian56@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YDfGrVtRQU', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 1, '+2250759905919'),
(54, 'Prof. Orval Weimann', 'casandra.eichmann@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2ORVnCQ0tE', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 2, '+2250759905919'),
(55, 'Kody Doyle', 'amina.frami@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ybIYt56oDo', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 1, '+2250759905919'),
(56, 'Arjun Lebsack II', 'blanda.oma@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bVWxzVLvCh', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 1, '+2250759905919'),
(57, 'Dr. Cecil Hills I', 'white.danielle@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'H8ppfIXemd', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 1, '+2250759905919'),
(58, 'Jaclyn Ryan', 'ferne.rolfson@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yCJ838lUs5', '2022-12-23 10:36:27', '2022-12-23 10:36:29', 2, '+2250759905919'),
(59, 'Miss Ariane Hodkiewicz III', 'kaden39@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hmv4QepTjl', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 1, '+2250759905919'),
(60, 'Gloria Greenfelder', 'tamia63@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hd9E7WfyO1', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 2, '+2250759905919'),
(61, 'Dr. Jane Treutel MD', 'pritchie@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'G0v2uPfYpS', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 2, '+2250759905919'),
(62, 'Roel Williamson', 'wiley.huel@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'khAKEn46MD', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 2, '+2250759905919'),
(63, 'Armani Kreiger', 'quentin14@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rQdKiDtkXZ', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 2, '+2250759905919'),
(64, 'Karina Weissnat III', 'daphne41@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3N8lvG1fdF', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 2, '+2250759905919'),
(65, 'Prof. Kole Flatley', 'vilma87@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Nd9F52u84K', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 2, '+2250759905919'),
(66, 'Dr. Hazel Kuhn Sr.', 'kuhic.cali@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ltk1W0tmW0', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 2, '+2250759905919'),
(67, 'Elizabeth Metz', 'purdy.clementina@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uoPTQTO3J0', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 2, '+2250759905919'),
(68, 'Evert Johnson', 'vrohan@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ObGaRhBZcF', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 2, '+2250759905919'),
(69, 'Anderson Wunsch', 'proob@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6OlRP3d0Hl', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 1, '+2250759905919'),
(70, 'Amelie Tremblay', 'meda.marvin@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'b7De9KMiUJ', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 1, '+2250759905919'),
(71, 'Connie Hettinger', 'tressie33@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'drVp4MNiJx', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 1, '+2250759905919'),
(72, 'Dr. Gerard Sauer I', 'estefania.watsica@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yXLvAHltEU', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 1, '+2250759905919'),
(73, 'Matilda Schaefer', 'bquigley@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vatfA1IU46', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 1, '+2250759905919'),
(74, 'Felicita O\'Reilly', 'elinore46@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HUNNvfVs9t', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 2, '+2250759905919'),
(75, 'Victor Lindgren', 'elizabeth.leannon@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dl5vs0lvkF', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 2, '+2250759905919'),
(76, 'Paige Kuhic', 'ayla.maggio@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9MnZJcSxrC', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 1, '+2250759905919'),
(77, 'Mr. Buster Bechtelar', 'tfisher@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '32MA9HFp9w', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 1, '+2250759905919'),
(78, 'Dr. Brittany Schulist I', 'block.emery@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'UwGXFnJoVW', '2022-12-23 10:36:27', '2022-12-23 10:36:30', 1, '+2250759905919'),
(79, 'Estell Pagac', 'ykreiger@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2H7N8toBdy', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 1, '+2250759905919'),
(80, 'Miss Estrella Brown', 'cassie23@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8MIli8Ong9', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 1, '+2250759905919'),
(81, 'Vicente Muller', 'mose.klocko@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5jCZQ1ocWc', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(82, 'Joaquin Lynch', 'freeman71@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'p5GhvLAgI1', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(83, 'Mrs. Nia Rolfson', 'ryan.anais@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'b94ymRWMDQ', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(84, 'Mr. Aron Ledner PhD', 'langworth.sheldon@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SsJfanZnEV', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(85, 'Leonor Okuneva MD', 'jedediah31@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mFtF34X0gQ', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(86, 'Mr. Urban Konopelski', 'gferry@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4oDRASoD5Y', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(87, 'Jaunita Nicolas', 'jennings.howe@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IT761FaCKy', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 1, '+2250759905919'),
(88, 'Rosina Stanton', 'sonia.cormier@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nyU3ES9kvV', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(89, 'Mrs. Reba Hamill', 'romaguera.jaiden@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wDsXPBNZAY', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(90, 'Sven Monahan', 'heaney.kadin@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LOUcyLDqvN', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(91, 'Ellsworth Emmerich Jr.', 'baumbach.leatha@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kjGcOILfMd', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(92, 'Mr. Ryley Weber', 'wgerhold@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AhIgDAZOHe', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(93, 'Prof. Brady Swaniawski II', 'margaretta.walsh@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vqG2s1TfuU', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(94, 'Bernardo Crona', 'strosin.bradly@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'usKIfxdh1y', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 1, '+2250759905919'),
(95, 'Kenna Hamill DVM', 'joan24@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'r9c9tz0G6I', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(96, 'Dr. Dagmar Pfeffer II', 'kuphal.nora@example.com', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SQ8BSL6ywg', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(97, 'Ralph Marquardt III', 'kip.collins@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MmLUfp5b9Y', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(98, 'Dr. Junior Reinger I', 'kertzmann.carolyne@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QWWRs6N4fS', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 1, '+2250759905919'),
(99, 'Norene Schroeder', 'dubuque.lilla@example.org', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ffozrLoMrf', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 1, '+2250759905919'),
(100, 'Dovie Ryan', 'tbeatty@example.net', '2022-12-23 10:36:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pxd06IldzS', '2022-12-23 10:36:27', '2022-12-23 10:36:31', 2, '+2250759905919'),
(101, 'simon', 'simon@gmail.com', NULL, '$2y$10$F3WO6rncqwk21dyQ62tZEujP3GtyHhEd0AZUoBBHdAhvZR/ddZgK2', NULL, '2022-12-23 12:03:51', '2022-12-23 12:03:51', 1, '+2250759905919'),
(102, 'admin', 'manasseduciel@hotmail.fr', NULL, '$2y$10$pgT73Q65Nyz..AWxOb72m.CgPE7xiE2zq4ERGsluKDsHCR0FjX3eu', NULL, '2022-12-24 13:47:39', '2022-12-24 13:47:39', 1, '+2250759905919');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `coeurs`
--
ALTER TABLE `coeurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coeurs_user_id_foreign` (`user_id`),
  ADD KEY `coeurs_product_id_foreign` (`product_id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Index pour la table `orders_produtcs`
--
ALTER TABLE `orders_produtcs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_produtcs_product_id_foreign` (`product_id`),
  ADD KEY `orders_produtcs_order_id_foreign` (`order_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `coeurs`
--
ALTER TABLE `coeurs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `orders_produtcs`
--
ALTER TABLE `orders_produtcs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `coeurs`
--
ALTER TABLE `coeurs`
  ADD CONSTRAINT `coeurs_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coeurs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `orders_produtcs`
--
ALTER TABLE `orders_produtcs`
  ADD CONSTRAINT `orders_produtcs_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_produtcs_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
