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

-- Dumping structure for table hsrm_zambia.assign_province
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

-- Data exporting was unselected.

-- Dumping structure for table hsrm_zambia.district
CREATE TABLE IF NOT EXISTS `district` (
  `d_id` int(15) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(15) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table hsrm_zambia.login
CREATE TABLE IF NOT EXISTS `login` (
  `LogInID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `isActive` char(1) NOT NULL DEFAULT '0',
  `UpdatedOn` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`LogInID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table hsrm_zambia.province
CREATE TABLE IF NOT EXISTS `province` (
  `p_id` int(15) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(15) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table hsrm_zambia.response
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table hsrm_zambia.town
CREATE TABLE IF NOT EXISTS `town` (
  `t_id` int(15) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(15) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for procedure hsrm_zambia.GetAllProvinces
DELIMITER //
CREATE PROCEDURE `GetAllProvinces`()
BEGIN
SELECT 	PRV.p_id		AS 'id',
			PRV.p_name	AS	'name'
FROM province PRV;
END//
DELIMITER ;

-- Dumping structure for procedure hsrm_zambia.GetDistrictByProvinceId
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

-- Dumping structure for procedure hsrm_zambia.GetResponsesByPovinceID
DELIMITER //
CREATE PROCEDURE `GetResponsesByPovinceID`(
	IN `province_id` INT
)
BEGIN
		SELECT RS.citizen_name		AS 'citizen_name',
				RS.citizen_phone		AS 'citizen_phone',
				RS.Citizen_address	AS 'Citizen_address',
				RS.Response				AS 'Response' 
		FROM response RS
		WHERE RS.p_idd = province_id;
END//
DELIMITER ;

-- Dumping structure for procedure hsrm_zambia.Login
DELIMITER //
CREATE PROCEDURE `Login`(
	IN `username` VARCHAR(50),
	IN `password` VARCHAR(50)
)
BEGIN
				SELECT	US.LogInID		AS userid,
							US.Username		AS username
				FROM 		login US WHERE US.Username= username AND US.Password=password AND isActive=1;
END//
DELIMITER ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
