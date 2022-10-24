-- MySQL dump 10.13  Distrib 5.7.39, for Linux (x86_64)
--
-- Host: localhost    Database: w_msu
-- ------------------------------------------------------
-- Server version	5.7.39-0ubuntu0.18.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aboutcards`
--

DROP TABLE IF EXISTS `aboutcards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aboutcards` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `adout_card_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `adout_card_text` text COLLATE utf8mb4_unicode_ci,
  `adout_card_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aboutcards`
--

LOCK TABLES `aboutcards` WRITE;
/*!40000 ALTER TABLE `aboutcards` DISABLE KEYS */;
INSERT INTO `aboutcards` VALUES (3,'storage/EqVc5MimDZQP0LiGmXfnLBOjYMeqiwW1j4SXO1kb.png','Присвоен статус участника \"Стартап\" <br>в иновационном центре \"Сколково\"','2021-01-21','2022-10-05 08:37:02','2022-10-05 08:37:02'),(4,'storage/us6HS28ZJF9MIpjMpDGxEzDi2Rl0IQEnJvvrfIx4.png','Включение в реестр надежных <br> поставщиков АО <br>\"Корпорация развития Енисейской Сибири\"','2019-10-04','2022-10-05 08:38:52','2022-10-06 07:39:57');
/*!40000 ALTER TABLE `aboutcards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aboutdocs`
--

DROP TABLE IF EXISTS `aboutdocs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aboutdocs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `adout_doc_file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `adout_doc_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aboutdocs`
--

LOCK TABLES `aboutdocs` WRITE;
/*!40000 ALTER TABLE `aboutdocs` DISABLE KEYS */;
/*!40000 ALTER TABLE `aboutdocs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `abouttexts`
--

DROP TABLE IF EXISTS `abouttexts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abouttexts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `about_subtitle` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouttexts`
--

LOCK TABLES `abouttexts` WRITE;
/*!40000 ALTER TABLE `abouttexts` DISABLE KEYS */;
INSERT INTO `abouttexts` VALUES (1,'<span class = \"bold\">«Модульные Системы Управления» (\"МСУ\")</span> — это компания, которая осуществляет высокотехнологичные программно-аппаратные  разработки для управления дорожной инфраструктурой города,  региона, организации дорожного движения, повышения безопасности на дорогах, управления транспортными потоками и светофорными объектами, мониторинга транспорта, управления платными парковками и т.д. а также является производителем оборудования: контроллеров светофорных объектов, тактических детекторов транспорта, интеллектуальных кнопок вызова пешеходных и звуковых устройств.\r\n<br>Работа ведётся на базе новейших достижений в области программного обеспечения, разрабатывается на современных языках программирования, штатом собственных программистов и инженеров.','2022-10-04 05:45:02','2022-10-05 08:15:55');
/*!40000 ALTER TABLE `abouttexts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `contact_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_title` text COLLATE utf8mb4_unicode_ci,
  `contact_adress` text COLLATE utf8mb4_unicode_ci,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
-- Table structure for table `mainslides`
--

DROP TABLE IF EXISTS `mainslides`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mainslides` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image_mine_slide` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_title_mine_slide` text COLLATE utf8mb4_unicode_ci,
  `g_title_mine_slide` text COLLATE utf8mb4_unicode_ci,
  `subtitle_mine_slide` text COLLATE utf8mb4_unicode_ci,
  `link_mine_slide` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mainslides`
--

LOCK TABLES `mainslides` WRITE;
/*!40000 ALTER TABLE `mainslides` DISABLE KEYS */;
INSERT INTO `mainslides` VALUES (2,'storage/ExTsgzvatWrwAkxtl983Bwwu1fQRQTm77y7zic0i.png',NULL,'ЕПУТС','Единая платформа управления транспортной системой определяет правила взаимодействия подсистем и модулей внутри ИТС','/app-hard-product-single-page/2','2022-10-07 06:33:21','2022-10-07 06:34:10'),(3,'storage/OmO2MAeISG0o40qto7EkjafBs5Vx4LKxwEZFlmx1.png','Контроллер дорожный универсальный','\"КДУ ПОТОК\"','для регулирования светофорных объектов','/app-product-single-page/3','2022-10-07 13:40:15','2022-10-07 13:42:29');
/*!40000 ALTER TABLE `mainslides` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_08_07_212407_create_contacts_table',1),(6,'2022_09_14_214418_create_products_table',1),(7,'2022_09_20_190139_create_mainslides_table',1),(8,'2022_09_20_212335_create_abouttexts_table',1),(9,'2022_09_20_232345_create_aboutcards_table',1),(10,'2022_09_21_003418_create_aboutdocs_table',1),(11,'2022_09_21_200427_create_news_table',1),(12,'2022_09_26_221444_create_projects_table',1),(13,'2022_09_28_192738_create_partners_table',1),(14,'2022_09_28_231630_create_swarranties_table',1),(15,'2022_09_28_231655_create_smanuals_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `thumbnail_news` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_news` text COLLATE utf8mb4_unicode_ci,
  `b_title_news` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_title_news` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_news` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_text_news` text COLLATE utf8mb4_unicode_ci,
  `bottom_text_news` text COLLATE utf8mb4_unicode_ci,
  `elink_text_news` text COLLATE utf8mb4_unicode_ci,
  `elink_link_news` text COLLATE utf8mb4_unicode_ci,
  `description_news` text COLLATE utf8mb4_unicode_ci,
  `keywords_news` text COLLATE utf8mb4_unicode_ci,
  `date_news` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'storage/6WIri3n7592v9W1Ga3ppTcYXM0OPwfrU9ReiG7bq.png','storage/G0QRRSdGTRsBGoXO7lwrjCFeiGAIQJsNVkNPOonq.png','Выставка','\"ДОРОГА 2022\"','Компания \"МСУ\" примет участие в выстовке \"Дорога 2022\" <br>в г. Казань 12-14 октября 2022г.','12-14 октября 2022г в МВЦ «Казань ЭКСПО» г. Казань, пройдет международная специализированная выставка-форум \"Дорога 2022\"','Масштабное мероприятие традиционно проводится в преддверии <span class = \"green bold\">Дня работников дорожного хозяйства</span> при поддержке <span class = \"bold\">Министерства транспорта Российской Федерации.</span>\r\n<br>Компания \"МСУ\" примет участие в выставке, найти нас можно будет на стенде В2-16.','12-14 октября  МВЦ «Казань ЭКСПО»','http://doroga2022.ru',NULL,NULL,'2022-09-30','2022-10-05 07:21:44','2022-10-06 06:03:16'),(3,'storage/HdtZ3tUeFVVtztUed1ELhzeLBXnyxVIgb3orPrmH.png','storage/23Dak1ddYQRkRjVuZjKX3Oq0HEgTjpS27zzKZLXS.png','Форум деловых кругов','Согдийской области Таджикистана','16 сентября 2022г. компания \"МСУ\" стала участником форума деловых кругов в городе Худжанде, Таджикистана.','16 сентября 2022г. компания \"МСУ\" в лице генерального директора Митюхина Дениса Валерьевич приняла участие в выставке-ярмарке промышленной продукции и Форуме деловых кругов в городе Худжанде, которую посетили предприниматели Таджикистана и Российской Федерации.','Среди гостей мероприятия — заместитель председателя Согдийской области Таджикистана Анвар Якуби.','Форуме деловых кругов Согдийской области Таджикистана','https://krasnoyarsk.tpprf.ru/ru/news/470369/',NULL,NULL,'2022-09-16','2022-10-06 07:30:32','2022-10-06 21:36:09'),(4,'storage/4Dkkn5bPstC3jcx9Lb8TQYlw3MsVUsOSKz594Jhl.png','storage/MQUlARoWQwixisozlqAwX92lTQn43fPFtPjo0kfc.png','Международный форум','Kazan Digital Week 2022','Руководитель компании \"МСУ\" был спикером на Международном форуме Kazan Digital Week 2022','Руководитель компании \"МСУ\" Митюхин Денис Валерьевич','был спикером на Международном форуме Kazan Digital Week 2022 который прошел 22-24 октября 2022г.','Kazan Digital Week 2022','https://kazandigitalweek.com/ru/site',NULL,NULL,'2022-09-24','2022-10-07 12:20:27','2022-10-07 12:22:47');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image_partner` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_partner` text COLLATE utf8mb4_unicode_ci,
  `data_title_partner` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` VALUES (1,'storage/cccuGccOYR85XvLd8GGz8G6dHAzb6nfCScT9OW5j.png','https://i-techniks.ru',NULL,'2022-10-05 00:52:33','2022-10-07 12:45:45'),(2,'storage/bOtSfsVVCJwKBJ4smtZ84SC6x52qF3G13lTMNNjF.png','https://3390017.ru',NULL,'2022-10-05 00:54:24','2022-10-05 00:54:24'),(3,'storage/RmjeXqllAiIcidyOTUJzrqLkjw88LwNer4WxGeeZ.png','http://briz2001.ru/gruppa-kompaniy-briz/',NULL,'2022-10-07 12:46:16','2022-10-07 12:46:16'),(4,'storage/GQPSYx0co5vzSQUmpSlAn1ZDLiJ5XakYGZfQTnsO.png','http://briz2001.ru/gruppa-kompaniy-briz/briz-tsentr/',NULL,'2022-10-07 12:46:42','2022-10-07 12:46:42'),(5,'storage/O3UiPVgRsKYqeAbBYmu7E1xkYeDX4Y6fR9LdXt2Y.png','http://briz2001.ru/gruppa-kompaniy-briz/briz-zapad/',NULL,'2022-10-07 12:46:56','2022-10-07 12:46:56'),(6,'storage/hB91dBNssNCxw6pgm4x5RChORCkMa5u2GBvb9Aga.png','http://briz2001.ru/gruppa-kompaniy-briz/briz-vostok/',NULL,'2022-10-07 12:47:07','2022-10-07 12:47:07'),(7,'storage/4UBzfCBNe6TzQplQTNa8aj99yF6daOmOIaDYN1SX.png','https://krasdorznak.ru',NULL,'2022-10-07 12:47:18','2022-10-07 12:47:18');
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
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
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `single_page_bico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `single_page_gico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nav_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_single_page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_single_page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `single_page_slides` text COLLATE utf8mb4_unicode_ci,
  `single_page_sudtitle` text COLLATE utf8mb4_unicode_ci,
  `single_page_purpose` text COLLATE utf8mb4_unicode_ci,
  `single_page_parameters` text COLLATE utf8mb4_unicode_ci,
  `single_page_documents` text COLLATE utf8mb4_unicode_ci,
  `single_page_metadescription` text COLLATE utf8mb4_unicode_ci,
  `single_page_metakeywords` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,'product_type-2','storage/NV11BeulvaKWgFUUIE2JqQTvYOo3Z0GqpnwL63ie.png','storage/tNzMQBMRiqUOjMxJ9wPqREEGl3GmuV94PZkMlWWc.png','ЕПУТС','ЕПУТС','Едина Платформа Управления Транспортной Системой','[\"public\\/Jlw3KpBhSlvlKa53tvNNjKZFk6wH8igd2aDsTeGA.png\"]','Единая платформа управления транспортной системой определяет правила взаимодействия подсистем и модулей внутри ИТС','• Мониторинг работоспособности подключенных модулей и подсистем\r\n<br>• Управление правами и ролями пользователей ИТС\r\n<br>• Система имеет повышенную отказоустойчивость за счет использования кластерных технологий и разнесённых систем \r\n<br>• Формирование доступа пользователей через удалённые рабочие столы с распределением прав и ролей доступа\r\n<br>• Платформа поддерживает работу на операционных системах:  Linux, Windows\r\n<br>• Открытое API для интеграции с другими модулями / подсистемами ИТС\r\n<br>• Открытое API для интеграции с другими системами',NULL,'{\"\\u0421\\u0432\\u0438\\u0434\\u0435\\u0442\\u0435\\u043b\\u044c\\u0441\\u0442\\u0432\\u043e \\u043e \\u0433\\u043e\\u0441 \\u0440\\u0435\\u0433\\u0438\\u0441\\u0442\\u0440\\u0430\\u0446\\u0438\\u0438 \\u0415\\u041f\\u0423\\u0422\\u0421.pdf\":\"public\\/OyF8tQNZjDVhbaZJB2HEJZZxNkjkqdHWrt0iF4TN.pdf\"}',NULL,NULL,'2022-10-04 05:05:45','2022-10-07 06:06:30'),(3,'product_type-1','storage/wFt2pi7pfbjrJaFrVIKzwb9I1MTBT0ae13MHeUIq.png','storage/W5JLIWgcLkyAC5bGyjKxa9IXoS9Vbv1GlmWcpPC2.png','Дорожный контроллер <br>\"КДУ ПОТОК\"','Контроллер дорожный универсальный','\"КДУ ПОТОК\"','[\"public\\/rn59SzS3WgcgdHHQFHlryv3MVMsldDUC9qDqnCOY.png\",\"public\\/gPGzq9GTM8gBytXrmE9QlHpohewh41CJpdLcGq9p.png\"]','<span class = \"bold\">Контроллер дорожный универсальный</span> <span class = \"green bold\">\"КДУ-ПОТОК\"</span> для регулирования светофорных объектов.','<span class = \"bold\">\"КДУ-ПОТОК\"</span> предназначен для переключения сигналов светофоров, символов управляемых многопозиционных знаков и указателей скорости как на локальном перекрестке, так и на перекрестке, входящем в систему координированного управления дорожным движением ИТС','{\"key\":\"Количество подключаемых каналов\",\"val\":\"32\"},{\"key\":\"Диапазон тока нагрузки одной выходной силовой цепи\",\"val\":\"0,02…0,5 А\"},{\"key\":\"Максимальный общий ток нагрузки коммутируемый в любой момент времени\",\"val\":\"20 А\"},{\"key\":\"Максимальное количество направлений движения, обслуживаемых одним контроллером «ПОТОК»\",\"val\":\"16\"},{\"key\":\"Максимальное количество программ управления светофорным объектом\",\"val\":\"неограниченно\"},{\"key\":\"Дискретность изменения длительности основных и промежуточных тактов\",\"val\":\"1 с\"},{\"key\":\"Потребляемая мощность не более\",\"val\":\"30 Вт\"},{\"key\":\"Напряжение питания\",\"val\":\"220 В ±10%\"},{\"key\":\"Температура окружающего воздуха\",\"val\":\"от -40°С до +60°С\"},{\"key\":\"Наработка на отказ\",\"val\":\"не менее 10000 часов\"},{\"key\":\"Среднее время восстановления\",\"val\":\"не более 2 часов\"},{\"key\":\"Срок службы\",\"val\":\"5 лет\"}','{\"\\u0421\\u0435\\u0440\\u0442\\u0438\\u0444\\u0438\\u043a\\u0430\\u0442 \\u0441\\u043e\\u043e\\u0442\\u0432\\u0435\\u0442\\u0441\\u0442\\u0432\\u0438\\u044f \\u0413\\u041e\\u0421\\u0422 \\u0420 \\u041a\\u0414\\u0423 \\u041f\\u041e\\u0422\\u041e\\u041a.pdf\":\"public\\/PyUVxcpxy6TJWJDTddAy0K0kE68gzpW9jzixIpnH.pdf\",\"\\u0421\\u0435\\u0440\\u0442\\u0438\\u0444\\u0438\\u043a\\u0430\\u0442 \\u0441\\u043e\\u043e\\u0442\\u0432\\u0435\\u0442\\u0441\\u0442\\u0432\\u0438\\u044f \\u0422\\u0420 \\u0422\\u0421 \\u043a\\u043e\\u043d\\u0442\\u0440\\u043e\\u043b\\u043b\\u0435\\u0440 \\u041a\\u0414\\u0423 \\u041f\\u041e\\u0422\\u041e\\u041a.pdf\":\"public\\/Wj7Telu7WHva14CDARQ4rdzpXyUsr9bm2xqOBTxr.pdf\"}',NULL,NULL,'2022-10-04 05:25:13','2022-10-07 00:24:41'),(4,'product_type-2','storage/zOPTLR4lk9UDQlTGLuaZwqTJe6c1kxwrekLUHOAb.png','storage/WiJgmxRF4HVHew0ZdyGkQDMFvdAW9Kq01kvxfjif.png','Геоинформационная система<br>сбора, хранения, анализа<br>и визуализации данных','Геоинформационная система','сбора, хранения, анализа и графической визуализации данных','[\"public\\/3Nnn150cRK7Ic5XZnnBFDYg4HvXtxXarHEVESlnY.png\"]','Геоинформационная система сбора, хранения, анализа и графической визуализации данных предоставляет сервисы для геопозиционирования объектов модулей и подсистем ИТС и визуализации объектов на картографических подложках.','• Сбор, хранение, анализ и графическая визуализация геообъектов городской инфраструктуры (дома, дороги, дорожные знаки, светофоры, световые опоры, закреплённые территории, остановки общественного транспорта и др.), специализированные геообъекты (ДТП, места концентрации ДТП, места работ, ведущихся на улично-дорожной сети, и др.)\r\n\r\n<br>• Визуализация в режиме реального времени на картографической подложке статусов геобъектов и детализированной информации не менее 5000 объектов с предоставлением сервиса управления слоями данных – включение и отключение слоёв\r\n\r\n\r\n<br>• Создания объектов типа: точка, линия, зона, посредством интерфейса\r\n<br>• Экспорт геоданных объектов в форматы: XLSX, JSON, CSV',NULL,'{\"\":\"\"}',NULL,NULL,'2022-10-06 02:26:13','2022-10-08 09:27:43'),(7,'product_type-1','storage/NrSMCl6MqEsmqgwEu8b3YvtJJDhcY5wCyIwWVo5D.png','storage/pbLyCxB1G4FcR1Kezlouc2ddVQXaoCsdXnR4x1YF.png','Детектор транспорта <br>\"ОПТИК\"','Детектор транспорта','\"ОПТИК\"','[\"public\\/EhJTVCXS0jhQuIogjo6XJN9NPpBGVOW1c2My0FbQ.png\",\"public\\/M3RUyxkb3mc8TVTcN5a3VcrlXUi4MsTksHHNG0PJ.png\"]','<span class = \"bold\">Детектор транспорта</span> <span class = \"green bold\">\"ОПТИК\"</span> - техническое средство, предназначенное для обнаружения транспортных средств, регистрации прохождения количества транспортных средств через зону детекции и определения параметров транспортных потоков.','Подсчет приведенных автомобилей.\r\n<br>Фиксация прохождения транспортных средств по каждой полосе в реальном масштабе времени.\r\n<br>Получение в реальном времени таких параметров транспортных потоков, как: наличие транспортного средства, скорости потока.','{\"key\":\"Погрешность\",\"val\":\"не более 10% при благоприятных погодных условиях*\"},{\"key\":\"   \",\"val\":\"*благоприятные погодные условия - состояние погоды, при котором метеорологические факторы не оказывают отрицательного влияния на состояние поверхности дороги, скорость и безопасность движения автомобилей (сухо, ясно, отсутствие ветра или ветер со скоростью до 10 м/с, отсутствие тумана, относительная влажность воздуха до 90 %, температура воздуха в пределах от -40 °С до +40 °С в тени)\"},{\"key\":\"Расчет интенсивности потока\",\"val\":\"от 0 до 2000 ед/час\"},{\"key\":\"Расчет скорости транспортных средств\",\"val\":\"от 10 до 120 км/час\"},{\"key\":\"Минимальные размеры транспортного средства\",\"val\":\"длина: от 2 м, ширина: от 1,3 м\"},{\"key\":\"Количество контролируемых полос движения\",\"val\":\"до 2 полос\"},{\"key\":\"Напряжение питания\",\"val\":\"220В ±10%\"},{\"key\":\"Потребляемая мощность\",\"val\":\"не более 30 Вт\"},{\"key\":\"Диапазон рабочей температуры\",\"val\":\"от -40°С до +50°С\"}','[]',NULL,NULL,'2022-10-06 02:55:06','2022-10-07 00:29:54'),(13,'product_type-1','storage/j5cxP1Z9MbBlj9I9K51i1d3v45evalycz6ii5eun.png','storage/8HjX1dHNdLuKa0zTkEftm9j6ouiuc2FAflvg6y4D.png','Интеллектуальная кнопка <br>вызова пешехода<br>\"ТВП ПОТОК\"','Интеллектуальная кнопка вызова пешехода','\"ТВП ПОТОК\"','[\"public\\/34ZRZj2odfCADzXmIIUUjRcuiI0efNc2c6uz0KFx.png\"]','<span class=\"bold\">Интеллектуальная кнопка вызова пешехода</span> <span class=\"green bold\">\"ТВП ПОТОК\"</span> - предназначена для управления светофором на пешеходном переходе или перекрестке — по требованию пешехода.','<span class=\"bold\">\"ТВП ПОТОК\"</span> - обеспечивает включение зеленого сигнала пешеходного светофора. \r\nОбеспечивает безопасность движения на пешеходном переходе и сокращает задержки транспорта.\r\nСохраняет координированное управление светофорным объектом.','{\"key\":\"Способ вызова пешеходной фазы\",\"val\":\"беcконтактый (сенсорный датчик)\"},{\"key\":\"Информирование пешехода\",\"val\":\"ТООВ (табло обратного отсчёта времени)\"},{\"key\":\"Протокол взаимодействия с \'КДУ ПОТОК\'\",\"val\":\"ТВП 1.0 (открытый)\"},{\"key\":\"Напряжение питания\",\"val\":\"220В ±10%\"},{\"key\":\"Потребляемая мощность\",\"val\":\"не более 30 Вт\"},{\"key\":\"Диапазон рабочей температуры \",\"val\":\"от -40°С до +50°С\"}','[]',NULL,NULL,'2022-10-06 07:02:30','2022-10-07 00:26:33'),(15,'product_type-2','storage/lzhrklIvtVCKRl0FnbahLzPLKZOzYDR5rJpJYhDa.png','storage/mg6x2GPY2bXw58D0iiB8J6r3iIMXX73Y4gAb5I0a.png','подсистема <br>Светофорного регулирования','подсистема','Светофорного регулирования','[\"public\\/NzTZLLgRPM3o2bOMWWNzscPZlYP5l4EPV1fhCsH5.png\",\"public\\/SblcdP0zPRQffucOJWQoTIRdtUM9QESFJwOOy2V9.png\"]','подсистема Светофорного управление  предназначена для удалённого централизованного управления и мониторинга состояния светофорных объектов (СО)','• Предоставление данных о СО другим модулям ИТС или сторонним системам по открытому протоколу\r\n\r\n<br>• Работа с дорожными контроллерами, работающими по принципу статичных фаз и гибкой многокольцевой схемы, различных производителей в едином интерфейсе диспетчера\r\n<br>• Удалённое управление работой СО, смена фаз СО, создание и редактирования планов координации, расписаний работы СО и загрузка в дорожные контроллеры управляющих программ\r\n\r\n<br>• Сбор, хранение и отображение телеметрической информации о состоянии и работоспособности СО\r\n\r\n<br>• Аудит действий пользователей и событий объектов системы, формирование отчёта по действиям пользователя и событиям объекта\r\n<br>• Сохранение архива информации о СО при замени ДК',NULL,'[]',NULL,NULL,'2022-10-07 01:38:55','2022-10-07 08:53:11'),(16,'product_type-2','storage/WGUv2Qj4EMhIUHxkFioDXRwDKJSw3Q9pJe9EH8hy.png','storage/fA6RS2lM6EYtYP2liD3KsXPuZVM1dOqnW2SwL4u9.png','модуль <br>Координированного <br>управления движением','модуль','Координированного управления движением','[\"public\\/BtQg1w38d8UbMWQqbadWhCQVZofo8fDdb2mfdjXL.png\",\"public\\/ErCIbE56kt2rmtaoW7Avlis0QkyX1ziKpJi2kXSM.png\"]','модуль Координированного управления движением предоставляет сервисы для управления группой СО как единым целым.\r\n<br>(для работы модуля требуется наличия в системе ИТС подсистемы “Светофорное управление”)','• Создание / изменение / удаление из СО групп координации для координированного управления дорожным движением\r\n\r\n<br>• Управление длительностью, координацией сигналов СО в группе координации\r\n\r\n<br>• Формирование рекомендаций по координированному управлению СО на базе накопленной архивной информации\r\n\r\n<br>• Создание программ координации, целью которых является организация на участке дорожной сети режимов с единым или последовательным стартом: -	зелёная улица, - красная улица\r\n\r\n<br>• Сбор и хранение данных о работе групп координации\r\n\r\n<br>• Открытое API для интеграции с другими модулями / подсистемами',NULL,'[]',NULL,NULL,'2022-10-07 01:42:50','2022-10-07 11:51:32'),(17,'product_type-2','storage/0sXtH6mu44rPhS0m6LvcX15Kkp2wdKnIaGT9VKzD.png','storage/r81qKrrYN7GM6VnpvXk4xFLcW2pOeCid5f15MCfC.png','модуль <br>Конфигурации сценарных<br>планов управления движением','модуль','Конфигурации сценарных планов управления движением','[\"public\\/BZLw0TcLUt36Vvgwed0CMTrKgPvKfHcSRNpJzaMV.png\",\"public\\/fQ0Q6E2seURIfFbA3BxqWZv0EWKZTif8WnrC0qSj.png\"]','модуль \"Конфигурация сценарных планов управления движением\" предоставляет сервисы для конфигурации сценариев управления дорожным движением транспорта на дорогах общего пользования.\r\n<br>(для работы модуля требуется наличия в системе ИТС подсистемы “Светофорное управление” и подсистемы \"Мониторинг параметров транспортных потоков\")','• Создание / изменение / удаление групп СО для конфигурирования сценарных планов управления дорожным движением\r\n\r\n<br>• Анализ текущей транспортной ситуации выбранного СО или группы СО на основе специальных алгоритмов с учетом текущей загруженности УДС\r\n\r\n<br>• Расчёт сцен на основе статистических данных подсистемы \"Мониторинг параметров транспортных потоков\" и модуля транспортного прогнозирования и моделирования\r\n\r\n<br>• Проводит анализ и предоставляет планы управления СО / группы СО на основе накопленных данных подсистемы мониторинга ТП и подсистемы управления СО\r\n\r\n<br>• Организация работы ручного, адаптивного, адаптивно-координированного режимов СО в онлайн режиме',NULL,'[]',NULL,NULL,'2022-10-07 01:46:40','2022-10-07 08:56:08'),(18,'product_type-2','storage/LrNE09X43iaWiES0pklmRNSc1knH4SeKtpqt76fJ.png','storage/JZ9RBw6HUko2ueOFdm0TTSTy8kKBgn7CJRptwqm2.png','подсистема <br>Обеспечения приоритетного <br>движения транспортных средств','подсистема','Обеспечения приоритетного движения транспортных средств','[\"public\\/ttRjqc7NFulFAy8XLLZmpvCvKcdwMSoRni0jHdbo.png\",\"public\\/GMbfD0ScRqRdrgr9gTXPylXoOJ7MuUA4q7QlhsDb.png\"]','подсистема \"Обеспечения приоритетного проезда” предназначена для обеспечения беспрепятственного прохождения транспорта через светофорные объекты в ручном и автоматическом режиме.\r\n<br>(для работы модуля требуется наличие в системе ИТС подсистемы “Светофорное управление”)','• Предварительная разгрузка перекрёстков в зависимости от скорости движения колонны/ТС\r\n\r\n<br>• Мониторинг движения транспорта по маршруту (при наличии оборудования на транспорте)\r\n\r\n<br>• Нормализация движения на прилегающих к маршруту улицах, за счёт организации временного приоритета накопившемуся транспорту\r\n\r\n<br>• Создание, изменение, удаление, хранение любых маршрутов сопровождения с выбором необходимых фаз работы СО\r\n\r\n<br>• Возможность принудительного управления СО и корректировки маршрута в режиме автоматического сопровождения\r\n\r\n<br>• Формирование отчёта в графическом виде по результату сопровождения с параметрами: скорость, время, длина маршрута\r\n\r\n<br>• Организация проезда в «зелёном пятне»',NULL,'[]',NULL,NULL,'2022-10-07 01:49:55','2022-10-07 08:57:43'),(19,'product_type-2','storage/MhkT0m1hRvSO9QQr0TYGnWzFeFmGI5zsLxS8nhUl.png','storage/UZQ71LYsi2On9CormfRpG2ZM3fS7OHkt91EoyiWE.png','подсистема <br>Мониторинга транспортных потоков','подсистема','Мониторинга транспортных потоков','[\"public\\/EhEcJCHyhzHttLxofNY7VOIlUtfBZdjVIhYjdNu0.png\",\"public\\/X5gTvKxSK0YqlLcbxxJDLHr2tDS5CpDe4ieNDOet.png\"]','подсистема “Мониторинга параметров транспортных потоков” предназначена для автоматического сбора, хранения и отображения информации о транспортных потоках, предоставление данных модулям системы ИТС или сторонним системам по открытому протоколу.','• Сбор и хранение данных с ДТ о параметрах транспортных потоков:\r\n<br>- интенсивность движения, \r\n<br>- средняя скорость, \r\n<br>- занятость полосы и т.д.\r\n\r\n<br>• Предоставление отчётов в соответствии с требованиями 443-ФЗ и 114 приказа Министерства транспорта РФ\r\n\r\n<br>• Предоставление информации о транспортных потоках в виде графиков и таблиц за указанный период\r\n\r\n<br>• Сохранение архива накопленной информации о  транспортных потоках при замене детектора транспорта\r\n\r\n<br>• Сбор, хранение и отображение телеметрической информации о состоянии и работоспособности детекторов транспорта\r\n\r\n<br>• Экспорт данных со значениями параметров ТП по указанному детектору за промежуток времени в следующих форматах: XLS; CSV; XML; JSON',NULL,'[]',NULL,NULL,'2022-10-07 01:53:05','2022-10-07 08:59:07'),(20,'product_type-2','storage/R8IRQdR2YlDcaZwJ8Y7lwE4RQFdIeKTBp4V9Qoza.png','storage/2mJ8cnY6Z3MYcq7z6vmNSTFYxu2s6kMSi52UcXdK.png','подсистема <br>Меомониторинга','подсистема','Меомониторинга','[\"public\\/DIdNwmdhxNBhYnSBZxeUQ3Yd4oVlYKgIcuTwwBvS.png\",\"public\\/iC0dCGZmgz3CyU7rfdlrh4Qt01l1kusL8vMUpJnK.png\"]','\"Подсистема метеомониторинга\"\r\nпредназначена для контроля метеорологической обстановки на дорогах','Сбор, хранение и отображение более 20 климатических параметров в автоматизированном режиме, предоставление данных модулям и системам ИТС или сторонним системам по открытому протоколу.\r\n<br>Прогнозирование метеобстановки на дорогах до 48 часов при использовании метеостанций и внешних сервисов.',NULL,'{\"\":\"\"}',NULL,NULL,'2022-10-07 01:55:17','2022-10-08 07:16:15'),(21,'product_type-2','storage/8upvBg0MBF7XKaAFxhgijgphQiFyLxp34sV0460R.png','storage/9xmwFg6v2Ek9s28ahVN2vhhJ6OivroJMumQVwnam.png','подсистема <br>Экомониторинга','подсистема','Экомониторинга','[\"public\\/cxSfyZdG10pdFXKd5vNdDGstdMXQSqa15aRfFCCV.png\",\"public\\/VbrkwYRcCuZ5SJYS7FfqEbdu4WEKpmMoU7R3ebxg.png\"]','\"Подсистема экомониторинга\"\r\nпредназначена для контроля экологической обстановки вблизи дорог.','Сбор, хранение и отображение от 7-ми экопараметров в автоматизированном режиме, предоставление данных модулям и системам ИТС или сторонним системам по открытому протоколу. \r\n<br>Создание карты экологических загрязнений города.',NULL,'{\"\":\"\"}',NULL,NULL,'2022-10-07 02:19:34','2022-10-08 07:19:05'),(22,'product_type-2','storage/QtwDDtyy2pZV0mq6CJXW3P6aIlkFlfeI8Rop0E39.png','storage/ND218n9pHBETVc4kr299G8EUCNqjZtf8fpL6YVa2.png','Модуль <br>Контроля эффективности ИТС','Модуль','Контроля эффективности ИТС','[\"public\\/nIYH1cjMxD2f09JvRZQbpyDKiGzdVMJOSkRNMGgb.png\",\"public\\/lGl8bD9G1iPDKZ1gyzIJTKjVKBW3eVGCbimoDha6.png\",\"public\\/8KxeNt4rhHc6EveGOZcdcD9rHuCVpgt3ZmQfoIJD.png\"]','модуль “Контроля эффективности ИТС” предназначен для автоматического сбора, хранения, анализа и визуального отображения информации, предоставляемых данных модулями системы ИТС','• Сбор, обработка, накопление и анализ параметров дорожного движения\r\n<br>• Расчёт и отображение показателей эффективности ИТС в виде графиков и таблиц в следующих категорий:\r\n<br>- средняя скорость движения транспортных средств, км/ч\r\n<br>- средняя задержка транспортных средств, час/авт. в сутки\r\n<br>- уровень обслуживания дорожного движения, (уровень по шкале ОДМ 218.2.020-2012)\r\n<br>- показатель перегруженности дорог\r\n<br>- временной индекс\r\n<br>- количество ДТП за год\r\n<br>- количество пассажиров\r\n<br>- средняя скорость движения транспортных средств общего пользования\r\n<br>- протяжённость участков дорожной сети агломераций, обслуживающих движение в режиме перегрузки\r\n<br>• Загрузка из смежных систем и отображение информации, в том числе в виде графиков и таблиц следующих сведений:\r\n<br>- число раненных при ДТП (по уровню тяжести согласно приказу Министерства здравоохранения и социального развития Российской Федерации от 24 апреля 2008 г. No 194н «Об утверждении Медицинских критериев определения степени тяжести вреда, причинённого здоровью человека»\r\n<br>- объём выбросов загрязняющих веществ CO2\r\n<br>- количество перевозимых грузов\r\n<br>• Мониторинг и визуальное информирование пользователей о наличии сбоев в работе оборудования;\r\n<br>• Индикацию уровня развития ИТС',NULL,'[]',NULL,NULL,'2022-10-07 02:23:51','2022-10-07 11:50:24'),(23,'product_type-2','storage/BXVgWHr49EZfWggALC4M6SI5tRHlQ6W8d47j1av7.png','storage/r7plCOD76PJP9znCEKoIUnUsJnfT1xD3b8qU6WBP.png','СуперCервис','Супер','Cервис','[\"public\\/m8BERVAjUoVhu17BYE1TO3rYUWB68wY2g5PZWG1S.png\",\"public\\/haCLsvOulNVDwWISDyIn7S4jexBZVsuB0dyqo5rk.png\"]','модуль «СуперСервис» предназначена для управления и контроля работы подрядных организаций и автоматического назначения задач и формирования отчётов любых выполняемых проектов','• Оперативное (автоматизированное) назначение задач бригадам на выезде и учет времени выполнения\r\n<br>• Поступление задач в систему из разных источников (глубокая интеграция с ИТС по API)\r\n<br>• Срок хранения информации в архиве данных с защитой от потерь до 5 лет\r\n<br>• Отчет о объеме затраченных ресурсов, автоматическая аналитика производственной деятельности  \r\n<br>• Контроль за выполнением и сроками на любом этапе с мобильного устройства\r\n<br>• на 90% снижение количества некорректных и дублирующихся задач\r\n<br>• Выгрузка единой формы отчётов и исполнительной документации\r\n<br>• Эффективное распределение и оптимизация ресурсов компании на 30%, за счёт контроля и учёта задач',NULL,'[]',NULL,NULL,'2022-10-07 06:25:56','2022-10-07 09:03:24'),(24,'product_type-2','storage/QiVjMBuvFbt5Z4Ymuly2G1thrhrpfqXyTIinjqij.png','storage/zN6gEhIo9IJkOjYpFzFth093a634KzFhkE2Oghid.png','Рабочее место <br>МЭРА','Рабочее место','МЭРА','[\"public\\/mcygQeBkeEofftcPY3jIldNhMhCnQhawqqTwyig9.png\",\"public\\/YrykrbVIVYjCpJqqZh1bEnhnuwlEEjyRf6aT2mWe.png\",\"public\\/ectLC0yWke3mv51j6Btl6M5rnwVVUR5SRdx7tDe7.png\"]','модуль «Рабочее место МЭРА» предназначен для оценки текущей и архивной информации, а так же принятия решений руководителями опираясь на автоматизированные данные (работа всех подразделений в одном информационном поле)','• Информация о ходе выполнения контрактов в виде графиков и диаграмм \r\n<br>• Актуальная (онлайн) информация о городском, общественном, спец. транспорте\r\n<br>• Анализ показателей качества городского хозяйства в выбранный период\r\n<br>• Интерактивная платформа, работающая на ПК и планшетах, испульзующая современные WEB технологии с неограниченным колличеством виджетов\r\n<br>• Динамическое отображение показателей',NULL,'[]',NULL,NULL,'2022-10-07 06:30:15','2022-10-07 09:05:47');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `thumbnail_project` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_project` text COLLATE utf8mb4_unicode_ci,
  `b_title_project` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_title_project` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_project` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_text_project` text COLLATE utf8mb4_unicode_ci,
  `links_to_send` text COLLATE utf8mb4_unicode_ci,
  `document_project` text COLLATE utf8mb4_unicode_ci,
  `description_project` text COLLATE utf8mb4_unicode_ci,
  `keywords_project` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'storage/6IIXUEbjgOyUbHDxKeSygf4UGIZQBzu0dWqRNv4q.png','[\"public\\/MzkdWL1fZh35ccc5tc1AJTO2tgALWgZsG8yt5spf.png\",\"public\\/yWTH8ej16sQvRLOqd6T0pFGBiIqAzsrmgaiBv8zJ.png\"]','Управление транспортной логистикой','всемирной \"Универсиады 2019\" в г. Красноярске','Компания \"МСУ\" обеспечивала сопровождение участников всемирной \"Универсиады 2019\"','Компания \"МСУ\" обеспечивала сопровождение участников всемирной \"Универсиады 2019\" для обеспечения гарантированной по времени доставки спортсменов от мест проживания до спортивных объектов.','{\"\":\"\"}','{\"main-slide.psd\":\"public\\/gCfYQyJBOOW0NUu7vG35uZBhoqvZM7wxQreLqkJ2.psd\",\"\\u0418\\u043d\\u0441\\u0442\\u0440\\u0443\\u043a\\u0446\\u0438\\u044f \\u043a \\u043e\\u0431\\u043e\\u0440\\u0443\\u0434\\u043e\\u0432\\u0430\\u043d\\u0438\\u044e.pdf\":\"public\\/OwGZdxBU7vHsv9n1YWwkgiGWcHFjmZBtEB9mM7xm.pdf\",\"\\u041d\\u043e\\u0432\\u044b\\u0435 \\u0440\\u0430\\u0437\\u0440\\u0430\\u0431\\u043e\\u0442\\u043a\\u0438.pdf\":\"public\\/acdzAqRL76v6PKHTPr8ThYkE3RjqyCZcwZTMpG5E.pdf\"}','Lorem ipsum','Lorem, ipsum','2022-10-06 21:32:47','2022-10-07 11:56:13'),(2,'storage/jzBkSxRx2lJEbAT6SNMGvQowkwHtEkk9y0WfrAeu.png','[\"public\\/c6UA9yW0JCxE2omJOdsp42gEbSHCQuIFDm6zEdBM.png\"]','Установка оборудования','и программных решение в г. Барнауле','Компани \"МСУ\" установила оборудования и программные решение в г. Барнауле','Компани \"МСУ\" совместно с партнером ООО \"Алтайсветстрой\" установила оборудования и программных решение в г. Барнауле 2019г.','{}','{\"\":\"\"}',NULL,NULL,'2022-10-07 13:13:45','2022-10-07 13:20:03'),(3,'storage/QGtpvLVcUZDFE4SG1HROnJbqmSEWlT3e070Y3Vvq.png','[\"public\\/mducmTNUuGgTxrqhlbtdmQjZO9mIOKma7UfQL38G.png\"]','Внедрение ИТС','в г. Красноярск и Красноярском Крае','Компания МСУ внедрила ИТС в г. Красноярске и Красноярском крае','Компания МСУ внедрила Интеллектуальную Транспортную систему в г. Красноярске и Красноярском крае в рамках национального проекта «Безопасные качественные дороги». <br>Ключевая цель ИТС — автоматизация процессов управления дорожным движением, и как результат — повышение безопасности на дорогах.','{\"\":\"\"}','{\"\":\"\"}',NULL,NULL,'2022-10-07 13:33:41','2022-10-07 13:33:41');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smanuals`
--

DROP TABLE IF EXISTS `smanuals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `smanuals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `file_manual` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_manual` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smanuals`
--

LOCK TABLES `smanuals` WRITE;
/*!40000 ALTER TABLE `smanuals` DISABLE KEYS */;
/*!40000 ALTER TABLE `smanuals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `swarranties`
--

DROP TABLE IF EXISTS `swarranties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `swarranties` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `file_warranty` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_warranty` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `swarranties`
--

LOCK TABLES `swarranties` WRITE;
/*!40000 ALTER TABLE `swarranties` DISABLE KEYS */;
/*!40000 ALTER TABLE `swarranties` ENABLE KEYS */;
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2022-10-09  3:04:14
