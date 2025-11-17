-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 17, 2025 at 06:10 AM
-- Server version: 8.0.40
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1762257800),
('CART', '5', 1762712348),
('Category', '5', 1762710658),
('createProduct', '4', 1762266715),
('createProduct', '5', 1762714953),
('customer', '10', 1762876714),
('customer', '11', 1763084995),
('customer', '12', 1763085077),
('Home', '5', 1762713847),
('moderator', '2', 1762257800),
('moderator', '4', 1762361356),
('ProductImageList', '5', 1762712210),
('SliderList', '5', 1762712119),
('worker', '5', 1762711962);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` smallint NOT NULL,
  `description` text COLLATE utf8mb3_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/admin/*', 2, NULL, NULL, NULL, 1762268251, 1762268251),
('/cart/*', 2, NULL, NULL, NULL, 1762359261, 1762359261),
('/cart/index', 2, NULL, NULL, NULL, 1762711007, 1762711007),
('/cart/view', 2, NULL, NULL, NULL, 1762711007, 1762711007),
('/category/*', 2, NULL, NULL, NULL, 1762582955, 1762582955),
('/category/index', 2, NULL, NULL, NULL, 1762359055, 1762359055),
('/category/view', 2, NULL, NULL, NULL, 1762359055, 1762359055),
('/customer/*', 2, NULL, NULL, NULL, 1762610697, 1762610697),
('/customer/index', 2, NULL, NULL, NULL, 1762268783, 1762268783),
('/customer/view', 2, NULL, NULL, NULL, 1762396232, 1762396232),
('/message/*', 2, NULL, NULL, NULL, 1763286031, 1763286031),
('/message/index', 2, NULL, NULL, NULL, 1763286481, 1763286481),
('/order/*', 2, NULL, NULL, NULL, 1762359236, 1762359236),
('/order/index', 2, NULL, NULL, NULL, 1762604241, 1762604241),
('/order/view', 2, NULL, NULL, NULL, 1762604241, 1762604241),
('/partner/*', 2, NULL, NULL, NULL, 1762587141, 1762587141),
('/partner/index', 2, NULL, NULL, NULL, 1762602374, 1762602374),
('/partner/view', 2, NULL, NULL, NULL, 1762602374, 1762602374),
('/product-image/*', 2, NULL, NULL, NULL, 1762358962, 1762358962),
('/product-image/index', 2, NULL, NULL, NULL, 1762358962, 1762358962),
('/product-image/view', 2, NULL, NULL, NULL, 1762358962, 1762358962),
('/product/create', 2, NULL, NULL, NULL, 1762266952, 1762266952),
('/product/delete', 2, NULL, NULL, NULL, 1762266952, 1762266952),
('/product/index', 2, NULL, NULL, NULL, 1762266952, 1762266952),
('/product/update', 2, NULL, NULL, NULL, 1762266952, 1762266952),
('/product/view', 2, NULL, NULL, NULL, 1762266952, 1762266952),
('/setting/*', 2, NULL, NULL, NULL, 1762358754, 1762358754),
('/setting/index', 2, NULL, NULL, NULL, 1762358866, 1762358866),
('/setting/update', 2, NULL, NULL, NULL, 1762619258, 1762619258),
('/setting/view', 2, NULL, NULL, NULL, 1762358866, 1762358866),
('/site/index', 2, NULL, NULL, NULL, 1762435572, 1762435572),
('/site/profile', 2, NULL, NULL, NULL, 1762839844, 1762839844),
('/slider/*', 2, NULL, NULL, NULL, 1762359162, 1762359162),
('/slider/index', 2, NULL, NULL, NULL, 1762603325, 1762603325),
('/slider/view', 2, NULL, NULL, NULL, 1762603325, 1762603325),
('/source-message/*', 2, NULL, NULL, NULL, 1763286022, 1763286022),
('/source-message/index', 2, NULL, NULL, NULL, 1763286089, 1763286089),
('/support/*', 2, NULL, NULL, NULL, 1763274135, 1763274135),
('/support/index', 2, NULL, NULL, NULL, 1763274009, 1763274009),
('admin', 1, NULL, NULL, NULL, 1762257800, 1762257800),
('All Cart', 2, NULL, NULL, NULL, 1762712373, 1762712373),
('All Category', 2, NULL, NULL, NULL, 1762582993, 1762582993),
('All Customer', 2, NULL, NULL, NULL, 1762610713, 1762610713),
('All SourceMessage', 2, NULL, NULL, NULL, 1763286156, 1763286156),
('All Support', 2, NULL, NULL, NULL, 1763274111, 1763274111),
('CART', 2, NULL, NULL, NULL, 1762359343, 1762359343),
('Category', 2, NULL, NULL, NULL, 1762359073, 1762359073),
('createProduct', 2, 'Create a product', NULL, NULL, 1762257800, 1762257800),
('customer', 1, NULL, NULL, NULL, 1762876628, 1762876628),
('CustomerList', 2, NULL, NULL, NULL, 1762268824, 1762268824),
('Home', 2, NULL, NULL, NULL, 1762713819, 1762713819),
('moderator', 1, NULL, NULL, NULL, 1762257800, 1762257800),
('Order', 2, NULL, NULL, NULL, 1762711259, 1762711259),
('OrderList', 2, NULL, NULL, NULL, 1762359273, 1762711107),
('OtherProduct', 2, NULL, NULL, NULL, 1762267498, 1762267498),
('PartnerList', 2, NULL, NULL, NULL, 1762602485, 1762602495),
('ProductImage', 2, NULL, NULL, NULL, 1762712231, 1762712231),
('ProductImageList', 2, NULL, NULL, NULL, 1762358977, 1762712196),
('ProductList', 2, NULL, NULL, NULL, 1762710909, 1762710909),
('RBAC', 2, NULL, NULL, NULL, 1762268288, 1762268288),
('Settings', 2, NULL, NULL, NULL, 1762619275, 1762619275),
('SiteProfile', 2, NULL, NULL, NULL, 1762839921, 1762839921),
('SiteSetting', 2, NULL, NULL, NULL, 1762358788, 1762358788),
('Slider', 2, NULL, NULL, NULL, 1762359169, 1762359169),
('SliderList', 2, NULL, NULL, NULL, 1762712098, 1762712098),
('SourceMessage', 2, NULL, NULL, NULL, 1763286204, 1763286204),
('updateProduct', 2, 'Update product', NULL, NULL, 1762257800, 1762257800),
('worker', 1, NULL, NULL, NULL, 1762710781, 1762710781);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('RBAC', '/admin/*'),
('All Cart', '/cart/*'),
('CART', '/cart/index'),
('CART', '/cart/view'),
('All Category', '/category/*'),
('Category', '/category/index'),
('Category', '/category/view'),
('All Customer', '/customer/*'),
('CustomerList', '/customer/index'),
('CustomerList', '/customer/view'),
('admin', '/message/*'),
('Order', '/order/*'),
('OrderList', '/order/index'),
('OrderList', '/order/view'),
('admin', '/partner/*'),
('PartnerList', '/partner/index'),
('PartnerList', '/partner/view'),
('ProductImage', '/product-image/*'),
('ProductImageList', '/product-image/index'),
('ProductImageList', '/product-image/view'),
('createProduct', '/product/create'),
('OtherProduct', '/product/index'),
('ProductList', '/product/index'),
('updateProduct', '/product/update'),
('OtherProduct', '/product/view'),
('ProductList', '/product/view'),
('SiteSetting', '/setting/*'),
('SiteSetting', '/setting/index'),
('SiteSetting', '/setting/view'),
('Home', '/site/index'),
('OtherProduct', '/site/index'),
('SiteProfile', '/site/profile'),
('Slider', '/slider/*'),
('SliderList', '/slider/index'),
('SliderList', '/slider/view'),
('admin', '/source-message/*'),
('All SourceMessage', '/source-message/*'),
('SourceMessage', '/source-message/index'),
('All Support', '/support/*'),
('admin', 'All Cart'),
('admin', 'All Category'),
('admin', 'All Customer'),
('admin', 'All Support'),
('moderator', 'CART'),
('worker', 'CART'),
('moderator', 'Category'),
('worker', 'Category'),
('admin', 'createProduct'),
('worker', 'createProduct'),
('moderator', 'CustomerList'),
('worker', 'CustomerList'),
('worker', 'Home'),
('admin', 'moderator'),
('admin', 'Order'),
('moderator', 'OrderList'),
('worker', 'OrderList'),
('moderator', 'OtherProduct'),
('moderator', 'PartnerList'),
('admin', 'ProductImage'),
('moderator', 'ProductImageList'),
('worker', 'ProductImageList'),
('worker', 'ProductList'),
('admin', 'RBAC'),
('admin', 'Settings'),
('admin', 'SiteProfile'),
('admin', 'SiteSetting'),
('admin', 'Slider'),
('moderator', 'Slider'),
('moderator', 'updateProduct');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `count` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `pid` int DEFAULT NULL,
  `name_uz` varchar(255) DEFAULT NULL,
  `order` int DEFAULT '0',
  `img` varchar(255) DEFAULT NULL,
  `name_ru` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `pid`, `name_uz`, `order`, `img`, `name_ru`, `name_en`) VALUES
(1, NULL, 'Smartfonlar', 0, 'uploads/category/633b5984f8af8c7e5a371e0b-na-i13-pro-max-cell-phones-6-3-inch-hd_K54wxE.jpg', 'Смартфоны', 'Smartphones'),
(2, 1, 'Samsung', 0, 'uploads/category/samsung_PwmoYn.webp', 'Samsung', 'Samsung'),
(3, 1, 'Xiaomi', 0, 'uploads/category/xiaomi_sggHR4.webp', 'Xiaomi', 'Xiaomi'),
(4, 1, 'IPhone', 0, 'uploads/category/Iphone_PfexAN.webp', 'IPhone', 'IPhone'),
(5, NULL, 'Kompyuterlar', 0, 'uploads/category/laptopstopicpage-2048px-3685-2x1-1_QGCTZD.webp', 'Компьютеры', 'Computers'),
(6, 5, 'Asus', 0, 'uploads/category/asus_aA1tqV.png', 'Асус', 'Asus'),
(7, 5, 'Mac', 0, 'uploads/category/macbook_y2ZsA9.jpg', 'Мак', 'Mac'),
(8, 5, 'Lenovo', 0, 'uploads/category/lenovo_cUrSyZ.jpg', 'Леново', 'Lenovo'),
(9, 5, 'Acer', 0, 'uploads/category/acer_MZ9vug.jpg', 'Acep', 'Acer'),
(10, NULL, 'Maishiy Texnika', 0, 'uploads/category/920__95_1776378711_HP3RdW.jpg', 'Бытовая техника', 'Home Appliances'),
(11, 10, 'Changyutgich', 0, 'uploads/category/changyutgich_ZWHEOO.webp', 'Пылесос', 'Vacuum Cleaner'),
(12, 10, 'Kir yuvish mashinasi', 0, 'uploads/category/kiryuvish_DCSNpa.webp', 'Стиральная машина', 'Washing Machine'),
(13, 10, 'Dazmol', 0, 'uploads/category/dazmol_yd_bfY.jpg', 'Утюг', 'Iron'),
(14, 10, 'Tikuv mashinasi', 0, 'uploads/category/tikuv_Ie9n6u.webp', 'Швейная машина', 'Sewing machine');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `user_id`, `f_name`, `l_name`, `phone`, `address`, `img`) VALUES
(14, 1, 'Mavzurov', 'Nurali', '+998992907704', 'Samarkand city', 'uploads/customer/customer_vS2Y.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES
(1, 'Customer', NULL, '/customer/index', 1, NULL),
(2, 'Product', NULL, '/product/index', NULL, NULL),
(3, 'Home', NULL, '/site/index', NULL, NULL),
(5, 'Category', NULL, '/category/index', 2, NULL),
(6, 'Partner', NULL, '/partner/index', NULL, NULL),
(7, 'ProductImage', NULL, '/product-image/index', NULL, NULL),
(8, 'Slider', NULL, '/slider/index', NULL, NULL),
(9, 'Order', NULL, '/order/index', NULL, NULL),
(10, 'Settings', NULL, '/setting/update', NULL, NULL),
(11, 'Cart', NULL, '/cart/index', 3, NULL),
(12, 'Support', NULL, '/support/index', NULL, NULL),
(13, 'SourceMessage', NULL, '/source-message/index', NULL, NULL),
(14, 'Message', NULL, '/message/index', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int NOT NULL,
  `language` varchar(16) COLLATE utf8mb3_unicode_ci NOT NULL,
  `translation` text COLLATE utf8mb3_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `language`, `translation`) VALUES
(1, 'ru', 'Имя'),
(1, 'uz', 'Nomi'),
(2, 'ru', 'Порядок'),
(2, 'uz', 'Tartibi'),
(3, 'ru', 'Родитель'),
(3, 'uz', 'Parent'),
(4, 'ru', 'Изображение'),
(4, 'uz', 'Rasmi'),
(5, 'uz', 'Nomi'),
(6, 'ru', 'Название'),
(7, 'en', 'Name'),
(8, 'en', 'Inactive'),
(8, 'ru', 'Неактивный'),
(9, 'en', 'active'),
(9, 'ru', 'активный'),
(10, 'ru', 'Создать категорию'),
(10, 'uz', 'Categoriya Yaratish'),
(11, 'ru', 'Категории'),
(11, 'uz', 'Kategoriyalar'),
(12, 'ru', 'Цена'),
(12, 'uz', 'Narxi'),
(13, 'ru', 'Категория'),
(13, 'uz', 'Kategoriyasi'),
(14, 'ru', 'Статус'),
(14, 'uz', 'Holati'),
(15, 'ru', 'Порядок'),
(15, 'uz', 'Tartibi'),
(16, 'ru', 'Создать продукт'),
(16, 'uz', 'Mahsulot Qo\'shish'),
(18, 'ru', 'пользователя'),
(18, 'uz', 'Mijoz '),
(19, 'ru', 'Адрес'),
(19, 'uz', 'Manzil'),
(20, 'ru', 'Телефон'),
(20, 'uz', 'Telefon'),
(21, 'ru', 'Создано в'),
(21, 'uz', 'Yaratilgan vaqti'),
(22, 'ru', 'Обновлено в'),
(22, 'uz', 'Yangilangan Vaqti'),
(23, 'ru', 'Создать заказ'),
(23, 'uz', 'Order Yaratish'),
(24, 'ru', 'Заказы'),
(24, 'uz', 'Orderlar'),
(25, 'ru', 'Имя партнера'),
(25, 'uz', 'Hamkor Nomi'),
(26, 'ru', 'Изображение'),
(26, 'uz', 'Rasmi'),
(27, 'ru', 'Номер заказа'),
(27, 'uz', 'Tartib Raqami'),
(28, 'ru', 'Партнеры'),
(28, 'uz', 'Hamkorlar'),
(29, 'ru', 'Партнер'),
(29, 'uz', 'Partnyor'),
(30, 'ru', 'Файлы изображений'),
(30, 'uz', 'Rasim Fayillari'),
(31, 'ru', 'Сменить партнера'),
(31, 'uz', 'Hamkorni O\'zgartirish'),
(32, 'ru', 'Обновлять'),
(32, 'uz', 'Yangilash'),
(33, 'en', 'Inactive'),
(33, 'ru', 'Неактивный'),
(34, 'en', 'Active'),
(34, 'ru', 'Aктивный'),
(35, 'ru', 'Продукты'),
(35, 'uz', 'Mahsulotlar'),
(36, 'ru', 'Английское имя'),
(36, 'uz', 'Inglizcha Nomi'),
(37, 'ru', 'Русское имя'),
(37, 'uz', 'Ruscha Nomi'),
(38, 'ru', 'Узбекское имя'),
(38, 'uz', 'O\'zbekcha Nomi'),
(39, 'ru', 'Активный'),
(39, 'uz', 'Faol'),
(40, 'ru', 'Не активен'),
(40, 'uz', 'Faol Emas'),
(41, 'en', 'Inactive'),
(41, 'ru', 'Не активен'),
(42, 'en', 'Active'),
(42, 'ru', 'Aктивен'),
(43, 'ru', 'Фотографии продукта'),
(43, 'uz', 'Mahsulot Rasimlari'),
(44, 'ru', 'Узбекское описание'),
(44, 'uz', 'Uzbekcha Tavsifi'),
(45, 'ru', 'Английское описание'),
(45, 'uz', 'Inglizcha Tavsifi'),
(46, 'ru', 'Описание на русском языке'),
(46, 'uz', 'Ruscha Tavsifi'),
(47, 'ru', 'Обновление продукта'),
(47, 'uz', 'Mahsulotni Yangilash'),
(48, 'ru', 'Фотографии продукта'),
(48, 'uz', 'Mahsulot Rasimlari'),
(49, 'ru', 'Добавить изображение продукта'),
(49, 'uz', 'Mahsulot Rasmini qo\'shish'),
(50, 'ru', 'Обновить изображения продуктов'),
(50, 'uz', 'Mahsulot Rasimlarini Yangilash'),
(51, 'ru', 'Продукты'),
(51, 'uz', 'Mahsulotlar'),
(52, 'ru', 'Обновлять'),
(52, 'uz', 'Yangilash'),
(53, 'ru', 'Удалить'),
(53, 'uz', 'O\'chirish'),
(54, 'ru', 'Клиенты'),
(54, 'uz', 'Xaridorlar'),
(55, 'ru', 'Выберите пользователя'),
(55, 'uz', 'Foydalanuvchini tanlang'),
(56, 'ru', 'Изменить клиента'),
(56, 'uz', 'Mijozni O\'zgartirish'),
(57, 'ru', 'Клиенты'),
(57, 'uz', 'Mijozlar'),
(58, 'ru', 'Создание слайдера'),
(58, 'uz', 'Slider Yaratish'),
(59, 'ru', 'Изображения'),
(59, 'uz', ' Manzili'),
(60, 'ru', 'Слайдеры'),
(60, 'uz', 'Sliderlar'),
(61, 'ru', 'Добавить клиента'),
(61, 'uz', 'Mijoz qo\'shish'),
(62, 'ru', 'Обновить категорию'),
(62, 'uz', 'Kategoriyani Yangilash'),
(63, 'ru', 'Выберите категорию'),
(63, 'uz', 'Kategoriyani Tanlash'),
(64, 'ru', 'Число'),
(64, 'uz', 'Soni '),
(65, 'ru', 'Создать корзину'),
(65, 'uz', 'Kart Yaratish'),
(66, 'ru', 'Тележки'),
(66, 'uz', 'Kartlar'),
(67, 'ru', 'Выберите продукт'),
(67, 'uz', 'Mahsulotni Tanlash'),
(68, 'ru', 'тележки'),
(68, 'uz', 'Savatchalar'),
(69, 'ru', 'Обновить корзину'),
(69, 'uz', 'Savatchani O\'zgartirish'),
(70, 'ru', 'Поздравление'),
(70, 'uz', 'Tabriklaymiz  Siz Muvaffaqiyatli Kirdingiz'),
(71, 'ru', 'Электронная почта'),
(71, 'uz', 'Elektron pochta'),
(72, 'ru', 'Телефон'),
(72, 'uz', 'Telefon Raqam'),
(73, 'ru', 'Название сайта'),
(73, 'uz', 'Site Nomi'),
(74, 'ru', 'Описание'),
(74, 'uz', 'Tavsifi'),
(75, 'ru', 'URL-адрес Facebook'),
(75, 'uz', 'Facebook URL manzili'),
(76, 'ru', 'URL-адрес телеграммы'),
(76, 'uz', 'Telegram Manzili'),
(77, 'ru', 'Настройки'),
(77, 'uz', 'Sozlamalar'),
(78, 'ru', 'Настройки сайта'),
(78, 'uz', 'Sayt Sozlamalari'),
(79, 'ru', 'URL-адрес Instagram'),
(79, 'uz', 'Instagram manzili'),
(80, 'ru', 'URL-адрес YouTube'),
(80, 'uz', 'Youtube Manzili'),
(81, 'ru', 'Популярные продукты'),
(81, 'uz', 'Mashhur Mahsulotlar'),
(82, 'ru', 'Имя'),
(82, 'uz', 'Mijoz Ismi'),
(83, 'ru', 'Создать поддержку'),
(83, 'uz', 'Support Yaratish'),
(84, 'ru', 'Поддерживает'),
(84, 'uz', 'Yordamlar'),
(85, 'ru', 'Обновление поддержки'),
(85, 'uz', 'Yordamni yangilash'),
(86, 'ru', 'Категории'),
(86, 'uz', 'Kategoriyalar'),
(87, 'ru', 'Сообщения'),
(87, 'uz', 'Matinlar'),
(88, 'ru', 'Создать исходное сообщение'),
(88, 'uz', 'Manba xabarini yarating'),
(89, 'ru', 'Исходное сообщение'),
(89, 'uz', 'Manba xabari'),
(90, 'ru', 'Обновить исходное сообщение'),
(90, 'uz', 'Manba xabarini yangilash'),
(91, 'ru', 'Языки'),
(91, 'uz', 'Tillar'),
(92, 'ru', 'Перевод'),
(92, 'uz', 'Tarjimalar'),
(93, 'ru', 'Сообщения'),
(93, 'uz', 'Xabarlar'),
(94, 'ru', 'Создать сообщение'),
(94, 'uz', 'Xabar Yaratish'),
(95, 'ru', 'Обновить сообщение'),
(95, 'uz', 'Xabarni yangilash');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1761198233),
('m130524_201442_init', 1762257637),
('m140506_102106_rbac_init', 1762257278),
('m140602_111327_create_menu_table', 1762266455),
('m150207_210500_i18n_init', 1762799776),
('m160312_050000_create_user', 1762266455),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1762257278),
('m180523_151638_rbac_updates_indexes_without_prefix', 1762257278),
('m190124_110200_add_verification_token_column_to_user_table', 1762257692),
('m200409_110543_rbac_update_mssql_trigger', 1762257278),
('m251023_054839_create_customer_table', 1761203491),
('m251023_055500_create_category_table', 1761203491),
('m251023_060005_create_order_table', 1761203491),
('m251023_060653_create_product_table', 1761203491),
('m251023_061004_create_product_image_table', 1761203491),
('m251023_061411_create_order_item_table', 1761203492),
('m251023_061720_create_cart_table', 1761203492),
('m251028_075915_create_partner_table', 1761638415),
('m251029_133351_add_img_column_to_product_table', 1761744847),
('m251030_104533_create_slider_table', 1761821247),
('m251030_133825_create_setting_table', 1761831630),
('m251030_191137_add_img_column_to_category_table', 1761851521),
('m251103_044340_insert_information_to_setting_table', 1762145372),
('m251103_050708_add_description_column_to_setting_table', 1762146441),
('m251104_101027_add_role_column_to_user_table', 1762251040),
('m251104_111145_init_rbac', 1762257800),
('m251111_123239_create_support_table', 1762864954),
('m251111_160943_category_translation', 1762877789),
('m251111_174430_product_translation', 1762883374),
('m251116_044415_add_img_column_to_customer_table', 1763268310);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int NOT NULL,
  `order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `count` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` text,
  `order` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `img`, `order`) VALUES
(1, 'Hamkor1', 'uploads/partner/hamkor1_iEPXRT.png', 0),
(2, 'Hamkor2', 'uploads/partner/hamkor2_HvpNTv.png', 1),
(3, 'Hamkor3', 'uploads/partner/hamkor3_ogZNwM.png', 0),
(4, 'Hamkor4', 'uploads/partner/hamkor4_otnR_I.png', 0),
(11, 'collabrate 3', 'uploads/partner/homiy_KrUjoT.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name_uz` varchar(255) DEFAULT NULL,
  `description_uz` text,
  `price` float DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `status` int DEFAULT '0',
  `order` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `img` varchar(255) DEFAULT NULL,
  `description_ru` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `description_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `name_ru` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name_uz`, `description_uz`, `price`, `category_id`, `status`, `order`, `created_at`, `updated_at`, `img`, `description_ru`, `description_en`, `name_ru`, `name_en`) VALUES
(1, 'Samsung Galaxy Z Fold6 5G 12/256GB Silver Shadow', '<p>Kuchli va almashtirib bo\'lmaydigan Qualcomm Snapdragon 8 Gen 3 protsessori, bir xil darajada kuchli Adreno 750 GPU bilan birgalikda tizimning yaxshilangan ishlashi va barqarorligini kafolatlaydi. Ushbu kombinatsiya multimedia vazifalari, o\'yinlar va yetarli quvvatni talab qiladigan foydalanuvchilarning kundalik echimlari uchun idealdir. Tashqi ko\'rinish haqiqatan ham ta\'sirli: asosiy keng formatli displeyga yuqori aniqlikdagi va mukammal rang xususiyatlariga ega qo\'shimcha tashqi ekran qo\'shildi. Ushbu yechim ko\'proq multi-touch imkoniyatlarini, yaxshilangan ilovalar tajribasini va foydalanish qulayligini ta\'minlaydi. Yangi ekran, shuningdek, old va asosiy funktsiyalarni bajaradigan qo\'shimcha kamera bilan jihozlangan. Ba\'zilar hayron bo\'lishlari mumkin: \"Nega kameralar juda ko\'p?\" Biroq, zamonaviy smartfonlar dunyosida kameralar asosiy rol o\'ynaydi va foydalanuvchilarga turli xil yorug\'lik sharoitlari va stsenariylarida yuqori sifatli fotosuratlar va videolarni yaratish imkoniyatini beradi. Bundan tashqari, yangi gadjet kengaytirilgan operativ va doimiy xotira bilan jihozlangan bo&lsquo;lib, bu ilovalarning muammosiz ishlashini va saqlangan ma&rsquo;lumotlarga tezkor kirishni ta&rsquo;minlaydi. Asosiy modullarning o\'lchamlari o\'zgarishsiz qoldi va oldingi modellar tomonidan belgilangan barcha standartlarga javob beradi. Bu turli sharoitlarda foydalanilganda tasvir va videolarning yuqori sifatini saqlashni ta\'minlaydi. Batareya quvvati 4400 mA&sdot; soatni tashkil etadi, bu o\'rtacha faollik bilan butun kun davomida tizimning to\'liq ishlashini ta\'minlash uchun yetarli.</p>', 21949000, 2, 1, 0, '2025-10-23 10:17:26', '2025-11-11 18:28:19', 'uploads/product/samsung_DnLqlf.webp', 'Мощный и незаменимый процессор Qualcomm Snapdragon 8 Gen 3 в сочетании с таким же мощным графическим процессором Adreno 750 обеспечивает улучшенную производительность и стабильность системы. Эта комбинация идеально подходит для мультимедийных задач, игр и повседневных решений пользователей, требующих достаточной мощности. Внешний вид действительно впечатляет: к основному широкоформатному дисплею добавлен дополнительный внешний экран с высокой точностью и отличной цветопередачей. Это решение обеспечивает больше возможностей для мультитача, улучшенный опыт работы с приложениями и удобство использования.', 'The powerful and indispensable Qualcomm Snapdragon 8 Gen 3 processor, paired with an equally strong Adreno 750 GPU, guarantees enhanced system performance and stability. This combination is ideal for multimedia tasks, gaming, and daily solutions for users requiring sufficient power. The appearance is truly impressive: an additional external screen with high resolution and excellent color characteristics has been added to the main wide-format display', 'Samsung Galaxy Z Fold6 5G 12/256GB Серебряная тень', 'Samsung Galaxy Z Fold6 5G 12/256GB Silver Shadow'),
(2, 'Samsung Galaxy A06 4/128GB Light Blue', '<p>Dizayn Мinimalistik va ergonomik dizayni uni kundalik foydalanish uchun juda qulay qiladi. Korpus mustahkam materiallardan tayyorlangan bo&lsquo;lib, nafaqat qo&lsquo;lda yaxshi seziladi, balki yuqori mustahkamlikka ega, bu esa gadjetning uzoq muddat xizmat qilishini taʼminlaydi. Yaxshi o&lsquo;ylangan shakl va optimal o&lsquo;lchamlari uni cho&lsquo;ntak yoki sumkaga osonlik bilan joylashtirish imkonini beradi, hech qanday noqulaylik tug&lsquo;dirmaydi. Kamera Asosiy kamera ikki moduldan iborat: asosiy sensor 50 MP bo&lsquo;lib, yuqori sifatli tasvirlarni taqdim etadi va eng kichik detallariga ham yaxshi rang uzatishni taʼminlaydi. Qo&lsquo;shimcha 2 MP sensor suratlarni yaxshilashga yordam beradi, chuqurlik effektlarini qo&lsquo;shadi va fonni bulantirish effektini yaratadi, bu esa portret suratga olish uchun juda foydalidir. Kamera maksimal aniqlik va silliq kadr chastotasi bilan video yozish imkoniyatiga ega. Old kamera 8 MP aniqlikka ega bo&lsquo;lib, selfiye va video qo&lsquo;ng&lsquo;iroqlarni aniqlik bilan olish imkonini beradi. Ekran 6.7 dyuymli PLS LSD displeyi bilan taʼminlangan, bu yorqin va to&lsquo;yingan tasvirni kafolatlaydi. Tasvir aniqligi 1600x720 pikselni tashkil etadi, bu kontentni qulay ko&lsquo;rish uchun yetarli. Shuningdek, ekran keng ko&lsquo;rish burchaklariga ega bo&lsquo;lib, har qanday burchakdan qaraganda ham aniq tasvirni saqlaydi. Ko&lsquo;zlarni himoya qilish texnologiyasi uzoq vaqt ishlatish davomida ko&lsquo;zning charchashini kamaytiradi, bu esa gadjetlarni keng qo&lsquo;llash davrida juda muhimdir. Ishlash Smartfon MediaTek Helio G85 chipida ishlaydi, bu chip sakkizta yadroga ega bo&lsquo;lib, taktlash chastotasi 2.0 GHz. Chipset tezkor javob va silliq ishlashni taʼminlaydi, shuningdek, bir vaqtning o&lsquo;zida bir nechta vazifalarni bajarishda ham yuqori samaradorlikni kafolatlaydi. Protsessor va tizimni optimizatsiya qilish zamonaviy ilovalar va ko&lsquo;ngilochar dasturlar bilan muammosiz ishlashni taʼminlaydi. Mali-G52 MP2 grafika protsessori tafsilotli grafikani va o&lsquo;yinlarda barqaror ishlashni taʼminlaydi, mobil ko&lsquo;ngilochar dasturlarni sevuvchilar uchun ajoyib tanlov. Ishchi xotira hajmi 4 GB bo&lsquo;lib, dasturlar o&lsquo;rtasida kechikmasdan almashtirishni kafolatlaydi. 128 GB ichki xotira ko&lsquo;p miqdordagi multimedia kontentini saqlash uchun yetarli, qo&lsquo;shimcha ilovalar uchun ham joy mavjud. Zarurat bo&lsquo;lsa, misroSD kartasi yordamida xotirani kengaytirish mumkin, bu esa turli ehtiyojlarga ega foydalanuvchilar uchun qo&lsquo;shimcha moslashuvchanlikni taʼminlaydi.</p>', 1869000, 2, 0, 0, '2025-10-23 10:20:03', '2025-11-11 18:27:18', 'uploads/product/6a38a980-f655-4377-890d-5522214f28a3_khVieX.webp', 'Удобный и современный смартфон с диагональю 6,7″, выполненный в стильном «светло‑голубом» цвете. Он оснащён процессором MediaTek Helio G85, 4 ГБ оперативной памяти и 128 ГБ встроенной — отличное решение для повседневных задач и мультимедиа. \r\nPhoneMore\r\n+1\r\n\r\nКамера 50 Мп + 2 Мп предоставляет достойное качество снимков, а батарея ёмкостью 5000 мА·ч с поддержкой 25 Вт быстрой зарядки обеспечивает высокий запас работы', 'Stylish and modern smartphone in a “Light Blue” finish, featuring a 6.7″ display and equipped with the powerful MediaTek Helio G85 processor, 4 GB of RAM and 128 GB of storage — perfect for everyday use and multimedia. The dual rear camera (50 MP + 2 MP) delivers decent photo quality, while the 5000 mAh battery with 25 W fast charging ensures long usage. With its HD+ screen (720×1600) and appealing design, the Galaxy A06 is an excellent value for money.', 'Samsung Galaxy A06 4/128 ГБ Светло‑голубой', 'Samsung Galaxy A06 4/128GB Light Blue'),
(3, 'Xiaomi 15 12/512GB Black', '<p>Dizayn Ushbu mobil qurilma zamonaviy uslub va qulay tuzilishni uyg&lsquo;unlashtirgan holda, kundalik foydalanish uchun qulay sharoit yaratadi. Qurilmaning 191 gramm og&lsquo;irligi uni cho&lsquo;ntak yoki sumkada sezilmas qiladi. Korpusi toblangan shishadan tayyorlangan bo&lsquo;lib, metall ramkasi qo&lsquo;shimcha mustahkamlik va shikastlanishdan himoyani ta&rsquo;minlaydi. Yuqori sifatli materiallarning qo&lsquo;llanilishi uzoq vaqt davomida chidamlilikni va mukammal ko&lsquo;rinishni kafolatlaydi. Ma&rsquo;lumotlarni saqlash va tezkorlik 512 GB hajmli o&lsquo;rnatilgan xotira katta hajmdagi ma&rsquo;lumotlarni - fotosuratlar va videolardan tortib dasturlar va fayllargacha joylashtirish uchun yetarli joyni ta&rsquo;minlaydi. 12 GB hajmli tezkor xotira kechikishlarsiz bir vazifadan boshqasiga bir zumda o&lsquo;tish imkonini beradi. Yuqori unumdorlik interfeysning ravon ishlashi, ko&lsquo;p vazifalilik va resurs talab qiladigan ilovalarni barqaror yuklab olish imkonini beradi. Ekran CrystalRes AMOLED texnologiyasiga ega displey tasvirning aniqligi, to&lsquo;yinganligi va realligini kafolatlaydi. Diagonal 6.36 dyuym bo&lsquo;lib, 2670 &times; 1200 piksel aniqlik darajasi batafsil tasvirni kafolatlaydi. 3200 nit yorqinligi yorqin yorug&lsquo;likda ham ko&lsquo;rishni qulay qiladi. 460 PPI zichligi, 68 milliard rangni qo&lsquo;llab-quvvatlash va 1-120 Gs yangilanish chastotasi ishlash va dam olish uchun ideal sharoit yaratadi. Fotosuratga olish imkoniyatlari Kamera har biri 50 megapikselga ega bo&lsquo;lgan uchta modul bilan jihozlangan bo&lsquo;lib, portretdan tortib makrosyomkagacha har qanday rejimda batafsil suratlar olish imkonini beradi. Tasvirlarni intellektual qayta ishlash tizimi ranglarni aniq uzatish, yuqori aniqlik va yaxshilangan dinamik diapazonni ta&rsquo;minlaydi. &fnof;/2.0 diafragmali 32 megapiksellik old kamera sifatli selfilar va aniq video qo&lsquo;ng&lsquo;iroqlarni ta&rsquo;minlaydi.</p>', 12677000, 3, 0, 0, '2025-10-23 10:22:25', '2025-11-11 18:41:47', 'uploads/product/c1fed1d5-e4a5-4167-a4b9-32f373193f4c_58PWJZ.webp', 'Флагманский смартфон, оснащённый передовым чипсетом Snapdragon 8 Elite на 3 нм техпроцессе, 12 ГБ оперативной памяти LPDDR5X и накопителем 512 ГБ UFS 4.0. \r\nXiaomi\r\n+2\r\nXiaomi\r\n+2\r\n\r\n6,36‑дюймовый LTPO AMOLED‑дисплей с разрешением 2670 × 1200, частотой обновления до 120 Гц и пиковым уровнем яркости до 3200 нит делает изображение ярким и насыщенным. \r\nXiaomi\r\n+1\r\n\r\nКомпактный корпус (152,3 × 71,2 × ≈8,1 мм) и вес около 191 г подчёркивают премиальность модели. \r\nXiaomi\r\n+1\r\n\r\nКроме того, устройство поддерживает высокую производительность, быструю зарядку и современные функции — идеальный выбор для требовательных пользователей.', 'The Xiaomi 15 12/512 GB Black is a compact flagship smartphone powered by the advanced Snapdragon 8 Elite chipset built on a 3 nm process, featuring 12 GB of LPDDR5X RAM and 512 GB UFS 4.0 storage. \r\nXiaomi\r\n+2\r\nXiaomi\r\n+2\r\n\r\nIt boasts a 6.36″ LTPO AMOLED display with a resolution of 2670 × 1200, up to 120 Hz refresh rate, and a peak brightness up to 3200 nits for superb visual experience. \r\nXiaomi\r\n\r\nWith compact dimensions (152.3 × 71.2 × ~8.1 mm) and a weight around 191 g, it offers premium feel and portability', 'Xiaomi 15 12/512 ГБ Черный', 'Xiaomi 15 12/512GB Black'),
(4, 'ASUS Vivobook 15 X1504VA-BQ322 Noutbuki', '<p>ASUS Vivobook 15 - bu yetakchi yuqori texnologiya ishlab chiqaruvchilaridan birining zamonaviy, shinam va ko&lsquo;p qirrali noutbukidir. Ushbu model innovatsion texnik ta&rsquo;minot, ergonomik dizayn va yuqori unumdorlikning uyg&lsquo;un uyg&lsquo;unligini o&lsquo;zida mujassam etgan. Akkumulyator bilan birgalikda umumiy og&lsquo;irligi 1,7 kg ni tashkil etadi, bu esa uni sumka yoki ryukzakda oson olib yurishga imkon beradi. Korpus tirnalishlar va mexanik shikastlanishlarga chidamli bo&lsquo;lgan mustahkam plastikdan tayyorlangan. Klaviatura tugmalarining qulay joylashuvi mavjud. Bundan tashqari, u imo-ishoralarni qo&lsquo;llab-quvvatlaydigan va tizim bilan o&lsquo;zaro aloqani osonlashtiradigan to&lsquo;liq tachpad bilan jihozlangan. Displey Uning asosiy xususiyatlaridan biri 1920&times;1080 piksel (Full HD) o&lsquo;lchamli katta 15.6 dyuymli displeydir. Bunday ekran tasvirning tiniqligini va yuqori aniqligini ta&rsquo;minlab, qurilmani filmlar tomosha qilish, matnlar bilan ishlash, ofis dasturlari va internetda ishlash uchun ajoyib tanlovga aylantiradi. IPS matritsasi ekran qiya holatda bo&lsquo;lganda ham tasvir sifatini saqlab qolib, to&lsquo;yingan ranglar va keng ko&lsquo;rish burchaklarini kafolatlaydi. 60 Gts yangilanish tezligi ravon tasvirni ta&rsquo;minlaydi.</p>', 7190000, 6, 0, 0, '2025-10-28 11:21:36', '2025-11-11 18:42:58', 'uploads/product/6e2739fe-88f0-4c44-91a2-a6bccf653898_St4cum.webp', 'Ноутбук ASUS Vivobook 15 X1504VA‑BQ322 — это сбалансированная 15,6″ FHD модель, созданная для повседневной работы, учёбы и мультимедиа. Оснащён процессором Intel® Core™ 12‑го/13‑го поколения и интегрированной графикой Intel®, он обеспечивает плавную работу приложений и развлечений. Антибликовый Full HD дисплей обеспечивает чёткое изображение, а поддержка двухканальной памяти и быстрый NVMe SSD гарантируют отзывчивость системы. Благодаря поддержке USB‑C, HDMI и современной связи Vivobook готов к современным задачам и ежедневному использованию.', 'The ASUS Vivobook 15 X1504VA‑BQ322 is a well‑balanced 15.6″ FHD laptop designed for everyday productivity and multimedia use. Equipped with a 12th/13th‑gen Intel® Core™ processor and integrated Intel® graphics, it delivers smooth performance for work, study and entertainment. The anti‑glare Full HD display offers sharp visuals, while dual‑channel memory support and a fast NVMe SSD provide responsive operations. With USB‑C, HDMI and modern connectivity, the Vivobook is ready for modern workflows and everyday tasks.', 'ASUS Vivobook 15 X1504VA‑BQ322 Ноутбук', 'ASUS Vivobook 15 X1504VA‑BQ322 Laptop'),
(5, 'ASUS Vivobook Go E1504FA-BQ091 R3-7320U/8/256GB Noutbuki', '<p>ASUS Vivobook Go E1504FA-BQ091 &mdash; o&lsquo;qish, ofis jarayonlari va kundalik foydalanish uchun qulay portativ kompyuter. Qurilma og&lsquo;irligi atigi 1.63 kg, bu modelni tashishda juda yengil qiladi. Korpus mustahkam plastikdan yasalgan bo&lsquo;lib, qattiq qora rangda ishlab chiqilgan. Apparat oldindan o&lsquo;rnatilgan tizimsiz (No OS) taqdim etiladi, egasi esa kerakli platformani o&lsquo;zi belgilaydi. Mustahkam Li-Ion akkumulyator sig&lsquo;imi 45 Vt&middot;soat, uzoq muddat davomida ishlash imkonini beradi. 15.6 dyuym ekran IPS-matritsa asosida qurilgan bo&lsquo;lib, 1920x1080 aniqlik va 60 Gts chastotani qo&lsquo;llab-quvvatlaydi. Bunday konfiguratsiya tiniq tasvir, yorqin rang va keng ko&lsquo;rish burchagini kafolatlaydi. Onlayn muloqot uchun dinamiklar, mikrofon va veb-kamera mavjud bo&lsquo;lib, ular suhbat jarayonini qulay qiladi. Markazda AMD Ryzen 3 7320U protsessori ishlaydi, u 2.4 GGs tezlikda funksiyalashadi va 4.1 GGs gacha tezlashishi mumkin. To&lsquo;rt yadro va sakkiz oqim ofis dasturlarini hamda multimedia ilovalarini samarali bajaradi. Grafik imkoniyatlar uchun integratsiyalashgan AMD Radeon javobgar bo&lsquo;lib, video, rasm va oddiy o&lsquo;yinlar bilan ishlash imkonini beradi.</p>', 6889000, 6, 0, 0, '2025-10-28 11:22:52', '2025-11-11 18:44:00', 'uploads/product/6e2739fe-88f0-4c44-91a2-a6bccf653898_qTqYMF.webp', 'Ноутбук ASUS Vivobook Go 15 (E1504FA‑BQ091) — стильное и практичное решение с диагональю 15,6″ в разрешении Full HD, созданное для ежедневной работы и комфортного использования. Оснащён процессором AMD Ryzen 3 7320U (4 ядра, частота до 4,1 ГГц), 8 ГБ оперативной памяти и SSD‑накопителем на 256 ГБ — он уверенно справляется с многозадачностью и повседневными задачами. \r\nNOUT.AM\r\n+1\r\n\r\nАнтибликовый экран с разрешением 1920×1080, порт USB C и лёгкий вес (~1,6 кг) позволяют работать, смотреть фильмы и даже играть с комфортом. \r\nalta.ge\r\n\r\nОтличный выбор для студентов, специалистов и тех, кто ценит универсальность, современность и доступную цену.', 'The ASUS Vivobook Go 15 (E1504FA‑BQ091) is a sleek and efficient 15.6″ Full HD laptop built for everyday productivity and portability. Powered by the AMD Ryzen 3 7320U processor (4 cores, up to 4.1 GHz) and paired with 8 GB of RAM and a 256 GB SSD, it effortlessly handles multitasking and day‑to‑day tasks. \r\nalta.ge\r\n+1\r\n\r\nFeaturing a crisp 1920×1080 anti‑glare display, USB‑C connectivity, and a lightweight design (~1.6 kg), this machine makes working, streaming, and casual gaming more fluid.', 'ASUS Vivobook Go 15 E1504FA‑BQ091 Ноутбук', 'ASUS Vivobook Go 15 E1504FA‑BQ091 Laptop'),
(6, 'ASUS Vivobook Go 15 E1504FA-BQ210 Noutbuki', '<p>ASUS Vivobook Go 15 E1504FA-BQ210 unumdorlik va portativlikning ajoyib kombinatsiyasi. Uning 1920x1080 pikselli va 16:9 nisbatdagi 15,6 dyuymli Full HD ekrani IPS texnologiyasi va &ldquo;блик&rdquo;larni kamaytiradigan va uzoq ish vaqtida qulaylikni oshiradigan mat qoplama tufayli aniq va yorqin tasvirlarni beradi. 250 nits ekran yorqinligi uni bino ichida ham, tashqarisida ham foydalanish uchun qulay qiladi. Ushbu noutbuk kuchli to&lsquo;rt yadroli AMD Ryzen 3 7320U protsessori bilan ta&rsquo;minlangan bo&lsquo;lib, 2,4 GGts li asosiy chastota va 4 MB keshga ega bo&lsquo;lib, yuqori unumli ko&lsquo;p vazifalarni bajarishni ta&rsquo;minlaydi. 5500 MGts chastotali 8 GB DDR5 operativ xotira ilovalar va ko\'p vazifali vazifalar bilan tez va samarali ishlash imkonini beradi. O\'rnatilgan AMD Radeon Graphics multimedia vazifalari va kundalik ilovalar uchun yaxshi tasvir sifatini ta\'minlaydi. Ma\'lumotlarni saqlash uchun tez va keng 512 Gb SSD taqdim etiladi, bu tizim va ilovalarning chaqmoq tezligida yuklanishini ta\'minlaydi.</p>', 6990000, 6, 0, 0, '2025-10-28 11:23:42', '2025-11-11 18:45:14', 'uploads/product/d9786fc5-ae1b-4147-893f-7826673754fd_bgT3AK.webp', 'Представляем ноутбук ASUS Vivobook Go 15 (E1504FA‑BQ210) — отличное сочетание производительности и стиля. Модель оснащена процессором AMD Ryzen 3 7320U, 8 ГБ оперативной памяти DDR5 и SSD‑накопителем на 512 ГБ, что обеспечивает уверенную работу в режиме многозадачности, просмотре контента и повседневных задачах.', 'Discover the ASUS Vivobook Go 15 (E1504FA‑BQ210) — a high‑value 15.6″ laptop that balances performance and style. Equipped with an AMD Ryzen 3 7320U processor, 8 GB DDR5 memory and a 512 GB SSD, it’s built to handle daily productivity, streaming and multitasking with ease. \r\nbeon.ge\r\n+2\r\nnout.uz\r\n+2\r\n\r\nThe Full HD 1920×1080 display offers clear visuals, while the lightweight design (~1.63 kg) ensures portability. \r\nNa', 'ASUS Vivobook Go 15 E1504FA‑BQ210 Laptop', 'ASUS Vivobook Go 15 E1504FA‑BQ210 Ноутбук'),
(7, 'Lenovo IdeaPad Slim 3 15IRH10 83K1002VRK Noutbuki', '<p>Lenovo IdeaPad Slim 3 15IRH10 &ndash; qulaylik, mobillik va ishonchlilikni qadrlaydiganlar uchun amaliy va funksional tanlov. Noutbuk atigi 1,63 kg vaznga ega, shu bois uni doimiy ravishda sumka yoki ryukzakda olib yurish oson. Sodda kulrang korpus va mustahkam plastmassa zamonaviy uslubni taʼkidlaydi. Ekran 180 &deg; ga ochiladi, bu esa jamoaviy ishda ham, jamoat joylarida kontent ko&lsquo;rishda ham ekran burchagini erkin sozlash imkonini beradi. Ingichka ramkalar qurilmaning o&lsquo;lchamlarini vizual ravishda kichraytirib, dizaynga nafislik qo&lsquo;shadi. Markazida &ndash; energiya tejamkor Intel Core i5-13420H protsessori: 8 yadro va 12 oqim, chastotasi 4,6 GHz gacha ko&lsquo;tariladi. Bu nafaqat jadvallar bilan ishlash, balki onlayn-konferensiya va oddiy videomontaj uchun ham yetarli quvvatni taʼminlaydi. 8 GB LPDDR5 tezkor xotira bir vaqtning o&lsquo;zida ko&lsquo;plab ilovalar ochilganda ham barqaror ishni kafolatlaydi. 512 GB M.2 NVMe SSD esa tizim va dasturlarni chaqmoqdek tez yuklaydi. 15,3 dyuymli IPS-ekran 1920&times;1080 aniqlikda ravshan tasvir, to&lsquo;g&lsquo;ri rang yetkazish va keng ko&lsquo;rish burchaklarini beradi. Mat sirt yorqin yoritishda ham aksni kamaytiradi. 60 Hz yangilanish chastotasi kundalik vazifalar va film tomosha qilish uchun optimal. Ekran ustida HD-kamera joylashgan bo&lsquo;lib, maxfiylik uchun fizik pardaga ega; mikrofon esa shovqinni bostirish tizimi bilan aniq ovoz uzatadi. Simsiz ulanish uchun Wi-Fi va Bluetooth 5.2 modullari mavjud: internetga ulanib, smartfon yoki garnitura bilan tez sinxronlashish mumkin. Portlar to&lsquo;plami: USB-C, ikki USB-A, to&lsquo;liq HDMI, naushnik uchun kombinatsiyalangan razʼyom va microSD kart o&lsquo;quvchi. Ethernet yo&lsquo;qligi korpusni yanada ingichka &ndash; atigi 18 mm &ndash; qilishga yordam bergan. 60 Vt&middot;soat sig&lsquo;imli batareya ssenariyga qarab 10 soatgacha avtonom ish beradi, 65 Vt quvvatga ega ixcham zaryadlovchi esa USB-C orqali tez zaryadlaydi. IdeaPad Slim 3 15IRH10 talaba, mutaxassis va portativlik hamda unumdorlik o&lsquo;rtasidagi muvozanatni izlayotganlar uchun ishonchli tanlovdir. Ofis, o&lsquo;qish, ijod va hordiq uchun mos. Oldindan o&lsquo;rnatilgan dasturiy taʼminot bo&lsquo;lmaganligi foydalanuvchiga kerakli operatsion tizimni mustaqil tanlash imkonini beradi. Noutbuk ko&lsquo;p vazifani bemalol bajaradi, shu bilan birga engil va sokin ishlaydi. Ish joyida ham, safarda ham birdek foydali bo&lsquo;la oladigan, zamonaviy texnologiyalar va qulaylikni birlashtirgan model.</p>', 7990000, 8, 0, 0, '2025-10-28 11:25:39', '2025-11-11 18:46:43', 'uploads/product/59c41a20-ec33-4df9-9adc-9d9247f504db_p44sc-.webp', 'Ноутбук Lenovo IdeaPad Slim 3 (15IRH10, 83K1002VRK) — это тонкий и лёгкий 15,6″ Full HD ноутбук с процессором Intel, 8 ГБ оперативной памяти и SSD‑накопителем объёмом 256 ГБ, обеспечивающий плавную работу для повседневных задач, серфинга в интернете и мультимедиа. Его тонкий корпус и современные порты подключения (USB‑C, HDMI) делают его удобным для работы и учёбы.', 'The Lenovo IdeaPad Slim 3 (15IRH10, 83K1002VRK) is a slim and lightweight 15.6″ Full HD laptop equipped with an Intel processor, 8 GB of RAM, and a 256 GB SSD, providing smooth performance for daily tasks, browsing, and media consumption. Its slim design and modern connectivity options, including USB‑C and HDMI, make it ideal for both work and study.', 'Lenovo IdeaPad Slim 3 15IRH10 83K1002VRK Ноутбук', 'Lenovo IdeaPad Slim 3 15IRH10 83K1002VRK Laptop'),
(8, 'Lenovo IdeaPad Slim 3 15IRH10 83K10032RK i7-13620H/16/512GB Noutbuki', '<p>Lenovo IdeaPad Slim 3 15IRH10 (83K10032RK) &mdash; ko&lsquo;p vazifali zamonaviy noutbuk bo&lsquo;lib, u Intel Core i7-13620H protsessori asosida yaratilgan. Unda 10 ta yadro va 16 ta oqim mavjud bo&lsquo;lib, 4.9 GHz gacha bo&lsquo;lgan chastota murakkab jarayonlarni tez bajarish imkonini beradi. 16 GB operativ xotira bir vaqtning o&lsquo;zida bir nechta dasturlar bilan erkin ishlashni ta&rsquo;minlaydi. 15.3 dyuym ekran IPS texnologiyasi asosida ishlab chiqilgan bo&lsquo;lib, real tasvir va keng ko&lsquo;rish burchaklarini beradi. 1920&times;1200 piksel ekran vertikal kenglikni oshiradi va matn yoki jadval bilan ishlashda qulaylik yaratadi. 60 Hz yangilanish tezligi interfeyslar bilan bir tekis ishlashni ta&rsquo;minlaydi. Antiblik qoplama yorug&lsquo; muhitda ekranni qulay ko&lsquo;rish imkonini beradi. Grafik funksiyalar Intel UHD orqali amalga oshiriladi. Bu video ko&lsquo;rish, onlayn darslar va yengil vizual topshiriqlar uchun yetarli. 512 GB SSD tezkor ma&rsquo;lumot almashish va dasturlarni qisqa vaqtda ishga tushirish imkonini beradi. Operatsion tizim oldindan o&lsquo;rnatilmagan &mdash; foydalanuvchi o&lsquo;zi tanlaydi.</p>', 9900000, 8, 0, 0, '2025-10-28 11:26:53', '2025-11-11 18:47:53', 'uploads/product/e5185395-0844-4e12-b5d0-2313ac61925d_YaAC9a.webp', 'Ноутбук Lenovo IdeaPad Slim 3 15IRH10 (83K10032RK) предлагает высокую производительность благодаря процессору Intel® Core™ i7‑13620H (10 ядра / 16 потоков), 16 ГБ оперативной памяти DDR5 и быстрому NVMe SSD на 512 ГБ — это идеальный выбор для многозадачности, учебы и повседневного использования. \r\nmdtechlb.com\r\n+1', 'The Lenovo IdeaPad Slim 3 15IRH10 (83K10032RK) delivers real‑world performance through its 13th‑gen Intel® Core™ i7‑13620H processor (10 cores/16 threads), paired with 16 GB DDR5 RAM and a speedy 512 GB NVMe SSD — ideal for multitasking, productivity and daily computing. \r\nmdtechlb.com\r\n+1\r\n\r\nA crisp 15.3″ WUXGA (1920×1200) display ensures clear visuals, while dual‑channel memory support, modern I/O including USB‑C with Power Delivery & DisplayPort, and HDMI make connectivity seamless.', 'Lenovo IdeaPad Slim 3 15IRH10 83K10032RK Ноутбук', 'Lenovo IdeaPad Slim 3 15IRH10 83K10032RK Laptop'),
(9, 'Lenovo IdeaPad 1 15IJL7 82LX00G9RK N4500/8/512GB Noutbuki', '<p>Lenovo IdeaPad 1 15IJL7 &mdash; talabalar, o&lsquo;quvchilar va ofis xodimlari uchun qulay mobil kompyuter. Vazni atigi 1.55 kg, shu sababli uni sumkada yoki ryukzakda olib yurish oson. Kulrang korpus zamonaviy ko&lsquo;rinishga ega, oldindan o&lsquo;rnatilgan tizim (No OS) yo&lsquo;qligi esa foydalanuvchiga dasturiy platformani mustaqil tanlash imkonini beradi. 42 Vt&middot;soat sig&lsquo;imli akkumulyator uzoq ishlash muddatini ta&rsquo;minlaydi, safarda foydalanish uchun qulaylik yaratadi. 15.6 dyuym ekran TN-matritsa asosida yaratilgan va 1920x1080 piksel aniqlikni qo&lsquo;llab-quvvatlaydi. Bunday konfiguratsiya aniq va yorqin tasvir beradi, filmlar, matnlar hamda veb-saytlar bilan ishlash uchun yetarli. 60 Gts chastota qurilmadan ta&rsquo;lim, onlayn uchrashuv yoki muloqot jarayonida bemalol foydalanish imkonini beradi. Monitor hujjatlar, jadvallar va taqdimotlarni ko&lsquo;rish uchun ham mos keladi.</p>', 3990000, 8, 0, 0, '2025-10-28 11:28:04', '2025-11-11 18:49:33', 'uploads/product/1ae5ef6a-9936-45b5-bca4-ed373edec4fa_l1NVsp.webp', 'Ноутбук Lenovo IdeaPad 1 15IJL7 (модель 82LX00G9RK) — доступное решение с диагональю 15,6″, оснащённое процессором Intel® Celeron® N4500 (до 2,8 ГГц). \r\nLenovo PSREF\r\n\r\nВ сочетании с оперативной памятью (8 ГБ) и SSD‑накопителем на 512 ГБ он предлагает быстрый отклик и достаточное хранилище для повседневных задач.\r\nМодель имеет современные порты USB‑C и HDMI, а также лёгкий корпус — отличный выбор для обучения и домашнего использования.', 'The Lenovo IdeaPad 1 15IJL7 (model 82LX00G9RK) is a budget‑friendly 15.6″ laptop powered by the Intel® Celeron® N4500 processor, delivering up to 2.8 GHz performance. \r\nLenovo PSREF\r\n+1\r\n\r\nPaired with 8 GB (or more) of memory and a 512 GB SSD, it provides ample storage and responsive everyday performance.\r\nIt offers modern connectivity including USB‑C, HDMI and a slim, lightweight chassis ideal for students and home use', 'Lenovo IdeaPad 1 15IJL7 82LX00G9RK Ноутбук', ' Lenovo IdeaPad 1 15IJL7 82LX00G9RK Laptop'),
(10, 'Acer Aspire 3 NX.K6WER.001 Noutbuki', '<p>Brend Acer Klaviaturani yorug\'ligi Мavjud emas Optik qurilma Мavjud emas Korpus materiali</p>', 5880000, 9, 0, 0, '2025-10-28 11:29:42', '2025-11-11 18:50:45', 'uploads/product/ca126f6b-66ed-4bba-a842-8c47816047b0_PXwGxQ.jpg', 'Ноутбук Acer Aspire 3 (NX.K6WER.001) предлагает сбалансированную производительность в корпусе с диагональю 15,6″ Full HD — отличный выбор для учёбы, домашнего офиса или ежедневной работы. Современное железо (процессор Intel, быстрый SSD и достаточный объём оперативной памяти) обеспечивает плавную работу. Чёткий экран 1920×1080, лёгкий дизайн и богатое количество портов (USB–C, HDMI, WiFi) дают свободу и универсальность как для работы, так и для развлечений.', 'The Acer Aspire 3 NX.K6WER.001 laptop offers strong performance in a 15.6″ Full HD form factor, making it an excellent choice for everyday computing, studying or home office work. With modern hardware including an Intel‑series processor and fast storage and memory combination, it delivers smooth responsiveness. A clear 1920×1080 IPS/LED display, lightweight design and ample connectivity (USB‑C, HDMI, WiFi) ensure versatility for both work and play.', 'Acer Aspire 3 NX.K6WER.001 Ноутбук', 'Acer Aspire 3 NX.K6WER.001 Laptop'),
(11, 'Acer SF314-511 NX.ABLER.003 Noutbuki', '<p>Jiddiy ish uchun yangi dizayn va unumdorlikka ega klassik noutbuklar. Jiddiy sifat nazoratidan o&lsquo;tgan ixcham korpusdagi eng zamonaviy texnologiya. Og&lsquo;irligi atigi 1,2 kg bo&lsquo;lgan Acer noutbugi taʼsirchan va ko&lsquo;zni qamashtiradi. Amaliy va murakkab uslub 11-avlod Intel&reg; Core&trade; protsessori va NVIDIA&reg; GeForce&reg; diskret grafikasi kabi ilg&lsquo;or komponentlar bilan birlashtirilgan. Bundan tashqari, ushbu qurilma Intel&reg; Evo&trade; platformasiga mos keladi. Lakonik va minimalistik elementlarga ega engil dizayn. SNS uskunada ishlangan olmos organikli 3K uglerod tolali paneli. 14 dyuymli Full HD IPS displey yuqori quvvatli Sorning&reg; Gorilla&reg; Glass sensorli ekraniga ega.</p>', 8990000, 9, 0, 0, '2025-10-28 11:30:40', '2025-11-11 18:51:52', 'uploads/product/20dd0155-04c8-478e-80da-02cc431d9234_RrgNKU.jpg', 'Ноутбук Acer Swift 3 SF314‑511 (артикул NX.ABLER.003) — это сверхпортативная 14″ модель с разрешением Full HD, созданная для работы вне дома. Он оснащён процессором Intel® Core™ i3‑1115G4 (2 ядра, до 4,1 ГГц) в сочетании с 8 ГБ оперативной памяти LPDDR4X и быстрым SSD‑накопителем на 256 ГБ. \r\nneostar.uz\r\n\r\nКорпус из алюминиево‑магниевого сплава весит примерно 1,20 кг, а дисплей имеет IPS‑матрицу с разрешением 1920×1080. Есть стойкие порты USB‑C, HDMI, поддержка WiFi 6. ', 'The Acer Swift 3 SF314‑511 (model NX.ABLER.003) is an ultra‑portable 14″ Full HD laptop designed for on‑the‑go productivity. Powered by an Intel® Core™ i3‑1115G4 processor (2 cores, up to 4.1 GHz) combined with 8 GB of LPDDR4X RAM and a 256 GB NVMe SSD for smooth multitasking and fast data access. \r\nneostar.uz\r\n+1\r\n\r\nIt features a slim, lightweight aluminum‑alloy chassis (~1.20 kg), a bright IPS panel (1920×1080), USB‑C, HDMI, WiFi 6 support and all the modern connectivity you need.', 'Ноутбук Acer Swift 3 SF314‑511 (NX.ABLER.003)', 'Acer Swift 3 SF314‑511 (NX.ABLER.003) Laptop'),
(12, 'Noutbuk Acer Aspire 3 NX.KDHER.004', '<p>Murakkab Intel Core N-seriyali protsessorlari va integratsiyalangan UHD grafikalariga ega Aspire 3 noutbuklari har bir darajadagi ajoyib unumdorlikni taʼminlab, ularni ish, oʻrganish va oʻyin uchun ideal qiladi. Foydalanishga tayyor ushbu qurilmalar o&lsquo;zining ko&lsquo;p qirraliligi va samaradorligi bilan ajralib turadi va faoliyatingizning turli sohalarida keng imkoniyatlarni ochib beradi. Sovutish kuleri 78% gacha oshirish orqali biz sovutish tizimini yaxshiladik va issiqlik uzatishni 17% ga oshirdik. Ushbu texnologik yutuq elektr tarmog\'iga doimiy ulanmasdan uzoq vaqt davomida qurilmaning ishonchli ishlashini ta\'minlaydi. Full HD piksellar soniga ega ekran yuqori sifatli va batafsil tasvirlarni taqdim etuvchi veb-sahifalar, media-kontent va onlayn translyatsiyalarni ko\'rish uchun ideal tanlovdir. Acer BlueLightShieldTM texnologiyasi zararli nurlanish ta\'sirini faol ravishda kamaytiradi, foydalanuvchi va ularning yaqinlarining ko\'rish qobiliyatini himoya qiladi.</p>', 5820000, 9, 0, 0, '2025-10-28 11:31:33', '2025-11-11 18:53:02', 'uploads/product/1_--7uLG.webp', 'Ноутбук Acer Aspire 3 NX.KDHER.004 — это доступная 15,6″ модель с разрешением Full HD, оснащённая процессором Intel® N100 (до 3,4 ГГц), 4 ГБ оперативной памяти и SSD‑накопителем объёмом 256 ГБ. Он обеспечивает плавную работу в браузере, офисных приложениях и при просмотре мультимедиа. Стильный серебристый дизайн, экран с технологией ComfyView и базовая линейка портов (HDMI, USB Type‑A, WiFi) делают его хорошим вариантом для студентов, дома или офиса.', 'The Acer Aspire 3 NX.KDHER.004 is an ideal entry‑level 15.6″ Full HD laptop powered by the Intel® N100 processor (up to 3.4 GHz). It features 4 GB of RAM and a 256 GB SSD, offering smooth performance for everyday tasks like browsing, office applications, and streaming. With its sleek silver design, ComfyView IPS display and essential connectivity (HDMI, USB Type‑A, WiFi), this model is a practical choice for students, home users and office workers who need reliable performance at an affordable price.', 'Ноутбук Acer Aspire 3 NX.KDHER.004', 'Acer Aspire 3 NX.KDHER.004 Laptop'),
(13, 'LG VK69662N Changyutgichi', '<p>Idishli changyutgich - uy bekalarni orzusi. Chang qoplarga yo&lsquo;q. Ixcham o&lsquo;lchami va energiya tejovchi motor uy tozalashni zavqlantiradi. TEXNOMART kompaniyasining LG VK69662N changyutgichi yuqori quvvat va ixcham korpusi tufayli kundalik tozalash uchun mukammal qurilma. Yuqori samarali nozuli bilan birgalikda ilg&lsquo;or siklon texnologiyasi changni mukammal yig&lsquo;adi va maksimal havo filtratsiyasini taʼminlaydi. Past shovqin darajasi chaqaloqning shirin uyqusini buzmaydi. Ixcham o&lsquo;lchamlari va ajoyib dizayni tufayli changyutgichni saqlash va ishlatish oson. Elastik quvvat simini oson yig&lsquo;iladi. Aksessuarlar va almashtirish filtri mavjud.</p>', 1299000, 11, 0, 0, '2025-10-28 11:32:32', '2025-11-11 18:54:37', 'uploads/product/11_0Uv-3w.webp', 'Мощный и эффективный пылесос с мотором 1600 Вт и безмешковым контейнером для пыли объемом 1,2 л. Оснащен системой фильтрации Ellipse Cyclone для улучшенной силы всасывания и чистого потока воздуха. В комплекте телескопическая стальная трубка и специальные насадки для углов и труднодоступных мест. Идеально подходит для квартир и небольших домов.', 'Powerful and efficient vacuum cleaner with 1600 W motor and 1.2 L bagless dust container. Features Ellipse Cyclone filtration system for enhanced suction and clean airflow. Comes with telescopic steel tube and specialized nozzles for corner and hard-to-reach cleaning. Ideal for apartments and small homes.', 'Пылесос LG VK69662N', 'LG VK69662N Vacuum Cleaner'),
(14, 'LG VC83209UHAV Changyutgichi', '<p>Maishiy ehtiyojlar uchun mukammal bo&lsquo;lgan zamonaviy va kuchli changyutgich maishiy texnika ishlab chiqarish bo&lsquo;yicha yetakchi kompaniyalardan biri - LG tomonidan ishlab chiqarilgan. Ushbu apparat yuqori unumdorlik va ilg&lsquo;or texnologiyalarni o&lsquo;zida mujassamlashtirgan bo&lsquo;lib, uni tartib o&lsquo;rnatishda beqiyos yordamchiga aylantiradi. 420 Vt quvvatli so&lsquo;rish qobiliyati tufayli u uyingizni ozoda holda qoldirib, har qanday axlatdan osongina xalos etadi. Asosiy xarakteristika 1,2 litr hajmli konteynerli chang ushlagich turi hisoblanadi. Bu shuni anglatadiki, chang qoplarini doimiy ravishda almashtirish shart emas - tozalashdan keyin konteynerni bo&lsquo;shatish kifoya. Qo&lsquo;shimcha afzallik shundaki, konteyner ichida presslash funksiyasi mavjud bo&lsquo;lib, bu tozalash jarayonini yanada qulay va gigiyenik qilib beradi. Changyutgichning filtrlash tizimiga alohida e&rsquo;tibor qaratish lozim. 14-sinfdagi noyob HEPA-filtr havoni eng mayda zarralar va allergenlardan tozalash imkonini beradi, bu ayniqsa changga allergiyasi yoki sezgirligi bor insonlar uchun muhimdir. Shu tufayli xona tozalangandan so&lsquo;ng tozalik saqlanib qoladi. Shovqin darajasi 77 dB dan oshmagani sababli, bu qurilmani shovqinsiz moslamalar qatoriga kiritish mumkin. Bundan tashqari, u uzunligi bo&lsquo;yicha oson sozlanadigan surilma naycha bilan jihozlangan bo&lsquo;lib, eng qiyin joylardagi changni ham osonlik bilan yig&lsquo;ishtirish imkonini beradi.</p>', 2691000, 11, 0, 0, '2025-10-28 11:33:39', '2025-11-11 18:55:35', 'uploads/product/21_Sbj20H.webp', 'Мощный пылесос LG VC83209UHAV с турбоциклонной технологией и силой всасывания примерно 420 Вт (при потребляемой мощности 2000 Вт), контейнером для пыли объёмом 1,2 л и рабочим радиусом около 9,3 м. Предназначен для глубокой уборки с продвинутой системой фильтрации и эффективной утилизацией пыли. ', 'A high‑performance LG VC83209UHAV vacuum cleaner equipped with a turbocyclonic system delivering approximately 420 W suction power from a 2000 W motor, with a 1.2 L dust container capacity and a long cleaning range of about 9.3 m. Designed for deep cleaning with advanced filtration and efficient dust handling.', 'Пылесос LG VC83209UHAV', 'LG VC83209UHAV Vacuum Cleaner'),
(15, 'Philips FC9573/01 Changyutgichi', '<p>Philips FC9573/01 - bu uyda tartibni samarali saqlash uchun yaratilgan ishonchli maishiy uskuna. U o&lsquo;zida yuqori mahsuldorlik, puxta o&lsquo;ylangan konstruksiya va universal funksionalni mujassamlashtiradi. Zamonaviy texnologiyalar tufayli u har xil turdagi ifloslanishlarni yengib, xonada tozalikni ta&rsquo;minlaydi. Samaradorlik va yuqori unumdorlik 1900 Vt quvvatli dvigatel bilan jihozlangan, u 400 Vt intensiv so&lsquo;rilishini kafolatlaydi va hatto eng kichik zarrachalarni ham yig&lsquo;ishga imkon beradi. Bunday salohiyat uni uy hayvonlari egalari va allergiyaga chalingan odamlar uchun ajoyib yechimga aylantiradi. 1,5 litr sig&lsquo;imli konteyner yetarli miqdorda changni sig&lsquo;dira oladi, bu esa tez-tez tozalash zaruratini kamaytiradi. Qulay bo&lsquo;shab qolish tizimi tufayli, chang bulutlarini hosil qilmasdan, bir harakat bilan tarkib yo&lsquo;qotiladi.</p>', 2599000, 11, 0, 0, '2025-10-28 11:34:30', '2025-11-11 18:57:10', 'uploads/product/31_IsFomF.webp', 'Мощный безмешковый пылесос с двигателем 1900 Вт и силой всасывания до 410 Вт, оснащенный технологией PowerCyclone 7 для высокой производительности, насадкой TriActive с тремя режимами уборки и фильтром Allergy H13, улавливающим более 99,9 % мелкой пыли. С контейнером на 1,5 л, радиусом действия 9 м и компактным дизайном он отлично подходит для тщательной уборки ковров, твердых поверхностей и труднодоступных мест', 'A powerful bagless vacuum cleaner equipped with a 1900 W motor delivering up to 410 W suction power, featuring PowerCyclone 7 technology for strong performance, TriActive nozzle for three‑way cleaning, and an Allergy H13 filter capturing over 99.9% of fine dust. With a 1.5 L dust container, 9 m cleaning radius and compact design, it’s ideal for thorough cleaning of carpets, hard floors and difficult spots.', 'Пылесос Philips FC9573/01', 'Philips FC9573/01 Vacuum Cleaner'),
(16, 'LG VK89609HQ Changyutgichi', '<p><strong>LG VK89609HQ changyutgichi - bu ilg&lsquo;or yuqori unumdorlikning kombinatsiyasi. Qurilma xona tozaligini ta&rsquo;minlab, iflosliklarni yo&lsquo;qotish uchun mo&lsquo;ljallangan. U kuchli dvigatel, zamonaviy filtratsiya va qulay nasadkalar bilan jihozlangan bo&lsquo;lib, tozalash jarayonini sezilarli darajada soddalashtiradi.</strong> Samaradorlik Ushbu model 2000 Vt energiya iste&rsquo;mol qiladigan va 420 Vt so&lsquo;rish kuchiga ega dvigatel bilan jihozlangan. Bu turli xil axlatlar, jumladan, hayvonlarning juni va changini osonlik bilan tozalash imkonini beradi. 4,8 litr sig&lsquo;imli rezervuar tozalash chastotasini qisqartiradi va foydalanish jarayonini yanada qulaylashtiradi. Noyob presslash tizimi O&lsquo;rnatilgan changni avtomatik zichlash texnologiyasi yig&lsquo;ilgan zarrachalarni ixcham saqlashga yordam beradi, bu esa chiqindilar bilan kontaktni minimallashtiradi. Bu allergenlarning tarqalish xavfini sezilarli darajada kamaytiradi va konteynerni tozalashni osonlashtiradi.</p>', 1999000, 11, 0, 0, '2025-10-28 11:35:31', '2025-11-11 18:58:20', 'uploads/product/41_yeejgr.webp', 'Мощный классический пылесос с системой сжатия пыли Kompressor®, технологией TurboCyclone и фильтрацией HEPA 14, обеспечивающий высокую эффективность уборки. С силой всасывания до 420 Вт от мотора 2000 Вт, контейнером на 1,2 л, кабелем длиной около 6,3‑8 м и телескопической алюминиевой трубкой с органами управления на рукоятке, эта модель предлагает комфорт и гигиеничность для ежедневной уборки дома.', 'A high‑performance classic vacuum cleaner featuring the Kompressor® dust‑pressing system, TurboCyclone airflow technology and HEPA 14 filtration for powerful cleaning performance. With up to 420 W suction power from a 2000 W motor, a 1.2 L dust container, 6.3–8 m operational radius cable, and a telescopic aluminum tube with handle‑mounted controls, this model offers superior convenience and hygiene for everyday home cleaning', 'Пылесос LG VK89609HQ', 'LG VK89609HQ Vacuum Cleaner'),
(17, 'LG F2J3NS0W Kir yuvish mashinasi', '<p>LG F2J3NS0W avtomatik kir yuvish mashinasining sifati bizni hayratda qoldiradi. Yangi gipoallergen Steam texnologiyasi bolalar kiyimlarini yuvish va parvarish qilish, paxta + bug`lash va nozik terilarning kiyimini yuvish uchun ishlab chiqilgan. Mashinaning baki intensiv va nozik yuvish kabi maxsus funksiyalarga ega. Intensiv yuvish bu kiyimlarni tekislash, chayqatish va tebranish funksiyalari. Nozik yuvishda barabanning asosiy aylanishi, burilishi va teskari aylanishi sodir bo&lsquo;ladi. Shovqin darajasi past bo&lsquo;lgani uchun uxlayotgan bolani uyg&lsquo;otmaydi. Katta va sig&lsquo;imli bak bir vaqtning o&lsquo;zida katta miqdordagi kirlarni yuvadi. Mashinaning o&lsquo;zi kiyimlarni ivitadi, yuvadi, chayadi, siqadi va quritadi. Kir yuvish uchun optimal suv isteʼmoli kiyim matosiga zarar yetkazmaydi. Foydalanuvchi uchun juda qulay raqamli displey. Inverter Direct Drive dvigateli to&lsquo;g&lsquo;ridan-to&lsquo;g&lsquo;ri haydovchi tizimiga ega, bu esa mashinaning yuqori ishonchligini va chidamliligini taʼminlaydi. Mustaqil o&lsquo;rnatiladigan texnikada bolalar himoyasi mavjud. Taymer avtomatik ravishda kir yuvish tugaganligi haqida xabar beradi.</p>', 4879000, 12, 0, 0, '2025-10-28 11:36:38', '2025-11-11 18:59:26', 'uploads/product/51_mHTSdu.webp', 'Пральная машина LG F2J3NS0W с фронтальной загрузкой рассчитана на 6 кг белья и имеет глубину всего 44 см — отлично подходит для компактных помещений. Оснащена инверторным мотором с прямым приводом (Direct Drive) для тихой и надежной работы, предлагает 10 программ стирки, включая режим с паром и быструю стирку за 30 минут. Класс энергопотребления «A», скорость отжима до 1200 об/мин (в некоторых вариантах), функции защиты от детей и контроля пены делают эту модель эффективным и удобным решением для дома.', 'The LG F2J3NS0W is a 6 kg front‑load washing machine featuring a compact 44 cm depth — ideal for smaller spaces. It incorporates an inverter direct‑drive motor for quieter, more reliable operation and includes 10 specialised wash programmes, including steam refresh and a quick 30‑minute mode. With ECO energy class ‘A’, a 1200 rpm spin (in some variants) and smart functions like child lock and foam control, this model offers efficient and convenient laundry care.', 'Пральна машина LG F2J3NS0W', 'LG F2J3NS0W Washing Machine'),
(18, 'LG F2T9GW9P Kir yuvish mashinasi', '<p>LG F2T9GW9P aqlli kir yuvish mashinasi mato turini aniqlash uchun AI DD tizimiga ega. TurboWash&trade;360 - bu bir necha daqiqada tezroq aylanib to&rsquo;liq yuvadi. Steam+&trade; texnologiyasi yordamida g&lsquo;ijimlarni tekislab va allergenlardan himoya qiling. Bakteriyalar va viruslarni yo&lsquo;q qiladi. Shovqin darajasi past bo&lsquo;lgani uchun uxlayotgan bolani uyg&lsquo;otmaydi. Katta va sig&lsquo;imli bak bir vaqtning o&lsquo;zida katta miqdordagi kirlarni yuvadi. Mashinaning o&lsquo;zi kiyimlarni ivitadi, yuvadi, chayadi, siqadi va quritadi. Kir yuvish uchun optimal suv isteʼmoli kiyim matosiga zarar yetkazmaydi. Foydalanuvchi uchun juda qulay sensorli raqamli displey. \"Кiyim qo&lsquo;shish\" noyob funksiyasi, hatto kir yuvish boshlanganidan keyin ham unutilgan narsalarni qo&lsquo;shish va yuvilgan kiyimlarni olish imkonini beradi. AquaProtect maxsus texnologiyasi mashinadan suv oshiqib ketishidan himoya qiladi. Invertor motoriga 20 yil kafolat beriladi. LG ThinQ texnologiyasi yordamida kir yuvish mashinangizni smartfoningiz yordamida boshqarishingiz mumkin. Suv va elektr isteʼmolini kuzatib boring. Mustaqil o&lsquo;rnatiladigan texnikada bolalar himoyasi mavjud. Taymer avtomatik ravishda kir yuvish tugaganligi haqida xabar beradi. &ldquo;Texnomart&rdquo; turli mahsulotlar uchun katta chegirma va aksiyalar taqdim etadi. Bizni ijtimoiy tarmoqlarda kuzatib boring!</p>', 7990000, 12, 0, 0, '2025-10-28 11:37:19', '2025-11-11 19:00:25', 'uploads/product/60_zfobfx.webp', 'Стиральная машина LG F2T9GW9P фронтальной загрузки с объёмом барабана 8,5 кг и скоростью отжима до 1200 об/мин обеспечиваeт эффективную стирку повседневного белья. Оснащена инверторным мотором, многочисленными программами (включая паровое освежение и Wi‑Fi‑управление), и имеет компактные габариты: ширина 60 см и глубина 48 см — идеально подходит для современных прачечных. Отличный выбор для семьи, нуждающейся в мощной и умной бытовой технике.', 'The LG F2T9GW9P is a high‑capacity front‑load washing machine with an 8.5 kg drum and up to 1200 rpm spin speed, offering efficient cleaning for everyday laundry needs. Equipped with an inverter motor and multiple wash programmes including steam refresh and Wi‑Fi connectivity, it also features a wide 60 cm width and 48 cm depth to fit modern laundry spaces seamlessly. Ideal for families requiring strong performance and smart convenience.', 'Стиральная машина LG F2T9GW9P', 'LG F2T9GW9P Washing Machine'),
(19, 'Kir yuvish mashinasi Hansa WHN6100D2BSW', '<p>Hansa VHN6100D2BSV kir yuvish mashinasi ixcham, ammo keng yechim bo\'lib, hatto cheklangan joyda ham o&lsquo;z o&lsquo;rinni osongina topa oladi. Oldindan yuklash hajmi 6 kg, uni kundalik foydalanish uchun ideal qiladi va uning 85x60x40 sm o&lsquo;lchamlari uni uyning istalgan qulay burchagiga, xoh u hammom yoki oshxonaga qulay o&lsquo;rnatishga imkon beradi. Samarali yigiruv va keng ko&lsquo;lamli dasturlar 1000 rpm aylanish tezligi kiringizning nafaqat toza, balki amalda quruq bo&lsquo;lishini taʼminlaydi va uni qo&lsquo;shimcha quritish uchun ketadigan vaqtni kamaytiradi. 16 xil yuvish dasturlari tufayli ushbu model eng nozik materiallardan tortib eng bardoshli materiallargacha bo&lsquo;lgan har qanday turdagi matolarga ehtiyotkorlik bilan g&lsquo;amxo&lsquo;rlik qila oladi. Har bir dastur minimal vaqt va kuch bilan maksimal samaradorlikni taʼminlash uchun ehtiyotkorlik bilan o&lsquo;ylangan.</p>', 6199000, 12, 0, 0, '2025-10-28 11:38:05', '2025-11-11 19:01:14', 'uploads/product/71_fAb3lC.jpg', 'Стиральная машина Hansa WHN6100D2BSW с фронтальной загрузкой рассчитана на 6 кг белья, обороты отжима до 1000 об/мин и класс энергоэффективности A. Компактные размеры (59,5 см ширина, 40 см глубина) и «умные» функции — антиаллергическая программа, блокировка от детей (ChildLock), крупный LED‑дисплей — делают эту модель эффективным, гигиеничным и удобным решением для современных жилищ.', 'The Hansa WHN6100D2BSW is a front‑load washing machine with a 6 kg drum capacity, up to 1000 rpm spin speed and energy class A. With compact dimensions (59.5 cm width, 40 cm depth) and Smart features such as anti‑allergic cycle, ChildLock, and a large LED display, this machine is designed to provide efficient, hygienic and space‑saving laundry care for modern homes', 'Стиральная машина Hansa WHN6100D2BSW', 'Hansa WHN6100D2BSW Washing Machine'),
(20, 'Tefal FV1713E0 Dazmol', '<p>Tefal FV1713E0 - bu kiyim va to&lsquo;qimachilik mahsulotlarini parvarish qilish sohasidagi eng talabchan foydalanuvchilarning ehtiyojlarini qondira oladigan universal qurilma. Zamonaviy dizayn, yuqori texnologik yechimlar va puxta o&lsquo;ylangan funksionallik ushbu qurilmani kundalik hayotda ajralmas yordamchiga aylantiradi. 2000 Vt quvvat tufayli dazmol tez qiziydi, bu dazmollash jarayonini bir necha daqiqada boshlash va hatto katta hajmdagi mato bilan ishlaganda ham vaqtni sezilarli darajada tejash imkonini beradi. Yuqori ish samaradorligiga innovatsion funksiyalarni birlashtirish orqali erishiladi: 85 g/min gacha bug&lsquo; uzatish bilan bug&lsquo; zarbasi va 24 g/min doimiy bug&lsquo; uzatish eng chidamli burmalarni ham tez va sifatli olib tashlashga yordam beradi, namlikning mato tuzilishiga chuqur kirib borishini va har qanday materialni ehtiyotkorlik bilan ishlatishni ta&rsquo;minlaydi.</p>', 508000, 13, 0, 0, '2025-10-28 11:39:08', '2025-11-11 19:02:28', 'uploads/product/81_i2CbqV.webp', 'Паровой утюг с мощностью 2000 Вт, непрерывной подачей пара 24 г/мин и паравым ударом до 90 г/мин. Оснащён подошвой с антипригарным покрытием, функцией вертикального отпаривания, системами защиты от капель и накипи, а также вместительным баком для воды 200 мл — отличный выбор для быстрой и качественной глажки любых тканей.', 'A high‑efficiency steam iron delivering 2000 W of power with continuous steam output of 24 g/min and a steam‑boost of up to 90 g/min. Features include a non‑stick soleplate, vertical steaming capability, anti‑drip and anti‑scale systems, and a generous 200 ml water tank — ideal for quick and effective ironing of all garments', 'Паровой утюг Tefal FV1713E0', 'Tefal FV1713E0 Steam Iron'),
(21, 'Dazmol Tefal FV9865E0', '<p>Tefal FV9865E0 quvvat va samaradorlikni o&lsquo;zida mujassam etgan bo&lsquo;lib, dazmollashni tez va qulay qiladi. Ajoyib 3000 Vt quvvat tufayli qurilma kerakli haroratga tez erishadi va hatto chuqur burmalar va qattiq matolarni ham samarali yengadi. Taglik metallokeramikadan tayyorlangan bo&lsquo;lib, u issiqlikni bir tekis taqsimlaydi, silliq sirpanishni ta&rsquo;minlaydi va matoga yopishib qolishining oldini oladi. Vertikal bug&lsquo;latish 260 g/min gacha bug&lsquo; urish bilan kiyimni osgichning o&lsquo;zida, pardalar va ustki kiyimlarni yechmasdan osonlik bilan yangilash imkonini beradi. FV9865E0 dan foydalanish qulayligi 350 ml hajmli katta suv idishi bilan ta&rsquo;minlanadi, bu uni kamroq to&lsquo;ldirish va uzoqroq vaqt davomida uzluksiz dazmollash imkonini beradi. 60 g/min gacha bo&lsquo;lgan bug&lsquo;ni doimiy ravishda yetkazib berish funksiyasi har qanday to&lsquo;qimalarni, hatto ko&lsquo;p qatlamli to&lsquo;qimalarni ham tekislashni kafolatlaydi. Uzunligi 2,5 metr bo&lsquo;lgan shnur harakatni cheklamasdan va qo&lsquo;shimcha uzaytirgichlarni talab qilmasdan qulay ishlashni ta&rsquo;minlaydi. Tomchilarga qarshi tizim past haroratda dazmollash paytida matolarni suv tushishidan himoya qiladi, keraksiz dog&lsquo;lar va dog&lsquo;lar paydo bo&lsquo;lishining oldini oladi.</p>', 2462000, 13, 0, 0, '2025-10-28 11:39:56', '2025-11-11 19:03:57', 'uploads/product/91_FfmcGh.webp', 'Паровой утюг Tefal FV9865E0 предлагает премиум‑уровень глажки: мощность 3000 Вт, постоянная подача пара до 60 г/мин и удар пара до 250 г/мин. \r\nGalaxus\r\n+1\r\n\r\nПодошва Durilium Autoclean обеспечивает отличное скольжение и лёгкость в уходе.', 'The Tefal FV9865E0 delivers high‑end ironing performance thanks to its powerful 3000 W heating element, continuous steam output of up to 60 g/min and a steam boost of 250 g/min. \r\nGalaxus\r\n+2\r\nIcecat\r\n+2\r\n\r\nIts Durilium Autoclean soleplate offers excellent gliding capability and easy maintenance. \r\nGalaxus\r\n+1', 'Паровой утюг Tefal FV9865E0', 'Tefal FV9865E0 Steam Iron');
INSERT INTO `product` (`id`, `name_uz`, `description_uz`, `price`, `category_id`, `status`, `order`, `created_at`, `updated_at`, `img`, `description_ru`, `description_en`, `name_ru`, `name_en`) VALUES
(22, 'Dazmol Polaris PIR 2483K 3m', '<p>Sizga Artel ART SI815 ni taqdim etamiz - bu sizning kiyimingizni mukammal dazmollash uchun quvvat, samaradorlik va innovatsion texnologiyalarning mukammal kombinatsiyasi. Maksimal quvvati 2000 Vt bo\'lgan bu dazmol tez qiziydi va eng qisqa vaqt ichida ishlashga tayyor. Korpus yuqori sifatli plastmassadan tayyorlangan bo\'lib, foydalanish oson va bardoshli bo\'ladi. Taglikning o\'ziga xos yopishmaydigan keramik qoplamasi hatto eng nozik materiallarning yopishishi va shikastlanishiga yo\'l qo\'ymasdan, oson sirpanishni kafolatlaydi. Uzoq muddatli bug\' har qanday turdagi matolarda burmalarni samarali tekislash imkonini beradi.</p>', 265000, 13, 0, 0, '2025-10-28 11:40:59', '2025-11-11 19:04:54', 'uploads/product/a_kjDTBI.jpg', 'Утюг Polaris PIR 2483K 3m оснащен мощностью 2400 Вт и подошвой PRO 5 Ceramic для плавного скольжения. Объём резервуара для воды составляет 300 мл, постоянная подача пара до 45 г/мин и удар пара до 145 г/мин позволяют качественно гладить как горизонтально, так и вертикально. Также устройство оборудовано системой защиты от капель, от накипи, шнуром с вращением на 360° и длиной кабеля 3 м.', 'The Polaris PIR 2483K 3m steam iron features a powerful 2400 W heating element and a durable PRO 5 Ceramic soleplate for smooth gliding. With a 300 ml water tank, continuous steam delivery of up to 45 g/min and a steam‑burst of 145 g/min, it easily handles both flat‑bed and vertical ironing. Additional features include anti‑drip protection, anti‑scale system, 360° swivel power cord and a generous 3‑metre cable.', 'Паровой утюг Polaris PIR 2483K 3m', 'Polaris PIR 2483K 3m Steam Iron'),
(23, 'Tikuv mashina Janome 4045', '<p>Maksimal tikuv tezligi 85 Vt bo&lsquo;lgan Janome 4045 elektromexanik tikuv mashinasida ham professional tikuvchi, ham havaskor, hatto yangi shogird ham tikuv ishlarni bajarishi mumkin. Axir uning 15 ta tikuv operatsiyasi bor. Ular bilan eng zo&lsquo;r asarlar, chiroyli naqshlar, yamoqlar va o&lsquo;zingizning kiyim uslubingizni yarating. Kiyimlar kolleksiyangizning dizayneriga aylaning. Mashina har xil turdagi zigzag, to&lsquo;g&lsquo;ri chiziqlar, avtomatik rejimda overlok va yashirin tikuvlar, hamda tugmachalar tikadi. Vertikal moki eng kerakli xususiyatdir. Ammo igna yaqinidagi yorug&lsquo;lik tikuv operatsiyaning asosiy joyini mukammal tarzda yoritadi. TEXNOMART kompaniyasining Janome 4045 tikuv mashinasida bolalar buyumlarini tiking.</p>', 2120000, 14, 0, 0, '2025-10-28 11:41:59', '2025-11-11 19:05:52', 'uploads/product/b1_hkyOng.webp', 'Швейная машина Janome ArtStyle 4045 — электромеханическая модель с максимальной скоростью до 800 стежков в минуту, 15 различными операциями шитья, длиной стежка до 4 мм и шириной до 5 мм, высотой подъёма лапки до 13 мм. Отличный выбор для домашнего пользования, начинающих и для хобби.', 'The Janome ArtStyle 4045 is a reliable electromechanical sewing machine offering up to 800 stitches per minute, 15 different stitch operations, a maximum stitch length of 4 mm and width of up to 5 mm, with a presser foot height of 13 mm — ideal for home sewing, beginners and hobbyists alike', 'Швейная машина Janome ArtStyle 4045', 'Janome ArtStyle 4045 Sewing Machine'),
(24, 'Chayka 2125 tikuv mashinasi', '<p>Elektromexanik boshqaruv turiga ega Chayka 2125 tikuv mashinasi yarim avtomatik ravishda tugma teshiklarini tikadi. Yuqori tikuv tezligida mashina 34 ta tikuv operatsiyasini bajaradi. Qaytarish tugmasi, tebranuvchi moki va faol oyoqchasining yoritilishi mashinaning afzalliklari hisoblanadi. Mashinaning xar xil turdagi oyoqchalari chaqnoq va tugmalarni tikishni osonlashtiradi. Mashina zigzag, yashirin, dekorativ va naqshli tikuvlar, shuningdek, qoplamali tikuvlar kabi operatsiyalarni bajaradi. Eng muhimi, mashinani oson boshqarish. u bilan ham tikuvchi, ham shogirdi, hatto erkaklar ham foydalana oladi. Zamonaviy dizayn va ixchamlik mashinaga o&lsquo;zgacha ko&lsquo;rinish beradi. TEXNOMART saytidan va do&lsquo;konlaridan mashhur Chayka brendni sotib oling.</p>', 1889000, 14, 0, 0, '2025-10-28 11:42:37', '2025-11-11 19:06:55', 'uploads/product/f1_p8A55g.jpg', 'Электромеханическая швейная машина CHAYKA New Wave 2125 предлагает 25 швейных операций — включая прямую строчку (центральное и правое положение иглы), зигзаг, декоративные строчки, потайные швы, трикотажные строчки и имитацию оверлока. Есть полуавтоматическая петля‑полуавтомат, регулировка длины стежка до 4 мм, регулировка ширины зигзага до 4 мм, встроенный нитевдеватель и обрезчик нити, вертикальный челнок, режим «свободный рукав» для обработки рукавов и брюк.', 'The CHAYKA New Wave 2125 is an electromechanical sewing machine offering 25 stitch operations — including straight stitch (central and right needle positions), zigzag, decorative, blind hem, knit and overlock simulating stitches. It features a semi‑automatic buttonhole function, stitch length adjustment up to 4 mm, zigzag width up to 4 mm, built‑in needle threader and thread cutter, vertical shuttle, free‑arm mode for sleeves and trouser hems, and a power rating of 62 W', 'Швейная машина CHAYKA New Wave 2125', 'CHAYKA New Wave 2125 Sewing Machine'),
(25, 'Janome 2320 Tikuv mashinasi', '<p>Maksimal tikuv tezligi 60 Vt bo&lsquo;lgan Janome 2320 tikuv mashinasida tikuvchi bo&lsquo;lishi shart emas. Mashinani ishlatish oson. Axir uning 15 ta tikuv operatsiyasi bor. Ular bilan eng zo&lsquo;r asarlar, chiroyli naqshlar, yamoqlar va o&lsquo;zingizning kiyim uslubingizni yarating. Kiyimlar kolleksiyangizning dizayneriga aylaning. Mashina har xil turdagi zigzag, to&lsquo;g&lsquo;ri chiziqlar, avtomatik rejimda overlok va yashirin tikuvlar, hamda tugmachalar tikadi. Chaqnoq uchun maxsus oyoqcha hatto kurtkani ham tikish imkonini beradi. Tebranuvchi moki eng kerakli xususiyatdir. Ammo igna yaqinidagi yorug&lsquo;lik tikuv operatsiyaning asosiy joyini mukammal tarzda yoritadi. TEXNOMART kompaniyasining Janome 2320 tikuv mashinasida bolalar buyumlarini tiking.</p>', 2159000, 14, 0, 0, '2025-10-28 11:43:18', '2025-11-11 19:07:52', 'uploads/product/g1_UUnhzX.webp', 'Швейная машина Janome 2320 — электромеханическая модель для домашнего использования. Обеспечивает выполнение примерно 14–15 видов строчек: прямая, зигзаг, потайная, строчка для трикотажа и др. Максимальная длина стежка — 4 мм, ширина зигзага — до 5 мм. Модель оснащена рукавной платформой для обработки манжет и брюк, рычагом обратного хода для закрепки строчки, стандартными лапками, включая лапку для петли‑полуавтомата.', 'The Janome 2320 sewing machine is an electromechanical model designed for home use, offering around 14–15 stitch options including straight stitch, zigzag, blind hem and stretch fabric stitches. It supports a maximum stitch length of 4 mm and a width of up to 5 mm. The machine features a free‑arm for working on cuffs and pant hems, a reverse lever for secure stitching, and comes with standard presser feet including one for buttonholes.', 'Швейная машина Janome 2320', 'Janome 2320 Sewing Machine'),
(26, 'Apple iPhone 16 Pro 128GB Black Titanium', '<p>iPhone 16 Pro &ndash; siz ko&lsquo;proq yutuqlarga erishishingiz uchun yaratilgan qurilmadir. Texnologiya sohasidagi eng so&lsquo;nggi kashfiyotlar va puxta ishlab chiqilgan dizayn uning peshqadamligini ta&rsquo;minlaydi. Apple Intelligence Intelligence&rsquo;ning eng yangi versiyasi bilan smartfoningiz nafaqat noyob vositaga, balki ishonchli hamkoriga aylanadi. Tizim kundalik vazifalarni yengillashtirish, ularni soddalashtirish va shu bilan birga ma&rsquo;lumotlar himoyasini kafolatlash uchun mo&lsquo;ljallangan. Ma&rsquo;lumotlarning maxfiyligini ta&rsquo;minlash maqsadida har bir jarayon bevosita qurilmada ishlov beriladi, bu esa ma&rsquo;lumotlarning chiqib ketish xavfini istisno qiladi. Endi telefoningiz sizni yanada yaxshiroq tushunadi va sizning xohish-istaklaringizga asoslangan yechimlarni taklif qiladi.</p>', 14239000, 4, 0, 0, '2025-10-28 11:45:05', '2025-11-11 19:08:52', 'uploads/product/h1_ovxLdR.webp', 'В корпусе из титана «Black Titanium» с вместительной памятью 128 ГБ, iPhone 16 Pro предлагает 6,3″ OLED‑дисплей Super Retina XDR с разрешением 2622×1206 и частотой обновления до 120 Гц — для чёткого и плавного изображения.', 'Crafted with a bold Black Titanium frame and a 128 GB storage variant, the iPhone 16 Pro features a 6.3″ Super Retina XDR OLED display (2622×1206 pixels, up to 120 Hz refresh rate) for sharp, fluid visuals. \r\nApple\r\n+2\r\nApple Support\r\n+2\r\n\r\nPowered by the A18 Pro chip built on a 3 nm process, this device delivers performance and efficiency for demanding daily use. \r\nPhoneArena\r\n+1\r\n\r\nThe advanced camera system includes a 48 MP Fusion main sensor, a 48 MP ultra‑wide angle, and a 12 MP 5× telephoto lens with sophisticated optics for premium photography and video', 'Apple iPhone 16 Pro 128 ГБ Black Titanium', 'Apple iPhone 16 Pro 128GB Black Titanium'),
(27, 'Apple iPhone 16 128GB Black', '<p>2024-yilda butun dunyoga mashhur Apple kompaniyasi tomonidan ishlab chiqarilgan eng kutilgan qurilmalardan biri - bu iPhone 16 128GB Black. Ushbu zamonaviy va nafis smartfon faqatgina egasining shaxsiy uslubini ta&rsquo;kidlabgina qolmay, balki uning maqomini ham oshirish uchun yaratilgan. Dizayn Tashqi ko&lsquo;rinishiga kelsak, iPhone 16 mustahkam shisha va metall kabi pishiq va sifatli materiallardan tayyorlangan. Korpusning bu unsurlar kutilmagan zarbalar va tirnalishlardan yuqori darajada himoya qilishni ta&rsquo;minlaydi. Qurilmaning og&lsquo;irligi bor-yo&lsquo;g&lsquo;i 170 gramm bo&lsquo;lib, bu uni kundalik foydalanish uchun qulay va amaliy qiladi. Uni cho&lsquo;ntakda ham, sumkada ham bemalol olib yurish mumkin. Korpusning yumaloq burchaklari qurilmaga kelajakka yo&lsquo;naltirilgan ko&lsquo;rinish va noyob dizayn baxsh etadi. Kameralar orqa panelda nozik did bilan joylashtirilgan bo&lsquo;lib, bu telefonning nafis va puxta o&lsquo;ylangan tashqi ko&lsquo;rinishini ta&rsquo;minlaydi.</p>', 11019000, 4, 0, 0, '2025-10-28 11:45:54', '2025-11-11 19:10:03', 'uploads/product/j1_DKeY0K.webp', 'iPhone 16 оснащён 6.1″ OLED‑дисплеем Super Retina XDR и мощным чипом A18 (3 нм), обеспечивающим высокую производительность и эффективность. При объёме памяти 128 ГБ, защите IP68, двойной камере с 48 МП + 12 МП ультра‑широкая и стильном чёрном алюминиевом корпусе — это универсальное решение для ежедневного использования, с качественной съёмкой, отличным экраном и длительной автономностью', 'The iPhone 16 boasts a 6.1″ Super Retina XDR OLED display, powered by the A18 chip (3nm) for fast and efficient performance. With 128GB storage, IP68 dust & water resistance, and dual rear cameras (48MP + 12MP ultra‑wide), it’s built for everyday excellence—sharp visuals, capable cameras and long‑lasting battery inside a sleek black aluminium design. ', 'Apple iPhone 16 128 ГБ Black', 'Apple iPhone 16 128GB Black'),
(28, 'Apple iPhone 16e 128GB Oq ', '<p>Model klassik va zamonaviy uslubda ishlab chiqilgan bo&lsquo;lib, shisha hamda metall materiallardan foydalangan. Og&lsquo;irligi atigi 167 gramm, bu esa qurilmani har kuni foydalanishda yengil va qulay qiladi. IP68 standarti bo&lsquo;yicha himoya tufayli turli sharoitlarda bemalol ishlatish mumkin. Nano-SIM kartalarning ikkita joyi mavjud bo&lsquo;lib, ish va shaxsiy aloqalarni ajratishda qulaylik yaratadi. Kamera 48 megapiksellik asosiy modul har qanday yorug&lsquo;likda sifatli suratlar olish imkonini beradi. Aqlli ishlov berish texnologiyalari va tasvir barqarorlashtirish tizimi natijasida tiniq va yorqin kadrlar hosil bo&lsquo;ladi. 12 MP old kamera orqali aniq selfilar qilish, yuqori sifatda videoqo&lsquo;ng&lsquo;iroqlar o&lsquo;tkazish va yuz orqali blokdan chiqarish mumkin.</p>', 11023000, 4, 0, 0, '2025-10-28 11:46:44', '2025-11-11 19:11:30', 'uploads/product/z1_MvbQNB.webp', 'iPhone 16e (128 ГБ, белый) оснащён 6,1-дюймовым OLED-дисплеем Super Retina XDR с разрешением 2532×1170 и пиковым яркостью до 1200 нит. \r\nApple\r\n+1\r\n\r\nУстройство работает на чипе A18, включает 6-ядерный CPU (2 производительных + 4 эффективных ядра), 4-ядерный GPU и 16-ядерный Neural Engine. \r\nApple\r\n\r\nОсновная камера — 48 Мп Fusion (ƒ/1.6) + 12 Мп телеобъектив 2× (ƒ/1.6) с цифровым зумом до 10×.', 'The iPhone 16e (128 GB, White) features a 6.1″ Super Retina XDR OLED display with 2532×1170 resolution and up to 1200 nits HDR brightness. \r\nApple\r\n+2\r\nApple\r\n+2\r\n\r\nPowered by Apple’s A18 chip, it offers a 6-core CPU (2 performance + 4 efficiency cores), 4-core GPU and 16-core Neural Engine', 'Apple iPhone 16e 128 ГБ White', 'Apple iPhone 16e 128GB White'),
(29, 'Xiaomi Redmi Pad 2 WiFi 4/128GB Graphite Gray Plansheti', '<p>Xiaomi Redmi Pad 2 WiFi &mdash; yengil, zamonaviy va qulay dizaynga ega universal planshet. Og&lsquo;irligi atigi 512 g, jiddiy kulrang korpusi esa uni nafaqat shaxsiy foydalanish, balki o&lsquo;qish va ish uchun ham mos qiladi. Qurilma Android 15 operatsion tizimida ishlaydi, bu esa foydalanuvchiga yangi imkoniyatlar va interfeysni moslash imkonini beradi. USB Type-C porti orqali zaryadlanadi va ulanadi, shuningdek, klassik 3.5 mm raz&rsquo;yom orqali quloqchin ulash mumkin. Model Xitoyda ishlab chiqarilgan bo&lsquo;lib, zamonaviy sifat talablariga javob beradi. 11 dyuymli ekran IPS texnologiyasi asosida ishlab chiqilgan bo&lsquo;lib, 2560&times;1600 piksel aniqlik va 271 PPI zichlikni taqdim etadi. 90 Gts yangilanish chastotasi tasvirni silliq va tiniq qiladi, bu esa matn o&lsquo;qish, brauzerda ishlash yoki video tomosha qilishda ayniqsa qulaydir. Ranglar aniq, sensor esa sezgir, shuning uchun uydami, ochiq havodami &mdash; har doim qulay foydalanish imkonini beradi. Bunday format multimedia, onlayn darslar va ofis dasturlari uchun juda mos. Uskunaviy jihatdan planshet 2.2 GGs takt chastotasiga ega MediaTek Helio G100 Ultra protsessori bilan jihozlangan, bu esa foydalanuvchi harakatlariga tez javob qaytaradi va bir nechta ilovalarni bir vaqtda bemalol bajaradi. 4 GB operativ xotira va 128 GB ichki saqlov joyi sizga fayllar, suratlar va kerakli dasturlarni bemalol saqlash imkonini beradi. Wi-Fi va Bluetooth modullari esa boshqa qurilmalarga tez va barqaror ulanishingizni ta&rsquo;minlaydi. Mustaqil ishlash vaqti uzoq &mdash; 9000 mA&middot;soat sig&lsquo;imli batareya yordamida planshetdan 19 soatgacha foydalanish mumkin. 15 Vt quvvatdagi adapter bilan esa zaryad qisqa vaqtda tiklanadi, bu safar yoki ish kunlari uchun ayni muddao. 8 MP orqa kamera fotosurat va video yozish uchun yetarli, 5 MP old kamera esa videoqo&lsquo;ng&lsquo;iroq va selfilar uchun mos. Ushbu planshet talaba, xodim yoki qulaylik va unumdorlikni qadrlovchi har bir foydalanuvchi uchun ideal tanlovdir.</p>', 2119000, 3, 0, 0, '2025-10-28 11:47:42', '2025-11-11 19:12:45', 'uploads/product/x1_cMxVO-.webp', 'Планшет Xiaomi Redmi Pad 2 (WiFi-версия, 4 ГБ ОЗУ + 128 ГБ ПЗУ) в цвете Graphite Gray оснащён 11″ экраном 2.5K (2560 × 1600) с соотношением сторон 16:10 и частотой обновления до 90 Гц для плавной работы интерфейса и просмотра контента.', 'The Xiaomi Redmi Pad 2 (WiFi version, 4 GB RAM + 128 GB storage) in Graphite Gray features an 11″ 2.5K (2560 × 1600) display with a 16:10 aspect ratio and 90Hz refresh rate for smooth scrolling and immersive viewing. \r\nXiaomi España\r\n+2\r\nИнтернет-магазин JOYBOX\r\n+2\r\n\r\nUnder the hood, it is powered by the MediaTek Helio G100 Ultra chipset (6nm), offering reliable everyday performance', 'Xiaomi Redmi Pad 2 WiFi 4/128 ГБ Graphite Gray', 'Xiaomi Redmi Pad 2 WiFi 4/128GB Graphite Gray'),
(30, 'Xiaomi Redmi Pad SE LTE 8.7 4/128GB Graphite Gray Plansheti', '<p>Xiaomi Redmi Pad 2 WiFi &mdash; yengil, zamonaviy va qulay dizaynga ega universal planshet. Og&lsquo;irligi atigi 512 g, jiddiy kulrang korpusi esa uni nafaqat shaxsiy foydalanish, balki o&lsquo;qish va ish uchun ham mos qiladi. Qurilma Android 15 operatsion tizimida ishlaydi, bu esa foydalanuvchiga yangi imkoniyatlar va interfeysni moslash imkonini beradi. USB Type-C porti orqali zaryadlanadi va ulanadi, shuningdek, klassik 3.5 mm raz&rsquo;yom orqali quloqchin ulash mumkin. Model Xitoyda ishlab chiqarilgan bo&lsquo;lib, zamonaviy sifat talablariga javob beradi. 11 dyuymli ekran IPS texnologiyasi asosida ishlab chiqilgan bo&lsquo;lib, 2560&times;1600 piksel aniqlik va 271 PPI zichlikni taqdim etadi. 90 Gts yangilanish chastotasi tasvirni silliq va tiniq qiladi, bu esa matn o&lsquo;qish, brauzerda ishlash yoki video tomosha qilishda ayniqsa qulaydir. Ranglar aniq, sensor esa sezgir, shuning uchun uydami, ochiq havodami &mdash; har doim qulay foydalanish imkonini beradi. Bunday format multimedia, onlayn darslar va ofis dasturlari uchun juda mos. Uskunaviy jihatdan planshet 2.2 GGs takt chastotasiga ega MediaTek Helio G100 Ultra protsessori bilan jihozlangan, bu esa foydalanuvchi harakatlariga tez javob qaytaradi va bir nechta ilovalarni bir vaqtda bemalol bajaradi. 4 GB operativ xotira va 128 GB ichki saqlov joyi sizga fayllar, suratlar va kerakli dasturlarni bemalol saqlash imkonini beradi. Wi-Fi va Bluetooth modullari esa boshqa qurilmalarga tez va barqaror ulanishingizni ta&rsquo;minlaydi. Mustaqil ishlash vaqti uzoq &mdash; 9000 mA&middot;soat sig&lsquo;imli batareya yordamida planshetdan 19 soatgacha foydalanish mumkin. 15 Vt quvvatdagi adapter bilan esa zaryad qisqa vaqtda tiklanadi, bu safar yoki ish kunlari uchun ayni muddao. 8 MP orqa kamera fotosurat va video yozish uchun yetarli, 5 MP old kamera esa videoqo&lsquo;ng&lsquo;iroq va selfilar uchun mos. Ushbu planshet talaba, xodim yoki qulaylik va unumdorlikni qadrlovchi har bir foydalanuvchi uchun ideal tanlovdir.</p>', 2067000, 3, 0, 0, '2025-10-28 11:48:22', '2025-11-11 19:13:57', 'uploads/product/c1fed1d5-e4a5-4167-a4b9-32f373193f4c_LBX8wz.webp', 'Планшет Xiaomi Redmi Pad SE 8.7″ LTE (4 ГБ ОЗУ + 128 ГБ ПЗУ) в цвете Graphite Gray оснащён компактным 8,7-дюймовым дисплеем с разрешением 1340×800 и частотой обновления до 90 Гц — для плавного просмотра и навигации.', 'The Xiaomi Redmi Pad SE 8.7″ LTE (4 GB RAM + 128 GB storage) in Graphite Gray offers an ultra-portable 8.7-inch display with 1340×800 resolution and up to 90 Hz refresh rate for smooth visuals. \r\nXiaomi España\r\n+1\r\n\r\nPowered by the MediaTek Helio G85 chipset (12nm), it delivers efficient everyday performance for streaming, web browsing, and light multitasking', 'Xiaomi Redmi Pad SE 8.7″ LTE 4/128 ГБ Graphite Gray', 'Xiaomi Redmi Pad SE 8.7″ LTE 4/128 GB Graphite Gray'),
(32, 'Samsung Galaxy Z Fold6 5G 12/256GB Silver Shadow', '<p>Samsung Galaxy Z Fold6 5G 12/256GB Silver Shadow</p>', 21949000, 2, 0, 0, '2025-10-29 17:11:41', '2025-11-11 19:15:12', 'uploads/product/v1_e-ffJ5.webp', '🇷🇺 Русское Описание:\r\nSamsung Galaxy Z Fold6 5G объединяет инновации складного форм-фактора с производительностью флагманского уровня: главный экран 7,6″ QXGA+ Dynamic AMOLED 2X и внешний экран 6,3″, оба с адаптивной частотой 120 Гц', 'The Samsung Galaxy Z Fold6 5G pairs groundbreaking foldable innovation with flagship-level performance: a 7.6″ QXGA+ Dynamic AMOLED 2X main display and a 6.3″ cover display, both with a 120 Hz adaptive refresh rate. \r\nSamsung Global Newsroom\r\n+2\r\nPhoneArena\r\n+2\r\n\r\nUnder the hood, you’ll find the Snapdragon 8 Gen 3 for Galaxy chipset, 12 GB of RAM, and 256 GB of UFS 4.0 storage (in the base variant)—designed for seamless multitasking and ultra-responsive apps', 'Samsung Galaxy Z Fold6 5G 12/256 ГБ Silver Shadow', 'Samsung Galaxy Z Fold6 5G 12/256 GB Silver Shadow'),
(33, 'Xiaomi 15 12/512GB Black', '<p>Xiaomi 15 12/512GB Black</p>', 21949000, 3, 0, 0, '2025-10-29 17:22:51', '2025-11-11 19:16:18', 'uploads/product/111_Pf8dlG.webp', 'Xiaomi 15 (12 ГБ ОЗУ + 512 ГБ памяти) в чёрном цвете оснащён 6,36″ LTPO OLED-дисплеем с разрешением 2670×1200, частотой обновления до 120 Гц и пиком яркости 3200 нит. \r\nXiaomi España\r\n Работает на топовом чипсете Snapdragon 8 Elite (3 нм) с быстрым UFS 4.0 накопителем и большим объёмом памяти, что обеспечивает молниеносную работу', 'The Xiaomi 15 (12 GB RAM + 512 GB storage) in Black offers a 6.36″ LTPO OLED display (2670×1200 resolution, up to 120 Hz refresh, 3200 nits peak brightness) powered by the Snapdragon 8 Elite (3 nm) chipset. \r\nXiaomi España\r\n+2\r\nPhoneArena\r\n+2\r\n With UFS 4.0 storage and roomy memory', 'Xiaomi 15 12/512ГБ Black', 'Xiaomi 15 12/512GB Black'),
(34, 'Xiaomi 15 12/512GB Black', '<p>Xiaomi 15 12/512GB Black</p>', 21949000, 3, 0, 0, '2025-10-29 17:23:04', '2025-11-11 19:17:23', 'uploads/product/221_rxMwZa.webp', 'Смартфон Xiaomi 15 (12 ГБ ОЗУ + 512 ГБ памяти) в чёрном цвете оснащён 6,36″ LTPO AMOLED‑дисплеем с разрешением 2670×1200 px, частотой обновления до 120 Гц и пиковой яркостью до 3200 нит. \r\nDateks\r\n+1\r\n\r\nИспользует чипсет Snapdragon 8 Elite на 3‑нм технологическом процессе, в связке с 12 ГБ LPDDR5X и накопителем UFS 4.0.', 'Under the hood is the Snapdragon 8 Elite chipset built on 3 nm process, paired with 12 GB LPDDR5X RAM and UFS 4.0 storage. \r\nXiaomi España\r\n+1\r\n\r\nThe triple‑camera system includes three 50 MP sensors with LEICA optics: main, ultra‑wide and telephoto (60 mm equivalent focal length). 8K video recording and advanced photo‑features are supported', 'Xiaomi 15 12/512 ГБ Black', 'Xiaomi 15 12/512GB Black'),
(37, 'Iphone 12 pro max', '<p>Iphone 12 pro max</p>', 12677000, 4, 0, 0, '2025-10-29 18:15:55', '2025-11-11 19:18:25', 'uploads/product/333_uEgDj7.webp', 'iPhone 12 Pro Max оснащён 6,7‑дюймовым OLED‑дисплеем Super Retina XDR с разрешением 2778×1284 пикселей, защищённым передним покрытием Ceramic Shield и рамкой из нержавеющей стали. Поддерживает стандарт защиты IP68 (погружение до 6 м на 30 мин). \r\nApple Support\r\n+1\r\n\r\nРаботает на базе чипа A14 Bionic, изготовленном по 5‑нм техпроцессу, обеспечивая высокую производительность и энергоэффективность. ', 'The iPhone 12 Pro Max features a 6.7‑inch Super Retina XDR OLED display (2778×1284 px) with Ceramic Shield front covering, stainless steel frame, and IP68 water/dust resistance. \r\nColumbia IT\r\n+2\r\nApple Support\r\n+2\r\n\r\nPowered by the A14 Bionic chip built on 5‑nm process for high performance and efficiency. \r\nPhoneArena\r\n+1', 'Apple iPhone 12 Pro Max 128 ГБ', 'Apple iPhone 12 Pro Max 128 GB (or up to 512 GB)'),
(38, 'Samsung Galaxy Z Fold6 5G 12/256GB Silver Shadow', '<p>Samsung Galaxy Z Fold6 5G 12/256GB Silver Shadow</p>', 6199000, 2, 0, 0, '2025-10-31 02:18:57', '2025-11-11 19:19:32', 'uploads/product/444_xPgKYi.webp', 'Samsung Galaxy Z Fold6 5G (12 ГБ ОЗУ + 256 ГБ) в цвете «Silver Shadow» — это флагманский складной смартфон, объединяющий возможности телефона и планшета. Он оснащён главным дисплеем 7,6″ Dynamic AMOLED 2X и внешним экраном 6,3″, оба поддерживают частоту обновления до 120 Гц.', 'The Samsung Galaxy Z Fold6 5G (12 GB RAM + 256 GB storage) in the “Silver Shadow” finish is a top‑tier foldable smartphone combining smartphone portability with tablet‑style screen real‑estate. It features a 7.6″ Dynamic AMOLED 2X main display and a 6.3″ cover display, both supporting up to 120 Hz refresh rate', 'Samsung Galaxy Z Fold6 5G 12/256 ГБ Silver Shadow', 'Samsung Galaxy Z Fold6 5G 12/256GB Silver Shadow');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int NOT NULL,
  `image` text,
  `product_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `image`, `product_id`) VALUES
(42, 'uploads/product-images/07c18c96-4aed-408f-b614-3a0c6b83492e_cKX-Wd.webp', 3),
(43, 'uploads/product-images/46e28090-96bf-4f04-873f-1c89dd1e753e_09eZMy.webp', 3),
(46, 'uploads/product-images/9aae026c-b52f-41bf-b602-9b75dadd95a7_SHvURP.webp', 4),
(47, 'uploads/product-images/6e2739fe-88f0-4c44-91a2-a6bccf653898_eylhsI.webp', 4),
(48, 'uploads/product-images/aed3f68e-d070-4cec-8c35-dcf91c065cb6_eISLLZ.webp', 4),
(52, 'uploads/product-images/6e48c87e-f2fe-49fa-a3eb-76fa1dbfd035_-civrS.webp', 6),
(53, 'uploads/product-images/d2e589b3-f713-4080-b8ad-bd91356cbaa4_3Zc44P.webp', 6),
(54, 'uploads/product-images/dd4ade76-4818-45df-a824-046fd7029dec_68pfNJ.webp', 6),
(55, 'uploads/product-images/3b10c9fc-9770-4d60-ae1f-123e48dda774_fhFCR3.webp', 7),
(56, 'uploads/product-images/556a7ce3-6b4e-47a6-a295-96a8ac38c8ca_YZn3ej.webp', 7),
(57, 'uploads/product-images/cb3a8444-8757-42d5-95da-1f64597795a6_DKnS4t.webp', 7),
(58, 'uploads/product-images/556a7ce3-6b4e-47a6-a295-96a8ac38c8ca_PUSurL.webp', 8),
(59, 'uploads/product-images/862c3951-592e-424a-a91b-cbc1e886bcdb_dX0YwX.webp', 8),
(60, 'uploads/product-images/e5185395-0844-4e12-b5d0-2313ac61925d (1)_qi1Wdb.webp', 8),
(61, 'uploads/product-images/862c3951-592e-424a-a91b-cbc1e886bcdb_MKRJAV.webp', 9),
(62, 'uploads/product-images/1381e69b-5724-4bc2-93c5-8a412c346d5d_67RP4c.webp', 9),
(63, 'uploads/product-images/ac6e64f2-dbb2-4875-8ad3-5aa75a354465_p_Pfpl.webp', 9),
(64, 'uploads/product-images/1472e3e0-9bf6-4714-9ef8-036b0b483ea4_r2_Oy2.jpg', 10),
(65, 'uploads/product-images/862c3951-592e-424a-a91b-cbc1e886bcdb_iEXPEe.webp', 10),
(66, 'uploads/product-images/1962622f-1b22-46b2-8bb2-664475eaebb0_7Ldzsw.jpg', 10),
(67, 'uploads/product-images/ca126f6b-66ed-4bba-a842-8c47816047b0_GdMU71.jpg', 11),
(68, 'uploads/product-images/f9fd1546-6c5f-40b4-9302-038d9368f82c_S3b3hu.jpg', 11),
(69, 'uploads/product-images/c5b0db82-c347-4a4e-a708-400612e13505_TmrG0Z.jpg', 11),
(70, 'uploads/product-images/2_fu4ut8.webp', 12),
(71, 'uploads/product-images/3_YPjuz-.webp', 12),
(72, 'uploads/product-images/4_10JJqw.webp', 12),
(73, 'uploads/product-images/12_nJzvME.webp', 13),
(74, 'uploads/product-images/13_Up8q8b.webp', 13),
(75, 'uploads/product-images/14_AajFr6.webp', 13),
(76, 'uploads/product-images/22_fF-4ol.webp', 14),
(77, 'uploads/product-images/23_amWt_x.webp', 14),
(78, 'uploads/product-images/24_8ysnWF.webp', 14),
(79, 'uploads/product-images/32_3nVdgV.jpg', 15),
(80, 'uploads/product-images/33_5aMpJp.jpg', 15),
(81, 'uploads/product-images/34_nZl6F3.jpg', 15),
(82, 'uploads/product-images/42_obu6UM.jpg', 16),
(83, 'uploads/product-images/43_iVBA0i.jpg', 16),
(84, 'uploads/product-images/44_OyHMbl.jpg', 16),
(85, 'uploads/product-images/52_tps0DW.webp', 17),
(86, 'uploads/product-images/53_r1VL8i.webp', 17),
(87, 'uploads/product-images/55_ELw0r5.webp', 17),
(88, 'uploads/product-images/61_SPvNq6.webp', 18),
(89, 'uploads/product-images/62_GGTOvy.webp', 18),
(90, 'uploads/product-images/63_BXj1yk.webp', 18),
(91, 'uploads/product-images/72_ic4KQp.jpg', 19),
(92, 'uploads/product-images/73_M4IKtv.jpg', 19),
(93, 'uploads/product-images/75_cTAk-a.jpg', 19),
(94, 'uploads/product-images/83_SK3qQ1.jpg', 20),
(95, 'uploads/product-images/85_ktu3gN.jpg', 20),
(96, 'uploads/product-images/81_g17bHc.webp', 20),
(97, 'uploads/product-images/93_cUqx2L.jpg', 21),
(98, 'uploads/product-images/94_2W8ZRd.jpg', 21),
(99, 'uploads/product-images/95_BNdGRQ.jpg', 21),
(100, 'uploads/product-images/a_lXzqxW.jpg', 22),
(101, 'uploads/product-images/a1_eT7U_u.jpg', 22),
(102, 'uploads/product-images/a2_KOdw2Y.jpg', 22),
(103, 'uploads/product-images/b3_x9T1GN.jpg', 23),
(104, 'uploads/product-images/b5_qNHTlW.jpg', 23),
(105, 'uploads/product-images/b6_Fxy34H.jpg', 23),
(106, 'uploads/product-images/f3_Mr5uFw.jpg', 24),
(107, 'uploads/product-images/f4_hzF9c_.jpg', 24),
(108, 'uploads/product-images/f5_SbQAUB.jpg', 24),
(109, 'uploads/product-images/g3_XzEuEO.webp', 25),
(110, 'uploads/product-images/g4_of6NNM.webp', 25),
(111, 'uploads/product-images/g5_VnT1H6.webp', 25),
(112, 'uploads/product-images/h3_7-f6hC.webp', 26),
(113, 'uploads/product-images/h5_bY969t.webp', 26),
(114, 'uploads/product-images/h6_jVG-QK.webp', 26),
(115, 'uploads/product-images/j4_MV6gK-.webp', 27),
(116, 'uploads/product-images/j6_iLnD5g.webp', 27),
(117, 'uploads/product-images/j8_tziNK6.webp', 27),
(118, 'uploads/product-images/z2_R9kvLE.webp', 28),
(119, 'uploads/product-images/z3_b91RX-.webp', 28),
(120, 'uploads/product-images/z6_L_0bZv.webp', 28),
(121, 'uploads/product-images/x4_b6DOHu.webp', 29),
(122, 'uploads/product-images/x6_hU50kO.webp', 29),
(123, 'uploads/product-images/x7_B2cVah.webp', 29),
(124, 'uploads/product-images/c3_Zc6M2Q.webp', 30),
(125, 'uploads/product-images/c5_-IMaCi.webp', 30),
(126, 'uploads/product-images/c7_sXp-MA.webp', 30),
(127, 'uploads/product-images/v3_3YLbKc.webp', 32),
(128, 'uploads/product-images/v5_8W5msL.webp', 32),
(129, 'uploads/product-images/v8_RNQhha.webp', 32),
(130, 'uploads/product-images/112_lZK1Vt.webp', 33),
(131, 'uploads/product-images/113_5hK7Zn.webp', 33),
(132, 'uploads/product-images/111_7r0d--.webp', 33),
(133, 'uploads/product-images/222_knqUpO.webp', 34),
(134, 'uploads/product-images/223_L9E_Kt.webp', 34),
(135, 'uploads/product-images/221_zAVPSp.webp', 34),
(136, 'uploads/product-images/334_vOcXfY.webp', 37),
(137, 'uploads/product-images/335_K0D3G8.webp', 37),
(138, 'uploads/product-images/336_2hUiEN.webp', 37),
(139, 'uploads/product-images/445_vFO3FW.webp', 38),
(140, 'uploads/product-images/446_9LHcaQ.webp', 38),
(141, 'uploads/product-images/447_oycrDk.webp', 38),
(142, 'uploads/product-images/9aae026c-b52f-41bf-b602-9b75dadd95a7_vHOBsv.webp', 5),
(143, 'uploads/product-images/6e2739fe-88f0-4c44-91a2-a6bccf653898_pxHxj7.webp', 5),
(144, 'uploads/product-images/aed3f68e-d070-4cec-8c35-dcf91c065cb6_p-hfw_.webp', 5);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `logo_img` varchar(255) DEFAULT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `facebook_url` text,
  `telegram_url` text,
  `instagram_url` text,
  `youtube_url` text,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `email`, `phone_number`, `logo_img`, `site_name`, `facebook_url`, `telegram_url`, `instagram_url`, `youtube_url`, `description`) VALUES
(1, 'nurali2004@gmail.com', '998992907704', 'uploads/setting/shop.png', 'Online Shop', 'https://www.facebook.com/', 'https://telegram.me/', 'https://www.instagram.com/', 'https://www.youtube.com/', '<p><strong>Bizning onlayn elektronika do&lsquo;konimizda eng so&lsquo;nggi texnologiyalarni toping! Telefon, televizor, kompyuter, audio va smart gadjetlar &mdash; sifatli, kafolatli va tez yetkazib berish xizmati bilan..</strong></p>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` text,
  `order` int DEFAULT '0',
  `url` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `img`, `order`, `url`) VALUES
(1, 'Premium care for premium people.', 'uploads/partner/516b95a0-63ea-4bcc-a019-33c4aa9fca0b-cover_b5_Vtl.png', 0, 'https://www.asos.com/men/'),
(2, 'Online watches', 'uploads/partner/3432b14cfdb2ec4f5fd99009ea8c11ca_3nz_FW.jpg', 1, 'https://www.asos.com/men/'),
(3, 'Online clothes and mp3', 'uploads/partner/black-friday-super-sale-facebook-cover-banner-template_120329-5177_L4KrYY.jpg', 2, 'https://www.asos.com/men/');

-- --------------------------------------------------------

--
-- Table structure for table `source_message`
--

CREATE TABLE `source_message` (
  `id` int NOT NULL,
  `category` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb3_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `source_message`
--

INSERT INTO `source_message` (`id`, `category`, `message`) VALUES
(1, 'category', 'Name'),
(2, 'category', 'Order'),
(3, 'category', 'Pid'),
(4, 'category', 'Img'),
(5, 'category', 'Name uz'),
(6, 'category', 'Name ru'),
(7, 'category', 'Name en'),
(8, 'category', 'Faol emas'),
(9, 'category', 'Faol'),
(10, 'category', 'Create Category'),
(11, 'category', 'Categories'),
(12, 'product', 'Price'),
(13, 'product', 'Category ID'),
(14, 'product', 'Status'),
(15, 'product', 'Order'),
(16, 'product', 'Create Product'),
(17, 'product', 'Update Product'),
(18, 'order', 'User ID'),
(19, 'order', 'Address'),
(20, 'order', 'Phone'),
(21, 'order', 'Created At'),
(22, 'order', 'Updated At'),
(23, 'order', 'Create Order'),
(24, 'order', 'Orders'),
(25, 'partner', 'Name'),
(26, 'partner', 'Img'),
(27, 'partner', 'Order'),
(28, 'partner', 'Partners'),
(29, 'partner', 'Create Partner'),
(30, 'partner', 'ImageFile'),
(31, 'partner', 'Update Partner'),
(32, 'partner', 'Update'),
(33, 'partner', 'Faol Emas'),
(34, 'partner', 'Faol'),
(35, 'product', 'Products'),
(36, 'product', 'Name en'),
(37, 'product', 'Name ru'),
(38, 'product', 'Name uz'),
(39, 'product', 'Active'),
(40, 'product', 'Inactive'),
(41, 'product', 'Faol Emas'),
(42, 'product ', 'Faol'),
(43, 'product', 'ImageFiles'),
(44, 'product', 'Description uz'),
(45, 'product', 'Description en'),
(46, 'product', 'Description ru'),
(47, 'product', 'Update Product'),
(48, 'product-image', 'Product Images'),
(49, 'product-image', 'Create Product Image'),
(50, 'product-image', 'Update Product Image'),
(51, 'product-image', 'Product ID'),
(52, 'universal', 'Update'),
(53, 'universal', 'Delete'),
(54, 'customer', 'Customers'),
(55, 'universal', 'Select User'),
(56, 'customer', 'Update Customer'),
(57, 'customer', 'Customers'),
(58, 'slider', 'Create Slider'),
(59, 'slider', 'Url'),
(60, 'slider', 'Sliders'),
(61, 'customer', 'Create Customer'),
(62, 'category', 'Update Category'),
(63, 'category', 'Select Category'),
(64, 'cart', 'Count'),
(65, 'cart', 'Create Cart'),
(66, 'cart', 'Carts'),
(67, 'cart', 'Select Product'),
(68, 'cart', 'Carts'),
(69, 'cart', 'Update Cart'),
(70, 'site', 'Congratulation '),
(71, 'setting', 'Email'),
(72, 'setting', 'Phone'),
(73, 'setting', 'Site Name'),
(74, 'setting', 'Description'),
(75, 'setting', 'Facebook Url'),
(76, 'setting', 'Telegram Url'),
(77, 'setting', 'Settings'),
(78, 'setting', 'Site Settings'),
(79, 'setting', 'Instagram Url'),
(80, 'setting', 'Youtube Url'),
(81, 'front', 'Popular Products'),
(82, 'support', 'First Name'),
(83, 'support', 'Create Support'),
(84, 'support', 'Supports'),
(85, 'support', 'Update Support'),
(86, 'source', 'Category'),
(87, 'source', 'Message'),
(88, 'source', 'Create Source Message'),
(89, 'source', 'Source Messages'),
(90, 'source', 'Update Source Message'),
(91, 'message', 'Language'),
(92, 'message', 'Translation'),
(93, 'message', 'Messages'),
(94, 'message', 'Create Message'),
(95, 'message', 'Update Message');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `description` text,
  `status` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `first_name`, `email`, `description`, `status`, `created_at`) VALUES
(2, 'saaverver', 'mavzurovnurali@gmail.com', '<p>dfvsadfvsdfvsdvb</p>', 0, '2025-11-03 19:00:00'),
(3, 'saaverver', 'mavzurovnurali@gmail.com', '<p>dfvsadfvsdfvsdvb</p>', 0, '2025-11-03 19:00:00'),
(4, 'aaefvesr', 'mavzurovnurali@gmail.com', '<p>dsfvsdbsg</p>', 0, '2025-11-10 19:00:00'),
(5, 'aaefvesr', 'mavzurovnurali@gmail.com', '<p>dsfvsdbsg</p>', 0, '2025-11-10 19:00:00'),
(6, 'aaefvesr', 'mavzurovnurali@gmail.com', '<p>dsfvsdbsg</p>', 0, '2025-11-10 19:00:00'),
(7, 'adsvevf', 'mavzurovnurali@gmail.com', '<p>sdfvsvser</p>', 0, '2025-11-25 19:00:00'),
(8, 'aaefvesr', 'mavzurovnurali@gmail.com', '<p>araergaer</p>', 0, '2025-11-24 19:00:00'),
(9, 'sdrgaer', 'mavzurovnurali@gmail.com', '<p>ddsbdf</p>', 0, '2025-11-24 19:00:00'),
(10, 'aaefvesr', 'mavzurovnurali@gmail.com', '<p>sdseets</p>', 1, '2025-11-15 19:00:00'),
(11, 'aaefvesr', 'mavzurovnurali@gmail.com', '<p>dbdsbsdb</p>', 0, '2025-11-23 19:00:00'),
(12, 'aaefvesr', 'mavzurovnurali@gmail.com', '<p>dbdsbsdb</p>', 0, '2025-11-23 19:00:00'),
(13, 'aaefvesr', 'mavzurovnurali@gmail.com', '<p>dfbdfbdfb</p>', 0, '2025-11-25 19:00:00'),
(14, 'aaefvesr', 'mavzurovnurali@gmail.com', '<p>ghchngc</p>', 0, '2025-11-03 19:00:00'),
(15, 'sdvadsf', 'mavzurovnurali@gmail.com', '<p>advadfvadf</p>', 0, '2025-11-22 19:00:00'),
(16, 'dxfbsb', 'mavzurovnurali@gmail.com', '<p>f bsfgb sgf&nbsp;</p>', 0, '2025-11-16 19:00:00'),
(17, 'vewrgvewt', 'mavzurovnurali@gmail.com', '<p>sefbserb rt&nbsp;</p>', 0, '2025-11-24 19:00:00'),
(18, 'Nurali', 'mavzurovnurali@gmail.com', '<p>bu xabar olog web site dan jo\'natildi</p>', 1, '2025-11-10 19:00:00'),
(19, 'aaefvesr', 'mavzurovnurali@gmail.com', 'sdvgbgfs', 3, '2025-11-10 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`, `role`) VALUES
(1, 'admin', 'AGI9Tcz7b7OFbAD9hg0KPLZXdzlK507x', '$2y$13$OdVG6lMqY1CsRHYMX/TkTOdjHLW1bmL3YCpVD85wy/FZZgdKL28ta', NULL, 'mavzurovnurali@gmail.com', 10, 1761203800, 1763214883, 'E_nCVc8Y1KqCC5zlkVdl4fhmPwy1bUEm_1761203800', 'admin'),
(2, 'nurali', 'KvOD89BQoMXT1T5QFm9U4gBf-0G0uYnt', '$2y$13$Eak5lBYsdy8c/OOEyNgc/exHTVl9gjQJrh0pUwhztxPAAIKP2PVc.', NULL, 'nura20009@gmail.com', 10, 1761508803, 1761508803, '3tyJ6wgGAJw1biqN-V-jglwywHkolyyX_1761508803', 'user'),
(4, 'moderator', 'VQCQWXPCKp2EFmeQ3f23ykwGZu07QZxA', '$2y$13$x8ZaZCLtD2RdnXhvAKcqsuUUKVX6PCaImsFm9ol3NbnqezkfSRV.C', NULL, 'moderator@test.lc', 10, 1762251253, 1762251253, '1GCAIkRNeJyD-QVADduLNH2cL1tD_2ws_1762251253', 'moderator'),
(5, 'worker', 'aFSyyfdTW2u2dWCHRVJujUZIJfKQ9JcU', '$2y$13$401X7a6VGb2JD.776KMOIO8JcWHmeb.7EZg78UEZbGyugtvfAlj9C', NULL, 'worker@test.lc', 10, 1762710530, 1762710530, 'MVNm5T_htjuXkgusq1RvXpeY_MZYHyZZ_1762710530', 'user'),
(10, 'asilbek', '_VD48J9fyDF-erfUMS-oD7YcsU1wRX1D', '$2y$13$QvtBRav2.AD1NYQQK0Mp3uWxnlQHccb9.LErphrOZInrchpJkltLq', NULL, 'asilbekrahmatov@gmail.com', 10, 1762876714, 1762876714, 'GFz31EgZAkrjTyh5ht87n5j4K1I2xbsV_1762876714', 'user'),
(12, 'nurali2', 'uabiQj82MaS49jnw9-SlvBzyTGt11JXV', '$2y$13$zvXrnGRFXleyYFRRTKJiauCMFR4Db0HonHEN3advAiAJ9GZgCAHBe', NULL, 'nura20004@gmail.com', 10, 1763085077, 1763085130, '6qdPla4-iwvRHU3Z5RGDeXTaSXBlgMEJ_1763085077', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-cart-user_id` (`user_id`),
  ADD KEY `idx-cart-product_id` (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-category-pid` (`pid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-customer-user_id` (`user_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`,`language`),
  ADD KEY `idx_message_language` (`language`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-order-user_id` (`user_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-order_item-order_id` (`order_id`),
  ADD KEY `idx-order_item-product_id` (`product_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-product-category_id` (`category_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-product_image-product_id` (`product_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `source_message`
--
ALTER TABLE `source_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_source_message_category` (`category`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `source_message`
--
ALTER TABLE `source_message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk-cart-product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-cart-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `fk-category-pid` FOREIGN KEY (`pid`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk-customer-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_source_message` FOREIGN KEY (`id`) REFERENCES `source_message` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk-order-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `fk-order_item-order_id` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-order_item-product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk-product-category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `fk-product_image-product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
