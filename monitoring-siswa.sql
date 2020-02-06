-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 10:58 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring-siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `gammu`
--

CREATE TABLE IF NOT EXISTS `gammu` (
  `Version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(17);

-- --------------------------------------------------------

--
-- Table structure for table `guru_bk`
--

CREATE TABLE IF NOT EXISTS `guru_bk` (
  `NIP` varchar(18) NOT NULL,
  `id_usergroup` varchar(30) NOT NULL,
  `Nama_guru` varchar(30) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Pendidikan_terakhir` varchar(20) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Nomor_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru_bk`
--

INSERT INTO `guru_bk` (`NIP`, `id_usergroup`, `Nama_guru`, `Password`, `Pendidikan_terakhir`, `Alamat`, `Nomor_hp`) VALUES
('12', '2', 'coba', 'e369853df766fa44e1ed0ff613f563bd', 'S1', '-', '-'),
('12345', '1', 'Bu Armalia', '7e7ec59d1f4b21021577ff562dc3d48b', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false',
  `Status` int(11) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`UpdatedInDB`, `ReceivingDateTime`, `Text`, `SenderNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `RecipientID`, `Processed`, `Status`) VALUES
('2019-08-05 12:07:11', '2019-08-05 11:18:10', '00500045004C0041004E00470047004100520041004E00200039003200300035', '+62895337773784', 'Default_No_Compression', '', '+628964018095', -1, 'PELANGGARAN 9205', 1, '', 'true', 0),
('2019-08-05 12:07:11', '2019-08-05 11:26:20', '00500045004C0041004E00470047004100520041004E00200039003200300035', '+62895337773784', 'Default_No_Compression', '', '+628964018097', -1, 'PELANGGARAN 9205', 2, '', 'true', 0),
('2019-08-05 12:27:02', '2019-08-05 12:07:21', '00500045004C0041004E00470047004100520041004E00200039003200300035', '+62895337773784', 'Default_No_Compression', '', '+628964018096', -1, 'PELANGGARAN 9205', 3, '', 'true', 0),
('2019-08-05 12:27:02', '2019-08-05 12:26:35', '00500045004C0041004E00470047004100520041004E00200039003200300039', '+62895337773784', 'Default_No_Compression', '', '+628964018095', -1, 'PELANGGARAN 9209', 4, '', 'true', 0),
('2019-08-05 12:28:08', '2019-08-05 12:27:52', '00500045004C0041004E00470047004100520041004E00200039003200300039', '+62895337773784', 'Default_No_Compression', '', '+628964018091', -1, 'PELANGGARAN 9209', 5, '', 'true', 0),
('2019-08-05 12:30:01', '2019-08-05 12:28:55', '0050', '+62895337773784', 'Default_No_Compression', '', '+628964018097', -1, 'P', 6, '', 'true', 0),
('2019-08-05 12:50:33', '2019-08-05 12:48:05', '00500045004C0041004E00470047004100520041004E00200039003200300033', '+62895337773784', 'Default_No_Compression', '', '+628964018092', -1, 'PELANGGARAN 9203', 7, '', 'true', 0),
('2019-08-17 01:55:07', '2019-08-17 01:54:42', '00500065006C0061006E00670067006100720061006E00200039003200300032', '+6285366440995', 'Default_No_Compression', '', '+6281100501', -1, 'Pelanggaran 9202', 8, '', 'true', 0),
('2019-09-01 13:36:36', '2019-09-01 13:36:27', '00500065006C0061006E00670067006100720061006E00200039003200300032', '+62895337773784', 'Default_No_Compression', '', '+628964018092', -1, 'Pelanggaran 9202', 9, '', 'true', 0),
('2019-09-01 13:38:00', '2019-09-01 13:37:37', '0050', '+62895337773784', 'Default_No_Compression', '', '+628964018097', -1, 'P', 10, '', 'true', 0),
('2019-09-01 13:39:01', '2019-09-01 13:38:31', '00500065006C0061006E00670067006100720061006E0020003100310032', '+62895337773784', 'Default_No_Compression', '', '+628964018091', -1, 'Pelanggaran 112', 11, '', 'true', 0),
('2019-09-01 13:44:09', '2019-09-01 13:43:38', '00500065006C0061006E00670067006100720061006E0020003100310032', '+62895337773784', 'Default_No_Compression', '', '+628964018096', -1, 'Pelanggaran 112', 12, '', 'true', 0),
('2019-09-01 13:54:34', '2019-09-01 13:54:21', '0050', '+62895337773784', 'Default_No_Compression', '', '+628964018093', -1, 'P', 13, '', 'true', 0),
('2019-09-02 01:09:07', '2019-09-02 00:10:13', '004B0075006F007400610020003500470042002000430055004D00410020005200700020003500720062002000620069006B0069006E00200068006100720069006D00750020006A006100640069002000530045005200550021002000420061006C0061007300200047004800200075006E00740075006B00200061006B007400690066006B0061006E002E0020004E0069006B006D0061007400690020003500470042002000280031004700420020002B00200034004700420020002800300031002D003000390029002900200075006E00740075006B00200053004500480041005200490041004E002000730065006B006100720061006E00670021002000410055003600310032', '111', 'Default_No_Compression', '', '+628964018092', -1, 'Kuota 5GB CUMA Rp 5rb bikin harimu jadi SERU! Balas GH untuk aktifkan. Nikmati 5GB (1GB + 4GB (01-09)) untuk SEHARIAN sekarang! AU612', 14, '', 'true', 0),
('2019-09-02 01:09:07', '2019-09-02 01:07:51', '0050', '+62895337773784', 'Default_No_Compression', '', '+628964018093', -1, 'P', 15, '', 'true', 0),
('2019-09-02 01:09:40', '2019-09-02 01:09:28', '0050', '+62895337773784', 'Default_No_Compression', '', '+628964018097', -1, 'P', 16, '', 'true', 0),
('2019-09-02 01:32:54', '2019-09-02 01:32:25', '00500065006C0061006E00670067006100720061006E002000200039003200300031', '+62895337773784', 'Default_No_Compression', '', '+628964018097', -1, 'Pelanggaran  9201', 17, '', 'true', 0),
('2019-09-02 01:34:54', '2019-09-02 01:34:11', '00500065006C0061006E00670067006100720061006E00200039003200300032', '+62895337773784', 'Default_No_Compression', '', '+628964018096', -1, 'Pelanggaran 9202', 18, '', 'true', 0),
('2019-09-02 01:34:54', '2019-09-02 01:34:48', '00500045004C0041004E00470047004100520041004E00200039003200300031', '+62895337773784', 'Default_No_Compression', '', '+628964018093', -1, 'PELANGGARAN 9201', 19, '', 'true', 0),
('2019-09-02 04:08:54', '2019-09-02 04:06:02', '0050', '+62895337773784', 'Default_No_Compression', '', '+628964018090', -1, 'P', 20, '', 'true', 0),
('2019-09-02 04:08:54', '2019-09-02 04:06:13', '00500065006C0061006E00670067006100720061006E002000200039003200300031', '+62895337773784', 'Default_No_Compression', '', '+628964018091', -1, 'Pelanggaran  9201', 21, '', 'true', 0),
('2019-09-02 04:09:29', '2019-09-02 04:09:11', '00500065006C0061006E00670067006100720061006E002000200039003200300031', '+62895337773784', 'Default_No_Compression', '', '+628964018093', -1, 'Pelanggaran  9201', 22, '', 'true', 0),
('2019-09-02 04:25:26', '2019-09-02 04:25:18', '00500065006C0061006E00670067006100720061006E00200039003200300032', '+62895337773784', 'Default_No_Compression', '', '+628964018092', -1, 'Pelanggaran 9202', 23, '', 'true', 0),
('2019-09-02 04:26:29', '2019-09-02 04:25:57', '00500065006C0061006E00670067006100720061006E00200039003200300031', '+62895337773784', 'Default_No_Compression', '', '+628964018096', -1, 'Pelanggaran 9201', 24, '', 'true', 0),
('2019-09-02 04:27:47', '2019-09-02 04:27:36', '00500065006C0061006E00670067006100720061006E00200039003200300031', '+62895337773784', 'Default_No_Compression', '', '+628964018095', -1, 'Pelanggaran 9201', 25, '', 'true', 0),
('2019-09-02 04:28:11', '2019-09-02 04:28:00', '00500065006C0061006E00670067006100720061006E00200039003200300031', '+62895337773784', 'Default_No_Compression', '', '+628964018097', -1, 'Pelanggaran 9201', 26, '', 'true', 0),
('2019-09-02 04:42:41', '2019-09-02 04:42:29', '00500065006C0061006E00670067006100720061006E00200039003200300031', '+62895337773784', 'Default_No_Compression', '', '+628964018094', -1, 'Pelanggaran 9201', 27, '', 'true', 0);

--
-- Triggers `inbox`
--
DELIMITER $$
CREATE TRIGGER `inbox_timestamp` BEFORE INSERT ON `inbox`
 FOR EACH ROW BEGIN
    IF NEW.ReceivingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.ReceivingDateTime = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `Kode_jurusan` varchar(3) NOT NULL,
  `Nama_jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`Kode_jurusan`, `Nama_jurusan`) VALUES
('AK', 'Akuntansi'),
('AP', 'Administrasi Perkantoran'),
('APM', 'Akomodasi Perhotelan'),
('PBK', 'Perbankan'),
('PM', 'Pemasaran'),
('RPL', 'Rekayasa Perangkat Lunak'),
('TKJ', 'Teknik Komputer dan Jaringan'),
('UPW', 'Usaha Perjalanan dan Wisata');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `Kode_kelas` varchar(5) NOT NULL,
  `Kode_jurusan` varchar(3) NOT NULL,
  `Nama_kelas` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`Kode_kelas`, `Kode_jurusan`, `Nama_kelas`) VALUES
('001', 'PBK', '1 PBK 1'),
('002', 'PBK', '1 PBK 2'),
('003', 'PBK', '1 PBK 3'),
('004', 'PBK', '1 PBK 4'),
('005', 'TKJ', '1 TKJ 1'),
('006', 'TKJ', '1 TKJ 2'),
('007', 'TKJ', '1 TKJ 3'),
('008', 'TKJ', '1 TKJ 4'),
('009', 'UPW', '1 UPW 1'),
('010', 'UPW', '1 UPW 2'),
('011', 'UPW', '1 UPW 2'),
('012', 'UPW', '1 UPW 4'),
('013', 'AK', '1 AK 1'),
('014', 'AK', '1 AK 2'),
('015', 'AK', '1 AK 3'),
('016', 'AK', '1 AK 4'),
('017', 'RPL', '1 RPL 1'),
('018', 'RPL', '1 RPL 2'),
('019', 'RPL', '1 RPL 3'),
('020', 'RPL', '1 RPL 4'),
('021', 'PM', '1 PM 1'),
('022', 'PM', '1 PM 2'),
('023', 'PM', '1 PM 3'),
('024', 'PM', '1 PM 4'),
('025', 'AP', '1 AP 1'),
('026', 'AP', '1 AP 2'),
('027', 'AP', '1 AP 3'),
('028', 'AP', '1 AP 4'),
('029', 'APM', '1 APM 1'),
('030', 'APM', '1 APM 2'),
('031', 'APM', '1 APM 3'),
('032', 'APM', '1 APM 4'),
('034', 'PBK', '2 PBK 1'),
('035', 'PBK', '2 PBK 2'),
('036', 'PBK', '2 PBK 3'),
('037', 'PBK', '2 PBK 4'),
('038', 'PBK', '3 PBK 1'),
('039', 'PBK', '3 PBK 2'),
('040', 'PBK', '3 PBK 3'),
('041', 'PBK', '3 PBK 4'),
('042', 'TKJ', '2 TKJ 1'),
('043', 'TKJ', '2 TKJ 2'),
('044', 'TKJ', '2 TKJ 3'),
('045', 'TKJ', '2 TKJ 4'),
('046', 'TKJ', '3 TKJ 1'),
('047', 'TKJ', '3 TKJ 2'),
('048', 'TKJ', '3 TKJ 3'),
('049', 'TKJ', '3 TKJ 4'),
('050', 'UPW', '2 UPW 1'),
('051', 'UPW', '2 UPW 2'),
('052', 'UPW', '2 UPW 3'),
('053', 'UPW', '2 UPW 4'),
('054', 'UPW', '3 UPW 1'),
('055', 'UPW', '3 UPW 2'),
('056', 'UPW', '3 UPW 3'),
('057', 'UPW', '3 UPW 4'),
('058', 'AK', '2 AK 1'),
('059', 'AK', '2 AK 2'),
('060', 'AK', '2 AK 3'),
('061', 'AK', '2 AK 4'),
('062', 'AK', '3 AK 1'),
('063', 'AK', '3 AK 2'),
('064', 'AK', '3 AK 3'),
('065', 'AK', '3 AK 4'),
('066', 'RPL', '2 RPL 1'),
('067', 'RPL', '2 RPL 2'),
('068', 'RPL', '2 RPL 3'),
('069', 'RPL', '2 RPL 4'),
('070', 'RPL', '3 RPL 1'),
('071', 'RPL', '3 RPL 2'),
('072', 'RPL', '3 RPL 3'),
('073', 'RPL', '3 RPL 4'),
('074', 'PM', '2 PM 1'),
('075', 'PM', '2 PM 2'),
('076', 'PM', '2 PM 3'),
('077', 'PM', '2 PM 4'),
('078', 'PM', '3 PM 1'),
('079', 'PM', '3 PM 2'),
('080', 'PM', '3 PM 3'),
('081', 'PM', '3 PM 4'),
('082', 'AP', '2 AP 1'),
('083', 'AP', '2 AP 2'),
('084', 'AP', '2 AP 3'),
('085', 'AP', '2 AP 4'),
('086', 'AP', '3 AP 1'),
('087', 'AP', '3 AP 2'),
('088', 'AP', '3 AP 3'),
('089', 'AP', '3 AP 4'),
('090', 'APM', '2 APM 1'),
('091', 'APM', '2 APM 2'),
('092', 'APM', '2 APM 3'),
('093', 'APM', '2 APM 4'),
('094', 'APM', '3 APM 1'),
('095', 'APM', '3 APM 2'),
('096', 'APM', '3 APM 3'),
('097', 'APM', '3 APM 4'),
('098', 'APM', '3 APM 5');

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE IF NOT EXISTS `outbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendBefore` time NOT NULL DEFAULT '23:59:59',
  `SendAfter` time NOT NULL DEFAULT '00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int(11) DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL,
  `Retries` int(3) DEFAULT '0',
  `Priority` int(11) DEFAULT '0',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error','Reserved') NOT NULL DEFAULT 'Reserved',
  `StatusCode` int(11) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

--
-- Triggers `outbox`
--
DELIMITER $$
CREATE TRIGGER `outbox_timestamp` BEFORE INSERT ON `outbox`
 FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingTimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.SendingTimeOut = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `outbox_multipart`
--

CREATE TABLE IF NOT EXISTS `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error','Reserved') NOT NULL DEFAULT 'Reserved',
  `StatusCode` int(11) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE IF NOT EXISTS `pelanggaran` (
  `Kode_pelanggaran` varchar(2) NOT NULL,
  `Nama_pelanggaran` varchar(150) NOT NULL,
  `Point` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`Kode_pelanggaran`, `Nama_pelanggaran`, `Point`) VALUES
('01', 'Terlambat masuk kelas setelah pergantian jam pelajaran ', 5),
('02', 'Mengganggu teman/membuat keributan/HP berbunyi', 5),
('03', 'Berjudi', 50),
('05', 'Makan/minum pada saat KBM', 10),
('06', 'Tidak mengikuti KBM/keluar kelas', 5),
('09', 'Tidak melaksanakan piket kelas', 5),
('10', 'membantah dan menolak mengerjakan tugas yang diberikan oleh guru', 10),
('13', 'Memakai headset saat KBM ', 5),
('14', 'Surat izin/sakit yang tidak disertai tanda tangan orang tua', 5),
('15', 'Membawa senjata tajam dan sejenisnya', 50),
('17', 'Membolos', 10),
('18', 'Membawa rokok/merokok di lingkungan sekolah, baik pada saat KBM maupun pada saat kegiatan-kegiatan sekolah lainnya ', 40),
('19', 'Berkata kotor/tidak sopan, bertentangan dengan norma, adat aturan dan hukum', 40),
('21', 'Membuat kotor/coret-coret/merusak barang inventaris di lingkungan sekolah ', 40),
('23', 'Melawan guru', 50),
('25', 'Membawa minuman keras / alkohol', 40),
('26', 'Terlambat masuk sekolah pada pagi hari', 5),
('27', 'Tidak seragam lengkap dan benar ', 5),
('28', 'Sepatu diinjak bagian belakang', 5),
('30', 'baju tidak dimasukkan dengan rapih', 5),
('31', 'Berkuku panjang', 5),
('32', 'Tali pinggang tidak seragam', 5),
('33', 'Bagi siswa putra tidak diperkenankan memakai aksesoris dan bagi siswi putri tidak memakai aksesoris yang berlebihan', 5),
('34', 'Siswa putra rambut panjang tidak sesuai dengan perraturan sekolah', 5),
('35', 'Rambut di cat berwarna', 5),
('37', 'Baju, celana, dan sepatu tidak sesuai dengan aturan sekolah', 5),
('40', 'Tidak membawa buku saku', 5),
('41', 'Menghilangkan buku saku ', 5),
('42', 'Pacaran (melanggar norma agama/adatistiadat)', 150),
('43', 'Berkelahi/tawuran ', 150),
('44', 'Mencuri', 150),
('45', 'Memakai dan mengedarkan NAFZA ', 150),
('46', 'Menjadi anggota organisasi yang dilarang oleh negara dan agama ', 150),
('47', 'Terlibat penodongan/meminta dengan paksa & perjudian (terlibat didalamnya)', 150),
('48', 'Bertato ', 150);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran_siswa`
--

CREATE TABLE IF NOT EXISTS `pelanggaran_siswa` (
  `Id_pelanggaran_siswa` int(5) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `NIS_siswa` varchar(4) NOT NULL,
  `Tanggal_pelanggaran_siswa` date NOT NULL,
  `Kode_pelanggaran` varchar(2) NOT NULL,
  `Keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggaran_siswa`
--

INSERT INTO `pelanggaran_siswa` (`Id_pelanggaran_siswa`, `NIP`, `NIS_siswa`, `Tanggal_pelanggaran_siswa`, `Kode_pelanggaran`, `Keterangan`) VALUES
(1, '', '9201', '2020-02-13', '26', 'Terlambat');

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE IF NOT EXISTS `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL DEFAULT 'no',
  `Receive` enum('yes','no') NOT NULL DEFAULT 'no',
  `IMEI` varchar(35) NOT NULL,
  `IMSI` varchar(35) NOT NULL,
  `NetCode` varchar(10) DEFAULT 'ERROR',
  `NetName` varchar(35) DEFAULT 'ERROR',
  `Client` text NOT NULL,
  `Battery` int(11) NOT NULL DEFAULT '-1',
  `Signal` int(11) NOT NULL DEFAULT '-1',
  `Sent` int(11) NOT NULL DEFAULT '0',
  `Received` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`ID`, `UpdatedInDB`, `InsertIntoDB`, `TimeOut`, `Send`, `Receive`, `IMEI`, `IMSI`, `NetCode`, `NetName`, `Client`, `Battery`, `Signal`, `Sent`, `Received`) VALUES
('', '2019-09-02 05:00:53', '2019-09-02 04:05:53', '2019-09-02 05:01:03', 'yes', 'yes', '863448019780631', '510897245710200', '510 89', '3', 'Gammu 1.39.0, Windows Server 2007 SP1, MS VC 1900', 0, 75, 8, 8);

--
-- Triggers `phones`
--
DELIMITER $$
CREATE TRIGGER `phones_timestamp` BEFORE INSERT ON `phones`
 FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.TimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.TimeOut = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sentitems`
--

CREATE TABLE IF NOT EXISTS `sentitems` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL DEFAULT NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL DEFAULT 'SendingOK',
  `StatusError` int(11) NOT NULL DEFAULT '-1',
  `TPMR` int(11) NOT NULL DEFAULT '-1',
  `RelativeValidity` int(11) NOT NULL DEFAULT '-1',
  `CreatorID` text NOT NULL,
  `StatusCode` int(11) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sentitems`
--

INSERT INTO `sentitems` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `DeliveryDateTime`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `SenderID`, `SequencePosition`, `Status`, `StatusError`, `TPMR`, `RelativeValidity`, `CreatorID`, `StatusCode`) VALUES
('2019-08-05 12:07:21', '2019-08-05 12:07:11', '2019-08-05 12:07:21', NULL, '00500065006C0061006E00670067006100720061006E0020003A0020003000350020002E00200050006100640061002000740061006E006700670061006C0020003A002000300038002D00300038002D0032003000310039', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Pelanggaran : 05 . Pada tanggal : 08-08-2019', 1, '', 1, 'SendingOKNoReport', -1, 9, 255, '', -1),
('2019-08-05 12:07:24', '2019-08-05 12:07:11', '2019-08-05 12:07:24', NULL, '00500065006C0061006E00670067006100720061006E0020003A0020003000350020002E00200050006100640061002000740061006E006700670061006C0020003A002000300038002D00300038002D0032003000310039', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Pelanggaran : 05 . Pada tanggal : 08-08-2019', 2, '', 1, 'SendingOKNoReport', -1, 10, 255, '', -1),
('2019-08-05 12:27:28', '2019-08-05 12:27:02', '2019-08-05 12:27:28', NULL, '00500065006C0061006E00670067006100720061006E0020003A0020004D0061006B0061006E002000640061006E0020006D0069006E0075006D002000640069006B0065006C006100730020002E00200050006100640061002000740061006E006700670061006C0020003A002000310035002D00300038002D0032003000310039', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Pelanggaran : Makan dan minum dikelas . Pada tanggal : 15-08-2019', 4, '', 1, 'SendingOKNoReport', -1, 11, 255, '', -1),
('2019-08-05 12:27:31', '2019-08-05 12:27:02', '2019-08-05 12:27:31', NULL, '004E0049005300200074006900640061006B0020006D0065006D0069006C0069006B0069002000700065006C0061006E00670067006100720061006E0020006100740061007500200074006900640061006B00200074006500720064006100660074006100720020', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'NIS tidak memiliki pelanggaran atau tidak terdaftar ', 3, '', 1, 'SendingOKNoReport', -1, 12, 255, '', -1),
('2019-08-05 12:28:34', '2019-08-05 12:28:08', '2019-08-05 12:28:34', NULL, '00500065006C0061006E00670067006100720061006E0020003A0020004D0061006B0061006E002000640061006E0020006D0069006E0075006D002000640069006B0065006C006100730020002E00200050006100640061002000740061006E006700670061006C0020003A002000310035002D00300038002D0032003000310039', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Pelanggaran : Makan dan minum dikelas . Pada tanggal : 15-08-2019', 5, '', 1, 'SendingOKNoReport', -1, 13, 255, '', -1),
('2019-08-05 12:30:08', '2019-08-05 12:30:01', '2019-08-05 12:30:08', NULL, '004D00610061006600200070006500720069006E007400610068002000730061006C00610068002C002000730069006C00610068006B0061006E002000630065006B0020006B0065006D00620061006C0069002000500045004C0041004E00470047004100520041004E003C00730070006100730069003E004E00490053', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Maaf perintah salah, silahkan cek kembali PELANGGARAN<spasi>NIS', 6, '', 1, 'SendingOKNoReport', -1, 14, 255, '', -1),
('2019-08-05 12:50:42', '2019-08-05 12:50:33', '2019-08-05 12:50:42', NULL, '00500065006C0061006E00670067006100720061006E0020003A00200054006900640061006B0020006D006100730075006B002000700065006C0061006A006100720061006E0020002E00200050006100640061002000740061006E006700670061006C0020003A002000300034002D00300038002D0032003000310039', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Pelanggaran : Tidak masuk pelajaran . Pada tanggal : 04-08-2019', 7, '', 1, 'SendingOKNoReport', -1, 15, 255, '', -1),
('2019-08-17 01:55:13', '2019-08-17 01:55:07', '2019-08-17 01:55:13', NULL, '00500065006C0061006E00670067006100720061006E0020003A0020004200650072006B0075006B0075002000700061006E006A0061006E00670020002E00200050006100640061002000740061006E006700670061006C0020003A002000300032002D00300038002D0032003000310039', '+6285366440995', 'Default_No_Compression', '', '+6289644000001', -1, 'Pelanggaran : Berkuku panjang . Pada tanggal : 02-08-2019', 8, '', 1, 'SendingOKNoReport', -1, 16, 255, '', -1),
('2019-09-01 13:37:11', '2019-09-01 13:36:36', '2019-09-01 13:37:11', NULL, '00500065006C0061006E00670067006100720061006E0020003A0020004200650072006B0075006B0075002000700061006E006A0061006E00670020002E00200050006100640061002000740061006E006700670061006C0020003A002000300032002D00300038002D0032003000310039', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Pelanggaran : Berkuku panjang . Pada tanggal : 02-08-2019', 9, '', 1, 'SendingOKNoReport', -1, 19, 255, '', -1),
('2019-09-01 13:38:15', '2019-09-01 13:38:00', '2019-09-01 13:38:15', NULL, '004D00610061006600200070006500720069006E007400610068002000730061006C00610068002C002000730069006C00610068006B0061006E002000630065006B0020006B0065006D00620061006C0069002000500045004C0041004E00470047004100520041004E003C00730070006100730069003E004E00490053', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Maaf perintah salah, silahkan cek kembali PELANGGARAN<spasi>NIS', 10, '', 1, 'SendingOKNoReport', -1, 20, 255, '', -1),
('2019-09-01 13:39:19', '2019-09-01 13:39:01', '2019-09-01 13:39:19', NULL, '004E0049005300200074006900640061006B0020006D0065006D0069006C0069006B0069002000700065006C0061006E00670067006100720061006E0020006100740061007500200074006900640061006B00200074006500720064006100660074006100720020', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'NIS tidak memiliki pelanggaran atau tidak terdaftar ', 11, '', 1, 'SendingOKNoReport', -1, 21, 255, '', -1),
('2019-09-01 13:44:23', '2019-09-01 13:44:09', '2019-09-01 13:44:23', NULL, '004E0049005300200074006900640061006B00200074006900640061006B0020007400650072006400610066007400610072002C002000730069006C00610068006B0061006E002000630065006B0020006B0065006D00620061006C00690020004E004900530020007300690073007700610020', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'NIS tidak tidak terdaftar, silahkan cek kembali NIS siswa ', 12, '', 1, 'SendingOKNoReport', -1, 22, 255, '', -1),
('2019-09-01 13:54:58', '2019-09-01 13:54:34', '2019-09-01 13:54:58', NULL, '004D00610061006600200070006500720069006E007400610068002000730061006C00610068002C002000730069006C00610068006B0061006E002000630065006B0020006B0065006D00620061006C0069002000500045004C0041004E00470047004100520041004E003C00730070006100730069003E004E00490053', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Maaf perintah salah, silahkan cek kembali PELANGGARAN<spasi>NIS', 13, '', 1, 'SendingOKNoReport', -1, 23, 255, '', -1),
('2019-09-02 01:09:35', '2019-09-02 01:09:07', '2019-09-02 01:09:35', NULL, '004D00610061006600200070006500720069006E007400610068002000730061006C00610068002C002000730069006C00610068006B0061006E002000630065006B0020006B0065006D00620061006C0069002000500045004C0041004E00470047004100520041004E003C00730070006100730069003E004E00490053', '111', 'Default_No_Compression', '', '+6289644000001', -1, 'Maaf perintah salah, silahkan cek kembali PELANGGARAN<spasi>NIS', 14, '', 1, 'SendingOKNoReport', -1, 24, 255, '', -1),
('2019-09-02 01:09:38', '2019-09-02 01:09:07', '2019-09-02 01:09:38', NULL, '004D00610061006600200070006500720069006E007400610068002000730061006C00610068002C002000730069006C00610068006B0061006E002000630065006B0020006B0065006D00620061006C0069002000500045004C0041004E00470047004100520041004E003C00730070006100730069003E004E00490053', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Maaf perintah salah, silahkan cek kembali PELANGGARAN<spasi>NIS', 15, '', 1, 'SendingOKNoReport', -1, 25, 255, '', -1),
('2019-09-02 01:10:18', '2019-09-02 01:09:40', '2019-09-02 01:10:18', NULL, '004D00610061006600200070006500720069006E007400610068002000730061006C00610068002C002000730069006C00610068006B0061006E002000630065006B0020006B0065006D00620061006C0069002000500045004C0041004E00470047004100520041004E003C00730070006100730069003E004E00490053', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Maaf perintah salah, silahkan cek kembali PELANGGARAN<spasi>NIS', 16, '', 1, 'SendingOKNoReport', -1, 26, 255, '', -1),
('2019-09-02 01:33:22', '2019-09-02 01:32:54', '2019-09-02 01:33:22', NULL, '004E0049005300200074006900640061006B00200074006900640061006B0020007400650072006400610066007400610072002C002000730069006C00610068006B0061006E002000630065006B0020006B0065006D00620061006C00690020004E004900530020007300690073007700610020', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'NIS tidak tidak terdaftar, silahkan cek kembali NIS siswa ', 17, '', 1, 'SendingOKNoReport', -1, 27, 255, '', -1),
('2019-09-02 01:35:25', '2019-09-02 01:34:54', '2019-09-02 01:35:25', NULL, '00500065006C0061006E00670067006100720061006E0020003A0020004200650072006B0075006B0075002000700061006E006A0061006E00670020002E00200050006100640061002000740061006E006700670061006C0020003A002000300035002D00300038002D0032003000310039', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Pelanggaran : Berkuku panjang . Pada tanggal : 05-08-2019', 19, '', 1, 'SendingOKNoReport', -1, 28, 255, '', -1),
('2019-09-02 01:35:29', '2019-09-02 01:34:54', '2019-09-02 01:35:29', NULL, '00500065006C0061006E00670067006100720061006E0020003A0020004200650072006B0075006B0075002000700061006E006A0061006E00670020002E00200050006100640061002000740061006E006700670061006C0020003A002000300032002D00300038002D0032003000310039', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Pelanggaran : Berkuku panjang . Pada tanggal : 02-08-2019', 18, '', 1, 'SendingOKNoReport', -1, 29, 255, '', -1),
('2019-09-02 04:09:28', '2019-09-02 04:08:54', '2019-09-02 04:09:28', NULL, '00500065006C0061006E00670067006100720061006E0020003A0020004200650072006B0075006B0075002000700061006E006A0061006E00670020002E00200050006100640061002000740061006E006700670061006C0020003A002000300035002D00300038002D0032003000310039', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Pelanggaran : Berkuku panjang . Pada tanggal : 05-08-2019', 21, '', 1, 'SendingOKNoReport', -1, 30, 255, '', -1),
('2019-09-02 04:09:31', '2019-09-02 04:08:54', '2019-09-02 04:09:31', NULL, '004D00610061006600200070006500720069006E007400610068002000730061006C00610068002C002000730069006C00610068006B0061006E002000630065006B0020006B0065006D00620061006C0069002000500045004C0041004E00470047004100520041004E003C00730070006100730069003E004E00490053', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Maaf perintah salah, silahkan cek kembali PELANGGARAN<spasi>NIS', 20, '', 1, 'SendingOKNoReport', -1, 31, 255, '', -1),
('2019-09-02 04:09:35', '2019-09-02 04:09:29', '2019-09-02 04:09:35', NULL, '00500065006C0061006E00670067006100720061006E0020003A0020004200650072006B0075006B0075002000700061006E006A0061006E00670020002E00200050006100640061002000740061006E006700670061006C0020003A002000300035002D00300038002D0032003000310039', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'Pelanggaran : Berkuku panjang . Pada tanggal : 05-08-2019', 22, '', 1, 'SendingOKNoReport', -1, 32, 255, '', -1),
('2019-09-02 04:25:39', '2019-09-02 04:25:26', '2019-09-02 04:25:39', NULL, '004E0049005300200074006900640061006B00200074006900640061006B0020007400650072006400610066007400610072002C002000730069006C00610068006B0061006E002000630065006B0020006B0065006D00620061006C00690020004E004900530020007300690073007700610020', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'NIS tidak tidak terdaftar, silahkan cek kembali NIS siswa ', 23, '', 1, 'SendingOKNoReport', -1, 33, 255, '', -1),
('2019-09-02 04:26:46', '2019-09-02 04:26:29', '2019-09-02 04:26:46', NULL, '004E0049005300200074006900640061006B00200074006900640061006B0020007400650072006400610066007400610072002C002000730069006C00610068006B0061006E002000630065006B0020006B0065006D00620061006C00690020004E004900530020007300690073007700610020', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'NIS tidak tidak terdaftar, silahkan cek kembali NIS siswa ', 24, '', 1, 'SendingOKNoReport', -1, 34, 255, '', -1),
('2019-09-02 04:28:20', '2019-09-02 04:27:47', '2019-09-02 04:28:20', NULL, '004E0049005300200074006900640061006B00200074006900640061006B0020007400650072006400610066007400610072002C002000730069006C00610068006B0061006E002000630065006B0020006B0065006D00620061006C00690020004E004900530020007300690073007700610020', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'NIS tidak tidak terdaftar, silahkan cek kembali NIS siswa ', 25, '', 1, 'SendingOKNoReport', -1, 35, 255, '', -1),
('2019-09-02 04:28:23', '2019-09-02 04:28:11', '2019-09-02 04:28:23', NULL, '004E0049005300200074006900640061006B00200074006900640061006B0020007400650072006400610066007400610072002C002000730069006C00610068006B0061006E002000630065006B0020006B0065006D00620061006C00690020004E004900530020007300690073007700610020', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'NIS tidak tidak terdaftar, silahkan cek kembali NIS siswa ', 26, '', 1, 'SendingOKNoReport', -1, 36, 255, '', -1),
('2019-09-02 04:43:03', '2019-09-02 04:42:41', '2019-09-02 04:43:03', NULL, '004E0049005300200074006900640061006B00200074006900640061006B0020007400650072006400610066007400610072002C002000730069006C00610068006B0061006E002000630065006B0020006B0065006D00620061006C00690020004E004900530020007300690073007700610020', '+62895337773784', 'Default_No_Compression', '', '+6289644000001', -1, 'NIS tidak tidak terdaftar, silahkan cek kembali NIS siswa ', 27, '', 1, 'SendingOKNoReport', -1, 37, 255, '', -1);

--
-- Triggers `sentitems`
--
DELIMITER $$
CREATE TRIGGER `sentitems_timestamp` BEFORE INSERT ON `sentitems`
 FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `NIS_siswa` varchar(4) NOT NULL DEFAULT '',
  `NIP` varchar(18) NOT NULL,
  `Semester` int(1) NOT NULL,
  `Tahun_ajaran` varchar(11) NOT NULL,
  `Kode_jurusan` varchar(3) NOT NULL,
  `Kode_kelas` varchar(5) NOT NULL,
  `Nama_siswa` varchar(30) NOT NULL,
  `Alamat_siswa` varchar(100) NOT NULL,
  `No_hp_siswa` varchar(13) NOT NULL,
  `Nama_wali_siswa` varchar(30) NOT NULL,
  `No_hp_wali_siswa` varchar(13) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS_siswa`, `NIP`, `Semester`, `Tahun_ajaran`, `Kode_jurusan`, `Kode_kelas`, `Nama_siswa`, `Alamat_siswa`, `No_hp_siswa`, `Nama_wali_siswa`, `No_hp_wali_siswa`, `photo`) VALUES
('9201', '12345', 1, '2019/2020', 'AP', '026', 'Ade Amelia', 'Jalan Jati IV NO. 135 T. Raya , Bandar Lampung', '0895604451786', 'Rudia', '082332273345', ''),
('9230', '12345', 1, '2019/2020', 'PM', '021', 'Siti Nurhasanah', 'JL. Pangeran Antasari No. 12', '0895604321455', 'Sapar', '082181133765', '');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE IF NOT EXISTS `usergroup` (
  `id_usergroup` varchar(30) NOT NULL,
  `nama_usergroup` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`id_usergroup`, `nama_usergroup`) VALUES
('1', 'Admin'),
('2', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gammu`
--
ALTER TABLE `gammu`
  ADD PRIMARY KEY (`Version`);

--
-- Indexes for table `guru_bk`
--
ALTER TABLE `guru_bk`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `id_usergroup` (`id_usergroup`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`Kode_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`Kode_kelas`);

--
-- Indexes for table `outbox`
--
ALTER TABLE `outbox`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`),
  ADD KEY `outbox_sender` (`SenderID`(250));

--
-- Indexes for table `outbox_multipart`
--
ALTER TABLE `outbox_multipart`
  ADD PRIMARY KEY (`ID`,`SequencePosition`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`Kode_pelanggaran`);

--
-- Indexes for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  ADD PRIMARY KEY (`Id_pelanggaran_siswa`),
  ADD KEY `Kode_pelanggaran` (`Kode_pelanggaran`),
  ADD KEY `NISN_siswa` (`NIS_siswa`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`IMEI`);

--
-- Indexes for table `sentitems`
--
ALTER TABLE `sentitems`
  ADD PRIMARY KEY (`ID`,`SequencePosition`),
  ADD KEY `sentitems_date` (`DeliveryDateTime`),
  ADD KEY `sentitems_tpmr` (`TPMR`),
  ADD KEY `sentitems_dest` (`DestinationNumber`),
  ADD KEY `sentitems_sender` (`SenderID`(250));

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS_siswa`),
  ADD KEY `Id_aemester` (`Semester`),
  ADD KEY `NIS_siswa` (`NIS_siswa`),
  ADD KEY `Kode_jurusan` (`Kode_jurusan`),
  ADD KEY `Kode_kelas` (`Kode_kelas`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`id_usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `outbox`
--
ALTER TABLE `outbox`
  MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  MODIFY `Id_pelanggaran_siswa` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `Semester` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
