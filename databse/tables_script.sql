
CREATE TABLE `assign_province` (
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
);


CREATE TABLE  `district` (
  `d_id` int(15) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(15) NOT NULL,
  PRIMARY KEY (`d_id`)
) ;


CREATE TABLE  `province` (
  `p_id` int(15) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(15) NOT NULL,
  PRIMARY KEY (`p_id`)
) ;


CREATE TABLE `response` (
  `response_id` int(15) NOT NULL AUTO_INCREMENT,
  `citizen_name` varchar(150) NOT NULL,
  `citizen_phone` varchar(150) NOT NULL,
  `Citizen_address` text NOT NULL,
  `Response` varchar(500) DEFAULT NULL,
  `p_idd` int(15) NOT NULL,
  `d_idd` int(15) NOT NULL,
  `t_idd` int(15) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`response_id`),
  KEY `FK_response_province` (`p_idd`),
  KEY `FK_response_district` (`d_idd`),
  KEY `FK_response_town` (`t_idd`),
  CONSTRAINT `FK_response_district` FOREIGN KEY (`d_idd`) REFERENCES `district` (`d_id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_response_province` FOREIGN KEY (`p_idd`) REFERENCES `province` (`p_id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_response_town` FOREIGN KEY (`t_idd`) REFERENCES `town` (`t_id`) ON UPDATE CASCADE
);


CREATE TABLE `town` (
  `t_id` int(15) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(15) NOT NULL,
  PRIMARY KEY (`t_id`)
);


