/*
Navicat MySQL Data Transfer

Source Server         : koneksi
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : helpdesk

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2015-10-19 13:30:01
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of attachment
-- ----------------------------
INSERT INTO `attachment` VALUES ('1', '12', '12.pdf', '0', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('2', '37', '37.txt', '899', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('3', '38', '38.txt', '899', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('4', '39', '39.txt', '899', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('5', '40', '40.txt', '899', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('6', '41', '41.txt', '899', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('7', '41', '41.txt', '899', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('8', '42', '42.txt', '899', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('9', '43', '43.txt', '899', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('10', '44', '44.txt', '899', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('11', '45', '45.txt', '899', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('12', '46', '46.', '0', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('13', '47', '47.', '0', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('14', '48', '48.', '0', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('15', '49', '49.', '0', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('16', '50', '50.', '0', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('17', '51', '51.', '0', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('18', '52', '52.', '0', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('19', '53', '53.', '0', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('20', '54', '54.', '0', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('21', '59', '59.txt', '899', '0000-00-00 00:00:00');
INSERT INTO `attachment` VALUES ('22', '60', '60.txt', '899', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

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
INSERT INTO `customer` VALUES ('64', 'Iman Muhamad Ramadhan', '081220556459', '0', 'iman.mr@hotmail.com', '1445132666', '');
INSERT INTO `customer` VALUES ('65', 'Iman Muhamad Ramadhan', '081220556459', '0', 'iman.mr@hotmail.com', '1445132815', '');
INSERT INTO `customer` VALUES ('66', 'Iman Muhamad Ramadhan', '1', '0', 'a@a.com', '1445133088', '');
INSERT INTO `customer` VALUES ('67', 'Iman Muhamad Ramadhan', '081220556459', '0', 'zi.ad@ya.ru', '1445133178', '');
INSERT INTO `customer` VALUES ('68', 'Iman Muhamad Ramadhan', '1', '0', 'a@a.com', '1445133387', '');
INSERT INTO `customer` VALUES ('69', '1', '1', '0', 'a@a.com', '1445133474', '');
INSERT INTO `customer` VALUES ('70', '2', '2', '0', 'a@a.com', '1445133539', '2');
INSERT INTO `customer` VALUES ('71', 'f', '1', '0', 'a@a.com', '1445133882', '');
INSERT INTO `customer` VALUES ('72', '11', '11', '0', 'a@a.com', '1445133944', '1');
INSERT INTO `customer` VALUES ('73', 'iman', '1', '0', 'a@a.com', '1445134041', '1');
INSERT INTO `customer` VALUES ('74', '1', '1', '0', 'a@a.com', '1445134164', '1');
INSERT INTO `customer` VALUES ('75', '1', '1', '0', 'a@a.com', '1445140680', '1');
INSERT INTO `customer` VALUES ('76', '1', '1', '0', 'a@a.com', '1445140842', '1');
INSERT INTO `customer` VALUES ('77', 'iman', '1', '0', 'a@a.com', '1445141421', '1');
INSERT INTO `customer` VALUES ('78', 'iman', '1', '0', 'a@a.com', '1445141439', '1');
INSERT INTO `customer` VALUES ('79', '1', '1', '0', 'a@a.com', '1445141923', '1');
INSERT INTO `customer` VALUES ('80', '1', '1', '0', 'a@a.com', '1445141961', '1');
INSERT INTO `customer` VALUES ('81', '1', '1', '0', 'a@a.com', '1445141997', '1');
INSERT INTO `customer` VALUES ('82', '1', '1', '0', 'a@a.com', '1445142062', '1');
INSERT INTO `customer` VALUES ('83', '1', '1', '0', 'a@a.com', '1445142115', '1');
INSERT INTO `customer` VALUES ('84', '1', '1', '0', 'a@a.com', '1445142186', '1');
INSERT INTO `customer` VALUES ('85', 'Radian Pradana', '081220556459', '0', 'a@a.com', '1445226183', '');
INSERT INTO `customer` VALUES ('86', 'Endah Nur Salehah', '081220556459', '0', 'a@a.com', '1445226777', '');
INSERT INTO `customer` VALUES ('87', 'Endah Nur Salehah', '081220556459', '0', 'a@a.com', '1445226884', '');
INSERT INTO `customer` VALUES ('88', 'Rosa Ariani Sukamto', '0', '0', 'a@a.com', '1445227045', '');
INSERT INTO `customer` VALUES ('89', 'a', '1', '0', 'a@a.com', '1445227191', '');
INSERT INTO `customer` VALUES ('90', 'a', '1', '0', 'a@a.com', '1445227300', '');
INSERT INTO `customer` VALUES ('91', 'a', 'a', '0', 'a@a.com', '1445227448', '');
INSERT INTO `customer` VALUES ('92', 'a', 'a', '0', 'a@a.com', '1445227475', '');
INSERT INTO `customer` VALUES ('93', 'Azwar Mathari', '1', '0', 'a@a.com', '1445227657', '1');
INSERT INTO `customer` VALUES ('94', 'Syabila Sondaka', '1', '0', 'a@a.com', '1445227745', '');
INSERT INTO `customer` VALUES ('95', 'Endah Azwarudin', '1', '0', 'a@a.com', '1445227858', '');

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
INSERT INTO `jabatan` VALUES ('1', 'General Manager', '1');
INSERT INTO `jabatan` VALUES ('2', 'Asisten Manajer', '2');
INSERT INTO `jabatan` VALUES ('3', 'Supervisor', '3');
INSERT INTO `jabatan` VALUES ('4', 'Kepala Deputi', '4');
INSERT INTO `jabatan` VALUES ('5', 'Karyawan', '5');
INSERT INTO `jabatan` VALUES ('6', 'Staf Helpdesk', '11');
INSERT INTO `jabatan` VALUES ('7', 'Staf Technical Support', '12');
INSERT INTO `jabatan` VALUES ('8', 'Staf Admin Helpdesk', '13');

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
  `aktivasi` varchar(255) NOT NULL,
  `tgl_diedit` datetime DEFAULT NULL,
  `diedit_oleh` varchar(255) DEFAULT NULL,
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
INSERT INTO `pegawai` VALUES ('AD', 'admin', '0', 'dummy@dymm.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2015-10-15 08:06:59', '2015-10-19 12:26:34', '2', '8', '17', null, '21232f297a57a5a743894a0e4a801fc3', null, null);
INSERT INTO `pegawai` VALUES ('HD', 'Helpdesk Dummy', '0', 'dummy@dummy.com', 'helpdesk', '288682ec5f2450588bb37a4523d11616', '2015-10-04 23:35:04', '2015-10-19 11:38:00', '2', '6', '17', null, '288682ec5f2450588bb37a4523d11616', null, null);
INSERT INTO `pegawai` VALUES ('KD', 'Kepala Deputi', '0', 'dummy@dummy.com', 'kepala', '870f669e4bbbfa8a6fde65549826d1c4', '2015-10-14 08:19:45', '2015-10-19 11:38:19', '2', '4', '17', null, '870f669e4bbbfa8a6fde65549826d1c4', null, null);
INSERT INTO `pegawai` VALUES ('TS', 'Teknisi Dummy', '0', 'dummy@dummy.com', 'teknisi', 'e21394aaeee10f917f581054d24b031f', '2015-10-04 23:32:41', '2015-10-19 11:46:10', '2', '7', '17', null, 'e21394aaeee10f917f581054d24b031f', null, null);
INSERT INTO `pegawai` VALUES ('TS1', 'Teknisi 1', '0', 'dummy@dummy.com', 'teknisi1', '491b4c7ab9757487389b0fbea6a1d2ea', '2015-10-15 06:52:35', '2015-10-19 10:43:16', '2', '7', '17', '1', '0', '2015-10-19 12:28:39', 'AD');
INSERT INTO `pegawai` VALUES ('TS2', 'Teknisi 2', '0', 'dummy@dymmy.com', 'teknisi2', '3a4bd8b8554827fe98db41e5ac1950b6', '2015-10-15 06:53:14', null, '2', '7', '17', '1', '0', null, null);

-- ----------------------------
-- Table structure for `solusi`
-- ----------------------------
DROP TABLE IF EXISTS `solusi`;
CREATE TABLE `solusi` (
  `id_solusi` int(11) NOT NULL AUTO_INCREMENT,
  `judul_solusi` text NOT NULL,
  `dilihat_sebanyak` int(11) DEFAULT NULL,
  `deskripsi_solusi` mediumtext NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  PRIMARY KEY (`id_solusi`),
  KEY `fk_tiket_solusi` (`id_tiket`),
  KEY `fk_pegawai_solusi` (`nip`),
  CONSTRAINT `fk_pegawai_solusi` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`),
  CONSTRAINT `fk_tiket_solusi` FOREIGN KEY (`id_tiket`) REFERENCES `tiket` (`id_tiket`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of solusi
-- ----------------------------
INSERT INTO `solusi` VALUES ('9', 'Hardisk error', null, '<b>hayawaaaa</b><br>', '13', 'TS');
INSERT INTO `solusi` VALUES ('10', 'Hardisk error', null, 'a<br>', '14', 'TS');
INSERT INTO `solusi` VALUES ('11', 'Implementasi algoritma kriptografi AES dan OTP untuk membangkitkan kode otentikasi pada aktivasi member baru yang dikirim melalui SMS', null, 'asdklasjdlajsdljasldjlasjdjlasjdlasd<br>asdklasjdlajsdljasldjlasjdjlasjdlasd<br>asdklasjdlajsdljasldjlasjdjlasjdlasd<br>asdklasjdlajsdljasldjlasjdjlasjdlasd<br>asdklasjdlajsdljasldjlasjdjlasjdlasd<br>asdklasjdlajsdljasldjlasjdjlasjdlasd<br>asdklasjdlajsdljasldjlasjdjlasjdlasd<br>asdklasjdlajsdljasldjlasjdjlasjdlasd<br>', '12', 'TS');
INSERT INTO `solusi` VALUES ('12', 'Hardisk error', null, 'hayawa<br>', '16', 'TS');
INSERT INTO `solusi` VALUES ('13', 'Hardisk error', null, 'hayawa', '16', 'TS');
INSERT INTO `solusi` VALUES ('14', 'TIM 1 a', null, 'hayawa', '32', 'TS1');
INSERT INTO `solusi` VALUES ('15', 'TS1 a', null, '<b>lorem</b><i>ipsum <u>iman </u>g</i>anteng pisan<br><ul><li>hayawa</li></ul><ul><li>123123</li><li>123123</li></ul><ol><li>sadasd</li><li>asdasd</li><li>asdasd</li></ol>asdasdas<br>asdasdasd<br><br>', '34', 'TS1');
INSERT INTO `solusi` VALUES ('16', 'Mouse tidak mau bergerak', null, 'Berikut cara penanganannya :<br><ol><li>Cek Kabel apakah terhubung dengan laptop atau PC</li><li>Cek apakah kabel tidak terputus atau patah</li><li>cek meja apakah sensitif terhadap optik<br></li></ol>', '54', 'TS1');
INSERT INTO `solusi` VALUES ('17', 'Monitor Kok Tidak nyala ya?', null, 'Coba di cek apakah kabelnya nyambung dengan PC?<br>', '55', 'TS1');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of team
-- ----------------------------
INSERT INTO `team` VALUES ('1', 'Admin AMS');

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
  `durasi` int(255) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tiket
-- ----------------------------
INSERT INTO `tiket` VALUES ('1', 'aaaaa', '2015-09-01 15:38:21', '0000-00-00 00:00:00', null, null, 'a', 'TS', 'HD', '1', '1', '1', '1', '1', '1', null, null);
INSERT INTO `tiket` VALUES ('12', 'Implementasi algoritma kriptografi AES dan OTP untuk membangkitkan kode otentikasi pada aktivasi member baru yang dikirim melalui SMS', '2015-09-01 15:38:21', '2015-10-15 10:46:42', '2015-10-15 10:47:05', '876', 'tidak bisa membuka file', 'HD', 'TS', '55', '1', '1', '1', '3', '1', '18', '2');
INSERT INTO `tiket` VALUES ('13', 'Hardisk error', '2015-09-01 15:38:21', '2015-10-15 10:46:44', '2015-10-14 08:09:29', '2323', 'tidak bisa membuka file', 'HD', 'TS', '56', '1', '1', '1', '2', '1', null, '2');
INSERT INTO `tiket` VALUES ('14', 'Hardisk error', '2015-09-01 15:38:21', '2015-10-15 10:46:48', '2015-10-14 08:38:26', '2321', 'tidak bisa membuka file', 'HD', 'TS', '57', '1', '2', '1', '2', '1', null, '2');
INSERT INTO `tiket` VALUES ('15', 'Hardisk error', '2015-09-01 15:38:21', '2015-10-15 10:46:45', '2015-10-14 08:45:34', '1122', 'tidak bisa membuka file', 'HD', 'TS', '58', '1', '2', '1', '2', '1', '1', '0');
INSERT INTO `tiket` VALUES ('16', 'Hardisk error', '2015-08-01 15:38:21', '2015-10-17 07:48:31', '2015-10-17 07:53:36', '2323', 'tidak bisa membuka file', 'HD', 'TS', '59', '1', '2', '1', '3', '1', '1', '2');
INSERT INTO `tiket` VALUES ('17', 'Hardisk error', '2015-08-01 15:38:21', '2015-10-15 10:46:58', '0000-00-00 00:00:00', '2321', 'tidak bisa membuka file', 'HD', 'TS', '60', '1', '2', '1', '2', '1', '1', null);
INSERT INTO `tiket` VALUES ('18', 'Hardisk error', '2015-08-01 15:38:21', '2015-10-14 08:37:08', '2015-10-14 08:45:38', '1122', 'tidak bisa membuka file', 'HD', 'TS', '61', '1', '3', '1', '1', '1', '18', '0');
INSERT INTO `tiket` VALUES ('19', 'Hardisk error', '2015-08-01 15:38:21', '2015-10-14 08:09:11', '2015-10-14 08:09:29', '2323', 'tidak bisa membuka file', 'HD', 'TS', '56', '1', '3', '1', '1', '1', null, '2');
INSERT INTO `tiket` VALUES ('20', 'Hardisk error', '2015-08-01 15:38:21', '2015-10-16 08:43:23', '2015-10-14 08:38:26', '2321', 'tidak bisa membuka file', 'HD', 'TS', '57', '1', '3', '1', '2', '1', null, '2');
INSERT INTO `tiket` VALUES ('21', 'Hardisk error', '2015-08-01 15:38:21', '2015-10-16 08:43:28', null, '1122', 'tidak bisa membuka file', 'HD', 'TS', '58', '1', '4', '1', '2', '1', '1', '0');
INSERT INTO `tiket` VALUES ('22', 'Hardisk error', '2015-08-01 15:38:21', '2015-10-14 08:36:58', '2015-10-14 08:45:36', '876', 'tidak bisa membuka file', 'HD', 'TS', '59', '1', '4', '2', '1', '1', '1', '0');
INSERT INTO `tiket` VALUES ('23', 'Hardisk error', '2015-09-01 15:38:21', '2015-10-13 11:17:36', '0000-00-00 00:00:00', '2323', 'tidak bisa membuka file', 'HD', 'TS', '60', '1', '4', '2', '1', '1', '1', null);
INSERT INTO `tiket` VALUES ('24', 'Hardisk error', '2015-09-01 15:38:21', '2015-10-14 08:37:08', '2015-10-14 08:45:38', '2321', 'tidak bisa membuka file', 'HD', 'TS', '61', '1', '4', '2', '1', '1', '18', '0');
INSERT INTO `tiket` VALUES ('25', 'Hardisk error', '2015-09-01 15:38:21', null, null, '1122', 'tidak bisa membuka file', 'HD', 'TS', '56', '1', '4', '2', '1', '1', null, '2');
INSERT INTO `tiket` VALUES ('26', 'Hardisk error', '2015-09-01 15:38:21', '2015-10-14 08:33:36', '2015-10-14 08:38:26', '2323', 'tidak bisa membuka file', 'HD', 'TS', '57', '1', '5', '2', '1', '1', null, '2');
INSERT INTO `tiket` VALUES ('27', 'Hardisk error', '2015-10-10 15:38:21', '2015-10-14 08:34:44', '2015-10-14 08:45:34', '2321', 'tidak bisa membuka file', 'HD', 'TS', '58', '1', '5', '3', '1', '1', '1', '0');
INSERT INTO `tiket` VALUES ('28', 'Hardisk error', '2015-10-10 15:38:21', '2015-10-14 08:36:58', '2015-10-14 08:45:36', '1122', 'tidak bisa membuka file', 'HD', 'TS', '59', '1', '6', '3', '1', '3', '1', '0');
INSERT INTO `tiket` VALUES ('29', 'Hardisk error', '2015-10-10 15:38:21', '2015-10-13 11:17:36', '0000-00-00 00:00:00', '2323', 'tidak bisa membuka file', 'HD', 'TS', '60', '1', '6', '3', '1', '3', '1', null);
INSERT INTO `tiket` VALUES ('30', 'Hardisk error', '2015-10-10 15:38:21', '2015-10-14 08:37:08', '2015-10-14 08:45:38', '2321', 'tidak bisa membuka file', 'HD', 'TS', '61', '1', '7', '3', '1', '3', '18', '0');
INSERT INTO `tiket` VALUES ('31', 'Hardisk error', '2015-10-10 15:38:21', '2015-10-14 08:09:11', '2015-10-14 08:09:29', '1122', 'tidak bisa membuka file', 'HD', 'TS', '56', '1', '7', '3', '1', '3', null, '2');
INSERT INTO `tiket` VALUES ('32', 'TIM 1 a', '2015-10-10 15:38:21', '2015-10-17 07:55:37', '2015-10-17 07:55:58', '876', 'tidak bisa membuka file', 'HD', '1', '57', '1', '8', '2', '3', '2', null, '2');
INSERT INTO `tiket` VALUES ('33', 'TIM 1 b', '2015-10-10 15:38:21', '2015-10-14 08:34:44', '2015-10-14 08:45:34', '2323', 'tidak bisa membuka file', 'HD', '1', '58', '1', '9', '2', '1', '2', '1', '0');
INSERT INTO `tiket` VALUES ('34', 'TS1 a', '2015-10-10 15:38:21', '2015-10-17 07:55:44', '2015-10-17 07:59:07', '2321', 'tidak bisa membuka file', 'HD', 'TS1', '59', '1', '10', '2', '3', '2', '1', '2');
INSERT INTO `tiket` VALUES ('35', 'Hardisk error', '2015-10-10 15:38:21', '2015-10-13 11:17:36', '0000-00-00 00:00:00', '1122', 'tidak bisa membuka file', 'HD', 'TS', '60', '1', '10', '1', '1', '2', '1', null);
INSERT INTO `tiket` VALUES ('36', 'Hardisk error', '2015-08-01 15:38:21', '2015-10-14 08:37:08', '2015-10-14 08:45:38', '2323', 'tidak bisa membuka file', 'HD', 'TS', '61', '1', '11', '1', '1', '2', '18', '0');
INSERT INTO `tiket` VALUES ('37', '1', '2015-10-18 09:04:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2321', '1', 'HD', '1', '64', '2', '1', '2', '1', '2', '37', '0');
INSERT INTO `tiket` VALUES ('41', '2', '2015-10-18 09:05:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1122', '2', 'HD', '1', '69', '2', '1', '1', '1', '1', '41', '0');
INSERT INTO `tiket` VALUES ('42', '2', '2015-10-18 09:07:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2323', '2', 'HD', '1', '70', '2', '1', '1', '1', '1', '42', '0');
INSERT INTO `tiket` VALUES ('43', 'a', '2015-10-18 09:04:42', '2015-10-18 09:12:43', '2015-10-18 09:13:00', '2321', '1', 'HD', '1', '71', '2', '1', '1', '3', '1', '43', '0');
INSERT INTO `tiket` VALUES ('44', 'AMS RUSAK', '2015-10-18 09:05:44', '2015-10-18 09:05:44', '2015-10-18 09:05:44', '1122', '1', 'HD', '1', '72', '2', '1', '1', '1', '1', '44', '0');
INSERT INTO `tiket` VALUES ('45', 'AMS RUSAK', '2015-10-18 09:07:21', '2015-10-18 09:07:21', '2015-10-18 09:07:21', '876', '1', 'HD', '1', '73', '1', '1', '1', '1', '1', '45', '0');
INSERT INTO `tiket` VALUES ('46', 'AMS RUSAK', '2015-10-18 09:09:24', '2015-10-18 09:09:24', '2015-10-18 09:09:24', '2323', '1', 'HD', '1', '74', '1', '1', '1', '1', '1', '46', '0');
INSERT INTO `tiket` VALUES ('47', '1', '2015-10-18 10:58:00', '2015-10-18 10:58:00', '2015-10-18 10:58:00', '2321', '1', 'HD', '1', '75', '2', '1', '1', '1', '1', '47', '0');
INSERT INTO `tiket` VALUES ('48', 'AMS RUSAK', '2015-10-18 11:00:42', '2015-10-18 11:00:42', '2015-10-18 11:00:42', '1122', '1', 'HD', '1', '76', '2', '1', '1', '1', '1', '48', '0');
INSERT INTO `tiket` VALUES ('49', '1', '2015-10-18 11:10:39', '2015-10-18 11:10:39', '2015-10-18 11:10:39', '2323', 'q', 'HD', '1', '78', '2', '1', '1', '1', '1', '49', '0');
INSERT INTO `tiket` VALUES ('50', '1', '2015-10-18 11:19:57', null, null, '2321', '1', 'HD', '1', '81', '2', '1', '1', '1', '1', null, null);
INSERT INTO `tiket` VALUES ('51', '1', '2015-10-18 11:21:02', null, null, '1122', '1', 'HD', '1', '82', '2', '1', '1', '2', '1', null, null);
INSERT INTO `tiket` VALUES ('52', 'close', '2015-10-18 11:21:55', null, null, '2323', '1', 'HD', '1', '83', '2', '1', '1', '2', '1', null, null);
INSERT INTO `tiket` VALUES ('53', 'close', '2015-10-18 11:23:06', '2015-10-18 11:23:06', '2015-10-18 11:23:06', '2321', '1', 'HD', 'TS', '84', '2', '1', '1', '3', '1', null, '0');
INSERT INTO `tiket` VALUES ('54', 'Mouse tidak mau bergerak', '2015-10-19 10:43:03', '2015-10-19 10:43:39', '2015-10-19 10:43:47', '1122', 'Kenapa ya mouse saya tidak mau bergerak, padahal semuanya normal2 saja sebelumnya', 'HD', 'TS1', '85', '2', '6', '3', '3', '3', null, '2');
INSERT INTO `tiket` VALUES ('55', 'Monitor Kok Tidak nyala ya?', '2015-10-19 10:52:57', '2015-10-19 10:53:17', '2015-10-19 10:53:30', '2323', 'ini monitor kenapa tiba2 hitam?', 'HD', 'TS1', '86', '2', '6', '3', '3', '3', null, '2');
INSERT INTO `tiket` VALUES ('56', 'Speaker tidak bunyi', '2015-10-19 10:54:44', null, null, '2321', 'cuma kereseeeeek', 'HD', 'TS1', '87', '2', '6', '3', '1', '3', null, null);
INSERT INTO `tiket` VALUES ('57', 'Laptop saya kok patah', '2015-10-19 10:57:25', null, null, '1122', 'as', 'HD', 'TS1', '88', '2', '6', '2', '1', '1', null, null);
INSERT INTO `tiket` VALUES ('58', 'a', '2015-10-19 10:59:51', null, null, '2323', 'a', 'HD', 'TS1', '89', '2', '6', '1', '1', '1', null, null);
INSERT INTO `tiket` VALUES ('59', 'a', '2015-10-19 11:01:40', null, null, '2321', 'a', 'HD', 'TS1', '90', '2', '1', '1', '1', '1', null, null);
INSERT INTO `tiket` VALUES ('60', 'a', '2015-10-19 11:04:08', null, null, '1122', 'a', 'HD', 'TS1', '91', '2', '1', '1', '1', '2', null, null);
INSERT INTO `tiket` VALUES ('61', 'a', '2015-10-19 11:04:35', null, null, null, 'a', 'HD', 'TS1', '92', '2', '1', '1', '1', '1', null, null);
INSERT INTO `tiket` VALUES ('62', 'Wifi SDM Mati', '2015-10-19 11:07:38', null, null, null, 'a', 'HD', 'TS1', '93', '2', '6', '1', '1', '1', null, null);
INSERT INTO `tiket` VALUES ('63', 'Sistem Akutansinya gak jalan', '2015-10-19 11:09:06', null, null, null, 'a', 'HD', 'TS1', '94', '2', '11', '1', '1', '1', null, null);
INSERT INTO `tiket` VALUES ('64', 'Modul WIfi belum kelar', '2015-10-19 11:10:58', null, null, null, 'a', 'HD', 'TS1', '95', '2', '4', '1', '1', '1', null, null);

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
