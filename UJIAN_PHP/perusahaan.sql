-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for perusahaan
DROP DATABASE IF EXISTS `perusahaan`;
CREATE DATABASE IF NOT EXISTS `perusahaan` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `perusahaan`;

-- Dumping structure for table perusahaan.tb_karyawan
DROP TABLE IF EXISTS `tb_karyawan`;
CREATE TABLE IF NOT EXISTS `tb_karyawan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `no_karyawan` int NOT NULL DEFAULT '0',
  `nama_karyawan` varchar(255) NOT NULL DEFAULT '0',
  `jabatan` varchar(100) NOT NULL DEFAULT '0',
  `divisi` varchar(100) NOT NULL DEFAULT '0',
  `alamat` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table perusahaan.tb_karyawan: ~0 rows (approximately)
DELETE FROM `tb_karyawan`;
INSERT INTO `tb_karyawan` (`id`, `no_karyawan`, `nama_karyawan`, `jabatan`, `divisi`, `alamat`) VALUES
	(1, 1112, 'Burhan', 'SPV', 'PPIC', 'Pemalang'),
	(3, 1114, 'Sekar', 'SPV', 'Sewing', 'Batang'),
	(8, 1115, 'Rehan', 'OB', 'Cleaning', 'Pekalongan');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
