-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2019 pada 10.36
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `th`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(8) NOT NULL,
  `kode` varchar(8) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `kode`, `nama`, `guru`) VALUES
(1, 'A', 'Winartono, S.H', 'Kepala Sekolah'),
(2, 'C', 'Dini Chrisnawati, S.Pd', 'Akutansi'),
(3, 'D', 'Swiyono, SE', 'Pemasaran'),
(4, 'E', 'Widodo, SE', 'Pemasaran'),
(5, 'F', 'Hary Puspitarini, S.Pd', 'Umum'),
(6, 'G', 'Irfan, S.Pd', 'Administrasi Perkantoran'),
(7, 'H', 'Vishnu Isvara, S. Kom', 'Teknik Komputer dan Jaringan'),
(8, 'I', 'Siti Yuniati, S.Pd', 'Pemasaran'),
(9, 'J', 'Henri Wicaksono, S.E', 'Akutansi'),
(10, 'K', 'Nurul Huda, S.Ag', 'Operator'),
(11, 'L', 'Eko, S.S', 'Umum'),
(12, 'M', 'Sriyanti, S.Pd', 'Akutansi'),
(13, 'N', 'Ajizah Tri Lestari, S.Si', 'Umum'),
(14, 'O', 'Istiqomah, S.Pd', 'Umum'),
(15, 'P', 'Tugijono, S.Ag', 'Umum'),
(16, 'Q', 'Amalia Aristiana, S.Pd', 'Teknik Komputer dan Jaringan'),
(17, 'R', 'Drs. Puji Waluyo, MM', 'Umum'),
(18, 'S', 'Bambang Sumitro, S.Kom', 'Teknik Komputer dan Jaringan'),
(19, 'T', 'Vevy Yurizal, S.Pd', 'Umum'),
(20, 'U', 'Y.M. Aniek', 'Umum'),
(21, 'V', 'Suhendi, S.Pd', 'Umum'),
(22, 'W', 'Siswanto, S.Pd', 'Umum'),
(23, 'X', 'Gutser Siburian, S.Pd', 'Bimbingan Konseling'),
(24, 'Y', 'Risma Harjanti', 'Umum'),
(25, 'Z', 'Winarno, S.Pd', 'Umum'),
(26, 'A1', 'Yayah Syamsiah, M.Pd', 'Pemasaran'),
(27, 'A2', 'Maria Menge, S.Pd', 'Pemasaran'),
(28, 'A3', 'Ugi Sistianto, S.Pd', 'Pemasaran'),
(29, 'A4', 'Yuliar Sutan, S.Pd', 'Umum'),
(30, 'A5', 'Esa Fathonah, S.Pd', 'Umum'),
(31, 'A6', 'Priyono, S.Pd', 'Pemasaran'),
(32, 'A7', 'Yike Diana Syaputri,S.Pd', 'Umum'),
(33, 'A8', 'Intan Sholihah, S.Pd', 'Umum'),
(34, 'A9', 'Septiana Pajar N, A.Md', 'Teknik Komputer dan Jaringan'),
(35, 'A10', 'Indah Khoirunisa, S.Pd', 'Akutansi'),
(36, 'B1', 'Eka Tiara Wirahayu, S.Pd', 'Umum'),
(37, 'B2', 'Titih Sundari, S.Pd', 'Umum'),
(38, 'B3', 'Fairuz Marhaenda P, S.Pd', 'Administrasi Perkantoran'),
(39, 'B4', 'Khalisa Qatrunada, S.Ag', 'Umum'),
(40, 'B5', 'Lely lianasari, S.Pd', 'Pemasaran'),
(41, 'B6', 'Ekky Nurbani, S.Psi', 'Bimbingan Konseling'),
(42, 'B7', 'Eldy Taufik, S.Pd', 'Pemasaran'),
(43, 'B8', 'Usup Raharjo, A.Md', 'Teknik Komputer dan Jaringan'),
(44, 'B9', 'Mufidah, S.E', 'Akutansi'),
(45, 'B10', 'Rahmadika Surya S.', 'Teknik Komputer dan Jaringan'),
(46, 'C1', 'Abu Amar A, S.Pd', 'Umum'),
(47, 'C2', 'Rabella Tria P, S.Pd', 'Administrasi Perkantoran'),
(48, 'T1', 'Danang', 'Teknik Komputer dan Jaringan'),
(49, 'T2', 'Wisnu', 'Teknik Komputer dan Jaringan'),
(50, 'T3', 'Marcel', 'Teknik Komputer dan Jaringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posting`
--

CREATE TABLE `posting` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(6) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `jurusan`) VALUES
(176474, 'Adelia Nur Aftianti', 'Akutansi'),
(176475, 'Adetia Mutmandari', 'Akutansi'),
(176476, 'Aisyah', 'Akutansi'),
(176477, 'Alfania Buchari', 'Akutansi'),
(176478, 'Ana Althafun Nisa', 'Akutansi'),
(176480, 'Anggrih Priyatna', 'Akutansi'),
(176481, 'Anisa Nabila', 'Akutansi'),
(176482, 'Aqmal Fahroni', 'Akutansi'),
(176483, 'Aulia Nanda Cholizah', 'Akutansi'),
(176484, 'Aulia Nur Hidayati', 'Akutansi'),
(176485, 'Ayu Aliyah Salsyabilah', 'Akutansi'),
(176486, 'Ayu Enggar Purnama Sari', 'Akutansi'),
(176487, 'Ayu Safitri', 'Akutansi'),
(176488, 'Bayu Prasetyo', 'Akutansi'),
(176489, 'Bela Vebiana', 'Akutansi'),
(176490, 'Candra Haryanto', 'Akutansi'),
(176492, 'Danu Ismanto', 'Akutansi'),
(176493, 'Desti Sulistia', 'Akutansi'),
(176494, 'Desy Fitri Yani', 'Akutansi'),
(176495, 'Devi Nur Elita', 'Akutansi'),
(176496, 'Devi Oktaviana', 'Akutansi'),
(176497, 'Dewi Rafika Isnayah', 'Akutansi'),
(176498, 'Dika Dwi Saputra', 'Akutansi'),
(176499, 'Dilla Novia Rahma', 'Akutansi'),
(176500, 'Fauzia Jamia Mia', 'Akutansi'),
(176501, 'Febiyanti Putri Andini', 'Akutansi'),
(176502, 'Hajah Hadijah Sofiah', 'Akutansi'),
(176503, 'Herlina Suciyanti', 'Akutansi'),
(176504, 'Hervina Julia Mega', 'Akutansi'),
(176505, 'Hilda Kurniati', 'Akutansi'),
(176506, 'Hurqur\'anun Wahyuni', 'Akutansi'),
(176507, 'Jefry Ariyanto', 'Akutansi'),
(176508, 'Jenny Ika Susanti', 'Akutansi'),
(176509, 'Meisya Silviana', 'Akutansi'),
(176510, 'Mokh Rifaldi Andrian Saputra', 'Akutansi'),
(176512, 'Nabilah Khalim', 'Akutansi'),
(176513, 'Nani', 'Akutansi'),
(176514, 'Ni Putu Erica Anggreani', 'Akutansi'),
(176515, 'Nikita Inryani Taneo', 'Akutansi'),
(176516, 'Novia Dyah Ayu Pertiwi', 'Akutansi'),
(176517, 'Nur Atifah', 'Akutansi'),
(176518, 'Nur Haliyah', 'Akutansi'),
(176520, 'Nuryanti', 'Akutansi'),
(176521, 'Oktavia', 'Akutansi'),
(176522, 'Oktavia Margareta', 'Akutansi'),
(176523, 'Pajar', 'Akutansi'),
(176524, 'Putri Adawiyah', 'Akutansi'),
(176525, 'Putri Maharani', 'Akutansi'),
(176526, 'Rafli Hendardi', 'Akutansi'),
(176527, 'Rani Kusuma', 'Akutansi'),
(176528, 'Ratu Amelia Putri', 'Akutansi'),
(176529, 'Restiyani', 'Akutansi'),
(176530, 'Ricki Prataman', 'Akutansi'),
(176531, 'Riska Andriani', 'Akutansi'),
(176532, 'Rizki Ramdani', 'Akutansi'),
(176533, 'Risti Ruslitina', 'Akutansi'),
(176534, 'Safitri Wulandari', 'Akutansi'),
(176535, 'Salmah Sadeli', 'Akutansi'),
(176536, 'Selia Rospika Suhaibah', 'Akutansi'),
(176537, 'Septi Nadila Putri', 'Akutansi'),
(176538, 'Setya Fani Usma Diana', 'Akutansi'),
(176539, 'Sherly Ekayani', 'Akutansi'),
(176540, 'Silfani', 'Akutansi'),
(176541, 'Sinta Dewi', 'Akutansi'),
(176542, 'Siska Maharani', 'Akutansi'),
(176543, 'Siti Anisah', 'Akutansi'),
(176544, 'Siti Holisoh', 'Akutansi'),
(176545, 'Siti Maria Ulfah', 'Akutansi'),
(176546, 'Siti Nurhamidah', 'Akutansi'),
(176547, 'Siti Nuraulia', 'Akutansi'),
(176548, 'Sri Herlina Yuliyanti', 'Akutansi'),
(176549, 'Sri Wahyuni', 'Akutansi'),
(176550, 'Sri Yunitawati', 'Akutansi'),
(176551, 'Suciati Nurhasanah', 'Akutansi'),
(176553, 'Tiasih Amri Amalia', 'Akutansi'),
(176554, 'Tri Kukuh Febriana', 'Akutansi'),
(176555, 'Vera Oktavia', 'Akutansi'),
(176556, 'Victor Pora Hera', 'Akutansi'),
(176557, 'Vika Septia Ningrum', 'Akutansi'),
(176558, 'Wilis Prabowo', 'Akutansi'),
(176560, 'Yeni Zanuba', 'Akutansi'),
(176561, 'Alika Aina Wardah', 'Administrasi Perkantoran'),
(176562, 'Amanda Citra', 'Administrasi Perkantoran'),
(176564, 'Ami Rahmawati', 'Administrasi Perkantoran'),
(176565, 'Anah', 'Administrasi Perkantoran'),
(176566, 'Ananda Irawati', 'Administrasi Perkantoran'),
(176567, 'Andika Fitri Satkasari', 'Administrasi Perkantoran'),
(176568, 'Anglina Dania Febriyanti', 'Administrasi Perkantoran'),
(176569, 'Annisa Nurkholifah', 'Administrasi Perkantoran'),
(176570, 'Anugrah Eni', 'Administrasi Perkantoran'),
(176571, 'Aprilia Dwi Putri', 'Administrasi Perkantoran'),
(176572, 'Arlita Eka Yanti', 'Administrasi Perkantoran'),
(176573, 'Ayu Ardiyanti', 'Administrasi Perkantoran'),
(176574, 'Chatherine Yan Jessica', 'Administrasi Perkantoran'),
(176575, 'Debi Sandiawati', 'Administrasi Perkantoran'),
(176576, 'Desi Sugiarti', 'Administrasi Perkantoran'),
(176577, 'Desria Fitria', 'Administrasi Perkantoran'),
(176578, 'Devi Amelia Pratiwi', 'Administrasi Perkantoran'),
(176579, 'Devi Yuliana', 'Administrasi Perkantoran'),
(176580, 'Dewi Partiwi', 'Administrasi Perkantoran'),
(176581, 'Dhea Apriliani', 'Administrasi Perkantoran'),
(176582, 'Dian Tarisa', 'Administrasi Perkantoran'),
(176584, 'Een Nuraeni', 'Administrasi Perkantoran'),
(176585, 'Elegi Regita Kintamani', 'Administrasi Perkantoran'),
(176586, 'Elsa Delia Veronika', 'Administrasi Perkantoran'),
(176587, 'Elsha Febrianti', 'Administrasi Perkantoran'),
(176588, 'Eva Rahmawati', 'Administrasi Perkantoran'),
(176589, 'Evy Rahimawati', 'Administrasi Perkantoran'),
(176590, 'Fitria Supriatna', 'Administrasi Perkantoran'),
(176591, 'Friska Octaviani', 'Administrasi Perkantoran'),
(176592, 'GITA EVA SAPUTRI', 'Administrasi Perkantoran'),
(176593, 'Griselda Louise Andelle Valencia Liem Valentine', 'Administrasi Perkantoran'),
(176594, 'Hana Sephiana Hamzah', 'Administrasi Perkantoran'),
(176595, 'Harum Ananda', 'Administrasi Perkantoran'),
(176596, 'Heni Ari Yanti', 'Administrasi Perkantoran'),
(176597, 'Imanuela Abigail Manao', 'Administrasi Perkantoran'),
(176598, 'Indri Afrilia', 'Administrasi Perkantoran'),
(176599, 'Ine Heryanti', 'Administrasi Perkantoran'),
(176600, 'Is Lestari', 'Administrasi Perkantoran'),
(176601, 'Jamila Tunisa', 'Administrasi Perkantoran'),
(176602, 'Jeni Nazwa Aulia Hamami', 'Administrasi Perkantoran'),
(176603, 'Jenny Vebriana', 'Administrasi Perkantoran'),
(176604, 'Jessica Aurelly', 'Administrasi Perkantoran'),
(176605, 'Julista Rismayanti', 'Administrasi Perkantoran'),
(176606, 'Kinanti', 'Administrasi Perkantoran'),
(176607, 'Lita Febiyanti', 'Administrasi Perkantoran'),
(176609, 'Miska Nurjanah', 'Administrasi Perkantoran'),
(176611, 'Nanda Khairunnisa', 'Administrasi Perkantoran'),
(176612, 'Nur Amalia', 'Administrasi Perkantoran'),
(176613, 'Parwanti Wahyu Saputri', 'Administrasi Perkantoran'),
(176614, 'Putri Anggraeni', 'Administrasi Perkantoran'),
(176615, 'Putri Shokhiqoh Apriliani', 'Administrasi Perkantoran'),
(176616, 'Rachma Noer Hidayah', 'Administrasi Perkantoran'),
(176617, 'Rahma', 'Administrasi Perkantoran'),
(176618, 'Rani Septiani', 'Administrasi Perkantoran'),
(176619, 'Ratih Wulandari', 'Administrasi Perkantoran'),
(176620, 'Reka Triyana Lestari', 'Administrasi Perkantoran'),
(176621, 'Reza Della Marlinda', 'Administrasi Perkantoran'),
(176622, 'Rietha Berliana Putri', 'Administrasi Perkantoran'),
(176623, 'Riska', 'Administrasi Perkantoran'),
(176624, 'Risma Prihatini', 'Administrasi Perkantoran'),
(176625, 'Santi Komala Sari', 'Administrasi Perkantoran'),
(176626, 'Selvira Amanda', 'Administrasi Perkantoran'),
(176628, 'Serly Dwi Jarwati', 'Administrasi Perkantoran'),
(176629, 'Sintiyah Apriyani', 'Administrasi Perkantoran'),
(176630, 'Siti Fahira Handayani', 'Administrasi Perkantoran'),
(176631, 'Siti Hana Mulyana', 'Administrasi Perkantoran'),
(176632, 'Siti Maesaroh', 'Administrasi Perkantoran'),
(176633, 'Siti Padilah', 'Administrasi Perkantoran'),
(176634, 'Sri Isnaeni', 'Administrasi Perkantoran'),
(176635, 'Suryani', 'Administrasi Perkantoran'),
(176636, 'Syifa Puspita Wardani', 'Administrasi Perkantoran'),
(176638, 'Tsalsa Yogi Istiqomah', 'Administrasi Perkantoran'),
(176639, 'Virda Yani', 'Administrasi Perkantoran'),
(176640, 'Wahdaniah Aprilliani', 'Administrasi Perkantoran'),
(176641, 'Windi Handayani', 'Administrasi Perkantoran'),
(176642, 'Wulan Aprilliyani', 'Administrasi Perkantoran'),
(176643, 'Yustika Mardila', 'Administrasi Perkantoran'),
(176644, 'Zahna Putri', 'Administrasi Perkantoran'),
(176645, 'Ade Lia', 'Pemasaran'),
(176646, 'Adhimas Sahid Purbokayun', 'Pemasaran'),
(176647, 'Adi Gunawan', 'Pemasaran'),
(176648, 'Adi Irvan Ramdani', 'Pemasaran'),
(176649, 'Aditya Hermawan', 'Pemasaran'),
(176650, 'Aftur Rizky Faddilah', 'Pemasaran'),
(176651, 'Agung Adhitya Rohman', 'Pemasaran'),
(176652, 'Agus Tamtomo', 'Pemasaran'),
(176653, 'Ahmad Fadhilah Rahman', 'Pemasaran'),
(176654, 'Ahmad Ramdani', 'Pemasaran'),
(176655, 'Alan Sanjaya', 'Pemasaran'),
(176656, 'Aldi Maulana', 'Pemasaran'),
(176657, 'Andika Iswayudhi', 'Pemasaran'),
(176658, 'Asep Maulana Hamzah', 'Pemasaran'),
(176659, 'Azizur Rochim', 'Pemasaran'),
(176660, 'Calista Sophie Yanti', 'Pemasaran'),
(176661, 'Candra Deni Saputra', 'Pemasaran'),
(176662, 'Carminah', 'Pemasaran'),
(176663, 'Cindy Aditya Wardana', 'Pemasaran'),
(176664, 'Dennis Junnorha', 'Pemasaran'),
(176666, 'Dina Hardiana', 'Pemasaran'),
(176667, 'Diva Virgiantoro', 'Pemasaran'),
(176668, 'Ela Pratiwi', 'Pemasaran'),
(176669, 'Fabyan Vigo Firmansyah', 'Pemasaran'),
(176670, 'Fadlun Khoirunisa', 'Pemasaran'),
(176671, 'Ferry Hermawan', 'Pemasaran'),
(176672, 'Gessa Maulana', 'Pemasaran'),
(176673, 'Hafid Abdullah', 'Pemasaran'),
(176675, 'Hidayat Nur Abi', 'Pemasaran'),
(176676, 'Horas Ekyn Suranta Purba', 'Pemasaran'),
(176677, 'Ika Riyanti', 'Pemasaran'),
(176678, 'Ilham Hanafi', 'Pemasaran'),
(176679, 'Ilham Maulana', 'Pemasaran'),
(176680, 'Irfan Efendi', 'Pemasaran'),
(176681, 'Johan', 'Pemasaran'),
(176682, 'Jonathan Frezialendra', 'Pemasaran'),
(176683, 'Karen Cendana Wangi Suton', 'Pemasaran'),
(176684, 'Laelatul Maghfiroh', 'Pemasaran'),
(176685, 'Lalita Febriyanti', 'Pemasaran'),
(176686, 'Larizki Setiawan', 'Pemasaran'),
(176687, 'Lilla Amelia Fitriyana', 'Pemasaran'),
(176688, 'Lutfi Kholis Fajar', 'Pemasaran'),
(176689, 'Marleza Anggraini Putri', 'Pemasaran'),
(176690, 'Maulydia Astuti', 'Pemasaran'),
(176692, 'Miftahul Ulum', 'Pemasaran'),
(176693, 'Moehamad Rizky Wijaya', 'Pemasaran'),
(176694, 'Mohamad Afan Fahrodzi', 'Pemasaran'),
(176695, 'Mohamad Faris Irwansyah', 'Pemasaran'),
(176696, 'Mohammad Risky Kusbianto', 'Pemasaran'),
(176697, 'Mohkhamad Pirmansyah', 'Pemasaran'),
(176698, 'Mugni Halim', 'Pemasaran'),
(176699, 'Muhamad Iqbal Fadhlullah', 'Pemasaran'),
(176700, 'Muhamad Nurdiansyah', 'Pemasaran'),
(176701, 'Muhammad Adam Ryad', 'Pemasaran'),
(176702, 'Muhammad Alfian', 'Pemasaran'),
(176703, 'Muhammad Rafly', 'Pemasaran'),
(176704, 'Nani Nuraini', 'Pemasaran'),
(176705, 'Nur Faizi', 'Pemasaran'),
(176706, 'Putri Irmanita', 'Pemasaran'),
(176707, 'Putri Novita Sari', 'Pemasaran'),
(176708, 'Rezha Fikri Syifghoh', 'Pemasaran'),
(176709, 'Riski Putra Pratama', 'Pemasaran'),
(176710, 'Roni', 'Pemasaran'),
(176712, 'Satya Astuti', 'Pemasaran'),
(176713, 'Septiana Tantri', 'Pemasaran'),
(176714, 'Suhendri S', 'Pemasaran'),
(176715, 'Surya Supriatna', 'Pemasaran'),
(176717, 'Tegar Fadliya Saputra', 'Pemasaran'),
(176718, 'Tegar Wijaya', 'Pemasaran'),
(176719, 'Teuku Renaldi', 'Pemasaran'),
(176720, 'Tri Faiq Yanuar', 'Pemasaran'),
(176721, 'Trio Marudin', 'Pemasaran'),
(176722, 'Vega Febrian', 'Pemasaran'),
(176723, 'Viki Septianto', 'Pemasaran'),
(176724, 'Vinda Gustiani', 'Pemasaran'),
(176725, 'Wahyu Nuryana', 'Pemasaran'),
(176726, 'Yogi Pratama', 'Pemasaran'),
(176727, 'Zikri Fathurohman', 'Pemasaran'),
(176728, 'Aditiya Hendriyana Periyansah', 'Teknik Komputer dan Jaringan'),
(176729, 'Agi Setiawan', 'Teknik Komputer dan Jaringan'),
(176730, 'Agus Prasetyo', 'Teknik Komputer dan Jaringan'),
(176731, 'Ahmad Andi Pratama', 'Teknik Komputer dan Jaringan'),
(176732, 'Ahmad Sidik Aryanto', 'Teknik Komputer dan Jaringan'),
(176734, 'Aji Apriyanto', 'Teknik Komputer dan Jaringan'),
(176735, 'Aji Santoso', 'Teknik Komputer dan Jaringan'),
(176736, 'Aldian Albi', 'Teknik Komputer dan Jaringan'),
(176738, 'Ananda Rivaldi Esa Putra', 'Teknik Komputer dan Jaringan'),
(176739, 'Andika', 'Teknik Komputer dan Jaringan'),
(176740, 'Andy Fadly', 'Teknik Komputer dan Jaringan'),
(176741, 'Ara Dwi Permatasari', 'Teknik Komputer dan Jaringan'),
(176743, 'Bayu Andika', 'Teknik Komputer dan Jaringan'),
(176744, 'Cici Apriyanti', 'Teknik Komputer dan Jaringan'),
(176745, 'Dafito Mamase', 'Teknik Komputer dan Jaringan'),
(176746, 'Dean Ramadhani Wahyudi', 'Teknik Komputer dan Jaringan'),
(176747, 'Dede Hidayat', 'Teknik Komputer dan Jaringan'),
(176748, 'Denaldy', 'Teknik Komputer dan Jaringan'),
(176749, 'Dwi Prasetyo', 'Teknik Komputer dan Jaringan'),
(176751, 'Elang Aditya Muttaqien', 'Teknik Komputer dan Jaringan'),
(176752, 'Eris Prasetya', 'Teknik Komputer dan Jaringan'),
(176753, 'Ghozali Mahmud', 'Teknik Komputer dan Jaringan'),
(176754, 'Hafidz Firmansyah', 'Teknik Komputer dan Jaringan'),
(176756, 'Hilda Kusuma Ningrum', 'Teknik Komputer dan Jaringan'),
(176758, 'Ilham Dwi Riono', 'Teknik Komputer dan Jaringan'),
(176759, 'Indra Gunawan', 'Teknik Komputer dan Jaringan'),
(176760, 'Irfan Anggoro', 'Teknik Komputer dan Jaringan'),
(176761, 'Irpan Prastyo', 'Teknik Komputer dan Jaringan'),
(176762, 'Ifan Prianto', 'Teknik Komputer dan Jaringan'),
(176764, 'Leo Chandradinata', 'Teknik Komputer dan Jaringan'),
(176766, 'M Jamaludin', 'Teknik Komputer dan Jaringan'),
(176767, 'Maulana Faisal Atmi', 'Teknik Komputer dan Jaringan'),
(176768, 'Maulana Yusuf', 'Teknik Komputer dan Jaringan'),
(176770, 'Mohamad Kent Khafid Pangestu', 'Teknik Komputer dan Jaringan'),
(176771, 'Mohammad Ridwan', 'Teknik Komputer dan Jaringan'),
(176772, 'Muhammad Khatan Almujahid Liga', 'Teknik Komputer dan Jaringan'),
(176773, 'Muhammad Adjy Eko Saputro', 'Teknik Komputer dan Jaringan'),
(176774, 'Muhammad Akbar Sofian', 'Teknik Komputer dan Jaringan'),
(176775, 'Muhammad Alfin Bayu Saputra', 'Teknik Komputer dan Jaringan'),
(176776, 'Muhammad Deatul Kodri', 'Teknik Komputer dan Jaringan'),
(176777, 'Muhammad Fahreza Septiansyah Wakkary', 'Teknik Komputer dan Jaringan'),
(176779, 'Muhammad Haikal Rozaan', 'Teknik Komputer dan Jaringan'),
(176780, 'Muhammad Jamil Fabian', 'Teknik Komputer dan Jaringan'),
(176781, 'Muhammad Rafly Aditya Mulyana', 'Teknik Komputer dan Jaringan'),
(176782, 'Muhammad Rizky', 'Teknik Komputer dan Jaringan'),
(176783, 'Naufal Ilhabi', 'Teknik Komputer dan Jaringan'),
(176784, 'Nia Nurhaliza', 'Teknik Komputer dan Jaringan'),
(176785, 'Nisfu Adi Fadillah', 'Teknik Komputer dan Jaringan'),
(176786, 'Nur Fitriyani Putri Satriadjie', 'Teknik Komputer dan Jaringan'),
(176787, 'Pebri Ermansyah', 'Teknik Komputer dan Jaringan'),
(176789, 'Rendi Dwi Irawan', 'Teknik Komputer dan Jaringan'),
(176790, 'Reza Maulana', 'Teknik Komputer dan Jaringan'),
(176791, 'Reza Sebastian', 'Teknik Komputer dan Jaringan'),
(176792, 'Rian Saputra', 'Teknik Komputer dan Jaringan'),
(176793, 'Ridho Akbar Setiadi', 'Teknik Komputer dan Jaringan'),
(176794, 'Rinjani Putri Kencana', 'Teknik Komputer dan Jaringan'),
(176795, 'Rival Febrian', 'Teknik Komputer dan Jaringan'),
(176796, 'Rizka Nur Aini', 'Teknik Komputer dan Jaringan'),
(176797, 'Rizki Aldi Pratama', 'Teknik Komputer dan Jaringan'),
(176798, 'Sahrina Zaellani', 'Teknik Komputer dan Jaringan'),
(176799, 'Septo Bayu Untoro', 'Teknik Komputer dan Jaringan'),
(176800, 'Siti Alifah', 'Teknik Komputer dan Jaringan'),
(176801, 'Siti Kholizah', 'Teknik Komputer dan Jaringan'),
(176802, 'Sony Heryanah Firmansyah', 'Teknik Komputer dan Jaringan'),
(176803, 'Syadam Adrian', 'Teknik Komputer dan Jaringan'),
(176804, 'Tofan Taruna', 'Teknik Komputer dan Jaringan'),
(176805, 'Trengginas Satrio Pamungkas', 'Teknik Komputer dan Jaringan'),
(176807, 'Valentino Martinez', 'Teknik Komputer dan Jaringan'),
(176808, 'Wahyu Cahya Bagus Pamungkas', 'Teknik Komputer dan Jaringan'),
(176809, 'Wahyu Dwi Saputro', 'Teknik Komputer dan Jaringan'),
(176810, 'Wahyu Tegar Pebriyanto', 'Teknik Komputer dan Jaringan'),
(176811, 'Wahyudin', 'Teknik Komputer dan Jaringan'),
(176812, 'Zaid Abdul Azis', 'Teknik Komputer dan Jaringan'),
(176813, 'Ria Amalia', 'Akutansi'),
(176814, 'Muhammad Alfa Nizar', 'Pemasaran'),
(176815, 'David', 'Teknik Komputer dan Jaringan'),
(176816, 'Yunita Nanda Safira', 'Administrasi Perkantoran'),
(176817, 'Muhammad Arisna Saputra', 'Pemasaran'),
(176818, 'Putri Amara Widyasari', 'Pemasaran'),
(176819, 'Dian Nur Meida', 'Administrasi Perkantoran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `level` enum('1','2','3','4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '1'),
(2, 'dukevii', 'rdss1995', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `walikelas`
--

CREATE TABLE `walikelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `walikelas`
--

INSERT INTO `walikelas` (`id`, `nama`, `kelas`) VALUES
(1, 'Fairuz Marhaenda P, S.Pd', 'X AP 1'),
(2, 'Winarno, S.Pd', 'X AP 2'),
(3, 'Titih Sundari, S.Pd', 'X PM 1'),
(4, 'Septiana Pajar N, A.Md', 'X PM 2'),
(5, 'Henri Wicaksono, S.E', 'X AK 1'),
(6, 'Yike Diana Syaputri,S.Pd', 'X AK 2'),
(7, 'Drs. Puji Waluyo, MM', 'X TKJ 1'),
(8, 'Ajizah Tri Lestari, S.Si', 'X TKJ 2'),
(9, 'Bambang Sumitro, S.Kom', 'X TKJ 3'),
(10, 'Ugi Sistianto, S.Pd', 'XI AP 1'),
(11, 'Khalisa Qatrunada, S.Ag', 'XI AP 2'),
(12, 'Maria Menge, S.Pd', 'XI PM 1'),
(13, 'Eko, S.S', 'XI PM 2'),
(14, 'Siswanto, S.Pd', 'XI AK 1'),
(15, 'Indah Khoirunisa, S.Pd', 'XI AK 2'),
(16, 'Amalia Aristiana, S.Pd', 'XI TKJ 1'),
(17, 'Eka Tiara Wirahayu, S.Pd', 'XI TKJ 2'),
(18, 'Istiqomah, S.Pd', 'XI TKJ 3'),
(19, 'Irfan, S.Pd', 'XII AP 1'),
(20, 'Hary Puspitarini, S.Pd', 'XII AP 2'),
(21, 'Siti Yuniati, S.Pd', 'XII PM 1'),
(22, 'Tugijono, S.Ag', 'XII PM 2'),
(23, 'Sriyanti, S.Pd', 'XII AK 1'),
(24, 'Dini Chrisnawati, S.Pd', 'XII AK 2'),
(25, 'Intan Sholihah, S.Pd', 'XII TKJ 1'),
(26, 'Vishnu Isvara, S. Kom', 'XII TKJ 2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `posting`
--
ALTER TABLE `posting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176820;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176787;

--
-- AUTO_INCREMENT untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
