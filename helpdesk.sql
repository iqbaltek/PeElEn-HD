/*
Navicat MySQL Data Transfer

Source Server         : koneksi
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : helpdesk

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2015-10-02 19:32:03
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `attachment`
-- ----------------------------
DROP TABLE IF EXISTS `attachment`;
CREATE TABLE `attachment` (
  `id_attachment` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_size` bigint(20) NOT NULL,
  `upload_date` datetime NOT NULL,
  PRIMARY KEY (`id_attachment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of attachment
-- ----------------------------

-- ----------------------------
-- Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `no_hp_customer` varchar(255) NOT NULL,
  `email_customer` varchar(255) NOT NULL,
  `other` text,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of customer
-- ----------------------------

-- ----------------------------
-- Table structure for `dampak`
-- ----------------------------
DROP TABLE IF EXISTS `dampak`;
CREATE TABLE `dampak` (
  `id_dampak` int(11) NOT NULL,
  `nama_dampak` varchar(255) NOT NULL,
  `deskripsi_dampak` text,
  PRIMARY KEY (`id_dampak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dampak
-- ----------------------------

-- ----------------------------
-- Table structure for `divisi`
-- ----------------------------
DROP TABLE IF EXISTS `divisi`;
CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_divisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of divisi
-- ----------------------------

-- ----------------------------
-- Table structure for `jabatan`
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL,
  `level_jabatan` int(11) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jabatan
-- ----------------------------

-- ----------------------------
-- Table structure for `kantor`
-- ----------------------------
DROP TABLE IF EXISTS `kantor`;
CREATE TABLE `kantor` (
  `id_kantor` int(11) NOT NULL,
  `nama_kantor` varchar(255) NOT NULL,
  `alamat_kantor` text NOT NULL,
  `no_telp_kantor` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kantor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kantor
-- ----------------------------

-- ----------------------------
-- Table structure for `kategori`
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `deskripsi_kategori` text,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori
-- ----------------------------

-- ----------------------------
-- Table structure for `kode_status`
-- ----------------------------
DROP TABLE IF EXISTS `kode_status`;
CREATE TABLE `kode_status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(255) NOT NULL,
  `deskripsi_status` text,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kode_status
-- ----------------------------

-- ----------------------------
-- Table structure for `level_prioritas`
-- ----------------------------
DROP TABLE IF EXISTS `level_prioritas`;
CREATE TABLE `level_prioritas` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(255) NOT NULL,
  `deskripsi_level` text,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of level_prioritas
-- ----------------------------

-- ----------------------------
-- Table structure for `pegawai`
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `nip` varchar(255) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `no_tlp_pegawai` varchar(255) NOT NULL,
  `email_pegawai` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `last_login_date` datetime DEFAULT NULL,
  `kantor` int(11) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `divisi` int(11) NOT NULL,
  `team` int(11) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `fk_kantor` (`kantor`),
  KEY `fk_jabatan` (`jabatan`),
  KEY `fk_divisi` (`divisi`),
  CONSTRAINT `fk_kantor` FOREIGN KEY (`kantor`) REFERENCES `kantor` (`id_kantor`),
  CONSTRAINT `fk_jabatan` FOREIGN KEY (`jabatan`) REFERENCES `jabatan` (`id_jabatan`),
  CONSTRAINT `fk_divisi` FOREIGN KEY (`divisi`) REFERENCES `divisi` (`id_divisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pegawai
-- ----------------------------

-- ----------------------------
-- Table structure for `team`
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `nama_team` varchar(255) NOT NULL,
  PRIMARY KEY (`id_team`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of team
-- ----------------------------

-- ----------------------------
-- Table structure for `tiket`
-- ----------------------------
DROP TABLE IF EXISTS `tiket`;
CREATE TABLE `tiket` (
  `id_tiket` varchar(255) NOT NULL,
  `judul_tiket` text NOT NULL,
  `tgl_awal_tiket` datetime NOT NULL,
  `date_open` datetime DEFAULT NULL,
  `date_close` datetime DEFAULT NULL,
  `durasi` datetime DEFAULT NULL,
  `daskripsi_masalah` text NOT NULL,
  `staf_helpdesk` varchar(255) NOT NULL,
  `staf_teknisi` varchar(255) DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `kategori` int(11) NOT NULL,
  `level_prioritas` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `dampak` int(11) NOT NULL,
  `attachment` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tiket`),
  KEY `fk_staf_helpdesk` (`staf_helpdesk`),
  KEY `fk_ketegori` (`kategori`),
  KEY `fk_level` (`level_prioritas`),
  KEY `fk_status` (`status`),
  KEY `fk_dampak` (`dampak`),
  CONSTRAINT `fk_dampak` FOREIGN KEY (`dampak`) REFERENCES `dampak` (`id_dampak`),
  CONSTRAINT `fk_ketegori` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`),
  CONSTRAINT `fk_level` FOREIGN KEY (`level_prioritas`) REFERENCES `level_prioritas` (`id_level`),
  CONSTRAINT `fk_staf_helpdesk` FOREIGN KEY (`staf_helpdesk`) REFERENCES `pegawai` (`nip`),
  CONSTRAINT `fk_status` FOREIGN KEY (`status`) REFERENCES `kode_status` (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tiket
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1');
INSERT INTO `user` VALUES ('2', 'manager', '1d0258c2440a8d19e716292b231e3190', '2');
INSERT INTO `user` VALUES ('3', 'supervisor', '09348c20a019be0318387c08df7a783d', '3');
INSERT INTO `user` VALUES ('4', 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', '4');
