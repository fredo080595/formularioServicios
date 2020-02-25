-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: servicios
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.34-MariaDB

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
-- Table structure for table `datos_solicitante`
--

CREATE DATABASE servicios;
use servicios;

DROP TABLE IF EXISTS `datos_solicitante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datos_solicitante` (
  `datos_solicitante_id` int(11) NOT NULL AUTO_INCREMENT,
  `datos_nombre_correo` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_sede` int(11) DEFAULT NULL,
  `datos_area` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_tipos_usuario` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_reporte_via` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_reporte_via_otro` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_hardware` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_software` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_instalacion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_configuracion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_sin_acceso` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_ruido` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_sin_liena` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_cableado` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_cambio_numero` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_cambio_aparato` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_tele_otro` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_apa_tel1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_apa_tel2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_apa_tel3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_apa_tel4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_apa_tel5` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_roseta1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_roseta2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_roseta3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_roseta4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_roseta5` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_tar_red1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_tar_red2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_tar_red3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_tar_red4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_tar_red5` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_jack1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_jack2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_jack3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_jack4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_jack5` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_modem1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_modem2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_modem3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_modem4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_modem5` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_plug1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_plug2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_plug3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_plug4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_plug5` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_num_inventario` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_utp1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_utp2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_utp3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_utp4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_utp5` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_utp6` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_utp7` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_multi_1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_multi_2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_multi_3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_multi_4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_multi_5` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_multi_6` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_multi_7` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_persona` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_observaciones` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_estado_reporte` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_des_motivo` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`datos_solicitante_id`),
  KEY `datos_solicitante_sede_sede_id_fk` (`datos_sede`),
  CONSTRAINT `datos_solicitante_sede_sede_id_fk` FOREIGN KEY (`datos_sede`) REFERENCES `sede` (`sede_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datos_solicitante`
--

LOCK TABLES `datos_solicitante` WRITE;
/*!40000 ALTER TABLE `datos_solicitante` DISABLE KEYS */;
INSERT INTO `datos_solicitante` VALUES (1,'Impedit perspiciati',2,'Dolorem duis magni d','option3','Pariatur Nemo amet','Otro','Otro','Est unde a voluptat','','','instalacion','','sin red','RUIDO EN LÍNEA','SIN LÍNEA','','CAMBIO DE NÚMERO','CAMBIO DE APARATO','Illo omnis ut ea ut ','1','2','3','4','','1','','3','','','','3','','','1','','','','','','','','4','','','','','4','','1','','','','5','5 A 10','10 A 15','','','3','4','5','','10 A 15','Ing. Alexis Raúl Joffre Torres','Officiis labore sint','terminado','Excepteur asperiores');
/*!40000 ALTER TABLE `datos_solicitante` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-25  8:44:48
