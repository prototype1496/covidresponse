-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for hsrm_zambia
DROP DATABASE IF EXISTS `hsrm_zambia`;
CREATE DATABASE IF NOT EXISTS `hsrm_zambia` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `hsrm_zambia`;

-- Dumping structure for table hsrm_zambia.assign_province
DROP TABLE IF EXISTS `assign_province`;
CREATE TABLE IF NOT EXISTS `assign_province` (
  `assign_id` int(15) NOT NULL AUTO_INCREMENT,
  `p_idd` int(15) NOT NULL,
  `d_idd` int(15) NOT NULL,
  `t_idd` int(15) NOT NULL,
  PRIMARY KEY (`assign_id`),
  KEY `FK_assign_province_province` (`p_idd`),
  KEY `FK_assign_province_district` (`d_idd`),
  KEY `FK_assign_province_town` (`t_idd`),
  CONSTRAINT `FK_assign_province_district` FOREIGN KEY (`d_idd`) REFERENCES `district` (`d_id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_assign_province_province` FOREIGN KEY (`p_idd`) REFERENCES `province` (`p_id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_assign_province_town` FOREIGN KEY (`t_idd`) REFERENCES `town` (`t_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table hsrm_zambia.assign_province: ~103 rows (approximately)
DELETE FROM `assign_province`;
/*!40000 ALTER TABLE `assign_province` DISABLE KEYS */;
INSERT INTO `assign_province` (`assign_id`, `p_idd`, `d_idd`, `t_idd`) VALUES
	(3, 1, 2, 2),
	(4, 1, 3, 3),
	(5, 1, 4, 4),
	(6, 1, 5, 5),
	(7, 1, 6, 6),
	(8, 1, 7, 7),
	(9, 1, 8, 8),
	(10, 1, 9, 9),
	(11, 1, 10, 10),
	(12, 1, 11, 11),
	(13, 1, 12, 12),
	(14, 1, 13, 13),
	(15, 2, 14, 14),
	(16, 2, 15, 15),
	(17, 2, 16, 16),
	(18, 2, 17, 17),
	(19, 2, 18, 18),
	(20, 2, 19, 19),
	(21, 2, 20, 20),
	(22, 2, 21, 21),
	(23, 2, 22, 22),
	(24, 2, 23, 23),
	(25, 3, 24, 24),
	(26, 3, 25, 25),
	(27, 3, 26, 26),
	(28, 3, 27, 27),
	(29, 3, 28, 28),
	(30, 3, 29, 29),
	(31, 3, 30, 30),
	(32, 3, 31, 31),
	(33, 3, 32, 32),
	(34, 4, 33, 33),
	(35, 4, 34, 34),
	(36, 4, 35, 35),
	(37, 4, 36, 36),
	(38, 4, 37, 37),
	(39, 4, 38, 38),
	(40, 4, 39, 39),
	(41, 4, 40, 40),
	(42, 4, 41, 41),
	(43, 4, 42, 42),
	(44, 4, 43, 43),
	(45, 5, 44, 44),
	(46, 5, 45, 45),
	(47, 5, 46, 46),
	(48, 5, 47, 47),
	(49, 5, 48, 48),
	(50, 5, 49, 49),
	(51, 5, 50, 50),
	(52, 6, 51, 51),
	(53, 6, 52, 52),
	(54, 6, 53, 53),
	(55, 6, 54, 54),
	(56, 6, 55, 55),
	(57, 6, 56, 56),
	(58, 6, 57, 57),
	(59, 7, 58, 58),
	(60, 7, 59, 59),
	(61, 7, 60, 60),
	(62, 7, 61, 61),
	(63, 7, 62, 62),
	(64, 7, 63, 63),
	(65, 7, 64, 64),
	(66, 7, 65, 65),
	(67, 7, 66, 66),
	(68, 8, 67, 67),
	(69, 8, 68, 68),
	(70, 8, 69, 69),
	(71, 8, 70, 70),
	(72, 8, 71, 71),
	(73, 8, 72, 72),
	(74, 8, 73, 73),
	(75, 8, 74, 74),
	(76, 8, 75, 75),
	(77, 9, 76, 76),
	(78, 9, 77, 77),
	(79, 9, 78, 78),
	(80, 9, 79, 79),
	(81, 9, 80, 80),
	(82, 9, 81, 81),
	(83, 9, 82, 82),
	(84, 9, 83, 83),
	(85, 9, 84, 84),
	(86, 9, 85, 85),
	(87, 9, 86, 86),
	(88, 9, 87, 87),
	(89, 9, 88, 88),
	(90, 10, 89, 89),
	(91, 10, 90, 90),
	(92, 10, 91, 91),
	(93, 10, 92, 92),
	(94, 10, 93, 93),
	(95, 10, 94, 94),
	(96, 10, 95, 95),
	(97, 10, 96, 96),
	(98, 10, 97, 97),
	(99, 10, 98, 98),
	(100, 10, 99, 99),
	(101, 10, 100, 100),
	(102, 10, 101, 101),
	(103, 10, 102, 102),
	(104, 10, 103, 103),
	(105, 10, 104, 104);
/*!40000 ALTER TABLE `assign_province` ENABLE KEYS */;

-- Dumping structure for table hsrm_zambia.district
DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `d_id` int(15) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(15) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table hsrm_zambia.district: ~103 rows (approximately)
DELETE FROM `district`;
/*!40000 ALTER TABLE `district` DISABLE KEYS */;
INSERT INTO `district` (`d_id`, `d_name`) VALUES
	(2, 'Chibombo '),
	(3, 'Kabwe '),
	(4, 'Kapiri Mposhi '),
	(5, 'Mkushi '),
	(6, 'Mumbwa '),
	(7, 'Serenje '),
	(8, 'Luano '),
	(9, 'Chitambo '),
	(10, 'Ngabwe '),
	(11, 'Chisamba '),
	(12, 'Itezhi-Tezhi '),
	(13, 'Shibuyunji '),
	(14, 'Chililabombwe '),
	(15, 'Chingola '),
	(16, 'Kalulushi '),
	(17, 'Kitwe '),
	(18, 'Luanshya '),
	(19, 'Lufwanyama '),
	(20, 'Masaiti '),
	(21, 'Mpongwe '),
	(22, 'Mufulira '),
	(23, 'Ndola '),
	(24, 'Chadiza '),
	(25, 'Chipata '),
	(26, 'Katete '),
	(27, 'Lundazi '),
	(28, 'Mambwe '),
	(29, 'Nyimba '),
	(30, 'Petauke '),
	(31, 'Sinda '),
	(32, 'Vubwi '),
	(33, 'Chiengi '),
	(34, 'Chipili '),
	(35, 'Chembe '),
	(36, 'Kawambwa '),
	(37, 'Lunga '),
	(38, 'Mansa '),
	(39, 'Milenge '),
	(40, 'Mwansabombwe '),
	(41, 'Mwense '),
	(42, 'Nchelenge '),
	(43, 'Samfya '),
	(44, 'Chilanga '),
	(45, 'Chirundu '),
	(46, 'Chongwe '),
	(47, 'Kafue '),
	(48, 'Luangwa '),
	(49, 'Lusaka '),
	(50, 'Rufunsa '),
	(51, 'Chama '),
	(52, 'Chinsali '),
	(53, 'Isoka '),
	(54, 'Mafinga '),
	(55, 'Mpika '),
	(56, 'Nakonde '),
	(57, 'Shiwangandu '),
	(58, 'Chilubi '),
	(59, 'Kaputa '),
	(60, 'Kasama '),
	(61, 'Luwingu '),
	(62, 'Mbala '),
	(63, 'Mporokoso '),
	(64, 'Mpulungu '),
	(65, 'Mungwi '),
	(66, 'Nsama '),
	(67, 'Chavuma '),
	(68, 'Ikelenge '),
	(69, 'Kabompo '),
	(70, 'Kasempa '),
	(71, 'Mufumbwe '),
	(72, 'Mwinilunga '),
	(73, 'Solwezi '),
	(74, 'Zambezi '),
	(75, 'Manyinga '),
	(76, 'Chikankata '),
	(77, 'Choma '),
	(78, 'Gwembe '),
	(79, 'Kalomo '),
	(80, 'Kazungula '),
	(81, 'Livingstone '),
	(82, 'Mazabuka '),
	(83, 'Monze '),
	(84, 'Namwala '),
	(85, 'Pemba '),
	(86, 'Siavonga '),
	(87, 'Sinazongwe '),
	(88, 'Zimba '),
	(89, 'Kalabo '),
	(90, 'Kaoma '),
	(91, 'Lukulu '),
	(92, 'Mongu '),
	(93, 'Mulobezi '),
	(94, 'Senanga '),
	(95, 'Sesheke '),
	(96, 'Shangombo '),
	(97, 'Nalolo '),
	(98, 'Limulunga '),
	(99, 'Nkeyema '),
	(100, 'Sikongo '),
	(101, 'Sioma '),
	(102, 'Mitete '),
	(103, 'Mwandi '),
	(104, 'Luampa ');
/*!40000 ALTER TABLE `district` ENABLE KEYS */;

-- Dumping structure for table hsrm_zambia.province
DROP TABLE IF EXISTS `province`;
CREATE TABLE IF NOT EXISTS `province` (
  `p_id` int(15) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(15) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table hsrm_zambia.province: ~10 rows (approximately)
DELETE FROM `province`;
/*!40000 ALTER TABLE `province` DISABLE KEYS */;
INSERT INTO `province` (`p_id`, `p_name`) VALUES
	(1, 'Central'),
	(2, 'Copperbelt'),
	(3, 'Eastern'),
	(4, 'Luapula'),
	(5, 'Lusaka'),
	(6, 'Muchinga'),
	(7, 'Northern'),
	(8, 'Northwestern'),
	(9, 'Southern'),
	(10, 'Western');
/*!40000 ALTER TABLE `province` ENABLE KEYS */;

-- Dumping structure for table hsrm_zambia.response
DROP TABLE IF EXISTS `response`;
CREATE TABLE IF NOT EXISTS `response` (
  `response_id` int(15) NOT NULL AUTO_INCREMENT,
  `citizen_name` varchar(150) NOT NULL,
  `citizen_phone` varchar(150) NOT NULL,
  `Citizen_address` text NOT NULL,
  `Response` varchar(500) DEFAULT NULL,
  `p_idd` int(15) NOT NULL,
  `d_idd` int(15) NOT NULL,
  `t_idd` int(15) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`response_id`),
  KEY `FK_response_province` (`p_idd`),
  KEY `FK_response_district` (`d_idd`),
  KEY `FK_response_town` (`t_idd`),
  CONSTRAINT `FK_response_district` FOREIGN KEY (`d_idd`) REFERENCES `district` (`d_id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_response_province` FOREIGN KEY (`p_idd`) REFERENCES `province` (`p_id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_response_town` FOREIGN KEY (`t_idd`) REFERENCES `town` (`t_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table hsrm_zambia.response: ~2 rows (approximately)
DELETE FROM `response`;
/*!40000 ALTER TABLE `response` DISABLE KEYS */;
INSERT INTO `response` (`response_id`, `citizen_name`, `citizen_phone`, `Citizen_address`, `Response`, `p_idd`, `d_idd`, `t_idd`, `date_time`) VALUES
	(8, 'Makatalelo Muvula', '097785641', 'Woodlands A House No 5', 'Neighbour seems to be showing signs and symptoms but dose not go to the hospital', 5, 49, 49, '2020-12-03 05:26:38'),
	(9, 'Faith Kunda', '0977102584', 'Woodlands B House No 34', 'Supect neighbour who traveled out of the country and retuned 2 days ago', 5, 49, 49, '2020-12-03 05:27:52');
/*!40000 ALTER TABLE `response` ENABLE KEYS */;

-- Dumping structure for table hsrm_zambia.town
DROP TABLE IF EXISTS `town`;
CREATE TABLE IF NOT EXISTS `town` (
  `t_id` int(15) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(15) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table hsrm_zambia.town: ~103 rows (approximately)
DELETE FROM `town`;
/*!40000 ALTER TABLE `town` DISABLE KEYS */;
INSERT INTO `town` (`t_id`, `t_name`) VALUES
	(2, 'Chibombo '),
	(3, 'Kabwe '),
	(4, 'Kapiri Mposhi '),
	(5, 'Mkushi '),
	(6, 'Mumbwa '),
	(7, 'Serenje '),
	(8, 'Luano '),
	(9, 'Chitambo '),
	(10, 'Ngabwe '),
	(11, 'Chisamba '),
	(12, 'Itezhi-Tezhi '),
	(13, 'Shibuyunji '),
	(14, 'Chililabombwe '),
	(15, 'Chingola '),
	(16, 'Kalulushi '),
	(17, 'Kitwe '),
	(18, 'Luanshya '),
	(19, 'Lufwanyama '),
	(20, 'Masaiti '),
	(21, 'Mpongwe '),
	(22, 'Mufulira '),
	(23, 'Ndola '),
	(24, 'Chadiza '),
	(25, 'Chipata '),
	(26, 'Katete '),
	(27, 'Lundazi '),
	(28, 'Mambwe '),
	(29, 'Nyimba '),
	(30, 'Petauke '),
	(31, 'Sinda '),
	(32, 'Vubwi '),
	(33, 'Chiengi '),
	(34, 'Chipili '),
	(35, 'Chembe '),
	(36, 'Kawambwa '),
	(37, 'Lunga '),
	(38, 'Mansa '),
	(39, 'Milenge '),
	(40, 'Mwansabombwe '),
	(41, 'Mwense '),
	(42, 'Nchelenge '),
	(43, 'Samfya '),
	(44, 'Chilanga '),
	(45, 'Chirundu '),
	(46, 'Chongwe '),
	(47, 'Kafue '),
	(48, 'Luangwa '),
	(49, 'Lusaka '),
	(50, 'Rufunsa '),
	(51, 'Chama '),
	(52, 'Chinsali '),
	(53, 'Isoka '),
	(54, 'Mafinga '),
	(55, 'Mpika '),
	(56, 'Nakonde '),
	(57, 'Shiwangandu '),
	(58, 'Chilubi '),
	(59, 'Kaputa '),
	(60, 'Kasama '),
	(61, 'Luwingu '),
	(62, 'Mbala '),
	(63, 'Mporokoso '),
	(64, 'Mpulungu '),
	(65, 'Mungwi '),
	(66, 'Nsama '),
	(67, 'Chavuma '),
	(68, 'Ikelenge '),
	(69, 'Kabompo '),
	(70, 'Kasempa '),
	(71, 'Mufumbwe '),
	(72, 'Mwinilunga '),
	(73, 'Solwezi '),
	(74, 'Zambezi '),
	(75, 'Manyinga '),
	(76, 'Chikankata '),
	(77, 'Choma '),
	(78, 'Gwembe '),
	(79, 'Kalomo '),
	(80, 'Kazungula '),
	(81, 'Livingstone '),
	(82, 'Mazabuka '),
	(83, 'Monze '),
	(84, 'Namwala '),
	(85, 'Pemba '),
	(86, 'Siavonga '),
	(87, 'Sinazongwe '),
	(88, 'Zimba '),
	(89, 'Kalabo '),
	(90, 'Kaoma '),
	(91, 'Lukulu '),
	(92, 'Mongu '),
	(93, 'Mulobezi '),
	(94, 'Senanga '),
	(95, 'Sesheke '),
	(96, 'Shangombo '),
	(97, 'Nalolo '),
	(98, 'Limulunga '),
	(99, 'Nkeyema '),
	(100, 'Sikongo '),
	(101, 'Sioma '),
	(102, 'Mitete '),
	(103, 'Mwandi '),
	(104, 'Luampa ');
/*!40000 ALTER TABLE `town` ENABLE KEYS */;

-- Dumping structure for procedure hsrm_zambia.GetAllProvinces
DROP PROCEDURE IF EXISTS `GetAllProvinces`;
DELIMITER //
CREATE PROCEDURE `GetAllProvinces`()
BEGIN
SELECT 	PRV.p_id		AS 'id',
			PRV.p_name	AS	'name'
FROM province PRV;
END//
DELIMITER ;

-- Dumping structure for procedure hsrm_zambia.GetDistrictByProvinceId
DROP PROCEDURE IF EXISTS `GetDistrictByProvinceId`;
DELIMITER //
CREATE PROCEDURE `GetDistrictByProvinceId`(
	IN `Provinceid` INT
)
BEGIN
	SET @ProvinceId = Provinceid;
		SELECT	DST.d_id AS districtId,
		 			DST.d_name		AS name
		FROM district DST WHERE DST.d_id  IN (SELECT ASP.d_idd FROM assign_province ASP	WHERE ASP.p_idd = @ProvinceId);
END//
DELIMITER ;

-- Dumping structure for procedure hsrm_zambia.GetResponses
DROP PROCEDURE IF EXISTS `GetResponses`;
DELIMITER //
CREATE PROCEDURE `GetResponses`(
	IN `district_id` INT
)
BEGIN

SELECT RS.citizen_name		AS 'citizen_name',
		RS.citizen_phone		AS 'citizen_phone',
		RS.Citizen_address	AS 'Citizen_address',
		RS.Response				AS 'Response' 
FROM response RS
WHERE RS.d_idd = district_id;
END//
DELIMITER ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
