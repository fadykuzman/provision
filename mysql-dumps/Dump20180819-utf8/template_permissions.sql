-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: template
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

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
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2018-08-19 13:06:47','2018-08-19 13:06:47'),(2,'browse_bread',NULL,'2018-08-19 13:06:47','2018-08-19 13:06:47'),(3,'browse_database',NULL,'2018-08-19 13:06:47','2018-08-19 13:06:47'),(4,'browse_media',NULL,'2018-08-19 13:06:47','2018-08-19 13:06:47'),(5,'browse_compass',NULL,'2018-08-19 13:06:47','2018-08-19 13:06:47'),(6,'browse_menus','menus','2018-08-19 13:06:47','2018-08-19 13:06:47'),(7,'read_menus','menus','2018-08-19 13:06:47','2018-08-19 13:06:47'),(8,'edit_menus','menus','2018-08-19 13:06:47','2018-08-19 13:06:47'),(9,'add_menus','menus','2018-08-19 13:06:47','2018-08-19 13:06:47'),(10,'delete_menus','menus','2018-08-19 13:06:47','2018-08-19 13:06:47'),(11,'browse_roles','roles','2018-08-19 13:06:47','2018-08-19 13:06:47'),(12,'read_roles','roles','2018-08-19 13:06:47','2018-08-19 13:06:47'),(13,'edit_roles','roles','2018-08-19 13:06:47','2018-08-19 13:06:47'),(14,'add_roles','roles','2018-08-19 13:06:47','2018-08-19 13:06:47'),(15,'delete_roles','roles','2018-08-19 13:06:47','2018-08-19 13:06:47'),(16,'browse_users','users','2018-08-19 13:06:47','2018-08-19 13:06:47'),(17,'read_users','users','2018-08-19 13:06:47','2018-08-19 13:06:47'),(18,'edit_users','users','2018-08-19 13:06:47','2018-08-19 13:06:47'),(19,'add_users','users','2018-08-19 13:06:47','2018-08-19 13:06:47'),(20,'delete_users','users','2018-08-19 13:06:47','2018-08-19 13:06:47'),(21,'browse_settings','settings','2018-08-19 13:06:47','2018-08-19 13:06:47'),(22,'read_settings','settings','2018-08-19 13:06:47','2018-08-19 13:06:47'),(23,'edit_settings','settings','2018-08-19 13:06:47','2018-08-19 13:06:47'),(24,'add_settings','settings','2018-08-19 13:06:47','2018-08-19 13:06:47'),(25,'delete_settings','settings','2018-08-19 13:06:47','2018-08-19 13:06:47'),(26,'browse_categories','categories','2018-08-19 13:06:48','2018-08-19 13:06:48'),(27,'read_categories','categories','2018-08-19 13:06:48','2018-08-19 13:06:48'),(28,'edit_categories','categories','2018-08-19 13:06:48','2018-08-19 13:06:48'),(29,'add_categories','categories','2018-08-19 13:06:48','2018-08-19 13:06:48'),(30,'delete_categories','categories','2018-08-19 13:06:48','2018-08-19 13:06:48'),(31,'browse_posts','posts','2018-08-19 13:06:48','2018-08-19 13:06:48'),(32,'read_posts','posts','2018-08-19 13:06:48','2018-08-19 13:06:48'),(33,'edit_posts','posts','2018-08-19 13:06:48','2018-08-19 13:06:48'),(34,'add_posts','posts','2018-08-19 13:06:48','2018-08-19 13:06:48'),(35,'delete_posts','posts','2018-08-19 13:06:48','2018-08-19 13:06:48'),(36,'browse_pages','pages','2018-08-19 13:06:48','2018-08-19 13:06:48'),(37,'read_pages','pages','2018-08-19 13:06:48','2018-08-19 13:06:48'),(38,'edit_pages','pages','2018-08-19 13:06:48','2018-08-19 13:06:48'),(39,'add_pages','pages','2018-08-19 13:06:48','2018-08-19 13:06:48'),(40,'delete_pages','pages','2018-08-19 13:06:48','2018-08-19 13:06:48'),(41,'browse_hooks',NULL,'2018-08-19 13:06:48','2018-08-19 13:06:48');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-19 17:08:10
