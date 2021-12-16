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
-- Table structure for table `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_usuarios` (
  `id_usu` int NOT NULL AUTO_INCREMENT,
  `nom_usu` varchar(45) DEFAULT NULL,
  `apellido_usu` varchar(45) DEFAULT NULL,
  `contra_usu` varchar(45) DEFAULT NULL,
  `mail_usu` varchar(45) DEFAULT NULL,
  `id_perfil` int DEFAULT NULL,
  PRIMARY KEY (`id_usu`),
  KEY `fk_usuarios_perfiles_idx` (`id_usu`),
  KEY `fk_usuarios_perfil_idx` (`id_perfil`),
  CONSTRAINT `fk_usuarios_perfil` FOREIGN KEY (`id_perfil`) REFERENCES `tbl_perfiles` (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` VALUES (1,'Paco','Ramirez','1fa3356b1eb65f144a367ff8560cb406','Paco@gmail.com',2),(2,'Manolo','Gonzalez','1fa3356b1eb65f144a367ff8560cb406','Manolo@gmail.com',1),(3,'Camarero1','Cam1','1fa3356b1eb65f144a367ff8560cb406','camarero1@gmail.com',2),(4,'Camarero2','Cam2','1fa3356b1eb65f144a367ff8560cb406','camarero2@gmail.com',2),(5,'Camarero3','Cam3','1fa3356b1eb65f144a367ff8560cb406','camarero3@gmail.com',2),(6,'Camarero4','Cam4','1fa3356b1eb65f144a367ff8560cb406','camarero4@gmail.com',2),(7,'Camarero5','Cam5','1fa3356b1eb65f144a367ff8560cb406','camarero5@gmail.com',2);
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-16 18:00:41
