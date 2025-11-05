-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Ноя 05 2025 г., 15:41
-- Версия сервера: 8.0.40
-- Версия PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1762257800),
('createProduct', '4', 1762266715),
('moderator', '2', 1762257800);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
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
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/admin/*', 2, NULL, NULL, NULL, 1762268251, 1762268251),
('/customer/index', 2, NULL, NULL, NULL, 1762268783, 1762268783),
('/product/*', 2, NULL, NULL, NULL, 1762266952, 1762266952),
('/product/create', 2, NULL, NULL, NULL, 1762266952, 1762266952),
('/product/delete', 2, NULL, NULL, NULL, 1762266952, 1762266952),
('/product/index', 2, NULL, NULL, NULL, 1762266952, 1762266952),
('/product/update', 2, NULL, NULL, NULL, 1762266952, 1762266952),
('/product/view', 2, NULL, NULL, NULL, 1762266952, 1762266952),
('admin', 1, NULL, NULL, NULL, 1762257800, 1762257800),
('createProduct', 2, 'Create a product', NULL, NULL, 1762257800, 1762257800),
('CustomerList', 2, NULL, NULL, NULL, 1762268824, 1762268824),
('moderator', 1, NULL, NULL, NULL, 1762257800, 1762257800),
('OtherProduct', 2, NULL, NULL, NULL, 1762267498, 1762267498),
('RBAC', 2, NULL, NULL, NULL, 1762268288, 1762268288),
('updateProduct', 2, 'Update product', NULL, NULL, 1762257800, 1762257800);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('RBAC', '/admin/*'),
('CustomerList', '/customer/index'),
('createProduct', '/product/create'),
('OtherProduct', '/product/index'),
('updateProduct', '/product/update'),
('OtherProduct', '/product/view'),
('admin', 'createProduct'),
('moderator', 'CustomerList'),
('admin', 'moderator'),
('moderator', 'OtherProduct'),
('admin', 'RBAC'),
('moderator', 'updateProduct');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `count` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `pid` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `order` int DEFAULT '0',
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `pid`, `name`, `order`, `img`) VALUES
(1, NULL, 'Smartfonlar', 0, 'uploads/category/633b5984f8af8c7e5a371e0b-na-i13-pro-max-cell-phones-6-3-inch-hd_K54wxE.jpg'),
(2, 1, 'Samsung', 0, 'uploads/category/samsung_PwmoYn.webp'),
(3, 1, 'Xiaomi', 0, 'uploads/category/xiaomi_sggHR4.webp'),
(4, 1, 'IPhone', 0, 'uploads/category/Iphone_PfexAN.webp'),
(5, NULL, 'Kompyuterlar', 0, 'uploads/category/laptopstopicpage-2048px-3685-2x1-1_QGCTZD.webp'),
(6, 5, 'Asus', 0, 'uploads/category/asus_aA1tqV.png'),
(7, 5, 'Mac', 0, 'uploads/category/macbook_y2ZsA9.jpg'),
(8, 5, 'Lenovo', 0, 'uploads/category/lenovo_cUrSyZ.jpg'),
(9, 5, 'Acer', 0, 'uploads/category/acer_MZ9vug.jpg'),
(10, NULL, 'Maishiy Texnika', 0, 'uploads/category/920__95_1776378711_HP3RdW.jpg'),
(11, 10, 'Changyutgich', 0, 'uploads/category/changyutgich_ZWHEOO.webp'),
(12, 10, 'Kir yuvish mashinasi', 0, 'uploads/category/kiryuvish_DCSNpa.webp'),
(13, 10, 'Dazmol', 0, 'uploads/category/dazmol_yd_bfY.jpg'),
(14, 10, 'Tikuv mashinasi', 0, 'uploads/category/tikuv_Ie9n6u.webp');

-- --------------------------------------------------------

--
-- Структура таблицы `customer`
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
-- Структура таблицы `menu`
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
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES
(1, 'Customer', NULL, '/customer/index', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1761198233),
('m130524_201442_init', 1762257637),
('m140506_102106_rbac_init', 1762257278),
('m140602_111327_create_menu_table', 1762266455),
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
('m251104_111145_init_rbac', 1762257800);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
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
-- Структура таблицы `order_item`
--

CREATE TABLE `order_item` (
  `id` int NOT NULL,
  `order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `count` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `partner`
--

CREATE TABLE `partner` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` text,
  `order` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `partner`
--

INSERT INTO `partner` (`id`, `name`, `img`, `order`) VALUES
(1, 'Hamkor1', 'http://localhost:8888/front/dist/images/brand/01.png', 0),
(2, 'Hamkor2', 'http://localhost:8888/front/dist/images/brand/02.png', 1),
(3, 'Hamkor3', 'http://localhost:8888/front/dist/images/brand/03.png', 0),
(4, 'Hamkor4', 'http://localhost:8888/front/dist/images/brand/04.png', 0),
(11, 'collabrate 3', 'uploads/partner/homiy_KrUjoT.png', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
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
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `category_id`, `status`, `order`, `created_at`, `updated_at`, `img`) VALUES
(1, 'Samsung Galaxy Z Fold6 5G 12/256GB Silver Shadow', '<p>Kuchli va almashtirib bo\'lmaydigan Qualcomm Snapdragon 8 Gen 3 protsessori, bir xil darajada kuchli Adreno 750 GPU bilan birgalikda tizimning yaxshilangan ishlashi va barqarorligini kafolatlaydi. Ushbu kombinatsiya multimedia vazifalari, o\'yinlar va yetarli quvvatni talab qiladigan foydalanuvchilarning kundalik echimlari uchun idealdir. Tashqi ko\'rinish haqiqatan ham ta\'sirli: asosiy keng formatli displeyga yuqori aniqlikdagi va mukammal rang xususiyatlariga ega qo\'shimcha tashqi ekran qo\'shildi. Ushbu yechim ko\'proq multi-touch imkoniyatlarini, yaxshilangan ilovalar tajribasini va foydalanish qulayligini ta\'minlaydi. Yangi ekran, shuningdek, old va asosiy funktsiyalarni bajaradigan qo\'shimcha kamera bilan jihozlangan. Ba\'zilar hayron bo\'lishlari mumkin: \"Nega kameralar juda ko\'p?\" Biroq, zamonaviy smartfonlar dunyosida kameralar asosiy rol o\'ynaydi va foydalanuvchilarga turli xil yorug\'lik sharoitlari va stsenariylarida yuqori sifatli fotosuratlar va videolarni yaratish imkoniyatini beradi. Bundan tashqari, yangi gadjet kengaytirilgan operativ va doimiy xotira bilan jihozlangan bo&lsquo;lib, bu ilovalarning muammosiz ishlashini va saqlangan ma&rsquo;lumotlarga tezkor kirishni ta&rsquo;minlaydi. Asosiy modullarning o\'lchamlari o\'zgarishsiz qoldi va oldingi modellar tomonidan belgilangan barcha standartlarga javob beradi. Bu turli sharoitlarda foydalanilganda tasvir va videolarning yuqori sifatini saqlashni ta\'minlaydi. Batareya quvvati 4400 mA&sdot; soatni tashkil etadi, bu o\'rtacha faollik bilan butun kun davomida tizimning to\'liq ishlashini ta\'minlash uchun yetarli.</p>', 21949000, 2, 0, 0, '2025-10-23 10:17:26', '2025-11-01 18:17:47', 'uploads/product/061d94a4-0c47-4b6a-ad80-ce6710efc284_G5C-cX.webp'),
(2, 'Samsung Galaxy A06 4/128GB Light Blue', '<p>Dizayn Мinimalistik va ergonomik dizayni uni kundalik foydalanish uchun juda qulay qiladi. Korpus mustahkam materiallardan tayyorlangan bo&lsquo;lib, nafaqat qo&lsquo;lda yaxshi seziladi, balki yuqori mustahkamlikka ega, bu esa gadjetning uzoq muddat xizmat qilishini taʼminlaydi. Yaxshi o&lsquo;ylangan shakl va optimal o&lsquo;lchamlari uni cho&lsquo;ntak yoki sumkaga osonlik bilan joylashtirish imkonini beradi, hech qanday noqulaylik tug&lsquo;dirmaydi. Kamera Asosiy kamera ikki moduldan iborat: asosiy sensor 50 MP bo&lsquo;lib, yuqori sifatli tasvirlarni taqdim etadi va eng kichik detallariga ham yaxshi rang uzatishni taʼminlaydi. Qo&lsquo;shimcha 2 MP sensor suratlarni yaxshilashga yordam beradi, chuqurlik effektlarini qo&lsquo;shadi va fonni bulantirish effektini yaratadi, bu esa portret suratga olish uchun juda foydalidir. Kamera maksimal aniqlik va silliq kadr chastotasi bilan video yozish imkoniyatiga ega. Old kamera 8 MP aniqlikka ega bo&lsquo;lib, selfiye va video qo&lsquo;ng&lsquo;iroqlarni aniqlik bilan olish imkonini beradi. Ekran 6.7 dyuymli PLS LSD displeyi bilan taʼminlangan, bu yorqin va to&lsquo;yingan tasvirni kafolatlaydi. Tasvir aniqligi 1600x720 pikselni tashkil etadi, bu kontentni qulay ko&lsquo;rish uchun yetarli. Shuningdek, ekran keng ko&lsquo;rish burchaklariga ega bo&lsquo;lib, har qanday burchakdan qaraganda ham aniq tasvirni saqlaydi. Ko&lsquo;zlarni himoya qilish texnologiyasi uzoq vaqt ishlatish davomida ko&lsquo;zning charchashini kamaytiradi, bu esa gadjetlarni keng qo&lsquo;llash davrida juda muhimdir. Ishlash Smartfon MediaTek Helio G85 chipida ishlaydi, bu chip sakkizta yadroga ega bo&lsquo;lib, taktlash chastotasi 2.0 GHz. Chipset tezkor javob va silliq ishlashni taʼminlaydi, shuningdek, bir vaqtning o&lsquo;zida bir nechta vazifalarni bajarishda ham yuqori samaradorlikni kafolatlaydi. Protsessor va tizimni optimizatsiya qilish zamonaviy ilovalar va ko&lsquo;ngilochar dasturlar bilan muammosiz ishlashni taʼminlaydi. Mali-G52 MP2 grafika protsessori tafsilotli grafikani va o&lsquo;yinlarda barqaror ishlashni taʼminlaydi, mobil ko&lsquo;ngilochar dasturlarni sevuvchilar uchun ajoyib tanlov. Ishchi xotira hajmi 4 GB bo&lsquo;lib, dasturlar o&lsquo;rtasida kechikmasdan almashtirishni kafolatlaydi. 128 GB ichki xotira ko&lsquo;p miqdordagi multimedia kontentini saqlash uchun yetarli, qo&lsquo;shimcha ilovalar uchun ham joy mavjud. Zarurat bo&lsquo;lsa, misroSD kartasi yordamida xotirani kengaytirish mumkin, bu esa turli ehtiyojlarga ega foydalanuvchilar uchun qo&lsquo;shimcha moslashuvchanlikni taʼminlaydi.</p>', 1869000, 2, 0, 0, '2025-10-23 10:20:03', '2025-11-01 18:19:39', 'uploads/product/6a38a980-f655-4377-890d-5522214f28a3_khVieX.webp'),
(3, 'Xiaomi 15 12/512GB Black', '<p>Dizayn Ushbu mobil qurilma zamonaviy uslub va qulay tuzilishni uyg&lsquo;unlashtirgan holda, kundalik foydalanish uchun qulay sharoit yaratadi. Qurilmaning 191 gramm og&lsquo;irligi uni cho&lsquo;ntak yoki sumkada sezilmas qiladi. Korpusi toblangan shishadan tayyorlangan bo&lsquo;lib, metall ramkasi qo&lsquo;shimcha mustahkamlik va shikastlanishdan himoyani ta&rsquo;minlaydi. Yuqori sifatli materiallarning qo&lsquo;llanilishi uzoq vaqt davomida chidamlilikni va mukammal ko&lsquo;rinishni kafolatlaydi. Ma&rsquo;lumotlarni saqlash va tezkorlik 512 GB hajmli o&lsquo;rnatilgan xotira katta hajmdagi ma&rsquo;lumotlarni - fotosuratlar va videolardan tortib dasturlar va fayllargacha joylashtirish uchun yetarli joyni ta&rsquo;minlaydi. 12 GB hajmli tezkor xotira kechikishlarsiz bir vazifadan boshqasiga bir zumda o&lsquo;tish imkonini beradi. Yuqori unumdorlik interfeysning ravon ishlashi, ko&lsquo;p vazifalilik va resurs talab qiladigan ilovalarni barqaror yuklab olish imkonini beradi. Ekran CrystalRes AMOLED texnologiyasiga ega displey tasvirning aniqligi, to&lsquo;yinganligi va realligini kafolatlaydi. Diagonal 6.36 dyuym bo&lsquo;lib, 2670 &times; 1200 piksel aniqlik darajasi batafsil tasvirni kafolatlaydi. 3200 nit yorqinligi yorqin yorug&lsquo;likda ham ko&lsquo;rishni qulay qiladi. 460 PPI zichligi, 68 milliard rangni qo&lsquo;llab-quvvatlash va 1-120 Gs yangilanish chastotasi ishlash va dam olish uchun ideal sharoit yaratadi. Fotosuratga olish imkoniyatlari Kamera har biri 50 megapikselga ega bo&lsquo;lgan uchta modul bilan jihozlangan bo&lsquo;lib, portretdan tortib makrosyomkagacha har qanday rejimda batafsil suratlar olish imkonini beradi. Tasvirlarni intellektual qayta ishlash tizimi ranglarni aniq uzatish, yuqori aniqlik va yaxshilangan dinamik diapazonni ta&rsquo;minlaydi. &fnof;/2.0 diafragmali 32 megapiksellik old kamera sifatli selfilar va aniq video qo&lsquo;ng&lsquo;iroqlarni ta&rsquo;minlaydi.</p>', 12677000, 3, 0, 0, '2025-10-23 10:22:25', '2025-11-01 18:20:43', 'uploads/product/c1fed1d5-e4a5-4167-a4b9-32f373193f4c_58PWJZ.webp'),
(4, 'ASUS Vivobook 15 X1504VA-BQ322 Noutbuki', '<p>ASUS Vivobook 15 - bu yetakchi yuqori texnologiya ishlab chiqaruvchilaridan birining zamonaviy, shinam va ko&lsquo;p qirrali noutbukidir. Ushbu model innovatsion texnik ta&rsquo;minot, ergonomik dizayn va yuqori unumdorlikning uyg&lsquo;un uyg&lsquo;unligini o&lsquo;zida mujassam etgan. Akkumulyator bilan birgalikda umumiy og&lsquo;irligi 1,7 kg ni tashkil etadi, bu esa uni sumka yoki ryukzakda oson olib yurishga imkon beradi. Korpus tirnalishlar va mexanik shikastlanishlarga chidamli bo&lsquo;lgan mustahkam plastikdan tayyorlangan. Klaviatura tugmalarining qulay joylashuvi mavjud. Bundan tashqari, u imo-ishoralarni qo&lsquo;llab-quvvatlaydigan va tizim bilan o&lsquo;zaro aloqani osonlashtiradigan to&lsquo;liq tachpad bilan jihozlangan. Displey Uning asosiy xususiyatlaridan biri 1920&times;1080 piksel (Full HD) o&lsquo;lchamli katta 15.6 dyuymli displeydir. Bunday ekran tasvirning tiniqligini va yuqori aniqligini ta&rsquo;minlab, qurilmani filmlar tomosha qilish, matnlar bilan ishlash, ofis dasturlari va internetda ishlash uchun ajoyib tanlovga aylantiradi. IPS matritsasi ekran qiya holatda bo&lsquo;lganda ham tasvir sifatini saqlab qolib, to&lsquo;yingan ranglar va keng ko&lsquo;rish burchaklarini kafolatlaydi. 60 Gts yangilanish tezligi ravon tasvirni ta&rsquo;minlaydi.</p>', 7190000, 6, 0, 0, '2025-10-28 11:21:36', '2025-11-01 18:22:33', 'uploads/product/6e2739fe-88f0-4c44-91a2-a6bccf653898_St4cum.webp'),
(5, 'ASUS Vivobook Go E1504FA-BQ091 R3-7320U/8/256GB Noutbuki', '<p>ASUS Vivobook Go E1504FA-BQ091 &mdash; o&lsquo;qish, ofis jarayonlari va kundalik foydalanish uchun qulay portativ kompyuter. Qurilma og&lsquo;irligi atigi 1.63 kg, bu modelni tashishda juda yengil qiladi. Korpus mustahkam plastikdan yasalgan bo&lsquo;lib, qattiq qora rangda ishlab chiqilgan. Apparat oldindan o&lsquo;rnatilgan tizimsiz (No OS) taqdim etiladi, egasi esa kerakli platformani o&lsquo;zi belgilaydi. Mustahkam Li-Ion akkumulyator sig&lsquo;imi 45 Vt&middot;soat, uzoq muddat davomida ishlash imkonini beradi. 15.6 dyuym ekran IPS-matritsa asosida qurilgan bo&lsquo;lib, 1920x1080 aniqlik va 60 Gts chastotani qo&lsquo;llab-quvvatlaydi. Bunday konfiguratsiya tiniq tasvir, yorqin rang va keng ko&lsquo;rish burchagini kafolatlaydi. Onlayn muloqot uchun dinamiklar, mikrofon va veb-kamera mavjud bo&lsquo;lib, ular suhbat jarayonini qulay qiladi. Markazda AMD Ryzen 3 7320U protsessori ishlaydi, u 2.4 GGs tezlikda funksiyalashadi va 4.1 GGs gacha tezlashishi mumkin. To&lsquo;rt yadro va sakkiz oqim ofis dasturlarini hamda multimedia ilovalarini samarali bajaradi. Grafik imkoniyatlar uchun integratsiyalashgan AMD Radeon javobgar bo&lsquo;lib, video, rasm va oddiy o&lsquo;yinlar bilan ishlash imkonini beradi.</p>', 6889000, 6, 0, 0, '2025-10-28 11:22:52', '2025-11-01 19:42:20', 'uploads/product/6e2739fe-88f0-4c44-91a2-a6bccf653898_qTqYMF.webp'),
(6, 'ASUS Vivobook Go 15 E1504FA-BQ210 Noutbuki', '<p>ASUS Vivobook Go 15 E1504FA-BQ210 unumdorlik va portativlikning ajoyib kombinatsiyasi. Uning 1920x1080 pikselli va 16:9 nisbatdagi 15,6 dyuymli Full HD ekrani IPS texnologiyasi va &ldquo;блик&rdquo;larni kamaytiradigan va uzoq ish vaqtida qulaylikni oshiradigan mat qoplama tufayli aniq va yorqin tasvirlarni beradi. 250 nits ekran yorqinligi uni bino ichida ham, tashqarisida ham foydalanish uchun qulay qiladi. Ushbu noutbuk kuchli to&lsquo;rt yadroli AMD Ryzen 3 7320U protsessori bilan ta&rsquo;minlangan bo&lsquo;lib, 2,4 GGts li asosiy chastota va 4 MB keshga ega bo&lsquo;lib, yuqori unumli ko&lsquo;p vazifalarni bajarishni ta&rsquo;minlaydi. 5500 MGts chastotali 8 GB DDR5 operativ xotira ilovalar va ko\'p vazifali vazifalar bilan tez va samarali ishlash imkonini beradi. O\'rnatilgan AMD Radeon Graphics multimedia vazifalari va kundalik ilovalar uchun yaxshi tasvir sifatini ta\'minlaydi. Ma\'lumotlarni saqlash uchun tez va keng 512 Gb SSD taqdim etiladi, bu tizim va ilovalarning chaqmoq tezligida yuklanishini ta\'minlaydi.</p>', 6990000, 6, 0, 0, '2025-10-28 11:23:42', '2025-11-01 18:28:09', 'uploads/product/d9786fc5-ae1b-4147-893f-7826673754fd_bgT3AK.webp'),
(7, 'Lenovo IdeaPad Slim 3 15IRH10 83K1002VRK Noutbuki', '<p>Lenovo IdeaPad Slim 3 15IRH10 &ndash; qulaylik, mobillik va ishonchlilikni qadrlaydiganlar uchun amaliy va funksional tanlov. Noutbuk atigi 1,63 kg vaznga ega, shu bois uni doimiy ravishda sumka yoki ryukzakda olib yurish oson. Sodda kulrang korpus va mustahkam plastmassa zamonaviy uslubni taʼkidlaydi. Ekran 180 &deg; ga ochiladi, bu esa jamoaviy ishda ham, jamoat joylarida kontent ko&lsquo;rishda ham ekran burchagini erkin sozlash imkonini beradi. Ingichka ramkalar qurilmaning o&lsquo;lchamlarini vizual ravishda kichraytirib, dizaynga nafislik qo&lsquo;shadi. Markazida &ndash; energiya tejamkor Intel Core i5-13420H protsessori: 8 yadro va 12 oqim, chastotasi 4,6 GHz gacha ko&lsquo;tariladi. Bu nafaqat jadvallar bilan ishlash, balki onlayn-konferensiya va oddiy videomontaj uchun ham yetarli quvvatni taʼminlaydi. 8 GB LPDDR5 tezkor xotira bir vaqtning o&lsquo;zida ko&lsquo;plab ilovalar ochilganda ham barqaror ishni kafolatlaydi. 512 GB M.2 NVMe SSD esa tizim va dasturlarni chaqmoqdek tez yuklaydi. 15,3 dyuymli IPS-ekran 1920&times;1080 aniqlikda ravshan tasvir, to&lsquo;g&lsquo;ri rang yetkazish va keng ko&lsquo;rish burchaklarini beradi. Mat sirt yorqin yoritishda ham aksni kamaytiradi. 60 Hz yangilanish chastotasi kundalik vazifalar va film tomosha qilish uchun optimal. Ekran ustida HD-kamera joylashgan bo&lsquo;lib, maxfiylik uchun fizik pardaga ega; mikrofon esa shovqinni bostirish tizimi bilan aniq ovoz uzatadi. Simsiz ulanish uchun Wi-Fi va Bluetooth 5.2 modullari mavjud: internetga ulanib, smartfon yoki garnitura bilan tez sinxronlashish mumkin. Portlar to&lsquo;plami: USB-C, ikki USB-A, to&lsquo;liq HDMI, naushnik uchun kombinatsiyalangan razʼyom va microSD kart o&lsquo;quvchi. Ethernet yo&lsquo;qligi korpusni yanada ingichka &ndash; atigi 18 mm &ndash; qilishga yordam bergan. 60 Vt&middot;soat sig&lsquo;imli batareya ssenariyga qarab 10 soatgacha avtonom ish beradi, 65 Vt quvvatga ega ixcham zaryadlovchi esa USB-C orqali tez zaryadlaydi. IdeaPad Slim 3 15IRH10 talaba, mutaxassis va portativlik hamda unumdorlik o&lsquo;rtasidagi muvozanatni izlayotganlar uchun ishonchli tanlovdir. Ofis, o&lsquo;qish, ijod va hordiq uchun mos. Oldindan o&lsquo;rnatilgan dasturiy taʼminot bo&lsquo;lmaganligi foydalanuvchiga kerakli operatsion tizimni mustaqil tanlash imkonini beradi. Noutbuk ko&lsquo;p vazifani bemalol bajaradi, shu bilan birga engil va sokin ishlaydi. Ish joyida ham, safarda ham birdek foydali bo&lsquo;la oladigan, zamonaviy texnologiyalar va qulaylikni birlashtirgan model.</p>', 7990000, 8, 0, 0, '2025-10-28 11:25:39', '2025-11-01 18:31:18', 'uploads/product/59c41a20-ec33-4df9-9adc-9d9247f504db_p44sc-.webp'),
(8, 'Lenovo IdeaPad Slim 3 15IRH10 83K10032RK i7-13620H/16/512GB Noutbuki', '<p>Lenovo IdeaPad Slim 3 15IRH10 (83K10032RK) &mdash; ko&lsquo;p vazifali zamonaviy noutbuk bo&lsquo;lib, u Intel Core i7-13620H protsessori asosida yaratilgan. Unda 10 ta yadro va 16 ta oqim mavjud bo&lsquo;lib, 4.9 GHz gacha bo&lsquo;lgan chastota murakkab jarayonlarni tez bajarish imkonini beradi. 16 GB operativ xotira bir vaqtning o&lsquo;zida bir nechta dasturlar bilan erkin ishlashni ta&rsquo;minlaydi. 15.3 dyuym ekran IPS texnologiyasi asosida ishlab chiqilgan bo&lsquo;lib, real tasvir va keng ko&lsquo;rish burchaklarini beradi. 1920&times;1200 piksel ekran vertikal kenglikni oshiradi va matn yoki jadval bilan ishlashda qulaylik yaratadi. 60 Hz yangilanish tezligi interfeyslar bilan bir tekis ishlashni ta&rsquo;minlaydi. Antiblik qoplama yorug&lsquo; muhitda ekranni qulay ko&lsquo;rish imkonini beradi. Grafik funksiyalar Intel UHD orqali amalga oshiriladi. Bu video ko&lsquo;rish, onlayn darslar va yengil vizual topshiriqlar uchun yetarli. 512 GB SSD tezkor ma&rsquo;lumot almashish va dasturlarni qisqa vaqtda ishga tushirish imkonini beradi. Operatsion tizim oldindan o&lsquo;rnatilmagan &mdash; foydalanuvchi o&lsquo;zi tanlaydi.</p>', 9900000, 8, 0, 0, '2025-10-28 11:26:53', '2025-11-01 18:33:17', 'uploads/product/e5185395-0844-4e12-b5d0-2313ac61925d_YaAC9a.webp'),
(9, 'Lenovo IdeaPad 1 15IJL7 82LX00G9RK N4500/8/512GB Noutbuki', '<p>Lenovo IdeaPad 1 15IJL7 &mdash; talabalar, o&lsquo;quvchilar va ofis xodimlari uchun qulay mobil kompyuter. Vazni atigi 1.55 kg, shu sababli uni sumkada yoki ryukzakda olib yurish oson. Kulrang korpus zamonaviy ko&lsquo;rinishga ega, oldindan o&lsquo;rnatilgan tizim (No OS) yo&lsquo;qligi esa foydalanuvchiga dasturiy platformani mustaqil tanlash imkonini beradi. 42 Vt&middot;soat sig&lsquo;imli akkumulyator uzoq ishlash muddatini ta&rsquo;minlaydi, safarda foydalanish uchun qulaylik yaratadi. 15.6 dyuym ekran TN-matritsa asosida yaratilgan va 1920x1080 piksel aniqlikni qo&lsquo;llab-quvvatlaydi. Bunday konfiguratsiya aniq va yorqin tasvir beradi, filmlar, matnlar hamda veb-saytlar bilan ishlash uchun yetarli. 60 Gts chastota qurilmadan ta&rsquo;lim, onlayn uchrashuv yoki muloqot jarayonida bemalol foydalanish imkonini beradi. Monitor hujjatlar, jadvallar va taqdimotlarni ko&lsquo;rish uchun ham mos keladi.</p>', 3990000, 8, 0, 0, '2025-10-28 11:28:04', '2025-11-01 18:34:37', 'uploads/product/1ae5ef6a-9936-45b5-bca4-ed373edec4fa_l1NVsp.webp'),
(10, 'Acer Aspire 3 NX.K6WER.001 Noutbuki', '<p>Brend Acer Klaviaturani yorug\'ligi Мavjud emas Optik qurilma Мavjud emas Korpus materiali</p>', 5880000, 9, 0, 0, '2025-10-28 11:29:42', '2025-11-01 18:36:21', 'uploads/product/ca126f6b-66ed-4bba-a842-8c47816047b0_PXwGxQ.jpg'),
(11, 'Acer SF314-511 NX.ABLER.003 Noutbuki', '<p>Jiddiy ish uchun yangi dizayn va unumdorlikka ega klassik noutbuklar. Jiddiy sifat nazoratidan o&lsquo;tgan ixcham korpusdagi eng zamonaviy texnologiya. Og&lsquo;irligi atigi 1,2 kg bo&lsquo;lgan Acer noutbugi taʼsirchan va ko&lsquo;zni qamashtiradi. Amaliy va murakkab uslub 11-avlod Intel&reg; Core&trade; protsessori va NVIDIA&reg; GeForce&reg; diskret grafikasi kabi ilg&lsquo;or komponentlar bilan birlashtirilgan. Bundan tashqari, ushbu qurilma Intel&reg; Evo&trade; platformasiga mos keladi. Lakonik va minimalistik elementlarga ega engil dizayn. SNS uskunada ishlangan olmos organikli 3K uglerod tolali paneli. 14 dyuymli Full HD IPS displey yuqori quvvatli Sorning&reg; Gorilla&reg; Glass sensorli ekraniga ega.</p>', 8990000, 9, 0, 0, '2025-10-28 11:30:40', '2025-11-01 18:37:52', 'uploads/product/20dd0155-04c8-478e-80da-02cc431d9234_RrgNKU.jpg'),
(12, 'Noutbuk Acer Aspire 3 NX.KDHER.004', '<p>Murakkab Intel Core N-seriyali protsessorlari va integratsiyalangan UHD grafikalariga ega Aspire 3 noutbuklari har bir darajadagi ajoyib unumdorlikni taʼminlab, ularni ish, oʻrganish va oʻyin uchun ideal qiladi. Foydalanishga tayyor ushbu qurilmalar o&lsquo;zining ko&lsquo;p qirraliligi va samaradorligi bilan ajralib turadi va faoliyatingizning turli sohalarida keng imkoniyatlarni ochib beradi. Sovutish kuleri 78% gacha oshirish orqali biz sovutish tizimini yaxshiladik va issiqlik uzatishni 17% ga oshirdik. Ushbu texnologik yutuq elektr tarmog\'iga doimiy ulanmasdan uzoq vaqt davomida qurilmaning ishonchli ishlashini ta\'minlaydi. Full HD piksellar soniga ega ekran yuqori sifatli va batafsil tasvirlarni taqdim etuvchi veb-sahifalar, media-kontent va onlayn translyatsiyalarni ko\'rish uchun ideal tanlovdir. Acer BlueLightShieldTM texnologiyasi zararli nurlanish ta\'sirini faol ravishda kamaytiradi, foydalanuvchi va ularning yaqinlarining ko\'rish qobiliyatini himoya qiladi.</p>', 5820000, 9, 0, 0, '2025-10-28 11:31:33', '2025-11-01 18:44:02', 'uploads/product/1_--7uLG.webp'),
(13, 'LG VK69662N Changyutgichi', '<p>Idishli changyutgich - uy bekalarni orzusi. Chang qoplarga yo&lsquo;q. Ixcham o&lsquo;lchami va energiya tejovchi motor uy tozalashni zavqlantiradi. TEXNOMART kompaniyasining LG VK69662N changyutgichi yuqori quvvat va ixcham korpusi tufayli kundalik tozalash uchun mukammal qurilma. Yuqori samarali nozuli bilan birgalikda ilg&lsquo;or siklon texnologiyasi changni mukammal yig&lsquo;adi va maksimal havo filtratsiyasini taʼminlaydi. Past shovqin darajasi chaqaloqning shirin uyqusini buzmaydi. Ixcham o&lsquo;lchamlari va ajoyib dizayni tufayli changyutgichni saqlash va ishlatish oson. Elastik quvvat simini oson yig&lsquo;iladi. Aksessuarlar va almashtirish filtri mavjud.</p>', 1299000, 11, 0, 0, '2025-10-28 11:32:32', '2025-11-01 18:45:26', 'uploads/product/11_0Uv-3w.webp'),
(14, 'LG VC83209UHAV Changyutgichi', '<p>Maishiy ehtiyojlar uchun mukammal bo&lsquo;lgan zamonaviy va kuchli changyutgich maishiy texnika ishlab chiqarish bo&lsquo;yicha yetakchi kompaniyalardan biri - LG tomonidan ishlab chiqarilgan. Ushbu apparat yuqori unumdorlik va ilg&lsquo;or texnologiyalarni o&lsquo;zida mujassamlashtirgan bo&lsquo;lib, uni tartib o&lsquo;rnatishda beqiyos yordamchiga aylantiradi. 420 Vt quvvatli so&lsquo;rish qobiliyati tufayli u uyingizni ozoda holda qoldirib, har qanday axlatdan osongina xalos etadi. Asosiy xarakteristika 1,2 litr hajmli konteynerli chang ushlagich turi hisoblanadi. Bu shuni anglatadiki, chang qoplarini doimiy ravishda almashtirish shart emas - tozalashdan keyin konteynerni bo&lsquo;shatish kifoya. Qo&lsquo;shimcha afzallik shundaki, konteyner ichida presslash funksiyasi mavjud bo&lsquo;lib, bu tozalash jarayonini yanada qulay va gigiyenik qilib beradi. Changyutgichning filtrlash tizimiga alohida e&rsquo;tibor qaratish lozim. 14-sinfdagi noyob HEPA-filtr havoni eng mayda zarralar va allergenlardan tozalash imkonini beradi, bu ayniqsa changga allergiyasi yoki sezgirligi bor insonlar uchun muhimdir. Shu tufayli xona tozalangandan so&lsquo;ng tozalik saqlanib qoladi. Shovqin darajasi 77 dB dan oshmagani sababli, bu qurilmani shovqinsiz moslamalar qatoriga kiritish mumkin. Bundan tashqari, u uzunligi bo&lsquo;yicha oson sozlanadigan surilma naycha bilan jihozlangan bo&lsquo;lib, eng qiyin joylardagi changni ham osonlik bilan yig&lsquo;ishtirish imkonini beradi.</p>', 2691000, 11, 0, 0, '2025-10-28 11:33:39', '2025-11-01 18:46:57', 'uploads/product/21_Sbj20H.webp'),
(15, 'Philips FC9573/01 Changyutgichi', '<p>Philips FC9573/01 - bu uyda tartibni samarali saqlash uchun yaratilgan ishonchli maishiy uskuna. U o&lsquo;zida yuqori mahsuldorlik, puxta o&lsquo;ylangan konstruksiya va universal funksionalni mujassamlashtiradi. Zamonaviy texnologiyalar tufayli u har xil turdagi ifloslanishlarni yengib, xonada tozalikni ta&rsquo;minlaydi. Samaradorlik va yuqori unumdorlik 1900 Vt quvvatli dvigatel bilan jihozlangan, u 400 Vt intensiv so&lsquo;rilishini kafolatlaydi va hatto eng kichik zarrachalarni ham yig&lsquo;ishga imkon beradi. Bunday salohiyat uni uy hayvonlari egalari va allergiyaga chalingan odamlar uchun ajoyib yechimga aylantiradi. 1,5 litr sig&lsquo;imli konteyner yetarli miqdorda changni sig&lsquo;dira oladi, bu esa tez-tez tozalash zaruratini kamaytiradi. Qulay bo&lsquo;shab qolish tizimi tufayli, chang bulutlarini hosil qilmasdan, bir harakat bilan tarkib yo&lsquo;qotiladi.</p>', 2599000, 11, 0, 0, '2025-10-28 11:34:30', '2025-11-01 18:48:57', 'uploads/product/31_IsFomF.webp'),
(16, 'LG VK89609HQ Changyutgichi', '<p><strong>LG VK89609HQ changyutgichi - bu ilg&lsquo;or yuqori unumdorlikning kombinatsiyasi. Qurilma xona tozaligini ta&rsquo;minlab, iflosliklarni yo&lsquo;qotish uchun mo&lsquo;ljallangan. U kuchli dvigatel, zamonaviy filtratsiya va qulay nasadkalar bilan jihozlangan bo&lsquo;lib, tozalash jarayonini sezilarli darajada soddalashtiradi.</strong> Samaradorlik Ushbu model 2000 Vt energiya iste&rsquo;mol qiladigan va 420 Vt so&lsquo;rish kuchiga ega dvigatel bilan jihozlangan. Bu turli xil axlatlar, jumladan, hayvonlarning juni va changini osonlik bilan tozalash imkonini beradi. 4,8 litr sig&lsquo;imli rezervuar tozalash chastotasini qisqartiradi va foydalanish jarayonini yanada qulaylashtiradi. Noyob presslash tizimi O&lsquo;rnatilgan changni avtomatik zichlash texnologiyasi yig&lsquo;ilgan zarrachalarni ixcham saqlashga yordam beradi, bu esa chiqindilar bilan kontaktni minimallashtiradi. Bu allergenlarning tarqalish xavfini sezilarli darajada kamaytiradi va konteynerni tozalashni osonlashtiradi.</p>', 1999000, 11, 0, 0, '2025-10-28 11:35:31', '2025-11-01 18:51:07', 'uploads/product/41_yeejgr.webp'),
(17, 'LG F2J3NS0W Kir yuvish mashinasi', '<p>LG F2J3NS0W avtomatik kir yuvish mashinasining sifati bizni hayratda qoldiradi. Yangi gipoallergen Steam texnologiyasi bolalar kiyimlarini yuvish va parvarish qilish, paxta + bug`lash va nozik terilarning kiyimini yuvish uchun ishlab chiqilgan. Mashinaning baki intensiv va nozik yuvish kabi maxsus funksiyalarga ega. Intensiv yuvish bu kiyimlarni tekislash, chayqatish va tebranish funksiyalari. Nozik yuvishda barabanning asosiy aylanishi, burilishi va teskari aylanishi sodir bo&lsquo;ladi. Shovqin darajasi past bo&lsquo;lgani uchun uxlayotgan bolani uyg&lsquo;otmaydi. Katta va sig&lsquo;imli bak bir vaqtning o&lsquo;zida katta miqdordagi kirlarni yuvadi. Mashinaning o&lsquo;zi kiyimlarni ivitadi, yuvadi, chayadi, siqadi va quritadi. Kir yuvish uchun optimal suv isteʼmoli kiyim matosiga zarar yetkazmaydi. Foydalanuvchi uchun juda qulay raqamli displey. Inverter Direct Drive dvigateli to&lsquo;g&lsquo;ridan-to&lsquo;g&lsquo;ri haydovchi tizimiga ega, bu esa mashinaning yuqori ishonchligini va chidamliligini taʼminlaydi. Mustaqil o&lsquo;rnatiladigan texnikada bolalar himoyasi mavjud. Taymer avtomatik ravishda kir yuvish tugaganligi haqida xabar beradi.</p>', 4879000, 12, 0, 0, '2025-10-28 11:36:38', '2025-11-01 18:57:42', 'uploads/product/51_mHTSdu.webp'),
(18, 'LG F2T9GW9P Kir yuvish mashinasi', '<p>LG F2T9GW9P aqlli kir yuvish mashinasi mato turini aniqlash uchun AI DD tizimiga ega. TurboWash&trade;360 - bu bir necha daqiqada tezroq aylanib to&rsquo;liq yuvadi. Steam+&trade; texnologiyasi yordamida g&lsquo;ijimlarni tekislab va allergenlardan himoya qiling. Bakteriyalar va viruslarni yo&lsquo;q qiladi. Shovqin darajasi past bo&lsquo;lgani uchun uxlayotgan bolani uyg&lsquo;otmaydi. Katta va sig&lsquo;imli bak bir vaqtning o&lsquo;zida katta miqdordagi kirlarni yuvadi. Mashinaning o&lsquo;zi kiyimlarni ivitadi, yuvadi, chayadi, siqadi va quritadi. Kir yuvish uchun optimal suv isteʼmoli kiyim matosiga zarar yetkazmaydi. Foydalanuvchi uchun juda qulay sensorli raqamli displey. \"Кiyim qo&lsquo;shish\" noyob funksiyasi, hatto kir yuvish boshlanganidan keyin ham unutilgan narsalarni qo&lsquo;shish va yuvilgan kiyimlarni olish imkonini beradi. AquaProtect maxsus texnologiyasi mashinadan suv oshiqib ketishidan himoya qiladi. Invertor motoriga 20 yil kafolat beriladi. LG ThinQ texnologiyasi yordamida kir yuvish mashinangizni smartfoningiz yordamida boshqarishingiz mumkin. Suv va elektr isteʼmolini kuzatib boring. Mustaqil o&lsquo;rnatiladigan texnikada bolalar himoyasi mavjud. Taymer avtomatik ravishda kir yuvish tugaganligi haqida xabar beradi. &ldquo;Texnomart&rdquo; turli mahsulotlar uchun katta chegirma va aksiyalar taqdim etadi. Bizni ijtimoiy tarmoqlarda kuzatib boring!</p>', 7990000, 12, 0, 0, '2025-10-28 11:37:19', '2025-11-01 18:59:12', 'uploads/product/60_zfobfx.webp'),
(19, 'Kir yuvish mashinasi Hansa WHN6100D2BSW', '<p>Hansa VHN6100D2BSV kir yuvish mashinasi ixcham, ammo keng yechim bo\'lib, hatto cheklangan joyda ham o&lsquo;z o&lsquo;rinni osongina topa oladi. Oldindan yuklash hajmi 6 kg, uni kundalik foydalanish uchun ideal qiladi va uning 85x60x40 sm o&lsquo;lchamlari uni uyning istalgan qulay burchagiga, xoh u hammom yoki oshxonaga qulay o&lsquo;rnatishga imkon beradi. Samarali yigiruv va keng ko&lsquo;lamli dasturlar 1000 rpm aylanish tezligi kiringizning nafaqat toza, balki amalda quruq bo&lsquo;lishini taʼminlaydi va uni qo&lsquo;shimcha quritish uchun ketadigan vaqtni kamaytiradi. 16 xil yuvish dasturlari tufayli ushbu model eng nozik materiallardan tortib eng bardoshli materiallargacha bo&lsquo;lgan har qanday turdagi matolarga ehtiyotkorlik bilan g&lsquo;amxo&lsquo;rlik qila oladi. Har bir dastur minimal vaqt va kuch bilan maksimal samaradorlikni taʼminlash uchun ehtiyotkorlik bilan o&lsquo;ylangan.</p>', 6199000, 12, 0, 0, '2025-10-28 11:38:05', '2025-11-01 19:00:49', 'uploads/product/71_fAb3lC.jpg'),
(20, 'Tefal FV1713E0 Dazmol', '<p>Tefal FV1713E0 - bu kiyim va to&lsquo;qimachilik mahsulotlarini parvarish qilish sohasidagi eng talabchan foydalanuvchilarning ehtiyojlarini qondira oladigan universal qurilma. Zamonaviy dizayn, yuqori texnologik yechimlar va puxta o&lsquo;ylangan funksionallik ushbu qurilmani kundalik hayotda ajralmas yordamchiga aylantiradi. 2000 Vt quvvat tufayli dazmol tez qiziydi, bu dazmollash jarayonini bir necha daqiqada boshlash va hatto katta hajmdagi mato bilan ishlaganda ham vaqtni sezilarli darajada tejash imkonini beradi. Yuqori ish samaradorligiga innovatsion funksiyalarni birlashtirish orqali erishiladi: 85 g/min gacha bug&lsquo; uzatish bilan bug&lsquo; zarbasi va 24 g/min doimiy bug&lsquo; uzatish eng chidamli burmalarni ham tez va sifatli olib tashlashga yordam beradi, namlikning mato tuzilishiga chuqur kirib borishini va har qanday materialni ehtiyotkorlik bilan ishlatishni ta&rsquo;minlaydi.</p>', 508000, 13, 0, 0, '2025-10-28 11:39:08', '2025-11-01 19:02:44', 'uploads/product/81_i2CbqV.webp'),
(21, 'Dazmol Tefal FV9865E0', '<p>Tefal FV9865E0 quvvat va samaradorlikni o&lsquo;zida mujassam etgan bo&lsquo;lib, dazmollashni tez va qulay qiladi. Ajoyib 3000 Vt quvvat tufayli qurilma kerakli haroratga tez erishadi va hatto chuqur burmalar va qattiq matolarni ham samarali yengadi. Taglik metallokeramikadan tayyorlangan bo&lsquo;lib, u issiqlikni bir tekis taqsimlaydi, silliq sirpanishni ta&rsquo;minlaydi va matoga yopishib qolishining oldini oladi. Vertikal bug&lsquo;latish 260 g/min gacha bug&lsquo; urish bilan kiyimni osgichning o&lsquo;zida, pardalar va ustki kiyimlarni yechmasdan osonlik bilan yangilash imkonini beradi. FV9865E0 dan foydalanish qulayligi 350 ml hajmli katta suv idishi bilan ta&rsquo;minlanadi, bu uni kamroq to&lsquo;ldirish va uzoqroq vaqt davomida uzluksiz dazmollash imkonini beradi. 60 g/min gacha bo&lsquo;lgan bug&lsquo;ni doimiy ravishda yetkazib berish funksiyasi har qanday to&lsquo;qimalarni, hatto ko&lsquo;p qatlamli to&lsquo;qimalarni ham tekislashni kafolatlaydi. Uzunligi 2,5 metr bo&lsquo;lgan shnur harakatni cheklamasdan va qo&lsquo;shimcha uzaytirgichlarni talab qilmasdan qulay ishlashni ta&rsquo;minlaydi. Tomchilarga qarshi tizim past haroratda dazmollash paytida matolarni suv tushishidan himoya qiladi, keraksiz dog&lsquo;lar va dog&lsquo;lar paydo bo&lsquo;lishining oldini oladi.</p>', 2462000, 13, 0, 0, '2025-10-28 11:39:56', '2025-11-01 19:04:38', 'uploads/product/91_FfmcGh.webp'),
(22, 'Dazmol Polaris PIR 2483K 3m', '<p>Sizga Artel ART SI815 ni taqdim etamiz - bu sizning kiyimingizni mukammal dazmollash uchun quvvat, samaradorlik va innovatsion texnologiyalarning mukammal kombinatsiyasi. Maksimal quvvati 2000 Vt bo\'lgan bu dazmol tez qiziydi va eng qisqa vaqt ichida ishlashga tayyor. Korpus yuqori sifatli plastmassadan tayyorlangan bo\'lib, foydalanish oson va bardoshli bo\'ladi. Taglikning o\'ziga xos yopishmaydigan keramik qoplamasi hatto eng nozik materiallarning yopishishi va shikastlanishiga yo\'l qo\'ymasdan, oson sirpanishni kafolatlaydi. Uzoq muddatli bug\' har qanday turdagi matolarda burmalarni samarali tekislash imkonini beradi.</p>', 265000, 13, 0, 0, '2025-10-28 11:40:59', '2025-11-01 19:06:22', 'uploads/product/a_kjDTBI.jpg'),
(23, 'Tikuv mashina Janome 4045', '<p>Maksimal tikuv tezligi 85 Vt bo&lsquo;lgan Janome 4045 elektromexanik tikuv mashinasida ham professional tikuvchi, ham havaskor, hatto yangi shogird ham tikuv ishlarni bajarishi mumkin. Axir uning 15 ta tikuv operatsiyasi bor. Ular bilan eng zo&lsquo;r asarlar, chiroyli naqshlar, yamoqlar va o&lsquo;zingizning kiyim uslubingizni yarating. Kiyimlar kolleksiyangizning dizayneriga aylaning. Mashina har xil turdagi zigzag, to&lsquo;g&lsquo;ri chiziqlar, avtomatik rejimda overlok va yashirin tikuvlar, hamda tugmachalar tikadi. Vertikal moki eng kerakli xususiyatdir. Ammo igna yaqinidagi yorug&lsquo;lik tikuv operatsiyaning asosiy joyini mukammal tarzda yoritadi. TEXNOMART kompaniyasining Janome 4045 tikuv mashinasida bolalar buyumlarini tiking.</p>', 2120000, 14, 0, 0, '2025-10-28 11:41:59', '2025-11-01 19:08:12', 'uploads/product/b1_hkyOng.webp'),
(24, 'Chayka 2125 tikuv mashinasi', '<p>Elektromexanik boshqaruv turiga ega Chayka 2125 tikuv mashinasi yarim avtomatik ravishda tugma teshiklarini tikadi. Yuqori tikuv tezligida mashina 34 ta tikuv operatsiyasini bajaradi. Qaytarish tugmasi, tebranuvchi moki va faol oyoqchasining yoritilishi mashinaning afzalliklari hisoblanadi. Mashinaning xar xil turdagi oyoqchalari chaqnoq va tugmalarni tikishni osonlashtiradi. Mashina zigzag, yashirin, dekorativ va naqshli tikuvlar, shuningdek, qoplamali tikuvlar kabi operatsiyalarni bajaradi. Eng muhimi, mashinani oson boshqarish. u bilan ham tikuvchi, ham shogirdi, hatto erkaklar ham foydalana oladi. Zamonaviy dizayn va ixchamlik mashinaga o&lsquo;zgacha ko&lsquo;rinish beradi. TEXNOMART saytidan va do&lsquo;konlaridan mashhur Chayka brendni sotib oling.</p>', 1889000, 14, 0, 0, '2025-10-28 11:42:37', '2025-11-01 19:09:56', 'uploads/product/f1_p8A55g.jpg'),
(25, 'Janome 2320 Tikuv mashinasi', '<p>Maksimal tikuv tezligi 60 Vt bo&lsquo;lgan Janome 2320 tikuv mashinasida tikuvchi bo&lsquo;lishi shart emas. Mashinani ishlatish oson. Axir uning 15 ta tikuv operatsiyasi bor. Ular bilan eng zo&lsquo;r asarlar, chiroyli naqshlar, yamoqlar va o&lsquo;zingizning kiyim uslubingizni yarating. Kiyimlar kolleksiyangizning dizayneriga aylaning. Mashina har xil turdagi zigzag, to&lsquo;g&lsquo;ri chiziqlar, avtomatik rejimda overlok va yashirin tikuvlar, hamda tugmachalar tikadi. Chaqnoq uchun maxsus oyoqcha hatto kurtkani ham tikish imkonini beradi. Tebranuvchi moki eng kerakli xususiyatdir. Ammo igna yaqinidagi yorug&lsquo;lik tikuv operatsiyaning asosiy joyini mukammal tarzda yoritadi. TEXNOMART kompaniyasining Janome 2320 tikuv mashinasida bolalar buyumlarini tiking.</p>', 2159000, 14, 0, 0, '2025-10-28 11:43:18', '2025-11-01 19:12:20', 'uploads/product/g1_UUnhzX.webp'),
(26, 'Apple iPhone 16 Pro 128GB Black Titanium', '<p>iPhone 16 Pro &ndash; siz ko&lsquo;proq yutuqlarga erishishingiz uchun yaratilgan qurilmadir. Texnologiya sohasidagi eng so&lsquo;nggi kashfiyotlar va puxta ishlab chiqilgan dizayn uning peshqadamligini ta&rsquo;minlaydi. Apple Intelligence Intelligence&rsquo;ning eng yangi versiyasi bilan smartfoningiz nafaqat noyob vositaga, balki ishonchli hamkoriga aylanadi. Tizim kundalik vazifalarni yengillashtirish, ularni soddalashtirish va shu bilan birga ma&rsquo;lumotlar himoyasini kafolatlash uchun mo&lsquo;ljallangan. Ma&rsquo;lumotlarning maxfiyligini ta&rsquo;minlash maqsadida har bir jarayon bevosita qurilmada ishlov beriladi, bu esa ma&rsquo;lumotlarning chiqib ketish xavfini istisno qiladi. Endi telefoningiz sizni yanada yaxshiroq tushunadi va sizning xohish-istaklaringizga asoslangan yechimlarni taklif qiladi.</p>', 14239000, 4, 0, 0, '2025-10-28 11:45:05', '2025-11-01 19:13:59', 'uploads/product/h1_ovxLdR.webp'),
(27, 'Apple iPhone 16 128GB Black', '<p>2024-yilda butun dunyoga mashhur Apple kompaniyasi tomonidan ishlab chiqarilgan eng kutilgan qurilmalardan biri - bu iPhone 16 128GB Black. Ushbu zamonaviy va nafis smartfon faqatgina egasining shaxsiy uslubini ta&rsquo;kidlabgina qolmay, balki uning maqomini ham oshirish uchun yaratilgan. Dizayn Tashqi ko&lsquo;rinishiga kelsak, iPhone 16 mustahkam shisha va metall kabi pishiq va sifatli materiallardan tayyorlangan. Korpusning bu unsurlar kutilmagan zarbalar va tirnalishlardan yuqori darajada himoya qilishni ta&rsquo;minlaydi. Qurilmaning og&lsquo;irligi bor-yo&lsquo;g&lsquo;i 170 gramm bo&lsquo;lib, bu uni kundalik foydalanish uchun qulay va amaliy qiladi. Uni cho&lsquo;ntakda ham, sumkada ham bemalol olib yurish mumkin. Korpusning yumaloq burchaklari qurilmaga kelajakka yo&lsquo;naltirilgan ko&lsquo;rinish va noyob dizayn baxsh etadi. Kameralar orqa panelda nozik did bilan joylashtirilgan bo&lsquo;lib, bu telefonning nafis va puxta o&lsquo;ylangan tashqi ko&lsquo;rinishini ta&rsquo;minlaydi.</p>', 11019000, 4, 0, 0, '2025-10-28 11:45:54', '2025-11-01 19:15:42', 'uploads/product/j1_DKeY0K.webp'),
(28, 'Apple iPhone 16e 128GB White', '<p>Model klassik va zamonaviy uslubda ishlab chiqilgan bo&lsquo;lib, shisha hamda metall materiallardan foydalangan. Og&lsquo;irligi atigi 167 gramm, bu esa qurilmani har kuni foydalanishda yengil va qulay qiladi. IP68 standarti bo&lsquo;yicha himoya tufayli turli sharoitlarda bemalol ishlatish mumkin. Nano-SIM kartalarning ikkita joyi mavjud bo&lsquo;lib, ish va shaxsiy aloqalarni ajratishda qulaylik yaratadi. Kamera 48 megapiksellik asosiy modul har qanday yorug&lsquo;likda sifatli suratlar olish imkonini beradi. Aqlli ishlov berish texnologiyalari va tasvir barqarorlashtirish tizimi natijasida tiniq va yorqin kadrlar hosil bo&lsquo;ladi. 12 MP old kamera orqali aniq selfilar qilish, yuqori sifatda videoqo&lsquo;ng&lsquo;iroqlar o&lsquo;tkazish va yuz orqali blokdan chiqarish mumkin.</p>', 11023000, 4, 0, 0, '2025-10-28 11:46:44', '2025-11-01 19:17:56', 'uploads/product/z1_MvbQNB.webp'),
(29, 'Xiaomi Redmi Pad 2 WiFi 4/128GB Graphite Gray Plansheti', '<p>Xiaomi Redmi Pad 2 WiFi &mdash; yengil, zamonaviy va qulay dizaynga ega universal planshet. Og&lsquo;irligi atigi 512 g, jiddiy kulrang korpusi esa uni nafaqat shaxsiy foydalanish, balki o&lsquo;qish va ish uchun ham mos qiladi. Qurilma Android 15 operatsion tizimida ishlaydi, bu esa foydalanuvchiga yangi imkoniyatlar va interfeysni moslash imkonini beradi. USB Type-C porti orqali zaryadlanadi va ulanadi, shuningdek, klassik 3.5 mm raz&rsquo;yom orqali quloqchin ulash mumkin. Model Xitoyda ishlab chiqarilgan bo&lsquo;lib, zamonaviy sifat talablariga javob beradi. 11 dyuymli ekran IPS texnologiyasi asosida ishlab chiqilgan bo&lsquo;lib, 2560&times;1600 piksel aniqlik va 271 PPI zichlikni taqdim etadi. 90 Gts yangilanish chastotasi tasvirni silliq va tiniq qiladi, bu esa matn o&lsquo;qish, brauzerda ishlash yoki video tomosha qilishda ayniqsa qulaydir. Ranglar aniq, sensor esa sezgir, shuning uchun uydami, ochiq havodami &mdash; har doim qulay foydalanish imkonini beradi. Bunday format multimedia, onlayn darslar va ofis dasturlari uchun juda mos. Uskunaviy jihatdan planshet 2.2 GGs takt chastotasiga ega MediaTek Helio G100 Ultra protsessori bilan jihozlangan, bu esa foydalanuvchi harakatlariga tez javob qaytaradi va bir nechta ilovalarni bir vaqtda bemalol bajaradi. 4 GB operativ xotira va 128 GB ichki saqlov joyi sizga fayllar, suratlar va kerakli dasturlarni bemalol saqlash imkonini beradi. Wi-Fi va Bluetooth modullari esa boshqa qurilmalarga tez va barqaror ulanishingizni ta&rsquo;minlaydi. Mustaqil ishlash vaqti uzoq &mdash; 9000 mA&middot;soat sig&lsquo;imli batareya yordamida planshetdan 19 soatgacha foydalanish mumkin. 15 Vt quvvatdagi adapter bilan esa zaryad qisqa vaqtda tiklanadi, bu safar yoki ish kunlari uchun ayni muddao. 8 MP orqa kamera fotosurat va video yozish uchun yetarli, 5 MP old kamera esa videoqo&lsquo;ng&lsquo;iroq va selfilar uchun mos. Ushbu planshet talaba, xodim yoki qulaylik va unumdorlikni qadrlovchi har bir foydalanuvchi uchun ideal tanlovdir.</p>', 2119000, 3, 0, 0, '2025-10-28 11:47:42', '2025-11-01 19:19:07', 'uploads/product/x1_cMxVO-.webp'),
(30, 'Xiaomi Redmi Pad SE LTE 8.7 4/128GB Graphite Gray Plansheti', '<p>Xiaomi Redmi Pad 2 WiFi &mdash; yengil, zamonaviy va qulay dizaynga ega universal planshet. Og&lsquo;irligi atigi 512 g, jiddiy kulrang korpusi esa uni nafaqat shaxsiy foydalanish, balki o&lsquo;qish va ish uchun ham mos qiladi. Qurilma Android 15 operatsion tizimida ishlaydi, bu esa foydalanuvchiga yangi imkoniyatlar va interfeysni moslash imkonini beradi. USB Type-C porti orqali zaryadlanadi va ulanadi, shuningdek, klassik 3.5 mm raz&rsquo;yom orqali quloqchin ulash mumkin. Model Xitoyda ishlab chiqarilgan bo&lsquo;lib, zamonaviy sifat talablariga javob beradi. 11 dyuymli ekran IPS texnologiyasi asosida ishlab chiqilgan bo&lsquo;lib, 2560&times;1600 piksel aniqlik va 271 PPI zichlikni taqdim etadi. 90 Gts yangilanish chastotasi tasvirni silliq va tiniq qiladi, bu esa matn o&lsquo;qish, brauzerda ishlash yoki video tomosha qilishda ayniqsa qulaydir. Ranglar aniq, sensor esa sezgir, shuning uchun uydami, ochiq havodami &mdash; har doim qulay foydalanish imkonini beradi. Bunday format multimedia, onlayn darslar va ofis dasturlari uchun juda mos. Uskunaviy jihatdan planshet 2.2 GGs takt chastotasiga ega MediaTek Helio G100 Ultra protsessori bilan jihozlangan, bu esa foydalanuvchi harakatlariga tez javob qaytaradi va bir nechta ilovalarni bir vaqtda bemalol bajaradi. 4 GB operativ xotira va 128 GB ichki saqlov joyi sizga fayllar, suratlar va kerakli dasturlarni bemalol saqlash imkonini beradi. Wi-Fi va Bluetooth modullari esa boshqa qurilmalarga tez va barqaror ulanishingizni ta&rsquo;minlaydi. Mustaqil ishlash vaqti uzoq &mdash; 9000 mA&middot;soat sig&lsquo;imli batareya yordamida planshetdan 19 soatgacha foydalanish mumkin. 15 Vt quvvatdagi adapter bilan esa zaryad qisqa vaqtda tiklanadi, bu safar yoki ish kunlari uchun ayni muddao. 8 MP orqa kamera fotosurat va video yozish uchun yetarli, 5 MP old kamera esa videoqo&lsquo;ng&lsquo;iroq va selfilar uchun mos. Ushbu planshet talaba, xodim yoki qulaylik va unumdorlikni qadrlovchi har bir foydalanuvchi uchun ideal tanlovdir.</p>', 2067000, 3, 0, 0, '2025-10-28 11:48:22', '2025-11-01 19:20:52', 'uploads/product/c1fed1d5-e4a5-4167-a4b9-32f373193f4c_LBX8wz.webp'),
(32, 'Samsung Galaxy Z Fold6 5G 12/256GB Silver Shadow', '<p>Samsung Galaxy Z Fold6 5G 12/256GB Silver Shadow</p>', 21949000, 2, 0, 0, '2025-10-29 17:11:41', '2025-11-01 19:22:25', 'uploads/product/v1_e-ffJ5.webp'),
(33, 'Xiaomi 15 12/512GB Black', '<p>Xiaomi 15 12/512GB Black</p>', 21949000, 3, 0, 0, '2025-10-29 17:22:51', '2025-11-01 19:25:25', 'uploads/product/111_Pf8dlG.webp'),
(34, 'Xiaomi 15 12/512GB Black', '<p>Xiaomi 15 12/512GB Black</p>', 21949000, 3, 0, 0, '2025-10-29 17:23:04', '2025-11-01 19:27:30', 'uploads/product/221_rxMwZa.webp'),
(37, 'Iphone 12 pro max', '<p>Iphone 12 pro max</p>', 12677000, 4, 0, 0, '2025-10-29 18:15:55', '2025-11-01 19:28:46', 'uploads/product/333_uEgDj7.webp'),
(38, 'Samsung Galaxy Z Fold6 5G 12/256GB Silver Shadow', '<p>Samsung Galaxy Z Fold6 5G 12/256GB Silver Shadow</p>', 6199000, 2, 0, 0, '2025-10-31 02:18:57', '2025-11-01 19:30:00', 'uploads/product/444_xPgKYi.webp');

-- --------------------------------------------------------

--
-- Структура таблицы `product_image`
--

CREATE TABLE `product_image` (
  `id` int NOT NULL,
  `image` text,
  `product_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product_image`
--

INSERT INTO `product_image` (`id`, `image`, `product_id`) VALUES
(37, 'uploads/product-images/6159a4d7-820f-4b9b-bd83-f0cc4aadc2ea (1)_1pgW6S.webp', 1),
(38, 'uploads/product-images/6159a4d7-820f-4b9b-bd83-f0cc4aadc2ea_UdbbOR.webp', 1),
(39, 'uploads/product-images/a95a82ac-f1d5-42e2-865d-95844d9d1b17_acRNpe.webp', 1),
(40, 'uploads/product-images/4dbe6e6c-5395-4033-8fc2-2415e910b7e1_TFVl81.webp', 2),
(41, 'uploads/product-images/94c0a71c-8ea4-49d4-be49-027268f86c8e_3od0Kp.webp', 2),
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
-- Структура таблицы `setting`
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
-- Дамп данных таблицы `setting`
--

INSERT INTO `setting` (`id`, `email`, `phone_number`, `logo_img`, `site_name`, `facebook_url`, `telegram_url`, `instagram_url`, `youtube_url`, `description`) VALUES
(1, 'nurali2004@gmail.com', '998992907704', 'uploads/setting/shop.png', 'Online Shop', 'https://www.facebook.com/', 'https://telegram.me/', 'https://www.instagram.com/', 'https://www.youtube.com/', '<p><strong>Bizning onlayn elektronika do&lsquo;konimizda eng so&lsquo;nggi texnologiyalarni toping! Telefon, televizor, kompyuter, audio va smart gadjetlar &mdash; sifatli, kafolatli va tez yetkazib berish xizmati bilan.</strong></p>');

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` text,
  `order` int DEFAULT '0',
  `url` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `name`, `img`, `order`, `url`) VALUES
(1, 'Premium care for premium people.', 'uploads/partner/516b95a0-63ea-4bcc-a019-33c4aa9fca0b-cover_b5_Vtl.png', 0, 'https://www.asos.com/men/'),
(2, 'Online watches', 'uploads/partner/3432b14cfdb2ec4f5fd99009ea8c11ca_3nz_FW.jpg', 1, 'https://www.asos.com/men/'),
(3, 'Online clothes and mp3', 'uploads/partner/black-friday-super-sale-facebook-cover-banner-template_120329-5177_L4KrYY.jpg', 2, 'https://www.asos.com/men/');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
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
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`, `role`) VALUES
(1, 'admin', '9CPO_YX1qDeh6X6NTdDQn1RYT-FOFlfL', '$2y$13$oGUUKUxT4NBZomEfQ04UzOsq6QfDPA7PjbM9cmqfEBtXQRgLBObPW', NULL, 'mavzurovnurali@gmail.com', 10, 1761203800, 1761203800, 'E_nCVc8Y1KqCC5zlkVdl4fhmPwy1bUEm_1761203800', 'admin'),
(2, 'nurali', 'KvOD89BQoMXT1T5QFm9U4gBf-0G0uYnt', '$2y$13$Eak5lBYsdy8c/OOEyNgc/exHTVl9gjQJrh0pUwhztxPAAIKP2PVc.', NULL, 'nura20009@gmail.com', 9, 1761508803, 1761508803, '3tyJ6wgGAJw1biqN-V-jglwywHkolyyX_1761508803', 'user'),
(3, 'asilbek', 'ZmkggZNmIBVV9Acex_yLExPaCRrvRLoP', '$2y$13$C8vntfqV8EtVDKeXPAIQYeJT4vFFsqpqrfz44mDqWXqhgogYOO3y.', NULL, 'nura23409@gmail.com', 9, 1761509010, 1761509010, 'lIOD_nAMWyP1__ad4PWSucpAeTw3_Buz_1761509010', NULL),
(4, 'moderator', 'VQCQWXPCKp2EFmeQ3f23ykwGZu07QZxA', '$2y$13$x8ZaZCLtD2RdnXhvAKcqsuUUKVX6PCaImsFm9ol3NbnqezkfSRV.C', NULL, 'moderator@test.lc', 10, 1762251253, 1762251253, '1GCAIkRNeJyD-QVADduLNH2cL1tD_2ws_1762251253', 'moderator');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-cart-user_id` (`user_id`),
  ADD KEY `idx-cart-product_id` (`product_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-category-pid` (`pid`);

--
-- Индексы таблицы `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-customer-user_id` (`user_id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-order-user_id` (`user_id`);

--
-- Индексы таблицы `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-order_item-order_id` (`order_id`),
  ADD KEY `idx-order_item-product_id` (`product_id`);

--
-- Индексы таблицы `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-product-category_id` (`category_id`);

--
-- Индексы таблицы `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-product_image-product_id` (`product_id`);

--
-- Индексы таблицы `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT для таблицы `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk-cart-product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-cart-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `fk-category-pid` FOREIGN KEY (`pid`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk-customer-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk-order-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `fk-order_item-order_id` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-order_item-product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk-product-category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `fk-product_image-product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
