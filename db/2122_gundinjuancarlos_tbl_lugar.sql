-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_restaurante
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_lugar`
--

DROP TABLE IF EXISTS `tbl_lugar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_lugar` (
  `id_lugar` int NOT NULL AUTO_INCREMENT,
  `nom_lugar` varchar(45) DEFAULT NULL,
  `id_origen` int DEFAULT NULL,
  `img_lugar` varchar(100) DEFAULT NULL,
  `lugar_actividad` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_lugar`),
  KEY `fk_origen_lugar_idx` (`id_origen`),
  CONSTRAINT `fk_origen_lugar` FOREIGN KEY (`id_origen`) REFERENCES `tbl_origen` (`id_origen`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_lugar`
--

LOCK TABLES `tbl_lugar` WRITE;
/*!40000 ALTER TABLE `tbl_lugar` DISABLE KEYS */;
INSERT INTO `tbl_lugar` VALUES (1,'Terraza Norte',1,'','1'),(2,'Sala privada 1',3,'test.jpg','1'),(3,'Comedor Principal',2,'test.jpg','1'),(4,'Terraza Sur',1,'test.jpg','1'),(5,'Terraza Oeste',1,'test.jpg','1'),(6,'Sala privada 2',3,'test.jpg','1'),(7,'Comedor Gourmet',2,'test.jpg','1'),(8,'Comedor Deluxe',2,'test.jpg','1'),(9,'Sala privada 3',3,'test.jpg','1'),(10,'Sala privada 4',3,'test.jpg','1'),(11,'PEPE',1,'48727p.jpg','0');
/*!40000 ALTER TABLE `tbl_lugar` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-20 18:17:39
