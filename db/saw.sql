-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `c1` float NOT NULL,
  `c2` float NOT NULL,
  `c3` float NOT NULL,
  `c4` float NOT NULL,
  `c5` float NOT NULL,
  `c6` float NOT NULL,
  `c7` float NOT NULL,
  `c8` float NOT NULL,
  `c9` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `karyawan` (`id`, `nama`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `created_at`, `updated_at`) VALUES
(1,	'Eko Santoso',	9,	7,	7,	7,	6,	6,	7,	7,	7,	'2019-06-22 01:38:05',	'2019-06-22 01:38:05'),
(2,	'Abdul Wahid',	8,	7,	7,	6,	6,	6,	7,	7,	7,	'2019-06-21 23:00:15',	'2019-06-21 23:00:15'),
(3,	'Agus Ashofa',	8,	7,	7,	6,	7,	6,	7,	7,	7,	'2019-06-21 23:00:15',	'2019-06-21 23:00:15'),
(4,	'Gunawan',	7,	7,	7,	8,	8,	7,	7,	7,	7,	'2019-06-21 23:00:15',	'2019-06-21 23:00:15'),
(5,	'Sirajudin',	6,	6,	6,	7,	6,	6,	6,	5,	6,	'2019-06-21 23:00:15',	'2019-06-21 23:00:15'),
(6,	'Agus Riyanto',	7,	7,	7,	7,	7,	7,	7,	6,	6,	'2019-06-21 23:00:15',	'2019-06-21 23:00:15'),
(7,	'Surya Nugroho',	7,	7,	7,	7,	7,	7,	7,	7,	7,	'2019-06-21 23:00:15',	'2019-06-21 23:00:15'),
(8,	'Sugeng Priyono',	7,	7,	7,	6,	6,	7,	7,	7,	7,	'2019-06-21 23:00:15',	'2019-06-21 23:00:15'),
(9,	'Sayuti',	7,	6,	7,	6,	6,	7,	7,	7,	7,	'2019-06-21 23:00:15',	'2019-06-21 23:00:15'),
(10,	'Nur Subandono',	7,	6,	7,	6,	7,	7,	7,	7,	7,	'2019-06-21 23:00:15',	'2019-06-21 23:00:15'),
(11,	'TES',	6,	6,	6,	6,	6,	6,	6,	6,	6,	'2019-06-22 01:10:20',	'2019-06-22 01:10:20');

DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kriteria` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL COMMENT 'cost /  benefit',
  `bobot` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kriteria` (`id`, `kriteria`, `keterangan`, `tipe`, `bobot`, `created_at`, `updated_at`) VALUES
(1,	'C1',	'Kualitas Kerja',	'benefit',	1,	'2019-06-22 01:37:54',	'2019-06-22 01:37:54'),
(2,	'C2',	'Kuantitas Kerja',	'benefit',	0.2,	'2019-06-22 01:37:54',	'2019-06-22 01:37:54'),
(3,	'C3',	'Inisiatif Kerja',	'benefit',	0.8,	'2019-06-22 01:37:54',	'2019-06-22 01:37:54'),
(4,	'C4',	'Disiplin Kerja',	'benefit',	0.8,	'2019-06-22 01:37:54',	'2019-06-22 01:37:54'),
(5,	'C5',	'Tanggung Jawab pada Pekerjaan',	'benefit',	0.75,	'2019-06-22 01:37:54',	'2019-06-22 01:37:54'),
(6,	'C6',	'Motivasi Kerja',	'benefit',	0.7,	'2019-06-22 01:37:54',	'2019-06-22 01:37:54'),
(7,	'C7',	'Kerjasama dalam Bekerja',	'benefit',	0.45,	'2019-06-22 01:37:54',	'2019-06-22 01:37:54'),
(8,	'C8',	'Pemahaman terhadap Tugas',	'benefit',	0.3,	'2019-06-22 01:37:54',	'2019-06-22 01:37:54'),
(9,	'C9',	'Penyesuaian Diri dalam Lingkungan',	'benefit',	0.15,	'2019-06-22 01:37:54',	'2019-06-22 01:37:54');

-- 2019-06-22 03:28:15
