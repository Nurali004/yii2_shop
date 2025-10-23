-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 23, 2025 at 01:52 PM
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
  `name` varchar(255) DEFAULT NULL,
  `order` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `pid`, `name`, `order`) VALUES
(1, NULL, 'Smartfonlar', 0),
(2, 1, 'Samsung', 0),
(3, 1, 'Xiaomi', 0),
(4, 1, 'IPhone', 0),
(5, NULL, 'Kompyuterlar', 0),
(6, 5, 'Asus', 0),
(7, 5, 'Mac', 0),
(8, 5, 'Lenovo', 0),
(9, 5, 'Acer', 0),
(10, NULL, 'Maishiy Texnika', 0),
(11, 10, 'Changyutgich', 0),
(12, 10, 'Kir yuvish mashinasi', 0),
(13, 10, 'Dazmol', 0),
(14, 10, 'Tikuv mashinasi', 0);

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
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
('m130524_201442_init', 1761203491),
('m190124_110200_add_verification_token_column_to_user_table', 1761203491),
('m251023_054839_create_customer_table', 1761203491),
('m251023_055500_create_category_table', 1761203491),
('m251023_060005_create_order_table', 1761203491),
('m251023_060653_create_product_table', 1761203491),
('m251023_061004_create_product_image_table', 1761203491),
('m251023_061411_create_order_item_table', 1761203492),
('m251023_061720_create_cart_table', 1761203492);

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `price` float DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `status` int DEFAULT '0',
  `order` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `category_id`, `status`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Samsung Galaxy Z Fold6 5G 12/256GB Silver Shadow', 'Kuchli va almashtirib bo\'lmaydigan Qualcomm Snapdragon 8 Gen 3 protsessori, bir xil darajada kuchli Adreno 750 GPU bilan birgalikda tizimning yaxshilangan ishlashi va barqarorligini kafolatlaydi. Ushbu kombinatsiya multimedia vazifalari, o\'yinlar va yetarli quvvatni talab qiladigan foydalanuvchilarning kundalik echimlari uchun idealdir.\r\nTashqi ko\'rinish haqiqatan ham ta\'sirli: asosiy keng formatli displeyga yuqori aniqlikdagi va mukammal rang xususiyatlariga ega qo\'shimcha tashqi ekran qo\'shildi. Ushbu yechim ko\'proq multi-touch imkoniyatlarini, yaxshilangan ilovalar tajribasini va foydalanish qulayligini ta\'minlaydi.\r\nYangi ekran, shuningdek, old va asosiy funktsiyalarni bajaradigan qo\'shimcha kamera bilan jihozlangan. Ba\'zilar hayron bo\'lishlari mumkin: \"Nega kameralar juda ko\'p?\" Biroq, zamonaviy smartfonlar dunyosida kameralar asosiy rol o\'ynaydi va foydalanuvchilarga turli xil yorug\'lik sharoitlari va stsenariylarida yuqori sifatli fotosuratlar va videolarni yaratish imkoniyatini beradi.\r\nBundan tashqari, yangi gadjet kengaytirilgan operativ va doimiy xotira bilan jihozlangan bo‘lib, bu ilovalarning muammosiz ishlashini va saqlangan ma’lumotlarga tezkor kirishni ta’minlaydi. Asosiy modullarning o\'lchamlari o\'zgarishsiz qoldi va oldingi modellar tomonidan belgilangan barcha standartlarga javob beradi. Bu turli sharoitlarda foydalanilganda tasvir va videolarning yuqori sifatini saqlashni ta\'minlaydi.\r\nBatareya quvvati 4400 mA⋅ soatni tashkil etadi, bu o\'rtacha faollik bilan butun kun davomida tizimning to\'liq ishlashini ta\'minlash uchun yetarli.', 21949000, 2, 0, 0, '2025-10-23 10:17:26', NULL),
(2, 'Samsung Galaxy A06 4/128GB Light Blue', 'Dizayn \r\nМinimalistik va ergonomik dizayni uni kundalik foydalanish uchun juda qulay qiladi. Korpus mustahkam materiallardan tayyorlangan bo‘lib, nafaqat qo‘lda yaxshi seziladi, balki yuqori mustahkamlikka ega, bu esa gadjetning uzoq muddat xizmat qilishini taʼminlaydi. Yaxshi o‘ylangan shakl va optimal o‘lchamlari uni cho‘ntak yoki sumkaga osonlik bilan joylashtirish imkonini beradi, hech qanday noqulaylik tug‘dirmaydi.\r\n\r\nKamera Asosiy kamera ikki moduldan iborat: asosiy sensor 50 MP bo‘lib, yuqori sifatli tasvirlarni taqdim etadi va eng kichik detallariga ham yaxshi rang uzatishni taʼminlaydi. Qo‘shimcha 2 MP sensor suratlarni yaxshilashga yordam beradi, chuqurlik effektlarini qo‘shadi va fonni bulantirish effektini yaratadi, bu esa portret suratga olish uchun juda foydalidir. Kamera maksimal aniqlik va silliq kadr chastotasi bilan video yozish imkoniyatiga ega. Old kamera 8 MP aniqlikka ega bo‘lib, selfiye va video qo‘ng‘iroqlarni aniqlik bilan olish imkonini beradi.\r\n\r\nEkran \r\n6.7 dyuymli PLS LSD displeyi bilan taʼminlangan, bu yorqin va to‘yingan tasvirni kafolatlaydi. Tasvir aniqligi 1600x720 pikselni tashkil etadi, bu kontentni qulay ko‘rish uchun yetarli. Shuningdek, ekran keng ko‘rish burchaklariga ega bo‘lib, har qanday burchakdan qaraganda ham aniq tasvirni saqlaydi. Ko‘zlarni himoya qilish texnologiyasi uzoq vaqt ishlatish davomida ko‘zning charchashini kamaytiradi, bu esa gadjetlarni keng qo‘llash davrida juda muhimdir.\r\n\r\nIshlash \r\nSmartfon MediaTek Helio G85 chipida ishlaydi, bu chip sakkizta yadroga ega bo‘lib, taktlash chastotasi 2.0 GHz. Chipset tezkor javob va silliq ishlashni taʼminlaydi, shuningdek, bir vaqtning o‘zida bir nechta vazifalarni bajarishda ham yuqori samaradorlikni kafolatlaydi. Protsessor va tizimni optimizatsiya qilish zamonaviy ilovalar va ko‘ngilochar dasturlar bilan muammosiz ishlashni taʼminlaydi. Mali-G52 MP2 grafika protsessori tafsilotli grafikani va o‘yinlarda barqaror ishlashni taʼminlaydi, mobil ko‘ngilochar dasturlarni sevuvchilar uchun ajoyib tanlov. Ishchi xotira hajmi 4  GB bo‘lib, dasturlar o‘rtasida kechikmasdan almashtirishni kafolatlaydi. 128 GB ichki xotira ko‘p miqdordagi multimedia kontentini saqlash uchun yetarli, qo‘shimcha ilovalar uchun ham joy mavjud. Zarurat bo‘lsa, misroSD kartasi yordamida xotirani kengaytirish mumkin, bu esa turli ehtiyojlarga ega foydalanuvchilar uchun qo‘shimcha moslashuvchanlikni taʼminlaydi.', 1869000, 2, 0, 0, '2025-10-23 10:20:03', NULL),
(3, 'Xiaomi 15 12/512GB Black', 'Dizayn\r\nUshbu mobil qurilma zamonaviy uslub va qulay tuzilishni uyg‘unlashtirgan holda, kundalik foydalanish uchun qulay sharoit yaratadi. Qurilmaning 191 gramm og‘irligi uni cho‘ntak yoki sumkada sezilmas qiladi. Korpusi toblangan shishadan tayyorlangan bo‘lib, metall ramkasi qo‘shimcha mustahkamlik va shikastlanishdan himoyani ta’minlaydi. Yuqori sifatli materiallarning qo‘llanilishi uzoq vaqt davomida chidamlilikni va mukammal ko‘rinishni kafolatlaydi.\r\n\r\nMa’lumotlarni saqlash va tezkorlik\r\n512 GB hajmli o‘rnatilgan xotira katta hajmdagi ma’lumotlarni - fotosuratlar va videolardan tortib dasturlar va fayllargacha joylashtirish uchun yetarli joyni ta’minlaydi. 12 GB hajmli tezkor xotira kechikishlarsiz bir vazifadan boshqasiga bir zumda o‘tish imkonini beradi. Yuqori unumdorlik interfeysning ravon ishlashi, ko‘p vazifalilik va resurs talab qiladigan ilovalarni barqaror yuklab olish imkonini beradi.\r\n\r\nEkran\r\nCrystalRes AMOLED texnologiyasiga ega displey tasvirning aniqligi, to‘yinganligi va realligini kafolatlaydi. Diagonal 6.36 dyuym bo‘lib, 2670 × 1200 piksel aniqlik darajasi batafsil tasvirni kafolatlaydi. 3200 nit yorqinligi yorqin yorug‘likda ham ko‘rishni qulay qiladi. 460 PPI zichligi, 68 milliard rangni qo‘llab-quvvatlash va 1-120 Gs yangilanish chastotasi ishlash va dam olish uchun ideal sharoit yaratadi.\r\n\r\nFotosuratga olish imkoniyatlari\r\nKamera har biri 50 megapikselga ega bo‘lgan uchta modul bilan jihozlangan bo‘lib, portretdan tortib makrosyomkagacha har qanday rejimda batafsil suratlar olish imkonini beradi. Tasvirlarni intellektual qayta ishlash tizimi ranglarni aniq uzatish, yuqori aniqlik va yaxshilangan dinamik diapazonni ta’minlaydi. ƒ/2.0 diafragmali 32 megapiksellik old kamera sifatli selfilar va aniq video qo‘ng‘iroqlarni ta’minlaydi.', 12677000, 3, 0, 0, '2025-10-23 10:22:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int NOT NULL,
  `image` text,
  `product_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `verification_token` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', '9CPO_YX1qDeh6X6NTdDQn1RYT-FOFlfL', '$2y$13$oGUUKUxT4NBZomEfQ04UzOsq6QfDPA7PjbM9cmqfEBtXQRgLBObPW', NULL, 'mavzurovnurali@gmail.com', 10, 1761203800, 1761203800, 'E_nCVc8Y1KqCC5zlkVdl4fhmPwy1bUEm_1761203800');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

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
