-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 07:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'eum ipsa', 'eum-ipsa', '2023-02-21 13:35:33', '2023-02-21 13:35:33'),
(2, 'est quo', 'est-quo', '2023-02-21 13:35:33', '2023-02-21 13:35:33'),
(3, 'amet ullam', 'amet-ullam', '2023-02-21 13:35:33', '2023-02-21 13:35:33'),
(4, 'aut nihil', 'aut-nihil', '2023-02-21 13:35:33', '2023-02-21 13:35:33'),
(5, 'est quibusdam', 'est-quibusdam', '2023-02-21 13:35:33', '2023-02-21 13:35:33'),
(6, 'voluptatem dolores', 'voluptatem-dolores', '2023-02-21 13:35:33', '2023-02-21 13:35:33');

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Seif Eddine Segueni', 'seifosg911@gmail.com', '+213790410947', 'Test', 'Testing the message', '2023-04-14 15:47:24', '2023-04-14 15:47:24'),
(2, 'Safe', 'sesegueni@gmail.com', '+213790410947', 'Test', 'qsdqsd qd qsd qs qsdqs d qsd qsd qsd q qsd qsqsd qs qs qsd qsd qs qsd qsd', '2023-04-14 15:48:28', '2023-04-14 15:48:28');

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `cart_value`, `created_at`, `updated_at`, `expiry_date`) VALUES
(5, 'SAFE', 'percentage', '50.00', '1000.00', '2023-03-04 11:37:17', '2023-03-04 18:59:50', '2023-03-15'),
(6, 'SAFE2', 'fixed', '100.00', '1000.00', '2023-03-04 17:47:07', '2023-03-04 19:03:53', '2023-03-03'),
(7, 'ANOUAR', 'percentage', '20.00', '900.00', '2023-03-04 18:57:29', '2023-03-04 18:57:29', '2023-03-11');

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `top_title`, `title`, `sub_title`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Top title', 'Title', 'Subtitle', 'http://127.0.0.1:8000/shop', '1677623493.jpg', '1', '2023-02-28 21:31:33', '2023-02-28 21:31:33'),
(6, 'Top title 2', 'Title 2', 'Subtitle 2', 'http://127.0.0.1:8000/shop', '1677623516.jpg', '1', '2023-02-28 21:31:56', '2023-02-28 21:31:56'),
(7, 'Top title 3', 'Title 3', 'Subtitle 3', 'http://127.0.0.1:8000/shop', '1677623528.jpg', '1', '2023-02-28 21:32:08', '2023-02-28 21:32:08'),
(8, 'Top title 4', 'Title 4', 'Subtitle 4', 'http://127.0.0.1:8000/shop', '1677623538.jpg', '1', '2023-02-28 21:32:18', '2023-02-28 21:37:53');

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `discount`, `tax`, `total`, `firstname`, `lastname`, `mobile`, `email`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `status`, `is_shipping_different`, `created_at`, `updated_at`, `delivered_date`, `canceled_date`) VALUES
(1, 1, '544.00', '544.00', '114.24', '658.24', 'Seif Eddine', 'Segueni', '+213790410947', 'seifosg911@gmail.com', 'Chiffa', NULL, 'Blida', 'Mouzaia', 'Algeria', '9010', 'delivered', 0, '2023-03-06 21:18:19', '2023-04-12 15:29:15', '2023-04-12', '2023-03-07'),
(2, 1, '144.00', '0.00', '30.24', '174.24', 'Seif', 'Eddine', '+213790410947', 'sesegueni@gmail.com', 'Chiffa', NULL, 'Blida', 'Mouzaia', 'Algeria', '9010', 'ordered', 1, '2023-03-07 15:01:15', '2023-03-07 15:01:15', NULL, NULL),
(3, 1, '838.00', '0.00', '175.98', '1013.98', 'qdqsd', 'qsd qd qsd qsd', '0664082221', 'seifosg911@gmail.com', 'Chiffa', NULL, 'Blida', 'Mouzaia', 'Algeria', '9010', 'ordered', 0, '2023-03-07 15:50:15', '2023-03-07 15:50:15', NULL, NULL),
(4, 2, '607.00', '0.00', '127.47', '734.47', 'Seif Eddine', 'Segueni', '+213790410947', 'seifosg911@gmail.com', 'Chiffa', NULL, 'Mouzaia', 'Blida', 'Algeria', '9010', 'delivered', 0, '2023-03-07 16:56:35', '2023-04-12 15:30:34', '2023-04-12', '2023-03-07'),
(5, 3, '497.00', '0.00', '104.37', '601.37', 'Morgan', 'Freeman', '9191919191', 'halfLife@blackmesa.com', 'New Mexico', NULL, 'New Mexico', 'New Mexico', 'United States', '1999', 'delivered', 0, '2023-03-07 17:06:56', '2023-03-26 12:37:36', '2023-03-26', NULL),
(6, 2, '93.00', '0.00', '19.53', '112.53', 'Seif Eddine', 'Segueni', '+213790410947', 'seifosg911@gmail.com', 'Chiffa', NULL, 'Blida', 'Blida', 'Algeria', '9010', 'delivered', 0, '2023-04-12 12:05:31', '2023-04-12 12:08:32', '2023-04-12', NULL),
(7, 2, '372.00', '0.00', '78.12', '450.12', 'Seif Eddine', 'Segueni', '+213790410947', 'seifosg911@gmail.com', 'Chiffa', NULL, 'Blida', 'Blida', 'Algeria', '9010', 'ordered', 0, '2023-04-12 12:12:14', '2023-04-12 12:12:14', NULL, NULL),
(8, 3, '272.00', '0.00', '57.12', '329.12', 'Seif Eddine', 'Segueni', '+213790410947', 'seifosg911@gmail.com', 'Chiffa', NULL, 'Blida', 'ssss', 'Algeria', '9010', 'delivered', 0, '2023-04-12 15:32:10', '2023-04-12 15:32:30', '2023-04-12', NULL),
(9, 2, '1338.00', '0.00', '280.98', '1618.98', 'Ken', 'Rossenberg', '123456789', 'seifosg911@gmail.com', 'Chiffa', 'jkqsbdiqsbjkdqsd', 'Blida', 'qdqsdqsdqsd qsd qsd', 'United States', '9010', 'ordered', 0, '2023-04-16 22:25:47', '2023-04-16 22:25:47', NULL, NULL),
(10, 2, '345.00', '0.00', '72.45', '417.45', 'Kendrick', 'Lamar', '01234567890', 'seifosg911@gmail.com', 'Chiffa', NULL, 'Blida', 'sssss', 'Albania', '9010', 'ordered', 0, '2023-04-16 22:26:59', '2023-04-16 22:26:59', NULL, NULL),
(11, 2, '279.00', '0.00', '58.59', '337.59', 'Seif Eddine', 'Segueni', '+213790410947', 'seifosg911@gmail.com', 'Chiffa', NULL, 'Blida', 'gvbn', 'Algeria', '9010', 'ordered', 0, '2023-04-17 12:48:13', '2023-04-17 12:48:13', NULL, NULL),
(12, 4, '30.00', '0.00', '6.30', '36.30', 'Seif Eddine', 'Segueni', '+213790410947', 'seifosg911@gmail.com', 'Chiffa', NULL, 'Blida', 'ssss', 'Algeria', '9010', 'ordered', 0, '2023-04-17 12:58:25', '2023-04-17 12:58:25', NULL, NULL),
(13, 2, '354.00', '0.00', '74.34', '428.34', 'Seif Eddine', 'Segueni', '+213790410947', 'seifosg911@gmail.com', 'Chiffa', NULL, 'Blida', 'ggfg', 'Algeria', '9010', 'canceled', 0, '2023-04-17 13:34:53', '2023-04-19 12:14:53', NULL, '2023-04-19');

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`, `rstatus`) VALUES
(1, 1, 1, '272.00', 4, '2023-03-06 21:18:19', '2023-03-06 21:18:19', 0),
(2, 11, 2, '48.00', 3, '2023-03-07 15:01:15', '2023-03-07 15:01:15', 0),
(3, 2, 3, '70.00', 4, '2023-03-07 15:50:15', '2023-03-07 15:50:15', 0),
(4, 5, 3, '93.00', 6, '2023-03-07 15:50:15', '2023-03-07 15:50:15', 0),
(5, 1, 4, '272.00', 1, '2023-03-07 16:56:35', '2023-04-12 15:31:19', 1),
(6, 4, 4, '40.00', 1, '2023-03-07 16:56:35', '2023-03-07 16:56:35', 0),
(7, 8, 4, '295.00', 1, '2023-03-07 16:56:35', '2023-03-07 16:56:35', 0),
(8, 14, 5, '497.00', 1, '2023-03-07 17:06:56', '2023-03-26 14:07:09', 1),
(9, 5, 6, '93.00', 1, '2023-04-12 12:05:31', '2023-04-12 12:17:42', 1),
(10, 16, 7, '372.00', 1, '2023-04-12 12:12:14', '2023-04-12 12:12:14', 0),
(11, 1, 8, '272.00', 1, '2023-04-12 15:32:10', '2023-04-12 15:32:55', 1),
(12, 2, 9, '151.00', 3, '2023-04-16 22:25:47', '2023-04-16 22:25:47', 0),
(13, 8, 9, '295.00', 3, '2023-04-16 22:25:47', '2023-04-16 22:25:47', 0),
(14, 11, 10, '48.00', 5, '2023-04-16 22:26:59', '2023-04-16 22:26:59', 0),
(15, 12, 10, '105.00', 1, '2023-04-16 22:26:59', '2023-04-16 22:26:59', 0),
(16, 5, 11, '93.00', 3, '2023-04-17 12:48:13', '2023-04-17 12:48:13', 0),
(17, 6, 12, '30.00', 1, '2023-04-17 12:58:25', '2023-04-17 12:58:25', 0),
(18, 4, 13, '82.00', 1, '2023-04-17 13:34:53', '2023-04-17 13:34:53', 0),
(19, 1, 13, '272.00', 1, '2023-04-17 13:34:53', '2023-04-17 13:34:53', 0);

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sesegueni@gmail.com', '$2y$10$BeTcnDc.X5DT6MKoNjAFne8iQ4ZE2V5FNsox53mtpDMBXJGJ7hYnq', '2023-04-16 10:30:50');

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_desc`, `desc`, `regular_price`, `sale_price`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'sint consequatur consequatur necessitatibus quasi vel', 'sint-consequatur-consequatur-necessitatibus-quasi-vel', 'Quis aspernatur reprehenderit error tempora quis temporibus tenetur ea. Rerum totam est distinctio fuga omnis consequatur aut. Reiciendis et adipisci iusto nihil. Hic ipsa at nobis provident ut modi.', 'Qui provident eveniet provident consequatur neque earum incidunt. Nam culpa facere aspernatur est. Nemo et et qui et sunt excepturi eum praesentium. Qui libero enim non rerum. Est autem dolores veniam accusantium. Ad ut est porro accusamus quidem delectus. Et magni in maxime dicta non non nobis nemo. Fugit culpa asperiores sed aliquam. Placeat nemo saepe doloribus non quas libero hic. Deleniti dolor impedit ducimus magnam qui alias delectus. Fugit velit animi aut est.', '272.00', '0.00', 'PRD132', 'instock', 0, 42, 'product-8.jpg', NULL, 1, '2023-02-21 13:35:33', '2023-02-21 13:35:33'),
(2, 'et vel rerum molestiae illum tenetur', 'et-vel-rerum-molestiae-illum-tenetur', 'Quia reiciendis laboriosam excepturi ipsum expedita rerum voluptas. Ipsam et dolorem quas sunt reiciendis ea. Illum et et autem ratione assumenda sed. Est maxime rerum voluptatum atque.', 'Quod quia sed rerum nisi est. Maxime magnam enim eos. Libero quia voluptate odit praesentium. Sed autem ducimus est odit sed dolores. Exercitationem id sed aspernatur quos qui. Eum ab rerum rerum adipisci voluptatem. Eaque voluptas alias nihil reiciendis hic iste. Dolor culpa sed soluta cupiditate ea et sed molestiae. Dolores odio alias est vel molestias beatae id.', '151.00', '70.00', 'PRD245', 'instock', 1, 21, 'product-11.jpg', '16816572050.jpg,16816572051.jpg,16816572052.jpg,16816572053.jpg', 5, '2023-02-21 13:35:33', '2023-04-16 14:00:05'),
(3, 'hic adipisci deleniti molestiae optio nemo', 'hic-adipisci-deleniti-molestiae-optio-nemo', 'Nihil itaque sint et nostrum eaque est. Aut voluptatum provident aut eos ut molestiae libero. Quaerat molestias quod nihil adipisci sed.', 'Soluta rerum dolor cum dicta aut et. Nulla voluptatem voluptatem quis. Dicta tenetur saepe eveniet atque cum tenetur. Qui accusantium error sed ab reprehenderit quo totam. Cumque dolor ullam eaque asperiores qui amet animi. Et est in illo sed quia voluptatem. Et ut sapiente laudantium molestiae. Eveniet error soluta quis sint eos odit. Modi voluptatibus tempore voluptate. Deleniti est et voluptates facere libero possimus incidunt. Aut ut fuga corrupti dolorem et quia sint.', '375.00', '300.00', 'PRD439', 'instock', 1, 15, 'product-5.jpg', NULL, 1, '2023-02-21 13:35:33', '2023-03-02 17:26:01'),
(4, 'eius quia eaque tempore ut voluptatum', 'eius-quia-eaque-tempore-ut-voluptatum', 'Quaerat est earum ut cupiditate at. Alias deleniti ipsa quis eaque at. Sunt sed eaque aut esse.', 'Qui animi eum consequatur. At consequatur qui necessitatibus. Maiores perferendis quibusdam eius voluptatem vitae. Molestias rerum nostrum id. Voluptatem deserunt quasi voluptatem voluptatem exercitationem enim impedit. Blanditiis vel voluptatem quia. Non et error dolorem minima in. Rerum ea rem animi porro doloribus. Voluptas deserunt illo molestias excepturi hic consectetur officiis. Consequatur a praesentium beatae blanditiis velit aut inventore.', '82.00', '40.00', 'PRD156', 'instock', 0, 30, 'product-3.jpg', NULL, 1, '2023-02-21 13:35:33', '2023-03-02 17:25:27'),
(5, 'sed voluptatem animi sed omnis laudantium', 'sed-voluptatem-animi-sed-omnis-laudantium', 'Placeat unde dicta eaque ea. Unde neque pariatur cum fuga eius sit vel. Debitis est tenetur totam quidem ut.', 'Et et non similique corporis quo nam fuga iure. Similique quis et fuga ipsa quia dolorem ducimus. At ab aperiam non aut temporibus accusantium quod. Magnam incidunt culpa aut nihil eligendi reprehenderit et. Enim cum aut architecto est mollitia. Voluptas dolor beatae esse libero et veritatis consequatur. Sed fuga vel aut quae odio. Velit voluptatum maiores non recusandae sapiente qui.', '93.00', '0.00', 'PRD184', 'instock', 1, 18, 'product-13.jpg', NULL, 5, '2023-02-21 13:35:33', '2023-03-01 20:52:40'),
(6, 'ad corporis quia labore doloremque aperiam', 'ad-corporis-quia-labore-doloremque-aperiam', 'Quas et et eum nihil odit atque. Nemo itaque odio sequi. Rerum assumenda ad iure consequuntur ut impedit. Non voluptatem fugit adipisci voluptas quas in sed.', 'Autem enim rerum qui error. Molestiae est eius mollitia aut officia. Id est hic cumque. Repudiandae et ducimus praesentium natus qui. Voluptatibus laboriosam sint corrupti fuga dolor. Qui ea quo repudiandae. Illo quod est hic accusamus officiis quibusdam. Nobis tenetur sapiente eaque perspiciatis assumenda. Blanditiis et sit et sed ex. Molestiae libero quidem quae quo tempora eligendi.', '30.00', '10.00', 'PRD480', 'instock', 1, 25, 'product-1.jpg', NULL, 4, '2023-02-21 13:35:33', '2023-03-03 19:18:50'),
(7, 'suscipit ad ullam quis dolorem dolores', 'suscipit-ad-ullam-quis-dolorem-dolores', 'Maiores non et enim et. Delectus magnam eaque nam voluptas quod tenetur voluptates.', 'Id aliquid enim quos ut assumenda maiores voluptas velit. Aut sunt deleniti ab repudiandae nemo mollitia. Quia in nemo aut excepturi rem dolorum. Veniam necessitatibus mollitia qui placeat quia. Fuga ratione consequatur necessitatibus ipsam. Qui tempora et illo maiores illo. Id voluptatibus sint quas. Quo quos natus ut placeat porro dolor vero ratione. Error enim officia cumque facere. Saepe odio quod architecto.', '178.00', '0.00', 'PRD356', 'instock', 0, 25, 'product-11.jpg', NULL, 3, '2023-02-21 13:35:33', '2023-02-21 13:35:33'),
(8, 'laborum laboriosam deserunt corporis sunt hic', 'laborum-laboriosam-deserunt-corporis-sunt-hic', 'Magnam et modi officiis et quia. Repudiandae eum impedit explicabo architecto veniam temporibus. In tenetur minima nam dignissimos esse ea qui. Similique occaecati dolor earum.', 'Rerum officiis perspiciatis vitae quam. Laboriosam excepturi voluptatem voluptates ut et iste veniam. Tempore ea quisquam sed ad enim. Enim blanditiis mollitia molestias aperiam excepturi aut eius. Sequi aliquam ut id blanditiis delectus. Eveniet corrupti itaque qui eaque eaque. Voluptates modi cumque nam nesciunt dolore. Illo cumque fuga nam est.', '295.00', '0.00', 'PRD143', 'instock', 1, 39, 'product-6.jpg', NULL, 5, '2023-02-21 13:35:33', '2023-03-01 20:52:08'),
(9, 'cupiditate quia debitis ut id officiis', 'cupiditate-quia-debitis-ut-id-officiis', 'Quaerat perferendis laboriosam ut veniam rerum saepe distinctio facere. Ut facere aut neque aut. Facilis alias id quasi consectetur id. Id voluptatem qui a numquam omnis qui et.', 'Autem repellat similique ut nam. In tenetur qui expedita placeat. Suscipit delectus et maiores odio. Nemo quidem ullam vero voluptate reiciendis. Reprehenderit illum ut quaerat cum sint perspiciatis ut omnis. Eaque eos itaque maiores enim. Laborum aut nihil quod nemo earum illum. Earum non inventore fuga dolor officia id non. Quis et aspernatur est rerum commodi. Nostrum omnis eius laudantium. Adipisci doloremque et et excepturi aliquid quasi fugit.', '293.00', '150.00', 'PRD240', 'instock', 0, 13, '1681656467.jpg', '16816567240.jpg,16816567241.jpg,16816567242.jpg,16816567243.jpg', 1, '2023-02-21 13:35:33', '2023-04-16 13:52:04'),
(10, 'labore optio voluptate omnis dolor ut', 'labore-optio-voluptate-omnis-dolor-ut', 'Atque nam nostrum deserunt inventore qui rerum praesentium. Occaecati veritatis optio vitae vel vel corporis odit. Vel nihil voluptatem amet consectetur. At excepturi quisquam ab assumenda.', 'Animi sint sed excepturi illo inventore. Rerum fugit ut quia unde accusantium. Nihil voluptatem sapiente quia voluptatem dolore in dicta non. Non fuga consequatur voluptas maiores veritatis. Blanditiis maiores ducimus in quod similique labore. Quae id impedit nam provident architecto id. Ea in reprehenderit doloribus in. Modi veniam quia voluptatem vero. Harum et numquam ipsum. Deserunt voluptates voluptas ut cum. Iusto numquam consequatur praesentium ipsum.', '18.00', '2.00', 'PRD148', 'instock', 0, 16, 'product-5.jpg', NULL, 5, '2023-02-21 13:35:33', '2023-03-02 17:26:14'),
(11, 'velit fuga possimus officia voluptatem culpa', 'velit-fuga-possimus-officia-voluptatem-culpa', 'Quisquam veritatis eius illum cum. Saepe fuga ipsum eos beatae eaque aut. Sunt ratione similique reiciendis. Ipsam id ullam et repellendus aliquid.', 'Rerum vel eum recusandae provident deserunt et. Temporibus repellendus laboriosam quisquam aut saepe libero illum omnis. Ut illo eum aperiam facere. Porro nam vitae iure soluta assumenda. Ea vel iusto illo autem totam et. Et eum eum id. Nostrum vel accusamus aut dicta. Praesentium rem eos fugit saepe numquam. Sunt aut quos aut. Aspernatur aliquid nemo enim voluptas commodi. Laborum placeat dolor fuga aut reprehenderit officia accusamus ab. Accusantium incidunt quis neque nihil laborum.', '48.00', '0.00', 'PRD178', 'instock', 0, 44, 'product-7.jpg', NULL, 4, '2023-02-21 13:35:33', '2023-02-21 13:35:33'),
(12, 'aut nisi laudantium sed velit magni', 'aut-nisi-laudantium-sed-velit-magni', 'Ut sit doloremque quia eum qui sit aliquid. Numquam cum et voluptatibus. Eos ut soluta culpa nobis sequi tempora. Molestiae corporis voluptatum velit ipsum eius debitis.', 'Nostrum doloremque perspiciatis aut mollitia minus mollitia. Eum unde dolorum saepe est. Ea facere fugit ut autem voluptatem sit animi dolor. Aspernatur delectus aliquam voluptas eveniet eligendi. Facere itaque a cum. Quo rerum quas iusto quisquam ut dolorem. Ut ea voluptas vel et. Id et repellat in repellendus quae. Occaecati dolor est esse sint porro. Consequatur ea omnis ut aut. Sit error repudiandae omnis sed quidem eum consectetur autem.', '105.00', '80.00', 'PRD485', 'instock', 1, 11, 'product-8.jpg', NULL, 1, '2023-02-21 13:35:33', '2023-03-02 17:24:52'),
(13, 'recusandae et at distinctio sit in', 'recusandae-et-at-distinctio-sit-in', 'Rerum cumque et dolorum est quisquam minima. Nostrum corrupti et quo repudiandae temporibus. Quam est esse maiores delectus. Beatae quas labore non consequatur.', 'Cumque libero perferendis necessitatibus error explicabo rem. Asperiores illum consequatur consequatur vel. Modi sapiente sunt ipsa fugit aut maiores accusantium quaerat. Molestias voluptatibus molestias est aperiam debitis consequatur libero. Est esse harum sed. Sint officiis deserunt quis qui. Aut tempore consequatur quaerat et. Quibusdam odio ut est iure nihil dicta dolorem. At dolores sapiente alias quisquam aut reprehenderit consequatur.', '499.00', '0.00', 'PRD464', 'instock', 1, 13, 'product-7.jpg', NULL, 2, '2023-02-21 13:35:33', '2023-03-01 20:53:11'),
(14, 'reprehenderit autem aut non dolores est', 'reprehenderit-autem-aut-non-dolores-est', 'Pariatur voluptatibus aut officiis officiis. Veniam optio saepe nihil ipsa fugit doloremque.', 'Officia ea officiis hic blanditiis iure accusamus. Et hic minima ut vel molestias. Et distinctio quidem delectus et. Sequi fugiat facere expedita dicta voluptatibus vero consequuntur. Ipsam autem voluptatem saepe dolores doloremque cum. Veritatis rerum totam autem. Eligendi illum debitis quae. Quos nihil neque eaque est ea enim vel. Sed vitae maxime et delectus sint quia voluptatem.', '497.00', '0.00', 'PRD181', 'instock', 0, 35, 'product-4.jpg', NULL, 2, '2023-02-21 13:35:33', '2023-02-21 13:35:33'),
(15, 'ut expedita consequatur omnis velit sapiente', 'ut-expedita-consequatur-omnis-velit-sapiente', 'Dolorum quas consectetur fugit. Rem eveniet perspiciatis sed laboriosam. Dignissimos non delectus et tenetur fugit tempore. Et at error laboriosam ullam. Veniam aut nostrum facilis id dicta at.', 'Quia numquam ea quasi similique voluptatibus voluptatem. Aut tempora nostrum quia doloribus voluptatem molestiae impedit. Aspernatur dicta qui quasi et est. Sed magnam quidem modi in veritatis quaerat nemo deserunt. Sint sunt facilis molestias sit distinctio. Et numquam commodi nisi. Blanditiis consequatur natus porro. Et aut autem provident accusamus quisquam autem ducimus. Quam ex quam vel et provident. Esse incidunt nulla quia dicta. Blanditiis officiis dolor aliquid aliquid nobis libero.', '498.00', '0.00', 'PRD275', 'instock', 0, 26, 'product-1.jpg', NULL, 1, '2023-02-21 13:35:33', '2023-02-21 13:35:33'),
(16, 'consequatur magni id dolorum sit vero', 'consequatur-magni-id-dolorum-sit-vero', 'Qui illo error labore asperiores facilis expedita beatae recusandae. Sequi consequatur dolore at ex voluptate ducimus quas doloribus. Omnis voluptas fuga ipsam.', 'Aut odit exercitationem eveniet doloribus voluptatibus totam. Nemo consequatur excepturi et in. Nostrum magni qui sit iste. Nihil debitis mollitia incidunt quia possimus officia quo. Reprehenderit est corporis tempora rerum iure iste. Eos voluptatem animi cumque eveniet accusamus. Nulla repellendus quidem quo praesentium consequatur. Rerum aut accusamus tempora excepturi nostrum ut omnis. Magnam aliquid officiis impedit. Quas qui debitis et quia magni expedita.', '372.00', '250.00', 'PRD339', 'instock', 1, 47, 'product-3.jpg', NULL, 5, '2023-02-21 13:35:33', '2023-03-02 17:25:02');

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `image`, `mobile`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `created_at`, `updated_at`) VALUES
(1, 5, '1681918138.png', '12345', 'ssdfsd', 'fsdfsdfsd', 'chiffa', 'Blida', 'N/A', '0910', '2023-04-19 13:22:58', '2023-04-19 14:28:58'),
(2, 2, '1681924863.jpg', '01234564789', 'ssdfsd', 'sdfsdf', 'fsdf sdf', 'dsfsdf sdf sd', 'N/A', '0910', '2023-04-19 14:33:39', '2023-04-19 16:21:03'),
(3, 3, '1681925225.jpg', NULL, NULL, NULL, NULL, NULL, 'N/A', NULL, '2023-04-19 16:26:56', '2023-04-19 16:27:05');

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `comment`, `order_item_id`, `created_at`, `updated_at`) VALUES
(1, 4, 'Nice product', 8, '2023-03-26 14:07:09', '2023-03-26 14:07:09'),
(2, 2, 'Not as Expected !', 9, '2023-04-12 12:17:42', '2023-04-12 12:17:42'),
(3, 5, 'Very good product , keep it up !', 5, '2023-04-12 15:31:19', '2023-04-12 15:31:19'),
(4, 3, 'Not that good but okay', 11, '2023-04-12 15:32:55', '2023-04-12 15:32:55');

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sales_date`, `status`, `created_at`, `updated_at`) VALUES
(1, '2023-03-31 17:00:37', 1, NULL, '2023-03-03 17:51:23');

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `email2`, `phone`, `phone2`, `address`, `facebook`, `instagram`, `twitter`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'sesegueni@gmail.com', 'seifosg911@gmail.com', '+213790410947', '+213664082221', 'Blida', 'https://www.facebook.com/AstroThunder911/', '#', '#', '#', '2023-04-14 17:00:41', '2023-04-14 17:02:31');

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `firstname`, `lastname`, `mobile`, `email`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `created_at`, `updated_at`) VALUES
(1, 2, 'Anoaur', 'Aissani', '+213790410947', 'seifosg911@gmail.com', 'Chiffa', NULL, 'Blida', 'yeah', 'Bahrain', '9010', '2023-03-07 15:01:15', '2023-03-07 15:01:15');

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`identifier`, `instance`, `content`, `created_at`, `updated_at`) VALUES
('Lambda@valve.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2023-04-19 16:31:27', NULL),
('Lambda@valve.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2023-04-19 16:31:27', NULL),
('nijixeb319@lieboe.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:2:{s:32:\"efb26e2c6ab6bd4d1323288923522d4e\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"efb26e2c6ab6bd4d1323288923522d4e\";s:2:\"id\";i:4;s:3:\"qty\";i:1;s:4:\"name\";s:37:\"eius quia eaque tempore ut voluptatum\";s:5:\"price\";d:82;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:19:\"\\App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"8a48aa7c8e5202841ddaf767bb4d10da\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"8a48aa7c8e5202841ddaf767bb4d10da\";s:2:\"id\";i:6;s:3:\"qty\";i:1;s:4:\"name\";s:42:\"ad corporis quia labore doloremque aperiam\";s:5:\"price\";d:30;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:19:\"\\App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2023-04-17 13:20:45', NULL),
('nijixeb319@lieboe.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:1:{s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:3:\"qty\";i:1;s:4:\"name\";s:53:\"sint consequatur consequatur necessitatibus quasi vel\";s:5:\"price\";d:272;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:19:\"\\App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2023-04-17 13:39:41', NULL),
('seifosg911@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2023-04-19 16:26:20', NULL),
('seifosg911@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:2:{s:32:\"a775bac9cff7dec2b984e023b95206aa\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"a775bac9cff7dec2b984e023b95206aa\";s:2:\"id\";i:3;s:3:\"qty\";i:1;s:4:\"name\";s:42:\"hic adipisci deleniti molestiae optio nemo\";s:5:\"price\";d:375;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:19:\"\\App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"370d08585360f5c568b18d1f2e4ca1df\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"370d08585360f5c568b18d1f2e4ca1df\";s:2:\"id\";i:2;s:3:\"qty\";i:1;s:4:\"name\";s:36:\"et vel rerum molestiae illum tenetur\";s:5:\"price\";d:151;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:19:\"\\App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2023-04-19 16:26:20', NULL),
('sesegueni@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2023-04-24 16:46:16', NULL),
('sesegueni@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2023-04-24 16:46:16', NULL),
('sonuhy@brand-app.biz', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2023-04-19 14:33:26', NULL),
('sonuhy@brand-app.biz', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2023-04-19 14:33:26', NULL);

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `order_id`, `mode`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'cod', 'pending', '2023-03-06 21:18:19', '2023-03-06 21:18:19'),
(2, 1, 2, 'cod', 'pending', '2023-03-07 15:01:15', '2023-03-07 15:01:15'),
(3, 1, 3, 'cod', 'pending', '2023-03-07 15:50:15', '2023-03-07 15:50:15'),
(4, 2, 4, 'cod', 'pending', '2023-03-07 16:56:35', '2023-03-07 16:56:35'),
(5, 3, 5, 'cod', 'pending', '2023-03-07 17:06:56', '2023-03-07 17:06:56'),
(6, 2, 6, 'cod', 'pending', '2023-04-12 12:05:31', '2023-04-12 12:05:31'),
(7, 2, 7, 'cod', 'pending', '2023-04-12 12:12:14', '2023-04-12 12:12:14'),
(8, 3, 8, 'cod', 'pending', '2023-04-12 15:32:10', '2023-04-12 15:32:10'),
(9, 2, 9, 'cod', 'pending', '2023-04-16 22:25:47', '2023-04-16 22:25:47'),
(10, 2, 10, 'cod', 'pending', '2023-04-16 22:26:59', '2023-04-16 22:26:59'),
(11, 2, 11, 'cod', 'pending', '2023-04-17 12:48:13', '2023-04-17 12:48:13'),
(12, 4, 12, 'cod', 'pending', '2023-04-17 12:58:25', '2023-04-17 12:58:25'),
(13, 2, 13, 'cod', 'pending', '2023-04-17 13:34:53', '2023-04-17 13:34:53');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `utype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SAFE', 'sesegueni@gmail.com', NULL, '$2y$10$STd7uLk4tnWO80SBSRvosuswUW3504yEUfLv3fPfTbf74pDVHPREC', 'ADM', NULL, '2023-02-21 13:40:19', '2023-02-21 13:40:19'),
(2, 'Catalyst', 'seifosg911@gmail.com', NULL, '$2y$10$9J4rsCIqbcJO5oEvnbTGPeUpgX5ey3bLtcXKGFP2wN5znmDwAfw6m', 'USR', 'aQ7NIHXCgryGzHjnXjk4SHqXr0IkUMTNbl4PjHwUA1uvIYsmEhFg3zHP5YjX', '2023-02-21 16:07:47', '2023-04-19 16:03:46'),
(3, 'Lambda', 'Lambda@valve.com', NULL, '$2y$10$Sckhb4Cn5JB1Ny0h0BqhYOhyzVcDB7mQh5oP3khMtBptHK/hjy3OS', 'USR', NULL, '2023-03-07 17:05:44', '2023-03-07 17:05:44'),
(4, 'Se1f0', 'nijixeb319@lieboe.com', NULL, '$2y$10$NNnoxmw8DBKTIfwILLNB7OCSx.xfwr6Xkvs3d1HbKuwR1R5hdg5Iu', 'USR', NULL, '2023-04-17 12:58:02', '2023-04-17 12:58:02'),
(5, 'temp', 'sonuhy@brand-app.biz', NULL, '$2y$10$kPKtAhFC9xXhvI3VL0VchuX3WNWL.qvuvfpbC6Cr1jMMJeubgx2xW', 'USR', NULL, '2023-04-19 12:17:36', '2023-04-19 12:17:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
