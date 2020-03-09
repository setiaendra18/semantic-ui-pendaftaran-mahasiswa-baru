/*
Navicat MySQL Data Transfer

Source Server         : DATABASE-ENDRA
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : pmb_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-03-09 11:59:58
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
INSERT INTO `admin` VALUES ('1', 'admin', 'yogyakarta', '081343316931', 'admin', 'admin');

-- ----------------------------
-- Table structure for `jurusan`
-- ----------------------------
DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE `jurusan` (
  `id_jurusan` int(2) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jurusan
-- ----------------------------
INSERT INTO `jurusan` VALUES ('1', 'Teknik Informatika');
INSERT INTO `jurusan` VALUES ('2', 'Sistem Informasi');
INSERT INTO `jurusan` VALUES ('3', 'Manajemen Informasi');

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
INSERT INTO `pendaftar` VALUES ('UTM00001', 'Endra Setiawan', '0', '0', 'setiaendra18@gmail.com', '281343316931', 'd', 'Sleman', '1', '2', '3', 'Screenshot_5.png', '');
