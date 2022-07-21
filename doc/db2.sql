-- MariaDB dump 10.19  Distrib 10.8.3-MariaDB, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: turismofelix
-- ------------------------------------------------------
-- Server version	10.8.3-MariaDB

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
-- Table structure for table `sitios`
--

DROP TABLE IF EXISTS `sitios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sitios` (
  `idsitios` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `descripcion2` varchar(255) NOT NULL,
  `precio` double NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `disponible` varchar(80) DEFAULT NULL,
  `dias` varchar(80) DEFAULT NULL,
  `recomendado` tinyint(1) DEFAULT NULL,
  `fecCreate` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idsitios`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sitios`
--

LOCK TABLES `sitios` WRITE;
/*!40000 ALTER TABLE `sitios` DISABLE KEYS */;
INSERT INTO `sitios` VALUES
(1,'Plaza de armas','img/63764f5a4f84942147ab92752e282db5.jpg','lugares','Plaza de Armas de la Ciudad de Puno.\r\nSe encuentra a 6 cuadras del Lago titicaca y otros lugares turisticos yendo a pie','La plaza mayor es una buen atractivo turistico',0,'935017466','edgarapazac@gmail.com','Disponible','2',1,'2022-06-05 02:06:12'),
(2,'Isla de los uros','img/80abec9e4c5570d4c6808812579be59a.jpg','lugares','Las islas de las uros, es un conjunto de islas muy bonitas que son flotantes en el lago Titicaca, a 15 minutos en lancha del puerto e Puno y con muchos lugares muy lindos para pasar un dia lejos del bullicio de la ciudad','Puede comprar artesanias, comida del lugar, especialmente la trucha fresca u otros productos, lo que necesita.\r\nLa gente en muchos casos hablan muchos idiomas y es una excelente forma de salir de los comun.',10,'955127856','travel@punotours.com','Disponible','1',1,'2022-06-05 02:13:21'),
(3,'Don vitorio','img/80070597523cf2d2845725dafd17b44b.jpg','restaurant','Este restaurant es uno de los mas lindos de la ciudad, con 4 estrellas de calificación.  Se encuentra en la Plaza de Armas de la ciudad, con platos de comida al escoger.','Esta se encuentra al frente de la catedral de la ciudad, y en segundo piso, tiene una excelente vista de los datos.',35,'987654321','vitorio@food.com','Disponible','1',1,'2022-06-05 02:18:17'),
(4,'Hotel Villa del Lago','img/41b586905e6233e72b076191f8bf9512.jpg','hotel','Hotel de 3 estrellas con una gran cantidad de habitaciones muy bien amobladas','Pueden estar listos para tener un descanso',45,'963857421','villalago@villalago.com','Disponible','2',1,'2022-06-05 02:22:02'),
(5,'Plaza de armas2','img/80abec9e4c5570d4c6808812579be59a.jpg','lugares','Plaza de Armas de la Ciudad de Puno.\r\nSe encuentra a 6 cuadras del Lago titicaca y otros lugares turisticos yendo a pie 2','La plaza mayor es una buen atractivo turistico2',22,'9350174662','edgarapazac@gmail.com2','Disponible','22',1,'2022-07-21 03:25:37');
/*!40000 ALTER TABLE `sitios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yo`
--

DROP TABLE IF EXISTS `yo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yo` (
  `idyo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(120) NOT NULL,
  `username` varchar(30) NOT NULL,
  `passwd` varchar(120) NOT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `ubicacion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idyo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yo`
--

LOCK TABLES `yo` WRITE;
/*!40000 ALTER TABLE `yo` DISABLE KEYS */;
/*!40000 ALTER TABLE `yo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-20 22:46:42
