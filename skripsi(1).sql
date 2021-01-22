-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 05:03 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAkun` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAkun`, `username`, `password`, `alamat`, `email`, `telp`) VALUES
(1, 'admin', 'admin123', 'kampung baru', 'admin@gmail.com', '0735423777');

-- --------------------------------------------------------

--
-- Table structure for table `datafaskes`
--

CREATE TABLE `datafaskes` (
  `id_faskes` int(4) NOT NULL,
  `id_kelurahan` int(4) NOT NULL,
  `id_jenis_faskes` int(4) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `id_jam_buka` int(4) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `nama_faskes` varchar(150) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datafaskes`
--

INSERT INTO `datafaskes` (`id_faskes`, `id_kelurahan`, `id_jenis_faskes`, `latitude`, `longitude`, `id_jam_buka`, `alamat`, `telp`, `tipe`, `nama_faskes`, `tahun`) VALUES
(1, 110, 6, '-5.4424779', '105.26751000000002', 2, 'RSIA Santa Anna, Jalan Sultan Hasanudin, Gunung MAS, Bandar Lampung City, Lampung, Indonesia', '0721482424', 'C', 'RSIA Santa Anna', '2017'),
(2, 109, 6, '-5.4475482', '105.2562279', 2, 'Mother & Child Hospital Restu Mother, Jalan Kh. Hasyim Ashari, Gedong Pakuon, Bandar Lampung City, Lampung, Indonesia', '0721482432', 'C', 'RSIA Restu Bunda', '2017'),
(3, 131, 6, '-5.3940129', '105.2659026', 2, 'RSIA Puri Betik Hati, Jalan Pajajaran, Jagabaya II, Bandar Lampung City, Lampung, Indonesia', '0721704016', 'C', 'RSIA Puri Betik Hati', '2017'),
(4, 11, 6, '-5.4229963', '105.2601617', 2, 'RSIA Mutiara Putri, Enggal, Bandar Lampung City, Lampung, Indonesia', '0721252519', 'C', 'RSIA Mutiara Putri ', '2017'),
(5, 11, 6, '-5.4176723', '105.26087440000003', 2, 'RSIA Anugerah Medika, Enggal, Bandar Lampung City, Lampung, Indonesia', '0721240488', 'C', 'RSIA Anugerah Medika', '2017'),
(6, 13, 6, '-5.429837500000001', '105.27098839999996', 2, 'RSIA Bunda Asy-Syifa, Jalan Doktor Susilo, Pahoman, Bandar Lampung City, Lampung, Indonesia', '0721259259', 'C', 'RSIA Bunda Asy-Syifa', '2017'),
(7, 43, 6, '-5.3807212', '105.25831459999995', 0, 'RSIA Belleza Kedaton, Jalan Sultan Haji, Labuhan Ratu, Bandar Lampung City, Lampung, Indonesia', '0721773333', 'C', 'RSIA Belleza Kedaton ', '2017'),
(8, 25, 6, '-5.4029683', '105.25849149999999', 2, 'RSUD Dr. H. Abdul Moeloek, Jalan Dokter A. Rivai, Penengahan, Bandar Lampung City, Lampung, Indonesia', '0721703312', 'B', 'RSUD Abdul Moeloek', '2017'),
(9, 114, 6, '-5.436275', '105.25320499999998', 2, 'General Hospital Dr. A. Dadi Tjokrodipo, Jalan Basuki Rahmat, Sumur Putri, Bandar Lampung City, Lampung, Indonesia', '0721471723', 'C', 'RSUD A.dadi Djokrodipo', '2017'),
(10, 25, 6, '-5.401671099999999', '105.25872500000003', 2, 'RS DKT, Penengahan, Bandar Lampung City, Lampung, Indonesia', '0721703574', 'C', 'RS TkIV 02.0704/DKT', '2017'),
(11, 61, 6, '-5.3742789', '105.22419200000002', 2, 'Rumah Sakit Bhayangkara Polda Lampung, Rajabasa, Bandar Lampung City, Lampung, Indonesia', '0721706402', 'C', 'RS Bhayangkara', '2017'),
(12, 77, 6, '-5.38576064473319', '105.28805547619629', 2, 'RS Immanuel Bandar Lampung, Way Dadi, Bandar Lampung City, Lampung, Indonesia', '0721704900', 'C', 'RS Immanuel ', '2017'),
(13, 34, 6, '-5.3788436', '105.21939210000005', 2, 'RS Pertamina Bintang Amin, Jalan Pramuka, Kemiling Permai, Bandar Lampung City, Lampung, Indonesia', '0721272977', 'C', 'RS Pertamina Bintang Amin', '2017'),
(14, 20, 6, '-5.413517352145182', '105.26750119999997', 2, 'RS Graha Husada, Tanjung Agung Raya, Bandar Lampung City, Lampung, Indonesia', '0721240000', 'C', 'RS Graha Husada', '2017'),
(15, 27, 6, '-5.391914723651779', '105.26210218465576', 2, 'RS. Advent Lampung, Jalan Teuku Umar, Sidodadi, Bandar Lampung City, Lampung, Indonesia', '0721703459', 'C', 'RS Advent', '2017'),
(16, 129, 6, '-5.391921749099145', '105.27629920000004', 2, 'Rumah Sakit Urip Sumoharjo Bandar Lampung, Jalan Urip Sumoharjo, Gunung Sulah, Bandar Lampung City, Lampung, Indonesia', '0721771322', 'C', 'RS Urip Sumoharjo', '2017'),
(17, 127, 6, '-5.425265723100847', '105.25110619999998', 2, 'Rumah Sakit Bumi Waras, Jalan Wolter Monginsidi, Pengajaran, Bandar Lampung City, Lampung, Indonesia', '0721254589', 'C', 'RS Bumi Waras', '2017'),
(18, 0, 4, '-5.4551421', '105.25667750000002', 2, 'Komplek Kota Karang, Jl. Teluk Ratai No. 18, Kota Karang, Teluk Betung Timur, Kota Karang, Tlk. Betung Tim., Kota Bandar Lampung, Lampung', '0721480129', '-', 'Puskemas Kota Karang', '2017'),
(19, 118, 4, '-5.4551421', '105.25667750000002', 2, 'Puskesmas Kota Karang, Karang City, Bandar Lampung City, Lampung, Indonesia', '0721480129', '-', 'Puskemas Kota Karang', '2017'),
(20, 121, 4, '-5.469946060161724', '105.24485495396732', 2, 'puskesmas sukamaju, Jalan Laksamana R.E.Martadinata, Sukamaju, Bandar Lampung City, Lampung, Indonesia', '07219370847', '-', 'Puskesmas Sukamaju', '2017'),
(21, 123, 4, '-5.4340676', '105.2595014', 2, 'puskesmas sumur batu, Jalan Cut Mutia, Gulak Galik, Bandar Lampung City, Lampung, Indonesia', '0721777333', '-', 'Puskemas Sumur Batu', '2017'),
(23, 115, 4, '-5.4495109', '105.25700089999998', 1, 'Puskesmas Pasar Ambon, Jalan Laksamana Malahayati, Talang, Bandar Lampung City, Lampung, Indonesia', '0721481292', '-', 'Puskesmas Pasar Ambon', '2017'),
(24, 110, 4, '-5.442954899999999', '105.266436', 1, 'Puskesmas Kupang Kota, Jalan Patimura, Gunung MAS, Bandar Lampung City, Lampung, Indonesia', '0721482701', '-', 'Puskemas Kupang Kota', '2017'),
(25, 54, 4, '-5.4772121', '105.32277590000001', 2, 'PUSKESMAS RAWAT INAP PANJANG, Jalan Yos Sudarso, South Panjang, Bandar Lampung City, Lampung, Indonesia', '0721384087', '-', 'Puskesmas Panjang', '2017'),
(26, 104, 4, '-5.454739', '105.24811890000001', 1, 'Puskesmas Bakung, Jalan Kamboja, Bakung, Bandar Lampung City, Lampung, Indonesia', '08127901508', '-', 'Puskesmas Bakung', '2017'),
(27, 96, 4, '-5.4106809', '105.24812759999998', 1, 'Puskesmas Simpur, Jalan Tamin, Kelapa Tiga, Bandar Lampung City, Lampung, Indonesia', '0721255872', '-', 'Puskesmas Simpur', '2017'),
(28, 97, 4, '-5.41561', '105.24862299999995', 1, 'Puskesmas Palapa, Gang Hidayah Jalan Cut Nyak Dien, Palapa, Bandar Lampung City, Lampung, Indonesia', '0721255872', '-', 'Puskesmas Palapa', '2017'),
(29, 84, 4, '-5.4003009', '105.2445874', 2, 'Puskesmas Gedong Air, Jalan Sisingamangaraja, Gedong Air, Bandar Lampung City, Lampung, Indonesia', '07217478062', '-', 'Puskesmas Gedong Air', '2017'),
(30, 91, 4, '-5.401109999999999', '105.23116700000003', 1, 'Puskesmas Susunan Baru, Jl. Sultan Badarudin, Susunan Baru, Bandar Lampung City, Lampung, Indonesia', '0721257656', '', 'Puskesmas Susunan Baru', '2017'),
(31, 102, 4, '-5.4073079', '105.26363300000003', 1, 'Puskesmas Kampung Sawah, Jalan Arjuna, Sawah Lama, Bandar Lampung City, Lampung, Indonesia', '0721250163', '', 'Puskesmas Kampung Sawah', '2019'),
(32, 24, 4, '-5.384013999999999', '105.26023199999997', 1, 'Puskesmas Kedaton, Kedaton, Bandar Lampung City, Lampung, Indonesia', '0721702045', '', 'Puskesmas Kedaton', '2017'),
(33, 69, 4, '-5.397789899999999', '105.29951319999998', 1, 'Jl. Pulau Bangka No.3, Sukabumi, Bandar Lampung City, Lampung, Indonesia', '07217628094', '', 'Puskesmas Sukabumi', '2017'),
(34, 67, 4, '-5.4062649', '105.30243700000005', 1, 'Puskesmas Campang Raya, Jalan Alimudin Umar, Campang Raya, Bandar Lampung City, Lampung, Indonesia', '07217575029', '', 'Puskesmas Campang Raya', '2017'),
(35, 72, 4, '-5.434825300000001', '105.32668969999997', 1, 'Puskesmas Way Laga, Jalan Insinyur Sutami, Way Laga, Bandar Lampung City, Lampung, Indonesia', '0721351054', '', 'Puskesmas Way Laga', '2017'),
(36, 38, 4, '-5.392706499999999', '105.21690669999998', 2, 'Jl. Imam Bonjol No.592, Sumber Rejo, Kec. Kemiling, Bandar Lampung City, Lampung, Indonesia', '0721271459', '', 'Puskesmas Kemiling', '2017'),
(37, 36, 4, '-5.393264899999999', '105.19275970000001', 1, 'Puskesmas Pinang Jaya, Jalan Mata Air, Pinang Jaya, Bandar Lampung City, Lampung, Indonesia', '07217520411', '', 'Puskesmas Pinang Jaya', '2017'),
(38, 31, 4, '-5.3967939', '105.20487270000001', 1, 'Jl. Minak Sangaji No.1, Beringin Raya, Bandar Lampung City, Lampung, Indonesia', '0721272038', '', 'Puskesmas Beringin Jaya', '2017'),
(39, 81, 4, '-5.362951900000001', '105.28945939999994', 2, 'puskesmas way kandis, Jalan Pulau Damar Gang Pulau Panggung, Perumnas Way Kandis, Bandar Lampung City, Lampung, Indonesia', '07217541572', '', 'Puskesmas Way Kandis', '2017'),
(40, 75, 4, '-5.385796900000001', '105.30419710000001', 2, 'Puskesmas Permata Sukarame -Bandar Lampung, Jalan Pulau Sebesi, Sukarame, Bandar Lampung City, Lampung, Indonesia', '07217698031', '', 'Puskesmas Permata Sukarame', '2017'),
(41, 75, 4, '-5.386596', '105.29245000000003', 1, 'Puskesmas Sukarame, Jalan Endro Suratmin, Sukarame, Bandar Lampung City, Lampung, Indonesia', '0721787695', '', 'Puskesmas Sukarame', '2017'),
(42, 73, 4, '-5.371392', '105.30208100000004', 1, 'Puskesmas KORPRI, Jalan Pulau Pisang, Harapan Jaya, Bandar Lampung City, Lampung, Indonesia', '0721782626', '', 'Puskesmas KORPRI', '2017'),
(43, 19, 4, '-5.4225629', '105.26968299999999', 2, 'Puskesmas Satelit, Jalan Jenderal Sudirman, Pahoman, Bandar Lampung City, Lampung, Indonesia', '0721253541', '', 'Puskesmas Satelit', '2107'),
(44, 10, 4, '-5.444049', '105.28988000000004', 2, 'Puskesmas Sukaraja, Jalan Yos Sudarso, Sukaraja, Bandar Lampung City, Lampung, Indonesia', '0721472565', '', 'Puskesmas Sukaraja', '2017'),
(45, 133, 4, '-5.3744644', '105.27491220000002', 1, 'Puskesmas Way Halim, Jalan Gunung Rajabasa Raya, Perumnas Way Halim, Bandar Lampung City, Lampung, Indonesia', '0721772816', '', 'Puskesmas Way Halim', '2017'),
(46, 34, 4, '-5.373173299999999', '105.22718050000003', 1, 'Puskesmas Rajabasa Indah, Jalan Pramuka, Kemiling Permai, Bandar Lampung City, Lampung, Indonesia', '0721811767', '', 'Puskesmas Rajabasa Indah', '2017'),
(47, 11, 4, '-5.4145009', '105.26112590000002', 1, 'Puskesmas Kebun Jahe, Jalan Kamboja, Enggal, Bandar Lampung City, Lampung, Indonesia', '0721255074', '', 'Puskesmas Kebon Jahe', '2017'),
(48, 0, 4, '-5.392053176346054', '105.23579898465573', 1, 'Puskesmas Segala Mider, Jalan Pagar Alam, Segala Mider, Kalimantan Selatan, Lampung, Indonesia', '0', '', 'Puskesmas Segala Mider', '2017'),
(49, 86, 4, '-5.391925', '105.23584189999997', 1, 'Puskesmas Segala Mider, Jalan Pagar Alam, Segala Mider, Kalimantan Selatan, Lampung, Indonesia', '0', '', 'Puskesmas Segala Mider', '2017'),
(50, 40, 4, '-5.360332999999998', '105.254008', 1, 'Puskesmas Labuhan Ratu, Jalan Soekarno Hatta, Kampung Baru, Bandar Lampung City, Lampung, Indonesia', '0', '', 'Puskesmas Labuhan Ratu', '2017'),
(51, 59, 5, '-5.3743359', '105.24206300000003', 2, 'Kedaton Medical Center, Gedung Meneng, Jalan ZA. Pagar Alam, Gedong Meneng, Bandar Lampung City, Lampung, Indonesia', '0721771758', '', 'Kedaton Medical Center (KMC)', '2019'),
(52, 57, 5, '-5.4988133', '105.32930940000006', 1, 'PT. Hanjung Indonesia, Srengsem, Bandar Lampung City, Lampung, Indonesia', '072132288', '', 'PT. Hanjung', '2017'),
(53, 31, 5, '-5.399711', '105.211007', 2, 'Klinik Pratama Kosasih Kemiling, Jalan Teuku Cik Ditiro, Beringin Raya, Bandar Lampung City, Lampung, Indonesia', '08117270561', '', 'Kosasih Kemiling', '2017'),
(54, 113, 5, '-5.452538000000001', '105.26192489999994', 2, 'Klinik Pratama Kosasih Amanah, Jalan Ikan Kembung, Pesawahan, Bandar Lampung City, Lampung, Indonesia', '08117270564', '', 'Klinik Kosasih Amanah', '2017'),
(55, 67, 5, '-5.4146417', '105.32384049999996', 1, 'Jl. P. Tirtayasa Gg. An Nur, Campang Raya, Bandar Lampung City, Lampung, Indonesia', '0', '', 'Asa Medical Center', '2017'),
(56, 69, 5, '-5.3949436', '105.29600740000001', 2, 'Klinik Kosasih Tirtayasa, Jl. Tirtayasa, Sukabumi, Bandar Lampung City, Lampung, Indonesia', '07213690102', '', 'Kosasih Tirtayasa', '2017'),
(57, 12, 5, '-5.409091900000001', '105.25939089999997', 1, 'Jl. Kota Raja No.1, Gunung Sari, Kota Bandar Lampung, Lampung, Indonesia', '0', '', 'Klinik PT. Kereta Api (Persero)', '2017'),
(58, 30, 5, '-5.3872675', '105.26351899999997', 2, 'Klinik Kosasih Urip, Surabaya, Bandar Lampung City, Lampung, Indonesia', '08117270556', '', 'Kosasih Urip', '2017'),
(59, 24, 5, '-5.384507', '105.25838390000001', 1, 'Jl. Pagar Alam No.19, Kedaton, Bandar Lampung City, Lampung, Indonesia', '0', '', 'Ummi Healt Center (HC Kedaton)', '2017'),
(60, 113, 5, '-5.452271099999999', '105.26062619999993', 2, 'Klinik Pratama Griya Medika, Jalan Ikan Kembung, Pesawahan, Bandar Lampung City, Lampung, Indonesia', '0', '', 'Griya Medika', '2017'),
(61, 97, 5, '-5.416551', '105.25507990000006', 1, 'Klinik Hemodialisa Lions, Jalan Jenderal Suprapto, Palapa, Bandar Lampung City, Lampung, Indonesia', '0721240549', '', 'Hemodilisa Lions', '2017'),
(62, 43, 5, '-5.364262899999999', '105.25669800000003', 2, 'Klinik Untung Medika, Jalan Untung Suropati, Labuhan Ratu, Bandar Lampung City, Lampung, Indonesia', '07218014400', '', 'Untung Medika', ''),
(63, 61, 5, '-5.364024199999999', '105.23502340000005', 2, 'Klinik Rawat Inap Kosasih Rajabasa, IX Jalan Kapten Abdul Haq, Rajabasa, Bandar Lampung City, Lampung, Indonesia', '08117270557', '', 'Kosasih Rajabasa', '2017'),
(64, 43, 5, '-5.37935189999998', '105.26340002327879', 1, 'Jl. Sultan Agung, Labuhan Ratu, Bandar Lampung City, Lampung, Indonesia', '0', '', 'Telemedika Health Center', '2017'),
(65, 97, 5, '-5.4187677', '105.25034340000002', 1, 'Klinik dan Apotek SABILA, Jalan Cut Nyak Dien, Palapa, Bandar Lampung City, Lampung, Indonesia', '082269195386', '', 'Sabila', '2017'),
(66, 62, 5, '-5.345683999999999', '105.24766460000001', 2, 'KLINIK MITRA ANDA, Jalan Gemini, Rajabasa Jaya, Bandar Lampung City, Lampung, Indonesia', '081240602628', '', 'Mitra Anda', '2017'),
(67, 56, 5, '-5.463796800000001', '105.31952849999993', 1, 'Klinik Keluarga Panjang Medika, Jalan Teluk Ambon, Pidada, Bandar Lampung City, Lampung, Indonesia', '081368374494', '', 'Panjang Medika', '2017'),
(68, 89, 5, '-5.4074776', '105.25430400000005', 1, 'Klinik Imam Bonjol, Jalan Imam Bonjol, Suka Jawa, Bandar Lampung City, Lampung, Indonesia', '0', '', 'Imam Bonjol', '2017'),
(69, 93, 5, '-5.4260909', '105.25483099999997', 1, 'Klinik Dira Medika, Jalan Amir Hamzah, Gotong Royong, Bandar Lampung City, Lampung, Indonesia', '081273438788', '', 'Dira Medika', '2017'),
(70, 20, 5, '-5.4101369', '105.26702309999996', 2, 'Klinik Kosasih Rawat Inap Pasar Tugu, Jalan Hayam Wuruk, Tanjung Agung Raya, Bandar Lampung City, Lampung, Indonesia', '08117270558', '', 'Kosasih Tugu', '2017'),
(71, 100, 5, '-5.415686000000001', '105.26670200000001', 1, 'Klinik Azzura, Jalan Gajah Mada, Baru City, Bandar Lampung City, Lampung, Indonesia', '0821867089', '', 'Azzura', '2017'),
(72, 55, 5, '-5.471037099999999', '105.322854', 1, 'Klinik Pratama Kosasih Panjang, Jl. Tj. Pura II, North Panjang, Bandar Lampung City, Lampung, Indonesia', '08117270565', '', 'Kosasih Panjang', '2017'),
(73, 97, 5, '-5.416372', '105.1770859', 2, 'Kosasih Palapa Medical Clinic, Palapa, Kota Bandar Lampung, Lampung', '08117270562', '', 'Kosaih Palapa', '2017'),
(74, 7, 5, '-5.4444077', '105.27759229999992', 2, 'Klinik Pratama Kosasih Teluk Betung, Bumi Waras, Bandar Lampung City, Lampung, Indonesia', '', '', 'Kosasih Teluk', '2017'),
(75, 93, 5, '-5.423264', '105.25390300000004', 1, 'Klinik Polresta Bandar Lampung / Urkes, Gotong Royong, Bandar Lampung City, Lampung, Indonesia', '081379457678', '', 'Polresta', '2017'),
(76, 89, 5, '-5.408107999999999', '105.24890800000003', 1, 'Klinik Pratama De Asy-syifa, Suka Jawa, Bandar Lampung City, Lampung, Indonesia', '081271104727', '', 'De Asy Syifa', '2017'),
(77, 38, 5, '-5.394350500000001', '105.2146937', 1, 'Jl. Teuku Cik Ditiro No.24, Sumber Rejo, Kec. Kemiling, Bandar Lampung City, Lampung 35155, Indonesia', '085279934788', '', 'Keluarga Sehat', '2017'),
(78, 127, 5, '-5.42489109999998', '105.24984440000003', 1, 'BRI Medika Lampung, Jalan Raden Saleh, Pengajaran, Bandar Lampung City, Lampung, Indonesia', '07215602139', '', 'BRI Medika', '2017'),
(79, 83, 5, '-5.3557383', '105.2881433', 2, 'Klinik Pratama Raffasya Sentra Medika, Way Kandis, Bandar Lampung City, Lampung, Indonesia', '089560871562', '', 'Raffasya Sentra Medika', '2017'),
(80, 25, 2, '-5.4007295', '105.26073599999995', 1, 'Apotik Kita, Jalan Teuku Umar, Penengahan, Bandar Lampung City, Lampung, Indonesia', '081908087667', '', 'Ruskandi Martaatmadja', '2016'),
(81, 38, 1, '-5.398773200000001', '105.21444159999999', 1, 'Perumahan Wisma Mas Kemiling, Jalan Sejahtera, Sumber Rejo, Bandar Lampung City, Lampung, Indonesia', '0', '', 'Leny Gunawati ', '2017'),
(82, 123, 1, '-5.433599000000001', '105.26042600000005', 1, 'Jl. Dewi Sartika No.32, Gulak Galik, Bandar Lampung City, Lampung, Indonesia', '0', '', 'Renate Lenardo', '2017'),
(83, 32, 1, '-5.3977677', '105.21107359999996', 1, 'Jl. Sawi Blok 1 15, Beringin Raya, Bandar Lampung City, Lampung, Indonesia', '0', '', 'Nining Haryuni', '2017'),
(84, 134, 1, '-5.3872298', '105.27541300000007', 1, 'Jalan Pulau Batam IV No.9, Way Halim Permai, Bandar Lampung City, Lampung, Indonesia', '0', '', 'R. Reni Haryani', '2017'),
(86, 13, 3, '-5.4299729', '105.27104989999998', 1, 'Jl. DR. Susilo No.54, Pahoman, Bandar Lampung City, Lampung, Indonesia', '', '', 'Wardah Suhaili', '2017'),
(87, 134, 3, '-5.381993399999999', '105.2759648', 1, 'Jl. Sultan Agung, Way Halim Permai, Bandar Lampung City, Lampung, Indonesia', '', '', 'Wardah Suhaili', '2015'),
(88, 113, 3, '-5.4454131', '105.26155319999998', 1, 'Jl. W. R. Supratman, Pesawahan, Bandar Lampung City, Lampung, Indonesia', '', '', 'Kiagus Muhammad Sofian Saleh', '2016'),
(89, 16, 3, '-5.4127991', '105.25850439999999', 1, 'Apotek Gemari, Jalan Raden Intan No.35, Tanjung Karang, Bandar Lampung City, Lampung, Indonesia', '', '', 'Arman Sanum', '2016'),
(90, 9, 1, '124', '213', 1, 'aa', '', '', 'aku coba', '1232');

-- --------------------------------------------------------

--
-- Table structure for table `datajenis`
--

CREATE TABLE `datajenis` (
  `id_jenis_faskes` int(4) NOT NULL,
  `jenis_faskes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datajenis`
--

INSERT INTO `datajenis` (`id_jenis_faskes`, `jenis_faskes`) VALUES
(1, 'Bidan'),
(2, 'Dokter Spesialis Anak (DSA)'),
(3, 'Spesialis Obstetri & Ginekologi (SpOG)'),
(4, 'Puskesmas'),
(5, 'Klinik'),
(6, 'Rumah Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `jam_buka`
--

CREATE TABLE `jam_buka` (
  `id_jam_buka` int(4) NOT NULL,
  `jam_buka` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam_buka`
--

INSERT INTO `jam_buka` (`id_jam_buka`, `jam_buka`) VALUES
(1, '12 Jam '),
(2, '24 Jam');

-- --------------------------------------------------------

--
-- Table structure for table `jarak`
--

CREATE TABLE `jarak` (
  `id_jarak` int(255) NOT NULL,
  `id_kecamatan` int(100) NOT NULL,
  `id_faskes` int(100) NOT NULL,
  `id_jenis_faskes` int(100) NOT NULL,
  `id_jam_buka` int(100) NOT NULL,
  `nama_kecamatan` varchar(150) NOT NULL,
  `nama_faskes` varchar(150) NOT NULL,
  `jarak` varchar(150) NOT NULL,
  `indeks` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(4) NOT NULL,
  `nama_kabupaten` varchar(150) NOT NULL,
  `area_kabupaten` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `nama_kabupaten`, `area_kabupaten`) VALUES
(3, 'Bandar Lampung', ''),
(5, 'Lampung Utara', ''),
(6, 'Lampung Selatan', ''),
(7, 'Lampung Barat', ''),
(8, 'Lampung Timur', ''),
(9, 'Metro', '');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(4) NOT NULL,
  `nama_kecamatan` varchar(150) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `id_kabupaten` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`, `latitude`, `longitude`, `id_kabupaten`) VALUES
(2, 'Kedaton', '-5.371853', '105.260441', 3),
(4, 'Kedamaian', '', '', 3),
(7, 'Bumi Waras', '', '', 3),
(8, 'Enggal', '', '', 3),
(9, 'Kemiling', '', '', 3),
(10, 'Labuhan Ratu', '', '', 3),
(11, 'Langkapura', '', '', 3),
(12, 'Panjang', '', '', 3),
(13, 'Rajabasa', '', '', 3),
(14, 'Sukabumi', '', '', 3),
(15, 'Sukarame', '', '', 3),
(16, 'Tanjung Senang', '', '', 3),
(17, 'Tanjung Karang Barat', '', '', 3),
(18, 'Tanjung Karang Pusat', '', '', 3),
(19, 'Tanjung Karang Timur', '', '', 3),
(20, 'Teluk Betung Barat', '-5.442629', '105.219134', 3),
(21, 'Teluk Betung Selatan', '-5.440975', '105.254768', 3),
(22, 'Teluk Betung Timur', '-5.470141', '105.239539', 3),
(23, 'Teluk Betung Utara', '-5.434776', '105.262091', 3),
(24, 'Way Halim', '', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(4) NOT NULL,
  `nama_kelurahan` varchar(150) NOT NULL,
  `id_kecamatan` int(4) NOT NULL,
  `area_kelurahan` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `nama_kelurahan`, `id_kecamatan`, `area_kelurahan`) VALUES
(6, 'Bumi Raya', 7, ''),
(7, 'Bumi Waras', 7, ''),
(8, 'Garuntang', 7, ''),
(9, 'Kangkung', 7, ''),
(10, 'Sukaraja', 7, ''),
(11, 'Enggal', 8, ''),
(12, 'Gunung Sari', 8, ''),
(13, 'Pahoman', 8, ''),
(14, 'Pelita ', 8, ''),
(15, 'Rawa Laut', 8, ''),
(16, 'Tanjung Karang', 8, ''),
(17, 'Bumi Kedamaian', 4, ''),
(18, 'Kalibalau Kencana', 4, ''),
(19, 'Kedamaian', 4, ''),
(20, 'Tanjung Agung Raya', 4, ''),
(21, 'Tanjung Baru', 4, ''),
(22, 'Tanjung Gading', 4, ''),
(23, 'Tanjung Raya', 4, ''),
(24, 'Kedaton', 2, ''),
(25, 'Penengahan', 2, ''),
(26, 'Penengahan Raya', 2, ''),
(27, 'Sidodadi', 2, ''),
(28, 'Sukamenanti', 2, ''),
(29, 'Sukamenanti Baru', 2, ''),
(30, 'Surabaya', 2, ''),
(31, 'Beringin Jaya', 9, ''),
(32, 'Beringin Raya', 9, ''),
(33, 'Kedaung', 9, ''),
(34, 'Kemiling Permai', 9, ''),
(35, 'Kemiling Raya', 9, ''),
(36, 'Pinang Jaya', 9, ''),
(37, 'Sumber Agung', 9, ''),
(38, 'Sumber Rejo', 9, ''),
(39, 'Sumber Rejo Sejahtera', 9, ''),
(40, 'Kampung Baru', 10, ''),
(41, 'Kampung Baru Raya', 10, ''),
(42, 'Kota Sepang', 10, ''),
(43, 'Labuhan Ratu', 10, ''),
(44, 'Labuhan Ratu Raya', 10, ''),
(45, 'Sepang Jaya', 10, ''),
(46, 'Bilabong Jaya', 11, ''),
(47, 'Gunung Agung', 11, ''),
(48, 'Gunung Terang', 11, ''),
(49, 'Langkapura', 11, ''),
(50, 'Langkapura Baru', 11, ''),
(51, 'Karang Maritim', 12, ''),
(52, 'Ketapang', 12, ''),
(53, 'Ketapang Kuala', 12, ''),
(54, 'Panjang Selatan', 12, ''),
(55, 'Panjang Utara', 12, ''),
(56, 'Pidada', 12, ''),
(57, 'Srengsem', 12, ''),
(58, 'Way Lunik', 12, ''),
(59, 'Gedong Meneng', 13, ''),
(60, 'Gedong Meneng Baru', 13, ''),
(61, 'Rajabasa', 13, ''),
(62, 'Rajabasa Jaya', 13, ''),
(63, 'Rajabasa Nunyai', 13, ''),
(64, 'Rajabasa Pemuka', 13, ''),
(65, 'Rajabasa Raya', 13, ''),
(66, 'Campang Jaya', 14, ''),
(67, 'Campang Raya', 14, ''),
(68, 'Nusantara Permai', 14, ''),
(69, 'Sukabumi', 14, ''),
(70, 'Sukabumi Indah', 14, ''),
(71, 'Way Gubak', 14, ''),
(72, 'Way Laga', 14, ''),
(73, 'Kopri Jaya', 15, ''),
(74, 'Kopri Raya', 15, ''),
(75, 'Sukarame', 15, ''),
(76, 'Sukarame Baru', 15, ''),
(77, 'Way Dadi', 15, ''),
(78, 'Way Dadi Baru', 15, ''),
(79, 'Labuhan Dalam', 16, ''),
(80, 'Pematang Wangi', 16, ''),
(81, 'Perumnas Way Kandis', 16, ''),
(82, 'Tanjung Senang ', 16, ''),
(83, 'Way Kandis', 16, ''),
(84, 'Gedong Air', 17, ''),
(85, 'Kepala Tiga Permai', 17, ''),
(86, 'Segala Mider', 17, ''),
(87, 'Sukadanaham', 17, ''),
(88, 'Sukajawa', 17, ''),
(89, 'Sukajawa', 0, ''),
(90, 'Sukajawa Baru', 17, ''),
(91, 'Susunan Baru', 17, ''),
(92, 'Durian Payung', 18, ''),
(93, 'Gotong Royong', 18, ''),
(94, 'Kaliawi', 18, ''),
(95, 'Kaliawi Persada', 18, ''),
(96, 'Kelapa Tiga', 18, ''),
(97, 'Palapa', 18, ''),
(98, 'Pasir Gintung', 18, ''),
(99, 'Kebon Jeruk', 19, ''),
(100, 'Kota Baru', 19, ''),
(101, 'Sawah Brebes', 19, ''),
(102, 'Sawah Lama', 19, ''),
(103, 'Tanjung Agung', 19, ''),
(104, 'Bakung', 20, ''),
(105, 'Batu Putuk', 20, ''),
(106, 'Kuripan', 20, ''),
(107, 'Negeri Olok Gading', 20, ''),
(108, 'Sukarame II', 20, ''),
(109, 'Gedong Pakuan', 21, ''),
(110, 'Gunung Mas', 21, ''),
(113, 'Pesawahan', 21, ''),
(114, 'Sumur Putri', 21, ''),
(115, 'Talang', 21, ''),
(116, 'Teluk Betung', 21, ''),
(117, 'Keteguhan', 22, ''),
(118, 'Kota Karang', 22, ''),
(119, 'Kota Karang Raya', 22, ''),
(120, 'Perwata', 22, ''),
(121, 'Sukamaju', 22, ''),
(122, 'Way Tataan', 22, ''),
(123, 'Gulak Galik', 23, ''),
(124, 'Kupang Kota', 23, ''),
(125, 'Kupang Raya', 23, ''),
(126, 'Kupang Teba', 23, ''),
(127, 'Pengajaran', 23, ''),
(128, 'Sumur Bat', 23, ''),
(129, 'Gunung Sulah', 24, ''),
(130, 'Jagabaya I', 24, ''),
(131, 'Jagabaya II', 24, ''),
(132, 'Jagabaya III', 24, ''),
(133, 'Perumnas Way Halim', 24, ''),
(134, 'Way Halim Permai', 24, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAkun`);

--
-- Indexes for table `datafaskes`
--
ALTER TABLE `datafaskes`
  ADD PRIMARY KEY (`id_faskes`);

--
-- Indexes for table `datajenis`
--
ALTER TABLE `datajenis`
  ADD PRIMARY KEY (`id_jenis_faskes`);

--
-- Indexes for table `jam_buka`
--
ALTER TABLE `jam_buka`
  ADD PRIMARY KEY (`id_jam_buka`);

--
-- Indexes for table `jarak`
--
ALTER TABLE `jarak`
  ADD PRIMARY KEY (`id_jarak`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAkun` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datafaskes`
--
ALTER TABLE `datafaskes`
  MODIFY `id_faskes` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `datajenis`
--
ALTER TABLE `datajenis`
  MODIFY `id_jenis_faskes` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jam_buka`
--
ALTER TABLE `jam_buka`
  MODIFY `id_jam_buka` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jarak`
--
ALTER TABLE `jarak`
  MODIFY `id_jarak` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
