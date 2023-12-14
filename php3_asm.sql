-- MariaDB dump 10.19  Distrib 10.4.19-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: php3_asm
-- ------------------------------------------------------
-- Server version	10.4.19-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `baiviet`
--

DROP TABLE IF EXISTS `baiviet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `baiviet` (
  `id_baiviet` int(11) NOT NULL AUTO_INCREMENT,
  `tieu_de` varchar(255) NOT NULL,
  `mo_ta` text NOT NULL,
  `noi_dung` text NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `ngay_dang` datetime NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_baiviet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baiviet`
--

LOCK TABLES `baiviet` WRITE;
/*!40000 ALTER TABLE `baiviet` DISABLE KEYS */;
/*!40000 ALTER TABLE `baiviet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `binhluan` (
  `id_bl` int(11) NOT NULL AUTO_INCREMENT,
  `noi_dung` text NOT NULL,
  `id_kh` bigint(20) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_bl`),
  KEY `id_kh` (`id_kh`),
  KEY `id_sp` (`id_sp`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `binhluan`
--

LOCK TABLES `binhluan` WRITE;
/*!40000 ALTER TABLE `binhluan` DISABLE KEYS */;
INSERT INTO `binhluan` VALUES (1,'ssdvsdasasv',1,7,'2022-08-15 05:37:17','2022-08-15 05:37:17'),(2,'ssdvsdasasv',1,6,'2022-08-15 05:37:41','2022-08-15 05:37:41'),(3,'ssdvsdasasv',1,7,'2022-08-15 05:37:49','2022-08-15 05:37:49');
/*!40000 ALTER TABLE `binhluan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL AUTO_INCREMENT,
  `ten_dm` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_dm`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `danhmuc`
--

LOCK TABLES `danhmuc` WRITE;
/*!40000 ALTER TABLE `danhmuc` DISABLE KEYS */;
INSERT INTO `danhmuc` VALUES (30,'PHỤ NỮ',NULL,NULL),(31,'ĐÀN ÔNG',NULL,NULL);
/*!40000 ALTER TABLE `danhmuc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hoadon` (
  `id_hd` int(11) NOT NULL AUTO_INCREMENT,
  `tong_tien` float NOT NULL,
  `trang_thai` text NOT NULL,
  `id_kh` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_hd`),
  KEY `id_kh` (`id_kh`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoadon`
--

LOCK TABLES `hoadon` WRITE;
/*!40000 ALTER TABLE `hoadon` DISABLE KEYS */;
INSERT INTO `hoadon` VALUES (19,22890000,'Đang Giao',2,'2022-08-17 07:02:59','2022-08-20 07:48:16'),(20,1090000,'Chờ xác nhận',2,'2022-08-17 07:24:38','2022-08-17 07:24:38'),(21,64000000,'Chờ xác nhận',2,'2022-08-19 19:32:21','2022-08-19 19:32:21');
/*!40000 ALTER TABLE `hoadon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hoadonchitiet`
--

DROP TABLE IF EXISTS `hoadonchitiet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hoadonchitiet` (
  `id_hdct` int(11) NOT NULL AUTO_INCREMENT,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_hdct`),
  KEY `id_hd` (`id_hd`),
  KEY `id_sp` (`id_sp`),
  CONSTRAINT `hoadonchitiet_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoadonchitiet`
--

LOCK TABLES `hoadonchitiet` WRITE;
/*!40000 ALTER TABLE `hoadonchitiet` DISABLE KEYS */;
INSERT INTO `hoadonchitiet` VALUES (7,21,1090000,19,7,'2022-08-17 07:22:51','2022-08-17 07:22:51'),(8,1,1090000,20,6,'2022-08-17 07:24:38','2022-08-17 07:24:38'),(9,4,2500000,21,14,'2022-08-19 19:32:21','2022-08-19 19:32:21');
/*!40000 ALTER TABLE `hoadonchitiet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('luonghoangphat2001@gmail.com','$2y$10$CISqFCRA8KWWwpaSQI4yuODuCx9g9w2J/lfcT3QLADJZv4vh6j2Fi','2022-08-12 05:16:57'),('phatlhps14778@fpt.edu.vn','$2y$10$Wyt79XibZxTNmh2Xd4P0VucN/w4SDYbDN/kDBCXgFz768q3Oi4jbq','2022-08-12 06:02:33');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL AUTO_INCREMENT,
  `ten_sp` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `mo_ta` text NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_sp`),
  KEY `id_dm` (`id_dm`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sanpham`
--

LOCK TABLES `sanpham` WRITE;
/*!40000 ALTER TABLE `sanpham` DISABLE KEYS */;
INSERT INTO `sanpham` VALUES (6,'VIVIAN TOP - ÁO LEN LƯỚI',1290000,'6b7a7cfd001a562a1f7a2ec404d80c9b (1).jpg','Áo được làm từ chất liệu len lưới. Cổ đức có 3 khuy cài kèm theo. Gấu tay và gấu áo được bo lại bằng len dày.\r\n\r\nThiết kế sử dụng chất liệu len lưới độc đáo, không khiến nàng bí bách ngay cả giữa trời hè. Chất liệu len mang đến form dáng mới lạ nhưng không nóng. Thiết kế lấy phong cách vintage làm chủ đạo, góp phần hoàn thiện diện mạo dịu dàng cho nàng.\r\n\r\nMàu sắc: Nude - Đen',2,30,'2022-08-12 07:28:37','2022-08-19 19:50:50'),(7,'GISELLE PANT - QUẦN ỐNG ĐỨNG',1090000,'5e0379dbf1c0dcb54b8bd8e20d96cdb6.jfif','Thiết kế quần lửng ống đứng, chất liệu Tuysi. Độ ôm nhẹ. Dọc quần có một đường line dài. Trên đai có khuy cài cùng khóa kéo. Đằng trước có 2 túi chéo.\r\n\r\nMột chiếc quần basic sẽ giúp nàng hoàn thiện bất cứ set đồ nào. Chất liệu Tuysi thoáng mát nhưng vẫn giữ form tốt, phù hợp cho những cô nàng bận rộn phải di chuyển cả ngày dài. Chi tiết quần được tối giản ở mức cao nhất để giữ lại vẻ sang trọng và thanh lịch mà người mặc hướng đến.\r\n\r\nMàu sắc: Đen',2,30,'2022-08-12 07:29:14','2022-08-19 19:51:42'),(9,'Túi Jacquemus Le Grand Chiquito Leather Top Handbag In Light Pink',18000000,'DSCF6341-1-2048x2041.jpg','<h2><strong>T&uacute;i Jacquemus Le &nbsp;Le Grand Chiquito Leather Top Handbag</strong></h2>\n\n<h2><strong>In Light Pink</strong></h2>\n\n<p>213BA0033060</p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6341-1-scaled.jpg\" style=\"height:2551px; width:2560px\" /></p>\n\n<p>C&oacute; nhiều thương hiệu ra mắt những chiếc t&uacute;i si&ecirc;u nhỏ nhưng cực kỳ thời thượng. Trong đ&oacute; c&oacute; &nbsp;Jacquemus&nbsp; với loạt t&uacute;i mini trong BST Thu Đ&ocirc;ng 2020, hồi sinh chiếc t&uacute;i di sản từng nổi đ&igrave;nh nổi đ&aacute;m.T&uacute;i x&aacute;ch&nbsp;<strong>Jacquemus Le Grand Chiquito</strong>&nbsp;m&agrave;u hồng nữ t&iacute;nh của Jacquemus. Được chế t&aacute;c từ da thật.&nbsp;Thiết kế nắp gập với phần kho&aacute; trang tr&iacute;&nbsp; tạo n&ecirc;n một tổng thể hiện đại, h&agrave;i ho&agrave;, tinh tế.</p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6359-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6351-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6349-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6347-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6346-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6345-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6344-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6343-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6342-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n\n<p>Jacquemus phi&ecirc;n bản Le Grand Chiquito c&oacute; k&iacute;ch thước nhỏ xinh 24 x 18 x 10cm, chắc chắn l&agrave; th&iacute;ch hợp để mang đi chơi, đi dạo phố hơn mẫu full size. Chất liệu da thuộc da thực vật sang trọng kết hợp với d&aacute;ng t&uacute;i lạ mắt, quai x&aacute;ch bằng da chắc chắn khiến cho&nbsp;<strong>Jacquemus Le Grand Chiquito</strong>&nbsp;vừa trẻ trung, năng động nhưng cũng rất s&agrave;nh điệu, trendy.</p>\n\n<p>&nbsp;</p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6377-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n\n<p>&nbsp;</p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6376-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n\n<p>thiết kế tiện &iacute;ch cho người d&ugrave;ng với kh&oacute;a từ t&iacute;nh rất dễ d&agrave;ng cho việc đ&oacute;ng mở. Chiếc kh&oacute;a đ&oacute;ng vai tr&ograve; đảm bảo cho nắp t&uacute;i vừa đ&oacute;ng chặt vừa mở nhẹ nh&agrave;ng, dễ d&agrave;ng sử dụng.</p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6372-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6369-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n\n<p>Chiếc&nbsp;<em>t&uacute;i x&aacute;ch Jacquemus</em>&nbsp;g&acirc;y ấn tượng mạnh bởi thiết kế trẻ trung, năng động v&agrave; v&ocirc; c&ugrave;ng thời thượng. D&aacute;ng t&uacute;i lạ mắt h&igrave;nh hộp chữ nhật khiến c&aacute;c c&ocirc; n&agrave;ng phải y&ecirc;u say đắm ngay khi bộ sưu tập vừa tr&igrave;nh l&agrave;ng v&agrave; khiến mọi t&iacute;n đồ phải chạy theo săn đ&oacute;n để sở hữu được em ấy. Thiết kế d&aacute;ng b&igrave; thư nhưng c&oacute; độ chắc chắn v&agrave; cứng c&aacute;p khiến bạn c&oacute; cảm gi&aacute;c sang trọng v&agrave; chắc tay khi sử dụng.</p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6355-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6374-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF6365-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\n',2,30,'2022-08-19 18:53:47','2022-08-20 07:44:54'),(10,'Giày Dior J’Adior Slingback Pump Black Technical Fabric',7000000,'1-58-1-2048x2048.jpg','<h2><strong>Gi&agrave;y Dior J&rsquo;Adior Slingback Pump Black Technical Fabric</strong></h2>\r\n\r\n<p>Reference:&nbsp;KCC200TFL_S900</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-58-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p>Hội tụ những yếu tố h&agrave;ng đầu để trở th&agrave;nh đ&ocirc;i gi&agrave;y hiệu trong mơ của mọi phụ nữ hiện đại, Dior J&rsquo;adior Slingback pump l&agrave; mẫu gi&agrave;y b&aacute;n chạy nhất của h&atilde;ng trong những năm qua.<br />\r\n<img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-66-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p>Slingback l&agrave; kiểu gi&agrave;y với chỉ một chiếc quai đằng sau gi&uacute;p dễ d&agrave;ng khoe đ&ocirc;i g&oacute;t ch&acirc;n xinh xắn của c&aacute;c n&agrave;ng. Dior J&rsquo;adior c&oacute; thiết kế mũi nhọn, g&oacute;t kitten heels c&oacute; độ cong lạ mắt v&agrave; cao chỉ 6.5cm n&ecirc;n mang l&acirc;u cũng kh&ocirc;ng đau ch&acirc;n. Phần quai th&ecirc;u chữ J&rsquo;adior thắt nơ m&agrave;u đen kết&nbsp;hợp với th&acirc;n gi&agrave;y m&agrave;u cream khiến đ&ocirc;i gi&agrave;y c&agrave;ng th&ecirc;m thanh lịch v&agrave; nữ t&iacute;nh.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-64-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-63-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p>Đế gi&agrave;y bằng da b&ecirc; c&oacute; gắn ng&ocirc;i sao kim loại &ndash; biểu tượng của Dior.<br />\r\nC&aacute;c qu&yacute; c&ocirc; c&oacute; thể mang Dior J&rsquo;adior c&ugrave;ng quần jeans &aacute;o ph&ocirc;ng lẫn đầm maxi tới mắt c&aacute;. D&ugrave; theo phong c&aacute;ch n&agrave;o cũng đầy kh&iacute; chất v&agrave; v&ocirc; c&ugrave;ng sang trọng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-61-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-60-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-59-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-73-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-72-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-98-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-96-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p>C&aacute;c qu&yacute; c&ocirc; c&oacute; thể mang Dior J&rsquo;adior c&ugrave;ng quần jeans &aacute;o ph&ocirc;ng lẫn đầm maxi tới mắt c&aacute;. D&ugrave; theo phong c&aacute;ch n&agrave;o cũng đầy kh&iacute; chất v&agrave; v&ocirc; c&ugrave;ng sang trọng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-93-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-92-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-91-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-89-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-87-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-86-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/1-78-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n',0,30,'2022-08-19 19:23:41','2022-08-19 19:23:41'),(11,'Dép Sandal Gucci Crystal in White',11000000,'DSCF9372-1-2048x2048.jpg','<h2><strong>D&eacute;p Sandal Gucci Crystal in White</strong></h2>\r\n\r\n<p>Gucci nổi tiếng với những thiết kế độc, lạ v&agrave; mang vẻ đẹp lấp l&aacute;nh, cuốn h&uacute;t. Minh chứng r&otilde; r&agrave;ng nhất ch&iacute;nh l&agrave; thiết kế&nbsp;<strong>D&eacute;p Sandal Gucci Crystal in White</strong>&nbsp;tinh xảo ẩn chứa những chi tiết kh&oacute; l&ograve;ng cưỡng lại.</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF9364-2-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p>Sandals đi đầu trong bộ sưu tập Gucci Aria, thử nghiệm c&aacute;c h&igrave;nh dạng v&agrave; chất liệu kh&aacute;c nhau. Đ&ocirc;i xăng đan m&agrave;u trắng tinh th&ocirc;i n&agrave;y được l&agrave;m bằng cao su s&aacute;ng b&oacute;ng v&agrave; c&aacute;c vi&ecirc;n đ&aacute; pha l&ecirc; đ&iacute;nh lấp l&aacute;nh tăng th&ecirc;m cảm gi&aacute;c sang trọng nổi bật th&ocirc;ng qua phần cứng c&oacute; t&ocirc;ng m&agrave;uv&agrave;ng.<img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF9379-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF9378-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF9376-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p>Mẫu D&eacute;p với chất liệu cao su &ecirc;m &aacute;i, thiết kế hiện đại, với gam m&agrave;u thời thượng, với phong c&aacute;ch thời trang c&aacute; t&iacute;nh th&igrave; chắc chắn sẽ l&agrave; mẫu d&eacute;p kh&ocirc;ng thể bỏ qua trong tủ đồ h&agrave;ng hiệu của c&aacute;c c&ocirc; n&agrave;ng</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF9372-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF9369-3-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF9367-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p>Để c&oacute; một si&ecirc;u phẩm tạo cơn sốt tr&ecirc;n thị trường như vậy, Gucci đ&atilde; kh&eacute;o l&eacute;o sử dụng những chất liệu thượng hạng, cao cấp nhất.</p>\r\n\r\n<ul>\r\n	<li>Cao su: Phần đế của gi&agrave;y được tạo n&ecirc;n từ cao su mềm mại, c&oacute; độ đ&agrave;n hồi cao. Lớp cao su tạo cảm gi&aacute;c thoải m&aacute;i v&agrave; gi&uacute;p chị em tự tin hơn mỗi khi di chuyển.</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF9345-Copy-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF9348-1-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF9351-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p>Những đường cắt kho&eacute;t kết hợp với vấu gi&agrave;y dứt kho&aacute;t như tăng th&ecirc;m sự chắc chắn v&agrave; ph&ocirc; diễn hết vẻ đẹp năng động, trẻ trung. Chưa kể, đế gi&agrave;y được độn đến 40mm n&ecirc;n chị em ho&agrave;n to&agrave;n c&oacute; thể thả d&aacute;ng khi diện cực phẩm nh&agrave; Gucci.</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF9353-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF9355-Copy-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF9357-1.jpg\" style=\"height:2315px; width:2315px\" /></p>\r\n\r\n<p>Điều g&igrave; khiến chị em &ldquo;xỉu l&ecirc;n xỉu xuống&rdquo; khi ngắm nh&igrave;n si&ecirc;u phẩm của nh&agrave; Gucci? Đ&oacute; chắc c&oacute; lẽ l&agrave; chi tiết pha l&ecirc; được trang tr&iacute; tuyệt đẹp tr&ecirc;n th&acirc;n d&eacute;p. Một vẻ đẹp c&aacute; t&iacute;nh, ph&aacute; c&aacute;ch xen lẫn thiết kế hiện đại, linh hoạt như &ldquo;đốn tim&rdquo; chị em mỗi khi ngắm nh&igrave;n.</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF9360-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/DSCF9361-Copy-scaled.jpg\" style=\"height:2560px; width:2560px\" /></p>\r\n\r\n<p><strong><strong>D&eacute;p Sandal Gucci Crystal in White</strong>&nbsp;&nbsp;</strong>xứng đ&aacute;ng ngự trị tr&ecirc;n đ&ocirc;i ch&acirc;n b&eacute; nhỏ của chị em. H&atilde;y t&igrave;m ngay cho m&igrave;nh một địa chỉ uy t&iacute;n để &ldquo;rinh&rdquo; ngay em ấy về v&agrave; chi&ecirc;m ngưỡng vẻ đẹp c&oacute; 102 n&agrave;y từ h&ocirc;m nay.</p>\r\n',0,30,'2022-08-19 19:25:43','2022-08-19 19:25:43'),(12,'Dép Gucci Rubber Slide Sandal in Pastel Pink',2000000,'jtyhrthdg.jpg','<h2><strong>D&eacute;p Gucci Rubber Slide Sandal in Pastel Pink</strong></h2>\r\n\r\n<p>M&atilde; : 624730 J8700 5815</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/jtyhrthdg.jpg\" style=\"height:692px; width:837px\" /></p>\r\n\r\n<p>Một sự biến tấu vui nhộn cho một phong c&aacute;ch thiết yếu, sandal Gucci được giới thiệu bằng cao su trắng cho bộ sưu tập Pre-Fall 2020. Nhắc lại phong c&aacute;ch thập ni&ecirc;n 90, một chiếc gi&agrave;y cao g&oacute;t chunky v&agrave; logo in nổi tạo th&ecirc;m sức h&uacute;t cổ điển.</p>\r\n',0,30,'2022-08-19 19:26:33','2022-08-19 19:26:33'),(13,'Đồng Hồ Hermes Cape Cod Watch Small Model 31MM Bleu Navy',3500000,'cape-cod-watch-small-model-31mm-055829WW00-front-1-300-0-800-800_b.jpg','<h2><strong>Đồng hồ Cape Cod watch, 23 x 23 mm l&agrave;m từ chất liệu th&eacute;p kh&ocirc;ng gỉ&nbsp;</strong></h2>\r\n\r\n<p>Chất liệu th&eacute;p kh&ocirc;ng gỉ được lựa chọn để chế t&aacute;c bộ vỏ đồng hồ Cape Cod watch, 23 x 23 mm ch&iacute;nh h&atilde;ng nhằm mang đến vẻ đẹp vừa nhẹ nh&agrave;ng vừa thanh tho&aacute;t. Từng đường n&eacute;t được xử l&yacute; tỉ mỉ gi&uacute;p cho tổng thể sản phẩm th&ecirc;m phần cuốn h&uacute;t, bắt mắt.</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/cape-cod-watch-small-model-31mm-055829WW00-front-1-300-0-800-800_b.jpg\" style=\"height:972px; width:988px\" /></p>\r\n\r\n<p><em>Chất liệu th&eacute;p kh&ocirc;ng gỉ m&agrave;u bạc s&aacute;ng gi&uacute;p cho đồng hồ cuốn h&uacute;t hơn</em></p>\r\n\r\n<p>Ngo&agrave;i chất liệu th&eacute;p kh&ocirc;ng gỉ, Hermes c&ograve;n sử dụng chất liệu da b&ecirc; mềm mại, uyển chuyển, mang lại cảm gi&aacute;c thoải m&aacute;i, dễ chịu khi ngự trị tr&ecirc;n cổ tay người đeo.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/ikuyjtyj.jpg\" style=\"height:594px; width:710px\" /></p>\r\n\r\n<h2><strong>Những điểm nổi bật của sản phẩm&nbsp;</strong></h2>\r\n\r\n<p>Đồng hồ Cape Cod watch, 23 x 23 mm xứng danh &ldquo;con cưng&rdquo; của những qu&yacute; c&ocirc; th&agrave;nh đạt bởi vẻ đẹp ấn tượng từ thiết kế tổng thể b&ecirc;n ngo&agrave;i cho đến bộ m&aacute;y b&ecirc;n trong.&nbsp;</p>\r\n\r\n<p>Về tổng thể, d&aacute;ng vỏ vẫn mang hơi hướng h&igrave;nh chữ H &ndash; biểu tượng đặc trưng của thương hiệu Hermes, chế t&aacute;c từ chất liệu th&eacute;p kh&ocirc;ng gỉ m&agrave;u bạc s&aacute;ng tuyệt đẹp. K&iacute;ch thước bộ vỏ đạt 23 x 23 mm nhỏ gọn, giảm &aacute;p lực l&ecirc;n cổ tay.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/uikyjt.jpg\" style=\"height:688px; width:731px\" /></p>\r\n\r\n<p><em>Mặt số tr&aacute;ng bạc m&agrave;u trắng đục kết hợp chi tiết trang tr&iacute; c&acirc;n đối, ấn tượng</em></p>\r\n\r\n<p>Để tạo một tổng thể to&agrave;n diện, đồng điệu v&agrave; h&agrave;i h&ograve;a, Hermes đ&atilde; sử dụng chất liệu th&eacute;p kh&ocirc;ng gỉ để chế t&aacute;c v&agrave;nh bezel. Thiết kế v&agrave;nh bezel siết chặt lấy lớp k&iacute;nh sapphire gi&uacute;p bảo vệ mặt số v&agrave; bộ m&aacute;y b&ecirc;n trong.&nbsp;</p>\r\n\r\n<p>Mặt số tr&aacute;ng bạc Opaline m&agrave;u trắng đục c&acirc;n đối với m&agrave;u bạc s&aacute;ng của bộ vỏ v&agrave; v&agrave;nh bezel. Cọc số latinh c&aacute;ch điệu kết hợp với bộ kim chỉ giờ &ndash; ph&uacute;t ở trung t&acirc;m được thiết kế đơn giản gi&uacute;p cho mặt số th&ecirc;m phần ấn tượng.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/t45y5.jpg\" style=\"height:586px; width:591px\" /></p>\r\n\r\n<p><em>D&acirc;y đeo d&agrave;i, c&oacute; thể thay đổi linh hoạt</em></p>\r\n\r\n<p>D&acirc;y đeo da b&ecirc; Swift m&agrave;u xanh hải qu&acirc;n mềm mại, &ocirc;m s&aacute;t cổ tay, thiết kế d&agrave;i tạo n&ecirc;n vẻ đẹp độc đ&aacute;o, mới lạ v&agrave; c&oacute; thể linh hoạt thay đổi nhiều m&agrave;u sắc kh&aacute;c nhau.&nbsp;</p>\r\n\r\n<p>Để đảm bảo nhịp đập ổn định cho đồng hồ Cape Cod watch, 23 x 23 mm ch&iacute;nh h&atilde;ng, Hermes sử dụng bộ m&aacute;y Quartz, kh&aacute;ng nước 3bar, c&oacute; thể đi mưa, rửa tay.&nbsp;</p>\r\n\r\n<p>Đồng hồ Cape Cod watch, 23 x 23 mm xịn s&ograve; hiện đang được ph&acirc;n phối tại Centimet với mức gi&aacute; phải chăng, hợp l&yacute;. Nếu qu&yacute; c&ocirc; đang c&oacute; nhu cầu muốn &ldquo;rinh&rdquo; em ấy về với đội của m&igrave;nh, h&atilde;y li&ecirc;n hệ đến Centimet để được tư vấn, hỗ trợ tận t&igrave;nh.&nbsp;</p>\r\n',0,30,'2022-08-19 19:27:26','2022-08-19 19:27:26'),(14,'Ví Louis Vuitton Multiple Wallet Gradient Blue (M81319)',2500000,'z3598678764372_a20928e76cf08772a5c807349dba6faf.jpg','<p>V&iacute; MULTIPLE WALLET to&aacute;t l&ecirc;n vẻ đẹp của sự sang trọng, đẳng cấp v&agrave; khiến bất kỳ ai mỗi khi ngắm nh&igrave;n cũng phải trầm trồ khen ngợi. Mẫu v&iacute; xịn s&ograve; n&agrave;y được Louis Vuitton cực kỳ ưu &aacute;i từ chất liệu cho đến đường kim mũi chỉ. H&atilde;y c&ugrave;ng Centimet t&igrave;m hiểu kỹ hơn về sản phẩm th&ocirc;ng qua b&agrave;i viết dưới đ&acirc;y.&nbsp;</p>\r\n\r\n<h2><strong>Sản phẩm l&agrave;m từ chất liệu vải phủ Damier Stripes</strong></h2>\r\n\r\n<p>Chất liệu vải phủ Damier Stripes được sử dụng để tạo n&ecirc;n sản phẩm v&iacute; MULTIPLE WALLET tuyệt đẹp cuốn h&uacute;t mọi &aacute;nh nh&igrave;n. Đ&acirc;y l&agrave; chất liệu đ&atilde; được xử l&yacute; tỉ mỉ, mang đến cảm gi&aacute;c mềm mại mỗi khi sử dụng.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/z3598678764372_a20928e76cf08772a5c807349dba6faf.jpg\" style=\"height:2000px; width:2000px\" /></p>\r\n\r\n<p><em>MULTIPLE WALLET nổi bật nhờ chất liệu cao cấp</em></p>\r\n\r\n<p>Tone m&agrave;u xanh lam đậm nhạt xen kẽ với nhau v&agrave; tạo hiệu ứng b&agrave;n cờ đặc trưng của thương hiệu Louis Vuitton cực kỳ bắt mắt. M&agrave;u xanh c&ograve;n mang đến cảm gi&aacute;c tươi mới, năng động v&agrave; trẻ trung, ph&ugrave; hợp với những qu&yacute; &ocirc;ng y&ecirc;u th&iacute;ch vẻ đẹp đơn giản, kh&ocirc;ng qu&aacute; cầu kỳ nhưng vẫn to&aacute;t l&ecirc;n n&eacute;t sang trọng, đẳng cấp.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/z3598678768197_89af40949fec74b18e9fae789fe7693c.jpg\" style=\"height:2000px; width:2000px\" /></p>\r\n\r\n<h2><strong>Những chi tiết nổi bật của sản phẩm&nbsp;</strong></h2>\r\n\r\n<p>V&iacute; MULTIPLE WALLET ch&iacute;nh h&atilde;ng được thiết kế theo kiểu d&aacute;ng v&iacute; nằm ngang, gập đ&ocirc;i v&agrave; t&iacute;ch hợp nhiều ngăn đựng b&ecirc;n trong gi&uacute;p qu&yacute; &ocirc;ng dễ d&agrave;ng hơn mỗi khi sử dụng.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/z3598678772874_83f2873d0d9179ab5b30eed4191fc997.jpg\" style=\"height:2000px; width:2000px\" /></p>\r\n\r\n<p><em>Chi tiết trang tr&iacute; mang đậm m&agrave;u sắc của Louis Vuitton</em></p>\r\n\r\n<p>Chi tiết trang tr&iacute; bằng da b&ograve; cao cấp, nổi bật nhờ t&ecirc;n thương hiệu m&agrave;u v&agrave;ng c&ugrave;ng những họa tiết gợi nhớ đến nh&agrave; mốt Louis Vuitton đ&igrave;nh đ&aacute;m tạo n&ecirc;n điểm nhấn ấn tượng kh&oacute; l&ograve;ng chối từ.&nbsp;</p>\r\n\r\n<p>Lớp l&oacute;t b&ecirc;n trong l&agrave;m từ da b&ograve; thượng hạng gi&uacute;p mang đến cảm gi&aacute;c &ecirc;m &aacute;i v&agrave; bảo vệ đồ d&ugrave;ng của qu&yacute; &ocirc;ng một c&aacute;ch ho&agrave;n hảo.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/z3598678771988_86bb72757e3bb58bb5406633eafa251c.jpg\" style=\"height:2000px; width:2000px\" /></p>\r\n\r\n<p><em>Ph&iacute;a b&ecirc;n trong v&iacute; t&iacute;ch hợp nhiều ngăn đựng</em></p>\r\n\r\n<p>K&iacute;ch thước v&iacute; đạt 11.5 x 9 x 1.5 cm kết hợp với 3 khe cắm thẻ, 2 ngăn nhỏ b&ecirc;n trong, 1 ngăn đựng h&oacute;a đơn v&agrave; 2 khe d&agrave;nh đựng bi&ecirc;n lai. Với hệ thống ngăn đựng đa dạng như vậy, qu&yacute; &ocirc;ng ho&agrave;n to&agrave;n c&oacute; thể sắp xếp đồ d&ugrave;ng một c&aacute;ch ngăn nắp, gọn g&agrave;ng khi ra ngo&agrave;i.&nbsp;</p>\r\n\r\n<p>Kiểu d&aacute;ng t&uacute;i nhỏ gọn, c&oacute; thể đựng trong t&uacute;i đeo ch&eacute;o hoặc bỏ v&agrave;o t&uacute;i quần đều được.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/z3598678781595_1adbf41c2b040e3f9ac2f03b49dfc3cc.jpg\" style=\"height:2000px; width:2000px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/z3598678769607_b183dc4af31718fecb3edc1440bede15.jpg\" style=\"height:2000px; width:2000px\" /></p>\r\n\r\n<h2><strong>Địa chỉ cung cấp v&iacute; ch&iacute;nh h&atilde;ng tại Việt Nam&nbsp;</strong></h2>\r\n\r\n<p>V&iacute; MULTIPLE WALLET ch&iacute;nh h&atilde;ng hiện đang được b&aacute;n tại Centimet với mức gi&aacute; phải chăng, hợp l&yacute; nhất. So với c&aacute;c store Louis Vuitton ở Việt Nam th&igrave; gi&aacute; b&aacute;n tại Centimet kh&ocirc;ng chỉ mềm hơn m&agrave; c&ograve;n d&agrave;nh tặng rất nhiều ưu đ&atilde;i như bảo h&agrave;nh ch&iacute;nh h&atilde;ng, ưu đ&atilde;i hậu m&atilde;i cực kỳ hấp dẫn.&nbsp;</p>\r\n\r\n<p>Nếu qu&yacute; kh&aacute;ch đang muốn rước ngay v&iacute; MULTIPLE WALLET về với đội của m&igrave;nh th&igrave; h&atilde;y li&ecirc;n hệ đến Centimet ngay h&ocirc;m nay để được tư vấn, hỗ trợ nhiệt t&igrave;nh. Đội ngũ nh&acirc;n vi&ecirc;n của Centimet sẵn s&agrave;ng phục vụ v&agrave; giải đ&aacute;p mọi thắc mắc li&ecirc;n quan 24/7.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n',1,31,'2022-08-19 19:28:06','2022-08-19 19:51:35'),(15,'Áo Phông Polo Burberry Hartford (Red))',3000000,'bbr-do-1.jpg','<p>Thương hiệu thời trang mang kh&iacute; chất thanh tao m&agrave; kh&ocirc;ng ai kh&ocirc;ng biết đến, được s&aacute;ng lập bởi Thomas Burberry v&agrave;o năm 1856 khi &ocirc;ng mới chỉ 21 tuổi. Trải qua hơn 160 năm th&agrave;nh lập v&agrave; ph&aacute;t triển, Burberry ng&agrave;y nay đ&atilde; trở th&agrave;nh một tượng đ&agrave;i thời trang kh&ocirc;ng thể đ&aacute;nh bại. Thương hiệu từ l&acirc;u đ&atilde; trở th&agrave;nh biểu tượng của thời trang Anh v&agrave; l&agrave; niềm tự h&agrave;o của xứ sở sương m&ugrave;, g&oacute;p phần đưa vương quốc Anh trở th&agrave;nh một trong bốn kinh đ&ocirc; thời trang tr&ecirc;n thế giới.</p>\r\n\r\n<p>Burberry hoạt động kinh doanh tr&ecirc;n đa dạng sản phẩm thời trang nữ, nam giới v&agrave; trẻ em, bao gồm cả gi&agrave;y d&eacute;p, mỹ phẩm, nước hoa v&agrave; phụ kiện với ba d&ograve;ng sản phẩm ch&iacute;nh l&agrave; Burberry Prorsum, Burberry London v&agrave; Burberry Brit Đồng nhằm đ&aacute;p ứng nhu cầu của c&aacute;c nh&oacute;m đối tượng kh&aacute;ch h&agrave;ng kh&aacute;c nhau.</p>\r\n\r\n<p>Đặc trưng thiết kế của thương hiệu Burberry l&agrave; phong c&aacute;ch lịch l&atilde;m, đơn giản v&agrave; to&aacute;t l&ecirc;n một vẻ lạnh l&ugrave;ng độc đ&aacute;o. Những thiết kế của Burberry đ&ograve;i hỏi sự chuẩn mực từ cấu tr&uacute;c may đến phom d&aacute;ng v&agrave; chất vải. Điểm đặc biệt l&agrave; những sản phẩm của Burberry đều rất tiện lợi cho mọi hoạt động của người mặc d&ugrave; l&agrave; sản phẩm thời trang cao cấp.</p>\r\n\r\n<p>Chắc hẳn trong tủ quần &aacute;o của bạn kh&ocirc;ng thể thiếu được những thiết kế của Burberry như chiếc &aacute;o ph&ocirc;ng Polo Hardford n&agrave;y. Chiếc &aacute;o với thiết kế đơn giản với 3 c&uacute;c c&agrave;i ở cổ, chi tiết kẻ ở phần c&uacute;c l&agrave;m chiếc &aacute;o c&oacute; th&ecirc;m điểm nhấn. Logo của h&atilde;ng được th&ecirc;u c&ugrave;ng m&agrave;u tỉ mỉ v&agrave; cẩn thận b&ecirc;n tay tr&aacute;i. Với chất liệu 100% cotton, polo Burberry Hardford tạo n&ecirc;n sự dễ chịu v&agrave; thoải m&aacute;i cho người sử dụng.</p>\r\n',0,31,'2022-08-19 19:29:06','2022-08-19 19:29:17'),(16,'Áo Phông Polo Burberry Hartford',3000000,'untitled-1-of-1.jpg','<p><strong>&Aacute;o Ph&ocirc;ng Polo Burberry Hartford</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/untitled-1-of-1.jpg\" style=\"height:900px; width:600px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/bbr-vang-1.jpg\" style=\"height:900px; width:600px\" /><img alt=\"\" src=\"https://centimet.vn/wp-content/uploads/bbr-vang-3.jpg\" style=\"height:1280px; width:1920px\" /></p>\r\n\r\n<p>Thương hiệu thời trang mang kh&iacute; chất thanh tao m&agrave; kh&ocirc;ng ai kh&ocirc;ng biết đến, được s&aacute;ng lập bởi Thomas Burberry v&agrave;o năm 1856 khi &ocirc;ng mới chỉ 21 tuổi. Trải qua hơn 160 năm th&agrave;nh lập v&agrave; ph&aacute;t triển, Burberry ng&agrave;y nay đ&atilde; trở th&agrave;nh một tượng đ&agrave;i thời trang kh&ocirc;ng thể đ&aacute;nh bại. Thương hiệu từ l&acirc;u đ&atilde; trở th&agrave;nh biểu tượng của thời trang Anh v&agrave; l&agrave; niềm tự h&agrave;o của xứ sở sương m&ugrave;, g&oacute;p phần đưa vương quốc Anh trở th&agrave;nh một trong bốn kinh đ&ocirc; thời trang tr&ecirc;n thế giới.</p>\r\n\r\n<p>Burberry hoạt động kinh doanh tr&ecirc;n đa dạng sản phẩm thời trang nữ, nam giới v&agrave; trẻ em, bao gồm cả gi&agrave;y d&eacute;p, mỹ phẩm, nước hoa v&agrave; phụ kiện với ba d&ograve;ng sản phẩm ch&iacute;nh l&agrave; Burberry Prorsum, Burberry London v&agrave; Burberry Brit Đồng nhằm đ&aacute;p ứng nhu cầu của c&aacute;c nh&oacute;m đối tượng kh&aacute;ch h&agrave;ng kh&aacute;c nhau.</p>\r\n\r\n<p>Đặc trưng thiết kế của thương hiệu Burberry l&agrave; phong c&aacute;ch lịch l&atilde;m, đơn giản v&agrave; to&aacute;t l&ecirc;n một vẻ lạnh l&ugrave;ng độc đ&aacute;o. Những thiết kế của Burberry đ&ograve;i hỏi sự chuẩn mực từ cấu tr&uacute;c may đến phom d&aacute;ng v&agrave; chất vải. Điểm đặc biệt l&agrave; những sản phẩm của Burberry đều rất tiện lợi cho mọi hoạt động của người mặc d&ugrave; l&agrave; sản phẩm thời trang cao cấp.</p>\r\n\r\n<p>Chắc hẳn trong tủ quần &aacute;o của bạn kh&ocirc;ng thể thiếu được những thiết kế của Burberry như chiếc &aacute;o ph&ocirc;ng Polo Hardford n&agrave;y. Chiếc &aacute;o với thiết kế đơn giản với 3 c&uacute;c c&agrave;i ở cổ, chi tiết kẻ ở phần c&uacute;c l&agrave;m chiếc &aacute;o c&oacute; th&ecirc;m điểm nhấn. Logo của h&atilde;ng được th&ecirc;u c&ugrave;ng m&agrave;u tỉ mỉ v&agrave; cẩn thận b&ecirc;n tay tr&aacute;i. Với chất liệu 100% cotton, polo Burberry Hardford tạo n&ecirc;n sự dễ chịu v&agrave; thoải m&aacute;i cho người sử dụng.</p>\r\n',0,31,'2022-08-19 19:29:55','2022-08-19 19:30:11');
/*!40000 ALTER TABLE `sanpham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'luong hoang phat','','phatlhps14778@fpt.edu.vn','2022-08-15 01:47:43','$2y$10$mZmwYJqWwHFWPSq3sDaAv.b8ZkgzCNtH.n0KcLbEgvearIYX0tSMe',NULL,'2022-08-12 03:56:17','2022-08-15 01:47:43'),(2,'luonghoangphat1','','luonghoangphat2001@gmail.com','2022-08-15 01:43:32','$2y$10$2rUJy7HZvZpPmJfQBvkr9.DUBj7Pguf4ud5r4/z8IsNHFJLJFPg1.',NULL,'2022-08-12 04:41:51','2022-08-15 01:43:32');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-20 22:50:03
