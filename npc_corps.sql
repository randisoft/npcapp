-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: npc_corps
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
-- Table structure for table `citizens`
--

DROP TABLE IF EXISTS `citizens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `citizens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `state_id` varchar(11) NOT NULL,
  `lga_id` varchar(11) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citizens`
--

LOCK TABLES `citizens` WRITE;
/*!40000 ALTER TABLE `citizens` DISABLE KEYS */;
INSERT INTO `citizens` VALUES (7,'Randalf Ehigiator','1','6 Eh. Benin','07062776077','1','7',13,'2022-04-02 16:44:20'),(8,'Matthew Barrow Jnr','2','3100 MAIN','0908595889','5','28',2,'2022-04-02 17:03:53');
/*!40000 ALTER TABLE `citizens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lga`
--

DROP TABLE IF EXISTS `lga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `state_id` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lga`
--

LOCK TABLES `lga` WRITE;
/*!40000 ALTER TABLE `lga` DISABLE KEYS */;
INSERT INTO `lga` VALUES (7,'Egor','1'),(9,'Efon','2'),(10,'Ekiti-east','2'),(11,'Ekiti-south','2'),(12,'Emure','2'),(13,'Gbonyin','2'),(14,'Akoko-Edo','1'),(15,'Esan Central','1'),(16,'Esan West','1'),(17,'Owan West','1'),(18,'Gwer East','3'),(19,'Katsina-Ala','3'),(20,'Konshisha','3'),(21,'Obi','3'),(22,'Oju','3'),(23,'Abi','5'),(24,'Akpabuyo','5'),(25,'Bekwarra','5'),(26,'Biase','5'),(27,'Calabar Municipal','5'),(28,'Aninri','4'),(29,'Awgu','4'),(30,'Ezeagu','4'),(31,'Igbo Etiti','4'),(32,'Enugu East','4');
/*!40000 ALTER TABLE `lga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` VALUES (1,'Edo'),(2,'Ado-Ekiti'),(3,'Benue'),(4,'Enugu'),(5,'Cross River');
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Matthew Barrow','randalfosabuohien@gmail.com','$2y$10$BZQMbcQ01hjo4xA4v8FGbeqvBeo4ougCr5UmBmmdkazycPTIP492u'),(3,'Matthew Barrow Jnr','randalfjohn12@gmail.com','$2y$10$qrYQAz5nJLAoU0xcu1uAMe41o212IEU7UrIIOW84aAu1qCZ4E5t36');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wards`
--

DROP TABLE IF EXISTS `wards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `lga_id` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wards`
--

LOCK TABLES `wards` WRITE;
/*!40000 ALTER TABLE `wards` DISABLE KEYS */;
INSERT INTO `wards` VALUES (1,'Ward','7'),(2,'Ward 1','7'),(3,'Ward 1','23'),(4,'Ward 2','23'),(5,'Ward 3','23'),(6,'Ward 1','14'),(7,'Ward 2','14'),(8,'Ward 1','29'),(9,'Ward 1','16'),(10,'Ward 1','30'),(11,'Ward 2','30'),(12,'Ward 1','13'),(13,'Ward 1','10'),(14,'Ward 1','11');
/*!40000 ALTER TABLE `wards` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-03 11:45:58
