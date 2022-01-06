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
(9, 'Máy tính bảng Samsung Galaxy Tab S7 FE', 'samsung-galaxy-tab-s7-fe-green-200x200.jpg', 12790000, 1, 19),
(10, 'Laptop HP EliteBook X360 830 G8 i7', 'hp-elitebook-x360-830-g8-i7-3g1a4pa-19-600x600.jpg', 41390000, 2, 20),
(11, 'Máy tính bảng Samsung Galaxy Tab S7 FE', 'samsung-galaxy-tab-s7-fe-green-200x200.jpg', 12790000, 1, 20),
(12, 'Laptop HP EliteBook X360 830 G8 i7', 'hp-elitebook-x360-830-g8-i7-3g1a4pa-19-600x600.jpg', 41390000, 2, 21),
(13, 'Máy tính bảng Samsung Galaxy Tab S7 FE', 'samsung-galaxy-tab-s7-fe-green-200x200.jpg', 12790000, 1, 21),
(14, 'Điện thoại Samsung Galaxy Z Fold2 5G', 'samsung-galaxy-z-fold-2-den-600x600-200x200.jpg', 44000000, 1, 21);

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
(4, '20h sell cực lớn với nhiều phần quà hấp dẫn có cơ hội nhận đến 1.000.000đ', '19b2d8a44dc620677f8bf58894f24952.jpg'),
(18, 'Thông báo', '19b2d8a44dc620677f8bf58894f24952.jpg'),
(19, 'Thông báo mới ', '19b2d8a44dc620677f8bf58894f24952.jpg'),
(5, 'Mua sản phẩm nhận ngay mã voucher 50k nhanh tay số lượng có hạn', 'mã-giảm-giá-Shopee-1.jpg');

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
(1, 'iPhone 13 Pro Max 128GB', 1, 1, 33990000, '637673213598401263_iphone-13-pro-max-dd-1.jpg', 'Một thiết kế ấn tượng về sự bền bỉ, với thép y tế không gỉ, Ceramic Shield và khả năng chống nước IP68 dẫn đầu thị trường.', 1, '2021-10-21 17:00:00'),
(2, 'Samsung Galaxy Note 20 Ultra', 2, 1, 19999000, '637322682439532348_ss-note-20-ultra-5g-gold-dd.jpeg', 'Samsung Galaxy Note 20 Ultra được chế tác từ những vật liệu cao cấp hàng đầu hiện nay, với sự tỉ mỉ và chất lượng gia công thượng thừa, tạo nên chiếc điện thoại đẹp hơn những gì bạn có thể tưởng tượng. Không chỉ có kiểu dáng thanh lịch, màn hình không viền Infinity-O quyến rũ, Galaxy Note20 Ultra còn thể hiện sự cao cấp ở từng chi tiết nhỏ như các phần viền cạnh sáng bóng, họa tiết phay xước độc đáo trên khung máy, mang đến niềm cảm hứng cho người dùng ở mọi góc cạnh.', 1, '2021-10-18 02:27:05'),
(3, 'Laptop Acer Nitro Gaming AN515 57 74RD i7 11800H/8GB/512GB SSD/Nvidia RTX 3050 4GB/Win10', 3, 2, 27999000, '637624023473077758_acer-nitro-gaming-an515-57-den-rtx3050-dd-1.jpeg', 'Acer Nitro Gaming AN515 57 74RD thực sự là một món hời dành cho game thủ khi trang bị bộ vi xử lý Intel Core i7 11800H với 8 nhân 16 luồng siêu mạnh, bên cạnh đó là card đồ họa rời RTX 3050 kiến trúc Ampere danh tiếng.', 1, '2021-10-27 02:30:14'),
(4, 'Laptop Asus Vivobook A515EA-BN1688T i3 1115G4/8GB/256GB SSD/Win10', 4, 2, 15999000, '637647989395373500_asus-vivobook-a515-bac-dd.jpg', 'Thiết kế kim loại độc đáo, làm việc hiệu quả giải trí hấp dẫn', 0, '2021-12-23 06:24:47'),
(5, 'Xiaomi Pad 5 256GB', 5, 3, 10490000, 'xiaomi-pad-5-white-200x200.jpg', 'Xiaomi Pad 5 là chiếc máy tính bảng hoàn hảo mà ai cũng muốn sở hữu. Thiết kế mỏng nhẹ thời trang, cấu hình cao cấp hàng đầu, màn hình lớn 11 inch WQHD+ sắc nét, tần số quét 120Hz siêu mượt đi cùng pin dung lượng lên tới 8720mAh, Xiaomi Pad 5 thật sự toàn diện, không có bất cứ điểm gì để chê.', 0, '2021-12-23 05:42:52'),
(6, 'iPad Pro 12.9 2020 WI-FI 256GB ', 1, 3, 27999000, '637329302386814451_imac-27-2020-bac-dd.jpg', 'Mang trên mình màn hình cực lớn, sức mạnh còn hơn cả laptop hay PC, kết nối được với bàn phím hỗ trợ TrackPad và camera kép đẳng cấp, iPad Pro 12.9 2020 Wi-Fi 256GB vượt xa những gì bạn mong đợi ở một chiếc máy tính bảng.', 1, '2021-12-23 05:46:14'),
(7, 'Samsung Galaxy Watch 4 40mm ', 2, 4, 6490000, 'samsung-galaxy-z-fold-2-den-600x600-200x200.jpg', 'Không chỉ là chiếc đồng hồ thông minh đầy đủ cả tính năng công nghệ và vẻ đẹp thời trang, Samsung Galaxy Watch 4 còn là một người bạn đồng hành luôn luôn thấu hiểu sức khỏe và những gì bạn cần, cùng bạn hoàn thiện bản thân mỗi ngày.', 0, '2021-12-23 05:45:47'),
(8, 'Apple Watch SE GPS 40mm viền nhôm dây cao su', 1, 4, 7999000, '637369907197319165_Apple Watch SE GPS 40mm dai dien.jpg', 'Màn hình Retina lớn viền mỏng tuyệt đẹp, trang bị những cảm biến tiên tiến và các tính năng sức khỏe hàng đầu, Apple Watch SE mang đến cho bạn nhiều hơn những gì bạn mong đợi trong một mức giá hấp dẫn.', 1, '2021-12-23 05:44:06'),
(9, 'iMac 27', 1, 5, 48999000, '637329302386814451_imac-27-2020-bac-dd1.jpg', 'Dòng máy tính All in one mạnh mẽ nhất, nơi sẽ hiện thực hóa mọi ý tưởng của bạn. iMac 27 inch 2020 Retina 5K với thiết kế tuyệt đẹp và sức mạnh khó tin, mang đến cho bạn phương tiện làm việc đẳng cấp, tốc độ, hình ảnh Retina 5K mãn nhãn.\r\n\r\n', 1, '2021-12-23 06:26:18'),
(10, 'Máy tính All in one Asus V222FAK-BA219T i3 10110U/4GB/256GB SSD/21.5 FHD/Key-Mouse/Win10SL', 4, 5, 13590000, '637684185946973111_mt-aio-asus-v222fak-den-dd.jpg', '', 0, '2021-12-23 05:45:07'),
(11, 'iPhone XR 64GB', 1, 1, 899000, '637393169370716242_ip-xr-dd.jpg', 'Chiếc iPhone với màn hình Liquid Retina hoàn toàn mới, công nghệ màn hình LCD tiên tiến nhất đi cùng Face ID nhanh hơn, con chip mạnh mẽ và hệ thống camera xóa phông hoàn hảo. Đó chính là iPhone XR với nhiều màu sắc tuyệt vời đang chờ đón bạn.', 0, '2021-12-23 05:38:13'),
(12, 'Laptop HP EliteBook X360 830 G8 i7', 4, 2, 41390000, 'hp-elitebook-x360-830-g8-i7-3g1a4pa-19-600x600.jpg', 'Lớp vỏ chiếc laptop HP này được chế tác hoàn toàn từ kim loại đem lại sự cứng cáp để bảo vệ các linh kiện bên trong nhưng vẫn đảm bảo tính thẩm mỹ với gam màu bạc thời thượng, máy cũng vô cùng mỏng nhẹ với trọng lượng chỉ 1.476 kg và mỏng 17.8 mm bạn có thể dễ dàng để vào balo, túi xách mang theo bên mình sẵn sàng xử lý công việc bất cứ lúc nào.', 1, '2021-10-25 14:20:01'),
(13, 'Laptop HP EliteBook X360 1030 G8 i7', 4, 2, 49090000, 'hp-elitebook-x360-1030-g8-i7-3g1c4pa-19-600x600.jpg', 'Cấu hình mạnh mẽ nhờ con chip Intel Core i7 Tiger Lake 1165G7 có tốc độ xung nhịp trung bình 2.80 GHz và đạt tối đa Turbo Boost 4.7 GHz, mang đến khả năng tạo nội dung nhanh gấp 2.7 lần, nâng cao hiệu suất làm việc văn phòng lên đến hơn 20%, xử lý tốt từ các tác vụ văn phòng cơ bản cho đến thao tác đồ họa chuyên nghiệp.', 1, '2021-10-25 14:21:07'),
(14, 'Laptop HP Envy 13 ba1030TU i7', 4, 2, 30490000, 'hp-envy-13-ba1030tu-i7-2k0b6pa-101820-091857-600x600.jpg', 'Laptop HP Envy được trang bị bộ xử lý Intel Core i7. Đây là chiếc laptop sở hữu CPU thế hệ 11, lõi tứ 8 luồng cho xung nhịp trung bình 2.80 GHz ở các công việc văn phòng như Word, Excel, Powerpoint và xung nhịp tối đa lên đến 4.7 GHz với các tác vụ hạng nặng như: Photoshop, Adobe Premiere nhờ công nghệ Turbo Boost, mang đến hiệu năng mạnh mẽ đảm bảo xử lý tốt các công việc của bạn.', 1, '2021-10-25 14:21:23'),
(15, 'iPhone 12 Pro', 1, 1, 28000000, 'iphone-12-pro-max_3__1.jpg', 'Mạnh mẽ siêu nhanh với chip A14, Ram 6GB,Mạng 5G tốc độ cao', 1, '2021-12-23 05:31:17'),
(16, 'Điện thoại iPhone 13 Pro 128GB', 1, 1, 30490000, 'iphone-13-pro-silver-200x200.jpg', 'iPhone 13 Pro không có nhiều sự thay đổi về thiết kế, khi máy vẫn sở hữu kiểu dáng tương tự như iPhone 12 Pro với các cạnh viền vuông vắn và hai mặt kính cường lực cao cấp. Sở hữu 4 phiên bản màu gồm xanh dương, bạc, vàng đồng và xám cho bạn tùy chọn theo sở thích của mình. ', 1, '2021-10-25 14:22:25'),
(17, 'Điện thoại Samsung Galaxy S20 FE', 2, 1, 12990000, 'samsung-galaxy-s20-fe-xanhduong-200x200-org.jpg', 'Camera trên S20 FE là 3 cảm biến chất lượng nằm gọn trong mô đun chữ nhật độc đáo ở mặt lưng bao gồm: Camera chính 12 MP cho chất lượng ảnh sắc nét, camera góc siêu rộng 12 MP cung cấp góc chụp tối đa và cuối cùng camera tele 8 MP hỗ trợ zoom quang 3X.', 1, '2021-12-23 05:36:56'),
(18, 'Điện thoại Samsung Galaxy Z Fold2 5G', 2, 1, 44000000, 'samsung-galaxy-s20-fe-xanhduong-200x200-org.jpg', 'Phần “xương sống” của máy cho phép bạn gập mở nhịp nhàng ở nhiều góc độ khác nhau, mang đến cảm giác chắc chắn, mượt mà hơn, không giống như thế hệ Galaxy Fold đầu tiên.', 1, '2021-12-23 05:34:21'),
(19, 'Điện thoại Samsung Galaxy Z Fold3 5G 256GB ', 2, 1, 40990000, 'samsung-galaxy-z-fold-3-silver-1-200x200.jpg', 'Có thể thấy mẫu smartphone Galaxy Z Fold3 lần này vẫn giữ nguyên ngoại hình cùng cơ chế màn hình gập mở dạng quyển sách như của tiền nhiệm, hồ biến chiếc smartphone thành một chiếc máy tính bảng mini một cách dễ dàng và ngược lại.', 1, '2021-10-25 14:22:49'),
(20, 'Máy tính bảng Xiaomi Pad 5 128GB ', 5, 3, 8990000, 'xiaomi-pad-5-white-200x200.jpg', 'Màn hình lớn 11 inch có độ hiển thị siêu rõ nét với độ phân giải cao và hỗ trợ HDR10 giúp cho mọi chi tiết đều trở nên bắt mắt. Màn hình có khả năng hiển thị lên đến 1 tỷ màu sẽ khôi phục lại màu sắc rực rỡ nhất của cuộc sống xung quanh ngay trên màn hình.', 1, '2021-10-25 14:22:55'),
(21, 'Máy tính bảng Samsung Galaxy Tab S7 FE', 2, 3, 12790000, 'samsung-galaxy-tab-s7-fe-green-200x200.jpg', 'Galaxy Tab S7 FE sẽ khiến bạn choáng ngợp với dụng lượng pin cực khủng 10090 mAh đảm bảo cho cường độ làm việc, giải trí liên tục trong nhiều giờ liền.', 1, '2021-10-25 14:23:01'),
(22, 'Vòng đeo tay thông minh Mi Band 5', 5, 4, 590000, 'mi-band-5-den-1-180x125.jpg', 'Vòng đeo tay thông minh Mi Band 5 có màn hình 1.1 inch cùng độ phân giải là 126 x 294 pixels, lớn hơn so với phiên bản 0.95 inch của Mi Band 4. Mật độ điểm ảnh trên Mi Band 5 được nâng cấp lên đến 300ppi, vì thế người dùng có thể quan sát các thông báo rõ ràng trên màn hình. Dây đeo làm từ silicone với thiết kế ôm trọn cổ tay, mang lại cảm giác vô cùng mềm mại và không bị phai màu khi sử dụng sau một thời gian dài.', 1, '2021-10-25 14:23:14'),
(23, 'Samsung Galaxy Watch 3 41mm viền thép bạc dây da', 2, 4, 4490000, 'samsung-galaxy-watch-3-41mm-bac-2-org.jpg', 'Sở hữu 2 nút bấm và vòng bezel xoay điều khiển vật lý độc đáo. Màn hình 1.2 inch cùng độ phân giải 360 x 360 pixels giúp hình ảnh hiển thị được chân thật, rõ nét. Viền đồng hồ được làm bằng thép cứng cáp cùng dây đeo bằng da tạo cảm giác chắc chắn và dễ chịu cho người dùng khi đeo.', 1, '2021-10-25 14:23:19'),
(24, 'Apple Mac Mini 2020 i3 3.6GHz/8GB/256GB', 5, 5, 21990000, 'mac-minii3-1-org.jpg', 'Được xem một máy tính để bàn Apple tuyệt vời có thiết kế siêu nhỏ gọn, Mac mini cung cấp năng lượng không hề nhỏ cho các tác vụ.\r\n\r\nBộ vi xử lý Intel Core i3 thế hệ thứ 8 với 4 nhân xung nhịp 3.6 GHz mạnh mẽ, đồ họa Intel UHD Graphics 630 giúp Mac mini có tốc độ kinh ngạc khi phản hồi các tác vụ lướt Facebook, soạn thảo,... nhanh chóng. ', 1, '2021-10-25 14:23:32'),
(25, 'iMac 24 inch 2021 4.5K M1/512GB/8GB/8-core GPU', 5, 5, 45990000, 'imac-24-inch-45k-retina-m1-mgpl3saa-4-org.jpg', 'iMac có thiết kế tối giản và nhỏ gọn hơn, bắt mắt ở mọi góc độ. Màn hình chỉ mỏng 11.5 mm, toàn bộ máy có trọng lượng 4.48 kg với chân đế 147 mm giúp tối ưu hóa không gian học tập và giải trí. Vỏ máy được làm từ chất liệu nhôm tái chế 100% bền bỉ và có màu tông xanh dương đậm - nhạt phối một cách tinh tế làm nổi bật hơn góc làm việc đầy cảm hứng.', 1, '2021-10-25 14:23:39'),
(26, 'Samsung LCD Gaming 24 inch Full HD', 2, 5, 6590000, 'lcd-samsung-gaming-24-inch-full-hd-144hz-4ms-lc24-1-1-org.jpg', 'Màn hình có độ phân giải Full HD cho hình ảnh sắc nét, kích thước 24 inch có độ cong lên đến 1800R đảm bảo mỗi điểm ảnh điều cách đều mắt của bạn, góc nhìn rộng lên đến 178 độ mang đến cho bạn hình ảnh tuyệt đẹp từ mọi góc nhìn.', 1, '2021-10-25 14:25:05'),
(27, 'Màn hình Samsung LCD Smart Monitor M5 32 inch Full HD-Remote', 2, 5, 9090000, 'samsung-smart-monitor-m5-32-inch-ls32am500nexxv-01-org.jpg', 'Hệ điều hành Tizen mang đến giao diện hiện đại, cung cấp trải nghiệm mới lạ và khả năng hoạt động ổn định trên thiết bị, hỗ trợ người dùng nhanh chóng trong việc giải đáp thắc mắc hay tìm kiếm ứng dụng.', 1, '2021-12-01 02:47:57');

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
