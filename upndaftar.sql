-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2014 at 04:51 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `upndaftar`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `test` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`test`) VALUES
(1),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hubungi`
--

CREATE TABLE IF NOT EXISTS `tbl_hubungi` (
`id_hubungi` int(10) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_hubungi`
--

INSERT INTO `tbl_hubungi` (`id_hubungi`, `nama`, `email`, `pesan`) VALUES
(2, 'Administrator', 'spdc_sby@yahoo.com', 'Silahkan Daftar'),
(3, 'soegi', 'spdc_sby@yahoo.com', 'ini coba yach'),
(4, 'soegi', 'soegi_null@ymail.com', 'ini lo'),
(5, 'MINA', 'soegi_null@ymail.com', 'ini lho coba ya'),
(6, 'Gotama Tanju', 'AsokaChan99@yahoo.com', 'permisi, saya mau tanya untuk atas nama Gotama Tanju dengan npm 1353010032 pendaftaran pelatihan autocad sudah didaftarkan pada jadwal hari apa ?'),
(7, 'MH. Chifdzuddin', 'mh.chifdzuddin@gmail.com', 'Ini di buat daftar kok nggak bisa.... gimana sebenarnya cara daftarnya?'),
(8, 'Gitasari Pramoedya', 'gitasaripramoedya@gmail.com', 'permisi , sya ingin mengecek data yang saya masukkan di pendaftran baru untuk autocad.. sya tgu balasnnya terimakasih '),
(9, 'I''in Rahmatul Fitriyah', 'irvy_muafiyah@yahoo.com', 'Apa boleh mahasiswa luar universitas pembangunan nasional mengikuti pelatihan ini\n'),
(10, 'FARIF INDARYONO', 'farif.ind@gmail.com', 'pak ini mau daftar pelatihan komputer bagaimana caranya?\n\ntadi saya sudah ikut hari senin jam 10 tp belum daftar online cuma sudah nulis nama di absensi sewaktu masuk kelas.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
`id_jadwal` int(11) NOT NULL,
  `id_jur` int(11) DEFAULT NULL,
  `id_mk` int(11) DEFAULT NULL,
  `hari` varchar(20) DEFAULT NULL,
  `jam` varchar(30) DEFAULT NULL,
  `ruang` varchar(30) DEFAULT NULL,
  `kuota` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_jur`, `id_mk`, `hari`, `jam`, `ruang`, `kuota`) VALUES
(1, 19, 5, 'SENIN', '10.00 - 11.30', 'LAB PUSKOM 1', 2),
(2, 21, 3, 'SENIN', '12.00 - 13.30', 'LAB PUSKOM 1', 10),
(3, 19, 5, 'SENIN', '14.00 - 15.30', 'LAB PUSKOM 1', 0),
(4, 19, 5, 'SENIN', '10.00 - 11.30', 'LAB PUSKOM 2', 11),
(5, 19, 5, 'SENIN', '12.00 - 13.30', 'LAB PUSKOM 2', 9),
(6, 19, 5, 'SELASA', '10.00 - 11.30', 'LAB PUSKOM 1', 12),
(7, 21, 3, 'SELASA', '12.00 - 13.30', 'LAB PUSKOM 1', 11),
(8, 19, 5, 'SELASA', '14.00 - 15.30', 'LAB PUSKOM 1', 0),
(9, 19, 5, 'SELASA', '10.00 - 11.30', 'LAB PUSKOM 2', 5),
(10, 19, 5, 'SELASA', '12.00 - 13.30', 'LAB PUSKOM 2', 5),
(11, 19, 5, 'RABU', '10.00 - 11.30', 'LAB PUSKOM 1', 4),
(12, 21, 3, 'RABU', '12.00 - 13.30', 'LAB PUSKOM 1', 15),
(13, 19, 5, 'RABU', '10.00 - 11.30', 'LAB PUSKOM 2', 13),
(14, 19, 5, 'RABU', '12.00 - 13.30', 'LAB PUSKOM 2', 0),
(15, 21, 3, 'RABU', '14.00 - 15.30', 'LAB PUSKOM 2', 11),
(16, 19, 5, 'KAMIS', '10.00 - 11.30', 'LAB PUSKOM 1', 14),
(17, 21, 3, 'KAMIS', '12.00 - 13.30', 'LAB PUSKOM 1', 14),
(18, 19, 5, 'KAMIS', '14.00 - 15.30', 'LAB PUSKOM 1', 8),
(19, 19, 5, 'KAMIS', '10.00 - 11.30', 'LAB PUSKOM 2', 14),
(20, 19, 5, 'KAMIS', '12.00 - 13.30', 'LAB PUSKOM 2', 4),
(21, 19, 5, 'KAMIS', '14.00 - 15.30', 'LAB PUSKOM 2', 13),
(22, 19, 5, 'JUMAT', '10.00 - 11.30', 'LAB PUSKOM 1', 1),
(23, 21, 3, 'JUMAT', '13.00 - 14.30', 'LAB PUSKOM 1', 15),
(24, 19, 5, 'JUMAT', '10.00 - 11.30', 'LAB PUSKOM 2', 0),
(25, 21, 3, 'JUMAT', '13.00 - 14.30', 'LAB PUSKOM 2', 15),
(26, 21, 3, 'JUMAT', '18.00 - 19.30', 'LAB PUSKOM 2', 15),
(27, 20, 1, 'JUMAT', '08.00 - 09.30', 'LAB PERTANIAN', 15),
(28, 20, 1, 'JUMAT', '10.00 - 11.30', 'LAB PERTANIAN', 12),
(29, 20, 1, 'JUMAT', '13.00 - 14.30', 'LAB PERTANIAN', 14),
(30, 20, 1, 'JUMAT', '15.00 - 16.30', 'LAB PERTANIAN', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE IF NOT EXISTS `tbl_jurusan` (
`id_jur` int(11) NOT NULL,
  `nm_jur` varchar(20) DEFAULT NULL,
  `nm_fak` varchar(20) DEFAULT NULL,
  `kodenpm` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_jur`, `nm_jur`, `nm_fak`, `kodenpm`) VALUES
(1, 'AGROTEKNOLOGI\r\n', 'PERTANIAN\r\n\r\n', 25),
(2, 'AGROBISNIS\r\n', 'PERTANIAN\r\n\r\n', 24),
(3, 'EKONOMI PEMBANGUNAN', 'EKONOMI', NULL),
(4, 'MANAJAMEN', 'EKONOMI', NULL),
(5, 'AKUNTANSI', 'EKONOMI', NULL),
(6, 'TEKNIK KIMIA', 'FTI', 31),
(7, 'TEKNIK INDUSTRI', 'FTI', NULL),
(8, 'TEKNOLOGI PANGAN', 'FTI', 33),
(9, 'TEKNIK INFORMATIKA', 'FTI', 34),
(10, 'SISTEM INFORMASI', 'FTI', 35),
(11, 'ADMINISTRASI NEGARA ', 'FISIP', NULL),
(12, 'ADMINISTASI NIAGA / ', 'FISIP', NULL),
(13, 'ILMU KOMUNIKASI', 'FISIP', NULL),
(14, 'HUB. INTERNASIONAL', 'FISIP', NULL),
(15, 'TEKSNIK ARSITEKTUR', 'FTSP', 51),
(16, 'TEKNIK LINGKUNGAN', 'FTSP', 52),
(17, 'TEKNIK SIPIL', 'FTSP', 53),
(18, 'DKV', 'FTSP', 54),
(19, 'FTSP', 'FTSP', 5),
(20, 'PERTANIAN', 'PERTANIAN', 2),
(21, 'ILMU HUKUM', 'HUKUM', 71);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mk`
--

CREATE TABLE IF NOT EXISTS `tbl_mk` (
`id_mk` int(11) NOT NULL,
  `nm_mk` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_mk`
--

INSERT INTO `tbl_mk` (`id_mk`, `nm_mk`) VALUES
(1, 'SPSS'),
(2, 'M. EXCELL 2007\r\n'),
(3, 'M. WORD 2007\r\n'),
(4, 'COREL DRAW'),
(5, 'AUTO CAD'),
(6, 'M. PROJECT 2007\r\n'),
(7, 'HYSIS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai` (
`id_nilai` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nilai1` int(11) NOT NULL,
  `nilai2` int(11) NOT NULL,
  `nilai3` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `rata_rata` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `id_jadwal`, `id_siswa`, `nilai1`, `nilai2`, `nilai3`, `uts`, `uas`, `total`, `rata_rata`) VALUES
(1, 6, 186, 100, 90, 80, 70, 60, 400, 80),
(2, 6, 88, 95, 85, 75, 65, 55, 375, 75),
(3, 6, 58, 92, 82, 72, 62, 52, 360, 72),
(4, 2, 38, 100, 90, 80, 70, 60, 400, 80),
(5, 2, 60, 95, 85, 75, 65, 55, 375, 75),
(6, 2, 68, 92, 82, 72, 62, 52, 360, 72),
(7, 2, 123, 96, 86, 76, 66, 56, 380, 76),
(8, 2, 69, 97, 87, 77, 67, 57, 385, 77);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE IF NOT EXISTS `tbl_pendaftaran` (
`id_siswa` int(11) NOT NULL,
  `npm` varchar(11) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `tgldaftar` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=189 ;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id_siswa`, `npm`, `nama`, `alamat`, `tmp_lahir`, `tgl_lahir`, `telp`, `email`, `id_jadwal`, `tgldaftar`) VALUES
(8, '1371010041', 'ELOK NURTRIA ANGGRAENI', 'MEDOKAN BARU 2/9', 'SURABAYA', '1995-05-16', '03134062353', 'somuchileftyou@yahoo.com', 17, '2013-12-23 14:27:39'),
(9, '1353010096', 'SLAMET RAHARJO', 'JL. DUKUH BULAK BANTENG SUROPATI 2 NO 83', 'SURABAYA', '1995-09-08', '088217211532', 'slametraharjom@yahoo.com', 4, '2013-12-23 14:28:21'),
(10, '1371010069', 'LEONARD SASTRO ADI USBOKO', 'KEPUTRAN PASAR KECIL 1/60-B', 'SURABAYA', '1991-12-03', '087751000113', 'seernine@gmail.com', 15, '2013-12-23 14:30:11'),
(11, '1353010043', 'Riski Qory Alfarosy', 'jl. kedinding lor gang palem 2 no 44', 'surabaya', '1995-05-06', '085733298775', 'margarethaqory@yahoo.co.id', 3, '2013-12-23 14:43:58'),
(12, '1353010015', 'Aris Bachtiar', 'jl. kedinding lor gang bougenvil no 19', 'surabaya', '1995-04-03', '089651004534', 'ariesbachtiar86@yahoo.com', 3, '2013-12-23 14:47:24'),
(13, '1352010017', 'Andi Yoesoef', 'Jl. Balongsari Dalam no.1 , Tandes - Surabaya', 'Surabaya', '1995-03-08', '089677637555', 'dexterz.jr5@gmail.com', 13, '2013-12-23 14:51:29'),
(14, '1353010042', 'Miftakhul Jannah', 'jl. keputih utara gang buntu no 18b', 'tulungagung', '1995-03-09', '085649173200', 'miftakhul_9395@yahoo.com', 3, '2013-12-23 14:51:49'),
(15, '1352010016', 'Nindya Juwita Maharani', 'Jl. Jeruk Kauman IV Wage Sidoarjo', 'Pacitan', '1995-06-24', '085733025373', 'nindymaharani@rocketmail.com', 8, '2013-12-23 19:22:13'),
(16, '1352010061', 'Aisyah Rahmatus Saumi', 'Pakis Tirtosari 11 komp. PDAM Surabaya', 'Surabaya', '1995-02-21', '089679520163', 'aisrahmatus@yahoo.com', 8, '2013-12-23 19:26:10'),
(17, '1352010029', 'Vikri Nurul Firdaus', 'Jl. Pisang Candi RT. 06 RW. 10 Wage Taman Sidoarjo', 'Sidoarjo', '1995-05-20', '085785887020', 'vikry_mania@yahoo.com', 8, '2013-12-23 19:33:08'),
(18, '1352010023', 'Ayu Larasati', 'Jl. Dempo dj-29/61 kepuh kiriman, Waru - Sidoarjo', 'Surabaya', '1994-12-08', '08974857570', 'ayuk.larasati@yahoo.com', 8, '2013-12-23 19:36:12'),
(19, '1352010020', 'Faisal Andrianto', 'Surak , Pesanggrahan . gudo Jombang', 'Jombang', '1995-03-07', '085730545658', 'faisalandrianto@yahoo.co.id', 8, '2013-12-23 19:44:01'),
(20, '1352010026', 'Adinda Sashi Treditha', 'Rungkut Asri Timur XII/83', 'Surabaya', '1995-05-02', '087854311582', 'tredithadinda@gmail.com', 8, '2013-12-23 19:46:50'),
(21, '1352010013', 'Mukhammad Kharis', 'Gilang RT. 19 RW. 05 Taman Sepanjang', 'Sidoarjo', '1994-06-25', '083831266568', 'kariskuchikijeunk@gmail.com', 8, '2013-12-23 19:50:46'),
(22, '1352010035', 'dela fajar kurniawati', 'krukah selatan 68', 'surabaya', '1995-05-26', '083849783052', 'delafajar2605@gmail.com', 8, '2013-12-23 20:17:06'),
(23, '1353010002', 'reinaldy.p.p', 'perumahan indah lestari blok a 47', 'pagatan', '1995-04-07', '087852635645', 'reinaldy_putra@yahoo.com', 1, '2013-12-23 20:27:16'),
(24, '1352010033', 'shintamira istiana', 'desa kalitidu rt.05/rw.01 kalitidu-bojonegoro', 'bojonegoro', '1995-10-13', '082331184666', 'shintamiraistiana@gmail.com', 8, '2013-12-23 21:15:30'),
(25, '1352010069', 'Tritantyo Ramadhanu', 'Purimas Pecatu 3 blok E15-15', 'Indramayu', '1994-02-22', '085755455594', 'abang_monyot_hippo@yahoo.com', 8, '2013-12-23 21:48:33'),
(26, '1253010053', 'ALFATAH TRI PRASETYO', 'DS.DURAN RT 13/RW 06 Sedati,Sidoarjo', 'Sidoarjo', '1994-07-21', '083832786786', 'egoprak@ymail.com', 3, '2013-12-23 22:36:16'),
(27, '1352010006', 'Conny Lidya Febrina', 'Graha Kuncara Eksekutif AC-6 Sidoarjo', 'Surabaya', '1995-02-22', '08981208570', 'zilaconny@yahoo com', 8, '2013-12-24 04:15:57'),
(28, '1352010062', 'Azizah Shafira', 'Perumahan Candi Indah L/20 Jombang', 'Jombang', '1994-11-11', '082139663222', 'azizahshafira79@gmail.com', 8, '2013-12-24 07:40:37'),
(31, '1352010036', 'Frizy Novalia Widianti', 'Jl. Magersari gang 7 / 221', 'Surabaya', '1995-08-01', '082131243141', 'frizynovalia@ymail.com', 8, '2013-12-24 21:19:51'),
(32, '1352010015', 'Dita Ayu Wulandari', 'wonocolo pabrik kulit nomer 37', 'Surabaya', '1995-05-24', '081231311838', 'dita_ayu10@ymail.com', 8, '2013-12-24 21:24:14'),
(33, '1352010003', 'Richo Kumara Putra', 'sidosermo 4 nomor 58', 'Sungai riam', '1995-03-22', '085332224345', 'richoputra10@gmail.com', 8, '2013-12-24 21:26:34'),
(34, '1352010080', 'NOVIA MAR''ATUS SHOLIKHA', 'JALAN MENGANTI GOGOR GANG 6 NOMOR 19B', 'SURABAYA', '1996-11-27', '085607572072', 'noviamaratus@gmail.com', 5, '2013-12-25 10:03:43'),
(35, '1352010079', 'DWI NAWANG SARI', 'JALAN HAYAM WURUK TUBAN', 'TUBAN', '1993-02-04', '08563333403', 'dwinawangs@gmail.com', 5, '2013-12-25 10:06:56'),
(36, '1352010081', 'Fitrotul Rofika', 'Jalan Bangkingan Nomor 10 Lakarsantri Surabaya', 'Sidoarjo', '1996-02-11', '085645255295', 'rofikafitrotul@gmail.com', 5, '2013-12-25 10:35:55'),
(37, '1352010059', 'AMY NIRMALA PUSPITA NINGRUM', 'JALAN SIWALANKERTO TENGAH NO. 252 A SURABAYA', 'SURABAYA', '1995-05-09', '083830189799', 'ma_la_gue@yahoo.co.id', 1, '2013-12-26 08:57:01'),
(38, '1071010053', 'eliza firdiana', 'jl. Hayam Wuruk 63a SIdiharjo', 'surabaya', '1992-01-20', '08973140006', 'elizafirdiana@gmail.com', 2, '2013-12-27 10:12:05'),
(39, '1353010068', 'Hendrick Vallensius Rumsowek', 'Medokan Ayu Blok IE 45', 'Biak', '1995-02-13', '081219939133', 'hendrick.rumsowek@gmail.com', 1, '2013-12-27 14:09:38'),
(40, '1353010121', 'andreas kurniawan', 'JL.Tembus Kaliombo Kediri', 'Kediri', '1995-05-01', '085706737776', 'andreaskurniawan777@gmail.com', 1, '2013-12-29 01:49:53'),
(41, '1352010025', 'Pegmatito Anantya Perkasa', 'Jl. Mojopahit No. 578, Sooko, Mojokerto', 'Bekasi', '1995-12-27', '08563061599', 'pegmatito@yahoo.com', 11, '2013-12-30 13:30:56'),
(42, '1352010001', 'Bernardete Ferdinata Dandel', 'Kampung Malang 8/9', 'Surabaya', '1994-05-23', '085645921225', 'bernardeteferdinatadandel@yahoo.co.id', 8, '2013-12-30 15:34:37'),
(43, '1351010045', 'DENI FATUR ROKHMAN', 'KALIKEPITING 165 BLK', 'SURABAYA', '1995-12-16', '083849111650', 'dfaturrokhman@yahoo.com', 1, '2013-12-30 20:52:19'),
(44, '1025010041', 'lianah', 'perum ykp RK V/ K 11', 'pasuruan', '1989-07-12', '089676419408', 'liencaem.ly@gmail.com', 28, '2014-01-02 14:30:33'),
(45, '1352010067', 'nisa robitul mardliyah', 'Rt.05 Rw.02 Des/Kec Karangan Kab. Trenggalek', 'Trenggalek', '1995-05-29', '087755258863', 'nisarobitul_m@yahoo.co.id', 3, '2014-01-08 10:06:17'),
(46, '1352010040', 'ririk indah wiyanti', 'ds.yungyang kec.modo kab.lamongan', 'lamongan', '1995-04-21', '+6285706934943', 'ririkindahwiyanti@gmail.com', 3, '2014-01-08 10:06:25'),
(47, '1352010053', 'yusna tarita ali', 'jalan sukun no 154 rt 05 rw 01 puhjajar', 'kediri', '1994-12-20', '085730073004', 'yusna_taritaali@yahoo.co.id', 3, '2014-01-08 10:08:27'),
(48, '1352010056', 'Dessy Endah Ratna Ningrum', 'jl. Dirgahayu Gg.V/28 RT 05, RW 05 kabupaten pamek', 'pamekasan', '1994-12-10', '087750502512', 'sweety_dessy@yahoo.co.id', 3, '2014-01-08 10:09:29'),
(49, '1352010063', 'DWI PERMATA SARI', 'PONDOK SEDATI ASRI BLOK R-26, SIDOARJO', 'SURABAYA', '1995-01-03', '089678220243', 'dwipermatasari.chasa@gmail.com', 3, '2014-01-08 10:10:24'),
(50, '1352010051', 'Nisa Rahmaningtias', 'Kalibokor 2/21', 'Tuban', '1995-09-02', '085732596893', 'n.rahmaningtias@yahoo.com', 3, '2014-01-08 10:12:26'),
(51, '1025010030', 'nelin trisnawati', 'jl.raya randegan rt 1 rw 1 tanggulangin', 'sidoarjo', '1991-01-12', '081913102009', 'nellyn_haru@yahoo.com', 28, '2014-01-08 13:37:02'),
(52, '1225010042', 'J MALINDA', 'MEDOKAN SAWAH NO 17', 'BATAM', '1994-05-28', '082131043824', 'jejemalinda@rocketmail.com', 29, '2014-01-08 13:41:00'),
(53, '1352010031', 'angga adi putra', 'jombang ', 'jombang', '1996-03-23', '085736125155', 'anggaadi19@gmail.com', 3, '2014-01-10 17:12:01'),
(54, '1153010052', 'agus supriyadi', 'kl. kh mukmin rt 05/ rw 02 no 70', 'sidoarjo', '1992-08-23', '085755657556', 'agus.narsiez@gmail.com', 18, '2014-01-11 08:23:45'),
(55, '1225010028', 'Gardian Wahyu Lonlyna Saras', 'Jl. Prawirodipuuran Kab: Madiun Ds. Mejayan Dsn. G', 'Madiun', '1994-06-22', '085732230458', 'Gardian.wahyu.22@gmail.com', 28, '2014-01-11 19:46:41'),
(56, '1353010057', 'Irvan Eko Nurvianto', 'Lamongrejo, Ngimbang, Lamongan', 'Lamongan', '1995-06-10', '082140374747', 'irvansip@gmail.com', 1, '2014-01-13 13:00:40'),
(57, '1352010021', 'Gisela Anita Piri ', 'Puri Lidah Kulon B-24', 'Balikpapan', '1995-05-04', '085386373365', 'anitagisela@ymail.com', 22, '2014-01-13 13:23:55'),
(58, '1352010014', 'Rina Novitasari', 'Jl. Selong Permai (Sampang-Madura)', 'Sampang', '1995-08-03', '081913577883', 'rienanovita@gmail.com', 6, '2014-01-14 18:07:26'),
(59, '1353010003', 'Abdul Hakim Zakin', 'Jl. Gajah Mada no 49 Pasuruan', 'Pasuruan', '1993-04-16', '087856772000', 'sawak_jal@yahoo.co.id', 3, '2014-01-14 20:17:51'),
(60, '1071010028', 'NOVIA AYU PERMATASARI', 'PERUMAHAN GUNUNG SARI INDAH BLOK HH/20', 'SURABAYA', '1992-11-16', '081232505713', 'noviafx@gmail.com', 2, '2014-01-15 12:28:53'),
(61, '1353010004', 'M.Junaidi', 'Jl. Kedinding tengah 4D NO.30 Surabaya', 'Surabaya', '1990-06-16', '081252544411', 'em_joen90@yahoo.com', 3, '2014-01-15 14:26:57'),
(62, '1352010022', 'Ni Made Maya Febriana Ramadhany', 'Jln. Raya Pangrango 16 Kota Mojokerto', 'Surabaya', '1995-02-06', '082233033021', 'nimademayapartii@ymail.com', 22, '2014-01-15 17:03:54'),
(63, '1353010021', 'Alief Rizky Harnan', 'Pondok Benowo Indah xx-14, Surabaya', 'Surabaya', '1995-04-16', '085732911082', 'rizky_alief@yahoo.co.id', 1, '2014-01-16 09:45:06'),
(64, '1353010010', 'FAIZAL ANGGRIAWAN', 'PERUMNAS CANDI REJO MEGAH L10, LOCERET, NGANJUK', 'NGANJUK', '1995-03-25', '085735657380', 'AWANANGGRIAWAN@GMAIL,COM', 18, '2014-01-16 11:39:24'),
(65, '1353010097', 'MOCH ZAHIQ FITRAH ABDILLAH', 'BORO RT09 RW 03 kec. Tanggulangin', 'SIDOARJO', '1995-03-12', '089678446211', 'fitrahmzahiq@gmail.com', 1, '2014-01-16 11:59:06'),
(66, '1353010036', 'Asoka Maharani Kusuma Dewi', 'Perumahan Kahuripan Nirwana Village Blok CA 1 nomo', 'Surabaya', '1995-03-21', '085733000495', 'AsokaChan99@yahoo.com', 3, '2014-01-16 12:17:32'),
(67, '1353010032', 'Gotama Tanju', 'Jalan Kedung Tarukan Baru 1A no 1', 'Surabaya', '1995-02-04', '089626337588', 'Tanju.titlgitaris@gmail.com', 3, '2014-01-16 12:22:55'),
(68, '0971010051', 'probo daru laksono', 'jl wisma gayatri kodam brawijaya', 'kediri', '1990-08-31', '085655666795', 'probodaru@gmail.com', 2, '2014-01-16 14:00:44'),
(69, '1071010052', 'septyan danang pradypta', 'jl.tenggilis mulyo VI/97 E surabaya', 'SURABAYA', '1992-09-15', '085730386112', 'danangseptyan@gmail.com', 2, '2014-01-16 14:02:59'),
(70, '1353010070', 'yuniatur rizki uswatun hasanah', 'semampir kelurahan no.43', 'surabya', '1995-06-16', '085706657277', 'yuniatur1@gmail.com atau yuniatur1@yahoo.co.id', 1, '2014-01-16 21:26:08'),
(71, '1353010061', 'hakiki rizki amalia', 'jln. sunan giri ', 'gresik', '1995-01-16', '083854450119', 'hakiki.rizky@rocketmail.com', 1, '2014-01-16 22:11:32'),
(72, '1353010081', 'muhammad munif', 'jln. simolawang V/ 7C', 'surabaya', '1995-03-18', '083849601455', 'muhammadmunif18@gmail.com', 1, '2014-01-16 22:20:45'),
(73, '1353010049', 'masyithoh puspita sari', 'jl. tuban raya no.7 surabaya ', 'sidoarjo', '1995-06-27', '081235901990', 'vitaitsmyname@yahoo.com', 21, '2014-01-17 04:48:18'),
(74, '1153010053', 'MH. Chifdzuddin', 'Jln. Brawijaya No. 51 Sembunganyar, Dukun, Gresik', 'Gresik', '1992-11-14', '085777768303', 'mh.chifdzuddin@gmail.com', 1, '2014-01-17 12:23:00'),
(75, '1153010044', 'Nur Ichsan Riskyawan', 'Kendangsari 8A/22D, Surabaya', 'Surabaya', '1993-12-17', '083839999491', 'nurichsan17@gmail.com', 1, '2014-01-17 12:32:53'),
(76, '1353010027', 'fanida rizkia putri', 'semolo waru indah 1 blok.E 13 surabaya', 'lamongan', '1995-01-08', '081331608302', 'fanidarizqia0801@gmail.com', 18, '2014-01-17 13:25:30'),
(77, '1353010046', 'ratih dwi mayangsari', 'Ds. pojok campurdarat tulungagung', 'tulungagung', '1995-07-25', '085646726869', 'ratihmayangsari254@yahoo.com', 21, '2014-01-17 13:39:07'),
(78, '1352010047', 'gita fika febriana', 'jambangan baru 1/9', 'surabaya', '1995-02-20', '085730839993', 'gitafikafeb@yahoo.com', 20, '2014-02-03 12:34:52'),
(79, '1352010076', 'prastika aliffaturahma', 'kebon anom 1/40 a gedangan ', 'surabaya', '1995-03-09', '085859293555', 'prastika.rahma@yahoo.com', 20, '2014-02-03 12:38:19'),
(80, '1352010008', 'Muhammad Fahrul Anam', 'Dahan rejo lor RT:2/RW:2  Kebomas - Gresik', 'gresik', '1994-09-21', '083856556004', 'fahrul_anam47@yahoo.com', 18, '2014-02-03 13:46:18'),
(81, '1352010030', 'bagus taruno', 'jl.dr.wahidin sudiro husodo gg nakula 39 TUBAN', 'jayapura', '1995-03-17', '085646112583', 'danutbn@GMAIL', 18, '2014-02-03 13:56:30'),
(82, '1352010066', 'hilda fentika jayanti', 'jl.bulak banteng lor gang bhineka X nomer 9', 'SURABAYA', '1995-01-09', '083830254402', 'hildafentika@gmail,com', 20, '2014-02-03 18:07:07'),
(83, '1352010019', 'MUCHAMMAD YAZID AL BASTHOMMI AN-NUUR', 'jln.sindujoyo 2A / 2 Kroman Gresik', 'Gresik', '1994-12-05', '08983982015', 'yazid.bonjov@yahoo.com', 18, '2014-02-03 18:40:29'),
(84, '1352010048', 'Gitasari Pramoedya', 'jl. oikumene No.51 kendari Sulawesi Tenggara', 'kendari', '1996-02-02', '085299427760', 'gitasaripramoedya@gmail.com', 20, '2014-02-03 19:38:25'),
(85, '1352010052', 'Dewi Humairoh', 'Ds. sungon RT 19 RW 06 Suko Sidoarjo', 'Sidoarjo', '1994-11-09', '08983866137', 'dewihum@gmail.com', 20, '2014-02-03 19:44:54'),
(86, '1352010057', 'Lydia Oktaviani W', 'Manyar dukuh No. 29 Surabaya', 'Surabaya', '1995-10-11', '08991007372', 'lydiaokta12@ymail.com', 20, '2014-02-03 19:50:32'),
(87, '1352010058', 'Akhmad Aliyuddin Hidayatullah', 'dsn. Dodokan rt 17 rw 03. no:17 ds. Tanjung Sari T', 'surabaya', '1994-12-28', '085731220015', 'aliyuddinstl@gmail.com', 20, '2014-02-04 09:32:01'),
(88, '1352010027', 'ERICHO FERY HARDANA', 'jl.Bumi marina emas barat 6A/15', 'nganjuk', '1995-02-04', '081216627412', 'erichofery.efh@gmail.com', 6, '2014-02-04 11:32:56'),
(89, '1352010065', 'edwin priyo sejati', 'kalibokor 1 /42', 'surabaya', '1994-11-20', '083854020932', 'edwinpriyo3@gmail.com', 20, '2014-02-04 14:47:30'),
(90, '1352010046', 'pranandito wisnu prabowo', 'taman pondok jati AT-10', 'semarang', '1995-11-11', '085733826286', 'dhe.tow@gmail.com', 20, '2014-02-04 14:53:01'),
(91, '1353010108', 'MUHAMMAD MUHTADIN', 'DESA CENDORO KEC.PALANG KAB.TUBAN RT/02 RW/05', 'TUBAN', '1994-10-01', '085706005839', 'muh.muhtadin33@gmail.com', 4, '2014-02-04 16:37:51'),
(92, '1352010077', 'Bagus Kurnia Pardamaian', 'Komplek DPU bina marga A-3 Waru, sidoarjo', 'surabaya', '1995-06-03', '087703308358', 'baguskurnia77@gmail.com', 20, '2014-02-04 16:59:59'),
(93, '1352010004', 'fahmi bin abdullah bazher', 'jl.nyamplungan 8 no.3', 'Dili ', '1994-04-30', '083849353795', 'fahmibazher@ymail.com', 22, '2014-02-05 11:52:18'),
(94, '1351010012', 'Gunadi Wijaya', 'Jalan Jeruk 2 No. 16 RT 17 RW 02 Geluran, Taman - ', 'Sidoarjo', '1994-10-01', '085755279503', 'gunadiwijaya98@gmail.com', 9, '2014-02-05 17:38:34'),
(95, '1352010071', 'mega maharani', 'jalan sidosermo II/24 ', 'jakarta', '1995-03-25', '085730623603', 'megamaharanis@gmail.com', 5, '2014-02-06 20:24:32'),
(96, '1352010044', 'Dhiaulhaq Siti Masyithah', 'Jalan pucangan 1 no 28', 'surabaya', '1995-08-27', '085733127281', 'dhiaulhaqmasyithah27@gmail.com', 5, '2014-02-06 20:27:49'),
(97, '1352010064', 'ARIO YUDHANTO', 'JL.IR.H.JUANDA NO.14 TAMAN JENGGALA SIDOARJO', 'SIDOARJO', '1995-08-18', '083830884920', 'rioyudhanto@gmail.com', 22, '2014-02-07 22:38:13'),
(98, '1352010072', 'Dewantoro Ranto Mukti', 'Jl.Rangkah 6 / 54 ', 'Surabaya', '1995-05-08', '08982126720', 'troymukti@gmail.com', 22, '2014-02-07 22:50:25'),
(99, '1352010068', 'Yenno Ardianto', 'Jl. Ketintang permai Ac 11', 'Surabaya', '1995-03-21', '08813130951', 'yenno8a@yahoo.co.id', 22, '2014-02-07 22:52:40'),
(100, '1352010045', 'Hardian Puji Laksono', 'Jl. Bhaskara 5/19', 'Surabaya', '1995-01-23', '081938220993', 'hardianpuji@gmail.com', 22, '2014-02-07 22:56:51'),
(101, '1352010005', 'Kristianti Yunita', 'Jl.Gunung Anyar,permhan Rungkut Asri Timur.Surabay', 'Maumere,', '1995-06-06', '082301143219', 'cristianti.yunitha@yahoo.co.id', 4, '2014-02-08 18:49:41'),
(102, '1352010010', 'Hakim Fatah Firmansah', 'Rungkut Menanggal Harapan H - 16', 'Surabaya', '1995-07-17', '085791235195', 'hakimfirmansah@yahoo.com', 5, '2014-02-10 10:45:10'),
(103, '1352010011', 'Pamulu bagus suryo saputro', 'jl.pagesangan blok 65f1', 'Surabaya', '1995-04-26', '089678429209', 'pamulusaputra@yahoo.co.id', 18, '2014-02-10 19:35:36'),
(104, '1352010078', 'Bagus Satyawan', 'JL Rungkut Barata XVII/17', 'Surabaya', '1995-02-01', '089697101782', 'bagus_satyawan@yahoo.com', 5, '2014-02-11 13:12:25'),
(105, '1371010071', 'Dewi Nurmanilasari', 'Dsn.Tanggungan RT/RW 001/005 Plumpang Tuban', 'Tuban', '1995-08-21', '082230579927', 'Dewinurmanilasari@yahoo.co.id', 15, '2014-02-12 15:04:23'),
(106, '1352010041', 'Tri Wahyu Priyo Raharjo', 'jl.Bulak Cumpat Barat 3/17', 'Surabaya', '1995-11-29', '03151501499/08988437', 'ardibagas170@gmail.com', 20, '2014-02-13 08:54:19'),
(107, '1253010100', 'Badik Choirudin', 'Jl. Tanggungan - Wringinanom - Gresik', 'Gresik', '1994-05-01', '081234097345', 'badikchoirudin@gmail.com', 14, '2014-02-18 13:09:39'),
(108, '1253010095', 'Pradipta Satrya Henry Maulana', 'Wisma Penjaringan Sari S-19 Surabaya', 'Jember', '1994-09-22', '08990447641', 'prdptstry94@yahoo.com', 14, '2014-02-18 13:13:57'),
(109, '1353010090', 'Popy Ayu Mardiya Ningsih', 'Simo Katrungan Kidul nomor 23A Surabaya', 'Surabaya', '1994-03-22', '083840545544', 'popyayu22@yahoo.com', 14, '2014-02-18 16:39:36'),
(110, '1253010067', 'Rayimas Dwi Kurniawan', 'Perum Delta Sari Indah AR-4 Surabaya', 'Surabaya', '1993-11-24', '083831196156', 'rayzluvmidnight@yahoo.com', 14, '2014-02-20 18:45:10'),
(111, '1253010067', 'Rayimas Dwi Kurniawan', 'Perum Delta Sari Indah AR-4 Sidoarjo', 'Surabaya', '1993-11-24', '083831196156', 'rayzluvmidnight@yahoo.com', 14, '2014-02-20 18:45:46'),
(112, '1252010023', 'ULIVA RAHMAWATI', 'Ds. SEMBUNG,rt. 04, rw. 01 Kec. PARENGAN, Kab. TUB', 'TUBAN', '1993-05-11', '085230849480', 'uliva.rahmawati@yahoo.com', 22, '2014-02-23 18:54:37'),
(113, '1371010057', 'henisa anindita syatiana', 'dharmahusada indah timur L150E', 'surabaya', '1995-11-21', '089605757015', 'aninditaaninditaanindita@yahoo.com', 15, '2014-02-24 12:10:27'),
(114, '1353010089', 'gerry sabtana', 'rusun penjaringan sari blok fb 306', 'blitar ', '1994-08-20', '082333117094', 'sipilupn@yahoo.com', 14, '2014-02-25 22:00:35'),
(115, '1171010101', 'YESSICA NOVALIA HARIYADI', 'PERUMAHAN BLURU PERMAI BLOK JD-09, SIDOARJO', 'SURABAYA', '1993-03-24', '085645927313', 'yessica.novalia@ymail.com', 7, '2014-02-26 12:27:01'),
(116, '1171010071', 'FARAH YUNIAR TAMARINA', 'STAR SAFIRA REGENCY CLUSTER NABILLA B2 NOMER 3', 'BOJONEGORO', '1993-06-24', '085785992699', 'farah.tamarina@gamil.com', 7, '2014-02-26 12:45:44'),
(117, '1171010073', 'LAILI VASETYA', 'DESA KEBOAN ANOM GEDANGAN SIDOARJO', 'SURABAYA', '1992-10-09', '085733320430', 'lailivasetya@gmail.com', 7, '2014-02-26 12:47:45'),
(118, '1371010066', 'ramadhani prasanti', 'medayu utara 27b no.2b', 'tanjung balai karimu', '1996-01-26', '08984020986', 'themocicwgk.santy@yahoo.co.id', 15, '2014-02-26 15:40:48'),
(119, '1253010097', 'Bayu Dwi Nugroho', 'Wringinsgung, Jombang-Jember', 'Jember', '1993-12-19', '085745542755', 'bayudwinugroho50@gmail.com', 14, '2014-02-26 21:53:20'),
(120, '1352010050', 'Prima Anggara Caesario', 'Perum.Jatinegara Indah block CF/9', 'Surabaya', '1995-01-24', '081908088824', 'Primasjv@gmail.com', 14, '2014-02-27 08:58:36'),
(121, '1171010074', 'YOVITA MARIANDU TOVIN', 'Perumahan Purimas', 'Timor Leste ', '1993-03-17', '081298033799', 'yovita.mariandu@gmail.com', 7, '2014-02-28 14:47:26'),
(122, '1253010048', 'NOVIANTO PUTRA PERDANA', 'DELTA SARI INDAH BC-3, WARU-SIDOARJO', 'SURABAYA', '1993-11-09', '085648861165', 'noviantoputra345@yahoo.co.id', 14, '2014-02-28 19:30:11'),
(123, '1371010039', 'rhafidha putri guci', 'jln. letjend soeprapto', 'bajawa', '1995-11-27', '085333704734', 'grhafidha@gmail.com', 2, '2014-03-03 06:16:26'),
(124, '1253010062', 'LITA MAHARANI', 'JL BARITO WISMA TROPODO', 'SURABAYA', '1994-08-31', '087754005458', 'LITAMAHARANI40@YAHOO.COM', 14, '2014-03-03 09:22:11'),
(125, '1253010112', 'Choirul Imam Romadhoni', 'Perum Permata Selong', 'Sampang', '1994-02-01', '082330726509', 'dvs_127@yahoo.com', 10, '2014-03-03 10:50:18'),
(126, '1253010061', 'Krisno Setyo Wibowo', 'Bendul Merisi Permai A/5 Surabaya', 'SUrabaya', '1993-08-27', '083831407000', 'destiny_brother@yahoo.com', 24, '2014-03-03 10:52:04'),
(127, '1253010117', 'FAIZ NADROHAN', 'Desa karangsambigalih -lamongan', 'Trenggalek', '1993-12-22', '085731411182', 'faiznadrohan@gmail.com', 24, '2014-03-03 10:54:50'),
(128, '1253010098', 'ADITYA SASMITO UTOMO', 'JL.REMBANG UTARA NO14', 'SURABAYA', '1994-05-04', '085648809176', 'SASMITO.ADITYA@YAHOO.COM', 10, '2014-03-03 10:54:50'),
(129, '1253010077', 'KUKUH FEBRIYANTO PUTRA', 'WISMA TENGGER XV/16 BLOK 58C SURABAYA', 'SURABAYA', '1994-02-02', '087851215714', 'chocho.rezpector@programmer.net', 24, '2014-03-03 10:56:09'),
(130, '1253010087', 'YANUAR RADITHIO', 'JL.DIRGAHAYU NO.15 PAMEKASAN MADURA', 'PAMEKASAN ', '1994-01-01', '089661022966', 'y.radithio@yahoo.com', 10, '2014-03-03 10:56:31'),
(131, '1253010079', 'DONY DWI RISWANTO', 'TROPODO 1BARAT 262 SIDOARJO', 'SURABAYA', '1993-11-19', '0857338738788', 'riswanto_hanzo@yahoo.com', 24, '2014-03-03 10:58:21'),
(132, '1253010103', 'LUTHFI RIANTO PUTRA', 'WISMA KEDUNG ASEM', 'KARAWANG', '1995-01-18', '081515485520', 'LUTHFIRIANTOPUTRA@YAHOO.COM', 24, '2014-03-03 10:58:50'),
(133, '1253010088', 'MOH GHUFRONOL HAKIM', 'HJL DELIMA KARANGDUAK SUMENEP', 'SUMENEP', '1994-07-31', '087850341207', 'gufron_hakim@yahoo.com', 24, '2014-03-03 10:59:42'),
(134, '1253010080', 'M. AGUNG PUJI S.', 'JEPON BLORA', 'BLORA', '1993-10-10', '085740178983', 'AGUNG.SANTOSO1015@YAHOO.COM', 24, '2014-03-03 11:00:17'),
(135, '1253010108', 'adita indra permana', 'sidoarjo puri surya jaya sidney l.013 no. 06', 'nunukan', '1994-11-27', '085247470809', 'aditaindrapermana@yahoo.co.id', 24, '2014-03-03 11:00:29'),
(136, '1253010090', 'TRI BAGUS JUNIARTO', 'JL.BENDUL MERISI 47 F', 'LUMAJANG', '1993-06-25', '08563596385', 'bagusmolodewo@gmail.com', 24, '2014-03-03 11:02:20'),
(137, '1253010102', 'FAIZAL AKBAR SANTOSO', 'JL. GRESIK GADUKAN 171 SURABAYA', 'SURABAYA', '1994-12-12', '085730808002', 'faizalakbarsantoso@yahoo.com', 24, '2014-03-03 11:02:20'),
(138, '1253010113', 'JULI ARDIANTO', 'DUSUN DIMORO, PURI', 'MOJOKERTO', '1994-07-04', '085748688901', 'JULI_ARDIANTO@YMAIL.COM', 24, '2014-03-03 11:03:13'),
(139, '1253010070', 'MUHAMAD RIZKI PRATAMA', 'KARANGNONGKO - SUKODONO', 'SIDOARJO', '1994-05-01', '085655067679', 'riskikaci@yahoo.com', 24, '2014-03-03 11:04:23'),
(140, '1253010068', 'ZAINURI', 'BAWEAN GRESIK', 'GRESIK', '1994-06-15', '081234916556', 'ZACKY_ZAEN@YAHOO.COM', 24, '2014-03-03 11:04:49'),
(141, '112523202', 'MAS AGUS', 'JALAN JALAN KEPASAR SORE', 'DUKUN', '1970-01-01', '0000111254', 'popop@popo.com', 30, '2014-03-03 11:06:36'),
(142, '1253010086', 'Ach fauzi', 'klampis barat', 'Bangkalan ', '1994-12-21', '083849894162', 'achfauzi10@gmail.com', 10, '2014-03-03 11:06:38'),
(143, '1253010057', 'm. mustofa', 'panduga', 'tuban', '1991-09-08', '085648130433', 'mustofa715@gmail.com', 10, '2014-03-03 11:10:51'),
(144, '1253010072', 'dina fitriyah', 'rusunawa belanegara upn veteran jawa timur ', 'lamongan ', '1994-07-17', '085730383062', 'dina.fitriyah72@gmail.com', 14, '2014-03-03 13:00:44'),
(145, '1253010089', 'Fabella Rizqi Kartika Putri', 'Rusunawa belanegara', 'gresik', '1994-05-03', '085748585216', 'fabella.rkp@gmail.com', 14, '2014-03-03 13:03:10'),
(146, '1253010063', 'irianto galoh prakoso', 'tebel timur', 'sidoarjo', '1994-04-02', '081353636608', 'sudo123@yahoo.com', 14, '2014-03-03 13:03:48'),
(147, '1253010043', 'much fajar ichsan basuni', 'perum griya sejahtera .ds pranti. kec sedati. sido', 'purworejo', '1995-01-27', '085729910960', 'muchfadjar@gmail.com', 14, '2014-03-03 13:21:57'),
(148, '1253010042', 'M.RIDAM FUADY', 'Medokan asri barat ', 'tuban', '1993-09-11', '085608601119', 'marcellofuady70@gmail.com', 14, '2014-03-03 13:24:19'),
(149, '1253010099', 'Bagus Eska Fiantomo', 'JL. CANDI LONTAR WETAN 42E NO 09', 'SURABAYA', '1994-04-21', '08993801741', 'baguseskafian@gmail.com', 24, '2014-03-03 16:57:54'),
(150, '1253010078', 'dedy irawan', 'jl. tempu rejo', 'lamongan', '1995-07-12', '085852837203', 'dedi_i50@yahoo.co.id', 10, '2014-03-03 17:08:08'),
(151, '1253010055', 'ari adama robby', 'jln asbari no 48 rt 12 rt 03 nogosari rambipuji je', 'jember', '1990-01-09', '08574688970', 'ariadamarobby@yahoo.com', 11, '2014-03-04 10:43:26'),
(152, '1253010037', 'RACHMAD ADI ACHIYANDA PUTRA', 'JALAN RAYA KLUDAN NO. 36 RT 2 RW 2 TANGGULANGIN', 'SIDOARJO', '1993-04-15', '082140969337', 'mundukz15@yahoo.com', 24, '2014-03-04 10:58:07'),
(153, '1253010005', 'Ghulam Faisal Riza', 'Jl. Ikan Oscar L3/14 Perum Tbk Rejo. Waru - Sidoar', 'Sidoarjo', '1992-01-06', '083849733740', 'ghulam6190@gmail.com', 24, '2014-03-04 10:59:33'),
(154, '1253010039', 'RAFSANJANI', 'DESA KETEGAN RT 6 RW 2 TANGGULANGIN', 'SIDOARJO', '1993-12-13', '08883027542', 'rafsanjani_52@yahoo.com', 22, '2014-03-04 11:03:46'),
(155, '1253010025', 'Yoga Ardi Pratama', 'Ds.keboansikep RT/5 RW/4 kec. Gedangan Kab.sidoarj', 'Sidoarjo', '1994-05-24', '082230567776', 'yogaardi24@yahoo.co.id', 22, '2014-03-04 11:05:08'),
(156, '1253010044', 'anggara cahya mustika', 'desa karang nanas rt04/05 kec.sokaraja kab.banyuma', 'banyumas', '1994-07-05', '085854405916', 'akhmadanggara3@gmail.com', 22, '2014-03-04 11:06:58'),
(157, '1253010040', 'Achmad Fajar Farizqi Aziz', 'jalan Tenggilis Kauman 2 No 14/a', 'Surabaya', '1994-05-04', '085732149686', 'resiando14@yahoo.com', 9, '2014-03-04 11:42:45'),
(158, '1253010001', 'TONY MUZAKI WICAKSONO', 'JL. TRENGGILIS KEC. PRAJURIT KULON KOTA MOJOKERTO', 'JOMBANG', '1993-07-30', '085646144368', 'TONYMUZAKI@YAHOO.CO.ID', 9, '2014-03-04 11:46:59'),
(159, '1253010034', 'frengky susanto', 'tenggilis mejoyo ky4b', 'tarakan', '1995-03-04', '082233173495', 'frengkysusanto1995@yahoo.com', 9, '2014-03-04 11:56:19'),
(160, '1253010003', 'achmad hardianto', 'ngagel rejo utra 4 nomer 1', 'surabaya', '1970-09-06', '085736557327', 'damhca42@yahoo.com', 22, '2014-03-04 12:10:22'),
(161, '1253010014', 'muhammad mu''afi', 'jalan udang Rt3Rw2 Banjar Kemuning, Sedati Sidoarj', 'sidoarjo', '1994-03-29', '085645577529', 'muhammadmuafi29@yahoo.com', 22, '2014-03-04 12:14:43'),
(162, '1153010015', 'AFIN AZIS SASONGKO', 'SURYA ASYRI 2 E7/16 GEDANGAN SIDOARJO', 'SURABAYA', '1992-08-16', '087702800801', 'afinazis16@gmail.com', 4, '2014-03-04 14:09:21'),
(163, '1253010074', 'ika alfi nur khikmia', 'jl. masjid rt 03 no 6 tambak oso waru sidoarjo', 'sidoarjo', '1994-05-15', '083849542455', 'ikaalfinurkhikmiah@gmail.com', 10, '2014-03-04 14:11:54'),
(164, '1253010075', 'Anis Hikmawati', 'jl. Kolonel Sugiono, Wedoro Candi gang 3 no.10 RT3', 'Sidoarjo', '1994-10-11', '08979767875', 'anshkmwt@gmail.com', 10, '2014-03-04 14:14:21'),
(165, '1253010106', 'Jenar Hening Wicaksono', 'Babatan Pilang XI D1/12 Wiyung', 'SURABAYA', '1994-02-08', '087853004518', 'jenar.hening@yahoo.com', 16, '2014-03-04 14:25:35'),
(166, '1251010065', 'Bagus Sidi mantra', 'JL . Teluk Weda I no 2 blok C', 'Denpasar', '1994-05-09', '08993874545', 'detiktakbergerak@gmail.com', 19, '2014-03-04 14:28:16'),
(167, '1253010060', 'muthia ayu salehah', 'jln. gunung jaya 1Aaa', 'tuban', '1993-08-23', '085648569306', 'muthiaayu085@gmail.com', 22, '2014-03-04 15:42:51'),
(168, '1253010084', 'Dian Nur Fadhilatin', 'Jl. Ketimang Rt.04 Rw.01, Wonoayu, Sidoarjo', 'Sidoarjo', '1994-05-13', '082140022416', 'diannurfadhilatin@gmail.com', 10, '2014-03-04 16:39:28'),
(169, '1253010085', 'RAFLI SABRIAN', 'Gresik', 'Gresik', '1994-12-30', '087753223366', 'rafli_sabrian@rocketmail.com', 14, '2014-03-04 21:41:11'),
(170, '1353010063', 'Annuri Fijri Aini', 'Jl.Pendekar no;13B kepanjen sumenep-madura', 'Sumenep', '1995-10-09', '087850360772', 'annuri_aini@yahoo.co.id', 11, '2014-03-05 08:41:29'),
(171, '1353010060', 'Fitri sri riski yasin', 'perumahan palem putri x-22 Candi, Sidoarjo', 'kaitetu', '1996-02-21', '081247420185', 'piethyasin@gmail.com', 11, '2014-03-05 09:04:22'),
(172, '1253010002', 'Juvencio Moreno A.P. Amaral', 'Rungkut MA', 'Viqueque Timor Leste', '1993-04-04', '082196741597', 'juvencio.amaral@yahoo.com', 11, '2014-03-05 09:21:36'),
(173, '1253010026', 'HENDRA NOVIANTO BUDIMAN', 'JL.WONOKITRI VIII/60 SURABAYA', 'SURABAYA', '1993-11-07', '085645518216', 'HENDRA_NB@YAHOO.COM', 11, '2014-03-05 09:22:24'),
(174, '1253010033', 'Aidil Kharisma', 'delta sari indah bl 16', 'makassar', '1994-03-28', '085399167495', 'aidilkharisma@ymail.com', 11, '2014-03-05 09:23:22'),
(175, '1253010052', 'mohammad iqbal', 'jl. rungkut asri timur 4 k-28', 'surabaya', '1994-09-06', '081515154566', 'september_bal@yahoo.com', 11, '2014-03-05 09:25:00'),
(176, '1253010011', 'MOCH. IQBAL TAWACHAL', 'Ds. Masangan Wetan Rt 09 Rw 03 , Sukodono Sidoarjo', 'Sidoarjo', '1994-07-06', '083857179457', 'iqbaltawachal@yahoo.co.id', 11, '2014-03-05 09:25:43'),
(177, '1253010006', 'YUDI SETIAWAN', 'Sidomulyo 1A no 3 RT 02, RW 05, Sidotopo Wetan,Ken', 'Surabaya', '1994-02-09', '085732321297', 'yudirazfailchiy@yahoo.co.id', 11, '2014-03-05 09:27:58'),
(178, '1253010050', 'ALFIAN DWI KURNIAWAN', 'PERUM CANDI INDAH BLOK K- 14 JOMBANG', 'JOMBANG', '1994-03-14', '085645086785', 'alfian.dwikurniawan@rocketmail.com', 9, '2014-03-05 09:45:00'),
(179, '1253010022', 'DANI ARISTIANTO', 'JL. NGAGEL REJO VI/3B', 'SURABAYA', '1993-11-25', '085646754950', 'daniaris27@yahoo.com', 9, '2014-03-05 09:46:48'),
(180, '1253010027', 'BRAMADA AFFIANDRA', 'JL.BABATAN INDAH A13/15', 'SURABAYA', '1994-03-11', '089657932647', 'affiandrabramada@ymail.com', 9, '2014-03-05 09:48:43'),
(181, '1253010041', 'ERIK ARDIANTO', 'JL.GUNUNG ANYAR LOR 3A NO 5', 'SURABAYA', '1994-03-05', '08385858453', 'erikgrininda@gmail.com', 9, '2014-03-05 09:51:01'),
(182, '1253010046', 'dodi fitriyanto', 'jalan rungkut kidul 5/82 surabaya', 'surabaya', '1994-03-27', '085785691014', 'dodik_fitriyanto@yahoo.com', 13, '2014-03-05 15:17:51'),
(183, '1253010018', 'ANDI BAGUS SETIAWAN', 'PANDUK NO 39', 'TUBAN', '1993-06-07', '087852237127', 'Andi_BagusUP@yahoo.com', 9, '2014-03-06 09:45:33'),
(184, '1253010020', 'Izhar Lutfi Fauzan', 'Ronggowarsito Tengah 5', 'Surabaya', '1994-08-20', '085853048918', 'izhar.rooney@yahoo.com', 9, '2014-03-06 09:46:22'),
(185, '1253010028', 'RANDI APRILYANTO HUMALANGGI', 'JL.PULO WONOKROMO WETAN 6/6', 'SURABAYA', '1994-04-25', '087855811717', 'RANDIHUMA28@GMAIL.COM', 11, '2014-03-06 10:44:36'),
(186, '1153010063', 'alfian ramadhan', 'jl kedung mangu 4c/3 ', 'surabaya', '1993-02-24', '081217374750', 'alfianramadhants@gmail.com', 6, '2014-03-06 11:23:59'),
(187, '1253010023', 'Moch.Anang Kastaloni', 'Jl. Ngagel Rejo Utara 1/8', 'Jombang', '1994-04-18', '085745604951', 'kastalonia@ymail.com', 5, '2014-03-07 22:31:57'),
(188, '1253010069', 'Akfi rizky', 'Jl selamat riadi no 3b', 'Kotabaru', '1994-03-23', '087816141517', 'fieeakfi@yahoo.co.id', 10, '2014-03-10 09:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id_user` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sta` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `pass`, `nama`, `sta`) VALUES
(1, 'admin', '77f0d7b3a87e24e232e8814b31e92da7', 'Administrator', 1),
(2, 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'Petugas UPN', 2),
(4, 'soegi', '77f0d7b3a87e24e232e8814b31e92da7', 'soegi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_hubungi`
--
ALTER TABLE `tbl_hubungi`
 ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
 ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
 ADD PRIMARY KEY (`id_jur`);

--
-- Indexes for table `tbl_mk`
--
ALTER TABLE `tbl_mk`
 ADD PRIMARY KEY (`id_mk`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
 ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
 ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_hubungi`
--
ALTER TABLE `tbl_hubungi`
MODIFY `id_hubungi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
MODIFY `id_jur` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_mk`
--
ALTER TABLE `tbl_mk`
MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=189;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
