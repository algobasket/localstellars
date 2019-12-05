-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: localstellar
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.16.04.1

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
-- Table structure for table `account_level`
--

DROP TABLE IF EXISTS `account_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `holding_start_limit` varchar(45) DEFAULT NULL,
  `holding_end_limit` varchar(45) DEFAULT NULL,
  `documents_needed` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account_level`
--

LOCK TABLES `account_level` WRITE;
/*!40000 ALTER TABLE `account_level` DISABLE KEYS */;
INSERT INTO `account_level` VALUES (1,'Tier-1','0','10000','{\"passport\",\"national-id,\"driver-license\"}'),(2,'Tier-2','0','50000','{\"passport\",\"national-id,\"driver-license\",\"req\":{\"face-code-scan\"}}'),(3,'Tier-3','1000','100000','{\"passport\",\"national-id,\"driver-license\",\"req\":{\"business-id\"}}'),(4,'Tier-4','5000','unlimited','{\"passport\",\"national-id,\"driver-license\",\"req\":{\"business-id\",\"tax-id\"}}');
/*!40000 ALTER TABLE `account_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log_type` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  `device` varchar(45) NOT NULL,
  `browser` varchar(45) NOT NULL,
  `device_type` varchar(100) NOT NULL,
  `date` varchar(45) NOT NULL,
  `status` int(11) NOT NULL,
  `ip` varchar(45) NOT NULL,
  `country` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` VALUES (1,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','20-10-2019 01:41:16',1,'103.103.53.142','IN'),(2,'auth',5,'Linux','Chrome 77.0.3865.90','Computer','20-10-2019 01:47:14',1,'103.103.53.142','IN'),(3,'auth',5,'Linux','Chrome 77.0.3865.90','Computer','05-11-2019 12:08:58',1,'103.103.53.142','IN'),(4,'auth',5,'Linux','Chrome 77.0.3865.90','Computer','06-11-2019 06:34:50',1,'103.103.53.142','IN'),(5,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','06-11-2019 06:35:09',1,'103.103.53.142','IN'),(6,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','08-11-2019 12:23:19',1,'103.103.53.142','IN'),(7,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','08-11-2019 12:34:41',1,'103.103.53.142','IN'),(8,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','09-11-2019 09:16:19',1,'103.103.53.142','IN'),(9,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','09-11-2019 10:50:47',1,'103.103.53.142','IN'),(10,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','10-11-2019 08:12:53',1,'103.103.54.150','IN'),(11,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','10-11-2019 09:27:03',1,'103.103.54.150','IN'),(12,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','10-11-2019 09:31:02',1,'103.103.54.150','IN'),(13,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','10-11-2019 09:44:18',1,'103.103.54.150','IN'),(14,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','10-11-2019 09:45:59',1,'103.103.54.150','IN'),(15,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','10-11-2019 09:52:13',1,'103.103.54.150','IN'),(16,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','10-11-2019 10:45:04',1,'103.103.54.150','IN'),(17,'auth',5,'Linux','Chrome 77.0.3865.90','Computer','10-11-2019 11:20:27',1,'103.103.54.150','IN'),(18,'auth',5,'Linux','Chrome 77.0.3865.90','Computer','10-11-2019 11:21:06',1,'103.103.54.150','IN'),(19,'auth',5,'Linux','Chrome 77.0.3865.90','Computer','10-11-2019 11:22:31',1,'103.103.54.150','IN'),(20,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','10-11-2019 11:24:56',1,'103.103.54.150','IN'),(21,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','10-11-2019 10:35:35',1,'103.103.54.150','IN'),(22,'auth',7,'Linux','Chrome 77.0.3865.120','Computer','11-11-2019 01:20:17',1,'103.103.54.150','IN'),(23,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','11-11-2019 02:13:11',1,'103.103.54.150','IN'),(24,'auth',7,'Linux','Chrome 77.0.3865.120','Computer','11-11-2019 02:14:24',1,'103.103.54.150','IN'),(25,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','11-11-2019 02:26:51',1,'103.103.54.150','IN'),(26,'auth',7,'Linux','Chrome 77.0.3865.120','Computer','11-11-2019 03:08:41',1,'103.103.54.150','IN'),(27,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','11-11-2019 03:15:02',1,'103.103.54.150','IN'),(28,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','11-11-2019 06:50:08',1,'103.103.54.150','IN'),(29,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','11-11-2019 08:28:11',1,'103.103.54.150','IN'),(30,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','11-11-2019 08:28:45',1,'103.103.54.150','IN'),(31,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','12-11-2019 06:03:59',1,'103.103.54.150','IN'),(32,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','12-11-2019 06:24:42',1,'103.103.54.150','IN'),(33,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','12-11-2019 09:58:46',1,'103.103.54.150','IN'),(34,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','12-11-2019 07:54:52',1,'103.103.54.150','IN'),(35,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','13-11-2019 07:32:30',1,'103.103.54.150','IN'),(36,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','13-11-2019 10:05:45',1,'103.103.54.150','IN'),(37,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','13-11-2019 12:22:57',1,'103.103.54.150','IN'),(38,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','16-11-2019 01:09:10',1,'103.103.54.150','IN'),(39,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','17-11-2019 08:05:53',1,'103.103.54.150','IN'),(40,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','19-11-2019 04:40:06',1,'103.103.54.150','IN'),(41,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','19-11-2019 06:09:48',1,'103.103.54.150','IN'),(42,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','19-11-2019 10:28:37',1,'103.103.54.150','IN'),(43,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','19-11-2019 11:05:25',1,'103.103.54.150','IN'),(44,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','20-11-2019 01:05:31',1,'103.103.54.150','IN'),(45,'auth',5,'Linux','Chrome 77.0.3865.90','Computer','21-11-2019 01:46:29',1,'103.103.54.150','IN'),(46,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','27-11-2019 02:11:15',1,'103.103.54.150','IN'),(47,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','27-11-2019 02:12:35',1,'103.103.54.150','IN'),(48,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','27-11-2019 04:48:25',1,'103.103.54.150','IN'),(49,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','27-11-2019 05:34:49',1,'103.103.54.150','IN'),(50,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','27-11-2019 09:59:18',1,'103.103.54.150','IN'),(51,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','28-11-2019 01:08:55',1,'103.103.54.150','IN'),(52,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','28-11-2019 04:33:51',1,'103.103.54.150','IN'),(53,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','29-11-2019 03:47:51',1,'103.103.54.150','IN'),(54,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','29-11-2019 04:33:35',1,'103.103.54.150','IN'),(55,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','29-11-2019 05:45:59',1,'103.103.54.150','IN'),(56,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','29-11-2019 05:46:39',1,'103.103.54.150','IN'),(57,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','30-11-2019 07:12:29',1,'103.103.54.150','IN'),(58,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','01-12-2019 12:13:13',1,'103.103.54.150','IN'),(59,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','01-12-2019 05:49:02',1,'103.103.54.150','IN'),(60,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','03-12-2019 06:07:10',1,'103.103.54.150','IN'),(61,'auth',7,'Linux','Chrome 77.0.3865.90','Computer','03-12-2019 10:52:33',1,'103.103.54.150','IN');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sortname` varchar(3) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `phonecode` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'AF','Afghanistan',93,1),(2,'AL','Albania',355,1),(3,'DZ','Algeria',213,1),(4,'AS','American Samoa',1684,1),(5,'AD','Andorra',376,1),(6,'AO','Angola',244,1),(7,'AI','Anguilla',1264,1),(8,'AQ','Antarctica',0,1),(9,'AG','Antigua And Barbuda',1268,1),(10,'AR','Argentina',54,1),(11,'AM','Armenia',374,1),(12,'AW','Aruba',297,1),(13,'AU','Australia',61,1),(14,'AT','Austria',43,1),(15,'AZ','Azerbaijan',994,1),(16,'BS','Bahamas The',1242,1),(17,'BH','Bahrain',973,1),(18,'BD','Bangladesh',880,1),(19,'BB','Barbados',1246,1),(20,'BY','Belarus',375,1),(21,'BE','Belgium',32,1),(22,'BZ','Belize',501,1),(23,'BJ','Benin',229,1),(24,'BM','Bermuda',1441,1),(25,'BT','Bhutan',975,1),(26,'BO','Bolivia',591,1),(27,'BA','Bosnia and Herzegovina',387,1),(28,'BW','Botswana',267,1),(29,'BV','Bouvet Island',0,1),(30,'BR','Brazil',55,1),(31,'IO','British Indian Ocean Territory',246,1),(32,'BN','Brunei',673,1),(33,'BG','Bulgaria',359,1),(34,'BF','Burkina Faso',226,1),(35,'BI','Burundi',257,1),(36,'KH','Cambodia',855,1),(37,'CM','Cameroon',237,1),(38,'CA','Canada',1,1),(39,'CV','Cape Verde',238,1),(40,'KY','Cayman Islands',1345,1),(41,'CF','Central African Republic',236,1),(42,'TD','Chad',235,1),(43,'CL','Chile',56,1),(44,'CN','China',86,1),(45,'CX','Christmas Island',61,1),(46,'CC','Cocos (Keeling) Islands',672,1),(47,'CO','Colombia',57,1),(48,'KM','Comoros',269,1),(49,'CG','Republic Of The Congo',242,1),(50,'CD','Democratic Republic Of The Congo',242,1),(51,'CK','Cook Islands',682,1),(52,'CR','Costa Rica',506,1),(53,'CI','Cote D\'Ivoire (Ivory Coast)',225,1),(54,'HR','Croatia (Hrvatska)',385,1),(55,'CU','Cuba',53,1),(56,'CY','Cyprus',357,1),(57,'CZ','Czech Republic',420,1),(58,'DK','Denmark',45,1),(59,'DJ','Djibouti',253,1),(60,'DM','Dominica',1767,1),(61,'DO','Dominican Republic',1809,1),(62,'TP','East Timor',670,1),(63,'EC','Ecuador',593,1),(64,'EG','Egypt',20,1),(65,'SV','El Salvador',503,1),(66,'GQ','Equatorial Guinea',240,1),(67,'ER','Eritrea',291,1),(68,'EE','Estonia',372,1),(69,'ET','Ethiopia',251,1),(70,'XA','External Territories of Australia',61,1),(71,'FK','Falkland Islands',500,1),(72,'FO','Faroe Islands',298,1),(73,'FJ','Fiji Islands',679,1),(74,'FI','Finland',358,1),(75,'FR','France',33,1),(76,'GF','French Guiana',594,1),(77,'PF','French Polynesia',689,1),(78,'TF','French Southern Territories',0,1),(79,'GA','Gabon',241,1),(80,'GM','Gambia The',220,1),(81,'GE','Georgia',995,1),(82,'DE','Germany',49,1),(83,'GH','Ghana',233,1),(84,'GI','Gibraltar',350,1),(85,'GR','Greece',30,1),(86,'GL','Greenland',299,1),(87,'GD','Grenada',1473,1),(88,'GP','Guadeloupe',590,1),(89,'GU','Guam',1671,1),(90,'GT','Guatemala',502,1),(91,'XU','Guernsey and Alderney',44,1),(92,'GN','Guinea',224,1),(93,'GW','Guinea-Bissau',245,1),(94,'GY','Guyana',592,1),(95,'HT','Haiti',509,1),(96,'HM','Heard and McDonald Islands',0,1),(97,'HN','Honduras',504,1),(98,'HK','Hong Kong S.A.R.',852,1),(99,'HU','Hungary',36,1),(100,'IS','Iceland',354,1),(101,'IN','India',91,1),(102,'ID','Indonesia',62,1),(103,'IR','Iran',98,1),(104,'IQ','Iraq',964,1),(105,'IE','Ireland',353,1),(106,'IL','Israel',972,1),(107,'IT','Italy',39,1),(108,'JM','Jamaica',1876,1),(109,'JP','Japan',81,1),(110,'XJ','Jersey',44,1),(111,'JO','Jordan',962,1),(112,'KZ','Kazakhstan',7,1),(113,'KE','Kenya',254,1),(114,'KI','Kiribati',686,1),(115,'KP','Korea North',850,1),(116,'KR','Korea South',82,1),(117,'KW','Kuwait',965,1),(118,'KG','Kyrgyzstan',996,1),(119,'LA','Laos',856,1),(120,'LV','Latvia',371,1),(121,'LB','Lebanon',961,1),(122,'LS','Lesotho',266,1),(123,'LR','Liberia',231,1),(124,'LY','Libya',218,1),(125,'LI','Liechtenstein',423,1),(126,'LT','Lithuania',370,1),(127,'LU','Luxembourg',352,1),(128,'MO','Macau S.A.R.',853,1),(129,'MK','Macedonia',389,1),(130,'MG','Madagascar',261,1),(131,'MW','Malawi',265,1),(132,'MY','Malaysia',60,1),(133,'MV','Maldives',960,1),(134,'ML','Mali',223,1),(135,'MT','Malta',356,1),(136,'XM','Man (Isle of)',44,1),(137,'MH','Marshall Islands',692,1),(138,'MQ','Martinique',596,1),(139,'MR','Mauritania',222,1),(140,'MU','Mauritius',230,1),(141,'YT','Mayotte',269,1),(142,'MX','Mexico',52,1),(143,'FM','Micronesia',691,1),(144,'MD','Moldova',373,1),(145,'MC','Monaco',377,1),(146,'MN','Mongolia',976,1),(147,'MS','Montserrat',1664,1),(148,'MA','Morocco',212,1),(149,'MZ','Mozambique',258,1),(150,'MM','Myanmar',95,1),(151,'NA','Namibia',264,1),(152,'NR','Nauru',674,1),(153,'NP','Nepal',977,1),(154,'AN','Netherlands Antilles',599,1),(155,'NL','Netherlands The',31,1),(156,'NC','New Caledonia',687,1),(157,'NZ','New Zealand',64,1),(158,'NI','Nicaragua',505,1),(159,'NE','Niger',227,1),(160,'NG','Nigeria',234,1),(161,'NU','Niue',683,1),(162,'NF','Norfolk Island',672,1),(163,'MP','Northern Mariana Islands',1670,1),(164,'NO','Norway',47,1),(165,'OM','Oman',968,1),(166,'PK','Pakistan',92,1),(167,'PW','Palau',680,1),(168,'PS','Palestinian Territory Occupied',970,1),(169,'PA','Panama',507,1),(170,'PG','Papua new Guinea',675,1),(171,'PY','Paraguay',595,1),(172,'PE','Peru',51,1),(173,'PH','Philippines',63,1),(174,'PN','Pitcairn Island',0,1),(175,'PL','Poland',48,1),(176,'PT','Portugal',351,1),(177,'PR','Puerto Rico',1787,1),(178,'QA','Qatar',974,1),(179,'RE','Reunion',262,1),(180,'RO','Romania',40,1),(181,'RU','Russia',70,1),(182,'RW','Rwanda',250,1),(183,'SH','Saint Helena',290,1),(184,'KN','Saint Kitts And Nevis',1869,1),(185,'LC','Saint Lucia',1758,1),(186,'PM','Saint Pierre and Miquelon',508,1),(187,'VC','Saint Vincent And The Grenadines',1784,1),(188,'WS','Samoa',684,1),(189,'SM','San Marino',378,1),(190,'ST','Sao Tome and Principe',239,1),(191,'SA','Saudi Arabia',966,1),(192,'SN','Senegal',221,1),(193,'RS','Serbia',381,1),(194,'SC','Seychelles',248,1),(195,'SL','Sierra Leone',232,1),(196,'SG','Singapore',65,1),(197,'SK','Slovakia',421,1),(198,'SI','Slovenia',386,1),(199,'XG','Smaller Territories of the UK',44,1),(200,'SB','Solomon Islands',677,1),(201,'SO','Somalia',252,1),(202,'ZA','South Africa',27,1),(203,'GS','South Georgia',0,1),(204,'SS','South Sudan',211,1),(205,'ES','Spain',34,1),(206,'LK','Sri Lanka',94,1),(207,'SD','Sudan',249,1),(208,'SR','Suriname',597,1),(209,'SJ','Svalbard And Jan Mayen Islands',47,1),(210,'SZ','Swaziland',268,1),(211,'SE','Sweden',46,1),(212,'CH','Switzerland',41,1),(213,'SY','Syria',963,1),(214,'TW','Taiwan',886,1),(215,'TJ','Tajikistan',992,1),(216,'TZ','Tanzania',255,1),(217,'TH','Thailand',66,1),(218,'TG','Togo',228,1),(219,'TK','Tokelau',690,1),(220,'TO','Tonga',676,1),(221,'TT','Trinidad And Tobago',1868,1),(222,'TN','Tunisia',216,1),(223,'TR','Turkey',90,1),(224,'TM','Turkmenistan',7370,1),(225,'TC','Turks And Caicos Islands',1649,1),(226,'TV','Tuvalu',688,1),(227,'UG','Uganda',256,1),(228,'UA','Ukraine',380,1),(229,'AE','United Arab Emirates',971,1),(230,'GB','United Kingdom',44,1),(231,'US','United States',1,1),(232,'UM','United States Minor Outlying Islands',1,1),(233,'UY','Uruguay',598,1),(234,'UZ','Uzbekistan',998,1),(235,'VU','Vanuatu',678,1),(236,'VA','Vatican City State (Holy See)',39,1),(237,'VE','Venezuela',58,1),(238,'VN','Vietnam',84,1),(239,'VG','Virgin Islands (British)',1284,1),(240,'VI','Virgin Islands (US)',1340,1),(241,'WF','Wallis And Futuna Islands',681,1),(242,'EH','Western Sahara',212,1),(243,'YE','Yemen',967,1),(244,'YU','Yugoslavia',38,1),(245,'ZM','Zambia',260,1),(246,'ZW','Zimbabwe',263,1);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currencies`
--

DROP TABLE IF EXISTS `currencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `currencies` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `currency_symbol` varchar(30) NOT NULL,
  `currency_name` varchar(30) NOT NULL,
  `currency_type` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `exchange_fees` varchar(45) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL,
  `font_html` varchar(45) DEFAULT NULL,
  `created` varchar(45) NOT NULL,
  `updated` varchar(45) NOT NULL,
  `status` int(15) NOT NULL,
  `is_base` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currencies`
--

LOCK TABLES `currencies` WRITE;
/*!40000 ALTER TABLE `currencies` DISABLE KEYS */;
INSERT INTO `currencies` VALUES (1,'BTC','Bitcoin','coin','8769.74249','0.000015',NULL,NULL,NULL,'12-11-2019 06:24:25','12-11-2019 06:24:25',1,NULL),(2,'ETH','Ethereum','coin','186.18151','0.000800',NULL,NULL,NULL,'12-11-2019 06:24:25','12-11-2019 06:24:25',1,NULL),(3,'LTC','Litecoin','coin','62.10355','0.001201',NULL,NULL,NULL,'12-11-2019 06:24:25','12-11-2019 06:24:25',1,NULL),(4,'XLMG','Stellar Gold','coin','0.00191',NULL,NULL,NULL,NULL,'12-11-2019 06:24:25','12-11-2019 06:24:25',1,1),(5,'USD','USD','fiat','1','1',NULL,NULL,NULL,'24-07-2019 11:19:36','24-07-2019 11:19:36',1,NULL),(6,'EURO','EURO','fiat','0.91','1',NULL,NULL,NULL,'24-07-2019 11:19:36','24-07-2019 11:19:36',1,NULL),(7,'AED','AED','fiat','3.67','1',NULL,NULL,NULL,'24-07-2019 11:19:36','24-07-2019 11:19:36',1,NULL),(8,'INR','INR','fiat','71.24','1',NULL,NULL,NULL,'24-07-2019 11:19:36','24-07-2019 11:19:36',1,NULL),(9,'XLM','Stellar','coin','0.07982',NULL,NULL,NULL,NULL,'12-11-2019 06:24:25','12-11-2019 06:24:25',1,1);
/*!40000 ALTER TABLE `currencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kyc`
--

DROP TABLE IF EXISTS `kyc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kyc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `kyc_data` longtext,
  `checked_by` varchar(45) DEFAULT NULL,
  `created` varchar(20) DEFAULT NULL,
  `checked_on` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kyc`
--

LOCK TABLES `kyc` WRITE;
/*!40000 ALTER TABLE `kyc` DISABLE KEYS */;
/*!40000 ALTER TABLE `kyc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_number` varchar(45) NOT NULL,
  `order_type` varchar(20) NOT NULL,
  `buy_currency_id` int(11) NOT NULL,
  `buy_currency_amount` bigint(20) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `amount_type` varchar(45) DEFAULT NULL,
  `amount_usd` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  `on_sale` int(11) DEFAULT NULL,
  `created` varchar(30) NOT NULL,
  `updated` varchar(30) NOT NULL,
  `status` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_number_UNIQUE` (`order_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `order_number` varchar(80) NOT NULL,
  `method` varchar(20) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `created` varchar(45) NOT NULL,
  `updated` varchar(45) NOT NULL,
  `status` int(15) NOT NULL,
  `address_from` varchar(100) DEFAULT NULL,
  `address_to` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_number_UNIQUE` (`order_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_methods`
--

DROP TABLE IF EXISTS `payment_methods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_m_name` varchar(45) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `avail_in_countries` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_methods`
--

LOCK TABLES `payment_methods` WRITE;
/*!40000 ALTER TABLE `payment_methods` DISABLE KEYS */;
INSERT INTO `payment_methods` VALUES (1,'IMPS Bank Transfer India',1,'{\'IN\'}',1),(2,'Cash Deposit',2,'',1),(3,'Paypal',3,NULL,1),(4,'Western Union',4,'',1),(5,'National Bank Transfer',5,'',1);
/*!40000 ALTER TABLE `payment_methods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `referrals`
--

DROP TABLE IF EXISTS `referrals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `referrals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `referral_id` varchar(45) NOT NULL,
  `referrer_user_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `earning` varchar(45) DEFAULT NULL,
  `created` varchar(45) DEFAULT NULL,
  `updated` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `referrals`
--

LOCK TABLES `referrals` WRITE;
/*!40000 ALTER TABLE `referrals` DISABLE KEYS */;
/*!40000 ALTER TABLE `referrals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `status` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule_events`
--

DROP TABLE IF EXISTS `schedule_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedule_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `schedule_name` varchar(45) NOT NULL,
  `start_date` varchar(45) NOT NULL,
  `end_date` varchar(45) NOT NULL,
  `min_purchase` varchar(45) NOT NULL,
  `asset_distribute` varchar(45) NOT NULL,
  `bonus_percentage` int(11) DEFAULT NULL,
  `created` varchar(45) NOT NULL,
  `updated` varchar(45) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule_events`
--

LOCK TABLES `schedule_events` WRITE;
/*!40000 ALTER TABLE `schedule_events` DISABLE KEYS */;
INSERT INTO `schedule_events` VALUES (1,'Pre-Sale ICO','08/30/2019 12:30','08/31/2019 15:30','0.6','25000',10,'02-08-2019 05:41:50','02-08-2019 06:52:46',1),(2,'Main ICO Sale','09/01/2019 12:00','09/30/2019 13:00',' 0.35','23000',10,'02-08-2019 06:54:17','02-08-2019 06:54:17',2);
/*!40000 ALTER TABLE `schedule_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_name` varchar(45) NOT NULL,
  `access` varchar(45) NOT NULL,
  `json` longtext NOT NULL,
  `created` varchar(45) DEFAULT NULL,
  `updated` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'maintainance','1','{\"title\":\"Sorry Some Technical Problem\",\"message\":\"Site Will Be Live Soon!\"}','08-07-2019 12:58:50','08-07-2019 12:58:50',2),(2,'maintainance','1','{\"title\":\"Server Overloaded\",\"message\":\"We Will Back Soon!\"}','09-07-2019 08:25:51','09-07-2019 08:25:51',2),(3,'transaction_fees','1','{\"ETH\":\"0.0000021\",\"BTC\":\"0.0000713\",\"USD\" : \"4\"}',NULL,NULL,NULL),(4,'payment_wallet','1','                                                                                                                                                                                                {\"BTC\":\"1AWBYZPtrNYWc2nTwFQ744uSNJWPTD98PQ\",\"ETH\":\"0xDdae6d3Ab54b35C068fde51199E6C10aCDE0Cda2\",\"LTC\":\"LbxoBkNGWh96SbJ1z6gKHLrww5tZ5JVV1o\",\"XLM\":\"18QxZSgkxjR8BvvL1GuJ26p3m9t9Y1kMRA\"}','09-07-2019 08:25:51','09-07-2019 08:25:51',2),(5,'token_info','1','{\"total_circulating_supply\":54000000,\"volume_token\":26,\"remaining_token\":53999974}','09-07-2019 08:25:51','09-07-2019 08:25:51',1),(6,'page_block','1','[]','09-07-2019 08:25:51','09-07-2019 08:25:51',2),(7,'sendgrid_api','1','{\"apiKey\":\"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\"}','09-07-2019 08:25:51','09-07-2019 08:25:51',1),(8,'emails','1','{\"support\":\"support@localstellars.com\"}','09-07-2019 08:25:51','09-07-2019 08:25:51',1),(9,'plivio_api','1','{\"authID\":\"MAOTM2MTEXOTFHNMI5ZJ\",\"authToken\":\"YTQyNmY5ZjIxNzJhMmYwYzg4ZDVhMWQxNzQ1ZWFj\"}','09-07-2019 08:25:51','09-07-2019 08:25:51',1);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `statusCode` int(11) DEFAULT NULL,
  `statusName` varchar(45) DEFAULT NULL,
  `statusColor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,1,'active','success'),(2,2,'deactive','danger'),(3,3,'suspended','warning'),(4,4,'pending','info'),(5,5,'progress','success'),(6,6,'missing','warning'),(7,7,'rejected','danger'),(8,8,'upcoming','warning'),(9,9,'blocked','warning');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriber_listing`
--

DROP TABLE IF EXISTS `subscriber_listing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriber_listing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `created` varchar(45) DEFAULT NULL,
  `updated` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriber_listing`
--

LOCK TABLES `subscriber_listing` WRITE;
/*!40000 ALTER TABLE `subscriber_listing` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriber_listing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaction` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `payment_id` int(50) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `status` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction`
--

LOCK TABLES `transaction` WRITE;
/*!40000 ALTER TABLE `transaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `exId` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `facebook_oauth` varchar(45) DEFAULT NULL,
  `google_oauth` varchar(45) DEFAULT NULL,
  `resetCode` varchar(45) DEFAULT NULL,
  `otp` varchar(45) DEFAULT NULL,
  `role` varchar(20) NOT NULL,
  `created` varchar(20) NOT NULL,
  `updated` varchar(20) NOT NULL,
  `status` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (5,'er45df34276kji0bgh5675643765','admin@ixinium.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3','Satoshi Nakamoto',NULL,NULL,NULL,NULL,NULL,'admin','17-06-2019','02-08-2019',3),(7,'5d2722aa07cf41562845866','algobasket@gmail.com','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3','Hamza','Khan',NULL,NULL,NULL,'LS-1575379961','customer','11-07-2019','29-11-2019',1),(20,'5da45bac7cd101571052460','sebokiyam@nixemail.net','06b2573160c73d4e142aab9001fccdd96c04df951cca046c6ae49b03e4a07318','sebokiyam','Das',NULL,NULL,NULL,NULL,'customer','14-10-2019','14-10-2019',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_advertise`
--

DROP TABLE IF EXISTS `user_advertise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_advertise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) DEFAULT NULL,
  `json` longtext,
  `created` varchar(45) DEFAULT NULL,
  `updated` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_advertise`
--

LOCK TABLES `user_advertise` WRITE;
/*!40000 ALTER TABLE `user_advertise` DISABLE KEYS */;
INSERT INTO `user_advertise` VALUES (1,NULL,'{\"openingHours\":{\"sunday_start\":\"00:15\",\"sunday_end\":\"00:15\"},\"tradeType\":\"2\",\"currency\":\"EURO\",\"location\":\"Guwahati, Assam, India\",\"bankName\":\"455\",\"marginPercentage\":\"4\",\"priceEquation\":\"5\",\"minTran\":\"1\",\"maxTran\":\"100\",\"liquidityOption\":\"on\",\"securityOption\":{\"identified_people_only\":\"on\",\"sms_verification\":\"on\",\"trusted_people_only\":\"on\"},\"description\":\"sdsdf\",\"iAgree\":\"on\"}','06-11-2019 06:36:05','06-11-2019 06:36:05',1),(2,'7','{\"openingHours\":{\"sunday_start\":\"00:15\",\"sunday_end\":\"01:30\"},\"tradeType\":\"2\",\"currency\":\"USD\",\"location\":\"Guayaquil, Ecuador\",\"bankName\":\"455\",\"marginPercentage\":\"56\",\"priceEquation\":\"5\",\"minTran\":\"1\",\"maxTran\":\"100\",\"liquidityOption\":\"on\",\"securityOption\":{\"identified_people_only\":\"on\",\"sms_verification\":\"on\",\"trusted_people_only\":\"on\"},\"description\":\"dgrdgr\",\"iAgree\":\"on\"}','06-11-2019 06:40:38','06-11-2019 06:40:38',1),(3,'7','{\"openingHours\":{\"sunday_start\":\"00:45\",\"sunday_end\":\"01:45\"},\"tradeType\":\"2\",\"currency\":\"USD\",\"location\":\"Granada, Spain\",\"bankName\":\"455\",\"marginPercentage\":\"4\",\"priceEquation\":\"\",\"minTran\":\"1\",\"maxTran\":\"100\",\"liquidityOption\":\"on\",\"securityOption\":{\"identified_people_only\":\"on\",\"sms_verification\":\"on\",\"trusted_people_only\":\"on\"},\"description\":\"fdgdfg\",\"iAgree\":\"on\"}','06-11-2019 06:54:49','06-11-2019 06:54:49',1),(4,'7','{\"openingHours\":{\"sunday_start\":\"00:15\",\"sunday_end\":\"00:15\"},\"tradeType\":\"2\",\"currency\":\"USD\",\"location\":\"Granada, Spain\",\"bankName\":\"455\",\"marginPercentage\":\"4\",\"priceEquation\":\"5\",\"minTran\":\"1\",\"maxTran\":\"100\",\"liquidityOption\":\"on\",\"securityOption\":{\"identified_people_only\":\"on\",\"sms_verification\":\"on\",\"trusted_people_only\":\"on\"},\"description\":\"asdasd\",\"iAgree\":\"on\"}','06-11-2019 06:57:09','06-11-2019 06:57:09',1),(5,'7','{\"openingHours\":{\"sunday_start\":\"00:15\",\"sunday_end\":\"01:15\"},\"tradeType\":\"2\",\"currency\":\"USD\",\"location\":\"Hamilton, ON, Canada\",\"bankName\":\"asdd\",\"marginPercentage\":\"4\",\"priceEquation\":\"5\",\"minTran\":\"1\",\"maxTran\":\"100\",\"liquidityOption\":\"on\",\"securityOption\":{\"identified_people_only\":\"on\",\"sms_verification\":\"on\",\"trusted_people_only\":\"on\"},\"description\":\"werwerwer\",\"iAgree\":\"on\"}','06-11-2019 06:59:36','06-11-2019 06:59:36',1),(6,NULL,'{\"openingHours\":{\"sunday_start\":\"00:30\",\"sunday_end\":\"01:00\",\"monday_start\":\"00:00\",\"monday_end\":\"End\",\"tuesday_start\":\"Start\",\"tuesday_end\":\"End\",\"wed_start\":\"Start\",\"wed_end\":\"End\",\"thursday_start\":\"Start\",\"thursday_end\":\"End\",\"friday_start\":\"Start\",\"friday_end\":\"End\",\"saturday_start\":\"Start\",\"saturday_end\":\"End\"},\"tradeType\":\"1\",\"currency\":\"AED\",\"location\":\"Paris, France\",\"bankName\":\"Royan Bank\",\"marginPercentage\":\"5\",\"priceEquation\":\"XLM_IN_AED\",\"minTran\":\"16\",\"maxTran\":\"1002\",\"liquidityOption\":\"on\",\"securityOption\":{\"identified_people_only\":\"on\",\"sms_verification\":\"on\",\"trusted_people_only\":\"on\"},\"description\":\"Test\",\"iAgree\":\"on\"}','07-11-2019 01:50:45','07-11-2019 01:50:45',1),(7,NULL,'{\"openingHours\":{\"sunday_start\":\"Start\",\"sunday_end\":\"End\",\"monday_start\":\"Start\",\"monday_end\":\"End\",\"tuesday_start\":\"Start\",\"tuesday_end\":\"End\",\"wed_start\":\"Start\",\"wed_end\":\"End\",\"thursday_start\":\"Start\",\"thursday_end\":\"End\",\"friday_start\":\"Start\",\"friday_end\":\"End\",\"saturday_start\":\"Start\",\"saturday_end\":\"End\"},\"tradeType\":\"2\",\"currency\":\"AED\",\"location\":\"London Bridge, London, UK\",\"bankName\":\"Royan Bank\",\"marginPercentage\":\"4\",\"priceEquation\":\"XLM_IN_AED\",\"minTran\":\"15\",\"maxTran\":\"1007\",\"liquidityOption\":\"on\",\"securityOption\":{\"identified_people_only\":\"on\",\"sms_verification\":\"on\",\"trusted_people_only\":\"on\"},\"description\":\"test\",\"iAgree\":\"on\"}','07-11-2019 02:09:36','07-11-2019 02:09:36',1);
/*!40000 ALTER TABLE `user_advertise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_detail`
--

DROP TABLE IF EXISTS `user_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_detail` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `email_status` int(11) NOT NULL,
  `email_verify_code` varchar(45) DEFAULT NULL,
  `kyc_status` int(11) DEFAULT NULL,
  `2fa_mobile_status` int(11) DEFAULT NULL,
  `wallet` varchar(100) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `nationality` varchar(45) DEFAULT NULL,
  `mobile_number` varchar(15) DEFAULT NULL,
  `currencies` varchar(100) DEFAULT NULL,
  `settings` longtext,
  `created` varchar(20) DEFAULT NULL,
  `updated` varchar(20) NOT NULL,
  `status` int(15) DEFAULT NULL,
  `referrer_count` int(11) DEFAULT NULL,
  `has_newsletter_subscription` tinyint(4) DEFAULT NULL,
  `kyc_detail` longtext,
  `account_level` int(11) DEFAULT NULL,
  `on_vacation` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  CONSTRAINT `fk_user_detail_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_detail`
--

LOCK TABLES `user_detail` WRITE;
/*!40000 ALTER TABLE `user_detail` DISABLE KEYS */;
INSERT INTO `user_detail` VALUES (5,5,0,NULL,0,NULL,'','02/06/1990','US','+918800580884','','{\"save_log\":\"0\",\"pass_change_confirm\":\"0\",\"latest_news\":\"0\",\"activity_alert\":\"0\"}','0000-00-00','02-08-2019',0,NULL,NULL,NULL,1,'[\'sv\',\'bv\']'),(7,7,0,NULL,NULL,1,NULL,'','US','+918800580884','{\"xxa\":\"GBH4TZYZ4IRCPO44CBOLFUHULU2WGALXTAVESQA6432MBJMABBB4GIYI\"}','{\"save_log\":\"1\",\"pass_change_confirm\":\"1\",\"latest_news\":\"1\",\"activity_alert\":\"1\"}',NULL,'29-11-2019',NULL,NULL,NULL,NULL,1,'{\"sv\":\"1\",\"bv\":\"1\"}'),(20,20,1,'1',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'{\"fname\":\"sebokiyam\",\"lname\":\"Das\",\"email\":\"sebokiyam@nixemail.net\",\"phone\":\"4444444444\",\"dob\":\"10\\/31\\/2019\",\"telegram\":\"asdasd\",\"address1\":\"asdassfasf\",\"address2\":\"sadasd\",\"city\":\"asdasd\",\"state\":\"asdasd\",\"nationality\":\"Argentina\",\"zipcode\":\"34342343\",\"documentType\":\"passport\",\"swallet\":\"LTC\",\"tokenAddress\":\"fdgdfgdfgdfgdfgdfgdfg\",\"created\":\"2019-10-14 07:01 pm\",\"passport\":\"1571059902.jpg\"}',1,NULL);
/*!40000 ALTER TABLE `user_detail` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-03 23:57:24
