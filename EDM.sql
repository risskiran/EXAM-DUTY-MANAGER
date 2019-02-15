/*
SQLyog Ultimate v11.42 (64 bit)
MySQL - 5.5.20-log : Database - examdutymanager
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`examdutymanager` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `examdutymanager`;

/*Table structure for table `allocation` */

DROP TABLE IF EXISTS `allocation`;

CREATE TABLE `allocation` (
  `table_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `allocation` */

/*Table structure for table `complaints` */

DROP TABLE IF EXISTS `complaints`;

CREATE TABLE `complaints` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `complaints` varchar(30) DEFAULT NULL,
  `reply` varchar(50) DEFAULT NULL,
  `complaint_date` date DEFAULT NULL,
  `reply_date` date DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `reciver` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `complaints` */

insert  into `complaints`(`complaint_id`,`complaints`,`reply`,`complaint_date`,`reply_date`,`staff_id`,`reciver`) values (1,'','PENDING','2018-12-27',NULL,0,'ADMIN'),(2,'asdfghj','PENDING','2018-12-27',NULL,0,'ADMIN');

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(30) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `course` */

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`dept_id`,`dept_name`) values (19,'BSC COMPUTER SCIENCE'),(20,'BSC MATHS'),(21,'BCA'),(22,'BIO-TECH'),(23,'BMMC'),(24,'BA ENGLISH'),(25,''),(26,''),(27,''),(28,''),(29,''),(30,'');

/*Table structure for table `duty` */

DROP TABLE IF EXISTS `duty`;

CREATE TABLE `duty` (
  `duty_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`duty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `duty` */

/*Table structure for table `exam` */

DROP TABLE IF EXISTS `exam`;

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_name` varchar(35) DEFAULT NULL,
  `exam_date` date DEFAULT NULL,
  `exam_time` time DEFAULT NULL,
  `exam_type` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `exam` */

insert  into `exam`(`exam_id`,`exam_name`,`exam_date`,`exam_time`,`exam_type`) values (2,'JHHFF','2019-12-20','13:30:00','SDE'),(3,'SAMPLE','2019-12-20','00:12:00','REGULAR'),(4,'maths','2018-12-11','12:30:00','REGULAR'),(5,'','0000-00-00','00:00:00','REGULAR');

/*Table structure for table `exmcordinator` */

DROP TABLE IF EXISTS `exmcordinator`;

CREATE TABLE `exmcordinator` (
  `cor_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `exmcordinator` */

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

/*Table structure for table `hod` */

DROP TABLE IF EXISTS `hod`;

CREATE TABLE `hod` (
  `hod_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`hod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `hod` */

insert  into `hod`(`hod_id`,`login_id`,`dept_id`) values (15,22,19),(16,24,23),(17,0,0);

/*Table structure for table `leave` */

DROP TABLE IF EXISTS `leave`;

CREATE TABLE `leave` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `leave` */

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `user_type` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`user_name`,`password`,`user_type`) values (1,'admin','STAFF2','admin'),(20,'EXM','EXM','examcordinator'),(21,'1','12345678','STAFF'),(22,'2','12345678','HOD'),(23,'3','12345678','teacher'),(24,'GHJ','12345678','HOD'),(25,'123','12345678','teacher'),(26,'ascwv','12345678','teacher'),(27,'','12345678','teacher'),(28,'add','12345678','teacher'),(29,'qwerty@mil.com','12345678','teacher');

/*Table structure for table `notification` */

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `notification _id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`notification _id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `notification` */

insert  into `notification`(`notification _id`,`subject`,`details`,`date`) values (2,'SAMPLE','SHDOHAJOSD','0021-02-13'),(3,'hgfds','grthyth','2018-12-03'),(4,'','','0000-00-00'),(5,'','','0000-00-00'),(6,'','','0000-00-00'),(7,'','','0000-00-00'),(8,'hgfd','ghtj','2018-12-03');

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `house_name` varchar(50) DEFAULT NULL,
  `place` varchar(50) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL,
  `pin_code` varchar(10) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `expiriance` varchar(10) DEFAULT NULL,
  `dept_id` varchar(30) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `staff` */

insert  into `staff`(`staff_id`,`first_name`,`last_name`,`gender`,`house_name`,`place`,`post`,`pin_code`,`city`,`dob`,`email`,`phone`,`expiriance`,`dept_id`,`login_id`) values (20,'ARYA','','female','','','','','','0000-00-00','','','','-1',20),(22,'ARYA','NP','female','HN','P','P','P','P','0000-00-00','2','1','1','19',22),(23,'SRUTHI','N','female','J','J','J','J','JJ','0000-00-00','3','123','1','19',23),(24,'ANU','N','female','JH','NJK','KK','125','CLT','2018-12-03','GHJ','1566','2','23',24),(25,'SHAHANA','KNK','female','KJKJ','KJKJJKJ','KJKJKJK','KJKJKJKJ','KJKJKJ','0000-00-00','123','12345','1','24',25),(26,'shana','P','female','vdfvs','vfvqer','nderd','123','asfvr','2018-12-10','ascwv','235322','2','19',26),(27,'ff','','female','','','','','','0000-00-00','','','','-1',27),(28,'aasdfg','sdfgh','female','fghj','ghj','vbnm','jgh','fgh','2018-12-10','add','0123456789','2','20',28),(29,'hgfds','dwdf','female','gtefefgvefdv','vgefvfv','regew','654343',' bvcx','2018-12-03','qwerty@mil.com','1234567899','1','19',29);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
