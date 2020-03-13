/*
Navicat MySQL Data Transfer

Source Server         : DATABASE-ENDRA
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : pmb_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-03-13 14:33:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlpn` char(12) NOT NULL,
  `username` char(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'Indra Jaya Kusuma', 'yogyakarta', '081343316931', 'admin', 'admin');

-- ----------------------------
-- Table structure for `fakultas`
-- ----------------------------
DROP TABLE IF EXISTS `fakultas`;
CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_fakultas` varchar(255) NOT NULL,
  PRIMARY KEY (`id_fakultas`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fakultas
-- ----------------------------
INSERT INTO `fakultas` VALUES ('1', 'Teknologi Informasi dan Komunikasi');
INSERT INTO `fakultas` VALUES ('2', 'Ilmu Sosial dan Humaniora');
INSERT INTO `fakultas` VALUES ('3', 'Vokasi');

-- ----------------------------
-- Table structure for `jurusan`
-- ----------------------------
DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE `jurusan` (
  `id_jurusan` int(2) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(50) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  PRIMARY KEY (`id_jurusan`),
  KEY `key_fakultas` (`id_fakultas`),
  CONSTRAINT `key_fakultas` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jurusan
-- ----------------------------
INSERT INTO `jurusan` VALUES ('10', 'S1 - Teknik Informatika', '1');
INSERT INTO `jurusan` VALUES ('11', 'S1 - Teknologi Informasi', '1');
INSERT INTO `jurusan` VALUES ('12', 'S1 - Sistem Informasi', '1');
INSERT INTO `jurusan` VALUES ('13', 'S1 - Rekayasa Sistem Komputer', '1');
INSERT INTO `jurusan` VALUES ('14', 'S1 - Rekayasa Perangkat Lunak', '1');
INSERT INTO `jurusan` VALUES ('15', 'S1 - Hukum', '2');
INSERT INTO `jurusan` VALUES ('16', 'S1 - Manajemen', '2');
INSERT INTO `jurusan` VALUES ('17', 'D3 - Teknik Komputer', '3');
INSERT INTO `jurusan` VALUES ('18', 'D3 - Manajemen Informatika', '1');
INSERT INTO `jurusan` VALUES ('19', 'D3 - Komputerisasi Akutansi', '3');
INSERT INTO `jurusan` VALUES ('20', 'D3 - Manajemen Administrasi', '3');
INSERT INTO `jurusan` VALUES ('21', 'D3 - Sekertari', '3');

-- ----------------------------
-- Table structure for `pendaftar`
-- ----------------------------
DROP TABLE IF EXISTS `pendaftar`;
CREATE TABLE `pendaftar` (
  `id_pendaftar` char(15) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `jenis_kelamin` int(2) NOT NULL,
  `agama` int(2) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_tlpn` char(12) NOT NULL,
  `provinsi` varchar(125) NOT NULL,
  `kota` varchar(125) NOT NULL,
  `sekolah_asal` varchar(125) NOT NULL,
  `jurusan_pilihan` int(2) NOT NULL,
  `status_pendaftaran` int(2) DEFAULT NULL,
  `foto_skhun` varchar(255) NOT NULL,
  `foto_ijazah` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pendaftar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pendaftar
-- ----------------------------
INSERT INTO `pendaftar` VALUES ('UTM00001', 'Endra Setiawan', '0', '0', 'setiaendra18@gmail.com', '281343316931', 'Yogyakarta', 'Sleman', 'SMK YAPPI WONOSARI', '10', '2', 'App Development #2.png', 'Delivery.png');
