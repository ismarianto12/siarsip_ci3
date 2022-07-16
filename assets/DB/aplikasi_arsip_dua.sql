/*
 Navicat Premium Data Transfer

 Source Server         : Lokal
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : aplikasi_arsip

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 16/07/2022 17:35:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for arsip
-- ----------------------------
DROP TABLE IF EXISTS `arsip`;
CREATE TABLE `arsip`  (
  `id_arsip` int(15) NOT NULL AUTO_INCREMENT,
  `id_jenis` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_pejabat` int(20) NULL DEFAULT NULL,
  `nama_arsip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `file_arsip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jumlah` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_satuan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lokasi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket_isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tanggal` date NULL DEFAULT NULL,
  `permision` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_arsip`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of arsip
-- ----------------------------
INSERT INTO `arsip` VALUES (1, '8', 1, 'Data Pembelian Perlengkapan', 'arsip_1576121601.pdf', '1', '1', '2', 'Yes', '2020-02-01', 'admin.user.staff');
INSERT INTO `arsip` VALUES (2, '2', 1, 'Tes', 'arsip_1580576494.jpg', '12', '6', '2', 'yes', '2020-02-02', 'admin.user');
INSERT INTO `arsip` VALUES (3, '2', 1, 'testing', 'arsip_1580583845.jpg', '12', '5', '2', 'berhasil', '2020-02-02', 'admin.user');
INSERT INTO `arsip` VALUES (4, '2', 1, 'testing', 'arsip_1580583888.jpg', '12', '5', '2', 'berhasil', '2020-02-02', 'admin.user');
INSERT INTO `arsip` VALUES (5, '13', 1, 'ABC', 'arsip_1601630642.jpg', '1', '1', '2', 'a', '2021-05-03', 'staff');
INSERT INTO `arsip` VALUES (6, '7', 1, 'sdadawd', 'arsip_1616743271.pdf', '22', '1', '2', 'sefsefes', '2021-03-26', 'admin');
INSERT INTO `arsip` VALUES (7, '7', 1, 'sdadawd', 'peng_1616743390.pdf', '22', '1', NULL, NULL, '2021-05-01', NULL);
INSERT INTO `arsip` VALUES (8, '8', 1, 'Gaji Pegawai', 'peng_1619956004.docx', '1', '1', NULL, NULL, '2021-05-02', NULL);
INSERT INTO `arsip` VALUES (9, '7', 1, 'DD', 'arsip_1620005916.pdf', '2', '1', '2', '343', '2021-05-03', 'admin.user');
INSERT INTO `arsip` VALUES (10, '7', 1, 'DD', 'arsip_1620006242.png', '2', '2', '2', 'DDD', '2021-05-03', 'admin.user');
INSERT INTO `arsip` VALUES (11, '8', 1, 'RFK', 'arsip_1620016028.gif', '1', '1', '5', 'Uji coba penyimpanan', '2021-05-03', 'admin');
INSERT INTO `arsip` VALUES (12, '8', 1, 'DD', 'arsip_1620050060.pdf', '2', '1', '3', NULL, '2021-05-03', 'admin.user');
INSERT INTO `arsip` VALUES (13, '23', 29, 'arsip coba panjang-panjang', 'arsip_1620202116.pdf', '1', '2', '9', NULL, '2021-05-05', 'admin.user.staff');
INSERT INTO `arsip` VALUES (14, '18', 1, 'DD', 'peng_1620090929.jpg', '2', '5', NULL, NULL, '2021-05-17', NULL);
INSERT INTO `arsip` VALUES (15, '24', 1, 'SPPD Nomor 214', 'arsip_1621484325.docx', '1', '1', '9', NULL, '2021-05-20', 'admin.user');

-- ----------------------------
-- Table structure for histori
-- ----------------------------
DROP TABLE IF EXISTS `histori`;
CREATE TABLE `histori`  (
  `id_histori` int(15) NOT NULL AUTO_INCREMENT,
  `id_user` int(15) NOT NULL,
  `url` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `aktivitasi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ip_address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `browser` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_histori`) USING BTREE,
  UNIQUE INDEX `id_user`(`id_histori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1442 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of histori
-- ----------------------------
INSERT INTO `histori` VALUES (1267, 1, '/dasboard?login=true', 'Akses dasboard web', '21-02-18 22:0:th', '10.63.249.212', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36');
INSERT INTO `histori` VALUES (1268, 1, '/Jenis_surat', 'Menambahkan jenis surat.', '21-02-18 22:0:th', '10.81.214.144', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36');
INSERT INTO `histori` VALUES (1269, 1, '/dasboard?login=true', 'Akses dasboard web', '21-02-22 11:0:nd', '10.37.196.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36');
INSERT INTO `histori` VALUES (1270, 1, '/arsip', 'Akses Arsip', '21-02-22 11:0:nd', '10.30.121.23', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36');
INSERT INTO `histori` VALUES (1271, 1, '/arsip', 'Akses Arsip', '21-02-22 11:0:nd', '10.5.177.43', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36');
INSERT INTO `histori` VALUES (1272, 1, '/dasboard?login=true', 'Akses dasboard web', '21-02-22 11:0:nd', '10.37.196.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36');
INSERT INTO `histori` VALUES (1273, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-06 18:0:th', '10.41.173.187', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1274, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-06 18:0:th', '10.182.117.232', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1275, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-06 18:0:th', '10.95.191.28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1276, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-06 18:0:th', '10.93.170.169', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1277, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-06 18:0:th', '10.29.126.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1278, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-06 18:0:th', '10.29.126.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1279, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-06 18:0:th', '10.29.126.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1280, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-06 18:0:th', '10.5.233.91', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1281, 1, '/arsip', 'Akses Arsip', '21-03-06 18:0:th', '10.93.223.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1282, 1, '/arsip/cetak/5', 'Cetak data arsip', '21-03-06 18:0:th', '10.45.153.152', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1283, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-06 18:0:th', '10.9.251.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1284, 1, '/login', 'Akses modul login .', '21-03-06 18:0:th', '10.171.230.57', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1285, 1, '/login', 'Akses modul login .', '21-03-06 18:0:th', '10.35.248.100', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1286, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-06 18:0:th', '10.81.214.144', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1287, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-07 18:0:th', '10.63.251.11', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1288, 1, '/login', 'Akses modul login .', '21-03-07 18:0:th', '10.11.215.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1289, 1, '/login/tambah', 'Menambahkan akses login', '21-03-07 18:0:th', '10.63.123.248', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1290, 1, '/M_satuan', 'Akses data satuan.', '21-03-07 18:0:th', '10.150.193.19', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1291, 1, '/m_satuan', 'Akses data satuan.', '21-03-07 18:0:th', '10.63.54.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1292, 1, '/M_satuan/tambah', 'menambahkan satuan arsip.', '21-03-07 18:0:th', '10.61.245.89', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1293, 1, '/M_satuan/tambah', 'menambahkan satuan arsip.', '21-03-07 18:0:th', '10.61.245.89', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1294, 1, '/M_satuan', 'Akses data satuan.', '21-03-07 18:0:th', '10.61.245.89', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1295, 1, '/M_satuan/tambah', 'menambahkan satuan arsip.', '21-03-07 18:0:th', '10.13.136.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1296, 1, '/Tsuratmasuk', 'Akses surat masuk.', '21-03-07 18:0:th', '10.13.136.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1297, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-07 22:0:th', '10.145.69.143', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1298, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-07 22:0:th', '10.47.238.174', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36');
INSERT INTO `histori` VALUES (1299, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-24 14:0:th', '10.5.225.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1300, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-26 09:0:th', '10.61.172.160', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1301, 1, '/M_satuan', 'Akses data satuan.', '21-03-26 09:0:th', '10.47.219.91', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1302, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-26 14:0:th', '10.63.174.10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1303, 1, '/arsip', 'Akses Arsip', '21-03-26 14:0:th', '10.7.236.68', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1304, 1, '/arsip/tambah_data', 'Menambahkan arsip', '21-03-26 14:0:th', '10.69.234.207', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1305, 1, '/Lokasi', 'Akses data lokasi.', '21-03-26 14:0:th', '10.69.234.207', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1306, 1, '/lokasi', 'Akses data lokasi.', '21-03-26 14:0:th', '10.63.243.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1307, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-26 14:0:th', '10.35.250.120', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1308, 1, '/M_satuan', 'Akses data satuan.', '21-03-26 14:0:th', '10.7.242.198', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1309, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '21-03-26 14:0:th', '10.73.248.58', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1310, 1, '/arsip/pengajuan_arsip/add', 'Akses pengajuan arsip.', '21-03-26 14:0:th', '10.91.151.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1311, 1, '/arsip/pengajuan_arsip/add', 'Akses pengajuan arsip.', '21-03-26 14:0:th', '10.73.248.58', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1312, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '21-03-26 14:0:th', '10.11.225.205', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1313, 1, '/arsip/pengajuan_arsip/edit/3', 'Akses pengajuan arsip.', '21-03-26 14:0:th', '10.136.138.43', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1314, 1, '/arsip/pengajuan_arsip/edit/3', 'Akses pengajuan arsip.', '21-03-26 14:0:th', '10.13.130.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1315, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '21-03-26 14:0:th', '10.150.193.19', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1316, 1, '/Jenis_surat', 'Menambahkan jenis surat.', '21-03-26 14:0:th', '10.9.251.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1317, 1, '/Tsuratmasuk', 'Akses surat masuk.', '21-03-26 14:0:th', '10.9.213.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1318, 1, '/login', 'Akses modul login .', '21-03-26 14:0:th', '10.45.161.126', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1319, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-26 14:0:th', '10.43.210.238', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1320, 1, '/arsip', 'Akses Arsip', '21-03-26 14:0:th', '10.109.218.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1321, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-26 14:0:th', '10.150.246.196', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1322, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-26 21:0:th', '10.5.242.205', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1323, 1, '/Lokasi', 'Akses data lokasi.', '21-03-26 21:0:th', '10.45.185.241', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1324, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-27 14:0:th', '10.35.136.190', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1325, 1, '/dasboard?login=true', 'Akses dasboard web', '21-03-28 11:0:th', '10.9.226.141', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36');
INSERT INTO `histori` VALUES (1326, 1, '/dasboard?login=true', 'Akses dasboard web', '21-04-06 23:0:th', '10.9.247.118', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36');
INSERT INTO `histori` VALUES (1327, 1, '/dasboard?login=true', 'Akses dasboard web', '21-04-09 08:0:th', '10.183.68.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36');
INSERT INTO `histori` VALUES (1328, 1, '/Tsuratmasuk', 'Akses surat masuk.', '21-04-09 08:0:th', '10.155.88.71', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36');
INSERT INTO `histori` VALUES (1329, 1, '/tsuratmasuk', 'Akses surat masuk.', '21-04-09 08:0:th', '10.45.155.176', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36');
INSERT INTO `histori` VALUES (1330, 1, '/dasboard?login=true', 'Akses dasboard web', '21-04-16 10:0:th', '10.109.140.73', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1331, 1, '/dasboard?login=true', 'Akses dasboard web', '21-04-16 10:0:th', '10.69.173.87', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1332, 1, '/dasboard?login=true', 'Akses dasboard web', '21-04-16 10:0:th', '10.37.201.92', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1333, 1, '/dasboard?login=true', 'Akses dasboard web', '21-04-16 17:0:th', '10.63.193.41', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1334, 1, '/login', 'Akses modul login .', '21-04-16 17:0:th', '10.11.198.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1335, 1, '/login/tambah', 'Menambahkan akses login', '21-04-16 17:0:th', '10.9.220.182', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1336, 1, '/Tsuratmasuk', 'Akses surat masuk.', '21-04-16 17:0:th', '10.11.198.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1337, 1, '/M_satuan', 'Akses data satuan.', '21-04-16 17:0:th', '10.63.151.139', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1338, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '21-04-16 17:0:th', '10.102.241.133', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1339, 1, '/arsip/pengajuan_arsip/edit/3', 'Akses pengajuan arsip.', '21-04-16 17:0:th', '10.102.241.133', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1340, 1, '/arsip/pengajuan_arsip/add', 'Akses pengajuan arsip.', '21-04-16 17:0:th', '10.63.23.236', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1341, 1, '/M_satuan', 'Akses data satuan.', '21-04-16 17:0:th', '10.63.23.236', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1342, 1, '/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '21-04-16 17:0:th', '10.7.196.43', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1343, 1, '/Tsuratmasuk', 'Akses surat masuk.', '21-04-16 17:0:th', '10.16.178.50', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1344, 1, '/Jenis_surat', 'Menambahkan jenis surat.', '21-04-16 17:0:th', '10.9.216.41', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1345, 1, '/Jenis_surat', 'Menambahkan jenis surat.', '21-04-16 17:0:th', '10.9.216.41', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36');
INSERT INTO `histori` VALUES (1346, 1, '/dasboard?login=true', 'Akses dasboard web', '21-05-01 09:0:st', '10.109.166.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1347, 1, '/dasboard?login=true', 'Akses dasboard web', '21-05-01 09:0:st', '10.31.60.241', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1348, 1, '/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 09:0:st', '10.81.232.203', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1349, 1, '/siarsip/dasboard?login=true', 'Akses dasboard web', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1350, 1, '/dasboard?login=true', 'Akses dasboard web', '21-05-01 10:0:st', '10.31.87.172', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1351, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1352, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1353, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1354, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1355, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1356, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1357, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1358, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1359, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1360, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1361, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1362, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1363, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1364, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1365, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1366, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1367, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1368, 1, '/siarsip/dasboard?login=true', 'Akses dasboard web', '21-05-01 10:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1369, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 11:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1370, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1371, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1372, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1373, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1374, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1375, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1376, 1, '/siarsip/dasboard?login=true', 'Akses dasboard web', '21-05-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1377, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1378, 1, '/siarsip/tsuratmasuk', 'Akses surat masuk.', '21-05-01 12:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1379, 1, '/siarsip/tsuratmasuk', 'Akses surat masuk.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1380, 1, '/siarsip/arsip', 'Akses Arsip', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1381, 1, '/siarsip/Arsip/insert_pengajuan', 'Menambahkan pegajuan arsip', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1382, 1, '/siarsip/Jenis_surat', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1383, 1, '/siarsip/Jenis_surat', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1384, 1, '/siarsip/Jenis_surat', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1385, 1, '/siarsip/Jenis_surat', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1386, 1, '/siarsip/Jenis_surat', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1387, 1, '/siarsip/Jenis_surat', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1388, 1, '/siarsip/Jenis_surat', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1389, 1, '/siarsip/Jenis_surat', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1390, 1, '/siarsip/Jenis_surat', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1391, 1, '/siarsip/dasboard?login=true', 'Akses dasboard web', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1392, 1, '/siarsip/arsip', 'Akses Arsip', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1393, 1, '/siarsip/Jenis_surat', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1394, 1, '/siarsip/Jenis_surat', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1395, 1, '/siarsip/Jenis_surat', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1396, 1, '/siarsip/Jenis_surat', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1397, 1, '/siarsip/jenis_surat/edit/5', 'Edit jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1398, 1, '/siarsip/Jenis_surat', 'Menambahkan JENIS_SURAT.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1399, 1, '/siarsip/Jenis_surat', 'Menambahkan JENIS_SURAT.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1400, 1, '/siarsip/Jenis_surat', 'Menambahkan JENIS_SURAT.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1401, 1, '/siarsip/jenis_surat/edit/5', 'Edit jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1402, 1, '/siarsip/JENIS_SURAT', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1403, 1, '/siarsip/JENIS_SURAT', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1404, 1, '/siarsip/JENIS_SURAT', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1405, 1, '/siarsip/JENIS_SURAT', 'Menambahkan jenis surat.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1406, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1407, 1, '/siarsip/dasboard?login=true', 'Akses dasboard web', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1408, 1, '/siarsip/dasboard?login=true', 'Akses dasboard web', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1409, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1410, 1, '/siarsip/tsuratmasuk/tambah_data', 'Menambahkan surat masuk.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1411, 1, '/siarsip/tsuratmasuk/tambah_data', 'Menambahkan surat masuk.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1412, 1, '/siarsip/tsuratmasuk/tambah_data', 'Menambahkan surat masuk.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1413, 1, '/siarsip/tsuratmasuk/tambah_data', 'Menambahkan surat masuk.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1414, 1, '/siarsip/dasboard?login=true', 'Akses dasboard web', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1415, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 13:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1416, 1, '/siarsip/dasboard?login=true', 'Akses dasboard web', '21-05-01 14:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1417, 1, '/siarsip/arsip', 'Akses Arsip', '21-05-01 14:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1418, 1, '/siarsip/dasboard?login=true', 'Akses dasboard web', '21-05-01 14:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1419, 1, '/siarsip/Lokasi', 'Akses data lokasi.', '21-05-01 14:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1420, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 14:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1421, 1, '/siarsip/Jenis_surat', 'Menambahkan jenis surat.', '21-05-01 14:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1422, 1, '/siarsip/jenis_surat/tambah_data', 'Tambah jenis surat.', '21-05-01 14:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1423, 1, '/siarsip/jenis_surat', 'Menambahkan jenis surat.', '21-05-01 14:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1424, 1, '/siarsip/M_satuan', 'Akses data satuan.', '21-05-01 14:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1425, 1, '/siarsip/Jenis_surat', 'Menambahkan jenis surat.', '21-05-01 14:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1426, 1, '/siarsip/jenis_surat/tambah_data', 'Tambah jenis surat.', '21-05-01 14:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1427, 1, '/siarsip/jenis_surat', 'Menambahkan jenis surat.', '21-05-01 14:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1428, 1, '/dasboard?login=true', 'Akses dasboard web', '21-05-01 15:0:st', '10.41.198.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1429, 1, '/dasboard?login=true', 'Akses dasboard web', '21-05-01 15:0:st', '10.81.170.215', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1430, 1, '/siarsip/Tsuratmasuk', 'Akses surat masuk.', '21-05-01 16:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1431, 1, '/siarsip/arsip', 'Akses Arsip', '21-05-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1432, 1, '/siarsip/arsip', 'Akses Arsip', '21-05-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1433, 1, '/siarsip/dasboard?login=true', 'Akses dasboard web', '21-05-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1434, 1, '/siarsip/dasboard?login=true', 'Akses dasboard web', '21-05-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1435, 1, '/siarsip/dasboard?login=true', 'Akses dasboard web', '21-05-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1436, 1, '/siarsip/dasboard?login=true', 'Akses dasboard web', '21-05-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1437, 1, '/siarsip/dasboard?login=true', 'Akses dasboard web', '21-05-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1438, 1, '/siarsip/dasboard?login=true', 'Akses dasboard web', '21-05-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1439, 1, '/siarsip/arsip/pengajuan_arsip', 'Akses pengajuan arsip.', '21-05-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1440, 1, '/siarsip/arsip/pengajuan_arsip/add', 'Akses pengajuan arsip.', '21-05-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');
INSERT INTO `histori` VALUES (1441, 1, '/siarsip/Lokasi', 'Akses data lokasi.', '21-05-01 17:0:st', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36');

-- ----------------------------
-- Table structure for instansi
-- ----------------------------
DROP TABLE IF EXISTS `instansi`;
CREATE TABLE `instansi`  (
  `nama_instansi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_lengkap` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telp` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `informasi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan_situs` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fax` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `npwp` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `logo` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jabatan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nip` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_pejabat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `favicon` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of instansi
-- ----------------------------
INSERT INTO `instansi` VALUES ('Sekretriat Daerah Kota Sabang', 'JL. DIPONEGORO NOMOR 20 SABANG-ACEH', '0652 21040', 'Selamat datang di sistem informasi arsip sistem ini bertujuan untuk mempermudah dalam pengarsipan data yang ada pada instansi .', '', '0652 22202', '-', '1620725181logo.jpg', 'SEKRETARIS DAERAH KOTA SABANG ASISTEN ADMINISTRASI UMUM', '-', 'FIRDAUS, S.Pd.I', '1620725181logo1.jpg');

-- ----------------------------
-- Table structure for jenis_arsip
-- ----------------------------
DROP TABLE IF EXISTS `jenis_arsip`;
CREATE TABLE `jenis_arsip`  (
  `id_jenis` int(15) NOT NULL AUTO_INCREMENT,
  `jenis_arsip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_id` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id_jenis`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jenis_arsip
-- ----------------------------
INSERT INTO `jenis_arsip` VALUES (7, 'Arsip Barang dan Jasa.', '1', '2020-02-01');
INSERT INTO `jenis_arsip` VALUES (8, 'Arsip Bendahara', '1', '2019-11-08');
INSERT INTO `jenis_arsip` VALUES (13, 'Arsip Surat Keluar', '1', '2020-11-26');
INSERT INTO `jenis_arsip` VALUES (14, 'Arsip Surat Masuk Internal', '1', '2020-11-26');
INSERT INTO `jenis_arsip` VALUES (15, 'Arsip Surat Masuk Eksternal', '1', '2020-11-26');
INSERT INTO `jenis_arsip` VALUES (16, 'Arsip Surat Keputusan Rektor', '1', '2021-02-09');
INSERT INTO `jenis_arsip` VALUES (17, 'SPPD', '1', '2021-05-03');
INSERT INTO `jenis_arsip` VALUES (20, 'asda', '1', '2021-05-03');
INSERT INTO `jenis_arsip` VALUES (23, 'Surat Jalan', '29', '2021-05-04');
INSERT INTO `jenis_arsip` VALUES (24, 'Bendahara Pengeluaran', '30', '2021-05-18');

-- ----------------------------
-- Table structure for jenis_surat
-- ----------------------------
DROP TABLE IF EXISTS `jenis_surat`;
CREATE TABLE `jenis_surat`  (
  `id_jenis` int(20) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_user` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_surat` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_create` date NULL DEFAULT NULL,
  `parameter` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenis`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jenis_surat
-- ----------------------------
INSERT INTO `jenis_surat` VALUES (9, 'SPT~Walikota', '1', 'SPT', NULL, 'walikota');
INSERT INTO `jenis_surat` VALUES (10, '\r\nSPT~Wakil Walikota ', NULL, 'SPT', NULL, 'wawako');
INSERT INTO `jenis_surat` VALUES (12, 'SPPD~Luar Kota', '1', 'SPPD', '2022-07-14', 'luarkota');
INSERT INTO `jenis_surat` VALUES (13, 'SPPD~Dalam Kota', '1', 'SPPD', '2022-07-13', 'dalamkota');
INSERT INTO `jenis_surat` VALUES (15, 'Surat keputusans', '1', 'KP011', '2022-04-11', NULL);

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login`  (
  `id_user` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` enum('admin','user','staff','') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `log` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `active` enum('y','n') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES (1, 'admin', '202cb962ac59075b964b07152d234b70', 'DR. KH. AH. MANSUR, SE, M.Pd.I', 'admin', 'foto1615031881.jpg', 'ahmansur75@gmail.com', '2021-03-06 18:58:01', 'y');
INSERT INTO `login` VALUES (23, 'Tatausaha', '202cb962ac59075b964b07152d234b70', 'Susi Kusmawaningsih', 'user', 'foto1606402444.jpg', 'ahmansur75@gmail.com', NULL, 'y');
INSERT INTO `login` VALUES (24, 'admin12', '202cb962ac59075b964b07152d234b70', '123', 'admin', 'foto1620061490.jpg', 'ysmariki@yahoo.com', NULL, 'y');
INSERT INTO `login` VALUES (25, 'admin67', '202cb962ac59075b964b07152d234b70', '123', 'admin', 'foto1620061494.jpg', 'ysmariki@yahoo.com', '2021-05-04 00:35:08', 'y');
INSERT INTO `login` VALUES (26, 'kacang', '202cb962ac59075b964b07152d234b70', '123', 'admin', 'foto1620061862.jpg', 'ysmariki@yahoo.com', NULL, 'y');
INSERT INTO `login` VALUES (29, 'guegw10', 'e10adc3949ba59abbe56e057f20f883e', 'Guntur Wijaya, A.Md', 'user', 'foto1620062866.jpg', 'guntur.wijay@gmail.com', '2021-05-30 00:52:25', 'y');
INSERT INTO `login` VALUES (30, 'rahmiati', 'e10adc3949ba59abbe56e057f20f883e', 'kasubbag keuangan', 'admin', 'foto1621311379.png', 'wijayg@yahoo.co.id', NULL, 'y');

-- ----------------------------
-- Table structure for lokasi
-- ----------------------------
DROP TABLE IF EXISTS `lokasi`;
CREATE TABLE `lokasi`  (
  `id_lokasi` int(15) NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_lokasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of lokasi
-- ----------------------------
INSERT INTO `lokasi` VALUES (2, 'Ruang Kakankemenag', '2020-02-01');
INSERT INTO `lokasi` VALUES (3, 'Ruang Arsip Kemenag Kota Madiun.', '2020-02-01');
INSERT INTO `lokasi` VALUES (4, 'Ruang Arsip Pendidikan Madrasah', '2019-11-08');
INSERT INTO `lokasi` VALUES (5, 'Ruang Arsip Bendahara,', '2021-05-03');
INSERT INTO `lokasi` VALUES (6, 'Ruang Arsip HAJI', '2019-11-08');
INSERT INTO `lokasi` VALUES (7, 'dgdgd', '2021-03-26');
INSERT INTO `lokasi` VALUES (8, 'sd', '2021-05-01');
INSERT INTO `lokasi` VALUES (9, 'Ruang Kasubbag Keuangan', '2021-05-03');

-- ----------------------------
-- Table structure for m_satuan
-- ----------------------------
DROP TABLE IF EXISTS `m_satuan`;
CREATE TABLE `m_satuan`  (
  `id_satuan` int(20) NOT NULL AUTO_INCREMENT,
  `nama_satuan` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_satuan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of m_satuan
-- ----------------------------
INSERT INTO `m_satuan` VALUES (1, 'Bendel', 'Bendel');
INSERT INTO `m_satuan` VALUES (2, 'Lembar', 'Lembar');
INSERT INTO `m_satuan` VALUES (3, 'Map', 'Map');
INSERT INTO `m_satuan` VALUES (4, 'Dus', 'Lemari Bendahara 1');
INSERT INTO `m_satuan` VALUES (5, 'Pack', 'Pack');
INSERT INTO `m_satuan` VALUES (6, 'Outner', 'Outner');
INSERT INTO `m_satuan` VALUES (8, 'Box', 'Banjar 2');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id_menu` int(5) NOT NULL AUTO_INCREMENT,
  `id_parent` int(5) NOT NULL DEFAULT 0,
  `nama_menu` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `icon` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `link` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `aktif` enum('Ya','Tidak') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Ya',
  `urutan` int(3) NOT NULL,
  `position` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_menu`) USING BTREE,
  INDEX `id_menu`(`id_menu`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 75 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (23, 50, 'Data Jenis  Arsip', 'fa fa fa-bullhorn', 'jenis_arsip', 'Ya', 9, 'Bottom', 'admin.user');
INSERT INTO `menu` VALUES (24, 50, 'Arsip  ', 'fa fa fa-arrow-right', 'arsip', 'Ya', 10, 'Bottom', 'admin.user');
INSERT INTO `menu` VALUES (25, 26, 'User', 'sidenav-icon icon icon-works', 'login', 'Ya', 22, 'Bottom', 'admin');
INSERT INTO `menu` VALUES (26, 0, 'Setting Aplikasi', 'fa fa fa-wrench', '#', 'Ya', 21, 'Bottom', 'admin.user');
INSERT INTO `menu` VALUES (27, 26, 'Menu Web', 'sidenav-icon icon icon-works', 'setting/menu', 'Ya', 23, 'Bottom', 'admin');
INSERT INTO `menu` VALUES (28, 26, 'Identitas Instansi', 'sidenav-icon icon icon-works', 'instansi', 'Ya', 24, 'Bottom', 'admin');
INSERT INTO `menu` VALUES (43, 50, 'Satuan', 'sidenav-icon icon icon-works', 'M_satuan', 'Ya', 7, 'Bottom', 'admin.user');
INSERT INTO `menu` VALUES (42, 50, 'Lokasi', 'sidenav-icon icon icon-works', 'Lokasi', 'Ya', 11, 'Bottom', 'admin.user');
INSERT INTO `menu` VALUES (50, 0, 'Dokumentasi Arsip', 'fa fa fa-folder-open-o', '#', 'Ya', 6, 'Bottom', 'admin.user');
INSERT INTO `menu` VALUES (49, 50, 'Pengajuan arsip', 'sidenav-icon icon icon-works', 'arsip/pengajuan_arsip', 'Ya', 8, 'Bottom', 'admin.user');
INSERT INTO `menu` VALUES (58, 53, 'Jenis surat', '', 'Jenis_surat', 'Ya', 3, 'Bottom', 'admin');
INSERT INTO `menu` VALUES (53, 0, ' Master Arsip', '', '#', 'Ya', 1, 'Bottom', 'admin');
INSERT INTO `menu` VALUES (54, 0, 'Surat Keluar', '', 'tbl_surat_keluar', 'Ya', 5, 'Bottom', 'admin');
INSERT INTO `menu` VALUES (55, 53, 'Surat Masuk', '', 'Tsuratmasuk', 'Ya', 4, 'Bottom', 'admin');
INSERT INTO `menu` VALUES (56, 70, 'Laporan surat', 'fa fa fa-file-o', 'Laporan_surat', 'Ya', 18, 'Bottom', 'admin.user');
INSERT INTO `menu` VALUES (60, 70, 'Surat Masuk', 'sidenav-icon icon icon-works', 'laporan_surat/surat_masuk', 'Ya', 17, 'Bottom', 'admin.user');
INSERT INTO `menu` VALUES (61, 70, 'Surat Keluar', 'sidenav-icon icon icon-works', 'laporan_surat/surat_keluar', 'Ya', 16, 'Bottom', 'admin.user');
INSERT INTO `menu` VALUES (62, 0, 'Surat Perintah dinas', '', '/sppd', 'Ya', 13, 'Bottom', 'admin');
INSERT INTO `menu` VALUES (64, 0, 'Master ', 'fa fa fa-check', '#', 'Ya', 19, 'Bottom', 'admin.user');
INSERT INTO `menu` VALUES (65, 64, 'Data Pegawai', 'sidenav-icon icon icon-works', 'pegawai', 'Ya', 20, 'Bottom', 'admin.user');
INSERT INTO `menu` VALUES (67, 70, 'Laporan sppd', 'fa fa fa-heart', 'Laporan_sppd', 'Ya', 15, 'Bottom', 'admin.user');
INSERT INTO `menu` VALUES (68, 53, 'Histori Disposisi Surat', '', 'Tdisposisi', 'Ya', 2, 'Bottom', 'admin');
INSERT INTO `menu` VALUES (70, 0, 'Report', '', '#', 'Ya', 14, 'Bottom', 'admin');
INSERT INTO `menu` VALUES (74, 0, 'Dinas (satuan kerja)', 'fa fa-list', 'Sikd_satker', 'Ya', 25, 'Bottom', 'admin');

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sikd_satker_id` int(14) NULL DEFAULT NULL,
  `nip` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_hp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_lahir` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `golongan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `golongan_tanggal` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jabatan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jabatan_tanggal` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kerja_tahun` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kerja_bulan` int(50) NULL DEFAULT NULL,
  `latihan_jabatan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `latihan_jabatan_tanggal` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `latihan_jabatan_jam` int(50) NULL DEFAULT 0,
  `pendidikan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pendidikan_lulus` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pendidikan_ijazah` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `catatan_mutasi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username_update` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `datetime_insert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `datetime_update` timestamp NULL DEFAULT NULL,
  `status_deleted` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '1',
  `pangkat` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nip`(`nip`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 83 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
INSERT INTO `pegawai` VALUES (1, NULL, '195802281986012002', 'ALDIAZ NASHER ARIGHI', '-', 'Singosari Malang Indonesia', '0000-00-00', 'Indonesia', '12', '2011-04-05', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:46', '2015-11-03 03:05:42', '1', NULL);
INSERT INTO `pegawai` VALUES (2, NULL, '1958060519860811001', 'MIRZA RAMADHANY', '-', 'Singosari Malang Indonesia', '1958-06-05', 'Indonesia', '15', '2009-10-27', 'Kepala Dinas', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', '', '', NULL, 'admin', '2015-05-30 19:12:46', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (3, NULL, '195807171980031014', 'ADI ROZAQ AL HA YU', '-', 'Singosari Malang Indonesia', '1958-07-17', 'Indonesia', '9', '2013-11-14', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:46', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (4, NULL, '195807171980032008', 'ADIKA SETIA BRATA', '-', 'Singosari Malang Indonesia', '1958-07-17', 'Indonesia', '10', '2001-03-29', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:46', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (5, NULL, '195808281986011003', 'ALVIN CANDRA WIJAYA', '-', 'Singosari Malang Indonesia', '1958-08-05', 'Indonesia', '13', '2015-09-30', 'Kabid Konservasi dan Rehabilitasi', '2009-02-26', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:46', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (6, NULL, '195809281980032008', 'ANDIKA SETYA RISWANTO', '-', 'Singosari Malang Indonesia', '1958-09-28', 'Indonesia', '10', '2001-03-29', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:46', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (7, NULL, '195810291986081001', 'ANDRE GINO KURNIAWAN', '-', 'Singosari Malang Indonesia', '1958-10-29', 'Indonesia', '7', '0000-00-00', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:46', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (8, NULL, '195811141986031005', 'ARGA SEPTANDIKA PUTRA', '-', 'Singosari Malang Indonesia', '1988-11-23', 'Indonesia', '11', '2010-07-08', 'Penyuluh kehutanan penyelia', '2010-04-01', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (9, NULL, '195812241992111001', 'ok1', '-', 'Singosari Malang Indonesia', '1958-12-14', 'Indonesia', '13', '2012-09-20', 'Sekretaris', '2014-06-12', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:06:27', '1', NULL);
INSERT INTO `pegawai` VALUES (10, NULL, '195812291982122003', 'ok2', '-', 'Singosari Malang Indonesia', '1958-12-29', 'Indonesia', '10', '2003-04-08', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (11, NULL, '195905071990031004', 'ok13', '-', 'Singosari Malang Indonesia', '1959-05-02', 'Indonesia', '8', '2010-05-01', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (12, NULL, '195909111983032008', 'ok4', '-', 'Singosari Malang Indonesia', '1959-09-11', 'Indonesia', '12', '2005-08-24', 'Kasi Monitoring dan Pelaporan', '2009-02-26', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (13, NULL, '195912251990031004', 'DANANG DAIFULLAH DINAR MAUDY', '-', 'Singosari Malang Indonesia', '1959-12-25', 'Indonesia', '8', '0000-00-00', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (14, NULL, '196001011987091001', 'DENNY\'S ALFIAN', '-', 'Singosari Malang Indonesia', '0000-00-00', 'Indonesia', '11', '2013-09-17', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (15, NULL, '196003051987082001', 'DIMAS AJI PRAKOSA', '-', 'Singosari Malang Indonesia', '1960-03-05', 'Indonesia', '13', '2013-09-30', 'Kasi Him Pengamatan dan Pengendalian OPT', '2013-01-12', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (16, NULL, '196003271986032003', 'FARID NANDA LUTHFIANTO', '-', 'Singosari Malang Indonesia', '1960-03-27', 'Indonesia', '14', '2005-07-29', 'Kabid Binus dan Kelembagaan', '2009-02-26', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (17, NULL, '196004291990021002', 'FIRMAN MAULANA JA\'FAR', '-', 'Singosari Malang Indonesia', '1980-04-29', 'Indonesia', '10', '2010-05-01', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (18, NULL, '196005271987081001', 'GALIH RAMADHAN', '-', 'Singosari Malang Indonesia', '1993-01-04', 'Indonesia', '12', '2012-11-05', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (19, NULL, '196006071992031005', 'ok5', '-', 'Singosari Malang Indonesia', '0000-00-00', 'Indonesia', '13', '2014-04-01', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (20, NULL, '196109201992032004', 'ok6', '-', 'Singosari Malang Indonesia', '0000-00-00', 'Indonesia', '10', '2009-09-30', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (21, NULL, '196110151987081001', 'LERENOP SULAKSONO', '-', 'Singosari Malang Indonesia', '0000-00-00', 'Indonesia', '9', '2005-10-13', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (22, NULL, '196110302007011001', 'ok7', '-', 'Singosari Malang Indonesia', '1981-10-30', 'Indonesia', '6', '2011-03-10', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:48', '1', NULL);
INSERT INTO `pegawai` VALUES (23, NULL, '196201182007011002', 'MAULANA NUR HIDAYATULLAH', '-', 'Singosari Malang Indonesia', '1962-01-18', 'Indonesia', '6', '2011-03-10', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:49', '1', NULL);
INSERT INTO `pegawai` VALUES (24, NULL, '196212301980031005', 'DHANY', '-', 'Singosari Malang Indonesia', '0000-00-00', 'Indonesia', '5', '1996-02-05', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:49', '1', NULL);
INSERT INTO `pegawai` VALUES (25, NULL, '196303061992031005', 'ok8', '-', 'Singosari Malang Indonesia', '1963-03-06', 'Indonesia', '11', '0000-00-00', 'Kasi Sarana dan Prasarana Perlindungan', '2013-06-01', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:49', '1', NULL);
INSERT INTO `pegawai` VALUES (26, NULL, '196303181988032009', 'RHESAL MAHADYANTO', '-', 'Singosari Malang Indonesia', '1989-04-24', 'Indonesia', '12', '2012-11-05', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:49', '1', NULL);
INSERT INTO `pegawai` VALUES (27, NULL, '196311101998022002', 'ok9', '-', 'Singosari Malang Indonesia', '1963-11-10', 'Indonesia', '9', '2014-04-14', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:47', '2015-11-03 03:05:49', '1', NULL);
INSERT INTO `pegawai` VALUES (28, NULL, '196401042007011010', 'ok10', '-', 'Singosari Malang Indonesia', '1966-01-04', 'Indonesia', '4', '2011-03-10', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:05:49', '1', NULL);
INSERT INTO `pegawai` VALUES (29, NULL, '196404241989032010', 'ok11', '-', 'Singosari Malang Indonesia', '1964-04-24', 'Indonesia', '10', '2009-04-01', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:05:49', '1', NULL);
INSERT INTO `pegawai` VALUES (30, NULL, '196408191987081002', 'ok12', '-', 'Singosari Malang Indonesia', '0000-00-00', 'Indonesia', '10', '2010-05-24', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:05:49', '1', NULL);
INSERT INTO `pegawai` VALUES (31, NULL, '196410011994021002', 'RIZKY BA YU VERNANDO', '-', 'Singosari Malang Indonesia', '1964-10-01', 'Indonesia', '11', '2014-08-27', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:05:49', '1', NULL);
INSERT INTO `pegawai` VALUES (32, NULL, '196412231994031001', 'ok13', '-', 'Singosari Malang Indonesia', '2010-12-29', 'Indonesia', '10', '2010-05-24', 'Penyuluh Kehutanan Pelaksana lanjutan', '2010-04-01', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:05:49', '1', NULL);
INSERT INTO `pegawai` VALUES (33, NULL, '196701271995022001', 'ok14', '-', 'Singosari Malang Indonesia', '1967-01-27', 'Indonesia', '13', '2009-09-30', 'Kabid Produksi', '2011-06-23', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:05:49', '1', NULL);
INSERT INTO `pegawai` VALUES (34, NULL, '196702041998031003', 'ASRORI HASAN', '-', 'Singosari Malang Indonesia', '0000-00-00', 'Indonesia', '11', '2013-09-17', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:06:35', '1', NULL);
INSERT INTO `pegawai` VALUES (35, NULL, '196703081993032008', 'ok15', '-', 'Singosari Malang Indonesia', '1967-03-08', 'Indonesia', '13', '2012-11-27', 'Kasubbag Keuangan DISHUTBUN', '2010-07-29', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:06:40', '1', NULL);
INSERT INTO `pegawai` VALUES (36, NULL, '196809292008011004', 'KADARMAN', '-', 'Singosari Malang Indonesia', '1968-09-29', 'Indonesia', '10', '0001-12-11', 'Kasi Pembina SDM', '2013-10-05', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:06:49', '1', NULL);
INSERT INTO `pegawai` VALUES (37, NULL, '196809292008011004', 'MUHAMMAD ALFADIN', '-', 'Singosari Malang Indonesia', '1963-02-06', 'Indonesia', '9', '2008-04-01', 'Staff Disbun', '2000-04-01', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:06:54', '1', NULL);
INSERT INTO `pegawai` VALUES (38, NULL, '196810302000032004', 'MUHAMMAD ULIL ALBAB', '-', 'Singosari Malang Indonesia', '0000-00-00', 'Indonesia', '', '0000-00-00', 'Penyuluh Kehutanan Muda', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:08:20', '1', NULL);
INSERT INTO `pegawai` VALUES (39, NULL, '196901311998031007', 'MUHAMMAD APHEP ROSYADI', '-', 'Singosari Malang Indonesia', '1962-01-31', 'Indonesia', '13', '2014-10-01', 'Kabid Perlindungan', '2013-06-01', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:08:17', '1', NULL);
INSERT INTO `pegawai` VALUES (40, NULL, '196902101998032004', 'VIENDY NURUL KUSUMAWAN', '-', 'Singosari Malang Indonesia', '0000-00-00', 'Indonesia', '11', '0000-00-00', 'Penyuluh Kehutanan', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:07:53', '1', NULL);
INSERT INTO `pegawai` VALUES (41, NULL, '196904261997031002', 'SUMPIL', '-', 'Singosari Malang Indonesia', '1969-04-26', 'Indonesia', '13', '2013-03-28', 'Kasi Bahan Tanaman, Pupuk, Alat dan Mesin', '2009-02-26', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:08:41', '1', NULL);
INSERT INTO `pegawai` VALUES (42, NULL, '196906141998031010', 'MUHAMMAD NOVAL', '-', 'Singosari Malang Indonesia', '0000-00-00', 'Indonesia', '11', '2014-10-01', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:08:48', '1', NULL);
INSERT INTO `pegawai` VALUES (43, NULL, '196907191998031004', 'LAREDO', '-', 'Singosari Malang Indonesia', '0000-00-00', 'Indonesia', '11', '2014-10-01', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:08:57', '1', NULL);
INSERT INTO `pegawai` VALUES (44, NULL, '196909271998031006', 'RENDY', '-', 'Singosari Malang Indonesia', '1969-09-27', 'Indonesia', '', '0000-00-00', 'Penyuluh Kehutanan Muda', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:09:16', '1', NULL);
INSERT INTO `pegawai` VALUES (45, NULL, '197005022000032005', 'CHOLIK', '-', 'Singosari Malang Indonesia', '1989-11-10', 'Indonesia', '10', '0000-00-00', 'Penyuluh Kehutanan pertama', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:09:18', '1', NULL);
INSERT INTO `pegawai` VALUES (46, NULL, '197006011994031011', 'ARIF', '-', 'Singosari Malang Indonesia', '1970-06-01', 'Indonesia', '11', '2012-04-17', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:09:27', '1', NULL);
INSERT INTO `pegawai` VALUES (47, NULL, '197006281998031005', 'ARIF TAHU', '-', 'Singosari Malang Indonesia', '0000-00-00', 'Indonesia', '11', '2014-10-10', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:48', '2015-11-03 03:09:29', '1', NULL);
INSERT INTO `pegawai` VALUES (48, NULL, '197011262006042004', 'ADITH', '-', 'Singosari Malang Indonesia', '1985-08-06', 'Indonesia', '11', '0000-00-00', 'Penyuluh Kehutanan', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:09:51', '1', NULL);
INSERT INTO `pegawai` VALUES (49, NULL, '197022061998032007', 'FACHRUDIN', '-', 'Singosari Malang Indonesia', '1970-06-22', 'Indonesia', '', '0000-00-00', 'PENYULUH KEHUTANAN MUDA', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:09:59', '1', NULL);
INSERT INTO `pegawai` VALUES (50, NULL, '197106091988031009', 'ENAL', '-', 'Singosari Malang Indonesia', '1985-12-05', 'Indonesia', '11', '2014-10-01', 'Penyuluh Kehutanan Muda', '2014-08-01', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:10:15', '1', NULL);
INSERT INTO `pegawai` VALUES (51, NULL, '197106161998031006', 'RADITIYA', '-', 'Singosari Malang Indonesia', '1971-06-16', 'Indonesia', '', '0000-00-00', 'Penyuluh Kehutanan Muda', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:10:22', '1', NULL);
INSERT INTO `pegawai` VALUES (52, NULL, '197209172000031005', 'PATRICK', '-', 'Singosari Malang Indonesia', '1975-09-17', 'Indonesia', '12', '2012-05-21', 'Kasi Rehabilitasi Hutan dan Lahan', '2011-09-22', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:10:25', '1', NULL);
INSERT INTO `pegawai` VALUES (53, NULL, '197301081998031009', 'SANIY', '-', 'Singosari Malang Indonesia', '1973-01-08', 'Indonesia', '13', '2012-03-31', 'Kasi Binus dan Kelembagaan', '2011-09-22', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:10:53', '1', NULL);
INSERT INTO `pegawai` VALUES (54, NULL, '197307052008011006', 'ROHMAN', '-', 'Singosari Malang Indonesia', '1973-07-05', 'Indonesia', '2', '2014-01-01', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:11:07', '1', NULL);
INSERT INTO `pegawai` VALUES (55, NULL, '197410182006011005', 'AHMAD ROHMAN', '-', 'Singosari Malang Indonesia', '1971-10-18', 'Indonesia', '11', '2013-04-16', 'Kasi Perlindungan Hutan dan Mata Air', '2013-06-01', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:11:21', '1', NULL);
INSERT INTO `pegawai` VALUES (56, NULL, '197501252006041006', 'REZA KURNIAWAN', '-', 'Singosari Malang Indonesia', '0000-00-00', 'Indonesia', '8', '2014-04-01', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:12:23', '1', NULL);
INSERT INTO `pegawai` VALUES (57, NULL, '197506052007011023', 'ZAINAL', '-', 'Singosari Malang Indonesia', '1975-06-05', 'Indonesia', '6', '2011-03-10', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:13:05', '1', NULL);
INSERT INTO `pegawai` VALUES (58, NULL, '197508102006041016', 'ALIEF', '-', 'Singosari Malang Indonesia', '1975-08-10', 'Indonesia', '11', '2014-04-01', 'Kasubbag Program', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:13:02', '1', NULL);
INSERT INTO `pegawai` VALUES (59, NULL, '19751117200312003', 'ALIFIN', '-', 'Singosari Malang Indonesia', '1975-11-17', 'Indonesia', '11', '2012-01-17', 'Kasi Pengembangan Tanaman dan Aneka Usaha', '2012-01-12', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:13:17', '1', NULL);
INSERT INTO `pegawai` VALUES (60, NULL, '197703072003122008', 'YOGI', '-', 'Singosari Malang Indonesia', '1977-03-07', 'Indonesia', '11', '2012-04-17', 'Kasubag Umum dan Kepegawaian', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:13:19', '1', NULL);
INSERT INTO `pegawai` VALUES (61, NULL, '197712272006041010', 'DIMAS', '-', 'Singosari Malang Indonesia', '1985-03-30', 'Indonesia', '11', '2014-10-01', 'Penyuluh Kehutanan Muda', '2014-08-01', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:13:28', '1', NULL);
INSERT INTO `pegawai` VALUES (62, NULL, '197807052006041021', 'FAUDJI', '-', 'Singosari Malang Indonesia', '1978-07-05', 'Indonesia', '11', '2012-10-08', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:13:30', '1', NULL);
INSERT INTO `pegawai` VALUES (63, NULL, '197808072011011009', 'REZA FIRMANSYAH BUDIONO', '-', 'Singosari Malang Indonesia', '1985-05-17', 'Indonesia', '9', '0000-00-00', 'Penyuluh Kehutanan', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:13:58', '1', NULL);
INSERT INTO `pegawai` VALUES (64, NULL, '197912072000031001', 'MIFTA AGUG', '-', 'Singosari Malang Indonesia', '1979-12-07', 'Indonesia', '10', '2011-10-01', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:14:06', '1', NULL);
INSERT INTO `pegawai` VALUES (65, NULL, '198101102005012012', 'AGUNG RAMADHAN', '-', 'Singosari Malang Indonesia', '1981-01-10', 'Indonesia', '11', '2013-04-16', 'Staf Sub Bagian Program ', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:14:13', '1', NULL);
INSERT INTO `pegawai` VALUES (66, NULL, '198103302009031004', 'RISQI ARIS', '-', 'Singosari Malang Indonesia', '1981-03-30', 'Indonesia', '8', '2013-04-16', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:14:30', '1', NULL);
INSERT INTO `pegawai` VALUES (67, NULL, '198104202010011015', 'PUNKY PRIYO', '-', 'Singosari Malang Indonesia', '1990-03-29', 'Indonesia', '8', '2014-03-13', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:14:50', '1', NULL);
INSERT INTO `pegawai` VALUES (68, NULL, '198111062010011001', 'RICHARD', '-', 'Singosari Malang Indonesia', '1981-11-06', 'Indonesia', '6', '2014-03-13', 'Staff', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:49', '2015-11-03 03:15:21', '1', NULL);
INSERT INTO `pegawai` VALUES (69, NULL, '198203202004012010', 'THOMAS', '-', 'Singosari Malang Indonesia', '0000-00-00', 'Indonesia', '10', '2013-09-17', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:50', '2015-11-03 03:15:39', '1', NULL);
INSERT INTO `pegawai` VALUES (71, NULL, '198207072006041010', 'PUTRI', '-', 'Singosari Malang Indonesia', '1982-07-13', 'Indonesia', '11', '2014-05-19', 'Penyuluh Kehutanan Muda', '2014-02-01', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:50', '2015-11-03 03:16:04', '1', NULL);
INSERT INTO `pegawai` VALUES (72, NULL, '198401132006041006', 'SAMED', '-', 'Singosari Malang Indonesia', '1984-02-27', 'Indonesia', '9', '2013-10-01', 'Penyuluh Kehutanan Pelaksana Lanjutan', '2013-10-01', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:50', '2015-11-03 03:16:16', '1', NULL);
INSERT INTO `pegawai` VALUES (73, NULL, '198405112011011007', 'FATTAH', '-', 'Singosari Malang Indonesia', '1984-05-19', 'Indonesia', '9', '2012-11-01', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:50', '2015-11-03 03:16:28', '1', NULL);
INSERT INTO `pegawai` VALUES (74, NULL, '198406262010011028', 'ADITIYA NURYAN', '-', 'Singosari Malang Indonesia', '1999-05-29', 'Indonesia', '10', '2014-04-14', 'Penyuluh Kehutanan Pertama (III/b)', '2015-02-28', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:50', '2015-11-03 03:17:41', '1', NULL);
INSERT INTO `pegawai` VALUES (75, NULL, '198704122011011009', 'ADITYA RAHMAN', '-', 'Singosari Malang Indonesia', '2011-05-27', 'Indonesia', '5', '2012-11-01', 'Penyuluh Kehutanan Pemula', '2012-11-01', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:50', '2015-11-03 03:17:54', '1', NULL);
INSERT INTO `pegawai` VALUES (76, NULL, '198705222011011005', 'ok19', '-', 'Singosari Malang Indonesia', '2011-04-16', 'Indonesia', '5', '2012-10-30', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:50', '2015-11-03 03:17:56', '1', NULL);
INSERT INTO `pegawai` VALUES (77, NULL, '199005212011011004', 'JOJO BENZOAT', '-', 'Singosari Malang Indonesia', '2010-12-31', 'Indonesia', '5', '2012-11-01', '-', '0000-00-00', '0', 0, '-', '0000-00-00', 0, 'UI', '0', 'S3', NULL, NULL, NULL, NULL, '2015-05-30 19:12:50', '2015-11-03 03:18:05', '1', NULL);
INSERT INTO `pegawai` VALUES (78, NULL, '199006092011012002', 'ZAKARIA', '0', 'Sabang', '2021-06-01', 'Indonesia', '5', NULL, '-', '2021-06-02', '2021-06-02', NULL, '-', '', NULL, 'UI', '2021-06-02', 'S3', '-', '-', NULL, NULL, '2021-06-02 00:51:20', '2015-11-03 03:18:26', '1', '');
INSERT INTO `pegawai` VALUES (79, NULL, '1234567890123456', 'NAZARUDDIN, S.I.KOM', '0', 'Singosari Malang Indonesia', '2021-06-02', 'Indonesia', '5', NULL, 'WALIKOTA SABANG', '2021-06-02', '2021-06-02', NULL, '-', '', NULL, 'UI', '2021-06-02', 'S3', '-', '-', NULL, NULL, '2021-06-02 00:49:04', '2015-11-03 03:18:33', '1', '');
INSERT INTO `pegawai` VALUES (80, NULL, '34', 'das', '234234', '224', '2021-05-21', 'Padang', 'IIIA', NULL, 'asd', '2021-05-18', '2021-05-15', NULL, 'asdad', '2021-05-10', NULL, 'UI', '2019', '2019', '2019', 'saad', NULL, NULL, '2021-05-30 20:11:45', NULL, '1', 'Eselone 1');
INSERT INTO `pegawai` VALUES (81, NULL, '1231314', 'asdad', '324242', 'sdad', '2021-06-24', 'asdada', 'IIIA', NULL, 'ad', '2021-06-23', '2021-06-10', NULL, 'ad', '2021-06-24', NULL, 'UI', '2021-06-24', '2020', 'asda', 'adsad', NULL, NULL, '2021-06-01 23:13:54', NULL, '1', 'Eselone 1');
INSERT INTO `pegawai` VALUES (82, NULL, '9321039', '00913013i09', '032091230139', 'amdlksmkl', '2022-07-07', 'asd', 'C11', NULL, 'adsaklmd', '2022-07-15', '2022-07-21', NULL, 'asd', '2022-07-15', NULL, 'asd', '2022-07-13', '2313', 'asd', 'asd', NULL, NULL, '2022-07-16 14:23:52', NULL, '1', 'Letnan');

-- ----------------------------
-- Table structure for pengajuan_arsip
-- ----------------------------
DROP TABLE IF EXISTS `pengajuan_arsip`;
CREATE TABLE `pengajuan_arsip`  (
  `id_pengajuan` int(15) NOT NULL AUTO_INCREMENT,
  `id_pejabat` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_satuan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_arsip` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `satuan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NOT NULL,
  `tujuan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `file_arsip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_jenis` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nonaktif` enum('n','y') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_pengajuan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pengajuan_arsip
-- ----------------------------
INSERT INTO `pengajuan_arsip` VALUES (1, '1', '', 'data siswa', '1', 'kosong', '2019-12-10', ' data ', 'peng_1575978902.pdf', '2', 'y');
INSERT INTO `pengajuan_arsip` VALUES (2, '1', '6', 'nnn', '200000', 'kosong', '2020-04-13', ' nnn', 'peng_1586763296.pdf', '12', 'y');
INSERT INTO `pengajuan_arsip` VALUES (3, '1', '1', 'sdadawd', '22', 'kosong', '2021-03-26', ' ffff', 'peng_1616743390.pdf', '7', 'y');
INSERT INTO `pengajuan_arsip` VALUES (4, '1', '1', 'Gaji Pegawai', '1', 'kosong', '2021-05-02', ' Penyimpanan', 'peng_1619956004.docx', '8', 'y');
INSERT INTO `pengajuan_arsip` VALUES (5, '29', '2', 'SPM', '1', 'kosong', '2021-05-04', ' Bank', 'peng_1620063880.jpg', '8', 'n');
INSERT INTO `pengajuan_arsip` VALUES (6, '1', '5', 'DD', '2', 'kosong', '2021-05-04', ' FF', 'peng_1620090929.jpg', '18', 'y');
INSERT INTO `pengajuan_arsip` VALUES (7, '29', '1', 'SPM Bulan Januari 2021', '1', 'kosong', '2021-05-20', ' Penyimpanan', 'peng_1621497785.jpg', '24', 'n');
INSERT INTO `pengajuan_arsip` VALUES (8, '1', '2', 'tes', '1', 'kosong', '2022-07-13', ' tes', 'peng_1657725278.docx', '7', 'n');

-- ----------------------------
-- Table structure for pengajuan_surat_masuk
-- ----------------------------
DROP TABLE IF EXISTS `pengajuan_surat_masuk`;
CREATE TABLE `pengajuan_surat_masuk`  (
  `id_pengajuan_s` int(15) NOT NULL AUTO_INCREMENT,
  `no_agenda` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jenis_surat` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tanggal_kirim` datetime NOT NULL,
  `tanggal_terima` datetime NOT NULL,
  `no_surat` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pengirim` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perihal` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nama_file` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_pengajuan_s`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pengajuan_surat_masuk
-- ----------------------------

-- ----------------------------
-- Table structure for sikd_satker
-- ----------------------------
DROP TABLE IF EXISTS `sikd_satker`;
CREATE TABLE `sikd_satker`  (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `sikd_satker_type` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sikd_satker_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `singkatan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sikd_bidang_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kd_bidang_induk` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rek_konsolidasi_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nip_ka_satker` varchar(18) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nm_ka_satker` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jab_ka_satker` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `klasifikasi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satker_pendapatan` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sotk_lama` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `npwp_satker` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_skpd_bmd` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `creation_date` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `last_updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `last_updated_date` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 300903 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sikd_satker
-- ----------------------------
INSERT INTO `sikd_satker` VALUES (110101, 'SikdSkpd', '', '110101', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'DINDIK', '101', '1101', '1180101', '196306101985121002', 'Drs. TARYONO, M.Si', 'KEPALA DINAS', '', '1', '', NULL, '1.01.01.01', '', '0000-00-00 00:00:00', 'bpkad.pelaporan', '2019-05-24 10:22:52');
INSERT INTO `sikd_satker` VALUES (110201, 'SikdSkpd', '', '110201', 'DINAS KESEHATAN', 'DINKES', '102', '1102', '1180102', '197412202001121004', 'DEDEN DENI,SE', 'Plt. KEPALA DINAS', '', '1', '', NULL, '1.01.02.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 09:56:59');
INSERT INTO `sikd_satker` VALUES (110202, 'SikdSkpd', '110202', '110202', 'RUMAH SAKIT UMUM', 'RSU', '102', '1102', '1180103', '197610152007012007', 'dr. ALLIN HENDALIN. M', 'Plt. DIREKTUR', '', '1', '1', NULL, '1.01.02.02', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-01 13:21:26');
INSERT INTO `sikd_satker` VALUES (110301, 'SikdSkpd', '', '110301', 'DINAS PEKERJAAN UMUM', 'DPU', '103', '1103', '1180104', '197504082001121003', 'ARIES KURNIAWAN, ST, MT \r\n', 'PlT.KEPALA DINAS', '', '0', '', NULL, '1.01.03.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:10:48');
INSERT INTO `sikd_satker` VALUES (110302, 'SikdSkpd', NULL, '110302', 'DINAS BANGUNAN DAN PENATAAN RUANG', 'DBPR', '103', '1103', '1180105', '196612301996031001', 'Ir.DENDI PRYANDANA, MT\r\n', 'Kepala Dinas', '', '0', NULL, NULL, '1.01.03.02', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-05 11:00:05');
INSERT INTO `sikd_satker` VALUES (110401, 'SikdSkpd', '', '110401', 'DINAS PERUMAHAN, KAWASAN PERMUKIMAN DAN PERTANAHAN', 'DPKPP', '104', '1104', '1180106', '196105291982121001', 'TEDDY MEIYADI,SE,MM\r\n', 'PLT.Kepala Dinas', '', '1', '', NULL, '1.01.04.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:11:44');
INSERT INTO `sikd_satker` VALUES (110501, 'SikdSkpd', NULL, '110501', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN', 'DPKP', '105', '1105', '1180107', '196209171985031014', 'Drs. UCI SANUSI, M.Pd\r\n\r\n', 'Kepala Dinas', '', '1', NULL, NULL, '1.01.05.01', '', '0000-00-00 00:00:00', 'admin2an', '2017-11-07 17:29:09');
INSERT INTO `sikd_satker` VALUES (110502, 'SikdSkpd', '', '110502', 'BADAN PENANGGULANGAN BENCANA DAERAH ', 'BPBD', '105', '1105', '1180108', '196711271997031002', 'Drs. H. CHAERUDIN, M.Si\r\n', 'Kepala Pelaksana', '', '0', '', NULL, '1.01.05.02', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-12-27 18:16:59');
INSERT INTO `sikd_satker` VALUES (110503, 'SikdSkpd', '', '110503', 'SATUAN POLISI PAMONG PRAJA ', 'SATPOL', '105', '1105', '1180109', '196108161986031012', 'MOHAMAD UTUH, S.Sos\r\n', 'Plt. KEPALA SATUAN POLISI PAMONG PRAJA', '', '0', '', NULL, '1.01.05.03', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2019-07-15 10:08:36');
INSERT INTO `sikd_satker` VALUES (110504, 'SikdSkpd', '', '110504', 'BADAN KESATUAN BANGSA DAN POLITIK', 'KESBANGPOL', '105', '1105', '1180110', '19610712198501100', 'DR. RAHMAT SALAM, M.Si\r\n', 'Plt. KEPALA BADAN', '', '0', '', NULL, '1.01.05.04', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2019-07-11 14:01:28');
INSERT INTO `sikd_satker` VALUES (110601, 'SikdSkpd', '', '110601', 'DINAS SOSIAL', 'DINSOS', '106', '1106', '1180111', '197205261992031002', 'WAHYUNOTO LUKMAN, S.IP, MM\r\n', 'KEPALA DINAS', '', '0', '', NULL, '1.01.06.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:12:59');
INSERT INTO `sikd_satker` VALUES (120101, 'SikdSkpd', NULL, '120101', 'DINAS KETENAGAKERJAAN', 'DISNAKER', '201', '1201', '1180112', '196103041986031010', 'H. PURNAMA WIJAYA S.Sos, M.Si\r\n', 'KEPALA DINAS', '', '1', NULL, NULL, '1.02.01.01', '', '0000-00-00 00:00:00', 'admin', '2017-01-06 16:28:49');
INSERT INTO `sikd_satker` VALUES (120201, 'SikdSkpd', '', '120201', 'DINAS PEMBERDAYAAN MASYARAKAT PEMBERDAYAAN PEREMPUAN PERLINDUNGAN ANAK DAN KELUARGA BERENCANA', 'DPMP3AKB', '202', '1202', '1180113', '196308191989012003', 'drg. Hj. KHAIRATI, M.Kes\r\n', 'Kepala Dinas', '', '0', '', NULL, '1.02.02.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:16:00');
INSERT INTO `sikd_satker` VALUES (120501, 'SikdSkpd', '', '120501', 'DINAS LINGKUNGAN HIDUP ', 'DLH', '205', '1205', '1180114', '196607281986031004', 'Drs. H. TOTO SUDARTO, M.Si', 'Kepala Dinas', '', '1', '', NULL, '1.02.05.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:15:32');
INSERT INTO `sikd_satker` VALUES (120601, 'SikdSkpd', '', '120601', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL ', 'DISDUKCAPIL', '206', '1206', '1180115', '196412201985091001', 'Drs. H. DEDI BUDIAWAN, MM\r\n', 'Kepala Dinas', '', '0', '', NULL, '1.02.06.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:17:10');
INSERT INTO `sikd_satker` VALUES (120901, 'SikdSkpd', '', '120901', 'DINAS PERHUBUNGAN', 'DISHUB', '209', '1209', '1180116', '196203111985031012', 'Drs. H. SUKANTA\r\n', 'KEPALA DINAS', '', '1', '', NULL, '1.02.09.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-12-26 11:10:59');
INSERT INTO `sikd_satker` VALUES (121001, 'SikdSkpd', '', '121001', 'DINAS KOMUNIKASI DAN INFORMATIKA ', 'DISKOMINFO', '210', '1210', '1180117', '197411291993031003', 'Drs.Fuad, MPP\r\n', 'Plt.Kepala Dinas', '', '0', '', NULL, '1.02.10.01', '', '0000-00-00 00:00:00', 'admin2an', '2019-01-04 14:33:52');
INSERT INTO `sikd_satker` VALUES (121101, 'SikdSkpd', NULL, '121101', 'DINAS KOPERASI, USAHA KECIL DAN MENENGAH ', 'DKUKM', '211', '1211', '1180118', '196408151991032005', 'Drg. DAHLIA NADEAK, M.Kes\r\n', 'Plt.KEPALA DINAS', '', '0', NULL, NULL, '1.02.11.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-05 11:10:14');
INSERT INTO `sikd_satker` VALUES (121201, 'SikdSkpd', NULL, '121201', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'DPMPTSP', '212', '1212', '1180119', '197010061991031001', 'BAMBANG NOERTJAHJO, SE. Ak', 'Kepala Dinas', '', '1', NULL, NULL, '1.02.12.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-05 10:45:44');
INSERT INTO `sikd_satker` VALUES (121301, 'SikdSkpd', NULL, '121301', 'DINAS PEMUDA DAN OLAHRAGA ', 'DPO', '213', '1213', '1180120', '196503011997031002', 'Ir.H.E.WIWI MARTAWIJAYA, M.Si \r\n', 'KEPALA DINAS', '', '1', NULL, NULL, '1.02.13.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-07 22:44:47');
INSERT INTO `sikd_satker` VALUES (121701, 'SikdSkpd', NULL, '121701', 'DINAS PERPUSTAKAAN DAN ARSIP DAERAH', 'DPAD', '217', '1217', '1180121', '196311131985011001', 'Drs. H. DADANG RAHARJA, M.Si\r\n', 'Kepala Dinas', '', '0', NULL, NULL, '1.02.17.01', '', '0000-00-00 00:00:00', 'admin', '2017-01-08 20:33:51');
INSERT INTO `sikd_satker` VALUES (200201, 'SikdSkpd', NULL, '200201', 'DINAS PARIWISATA ', 'DISPAR', '302', '2002', '1180122', '197904122002121006', 'JUDIANTO, ST.MT ', 'Kepala Dinas', '', '0', NULL, NULL, '2.00.02.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-05 11:13:34');
INSERT INTO `sikd_satker` VALUES (200301, 'SikdSkpd', '', '200301', 'DINAS KETAHANAN PANGAN, PERTANIAN DAN PERIKANAN', 'DKPPP', '203', '1203', '1180123', '196302151996011001', 'Ir. H. NUR SELAMET, MM\r\n', 'Kepala Dinas', '', '0', '', NULL, '2.00.03.01', '', '0000-00-00 00:00:00', 'admin2an', '2019-01-10 14:37:48');
INSERT INTO `sikd_satker` VALUES (200401, 'SikdSkpd', NULL, '200401', 'DINAS PERINDUSTRIAN DAN PERDAGANGAN', 'DISPERINDAG', '304', '2004', '1180124', '197008192002122005', 'drg. MAYA MARDIANA, MARS\r\n', 'Kepala Dinas', '', '1', NULL, NULL, '2.00.04.01', '', '0000-00-00 00:00:00', 'admin2an', '2017-11-07 17:28:10');
INSERT INTO `sikd_satker` VALUES (300101, 'SikdSkpd', NULL, '300101', 'BADAN PERENCANAAN PEMBANGUNAN DAERAH', 'BAPEDA', '401', '301', '1180125', '196505211994031003', 'Ir. MOCHAMMAD TAHER ROCHMADI, M.Si\r\n', 'KEPALA BADAN', '', '0', NULL, NULL, '3.00.01.01', '', '0000-00-00 00:00:00', 'admin', '2017-01-10 16:26:06');
INSERT INTO `sikd_satker` VALUES (300201, 'SikdSkpd', NULL, '300201', 'BADAN PENDAPATAN  DAERAH ', 'BPD', '402', '302', '1180126', '196101241986031006', 'Drs. H. DADANG SOFYAN, MM\r\n', 'KEPALA BADAN', '', '1', NULL, NULL, '3.00.02.01', '', '0000-00-00 00:00:00', 'admin', '2017-01-08 20:41:58');
INSERT INTO `sikd_satker` VALUES (300202, 'SikdSkpd', NULL, '300202', 'BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH ', 'BPKAD', '402', '302', '1180127', '196308301984031004', 'Drs. H.WARMAN S. MM\r\n', 'KEPALA BADAN', '', '1', NULL, NULL, '3.00.02.02', '', '0000-00-00 00:00:00', 'admin', '2017-01-08 20:42:30');
INSERT INTO `sikd_satker` VALUES (300301, 'SikdSkpd', '', '300301', 'BADAN KEPEGAWAIAN, PENDIDIKAN DAN PELATIHAN', 'BKPP', '403', '303', '1180128', '196303091986031013', 'H. APENDI, S.Sos, M.Si\r\n', 'Kepala Badan', '', '0', '', NULL, '3.00.04.02', '', '0000-00-00 00:00:00', 'admin2an', '2019-01-10 14:36:33');
INSERT INTO `sikd_satker` VALUES (300501, 'SikdSkpd', '', '300501', 'SEKRETARIAT DPRD ', 'SEKWAN', '405', '305', '1180129', '196707231987031002', 'Drs. H. CHAERUL SOLEH, M.Si\r\n', 'Sekretaris DPRD', '', '0', '', NULL, '3.00.05.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2019-07-12 15:45:25');
INSERT INTO `sikd_satker` VALUES (300601, 'SikdSkpd', '', '300601', 'SEKRETARIAT DAERAH ', 'SEKDA', '367416060794408', '306', '1180130', '196404061985031014', 'Drs. H. MUHAMAD, M.Si\r\n', 'SEKRETARIS DAERAH', '', '0', '0', NULL, '3.00.06.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-23 11:47:06');
INSERT INTO `sikd_satker` VALUES (300701, 'SikdSkpd', '', '300701', 'INSPEKTORAT ', 'INSPEKTORAT', '367416060794409', '307', '1180141', '196109031991021001', 'H. Uus Kusnadi, SE, M.Si\r\n', 'INSPEKTUR', '', '0', '', NULL, '3.00.07.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-12 14:41:08');
INSERT INTO `sikd_satker` VALUES (300801, 'SikdSkpd', '', '300801', 'KECAMATAN CIPUTAT ', 'CIPUTAT', '367416060794410', '308', '1180142', '197510251994121001', 'Drs. H. ANDI D. PATABAI AP.M.Si\r\n', 'CAMAT CIPUTAT', '', '0', '', NULL, '3.00.08.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-12-21 09:24:34');
INSERT INTO `sikd_satker` VALUES (300802, 'SikdSkpd', '', '300802', 'KECAMATAN CIPUTAT TIMUR ', 'CIPUTAT TIMUR', '367416060794410', '308', '1180143', '196702151992031004', 'Drs. SUTANG SUPRIANTO, M.Si\r\n', 'CAMAT CIPUTAT TIMUR', '', '0', '', NULL, '3.00.08.02', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2019-06-27 10:58:10');
INSERT INTO `sikd_satker` VALUES (300803, 'SikdSkpd', NULL, '300803', 'KECAMATAN PAMULANG ', 'PAMULANG', '367416060794410', '308', '1180144', '196205101989021001', 'H. DEDEN JUARDI, S.Sos.,M.Si\r\n', 'CAMAT PAMULANG', '', '0', NULL, NULL, '3.00.08.03', '', '0000-00-00 00:00:00', 'admin', '2016-11-02 17:41:29');
INSERT INTO `sikd_satker` VALUES (300804, 'SikdSkpd', NULL, '300804', 'KECAMATAN SERPONG ', 'SERPONG', '367416060794410', '308', '1180145', '196509042005012005', 'MURSINAH, SH., M.Si\r\n', 'KECAMATAN SERPONG', '', '0', NULL, NULL, '3.00.08.04', '', '0000-00-00 00:00:00', 'admin', '2016-11-02 17:42:21');
INSERT INTO `sikd_satker` VALUES (300805, 'SikdSkpd', NULL, '300805', 'KECAMATAN SERPONG UTARA ', 'SERPONG UTARA', '367416060794410', '308', '1180146', '197407281994021002', 'BANI KHOSYATULLOH\r\n', 'CAMAT SERPONG UTARA', '', '0', NULL, NULL, '3.00.08.05', '', '0000-00-00 00:00:00', 'admin2an', '2016-11-14 18:46:06');
INSERT INTO `sikd_satker` VALUES (300806, 'SikdSkpd', '', '300806', 'KECAMATAN PONDOK AREN ', 'PONDOK AREN', '367416060794410', '308', '1180147', '196701032005011004', 'MAKUM SAGITA,S.Pd\r\n', 'CAMAT PONDOK AREN\r\n', '', '0', '', NULL, '3.00.08.06', '', '0000-00-00 00:00:00', 'admin.user', '2018-03-14 14:31:47');
INSERT INTO `sikd_satker` VALUES (300807, 'SikdSkpd', '', '300807', 'KECAMATAN SETU ', 'SETU', '367416060794410', '308', '1180148', '196303181988031006', 'H. HERU AGUS S, AP, M.Si\r\n', 'CAMAT SETU', '', '0', '', NULL, '3.00.08.07', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:20:26');
INSERT INTO `sikd_satker` VALUES (300901, 'SikdSkpd', '', '300901', 'DEWAN PERWAKILAN RAKYAT DAERAH', 'DPRD', '367416060794411', '309', '1180149', '196707231987031002', 'Drs. H. CHAERUL SOLEH, M.Si', 'Sekretaris DPRD', '', '0', '', NULL, '3.00.09.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2019-07-12 15:45:05');
INSERT INTO `sikd_satker` VALUES (300902, 'SikdSkpd', '', '300902', 'WALIKOTA DAN WAKIL WALIKOTA', 'KDH-WKDH', '367416060794411', '309', '1180150', '196201261986031005', 'H. M. SAHLAN, S.Sos', 'Kepala Bagian Keuangan', '', '0', '', NULL, '3.00.09.02', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-22 11:22:19');
INSERT INTO `sikd_satker` VALUES (90000, 'SikdSkpkd', '', '300202', 'SATUAN KERJA PEGELOLA KEUANGAN DAERAH', 'SKPKD', '402', '302', '3110201', '196308301984031004', 'Drs. H. Warman S. MM', 'Pejabat Pegelola Keuangan Daerah', '0', '1', '', NULL, '3.00.02.02', '5/20/2014 12:06', '0000-00-00 00:00:00', 'admin2an', '2019-02-11 18:45:08');

-- ----------------------------
-- Table structure for sppd
-- ----------------------------
DROP TABLE IF EXISTS `sppd`;
CREATE TABLE `sppd`  (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `pimpinan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '//pimpinan menyatakan nama pimpinan nya siapa bisa jadi (gubernur, walikota, wakilwalikota)',
  `letter_code` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `letter_subject` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `letter_about` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `letter_from` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `letter_content` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `letter_date` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `code` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bawahan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `atasan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rate_travel` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'keterangan lama perjalanan',
  `pengikut_nip` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `purpose` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `transport` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `place_from` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `place_to` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `length_journey` int(3) NULL DEFAULT NULL,
  `date_go` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_back` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `government` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `budget` double(16, 2) NULL DEFAULT 0.00,
  `budget_from` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `result_date` date NULL DEFAULT NULL,
  `result` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `result_username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `file` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `jenis_surat_id` int(10) NULL DEFAULT NULL,
  `file_update` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` enum('0','1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0' COMMENT '0 : diinput  1 : dicetak 2 : selesai',
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `datetime_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `datetime_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `basic` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'dasar perjalan dinas',
  `city` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'b',
  `rekening` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kabag` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kasubag` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pimpinan_spt` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kabag_spt` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kasubag_spt` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `letter_code_spt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `code`(`code`) USING BTREE,
  INDEX `nip_leader`(`atasan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 51 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sppd
-- ----------------------------
INSERT INTO `sppd` VALUES (20, '195802281986012002', 'A12-/SPPD-12/4-SETDA', '0', '0', '0', 'Permendagri 102', '0', '2021/47/sspd/47-2021', '2021-06-04', '195802281986012002', '195802281986012002', NULL, '1958060519860811001', 'Studi Banding ke Bandung', 'Mobil Dinas', 'Padang', 'ff', 2, '2021-06-30', '2021-06-04', 'Trisakti UNiversitity', 0.00, '2003211', 'Snack', '2021-06-04', '0', '0', '0', 12, '0', '0', 'admin', '0', '2021-06-04 15:08:12', '2021-06-04 15:08:12', 'asdadaasdadaasdada', 'padang', '13131231', '195802281986012002', '195802281986012002', '1958060519860811001', '195802281986012002', '195802281986012002', 'DD121/NO21/SPT');

-- ----------------------------
-- Table structure for tbl_disposisi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_disposisi`;
CREATE TABLE `tbl_disposisi`  (
  `id_disposisi` int(10) NOT NULL AUTO_INCREMENT,
  `tujuan` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `isi_disposisi` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sifat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `batas_waktu` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `catatan` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_surat` int(10) NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_disposisi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 133 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_disposisi
-- ----------------------------
INSERT INTO `tbl_disposisi` VALUES (20, 'Bagian Perlengkapan Universitas Ekaskti', 'dispotition well ', 'Biasa', '0000-00-00', 'now this for dispotition', 4, 0);
INSERT INTO `tbl_disposisi` VALUES (21, 'kasi', 'asdaasd', 'Segera', '2019-12-03', 'asdasdasda', 5, 0);
INSERT INTO `tbl_disposisi` VALUES (22, 'Madiun', 'Tfgghhhh', 'Segera', '2019-12-19', 'Yggg', 6, 0);
INSERT INTO `tbl_disposisi` VALUES (23, 'Tujuan ', 'Yes', 'Penting', '2019-12-27', 'asd', 7, 1);
INSERT INTO `tbl_disposisi` VALUES (24, 'kasi kurais', 'sasasa', 'Penting', '2019-12-13', 'asasas', 9, 1);
INSERT INTO `tbl_disposisi` VALUES (25, 'retertert', 'erterte', 'Rahasia', '2019-12-20', 'ertertert', 10, 1);
INSERT INTO `tbl_disposisi` VALUES (26, 'kosong', 'isi disposisi', 'Biasa', '2020-01-01', 'perbaikan ', 12, 1);
INSERT INTO `tbl_disposisi` VALUES (27, 'bapak oyes', 'yes', 'Biasa', '2020-01-09', 'perbaikan yes', 11, 1);
INSERT INTO `tbl_disposisi` VALUES (28, 'Kasi pendama', 'Swgera di tl', 'Segera', '2020-01-03', 'Peserta 100 guru dan karyawan', 13, 1);
INSERT INTO `tbl_disposisi` VALUES (29, 'UP', 'TL', '', '0000-00-00', '', 14, 0);
INSERT INTO `tbl_disposisi` VALUES (30, 'Penyelenggara Syariah', 'Tolong konfirmasi rohaniwan agama apa yg diminta', 'Segera', '2020-01-10', 'Tindak lanjuti', 15, 0);
INSERT INTO `tbl_disposisi` VALUES (31, 'Kasubag TU/Keuangan', 'Tindaklanjuti', 'Biasa', '2020-01-07', 'Tindak Lanjuti', 16, 0);
INSERT INTO `tbl_disposisi` VALUES (32, 'Kepala Kantor\nHumas', 'Agendakan', 'Biasa', '2020-01-07', 'Saya Hadir', 17, 0);
INSERT INTO `tbl_disposisi` VALUES (33, 'Humas', '', 'Biasa', '0000-00-00', '', 18, 11);
INSERT INTO `tbl_disposisi` VALUES (34, 'Bimas Islam', 'Untuk diketahui dan ditindaklanjuti', 'Biasa', '2020-01-07', 'Tindak Lanjuti', 19, 0);
INSERT INTO `tbl_disposisi` VALUES (35, 'Kepala Kantor\nHumas', 'Agendakan, mohon di ingatkan!', 'Biasa', '2020-01-07', 'Agendakan', 20, 0);
INSERT INTO `tbl_disposisi` VALUES (36, 'Bimas Islam', 'Penuhi permintaan ini sesuai prosedur', 'Biasa', '2020-01-07', 'Tindak Lanjuti', 21, 0);
INSERT INTO `tbl_disposisi` VALUES (37, 'Bimas Islam', 'Dipedomani dan ditindaklanjuti', 'Biasa', '2020-01-07', 'Tindak Lanjuti', 22, 0);
INSERT INTO `tbl_disposisi` VALUES (38, 'Kasubag TU / UP', 'Tindaklanjuti sesuai aturan', 'Biasa', '2020-01-07', 'Tindak Lanjuti', 23, 0);
INSERT INTO `tbl_disposisi` VALUES (39, 'Kasubag TU', 'Pedomani dan tindaklanjuti', 'Biasa', '2020-01-07', 'Tindak Lanjuti', 24, 0);
INSERT INTO `tbl_disposisi` VALUES (40, 'Kasi_PD_Pontren', 'Tindaklanjuti', 'Biasa', '2020-01-08', 'Tindak Lanjuti', 25, 0);
INSERT INTO `tbl_disposisi` VALUES (41, 'Plt Kasubag TU', 'Tindak lanjuti', 'Biasa', '2020-01-10', 'Tindak lanjuti', 26, 0);
INSERT INTO `tbl_disposisi` VALUES (42, 'Plt Kasubag TU', 'Proses sesuai prosedur', 'Penting', '2020-01-10', 'Tindak lanjuti', 27, 0);
INSERT INTO `tbl_disposisi` VALUES (43, 'Plt. Kasubag Tu', 'tindaklanjuti', 'Biasa', '2020-01-14', 'cukupi', 32, 0);
INSERT INTO `tbl_disposisi` VALUES (44, 'Kasubag TU', '', '', '0000-00-00', '', 31, 11);
INSERT INTO `tbl_disposisi` VALUES (45, 'UP', '', '', '0000-00-00', '', 30, 11);
INSERT INTO `tbl_disposisi` VALUES (46, 'Humas', '', '', '0000-00-00', '', 29, 11);
INSERT INTO `tbl_disposisi` VALUES (47, 'Kasubag TU', '', '', '0000-00-00', '', 28, 11);
INSERT INTO `tbl_disposisi` VALUES (48, 'Kasi PHU', 'Supaya di tindak lanjuti', 'Biasa', '2020-01-10', 'Tindak lanjuti', 34, 0);
INSERT INTO `tbl_disposisi` VALUES (49, 'Kasi Pendma', 'Supaya di tindak lanjuti', 'Penting', '2020-01-10', 'Tindak lanjuti', 33, 0);
INSERT INTO `tbl_disposisi` VALUES (50, '.', '', 'Biasa', '0000-00-00', '', 35, 9);
INSERT INTO `tbl_disposisi` VALUES (51, 'Humas', 'Agendakan', 'Penting', '2020-01-14', 'Saya Hadir', 36, 0);
INSERT INTO `tbl_disposisi` VALUES (52, 'Plt Kasubag TU', 'di Inventarisir', 'Biasa', '2020-01-14', 'di Inventarisir', 37, 0);
INSERT INTO `tbl_disposisi` VALUES (53, 'Kasi Pendma', 'di Inventarisir', 'Biasa', '2020-01-15', 'di Inventarisir', 39, 0);
INSERT INTO `tbl_disposisi` VALUES (54, 'Kasi Pendma', 'untuk diketahui', 'Biasa', '2020-01-15', 'di Inventarisir', 38, 0);
INSERT INTO `tbl_disposisi` VALUES (55, 'Humas', 'Agendakan', 'Biasa', '2020-01-16', 'Saya Hadir', 42, 0);
INSERT INTO `tbl_disposisi` VALUES (56, 'Gara syariah', 'pertimbangkan', 'Biasa', '2020-01-14', 'pertimbangkan', 41, 0);
INSERT INTO `tbl_disposisi` VALUES (57, 'Kasi Bimas ', 'tindaklanjuti', 'Biasa', '2020-01-15', 'cukupi datanya', 40, 2);
INSERT INTO `tbl_disposisi` VALUES (58, 'Pengawas \nkristen', 'Tindak lanjuti', 'Biasa', '2020-01-14', 'Hadiri', 43, 9);
INSERT INTO `tbl_disposisi` VALUES (59, 'Kasi Bimas Islam', 'Tindak lanjuti', 'Biasa', '2020-01-14', 'Atur dengan penyuluh', 45, 9);
INSERT INTO `tbl_disposisi` VALUES (60, 'Penyelenggara Syariah', 'Tindak lanjuti', 'Biasa', '2020-01-15', 'Cukupi', 44, 9);
INSERT INTO `tbl_disposisi` VALUES (61, 'PHU', 'Tindaklanjuti', 'Biasa', '2020-01-15', 'Cukupi', 48, 11);
INSERT INTO `tbl_disposisi` VALUES (62, 'Pendma', 'Koordinasikan dengan madrasah yg terkait', 'Biasa', '2020-01-15', 'Tindak Lanjuti', 46, 11);
INSERT INTO `tbl_disposisi` VALUES (63, 'PD Pontren', 'Untuk dijadikan pedoman', 'Penting', '2020-01-15', 'di Inventarisir', 49, 9);
INSERT INTO `tbl_disposisi` VALUES (64, 'Bimas', 'Tindak Lanjuti', 'Biasa', '2020-01-15', 'Tindak Lanjuti', 47, 11);
INSERT INTO `tbl_disposisi` VALUES (65, 'Plt Kasubag', 'Tindak Lanjuti', 'Biasa', '2020-01-16', 'Tindak Lanjuti', 50, 11);
INSERT INTO `tbl_disposisi` VALUES (66, 'Plt Kasubag', 'Koordinasikan dengan UP, Buatkan surat tugas dan SPD', 'Biasa', '2020-01-16', 'Tindak Lanjuti', 51, 11);
INSERT INTO `tbl_disposisi` VALUES (67, 'Bimas Islam', 'Cukupi datanya', 'Biasa', '2020-01-16', 'Tindak Lanjuti', 53, 11);
INSERT INTO `tbl_disposisi` VALUES (68, 'Plt Kasubag', 'Tindak Lanjuti, koordinasikan dgn keuangan', 'Biasa', '2020-01-16', 'Tindak Lanjuti', 52, 11);
INSERT INTO `tbl_disposisi` VALUES (69, 'Kasi Pendma', 'Tindak lanjuti', 'Biasa', '2020-01-16', 'Tindak Lanjuti', 54, 9);
INSERT INTO `tbl_disposisi` VALUES (70, 'Plt. Kasubag', 'Cukupi', 'Biasa', '2020-01-17', 'Tindak Lanjuti', 57, 11);
INSERT INTO `tbl_disposisi` VALUES (71, 'Keuangan', 'Tindak Lanjuti', 'Biasa', '2020-01-17', 'Tindak Lanjuti', 55, 11);
INSERT INTO `tbl_disposisi` VALUES (72, 'Kasi Pendma', 'Tindak Lanjuti', 'Biasa', '2020-01-17', 'Tindak Lanjuti', 56, 11);
INSERT INTO `tbl_disposisi` VALUES (73, 'Plt Kasubag TU', 'Tindak lanjuti', 'Biasa', '2020-01-17', 'Cukupi', 58, 9);
INSERT INTO `tbl_disposisi` VALUES (74, 'UP', 'Tindak lanjuti ', 'Penting', '2020-01-17', 'untuk dijadikan pedoman ', 59, 9);
INSERT INTO `tbl_disposisi` VALUES (75, 'UP', 'Tindak lanjuti', 'Segera', '2020-01-17', 'Tindak lanjuti', 60, 9);
INSERT INTO `tbl_disposisi` VALUES (76, 'Plt Kasubag', 'Teruskan ke Ybs', 'Biasa', '2020-01-16', 'Tindak Lanjuti', 61, 11);
INSERT INTO `tbl_disposisi` VALUES (77, 'Plt Kasubag / Humas', '', 'Biasa', '0000-00-00', '', 62, 11);
INSERT INTO `tbl_disposisi` VALUES (78, '.', '', 'Biasa', '0000-00-00', '', 63, 11);
INSERT INTO `tbl_disposisi` VALUES (79, 'Kasi Bimas Islam', 'Tindak lanjuti', 'Biasa', '2020-01-21', 'Hadiri', 74, 9);
INSERT INTO `tbl_disposisi` VALUES (80, 'Gara Syariah', 'Pertimbangkan', 'Biasa', '2020-01-21', 'Tindak Lanjuti', 64, 11);
INSERT INTO `tbl_disposisi` VALUES (81, 'Plt Kasubag', 'Koordinasikan dengan ybs', 'Segera', '2020-01-21', 'Cukupi', 65, 11);
INSERT INTO `tbl_disposisi` VALUES (82, 'Kasi Pendma', 'Tindak Lanjuti', 'Biasa', '2020-01-21', 'Cukupi', 67, 11);
INSERT INTO `tbl_disposisi` VALUES (83, 'Kasi Bimas Islam', 'Tindak Lanjuti', 'Biasa', '2020-01-21', 'Tindak Lanjuti', 66, 11);
INSERT INTO `tbl_disposisi` VALUES (84, 'Bimas Islam', 'Tindak Lanjuti', 'Biasa', '2020-01-21', 'Cukupi', 68, 11);
INSERT INTO `tbl_disposisi` VALUES (85, 'Kasi PAIS', 'Pedomani', 'Biasa', '2020-01-21', 'Untuk dijadikan pedoman', 69, 11);
INSERT INTO `tbl_disposisi` VALUES (86, 'Humas', 'Tindak Lanjuti', 'Biasa', '2020-01-21', 'Sosialisasikan', 70, 11);
INSERT INTO `tbl_disposisi` VALUES (87, 'Kasi PAIS', 'Koordinasikan dengan UP untuk dibuatkan surat tugas dan SPD', 'Biasa', '2020-01-21', 'Tindak Lanjuti', 71, 11);
INSERT INTO `tbl_disposisi` VALUES (88, 'Kasi Pendma', 'Tindak Lanjuti', 'Biasa', '2020-01-21', 'Tindak Lanjuti', 72, 11);
INSERT INTO `tbl_disposisi` VALUES (89, 'Plt Kasubag', 'Koordinasikan dengan para Kasi dan Gara Syariah untuk ikut serta pada acara tersebut', 'Biasa', '2020-01-21', 'Tindak Lanjuti', 73, 11);
INSERT INTO `tbl_disposisi` VALUES (90, 'Kasi PHU', 'Tindak lanjuti', 'Penting', '2020-01-22', 'Tindak lanjuti', 81, 0);
INSERT INTO `tbl_disposisi` VALUES (91, 'Keuangan ', 'untuk dijadikan pedoman', 'Penting', '2020-01-22', 'Tindak lanjuti', 82, 0);
INSERT INTO `tbl_disposisi` VALUES (92, 'Humas', 'Agendakan', 'Penting', '2020-01-22', 'Saya Hadir', 80, 0);
INSERT INTO `tbl_disposisi` VALUES (93, 'Kasi Bimas', 'Tindak lanjuti', 'Biasa', '2020-01-22', 'Cukupi', 79, 2);
INSERT INTO `tbl_disposisi` VALUES (94, 'Kasi Pendma', 'Tindak lanjuti', 'Biasa', '2020-01-22', 'Tindaklanjuti', 78, 2);
INSERT INTO `tbl_disposisi` VALUES (95, 'Kasi Bimas ', 'Tindaklanjuti', 'Biasa', '2020-01-22', '', 77, 2);
INSERT INTO `tbl_disposisi` VALUES (96, 'Penyelenggara syariah', 'Pertimbangkan', 'Biasa', '2020-01-22', '', 76, 2);
INSERT INTO `tbl_disposisi` VALUES (97, 'Hunasy', 'Agendakan', 'Biasa', '2020-01-22', '', 75, 2);
INSERT INTO `tbl_disposisi` VALUES (98, 'Plt Kasubag TU', 'Tindak lanjuti', 'Biasa', '2020-01-22', 'Tindak lanjuti', 83, 9);
INSERT INTO `tbl_disposisi` VALUES (99, 'PHU', 'Tindak Lanjuti', 'Biasa', '2020-01-22', 'Cukupi', 84, 11);
INSERT INTO `tbl_disposisi` VALUES (100, 'Humas', 'di Inventarisir', 'Biasa', '2020-01-23', 'di Inventarisir', 86, 9);
INSERT INTO `tbl_disposisi` VALUES (101, 'Kasi Pendma', 'Tindak lanjuti', 'Segera', '2020-01-23', 'Koordinasi dengan UP agar dibuatkan surat tugas', 85, 9);
INSERT INTO `tbl_disposisi` VALUES (102, 'Kasi Pais', 'Tindak lanjuti', 'Segera', '2020-01-23', 'Tindak lanjuti', 87, 9);
INSERT INTO `tbl_disposisi` VALUES (103, 'Humas', 'Distribusikan ke masing2 satker', 'Biasa', '2020-01-24', 'Tindak Lanjuti', 92, 11);
INSERT INTO `tbl_disposisi` VALUES (104, 'Kasi Pendma', 'Tindak Lanjuti', 'Biasa', '2020-01-24', 'Tindak Lanjuti', 88, 11);
INSERT INTO `tbl_disposisi` VALUES (105, 'UP', 'Tindak Lanjuti', 'Biasa', '2020-01-24', 'Tindak Lanjuti', 89, 11);
INSERT INTO `tbl_disposisi` VALUES (106, 'Kasi Pendma', 'Tindak Lanjuti Sampaikan ke Satker', 'Biasa', '2020-01-24', 'Tindak Lanjuti', 90, 11);
INSERT INTO `tbl_disposisi` VALUES (107, 'Kasi Pendma', 'Tindak Lanjuti', 'Biasa', '2020-01-24', 'Tindak Lanjuti', 91, 11);
INSERT INTO `tbl_disposisi` VALUES (108, 'Bimas Islam', 'Distribusikan', 'Biasa', '2020-01-24', 'Tindak Lanjuti', 93, 11);
INSERT INTO `tbl_disposisi` VALUES (109, 'Gara Syariah', 'Cukupi', 'Biasa', '2020-01-24', 'Tindak Lanjuti', 94, 11);
INSERT INTO `tbl_disposisi` VALUES (110, 'Gara Syariah', 'Untuk dipedomani', 'Biasa', '2020-01-24', 'Di invetarisir', 95, 11);
INSERT INTO `tbl_disposisi` VALUES (111, 'UP', 'Pertimbangkan', 'Biasa', '2020-01-27', 'di Inventarisir', 96, 9);
INSERT INTO `tbl_disposisi` VALUES (112, 'Kasi Penyelenggara Syariah', 'Pertimbangkan dan sesuaikan dengan anggaran yang ada', 'Biasa', '2020-01-27', 'Tindak lanjuti', 97, 9);
INSERT INTO `tbl_disposisi` VALUES (113, 'Humas', 'Agendakan', 'Biasa', '2020-01-28', 'Saya Hadir', 98, 9);
INSERT INTO `tbl_disposisi` VALUES (114, 'Kasi Penyelenggara Syariah', 'Tindak lanjuti', 'Penting', '2020-01-28', 'Tindak lanjuti', 99, 9);
INSERT INTO `tbl_disposisi` VALUES (115, 'Humas', 'Agendakan', 'Biasa', '2020-01-29', 'Saya Hadir', 104, 9);
INSERT INTO `tbl_disposisi` VALUES (116, 'Plt Kasubag TU', 'Tindak lanjuti', 'Biasa', '2020-01-29', 'Tindak lanjuti', 103, 9);
INSERT INTO `tbl_disposisi` VALUES (117, 'Kasi Pendma', 'untuk diketahui', 'Biasa', '2020-01-29', 'Untuk diketahui', 102, 9);
INSERT INTO `tbl_disposisi` VALUES (118, 'Arsiparis', 'Cukupi dan tindak lanjuti', 'Segera', '2020-01-30', 'Tindak lanjuti', 105, 0);
INSERT INTO `tbl_disposisi` VALUES (119, 'Kasi Pais', 'Tindak lanjuti', 'Biasa', '2020-01-29', 'Tindak lanjuti', 101, 9);
INSERT INTO `tbl_disposisi` VALUES (120, 'Kasi Pais', 'Tindak lanjuti', 'Biasa', '2020-01-29', 'Tindak lanjuti', 100, 9);
INSERT INTO `tbl_disposisi` VALUES (121, 'Pak Suparlis ..cukupi', 'Cukupi dan tl', 'Biasa', '2020-01-30', 'Tl', 109, 2);
INSERT INTO `tbl_disposisi` VALUES (122, 'UP', 'Tindak lanjuti ', 'Biasa', '2020-01-30', 'Cukupi', 108, 0);
INSERT INTO `tbl_disposisi` VALUES (123, 'Humas', 'Agendakan', 'Biasa', '2020-01-30', 'Saya Hadir', 107, 9);
INSERT INTO `tbl_disposisi` VALUES (124, 'Perencana', 'Tindak lanjuti', 'Segera', '2020-01-30', 'Tindak lanjuti', 106, 0);
INSERT INTO `tbl_disposisi` VALUES (125, 'Pendma', 'untuk diketahui', 'Biasa', '2020-01-31', 'Untuk diketahui', 110, 9);
INSERT INTO `tbl_disposisi` VALUES (126, 'Keuangan', 'Tindak lanjuti', 'Biasa', '2020-01-31', 'Tindak lanjuti', 111, 9);
INSERT INTO `tbl_disposisi` VALUES (127, 'Plt Kasubag TU', 'Tindak lanjuti', 'Biasa', '2020-02-03', 'Cukupi Datanya', 112, 9);
INSERT INTO `tbl_disposisi` VALUES (128, 'PHU', 'Tindak lanjuti', 'Segera', '2020-02-03', 'Tindak lanjuti', 113, 9);
INSERT INTO `tbl_disposisi` VALUES (129, 'Sub.keuangan', 'Mohon diperhatikan kembali', 'Biasa', '2021-05-04', 'Dibantu dengan yang lainnya', 115, 1);
INSERT INTO `tbl_disposisi` VALUES (130, 'null', 'Mohon ditinjau kembali', 'Biasa', '2021-05-07', '-', 114, 1);
INSERT INTO `tbl_disposisi` VALUES (131, 'DD', 'DD', 'Rahasia', '2021-05-12', 'DD', 117, 1);
INSERT INTO `tbl_disposisi` VALUES (132, '', '', 'Biasa', '', '', 118, 1);

-- ----------------------------
-- Table structure for tbl_surat_keluar
-- ----------------------------
DROP TABLE IF EXISTS `tbl_surat_keluar`;
CREATE TABLE `tbl_surat_keluar`  (
  `id_surat` int(10) NOT NULL AUTO_INCREMENT,
  `id_jenis_surat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tujuan` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_surat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `isi` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_catat` date NOT NULL,
  `file` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  `no_agenda` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_surat`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 166 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_surat_keluar
-- ----------------------------
INSERT INTO `tbl_surat_keluar` VALUES (2, '3', 'YBS', '1', 'SURAT TUGAS A.n. M. Afif Nasrulloh, S.T.', 'KP.02.3', '2020-01-06', '2020-01-06', 'surat_keluar2020-01-061.pdf', 'Mengikuti Kegiatan Tindak Lanjut PMA Nomor 19 Tahun 2019', 10, '');
INSERT INTO `tbl_surat_keluar` VALUES (3, '3', 'YBS', '2', 'Mengikuti Kegiatan Worshop Implentasi Pendekatan STEM & Aplikasi Kimia Tingkat Lanjut', 'KP.02.3', '2020-06-09', '2020-01-09', 'surat_keluar2020-01-09.pdf', 'SURAT TUGAS A.n. 1.Dra.  Yani Setyoati, M.Pd     2.Puguh Dwi Cahyono, S.Pd', 10, '');
INSERT INTO `tbl_surat_keluar` VALUES (7, '5', 'Kepala KPPN Madiun', 'Kp.07.2-6', 'Kenaikan Gaji Berkala a.n. Sigit Harianto, S.Pd.', 'Kp.07.2', '2020-01-02', '2020-01-13', 'surat_keluar2020-01-133.pdf', 'Kenaikan Gaji Berkala a.n. Sigit Harianto, S.Pd. NIP 196411121990021002', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (8, '5', 'kepala KPPN Madiun', 'Kp.07.2-7', 'Kenaikan Gaji Berkala a.n. Mustanginah, S.Pd.I', 'Kp.07.2', '2020-01-02', '2020-01-13', 'surat_keluar2020-01-134.pdf', 'Kenaikan Gaji Berkala a.n. Mustanginah, S.Pd.I NIP 196807051994022001', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (10, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-8', 'Rekomendasi Umroh', 'Hj.08', '2020-01-02', '2020-01-13', 'surat_keluar2020-01-136.pdf', 'Rekomendasi Umroh a.n Athallah Bintang Rahagi', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (11, '5', 'Kepala KUA Kecamatan Se Kota Madiun', 'Kp.07.2-10', 'Surat Pengantar Pengiriman Kalender Th. 2020', 'HM.00', '2020-01-02', '2020-01-13', 'surat_keluar2020-01-137.pdf', 'Surat Pengantar Pengiriman Kalender Tahun 2020 dari KUA ke Masjid/Musholla', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (12, '5', 'Kepala Kantor Imigrasi kelas II Madiun', 'Kp.07.2-11', 'Rekomendasi Umroh', 'Hj.08', '2020-01-03', '2020-01-13', 'surat_keluar2020-01-138.pdf', 'Rekomendasi Umroh a.n Herry Budiharto', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (13, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-12', 'Rekomendasi Umroh', 'Hj.08', '2020-01-03', '2020-01-13', 'surat_keluar2020-01-139.pdf', 'Rekomendasi Umroh a.n. Patimasang', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (14, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-13', 'Pengantar Pengiriman Berkas Perkim', 'Hj.02', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1310.pdf', 'Pengantar pengiriman berkas perkim terkait penerbitan paspor untuk jamaah haji Kota Madiun Tahun 1441 H/ 2020', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (15, '5', 'Calon Jamaah Haji Kota Madiun Tahun 1441 H/ 2020 M', 'Kp.07.2-14', 'Undangan Pembuatan Paspor Haji Bagi CJH Tahun 2020', 'Hj.02', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1311.pdf', 'Surat Undangan Pembuatan Paspor CJH tahun 2020', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (16, '5', 'YBS', 'Kp.07.2-15', 'Surat Rekomendasi', 'PP.007', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1312.pdf', 'Surat Rekomendasi Kepala Madrasah Diniyah Takmiliyah Ulul Albab Tingkat Ula', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (17, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-16', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1313.pdf', 'Rekomendasi Umroh a.n. Ilham Satria Sulistyo', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (18, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-17', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1314.pdf', 'Rekomendasi Umroh a.n. Titik Puji Lestari', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (19, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-18', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1315.pdf', 'Rekomendasi Umroh a.n. Khalifah', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (20, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-19', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1316.pdf', 'Rekomendasi Umroh a.n. Anton Sugiarto', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (21, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-20', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1317.pdf', 'Rekomendasi Umroh a.n. Elfiana Nur Citra Dewi', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (22, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-21', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1318.pdf', 'Rekomendasi Umroh a.n. Dahlianawati', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (23, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-22', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1319.pdf', 'Rekomendasi Umroh a.n. Sri Sunarti', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (24, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-23', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1320.pdf', 'Rekomendasi Umroh a.n. Bambang Hariyadi', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (25, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-24', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1321.pdf', 'Rekomendasi Umroh a.n. Heru Susantyo', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (26, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-25', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1322.pdf', 'Rekomendasi Umroh a.n Ilham Miftahul Fathin', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (27, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-26', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-13', 'surat_keluar2020-01-1323.pdf', 'Rekomendasi Umroh a.n. Delvin Riezky Romadhoni', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (28, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-27', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-14.pdf', 'Rekomendasi Umroh a.n. Delvin Riezky Romadhoni', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (29, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-28', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-141.pdf', 'Rekomendasi Umroh a.n. Zaki Putra Prabowo', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (30, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-29', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-142.pdf', 'Rekomendasi Umroh a.n. Inge Sari Novita', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (31, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-30', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-143.pdf', 'Rekomendasi Umroh a.n. Ardelia Agita Prabowo', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (32, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-31', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-144.pdf', 'Rekomendasi Umroh a.n. Abdul Rasyid Farid', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (33, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-32', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-145.pdf', 'Rekomendasi Umroh a.n Sumilah Wage Ahmad', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (34, '5', 'Plt. Kepala Kanwil Provinsi Jawa Timur', 'Kp.07.2-33', 'Usul SK Kenaikan Jenjang Jabatan Guru a.n. Puguh Dwi Cahyono, S.Pd.', 'kp.07.1', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-146.pdf', 'Pengiriman Berkas Usul Mutasi Jabatan Guru a.n. Puguh Dwi Cahyono, S.Pd.', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (35, '5', 'Plt. Kepala Kanwil Provinsi Jawa Timur', 'Kp.07.2-34', 'Usul Kenaikan Pangkat Periode April 2020 (Jakarta) a.n. Puguh Dwi Cahyono, S.Pd, dkk 9 Orang', 'kp.07.1', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-147.pdf', 'Usul kenaikan pangkat PNS di lingkungan Kantor Kemenag Kota Madiun periode 2020 (Jakarta)', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (36, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-35', 'Rekomendasi Umroh', 'Hj.08', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-148.pdf', 'Rekomendasi Umroh a.n. Dessy Sulia Wijayanti', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (37, '5', 'Operator Pendataan Ujian Nasional (MI,MTs,MA)', 'Kp.07.2-36', 'Undangan', 'PP.00', '2020-01-06', '2020-01-14', 'surat_keluar2020-01-149.pdf', 'Undangan Rapat Koordinasi Pendataan Capesun Tahun 2019/2020', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (38, '5', 'Komandan Korem 081', 'Kp.07.2-37', 'Jadwal Petugas Imam dan Khotib', 'BA.01', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1410.pdf', 'Jadwal Petugas Imam dan Khotib Sholat Jum\'at di Masjid Jendral Sudirman tahun 2020', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (39, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-38', 'Rekomendasi Umroh', 'Hj.08', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1411.pdf', 'Rekomendasi Umroh a.n. Siti Alfiah', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (40, '5', 'Kepala Kantor Kelas III Ponorogo', 'Kp.07.2-39', 'Rekomendasi Umroh', 'Hj.08', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1412.pdf', 'Rekomendasi Umroh a.n. Yuli Jumiarti', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (41, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-40', 'Rekomendasi Umroh', 'Hj.08', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1413.pdf', 'Rekomendasi Umroh a.n. Evi Herawati', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (42, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-41', 'Rekomendasi Umroh', 'Hj.08', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1414.pdf', 'Rekomendasi Umroh a.n. Rizaldi Noor Himawan', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (43, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-42', 'Rekomendasi Umroh', 'Hj.08', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1415.pdf', 'Rekomendasi Umroh a.n. Nanik Setyonengrum', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (44, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-43', 'Rekomendasi Umroh', 'Hj.08', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1416.pdf', 'Rekomendasi Umroh a.n. Endang Suasnawati', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (45, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-44', 'Rekomendasi Umroh', 'Hj.08', '2020-01-07', '2020-01-14', 'surat_keluar2020-01-1417.pdf', 'Rekomendasi Umroh a.n. Solikah', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (46, '5', '1. Penyuluh Agama Fungsional 2. Penyuluh Agama Islam Non PNS', 'Kp.07.2-45', 'Undangan', 'HM.01', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1418.pdf', 'Undangan Pembinaan', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (47, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-46', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1419.pdf', 'Rekomendasi Umroh a.n. Ranny Mahayu Ferasti', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (48, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-47', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1420.pdf', 'Rekomendasi Umroh a.n. Heru Sutantiyo', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (49, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-48', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1421.pdf', 'Rekomendasi Umroh a.n rochmad Samsudin', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (50, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-49', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1422.pdf', 'Rekomendasi Umroh a.n. Mohammad Nasih Masruri', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (51, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-50', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1423.pdf', 'Rekomendasi Umroh a.n Teguh', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (52, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-51', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1424.pdf', 'Rekomendasi Umroh a.n Arifin Ibo Kuswanto', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (53, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-52', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1425.pdf', 'Rekomendasi Umroh a.n Latiful Habibi', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (54, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-53', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1426.pdf', 'Rekomendasi Umroh a.n. Sumarsitah', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (55, '5', 'Kepala Kantor Imigrasi Kelas III Ponorogo', 'Kp.07.2-54', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1427.pdf', 'Rekomendasi Umroh a.n. Titik Asmiatin', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (56, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-55', 'Rekomendasi Umroh', 'Hj.08', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1428.pdf', 'Rekomendasi Umroh a.n Siti Nurrohmah', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (57, '5', 'Kepala Kanwil Provinsi Jawa Timur', 'Kp.07.2-56', 'Permohonan Tanda Tangan SiEka', 'KP.07.6', '2020-01-08', '2020-01-14', 'surat_keluar2020-01-1429.pdf', 'Permohonan Tanda Tangan Jurnal Kegiatan SiEka Kepala Kantor Kemenag Kota Madiun selama 2019', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (58, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-57', 'Rekomendasi Umroh', 'Hj.08', '2020-01-09', '2020-01-14', 'surat_keluar2020-01-1430.pdf', 'Rekomendasi Umroh a.n Krisdiana', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (59, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-58', 'Rekomendasi Umroh', 'Hj.08', '2020-01-09', '2020-01-15', 'surat_keluar2020-01-15.pdf', 'Rekomendasi Umroh a.n Sulisetiani', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (60, '5', 'Kepala KPPN Madiun', 'Kp.07.2-59', 'Kenaikan Gaji Berkala a.n. Mukarromah, S.Pd', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-151.pdf', 'KGB a.n Mukarromah, S.Pd. NIP. 196810181994032003', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (61, '5', 'Kepala KPPN Madiun', 'Kp.07.2-60', 'Kenaikan Gaji Berkala a.n. Nur Waingah, S.Ag', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-152.pdf', 'KGB a.n. Nur Wakingah, S.Ag NIP. 197211152007012016', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (62, '5', 'Kepala KPPN Madiun', 'Kp.07.2-61', 'Kenaikan Gaji Berkala a.n. Nurul Faizah, S.Ag', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-153.pdf', 'KGB a.n Nurul Faizah, S.Ag. NIP 196003081983032003', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (63, '5', 'Kepala KPPN Madiun', 'Kp.07.2-62', 'Kenaikan Gaji Berkala a.n. Drs. Edy Purwanto', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-154.pdf', 'KGB Drs. Edy Purwanto NIP 196803261998031003', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (64, '5', 'Kepala KPPN Madiun', 'Kp.07.2-63', 'Kenaikan Gaji Berkala a.n. Mohammad Said Aziz, S.Ag', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-155.pdf', 'KGB a.n Mohammad Said Aziz, S.Ag NIP 196704131993031005', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (65, '5', 'Kepala KPPN Madiun', 'Kp.07.2-64', 'Kenaikan Gaji Berkala a.n. Mochamad Arif Fauzi, S.Ag., M.H.I', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-156.pdf', 'KGB a.n Mochamad Arif Fauzi, S.Ag., M.H.I NIP. 197202071998031003', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (66, '5', 'Kepala KPPN Madiun', 'Kp.07.2-65', 'Kenaikan Gaji Berkala a.n. Lilik Pamujiono, S.Th', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-157.pdf', 'KGB a.n  Lilik Pamujiono, S.Th NIP 196012221994031002', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (67, '5', 'Kepala KPPN Madiun', 'Kp.07.2-66', 'Kenaikan Gaji Berkala a.n. Kusyanto, S.PdI', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-158.pdf', 'KGB Kusyanto, S.PdI NIP 196906261994031006', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (68, '5', 'Kelapa KPPN Madiun', 'Kp.07.2-67', 'Kenaikan Gaji Berkala a.n. Drs. Sudarmadi, M.Ag', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-159.pdf', 'KGB Drs. Sudarmadi, M.Ag NIP. 196702041993031006', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (69, '5', 'Kepala KPPN Madiun', 'Kp.07.2-68', 'Kenaikan Gaji Berkala a.n. Drs. Mu\'arifin', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1510.pdf', 'KGB  Drs. Mu\'arifin NIP. 196203141994031001', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (70, '5', 'Kepala KPPN Madiun', 'Kp.07.2-69', 'Kenaikan Gaji Berkala a.n. Drs. Dwi Widodo M.K.Pd', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1511.pdf', 'KGB Drs. Dwi Widodo M.K.Pd NIP. 196701311994031003', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (71, '5', 'Kepala KPPN Madiun', 'Kp.07.2-70', 'Kenaikan Gaji Berkala a.n. Dra. Ni\'mah El Huda, M.Pd.I', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1512.pdf', 'KGB Dra. Ni\'mah El Huda, M.Pd.I NIP.196409221994032001', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (72, '5', 'Kepala KPPN Madiun', 'Kp.07.2-71', 'Kenaikan Gaji Berkala a.n. Drs. Kambali, M.Pd.I', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1513.pdf', 'KGB Drs. Kambali, M.Pd.I NIP.196509121993031002', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (73, '5', 'Kepala KPPN Madiun', 'Kp.07.2-72', 'Kenaikan Gaji Berkala a.n. Drs. Ahmad Khotib, M.Si', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1514.pdf', 'KGB Drs. Ahmad Khotib, M.Si NIP. 196505011992031001', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (74, '5', 'Kepala KPPN Madiun', 'Kp.07.2-73', 'Kenaikan Gaji Berkala a.n. Dra. Mukarromah', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1515.pdf', 'KGB Dra. Mukarromah NIP.196801191993032001', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (75, '5', 'Kepala KPPN Madiun', 'Kp.07.2-74', 'Kenaikan Gaji Berkala a.n. Binarni Helihastuti, S.PAK', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1516.pdf', 'KGB Binarni Helihastuti, S.PAK NIP. 196506112000032001', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (76, '5', 'Kepala KPPN Madiun', 'Kp.07.2-75', 'Kenaikan Gaji Berkala a.n. ST. Andri Widiyanti, S.Pd', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1517.pdf', 'KGB ST. Andri Widiyanti, S.Pd NIP.1974412262000032001', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (77, '5', 'Kepala KPPN Madiun', 'Kp.07.2-76', 'Kenaikan Gaji Berkala a.n. Sukimin, S.Pd', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1518.pdf', 'KGB Sukimin, S.Pd NIP. 196607152000031001', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (78, '5', 'Kepala KPPN Madiun', 'Kp.07.2-77', 'Kenaikan Gaji Berkala a.n. Maria Magdalena Tumani, S.Pd', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1519.pdf', 'KGB Maria Magdalena Tumani, S.Pd NIP.196805082000032002', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (79, '5', 'Kepala KPPN Madiun', 'Kp.07.2-78', 'Kenaikan Gaji Berkala a.n. Murlani, S.Pd', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1520.pdf', 'KGB Murlani, S.Pd NIP.196903181994032001', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (80, '5', 'Kepala KPPN Madiun', 'Kp.07.2-79', 'Kenaikan Gaji Berkala a.n. Drs. Yulius Suparlis', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1521.pdf', 'KGB Drs. Yulius Suparlis NIP.196108082000031001', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (81, '5', 'Kepala KPPN Madiun', 'Kp.07.2-80', 'Kenaikan Gaji Berkala a.n. Amil Wahib, S.Ag', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1522.pdf', 'KGB Amil Wahib, S.Ag NIP.197301262000031001', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (82, '5', 'Kepala KPPN Madiun', 'Kp.07.2-81', 'Kenaikan Gaji Berkala a.n. Drs. Theresia Dwi Widiasih', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1523.pdf', 'KGB Drs. Theresia Dwi Widiasih NIP.196711032000032001', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (83, '5', 'Kepala KPPN Madiun', 'Kp.07.2-82', 'Kenaikan Gaji Berkala a.n. Umi Masiah, S.Ag', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1524.pdf', 'KGB Umi Masiah, S.Ag NIP.1972072222000032003', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (84, '5', 'Kepala KPPN Madiun', 'Kp.07.2-83', 'Kenaikan Gaji Berkala a.n. Amar Ma\'ruf, S.Sos', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1525.pdf', 'KGB Amar Ma\'ruf, S.Sos NIP.196806251993031004', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (85, '5', 'Kepala KPPN Madiun', 'Kp.07.2-84', 'Kenaikan Gaji Berkala a.n. Sri Kusnuryani, S.Ag', 'Kp.07.2', '2020-01-10', '2020-01-15', 'surat_keluar2020-01-1526.pdf', 'KGB Sri Kusnuryani, S.Ag NIP.196607182000032001', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (86, '5', 'Kepala KPPN Madiun', 'Kp.07.2-85', 'Kenaikan Gaji Berkala a.n. Zumaroch Hikmawana, S.Sos', 'Kp.07.2', '2020-01-10', '2020-01-16', 'surat_keluar2020-01-16.pdf', 'KGB Zumaroch Hikmawana, S.Sos NIP.196709061991032003', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (87, '5', 'Kepala KPPN Madiun', 'Kp.07.2-86', 'Kenaikan Gaji Berkala a.n. Sri Hartini, S.Pd.K', 'Kp.07.2', '2020-01-10', '2020-01-16', 'surat_keluar2020-01-161.pdf', 'KGB Sri Hartini, S.Pd.K NIP.197809102009012011', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (88, '5', 'Kepala KPPN Madiun', 'Kp.07.2-87', 'Kenaikan Gaji Berkala a.n. Zuhrotun Umamah, S.Pd.I', 'Kp.07.2', '2020-01-10', '2020-01-16', 'surat_keluar2020-01-162.pdf', 'KGB Zuhrotun Umamah, S.Pd.I NIP.197011222000032001', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (89, '5', 'Kepala KPPN Madiun', 'Kp.07.2-88', 'Kenaikan Gaji Berkala a.n. Drs. Munir, M.Hum', 'Kp.07.2', '2020-01-10', '2020-01-16', 'surat_keluar2020-01-163.pdf', 'KGB Drs. Munir, M.Hum NIP.196601211992031001', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (96, '5', 'Kepala Kantor Imigrasi Kelas II Madiun', 'Kp.07.2-95', 'Rekomendasi', 'Hj.08', '2020-01-10', '2020-01-17', 'surat_keluar2020-01-17.pdf', 'Rekomendasi Pengajuan Penambahan Nama pada Paspor a.n Eti Erni Handawati', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (97, '5', 'Kepala KPPN Madiun', 'Kp.07.2-96', 'Permohonan Persetujuan UP Kartu Kredit Pemerintah', 'Ku.01.2', '2020-01-13', '2020-01-17', 'surat_keluar2020-01-171.pdf', 'Pengajuan Permohonan Pengecualian Pengimplementasian KKP', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (98, '3', 'YBS', '97', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-20.pdf', 'Surat Tugas a.n. Fi\'l Krisna Setiawan', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (99, '3', 'YBS', '98', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-201.pdf', 'Surat Tugas a.n Zainal Arifin', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (100, '3', 'YBS', '99', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-202.pdf', 'Surat Tugas a.n Titik Sulastri', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (101, '3', 'YBS', '100', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-203.pdf', 'Surat Tugas a.n Siti Juwariyah', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (102, '3', 'YBS', '101', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-204.pdf', 'Surat Tugas a.n Tunggul Sisharmiko', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (103, '3', 'YBS', '102', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-205.pdf', 'Surat Tugas a.n Shodiqin', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (104, '3', 'YBS', '103', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-206.pdf', 'Surat Tugas a.n R. Agus Anggoro Seto', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (105, '3', 'YBS', '104', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Manguharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-207.pdf', 'Surat Tugas a.n Mustaqim', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (106, '3', 'YBS', '105', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-208.pdf', 'Surat Tugas a.n Imam Musttaqin', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (107, '3', 'YBS', '106', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-209.pdf', 'Surat Tugas a.n Sholeh Marzuki', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (108, '3', 'YBS', '107', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2010.pdf', 'Surat Tugas a.n Muhammad Munawir', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (109, '3', 'YBS', '108', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2011.pdf', 'Surat Tugas a.n Wiranto', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (110, '3', 'YBS', '109', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2012.pdf', 'Surat Tugas a.n Suyoto', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (111, '3', 'YBS', '110', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2013.pdf', 'Surat Tugas a.n Marsum', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (112, '3', 'YBS', '111', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2014.pdf', 'Surat Tugas a.n Aqib Ibnu Hambal', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (113, '3', 'YBS', '112', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Kartoharjo', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2015.pdf', 'Surat Tugas a.n Moch. Muslimin', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (114, '3', 'YBS', '113', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2016.pdf', 'Surat Tugas a.n Sugeng Bektiadi', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (115, '3', 'YBS', '114', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2017.pdf', 'Surat Tugas a.n Agies Triana Dewi', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (116, '3', 'YBS', '115', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2018.pdf', 'Surat Tugas a.n Andri Fahruddin Zuhri', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (117, '3', 'YBS', '116', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2019.pdf', 'Surat Tugas a.n Chomarudin', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (118, '3', 'YBS', '117', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2020.pdf', 'Surat Tugas a.n Slamet Riadi', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (119, '3', 'YBS', '118', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2021.pdf', 'Surat Tugas a.n Sri Indahwati', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (120, '3', 'YBS', '119', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2022.pdf', 'Surat Tugas a.n Ahmad Dekriyanto', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (121, '3', 'YBS', '120', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2023.pdf', 'Surat Tugas a.n Bayu Warsito', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (122, '3', 'YBS', '121', 'Surat Tugas Melaksanakan Tugas sebagai Penyuluh Agama Islam Non PNS KUA Kec. Taman', 'Kp.02.3', '2020-01-02', '2020-01-20', 'surat_keluar2020-01-2024.pdf', 'Surat Tugas a.n Zainal Faizin', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (123, '3', 'YBS', '122', 'Surat Tugas Mengikuti Kegiatan Rakor Sinergi Pemerintahan Prov. Jawa Timur Tahun 2020 Bersama Ketua KPK RI', 'Kp.02.3', '2020-01-08', '2020-01-20', 'surat_keluar2020-01-2025.pdf', 'Surat Tugas a.n 1. Drs. Munir, M.Hum 2. Abdul Aziz Setyo Budi', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (124, '3', 'YBS', '123', 'Surat Tugas Mengikuti Kegiatan Rapat Koordinasi Pengawas PAK', 'Kp.02.3', '2020-01-08', '2020-01-20', 'surat_keluar2020-01-2026.pdf', 'Surat Tugas a.n Suswati Siwi Utami, S.Th, M.Pd.K', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (125, '3', 'YBS', '124', 'Surat Tugas Koordinasi Tugas Kepengawasan Pendidik Agama Katolik Thn. 2020 dan Melengkapi Berkas TPP Guru, Pengawas Triwulan IV TA. 2019', 'Kp.02.3', '2020-01-08', '2020-01-20', 'surat_keluar2020-01-2027.pdf', 'Surat Tugas a.n Maria Magdalena Tumani, S.Pd', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (126, '3', 'YBS', '125', 'Surat Tugas Panitia Penyusunan Soal USBN Mapel Pendidikan Agama Katolik', 'Kp.02.3', '2020-01-09', '2020-01-21', 'surat_keluar2020-01-21.pdf', 'Surat Tugas a.n St. Andri Widiyanti, S.Pd di Nite & Day Hotel Surabaya', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (127, '3', 'YBS', '126', 'Surat Tugas Mengikuti Kegiatan Sharing PTSP', 'Kp.02.3', '2020-01-09', '2020-01-21', 'surat_keluar2020-01-211.pdf', 'Surat Tugas Drs. Munir, M.Hum dkk (12 orang) di Kemenag Kab. Tuban', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (128, '3', 'YBS', '127', 'Surat Tugas Menghadiri Kegiatan Peresmian Pusat Layanan Haji dan Umroh Terpadu (PLHUT) di Lingkungan Kanwil Prov. Jatim', 'Kp.02.3', '2020-01-10', '2020-01-21', 'surat_keluar2020-01-212.pdf', 'Surat Tugas Mochamad Arif F, S.Ag., M.H.I di Kan Kemenag Kab. Malang', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (129, '3', 'YBS', '128', 'Surat Tugas Mengikuti Kegiatan Rakor Seksi PD Pontren Se Wilker Madiun', 'Kp.02.3', '2020-01-13', '2020-01-21', 'surat_keluar2020-01-213.pdf', 'Surat Tugas a.n Drs. Ahmad Khotib, M.Si, Sumardiono, S.E, Ridwan di Kan Kemenag Kabupaten Magetan', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (130, '3', 'YBS', '129', 'Surat Tugas Mengikuti Kegiatan Rapat Evaluasi KSM Porseni', 'Kp.02.3', '2020-01-14', '2020-01-21', 'surat_keluar2020-01-214.pdf', 'Surat Tugas a.n Drs. Kambali, M.Pd.I dkk (3 orang) di Novotel Surabaya Hotel & Suites', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (131, '3', 'YBS', '130', 'Surat Tugas Rapat Koordinasi Kebijakan Kepengawasan Tahun 2020', 'Kp.02.3', '2020-01-15', '2020-01-21', 'surat_keluar2020-01-215.pdf', 'Surat Tugas a.n Drs. Munir, M.Hum di Hotel Borobudur Jakarta', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (132, '3', 'YBS', '131', 'Surat Tugas Penyelesaian Dokumen Jamaah Haji Tahun 1441H/2020M', 'Kp.02.3', '2020-01-16', '2020-01-21', 'surat_keluar2020-01-216.pdf', 'Surat Tugas a.n Datik Ardiyah, S.E , Kasdar', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (133, '3', 'YBS', '132', 'Surat Tugas Penyelesaian Dokumen Jamaah Haji Tahun 1441H/2020M', 'Kp.02.3', '2020-01-16', '2020-01-21', 'surat_keluar2020-01-217.pdf', 'Surat Tugas a.n Mochamad Arif F, S.Ag., M.H.i di Kantor Imigrasi Kelas II Madiun', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (134, '3', 'YBS', '133', 'Surat Tugas Undangan', 'Kp.02.3', '2020-01-16', '2020-01-21', 'surat_keluar2020-01-218.pdf', 'Surat Tugas a.n Dr. Nanik Nurhayati, M.Pd di Aula Kanwil Jatim', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (135, '3', 'YBS', '134', 'Surat Tugas Perihal Evaluasi Progres Pelaksanaan Program MA Vokasi di Jawa Timur 2019', 'Kp.02.3', '2020-01-17', '2020-01-21', 'surat_keluar2020-01-219.pdf', 'Surat Tugas a.n Drs. Imam Tafsir, M.Pd, Zainal Arifin, S.Ag., M.Pd.I', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (136, '3', 'YBS', '135', 'Surat Tugas Undangan Rakor Capesun', 'Kp.02.3', '2020-01-17', '2020-01-21', 'surat_keluar2020-01-2110.pdf', 'Surat Tugas a.n Agus Romadlon, S.T di Aula Kanwil Jatim', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (137, '3', 'YBS', '136', 'Surat Tugas Mengikuti Kegiatan Pembinaan ASN Di Lingkungan Kemenag. Kab./Kota se Jatim', 'Kp.02.3', '2020-01-21', '2020-01-23', 'surat_keluar2020-01-23.pdf', 'Surat Tugas a.n Drs. Munir, M.Hum dan Abdul Aziz Setyo Budi di Aula Kanwil Kemenag Prov. Jatim', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (138, '3', 'YBS', '137', 'Surat Tugas Mengikuti Rakor Berkaitan dengan Pembinaan ASN di Lingkungan Kemenag. Kab./Kota se Jatim', 'Kp.02.3', '2020-01-21', '2020-01-23', 'surat_keluar2020-01-231.pdf', 'Surat Tugas a.n Drs. Munir, M.Hum dan Abdul Aziz Setyo Budi di Kantor Kemenag Kab. Nganjuk', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (139, '3', 'YBS', '138', 'Surat Tugas Mengikuti Kegiatan Manejemen Data EMIS Pondok Pesantren', 'Kp.02.3', '2020-01-21', '2020-01-23', 'surat_keluar2020-01-232.pdf', 'Surat Tugas a.n Sumardiono, S.E', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (140, '3', 'YBS', '139', 'Surat Tugas Sosialisasi SNPDB MAN IC, MAN PK dan MAKN Tahun 2020', 'Kp.02.3', '2020-01-21', '2020-01-23', 'surat_keluar2020-01-233.pdf', 'Surat Tugas a.n Drs. M. Fuad Hariri, M.Pd.I di Aula Al Ikhlas II Kemenag Prov. Jatim', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (141, '3', 'YBS', '140', 'Surat Tugas Rapat Teknis Rekrutmen Calon Petugas Penyelenggara Ibadah Haji Tahun 1441 H/2020 M', 'Kp.02.3', '2020-01-22', '2020-01-23', 'surat_keluar2020-01-234.pdf', 'Surat Tugas a.n Mochamad Arif F., S.Ag., M.HI dan Agus Nirwana Putra, S.E di Aula Bidang PHU Kanwil Kemenag Prov. Jatim', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (142, '3', 'YBS', '141', 'Surat Tugas Sosialisasi POS Ujian Madrasah Tahun Pelajaran 2019/2020', 'Kp.02.3', '2020-01-22', '2020-01-23', 'surat_keluar2020-01-235.pdf', 'Surat Tugas a.n Sigit Harianto, S.Pd di Ruang Aula 3 Kanwil Kemenag Prov. Jatim', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (143, '3', 'YBS', '142', 'Surat Tugas Pengawas Sekolah Madya Pendidikan Agama Kristen Tingkat Menengah Pada SMP dan SMA se Kota Madiun', 'Kp.02.3', '2020-01-22', '2020-01-23', 'surat_keluar2020-01-236.pdf', 'Surat Tugas a.n Suswati Siwi Utami, S.Th., M.Pd.K', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (144, '3', 'YBS', '143', 'Surat Tugas Mengikuti Kegiatan Rakor PAIS se Wilker Madiun', 'Kp.02.3', '2020-01-22', '2020-01-23', 'surat_keluar2020-01-237.pdf', 'Surat Tugas a.n Drs. Khoirul Kamami, M.HI dkk (9 Orang) di Rumah Makan Bu Setu Gandu Magetan', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (145, '3', 'YBS', '144', 'Surat Tugas Mengikuti Kegiatan Permintaan SPTJM BOS dan BOP Tahun 2020', 'Kp.02.3', '2020-01-22', '2020-01-31', 'surat_keluar2020-01-31.pdf', 'Surat Tugas a.n Akbar Rizki Romadhon di Kantor Kemenag Prov. Jatim', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (146, '3', 'YBS', '145', 'Surat Tugas Mengikuti Kegiatan Mengantar Berkas KP Periode Oktober', 'Kp.02.3', '2020-01-27', '2020-01-31', 'surat_keluar2020-01-311.pdf', 'Surat Tugas a.n Siti Fatonah, S.Pd.I di Kanwil Kemenag Prov. Jatim', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (147, '3', 'YBS', '146', 'Surat Tugas Mengurus User ID PPK Pada Satker di Lingkungan Kemenag Kota Madiun', 'Kp.02.3', '2020-01-27', '2020-01-31', 'surat_keluar2020-01-312.pdf', 'Surat Tugas a.n Eko Rudianto, S.E di Kanwil Kemenag Prov. Jatim', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (148, '3', 'YBS', '147', 'Surat Tugas Dinas', 'Kp.02.3', '2020-01-27', '2020-01-31', 'surat_keluar2020-01-313.pdf', 'Surat Tugas a.n Milub Tri Setyowati, A.Ma di Kantor Dinas Pendidikan Prov. Jawa Timur', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (149, '3', 'YBS', '148', 'Surat Tugas Mengikuti Kegiatan Sosialisasi Penyelenggaraan Ujian Madrasah Tahun Pelajaran 2019/2020', 'Kp.02.3', '2020-01-29', '2020-01-31', 'surat_keluar2020-01-314.pdf', 'Surat Tugas a.n 1. Drs. Muarifin 2. Drs. Kambali, M.Pd.I 3. Sunarwan, S.Pd.I 4. Drs. M. Fuad Hariri, M.Pd.I 5. Drs. Imam Tafsir, M.Pd 6. Zainal Arifin, S.Ag., M.Pd.I di Aula 2 Kanwil Kemenag Prov. Jatim', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (150, '3', 'YBS', '149', 'Surat Tugas Menghadiri Undangan Koordinasi Terkait Hasil Pretest Tahun 2019, Aplikasi Siaga Tahun 2020', 'Kp.02.3', '2020-01-30', '2020-01-31', 'surat_keluar2020-01-315.pdf', 'Surat Tugas a.n Siti Nurjanah, S.Pd di Kantor Kemenag Kab. Ponorogo', 19, '');
INSERT INTO `tbl_surat_keluar` VALUES (151, '3', 'BAPPEDA', '150', 'Pengujian Sistem Aplikasi Arsip Surat-Menyurat', '005', '2021-05-01', '2021-05-01', 'surat_keluar2021-05-011.pdf', 'Map 6', 1, 'null');
INSERT INTO `tbl_surat_keluar` VALUES (152, '1', 'BAPPEDA', '470/230/2021', 'Pengujian Sistem Aplikasi Arsip Surat-Menyurat', '470', '2021-05-05', '2021-05-13', 'null', 'mmasdad', 1, 'null');
INSERT INTO `tbl_surat_keluar` VALUES (153, '3', 'BAPPEDA', '152', 'Tes Aplikasi ttttttttttttttttttttttttttttttttttttttttttttttttttttttt', 'asdsad', '2021-05-07', '2021-05-15', 'surat_keluar2021-05-018.pdf', 'sdas', 1, 'null');
INSERT INTO `tbl_surat_keluar` VALUES (154, '1', 'BAPPEDA', '153', 'asdad', 'adsad', '2021-04-30', '2021-05-06', 'surat_keluar2021-05-02.docx', 'asdad', 1, 'null');
INSERT INTO `tbl_surat_keluar` VALUES (155, '1', 'asd', '470/230/2021', 'ada', 'ads', '2021-05-14', '2021-05-02', 'surat_keluar2021-05-02.pdf', 'asdad', 1, 'null');
INSERT INTO `tbl_surat_keluar` VALUES (156, '1', 'asd', '470/230/2021', 'ada', 'ads', '2021-05-14', '2021-05-02', 'surat_keluar2021-05-021.pdf', 'asdad', 1, 'null');
INSERT INTO `tbl_surat_keluar` VALUES (157, '4', 'BAPPEDA', 'AA232', 'asda', 'asdsad', '1970-01-01', '2021-05-02', 'surat_keluar2021-05-022.pdf', 'asdad', 1, 'null');
INSERT INTO `tbl_surat_keluar` VALUES (158, '4', 'BAPPEDA', '157', 'Pengujian Sistem Aplikasi Arsip Surat-Menyurat', '005', '2021-05-05', '2021-05-02', 'surat_keluar2021-05-023.pdf', 'asdad', 1, 'null');
INSERT INTO `tbl_surat_keluar` VALUES (159, '1', 'KALCA', '158', 'Pengujian Sistem Aplikasi Arsip Surat-Menyurat', 'adsadaa', '2021-05-14', '2021-05-02', 'null', 'asdad', 1, 'null');
INSERT INTO `tbl_surat_keluar` VALUES (160, '4', 'BAPPEDA', '159', 'Pengujian Sistem Aplikasi Arsip Surat-Menyurat', '-', '2021-05-07', '2021-05-02', 'surat_keluar2021-05-025.pdf', 'adasd', 1, 'null');
INSERT INTO `tbl_surat_keluar` VALUES (161, '7', 'Abang sebelah', '--164', 'Pengujian Sistem Aplikasi Arsip Surat-Menyurat', '005', '2021-05-10', '2021-05-02', 'null', 'asd', 1, '005/164');
INSERT INTO `tbl_surat_keluar` VALUES (162, '1', 'Kemenag', '162', 'Mohon Ijin Pakai Lahan', '012', '2021-05-02', '2021-05-02', 'null', 'tes', 1, '012/163/2021');
INSERT INTO `tbl_surat_keluar` VALUES (163, '4', 'FFG4', '162', 'Pengujian Sistem Aplikasi Arsip Surat-Menyurat', '3423', '2021-05-11', '2021-05-02', 'surat_keluar2021-05-025.pdf', 'asd', 1, 'null');
INSERT INTO `tbl_surat_keluar` VALUES (164, '1', 'Abang sebelahs', '163', 'Pengujian Sistem Aplikasi Arsip Surat-Menyurats ', '005', '2021-05-05', '2021-05-02', 'null', 'asdad', 1, 'FDD');
INSERT INTO `tbl_surat_keluar` VALUES (165, '3', 'Dinas Kesehatan', '164', 'Permintaan Vaksinasi', '050', '2021-05-03', '2021-05-03', 'surat_keluar2021-05-03.pdf', '-', 1, '050/164/2021');

-- ----------------------------
-- Table structure for tbl_surat_masuk
-- ----------------------------
DROP TABLE IF EXISTS `tbl_surat_masuk`;
CREATE TABLE `tbl_surat_masuk`  (
  `id_surat` int(10) NOT NULL AUTO_INCREMENT,
  `no_agenda` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_surat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `asal_surat` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `isi` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `indeks` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `file` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  `disposisi` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_surat`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 119 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_surat_masuk
-- ----------------------------
INSERT INTO `tbl_surat_masuk` VALUES (11, '12', 'B.05', 'Kanwil', 'Undangan', 'Hm.01', 'Kw', '2002-03-07', '2019-12-30', '1577691211file_surat.jpg', 'Penting', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (12, '22', '12345', 'Kanwil', 'MPA', 'Hm.01', 'Kw', '2019-12-30', '2019-12-30', '1577696081file_surat.jpg', 'Menag', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (13, '123456', '4695664', 'Min 1', 'Permohonan pembinaan guru karyawan', '6495', '69', '2020-02-03', '2020-02-04', '1578006181file_surat.jpg', 'Siap', 1, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (14, '1', 'B-9/Kw.13.1.2/OT.00/O1/2020', 'Kanwil Kemenag Prov. Jatim', 'Tindak Lanjut PMA Nomor 19 Tahun 2019', 'OT.00', 'Kw.13.1.2', '2020-01-03', '2020-01-03', '1578023614file_surat.PDF', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (15, '2', 'W15.PAS.PAS.41-UM.01.01-19', 'Balai Pemasyarakatan Kelas II Madiun', 'Permohonan Bantuan Rohaniawan', 'W15', 'PAS', '2020-01-03', '2020-01-03', '1578037661file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (16, '3', 'S-5003/VVPB.16/2019', 'Kementerian Keuangan Republik Indonesia Provinsi Jawa Timur', 'Pengesahan Revisi Pagu Minus Tahun 2019', '5003', 'VVPB', '2019-12-26', '2020-01-06', '1578272332file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (17, '4', '00000', 'Polres Madiun Kota', 'Undangan Pisah Sambut Kepala Kepolisian Resort Madiun Kota', '00', 'Und', '2019-12-31', '2020-01-06', '1578273137file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (18, '5', '0000', 'Pondok Pesantren Al Mujaddadiyyah Kota Madiun', 'Jadwal Khotib Sholat Jumat dan Hari Raya', '000', 'Jdw', '2020-01-01', '2020-01-06', '1578273335file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (19, '6', 'B.177/Kua.13.28.03/OT.01.2/10/2019', 'KUA Kec Taman', 'Laporan Model F dan S', '177', 'Kua', '2019-10-31', '2020-01-06', '1578282914file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (20, '7', '440/28/401.103/2020', 'Dinas Kesehatan Dan Keluarga Berencana', 'Permohonan menugaskan saudara Puji Prasetyo sebagai petugas doa', '440', '28', '2020-01-03', '2020-01-06', '1578283677file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (21, '8', 'B.11/Kw.13.6.1/PW.01/01/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Permintaan Update data Penyerapan PNBP NR dan Bimwin Triwulan I s.d Triwulan IV Tahun 2019', '11', 'Kw', '2020-01-03', '2020-01-06', '1578284497file_surat.pdf', 'b', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (22, '9', 'B.10/Kw.13.6.1/PW.01/01/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Edaran aplikasi E-Dupak Penghulu', '10', 'Kw', '2020-01-03', '2020-01-06', '1578284659file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (23, '10', '000', 'MIN 1 Kota Madiun', 'Surat Perpanjangan Kontrak GTT/PTT MIN 1 Kota Madiun', '00', 'Lmr', '2020-01-03', '2020-01-06', '1578284994file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (24, '11', 'S.5164/VVPB.16/2019', 'Kementerian Keuangan Republik Indonesia Provinsi Jawa Timur', 'Pengesahan Revisi Pagu Minus Thn 2019', '5164', 'VVPB', '2019-12-27', '2020-01-06', '1578292016file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (25, '12', 'B.26/Kk.13.14/3/PP.00.8/01/2020', 'Kementerian Agama Kabupaten Magetan', 'Undangan Rakor Seksi PD Pontren se Wilker Madiun', '26', 'Kk', '2020-01-07', '2020-01-07', '1578381339file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (26, '13', 'B.6568/Kw.13.1.2/Kp.09/11/2019', 'Kementerian Agama Provinsi Jawa Timur', 'Pemberitahuan Usul Pensiun', '6568', 'Kw.13.1.2', '2020-01-26', '2020-01-08', '1578446756file_surat.pdf', 'Biasa', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (27, '14', '000', 'MIN 2 Kota Madiun', 'Surat Perpanjangan Kontrak GTT/PTT MIN 1 Kota Madiun', '00', 'Prj', '2019-12-20', '2020-01-08', '1578447982file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (28, '15', 'B-94/Kw.13.1.2/Kp.07.1/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Ketentuan Penyampaian Penilaian Prestasi Kerja PNS', 'Kp.07.1', 'Kw.13.1.2', '2020-01-07', '2020-01-08', '1578452643file_surat.PDF', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (29, '16', 'B-028/Kk.13.17.1/Hm.00/01/2020', 'Kemenag Kab Tuban', 'Permohonan Nara Sumber', 'Hm.00', 'Kk.13.17.1', '2020-01-07', '2020-01-08', '1578452973file_surat.pdf', 'Penting', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (30, '17', 'B.97/Kw.13.1.2/OT.00/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Tindak Lanjut Pasca Terbitnya PMA Nomor 19 Tahun 2019', 'OT.00', 'Kw.13.1.2', '2020-01-08', '2020-01-08', '1578453217file_surat.PDF', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (31, '18', 'B-100/Kw.13.1.2/Kp.02.3/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Undangan Rakor Sinergi Pemerintahan Prov. Jawa Timur Tahun 2020', 'Kp.02.3', 'Kw.13.1.2', '2020-01-08', '2020-01-08', '1578453397file_surat.PDF', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (32, '19', '893/25/401.205/2020', 'Badan Kesatuan Bangsa Dan Politik', 'Permohonan Personil Tim Kewaspadaan Dini Kota Madiun', '893', '25', '2020-01-08', '2020-01-08', '1578469349file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (33, '20', 'B.0030/In.32.1/HM.01/01/2020', 'IAIN Ponorogo', 'Permohonan Penyelenggaraan Workshop Peningkatan Kapasitas Guru BK dan Sosialisasi SPAM-UM PTKIN 2020', '0030', 'In.32.1', '2020-01-02', '2020-01-08', '1578530721file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (34, '21', '269/PRA/Sosialisasi-Haji/I/2020', 'PT.Pusat  Riyal Amanah', 'Sosialisasi Kantong Kencing', '269', 'PRA', '2020-01-02', '2020-01-09', '1578536630file_surat.pdf', 'Biasa', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (35, '22', '043/POKJAWAS-PAK/01/2019', 'POKJAWAS PAK Provinsi Jawa Timur', 'Undangan Rapat Rutin', 'PAK', 'Pokjawas', '2020-01-07', '2020-01-09', '1578554932file_surat.pdf', 'Biasa', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (36, '23', 'B-023/Mi.13.28.01/PP.00.04/01.2020', 'MIN 1 Kota Madiun', 'Undangan Peresmian PTSP MIN 1 Kota Madiun', 'PP', 'Mi.13.28.01', '2020-01-09', '2020-01-10', '1578617598file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (37, '24', '000', 'Saksi-saksi Yehuwa Sidang Madiun', 'Laporan Bulanan Kegiatan Peribadatan Saksi-saksi Yehuwa', '000', 'Lap', '2020-01-01', '2020-01-09', '1578625352file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (38, '25', 'Peng.YPLI/KP.1.c/122/XII/2019', 'Yayasan Pembina Lembaga Islamiyah', 'SK Yayasan Pembina Lembaga Islamiyah Kota Madiun', 'KP', 'YPLI', '2019-12-31', '2020-01-10', '1578639928file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (39, '26', 'Peng.YPLI/KP.9ec/123/XII/2019', 'Yayasan Pembina Lembaga Islamiyah', 'SK Pengurus Yayasan Pembina Lembaga Islamiyah Kota Madiun', 'KP', 'YPLI', '2020-01-04', '2020-01-10', '1578640041file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (40, '27', 'B-157/Kw.13.6.1/PW.01/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Permintaan Data Tunggakan Jasa Profesi dan Transport PNBP NR Tahun 2019', 'PW.01', 'Kw.13.6.1', '2020-01-10', '2020-01-13', '1578880859file_surat.pdf', 'Penting', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (41, '28', '01/TPQ/TPA/FU/XII/2020', 'TPA Al Muttaqin', 'Izin Pendirian Taman Pendidikan Al Qur an Tahun 2020', 'TPA', 'TPA', '2020-01-01', '2020-01-13', '1578881314file_surat.pdf', 'Biasa', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (42, '29', 'B-10/DJ.I.IV/HM.01.1/01/2020', 'Dirjend Pendidikan Islam', 'Hasil Seleksi Akademik Calon Peserta PPG 2019', 'HM.01.1', 'DJ.I.IV', '2020-01-03', '2020-01-13', '1578883009file_surat.pdf', 'Biasa', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (43, '30', '03/PanNatalPelajar/I/2019', 'Panitia Perayaan Natal Pelajar Kristen tingkat SMP,SMA dan SMK', 'Perayaan Natal Pelajar Kristen tingkat SMP,SMA dan SMK', 'PanNatal', '03', '2019-12-28', '2020-01-13', '1578885126file_surat.pdf', 'Biasa', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (44, '31', '906/BAZNAS/Mn./XI/2019', 'BAZNAS Kota Madiun', 'Feed Back Penerimaan dan Pentasyarufan Zakat Maal, Infaq dan Shodaqoh', 'baznas', 'baznas', '2019-11-29', '2020-01-13', '1578890312file_surat.pdf', 'Penting', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (45, '32', 'W15.PAS.PAS.3-PK.01.05.06-03', 'LAPAS Kelas 1 Madiun', 'Permohonan Tenaga Penyuluh dan Khotib Sholat Jum\'at', 'pas', 'pas.3', '2020-01-02', '2020-01-13', '1578890517file_surat.pdf', 'Penting', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (46, '33', 'B-175/Kw.13.2.5/HM.01/1/2020', 'Kanwil Kemenag Prov. Jatim', 'Launching Kerjasama Kanwil Kemenag Prov Jatim dengan Infradigital Nusantara', 'HM.01', 'Kw.13.2.5', '2020-01-10', '2020-01-14', '1578967006file_surat.pdf', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (47, '34', 'B-238/Kw.13.7.1/BA.00/1/2020', 'Kanwil Kemenag Prov. Jatim', 'Evaluasi Hasil Rekruitmen Penyuluh Agama Islam Non PNS Masa Bakti Tahun 2020-2024', 'BA.00', 'Kw.13.7.1', '2020-01-13', '2020-01-14', '1578971977file_surat.pdf', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (48, '35', '443.33/109/401.103/2020', 'Dinas Kesehatan Dan Keluarga Berencana', 'Undangan Persiapan Pemeriksaan Kesehatan Jemaah Haji 2020', '401.103', '109', '2020-01-13', '2020-01-14', '1578988899file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (49, '36', 'B-260/Kw.13.3.2/PP.00.8/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Ujian Satuan Pendidikan PK PPS Tapel 2019/2020', 'PP.00.8', 'Kw.13.3.2', '2020-01-14', '2020-01-14', '1578989140file_surat.pdf', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (50, '37', 'B-189/Kw.13.1.1/KU.00.2/1/2020', 'Kanwil Kemenag Prov. Jatim', 'Penyusunan Perencanaan dan Anggaran Sekjend TA 2021', 'KU.00.2', 'Kw.13.1.1', '2020-01-13', '2020-01-15', '1579054684file_surat.pdf', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (51, '38', 'B-6/IJ/PS.00.6/01/2020', 'Inspektorat Jenderal', 'Undangan Rapat Koordinasi Kebijakan Pengawasan Tahun 2020', 'PS.00.6', 'IJ', '2020-01-06', '2020-01-15', '1579055402file_surat.pdf', 'Penting', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (52, '39', 'S-08/WPB.16/KP.07/2020', 'KPPN Madiun', 'Pembayaran Uang Persediaan pada Awal Tahun Anggaran 2020', 'KP.07', 'WPB.16', '2020-01-08', '2020-01-15', '1579072368file_surat.pdf', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (53, '40', 'UM.002/2/15/PPIM2020', 'Polteknik Perkeretaapian Indonesia', 'Permohonan Khatib Jum at Ustad/Penceramah Pembimbing Rohani Non Islam Taruna/i PPI Madiun', 'ppi', 'ppi', '2020-01-14', '2020-01-15', '1579072561file_surat.pdf', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (54, '41', 'B-292/Kw.13.2.2/Kp.02.3/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Penyampaian Juknis Pelaksanaan Pembayaran Tukin Guru PNS pada Madrasah', 'Kp.02.3', 'Kw.13.2.2', '2020-01-15', '2020-01-15', '1579073031file_surat.pdf', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (55, '42', 'Und-1/WPB.16/KP.07/2020', 'Kementerian Keuangan Republik Indonesia Provinsi Jawa Timur', 'Undangan Sosialisasi Langkah-langkah Strategis Pelaksanaan Anggaran Tahun 2020 dan Pengginaan Virtual Account', 'KP.07', 'WPB.16', '2020-01-13', '2020-01-16', '1579145748file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (56, '43', '005/138/401.101/2020', 'Dinas Pendidikan', 'Undangan Kegiatan Pelaksanaan Uji Coba USBN', '401.101', '005', '2020-01-14', '2020-01-16', '1579146154file_surat.PDF', 'Penting', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (57, '44', '100/90/401.403/2020', 'Sekretariat Daerah Kota Madiun', 'Permohonan Data Penyusunan Buku Kecamatan Dalam Angka Tahun 2019', '401.403', '90', '2020-01-10', '2020-01-16', '1579146897file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (58, '45', '030/Mts.13.28.01/PP.00.5/01/2020', 'MTsN Kota Madiun', 'Permohonan Penerbitan SK Waka Periode 2020-2021', 'PP.00.5', 'Mts.13.28.01', '2020-01-15', '2020-01-15', '1579147863file_surat.pdf', 'Biasa', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (59, '46', 'B.323/Kw.13.1.2/Kp.07.1/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Penyampaian Usul Kenaikan Pangkat Periode April 2020', 'Kp.07.1', 'Kw.13.1.2', '2020-01-16', '2020-01-16', '1579148890file_surat.PDF', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (60, '47', 'B-295/SJ/B.I.1/KP.07.6/01/2020', 'Sekretariat Jenderal', 'Usul Jabatan Fungsional Perencana Hasil Inpassing', 'KP.07.6', 'SJ', '2020-01-14', '2020-01-16', '1579149134file_surat.PDF', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (61, '48', 'B-    /Kw.13.4/KP.02.3/1/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Undangan Penyelenggaraan USBN PAI', 'KP.02.3', 'Kw.13.4', '2020-01-16', '2020-01-16', '1579162460file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (62, '49', 'B.696/Ma.13.28.02/015/MILAD M2KM/I/2020', 'Panitia Pekan Milad MAN 2 Kota Madiun', 'Undangan Opening Ceremony', '015', 'Ma.13.28.02', '2020-01-14', '2020-01-17', '1579227174file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (63, '50', 'B.037/Mi.13.28.01/PP.00.04/01/2020', 'MIN 1 Kota Madiun', 'Undangan Wisuda Tartil dan Tahfidz Al Qur\'an', 'PP.00.04', 'Mi.13.28.01', '2020-01-16', '2020-01-17', '1579230424file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (64, '51', '00000', 'Dompet Dhuafa', 'Program Bina Santri', '000', 'DD', '2020-01-16', '2020-01-20', '1579485453file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (65, '52', '02/Skr/PKK.Kot/I/2020', 'PKK Kota Madiun', 'Permohonan Draf Program Kerja Tahun 2021', 'PKK.Kot', 'Skr', '2020-01-07', '2020-01-20', '1579486327file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (66, '54', 'B-346/Kw.13.6.1/Kp.02.3/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Penghulu KUA Kecamatan Tahun 2020', 'Kp.02.3', 'Kw.13.6.1', '2020-01-17', '2020-01-20', '1579486593file_surat.PDF', 'Penting', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (67, '53', 'Mi.13.35.53/159/I/2020', 'MI Terpadu Bakti Ibu', 'Permohonan Rekomendasi PPDB 2020/2021', '159', '13.35.53', '2020-01-17', '2020-01-20', '1579486598file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (68, '55', '411/10/401.104/2020', 'Dinsos PP dan PA Kota Madiun', 'Persiapan Penilaian Kota Layak Anak (KLA)', '401.101', '411', '2020-01-17', '2020-01-20', '1579488385file_surat.PDF', 'Penting', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (69, '56', '2511/Dt.I.IV/HM.01.1/1/2020', 'Dirjend Pendidikan Islam', 'Pemberitahuan Tentang Penyelenggaraan USBN PAI pada Sekolah', 'HM.01.1', 'Dt.I.IV', '2020-01-15', '2020-01-20', '1579488582file_surat.PDF', 'Penting', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (70, '57', 'CV.00', 'CV Surya Mustika Motor', 'Pengajuan Servis Murah Motor Honda', 'cv', 'cv', '2020-01-17', '2020-01-20', '1579489007file_surat.PDF', 'Biasa', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (71, '58', 'B-388/Kw.13.4.3/HM.01.1/01/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Rapat Koordinasi Pendidikan Agama Islam', 'HM.01.1', 'Kw.13.4.3', '2020-01-17', '2020-01-20', '1579489264file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (72, '59', '040/MI/PPDB/I/20.5.00/2020', 'MI Al Irsyad Kota Madiun', 'Permohonan Rekomendasi PPDB', 'PPDB', 'PPDB', '2020-01-20', '2020-01-20', '1579492032file_surat.PDF', 'Biasa', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (73, '60', '005/110/401.023/2020', 'Sekretariat Daerah', 'Undangan Yasiinan', '401.023', '005', '2020-01-13', '2020-01-20', '1579494050file_surat.PDF', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (74, '61', '451/116/401.023/2020', 'Sekretariat Daerah', 'Permohonan untuk Memberikan Ceramah Agama', '401.023', '451', '2020-01-13', '2020-01-20', '1579494407file_surat.PDF', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (75, '62', 'B-19/Ma.13.28.2/HM.01/01/2020', 'MAN 2 Kota Madiun', 'Undangan Kegiatan Program MA Vokasi Terpadu', 'HM.01', 'Ma.13.28.2', '2020-01-18', '2020-01-21', '1579570213file_surat.pdf', 'Penting', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (76, '63', '03/Ra.Pwd/01/2020', 'RA Perwanida Demangan', 'Permohonan Dana Bantuan Honorarium Guru', 'Ra.Pwd', 'Ra.Pwd', '2020-01-06', '2020-01-21', '1579570596file_surat.PDF', 'Biasa', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (77, '64', '460.1/12/107.6.27/2020', 'Dinas sosial UPT Rehabilitasi Sosial Bina Karya Madiun', 'Permohonana Instriktur Bimbingan Agama Islam', '107.6.27', '12', '2020-01-17', '2020-01-21', '1579571323file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (78, '65', '420/238/101.1/2020', 'Dinas Pendidikan', 'Pelaksanaan Gladi Bersih UNBK', '101.1', '238', '2020-01-13', '2020-01-21', '1579575352file_surat.pdf', 'Penting', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (79, '66', '460.1/12/107.6.27/2020', 'UPT Rehabilitasi Sosial Bina Karya Madiun', 'Permohonan Instruktur Bimbingan Agama Islam', '107.6.27', '460.1', '2020-01-17', '2020-01-21', '1579575536file_surat.pdf', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (80, '66', 'b.436/Kw.13.1.2/Kp.06/1/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Undangan Kegiatan Pembinaan ASN', 'Kp.06', 'Kw.13.1.2', '2020-01-20', '2020-01-21', '1579575602file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (81, '67', '443.32/155/401.103/2020', 'Dinas Kesehatan Dan Keluarga Berencana', 'Jadwal Pemeriksaan Kesehatan Kedua Jemaah Haji Th 2020', '401.103', '155', '2020-01-20', '2020-01-21', '1579577832file_surat.pdf', 'Penting', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (82, '68', 'S.2060/WPJ.24/KP.06/2020', 'Kementerian Keuangan Republik Indonesia Provinsi Jawa Timur KPPN Madiun', 'Himbauan Penerbitan Bukti Pemotongan PPh Pasal 21 / 1721-A2 dan Penyampaian SPT Tahunan Secara Elektronik', 'KP.06', 'WPJ.24', '2020-01-10', '2020-01-21', '1579580658file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (83, '69', 'S-56/WKN.10/KNL.06/2020', 'Kementerian Keuangan Republik Indonesia KPKNL', 'Laporan Pengawasan dan Pengendalian Barang Milik Negara', 'KNL.06', 'WKN.10', '2020-01-16', '2020-01-21', '1579587872file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (84, '70', 'B-438/Kw.13.5.2/Hj.02/1/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Rapat Teknis Rekrutmen Calon Petugas Penyelenggara Ibadah Haji Tahun 1441H/2020', 'Hj.02', 'w.13.5.2', '2020-01-20', '2020-01-21', '1579592373file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (85, '71', 'B-505/Kw.13.2.1/PP.01/1/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Undangan Sosialisasi POS Ujian Madrasah Tahun Pelajaran 2019/2020', 'PP.01', 'Kw.13.2.1', '2020-01-21', '2020-01-22', '1579657378file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (86, '72', '440/202/401.103/2020', 'Dinkes dan KB', 'Profil Kependudukan Kota Madiun Tahun 2018', '401.103', '440', '2020-01-22', '2020-01-22', '1579675084file_surat.pdf', 'Biasa', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (87, '73', 'B-121/Kk.1314.4/HM.01/01/2020', 'Kemenag Kab Magetan', 'Undangan Rapat Koordinasi PAI', 'HM.01', 'Kk.13.14.4', '2020-01-21', '2020-01-22', '1579679006file_surat.pdf', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (88, '74', '34/Mi.13.28.2/PP.00.01/1/2020', 'MIN 2 Kota Madiun', 'Permohonan Surat Pengantar', 'PP.00.01', 'Mi.13.28.2', '2020-01-23', '2020-01-23', '1579743894file_surat.pdf', 'Penting', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (89, '75', 'B-25/Mi.13.28.2/PP.00.01/1/2020', 'MIN 2 kota Madiun', 'Usulan Penilaian Angka Kredit (PAK) Kenaikan Pangkat', 'PP.00.01', 'Mi.13.28.2', '2020-01-21', '2020-01-22', '1579744333file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (90, '76', '440/41/401.103.2/2020', 'Dinas Kesehatan Dan Keluarga Berencana UPTD Puskesmas Demangan', 'Pelaksanaan Skrining', '103.2', '41', '2020-01-14', '2020-01-23', '1579744978file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (91, '77', 'B-25/Ma.13.28.02/PP.00.6/01', 'MAN 2 Kota Madiun', 'Permohonan Surat Pengantar Dispensasi PPDB 2020-2021', 'PP.00.6', 'Ma.13.28.02', '2020-01-22', '2020-01-23', '1579746068file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (92, '78', '7316/Kw.13.1.4/HM.01/12/2019', 'Kanwil Kemenag Prov. Jatim', 'Surat Pengantar Kalender', 'HM.01', 'Kw.13.1.4', '2020-01-20', '2020-01-23', '1579747599file_surat.pdf', 'Biasa', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (93, '79', 'B-571/Kw.13.6.2/PW.01/1/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Edaran Buku Nikah', 'PW.01', 'Kw.13.6.2', '2020-01-23', '2020-01-23', '1579748672file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (94, '80', '001/M/PP Al-Hikmah/I/2020', 'Pondok Pesantren Al Hikmah', 'Permohonan Bantuan Al-Qur\'an', 'PP Al-Hikmah', 'M', '2020-01-22', '2020-01-23', '1579753554file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (95, '81', '005/BWI/P-BWI/2020', 'Badan Wakaf Indonesia', 'Penetapan Pengurus Perwakilan BWI Kota Madiun', 'BWI', 'BWI', '2020-01-17', '2020-01-23', '1579763204file_surat.pdf', 'Biasa', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (96, '82', '0000', 'Yolanda Selviana', 'Lamaran Pekerjaan', '00', '000', '2020-01-24', '2020-01-24', '1579838056file_surat.pdf', 'Biasa', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (97, '83', '05/PAN MILAD MIN1/02/2020', 'MIN 1 Kota Madiun', 'Permohonan Sponsorship MIN 1', 'Min1', 'Min1', '2020-01-22', '2020-01-24', '1579852357file_surat.pdf', 'Biasa', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (98, '84', '073/Ma.13.28.01/01/2020', 'MAN 1 Kota Madiun', 'Undangan Peresmian PTSP MAN 1 Kota Madiun', 'MAN1', 'Ma.13.28.01', '2020-01-27', '2020-01-27', '1580093082file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (99, '85', '33/100.02-35.77/I/2020', 'Kantor Pertanahan Kota Madiun', 'Permohonan Bantuan Tenaga Pengukuhan Sumpah', 'bpn', 'bpn', '2020-01-27', '2020-01-27', '1580108570file_surat.pdf', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (100, '86', 'B-101/Kk.13.02.4/HM.01/01/2020', 'Kemenag Kab Ponorogo', 'Ralat Undangan', 'HM.01', 'Kk.13.02.4', '2020-01-20', '2020-01-28', '1580178991file_surat.pdf', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (101, '87', 'B-613/Kw.13.4.3/HM.01/01/2020', 'Kanwil Kemenag Prov. Jatim', 'Pemberitahuan', 'HM.01', 'Kw.13.4.3', '2020-01-27', '2020-01-28', '1580179648file_surat.pdf', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (102, '88', '041/58/401.115/2020', 'Dinas Perpustakaan dan Kearsipan Kota Madiun', 'Kesediaan Pelayanan Mobil Perpustakaan Keliling', '401.115', '041', '2020-01-22', '2020-01-28', '1580182266file_surat.pdf', 'Penting', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (103, '89', '041/68/401.115/2020', 'Dinas Perpustakaan dan Kearsipan Kota Madiun', 'Rapat Koordinasi Akreditasi Perpustakaan', '401.115', '041', '2020-01-24', '2020-01-28', '1580182634file_surat.pdf', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (104, '90', '41/Mi.13.28.2/PP.00.01/01/2020', 'MIN 2 Kota Madiun', 'Undangan Peresmian PTSP MIN2', 'PP.00.01', 'Mi.13.28.2', '2020-01-27', '2020-01-28', '1580194693file_surat.pdf', 'Segera', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (105, '91', 'B.679/kw.13.1.2/Kp.07.6/01/2020', 'Kementerian Agama Provinsi Jawa Timur', 'SE Setjen Nomor 03 Tahun 2020 Tentang Sertifikasi Jabatan Fungsional Arsiparis', 'Kp.07.6', 'Kw.13.1.2', '2020-01-28', '2020-01-29', '1580268525file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (106, '92', 'B.506/Kw.13.1/2/OT.01.2/1/2020', 'Kementerian Agama Provinsi Jawa Timur', 'Laporan Kinerja (LKj) Instansi Pemerintah Tahun 2019', 'OT.01.2', 'Kw.13.1', '2020-01-21', '2020-01-29', '1580269605file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (107, '93', 'B.060/Mts.13.28.1/Hm.01/01/2020', 'MTsN Kota Madiun', 'Permohonan membuka Pekan Milad', 'Hm.01', 'Mts.13.28.1', '2020-01-29', '2020-01-29', '1580272486file_surat.pdf', 'Penting', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (108, '94', 'B.819/BdI.07/Kp.02.1/01/2020', 'Balai Diklat Surabaya Kemenag RI', 'Dokumentasi Hasil Seminar Aktualisasi Pelatihan Dasar CPNS Kementerian Agama Th. 2019', 'Kp.02.1', 'BdI.07', '2020-01-29', '2020-01-29', '1580280419file_surat.pdf', 'Penting', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (109, '95', '014/YPB-U/I/2020', 'Yayasan Panti Bagija', 'Permohonan Rohaniwan Agama Islam, Kristen dan Katolik untuk pengukuhan sumpah', 'YPB', 'YPB', '2020-01-29', '2020-01-29', '1580280733file_surat.pdf', 'Segera', 11, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (110, '96', 'B.006/MENWA/LPBB/853/I/2020', 'Wira Sajjana Veda UNIPMA', 'Tembusan Permohonan Rekomendasi', 'LPBB', 'Menwa', '2020-01-16', '2020-01-29', '1580356015file_surat.pdf', 'Biasa', 9, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (111, '97', 'S-4649/WPJ.24/KP.06/2020', 'Kantor Pelayanan Pajak Pratama Madiun', 'Tembusan Permintaan Data Duta e-Filing', 'KP.06', 'WPJ.24', '2020-01-28', '2020-01-30', '1580356254file_surat.pdf', 'Segera', 1, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (112, '98', '050/340/401.204/2020', 'Sekretariat Daerah Kota Madiun', 'Permintaan data percepatan perencanaan pembangunan daerah dan indikator statistik sektoral utama', '401.204', '340', '2029-04-01', '2031-04-01', '1580441852file_surat.pdf', 'Segera.', 1, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (113, '99', '5/Kw.13.5.2/Hj.02/1/2020', 'Kanwil Kemenag Prov. Jatim', 'Pengawas Rekrutmen Calon Petugas Penyelenggara Ibadah Haji', 'Hj.02', 'Kw.13.5.2', '2030-04-01', '1931-05-30', '1580458222file_surat.pdf', 'Penting,.', 1, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (114, '12', '005/12', 'Bappeda', 'Tes Aplikasi ttttttttttttttttttttttttttttttttttttttttttttttttttttttt', '-', '-', '2021-04-28', '2021-05-01', '1619851190file_surat.pdf', 'Map 11', 1, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (115, '012/117/2021', '117', 'BKPSDM', 'Pengujian Sistem Aplikasi Arsip Surat-Menyurat', '012', '-', '2021-04-13', '2021-04-29', '1619851435file_surat.pdf', 'Map 112', 1, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (116, '470/230/2021', '230', 'Bappeda', 'SSS', '470', 'null', '2021-05-14', '2021-05-28', '1619970676file_surat.png', 'SS', 29, 'n');
INSERT INTO `tbl_surat_masuk` VALUES (117, 'FDD', '117', 'Bappeda', 'asda', '470', '-', '2021-05-13', '2021-04-23', '1619971064file_surat.pdf', 'asda', 1, 'y');
INSERT INTO `tbl_surat_masuk` VALUES (118, '030/118/2021', '118', 'Kesbangpol', 'Mohon dibubarkan', '030', 'null', '2021-05-01', '2021-05-04', '1622734214file_surat.docx', 'Tes Uji', 1, 'y');

-- ----------------------------
-- Table structure for tmjabatan
-- ----------------------------
DROP TABLE IF EXISTS `tmjabatan`;
CREATE TABLE `tmjabatan`  (
  `Id` bigint(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Stat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `OtherString` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tmjabatan
-- ----------------------------
INSERT INTO `tmjabatan` VALUES (1, 'Ia', 'Juru Muda', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (2, 'Ib', 'Juru Muda Tk. I', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (3, 'Ic', 'Juru', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (4, 'Id', 'Juru Tk. I', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (5, 'IIa', 'Pengatur Muda', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (6, 'IIb', 'Pengatur Muda Tk. I', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (7, 'IIc', 'Pengatur', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (8, 'IId', 'Pengatur  Tk. I', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (9, 'IIIa', 'Penata Muda', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (10, 'IIIb', 'Penata Muda Tk. I', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (11, 'IIIc', 'Penata', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (12, 'IIId', 'Penata Tk. I', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (13, 'IVa', 'Pembina', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (14, 'IVb', 'Pembina Tk. I', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (15, 'IVc', 'Pembina Utama Muda', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (16, 'IVd', 'Pembina Utama Madya', 'gol', NULL);
INSERT INTO `tmjabatan` VALUES (17, 'IVe', 'Pembina Utama', 'gol', NULL);

SET FOREIGN_KEY_CHECKS = 1;
