-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 06, 2022 at 05:33 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom2`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

DROP TABLE IF EXISTS `billing`;
CREATE TABLE IF NOT EXISTS `billing` (
  `id_bill` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(20) NOT NULL,
  PRIMARY KEY (`id_bill`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id_bill`, `fname`, `lname`, `email`, `city`, `country`, `tel`) VALUES
(19, 'Tran', 'Khoa', 'thaytrokami@gmail.com', 'Ho CHi minh', 'Vietnam', 2147483647),
(20, 'Tran', 'Khoa', 'thaytrokami@gmail.com', 'Ho CHi minh', 'Vietnam', 2147483647),
(21, 'Tran', 'Khoa', 'thaytrokami@gmail.com', 'Ho CHi minh', 'Vietnam', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `image`, `price`, `quantity`, `id_bill`) VALUES
(7, 'Laptop HP EliteBook X360 830 G8 i7', 'hp-elitebook-x360-830-g8-i7-3g1a4pa-19-600x600.jpg', 41390000, 1, 18),
(8, 'Laptop HP EliteBook X360 830 G8 i7', 'hp-elitebook-x360-830-g8-i7-3g1a4pa-19-600x600.jpg', 41390000, 2, 19),
(9, 'M??y t??nh b???ng Samsung Galaxy Tab S7 FE', 'samsung-galaxy-tab-s7-fe-green-200x200.jpg', 12790000, 1, 19),
(10, 'Laptop HP EliteBook X360 830 G8 i7', 'hp-elitebook-x360-830-g8-i7-3g1a4pa-19-600x600.jpg', 41390000, 2, 20),
(11, 'M??y t??nh b???ng Samsung Galaxy Tab S7 FE', 'samsung-galaxy-tab-s7-fe-green-200x200.jpg', 12790000, 1, 20),
(12, 'Laptop HP EliteBook X360 830 G8 i7', 'hp-elitebook-x360-830-g8-i7-3g1a4pa-19-600x600.jpg', 41390000, 2, 21),
(13, 'M??y t??nh b???ng Samsung Galaxy Tab S7 FE', 'samsung-galaxy-tab-s7-fe-green-200x200.jpg', 12790000, 1, 21),
(14, '??i???n tho???i Samsung Galaxy Z Fold2 5G', 'samsung-galaxy-z-fold-2-den-600x600-200x200.jpg', 44000000, 1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'apple'),
(2, 'samsung'),
(3, 'acer'),
(4, 'asus'),
(5, 'xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `value`, `image`) VALUES
(4, '20h sell c???c l???n v???i nhi???u ph???n qu?? h???p d???n c?? c?? h???i nh???n ?????n 1.000.000??', '19b2d8a44dc620677f8bf58894f24952.jpg'),
(18, 'Th??ng b??o', '19b2d8a44dc620677f8bf58894f24952.jpg'),
(19, 'Th??ng b??o m???i ', '19b2d8a44dc620677f8bf58894f24952.jpg'),
(5, 'Mua s???n ph???m nh???n ngay m?? voucher 50k nhanh tay s??? l?????ng c?? h???n', 'm??-gi???m-gi??-Shopee-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(1, 'iPhone 13 Pro Max 128GB', 1, 1, 33990000, '637673213598401263_iphone-13-pro-max-dd-1.jpg', 'M???t thi???t k??? ???n t?????ng v??? s??? b???n b???, v???i th??p y t??? kh??ng g???, Ceramic Shield v?? kh??? n??ng ch???ng n?????c IP68 d???n ?????u th??? tr?????ng.', 1, '2021-10-21 17:00:00'),
(2, 'Samsung Galaxy Note 20 Ultra', 2, 1, 19999000, '637322682439532348_ss-note-20-ultra-5g-gold-dd.jpeg', 'Samsung Galaxy Note 20 Ultra ???????c ch??? t??c t??? nh???ng v???t li???u cao c???p h??ng ?????u hi???n nay, v???i s??? t??? m??? v?? ch???t l?????ng gia c??ng th?????ng th???a, t???o n??n chi???c ??i???n tho???i ?????p h??n nh???ng g?? b???n c?? th??? t?????ng t?????ng. Kh??ng ch??? c?? ki???u d??ng thanh l???ch, m??n h??nh kh??ng vi???n Infinity-O quy???n r??, Galaxy Note20 Ultra c??n th??? hi???n s??? cao c???p ??? t???ng chi ti???t nh??? nh?? c??c ph???n vi???n c???nh s??ng b??ng, h???a ti???t phay x?????c ?????c ????o tr??n khung m??y, mang ?????n ni???m c???m h???ng cho ng?????i d??ng ??? m???i g??c c???nh.', 1, '2021-10-18 02:27:05'),
(3, 'Laptop Acer Nitro Gaming AN515 57 74RD i7 11800H/8GB/512GB SSD/Nvidia RTX 3050 4GB/Win10', 3, 2, 27999000, '637624023473077758_acer-nitro-gaming-an515-57-den-rtx3050-dd-1.jpeg', 'Acer Nitro Gaming AN515 57 74RD th???c s??? l?? m???t m??n h???i d??nh cho game th??? khi trang b??? b??? vi x??? l?? Intel Core i7 11800H v???i 8 nh??n 16 lu???ng si??u m???nh, b??n c???nh ???? l?? card ????? h???a r???i RTX 3050 ki???n tr??c Ampere danh ti???ng.', 1, '2021-10-27 02:30:14'),
(4, 'Laptop Asus Vivobook A515EA-BN1688T i3 1115G4/8GB/256GB SSD/Win10', 4, 2, 15999000, '637647989395373500_asus-vivobook-a515-bac-dd.jpg', 'Thi???t k??? kim lo???i ?????c ????o, l??m vi???c hi???u qu??? gi???i tr?? h???p d???n', 0, '2021-12-23 06:24:47'),
(5, 'Xiaomi Pad 5 256GB', 5, 3, 10490000, 'xiaomi-pad-5-white-200x200.jpg', 'Xiaomi Pad 5 l?? chi???c m??y t??nh b???ng ho??n h???o m?? ai c??ng mu???n s??? h???u. Thi???t k??? m???ng nh??? th???i trang, c???u h??nh cao c???p h??ng ?????u, m??n h??nh l???n 11 inch WQHD+ s???c n??t, t???n s??? qu??t 120Hz si??u m?????t ??i c??ng pin dung l?????ng l??n t???i 8720mAh, Xiaomi Pad 5 th???t s??? to??n di???n, kh??ng c?? b???t c??? ??i???m g?? ????? ch??.', 0, '2021-12-23 05:42:52'),
(6, 'iPad Pro 12.9 2020 WI-FI 256GB ', 1, 3, 27999000, '637329302386814451_imac-27-2020-bac-dd.jpg', 'Mang tr??n m??nh m??n h??nh c???c l???n, s???c m???nh c??n h??n c??? laptop hay PC, k???t n???i ???????c v???i b??n ph??m h??? tr??? TrackPad v?? camera k??p ?????ng c???p, iPad Pro 12.9 2020 Wi-Fi 256GB v?????t xa nh???ng g?? b???n mong ?????i ??? m???t chi???c m??y t??nh b???ng.', 1, '2021-12-23 05:46:14'),
(7, 'Samsung Galaxy Watch 4 40mm ', 2, 4, 6490000, 'samsung-galaxy-z-fold-2-den-600x600-200x200.jpg', 'Kh??ng ch??? l?? chi???c ?????ng h??? th??ng minh ?????y ????? c??? t??nh n??ng c??ng ngh??? v?? v??? ?????p th???i trang, Samsung Galaxy Watch 4 c??n l?? m???t ng?????i b???n ?????ng h??nh lu??n lu??n th???u hi???u s???c kh???e v?? nh???ng g?? b???n c???n, c??ng b???n ho??n thi???n b???n th??n m???i ng??y.', 0, '2021-12-23 05:45:47'),
(8, 'Apple Watch SE GPS 40mm vi???n nh??m d??y cao su', 1, 4, 7999000, '637369907197319165_Apple??Watch SE GPS??40mm dai dien.jpg', 'M??n h??nh Retina l???n vi???n m???ng tuy???t ?????p, trang b??? nh???ng c???m bi???n ti??n ti???n v?? c??c t??nh n??ng s???c kh???e h??ng ?????u, Apple Watch SE mang ?????n cho b???n nhi???u h??n nh???ng g?? b???n mong ?????i trong m???t m???c gi?? h???p d???n.', 1, '2021-12-23 05:44:06'),
(9, 'iMac 27', 1, 5, 48999000, '637329302386814451_imac-27-2020-bac-dd1.jpg', 'D??ng m??y t??nh All in one m???nh m??? nh???t, n??i s??? hi???n th???c h??a m???i ?? t?????ng c???a b???n. iMac 27 inch 2020 Retina 5K v???i thi???t k??? tuy???t ?????p v?? s???c m???nh kh?? tin, mang ?????n cho b???n ph????ng ti???n l??m vi???c ?????ng c???p, t???c ?????, h??nh ???nh Retina 5K m??n nh??n.\r\n\r\n', 1, '2021-12-23 06:26:18'),
(10, 'M??y t??nh All in one Asus V222FAK-BA219T i3 10110U/4GB/256GB SSD/21.5 FHD/Key-Mouse/Win10SL', 4, 5, 13590000, '637684185946973111_mt-aio-asus-v222fak-den-dd.jpg', '', 0, '2021-12-23 05:45:07'),
(11, 'iPhone XR 64GB', 1, 1, 899000, '637393169370716242_ip-xr-dd.jpg', 'Chi???c iPhone v???i m??n h??nh Liquid Retina ho??n to??n m???i, c??ng ngh??? m??n h??nh LCD ti??n ti???n nh???t ??i c??ng Face ID nhanh h??n, con chip m???nh m??? v?? h??? th???ng camera x??a ph??ng ho??n h???o. ???? ch??nh l?? iPhone XR v???i nhi???u m??u s???c tuy???t v???i ??ang ch??? ????n b???n.', 0, '2021-12-23 05:38:13'),
(12, 'Laptop HP EliteBook X360 830 G8 i7', 4, 2, 41390000, 'hp-elitebook-x360-830-g8-i7-3g1a4pa-19-600x600.jpg', 'L???p v??? chi???c laptop HP n??y ???????c ch??? t??c ho??n to??n t??? kim lo???i ??em l???i s??? c???ng c??p ????? b???o v??? c??c linh ki???n b??n trong nh??ng v???n ?????m b???o t??nh th???m m??? v???i gam m??u b???c th???i th?????ng, m??y c??ng v?? c??ng m???ng nh??? v???i tr???ng l?????ng ch??? 1.476 kg v?? m???ng 17.8 mm b???n c?? th??? d??? d??ng ????? v??o balo, t??i x??ch mang theo b??n m??nh s???n s??ng x??? l?? c??ng vi???c b???t c??? l??c n??o.', 1, '2021-10-25 14:20:01'),
(13, 'Laptop HP EliteBook X360 1030 G8 i7', 4, 2, 49090000, 'hp-elitebook-x360-1030-g8-i7-3g1c4pa-19-600x600.jpg', 'C???u h??nh m???nh m??? nh??? con chip Intel Core i7 Tiger Lake 1165G7 c?? t???c ????? xung nh???p trung b??nh 2.80 GHz v?? ?????t t???i ??a Turbo Boost 4.7 GHz, mang ?????n kh??? n??ng t???o n???i dung nhanh g???p 2.7 l???n, n??ng cao hi???u su???t l??m vi???c v??n ph??ng l??n ?????n h??n 20%, x??? l?? t???t t??? c??c t??c v??? v??n ph??ng c?? b???n cho ?????n thao t??c ????? h???a chuy??n nghi???p.', 1, '2021-10-25 14:21:07'),
(14, 'Laptop HP Envy 13 ba1030TU i7', 4, 2, 30490000, 'hp-envy-13-ba1030tu-i7-2k0b6pa-101820-091857-600x600.jpg', 'Laptop HP Envy ???????c trang b??? b??? x??? l?? Intel Core i7. ????y l?? chi???c laptop s??? h???u CPU th??? h??? 11, l??i t??? 8 lu???ng cho xung nh???p trung b??nh 2.80 GHz ??? c??c c??ng vi???c v??n ph??ng nh?? Word, Excel, Powerpoint v?? xung nh???p t???i ??a l??n ?????n 4.7 GHz v???i c??c t??c v??? h???ng n???ng nh??: Photoshop, Adobe Premiere nh??? c??ng ngh??? Turbo Boost, mang ?????n hi???u n??ng m???nh m??? ?????m b???o x??? l?? t???t c??c c??ng vi???c c???a b???n.', 1, '2021-10-25 14:21:23'),
(15, 'iPhone 12 Pro', 1, 1, 28000000, 'iphone-12-pro-max_3__1.jpg', 'M???nh m??? si??u nhanh v???i chip A14, Ram 6GB,M???ng 5G t???c ????? cao', 1, '2021-12-23 05:31:17'),
(16, '??i???n tho???i iPhone 13 Pro 128GB', 1, 1, 30490000, 'iphone-13-pro-silver-200x200.jpg', 'iPhone 13 Pro kh??ng c?? nhi???u s??? thay ?????i v??? thi???t k???, khi m??y v???n s??? h???u ki???u d??ng t????ng t??? nh?? iPhone 12 Pro v???i c??c c???nh vi???n vu??ng v???n v?? hai m???t k??nh c?????ng l???c cao c???p. S??? h???u 4 phi??n b???n m??u g???m xanh d????ng, b???c, v??ng ?????ng v?? x??m cho b???n t??y ch???n theo s??? th??ch c???a m??nh. ', 1, '2021-10-25 14:22:25'),
(17, '??i???n tho???i Samsung Galaxy S20 FE', 2, 1, 12990000, 'samsung-galaxy-s20-fe-xanhduong-200x200-org.jpg', 'Camera tr??n S20 FE l?? 3 c???m bi???n ch???t l?????ng n???m g???n trong m?? ??un ch??? nh???t ?????c ????o ??? m???t l??ng bao g???m: Camera ch??nh 12 MP cho ch???t l?????ng ???nh s???c n??t, camera g??c si??u r???ng 12 MP cung c???p g??c ch???p t???i ??a v?? cu???i c??ng camera tele 8 MP h??? tr??? zoom quang 3X.', 1, '2021-12-23 05:36:56'),
(18, '??i???n tho???i Samsung Galaxy Z Fold2 5G', 2, 1, 44000000, 'samsung-galaxy-s20-fe-xanhduong-200x200-org.jpg', 'Ph???n ???x????ng s???ng??? c???a m??y cho ph??p b???n g???p m??? nh???p nh??ng ??? nhi???u g??c ????? kh??c nhau, mang ?????n c???m gi??c ch???c ch???n, m?????t m?? h??n, kh??ng gi???ng nh?? th??? h??? Galaxy Fold ?????u ti??n.', 1, '2021-12-23 05:34:21'),
(19, '??i???n tho???i Samsung Galaxy Z Fold3 5G 256GB ', 2, 1, 40990000, 'samsung-galaxy-z-fold-3-silver-1-200x200.jpg', 'C?? th??? th???y m???u smartphone Galaxy Z Fold3 l???n n??y v???n gi??? nguy??n ngo???i h??nh c??ng c?? ch??? m??n h??nh g???p m??? d???ng quy???n s??ch nh?? c???a ti???n nhi???m, h??? bi???n chi???c smartphone th??nh m???t chi???c m??y t??nh b???ng mini m???t c??ch d??? d??ng v?? ng?????c l???i.', 1, '2021-10-25 14:22:49'),
(20, 'M??y t??nh b???ng Xiaomi Pad 5 128GB ', 5, 3, 8990000, 'xiaomi-pad-5-white-200x200.jpg', 'M??n h??nh l???n 11 inch c?? ????? hi???n th??? si??u r?? n??t v???i ????? ph??n gi???i cao v?? h??? tr??? HDR10 gi??p cho m???i chi ti???t ?????u tr??? n??n b???t m???t. M??n h??nh c?? kh??? n??ng hi???n th??? l??n ?????n 1 t??? m??u s??? kh??i ph???c l???i m??u s???c r???c r??? nh???t c???a cu???c s???ng xung quanh ngay tr??n m??n h??nh.', 1, '2021-10-25 14:22:55'),
(21, 'M??y t??nh b???ng Samsung Galaxy Tab S7 FE', 2, 3, 12790000, 'samsung-galaxy-tab-s7-fe-green-200x200.jpg', 'Galaxy Tab S7 FE s??? khi???n b???n cho??ng ng???p v???i d???ng l?????ng pin c???c kh???ng 10090 mAh ?????m b???o cho c?????ng ????? l??m vi???c, gi???i tr?? li??n t???c trong nhi???u gi??? li???n.', 1, '2021-10-25 14:23:01'),
(22, 'V??ng ??eo tay th??ng minh Mi Band 5', 5, 4, 590000, 'mi-band-5-den-1-180x125.jpg', 'V??ng ??eo tay th??ng minh Mi Band 5 c?? m??n h??nh 1.1 inch c??ng ????? ph??n gi???i l?? 126 x 294 pixels, l???n h??n so v???i phi??n b???n 0.95 inch c???a Mi Band 4. M???t ????? ??i???m ???nh tr??n Mi Band 5 ???????c n??ng c???p l??n ?????n 300ppi, v?? th??? ng?????i d??ng c?? th??? quan s??t c??c th??ng b??o r?? r??ng tr??n m??n h??nh. D??y ??eo l??m t??? silicone v???i thi???t k??? ??m tr???n c??? tay, mang l???i c???m gi??c v?? c??ng m???m m???i v?? kh??ng b??? phai m??u khi s??? d???ng sau m???t th???i gian d??i.', 1, '2021-10-25 14:23:14'),
(23, 'Samsung Galaxy Watch 3 41mm vi???n th??p b???c d??y da', 2, 4, 4490000, 'samsung-galaxy-watch-3-41mm-bac-2-org.jpg', 'S??? h???u 2 n??t b???m v?? v??ng bezel xoay ??i???u khi???n v???t l?? ?????c ????o. M??n h??nh 1.2 inch c??ng ????? ph??n gi???i 360 x 360 pixels gi??p h??nh ???nh hi???n th??? ???????c ch??n th???t, r?? n??t. Vi???n ?????ng h??? ???????c l??m b???ng th??p c???ng c??p c??ng d??y ??eo b???ng da t???o c???m gi??c ch???c ch???n v?? d??? ch???u cho ng?????i d??ng khi ??eo.', 1, '2021-10-25 14:23:19'),
(24, 'Apple Mac Mini 2020 i3 3.6GHz/8GB/256GB', 5, 5, 21990000, 'mac-minii3-1-org.jpg', '???????c xem m???t m??y t??nh ????? b??n Apple tuy???t v???i c?? thi???t k??? si??u nh??? g???n, Mac mini cung c???p n??ng l?????ng kh??ng h??? nh??? cho c??c t??c v???.\r\n\r\nB??? vi x??? l?? Intel Core i3 th??? h??? th??? 8 v???i 4 nh??n xung nh???p 3.6 GHz m???nh m???, ????? h???a Intel UHD Graphics 630 gi??p Mac mini c?? t???c ????? kinh ng???c khi ph???n h???i c??c t??c v??? l?????t Facebook, so???n th???o,... nhanh ch??ng. ', 1, '2021-10-25 14:23:32'),
(25, 'iMac 24 inch 2021 4.5K M1/512GB/8GB/8-core GPU', 5, 5, 45990000, 'imac-24-inch-45k-retina-m1-mgpl3saa-4-org.jpg', 'iMac c?? thi???t k??? t???i gi???n v?? nh??? g???n h??n, b???t m???t ??? m???i g??c ?????. M??n h??nh ch??? m???ng 11.5 mm, to??n b??? m??y c?? tr???ng l?????ng 4.48 kg v???i ch??n ????? 147 mm gi??p t???i ??u h??a kh??ng gian h???c t???p v?? gi???i tr??. V??? m??y ???????c l??m t??? ch???t li???u nh??m t??i ch??? 100% b???n b??? v?? c?? m??u t??ng xanh d????ng ?????m - nh???t ph???i m???t c??ch tinh t??? l??m n???i b???t h??n g??c l??m vi???c ?????y c???m h???ng.', 1, '2021-10-25 14:23:39'),
(26, 'Samsung LCD Gaming 24 inch Full HD', 2, 5, 6590000, 'lcd-samsung-gaming-24-inch-full-hd-144hz-4ms-lc24-1-1-org.jpg', 'M??n h??nh c?? ????? ph??n gi???i Full HD cho h??nh ???nh s???c n??t, k??ch th?????c 24 inch c?? ????? cong l??n ?????n 1800R ?????m b???o m???i ??i???m ???nh ??i???u c??ch ?????u m???t c???a b???n, g??c nh??n r???ng l??n ?????n 178 ????? mang ?????n cho b???n h??nh ???nh tuy???t ?????p t??? m???i g??c nh??n.', 1, '2021-10-25 14:25:05'),
(27, 'M??n h??nh Samsung LCD Smart Monitor M5 32 inch Full HD-Remote', 2, 5, 9090000, 'samsung-smart-monitor-m5-32-inch-ls32am500nexxv-01-org.jpg', 'H??? ??i???u h??nh Tizen mang ?????n giao di???n hi???n ?????i, cung c???p tr???i nghi???m m???i l??? v?? kh??? n??ng ho???t ?????ng ???n ?????nh tr??n thi???t b???, h??? tr??? ng?????i d??ng nhanh ch??ng trong vi???c gi???i ????p th???c m???c hay t??m ki???m ???ng d???ng.', 1, '2021-12-01 02:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'SmartPhone'),
(2, 'Laptop'),
(3, 'Tablet'),
(4, 'SmartWatch');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role_id`) VALUES
(2, 'user1', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(70, 'user', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(60, 'admin', '202cb962ac59075b964b07152d234b70', 1),
(98, 'nhom2', '827ccb0eea8a706c4c34a16891f84e7b', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
