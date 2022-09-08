-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ambientaldb
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Consumo responsable',NULL,NULL),(2,'Biodiversidad',NULL,NULL),(3,'Ecosistemas',NULL,NULL),(4,'Cambio climático',NULL,NULL);
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contenido`
--

DROP TABLE IF EXISTS `contenido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contenido` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenidoTipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `archivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoUsuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCategoria` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contenido_idcategoria_foreign` (`idCategoria`),
  CONSTRAINT `contenido_idcategoria_foreign` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenido`
--

LOCK TABLES `contenido` WRITE;
/*!40000 ALTER TABLE `contenido` DISABLE KEYS */;
/*!40000 ALTER TABLE `contenido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `escuelas`
--

DROP TABLE IF EXISTS `escuelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `escuelas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `escuelas`
--

LOCK TABLES `escuelas` WRITE;
/*!40000 ALTER TABLE `escuelas` DISABLE KEYS */;
INSERT INTO `escuelas` VALUES (1,'Escuela Tecnica 22','Jiutepec',NULL,NULL),(2,'Escuela Primaria 21','Cuernavaca',NULL,NULL),(3,'Escuela Primaria 123','Temixco','2022-08-21 19:28:19','2022-08-21 19:29:38'),(7,'Secundaria 1563','Coatlán del Río','2022-08-22 03:09:06','2022-08-22 03:09:06');
/*!40000 ALTER TABLE `escuelas` ENABLE KEYS */;
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
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_08_08_051832_create_escuelas_table',1),(6,'2022_08_08_053555_add_foreign_key_users_table',2),(7,'2022_08_12_032200_create_municipios_table',3),(8,'2022_08_18_022958_update_users_table',4),(9,'2022_09_03_143940_create_categorias_table',5),(10,'2022_09_03_144217_create_contenido_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipios`
--

DROP TABLE IF EXISTS `municipios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipios`
--

LOCK TABLES `municipios` WRITE;
/*!40000 ALTER TABLE `municipios` DISABLE KEYS */;
INSERT INTO `municipios` VALUES (1,'Cuernavaca',NULL,NULL),(2,'Temixco',NULL,NULL),(3,'Jojutla',NULL,NULL),(4,'Puente de Ixtla',NULL,NULL),(5,'Jiutepec',NULL,NULL),(6,'Acatlipa',NULL,NULL),(7,'Yautepec',NULL,NULL),(8,'Amacuzac',NULL,NULL),(9,'Atlatlahucan',NULL,NULL),(10,'Axochiapan',NULL,NULL),(11,'Ayala',NULL,NULL),(12,'Coatlán del Río',NULL,NULL),(13,'Cuautla',NULL,NULL),(14,'Emiliano Zapata',NULL,NULL),(15,'Huitzilac',NULL,NULL),(16,'Jantetelco',NULL,NULL),(17,'Jonacatepec de Leandro Valle',NULL,NULL),(18,'Mazatepec',NULL,NULL),(19,'Miacatlán',NULL,NULL),(20,'Ocuituco',NULL,NULL),(21,'Tepalcingo',NULL,NULL),(22,'Tepoztlán',NULL,NULL),(23,'Tetecala',NULL,NULL),(24,'Tetela del Volcán',NULL,NULL),(25,'Tlalnepantla',NULL,NULL),(26,'Tlaltizapán de Zapata',NULL,NULL),(27,'Tlaquiltenango',NULL,NULL),(28,'Tlayacapan',NULL,NULL),(29,'Totolapan',NULL,NULL),(30,'Xochitepec',NULL,NULL),(31,'Yecapixtla',NULL,NULL),(32,'Zacatepec',NULL,NULL),(33,'Zacualpan de Amilpas',NULL,NULL),(34,'Temoac',NULL,NULL),(35,'Coatetelco',NULL,NULL),(36,'Xoxocotla',NULL,NULL),(37,'Hueyapan',NULL,NULL);
/*!40000 ALTER TABLE `municipios` ENABLE KEYS */;
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivelEducativo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idEscuela` bigint(20) unsigned DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `external_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `external_auth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_idescuela_foreign` (`idEscuela`),
  CONSTRAINT `users_idescuela_foreign` FOREIGN KEY (`idEscuela`) REFERENCES `escuelas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'Admin','Admin','admin@test.com',NULL,'$2y$10$sHglTqWmpkfti9fB0R..4.EGuz.niVEA/NBJxaMOaA/07Jldt3jEy','admin','cuernavaca',NULL,NULL,NULL,NULL,'2022-08-09 05:19:38','2022-08-09 05:19:38',NULL,NULL,NULL,NULL),(13,'Arturo','Lopez Torres','arturo@test.com',NULL,'$2y$10$haoszS1RKL1JhQvK6TOp/OYY4DSotdgi/UD41QrhrNlEqaAUs8bJ.','alumno','Cuernavaca','Secundaria','13','masculino',NULL,'2022-08-19 21:37:04','2022-08-21 11:55:40',1,NULL,NULL,NULL),(15,'Andres','Torres','andres@test.com',NULL,'$2y$10$3Ocv0TIxuKackqyL28.P4O/Khcm2cS3LbtHLY8Cv.qnGhh52i2VCi','profesor','Temixco',NULL,'35','masculino',NULL,'2022-08-21 12:07:07','2022-08-21 12:07:07',2,NULL,NULL,NULL),(16,'Estrella','Ramos Hernandez','estrella@test.com',NULL,'$2y$10$IQahe3gB1DJh2r/tlN9kNeKc0YXXzT6dzXkITx9IJGwVKFWmf6MqO','profesor','Puente de Ixtla',NULL,'28','femenino',NULL,'2022-08-21 12:07:46','2022-08-21 12:07:59',1,NULL,NULL,NULL),(17,'Martha','Garrido','martha@test.com',NULL,'$2y$10$UPAtH3GUPzJTEoCxqCiG.OW.SvmJ1lKK9aG7B.5L77/9QGdMbLQey','alumno','jiutepec',NULL,NULL,NULL,NULL,'2022-08-22 00:37:28','2022-08-22 00:37:28',NULL,NULL,NULL,NULL),(66,'Adriana','Chazaro','adriana@test.com',NULL,'$2y$10$/a56mzfBxApbZ0.QwaZWBum6Tp.9TFwPHjqRfEZ4pHZWa7YYsRpB2','alumno','Puente de Ixtla','Primaria','14','femenino',NULL,'2022-09-02 09:57:40','2022-09-02 09:58:17',7,NULL,NULL,NULL),(67,'Estuardo','Castillo','estuardo@test.com',NULL,'$2y$10$nQ5WRuTAZHdFJCGiGQteYukSiVH7hta9OGamzrUGzmjbp1YVmR7Ym','profesor','Temixco',NULL,'34','masculino',NULL,'2022-09-03 09:23:17','2022-09-03 09:23:53',2,NULL,NULL,NULL),(68,'Enrique','Reyes','en@test.com',NULL,'$2y$10$fObs4vPnxpQciDVRS9ML.OLNTbEbkV03YFJ1cYmYpxItQ5NDUOwjC','alumno',NULL,NULL,NULL,NULL,NULL,'2022-09-03 21:01:38','2022-09-03 21:01:38',NULL,NULL,NULL,NULL),(71,'Enrique','Reyes','enr@test.com',NULL,'$2y$10$gVXpaLANRbtbNoGKPEt1JeiDgw/IteJEbdRP3sEWXV.MMu/24uy9i','alumno','Puente de Ixtla','Primaria','35','masculino',NULL,'2022-09-03 21:02:23','2022-09-03 21:03:24',7,NULL,NULL,NULL),(72,'JORGE','MERCADO CORTES','jmcixoye@aol.com',NULL,'$2y$10$YU9u6nzz8YHMdOkl2JvUnOPgZAu256Wb5rOZ6sXiCbWhPiqeCdsj.','profesor','Temixco',NULL,'12','masculino',NULL,'2022-09-03 21:03:52','2022-09-03 21:04:18',1,NULL,NULL,NULL);
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

-- Dump completed on 2022-09-03 12:07:49
