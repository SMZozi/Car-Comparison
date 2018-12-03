/*
SQLyog Community Edition- MySQL GUI v5.22a
Host - 5.1.30-community : Database - final database
*********************************************************************
Server version : 5.1.30-community
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `final database`;

USE `final database`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `cust_search` */

DROP TABLE IF EXISTS `cust_search`;

CREATE TABLE `cust_search` (
  `v_vehicle_id` int(10) DEFAULT NULL,
  `cs_results` varchar(30) DEFAULT 'Available',
  `c_cust_id` int(5) DEFAULT NULL,
  `cs_cust_date` date DEFAULT NULL,
  `cs_search_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cs_search_id`),
  KEY `FK_cust_search` (`c_cust_id`),
  KEY `FK_cust_search1` (`v_vehicle_id`),
  CONSTRAINT `FK_cust_search` FOREIGN KEY (`c_cust_id`) REFERENCES `tblcustomer` (`c_cust_id`),
  CONSTRAINT `FK_cust_searchR` FOREIGN KEY (`v_vehicle_id`) REFERENCES `tblvehicle` (`v_vehicle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cust_search` */

/*Table structure for table `dealer_vehicle` */

DROP TABLE IF EXISTS `dealer_vehicle`;

CREATE TABLE `dealer_vehicle` (
  `dv_reg_no` varchar(30) NOT NULL,
  `v_vehicle_id` int(10) NOT NULL,
  `d_dealer_id` int(10) unsigned NOT NULL,
  `dv_status` varchar(20) DEFAULT 'available',
  `dv_price` int(10) DEFAULT NULL,
  `dv_mileage` int(10) DEFAULT NULL,
  `dv_image` varchar(255) DEFAULT NULL,
  `dv_colour` varchar(30) DEFAULT NULL,
  `dv_year` int(11) DEFAULT NULL,
  `dv_preowned` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`dv_reg_no`),
  KEY `FK_dealer_vehicle` (`v_vehicle_id`),
  KEY `FK_dealer_vehicle1` (`d_dealer_id`),
  CONSTRAINT `FK_dealer_vehicle` FOREIGN KEY (`d_dealer_id`) REFERENCES `tbldealer` (`d_dealer_id`),
  CONSTRAINT `FK_dealer_vehicleR` FOREIGN KEY (`v_vehicle_id`) REFERENCES `tblvehicle` (`v_vehicle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dealer_vehicle` */

insert  into `dealer_vehicle`(`dv_reg_no`,`v_vehicle_id`,`d_dealer_id`,`dv_status`,`dv_price`,`dv_mileage`,`dv_image`,`dv_colour`,`dv_year`,`dv_preowned`) values ('111-KKN-MP',2,21,'available',300000,2000,'Images/JUKE.jpg','WHITE',2017,NULL),('147-HNM-GP',3,15,'available',250000,1000,'Images/CLA35.jpg','WHITE',2011,NULL),('147-HNM-MP',3,15,'available',250000,1000,'Images/Mercedes-CLA-35.jpg','WHITE',2015,NULL),('459-pop-nn',1,14,'available',140000,20000,'Images/43c816a842498116bc8ad183a4fac671.jpg','BLUE',2011,NULL),('892-mxn-122',1,14,'available',140000,20000,'Images/2017-bmw-3-series-in-depth-model-review-car-and-driver-photo-686405-s-original.jpg','BLUE',2011,NULL),('aqas-mkk',1,14,'available',140000,20000,'Images/images (1).jpg','GREY',2009,NULL),('FOP-123-OPL',4,14,'available',140000,20000,'Images/P90185998-the-new-bmw-z4-in-estoril-blue-metallic-07-2015-2250px.jpg','BLUE',2015,NULL),('gp-1023-gp',4,13,'available',1233,1255,'Images/Z4.jpg','red',2014,'YES'),('gp-1023-nm',1,13,'available',1233,1255,'Images/bmw-3-series.png','red',2013,'NO'),('HJK-M-2011',7,21,'available',20000,50000,'Images/Capture001.png','BLUE',2008,NULL),('HJK-M-2013',7,27,'available',20000,50000,'Images/Capture001.png','BLUE',2010,NULL),('HJK-MXA-2009',7,21,'available',20000,50000,'Images/hqdefault.jpg','BLUE',2009,NULL),('HJK-MXA-2010',7,21,'available',20000,50000,'Images/CLA35.jpg','BLUE',2008,NULL),('HJK-MXA-2011',7,21,'available',20000,50000,'Images/bmw_3_series.jpg','BLUE',2008,NULL),('HJK-MXA-2015',7,21,'available',20000,50000,'Images/TUTbrandScreenSave.png','BLUE',2008,NULL),('HJK-MXA-2018',1,24,'available',20000,50000,'Images/bmw_3_series.jpg','BLUE',2010,NULL),('HJK-MXA-2019',7,21,'available',20000,50000,'Images/hqdefault.jpg','BLUE',2008,NULL),('HJK-MXA-2044',7,21,'available',20000,50000,'Images/TUTbrandScreenSave.png','BLUE',2009,NULL),('HJK-MXA-2601',7,21,'available',20000,50000,'Images/TUTbrandScreenSave.png','BLUE',2010,NULL),('HJK-MXA-2609',7,21,'available',20000,50000,'Images/TUTbrandScreenSave.png','BLUE',2008,NULL),('jjj-122-pop',1,14,'available',140000,20000,'Images/bmw_3_series.jpg','BLUE',2011,NULL),('lll-123-lko',3,14,'available',140000,20000,'Images/2013-bmw-activehybrid-3_100367245_m.jpg','BLUE',2011,NULL),('MDK-566-POO',4,14,'available',140000,20000,'Images/bmw-z4-m40i.jpg','GREY',2011,NULL),('MP-ZN-MM',1,20,'available',20000,144,'Images/3series.jpg','blue',2008,'YES'),('OPO-FF-123',7,14,'available',140000,20000,'Images/2019-bmw-3-series-rendering.jpg','BLUE',2015,NULL),('RTJ-123-JKL',4,21,'available',400000,10000,'Images/2016_bmw_2_series-pic-5512270493035410651-640x480.jpeg','BLUE',2011,NULL),('yuu-888-kzn',3,14,'available',140000,20000,'Images/2018_mercedes-benz_cla_45-amg_coupe_001_rj.png','RED',2011,NULL),('ZN-MTH-322',2,15,'available',250000,1000,'Images/hqdefault.jpg','GREEN',2018,NULL);

/*Table structure for table `dv_feature` */

DROP TABLE IF EXISTS `dv_feature`;

CREATE TABLE `dv_feature` (
  `dvf_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_feature_id` int(10) NOT NULL,
  `dv_reg_no` varchar(10) NOT NULL,
  PRIMARY KEY (`dvf_id`),
  UNIQUE KEY `f_feature_id` (`f_feature_id`,`dv_reg_no`),
  KEY `FK_dv_feature` (`f_feature_id`),
  KEY `FK_dv_featureR` (`dv_reg_no`),
  CONSTRAINT `FK_dv_feature` FOREIGN KEY (`f_feature_id`) REFERENCES `tblfeature` (`f_feature_id`),
  CONSTRAINT `FK_dv_featureR` FOREIGN KEY (`dv_reg_no`) REFERENCES `dealer_vehicle` (`dv_reg_no`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

/*Data for the table `dv_feature` */

insert  into `dv_feature`(`dvf_id`,`f_feature_id`,`dv_reg_no`) values (2,1,'gp-1023-nm'),(5,1,'gp-1023-gp'),(6,1,'MP-ZN-MM'),(8,6,'gp-1023-nm'),(13,6,'111-KKN-MP'),(14,8,'111-KKN-MP'),(37,2,'111-KKN-MP'),(38,1,'111-KKN-MP');

/*Table structure for table `tbladministrator` */

DROP TABLE IF EXISTS `tbladministrator`;

CREATE TABLE `tbladministrator` (
  `ad_Id` int(4) NOT NULL AUTO_INCREMENT,
  `ad_username` varchar(40) DEFAULT NULL,
  `ad_first_name` varchar(30) DEFAULT NULL,
  `ad_last_name` varchar(30) DEFAULT NULL,
  `ad_cell_no` varchar(10) DEFAULT NULL,
  `ad_tell_no` varchar(10) DEFAULT NULL,
  `ad_postBox` varchar(20) DEFAULT NULL,
  `ad_postCode` varchar(5) DEFAULT NULL,
  `ad_password` varchar(30) DEFAULT NULL,
  `ad_recovery_pswd` varchar(30) DEFAULT NULL,
  `d_dealer_id` int(10) unsigned zerofill DEFAULT NULL,
  `ad_id_no` varchar(13) DEFAULT NULL,
  `roleNum` int(3) NOT NULL DEFAULT '2',
  PRIMARY KEY (`ad_Id`),
  KEY `FK_tbladministrator` (`d_dealer_id`),
  KEY `FK_tbladministrator_1` (`roleNum`),
  CONSTRAINT `FK_tbladministrator_1` FOREIGN KEY (`roleNum`) REFERENCES `tblrole` (`roleNum`),
  CONSTRAINT `FK_tbladministrator` FOREIGN KEY (`d_dealer_id`) REFERENCES `tbldealer` (`d_dealer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `tbladministrator` */

insert  into `tbladministrator`(`ad_Id`,`ad_username`,`ad_first_name`,`ad_last_name`,`ad_cell_no`,`ad_tell_no`,`ad_postBox`,`ad_postCode`,`ad_password`,`ad_recovery_pswd`,`d_dealer_id`,`ad_id_no`,`roleNum`) values (2,'ADMIN1','PULANE','MADISHA','0636312345','0127456896','1341','1478','12345','12345',0000000021,'960812789654',2),(3,'ADMIN2','EMMANUEL','MASUKU','0763907865','0137456123','1034','1035','12345','98745',0000000015,'621103890041',2),(4,'ADMIN3','THABANG','KGANAK','0790844289','0117896412','1579','1145','12345','54321',0000000014,'6908221234567',2),(5,'ADMIN4','LINDO','NKOSI','0824567891','0217412569','2014','1234','12345','654321',0000000016,'7703127896421',2),(9,'admin','MXOLISI','MBATHA','0725695223','0112358662','5688 KWA GUQA','3880','MXOLISI',NULL,0000000013,'9511235528569',2),(13,'DEALER3','LINDOKUHLE','ZULU','0792825668','0112825665','G BB 1233','1039','123456',NULL,0000000019,'9511235527086',2),(16,'dealer','ZONKE','MBATHA','0725689223','0113655544','5655 KWAGUQA','1050','123456',NULL,0000000020,'95112322554',0),(17,'MXOLA',NULL,NULL,NULL,NULL,NULL,NULL,'MBATHA',NULL,0000000024,NULL,2),(18,'MTHIYA',NULL,NULL,NULL,NULL,NULL,NULL,'MBATHA',NULL,0000000025,NULL,2),(19,'ZULU',NULL,NULL,NULL,NULL,NULL,NULL,'MBATHA',NULL,0000000026,NULL,2),(20,'MSUTHU',NULL,NULL,NULL,NULL,NULL,NULL,'MBATHA',NULL,0000000027,NULL,2),(21,'judith2',NULL,NULL,NULL,NULL,NULL,NULL,'judith2',NULL,0000000028,NULL,2),(22,'MKHIZE',NULL,NULL,NULL,NULL,NULL,NULL,'MKHIZE',NULL,0000000029,NULL,2),(23,'zembe',NULL,NULL,NULL,NULL,NULL,NULL,'12345',NULL,0000000030,NULL,2),(24,'MTHIYA',NULL,NULL,NULL,NULL,NULL,NULL,'MTHIYA',NULL,0000000031,NULL,2),(25,'GOGO',NULL,NULL,NULL,NULL,NULL,NULL,'12345',NULL,0000000032,NULL,2);

/*Table structure for table `tblcustomer` */

DROP TABLE IF EXISTS `tblcustomer`;

CREATE TABLE `tblcustomer` (
  `c_username` varchar(50) DEFAULT NULL,
  `c_email_address` varchar(50) DEFAULT NULL,
  `c_first_name` varchar(25) DEFAULT NULL,
  `c_last_name` varchar(25) DEFAULT NULL,
  `c_IDNo` varchar(13) DEFAULT NULL,
  `c_poAdd_PBox` varchar(30) DEFAULT NULL,
  `c_poAdd_City` varchar(30) DEFAULT NULL,
  `c_poAdd_PostalCode` varchar(30) DEFAULT NULL,
  `c_poAdd_Province` varchar(20) DEFAULT NULL,
  `c_cellNo` varchar(10) DEFAULT NULL,
  `c_tellNo` varchar(10) DEFAULT NULL,
  `c_password` varchar(15) DEFAULT NULL,
  `c_cust_id` int(5) NOT NULL AUTO_INCREMENT,
  `c_recovery_pswd` varchar(20) DEFAULT NULL,
  `roleNum` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`c_cust_id`),
  KEY `FK_tblcustomer` (`roleNum`),
  CONSTRAINT `FK_tblcustomer` FOREIGN KEY (`roleNum`) REFERENCES `tblrole` (`roleNum`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `tblcustomer` */

insert  into `tblcustomer`(`c_username`,`c_email_address`,`c_first_name`,`c_last_name`,`c_IDNo`,`c_poAdd_PBox`,`c_poAdd_City`,`c_poAdd_PostalCode`,`c_poAdd_Province`,`c_cellNo`,`c_tellNo`,`c_password`,`c_cust_id`,`c_recovery_pswd`,`roleNum`) values ('CUST6','fanikievuma@yahoo.com','FANIKIE','VUMA','9102167894080','2014','TZANEEN','3645','LIMPOPO','0825063858','0317894563','12345',14,'12345',1),('CUST7','masukujp@gmail.com','JABU','MASUKU','8605127894081','2015','VERENEEGING','1045','MPUMALANGA','0637894563','0127894563','12345',15,'12345',1),('CUST8','mbonaniMj7@gmail.com','MTHOKOZISI','MBONANI','5409071234082','7896','SEBOKENG','1341','GAUTENG','0824567123','0137896412','12345',16,'12345',1),('CUST9','mvelaseZk@email.com','REGINAH','MVELASE','6208220089084','1789','SOSHANGUVE','1452','WESTERN CAPE','0608382640','0127896412','12345',17,'12345',1),('CUST10','langaST@yahoo.com','STAFF','LANGA','8804137895082','2018','NKOMAZI','1340','NORTH WEST','0714750138','0317896412','12345',18,'12345',1),('CUST11','mxolisi@gmail.com','mxolisi','mbatha','95112355689','kwa guqa ext 10','emalahleni','3880','mpumalanga','079282566','063552233',NULL,21,NULL,1),('CUST12','VV@GMAIL.COM','sbuda','msiza','951222332121','kwaguqa 1566','witbankl','1035','MPUMALANGA','0792523589','0112355514','123456',29,NULL,1),('CUST14','MMXOLISI@GMAIL.COM','MORGAN','NKOSI','951222332121','kwaguqa 1566','witbankl','1035','NORTH WEST','0792523589','0112355514','123456',30,NULL,1),('cust21','123@gmail.com','mpumi','zwane','9411235525225','12345 corination','malahleni','1035','MPUMALANGA','0792525896','1235563','123456',31,NULL,1),(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,32,NULL,1);

/*Table structure for table `tbldealer` */

DROP TABLE IF EXISTS `tbldealer`;

CREATE TABLE `tbldealer` (
  `d_dealer_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `d_dealer_name` varchar(30) DEFAULT NULL,
  `d_dealer_province` varchar(30) DEFAULT NULL,
  `d_dealer_city` varchar(30) DEFAULT NULL,
  `d_dealer_suburb` varchar(30) DEFAULT NULL,
  `d_dealer_tell` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`d_dealer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `tbldealer` */

insert  into `tbldealer`(`d_dealer_id`,`d_dealer_name`,`d_dealer_province`,`d_dealer_city`,`d_dealer_suburb`,`d_dealer_tell`) values (0000000013,'mxola dealer','MPUMALANGA','WITBANK',NULL,'0112325238'),(0000000014,'SKHOSANA','MPUMALANGA','WITBANK','NAMBANAMBA','0112536555'),(0000000015,'MASHOBANE DEALERSHIP','LIMPOMPO','POLOKWANE','REMPE','0112515123'),(0000000016,'zolani','MPUMALANGA','MIDDLEBURG','MTONO','0112515123'),(0000000019,'NKKM DEALERSHIP','MPUMALANGA','MIDDLEBURG','MTONO','0112515123'),(0000000020,'KEKEMA','KZN','DURBAN','NORH','0112515123'),(0000000021,'ZONDI CAR DEALER','WESTERN CAPE','CAPETOWN','NORH','0112515123'),(0000000022,'','','','',''),(0000000023,'ZAMBEZI','KZN','MPANGENI','WEST','0792355852'),(0000000024,'ZAMBEZI','GAUTENG','MPANGENI','WEST','0792355852'),(0000000025,'SKOPO','GAUTENG','MPANGENI','EAST','0792355852'),(0000000026,'SKOPONDO','MPUMALANGA','WITBANK','EAST','0792355852'),(0000000027,'SKOPONDO','MPUMALANGA','MPANGENI','EAST','0792355852'),(0000000028,'SKOPONDO','LIMPOMPO','MPANGENI','WEST','0792355852'),(0000000029,'KHABAZELA','MPUMALANGA','WITBANK','DOWNTOWN','0792825892'),(0000000030,'KHABAZ','GAUTENG','WITBANK','DOWNTOWN','07928258'),(0000000031,'MDALI','MPUMALANGA','WITBANK','DOWNTOWN','0123554555'),(0000000032,'MLINDO','MPUMALANGA','MPANGENI','WW','0111111111');

/*Table structure for table `tblfeature` */

DROP TABLE IF EXISTS `tblfeature`;

CREATE TABLE `tblfeature` (
  `f_feature_id` int(10) NOT NULL AUTO_INCREMENT,
  `f_feature_desc` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`f_feature_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tblfeature` */

insert  into `tblfeature`(`f_feature_id`,`f_feature_desc`) values (1,'AIRBAG'),(2,'ABS'),(3,'FCW'),(4,'Climate Control'),(5,'AEB'),(6,'Headup Display'),(7,'Comfortable Seats'),(8,'Heated Seats'),(9,'USB Port'),(10,'Bluetooth'),(11,'SELF DRIVING'),(12,'ABS POWER');

/*Table structure for table `tblmake` */

DROP TABLE IF EXISTS `tblmake`;

CREATE TABLE `tblmake` (
  `make_id` int(11) NOT NULL AUTO_INCREMENT,
  `make` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`make_id`),
  UNIQUE KEY `make` (`make`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `tblmake` */

insert  into `tblmake`(`make_id`,`make`) values (1,'BMW'),(2,'MERCEDES BENZ'),(4,'AUDI '),(5,'NISSAN'),(7,'FORD'),(10,'ISUZU'),(13,'CITROEN'),(29,'MASSERATI'),(30,'JAGUAR'),(31,'ALFA REMEO'),(32,'BANTLEY'),(33,'HUMMER');

/*Table structure for table `tblmodel` */

DROP TABLE IF EXISTS `tblmodel`;

CREATE TABLE `tblmodel` (
  `model_id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(15) DEFAULT NULL,
  `make_id` int(11) NOT NULL,
  PRIMARY KEY (`model_id`),
  KEY `FK_tblmodel` (`make_id`),
  CONSTRAINT `FK_tblmodel` FOREIGN KEY (`make_id`) REFERENCES `tblmake` (`make_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

/*Data for the table `tblmodel` */

insert  into `tblmodel`(`model_id`,`model`,`make_id`) values (1,'3 series',1),(2,'A4 RS',4),(3,'CLA',2),(5,'JUKE',5),(6,'Z4',1),(8,'7 SERIES',1),(9,'GTR',5),(10,'GTR',10),(11,'GTR',1),(12,'7 SERIES',13),(13,'rs4',4),(30,'4 SERIES',4),(31,'C1',13),(32,'C-ZERO',13),(33,'C3',13),(34,'C_ELYSEE',31),(35,'CONTINENTAL',32),(36,'MUSLANNE',32),(37,'FLYING',31),(38,'EXPLORER',7),(39,'ESCAPE SE',7),(40,'H2',33),(41,'GHIBLI',29),(42,'XJ',30),(43,'C_ELYSEE',31),(44,'C_ELYSEE',31),(45,'C_ELYSEE',31),(46,'C_ELYSEE',31),(47,'C_ELYSEE',31),(48,'C_ELYSEE',31),(49,'FLYING',4);

/*Table structure for table `tblrole` */

DROP TABLE IF EXISTS `tblrole`;

CREATE TABLE `tblrole` (
  `roleNum` int(3) NOT NULL AUTO_INCREMENT,
  `roleName` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`roleNum`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tblrole` */

insert  into `tblrole`(`roleNum`,`roleName`) values (1,'customer'),(2,'admin'),(3,'superAdmin');

/*Table structure for table `tblseries` */

DROP TABLE IF EXISTS `tblseries`;

CREATE TABLE `tblseries` (
  `series_id` int(11) NOT NULL AUTO_INCREMENT,
  `series` varchar(25) DEFAULT NULL,
  `model_id` int(11) NOT NULL,
  PRIMARY KEY (`series_id`),
  KEY `FK_tblseries` (`model_id`),
  CONSTRAINT `FK_tblseries` FOREIGN KEY (`model_id`) REFERENCES `tblmodel` (`model_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `tblseries` */

insert  into `tblseries`(`series_id`,`series`,`model_id`) values (6,'m power',1),(7,'3.0 GO',5),(8,'35 AMG',3),(9,'M POWER',6),(11,'750I',8),(12,'super limit',13),(13,'750 SPORT',8),(14,'M2 SPORT',9),(15,'III',33),(16,'EXCLUSIVE',33),(17,'PICASSO',33),(18,'AIRCROSS II',33),(19,'II',31),(20,'a rebadged Mitsubishi i-M',32),(21,'GT',35),(22,'SPEED',36),(23,'WHEELBASE',34),(24,'WHEELBASE',36),(25,'XLT',38),(26,'SUV',39),(27,'GIANT',40),(28,'GRANT TORISMO',41),(29,'22',42);

/*Table structure for table `tblsysadmin` */

DROP TABLE IF EXISTS `tblsysadmin`;

CREATE TABLE `tblsysadmin` (
  `username` varchar(20) NOT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `cellNo` varchar(12) DEFAULT NULL,
  `roleNum` int(4) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblsysadmin` */

insert  into `tblsysadmin`(`username`,`surname`,`name`,`password`,`cellNo`,`roleNum`) values ('mxola','mbatha','mxolisi','123456','0792825892',3);

/*Table structure for table `tblvehicle` */

DROP TABLE IF EXISTS `tblvehicle`;

CREATE TABLE `tblvehicle` (
  `v_vehicle_id` int(10) NOT NULL AUTO_INCREMENT,
  `m_make_id` int(4) DEFAULT NULL,
  `m_model_id` int(4) DEFAULT NULL,
  `s_series_id` int(4) DEFAULT NULL,
  PRIMARY KEY (`v_vehicle_id`),
  KEY `FK_tblvehicle` (`m_make_id`),
  KEY `FK_tblvehicleR` (`m_model_id`),
  KEY `FK_tblvehicleRL` (`s_series_id`),
  CONSTRAINT `FK_tblvehicle` FOREIGN KEY (`m_make_id`) REFERENCES `tblmake` (`make_id`),
  CONSTRAINT `FK_tblvehicleR` FOREIGN KEY (`m_model_id`) REFERENCES `tblmodel` (`model_id`),
  CONSTRAINT `FK_tblvehicleRL` FOREIGN KEY (`s_series_id`) REFERENCES `tblseries` (`series_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `tblvehicle` */

insert  into `tblvehicle`(`v_vehicle_id`,`m_make_id`,`m_model_id`,`s_series_id`) values (1,1,1,6),(2,5,5,7),(3,2,3,8),(4,1,6,9),(6,1,8,11),(7,4,13,12),(8,1,8,13),(9,5,9,14),(10,13,33,15),(11,13,33,16),(12,13,33,17),(13,13,33,18),(14,13,31,19),(15,13,32,20),(16,32,35,21),(17,32,36,22),(18,31,34,23),(19,32,36,24),(20,7,38,25),(21,7,39,26),(22,33,40,27),(23,29,41,28),(24,30,42,29);

/* Procedure structure for procedure `AddVehicle` */

/*!50003 DROP PROCEDURE IF EXISTS  `AddVehicle` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AddVehicle`(
 IN se_series varchar(50),
 IN model_id int(5)
 )
BEGIN
 insert into tblseries(series,model_id)
 values (se_series, model_id);
 insert into tblvehicle(m_make_id, m_model_id,s_series_id)
 values((select ma.make_id
 from tblmake ma, tblmodel mo, tblseries s
 where ma.make_id = mo.make_id
 and mo.model_id = s.model_id
 and s.series_id = (select max(series_id)
 from tblseries)),(select mo.model_id
 from tblmake ma, tblmodel mo, tblseries s
 where ma.make_id = mo.make_id
 and mo.model_id = s.model_id
 and s.series_id = (select max(series_id)
 from tblseries)),(select s.series_id
 from tblmake ma, tblmodel mo, tblseries s
 where ma.make_id = mo.make_id
 and mo.model_id = s.model_id
 and s.series_id = (select max(series_id)
 from tblseries)));
 END */$$
DELIMITER ;

/* Procedure structure for procedure `AddVehicleFeature` */

/*!50003 DROP PROCEDURE IF EXISTS  `AddVehicleFeature` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AddVehicleFeature`(
 IN vID  int(8),
 IN feature varchar(50)
 )
BEGIN
 DECLARE fid int(10);
 SELECT f_feature_id INTO fid
 FROM tblfeature
 WHERE f_feature_desc = feature;
 INSERT INTO vehicle_feature(f_feature_id,v_vehicle_id)
 VALUES(fid,vID);
 END */$$
DELIMITER ;

/* Procedure structure for procedure `deleteCustomer` */

/*!50003 DROP PROCEDURE IF EXISTS  `deleteCustomer` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteCustomer`( IN cust_id int(4))
BEGIN
 delete from cust_search 
 where c_cust_id = cust_id;
 delete from tblcustomer 
 where c_cust_id = cust_id;
 END */$$
DELIMITER ;

/* Procedure structure for procedure `deleteVehicle` */

/*!50003 DROP PROCEDURE IF EXISTS  `deleteVehicle` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteVehicle`( IN reg varchar(25))
BEGIN
 delete from dv_feature
 where dv_reg_no = reg;
 delete from dealer_vehicle 
 where dv_reg_no = reg;
 END */$$
DELIMITER ;

/* Procedure structure for procedure `regDealer` */

/*!50003 DROP PROCEDURE IF EXISTS  `regDealer` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `regDealer`(
 IN dName varchar(30),
 IN dProv varchar(15),
 IN dCity varchar(20),
 IN dSub varchar(20),
 IN dTell varchar(13),
 IN aName varchar(30),
 IN aSurName varchar(30),
 IN aID varchar(13),
 IN aCell varchar(13),
 IN aTell varchar(13),
 IN aPBox varchar(30),
 IN aPCity varchar(30),
 IN aPCode varchar(5),
 IN aUsername varchar(40),
 IN aPassword varchar(30),
 IN aRecPassword varchar(30)
 )
BEGIN
 DECLARE v_dealerID INT(8);
 INSERT INTO tbldealer(d_dealer_name,d_dealer_province,d_dealer_city,d_dealer_suburb,d_dealer_tell)
 VALUES (dName,dProv,dCity,dSub,dTell);
 SELECT MAX(d_dealer_id)
 INTO v_dealerID
 FROM tbldealer;
 INSERT INTO tbladministrator(ad_username,ad_first_name,ad_last_name,ad_cell_no,ad_tell_no,ad_postBox,ad_postCity,ad_postCode,ad_province,ad_password,ad_recovery_pswd,d_dealer_id)
 VALUES(aUsername,aName,aSurname,aCell,aTell,aPBox,aPCity,aPCode,aProv,aPassword,aRecPassword,v_dealerID);
 END */$$
DELIMITER ;

/* Procedure structure for procedure `SearchedCustReport` */

/*!50003 DROP PROCEDURE IF EXISTS  `SearchedCustReport` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SearchedCustReport`()
BEGIN
 SELECT V.v_make AS "Vehicle Make", V.v_model AS "Vehicle Model", V.v_series AS "Vehicle Series", V.v_year AS "Vehicle Year", F.f_feature_desc AS "Feature Description", C.c_email_address AS "Customer email", S.cs_cust_date AS "Searched Date"
 FROM tblvehicle V, tblfeature F, cust_search S, tblcustomer C, vehicle_feature T
 WHERE cs_results = 'available'
 AND S.v_vehicle_id = V.v_vehicle_id
 AND S.c_cust_id = C.c_cust_id
 AND V.v_vehicle_id = T.v_vehicle_id
 AND T.f_feature_id = F.f_feature_id;
 END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
