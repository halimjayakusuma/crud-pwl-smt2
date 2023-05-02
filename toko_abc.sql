/*
SQLyog Trial v13.2.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - toko_abc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`toko_abc` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `toko_abc`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `hrg` double DEFAULT NULL,
  `jml` int(11) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `barang` */

insert  into `barang`(`id`,`nama`,`hrg`,`jml`,`keterangan`,`foto`) values 
(1,'aglonemaSuksomm',45000,10,'Ciri khas dari bunga aglaonema ini memiliki warna merah merona untuk semua permukaan daun dan hijau ','aglonema suksom.jpg'),
(2,'aglonema rotundum aceh',30000,10,'-','aglonema rotundum aceh.jpg'),
(3,'aglonema dud anjamani',75000,10,'-','aglonema dud anjamani.jpg'),
(4,'aglonema Snow White Remaja',77,10,'-','aglonema snow white.jpg'),
(7,'aglonema Red Anjamani Dewasa',75000,10,'-','aglonema red anjamani.jpg'),
(8,'aglonema Ayunindi',35000,10,'-','aglonema ayunindi.jpeg'),
(9,'aglonema Khocin',35000,5,'-','aglonema khocin.jpg');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`foto`) values 
(1,'admin','123','admin.png'),
(2,'fauzan','456','fauzan.jpg'),
(3,'naufal','123456','naufal.jpg'),
(4,'agus','456789','agus.jpg'),
(5,'zee','456123','zee.jpeg'),
(6,'Halim','123','halim.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
