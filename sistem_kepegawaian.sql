/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.33-MariaDB : Database - db_sistem_informasi_kepegawaian
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sistem_informasi_kepegawaian` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_sistem_informasi_kepegawaian`;

/*Table structure for table `tbl_absensi` */

DROP TABLE IF EXISTS `tbl_absensi`;

CREATE TABLE `tbl_absensi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip_dosen` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu_keterlambatan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nip_dosen` (`nip_dosen`),
  CONSTRAINT `tbl_absensi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbl_dosen` (`jab_fa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_absensi` */

/*Table structure for table `tbl_data_cuti` */

DROP TABLE IF EXISTS `tbl_data_cuti`;

CREATE TABLE `tbl_data_cuti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_permohonan` varchar(255) DEFAULT NULL,
  `tgl_sah` date DEFAULT NULL,
  `lama_sah` int(11) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `tgl_aktif` date DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kd_permohonan` (`id_permohonan`),
  CONSTRAINT `tbl_data_cuti_ibfk_1` FOREIGN KEY (`id_permohonan`) REFERENCES `tbl_permohonan_cuti` (`nip_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_data_cuti` */

/*Table structure for table `tbl_dosen` */

DROP TABLE IF EXISTS `tbl_dosen`;

CREATE TABLE `tbl_dosen` (
  `NIP` varchar(255) NOT NULL,
  `nama_dosen` varchar(255) DEFAULT NULL,
  `no_ktp` int(11) DEFAULT NULL,
  `no_telepon` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('Pria','Wanita') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `status_kepegawaian` varchar(255) DEFAULT NULL,
  `kd_golongan` varchar(10) DEFAULT NULL,
  `id_pendidikan` int(11) DEFAULT NULL,
  `jab_fa` int(11) DEFAULT NULL,
  `jab_str` int(11) DEFAULT NULL,
  `jab_khs` int(11) DEFAULT NULL,
  PRIMARY KEY (`NIP`),
  KEY `jab_fa` (`jab_fa`),
  KEY `jab_str` (`jab_str`),
  KEY `jab_khs` (`jab_khs`),
  KEY `id_pendidikan` (`id_pendidikan`),
  KEY `kd_golongan` (`kd_golongan`),
  CONSTRAINT `tbl_dosen_ibfk_1` FOREIGN KEY (`jab_fa`) REFERENCES `tbl_jabatan_fungsional_akademik` (`id`),
  CONSTRAINT `tbl_dosen_ibfk_2` FOREIGN KEY (`jab_str`) REFERENCES `tbl_jabatan_struktural` (`id`),
  CONSTRAINT `tbl_dosen_ibfk_3` FOREIGN KEY (`jab_khs`) REFERENCES `tbl_jabatan_khusus` (`id`),
  CONSTRAINT `tbl_dosen_ibfk_4` FOREIGN KEY (`id_pendidikan`) REFERENCES `tbl_pendidikan` (`id`),
  CONSTRAINT `tbl_dosen_ibfk_5` FOREIGN KEY (`kd_golongan`) REFERENCES `tbl_golongan` (`kd_golongan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_dosen` */

insert  into `tbl_dosen`(`NIP`,`nama_dosen`,`no_ktp`,`no_telepon`,`alamat`,`jenis_kelamin`,`tanggal_lahir`,`tempat_lahir`,`status_kepegawaian`,`kd_golongan`,`id_pendidikan`,`jab_fa`,`jab_str`,`jab_khs`) values 
('13541512','Arman',2147483647,'1385135188541','Jl. Violet','Pria','2018-06-11','Jdskafds','Sedang Bolos','golE',5,1,1,1),
('15312360','Ragil Satrio',1354863215,'156185130854','Jl. Mawar','Pria','2018-03-12','Jalan Wicak Wicak','Aktif','golC',2,1,1,2),
('15312371','Tio Saputra',1515151515,'0895396914045','Jl. Cemara 2','Pria','2018-06-13','Tanjung Karang','Sedang Cuti','golB',1,3,2,2),
('1535154','Riski Yulidar',15318125,'1355815','Jl. Melati','Pria','2018-07-09','Way Halim','Sedang Berlibur','golC',4,2,4,2);

/*Table structure for table `tbl_golongan` */

DROP TABLE IF EXISTS `tbl_golongan`;

CREATE TABLE `tbl_golongan` (
  `kd_golongan` varchar(10) NOT NULL,
  `nama_golongan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kd_golongan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_golongan` */

insert  into `tbl_golongan`(`kd_golongan`,`nama_golongan`) values 
('golA','Golongan A yang A'),
('golB','Golongan B yang C'),
('golC','Golongan C yang S'),
('golD','Tidak Ada Golongan'),
('golE','Dosen Tidak Tetap');

/*Table structure for table `tbl_jabatan_fungsional_akademik` */

DROP TABLE IF EXISTS `tbl_jabatan_fungsional_akademik`;

CREATE TABLE `tbl_jabatan_fungsional_akademik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jabatan_fungsional_akademik` */

insert  into `tbl_jabatan_fungsional_akademik`(`id`,`nama_jabatan`) values 
(1,'Tidak Ada'),
(2,'Sebagai Pembimbing'),
(3,'Sebagai Dekan'),
(4,'Ketua Jurusan');

/*Table structure for table `tbl_jabatan_khusus` */

DROP TABLE IF EXISTS `tbl_jabatan_khusus`;

CREATE TABLE `tbl_jabatan_khusus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jabatan_khusus` */

insert  into `tbl_jabatan_khusus`(`id`,`nama_jabatan`) values 
(1,'Tidak Ada'),
(2,'Khusus 2'),
(3,'Khusus 1');

/*Table structure for table `tbl_jabatan_struktural` */

DROP TABLE IF EXISTS `tbl_jabatan_struktural`;

CREATE TABLE `tbl_jabatan_struktural` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jabatan_struktural` */

insert  into `tbl_jabatan_struktural`(`id`,`nama_jabatan`) values 
(1,'Tidak Ada'),
(2,'Struktural 2'),
(3,'Struktural 3'),
(4,'Struktural 1');

/*Table structure for table `tbl_jenis_cuti` */

DROP TABLE IF EXISTS `tbl_jenis_cuti`;

CREATE TABLE `tbl_jenis_cuti` (
  `kd_cuti` varchar(10) NOT NULL,
  `nama_cuti` varchar(255) DEFAULT NULL,
  `lama_cuti` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kd_cuti`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jenis_cuti` */

insert  into `tbl_jenis_cuti`(`kd_cuti`,`nama_cuti`,`lama_cuti`,`keterangan`) values 
('kc001','Cuti Bersama',20,'Cuti Bersama'),
('kc002','Cuti Izin',10,'Cuti Izin'),
('kc003','Cuti Perintah',15,'Cuti Perintah');

/*Table structure for table `tbl_pendidikan` */

DROP TABLE IF EXISTS `tbl_pendidikan`;

CREATE TABLE `tbl_pendidikan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `riwayat_pendidikan` varchar(255) DEFAULT NULL,
  `riwayat_pelatihan` varchar(255) DEFAULT NULL,
  `jenjang_pendidikan` varchar(255) DEFAULT NULL,
  `pendidikan_akhir` varchar(255) DEFAULT NULL,
  `tahun_tamat` int(11) DEFAULT NULL,
  `lembaga_pendidikan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pendidikan` */

insert  into `tbl_pendidikan`(`id`,`riwayat_pendidikan`,`riwayat_pelatihan`,`jenjang_pendidikan`,`pendidikan_akhir`,`tahun_tamat`,`lembaga_pendidikan`) values 
(1,'SD WOW Balik Papan:2020, SMP Negri abc:2050','Pernah Berlatih di A, Pernah Ikut Pelatihan B, Ikut Pelatihan C','3','Universitas EFD',2019,'Teknik Informatika'),
(2,'SD Noob Gamer:1997, SMK Lumayan lah:2010','Berlatih sebagai feeder di game manapun','10','Universitas ACD',2015,'Sistem Informatika'),
(4,'SD Susah Di Chat:1998, SMK Nice lah:1998','Pelatihan A, Pelatihan B','40','Universitas Teknokrat Indonesia',2540,'Teknik Informatika'),
(5,'SD di mana ya:2000, SMK ACD:2010','Pelatihan A','1','Universitas XYZ',2003,'Teknik Sipil');

/*Table structure for table `tbl_permohonan_cuti` */

DROP TABLE IF EXISTS `tbl_permohonan_cuti`;

CREATE TABLE `tbl_permohonan_cuti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` int(4) DEFAULT NULL,
  `tgl_pengajuan` date DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `lama_cuti` int(11) DEFAULT NULL,
  `alasan` varchar(255) DEFAULT NULL,
  `koordinasi` varchar(255) DEFAULT NULL,
  `status_pengajuan` varchar(255) DEFAULT NULL,
  `nip_dosen` varchar(255) DEFAULT NULL,
  `kd_jenis` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nip_dosen` (`nip_dosen`),
  KEY `id_jenis` (`kd_jenis`),
  CONSTRAINT `tbl_permohonan_cuti_ibfk_1` FOREIGN KEY (`nip_dosen`) REFERENCES `tbl_dosen` (`NIP`),
  CONSTRAINT `tbl_permohonan_cuti_ibfk_2` FOREIGN KEY (`kd_jenis`) REFERENCES `tbl_jenis_cuti` (`kd_cuti`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_permohonan_cuti` */
