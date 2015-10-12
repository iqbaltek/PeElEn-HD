/*
Navicat MySQL Data Transfer

Source Server         : konseksi
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : helpdesk

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2015-10-12 12:26:15
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `attachment`
-- ----------------------------
DROP TABLE IF EXISTS `attachment`;
CREATE TABLE `attachment` (
  `id_attachment` int(11) NOT NULL AUTO_INCREMENT,
  `id_tiket` int(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_size` bigint(20) NOT NULL,
  `upload_date` datetime NOT NULL,
  PRIMARY KEY (`id_attachment`),
  KEY `fk_id_tiket` (`id_tiket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of attachment
-- ----------------------------

-- ----------------------------
-- Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `nama_customer` varchar(255) NOT NULL,
  `no_hp_customer` varchar(255) NOT NULL,
  `kantor_customer` int(11) NOT NULL,
  `email_customer` varchar(255) NOT NULL,
  `time` varchar(255) DEFAULT NULL,
  `other` text,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('34', 'Eggy Ryana', '087812347767', '0', 'eggyryana@yahoo.com', '1444466029', 'Pliss atuh benerin, ini masalah perasaan hati :(');
INSERT INTO `customer` VALUES ('35', 'Eggy Ryana', '087812347767', '0', 'eggyryana@yahoo.com', '1444466045', 'Pliss atuh benerin, ini masalah perasaan hati :(');
INSERT INTO `customer` VALUES ('36', 'Eggy Ryana', '087812347767', '0', 'eggyryana@yahoo.com', '1444466140', 'Pliss atuh benerin, ini masalah perasaan hati :(');
INSERT INTO `customer` VALUES ('37', 'Eggy Ryana', '087812347767', '0', 'eggyryana@yahoo.com', '1444466166', 'Pliss atuh benerin, ini masalah perasaan hati :(');
INSERT INTO `customer` VALUES ('38', 'Eggy Ryana', '087812347767', '0', 'eggyryana@yahoo.com', '1444466436', 'Pliss atuh benerin, ini masalah perasaan hati :(');
INSERT INTO `customer` VALUES ('39', 'bambang', '090909', '0', 'eggyryana@yahoo.com', '1444466562', 'ada aja');
INSERT INTO `customer` VALUES ('40', 'bambang', '090909', '0', 'eggyryana@yahoo.com', '1444466614', 'ada aja');
INSERT INTO `customer` VALUES ('41', 'bambang', '090909', '0', 'eggyryana@yahoo.com', '1444466661', 'ada aja');
INSERT INTO `customer` VALUES ('42', 'bambang', '090909', '0', 'eggyryana@yahoo.com', '1444466719', 'ada aja');
INSERT INTO `customer` VALUES ('43', 'bambang', '090909', '0', 'eggyryana@yahoo.com', '1444466747', 'ada aja');
INSERT INTO `customer` VALUES ('44', 'bambang', '090909', '0', 'eggyryana@yahoo.com', '1444466763', 'ada aja');
INSERT INTO `customer` VALUES ('45', 'bambang', '090909', '0', 'eggyryana@yahoo.com', '1444466772', 'ada aja');
INSERT INTO `customer` VALUES ('46', 'bambang', '090909', '0', 'eggyryana@yahoo.com', '1444466803', 'ada aja');
INSERT INTO `customer` VALUES ('47', 'bambang', '090909', '0', 'eggyryana@yahoo.com', '1444466849', 'ada aja');
INSERT INTO `customer` VALUES ('48', 'bambang', '090909', '0', 'eggyryana@yahoo.com', '1444466857', 'ada aja');
INSERT INTO `customer` VALUES ('49', 'bambang', '090909', '0', 'eggyryana@yahoo.com', '1444467107', 'ada aja');
INSERT INTO `customer` VALUES ('50', 'bambang', '090909', '0', 'eggyryana@yahoo.com', '1444467167', 'ada aja');
INSERT INTO `customer` VALUES ('51', 'Eggy Ryana', '98798798', '0', 'eggyryana@yahoo.com', '1444467218', 'no');
INSERT INTO `customer` VALUES ('52', 'Eggy Ryana', '98798798', '0', 'eggyryana@yahoo.com', '1444467235', 'no');
INSERT INTO `customer` VALUES ('53', 'Eggy Ryana', '98798798', '0', 'eggyryana@yahoo.com', '1444467255', 'no');
INSERT INTO `customer` VALUES ('54', 'Eggy Ryana', '98798798', '0', 'eggyryana@yahoo.com', '1444467352', 'no');
INSERT INTO `customer` VALUES ('55', 'Eggy Ryana', '0886858586', '0', 'eggyryana@yahoo.com', '1444467486', 'pliss benerin :(');
INSERT INTO `customer` VALUES ('56', 'Eggy Ryana', '0886858586', '0', 'eggyryana@yahoo.com', '1444467513', 'pliss benerin :(');
INSERT INTO `customer` VALUES ('57', 'Eggy Ryana', '0886858586', '0', 'eggyryana@yahoo.com', '1444467937', 'pliss benerin :(');
INSERT INTO `customer` VALUES ('58', 'Eggy Ryana', '0886858586', '0', 'eggyryana@yahoo.com', '1444468311', 'pliss benerin :(');
INSERT INTO `customer` VALUES ('59', 'Eggy Ryana', '0886858586', '0', 'eggyryana@yahoo.com', '1444468340', 'pliss benerin :(');
INSERT INTO `customer` VALUES ('60', 'Eggy Ryana', '0886858586', '0', 'eggyryana@yahoo.com', '1444469085', 'pliss benerin :(');
INSERT INTO `customer` VALUES ('61', 'Eggy Ryana', '0886858586', '0', 'eggyryana@yahoo.com', '1444469103', 'pliss benerin :(');
INSERT INTO `customer` VALUES ('62', 'kzldg', '', '0', '', '1444545502', '');
INSERT INTO `customer` VALUES ('63', 'ojkk', '', '0', '', '1444545524', '');

-- ----------------------------
-- Table structure for `dampak`
-- ----------------------------
DROP TABLE IF EXISTS `dampak`;
CREATE TABLE `dampak` (
  `id_dampak` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dampak` varchar(255) NOT NULL,
  `deskripsi_dampak` text,
  PRIMARY KEY (`id_dampak`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dampak
-- ----------------------------
INSERT INTO `dampak` VALUES ('1', 'Kritis', 'Berkaitan dengan Proses Bisnis perusahaan, bila kritis tidak dikerjakan makan perusahaan akan mengalami dampak seperti kerugian');
INSERT INTO `dampak` VALUES ('2', 'Standar', 'Tidak begitu berpengaruh pada proses bisnis perusahaan');
INSERT INTO `dampak` VALUES ('3', 'None', 'Tidak berpengaruh sama sekali pada proses bisnis perusahaan');

-- ----------------------------
-- Table structure for `divisi`
-- ----------------------------
DROP TABLE IF EXISTS `divisi`;
CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_divisi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_divisi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of divisi
-- ----------------------------
INSERT INTO `divisi` VALUES ('1', 'Gardu Induk');
INSERT INTO `divisi` VALUES ('2', 'Sumber Daya Manusia');
INSERT INTO `divisi` VALUES ('3', 'Keuangan');
INSERT INTO `divisi` VALUES ('4', 'Operasi Sistem Distribusi');
INSERT INTO `divisi` VALUES ('5', 'Scada dan Teknologi Informasi');

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
INSERT INTO `jabatan` VALUES ('0', 'General Manager', '1');
INSERT INTO `jabatan` VALUES ('2', 'Asisten Manajer', '2');
INSERT INTO `jabatan` VALUES ('3', 'Supervisor', '3');
INSERT INTO `jabatan` VALUES ('4', 'Kepala Deputi', '4');
INSERT INTO `jabatan` VALUES ('5', 'Karyawan', '5');
INSERT INTO `jabatan` VALUES ('6', 'Staf Helpdesk', '11');
INSERT INTO `jabatan` VALUES ('7', 'Staf Technical Support', '12');

-- ----------------------------
-- Table structure for `kantor`
-- ----------------------------
DROP TABLE IF EXISTS `kantor`;
CREATE TABLE `kantor` (
  `id_kantor` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kantor` varchar(255) NOT NULL,
  `alamat_kantor` text NOT NULL,
  `no_telp_kantor` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kantor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kantor
-- ----------------------------
INSERT INTO `kantor` VALUES ('1', 'APJ Tasikmalaya', 'Jl. Mayor Utarya No. 28', '0265331686');
INSERT INTO `kantor` VALUES ('2', 'Distribusi Jawa Barat dan Banten', 'Jl. Asia Afrika No. 63, Kota Bandung', '0224230747');

-- ----------------------------
-- Table structure for `kategori`
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  `deskripsi_kategori` text,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES ('1', 'AMS', 'Aplikasi Manajemen Surat');
INSERT INTO `kategori` VALUES ('2', 'Dashboard', null);
INSERT INTO `kategori` VALUES ('3', 'Email', 'Permasalahan seputar email corporate');
INSERT INTO `kategori` VALUES ('4', 'Eproc dan ABG', null);
INSERT INTO `kategori` VALUES ('5', 'Graphon', null);
INSERT INTO `kategori` VALUES ('6', 'Hardware', 'Permasalahan seputar perangkat keras');
INSERT INTO `kategori` VALUES ('7', 'Network', 'Permasalahan seputar jaringan komuter');
INSERT INTO `kategori` VALUES ('8', 'QCC', 'Permasalah mengenai Quality Control Circle');
INSERT INTO `kategori` VALUES ('9', 'Revas', 'Reavenue Assurance, suatu program pengamanan pendapatan perusahaan dari kebocoran-kebocoran');
INSERT INTO `kategori` VALUES ('10', 'SAP', 'System Application and Product');
INSERT INTO `kategori` VALUES ('11', 'Smart One', null);

-- ----------------------------
-- Table structure for `kode_status`
-- ----------------------------
DROP TABLE IF EXISTS `kode_status`;
CREATE TABLE `kode_status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `nama_status` varchar(255) NOT NULL,
  `deskripsi_status` text,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kode_status
-- ----------------------------
INSERT INTO `kode_status` VALUES ('1', 'New', 'Kondisi dimana Tiket baru di buat dan akan dikirimkan ke Technical Support atau Tim Teknisi');
INSERT INTO `kode_status` VALUES ('2', 'Open', 'Kondisi dimana Tiket telah dibuka dan dibaca oleh Technical Support atau Tim Teknisi');
INSERT INTO `kode_status` VALUES ('3', 'Close', 'Kondisi dimana Tiket telah diselesaikan');

-- ----------------------------
-- Table structure for `level_prioritas`
-- ----------------------------
DROP TABLE IF EXISTS `level_prioritas`;
CREATE TABLE `level_prioritas` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(255) NOT NULL,
  `deskripsi_level` text,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of level_prioritas
-- ----------------------------
INSERT INTO `level_prioritas` VALUES ('1', 'Top', 'Seperti Top Level Management');
INSERT INTO `level_prioritas` VALUES ('2', 'Middle', 'Seperti Supervisor');
INSERT INTO `level_prioritas` VALUES ('3', 'Lower', 'Seperti Karyawan');

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
  `sub_divisi` int(11) NOT NULL,
  `team` int(11) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `fk_kantor` (`kantor`),
  KEY `fk_jabatan` (`jabatan`),
  KEY `fk_sub_divisi` (`sub_divisi`),
  CONSTRAINT `fk_jabatan` FOREIGN KEY (`jabatan`) REFERENCES `jabatan` (`id_jabatan`),
  CONSTRAINT `fk_kantor` FOREIGN KEY (`kantor`) REFERENCES `kantor` (`id_kantor`),
  CONSTRAINT `fk_sub_divisi` FOREIGN KEY (`sub_divisi`) REFERENCES `sub_divisi` (`id_sub_divisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
INSERT INTO `pegawai` VALUES ('HD', 'Helpdesk Dummy', '0', 'dummy@dummy.com', 'helpdesk', '288682ec5f2450588bb37a4523d11616', '2015-10-04 23:35:04', '2015-10-11 12:00:09', '2', '6', '17', null);
INSERT INTO `pegawai` VALUES ('TS', 'Teknisi Dummy', '0', 'dummy@dummy.com', 'teknisi', 'e21394aaeee10f917f581054d24b031f', '2015-10-04 23:32:41', '2015-10-08 20:31:33', '2', '7', '17', null);

-- ----------------------------
-- Table structure for `sub_divisi`
-- ----------------------------
DROP TABLE IF EXISTS `sub_divisi`;
CREATE TABLE `sub_divisi` (
  `id_sub_divisi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sub_divisi` varchar(255) NOT NULL,
  `divisi` int(11) NOT NULL,
  PRIMARY KEY (`id_sub_divisi`),
  KEY `fk_divisi2` (`divisi`),
  CONSTRAINT `fk_divisi2` FOREIGN KEY (`divisi`) REFERENCES `divisi` (`id_divisi`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sub_divisi
-- ----------------------------
INSERT INTO `sub_divisi` VALUES ('1', 'Gardu Induk', '1');
INSERT INTO `sub_divisi` VALUES ('2', 'Pengukuran dan Transaksi Energi', '1');
INSERT INTO `sub_divisi` VALUES ('3', 'Sumber Daya Manusia', '2');
INSERT INTO `sub_divisi` VALUES ('4', 'Sekretariat', '2');
INSERT INTO `sub_divisi` VALUES ('6', 'Logistik', '2');
INSERT INTO `sub_divisi` VALUES ('7', 'Pengelolaan Anggaran dan Keuangan', '3');
INSERT INTO `sub_divisi` VALUES ('8', 'Akutansi', '3');
INSERT INTO `sub_divisi` VALUES ('9', 'Perencanaan Operasi', '4');
INSERT INTO `sub_divisi` VALUES ('10', 'Operasi', '4');
INSERT INTO `sub_divisi` VALUES ('11', 'Perencanaan dan Pemeliharaan', '4');
INSERT INTO `sub_divisi` VALUES ('12', 'Pemeliharaan Gardu Induk', '4');
INSERT INTO `sub_divisi` VALUES ('13', 'Pengusahaan data dan Gambar', '4');
INSERT INTO `sub_divisi` VALUES ('15', 'Remote Terminal Unit (RTU)', '5');
INSERT INTO `sub_divisi` VALUES ('16', 'Perencanaan SCADA', '5');
INSERT INTO `sub_divisi` VALUES ('17', 'Teknologi Informasi', '5');
INSERT INTO `sub_divisi` VALUES ('18', 'Telekomunikasi', '5');
INSERT INTO `sub_divisi` VALUES ('19', 'Peripheral', '5');

-- ----------------------------
-- Table structure for `team`
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id_team` int(11) NOT NULL AUTO_INCREMENT,
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
  `id_tiket` int(255) NOT NULL AUTO_INCREMENT,
  `judul_tiket` text NOT NULL,
  `tgl_awal_tiket` datetime NOT NULL,
  `date_open` datetime DEFAULT NULL,
  `date_close` datetime DEFAULT NULL,
  `durasi` datetime DEFAULT NULL,
  `deskripsi_masalah` text NOT NULL,
  `staf_helpdesk` varchar(255) NOT NULL,
  `staf_teknisi` varchar(255) DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `kantor` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `level_prioritas` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `dampak` int(11) NOT NULL,
  `lampiran` int(11) DEFAULT NULL,
  `tutorial` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tiket`),
  KEY `fk_staf_helpdesk` (`staf_helpdesk`),
  KEY `fk_ketegori` (`kategori`),
  KEY `fk_level` (`level_prioritas`),
  KEY `fk_status` (`status`),
  KEY `fk_dampak` (`dampak`),
  KEY `fk_kantor2` (`kantor`),
  CONSTRAINT `fk_dampak` FOREIGN KEY (`dampak`) REFERENCES `dampak` (`id_dampak`),
  CONSTRAINT `fk_kantor2` FOREIGN KEY (`kantor`) REFERENCES `kantor` (`id_kantor`),
  CONSTRAINT `fk_ketegori` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`),
  CONSTRAINT `fk_level` FOREIGN KEY (`level_prioritas`) REFERENCES `level_prioritas` (`id_level`),
  CONSTRAINT `fk_staf_helpdesk` FOREIGN KEY (`staf_helpdesk`) REFERENCES `pegawai` (`nip`),
  CONSTRAINT `fk_status` FOREIGN KEY (`status`) REFERENCES `kode_status` (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tiket
-- ----------------------------
INSERT INTO `tiket` VALUES ('1', 'aaaaa', '2015-10-10 15:38:21', null, null, null, 'a', 'TS', 'HD', '1', '1', '1', '1', '1', '1', null, null);
INSERT INTO `tiket` VALUES ('12', 'Hardisk error', '0000-00-00 00:00:00', null, null, null, 'tidak bisa membuka file', 'HD', 'TS', '55', '1', '6', '1', '1', '1', null, null);
INSERT INTO `tiket` VALUES ('13', 'Hardisk error', '0000-00-00 00:00:00', null, null, null, 'tidak bisa membuka file', 'HD', 'TS', '56', '1', '6', '1', '1', '1', null, null);
INSERT INTO `tiket` VALUES ('14', 'Hardisk error', '0000-00-00 00:00:00', null, null, null, 'tidak bisa membuka file', 'HD', 'TS', '57', '1', '6', '1', '1', '1', null, null);
INSERT INTO `tiket` VALUES ('15', 'Hardisk error', '0000-00-00 00:00:00', null, null, null, 'tidak bisa membuka file', 'HD', 'TS', '58', '1', '6', '1', '1', '1', '1', null);
INSERT INTO `tiket` VALUES ('16', 'Hardisk error', '0000-00-00 00:00:00', null, null, null, 'tidak bisa membuka file', 'HD', 'TS', '59', '1', '6', '1', '1', '1', '1', null);
INSERT INTO `tiket` VALUES ('17', 'Hardisk error', '0000-00-00 00:00:00', null, null, null, 'tidak bisa membuka file', 'HD', 'TS', '60', '1', '6', '1', '1', '1', '1', null);
INSERT INTO `tiket` VALUES ('18', 'Hardisk error', '0000-00-00 00:00:00', null, null, null, 'tidak bisa membuka file', 'HD', 'TS', '61', '1', '6', '1', '1', '1', '18', null);

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
