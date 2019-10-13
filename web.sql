-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: mydb
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
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id_content` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(10000) DEFAULT NULL,
  `label` varchar(10) NOT NULL,
  `file_link_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_content`),
  KEY `content_file_link_id_file_link_fk` (`file_link_id`),
  CONSTRAINT `content_file_link_id_file_link_fk` FOREIGN KEY (`file_link_id`) REFERENCES `file_link` (`id_file_link`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,'<p class=\"text_content\">usdjhdsjfsdВ данной лабораторной работе нам необходимо сверстать структуру HTML-документа. И в соответствии с шаблоном реализовать мини-сайт (не фиксированный: резиновый, адаптивный) с заданной тематикой, используя блочную верстку. Необходимо использовать данный шаблон:</p><p align=\"center\"><img src=\"images/sample.jpg\" alt=\"Шаблон\"></p><p class=\"text_content\">Главная страница должна содержать: шапку, блок навигации, левое меню (на некоторых страницах оно не будет отображаться), контент, подвал сайта.</p><p class=\"text_content\">При выборе пункта меню (О нас, Контактная информация) в блоке навигации в области контента отображается соответствующая информация. При выборе меню (Каталог / Перечень / Список) в блоке контента отображается перечень соответствующих ссылок (а также появляется меню слева), при выборе любого пункта меню в блоке контента отображается информация о выбранном элементе.</p><p class=\"text_content\">В помошь <a class=\"a_default\" href=\"http://htmlbook.ru/\">htmlbook</a>.</p>','lab1',NULL),(2,'<p class=\"text_content\"> <ol> <li> Установка сервера, настройка. Установка и подключение СУБД </li><li> Подготовить статические текстовые файлы с описанием содержимого одиночных страниц Пример. Тема «Туристическое агентство». Раздел «Каталог стран» содержит перечень государств, в которые турагентство предлагает путевки. Одиночная страница содержит описание конкретной страны (общее описание, географическое положение, столица, крупнейшие города и т.п.) </li><li> Построение динамического приложения. Необходимо модернизировать созданный на предыдущем занятии сайт. Добавить динамическое формирование контента на основе массива. Массив для каталога (Название: Россия, метка -russia) задать вручную в файле PHP. Название выводится на странице, а метка используется для формирования ссылки </li><li> Все страницы, которые были на первом занятии в HTML формировать динамически (разбить на блоки – при выводе их собирать, использовать INCLUDE) </li><li> Контент меняется в зависимости от пункта меню </li><li> Меню формируется в отдельном файле </li><li> PHP–файл, в котором обрабатывается определенный пункт меню (О нас, Каталог, Контакты). В зависимости от выбранного пункта в каталоге - передаём GET-параметр– подставляем в контент текст из определенного статического файлаТо есть имеем файл index.php, в котором осуществляем сборку страницы (подключаем hat.htm, head.htm, footer.htm, content.php).Сontent.php – отвечает за маршрутизацию: О нас (about), Каталог (katalog), Контакты (contact). Katalog задает правила формирования блока контента. Это может быть список всех элементов массива LIST (список стран) или одиночный элемент SINGLE (описание страны). SINGLE получает GET-параметр с меткой элемента и в зависимости от этого формируется содержимое страницы</li></ol></p>','lab2',NULL),(3,'<p class=\"text_content\">Необходимо разработать концептуальную схему базы данных, в которой будет храниться содержимое сайта.</p><div class=\"image\"><img src=\"images/web_scheme.png\" alt=\"Схема базы данных\"></div>\n','lab3',NULL),(4,NULL,'about',1),(5,NULL,'contacts',2),(6,'<p class=\"text_content\">Цель лабораторной работы заключается в реализации и внедрении разработанной на предыдущей лабораторной работе базы данных</p>\n','lab4',NULL);
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file_link`
--

DROP TABLE IF EXISTS `file_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file_link` (
  `id_file_link` int(11) NOT NULL AUTO_INCREMENT,
  `file_uri` varchar(500) NOT NULL,
  PRIMARY KEY (`id_file_link`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file_link`
--

LOCK TABLES `file_link` WRITE;
/*!40000 ALTER TABLE `file_link` DISABLE KEYS */;
INSERT INTO `file_link` VALUES (1,'about.php'),(2,'contacts.php');
/*!40000 ALTER TABLE `file_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lab`
--

DROP TABLE IF EXISTS `lab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab` (
  `id_lab` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `menu_title` varchar(200) NOT NULL,
  `order_number` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `title_id` int(11) NOT NULL,
  PRIMARY KEY (`id_lab`,`content_id`,`title_id`),
  KEY `fk_lab_content1_idx` (`content_id`),
  KEY `fk_lab_title1_idx` (`title_id`),
  CONSTRAINT `fk_lab_content1` FOREIGN KEY (`content_id`) REFERENCES `content` (`id_content`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_lab_title1` FOREIGN KEY (`title_id`) REFERENCES `title` (`id_title`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lab`
--

LOCK TABLES `lab` WRITE;
/*!40000 ALTER TABLE `lab` DISABLE KEYS */;
INSERT INTO `lab` VALUES (1,'2019-02-12','Лабораторная работа #1',1,1,1),(2,'2019-02-26','Лабораторная работа #2',2,2,2),(3,'2019-03-12','Лабораторная работа #3',3,3,3),(4,'2019-03-26','Лабораторная работа #4',4,6,4);
/*!40000 ALTER TABLE `lab` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `title`
--

DROP TABLE IF EXISTS `title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `title` (
  `id_title` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(500) NOT NULL,
  `label` varchar(10) NOT NULL,
  PRIMARY KEY (`id_title`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `title`
--

LOCK TABLES `title` WRITE;
/*!40000 ALTER TABLE `title` DISABLE KEYS */;
INSERT INTO `title` VALUES (1,'<h1 class=\"text_title\">Лабораторная работа 1. HTML + CSS. Разработка статической страницы (меню и несколько страниц)</h1>','lab1'),(2,'<h1 class=\"text_title\">Лабораторная работа 2. Построение динамического приложения. Использование параметров POST и GET (в зависимости от параметров что-то менять)</h1>','lab2'),(3,'<h1 class=\"text_title\">Лабораторная работа 3. Разработка концептуальной схемы</h1>','lab3'),(4,'<h1 class=\"text_title\">Лабораторная работа 4. Использование базы данных в разрабатываемом WEB-приложении</h1>','lab4');
/*!40000 ALTER TABLE `title` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `biography` varchar(1000) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_data_username_uindex` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_data`
--

LOCK TABLES `user_data` WRITE;
/*!40000 ALTER TABLE `user_data` DISABLE KEYS */;
INSERT INTO `user_data` VALUES (9,'nick','sdfswt4543','pass',1),(10,'nick2','fghgfhthrtsdsdfsdfdsfsddsfdsdsfds','1',0);
/*!40000 ALTER TABLE `user_data` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-26 20:44:55
