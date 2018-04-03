-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: words
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.31-MariaDB

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
-- Table structure for table `dicionario`
--

DROP TABLE IF EXISTS `dicionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dicionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `palavraIngles` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `palavraPortugues` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dificuldade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dicionario`
--

LOCK TABLES `dicionario` WRITE;
/*!40000 ALTER TABLE `dicionario` DISABLE KEYS */;
INSERT INTO `dicionario` VALUES (1,'a','uma',0),(2,'about','sobre',0),(3,'all','todos',0),(4,'also','tambem',0),(5,'and','e',0),(6,'as','como',0),(7,'at','a',0),(8,'be','estar',0),(9,'because','porque',0),(10,'but','mas',0),(11,'by','de',0),(12,'can','posso',0),(13,'come','venha',0),(14,'could','poderia',0),(15,'day','dia',0),(16,'do','faz',0),(17,'even','ate',0),(18,'find','encontrar',0),(19,'first','primeiro',0),(20,'for','para',0),(21,'from','a partir de',0),(22,'get','obter',0),(23,'give','dar',0),(24,'go','ir',0),(25,'have','ter',0),(26,'he','ele',0),(27,'her','dela',0),(28,'here','aqui',0),(29,'him','ele',0),(30,'his','dele',0),(31,'how','como',0),(32,'I','eu',0),(33,'if','se',0),(34,'in','dentro',0),(35,'into','para dentro',0),(36,'it','isto',0),(37,'its','esta',0),(38,'just','somente',0),(39,'know','conhecer',0),(40,'like','gostar',0),(41,'look','veja',0),(42,'make','faco',0),(43,'man','homem',0),(44,'many','muitos',0),(45,'me','mim',0),(46,'more','mais',0),(47,'my','meu',0),(48,'new','novo',0),(49,'no','nao',0),(50,'not','nao',0),(51,'now','agora',0),(52,'of','do',0),(53,'on','em',0),(54,'one','1',0),(55,'only','so',0),(56,'or','ou',0),(57,'other','outros',0),(58,'our','nosso',0),(59,'out','fora',0),(60,'people','pessoas',0),(61,'say','dizer',0),(62,'see','vejo',0),(63,'she','ela',0),(64,'so','assim',0),(65,'some','alguns',0),(66,'take','levar',0),(67,'tell','contar',0),(68,'than','do que',0),(69,'that','aquele',0),(70,'the','a',0),(71,'their','deles',0),(72,'them','eles',0),(73,'then','entao',0),(74,'there','ha',0),(75,'these','estes',0),(76,'they','eles',0),(77,'thing','coisa',0),(78,'think','pensar',0),(79,'this','esta',0),(80,'those','essa',0),(81,'time','tempo',0),(82,'to','para',0),(83,'two','dois',0),(84,'up','acima',0),(85,'use','usar',0),(86,'very','muito',0),(87,'want','quer',0),(88,'way','caminho',0),(89,'we','nos',0),(90,'well','bem',0),(91,'what','o que',0),(92,'when','quando',0),(93,'which','qual',0),(94,'who','quem',0),(95,'will','vai',0),(96,'with','com',0),(97,'would','seria',0),(98,'year','ano',0),(99,'you','voce',0),(100,'your','seu',0);
/*!40000 ALTER TABLE `dicionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `records` (
  `idrecords` int(11) NOT NULL AUTO_INCREMENT,
  `totalpalavras` int(11) DEFAULT NULL,
  `respondidas` int(11) DEFAULT NULL,
  `corretas` int(11) DEFAULT NULL,
  `erradas` int(11) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `exp` varchar(45) DEFAULT NULL,
  `jogador` varchar(45) DEFAULT NULL,
  `tempo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idrecords`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `records`
--

LOCK TABLES `records` WRITE;
/*!40000 ALTER TABLE `records` DISABLE KEYS */;
INSERT INTO `records` VALUES (54,100,136,100,36,3,'64','JOGADOR 1',107);
/*!40000 ALTER TABLE `records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respondidas`
--

DROP TABLE IF EXISTS `respondidas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respondidas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPalavraDicionario` int(11) DEFAULT NULL,
  `correta` int(11) DEFAULT NULL,
  `respostaUsuario` varchar(45) DEFAULT NULL,
  `tempo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=883 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respondidas`
--

LOCK TABLES `respondidas` WRITE;
/*!40000 ALTER TABLE `respondidas` DISABLE KEYS */;
/*!40000 ALTER TABLE `respondidas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-03 19:01:10
