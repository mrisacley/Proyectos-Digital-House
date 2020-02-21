-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: Proyecto
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.10.1

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_de_creacion` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `puntaje` int(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `admin` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'asd','asdf@g.com',NULL,'$2y$10$ijWq2iyndJ3NgCn8f0fOFuS2/4sYF12A9lG8oDc8.0.I20gZ4RuSS',NULL,'2021-02-20 03:00:00','2020-02-21 20:26:36',0,'2020-02-21 20:26:36',1),(2,'1234','1234@g.com',NULL,'$2y$10$DOQhPLJBR5OLBkjRo6uBredw9tcUv8HpJgwQ61NJhOfDCt7uustM.','MvTVe2UdSZy5BrC1VjOJVgIOUNmTw1UD3HugmtqE4Oqvbl9koYXDNVbaEtvR','2021-02-20 03:00:00','2020-02-21 20:57:24',0,'2020-02-21 20:57:24',1),(3,'admin','admin@admin.com',NULL,'$2y$10$rDj6seZATBYDxyMLQ.LqJOq1IPpgOcK4kOv7Gj3kX.K7C.sQ5g74m',NULL,'2021-02-20 03:00:00','2020-02-21 21:50:20',0,'2020-02-21 21:50:20',2),(4,'test','test@test.com',NULL,'$2y$10$704J6MxU9rZWvOUBj7hf/OuZGOfUiakr5FLC5jaItYJlih7xYogNu',NULL,'2021-02-20 03:00:00','2020-02-21 21:52:32',0,'2020-02-21 21:52:32',1),(6,'test1','test1@test.com',NULL,'$2y$10$5j7V0puMOpdeE29nzUfx2uWzZXsOfko2mJ05wdDv/7fJSN.HKvHtK',NULL,'2021-02-20 03:00:00','2020-02-21 22:02:12',0,'2020-02-21 22:02:12',1),(7,'asdggh','sdasfa@g.c',NULL,'$2y$10$GbPgW4GwoUWA8IQtltg6WekXhclOIwJeHBJ.RxotrICBgfpGLk8Em',NULL,'2021-02-20 03:00:00','2020-02-21 22:07:09',0,'2020-02-21 22:07:09',1);
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

-- Dump completed on 2020-02-21 16:30:57
